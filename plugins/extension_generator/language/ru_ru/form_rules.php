<?php
/**
 * Form Rules
 *
 * @package blesta
 * @subpackage blesta.language.ru_ru
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['FormRules.nonmerchantfields.fields[][type].valid'] = 'Одно или несколько полей имеют недопустимый тип.';
$lang['FormRules.nonmerchantfields.fields[][label].empty'] = 'Пожалуйста, введите метку для каждого поля.';
$lang['FormRules.nonmerchantfields.fields[][name].format'] = 'Пожалуйста, введите имя для каждого поля в формате snake_case_name.';
$lang['FormRules.nonmerchantbasic.currencies.format'] = 'Пожалуйста, введите валюту в формате трех символов, разделенных запятыми (например, USD,EUR,JPY).';
$lang['FormRules.nonmerchantbasic.authors[][name].empty'] = 'Пожалуйста, укажите имя каждого автора.';
$lang['FormRules.merchantfields.fields[][type].valid'] = 'Одно или несколько полей имеют недопустимый тип.';
$lang['FormRules.merchantfields.fields[][label].empty'] = 'Пожалуйста, введите метку для каждого поля.';
$lang['FormRules.merchantfields.fields[][name].format'] = 'Пожалуйста, введите имя для каждого поля в формате snake_case_name.';
$lang['FormRules.merchantbasic.currencies.format'] = 'Пожалуйста, введите валюту в формате трех символов, разделенных запятыми (например, USD,EUR,JPY).';
$lang['FormRules.merchantbasic.authors[][name].empty'] = 'Пожалуйста, укажите имя каждого автора.';
$lang['FormRules.pluginintegrations.cards[][label].empty'] = 'Пожалуйста, укажите этикетку для каждой карты.';
$lang['FormRules.pluginintegrations.cards[][callback].format'] = 'Укажите метод обратного вызова для каждой карты в формате camelCaseName.';
$lang['FormRules.pluginintegrations.cards[][level].valid'] = 'Одна или несколько карт имеют недопустимый уровень.';
$lang['FormRules.pluginintegrations.events[][callback].format'] = 'Укажите метод обратного вызова для каждого события в формате camelCaseName.';
$lang['FormRules.pluginintegrations.events[][event].empty'] = 'Пожалуйста, укажите название мероприятия для каждого из них.';
$lang['FormRules.pluginintegrations.actions[][name].empty'] = 'Укажите название для каждого действия.';
$lang['FormRules.pluginintegrations.actions[][action].format'] = 'Пожалуйста, введите действие для каждого действия всеми строчными буквами.';
$lang['FormRules.pluginintegrations.actions[][controller].format'] = 'Пожалуйста, введите контроллер для каждого действия в формате snake_case_name.';
$lang['FormRules.pluginintegrations.actions[][location].valid'] = 'Пожалуйста, введите действительное место действия.';
$lang['FormRules.plugindatabase.tables[][columns][][primary].valid'] = 'Для каждого столбца Primary должно быть установлено значение true или false.';
$lang['FormRules.plugindatabase.tables[][columns][][nullable].valid'] = 'Для каждого столбца Nullable должно быть установлено значение true или false.';
$lang['FormRules.plugindatabase.tables[][columns][][length].empty'] = 'Длина должна быть в формате \'a\', \'b\', \'c\' для столбцов перечисления, пустой для столбцов текста и времени даты, и числовой для всех остальных.';
$lang['FormRules.plugindatabase.tables[][columns][][type].valid'] = 'Один или несколько столбцов имеют недопустимый тип.';
$lang['FormRules.plugindatabase.tables[][columns][][name].format'] = 'Пожалуйста, введите имя метода для каждого столбца в формате snake_case_name.';
$lang['FormRules.plugindatabase.tables[][name].format'] = 'Пожалуйста, введите имя метода для каждой таблицы в формате snake_case_name.';
$lang['FormRules.pluginbasic.authors[][name].empty'] = 'Пожалуйста, укажите имя каждого автора.';
$lang['FormRules.modulefeatures.cron_tasks[][time].format'] = 'Введите время в формате 00:00 или числовой интервал.';
$lang['FormRules.modulefeatures.cron_tasks[][type].valid'] = 'Одно или несколько заданий cron имеют неверный тип.';
$lang['FormRules.modulefeatures.cron_tasks[][label].empty'] = 'Укажите метку для каждой задачи cron.';
$lang['FormRules.modulefeatures.cron_tasks[][name].format'] = 'Пожалуйста, введите имя метода для каждой задачи cron в формате snake_case_name.';
$lang['FormRules.modulefeatures.service_tabs[][level].valid'] = 'Одна или несколько служебных вкладок имеют недопустимый уровень.';
$lang['FormRules.modulefeatures.service_tabs[][label].empty'] = 'Укажите ярлык для каждой вкладки услуг.';
$lang['FormRules.modulefeatures.service_tabs[][method_name].format'] = 'Введите имя метода для каждой вкладки сервиса в формате camelCaseName.';
$lang['FormRules.modulefields.package_fields[][name_key].valid'] = 'Устанавливать ли поле пакета в качестве ключа имени, должно быть установлено значение true или false.';
$lang['FormRules.modulefields.package_fields[][type].valid'] = 'Одно или несколько полей пакета имеют недопустимый тип.';
$lang['FormRules.modulefields.package_fields[][label].empty'] = 'Пожалуйста, введите этикетку для каждого поля пакета.';
$lang['FormRules.modulefields.package_fields[][name].format'] = 'Пожалуйста, введите имя для каждого поля пакета в формате snake_case_name.';
$lang['FormRules.modulefields.service_fields[][name_key].valid'] = 'Устанавливать ли служебное поле в качестве ключа имени, должно быть установлено значение true или false.';
$lang['FormRules.modulefields.service_fields[][type].valid'] = 'Одно или несколько служебных полей имеют недопустимый тип.';
$lang['FormRules.modulefields.service_fields[][label].empty'] = 'Введите метку для каждого служебного поля.';
$lang['FormRules.modulefields.service_fields[][name].format'] = 'Пожалуйста, введите имя для каждого служебного поля в формате snake_case_name.';
$lang['FormRules.modulefields.module_rows[][name_key].valid'] = 'Устанавливать ли поле строки модуля в качестве ключа имени, должно быть установлено значение true или false.';
$lang['FormRules.modulefields.module_rows[][type].valid'] = 'Одна или несколько строк модуля имеют недопустимый тип.';
$lang['FormRules.modulefields.module_rows[][label].empty'] = 'Введите метку для каждого поля строки модуля.';
$lang['FormRules.modulefields.module_rows[][name].format'] = 'Пожалуйста, введите имя для каждого поля строки модуля в формате snake_case_name.';
$lang['FormRules.modulebasic.authors[][name].empty'] = 'Пожалуйста, укажите имя каждого автора.';
$lang['FormRules.modulebasic.module_group.empty'] = 'Введите метку группы модулей.';
$lang['FormRules.modulebasic.module_row_plural.empty'] = 'Пожалуйста, добавьте имя строки модуля во множественном числе.';
$lang['FormRules.modulebasic.module_row.empty'] = 'Введите имя строки модуля.';
$lang['FormRules.general.name.format'] = 'Имена расширений могут содержать только алфавитно-цифровые символы, символы подчеркивания и пробелы.';

