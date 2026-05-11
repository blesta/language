<?php
/**
 * Admin Chatbot
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminChatbot.index.time_yesterday'] = 'Gestern';
$lang['AdminChatbot.index.time_today'] = 'Heute';
$lang['AdminChatbot.index.time_hours_ago'] = '%1$s vor einer Stunde';
$lang['AdminChatbot.index.time_minutes_ago'] = '%1$s min vor';
$lang['AdminChatbot.index.time_just_now'] = 'Gerade jetzt';
$lang['AdminChatbot.index.confirm_delete'] = 'Sind Sie sicher, dass Sie dieses Gespräch löschen wollen?';
$lang['AdminChatbot.index.btn_delete'] = 'Löschen';
$lang['AdminChatbot.!error.model_empty'] = 'Bitte wählen Sie ein Modell aus, bevor Sie eine Nachricht senden.';
$lang['AdminChatbot.!error.conversation_create_failed'] = 'Konversation kann nicht erstellt werden. Bitte versuchen Sie es erneut.';
$lang['AdminChatbot.!error.stream_failed'] = 'Sie haben keine Antwort von der KI erhalten. Bitte versuchen Sie es erneut.';
$lang['AdminChatbot.!error.message_empty'] = 'Bitte geben Sie eine Nachricht ein.';
$lang['AdminChatbot.!error.conversation_not_found'] = 'Konversation nicht gefunden.';
$lang['AdminChatbot.!error.unauthorized'] = 'Sie sind nicht berechtigt, diese Aktion durchzuführen.';
$lang['AdminChatbot.index.btn_go_back'] = 'Zurückgehen';
$lang['AdminChatbot.index.no_permission_text'] = 'Sie haben keine Berechtigung zur Nutzung des KI-Chatbots. Bitte kontaktieren Sie Ihren Administrator, um Zugang zu beantragen.';
$lang['AdminChatbot.index.no_permission_title'] = 'Zugang eingeschränkt';
$lang['AdminChatbot.index.btn_configure'] = 'AI konfigurieren';
$lang['AdminChatbot.index.not_configured_text'] = 'Der KI-Chatbot wurde noch nicht konfiguriert. Bitte konfigurieren Sie die KI-Einstellungen, um diese Funktion nutzen zu können.';
$lang['AdminChatbot.index.not_configured_title'] = 'AI nicht konfiguriert';
$lang['AdminChatbot.index.truncated_notice'] = 'Diese Antwort wurde aufgrund von Token-Limits abgeschnitten. Sie können die maximalen Token unter Einstellungen &gt; System &gt; KI erhöhen oder die KI bitten, fortzufahren.';
$lang['AdminChatbot.index.card_badge_prompt_mode'] = 'Aufforderungsmodus';
$lang['AdminChatbot.index.suggestion_plugin_dev_placeholder'] = 'Was bauen Sie?';
$lang['AdminChatbot.index.context_pill_dismiss'] = 'Abbrechen';
$lang['AdminChatbot.index.suggestion_plugin_dev_text'] = 'Hilfe bei der Erstellung eines Plugins oder Moduls erhalten';
$lang['AdminChatbot.index.suggestion_plugin_dev_title'] = 'Hilfe für Entwickler';
$lang['AdminChatbot.index.suggestion_api_query_placeholder'] = 'Was möchten Sie über die API tun?';
$lang['AdminChatbot.index.suggestion_api_query_text'] = 'Hilfe beim Schreiben von Blesta-API-Anfragen erhalten';
$lang['AdminChatbot.index.suggestion_api_query_title'] = 'API-Abfrage';
$lang['AdminChatbot.index.suggestion_custom_report_placeholder'] = 'Beschreiben Sie den Bericht, den Sie benötigen...';
$lang['AdminChatbot.index.suggestion_custom_report_text'] = 'Generieren einer SQL-Abfrage für einen benutzerdefinierten Bericht';
$lang['AdminChatbot.index.suggestion_custom_report_title'] = 'Benutzerdefinierter Bericht';
$lang['AdminChatbot.index.suggestion_security_context'] = 'Der Benutzer fragt nach bewährten Sicherheitsverfahren. Behandeln Sie die Rechte von Mitarbeitern und die gruppenbasierte Zugriffskontrolle, die Einrichtung der Zwei-Faktor-Authentifizierung, strenge Passwortrichtlinien, die Aktualisierung von Blesta, die SSL/TLS-Konfiguration, IP-basierte Anmeldebeschränkungen und den Zugriff auf Protokolle (Tools &gt; Logs). Erwähnung der Änderung der Admin-Standardroute in /config/routes.php über Route.admin';
$lang['AdminChatbot.index.suggestion_security_text'] = 'Welche bewährten Sicherheitsverfahren sollte ich befolgen?';
$lang['AdminChatbot.index.suggestion_security_title'] = 'Sicherheit';
$lang['AdminChatbot.index.suggestion_clients_context'] = 'Der Benutzer fragt nach der Kundenverwaltung in Blesta. Behandelt werden das Anlegen neuer Kunden, das Bearbeiten von Kundenprofilen, das Verwalten von Kundengruppen (Einstellungen &gt; Kunden &gt; Kundengruppen), das Festlegen von Standardwerten auf Gruppenebene für die Rechnungsstellung und Zahlung, automatische Abbuchungen, Mahnungen und Zahlungserinnerungen, das Verwalten von Zahlungskonten und das Navigieren auf der Kundenprofilseite als zentrale Anlaufstelle für alle Kundenaktionen.';
$lang['AdminChatbot.index.suggestion_clients_text'] = 'Wie kann ich Kundenkonten und -gruppen verwalten?';
$lang['AdminChatbot.index.suggestion_clients_title'] = 'Kundenmanagement';
$lang['AdminChatbot.index.suggestion_plugins_context'] = 'Der Benutzer fragt nach der Plugin-Verwaltung in Blesta. Führen Sie ihn durch die Installation von Plugins (Einstellungen &gt; Plugins &gt; Verfügbar), die Aktivierung/Deaktivierung von Plugins, die Konfiguration von Plugin-Einstellungen und die Verwaltung von Plugin-Berechtigungen für Mitarbeitergruppen (Einstellungen &gt; System &gt; Mitarbeiter &gt; Mitarbeitergruppen: Bearbeiten). Erwähnen Sie beliebte Plugins wie Support Manager, CMS, Domain Manager und wie man Plugins von Drittanbietern per Upload installiert und wo sie aktiviert werden können.';
$lang['AdminChatbot.index.suggestion_plugins_text'] = 'Wie kann ich Plugins installieren und konfigurieren?';
$lang['AdminChatbot.index.suggestion_plugins_title'] = 'Plugins';
$lang['AdminChatbot.index.suggestion_automation_context'] = 'Der Benutzer fragt nach der Automatisierung und den Cron-Aufgaben in Blesta. Erklären Sie, wie Sie den System-Cron-Job einrichten, welche Arten von automatisierten Aufgaben Blesta ausführt (Rechnungserstellung, Zahlungsverarbeitung, Aussetzung/Aufhebung von Diensten, E-Mail-Erinnerungen) und wo Sie den empfohlenen Cron-Befehl unter Einstellungen &gt; System &gt; Automatisierung sowie einzelne Aufgaben und ihre Laufzeiten und Häufigkeit unter Einstellungen &gt; Unternehmen &gt; Automatisierung finden.';
$lang['AdminChatbot.index.suggestion_automation_text'] = 'Wie richte ich automatische Rechnungs- und Serviceaufgaben ein?';
$lang['AdminChatbot.index.suggestion_automation_title'] = 'Automatisierung';
$lang['AdminChatbot.index.suggestion_support_context'] = 'Der Benutzer fragt nach dem Support-Ticket-System in Blesta. Erläutern Sie, wie man eine Support-Abteilung erstellt und auf Tickets mit dem Support Manager Plugin antwortet, einschließlich der Navigation (Support &gt; Abteilungen und Support &gt; Tickets). Behandeln Sie Ticket-Status, Abteilungen, vordefinierte Antworten, den Import von Ticket-E-Mails über Piping oder POP/IMAP sowie die Erstellung von Mitarbeitern und die Zuweisung von Abteilungen.';
$lang['AdminChatbot.index.suggestion_support_text'] = 'Wie verwalte und beantworte ich Supportanfragen?';
$lang['AdminChatbot.index.suggestion_support_title'] = 'Support-Tickets';
$lang['AdminChatbot.index.suggestion_modules_context'] = 'Der Benutzer fragt nach der Konfiguration der Modulinstallation in Blesta. Führen Sie ihn durch die Installation und Konfiguration von Modulen in Blesta. Behandeln Sie die Navigation (Einstellungen &gt; Module &gt; Verfügbar), das Hinzufügen von Server- oder API-Zugangsdaten und das Erstellen von Paketen, die das Modul verwenden (Pakete &gt; Neues Paket). Verwenden Sie cPanel als konkretes Beispiel, aber erwähnen Sie, dass das Muster auch für andere Module gilt.';
$lang['AdminChatbot.index.suggestion_modules_text'] = 'Wie konfiguriere ich ein Servermodul wie cPanel?';
$lang['AdminChatbot.index.suggestion_modules_title'] = 'Modul-Einrichtung';
$lang['AdminChatbot.index.suggestion_services_context'] = 'Der Benutzer fragt nach der Bereitstellung von Diensten in Blesta. Führen Sie ihn durch das Hinzufügen eines Dienstes für einen Kunden, das Auswählen eines Pakets, das Konfigurieren von Moduleinstellungen und das Aktivieren des Dienstes. Behandeln Sie den Navigationspfad (Clients &gt; Select client &gt; New Service), die Paketerstellung (Packages &gt; New Package) und die Begriffsauswahl, die Modulauswahl (Module tab on new Package) sowie die manuelle und automatische Bereitstellung.';
$lang['AdminChatbot.index.suggestion_services_text'] = 'Wie kann ich einen neuen Dienst für einen Kunden bereitstellen?';
$lang['AdminChatbot.index.suggestion_services_title'] = 'Dienstleistungsverwaltung';
$lang['AdminChatbot.index.suggestion_billing_context'] = 'Der Benutzer fragt nach der Rechnungsstellung für Kunden in Blesta. Geben Sie eine schrittweise Anleitung zur Erstellung von Rechnungen. Behandeln Sie die Navigationspfade in Blesta (z. B. Kunden &gt; Kunde auswählen &gt; Rechnung erstellen oder das [+]-Symbol im Rechnungen-Widget), die Zustellungsmethoden für Rechnungen, die Einrichtung wiederkehrender Rechnungen und allgemeine Rechnungseinstellungen.';
$lang['AdminChatbot.index.suggestion_billing_text'] = 'Wie kann ich eine Rechnung erstellen und an einen Kunden senden?';
$lang['AdminChatbot.index.suggestion_billing_title'] = 'Hilfe bei der Rechnungsstellung';
$lang['AdminChatbot.index.empty_subtitle'] = 'Beginnen Sie ein Gespräch, indem Sie eine Nachricht eingeben oder einen Vorschlag auswählen. KI-generierte Inhalte können Ungenauigkeiten, Vorurteile oder Halluzinationen enthalten und sollten nicht als professionelle Beratung angesehen werden. Dieses Tool darf nicht für illegale oder schädliche Zwecke verwendet werden.';
$lang['AdminChatbot.index.empty_title'] = 'Wie kann ich Ihnen heute helfen?';
$lang['AdminChatbot.index.default_title'] = 'Neue Konversation';
$lang['AdminChatbot.index.new_chat_title'] = 'Neuer Chat';
$lang['AdminChatbot.index.model_label'] = 'Modell';
$lang['AdminChatbot.index.btn_send'] = 'Senden Sie';
$lang['AdminChatbot.index.input_placeholder'] = 'Geben Sie eine Nachricht ein...';
$lang['AdminChatbot.index.show_chatbot_only'] = 'Nur Chatbot-Unterhaltungen anzeigen';
$lang['AdminChatbot.index.show_all_conversations'] = 'Alle Unterhaltungen anzeigen';
$lang['AdminChatbot.index.no_conversations'] = 'Noch keine Unterhaltungen';
$lang['AdminChatbot.index.search_placeholder'] = 'Suche nach Gesprächen...';
$lang['AdminChatbot.index.btn_new_chat'] = 'Neuer Chat';
$lang['AdminChatbot.index.page_title'] = 'KI-Chatbot';

