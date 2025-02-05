<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.index.health_excellent'] = 'Systemet er i god stand og ser ud til at fungere normalt.';
$lang['AdminMain.index.health_good'] = 'Overordnet set er systemet i god stand, men der er nogle ting, der kan kræve din opmærksomhed.';
$lang['AdminMain.index.health_fair'] = 'Der er nogle problemer, som påvirker systemets evne til at fungere normalt.';
$lang['AdminMain.index.health_poor'] = 'Der er alvorlige problemer, som påvirker systemets evne til at fungere normalt. De bør løses så hurtigt som muligt.';
$lang['AdminMain.index.boxtitle_feed'] = 'Systemstatus';
$lang['AdminMain.index.cron_serious'] = 'Cron har aldrig kørt.';
$lang['AdminMain.index.cron_minor'] = 'Cron har ikke kørt i de seneste 24 timer.';
$lang['AdminMain.index.cron_configure'] = 'Konfigurere?';
$lang['AdminMain.index.cron_task_stalled_minor'] = 'Der er en eller flere cron-opgaver, der har kørt i mere end %1$s minutter.';
$lang['AdminMain.index.cron_task_stalled_automation'] = 'Se automatiserede opgaver';
$lang['AdminMain.index.trial_minor'] = 'Din prøvelicens udløber den %1$s.';
$lang['AdminMain.index.trial_buy'] = 'Købe nu?';
$lang['AdminMain.index.invoices_minor'] = 'Fakturaer er ikke blevet oprettet automatisk via cron inden for de seneste 24 timer.';
$lang['AdminMain.index.invoices_configure'] = 'Konfigurere?';
$lang['AdminMain.index.backup_minor'] = 'Der er ikke kørt backups i de seneste 7 dage.';
$lang['AdminMain.index.docroot_minor'] = 'Den fundne dokumentrodsti stemmer ikke overens med indstillingen Root Web Directory.';
$lang['AdminMain.index.docroot_setting'] = 'Opdatering?';
$lang['AdminMain.index.system_dir_writable_minor'] = 'En systemmappe er ikke skrivbar.';
$lang['AdminMain.index.system_dir_writable_setting'] = 'Opdatering?';
$lang['AdminMain.index.log_files_owner_minor'] = 'Der er nogle logfiler, som ikke ejes af den samme bruger som webserveren.  Det skyldes normalt, at cron kører som en anden bruger end webserveren.';
$lang['AdminMain.index.error_reporting'] = 'errorReporting eller System.debug er aktiveret i /config/blesta.php. Medmindre du aktivt fejlsøger et problem, bør disse være deaktiveret. errorReporting bør være 0, System.debug bør være false.';
$lang['AdminMain.index.updates_forever'] = 'Din support og dine opdateringer er gode for evigt.';
$lang['AdminMain.index.updates_minor'] = 'Din support og dine opdateringer gælder til og med %1$s.';
$lang['AdminMain.index.updates_serious'] = 'Din support og dine opdateringer udløb den %1$s.';
$lang['AdminMain.index.updates_buy'] = 'Tilføj support og opdateringer?';
$lang['AdminMain.index.db_version_serious'] = 'Databaseversionen stemmer ikke overens med systemversionen.';
$lang['AdminMain.index.db_version_upgrade'] = 'Opgradering?';
$lang['AdminMain.index.php_version_serious'] = 'PHP-versionen opfylder ikke minimumskravene til systemet.';
$lang['AdminMain.index.php_version_requirements'] = 'Se minimumskrav';
$lang['AdminMain.index.sql_mysql_version_serious'] = 'MySQL-versionen opfylder ikke minimumskravene til systemet.';
$lang['AdminMain.index.sql_mysql_version_requirements'] = 'Se minimumskrav';
$lang['AdminMain.index.sql_mariadb_version_serious'] = 'MariaDB-versionen opfylder ikke minimumskravene til systemet.';
$lang['AdminMain.index.sql_mariadb_version_requirements'] = 'Se minimumskrav';
$lang['AdminMain.index.upload_dir_configure'] = 'Konfigurere?';
$lang['AdminMain.index.upload_dir'] = 'Stien til upload-biblioteket i dine indstillinger ligger i rodwebbiblioteket.  Den bør placeres over rodwebmappen for at sikre, at der aldrig opstår problemer med, at den er offentligt tilgængelig.';

