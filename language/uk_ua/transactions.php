<?php
/**
 * Transactions
 *
 * @package blesta
 * @subpackage blesta.language.uk_ua
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Transactions.debit_types.credit'] = 'Кредит';
$lang['Transactions.debit_types.debit'] = 'Дебет';
$lang['Transactions.status.returned'] = 'Повернуто';
$lang['Transactions.status.refunded'] = 'Відшкодовано';
$lang['Transactions.status.pending'] = 'На розгляді';
$lang['Transactions.status.error'] = 'Помилка.';
$lang['Transactions.status.void'] = 'Порожнеча';
$lang['Transactions.status.declined'] = 'Відхилено';
$lang['Transactions.status.approved'] = 'Затверджено';
$lang['Transactions.types.other'] = 'Інше';
$lang['Transactions.types.ach'] = 'ACH';
$lang['Transactions.types.cc'] = 'Кредитна картка';
$lang['Transactions.!error.type_id.exists'] = 'Невірний ідентифікатор типу транзакції.';
$lang['Transactions.!error.is_lang.length'] = 'Довжина is_lang не може перевищувати 1 символ.';
$lang['Transactions.!error.is_lang.format'] = 'is_lang має бути числом.';
$lang['Transactions.!error.type.valid'] = 'Будь ласка, виберіть правильний тип.';
$lang['Transactions.!error.name.length'] = 'Довжина імені не може перевищувати 32 символів.';
$lang['Transactions.!error.name.empty'] = 'Будь ласка, введіть ім\'я.';
$lang['Transactions.!error.currency.mismatch'] = 'Дана валюта не відповідає хоча б одному з пов\'язаних інвойсів.';
$lang['Transactions.!error.currency.missing'] = 'Будь ласка, встановіть валюту.';
$lang['Transactions.!error.date.format'] = 'Вказана дата є недійсною.';
$lang['Transactions.!error.amounts.positive'] = 'Одне або декілька значень Amount to Pay є від\'ємними. Переконайтеся, що кожне значення Amount to Pay дорівнює нулю або більше.';
$lang['Transactions.!error.amounts.overage'] = 'Одне або декілька значень Суми до сплати не можуть бути застосовані до вказаного інвойсу. Переконайтеся, що Сума до сплати не перевищує Суму до сплати за інвойсом, що інвойс відкритий, а сума значень Суми до сплати не перевищує Суму платежу або Суму кредиту.';
$lang['Transactions.!error.invoice_id.exists'] = 'Невірний ідентифікатор інвойсу.';
$lang['Transactions.!error.transaction_id.currency_matches'] = 'Суми інвойсів не можуть бути застосовані, оскільки вони не відповідають валюті транзакції.';
$lang['Transactions.!error.message.length'] = 'Довжина повідомлення не може перевищувати 255 символів.';
$lang['Transactions.!error.date_added.format'] = 'Дата транзакції не може бути майбутньою датою.';
$lang['Transactions.!error.transaction_id.exists'] = 'Невірний ідентифікатор транзакції.';
$lang['Transactions.!error.status.format'] = 'Недійсний статус транзакції.';
$lang['Transactions.!error.reference_id.length'] = 'Довжина Reference ID не може перевищувати 128 символів.';
$lang['Transactions.!error.parent_transaction_id.length'] = 'Довжина ідентифікатора батьківської транзакції не може перевищувати 128 символів.';
$lang['Transactions.!error.transaction_id.length'] = 'Довжина ідентифікатора транзакції не може перевищувати 128 символів.';
$lang['Transactions.!error.gateway_id.exists'] = 'Неправильний ідентифікатор шлюзу.';
$lang['Transactions.!error.transaction_type_id.exists'] = 'Невірний ідентифікатор типу транзакції.';
$lang['Transactions.!error.type.format'] = 'Неправильний тип транзакції.';
$lang['Transactions.!error.currency.length'] = 'Назва валюти повинна складатися з 3 символів.';
$lang['Transactions.!error.amount.format'] = 'Сума повинна бути числом.';
$lang['Transactions.!error.client_id.exists'] = 'Невірний ідентифікатор клієнта.';

