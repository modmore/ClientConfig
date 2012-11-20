<?php
/**
 * Updates a cgSetting object
 */
class cgSettingUpdateProcessor extends modObjectUpdateProcessor {
    public $classKey = 'cgSetting';
    public $languageTopics = array('clientconfig:default');
    public $objectType = 'clientconfig.clientconfigmenu';

    /**
     * Validate stuff before save.
     * @return bool
     */
    public function beforeSave() {
        return parent::beforeSave();
    }
}
return 'cgSettingUpdateProcessor';
