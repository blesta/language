<?php
/**
 * Stripe Payments
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['StripePayments.!error.auth'] = 'Gatewayen kunne ikke autentificere.';
$lang['StripePayments.!error.publishable_key.empty'] = 'Indtast venligst en publicerbar nøgle.';
$lang['StripePayments.!error.secret_key.empty'] = 'Indtast venligst en hemmelig nøgle.';
$lang['StripePayments.!error.secret_key.valid'] = 'Kunne ikke oprette forbindelse til Stripe API med den angivne hemmelige nøgle.';
$lang['StripePayments.!error.bank_account_unverified'] = 'Du skal verificere din bankkonto, før du kan bruge den til at foretage en betaling.';
$lang['StripePayments.!error.invalid_request_error'] = 'Betalingsgatewayen returnerede en fejl, da den behandlede anmodningen.';
$lang['StripePayments.description'] = 'Bruger Stripe Elements og Payment Request API til automatisk at håndtere 3D Secure og SCA til at sende kreditkort direkte gennem Stripe.';
$lang['StripePayments.ach_form.field_type'] = 'Kontotype';
$lang['StripePayments.ach_form.field_holder_type'] = 'Holder Type';
$lang['StripePayments.ach_form.field_holder_type_individual'] = 'Individuel';
$lang['StripePayments.ach_form.field_holder_type_company'] = 'Virksomhed';
$lang['StripePayments.ach_form.field_account_number'] = 'Kontonummer';
$lang['StripePayments.ach_form.field_routing_number'] = 'Routing-nummer';
$lang['StripePayments.ach_form.verification_notice'] = 'Vi har sendt to små indbetalinger til denne bankkonto. For at verificere denne konto bedes du bekræfte beløbene på disse indbetalinger.';
$lang['StripePayments.ach_form.field_first_deposit'] = 'Første indbetaling';
$lang['StripePayments.ach_form.field_second_deposit'] = 'Anden indbetaling';
$lang['StripePayments.ach_form.mandate_authorization'] = 'Ved at indsende denne formular giver du %1$s tilladelse til at debitere den ovenfor angivne bankkonto for ethvert skyldigt beløb for gebyrer, der opstår som følge af din brug af %1$s tjenester og / eller køb af produkter fra %1$s, i henhold til %1$s websted og vilkår, indtil denne tilladelse tilbagekaldes. Du kan til enhver tid ændre eller annullere denne tilladelse ved at give besked til %1$s med 30 (tredive) dages varsel.';
$lang['StripePayments.ach_form.mandate_future_usage'] = 'Hvis du bruger %1$s tjenester eller køber yderligere produkter med jævne mellemrum i henhold til %1$s vilkår, giver du %1$s tilladelse til at debitere din bankkonto med jævne mellemrum. Betalinger, der falder uden for de regelmæssige debiteringer, der er godkendt ovenfor, debiteres kun, når din tilladelse er opnået.';
$lang['StripePayments.publishable_key'] = 'API-nøgle, der kan offentliggøres';
$lang['StripePayments.secret_key'] = 'Hemmelig API-nøgle';
$lang['StripePayments.tooltip_publishable_key'] = 'Din API Publishable Key er specifik for enten live- eller testtilstand. Vær sikker på, at du bruger den rigtige nøgle.';
$lang['StripePayments.tooltip_secret_key'] = 'Din hemmelige API-nøgle er specifik for enten live- eller testtilstand. Vær sikker på, at du bruger den rigtige nøgle.';
$lang['StripePayments.webhook'] = 'Stripe Webhook';
$lang['StripePayments.webhook_note'] = 'Det anbefales at konfigurere følgende url som et webhook til "payment_intent"-hændelser på din Stripe-konto.';
$lang['StripePayments.heading_migrate_accounts'] = 'Migrer gamle betalingskonti';
$lang['StripePayments.text_accounts_remaining'] = 'Resterende konti: %1$s';
$lang['StripePayments.text_migrate_accounts'] = 'Du kan automatisk migrere betalingskonti, der er gemt offsite af den gamle Stripe-gateway, over til denne Stripe Payments-gateway. Konti, der ikke er gemt offsite, skal migreres ved manuelt at oprette nye betalingskonti. For at forhindre timeouts vil migreringer blive udført i batches på %1$s. Kør dette så mange gange som nødvendigt for at migrere alle betalingskonti.';
$lang['StripePayments.warning_migrate_accounts'] = 'Du må ikke afinstallere den gamle Stripe-gateway, før du er færdig med at bruge dette migreringsværktøj. Hvis du gør det, bliver værktøjet utilgængeligt.';
$lang['StripePayments.migrate_accounts'] = 'Migrer konti';
$lang['StripePayments.charge_description_default'] = 'Opkrævning for specificeret beløb';
$lang['StripePayments.charge_description'] = 'Gebyr for %1$s';
$lang['StripePayments.name'] = 'Stripe Payments';

