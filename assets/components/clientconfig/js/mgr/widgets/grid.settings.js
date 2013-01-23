ClientConfig.grid.Settings = function(config) {
    config = config || {};
    Ext.applyIf(config,{
		url: ClientConfig.config.connectorUrl,
		id: 'clientconfig-grid-settings',
		baseParams: {
            action: 'mgr/settings/getlist'
        },
        emptyText: _('clientconfig.error.noresults'),
		fields: [
            {name: 'id', type: 'int'},
            {name: 'key', type: 'string'},
            {name: 'label', type: 'string'},
            {name: 'xtype', type: 'string'},
            {name: 'description', type: 'string'},
            {name: 'is_required', type: 'bool'},
            {name: 'value', type: 'string'},
            {name: 'default', type: 'string'},
            {name: 'group', type: 'int'},
            {name: 'group_label', type: 'string'},
            {name: 'sortorder', type: 'int'},
            {name: 'options', type: 'object'}
        ],
        paging: true,
		remoteSort: true,
		columns: [{
			header: '#',
			dataIndex: 'sortorder',
			sortable: true,
			width: .1
		},{
			header: _('clientconfig.key'),
			dataIndex: 'key',
		    sortable: true,
			width: .3
		},{
			header: _('clientconfig.label'),
			dataIndex: 'label',
		    sortable: true,
			width: .3
		},{
			header: _('clientconfig.xtype'),
			dataIndex: 'xtype',
			sortable: true,
			width: .2
		},{
			header: _('clientconfig.is_required'),
			dataIndex: 'is_required',
		    sortable: true,
			width: .2
		},{
			header: _('clientconfig.group'),
			dataIndex: 'group_label',
		    sortable: true,
			width: .3
		},{
			header: _('clientconfig.id'),
			dataIndex: 'id',
			sortable: true,
			width: .1
		}],
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
        }]
    });
    ClientConfig.grid.Settings.superclass.constructor.call(this,config);
};
Ext.extend(ClientConfig.grid.Settings,MODx.grid.Grid,{
    addSetting: function() {
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
    }
});
Ext.reg('clientconfig-grid-settings',ClientConfig.grid.Settings);
