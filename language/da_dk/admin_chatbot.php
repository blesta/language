<?php
/**
 * Admin Chatbot
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminChatbot.index.time_yesterday'] = 'I går';
$lang['AdminChatbot.index.time_today'] = 'I dag';
$lang['AdminChatbot.index.time_hours_ago'] = '%1$s time siden';
$lang['AdminChatbot.index.time_minutes_ago'] = '%1$s min siden';
$lang['AdminChatbot.index.time_just_now'] = 'Lige nu';
$lang['AdminChatbot.index.confirm_delete'] = 'Er du sikker på, at du vil slette denne samtale?';
$lang['AdminChatbot.index.btn_delete'] = 'Sletning';
$lang['AdminChatbot.!error.model_empty'] = 'Vælg venligst en model, før du sender en besked.';
$lang['AdminChatbot.!error.conversation_create_failed'] = 'Det lykkedes ikke at oprette en samtale. Prøv venligst igen.';
$lang['AdminChatbot.!error.stream_failed'] = 'Det lykkedes ikke at få et svar fra AI\'en. Prøv venligst igen.';
$lang['AdminChatbot.!error.message_empty'] = 'Indtast venligst en besked.';
$lang['AdminChatbot.!error.conversation_not_found'] = 'Samtale ikke fundet.';
$lang['AdminChatbot.!error.unauthorized'] = 'Du er ikke autoriseret til at udføre denne handling.';
$lang['AdminChatbot.index.btn_go_back'] = 'Gå tilbage';
$lang['AdminChatbot.index.no_permission_text'] = 'Du har ikke tilladelse til at bruge AI-chatbotten. Kontakt venligst din administrator for at anmode om adgang.';
$lang['AdminChatbot.index.no_permission_title'] = 'Adgangsbegrænsning';
$lang['AdminChatbot.index.btn_configure'] = 'Konfigurer AI';
$lang['AdminChatbot.index.not_configured_text'] = 'AI-chatbotten er ikke blevet konfigureret endnu. Konfigurer venligst AI-indstillingerne for at begynde at bruge denne funktion.';
$lang['AdminChatbot.index.not_configured_title'] = 'AI ikke konfigureret';
$lang['AdminChatbot.index.truncated_notice'] = 'Dette svar blev afkortet på grund af token-grænser. Du kan øge Max Tokens under Indstillinger &gt; System &gt; AI eller bede AI\'en om at fortsætte.';
$lang['AdminChatbot.index.card_badge_prompt_mode'] = 'Prompt-tilstand';
$lang['AdminChatbot.index.context_pill_dismiss'] = 'Annuller';
$lang['AdminChatbot.index.suggestion_plugin_dev_placeholder'] = 'Hvad er det, du bygger?';
$lang['AdminChatbot.index.suggestion_plugin_dev_text'] = 'Få hjælp til at bygge et plugin eller modul';
$lang['AdminChatbot.index.suggestion_plugin_dev_title'] = 'Hjælp til udviklere';
$lang['AdminChatbot.index.suggestion_api_query_placeholder'] = 'Hvad vil du gøre via API\'et?';
$lang['AdminChatbot.index.suggestion_api_query_text'] = 'Få hjælp til at skrive Blesta API-anmodninger';
$lang['AdminChatbot.index.suggestion_api_query_title'] = 'API-forespørgsel';
$lang['AdminChatbot.index.suggestion_custom_report_placeholder'] = 'Beskriv den rapport, du har brug for...';
$lang['AdminChatbot.index.suggestion_custom_report_text'] = 'Generer en SQL-forespørgsel til en brugerdefineret rapport';
$lang['AdminChatbot.index.suggestion_custom_report_title'] = 'Brugerdefineret rapport';
$lang['AdminChatbot.index.suggestion_security_context'] = 'Brugeren spørger om bedste praksis for sikkerhed. Dæk medarbejdertilladelser og gruppebaseret adgangskontrol, opsætning af to-faktor-autentificering, stærke adgangskodepolitikker, opdatering af Blesta, SSL/TLS-konfiguration, IP-baserede login-begrænsninger og adgang til logfiler (Værktøjer &gt; Logfiler). Nævn ændring af administratorens standardrute i /config/routes.php via Route.admin';
$lang['AdminChatbot.index.suggestion_security_text'] = 'Hvilken bedste sikkerhedspraksis skal jeg følge?';
$lang['AdminChatbot.index.suggestion_security_title'] = 'Sikkerhed';
$lang['AdminChatbot.index.suggestion_clients_context'] = 'Brugeren spørger om klienthåndtering i Blesta. Dækker oprettelse af nye klienter, redigering af klientprofiler, administration af klientgrupper (Indstillinger &gt; Klienter &gt; Klientgrupper), indstilling af standardindstillinger på gruppeniveau for fakturering og betaling, automatisk debitering, meddelelser om forsinket betaling og påmindelser, administration af betalingskonti og navigering på klientprofilsiden som en one-stop destination for alle klienthandlinger.';
$lang['AdminChatbot.index.suggestion_clients_text'] = 'Hvordan administrerer jeg klientkonti og -grupper?';
$lang['AdminChatbot.index.suggestion_clients_title'] = 'Klienthåndtering';
$lang['AdminChatbot.index.suggestion_plugins_context'] = 'Brugeren spørger om plugin-administration i Blesta. Guide dem gennem installation af plugins (Indstillinger &gt; Plugins &gt; Tilgængelige), aktivering/deaktivering af plugins, konfiguration af plugin-indstillinger og administration af plugin-tilladelser for personalegrupper (Indstillinger &gt; System &gt; Personale &gt; Personalegrupper: Rediger). Nævn populære plugins som Support Manager, CMS, Domain Manager, og hvordan man installerer tredjeparts plugins via upload, og hvor de skal aktiveres.';
$lang['AdminChatbot.index.suggestion_plugins_text'] = 'Hvordan installerer og konfigurerer jeg plugins?';
$lang['AdminChatbot.index.suggestion_plugins_title'] = 'Plugins';
$lang['AdminChatbot.index.suggestion_automation_context'] = 'Brugeren spørger om automatisering og cron-opgaver i Blesta. Forklar, hvordan man opsætter systemets cron-job, hvilke typer automatiserede opgaver Blesta kører (oprettelse af fakturaer, betalingsbehandling, suspension/afsættelse af service, e-mail-påmindelser), og hvor man finder den anbefalede cron-kommando under Indstillinger &gt; System &gt; Automatisering, og individuelle opgaver og deres kørselstider og frekvenser under Indstillinger &gt; Virksomhed &gt; Automatisering.';
$lang['AdminChatbot.index.suggestion_automation_text'] = 'Hvordan opsætter jeg automatisk fakturering og serviceopgaver?';
$lang['AdminChatbot.index.suggestion_automation_title'] = 'Automatisering';
$lang['AdminChatbot.index.suggestion_support_context'] = 'Brugeren spørger om supportbilletsystemet i Blesta. Forklar, hvordan man opretter en supportafdeling og svarer på billetter ved hjælp af Support Manager-plugin\'et, herunder navigation (Support &gt; Afdelinger og Support &gt; Billetter). Dæk billetstatusser, afdelinger, foruddefinerede svar, import af billet-e-mails via piping eller POP/IMAP samt oprettelse af medarbejderbrugere og tildeling af afdelinger.';
$lang['AdminChatbot.index.suggestion_support_text'] = 'Hvordan håndterer og besvarer jeg supporthenvendelser?';
$lang['AdminChatbot.index.suggestion_support_title'] = 'Support-billetter';
$lang['AdminChatbot.index.suggestion_modules_context'] = 'Brugeren spørger om konfiguration af modulinstallation i Blesta. Gå igennem installation og konfiguration af moduler i Blesta. Dæk navigation (Indstillinger &gt; Moduler &gt; Tilgængelige), tilføjelse af server- eller API-legitimationsoplysninger, oprettelse af pakker, der bruger modulet (Pakker &gt; Ny pakke). Brug cPanel som et konkret eksempel, men nævn, at mønsteret gælder for andre moduler.';
$lang['AdminChatbot.index.suggestion_modules_text'] = 'Hvordan konfigurerer jeg et servermodul som cPanel?';
$lang['AdminChatbot.index.suggestion_modules_title'] = 'Opsætning af modul';
$lang['AdminChatbot.index.suggestion_services_context'] = 'Brugeren spørger om tjenesteudbud i Blesta. Guide dem gennem tilføjelse af en tjeneste til en klient, valg af en pakke, konfiguration af modulindstillinger og aktivering af tjenesten. Dæk navigationsstien (Klienter &gt; Vælg klient &gt; Ny tjeneste), pakkeoprettelse (Pakker &gt; Ny pakke) og valg af vilkår, valg af modul (fanen Modul i den nye pakke) og manuel vs. automatisk provisionering.';
$lang['AdminChatbot.index.suggestion_services_text'] = 'Hvordan leverer jeg en ny tjeneste til en kunde?';
$lang['AdminChatbot.index.suggestion_services_title'] = 'Service Management';
$lang['AdminChatbot.index.suggestion_billing_context'] = 'Brugeren spørger om fakturering af kunder i Blesta. Giv trinvis vejledning i at oprette fakturaer. Dæk navigationsstier i Blesta (f.eks. Klienter &gt; Vælg klient &gt; Opret faktura eller [+]-ikonet i faktura-widgeten), fakturaleveringsmetoder, opsætning af tilbagevendende fakturaer og almindelige faktureringsindstillinger.';
$lang['AdminChatbot.index.suggestion_billing_text'] = 'Hvordan opretter og sender jeg en faktura til en kunde?';
$lang['AdminChatbot.index.suggestion_billing_title'] = 'Hjælp til fakturering';
$lang['AdminChatbot.index.empty_subtitle'] = 'Start en samtale ved at skrive en besked eller vælge et forslag nedenfor. AI-genereret indhold kan indeholde unøjagtigheder, bias eller hallucinationer og bør ikke betragtes som professionel rådgivning. Dette værktøj må ikke bruges til ulovlige eller skadelige formål.';
$lang['AdminChatbot.index.empty_title'] = 'Hvordan kan jeg hjælpe dig i dag?';
$lang['AdminChatbot.index.default_title'] = 'Ny samtale';
$lang['AdminChatbot.index.new_chat_title'] = 'Ny chat';
$lang['AdminChatbot.index.model_label'] = 'Model';
$lang['AdminChatbot.index.btn_send'] = 'Send';
$lang['AdminChatbot.index.input_placeholder'] = 'Skriv en besked...';
$lang['AdminChatbot.index.show_chatbot_only'] = 'Vis kun chatbot-samtaler';
$lang['AdminChatbot.index.show_all_conversations'] = 'Vis alle samtaler';
$lang['AdminChatbot.index.no_conversations'] = 'Ingen samtaler endnu';
$lang['AdminChatbot.index.search_placeholder'] = 'Søg efter samtaler...';
$lang['AdminChatbot.index.btn_new_chat'] = 'Ny chat';
$lang['AdminChatbot.index.page_title'] = 'AI-chatbot';

