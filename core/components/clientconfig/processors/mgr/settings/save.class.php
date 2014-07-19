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
                if (empty($value) && $setting->get('is_required') && !in_array($setting->get('xtype'), array('checkbox', 'xcheckbox'))) {
                    $this->addFieldError($key,$this->modx->lexicon('clientconfig.field_is_required'));
                    continue;
                }
                switch ($setting->get('xtype')) {
                    case 'checkbox':
                    case 'xcheckbox':
                        if (!empty($value)) $value = true;
                        else $value = false;
                        break;
                    default:
                        break;
                }
                $setting->set('value', $value);
                $setting->save();
            }
        }

        if ($this->hasErrors()) {
            return $this->failure();
        } else {
            return $this->success();
        }
    }

}
return 'cgSettingSaveProcessor';
