<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.pl_pl
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.settings.field_submit'] = 'Ustawienia aktualizacji';
$lang['AdminMain.settings.text_remove_avatar'] = 'Usuń obraz';
$lang['AdminMain.settings.field_default_avatar'] = 'Domyślny obraz awatara';
$lang['AdminMain.settings.option_default'] = 'Używaj tylko niestandardowego awatara';
$lang['AdminMain.settings.option_fallback'] = 'Użyj Gravatara, ale zastąp go, jeśli ustawiony jest niestandardowy awatar.';
$lang['AdminMain.settings.option_gravatar'] = 'Użyj Gravatara';
$lang['AdminMain.settings.field_avatar'] = 'Awatar';
$lang['AdminMain.settings.heading_avatar_settings'] = 'Ustawienia awatara';
$lang['AdminMain.settings.boxtitle_settings'] = 'Ustawienia';
$lang['AdminMain.settings.page_title'] = 'Menedżer wsparcia &gt; Ustawienia';
$lang['AdminMain.!success.settings_updated'] = 'Ustawienia zostały pomyślnie zaktualizowane.';
$lang['AdminMain.!success.ai_settings_updated'] = 'Ustawienia sztucznej inteligencji zostały pomyślnie zaktualizowane.';
$lang['AdminMain.ai.page_title'] = 'Menedżer wsparcia &gt; Ustawienia AI';
$lang['AdminMain.settings.text_avatar_recommendation'] = 'Zalecane: 150x150px, JPG lub PNG, maks. 2MB';
$lang['AdminMain.ai.boxtitle_settings'] = 'Ustawienia AI';
$lang['AdminMain.ai.warning_not_configured_title'] = 'Wymagany klucz API Blesta AI';
$lang['AdminMain.ai.warning_not_configured_text'] = 'Funkcje AI dla Support Managera wymagają klucza API Blesta AI. Przed włączeniem funkcji AI należy skonfigurować klucz API w Ustawieniach systemu &gt; Sztuczna inteligencja.';
$lang['AdminMain.ai.button_configure_ai'] = 'Przejdź do Ustawień AI systemu';
$lang['AdminMain.ai.heading_features'] = 'Funkcje AI';
$lang['AdminMain.ai.heading_model'] = 'Konfiguracja modelu';
$lang['AdminMain.ai.heading_parameters'] = 'Parametry modelu';
$lang['AdminMain.ai.heading_system_prompt'] = 'Komunikat systemowy';
$lang['AdminMain.ai.heading_experimental'] = 'Funkcje eksperymentalne';
$lang['AdminMain.ai.heading_replies'] = 'Automatyczne odpowiedzi';
$lang['AdminMain.ai.heading_tools'] = 'Narzędzia AI';
$lang['AdminMain.ai.field_enabled'] = 'Włącz funkcje AI dla Support Managera';
$lang['AdminMain.ai.field_enabled_desc'] = 'Zezwalaj na funkcje oparte na sztucznej inteligencji w systemie zgłoszeń, w tym automatyczne odpowiedzi, podsumowania i narzędzia.';
$lang['AdminMain.ai.field_override_model'] = 'Zastąp domyślny model sztucznej inteligencji';
$lang['AdminMain.ai.field_override_model_desc'] = 'Domyślne ustawienia systemu: %1$s';
$lang['AdminMain.ai.field_model'] = 'Model AI';
$lang['AdminMain.ai.field_model_tooltip'] = 'Wybierz model AI, który będzie używany specjalnie dla funkcji Support Manager. Różne modele mają różne możliwości i ceny.';
$lang['AdminMain.ai.field_model_desc'] = 'Ten model będzie używany dla wszystkich funkcji AI w Menedżerze wsparcia.';
$lang['AdminMain.ai.field_override_max_tokens'] = 'Zastąpienie maksymalnej liczby tokenów';
$lang['AdminMain.ai.field_override_max_tokens_desc'] = 'Domyślne ustawienia systemu: %1$s';
$lang['AdminMain.ai.field_max_tokens'] = 'Maksymalna liczba żetonów';
$lang['AdminMain.ai.field_max_tokens_tooltip'] = 'Maksymalna liczba tokenów (słów/części słów), które sztuczna inteligencja może wygenerować w pojedynczej odpowiedzi. Wyższe wartości pozwalają na dłuższe odpowiedzi, ale zużywają więcej zasobów. Typowy zakres: 100-4000 dla większości zadań.';
$lang['AdminMain.ai.field_max_tokens_desc'] = 'Kontroluje maksymalną długość odpowiedzi generowanych przez AI. Domyślnie: 4000';
$lang['AdminMain.ai.field_override_temperature'] = 'Nadpisanie temperatury';
$lang['AdminMain.ai.field_override_temperature_desc'] = 'Domyślne ustawienia systemu: %1$s';
$lang['AdminMain.ai.field_temperature'] = 'Temperatura';
$lang['AdminMain.ai.field_temperature_tooltip'] = 'Kontroluje losowość odpowiedzi. Niższe wartości (0,0-0,7) generują bardziej skoncentrowane i deterministyczne wyniki. Wyższe wartości (1.3-2.0) dają bardziej kreatywne i zróżnicowane wyniki. Zakres: 0.0 do 2.0';
$lang['AdminMain.ai.field_temperature_desc'] = 'Niższa temperatura = większe skupienie, wyższa temperatura = większa kreatywność. Domyślnie: 1.0';
$lang['AdminMain.ai.field_system_prompt'] = 'System Support Manager Prompt';
$lang['AdminMain.ai.field_system_prompt_tooltip'] = 'Określa konkretne instrukcje dla sztucznej inteligencji podczas obsługi zgłoszeń do pomocy technicznej. Ten monit zastępuje globalny monit systemowy i definiuje zachowanie sztucznej inteligencji w systemie zgłoszeń.';
$lang['AdminMain.ai.field_system_prompt_desc'] = 'Ten monit jest używany specjalnie dla funkcji Support Manager AI i zastępuje globalny monit systemowy.';
$lang['AdminMain.ai.badge_experimental'] = 'EKSPERYMENTALNE';
$lang['AdminMain.ai.field_auto_reply_enabled'] = 'Włącz automatyczne odpowiedzi na bilety AI';
$lang['AdminMain.ai.field_auto_reply_enabled_desc'] = 'Pozwól sztucznej inteligencji automatycznie odpowiadać na zgłoszenia, gdy ma wysoki stopień pewności co do odpowiedzi.';
$lang['AdminMain.ai.field_confidence_threshold'] = 'Próg ufności';
$lang['AdminMain.ai.field_confidence_threshold_tooltip'] = 'Sztuczna inteligencja będzie automatycznie odpowiadać na zgłoszenia tylko wtedy, gdy jej poziom ufności osiągnie lub przekroczy ten próg. Wyższe wartości (90-100%) są bardziej konserwatywne i bezpieczniejsze. Niższe wartości (60-89%) spowodują więcej automatycznych odpowiedzi, ale z większym ryzykiem błędów.';
$lang['AdminMain.ai.field_confidence_threshold_desc'] = 'Wyższy próg = bardziej konserwatywny (mniej automatycznych odpowiedzi, wyższa dokładność). Zalecane: 70% lub wyższy.';
$lang['AdminMain.ai.field_require_human_review'] = 'Wymagaj weryfikacji przez człowieka przed wysłaniem';
$lang['AdminMain.ai.field_require_human_review_desc'] = 'Automatycznie generowane odpowiedzi są wyświetlane w ramach zgłoszenia do użytku pracowników (zalecane).';
$lang['AdminMain.ai.field_add_ai_disclaimer'] = 'Dodaj zastrzeżenie wygenerowane przez sztuczną inteligencję';
$lang['AdminMain.ai.field_add_ai_disclaimer_desc'] = 'Dodanie powiadomienia do automatycznie generowanych odpowiedzi wskazującego, że zostały one utworzone przez sztuczną inteligencję (zalecane dla przejrzystości).';
$lang['AdminMain.ai.field_custom_disclaimer'] = 'Niestandardowy tekst zrzeczenia się odpowiedzialności';
$lang['AdminMain.ai.field_custom_disclaimer_tooltip'] = 'Dostosuj komunikat o wyłączeniu odpowiedzialności dołączany do odpowiedzi generowanych przez sztuczną inteligencję. Pozostaw puste, aby użyć domyślnego komunikatu.';
$lang['AdminMain.ai.field_custom_disclaimer_desc'] = 'Tekst ten będzie dołączany do wszystkich odpowiedzi na zgłoszenia generowanych przez SI.';
$lang['AdminMain.ai.field_custom_disclaimer_placeholder'] = 'Ta odpowiedź została wygenerowana przy pomocy sztucznej inteligencji.';
$lang['AdminMain.ai.field_restricted_departments'] = 'Ograniczanie automatycznych odpowiedzi do działów';
$lang['AdminMain.ai.field_restricted_departments_tooltip'] = 'Zezwalaj na automatyczne odpowiedzi tylko dla określonych działów zgłoszeń. Pozostaw wszystkie niezaznaczone, aby zezwolić na wszystkie działy.';
$lang['AdminMain.ai.field_restricted_departments_desc'] = 'Wybierz, które działy zgłoszeń mogą otrzymywać automatyczne odpowiedzi AI. Odznacz wszystkie, aby zezwolić wszystkim działom.';
$lang['AdminMain.ai.field_assistant_name'] = 'Wyświetlana nazwa asystenta AI';
$lang['AdminMain.ai.field_assistant_name_tooltip'] = 'Nazwa wyświetlana dla odpowiedzi generowanych przez AI w wątkach zgłoszeń. Pozwala to spersonalizować asystenta AI dla zespołu pomocy technicznej.';
$lang['AdminMain.ai.field_assistant_name_desc'] = 'Pozostaw puste, aby użyć domyślnej nazwy: "Support".';
$lang['AdminMain.ai.field_assistant_name_placeholder'] = 'Wsparcie';
$lang['AdminMain.ai.field_analyze_trigger'] = 'Wyzwalacz analizy AI';
$lang['AdminMain.ai.field_analyze_trigger_tooltip'] = 'Wybierz, kiedy sztuczna inteligencja ma analizować zgłoszenia pod kątem potencjalnych odpowiedzi i zastosowań narzędzi. "Każda odpowiedź" analizuje każdą nową wiadomość. "Ticket Opened" analizuje tylko początkowe otwarcie zgłoszenia.';
$lang['AdminMain.ai.field_analyze_trigger_desc'] = 'Kontroluje, kiedy analiza AI jest uruchamiana w celu generowania odpowiedzi i wykonywania narzędzi.';
$lang['AdminMain.ai.option_every_reply'] = 'Każda odpowiedź';
$lang['AdminMain.ai.option_ticket_opened'] = 'Tylko bilet otwarty';
$lang['AdminMain.ai.field_max_queue_age_hours'] = 'Maksymalny czas oczekiwania w kolejce (godziny)';
$lang['AdminMain.ai.field_max_queue_age_hours_tooltip'] = 'Odpowiedzi klientów w kolejce starsze niż ta wartość będą odrzucane przez cron, a nie przetwarzane. Zapobiega odpowiadaniu przez sztuczną inteligencję na nieaktualne zgłoszenia, jeśli cron został wyłączony i narosły zaległości.';
$lang['AdminMain.ai.field_max_queue_age_hours_desc'] = 'Odrzuca oczekujące w kolejce odpowiedzi AI starsze niż ta liczba godzin. Musi zawierać się w przedziale od 1 do 8760 (1 rok). Domyślnie 24.';
$lang['AdminMain.ai.field_tools_enabled'] = 'Włącz narzędzia';
$lang['AdminMain.ai.field_tools_enabled_desc'] = 'Zezwalaj AI na korzystanie z narzędzi do zarządzania zgłoszeniami, takich jak zmiana priorytetu, zamykanie zgłoszeń lub przypisywanie ich do pracowników.';
$lang['AdminMain.ai.field_tools_available'] = 'Dostępne narzędzia';
$lang['AdminMain.ai.field_tools_available_tooltip'] = 'Wybierz narzędzia, z których SI może korzystać. Każde narzędzie umożliwia określone działania, które sztuczna inteligencja może wykonywać podczas przetwarzania biletów.';
$lang['AdminMain.ai.field_tool_change_priority'] = 'Zmiana priorytetu biletu';
$lang['AdminMain.ai.field_tool_change_priority_desc'] = 'Umożliwienie sztucznej inteligencji dostosowania priorytetu zgłoszenia (w górę lub w dół) w przypadku wybrania niewłaściwego priorytetu przez klienta lub wykrycia go przez analizę.';
$lang['AdminMain.ai.field_tool_close_ticket'] = 'Zamknij bilet';
$lang['AdminMain.ai.field_tool_close_ticket_desc'] = 'Zezwalaj sztucznej inteligencji na zamykanie zgłoszeń w przypadku spamu, odesłanych wiadomości lub wyraźnie rozwiązanych problemów.';
$lang['AdminMain.ai.field_tool_assign_staff'] = 'Przypisanie do członka personelu';
$lang['AdminMain.ai.field_tool_assign_staff_desc'] = 'Umożliwienie sztucznej inteligencji przypisywania zgłoszeń do określonych pracowników na podstawie instrukcji systemowych.';
$lang['AdminMain.ai.field_tool_instructions'] = 'Instrukcje użytkowania narzędzia';
$lang['AdminMain.ai.field_tool_instructions_tooltip'] = 'Zapewnij AI konkretne wskazówki dotyczące tego, kiedy i jak korzystać z włączonych narzędzi. Na przykład należy określić nazwiska pracowników i ich obszary specjalizacji w celu przypisania zgłoszeń.';
$lang['AdminMain.ai.field_tool_instructions_desc'] = 'Zapewnia instrukcje i konkretne scenariusze, w których należy używać narzędzi. Ten tekst zostanie dołączony do monitu systemu, gdy narzędzia są włączone.';
$lang['AdminMain.ai.field_tool_instructions_placeholder'] = 'Przykład: - Przypisywanie kwestii technicznych związanych z serwerami Linux do Johna, a serwerami Windows do Dave\'a - Zamykanie tylko zgłoszeń, które są ewidentnym spamem, automatycznymi odpowiedziami lub klient wskazuje, że zgłoszenie zostało rozwiązane w ostatniej odpowiedzi - Zwiększanie priorytetu pilnych zgłoszeń z informacją o "awarii" lub "offline" do statusu awaryjnego - Zmniejszanie priorytetu zgłoszeń awaryjnych, jeśli nie są one faktycznie awaryjne.';
$lang['AdminMain.ai.field_submit'] = 'Zapisz ustawienia AI';

