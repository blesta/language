<?php
/**
 * Form Rules
 *
 * @package blesta
 * @subpackage blesta.language.bg_bg
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['FormRules.nonmerchantfields.fields[][type].valid'] = 'Едно или повече полета са с невалиден тип.';
$lang['FormRules.nonmerchantfields.fields[][label].empty'] = 'Моля, въведете етикет за всяко поле.';
$lang['FormRules.nonmerchantfields.fields[][name].format'] = 'Моля, въведете име за всяко поле във формат snake_case_name.';
$lang['FormRules.nonmerchantbasic.currencies.format'] = 'Моля, въведете валутите в три символа, разделени със запетаи (напр. USD,EUR,JPY).';
$lang['FormRules.nonmerchantbasic.authors[][name].empty'] = 'Моля, въведете име за всеки автор.';
$lang['FormRules.merchantfields.fields[][type].valid'] = 'Едно или повече полета са с невалиден тип.';
$lang['FormRules.merchantfields.fields[][label].empty'] = 'Моля, въведете етикет за всяко поле.';
$lang['FormRules.merchantfields.fields[][name].format'] = 'Моля, въведете име за всяко поле във формат snake_case_name.';
$lang['FormRules.merchantbasic.currencies.format'] = 'Моля, въведете валутите в три символа, разделени със запетаи (напр. USD,EUR,JPY).';
$lang['FormRules.merchantbasic.authors[][name].empty'] = 'Моля, въведете име за всеки автор.';
$lang['FormRules.pluginintegrations.cards[][label].empty'] = 'Моля, въведете етикет за всяка карта.';
$lang['FormRules.pluginintegrations.cards[][callback].format'] = 'Моля, въведете метод за обратно извикване за всяка карта във формат camelCaseName.';
$lang['FormRules.pluginintegrations.cards[][level].valid'] = 'Една или повече карти имат невалидно ниво.';
$lang['FormRules.pluginintegrations.events[][callback].format'] = 'Моля, въведете метод за обратно извикване за всяко събитие във формат camelCaseName.';
$lang['FormRules.pluginintegrations.events[][event].empty'] = 'Моля, въведете име на събитието за всяко събитие.';
$lang['FormRules.pluginintegrations.actions[][name].empty'] = 'Моля, въведете име за всяко действие.';
$lang['FormRules.pluginintegrations.actions[][action].format'] = 'Моля, въведете действие за всяко действие с всички малки букви.';
$lang['FormRules.pluginintegrations.actions[][controller].format'] = 'Моля, въведете контролер за всяко действие във формат snake_case_name.';
$lang['FormRules.pluginintegrations.actions[][location].valid'] = 'Моля, въведете валидно местоположение на действието.';
$lang['FormRules.plugindatabase.tables[][columns][][primary].valid'] = 'За всяка колона трябва да се зададе стойност true или false.';
$lang['FormRules.plugindatabase.tables[][columns][][nullable].valid'] = 'За всяка колона трябва да се зададе стойност true или false за Nullable.';
$lang['FormRules.plugindatabase.tables[][columns][][length].empty'] = 'Дължината трябва да бъде във формат \'a\',\'b\',\'c\' за колони с enum, празна за колони с текст и дата и числова за всички останали.';
$lang['FormRules.plugindatabase.tables[][columns][][type].valid'] = 'Една или повече колони имат невалиден тип.';
$lang['FormRules.plugindatabase.tables[][columns][][name].format'] = 'Моля, въведете име на метода за всяка колона във формат snake_case_name.';
$lang['FormRules.plugindatabase.tables[][name].format'] = 'Моля, въведете име на метода за всяка таблица във формат snake_case_name.';
$lang['FormRules.pluginbasic.authors[][name].empty'] = 'Моля, въведете име за всеки автор.';
$lang['FormRules.modulefeatures.cron_tasks[][time].format'] = 'Моля, въведете време във формат 00:00 или цифров интервал.';
$lang['FormRules.modulefeatures.cron_tasks[][type].valid'] = 'Една или повече задачи на cron имат невалиден тип.';
$lang['FormRules.modulefeatures.cron_tasks[][label].empty'] = 'Моля, въведете етикет за всяка задача на cron.';
$lang['FormRules.modulefeatures.cron_tasks[][name].format'] = 'Моля, въведете име на метод за всяка задача на cron във формат snake_case_name.';
$lang['FormRules.modulefeatures.service_tabs[][level].valid'] = 'Един или повече табове на услуги имат невалидно ниво.';
$lang['FormRules.modulefeatures.service_tabs[][label].empty'] = 'Моля, въведете етикет за всеки раздел на услугата.';
$lang['FormRules.modulefeatures.service_tabs[][method_name].format'] = 'Моля, въведете име на метод за всеки раздел на услугата във формат camelCaseName.';
$lang['FormRules.modulefields.package_fields[][name_key].valid'] = 'Дали да се зададе полето на пакета като ключ на името, трябва да бъде зададено като true или false.';
$lang['FormRules.modulefields.package_fields[][type].valid'] = 'Едно или повече полета на пакетите имат невалиден тип.';
$lang['FormRules.modulefields.package_fields[][label].empty'] = 'Моля, въведете етикет за всяко поле на опаковката.';
$lang['FormRules.modulefields.package_fields[][name].format'] = 'Моля, въведете име за всяко поле на пакета във формат snake_case_name.';
$lang['FormRules.modulefields.service_fields[][name_key].valid'] = 'Дали да се зададе поле на услугата като ключ на името трябва да бъде зададено като true или false.';
$lang['FormRules.modulefields.service_fields[][type].valid'] = 'Едно или повече служебни полета имат невалиден тип.';
$lang['FormRules.modulefields.service_fields[][label].empty'] = 'Моля, въведете етикет за всяко поле за услуги.';
$lang['FormRules.modulefields.service_fields[][name].format'] = 'Моля, въведете име за всяко поле на услугата във формат snake_case_name.';
$lang['FormRules.modulefields.module_rows[][name_key].valid'] = 'Дали да се зададе полето на реда на модула като ключ за име, трябва да се зададе стойност true или false.';
$lang['FormRules.modulefields.module_rows[][type].valid'] = 'Един или повече редове на модула имат невалиден тип.';
$lang['FormRules.modulefields.module_rows[][label].empty'] = 'Моля, въведете етикет за всяко поле на реда на модула.';
$lang['FormRules.modulefields.module_rows[][name].format'] = 'Моля, въведете име за всяко поле на реда на модула във формат snake_case_name.';
$lang['FormRules.modulebasic.authors[][name].empty'] = 'Моля, въведете име за всеки автор.';
$lang['FormRules.modulebasic.module_group.empty'] = 'Моля, въведете етикет на група модули.';
$lang['FormRules.modulebasic.module_row_plural.empty'] = 'Моля, добавете име на ред на модула в множествено число.';
$lang['FormRules.modulebasic.module_row.empty'] = 'Моля, въведете име на ред на модула.';
$lang['FormRules.general.name.format'] = 'Имената на разширенията могат да съдържат само буквено-цифрови знаци, подчертавания и интервали.';

