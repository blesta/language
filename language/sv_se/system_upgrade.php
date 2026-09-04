<?php
/**
 * System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.sv_se
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SystemUpgrade.!error.backup_db_failed'] = 'Säkerhetskopiering av databas misslyckades. Uppgraderingen kan inte fortsätta utan en tillförlitlig säkerhetskopia.';
$lang['SystemUpgrade.!error.backup_files_failed'] = 'Säkerhetskopiering av fil misslyckades. Uppgraderingen kan inte fortsätta utan en tillförlitlig säkerhetskopia.';
$lang['SystemUpgrade.!error.download_failed'] = 'Misslyckades med att ladda ner releasefilen.';
$lang['SystemUpgrade.!error.environment_fail'] = 'En eller flera miljökontroller misslyckades. Lös problemen innan du uppgraderar.';
$lang['SystemUpgrade.!error.extraction_failed'] = 'Misslyckades med att extrahera releasearkivet.';
$lang['SystemUpgrade.!error.hash_mismatch'] = 'Kontrollen av den nedladdade filens integritet misslyckades. Filen kan vara skadad.';
$lang['SystemUpgrade.!error.launch_not_detected'] = 'Bakgrundsuppgraderingsprocessen startade inte. Detta kan inträffa i jailed hosting-miljöer (CloudLinux/CageFS, vissa PHP-FPM-konfigurationer) där webbservern inte tillåts ta bort långvariga underordnade processer. Uppgraderingen kan slutföras genom att köra kommandot nedan via SSH.';
$lang['SystemUpgrade.!error.license_invalid'] = 'Din prenumeration på support och uppdateringar måste vara aktiv för större eller mindre versionsuppgraderingar.';
$lang['SystemUpgrade.!error.lock_stale'] = 'En tidigare uppgraderingsprocess verkar ha stoppats oväntat. Du kan rensa låset för att försöka igen.';
$lang['SystemUpgrade.!error.php_version'] = 'Målversionen kräver PHP %1$s eller nyare. Du kör PHP %2$s.';
$lang['SystemUpgrade.!error.signature_invalid'] = 'Verifieringen av signaturen misslyckades. Filen kan ha manipulerats.';
$lang['SystemUpgrade.!error.signature_missing'] = 'Utgåvan innehåller inte en kryptografisk signatur. Det går inte att verifiera äktheten.';
$lang['SystemUpgrade.!error.upgrade_locked'] = 'En uppgradering pågår redan (startad av personal-ID %1$s på %2$s).';
$lang['SystemUpgrade.!error.upgrader_crashed'] = 'Uppgraderingsprocessen verkar ha stoppats oväntat. Kontrollera säkerhetskopieringssökvägarna nedan för återställning.';
$lang['SystemUpgrade.!error.upgrader_failed'] = 'Misslyckades med att förbereda eller starta uppgraderingsprocessen.';
$lang['SystemUpgrade.environment.config_fail'] = 'Konfiguration: blesta.php är inte skrivbar.';
$lang['SystemUpgrade.environment.config_pass'] = 'Konfiguration: blesta.php är skrivbar.';
$lang['SystemUpgrade.environment.disk_pass'] = 'Diskutrymme: %1$s tillgängligt.';
$lang['SystemUpgrade.environment.disk_warn'] = 'Diskutrymme: Endast %1$s tillgängligt, uppskattningsvis %2$s behövs.';
$lang['SystemUpgrade.environment.exec_fail'] = 'Shell-åtkomst: exec()-funktionen är inaktiverad eller inte tillgänglig.';
$lang['SystemUpgrade.environment.exec_pass'] = 'Shell-åtkomst: exec()-funktionen är tillgänglig.';
$lang['SystemUpgrade.environment.mysqldump_fail'] = 'Säkerhetskopiering av databas: kommandot mysqldump är inte tillgängligt. Installera verktygen mysql-client.';
$lang['SystemUpgrade.environment.mysqldump_pass'] = 'Databasbackup: kommandot mysqldump är tillgängligt.';
$lang['SystemUpgrade.environment.os_fail'] = 'Självuppgradering stöds endast i Linux-miljöer.';
$lang['SystemUpgrade.environment.os_pass'] = 'Operativsystem: Linux: Linux upptäcktes.';
$lang['SystemUpgrade.environment.ownership_fail'] = 'Filägande: %1$s nyckelkataloger ägs inte av webbserveranvändaren.';
$lang['SystemUpgrade.environment.ownership_pass'] = 'Ägande av filer: Alla nyckelkataloger ägs av webbserveranvändaren.';
$lang['SystemUpgrade.environment.rsync_fail'] = 'Filsynkronisering: kommandot rsync är inte tillgängligt. Vänligen installera rsync.';
$lang['SystemUpgrade.environment.rsync_pass'] = 'Filsynkronisering: kommandot rsync är tillgängligt.';
$lang['SystemUpgrade.environment.setsid_pass'] = 'Processavskiljning: kommandot setsid är tillgängligt.';
$lang['SystemUpgrade.environment.setsid_warn'] = 'Processavskiljning: kommandot setsid är inte tillgängligt. Uppgraderingen kan kräva ett manuellt kommando via SSH för att slutföras i värdtjänstmiljöer som är fastlåsta.';
$lang['SystemUpgrade.environment.tar_fail'] = 'Filbackup: kommandot tar är inte tillgängligt. Vänligen installera tar.';
$lang['SystemUpgrade.environment.tar_pass'] = 'Säkerhetskopiering av filer: kommandot tar är tillgängligt.';
$lang['SystemUpgrade.environment.unzip_fail'] = 'Arkivutdragning: kommandot unzip är inte tillgängligt. Vänligen installera unzip.';
$lang['SystemUpgrade.environment.unzip_pass'] = 'Arkivutdragning: kommandot unzip är tillgängligt.';
$lang['SystemUpgrade.environment.writable_fail'] = 'Filsystem: Installationskatalogen är inte skrivbar av webbservern.';
$lang['SystemUpgrade.environment.writable_pass'] = 'Filsystem: Installationskatalogen är skrivbar.';
$lang['SystemUpgrade.maintenance_reason'] = 'Systemet håller för närvarande på att uppgraderas. Vänligen kom tillbaka inom kort.';

