<?php
/**
 * Transactions
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Transactions.!error.client_id.exists'] = 'Ugyldigt klient-ID.';
$lang['Transactions.!error.amount.format'] = 'Beløbet skal være et tal.';
$lang['Transactions.!error.currency.length'] = 'Valutaen skal være 3 tegn lang.';
$lang['Transactions.!error.type.format'] = 'Ugyldig transaktionstype.';
$lang['Transactions.!error.transaction_type_id.exists'] = 'Ugyldigt ID for transaktionstype.';
$lang['Transactions.!error.gateway_id.exists'] = 'Ugyldigt gateway-ID.';
$lang['Transactions.!error.transaction_id.length'] = 'Transaktions-ID\'ets længde må ikke overstige 128 tegn.';
$lang['Transactions.!error.parent_transaction_id.length'] = 'Længden på Parent Transaction ID må ikke overstige 128 tegn.';
$lang['Transactions.!error.reference_id.length'] = 'Reference-ID-længden må ikke overstige 128 tegn.';
$lang['Transactions.!error.status.format'] = 'Ugyldig transaktionsstatus.';
$lang['Transactions.!error.transaction_id.exists'] = 'Ugyldigt transaktions-ID.';
$lang['Transactions.!error.date_added.format'] = 'Transaktionsdatoen kan ikke være en fremtidig dato.';
$lang['Transactions.!error.message.length'] = 'Meddelelsens længde må ikke overstige 255 tegn.';
$lang['Transactions.!error.transaction_id.currency_matches'] = 'Fakturabeløbene kunne ikke anvendes, fordi de ikke stemmer overens med transaktionens valuta.';
$lang['Transactions.!error.invoice_id.exists'] = 'Ugyldigt faktura-ID.';
$lang['Transactions.!error.amounts.overage'] = 'En eller flere beløb til betaling-værdier kunne ikke anvendes på den angivne faktura. Sørg for, at Beløb til betaling ikke overstiger Skyldigt beløb på fakturaen, at fakturaen er åben, og at summen af Beløb til betaling-værdierne ikke overstiger Betalings- eller Kreditbeløbet.';
$lang['Transactions.!error.amounts.positive'] = 'En eller flere beløb at betale-værdier er negative. Sørg for, at alle Amount to Pay-værdier er nul eller derover.';
$lang['Transactions.!error.date.format'] = 'Den anvendte dato er ugyldig.';
$lang['Transactions.!error.currency.missing'] = 'Angiv venligst en valuta.';
$lang['Transactions.!error.currency.mismatch'] = 'Den angivne valuta stemmer ikke overens med mindst én af de tilknyttede fakturaer.';
$lang['Transactions.!error.name.empty'] = 'Indtast venligst et navn.';
$lang['Transactions.!error.name.length'] = 'Navnets længde må ikke overstige 32 tegn.';
$lang['Transactions.!error.type.valid'] = 'Vælg venligst en gyldig type.';
$lang['Transactions.!error.is_lang.format'] = 'is_lang skal være et tal.';
$lang['Transactions.!error.is_lang.length'] = 'is_lang-længden må ikke overstige 1 tegn.';
$lang['Transactions.!error.type_id.exists'] = 'Ugyldigt ID for transaktionstype.';
$lang['Transactions.types.cc'] = 'Kreditkort';
$lang['Transactions.types.ach'] = 'ACH';
$lang['Transactions.types.other'] = 'Andet';
$lang['Transactions.status.approved'] = 'Godkendt';
$lang['Transactions.status.declined'] = 'Afvist';
$lang['Transactions.status.void'] = 'Tomrum';
$lang['Transactions.status.error'] = 'Fejl';
$lang['Transactions.status.pending'] = 'Afventer';
$lang['Transactions.status.refunded'] = 'Refunderet';
$lang['Transactions.status.returned'] = 'Returneret';
$lang['Transactions.debit_types.debit'] = 'Debet';
$lang['Transactions.debit_types.credit'] = 'Kredit';

