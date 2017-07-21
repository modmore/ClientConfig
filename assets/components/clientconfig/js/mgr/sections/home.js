ClientConfig.page.Home = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        id: 'clientconfig-page-home',
        renderTo: 'clientconfig-wrapper-div',
        border: false,
        components: [{
            cls: 'container',
            xtype: 'panel',
            items: [{
                html: '<h2>' + _('clientconfig') + '</h2>',
                border: false,
                cls: 'modx-page-header'
            }, {
                xtype: 'modx-formpanel',
                id: 'clientconfig-formpanel-home',
                cls: 'form-with-labels',
                layout: 'form',
                border: !!ClientConfig.config.verticalTabs && !MODx.config.connector_url,
                anchor: '100%',
                items: [{
                    xtype: (!!ClientConfig.config.verticalTabs) ? 'modx-vtabs' : 'modx-tabs',
                    border: false,
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
                    getState: function () {
                        return {
                            activeTab: this.items.indexOf(this.getActiveTab())
                        };
                    },
                    headerCfg: (ClientConfig.config.verticalTabs) ? {
                        tag: 'div',
                        cls: 'x-tab-panel-header vertical-tabs-header',
                        id: 'modx-resource-vtabs-header',
                        html: MODx.config.show_tv_categories_header == true ? '<h4 id="modx-resource-vtabs-header-title">' + _('categories') + '</h4>' : ''
                    } : undefined
                }]
            }]
        }],
        buttons: this.getButtons(),
        listeners: {
            afterrender: this.setup
        }
    });
    ClientConfig.page.Home.superclass.constructor.call(this,config);
};
Ext.extend(ClientConfig.page.Home,MODx.Component,{
    rtes: [],
    setup: function() {
        var rtes = this.rtes;
        setTimeout(function() {
            if (rtes.length > 0 && MODx.loadRTE) {
                Ext.each(rtes, function(id, index) {
                    MODx.loadRTE(id);
                });
            }
        }, 250)
    },
    getTabs: function() {
        var tabs = [],
            rtes = [];

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
                    anchor: '60%',
                    id: 'clientconfig-' + value.key.replace('.','-')
                };

                if (['textarea'].indexOf(field.xtype) !== -1) {
                    field.anchor = '100%';
                }

                if (field.xtype == 'richtext') {
                    field.xtype = 'textarea';
                    rtes.push(field.id);
                }

                if ((field.xtype == 'checkbox') || (field.xtype == 'xcheckbox')) {
                    field.boxLabel = field.fieldLabel;
                    field.fieldLabel = null;
                    field.value = 1;
                    field.checked = (value.value);
                }

                if (field.xtype == 'datefield') {
                    field.format = MODx.config.manager_date_format;
                }

                if (field.xtype == 'timefield') {
                    field.format = MODx.config.manager_time_format;
                }

                if (['modx-panel-tv-image', 'modx-panel-tv-file'].indexOf(field.xtype) !== -1) {
                    field.tv = value.key;
                    field.source = value.source || MODx.config.default_media_source;
                    field.relativeValue = (value.value != '') ? value.value : value.default;
                }

                if (field.xtype == 'colorpickerfield') {
                    field.cls = 'x-colorpicker';
                }

                if (field.xtype == 'password') {
                    field.xtype = 'textfield';
                    field.inputType = 'password';
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
                    items: [],
                    cls: 'tvs-wrapper'
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
                    labelSeparator: '',
                    width: '85%'
                });
                tabs.push(tab);
            }
        });

        this.rtes = rtes;

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
            scope: this,
            keys: [{
                key: MODx.config.keymap_save || 's',
                ctrl: true,
                fn: this.save
            }]
        }];

        if (ClientConfig.isAdmin) {
            buttons.push('-',{
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

            // Fix name of image tv
            var imagePickers = fp.find('xtype', 'modx-panel-tv-image');
            Ext.each(imagePickers, function(imagePicker){
                values[imagePicker.name] = values['tv' + imagePicker.name];
            }, this);
            var filePickers = fp.find('xtype', 'modx-panel-tv-file');
            Ext.each(filePickers, function(filePicker){
                values[filePicker.name] = values['tv' + filePicker.name];
            }, this);

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
            MODx.loadPage(MODx.request.a, 'action=admin');
        }
    }
});
Ext.reg('clientconfig-page-home',ClientConfig.page.Home);
