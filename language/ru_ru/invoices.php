<?php
/**
 * Invoices
 *
 * @package blesta
 * @subpackage blesta.language.ru_ru
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Invoices.!error.line_items.minimum_split'] = 'Для разделения счет-фактура должен содержать не менее 2 строк.';
$lang['Invoices.!error.line_items.empty_split'] = 'Для разделения не выбрано ни одной строки счета-фактуры.';
$lang['Invoices.!error.lines[][tax].format'] = 'Налог на строку должен быть "истинным" или "ложным".';
$lang['Invoices.!error.lines[][amount].format'] = 'Стоимость единицы продукции должна быть числом.';
$lang['Invoices.!error.lines[][qty].minimum'] = 'Пожалуйста, введите количество 1 или более.';
$lang['Invoices.!error.lines[][qty].format'] = 'Количество должно быть числом.';
$lang['Invoices.!error.lines[][description].empty'] = 'Пожалуйста, введите описание статьи.';
$lang['Invoices.!error.lines[][service_id].exists'] = 'Неверный идентификатор службы.';
$lang['Invoices.!error.lines[][id].exists'] = 'Неверный идентификатор линейного элемента.';
$lang['Invoices.!error.domain_renew.failed'] = 'Домены можно продлевать не более чем на 10 лет.';
$lang['Invoices.!error.invoice_id.draft'] = 'Данный счет-фактура не является проектом счета-фактуры и поэтому не может быть удален.';
$lang['Invoices.!error.date_last_renewed.format'] = 'Дата последнего обновления повторяющегося счета должна быть в формате действительной даты.';
$lang['Invoices.!error.date_renews.format'] = 'Дата обновления повторяющегося счета должна быть в формате действительной даты.';
$lang['Invoices.!error.duration.format'] = 'Продолжительность недействительна.';
$lang['Invoices.!error.period.format'] = 'Период недействителен.';
$lang['Invoices.!error.term.bounds'] = 'Срок должен находиться в диапазоне от 1 до 65535.';
$lang['Invoices.!error.term.format'] = 'Термин должен быть числом.';
$lang['Invoices.!error.delivery.exists'] = 'Указанный способ доставки не существует.';
$lang['Invoices.!error.currency.length'] = 'Код валюты должен состоять из 3 символов.';
$lang['Invoices.!error.status.format'] = 'Неверный статус.';
$lang['Invoices.!error.autodebit.valid'] = 'Пожалуйста, выберите, разрешить или нет автодебетование для этого счета.';
$lang['Invoices.!error.date_autodebit.format'] = 'Дата выполнения указана в неправильном формате.';
$lang['Invoices.!error.date_closed.format'] = 'Дата закрытия указана в неправильном формате.';
$lang['Invoices.!error.date_due.after_billed'] = 'Дата оплаты должна приходиться на дату или после даты выставления счета.';
$lang['Invoices.!error.date_due.format'] = 'Дата выполнения указана в неправильном формате.';
$lang['Invoices.!error.date_billed.format'] = 'Дата выставления счета имеет неверный формат.';
$lang['Invoices.!error.client_id.exists'] = 'Неверный идентификатор клиента.';
$lang['Invoices.!error.id.amount_applied'] = 'Строки, валюта и статус счета-фактуры могут не обновляться, поскольку сумма уже была применена к этому счету-фактуре.';
$lang['Invoices.!error.id_value.valid'] = 'Невозможно определить значение идентификатора счета-фактуры.';
$lang['Invoices.!error.id_format.length'] = 'Формат идентификатора для счетов-фактур не должен превышать 64 символов.';
$lang['Invoices.!error.id_format.empty'] = 'Для счетов-фактур не установлен формат идентификатора.';
$lang['Invoices.!error.invoice_add.failed'] = 'Этот счет-фактуру не удалось создать. Пожалуйста, попробуйте еще раз.';
$lang['Invoices.!error.delivery.length'] = 'Длина метода доставки счета не должна превышать 32 символов.';
$lang['Invoices.!error.delivery.empty'] = 'Укажите способ доставки счета-фактуры.';
$lang['Invoices.!error.method.exists'] = 'Вы должны установить хотя бы один способ доставки.';
$lang['Invoices.!error.invoice_recur_id.exists'] = 'Неверный идентификатор повторяющегося счета.';
$lang['Invoices.!error.invoice_id.exists'] = 'Неверный идентификатор счета-фактуры.';
$lang['Invoices.cache_methods.json_pdf'] = 'JSON + PDF';
$lang['Invoices.cache_methods.json'] = 'JSON';
$lang['Invoices.cache_methods.none'] = 'Нет';
$lang['Invoices.types.proforma'] = 'Проформа';
$lang['Invoices.types.standard'] = 'Стандарт';
$lang['Invoices.status.void'] = 'Пустота';
$lang['Invoices.status.draft'] = 'Проект';
$lang['Invoices.status.proforma'] = 'Проформа';
$lang['Invoices.status.active'] = 'Активный';
$lang['Invoices.!line_item.recurring_renew_description'] = '%1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.coupon_line_item_description_percent'] = 'Купон %1$s - %2$s%%';
$lang['Invoices.!line_item.coupon_line_item_description_amount'] = 'Купон %1$s';
$lang['Invoices.!line_item.prorated_credit'] = 'Пропорциональный кредит';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_onetime'] = '↳ Пропорциональное добавление %1$s %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_date'] = '↳ Пропорциональное добавление %1$s %2$sx %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_qty'] = '↳ Пропорциональное добавление %1$s %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_onetime'] = '↳ Пропорциональное добавление %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_date'] = '↳ Пропорциональное добавление %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_text'] = '↳ Пропорциональное добавление %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_onetime'] = '↳ Пропорциональное добавление %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_addition_date'] = '↳ Пропорциональное добавление %1$s %2$s (%3$s - %4$s)';
$lang['Invoices.!line_item.service_option_prorated_addition'] = '↳ Пропорциональное добавление %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_onetime'] = '↳ Пропорциональное повышение %1$s с %2$sx %3$s до %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_date'] = '↳ Пропорциональное повышение %1$s с %2$sx %3$s до %4$sx %5$s (%6$s - %7$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty'] = '↳ Пропорциональное повышение %1$s с %2$sx %3$s до %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_onetime'] = '↳ Обновление с доплатой до %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_date'] = '↳ Обновление с пропорцией %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text'] = '↳ Обновление с доплатой до %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_onetime'] = '↳ Пропорциональное повышение %1$s с %2$s до %3$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_date'] = '↳ Пропорциональное повышение %1$s с %2$s до %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade'] = '↳ Пропорциональное повышение %1$s с %2$s до %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description_onetime'] = 'Пропорциональное обновление с %1$s до %2$s - %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description'] = 'Пропорциональное обновление с %1$s до %2$s - %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_setup_fee_description'] = '↳ %1$s - %2$s Плата за установку';
$lang['Invoices.!line_item.service_option_renew_description'] = '↳ %1$s - %2$s';
$lang['Invoices.!line_item.service_setup_fee_description'] = '%1$s - %2$s Плата за установку';
$lang['Invoices.!line_item.service_cancel_fee_description'] = '%1$s - %2$s Плата за отмену';
$lang['Invoices.!line_item.service_renew_description'] = '%5$s%1$s - %2$s (%3$s - %4$s)';
$lang['Invoices.!note_private.line_item'] = '- %1$s @ %2$s: %3$s';
$lang['Invoices.!note_private.removed_lines'] = 'Удаленные позиции:';
$lang['Invoices.!note_private.service_cancel_date'] = 'Услуга #%1$s отменена %2$s.';
$lang['Invoices.getDeliveryMethods.postalmethods'] = 'PostalMethods';
$lang['Invoices.getDeliveryMethods.interfax'] = 'InterFax';
$lang['Invoices.getDeliveryMethods.paper'] = 'Бумага';
$lang['Invoices.getDeliveryMethods.email'] = 'Электронная почта';
$lang['Invoices.getPricingPeriods.year'] = 'Год';
$lang['Invoices.getPricingPeriods.month'] = 'Месяц';
$lang['Invoices.getPricingPeriods.week'] = 'Неделя';
$lang['Invoices.getPricingPeriods.day'] = 'День';
$lang['Invoices.!error.invoice_id.unique'] = 'Конечный счет-фактура не может быть частью счетов-фактур, подлежащих объединению.';
$lang['Invoices.!error.invoice_id.status'] = 'Счет-фактура назначения должен быть открыт и не содержать никаких операций.';
$lang['Invoices.!error.invoice_ids.client'] = 'Все счета должны принадлежать одному и тому же клиенту.';
$lang['Invoices.!error.invoice_ids.status'] = 'Все счета-фактуры должны быть открыты и не содержать никаких операций.';
$lang['Invoices.!error.invoice_ids.currency'] = 'Все счета-фактуры должны иметь одинаковую валюту.';
$lang['Invoices.!error.invoice_ids.count'] = 'Необходимо выбрать не менее двух счетов-фактур.';
$lang['Invoices.!line_item.parent_description'] = 'Служба помощи детям %1$s - %2$s:';

