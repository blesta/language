<?php
/**
 * Packages
 *
 * @package blesta
 * @subpackage blesta.language.pl_pl
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Packages.!error.manual_activation.valid'] = 'Aktywacja ręczna musi mieć wartość 1 lub 0.';
$lang['Packages.getStatusTypes.restricted'] = 'Ograniczony';
$lang['Packages.getStatusTypes.inactive'] = 'Nieaktywny';
$lang['Packages.getStatusTypes.active'] = 'Aktywny';
$lang['Packages.getPricingPeriods.onetime_plural'] = 'Jednorazowo';
$lang['Packages.getPricingPeriods.year_plural'] = 'Lata';
$lang['Packages.getPricingPeriods.month_plural'] = 'Miesiące';
$lang['Packages.getPricingPeriods.week_plural'] = 'Tygodnie';
$lang['Packages.getPricingPeriods.day_plural'] = 'Dni';
$lang['Packages.getPricingPeriods.onetime'] = 'Jednorazowo';
$lang['Packages.getPricingPeriods.year'] = 'Rok';
$lang['Packages.getPricingPeriods.month'] = 'Miesiąc';
$lang['Packages.getPricingPeriods.week'] = 'Tydzień';
$lang['Packages.getPricingPeriods.day'] = 'Dzień';
$lang['Packages.!error.groups[].valid'] = 'Wybrana grupa pakietów nie należy do podanej firmy.';
$lang['Packages.!error.groups[].exists'] = 'Nieprawidłowy identyfikator grupy pakietów.';
$lang['Packages.!error.pricing[][id].deletable'] = 'Termin nie mógł zostać usunięty, ponieważ jest używany przez jedną lub więcej usług.';
$lang['Packages.!error.pricing[][id].format'] = 'Nieprawidłowy identyfikator ceny pakietu.';
$lang['Packages.!error.pricing[][currency].in_use'] = 'Nie można zaktualizować waluty w używanej wycenie.';
$lang['Packages.!error.pricing[][currency].format'] = 'Kod waluty musi składać się z 3 znaków.';
$lang['Packages.!error.pricing[][cancel_fee].format'] = 'Opłata za anulowanie musi być liczbą.';
$lang['Packages.!error.pricing[][setup_fee].format'] = 'Opłata instalacyjna musi być liczbą.';
$lang['Packages.!error.pricing[][price_transfer].format'] = 'Cena transferu musi być liczbą.';
$lang['Packages.!error.pricing[][price_renews].valid'] = 'Cena odnowienia nie może być ustalona dla jednego okresu.';
$lang['Packages.!error.pricing[][price_renews].format'] = 'Cena odnowienia musi być liczbą.';
$lang['Packages.!error.pricing[][price].format'] = 'Cena musi być liczbą.';
$lang['Packages.!error.pricing[][period].in_use'] = 'Okresu nie można zaktualizować w używanej wycenie.';
$lang['Packages.!error.pricing[][period].format'] = 'Nieprawidłowy typ okresu.';
$lang['Packages.!error.pricing[][term].in_use'] = 'Terminu nie można zaktualizować w używanej wycenie.';
$lang['Packages.!error.pricing[][term].valid'] = 'Termin musi być większy niż 0.';
$lang['Packages.!error.pricing[][term].length'] = 'Długość terminu nie może przekraczać 5 znaków.';
$lang['Packages.!error.pricing[][term].format'] = 'Termin musi być liczbą.';
$lang['Packages.!error.email_content.parse'] = 'Błąd parsowania szablonu: %1$s';
$lang['Packages.!error.email_content[][lang].length'] = 'Długość języka nie może przekraczać 5 znaków.';
$lang['Packages.!error.email_content[][lang].empty'] = 'Wprowadź język.';
$lang['Packages.!error.prorata_cutoff.format'] = 'Proporcjonalny dzień odcięcia musi zawierać się w przedziale od 1 do 28.';
$lang['Packages.!error.prorata_day.format'] = 'Proporcjonalny dzień musi zawierać się w przedziale od 1 do 28.';
$lang['Packages.!error.hidden.format'] = 'To, czy ta grupa powinna być ukryta w interfejsie, musi być ustawione na 1 lub 0.';
$lang['Packages.!error.status.format'] = 'Nieprawidłowy status.';
$lang['Packages.!error.upgrades_use_renewal.valid'] = 'Ceny odnowienia dla aktualizacji muszą wynosić 1 lub 0.';
$lang['Packages.!error.override_price.valid'] = 'Ustawienie ceny pakietu jako ceny zastępczej musi mieć wartość 1 lub 0.';
$lang['Packages.!error.single_term.valid'] = 'Pojedynczy termin musi mieć wartość 1 lub 0.';
$lang['Packages.!error.taxable.length'] = 'Podlegająca opodatkowaniu długość nie może przekraczać 1 znaku.';
$lang['Packages.!error.taxable.format'] = 'Podstawa opodatkowania musi być liczbą.';
$lang['Packages.!error.module_group_client.valid'] = 'Allow Client to Select Group musi mieć wartość 1 lub 0.';
$lang['Packages.!error.module_group.format'] = 'Podano nieprawidłową grupę modułów.';
$lang['Packages.!error.module_row.format'] = 'Podano nieprawidłowy wiersz modułu.';
$lang['Packages.!error.plugins[].valid'] = 'Podano nieprawidłową wtyczkę.';
$lang['Packages.!error.option_groups[].valid'] = 'Podano nieprawidłową konfigurowalną grupę opcji pakietu.';
$lang['Packages.!error.client_qty.format'] = 'Limit klienta musi być liczbą.';
$lang['Packages.!error.qty.format'] = 'Ilość musi być liczbą.';
$lang['Packages.!error.descriptions.empty_lang'] = 'Dla każdego opisu należy podać kod języka pakietu.';
$lang['Packages.!error.descriptions.format'] = 'Opisy pakietów mają nieprawidłowy format.';
$lang['Packages.!error.names.empty_lang'] = 'Dla każdej nazwy należy podać kod języka pakietu.';
$lang['Packages.!error.names.empty_name'] = 'Podaj nazwę pakietu dla każdego języka.';
$lang['Packages.!error.names.format'] = 'Nazwy pakietów mają nieprawidłowy format.';
$lang['Packages.!error.module_id.changed'] = 'Moduł nie może zostać zmieniony, ponieważ co najmniej jedna usługa korzysta już z tego pakietu.';
$lang['Packages.!error.module_id.exists'] = 'Podano nieprawidłowy moduł.';
$lang['Packages.!error.package_id.has_children'] = 'Pakiet nie mógł zostać usunięty, ponieważ usługa ma usługi podrzędne.';
$lang['Packages.!error.package_id.exists'] = 'Pakiet nie mógł zostać usunięty, ponieważ aktualnie korzysta z niego usługa.';
$lang['Packages.!error.company_id.exists'] = 'Podano nieprawidłową firmę.';

