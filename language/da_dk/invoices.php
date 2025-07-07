<?php
/**
 * Invoices
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Invoices.getPricingPeriods.day'] = 'Dag';
$lang['Invoices.getPricingPeriods.week'] = 'Uge';
$lang['Invoices.getPricingPeriods.month'] = 'Måned';
$lang['Invoices.getPricingPeriods.year'] = 'År';
$lang['Invoices.getDeliveryMethods.email'] = 'E-mail';
$lang['Invoices.getDeliveryMethods.paper'] = 'Papir';
$lang['Invoices.getDeliveryMethods.interfax'] = 'InterFax';
$lang['Invoices.getDeliveryMethods.postalmethods'] = 'PostMetoder';
$lang['Invoices.!note_private.service_cancel_date'] = 'Tjeneste #%1$s annulleret %2$s.';
$lang['Invoices.!note_private.removed_lines'] = 'Fjernede linjeposter:';
$lang['Invoices.!note_private.line_item'] = '- %1$s @ %2$s: %3$s';
$lang['Invoices.!line_item.service_renew_description'] = '%5$s%1$s - %2$s (%3$s - %4$s)';
$lang['Invoices.!line_item.service_cancel_fee_description'] = '%1$s - %2$s Afbestillingsgebyr';
$lang['Invoices.!line_item.service_setup_fee_description'] = '%1$s - %2$s Opsætningsgebyr';
$lang['Invoices.!line_item.service_option_renew_description'] = '↳ %1$s - %2$s';
$lang['Invoices.!line_item.service_option_setup_fee_description'] = '↳ %1$s - %2$s Opsætningsgebyr';
$lang['Invoices.!line_item.service_prorated_upgrade_description'] = 'Prorateret opgradering fra %1$s til %2$s - %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_prorated_upgrade_description_onetime'] = 'Prorateret opgradering fra %1$s til %2$s - %3$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade'] = '↳ Prorateret opgradering af %1$s fra %2$s til %3$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_date'] = '↳ Prorateret opgradering af %1$s fra %2$s til %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_onetime'] = '↳ Prorateret opgradering af %1$s fra %2$s til %3$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text'] = '↳ Forskudt opgradering af %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_date'] = '↳ Prorateret opgradering af %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_onetime'] = '↳ Forskudt opgradering af %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty'] = '↳ Prorateret opgradering af %1$s fra %2$sx %3$s til %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_date'] = '↳ Prorateret opgradering af %1$s fra %2$sx %3$s til %4$sx %5$s (%6$s - %7$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_onetime'] = '↳ Prorateret opgradering af %1$s fra %2$sx %3$s til %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_addition'] = '↳ Prorateret tillæg af %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_addition_date'] = '↳ Prorateret tilføjelse af %1$s %2$s (%3$s - %4$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_onetime'] = '↳ Prorateret tillæg af %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text'] = '↳ Prorateret tillæg af %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_date'] = '↳ Prorateret tilføjelse af %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_text_onetime'] = '↳ Prorateret tillæg af %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_qty'] = '↳ Prorateret addition af %1$s %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_date'] = '↳ Prorateret addition af %1$s %2$sx %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_onetime'] = '↳ Prorateret addition af %1$s %2$sx %3$s';
$lang['Invoices.!line_item.prorated_credit'] = 'Prorateret kredit';
$lang['Invoices.!line_item.coupon_line_item_description_amount'] = 'Kupon %1$s';
$lang['Invoices.!line_item.coupon_line_item_description_percent'] = 'Kupon %1$s - %2$s%%%.';
$lang['Invoices.!line_item.recurring_renew_description'] = '%1$s (%2$s - %3$s)';
$lang['Invoices.status.active'] = 'Aktiv';
$lang['Invoices.status.proforma'] = 'Proforma';
$lang['Invoices.status.draft'] = 'Udkast';
$lang['Invoices.status.void'] = 'Tomrum';
$lang['Invoices.types.standard'] = 'Standard';
$lang['Invoices.types.proforma'] = 'Proforma';
$lang['Invoices.cache_methods.none'] = 'Ingen';
$lang['Invoices.cache_methods.json'] = 'JSON';
$lang['Invoices.cache_methods.json_pdf'] = 'JSON + PDF';
$lang['Invoices.!error.invoice_id.exists'] = 'Ugyldigt faktura-ID.';
$lang['Invoices.!error.invoice_recur_id.exists'] = 'Ugyldigt ID for tilbagevendende fakturaer.';
$lang['Invoices.!error.method.exists'] = 'Du skal angive mindst én leveringsmetode.';
$lang['Invoices.!error.delivery.empty'] = 'Indtast venligst en leveringsmetode for fakturaen.';
$lang['Invoices.!error.delivery.length'] = 'Længden på fakturaens leveringsmetode må ikke overstige 32 tegn.';
$lang['Invoices.!error.invoice_add.failed'] = 'Denne faktura kunne ikke oprettes. Prøv venligst igen.';
$lang['Invoices.!error.id_format.empty'] = 'Intet ID-format indstillet til fakturaer.';
$lang['Invoices.!error.id_format.length'] = 'ID-formatet for fakturaer må ikke overstige 64 tegn.';
$lang['Invoices.!error.id_value.valid'] = 'Kan ikke bestemme faktura-ID-værdi.';
$lang['Invoices.!error.id.amount_applied'] = 'Fakturalinjer, valuta og status kan ikke opdateres, fordi der allerede er anvendt et beløb på denne faktura.';
$lang['Invoices.!error.client_id.exists'] = 'Ugyldigt klient-ID.';
$lang['Invoices.!error.date_billed.format'] = 'Den fakturerede dato er i et ugyldigt datoformat.';
$lang['Invoices.!error.date_due.format'] = 'Forfaldsdatoen er i et ugyldigt datoformat.';
$lang['Invoices.!error.date_due.after_billed'] = 'Forfaldsdatoen skal være på eller efter den fakturerede dato.';
$lang['Invoices.!error.date_closed.format'] = 'Den afsluttede dato er i et ugyldigt datoformat.';
$lang['Invoices.!error.date_autodebit.format'] = 'Forfaldsdatoen er i et ugyldigt datoformat.';
$lang['Invoices.!error.autodebit.valid'] = 'Vælg, om du vil tillade autodebitering for denne faktura eller ej.';
$lang['Invoices.!error.status.format'] = 'Ugyldig status.';
$lang['Invoices.!error.currency.length'] = 'Valutakoden skal være på 3 tegn.';
$lang['Invoices.!error.delivery.exists'] = 'Den angivne leveringsmetode findes ikke.';
$lang['Invoices.!error.term.format'] = 'Betegnelsen skal være et tal.';
$lang['Invoices.!error.term.bounds'] = 'Termen skal være mellem 1 og 65535.';
$lang['Invoices.!error.period.format'] = 'Perioden er ugyldig.';
$lang['Invoices.!error.duration.format'] = 'Varigheden er ugyldig.';
$lang['Invoices.!error.date_renews.format'] = 'Datoen for fornyelse af tilbagevendende fakturaer skal være et gyldigt datoformat.';
$lang['Invoices.!error.date_last_renewed.format'] = 'Den sidste dato for fornyelse af tilbagevendende fakturaer skal være et gyldigt datoformat.';
$lang['Invoices.!error.invoice_id.draft'] = 'Den givne faktura er ikke en kladdefaktura og kunne derfor ikke slettes.';
$lang['Invoices.!error.domain_renew.failed'] = 'Domæner kan kun fornyes i op til 10 år.';
$lang['Invoices.!error.lines[][id].exists'] = 'Ugyldigt varelinje-ID.';
$lang['Invoices.!error.lines[][service_id].exists'] = 'Ugyldigt service-ID.';
$lang['Invoices.!error.lines[][description].empty'] = 'Indtast venligst en varelinjebeskrivelse.';
$lang['Invoices.!error.lines[][qty].format'] = 'Mængden skal være et tal.';
$lang['Invoices.!error.lines[][qty].minimum'] = 'Indtast venligst et antal på 1 eller flere.';
$lang['Invoices.!error.lines[][amount].format'] = 'Enhedsomkostningerne skal være et tal.';
$lang['Invoices.!error.lines[][tax].format'] = 'Linjeafgift skal være \'sand\' eller \'falsk\'.';
$lang['Invoices.!error.line_items.empty_split'] = 'Der er ikke valgt nogen fakturalinjer til opdeling.';
$lang['Invoices.!error.line_items.minimum_split'] = 'Fakturaen skal have mindst 2 linjer for at blive delt.';
$lang['Invoices.!error.invoice_id.unique'] = 'Destinationsfakturaen kan ikke være en del af de fakturaer, der skal flettes.';
$lang['Invoices.!error.invoice_id.status'] = 'Destinationsfakturaen skal være åben og uden transaktioner.';
$lang['Invoices.!error.invoice_ids.client'] = 'Alle fakturaer skal tilhøre den samme kunde.';
$lang['Invoices.!error.invoice_ids.status'] = 'Alle fakturaer skal være åbne og uden transaktioner.';
$lang['Invoices.!error.invoice_ids.currency'] = 'Alle fakturaer skal have samme valuta.';
$lang['Invoices.!error.invoice_ids.count'] = 'Der skal vælges mindst to fakturaer.';
$lang['Invoices.!line_item.parent_description'] = 'Child Service of %1$s - %2$s:';
$lang['Invoices.!error.service.renew_onetime'] = 'Engangstjenester kan ikke fornyes.';

