<?php
$events = array();

/** create the plugin object */
$events[0] = $modx->newObject('modEvent');
$events[0]->set('name', 'ClientConfig_ConfigChange');
$events[0]->set('service', 6);
$events[0]->set('groupname', 'clientconfig');

return $events;