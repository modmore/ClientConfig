<?php
/**
 * @package ClientConfig
 */
class cgSetting extends xPDOSimpleObject {
    public function clearCache() {
        $this->xpdo->getCacheManager()->delete('clientconfig',array(xPDO::OPT_CACHE_KEY => 'system_settings'));
        if ($this->getOption('clientconfig.clear_cache', null, true)) {
            $this->xpdo->cacheManager->delete('',array(xPDO::OPT_CACHE_KEY => 'resource'));
        }

    }
    /**
     * {@inheritdoc}
     * Also removes the clientconfig cache.
     *
     * @param null $cacheFlag
     * @return bool
     */
    public function save($cacheFlag = null) {
        $result = parent::save($cacheFlag);
        $this->xpdo->invokeEvent('ClientConfig_ConfigChange');
        $this->clearCache();
        return $result;
    }
    /**
     * {@inheritdoc}
     * Also removes the ClientConfig cache.
     *
     * @param array $ancestors
     * @return bool
     */
    public function remove(array $ancestors = array()) {
        $result = parent::remove($ancestors);
        $this->xpdo->invokeEvent('ClientConfig_ConfigChange');
        $this->clearCache();
        return $result;
    }
}
