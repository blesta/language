<?php
/**
 * Form Rules
 *
 * @package blesta
 * @subpackage blesta.language.pl_pl
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['FormRules.nonmerchantfields.fields[][type].valid'] = 'Jedno lub więcej pól ma nieprawidłowy typ.';
$lang['FormRules.nonmerchantfields.fields[][label].empty'] = 'Wprowadź etykietę dla każdego pola.';
$lang['FormRules.nonmerchantfields.fields[][name].format'] = 'Wprowadź nazwę dla każdego pola w formacie snake_case_name.';
$lang['FormRules.nonmerchantbasic.currencies.format'] = 'Wprowadź waluty w formacie trzech znaków oddzielonych przecinkami (np. USD, EUR, JPY).';
$lang['FormRules.nonmerchantbasic.authors[][name].empty'] = 'Podaj imię i nazwisko każdego autora.';
$lang['FormRules.merchantfields.fields[][type].valid'] = 'Jedno lub więcej pól ma nieprawidłowy typ.';
$lang['FormRules.merchantfields.fields[][label].empty'] = 'Wprowadź etykietę dla każdego pola.';
$lang['FormRules.merchantfields.fields[][name].format'] = 'Wprowadź nazwę dla każdego pola w formacie snake_case_name.';
$lang['FormRules.merchantbasic.currencies.format'] = 'Wprowadź waluty w formacie trzech znaków oddzielonych przecinkami (np. USD, EUR, JPY).';
$lang['FormRules.merchantbasic.authors[][name].empty'] = 'Podaj imię i nazwisko każdego autora.';
$lang['FormRules.pluginintegrations.cards[][label].empty'] = 'Wprowadź etykietę dla każdej karty.';
$lang['FormRules.pluginintegrations.cards[][callback].format'] = 'Wprowadź metodę wywołania zwrotnego dla każdej karty w formacie camelCaseName.';
$lang['FormRules.pluginintegrations.cards[][level].valid'] = 'Jedna lub więcej kart ma nieprawidłowy poziom.';
$lang['FormRules.pluginintegrations.events[][callback].format'] = 'Wprowadź metodę wywołania zwrotnego dla każdego zdarzenia w formacie camelCaseName.';
$lang['FormRules.pluginintegrations.events[][event].empty'] = 'Wprowadź nazwę wydarzenia dla każdego wydarzenia.';
$lang['FormRules.pluginintegrations.actions[][name].empty'] = 'Wprowadź nazwę dla każdej akcji.';
$lang['FormRules.pluginintegrations.actions[][action].format'] = 'Wprowadź działanie dla każdego działania małymi literami.';
$lang['FormRules.pluginintegrations.actions[][controller].format'] = 'Wprowadź kontroler dla każdej akcji w formacie snake_case_name.';
$lang['FormRules.pluginintegrations.actions[][location].valid'] = 'Wprowadź prawidłową lokalizację akcji.';
$lang['FormRules.plugindatabase.tables[][columns][][primary].valid'] = 'Wartość Primary musi być ustawiona na true lub false dla każdej kolumny.';
$lang['FormRules.plugindatabase.tables[][columns][][nullable].valid'] = 'Nullable musi być ustawione na true lub false dla każdej kolumny.';
$lang['FormRules.plugindatabase.tables[][columns][][length].empty'] = 'Długość musi być w formacie "a", "b", "c" dla kolumn wyliczeniowych, pusta dla kolumn tekstowych i datetime oraz numeryczna dla wszystkich innych.';
$lang['FormRules.plugindatabase.tables[][columns][][type].valid'] = 'Jedna lub więcej kolumn ma nieprawidłowy typ.';
$lang['FormRules.plugindatabase.tables[][columns][][name].format'] = 'Wprowadź nazwę metody dla każdej kolumny w formacie snake_case_name.';
$lang['FormRules.plugindatabase.tables[][name].format'] = 'Wprowadź nazwę metody dla każdej tabeli w formacie snake_case_name.';
$lang['FormRules.pluginbasic.authors[][name].empty'] = 'Wprowadź imię i nazwisko każdego autora.';
$lang['FormRules.modulefeatures.cron_tasks[][time].format'] = 'Wprowadź czas w formacie 00:00 lub przedział numeryczny.';
$lang['FormRules.modulefeatures.cron_tasks[][type].valid'] = 'Jedno lub więcej zadań cron ma nieprawidłowy typ.';
$lang['FormRules.modulefeatures.cron_tasks[][label].empty'] = 'Wprowadź etykietę dla każdego zadania cron.';
$lang['FormRules.modulefeatures.cron_tasks[][name].format'] = 'Wprowadź nazwę metody dla każdego zadania cron w formacie snake_case_name.';
$lang['FormRules.modulefeatures.service_tabs[][level].valid'] = 'Jedna lub więcej kart usług ma nieprawidłowy poziom.';
$lang['FormRules.modulefeatures.service_tabs[][label].empty'] = 'Wprowadź etykietę dla każdej karty usługi.';
$lang['FormRules.modulefeatures.service_tabs[][method_name].format'] = 'Wprowadź nazwę metody dla każdej karty usługi w formacie camelCaseName.';
$lang['FormRules.modulefields.package_fields[][name_key].valid'] = 'To, czy ustawić pole pakietu jako klucz nazwy, musi mieć wartość true lub false.';
$lang['FormRules.modulefields.package_fields[][type].valid'] = 'Jedno lub więcej pól pakietu ma nieprawidłowy typ.';
$lang['FormRules.modulefields.package_fields[][label].empty'] = 'Wprowadź etykietę dla każdego pola pakietu.';
$lang['FormRules.modulefields.package_fields[][name].format'] = 'Wprowadź nazwę dla każdego pola pakietu w formacie snake_case_name.';
$lang['FormRules.modulefields.service_fields[][name_key].valid'] = 'Ustawienie pola usługi jako klucza nazwy musi mieć wartość true lub false.';
$lang['FormRules.modulefields.service_fields[][type].valid'] = 'Jedno lub więcej pól usługi ma nieprawidłowy typ.';
$lang['FormRules.modulefields.service_fields[][label].empty'] = 'Wprowadź etykietę dla każdego pola usługi.';
$lang['FormRules.modulefields.service_fields[][name].format'] = 'Wprowadź nazwę dla każdego pola usługi w formacie snake_case_name.';
$lang['FormRules.modulefields.module_rows[][name_key].valid'] = 'To, czy ustawić pole wiersza modułu jako klucz nazwy, musi mieć wartość true lub false.';
$lang['FormRules.modulefields.module_rows[][type].valid'] = 'Jeden lub więcej wierszy modułu ma nieprawidłowy typ.';
$lang['FormRules.modulefields.module_rows[][label].empty'] = 'Wprowadź etykietę dla każdego pola wiersza modułu.';
$lang['FormRules.modulefields.module_rows[][name].format'] = 'Wprowadź nazwę dla każdego pola wiersza modułu w formacie snake_case_name.';
$lang['FormRules.modulebasic.authors[][name].empty'] = 'Podaj imię i nazwisko każdego autora.';
$lang['FormRules.modulebasic.module_group.empty'] = 'Wprowadź etykietę grupy modułów.';
$lang['FormRules.modulebasic.module_row_plural.empty'] = 'Dodaj nazwę wiersza modułu w liczbie mnogiej.';
$lang['FormRules.modulebasic.module_row.empty'] = 'Wprowadź nazwę wiersza modułu.';
$lang['FormRules.general.name.format'] = 'Nazwy rozszerzeń mogą zawierać tylko znaki alfanumeryczne, podkreślenia i spacje.';

