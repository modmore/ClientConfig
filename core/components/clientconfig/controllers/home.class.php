<?php

/**
 * The name of the controller is based on the path (home) and the
 * namespace (clientconfig). This home controller is the main client view.
 */
class ClientConfigHomeManagerController extends ClientConfigManagerController {
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
        $groups = $this->modx->getCollection('cgGroup');
        foreach ($groups as $group) {
            $id = $group->get('id');
            $tabs[$id] = $group->toArray();
            $tabs[$id]['items'] = array();

            foreach ($group->getMany('Settings') as $setting) {
                $tabs[$id]['items'][] = $setting->toArray();
            }
        }

        $this->addHtml('<script type="text/javascript">
        Ext.onReady(function() {
            ClientConfig.data = '.$this->modx->toJSON($tabs).';
        });
        </script>');
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
        /*$this->addJavascript($this->clientconfig->config['jsUrl'].'mgr/widgets/panel.home.js');
        $this->addJavascript($this->clientconfig->config['jsUrl'].'mgr/widgets/grid.menu.js');
        $this->addJavascript($this->clientconfig->config['jsUrl'].'mgr/widgets/window.menu.js');
        $this->addJavascript($this->clientconfig->config['jsUrl'].'mgr/widgets/formpanel.menu.js');*/

        $this->addLastJavascript($this->clientconfig->config['jsUrl'].'mgr/sections/home.js');
    }

    /**
     * The name for the template file to load.
     * @return string
     */
    public function getTemplateFile() {
        return $this->clientconfig->config['templatesPath'].'home.tpl';
    }
}
