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
$_lang['clientconfig.desc'] = 'Erstellen und bearbeiten Sie die Site-Konfiguration.';
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
$_lang['clientconfig.no_configuration_yet.desc'] = 'Offenbar wurde noch keine Konfiguration eingerichtet. Wenn Sie der Administrator dieser Site sind, folgen Sie bitte der <a href="http://rtfm.modx.com/display/ADDON/ClientConfig">offiziellen Dokumentation</a>, um eine Konfiguration für Ihren Kunden einzurichten.';
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

// New 2014/07/20
$_lang['clientconfig.create_groups_first'] = 'Erstellen Sie zuerst eine Gruppe';
$_lang['clientconfig.create_groups_first.desc'] = 'Entschuldigung, aber bevor Sie Einstellungen hinzufügen können, muss mindestens eine Gruppe existieren. Ohne Gruppen können dem Kunden keine Einstellungen angezeigt werden.';

$_lang['clientconfig.export_settings'] = 'Einstellungen exportieren';
$_lang['clientconfig.export_settings.confirm'] = 'Wenn Sie unten auf "Ja" klicken, wird eine XML-Datei generiert und heruntergeladen, die alle ClientConfig-Einstellungen enthält. Sind Sie sicher, dass Sie fortfahren möchten?';
$_lang['clientconfig.import_settings'] = 'Einstellungen importieren';
$_lang['clientconfig.import_settings.desc'] = 'Wenn Sie eine XML-Datei hochladen und den richtigen Importmodus wählen, können Sie zuvor oder aus einer anderen Installation exportierte Einstellungen importieren. <b>Hinweis:</b> Einstellungen enthalten Verweise auf Gruppen über ihre ID; wenn Sie Einstellungen importieren, müssen Sie vermutlich auch die zugehörigen Gruppen importieren.';

$_lang['clientconfig.export_groups'] = 'Gruppen exportieren';
$_lang['clientconfig.export_groups.confirm'] = 'Wenn Sie unten auf "Ja" klicken, wird eine XML-Datei generiert und heruntergeladen, die alle ClientConfig-Gruppen enthält. Sind Sie sicher, dass Sie fortfahren möchten?';
$_lang['clientconfig.import_groups'] = 'Gruppen importieren';
$_lang['clientconfig.import_groups.desc'] = 'Wenn Sie eine XML-Datei hochladen und den richtigen Importmodus wählen, können Sie zuvor oder aus einer anderen Installation exportierte Gruppen importieren.';

$_lang['clientconfig.import_file'] = 'Zu importierende Datei';
$_lang['clientconfig.import_mode'] = 'Import-Modus';
$_lang['clientconfig.import_mode.insert'] = 'Einfügen: bestehende [[+what]] beibehalten und neue Daten hinzufügen';
$_lang['clientconfig.import_mode.overwrite'] = 'Überschreiben: bestehende [[+what]] beibehalten, aber überschreiben, wenn sie dieselbe ID haben';
$_lang['clientconfig.import_mode.replace'] = 'Ersetzen: zunächst alle bestehenden [[+what]] löschen, dann die neuen Daten importieren';
$_lang['clientconfig.start_import'] = 'Import starten';
$_lang['clientconfig.error.xml_not_loaded'] = 'Es wurde keine gültige XML-Datei hochgeladen.';
$_lang['clientconfig.error.not_an_export'] = 'Die hochgeladene Datei ist keine gültige Export-Datei für ClientConfig.';
$_lang['clientconfig.error.importing_row'] = 'Etwas ging schief beim Speichern einer Zeile der Export-Datei: ';

// New 2017-01-31
$_lang['clientconfig.xtype.password'] = 'Passwort';
$_lang['clientconfig.xtype.file'] = 'Datei';
$_lang['clientconfig.source'] = 'Medienquelle';
$_lang['clientconfig.source.desc'] = 'Die Medienquelle, die für den Datei-Browser verwendet werden soll.';

// New 2017-09-13
$_lang['clientconfig.choose_context'] = 'Kontext wählen';
$_lang['clientconfig.global_values'] = 'Global';
$_lang['clientconfig.config_for_context'] = 'Konfiguration für [[+context]]';
$_lang['clientconfig.categories'] = 'Kategorien';
$_lang['clientconfig.process_options'] = 'Tags in Optionen verarbeiten';