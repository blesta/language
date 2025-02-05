<?php
/**
 * Transactions
 *
 * @package blesta
 * @subpackage blesta.language.sv_se
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Transactions.debit_types.credit'] = 'Kredit';
$lang['Transactions.debit_types.debit'] = 'Debet';
$lang['Transactions.status.returned'] = 'Återvände';
$lang['Transactions.status.refunded'] = 'Återbetalda';
$lang['Transactions.status.pending'] = 'Pågående';
$lang['Transactions.status.error'] = 'Fel';
$lang['Transactions.status.void'] = 'Tomrum';
$lang['Transactions.status.declined'] = 'Deklinerad';
$lang['Transactions.status.approved'] = 'Godkänd';
$lang['Transactions.types.other'] = 'Andra';
$lang['Transactions.types.ach'] = 'ACH';
$lang['Transactions.types.cc'] = 'Kreditkort';
$lang['Transactions.!error.type_id.exists'] = 'Ogiltigt ID för transaktionstyp.';
$lang['Transactions.!error.is_lang.length'] = 'is_lang längd får inte överstiga 1 tecken.';
$lang['Transactions.!error.is_lang.format'] = 'is_lang måste vara ett tal.';
$lang['Transactions.!error.type.valid'] = 'Vänligen välj en giltig typ.';
$lang['Transactions.!error.name.length'] = 'Namnlängden får inte överstiga 32 tecken.';
$lang['Transactions.!error.name.empty'] = 'Vänligen ange ett namn.';
$lang['Transactions.!error.currency.mismatch'] = 'Den angivna valutan matchar inte minst en av de tillhörande fakturorna.';
$lang['Transactions.!error.currency.missing'] = 'Vänligen ange en valuta.';
$lang['Transactions.!error.date.format'] = 'Det angivna datumet är ogiltigt.';
$lang['Transactions.!error.amounts.positive'] = 'Ett eller flera belopp att betala-värden är negativa. Se till att varje belopp att betala är noll eller mer.';
$lang['Transactions.!error.amounts.overage'] = 'Ett eller flera Betalningsbelopp kunde inte tillämpas på den angivna fakturan. Kontrollera att Belopp att betala inte överstiger Förfallet belopp på fakturan, att fakturan är öppen och att summan av Belopp att betala-värdena inte överstiger Betalnings- eller Kreditbeloppet.';
$lang['Transactions.!error.invoice_id.exists'] = 'Ogiltigt faktura-ID.';
$lang['Transactions.!error.transaction_id.currency_matches'] = 'Fakturabeloppen kunde inte tillämpas eftersom de inte matchar transaktionens valuta.';
$lang['Transactions.!error.message.length'] = 'Meddelandet får inte vara längre än 255 tecken.';
$lang['Transactions.!error.date_added.format'] = 'Transaktionsdatum kan inte vara ett framtida datum.';
$lang['Transactions.!error.transaction_id.exists'] = 'Ogiltigt transaktions-ID.';
$lang['Transactions.!error.status.format'] = 'Ogiltig transaktionsstatus.';
$lang['Transactions.!error.reference_id.length'] = 'Referens-ID:ts längd får inte överstiga 128 tecken.';
$lang['Transactions.!error.parent_transaction_id.length'] = 'Längden på Parent Transaction ID får inte överstiga 128 tecken.';
$lang['Transactions.!error.transaction_id.length'] = 'Transaktions-ID:t får inte vara längre än 128 tecken.';
$lang['Transactions.!error.gateway_id.exists'] = 'Ogiltigt gateway-ID.';
$lang['Transactions.!error.transaction_type_id.exists'] = 'Ogiltigt ID för transaktionstyp.';
$lang['Transactions.!error.type.format'] = 'Ogiltig transaktionstyp.';
$lang['Transactions.!error.currency.length'] = 'Valutan måste vara 3 tecken lång.';
$lang['Transactions.!error.amount.format'] = 'Beloppet måste vara ett tal.';
$lang['Transactions.!error.client_id.exists'] = 'Ogiltigt klient-ID.';

