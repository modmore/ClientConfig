<?php
class cgGroupRemoveProcessor extends modObjectRemoveProcessor {
    public $classKey = 'cgGroup';
    public $objectType = 'cgGroup';
    
    public function beforeRemove() {
        $settings = $this->modx->getCollection('cgSetting',array('group' => $this->object->get('id')));
        foreach ($settings as $setting) {
            /* @var cgSetting $setting */
            $setting->set('group',0);
            $setting->save();
        }
        return parent::beforeRemove();
    }
}
return 'cgGroupRemoveProcessor';
