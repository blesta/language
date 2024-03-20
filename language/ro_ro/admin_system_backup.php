<?php
/**
 * Admin System Backup
 *
 * @package blesta
 * @subpackage blesta.language.ro_ro
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemBackup.index.text_note'] = 'Aici puteți descărca o copie de rezervă a bazei de date Blesta pe computerul dvs. sau încărca automat o copie de rezervă pe serverul SFTP și/sau Amazon S3 configurat.';
$lang['AdminSystemBackup.index.field_downloadbackup'] = 'Descărcați Backup';
$lang['AdminSystemBackup.index.field_uploadbackup'] = 'Forțați backup-ul în afara site-ului';
$lang['AdminSystemBackup.index.boxtitle_index'] = 'La cerere';
$lang['AdminSystemBackup.index.page_title'] = 'Setări > Sistem > Backup > La cerere';
$lang['AdminSystemBackup.amazon.field.backupsubmit'] = 'Actualizarea setărilor';
$lang['AdminSystemBackup.amazon.field.amazons3_rate'] = 'Copie de rezervă în fiecare';
$lang['AdminSystemBackup.amazon.field.amazons3_bucket'] = 'Găleată';
$lang['AdminSystemBackup.amazon.field.amazons3_secretkey'] = 'Cheia secretă';
$lang['AdminSystemBackup.amazon.field.amazons3_accesskey'] = 'Cheie de acces';
$lang['AdminSystemBackup.amazon.field.amazons3_region'] = 'Regiune';
$lang['AdminSystemBackup.amazon.field.test'] = 'Testați aceste setări';
$lang['AdminSystemBackup.amazon.boxtitle_backup'] = 'Amazon S3';
$lang['AdminSystemBackup.amazon.page_title'] = 'Setări > Sistem > Backup > Amazon S3';
$lang['AdminSystemBackup.ftp.field.backupsubmit'] = 'Actualizarea setărilor';
$lang['AdminSystemBackup.ftp.field.ftp_rate'] = 'Copie de rezervă în fiecare';
$lang['AdminSystemBackup.ftp.field.ftp_path'] = 'Calea';
$lang['AdminSystemBackup.ftp.field.ftp_password'] = 'Parola';
$lang['AdminSystemBackup.ftp.field.ftp_username'] = 'Nume utilizator';
$lang['AdminSystemBackup.ftp.field.ftp_port'] = 'Port';
$lang['AdminSystemBackup.ftp.field.ftp_host'] = 'Nume gazdă';
$lang['AdminSystemBackup.ftp.field.test'] = 'Testați aceste setări';
$lang['AdminSystemBackup.ftp.boxtitle_backup'] = 'FTP securizat';
$lang['AdminSystemBackup.ftp.page_title'] = 'Setări > Sistem > Backup > FTP securizat';
$lang['AdminSystemBackup.!tooltip.amazons3_rate'] = 'Intervalul de frecvență pentru efectuarea acestei copii de rezervă.';
$lang['AdminSystemBackup.!tooltip.amazons3_bucket'] = 'Numele sensibil la majuscule și minuscule al găleții Amazon S3 în care se stochează copiile de rezervă.';
$lang['AdminSystemBackup.!tooltip.amazons3_secret_key'] = 'Cheia secretă a contului Amazon S3.';
$lang['AdminSystemBackup.!tooltip.amazons3_access_key'] = 'Cheia de acces la contul Amazon S3.';
$lang['AdminSystemBackup.!tooltip.amazons3_region'] = 'Regiunea Amazon S3 în care se stochează copiile de rezervă.';
$lang['AdminSystemBackup.!tooltip.ftp_rate'] = 'Intervalul de frecvență pentru efectuarea acestei copii de rezervă.';
$lang['AdminSystemBackup.!tooltip.ftp_path'] = 'Calea de destinație în care ar trebui să fie stocate copiile de rezervă pe serverul la distanță (de exemplu, "/backup/").';
$lang['AdminSystemBackup.!tooltip.ftp_password'] = 'Parola pentru contul FTP.';
$lang['AdminSystemBackup.!tooltip.ftp_username'] = 'Numele de utilizator pentru contul FTP.';
$lang['AdminSystemBackup.!tooltip.ftp_port'] = 'Numărul portului, de obicei 22. Acesta este același număr de port ca și cel utilizat pentru SSH.';
$lang['AdminSystemBackup.!tooltip.ftp_host'] = 'Numele de domeniu complet calificat al serverului de backup (de exemplu, "backup.domain.com").';
$lang['AdminSystemBackup.!error.backup_frequency'] = 'Frecvență de backup invalidă.';
$lang['AdminSystemBackup.!error.amazons3_test'] = 'Conexiunea AmazonS3 a eșuat! Vă rugăm să verificați setările și să încercați din nou. Rețineți că detaliile de conectare sunt sensibile la majuscule și minuscule.';
$lang['AdminSystemBackup.!error.sftp_test'] = 'Conexiunea SFTP a eșuat! Vă rugăm să verificați setările și să încercați din nou.';
$lang['AdminSystemBackup.!success.backup_uploaded'] = 'Copia de rezervă a fost trimisă cu succes către serviciile la distanță configurate!';
$lang['AdminSystemBackup.!success.amazons3_test'] = 'Conexiunea cu AmazonS3 a avut succes!';
$lang['AdminSystemBackup.!success.sftp_test'] = 'Conexiunea SFTP a avut succes!';
$lang['AdminSystemBackup.!success.backup_updated'] = 'Setările de backup au fost actualizate cu succes!';

