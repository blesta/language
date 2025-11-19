<?php
/**
 * Cron Tasks
 *
 * @package blesta
 * @subpackage blesta.language.ro_ro
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['CronTasks.crontask.name.license_validation'] = 'Validarea licenței';
$lang['CronTasks.crontask.description.transition_quotations'] = 'Marcați cotațiile care au depășit data de valabilitate, ca fiind expirate';
$lang['CronTasks.crontask.name.transition_quotations'] = 'Citate de tranziție';
$lang['CronTasks.crontask.description.unsuspend_services'] = 'Serviciile suspendate care au fost plătite vor fi suspendate la intervalul selectat.';
$lang['CronTasks.crontask.name.unsuspend_services'] = 'Servicii de desuspendare';
$lang['CronTasks.crontask.description.cleanup_logs'] = 'Jurnalele vechi ale gateway-ului, modulelor și ale altor jurnale vor fi rotite zilnic, în funcție de setările de păstrare a acestora la momentul specificat.';
$lang['CronTasks.crontask.name.cleanup_logs'] = 'Curățați jurnalele';
$lang['CronTasks.crontask.description.deliver_reports'] = 'Rapoartele A/R, Generarea facturilor, Obligația fiscală și alte rapoarte vor fi livrate zilnic, la ora specificată.';
$lang['CronTasks.crontask.name.deliver_reports'] = 'Furnizarea de rapoarte';
$lang['CronTasks.crontask.description.exchange_rates'] = 'Cursurile de schimb vor fi actualizate la intervalul specificat. Nu se recomandă să executați acest lucru mai mult de două ori pe zi pentru a nu risca să fiți blocat.';
$lang['CronTasks.crontask.name.exchange_rates'] = 'Actualizări ale cursului de schimb';
$lang['CronTasks.crontask.description.suspend_services'] = 'Serviciile restante vor fi suspendate zilnic la ora specificată.';
$lang['CronTasks.crontask.name.suspend_services'] = 'Suspendarea serviciilor';
$lang['CronTasks.crontask.description.backups_sftp'] = 'Copiile de rezervă SFTP sunt programate în Setări sistem > Copii de rezervă > Secure FTP.';
$lang['CronTasks.crontask.name.backups_sftp'] = 'Copii de rezervă SFTP';
$lang['CronTasks.crontask.description.backups_amazons3'] = 'Copiile de rezervă Amazon S3 sunt programate în Setări sistem > Copii de rezervă > Amazon S3.';
$lang['CronTasks.crontask.name.backups_amazons3'] = 'Copii de rezervă Amazon S3';
$lang['CronTasks.crontask.description.deliver_invoices'] = 'Facturile care sunt programate pentru livrare vor fi trimise la intervalul selectat.';
$lang['CronTasks.crontask.name.deliver_invoices'] = 'Livrarea facturilor';
$lang['CronTasks.crontask.description.card_expiration_reminders'] = 'În data de 15 a lunii se va trimite o atenționare pentru cardurile de credit care expiră în luna respectivă la data specificată.';
$lang['CronTasks.crontask.name.card_expiration_reminders'] = 'Reamintiri privind expirarea cardului 15 ale lunii';
$lang['CronTasks.crontask.description.cancel_scheduled_services'] = 'Serviciile pentru care s-au stabilit date de anulare viitoare sunt eliminate la intervalul selectat.';
$lang['CronTasks.crontask.name.cancel_scheduled_services'] = 'Anularea serviciilor programate';
$lang['CronTasks.crontask.description.provision_pending_services'] = 'Serviciile în așteptare plătite sunt activate la intervalul selectat.';
$lang['CronTasks.crontask.name.provision_pending_services'] = 'Provizioane plătite Servicii în așteptare';
$lang['CronTasks.crontask.description.process_renewing_services'] = 'Serviciile de reînnoire care sunt atașate la module sunt reînnoite la intervalul selectat.';
$lang['CronTasks.crontask.name.process_renewing_services'] = 'Reînnoirea serviciului de procesare';
$lang['CronTasks.crontask.description.process_service_changes'] = 'Modificările de servicii plătite aflate în coadă (de exemplu, actualizări) sunt procesate la intervalul selectat.';
$lang['CronTasks.crontask.name.process_service_changes'] = 'Modificări ale serviciului de procesare';
$lang['CronTasks.crontask.description.apply_payments'] = 'Creditele libere se aplică automat la facturile deschise la intervalul selectat.';
$lang['CronTasks.crontask.name.apply_payments'] = 'Aplicați plățile la facturile deschise';
$lang['CronTasks.crontask.description.payment_reminders'] = 'Înștiințările de plată și notificările de întârziere sunt trimise zilnic, la ora specificată.';
$lang['CronTasks.crontask.name.payment_reminders'] = 'Reamintiri de plată';
$lang['CronTasks.crontask.description.autodebit'] = 'Conturile de plată selectate pentru debitare automată vor fi rulate pentru a plăti zilnic facturile deschise la ora specificată.';
$lang['CronTasks.crontask.name.autodebit'] = 'Debit automat';
$lang['CronTasks.crontask.description.apply_invoice_late_fees'] = 'Aplică penalități de întârziere la facturile deschise la un număr configurat de zile de la scadență.';
$lang['CronTasks.crontask.name.apply_invoice_late_fees'] = 'Aplicați taxe de întârziere pentru facturi';
$lang['CronTasks.crontask.description.create_invoice'] = 'Facturile recurente și serviciile de reînnoire sunt facturate prin intermediul acestei sarcini, care se execută o dată pe zi la ora specificată.';
$lang['CronTasks.crontask.name.create_invoice'] = 'Crearea facturii';
$lang['CronTasks.task_type.module'] = 'Modul';
$lang['CronTasks.task_type.plugin'] = 'Plugin';
$lang['CronTasks.task_type.system'] = 'Sistem';
$lang['CronTasks.!error.type.format'] = 'Tip de sarcină cron invalidă. Trebuie să fie timp sau interval.';
$lang['CronTasks.!error.time.format'] = 'Ora este într-un format invalid.';
$lang['CronTasks.!error.interval.format'] = 'Intervalul trebuie să fie un număr, reprezentând minute.';
$lang['CronTasks.!error.enabled.length'] = 'lungimea activată nu poate depăși 1 caracter.';
$lang['CronTasks.!error.enabled.format'] = 'enabled trebuie să fie un număr.';
$lang['CronTasks.!error.is_lang.length'] = 'Lungimea is_lang nu poate depăși 1 caracter.';
$lang['CronTasks.!error.is_lang.format'] = 'is_lang trebuie să fie un număr.';
$lang['CronTasks.!error.name.empty'] = 'Vă rugăm să introduceți un nume.';
$lang['CronTasks.!error.id.exists'] = 'ID-ul sarcinii cron invalid.';
$lang['CronTasks.!error.run_id.exists'] = 'ID-ul de execuție al sarcinii cron invalid.';
$lang['CronTasks.!error.dir.length'] = 'Lungimea directorului nu poate depăși 64 de caractere.';
$lang['CronTasks.!error.task_type.format'] = 'Tip de sarcină invalid. Trebuie să fie modul, plugin sau sistem.';
$lang['CronTasks.!error.key.length'] = 'Lungimea cheii pentru sarcina cron nu poate depăși 64 de caractere.';
$lang['CronTasks.!error.key.unique'] = 'Cheia de sarcină cron furnizată este deja ocupată.';
$lang['CronTasks.crontask.description.delete_expired_password_reset_tokens'] = 'Elimină din sistem toate jetoanele de resetare a parolei care au depășit data de expirare.';
$lang['CronTasks.crontask.name.delete_expired_password_reset_tokens'] = 'Ștergeți jetoanele de resetare a parolei expirate';
$lang['CronTasks.crontask.description.low_balance_notifications'] = 'Trimite o notificare tuturor utilizatorilor ale căror niveluri de credit au scăzut sub pragul configurat.';
$lang['CronTasks.crontask.name.low_balance_notifications'] = 'Notificări privind soldul scăzut';

