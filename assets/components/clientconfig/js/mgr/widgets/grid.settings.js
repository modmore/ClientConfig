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
            {name: 'group', type: 'int'}
        ],
        paging: true,
		remoteSort: true,
		columns: [{
			header: _('clientconfig.id'),
			dataIndex: 'id',
			sortable: true,
			width: .1
		},{
			header: _('clientconfig.label'),
			dataIndex: 'label',
		    sortable: true,
			width: .3
		},{
			header: _('clientconfig.label'),
			dataIndex: 'label',
		    sortable: true,
			width: .3
		},{
			header: _('clientconfig.description'),
			dataIndex: 'description',
			sortable: true,
			width: .5
		},{
			header: _('clientconfig.settings_count'),
			dataIndex: 'settings_count',
		    sortable: true,
			width: .1
		}]
    });
    ClientConfig.grid.Settings.superclass.constructor.call(this,config);
};
Ext.extend(ClientConfig.grid.Settings,MODx.grid.Grid);
Ext.reg('clientconfig-grid-settings',ClientConfig.grid.Settings);
