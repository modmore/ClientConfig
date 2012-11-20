Ext.onReady(function() {
    MODx.load({ xtype: 'clientconfig-page-admin', renderTo: 'clientconfig-wrapper-div'});
});
 
ClientConfig.page.Admin = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        cls: 'container form-with-labels',
        border: false,
        defaults: {
        },
        components: [{
            xtype: 'panel',
            html: '<h2>'+_('clientconfig.adminpanel')+'</h2>',
            border: false,
            cls: 'modx-page-header'
        },{
            xtype: 'modx-tabs',
            width: '98%',
            border: true,
            defaults: {
                border: false,
                autoHeight: true,
                defaults: {
                    border: false
                }
            },
            items: [{
                title: _('clientconfig.settings'),
                cls: 'main-wrapper',
                items: [{
                    xtype: 'clientconfig-grid-settings'
                }]
            },{
                title: _('clientconfig.groups'),
                cls: 'main-wrapper',
                items: [{
                    xtype: 'clientconfig-grid-groups'
                }]
            }]
        },{
            xtype: 'panel',
            border: false,
            width: '98%',
            html: '<p style="text-align:center; font-size:80%; color: #999; padding:5px;">ClientConfig is brought to you by <a style="color:inherit;" href="https://www.markhamstra.com/">Mark Hamstra</a>, Senior Developer at the <a style="color: inherit;" href="http://modx.com/complete-maintenance-and-support/">MODX Complete</a> team.</em>'
        }]
    });
    ClientConfig.page.Admin.superclass.constructor.call(this,config);
};
Ext.extend(ClientConfig.page.Admin,MODx.Component);
Ext.reg('clientconfig-page-admin',ClientConfig.page.Admin);
