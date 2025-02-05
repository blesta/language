<?php
/**
 * Form Rules
 *
 * @package blesta
 * @subpackage blesta.language.uk_ua
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['FormRules.pluginintegrations.cards[][callback].format'] = 'Будь ласка, введіть метод зворотного дзвінка для кожної картки у форматі camelCaseName.';
$lang['FormRules.pluginintegrations.cards[][level].valid'] = 'Одна або кілька карток мають недійсний рівень.';
$lang['FormRules.nonmerchantfields.fields[][type].valid'] = 'Одне або декілька полів мають неприпустимий тип.';
$lang['FormRules.nonmerchantfields.fields[][label].empty'] = 'Будь ласка, введіть мітку для кожного поля.';
$lang['FormRules.nonmerchantfields.fields[][name].format'] = 'Будь ласка, введіть назву для кожного поля у форматі snake_case_name.';
$lang['FormRules.nonmerchantbasic.currencies.format'] = 'Будь ласка, введіть валюту у форматі трьох символів через кому (наприклад, USD, EUR, JPY).';
$lang['FormRules.nonmerchantbasic.authors[][name].empty'] = 'Будь ласка, вкажіть ім\'я кожного автора.';
$lang['FormRules.merchantfields.fields[][type].valid'] = 'Одне або декілька полів мають неприпустимий тип.';
$lang['FormRules.merchantfields.fields[][label].empty'] = 'Будь ласка, введіть мітку для кожного поля.';
$lang['FormRules.merchantfields.fields[][name].format'] = 'Будь ласка, введіть назву для кожного поля у форматі snake_case_name.';
$lang['FormRules.merchantbasic.currencies.format'] = 'Будь ласка, введіть валюту у форматі трьох символів через кому (наприклад, USD, EUR, JPY).';
$lang['FormRules.merchantbasic.authors[][name].empty'] = 'Будь ласка, вкажіть ім\'я кожного автора.';
$lang['FormRules.pluginintegrations.cards[][label].empty'] = 'Будь ласка, вкажіть етикетку для кожної картки.';
$lang['FormRules.pluginintegrations.events[][callback].format'] = 'Будь ласка, введіть метод зворотного дзвінка для кожної події у форматі camelCaseName.';
$lang['FormRules.pluginintegrations.events[][event].empty'] = 'Будь ласка, введіть назву події для кожної події.';
$lang['FormRules.pluginintegrations.actions[][name].empty'] = 'Будь ласка, введіть назву для кожної дії.';
$lang['FormRules.pluginintegrations.actions[][action].format'] = 'Будь ласка, введіть дію для кожної акції малими літерами.';
$lang['FormRules.pluginintegrations.actions[][controller].format'] = 'Будь ласка, введіть контролер для кожної дії у форматі snake_case_name.';
$lang['FormRules.pluginintegrations.actions[][location].valid'] = 'Будь ласка, введіть дійсне місце проведення акції.';
$lang['FormRules.plugindatabase.tables[][columns][][primary].valid'] = 'Primary має бути встановлено в true або false для кожного стовпця.';
$lang['FormRules.plugindatabase.tables[][columns][][nullable].valid'] = 'Nullable має бути встановлено в true або false для кожного стовпця.';
$lang['FormRules.plugindatabase.tables[][columns][][length].empty'] = 'Довжина повинна бути у форматі \'a\', \'b\', \'c\' для стовпців зі списком, порожня для текстових стовпців та стовпців з датою та числовою для всіх інших.';
$lang['FormRules.plugindatabase.tables[][columns][][type].valid'] = 'Один або декілька стовпців мають неприпустимий тип.';
$lang['FormRules.plugindatabase.tables[][columns][][name].format'] = 'Будь ласка, введіть назву методу для кожного стовпця у форматі snake_case_name.';
$lang['FormRules.plugindatabase.tables[][name].format'] = 'Будь ласка, введіть назву методу для кожної таблиці у форматі snake_case_name.';
$lang['FormRules.pluginbasic.authors[][name].empty'] = 'Будь ласка, вкажіть ім\'я кожного автора.';
$lang['FormRules.modulefeatures.cron_tasks[][time].format'] = 'Будь ласка, введіть час у форматі 00:00 або числовий інтервал.';
$lang['FormRules.modulefeatures.cron_tasks[][type].valid'] = 'Одне або більше завдань cron має невірний тип.';
$lang['FormRules.modulefeatures.cron_tasks[][label].empty'] = 'Будь ласка, введіть мітку для кожного завдання cron.';
$lang['FormRules.modulefeatures.cron_tasks[][name].format'] = 'Будь ласка, введіть назву методу для кожного завдання cron у форматі snake_case_name.';
$lang['FormRules.modulefeatures.service_tabs[][level].valid'] = 'Одна або декілька вкладок служби мають недійсний рівень.';
$lang['FormRules.modulefeatures.service_tabs[][label].empty'] = 'Будь ласка, введіть мітку для кожної вкладки послуг.';
$lang['FormRules.modulefeatures.service_tabs[][method_name].format'] = 'Будь ласка, введіть назву методу для кожної вкладки сервісу у форматі camelCaseName.';
$lang['FormRules.modulefields.package_fields[][name_key].valid'] = 'Чи встановлювати поле пакету як ключ імені, повинно мати значення true або false.';
$lang['FormRules.modulefields.package_fields[][type].valid'] = 'Одне або декілька полів пакунка мають неприпустимий тип.';
$lang['FormRules.modulefields.package_fields[][label].empty'] = 'Будь ласка, введіть етикетку для кожного поля пакета.';
$lang['FormRules.modulefields.package_fields[][name].format'] = 'Будь ласка, введіть назву для кожного поля пакета у форматі snake_case_name.';
$lang['FormRules.modulefields.service_fields[][name_key].valid'] = 'Чи встановлювати службове поле як ключ імені, повинно мати значення true або false.';
$lang['FormRules.modulefields.service_fields[][type].valid'] = 'Одне або декілька службових полів мають неприпустимий тип.';
$lang['FormRules.modulefields.service_fields[][label].empty'] = 'Будь ласка, введіть мітку для кожного поля обслуговування.';
$lang['FormRules.modulefields.service_fields[][name].format'] = 'Будь ласка, введіть назву для кожного сервісного поля у форматі snake_case_name.';
$lang['FormRules.modulefields.module_rows[][name_key].valid'] = 'Чи встановлювати поле рядка модуля в якості ключа імені, повинно мати значення true або false.';
$lang['FormRules.modulefields.module_rows[][type].valid'] = 'Один або декілька рядків модуля мають неприпустимий тип.';
$lang['FormRules.modulefields.module_rows[][label].empty'] = 'Будь ласка, введіть мітку для кожного поля рядка модуля.';
$lang['FormRules.modulefields.module_rows[][name].format'] = 'Будь ласка, введіть назву для кожного поля рядка модуля у форматі snake_case_name.';
$lang['FormRules.modulebasic.authors[][name].empty'] = 'Будь ласка, вкажіть ім\'я кожного автора.';
$lang['FormRules.modulebasic.module_group.empty'] = 'Будь ласка, введіть мітку групи модулів.';
$lang['FormRules.modulebasic.module_row_plural.empty'] = 'Будь ласка, додайте назву рядка модуля у множині.';
$lang['FormRules.modulebasic.module_row.empty'] = 'Будь ласка, введіть назву рядка модуля.';
$lang['FormRules.general.name.format'] = 'Назви розширень можуть містити лише символи alpha_numeric, підкреслення та пробіли.';

