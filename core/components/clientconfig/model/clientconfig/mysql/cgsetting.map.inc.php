<?php
$xpdo_meta_map['cgSetting']= array (
  'package' => 'clientconfig',
  'version' => '1.1',
  'table' => 'clientconfig_setting',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'key' => '',
    'label' => '',
    'description' => '0',
    'is_required' => 0,
    'value' => '',
    'default' => '',
    'group' => 0,
  ),
  'fieldMeta' => 
  array (
    'key' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '75',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
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
      'dbtype' => 'varchar',
      'precision' => '500',
      'phptype' => 'string',
      'null' => false,
      'default' => '0',
    ),
    'is_required' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'boolean',
      'null' => false,
      'default' => 0,
    ),
    'value' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '250',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'default' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '250',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'group' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'int',
      'null' => true,
      'default' => 0,
    ),
  ),
  'aggregates' => 
  array (
    'Group' => 
    array (
      'local' => 'group',
      'class' => 'cgGroup',
      'foreign' => 'id',
      'owner' => 'foreign',
      'cardinality' => 'one',
    ),
  ),
);
