<?php
/* Require our ClientConfig class */
require_once dirname(__FILE__) . '/model/clientconfig/clientconfig.class.php';

/**
 * The main ClientConfig Manager Controller.
 * In this class, we define stuff we want on all of our controllers.
 */
abstract class ClientConfigManagerController extends modExtraManagerController {
    /** @var ClientConfig $clientconfig */
    public $clientconfig = null;

    /**
     * Initializes the main manager controller. In this case we set up the
     * ClientConfig class and add the required javascript on all controllers.
     */
    public function initialize() {
        /* Instantiate the ClientConfig class in the controller */
        $this->clientconfig = new ClientConfig($this->modx);

        /* Add the main javascript class and our configuration */
        $this->addJavascript($this->clientconfig->config['jsUrl'].'mgr/clientconfig.class.js');
        $this->addCss($this->clientconfig->config['cssUrl'].'mgr/clientconfig.css');
        $this->addHtml('<script type="text/javascript">
        Ext.onReady(function() {
            ClientConfig.config = '.$this->modx->toJSON($this->clientconfig->config).';
        });
        </script>');
    }

    /**
     * Defines the lexicon topics to load in our controller.
     * @return array
     */
    public function getLanguageTopics() {
        return array('clientconfig:default');
    }

    /**
     * We can use this to check if the user has permission to see this
     * controller. We'll apply this in the admin section.
     * @return bool
     */
    public function checkPermissions() {
        return true;
    }
}

/**
 * The Index Manager Controller is the default one that gets called when no
 * action is present. It's most commonly used to define the default controller
 * which then hands over processing to the other controller ("home").
 */
class IndexManagerController extends ClientConfigManagerController {
    /**
     * Defines the name or path to the default controller to load.
     * @return string
     */
    public static function getDefaultController() {
        return 'home';
    }
}
