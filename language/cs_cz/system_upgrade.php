<?php
/**
 * System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.cs_cz
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SystemUpgrade.environment.os_pass'] = 'Operační systém: Zjištěno: Linux.';
$lang['SystemUpgrade.environment.os_fail'] = 'Samostatná aktualizace je podporována pouze v prostředí Linux.';
$lang['SystemUpgrade.environment.exec_pass'] = 'Přístup k shellu: k dispozici je funkce exec().';
$lang['SystemUpgrade.environment.exec_fail'] = 'Přístup k shellu: funkce exec() je zakázána nebo není k dispozici.';
$lang['SystemUpgrade.environment.unzip_pass'] = 'Extrakce archivu: k dispozici je příkaz unzip.';
$lang['SystemUpgrade.environment.unzip_fail'] = 'Extrakce archivu: příkaz unzip není k dispozici. Nainstalujte si prosím příkaz unzip.';
$lang['SystemUpgrade.environment.mysqldump_pass'] = 'Zálohování databáze: k dispozici je příkaz mysqldump.';
$lang['SystemUpgrade.environment.mysqldump_fail'] = 'Zálohování databáze: příkaz mysqldump není k dispozici. Nainstalujte si prosím nástroje mysql-client.';
$lang['SystemUpgrade.environment.tar_pass'] = 'Zálohování souborů: k dispozici je příkaz tar.';
$lang['SystemUpgrade.environment.tar_fail'] = 'Zálohování souborů: příkaz tar není k dispozici. Prosím, nainstalujte tar.';
$lang['SystemUpgrade.environment.rsync_pass'] = 'Synchronizace souborů: k dispozici je příkaz rsync.';
$lang['SystemUpgrade.environment.rsync_fail'] = 'Synchronizace souborů: příkaz rsync není k dispozici. Nainstalujte si prosím rsync.';
$lang['SystemUpgrade.environment.setsid_pass'] = 'Odpojení procesu: příkaz setsid je k dispozici.';
$lang['SystemUpgrade.environment.setsid_warn'] = 'Odpojení procesu: příkaz setsid není k dispozici. V hostitelských prostředích s uvězněným serverem může být k dokončení aktualizace zapotřebí ruční příkaz přes SSH.';
$lang['SystemUpgrade.environment.writable_pass'] = 'Souborový systém: Instalační adresář je zapisovatelný.';
$lang['SystemUpgrade.environment.writable_fail'] = 'Souborový systém: Instalační adresář není webovým serverem zapisovatelný.';
$lang['SystemUpgrade.environment.ownership_pass'] = 'Vlastnictví souboru: Všechny klíčové adresáře jsou ve vlastnictví uživatele webového serveru.';
$lang['SystemUpgrade.environment.ownership_fail'] = 'Vlastnictví souborů: Adresáře klíče %1$s nejsou vlastněny uživatelem webového serveru.';
$lang['SystemUpgrade.environment.disk_pass'] = 'Místo na disku: %1$s k dispozici.';
$lang['SystemUpgrade.environment.disk_warn'] = 'Místo na disku: %1$s Odhadovaná potřeba: %2$s.';
$lang['SystemUpgrade.environment.config_pass'] = 'Konfigurace: blesta.php je zapisovatelný.';
$lang['SystemUpgrade.environment.config_fail'] = 'Konfigurace: blesta.php není zapisovatelný.';
$lang['SystemUpgrade.maintenance_reason'] = 'V současné době probíhá modernizace systému. Brzy se k němu prosím vraťte.';
$lang['SystemUpgrade.!error.upgrade_locked'] = 'Aktualizace již probíhá (zahájili ji zaměstnanci s ID %1$s na adrese %2$s).';
$lang['SystemUpgrade.!error.lock_stale'] = 'Předchozí proces aktualizace se zřejmě neočekávaně zastavil. Můžete vymazat zámek a zkusit to znovu.';
$lang['SystemUpgrade.!error.backup_db_failed'] = 'Zálohování databáze se nezdařilo. Bez spolehlivé zálohy nelze provést upgrade.';
$lang['SystemUpgrade.!error.backup_files_failed'] = 'Zálohování souborů se nezdařilo. Bez spolehlivé zálohy nelze v aktualizaci pokračovat.';
$lang['SystemUpgrade.!error.download_failed'] = 'Nepodařilo se stáhnout soubor s verzí.';
$lang['SystemUpgrade.!error.hash_mismatch'] = 'Kontrola integrity staženého souboru selhala. Soubor může být poškozen.';
$lang['SystemUpgrade.!error.signature_missing'] = 'Vydání neobsahuje kryptografický podpis. Nelze ověřit pravost.';
$lang['SystemUpgrade.!error.signature_invalid'] = 'Ověření podpisu vydání se nezdařilo. Se souborem mohlo být manipulováno.';
$lang['SystemUpgrade.!error.extraction_failed'] = 'Nepodařilo se rozbalit archiv vydání.';
$lang['SystemUpgrade.!error.upgrader_failed'] = 'Nepodařilo se připravit nebo spustit proces aktualizace.';
$lang['SystemUpgrade.!error.launch_not_detected'] = 'Proces aktualizace na pozadí se nespustil. K tomu může dojít v prostředí hostingu se zavřeným přístupem (CloudLinux/CageFS, některé konfigurace PHP-FPM), kde webový server nemá povoleno odpojit dlouho běžící podřízené procesy. Upgrade lze dokončit spuštěním níže uvedeného příkazu přes SSH.';
$lang['SystemUpgrade.!error.upgrader_crashed'] = 'Zdá se, že se proces aktualizace neočekávaně zastavil. Zkontrolujte níže uvedené cesty zálohování pro obnovu.';
$lang['SystemUpgrade.!error.license_invalid'] = 'Předplatné podpory a aktualizací musí být aktivní, aby bylo možné aktualizovat hlavní nebo vedlejší verze.';
$lang['SystemUpgrade.!error.php_version'] = 'Cílová verze vyžaduje PHP %1$s nebo novější. Používáte PHP %2$s.';
$lang['SystemUpgrade.!error.environment_fail'] = 'Jedna nebo více kontrol prostředí selhaly. Před upgradem je prosím vyřešte.';

