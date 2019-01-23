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
 * Finnish translation Vesa Särkelä 23.1.2019
 *
 * @package clientconfig
 */

$_lang['clientconfig'] = 'Sivuston elementit';
$_lang['clientconfig.desc'] = 'Muokkaa koko sivustoa koskevia elementtejä.';
$_lang['clientconfig.add_setting'] = 'Lisää asetus';
$_lang['clientconfig.update_setting'] = 'Päivitä asetus';
$_lang['clientconfig.duplicate_setting'] = 'Tee kopio asetusesta';
$_lang['clientconfig.remove_setting'] = 'Poista asetus';
$_lang['clientconfig.remove_setting.confirm'] = 'Haluatko varmasti poistaa asetuksen?';
$_lang['clientconfig.add_group'] = 'Lisää ryhmä';
$_lang['clientconfig.update_group'] = 'Muokkaa ryhmää';
$_lang['clientconfig.remove_group'] = 'Poista ryhmä';
$_lang['clientconfig.remove_group.confirm'] = 'Haluatko varmasti poistaa ryhmän? Kaikki asetukset ryhmässä lakkaavat näkymästä asiakkaalle ennenkuin lisäät asetukset johonkin toiseen ryhmään.';
$_lang['clientconfig.admin'] = 'Hallitse';
$_lang['clientconfig.adminpanel'] = 'Asetusten hallintapaneeli';
$_lang['clientconfig.cgsetting_err_ns_key'] = 'Asetuksen avain on pakollinen.';
$_lang['clientconfig.cgsetting_err_ae_key'] = 'Jokin toinen asetus käyttää samaa avainta.';
$_lang['clientconfig.description'] = 'Kuvaus';
$_lang['clientconfig.default'] = 'Oletusasetukset';
$_lang['clientconfig.error.noresults'] = 'Kohteita ei löytynyt.';
$_lang['clientconfig.filter_on_group'] = 'Suodata ryhmiä';
$_lang['clientconfig.id'] = 'ID';
$_lang['clientconfig.is_required'] = 'Pakollinen';
$_lang['clientconfig.is_required.long'] = 'Asetus on pakollinen';
$_lang['clientconfig.group'] = 'Ryhmä';
$_lang['clientconfig.groups'] = 'Ryhmät';
$_lang['clientconfig.key'] = 'Avain';
$_lang['clientconfig.label'] = 'Nimi';
$_lang['clientconfig.no_configuration_yet'] = 'Ei konfiguraatiota saatavilla';
$_lang['clientconfig.no_configuration_yet.desc'] = 'Et ole asettanut konfiguraatiota vielä. Jos olet järjestelmän valvoja katso ohjeet asiakkaan lisäämiseksi konfiguraatioihin täältä: <a href="http://rtfm.modx.com/display/ADDON/ClientConfig">follow the official documentation</a>';
$_lang['clientconfig.options'] = 'Kentän vaihtoehdot';
$_lang['clientconfig.options.desc'] = 'Joillekkin kentille (kuten valintalaatikko) voit määritellä useita asetuksia. Erota asetukset kahdella palkilla (||) ja jos haluat erillaisen arvon kuin asiakas, käytä "label==value". ';
$_lang['clientconfig.save_config'] = 'Tallenna konfiguraatio';
$_lang['clientconfig.sortorder'] = 'Lajittelujärjestys';
$_lang['clientconfig.settings'] = 'Asetukset';
$_lang['clientconfig.settings_count'] = '# kpl asetuksia';
$_lang['clientconfig.value'] = 'Arvo';
$_lang['clientconfig.xtype'] = 'Kenttä';
$_lang['clientconfig.xtype.textfield'] = 'Tekstikenttä';
$_lang['clientconfig.xtype.textarea'] = 'Teksatialue -kenttä';
$_lang['clientconfig.xtype.richtext'] = 'Muotoiltava teksti';
$_lang['clientconfig.xtype.numberfield'] = 'Luku';
$_lang['clientconfig.xtype.colorpalette'] = 'Väripipetti';
$_lang['clientconfig.xtype.xcheckbox'] = 'valintaruutu';
$_lang['clientconfig.xtype.datefield'] = 'Päiväys';
$_lang['clientconfig.xtype.timefield'] = 'Aika';
$_lang['clientconfig.xtype.combobox'] = 'Valintalaatikko';
$_lang['clientconfig.xtype.image'] = 'Kuva';
$_lang['clientconfig.xtype.googlefonts'] = 'Googlen kirjasinlista';
$_lang['clientconfig.to_client_view'] = 'Asiakkaan näkymään';
$_lang['clientconfig.saved'] = 'Tallennettu';
$_lang['clientconfig.saved.text'] = 'Asetus on tallennettu.';
$_lang['clientconfig.field_is_required'] = 'Tätä ei voi jättää tyhjäksi.';

// New 2014/07/20
$_lang['clientconfig.create_groups_first'] = 'Luo ryhmä ensiksi';
$_lang['clientconfig.create_groups_first.desc'] = 'Lisätäksesi asetuksen sinun on lisättävä vähintään yksi ryhmä. Asetuksia ei voi näyttää asikkaalle ilman ryhmiä.';

$_lang['clientconfig.export_settings'] = 'Vie asetukset';
$_lang['clientconfig.export_settings.confirm'] = 'Kun klikkaat kyllä, XML -tiedosto, joka sisältää kaikki asetukset, luodaan ja ladataan. Haluatko jatkaa?';
$_lang['clientconfig.import_settings'] = 'Tuo asetukset';
$_lang['clientconfig.import_settings.desc'] = 'Lataamalla XML -tiedoston ja valitsemalla oikean oikean tuontitilan voit tuoda asetuksia muusta järjestelmästä <b>Huomaa:</b> Asetukset sisältävät viittauksia ryhmiin ID:n mukaan. Jos olet tuomassa asetuksia tuo mahdolliset ryhmät myös.';

$_lang['clientconfig.export_groups'] = 'Vie ryhmät';
$_lang['clientconfig.export_groups.confirm'] = 'Kun klikkaat kyllä, XML -tiedosto, joka sisältää kaikki ryhmät, luodaan ja ladataan. Haluatko jatkaa?';
$_lang['clientconfig.import_groups'] = 'Tuo ryhmät';
$_lang['clientconfig.import_groups.desc'] = 'Lataamalla XML -tiedoston voit tuoda ryhmiä muusta järjestelmästä.';

$_lang['clientconfig.import_file'] = 'Tiedosto tuotavaksi';
$_lang['clientconfig.import_mode'] = 'Tuontitila';
$_lang['clientconfig.import_mode.insert'] = "Lisää: Säilytä entiset [[+what]] ja lisää tuotava data";
$_lang['clientconfig.import_mode.overwrite'] = "Ylikirjoita: Säilytä entiset [[+what]], mutta ylikirjoita ne jos niillä on sama ID";
$_lang['clientconfig.import_mode.replace'] = "Korvaa: Poista kaikki entiset [[+what]], ja tuo uudet rivit.";
$_lang['clientconfig.start_import'] = 'Aloita tuonti';
$_lang['clientconfig.error.xml_not_loaded'] = 'XML tiedosto ei ole oikeanlainen, tiedostoa ei  ladattu.';
$_lang['clientconfig.error.not_an_export'] = 'Ladattu tiedosto ei ole oikeanlainen tiedosto Konfigurointiin.';
$_lang['clientconfig.error.importing_row'] = 'Jotain meni pieleen tallennettaessa viennin riviä: ';

// New 2017-01-31
$_lang['clientconfig.xtype.password'] = 'Salasana';
$_lang['clientconfig.xtype.file'] = 'Tiedosto';
$_lang['clientconfig.source'] = 'Media lähde';
$_lang['clientconfig.source.desc'] = 'Tiedostoselaimessa käytettävä medialähde.';

// New 2017-09-13
$_lang['clientconfig.choose_context'] = 'Valitse Konteksti';
$_lang['clientconfig.global_values'] = 'Globaali';
$_lang['clientconfig.config_for_context'] = 'Asetus [[+context]]:lle';
$_lang['clientconfig.categories'] = 'Kategoriat';
$_lang['clientconfig.process_options'] = 'Käsittele tagit optioissa';
