<?php
/**
 * Admin System Backup
 *
 * @package blesta
 * @subpackage blesta.language.fi_fi
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemBackup.!error.amazons3_test'] = 'Amazon S3 -yhteyden muodostaminen epäonnistui! Tarkista asetuksesi ja yritä uudelleen. Huomaa, että yhteystiedoissa otetaan huomioon kirjainkoko.';
$lang['AdminSystemBackup.!error.backup_frequency'] = 'Varmuuskopiointiväli ei ole sallittu.';
$lang['AdminSystemBackup.!error.sftp_test'] = 'SFTP-yhteyden muodostaminen epäonnistui! Tarkista asetuksesi ja yritä uudelleen.';
$lang['AdminSystemBackup.!success.amazons3_test'] = 'Amazon S3 -yhteys muodostettiin onnistuneesti!';
$lang['AdminSystemBackup.!success.backup_updated'] = 'Varmuuskopiointiasetukset päivitettiin onnistuneesti!';
$lang['AdminSystemBackup.!success.backup_uploaded'] = 'Varmuuskopio lähetettiin onnistuneesti määritettyihin etäpalveluihin!';
$lang['AdminSystemBackup.!success.sftp_test'] = 'SFTP-yhteys muodostettiin onnistuneesti!';
$lang['AdminSystemBackup.!tooltip.amazons3_access_key'] = 'Amazon S3 -tilin käyttöavain.';
$lang['AdminSystemBackup.!tooltip.amazons3_bucket'] = 'Varmuuskopioiden tallennuspaikkana toimivan Amazon S3 -säilytyspaikan nimi, jossa kirjainkoko otetaan huomioon.';
$lang['AdminSystemBackup.!tooltip.amazons3_rate'] = 'Tämän varmuuskopioinnin suorittamisen aikaväli.';
$lang['AdminSystemBackup.!tooltip.amazons3_region'] = 'Amazon S3 -alue, johon varmuuskopiot tallennetaan.';
$lang['AdminSystemBackup.!tooltip.amazons3_secret_key'] = 'Amazon S3 -tilin salainen avain.';
$lang['AdminSystemBackup.!tooltip.ftp_host'] = 'Varmuuskopiointipalvelimen täydellinen verkkotunnus (esim. "backup.domain.com").';
$lang['AdminSystemBackup.!tooltip.ftp_password'] = 'FTP-tilin salasana.';
$lang['AdminSystemBackup.!tooltip.ftp_path'] = 'Kohdepolku, johon varmuuskopiot tulisi tallentaa etäpalvelimelle (esim. "/backup/").';
$lang['AdminSystemBackup.!tooltip.ftp_port'] = 'Portin numero, yleensä 22. Tämä on sama portin numero kuin SSH:ssa käytetään.';
$lang['AdminSystemBackup.!tooltip.ftp_rate'] = 'Tämän varmuuskopioinnin suorittamisen aikaväli.';
$lang['AdminSystemBackup.!tooltip.ftp_username'] = 'FTP-tilin käyttäjätunnus.';
$lang['AdminSystemBackup.amazon.boxtitle_backup'] = 'Amazon S3';
$lang['AdminSystemBackup.amazon.field.amazons3_accesskey'] = 'Pikanäppäin';
$lang['AdminSystemBackup.amazon.field.amazons3_bucket'] = 'Kauha';
$lang['AdminSystemBackup.amazon.field.amazons3_rate'] = 'Varmuuskopioi joka';
$lang['AdminSystemBackup.amazon.field.amazons3_region'] = 'Alue';
$lang['AdminSystemBackup.amazon.field.amazons3_secretkey'] = 'Salainen avain';
$lang['AdminSystemBackup.amazon.field.backupsubmit'] = 'Päivitä asetukset';
$lang['AdminSystemBackup.amazon.field.test'] = 'Kokeile näitä asetuksia';
$lang['AdminSystemBackup.amazon.page_title'] = 'Asetukset &gt; Järjestelmä &gt; Varmuuskopiointi &gt; Amazon S3';
$lang['AdminSystemBackup.ftp.boxtitle_backup'] = 'Suojattu FTP';
$lang['AdminSystemBackup.ftp.field.backupsubmit'] = 'Päivitä asetukset';
$lang['AdminSystemBackup.ftp.field.ftp_host'] = 'Isäntänimi';
$lang['AdminSystemBackup.ftp.field.ftp_password'] = 'Salasana';
$lang['AdminSystemBackup.ftp.field.ftp_path'] = 'Polku';
$lang['AdminSystemBackup.ftp.field.ftp_port'] = 'Satama';
$lang['AdminSystemBackup.ftp.field.ftp_rate'] = 'Varmuuskopioi joka';
$lang['AdminSystemBackup.ftp.field.ftp_username'] = 'Käyttäjätunnus';
$lang['AdminSystemBackup.ftp.field.test'] = 'Kokeile näitä asetuksia';
$lang['AdminSystemBackup.ftp.page_title'] = 'Asetukset &gt; Järjestelmä &gt; Varmuuskopiointi &gt; Suojattu FTP';
$lang['AdminSystemBackup.index.boxtitle_index'] = 'On Demand';
$lang['AdminSystemBackup.index.field_downloadbackup'] = 'Lataa varmuuskopio';
$lang['AdminSystemBackup.index.field_uploadbackup'] = 'Pakota ulkoinen varmuuskopiointi';
$lang['AdminSystemBackup.index.page_title'] = 'Asetukset &gt; Järjestelmä &gt; Varmuuskopiointi &gt; Tarvittaessa';
$lang['AdminSystemBackup.index.text_note'] = 'Täältä voit ladata Blesta-tietokannan varmuuskopion tietokoneellesi tai lähettää varmuuskopion automaattisesti määritettyyn SFTP- ja/tai Amazon S3 -palvelimeen.';

