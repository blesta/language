<?php
/**
 * Cron
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Cron.!error.cron.failed'] = 'Cron kunne ikke logge.';
$lang['Cron.!error.task_execution.failed'] = 'Fejl: %1$s %2$s';
$lang['Cron.index.attempt_all'] = 'Forsøger at køre alle opgaver for %1$s.';
$lang['Cron.index.completed_all'] = 'Alle opgaver er afsluttet.';
$lang['Cron.index.attempt_all_system'] = 'Forsøger at køre alle systemopgaver.';
$lang['Cron.index.completed_all_system'] = 'Alle systemopgaver er afsluttet.';
$lang['Cron.applycredits.attempt'] = 'Forsøg på at anvende kreditter på åbne fakturaer.';
$lang['Cron.applycredits.completed'] = 'Opgaven "Anvend kreditter" er afsluttet.';
$lang['Cron.applycredits.apply_failed'] = 'Kan ikke anvende ventende kreditter for klient #%1$s.';
$lang['Cron.applycredits.apply_success'] = 'Vellykket anvendelse af ventende kreditter fra transaktion %1$s for klient #%2$s til faktura #%3$s med et beløb på %4$s.';
$lang['Cron.applycredits.apply_none'] = 'Der er ingen fakturaer, som kan krediteres.';
$lang['Cron.autodebitinvoices.attempt'] = 'Forsøg på automatisk debitering af åbne fakturaer.';
$lang['Cron.autodebitinvoices.completed'] = 'Opgaven med automatisk debitering af fakturaer er afsluttet.';
$lang['Cron.autodebitinvoices.charge_attempt'] = 'Forsøger at autodebitere klient #%1$s for alle åbne fakturaer på %2$s.';
$lang['Cron.autodebitinvoices.charge_failed'] = 'Kan ikke behandle betalingen.';
$lang['Cron.autodebitinvoices.charge_success'] = 'Behandlingen af betalingen lykkedes.';
$lang['Cron.cardexpirationreminders.attempt'] = 'Forsøger at sende påmindelser om kortudløb.';
$lang['Cron.cardexpirationreminders.completed'] = 'Opgaven med påmindelser om kortudløb er afsluttet.';
$lang['Cron.cardexpirationreminders.failed'] = 'Påmindelsen om udløb for kontakt %1$s %2$s fra klient #%3$s kunne ikke sendes.';
$lang['Cron.cardexpirationreminders.success'] = 'Påmindelsen om udløb for kontakt %1$s %2$s fra klient #%3$s blev leveret med succes.';
$lang['Cron.suspendservices.attempt'] = 'Forsøg på at suspendere forfaldne ydelser.';
$lang['Cron.suspendservices.completed'] = 'Opgaven med at suspendere tjenester er afsluttet.';
$lang['Cron.suspendservices.suspension_reason'] = 'Manglende betaling';
$lang['Cron.suspendservices.suspend_error'] = 'Tjenesten #%1$s fra klient %2$s kunne ikke suspenderes.';
$lang['Cron.suspendservices.suspend_success'] = 'Tjenesten #%1$s fra klient %2$s er blevet suspenderet.';
$lang['Cron.unsuspendservices.attempt'] = 'Forsøg på at ophæve suspenderingen af betalte tjenester.';
$lang['Cron.unsuspendservices.completed'] = 'Opgaven med at afbryde tjenester er afsluttet.';
$lang['Cron.unsuspendservices.unsuspend_error'] = 'Tjenesten #%1$s fra klient %2$s kunne ikke afbrydes.';
$lang['Cron.unsuspendservices.unsuspend_success'] = 'Tjenesten #%1$s fra klient %2$s er blevet afbrudt.';
$lang['Cron.cancelscheduledservices.attempt'] = 'Forsøg på at aflyse planlagte tjenester.';
$lang['Cron.cancelscheduledservices.completed'] = 'Opgaven Annuller planlagte tjenester er fuldført.';
$lang['Cron.cancelscheduledservices.cancel_error'] = 'Tjenesten #%1$s fra klient #%2$s kunne ikke annulleres.';
$lang['Cron.cancelscheduledservices.cancel_success'] = 'Tjenesten #%1$s fra klient #%2$s er blevet annulleret.';
$lang['Cron.addpaidpendingservices.attempt'] = 'Forsøg på at levere betalte ventende tjenester.';
$lang['Cron.addpaidpendingservices.completed'] = 'Den betalte afventende serviceopgave er afsluttet.';
$lang['Cron.addpaidpendingservices.service_error'] = 'Den ventende tjeneste #%1$s fra klient #%2$s kunne ikke gøres aktiv.';
$lang['Cron.addpaidpendingservices.service_success'] = 'Den ventende tjeneste #%1$s fra klient #%2$s er nu aktiv.';
$lang['Cron.!error.task_filter.exclude_not_array'] = 'Opgavefilteret "exclude" skal være et array.';
$lang['Cron.!error.task_filter.include_not_array'] = 'Opgavefilteret "include" skal være et array.';
$lang['Cron.!error.task_filter.both_include_exclude'] = 'Et opgavefilter kan ikke have både "include"- og "exclude"-nøgler.';
$lang['Cron.!error.task_filter.invalid_format'] = 'Opgavefilteret skal være et JSON-objekt.';
$lang['Cron.!error.task_filter.invalid_json'] = 'Ugyldig JSON i opgavefilterparameter: %1$s';

