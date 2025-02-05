<?php
/**
 * Packages
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Packages.!error.company_id.exists'] = 'Ugyldig virksomhed angivet.';
$lang['Packages.!error.package_id.exists'] = 'Pakken kunne ikke slettes, fordi en tjeneste bruger den i øjeblikket.';
$lang['Packages.!error.package_id.has_children'] = 'Pakken kunne ikke slettes, fordi en tjeneste har underordnede tjenester.';
$lang['Packages.!error.module_id.exists'] = 'Ugyldigt modul angivet.';
$lang['Packages.!error.module_id.changed'] = 'Modulet kan ikke ændres, fordi der allerede er en eller flere tjenester, der bruger denne pakke.';
$lang['Packages.!error.names.format'] = 'Pakkenavnene er i et ugyldigt format.';
$lang['Packages.!error.names.empty_name'] = 'Angiv venligst et pakkenavn for hvert sprog.';
$lang['Packages.!error.names.empty_lang'] = 'Angiv en sprogkode for pakken for hvert navn.';
$lang['Packages.!error.descriptions.format'] = 'Pakkebeskrivelserne er i et ugyldigt format.';
$lang['Packages.!error.descriptions.empty_lang'] = 'Angiv venligst en sprogkode for pakken for hver beskrivelse.';
$lang['Packages.!error.qty.format'] = 'Mængde skal være et tal.';
$lang['Packages.!error.client_qty.format'] = 'Klientgrænsen skal være et tal.';
$lang['Packages.!error.option_groups[].valid'] = 'Ugyldig konfigurerbar pakkeindstillingsgruppe angivet.';
$lang['Packages.!error.plugins[].valid'] = 'Ugyldigt plugin angivet.';
$lang['Packages.!error.module_row.format'] = 'Ugyldig modulrække angivet.';
$lang['Packages.!error.module_group.format'] = 'Ugyldig modulgruppe angivet.';
$lang['Packages.!error.module_group_client.valid'] = 'Allow Client to Select Group skal være enten 1 eller 0.';
$lang['Packages.!error.taxable.format'] = 'Taxable skal være et tal.';
$lang['Packages.!error.taxable.length'] = 'Den afgiftspligtige længde må ikke overstige 1 tegn.';
$lang['Packages.!error.single_term.valid'] = 'Den enkelte term skal være enten 1 eller 0.';
$lang['Packages.!error.override_price.valid'] = 'Indstil pakkepris som overstyringspris skal være enten 1 eller 0.';
$lang['Packages.!error.upgrades_use_renewal.valid'] = 'Brug af fornyelsespriser for opgraderinger skal være enten 1 eller 0.';
$lang['Packages.!error.status.format'] = 'Ugyldig status.';
$lang['Packages.!error.hidden.format'] = 'Om denne gruppe skal være skjult i grænsefladen, skal indstilles til 1 eller 0.';
$lang['Packages.!error.prorata_day.format'] = 'Pro rata-dagen skal være mellem 1 og 28.';
$lang['Packages.!error.prorata_cutoff.format'] = 'Pro rata-grænsedagen skal være mellem 1 og 28.';
$lang['Packages.!error.email_content[][lang].empty'] = 'Indtast venligst et sprog.';
$lang['Packages.!error.email_content[][lang].length'] = 'Sprogets længde må ikke overstige 5 tegn.';
$lang['Packages.!error.email_content.parse'] = 'Skabelon-parsefejl: %1$s';
$lang['Packages.!error.pricing[][term].format'] = 'Term skal være et tal.';
$lang['Packages.!error.pricing[][term].length'] = 'Termlængden må ikke overstige 5 tegn.';
$lang['Packages.!error.pricing[][term].valid'] = 'Udtrykket skal være større end 0.';
$lang['Packages.!error.pricing[][term].in_use'] = 'Term kan ikke opdateres i en prisfastsættelse, der er i brug.';
$lang['Packages.!error.pricing[][period].format'] = 'Ugyldig periodetype.';
$lang['Packages.!error.pricing[][period].in_use'] = 'Perioden kan ikke opdateres i en prisfastsættelse, der er i brug.';
$lang['Packages.!error.pricing[][price].format'] = 'Prisen skal være et tal.';
$lang['Packages.!error.pricing[][price_renews].format'] = 'Fornyelsesprisen skal være et tal.';
$lang['Packages.!error.pricing[][price_renews].valid'] = 'Fornyelsesprisen kan ikke indstilles for en enkelt periode.';
$lang['Packages.!error.pricing[][price_transfer].format'] = 'Overførselsprisen skal være et tal.';
$lang['Packages.!error.pricing[][setup_fee].format'] = 'Opsætningsgebyret skal være et tal.';
$lang['Packages.!error.pricing[][cancel_fee].format'] = 'Afbestillingsgebyret skal være et tal.';
$lang['Packages.!error.pricing[][currency].format'] = 'Valutakoden skal være på 3 tegn.';
$lang['Packages.!error.pricing[][currency].in_use'] = 'Valuta kan ikke opdateres i en prisfastsættelse, der er i brug.';
$lang['Packages.!error.pricing[][id].format'] = 'Ugyldigt pakkepris-ID.';
$lang['Packages.!error.pricing[][id].deletable'] = 'Betegnelsen kunne ikke fjernes, fordi den bruges af en eller flere tjenester.';
$lang['Packages.!error.groups[].exists'] = 'Ugyldigt pakkegruppe-ID.';
$lang['Packages.!error.groups[].valid'] = 'Den valgte pakkegruppe hører ikke til den angivne virksomhed.';
$lang['Packages.getPricingPeriods.day'] = 'Dag';
$lang['Packages.getPricingPeriods.week'] = 'Uge';
$lang['Packages.getPricingPeriods.month'] = 'Måned';
$lang['Packages.getPricingPeriods.year'] = 'År';
$lang['Packages.getPricingPeriods.onetime'] = 'Én gang';
$lang['Packages.getPricingPeriods.day_plural'] = 'Dage';
$lang['Packages.getPricingPeriods.week_plural'] = 'Uger';
$lang['Packages.getPricingPeriods.month_plural'] = 'Måneder';
$lang['Packages.getPricingPeriods.year_plural'] = 'År';
$lang['Packages.getPricingPeriods.onetime_plural'] = 'Én gang';
$lang['Packages.getStatusTypes.active'] = 'Aktiv';
$lang['Packages.getStatusTypes.inactive'] = 'Inaktiv';
$lang['Packages.getStatusTypes.restricted'] = 'Begrænset';
$lang['Packages.!error.manual_activation.valid'] = 'Manuel aktivering skal være enten 1 eller 0.';

