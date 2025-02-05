<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.pl_pl
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.confirm.generate'] = 'Generowanie rozszerzenia';
$lang['AdminMain.confirm.custom_path'] = 'Ścieżka niestandardowa';
$lang['AdminMain.confirm.tooltip_location'] = 'Katalog, do którego mają zostać przesłane wygenerowane pliki rozszerzeń.';
$lang['AdminMain.confirm.location'] = 'Lokalizacja rozszerzenia';
$lang['AdminMain.confirm.text_generation'] = 'Ustawienia rozszerzenia zostały zakończone.  Możesz przejrzeć dowolną sekcję, klikając węzły na pasku postępu.  Kliknij "Generate Extension", aby zakończyć i automatycznie wygenerować pliki dla swojego rozszerzenia.';
$lang['AdminMain.confirm.heading_confirm'] = 'Potwierdzenie';
$lang['AdminMain.general.placeholder_name'] = 'Nazwa rozszerzenia';
$lang['AdminMain.general.tooltip_code_examples'] = 'Sprawdź, czy zawiera skomentowane linie przykładowego kodu dla funkcji takich jak zadania Cron, listy zdarzeń i powiązania itp.';
$lang['AdminMain.general.tooltip_form_type'] = 'Basic, aby użyć wysoce okrojonej wersji formularza rozszerzenia, zawierającej tylko minimum niezbędne do wygenerowania rozszerzenia.';
$lang['AdminMain.general.tooltip_type'] = 'Moduły obsługują wiele funkcji usług, w tym udostępnianie usług na zdalnych serwerach. Wtyczki są potężnymi integracjami zdolnymi do zrobienia większości rzeczy w Blesta. Bramki Merchant przetwarzają płatności, utrzymując klientów w interfejsie Blesta.  Bramki inne niż Merchant wysyłają klientów do strony procesora płatności w celu dokonania płatności.';
$lang['AdminMain.general.tooltip_name'] = 'Wyświetlana nazwa rozszerzenia. Jest ona również używana do tworzenia różnych kodów. Na przykład, jeśli nazwa to My Module, to katalog modułu będzie miał nazwę my_module, a nazwa klasy to MyModule.  W przypadku wtyczek nie należy umieszczać słowa "plugin" w nazwie, ponieważ powoduje to pewne problemy z generowaniem kodu.';
$lang['AdminMain.general.basic_info'] = 'Dalej - Podstawowe informacje';
$lang['AdminMain.general.code_examples'] = 'Dołącz przykładowy kod';
$lang['AdminMain.general.form_type'] = 'Typ formularza';
$lang['AdminMain.general.type'] = 'Typ rozszerzenia';
$lang['AdminMain.general.name'] = 'Nazwa';
$lang['AdminMain.general.heading_general_settings'] = 'Ustawienia ogólne';
$lang['AdminMain.index.extensions_no_results'] = 'W tej chwili nie ma żadnych przedłużeń.';
$lang['AdminMain.index.text_confirm_delete'] = 'Czy na pewno chcesz usunąć to rozszerzenie?';
$lang['AdminMain.index.option_delete'] = 'Usuń';
$lang['AdminMain.index.option_edit'] = 'Edytuj';
$lang['AdminMain.index.heading_options'] = 'Opcje';
$lang['AdminMain.index.heading_date_updated'] = 'Data aktualizacji';
$lang['AdminMain.index.heading_code_examples'] = 'Przykłady kodu';
$lang['AdminMain.index.heading_form_type'] = 'Typ formularza';
$lang['AdminMain.index.heading_type'] = 'Typ';
$lang['AdminMain.index.heading_name'] = 'Nazwa';
$lang['AdminMain.index.heading_id'] = 'ID';
$lang['AdminMain.index.extension_add'] = 'Dodaj rozszerzenie';
$lang['AdminMain.index.boxtitle_extensions'] = 'Generator rozszerzeń - rozszerzenia';
$lang['AdminMain.index.boxtitle_extension_generator'] = 'Generator rozszerzeń';
$lang['AdminMain.index.page_title'] = 'Generator rozszerzeń';
$lang['AdminMain.getfilelocations.custom'] = 'Niestandardowe';
$lang['AdminMain.getfilelocations.upload'] = 'Blesta Uploads Directory';
$lang['AdminMain.getfilelocations.nonmerchant'] = 'Katalog bramek Blesta niebędących bramkami handlowymi';
$lang['AdminMain.getfilelocations.merchant'] = 'Katalog bramek handlowych Blesta';
$lang['AdminMain.getfilelocations.plugin'] = 'Katalog wtyczek Blesta';
$lang['AdminMain.getfilelocations.module'] = 'Katalog modułów Blesta';
$lang['AdminMain.!success.nonmerchant_created'] = 'Nowa brama została pomyślnie wygenerowana i można ją znaleźć pod adresem %1$s';
$lang['AdminMain.!success.merchant_created'] = 'Nowa brama została pomyślnie wygenerowana i można ją znaleźć pod adresem %1$s';
$lang['AdminMain.!success.plugin_created'] = 'Nowa wtyczka została pomyślnie wygenerowana i można ją znaleźć pod adresem %1$s';
$lang['AdminMain.!success.module_created'] = 'Nowy moduł został pomyślnie wygenerowany i można go znaleźć pod adresem %1$s';
$lang['AdminMain.!success.package_deleted'] = 'Rozszerzenie zostało pomyślnie usunięte';
$lang['AdminMain.!notice.updating_installed_extension'] = 'To rozszerzenie jest obecnie zainstalowane. Zdecydowanie zaleca się odinstalowanie go przed regeneracją plików, w przeciwnym razie może to spowodować uszkodzenie spójności bazy danych.';
$lang['AdminMain.!notice.file_overwrite'] = 'Pliki dla tego rozszerzenia już istnieją w plikach Blesta i zostaną nadpisane, jeśli użyjesz katalogu Blesta.';
$lang['AdminMain.!notice.type_warning'] = 'Zmiana typu rozszerzenia spowoduje nieodwracalne usunięcie wszystkich ustawień zapisanych dla tego rozszerzenia.';
$lang['AdminMain.!error.generation_failed'] = 'Nie można wygenerować rozszerzenia.  Wygenerowano wyjątek: %1$s';
$lang['AdminMain.!error.name_taken'] = 'Ta nazwa powoduje konflikt z istniejącym katalogiem rozszerzeń.';

