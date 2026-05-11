<?php
/**
 * Admin System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.nl_nl
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemUpgrade.index.no_results'] = 'Upgrade-opties zijn op dit moment niet beschikbaar.';
$lang['AdminSystemUpgrade.index.field_upgradesubmit'] = 'Instellingen bijwerken';
$lang['AdminSystemUpgrade.index.boxtitle_upgrade'] = 'Upgradeopties';
$lang['AdminSystemUpgrade.index.page_title'] = 'Instellingen > Systeem > Upgrade-opties';
$lang['AdminSystemUpgrade.upgrade.btn_abort'] = 'Annuleren';
$lang['AdminSystemUpgrade.upgrade.btn_continue'] = 'Doorgaan met upgrade';
$lang['AdminSystemUpgrade.upgrade.label_missing'] = 'Ontbrekende bestanden';
$lang['AdminSystemUpgrade.upgrade.label_modified'] = 'Gewijzigde bestanden';
$lang['AdminSystemUpgrade.upgrade.modified_files_title'] = 'Gewijzigde kernbestanden';
$lang['AdminSystemUpgrade.upgrade.modified_files'] = '%1$s core bestand(en) zijn gewijzigd ten opzichte van de oorspronkelijke release. Deze wijzigingen worden overschreven tijdens de upgrade. Wilt u doorgaan?';
$lang['AdminSystemUpgrade.upgrade.no_checksums'] = 'Het bestandsmanifest voor uw huidige installatie bevat geen controlesommen. De integriteitscontrole van bestanden wordt overgeslagen. Wilt u doorgaan met de upgrade?';
$lang['AdminSystemUpgrade.upgrade.no_manifest'] = 'Er is geen bestandsmanifest gevonden voor uw huidige installatie. De verificatie van de bestandsintegriteit wordt overgeslagen. Wilt u doorgaan met de upgrade?';
$lang['AdminSystemUpgrade.upgrade.started'] = 'Upgradeproces gestart. Je kunt deze pagina sluiten - de upgrade wordt op de achtergrond uitgevoerd. Keer terug naar deze pagina om de voortgang te controleren.';
$lang['AdminSystemUpgrade.index.failure_db_version_mismatch'] = 'De databaseversie heeft niet de verwachte waarde bereikt. De upgrade kan halverwege een versie gestopt zijn, waardoor enkele schemawijzigingen toegepast zijn gebleven.';
$lang['AdminSystemUpgrade.index.failure_db_version_after'] = 'Actueel: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_expected'] = 'Verwacht na upgrade: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_before'] = 'Voor de upgrade: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_label'] = 'Databaseversie:';
$lang['AdminSystemUpgrade.index.failure_backup_label'] = 'Beschikbare back-ups:';
$lang['AdminSystemUpgrade.index.failure_explanation'] = 'De upgrade is niet succesvol voltooid. Uw systeem kan zich in een inconsistente toestand bevinden en sommige databasewijzigingen van de mislukte versie kunnen al toegepast zijn. De upgrade opnieuw uitvoeren zal waarschijnlijk anders mislukken. Herstellen vanaf de database back-up alvorens het opnieuw te proberen wordt aanbevolen. Back-ups werden genomen voordat de upgrade begon en staan hieronder vermeld. Om te herstellen, kunt u deze back-ups handmatig terugzetten of een supportticket openen voor assistentie.';
$lang['AdminSystemUpgrade.index.failure_heading'] = 'Wat nu te doen';
$lang['AdminSystemUpgrade.index.recovery_instructions'] = 'Voer de volgende commando\'s uit op je server om een back-up terug te zetten:';
$lang['AdminSystemUpgrade.index.recovery_files_path'] = 'Bestandsback-up: %1$s';
$lang['AdminSystemUpgrade.index.recovery_db_path'] = 'Databaseback-up: %1$s';
$lang['AdminSystemUpgrade.index.heading_recovery'] = 'Instructies voor herstel';
$lang['AdminSystemUpgrade.index.confirm_delete_backup'] = 'Weet je zeker dat je deze back-up wilt verwijderen? Dit kan niet ongedaan worden gemaakt.';
$lang['AdminSystemUpgrade.index.btn_delete'] = 'Verwijder';
$lang['AdminSystemUpgrade.index.btn_download'] = 'Downloaden';
$lang['AdminSystemUpgrade.index.backup_files'] = 'Bestanden';
$lang['AdminSystemUpgrade.index.backup_database'] = 'Database';
$lang['AdminSystemUpgrade.index.backup_col_date'] = 'Datum';
$lang['AdminSystemUpgrade.index.backup_col_size'] = 'Maat';
$lang['AdminSystemUpgrade.index.backup_col_type'] = 'Type';
$lang['AdminSystemUpgrade.index.backup_col_file'] = 'Bestand';
$lang['AdminSystemUpgrade.index.no_backups'] = 'Geen upgrade back-ups gevonden.';
$lang['AdminSystemUpgrade.index.heading_backups'] = 'Back-ups upgraden';
$lang['AdminSystemUpgrade.index.btn_clear_lock'] = 'Duidelijk slot';
$lang['AdminSystemUpgrade.index.lock_stale'] = 'Een eerder upgradeproces lijkt onverwacht te zijn gestopt.';
$lang['AdminSystemUpgrade.index.lock_active'] = 'Er is momenteel een upgrade aan de gang, gestart op %1$s.';
$lang['AdminSystemUpgrade.index.btn_retry'] = 'Opnieuw proberen';
$lang['AdminSystemUpgrade.index.btn_dashboard'] = 'Terug naar het dashboard';
$lang['AdminSystemUpgrade.index.upgrade_failed'] = 'Upgrade mislukt.';
$lang['AdminSystemUpgrade.index.upgrade_complete'] = 'Upgrade succesvol voltooid!';
$lang['AdminSystemUpgrade.index.step_finalize'] = 'afronden';
$lang['AdminSystemUpgrade.index.step_migrate'] = 'Databasemigraties uitvoeren';
$lang['AdminSystemUpgrade.index.step_replace'] = 'Bestanden vervangen';
$lang['AdminSystemUpgrade.index.step_extract'] = 'Bestanden uitpakken';
$lang['AdminSystemUpgrade.index.step_verify'] = 'Integriteit verifiëren';
$lang['AdminSystemUpgrade.index.step_download'] = 'Vrijgave downloaden';
$lang['AdminSystemUpgrade.index.step_backup_files'] = 'Bestandsback-up';
$lang['AdminSystemUpgrade.index.step_backup_db'] = 'Database back-up';
$lang['AdminSystemUpgrade.index.step_maintenance'] = 'Onderhoudsmodus inschakelen';
$lang['AdminSystemUpgrade.index.step_preflight'] = 'Controles voor de vlucht';
$lang['AdminSystemUpgrade.index.heading_progress'] = 'Upgrade vooruitgang';
$lang['AdminSystemUpgrade.index.select_version'] = 'Selecteer een versie om naar te upgraden:';
$lang['AdminSystemUpgrade.index.upgrade_warning'] = 'Hierdoor wordt de onderhoudsmodus ingeschakeld, worden back-ups gemaakt, wordt de nieuwe versie gedownload en geïnstalleerd en worden databasemigraties uitgevoerd. Dit proces kan niet worden onderbroken als het eenmaal is gestart.';
$lang['AdminSystemUpgrade.index.btn_upgrade'] = 'Nu upgraden';
$lang['AdminSystemUpgrade.index.clean_stale_files_note'] = 'Verwijdert bestanden in core directories die niet aanwezig zijn in het nieuwe release manifest. Niet aangevinkt laten, tenzij je zeker weet dat er geen aangepaste bestanden in core directories staan.';
$lang['AdminSystemUpgrade.index.clean_stale_files'] = 'Oude kernbestanden verwijderen na upgrade';
$lang['AdminSystemUpgrade.index.skip_integrity_check'] = 'Integriteitscontrole van bestand overslaan';
$lang['AdminSystemUpgrade.index.no_support'] = 'Uw abonnement op ondersteuning en updates is niet actief. Alleen patch-updates zijn beschikbaar.';
$lang['AdminSystemUpgrade.index.requires_support'] = 'Actief abonnement op ondersteuning en updates vereist.';
$lang['AdminSystemUpgrade.index.changelog_link'] = 'Changelog bekijken';
$lang['AdminSystemUpgrade.index.release_date'] = 'Uitgebracht: %1$s';
$lang['AdminSystemUpgrade.index.upgrade_latest'] = 'Volledige upgrade: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.upgrade_patch'] = 'Patch-update: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.heading_available'] = 'Beschikbare updates';
$lang['AdminSystemUpgrade.index.command_copied'] = 'Gekopieerd';
$lang['AdminSystemUpgrade.index.btn_copy_command'] = 'Kopie';
$lang['AdminSystemUpgrade.index.launch_failed_instruction'] = 'Voer het volgende commando uit via SSH (als de gebruiker die eigenaar is van de Blesta-installatie) om de upgrade te voltooien. Laat deze pagina open - de voortgang wordt hier bijgewerkt terwijl het commando wordt uitgevoerd.';
$lang['AdminSystemUpgrade.index.launch_failed_title'] = 'De upgrade op de achtergrond is niet gestart';
$lang['AdminSystemUpgrade.index.environment_badge_warn'] = '%1$d waarschuwing';
$lang['AdminSystemUpgrade.index.environment_badge_fail'] = '%1$d mislukt';
$lang['AdminSystemUpgrade.index.environment_fail'] = 'Sommige controles zijn mislukt. Los de onderstaande problemen op voordat u de upgrade uitvoert.';
$lang['AdminSystemUpgrade.index.environment_pass'] = 'Alle controles zijn geslaagd. Je systeem is klaar voor zelf-upgrade.';
$lang['AdminSystemUpgrade.index.heading_environment'] = 'Status milieu';
$lang['AdminSystemUpgrade.index.up_to_date'] = 'Je installatie is up-to-date.';
$lang['AdminSystemUpgrade.index.btn_check'] = 'Controleren op updates';
$lang['AdminSystemUpgrade.index.never_checked'] = 'Nooit gecontroleerd';
$lang['AdminSystemUpgrade.index.last_checked'] = 'Laatst gecontroleerd: %1$s';
$lang['AdminSystemUpgrade.index.current_version'] = 'U bent bezig met Blesta %1$s';
$lang['AdminSystemUpgrade.index.heading_current'] = 'Huidige versie';

