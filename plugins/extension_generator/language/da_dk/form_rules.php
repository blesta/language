<?php
/**
 * Form Rules
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['FormRules.general.name.format'] = 'Udvidelsesnavne kan kun indeholde alfa_numeriske tegn, understregninger og mellemrum.';
$lang['FormRules.modulebasic.module_row.empty'] = 'Indtast venligst et modulrækkenavn.';
$lang['FormRules.modulebasic.module_row_plural.empty'] = 'Tilføj venligst et modulrækkenavn i flertal.';
$lang['FormRules.modulebasic.module_group.empty'] = 'Indtast venligst en modulgruppemærkat.';
$lang['FormRules.modulebasic.authors[][name].empty'] = 'Indtast venligst et navn for hver forfatter.';
$lang['FormRules.modulefields.module_rows[][name].format'] = 'Indtast venligst et navn for hvert modulrækkefelt i formatet snake_case_name.';
$lang['FormRules.modulefields.module_rows[][label].empty'] = 'Indtast venligst en label for hvert modulrækkefelt.';
$lang['FormRules.modulefields.module_rows[][type].valid'] = 'En eller flere modulrækker har en ugyldig type.';
$lang['FormRules.modulefields.module_rows[][name_key].valid'] = 'Om et modulrækkefelt skal indstilles som navnenøgle, skal indstilles til true eller false.';
$lang['FormRules.modulefields.service_fields[][name].format'] = 'Indtast venligst et navn for hvert servicefelt i formatet snake_case_name.';
$lang['FormRules.modulefields.service_fields[][label].empty'] = 'Indtast venligst en etiket for hvert servicefelt.';
$lang['FormRules.modulefields.service_fields[][type].valid'] = 'Et eller flere servicefelter har en ugyldig type.';
$lang['FormRules.modulefields.service_fields[][name_key].valid'] = 'Om et servicefelt skal indstilles som navnenøgle, skal indstilles til true eller false.';
$lang['FormRules.modulefields.package_fields[][name].format'] = 'Indtast venligst et navn for hvert pakkefelt i formatet snake_case_name.';
$lang['FormRules.modulefields.package_fields[][label].empty'] = 'Indtast venligst en etiket for hvert pakkefelt.';
$lang['FormRules.modulefields.package_fields[][type].valid'] = 'Et eller flere pakkefelter har en ugyldig type.';
$lang['FormRules.modulefields.package_fields[][name_key].valid'] = 'Om et pakkefelt skal angives som navnenøgle, skal angives til true eller false.';
$lang['FormRules.modulefeatures.service_tabs[][method_name].format'] = 'Indtast venligst et metodenavn for hver servicefane i formatet camelCaseName.';
$lang['FormRules.modulefeatures.service_tabs[][label].empty'] = 'Indtast venligst en etiket for hver servicefane.';
$lang['FormRules.modulefeatures.service_tabs[][level].valid'] = 'En eller flere servicefaner har et ugyldigt niveau.';
$lang['FormRules.modulefeatures.cron_tasks[][name].format'] = 'Indtast venligst et metodenavn for hver cron-opgave i formatet snake_case_name.';
$lang['FormRules.modulefeatures.cron_tasks[][label].empty'] = 'Indtast venligst en label for hver cron-opgave.';
$lang['FormRules.modulefeatures.cron_tasks[][type].valid'] = 'En eller flere cron-opgaver har en ugyldig type.';
$lang['FormRules.modulefeatures.cron_tasks[][time].format'] = 'Indtast enten et klokkeslæt i formatet 00:00 eller et numerisk interval.';
$lang['FormRules.pluginbasic.authors[][name].empty'] = 'Indtast venligst et navn for hver forfatter.';
$lang['FormRules.plugindatabase.tables[][name].format'] = 'Indtast venligst et metodenavn for hver tabel i formatet snake_case_name.';
$lang['FormRules.plugindatabase.tables[][columns][][name].format'] = 'Indtast venligst et metodenavn for hver kolonne i formatet snake_case_name.';
$lang['FormRules.plugindatabase.tables[][columns][][type].valid'] = 'En eller flere kolonner har en ugyldig type.';
$lang['FormRules.plugindatabase.tables[][columns][][length].empty'] = 'Længden skal være i formatet \'a\',\'b\',\'c\' for enum-kolonner, tom for tekst- og datetime-kolonner og numerisk for alle andre.';
$lang['FormRules.plugindatabase.tables[][columns][][nullable].valid'] = 'Nullable skal sættes til true eller false for hver kolonne.';
$lang['FormRules.plugindatabase.tables[][columns][][primary].valid'] = 'Primær skal indstilles til true eller false for hver kolonne.';
$lang['FormRules.pluginintegrations.actions[][location].valid'] = 'Indtast venligst en gyldig handlingsplacering.';
$lang['FormRules.pluginintegrations.actions[][controller].format'] = 'Indtast venligst en controller for hver handling i formatet snake_case_name.';
$lang['FormRules.pluginintegrations.actions[][action].format'] = 'Indtast venligst en handling for hver handling med små bogstaver.';
$lang['FormRules.pluginintegrations.actions[][name].empty'] = 'Indtast venligst et navn for hver handling.';
$lang['FormRules.pluginintegrations.events[][event].empty'] = 'Indtast venligst et begivenhedsnavn for hver begivenhed.';
$lang['FormRules.pluginintegrations.events[][callback].format'] = 'Indtast venligst en tilbagekaldsmetode for hver hændelse i formatet camelCaseName.';
$lang['FormRules.pluginintegrations.cards[][level].valid'] = 'Et eller flere kort har et ugyldigt niveau.';
$lang['FormRules.pluginintegrations.cards[][callback].format'] = 'Indtast venligst en tilbagekaldsmetode for hvert kort i formatet camelCaseName.';
$lang['FormRules.pluginintegrations.cards[][label].empty'] = 'Indtast venligst en etiket for hvert kort.';
$lang['FormRules.merchantbasic.authors[][name].empty'] = 'Indtast venligst et navn for hver forfatter.';
$lang['FormRules.merchantbasic.currencies.format'] = 'Angiv venligst valutaer i et format med tre tegn adskilt af kommaer (f.eks. USD,EUR,JPY).';
$lang['FormRules.merchantfields.fields[][name].format'] = 'Indtast venligst et navn for hvert felt i formatet snake_case_name.';
$lang['FormRules.merchantfields.fields[][label].empty'] = 'Indtast venligst en label for hvert felt.';
$lang['FormRules.merchantfields.fields[][type].valid'] = 'Et eller flere felter har en ugyldig type.';
$lang['FormRules.nonmerchantbasic.authors[][name].empty'] = 'Indtast venligst et navn for hver forfatter.';
$lang['FormRules.nonmerchantbasic.currencies.format'] = 'Angiv venligst valutaer i et format med tre tegn adskilt af kommaer (f.eks. USD,EUR,JPY).';
$lang['FormRules.nonmerchantfields.fields[][name].format'] = 'Indtast venligst et navn for hvert felt i formatet snake_case_name.';
$lang['FormRules.nonmerchantfields.fields[][label].empty'] = 'Indtast venligst en label for hvert felt.';
$lang['FormRules.nonmerchantfields.fields[][type].valid'] = 'Et eller flere felter har en ugyldig type.';

