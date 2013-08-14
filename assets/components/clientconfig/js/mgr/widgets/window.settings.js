ClientConfig.window.Setting = function(config) {
    config = config || {};
    config.id = config.id || Ext.id(),
    Ext.applyIf(config,{
        title: (config.isUpdate) ?
            _('clientconfig.update_setting') :
            _('clientconfig.add_setting'),
        autoHeight: true,
        url: ClientConfig.config.connectorUrl,
        baseParams: {
            action: (config.isUpdate) ?
                'mgr/settings/update' :
                'mgr/settings/create'
        },
        width: 750,
        fields: [{
            xtype: 'hidden',
            name: 'id'
        },{
            layout: 'column',
            items: [{
                columnWidth: 0.5,
                layout: 'form',
                items: [{
                    xtype: 'textfield',
                    name: 'key',
                    fieldLabel: _('clientconfig.key') + '*',
                    allowBlank: false,
                    anchor: '100%'
                },{
                    xtype: 'textfield',
                    name: 'label',
                    fieldLabel: _('clientconfig.label') + '*',
                    allowBlank: false,
                    anchor: '100%'
                },{
                    xtype: 'textarea',
                    name: 'description',
                    fieldLabel: _('clientconfig.description'),
                    anchor: '100%'
                },{
                    xtype: 'clientconfig-combo-groups',
                    name: 'group',
                    fieldLabel: _('clientconfig.group'),
                    anchor: '100%'
                },{
                    xtype: 'numberfield',
                    name: 'sortorder',
                    fieldLabel: _('clientconfig.sortorder'),
                    allowBlank: false,
                    minValue: 0,
                    maxValue: 9999999999,
                    anchor: '100%',
                    value: 0
                }]
            },{
                columnWidth: 0.5,
                layout: 'form',
                items: [{
                    xtype: 'clientconfig-combo-fieldtypes',
                    name: 'xtype',
                    fieldLabel: _('clientconfig.xtype') + '*',
                    allowBlank: false,
                    anchor: '100%',
                    listeners: {
                        select: {fn: function(field, record) {
//                            console.log(field, record, record.data.xtype);
                            if (record.data.xtype == 'modx-combo') {
                                Ext.getCmp(config.id + '-options').show();
                            } else {
                                Ext.getCmp(config.id + '-options').hide();
                            }
                        }, scope: this}
                    }
                },{
                    xtype: 'textfield',
                    name: 'value',
                    fieldLabel: _('clientconfig.value'),
                    anchor: '100%'
                },{
                    xtype: 'textarea',
                    id: config.id + '-options',
                    name: 'options',
                    fieldLabel: _('clientconfig.options'),
                    description: _('clientconfig.options.desc'),
                    anchor: '100%',
                    hidden: true
                },{
                    xtype: 'checkbox',
                    name: 'is_required',
                    boxLabel: _('clientconfig.is_required.long'),
                    anchor: '100%'
                }]
            }]
        }],
        keys: [] //prevent enter in textarea from firing submit
    });
    ClientConfig.window.Setting.superclass.constructor.call(this,config);
};
Ext.extend(ClientConfig.window.Setting,MODx.Window);
Ext.reg('clientconfig-window-setting',ClientConfig.window.Setting);
