<?php
/**
 * Admin System Backup
 *
 * @package blesta
 * @subpackage blesta.language.it_it
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemBackup.index.text_note'] = 'Qui è possibile scaricare un backup del database Blesta sul proprio computer o caricare automaticamente un backup sul server SFTP e/o Amazon S3 configurato.';
$lang['AdminSystemBackup.index.field_downloadbackup'] = 'Scarica Backup';
$lang['AdminSystemBackup.index.field_uploadbackup'] = 'Forzare il backup fuori sede';
$lang['AdminSystemBackup.index.boxtitle_index'] = 'Su richiesta';
$lang['AdminSystemBackup.index.page_title'] = 'Impostazioni > Sistema > Backup > Su richiesta';
$lang['AdminSystemBackup.amazon.field.backupsubmit'] = 'Aggiornamento delle impostazioni';
$lang['AdminSystemBackup.amazon.field.amazons3_rate'] = 'Backup ogni';
$lang['AdminSystemBackup.amazon.field.amazons3_bucket'] = 'Secchio';
$lang['AdminSystemBackup.amazon.field.amazons3_secretkey'] = 'Chiave segreta';
$lang['AdminSystemBackup.amazon.field.amazons3_accesskey'] = 'Chiave di accesso';
$lang['AdminSystemBackup.amazon.field.amazons3_region'] = 'Regione';
$lang['AdminSystemBackup.amazon.field.test'] = 'Testate queste impostazioni';
$lang['AdminSystemBackup.amazon.boxtitle_backup'] = 'Amazon S3';
$lang['AdminSystemBackup.amazon.page_title'] = 'Impostazioni > Sistema > Backup > Amazon S3';
$lang['AdminSystemBackup.ftp.field.backupsubmit'] = 'Aggiornamento delle impostazioni';
$lang['AdminSystemBackup.ftp.field.ftp_rate'] = 'Backup ogni';
$lang['AdminSystemBackup.ftp.field.ftp_path'] = 'Percorso';
$lang['AdminSystemBackup.ftp.field.ftp_password'] = 'Password';
$lang['AdminSystemBackup.ftp.field.ftp_username'] = 'Nome utente';
$lang['AdminSystemBackup.ftp.field.ftp_port'] = 'Porto';
$lang['AdminSystemBackup.ftp.field.ftp_host'] = 'Nome host';
$lang['AdminSystemBackup.ftp.field.test'] = 'Testate queste impostazioni';
$lang['AdminSystemBackup.ftp.boxtitle_backup'] = 'FTP sicuro';
$lang['AdminSystemBackup.ftp.page_title'] = 'Impostazioni > Sistema > Backup > FTP sicuro';
$lang['AdminSystemBackup.!tooltip.amazons3_rate'] = 'L\'intervallo di frequenza per l\'esecuzione del backup.';
$lang['AdminSystemBackup.!tooltip.amazons3_bucket'] = 'Il nome, sensibile alle maiuscole, del bucket Amazon S3 in cui archiviare i backup.';
$lang['AdminSystemBackup.!tooltip.amazons3_secret_key'] = 'La chiave segreta dell\'account Amazon S3.';
$lang['AdminSystemBackup.!tooltip.amazons3_access_key'] = 'La chiave di accesso dell\'account Amazon S3.';
$lang['AdminSystemBackup.!tooltip.amazons3_region'] = 'La regione Amazon S3 in cui archiviare i backup.';
$lang['AdminSystemBackup.!tooltip.ftp_rate'] = 'L\'intervallo di frequenza per l\'esecuzione del backup.';
$lang['AdminSystemBackup.!tooltip.ftp_path'] = 'Il percorso di destinazione in cui i backup devono essere archiviati sul server remoto (ad esempio, "/backup/").';
$lang['AdminSystemBackup.!tooltip.ftp_password'] = 'La password dell\'account FTP.';
$lang['AdminSystemBackup.!tooltip.ftp_username'] = 'Il nome utente dell\'account FTP.';
$lang['AdminSystemBackup.!tooltip.ftp_port'] = 'Il numero di porta, di solito 22. Si tratta dello stesso numero di porta utilizzato per SSH.';
$lang['AdminSystemBackup.!tooltip.ftp_host'] = 'Il nome di dominio completamente qualificato del server di backup (ad esempio, "backup.domain.com").';
$lang['AdminSystemBackup.!error.backup_frequency'] = 'Frequenza di backup non valida.';
$lang['AdminSystemBackup.!error.amazons3_test'] = 'La connessione ad AmazonS3 non è riuscita! Controllare le impostazioni e riprovare. Si noti che i dettagli della connessione sono sensibili alle maiuscole e alle minuscole.';
$lang['AdminSystemBackup.!error.sftp_test'] = 'La connessione SFTP non è riuscita! Controllare le impostazioni e riprovare.';
$lang['AdminSystemBackup.!success.backup_uploaded'] = 'Il backup è stato inviato con successo ai servizi remoti configurati!';
$lang['AdminSystemBackup.!success.amazons3_test'] = 'La connessione ad AmazonS3 è avvenuta con successo!';
$lang['AdminSystemBackup.!success.sftp_test'] = 'La connessione SFTP è riuscita!';
$lang['AdminSystemBackup.!success.backup_updated'] = 'Le impostazioni di backup sono state aggiornate con successo!';

