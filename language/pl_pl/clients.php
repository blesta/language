<?php
/**
 * Clients
 *
 * @package blesta
 * @subpackage blesta.language.pl_pl
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Clients.customfield.cf2'] = 'Pole niestandardowe';
$lang['Clients.setDebitAccountFailure.note_body'] = 'Konto płatnicze %1$s kończące się na x%2$s zostało wyłączone, ponieważ przekroczyło maksymalną liczbę prób odrzucenia.';
$lang['Clients.setDebitAccountFailure.note_title'] = 'Automatyczne obciążanie konta płatniczego wyłączone.';
$lang['Clients.getStatusTypes.fraud'] = 'Oszustwo';
$lang['Clients.getStatusTypes.inactive'] = 'Nieaktywny';
$lang['Clients.getStatusTypes.active'] = 'Aktywny';
$lang['Clients.getCustomFieldTypes.textarea'] = 'Obszar tekstowy';
$lang['Clients.getCustomFieldTypes.dropdown'] = 'Drop Down';
$lang['Clients.getCustomFieldTypes.checkbox'] = 'Pole wyboru';
$lang['Clients.getCustomFieldTypes.textbox'] = 'Pole tekstowe';
$lang['Clients.!error.package_ids.exists'] = 'Co najmniej jeden z dostarczonych pakietów nie istnieje.';
$lang['Clients.!error.stickied.length'] = 'Długość naklejki nie może przekraczać 1 znaku.';
$lang['Clients.!error.stickied.format'] = 'Sticky musi być liczbą.';
$lang['Clients.!error.note_id.exists'] = 'Nieprawidłowy identyfikator notatki.';
$lang['Clients.!error.title.length'] = 'Długość tytułu nie może przekraczać 255 znaków.';
$lang['Clients.!error.title.empty'] = 'Wprowadź tytuł.';
$lang['Clients.!error.staff_id.exists'] = 'Nieprawidłowy identyfikator pracownika.';
$lang['Clients.!error.value.valid'] = '%1$s ma nieprawidłową wartość.';
$lang['Clients.!error.value.required'] = '%1$s ma nieprawidłowy format.';
$lang['Clients.!error.read_only.length'] = 'Tylko do odczytu nie może przekraczać 1 znaku.';
$lang['Clients.!error.read_only.format'] = 'Tylko do odczytu musi być liczbą.';
$lang['Clients.!error.encrypted.length'] = 'Długość zaszyfrowanego hasła nie może przekraczać 1 znaku.';
$lang['Clients.!error.encrypted.format'] = 'Encrypted musi być liczbą.';
$lang['Clients.!error.client_field_id.matches'] = 'Pole niestandardowe jest nieprawidłowe.';
$lang['Clients.!error.client_field_id.exists'] = 'Nieprawidłowy identyfikator pola niestandardowego.';
$lang['Clients.!error.show_client.length'] = 'Długość wyświetlanego klienta nie może przekraczać 1 znaku.';
$lang['Clients.!error.show_client.format'] = 'Wyświetlany klient musi być liczbą.';
$lang['Clients.!error.regex.valid'] = 'Wyrażenie regularne jest nieprawidłowe.';
$lang['Clients.!error.default.valid'] = 'Wartość domyślna jest nieprawidłowa.';
$lang['Clients.!error.values.format'] = 'Wartości mają nieprawidłowy format.';
$lang['Clients.!error.type.format'] = 'Nieprawidłowy typ.';
$lang['Clients.!error.is_lang.length'] = 'is_lang nie może przekraczać 1 znaku.';
$lang['Clients.!error.is_lang.format'] = 'is_lang musi być liczbą.';
$lang['Clients.!error.link.valid'] = 'Wprowadź prawidłowy link.';
$lang['Clients.!error.name.empty'] = 'Wprowadź nazwę.';
$lang['Clients.!error.receive_email_marketing.valid'] = 'Nieprawidłowa wartość e-mail marketingu.';
$lang['Clients.!error.language.editable'] = 'Język może nie być aktualizowany.';
$lang['Clients.!error.language.valid'] = 'Nieprawidłowy język.';
$lang['Clients.!error.inv_method.editable'] = 'Metoda dostawy faktury może nie zostać zaktualizowana.';
$lang['Clients.!error.inv_method.valid'] = 'Nieprawidłowa metoda dostawy faktury.';
$lang['Clients.!error.default_currency.editable'] = 'Waluta może nie być aktualizowana.';
$lang['Clients.!error.default_currency.valid'] = 'Nieprawidłowa waluta.';
$lang['Clients.!error.inv_address_to.exists'] = 'Prosimy o podanie prawidłowego kontaktu, do którego będą kierowane faktury.';
$lang['Clients.!error.autodebit.format'] = 'Nieprawidłowa wartość autodebitu.';
$lang['Clients.!error.client_id.deleteable'] = 'Klienta nie można usunąć, dopóki istnieją otwarte faktury, istnieją faktury cykliczne lub istnieją aktywne/zawieszone usługi. Przed kontynuowaniem anuluj wszystkie otwarte faktury, usuń wszystkie faktury cykliczne i anuluj wszystkie aktywne/zawieszone usługi.';
$lang['Clients.!error.settings[tax_id].valid'] = 'Prosimy o podanie ważnego numeru NIP/VATIN.';
$lang['Clients.!error.status.format'] = 'Nieprawidłowy status.';
$lang['Clients.!error.user_id.unique'] = 'Identyfikator użytkownika klienta %1$s jest już zajęty.';
$lang['Clients.!error.user_id.exists'] = 'Nieprawidłowy identyfikator użytkownika.';
$lang['Clients.!error.id_value.valid'] = 'Nie można określić wartości identyfikatora klienta.';
$lang['Clients.!error.id_format.length'] = 'Format ID dla klientów nie może przekraczać 64 znaków.';
$lang['Clients.!error.id_format.empty'] = 'Brak ustawionego formatu ID dla klientów.';
$lang['Clients.!error.type.exists'] = 'Nieprawidłowy typ.';
$lang['Clients.!error.account_id.exists'] = 'Nieprawidłowy identyfikator konta.';
$lang['Clients.!error.client_id.exists'] = 'Nieprawidłowy identyfikator klienta.';
$lang['Clients.!error.client_group_id.exists'] = 'Nieprawidłowy identyfikator grupy klientów.';
$lang['Clients.!error.payment_credit_limits.max_less_than_min'] = 'Maksymalna kwota kredytu dla %1$s musi być wyższa niż kwota minimalna.';
$lang['Clients.!error.payment_credit_limits.max_amount'] = 'Maksymalna kwota kredytu dla %1$s musi być większa niż 0.';
$lang['Clients.!error.payment_credit_limits.min_amount'] = 'Minimalna kwota kredytu dla %1$s musi być większa niż 0.';

