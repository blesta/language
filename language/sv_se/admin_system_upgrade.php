<?php
/**
 * Admin System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.sv_se
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemUpgrade.index.no_results'] = 'Uppgraderingsalternativ är inte tillgängliga för närvarande.';
$lang['AdminSystemUpgrade.index.field_upgradesubmit'] = 'Uppdatera inställningar';
$lang['AdminSystemUpgrade.index.boxtitle_upgrade'] = 'Alternativ för uppgradering';
$lang['AdminSystemUpgrade.index.page_title'] = 'Inställningar > System > Uppgraderingsalternativ';
$lang['AdminSystemUpgrade.upgrade.btn_abort'] = 'Avbryt';
$lang['AdminSystemUpgrade.upgrade.btn_continue'] = 'Fortsätt med uppgraderingen';
$lang['AdminSystemUpgrade.upgrade.label_missing'] = 'Saknade filer';
$lang['AdminSystemUpgrade.upgrade.label_modified'] = 'Ändrade filer';
$lang['AdminSystemUpgrade.upgrade.modified_files_title'] = 'Modified Core Files';
$lang['AdminSystemUpgrade.upgrade.modified_files'] = '%1$s core-fil(er) har ändrats från den ursprungliga versionen. Dessa ändringar kommer att skrivas över under uppgraderingen. Vill du fortsätta?';
$lang['AdminSystemUpgrade.upgrade.no_checksums'] = 'Filmanifestet för din nuvarande installation innehåller inte kontrollsummor. Verifiering av filintegritet kommer att hoppas över. Vill du fortsätta med uppgraderingen?';
$lang['AdminSystemUpgrade.upgrade.no_manifest'] = 'Inget filmanifest hittades för din aktuella installation. Verifiering av filintegritet kommer att hoppas över. Vill du fortsätta med uppgraderingen?';
$lang['AdminSystemUpgrade.upgrade.started'] = 'Uppgraderingsprocessen har startat. Du kan stänga den här sidan - uppgraderingen kommer att fortsätta i bakgrunden. Återvänd till den här sidan för att kontrollera framstegen.';
$lang['AdminSystemUpgrade.index.failure_db_version_mismatch'] = 'Databasversionen avancerade inte till det förväntade värdet. Uppgraderingen kan ha stoppats halvvägs genom en version, vilket innebär att vissa schemaändringar fortfarande tillämpas.';
$lang['AdminSystemUpgrade.index.failure_db_version_after'] = 'Nuvarande: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_expected'] = 'Förväntas efter uppgradering: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_before'] = 'Före uppgradering: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_label'] = 'Databasversion:';
$lang['AdminSystemUpgrade.index.failure_backup_label'] = 'Tillgängliga säkerhetskopior:';
$lang['AdminSystemUpgrade.index.failure_explanation'] = 'Uppgraderingen slutfördes inte på ett framgångsrikt sätt. Ditt system kan vara i ett inkonsekvent tillstånd och vissa databasändringar från den misslyckade versionen kan redan ha tillämpats. Om du kör uppgraderingen igen kommer den sannolikt att misslyckas på ett annat sätt. Vi rekommenderar att du återställer från databasens säkerhetskopia innan du försöker igen. Säkerhetskopior togs innan uppgraderingen startade och listas nedan. För att återställa kan du antingen återställa dessa säkerhetskopior manuellt eller öppna en supportbiljett för att få hjälp.';
$lang['AdminSystemUpgrade.index.failure_heading'] = 'Vad ska vi göra härnäst?';
$lang['AdminSystemUpgrade.index.recovery_instructions'] = 'Om du vill återställa från en säkerhetskopia kör du följande kommandon på servern:';
$lang['AdminSystemUpgrade.index.recovery_files_path'] = 'Säkerhetskopiering av filer: %1$s';
$lang['AdminSystemUpgrade.index.recovery_db_path'] = 'Säkerhetskopiering av databas: %1$s';
$lang['AdminSystemUpgrade.index.heading_recovery'] = 'Instruktioner för återställning';
$lang['AdminSystemUpgrade.index.confirm_delete_backup'] = 'Är du säker på att du vill ta bort den här säkerhetskopian? Detta kan inte ångras.';
$lang['AdminSystemUpgrade.index.btn_delete'] = 'Radera';
$lang['AdminSystemUpgrade.index.btn_download'] = 'Nedladdningar';
$lang['AdminSystemUpgrade.index.backup_files'] = 'Filer';
$lang['AdminSystemUpgrade.index.backup_database'] = 'Databas';
$lang['AdminSystemUpgrade.index.backup_col_date'] = 'Datum';
$lang['AdminSystemUpgrade.index.backup_col_size'] = 'Storlek';
$lang['AdminSystemUpgrade.index.backup_col_type'] = 'Typ';
$lang['AdminSystemUpgrade.index.backup_col_file'] = 'Fil';
$lang['AdminSystemUpgrade.index.no_backups'] = 'Inga säkerhetskopior för uppgradering hittades.';
$lang['AdminSystemUpgrade.index.heading_backups'] = 'Uppgradera säkerhetskopior';
$lang['AdminSystemUpgrade.index.btn_clear_lock'] = 'Rensa lås';
$lang['AdminSystemUpgrade.index.lock_stale'] = 'En tidigare uppgraderingsprocess verkar ha stoppats oväntat.';
$lang['AdminSystemUpgrade.index.lock_active'] = 'En uppgradering pågår för närvarande och har påbörjats på %1$s.';
$lang['AdminSystemUpgrade.index.btn_retry'] = 'Försök igen';
$lang['AdminSystemUpgrade.index.btn_dashboard'] = 'Återgå till instrumentpanelen';
$lang['AdminSystemUpgrade.index.upgrade_failed'] = 'Uppgraderingen misslyckades.';
$lang['AdminSystemUpgrade.index.upgrade_complete'] = 'Uppgraderingen slutfördes framgångsrikt!';
$lang['AdminSystemUpgrade.index.step_finalize'] = 'Slutföra';
$lang['AdminSystemUpgrade.index.step_migrate'] = 'Kör databasmigreringar';
$lang['AdminSystemUpgrade.index.step_replace'] = 'Byt ut filer';
$lang['AdminSystemUpgrade.index.step_extract'] = 'Extrahera filer';
$lang['AdminSystemUpgrade.index.step_verify'] = 'Verifiera integriteten';
$lang['AdminSystemUpgrade.index.step_download'] = 'Ladda ner release';
$lang['AdminSystemUpgrade.index.step_backup_files'] = 'Säkerhetskopiering av filer';
$lang['AdminSystemUpgrade.index.step_backup_db'] = 'Säkerhetskopiering av databas';
$lang['AdminSystemUpgrade.index.step_maintenance'] = 'Aktivera underhållsläge';
$lang['AdminSystemUpgrade.index.step_preflight'] = 'Kontroller före flygning';
$lang['AdminSystemUpgrade.index.heading_progress'] = 'Uppgraderingens framsteg';
$lang['AdminSystemUpgrade.index.select_version'] = 'Välj en version att uppgradera till:';
$lang['AdminSystemUpgrade.index.upgrade_warning'] = 'Detta kommer att aktivera underhållsläget, skapa säkerhetskopior, ladda ner och installera den nya versionen och köra databasmigreringar. Denna process kan inte avbrytas när den väl har startat.';
$lang['AdminSystemUpgrade.index.btn_upgrade'] = 'Uppgradera nu';
$lang['AdminSystemUpgrade.index.clean_stale_files_note'] = 'Raderar filer i kärnkataloger som inte finns med i manifestet för den nya versionen. Lämna markeringen avmarkerad om du inte är säker på att det inte finns några anpassade filer i kärnkataloger.';
$lang['AdminSystemUpgrade.index.clean_stale_files'] = 'Ta bort inaktuella kärnfiler efter uppgradering';
$lang['AdminSystemUpgrade.index.skip_integrity_check'] = 'Hoppa över kontroll av filintegritet';
$lang['AdminSystemUpgrade.index.no_support'] = 'Din prenumeration på support och uppdateringar är inte aktiv. Endast patchuppdateringar är tillgängliga.';
$lang['AdminSystemUpgrade.index.requires_support'] = 'Kräver aktiv prenumeration på support och uppdateringar.';
$lang['AdminSystemUpgrade.index.changelog_link'] = 'Visa Changelog';
$lang['AdminSystemUpgrade.index.release_date'] = 'Släppt: %1$s';
$lang['AdminSystemUpgrade.index.upgrade_latest'] = 'Fullständig uppgradering: %1$s →. %2$s';
$lang['AdminSystemUpgrade.index.upgrade_patch'] = 'Patchuppdatering: %1$s →. %2$s';
$lang['AdminSystemUpgrade.index.heading_available'] = 'Tillgängliga uppdateringar';
$lang['AdminSystemUpgrade.index.command_copied'] = 'Kopierad';
$lang['AdminSystemUpgrade.index.btn_copy_command'] = 'Kopia';
$lang['AdminSystemUpgrade.index.launch_failed_instruction'] = 'Kör följande kommando via SSH (som den användare som äger Blesta-installationen) för att slutföra uppgraderingen. Lämna den här sidan öppen - framstegen kommer att fortsätta uppdateras här medan kommandot körs.';
$lang['AdminSystemUpgrade.index.launch_failed_title'] = 'Bakgrundsuppgraderingen startade inte';
$lang['AdminSystemUpgrade.index.environment_badge_warn'] = '%1$d varning';
$lang['AdminSystemUpgrade.index.environment_badge_fail'] = '%1$d misslyckades';
$lang['AdminSystemUpgrade.index.environment_fail'] = 'Vissa kontroller misslyckades. Vänligen lös problemen nedan innan du uppgraderar.';
$lang['AdminSystemUpgrade.index.environment_pass'] = 'Alla kontroller godkändes. Ditt system är redo för självuppgradering.';
$lang['AdminSystemUpgrade.index.heading_environment'] = 'Status för miljön';
$lang['AdminSystemUpgrade.index.up_to_date'] = 'Din installation är uppdaterad.';
$lang['AdminSystemUpgrade.index.btn_check'] = 'Kontrollera för uppdateringar';
$lang['AdminSystemUpgrade.index.never_checked'] = 'Aldrig kontrollerat';
$lang['AdminSystemUpgrade.index.last_checked'] = 'Senast kontrollerad: %1$s';
$lang['AdminSystemUpgrade.index.current_version'] = 'Du kör Blesta %1$s';
$lang['AdminSystemUpgrade.index.heading_current'] = 'Nuvarande version';

