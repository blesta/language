<?php
/**
 * Services
 *
 * @package blesta
 * @subpackage blesta.language.uk_ua
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Services.getActions.update_coupon'] = 'Купон на оновлення';
$lang['Services.getActions.change_renew'] = 'Змінити дату поновлення';
$lang['Services.getActions.schedule_cancel'] = 'Скасування розкладу';
$lang['Services.getActions.cancel'] = 'Скасувати';
$lang['Services.getActions.unsuspend'] = 'Розблокувати';
$lang['Services.getActions.suspend'] = 'Призупинити';
$lang['Services.getStatusTypes.in_review'] = 'В огляді';
$lang['Services.getStatusTypes.suspended'] = 'Призупинено';
$lang['Services.getStatusTypes.pending'] = 'На розгляді';
$lang['Services.getStatusTypes.canceled'] = 'Скасовано';
$lang['Services.getStatusTypes.active'] = 'Активний';
$lang['Services.!error.prorate.format'] = 'Параметр "Пропорціювати" повинен мати значення "true" або "false".';
$lang['Services.!error.service_id.has_children'] = 'Цю послугу не можна видалити, оскільки вона містить послуги для дітей. Будь ласка, скасуйте або видаліть ці послуги і спробуйте ще раз.';
$lang['Services.!error.status.valid'] = 'Видаляти можна лише ті послуги, які перебувають на розгляді, скасовані або на стадії розгляду.';
$lang['Services.!error.configoptions.valid'] = 'Один з обраних параметрів налаштування не є дійсним для цієї послуги.';
$lang['Services.!error.date_canceled.valid'] = 'Щоб скасувати цю послугу, ви повинні вказати дійсну дату.';
$lang['Services.!error.pricing_id.valid'] = 'Ви повинні вибрати дійсний термін.';
$lang['Services.!error.invoice_method.valid'] = 'Ви повинні вибрати дійсний метод виставлення рахунку.';
$lang['Services.!error.fields[][encrypted].format'] = 'Службове поле для шифрування має неправильний формат.';
$lang['Services.!error.fields[][value].empty'] = 'Значення в службових полях порожнє.';
$lang['Services.!error.fields[][key].empty'] = 'Ключ не містить службових полів.';
$lang['Services.!error.use_module.format'] = 'Неправильно використано формат модуля.';
$lang['Services.!error.date_canceled.format'] = 'Неправильний формат скасованої дати.';
$lang['Services.!error.date_suspended.format'] = 'Неправильний формат призупиненої дати.';
$lang['Services.!error.date_last_renewed.format'] = 'Неправильний формат останньої оновленої дати.';
$lang['Services.!error.date_renews.valid'] = 'Дата поновлення повинна бути більшою, ніж остання дата поновлення %1$s.';
$lang['Services.!error.date_renews.format'] = 'Неправильний формат дати оновлення.';
$lang['Services.!error.date_added.format'] = 'Неправильний формат доданої дати.';
$lang['Services.!error.status.format'] = 'Недійсний статус.';
$lang['Services.!error.override_currency.format'] = 'Будь ласка, оберіть дійсну валюту.';
$lang['Services.!error.override_price.override'] = 'Необхідно встановити ціну і валюту, щоб перевизначити поточну ціну.';
$lang['Services.!error.override_price.format'] = 'Перевищення ціни повинно бути числом.';
$lang['Services.!error.module_group.valid'] = 'Група модулів не існує.';
$lang['Services.!error.module_row.valid'] = 'Рядок модулів не існує.';
$lang['Services.!error.qty.available'] = 'Обмеження по кількості досягнуто. Якщо можливо, будь ласка, оберіть меншу кількість.';
$lang['Services.!error.qty.length'] = 'Довжина кількості не може перевищувати 10 символів.';
$lang['Services.!error.qty.format'] = 'Кількість має бути числом.';
$lang['Services.!error.coupon_id.valid'] = 'Цей купон, схоже, недійсний.';
$lang['Services.!error.module_row_id.exists'] = 'Невірний ідентифікатор рядка модуля.';
$lang['Services.!error.client_id.allowed'] = 'Клієнт не може отримати доступ до цього пакета.';
$lang['Services.!error.client_id.exists'] = 'Клієнта не існує.';
$lang['Services.!error.pricing_id.overrides'] = 'Термін дії пакета не може бути змінений, якщо встановлено перевищення цін.';
$lang['Services.!error.pricing_id.exists'] = 'Будь ласка, виберіть правильний термін.';
$lang['Services.!error.id_value.valid'] = 'Не вдається визначити значення ідентифікатора інвойсу.';
$lang['Services.!error.id_format.length'] = 'Формат ідентифікатора для інвойсів не може перевищувати 64 символів.';
$lang['Services.!error.id_format.empty'] = 'Для інвойсів не встановлено формат ідентифікатора.';
$lang['Services.!error.package_group_id.exists'] = 'Неправильний ідентифікатор групи пакунків.';
$lang['Services.!error.parent_service_id.parent'] = 'Ідентифікатор батьківської служби вже існує як дитина в іншій службі.';
$lang['Services.!error.parent_service_id.exists'] = 'Невірний ідентифікатор батьківської служби.';
$lang['Services.!error.service_id.exists'] = 'Невірний ідентифікатор послуги.';
$lang['Services.!error.move.unpaid_invoices'] = 'Послуга не може бути перенесена до іншого клієнта, оскільки має неоплачені рахунки.';
$lang['Services.!error.encrypted.format'] = 'Неправильний формат для зашифрованого.';
$lang['Services.!error.value.empty'] = 'Значення поля service не повинно бути порожнім.';
$lang['Services.!error.key.length'] = 'Ключ службового поля не повинен перевищувати 32 символи.';
$lang['Services.!error.key.empty'] = 'Ключ службового поля не повинен бути порожнім.';

