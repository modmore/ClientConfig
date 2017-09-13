<?php
require_once dirname(dirname(__FILE__)) . '/import.class.php';
/**
 * Class cgSettingImportProcessor
 */
class cgSettingImportProcessor extends ClientConfigImportProcessor
{
    public $classKey = 'cgSetting';

    public function success($msg = '',$object = null)
    {
        // Invoke events and clear the cache
        $this->modx->invokeEvent('ClientConfig_ConfigChange');
        $this->modx->getCacheManager()->delete('clientconfig',array(xPDO::OPT_CACHE_KEY => 'system_settings'));
        if ($this->modx->getOption('clientconfig.clear_cache', null, true)) {
            $this->modx->getCacheManager()->delete('',array(xPDO::OPT_CACHE_KEY => 'resource'));
        }

        return parent::success($msg, $object);
    }
}

return 'cgSettingImportProcessor';
