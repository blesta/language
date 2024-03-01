<?php
/**
 * Transactions
 *
 * @package blesta
 * @subpackage blesta.language.cs_cz
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Transactions.debit_types.credit'] = 'Kredit';
$lang['Transactions.debit_types.debit'] = 'Debetní';
$lang['Transactions.status.returned'] = 'Vrácené';
$lang['Transactions.status.refunded'] = 'Vrácené prostředky';
$lang['Transactions.status.pending'] = 'Čeká se na';
$lang['Transactions.status.error'] = 'Chyba';
$lang['Transactions.status.void'] = 'Void';
$lang['Transactions.status.declined'] = 'Odmítnuto';
$lang['Transactions.status.approved'] = 'Schváleno';
$lang['Transactions.types.other'] = 'Další';
$lang['Transactions.types.ach'] = 'ACH';
$lang['Transactions.types.cc'] = 'Kreditní karta';
$lang['Transactions.!error.type_id.exists'] = 'Neplatné ID typu transakce.';
$lang['Transactions.!error.is_lang.length'] = 'délka is_lang nesmí překročit 1 znak.';
$lang['Transactions.!error.is_lang.format'] = 'is_lang musí být číslo.';
$lang['Transactions.!error.type.valid'] = 'Vyberte platný typ.';
$lang['Transactions.!error.name.length'] = 'Délka názvu nesmí překročit 32 znaků.';
$lang['Transactions.!error.name.empty'] = 'Zadejte prosím jméno.';
$lang['Transactions.!error.currency.mismatch'] = 'Zadaná měna neodpovídá alespoň jedné ze souvisejících faktur.';
$lang['Transactions.!error.currency.missing'] = 'Nastavte prosím měnu.';
$lang['Transactions.!error.date.format'] = 'Použité datum je neplatné.';
$lang['Transactions.!error.amounts.positive'] = 'Jedna nebo více hodnot položky Amount to Pay je záporná. Ujistěte se, že každá hodnota Amount to Pay je nulová nebo vyšší.';
$lang['Transactions.!error.amounts.overage'] = 'Na zadanou fakturu nebylo možné použít jednu nebo více hodnot Částka k úhradě. Ujistěte se, že částka k úhradě nepřevyšuje částku k úhradě na faktuře, že je faktura otevřená a že součet hodnot částky k úhradě nepřevyšuje částku platby nebo úvěru.';
$lang['Transactions.!error.invoice_id.exists'] = 'Neplatné ID faktury.';
$lang['Transactions.!error.transaction_id.currency_matches'] = 'Částky na faktuře nebylo možné použít, protože neodpovídají měně transakce.';
$lang['Transactions.!error.message.length'] = 'Délka zprávy nesmí překročit 255 znaků.';
$lang['Transactions.!error.date_added.format'] = 'Datum transakce nemůže být budoucí datum.';
$lang['Transactions.!error.transaction_id.exists'] = 'Neplatné ID transakce.';
$lang['Transactions.!error.status.format'] = 'Neplatný stav transakce.';
$lang['Transactions.!error.reference_id.length'] = 'Délka referenčního ID nesmí překročit 128 znaků.';
$lang['Transactions.!error.parent_transaction_id.length'] = 'Délka ID nadřazené transakce nesmí překročit 128 znaků.';
$lang['Transactions.!error.transaction_id.length'] = 'Délka ID transakce nesmí překročit 128 znaků.';
$lang['Transactions.!error.gateway_id.exists'] = 'Neplatné ID brány.';
$lang['Transactions.!error.transaction_type_id.exists'] = 'Neplatné ID typu transakce.';
$lang['Transactions.!error.type.format'] = 'Neplatný typ transakce.';
$lang['Transactions.!error.currency.length'] = 'Měna musí mít délku 3 znaky.';
$lang['Transactions.!error.amount.format'] = 'Částka musí být číslo.';
$lang['Transactions.!error.client_id.exists'] = 'Neplatné ID klienta.';

