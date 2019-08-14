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
 * @subpackage lexicon
 * @language pt (Translated by João Nogueira - JANogueira)
 * 
 */

$_lang['clientconfig'] = 'Configuração';
$_lang['clientconfig.desc'] = 'Definir e atualizar a configuração do site.';
$_lang['clientconfig.add_setting'] = 'Adicionar Configuraçãoo';
$_lang['clientconfig.update_setting'] = 'Atualizar Configuração';
$_lang['clientconfig.duplicate_setting'] = 'Duplicar Configuração';
$_lang['clientconfig.remove_setting'] = 'Remover Configuração';
$_lang['clientconfig.remove_setting.confirm'] = 'Tem a certeza que deseja remover esta Configuração?';
$_lang['clientconfig.add_group'] = 'Adicionar Grupo';
$_lang['clientconfig.update_group'] = 'Atualizar Grupo';
$_lang['clientconfig.remove_group'] = 'Remover Grupo';
$_lang['clientconfig.remove_group.confirm'] = 'Tem certeza que deseja remover este grupo? Todas as configurações deste grupo não estarão visíveis para o cliente até que sejam adicionadas a um grupo diferente.';
$_lang['clientconfig.admin'] = 'Admin';
$_lang['clientconfig.adminpanel'] = 'Painel de Administração da Configuração';
$_lang['clientconfig.cgsetting_err_ns_key'] = 'A chave da configuração é necessária.';
$_lang['clientconfig.cgsetting_err_ae_key'] = 'Outra configuração já existe com esta chave.';
$_lang['clientconfig.description'] = 'Descrição';
$_lang['clientconfig.default'] = 'Valor Pré-definido';
$_lang['clientconfig.error.noresults'] = 'Nenhum item encontrado.';
$_lang['clientconfig.filter_on_group'] = 'Filtrar no Grupo';
$_lang['clientconfig.id'] = 'ID';
$_lang['clientconfig.is_required'] = 'Obrigatório?';
$_lang['clientconfig.is_required.long'] = 'A configuração é obrigatória';
$_lang['clientconfig.group'] = 'Grupo';
$_lang['clientconfig.groups'] = 'Grupos';
$_lang['clientconfig.key'] = 'Chave';
$_lang['clientconfig.label'] = 'Etiqueta';
$_lang['clientconfig.no_configuration_yet'] = 'Nenhuma Configuração Disponível';
$_lang['clientconfig.no_configuration_yet.desc'] = 'Parece que ainda não existe uma configuração definida. Se é o administrador do site, por favor <a href="http://rtfm.modx.com/display/ADDON/ClientConfig">siga a documentação oficial</a> para definir a configuração para o seu cliente.';
$_lang['clientconfig.options'] = 'Opções dos Campos';
$_lang['clientconfig.options.desc'] = 'Para determinados campos como "select boxes", pode definir opções. Separe as diferentes opções com duas barras retas (||) e se pretender um valor diferente do que o seu cliente poderá ver, utilize "label==value". ';
$_lang['clientconfig.save_config'] = 'Guardar configuração';
$_lang['clientconfig.sortorder'] = 'Disposição da ordem';
$_lang['clientconfig.settings'] = 'Definições';
$_lang['clientconfig.settings_count'] = '# de Definições';
$_lang['clientconfig.value'] = 'Valor';
$_lang['clientconfig.xtype'] = 'Tipo de campo';
$_lang['clientconfig.xtype.textfield'] = 'Texto';
$_lang['clientconfig.xtype.textarea'] = 'Área de texto (textarea)';
$_lang['clientconfig.xtype.richtext'] = 'Texto Rico (RTE)';
$_lang['clientconfig.xtype.numberfield'] = 'Número';
$_lang['clientconfig.xtype.colorpalette'] = 'Colorpicker';
$_lang['clientconfig.xtype.xcheckbox'] = 'Caixa de seleção (Checkbox)';
$_lang['clientconfig.xtype.datefield'] = 'Data';
$_lang['clientconfig.xtype.timefield'] = 'Hora';
$_lang['clientconfig.xtype.combobox'] = 'Quadro de seleção (Selectbox)';
$_lang['clientconfig.xtype.image'] = 'Imagem';
$_lang['clientconfig.xtype.googlefonts'] = 'Lista de Google Fonts';
$_lang['clientconfig.to_client_view'] = 'Voltar à vista de Cliente';
$_lang['clientconfig.saved'] = 'Guardado';
$_lang['clientconfig.saved.text'] = 'As configurações foram guardadas.';
$_lang['clientconfig.field_is_required'] = 'Esta opção não pode ser deixada vazia.';

// New 2014/07/20
$_lang['clientconfig.create_groups_first'] = 'Crie um grupo primeiro';
$_lang['clientconfig.create_groups_first.desc'] = 'Antes de adicionar uma configuração, deverá ter, pelo menos, um grupo. Sem grupos, as configurações não podem ser apresentadas ao cliente.';

$_lang['clientconfig.export_settings'] = 'Exportar configurações';
$_lang['clientconfig.export_settings.confirm'] = 'Quando clicar "Sim", em baixo, um arquivo de XML será criado e descarregado, mantendo todas as configurações do ClientConfig. Tem certeza que deseja continuar?';
$_lang['clientconfig.import_settings'] = 'Importar Configurações';
$_lang['clientconfig.import_settings.desc'] = 'Ao fazer upload de um arquivo XML e ao escolher o modo de importação correto, poderá importar as configurações que exportou anteriormente ou de um site diferente. <b>Nota:</b> As configurações contêm referências a Grupos através dos seus IDs; Se pretender importar Configurações, provavelmente precisará de importar também os Grupos.';

$_lang['clientconfig.export_groups'] = 'Exportar Grupos';
$_lang['clientconfig.export_groups.confirm'] = 'Quando clicar "Sim", em baixo, um arquivo XML será criado e descarregado, mantendo todos os grupos do ClientConfig. Tem a certeza que deseja continuar?';
$_lang['clientconfig.import_groups'] = 'Importar Grupos';
$_lang['clientconfig.import_groups.desc'] = 'Ao fazer upload de um arquivo XML e ao escolher o modo de importação correto, poderá importar os Grupos que exportou anteriormente ou de um site diferente. ';

$_lang['clientconfig.import_file'] = 'Ficheiro a Importat';
$_lang['clientconfig.import_mode'] = 'Modo de Importação';
$_lang['clientconfig.import_mode.insert'] = "Inserção: preservar [[+what]] já existente e adicionar os dados importados";
$_lang['clientconfig.import_mode.overwrite'] = "Overwrite: preservar [[+what]] já existente, mas sobrescrevê-los se tiverem o mesmo ID";
$_lang['clientconfig.import_mode.replace'] = "Substituir: Remover primeiro todos os dados atuais ([[+what]]), para depois importar novos dados.";
$_lang['clientconfig.start_import'] = 'Iniciar Importação';
$_lang['clientconfig.error.xml_not_loaded'] = 'Nenhum ficheiro XML válido enviado.';
$_lang['clientconfig.error.not_an_export'] = 'O ficheiro enviado não é um ficheiro de exportação válido do ClientConfig.';
$_lang['clientconfig.error.importing_row'] = 'Algo correu mal ao guardar uma linha da exportação: ';

// New 2017-01-31
$_lang['clientconfig.xtype.password'] = 'Palavra-passe';
$_lang['clientconfig.xtype.file'] = 'Ficheiro';
$_lang['clientconfig.source'] = 'Fonte Multimédia';
$_lang['clientconfig.source.desc'] = 'A Fonte Multimédia a ser utilizada no navegador de ficheiros.';

// New 2017-09-13
$_lang['clientconfig.choose_context'] = 'Escolha o Contexto';
$_lang['clientconfig.global_values'] = 'Global';
$_lang['clientconfig.config_for_context'] = 'Configuração para o contexto: [[+context]]';
$_lang['clientconfig.categories'] = 'Categorias';
$_lang['clientconfig.process_options'] = 'Processar Tags nas opções';
