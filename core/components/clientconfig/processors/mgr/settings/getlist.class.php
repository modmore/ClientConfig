<?php
/**
 * Gets a list of cgSetting objects.
 */
class cgSettingGetListProcessor extends modObjectGetListProcessor {
    public $classKey = 'cgSetting';
    public $languageTopics = array('clientconfig:default');
    public $defaultSortField = 'label';
    public $defaultSortDirection = 'ASC';

    /**
     * @param xPDOQuery $c
     * @return xPDOQuery
     */
    public function prepareQueryBeforeCount(xPDOQuery $c) {
        $c->leftJoin('cgGroup','Group');
        $c->select($this->modx->getSelectColumns('cgSetting', 'cgSetting'));
        $c->select($this->modx->getSelectColumns('cgGroup', 'Group', 'group_', array('label')));

        /* Filter on Group */
        $group = $this->getProperty('group');
        if (!empty($group) && is_numeric($group)) {
            $c->where(array(
                'group' => $group
            ));
        }
        return $c;
    }

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
return 'cgSettingGetListProcessor';
