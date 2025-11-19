<?php
/**
 * Client Pay
 *
 * @package blesta
 * @subpackage blesta.language.ro_ro
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientPay.setcontactview.text_none'] = 'Nici unul';
$lang['ClientPay.received.text_try_again'] = 'Încearcă din nou';
$lang['ClientPay.received.invoices'] = 'Factura #';
$lang['ClientPay.received.amount'] = 'Suma';
$lang['ClientPay.received.transaction_id'] = 'ID-ul tranzacției';
$lang['ClientPay.received.statement'] = 'Plata dumneavoastră este în curs de procesare.';
$lang['ClientPay.received.boxtitle_received'] = 'Vă mulțumim!';
$lang['ClientPay.received.page_title'] = 'Client %1$s Plata primită';
$lang['ClientPay.confirm.description_credit'] = 'Credit de plată';
$lang['ClientPay.confirm.description_invoice_number'] = '#%1$s';
$lang['ClientPay.confirm.description_invoice_separator'] = ',';
$lang['ClientPay.confirm.description_invoice'] = 'Factura #%1$s';
$lang['ClientPay.confirm.field_edit'] = 'Editați plata';
$lang['ClientPay.confirm.field_submit'] = 'Trimiteți plata';
$lang['ClientPay.confirm.total'] = 'Total:';
$lang['ClientPay.confirm.account_exp'] = 'expiră %1$s';
$lang['ClientPay.confirm.account_info_type'] = '%1$s';
$lang['ClientPay.confirm.account_info'] = '%1$s (%2$s) care se termină în %3$s';
$lang['ClientPay.confirm.payment_details'] = 'Detalii de plată';
$lang['ClientPay.confirm.boxtitle_confirm'] = 'Confirmați plata';
$lang['ClientPay.confirm.page_title'] = 'Clientul %1$s confirmă plata';
$lang['ClientPay.multipleinvoices.no_results'] = 'Nu există facturi în această monedă.';
$lang['ClientPay.multipleinvoices.text_datedue'] = 'Data scadentă';
$lang['ClientPay.multipleinvoices.text_invoice'] = 'Factura #';
$lang['ClientPay.multipleinvoices.text_due'] = 'Suma datorată';
$lang['ClientPay.multipleinvoices.text_amount'] = 'Suma de plătit';
$lang['ClientPay.multipleinvoices.text_edit_amounts'] = 'Efectuați în schimb o plată parțială';
$lang['ClientPay.method.invoice_amount'] = 'Suma';
$lang['ClientPay.method.invoice_quantity'] = 'Cantitate';
$lang['ClientPay.method.invoice_description'] = 'Descriere';
$lang['ClientPay.method.heading_invoice'] = 'Factura #%1$s';
$lang['ClientPay.method.no_options'] = 'Nu există opțiuni de plată disponibile.';
$lang['ClientPay.method.field_credit_submit'] = 'Aplicați creditul și continuați';
$lang['ClientPay.method.field_submit'] = 'Revizuire și confirmare';
$lang['ClientPay.method.field_apply_credit'] = 'Aplicați credit (%1$s disponibil)';
$lang['ClientPay.method.field_paymentaccount_ach'] = 'Conturi ACH';
$lang['ClientPay.method.field_paymentaccount_autodebit'] = '(Auto Debit) %1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.field_paymentaccount_cc'] = 'Conturi de card de credit';
$lang['ClientPay.method.field_paymentaccount'] = '%1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.heading_payment_options'] = 'Opțiuni de plată';
$lang['ClientPay.method.heading_other_payment_options'] = 'Alte opțiuni de plată';
$lang['ClientPay.method.field_newdetails'] = 'Noi detalii de plată';
$lang['ClientPay.method.field_useaccount'] = 'Utilizați contul de plăți';
$lang['ClientPay.method.boxtitle_method'] = 'Efectuați plata';
$lang['ClientPay.method.page_title'] = 'Client %1$s Metoda de plată';
$lang['ClientPay.index.field_submit'] = 'Continuă';
$lang['ClientPay.index.field_credit'] = 'Alte plăți Suma de plată';
$lang['ClientPay.index.boxtitle_pay'] = 'Efectuați plata';
$lang['ClientPay.index.page_title'] = 'Clientul %1$s Plătește';
$lang['ClientPay.!error.payment_authorize'] = 'Plata nu a putut fi autorizată pentru contul de plăți selectat.  Vă rugăm să selectați un alt cont sau să încercați din nou.';
$lang['ClientPay.!error.invoice_voided'] = 'Această factură a fost anulată și nu poate fi plătită.';
$lang['ClientPay.!error.payment_amounts'] = 'Vă rugăm să selectați facturile de plătit sau să introduceți o altă sumă de plată.';
$lang['ClientPay.!error.invalid_amount'] = 'Alte sume de plată nu pot fi negative.';
$lang['ClientPay.!error.invalid_details'] = 'Vă rugăm să selectați o opțiune de plată.';
$lang['ClientPay.!info.ach_verification_redirect'] = 'Trebuie să verificați acest cont înainte de a-l putea utiliza pentru a efectua o plată. Acest proces vă va redirecționa de la pagina curentă.';
$lang['ClientPay.!info.ach_verification'] = 'Trebuie să verificați acest cont înainte de a-l putea utiliza pentru a efectua o plată.';
$lang['ClientPay.!info.unverified_email_button'] = 'Trimiteți din nou e-mailul de verificare';
$lang['ClientPay.!info.unverified_email'] = 'Un link a fost trimis la adresa de e-mail pe care ați furnizat-o. Vă rugăm să faceți clic pe linkul din e-mail pentru a verifica adresa de e-mail înainte de a efectua plata.';
$lang['ClientPay.!success.invoice_paid'] = 'Această factură a fost plătită anterior.';
$lang['ClientPay.!success.credit_partial_processed'] = 'Creditele disponibile au fost aplicate, dar există încă un sold. Vă rugăm să finalizați această tranzacție prin plata restului de mai jos.';
$lang['ClientPay.!success.credit_full_processed'] = 'Creditele disponibile au fost aplicate.';
$lang['ClientPay.!success.payment_processed'] = 'Plata a fost procesată cu succes pentru %1$s. Numărul tranzacției: %2$s';
$lang['ClientPay.method.invoice_balance_due'] = 'Sold datorat';
$lang['ClientPay.method.invoice_paid_amount'] = 'Suma plătită';
$lang['ClientPay.method.invoice_total'] = 'Total factură';
$lang['ClientPay.index.text_credit_max_only'] = 'Suma maximă: %1$s';
$lang['ClientPay.index.text_credit_min_only'] = 'Suma minimă: %1$s';
$lang['ClientPay.index.text_credit_limits'] = 'Suma minimă: %1$s - Suma maximă: %2$s';
$lang['ClientPay.!error.credit_maximum'] = 'Valoarea creditului nu poate depăși %1$s.';
$lang['ClientPay.!error.credit_minimum'] = 'Valoarea creditului trebuie să fie de cel puțin %1$s.';

