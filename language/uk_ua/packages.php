<?php
/**
 * Packages
 *
 * @package blesta
 * @subpackage blesta.language.uk_ua
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Packages.!error.manual_activation.valid'] = 'Ручна активація має бути або 1, або 0.';
$lang['Packages.getStatusTypes.restricted'] = 'Обмежений доступ';
$lang['Packages.getStatusTypes.inactive'] = 'Неактивний';
$lang['Packages.getStatusTypes.active'] = 'Активний';
$lang['Packages.getPricingPeriods.onetime_plural'] = 'Одного разу';
$lang['Packages.getPricingPeriods.year_plural'] = 'Роки';
$lang['Packages.getPricingPeriods.month_plural'] = 'Місяці';
$lang['Packages.getPricingPeriods.week_plural'] = 'Тижні';
$lang['Packages.getPricingPeriods.day_plural'] = 'Дні';
$lang['Packages.getPricingPeriods.onetime'] = 'Одного разу';
$lang['Packages.getPricingPeriods.year'] = 'Рік';
$lang['Packages.getPricingPeriods.month'] = 'Місяць';
$lang['Packages.getPricingPeriods.week'] = 'Тиждень';
$lang['Packages.getPricingPeriods.day'] = 'День';
$lang['Packages.!error.groups[].valid'] = 'Вибрана група пакетів не належить вказаній компанії.';
$lang['Packages.!error.groups[].exists'] = 'Неправильний ідентифікатор групи пакунків.';
$lang['Packages.!error.pricing[][id].deletable'] = 'Цей термін не може бути вилучений, оскільки він використовується одним або кількома сервісами.';
$lang['Packages.!error.pricing[][id].format'] = 'Невірний ідентифікатор ціни пакета.';
$lang['Packages.!error.pricing[][currency].in_use'] = 'Валюта не може бути оновлена в ціноутворенні, яке використовується.';
$lang['Packages.!error.pricing[][currency].format'] = 'Код валюти повинен складатися з 3 символів.';
$lang['Packages.!error.pricing[][cancel_fee].format'] = 'Плата за скасування повинна бути числом.';
$lang['Packages.!error.pricing[][setup_fee].format'] = 'Плата за встановлення повинна бути числом.';
$lang['Packages.!error.pricing[][price_transfer].format'] = 'Трансфертна ціна повинна бути числом.';
$lang['Packages.!error.pricing[][price_renews].valid'] = 'Ціна поновлення не може бути встановлена на одноразовий період.';
$lang['Packages.!error.pricing[][price_renews].format'] = 'Ціна поновлення повинна бути числом.';
$lang['Packages.!error.pricing[][price].format'] = 'Ціна має бути числом.';
$lang['Packages.!error.pricing[][period].in_use'] = 'Період не може бути оновлений в ціноутворенні, яке використовується.';
$lang['Packages.!error.pricing[][period].format'] = 'Неправильний тип періоду.';
$lang['Packages.!error.pricing[][term].in_use'] = 'Термін не може бути оновлений в цінах, які використовуються.';
$lang['Packages.!error.pricing[][term].valid'] = 'Термін повинен бути більшим за 0.';
$lang['Packages.!error.pricing[][term].length'] = 'Довжина терміну не може перевищувати 5 символів.';
$lang['Packages.!error.pricing[][term].format'] = 'Термін повинен бути числом.';
$lang['Packages.!error.email_content.parse'] = 'Помилка розбору шаблону: %1$s';
$lang['Packages.!error.email_content[][lang].length'] = 'Довжина тексту не може перевищувати 5 символів.';
$lang['Packages.!error.email_content[][lang].empty'] = 'Будь ласка, введіть мову.';
$lang['Packages.!error.prorata_cutoff.format'] = 'День пропорційного скорочення повинен бути між 1 та 28.';
$lang['Packages.!error.prorata_day.format'] = 'Пропорційний день повинен бути між 1 і 28.';
$lang['Packages.!error.hidden.format'] = 'Чи слід приховувати цю групу в інтерфейсі, має бути встановлено в 1 або 0.';
$lang['Packages.!error.status.format'] = 'Недійсний статус.';
$lang['Packages.!error.upgrades_use_renewal.valid'] = 'Ціна продовження використання для оновлень повинна бути або 1, або 0.';
$lang['Packages.!error.override_price.valid'] = 'Встановіть ціну пакета як ціну перевизначення, яка має бути або 1, або 0.';
$lang['Packages.!error.single_term.valid'] = 'Одиничний член повинен бути або 1, або 0.';
$lang['Packages.!error.taxable.length'] = 'Оподатковувана довжина не може перевищувати 1 символ.';
$lang['Packages.!error.taxable.format'] = 'Оподатковуваним має бути число.';
$lang['Packages.!error.module_group_client.valid'] = 'Дозволити клієнту обирати групу має бути 1 або 0.';
$lang['Packages.!error.module_group.format'] = 'Вказано невірну групу модуля.';
$lang['Packages.!error.module_row.format'] = 'Вказано невірний рядок модуля.';
$lang['Packages.!error.plugins[].valid'] = 'Надано недійсний плагін.';
$lang['Packages.!error.option_groups[].valid'] = 'Вказано невірну групу параметрів пакунка, що налаштовується.';
$lang['Packages.!error.client_qty.format'] = 'Клієнтський ліміт повинен бути числовим.';
$lang['Packages.!error.qty.format'] = 'Кількість має бути числом.';
$lang['Packages.!error.descriptions.empty_lang'] = 'Будь ласка, вкажіть код мови пакунка для кожного опису.';
$lang['Packages.!error.descriptions.format'] = 'Описи пакунків мають неправильний формат.';
$lang['Packages.!error.names.empty_lang'] = 'Будь ласка, вкажіть код мови пакунка для кожної назви.';
$lang['Packages.!error.names.empty_name'] = 'Будь ласка, вкажіть назву пакета для кожної мови.';
$lang['Packages.!error.names.format'] = 'Назви пакунків мають неправильний формат.';
$lang['Packages.!error.module_id.changed'] = 'Модуль не може бути змінений, оскільки існує один або декілька сервісів, які вже використовують цей пакет.';
$lang['Packages.!error.module_id.exists'] = 'Вказано невірний модуль.';
$lang['Packages.!error.package_id.has_children'] = 'Пакет не міг бути видалений, тому що в службі є служби для дітей.';
$lang['Packages.!error.package_id.exists'] = 'Пакунок не може бути видалений, оскільки його використовує якась служба.';
$lang['Packages.!error.company_id.exists'] = 'Надано недійсну компанію.';

