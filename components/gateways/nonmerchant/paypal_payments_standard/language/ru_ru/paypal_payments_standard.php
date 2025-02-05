<?php
/**
 * Paypal Payments Standard
 *
 * @package blesta
 * @subpackage blesta.language.ru_ru
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PaypalPaymentsStandard.!error.dev_mode.valid'] = 'Режим разработчика должен быть установлен на "true", если он задан.';
$lang['PaypalPaymentsStandard.!error.account_id.valid'] = 'Вы должны ввести действительный адрес электронной почты.';
$lang['PaypalPaymentsStandard.buildprocess.submit'] = 'Оплата с помощью PayPal';
$lang['PaypalPaymentsStandard.pay_type_both'] = 'Единовременные и абонентские платежи, когда это возможно';
$lang['PaypalPaymentsStandard.pay_type_subscribe'] = 'Только оплата подписки';
$lang['PaypalPaymentsStandard.pay_type_onetime'] = 'Только одноразовые платежи';
$lang['PaypalPaymentsStandard.pay_type'] = 'Варианты оплаты';
$lang['PaypalPaymentsStandard.api_signature'] = 'Подпись API';
$lang['PaypalPaymentsStandard.api_password'] = 'Пароль API';
$lang['PaypalPaymentsStandard.api_username_note'] = 'Это, а также API Password и API Signature необходимы для обработки возвратов через PayPal.';
$lang['PaypalPaymentsStandard.api_username'] = 'Имя пользователя API';
$lang['PaypalPaymentsStandard.dev_mode_note'] = 'Включение этой опции приведет к публикации транзакций в среде PayPal Sandbox. Включайте этот параметр только в том случае, если вы проводите тестирование с помощью аккаунта PayPal Sandbox.';
$lang['PaypalPaymentsStandard.dev_mode'] = 'Режим разработчика';
$lang['PaypalPaymentsStandard.page_style_note'] = 'Имя стиля страницы пользовательской темы страницы оплаты, созданной в PayPal. Оставьте пустым для стиля страницы по умолчанию.';
$lang['PaypalPaymentsStandard.page_style'] = 'Имя стиля страницы';
$lang['PaypalPaymentsStandard.account_id'] = 'Электронная почта счета PayPal';
$lang['PaypalPaymentsStandard.description'] = 'PayPal Payments Standard - один из самых простых способов безопасно принимать платежи по кредитным картам и PayPal в Интернете.';
$lang['PaypalPaymentsStandard.name'] = 'PayPal Payments Standard';
$lang['PaypalPaymentsStandard.!error.payment_mapping.duplicated'] = 'В ваших картографических данных были обнаружены дубликаты электронных писем, удалите их и повторите попытку.';
$lang['PaypalPaymentsStandard.!error.payment_mapping.valid'] = 'В ваших картографических данных обнаружена недопустимая строка, проверьте, действительны ли адрес электронной почты и идентификатор клиента, и повторите попытку.';
$lang['PaypalPaymentsStandard.payment_mapping_note'] = 'Предназначено для использования с подписками PayPal, которые были созданы вне Blesta. Сопоставьте payer_email с внутренним идентификатором клиента, по 1 в строке. Например: email,client-id';
$lang['PaypalPaymentsStandard.payment_mapping'] = 'Сопоставление платежей';

