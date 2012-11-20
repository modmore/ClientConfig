<?php
/**
 * Creates a cgGroup object.
 */
class cgGroupCreateProcessor extends modObjectCreateProcessor {
    public $classKey = 'cgGroup';
    public $languageTopics = array('clientconfig:default');

    /**
     * Before saving, we check if the name is filled and/or already exists.
     * @return bool
     */
    public function beforeSave() {
        $name = $this->getProperty('label');

        if (empty($name)) {
            $this->addFieldError('label',$this->modx->lexicon('clientconfig.clientconfigmenu_err_ns_label'));
        } else {
            if ($this->doesAlreadyExist(array('label' => $name))) {
                $this->addFieldError('label',$this->modx->lexicon('clientconfig.clientconfigmenu_err_ae'));
            }
        }

        return parent::beforeSave();
    }
}
return 'cgGroupCreateProcessor';
