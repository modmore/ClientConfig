ClientConfig.grid.Settings = function(config) {
    config = config || {};
    Ext.applyIf(config, {
        
        // Basic Grid Configuration
		url: ClientConfig.config.connectorUrl,
		id: 'clientconfig-grid-settings',
		baseParams: {
            action: 'mgr/settings/getlist'
        },
        save_action: 'mgr/settings/updatefromgrid',
        autosave: true,
        emptyText: _('clientconfig.error.noresults'),
        paging: true,
		remoteSort: true,
        
        // Available Fields
		fields: [
            {name: 'id', type: 'int'},
            {name: 'key', type: 'string'},
            {name: 'label', type: 'string'},
            {name: 'xtype', type: 'string'},
            {name: 'description', type: 'string'},
            {name: 'is_required', type: 'bool'},
            {name: 'value', type: 'string'},
            {name: 'default', type: 'string'},
            {name: 'source', type: 'int'},
            {name: 'group', type: 'int'},
            {name: 'group_label', type: 'string'},
            {name: 'sortorder', type: 'int'},
            {name: 'options', type: 'object'}
        ],
		
		// Visible Columns
		columns: [{
			header: _('clientconfig.id'),
			dataIndex: 'id',
			sortable: true,
			width: .1
		},{
			header: _('clientconfig.key'),
			dataIndex: 'key',
			editor: { xtype: 'textfield' },
			sortable: true,
			width: .3
		},{
			header: _('clientconfig.label'),
			dataIndex: 'label',
			editor: { xtype: 'textfield' },
			sortable: true,
			width: .3
		},{
			header: _('clientconfig.xtype'),
			dataIndex: 'xtype',
			editor: { 
			    xtype: 'clientconfig-combo-fieldtypes',
			    renderer: true
			},
			sortable: true,
			width: .15
		},{
			header: _('clientconfig.is_required'),
			dataIndex: 'is_required',
			editor: { 
			    xtype: 'combo-boolean',
			    renderer: 'boolean'
			},
			sortable: true,
			width: .15,
			renderer: this.rendYesNo
		},{
			header: _('clientconfig.group'),
			dataIndex: 'group',
			editor: { 
			    xtype: 'clientconfig-combo-groups',
			    renderer: true
			},
			sortable: true,
			width: .3
		},{
			header: _('clientconfig.sortorder'),
			dataIndex: 'sortorder',
			editor: { 
			    xtype: 'numberfield', 
			    allowDecimal: false, 
			    allowNegative: false 
			},
			sortable: true,
			width: .2
		}],
		
		// Top-Bar
        tbar: [{
            text: _('clientconfig.add_setting'),
            handler: this.addSetting,
            scope: this
        },'->',{
            emptyText: _('clientconfig.filter_on_group'),
            xtype: 'clientconfig-combo-groups',
            id: 'clientconfig-settings-filter-group',
            listeners: {
                select: {fn: function(combo, record) {
                    this.getStore().baseParams['group'] = record.id;
                    this.getBottomToolbar().changePage(1);
                }, scope: this}
            },
            width: 250
        }, '-', {
            text: _('clientconfig.export_settings'),
            handler: this.exportSettings,
            scope: this
        }, '-', {
            text: _('clientconfig.import_settings'),
            handler: this.importSettings,
            scope: this
        }]
    });
    ClientConfig.grid.Settings.superclass.constructor.call(this,config);
};
Ext.extend(ClientConfig.grid.Settings,MODx.grid.Grid,{
    addSetting: function() {
        var groups = Ext.getCmp('clientconfig-grid-groups');
        if (groups.store.data.items.length < 1) {
            MODx.msg.alert(
                _('clientconfig.create_groups_first'),
                _('clientconfig.create_groups_first.desc'),
                function() {
                    groups.addGroup();
                },
                groups
            );
            return;
        }

        var win = MODx.load({
            xtype: 'clientconfig-window-setting',
            listeners: {
                success: {fn: function(r) {
                    this.refresh();
                },scope: this},
                scope: this
            }
        });
        win.show();
    },
    updateSetting: function() {
        var record = this.menu.record;
        var win = MODx.load({
            xtype: 'clientconfig-window-setting',
            record: record,
            listeners: {
                success: {fn: function(r) {
                    this.refresh();
                },scope: this},
                scope: this
            },
            isUpdate: true
        });
        win.setValues(record);
        win.show();
    },
    duplicateSetting: function() {
        var record = this.menu.record;
        record.id = 0;
        record.key = record.key + '_duplicate';
        var win = MODx.load({
            xtype: 'clientconfig-window-setting',
            record: record,
            listeners: {
                success: {fn: function(r) {
                    this.refresh();
                },scope: this},
                scope: this
            },
            isDuplicate: true
        });
        win.setValues(record);
        win.show();
    },
    removeSetting: function() {
        var id = this.menu.record.id;
        MODx.msg.confirm({
            title: _('clientconfig.remove_setting'),
            text: _('clientconfig.remove_setting.confirm'),
            url: this.config.url,
            params: {
                action: 'mgr/settings/remove',
                id: id
            },
            listeners: {
                success: {fn: function(r) {
                    this.refresh();
                },scope: this},
                scope: this
            }
        });
    },
    getMenu: function(node) {
        var m = [];

        m.push({
            text: _('clientconfig.update_setting'),
            handler: this.updateSetting,
            scope: this
        },{
            text: _('clientconfig.duplicate_setting'),
            handler: this.duplicateSetting,
            scope: this
        },'-',{
            text: _('clientconfig.remove_setting'),
            handler: this.removeSetting,
            scope: this
        });
        return m;
    },

    filterOnGroup: function() {
        this.baseParams['group'] = Ext.getCmp('clientconfig-settings-filter-group').getValue();
        this.getBottomToolbar().changePage(1);
        this.refresh();
    },
    
    exportSettings: function() {
        Ext.Msg.confirm(_('clientconfig.export_settings'), _('clientconfig.export_settings.confirm'), function(e) {
            if (e == 'yes') {
                window.location = ClientConfig.config.connectorUrl + '?action=mgr/settings/export&HTTP_MODAUTH=' + MODx.siteId;
            }
        });
    },
    
    importSettings: function() {
        var win = MODx.load({
            xtype: 'clientconfig-window-import',
            title: _('clientconfig.import_settings'),
            introduction: _('clientconfig.import_settings.desc'),
            what: _('clientconfig.settings'),
            baseParams: {
                action: 'mgr/settings/import'
            },
            listeners: {
                success: {fn: function(r) {
                    this.refresh();
                },scope: this},
                scope: this
            }
        });
        win.show();
    }
});
Ext.reg('clientconfig-grid-settings',ClientConfig.grid.Settings);
