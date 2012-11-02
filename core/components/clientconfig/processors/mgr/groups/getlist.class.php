<?php
/**
 * Gets a list of cgGroup objects.
 */
class cgGroupGetListProcessor extends modObjectGetListProcessor {
    public $classKey = 'cgGroup';
    public $languageTopics = array('clientconfig:default');
    public $defaultSortField = 'name';
    public $defaultSortDirection = 'ASC';

    /**
     * Transform the xPDOObject derivative to an array;
     * @param xPDOObject $object
     * @return array
     */
    public function prepareRow(xPDOObject $object) {
        $row = $object->toArray('', false, true);
        return $row;
    }
}
return 'cgGroupGetListProcessor';
