<?php
/**
 * System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SystemUpgrade.environment.os_pass'] = 'Operativsystem: Linux opdaget.';
$lang['SystemUpgrade.environment.os_fail'] = 'Selvopgradering understøttes kun i Linux-miljøer.';
$lang['SystemUpgrade.environment.exec_pass'] = 'Shell-adgang: exec()-funktionen er tilgængelig.';
$lang['SystemUpgrade.environment.exec_fail'] = 'Shell-adgang: exec()-funktionen er deaktiveret eller ikke tilgængelig.';
$lang['SystemUpgrade.environment.unzip_pass'] = 'Arkivudtræk: unzip-kommandoen er tilgængelig.';
$lang['SystemUpgrade.environment.unzip_fail'] = 'Arkivudtræk: Kommandoen unzip er ikke tilgængelig. Installer venligst unzip.';
$lang['SystemUpgrade.environment.mysqldump_pass'] = 'Backup af database: Kommandoen mysqldump er tilgængelig.';
$lang['SystemUpgrade.environment.mysqldump_fail'] = 'Databasebackup: Kommandoen mysqldump er ikke tilgængelig. Installer venligst mysql-klientværktøjer.';
$lang['SystemUpgrade.environment.tar_pass'] = 'Sikkerhedskopiering af filer: tar-kommandoen er tilgængelig.';
$lang['SystemUpgrade.environment.tar_fail'] = 'Filbackup: tar-kommandoen er ikke tilgængelig. Installer venligst tar.';
$lang['SystemUpgrade.environment.rsync_pass'] = 'Filsynkronisering: rsync-kommandoen er tilgængelig.';
$lang['SystemUpgrade.environment.rsync_fail'] = 'Filsynkronisering: rsync-kommandoen er ikke tilgængelig. Installer venligst rsync.';
$lang['SystemUpgrade.environment.setsid_pass'] = 'Procesafvikling: Kommandoen setsid er tilgængelig.';
$lang['SystemUpgrade.environment.setsid_warn'] = 'Procesafvikling: kommandoen setsid er ikke tilgængelig. Opgraderingen kan kræve en manuel kommando via SSH for at blive gennemført i fastlåste hostingmiljøer.';
$lang['SystemUpgrade.environment.writable_pass'] = 'Filsystem: Installationsmappen er skrivbar.';
$lang['SystemUpgrade.environment.writable_fail'] = 'Filsystem: Installationsmappen kan ikke skrives af webserveren.';
$lang['SystemUpgrade.environment.ownership_pass'] = 'Ejerskab af filer: Alle nøglekataloger ejes af webserverbrugeren.';
$lang['SystemUpgrade.environment.ownership_fail'] = 'Filejerskab: %1$s nøglekataloger ejes ikke af webserverbrugeren.';
$lang['SystemUpgrade.environment.disk_pass'] = 'Diskplads: %1$s tilgængelig.';
$lang['SystemUpgrade.environment.disk_warn'] = 'Diskplads: Kun %1$s tilgængelig, anslået %2$s nødvendig.';
$lang['SystemUpgrade.environment.config_pass'] = 'Konfiguration: blesta.php er skrivbar.';
$lang['SystemUpgrade.environment.config_fail'] = 'Konfiguration: blesta.php er ikke skrivbar.';
$lang['SystemUpgrade.maintenance_reason'] = 'Systemet er i øjeblikket ved at blive opgraderet. Tjek venligst igen inden længe.';
$lang['SystemUpgrade.!error.upgrade_locked'] = 'En opgradering er allerede i gang (startet af personale-ID %1$s på %2$s).';
$lang['SystemUpgrade.!error.lock_stale'] = 'En tidligere opgraderingsproces ser ud til at være stoppet uventet. Du kan fjerne låsen for at prøve igen.';
$lang['SystemUpgrade.!error.backup_db_failed'] = 'Backup af databasen mislykkedes. Opgraderingen kan ikke fortsætte uden en pålidelig backup.';
$lang['SystemUpgrade.!error.backup_files_failed'] = 'Sikkerhedskopiering af filer mislykkedes. Opgraderingen kan ikke fortsætte uden en pålidelig sikkerhedskopi.';
$lang['SystemUpgrade.!error.download_failed'] = 'Det lykkedes ikke at downloade udgivelsesfilen.';
$lang['SystemUpgrade.!error.hash_mismatch'] = 'Kontrol af den downloadede fils integritet mislykkedes. Filen kan være beskadiget.';
$lang['SystemUpgrade.!error.signature_missing'] = 'Udgivelsen indeholder ikke en kryptografisk signatur. Kan ikke verificere ægthed.';
$lang['SystemUpgrade.!error.signature_invalid'] = 'Bekræftelse af udgivelsessignatur mislykkedes. Filen kan være blevet manipuleret.';
$lang['SystemUpgrade.!error.extraction_failed'] = 'Det lykkedes ikke at udpakke udgivelsesarkivet.';
$lang['SystemUpgrade.!error.upgrader_failed'] = 'Det lykkedes ikke at forberede eller starte opgraderingsprocessen.';
$lang['SystemUpgrade.!error.launch_not_detected'] = 'Baggrundsopgraderingsprocessen startede ikke. Dette kan ske i jailed hosting-miljøer (CloudLinux/CageFS, nogle PHP-FPM-konfigurationer), hvor webserveren ikke har lov til at frigøre langvarige underordnede processer. Opgraderingen kan afsluttes ved at køre nedenstående kommando via SSH.';
$lang['SystemUpgrade.!error.upgrader_crashed'] = 'Opgraderingsprocessen ser ud til at være stoppet uventet. Tjek backup-stierne nedenfor for genoprettelse.';
$lang['SystemUpgrade.!error.license_invalid'] = 'Dit abonnement på support og opdateringer skal være aktivt for større eller mindre versionsopgraderinger.';
$lang['SystemUpgrade.!error.php_version'] = 'Måludgaven kræver PHP %1$s eller nyere. Du kører PHP %2$s.';
$lang['SystemUpgrade.!error.environment_fail'] = 'En eller flere miljøkontroller mislykkedes. Løs venligst problemerne, før du opgraderer.';

