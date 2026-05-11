<?php
/**
 * Admin Chatbot
 *
 * @package blesta
 * @subpackage blesta.language.sv_se
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminChatbot.index.time_yesterday'] = 'Igår';
$lang['AdminChatbot.index.time_today'] = 'I dag';
$lang['AdminChatbot.index.time_hours_ago'] = '%1$s för en timme sedan';
$lang['AdminChatbot.index.time_just_now'] = 'Just nu';
$lang['AdminChatbot.index.time_minutes_ago'] = '%1$s för en minut sedan';
$lang['AdminChatbot.index.confirm_delete'] = 'Är du säker på att du vill radera det här samtalet?';
$lang['AdminChatbot.index.btn_delete'] = 'Radera';
$lang['AdminChatbot.!error.model_empty'] = 'Vänligen välj modell innan du skickar ett meddelande.';
$lang['AdminChatbot.!error.conversation_create_failed'] = 'Misslyckades med att skapa konversation. Vänligen försök igen.';
$lang['AdminChatbot.!error.stream_failed'] = 'Misslyckades med att få ett svar från AI. Vänligen försök igen.';
$lang['AdminChatbot.!error.message_empty'] = 'Vänligen skriv ett meddelande.';
$lang['AdminChatbot.!error.conversation_not_found'] = 'Konversation hittades inte.';
$lang['AdminChatbot.!error.unauthorized'] = 'Du är inte behörig att utföra denna åtgärd.';
$lang['AdminChatbot.index.btn_go_back'] = 'Gå tillbaka';
$lang['AdminChatbot.index.no_permission_text'] = 'Du har inte behörighet att använda AI-chattbotten. Vänligen kontakta din administratör för att begära åtkomst.';
$lang['AdminChatbot.index.no_permission_title'] = 'Begränsad åtkomst';
$lang['AdminChatbot.index.btn_configure'] = 'Konfigurera AI';
$lang['AdminChatbot.index.not_configured_text'] = 'AI-chatboten har inte konfigurerats ännu. Konfigurera AI-inställningarna för att börja använda den här funktionen.';
$lang['AdminChatbot.index.not_configured_title'] = 'AI inte konfigurerad';
$lang['AdminChatbot.index.truncated_notice'] = 'Detta svar avkortades på grund av tokenbegränsningar. Du kan öka Max Tokens under Inställningar &gt; System &gt; AI, eller be AI att fortsätta.';
$lang['AdminChatbot.index.card_badge_prompt_mode'] = 'Prompt-läge';
$lang['AdminChatbot.index.context_pill_dismiss'] = 'Avbryt';
$lang['AdminChatbot.index.suggestion_plugin_dev_placeholder'] = 'Vad är det du bygger?';
$lang['AdminChatbot.index.suggestion_plugin_dev_text'] = 'Få hjälp med att bygga ett plugin eller en modul';
$lang['AdminChatbot.index.suggestion_plugin_dev_title'] = 'Hjälp för utvecklare';
$lang['AdminChatbot.index.suggestion_api_query_placeholder'] = 'Vad vill du göra via API:et?';
$lang['AdminChatbot.index.suggestion_api_query_text'] = 'Få hjälp med att skriva Blesta API-förfrågningar';
$lang['AdminChatbot.index.suggestion_api_query_title'] = 'API-förfrågan';
$lang['AdminChatbot.index.suggestion_custom_report_placeholder'] = 'Beskriv den rapport du behöver...';
$lang['AdminChatbot.index.suggestion_custom_report_text'] = 'Generera en SQL-fråga för en anpassad rapport';
$lang['AdminChatbot.index.suggestion_custom_report_title'] = 'Anpassad rapport';
$lang['AdminChatbot.index.suggestion_security_context'] = 'Användaren frågar om bästa praxis för säkerhet. Ta upp personalbehörigheter och gruppbaserad åtkomstkontroll, tvåfaktorsautentisering, starka lösenordspolicyer, uppdatering av Blesta, SSL/TLS-konfiguration, IP-baserade inloggningsbegränsningar och åtkomst till loggar (Verktyg &gt; Loggar). Nämn ändring av administratörens standardväg i /config/routes.php via Route.admin';
$lang['AdminChatbot.index.suggestion_security_text'] = 'Vilka bästa säkerhetsrutiner bör jag följa?';
$lang['AdminChatbot.index.suggestion_security_title'] = 'Säkerhet';
$lang['AdminChatbot.index.suggestion_clients_context'] = 'Användaren frågar om klienthantering i Blesta. Omfattar skapande av nya kunder, redigering av kundprofiler, hantering av kundgrupper (Inställningar &gt; Kunder &gt; Kundgrupper), inställning av standardvärden på gruppnivå för fakturering och betalning, automatisk debitering, betalningsanmärkningar och påminnelser, hantering av betalkonton och navigering på kundprofilsidan som en enda destination för alla kundåtgärder.';
$lang['AdminChatbot.index.suggestion_clients_text'] = 'Hur hanterar jag kundkonton och kundgrupper?';
$lang['AdminChatbot.index.suggestion_clients_title'] = 'Kundhantering';
$lang['AdminChatbot.index.suggestion_plugins_context'] = 'Användaren frågar om plugin-hantering i Blesta. Guida dem genom att installera plugins (Inställningar &gt; Plugins &gt; Tillgängliga), aktivera/inaktivera plugins, konfigurera plugin-inställningar och hantera plugin-behörigheter för personalgrupper (Inställningar &gt; System &gt; Personal &gt; Personalgrupper: Redigera). Nämn populära plugins som Support Manager, CMS, Domain Manager och hur man installerar plugins från tredje part via uppladdning och var de ska aktiveras.';
$lang['AdminChatbot.index.suggestion_plugins_text'] = 'Hur installerar och konfigurerar jag plugins?';
$lang['AdminChatbot.index.suggestion_plugins_title'] = 'Plugins';
$lang['AdminChatbot.index.suggestion_automation_context'] = 'Användaren frågar om automatisering och cron-uppgifter i Blesta. Förklara hur du ställer in systemets cron-jobb, vilka typer av automatiserade uppgifter Blesta kör (fakturaskapande, betalningshantering, serviceavbrott/avbrott, e-postpåminnelser) och var du hittar det rekommenderade cron-kommandot under Inställningar &gt; System &gt; Automation, och enskilda uppgifter och deras körtider och frekvenser under Inställningar &gt; Företag &gt; Automation.';
$lang['AdminChatbot.index.suggestion_automation_text'] = 'Hur ställer jag in automatiserad fakturering och serviceuppgifter?';
$lang['AdminChatbot.index.suggestion_automation_title'] = 'Automatisering';
$lang['AdminChatbot.index.suggestion_support_context'] = 'Användaren frågar om supportbiljettsystemet i Blesta. Förklara hur du skapar en supportavdelning och svarar på ärenden med hjälp av plugin-programmet Support Manager, inklusive navigering (Support &gt; Avdelningar och Support &gt; Biljetter). Täck biljettstatus, avdelningar, fördefinierade svar, import av biljett-e-post via piping eller POP / IMAP, och skapande av personalanvändare och avdelningstilldelning.';
$lang['AdminChatbot.index.suggestion_support_text'] = 'Hur hanterar jag och svarar på supportärenden?';
$lang['AdminChatbot.index.suggestion_support_title'] = 'Supportbiljetter';
$lang['AdminChatbot.index.suggestion_modules_context'] = 'Användaren frågar om konfiguration av modulinstallation i Blesta. Gå igenom installation och konfiguration av moduler i Blesta. Täck navigering (Inställningar &gt; Moduler &gt; Tillgängliga), lägg till server- eller API-autentiseringsuppgifter, skapa paket som använder modulen (Paket &gt; Nytt paket). Använd cPanel som ett konkret exempel, men nämn att mönstret gäller för andra moduler.';
$lang['AdminChatbot.index.suggestion_modules_text'] = 'Hur konfigurerar jag en servermodul som cPanel?';
$lang['AdminChatbot.index.suggestion_modules_title'] = 'Inställning av modul';
$lang['AdminChatbot.index.suggestion_services_context'] = 'Användaren frågar om tillhandahållande av tjänster i Blesta. Guida dem genom att lägga till en tjänst för en klient, välja ett paket, konfigurera modulinställningar och aktivera tjänsten. Gå igenom navigeringsvägen (Clients &gt; Select client &gt; New Service), skapande av paket (Packages &gt; New Package) och val av term, val av modul (fliken Module i det nya paketet) och manuell kontra automatisk provisionering.';
$lang['AdminChatbot.index.suggestion_services_text'] = 'Hur tillhandahåller jag en ny tjänst för en kund?';
$lang['AdminChatbot.index.suggestion_services_title'] = 'Servicehantering';
$lang['AdminChatbot.index.suggestion_billing_context'] = 'Användaren frågar om fakturering av kunder i Blesta. Ge steg-för-steg-vägledning om hur man skapar fakturor. Gå igenom navigeringsvägar i Blesta (t.ex. Klienter &gt; Välj klient &gt; Skapa faktura eller [+]-ikonen i widgeten Fakturor), leveransmetoder för fakturor, inställning av återkommande fakturor och vanliga faktureringsinställningar.';
$lang['AdminChatbot.index.suggestion_billing_text'] = 'Hur skapar och skickar jag en faktura till en kund?';
$lang['AdminChatbot.index.suggestion_billing_title'] = 'Hjälp med fakturering';
$lang['AdminChatbot.index.empty_subtitle'] = 'Starta en konversation genom att skriva ett meddelande eller välja ett förslag nedan. AI-genererat innehåll kan innehålla felaktigheter, fördomar eller hallucinationer och ska inte betraktas som professionell rådgivning. Detta verktyg får inte användas för olagliga eller skadliga syften.';
$lang['AdminChatbot.index.empty_title'] = 'Hur kan jag hjälpa dig idag?';
$lang['AdminChatbot.index.default_title'] = 'Ny konversation';
$lang['AdminChatbot.index.new_chat_title'] = 'Ny chatt';
$lang['AdminChatbot.index.model_label'] = 'Modell';
$lang['AdminChatbot.index.btn_send'] = 'Skicka';
$lang['AdminChatbot.index.input_placeholder'] = 'Skriv ett meddelande...';
$lang['AdminChatbot.index.show_chatbot_only'] = 'Visa endast chatbot-konversationer';
$lang['AdminChatbot.index.show_all_conversations'] = 'Visa alla konversationer';
$lang['AdminChatbot.index.no_conversations'] = 'Inga konversationer ännu';
$lang['AdminChatbot.index.search_placeholder'] = 'Sök konversationer...';
$lang['AdminChatbot.index.btn_new_chat'] = 'Ny chatt';
$lang['AdminChatbot.index.page_title'] = 'AI Chatbot';

