<?php
/**
 * Creates a cgSetting object.
 */
class cgSettingCreateProcessor extends modObjectCreateProcessor {
    public $classKey = 'cgSetting';
    public $languageTopics = array('clientconfig:default');

    /**
     * Before setting, we check if the name is filled and/or already exists.
     * @return bool
     */
    public function beforeSet() {
        $key = $this->getProperty('key');
        if (empty($key)) {
            $this->addFieldError('key',$this->modx->lexicon('clientconfig.clientconfigmenu_err_ns_key'));
        } else {
            if ($this->doesAlreadyExist(array('key' => $key))) {
                $this->addFieldError('key',$this->modx->lexicon('clientconfig.clientconfigmenu_err_ae'));
            }
        }
        return parent::beforeSet();
    }
}
return 'cgSettingCreateProcessor';
