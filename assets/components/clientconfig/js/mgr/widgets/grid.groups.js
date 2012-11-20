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
            {name: 'settings_count', type: 'int'}
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
    ClientConfig.grid.Groups.superclass.constructor.call(this,config);
};
Ext.extend(ClientConfig.grid.Groups,MODx.grid.Grid);
Ext.reg('clientconfig-grid-groups',ClientConfig.grid.Groups);
