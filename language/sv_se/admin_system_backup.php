<?php
/**
 * Admin System Backup
 *
 * @package blesta
 * @subpackage blesta.language.sv_se
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemBackup.index.text_note'] = 'Här kan du ladda ner en säkerhetskopia av din Blesta-databas till din dator eller automatiskt ladda upp en säkerhetskopia till din konfigurerade SFTP- och/eller Amazon S3-server.';
$lang['AdminSystemBackup.index.field_downloadbackup'] = 'Ladda ner Backup';
$lang['AdminSystemBackup.index.field_uploadbackup'] = 'Tvinga fram extern säkerhetskopiering';
$lang['AdminSystemBackup.index.boxtitle_index'] = 'På begäran';
$lang['AdminSystemBackup.index.page_title'] = 'Inställningar > System > Säkerhetskopiering > På begäran';
$lang['AdminSystemBackup.amazon.field.backupsubmit'] = 'Uppdatera inställningar';
$lang['AdminSystemBackup.amazon.field.amazons3_rate'] = 'Säkerhetskopiera varje';
$lang['AdminSystemBackup.amazon.field.amazons3_bucket'] = 'Hink';
$lang['AdminSystemBackup.amazon.field.amazons3_secretkey'] = 'Hemlig nyckel';
$lang['AdminSystemBackup.amazon.field.amazons3_accesskey'] = 'Nyckel för åtkomst';
$lang['AdminSystemBackup.amazon.field.amazons3_region'] = 'Region';
$lang['AdminSystemBackup.amazon.field.test'] = 'Testa dessa inställningar';
$lang['AdminSystemBackup.amazon.boxtitle_backup'] = 'Amazon S3';
$lang['AdminSystemBackup.amazon.page_title'] = 'Inställningar > System > Säkerhetskopiering > Amazon S3';
$lang['AdminSystemBackup.ftp.field.backupsubmit'] = 'Uppdatera inställningar';
$lang['AdminSystemBackup.ftp.field.ftp_rate'] = 'Säkerhetskopiera varje';
$lang['AdminSystemBackup.ftp.field.ftp_path'] = 'Väg';
$lang['AdminSystemBackup.ftp.field.ftp_password'] = 'Lösenord';
$lang['AdminSystemBackup.ftp.field.ftp_username'] = 'Användarnamn';
$lang['AdminSystemBackup.ftp.field.ftp_port'] = 'Hamn';
$lang['AdminSystemBackup.ftp.field.ftp_host'] = 'Värdnamn';
$lang['AdminSystemBackup.ftp.field.test'] = 'Testa dessa inställningar';
$lang['AdminSystemBackup.ftp.boxtitle_backup'] = 'Säker FTP';
$lang['AdminSystemBackup.ftp.page_title'] = 'Inställningar > System > Säkerhetskopiering > Säker FTP';
$lang['AdminSystemBackup.!tooltip.amazons3_rate'] = 'Frekvensintervall för att utföra denna säkerhetskopiering.';
$lang['AdminSystemBackup.!tooltip.amazons3_bucket'] = 'Det skiftlägeskänsliga namnet på den Amazon S3-bucket där säkerhetskopiorna ska lagras.';
$lang['AdminSystemBackup.!tooltip.amazons3_secret_key'] = 'Amazon S3-kontots hemliga nyckel.';
$lang['AdminSystemBackup.!tooltip.amazons3_access_key'] = 'Amazon S3-kontots åtkomstnyckel.';
$lang['AdminSystemBackup.!tooltip.amazons3_region'] = 'Amazon S3-regionen där säkerhetskopior ska lagras.';
$lang['AdminSystemBackup.!tooltip.ftp_rate'] = 'Frekvensintervall för att utföra denna säkerhetskopiering.';
$lang['AdminSystemBackup.!tooltip.ftp_path'] = 'Destinationssökvägen där säkerhetskopior ska lagras på fjärrservern (t.ex. "/backup/").';
$lang['AdminSystemBackup.!tooltip.ftp_password'] = 'Lösenordet för FTP-kontot.';
$lang['AdminSystemBackup.!tooltip.ftp_username'] = 'Användarnamnet för FTP-kontot.';
$lang['AdminSystemBackup.!tooltip.ftp_port'] = 'Portnumret, vanligtvis 22. Detta är samma portnummer som används för SSH.';
$lang['AdminSystemBackup.!tooltip.ftp_host'] = 'Det fullständigt kvalificerade domännamnet för backupservern (t.ex. "backup.domain.com").';
$lang['AdminSystemBackup.!error.backup_frequency'] = 'Ogiltig frekvens för säkerhetskopiering.';
$lang['AdminSystemBackup.!error.amazons3_test'] = 'Anslutningen till AmazonS3 misslyckades! Kontrollera dina inställningar och försök igen. Observera att anslutningsuppgifter är skiftlägeskänsliga.';
$lang['AdminSystemBackup.!error.sftp_test'] = 'SFTP-anslutningen misslyckades! Kontrollera dina inställningar och försök igen.';
$lang['AdminSystemBackup.!success.backup_uploaded'] = 'Säkerhetskopian skickades framgångsrikt till de konfigurerade fjärrtjänsterna!';
$lang['AdminSystemBackup.!success.amazons3_test'] = 'Anslutningen till AmazonS3 lyckades!';
$lang['AdminSystemBackup.!success.sftp_test'] = 'SFTP-anslutningen lyckades!';
$lang['AdminSystemBackup.!success.backup_updated'] = 'Inställningarna för säkerhetskopiering har uppdaterats!';

