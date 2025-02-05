<?php
/**
 * Paypal Payments Standard
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PaypalPaymentsStandard.description'] = 'PayPal Payments Standard er en af de nemmeste måder at acceptere kreditkort- og PayPal-betalinger sikkert online.';
$lang['PaypalPaymentsStandard.account_id'] = 'E-mail til PayPal-konto';
$lang['PaypalPaymentsStandard.page_style'] = 'Navn på sidestil';
$lang['PaypalPaymentsStandard.page_style_note'] = 'Sidens stilnavn for det tilpassede betalingssidetema, du oprettede i PayPal. Lad den være tom, hvis du vil bruge standardsidestilen.';
$lang['PaypalPaymentsStandard.dev_mode'] = 'Udvikler-tilstand';
$lang['PaypalPaymentsStandard.dev_mode_note'] = 'Hvis du aktiverer denne indstilling, sendes transaktioner til PayPal Sandbox-miljøet. Aktivér kun denne indstilling, hvis du tester med en PayPal Sandbox-konto.';
$lang['PaypalPaymentsStandard.api_username'] = 'API-brugernavn';
$lang['PaypalPaymentsStandard.name'] = 'PayPal Payments Standard';
$lang['PaypalPaymentsStandard.api_username_note'] = 'Dette, såvel som API-adgangskode og API-signatur, er påkrævet for at behandle refusioner via PayPal.';
$lang['PaypalPaymentsStandard.api_password'] = 'API-adgangskode';
$lang['PaypalPaymentsStandard.api_signature'] = 'API-signatur';
$lang['PaypalPaymentsStandard.pay_type'] = 'Betalingsmuligheder';
$lang['PaypalPaymentsStandard.pay_type_onetime'] = 'Kun engangsbetalinger';
$lang['PaypalPaymentsStandard.pay_type_subscribe'] = 'Kun abonnementsbetalinger';
$lang['PaypalPaymentsStandard.pay_type_both'] = 'Engangs- og abonnementsbetalinger, når det er muligt';
$lang['PaypalPaymentsStandard.buildprocess.submit'] = 'Betal med PayPal';
$lang['PaypalPaymentsStandard.!error.account_id.valid'] = 'Du skal indtaste en gyldig e-mailadresse.';
$lang['PaypalPaymentsStandard.!error.dev_mode.valid'] = 'Udviklertilstand skal sættes til "true", hvis den er angivet.';
$lang['PaypalPaymentsStandard.!error.payment_mapping.duplicated'] = 'Der blev fundet duplikerede e-mails i dine kortlægningsdata, fjern duplikater og prøv igen.';
$lang['PaypalPaymentsStandard.!error.payment_mapping.valid'] = 'Der blev fundet en ugyldig linje i dine kortlægningsdata. Tjek, om e-mailadressen og klient-id\'et er gyldigt, og prøv igen.';
$lang['PaypalPaymentsStandard.payment_mapping_note'] = 'Beregnet til brug med PayPal-abonnementer, der er oprettet uden for Blesta. Tilknyt payer_email til det interne klient-id, 1 pr. linje. For eksempel: email,client-id';
$lang['PaypalPaymentsStandard.payment_mapping'] = 'Kortlægning af betalinger';

