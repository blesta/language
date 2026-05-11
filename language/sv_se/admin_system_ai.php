<?php
/**
 * Admin System Ai
 *
 * @package blesta
 * @subpackage blesta.language.sv_se
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemAi.!success.settings_updated'] = 'AI-inställningarna har uppdaterats framgångsrikt!';
$lang['AdminSystemAi.!success.api_key_fetched'] = 'API-nyckel framgångsrikt hämtad från ditt Blesta-konto.';
$lang['AdminSystemAi.!error.connection_failed'] = 'Det gick inte att ansluta till AI API: %1$s';
$lang['AdminSystemAi.!error.invalid_request'] = 'Ogiltig begäran.';
$lang['AdminSystemAi.!error.username_required'] = 'Vänligen ange ditt användarnamn för account.blesta.com.';
$lang['AdminSystemAi.!error.no_license_key'] = 'Ingen Blesta-licensnyckel hittades. Vänligen konfigurera din licens först.';
$lang['AdminSystemAi.!error.auth_failed'] = 'Autentiseringen misslyckades. Kontrollera ditt användarnamn och din licensnyckel.';
$lang['AdminSystemAi.!error.request_failed'] = 'Begäran misslyckades. Vänligen försök igen.';
$lang['AdminSystemAi.!error.api_key_required'] = 'Vänligen ange en API-nyckel.';
$lang['AdminSystemAi.!error.invalid_api_key'] = 'Ogiltig API-nyckel.';
$lang['AdminSystemAi.index.page_title'] = 'Inställningar &gt; System &gt; AI';
$lang['AdminSystemAi.index.boxtitle_ai'] = 'AI-inställningar';
$lang['AdminSystemAi.index.field.ai_enabled'] = 'Aktivera AI-funktioner';
$lang['AdminSystemAi.index.field.ai_api_key'] = 'API-nyckel';
$lang['AdminSystemAi.index.field.ai_default_model'] = 'Standardmodell';
$lang['AdminSystemAi.index.field.ai_temperature'] = 'Temperatur';
$lang['AdminSystemAi.index.field.ai_max_tokens'] = 'Max Tokens';
$lang['AdminSystemAi.index.field.submit'] = 'Uppdatera inställningar';
$lang['AdminSystemAi.index.tooltip.ai_enabled'] = 'Aktivera eller inaktivera AI-funktioner i hela systemet.';
$lang['AdminSystemAi.index.tooltip.ai_api_key'] = 'Din Blesta AI API-nyckel. Hämta denna från account.blesta.com.';
$lang['AdminSystemAi.index.tooltip.ai_default_model'] = 'Standard AI-modell som ska användas för att slutföra chattar.';
$lang['AdminSystemAi.index.tooltip.ai_temperature'] = 'Styr slumpmässigheten. Lägre värden är mer deterministiska, högre värden är mer kreativa. Intervall: 0,0 till 2,0';
$lang['AdminSystemAi.index.tooltip.ai_max_tokens'] = 'Maximalt antal tokens som ska genereras i svaren.';
$lang['AdminSystemAi.index.text_connected'] = 'Framgångsrik anslutning till Blesta AI.';
$lang['AdminSystemAi.index.text_connection_error'] = 'Misslyckades med att ansluta till Blesta AI. Kontrollera din API-nyckel.';
$lang['AdminSystemAi.index.text_balance'] = 'Balans: %1$s %2$s';
$lang['AdminSystemAi.index.text_temperature_range'] = '(0.0 - 2.0)';
$lang['AdminSystemAi.index.text_fetch_key'] = 'Hämta från mitt Blesta-konto';
$lang['AdminSystemAi.index.text_manual_entry'] = 'Ange din API-nyckel manuellt eller hämta den automatiskt från ditt konto.';
$lang['AdminSystemAi.index.text_validating'] = 'Validerar...';
$lang['AdminSystemAi.index.text_key_valid'] = 'API-nyckel validerad och sparad';
$lang['AdminSystemAi.index.text_select_model'] = 'Välj en modell';
$lang['AdminSystemAi.index.text_api_status'] = 'API-status';
$lang['AdminSystemAi.index.text_status_active'] = 'Aktiv';
$lang['AdminSystemAi.index.text_remaining_credits'] = 'Återstående krediter';
$lang['AdminSystemAi.index.text_credits_used'] = 'Utnyttjade krediter (denna månad)';
$lang['AdminSystemAi.index.text_last_api_call'] = 'Senaste API-anrop';
$lang['AdminSystemAi.index.text_no_calls_yet'] = 'Inga samtal ännu';
$lang['AdminSystemAi.modal.heading_fetch'] = 'Hämta från mitt Blesta-konto';
$lang['AdminSystemAi.modal.text_subtitle'] = 'Ditt användarnamn krävs för att hämta din API-nyckel';
$lang['AdminSystemAi.modal.text_info'] = 'Ditt account.blesta.com användarnamn och din Blesta licensnyckel kommer att användas för att validera din licens och automatiskt hämta en ny Blesta AI API-nyckel. Om en nyckel redan har genererats kommer den att återkallas och en ny nyckel kommer att utfärdas.';
$lang['AdminSystemAi.modal.field.username'] = 'Användarnamn';
$lang['AdminSystemAi.modal.field.username_placeholder'] = 'Ange ditt användarnamn för kontot';
$lang['AdminSystemAi.modal.button.authenticate'] = 'Autentisera';
$lang['AdminSystemAi.modal.button.cancel'] = 'Avbryt';
$lang['AdminSystemAi.modal.text_authenticating'] = 'Autentiserar...';
$lang['AdminSystemAi.index.heading_api'] = 'API-konfiguration';
$lang['AdminSystemAi.index.heading_model'] = 'Standardmodell';
$lang['AdminSystemAi.index.heading_parameters'] = 'Modell Parametrar';
$lang['AdminSystemAi.index.heading_prompts'] = 'Systemets uppmaningar';
$lang['AdminSystemAi.index.heading_features'] = 'Aktiverade funktioner';
$lang['AdminSystemAi.index.field.ai_global_prompt'] = 'Global systemprompt (standard)';
$lang['AdminSystemAi.index.tooltip.ai_global_prompt'] = 'Standardinstruktionerna som skickas till AI-modellen med varje begäran. Detta definierar AI:ns beteende och sammanhang i alla funktioner.';
$lang['AdminSystemAi.index.text_global_prompt_help'] = 'Denna prompt gäller för alla AI-funktioner om den inte åsidosätts inom funktionen.';
$lang['AdminSystemAi.index.field.ai_feature_package_descriptions'] = 'Paketbeskrivningar';
$lang['AdminSystemAi.index.text_feature_package_descriptions'] = 'Skapa övertygande produkt- och tjänstebeskrivningar';
$lang['AdminSystemAi.index.field.ai_feature_email_templates'] = 'Mallar för e-post';
$lang['AdminSystemAi.index.text_feature_email_templates'] = 'AI-assisterade redigeringar och förbättringar av e-postmallar';
$lang['AdminSystemAi.index.field.ai_feature_chatbot'] = 'Chatbot';
$lang['AdminSystemAi.index.text_feature_chatbot'] = 'AI-driven chatbot för personalassistans';
$lang['AdminSystemAi.index.field.ai_chatbot_staff_groups'] = 'Tillgång till personalgrupp';
$lang['AdminSystemAi.index.tooltip.ai_chatbot_staff_groups'] = 'Välj vilka personalgrupper som ska ha tillgång till AI-chatboten. Flera grupper kan väljas.';
$lang['AdminSystemAi.index.text_staff_groups_help'] = 'Håll in Ctrl (Cmd på Mac) för att markera flera grupper.';
$lang['AdminSystemAi.index.text_features_intro'] = 'Välj vilka Blesta-kärnfunktioner som ska ha AI-assistans aktiverad. Plugins kan få tillgång till AI-funktioner och konfigureras oberoende av varandra.';
$lang['AdminSystemAi.index.heading_beta'] = 'Meddelande om beta-funktion';
$lang['AdminSystemAi.index.text_beta_notice'] = 'Denna funktion är för närvarande i betaversion och kan ge oväntade eller felaktiga resultat. Använd med omdöme.';
$lang['AdminSystemAi.index.heading_privacy'] = 'Meddelande om integritet';
$lang['AdminSystemAi.index.text_privacy_notice'] = 'Förfrågningar skickas till tredjepartsleverantörer av AI (t.ex. OpenAI, Anthropic) för bearbetning. Blesta AI-tjänst lagrar inte AI-konversationsdata; vi kontrollerar dock inte hur dessa leverantörer hanterar eller behåller data. Undvik att skicka känslig eller konfidentiell information.';
$lang['AdminSystemAi.index.heading_privacy_acknowledgment'] = 'Bekräftelse av sekretess';
$lang['AdminSystemAi.index.field.ai_privacy_acknowledged'] = 'Jag har läst och förstått sekretessmeddelandet ovan.';
$lang['AdminSystemAi.index.text_privacy_last_acknowledged'] = 'Senast bekräftad på %1$s.';
$lang['AdminSystemAi.!error.privacy_not_acknowledged'] = 'Du måste godkänna sekretesspolicyn innan du sparar.';
$lang['AdminSystemAi.index.heading_email_context'] = 'Inställningar för kontext för e-postmall';
$lang['AdminSystemAi.index.field.ai_email_context_depth'] = 'Relationens djup';
$lang['AdminSystemAi.index.tooltip.ai_email_context_depth'] = 'Maximalt djup för genomgång av modellrelationer. Högre värden inkluderar mer relaterad data men ökar användningen av token. Intervall: 1-5.';
$lang['AdminSystemAi.index.text_email_context_depth'] = 'Styr hur djupt relationer ska följas (t.ex. faktura → kund → kontakter). Standard: 2';
$lang['AdminSystemAi.index.field.ai_email_context_schemas'] = 'Inkludera schemadefinitioner';
$lang['AdminSystemAi.index.text_email_context_schemas'] = 'Inkludera information om fälttyp och databasscheman i sammanhanget.';
$lang['AdminSystemAi.index.field.ai_email_context_examples'] = 'Inkludera exempeldata';
$lang['AdminSystemAi.index.text_email_context_examples'] = 'Inkludera exempel på datavärden för att hjälpa AI att förstå dataformat och -struktur.';

