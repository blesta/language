<?php
/**
 * Admin System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.it_it
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemUpgrade.index.backup_col_date'] = 'Data';
$lang['AdminSystemUpgrade.index.backup_col_file'] = 'File';
$lang['AdminSystemUpgrade.index.backup_col_size'] = 'Dimensione';
$lang['AdminSystemUpgrade.index.backup_col_type'] = 'Tipo';
$lang['AdminSystemUpgrade.index.backup_database'] = 'Database';
$lang['AdminSystemUpgrade.index.backup_files'] = 'File';
$lang['AdminSystemUpgrade.index.boxtitle_upgrade'] = 'Opzioni di aggiornamento';
$lang['AdminSystemUpgrade.index.btn_check'] = 'Verifica degli aggiornamenti';
$lang['AdminSystemUpgrade.index.btn_clear_lock'] = 'Serratura trasparente';
$lang['AdminSystemUpgrade.index.btn_copy_command'] = 'Copia';
$lang['AdminSystemUpgrade.index.btn_dashboard'] = 'Ritorno al cruscotto';
$lang['AdminSystemUpgrade.index.btn_delete'] = 'Cancellare';
$lang['AdminSystemUpgrade.index.btn_download'] = 'Scaricare';
$lang['AdminSystemUpgrade.index.btn_retry'] = 'Riprova';
$lang['AdminSystemUpgrade.index.btn_upgrade'] = 'Aggiorna ora';
$lang['AdminSystemUpgrade.index.changelog_link'] = 'Visualizza il Changelog';
$lang['AdminSystemUpgrade.index.clean_stale_files'] = 'Rimuovere i file di base obsoleti dopo l\'aggiornamento';
$lang['AdminSystemUpgrade.index.clean_stale_files_note'] = 'Elimina i file nelle directory del nucleo che non sono presenti nel manifest della nuova release. Lasciare deselezionato a meno che non si sia certi che non esistano file personalizzati nelle directory del nucleo.';
$lang['AdminSystemUpgrade.index.command_copied'] = 'Copiato';
$lang['AdminSystemUpgrade.index.confirm_delete_backup'] = 'Siete sicuri di voler eliminare questo backup? Non è possibile annullarlo.';
$lang['AdminSystemUpgrade.index.current_version'] = 'Stai eseguendo Blesta %1$s';
$lang['AdminSystemUpgrade.index.environment_badge_fail'] = '%1$d fallito';
$lang['AdminSystemUpgrade.index.environment_badge_warn'] = 'Avviso %1$d';
$lang['AdminSystemUpgrade.index.environment_fail'] = 'Alcuni controlli non sono riusciti. Risolvere i problemi indicati di seguito prima di eseguire l\'aggiornamento.';
$lang['AdminSystemUpgrade.index.environment_pass'] = 'Tutti i controlli sono stati superati. Il sistema è pronto per l\'autoaggiornamento.';
$lang['AdminSystemUpgrade.index.failure_backup_label'] = 'Backup disponibili:';
$lang['AdminSystemUpgrade.index.failure_db_version_after'] = 'Corrente: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_before'] = 'Prima dell\'aggiornamento: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_expected'] = 'Previsto dopo l\'aggiornamento: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_label'] = 'Versione del database:';
$lang['AdminSystemUpgrade.index.failure_db_version_mismatch'] = 'La versione del database non ha raggiunto il valore previsto. L\'aggiornamento potrebbe essersi interrotto a metà di una versione, lasciando applicate alcune modifiche allo schema.';
$lang['AdminSystemUpgrade.index.failure_explanation'] = 'L\'aggiornamento non è stato completato correttamente. Il sistema potrebbe trovarsi in uno stato incoerente e alcune modifiche al database della versione non riuscita potrebbero essere già applicate. Se si esegue nuovamente l\'aggiornamento, è probabile che il risultato sia diverso. Si consiglia di eseguire il ripristino dal backup del database prima di riprovare. I backup sono stati eseguiti prima dell\'avvio dell\'aggiornamento e sono elencati di seguito. Per ripristinare, ripristinare questi backup manualmente o aprire un ticket di assistenza.';
$lang['AdminSystemUpgrade.index.failure_heading'] = 'Cosa fare dopo';
$lang['AdminSystemUpgrade.index.field_upgradesubmit'] = 'Aggiornamento delle impostazioni';
$lang['AdminSystemUpgrade.index.heading_available'] = 'Aggiornamenti disponibili';
$lang['AdminSystemUpgrade.index.heading_backups'] = 'Aggiornamento dei backup';
$lang['AdminSystemUpgrade.index.heading_current'] = 'Versione attuale';
$lang['AdminSystemUpgrade.index.heading_environment'] = 'Stato dell\'ambiente';
$lang['AdminSystemUpgrade.index.heading_progress'] = 'Progressi dell\'aggiornamento';
$lang['AdminSystemUpgrade.index.heading_recovery'] = 'Istruzioni per il recupero';
$lang['AdminSystemUpgrade.index.last_checked'] = 'Ultimo controllo: %1$s';
$lang['AdminSystemUpgrade.index.launch_failed_instruction'] = 'Eseguire il seguente comando via SSH (come utente proprietario dell\'installazione di Blesta) per completare l\'aggiornamento. Lasciate aperta questa pagina: il progresso continuerà ad essere aggiornato qui durante l\'esecuzione del comando.';
$lang['AdminSystemUpgrade.index.launch_failed_title'] = 'L\'aggiornamento in background non è stato avviato';
$lang['AdminSystemUpgrade.index.lock_active'] = 'Attualmente è in corso un aggiornamento, iniziato su %1$s.';
$lang['AdminSystemUpgrade.index.lock_stale'] = 'Un processo di aggiornamento precedente sembra essersi interrotto inaspettatamente.';
$lang['AdminSystemUpgrade.index.never_checked'] = 'Mai controllato';
$lang['AdminSystemUpgrade.index.no_backups'] = 'Non sono stati trovati backup di aggiornamento.';
$lang['AdminSystemUpgrade.index.no_results'] = 'Al momento non sono disponibili opzioni di aggiornamento.';
$lang['AdminSystemUpgrade.index.no_support'] = 'L\'abbonamento a supporto e aggiornamenti non è attivo. Sono disponibili solo gli aggiornamenti delle patch.';
$lang['AdminSystemUpgrade.index.page_title'] = 'Impostazioni > Sistema > Opzioni di aggiornamento';
$lang['AdminSystemUpgrade.index.recovery_db_path'] = 'Backup del database: %1$s';
$lang['AdminSystemUpgrade.index.recovery_files_path'] = 'Backup dei file: %1$s';
$lang['AdminSystemUpgrade.index.recovery_instructions'] = 'Per ripristinare il backup, eseguire i seguenti comandi sul server:';
$lang['AdminSystemUpgrade.index.release_date'] = 'Rilasciato: %1$s';
$lang['AdminSystemUpgrade.index.requires_support'] = 'Richiede un abbonamento attivo al supporto e agli aggiornamenti.';
$lang['AdminSystemUpgrade.index.select_version'] = 'Selezionare una versione da aggiornare:';
$lang['AdminSystemUpgrade.index.skip_integrity_check'] = 'Salta il controllo di integrità del file';
$lang['AdminSystemUpgrade.index.step_backup_db'] = 'Backup del database';
$lang['AdminSystemUpgrade.index.step_backup_files'] = 'Backup dei file';
$lang['AdminSystemUpgrade.index.step_download'] = 'Scarica la liberatoria';
$lang['AdminSystemUpgrade.index.step_extract'] = 'Estrarre i file';
$lang['AdminSystemUpgrade.index.step_finalize'] = 'Finalizzare';
$lang['AdminSystemUpgrade.index.step_maintenance'] = 'Abilita la modalità di manutenzione';
$lang['AdminSystemUpgrade.index.step_migrate'] = 'Eseguire le migrazioni del database';
$lang['AdminSystemUpgrade.index.step_preflight'] = 'Controlli pre-volo';
$lang['AdminSystemUpgrade.index.step_replace'] = 'Sostituire i file';
$lang['AdminSystemUpgrade.index.step_verify'] = 'Verificare l\'integrità';
$lang['AdminSystemUpgrade.index.up_to_date'] = 'L\'installazione è aggiornata.';
$lang['AdminSystemUpgrade.index.upgrade_complete'] = 'Aggiornamento completato con successo!';
$lang['AdminSystemUpgrade.index.upgrade_failed'] = 'Aggiornamento fallito.';
$lang['AdminSystemUpgrade.index.upgrade_latest'] = 'Aggiornamento completo: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.upgrade_patch'] = 'Aggiornamento patch: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.upgrade_warning'] = 'In questo modo si attiva la modalità di manutenzione, si creano i backup, si scarica e si installa la nuova versione e si eseguono le migrazioni del database. Una volta avviato, questo processo non può essere interrotto.';
$lang['AdminSystemUpgrade.upgrade.btn_abort'] = 'Annullamento';
$lang['AdminSystemUpgrade.upgrade.btn_continue'] = 'Continuare con l\'aggiornamento';
$lang['AdminSystemUpgrade.upgrade.label_missing'] = 'File mancanti';
$lang['AdminSystemUpgrade.upgrade.label_modified'] = 'File modificati';
$lang['AdminSystemUpgrade.upgrade.modified_files'] = '%1$s I file del nucleo sono stati modificati rispetto alla versione originale. Queste modifiche saranno sovrascritte durante l\'aggiornamento. Volete continuare?';
$lang['AdminSystemUpgrade.upgrade.modified_files_title'] = 'File del nucleo modificati';
$lang['AdminSystemUpgrade.upgrade.no_checksums'] = 'Il manifesto dei file per l\'installazione corrente non include le somme di controllo. La verifica dell\'integrità dei file verrà saltata. Volete continuare con l\'aggiornamento?';
$lang['AdminSystemUpgrade.upgrade.no_manifest'] = 'Non è stato trovato alcun file manifest per l\'installazione corrente. La verifica dell\'integrità dei file verrà saltata. Volete continuare con l\'aggiornamento?';
$lang['AdminSystemUpgrade.upgrade.started'] = 'Il processo di aggiornamento è iniziato. Potete chiudere questa pagina: l\'aggiornamento continuerà in background. Tornare a questa pagina per verificare l\'avanzamento.';

