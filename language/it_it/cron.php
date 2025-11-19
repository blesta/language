<?php
/**
 * Cron
 *
 * @package blesta
 * @subpackage blesta.language.it_it
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Cron.addpaidpendingservices.service_success'] = 'Il servizio in sospeso #%1$s del cliente #%2$s è ora attivo.';
$lang['Cron.addpaidpendingservices.service_error'] = 'Non è stato possibile rendere attivo il servizio in sospeso #%1$s del cliente #%2$s.';
$lang['Cron.addpaidpendingservices.completed'] = 'L\'attività di servizi in attesa di pagamento è stata completata.';
$lang['Cron.addpaidpendingservices.attempt'] = 'Tentativo di fornitura di servizi in attesa di pagamento.';
$lang['Cron.cancelscheduledservices.cancel_success'] = 'Il servizio #%1$s del cliente #%2$s è stato annullato.';
$lang['Cron.cancelscheduledservices.cancel_error'] = 'Non è stato possibile annullare il servizio #%1$s del cliente #%2$s.';
$lang['Cron.cancelscheduledservices.completed'] = 'L\'attività di annullamento dei servizi pianificati è stata completata.';
$lang['Cron.cancelscheduledservices.attempt'] = 'Tentativo di cancellare i servizi programmati.';
$lang['Cron.unsuspendservices.unsuspend_success'] = 'Il servizio #%1$s del cliente %2$s è stato sospeso.';
$lang['Cron.unsuspendservices.unsuspend_error'] = 'Il servizio #%1$s del client %2$s non può essere sospeso.';
$lang['Cron.unsuspendservices.completed'] = 'L\'attività di disattivazione dei servizi è stata completata.';
$lang['Cron.unsuspendservices.attempt'] = 'Tentativo di disinstallare i servizi sospesi a pagamento.';
$lang['Cron.suspendservices.suspend_success'] = 'Il servizio #%1$s del cliente %2$s è stato sospeso.';
$lang['Cron.suspendservices.suspend_error'] = 'Non è stato possibile sospendere il servizio #%1$s del client %2$s.';
$lang['Cron.suspendservices.suspension_reason'] = 'Mancato pagamento';
$lang['Cron.suspendservices.completed'] = 'L\'attività di sospensione dei servizi è stata completata.';
$lang['Cron.suspendservices.attempt'] = 'Tentativo di sospendere i servizi scaduti.';
$lang['Cron.cardexpirationreminders.success'] = 'Consegnato con successo il promemoria di scadenza per il contatto %1$s %2$s dal cliente #%3$s.';
$lang['Cron.cardexpirationreminders.failed'] = 'Non è stato possibile inviare il promemoria di scadenza per il contatto %1$s %2$s del cliente #%3$s.';
$lang['Cron.cardexpirationreminders.completed'] = 'L\'attività di promemoria per la scadenza della carta è stata completata.';
$lang['Cron.cardexpirationreminders.attempt'] = 'Tentativo di inviare promemoria per la scadenza della carta.';
$lang['Cron.autodebitinvoices.charge_success'] = 'Il pagamento è stato elaborato con successo.';
$lang['Cron.autodebitinvoices.charge_failed'] = 'Impossibile elaborare il pagamento.';
$lang['Cron.autodebitinvoices.charge_attempt'] = 'Tentativo di addebitare automaticamente al cliente #%1$s tutte le fatture aperte per un importo di %2$s.';
$lang['Cron.autodebitinvoices.completed'] = 'L\'attività di addebito automatico delle fatture è stata completata.';
$lang['Cron.autodebitinvoices.attempt'] = 'Tentativo di addebito automatico delle fatture aperte.';
$lang['Cron.applycredits.apply_none'] = 'Non ci sono fatture a cui possono essere applicati i crediti.';
$lang['Cron.applycredits.apply_success'] = 'Applicati con successo i crediti in sospeso dalla transazione %1$s per il cliente #%2$s alla fattura #%3$s per un importo di %4$s.';
$lang['Cron.applycredits.apply_failed'] = 'Impossibile applicare i crediti in sospeso per il cliente #%1$s.';
$lang['Cron.applycredits.completed'] = 'L\'attività di applicazione dei crediti è stata completata.';
$lang['Cron.applycredits.attempt'] = 'Tentativo di applicare i crediti alle fatture aperte.';
$lang['Cron.index.completed_all_system'] = 'Tutte le attività del sistema sono state completate.';
$lang['Cron.index.attempt_all_system'] = 'Tentativo di eseguire tutte le attività di sistema.';
$lang['Cron.index.completed_all'] = 'Tutti i compiti sono stati completati.';
$lang['Cron.index.attempt_all'] = 'Tentativo di eseguire tutte le attività per %1$s.';
$lang['Cron.!error.task_execution.failed'] = 'Errore: %1$s %2$s';
$lang['Cron.!error.cron.failed'] = 'Cron non è riuscito a registrare.';
$lang['Cron.!error.task_filter.exclude_not_array'] = 'Il filtro dell\'attività "exclude" deve essere una matrice.';
$lang['Cron.!error.task_filter.include_not_array'] = 'Il filtro del task "include" deve essere un array.';
$lang['Cron.!error.task_filter.both_include_exclude'] = 'Il filtro delle attività non può avere entrambe le chiavi "include" ed "esclude".';
$lang['Cron.!error.task_filter.invalid_format'] = 'Il filtro dell\'attività deve essere un oggetto JSON.';
$lang['Cron.!error.task_filter.invalid_json'] = 'JSON non valido nel parametro del filtro dell\'attività: %1$s';

