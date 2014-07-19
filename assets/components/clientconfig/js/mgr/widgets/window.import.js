ClientConfig.window.Import = function(config) {
    config = config || {};
    config.id = config.id || Ext.id(),
    Ext.applyIf(config,{
        url: ClientConfig.config.connectorUrl,
        autoHeight: true,
        fileUpload: true,
        modal: true,
        width: 450,
        fields: [{
            xtype: 'panel',
            cls: 'panel-desc',
            html: '<p>' + config.introduction + '</p>',
            border: false
        },{
            xtype: 'textfield',
            fieldLabel: _('clientconfig.import_file'),
            name: 'file',
            inputType: 'file'
        },{
            xtype: 'radiogroup',
            fieldLabel: _('clientconfig.import_mode'),
            columns: 1,
            items: [{
                boxLabel: _('clientconfig.import_mode.insert', {what: config.what}),
                name: 'mode',
                inputValue: 'insert',
                checked: true
            },{
                boxLabel: _('clientconfig.import_mode.overwrite', {what: config.what}),
                name: 'mode',
                inputValue: 'overwrite'
            },{
                boxLabel: _('clientconfig.import_mode.replace', {what: config.what}),
                name: 'mode',
                inputValue: 'replace'
            }]
        }],
        buttons: [{
            text: _('cancel'),
            scope: this,
            handler: function() { this.hide(); }
        },'-',{
            text: _('clientconfig.start_import'),
            scope: this,
            handler: this.submit,
            cls: 'primary-button'
        }]
    });
    ClientConfig.window.Import.superclass.constructor.call(this,config);
};
Ext.extend(ClientConfig.window.Import, MODx.Window);
Ext.reg('clientconfig-window-import',ClientConfig.window.Import);
