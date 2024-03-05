<?php
/**
 * Packages
 *
 * @package blesta
 * @subpackage blesta.language.nl_nl
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Packages.getStatusTypes.restricted'] = 'Beperkt';
$lang['Packages.getStatusTypes.inactive'] = 'Inactief';
$lang['Packages.getStatusTypes.active'] = 'Actief';
$lang['Packages.getPricingPeriods.onetime_plural'] = 'Eenmalig';
$lang['Packages.getPricingPeriods.year_plural'] = 'Jaren';
$lang['Packages.getPricingPeriods.month_plural'] = 'Maanden';
$lang['Packages.getPricingPeriods.week_plural'] = 'Weken';
$lang['Packages.getPricingPeriods.day_plural'] = 'Dagen';
$lang['Packages.getPricingPeriods.onetime'] = 'Eenmalig';
$lang['Packages.getPricingPeriods.year'] = 'Jaar';
$lang['Packages.getPricingPeriods.month'] = 'Maand';
$lang['Packages.getPricingPeriods.week'] = 'Week';
$lang['Packages.getPricingPeriods.day'] = 'Dag';
$lang['Packages.!error.groups[].valid'] = 'De geselecteerde pakketgroep behoort niet tot het opgegeven bedrijf.';
$lang['Packages.!error.groups[].exists'] = 'Ongeldig pakketgroep-ID.';
$lang['Packages.!error.pricing[][id].deletable'] = 'De term kon niet worden verwijderd omdat hij door een of meer diensten wordt gebruikt.';
$lang['Packages.!error.pricing[][id].format'] = 'Ongeldige pakketprijs-ID.';
$lang['Packages.!error.pricing[][currency].in_use'] = 'Valuta kan niet worden bijgewerkt in een prijsstelling die in gebruik is.';
$lang['Packages.!error.pricing[][currency].format'] = 'De valutacode moet uit 3 tekens bestaan.';
$lang['Packages.!error.pricing[][cancel_fee].format'] = 'Annuleringskosten moeten een getal zijn.';
$lang['Packages.!error.pricing[][setup_fee].format'] = 'Setupkosten moeten een getal zijn.';
$lang['Packages.!error.pricing[][price_transfer].format'] = 'De transferprijs moet een getal zijn.';
$lang['Packages.!error.pricing[][price_renews].valid'] = 'De verlengingsprijs kan niet voor een bepaalde periode worden ingesteld.';
$lang['Packages.!error.pricing[][price_renews].format'] = 'Vernieuwingsprijs moet een getal zijn.';
$lang['Packages.!error.pricing[][price].format'] = 'Prijs moet een getal zijn.';
$lang['Packages.!error.pricing[][period].in_use'] = 'Periode kan niet worden bijgewerkt in een prijsstelling die in gebruik is.';
$lang['Packages.!error.pricing[][period].format'] = 'Ongeldig periodetype.';
$lang['Packages.!error.pricing[][term].in_use'] = 'Term kan niet worden bijgewerkt in een prijsstelling die in gebruik is.';
$lang['Packages.!error.pricing[][term].valid'] = 'De term moet groter zijn dan 0.';
$lang['Packages.!error.pricing[][term].length'] = 'Termen mogen niet langer zijn dan 5 tekens.';
$lang['Packages.!error.pricing[][term].format'] = 'Term moet een getal zijn.';
$lang['Packages.!error.email_content.parse'] = 'Sjabloon parse fout: %1$s';
$lang['Packages.!error.email_content[][lang].length'] = 'De taal mag niet langer zijn dan 5 tekens.';
$lang['Packages.!error.email_content[][lang].empty'] = 'Voer een taal in.';
$lang['Packages.!error.prorata_cutoff.format'] = 'De pro rata sluitingsdag moet tussen 1 en 28 liggen.';
$lang['Packages.!error.prorata_day.format'] = 'De pro rata dag moet tussen 1 en 28 liggen.';
$lang['Packages.!error.hidden.format'] = 'Of deze groep verborgen moet worden in de interface moet ingesteld worden op 1 of 0.';
$lang['Packages.!error.status.format'] = 'Ongeldige status.';
$lang['Packages.!error.upgrades_use_renewal.valid'] = 'Gebruik vernieuwingsprijzen voor upgrades moeten 1 of 0 zijn.';
$lang['Packages.!error.override_price.valid'] = 'Stel de pakketprijs in als opheffingsprijs en deze moet 1 of 0 zijn.';
$lang['Packages.!error.single_term.valid'] = 'Enkele term moet 1 of 0 zijn.';
$lang['Packages.!error.taxable.length'] = 'De belastbare lengte mag niet meer zijn dan 1 karakter.';
$lang['Packages.!error.taxable.format'] = 'Belastbaar moet een getal zijn.';
$lang['Packages.!error.module_group_client.valid'] = 'Allow Client to Select Group moet 1 of 0 zijn.';
$lang['Packages.!error.module_group.format'] = 'Ongeldige modulegroep opgegeven.';
$lang['Packages.!error.module_row.format'] = 'Ongeldige module rij gegeven.';
$lang['Packages.!error.plugins[].valid'] = 'Ongeldige plugin gegeven.';
$lang['Packages.!error.option_groups[].valid'] = 'Ongeldige configureerbare pakketoptiegroep gegeven.';
$lang['Packages.!error.client_qty.format'] = 'De limiet voor de klant moet een getal zijn.';
$lang['Packages.!error.qty.format'] = 'Hoeveelheid moet een getal zijn.';
$lang['Packages.!error.descriptions.empty_lang'] = 'Geef een pakkettaalcode op voor elke beschrijving.';
$lang['Packages.!error.descriptions.format'] = 'De pakketbeschrijvingen hebben een ongeldig formaat.';
$lang['Packages.!error.names.empty_lang'] = 'Geef een pakkettaalcode op voor elke naam.';
$lang['Packages.!error.names.empty_name'] = 'Geef een pakketnaam op voor elke taal.';
$lang['Packages.!error.names.format'] = 'De pakketnamen hebben een ongeldig formaat.';
$lang['Packages.!error.module_id.changed'] = 'De module kan niet worden gewijzigd omdat er al een of meer services zijn die dit pakket gebruiken.';
$lang['Packages.!error.module_id.exists'] = 'Ongeldige module opgegeven.';
$lang['Packages.!error.package_id.has_children'] = 'Het pakket kon niet worden verwijderd omdat een service child services heeft.';
$lang['Packages.!error.package_id.exists'] = 'Het pakket kon niet worden verwijderd omdat een service het momenteel gebruikt.';
$lang['Packages.!error.company_id.exists'] = 'Ongeldig bedrijf opgegeven.';
$lang['Packages.!error.manual_activation.valid'] = 'Handmatige activering moet 1 of 0 zijn.';

