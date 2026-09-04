<?php
/**
 * Form Rules
 *
 * @package blesta
 * @subpackage blesta.language.fi_fi
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['FormRules.general.name.format'] = 'Tiedostotunnisteissa saa olla vain aakkosnumeerisia merkkejä, alaviivoja ja välilyöntejä.';
$lang['FormRules.merchantbasic.authors[][name].empty'] = 'Syötä kunkin tekijän nimi.';
$lang['FormRules.merchantbasic.currencies.format'] = 'Syötä valuutat kolmerivisenä merkkijonona, jossa valuutat on erotettu pilkuilla (esim. USD,EUR,JPY).';
$lang['FormRules.merchantfields.fields[][label].empty'] = 'Anna jokaiselle kentälle nimi.';
$lang['FormRules.merchantfields.fields[][name].format'] = 'Anna jokaiselle kentälle nimi muodossa snake_case_name.';
$lang['FormRules.merchantfields.fields[][type].valid'] = 'Yhdessä tai useammassa kentässä on virheellinen tyyppi.';
$lang['FormRules.modulebasic.authors[][name].empty'] = 'Kirjoita jokaiselle tekijälle nimi.';
$lang['FormRules.modulebasic.module_group.empty'] = 'Kirjoita moduuliryhmän nimi.';
$lang['FormRules.modulebasic.module_row_plural.empty'] = 'Lisää monikkomuotoinen moduulin rivin nimi.';
$lang['FormRules.modulebasic.module_row.empty'] = 'Kirjoita moduulin rivin nimi.';
$lang['FormRules.modulefeatures.cron_tasks[][label].empty'] = 'Anna jokaiselle cron-tehtävälle nimi.';
$lang['FormRules.modulefeatures.cron_tasks[][name].format'] = 'Anna jokaiselle cron-tehtävälle menetelmänimi muodossa snake_case_name.';
$lang['FormRules.modulefeatures.cron_tasks[][time].format'] = 'Syötä joko kellonaika muodossa 00:00 tai numeerinen aikaväli.';
$lang['FormRules.modulefeatures.cron_tasks[][type].valid'] = 'Yhdellä tai useammalla cron-tehtävällä on virheellinen tyyppi.';
$lang['FormRules.modulefeatures.service_tabs[][label].empty'] = 'Anna nimi jokaiselle palvelu-välilehdelle.';
$lang['FormRules.modulefeatures.service_tabs[][level].valid'] = 'Yhdellä tai useammalla palveluvälilehdellä on virheellinen taso.';
$lang['FormRules.modulefeatures.service_tabs[][method_name].format'] = 'Anna jokaiselle palvelu-välilehdelle menetelmän nimi muodossa camelCaseName.';
$lang['FormRules.modulefields.module_rows[][label].empty'] = 'Anna nimi jokaiselle moduulin rivikentälle.';
$lang['FormRules.modulefields.module_rows[][name_key].valid'] = 'Määritetäänkö moduulin rivikenttä nimeksi, avainasetuksen on oltava joko true tai false.';
$lang['FormRules.modulefields.module_rows[][name].format'] = 'Anna jokaiselle moduulin rivikentälle nimi muodossa snake_case_name.';
$lang['FormRules.modulefields.module_rows[][type].valid'] = 'Yhdessä tai useammassa moduulirivissä on virheellinen tyyppi.';
$lang['FormRules.modulefields.package_fields[][label].empty'] = 'Anna nimike jokaiselle pakettikentälle.';
$lang['FormRules.modulefields.package_fields[][name_key].valid'] = 'Pakettikentän asettaminen nimeksi edellyttää, että avain asetetaan arvoksi true tai false.';
$lang['FormRules.modulefields.package_fields[][name].format'] = 'Anna jokaiselle pakettikentälle nimi muodossa snake_case_name.';
$lang['FormRules.modulefields.package_fields[][type].valid'] = 'Yhdessä tai useammassa pakettikentässä on virheellinen tyyppi.';
$lang['FormRules.modulefields.service_fields[][label].empty'] = 'Anna jokaiselle palvelukentälle nimi.';
$lang['FormRules.modulefields.service_fields[][name_key].valid'] = 'Palvelukentän määrittämiseksi nimellä avaimeksi on asetettava arvo true tai false.';
$lang['FormRules.modulefields.service_fields[][name].format'] = 'Anna jokaiselle palvelukentälle nimi muodossa snake_case_name.';
$lang['FormRules.modulefields.service_fields[][type].valid'] = 'Yhdessä tai useammassa palvelukentässä on virheellinen tyyppi.';
$lang['FormRules.nonmerchantbasic.authors[][name].empty'] = 'Syötä jokaiselle tekijälle nimi.';
$lang['FormRules.nonmerchantbasic.currencies.format'] = 'Syötä valuutat kolmen merkin muodossa pilkuilla erotettuina (esim. USD,EUR,JPY).';
$lang['FormRules.nonmerchantfields.fields[][label].empty'] = 'Anna jokaiselle kentälle nimi.';
$lang['FormRules.nonmerchantfields.fields[][name].format'] = 'Anna jokaiselle kentälle nimi muodossa snake_case_name.';
$lang['FormRules.nonmerchantfields.fields[][type].valid'] = 'Yhdessä tai useammassa kentässä on virheellinen tyyppi.';
$lang['FormRules.pluginbasic.authors[][name].empty'] = 'Syötä jokaiselle tekijälle nimi.';
$lang['FormRules.plugindatabase.tables[][columns][][length].empty'] = 'Pituuden on oltava muodossa ”a”, ”b”, ”c” enum-sarakkeissa, tyhjä teksti- ja datetime-sarakkeissa sekä numeerinen kaikissa muissa.';
$lang['FormRules.plugindatabase.tables[][columns][][name].format'] = 'Anna jokaiselle sarakkeelle menetelmänimi muodossa snake_case_name.';
$lang['FormRules.plugindatabase.tables[][columns][][nullable].valid'] = 'Nullable-asetukselle on määritettävä arvo true tai false jokaiselle sarakkeelle.';
$lang['FormRules.plugindatabase.tables[][columns][][primary].valid'] = 'Jokaiselle sarakkeelle on määritettävä arvo ”true” tai ”false” kentässä ”Primary”.';
$lang['FormRules.plugindatabase.tables[][columns][][type].valid'] = 'Yhdessä tai useammassa sarakkeessa on virheellinen tyyppi.';
$lang['FormRules.plugindatabase.tables[][name].format'] = 'Anna jokaiselle taulukolle menetelmän nimi muodossa snake_case_name.';
$lang['FormRules.pluginintegrations.actions[][action].format'] = 'Kirjoita jokaisen toiminnon nimi kokonaan pienillä kirjaimilla.';
$lang['FormRules.pluginintegrations.actions[][controller].format'] = 'Syötä jokaiselle toiminnolle ohjain muodossa snake_case_name.';
$lang['FormRules.pluginintegrations.actions[][location].valid'] = 'Syötä kelvollinen toimintapaikka.';
$lang['FormRules.pluginintegrations.actions[][name].empty'] = 'Anna nimi jokaiselle toiminnolle.';
$lang['FormRules.pluginintegrations.cards[][callback].format'] = 'Syötä jokaiselle kortille takaisinsoittomenetelmä muodossa camelCaseName.';
$lang['FormRules.pluginintegrations.cards[][label].empty'] = 'Anna jokaiselle kortille nimi.';
$lang['FormRules.pluginintegrations.cards[][level].valid'] = 'Yhdellä tai useammalla kortilla on virheellinen taso.';
$lang['FormRules.pluginintegrations.events[][callback].format'] = 'Syötä jokaiselle tapahtumalle takaisinsoittomenetelmä muodossa camelCaseName.';
$lang['FormRules.pluginintegrations.events[][event].empty'] = 'Anna jokaiselle tapahtumalle nimi.';

