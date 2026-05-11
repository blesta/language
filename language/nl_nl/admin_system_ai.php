<?php
/**
 * Admin System Ai
 *
 * @package blesta
 * @subpackage blesta.language.nl_nl
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemAi.!success.settings_updated'] = 'De AI-instellingen zijn succesvol bijgewerkt!';
$lang['AdminSystemAi.!success.api_key_fetched'] = 'API-sleutel succesvol opgehaald van uw Blesta account.';
$lang['AdminSystemAi.!error.connection_failed'] = 'Kan geen verbinding maken met AI API: %1$s';
$lang['AdminSystemAi.!error.invalid_request'] = 'Ongeldig verzoek.';
$lang['AdminSystemAi.!error.username_required'] = 'Voer uw account.blesta.com gebruikersnaam in.';
$lang['AdminSystemAi.!error.no_license_key'] = 'Geen Blesta licentiesleutel gevonden. Configureer eerst uw licentie.';
$lang['AdminSystemAi.!error.auth_failed'] = 'Authenticatie mislukt. Controleer je gebruikersnaam en licentiesleutel.';
$lang['AdminSystemAi.!error.request_failed'] = 'Aanvraag mislukt. Probeer het opnieuw.';
$lang['AdminSystemAi.!error.api_key_required'] = 'Voer een API-sleutel in.';
$lang['AdminSystemAi.!error.invalid_api_key'] = 'Ongeldige API-sleutel.';
$lang['AdminSystemAi.index.page_title'] = 'Instellingen &gt; Systeem &gt; AI';
$lang['AdminSystemAi.index.boxtitle_ai'] = 'AI-instellingen';
$lang['AdminSystemAi.index.field.ai_enabled'] = 'AI-functies inschakelen';
$lang['AdminSystemAi.index.field.ai_api_key'] = 'API-sleutel';
$lang['AdminSystemAi.index.field.ai_default_model'] = 'Standaardmodel';
$lang['AdminSystemAi.index.field.ai_temperature'] = 'Temperatuur';
$lang['AdminSystemAi.index.field.ai_max_tokens'] = 'Max aantal tokens';
$lang['AdminSystemAi.index.field.submit'] = 'Instellingen bijwerken';
$lang['AdminSystemAi.index.tooltip.ai_enabled'] = 'AI-functies in het hele systeem in- of uitschakelen.';
$lang['AdminSystemAi.index.tooltip.ai_api_key'] = 'Uw Blesta AI API-sleutel. Deze kunt u verkrijgen via account.blesta.com.';
$lang['AdminSystemAi.index.tooltip.ai_default_model'] = 'Het standaard AI-model om te gebruiken voor chataanvullingen.';
$lang['AdminSystemAi.index.tooltip.ai_temperature'] = 'Regelt willekeur. Lagere waarden zijn deterministischer, hogere waarden zijn creatiever. Bereik: 0,0 tot 2,0';
$lang['AdminSystemAi.index.tooltip.ai_max_tokens'] = 'Maximum aantal tokens om te genereren in antwoorden.';
$lang['AdminSystemAi.index.text_connected'] = 'Succesvol verbonden met Blesta AI.';
$lang['AdminSystemAi.index.text_connection_error'] = 'Verbinding met Blesta AI mislukt. Controleer uw API-sleutel.';
$lang['AdminSystemAi.index.text_balance'] = 'Saldo: %1$s %2$s';
$lang['AdminSystemAi.index.text_temperature_range'] = '(0.0 - 2.0)';
$lang['AdminSystemAi.index.text_fetch_key'] = 'Ophalen bij mijn Blesta account';
$lang['AdminSystemAi.index.text_manual_entry'] = 'Voer je API-sleutel handmatig in of haal deze automatisch op uit je account.';
$lang['AdminSystemAi.index.text_validating'] = 'Valideren...';
$lang['AdminSystemAi.index.text_key_valid'] = 'API-sleutel gevalideerd en opgeslagen';
$lang['AdminSystemAi.index.text_select_model'] = 'Selecteer een model';
$lang['AdminSystemAi.index.text_api_status'] = 'API-status';
$lang['AdminSystemAi.index.text_status_active'] = 'Actief';
$lang['AdminSystemAi.index.text_remaining_credits'] = 'Resterende kredieten';
$lang['AdminSystemAi.index.text_credits_used'] = 'Gebruikte credits (deze maand)';
$lang['AdminSystemAi.index.text_last_api_call'] = 'Laatste API-oproep';
$lang['AdminSystemAi.index.text_no_calls_yet'] = 'Nog geen oproepen';
$lang['AdminSystemAi.modal.heading_fetch'] = 'Ophalen uit mijn Blesta account';
$lang['AdminSystemAi.modal.text_subtitle'] = 'Je gebruikersnaam is nodig om je API-sleutel op te halen';
$lang['AdminSystemAi.modal.text_info'] = 'Uw account.blesta.com gebruikersnaam en uw Blesta licentiesleutel worden gebruikt om uw licentie te valideren en automatisch een nieuwe Blesta AI API sleutel op te halen. Als er al een sleutel is gegenereerd, wordt deze ingetrokken en wordt er een nieuwe sleutel uitgegeven.';
$lang['AdminSystemAi.modal.field.username'] = 'Gebruikersnaam';
$lang['AdminSystemAi.modal.field.username_placeholder'] = 'Voer de gebruikersnaam van je account in';
$lang['AdminSystemAi.modal.button.authenticate'] = 'Authenticeren';
$lang['AdminSystemAi.modal.button.cancel'] = 'Annuleren';
$lang['AdminSystemAi.modal.text_authenticating'] = 'Authenticeren...';
$lang['AdminSystemAi.index.heading_api'] = 'API-configuratie';
$lang['AdminSystemAi.index.heading_model'] = 'Standaardmodel';
$lang['AdminSystemAi.index.heading_parameters'] = 'Modelparameters';
$lang['AdminSystemAi.index.heading_prompts'] = 'Systeemherinneringen';
$lang['AdminSystemAi.index.heading_features'] = 'Ingeschakelde functies';
$lang['AdminSystemAi.index.field.ai_global_prompt'] = 'Wereldwijde systeemprompt (standaard)';
$lang['AdminSystemAi.index.tooltip.ai_global_prompt'] = 'De standaard instructies die bij elke aanvraag naar het AI-model worden gestuurd. Dit bepaalt het gedrag en de context van de AI voor alle functies.';
$lang['AdminSystemAi.index.text_global_prompt_help'] = 'Deze prompt is van toepassing op alle AI-functies, tenzij deze binnen de functie wordt uitgeschakeld.';
$lang['AdminSystemAi.index.field.ai_feature_package_descriptions'] = 'Pakketomschrijvingen';
$lang['AdminSystemAi.index.text_feature_package_descriptions'] = 'Boeiende product- en dienstbeschrijvingen maken';
$lang['AdminSystemAi.index.field.ai_feature_email_templates'] = 'E-mail sjablonen';
$lang['AdminSystemAi.index.text_feature_email_templates'] = 'AI-ondersteunde bewerkingen en verbeteringen van e-mailsjablonen';
$lang['AdminSystemAi.index.field.ai_feature_chatbot'] = 'Chatbot';
$lang['AdminSystemAi.index.text_feature_chatbot'] = 'AI-gestuurde chatbot voor hulp aan personeel';
$lang['AdminSystemAi.index.field.ai_chatbot_staff_groups'] = 'Toegang Personeelsgroep';
$lang['AdminSystemAi.index.tooltip.ai_chatbot_staff_groups'] = 'Selecteer welke personeelsgroepen toegang hebben tot de AI-chatbot. Je kunt meerdere groepen selecteren.';
$lang['AdminSystemAi.index.text_staff_groups_help'] = 'Houd Ctrl (Cmd op Mac) ingedrukt om meerdere groepen te selecteren.';
$lang['AdminSystemAi.index.text_features_intro'] = 'Selecteer voor welke Blesta-kernfuncties AI-assistentie moet zijn ingeschakeld. Plugins hebben toegang tot AI-functies en worden onafhankelijk geconfigureerd.';
$lang['AdminSystemAi.index.heading_beta'] = 'Bèta Kenmerken';
$lang['AdminSystemAi.index.text_beta_notice'] = 'Deze functie is momenteel in bèta en kan onverwachte of onnauwkeurige resultaten opleveren. Gebruik deze functie met discretie.';
$lang['AdminSystemAi.index.heading_privacy'] = 'Privacyverklaring';
$lang['AdminSystemAi.index.text_privacy_notice'] = 'Verzoeken worden voor verwerking naar externe AI-providers gestuurd (bijv. OpenAI, Anthropic). De Blesta AI-service slaat geen AI-gespreksgegevens op; wij hebben echter geen controle over hoe deze aanbieders omgaan met gegevens of deze bewaren. Vermijd het indienen van gevoelige of vertrouwelijke informatie.';
$lang['AdminSystemAi.index.heading_privacy_acknowledgment'] = 'Privacyverklaring';
$lang['AdminSystemAi.index.field.ai_privacy_acknowledged'] = 'Ik heb de bovenstaande privacyverklaring gelezen en begrepen.';
$lang['AdminSystemAi.index.text_privacy_last_acknowledged'] = 'Laatst erkend op %1$s.';
$lang['AdminSystemAi.!error.privacy_not_acknowledged'] = 'U moet akkoord gaan met de privacyverklaring voordat u deze opslaat.';
$lang['AdminSystemAi.index.heading_email_context'] = 'Instellingen context e-mailsjabloon';
$lang['AdminSystemAi.index.field.ai_email_context_depth'] = 'Relatie Diepte';
$lang['AdminSystemAi.index.tooltip.ai_email_context_depth'] = 'Maximale diepte voor het doorlopen van modelrelaties. Hogere waarden bevatten meer gerelateerde gegevens, maar verhogen het gebruik van tokens. Bereik: 1-5.';
$lang['AdminSystemAi.index.text_email_context_depth'] = 'Bepaalt hoe diep relaties moeten worden gevolgd (bijv. factuur → klant → contactpersonen). Standaard: 2';
$lang['AdminSystemAi.index.field.ai_email_context_schemas'] = 'Schemadefinities opnemen';
$lang['AdminSystemAi.index.text_email_context_schemas'] = 'Neem veldtype-informatie en databaseschema\'s op in de context.';
$lang['AdminSystemAi.index.field.ai_email_context_examples'] = 'Voorbeeldgegevens opnemen';
$lang['AdminSystemAi.index.text_email_context_examples'] = 'Voeg voorbeeldgegevens toe om de AI te helpen de gegevensindeling en -structuur te begrijpen.';

