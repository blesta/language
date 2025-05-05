<?php
/**
 * Packages
 *
 * @package blesta
 * @subpackage blesta.language.bg_bg
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Packages.!error.manual_activation.valid'] = 'Ръчното активиране трябва да бъде 1 или 0.';
$lang['Packages.getStatusTypes.restricted'] = 'Ограничен';
$lang['Packages.getStatusTypes.inactive'] = 'Неактивен';
$lang['Packages.getStatusTypes.active'] = 'Активен';
$lang['Packages.getPricingPeriods.onetime_plural'] = 'Еднократно';
$lang['Packages.getPricingPeriods.year_plural'] = 'Години';
$lang['Packages.getPricingPeriods.month_plural'] = 'Месеци';
$lang['Packages.getPricingPeriods.week_plural'] = 'Седмици';
$lang['Packages.getPricingPeriods.day_plural'] = 'Дни';
$lang['Packages.getPricingPeriods.onetime'] = 'Еднократно';
$lang['Packages.getPricingPeriods.year'] = 'Година';
$lang['Packages.getPricingPeriods.month'] = 'Месец';
$lang['Packages.getPricingPeriods.week'] = 'Седмица';
$lang['Packages.getPricingPeriods.day'] = 'Ден';
$lang['Packages.!error.groups[].valid'] = 'Избраната група пакети не принадлежи на посочената компания.';
$lang['Packages.!error.groups[].exists'] = 'Невалиден идентификатор на група пакети.';
$lang['Packages.!error.pricing[][id].deletable'] = 'Терминът не може да бъде премахнат, тъй като се използва от една или повече служби.';
$lang['Packages.!error.pricing[][id].format'] = 'Невалиден идентификатор за ценообразуване на пакета.';
$lang['Packages.!error.pricing[][currency].in_use'] = 'Валутата не може да бъде актуализирана в ценообразуване, което е в употреба.';
$lang['Packages.!error.pricing[][currency].format'] = 'Кодът на валутата трябва да съдържа 3 символа.';
$lang['Packages.!error.pricing[][cancel_fee].format'] = 'Таксата за анулиране трябва да е число.';
$lang['Packages.!error.pricing[][setup_fee].format'] = 'Таксата за настройка трябва да бъде число.';
$lang['Packages.!error.pricing[][price_transfer].format'] = 'Трансферната цена трябва да е число.';
$lang['Packages.!error.pricing[][price_renews].valid'] = 'Цената за подновяване не може да бъде зададена за един период от време.';
$lang['Packages.!error.pricing[][price_renews].format'] = 'Цената за подновяване трябва да е число.';
$lang['Packages.!error.pricing[][price].format'] = 'Цената трябва да е число.';
$lang['Packages.!error.pricing[][period].in_use'] = 'Периодът не може да бъде актуализиран в ценообразуване, което е в употреба.';
$lang['Packages.!error.pricing[][period].format'] = 'Невалиден тип период.';
$lang['Packages.!error.pricing[][term].in_use'] = 'Терминът не може да бъде актуализиран в ценообразуване, което е в употреба.';
$lang['Packages.!error.pricing[][term].valid'] = 'Терминът трябва да е по-голям от 0.';
$lang['Packages.!error.pricing[][term].length'] = 'Дължината на термина не може да надвишава 5 символа.';
$lang['Packages.!error.pricing[][term].format'] = 'Терминът трябва да е число.';
$lang['Packages.!error.email_content.parse'] = 'Грешка при анализиране на шаблона: %1$s';
$lang['Packages.!error.email_content[][lang].length'] = 'Дължината на езика не може да надвишава 5 символа.';
$lang['Packages.!error.email_content[][lang].empty'] = 'Моля, въведете език.';
$lang['Packages.!error.prorata_cutoff.format'] = 'Пропорционалният краен ден трябва да е между 1 и 28.';
$lang['Packages.!error.prorata_day.format'] = 'Пропорционалният ден трябва да е между 1 и 28.';
$lang['Packages.!error.hidden.format'] = 'Дали тази група трябва да бъде скрита в интерфейса, трябва да бъде зададено на 1 или 0.';
$lang['Packages.!error.status.format'] = 'Невалиден статус.';
$lang['Packages.!error.upgrades_use_renewal.valid'] = 'Цените за подновяване на употребата на ъпгрейди трябва да са 1 или 0.';
$lang['Packages.!error.override_price.valid'] = 'Задаване на пакетна цена като цена на превишаване трябва да бъде 1 или 0.';
$lang['Packages.!error.single_term.valid'] = 'Единичният член трябва да бъде 1 или 0.';
$lang['Packages.!error.taxable.length'] = 'Дължината на облагаемия код не може да надвишава 1 символ.';
$lang['Packages.!error.taxable.format'] = 'Данъчната основа трябва да е число.';
$lang['Packages.!error.module_group_client.valid'] = 'Allow Client to Select Group трябва да бъде 1 или 0.';
$lang['Packages.!error.module_group.format'] = 'Дадена е невалидна група модули.';
$lang['Packages.!error.module_row.format'] = 'Подаден е невалиден ред на модула.';
$lang['Packages.!error.plugins[].valid'] = 'Даден е невалиден плъгин.';
$lang['Packages.!error.option_groups[].valid'] = 'Дадена е невалидна група от опции на конфигурируемия пакет.';
$lang['Packages.!error.client_qty.format'] = 'Лимитът на клиента трябва да е число.';
$lang['Packages.!error.qty.format'] = 'Количеството трябва да е число.';
$lang['Packages.!error.descriptions.empty_lang'] = 'Моля, посочете езиков код на пакета за всяко описание.';
$lang['Packages.!error.descriptions.format'] = 'Описанията на пакетите са в невалиден формат.';
$lang['Packages.!error.names.empty_lang'] = 'Моля, посочете езиков код на пакета за всяко име.';
$lang['Packages.!error.names.empty_name'] = 'Моля, посочете име на пакета за всеки език.';
$lang['Packages.!error.names.format'] = 'Имената на пакетите са в невалиден формат.';
$lang['Packages.!error.module_id.changed'] = 'Модулът не може да бъде променен, тъй като има една или повече услуги, които вече използват този пакет.';
$lang['Packages.!error.module_id.exists'] = 'Даден е невалиден модул.';
$lang['Packages.!error.package_id.has_children'] = 'Пакетът не може да бъде изтрит, тъй като услугата има дъщерни услуги.';
$lang['Packages.!error.package_id.exists'] = 'Пакетът не може да бъде изтрит, тъй като в момента се използва от друга услуга.';
$lang['Packages.!error.company_id.exists'] = 'Дадена е невалидна фирма.';

