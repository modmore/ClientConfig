<?php
/**
 * Updates a cgSetting object
 */
class cgSettingUpdateProcessor extends modObjectUpdateProcessor {
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
            if ($this->modx->getCount($this->classKey, array('key' => $key, 'AND:id:!=' => $this->object->get('id'))) > 0) {
                $this->addFieldError('key',$this->modx->lexicon('clientconfig.cgsetting_err_ae_key'));
            }
        }

        $this->setCheckbox('is_required', true);
        $this->setCheckbox('process_options', true);
        return parent::beforeSet();
    }

    public function afterSave()
    {
        // Invoke events and clear the cache
        $this->modx->invokeEvent('ClientConfig_ConfigChange');
        $this->modx->getCacheManager()->delete('clientconfig',array(xPDO::OPT_CACHE_KEY => 'system_settings'));
        if ($this->modx->getOption('clientconfig.clear_cache', null, true)) {
            $this->modx->getCacheManager()->delete('',array(xPDO::OPT_CACHE_KEY => 'resource'));
        }

        return parent::afterSave();
    }
}
return 'cgSettingUpdateProcessor';
