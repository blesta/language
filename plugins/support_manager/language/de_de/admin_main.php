<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.settings.field_submit'] = 'Einstellungen aktualisieren';
$lang['AdminMain.settings.text_remove_avatar'] = 'Bild entfernen';
$lang['AdminMain.settings.field_default_avatar'] = 'Standard-Avatarbild';
$lang['AdminMain.settings.option_default'] = 'Nur benutzerdefinierte Avatare verwenden';
$lang['AdminMain.settings.option_fallback'] = 'Gravatar verwenden, aber überschreiben, wenn ein benutzerdefinierter Avatar eingestellt ist';
$lang['AdminMain.settings.option_gravatar'] = 'Gravatar verwenden';
$lang['AdminMain.settings.field_avatar'] = 'Avatar';
$lang['AdminMain.settings.heading_avatar_settings'] = 'Avatar-Einstellungen';
$lang['AdminMain.settings.boxtitle_settings'] = 'Einstellungen';
$lang['AdminMain.settings.page_title'] = 'Support Manager &gt; Einstellungen';
$lang['AdminMain.!success.settings_updated'] = 'Die Einstellungen wurden erfolgreich aktualisiert.';
$lang['AdminMain.!success.ai_settings_updated'] = 'Die KI-Einstellungen wurden erfolgreich aktualisiert.';
$lang['AdminMain.ai.page_title'] = 'Support Manager &gt; AI-Einstellungen';
$lang['AdminMain.settings.text_avatar_recommendation'] = 'Empfohlen: 150x150px, JPG oder PNG, maximal 2MB';
$lang['AdminMain.ai.boxtitle_settings'] = 'AI-Einstellungen';
$lang['AdminMain.ai.warning_not_configured_title'] = 'Blesta AI API-Schlüssel erforderlich';
$lang['AdminMain.ai.warning_not_configured_text'] = 'KI-Funktionen für den Support Manager erfordern einen Blesta-AI-API-Schlüssel. Bitte konfigurieren Sie Ihren API-Schlüssel unter Systemeinstellungen &gt; Künstliche Intelligenz, bevor Sie KI-Funktionen aktivieren.';
$lang['AdminMain.ai.button_configure_ai'] = 'Gehen Sie zu System AI Einstellungen';
$lang['AdminMain.ai.heading_features'] = 'AI-Funktionen';
$lang['AdminMain.ai.heading_model'] = 'Modell Konfiguration';
$lang['AdminMain.ai.heading_parameters'] = 'Modell-Parameter';
$lang['AdminMain.ai.heading_system_prompt'] = 'System-Eingabeaufforderung';
$lang['AdminMain.ai.heading_experimental'] = 'Experimentelle Merkmale';
$lang['AdminMain.ai.heading_replies'] = 'Automatische Antworten';
$lang['AdminMain.ai.heading_tools'] = 'AI-Tools';
$lang['AdminMain.ai.field_enabled'] = 'AI-Funktionen für Support Manager aktivieren';
$lang['AdminMain.ai.field_enabled_desc'] = 'Erlauben Sie KI-gestützte Funktionen innerhalb des Ticketsystems, einschließlich automatischer Antworten, Zusammenfassungen und Tools.';
$lang['AdminMain.ai.field_override_model'] = 'Standard-AI-Modell außer Kraft setzen';
$lang['AdminMain.ai.field_override_model_desc'] = 'Standardeinstellung des Systems: %1$s';
$lang['AdminMain.ai.field_model'] = 'AI-Modell';
$lang['AdminMain.ai.field_model_tooltip'] = 'Wählen Sie das AI-Modell aus, das Sie speziell für Support Manager-Funktionen verwenden möchten. Verschiedene Modelle haben unterschiedliche Funktionen und Preise.';
$lang['AdminMain.ai.field_model_desc'] = 'Dieses Modell wird für alle KI-Funktionen im Support Manager verwendet.';
$lang['AdminMain.ai.field_override_max_tokens'] = 'Max. Token außer Kraft setzen';
$lang['AdminMain.ai.field_override_max_tokens_desc'] = 'Standardeinstellung des Systems: %1$s';
$lang['AdminMain.ai.field_max_tokens'] = 'Maximale Wertmarken';
$lang['AdminMain.ai.field_max_tokens_tooltip'] = 'Maximale Anzahl von Token (Wörter/Wortteile), die die KI in einer einzigen Antwort erzeugen kann. Höhere Werte erlauben längere Antworten, verbrauchen aber mehr Ressourcen. Typischer Bereich: 100-4000 für die meisten Aufgaben.';
$lang['AdminMain.ai.field_max_tokens_desc'] = 'Steuert die maximale Länge der von AI generierten Antworten. Voreinstellung: 4000';
$lang['AdminMain.ai.field_override_temperature'] = 'Außerkraftsetzen Temperatur';
$lang['AdminMain.ai.field_override_temperature_desc'] = 'Standardeinstellung des Systems: %1$s';
$lang['AdminMain.ai.field_temperature'] = 'Temperatur';
$lang['AdminMain.ai.field_temperature_tooltip'] = 'Steuert die Zufälligkeit der Antworten. Niedrigere Werte (0,0-0,7) führen zu konzentrierteren und deterministischeren Ergebnissen. Höhere Werte (1,3-2,0) führen zu kreativeren und abwechslungsreicheren Ergebnissen. Bereich: 0,0 bis 2,0';
$lang['AdminMain.ai.field_temperature_desc'] = 'Niedrigere Temperatur = konzentrierter, höhere Temperatur = kreativer. Standard: 1,0';
$lang['AdminMain.ai.field_system_prompt'] = 'Support Manager System Eingabeaufforderung';
$lang['AdminMain.ai.field_system_prompt_tooltip'] = 'Definieren Sie spezifische Anweisungen für die KI bei der Bearbeitung von Supportanfragen. Diese Aufforderung setzt die globale Systemaufforderung außer Kraft und definiert das Verhalten der KI speziell innerhalb des Ticketsystems.';
$lang['AdminMain.ai.field_system_prompt_desc'] = 'Diese Eingabeaufforderung wird speziell für Support Manager AI-Funktionen verwendet und hat Vorrang vor der globalen Systemaufforderung.';
$lang['AdminMain.ai.badge_experimental'] = 'EXPERIMENTELL';
$lang['AdminMain.ai.field_auto_reply_enabled'] = 'Automatische AI-Ticket-Antworten aktivieren';
$lang['AdminMain.ai.field_auto_reply_enabled_desc'] = 'Erlauben Sie der KI, Tickets automatisch zu beantworten, wenn sie sich der Antwort sehr sicher ist.';
$lang['AdminMain.ai.field_confidence_threshold'] = 'Konfidenzschwelle';
$lang['AdminMain.ai.field_confidence_threshold_tooltip'] = 'Die KI antwortet nur dann automatisch auf Tickets, wenn ihr Vertrauensniveau diesen Schwellenwert erreicht oder überschreitet. Höhere Werte (90-100 %) sind konservativer und sicherer. Niedrigere Werte (60-89 %) führen zu mehr automatischen Antworten, bergen aber ein höheres Fehlerrisiko.';
$lang['AdminMain.ai.field_confidence_threshold_desc'] = 'Höherer Schwellenwert = konservativer (weniger automatische Antworten, höhere Genauigkeit). Empfohlen: 70 % oder höher.';
$lang['AdminMain.ai.field_require_human_review'] = 'Überprüfung durch einen Menschen vor dem Versenden erforderlich';
$lang['AdminMain.ai.field_require_human_review_desc'] = 'Automatisch generierte Antworten werden im Ticket für die Mitarbeiter angezeigt (empfohlen)';
$lang['AdminMain.ai.field_add_ai_disclaimer'] = 'AI-generierten Haftungsausschluss hinzufügen';
$lang['AdminMain.ai.field_add_ai_disclaimer_desc'] = 'Fügen Sie an automatisch generierte Antworten einen Hinweis an, dass sie von KI erstellt wurden (empfohlen für Transparenz)';
$lang['AdminMain.ai.field_custom_disclaimer'] = 'Benutzerdefinierter Haftungsausschluss-Text';
$lang['AdminMain.ai.field_custom_disclaimer_tooltip'] = 'Passen Sie die an KI-generierte Antworten angehängte Haftungsausschlussmeldung an. Lassen Sie das Feld leer, um die Standardnachricht zu verwenden.';
$lang['AdminMain.ai.field_custom_disclaimer_desc'] = 'Dieser Text wird an alle KI-generierten Ticketantworten angehängt.';
$lang['AdminMain.ai.field_custom_disclaimer_placeholder'] = 'Diese Antwort wurde mit Hilfe von AI erstellt.';
$lang['AdminMain.ai.field_restricted_departments'] = 'Auto-Reply auf Abteilungen einschränken';
$lang['AdminMain.ai.field_restricted_departments_tooltip'] = 'Lassen Sie automatische Antworten nur für bestimmte Ticketabteilungen zu. Lassen Sie alle unmarkiert, um alle Abteilungen zuzulassen.';
$lang['AdminMain.ai.field_restricted_departments_desc'] = 'Wählen Sie aus, welche Ticketabteilungen automatische AI-Antworten erhalten können. Deaktivieren Sie alle, um alle Abteilungen zuzulassen.';
$lang['AdminMain.ai.field_assistant_name'] = 'AI-Assistent Anzeigename';
$lang['AdminMain.ai.field_assistant_name_tooltip'] = 'Der Name, der für KI-generierte Antworten in Ticket-Threads angezeigt wird. Damit wird der KI-Assistent für Ihr Support-Team personalisiert.';
$lang['AdminMain.ai.field_assistant_name_desc'] = 'Leer lassen, um den Standardnamen zu verwenden: "Support".';
$lang['AdminMain.ai.field_assistant_name_placeholder'] = 'Unterstützung';
$lang['AdminMain.ai.field_analyze_trigger'] = 'AI-Analyse-Auslöser';
$lang['AdminMain.ai.field_analyze_trigger_tooltip'] = 'Wählen Sie aus, wann die KI Tickets auf mögliche Antworten und Toolverwendungen analysieren soll. Bei "Jede Antwort" wird jede neue Nachricht analysiert. Bei "Ticket geöffnet" wird nur die erste Ticketöffnung analysiert.';
$lang['AdminMain.ai.field_analyze_trigger_desc'] = 'Steuert, wann die KI-Analyse zur Erstellung von Antworten und zur Ausführung von Tools ausgelöst wird.';
$lang['AdminMain.ai.option_every_reply'] = 'Jede Antwort';
$lang['AdminMain.ai.option_ticket_opened'] = 'Nur geöffnetes Ticket';
$lang['AdminMain.ai.field_max_queue_age_hours'] = 'Maximales Alter der Warteschlange (Stunden)';
$lang['AdminMain.ai.field_max_queue_age_hours_tooltip'] = 'Client-Antworten in der Warteschlange, die älter als dieser Wert sind, werden vom Cron verworfen und nicht verarbeitet. Verhindert, dass die KI auf veraltete Tickets antwortet, wenn der Cron deaktiviert wurde und sich ein Rückstau gebildet hat.';
$lang['AdminMain.ai.field_max_queue_age_hours_desc'] = 'Verwirft AI-Antworten in der Warteschlange, die älter als so viele Stunden sind. Muss zwischen 1 und 8760 (1 Jahr) liegen. Der Standardwert ist 24.';
$lang['AdminMain.ai.field_tools_enabled'] = 'Aktivieren von Tools';
$lang['AdminMain.ai.field_tools_enabled_desc'] = 'Ermöglichen Sie der KI die Verwendung von Tools für die Ticketverwaltung, z. B. das Ändern der Priorität, das Schließen von Tickets oder das Zuweisen an Mitarbeiter.';
$lang['AdminMain.ai.field_tools_available'] = 'Verfügbare Tools';
$lang['AdminMain.ai.field_tools_available_tooltip'] = 'Wählen Sie aus, welche Tools die KI verwenden darf. Jedes Werkzeug ermöglicht bestimmte Aktionen, die die KI bei der Bearbeitung von Tickets durchführen kann.';
$lang['AdminMain.ai.field_tool_change_priority'] = 'Ticketpriorität ändern';
$lang['AdminMain.ai.field_tool_change_priority_desc'] = 'KI kann die Ticketpriorität anpassen (nach oben oder unten), wenn der Kunde eine unangemessene Priorität gewählt oder durch die Analyse festgestellt hat.';
$lang['AdminMain.ai.field_tool_close_ticket'] = 'Ticket schließen';
$lang['AdminMain.ai.field_tool_close_ticket_desc'] = 'Erlauben Sie der KI, Tickets zu schließen, wenn es sich um Spam, geprellte Nachrichten oder eindeutig gelöste Probleme handelt.';
$lang['AdminMain.ai.field_tool_assign_staff'] = 'Dem Mitarbeiter zuordnen';
$lang['AdminMain.ai.field_tool_assign_staff_desc'] = 'Ermöglichen Sie es der KI, Tickets bestimmten Mitarbeitern auf der Grundlage von Systemanweisungen zuzuweisen.';
$lang['AdminMain.ai.field_tool_instructions'] = 'Anweisungen zur Verwendung des Werkzeugs';
$lang['AdminMain.ai.field_tool_instructions_tooltip'] = 'Geben Sie der KI konkrete Hinweise, wann und wie sie die aktivierten Tools verwenden soll. Geben Sie zum Beispiel die Namen der Mitarbeiter und ihre Fachgebiete für die Zuweisung von Tickets an.';
$lang['AdminMain.ai.field_tool_instructions_desc'] = 'Geben Sie Anweisungen und spezifische Szenarien an, in denen die Werkzeuge verwendet werden sollen. Dieser Text wird in die Eingabeaufforderung des Systems aufgenommen, wenn die Werkzeuge aktiviert sind.';
$lang['AdminMain.ai.field_tool_instructions_placeholder'] = 'Beispiel: - Weisen Sie technische Probleme im Zusammenhang mit Linux-Servern John und Windows-Servern Dave zu - Schließen Sie nur Tickets, bei denen es sich eindeutig um Spam handelt, die automatisch beantwortet werden oder bei denen der Kunde in der letzten Antwort angibt, dass das Ticket gelöst wurde - Erhöhen Sie die Priorität für dringende Probleme, bei denen "down" oder "offline" angegeben ist, auf den Status "Notfall" - Senken Sie die Priorität von Notfall-Tickets, wenn es sich nicht um tatsächliche Notfälle handelt.';
$lang['AdminMain.ai.field_submit'] = 'AI-Einstellungen speichern';

