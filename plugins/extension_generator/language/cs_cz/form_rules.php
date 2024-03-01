<?php
/**
 * Form Rules
 *
 * @package blesta
 * @subpackage blesta.language.cs_cz
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['FormRules.nonmerchantfields.fields[][type].valid'] = 'Jedno nebo více polí má neplatný typ.';
$lang['FormRules.nonmerchantfields.fields[][label].empty'] = 'U každého pole zadejte popisek.';
$lang['FormRules.nonmerchantfields.fields[][name].format'] = 'Pro každé pole zadejte název ve formátu snake_case_name.';
$lang['FormRules.nonmerchantbasic.currencies.format'] = 'Měny zadávejte ve tříznakovém formátu odděleném čárkami (např. USD,EUR,JPY).';
$lang['FormRules.nonmerchantbasic.authors[][name].empty'] = 'U každého autora uveďte jméno.';
$lang['FormRules.merchantfields.fields[][type].valid'] = 'Jedno nebo více polí má neplatný typ.';
$lang['FormRules.merchantfields.fields[][label].empty'] = 'U každého pole zadejte popisek.';
$lang['FormRules.merchantfields.fields[][name].format'] = 'Pro každé pole zadejte název ve formátu snake_case_name.';
$lang['FormRules.merchantbasic.currencies.format'] = 'Měny zadávejte ve tříznakovém formátu odděleném čárkami (např. USD,EUR,JPY).';
$lang['FormRules.merchantbasic.authors[][name].empty'] = 'U každého autora uveďte jméno.';
$lang['FormRules.pluginintegrations.cards[][label].empty'] = 'U každé karty zadejte štítek.';
$lang['FormRules.pluginintegrations.cards[][callback].format'] = 'Zadejte prosím metodu zpětného volání pro každou kartu ve formátu camelCaseName.';
$lang['FormRules.pluginintegrations.cards[][level].valid'] = 'Jedna nebo více karet má neplatnou úroveň.';
$lang['FormRules.pluginintegrations.events[][callback].format'] = 'Zadejte prosím metodu zpětného volání pro každou událost ve formátu camelCaseName.';
$lang['FormRules.pluginintegrations.events[][event].empty'] = 'U každé události zadejte název události.';
$lang['FormRules.pluginintegrations.actions[][name].empty'] = 'U každé akce zadejte název.';
$lang['FormRules.pluginintegrations.actions[][action].format'] = 'U každé akce zadejte akci všemi malými písmeny.';
$lang['FormRules.pluginintegrations.actions[][controller].format'] = 'Pro každou akci zadejte ovladač ve formátu snake_case_name.';
$lang['FormRules.pluginintegrations.actions[][location].valid'] = 'Zadejte prosím platné umístění akce.';
$lang['FormRules.plugindatabase.tables[][columns][][primary].valid'] = 'Primární musí být pro každý sloupec nastaven na hodnotu true nebo false.';
$lang['FormRules.plugindatabase.tables[][columns][][nullable].valid'] = 'Nullable musí být pro každý sloupec nastaven na hodnotu true nebo false.';
$lang['FormRules.plugindatabase.tables[][columns][][length].empty'] = 'Délka musí být ve formátu "a", "b", "c" pro výčtové sloupce, prázdná pro textové sloupce a sloupce s datem a číselná pro všechny ostatní.';
$lang['FormRules.plugindatabase.tables[][columns][][type].valid'] = 'Jeden nebo více sloupců má neplatný typ.';
$lang['FormRules.plugindatabase.tables[][columns][][name].format'] = 'Pro každý sloupec zadejte název metody ve formátu snake_case_name.';
$lang['FormRules.plugindatabase.tables[][name].format'] = 'Zadejte název metody pro každou tabulku ve formátu snake_case_name.';
$lang['FormRules.pluginbasic.authors[][name].empty'] = 'U každého autora uveďte jméno.';
$lang['FormRules.modulefeatures.cron_tasks[][time].format'] = 'Zadejte čas ve formátu 00:00 nebo číselný interval.';
$lang['FormRules.modulefeatures.cron_tasks[][type].valid'] = 'Jedna nebo více úloh cronu má neplatný typ.';
$lang['FormRules.modulefeatures.cron_tasks[][label].empty'] = 'Zadejte prosím popisek pro každou úlohu cronu.';
$lang['FormRules.modulefeatures.cron_tasks[][name].format'] = 'Pro každou úlohu cronu zadejte název metody ve formátu snake_case_name.';
$lang['FormRules.modulefeatures.service_tabs[][level].valid'] = 'Jedna nebo více karet služeb má neplatnou úroveň.';
$lang['FormRules.modulefeatures.service_tabs[][label].empty'] = 'U každé karty služby zadejte štítek.';
$lang['FormRules.modulefeatures.service_tabs[][method_name].format'] = 'Zadejte název metody pro každou kartu služby ve formátu camelCaseName.';
$lang['FormRules.modulefields.package_fields[][name_key].valid'] = 'Zda má být pole balíčku nastaveno jako klíč názvu, musí být nastaveno na hodnotu true nebo false.';
$lang['FormRules.modulefields.package_fields[][type].valid'] = 'Jedno nebo více polí balíčku má neplatný typ.';
$lang['FormRules.modulefields.package_fields[][label].empty'] = 'Zadejte prosím štítek pro každé pole obalu.';
$lang['FormRules.modulefields.package_fields[][name].format'] = 'Pro každé pole balíčku zadejte název ve formátu snake_case_name.';
$lang['FormRules.modulefields.service_fields[][name_key].valid'] = 'Zda má být pole služby nastaveno jako klíč názvu, musí být nastaveno na hodnotu true nebo false.';
$lang['FormRules.modulefields.service_fields[][type].valid'] = 'Jedno nebo více polí služby má neplatný typ.';
$lang['FormRules.modulefields.service_fields[][label].empty'] = 'Zadejte prosím popisek pro každé pole služby.';
$lang['FormRules.modulefields.service_fields[][name].format'] = 'Pro každé pole služby zadejte název ve formátu snake_case_name.';
$lang['FormRules.modulefields.module_rows[][name_key].valid'] = 'Zda má být pole řádku modulu nastaveno jako klíč názvu, musí být nastaveno na hodnotu true nebo false.';
$lang['FormRules.modulefields.module_rows[][type].valid'] = 'Jeden nebo více řádků modulu má neplatný typ.';
$lang['FormRules.modulefields.module_rows[][label].empty'] = 'Zadejte prosím popisek pro každé pole řádku modulu.';
$lang['FormRules.modulefields.module_rows[][name].format'] = 'Pro každé pole řádku modulu zadejte název ve formátu snake_case_name.';
$lang['FormRules.modulebasic.authors[][name].empty'] = 'U každého autora uveďte jméno.';
$lang['FormRules.modulebasic.module_group.empty'] = 'Zadejte prosím označení skupiny modulů.';
$lang['FormRules.modulebasic.module_row_plural.empty'] = 'Přidejte prosím název řádku modulu v množném čísle.';
$lang['FormRules.modulebasic.module_row.empty'] = 'Zadejte název řádku modulu.';
$lang['FormRules.general.name.format'] = 'Názvy rozšíření mohou obsahovat pouze alfanumerické znaky, podtržítka a mezery.';

