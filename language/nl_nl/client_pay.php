<?php
/**
 * Client Pay
 *
 * @package blesta
 * @subpackage blesta.language.nl_nl
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientPay.setcontactview.text_none'] = 'Geen';
$lang['ClientPay.received.text_try_again'] = 'Probeer het opnieuw';
$lang['ClientPay.received.invoices'] = 'Factuur #';
$lang['ClientPay.received.amount'] = 'Bedrag';
$lang['ClientPay.received.transaction_id'] = 'Transactie-ID';
$lang['ClientPay.received.statement'] = 'Je betaling wordt verwerkt.';
$lang['ClientPay.received.boxtitle_received'] = 'Bedankt!';
$lang['ClientPay.received.page_title'] = 'Klant %1$s Betaling ontvangen';
$lang['ClientPay.confirm.description_credit'] = 'Betalingskrediet';
$lang['ClientPay.confirm.description_invoice_number'] = '#%1$s';
$lang['ClientPay.confirm.description_invoice_separator'] = ',';
$lang['ClientPay.confirm.description_invoice'] = 'Factuur #%1$s';
$lang['ClientPay.confirm.field_edit'] = 'Betaling bewerken';
$lang['ClientPay.confirm.field_submit'] = 'Betaling indienen';
$lang['ClientPay.confirm.total'] = 'Totaal:';
$lang['ClientPay.confirm.account_exp'] = 'verloopt %1$s';
$lang['ClientPay.confirm.account_info_type'] = '%1$s';
$lang['ClientPay.confirm.account_info'] = '%1$s (%2$s) eindigend op %3$s';
$lang['ClientPay.confirm.payment_details'] = 'Betalingsgegevens';
$lang['ClientPay.confirm.boxtitle_confirm'] = 'Betaling bevestigen';
$lang['ClientPay.confirm.page_title'] = 'Klant %1$s Bevestigt betaling';
$lang['ClientPay.multipleinvoices.no_results'] = 'Er zijn geen facturen in deze valuta.';
$lang['ClientPay.multipleinvoices.text_datedue'] = 'Datum';
$lang['ClientPay.multipleinvoices.text_invoice'] = 'Factuur #';
$lang['ClientPay.multipleinvoices.text_due'] = 'Verschuldigd bedrag';
$lang['ClientPay.multipleinvoices.text_amount'] = 'Te betalen bedrag';
$lang['ClientPay.multipleinvoices.text_edit_amounts'] = 'Doe in plaats daarvan een gedeeltelijke betaling';
$lang['ClientPay.method.invoice_amount'] = 'Bedrag';
$lang['ClientPay.method.invoice_quantity'] = 'Hoeveelheid';
$lang['ClientPay.method.invoice_description'] = 'Beschrijving';
$lang['ClientPay.method.heading_invoice'] = 'Factuur #%1$s';
$lang['ClientPay.method.no_options'] = 'Er zijn geen betalingsopties beschikbaar.';
$lang['ClientPay.method.field_credit_submit'] = 'Krediet aanvragen en doorgaan';
$lang['ClientPay.method.field_submit'] = 'Controleren en bevestigen';
$lang['ClientPay.method.field_apply_credit'] = 'Krediet aanvragen (%1$s beschikbaar)';
$lang['ClientPay.method.field_paymentaccount_ach'] = 'ACH Rekeningen';
$lang['ClientPay.method.field_paymentaccount_autodebit'] = '(Automatische incasso) %1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.field_paymentaccount_cc'] = 'Creditcardrekeningen';
$lang['ClientPay.method.field_paymentaccount'] = '%1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.heading_payment_options'] = 'Betaalmogelijkheden';
$lang['ClientPay.method.heading_other_payment_options'] = 'Andere betalingsopties';
$lang['ClientPay.method.field_newdetails'] = 'Nieuwe betalingsgegevens';
$lang['ClientPay.method.field_useaccount'] = 'Gebruik betaalrekening';
$lang['ClientPay.method.boxtitle_method'] = 'Betalen';
$lang['ClientPay.method.page_title'] = 'Klant %1$s Betaalmethode';
$lang['ClientPay.index.field_submit'] = 'Ga verder';
$lang['ClientPay.index.field_credit'] = 'Andere Betaling Bedrag';
$lang['ClientPay.index.boxtitle_pay'] = 'Betalen';
$lang['ClientPay.index.page_title'] = 'Klant %1$s betalen';
$lang['ClientPay.!error.payment_authorize'] = 'De betaling kon niet worden geautoriseerd voor de geselecteerde betaalrekening.  Selecteer een andere rekening of probeer het opnieuw.';
$lang['ClientPay.!error.invoice_voided'] = 'Deze factuur is ongeldig verklaard en kan niet worden betaald.';
$lang['ClientPay.!error.payment_amounts'] = 'Selecteer facturen om te betalen of voer een ander betalingsbedrag in.';
$lang['ClientPay.!error.invalid_amount'] = 'Andere betalingsbedragen mogen niet negatief zijn.';
$lang['ClientPay.!error.invalid_details'] = 'Selecteer een betalingsoptie.';
$lang['ClientPay.!info.ach_verification_redirect'] = 'Je moet deze account verifiëren voordat je er een betaling mee kunt doen. Dit proces leidt je weg van de huidige pagina.';
$lang['ClientPay.!info.ach_verification'] = 'Je moet deze account verifiëren voordat je er een betaling mee kunt doen.';
$lang['ClientPay.!info.unverified_email_button'] = 'Verificatie-e-mail opnieuw verzenden';
$lang['ClientPay.!info.unverified_email'] = 'Er is een link verzonden naar het e-mailadres dat u hebt opgegeven. Klik op de link in de e-mail om je e-mailadres te verifiëren voordat je doorgaat met betalen.';
$lang['ClientPay.!success.invoice_paid'] = 'Deze factuur is eerder betaald.';
$lang['ClientPay.!success.credit_partial_processed'] = 'De beschikbare credits zijn toegepast, maar er is nog een saldo. Voltooi deze transactie door het resterende bedrag hieronder te betalen.';
$lang['ClientPay.!success.credit_full_processed'] = 'De beschikbare kredieten zijn toegepast.';
$lang['ClientPay.!success.payment_processed'] = 'De betaling is succesvol verwerkt voor %1$s. Transactienummer: %2$s';
$lang['ClientPay.method.invoice_balance_due'] = 'Saldo';
$lang['ClientPay.method.invoice_paid_amount'] = 'Betaald Bedrag';
$lang['ClientPay.method.invoice_total'] = 'Factuur Totaal';
$lang['ClientPay.index.text_credit_max_only'] = 'Maximumbedrag: %1$s';
$lang['ClientPay.index.text_credit_min_only'] = 'Minimumbedrag: %1$s';
$lang['ClientPay.index.text_credit_limits'] = 'Minimumbedrag: %1$s - Maximumbedrag: %2$s';
$lang['ClientPay.!error.credit_maximum'] = 'Het kredietbedrag kan niet hoger zijn dan %1$s.';
$lang['ClientPay.!error.credit_minimum'] = 'Het kredietbedrag moet minstens %1$s zijn.';

