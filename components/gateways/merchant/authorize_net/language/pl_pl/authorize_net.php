<?php
/**
 * Authorize Net
 *
 * @package blesta
 * @subpackage blesta.language.pl_pl
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Authorize_net.!error.card_number.missing'] = 'Daty wygaśnięcia nie można zaktualizować bez podania pełnego numeru karty.';
$lang['Authorize_net.!error.dev_mode.valid'] = 'Tryb deweloperski musi być ustawiony na "true", jeśli został podany.';
$lang['Authorize_net.!error.test_mode.valid'] = 'Tryb testowy musi być ustawiony na "true", jeśli został podany.';
$lang['Authorize_net.!error.transaction_key.format'] = 'Klucz transakcji musi mieć długość 16 znaków.';
$lang['Authorize_net.!error.login_id.format'] = 'Identyfikator logowania nie powinien zawierać więcej niż 20 znaków i nie może być pusty.';
$lang['Authorize_net.validation_modes_live'] = 'Na żywo';
$lang['Authorize_net.validation_modes_test'] = 'Test';
$lang['Authorize_net.validation_modes_none'] = 'Brak';
$lang['Authorize_net.validation_note'] = 'Określa, jaki rodzaj walidacji jest wykonywany, gdy rachunek płatniczy jest przechowywany przy użyciu CIM. "Brak" nie wykonuje żadnej dodatkowej walidacji. "Test" wystawia transakcję testową, która nie pojawi się na wyciągu klienta, ale wygeneruje wiadomość e-mail do sprzedawcy. "Na żywo" przetwarza transakcję o wartości 0,00 USD lub 0,01 USD, która jest natychmiast unieważniana. Skonsultuj się z dostawcą konta sprzedawcy przed ustawieniem tej wartości na "Live", ponieważ mogą zostać naliczone opłaty.';
$lang['Authorize_net.validation_mode'] = 'Tryb weryfikacji konta płatniczego';
$lang['Authorize_net.apis_cim'] = 'CIM (musi być włączony przez Authorize.Net)';
$lang['Authorize_net.apis_aim'] = 'AIM (domyślnie)';
$lang['Authorize_net.dev_mode_note'] = 'Włączenie tej opcji spowoduje wysłanie transakcji do środowiska deweloperskiego Authorize.net. Aby korzystać z tego środowiska, musisz mieć konto testowe dewelopera.';
$lang['Authorize_net.dev_mode'] = 'Tryb dewelopera';
$lang['Authorize_net.test_mode_note'] = 'Funkcja trybu testowego jest obsługiwana tylko przez AIM. Aby przetestować transakcje CIM, należy włączyć tryb testowy z poziomu konta Authorize.net.';
$lang['Authorize_net.test_mode'] = 'Tryb testowy';
$lang['Authorize_net.api'] = 'API płatności';
$lang['Authorize_net.transaction_key'] = 'Klucz transakcji';
$lang['Authorize_net.login_id'] = 'Identyfikator logowania';
$lang['Authorize_net.description'] = 'Niezawodne i szybkie przetwarzanie kart kredytowych i ACH';
$lang['Authorize_net.name'] = 'Authorize.Net';

