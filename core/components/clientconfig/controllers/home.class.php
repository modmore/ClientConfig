<?php
/**
 * The name of the controller is based on the path (home) and the
 * namespace (clientconfig). This home controller is the main client view.
 */
class ClientConfigHomeManagerController extends ClientConfigManagerController {
    public $tabs = array();

    /**
     * Any specific processing we need on the Home controller.
     * In this case, we get all groups and all settings in the group.
     * @param array $scriptProperties
     */
    public function process(array $scriptProperties = array()) {
        $tabs = array();

        /**
         * Get all the Groups
         * @var cgGroup $group
         * @var cgSetting $setting
         */
        $c = $this->modx->newQuery('cgGroup');
        $c->sortby('sortorder','ASC');
        $c->sortby('label','ASC');
        $groups = $this->modx->getCollection('cgGroup', $c);
        foreach ($groups as $group) {
            $grp = $group->toArray();
            $grp['items'] = array();

            $c = $this->modx->newQuery('cgSetting');
            $c->sortby('sortorder','ASC');
            $c->sortby('label','ASC');
            foreach ($group->getMany('Settings', $c) as $setting) {
                $sa = $setting->toArray();
                if (in_array($sa['xtype'],array('checkbox','xcheckbox'))) {
                    $sa['value'] = (bool)$sa['value'];
                }

                if ($sa['xtype'] == 'googlefontlist') {
                    $googleFontsApiKey = $this->modx->getOption('clientconfig.google_fonts_api_key', null, '');
                    $sa['xtype'] = empty($googleFontsApiKey) ? 'textfield' : $sa['xtype'];
                }
                $grp['items'][] = $sa;
            }
            $tabs[] = $grp;
        }
        $this->loadRichTextEditor();
        $this->tabs = $tabs;
    }

    /**
     * The pagetitle to put in the <title> attribute.
     * @return null|string
     */
    public function getPageTitle() {
        return $this->modx->lexicon('clientconfig');
    }

    /**
     * Register all the needed javascript files. Using this method, it will automagically
     * combine and compress them if enabled in system settings.
     */
    public function loadCustomCssJs() {
        $this->addCss($this->clientconfig->config['jsUrl'] . 'mgr/extras/colorpicker/colorpicker.css');


        $mgrUrl = $this->modx->getOption('manager_url',null,MODX_MANAGER_URL);
        $this->addJavascript($mgrUrl.'assets/modext/widgets/element/modx.panel.tv.renders.js');

        $this->addJavascript($this->clientconfig->config['jsUrl'].'mgr/extras/colorpicker/colorpicker.js');
        $this->addJavascript($this->clientconfig->config['jsUrl'].'mgr/extras/colorpicker/colorpickerfield.js');
        $this->addJavascript($this->clientconfig->config['jsUrl'].'mgr/widgets/combos.js');
        $this->addLastJavascript($this->clientconfig->config['jsUrl'].'mgr/sections/home.js');

        $this->addHtml('<script type="text/javascript">
        Ext.onReady(function() {
            ClientConfig.data = '.$this->modx->toJSON($this->tabs).';
            ClientConfig.isAdmin = ' . (($this->clientconfig->hasAdminPermission()) ? '1' : '0') .';
            MODx.load({ xtype: "clientconfig-page-home" });
        });
        </script>');
    }

    /**
     * The name for the template file to load.
     * @return string
     */
    public function getTemplateFile() {
        return $this->clientconfig->config['templatesPath'].'home.tpl';
    }
}
