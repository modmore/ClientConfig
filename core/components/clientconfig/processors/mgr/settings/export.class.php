<?php
require_once dirname(dirname(__FILE__)) . '/export.class.php';
/**
 * Class cgSettingExportProcessor
 */
class cgSettingExportProcessor extends ClientConfigExportProcessor
{
    public $classKey = 'cgSetting';
}

return 'cgSettingExportProcessor';
