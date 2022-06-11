<?php

use MODX\Revolution\Processors\Context\GetList;

// Use old 2.x version if not on MODX 3+
if (!class_exists(GetList::class)) {
    require_once MODX_CORE_PATH . 'model/modx/processors/context/getlist.class.php';
    
    class cgContextsGetlistProcessor extends modContextGetListProcessor
    {
        use GetContexts;
    }
    return 'cgContextsGetlistProcessor';
}

// 3.x version
class cgContextsGetlistProcessor extends GetList
{
    use GetContexts;
}
return 'cgContextsGetlistProcessor';

// Common trait for both versions of processor
trait GetContexts {
    public function beforeIteration(array $list)
    {
        $list[] = [
            'key' => '',
            'name' => $this->modx->lexicon('clientconfig.global_values'),
        ];
        return $list;
    }
}
