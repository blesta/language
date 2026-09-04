<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.nl_nl
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.!success.ai_settings_updated'] = 'De AI-instellingen zijn succesvol bijgewerkt.';
$lang['AdminMain.!success.settings_updated'] = 'De instellingen zijn succesvol bijgewerkt.';
$lang['AdminMain.ai.badge_experimental'] = 'EXPERIMENTEEL';
$lang['AdminMain.ai.boxtitle_settings'] = 'AI-instellingen';
$lang['AdminMain.ai.button_configure_ai'] = 'Ga naar Systeem AI-instellingen';
$lang['AdminMain.ai.field_add_ai_disclaimer'] = 'AI-gegenereerde disclaimer toevoegen';
$lang['AdminMain.ai.field_add_ai_disclaimer_desc'] = 'Voeg een melding toe aan automatisch gegenereerde antwoorden dat ze zijn gemaakt door AI (Aanbevolen voor transparantie)';
$lang['AdminMain.ai.field_analyze_trigger'] = 'AI-analyse Trigger';
$lang['AdminMain.ai.field_analyze_trigger_desc'] = 'Bepaalt wanneer AI-analyse wordt geactiveerd voor het genereren van reacties en het uitvoeren van tools.';
$lang['AdminMain.ai.field_analyze_trigger_tooltip'] = 'Kies wanneer de AI tickets moet analyseren voor mogelijke antwoorden en het gebruik van tools. "Every Reply" analyseert elk nieuw bericht. "Ticket geopend" analyseert alleen de eerste ticketopening.';
$lang['AdminMain.ai.field_assistant_name'] = 'AI-assistent Weergavenaam';
$lang['AdminMain.ai.field_assistant_name_desc'] = 'Laat leeg om de standaardnaam te gebruiken: "Support".';
$lang['AdminMain.ai.field_assistant_name_placeholder'] = 'Ondersteuning';
$lang['AdminMain.ai.field_assistant_name_tooltip'] = 'De naam die wordt getoond voor AI-gegenereerde antwoorden in ticket threads. Dit personaliseert de AI-assistent voor je supportteam.';
$lang['AdminMain.ai.field_auto_reply_enabled'] = 'Automatisch AI Ticket antwoorden inschakelen';
$lang['AdminMain.ai.field_auto_reply_enabled_desc'] = 'Laat AI automatisch antwoorden op tickets als het een hoge mate van zekerheid heeft over het antwoord.';
$lang['AdminMain.ai.field_confidence_threshold'] = 'Vertrouwensdrempel';
$lang['AdminMain.ai.field_confidence_threshold_desc'] = 'Hogere drempel = conservatiever (minder automatische antwoorden, hogere nauwkeurigheid). Aanbevolen: 70% of hoger.';
$lang['AdminMain.ai.field_confidence_threshold_tooltip'] = 'AI beantwoordt tickets alleen automatisch als het betrouwbaarheidsniveau deze drempelwaarde bereikt of overschrijdt. Hogere waarden (90-100%) zijn conservatiever en veiliger. Lagere waarden (60-89%) resulteren in meer automatische antwoorden, maar met een hoger risico op fouten.';
$lang['AdminMain.ai.field_custom_disclaimer'] = 'Aangepaste Disclaimer-tekst';
$lang['AdminMain.ai.field_custom_disclaimer_desc'] = 'Deze tekst wordt toegevoegd aan alle AI-gegenereerde ticketantwoorden.';
$lang['AdminMain.ai.field_custom_disclaimer_placeholder'] = 'Dit antwoord is gegenereerd met hulp van AI.';
$lang['AdminMain.ai.field_custom_disclaimer_tooltip'] = 'Pas het disclaimer bericht aan dat wordt toegevoegd aan AI-gegenereerde antwoorden. Laat leeg om het standaardbericht te gebruiken.';
$lang['AdminMain.ai.field_enabled'] = 'AI-functies inschakelen voor Support Manager';
$lang['AdminMain.ai.field_enabled_desc'] = 'Sta AI-functies toe in het ticketsysteem, zoals geautomatiseerde antwoorden, samenvattingen en tools.';
$lang['AdminMain.ai.field_max_queue_age_hours'] = 'Maximale wachtrijleeftijd (uur)';
$lang['AdminMain.ai.field_max_queue_age_hours_desc'] = 'Verwijder AI antwoorden die ouder zijn dan dit aantal uren. Moet tussen 1 en 8760 (1 jaar) liggen. Standaard 24.';
$lang['AdminMain.ai.field_max_queue_age_hours_tooltip'] = 'Antwoorden van cliënten die ouder zijn dan deze waarde worden door de cron genegeerd in plaats van verwerkt. Voorkomt dat de AI oude tickets beantwoordt als de cron is uitgeschakeld en er een achterstand is ontstaan.';
$lang['AdminMain.ai.field_max_tokens'] = 'Max aantal tokens';
$lang['AdminMain.ai.field_max_tokens_desc'] = 'Bepaalt de maximale lengte van AI-gegenereerde reacties. Standaard: 4000';
$lang['AdminMain.ai.field_max_tokens_tooltip'] = 'Maximum aantal tokens (woorden/woordstukken) dat de AI kan genereren in een enkel antwoord. Hogere waarden staan langere reacties toe, maar verbruiken meer bronnen. Typisch bereik: 100-4000 voor de meeste taken.';
$lang['AdminMain.ai.field_model'] = 'AI-model';
$lang['AdminMain.ai.field_model_desc'] = 'Dit model wordt gebruikt voor alle AI-functies in de Support Manager.';
$lang['AdminMain.ai.field_model_tooltip'] = 'Selecteer het AI-model dat je specifiek voor Support Manager-functies wilt gebruiken. Verschillende modellen hebben verschillende mogelijkheden en prijzen.';
$lang['AdminMain.ai.field_override_max_tokens'] = 'Max tokens overschrijven';
$lang['AdminMain.ai.field_override_max_tokens_desc'] = 'Standaard systeem: %1$s';
$lang['AdminMain.ai.field_override_model'] = 'Standaard AI-model opheffen';
$lang['AdminMain.ai.field_override_model_desc'] = 'Standaard systeem: %1$s';
$lang['AdminMain.ai.field_override_temperature'] = 'Temperatuur overschrijven';
$lang['AdminMain.ai.field_override_temperature_desc'] = 'Standaard systeem: %1$s';
$lang['AdminMain.ai.field_require_human_review'] = 'Menselijke beoordeling vereisen voor verzending';
$lang['AdminMain.ai.field_require_human_review_desc'] = 'Automatisch gegenereerde antwoorden worden weergegeven in het ticket voor gebruik door medewerkers (aanbevolen)';
$lang['AdminMain.ai.field_restricted_departments'] = 'Automatisch terugsturen naar afdelingen beperken';
$lang['AdminMain.ai.field_restricted_departments_desc'] = 'Selecteer welke ticketafdelingen automatische AI-reacties kunnen ontvangen. Vink Alles uit om alle afdelingen toe te staan.';
$lang['AdminMain.ai.field_restricted_departments_tooltip'] = 'Sta automatische antwoorden alleen toe voor specifieke ticketafdelingen. Laat alles uitgevinkt om alle afdelingen toe te staan.';
$lang['AdminMain.ai.field_submit'] = 'AI-instellingen opslaan';
$lang['AdminMain.ai.field_system_prompt'] = 'Support Manager Systeem Prompt';
$lang['AdminMain.ai.field_system_prompt_desc'] = 'Deze prompt wordt specifiek gebruikt voor Support Manager AI-functies en overschrijft de algemene systeemprompt.';
$lang['AdminMain.ai.field_system_prompt_tooltip'] = 'Definieer specifieke instructies voor de AI bij het afhandelen van support tickets. Deze prompt overschrijft de globale systeemprompt en definieert het gedrag van de AI specifiek binnen het ticketsysteem.';
$lang['AdminMain.ai.field_temperature'] = 'Temperatuur';
$lang['AdminMain.ai.field_temperature_desc'] = 'Lagere temperatuur = meer gefocust, hogere temperatuur = creatiever. Standaard: 1.0';
$lang['AdminMain.ai.field_temperature_tooltip'] = 'Regelt willekeur in reacties. Lagere waarden (0,0-0,7) produceren meer gerichte en deterministische resultaten. Hogere waarden (1,3-2,0) produceren creatievere en gevarieerdere resultaten. Bereik: 0,0 tot 2,0';
$lang['AdminMain.ai.field_tool_assign_staff'] = 'Toewijzen aan medewerker';
$lang['AdminMain.ai.field_tool_assign_staff_desc'] = 'Laat AI tickets toewijzen aan specifieke medewerkers op basis van instructies van het systeem.';
$lang['AdminMain.ai.field_tool_change_priority'] = 'Ticketprioriteit wijzigen';
$lang['AdminMain.ai.field_tool_change_priority_desc'] = 'AI toestaan om de prioriteit van een ticket aan te passen (omhoog of omlaag) wanneer een verkeerde prioriteit is geselecteerd door de klant of is gedetecteerd door analyse.';
$lang['AdminMain.ai.field_tool_close_ticket'] = 'Ticket sluiten';
$lang['AdminMain.ai.field_tool_close_ticket_desc'] = 'Sta AI toe om tickets te sluiten in geval van spam, bounced berichten of duidelijk opgeloste problemen.';
$lang['AdminMain.ai.field_tool_instructions'] = 'Gebruiksinstructies gereedschap';
$lang['AdminMain.ai.field_tool_instructions_desc'] = 'Geef instructies en specifieke scenario\'s voor het gebruik van tools. Deze tekst wordt opgenomen in de systeemprompt wanneer tools zijn ingeschakeld.';
$lang['AdminMain.ai.field_tool_instructions_placeholder'] = 'Voorbeeld: - Wijs technische problemen met betrekking tot Linux-servers toe aan John, Windows-servers aan Dave - Sluit alleen tickets die duidelijk spam zijn, auto-responses, of de klant geeft aan dat het ticket is opgelost in het laatste antwoord - Verhoog de prioriteit voor urgente problemen met de vermelding \'down\' of \'offline\' naar de status Noodgeval - Verlaag de prioriteit van tickets voor Noodgevallen als het geen echte noodgevallen zijn';
$lang['AdminMain.ai.field_tool_instructions_tooltip'] = 'Geef specifieke richtlijnen aan de AI over wanneer en hoe de ingeschakelde tools te gebruiken. Specificeer bijvoorbeeld namen van medewerkers en hun expertisegebieden voor het toewijzen van tickets.';
$lang['AdminMain.ai.field_tools_available'] = 'Beschikbare gereedschappen';
$lang['AdminMain.ai.field_tools_available_tooltip'] = 'Selecteer welke tools de AI mag gebruiken. Elke tool maakt specifieke acties mogelijk die de AI kan uitvoeren bij het verwerken van tickets.';
$lang['AdminMain.ai.field_tools_enabled'] = 'Gereedschap inschakelen';
$lang['AdminMain.ai.field_tools_enabled_desc'] = 'Sta AI toe om tools te gebruiken voor ticketbeheer, zoals het wijzigen van de prioriteit, het sluiten van tickets of het toewijzen aan medewerkers.';
$lang['AdminMain.ai.heading_experimental'] = 'Experimentele functies';
$lang['AdminMain.ai.heading_features'] = 'AI-functies';
$lang['AdminMain.ai.heading_model'] = 'Modelconfiguratie';
$lang['AdminMain.ai.heading_parameters'] = 'Modelparameters';
$lang['AdminMain.ai.heading_replies'] = 'Automatische antwoorden';
$lang['AdminMain.ai.heading_system_prompt'] = 'Systeem prompt';
$lang['AdminMain.ai.heading_tools'] = 'AI-tools';
$lang['AdminMain.ai.option_every_reply'] = 'Elke reactie';
$lang['AdminMain.ai.option_ticket_opened'] = 'Alleen ticket geopend';
$lang['AdminMain.ai.page_title'] = 'Support Manager &gt; AI-instellingen';
$lang['AdminMain.ai.warning_not_configured_text'] = 'AI-functies voor de Support Manager vereisen een Blesta AI API-sleutel. Configureer uw API-sleutel in Systeeminstellingen &gt; Kunstmatige intelligentie voordat u AI-functies inschakelt.';
$lang['AdminMain.ai.warning_not_configured_title'] = 'Blesta AI API-sleutel vereist';
$lang['AdminMain.settings.boxtitle_settings'] = 'Instellingen';
$lang['AdminMain.settings.field_avatar'] = 'Avatar';
$lang['AdminMain.settings.field_default_avatar'] = 'Standaard Avatar-afbeelding';
$lang['AdminMain.settings.field_submit'] = 'Instellingen bijwerken';
$lang['AdminMain.settings.heading_avatar_settings'] = 'Avatar-instellingen';
$lang['AdminMain.settings.option_default'] = 'Gebruik alleen aangepaste avatar';
$lang['AdminMain.settings.option_fallback'] = 'Gravatar gebruiken maar overschrijven als een aangepaste avatar is ingesteld';
$lang['AdminMain.settings.option_gravatar'] = 'Gravatar gebruiken';
$lang['AdminMain.settings.page_title'] = 'Support Manager &gt; Instellingen';
$lang['AdminMain.settings.text_avatar_recommendation'] = 'Aanbevolen: 150x150px, JPG of PNG, max 2MB';
$lang['AdminMain.settings.text_remove_avatar'] = 'Afbeelding verwijderen';

