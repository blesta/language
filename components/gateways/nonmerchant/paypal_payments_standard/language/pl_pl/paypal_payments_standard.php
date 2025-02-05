<?php
/**
 * Paypal Payments Standard
 *
 * @package blesta
 * @subpackage blesta.language.pl_pl
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PaypalPaymentsStandard.!error.dev_mode.valid'] = 'Tryb deweloperski musi być ustawiony na "true", jeśli został podany.';
$lang['PaypalPaymentsStandard.!error.account_id.valid'] = 'Musisz podać prawidłowy adres e-mail.';
$lang['PaypalPaymentsStandard.buildprocess.submit'] = 'Zapłać przez PayPal';
$lang['PaypalPaymentsStandard.pay_type_both'] = 'Płatności jednorazowe i subskrypcyjne, jeśli to możliwe';
$lang['PaypalPaymentsStandard.pay_type_subscribe'] = 'Tylko płatności subskrypcyjne';
$lang['PaypalPaymentsStandard.pay_type_onetime'] = 'Tylko płatności jednorazowe';
$lang['PaypalPaymentsStandard.pay_type'] = 'Opcje płatności';
$lang['PaypalPaymentsStandard.api_signature'] = 'Podpis API';
$lang['PaypalPaymentsStandard.api_password'] = 'Hasło API';
$lang['PaypalPaymentsStandard.api_username_note'] = 'Hasło API i podpis API są wymagane do przetwarzania zwrotów za pośrednictwem PayPal.';
$lang['PaypalPaymentsStandard.api_username'] = 'Nazwa użytkownika API';
$lang['PaypalPaymentsStandard.dev_mode_note'] = 'Włączenie tej opcji spowoduje publikowanie transakcji w środowisku PayPal Sandbox. Opcję tę należy włączyć tylko w przypadku testowania za pomocą konta PayPal Sandbox.';
$lang['PaypalPaymentsStandard.dev_mode'] = 'Tryb dewelopera';
$lang['PaypalPaymentsStandard.page_style_note'] = 'Nazwa stylu strony niestandardowego motywu strony płatności utworzonego w systemie PayPal. Pozostaw puste dla domyślnego stylu strony.';
$lang['PaypalPaymentsStandard.page_style'] = 'Nazwa stylu strony';
$lang['PaypalPaymentsStandard.account_id'] = 'Adres e-mail konta PayPal';
$lang['PaypalPaymentsStandard.description'] = 'PayPal Payments Standard to jeden z najprostszych sposobów na bezpieczne akceptowanie płatności kartą kredytową i PayPal online';
$lang['PaypalPaymentsStandard.name'] = 'Płatności PayPal Standard';
$lang['PaypalPaymentsStandard.!error.payment_mapping.duplicated'] = 'W danych mapowania znaleziono zduplikowane wiadomości e-mail, usuń duplikaty i spróbuj ponownie.';
$lang['PaypalPaymentsStandard.!error.payment_mapping.valid'] = 'W danych mapowania znaleziono nieprawidłowy wiersz, sprawdź, czy adres e-mail i identyfikator klienta są prawidłowe i spróbuj ponownie.';
$lang['PaypalPaymentsStandard.payment_mapping_note'] = 'Przeznaczony do użytku z subskrypcjami PayPal, które zostały utworzone poza Blesta. Mapuj payer_email do wewnętrznego identyfikatora klienta, 1 na wiersz. Na przykład: email,client-id';
$lang['PaypalPaymentsStandard.payment_mapping'] = 'Mapowanie płatności';

