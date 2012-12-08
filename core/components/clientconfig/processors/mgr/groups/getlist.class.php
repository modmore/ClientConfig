<?php
/**
 * Gets a list of cgGroup objects.
 */
class cgGroupGetListProcessor extends modObjectGetListProcessor {
    public $classKey = 'cgGroup';
    public $languageTopics = array('clientconfig:default');
    public $defaultSortField = 'label';
    public $defaultSortDirection = 'ASC';


    /**
     * Transform the xPDOObject derivative to an array;
     * @param xPDOObject $object
     * @return array
     */
    public function prepareRow(xPDOObject $object) {
        $row = $object->toArray('', false, true);
        $row['settings_count'] = $this->modx->getCount('cgSetting', array('group' => $row['id']));
        return $row;
    }
}
return 'cgGroupGetListProcessor';
