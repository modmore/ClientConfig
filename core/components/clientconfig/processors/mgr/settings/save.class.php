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
        $values = $this->modx->fromJSON($values);

        foreach ($values as $key => $value) {
            $setting = $this->modx->getObject('cgSetting',array('key' => $key));
            if ($setting instanceof cgSetting) {
                if (trim($value) === '' && $setting->get('is_required') &&
                    !in_array($setting->get('xtype'), array('checkbox', 'xcheckbox'), true)) {
                    $this->addFieldError($key, $setting->get('label') . ': ' . $this->modx->lexicon('clientconfig.field_is_required'));
                    continue;
                }
                switch ($setting->get('xtype')) {
                    case 'checkbox':
                    case 'xcheckbox':
                        $value = !empty($value) ? true : false;
                        break;
                    default:
                        break;
                }
                $setting->set('value', $value);
                $setting->save();
            }
        }

        if ($this->hasErrors()) {
            $errors = $this->modx->error->getFields();
            return $this->failure(implode('<br>', $errors));
        } else {
            return $this->success();
        }
    }

}
return 'cgSettingSaveProcessor';
