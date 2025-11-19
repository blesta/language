<?php
/**
 * Cron Tasks
 *
 * @package blesta
 * @subpackage blesta.language.it_it
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['CronTasks.crontask.name.license_validation'] = 'Convalida della licenza';
$lang['CronTasks.crontask.description.transition_quotations'] = 'Contrassegnare le citazioni oltre la data di validità, come scadute.';
$lang['CronTasks.crontask.name.transition_quotations'] = 'Citazioni di transizione';
$lang['CronTasks.crontask.description.unsuspend_services'] = 'I servizi sospesi che sono stati pagati saranno sospesi all\'intervallo selezionato.';
$lang['CronTasks.crontask.name.unsuspend_services'] = 'Servizi di disattivazione';
$lang['CronTasks.crontask.description.cleanup_logs'] = 'I vecchi registri di gateway, moduli e altri registri verranno ruotati quotidianamente in base alle impostazioni di conservazione al momento specificato.';
$lang['CronTasks.crontask.name.cleanup_logs'] = 'Pulire i registri';
$lang['CronTasks.crontask.description.deliver_reports'] = 'I rapporti A/R, la generazione di fatture, la responsabilità fiscale e altri rapporti saranno consegnati quotidianamente all\'ora specificata.';
$lang['CronTasks.crontask.name.deliver_reports'] = 'Consegna dei rapporti';
$lang['CronTasks.crontask.description.exchange_rates'] = 'I tassi di cambio saranno aggiornati all\'intervallo specificato. Non si consiglia di eseguire questa operazione più di due volte al giorno per non rischiare di essere bloccati.';
$lang['CronTasks.crontask.name.exchange_rates'] = 'Aggiornamenti sui tassi di cambio';
$lang['CronTasks.crontask.description.suspend_services'] = 'I servizi scaduti saranno sospesi ogni giorno all\'ora specificata.';
$lang['CronTasks.crontask.name.suspend_services'] = 'Sospendere i servizi';
$lang['CronTasks.crontask.description.backups_sftp'] = 'I backup SFTP sono programmati in Impostazioni di sistema > Backup > FTP sicuro.';
$lang['CronTasks.crontask.name.backups_sftp'] = 'Backup SFTP';
$lang['CronTasks.crontask.description.backups_amazons3'] = 'I backup di Amazon S3 sono pianificati in Impostazioni di sistema > Backup > Amazon S3.';
$lang['CronTasks.crontask.name.backups_amazons3'] = 'Backup di Amazon S3';
$lang['CronTasks.crontask.description.deliver_invoices'] = 'Le fatture programmate per la consegna saranno inviate all\'intervallo selezionato.';
$lang['CronTasks.crontask.name.deliver_invoices'] = 'Consegna delle fatture';
$lang['CronTasks.crontask.description.card_expiration_reminders'] = 'Il 15 del mese verrà inviato un promemoria per le carte di credito che scadono il mese stesso all\'ora indicata.';
$lang['CronTasks.crontask.name.card_expiration_reminders'] = 'Promemoria scadenza carta 15 del mese';
$lang['CronTasks.crontask.description.cancel_scheduled_services'] = 'I servizi con date di cancellazione future impostate vengono rimossi all\'intervallo selezionato.';
$lang['CronTasks.crontask.name.cancel_scheduled_services'] = 'Annullamento dei servizi programmati';
$lang['CronTasks.crontask.description.provision_pending_services'] = 'I servizi in attesa di pagamento vengono attivati all\'intervallo selezionato.';
$lang['CronTasks.crontask.name.provision_pending_services'] = 'Accantonamento pagato Servizi in attesa';
$lang['CronTasks.crontask.description.process_renewing_services'] = 'I servizi di rinnovo collegati ai moduli vengono rinnovati all\'intervallo selezionato.';
$lang['CronTasks.crontask.name.process_renewing_services'] = 'Rinnovo del servizio di assistenza ai processi';
$lang['CronTasks.crontask.description.process_service_changes'] = 'Le modifiche del servizio in coda (ad esempio, gli aggiornamenti) vengono elaborate all\'intervallo selezionato.';
$lang['CronTasks.crontask.name.process_service_changes'] = 'Modifiche al servizio di processo';
$lang['CronTasks.crontask.description.apply_payments'] = 'I crediti sfusi vengono applicati automaticamente alle fatture aperte all\'intervallo selezionato.';
$lang['CronTasks.crontask.name.apply_payments'] = 'Applicare i pagamenti alle fatture aperte';
$lang['CronTasks.crontask.description.payment_reminders'] = 'I solleciti di pagamento e gli avvisi di mora vengono inviati quotidianamente all\'ora specificata.';
$lang['CronTasks.crontask.name.payment_reminders'] = 'Promemoria per il pagamento';
$lang['CronTasks.crontask.description.autodebit'] = 'I conti di pagamento selezionati per l\'addebito automatico verranno eseguiti per pagare le fatture aperte ogni giorno all\'ora specificata.';
$lang['CronTasks.crontask.name.autodebit'] = 'Addebito automatico';
$lang['CronTasks.crontask.description.apply_invoice_late_fees'] = 'Applica le spese di mora alle fatture aperte un numero configurato di giorni dopo la scadenza.';
$lang['CronTasks.crontask.name.apply_invoice_late_fees'] = 'Applicare le tariffe per i ritardi di fatturazione';
$lang['CronTasks.crontask.description.create_invoice'] = 'Le fatture ricorrenti e i servizi di rinnovo vengono fatturati tramite questa attività, che viene eseguita una volta al giorno all\'ora specificata.';
$lang['CronTasks.crontask.name.create_invoice'] = 'Creare una fattura';
$lang['CronTasks.task_type.module'] = 'Modulo';
$lang['CronTasks.task_type.plugin'] = 'Plugin';
$lang['CronTasks.task_type.system'] = 'Sistema';
$lang['CronTasks.!error.type.format'] = 'Tipo di attività cron non valida. Deve essere a tempo o a intervallo.';
$lang['CronTasks.!error.time.format'] = 'L\'ora è in un formato non valido.';
$lang['CronTasks.!error.interval.format'] = 'L\'intervallo deve essere un numero, che rappresenta i minuti.';
$lang['CronTasks.!error.enabled.length'] = 'La lunghezza abilitata non può superare 1 carattere.';
$lang['CronTasks.!error.enabled.format'] = 'abilitato deve essere un numero.';
$lang['CronTasks.!error.is_lang.length'] = 'La lunghezza di is_lang non può superare 1 carattere.';
$lang['CronTasks.!error.is_lang.format'] = 'is_lang deve essere un numero.';
$lang['CronTasks.!error.name.empty'] = 'Inserire un nome.';
$lang['CronTasks.!error.id.exists'] = 'ID attività cron non valido.';
$lang['CronTasks.!error.run_id.exists'] = 'ID di esecuzione dell\'attività cron non valido.';
$lang['CronTasks.!error.dir.length'] = 'La lunghezza della directory non può superare i 64 caratteri.';
$lang['CronTasks.!error.task_type.format'] = 'Tipo di attività non valida. Deve essere un modulo, un plugin o un sistema.';
$lang['CronTasks.!error.key.length'] = 'La lunghezza della chiave del task cron non può superare i 64 caratteri.';
$lang['CronTasks.!error.key.unique'] = 'La chiave dell\'attività cron fornita è già occupata.';
$lang['CronTasks.crontask.description.delete_expired_password_reset_tokens'] = 'Rimuove dal sistema tutti i token di reimpostazione della password oltre la data di scadenza.';
$lang['CronTasks.crontask.name.delete_expired_password_reset_tokens'] = 'Eliminare i token di reimpostazione della password scaduti';
$lang['CronTasks.crontask.description.low_balance_notifications'] = 'Invia un avviso a tutti gli utenti il cui livello di credito è sceso al di sotto della soglia configurata.';
$lang['CronTasks.crontask.name.low_balance_notifications'] = 'Notifiche di saldo basso';

