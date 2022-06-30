<?php

$events = array();

$e = array(
    'OnMODXInit',
    'OnHandleRequest',
    'pdoToolsOnFenomInit',
);

foreach ($e as $ev) {
    $events[$ev] = $modx->newObject('modPluginEvent');
    $events[$ev]->fromArray(array(
        'event' => $ev,
        // Lower OnHandleRequest priority to 1, to work reliably out of the box with context router plugins.
        'priority' => $ev === 'OnHandleRequest' ? 1 : 0, 
        'propertyset' => 0
    ),'',true,true);
}

return $events;


