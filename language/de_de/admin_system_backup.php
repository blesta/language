<?php
/**
 * Admin System Backup
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemBackup.index.text_note'] = 'Hier können Sie ein Backup Ihrer Blesta-Datenbank auf Ihren Computer herunterladen oder automatisch ein Backup auf Ihren konfigurierten SFTP- und/oder Amazon S3-Server hochladen.';
$lang['AdminSystemBackup.index.field_downloadbackup'] = 'Backup herunterladen';
$lang['AdminSystemBackup.index.field_uploadbackup'] = 'Offsite-Sicherung erzwingen';
$lang['AdminSystemBackup.index.boxtitle_index'] = 'Abrufbar';
$lang['AdminSystemBackup.index.page_title'] = 'Einstellungen > System > Sicherung > Bei Bedarf';
$lang['AdminSystemBackup.amazon.field.backupsubmit'] = 'Einstellungen aktualisieren';
$lang['AdminSystemBackup.amazon.field.amazons3_rate'] = 'Sicherung jeder';
$lang['AdminSystemBackup.amazon.field.amazons3_bucket'] = 'Eimer';
$lang['AdminSystemBackup.amazon.field.amazons3_secretkey'] = 'Geheimer Schlüssel';
$lang['AdminSystemBackup.amazon.field.amazons3_accesskey'] = 'Zugangsschlüssel';
$lang['AdminSystemBackup.amazon.field.amazons3_region'] = 'Region';
$lang['AdminSystemBackup.amazon.field.test'] = 'Testen Sie diese Einstellungen';
$lang['AdminSystemBackup.amazon.boxtitle_backup'] = 'Amazon S3';
$lang['AdminSystemBackup.amazon.page_title'] = 'Einstellungen > System > Sicherung > Amazon S3';
$lang['AdminSystemBackup.ftp.field.backupsubmit'] = 'Einstellungen aktualisieren';
$lang['AdminSystemBackup.ftp.field.ftp_rate'] = 'Sicherung jeder';
$lang['AdminSystemBackup.ftp.field.ftp_path'] = 'Pfad';
$lang['AdminSystemBackup.ftp.field.ftp_password'] = 'Passwort';
$lang['AdminSystemBackup.ftp.field.ftp_username'] = 'Benutzername';
$lang['AdminSystemBackup.ftp.field.ftp_port'] = 'Hafen';
$lang['AdminSystemBackup.ftp.field.ftp_host'] = 'Hostname';
$lang['AdminSystemBackup.ftp.field.test'] = 'Testen Sie diese Einstellungen';
$lang['AdminSystemBackup.ftp.boxtitle_backup'] = 'Sicheres FTP';
$lang['AdminSystemBackup.ftp.page_title'] = 'Einstellungen > System > Sicherung > Secure FTP';
$lang['AdminSystemBackup.!tooltip.amazons3_rate'] = 'Das Intervall, in dem diese Sicherung durchgeführt werden soll.';
$lang['AdminSystemBackup.!tooltip.amazons3_bucket'] = 'Der in Groß- und Kleinschreibung unterschiedene Name des Amazon S3-Buckets, in dem Backups gespeichert werden sollen.';
$lang['AdminSystemBackup.!tooltip.amazons3_secret_key'] = 'Der geheime Schlüssel des Amazon S3-Kontos.';
$lang['AdminSystemBackup.!tooltip.amazons3_access_key'] = 'Der Zugangsschlüssel für das Amazon S3-Konto.';
$lang['AdminSystemBackup.!tooltip.amazons3_region'] = 'Die Amazon S3-Region, in der die Backups gespeichert werden sollen.';
$lang['AdminSystemBackup.!tooltip.ftp_rate'] = 'Das Intervall, in dem diese Sicherung durchgeführt werden soll.';
$lang['AdminSystemBackup.!tooltip.ftp_path'] = 'Der Zielpfad, in dem die Backups auf dem entfernten Server gespeichert werden sollen (z. B. "/backup/").';
$lang['AdminSystemBackup.!tooltip.ftp_password'] = 'Das Passwort für das FTP-Konto.';
$lang['AdminSystemBackup.!tooltip.ftp_username'] = 'Der Benutzername für das FTP-Konto.';
$lang['AdminSystemBackup.!tooltip.ftp_port'] = 'Die Portnummer, normalerweise 22. Dies ist die gleiche Portnummer, die auch für SSH verwendet wird.';
$lang['AdminSystemBackup.!tooltip.ftp_host'] = 'Der vollqualifizierte Domänenname des Backup-Servers (z. B. "backup.domain.com").';
$lang['AdminSystemBackup.!error.backup_frequency'] = 'Ungültige Sicherungsfrequenz.';
$lang['AdminSystemBackup.!error.amazons3_test'] = 'Die AmazonS3-Verbindung ist fehlgeschlagen! Bitte überprüfen Sie Ihre Einstellungen und versuchen Sie es erneut. Beachten Sie die Groß- und Kleinschreibung bei den Verbindungsdetails.';
$lang['AdminSystemBackup.!error.sftp_test'] = 'Die SFTP-Verbindung ist fehlgeschlagen! Bitte überprüfen Sie Ihre Einstellungen und versuchen Sie es erneut.';
$lang['AdminSystemBackup.!success.backup_uploaded'] = 'Das Backup wurde erfolgreich an die konfigurierten Remote Services gesendet!';
$lang['AdminSystemBackup.!success.amazons3_test'] = 'Die AmazonS3-Verbindung war erfolgreich!';
$lang['AdminSystemBackup.!success.sftp_test'] = 'Die SFTP-Verbindung war erfolgreich!';
$lang['AdminSystemBackup.!success.backup_updated'] = 'Die Backup-Einstellungen wurden erfolgreich aktualisiert!';

