<?php
/**
 * @var array $options
 */
// Convenience
if (!isset($modx) && isset($object) && isset($object->xpdo)) {
    $modx = $object->xpdo;
}

// Check if the setup options form was submitted
$isSetupOptions = array_key_exists('clientconfig_setup_options', $options);
$contextAware = array_key_exists('clientconfig_context_aware', $options) ? (bool)$options['clientconfig_context_aware'] : false;

$setting = $modx->getObject(modSystemSetting::class, ['key' => 'clientconfig.context_aware']);
// Only update context aware value if set via setup options. Remote upgrades should keep the setting as is.
if ($setting instanceof modSystemSetting && $isSetupOptions) {
    $setting->set('value', $contextAware);
    $setting->save();
}

return true;
