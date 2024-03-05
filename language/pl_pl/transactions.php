<?php
/**
 * Transactions
 *
 * @package blesta
 * @subpackage blesta.language.pl_pl
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Transactions.debit_types.credit'] = 'Kredyt';
$lang['Transactions.debit_types.debit'] = 'Debet';
$lang['Transactions.status.returned'] = 'Zwrócony';
$lang['Transactions.status.refunded'] = 'Zwrócone';
$lang['Transactions.status.pending'] = 'W toku';
$lang['Transactions.status.error'] = 'Błąd';
$lang['Transactions.status.void'] = 'Pustka';
$lang['Transactions.status.declined'] = 'Odrzucono';
$lang['Transactions.status.approved'] = 'Zatwierdzony';
$lang['Transactions.types.other'] = 'Inne';
$lang['Transactions.types.ach'] = 'ACH';
$lang['Transactions.types.cc'] = 'Karta kredytowa';
$lang['Transactions.!error.type_id.exists'] = 'Nieprawidłowy identyfikator typu transakcji.';
$lang['Transactions.!error.is_lang.length'] = 'Długość is_lang nie może przekraczać 1 znaku.';
$lang['Transactions.!error.is_lang.format'] = 'is_lang musi być liczbą.';
$lang['Transactions.!error.type.valid'] = 'Wybierz prawidłowy typ.';
$lang['Transactions.!error.name.length'] = 'Długość nazwy nie może przekraczać 32 znaków.';
$lang['Transactions.!error.name.empty'] = 'Wprowadź nazwę.';
$lang['Transactions.!error.currency.mismatch'] = 'Podana waluta nie pasuje do co najmniej jednej z powiązanych faktur.';
$lang['Transactions.!error.currency.missing'] = 'Ustaw walutę.';
$lang['Transactions.!error.date.format'] = 'Zastosowana data jest nieprawidłowa.';
$lang['Transactions.!error.amounts.positive'] = 'Co najmniej jedna wartość kwoty do zapłaty jest ujemna. Upewnij się, że każda wartość kwoty do zapłaty wynosi zero lub więcej.';
$lang['Transactions.!error.amounts.overage'] = 'Co najmniej jedna wartość kwoty do zapłaty nie mogła zostać zastosowana do określonej faktury. Upewnij się, że kwota do zapłaty nie przekracza kwoty do zapłaty na fakturze, faktura jest otwarta, a suma wartości kwoty do zapłaty nie przekracza kwoty płatności lub uznania.';
$lang['Transactions.!error.invoice_id.exists'] = 'Nieprawidłowy identyfikator faktury.';
$lang['Transactions.!error.transaction_id.currency_matches'] = 'Kwoty faktury nie mogły zostać zastosowane, ponieważ nie pasują do waluty transakcji.';
$lang['Transactions.!error.message.length'] = 'Długość wiadomości nie może przekraczać 255 znaków.';
$lang['Transactions.!error.date_added.format'] = 'Data transakcji nie może być datą przyszłą.';
$lang['Transactions.!error.transaction_id.exists'] = 'Nieprawidłowy identyfikator transakcji.';
$lang['Transactions.!error.status.format'] = 'Nieprawidłowy status transakcji.';
$lang['Transactions.!error.reference_id.length'] = 'Długość identyfikatora referencyjnego nie może przekraczać 128 znaków.';
$lang['Transactions.!error.parent_transaction_id.length'] = 'Długość Parent Transaction ID nie może przekraczać 128 znaków.';
$lang['Transactions.!error.transaction_id.length'] = 'Długość identyfikatora transakcji nie może przekraczać 128 znaków.';
$lang['Transactions.!error.gateway_id.exists'] = 'Nieprawidłowy identyfikator bramy.';
$lang['Transactions.!error.transaction_type_id.exists'] = 'Nieprawidłowy identyfikator typu transakcji.';
$lang['Transactions.!error.type.format'] = 'Nieprawidłowy typ transakcji.';
$lang['Transactions.!error.currency.length'] = 'Waluta musi mieć długość 3 znaków.';
$lang['Transactions.!error.amount.format'] = 'Kwota musi być liczbą.';
$lang['Transactions.!error.client_id.exists'] = 'Nieprawidłowy identyfikator klienta.';

