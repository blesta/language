<?php
/**
 * System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.it_it
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SystemUpgrade.!error.backup_db_failed'] = 'Il backup del database non è riuscito. L\'aggiornamento non può procedere senza un backup affidabile.';
$lang['SystemUpgrade.!error.backup_files_failed'] = 'Il backup dei file non è riuscito. L\'aggiornamento non può procedere senza un backup affidabile.';
$lang['SystemUpgrade.!error.download_failed'] = 'Impossibile scaricare il file di rilascio.';
$lang['SystemUpgrade.!error.environment_fail'] = 'Uno o più controlli dell\'ambiente non sono riusciti. Risolvere i problemi prima di eseguire l\'aggiornamento.';
$lang['SystemUpgrade.!error.extraction_failed'] = 'Non è stato possibile estrarre l\'archivio di rilascio.';
$lang['SystemUpgrade.!error.hash_mismatch'] = 'La verifica dell\'integrità del file scaricato non è riuscita. Il file potrebbe essere danneggiato.';
$lang['SystemUpgrade.!error.launch_not_detected'] = 'Il processo di aggiornamento in background non si è avviato. Questo può accadere negli ambienti di hosting jailed (CloudLinux/CageFS, alcune configurazioni PHP-FPM), dove il server web non è autorizzato a staccare i processi figli in esecuzione da tempo. L\'aggiornamento può essere completato eseguendo il comando seguente via SSH.';
$lang['SystemUpgrade.!error.license_invalid'] = 'L\'abbonamento al supporto e agli aggiornamenti deve essere attivo per gli aggiornamenti di versione maggiore o minore.';
$lang['SystemUpgrade.!error.lock_stale'] = 'Un processo di aggiornamento precedente sembra essersi interrotto inaspettatamente. È possibile cancellare il blocco per riprovare.';
$lang['SystemUpgrade.!error.php_version'] = 'La versione di destinazione richiede PHP %1$s o più recente. Si sta eseguendo PHP %2$s.';
$lang['SystemUpgrade.!error.signature_invalid'] = 'La verifica della firma di rilascio non è riuscita. Il file potrebbe essere stato manomesso.';
$lang['SystemUpgrade.!error.signature_missing'] = 'La release non include una firma crittografica. Non è possibile verificare l\'autenticità.';
$lang['SystemUpgrade.!error.upgrade_locked'] = 'È già in corso un aggiornamento (avviato dallo staff ID %1$s all\'indirizzo %2$s).';
$lang['SystemUpgrade.!error.upgrader_crashed'] = 'Il processo di aggiornamento sembra essersi interrotto inaspettatamente. Per il ripristino, controllare i percorsi di backup riportati di seguito.';
$lang['SystemUpgrade.!error.upgrader_failed'] = 'Impossibile preparare o avviare il processo di aggiornamento.';
$lang['SystemUpgrade.environment.config_fail'] = 'Configurazione: blesta.php non è scrivibile.';
$lang['SystemUpgrade.environment.config_pass'] = 'Configurazione: blesta.php è scrivibile.';
$lang['SystemUpgrade.environment.disk_pass'] = 'Spazio su disco: %1$s disponibile.';
$lang['SystemUpgrade.environment.disk_warn'] = 'Spazio su disco: Solo %1$s disponibile, si stima che sia necessario %2$s.';
$lang['SystemUpgrade.environment.exec_fail'] = 'Accesso alla shell: la funzione exec() è disabilitata o non disponibile.';
$lang['SystemUpgrade.environment.exec_pass'] = 'Accesso alla shell: la funzione exec() è disponibile.';
$lang['SystemUpgrade.environment.mysqldump_fail'] = 'Backup del database: il comando mysqldump non è disponibile. Installare gli strumenti mysql-client.';
$lang['SystemUpgrade.environment.mysqldump_pass'] = 'Backup del database: è disponibile il comando mysqldump.';
$lang['SystemUpgrade.environment.os_fail'] = 'L\'autoaggiornamento è supportato solo in ambienti Linux.';
$lang['SystemUpgrade.environment.os_pass'] = 'Sistema operativo: Linux rilevato.';
$lang['SystemUpgrade.environment.ownership_fail'] = 'Proprietà dei file: le directory della chiave %1$s non sono di proprietà dell\'utente del server web.';
$lang['SystemUpgrade.environment.ownership_pass'] = 'Proprietà dei file: Tutte le directory chiave sono di proprietà dell\'utente del server web.';
$lang['SystemUpgrade.environment.rsync_fail'] = 'Sincronizzazione dei file: il comando rsync non è disponibile. Installare rsync.';
$lang['SystemUpgrade.environment.rsync_pass'] = 'Sincronizzazione dei file: è disponibile il comando rsync.';
$lang['SystemUpgrade.environment.setsid_pass'] = 'Distacco del processo: il comando setsid è disponibile.';
$lang['SystemUpgrade.environment.setsid_warn'] = 'Distacco del processo: il comando setsid non è disponibile. L\'aggiornamento potrebbe richiedere un comando manuale via SSH per essere completato negli ambienti di hosting bloccati.';
$lang['SystemUpgrade.environment.tar_fail'] = 'Backup dei file: il comando tar non è disponibile. Installare tar.';
$lang['SystemUpgrade.environment.tar_pass'] = 'Backup dei file: è disponibile il comando tar.';
$lang['SystemUpgrade.environment.unzip_fail'] = 'Estrazione dell\'archivio: il comando unzip non è disponibile. Installare unzip.';
$lang['SystemUpgrade.environment.unzip_pass'] = 'Estrazione di archivi: è disponibile il comando unzip.';
$lang['SystemUpgrade.environment.writable_fail'] = 'Sistema di file: La directory di installazione non è scrivibile dal server web.';
$lang['SystemUpgrade.environment.writable_pass'] = 'Sistema di file: La directory di installazione è scrivibile.';
$lang['SystemUpgrade.maintenance_reason'] = 'Il sistema è attualmente in fase di aggiornamento. Si prega di controllare a breve.';

