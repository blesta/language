<?php
/**
 * Admin System Ai
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemAi.!error.api_key_required'] = 'Indtast venligst en API-nøgle.';
$lang['AdminSystemAi.!error.auth_failed'] = 'Godkendelse mislykkedes. Tjek venligst dit brugernavn og din licensnøgle.';
$lang['AdminSystemAi.!error.connection_failed'] = 'Kunne ikke oprette forbindelse til AI API: %1$s';
$lang['AdminSystemAi.!error.invalid_api_key'] = 'Ugyldig API-nøgle.';
$lang['AdminSystemAi.!error.invalid_request'] = 'Ugyldig anmodning.';
$lang['AdminSystemAi.!error.key_already_exists'] = 'Der er allerede genereret en API-nøgle til dit Blesta AI-abonnement, og den kan ikke hentes igen. Du bedes tilbagekalde den eksisterende nøgle på siden »Administrer AI« for din tjeneste på account.blesta.com og derefter prøve igen.';
$lang['AdminSystemAi.!error.no_license_key'] = 'Ingen Blesta-licensnøgle fundet. Konfigurer venligst din licens først.';
$lang['AdminSystemAi.!error.privacy_not_acknowledged'] = 'Du skal acceptere meddelelsen om beskyttelse af personlige oplysninger, før du gemmer.';
$lang['AdminSystemAi.!error.request_failed'] = 'Anmodning mislykkedes. Prøv venligst igen.';
$lang['AdminSystemAi.!error.username_required'] = 'Indtast venligst dit brugernavn på account.blesta.com.';
$lang['AdminSystemAi.!success.api_key_fetched'] = 'API-nøgle hentet fra din Blesta-konto.';
$lang['AdminSystemAi.!success.settings_updated'] = 'AI-indstillingerne blev opdateret med succes!';
$lang['AdminSystemAi.index.boxtitle_ai'] = 'AI-indstillinger';
$lang['AdminSystemAi.index.degraded_model'] = 'Den aktuelt valgte model »%1$s « er ikke længere tilgængelig. AI-funktionerne bruger midlertidigt »%2$s «. Vælg venligst en ny standardmodel nedenfor, og gem.';
$lang['AdminSystemAi.index.field.ai_api_key'] = 'API-nøgle';
$lang['AdminSystemAi.index.field.ai_chatbot_staff_groups'] = 'Adgang for personalegrupper';
$lang['AdminSystemAi.index.field.ai_default_model'] = 'Standardmodel';
$lang['AdminSystemAi.index.field.ai_email_context_depth'] = 'Relationens dybde';
$lang['AdminSystemAi.index.field.ai_email_context_examples'] = 'Inkluder eksempler på data';
$lang['AdminSystemAi.index.field.ai_email_context_schemas'] = 'Inkluder skemadefinitioner';
$lang['AdminSystemAi.index.field.ai_enabled'] = 'Aktivér AI-funktioner';
$lang['AdminSystemAi.index.field.ai_feature_chatbot'] = 'Chatbot';
$lang['AdminSystemAi.index.field.ai_feature_email_templates'] = 'E-mail-skabeloner';
$lang['AdminSystemAi.index.field.ai_feature_package_descriptions'] = 'Pakkebeskrivelser';
$lang['AdminSystemAi.index.field.ai_global_prompt'] = 'Global system-prompt (standard)';
$lang['AdminSystemAi.index.field.ai_max_tokens'] = 'Max Tokens';
$lang['AdminSystemAi.index.field.ai_privacy_acknowledged'] = 'Jeg har læst og forstået ovenstående meddelelse om beskyttelse af personlige oplysninger.';
$lang['AdminSystemAi.index.field.ai_temperature'] = 'Temperatur';
$lang['AdminSystemAi.index.field.submit'] = 'Opdater indstillinger';
$lang['AdminSystemAi.index.heading_api'] = 'API-konfiguration';
$lang['AdminSystemAi.index.heading_beta'] = 'Meddelelse om betafunktion';
$lang['AdminSystemAi.index.heading_email_context'] = 'Indstillinger for e-mail-skabelonkontekst';
$lang['AdminSystemAi.index.heading_features'] = 'Aktiverede funktioner';
$lang['AdminSystemAi.index.heading_model'] = 'Standardmodel';
$lang['AdminSystemAi.index.heading_parameters'] = 'Modelparametre';
$lang['AdminSystemAi.index.heading_privacy'] = 'Meddelelse om beskyttelse af personlige oplysninger';
$lang['AdminSystemAi.index.heading_privacy_acknowledgment'] = 'Bekræftelse af privatlivets fred';
$lang['AdminSystemAi.index.heading_prompts'] = 'Systemprompter';
$lang['AdminSystemAi.index.model_pricing'] = '(%1$s / %2$s -kreditter pr. 1.000 tokens)';
$lang['AdminSystemAi.index.model_recommended'] = '(Anbefalet)';
$lang['AdminSystemAi.index.page_title'] = 'Indstillinger &gt; System &gt; AI';
$lang['AdminSystemAi.index.text_api_status'] = 'API-status';
$lang['AdminSystemAi.index.text_balance'] = 'Saldo: %1$s %2$s';
$lang['AdminSystemAi.index.text_beta_notice'] = 'Denne funktion er i øjeblikket i beta og kan give uventede eller unøjagtige resultater. Brug den med omtanke.';
$lang['AdminSystemAi.index.text_connected'] = 'Vellykket forbindelse til Blesta AI.';
$lang['AdminSystemAi.index.text_connection_error'] = 'Kunne ikke oprette forbindelse til Blesta AI. Tjek din API-nøgle.';
$lang['AdminSystemAi.index.text_credits_used'] = 'Brugte kreditter (denne måned)';
$lang['AdminSystemAi.index.text_email_context_depth'] = 'Styrer, hvor dybt relationer skal følges (f.eks. faktura → kunde → kontakter). Standard: 2';
$lang['AdminSystemAi.index.text_email_context_examples'] = 'Inkluder eksempler på dataværdier for at hjælpe AI\'en med at forstå dataformater og -struktur.';
$lang['AdminSystemAi.index.text_email_context_schemas'] = 'Inkluder oplysninger om felttype og databaseskemaer i konteksten.';
$lang['AdminSystemAi.index.text_feature_chatbot'] = 'AI-drevet chatbot til hjælp for personalet';
$lang['AdminSystemAi.index.text_feature_email_templates'] = 'AI-assisterede redigeringer og forbedringer af e-mail-skabeloner';
$lang['AdminSystemAi.index.text_feature_package_descriptions'] = 'Skab overbevisende produkt- og servicebeskrivelser';
$lang['AdminSystemAi.index.text_features_intro'] = 'Vælg, hvilke kernefunktioner i Blesta der skal have AI-assistance aktiveret. Plugins kan få adgang til AI-funktioner og konfigureres uafhængigt.';
$lang['AdminSystemAi.index.text_fetch_key'] = 'Hent fra min Blesta-konto';
$lang['AdminSystemAi.index.text_global_prompt_help'] = 'Denne prompt gælder for alle AI-funktioner, medmindre den tilsidesættes i funktionen.';
$lang['AdminSystemAi.index.text_key_valid'] = 'API-nøgle valideret og gemt';
$lang['AdminSystemAi.index.text_last_api_call'] = 'Sidste API-kald';
$lang['AdminSystemAi.index.text_manual_entry'] = 'Indtast din API-nøgle manuelt, eller hent den automatisk fra din konto.';
$lang['AdminSystemAi.index.text_no_calls_yet'] = 'Ingen opkald endnu';
$lang['AdminSystemAi.index.text_privacy_last_acknowledged'] = 'Sidst bekræftet på %1$s.';
$lang['AdminSystemAi.index.text_privacy_notice'] = 'Anmodninger sendes til tredjeparts AI-udbydere (f.eks. OpenAI, Anthropic) til behandling. Blesta AI-tjenesten gemmer ikke AI-samtaledata; vi kontrollerer dog ikke, hvordan disse udbydere håndterer eller opbevarer data. Undgå at indsende følsomme eller fortrolige oplysninger.';
$lang['AdminSystemAi.index.text_remaining_credits'] = 'Resterende kreditter';
$lang['AdminSystemAi.index.text_select_model'] = 'Vælg en model';
$lang['AdminSystemAi.index.text_staff_groups_help'] = 'Hold Ctrl (Cmd på Mac) nede for at vælge flere grupper.';
$lang['AdminSystemAi.index.text_status_active'] = 'Aktiv';
$lang['AdminSystemAi.index.text_temperature_range'] = '(0.0 - 2.0)';
$lang['AdminSystemAi.index.text_validating'] = 'Validering...';
$lang['AdminSystemAi.index.tooltip.ai_api_key'] = 'Din Blesta AI API-nøgle. Få den fra account.blesta.com.';
$lang['AdminSystemAi.index.tooltip.ai_chatbot_staff_groups'] = 'Vælg, hvilke personalegrupper der kan få adgang til AI-chatbotten. Der kan vælges flere grupper.';
$lang['AdminSystemAi.index.tooltip.ai_default_model'] = 'Den standard AI-model, der skal bruges til chatafslutninger.';
$lang['AdminSystemAi.index.tooltip.ai_email_context_depth'] = 'Maksimal dybde for gennemgang af modelrelationer. Højere værdier inkluderer flere relaterede data, men øger brugen af token. Område: 1-5.';
$lang['AdminSystemAi.index.tooltip.ai_enabled'] = 'Aktiver eller deaktiver AI-funktioner i hele systemet.';
$lang['AdminSystemAi.index.tooltip.ai_global_prompt'] = 'Standardinstruktionerne, der sendes til AI-modellen med hver anmodning. Dette definerer AI\'ens adfærd og kontekst på tværs af alle funktioner.';
$lang['AdminSystemAi.index.tooltip.ai_max_tokens'] = 'Maksimalt antal tokens, der skal genereres i svar.';
$lang['AdminSystemAi.index.tooltip.ai_temperature'] = 'Styrer tilfældighed. Lavere værdier er mere deterministiske, højere værdier er mere kreative. Område: 0,0 til 2,0';
$lang['AdminSystemAi.modal.button.authenticate'] = 'Godkend';
$lang['AdminSystemAi.modal.button.cancel'] = 'Annuller';
$lang['AdminSystemAi.modal.field.username'] = 'Brugernavn';
$lang['AdminSystemAi.modal.field.username_placeholder'] = 'Indtast dit brugernavn på kontoen';
$lang['AdminSystemAi.modal.heading_fetch'] = 'Hent fra min Blesta-konto';
$lang['AdminSystemAi.modal.text_authenticating'] = 'Autentificering...';
$lang['AdminSystemAi.modal.text_info'] = 'Dit brugernavn på account.blesta.com og din Blesta-licensnøgle vil blive brugt til at validere din licens og automatisk hente en ny Blesta AI-API-nøgle. Hvis der allerede er genereret en nøgle, skal denne først tilbagekaldes på siden »Administrer AI« for din tjeneste på account.blesta.com, før der kan udstedes en ny nøgle.';
$lang['AdminSystemAi.modal.text_subtitle'] = 'Dit brugernavn er nødvendigt for at hente din API-nøgle';

