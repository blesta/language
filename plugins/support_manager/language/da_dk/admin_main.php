<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.settings.field_submit'] = 'Opdater indstillinger';
$lang['AdminMain.settings.text_remove_avatar'] = 'Fjern billede';
$lang['AdminMain.settings.field_default_avatar'] = 'Standard-avatarbillede';
$lang['AdminMain.settings.option_default'] = 'Brug kun brugerdefineret avatar';
$lang['AdminMain.settings.option_fallback'] = 'Brug Gravatar, men tilsidesæt, hvis en brugerdefineret avatar er indstillet';
$lang['AdminMain.settings.option_gravatar'] = 'Brug Gravatar';
$lang['AdminMain.settings.field_avatar'] = 'Avatar';
$lang['AdminMain.settings.heading_avatar_settings'] = 'Avatar-indstillinger';
$lang['AdminMain.!success.settings_updated'] = 'Indstillingerne er blevet opdateret.';
$lang['AdminMain.settings.boxtitle_settings'] = 'Indstillinger';
$lang['AdminMain.settings.page_title'] = 'Support Manager &gt; Indstillinger';
$lang['AdminMain.!success.ai_settings_updated'] = 'AI-indstillingerne er blevet opdateret.';
$lang['AdminMain.ai.page_title'] = 'Support Manager &gt; AI-indstillinger';
$lang['AdminMain.settings.text_avatar_recommendation'] = 'Anbefales: 150x150px, JPG eller PNG, max 2MB';
$lang['AdminMain.ai.boxtitle_settings'] = 'AI-indstillinger';
$lang['AdminMain.ai.warning_not_configured_title'] = 'Blesta AI API-nøgle påkrævet';
$lang['AdminMain.ai.warning_not_configured_text'] = 'AI-funktioner til Support Manager kræver en Blesta AI API-nøgle. Konfigurer din API-nøgle i Systemindstillinger &gt; Kunstig intelligens, før du aktiverer AI-funktioner.';
$lang['AdminMain.ai.button_configure_ai'] = 'Gå til System AI-indstillinger';
$lang['AdminMain.ai.heading_features'] = 'AI-funktioner';
$lang['AdminMain.ai.heading_model'] = 'Modelkonfiguration';
$lang['AdminMain.ai.heading_parameters'] = 'Modelparametre';
$lang['AdminMain.ai.heading_system_prompt'] = 'System-prompt';
$lang['AdminMain.ai.heading_experimental'] = 'Eksperimentelle funktioner';
$lang['AdminMain.ai.heading_replies'] = 'Automatiske svar';
$lang['AdminMain.ai.heading_tools'] = 'AI-værktøjer';
$lang['AdminMain.ai.field_enabled'] = 'Aktivér AI-funktioner for Support Manager';
$lang['AdminMain.ai.field_enabled_desc'] = 'Tillad AI-drevne funktioner i billetsystemet, herunder automatiserede svar, resuméer og værktøjer.';
$lang['AdminMain.ai.field_override_model'] = 'Tilsidesæt standard AI-model';
$lang['AdminMain.ai.field_override_model_desc'] = 'Systemets standard: %1$s';
$lang['AdminMain.ai.field_model'] = 'AI-model';
$lang['AdminMain.ai.field_model_tooltip'] = 'Vælg den AI-model, der skal bruges specifikt til Support Manager-funktioner. Forskellige modeller har forskellige muligheder og priser.';
$lang['AdminMain.ai.field_model_desc'] = 'Denne model vil blive brugt til alle AI-funktioner i Support Manager.';
$lang['AdminMain.ai.field_override_max_tokens'] = 'Tilsidesæt maks. tokens';
$lang['AdminMain.ai.field_override_max_tokens_desc'] = 'Systemets standard: %1$s';
$lang['AdminMain.ai.field_max_tokens'] = 'Max Tokens';
$lang['AdminMain.ai.field_max_tokens_tooltip'] = 'Maksimalt antal tokens (ord/ordstykker), som AI\'en kan generere i et enkelt svar. Højere værdier tillader længere svar, men bruger flere ressourcer. Typisk interval: 100-4000 for de fleste opgaver.';
$lang['AdminMain.ai.field_max_tokens_desc'] = 'Styrer den maksimale længde af AI-genererede svar. Standard: 4000';
$lang['AdminMain.ai.field_override_temperature'] = 'Overstyring af temperatur';
$lang['AdminMain.ai.field_override_temperature_desc'] = 'Systemets standard: %1$s';
$lang['AdminMain.ai.field_temperature'] = 'Temperatur';
$lang['AdminMain.ai.field_temperature_tooltip'] = 'Styrer tilfældigheden i svarene. Lavere værdier (0,0-0,7) giver mere fokuserede og deterministiske resultater. Højere værdier (1,3-2,0) giver mere kreative og varierede resultater. Område: 0,0 til 2,0';
$lang['AdminMain.ai.field_temperature_desc'] = 'Lavere temperatur = mere fokuseret, højere temperatur = mere kreativ. Standard: 1.0';
$lang['AdminMain.ai.field_system_prompt'] = 'Support Manager System Prompt';
$lang['AdminMain.ai.field_system_prompt_tooltip'] = 'Definer specifikke instruktioner til AI\'en, når den håndterer supportbilletter. Denne prompt tilsidesætter den globale systemprompt og definerer AI\'ens adfærd specifikt i billetsystemet.';
$lang['AdminMain.ai.field_system_prompt_desc'] = 'Denne prompt bruges specifikt til Support Manager AI-funktioner og tilsidesætter den globale systemprompt.';
$lang['AdminMain.ai.badge_experimental'] = 'EKSPERIMENTELT';
$lang['AdminMain.ai.field_auto_reply_enabled'] = 'Aktivér automatiske svar på AI-billetter';
$lang['AdminMain.ai.field_auto_reply_enabled_desc'] = 'Giv AI mulighed for automatisk at svare på tickets, når den har en høj grad af sikkerhed for svaret.';
$lang['AdminMain.ai.field_confidence_threshold'] = 'Tærskelværdi for tillid';
$lang['AdminMain.ai.field_confidence_threshold_tooltip'] = 'AI svarer kun automatisk på billetter, når dens tillidsniveau opfylder eller overskrider denne tærskel. Højere værdier (90-100%) er mere konservative og sikre. Lavere værdier (60-89%) vil resultere i flere automatiske svar, men med større risiko for fejl.';
$lang['AdminMain.ai.field_confidence_threshold_desc'] = 'Højere tærskel = mere konservativ (færre automatiske svar, højere nøjagtighed). Anbefalet: 70% eller højere.';
$lang['AdminMain.ai.field_require_human_review'] = 'Kræv menneskelig gennemgang før afsendelse';
$lang['AdminMain.ai.field_require_human_review_desc'] = 'Automatisk genererede svar vises i billetten til brug for personalet (anbefales)';
$lang['AdminMain.ai.field_add_ai_disclaimer'] = 'Tilføj AI-genereret ansvarsfraskrivelse';
$lang['AdminMain.ai.field_add_ai_disclaimer_desc'] = 'Tilføj en meddelelse til automatisk genererede svar, der angiver, at de er skabt af AI (anbefales af hensyn til gennemsigtigheden)';
$lang['AdminMain.ai.field_custom_disclaimer'] = 'Brugerdefineret ansvarsfraskrivelsestekst';
$lang['AdminMain.ai.field_custom_disclaimer_tooltip'] = 'Tilpas den ansvarsfraskrivelsesmeddelelse, der tilføjes til AI-genererede svar. Lad feltet være tomt for at bruge standardmeddelelsen.';
$lang['AdminMain.ai.field_custom_disclaimer_desc'] = 'Denne tekst vil blive tilføjet til alle AI-genererede billetsvar.';
$lang['AdminMain.ai.field_custom_disclaimer_placeholder'] = 'Dette svar blev genereret med AI-assistance.';
$lang['AdminMain.ai.field_restricted_departments'] = 'Begræns automatisk svar til afdelinger';
$lang['AdminMain.ai.field_restricted_departments_tooltip'] = 'Tillad kun automatiske svar for bestemte billetafdelinger. Lad alle være uafkrydsede for at tillade alle afdelinger.';
$lang['AdminMain.ai.field_restricted_departments_desc'] = 'Vælg, hvilke billetafdelinger der kan modtage automatiske AI-svar. Fjern markeringen af alle for at tillade alle afdelinger.';
$lang['AdminMain.ai.field_assistant_name'] = 'AI-assistentens skærmnavn';
$lang['AdminMain.ai.field_assistant_name_tooltip'] = 'Det navn, der vises for AI-genererede svar i ticket-tråde. Dette gør AI-assistenten personlig for dit supportteam.';
$lang['AdminMain.ai.field_assistant_name_desc'] = 'Lad det være tomt for at bruge standardnavnet: "Support"';
$lang['AdminMain.ai.field_assistant_name_placeholder'] = 'Støtte';
$lang['AdminMain.ai.field_analyze_trigger'] = 'AI-analyse udløser';
$lang['AdminMain.ai.field_analyze_trigger_tooltip'] = 'Vælg, hvornår AI\'en skal analysere billetter for potentielle svar og brug af værktøjer. "Hvert svar" analyserer hver ny besked. "Ticket Opened" analyserer kun den første ticketåbning.';
$lang['AdminMain.ai.field_analyze_trigger_desc'] = 'Styrer, hvornår AI-analyse udløses for at generere svar og udføre værktøjer.';
$lang['AdminMain.ai.option_every_reply'] = 'Hvert svar';
$lang['AdminMain.ai.option_ticket_opened'] = 'Kun billet åbnet';
$lang['AdminMain.ai.field_max_queue_age_hours'] = 'Maksimal kø-alder (timer)';
$lang['AdminMain.ai.field_max_queue_age_hours_tooltip'] = 'Klientsvar i kø, der er ældre end denne værdi, vil blive kasseret af cron i stedet for at blive behandlet. Forhindrer AI i at svare på forældede billetter, hvis cron er blevet deaktiveret, og der er opbygget et efterslæb.';
$lang['AdminMain.ai.field_max_queue_age_hours_desc'] = 'Kassér AI-svar i kø, der er ældre end så mange timer. Skal være mellem 1 og 8760 (1 år). Standard er 24.';
$lang['AdminMain.ai.field_tools_enabled'] = 'Aktivér værktøjer';
$lang['AdminMain.ai.field_tools_enabled_desc'] = 'Giv AI mulighed for at bruge værktøjer til ticket management som f.eks. at ændre prioritet, lukke tickets eller tildele til medarbejdere.';
$lang['AdminMain.ai.field_tools_available'] = 'Tilgængelige værktøjer';
$lang['AdminMain.ai.field_tools_available_tooltip'] = 'Vælg, hvilke værktøjer AI\'en må bruge. Hvert værktøj muliggør specifikke handlinger, som AI\'en kan udføre, når den behandler billetter.';
$lang['AdminMain.ai.field_tool_change_priority'] = 'Ændring af billetprioritet';
$lang['AdminMain.ai.field_tool_change_priority_desc'] = 'Giv AI mulighed for at justere billetprioriteten (op eller ned), når en uhensigtsmæssig prioritet blev valgt af klienten eller opdaget ved analyse.';
$lang['AdminMain.ai.field_tool_close_ticket'] = 'Luk billet';
$lang['AdminMain.ai.field_tool_close_ticket_desc'] = 'Giv AI mulighed for at lukke tickets i tilfælde af spam, afviste beskeder eller klart løste problemer.';
$lang['AdminMain.ai.field_tool_assign_staff'] = 'Tildel til medarbejder';
$lang['AdminMain.ai.field_tool_assign_staff_desc'] = 'Giv AI mulighed for at tildele billetter til bestemte medarbejdere baseret på instruktioner fra systemet.';
$lang['AdminMain.ai.field_tool_instructions'] = 'Instruktioner for brug af værktøj';
$lang['AdminMain.ai.field_tool_instructions_tooltip'] = 'Giv specifik vejledning til AI om, hvornår og hvordan de aktiverede værktøjer skal bruges. Angiv f.eks. navne på medarbejdere og deres ekspertiseområder for tildeling af billetter.';
$lang['AdminMain.ai.field_tool_instructions_desc'] = 'Giv instruktioner og specifikke scenarier, hvor værktøjerne skal bruges. Denne tekst vil blive inkluderet i systemprompten, når værktøjerne er aktiveret.';
$lang['AdminMain.ai.field_tool_instructions_placeholder'] = 'Eksempel: - Tildel tekniske problemer relateret til Linux-servere til John, Windows-servere til Dave - Luk kun sager, der tydeligvis er spam, autosvar, eller hvor kunden angiver, at sagen er løst i det seneste svar - Øg prioriteten for hastesager, der nævner "nede" eller "offline", til nødstatus - Sænk prioriteten for nødssager, hvis de ikke er egentlige nødsituationer';
$lang['AdminMain.ai.field_submit'] = 'Gem AI-indstillinger';

