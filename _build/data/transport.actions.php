<?php

$action = $modx->newObject('modAction');
$action->fromArray(array(
    'id' => 0,
    'namespace' => 'clientconfig',
    'parent' => '0',
    'controller' => 'index',
    'haslayout' => '1',
    'lang_topics' => 'clientconfig:default',
    'assets' => '',
),'',true,true);

$menu = $modx->newObject('modMenu');
$menu->fromArray(array(
    'text' => 'clientconfig',
    'parent' => 'components',
    'description' => 'clientconfig.desc',
    'icon' => 'images/icons/plugin.gif',
    'menuindex' => '0',
    'params' => '',
    'handler' => '',
),'',true,true);
$menu->addOne($action);

$vehicle = $builder->createVehicle($menu,array (
    xPDOTransport::PRESERVE_KEYS => true,
    xPDOTransport::UPDATE_OBJECT => true,
    xPDOTransport::UNIQUE_KEY => 'text',
    xPDOTransport::RELATED_OBJECTS => true,
    xPDOTransport::RELATED_OBJECT_ATTRIBUTES => array (
        'Action' => array (
            xPDOTransport::PRESERVE_KEYS => true,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => array ('namespace','controller'),
            xPDOTransport::RELATED_OBJECTS => false
        ),
    ),
));
$builder->putVehicle($vehicle);
unset ($vehicle,$childActions,$action,$menu);
