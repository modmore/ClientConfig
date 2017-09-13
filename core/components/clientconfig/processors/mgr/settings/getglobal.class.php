<?php

class cgSettingsGetGlobalProcessor extends modProcessor {
    public function process()
    {
        $c = $this->modx->newQuery('cgSetting');
        $values = [
            'context' => '',
            'context_name' => '',
        ];
        foreach ($this->modx->getIterator('cgSetting', $c) as $setting) {
            /** @var cgSetting $cg */
            $key = $setting->get('key');
            $value = $setting->get('value');
            switch ($setting->get('xtype')) {
                case 'checkbox':
                case 'xcheckbox':
                    $value = (bool)$value;
                    break;
            }

            if ($value === '') {
                $value = $setting->get('default');
            }

            $values[$key] = $value;
        }

        return $this->success('', $values);
    }
}

return 'cgSettingsGetGlobalProcessor';