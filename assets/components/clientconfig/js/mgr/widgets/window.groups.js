ClientConfig.window.Group = function(config) {
    config = config || {};
    config.id = config.id || Ext.id(),
    Ext.applyIf(config,{
        title: (config.isUpdate) ?
            _('clientconfig.update_group') :
            _('clientconfig.add_group'),
        autoHeight: true,
        url: ClientConfig.config.connectorUrl,
        baseParams: {
            action: (config.isUpdate) ?
                'mgr/groups/update' :
                'mgr/groups/create'
        },
        width: 500,
        fields: [{
            xtype: 'hidden',
            name: 'id'
        },{
            xtype: 'textfield',
            name: 'label',
            fieldLabel: _('clientconfig.label'),
            allowBlank: false,
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
        },{
            xtype: 'textarea',
            name: 'description',
            fieldLabel: _('clientconfig.description'),
            anchor: '100%'
        }],
        keys: [] //prevent enter in textarea from firing submit
    });
    ClientConfig.window.Group.superclass.constructor.call(this,config);
};
Ext.extend(ClientConfig.window.Group,MODx.Window);
Ext.reg('clientconfig-window-group',ClientConfig.window.Group);
