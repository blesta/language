<?php
/**
 * Admin System Backup
 *
 * @package blesta
 * @subpackage blesta.language.pl_pl
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemBackup.index.text_note'] = 'W tym miejscu można pobrać kopię zapasową bazy danych Blesta na komputer lub automatycznie przesłać kopię zapasową na skonfigurowany serwer SFTP i/lub Amazon S3.';
$lang['AdminSystemBackup.index.field_downloadbackup'] = 'Pobierz Kopia zapasowa';
$lang['AdminSystemBackup.index.field_uploadbackup'] = 'Wymuś tworzenie kopii zapasowych poza siedzibą firmy';
$lang['AdminSystemBackup.index.boxtitle_index'] = 'Na żądanie';
$lang['AdminSystemBackup.index.page_title'] = 'Ustawienia > System > Kopia zapasowa > Na żądanie';
$lang['AdminSystemBackup.amazon.field.backupsubmit'] = 'Ustawienia aktualizacji';
$lang['AdminSystemBackup.amazon.field.amazons3_rate'] = 'Kopia zapasowa każdego';
$lang['AdminSystemBackup.amazon.field.amazons3_bucket'] = 'Wiadro';
$lang['AdminSystemBackup.amazon.field.amazons3_secretkey'] = 'Tajny klucz';
$lang['AdminSystemBackup.amazon.field.amazons3_accesskey'] = 'Klucz dostępu';
$lang['AdminSystemBackup.amazon.field.amazons3_region'] = 'Region';
$lang['AdminSystemBackup.amazon.field.test'] = 'Przetestuj te ustawienia';
$lang['AdminSystemBackup.amazon.boxtitle_backup'] = 'Amazon S3';
$lang['AdminSystemBackup.amazon.page_title'] = 'Ustawienia > System > Kopia zapasowa > Amazon S3';
$lang['AdminSystemBackup.ftp.field.backupsubmit'] = 'Ustawienia aktualizacji';
$lang['AdminSystemBackup.ftp.field.ftp_rate'] = 'Kopia zapasowa każdego';
$lang['AdminSystemBackup.ftp.field.ftp_path'] = 'Ścieżka';
$lang['AdminSystemBackup.ftp.field.ftp_password'] = 'Hasło';
$lang['AdminSystemBackup.ftp.field.ftp_username'] = 'Nazwa użytkownika';
$lang['AdminSystemBackup.ftp.field.ftp_port'] = 'Port';
$lang['AdminSystemBackup.ftp.field.ftp_host'] = 'Nazwa hosta';
$lang['AdminSystemBackup.ftp.field.test'] = 'Przetestuj te ustawienia';
$lang['AdminSystemBackup.ftp.boxtitle_backup'] = 'Bezpieczny FTP';
$lang['AdminSystemBackup.ftp.page_title'] = 'Ustawienia > System > Kopia zapasowa > Bezpieczny FTP';
$lang['AdminSystemBackup.!tooltip.amazons3_rate'] = 'Częstotliwość wykonywania tej kopii zapasowej.';
$lang['AdminSystemBackup.!tooltip.amazons3_bucket'] = 'Uwzględniająca wielkość liter nazwa zasobnika Amazon S3, w którym mają być przechowywane kopie zapasowe.';
$lang['AdminSystemBackup.!tooltip.amazons3_secret_key'] = 'Tajny klucz konta Amazon S3.';
$lang['AdminSystemBackup.!tooltip.amazons3_access_key'] = 'Klucz dostępu do konta Amazon S3.';
$lang['AdminSystemBackup.!tooltip.amazons3_region'] = 'Region Amazon S3, w którym mają być przechowywane kopie zapasowe.';
$lang['AdminSystemBackup.!tooltip.ftp_rate'] = 'Częstotliwość wykonywania tej kopii zapasowej.';
$lang['AdminSystemBackup.!tooltip.ftp_path'] = 'Ścieżka docelowa, w której kopie zapasowe powinny być przechowywane na zdalnym serwerze (np. "/backup/").';
$lang['AdminSystemBackup.!tooltip.ftp_password'] = 'Hasło do konta FTP.';
$lang['AdminSystemBackup.!tooltip.ftp_username'] = 'Nazwa użytkownika dla konta FTP.';
$lang['AdminSystemBackup.!tooltip.ftp_port'] = 'Numer portu, zwykle 22. Jest to ten sam numer portu, który jest używany dla SSH.';
$lang['AdminSystemBackup.!tooltip.ftp_host'] = 'W pełni kwalifikowana nazwa domeny serwera kopii zapasowych (np. "backup.domain.com").';
$lang['AdminSystemBackup.!error.backup_frequency'] = 'Nieprawidłowa częstotliwość tworzenia kopii zapasowych.';
$lang['AdminSystemBackup.!error.amazons3_test'] = 'Połączenie AmazonS3 nie powiodło się! Sprawdź ustawienia i spróbuj ponownie. Należy pamiętać, że w szczegółach połączenia rozróżniana jest wielkość liter.';
$lang['AdminSystemBackup.!error.sftp_test'] = 'Połączenie SFTP nie powiodło się! Sprawdź ustawienia i spróbuj ponownie.';
$lang['AdminSystemBackup.!success.backup_uploaded'] = 'Kopia zapasowa została pomyślnie wysłana do skonfigurowanych usług zdalnych!';
$lang['AdminSystemBackup.!success.amazons3_test'] = 'Połączenie z AmazonS3 powiodło się!';
$lang['AdminSystemBackup.!success.sftp_test'] = 'Połączenie SFTP powiodło się!';
$lang['AdminSystemBackup.!success.backup_updated'] = 'Ustawienia kopii zapasowej zostały pomyślnie zaktualizowane!';

