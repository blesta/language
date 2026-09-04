<?php
/**
 * Stripe Payments
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['StripePayments.!error.ach.invalid_account'] = 'Für diesen Kunden konnte kein Bankkonto gefunden werden.';
$lang['StripePayments.!error.ach.unverified'] = 'Das Bankkonto konnte nicht verifiziert werden. Bitte überprüfen Sie die Einzahlungsbeträge und versuchen Sie es erneut.';
$lang['StripePayments.!error.auth'] = 'Das Gateway konnte sich nicht authentifizieren.';
$lang['StripePayments.!error.bank_account_unverified'] = 'Sie müssen Ihr Bankkonto verifizieren, bevor Sie es für eine Zahlung verwenden können.';
$lang['StripePayments.!error.india_mandate_max_amount.format'] = 'Bitte geben Sie einen gültigen Betrag für die maximale wiederkehrende Abbuchung ein.';
$lang['StripePayments.!error.invalid_request_error'] = 'Das Zahlungs-Gateway hat bei der Verarbeitung der Anfrage einen Fehler gemeldet.';
$lang['StripePayments.!error.publishable_key.empty'] = 'Bitte geben Sie einen veröffentlichbaren Schlüssel ein.';
$lang['StripePayments.!error.secret_key.empty'] = 'Bitte geben Sie einen geheimen Schlüssel ein.';
$lang['StripePayments.!error.secret_key.valid'] = 'Die Verbindung zur Stripe-API kann mit dem angegebenen geheimen Schlüssel nicht hergestellt werden.';
$lang['StripePayments.ach_form.field_account_number'] = 'Kontonummer';
$lang['StripePayments.ach_form.field_first_deposit'] = 'Erste Einzahlung';
$lang['StripePayments.ach_form.field_holder_type'] = 'Typ des Halters';
$lang['StripePayments.ach_form.field_holder_type_company'] = 'Unternehmen';
$lang['StripePayments.ach_form.field_holder_type_individual'] = 'Einzelne';
$lang['StripePayments.ach_form.field_routing_number'] = 'Routing-Nummer';
$lang['StripePayments.ach_form.field_second_deposit'] = 'Zweite Einzahlung';
$lang['StripePayments.ach_form.field_type'] = 'Konto-Typ';
$lang['StripePayments.ach_form.mandate_authorization'] = 'Mit dem Absenden dieses Formulars ermächtigen Sie %1$s, das oben angegebene Bankkonto mit allen geschuldeten Beträgen für Gebühren zu belasten, die sich aus Ihrer Nutzung von %1$s-Diensten und/oder dem Kauf von Produkten von %1$s ergeben, gemäß der Website und den Bedingungen von %1$s, bis diese Ermächtigung widerrufen wird. Sie können diese Ermächtigung jederzeit ändern oder widerrufen, indem Sie %1$s mit einer Frist von 30 (dreißig) Tagen benachrichtigen.';
$lang['StripePayments.ach_form.mandate_future_usage'] = 'Wenn Sie die Dienste von %1$s in Anspruch nehmen oder regelmäßig zusätzliche Produkte gemäß den Bedingungen von %1$s erwerben, ermächtigen Sie %1$s, Ihr Bankkonto regelmäßig zu belasten. Zahlungen, die nicht unter die oben genehmigten regelmäßigen Abbuchungen fallen, werden nur nach Ihrer Genehmigung abgebucht.';
$lang['StripePayments.ach_form.verification_notice'] = 'Das derzeit hinterlegte Bankkonto wurde noch nicht verifiziert. Wenn Sie unten neue Bankkontodaten eingeben, werden diese die bisherigen ersetzen.';
$lang['StripePayments.charge_description'] = 'Gebühr für %1$s';
$lang['StripePayments.charge_description_default'] = 'Entgelt für einen bestimmten Betrag';
$lang['StripePayments.description'] = 'Verwendet Stripe Elements und die API für Zahlungsanfragen, um automatisch 3D Secure und SCA zu verarbeiten und Kreditkarten direkt über Stripe zu senden';
$lang['StripePayments.heading_migrate_accounts'] = 'Alte Zahlungskonten migrieren';
$lang['StripePayments.india_mandate_max_amount'] = 'Maximaler Betrag für wiederkehrende Abbuchungen (Indien)';
$lang['StripePayments.india_mandate_max_amount_note'] = 'Erforderlich, um automatische wiederkehrende Abbuchungen für in Indien ausgestellte Karten zu aktivieren. Dies ist der Höchstbetrag, der einer solchen Karte bei einer einzelnen zukünftigen Zahlung außerhalb einer Sitzung in der jeweils verarbeiteten Währung belastet werden darf. Lassen Sie das Feld leer, damit indische Karten ohne Registrierung für automatische wiederkehrende Abbuchungen gespeichert werden können.';
$lang['StripePayments.migrate_accounts'] = 'Konten migrieren';
$lang['StripePayments.name'] = 'Streifenzahlungen';
$lang['StripePayments.publishable_key'] = 'API-veröffentlichbarer Schlüssel';
$lang['StripePayments.request_three_d_secure'] = 'Ablauf der 3D-Secure-Authentifizierung';
$lang['StripePayments.request_three_d_secure_automatic'] = 'Erlauben Sie Stripe zu bestimmen, wann eine 3D-Secure-Abfrage erfolgen soll';
$lang['StripePayments.request_three_d_secure_challenge'] = 'Präsentieren Sie die 3D-Secure-Herausforderung, wenn ein Client eine Zahlungsmethode speichert oder eine Zahlungsmethode verarbeitet (gespeichert oder nicht gespeichert)';
$lang['StripePayments.request_three_d_secure_frictionless'] = 'Präsentieren Sie eine 3D-Secure-Herausforderung, wenn ein Client eine Zahlungsmethode speichert oder eine nicht gespeicherte Zahlungsmethode verarbeitet.';
$lang['StripePayments.request_three_d_secure_note'] = 'Wenn Sie ein Stripe-Benutzer mit Sitz in Indien sind, müssen Sie vor dem Speichern einer neuen Karte mit Stripe immer eine 3D Secure (3DS)-Authentifizierung durchführen.';
$lang['StripePayments.secret_key'] = 'API-Geheimschlüssel';
$lang['StripePayments.text_accounts_remaining'] = 'Verbleibende Konten: %1$s';
$lang['StripePayments.text_migrate_accounts'] = 'Sie können Zahlungskonten, die vom alten Stripe-Gateway extern gespeichert wurden, automatisch zu diesem Stripe Payments-Gateway migrieren. Konten, die nicht extern gespeichert sind, müssen durch manuelles Anlegen neuer Zahlungskonten migriert werden. Um Zeitüberschreitungen zu vermeiden, werden die Migrationen in Stapeln von %1$s durchgeführt. Führen Sie diesen Vorgang so oft wie nötig aus, um alle Zahlungskonten zu migrieren.';
$lang['StripePayments.tooltip_india_mandate_max_amount'] = 'Gemäß den Vorschriften der RBI muss der Kunde bei wiederkehrenden (außerhalb der Geschäftszeiten erfolgenden) Abbuchungen von indischen Karten, die diesen Betrag überschreiten, die Zahlung gesondert autorisieren.';
$lang['StripePayments.tooltip_publishable_key'] = 'Ihr API-Veröffentlichungsschlüssel ist entweder für den Live- oder den Testmodus bestimmt. Stellen Sie sicher, dass Sie den richtigen Schlüssel verwenden.';
$lang['StripePayments.tooltip_secret_key'] = 'Ihr API-Geheimschlüssel ist entweder für den Live- oder den Testmodus bestimmt. Stellen Sie sicher, dass Sie den richtigen Schlüssel verwenden.';
$lang['StripePayments.warning_migrate_accounts'] = 'Deinstallieren Sie das alte Stripe-Gateway nicht, bevor Sie dieses Migrationstool verwendet haben. Andernfalls wird das Tool unzugänglich.';
$lang['StripePayments.webhook'] = 'Stripe Webhook';
$lang['StripePayments.webhook_note'] = 'Es wird empfohlen, die folgende URL als Webhook für die Ereignisse "payment_intent" und "charge" in Ihrem Stripe-Konto zu konfigurieren.';

