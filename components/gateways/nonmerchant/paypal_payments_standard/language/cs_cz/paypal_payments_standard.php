<?php
/**
 * Paypal Payments Standard
 *
 * @package blesta
 * @subpackage blesta.language.cs_cz
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PaypalPaymentsStandard.!error.dev_mode.valid'] = 'Režim pro vývojáře musí být nastaven na hodnotu "true", pokud je zadán.';
$lang['PaypalPaymentsStandard.!error.account_id.valid'] = 'Musíte zadat platnou e-mailovou adresu.';
$lang['PaypalPaymentsStandard.buildprocess.submit'] = 'Plaťte pomocí služby PayPal';
$lang['PaypalPaymentsStandard.pay_type_both'] = 'Jednorázové platby a platby předplatného, pokud je to možné';
$lang['PaypalPaymentsStandard.pay_type_subscribe'] = 'Pouze platby předplatného';
$lang['PaypalPaymentsStandard.pay_type_onetime'] = 'Pouze jednorázové platby';
$lang['PaypalPaymentsStandard.pay_type'] = 'Možnosti platby';
$lang['PaypalPaymentsStandard.api_signature'] = 'Podpis API';
$lang['PaypalPaymentsStandard.api_password'] = 'Heslo API';
$lang['PaypalPaymentsStandard.api_username_note'] = 'Tento údaj, stejně jako heslo API a podpis API, jsou vyžadovány pro zpracování náhrad prostřednictvím služby PayPal.';
$lang['PaypalPaymentsStandard.api_username'] = 'Uživatelské jméno API';
$lang['PaypalPaymentsStandard.dev_mode_note'] = 'Povolením této možnosti se transakce odešlou do prostředí PayPal Sandbox. Tuto možnost povolte pouze v případě, že testujete s účtem PayPal Sandbox.';
$lang['PaypalPaymentsStandard.dev_mode'] = 'Vývojářský režim';
$lang['PaypalPaymentsStandard.page_style_note'] = 'Název stylu stránky vlastního motivu platební stránky, který jste vytvořili v systému PayPal. Pro výchozí styl stránky ponechte prázdné.';
$lang['PaypalPaymentsStandard.page_style'] = 'Název stylu stránky';
$lang['PaypalPaymentsStandard.account_id'] = 'E-mail účtu PayPal';
$lang['PaypalPaymentsStandard.description'] = 'PayPal Payments Standard je jedním z nejjednodušších způsobů, jak bezpečně přijímat platby kreditní kartou a PayPal online.';
$lang['PaypalPaymentsStandard.name'] = 'Standardní platby PayPal';
$lang['PaypalPaymentsStandard.!error.payment_mapping.duplicated'] = 'V datech mapování byly nalezeny duplicitní e-maily, odstraňte duplicity a zkuste to znovu.';
$lang['PaypalPaymentsStandard.!error.payment_mapping.valid'] = 'V mapovacích datech byl nalezen neplatný řádek, zkontrolujte, zda je e-mailová adresa a ID klienta platné, a zkuste to znovu.';
$lang['PaypalPaymentsStandard.payment_mapping_note'] = 'Určeno pro použití s odběry PayPal, které byly vytvořeny mimo systém Blesta. Mapujte payer_email na interní ID klienta, 1 na řádek. Například: email,client-id';
$lang['PaypalPaymentsStandard.payment_mapping'] = 'Mapování plateb';

