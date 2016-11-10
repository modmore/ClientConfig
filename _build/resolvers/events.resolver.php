<?php
/* @var modX $modx */

if ($object->xpdo) {
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_UPGRADE:
        case xPDOTransport::ACTION_INSTALL:
            $modx =& $object->xpdo;
            /* Create Event OnConfigChange*/
            $Event = $modx->newObject('modEvent');
            $Event->set('name', 'OnConfigChange');
            $Event->set('service',1); 
            $Event->set('groupname', 'ClientConfig');
            $Event->save();
        break;
    }

}
return true;

