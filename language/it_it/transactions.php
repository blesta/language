<?php
/**
 * Transactions
 *
 * @package blesta
 * @subpackage blesta.language.it_it
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Transactions.debit_types.credit'] = 'Credito';
$lang['Transactions.debit_types.debit'] = 'Debito';
$lang['Transactions.status.returned'] = 'Restituito';
$lang['Transactions.status.refunded'] = 'Rimborsato';
$lang['Transactions.status.pending'] = 'In attesa';
$lang['Transactions.status.error'] = 'Errore';
$lang['Transactions.status.void'] = 'Vuoto';
$lang['Transactions.status.declined'] = 'Declinato';
$lang['Transactions.status.approved'] = 'Approvato';
$lang['Transactions.types.other'] = 'Altro';
$lang['Transactions.types.ach'] = 'ACH';
$lang['Transactions.types.cc'] = 'Carta di credito';
$lang['Transactions.!error.type_id.exists'] = 'ID del tipo di transazione non valido.';
$lang['Transactions.!error.is_lang.length'] = 'La lunghezza di is_lang non può superare 1 carattere.';
$lang['Transactions.!error.is_lang.format'] = 'is_lang deve essere un numero.';
$lang['Transactions.!error.type.valid'] = 'Selezionare un tipo valido.';
$lang['Transactions.!error.name.length'] = 'La lunghezza del nome non può superare i 32 caratteri.';
$lang['Transactions.!error.name.empty'] = 'Inserire un nome.';
$lang['Transactions.!error.currency.mismatch'] = 'La valuta indicata non corrisponde ad almeno una delle fatture associate.';
$lang['Transactions.!error.currency.missing'] = 'Impostare una valuta.';
$lang['Transactions.!error.date.format'] = 'La data applicata non è valida.';
$lang['Transactions.!error.amounts.positive'] = 'Uno o più valori dell\'Importo da pagare sono negativi. Assicurarsi che ogni valore di Importo da pagare sia pari o superiore a zero.';
$lang['Transactions.!error.amounts.overage'] = 'Non è stato possibile applicare uno o più valori di Importo da pagare alla fattura specificata. Assicurarsi che l\'Importo da pagare non superi l\'Importo dovuto della fattura, che la fattura sia aperta e che la somma dei valori dell\'Importo da pagare non superi l\'Importo di pagamento o di credito.';
$lang['Transactions.!error.invoice_id.exists'] = 'ID fattura non valido.';
$lang['Transactions.!error.transaction_id.currency_matches'] = 'Non è stato possibile applicare gli importi della fattura perché non corrispondono alla valuta della transazione.';
$lang['Transactions.!error.message.length'] = 'La lunghezza del messaggio non può superare i 255 caratteri.';
$lang['Transactions.!error.date_added.format'] = 'La data della transazione non può essere una data futura.';
$lang['Transactions.!error.transaction_id.exists'] = 'ID transazione non valido.';
$lang['Transactions.!error.status.format'] = 'Stato della transazione non valido.';
$lang['Transactions.!error.reference_id.length'] = 'La lunghezza dell\'ID di riferimento non può superare i 128 caratteri.';
$lang['Transactions.!error.parent_transaction_id.length'] = 'La lunghezza dell\'ID della transazione padre non può superare i 128 caratteri.';
$lang['Transactions.!error.transaction_id.length'] = 'La lunghezza dell\'ID transazione non può superare i 128 caratteri.';
$lang['Transactions.!error.gateway_id.exists'] = 'ID gateway non valido.';
$lang['Transactions.!error.transaction_type_id.exists'] = 'ID del tipo di transazione non valido.';
$lang['Transactions.!error.type.format'] = 'Tipo di transazione non valido.';
$lang['Transactions.!error.currency.length'] = 'La valuta deve avere una lunghezza di 3 caratteri.';
$lang['Transactions.!error.amount.format'] = 'L\'importo deve essere un numero.';
$lang['Transactions.!error.client_id.exists'] = 'ID cliente non valido.';

