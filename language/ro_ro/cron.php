<?php
/**
 * Cron
 *
 * @package blesta
 * @subpackage blesta.language.ro_ro
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Cron.addpaidpendingservices.service_success'] = 'Serviciul în așteptare #%1$s de la clientul #%2$s este acum activ.';
$lang['Cron.addpaidpendingservices.service_error'] = 'Serviciul în așteptare #%1$s de la clientul #%2$s nu a putut fi activat.';
$lang['Cron.addpaidpendingservices.completed'] = 'Sarcina serviciilor în așteptare plătite a fost finalizată.';
$lang['Cron.addpaidpendingservices.attempt'] = 'Încercarea de a furniza servicii în așteptare plătite.';
$lang['Cron.cancelscheduledservices.cancel_success'] = 'Serviciul #%1$s de la clientul #%2$s a fost anulat.';
$lang['Cron.cancelscheduledservices.cancel_error'] = 'Serviciul #%1$s de la clientul #%2$s nu a putut fi anulat.';
$lang['Cron.cancelscheduledservices.completed'] = 'Sarcina de anulare a serviciilor programate s-a finalizat.';
$lang['Cron.cancelscheduledservices.attempt'] = 'Încercarea de a anula serviciile programate.';
$lang['Cron.unsuspendservices.unsuspend_success'] = 'Serviciul #%1$s de la clientul %2$s a fost suspendat.';
$lang['Cron.unsuspendservices.unsuspend_error'] = 'Serviciul #%1$s de la clientul %2$s nu a putut fi dezactivat.';
$lang['Cron.unsuspendservices.completed'] = 'Sarcina de desuspendare a serviciilor s-a încheiat.';
$lang['Cron.unsuspendservices.attempt'] = 'Încercarea de a anula suspendarea serviciilor suspendate plătite.';
$lang['Cron.suspendservices.suspend_success'] = 'Serviciul #%1$s de la clientul %2$s a fost suspendat.';
$lang['Cron.suspendservices.suspend_error'] = 'Serviciul #%1$s de la clientul %2$s nu a putut fi suspendat.';
$lang['Cron.suspendservices.suspension_reason'] = 'Neplata';
$lang['Cron.suspendservices.completed'] = 'Sarcina de suspendare a serviciilor s-a încheiat.';
$lang['Cron.suspendservices.attempt'] = 'Încercarea de a suspenda serviciile scadente.';
$lang['Cron.cardexpirationreminders.success'] = 'A fost livrat cu succes memento-ul de expirare pentru contactul %1$s %2$s de la clientul #%3$s.';
$lang['Cron.cardexpirationreminders.failed'] = 'Nu s-a putut trimite memento-ul de expirare pentru contactul %1$s %2$s de la clientul #%3$s.';
$lang['Cron.cardexpirationreminders.completed'] = 'Sarcina de reamintire a expirării cardului s-a finalizat.';
$lang['Cron.cardexpirationreminders.attempt'] = 'Încercarea de a trimite memento-uri de expirare a cardurilor.';
$lang['Cron.autodebitinvoices.charge_success'] = 'Plata a fost procesată cu succes.';
$lang['Cron.autodebitinvoices.charge_failed'] = 'Imposibilitatea de a procesa plata.';
$lang['Cron.autodebitinvoices.charge_attempt'] = 'Încercăm să debităm automat clientul #%1$s pentru toate facturile deschise în valoare de %2$s.';
$lang['Cron.autodebitinvoices.completed'] = 'Sarcina de debitare automată a facturilor s-a finalizat.';
$lang['Cron.autodebitinvoices.attempt'] = 'Încercarea de a debita automat facturile deschise.';
$lang['Cron.applycredits.apply_none'] = 'Nu există facturi la care se pot aplica credite.';
$lang['Cron.applycredits.apply_success'] = 'Ați aplicat cu succes creditele restante din tranzacția %1$s pentru clientul #%2$s la factura #%3$s în valoare de %4$s.';
$lang['Cron.applycredits.apply_failed'] = 'Nu se pot aplica creditele în așteptare pentru clientul #%1$s.';
$lang['Cron.applycredits.completed'] = 'Sarcina de aplicare a creditelor a fost finalizată.';
$lang['Cron.applycredits.attempt'] = 'Încercarea de a aplica credite la facturile deschise.';
$lang['Cron.index.completed_all_system'] = 'Toate sarcinile sistemului au fost finalizate.';
$lang['Cron.index.attempt_all_system'] = 'Încercarea de a rula toate sarcinile de sistem.';
$lang['Cron.index.completed_all'] = 'Toate sarcinile au fost îndeplinite.';
$lang['Cron.index.attempt_all'] = 'Încercarea de a rula toate sarcinile pentru %1$s.';
$lang['Cron.!error.task_execution.failed'] = 'Eroare: %1$s %2$s';
$lang['Cron.!error.cron.failed'] = 'Cron nu a reușit să se înregistreze.';
$lang['Cron.!error.task_filter.exclude_not_array'] = 'Filtrul Task "exclude" trebuie să fie un array.';
$lang['Cron.!error.task_filter.include_not_array'] = 'Filtrul de sarcină "include" trebuie să fie un array.';
$lang['Cron.!error.task_filter.both_include_exclude'] = 'Filtrul de sarcini nu poate avea ambele chei "include" și "exclude".';
$lang['Cron.!error.task_filter.invalid_format'] = 'Task filter trebuie să fie un obiect JSON.';
$lang['Cron.!error.task_filter.invalid_json'] = 'JSON invalid în parametrul filtrului sarcinii: %1$s';

