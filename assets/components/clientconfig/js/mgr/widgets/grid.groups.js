ClientConfig.grid.Groups = function(config) {
    config = config || {};
    Ext.applyIf(config,{
		url: ClientConfig.config.connectorUrl,
		id: 'clientconfig-grid-groups',
		baseParams: {
            action: 'mgr/groups/getlist'
        },
        emptyText: _('clientconfig.error.noresults'),
		fields: [
            {name: 'id', type: 'int'},
            {name: 'label', type: 'string'},
            {name: 'description', type: 'string'},
            {name: 'sortorder', type: 'int'},
            {name: 'settings_count', type: 'int'}
        ],
        paging: true,
		remoteSort: true,
		columns: [{
            		header: '#',
            		dataIndex: 'sortorder',
		        sortable: true,
		        width: .1
        	},{
			header: _('clientconfig.label'),
			dataIndex: 'label',
		    sortable: true,
			width: .3
		},{
			header: _('clientconfig.description'),
			dataIndex: 'description',
			sortable: true,
			width: .4
		},{
			header: _('clientconfig.settings_count'),
			dataIndex: 'settings_count',
		    sortable: true,
			width: .2
		},{
			header: _('clientconfig.id'),
			dataIndex: 'id',
			sortable: true,
			width: .1
		}],
        tbar: [{
            text: _('clientconfig.add_group'),
            handler: this.addGroup,
            scope: this
        }]
    });
    ClientConfig.grid.Groups.superclass.constructor.call(this,config);
};
Ext.extend(ClientConfig.grid.Groups,MODx.grid.Grid,{
    addGroup: function() {
        var win = MODx.load({
            xtype: 'clientconfig-window-group',
            listeners: {
                success: {fn: function(r) {
                    this.refresh();
                },scope: this},
                scope: this
            }
        });
        win.show();
    },
    updateGroup: function() {
        var record = this.menu.record;
        var win = MODx.load({
            xtype: 'clientconfig-window-group',
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
    removeGroup: function() {
        var id = this.menu.record.id;
        MODx.msg.confirm({
            title: _('clientconfig.remove_group'),
            text: _('clientconfig.remove_group.confirm'),
            url: this.config.url,
            params: {
                action: 'mgr/groups/remove',
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
            text: _('clientconfig.update_group'),
            handler: this.updateGroup,
            scope: this
        },'-',{
            text: _('clientconfig.remove_group'),
            handler: this.removeGroup,
            scope: this
        });
        return m;
    }
});
Ext.reg('clientconfig-grid-groups',ClientConfig.grid.Groups);
