<?php
/**
 * @package ClientConfig
 * Used to save setting values from the client view.
 */
class cgSettingSaveProcessor extends modProcessor {

    /**
     * {@inheritdoc}
     * @return array|string
     */
    public function process() {
        $values = (!empty($_POST['values'])) ? $_POST['values'] : '[]';
        $values = json_decode($values, true);
        if (!is_array($values)) {
            return $this->failure('Invalid JSON provided');
        }

        $context = false;
        $contextKey = array_key_exists('context', $values) ? $values['context'] : '';
        if ($contextKey !== '') {
            $context = $this->modx->getObject('modContext', ['key' => $contextKey]);
            if (!$context) {
                return $this->failure($this->modx->lexicon('context_err_nf'));
            }
        }

        // Loop over each of the provided values, to update them in the database.
        foreach ($values as $key => $value) {
            $setting = $this->modx->getObject('cgSetting',array('key' => $key));
            if (!($setting instanceof cgSetting)) {
                continue;
            }

            if (trim($value) === '' && $setting->get('is_required') &&
                !in_array($setting->get('xtype'), array('checkbox', 'xcheckbox'), true)) {
                $this->addFieldError($key, $setting->get('label') . ': ' . $this->modx->lexicon('clientconfig.field_is_required'));
                continue;
            }

            // Some field type specific value handling
            switch ($setting->get('xtype')) {
                case 'checkbox':
                case 'xcheckbox':
                    $value = !empty($value) ? true : false;
                    break;
                default:
                    break;
            }

            // If we have a context key, update the context value
            if ($context) {
                $contextValue = $this->modx->getObject('cgContextValue', ['setting' => $setting->get('id'), 'context' => $contextKey]);
                if (!($contextValue instanceof cgContextValue)) {
                    $contextValue = $this->modx->newObject('cgContextValue');
                    $contextValue->set('setting', $setting->get('id'));
                    $contextValue->set('context', $contextKey);
                }

                $contextValue->set('value', $value);
                $contextValue->save();
            }
            // Update the global setting instead
            else {
                $setting->set('value', $value);
                $setting->save();
            }
        }

        // Invoke events and clear the cache
        $this->modx->invokeEvent('ClientConfig_ConfigChange');
        $this->modx->getCacheManager()->delete('clientconfig',array(xPDO::OPT_CACHE_KEY => 'system_settings'));
        if ($this->modx->getOption('clientconfig.clear_cache', null, true)) {
            $this->modx->getCacheManager()->delete('',array(xPDO::OPT_CACHE_KEY => 'resource'));
        }

        // Return a response
        if ($this->hasErrors()) {
            $errors = $this->modx->error->getFields();
            return $this->failure(implode('<br>', $errors));
        } else {
            return $this->success();
        }
    }

}
return 'cgSettingSaveProcessor';
