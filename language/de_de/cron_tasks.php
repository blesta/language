<?php
/**
 * Cron Tasks
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['CronTasks.crontask.name.license_validation'] = 'Lizenz-Validierung';
$lang['CronTasks.crontask.description.transition_quotations'] = 'Markieren Sie Angebote, die das Gültigkeitsdatum überschritten haben, als abgelaufen';
$lang['CronTasks.crontask.name.transition_quotations'] = 'Überleitung Zitate';
$lang['CronTasks.crontask.description.unsuspend_services'] = 'Ausgesetzte Dienste, die bezahlt wurden, werden in dem gewählten Intervall wieder freigegeben.';
$lang['CronTasks.crontask.name.unsuspend_services'] = 'Dienstleistungen aussetzen';
$lang['CronTasks.crontask.description.cleanup_logs'] = 'Alte Gateway-, Modul- und andere Protokolle werden je nach ihren Aufbewahrungseinstellungen zum angegebenen Zeitpunkt täglich rotiert.';
$lang['CronTasks.crontask.name.cleanup_logs'] = 'Logs aufräumen';
$lang['CronTasks.crontask.description.deliver_reports'] = 'Ausgangs-, Rechnungserstellungs-, Steuerverbindlichkeits- und andere Berichte werden täglich zur angegebenen Zeit geliefert.';
$lang['CronTasks.crontask.name.deliver_reports'] = 'Berichte liefern';
$lang['CronTasks.crontask.description.exchange_rates'] = 'Die Wechselkurse werden in dem angegebenen Intervall aktualisiert. Es wird nicht empfohlen, diese Funktion mehr als zweimal täglich auszuführen, da die Gefahr besteht, dass sie blockiert wird.';
$lang['CronTasks.crontask.name.exchange_rates'] = 'Aktualisierte Wechselkurse';
$lang['CronTasks.crontask.description.suspend_services'] = 'Überfällige Leistungen werden täglich zum angegebenen Zeitpunkt ausgesetzt.';
$lang['CronTasks.crontask.name.suspend_services'] = 'Dienste aussetzen';
$lang['CronTasks.crontask.description.backups_sftp'] = 'SFTP-Backups werden unter Systemeinstellungen > Backup > Secure FTP geplant.';
$lang['CronTasks.crontask.name.backups_sftp'] = 'SFTP-Sicherungen';
$lang['CronTasks.crontask.description.backups_amazons3'] = 'Amazon S3-Sicherungen werden unter Systemeinstellungen > Sicherung > Amazon S3 geplant.';
$lang['CronTasks.crontask.name.backups_amazons3'] = 'Amazon S3-Sicherungen';
$lang['CronTasks.crontask.description.deliver_invoices'] = 'Rechnungen, die für die Zustellung vorgesehen sind, werden in dem ausgewählten Intervall versandt.';
$lang['CronTasks.crontask.name.deliver_invoices'] = 'Rechnungen zustellen';
$lang['CronTasks.crontask.description.card_expiration_reminders'] = 'Für Kreditkarten, die in diesem Monat zu dem angegebenen Zeitpunkt ablaufen, wird am 15. des Monats eine Erinnerung verschickt.';
$lang['CronTasks.crontask.name.card_expiration_reminders'] = 'Kartenablauferinnerungen 15. des Monats';
$lang['CronTasks.crontask.description.cancel_scheduled_services'] = 'Leistungen, für die ein zukünftiger Kündigungstermin festgelegt wurde, werden in dem gewählten Intervall entfernt.';
$lang['CronTasks.crontask.name.cancel_scheduled_services'] = 'Geplante Dienste stornieren';
$lang['CronTasks.crontask.description.provision_pending_services'] = 'Bezahlte ausstehende Dienste werden in dem gewählten Intervall aktiviert.';
$lang['CronTasks.crontask.name.provision_pending_services'] = 'Rückstellung Bezahlte ausstehende Leistungen';
$lang['CronTasks.crontask.description.process_renewing_services'] = 'Erneuerungsdienste, die mit Modulen verbunden sind, werden in dem gewählten Intervall erneuert.';
$lang['CronTasks.crontask.name.process_renewing_services'] = 'Erneuerungen von Prozessdienstleistungen';
$lang['CronTasks.crontask.description.process_service_changes'] = 'Bezahlte, in der Warteschlange stehende Dienständerungen (z. B. Upgrades) werden in dem ausgewählten Intervall verarbeitet.';
$lang['CronTasks.crontask.name.process_service_changes'] = 'Änderungen im Prozessdienst';
$lang['CronTasks.crontask.description.apply_payments'] = 'Lose Gutschriften werden automatisch in dem gewählten Intervall auf offene Rechnungen angewendet.';
$lang['CronTasks.crontask.name.apply_payments'] = 'Zahlungen auf offene Rechnungen anwenden';
$lang['CronTasks.crontask.description.payment_reminders'] = 'Zahlungserinnerungen und Mahnungen werden täglich zur angegebenen Zeit verschickt.';
$lang['CronTasks.crontask.name.payment_reminders'] = 'Zahlungserinnerungen';
$lang['CronTasks.crontask.description.autodebit'] = 'Zahlungskonten, die für die automatische Abbuchung ausgewählt wurden, werden täglich zum angegebenen Zeitpunkt zur Begleichung offener Rechnungen herangezogen.';
$lang['CronTasks.crontask.name.autodebit'] = 'Automatische Abbuchung';
$lang['CronTasks.crontask.description.apply_invoice_late_fees'] = 'Wendet Verzugsgebühren auf offene Rechnungen an, die eine konfigurierte Anzahl von Tagen nach Fälligkeit liegen.';
$lang['CronTasks.crontask.name.apply_invoice_late_fees'] = 'Verspätungszuschläge für Rechnungen';
$lang['CronTasks.crontask.description.create_invoice'] = 'Wiederkehrende Rechnungen und sich erneuernde Dienste werden über diese Aufgabe fakturiert, die einmal täglich zur angegebenen Zeit ausgeführt wird.';
$lang['CronTasks.crontask.name.create_invoice'] = 'Rechnung erstellen';
$lang['CronTasks.task_type.module'] = 'Modul';
$lang['CronTasks.task_type.plugin'] = 'Plugin';
$lang['CronTasks.task_type.system'] = 'System';
$lang['CronTasks.!error.type.format'] = 'Ungültiger Cron-Aufgabentyp. Muss entweder Zeit oder Intervall sein.';
$lang['CronTasks.!error.time.format'] = 'Die Uhrzeit hat ein ungültiges Format.';
$lang['CronTasks.!error.interval.format'] = 'Intervall muss eine Zahl sein, die für Minuten steht.';
$lang['CronTasks.!error.enabled.length'] = 'Die aktivierte Länge darf 1 Zeichen nicht überschreiten.';
$lang['CronTasks.!error.enabled.format'] = 'aktiviert muss eine Zahl sein.';
$lang['CronTasks.!error.is_lang.length'] = 'Die Länge von is_lang darf 1 Zeichen nicht überschreiten.';
$lang['CronTasks.!error.is_lang.format'] = 'is_lang muss eine Zahl sein.';
$lang['CronTasks.!error.name.empty'] = 'Bitte geben Sie einen Namen ein.';
$lang['CronTasks.!error.id.exists'] = 'Ungültige Cron-Task-ID.';
$lang['CronTasks.!error.run_id.exists'] = 'Ungültige Cron-Task-Lauf-ID.';
$lang['CronTasks.!error.dir.length'] = 'Die Länge des Verzeichnisses darf 64 Zeichen nicht überschreiten.';
$lang['CronTasks.!error.task_type.format'] = 'Ungültiger Aufgabentyp. Muss Modul, Plugin oder System sein.';
$lang['CronTasks.!error.key.length'] = 'Die Länge des Schlüssels der Cron-Aufgabe darf 64 Zeichen nicht überschreiten.';
$lang['CronTasks.!error.key.unique'] = 'Der angegebene Cron-Task-Schlüssel ist bereits belegt.';
$lang['CronTasks.crontask.description.delete_expired_password_reset_tokens'] = 'Entfernt alle Kennwortrücksetzungs-Tokens, die das Verfallsdatum überschritten haben, aus dem System.';
$lang['CronTasks.crontask.name.delete_expired_password_reset_tokens'] = 'Abgelaufene Token zum Zurücksetzen des Passworts löschen';
$lang['CronTasks.crontask.description.low_balance_notifications'] = 'Sendet eine Benachrichtigung an alle Benutzer, deren Guthaben unter den konfigurierten Schwellenwert gefallen ist.';
$lang['CronTasks.crontask.name.low_balance_notifications'] = 'Benachrichtigungen bei niedrigem Saldo';

