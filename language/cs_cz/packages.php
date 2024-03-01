<?php
/**
 * Packages
 *
 * @package blesta
 * @subpackage blesta.language.cs_cz
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Packages.getStatusTypes.restricted'] = 'Omezené';
$lang['Packages.getStatusTypes.inactive'] = 'Neaktivní';
$lang['Packages.getStatusTypes.active'] = 'Aktivní';
$lang['Packages.getPricingPeriods.onetime_plural'] = 'Jednorázově';
$lang['Packages.getPricingPeriods.year_plural'] = 'Roky';
$lang['Packages.getPricingPeriods.month_plural'] = 'Měsíce';
$lang['Packages.getPricingPeriods.week_plural'] = 'Týdny';
$lang['Packages.getPricingPeriods.day_plural'] = 'Dny';
$lang['Packages.getPricingPeriods.onetime'] = 'Jednorázově';
$lang['Packages.getPricingPeriods.year'] = 'Rok';
$lang['Packages.getPricingPeriods.month'] = 'Měsíc';
$lang['Packages.getPricingPeriods.week'] = 'Týden';
$lang['Packages.getPricingPeriods.day'] = 'Den';
$lang['Packages.!error.groups[].valid'] = 'Vybraná skupina balíčků nepatří dané společnosti.';
$lang['Packages.!error.groups[].exists'] = 'Neplatné ID skupiny balíčků.';
$lang['Packages.!error.pricing[][id].deletable'] = 'Tento termín nemohl být odstraněn, protože jej používá jeden nebo více útvarů.';
$lang['Packages.!error.pricing[][id].format'] = 'Neplatné ID ceny balíčku.';
$lang['Packages.!error.pricing[][currency].in_use'] = 'Měnu nelze aktualizovat v ceně, která se používá.';
$lang['Packages.!error.pricing[][currency].format'] = 'Kód měny musí mít 3 znaky.';
$lang['Packages.!error.pricing[][cancel_fee].format'] = 'Storno poplatek musí být číselný.';
$lang['Packages.!error.pricing[][setup_fee].format'] = 'Zřizovací poplatek musí mít číselnou podobu.';
$lang['Packages.!error.pricing[][price_transfer].format'] = 'Přestupní cena musí být číselná.';
$lang['Packages.!error.pricing[][price_renews].valid'] = 'Cenu za obnovení nelze stanovit na jedno období.';
$lang['Packages.!error.pricing[][price_renews].format'] = 'Cena za obnovení musí být číselná.';
$lang['Packages.!error.pricing[][price].format'] = 'Cena musí být číslo.';
$lang['Packages.!error.pricing[][period].in_use'] = 'Období nelze aktualizovat u ceny, která se používá.';
$lang['Packages.!error.pricing[][period].format'] = 'Nesprávný typ období.';
$lang['Packages.!error.pricing[][term].in_use'] = 'Termín nelze aktualizovat v ceně, která se používá.';
$lang['Packages.!error.pricing[][term].valid'] = 'Výraz musí být větší než 0.';
$lang['Packages.!error.pricing[][term].length'] = 'Délka výrazu nesmí překročit 5 znaků.';
$lang['Packages.!error.pricing[][term].format'] = 'Termín musí být číslo.';
$lang['Packages.!error.email_content.parse'] = 'Chyba parsování šablony: %1$s';
$lang['Packages.!error.email_content[][lang].length'] = 'Délka jazyka nesmí překročit 5 znaků.';
$lang['Packages.!error.email_content[][lang].empty'] = 'Zadejte prosím jazyk.';
$lang['Packages.!error.prorata_cutoff.format'] = 'Poměrná část musí být v rozmezí od 1 do 28.';
$lang['Packages.!error.prorata_day.format'] = 'Poměrný den musí být v rozmezí od 1 do 28.';
$lang['Packages.!error.hidden.format'] = 'Zda má být tato skupina v rozhraní skryta, musí být nastaveno na 1 nebo 0.';
$lang['Packages.!error.status.format'] = 'Neplatný stav.';
$lang['Packages.!error.upgrades_use_renewal.valid'] = 'Ceny za obnovení použití pro upgrady musí být buď 1, nebo 0.';
$lang['Packages.!error.override_price.valid'] = 'Nastavení ceny balíčku jako přepisovací ceny musí být buď 1, nebo 0.';
$lang['Packages.!error.single_term.valid'] = 'Jednotlivý člen musí mít hodnotu 1 nebo 0.';
$lang['Packages.!error.taxable.length'] = 'Délka zdanitelného údaje nesmí překročit 1 znak.';
$lang['Packages.!error.taxable.format'] = 'Základ daně musí být číslo.';
$lang['Packages.!error.module_group_client.valid'] = 'Povolit klientovi vybrat skupinu musí mít hodnotu 1 nebo 0.';
$lang['Packages.!error.module_group.format'] = 'Zadána neplatná skupina modulů.';
$lang['Packages.!error.module_row.format'] = 'Zadán neplatný řádek modulu.';
$lang['Packages.!error.plugins[].valid'] = 'Zadán neplatný zásuvný modul.';
$lang['Packages.!error.option_groups[].valid'] = 'Zadána nesprávná skupina konfigurovatelných možností balíčku.';
$lang['Packages.!error.client_qty.format'] = 'Limit klienta musí být číslo.';
$lang['Packages.!error.qty.format'] = 'Množství musí být číslo.';
$lang['Packages.!error.descriptions.empty_lang'] = 'U každého popisu uveďte kód jazyka balíčku.';
$lang['Packages.!error.descriptions.format'] = 'Popisy balíčků jsou v nesprávném formátu.';
$lang['Packages.!error.names.empty_lang'] = 'U každého názvu uveďte kód jazyka balíčku.';
$lang['Packages.!error.names.empty_name'] = 'Uveďte název balíčku pro každý jazyk.';
$lang['Packages.!error.names.format'] = 'Názvy balíčků jsou v nesprávném formátu.';
$lang['Packages.!error.module_id.changed'] = 'Modul nelze změnit, protože tento balíček již používá jedna nebo více služeb.';
$lang['Packages.!error.module_id.exists'] = 'Zadán neplatný modul.';
$lang['Packages.!error.package_id.has_children'] = 'Balíček nebylo možné odstranit, protože služba má podřízené služby.';
$lang['Packages.!error.package_id.exists'] = 'Balíček nebylo možné odstranit, protože jej právě používá nějaká služba.';
$lang['Packages.!error.company_id.exists'] = 'Uvedena neplatná společnost.';
$lang['Packages.!error.manual_activation.valid'] = 'Ruční aktivace musí mít hodnotu 1 nebo 0.';

