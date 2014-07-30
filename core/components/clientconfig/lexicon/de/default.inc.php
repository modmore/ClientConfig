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

$_lang['clientconfig'] = 'Konfiguration';
$_lang['clientconfig.desc'] = 'Erstellen und Bearbeiten Sie die Site-Konfiguration.';
$_lang['clientconfig.add_setting'] = 'Einstellung hinzufügen';
$_lang['clientconfig.update_setting'] = 'Einstellung bearbeiten';
$_lang['clientconfig.duplicate_setting'] = 'Einstellung duplizieren';
$_lang['clientconfig.remove_setting'] = 'Einstellung löschen';
$_lang['clientconfig.remove_setting.confirm'] = 'Sind Sie sicher, dass Sie diese Einstellung löschen möchten?';
$_lang['clientconfig.add_group'] = 'Gruppe hinzufügen';
$_lang['clientconfig.update_group'] = 'Gruppe bearbeiten';
$_lang['clientconfig.remove_group'] = 'Gruppe löschen';
$_lang['clientconfig.remove_group.confirm'] = 'Sind Sie sicher, dass Sie diese Gruppe löschen möchten? Alle Einstellungen in dieser Gruppe werden für den Kunden nicht sichtbar sein, wenn Sie sie nicht einer anderen Gruppe hinzufügen.';
$_lang['clientconfig.admin'] = 'Admin';
$_lang['clientconfig.adminpanel'] = 'Konfigurations-Admin-Bereich';
$_lang['clientconfig.cgsetting_err_ns_key'] = 'Der Schlüssel für die Einstellung muss eingegeben werden.';  // ist erforderlich
$_lang['clientconfig.cgsetting_err_ae_key'] = 'Eine andere Einstellung mit diesem Schlüssel existiert bereits.';  // Schlüssel mit diesem Schlüssel???
$_lang['clientconfig.description'] = 'Beschreibung';
$_lang['clientconfig.default'] = 'Standardwert';
$_lang['clientconfig.error.noresults'] = 'Keine Einstellungen gefunden.';
$_lang['clientconfig.filter_on_group'] = 'Nach Gruppe filtern';
$_lang['clientconfig.id'] = 'ID';
$_lang['clientconfig.is_required'] = 'Pflicht?';  // Erf.(orderlich)?
$_lang['clientconfig.is_required.long'] = 'Einstellung ist erforderlich';  // Pflicht o. Ä.
$_lang['clientconfig.group'] = 'Gruppe';
$_lang['clientconfig.groups'] = 'Gruppen';
$_lang['clientconfig.key'] = 'Schlüssel';
$_lang['clientconfig.label'] = 'Bezeichnung';  // Label - Name?
$_lang['clientconfig.no_configuration_yet'] = 'Keine Konfiguration vorhanden';
$_lang['clientconfig.no_configuration_yet.desc'] = 'Offenbar wurde noch keine Konfiguration eingerichtet. Wenn Sie der Administrator dieser Site sind, folgen Sie bitte der <a href="http://rtfm.modx.com/display/ADDON/ClientConfig">offiziellen Dokumentation</a>, um eine Konfiguration für Ihren Kunden zu einzurichten.';
$_lang['clientconfig.options'] = 'Feld-Optionen';
$_lang['clientconfig.options.desc'] = 'Für bestimmte Feldtypen wie Selectboxen können Sie Optionen definieren. Trennen Sie die verschiedenen Optionen mit zwei senkrechten Strichen (||), auch Pipe-Symbol genannt, und wenn Sie möchten, dass dem Kunden etwas anderes angezeigt wird als der Wert, verwenden Sie die Schreibweise "Bezeichnung==Wert". ';  // Label - Name?
$_lang['clientconfig.save_config'] = 'Konfiguration speichern';
$_lang['clientconfig.sortorder'] = 'Sortierreihenfolge';
$_lang['clientconfig.settings'] = 'Einstellungen';
$_lang['clientconfig.settings_count'] = '# der Einstellungen';
$_lang['clientconfig.value'] = 'Wert';
$_lang['clientconfig.xtype'] = 'Feldtyp';
$_lang['clientconfig.xtype.textfield'] = 'Text';
$_lang['clientconfig.xtype.textarea'] = 'Textarea';
$_lang['clientconfig.xtype.richtext'] = 'RichText';
$_lang['clientconfig.xtype.numberfield'] = 'Zahl';
$_lang['clientconfig.xtype.colorpalette'] = 'Farbwähler';  // Colorpicker
$_lang['clientconfig.xtype.xcheckbox'] = 'Checkbox';
$_lang['clientconfig.xtype.datefield'] = 'Datum';
$_lang['clientconfig.xtype.timefield'] = 'Zeit';
$_lang['clientconfig.xtype.combobox'] = 'Selectbox';  // Listbox (einfache Auswahl), Listenauswahlfeld, ... (s. a. clientconfig.options.desc)
$_lang['clientconfig.xtype.image'] = 'Bild';
$_lang['clientconfig.xtype.googlefonts'] = 'Google-Schriftarten-Liste';
$_lang['clientconfig.to_client_view'] = 'Zur Kunden-Ansicht';
$_lang['clientconfig.saved'] = 'Gespeichert';
$_lang['clientconfig.saved.text'] = 'Die Einstellungen wurden gespeichert.';
$_lang['clientconfig.field_is_required'] = 'Diese Option kann nicht leer gelassen werden.';
