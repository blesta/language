<?php
/**
 * Admin System Backup
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemBackup.!success.backup_updated'] = 'Backup-indstillingerne blev opdateret med succes!';
$lang['AdminSystemBackup.!success.sftp_test'] = 'SFTP-forbindelsen var vellykket!';
$lang['AdminSystemBackup.!success.amazons3_test'] = 'AmazonS3-forbindelsen var en succes!';
$lang['AdminSystemBackup.!success.backup_uploaded'] = 'Sikkerhedskopien blev sendt til de konfigurerede fjerntjenester!';
$lang['AdminSystemBackup.!error.sftp_test'] = 'SFTP-forbindelsen mislykkedes! Tjek venligst dine indstillinger, og prøv igen.';
$lang['AdminSystemBackup.!error.amazons3_test'] = 'AmazonS3-forbindelsen mislykkedes! Tjek venligst dine indstillinger, og prøv igen. Bemærk, at der skelnes mellem store og små bogstaver i forbindelsesoplysningerne.';
$lang['AdminSystemBackup.!error.backup_frequency'] = 'Ugyldig backup-frekvens.';
$lang['AdminSystemBackup.!tooltip.ftp_host'] = 'Det fuldt kvalificerede domænenavn på backup-serveren (f.eks. "backup.domain.com").';
$lang['AdminSystemBackup.!tooltip.ftp_port'] = 'Portnummeret, normalt 22. Det er det samme portnummer, som bruges til SSH.';
$lang['AdminSystemBackup.!tooltip.ftp_username'] = 'Brugernavnet til FTP-kontoen.';
$lang['AdminSystemBackup.!tooltip.ftp_password'] = 'Adgangskoden til FTP-kontoen.';
$lang['AdminSystemBackup.!tooltip.ftp_path'] = 'Destinationsstien, hvor backups skal gemmes på fjernserveren (f.eks. "/backup/").';
$lang['AdminSystemBackup.!tooltip.ftp_rate'] = 'Frekvensintervallet for at udføre denne backup.';
$lang['AdminSystemBackup.!tooltip.amazons3_region'] = 'Den Amazon S3-region, hvor backups skal gemmes.';
$lang['AdminSystemBackup.!tooltip.amazons3_access_key'] = 'Adgangsnøglen til Amazon S3-kontoen.';
$lang['AdminSystemBackup.!tooltip.amazons3_secret_key'] = 'Den hemmelige nøgle til Amazon S3-kontoen.';
$lang['AdminSystemBackup.!tooltip.amazons3_bucket'] = 'Navnet på den Amazon S3-bucket, hvor backups skal gemmes, skelnes mellem store og små bogstaver.';
$lang['AdminSystemBackup.!tooltip.amazons3_rate'] = 'Frekvensintervallet for at udføre denne backup.';
$lang['AdminSystemBackup.ftp.page_title'] = 'Indstillinger > System > Sikkerhedskopiering > Sikker FTP';
$lang['AdminSystemBackup.ftp.boxtitle_backup'] = 'Sikker FTP';
$lang['AdminSystemBackup.ftp.field.test'] = 'Test disse indstillinger';
$lang['AdminSystemBackup.ftp.field.ftp_host'] = 'Værtsnavn';
$lang['AdminSystemBackup.ftp.field.ftp_port'] = 'Havn';
$lang['AdminSystemBackup.ftp.field.ftp_username'] = 'Brugernavn';
$lang['AdminSystemBackup.ftp.field.ftp_password'] = 'Adgangskode';
$lang['AdminSystemBackup.ftp.field.ftp_path'] = 'Sti';
$lang['AdminSystemBackup.ftp.field.ftp_rate'] = 'Backup hver';
$lang['AdminSystemBackup.ftp.field.backupsubmit'] = 'Opdater indstillinger';
$lang['AdminSystemBackup.amazon.page_title'] = 'Indstillinger > System > Sikkerhedskopiering > Amazon S3';
$lang['AdminSystemBackup.amazon.boxtitle_backup'] = 'Amazon S3';
$lang['AdminSystemBackup.amazon.field.test'] = 'Test disse indstillinger';
$lang['AdminSystemBackup.amazon.field.amazons3_region'] = 'Region';
$lang['AdminSystemBackup.amazon.field.amazons3_accesskey'] = 'Adgangsnøgle';
$lang['AdminSystemBackup.amazon.field.amazons3_secretkey'] = 'Hemmelig nøgle';
$lang['AdminSystemBackup.amazon.field.amazons3_bucket'] = 'Spand';
$lang['AdminSystemBackup.amazon.field.amazons3_rate'] = 'Backup hver';
$lang['AdminSystemBackup.amazon.field.backupsubmit'] = 'Opdater indstillinger';
$lang['AdminSystemBackup.index.page_title'] = 'Indstillinger > System > Backup > On Demand';
$lang['AdminSystemBackup.index.boxtitle_index'] = 'På forespørgsel';
$lang['AdminSystemBackup.index.field_uploadbackup'] = 'Fremtving offsite-backup';
$lang['AdminSystemBackup.index.field_downloadbackup'] = 'Download sikkerhedskopi';
$lang['AdminSystemBackup.index.text_note'] = 'Her kan du downloade en backup af din Blesta-database til din computer eller automatisk uploade en backup til din konfigurerede SFTP- og/eller Amazon S3-server.';

