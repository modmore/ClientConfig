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
    'xtype' => '',
    'description' => '0',
    'is_required' => 0,
    'sortorder' => 0,
    'value' => '',
    'default' => '',
    'group' => 0,
    'options' => '',
    'process_options' => 0,
    'source' => 0,
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
    'xtype' => 
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
    'is_required' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'boolean',
      'null' => false,
      'default' => 0,
    ),
    'sortorder' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'value' => 
    array (
      'dbtype' => 'mediumtext',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'default' => 
    array (
      'dbtype' => 'mediumtext',
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
    'options' => 
    array (
      'dbtype' => 'mediumtext',
      'phptype' => 'string',
      'null' => true,
      'default' => '',
    ),
    'process_options' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'boolean',
      'null' => false,
      'default' => 0,
    ),
    'source' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'int',
      'null' => true,
      'default' => 0,
    ),
  ),
  'composites' => 
  array (
    'ContextValues' => 
    array (
      'class' => 'cgContextValue',
      'cardinality' => 'many',
      'local' => 'id',
      'foreign' => 'setting',
      'owner' => 'local',
    ),
  ),
  'aggregates' => 
  array (
    'Group' => 
    array (
      'class' => 'cgGroup',
      'cardinality' => 'one',
      'local' => 'group',
      'foreign' => 'id',
      'owner' => 'foreign',
    ),
  ),
);
