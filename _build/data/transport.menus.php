<?php

$menu = $modx->newObject('modMenu');
$menu->fromArray(array(
    'text' => 'clientconfig',
    'parent' => 'components',
    'description' => 'clientconfig.desc',
    'menuindex' => '0',
    'action' => 'home',
    'namespace' => 'clientconfig',
    'params' => '',
    'handler' => '',
),'',true,true);

$vehicle = $builder->createVehicle($menu,array (
    xPDOTransport::PRESERVE_KEYS => true,
    xPDOTransport::UPDATE_OBJECT => true,
    xPDOTransport::UNIQUE_KEY => 'text',
    xPDOTransport::RELATED_OBJECTS => false,
));
$builder->putVehicle($vehicle);
unset ($vehicle,$childActions,$action,$menu);
