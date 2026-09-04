<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.ro_ro
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.!success.ai_settings_updated'] = 'Setările AI au fost actualizate cu succes.';
$lang['AdminMain.!success.settings_updated'] = 'Setările au fost actualizate cu succes.';
$lang['AdminMain.ai.badge_experimental'] = 'EXPERIMENTALE';
$lang['AdminMain.ai.boxtitle_settings'] = 'Setări AI';
$lang['AdminMain.ai.button_configure_ai'] = 'Mergeți la Setări AI sistem';
$lang['AdminMain.ai.field_add_ai_disclaimer'] = 'Adăugați Disclaimer generat de AI';
$lang['AdminMain.ai.field_add_ai_disclaimer_desc'] = 'Adăugați o notificare la răspunsurile generate automat care să indice că au fost create de AI (Recomandat pentru transparență)';
$lang['AdminMain.ai.field_analyze_trigger'] = 'Declanșatorul analizei AI';
$lang['AdminMain.ai.field_analyze_trigger_desc'] = 'Controlează momentul în care este declanșată analiza AI pentru generarea răspunsurilor și executarea instrumentelor.';
$lang['AdminMain.ai.field_analyze_trigger_tooltip'] = 'Alegeți momentul în care inteligența artificială ar trebui să analizeze tichetele pentru potențiale răspunsuri și utilizări ale instrumentelor. "Fiecare răspuns" analizează fiecare mesaj nou. "Bilet deschis" analizează doar deschiderea inițială a biletului.';
$lang['AdminMain.ai.field_assistant_name'] = 'Numele de afișare al asistentului AI';
$lang['AdminMain.ai.field_assistant_name_desc'] = 'Lăsați gol pentru a utiliza numele implicit: "Support"';
$lang['AdminMain.ai.field_assistant_name_placeholder'] = 'Sprijin';
$lang['AdminMain.ai.field_assistant_name_tooltip'] = 'Numele afișat pentru răspunsurile generate de inteligența artificială în firele de discuții. Acest lucru personalizează asistentul AI pentru echipa dvs. de asistență.';
$lang['AdminMain.ai.field_auto_reply_enabled'] = 'Activați răspunsurile automate la bilete AI';
$lang['AdminMain.ai.field_auto_reply_enabled_desc'] = 'Permiteți AI să răspundă automat la bilete atunci când are un grad ridicat de certitudine cu privire la răspuns.';
$lang['AdminMain.ai.field_confidence_threshold'] = 'Pragul de încredere';
$lang['AdminMain.ai.field_confidence_threshold_desc'] = 'Prag mai ridicat = mai conservator (mai puține răspunsuri automate, precizie mai mare). Recomandat: 70% sau mai mare.';
$lang['AdminMain.ai.field_confidence_threshold_tooltip'] = 'AI va răspunde automat la bilete numai atunci când nivelul său de încredere atinge sau depășește acest prag. Valorile mai mari (90-100%) sunt mai prudente și mai sigure. Valorile mai mici (60-89%) vor duce la mai multe răspunsuri automate, dar cu un risc mai mare de erori.';
$lang['AdminMain.ai.field_custom_disclaimer'] = 'Text de declinare a răspunderii personalizat';
$lang['AdminMain.ai.field_custom_disclaimer_desc'] = 'Acest text va fi adăugat la toate răspunsurile la bilete generate de AI.';
$lang['AdminMain.ai.field_custom_disclaimer_placeholder'] = 'Acest răspuns a fost generat cu ajutorul AI.';
$lang['AdminMain.ai.field_custom_disclaimer_tooltip'] = 'Personalizați mesajul de exonerare de răspundere anexat la răspunsurile generate de AI. Lăsați gol pentru a utiliza mesajul implicit.';
$lang['AdminMain.ai.field_enabled'] = 'Activați caracteristicile AI pentru Support Manager';
$lang['AdminMain.ai.field_enabled_desc'] = 'Permiteți funcții bazate pe inteligență artificială în cadrul sistemului de bilete, inclusiv răspunsuri automate, rezumate și instrumente.';
$lang['AdminMain.ai.field_max_queue_age_hours'] = 'Vârsta maximă a cozii (ore)';
$lang['AdminMain.ai.field_max_queue_age_hours_desc'] = 'Elimină răspunsurile AI din coada de așteptare mai vechi de acest număr de ore. Trebuie să fie între 1 și 8760 (1 an). Valoarea implicită este 24.';
$lang['AdminMain.ai.field_max_queue_age_hours_tooltip'] = 'Răspunsurile clienților aflați în coada de așteptare mai vechi decât această valoare vor fi eliminate de cron în loc să fie prelucrate. Împiedică AI să răspundă la tichete vechi în cazul în care cron-ul a fost dezactivat și s-a acumulat o întârziere.';
$lang['AdminMain.ai.field_max_tokens'] = 'Jetoane maxime';
$lang['AdminMain.ai.field_max_tokens_desc'] = 'Controlează lungimea maximă a răspunsurilor generate de AI. Valoarea implicită: 4000';
$lang['AdminMain.ai.field_max_tokens_tooltip'] = 'Numărul maxim de token-uri (cuvinte/părți de cuvinte) pe care AI le poate genera într-un singur răspuns. Valorile mai mari permit răspunsuri mai lungi, dar consumă mai multe resurse. Gama tipică: 100-4000 pentru majoritatea sarcinilor.';
$lang['AdminMain.ai.field_model'] = 'Model AI';
$lang['AdminMain.ai.field_model_desc'] = 'Acest model va fi utilizat pentru toate funcțiile AI din Support Manager.';
$lang['AdminMain.ai.field_model_tooltip'] = 'Selectați modelul AI pe care să îl utilizați în mod specific pentru caracteristicile Support Manager. Modelele diferite au capacități și prețuri diferite.';
$lang['AdminMain.ai.field_override_max_tokens'] = 'Suprascrierea numărului maxim de jetoane';
$lang['AdminMain.ai.field_override_max_tokens_desc'] = 'Sistemul implicit: %1$s';
$lang['AdminMain.ai.field_override_model'] = 'Suprascrierea modelului AI implicit';
$lang['AdminMain.ai.field_override_model_desc'] = 'Sistemul implicit: %1$s';
$lang['AdminMain.ai.field_override_temperature'] = 'Suprascriere temperatură';
$lang['AdminMain.ai.field_override_temperature_desc'] = 'Sistemul implicit: %1$s';
$lang['AdminMain.ai.field_require_human_review'] = 'Solicitați examinarea umană înainte de expediere';
$lang['AdminMain.ai.field_require_human_review_desc'] = 'Răspunsurile generate automat sunt afișate în cadrul biletului pentru uzul personalului (Recomandat)';
$lang['AdminMain.ai.field_restricted_departments'] = 'Restricționarea răspunsurilor automate către departamente';
$lang['AdminMain.ai.field_restricted_departments_desc'] = 'Selectați departamentele care pot primi răspunsuri AI automate. Debifați toate pentru a permite accesul tuturor departamentelor.';
$lang['AdminMain.ai.field_restricted_departments_tooltip'] = 'Permiteți răspunsuri automate numai pentru anumite departamente de bilete. Lăsați toate neclarificate pentru a permite tuturor departamentelor.';
$lang['AdminMain.ai.field_submit'] = 'Salvare setări AI';
$lang['AdminMain.ai.field_system_prompt'] = 'Prompt sistem manager de asistență';
$lang['AdminMain.ai.field_system_prompt_desc'] = 'Acest prompt este utilizat în mod specific pentru caracteristicile Support Manager AI și înlocuiește promptul global al sistemului.';
$lang['AdminMain.ai.field_system_prompt_tooltip'] = 'Definiți instrucțiuni specifice pentru AI atunci când gestionează bilete de asistență. Această solicitare prevalează asupra solicitării globale a sistemului și definește comportamentul AI în mod specific în cadrul sistemului de bilete.';
$lang['AdminMain.ai.field_temperature'] = 'Temperatura';
$lang['AdminMain.ai.field_temperature_desc'] = 'Temperatură mai scăzută = mai concentrat, temperatură mai ridicată = mai creativ. Implicit: 1.0';
$lang['AdminMain.ai.field_temperature_tooltip'] = 'Controlează caracterul aleatoriu al răspunsurilor. Valorile mai mici (0,0-0,7) produc rezultate mai concentrate și mai deterministe. Valorile mai mari (1,3-2,0) produc rezultate mai creative și mai variate. Interval: De la 0,0 la 2,0';
$lang['AdminMain.ai.field_tool_assign_staff'] = 'Atribuiți unui membru al personalului';
$lang['AdminMain.ai.field_tool_assign_staff_desc'] = 'Permiteți AI să atribuie bilete anumitor membri ai personalului pe baza instrucțiunilor prompte ale sistemului.';
$lang['AdminMain.ai.field_tool_change_priority'] = 'Schimbarea priorității biletelor';
$lang['AdminMain.ai.field_tool_change_priority_desc'] = 'Permiteți AI să ajusteze prioritatea biletelor (în sus sau în jos) atunci când o prioritate nepotrivită a fost selectată de client sau detectată prin analiză.';
$lang['AdminMain.ai.field_tool_close_ticket'] = 'Închide biletul';
$lang['AdminMain.ai.field_tool_close_ticket_desc'] = 'Permiteți AI să închidă bilete în caz de spam, mesaje respinse sau probleme clar rezolvate.';
$lang['AdminMain.ai.field_tool_instructions'] = 'Instrucțiuni de utilizare a uneltelor';
$lang['AdminMain.ai.field_tool_instructions_desc'] = 'Furnizați instrucțiuni și scenarii specifice în care ar trebui utilizate instrumentele. Acest text va fi inclus în solicitarea sistemului atunci când instrumentele sunt activate.';
$lang['AdminMain.ai.field_tool_instructions_placeholder'] = 'Exemplu: - Atribuiți problemele tehnice legate de serverele Linux lui John, serverele Windows lui Dave - Închideți numai tichetele care sunt în mod clar spam, răspunsuri automate sau clientul indică faptul că tichetul este rezolvat în ultimul răspuns - Creșteți prioritatea pentru problemele urgente care menționează "down" sau "offline" la starea de urgență - Reduceți prioritatea tichetelor de urgență dacă nu sunt urgențe reale';
$lang['AdminMain.ai.field_tool_instructions_tooltip'] = 'Furnizați orientări specifice AI cu privire la când și cum să utilizeze instrumentele activate. De exemplu, specificați numele membrilor personalului și domeniile lor de expertiză pentru atribuirea biletelor.';
$lang['AdminMain.ai.field_tools_available'] = 'Instrumente disponibile';
$lang['AdminMain.ai.field_tools_available_tooltip'] = 'Selectați instrumentele pe care AI are voie să le utilizeze. Fiecare instrument permite acțiuni specifice pe care AI le poate efectua atunci când procesează tichete.';
$lang['AdminMain.ai.field_tools_enabled'] = 'Activați instrumentele';
$lang['AdminMain.ai.field_tools_enabled_desc'] = 'Permiteți AI să utilizeze instrumente de gestionare a biletelor, cum ar fi modificarea priorității, închiderea biletelor sau atribuirea către membrii personalului.';
$lang['AdminMain.ai.heading_experimental'] = 'Caracteristici experimentale';
$lang['AdminMain.ai.heading_features'] = 'Caracteristici AI';
$lang['AdminMain.ai.heading_model'] = 'Configurația modelului';
$lang['AdminMain.ai.heading_parameters'] = 'Parametrii modelului';
$lang['AdminMain.ai.heading_replies'] = 'Răspunsuri automate';
$lang['AdminMain.ai.heading_system_prompt'] = 'Prompt de sistem';
$lang['AdminMain.ai.heading_tools'] = 'Instrumente AI';
$lang['AdminMain.ai.option_every_reply'] = 'Fiecare răspuns';
$lang['AdminMain.ai.option_ticket_opened'] = 'Doar bilet deschis';
$lang['AdminMain.ai.page_title'] = 'Manager de asistență &gt; Setări AI';
$lang['AdminMain.ai.warning_not_configured_text'] = 'Funcțiile AI pentru Support Manager necesită o cheie API Blesta AI. Vă rugăm să vă configurați cheia API în Setări sistem &gt; Inteligență artificială înainte de a activa funcțiile AI.';
$lang['AdminMain.ai.warning_not_configured_title'] = 'Cheie API Blesta AI necesară';
$lang['AdminMain.settings.boxtitle_settings'] = 'Setări';
$lang['AdminMain.settings.field_avatar'] = 'Avatar';
$lang['AdminMain.settings.field_default_avatar'] = 'Imagine Avatar implicită';
$lang['AdminMain.settings.field_submit'] = 'Actualizarea setărilor';
$lang['AdminMain.settings.heading_avatar_settings'] = 'Setări avatar';
$lang['AdminMain.settings.option_default'] = 'Utilizați doar avatarul personalizat';
$lang['AdminMain.settings.option_fallback'] = 'Utilizați Gravatar, dar înlocuiți dacă este setat un avatar personalizat';
$lang['AdminMain.settings.option_gravatar'] = 'Utilizați Gravatar';
$lang['AdminMain.settings.page_title'] = 'Manager de asistență &gt; Setări';
$lang['AdminMain.settings.text_avatar_recommendation'] = 'Recomandat: 150x150px, JPG sau PNG, max 2MB';
$lang['AdminMain.settings.text_remove_avatar'] = 'Eliminați imaginea';

