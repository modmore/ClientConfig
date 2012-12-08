<?php
/**
 * @package ClientConfig
 */
class cgSetting extends xPDOSimpleObject {
    /**
     * {@inheritdoc}
     * Also removes the clientconfig cache.
     *
     * @param null $cacheFlag
     * @return bool
     */
    public function save($cacheFlag = null) {
        $result = parent::save($cacheFlag);
        $this->xpdo->getCacheManager()->delete('clientconfig',array(xPDO::OPT_CACHE_KEY => 'system_settings'));
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
        $this->xpdo->getCacheManager()->delete('clientconfig',array(xPDO::OPT_CACHE_KEY => 'system_settings'));
        return $result;
    }
}
