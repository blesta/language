<?php
/**
 * Client Pay
 *
 * @package blesta
 * @subpackage blesta.language.ru_ru
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientPay.setcontactview.text_none'] = 'Нет';
$lang['ClientPay.received.text_try_again'] = 'Попробуйте еще раз';
$lang['ClientPay.received.invoices'] = 'Счет-фактура №';
$lang['ClientPay.received.amount'] = 'Сумма';
$lang['ClientPay.received.transaction_id'] = 'Идентификатор транзакции';
$lang['ClientPay.received.statement'] = 'Ваш платеж находится в процессе обработки.';
$lang['ClientPay.received.boxtitle_received'] = 'Спасибо!';
$lang['ClientPay.received.page_title'] = 'Клиент %1$s Оплата получена';
$lang['ClientPay.confirm.description_credit'] = 'Платежный кредит';
$lang['ClientPay.confirm.description_invoice_number'] = '#%1$s';
$lang['ClientPay.confirm.description_invoice_separator'] = ',';
$lang['ClientPay.confirm.description_invoice'] = 'Счет-фактура #%1$s';
$lang['ClientPay.confirm.field_edit'] = 'Редактировать оплату';
$lang['ClientPay.confirm.field_submit'] = 'Отправить платеж';
$lang['ClientPay.confirm.total'] = 'Всего:';
$lang['ClientPay.confirm.account_exp'] = 'истекает %1$s';
$lang['ClientPay.confirm.account_info_type'] = '%1$s';
$lang['ClientPay.confirm.account_info'] = '%1$s (%2$s), заканчивающийся на %3$s';
$lang['ClientPay.confirm.payment_details'] = 'Платежные реквизиты';
$lang['ClientPay.confirm.boxtitle_confirm'] = 'Подтвердите оплату';
$lang['ClientPay.confirm.page_title'] = 'Клиент %1$s подтверждает оплату';
$lang['ClientPay.multipleinvoices.no_results'] = 'В этой валюте нет счетов-фактур.';
$lang['ClientPay.multipleinvoices.text_datedue'] = 'Дата выполнения';
$lang['ClientPay.multipleinvoices.text_invoice'] = 'Счет-фактура №';
$lang['ClientPay.multipleinvoices.text_due'] = 'Сумма к оплате';
$lang['ClientPay.multipleinvoices.text_amount'] = 'Сумма к оплате';
$lang['ClientPay.multipleinvoices.text_edit_amounts'] = 'Сделайте частичную оплату';
$lang['ClientPay.method.invoice_amount'] = 'Сумма';
$lang['ClientPay.method.invoice_quantity'] = 'Количество';
$lang['ClientPay.method.invoice_description'] = 'Описание';
$lang['ClientPay.method.heading_invoice'] = 'Счет-фактура #%1$s';
$lang['ClientPay.method.no_options'] = 'Варианты оплаты отсутствуют.';
$lang['ClientPay.method.field_credit_submit'] = 'Оформить кредит и продолжить';
$lang['ClientPay.method.field_submit'] = 'Просмотр и подтверждение';
$lang['ClientPay.method.field_apply_credit'] = 'Оформить кредит (%1$ в наличии)';
$lang['ClientPay.method.field_paymentaccount_ach'] = 'Счета ACH';
$lang['ClientPay.method.field_paymentaccount_autodebit'] = '(Автодебет) %1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.field_paymentaccount_cc'] = 'Счета кредитных карт';
$lang['ClientPay.method.field_paymentaccount'] = '%1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.heading_payment_options'] = 'Варианты оплаты';
$lang['ClientPay.method.heading_other_payment_options'] = 'Другие варианты оплаты';
$lang['ClientPay.method.field_newdetails'] = 'Новые реквизиты платежа';
$lang['ClientPay.method.field_useaccount'] = 'Используйте платежный счет';
$lang['ClientPay.method.boxtitle_method'] = 'Произвести оплату';
$lang['ClientPay.method.page_title'] = 'Способ оплаты клиента %1$s';
$lang['ClientPay.index.field_submit'] = 'Продолжить';
$lang['ClientPay.index.field_credit'] = 'Другая сумма платежа';
$lang['ClientPay.index.boxtitle_pay'] = 'Произвести оплату';
$lang['ClientPay.index.page_title'] = 'Клиент %1$s Оплата';
$lang['ClientPay.!error.payment_authorize'] = 'Не удалось авторизовать платеж для выбранного платежного счета.  Пожалуйста, выберите другой счет или повторите попытку.';
$lang['ClientPay.!error.invoice_voided'] = 'Этот счет был аннулирован и не может быть оплачен.';
$lang['ClientPay.!error.payment_amounts'] = 'Пожалуйста, выберите счета для оплаты или введите другую сумму платежа.';
$lang['ClientPay.!error.invalid_amount'] = 'Другие суммы платежей не могут быть отрицательными.';
$lang['ClientPay.!error.invalid_details'] = 'Пожалуйста, выберите способ оплаты.';
$lang['ClientPay.!info.ach_verification_redirect'] = 'Прежде чем использовать эту учетную запись для совершения платежа, ее необходимо подтвердить. Этот процесс перенаправит вас с текущей страницы.';
$lang['ClientPay.!info.ach_verification'] = 'Прежде чем использовать эту учетную запись для совершения платежа, ее необходимо подтвердить.';
$lang['ClientPay.!info.unverified_email_button'] = 'Повторная отправка проверочного письма';
$lang['ClientPay.!info.unverified_email'] = 'На указанный вами адрес электронной почты была отправлена ссылка. Пожалуйста, перейдите по ссылке в письме, чтобы подтвердить свой адрес электронной почты, прежде чем приступить к оплате.';
$lang['ClientPay.!success.invoice_paid'] = 'Этот счет уже был оплачен ранее.';
$lang['ClientPay.!success.credit_partial_processed'] = 'Доступные кредиты были использованы, но остаток все еще существует. Пожалуйста, завершите эту операцию, оплатив остаток ниже.';
$lang['ClientPay.!success.credit_full_processed'] = 'Доступные кредиты были использованы.';
$lang['ClientPay.!success.payment_processed'] = 'Платеж был успешно обработан для %1$s. Номер транзакции: %2$s';
$lang['ClientPay.method.invoice_balance_due'] = 'Остаток к оплате';
$lang['ClientPay.method.invoice_paid_amount'] = 'Оплаченная сумма';
$lang['ClientPay.method.invoice_total'] = 'Счет-фактура Итого';
$lang['ClientPay.index.text_credit_max_only'] = 'Максимальная сумма: %1$s';
$lang['ClientPay.index.text_credit_min_only'] = 'Минимальная сумма: %1$s';
$lang['ClientPay.index.text_credit_limits'] = 'Минимальная сумма: %1$s - Максимальная сумма: %2$s';
$lang['ClientPay.!error.credit_maximum'] = 'Сумма кредита не может превышать %1$s.';
$lang['ClientPay.!error.credit_minimum'] = 'Сумма кредита должна быть не менее %1$s.';

