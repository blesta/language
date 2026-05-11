<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.sv_se
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.settings.field_submit'] = 'Uppdatera inställningar';
$lang['AdminMain.settings.text_remove_avatar'] = 'Ta bort bild';
$lang['AdminMain.settings.field_default_avatar'] = 'Standardbild för avatar';
$lang['AdminMain.settings.option_default'] = 'Använd endast anpassad avatar';
$lang['AdminMain.settings.option_fallback'] = 'Använd Gravatar men åsidosätt om en anpassad avatar har angetts';
$lang['AdminMain.settings.option_gravatar'] = 'Använd Gravatar';
$lang['AdminMain.settings.field_avatar'] = 'Avatar';
$lang['AdminMain.settings.heading_avatar_settings'] = 'Avatar-inställningar';
$lang['AdminMain.settings.boxtitle_settings'] = 'Inställningar';
$lang['AdminMain.!success.settings_updated'] = 'Inställningarna har uppdaterats på ett framgångsrikt sätt.';
$lang['AdminMain.settings.page_title'] = 'Support Manager &gt; Inställningar';
$lang['AdminMain.!success.ai_settings_updated'] = 'AI-inställningarna har uppdaterats på ett framgångsrikt sätt.';
$lang['AdminMain.ai.page_title'] = 'Support Manager &gt; AI-inställningar';
$lang['AdminMain.settings.text_avatar_recommendation'] = 'Rekommenderas: 150x150px, JPG eller PNG, max 2MB';
$lang['AdminMain.ai.boxtitle_settings'] = 'AI-inställningar';
$lang['AdminMain.ai.warning_not_configured_title'] = 'Blesta AI API-nyckel krävs';
$lang['AdminMain.ai.warning_not_configured_text'] = 'AI-funktioner för Support Manager kräver en Blesta AI API-nyckel. Vänligen konfigurera din API-nyckel i Systeminställningar &gt; Artificiell intelligens innan du aktiverar AI-funktioner.';
$lang['AdminMain.ai.button_configure_ai'] = 'Gå till System AI-inställningar';
$lang['AdminMain.ai.heading_features'] = 'AI-funktioner';
$lang['AdminMain.ai.heading_model'] = 'Modellkonfiguration';
$lang['AdminMain.ai.heading_parameters'] = 'Modell Parametrar';
$lang['AdminMain.ai.heading_system_prompt'] = 'Systemets uppmaning';
$lang['AdminMain.ai.heading_experimental'] = 'Experimentella funktioner';
$lang['AdminMain.ai.heading_replies'] = 'Automatiska svar';
$lang['AdminMain.ai.heading_tools'] = 'AI-verktyg';
$lang['AdminMain.ai.field_enabled'] = 'Aktivera AI-funktioner för Support Manager';
$lang['AdminMain.ai.field_enabled_desc'] = 'Tillåt AI-drivna funktioner i ärendehanteringssystemet, inklusive automatiserade svar, sammanfattningar och verktyg.';
$lang['AdminMain.ai.field_override_model'] = 'Åsidosätt standard AI-modell';
$lang['AdminMain.ai.field_override_model_desc'] = 'Systemets standardinställning: %1$s';
$lang['AdminMain.ai.field_model'] = 'AI-modell';
$lang['AdminMain.ai.field_model_tooltip'] = 'Välj den AI-modell som ska användas specifikt för Support Manager-funktioner. Olika modeller har olika kapacitet och prissättning.';
$lang['AdminMain.ai.field_model_desc'] = 'Denna modell kommer att användas för alla AI-funktioner i Support Manager.';
$lang['AdminMain.ai.field_override_max_tokens'] = 'Åsidosätt Max Tokens';
$lang['AdminMain.ai.field_override_max_tokens_desc'] = 'Systemets standardinställning: %1$s';
$lang['AdminMain.ai.field_max_tokens'] = 'Max Tokens';
$lang['AdminMain.ai.field_max_tokens_tooltip'] = 'Maximalt antal tokens (ord/orddelar) som AI:n kan generera i ett enda svar. Högre värden möjliggör längre svar men förbrukar mer resurser. Typiskt intervall: 100-4000 för de flesta uppgifter.';
$lang['AdminMain.ai.field_max_tokens_desc'] = 'Styr den maximala längden på AI-genererade svar. Standard: 4000';
$lang['AdminMain.ai.field_override_temperature'] = 'Åsidosätt temperatur';
$lang['AdminMain.ai.field_override_temperature_desc'] = 'Systemets standardinställning: %1$s';
$lang['AdminMain.ai.field_temperature'] = 'Temperatur';
$lang['AdminMain.ai.field_temperature_tooltip'] = 'Styr slumpmässigheten i svaren. Lägre värden (0,0-0,7) ger mer fokuserade och deterministiska svar. Högre värden (1,3-2,0) ger mer kreativa och varierade svar. Intervall: 0,0 till 2,0';
$lang['AdminMain.ai.field_temperature_desc'] = 'Lägre temperatur = mer fokuserad, högre temperatur = mer kreativ. Standard: 1,0';
$lang['AdminMain.ai.field_system_prompt'] = 'Support Manager System Prompt';
$lang['AdminMain.ai.field_system_prompt_tooltip'] = 'Definiera specifika instruktioner för AI vid hantering av supportärenden. Den här prompten åsidosätter den globala systemprompten och definierar AI:ns beteende specifikt i ärendehanteringssystemet.';
$lang['AdminMain.ai.field_system_prompt_desc'] = 'Denna prompt används specifikt för Support Manager AI-funktioner och åsidosätter den globala systemprompten.';
$lang['AdminMain.ai.badge_experimental'] = 'EXPERIMENTELL';
$lang['AdminMain.ai.field_auto_reply_enabled'] = 'Aktivera automatiska AI-biljettsvar';
$lang['AdminMain.ai.field_auto_reply_enabled_desc'] = 'Låt AI automatiskt svara på ärenden när den har en hög grad av säkerhet om svaret.';
$lang['AdminMain.ai.field_confidence_threshold'] = 'Tröskelvärde för konfidens';
$lang['AdminMain.ai.field_confidence_threshold_tooltip'] = 'AI kommer endast att svara automatiskt på ärenden när dess konfidensnivå uppfyller eller överstiger detta tröskelvärde. Högre värden (90-100%) är mer konservativa och säkrare. Lägre värden (60-89%) resulterar i fler automatiska svar men med högre risk för fel.';
$lang['AdminMain.ai.field_confidence_threshold_desc'] = 'Högre tröskel = mer konservativ (färre automatiska svar, högre precision). Rekommenderas: 70% eller högre.';
$lang['AdminMain.ai.field_require_human_review'] = 'Kräv mänsklig granskning före sändning';
$lang['AdminMain.ai.field_require_human_review_desc'] = 'Autogenererade svar visas i ärendet så att personalen kan använda dem (rekommenderas)';
$lang['AdminMain.ai.field_add_ai_disclaimer'] = 'Lägg till AI-genererad ansvarsfriskrivning';
$lang['AdminMain.ai.field_add_ai_disclaimer_desc'] = 'Lägg till ett meddelande till automatiskt genererade svar som anger att de skapades av AI (rekommenderas för transparens)';
$lang['AdminMain.ai.field_custom_disclaimer'] = 'Anpassad text om ansvarsfriskrivning';
$lang['AdminMain.ai.field_custom_disclaimer_tooltip'] = 'Anpassa meddelandet om ansvarsfriskrivning som bifogas AI-genererade svar. Lämna tomt om du vill använda standardmeddelandet.';
$lang['AdminMain.ai.field_custom_disclaimer_desc'] = 'Denna text kommer att läggas till i alla AI-genererade svar på ärenden.';
$lang['AdminMain.ai.field_custom_disclaimer_placeholder'] = 'Detta svar har genererats med hjälp av AI.';
$lang['AdminMain.ai.field_restricted_departments'] = 'Begränsa autosvar till avdelningar';
$lang['AdminMain.ai.field_restricted_departments_tooltip'] = 'Tillåt endast automatiska svar för specifika avdelningar. Lämna alla omarkerade för att tillåta alla avdelningar.';
$lang['AdminMain.ai.field_restricted_departments_desc'] = 'Välj vilka biljettavdelningar som kan få automatiska AI-svar. Avmarkera alla för att tillåta alla avdelningar.';
$lang['AdminMain.ai.field_assistant_name'] = 'AI-assistentens visningsnamn';
$lang['AdminMain.ai.field_assistant_name_tooltip'] = 'Det namn som visas för AI-genererade svar i ärendetrådar. Detta anpassar AI-assistenten för ditt supportteam.';
$lang['AdminMain.ai.field_assistant_name_desc'] = 'Lämna tomt för att använda standardnamnet: "Support"';
$lang['AdminMain.ai.field_assistant_name_placeholder'] = 'Stöd';
$lang['AdminMain.ai.field_analyze_trigger'] = 'Trigger för AI-analys';
$lang['AdminMain.ai.field_analyze_trigger_tooltip'] = 'Välj när AI ska analysera ärenden för potentiella svar och verktygsanvändningar. "Varje svar" analyserar varje nytt meddelande. "Biljett öppnad" analyserar endast den första biljettöppningen.';
$lang['AdminMain.ai.field_analyze_trigger_desc'] = 'Styr när AI-analys utlöses för att generera svar och exekvera verktyg.';
$lang['AdminMain.ai.option_every_reply'] = 'Varje svar';
$lang['AdminMain.ai.option_ticket_opened'] = 'Biljett endast öppnad';
$lang['AdminMain.ai.field_max_queue_age_hours'] = 'Max kötid (timmar)';
$lang['AdminMain.ai.field_max_queue_age_hours_tooltip'] = 'Klientsvar i kö som är äldre än detta värde kommer att kasseras av cron i stället för att behandlas. Förhindrar AI från att svara på inaktuella ärenden om cron har inaktiverats och en eftersläpning har byggts upp.';
$lang['AdminMain.ai.field_max_queue_age_hours_desc'] = 'Kassera AI-svar i kö som är äldre än så här många timmar. Måste vara mellan 1 och 8760 (1 år). Standardvärdet är 24.';
$lang['AdminMain.ai.field_tools_enabled'] = 'Aktivera verktyg';
$lang['AdminMain.ai.field_tools_enabled_desc'] = 'Låt AI använda verktyg för ärendehantering, t.ex. ändra prioritet, stänga ärenden eller tilldela personal.';
$lang['AdminMain.ai.field_tools_available'] = 'Tillgängliga verktyg';
$lang['AdminMain.ai.field_tools_available_tooltip'] = 'Välj vilka verktyg som AI:n får använda. Varje verktyg möjliggör specifika åtgärder som AI kan utföra när den hanterar ärenden.';
$lang['AdminMain.ai.field_tool_change_priority'] = 'Ändra biljettprioritet';
$lang['AdminMain.ai.field_tool_change_priority_desc'] = 'Tillåt AI att justera ärendeprioriteten (upp eller ner) när en olämplig prioritet valts av kunden eller upptäckts genom analys.';
$lang['AdminMain.ai.field_tool_close_ticket'] = 'Stäng biljett';
$lang['AdminMain.ai.field_tool_close_ticket_desc'] = 'Låt AI stänga ärenden vid skräppost, studsade meddelanden eller tydligt lösta problem.';
$lang['AdminMain.ai.field_tool_assign_staff'] = 'Tilldela till personalmedlem';
$lang['AdminMain.ai.field_tool_assign_staff_desc'] = 'Tillåt AI att tilldela ärenden till specifika medarbetare baserat på instruktioner från systemet.';
$lang['AdminMain.ai.field_tool_instructions'] = 'Instruktioner för verktygsanvändning';
$lang['AdminMain.ai.field_tool_instructions_tooltip'] = 'Ge specifik vägledning till AI om när och hur de aktiverade verktygen ska användas. Ange t.ex. namn på medarbetare och deras kompetensområden för tilldelning av ärenden.';
$lang['AdminMain.ai.field_tool_instructions_desc'] = 'Ge instruktioner och specifika scenarier där verktygen bör användas. Denna text kommer att ingå i systemprompten när verktygen är aktiverade.';
$lang['AdminMain.ai.field_tool_instructions_placeholder'] = 'Exempel: - Tilldela tekniska frågor som rör Linux-servrar till John och Windows-servrar till Dave - Stäng endast ärenden som är uppenbart skräppost, autosvar eller där kunden anger att ärendet är löst i det senaste svaret - Höj prioriteten för brådskande ärenden där "nere" eller "offline" nämns till statusen Emergency - Sänk prioriteten för Emergency-ärenden om de inte är faktiska nödsituationer';
$lang['AdminMain.ai.field_submit'] = 'Spara AI-inställningar';

