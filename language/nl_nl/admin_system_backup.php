<?php
/**
 * Admin System Backup
 *
 * @package blesta
 * @subpackage blesta.language.nl_nl
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemBackup.index.text_note'] = 'Hier kunt u een back-up van uw Blesta database downloaden naar uw computer of automatisch uploaden naar uw geconfigureerde SFTP en/of Amazon S3 server.';
$lang['AdminSystemBackup.index.field_downloadbackup'] = 'Back-up downloaden';
$lang['AdminSystemBackup.index.field_uploadbackup'] = 'Offsite back-up forceren';
$lang['AdminSystemBackup.index.boxtitle_index'] = 'Op aanvraag';
$lang['AdminSystemBackup.index.page_title'] = 'Instellingen > Systeem > Back-up > Op verzoek';
$lang['AdminSystemBackup.amazon.field.backupsubmit'] = 'Instellingen bijwerken';
$lang['AdminSystemBackup.amazon.field.amazons3_rate'] = 'Elke back-up';
$lang['AdminSystemBackup.amazon.field.amazons3_bucket'] = 'Emmer';
$lang['AdminSystemBackup.amazon.field.amazons3_secretkey'] = 'Geheime sleutel';
$lang['AdminSystemBackup.amazon.field.amazons3_accesskey'] = 'Toegangssleutel';
$lang['AdminSystemBackup.amazon.field.amazons3_region'] = 'Regio';
$lang['AdminSystemBackup.amazon.field.test'] = 'Test deze instellingen';
$lang['AdminSystemBackup.amazon.boxtitle_backup'] = 'Amazon S3';
$lang['AdminSystemBackup.amazon.page_title'] = 'Instellingen > Systeem > Back-up > Amazon S3';
$lang['AdminSystemBackup.ftp.field.backupsubmit'] = 'Instellingen bijwerken';
$lang['AdminSystemBackup.ftp.field.ftp_rate'] = 'Elke back-up';
$lang['AdminSystemBackup.ftp.field.ftp_path'] = 'Pad';
$lang['AdminSystemBackup.ftp.field.ftp_password'] = 'Wachtwoord';
$lang['AdminSystemBackup.ftp.field.ftp_username'] = 'Gebruikersnaam';
$lang['AdminSystemBackup.ftp.field.ftp_port'] = 'Haven';
$lang['AdminSystemBackup.ftp.field.ftp_host'] = 'Hostnaam';
$lang['AdminSystemBackup.ftp.field.test'] = 'Test deze instellingen';
$lang['AdminSystemBackup.ftp.boxtitle_backup'] = 'Beveiligde FTP';
$lang['AdminSystemBackup.ftp.page_title'] = 'Instellingen > Systeem > Back-up > Beveiligde FTP';
$lang['AdminSystemBackup.!tooltip.amazons3_rate'] = 'Het frequentie-interval om deze back-up uit te voeren.';
$lang['AdminSystemBackup.!tooltip.amazons3_bucket'] = 'De hoofdlettergevoelige naam van de Amazon S3 emmer waaronder back-ups moeten worden opgeslagen.';
$lang['AdminSystemBackup.!tooltip.amazons3_secret_key'] = 'De geheime sleutel van de Amazon S3-account.';
$lang['AdminSystemBackup.!tooltip.amazons3_access_key'] = 'De toegangssleutel voor het Amazon S3-account.';
$lang['AdminSystemBackup.!tooltip.amazons3_region'] = 'De Amazon S3-regio waar de back-ups moeten worden opgeslagen.';
$lang['AdminSystemBackup.!tooltip.ftp_rate'] = 'Het frequentie-interval om deze back-up uit te voeren.';
$lang['AdminSystemBackup.!tooltip.ftp_path'] = 'Het bestemmingspad waar back-ups moeten worden opgeslagen op de externe server (bijvoorbeeld "/backup/").';
$lang['AdminSystemBackup.!tooltip.ftp_password'] = 'Het wachtwoord voor de FTP account.';
$lang['AdminSystemBackup.!tooltip.ftp_username'] = 'De gebruikersnaam voor de FTP account.';
$lang['AdminSystemBackup.!tooltip.ftp_port'] = 'Het poortnummer, meestal 22. Dit is hetzelfde poortnummer als wordt gebruikt voor SSH.';
$lang['AdminSystemBackup.!tooltip.ftp_host'] = 'De volledig gekwalificeerde domeinnaam van de back-upserver (bijvoorbeeld "backup.domain.com").';
$lang['AdminSystemBackup.!error.backup_frequency'] = 'Ongeldige back-upfrequentie.';
$lang['AdminSystemBackup.!error.amazons3_test'] = 'De verbinding met AmazonS3 is mislukt! Controleer je instellingen en probeer het opnieuw. Let op: verbindingsgegevens zijn hoofdlettergevoelig.';
$lang['AdminSystemBackup.!error.sftp_test'] = 'De SFTP-verbinding is mislukt! Controleer uw instellingen en probeer het opnieuw.';
$lang['AdminSystemBackup.!success.backup_uploaded'] = 'De back-up is met succes naar de geconfigureerde externe services verzonden!';
$lang['AdminSystemBackup.!success.amazons3_test'] = 'De AmazonS3-verbinding was succesvol!';
$lang['AdminSystemBackup.!success.sftp_test'] = 'SFTP-verbinding was succesvol!';
$lang['AdminSystemBackup.!success.backup_updated'] = 'De back-upinstellingen zijn succesvol bijgewerkt!';

