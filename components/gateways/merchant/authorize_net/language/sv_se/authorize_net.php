<?php
/**
 * Authorize Net
 *
 * @package blesta
 * @subpackage blesta.language.sv_se
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Authorize_net.!error.card_number.missing'] = 'Utgångsdatumet kan inte uppdateras utan det fullständiga kortnumret.';
$lang['Authorize_net.!error.dev_mode.valid'] = 'Utvecklarläget måste vara inställt på "true" om det anges.';
$lang['Authorize_net.!error.test_mode.valid'] = 'Testläget måste vara inställt på "true" om det anges.';
$lang['Authorize_net.!error.transaction_key.format'] = 'Transaktionsnyckeln måste vara 16 tecken lång.';
$lang['Authorize_net.!error.login_id.format'] = 'Inloggnings-ID ska bestå av högst 20 tecken och får inte vara tomt.';
$lang['Authorize_net.validation_modes_live'] = 'Levande';
$lang['Authorize_net.validation_modes_test'] = 'Test';
$lang['Authorize_net.validation_modes_none'] = 'Ingen';
$lang['Authorize_net.validation_note'] = 'Detta kontrollerar vilken typ av validering som utförs när ett betalkonto lagras med CIM. "Ingen" utför ingen ytterligare validering. "Test" utfärdar en testtransaktion som inte visas på kundens kontoutdrag, men som genererar ett e-postmeddelande till säljföretaget. "Live" behandlar en transaktion på 0,00 USD eller 0,01 USD som omedelbart annulleras. Kontakta din kontoleverantör innan du ställer in detta värde till "Live" eftersom du kan bli föremål för avgifter.';
$lang['Authorize_net.validation_mode'] = 'Valideringsläge för betalkonto';
$lang['Authorize_net.apis_cim'] = 'CIM (måste aktiveras av Authorize.Net)';
$lang['Authorize_net.apis_aim'] = 'AIM (standard)';
$lang['Authorize_net.dev_mode_note'] = 'Om du aktiverar det här alternativet postas transaktioner till Authorize.nets utvecklarmiljö. Du måste ha ett testkonto för utvecklare för att kunna använda den här miljön.';
$lang['Authorize_net.dev_mode'] = 'Utvecklarläge';
$lang['Authorize_net.test_mode_note'] = 'Testlägesfunktionen stöds endast av AIM. För att testa CIM-transaktioner måste du aktivera testläget från ditt Authorize.net-konto.';
$lang['Authorize_net.test_mode'] = 'Testläge';
$lang['Authorize_net.api'] = 'API för betalningar';
$lang['Authorize_net.transaction_key'] = 'Transaktionsnyckel';
$lang['Authorize_net.login_id'] = 'ID för inloggning';
$lang['Authorize_net.description'] = 'Pålitlig och snabb hantering av kreditkort och ACH';
$lang['Authorize_net.name'] = 'Authorize.Net';

