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

/**
 * Dutch Translation by Mark Hamstra <hello@markhamstra.com>
 * Last updated 2017-01-04
 */

$_lang['clientconfig'] = 'Configuratie';
$_lang['clientconfig.desc'] = 'Beheer en update de website-instellingen.';
$_lang['clientconfig.add_setting'] = 'Nieuwe instelling';
$_lang['clientconfig.update_setting'] = 'Bewerk instelling';
$_lang['clientconfig.duplicate_setting'] = 'Dupliceer instelling';
$_lang['clientconfig.remove_setting'] = 'Verwijder instelling';
$_lang['clientconfig.remove_setting.confirm'] = 'Weet je zeker dat je deze instelling wilt verwijderen?';
$_lang['clientconfig.add_group'] = 'Nieuwe groep';
$_lang['clientconfig.update_group'] = 'Bewerk groep';
$_lang['clientconfig.remove_group'] = 'Verwijder groep';
$_lang['clientconfig.remove_group.confirm'] = 'Weet je zeker dat je deze groep wilt verwijderen? Alle instellingen in deze groep zullen, totdat je ze aan een nieuwe groep toevoegt, niet zichtbaar zijn voor de eindgebruiker.';
$_lang['clientconfig.admin'] = 'Beheer';
$_lang['clientconfig.adminpanel'] = 'Configuratiebeheer';
$_lang['clientconfig.cgsetting_err_ns_key'] = 'De key voor de instelling is verplicht.';
$_lang['clientconfig.cgsetting_err_ae_key'] = 'Er bestaat al een instelling met deze key.';
$_lang['clientconfig.description'] = 'Omschrijving';
$_lang['clientconfig.default'] = 'Standaardwaarde';
$_lang['clientconfig.error.noresults'] = 'Geen items gevonden.';
$_lang['clientconfig.filter_on_group'] = 'Filter op groep';
$_lang['clientconfig.id'] = 'ID';
$_lang['clientconfig.is_required'] = 'Verplicht?';
$_lang['clientconfig.is_required.long'] = 'Instelling is verplicht';
$_lang['clientconfig.group'] = 'Groep';
$_lang['clientconfig.groups'] = 'Groepen';
$_lang['clientconfig.key'] = 'Key';
$_lang['clientconfig.label'] = 'Label';
$_lang['clientconfig.no_configuration_yet'] = 'Nog geen configuratie beschikbaar';
$_lang['clientconfig.no_configuration_yet.desc'] = 'Het lijkt erop dat er nog geen configuratie beschikbaar is. Als je de administrator van deze website bent, volg dan de <a href="http://rtfm.modx.com/display/ADDON/ClientConfig">documentatie</a> om de websiteconfiguratie in te stellen.';
$_lang['clientconfig.options'] = 'Veldopties';
$_lang['clientconfig.options.desc'] = 'Voor velden als select boxes kun je opties ingeven. Scheid deze met twee verticale streepjes (||) en als de waarde anders moet zijn dan de label, gebruik "label==value". ';
$_lang['clientconfig.save_config'] = 'Configuratie opslaan';
$_lang['clientconfig.sortorder'] = 'Sorteervolgorde';
$_lang['clientconfig.settings'] = 'Instellingen';
$_lang['clientconfig.settings_count'] = 'Aantal instellingen';
$_lang['clientconfig.value'] = 'Waarde';
$_lang['clientconfig.xtype'] = 'Veldtype';
$_lang['clientconfig.xtype.textfield'] = 'Tekst';
$_lang['clientconfig.xtype.textarea'] = 'Tekstveld';
$_lang['clientconfig.xtype.numberfield'] = 'Nummer';
$_lang['clientconfig.xtype.colorpalette'] = 'Kleurkiezer';
$_lang['clientconfig.xtype.xcheckbox'] = 'Checkbox';
$_lang['clientconfig.xtype.datefield'] = 'Datum';
$_lang['clientconfig.xtype.timefield'] = 'Tijd';
$_lang['clientconfig.xtype.combobox'] = 'Selectbox';
$_lang['clientconfig.to_client_view'] = 'Terug naar configuratie';
$_lang['clientconfig.saved'] = 'Opgeslagen';
$_lang['clientconfig.saved.text'] = 'De instellingen zijn opgeslagen.';
$_lang['clientconfig.field_is_required'] = 'Dit veld is verplicht en kan niet leeg blijven.';

// New 2014/07/20
$_lang['clientconfig.create_groups_first'] = 'Maak eerst een groep aan';
$_lang['clientconfig.create_groups_first.desc'] = 'Sorry, maar voordat je een instelling aan kunt maken is het nodig om een groep te maken. Zonder een groep kunnen instellingen niet aan de eindgebruiker worden getoond.';

$_lang['clientconfig.export_settings'] = 'Exporteer instellingen';
$_lang['clientconfig.export_settings.confirm'] = 'Zodra je hieronder op Ja klikt zal een XML-bestand aangemaakt en gedownload worden met alle ClientConfig instellingen. Weet je zeker dat je door wilt gaan?';
$_lang['clientconfig.import_settings'] = 'Importeer instellingen';
$_lang['clientconfig.import_settings.desc'] = 'Door een XML-bestand te uploaden en de juiste importmodus te kiezen kun je instellingen importeren die eerder zijn geëxporteerd of uit een andere site komen. <b>Let op:</b> instellingen bevatten een referentie naar een groep op basis van een ID; waarschijnlijk zul je de groepen ook moeten importeren.';

$_lang['clientconfig.export_groups'] = 'Exporteer groepen';
$_lang['clientconfig.export_groups.confirm'] = 'Zodra je hieronder op Ja klikt zal een XML-bestand aangemaakt en gedownload worden met alle ClientConfig groepen. Weet je zeker dat je door wilt gaan?';
$_lang['clientconfig.import_groups'] = 'Importeer groepen';
$_lang['clientconfig.import_groups.desc'] = 'Door een XML-bestand te uploaden en de juiste importmodus te kiezen kun je instellingen importeren die eerder zijn geëxporteerd of uit een andere site komen. ';

$_lang['clientconfig.import_file'] = 'Bestand';
$_lang['clientconfig.import_mode'] = 'Importmodus';
$_lang['clientconfig.import_mode.insert'] = "Invoegen: bestaande [[+what]] laten staan en voeg geïmporteerde data toe";
$_lang['clientconfig.import_mode.overwrite'] = "Overschrijven: bestaande [[+what]] laten staan, maar overschrijf ze dezelfde ID hebben";
$_lang['clientconfig.import_mode.replace'] = "Vervangen: eerst worden alle [[+what]] verwijderd, en daarna worden nieuwe rijen geïmporteerd.";
$_lang['clientconfig.start_import'] = 'Start importeren';
$_lang['clientconfig.error.xml_not_loaded'] = 'Geen geschikt XML bestand geüpload.';
$_lang['clientconfig.error.not_an_export'] = 'Het geüploade bestand is geen geschikte ClientConfig export.';
$_lang['clientconfig.error.importing_row'] = 'Er ging iets mis met het importeren van de rij: ';

