<?php
/**
 * Client Pay
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientPay.setcontactview.text_none'] = 'Keine';
$lang['ClientPay.received.text_try_again'] = 'Erneut versuchen';
$lang['ClientPay.received.invoices'] = 'Invoice #';
$lang['ClientPay.received.amount'] = 'Betrag';
$lang['ClientPay.received.transaction_id'] = 'Transaktions-ID';
$lang['ClientPay.received.statement'] = 'Ihre Zahlung wird gerade bearbeitet.';
$lang['ClientPay.received.boxtitle_received'] = 'Ich danke Ihnen!';
$lang['ClientPay.received.page_title'] = 'Kunde %1$s erhaltene Zahlung';
$lang['ClientPay.confirm.description_credit'] = 'Zahlung Kredit';
$lang['ClientPay.confirm.description_invoice_number'] = '#%1$s';
$lang['ClientPay.confirm.description_invoice_separator'] = ',';
$lang['ClientPay.confirm.description_invoice'] = 'Rechnung #%1$s';
$lang['ClientPay.confirm.field_edit'] = 'Zahlung bearbeiten';
$lang['ClientPay.confirm.field_submit'] = 'Zahlung einreichen';
$lang['ClientPay.confirm.total'] = 'Insgesamt:';
$lang['ClientPay.confirm.account_exp'] = 'läuft %1$s ab';
$lang['ClientPay.confirm.account_info_type'] = '%1$s';
$lang['ClientPay.confirm.account_info'] = '%1$s (%2$s) endet in %3$s';
$lang['ClientPay.confirm.payment_details'] = 'Details zur Bezahlung';
$lang['ClientPay.confirm.boxtitle_confirm'] = 'Bestätigen Sie die Zahlung';
$lang['ClientPay.confirm.page_title'] = 'Kunde %1$s Zahlungsbestätigung';
$lang['ClientPay.multipleinvoices.no_results'] = 'Es gibt keine Rechnungen in dieser Währung.';
$lang['ClientPay.multipleinvoices.text_datedue'] = 'Datum Fällig';
$lang['ClientPay.multipleinvoices.text_invoice'] = 'Invoice #';
$lang['ClientPay.multipleinvoices.text_due'] = 'Fälliger Betrag';
$lang['ClientPay.multipleinvoices.text_amount'] = 'Zu zahlender Betrag';
$lang['ClientPay.multipleinvoices.text_edit_amounts'] = 'Stattdessen eine Teilzahlung leisten';
$lang['ClientPay.method.invoice_amount'] = 'Betrag';
$lang['ClientPay.method.invoice_quantity'] = 'Menge';
$lang['ClientPay.method.invoice_description'] = 'Beschreibung';
$lang['ClientPay.method.heading_invoice'] = 'Rechnung #%1$s';
$lang['ClientPay.method.no_options'] = 'Es sind keine Zahlungsoptionen verfügbar.';
$lang['ClientPay.method.field_credit_submit'] = 'Kredit beantragen und fortfahren';
$lang['ClientPay.method.field_submit'] = 'Überprüfen und Bestätigen';
$lang['ClientPay.method.field_apply_credit'] = 'Kredit beantragen (%1$s verfügbar)';
$lang['ClientPay.method.field_paymentaccount_ach'] = 'ACH-Konten';
$lang['ClientPay.method.field_paymentaccount_autodebit'] = '(Automatische Abbuchung) %1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.field_paymentaccount_cc'] = 'Kreditkarten-Konten';
$lang['ClientPay.method.field_paymentaccount'] = '%1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.heading_payment_options'] = 'Zahlungsoptionen';
$lang['ClientPay.method.heading_other_payment_options'] = 'Andere Zahlungsoptionen';
$lang['ClientPay.method.field_newdetails'] = 'Neue Zahlungsinformationen';
$lang['ClientPay.method.field_useaccount'] = 'Zahlungskonto verwenden';
$lang['ClientPay.method.boxtitle_method'] = 'Zahlung vornehmen';
$lang['ClientPay.method.page_title'] = 'Kunde %1$s Zahlungsmethode';
$lang['ClientPay.index.field_submit'] = 'Weiter';
$lang['ClientPay.index.field_credit'] = 'Sonstiger Zahlungsbetrag';
$lang['ClientPay.index.boxtitle_pay'] = 'Zahlung vornehmen';
$lang['ClientPay.index.page_title'] = 'Kunde %1$s bezahlen';
$lang['ClientPay.!error.payment_authorize'] = 'Die Zahlung konnte für das ausgewählte Zahlungskonto nicht autorisiert werden.  Bitte wählen Sie ein anderes Konto oder versuchen Sie es erneut.';
$lang['ClientPay.!error.invoice_voided'] = 'Diese Rechnung wurde für ungültig erklärt und kann nicht bezahlt werden.';
$lang['ClientPay.!error.payment_amounts'] = 'Bitte wählen Sie die zu zahlenden Rechnungen aus oder geben Sie einen anderen Zahlungsbetrag ein.';
$lang['ClientPay.!error.invalid_amount'] = 'Andere Zahlungsbeträge dürfen nicht negativ sein.';
$lang['ClientPay.!error.invalid_details'] = 'Bitte wählen Sie eine Zahlungsoption.';
$lang['ClientPay.!info.ach_verification_redirect'] = 'Sie müssen dieses Konto verifizieren, bevor Sie es für eine Zahlung verwenden können. Dieser Vorgang wird Sie von der aktuellen Seite wegführen.';
$lang['ClientPay.!info.ach_verification'] = 'Sie müssen dieses Konto verifizieren, bevor Sie es für eine Zahlung verwenden können.';
$lang['ClientPay.!info.unverified_email_button'] = 'Verifizierungs-E-Mail erneut senden';
$lang['ClientPay.!info.unverified_email'] = 'Es wurde ein Link an die von Ihnen angegebene E-Mail-Adresse gesendet. Bitte klicken Sie auf den Link in der E-Mail, um Ihre E-Mail-Adresse zu verifizieren, bevor Sie mit der Zahlung fortfahren.';
$lang['ClientPay.!success.invoice_paid'] = 'Diese Rechnung ist bereits bezahlt worden.';
$lang['ClientPay.!success.credit_partial_processed'] = 'Die verfügbaren Guthaben wurden aufgebraucht, aber es besteht noch ein Restbetrag. Bitte schließen Sie diese Transaktion ab, indem Sie den Restbetrag unten bezahlen.';
$lang['ClientPay.!success.credit_full_processed'] = 'Die verfügbaren Mittel wurden verwendet.';
$lang['ClientPay.!success.payment_processed'] = 'Die Zahlung für %1$s wurde erfolgreich verarbeitet. Transaktionsnummer: %2$s';
$lang['ClientPay.method.invoice_balance_due'] = 'Fälliger Saldo';
$lang['ClientPay.method.invoice_paid_amount'] = 'Bezahlter Betrag';
$lang['ClientPay.method.invoice_total'] = 'Rechnung Gesamt';
$lang['ClientPay.index.text_credit_max_only'] = 'Höchstbetrag: %1$s';
$lang['ClientPay.index.text_credit_min_only'] = 'Mindestbetrag: %1$s';
$lang['ClientPay.index.text_credit_limits'] = 'Mindestbetrag: %1$s - Höchstbetrag: %2$s';
$lang['ClientPay.!error.credit_maximum'] = 'Der Kreditbetrag darf %1$s nicht überschreiten.';
$lang['ClientPay.!error.credit_minimum'] = 'Der Kreditbetrag muss mindestens %1$s betragen.';

