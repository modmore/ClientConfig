ClientConfig.combo.Groups = function(config) {
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
    ClientConfig.combo.Groups.superclass.constructor.call(this,config);

    if (config.storeLoadListener) {
        this.store.on('load', config.storeLoadListener, this);
        this.on('render', function() {
            if (!this.getValue()) {
                this.store.load();
            }
        });
    }
};
Ext.extend(ClientConfig.combo.Groups,MODx.combo.ComboBox);
Ext.reg('clientconfig-combo-groups',ClientConfig.combo.Groups);


ClientConfig.combo.FieldTypes = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        store: new Ext.data.ArrayStore({
            mode: 'local',
            fields: ['xtype','label'],
            data: [
                ['textfield', _('clientconfig.xtype.textfield')],
                ['textarea', _('clientconfig.xtype.textarea')],
                ['richtext', _('clientconfig.xtype.richtext')],
                ['modx-panel-tv-image', _('clientconfig.xtype.image')],
                ['modx-panel-tv-file', _('clientconfig.xtype.file')],
                ['numberfield', _('clientconfig.xtype.numberfield')],
                ['colorpickerfield', _('clientconfig.xtype.colorpalette')],
                ['xcheckbox', _('clientconfig.xtype.xcheckbox')],
                ['datefield', _('clientconfig.xtype.datefield')],
                ['timefield', _('clientconfig.xtype.timefield')],
                ['password', _('clientconfig.xtype.password')],
                ['modx-combo', _('clientconfig.xtype.combobox')],
                ['googlefontlist', _('clientconfig.xtype.googlefonts')]
            ]
        }),
        hiddenName: config.name || 'xtype',
        valueField: 'xtype',
        displayField: 'label',
        mode: 'local',
        value: 'textfield'
    });

    if (MODx.config['clientconfig.google_fonts_api_key'] == '')  config.store.removeAt(config.store.find('xtype','googlefontlist'));
    ClientConfig.combo.FieldTypes.superclass.constructor.call(this,config);
};
Ext.extend(ClientConfig.combo.FieldTypes,MODx.combo.ComboBox);
Ext.reg('clientconfig-combo-fieldtypes',ClientConfig.combo.FieldTypes);

ClientConfig.combo.GoogleFontList = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        url: ClientConfig.config.connectorUrl,
        baseParams: {
            action: 'mgr/fonts/google/getList',
            combo: true
        },
        fields: ['family','name'],
        hiddenName: config.name || 'font',
        valueField: 'family',
        displayField: 'name'
    });
    ClientConfig.combo.GoogleFontList.superclass.constructor.call(this,config);
};
Ext.extend(ClientConfig.combo.GoogleFontList, MODx.combo.ComboBox);
Ext.reg('googlefontlist',ClientConfig.combo.GoogleFontList);
