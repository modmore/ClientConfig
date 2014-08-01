<?php
/**
 * ClientConfig
 *
 * Copyright 2011-2014 by Mark Hamstra <hello@markhamstra.com>
 * French translation by Romain Fallet (@RomainFallet)
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
$_lang['clientconfig.desc'] = 'Gérer et modifier les paramètres de configuration du site.';
$_lang['clientconfig.add_setting'] = 'Créer un paramètre';
$_lang['clientconfig.update_setting'] = 'Mettre à jour';
$_lang['clientconfig.duplicate_setting'] = 'Dupliquer';
$_lang['clientconfig.remove_setting'] = 'Supprimer';
$_lang['clientconfig.remove_setting.confirm'] = 'Êtes-vous sûr de vouloir supprimer ce paramètre de configuration&nbsp;?';
$_lang['clientconfig.add_group'] = 'Créer un groupe';
$_lang['clientconfig.update_group'] = 'Mettre à jour';
$_lang['clientconfig.remove_group'] = 'Supprimer';
$_lang['clientconfig.remove_group.confirm'] = 'Êtes-vous sûr de vouloir supprimer ce groupe&nbsp;? Tous les paramètres de configuration de ce groupe ne seront pas visibles pour l\'utilisateur jusqu\'à ce que vous les ajoutiez à un autre groupe.';
$_lang['clientconfig.admin'] = 'Administration';
$_lang['clientconfig.adminpanel'] = 'Panneau de configuration';
$_lang['clientconfig.cgsetting_err_ns_key'] = 'La clé du paramètre de configuration est requise.';
$_lang['clientconfig.cgsetting_err_ae_key'] = 'Un paramètre de configuration utilisant cette clé existe déjà.';
$_lang['clientconfig.description'] = 'Description';
$_lang['clientconfig.default'] = 'Valeur par défaut';
$_lang['clientconfig.error.noresults'] = 'Aucun élément trouvé.';
$_lang['clientconfig.filter_on_group'] = 'Filtrer par groupe';
$_lang['clientconfig.id'] = 'ID';
$_lang['clientconfig.is_required'] = 'Requis&nbsp;?';
$_lang['clientconfig.is_required.long'] = 'Paramètre de configuration requis';
$_lang['clientconfig.group'] = 'Groupe';
$_lang['clientconfig.groups'] = 'Groupes';
$_lang['clientconfig.key'] = 'Clé';
$_lang['clientconfig.label'] = 'Nom';
$_lang['clientconfig.no_configuration_yet'] = 'Il n\'y a pas de configuration enregistrée.';
$_lang['clientconfig.no_configuration_yet.desc'] = 'Il n\'y a pas de configuration enregistrée. Si vous êtes l\'administrateur du site, veuillez <a href="http://rtfm.modx.com/display/ADDON/ClientConfig">consulter la documentation officielle</a> pour créer des paramètres de configuration à vos utilisateurs.';
$_lang['clientconfig.options'] = 'Options du champ';
$_lang['clientconfig.options.desc'] = 'Pour certains types de champ, comme les listes déroulantes, vous pouvez définir des options. Séparez les différentes options avec deux barres verticales (||) et si vous souhaitez voir des valeurs différentes de celles de vos utilisateurs, écrivez "nom==valeur".';
$_lang['clientconfig.save_config'] = 'Sauvegarder les paramètres';
$_lang['clientconfig.sortorder'] = 'Trier';
$_lang['clientconfig.settings'] = 'Paramètres de configuration';
$_lang['clientconfig.settings_count'] = '# des paramètres de configuration';
$_lang['clientconfig.value'] = 'Valeur';
$_lang['clientconfig.xtype'] = 'Type de champ';
$_lang['clientconfig.xtype.textfield'] = 'Texte';
$_lang['clientconfig.xtype.textarea'] = 'Bloc de texte';
$_lang['clientconfig.xtype.richtext'] = 'Texte enrichi';
$_lang['clientconfig.xtype.numberfield'] = 'Nombre';
$_lang['clientconfig.xtype.colorpalette'] = 'Sélecteur de couleur';
$_lang['clientconfig.xtype.xcheckbox'] = 'Case à cocher';
$_lang['clientconfig.xtype.datefield'] = 'Date';
$_lang['clientconfig.xtype.timefield'] = 'Heure';
$_lang['clientconfig.xtype.combobox'] = 'Liste déroulante';
$_lang['clientconfig.xtype.image'] = 'Image';
$_lang['clientconfig.xtype.googlefonts'] = 'Liste de polices Google';
$_lang['clientconfig.to_client_view'] = 'Voir l\'interface de l\'utilisateur';
$_lang['clientconfig.saved'] = 'Sauvegardé';
$_lang['clientconfig.saved.text'] = 'Les paramètres de configuration ont été sauvegardés.';
$_lang['clientconfig.field_is_required'] = 'Cette option ne peut être laissée vide.';

// New 2014/07/20
$_lang['clientconfig.create_groups_first'] = 'Vous devez d\'abord créer un groupe';
$_lang['clientconfig.create_groups_first.desc'] = 'Avant de créer un paramètre de configuration, vous devez avoir créé au moins un groupe. Sans groupes, les paramètres de configuration ne peuvent pas être affichés à l\'utilisateur.';

$_lang['clientconfig.export_settings'] = 'Exporter';
$_lang['clientconfig.export_settings.confirm'] = 'Si vous cliquez sur «&nbsp;Oui&nbsp;» ci-dessous, un fichier XML contenant les paramètres de configuration va être généré et téléchargé. Êtes-vous sûr de vouloir continuer&nbsp;?';
$_lang['clientconfig.import_settings'] = 'Importer';
$_lang['clientconfig.import_settings.desc'] = 'En téléchargeant vers le serveur le fichier XML et en choisissant le bon mode d\'import, vous pouvez importer des paramètres de configuration exportés précédemment. <b>Note&nbsp;:</b> les paramètres de configuration contiennent des références à leurs groupes grâce à leur ID. Si vous importez des paramètres de configuration, vous devrez probablement importer les groupes également.';

$_lang['clientconfig.export_groups'] = 'Exporter';
$_lang['clientconfig.export_groups.confirm'] = 'Si vous cliquez sur «&nbsp;Oui&nbsp;» ci-dessous, un fichier XML contenant les groupes des paramètres de configuration va être généré et téléchargé. Êtes-vous sûr de vouloir continuer&nbsp;?';
$_lang['clientconfig.import_groups'] = 'Importer';
$_lang['clientconfig.import_groups.desc'] = 'En téléchargeant vers le serveur le fichier XML et en choisissant le bon mode d\'import, vous pouvez importer les groupes des paramètres de configuration exportés précédemment.';

$_lang['clientconfig.import_file'] = 'Fichier à importer';
$_lang['clientconfig.import_mode'] = 'Mode d\'import';
$_lang['clientconfig.import_mode.insert'] = "Insérer&nbsp;: conserve les paramètres de configuration existants et ajoute les données importées.";
$_lang['clientconfig.import_mode.overwrite'] = "Écraser&nbsp;: conserve les paramètres de configuration existants mais écrase ceux qui ont le même ID que les données importées.";
$_lang['clientconfig.import_mode.replace'] = "Remplacer&nbsp;: supprime d'abord tous les paramètres de configuration existants puis ajoute les données importées.";
$_lang['clientconfig.start_import'] = 'Démarrer l\'import';
$_lang['clientconfig.error.xml_not_loaded'] = 'Le fichier téléchargé n\'est pas un fichier XML valide.';
$_lang['clientconfig.error.not_an_export'] = 'Le fichier téléchargé n\'est pas un fichier d\'export valide.';
$_lang['clientconfig.error.importing_row'] = 'Un incident lors de la sauvegarde d\'une donnée importée est apparu&nbsp;: ';

