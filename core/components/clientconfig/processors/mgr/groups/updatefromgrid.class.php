<?php
/**
 * Updates a cgGroup object from the grid
 */
require_once (dirname(__FILE__).'/update.class.php');

class cgGroupUpdateFromGridProcessor extends cgGroupUpdateProcessor {
    public function initialize() {
        $data = $this->getProperty('data');
        if (empty($data)) return $this->modx->lexicon('invalid_data');
        $data = $this->modx->fromJSON($data);
        if (empty($data)) return $this->modx->lexicon('invalid_data');
        $this->setProperties($data);
        $this->unsetProperty('data');
        return parent::initialize();
    }
}

return 'cgGroupUpdateFromGridProcessor';
