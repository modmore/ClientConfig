<?php
/**
 * @package ClientConfig
 */
class cgSetting extends xPDOSimpleObject {
    public function prefixSourceUrl($value)
    {
        $sourceId = $this->get('source');
        $this->xpdo->loadClass('sources.modMediaSource');
        $source = modMediaSource::getDefaultSource($this->xpdo, $sourceId);
        if (!$source) {
            return $value;
        }
        $source->getWorkingContext();
        $source->initialize();
        return $source->getObjectUrl($value);
    }
}
