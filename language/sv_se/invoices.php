<?php
/**
 * Invoices
 *
 * @package blesta
 * @subpackage blesta.language.sv_se
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Invoices.!error.line_items.minimum_split'] = 'Fakturan måste ha minst 2 rader för att kunna delas upp.';
$lang['Invoices.!error.line_items.empty_split'] = 'Inga fakturarader har valts att delas upp.';
$lang['Invoices.!error.lines[][tax].format'] = 'Artikelskatt måste vara "sant" eller "falskt';
$lang['Invoices.!error.lines[][amount].format'] = 'Enhetskostnaden måste vara ett tal.';
$lang['Invoices.!error.lines[][qty].minimum'] = 'Ange en kvantitet på 1 eller fler.';
$lang['Invoices.!error.lines[][qty].format'] = 'Mängden måste vara ett tal.';
$lang['Invoices.!error.lines[][description].empty'] = 'Ange en beskrivning av varuposten.';
$lang['Invoices.!error.lines[][service_id].exists'] = 'Ogiltigt service-ID.';
$lang['Invoices.!error.lines[][id].exists'] = 'Ogiltigt ID för post.';
$lang['Invoices.!error.domain_renew.failed'] = 'Domäner kan endast förnyas för upp till 10 år.';
$lang['Invoices.!error.invoice_id.draft'] = 'Den aktuella fakturan är inte ett fakturautkast och kan därför inte raderas.';
$lang['Invoices.!error.date_last_renewed.format'] = 'Det senaste förnyelsedatumet för återkommande fakturor måste vara ett giltigt datumformat.';
$lang['Invoices.!error.date_renews.format'] = 'Förnyelsedatumet för återkommande fakturor måste vara ett giltigt datumformat.';
$lang['Invoices.!error.duration.format'] = 'Varaktigheten är ogiltig.';
$lang['Invoices.!error.period.format'] = 'Perioden är ogiltig.';
$lang['Invoices.!error.term.bounds'] = 'Termen ska vara mellan 1 och 65535.';
$lang['Invoices.!error.term.format'] = 'Termen ska vara ett nummer.';
$lang['Invoices.!error.delivery.exists'] = 'Den angivna leveransmetoden existerar inte.';
$lang['Invoices.!error.currency.length'] = 'Valutakoden måste vara 3 tecken lång.';
$lang['Invoices.!error.status.format'] = 'Ogiltig status.';
$lang['Invoices.!error.autodebit.valid'] = 'Välj om du vill tillåta autogiro för denna faktura eller inte.';
$lang['Invoices.!error.date_autodebit.format'] = 'Förfallodatumet är i ett ogiltigt datumformat.';
$lang['Invoices.!error.date_closed.format'] = 'Det avslutade datumet har ett ogiltigt datumformat.';
$lang['Invoices.!error.date_due.after_billed'] = 'Förfallodatumet måste vara på eller efter faktureringsdatumet.';
$lang['Invoices.!error.date_due.format'] = 'Förfallodatumet är i ett ogiltigt datumformat.';
$lang['Invoices.!error.date_billed.format'] = 'Faktureringsdatumet har ett ogiltigt datumformat.';
$lang['Invoices.!error.client_id.exists'] = 'Ogiltigt klient-ID.';
$lang['Invoices.!error.id.amount_applied'] = 'Fakturarader, valuta och status kan inte uppdateras eftersom ett belopp redan har tillämpats på denna faktura.';
$lang['Invoices.!error.id_value.valid'] = 'Det gick inte att fastställa fakturans ID-värde.';
$lang['Invoices.!error.id_format.length'] = 'ID-formatet för fakturor får inte överstiga 64 tecken.';
$lang['Invoices.!error.id_format.empty'] = 'Inget ID-format för fakturor.';
$lang['Invoices.!error.invoice_add.failed'] = 'Denna faktura kunde inte skapas. Vänligen försök igen.';
$lang['Invoices.!error.delivery.length'] = 'Faktureringssättets längd får inte överstiga 32 tecken.';
$lang['Invoices.!error.delivery.empty'] = 'Ange ett leveranssätt för fakturan.';
$lang['Invoices.!error.method.exists'] = 'Du måste ange minst en leveransmetod.';
$lang['Invoices.!error.invoice_recur_id.exists'] = 'Ogiltigt ID för återkommande faktura.';
$lang['Invoices.!error.invoice_id.exists'] = 'Ogiltigt faktura-ID.';
$lang['Invoices.cache_methods.json_pdf'] = 'JSON + PDF';
$lang['Invoices.cache_methods.json'] = 'JSON';
$lang['Invoices.cache_methods.none'] = 'Ingen';
$lang['Invoices.types.proforma'] = 'Pro forma';
$lang['Invoices.types.standard'] = 'Standard';
$lang['Invoices.status.void'] = 'Tomrum';
$lang['Invoices.status.draft'] = 'Utkast';
$lang['Invoices.status.proforma'] = 'Pro forma';
$lang['Invoices.status.active'] = 'Aktiv';
$lang['Invoices.!line_item.recurring_renew_description'] = '%1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.coupon_line_item_description_percent'] = 'Kupong %1$s - %2$s%%%%.';
$lang['Invoices.!line_item.coupon_line_item_description_amount'] = 'Kupong %1$s';
$lang['Invoices.!line_item.prorated_credit'] = 'Proraterad kredit';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_onetime'] = '↳ Proportionellt tillägg av %1$s %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_date'] = '↳ Proportionellt tillägg av %1$s %2$sx %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_qty'] = '↳ Proportionellt tillägg av %1$s %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_onetime'] = '↳ Proportionellt tillägg av %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_date'] = '↳ Proportionellt tillägg på %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_text'] = '↳ Proportionellt tillägg av %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_onetime'] = '↳ Proportionellt tillägg av %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_addition_date'] = '↳ Proportionellt tillägg av %1$s %2$s (%3$s - %4$s)';
$lang['Invoices.!line_item.service_option_prorated_addition'] = '↳ Proportionellt tillägg av %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_onetime'] = '↳ Proraterad uppgradering av %1$s från %2$sx %3$s till %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_date'] = '↳ Proportionell uppgradering av %1$s från %2$sx %3$s till %4$sx %5$s (%6$s - %7$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty'] = '↳ Proraterad uppgradering av %1$s från %2$sx %3$s till %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_onetime'] = '↳ Proraterad uppgradering av %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_date'] = '↳ Proraterad uppgradering av %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text'] = '↳ Proraterad uppgradering av %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_onetime'] = '↳ Proraterad uppgradering av %1$s från %2$s till %3$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_date'] = '↳ Proraterad uppgradering av %1$s från %2$s till %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade'] = '↳ Proraterad uppgradering av %1$s från %2$s till %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description_onetime'] = 'Proraterad uppgradering från %1$s till %2$s - %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description'] = 'Proraterad uppgradering från %1$s till %2$s - %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_setup_fee_description'] = '↳ %1$s - %2$s Inställningsavgift';
$lang['Invoices.!line_item.service_option_renew_description'] = '↳ %1$s - %2$s';
$lang['Invoices.!line_item.service_setup_fee_description'] = '%1$s - %2$s Inställningsavgift';
$lang['Invoices.!line_item.service_cancel_fee_description'] = '%1$s - %2$s Avbokningsavgift';
$lang['Invoices.!line_item.service_renew_description'] = '%5$s%1$s - %2$s (%3$s - %4$s)';
$lang['Invoices.!note_private.line_item'] = '- %1$s @ %2$s: %3$s';
$lang['Invoices.!note_private.removed_lines'] = 'Borttagna radposter:';
$lang['Invoices.!note_private.service_cancel_date'] = 'Tjänst #%1$s avbruten %2$s.';
$lang['Invoices.getDeliveryMethods.postalmethods'] = 'Postmetoder';
$lang['Invoices.getDeliveryMethods.interfax'] = 'InterFax';
$lang['Invoices.getDeliveryMethods.paper'] = 'Tidning';
$lang['Invoices.getDeliveryMethods.email'] = 'E-post';
$lang['Invoices.getPricingPeriods.year'] = 'År';
$lang['Invoices.getPricingPeriods.month'] = 'Månad';
$lang['Invoices.getPricingPeriods.week'] = 'Vecka';
$lang['Invoices.getPricingPeriods.day'] = 'Dag';
$lang['Invoices.!error.invoice_id.unique'] = 'Destinationsfakturan får inte vara en del av de fakturor som ska slås samman.';
$lang['Invoices.!error.invoice_id.status'] = 'Destinationsfakturan måste vara öppen och utan några transaktioner.';
$lang['Invoices.!error.invoice_ids.client'] = 'Alla fakturor måste tillhöra samma kund.';
$lang['Invoices.!error.invoice_ids.status'] = 'Alla fakturor måste vara öppna och utan några transaktioner.';
$lang['Invoices.!error.invoice_ids.currency'] = 'Alla fakturor måste ha samma valuta.';
$lang['Invoices.!error.invoice_ids.count'] = 'Minst två fakturor måste väljas.';
$lang['Invoices.!line_item.parent_description'] = 'Child Service på %1$s - %2$s:';

