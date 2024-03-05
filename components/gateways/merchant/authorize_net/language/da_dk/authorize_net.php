<?php
/**
 * Authorize Net
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Authorize_net.name'] = 'Authorize.net';
$lang['Authorize_net.description'] = 'Pålidelig og hurtig kreditkort- og ACH-behandling';
$lang['Authorize_net.login_id'] = 'Login-id';
$lang['Authorize_net.transaction_key'] = 'Transaktionsnøgle';
$lang['Authorize_net.api'] = 'API til betaling';
$lang['Authorize_net.test_mode'] = 'Testtilstand';
$lang['Authorize_net.test_mode_note'] = 'Testtilstandsfunktionen understøttes kun af AIM. For at teste CIM-transaktioner skal du aktivere testtilstand fra din Authorize.net-konto.';
$lang['Authorize_net.dev_mode'] = 'Udvikler-tilstand';
$lang['Authorize_net.dev_mode_note'] = 'Hvis du aktiverer denne indstilling, sendes transaktioner til Authorize.net-udviklermiljøet. Du skal have en testkonto for udviklere for at kunne bruge dette miljø.';
$lang['Authorize_net.apis_aim'] = 'AIM (standard)';
$lang['Authorize_net.apis_cim'] = 'CIM (skal være aktiveret af Authorize.Net)';
$lang['Authorize_net.validation_mode'] = 'Valideringstilstand for betalingskonto';
$lang['Authorize_net.validation_note'] = 'Dette styrer, hvilken type validering der udføres, når en betalingskonto gemmes ved hjælp af CIM. \'Ingen\' udfører ingen yderligere validering. \'Test\' udsteder en testtransaktion, der ikke vises på kundens kontoudtog, men genererer en e-mail til forhandleren. \'Live\' behandler en transaktion på $0,00 eller $0,01, som straks annulleres. Kontakt din Merchant Account Provider, før du indstiller denne værdi til \'Live\', da du kan blive pålagt gebyrer.';
$lang['Authorize_net.validation_modes_none'] = 'Ingen';
$lang['Authorize_net.validation_modes_test'] = 'Test';
$lang['Authorize_net.validation_modes_live'] = 'Levende';
$lang['Authorize_net.!error.login_id.format'] = 'Login-ID skal bestå af højst 20 tegn og må ikke være tomt.';
$lang['Authorize_net.!error.transaction_key.format'] = 'Transaktionsnøglen skal være 16 tegn lang.';
$lang['Authorize_net.!error.test_mode.valid'] = 'Testtilstand skal sættes til "true", hvis den er angivet.';
$lang['Authorize_net.!error.dev_mode.valid'] = 'Udviklertilstand skal sættes til "true", hvis den er angivet.';
$lang['Authorize_net.!error.card_number.missing'] = 'Udløbsdatoen kan ikke opdateres uden det fulde kortnummer.';

