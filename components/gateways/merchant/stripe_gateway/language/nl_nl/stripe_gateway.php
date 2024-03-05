<?php
/**
 * Stripe Gateway
 *
 * @package blesta
 * @subpackage blesta.language.nl_nl
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Stripe_gateway.charge_description'] = 'Kosten voor %1$s';
$lang['Stripe_gateway.tooltip_stored'] = 'Vink dit vakje aan om de kaartgegevens van de betaalrekening op te slaan bij Stripe in plaats van binnen Blesta.';
$lang['Stripe_gateway.stored'] = 'Kaartgegevens offsite opslaan';
$lang['Stripe_gateway.tooltip_api'] = 'Je API geheime sleutel is specifiek voor live of testmodus. Zorg ervoor dat je de juiste sleutel gebruikt.';
$lang['Stripe_gateway.api_key'] = 'API geheime sleutel';
$lang['Stripe_gateway.description'] = 'Dit is de oude Stripe-gateway die Stripe Checkout gebruikt. Hiervoor moet je Stripe-account worden bijgewerkt tot "Verwerk betalingen onveilig". We raden aan om in plaats daarvan de Stripe Payments-gateway in Blesta te gebruiken.';
$lang['Stripe_gateway.name'] = 'Streep';
$lang['Stripe_gateway.!error.json_required'] = 'De JSON-extensie is vereist voor deze gateway.';
$lang['Stripe_gateway.!error.api_key.empty'] = 'Voer een API-sleutel in.';
$lang['Stripe_gateway.!error.auth'] = 'De gateway kon zich niet authentiseren.';

