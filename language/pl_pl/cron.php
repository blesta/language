<?php
/**
 * Cron
 *
 * @package blesta
 * @subpackage blesta.language.pl_pl
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Cron.addpaidpendingservices.service_success'] = 'Oczekująca usługa #%1$s od klienta #%2$s jest teraz aktywna.';
$lang['Cron.addpaidpendingservices.service_error'] = 'Oczekująca usługa #%1$s od klienta #%2$s nie mogła zostać aktywowana.';
$lang['Cron.addpaidpendingservices.completed'] = 'Zadanie płatnych usług oczekujących zostało zakończone.';
$lang['Cron.addpaidpendingservices.attempt'] = 'Próba dostarczenia płatnych usług oczekujących.';
$lang['Cron.cancelscheduledservices.cancel_success'] = 'Usługa #%1$s od klienta #%2$s została anulowana.';
$lang['Cron.cancelscheduledservices.cancel_error'] = 'Usługa #%1$s od klienta #%2$s nie mogła zostać anulowana.';
$lang['Cron.cancelscheduledservices.completed'] = 'Zadanie anulowania zaplanowanych usług zostało zakończone.';
$lang['Cron.cancelscheduledservices.attempt'] = 'Próba anulowania zaplanowanych usług.';
$lang['Cron.unsuspendservices.unsuspend_success'] = 'Usługa #%1$s od klienta %2$s została zawieszona.';
$lang['Cron.unsuspendservices.unsuspend_error'] = 'Usługa #%1$s od klienta %2$s nie mogła zostać zawieszona.';
$lang['Cron.unsuspendservices.completed'] = 'Zadanie anulowania zawieszania usług zostało zakończone.';
$lang['Cron.unsuspendservices.attempt'] = 'Próba anulowania zawieszenia płatnych usług.';
$lang['Cron.suspendservices.suspend_success'] = 'Usługa #%1$s od klienta %2$s została zawieszona.';
$lang['Cron.suspendservices.suspend_error'] = 'Usługa #%1$s od klienta %2$s nie mogła zostać zawieszona.';
$lang['Cron.suspendservices.suspension_reason'] = 'Brak płatności';
$lang['Cron.suspendservices.completed'] = 'Zadanie zawieszania usług zostało zakończone.';
$lang['Cron.suspendservices.attempt'] = 'Próba zawieszenia zaległych usług.';
$lang['Cron.cardexpirationreminders.success'] = 'Pomyślnie dostarczono przypomnienie o wygaśnięciu dla kontaktu %1$s %2$s od klienta #%3$s.';
$lang['Cron.cardexpirationreminders.failed'] = 'Przypomnienie o wygaśnięciu dla kontaktu %1$s %2$s od klienta #%3$s nie mogło zostać wysłane.';
$lang['Cron.cardexpirationreminders.completed'] = 'Zadanie przypomnienia o wygaśnięciu karty zostało zakończone.';
$lang['Cron.cardexpirationreminders.attempt'] = 'Próba wysłania przypomnienia o wygaśnięciu ważności karty.';
$lang['Cron.autodebitinvoices.charge_success'] = 'Płatność została pomyślnie przetworzona.';
$lang['Cron.autodebitinvoices.charge_failed'] = 'Nie można przetworzyć płatności.';
$lang['Cron.autodebitinvoices.charge_attempt'] = 'Podjęto próbę automatycznego obciążenia klienta #%1$s wszystkimi otwartymi fakturami na kwotę %2$s.';
$lang['Cron.autodebitinvoices.completed'] = 'Zadanie automatycznego obciążania faktur zostało zakończone.';
$lang['Cron.autodebitinvoices.attempt'] = 'Próba automatycznego obciążenia otwartych faktur.';
$lang['Cron.applycredits.apply_none'] = 'Nie ma faktur, do których można zastosować kredyty.';
$lang['Cron.applycredits.apply_success'] = 'Pomyślnie zastosowano oczekujące środki z transakcji %1$s dla klienta #%2$s do faktury #%3$s w wysokości %4$s.';
$lang['Cron.applycredits.apply_failed'] = 'Nie można zastosować oczekujących kredytów dla klienta #%1$s.';
$lang['Cron.applycredits.completed'] = 'Zadanie zastosowania kredytów zostało zakończone.';
$lang['Cron.applycredits.attempt'] = 'Próba zastosowania środków do otwartych faktur.';
$lang['Cron.index.completed_all_system'] = 'Wszystkie zadania systemowe zostały zakończone.';
$lang['Cron.index.attempt_all_system'] = 'Próba uruchomienia wszystkich zadań systemowych.';
$lang['Cron.index.completed_all'] = 'Wszystkie zadania zostały wykonane.';
$lang['Cron.index.attempt_all'] = 'Próba uruchomienia wszystkich zadań dla %1$s.';
$lang['Cron.!error.task_execution.failed'] = 'Błąd: %1$s %2$s';
$lang['Cron.!error.cron.failed'] = 'Logowanie Cron nie powiodło się.';
$lang['Cron.!error.task_filter.exclude_not_array'] = 'Filtr zadań "exclude" musi być tablicą.';
$lang['Cron.!error.task_filter.include_not_array'] = 'Filtr zadań "include" musi być tablicą.';
$lang['Cron.!error.task_filter.both_include_exclude'] = 'Filtr zadań nie może mieć zarówno kluczy "include", jak i "exclude".';
$lang['Cron.!error.task_filter.invalid_format'] = 'Filtr zadań musi być obiektem JSON.';
$lang['Cron.!error.task_filter.invalid_json'] = 'Nieprawidłowy JSON w parametrze filtra zadań: %1$s';

