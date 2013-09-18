/* 
 * cgSettings
 *
 * Returns ClientConfig settings. 
 * Option to filter by group. 
 * Output can be formatted with a tpl chunk, otherwise an array of results is printed.
 * Example usage: [[cgSettings?group=`2`&tpl=`myTpl`]]
 * 
 */
 
/* Set defaults */
$group = $modx->getOption('group',$scriptProperties,'');
$groupSet = ($group) ? array('group'=>$group) : null;
$tpl = $modx->getOption('tpl',$scriptProperties,'');

/* Attempt to get settings from cache if no group filter */
if (!$group) {
    $cacheOptions = array(xPDO::OPT_CACHE_KEY => 'system_settings');
    $settings = $modx->getCacheManager()->get('clientconfig', $cacheOptions);
}

/* Otherwise query the database with optional filter */
if (empty($settings) && $modx->getCount('cgSetting') > 0) {
    $collection = $modx->getCollection('cgSetting', $groupSet);
    $settings = array();
    /* @var cgSetting $setting */
    foreach ($collection as $setting) {
        $settings[$setting->get('key')] = $setting->get('value');
    }
}

/* Format the output */
if (!$tpl) return print_r($settings);
foreach ($settings as $key => $value) {
     $output .= $modx->parseChunk($tpl,array('key' => $key, 'value' => $value));
}
return $output;
