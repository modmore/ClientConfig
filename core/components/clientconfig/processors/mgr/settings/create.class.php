<?php
/**
 * Creates a cgSetting object.
 */
class cgSettingCreateProcessor extends modObjectCreateProcessor {
    public $classKey = 'cgSetting';
    public $languageTopics = array('clientconfig:default');

    /**
     * Before setting, we check if the name is filled and/or already exists. Also checkboxes.
     * @return bool
     */
    public function beforeSet() {
        $key = $this->getProperty('key');
        if (empty($key)) {
            $this->addFieldError('key',$this->modx->lexicon('clientconfig.cgsetting_err_ns_key'));
        } else {
            if ($this->doesAlreadyExist(array('key' => $key))) {
                $this->addFieldError('key',$this->modx->lexicon('clientconfig.cgsetting_err_ae_key'));
            }
        }
        $order = (int)$this->getProperty('sortorder', 0);
        if ($order < 1) {
            $order = $this->modx->getCount('cgSetting', array('group', (int)$this->getProperty('group', 0)));
            $this->setProperty('sortorder', $order);
        }

        /* Set is_required checkbox */
        $this->setCheckbox('is_required', true);
        return parent::beforeSet();
    }
}
return 'cgSettingCreateProcessor';
