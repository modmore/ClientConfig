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
 * @subpackage lexicon-ru
 * @language ru
 * @author Ivan Klimchuk (Alroniks, ivan@klimchuk.com), Ruslan Aleev (info@cat-art.ru)
 * @date 2013-01-08
 */

$_lang['clientconfig'] = 'Конфигурация';
$_lang['clientconfig.desc'] = 'Установка и обновление конфигурации сайта.';
$_lang['clientconfig.add_setting'] = 'Добавить настройку';
$_lang['clientconfig.update_setting'] = 'Обновить настройку';
$_lang['clientconfig.duplicate_setting'] = 'Копировать настройку';
$_lang['clientconfig.remove_setting'] = 'Удалить настройку';
$_lang['clientconfig.remove_setting.confirm'] = 'Вы уверены, что хотите удалить эту настройку?';
$_lang['clientconfig.add_group'] = 'Добавить группу';
$_lang['clientconfig.update_group'] = 'Обновить группу';
$_lang['clientconfig.remove_group'] = 'Удалить группу';
$_lang['clientconfig.remove_group.confirm'] = 'Вы уверены, что хотите удалить эту группу? Все параметры из этой группы не будут видны для клиента, пока вы не добавите их в другую группу.';
$_lang['clientconfig.admin'] = 'Администрирование';
$_lang['clientconfig.adminpanel'] = 'Панель администрирования конфигурации';
$_lang['clientconfig.cgsetting_err_ns_key'] = 'Обязателен ключ для настройки.';
$_lang['clientconfig.cgsetting_err_ae_key'] = 'Такой ключ уже существует.';
$_lang['clientconfig.description'] = 'Описание';
$_lang['clientconfig.default'] = 'Значение по умолчанию';
$_lang['clientconfig.error.noresults'] = 'Элементы не найдены.';
$_lang['clientconfig.filter_on_group'] = 'Фильтр по группе';
$_lang['clientconfig.id'] = 'ID';
$_lang['clientconfig.is_required'] = 'Обязателен?';
$_lang['clientconfig.is_required.long'] = 'Настройка обязательна';
$_lang['clientconfig.group'] = 'Группа';
$_lang['clientconfig.groups'] = 'Группы';
$_lang['clientconfig.key'] = 'Ключ';
$_lang['clientconfig.label'] = 'Название';
$_lang['clientconfig.no_configuration_yet'] = 'Нет доступных конфигураций';
$_lang['clientconfig.no_configuration_yet.desc'] = 'Кажется, еще не созданы какие-либо конфигурации. Если вы являетесь администратором сайта, пожалуйста изучите <a href="http://rtfm.modx.com/display/ADDON/ClientConfig">официальную документацию</a> по настройке конфигурации для вашего клиента.';
$_lang['clientconfig.options'] = 'Параметры поля';
$_lang['clientconfig.options.desc'] = 'Для некоторых типов полей, таких как выпадающие списки, вы можете задать параметры. Разделите разные параметры двумя вертикальными чертами (||) и если вы хотите другое значение, чем то, что видит клиент, используйте "название==значение".';
$_lang['clientconfig.save_config'] = 'Сохранить конфигурацию';
$_lang['clientconfig.sortorder'] = 'Порядок сортировки';
$_lang['clientconfig.settings'] = 'Настройки';
$_lang['clientconfig.settings_count'] = 'Кол-во настроек';
$_lang['clientconfig.value'] = 'Значение';
$_lang['clientconfig.xtype'] = 'Тип поля';
$_lang['clientconfig.xtype.textfield'] = 'Текст';
$_lang['clientconfig.xtype.textarea'] = 'Текстовая область';
$_lang['clientconfig.xtype.richtext'] = 'Текстовый редактор';
$_lang['clientconfig.xtype.numberfield'] = 'Число';
$_lang['clientconfig.xtype.colorpalette'] = 'Выбор цвета';
$_lang['clientconfig.xtype.xcheckbox'] = 'Чекбокс';
$_lang['clientconfig.xtype.datefield'] = 'Дата';
$_lang['clientconfig.xtype.timefield'] = 'Время';
$_lang['clientconfig.xtype.combobox'] = 'Выпадающий список';
$_lang['clientconfig.xtype.image'] = 'Изображение';
$_lang['clientconfig.xtype.googlefonts'] = 'Список шрифтов Google';
$_lang['clientconfig.to_client_view'] = 'Показать клиенту';
$_lang['clientconfig.saved'] = 'Сохранено';
$_lang['clientconfig.saved.text'] = 'Настройки были сохранены.';
$_lang['clientconfig.field_is_required'] = 'Этот параметр не может быть пустым.';

// New 2014/07/20
$_lang['clientconfig.create_groups_first'] = 'Сначала создайте группу';
$_lang['clientconfig.create_groups_first.desc'] = 'Извините, но прежде чем вы сможете добавить настройку, вам необходима хотя бы одна группа. Без группы настройки не могут быть отображены клиенту.';

$_lang['clientconfig.export_settings'] = 'Экспортировать настройки';
$_lang['clientconfig.export_settings.confirm'] = 'Когда вы нажмете «Да», будет сгенерирован и скачан XML-файл, который содержит все настройки ClientConfig. Вы уверены что хотите продолжить?';
$_lang['clientconfig.import_settings'] = 'Импортировать настройки';
$_lang['clientconfig.import_settings.desc'] = 'Загрузив XML-файл и выбрав правильный режим импорта, вы можете импортировать настройки, экспортированные ранее или с другого сайта. <b>Примечание:</b> настройки содержат ссылки на группы по их ID; если вы импортируете настройки, вам потребуется также импортировать и группы.';

$_lang['clientconfig.export_groups'] = 'Экспортировать группы';
$_lang['clientconfig.export_groups.confirm'] = 'Когда вы нажмете «Да», будет сгенерирован и скачан XML-файл, который содержит все группы ClientConfig. Вы уверены что хотите продолжить?';
$_lang['clientconfig.import_groups'] = 'Импортировать группы';
$_lang['clientconfig.import_groups.desc'] = 'Загрузив XML-файл и выбрав правильный режим импорта, вы можете импортировать группы, экспортированные ранее или с другого сайта.';

$_lang['clientconfig.import_file'] = 'Файл для импорта';
$_lang['clientconfig.import_mode'] = 'Режим импорта';
$_lang['clientconfig.import_mode.insert'] = "Вставить: оставить существующие [[+what]] и добавить импортированные данные";
$_lang['clientconfig.import_mode.overwrite'] = "Перезаписать: оставить существующие [[+what]], но перезаписать их, если они имеют одинаковый ID";
$_lang['clientconfig.import_mode.replace'] = "Заменить: сначала удалить все текущие [[+what]], а затем импортировать новые данные";
$_lang['clientconfig.start_import'] = 'Начать импорт';
$_lang['clientconfig.error.xml_not_loaded'] = 'Не загружен корректный XML-файл.';
$_lang['clientconfig.error.not_an_export'] = 'Загруженный файл не является корректным файлом экспорта для ClientConfig.';
$_lang['clientconfig.error.importing_row'] = 'Что-то пошло не так в процессе сохранения экспорта: ';

// New 2017-01-31
$_lang['clientconfig.xtype.password'] = 'Пароль';
$_lang['clientconfig.xtype.file'] = 'Файл';
$_lang['clientconfig.source'] = 'Источник файлов';
$_lang['clientconfig.source.desc'] = 'Источник файлов для диспетчера файлов.';

// New 2017-09-13
$_lang['clientconfig.choose_context'] = 'Выберите контекст';
$_lang['clientconfig.global_values'] = 'Глобальные';
$_lang['clientconfig.config_for_context'] = 'Конфигурация для [[+context]]';
$_lang['clientconfig.categories'] = 'Категории';
$_lang['clientconfig.process_options'] = 'Обрабатывать теги в параметрах';
