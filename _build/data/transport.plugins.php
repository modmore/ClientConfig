<?php
$plugins = array();

/* create the plugin object */
$plugins[0] = $modx->newObject('modPlugin');
$plugins[0]->set('id',1);
$plugins[0]->set('name','ClientConfig');
$plugins[0]->set('description','Sets system settings from the Client Config CMP.');
$plugins[0]->set('plugincode', getSnippetContent($sources['plugins'] . 'clientconfig.plugin.php'));
$plugins[0]->set('category', 0);

$events = include $sources['events'].'events.clientconfig.php';
if (is_array($events) && !empty($events)) {
    $plugins[0]->addMany($events);
    $modx->log(xPDO::LOG_LEVEL_INFO,'Packaged in '.count($events).' Plugin Events for ClientConfig.'); flush();
} else {
    $modx->log(xPDO::LOG_LEVEL_ERROR,'Could not find plugin events for ClientConfig!');
}
unset($events);

return $plugins;
