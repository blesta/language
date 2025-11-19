<?php
/**
 * Client Pay
 *
 * @package blesta
 * @subpackage blesta.language.sv_se
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientPay.setcontactview.text_none'] = 'Ingen';
$lang['ClientPay.received.text_try_again'] = 'Försök igen';
$lang['ClientPay.received.invoices'] = 'Faktura #';
$lang['ClientPay.received.amount'] = 'Belopp';
$lang['ClientPay.received.transaction_id'] = 'Transaktions-ID';
$lang['ClientPay.received.statement'] = 'Din betalning håller på att behandlas.';
$lang['ClientPay.received.boxtitle_received'] = 'Tack!';
$lang['ClientPay.received.page_title'] = 'Kund %1$s Betalning mottagen';
$lang['ClientPay.confirm.description_credit'] = 'Betalningskredit';
$lang['ClientPay.confirm.description_invoice_number'] = '#%1$s';
$lang['ClientPay.confirm.description_invoice_separator'] = ',';
$lang['ClientPay.confirm.description_invoice'] = 'Faktura #%1$s';
$lang['ClientPay.confirm.field_edit'] = 'Redigera betalning';
$lang['ClientPay.confirm.field_submit'] = 'Skicka betalning';
$lang['ClientPay.confirm.total'] = 'Totalt:';
$lang['ClientPay.confirm.account_exp'] = 'går ut %1$s';
$lang['ClientPay.confirm.account_info_type'] = '%1$s';
$lang['ClientPay.confirm.account_info'] = '%1$s (%2$s) som slutar i %3$s';
$lang['ClientPay.confirm.payment_details'] = 'Betalningsuppgifter';
$lang['ClientPay.confirm.boxtitle_confirm'] = 'Bekräfta betalning';
$lang['ClientPay.confirm.page_title'] = 'Kund %1$s Bekräfta betalning';
$lang['ClientPay.multipleinvoices.no_results'] = 'Det finns inga fakturor i denna valuta.';
$lang['ClientPay.multipleinvoices.text_datedue'] = 'Datum Förfallodag';
$lang['ClientPay.multipleinvoices.text_invoice'] = 'Faktura #';
$lang['ClientPay.multipleinvoices.text_due'] = 'Förfallet belopp';
$lang['ClientPay.multipleinvoices.text_amount'] = 'Belopp att betala';
$lang['ClientPay.multipleinvoices.text_edit_amounts'] = 'Gör en delbetalning istället';
$lang['ClientPay.method.invoice_amount'] = 'Belopp';
$lang['ClientPay.method.invoice_quantity'] = 'Antal';
$lang['ClientPay.method.invoice_description'] = 'Beskrivning';
$lang['ClientPay.method.heading_invoice'] = 'Faktura #%1$s';
$lang['ClientPay.method.no_options'] = 'Det finns inga tillgängliga betalningsalternativ.';
$lang['ClientPay.method.field_credit_submit'] = 'Ansök om kredit och fortsätt';
$lang['ClientPay.method.field_submit'] = 'Granska och bekräfta';
$lang['ClientPay.method.field_apply_credit'] = 'Ansök om kredit (%1$s tillgängliga)';
$lang['ClientPay.method.field_paymentaccount_ach'] = 'ACH-konton';
$lang['ClientPay.method.field_paymentaccount_autodebit'] = '(Automatisk debitering) %1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.field_paymentaccount_cc'] = 'Konton för kreditkort';
$lang['ClientPay.method.field_paymentaccount'] = '%1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.heading_payment_options'] = 'Betalningsalternativ';
$lang['ClientPay.method.heading_other_payment_options'] = 'Andra betalningsalternativ';
$lang['ClientPay.method.field_newdetails'] = 'Nya betalningsuppgifter';
$lang['ClientPay.method.field_useaccount'] = 'Använd betalkonto';
$lang['ClientPay.method.boxtitle_method'] = 'Gör betalning';
$lang['ClientPay.method.page_title'] = 'Kund %1$s Betalningsmetod';
$lang['ClientPay.index.field_submit'] = 'Fortsätta';
$lang['ClientPay.index.field_credit'] = 'Annat betalningsbelopp';
$lang['ClientPay.index.boxtitle_pay'] = 'Gör betalning';
$lang['ClientPay.index.page_title'] = 'Klient %1$s Betala';
$lang['ClientPay.!error.payment_authorize'] = 'Betalningen kunde inte godkännas för det valda betalkontot.  Välj ett annat konto eller försök igen.';
$lang['ClientPay.!error.invoice_voided'] = 'Denna faktura har makulerats och kan inte betalas.';
$lang['ClientPay.!error.payment_amounts'] = 'Välj fakturor att betala eller ange ett annat betalningsbelopp.';
$lang['ClientPay.!error.invalid_amount'] = 'Övriga betalningsbelopp får inte vara negativa.';
$lang['ClientPay.!error.invalid_details'] = 'Vänligen välj ett betalningsalternativ.';
$lang['ClientPay.!info.ach_verification_redirect'] = 'Du måste verifiera detta konto innan du kan använda det för att göra en betalning. Denna process kommer att omdirigera dig bort från den aktuella sidan.';
$lang['ClientPay.!info.ach_verification'] = 'Du måste verifiera detta konto innan du kan använda det för att göra en betalning.';
$lang['ClientPay.!info.unverified_email_button'] = 'Skicka verifieringsmail igen';
$lang['ClientPay.!info.unverified_email'] = 'En länk skickades till den e-postadress du angav. Klicka på länken i e-postmeddelandet för att verifiera din e-postadress innan du fortsätter att betala.';
$lang['ClientPay.!success.invoice_paid'] = 'Denna faktura har tidigare betalats.';
$lang['ClientPay.!success.credit_partial_processed'] = 'De tillgängliga krediterna har använts, men det finns fortfarande ett saldo. Vänligen slutför denna transaktion genom att betala återstoden nedan.';
$lang['ClientPay.!success.credit_full_processed'] = 'Tillgängliga krediter har utnyttjats.';
$lang['ClientPay.!success.payment_processed'] = 'Betalningen behandlades framgångsrikt för %1$s. Transaktionsnummer: %2$s';
$lang['ClientPay.method.invoice_balance_due'] = 'Förfallna skulder';
$lang['ClientPay.method.invoice_paid_amount'] = 'Utbetalat belopp';
$lang['ClientPay.method.invoice_total'] = 'Faktura Totalt';
$lang['ClientPay.index.text_credit_max_only'] = 'Högsta belopp: %1$s';
$lang['ClientPay.index.text_credit_min_only'] = 'Lägsta belopp: %1$s';
$lang['ClientPay.index.text_credit_limits'] = 'Lägsta belopp: %1$s - Högsta belopp: %2$s';
$lang['ClientPay.!error.credit_maximum'] = 'Kreditbeloppet kan inte överstiga %1$s.';
$lang['ClientPay.!error.credit_minimum'] = 'Kreditbeloppet måste vara minst %1$s.';

