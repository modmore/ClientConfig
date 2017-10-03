<?php

$s = array(
    'admin_groups' => 'Administrator',
    'clear_cache' => true,
    'vertical_tabs' => false,
    'context_aware' => false,
    'google_fonts_api_key' => '',
);

$settings = array();

foreach ($s as $key => $value) {
    if (is_string($value) || is_int($value)) { $type = 'textfield'; }
    elseif (is_bool($value)) { $type = 'combo-boolean'; }
    else { $type = 'textfield'; }

    $parts = explode('.',$key);
    if (count($parts) == 1) { $area = 'Default'; }
    else { $area = $parts[0]; }
    
    $settings['clientconfig.'.$key] = $modx->newObject('modSystemSetting');
    $settings['clientconfig.'.$key]->set('key', 'clientconfig.'.$key);
    $settings['clientconfig.'.$key]->fromArray(array(
        'value' => $value,
        'xtype' => $type,
        'namespace' => 'clientconfig',
        'area' => $area
    ));
}

return $settings;


