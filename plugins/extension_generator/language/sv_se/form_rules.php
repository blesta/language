<?php
/**
 * Form Rules
 *
 * @package blesta
 * @subpackage blesta.language.sv_se
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['FormRules.nonmerchantfields.fields[][type].valid'] = 'Ett eller flera fält har en ogiltig typ.';
$lang['FormRules.nonmerchantfields.fields[][label].empty'] = 'Ange en etikett för varje fält.';
$lang['FormRules.nonmerchantfields.fields[][name].format'] = 'Ange ett namn för varje fält i formatet snake_case_name.';
$lang['FormRules.nonmerchantbasic.currencies.format'] = 'Ange valutor i tre teckenformat separerade med kommatecken (t.ex. USD,EUR,JPY).';
$lang['FormRules.nonmerchantbasic.authors[][name].empty'] = 'Ange ett namn för varje författare.';
$lang['FormRules.merchantfields.fields[][type].valid'] = 'Ett eller flera fält har en ogiltig typ.';
$lang['FormRules.merchantfields.fields[][label].empty'] = 'Ange en etikett för varje fält.';
$lang['FormRules.merchantfields.fields[][name].format'] = 'Ange ett namn för varje fält i formatet snake_case_name.';
$lang['FormRules.merchantbasic.currencies.format'] = 'Ange valutor i tre teckenformat separerade med kommatecken (t.ex. USD,EUR,JPY).';
$lang['FormRules.merchantbasic.authors[][name].empty'] = 'Ange ett namn för varje författare.';
$lang['FormRules.pluginintegrations.cards[][label].empty'] = 'Ange en etikett för varje kort.';
$lang['FormRules.pluginintegrations.cards[][callback].format'] = 'Ange en återkallningsmetod för varje kort i formatet camelCaseName.';
$lang['FormRules.pluginintegrations.cards[][level].valid'] = 'Ett eller flera kort har en ogiltig nivå.';
$lang['FormRules.pluginintegrations.events[][callback].format'] = 'Ange en återkallningsmetod för varje händelse i formatet camelCaseName.';
$lang['FormRules.pluginintegrations.events[][event].empty'] = 'Ange ett evenemangsnamn för varje evenemang.';
$lang['FormRules.pluginintegrations.actions[][name].empty'] = 'Ange ett namn för varje åtgärd.';
$lang['FormRules.pluginintegrations.actions[][action].format'] = 'Ange en åtgärd för varje åtgärd med små bokstäver.';
$lang['FormRules.pluginintegrations.actions[][controller].format'] = 'Ange en kontrollant för varje åtgärd i formatet snake_case_name.';
$lang['FormRules.pluginintegrations.actions[][location].valid'] = 'Ange en giltig åtgärdsplats.';
$lang['FormRules.plugindatabase.tables[][columns][][primary].valid'] = 'Primär måste anges som true eller false för varje kolumn.';
$lang['FormRules.plugindatabase.tables[][columns][][nullable].valid'] = 'Nullable måste anges som true eller false för varje kolumn.';
$lang['FormRules.plugindatabase.tables[][columns][][length].empty'] = 'Längden måste vara i formatet \'a\', \'b\', \'c\' för enum-kolumner, tom för text- och datetime-kolumner och numerisk för alla andra.';
$lang['FormRules.plugindatabase.tables[][columns][][type].valid'] = 'En eller flera kolumner har en ogiltig typ.';
$lang['FormRules.plugindatabase.tables[][columns][][name].format'] = 'Ange ett metodnamn för varje kolumn i formatet snake_case_name.';
$lang['FormRules.plugindatabase.tables[][name].format'] = 'Ange ett metodnamn för varje tabell i formatet snake_case_name.';
$lang['FormRules.pluginbasic.authors[][name].empty'] = 'Ange ett namn för varje författare.';
$lang['FormRules.modulefeatures.cron_tasks[][time].format'] = 'Ange antingen en tid i formatet 00:00 eller ett numeriskt intervall.';
$lang['FormRules.modulefeatures.cron_tasks[][type].valid'] = 'En eller flera cron-uppgifter har en ogiltig typ.';
$lang['FormRules.modulefeatures.cron_tasks[][label].empty'] = 'Ange en etikett för varje cron-uppgift.';
$lang['FormRules.modulefeatures.cron_tasks[][name].format'] = 'Ange ett metodnamn för varje cron-uppgift i formatet snake_case_name.';
$lang['FormRules.modulefeatures.service_tabs[][level].valid'] = 'En eller flera serviceflikar har en ogiltig nivå.';
$lang['FormRules.modulefeatures.service_tabs[][label].empty'] = 'Ange en etikett för varje serviceflik.';
$lang['FormRules.modulefeatures.service_tabs[][method_name].format'] = 'Ange ett metodnamn för varje serviceflik i formatet camelCaseName.';
$lang['FormRules.modulefields.package_fields[][name_key].valid'] = 'Om ett paketfält ska anges som namnnyckel måste anges som true eller false.';
$lang['FormRules.modulefields.package_fields[][type].valid'] = 'Ett eller flera paketfält har en ogiltig typ.';
$lang['FormRules.modulefields.package_fields[][label].empty'] = 'Ange en etikett för varje paketfält.';
$lang['FormRules.modulefields.package_fields[][name].format'] = 'Ange ett namn för varje paketfält i formatet snake_case_name.';
$lang['FormRules.modulefields.service_fields[][name_key].valid'] = 'Om ett servicefält ska anges som namnnyckel måste anges som true eller false.';
$lang['FormRules.modulefields.service_fields[][type].valid'] = 'Ett eller flera servicefält har en ogiltig typ.';
$lang['FormRules.modulefields.service_fields[][label].empty'] = 'Ange en etikett för varje servicefält.';
$lang['FormRules.modulefields.service_fields[][name].format'] = 'Ange ett namn för varje servicefält i formatet snake_case_name.';
$lang['FormRules.modulefields.module_rows[][name_key].valid'] = 'Om ett modulradfält ska anges som namnnyckel måste anges som true eller false.';
$lang['FormRules.modulefields.module_rows[][type].valid'] = 'En eller flera modulrader har en ogiltig typ.';
$lang['FormRules.modulefields.module_rows[][label].empty'] = 'Ange en etikett för varje modulradfält.';
$lang['FormRules.modulefields.module_rows[][name].format'] = 'Ange ett namn för varje modulradfält i formatet snake_case_name.';
$lang['FormRules.modulebasic.authors[][name].empty'] = 'Ange ett namn för varje författare.';
$lang['FormRules.modulebasic.module_group.empty'] = 'Ange en etikett för modulgruppen.';
$lang['FormRules.modulebasic.module_row_plural.empty'] = 'Vänligen lägg till en plural modul rad namn.';
$lang['FormRules.modulebasic.module_row.empty'] = 'Ange ett namn på modulraden.';
$lang['FormRules.general.name.format'] = 'Tilläggsnamn får endast innehålla alfa_numeriska tecken, understreck och mellanslag.';

