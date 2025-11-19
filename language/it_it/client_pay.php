<?php
/**
 * Client Pay
 *
 * @package blesta
 * @subpackage blesta.language.it_it
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientPay.setcontactview.text_none'] = 'Nessuno';
$lang['ClientPay.received.text_try_again'] = 'Riprova';
$lang['ClientPay.received.invoices'] = 'Fattura #';
$lang['ClientPay.received.amount'] = 'Importo';
$lang['ClientPay.received.transaction_id'] = 'ID transazione';
$lang['ClientPay.received.statement'] = 'Il pagamento è in corso di elaborazione.';
$lang['ClientPay.received.boxtitle_received'] = 'Grazie!';
$lang['ClientPay.received.page_title'] = 'Cliente %1$s Pagamento ricevuto';
$lang['ClientPay.confirm.description_credit'] = 'Credito di pagamento';
$lang['ClientPay.confirm.description_invoice_number'] = '#%1$s';
$lang['ClientPay.confirm.description_invoice_separator'] = ',';
$lang['ClientPay.confirm.description_invoice'] = 'Fattura #%1$s';
$lang['ClientPay.confirm.field_edit'] = 'Modifica del pagamento';
$lang['ClientPay.confirm.field_submit'] = 'Invia il pagamento';
$lang['ClientPay.confirm.total'] = 'Totale:';
$lang['ClientPay.confirm.account_exp'] = 'scadenza %1$s';
$lang['ClientPay.confirm.account_info_type'] = '%1$s';
$lang['ClientPay.confirm.account_info'] = '%1$s (%2$s) che termina in %3$s';
$lang['ClientPay.confirm.payment_details'] = 'Dettagli sul pagamento';
$lang['ClientPay.confirm.boxtitle_confirm'] = 'Confermare il pagamento';
$lang['ClientPay.confirm.page_title'] = 'Il cliente %1$s conferma il pagamento';
$lang['ClientPay.multipleinvoices.no_results'] = 'Non ci sono fatture in questa valuta.';
$lang['ClientPay.multipleinvoices.text_datedue'] = 'Data di scadenza';
$lang['ClientPay.multipleinvoices.text_invoice'] = 'Fattura #';
$lang['ClientPay.multipleinvoices.text_due'] = 'Importo dovuto';
$lang['ClientPay.multipleinvoices.text_amount'] = 'Importo da pagare';
$lang['ClientPay.multipleinvoices.text_edit_amounts'] = 'Effettuate invece un pagamento parziale';
$lang['ClientPay.method.invoice_amount'] = 'Importo';
$lang['ClientPay.method.invoice_quantity'] = 'Quantità';
$lang['ClientPay.method.invoice_description'] = 'Descrizione';
$lang['ClientPay.method.heading_invoice'] = 'Fattura #%1$s';
$lang['ClientPay.method.no_options'] = 'Non sono disponibili opzioni di pagamento.';
$lang['ClientPay.method.field_credit_submit'] = 'Applicare il credito e continuare';
$lang['ClientPay.method.field_submit'] = 'Revisione e conferma';
$lang['ClientPay.method.field_apply_credit'] = 'Richiesta di credito (%1$s disponibile)';
$lang['ClientPay.method.field_paymentaccount_ach'] = 'Conti ACH';
$lang['ClientPay.method.field_paymentaccount_autodebit'] = '(Addebito automatico) %1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.field_paymentaccount_cc'] = 'Conti delle carte di credito';
$lang['ClientPay.method.field_paymentaccount'] = '%1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.heading_payment_options'] = 'Opzioni di pagamento';
$lang['ClientPay.method.heading_other_payment_options'] = 'Altre opzioni di pagamento';
$lang['ClientPay.method.field_newdetails'] = 'Nuovi dettagli di pagamento';
$lang['ClientPay.method.field_useaccount'] = 'Utilizzare il conto di pagamento';
$lang['ClientPay.method.boxtitle_method'] = 'Effettuare il pagamento';
$lang['ClientPay.method.page_title'] = 'Cliente %1$s Metodo di pagamento';
$lang['ClientPay.index.field_submit'] = 'Continua';
$lang['ClientPay.index.field_credit'] = 'Altro Importo di pagamento';
$lang['ClientPay.index.boxtitle_pay'] = 'Effettuare il pagamento';
$lang['ClientPay.index.page_title'] = 'Cliente %1$s Paga';
$lang['ClientPay.!error.payment_authorize'] = 'Non è stato possibile autorizzare il pagamento per il conto di pagamento selezionato.  Selezionare un altro conto o riprovare.';
$lang['ClientPay.!error.invoice_voided'] = 'Questa fattura è stata annullata e non può essere pagata.';
$lang['ClientPay.!error.payment_amounts'] = 'Selezionare le fatture da pagare o inserire un altro importo.';
$lang['ClientPay.!error.invalid_amount'] = 'Altri importi di pagamento non possono essere negativi.';
$lang['ClientPay.!error.invalid_details'] = 'Selezionare un\'opzione di pagamento.';
$lang['ClientPay.!info.ach_verification_redirect'] = 'È necessario verificare questo conto prima di poterlo utilizzare per effettuare un pagamento. Questo processo vi reindirizzerà dalla pagina corrente.';
$lang['ClientPay.!info.ach_verification'] = 'È necessario verificare questo conto prima di poterlo utilizzare per effettuare un pagamento.';
$lang['ClientPay.!info.unverified_email_button'] = 'Reinvio dell\'e-mail di verifica';
$lang['ClientPay.!info.unverified_email'] = 'È stato inviato un link all\'indirizzo e-mail fornito. Fare clic sul link contenuto nell\'e-mail per verificare l\'indirizzo e-mail prima di procedere al pagamento.';
$lang['ClientPay.!success.invoice_paid'] = 'Questa fattura è stata pagata in precedenza.';
$lang['ClientPay.!success.credit_partial_processed'] = 'I crediti disponibili sono stati applicati, ma esiste ancora un saldo. Si prega di completare la transazione pagando il saldo qui sotto.';
$lang['ClientPay.!success.credit_full_processed'] = 'I crediti disponibili sono stati applicati.';
$lang['ClientPay.!success.payment_processed'] = 'Il pagamento è stato elaborato con successo per %1$s. Numero di transazione: %2$s';
$lang['ClientPay.method.invoice_balance_due'] = 'Saldo dovuto';
$lang['ClientPay.method.invoice_paid_amount'] = 'Importo pagato';
$lang['ClientPay.method.invoice_total'] = 'Totale fattura';
$lang['ClientPay.index.text_credit_max_only'] = 'Importo massimo: %1$s';
$lang['ClientPay.index.text_credit_min_only'] = 'Importo minimo: %1$s';
$lang['ClientPay.index.text_credit_limits'] = 'Importo minimo: %1$s - Importo massimo: %2$s';
$lang['ClientPay.!error.credit_maximum'] = 'L\'importo del credito non può superare %1$s.';
$lang['ClientPay.!error.credit_minimum'] = 'L\'importo del credito deve essere almeno pari a %1$s.';

