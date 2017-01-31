<?php
/**
 * ClientConfig
 *
 * Copyright 2011-2014 by Mark Hamstra <hello@markhamstra.com>
 *
 * ClientConfig is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClientConfig is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClientConfig; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package clientconfig
 */

$_lang['clientconfig'] = 'Configuration';
$_lang['clientconfig.desc'] = 'Set and update site configuration.';
$_lang['clientconfig.add_setting'] = 'Add Setting';
$_lang['clientconfig.update_setting'] = 'Update Setting';
$_lang['clientconfig.duplicate_setting'] = 'Duplicate Setting';
$_lang['clientconfig.remove_setting'] = 'Remove Setting';
$_lang['clientconfig.remove_setting.confirm'] = 'Are you sure you want to remove this setting?';
$_lang['clientconfig.add_group'] = 'Add Group';
$_lang['clientconfig.update_group'] = 'Update Group';
$_lang['clientconfig.remove_group'] = 'Remove Group';
$_lang['clientconfig.remove_group.confirm'] = 'Are you sure you want to remove this group? All settings in this group will not be visible for the client until you add them to a different group.';
$_lang['clientconfig.admin'] = 'Admin';
$_lang['clientconfig.adminpanel'] = 'Configuration Admin Panel';
$_lang['clientconfig.cgsetting_err_ns_key'] = 'The key for the setting is required.';
$_lang['clientconfig.cgsetting_err_ae_key'] = 'Another setting already exists with that key.';
$_lang['clientconfig.description'] = 'Description';
$_lang['clientconfig.default'] = 'Default value';
$_lang['clientconfig.error.noresults'] = 'No items found.';
$_lang['clientconfig.filter_on_group'] = 'Filter on Group';
$_lang['clientconfig.id'] = 'ID';
$_lang['clientconfig.is_required'] = 'Req\'d?';
$_lang['clientconfig.is_required.long'] = 'Setting is required';
$_lang['clientconfig.group'] = 'Group';
$_lang['clientconfig.groups'] = 'Groups';
$_lang['clientconfig.key'] = 'Key';
$_lang['clientconfig.label'] = 'Label';
$_lang['clientconfig.no_configuration_yet'] = 'No Configuration Available';
$_lang['clientconfig.no_configuration_yet.desc'] = 'It seems there is no configuration set up yet. If you are the administrator of the site, please <a href="http://rtfm.modx.com/display/ADDON/ClientConfig">follow the official documentation</a> to set up configuration for your client.';
$_lang['clientconfig.options'] = 'Field Options';
$_lang['clientconfig.options.desc'] = 'For certain field types like select boxes, you can define options. Separate different options with two colons (||) and if you want a different value than what the client sees, use "label==value". ';
$_lang['clientconfig.save_config'] = 'Save Configuration';
$_lang['clientconfig.sortorder'] = 'Sort Order';
$_lang['clientconfig.settings'] = 'Settings';
$_lang['clientconfig.settings_count'] = '# of Settings';
$_lang['clientconfig.value'] = 'Value';
$_lang['clientconfig.xtype'] = 'Field type';
$_lang['clientconfig.xtype.textfield'] = 'Text';
$_lang['clientconfig.xtype.textarea'] = 'Textarea';
$_lang['clientconfig.xtype.richtext'] = 'Rich Text';
$_lang['clientconfig.xtype.numberfield'] = 'Number';
$_lang['clientconfig.xtype.colorpalette'] = 'Colorpicker';
$_lang['clientconfig.xtype.xcheckbox'] = 'Checkbox';
$_lang['clientconfig.xtype.datefield'] = 'Date';
$_lang['clientconfig.xtype.timefield'] = 'Time';
$_lang['clientconfig.xtype.combobox'] = 'Selectbox';
$_lang['clientconfig.xtype.image'] = 'Image';
$_lang['clientconfig.xtype.googlefonts'] = 'Google Font List';
$_lang['clientconfig.to_client_view'] = 'To Client View';
$_lang['clientconfig.saved'] = 'Saved';
$_lang['clientconfig.saved.text'] = 'The settings have been saved.';
$_lang['clientconfig.field_is_required'] = 'This option cannot be left empty.';

// New 2014/07/20
$_lang['clientconfig.create_groups_first'] = 'Create a Group first';
$_lang['clientconfig.create_groups_first.desc'] = 'Sorry, but before you can add a setting you\'ll need to have at least one group. Without groups, settings cannot be displayed to the Client.';

$_lang['clientconfig.export_settings'] = 'Export Settings';
$_lang['clientconfig.export_settings.confirm'] = 'When you click Yes below an XML file will be generated and downloaded holding all ClientConfig settings. Are you sure you want to continue?';
$_lang['clientconfig.import_settings'] = 'Import Settings';
$_lang['clientconfig.import_settings.desc'] = 'By uploading an XML file and choosing the right import mode, you can import Settings you exported before or from a different site. <b>Note:</b> Settings contain references to Groups by their ID; if you are importing Settings, you will probably need to import Groups as well.';

$_lang['clientconfig.export_groups'] = 'Export Groups';
$_lang['clientconfig.export_groups.confirm'] = 'When you click Yes below an XML file will be generated and downloaded holding all ClientConfig groups. Are you sure you want to continue?';
$_lang['clientconfig.import_groups'] = 'Import Groups';
$_lang['clientconfig.import_groups.desc'] = 'By uploading an XML file and choosing the right import mode, you can import Groups you exported before or from a different site. ';

$_lang['clientconfig.import_file'] = 'File to Import';
$_lang['clientconfig.import_mode'] = 'Import Mode';
$_lang['clientconfig.import_mode.insert'] = "Insert: leave existing [[+what]] and add the imported data";
$_lang['clientconfig.import_mode.overwrite'] = "Overwrite: leave existing [[+what]], but overwrite them if they have the same ID";
$_lang['clientconfig.import_mode.replace'] = "Replace: first remove all current [[+what]], and then import the new rows.";
$_lang['clientconfig.start_import'] = 'Start Import';
$_lang['clientconfig.error.xml_not_loaded'] = 'No valid XML file uploaded.';
$_lang['clientconfig.error.not_an_export'] = 'The uploaded file is not a valid export file for ClientConfig.';
$_lang['clientconfig.error.importing_row'] = 'Something went wrong saving a row of the export: ';

// New 2017-01-31
$_lang['clientconfig.xtype.password'] = 'Password';
$_lang['clientconfig.xtype.file'] = 'File';
$_lang['clientconfig.source'] = 'Media Source';
$_lang['clientconfig.source.desc'] = 'The media source to use for the file browser.';

