<?php
/**
 * Invoices
 *
 * @package blesta
 * @subpackage blesta.language.nl_nl
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Invoices.!error.lines[][tax].format'] = 'Line item tax moet een \'true\' of \'false\' zijn';
$lang['Invoices.!error.lines[][amount].format'] = 'De eenheidskosten moeten een getal zijn.';
$lang['Invoices.!error.lines[][qty].minimum'] = 'Voer een hoeveelheid van 1 of meer in.';
$lang['Invoices.!error.lines[][qty].format'] = 'De hoeveelheid moet een getal zijn.';
$lang['Invoices.!error.lines[][description].empty'] = 'Voer een beschrijving van het artikel in.';
$lang['Invoices.!error.lines[][service_id].exists'] = 'Ongeldig service-ID.';
$lang['Invoices.!error.lines[][id].exists'] = 'Ongeldig regelitem-ID.';
$lang['Invoices.!error.domain_renew.failed'] = 'Domeinen kunnen maximaal 10 jaar worden verlengd.';
$lang['Invoices.!error.invoice_id.draft'] = 'De opgegeven factuur is geen conceptfactuur en kon daarom niet worden verwijderd.';
$lang['Invoices.!error.date_last_renewed.format'] = 'De datum waarop de laatste terugkerende factuur is vernieuwd, moet een geldig datumformaat zijn.';
$lang['Invoices.!error.date_renews.format'] = 'De vernieuwingsdatum van de terugkerende factuur moet een geldig datumformaat zijn.';
$lang['Invoices.!error.duration.format'] = 'De duur is ongeldig.';
$lang['Invoices.!error.period.format'] = 'De periode is ongeldig.';
$lang['Invoices.!error.term.bounds'] = 'De term moet tussen 1 en 65535 liggen.';
$lang['Invoices.!error.term.format'] = 'De term moet een getal zijn.';
$lang['Invoices.!error.delivery.exists'] = 'De opgegeven leveringsmethode bestaat niet.';
$lang['Invoices.!error.currency.length'] = 'De valutacode moet 3 tekens lang zijn.';
$lang['Invoices.!error.status.format'] = 'Ongeldige status.';
$lang['Invoices.!error.autodebit.valid'] = 'Selecteer of je automatische incasso voor deze factuur wilt toestaan of niet.';
$lang['Invoices.!error.date_autodebit.format'] = 'De vervaldatum heeft een ongeldig datumformaat.';
$lang['Invoices.!error.date_closed.format'] = 'De gesloten datum heeft een ongeldige datumnotatie.';
$lang['Invoices.!error.date_due.after_billed'] = 'De vervaldatum moet op of na de gefactureerde datum liggen.';
$lang['Invoices.!error.date_due.format'] = 'De vervaldatum heeft een ongeldig datumformaat.';
$lang['Invoices.!error.date_billed.format'] = 'De gefactureerde datum heeft een ongeldige datumnotatie.';
$lang['Invoices.!error.client_id.exists'] = 'Ongeldig client-ID.';
$lang['Invoices.!error.id.amount_applied'] = 'Factuurregels, valuta en status worden mogelijk niet bijgewerkt omdat er al een bedrag op deze factuur is toegepast.';
$lang['Invoices.!error.id_value.valid'] = 'Kan factuur-ID-waarde niet bepalen.';
$lang['Invoices.!error.id_format.length'] = 'Het ID-formaat voor facturen mag niet langer zijn dan 64 tekens.';
$lang['Invoices.!error.id_format.empty'] = 'Geen ID-indeling ingesteld voor facturen.';
$lang['Invoices.!error.invoice_add.failed'] = 'Deze factuur kon niet worden aangemaakt. Probeer het opnieuw.';
$lang['Invoices.!error.delivery.length'] = 'De lengte van de leveringsmethode voor de factuur mag niet langer zijn dan 32 tekens.';
$lang['Invoices.!error.delivery.empty'] = 'Voer een leveringsmethode voor de factuur in.';
$lang['Invoices.!error.method.exists'] = 'U moet ten minste één aflevermethode instellen.';
$lang['Invoices.!error.invoice_recur_id.exists'] = 'Ongeldige factuur ID.';
$lang['Invoices.!error.invoice_id.exists'] = 'Ongeldig factuur-ID.';
$lang['Invoices.cache_methods.json_pdf'] = 'JSON + PDF';
$lang['Invoices.cache_methods.json'] = 'JSON';
$lang['Invoices.cache_methods.none'] = 'Geen';
$lang['Invoices.types.proforma'] = 'Pro forma';
$lang['Invoices.types.standard'] = 'Standaard';
$lang['Invoices.status.void'] = 'Leegte';
$lang['Invoices.status.draft'] = 'Ontwerp';
$lang['Invoices.status.proforma'] = 'Pro forma';
$lang['Invoices.status.active'] = 'Actief';
$lang['Invoices.!line_item.recurring_renew_description'] = '%1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.coupon_line_item_description_percent'] = 'Coupon %1$s - %2$s%%';
$lang['Invoices.!line_item.coupon_line_item_description_amount'] = 'Coupon %1$s';
$lang['Invoices.!line_item.prorated_credit'] = 'Pro rata krediet';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_onetime'] = '↳ Gerantsoeneerde optelling van %1$s %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_date'] = '↳ Gerantsoeneerde optelling van %1$s %2$sx %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_qty'] = '↳ Gerantsoeneerde optelling van %1$s %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_onetime'] = 'Naar rato bijtelling van %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_date'] = 'Naar rato bijtelling van %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_text'] = 'Naar rato bijtelling van %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_onetime'] = 'Naar rato bijtelling van %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_addition_date'] = '↳ Gerantsoeneerde toevoeging van %1$s %2$s (%3$s - %4$s)';
$lang['Invoices.!line_item.service_option_prorated_addition'] = 'Naar rato bijtelling van %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_onetime'] = '↳ Geprorateerde upgrade van %1$s van %2$sx %3$s naar %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_date'] = '↳ Geprorateerde upgrade van %1$s van %2$sx %3$s naar %4$sx %5$s (%6$s - %7$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty'] = '↳ Geprorateerde upgrade van %1$s van %2$sx %3$s naar %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_onetime'] = 'Geprorateerde upgrade van %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_date'] = 'Geprorateerde upgrade van %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text'] = 'Geprorateerde upgrade van %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_onetime'] = 'Geprorateerde upgrade van %1$s van %2$s naar %3$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_date'] = '↳ Geprorateerde upgrade van %1$s van %2$s naar %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade'] = 'Geprorateerde upgrade van %1$s van %2$s naar %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description_onetime'] = 'Geproorateerde upgrade van %1$s naar %2$s - %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description'] = 'Geprorateerde upgrade van %1$s naar %2$s - %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_setup_fee_description'] = '↳ %1$s - %2$s setupkosten';
$lang['Invoices.!line_item.service_option_renew_description'] = '%1$s - %2$s';
$lang['Invoices.!line_item.service_setup_fee_description'] = '%1$s - %2$s setupkosten';
$lang['Invoices.!line_item.service_cancel_fee_description'] = '%1$s - %2$s Annuleringskosten';
$lang['Invoices.!line_item.service_renew_description'] = '%5$s%1$s - %2$s (%3$s - %4$s)';
$lang['Invoices.!note_private.line_item'] = '- %1$s @ %2$s: %3$s';
$lang['Invoices.!note_private.removed_lines'] = 'Regelitems verwijderd:';
$lang['Invoices.!note_private.service_cancel_date'] = 'Service #%1$s geannuleerd %2$s.';
$lang['Invoices.getDeliveryMethods.postalmethods'] = 'PostMethodes';
$lang['Invoices.getDeliveryMethods.interfax'] = 'InterFax';
$lang['Invoices.getDeliveryMethods.paper'] = 'Papier';
$lang['Invoices.getDeliveryMethods.email'] = 'E-mail';
$lang['Invoices.getPricingPeriods.year'] = 'Jaar';
$lang['Invoices.getPricingPeriods.month'] = 'Maand';
$lang['Invoices.getPricingPeriods.week'] = 'Week';
$lang['Invoices.getPricingPeriods.day'] = 'Dag';
$lang['Invoices.!error.line_items.minimum_split'] = 'De factuur moet minstens 2 regels hebben om te kunnen worden gesplitst.';
$lang['Invoices.!error.line_items.empty_split'] = 'Er zijn geen factuurregels geselecteerd om te splitsen.';

