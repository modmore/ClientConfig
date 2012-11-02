var ClientConfig = function(config) {
    config = config || {};
    ClientConfig.superclass.constructor.call(this,config);
};
Ext.extend(ClientConfig,Ext.Component,{
    page:{},window:{},grid:{},tree:{},panel:{},tabs:{},combo:{},
    config: {
        connector_url: ''
    },
    inVersion: false
});
Ext.reg('clientconfig',ClientConfig);
ClientConfig = new ClientConfig();
