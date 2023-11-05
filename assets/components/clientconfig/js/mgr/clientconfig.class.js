var ClientConfig = function(config) {
    config = config || {};
    ClientConfig.superclass.constructor.call(this,config);
};
Ext.extend(ClientConfig,Ext.Component,{
    page:{},window:{},grid:{},tree:{},panel:{},tabs:{},combo:{},ux: {},
    config: {
        connector_url: ''
    },
    inVersion: false,

    destroyRTEs: function(rtes) {
        for (var i = 0; i < rtes.length; i++) {
            var rte = rtes[i];
            if (window.tinymce
                && window.tinymce.editors
                && window.tinymce.editors[rte])
            {
                window.tinymce.editors[rte].remove();
            }
            else if (window.CKEDITOR
                && window.CKEDITOR.instances
                && window.CKEDITOR.instances[rte]
            ) {
                CKEDITOR.instances[rte].destroy()
            }
            // Redactor v2
            else if (window.$red) {
                var editor = $red('#' + rte);
                if (editor && editor.redactor) {
                    editor.redactor('core.destroy');
                }
            }
            // Redactor v3
            else if (window.Redactor) {
                if (window.Redactor('#' + rte)) {
                    $R('#' + rte, 'destroy');
                }
            }
        }
    }
});
Ext.reg('clientconfig',ClientConfig);
ClientConfig = new ClientConfig();
