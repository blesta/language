<?php
/**
 * Client Pay
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientPay.!success.payment_processed'] = 'Betalingen blev behandlet med succes for %1$s. Transaktionsnummer: %2$s';
$lang['ClientPay.!success.credit_full_processed'] = 'De tilgængelige kreditter er blevet anvendt.';
$lang['ClientPay.!success.credit_partial_processed'] = 'De tilgængelige kreditter er blevet anvendt, men der er stadig en saldo. Fuldfør venligst denne transaktion ved at betale restbeløbet nedenfor.';
$lang['ClientPay.!success.invoice_paid'] = 'Denne faktura er tidligere blevet betalt.';
$lang['ClientPay.!info.unverified_email'] = 'Der blev sendt et link til den e-mailadresse, du angav. Klik venligst på linket i e-mailen for at bekræfte din e-mailadresse, før du fortsætter med at betale.';
$lang['ClientPay.!info.unverified_email_button'] = 'Send bekræftelses-e-mail igen';
$lang['ClientPay.!info.ach_verification'] = 'Du skal bekræfte denne konto, før du kan bruge den til at foretage en betaling.';
$lang['ClientPay.!info.ach_verification_redirect'] = 'Du skal bekræfte denne konto, før du kan bruge den til at foretage en betaling. Denne proces vil omdirigere dig væk fra den aktuelle side.';
$lang['ClientPay.!error.invalid_details'] = 'Vælg venligst en betalingsmulighed.';
$lang['ClientPay.!error.invalid_amount'] = 'Andre betalingsbeløb må ikke være negative.';
$lang['ClientPay.!error.payment_amounts'] = 'Vælg fakturaer, der skal betales, eller indtast et andet betalingsbeløb.';
$lang['ClientPay.!error.invoice_voided'] = 'Denne faktura er blevet annulleret og kan ikke betales.';
$lang['ClientPay.!error.payment_authorize'] = 'Betaling kunne ikke godkendes for den valgte betalingskonto.  Vælg venligst en anden konto, eller prøv igen.';
$lang['ClientPay.index.page_title'] = 'Klient %1$s betaler';
$lang['ClientPay.index.boxtitle_pay'] = 'Foretag betaling';
$lang['ClientPay.index.field_credit'] = 'Andet betalingsbeløb';
$lang['ClientPay.index.field_submit'] = 'Fortsæt';
$lang['ClientPay.method.page_title'] = 'Kunde %1$s betalingsmetode';
$lang['ClientPay.method.boxtitle_method'] = 'Foretag betaling';
$lang['ClientPay.method.field_useaccount'] = 'Brug betalingskonto';
$lang['ClientPay.method.field_newdetails'] = 'Nye betalingsoplysninger';
$lang['ClientPay.method.heading_other_payment_options'] = 'Andre betalingsmuligheder';
$lang['ClientPay.method.heading_payment_options'] = 'Betalingsmuligheder';
$lang['ClientPay.method.field_paymentaccount'] = '%1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.field_paymentaccount_cc'] = 'Kreditkortkonti';
$lang['ClientPay.method.field_paymentaccount_autodebit'] = '(Automatisk debitering) %1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.field_paymentaccount_ach'] = 'ACH-konti';
$lang['ClientPay.method.field_apply_credit'] = 'Ansøg om kredit (%1$s tilgængelig)';
$lang['ClientPay.method.field_submit'] = 'Gennemgå og bekræft';
$lang['ClientPay.method.field_credit_submit'] = 'Ansøg om kredit og fortsæt';
$lang['ClientPay.method.no_options'] = 'Der er ingen tilgængelige betalingsmuligheder.';
$lang['ClientPay.method.heading_invoice'] = 'Faktura #%1$s';
$lang['ClientPay.method.invoice_description'] = 'Beskrivelse';
$lang['ClientPay.method.invoice_quantity'] = 'Antal';
$lang['ClientPay.method.invoice_amount'] = 'Beløb';
$lang['ClientPay.multipleinvoices.text_edit_amounts'] = 'Foretag en delvis betaling i stedet';
$lang['ClientPay.multipleinvoices.text_amount'] = 'Beløb, der skal betales';
$lang['ClientPay.multipleinvoices.text_due'] = 'Skyldigt beløb';
$lang['ClientPay.multipleinvoices.text_invoice'] = 'Faktura #';
$lang['ClientPay.multipleinvoices.text_datedue'] = 'Dato forfalden';
$lang['ClientPay.multipleinvoices.no_results'] = 'Der er ingen fakturaer i denne valuta.';
$lang['ClientPay.confirm.page_title'] = 'Klient %1$s bekræfter betaling';
$lang['ClientPay.confirm.boxtitle_confirm'] = 'Bekræft betaling';
$lang['ClientPay.confirm.payment_details'] = 'Betalingsoplysninger';
$lang['ClientPay.confirm.account_info'] = '%1$s (%2$s) slutter i %3$s';
$lang['ClientPay.confirm.account_info_type'] = '%1$s';
$lang['ClientPay.confirm.account_exp'] = 'udløber %1$s';
$lang['ClientPay.confirm.total'] = 'I alt:';
$lang['ClientPay.confirm.field_submit'] = 'Indsend betaling';
$lang['ClientPay.confirm.field_edit'] = 'Rediger betaling';
$lang['ClientPay.confirm.description_invoice'] = 'Faktura #%1$s';
$lang['ClientPay.confirm.description_invoice_separator'] = ',';
$lang['ClientPay.confirm.description_invoice_number'] = '#%1$s';
$lang['ClientPay.confirm.description_credit'] = 'Kredit til betaling';
$lang['ClientPay.received.page_title'] = 'Klient %1$s Betaling modtaget';
$lang['ClientPay.received.boxtitle_received'] = 'Tak skal du have!';
$lang['ClientPay.received.statement'] = 'Din betaling er ved at blive behandlet.';
$lang['ClientPay.received.transaction_id'] = 'Transaktions-ID';
$lang['ClientPay.received.amount'] = 'Beløb';
$lang['ClientPay.received.invoices'] = 'Faktura #';
$lang['ClientPay.received.text_try_again'] = 'Prøv igen';
$lang['ClientPay.setcontactview.text_none'] = 'Ingen';
$lang['ClientPay.method.invoice_balance_due'] = 'Forfalden saldo';
$lang['ClientPay.method.invoice_paid_amount'] = 'Betalt beløb';
$lang['ClientPay.method.invoice_total'] = 'Faktura i alt';
$lang['ClientPay.index.text_credit_max_only'] = 'Maksimalt beløb: %1$s';
$lang['ClientPay.index.text_credit_min_only'] = 'Minimumsbeløb: %1$s';
$lang['ClientPay.index.text_credit_limits'] = 'Minimumsbeløb: %1$s - Maksimalt beløb: %2$s';
$lang['ClientPay.!error.credit_maximum'] = 'Kreditbeløbet kan ikke overstige %1$s.';
$lang['ClientPay.!error.credit_minimum'] = 'Kreditbeløbet skal være på mindst %1$s.';

