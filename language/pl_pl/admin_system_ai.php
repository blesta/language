<?php
/**
 * Admin System Ai
 *
 * @package blesta
 * @subpackage blesta.language.pl_pl
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemAi.!success.settings_updated'] = 'Ustawienia SI zostały pomyślnie zaktualizowane!';
$lang['AdminSystemAi.!success.api_key_fetched'] = 'Klucz API został pomyślnie pobrany z konta Blesta.';
$lang['AdminSystemAi.!error.connection_failed'] = 'Nie można połączyć się z interfejsem API AI: %1$s';
$lang['AdminSystemAi.!error.invalid_request'] = 'Nieprawidłowe żądanie.';
$lang['AdminSystemAi.!error.username_required'] = 'Wprowadź swoją nazwę użytkownika account.blesta.com.';
$lang['AdminSystemAi.!error.no_license_key'] = 'Nie znaleziono klucza licencyjnego Blesta. Najpierw skonfiguruj swoją licencję.';
$lang['AdminSystemAi.!error.auth_failed'] = 'Uwierzytelnianie nie powiodło się. Sprawdź nazwę użytkownika i klucz licencyjny.';
$lang['AdminSystemAi.!error.request_failed'] = 'Żądanie nie powiodło się. Spróbuj ponownie.';
$lang['AdminSystemAi.!error.api_key_required'] = 'Wprowadź klucz API.';
$lang['AdminSystemAi.!error.invalid_api_key'] = 'Nieprawidłowy klucz API.';
$lang['AdminSystemAi.index.page_title'] = 'Ustawienia &gt; System &gt; AI';
$lang['AdminSystemAi.index.boxtitle_ai'] = 'Ustawienia AI';
$lang['AdminSystemAi.index.field.ai_enabled'] = 'Włącz funkcje sztucznej inteligencji';
$lang['AdminSystemAi.index.field.ai_api_key'] = 'Klucz API';
$lang['AdminSystemAi.index.field.ai_default_model'] = 'Model domyślny';
$lang['AdminSystemAi.index.field.ai_temperature'] = 'Temperatura';
$lang['AdminSystemAi.index.field.ai_max_tokens'] = 'Maksymalna liczba żetonów';
$lang['AdminSystemAi.index.field.submit'] = 'Ustawienia aktualizacji';
$lang['AdminSystemAi.index.tooltip.ai_enabled'] = 'Włączanie lub wyłączanie funkcji sztucznej inteligencji w całym systemie.';
$lang['AdminSystemAi.index.tooltip.ai_api_key'] = 'Klucz API Blesta AI. Można go uzyskać na stronie account.blesta.com.';
$lang['AdminSystemAi.index.tooltip.ai_default_model'] = 'Domyślny model sztucznej inteligencji używany do uzupełniania czatu.';
$lang['AdminSystemAi.index.tooltip.ai_temperature'] = 'Kontroluje losowość. Niższe wartości są bardziej deterministyczne, a wyższe bardziej kreatywne. Zakres: 0.0 do 2.0';
$lang['AdminSystemAi.index.tooltip.ai_max_tokens'] = 'Maksymalna liczba tokenów do wygenerowania w odpowiedziach.';
$lang['AdminSystemAi.index.text_connected'] = 'Udało się połączyć z Blesta AI.';
$lang['AdminSystemAi.index.text_connection_error'] = 'Nie udało się połączyć z Blesta AI. Sprawdź swój klucz API.';
$lang['AdminSystemAi.index.text_balance'] = 'Saldo: %1$s %2$s';
$lang['AdminSystemAi.index.text_temperature_range'] = '(0.0 - 2.0)';
$lang['AdminSystemAi.index.text_fetch_key'] = 'Pobierz z mojego konta Blesta';
$lang['AdminSystemAi.index.text_manual_entry'] = 'Wprowadź klucz API ręcznie lub pobierz go automatycznie ze swojego konta.';
$lang['AdminSystemAi.index.text_validating'] = 'Weryfikacja...';
$lang['AdminSystemAi.index.text_key_valid'] = 'Klucz API zweryfikowany i zapisany';
$lang['AdminSystemAi.index.text_select_model'] = 'Wybór modelu';
$lang['AdminSystemAi.index.text_api_status'] = 'Status API';
$lang['AdminSystemAi.index.text_status_active'] = 'Aktywny';
$lang['AdminSystemAi.index.text_remaining_credits'] = 'Pozostałe kredyty';
$lang['AdminSystemAi.index.text_credits_used'] = 'Wykorzystane kredyty (w tym miesiącu)';
$lang['AdminSystemAi.index.text_last_api_call'] = 'Ostatnie wywołanie API';
$lang['AdminSystemAi.index.text_no_calls_yet'] = 'Brak połączeń';
$lang['AdminSystemAi.modal.heading_fetch'] = 'Pobierz z mojego konta Blesta';
$lang['AdminSystemAi.modal.text_subtitle'] = 'Nazwa użytkownika jest wymagana do pobrania klucza API.';
$lang['AdminSystemAi.modal.text_info'] = 'Nazwa użytkownika account.blesta.com i klucz licencyjny Blesta zostaną użyte do weryfikacji licencji i automatycznego pobrania nowego klucza API Blesta AI. Jeśli klucz został już wygenerowany, zostanie on unieważniony i zostanie wydany nowy klucz.';
$lang['AdminSystemAi.modal.field.username'] = 'Nazwa użytkownika';
$lang['AdminSystemAi.modal.field.username_placeholder'] = 'Wprowadź nazwę użytkownika konta';
$lang['AdminSystemAi.modal.button.authenticate'] = 'Uwierzytelnianie';
$lang['AdminSystemAi.modal.button.cancel'] = 'Anuluj';
$lang['AdminSystemAi.modal.text_authenticating'] = 'Uwierzytelnianie...';
$lang['AdminSystemAi.index.heading_api'] = 'Konfiguracja API';
$lang['AdminSystemAi.index.heading_model'] = 'Model domyślny';
$lang['AdminSystemAi.index.heading_parameters'] = 'Parametry modelu';
$lang['AdminSystemAi.index.heading_prompts'] = 'Podpowiedzi systemowe';
$lang['AdminSystemAi.index.heading_features'] = 'Włączone funkcje';
$lang['AdminSystemAi.index.field.ai_global_prompt'] = 'Globalny monit systemowy (domyślnie)';
$lang['AdminSystemAi.index.tooltip.ai_global_prompt'] = 'Domyślne instrukcje wysyłane do modelu sztucznej inteligencji przy każdym żądaniu. Definiuje to zachowanie i kontekst sztucznej inteligencji we wszystkich funkcjach.';
$lang['AdminSystemAi.index.text_global_prompt_help'] = 'Ten monit ma zastosowanie do wszystkich funkcji AI, chyba że zostanie nadpisany w funkcji.';
$lang['AdminSystemAi.index.field.ai_feature_package_descriptions'] = 'Opisy pakietów';
$lang['AdminSystemAi.index.text_feature_package_descriptions'] = 'Generowanie atrakcyjnych opisów produktów i usług';
$lang['AdminSystemAi.index.field.ai_feature_email_templates'] = 'Szablony wiadomości e-mail';
$lang['AdminSystemAi.index.text_feature_email_templates'] = 'Wspomagane przez sztuczną inteligencję edycje i ulepszenia szablonów wiadomości e-mail';
$lang['AdminSystemAi.index.field.ai_feature_chatbot'] = 'Chatbot';
$lang['AdminSystemAi.index.text_feature_chatbot'] = 'Chatbot wykorzystujący sztuczną inteligencję do pomocy pracownikom';
$lang['AdminSystemAi.index.field.ai_chatbot_staff_groups'] = 'Dostęp do grupy pracowników';
$lang['AdminSystemAi.index.tooltip.ai_chatbot_staff_groups'] = 'Wybierz, które grupy pracowników mogą uzyskać dostęp do chatbota AI. Można wybrać wiele grup.';
$lang['AdminSystemAi.index.text_staff_groups_help'] = 'Przytrzymaj klawisz Ctrl (Cmd na Macu), aby zaznaczyć wiele grup.';
$lang['AdminSystemAi.index.text_features_intro'] = 'Wybierz, które podstawowe funkcje Blesta powinny mieć włączoną pomoc AI. Wtyczki mogą uzyskać dostęp do funkcji AI i są konfigurowane niezależnie.';
$lang['AdminSystemAi.index.heading_beta'] = 'Powiadomienie o funkcji w wersji beta';
$lang['AdminSystemAi.index.text_beta_notice'] = 'Ta funkcja jest obecnie w wersji beta i może dawać nieoczekiwane lub niedokładne wyniki. Należy używać jej z rozwagą.';
$lang['AdminSystemAi.index.heading_privacy'] = 'Informacja o ochronie prywatności';
$lang['AdminSystemAi.index.text_privacy_notice'] = 'Żądania są wysyłane do zewnętrznych dostawców AI (np. OpenAI, Anthropic) w celu przetworzenia. Usługa Blesta AI nie przechowuje danych konwersacji AI; nie kontrolujemy jednak sposobu, w jaki ci dostawcy obsługują lub przechowują dane. Unikaj przesyłania wrażliwych lub poufnych informacji.';
$lang['AdminSystemAi.index.heading_privacy_acknowledgment'] = 'Potwierdzenie ochrony prywatności';
$lang['AdminSystemAi.index.field.ai_privacy_acknowledged'] = 'Przeczytałem i rozumiem powyższą informację o ochronie prywatności.';
$lang['AdminSystemAi.index.text_privacy_last_acknowledged'] = 'Ostatnio potwierdzone na stronie %1$s.';
$lang['AdminSystemAi.!error.privacy_not_acknowledged'] = 'Przed zapisaniem danych należy zaakceptować oświadczenie o ochronie prywatności.';
$lang['AdminSystemAi.index.heading_email_context'] = 'Ustawienia kontekstu szablonu wiadomości e-mail';
$lang['AdminSystemAi.index.field.ai_email_context_depth'] = 'Głębokość relacji';
$lang['AdminSystemAi.index.tooltip.ai_email_context_depth'] = 'Maksymalna głębokość przeglądania relacji w modelu. Wyższe wartości obejmują więcej powiązanych danych, ale zwiększają użycie tokenów. Zakres: 1-5.';
$lang['AdminSystemAi.index.text_email_context_depth'] = 'Kontroluje głębokość śledzenia relacji (np. faktura → klient → kontakty). Domyślnie: 2';
$lang['AdminSystemAi.index.field.ai_email_context_schemas'] = 'Dołącz definicje schematów';
$lang['AdminSystemAi.index.text_email_context_schemas'] = 'Uwzględnij informacje o typie pola i schematy bazy danych w kontekście.';
$lang['AdminSystemAi.index.field.ai_email_context_examples'] = 'Dołącz przykładowe dane';
$lang['AdminSystemAi.index.text_email_context_examples'] = 'Dołącz przykładowe wartości danych, aby pomóc sztucznej inteligencji zrozumieć formaty i strukturę danych.';
$lang['AdminSystemAi.index.degraded_model'] = 'Obecnie wybrany model „%1$s ” nie jest już dostępny. Funkcje AI tymczasowo korzystają z modelu „%2$s ”. Wybierz poniżej nowy model domyślny i zapisz wybór.';
$lang['AdminSystemAi.index.model_recommended'] = '(Zalecane)';

