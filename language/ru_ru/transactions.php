<?php
/**
 * Transactions
 *
 * @package blesta
 * @subpackage blesta.language.ru_ru
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Transactions.debit_types.credit'] = 'Кредит';
$lang['Transactions.debit_types.debit'] = 'Дебет';
$lang['Transactions.status.returned'] = 'Возвращено';
$lang['Transactions.status.refunded'] = 'Возмещено';
$lang['Transactions.status.pending'] = 'В ожидании';
$lang['Transactions.status.error'] = 'Ошибка';
$lang['Transactions.status.void'] = 'Пустота';
$lang['Transactions.status.declined'] = 'Отклонено';
$lang['Transactions.status.approved'] = 'Одобрено';
$lang['Transactions.types.other'] = 'Другие';
$lang['Transactions.types.ach'] = 'ACH';
$lang['Transactions.types.cc'] = 'Кредитная карта';
$lang['Transactions.!error.type_id.exists'] = 'Неверный идентификатор типа транзакции.';
$lang['Transactions.!error.is_lang.length'] = 'Длина is_lang не может превышать 1 символа.';
$lang['Transactions.!error.is_lang.format'] = 'is_lang должно быть числом.';
$lang['Transactions.!error.type.valid'] = 'Пожалуйста, выберите правильный тип.';
$lang['Transactions.!error.name.length'] = 'Длина имени не должна превышать 32 символов.';
$lang['Transactions.!error.name.empty'] = 'Пожалуйста, введите имя.';
$lang['Transactions.!error.currency.mismatch'] = 'Указанная валюта не соответствует хотя бы одному из связанных счетов-фактур.';
$lang['Transactions.!error.currency.missing'] = 'Пожалуйста, установите валюту.';
$lang['Transactions.!error.date.format'] = 'Примененная дата недействительна.';
$lang['Transactions.!error.amounts.positive'] = 'Одно или несколько значений Суммы к оплате отрицательны. Убедитесь, что каждое значение Суммы к оплате равно нулю или больше.';
$lang['Transactions.!error.amounts.overage'] = 'Одно или несколько значений Суммы к оплате не удалось применить к указанному счету-фактуре. Убедитесь, что сумма к оплате не превышает сумму к оплате в счете, что счет открыт, а сумма значений суммы к оплате не превышает сумму платежа или кредита.';
$lang['Transactions.!error.invoice_id.exists'] = 'Неверный идентификатор счета-фактуры.';
$lang['Transactions.!error.transaction_id.currency_matches'] = 'Суммы счета-фактуры не могут быть применены, поскольку они не соответствуют валюте операции.';
$lang['Transactions.!error.message.length'] = 'Длина сообщения не должна превышать 255 символов.';
$lang['Transactions.!error.date_added.format'] = 'Дата транзакции не может быть будущей датой.';
$lang['Transactions.!error.transaction_id.exists'] = 'Неверный идентификатор транзакции.';
$lang['Transactions.!error.status.format'] = 'Неверный статус транзакции.';
$lang['Transactions.!error.reference_id.length'] = 'Длина идентификатора ссылки не должна превышать 128 символов.';
$lang['Transactions.!error.parent_transaction_id.length'] = 'Длина идентификатора родительской транзакции не должна превышать 128 символов.';
$lang['Transactions.!error.transaction_id.length'] = 'Длина идентификатора транзакции не должна превышать 128 символов.';
$lang['Transactions.!error.gateway_id.exists'] = 'Неверный идентификатор шлюза.';
$lang['Transactions.!error.transaction_type_id.exists'] = 'Неверный идентификатор типа транзакции.';
$lang['Transactions.!error.type.format'] = 'Неверный тип транзакции.';
$lang['Transactions.!error.currency.length'] = 'Валюта должна состоять из 3 символов.';
$lang['Transactions.!error.amount.format'] = 'Сумма должна быть числом.';
$lang['Transactions.!error.client_id.exists'] = 'Неверный идентификатор клиента.';

