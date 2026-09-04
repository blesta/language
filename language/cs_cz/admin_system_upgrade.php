<?php
/**
 * Admin System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.cs_cz
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemUpgrade.index.backup_col_date'] = 'Datum';
$lang['AdminSystemUpgrade.index.backup_col_file'] = 'Soubor';
$lang['AdminSystemUpgrade.index.backup_col_size'] = 'Velikost';
$lang['AdminSystemUpgrade.index.backup_col_type'] = 'Typ';
$lang['AdminSystemUpgrade.index.backup_database'] = 'Databáze';
$lang['AdminSystemUpgrade.index.backup_files'] = 'Soubory';
$lang['AdminSystemUpgrade.index.boxtitle_upgrade'] = 'Možnosti upgradu';
$lang['AdminSystemUpgrade.index.btn_check'] = 'Kontrola aktualizací';
$lang['AdminSystemUpgrade.index.btn_clear_lock'] = 'Zámek Clear Lock';
$lang['AdminSystemUpgrade.index.btn_copy_command'] = 'Kopírovat';
$lang['AdminSystemUpgrade.index.btn_dashboard'] = 'Zpět na přístrojovou desku';
$lang['AdminSystemUpgrade.index.btn_delete'] = 'Odstranit';
$lang['AdminSystemUpgrade.index.btn_download'] = 'Stáhnout';
$lang['AdminSystemUpgrade.index.btn_retry'] = 'Opakování';
$lang['AdminSystemUpgrade.index.btn_upgrade'] = 'Upgradujte nyní';
$lang['AdminSystemUpgrade.index.changelog_link'] = 'Zobrazit seznam změn';
$lang['AdminSystemUpgrade.index.clean_stale_files'] = 'Odstranění zastaralých souborů jádra po aktualizaci';
$lang['AdminSystemUpgrade.index.clean_stale_files_note'] = 'Odstraní soubory v základních adresářích, které nejsou obsaženy v manifestu nové verze. Ponechte nezaškrtnuto, pokud si nejste jisti, že v základních adresářích nejsou žádné vlastní soubory.';
$lang['AdminSystemUpgrade.index.command_copied'] = 'Zkopírováno';
$lang['AdminSystemUpgrade.index.confirm_delete_backup'] = 'Opravdu chcete tuto zálohu odstranit? Nelze to vrátit zpět.';
$lang['AdminSystemUpgrade.index.current_version'] = 'Spouštíte Blestu %1$s';
$lang['AdminSystemUpgrade.index.environment_badge_fail'] = '%1$d se nezdařilo';
$lang['AdminSystemUpgrade.index.environment_badge_warn'] = '%1$d varování';
$lang['AdminSystemUpgrade.index.environment_fail'] = 'Některé kontroly selhaly. Před aktualizací vyřešte níže uvedené problémy.';
$lang['AdminSystemUpgrade.index.environment_pass'] = 'Všechny kontroly proběhly úspěšně. Váš systém je připraven k vlastní aktualizaci.';
$lang['AdminSystemUpgrade.index.failure_backup_label'] = 'Dostupné zálohy:';
$lang['AdminSystemUpgrade.index.failure_db_version_after'] = 'Současný stav: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_before'] = 'Před upgradem: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_expected'] = 'Očekává se po aktualizaci: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_label'] = 'Verze databáze:';
$lang['AdminSystemUpgrade.index.failure_db_version_mismatch'] = 'Verze databáze se neposunula na očekávanou hodnotu. Aktualizace se mohla zastavit v polovině verze a některé změny schématu zůstaly aplikovány.';
$lang['AdminSystemUpgrade.index.failure_explanation'] = 'Aktualizace nebyla úspěšně dokončena. Váš systém může být v nekonzistentním stavu a některé změny v databázi z neúspěšné verze již mohou být aplikovány. Opětovné spuštění upgradu pravděpodobně selže jinak. Před opětovným pokusem se doporučuje obnovit databázi ze zálohy. Zálohy byly pořízeny před zahájením upgradu a jsou uvedeny níže. Chcete-li provést obnovu, obnovte tyto zálohy ručně nebo otevřete žádost o pomoc u podpory.';
$lang['AdminSystemUpgrade.index.failure_heading'] = 'Co dělat dál';
$lang['AdminSystemUpgrade.index.field_upgradesubmit'] = 'Aktualizace nastavení';
$lang['AdminSystemUpgrade.index.heading_available'] = 'Dostupné aktualizace';
$lang['AdminSystemUpgrade.index.heading_backups'] = 'Aktualizace záloh';
$lang['AdminSystemUpgrade.index.heading_current'] = 'Aktuální verze';
$lang['AdminSystemUpgrade.index.heading_environment'] = 'Stav životního prostředí';
$lang['AdminSystemUpgrade.index.heading_progress'] = 'Pokrok v upgradu';
$lang['AdminSystemUpgrade.index.heading_recovery'] = 'Pokyny pro obnovu';
$lang['AdminSystemUpgrade.index.last_checked'] = 'Poslední kontrola: %1$s';
$lang['AdminSystemUpgrade.index.launch_failed_instruction'] = 'Pro dokončení aktualizace spusťte následující příkaz přes SSH (jako uživatel, který vlastní instalaci systému Blesta). Tuto stránku nechte otevřenou - během provádění příkazu se zde bude průběh aktualizovat.';
$lang['AdminSystemUpgrade.index.launch_failed_title'] = 'Aktualizace na pozadí se nespustila';
$lang['AdminSystemUpgrade.index.lock_active'] = 'V současné době probíhá aktualizace, která byla zahájena na adrese %1$s.';
$lang['AdminSystemUpgrade.index.lock_stale'] = 'Předchozí proces aktualizace se zřejmě neočekávaně zastavil.';
$lang['AdminSystemUpgrade.index.never_checked'] = 'Nikdy nezkontrolováno';
$lang['AdminSystemUpgrade.index.no_backups'] = 'Nebyly nalezeny žádné zálohy aktualizace.';
$lang['AdminSystemUpgrade.index.no_results'] = 'Možnosti upgradu nejsou v tuto chvíli k dispozici.';
$lang['AdminSystemUpgrade.index.no_support'] = 'Vaše předplatné podpory a aktualizací není aktivní. K dispozici jsou pouze aktualizace oprav.';
$lang['AdminSystemUpgrade.index.page_title'] = 'Nastavení > Systém > Možnosti aktualizace';
$lang['AdminSystemUpgrade.index.recovery_db_path'] = 'Zálohování databáze: %1$s';
$lang['AdminSystemUpgrade.index.recovery_files_path'] = 'Zálohování souborů: %1$s';
$lang['AdminSystemUpgrade.index.recovery_instructions'] = 'Chcete-li provést obnovu ze zálohy, spusťte na serveru následující příkazy:';
$lang['AdminSystemUpgrade.index.release_date'] = 'Vydáno: %1$s';
$lang['AdminSystemUpgrade.index.requires_support'] = 'Vyžaduje aktivní předplatné podpory a aktualizací.';
$lang['AdminSystemUpgrade.index.select_version'] = 'Vyberte verzi, na kterou chcete upgradovat:';
$lang['AdminSystemUpgrade.index.skip_integrity_check'] = 'Přeskočení kontroly integrity souborů';
$lang['AdminSystemUpgrade.index.step_backup_db'] = 'Zálohování databáze';
$lang['AdminSystemUpgrade.index.step_backup_files'] = 'Zálohování souborů';
$lang['AdminSystemUpgrade.index.step_download'] = 'Vydání ke stažení';
$lang['AdminSystemUpgrade.index.step_extract'] = 'Výpis souborů';
$lang['AdminSystemUpgrade.index.step_finalize'] = 'Dokončit';
$lang['AdminSystemUpgrade.index.step_maintenance'] = 'Povolení režimu údržby';
$lang['AdminSystemUpgrade.index.step_migrate'] = 'Spouštění migrací databází';
$lang['AdminSystemUpgrade.index.step_preflight'] = 'Předletové kontroly';
$lang['AdminSystemUpgrade.index.step_replace'] = 'Nahrazení souborů';
$lang['AdminSystemUpgrade.index.step_verify'] = 'Ověření integrity';
$lang['AdminSystemUpgrade.index.up_to_date'] = 'Vaše instalace je aktuální.';
$lang['AdminSystemUpgrade.index.upgrade_complete'] = 'Aktualizace byla úspěšně dokončena!';
$lang['AdminSystemUpgrade.index.upgrade_failed'] = 'Aktualizace se nezdařila.';
$lang['AdminSystemUpgrade.index.upgrade_latest'] = 'Úplná aktualizace: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.upgrade_patch'] = 'Aktualizace záplaty: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.upgrade_warning'] = 'Tím se zapne režim údržby, vytvoří se zálohy, stáhne a nainstaluje nová verze a spustí se migrace databáze. Tento proces nelze po spuštění přerušit.';
$lang['AdminSystemUpgrade.upgrade.btn_abort'] = 'Zrušit';
$lang['AdminSystemUpgrade.upgrade.btn_continue'] = 'Pokračovat v aktualizaci';
$lang['AdminSystemUpgrade.upgrade.label_missing'] = 'Chybějící soubory';
$lang['AdminSystemUpgrade.upgrade.label_modified'] = 'Upravené soubory';
$lang['AdminSystemUpgrade.upgrade.modified_files'] = '%1$s základní soubor(y) byl(y) oproti původnímu vydání upraven(y). Tyto změny budou při aktualizaci přepsány. Chcete pokračovat?';
$lang['AdminSystemUpgrade.upgrade.modified_files_title'] = 'Upravené základní soubory';
$lang['AdminSystemUpgrade.upgrade.no_checksums'] = 'Souborový manifest vaší aktuální instalace neobsahuje kontrolní součty. Ověřování integrity souborů bude přeskočeno. Chcete pokračovat v aktualizaci?';
$lang['AdminSystemUpgrade.upgrade.no_manifest'] = 'Pro vaši aktuální instalaci nebyl nalezen žádný manifest souborů. Ověření integrity souboru bude přeskočeno. Chcete pokračovat v aktualizaci?';
$lang['AdminSystemUpgrade.upgrade.started'] = 'Proces aktualizace byl zahájen. Tuto stránku můžete zavřít - upgrade bude pokračovat na pozadí. Vraťte se na tuto stránku a zkontrolujte její průběh.';

