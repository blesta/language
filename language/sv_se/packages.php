<?php
/**
 * Packages
 *
 * @package blesta
 * @subpackage blesta.language.sv_se
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Packages.!error.manual_activation.valid'] = 'Manuell aktivering måste vara antingen 1 eller 0.';
$lang['Packages.getStatusTypes.restricted'] = 'Begränsad';
$lang['Packages.getStatusTypes.inactive'] = 'Inaktiv';
$lang['Packages.getStatusTypes.active'] = 'Aktiv';
$lang['Packages.getPricingPeriods.onetime_plural'] = 'En gång';
$lang['Packages.getPricingPeriods.year_plural'] = 'År';
$lang['Packages.getPricingPeriods.month_plural'] = 'månader';
$lang['Packages.getPricingPeriods.week_plural'] = 'Veckor';
$lang['Packages.getPricingPeriods.day_plural'] = 'Dagar';
$lang['Packages.getPricingPeriods.onetime'] = 'En gång';
$lang['Packages.getPricingPeriods.year'] = 'År';
$lang['Packages.getPricingPeriods.month'] = 'Månad';
$lang['Packages.getPricingPeriods.week'] = 'Vecka';
$lang['Packages.getPricingPeriods.day'] = 'Dag';
$lang['Packages.!error.groups[].valid'] = 'Den valda paketgruppen tillhör inte det angivna företaget.';
$lang['Packages.!error.groups[].exists'] = 'Ogiltigt ID för paketgrupp.';
$lang['Packages.!error.pricing[][id].deletable'] = 'Termen kunde inte tas bort eftersom den används av en eller flera tjänster.';
$lang['Packages.!error.pricing[][id].format'] = 'Ogiltigt paketpris-ID.';
$lang['Packages.!error.pricing[][currency].in_use'] = 'Valuta kan inte uppdateras i en prissättning som är i bruk.';
$lang['Packages.!error.pricing[][currency].format'] = 'Valutakoden måste bestå av 3 tecken.';
$lang['Packages.!error.pricing[][cancel_fee].format'] = 'Annulleringsavgiften måste vara ett tal.';
$lang['Packages.!error.pricing[][setup_fee].format'] = 'Uppläggningsavgiften måste vara ett tal.';
$lang['Packages.!error.pricing[][price_transfer].format'] = 'Överlåtelsepriset måste vara ett tal.';
$lang['Packages.!error.pricing[][price_renews].valid'] = 'Förnyelsepris kan inte ställas in för en tidsperiod.';
$lang['Packages.!error.pricing[][price_renews].format'] = 'Förnyelsepriset måste vara ett tal.';
$lang['Packages.!error.pricing[][price].format'] = 'Priset måste vara ett tal.';
$lang['Packages.!error.pricing[][period].in_use'] = 'Period kan inte uppdateras i en prissättning som är i bruk.';
$lang['Packages.!error.pricing[][period].format'] = 'Ogiltig periodtyp.';
$lang['Packages.!error.pricing[][term].in_use'] = 'Termen kan inte uppdateras i en prissättning som är i bruk.';
$lang['Packages.!error.pricing[][term].valid'] = 'Termen måste vara större än 0.';
$lang['Packages.!error.pricing[][term].length'] = 'Termlängden får inte överstiga 5 tecken.';
$lang['Packages.!error.pricing[][term].format'] = 'Term måste vara ett nummer.';
$lang['Packages.!error.email_content.parse'] = 'Fel vid tolkning av mall: %1$s';
$lang['Packages.!error.email_content[][lang].length'] = 'Språkets längd får inte överstiga 5 tecken.';
$lang['Packages.!error.email_content[][lang].empty'] = 'Vänligen ange ett språk.';
$lang['Packages.!error.prorata_cutoff.format'] = 'Pro rata cutoff-dagen måste vara mellan 1 och 28.';
$lang['Packages.!error.prorata_day.format'] = 'Pro rata-dagen måste vara mellan 1 och 28.';
$lang['Packages.!error.hidden.format'] = 'Om denna grupp ska döljas i gränssnittet måste ställas in på 1 eller 0.';
$lang['Packages.!error.status.format'] = 'Ogiltig status.';
$lang['Packages.!error.upgrades_use_renewal.valid'] = 'Använd förnyelsepriser för uppgraderingar måste vara antingen 1 eller 0.';
$lang['Packages.!error.override_price.valid'] = 'Ange paketpris som åsidosättningspris måste vara antingen 1 eller 0.';
$lang['Packages.!error.single_term.valid'] = 'Den enskilda termen måste vara antingen 1 eller 0.';
$lang['Packages.!error.taxable.length'] = 'Den beskattningsbara längden får inte överstiga 1 tecken.';
$lang['Packages.!error.taxable.format'] = 'Taxable måste vara ett tal.';
$lang['Packages.!error.module_group_client.valid'] = 'Tillåt kunden att välja grupp måste vara antingen 1 eller 0.';
$lang['Packages.!error.module_group.format'] = 'Ogiltig modulgrupp angiven.';
$lang['Packages.!error.module_row.format'] = 'Ogiltig modulrad angiven.';
$lang['Packages.!error.plugins[].valid'] = 'Ogiltigt plugin angivet.';
$lang['Packages.!error.option_groups[].valid'] = 'Ogiltig konfigurerbar paketalternativgrupp angiven.';
$lang['Packages.!error.client_qty.format'] = 'Klientgränsen måste vara ett tal.';
$lang['Packages.!error.qty.format'] = 'Antal måste vara ett tal.';
$lang['Packages.!error.descriptions.empty_lang'] = 'Ange en språkkod för paketet för varje beskrivning.';
$lang['Packages.!error.descriptions.format'] = 'Paketbeskrivningarna är i ett ogiltigt format.';
$lang['Packages.!error.names.empty_lang'] = 'Ange en språkkod för paketet för varje namn.';
$lang['Packages.!error.names.empty_name'] = 'Ange ett paketnamn för varje språk.';
$lang['Packages.!error.names.format'] = 'Paketnamnen är i ett ogiltigt format.';
$lang['Packages.!error.module_id.changed'] = 'Modulen kan inte ändras eftersom det redan finns en eller flera tjänster som använder detta paket.';
$lang['Packages.!error.module_id.exists'] = 'Ogiltig modul angiven.';
$lang['Packages.!error.package_id.has_children'] = 'Paketet kunde inte raderas eftersom en tjänst har underordnade tjänster.';
$lang['Packages.!error.package_id.exists'] = 'Paketet kunde inte raderas eftersom en tjänst för närvarande använder det.';
$lang['Packages.!error.company_id.exists'] = 'Felaktigt företag angivet.';

