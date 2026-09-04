<?php
/**
 * Cron
 *
 * @package blesta
 * @subpackage blesta.language.fi_fi
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Cron.!error.cron.failed'] = 'Cron ei onnistunut kirjaamaan lokia.';
$lang['Cron.!error.task_execution.failed'] = 'Virhe: %1$s %2$s';
$lang['Cron.!error.task_filter.both_include_exclude'] = 'Tehtäväsuodattimessa ei voi olla samanaikaisesti sekä ”include”- että ”exclude”-avaimia.';
$lang['Cron.!error.task_filter.exclude_not_array'] = 'Tehtäväsuodattimen ”exclude” on oltava taulukko.';
$lang['Cron.!error.task_filter.include_not_array'] = 'Tehtäväsuodattimen ”include” on oltava taulukko.';
$lang['Cron.!error.task_filter.invalid_format'] = 'Tehtäväsuodattimen on oltava JSON-objekti.';
$lang['Cron.!error.task_filter.invalid_json'] = 'Tehtävän suodatinparametrissa on virheellinen JSON: %1$s';
$lang['Cron.addpaidpendingservices.attempt'] = 'Yritetään ottaa käyttöön maksullisia, odottavia palveluita.';
$lang['Cron.addpaidpendingservices.completed'] = 'Maksettu, vireillä oleva palvelutehtävä on saatu päätökseen.';
$lang['Cron.addpaidpendingservices.service_error'] = 'Asiakkaan #%2$s:n vireillä olevaa palvelua #%1$s ei voitu aktivoida.';
$lang['Cron.addpaidpendingservices.service_success'] = 'Asiakkaan #%2$s:n odottava palvelu #%1$s on nyt aktiivinen.';
$lang['Cron.applycredits.apply_failed'] = 'Asiakkaan nro%1$s:n odottavia hyvityksiä ei voitu käyttää.';
$lang['Cron.applycredits.apply_none'] = 'Ei ole laskuja, joihin hyvityksiä voitaisiin kohdistaa.';
$lang['Cron.applycredits.apply_success'] = 'Asiakkaan nro%2$s:n tapahtumasta %1$s peräisin olevat hyvitykset on kirjattu onnistuneesti laskuun nro%3$s summana %4$s.';
$lang['Cron.applycredits.attempt'] = 'Yritetään kohdistaa hyvityksiä avoimiin laskuihin.';
$lang['Cron.applycredits.completed'] = 'Luottopisteiden käyttö on suoritettu.';
$lang['Cron.autodebitinvoices.attempt'] = 'Yritetään veloittaa maksamattomat laskut automaattisesti.';
$lang['Cron.autodebitinvoices.charge_attempt'] = 'Yritetään veloittaa asiakasta nro%1$s automaattisesti kaikista avoimista laskuista, joiden yhteissumma on %2$s.';
$lang['Cron.autodebitinvoices.charge_failed'] = 'Maksua ei voitu käsitellä.';
$lang['Cron.autodebitinvoices.charge_success'] = 'Maksu on käsitelty onnistuneesti.';
$lang['Cron.autodebitinvoices.completed'] = 'Automaattisten veloituslaskujen käsittely on saatu päätökseen.';
$lang['Cron.cancelscheduledservices.attempt'] = 'Yritetään peruuttaa aikataulun mukaiset palvelut.';
$lang['Cron.cancelscheduledservices.cancel_error'] = 'Palvelua nro%1$s, jonka asiakas on nro%2$s, ei voitu peruuttaa.';
$lang['Cron.cancelscheduledservices.cancel_success'] = 'Asiakkaan #%2$s palvelu #%1$s on peruutettu.';
$lang['Cron.cancelscheduledservices.completed'] = 'Aikataulun mukaisten palveluiden peruuttaminen on suoritettu.';
$lang['Cron.cardexpirationreminders.attempt'] = 'Yritetään lähettää muistutuksia korttien voimassaolon päättymisestä.';
$lang['Cron.cardexpirationreminders.completed'] = 'Kortin voimassaolon päättymistä koskevien muistutusten tehtävä on suoritettu.';
$lang['Cron.cardexpirationreminders.failed'] = 'Asiakkaan nro%3$s yhteystietojen %1$s %2$s voimassaolon päättymistä koskevaa muistutusta ei voitu lähettää.';
$lang['Cron.cardexpirationreminders.success'] = 'Toimitettiin onnistuneesti voimassaolon päättymisilmoitus yhteyshenkilölle %1$s ( %2$s ) asiakkaalta #%3$s.';
$lang['Cron.index.attempt_all'] = 'Yritetään suorittaa kaikki tehtävät osoitteessa %1$s.';
$lang['Cron.index.attempt_all_system'] = 'Yritetään suorittaa kaikki järjestelmätehtävät.';
$lang['Cron.index.completed_all'] = 'Kaikki tehtävät on suoritettu.';
$lang['Cron.index.completed_all_system'] = 'Kaikki järjestelmän tehtävät on suoritettu.';
$lang['Cron.suspendservices.attempt'] = 'Yritetään keskeyttää erääntyneet palvelut.';
$lang['Cron.suspendservices.completed'] = 'Palvelujen keskeyttämistehtävä on suoritettu loppuun.';
$lang['Cron.suspendservices.suspend_error'] = 'Palvelua #%1$s, jonka asiakas on %2$s, ei voitu keskeyttää.';
$lang['Cron.suspendservices.suspend_success'] = 'Palvelu nro%1$s, jonka asiakas on %2$s, on keskeytetty.';
$lang['Cron.suspendservices.suspension_reason'] = 'Maksun laiminlyönti';
$lang['Cron.unsuspendservices.attempt'] = 'Yritetään poistaa maksullisten, keskeytettyjen palveluiden keskeyttäminen.';
$lang['Cron.unsuspendservices.completed'] = 'Palveluiden palauttamistehtävä on suoritettu loppuun.';
$lang['Cron.unsuspendservices.unsuspend_error'] = 'Palvelua #%1$s, jonka asiakas on %2$s, ei voitu palauttaa toimintakuntoon.';
$lang['Cron.unsuspendservices.unsuspend_success'] = 'Palvelun #%1$s, jonka asiakas on %2$s, käyttörajoitus on poistettu.';

