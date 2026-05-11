<?php
/**
 * System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SystemUpgrade.environment.os_pass'] = 'Das Betriebssystem: Linux erkannt.';
$lang['SystemUpgrade.environment.os_fail'] = 'Die Selbstaktualisierung wird nur in Linux-Umgebungen unterstützt.';
$lang['SystemUpgrade.environment.exec_pass'] = 'Shell-Zugriff: Die Funktion exec() ist verfügbar.';
$lang['SystemUpgrade.environment.exec_fail'] = 'Shell-Zugriff: Die Funktion exec() ist deaktiviert oder nicht verfügbar.';
$lang['SystemUpgrade.environment.unzip_pass'] = 'Archiv-Extraktion: Der Befehl unzip ist verfügbar.';
$lang['SystemUpgrade.environment.unzip_fail'] = 'Archiv-Extraktion: Der Befehl unzip ist nicht verfügbar. Bitte installieren Sie unzip.';
$lang['SystemUpgrade.environment.mysqldump_pass'] = 'Datenbank-Backup: Der Befehl mysqldump ist verfügbar.';
$lang['SystemUpgrade.environment.mysqldump_fail'] = 'Datenbank-Backup: Der Befehl mysqldump ist nicht verfügbar. Bitte installieren Sie mysql-client tools.';
$lang['SystemUpgrade.environment.tar_pass'] = 'Dateisicherung: Der Befehl tar ist verfügbar.';
$lang['SystemUpgrade.environment.tar_fail'] = 'Dateisicherung: Der Befehl tar ist nicht verfügbar. Bitte installieren Sie tar.';
$lang['SystemUpgrade.environment.rsync_pass'] = 'Dateisynchronisation: Der Befehl rsync ist verfügbar.';
$lang['SystemUpgrade.environment.rsync_fail'] = 'Dateisynchronisation: Der Befehl rsync ist nicht verfügbar. Bitte installieren Sie rsync.';
$lang['SystemUpgrade.environment.setsid_pass'] = 'Prozessabtrennung: Der Befehl setsid ist verfügbar.';
$lang['SystemUpgrade.environment.setsid_warn'] = 'Prozessabtrennung: Der Befehl setsid ist nicht verfügbar. Das Upgrade erfordert möglicherweise einen manuellen Befehl über SSH, um in gesperrten Hosting-Umgebungen abgeschlossen zu werden.';
$lang['SystemUpgrade.environment.writable_pass'] = 'Dateisystem: Das Installationsverzeichnis ist beschreibbar.';
$lang['SystemUpgrade.environment.writable_fail'] = 'Dateisystem: Das Installationsverzeichnis ist für den Webserver nicht beschreibbar.';
$lang['SystemUpgrade.environment.ownership_pass'] = 'Dateibesitz: Alle wichtigen Verzeichnisse sind Eigentum des Webserver-Benutzers.';
$lang['SystemUpgrade.environment.ownership_fail'] = 'Dateibesitz: %1$s Schlüsselverzeichnisse sind nicht im Besitz des Webserver-Benutzers.';
$lang['SystemUpgrade.environment.disk_pass'] = 'Speicherplatz: %1$s verfügbar.';
$lang['SystemUpgrade.environment.disk_warn'] = 'Speicherplatz: Nur %1$s verfügbar, geschätzter Bedarf %2$s.';
$lang['SystemUpgrade.environment.config_pass'] = 'Konfiguration: blesta.php ist beschreibbar.';
$lang['SystemUpgrade.environment.config_fail'] = 'Konfiguration: blesta.php ist nicht beschreibbar.';
$lang['SystemUpgrade.maintenance_reason'] = 'Das System wird derzeit aufgerüstet. Bitte schauen Sie in Kürze wieder vorbei.';
$lang['SystemUpgrade.!error.upgrade_locked'] = 'Ein Upgrade ist bereits im Gange (gestartet von der Mitarbeiter-ID %1$s unter %2$s).';
$lang['SystemUpgrade.!error.lock_stale'] = 'Ein früherer Aktualisierungsvorgang scheint unerwartet abgebrochen worden zu sein. Sie können die Sperre aufheben und es erneut versuchen.';
$lang['SystemUpgrade.!error.backup_db_failed'] = 'Datenbanksicherung fehlgeschlagen. Das Upgrade kann ohne eine zuverlässige Sicherung nicht durchgeführt werden.';
$lang['SystemUpgrade.!error.backup_files_failed'] = 'Dateisicherung fehlgeschlagen. Das Upgrade kann ohne eine zuverlässige Sicherung nicht durchgeführt werden.';
$lang['SystemUpgrade.!error.download_failed'] = 'Der Download der Freigabedatei ist fehlgeschlagen.';
$lang['SystemUpgrade.!error.hash_mismatch'] = 'Die Integritätsprüfung der heruntergeladenen Datei ist fehlgeschlagen. Die Datei könnte beschädigt sein.';
$lang['SystemUpgrade.!error.signature_missing'] = 'Die Freigabe enthält keine kryptografische Signatur. Die Authentizität kann nicht überprüft werden.';
$lang['SystemUpgrade.!error.signature_invalid'] = 'Die Überprüfung der Freigabesignatur ist fehlgeschlagen. Die Datei könnte manipuliert worden sein.';
$lang['SystemUpgrade.!error.extraction_failed'] = 'Das Release-Archiv konnte nicht entpackt werden.';
$lang['SystemUpgrade.!error.upgrader_failed'] = 'Der Upgrade-Prozess konnte nicht vorbereitet oder gestartet werden.';
$lang['SystemUpgrade.!error.launch_not_detected'] = 'Der Upgrade-Prozess im Hintergrund wurde nicht gestartet. Dies kann in Hosting-Umgebungen vorkommen (CloudLinux/CageFS, einige PHP-FPM-Konfigurationen), in denen es dem Webserver nicht gestattet ist, lang laufende Kindprozesse zu trennen. Das Upgrade kann durch Ausführen des folgenden Befehls über SSH abgeschlossen werden.';
$lang['SystemUpgrade.!error.upgrader_crashed'] = 'Der Upgrade-Prozess scheint unerwartet abgebrochen worden zu sein. Prüfen Sie die nachstehenden Sicherungspfade für die Wiederherstellung.';
$lang['SystemUpgrade.!error.license_invalid'] = 'Ihr Support- und Update-Abonnement muss für Haupt- oder Nebenversions-Upgrades aktiv sein.';
$lang['SystemUpgrade.!error.php_version'] = 'Die Zielversion erfordert PHP %1$s oder eine neuere Version. Sie verwenden PHP %2$s.';
$lang['SystemUpgrade.!error.environment_fail'] = 'Eine oder mehrere Umgebungsprüfungen sind fehlgeschlagen. Bitte beheben Sie die Probleme, bevor Sie das Upgrade durchführen.';

