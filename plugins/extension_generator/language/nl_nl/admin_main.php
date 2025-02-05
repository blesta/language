<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.nl_nl
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.confirm.generate'] = 'Uitbreiding genereren';
$lang['AdminMain.confirm.custom_path'] = 'Aangepast pad';
$lang['AdminMain.confirm.tooltip_location'] = 'De map waarin gegenereerde extensiebestanden moeten worden geüpload.';
$lang['AdminMain.confirm.location'] = 'Uitbreiding Locatie';
$lang['AdminMain.confirm.text_generation'] = 'De extensie-instellingen zijn voltooid.  U kunt elke sectie bekijken door op de knooppunten in de voortgangsbalk te klikken.  Klik op "Extension genereren" om te voltooien en automatisch de bestanden voor uw extensie te genereren.';
$lang['AdminMain.confirm.heading_confirm'] = 'Bevestiging';
$lang['AdminMain.general.placeholder_name'] = 'Naam uitbreiding';
$lang['AdminMain.general.tooltip_code_examples'] = 'Controleer of er becommentarieerde regels voorbeeldcode zijn opgenomen voor functies zoals Cron-taken, gebeurtenissenlijsten en koppelingen, enzovoort.';
$lang['AdminMain.general.tooltip_form_type'] = 'Basic om een sterk ingekorte versie van het extensieformulier te gebruiken, met alleen het minimum dat nodig is om de extensie te genereren.';
$lang['AdminMain.general.tooltip_type'] = 'Modules verwerken veel servicefuncties, waaronder het aanbieden van services op externe servers. Plugins zijn krachtige integraties die bijna alles kunnen in Blesta. Merchant gateways verwerken betalingen terwijl cliënten in de Blesta interface blijven.  Non-Merchant gateways sturen klanten naar de site van een betalingsverwerker om de betaling af te ronden.';
$lang['AdminMain.general.tooltip_name'] = 'De weergavenaam van de extensie. Dit wordt ook gebruikt voor het maken van verschillende code. Als de naam bijvoorbeeld Mijn module is, dan wordt de moduledirectory mijn_module en de classnaam MijnModule.  Neem voor plugins het woord "plugin" niet op in de naam, omdat dit problemen veroorzaakt bij het genereren van code.';
$lang['AdminMain.general.basic_info'] = 'Volgende - Basisinformatie';
$lang['AdminMain.general.code_examples'] = 'Voorbeeldcode opnemen';
$lang['AdminMain.general.form_type'] = 'Type formulier';
$lang['AdminMain.general.type'] = 'Type uitbreiding';
$lang['AdminMain.general.name'] = 'Naam';
$lang['AdminMain.general.heading_general_settings'] = 'Algemene instellingen';
$lang['AdminMain.index.extensions_no_results'] = 'Op dit moment zijn er geen verlengingen.';
$lang['AdminMain.index.text_confirm_delete'] = 'Weet je zeker dat je deze extensie wilt verwijderen?';
$lang['AdminMain.index.option_delete'] = 'Verwijder';
$lang['AdminMain.index.option_edit'] = 'Bewerk';
$lang['AdminMain.index.heading_options'] = 'Opties';
$lang['AdminMain.index.heading_date_updated'] = 'Datum bijgewerkt';
$lang['AdminMain.index.heading_code_examples'] = 'Code-voorbeelden';
$lang['AdminMain.index.heading_form_type'] = 'Type formulier';
$lang['AdminMain.index.heading_type'] = 'Type';
$lang['AdminMain.index.heading_name'] = 'Naam';
$lang['AdminMain.index.heading_id'] = 'ID';
$lang['AdminMain.index.extension_add'] = 'Uitbreiding toevoegen';
$lang['AdminMain.index.boxtitle_extensions'] = 'Uitbreidingsgenerator - Uitbreidingen';
$lang['AdminMain.index.boxtitle_extension_generator'] = 'Uitbreiding Generator';
$lang['AdminMain.index.page_title'] = 'Uitbreiding Generator';
$lang['AdminMain.getfilelocations.custom'] = 'Aangepast';
$lang['AdminMain.getfilelocations.upload'] = 'Blesta Uploads Directory';
$lang['AdminMain.getfilelocations.nonmerchant'] = 'Blesta niet-handels gateway directory';
$lang['AdminMain.getfilelocations.merchant'] = 'Blesta Merchant Gateway Directory';
$lang['AdminMain.getfilelocations.plugin'] = 'Blesta Plugins Directory';
$lang['AdminMain.getfilelocations.module'] = 'Blesta Modules Directory';
$lang['AdminMain.!success.nonmerchant_created'] = 'De nieuwe gateway is succesvol gegenereerd en kan gevonden worden op %1$s';
$lang['AdminMain.!success.merchant_created'] = 'De nieuwe gateway is succesvol gegenereerd en kan gevonden worden op %1$s';
$lang['AdminMain.!success.plugin_created'] = 'De nieuwe plugin is succesvol gegenereerd en kan gevonden worden op %1$s';
$lang['AdminMain.!success.module_created'] = 'De nieuwe module is succesvol gegenereerd en kan gevonden worden op %1$s';
$lang['AdminMain.!success.package_deleted'] = 'De extensie is succesvol verwijderd';
$lang['AdminMain.!notice.updating_installed_extension'] = 'Deze extensie is momenteel geïnstalleerd. Het wordt sterk aangeraden om de installatie ongedaan te maken voordat je de bestanden regenereert, anders kan dit leiden tot schade aan de consistentie van je database.';
$lang['AdminMain.!notice.file_overwrite'] = 'De bestanden voor deze extensie bestaan al in de Blesta-bestanden en worden overschreven als u de Blesta Directory gebruikt.';
$lang['AdminMain.!notice.type_warning'] = 'Als u het type extensie wijzigt, worden alle instellingen die voor deze extensie zijn opgeslagen onherroepelijk gewist.';
$lang['AdminMain.!error.generation_failed'] = 'Kan uw extensie niet genereren.  Uitzondering gegenereerd: %1$s';
$lang['AdminMain.!error.name_taken'] = 'Deze naam conflicteert met een bestaande extensie map.';

