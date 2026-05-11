<?php
/**
 * Admin Chatbot
 *
 * @package blesta
 * @subpackage blesta.language.pl_pl
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminChatbot.index.time_yesterday'] = 'Wczoraj';
$lang['AdminChatbot.index.time_today'] = 'Dzisiaj';
$lang['AdminChatbot.index.time_hours_ago'] = '%1$s godzinę temu';
$lang['AdminChatbot.index.time_minutes_ago'] = '%1$s min temu';
$lang['AdminChatbot.index.time_just_now'] = 'Właśnie teraz';
$lang['AdminChatbot.index.confirm_delete'] = 'Czy na pewno chcesz usunąć tę rozmowę?';
$lang['AdminChatbot.index.btn_delete'] = 'Usuń';
$lang['AdminChatbot.!error.model_empty'] = 'Prosimy o wybranie modelu przed wysłaniem wiadomości.';
$lang['AdminChatbot.!error.conversation_create_failed'] = 'Nie udało się utworzyć konwersacji. Spróbuj ponownie.';
$lang['AdminChatbot.!error.stream_failed'] = 'Nie udało się uzyskać odpowiedzi od sztucznej inteligencji. Spróbuj ponownie.';
$lang['AdminChatbot.!error.message_empty'] = 'Wprowadź wiadomość.';
$lang['AdminChatbot.!error.conversation_not_found'] = 'Nie znaleziono konwersacji.';
$lang['AdminChatbot.!error.unauthorized'] = 'Nie jesteś upoważniony do wykonania tej czynności.';
$lang['AdminChatbot.index.btn_go_back'] = 'Wróć';
$lang['AdminChatbot.index.no_permission_text'] = 'Nie masz uprawnień do korzystania z chatbota AI. Skontaktuj się z administratorem, aby poprosić o dostęp.';
$lang['AdminChatbot.index.no_permission_title'] = 'Ograniczony dostęp';
$lang['AdminChatbot.index.btn_configure'] = 'Konfiguracja AI';
$lang['AdminChatbot.index.not_configured_text'] = 'Chatbot AI nie został jeszcze skonfigurowany. Skonfiguruj ustawienia AI, aby rozpocząć korzystanie z tej funkcji.';
$lang['AdminChatbot.index.not_configured_title'] = 'Nie skonfigurowano sztucznej inteligencji';
$lang['AdminChatbot.index.truncated_notice'] = 'Ta odpowiedź została obcięta z powodu limitu tokenów. Możesz zwiększyć maksymalną liczbę tokenów w Ustawienia &gt; System &gt; SI lub poprosić SI o kontynuowanie.';
$lang['AdminChatbot.index.card_badge_prompt_mode'] = 'Tryb zachęty';
$lang['AdminChatbot.index.context_pill_dismiss'] = 'Anuluj';
$lang['AdminChatbot.index.suggestion_plugin_dev_placeholder'] = 'Co budujesz?';
$lang['AdminChatbot.index.suggestion_plugin_dev_text'] = 'Uzyskaj pomoc w tworzeniu wtyczki lub modułu';
$lang['AdminChatbot.index.suggestion_plugin_dev_title'] = 'Pomoc dla deweloperów';
$lang['AdminChatbot.index.suggestion_api_query_placeholder'] = 'Co chcesz zrobić za pośrednictwem interfejsu API?';
$lang['AdminChatbot.index.suggestion_api_query_text'] = 'Uzyskaj pomoc w pisaniu żądań API Blesta';
$lang['AdminChatbot.index.suggestion_api_query_title'] = 'Zapytanie API';
$lang['AdminChatbot.index.suggestion_custom_report_placeholder'] = 'Opisz raport, którego potrzebujesz...';
$lang['AdminChatbot.index.suggestion_custom_report_text'] = 'Generowanie zapytania SQL dla raportu niestandardowego';
$lang['AdminChatbot.index.suggestion_custom_report_title'] = 'Raport niestandardowy';
$lang['AdminChatbot.index.suggestion_security_context'] = 'Użytkownik pyta o najlepsze praktyki w zakresie bezpieczeństwa. Omów uprawnienia pracowników i kontrolę dostępu opartą na grupach, konfigurację uwierzytelniania dwuskładnikowego, silne zasady dotyczące haseł, aktualizację Blesta, konfigurację SSL/TLS, ograniczenia logowania oparte na adresach IP i dostęp do dzienników (Narzędzia &gt; Dzienniki). Wspomnij o zmianie domyślnej trasy administratora w /config/routes.php poprzez Route.admin';
$lang['AdminChatbot.index.suggestion_security_text'] = 'Jakich najlepszych praktyk bezpieczeństwa powinienem przestrzegać?';
$lang['AdminChatbot.index.suggestion_security_title'] = 'Bezpieczeństwo';
$lang['AdminChatbot.index.suggestion_clients_context'] = 'Użytkownik pyta o zarządzanie klientami w Blesta. Obejmuje tworzenie nowych klientów, edycję profili klientów, zarządzanie grupami klientów (Ustawienia &gt; Klienci &gt; Grupy klientów), ustawianie domyślnych ustawień na poziomie grupy dla fakturowania i płatności, automatyczne obciążanie, powiadomienia o opóźnieniach w płatnościach i przypomnienia, zarządzanie kontami płatniczymi oraz nawigację po stronie profilu klienta jako miejscu docelowym dla wszystkich działań klienta.';
$lang['AdminChatbot.index.suggestion_clients_text'] = 'Jak zarządzać kontami i grupami klientów?';
$lang['AdminChatbot.index.suggestion_clients_title'] = 'Zarządzanie klientami';
$lang['AdminChatbot.index.suggestion_plugins_context'] = 'Użytkownik pyta o zarządzanie wtyczkami w Blesta. Poprowadź go przez instalację wtyczek (Ustawienia &gt; Wtyczki &gt; Dostępne), włączanie/wyłączanie wtyczek, konfigurowanie ustawień wtyczek i zarządzanie uprawnieniami wtyczek dla grup pracowników (Ustawienia &gt; System &gt; Personel &gt; Grupy pracowników: Edytuj). Wspomnij o popularnych wtyczkach, takich jak Support Manager, CMS, Domain Manager oraz o tym, jak zainstalować wtyczki innych firm poprzez przesłanie i gdzie je aktywować.';
$lang['AdminChatbot.index.suggestion_plugins_text'] = 'Jak zainstalować i skonfigurować wtyczki?';
$lang['AdminChatbot.index.suggestion_plugins_title'] = 'Wtyczki';
$lang['AdminChatbot.index.suggestion_automation_context'] = 'Użytkownik pyta o automatyzację i zadania cron w Blesta. Wyjaśnij, jak skonfigurować systemowe zadanie cron, rodzaje zautomatyzowanych zadań uruchamianych przez Blesta (tworzenie faktur, przetwarzanie płatności, zawieszanie/niezawieszanie usług, przypomnienia e-mail) oraz gdzie znaleźć zalecane polecenie cron w Ustawienia &gt; System &gt; Automatyzacja, a także poszczególne zadania oraz ich czasy i częstotliwości uruchamiania w Ustawienia &gt; Firma &gt; Automatyzacja.';
$lang['AdminChatbot.index.suggestion_automation_text'] = 'Jak skonfigurować automatyczne rozliczenia i zadania serwisowe?';
$lang['AdminChatbot.index.suggestion_automation_title'] = 'Automatyzacja';
$lang['AdminChatbot.index.suggestion_support_context'] = 'Użytkownik pyta o system zgłoszeń do pomocy technicznej w Blesta. Wyjaśnij, jak utworzyć dział pomocy technicznej i odpowiadać na zgłoszenia za pomocą wtyczki Support Manager, w tym nawigacji (Wsparcie &gt; Działy i Wsparcie &gt; Zgłoszenia). Omów statusy zgłoszeń, działy, predefiniowane odpowiedzi, importowanie wiadomości e-mail ze zgłoszeniami przez piping lub POP/IMAP oraz tworzenie użytkowników i przypisywanie działów.';
$lang['AdminChatbot.index.suggestion_support_text'] = 'Jak zarządzać zgłoszeniami do pomocy technicznej i odpowiadać na nie?';
$lang['AdminChatbot.index.suggestion_support_title'] = 'Bilety wsparcia';
$lang['AdminChatbot.index.suggestion_modules_context'] = 'Użytkownik pyta o konfigurację instalacji modułów w Blesta. Przeprowadź go przez proces instalacji i konfiguracji modułów w Blesta. Omów nawigację (Ustawienia &gt; Moduły &gt; Dostępne), dodawanie poświadczeń serwera lub API, tworzenie pakietów korzystających z modułu (Pakiety &gt; Nowy pakiet). Użyj cPanel jako konkretnego przykładu, ale wspomnij, że wzorzec ma zastosowanie do innych modułów.';
$lang['AdminChatbot.index.suggestion_modules_text'] = 'Jak skonfigurować moduł serwera taki jak cPanel?';
$lang['AdminChatbot.index.suggestion_modules_title'] = 'Konfiguracja modułu';
$lang['AdminChatbot.index.suggestion_services_context'] = 'Użytkownik pyta o dostarczanie usług w Blesta. Poprowadź go przez dodawanie usługi dla klienta, wybór pakietu, konfigurację ustawień modułu i aktywację usługi. Omów ścieżkę nawigacji (Klienci &gt; Wybierz klienta &gt; Nowa usługa), tworzenie pakietu (Pakiety &gt; Nowy pakiet) i wybór terminu, wybór modułu (zakładka Moduł w nowym pakiecie) oraz ręczne i automatyczne udostępnianie.';
$lang['AdminChatbot.index.suggestion_services_text'] = 'Jak udostępnić nową usługę dla klienta?';
$lang['AdminChatbot.index.suggestion_services_title'] = 'Zarządzanie usługami';
$lang['AdminChatbot.index.suggestion_billing_context'] = 'Użytkownik pyta o fakturowanie klientów w Blesta. Zapewnij wskazówki krok po kroku dotyczące tworzenia faktur. Ścieżki nawigacji w Blesta (np. Klienci &gt; Wybierz klienta &gt; Utwórz fakturę lub ikona [+] w widżecie Faktury), metody dostarczania faktur, konfiguracja faktur cyklicznych i typowe ustawienia rozliczeniowe.';
$lang['AdminChatbot.index.suggestion_billing_text'] = 'Jak utworzyć i wysłać fakturę do klienta?';
$lang['AdminChatbot.index.suggestion_billing_title'] = 'Pomoc w rozliczeniach';
$lang['AdminChatbot.index.empty_subtitle'] = 'Rozpocznij rozmowę, wpisując wiadomość lub wybierając sugestię poniżej. Treści generowane przez sztuczną inteligencję mogą zawierać nieścisłości, uprzedzenia lub halucynacje i nie powinny być traktowane jako profesjonalne porady. Narzędzie to nie może być wykorzystywane do żadnych nielegalnych lub szkodliwych celów.';
$lang['AdminChatbot.index.empty_title'] = 'Jak mogę ci dzisiaj pomóc?';
$lang['AdminChatbot.index.default_title'] = 'Nowa rozmowa';
$lang['AdminChatbot.index.new_chat_title'] = 'Nowy czat';
$lang['AdminChatbot.index.model_label'] = 'Model';
$lang['AdminChatbot.index.btn_send'] = 'Wyślij';
$lang['AdminChatbot.index.input_placeholder'] = 'Wpisz wiadomość...';
$lang['AdminChatbot.index.show_chatbot_only'] = 'Pokaż tylko konwersacje chatbota';
$lang['AdminChatbot.index.show_all_conversations'] = 'Pokaż wszystkie rozmowy';
$lang['AdminChatbot.index.no_conversations'] = 'Nie przeprowadzono jeszcze żadnych rozmów';
$lang['AdminChatbot.index.search_placeholder'] = 'Wyszukiwanie rozmów...';
$lang['AdminChatbot.index.btn_new_chat'] = 'Nowy czat';
$lang['AdminChatbot.index.page_title'] = 'Chatbot AI';

