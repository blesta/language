<?php
/**
 * Cron
 *
 * @package blesta
 * @subpackage blesta.language.sv_se
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Cron.addpaidpendingservices.service_success'] = 'Den väntande tjänsten #%1$s från klient #%2$s är nu aktiv.';
$lang['Cron.addpaidpendingservices.service_error'] = 'Den väntande tjänsten #%1$s från klient #%2$s kunde inte göras aktiv.';
$lang['Cron.addpaidpendingservices.completed'] = 'Uppgiften om betalda väntjänster har slutförts.';
$lang['Cron.addpaidpendingservices.attempt'] = 'Försöker tillhandahålla betalda väntande tjänster.';
$lang['Cron.cancelscheduledservices.cancel_success'] = 'Tjänsten #%1$s från kund #%2$s har avbokats.';
$lang['Cron.cancelscheduledservices.cancel_error'] = 'Tjänsten #%1$s från kund #%2$s kunde inte avbokas.';
$lang['Cron.cancelscheduledservices.completed'] = 'Uppgiften Avbryt schemalagda tjänster har slutförts.';
$lang['Cron.cancelscheduledservices.attempt'] = 'Försöker avboka schemalagda tjänster.';
$lang['Cron.unsuspendservices.unsuspend_success'] = 'Tjänsten #%1$s från klient %2$s har avbrutits.';
$lang['Cron.unsuspendservices.unsuspend_error'] = 'Tjänsten #%1$s från klient %2$s kunde inte avbrytas.';
$lang['Cron.unsuspendservices.completed'] = 'Uppgiften att avaktivera tjänster har slutförts.';
$lang['Cron.unsuspendservices.attempt'] = 'Försök att avbryta betalda avbrutna tjänster.';
$lang['Cron.suspendservices.suspend_success'] = 'Tjänsten #%1$s från kunden %2$s har avbrutits.';
$lang['Cron.suspendservices.suspend_error'] = 'Tjänsten #%1$s från klient %2$s kunde inte avbrytas.';
$lang['Cron.suspendservices.suspension_reason'] = 'Utebliven betalning';
$lang['Cron.suspendservices.completed'] = 'Uppgiften att stänga av tjänster har slutförts.';
$lang['Cron.suspendservices.attempt'] = 'Försöker stänga av förfallna tjänster.';
$lang['Cron.cardexpirationreminders.success'] = 'Har framgångsrikt levererat påminnelsen om utgång för kontakt %1$s %2$s från klient #%3$s.';
$lang['Cron.cardexpirationreminders.failed'] = 'Påminnelsen om utgång för kontakt %1$s %2$s från klient #%3$s kunde inte skickas.';
$lang['Cron.cardexpirationreminders.completed'] = 'Uppgiften om påminnelser om kortets utgång har slutförts.';
$lang['Cron.cardexpirationreminders.attempt'] = 'Försöker skicka påminnelser om att kort löper ut.';
$lang['Cron.autodebitinvoices.charge_success'] = 'Betalningen har behandlats framgångsrikt.';
$lang['Cron.autodebitinvoices.charge_failed'] = 'Det går inte att behandla betalningen.';
$lang['Cron.autodebitinvoices.charge_attempt'] = 'Försöker autodebitera klient #%1$s för alla öppna fakturor till ett belopp av %2$s.';
$lang['Cron.autodebitinvoices.completed'] = 'Uppgiften om autogirofakturor har slutförts.';
$lang['Cron.autodebitinvoices.attempt'] = 'Försök till automatisk debitering av öppna fakturor.';
$lang['Cron.applycredits.apply_none'] = 'Det finns inga fakturor som kan krediteras.';
$lang['Cron.applycredits.apply_success'] = 'Har framgångsrikt överfört utestående krediter från transaktion %1$s för kund #%2$s till faktura #%3$s till ett belopp av %4$s.';
$lang['Cron.applycredits.apply_failed'] = 'Kunde inte tillämpa utestående krediter för kund #%1$s.';
$lang['Cron.applycredits.completed'] = 'Uppgiften att tillämpa krediter har slutförts.';
$lang['Cron.applycredits.attempt'] = 'Försök att tillämpa krediter på öppna fakturor.';
$lang['Cron.index.completed_all_system'] = 'Alla systemuppgifter har slutförts.';
$lang['Cron.index.attempt_all_system'] = 'Försöker köra alla systemuppgifter.';
$lang['Cron.index.completed_all'] = 'Alla uppgifter har slutförts.';
$lang['Cron.index.attempt_all'] = 'Försöker köra alla uppgifter för %1$s.';
$lang['Cron.!error.task_execution.failed'] = 'Fel: %1$s %2$s';
$lang['Cron.!error.cron.failed'] = 'Cron misslyckades med att logga.';
$lang['Cron.!error.task_filter.exclude_not_array'] = 'Uppgiftsfiltret "exclude" måste vara en matris.';
$lang['Cron.!error.task_filter.include_not_array'] = 'Uppgiftsfiltret "include" måste vara en matris.';
$lang['Cron.!error.task_filter.both_include_exclude'] = 'Uppgiftsfiltret kan inte ha både "include"- och "exclude"-nycklar.';
$lang['Cron.!error.task_filter.invalid_format'] = 'Uppgiftsfiltret måste vara ett JSON-objekt.';
$lang['Cron.!error.task_filter.invalid_json'] = 'Ogiltig JSON i parametern för uppgiftsfiltret: %1$s';

