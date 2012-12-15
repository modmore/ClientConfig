<?php
/* @var modX $modx */

if ($object->xpdo) {
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_UPGRADE:
        case xPDOTransport::ACTION_INSTALL:
            $modx =& $object->xpdo;

            $modelPath = $modx->getOption('clientconfig.core_path',null,$modx->getOption('core_path').'components/clientconfig/').'model/';
            $modx->addPackage('clientconfig',$modelPath);
            $manager = $modx->getManager();
            $loglevel = $modx->setLogLevel(modX::LOG_LEVEL_ERROR);

            $objects = array('cgSetting', 'cgGroup');
            foreach ($objects as $obj) {
                $manager->createObjectContainer($obj);
            }

            $manager->addField('cgSetting', 'sortorder');
            $manager->addField('cgGroup', 'sortorder');
            $modx->setLogLevel($loglevel);
        break;
    }

}
return true;

