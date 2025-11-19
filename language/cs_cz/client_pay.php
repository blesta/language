<?php
/**
 * Client Pay
 *
 * @package blesta
 * @subpackage blesta.language.cs_cz
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientPay.setcontactview.text_none'] = 'Žádné';
$lang['ClientPay.received.text_try_again'] = 'Zkuste to znovu';
$lang['ClientPay.received.invoices'] = 'Faktura #';
$lang['ClientPay.received.amount'] = 'Částka';
$lang['ClientPay.received.transaction_id'] = 'ID transakce';
$lang['ClientPay.received.statement'] = 'Vaše platba se zpracovává.';
$lang['ClientPay.received.boxtitle_received'] = 'Děkujeme!';
$lang['ClientPay.received.page_title'] = 'Přijatá platba klienta %1$s';
$lang['ClientPay.confirm.description_credit'] = 'Platební kredit';
$lang['ClientPay.confirm.description_invoice_number'] = '#%1$s';
$lang['ClientPay.confirm.description_invoice_separator'] = ',';
$lang['ClientPay.confirm.description_invoice'] = 'Faktura #%1$s';
$lang['ClientPay.confirm.field_edit'] = 'Upravit platbu';
$lang['ClientPay.confirm.field_submit'] = 'Odeslat platbu';
$lang['ClientPay.confirm.total'] = 'Celkem:';
$lang['ClientPay.confirm.account_exp'] = 'vyprší %1$s';
$lang['ClientPay.confirm.account_info_type'] = '%1$s';
$lang['ClientPay.confirm.account_info'] = '%1$s (%2$s) končící na %3$s';
$lang['ClientPay.confirm.payment_details'] = 'Podrobnosti o platbě';
$lang['ClientPay.confirm.boxtitle_confirm'] = 'Potvrzení platby';
$lang['ClientPay.confirm.page_title'] = 'Klient %1$s Potvrzení platby';
$lang['ClientPay.multipleinvoices.no_results'] = 'V této měně nejsou žádné faktury.';
$lang['ClientPay.multipleinvoices.text_datedue'] = 'Datum splatnosti';
$lang['ClientPay.multipleinvoices.text_invoice'] = 'Faktura #';
$lang['ClientPay.multipleinvoices.text_due'] = 'Dlužná částka';
$lang['ClientPay.multipleinvoices.text_amount'] = 'Částka k úhradě';
$lang['ClientPay.multipleinvoices.text_edit_amounts'] = 'Místo toho proveďte částečnou platbu';
$lang['ClientPay.method.invoice_amount'] = 'Částka';
$lang['ClientPay.method.invoice_quantity'] = 'Množství';
$lang['ClientPay.method.invoice_description'] = 'Popis';
$lang['ClientPay.method.heading_invoice'] = 'Faktura #%1$s';
$lang['ClientPay.method.no_options'] = 'Nejsou k dispozici žádné možnosti platby.';
$lang['ClientPay.method.field_credit_submit'] = 'Použít úvěr a pokračovat';
$lang['ClientPay.method.field_submit'] = 'Zkontrolujte a potvrďte';
$lang['ClientPay.method.field_apply_credit'] = 'Použít úvěr (%1$s Available)';
$lang['ClientPay.method.field_paymentaccount_ach'] = 'Účty ACH';
$lang['ClientPay.method.field_paymentaccount_autodebit'] = '(Automatický debet) %1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.field_paymentaccount_cc'] = 'Účty kreditních karet';
$lang['ClientPay.method.field_paymentaccount'] = '%1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.heading_payment_options'] = 'Možnosti platby';
$lang['ClientPay.method.heading_other_payment_options'] = 'Další možnosti platby';
$lang['ClientPay.method.field_newdetails'] = 'Nové platební údaje';
$lang['ClientPay.method.field_useaccount'] = 'Použití platebního účtu';
$lang['ClientPay.method.boxtitle_method'] = 'Provést platbu';
$lang['ClientPay.method.page_title'] = 'Klient %1$s Způsob platby';
$lang['ClientPay.index.field_submit'] = 'Pokračovat';
$lang['ClientPay.index.field_credit'] = 'Jiná částka platby';
$lang['ClientPay.index.boxtitle_pay'] = 'Provést platbu';
$lang['ClientPay.index.page_title'] = 'Klient %1$s Pay';
$lang['ClientPay.!error.payment_authorize'] = 'Pro vybraný platební účet se nepodařilo autorizovat platbu.  Vyberte prosím jiný účet nebo to zkuste znovu.';
$lang['ClientPay.!error.invoice_voided'] = 'Tato faktura byla zrušena a nelze ji uhradit.';
$lang['ClientPay.!error.payment_amounts'] = 'Vyberte faktury, které chcete zaplatit, nebo zadejte jinou částku platby.';
$lang['ClientPay.!error.invalid_amount'] = 'Ostatní částky plateb nesmí být záporné.';
$lang['ClientPay.!error.invalid_details'] = 'Zvolte prosím možnost platby.';
$lang['ClientPay.!info.ach_verification_redirect'] = 'Tento účet je třeba ověřit, abyste jej mohli použít k provedení platby. Tento proces vás přesměruje z aktuální stránky.';
$lang['ClientPay.!info.ach_verification'] = 'Tento účet je třeba ověřit, abyste jej mohli použít k provedení platby.';
$lang['ClientPay.!info.unverified_email_button'] = 'Opětovné odeslání ověřovacího e-mailu';
$lang['ClientPay.!info.unverified_email'] = 'Na zadanou e-mailovou adresu byl odeslán odkaz. Před provedením platby klikněte na odkaz v e-mailu a ověřte svou e-mailovou adresu.';
$lang['ClientPay.!success.invoice_paid'] = 'Tato faktura byla již dříve uhrazena.';
$lang['ClientPay.!success.credit_partial_processed'] = 'Dostupné kredity byly použity, ale stále existuje zůstatek. Dokončete prosím tuto transakci zaplacením níže uvedeného zbytku.';
$lang['ClientPay.!success.credit_full_processed'] = 'Dostupné kredity byly použity.';
$lang['ClientPay.!success.payment_processed'] = 'Platba za %1$s byla úspěšně zpracována. Číslo transakce: %2$s';
$lang['ClientPay.method.invoice_balance_due'] = 'Zůstatek k úhradě';
$lang['ClientPay.method.invoice_paid_amount'] = 'Vyplacená částka';
$lang['ClientPay.method.invoice_total'] = 'Faktura celkem';
$lang['ClientPay.index.text_credit_max_only'] = 'Maximální částka: %1$s';
$lang['ClientPay.index.text_credit_min_only'] = 'Minimální částka: %1$s';
$lang['ClientPay.index.text_credit_limits'] = 'Minimální částka: %1$s - Maximální částka: %2$s';
$lang['ClientPay.!error.credit_maximum'] = 'Výše úvěru nesmí přesáhnout %1$s.';
$lang['ClientPay.!error.credit_minimum'] = 'Výše úvěru musí být alespoň %1$s.';

