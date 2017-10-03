<?php

// Convenience
if (!isset($modx) && isset($object) && isset($object->xpdo)) {
    $modx = $object->xpdo;
}

$contextAware = array_key_exists('clientconfig_context_aware', $options) ? (bool)$options['clientconfig_context_aware'] : false;

$setting = $modx->getObject('modSystemSetting', ['key' => 'clientconfig.context_aware']);
if ($setting instanceof modSystemSetting) {
    $setting->set('value', $contextAware);
    $setting->save();
}

return true;
