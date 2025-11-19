<?php
/**
 * Cron
 *
 * @package blesta
 * @subpackage blesta.language.nl_nl
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Cron.addpaidpendingservices.service_success'] = 'De wachtende service #%1$s van klant #%2$s is nu actief.';
$lang['Cron.addpaidpendingservices.service_error'] = 'De wachtende service #%1$s van klant #%2$s kon niet actief worden gemaakt.';
$lang['Cron.addpaidpendingservices.completed'] = 'De betaalde taak voor hangende services is voltooid.';
$lang['Cron.addpaidpendingservices.attempt'] = 'Betaalde services in afwachting van levering.';
$lang['Cron.cancelscheduledservices.cancel_success'] = 'De service #%1$s van klant #%2$s is geannuleerd.';
$lang['Cron.cancelscheduledservices.cancel_error'] = 'De service #%1$s van klant #%2$s kon niet worden geannuleerd.';
$lang['Cron.cancelscheduledservices.completed'] = 'De taak Geplande services annuleren is voltooid.';
$lang['Cron.cancelscheduledservices.attempt'] = 'Geplande diensten proberen te annuleren.';
$lang['Cron.unsuspendservices.unsuspend_success'] = 'De service #%1$s van client %2$s is opgeheven.';
$lang['Cron.unsuspendservices.unsuspend_error'] = 'De service #%1$s van client %2$s kon niet worden opgeheven.';
$lang['Cron.unsuspendservices.completed'] = 'De taak voor het opheffen van services is voltooid.';
$lang['Cron.unsuspendservices.attempt'] = 'Pogingen om betaalde opgeschorte services ongedaan te maken.';
$lang['Cron.suspendservices.suspend_success'] = 'De service #%1$s van client %2$s is opgeschort.';
$lang['Cron.suspendservices.suspend_error'] = 'De service #%1$s van client %2$s kon niet worden opgeschort.';
$lang['Cron.suspendservices.suspension_reason'] = 'Niet-betaling';
$lang['Cron.suspendservices.completed'] = 'De suspend services taak is voltooid.';
$lang['Cron.suspendservices.attempt'] = 'Pogingen om achterstallige diensten op te schorten.';
$lang['Cron.cardexpirationreminders.success'] = 'De vervalherinnering voor contact %1$s %2$s van klant #%3$s is succesvol afgeleverd.';
$lang['Cron.cardexpirationreminders.failed'] = 'De vervalherinnering voor contact %1$s %2$s van klant #%3$s kon niet worden verzonden.';
$lang['Cron.cardexpirationreminders.completed'] = 'De taak voor kaartvervalherinneringen is voltooid.';
$lang['Cron.cardexpirationreminders.attempt'] = 'Proberen om herinneringen te sturen voor het verlopen van een kaart.';
$lang['Cron.autodebitinvoices.charge_success'] = 'De betaling is succesvol verwerkt.';
$lang['Cron.autodebitinvoices.charge_failed'] = 'Kan de betaling niet verwerken.';
$lang['Cron.autodebitinvoices.charge_attempt'] = 'Ik probeer klant #%1$s automatisch te debiteren voor alle openstaande facturen voor het bedrag van %2$s.';
$lang['Cron.autodebitinvoices.completed'] = 'De taak voor automatische afschrijving van facturen is voltooid.';
$lang['Cron.autodebitinvoices.attempt'] = 'Proberen om openstaande facturen automatisch te debiteren.';
$lang['Cron.applycredits.apply_none'] = 'Er zijn geen facturen waarop credits kunnen worden toegepast.';
$lang['Cron.applycredits.apply_success'] = 'Het is gelukt om de openstaande credits van transactie %1$s voor klant #%2$s toe te passen op factuur #%3$s voor een bedrag van %4$s.';
$lang['Cron.applycredits.apply_failed'] = 'Kan uitstaande credits voor klant #%1$s niet toepassen.';
$lang['Cron.applycredits.completed'] = 'De taak Kredieten toepassen is voltooid.';
$lang['Cron.applycredits.attempt'] = 'Pogingen om crediteringen toe te passen op openstaande facturen.';
$lang['Cron.index.completed_all_system'] = 'Alle systeemtaken zijn voltooid.';
$lang['Cron.index.attempt_all_system'] = 'Alle systeemtaken worden uitgevoerd.';
$lang['Cron.index.completed_all'] = 'Alle taken zijn voltooid.';
$lang['Cron.index.attempt_all'] = 'Ik probeer alle taken voor %1$s uit te voeren.';
$lang['Cron.!error.task_execution.failed'] = 'Fout: %1$s %2$s';
$lang['Cron.!error.cron.failed'] = 'Cron slaagde er niet in te loggen.';
$lang['Cron.!error.task_filter.exclude_not_array'] = 'Taakfilter "uitsluiten" moet een matrix zijn.';
$lang['Cron.!error.task_filter.include_not_array'] = 'Taakfilter "include" moet een matrix zijn.';
$lang['Cron.!error.task_filter.both_include_exclude'] = 'Taakfilters kunnen niet zowel "insluiten" als "uitsluiten" hebben.';
$lang['Cron.!error.task_filter.invalid_format'] = 'Taakfilter moet een JSON-object zijn.';
$lang['Cron.!error.task_filter.invalid_json'] = 'Ongeldige JSON in taakfilterparameter: %1$s';

