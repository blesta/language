<?php
/**
 * Client Pay
 *
 * @package blesta
 * @subpackage blesta.language.bg_bg
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientPay.setcontactview.text_none'] = 'Няма';
$lang['ClientPay.received.text_try_again'] = 'Опитайте отново';
$lang['ClientPay.received.invoices'] = 'Фактура #';
$lang['ClientPay.received.amount'] = 'Сума';
$lang['ClientPay.received.transaction_id'] = 'Идентификатор на транзакцията';
$lang['ClientPay.received.statement'] = 'Плащането ви се обработва.';
$lang['ClientPay.received.boxtitle_received'] = 'Благодаря ви!';
$lang['ClientPay.received.page_title'] = 'Клиент %1$s Получено плащане';
$lang['ClientPay.confirm.description_credit'] = 'Кредит за плащане';
$lang['ClientPay.confirm.description_invoice_number'] = '#%1$s';
$lang['ClientPay.confirm.description_invoice_separator'] = ',';
$lang['ClientPay.confirm.description_invoice'] = 'Фактура #%1$s';
$lang['ClientPay.confirm.field_edit'] = 'Редактиране на плащане';
$lang['ClientPay.confirm.field_submit'] = 'Изпращане на плащане';
$lang['ClientPay.confirm.total'] = 'Общо:';
$lang['ClientPay.confirm.account_exp'] = 'изтича на %1$s';
$lang['ClientPay.confirm.account_info_type'] = '%1$s';
$lang['ClientPay.confirm.account_info'] = '%1$s (%2$s), завършващ на %3$s';
$lang['ClientPay.confirm.payment_details'] = 'Подробности за плащането';
$lang['ClientPay.confirm.boxtitle_confirm'] = 'Потвърждаване на плащането';
$lang['ClientPay.confirm.page_title'] = 'Клиент %1$s Потвърдете плащането';
$lang['ClientPay.multipleinvoices.no_results'] = 'Няма фактури в тази валута.';
$lang['ClientPay.multipleinvoices.text_datedue'] = 'Дата на плащане';
$lang['ClientPay.multipleinvoices.text_invoice'] = 'Фактура #';
$lang['ClientPay.multipleinvoices.text_due'] = 'Дължима сума';
$lang['ClientPay.multipleinvoices.text_amount'] = 'Сума за плащане';
$lang['ClientPay.multipleinvoices.text_edit_amounts'] = 'Вместо това направете частично плащане';
$lang['ClientPay.method.invoice_amount'] = 'Сума';
$lang['ClientPay.method.invoice_quantity'] = 'Количество';
$lang['ClientPay.method.invoice_description'] = 'Описание';
$lang['ClientPay.method.heading_invoice'] = 'Фактура #%1$s';
$lang['ClientPay.method.no_options'] = 'Няма налични опции за плащане.';
$lang['ClientPay.method.field_credit_submit'] = 'Заявете кредит и продължете';
$lang['ClientPay.method.field_submit'] = 'Преглед и потвърждаване';
$lang['ClientPay.method.field_apply_credit'] = 'Кандидатствайте за кредит (%1$s Available)';
$lang['ClientPay.method.field_paymentaccount_ach'] = 'Сметки ACH';
$lang['ClientPay.method.field_paymentaccount_autodebit'] = '(Автоматичен дебит) %1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.field_paymentaccount_cc'] = 'Сметки за кредитни карти';
$lang['ClientPay.method.field_paymentaccount'] = '%1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.heading_payment_options'] = 'Опции за плащане';
$lang['ClientPay.method.heading_other_payment_options'] = 'Други опции за плащане';
$lang['ClientPay.method.field_newdetails'] = 'Нови данни за плащане';
$lang['ClientPay.method.field_useaccount'] = 'Използване на платежна сметка';
$lang['ClientPay.method.boxtitle_method'] = 'Направете плащане';
$lang['ClientPay.method.page_title'] = 'Клиент %1$s Метод на плащане';
$lang['ClientPay.index.field_submit'] = 'Продължи';
$lang['ClientPay.index.field_credit'] = 'Друга сума за плащане';
$lang['ClientPay.index.boxtitle_pay'] = 'Направете плащане';
$lang['ClientPay.index.page_title'] = 'Клиент %1$s Pay';
$lang['ClientPay.!error.payment_authorize'] = 'Плащането не може да бъде разрешено за избраната платежна сметка.  Моля, изберете друга сметка или опитайте отново.';
$lang['ClientPay.!error.invoice_voided'] = 'Тази фактура е анулирана и не може да бъде платена.';
$lang['ClientPay.!error.payment_amounts'] = 'Моля, изберете фактури за плащане или въведете друга сума за плащане.';
$lang['ClientPay.!error.invalid_amount'] = 'Други суми за плащане не могат да бъдат отрицателни.';
$lang['ClientPay.!error.invalid_details'] = 'Моля, изберете опция за плащане.';
$lang['ClientPay.!info.ach_verification_redirect'] = 'Трябва да потвърдите този акаунт, преди да го използвате за извършване на плащане. Този процес ще ви пренасочи от текущата страница.';
$lang['ClientPay.!info.ach_verification'] = 'Трябва да потвърдите този акаунт, преди да го използвате за извършване на плащане.';
$lang['ClientPay.!info.unverified_email_button'] = 'Повторно изпращане на имейл за проверка';
$lang['ClientPay.!info.unverified_email'] = 'На посочения от вас имейл адрес беше изпратена връзка. Моля, кликнете върху връзката в имейла, за да потвърдите имейл адреса си, преди да продължите да извършвате плащане.';
$lang['ClientPay.!success.invoice_paid'] = 'Тази фактура вече е била платена.';
$lang['ClientPay.!success.credit_partial_processed'] = 'Наличните кредити са приложени, но все още има остатък. Моля, завършете тази транзакция, като платите остатъка по-долу.';
$lang['ClientPay.!success.credit_full_processed'] = 'Наличните кредити са приложени.';
$lang['ClientPay.!success.payment_processed'] = 'Плащането беше успешно обработено за %1$s. Номер на транзакцията: %2$s';
$lang['ClientPay.method.invoice_balance_due'] = 'Дължимо салдо';
$lang['ClientPay.method.invoice_paid_amount'] = 'Платена сума';
$lang['ClientPay.method.invoice_total'] = 'Фактура Общо';
$lang['ClientPay.index.text_credit_max_only'] = 'Максимална сума: %1$s';
$lang['ClientPay.index.text_credit_min_only'] = 'Минимална сума: %1$s';
$lang['ClientPay.index.text_credit_limits'] = 'Минимална сума: %1$s - Максимална сума: %2$s';
$lang['ClientPay.!error.credit_maximum'] = 'Размерът на кредита не може да надвишава %1$s.';
$lang['ClientPay.!error.credit_minimum'] = 'Размерът на кредита трябва да бъде най-малко %1$s.';

