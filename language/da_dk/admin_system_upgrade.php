<?php
/**
 * Admin System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemUpgrade.index.backup_col_date'] = 'Dato';
$lang['AdminSystemUpgrade.index.backup_col_file'] = 'Fil';
$lang['AdminSystemUpgrade.index.backup_col_size'] = 'Størrelse';
$lang['AdminSystemUpgrade.index.backup_col_type'] = 'Type';
$lang['AdminSystemUpgrade.index.backup_database'] = 'Database';
$lang['AdminSystemUpgrade.index.backup_files'] = 'Filer';
$lang['AdminSystemUpgrade.index.boxtitle_upgrade'] = 'Opgraderingsmuligheder';
$lang['AdminSystemUpgrade.index.btn_check'] = 'Tjek for opdateringer';
$lang['AdminSystemUpgrade.index.btn_clear_lock'] = 'Ryd lås';
$lang['AdminSystemUpgrade.index.btn_copy_command'] = 'Kopi';
$lang['AdminSystemUpgrade.index.btn_dashboard'] = 'Gå tilbage til Dashboard';
$lang['AdminSystemUpgrade.index.btn_delete'] = 'Sletning';
$lang['AdminSystemUpgrade.index.btn_download'] = 'Download';
$lang['AdminSystemUpgrade.index.btn_retry'] = 'Prøv igen';
$lang['AdminSystemUpgrade.index.btn_upgrade'] = 'Opgrader nu';
$lang['AdminSystemUpgrade.index.changelog_link'] = 'Se changelog';
$lang['AdminSystemUpgrade.index.clean_stale_files'] = 'Fjern forældede kernefiler efter opgradering';
$lang['AdminSystemUpgrade.index.clean_stale_files_note'] = 'Sletter filer i kernemapper, som ikke findes i manifestet for den nye udgivelse. Lad det være uafkrydset, medmindre du er sikker på, at der ikke findes brugerdefinerede filer i kernemapper.';
$lang['AdminSystemUpgrade.index.command_copied'] = 'Kopieret';
$lang['AdminSystemUpgrade.index.confirm_delete_backup'] = 'Er du sikker på, at du vil slette denne backup? Dette kan ikke fortrydes.';
$lang['AdminSystemUpgrade.index.current_version'] = 'Du kører Blesta %1$s';
$lang['AdminSystemUpgrade.index.environment_badge_fail'] = '%1$d mislykkedes';
$lang['AdminSystemUpgrade.index.environment_badge_warn'] = '%1$d advarsel';
$lang['AdminSystemUpgrade.index.environment_fail'] = 'Nogle kontroller mislykkedes. Løs venligst nedenstående problemer, før du opgraderer.';
$lang['AdminSystemUpgrade.index.environment_pass'] = 'Alle kontroller er bestået. Dit system er klar til selvopgradering.';
$lang['AdminSystemUpgrade.index.failure_backup_label'] = 'Tilgængelige sikkerhedskopier:';
$lang['AdminSystemUpgrade.index.failure_db_version_after'] = 'Nuværende: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_before'] = 'Før opgradering: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_expected'] = 'Forventes efter opgradering: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_label'] = 'Databaseversion:';
$lang['AdminSystemUpgrade.index.failure_db_version_mismatch'] = 'Databaseversionen avancerede ikke til den forventede værdi. Opgraderingen kan være stoppet halvvejs gennem en version, så nogle skemaændringer er blevet anvendt.';
$lang['AdminSystemUpgrade.index.failure_explanation'] = 'Opgraderingen blev ikke gennemført. Dit system kan være i en inkonsistent tilstand, og nogle databaseændringer fra den mislykkede version kan allerede være anvendt. Hvis du kører opgraderingen igen, vil den sandsynligvis mislykkes på en anden måde. Det anbefales at gendanne fra databasebackuppen, før man prøver igen. Der blev taget sikkerhedskopier, før opgraderingen startede, og de er anført nedenfor. For at gendanne skal du enten gendanne disse sikkerhedskopier manuelt eller åbne en supportbillet for at få hjælp.';
$lang['AdminSystemUpgrade.index.failure_heading'] = 'Hvad skal jeg gøre nu?';
$lang['AdminSystemUpgrade.index.field_upgradesubmit'] = 'Opdater indstillinger';
$lang['AdminSystemUpgrade.index.heading_available'] = 'Tilgængelige opdateringer';
$lang['AdminSystemUpgrade.index.heading_backups'] = 'Opgrader sikkerhedskopier';
$lang['AdminSystemUpgrade.index.heading_current'] = 'Nuværende version';
$lang['AdminSystemUpgrade.index.heading_environment'] = 'Status for miljøet';
$lang['AdminSystemUpgrade.index.heading_progress'] = 'Fremskridt med opgradering';
$lang['AdminSystemUpgrade.index.heading_recovery'] = 'Instruktioner til gendannelse';
$lang['AdminSystemUpgrade.index.last_checked'] = 'Sidst tjekket: %1$s';
$lang['AdminSystemUpgrade.index.launch_failed_instruction'] = 'Kør følgende kommando via SSH (som den bruger, der ejer Blesta-installationen) for at fuldføre opgraderingen. Lad denne side være åben - fremskridt vil fortsætte med at blive opdateret her, mens kommandoen kører.';
$lang['AdminSystemUpgrade.index.launch_failed_title'] = 'Baggrundsopgradering startede ikke';
$lang['AdminSystemUpgrade.index.lock_active'] = 'En opgradering er i øjeblikket i gang, startet på %1$s.';
$lang['AdminSystemUpgrade.index.lock_stale'] = 'En tidligere opgraderingsproces ser ud til at være stoppet uventet.';
$lang['AdminSystemUpgrade.index.never_checked'] = 'Aldrig tjekket';
$lang['AdminSystemUpgrade.index.no_backups'] = 'Ingen opgraderingsbackups fundet.';
$lang['AdminSystemUpgrade.index.no_results'] = 'Opgraderingsmuligheder er ikke tilgængelige på nuværende tidspunkt.';
$lang['AdminSystemUpgrade.index.no_support'] = 'Dit abonnement på support og opdateringer er ikke aktivt. Kun patch-opdateringer er tilgængelige.';
$lang['AdminSystemUpgrade.index.page_title'] = 'Indstillinger > System > Opgraderingsmuligheder';
$lang['AdminSystemUpgrade.index.recovery_db_path'] = 'Backup af database: %1$s';
$lang['AdminSystemUpgrade.index.recovery_files_path'] = 'Sikkerhedskopiering af filer: %1$s';
$lang['AdminSystemUpgrade.index.recovery_instructions'] = 'For at gendanne fra en backup skal du køre følgende kommandoer på din server:';
$lang['AdminSystemUpgrade.index.release_date'] = 'Udgivet: %1$s';
$lang['AdminSystemUpgrade.index.requires_support'] = 'Kræver aktivt abonnement på support og opdateringer.';
$lang['AdminSystemUpgrade.index.select_version'] = 'Vælg en version at opgradere til:';
$lang['AdminSystemUpgrade.index.skip_integrity_check'] = 'Spring filintegritetskontrol over';
$lang['AdminSystemUpgrade.index.step_backup_db'] = 'Backup af database';
$lang['AdminSystemUpgrade.index.step_backup_files'] = 'Sikkerhedskopiering af filer';
$lang['AdminSystemUpgrade.index.step_download'] = 'Udgivelse til download';
$lang['AdminSystemUpgrade.index.step_extract'] = 'Udpak filer';
$lang['AdminSystemUpgrade.index.step_finalize'] = 'Færdiggør';
$lang['AdminSystemUpgrade.index.step_maintenance'] = 'Aktivér vedligeholdelsestilstand';
$lang['AdminSystemUpgrade.index.step_migrate'] = 'Kør databasemigrationer';
$lang['AdminSystemUpgrade.index.step_preflight'] = 'Kontrol før flyvning';
$lang['AdminSystemUpgrade.index.step_replace'] = 'Udskift filer';
$lang['AdminSystemUpgrade.index.step_verify'] = 'Bekræft integritet';
$lang['AdminSystemUpgrade.index.up_to_date'] = 'Din installation er opdateret.';
$lang['AdminSystemUpgrade.index.upgrade_complete'] = 'Opgradering gennemført med succes!';
$lang['AdminSystemUpgrade.index.upgrade_failed'] = 'Opgradering mislykkedes.';
$lang['AdminSystemUpgrade.index.upgrade_latest'] = 'Fuld opgradering: %1$s →. %2$s';
$lang['AdminSystemUpgrade.index.upgrade_patch'] = 'Opdatering af patch: %1$s →. %2$s';
$lang['AdminSystemUpgrade.index.upgrade_warning'] = 'Dette vil aktivere vedligeholdelsestilstand, oprette sikkerhedskopier, downloade og installere den nye version og køre databasemigrering. Denne proces kan ikke afbrydes, når den først er startet.';
$lang['AdminSystemUpgrade.upgrade.btn_abort'] = 'Annuller';
$lang['AdminSystemUpgrade.upgrade.btn_continue'] = 'Fortsæt med opgradering';
$lang['AdminSystemUpgrade.upgrade.label_missing'] = 'Manglende filer';
$lang['AdminSystemUpgrade.upgrade.label_modified'] = 'Ændrede filer';
$lang['AdminSystemUpgrade.upgrade.modified_files'] = '%1$s kernefil(er) er blevet ændret i forhold til den oprindelige udgivelse. Disse ændringer vil blive overskrevet under opgraderingen. Ønsker du at fortsætte?';
$lang['AdminSystemUpgrade.upgrade.modified_files_title'] = 'Modificerede kernefiler';
$lang['AdminSystemUpgrade.upgrade.no_checksums'] = 'Filmanifestet for din nuværende installation indeholder ikke kontrolsummer. Verifikation af filintegritet vil blive sprunget over. Vil du fortsætte med opgraderingen?';
$lang['AdminSystemUpgrade.upgrade.no_manifest'] = 'Der blev ikke fundet noget filmanifest for din nuværende installation. Verifikation af filintegritet vil blive sprunget over. Vil du fortsætte med opgraderingen?';
$lang['AdminSystemUpgrade.upgrade.started'] = 'Opgraderingsprocessen er startet. Du kan lukke denne side - opgraderingen fortsætter i baggrunden. Vend tilbage til denne side for at se, hvordan det går.';

