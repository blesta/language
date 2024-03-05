<?php
/**
 * Stripe Payments
 *
 * @package blesta
 * @subpackage blesta.language.nl_nl
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['StripePayments.charge_description'] = 'Kosten voor %1$s';
$lang['StripePayments.charge_description_default'] = 'Kosten voor gespecificeerd bedrag';
$lang['StripePayments.migrate_accounts'] = 'Accounts migreren';
$lang['StripePayments.warning_migrate_accounts'] = 'Verwijder de oude Stripe-gateway niet voordat je klaar bent met deze migratietool. Hierdoor wordt de tool ontoegankelijk.';
$lang['StripePayments.text_migrate_accounts'] = 'Je kunt betaalaccounts die offsite waren opgeslagen door de oude Stripe-gateway automatisch migreren naar deze Stripe Payments-gateway. Accounts die niet offsite zijn opgeslagen, moeten worden gemigreerd door handmatig nieuwe betaalaccounts aan te maken. Om time-outs te voorkomen worden migraties gedaan in batches van %1$s. Voer dit zo vaak uit als nodig is om alle betaalrekeningen te migreren.';
$lang['StripePayments.text_accounts_remaining'] = 'Resterende rekeningen: %1$s';
$lang['StripePayments.heading_migrate_accounts'] = 'Oude betaalrekeningen migreren';
$lang['StripePayments.webhook_note'] = 'Het wordt aanbevolen om de volgende url te configureren als een Webhook voor "payment_intent" gebeurtenissen in je Stripe-account.';
$lang['StripePayments.webhook'] = 'Stripe Webhook';
$lang['StripePayments.tooltip_secret_key'] = 'Je API geheime sleutel is specifiek voor live of testmodus. Zorg ervoor dat je de juiste sleutel gebruikt.';
$lang['StripePayments.tooltip_publishable_key'] = 'Uw API publiceerbare sleutel is specifiek voor live of testmodus. Zorg ervoor dat u de juiste sleutel gebruikt.';
$lang['StripePayments.secret_key'] = 'API geheime sleutel';
$lang['StripePayments.publishable_key'] = 'API publiceerbare sleutel';
$lang['StripePayments.ach_form.mandate_future_usage'] = 'Als u %1$s diensten gebruikt of periodiek aanvullende producten koopt volgens de voorwaarden van %1$s, machtigt u %1$s om uw bankrekening periodiek te debiteren. Betalingen die buiten de hierboven geautoriseerde periodieke afschrijvingen vallen, worden alleen na uw toestemming afgeschreven.';
$lang['StripePayments.ach_form.mandate_authorization'] = 'Door dit formulier in te dienen, machtigt u %1$s om de hierboven vermelde bankrekening te debiteren voor alle bedragen die verschuldigd zijn voor kosten die voortvloeien uit uw gebruik van %1$s diensten en/of aankoop van producten van %1$s, in overeenstemming met %1$s website en voorwaarden, totdat deze machtiging wordt ingetrokken. U kunt deze machtiging te allen tijde wijzigen of annuleren door %1$s hiervan 30 (dertig) dagen van tevoren op de hoogte te stellen.';
$lang['StripePayments.ach_form.field_second_deposit'] = 'Tweede storting';
$lang['StripePayments.ach_form.field_first_deposit'] = 'Eerste storting';
$lang['StripePayments.ach_form.verification_notice'] = 'We hebben twee kleine stortingen naar deze bankrekening gestuurd. Bevestig de bedragen van deze stortingen om deze rekening te verifiëren.';
$lang['StripePayments.ach_form.field_routing_number'] = 'Routing Nummer';
$lang['StripePayments.ach_form.field_account_number'] = 'Rekeningnummer';
$lang['StripePayments.ach_form.field_holder_type_company'] = 'Bedrijf';
$lang['StripePayments.ach_form.field_holder_type_individual'] = 'Individueel';
$lang['StripePayments.ach_form.field_holder_type'] = 'Type houder';
$lang['StripePayments.ach_form.field_type'] = 'Type rekening';
$lang['StripePayments.description'] = 'Gebruikt Stripe Elements en de Payment Request API om automatisch 3D Secure en SCA af te handelen om creditcards rechtstreeks via Stripe te versturen.';
$lang['StripePayments.name'] = 'Stripe Betalingen';
$lang['StripePayments.!error.invalid_request_error'] = 'De betalingsgateway heeft een fout geretourneerd bij het verwerken van de aanvraag.';
$lang['StripePayments.!error.bank_account_unverified'] = 'Je moet je bankrekening verifiëren voordat je deze kunt gebruiken om een betaling te doen.';
$lang['StripePayments.!error.secret_key.valid'] = 'Kan geen verbinding maken met de Stripe API met de opgegeven geheime sleutel.';
$lang['StripePayments.!error.secret_key.empty'] = 'Voer een geheime sleutel in.';
$lang['StripePayments.!error.publishable_key.empty'] = 'Voer een publiceerbare sleutel in.';
$lang['StripePayments.!error.auth'] = 'De gateway kon zich niet authentiseren.';

