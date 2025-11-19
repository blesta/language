<?php
/**
 * Client Pay
 *
 * @package blesta
 * @subpackage blesta.language.uk_ua
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientPay.setcontactview.text_none'] = 'Ні.';
$lang['ClientPay.received.text_try_again'] = 'Спробуйте ще раз';
$lang['ClientPay.received.invoices'] = 'Рахунок-фактура';
$lang['ClientPay.received.amount'] = 'Сума';
$lang['ClientPay.received.transaction_id'] = 'Ідентифікатор транзакції';
$lang['ClientPay.received.statement'] = 'Ваш платіж обробляється.';
$lang['ClientPay.received.boxtitle_received'] = 'Дякую!';
$lang['ClientPay.received.page_title'] = 'Клієнт %1$s Платіж отримано';
$lang['ClientPay.confirm.description_credit'] = 'Платіжний кредит';
$lang['ClientPay.confirm.description_invoice_number'] = '#%1$s';
$lang['ClientPay.confirm.description_invoice_separator'] = ',';
$lang['ClientPay.confirm.description_invoice'] = 'Інвойс #%1$s';
$lang['ClientPay.confirm.field_edit'] = 'Редагувати платіж';
$lang['ClientPay.confirm.field_submit'] = 'Надіслати платіж';
$lang['ClientPay.confirm.total'] = 'Всього:';
$lang['ClientPay.confirm.account_exp'] = 'закінчується %1$s';
$lang['ClientPay.confirm.account_info_type'] = '%1$s';
$lang['ClientPay.confirm.account_info'] = '%1$s (%2$s), що закінчується на %3$s';
$lang['ClientPay.confirm.payment_details'] = 'Реквізити для оплати';
$lang['ClientPay.confirm.boxtitle_confirm'] = 'Підтвердити платіж';
$lang['ClientPay.confirm.page_title'] = 'Клієнт %1$s Підтвердити платіж';
$lang['ClientPay.multipleinvoices.no_results'] = 'Інвойси в цій валюті не виставляються.';
$lang['ClientPay.multipleinvoices.text_datedue'] = 'Дата сплати';
$lang['ClientPay.multipleinvoices.text_invoice'] = 'Рахунок-фактура';
$lang['ClientPay.multipleinvoices.text_due'] = 'Сума до сплати';
$lang['ClientPay.multipleinvoices.text_amount'] = 'Сума до сплати';
$lang['ClientPay.multipleinvoices.text_edit_amounts'] = 'Зробіть частковий платіж замість цього';
$lang['ClientPay.method.invoice_amount'] = 'Сума';
$lang['ClientPay.method.invoice_quantity'] = 'Кількість';
$lang['ClientPay.method.invoice_description'] = 'Опис';
$lang['ClientPay.method.heading_invoice'] = 'Інвойс #%1$s';
$lang['ClientPay.method.no_options'] = 'Немає доступних варіантів оплати.';
$lang['ClientPay.method.field_credit_submit'] = 'Оформляйте кредит і продовжуйте';
$lang['ClientPay.method.field_submit'] = 'Перегляньте та підтвердіть';
$lang['ClientPay.method.field_apply_credit'] = 'Подати заявку на кредит (%1$ доступний)';
$lang['ClientPay.method.field_paymentaccount_ach'] = 'Рахунки ACH';
$lang['ClientPay.method.field_paymentaccount_autodebit'] = '(Автоматичне списання) %1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.field_paymentaccount_cc'] = 'Рахунки за кредитними картками';
$lang['ClientPay.method.field_paymentaccount'] = '%1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.heading_payment_options'] = 'Варіанти оплати';
$lang['ClientPay.method.heading_other_payment_options'] = 'Інші варіанти оплати';
$lang['ClientPay.method.field_newdetails'] = 'Нові платіжні реквізити';
$lang['ClientPay.method.field_useaccount'] = 'Використовуйте платіжний рахунок';
$lang['ClientPay.method.boxtitle_method'] = 'Здійснити платіж';
$lang['ClientPay.method.page_title'] = 'Спосіб оплати клієнта %1$ Спосіб оплати';
$lang['ClientPay.index.field_submit'] = 'Продовжуйте';
$lang['ClientPay.index.field_credit'] = 'Інша сума платежу';
$lang['ClientPay.index.boxtitle_pay'] = 'Здійснити платіж';
$lang['ClientPay.index.page_title'] = 'Клієнт %1$ сплачує';
$lang['ClientPay.!error.payment_authorize'] = 'Платіж не може бути авторизований для обраного платіжного рахунку.  Будь ласка, оберіть інший рахунок або спробуйте ще раз.';
$lang['ClientPay.!error.invoice_voided'] = 'Цей інвойс анульований і не підлягає оплаті.';
$lang['ClientPay.!error.payment_amounts'] = 'Будь ласка, оберіть рахунки для оплати або введіть іншу суму платежу.';
$lang['ClientPay.!error.invalid_amount'] = 'Інші суми платежів не можуть бути від\'ємними.';
$lang['ClientPay.!error.invalid_details'] = 'Будь ласка, оберіть спосіб оплати.';
$lang['ClientPay.!info.ach_verification_redirect'] = 'Вам необхідно підтвердити цей обліковий запис, перш ніж ви зможете використовувати його для здійснення платежу. Цей процес перенаправить вас з поточної сторінки.';
$lang['ClientPay.!info.ach_verification'] = 'Вам необхідно верифікувати цей акаунт, перш ніж ви зможете використовувати його для здійснення платежу.';
$lang['ClientPay.!info.unverified_email_button'] = 'Повторно надіслати електронний лист з підтвердженням';
$lang['ClientPay.!info.unverified_email'] = 'На вказану вами електронну адресу було надіслано посилання. Будь ласка, перейдіть за посиланням у листі, щоб підтвердити свою електронну адресу, перш ніж продовжити оплату.';
$lang['ClientPay.!success.invoice_paid'] = 'Цей інвойс був раніше оплачений.';
$lang['ClientPay.!success.credit_partial_processed'] = 'Доступні кредити були використані, але залишок все ще існує. Будь ласка, завершіть цю транзакцію, сплативши решту суми нижче.';
$lang['ClientPay.!success.credit_full_processed'] = 'Доступні кредити були використані.';
$lang['ClientPay.!success.payment_processed'] = 'Платіж успішно оброблено на суму %1$s. Номер транзакції: %2$s';
$lang['ClientPay.method.invoice_balance_due'] = 'Залишок до сплати';
$lang['ClientPay.method.invoice_paid_amount'] = 'Сплачена сума';
$lang['ClientPay.method.invoice_total'] = 'Інвойс Всього';
$lang['ClientPay.index.text_credit_max_only'] = 'Максимальна сума: %1$s';
$lang['ClientPay.index.text_credit_min_only'] = 'Мінімальна сума: %1$s';
$lang['ClientPay.index.text_credit_limits'] = 'Мінімальна сума: %1$s - Максимальна сума: %2$s';
$lang['ClientPay.!error.credit_maximum'] = 'Сума кредиту не може перевищувати %1$s.';
$lang['ClientPay.!error.credit_minimum'] = 'Сума кредиту повинна бути не менше %1$s.';

