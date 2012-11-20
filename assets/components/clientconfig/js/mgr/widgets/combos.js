ClientConfig.combo.Properties = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        url: ClientConfig.config.connectorUrl,
        baseParams: {
            action: 'mgr/groups/getlist',
            combo: true
        },
        fields: ['id','label'],
        hiddenName: config.name || 'group',
        pageSize: 15,
        valueField: 'id',
        displayField: 'label'
    });
    ClientConfig.combo.Properties.superclass.constructor.call(this,config);
};
Ext.extend(ClientConfig.combo.Properties,MODx.combo.ComboBox);
Ext.reg('clientconfig-combo-properties',ClientConfig.combo.Properties);


ClientConfig.combo.FieldTypes = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        store: new Ext.data.ArrayStore({
            mode: 'local',
            fields: ['xtype','label'],
            data: [
                ['textfield', _('clientconfig.xtype.textfield')],
                ['textarea', _('clientconfig.xtype.textarea')],
                ['numberfield', _('clientconfig.xtype.numberfield')],
                /* ['colorpalette', _('clientconfig.xtype.colorpalette')], @todo these are broken; does not give value in getValues() */
                ['xcheckbox', _('clientconfig.xtype.xcheckbox')],
                ['datefield', _('clientconfig.xtype.datefield')],
                ['timefield', _('clientconfig.xtype.timefield')],
                ['modx-combo', _('clientconfig.xtype.combobox')]
            ]
        }),
        hiddenName: config.name || 'xtype',
        valueField: 'xtype',
        displayField: 'label',
        mode: 'local',
        value: 'textfield'
    });
    ClientConfig.combo.FieldTypes.superclass.constructor.call(this,config);
};
Ext.extend(ClientConfig.combo.FieldTypes,MODx.combo.ComboBox);
Ext.reg('clientconfig-combo-fieldtypes',ClientConfig.combo.FieldTypes);
