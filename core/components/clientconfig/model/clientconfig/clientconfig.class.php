<?php
/**
 * ClientConfig
 *
 * Copyright 2011 by Mark Hamstra <hello@markhamstra.com>
 *
 * This file is part of ClientConfig, a real estate property listings component
 * for MODX Revolution.
 *
 * ClientConfig is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClientConfig is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClientConfig; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package clientconfig
*/

class ClientConfig {
    /**
     * @var modX|null $modx
     */
    public $modx = null;
    /**
     * @var array
     */
    public $config = array();
    /**
     * @var bool
     */
    public $debug = false;


    /**
     * @param \modX $modx
     * @param array $config
     */
    function __construct(modX &$modx,array $config = array()) {
        $this->modx =& $modx;

        $corePath = $this->modx->getOption('clientconfig.core_path',$config,$this->modx->getOption('core_path').'components/clientconfig/');
        $assetsUrl = $this->modx->getOption('clientconfig.assets_url',$config,$this->modx->getOption('assets_url').'components/clientconfig/');
        $assetsPath = $this->modx->getOption('clientconfig.assets_path',$config,$this->modx->getOption('assets_path').'components/clientconfig/');
        $this->config = array_merge(array(
            'basePath' => $corePath,
            'corePath' => $corePath,
            'modelPath' => $corePath.'model/',
            'processorsPath' => $corePath.'processors/',
            'elementsPath' => $corePath.'elements/',
            'templatesPath' => $corePath.'templates/',
            'assetsPath' => $assetsPath,
            'jsUrl' => $assetsUrl.'js/',
            'cssUrl' => $assetsUrl.'css/',
            'assetsUrl' => $assetsUrl,
            'connectorUrl' => $assetsUrl.'connector.php',
        ),$config);

        $modelPath = $this->config['modelPath'];
        $this->modx->addPackage('clientconfig',$modelPath);
        $this->modx->lexicon->load('clientconfig:default');
        
        $this->debug = (bool)$this->modx->getOption('clientconfig.debug',null,false);
    }
}

