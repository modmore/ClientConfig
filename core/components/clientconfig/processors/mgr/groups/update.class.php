<?php
/**
 * Updates a cgGroup object
 */
class cgGroupUpdateProcessor extends modObjectUpdateProcessor {
    public $classKey = 'cgGroup';
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
return 'cgGroupUpdateProcessor';
