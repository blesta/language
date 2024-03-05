<?php
/**
 * Transactions
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Transactions.debit_types.credit'] = 'Kredit';
$lang['Transactions.debit_types.debit'] = 'Lastschrift';
$lang['Transactions.status.returned'] = 'Zurückgeschickt';
$lang['Transactions.status.refunded'] = 'Erstattet';
$lang['Transactions.status.pending'] = 'Anhängig';
$lang['Transactions.status.error'] = 'Fehler';
$lang['Transactions.status.void'] = 'Leere';
$lang['Transactions.status.declined'] = 'Abgelehnt';
$lang['Transactions.status.approved'] = 'Genehmigt';
$lang['Transactions.types.other'] = 'Andere';
$lang['Transactions.types.ach'] = 'ACH';
$lang['Transactions.types.cc'] = 'Kreditkarte';
$lang['Transactions.!error.type_id.exists'] = 'Ungültige Transaktionsart-ID.';
$lang['Transactions.!error.is_lang.length'] = 'Die Länge von is_lang darf 1 Zeichen nicht überschreiten.';
$lang['Transactions.!error.is_lang.format'] = 'is_lang muss eine Zahl sein.';
$lang['Transactions.!error.type.valid'] = 'Bitte wählen Sie einen gültigen Typ aus.';
$lang['Transactions.!error.name.length'] = 'Die Länge des Namens darf 32 Zeichen nicht überschreiten.';
$lang['Transactions.!error.name.empty'] = 'Bitte geben Sie einen Namen ein.';
$lang['Transactions.!error.currency.mismatch'] = 'Die angegebene Währung stimmt bei mindestens einer der zugehörigen Rechnungen nicht überein.';
$lang['Transactions.!error.currency.missing'] = 'Bitte legen Sie eine Währung fest.';
$lang['Transactions.!error.date.format'] = 'Das angewandte Datum ist ungültig.';
$lang['Transactions.!error.amounts.positive'] = 'Ein oder mehrere Werte des zu zahlenden Betrags sind negativ. Vergewissern Sie sich, dass jeder Wert des zu zahlenden Betrages null oder mehr beträgt.';
$lang['Transactions.!error.amounts.overage'] = 'Ein oder mehrere Werte des zu zahlenden Betrags konnten nicht auf die angegebene Rechnung angewendet werden. Stellen Sie sicher, dass der zu zahlende Betrag den fälligen Betrag auf der Rechnung nicht übersteigt, dass die Rechnung offen ist und dass die Summe der zu zahlenden Beträge den Zahlungs- oder Gutschriftsbetrag nicht übersteigt.';
$lang['Transactions.!error.invoice_id.exists'] = 'Ungültige Rechnungs-ID.';
$lang['Transactions.!error.transaction_id.currency_matches'] = 'Die Rechnungsbeträge konnten nicht übernommen werden, weil sie nicht mit der Währung der Transaktion übereinstimmen.';
$lang['Transactions.!error.message.length'] = 'Die Länge der Nachricht darf 255 Zeichen nicht überschreiten.';
$lang['Transactions.!error.date_added.format'] = 'Das Transaktionsdatum kann kein zukünftiges Datum sein.';
$lang['Transactions.!error.transaction_id.exists'] = 'Ungültige Transaktions-ID.';
$lang['Transactions.!error.status.format'] = 'Ungültiger Transaktionsstatus.';
$lang['Transactions.!error.reference_id.length'] = 'Die Länge der Referenz-ID darf 128 Zeichen nicht überschreiten.';
$lang['Transactions.!error.parent_transaction_id.length'] = 'Die Länge der Parent Transaction ID darf 128 Zeichen nicht überschreiten.';
$lang['Transactions.!error.transaction_id.length'] = 'Die Länge der Transaktions-ID darf 128 Zeichen nicht überschreiten.';
$lang['Transactions.!error.gateway_id.exists'] = 'Ungültige Gateway-ID.';
$lang['Transactions.!error.transaction_type_id.exists'] = 'Ungültige Transaktionsart-ID.';
$lang['Transactions.!error.type.format'] = 'Ungültige Transaktionsart.';
$lang['Transactions.!error.currency.length'] = 'Die Währung muss 3 Zeichen lang sein.';
$lang['Transactions.!error.amount.format'] = 'Der Betrag muss eine Zahl sein.';
$lang['Transactions.!error.client_id.exists'] = 'Ungültige Client-ID.';

