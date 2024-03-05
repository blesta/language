<?php
/**
 * Packages
 *
 * @package blesta
 * @subpackage blesta.language.ru_ru
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Packages.!error.manual_activation.valid'] = 'Ручная активация должна быть равна 1 или 0.';
$lang['Packages.getStatusTypes.restricted'] = 'Ограниченный';
$lang['Packages.getStatusTypes.inactive'] = 'Неактивный';
$lang['Packages.getStatusTypes.active'] = 'Активный';
$lang['Packages.getPricingPeriods.onetime_plural'] = 'Один раз';
$lang['Packages.getPricingPeriods.year_plural'] = 'Годы';
$lang['Packages.getPricingPeriods.month_plural'] = 'Месяцы';
$lang['Packages.getPricingPeriods.week_plural'] = 'Недели';
$lang['Packages.getPricingPeriods.day_plural'] = 'Дни';
$lang['Packages.getPricingPeriods.onetime'] = 'Один раз';
$lang['Packages.getPricingPeriods.year'] = 'Год';
$lang['Packages.getPricingPeriods.month'] = 'Месяц';
$lang['Packages.getPricingPeriods.week'] = 'Неделя';
$lang['Packages.getPricingPeriods.day'] = 'День';
$lang['Packages.!error.groups[].valid'] = 'Выбранная группа пакетов не принадлежит указанной компании.';
$lang['Packages.!error.groups[].exists'] = 'Неверный идентификатор группы пакетов.';
$lang['Packages.!error.pricing[][id].deletable'] = 'Термин не может быть удален, поскольку он используется одной или несколькими службами.';
$lang['Packages.!error.pricing[][id].format'] = 'Неверный идентификатор цены пакета.';
$lang['Packages.!error.pricing[][currency].in_use'] = 'Валюта не может быть обновлена в используемом ценообразовании.';
$lang['Packages.!error.pricing[][currency].format'] = 'Код валюты должен состоять из 3 символов.';
$lang['Packages.!error.pricing[][cancel_fee].format'] = 'Плата за отмену должна быть числом.';
$lang['Packages.!error.pricing[][setup_fee].format'] = 'Плата за установку должна быть числом.';
$lang['Packages.!error.pricing[][price_transfer].format'] = 'Трансферная цена должна быть числом.';
$lang['Packages.!error.pricing[][price_renews].valid'] = 'Цена продления не может быть установлена на один период времени.';
$lang['Packages.!error.pricing[][price_renews].format'] = 'Цена продления должна быть числом.';
$lang['Packages.!error.pricing[][price].format'] = 'Цена должна быть числом.';
$lang['Packages.!error.pricing[][period].in_use'] = 'Период не может быть обновлен в используемом ценообразовании.';
$lang['Packages.!error.pricing[][period].format'] = 'Неверный тип периода.';
$lang['Packages.!error.pricing[][term].in_use'] = 'Термин нельзя обновить в используемом ценообразовании.';
$lang['Packages.!error.pricing[][term].valid'] = 'Член должен быть больше 0.';
$lang['Packages.!error.pricing[][term].length'] = 'Длина термина не должна превышать 5 символов.';
$lang['Packages.!error.pricing[][term].format'] = 'Термин должен быть числом.';
$lang['Packages.!error.email_content.parse'] = 'Ошибка разбора шаблона: %1$s';
$lang['Packages.!error.email_content[][lang].length'] = 'Длина языка не должна превышать 5 символов.';
$lang['Packages.!error.email_content[][lang].empty'] = 'Пожалуйста, введите язык.';
$lang['Packages.!error.prorata_cutoff.format'] = 'Пропорциональный день отсечения должен быть между 1 и 28.';
$lang['Packages.!error.prorata_day.format'] = 'Пропорциональный день должен быть от 1 до 28.';
$lang['Packages.!error.hidden.format'] = 'Необходимо установить значение 1 или 0 для того, чтобы эта группа была скрыта в интерфейсе.';
$lang['Packages.!error.status.format'] = 'Неверный статус.';
$lang['Packages.!error.upgrades_use_renewal.valid'] = 'Цена обновления должна быть равна 1 или 0.';
$lang['Packages.!error.override_price.valid'] = 'Установка цены пакета в качестве цены переопределения должна быть либо 1, либо 0.';
$lang['Packages.!error.single_term.valid'] = 'Один член должен быть равен либо 1, либо 0.';
$lang['Packages.!error.taxable.length'] = 'Длина облагаемой суммы не может превышать 1 символа.';
$lang['Packages.!error.taxable.format'] = 'Taxable должно быть числом.';
$lang['Packages.!error.module_group_client.valid'] = 'Разрешить клиенту выбирать группу должно быть 1 или 0.';
$lang['Packages.!error.module_group.format'] = 'Указана недопустимая группа модулей.';
$lang['Packages.!error.module_row.format'] = 'Указана недопустимая строка модуля.';
$lang['Packages.!error.plugins[].valid'] = 'Указан недопустимый плагин.';
$lang['Packages.!error.option_groups[].valid'] = 'Указана недопустимая группа опций конфигурируемого пакета.';
$lang['Packages.!error.client_qty.format'] = 'Лимит клиента должен быть числом.';
$lang['Packages.!error.qty.format'] = 'Количество должно быть числом.';
$lang['Packages.!error.descriptions.empty_lang'] = 'Пожалуйста, укажите код языка пакета для каждого описания.';
$lang['Packages.!error.descriptions.format'] = 'Описания пакетов имеют неправильный формат.';
$lang['Packages.!error.names.empty_lang'] = 'Пожалуйста, укажите код языка пакета для каждого названия.';
$lang['Packages.!error.names.empty_name'] = 'Пожалуйста, укажите название пакета для каждого языка.';
$lang['Packages.!error.names.format'] = 'Имена пакетов имеют неправильный формат.';
$lang['Packages.!error.module_id.changed'] = 'Модуль не может быть изменен, поскольку один или несколько сервисов уже используют этот пакет.';
$lang['Packages.!error.module_id.exists'] = 'Указан недопустимый модуль.';
$lang['Packages.!error.package_id.has_children'] = 'Пакет не может быть удален, поскольку у службы есть дочерние службы.';
$lang['Packages.!error.package_id.exists'] = 'Пакет не может быть удален, поскольку в настоящее время его использует какая-либо служба.';
$lang['Packages.!error.company_id.exists'] = 'Указана недопустимая компания.';

