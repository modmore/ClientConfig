Ext.onReady(function() {
    MODx.load({ xtype: 'clientconfig-page-home', renderTo: 'clientconfig-wrapper-div'});
});
 
ClientConfig.page.Home = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        id: 'clientconfig-page-home',
        cls: 'container form-with-labels',
        layout: 'form',
        border: false,
        components: [{
            xtype: 'panel',
            html: '<h2>'+_('clientconfig')+'</h2>',
            border: false,
            cls: 'modx-page-header'
        },{
            xtype: 'form',
            id: 'clientconfig-formpanel-home',
            cls: 'form-with-labels',
            border: false,
            items: [{
                xtype: 'modx-tabs',
                width: '98%',
                border: true,
                deferredRender: false,
                defaults: {
                    border: false,
                    autoHeight: true,
                    defaults: {
                        border: false
                    }
                },
                items: this.getTabs(),
                stateful: true,
                stateId: 'clientconfig-page-home',
                stateEvents: ['tabchange'],
                getState: function() {
                    return {
                        activeTab:this.items.indexOf(this.getActiveTab())
                    };
                }
            }]
        }],
        buttons: this.getButtons()
    });
    ClientConfig.page.Home.superclass.constructor.call(this,config);
};
Ext.extend(ClientConfig.page.Home,MODx.Component,{
    getTabs: function() {
        var tabs = [];

        Ext.each(ClientConfig.data, function(tabData) {
            var fields = [];
            Ext.iterate(tabData.items, function(value) {
                var field = {
                    name: value.key,
                    xtype: value.xtype,
                    fieldLabel: value.label + ((value.is_required) ? '*' : ''),
                    value: (value.value != '') ? value.value : value.default,
                    description: (ClientConfig.isAdmin) ? '<b>[[++' + value.key + ']]</b>' : undefined,
                    allowBlank: !value.is_required,
                    width: '60%'
                };
                if ((field.xtype == 'checkbox') || (field.xtype == 'xcheckbox')) {
                    field.boxLabel = field.fieldLabel;
                    field.fieldLabel = null;
                    field.value = 1;
                    field.checked = (value.value);
                }

                if (field.xtype == 'modx-combo') {
                    var options = value.options.split('||');
                    var data = [];
                    Ext.each(options, function(option, index) {
                        option = option.split('==');
                        if (option[1]) {
                            data.push([
                                option[1],
                                option[0]
                            ]);
                        } else {
                            data.push([option[0],option[0]]);
                        }
                    });

                    field.store = new Ext.data.ArrayStore({
                        mode: 'local',
                        fields: ['value','label'],
                        data: data
                    });
                    field.hiddenName = value.key;
                    field.valueField = 'value';
                    field.displayField = 'label';
                    field.mode = 'local';
                }
                fields.push(field);

                if (value.description && value.description.length > 0) {
                    var fieldDescription = {
                        xtype: 'label',
                        text: value.description,
                        cls: 'desc-under'
                    };
                    fields.push(fieldDescription);
                }
            });

            /* Only create the tab if there are fields in it. */
            if (fields.length >= 1) {
                var tab = {
                    id: 'clientconfig-home-tab-'+tabData.id,
                    title: tabData.label,
                    items: []
                };
                if (tabData.description != '') {
                    tab.items.push({
                        bodyCssClass: 'panel-desc',
                        cls: ' ',
                        html: '<p>'+tabData.description+'</p>'
                    });
                }
                tab.items.push({
                    cls: 'main-wrapper',
                    items: fields,
                    xtype: 'panel',
                    layout: 'form',
                    labelAlign: 'top',
                    labelSeparator: ''
                });
                tabs.push(tab);
            }
        });

        if (tabs.length < 1) {
            return [{
                title: _('clientconfig.no_configuration_yet'),
                items: [{
                    html: '<p>'+_('clientconfig.no_configuration_yet.desc')+'</p>',
                    bodyCssClass: 'panel-desc'
                }]
            }];
        }

        return tabs;
    },

    getButtons: function() {
        var buttons = [{
            text: _('clientconfig.save_config'),
            handler: this.save,
            scope: this
        }];

        if (ClientConfig.isAdmin) {
            buttons.push({
                text: _('clientconfig.admin'),
                handler: this.openAdminPanel,
                scope: this
            })
        }

        return buttons;
    },

    save: function() {
        var fp = Ext.getCmp('clientconfig-formpanel-home');
        if (fp && fp.getForm()) {
            var values = fp.getForm().getValues();
            fp.el.mask(_('saving'));
            MODx.Ajax.request({
                url: ClientConfig.config.connectorUrl,
                params: {
                    action: 'mgr/settings/save',
                    values: Ext.encode(values)
                },
                listeners: {
                    success: {fn: function(r) {
                        fp.el.unmask();
                        MODx.msg.status({
                            title: _('clientconfig.saved'),
                            message: _('clientconfig.saved.text'),
                            delay: 4
                        })
                    }, scope: this},
                    failure: {fn: function(r) {
                        fp.el.unmask();
                    }, scope: this},
                    scope: this
                }
            });
        }
    },

    openAdminPanel: function() {
        if (ClientConfig.isAdmin) {
            location.href = MODx.config.manager_url + '?a=' + MODx.request.a + '&action=admin';
        }
    }
});
Ext.reg('clientconfig-page-home',ClientConfig.page.Home);
