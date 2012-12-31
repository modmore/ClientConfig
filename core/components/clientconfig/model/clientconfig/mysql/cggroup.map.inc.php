<?php
$xpdo_meta_map['cgGroup']= array (
  'package' => 'clientconfig',
  'version' => '1.1',
  'table' => 'clientconfig_group',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'label' => '',
    'description' => '0',
    'sortorder' => 0,
  ),
  'fieldMeta' => 
  array (
    'label' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '75',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'description' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => false,
      'default' => '0',
    ),
    'sortorder' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
  ),
  'aggregates' => 
  array (
    'Settings' => 
    array (
      'local' => 'id',
      'class' => 'cgSetting',
      'foreign' => 'group',
      'owner' => 'local',
      'cardinality' => 'many',
    ),
  ),
);
