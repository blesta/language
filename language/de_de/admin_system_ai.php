<?php
/**
 * Admin System Ai
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemAi.!success.settings_updated'] = 'Die KI-Einstellungen wurden erfolgreich aktualisiert!';
$lang['AdminSystemAi.!success.api_key_fetched'] = 'API-Schlüssel erfolgreich von Ihrem Blesta-Konto abgerufen.';
$lang['AdminSystemAi.!error.connection_failed'] = 'Es konnte keine Verbindung zur AI API hergestellt werden: %1$s';
$lang['AdminSystemAi.!error.invalid_request'] = 'Ungültige Anfrage.';
$lang['AdminSystemAi.!error.username_required'] = 'Bitte geben Sie Ihren account.blesta.com-Benutzernamen ein.';
$lang['AdminSystemAi.!error.no_license_key'] = 'Kein Blesta-Lizenzschlüssel gefunden. Bitte konfigurieren Sie zuerst Ihre Lizenz.';
$lang['AdminSystemAi.!error.auth_failed'] = 'Authentifizierung fehlgeschlagen. Bitte überprüfen Sie Ihren Benutzernamen und Lizenzschlüssel.';
$lang['AdminSystemAi.!error.request_failed'] = 'Anfrage fehlgeschlagen. Bitte versuchen Sie es erneut.';
$lang['AdminSystemAi.!error.api_key_required'] = 'Bitte geben Sie einen API-Schlüssel ein.';
$lang['AdminSystemAi.!error.invalid_api_key'] = 'Ungültiger API-Schlüssel.';
$lang['AdminSystemAi.index.page_title'] = 'Einstellungen &gt; System &gt; AI';
$lang['AdminSystemAi.index.boxtitle_ai'] = 'AI-Einstellungen';
$lang['AdminSystemAi.index.field.ai_enabled'] = 'AI-Funktionen aktivieren';
$lang['AdminSystemAi.index.field.ai_api_key'] = 'API-Schlüssel';
$lang['AdminSystemAi.index.field.ai_default_model'] = 'Standardmodell';
$lang['AdminSystemAi.index.field.ai_temperature'] = 'Temperatur';
$lang['AdminSystemAi.index.field.ai_max_tokens'] = 'Max Spielmarken';
$lang['AdminSystemAi.index.field.submit'] = 'Einstellungen aktualisieren';
$lang['AdminSystemAi.index.tooltip.ai_enabled'] = 'Aktivieren oder deaktivieren Sie AI-Funktionen im gesamten System.';
$lang['AdminSystemAi.index.tooltip.ai_api_key'] = 'Ihr Blesta AI API-Schlüssel. Diesen erhalten Sie unter account.blesta.com.';
$lang['AdminSystemAi.index.tooltip.ai_default_model'] = 'Das Standard-KI-Modell, das für Chatvervollständigungen verwendet wird.';
$lang['AdminSystemAi.index.tooltip.ai_temperature'] = 'Steuert die Zufälligkeit. Niedrigere Werte sind eher deterministisch, höhere Werte sind kreativer. Bereich: 0,0 bis 2,0';
$lang['AdminSystemAi.index.tooltip.ai_max_tokens'] = 'Maximale Anzahl der in den Antworten zu erzeugenden Token.';
$lang['AdminSystemAi.index.text_connected'] = 'Erfolgreich mit Blesta AI verbunden.';
$lang['AdminSystemAi.index.text_connection_error'] = 'Die Verbindung zu Blesta AI konnte nicht hergestellt werden. Überprüfen Sie Ihren API-Schlüssel.';
$lang['AdminSystemAi.index.text_balance'] = 'Saldo: %1$s %2$s';
$lang['AdminSystemAi.index.text_temperature_range'] = '(0.0 - 2.0)';
$lang['AdminSystemAi.index.text_fetch_key'] = 'Von meinem Blesta-Konto abrufen';
$lang['AdminSystemAi.index.text_manual_entry'] = 'Geben Sie Ihren API-Schlüssel manuell ein oder holen Sie ihn automatisch von Ihrem Konto ab.';
$lang['AdminSystemAi.index.text_validating'] = 'Validierung...';
$lang['AdminSystemAi.index.text_key_valid'] = 'API-Schlüssel validiert und gespeichert';
$lang['AdminSystemAi.index.text_select_model'] = 'Wählen Sie ein Modell';
$lang['AdminSystemAi.index.text_api_status'] = 'API-Status';
$lang['AdminSystemAi.index.text_status_active'] = 'Aktiv';
$lang['AdminSystemAi.index.text_remaining_credits'] = 'Verbleibende Credits';
$lang['AdminSystemAi.index.text_credits_used'] = 'Verwendete Credits (diesen Monat)';
$lang['AdminSystemAi.index.text_last_api_call'] = 'Letzter API-Aufruf';
$lang['AdminSystemAi.index.text_no_calls_yet'] = 'Noch keine Anrufe';
$lang['AdminSystemAi.modal.heading_fetch'] = 'Von meinem Blesta-Konto abrufen';
$lang['AdminSystemAi.modal.text_subtitle'] = 'Ihr Benutzername ist erforderlich, um Ihren API-Schlüssel abzurufen.';
$lang['AdminSystemAi.modal.text_info'] = 'Ihr account.blesta.com-Benutzername und Ihr Blesta-Lizenzschlüssel werden verwendet, um Ihre Lizenz zu validieren und automatisch einen neuen Blesta AI API-Schlüssel abzurufen. Wenn bereits ein Schlüssel generiert wurde, wird er widerrufen und ein neuer Schlüssel wird ausgestellt.';
$lang['AdminSystemAi.modal.field.username'] = 'Benutzername';
$lang['AdminSystemAi.modal.field.username_placeholder'] = 'Geben Sie den Benutzernamen Ihres Kontos ein';
$lang['AdminSystemAi.modal.button.authenticate'] = 'Authentifizieren Sie';
$lang['AdminSystemAi.modal.button.cancel'] = 'Abbrechen';
$lang['AdminSystemAi.modal.text_authenticating'] = 'Authentifizierung...';
$lang['AdminSystemAi.index.heading_api'] = 'API-Konfiguration';
$lang['AdminSystemAi.index.heading_model'] = 'Standardmodell';
$lang['AdminSystemAi.index.heading_parameters'] = 'Modell-Parameter';
$lang['AdminSystemAi.index.heading_prompts'] = 'System-Eingabeaufforderungen';
$lang['AdminSystemAi.index.heading_features'] = 'Aktivierte Funktionen';
$lang['AdminSystemAi.index.field.ai_global_prompt'] = 'Globale Systemaufforderung (Standard)';
$lang['AdminSystemAi.index.tooltip.ai_global_prompt'] = 'Die Standardanweisungen, die bei jeder Anfrage an das KI-Modell gesendet werden. Diese definieren das Verhalten und den Kontext der KI für alle Funktionen.';
$lang['AdminSystemAi.index.text_global_prompt_help'] = 'Diese Aufforderung gilt für alle AI-Features, es sei denn, sie wird innerhalb des Features außer Kraft gesetzt.';
$lang['AdminSystemAi.index.field.ai_feature_package_descriptions'] = 'Paketbeschreibungen';
$lang['AdminSystemAi.index.text_feature_package_descriptions'] = 'Erstellen Sie aussagekräftige Produkt- und Dienstleistungsbeschreibungen';
$lang['AdminSystemAi.index.field.ai_feature_email_templates'] = 'E-Mail-Vorlagen';
$lang['AdminSystemAi.index.text_feature_email_templates'] = 'KI-gestützte Bearbeitung und Verbesserung von E-Mail-Vorlagen';
$lang['AdminSystemAi.index.field.ai_feature_chatbot'] = 'Chatbot';
$lang['AdminSystemAi.index.text_feature_chatbot'] = 'KI-gestützter Chatbot zur Unterstützung des Personals';
$lang['AdminSystemAi.index.field.ai_chatbot_staff_groups'] = 'Zugang zur Mitarbeitergruppe';
$lang['AdminSystemAi.index.tooltip.ai_chatbot_staff_groups'] = 'Wählen Sie aus, welche Mitarbeitergruppen auf den KI-Chatbot zugreifen können. Es können mehrere Gruppen ausgewählt werden.';
$lang['AdminSystemAi.index.text_staff_groups_help'] = 'Halten Sie die Strg-Taste (Cmd auf Mac) gedrückt, um mehrere Gruppen auszuwählen.';
$lang['AdminSystemAi.index.text_features_intro'] = 'Wählen Sie aus, für welche Blesta-Kernfunktionen die KI-Unterstützung aktiviert werden soll. Plugins können auf KI-Funktionen zugreifen und werden unabhängig konfiguriert.';
$lang['AdminSystemAi.index.heading_beta'] = 'Hinweis auf Beta-Funktionen';
$lang['AdminSystemAi.index.text_beta_notice'] = 'Diese Funktion befindet sich derzeit im Beta-Stadium und kann unerwartete oder ungenaue Ergebnisse liefern. Verwenden Sie sie mit Bedacht.';
$lang['AdminSystemAi.index.heading_privacy'] = 'Hinweis zum Datenschutz';
$lang['AdminSystemAi.index.text_privacy_notice'] = 'Anfragen werden zur Bearbeitung an Drittanbieter von KI (z. B. OpenAI, Anthropic) gesendet. Der KI-Dienst von Blesta speichert keine KI-Konversationsdaten; wir haben jedoch keine Kontrolle darüber, wie diese Anbieter die Daten behandeln oder aufbewahren. Vermeiden Sie es, sensible oder vertrauliche Informationen zu übermitteln.';
$lang['AdminSystemAi.index.heading_privacy_acknowledgment'] = 'Anerkennung der Privatsphäre';
$lang['AdminSystemAi.index.field.ai_privacy_acknowledged'] = 'Ich habe den oben genannten Datenschutzhinweis gelesen und verstanden.';
$lang['AdminSystemAi.index.text_privacy_last_acknowledged'] = 'Zuletzt bestätigt auf %1$s.';
$lang['AdminSystemAi.!error.privacy_not_acknowledged'] = 'Vor dem Speichern müssen Sie dem Datenschutzhinweis zustimmen.';
$lang['AdminSystemAi.index.heading_email_context'] = 'E-Mail-Vorlagenkontext-Einstellungen';
$lang['AdminSystemAi.index.field.ai_email_context_depth'] = 'Beziehungs-Tiefe';
$lang['AdminSystemAi.index.tooltip.ai_email_context_depth'] = 'Maximale Tiefe für das Durchlaufen von Modellbeziehungen. Höhere Werte schließen mehr Bezugsdaten ein, erhöhen aber die Verwendung von Token. Bereich: 1-5.';
$lang['AdminSystemAi.index.text_email_context_depth'] = 'Steuert, wie tief die Beziehungen verfolgt werden sollen (z. B. Rechnung → Kunde → Kontakte). Standard: 2';
$lang['AdminSystemAi.index.field.ai_email_context_schemas'] = 'Schemadefinitionen einbeziehen';
$lang['AdminSystemAi.index.text_email_context_schemas'] = 'Nehmen Sie Feldtypinformationen und Datenbankschemata in den Kontext auf.';
$lang['AdminSystemAi.index.field.ai_email_context_examples'] = 'Beispieldaten einbeziehen';
$lang['AdminSystemAi.index.text_email_context_examples'] = 'Fügen Sie Beispieldatenwerte ein, damit die KI Datenformate und -struktur besser versteht.';

