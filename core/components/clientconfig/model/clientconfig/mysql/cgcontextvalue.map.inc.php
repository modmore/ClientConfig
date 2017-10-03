<?php
$xpdo_meta_map['cgContextValue']= array (
  'package' => 'clientconfig',
  'version' => '1.1',
  'table' => 'clientconfig_context_value',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'setting' => 0,
    'context' => 'web',
    'value' => '',
  ),
  'fieldMeta' => 
  array (
    'setting' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'context' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '75',
      'phptype' => 'string',
      'null' => false,
      'default' => 'web',
    ),
    'value' => 
    array (
      'dbtype' => 'mediumtext',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
  ),
  'aggregates' => 
  array (
    'Setting' => 
    array (
      'local' => 'setting',
      'class' => 'cgSetting',
      'foreign' => 'id',
      'owner' => 'setting',
      'cardinality' => 'one',
    ),
  ),
);
