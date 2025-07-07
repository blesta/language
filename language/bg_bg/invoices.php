<?php
/**
 * Invoices
 *
 * @package blesta
 * @subpackage blesta.language.bg_bg
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Invoices.!error.invoice_id.unique'] = 'Фактурата получател не може да бъде част от фактурите, които ще бъдат обединени.';
$lang['Invoices.!error.invoice_id.status'] = 'Фактурата на местоназначението трябва да е отворена и без никакви транзакции.';
$lang['Invoices.!error.invoice_ids.client'] = 'Всички фактури трябва да принадлежат на един и същ клиент.';
$lang['Invoices.!error.invoice_ids.status'] = 'Всички фактури трябва да са отворени и без транзакции.';
$lang['Invoices.!error.invoice_ids.currency'] = 'Всички фактури трябва да имат една и съща валута.';
$lang['Invoices.!error.invoice_ids.count'] = 'Трябва да се изберат поне две фактури.';
$lang['Invoices.!line_item.parent_description'] = 'Child Service of %1$s - %2$s:';
$lang['Invoices.!error.line_items.minimum_split'] = 'Фактурата трябва да има поне 2 реда, за да бъде разделена.';
$lang['Invoices.!error.line_items.empty_split'] = 'Не са избрани редове от фактури за разделяне.';
$lang['Invoices.!error.period.format'] = 'Периодът е невалиден.';
$lang['Invoices.!error.lines[][tax].format'] = 'Данъкът на реда трябва да бъде "true" или "false".';
$lang['Invoices.!error.lines[][amount].format'] = 'Разходите за единица продукция трябва да бъдат число.';
$lang['Invoices.!error.lines[][qty].minimum'] = 'Моля, въведете количество от 1 или повече.';
$lang['Invoices.!error.lines[][qty].format'] = 'Количеството трябва да е число.';
$lang['Invoices.!error.lines[][description].empty'] = 'Моля, въведете описание на позицията.';
$lang['Invoices.!error.lines[][service_id].exists'] = 'Невалиден идентификатор на услугата.';
$lang['Invoices.!error.lines[][id].exists'] = 'Невалиден идентификатор на елемента.';
$lang['Invoices.!error.domain_renew.failed'] = 'Домейните могат да бъдат подновявани само за не повече от 10 години.';
$lang['Invoices.!error.invoice_id.draft'] = 'Дадената фактура не е чернова на фактура и следователно не може да бъде изтрита.';
$lang['Invoices.!error.date_last_renewed.format'] = 'Датата на подновяване на последната периодична фактура трябва да бъде валиден формат на дата.';
$lang['Invoices.!error.date_renews.format'] = 'Датата на подновяване на периодичната фактура трябва да е валиден формат на дата.';
$lang['Invoices.!error.duration.format'] = 'Продължителността е невалидна.';
$lang['Invoices.!error.term.bounds'] = 'Терминът трябва да е между 1 и 65535.';
$lang['Invoices.!error.term.format'] = 'Терминът трябва да е число.';
$lang['Invoices.!error.delivery.exists'] = 'Посоченият начин на доставка не съществува.';
$lang['Invoices.!error.currency.length'] = 'Кодът на валутата трябва да е с дължина 3 символа.';
$lang['Invoices.!error.status.format'] = 'Невалиден статус.';
$lang['Invoices.!error.autodebit.valid'] = 'Моля, изберете дали да разрешите автоматичен дебит за тази фактура.';
$lang['Invoices.!error.date_autodebit.format'] = 'Датата на падежа е в невалиден формат.';
$lang['Invoices.!error.date_closed.format'] = 'Затворената дата е в невалиден формат.';
$lang['Invoices.!error.date_due.after_billed'] = 'Датата на плащане трябва да е на или след датата на фактуриране.';
$lang['Invoices.!error.date_due.format'] = 'Датата на падежа е в невалиден формат.';
$lang['Invoices.!error.date_billed.format'] = 'Фактурираната дата е в невалиден формат.';
$lang['Invoices.!error.client_id.exists'] = 'Невалиден идентификатор на клиент.';
$lang['Invoices.!error.id.amount_applied'] = 'Редовете, валутата и статусът на фактурата може да не бъдат актуализирани, тъй като към тази фактура вече е била приложена сума.';
$lang['Invoices.!error.id_value.valid'] = 'Не може да се определи стойността на идентификатора на фактурата.';
$lang['Invoices.!error.id_format.length'] = 'Идентификационният формат на фактурите не може да надвишава 64 символа.';
$lang['Invoices.!error.id_format.empty'] = 'Не е зададен формат на идентификатора за фактурите.';
$lang['Invoices.!error.invoice_add.failed'] = 'Тази фактура не може да бъде създадена. Моля, опитайте отново.';
$lang['Invoices.!error.delivery.length'] = 'Дължината на метода за доставка на фактурата не може да надвишава 32 символа.';
$lang['Invoices.!error.delivery.empty'] = 'Моля, въведете метод за доставка на фактурата.';
$lang['Invoices.!error.method.exists'] = 'Трябва да зададете поне един метод на доставка.';
$lang['Invoices.!error.invoice_recur_id.exists'] = 'Невалиден идентификатор на периодична фактура.';
$lang['Invoices.!error.invoice_id.exists'] = 'Невалиден идентификатор на фактурата.';
$lang['Invoices.cache_methods.json_pdf'] = 'JSON + PDF';
$lang['Invoices.cache_methods.json'] = 'JSON';
$lang['Invoices.cache_methods.none'] = 'Няма';
$lang['Invoices.types.proforma'] = 'Проформа';
$lang['Invoices.types.standard'] = 'Стандартен';
$lang['Invoices.status.void'] = 'Void';
$lang['Invoices.status.draft'] = 'Проект';
$lang['Invoices.status.proforma'] = 'Проформа';
$lang['Invoices.status.active'] = 'Активен';
$lang['Invoices.!line_item.recurring_renew_description'] = '%1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.coupon_line_item_description_percent'] = 'Купон %1$s - %2$s%%';
$lang['Invoices.!line_item.coupon_line_item_description_amount'] = 'Купон %1$s';
$lang['Invoices.!line_item.prorated_credit'] = 'Пропорционален кредит';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_onetime'] = '↳ Пропорционално добавяне на %1$s %2$s x %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_date'] = '↳ Пропорционално добавяне на %1$s %2$s x %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_qty'] = '↳ Пропорционално добавяне на %1$s %2$s x %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_onetime'] = '↳ Пропорционално добавяне на %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_date'] = '↳ Пропорционално добавяне на %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_text'] = '↳ Пропорционално добавяне на %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_onetime'] = '↳ Пропорционално добавяне на %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_addition_date'] = '↳ Пропорционално добавяне на %1$s %2$s (%3$s - %4$s)';
$lang['Invoices.!line_item.service_option_prorated_addition'] = '↳ Пропорционално добавяне на %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_onetime'] = '↳ Пропорционално надграждане на %1$s от %2$sx %3$s до %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_date'] = '↳ Пропорционално надграждане на %1$s от %2$sx %3$s до %4$sx %5$s (%6$s - %7$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty'] = '↳ Пропорционално надграждане на %1$s от %2$sx %3$s до %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_onetime'] = '↳ Пропорционална актуализация на %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_date'] = '↳ Пропорционално обновяване на %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text'] = '↳ Пропорционална актуализация на %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_onetime'] = '↳ Пропорционално обновяване на %1$s от %2$s до %3$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_date'] = '↳ Пропорционално обновяване на %1$s от %2$s на %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade'] = '↳ Пропорционално обновяване на %1$s от %2$s до %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description_onetime'] = 'Пропорционално надграждане от %1$s до %2$s - %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description'] = 'Пропорционално надграждане от %1$s до %2$s - %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_setup_fee_description'] = '↳ %1$s - %2$s Такса за инсталиране';
$lang['Invoices.!line_item.service_option_renew_description'] = '↳ %1$s - %2$s';
$lang['Invoices.!line_item.service_setup_fee_description'] = '%1$s - Такса за настройка на %2$s ';
$lang['Invoices.!line_item.service_cancel_fee_description'] = '%1$s - %2$s Такса за анулиране';
$lang['Invoices.!line_item.service_renew_description'] = '%5$s%1$s - ( - ) %2$s%3$s %4$s';
$lang['Invoices.!note_private.line_item'] = '- %1$s @ %2$s: %3$s';
$lang['Invoices.!note_private.removed_lines'] = 'Премахнати редове:';
$lang['Invoices.!note_private.service_cancel_date'] = 'Услуга #%1$s е отменена %2$s.';
$lang['Invoices.getDeliveryMethods.postalmethods'] = 'PostalMethods';
$lang['Invoices.getDeliveryMethods.interfax'] = 'InterFax';
$lang['Invoices.getDeliveryMethods.paper'] = 'Хартия';
$lang['Invoices.getDeliveryMethods.email'] = 'Имейл';
$lang['Invoices.getPricingPeriods.year'] = 'Година';
$lang['Invoices.getPricingPeriods.month'] = 'Месец';
$lang['Invoices.getPricingPeriods.week'] = 'Седмица';
$lang['Invoices.getPricingPeriods.day'] = 'Ден';
$lang['Invoices.!error.service.renew_onetime'] = 'Еднократните услуги не могат да бъдат подновени.';

