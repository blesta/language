<?php
/**
 * Stripe Payments
 *
 * @package blesta
 * @subpackage blesta.language.sv_se
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['StripePayments.charge_description'] = 'Avgift för %1$s';
$lang['StripePayments.charge_description_default'] = 'Avgift för specificerat belopp';
$lang['StripePayments.migrate_accounts'] = 'Migrera konton';
$lang['StripePayments.warning_migrate_accounts'] = 'Avinstallera inte den gamla Stripe-gatewayen förrän du är klar med det här migreringsverktyget. Om du gör det blir verktyget oåtkomligt.';
$lang['StripePayments.text_migrate_accounts'] = 'Du kan automatiskt migrera betalkonton som lagrats offsite av den gamla Stripe-gatewayen över till denna Stripe Payments-gateway. Konton som inte lagras offsite måste migreras genom att manuellt skapa nya betalkonton. För att förhindra timeouts kommer migreringar att göras i satser om %1$s. Kör detta så många gånger som behövs för att migrera alla betalkonton.';
$lang['StripePayments.text_accounts_remaining'] = 'Kvarvarande konton: %1$s';
$lang['StripePayments.heading_migrate_accounts'] = 'Migrera gamla betalkonton';
$lang['StripePayments.webhook_note'] = 'Vi rekommenderar att du konfigurerar följande url som en Webhook för "payment_intent"-händelser i ditt Stripe-konto.';
$lang['StripePayments.webhook'] = 'Stripe Webhook';
$lang['StripePayments.tooltip_secret_key'] = 'Din hemliga API-nyckel är specifik för antingen live- eller testläge. Se till att du använder rätt nyckel.';
$lang['StripePayments.tooltip_publishable_key'] = 'Din API Publishable Key är specifik för antingen live- eller testläge. Se till att du använder rätt nyckel.';
$lang['StripePayments.secret_key'] = 'Hemlig nyckel för API';
$lang['StripePayments.publishable_key'] = 'API-nyckel som kan publiceras';
$lang['StripePayments.ach_form.mandate_future_usage'] = 'Om du använder %1$s tjänster eller köper ytterligare produkter regelbundet enligt %1$s villkor, godkänner du att %1$s debiterar ditt bankkonto regelbundet. Betalningar som faller utanför de regelbundna debiteringar som godkänts ovan debiteras först efter att ditt tillstånd har erhållits.';
$lang['StripePayments.ach_form.mandate_authorization'] = 'Genom att skicka in detta formulär godkänner du att %1$s debiterar det bankkonto som anges ovan för alla belopp som är skyldiga för avgifter som uppstår till följd av din användning av %1$s tjänster och/eller köp av produkter från %1$s, enligt %1$s webbplats och villkor, tills detta tillstånd återkallas. Du kan ändra eller avbryta detta tillstånd när som helst genom att meddela %1$s med 30 (trettio) dagars varsel.';
$lang['StripePayments.ach_form.field_second_deposit'] = 'Andra insättningen';
$lang['StripePayments.ach_form.field_first_deposit'] = 'Första insättning';
$lang['StripePayments.ach_form.verification_notice'] = 'Vi skickade två små insättningar till detta bankkonto. För att verifiera detta konto, vänligen bekräfta beloppen på dessa insättningar.';
$lang['StripePayments.ach_form.field_routing_number'] = 'Routingnummer';
$lang['StripePayments.ach_form.field_account_number'] = 'Kontonummer';
$lang['StripePayments.ach_form.field_holder_type_company'] = 'Företag';
$lang['StripePayments.ach_form.field_holder_type_individual'] = 'Individuell';
$lang['StripePayments.ach_form.field_holder_type'] = 'Typ av hållare';
$lang['StripePayments.ach_form.field_type'] = 'Typ av konto';
$lang['StripePayments.description'] = 'Använder Stripe Elements och Payment Request API för att automatiskt hantera 3D Secure och SCA för att skicka kreditkort direkt via Stripe';
$lang['StripePayments.name'] = 'Stripe Betalningar';
$lang['StripePayments.!error.invalid_request_error'] = 'Betalningsgatewayen returnerade ett fel när begäran behandlades.';
$lang['StripePayments.!error.bank_account_unverified'] = 'Du måste verifiera ditt bankkonto innan du kan använda det för att göra en betalning.';
$lang['StripePayments.!error.secret_key.valid'] = 'Det gick inte att ansluta till Stripe API med den angivna hemliga nyckeln.';
$lang['StripePayments.!error.secret_key.empty'] = 'Ange en hemlig nyckel.';
$lang['StripePayments.!error.publishable_key.empty'] = 'Ange en publicerbar nyckel.';
$lang['StripePayments.!error.auth'] = 'Gatewayen kunde inte autentisera.';
$lang['StripePayments.request_three_d_secure_note'] = 'Om du är en Stripe-användare baserad i Indien måste du alltid utföra 3D Secure-autentisering (3DS) innan du sparar ett nytt kort med Stripe.';
$lang['StripePayments.request_three_d_secure_challenge'] = 'Presentera 3D Secure-utmaning när en klient sparar en betalningsmetod eller bearbetar en betalningsmetod (lagrad eller ej lagrad)';
$lang['StripePayments.request_three_d_secure_frictionless'] = 'Presentera 3D Secure-utmaning när en klient sparar en betalningsmetod eller behandlar en icke lagrad betalningsmetod';
$lang['StripePayments.request_three_d_secure_automatic'] = 'Tillåt Stripe att avgöra när en 3D Secure-utmaning ska presenteras';
$lang['StripePayments.request_three_d_secure'] = 'Flöde för 3D Secure-autentisering';

