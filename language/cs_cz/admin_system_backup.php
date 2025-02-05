<?php
/**
 * Admin System Backup
 *
 * @package blesta
 * @subpackage blesta.language.cs_cz
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemBackup.index.text_note'] = 'Zde si můžete stáhnout zálohu databáze Blesta do počítače nebo ji automaticky nahrát na nakonfigurovaný server SFTP a/nebo Amazon S3.';
$lang['AdminSystemBackup.index.field_downloadbackup'] = 'Stáhnout zálohování';
$lang['AdminSystemBackup.index.field_uploadbackup'] = 'Vynucení zálohování mimo pracoviště';
$lang['AdminSystemBackup.index.boxtitle_index'] = 'Na vyžádání';
$lang['AdminSystemBackup.index.page_title'] = 'Nastavení > Systém > Zálohování > Na vyžádání';
$lang['AdminSystemBackup.amazon.field.backupsubmit'] = 'Aktualizace nastavení';
$lang['AdminSystemBackup.amazon.field.amazons3_rate'] = 'Zálohování každý';
$lang['AdminSystemBackup.amazon.field.amazons3_bucket'] = 'Kbelík';
$lang['AdminSystemBackup.amazon.field.amazons3_secretkey'] = 'Tajný klíč';
$lang['AdminSystemBackup.amazon.field.amazons3_accesskey'] = 'Přístupový klíč';
$lang['AdminSystemBackup.amazon.field.amazons3_region'] = 'Region';
$lang['AdminSystemBackup.amazon.field.test'] = 'Otestujte tato nastavení';
$lang['AdminSystemBackup.amazon.boxtitle_backup'] = 'Amazon S3';
$lang['AdminSystemBackup.amazon.page_title'] = 'Nastavení > Systém > Zálohování > Amazon S3';
$lang['AdminSystemBackup.ftp.field.backupsubmit'] = 'Aktualizace nastavení';
$lang['AdminSystemBackup.ftp.field.ftp_rate'] = 'Zálohování každý';
$lang['AdminSystemBackup.ftp.field.ftp_path'] = 'Cesta';
$lang['AdminSystemBackup.ftp.field.ftp_password'] = 'Heslo';
$lang['AdminSystemBackup.ftp.field.ftp_username'] = 'Uživatelské jméno';
$lang['AdminSystemBackup.ftp.field.ftp_port'] = 'Přístav';
$lang['AdminSystemBackup.ftp.field.ftp_host'] = 'Hostitelské jméno';
$lang['AdminSystemBackup.ftp.field.test'] = 'Otestujte tato nastavení';
$lang['AdminSystemBackup.ftp.boxtitle_backup'] = 'Zabezpečené FTP';
$lang['AdminSystemBackup.ftp.page_title'] = 'Nastavení > Systém > Zálohování > Zabezpečené FTP';
$lang['AdminSystemBackup.!tooltip.amazons3_rate'] = 'Interval frekvence provádění této zálohy.';
$lang['AdminSystemBackup.!tooltip.amazons3_bucket'] = 'Název kyblíku Amazon S3, do kterého se mají ukládat zálohy, s rozlišováním velkých a malých písmen.';
$lang['AdminSystemBackup.!tooltip.amazons3_secret_key'] = 'Tajný klíč účtu Amazon S3.';
$lang['AdminSystemBackup.!tooltip.amazons3_access_key'] = 'Přístupový klíč k účtu Amazon S3.';
$lang['AdminSystemBackup.!tooltip.amazons3_region'] = 'Oblast Amazon S3, do které se mají ukládat zálohy.';
$lang['AdminSystemBackup.!tooltip.ftp_rate'] = 'Interval frekvence provádění této zálohy.';
$lang['AdminSystemBackup.!tooltip.ftp_path'] = 'Cílová cesta, kam se mají zálohy na vzdáleném serveru ukládat (např. "/backup/").';
$lang['AdminSystemBackup.!tooltip.ftp_password'] = 'Heslo pro účet FTP.';
$lang['AdminSystemBackup.!tooltip.ftp_username'] = 'Uživatelské jméno účtu FTP.';
$lang['AdminSystemBackup.!tooltip.ftp_port'] = 'Číslo portu, obvykle 22. Jedná se o stejné číslo portu, jaké se používá pro SSH.';
$lang['AdminSystemBackup.!tooltip.ftp_host'] = 'Plně kvalifikovaný název domény zálohovacího serveru (např. "backup.domain.com").';
$lang['AdminSystemBackup.!error.backup_frequency'] = 'Nesprávná frekvence zálohování.';
$lang['AdminSystemBackup.!error.amazons3_test'] = 'Připojení k AmazonS3 selhalo! Zkontrolujte prosím nastavení a zkuste to znovu. Upozorňujeme, že u údajů o připojení se rozlišují velká a malá písmena.';
$lang['AdminSystemBackup.!error.sftp_test'] = 'Připojení SFTP se nezdařilo! Zkontrolujte prosím nastavení a zkuste to znovu.';
$lang['AdminSystemBackup.!success.backup_uploaded'] = 'Záloha byla úspěšně odeslána do nakonfigurovaných vzdálených služeb!';
$lang['AdminSystemBackup.!success.amazons3_test'] = 'Připojení k AmazonS3 proběhlo úspěšně!';
$lang['AdminSystemBackup.!success.sftp_test'] = 'Připojení SFTP proběhlo úspěšně!';
$lang['AdminSystemBackup.!success.backup_updated'] = 'Nastavení zálohování bylo úspěšně aktualizováno!';

