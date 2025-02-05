<?php
/**
 * Stripe Gateway
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Stripe_gateway.!error.auth'] = 'Gatewayen kunne ikke autentificere.';
$lang['Stripe_gateway.!error.api_key.empty'] = 'Indtast venligst en API-nøgle.';
$lang['Stripe_gateway.!error.json_required'] = 'JSON-udvidelsen er påkrævet for denne gateway.';
$lang['Stripe_gateway.name'] = 'Stribet';
$lang['Stripe_gateway.description'] = 'Dette er den gamle Stripe-gateway, der bruger Stripe Checkout. Det kræver, at din Stripe-konto opdateres til "Process payments unsafely". Vi anbefaler, at du i stedet bruger Stripe Payments-gatewayen i Blesta.';
$lang['Stripe_gateway.api_key'] = 'Hemmelig API-nøgle';
$lang['Stripe_gateway.tooltip_api'] = 'Din hemmelige API-nøgle er specifik for enten live- eller testtilstand. Vær sikker på, at du bruger den rigtige nøgle.';
$lang['Stripe_gateway.stored'] = 'Opbevar kortoplysninger eksternt';
$lang['Stripe_gateway.tooltip_stored'] = 'Markér dette felt for at gemme kortoplysninger om betalingskontoen hos Stripe i stedet for i Blesta.';
$lang['Stripe_gateway.charge_description'] = 'Gebyr for %1$s';

