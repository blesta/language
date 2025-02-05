<?php
/**
 * Authorize Net
 *
 * @package blesta
 * @subpackage blesta.language.nl_nl
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Authorize_net.!error.card_number.missing'] = 'De vervaldatum kan niet worden bijgewerkt zonder het volledige kaartnummer.';
$lang['Authorize_net.!error.dev_mode.valid'] = 'De ontwikkelaarsmodus moet worden ingesteld op "true" als deze wordt gegeven.';
$lang['Authorize_net.!error.test_mode.valid'] = 'Testmodus moet worden ingesteld op "true" indien gegeven.';
$lang['Authorize_net.!error.transaction_key.format'] = 'De transactiesleutel moet 16 tekens lang zijn.';
$lang['Authorize_net.!error.login_id.format'] = 'De aanmeldings-ID mag niet meer dan 20 tekens bevatten en mag niet leeg zijn.';
$lang['Authorize_net.validation_modes_live'] = 'Live';
$lang['Authorize_net.validation_modes_test'] = 'Test';
$lang['Authorize_net.validation_modes_none'] = 'Geen';
$lang['Authorize_net.validation_note'] = 'Dit bepaalt welk type validatie wordt uitgevoerd wanneer een betaalrekening wordt opgeslagen met CIM. Geen\' voert geen extra validatie uit. Test\' voert een testtransactie uit die niet op het afschrift van de klant verschijnt, maar wel een e-mail naar de merchant genereert. Live\' verwerkt een $0.00 of $0.01 transactie die onmiddellijk ongeldig wordt gemaakt. Neem contact op met je Merchant Account Provider voordat je deze waarde op \'Live\' zet, aangezien er kosten aan verbonden kunnen zijn.';
$lang['Authorize_net.validation_mode'] = 'Validatiemodus betaalrekening';
$lang['Authorize_net.apis_cim'] = 'CIM (moet worden ingeschakeld door Authorize.Net)';
$lang['Authorize_net.apis_aim'] = 'AIM (standaard)';
$lang['Authorize_net.dev_mode_note'] = 'Als u deze optie inschakelt, worden transacties in de Authorize.net ontwikkelomgeving geplaatst. Je moet een testaccount voor ontwikkelaars hebben om deze omgeving te kunnen gebruiken.';
$lang['Authorize_net.dev_mode'] = 'Ontwikkelaarsmodus';
$lang['Authorize_net.test_mode_note'] = 'De testmodus functie wordt alleen ondersteund door AIM. Om CIM-transacties te testen, moet u de testmodus inschakelen vanuit uw Authorize.net account.';
$lang['Authorize_net.test_mode'] = 'Testmodus';
$lang['Authorize_net.api'] = 'Betaling API';
$lang['Authorize_net.transaction_key'] = 'Transactiesleutel';
$lang['Authorize_net.login_id'] = 'Login ID';
$lang['Authorize_net.description'] = 'Betrouwbare en snelle creditcard- en ACH-verwerking';
$lang['Authorize_net.name'] = 'Autoriseer.Net';

