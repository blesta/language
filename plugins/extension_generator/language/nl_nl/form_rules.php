<?php
/**
 * Form Rules
 *
 * @package blesta
 * @subpackage blesta.language.nl_nl
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['FormRules.nonmerchantfields.fields[][type].valid'] = 'Een of meer velden hebben een ongeldig type.';
$lang['FormRules.nonmerchantfields.fields[][label].empty'] = 'Voer een label in voor elk veld.';
$lang['FormRules.nonmerchantfields.fields[][name].format'] = 'Geef elk veld een naam in het formaat snake_case_name.';
$lang['FormRules.nonmerchantbasic.currencies.format'] = 'Voer valuta\'s in met drie tekens, gescheiden door komma\'s (bijv. USD,EUR,JPY).';
$lang['FormRules.nonmerchantbasic.authors[][name].empty'] = 'Voer een naam in voor elke auteur.';
$lang['FormRules.merchantfields.fields[][type].valid'] = 'Een of meer velden hebben een ongeldig type.';
$lang['FormRules.merchantfields.fields[][label].empty'] = 'Voer een label in voor elk veld.';
$lang['FormRules.merchantfields.fields[][name].format'] = 'Geef elk veld een naam in het formaat snake_case_name.';
$lang['FormRules.merchantbasic.currencies.format'] = 'Voer valuta\'s in met drie tekens, gescheiden door komma\'s (bijv. USD,EUR,JPY).';
$lang['FormRules.merchantbasic.authors[][name].empty'] = 'Voer een naam in voor elke auteur.';
$lang['FormRules.pluginintegrations.cards[][label].empty'] = 'Voer een label in voor elke kaart.';
$lang['FormRules.pluginintegrations.cards[][callback].format'] = 'Voer een callbackmethode in voor elke kaart in het formaat camelCaseName.';
$lang['FormRules.pluginintegrations.cards[][level].valid'] = 'Een of meer kaarten hebben een ongeldig niveau.';
$lang['FormRules.pluginintegrations.events[][callback].format'] = 'Voer een callbackmethode in voor elke gebeurtenis in het formaat camelCaseName.';
$lang['FormRules.pluginintegrations.events[][event].empty'] = 'Voer een evenementnaam in voor elk evenement.';
$lang['FormRules.pluginintegrations.actions[][name].empty'] = 'Geef elke actie een naam.';
$lang['FormRules.pluginintegrations.actions[][action].format'] = 'Voer voor elke actie een actie in, in kleine letters.';
$lang['FormRules.pluginintegrations.actions[][controller].format'] = 'Voer een controller in voor elke actie in het formaat snake_case_name.';
$lang['FormRules.pluginintegrations.actions[][location].valid'] = 'Voer een geldige actielocatie in.';
$lang['FormRules.plugindatabase.tables[][columns][][primary].valid'] = 'Primair moet worden ingesteld op waar of onwaar voor elke kolom.';
$lang['FormRules.plugindatabase.tables[][columns][][nullable].valid'] = 'Nullable moet worden ingesteld op true of false voor elke kolom.';
$lang['FormRules.plugindatabase.tables[][columns][][length].empty'] = 'De lengte moet het formaat \'a\',\'b\',\'c\' hebben voor enumkolommen, leeg zijn voor tekst- en datetime-kolommen en numeriek voor alle andere kolommen.';
$lang['FormRules.plugindatabase.tables[][columns][][type].valid'] = 'Een of meer kolommen hebben een ongeldig type.';
$lang['FormRules.plugindatabase.tables[][columns][][name].format'] = 'Voer een methode naam in voor elke kolom in het formaat snake_case_name.';
$lang['FormRules.plugindatabase.tables[][name].format'] = 'Voer een methode naam in voor elke tabel in het formaat snake_case_name.';
$lang['FormRules.pluginbasic.authors[][name].empty'] = 'Voer een naam in voor elke auteur.';
$lang['FormRules.modulefeatures.cron_tasks[][time].format'] = 'Voer een tijd in het formaat 00:00 of een numeriek interval in.';
$lang['FormRules.modulefeatures.cron_tasks[][type].valid'] = 'Een of meer cron taken heeft een ongeldig type.';
$lang['FormRules.modulefeatures.cron_tasks[][label].empty'] = 'Voer een label in voor elke crontaak.';
$lang['FormRules.modulefeatures.cron_tasks[][name].format'] = 'Voer een methode naam in voor elke cron taak in het formaat snake_case_name.';
$lang['FormRules.modulefeatures.service_tabs[][level].valid'] = 'Een of meer servicetabbladen heeft een ongeldig niveau.';
$lang['FormRules.modulefeatures.service_tabs[][label].empty'] = 'Voer een label in voor elk servicetabblad.';
$lang['FormRules.modulefeatures.service_tabs[][method_name].format'] = 'Voer een methode naam in voor elke service tab in het formaat camelCaseName.';
$lang['FormRules.modulefields.package_fields[][name_key].valid'] = 'Of een pakketveld moet worden ingesteld als naamsleutel moet worden ingesteld op true of false.';
$lang['FormRules.modulefields.package_fields[][type].valid'] = 'Een of meer pakketvelden hebben een ongeldig type.';
$lang['FormRules.modulefields.package_fields[][label].empty'] = 'Voer een label in voor elk verpakkingsveld.';
$lang['FormRules.modulefields.package_fields[][name].format'] = 'Voer een naam in voor elk pakketveld in het formaat snake_case_name.';
$lang['FormRules.modulefields.service_fields[][name_key].valid'] = 'Of een serviceveld moet worden ingesteld als naamsleutel moet worden ingesteld op true of false.';
$lang['FormRules.modulefields.service_fields[][type].valid'] = 'Een of meer servicevelden hebben een ongeldig type.';
$lang['FormRules.modulefields.service_fields[][label].empty'] = 'Voer een label in voor elk serviceveld.';
$lang['FormRules.modulefields.service_fields[][name].format'] = 'Voer een naam in voor elk serviceveld in het formaat snake_case_name.';
$lang['FormRules.modulefields.module_rows[][name_key].valid'] = 'Of een rijveld van een module moet worden ingesteld als de naamsleutel moet worden ingesteld op true of false.';
$lang['FormRules.modulefields.module_rows[][type].valid'] = 'Een of meer module rijen heeft een ongeldig type.';
$lang['FormRules.modulefields.module_rows[][label].empty'] = 'Voer een label in voor elk rijveld van de module.';
$lang['FormRules.modulefields.module_rows[][name].format'] = 'Voer een naam in voor elk rijveld van de module in het formaat snake_case_name.';
$lang['FormRules.modulebasic.authors[][name].empty'] = 'Voer een naam in voor elke auteur.';
$lang['FormRules.modulebasic.module_group.empty'] = 'Voer een label voor een modulegroep in.';
$lang['FormRules.modulebasic.module_row_plural.empty'] = 'Voeg een meervoudige rijnaam voor modules toe.';
$lang['FormRules.modulebasic.module_row.empty'] = 'Voer een rijnaam voor de module in.';
$lang['FormRules.general.name.format'] = 'Extensienamen kunnen alleen alfa_numerieke tekens, underscores en spaties bevatten.';

