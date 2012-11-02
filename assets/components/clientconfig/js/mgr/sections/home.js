Ext.onReady(function() {
    MODx.load({ xtype: 'clientconfig-page-home', renderTo: 'clientconfig-wrapper-div'});
});
 
ClientConfig.page.Home = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        cls: 'container form-with-labels',
        border: false,
        defaults: {
        },
        components: [{
            xtype: 'panel',
            html: '<h2>'+_('clientconfig')+'</h2>',
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
            items: this.getTabs()
        },{
            xtype: 'panel',
            border: false,
            width: '98%',
            html: '<p style="text-align:center; font-size:80%; color: #999; padding:5px;">ClientConfig is brought to you by <a style="color:inherit;" href="https://www.markhamstra.com/">Mark Hamstra</a>, Senior Developer at the <a style="color: inherit;" href="http://modx.com/complete-maintenance-and-support/">MODX Complete</a> team.</em>'
        }],
        buttons: this.getButtons()
    });
    ClientConfig.page.Home.superclass.constructor.call(this,config);
};
Ext.extend(ClientConfig.page.Home,MODx.Component,{
    getTabs: function() {
        var tabs = [];
        if (ClientConfig.data.length < 1) {
            return [{
                title: _('clientconfig.no_configuration_yet'),
                items: [{
                    html: '<p>'+_('clientconfig.no_configuration_yet.desc')+'</p>'
                }]
            }];
        }

        Ext.iterate(ClientConfig.data, function(index, value) {
            var fields = [];
            Ext.iterate(value.items, function(value, index) {
                console.log('index:', index,'value:',value);
                var field = {
                    name: value.key,
                    xtype: value.xtype,
                    fieldLabel: value.label + ((value.is_required) ? '*' : ''),
                    value: (value.value != '') ? value.value : value.default,
                    description: value.description,
                    allowBlank: !value.is_required,
                    width: '60%'
                };
                fields.push(field);
            });
            var tab = {
                id: 'clientconfig-home-tab-'+value.id,
                title: value.label,
                items: [{
                    bodyCssClass: 'panel-desc',
                    cls: ' ',
                    html: '<p>'+value.description+'</p>'
                },{
                    cls: 'main-wrapper',
                    items: fields,
                    xtype: 'panel',
                    layout: 'form',
                    labelAlign: 'top',
                    labelSeparator: ''
                }]
            };
            tabs.push(tab);
        });

        return tabs;
    },

    getButtons: function() {
        var buttons = [{
            text: _('clientconfig.save_config'),
            handler: this.save,
            scope: this
        }];

        if (true) {
            buttons.push({
                text: _('clientconfig.admin'),
                handler: this.openAdminPanel,
                scope: this
            })
        }

        return buttons;
    },

    save: function() {
        MODx.msg.alert('Not yet implemented','The functionality you are trying to use is not yet implemented. Try again later!');
    },

    openAdminPanel: function() {
        location.href = MODx.config.manager_url + '?a=' + MODx.request.a + '&action=admin';
    }
});
Ext.reg('clientconfig-page-home',ClientConfig.page.Home);
