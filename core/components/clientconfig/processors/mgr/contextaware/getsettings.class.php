<?php

class cgContextAwareGetSettingsProcessor extends modProcessor {
    /** @var modContext */
    protected $context;

    public function initialize()
    {
        $ctxKey = $this->getProperty('context');
        $ctx = $this->modx->getObject('modContext', ['key' => $ctxKey]);
        if ($ctx instanceof modContext) {
            $this->context = $ctx;
            return true;
        }
        return 'context_err_nf';
    }

    public function process()
    {
        $c = $this->modx->newQuery('cgContextValue');
        $c->rightJoin('cgSetting', 'Setting');
        $c->select($this->modx->getSelectColumns('cgContextValue', 'cgContextValue'));
        $c->select($this->modx->getSelectColumns('cgSetting', 'Setting', 'setting_', ['id', 'key', 'value', 'default']));
        $c->where([
            'context' => $this->context->get('key')
        ]);

        $values = [
            'context' => $this->context->get('key')
        ];
        foreach ($this->modx->getIterator('cgContextValue', $c) as $cv) {
            /** @var cgContextValue $cg */
            $key = $cv->get('setting_key');
            $value = $cv->get('value');
            if ($value === '') {
                $value = $cv->get('setting_value');
            }

            $values[$key] = $value;
        }

        return $this->success('', $values);
    }
}

return 'cgContextAwareGetSettingsProcessor';