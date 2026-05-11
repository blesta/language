<?php
/**
 * Admin System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemUpgrade.index.no_results'] = 'Upgrade-Optionen sind zur Zeit nicht verfügbar.';
$lang['AdminSystemUpgrade.index.field_upgradesubmit'] = 'Einstellungen aktualisieren';
$lang['AdminSystemUpgrade.index.boxtitle_upgrade'] = 'Upgrade-Optionen';
$lang['AdminSystemUpgrade.index.page_title'] = 'Einstellungen > System > Upgrade-Optionen';
$lang['AdminSystemUpgrade.upgrade.btn_abort'] = 'Abbrechen';
$lang['AdminSystemUpgrade.upgrade.btn_continue'] = 'Weiter mit Upgrade';
$lang['AdminSystemUpgrade.upgrade.label_missing'] = 'Fehlende Dateien';
$lang['AdminSystemUpgrade.upgrade.label_modified'] = 'Geänderte Dateien';
$lang['AdminSystemUpgrade.upgrade.modified_files_title'] = 'Geänderte Kerndateien';
$lang['AdminSystemUpgrade.upgrade.modified_files'] = '%1$s Kerndatei(en) gegenüber der ursprünglichen Version geändert wurde(n). Diese Änderungen werden während des Upgrades überschrieben. Möchten Sie fortfahren?';
$lang['AdminSystemUpgrade.upgrade.no_checksums'] = 'Das Dateimanifest für Ihre aktuelle Installation enthält keine Prüfsummen. Die Überprüfung der Dateiintegrität wird übersprungen. Möchten Sie mit dem Upgrade fortfahren?';
$lang['AdminSystemUpgrade.upgrade.no_manifest'] = 'Es wurde kein Dateimanifest für Ihre aktuelle Installation gefunden. Die Überprüfung der Dateiintegrität wird übersprungen. Möchten Sie mit dem Upgrade fortfahren?';
$lang['AdminSystemUpgrade.upgrade.started'] = 'Upgrade-Prozess gestartet. Sie können diese Seite schließen - das Upgrade wird im Hintergrund fortgesetzt. Kehren Sie auf diese Seite zurück, um den Fortschritt zu überprüfen.';
$lang['AdminSystemUpgrade.index.failure_db_version_mismatch'] = 'Die Datenbankversion hat nicht den erwarteten Wert erreicht. Das Upgrade wurde möglicherweise auf halbem Weg durch eine Version gestoppt, so dass einige Schemaänderungen übernommen wurden.';
$lang['AdminSystemUpgrade.index.failure_db_version_after'] = 'Aktuell: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_expected'] = 'Wird nach dem Upgrade erwartet: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_before'] = 'Vor dem Upgrade: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_label'] = 'Datenbank-Version:';
$lang['AdminSystemUpgrade.index.failure_backup_label'] = 'Verfügbare Backups:';
$lang['AdminSystemUpgrade.index.failure_explanation'] = 'Das Upgrade wurde nicht erfolgreich abgeschlossen. Ihr System befindet sich möglicherweise in einem inkonsistenten Zustand, und einige Datenbankänderungen der fehlgeschlagenen Version sind möglicherweise bereits übernommen worden. Eine erneute Ausführung des Upgrades wird wahrscheinlich anders ausfallen. Es wird empfohlen, vor dem erneuten Versuch eine Datenbanksicherung zu erstellen. Die Sicherungen wurden vor dem Beginn des Upgrades erstellt und sind unten aufgeführt. Stellen Sie diese Sicherungen entweder manuell wieder her oder eröffnen Sie ein Support-Ticket, um Unterstützung zu erhalten.';
$lang['AdminSystemUpgrade.index.failure_heading'] = 'Was ist als nächstes zu tun?';
$lang['AdminSystemUpgrade.index.recovery_instructions'] = 'Führen Sie die folgenden Befehle auf Ihrem Server aus, um eine Sicherung wiederherzustellen:';
$lang['AdminSystemUpgrade.index.recovery_files_path'] = 'Datei-Backup: %1$s';
$lang['AdminSystemUpgrade.index.recovery_db_path'] = 'Sicherung der Datenbank: %1$s';
$lang['AdminSystemUpgrade.index.heading_recovery'] = 'Anweisungen zur Wiederherstellung';
$lang['AdminSystemUpgrade.index.confirm_delete_backup'] = 'Sind Sie sicher, dass Sie diese Sicherung löschen wollen? Dies kann nicht rückgängig gemacht werden.';
$lang['AdminSystemUpgrade.index.btn_delete'] = 'Löschen';
$lang['AdminSystemUpgrade.index.btn_download'] = 'Herunterladen';
$lang['AdminSystemUpgrade.index.backup_files'] = 'Dateien';
$lang['AdminSystemUpgrade.index.backup_database'] = 'Datenbank';
$lang['AdminSystemUpgrade.index.backup_col_date'] = 'Datum';
$lang['AdminSystemUpgrade.index.backup_col_size'] = 'Größe';
$lang['AdminSystemUpgrade.index.backup_col_type'] = 'Typ';
$lang['AdminSystemUpgrade.index.backup_col_file'] = 'Datei';
$lang['AdminSystemUpgrade.index.no_backups'] = 'Keine Upgrade-Backups gefunden.';
$lang['AdminSystemUpgrade.index.heading_backups'] = 'Upgrade-Sicherungen';
$lang['AdminSystemUpgrade.index.btn_clear_lock'] = 'Schloss löschen';
$lang['AdminSystemUpgrade.index.lock_stale'] = 'Ein früherer Aktualisierungsvorgang scheint unerwartet abgebrochen worden zu sein.';
$lang['AdminSystemUpgrade.index.lock_active'] = 'Derzeit wird ein Upgrade durchgeführt, das unter %1$s gestartet wurde.';
$lang['AdminSystemUpgrade.index.btn_retry'] = 'Wiederholung';
$lang['AdminSystemUpgrade.index.btn_dashboard'] = 'Zurück zum Dashboard';
$lang['AdminSystemUpgrade.index.upgrade_failed'] = 'Upgrade fehlgeschlagen.';
$lang['AdminSystemUpgrade.index.upgrade_complete'] = 'Upgrade erfolgreich abgeschlossen!';
$lang['AdminSystemUpgrade.index.step_finalize'] = 'Fertigstellen';
$lang['AdminSystemUpgrade.index.step_migrate'] = 'Datenbankmigrationen durchführen';
$lang['AdminSystemUpgrade.index.step_replace'] = 'Ersetzen von Dateien';
$lang['AdminSystemUpgrade.index.step_extract'] = 'Dateien extrahieren';
$lang['AdminSystemUpgrade.index.step_verify'] = 'Überprüfung der Integrität';
$lang['AdminSystemUpgrade.index.step_download'] = 'Freigabe herunterladen';
$lang['AdminSystemUpgrade.index.step_backup_files'] = 'Datei-Backup';
$lang['AdminSystemUpgrade.index.step_backup_db'] = 'Sicherung der Datenbank';
$lang['AdminSystemUpgrade.index.step_maintenance'] = 'Aktivieren des Wartungsmodus';
$lang['AdminSystemUpgrade.index.step_preflight'] = 'Kontrollen vor dem Flug';
$lang['AdminSystemUpgrade.index.heading_progress'] = 'Fortschritte beim Upgrade';
$lang['AdminSystemUpgrade.index.select_version'] = 'Wählen Sie eine Version aus, auf die Sie aktualisieren möchten:';
$lang['AdminSystemUpgrade.index.upgrade_warning'] = 'Dadurch werden der Wartungsmodus aktiviert, Backups erstellt, die neue Version heruntergeladen und installiert und Datenbankmigrationen durchgeführt. Dieser Prozess kann nicht unterbrochen werden, wenn er einmal begonnen hat.';
$lang['AdminSystemUpgrade.index.btn_upgrade'] = 'Jetzt aktualisieren';
$lang['AdminSystemUpgrade.index.clean_stale_files_note'] = 'Löscht Dateien in Core-Verzeichnissen, die nicht im Manifest der neuen Version enthalten sind. Lassen Sie das Kontrollkästchen deaktiviert, wenn Sie nicht sicher sind, dass keine benutzerdefinierten Dateien in Core-Verzeichnissen vorhanden sind.';
$lang['AdminSystemUpgrade.index.clean_stale_files'] = 'Veraltete Kerndateien nach Upgrade entfernen';
$lang['AdminSystemUpgrade.index.skip_integrity_check'] = 'Datei-Integritätsprüfung überspringen';
$lang['AdminSystemUpgrade.index.no_support'] = 'Ihr Abonnement für Support &amp; Updates ist nicht aktiv. Es sind nur Patch-Updates verfügbar.';
$lang['AdminSystemUpgrade.index.requires_support'] = 'Erfordert ein aktives Abonnement für Support und Updates.';
$lang['AdminSystemUpgrade.index.changelog_link'] = 'Changelog anzeigen';
$lang['AdminSystemUpgrade.index.release_date'] = 'Freigegeben: %1$s';
$lang['AdminSystemUpgrade.index.upgrade_latest'] = 'Vollständiges Upgrade: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.upgrade_patch'] = 'Patch-Update: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.heading_available'] = 'Verfügbare Updates';
$lang['AdminSystemUpgrade.index.command_copied'] = 'Kopiert';
$lang['AdminSystemUpgrade.index.btn_copy_command'] = 'Kopieren';
$lang['AdminSystemUpgrade.index.launch_failed_instruction'] = 'Führen Sie den folgenden Befehl über SSH aus (als der Benutzer, der Eigentümer der Blesta-Installation ist), um das Upgrade abzuschließen. Lassen Sie diese Seite geöffnet - der Fortschritt wird hier weiter aktualisiert, während der Befehl ausgeführt wird.';
$lang['AdminSystemUpgrade.index.launch_failed_title'] = 'Upgrade im Hintergrund wurde nicht gestartet';
$lang['AdminSystemUpgrade.index.environment_badge_warn'] = '%1$d Warnung';
$lang['AdminSystemUpgrade.index.environment_badge_fail'] = '%1$d fehlgeschlagen';
$lang['AdminSystemUpgrade.index.environment_fail'] = 'Einige Prüfungen sind fehlgeschlagen. Bitte beheben Sie die folgenden Probleme vor dem Upgrade.';
$lang['AdminSystemUpgrade.index.environment_pass'] = 'Alle Prüfungen wurden bestanden. Ihr System ist bereit für die Selbstaktualisierung.';
$lang['AdminSystemUpgrade.index.heading_environment'] = 'Umwelt Status';
$lang['AdminSystemUpgrade.index.up_to_date'] = 'Ihre Installation ist auf dem neuesten Stand.';
$lang['AdminSystemUpgrade.index.btn_check'] = 'Nach Updates suchen';
$lang['AdminSystemUpgrade.index.never_checked'] = 'Nie geprüft';
$lang['AdminSystemUpgrade.index.last_checked'] = 'Zuletzt geprüft: %1$s';
$lang['AdminSystemUpgrade.index.current_version'] = 'Sie führen Blesta %1$s';
$lang['AdminSystemUpgrade.index.heading_current'] = 'Aktuelle Version';

