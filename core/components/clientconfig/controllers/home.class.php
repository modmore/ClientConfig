<?php

/**
 * The name of the controller is based on the path (home) and the
 * namespace (clientconfig). This home controller is the main client view.
 */
class ClientConfigHomeManagerController extends ClientConfigManagerController {
    /**
     * Any specific processing we need on the Home controller.
     * @param array $scriptProperties
     */
    public function process(array $scriptProperties = array()) {
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
        $this->addJavascript($this->clientconfig->config['js_url'].'mgr/widgets/panel.home.js');
        $this->addJavascript($this->clientconfig->config['js_url'].'mgr/widgets/grid.menu.js');
        $this->addJavascript($this->clientconfig->config['js_url'].'mgr/widgets/window.menu.js');
        $this->addJavascript($this->clientconfig->config['js_url'].'mgr/widgets/formpanel.menu.js');

        /* As the section instantiates the widgets, always load it last. */
        $this->addLastJavascript($this->clientconfig->config['js_url'].'mgr/sections/index.js');
    }

    /**
     * The name for the template file to load.
     * @return string
     */
    public function getTemplateFile() {
        return $this->clientconfig->config['templates_path'].'home.tpl';
    }
}
