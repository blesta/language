<?php
/**
 * Stripe Payments
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['StripePayments.!error.ach.invalid_account'] = 'Det var ikke muligt at finde en bankkonto for denne kunde.';
$lang['StripePayments.!error.ach.unverified'] = 'Bankkontoen kunne ikke bekræftes. Bekræft venligst indbetalingsbeløbene, og prøv igen.';
$lang['StripePayments.!error.auth'] = 'Gatewayen kunne ikke autentificere.';
$lang['StripePayments.!error.bank_account_unverified'] = 'Du skal verificere din bankkonto, før du kan bruge den til at foretage en betaling.';
$lang['StripePayments.!error.india_mandate_max_amount.format'] = 'Indtast venligst et gyldigt beløb for det maksimale tilbagevendende beløb.';
$lang['StripePayments.!error.invalid_request_error'] = 'Betalingsgatewayen returnerede en fejl, da den behandlede anmodningen.';
$lang['StripePayments.!error.publishable_key.empty'] = 'Indtast venligst en publicerbar nøgle.';
$lang['StripePayments.!error.secret_key.empty'] = 'Indtast venligst en hemmelig nøgle.';
$lang['StripePayments.!error.secret_key.valid'] = 'Kunne ikke oprette forbindelse til Stripe API med den angivne hemmelige nøgle.';
$lang['StripePayments.ach_form.field_account_number'] = 'Kontonummer';
$lang['StripePayments.ach_form.field_first_deposit'] = 'Første indbetaling';
$lang['StripePayments.ach_form.field_holder_type'] = 'Holder Type';
$lang['StripePayments.ach_form.field_holder_type_company'] = 'Virksomhed';
$lang['StripePayments.ach_form.field_holder_type_individual'] = 'Individuel';
$lang['StripePayments.ach_form.field_routing_number'] = 'Routing-nummer';
$lang['StripePayments.ach_form.field_second_deposit'] = 'Anden indbetaling';
$lang['StripePayments.ach_form.field_type'] = 'Kontotype';
$lang['StripePayments.ach_form.mandate_authorization'] = 'Ved at indsende denne formular giver du %1$s tilladelse til at debitere den ovenfor angivne bankkonto for ethvert skyldigt beløb for gebyrer, der opstår som følge af din brug af %1$s tjenester og / eller køb af produkter fra %1$s, i henhold til %1$s websted og vilkår, indtil denne tilladelse tilbagekaldes. Du kan til enhver tid ændre eller annullere denne tilladelse ved at give besked til %1$s med 30 (tredive) dages varsel.';
$lang['StripePayments.ach_form.mandate_future_usage'] = 'Hvis du bruger %1$s tjenester eller køber yderligere produkter med jævne mellemrum i henhold til %1$s vilkår, giver du %1$s tilladelse til at debitere din bankkonto med jævne mellemrum. Betalinger, der falder uden for de regelmæssige debiteringer, der er godkendt ovenfor, debiteres kun, når din tilladelse er opnået.';
$lang['StripePayments.ach_form.verification_notice'] = 'Den bankkonto, der i øjeblikket er registreret, er ikke blevet bekræftet. Hvis du indtaster nye bankkontooplysninger nedenfor, vil de erstatte de nuværende.';
$lang['StripePayments.charge_description'] = 'Gebyr for %1$s';
$lang['StripePayments.charge_description_default'] = 'Opkrævning for specificeret beløb';
$lang['StripePayments.description'] = 'Bruger Stripe Elements og Payment Request API til automatisk at håndtere 3D Secure og SCA til at sende kreditkort direkte gennem Stripe.';
$lang['StripePayments.heading_migrate_accounts'] = 'Migrer gamle betalingskonti';
$lang['StripePayments.india_mandate_max_amount'] = 'Maksimalt beløb for tilbagevendende opkrævninger (Indien)';
$lang['StripePayments.india_mandate_max_amount_note'] = 'Dette er påkrævet for at aktivere automatiske tilbagevendende opkrævninger for kort udstedt i Indien. Dette er det maksimale beløb, der må opkræves på et sådant kort ved en enkelt fremtidig betaling uden for en session, i den valuta, der behandles. Lad feltet være tomt for at tillade, at indiske kort gemmes uden tilmelding til automatiske tilbagevendende opkrævninger.';
$lang['StripePayments.migrate_accounts'] = 'Migrer konti';
$lang['StripePayments.name'] = 'Stripe Payments';
$lang['StripePayments.publishable_key'] = 'API-nøgle, der kan offentliggøres';
$lang['StripePayments.request_three_d_secure'] = '3D Secure-godkendelsesflow';
$lang['StripePayments.request_three_d_secure_automatic'] = 'Lad Stripe bestemme, hvornår der skal præsenteres en 3D Secure-udfordring';
$lang['StripePayments.request_three_d_secure_challenge'] = 'Præsenter 3D Secure-udfordring, når en klient gemmer en betalingsmetode eller behandler en betalingsmetode (gemt eller ikke-gemt).';
$lang['StripePayments.request_three_d_secure_frictionless'] = 'Præsenter 3D Secure-udfordring, når en klient gemmer en betalingsmetode eller behandler en ikke-gemt betalingsmetode';
$lang['StripePayments.request_three_d_secure_note'] = 'Hvis du er Stripe-bruger med base i Indien, skal du altid udføre 3D Secure (3DS)-godkendelse, før du gemmer et nyt kort hos Stripe.';
$lang['StripePayments.secret_key'] = 'Hemmelig API-nøgle';
$lang['StripePayments.text_accounts_remaining'] = 'Resterende konti: %1$s';
$lang['StripePayments.text_migrate_accounts'] = 'Du kan automatisk migrere betalingskonti, der er gemt offsite af den gamle Stripe-gateway, over til denne Stripe Payments-gateway. Konti, der ikke er gemt offsite, skal migreres ved manuelt at oprette nye betalingskonti. For at forhindre timeouts vil migreringer blive udført i batches på %1$s. Kør dette så mange gange som nødvendigt for at migrere alle betalingskonti.';
$lang['StripePayments.tooltip_india_mandate_max_amount'] = 'I henhold til RBI’s regler kræver tilbagevendende (uden for åbningstiden) transaktioner på indiske kort, der overstiger dette beløb, at kunden separat godkender betalingen.';
$lang['StripePayments.tooltip_publishable_key'] = 'Din API Publishable Key er specifik for enten live- eller testtilstand. Vær sikker på, at du bruger den rigtige nøgle.';
$lang['StripePayments.tooltip_secret_key'] = 'Din hemmelige API-nøgle er specifik for enten live- eller testtilstand. Vær sikker på, at du bruger den rigtige nøgle.';
$lang['StripePayments.warning_migrate_accounts'] = 'Du må ikke afinstallere den gamle Stripe-gateway, før du er færdig med at bruge dette migreringsværktøj. Hvis du gør det, bliver værktøjet utilgængeligt.';
$lang['StripePayments.webhook'] = 'Stripe Webhook';
$lang['StripePayments.webhook_note'] = 'Det anbefales at konfigurere følgende url som webhook for "payment_intent"- og "charge"-hændelser på din Stripe-konto.';

