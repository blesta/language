<?php
/**
 * System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.nl_nl
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SystemUpgrade.!error.backup_db_failed'] = 'Database back-up mislukt. De upgrade kan niet doorgaan zonder een betrouwbare back-up.';
$lang['SystemUpgrade.!error.backup_files_failed'] = 'Bestandsback-up mislukt. De upgrade kan niet doorgaan zonder een betrouwbare back-up.';
$lang['SystemUpgrade.!error.download_failed'] = 'Download van het releasebestand mislukt.';
$lang['SystemUpgrade.!error.environment_fail'] = 'Een of meer omgevingscontroles zijn mislukt. Los de problemen op voordat u de upgrade uitvoert.';
$lang['SystemUpgrade.!error.extraction_failed'] = 'Het uitpakken van het release-archief is mislukt.';
$lang['SystemUpgrade.!error.hash_mismatch'] = 'Integriteitscontrole gedownloade bestand mislukt. Het bestand kan beschadigd zijn.';
$lang['SystemUpgrade.!error.launch_not_detected'] = 'Het upgradeproces op de achtergrond is niet gestart. Dit kan gebeuren op jailed hostingomgevingen (CloudLinux/CageFS, sommige PHP-FPM configuraties) waar de webserver langlopende kindprocessen niet mag loskoppelen. De upgrade kan worden voltooid door het onderstaande commando via SSH uit te voeren.';
$lang['SystemUpgrade.!error.license_invalid'] = 'Uw abonnement op ondersteuning en updates moet actief zijn voor grote of kleine versie-upgrades.';
$lang['SystemUpgrade.!error.lock_stale'] = 'Een eerder upgradeproces lijkt onverwacht te zijn gestopt. U kunt het slot wissen om het opnieuw te proberen.';
$lang['SystemUpgrade.!error.php_version'] = 'De doelversie vereist PHP %1$s of nieuwer. U gebruikt PHP %2$s.';
$lang['SystemUpgrade.!error.signature_invalid'] = 'Verificatie handtekening bij vrijgave mislukt. Er kan met het bestand geknoeid zijn.';
$lang['SystemUpgrade.!error.signature_missing'] = 'De release bevat geen cryptografische handtekening. Kan authenticiteit niet verifiëren.';
$lang['SystemUpgrade.!error.upgrade_locked'] = 'Er is al een upgrade aan de gang (gestart door personeels-ID %1$s op %2$s).';
$lang['SystemUpgrade.!error.upgrader_crashed'] = 'Het upgradeproces lijkt onverwacht te zijn gestopt. Controleer de onderstaande back-uppaden voor herstel.';
$lang['SystemUpgrade.!error.upgrader_failed'] = 'Het upgradeproces is niet voorbereid of gestart.';
$lang['SystemUpgrade.environment.config_fail'] = 'Configuratie: blesta.php is niet beschrijfbaar.';
$lang['SystemUpgrade.environment.config_pass'] = 'Configuratie: blesta.php is beschrijfbaar.';
$lang['SystemUpgrade.environment.disk_pass'] = 'Schijfruimte: %1$s beschikbaar.';
$lang['SystemUpgrade.environment.disk_warn'] = 'Schijfruimte: Slechts %1$s beschikbaar, naar schatting %2$s nodig.';
$lang['SystemUpgrade.environment.exec_fail'] = 'Shell toegang: exec() functie is uitgeschakeld of niet beschikbaar.';
$lang['SystemUpgrade.environment.exec_pass'] = 'Shell toegang: exec() functie is beschikbaar.';
$lang['SystemUpgrade.environment.mysqldump_fail'] = 'Database back-up: mysqldump commando is niet beschikbaar. Installeer de mysql-client tools.';
$lang['SystemUpgrade.environment.mysqldump_pass'] = 'Database back-up: mysqldump commando is beschikbaar.';
$lang['SystemUpgrade.environment.os_fail'] = 'Self-upgrade wordt alleen ondersteund op Linux-omgevingen.';
$lang['SystemUpgrade.environment.os_pass'] = 'Besturingssysteem: Linux gedetecteerd.';
$lang['SystemUpgrade.environment.ownership_fail'] = 'Bestandseigendom: %1$s sleuteldirectories zijn geen eigendom van de webservergebruiker.';
$lang['SystemUpgrade.environment.ownership_pass'] = 'Bestandseigendom: Alle belangrijke mappen zijn eigendom van de webservergebruiker.';
$lang['SystemUpgrade.environment.rsync_fail'] = 'Bestandssynchronisatie: rsync commando is niet beschikbaar. Installeer rsync.';
$lang['SystemUpgrade.environment.rsync_pass'] = 'Bestandssynchronisatie: rsync commando is beschikbaar.';
$lang['SystemUpgrade.environment.setsid_pass'] = 'Proces ontkoppeling: setsid commando is beschikbaar.';
$lang['SystemUpgrade.environment.setsid_warn'] = 'Proces ontkoppeling: setsid commando is niet beschikbaar. De upgrade vereist mogelijk een handmatig commando via SSH om te voltooien op jailed hostingomgevingen.';
$lang['SystemUpgrade.environment.tar_fail'] = 'Bestandsback-up: tar commando is niet beschikbaar. Installeer tar.';
$lang['SystemUpgrade.environment.tar_pass'] = 'Bestandsback-up: tar commando is beschikbaar.';
$lang['SystemUpgrade.environment.unzip_fail'] = 'Archief uitpakken: het commando unzip is niet beschikbaar. Installeer unzip.';
$lang['SystemUpgrade.environment.unzip_pass'] = 'Archief uitpakken: unzip commando is beschikbaar.';
$lang['SystemUpgrade.environment.writable_fail'] = 'Bestandssysteem: Installatiedirectory is niet beschrijfbaar door de webserver.';
$lang['SystemUpgrade.environment.writable_pass'] = 'Bestandssysteem: Installatiedirectory is beschrijfbaar.';
$lang['SystemUpgrade.maintenance_reason'] = 'Het systeem wordt momenteel geüpgraded. Kom binnenkort terug.';

