<?php
require_once MODX_CORE_PATH . 'model/modx/processors/context/getlist.class.php';

class cgContextsGetlistProcessor extends modContextGetListProcessor
{
    public function beforeIteration(array $list)
    {
        $list[] = [
            'key' => '',
            'name' => $this->modx->lexicon('clientconfig.global_values'),
        ];
        return $list;
    }
}

return 'cgContextsGetlistProcessor';