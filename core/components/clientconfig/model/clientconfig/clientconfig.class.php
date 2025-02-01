<?php
/**
 * ClientConfig
 *
 * Copyright 2011-2014 by Mark Hamstra <hello@markhamstra.com>
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
    public function __construct(modX &$modx,array $config = array()) {
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

            'verticalTabs' => (bool)$this->modx->getOption('clientconfig.vertical_tabs', null, false),
        ),$config);

        $modelPath = $this->config['modelPath'];
        $this->modx->addPackage('clientconfig',$modelPath);
        $this->modx->lexicon->load('clientconfig:default');

        $this->debug = (bool)$this->modx->getOption('clientconfig.debug',null,false);
    }

    /**
     * Grab settings (from cache if possible) as key => value pairs.
     * @param string $context
     * @return array|mixed
     */
    public function getSettings($context = '') {
        /* Attempt to get from cache */
        $cacheOptions = array(xPDO::OPT_CACHE_KEY => 'system_settings');
        $settings = $this->modx->getCacheManager()->get('clientconfig', $cacheOptions);

        if (!is_array($settings) || !array_key_exists('global', $settings)) {
            $settings = array(
                'global' => array(),
                'contexts' => array(),
            );

            $collection = $this->modx->getCollection('cgSetting');
            /* @var cgSetting[] $collection */
            foreach ($collection as $setting) {
                $isMedia = in_array($setting->get('xtype'), ['modx-panel-tv-image', 'modx-panel-tv-file'], true);

                $value = $setting->get('value');
                if ($isMedia) {
                    $value = $setting->prefixSourceUrl($value);
                }

                $settings['global'][$setting->get('key')] = $value;

                /** @var cgContextValue[] $contextValues */
                $contextValues = $setting->getMany('ContextValues');
                if (is_array($contextValues)) {
                    foreach ($contextValues as $cVal) {
                        $cKey = $cVal->get('context');
                        if (!array_key_exists($cKey, $settings['contexts'])) {
                            $settings['contexts'][$cKey] = array();
                        }

                        $value = $cVal->get('value');
                        if ($isMedia) {
                            $value = $setting->prefixSourceUrl($value);
                        }
                        if (!empty($value)) {
                            $settings['contexts'][$cKey][$setting->get('key')] = $value;
                        }
                    }
                }
            }
            if($settings) {
                /* Write to cache again */
                $this->modx->cacheManager->set('clientconfig', $settings, 0, $cacheOptions);
            }
        }

        if (!is_array($settings)) {
            return array();
        }

        $return = array_key_exists('global', $settings) ? $settings['global'] : array();

        if ($context !== ''
            && array_key_exists('contexts', $settings)
            && array_key_exists($context, $settings['contexts'])
            && $this->modx->getOption('clientconfig.context_aware')
        ) {
            $return = array_merge($return, $settings['contexts'][$context]);
        }

        return $return;
    }

    /**
     * Indicates if the logged in user has admin permissions.
     * @return bool
     */
    public function hasAdminPermission() {
        if (!$this->modx->user || ($this->modx->user->get('id') < 1)) {
            return false;
        }

        $usergroups = $this->modx->getOption('clientconfig.admin_groups', null, 'Administrator');
        $usergroups = explode(',', $usergroups);

        $isMember = $this->modx->user->isMember($usergroups, false);

        /* If we're not a member of the usergroup(s), check for sudo */
        if (!$isMember) {
            $v = $this->modx->getVersionData();
            if (version_compare($v['full_version'], '2.2.1-pl') == 1) {
                $isMember = (bool)$this->modx->user->get('sudo');
            }
        }
        return $isMember;
    }
}

