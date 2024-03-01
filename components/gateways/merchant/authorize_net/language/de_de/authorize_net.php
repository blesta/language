<?php
/**
 * Authorize Net
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Authorize_net.!error.card_number.missing'] = 'Ohne die vollständige Kartennummer kann das Verfallsdatum nicht aktualisiert werden.';
$lang['Authorize_net.!error.dev_mode.valid'] = 'Der Entwicklermodus muss auf "true" gesetzt werden, falls vorhanden.';
$lang['Authorize_net.!error.test_mode.valid'] = 'Der Testmodus muss auf "true" gesetzt werden, falls vorhanden.';
$lang['Authorize_net.!error.transaction_key.format'] = 'Der Transaktionsschlüssel muss 16 Zeichen lang sein.';
$lang['Authorize_net.!error.login_id.format'] = 'Die Anmelde-ID sollte nicht mehr als 20 Zeichen lang sein und darf nicht leer sein.';
$lang['Authorize_net.validation_modes_live'] = 'Live';
$lang['Authorize_net.validation_modes_test'] = 'Test';
$lang['Authorize_net.validation_modes_none'] = 'Keine';
$lang['Authorize_net.validation_note'] = 'Hier wird festgelegt, welche Art von Validierung durchgeführt wird, wenn ein Zahlungskonto mit CIM gespeichert wird. Keine" führt keine zusätzliche Validierung durch. Test" stellt eine Testtransaktion aus, die nicht auf dem Kontoauszug des Kunden erscheint, aber eine E-Mail an den Händler erzeugt. Bei "Live" wird eine $0,00- oder $0,01-Transaktion durchgeführt, die sofort storniert wird. Wenden Sie sich an den Anbieter Ihres Händlerkontos, bevor Sie diesen Wert auf "Live" setzen, da Sie möglicherweise Gebühren zahlen müssen.';
$lang['Authorize_net.validation_mode'] = 'Modus zur Überprüfung des Zahlungskontos';
$lang['Authorize_net.apis_cim'] = 'CIM (muss von Authorize.Net aktiviert werden)';
$lang['Authorize_net.apis_aim'] = 'AIM (Standard)';
$lang['Authorize_net.dev_mode_note'] = 'Wenn Sie diese Option aktivieren, werden Transaktionen in der Authorize.net-Entwicklungsumgebung gebucht. Sie müssen über ein Entwickler-Testkonto verfügen, um diese Umgebung verwenden zu können.';
$lang['Authorize_net.dev_mode'] = 'Entwickler-Modus';
$lang['Authorize_net.test_mode_note'] = 'Die Testmodus-Funktion wird nur von AIM unterstützt. Um CIM-Transaktionen zu testen, müssen Sie den Testmodus in Ihrem Authorize.net-Konto aktivieren.';
$lang['Authorize_net.test_mode'] = 'Test-Modus';
$lang['Authorize_net.api'] = 'Zahlungs-API';
$lang['Authorize_net.transaction_key'] = 'Transaktionsschlüssel';
$lang['Authorize_net.login_id'] = 'Anmelde-ID';
$lang['Authorize_net.description'] = 'Zuverlässige und schnelle Kreditkarten- und ACH-Verarbeitung';
$lang['Authorize_net.name'] = 'Authorize.Net';

