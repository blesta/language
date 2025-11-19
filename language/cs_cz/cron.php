<?php
/**
 * Cron
 *
 * @package blesta
 * @subpackage blesta.language.cs_cz
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Cron.addpaidpendingservices.service_success'] = 'Čekající služba #%1$s od klienta #%2$s je nyní aktivní.';
$lang['Cron.addpaidpendingservices.service_error'] = 'Čekající službu #%1$s od klienta #%2$s se nepodařilo aktivovat.';
$lang['Cron.addpaidpendingservices.completed'] = 'Úloha placených čekajících služeb byla dokončena.';
$lang['Cron.addpaidpendingservices.attempt'] = 'Pokus o poskytnutí placených čekajících služeb.';
$lang['Cron.cancelscheduledservices.cancel_success'] = 'Služba #%1$s od klienta #%2$s byla zrušena.';
$lang['Cron.cancelscheduledservices.cancel_error'] = 'Službu #%1$s od klienta #%2$s nebylo možné zrušit.';
$lang['Cron.cancelscheduledservices.completed'] = 'Úloha zrušení naplánovaných služeb byla dokončena.';
$lang['Cron.cancelscheduledservices.attempt'] = 'Pokus o zrušení plánovaných služeb.';
$lang['Cron.unsuspendservices.unsuspend_success'] = 'Služba #%1$s od klienta %2$s byla zrušena.';
$lang['Cron.unsuspendservices.unsuspend_error'] = 'Službu #%1$s od klienta %2$s se nepodařilo zrušit.';
$lang['Cron.unsuspendservices.completed'] = 'Úloha unsuspend services byla dokončena.';
$lang['Cron.unsuspendservices.attempt'] = 'Pokus o zrušení pozastavených placených služeb.';
$lang['Cron.suspendservices.suspend_success'] = 'Služba #%1$s od klienta %2$s byla pozastavena.';
$lang['Cron.suspendservices.suspend_error'] = 'Službu #%1$s od klienta %2$s nebylo možné pozastavit.';
$lang['Cron.suspendservices.suspension_reason'] = 'Neplacení';
$lang['Cron.suspendservices.completed'] = 'Úloha pozastavení služeb byla dokončena.';
$lang['Cron.suspendservices.attempt'] = 'Pokus o pozastavení služeb po splatnosti.';
$lang['Cron.cardexpirationreminders.success'] = 'Úspěšně doručena upomínka o vypršení platnosti pro kontakt %1$s %2$s od klienta #%3$s.';
$lang['Cron.cardexpirationreminders.failed'] = 'Připomínku o vypršení platnosti pro kontakt %1$s %2$s od klienta #%3$s se nepodařilo odeslat.';
$lang['Cron.cardexpirationreminders.completed'] = 'Úloha Připomenutí vypršení platnosti karty byla dokončena.';
$lang['Cron.cardexpirationreminders.attempt'] = 'Pokus o zaslání připomenutí vypršení platnosti karty.';
$lang['Cron.autodebitinvoices.charge_success'] = 'Platba byla úspěšně zpracována.';
$lang['Cron.autodebitinvoices.charge_failed'] = 'Platbu nelze zpracovat.';
$lang['Cron.autodebitinvoices.charge_attempt'] = 'Pokoušíme se automaticky odepsat z účtu klienta #%1$s všechny otevřené faktury na částku %2$s.';
$lang['Cron.autodebitinvoices.completed'] = 'Úloha automatického odepisování faktur byla dokončena.';
$lang['Cron.autodebitinvoices.attempt'] = 'Pokus o automatické inkaso otevřených faktur.';
$lang['Cron.applycredits.apply_none'] = 'Neexistují žádné faktury, na které by bylo možné uplatnit dobropisy.';
$lang['Cron.applycredits.apply_success'] = 'Úspěšně byly použity nevyřízené kredity z transakce %1$s pro klienta #%2$s na fakturu #%3$s ve výši %4$s.';
$lang['Cron.applycredits.apply_failed'] = 'Nelze použít čekající kredity pro klienta #%1$s.';
$lang['Cron.applycredits.completed'] = 'Úloha aplikovat kredity byla dokončena.';
$lang['Cron.applycredits.attempt'] = 'Pokus o uplatnění kreditů na otevřené faktury.';
$lang['Cron.index.completed_all_system'] = 'Všechny systémové úlohy byly dokončeny.';
$lang['Cron.index.attempt_all_system'] = 'Pokus o spuštění všech systémových úloh.';
$lang['Cron.index.completed_all'] = 'Všechny úkoly byly splněny.';
$lang['Cron.index.attempt_all'] = 'Pokus o spuštění všech úloh pro %1$s.';
$lang['Cron.!error.task_execution.failed'] = 'Chyba: %1$s %2$s';
$lang['Cron.!error.cron.failed'] = 'Cron se nepodařilo přihlásit.';
$lang['Cron.!error.task_filter.exclude_not_array'] = 'Filtr úlohy "exclude" musí být pole.';
$lang['Cron.!error.task_filter.include_not_array'] = 'Filtr úlohy "include" musí být pole.';
$lang['Cron.!error.task_filter.both_include_exclude'] = 'Filtr úlohy nemůže mít klíče "zahrnout" i "vyloučit".';
$lang['Cron.!error.task_filter.invalid_format'] = 'Filtr úlohy musí být objekt JSON.';
$lang['Cron.!error.task_filter.invalid_json'] = 'Neplatný JSON v parametru filtru úlohy: %1$s';

