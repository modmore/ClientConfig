<?php
/* 
 * cgSettings
 *
 * Returns ClientConfig settings. 
 * Option to filter by group. 
 * Output can be formatted with a tpl chunk, otherwise an array of results is printed.
 * Example usage: [[cgSettings?group=`2`&tpl=`myTpl`]]
 * 
 */

/* Get properties */
$key = $modx->getOption('key',$scriptProperties,'');
$group = $modx->getOption('group',$scriptProperties,'');
$tpl = $modx->getOption('tpl',$scriptProperties,'');

/* Grab the class */
$path = $modx->getOption('clientconfig.core_path', null, $modx->getOption('core_path') . 'components/clientconfig/');
$path .= 'model/clientconfig/';
$clientConfig = $modx->getService('clientconfig','ClientConfig', $path);
 
/* Set filters */
$where = array();
if ($key) $where['key'] = $key; 
if ($group) $where['group'] = $group;

/* Set cache id */
$cacheId = 'clientconfig';
if ($group) $cacheId = 'clientconfig.group.' . $group;
if ($key) $cacheId = 'clientconfig.key.' . $key;

/* If we got the class (gotta be careful of failed migrations), grab settings and go! */
if ($clientConfig instanceof ClientConfig) $settings = $clientConfig->getSettings($where, $cacheId);

/* Format the output */
if (!$tpl) return print_r($settings);
foreach ($settings as $key => $value) {
     $output .= $modx->parseChunk($tpl,array('key' => $key, 'value' => $value));
}
return $output;