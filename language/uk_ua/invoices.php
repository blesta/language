<?php
/**
 * Invoices
 *
 * @package blesta
 * @subpackage blesta.language.uk_ua
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Invoices.!error.line_items.minimum_split'] = 'Інвойс повинен мати щонайменше 2 рядки для розділення.';
$lang['Invoices.!error.line_items.empty_split'] = 'Не вибрано жодного рядка інвойсу для розділення.';
$lang['Invoices.!error.lines[][tax].format'] = 'Податок на окрему статтю має бути "true" або "false';
$lang['Invoices.!error.lines[][amount].format'] = 'Вартість одиниці продукції повинна бути числом.';
$lang['Invoices.!error.lines[][qty].minimum'] = 'Будь ласка, введіть кількість від 1 або більше.';
$lang['Invoices.!error.lines[][qty].format'] = 'Кількість повинна бути числом.';
$lang['Invoices.!error.lines[][description].empty'] = 'Будь ласка, введіть опис позиції.';
$lang['Invoices.!error.lines[][service_id].exists'] = 'Невірний ідентифікатор послуги.';
$lang['Invoices.!error.lines[][id].exists'] = 'Невірний ідентифікатор рядка.';
$lang['Invoices.!error.domain_renew.failed'] = 'Домени можна продовжувати лише на термін до 10 років.';
$lang['Invoices.!error.invoice_id.draft'] = 'Даний інвойс не є чорновим, а тому не може бути видалений.';
$lang['Invoices.!error.date_last_renewed.format'] = 'Остання дата поновлення повторюваного інвойсу повинна бути в дійсному форматі дати.';
$lang['Invoices.!error.date_renews.format'] = 'Дата поновлення періодичного інвойсу повинна бути в дійсному форматі дати.';
$lang['Invoices.!error.duration.format'] = 'Тривалість не дійсна.';
$lang['Invoices.!error.period.format'] = 'Період недійсний.';
$lang['Invoices.!error.term.bounds'] = 'Термін повинен бути в межах від 1 до 65535.';
$lang['Invoices.!error.term.format'] = 'Термін повинен бути числовим.';
$lang['Invoices.!error.delivery.exists'] = 'Вказаного способу доставки не існує.';
$lang['Invoices.!error.currency.length'] = 'Код валюти повинен складатися з 3 символів.';
$lang['Invoices.!error.status.format'] = 'Недійсний статус.';
$lang['Invoices.!error.autodebit.valid'] = 'Будь ласка, виберіть, чи дозволити автосписання для цього інвойсу.';
$lang['Invoices.!error.date_autodebit.format'] = 'Дата платежу вказана у невірному форматі дати.';
$lang['Invoices.!error.date_closed.format'] = 'Дата закриття має невірний формат дати.';
$lang['Invoices.!error.date_due.after_billed'] = 'Дата сплати повинна бути не пізніше дати виставлення рахунку.';
$lang['Invoices.!error.date_due.format'] = 'Дата платежу вказана у невірному форматі дати.';
$lang['Invoices.!error.date_billed.format'] = 'Дата виставлення рахунку вказана у невірному форматі.';
$lang['Invoices.!error.client_id.exists'] = 'Невірний ідентифікатор клієнта.';
$lang['Invoices.!error.id.amount_applied'] = 'Рядки інвойсу, валюта і статус можуть не оновлюватися, оскільки сума вже була застосована до цього інвойсу.';
$lang['Invoices.!error.id_value.valid'] = 'Не вдається визначити значення ідентифікатора інвойсу.';
$lang['Invoices.!error.id_format.length'] = 'Формат ідентифікатора для інвойсів не може перевищувати 64 символів.';
$lang['Invoices.!error.id_format.empty'] = 'Для інвойсів не встановлено формат ідентифікатора.';
$lang['Invoices.!error.invoice_add.failed'] = 'Не вдалося створити цей інвойс. Будь ласка, спробуйте ще раз.';
$lang['Invoices.!error.delivery.length'] = 'Довжина способу доставки інвойсу не може перевищувати 32 символів.';
$lang['Invoices.!error.delivery.empty'] = 'Будь ласка, вкажіть спосіб доставки рахунку.';
$lang['Invoices.!error.method.exists'] = 'Ви повинні встановити принаймні один спосіб доставки.';
$lang['Invoices.!error.invoice_recur_id.exists'] = 'Невірний ідентифікатор повторюваного інвойсу.';
$lang['Invoices.!error.invoice_id.exists'] = 'Невірний ідентифікатор інвойсу.';
$lang['Invoices.cache_methods.json_pdf'] = 'JSON + PDF';
$lang['Invoices.cache_methods.json'] = 'JSON';
$lang['Invoices.cache_methods.none'] = 'Ні.';
$lang['Invoices.types.proforma'] = 'Умовно';
$lang['Invoices.types.standard'] = 'Стандартний';
$lang['Invoices.status.void'] = 'Порожнеча';
$lang['Invoices.status.draft'] = 'Проект';
$lang['Invoices.status.proforma'] = 'Умовно';
$lang['Invoices.status.active'] = 'Активний';
$lang['Invoices.!line_item.recurring_renew_description'] = '%1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.coupon_line_item_description_percent'] = 'Купон %1$s - %2$s%%.';
$lang['Invoices.!line_item.coupon_line_item_description_amount'] = 'Купон %1$s';
$lang['Invoices.!line_item.prorated_credit'] = 'Пропорційний кредит';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_onetime'] = 'Пропорційне додавання %1$s %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_date'] = 'Пропорційне додавання %1$s %2$sx %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_qty'] = 'Пропорційне додавання %1$s %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_onetime'] = 'Пропорційне додавання %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_date'] = 'Пропорційне додавання %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_text'] = 'Пропорційне додавання %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_onetime'] = 'Пропорційне додавання %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_addition_date'] = 'Пропорційне додавання %1$s %2$s (%3$s - %4$s)';
$lang['Invoices.!line_item.service_option_prorated_addition'] = 'Пропорційне додавання %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_onetime'] = 'Пропорційне оновлення %1$s з %2$sx %3$s до %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_date'] = 'Пропорційне оновлення %1$s з %2$sx %3$s до %4$sx %5$s (%6$s - %7$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty'] = 'Пропорційне оновлення %1$s з %2$sx %3$s до %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_onetime'] = 'Пропорційне оновлення %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_date'] = 'Пропорційне оновлення %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text'] = 'Пропорційне оновлення %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_onetime'] = '↳ Пропорційне оновлення %1$ з %2$ до %3$';
$lang['Invoices.!line_item.service_option_prorated_upgrade_date'] = 'Пропорційне оновлення %1$ з %2$ до %3$ (%4$ - %5$)';
$lang['Invoices.!line_item.service_option_prorated_upgrade'] = '↳ Пропорційне оновлення %1$ з %2$ до %3$';
$lang['Invoices.!line_item.service_prorated_upgrade_description_onetime'] = 'Пропорційне оновлення з %1$s до %2$s - %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description'] = 'Пропорційне оновлення з %1$s до %2$s - %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_setup_fee_description'] = '↳ %1$s - %2$s Плата за встановлення';
$lang['Invoices.!line_item.service_option_renew_description'] = '↳ %1$s - %2$s';
$lang['Invoices.!line_item.service_setup_fee_description'] = '%1$s - %2$s Плата за встановлення';
$lang['Invoices.!line_item.service_cancel_fee_description'] = '%1$s - %2$s Комісія за скасування';
$lang['Invoices.!line_item.service_renew_description'] = '%5$s%1$s - %2$s (%3$s - %4$s)';
$lang['Invoices.!note_private.line_item'] = '- %1$s @ %2$s: %3$s';
$lang['Invoices.!note_private.removed_lines'] = 'Видалено рядки:';
$lang['Invoices.!note_private.service_cancel_date'] = 'Послуга #%1$s скасована %2$s.';
$lang['Invoices.getDeliveryMethods.postalmethods'] = 'PostalMethods';
$lang['Invoices.getDeliveryMethods.interfax'] = 'Інтерфакс';
$lang['Invoices.getDeliveryMethods.paper'] = 'Папір';
$lang['Invoices.getDeliveryMethods.email'] = 'Електронна пошта';
$lang['Invoices.getPricingPeriods.year'] = 'Рік';
$lang['Invoices.getPricingPeriods.month'] = 'Місяць';
$lang['Invoices.getPricingPeriods.week'] = 'Тиждень';
$lang['Invoices.getPricingPeriods.day'] = 'День';

