<?php
/**
 * Cron
 *
 * @package blesta
 * @subpackage blesta.language.bg_bg
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Cron.addpaidpendingservices.service_success'] = 'Чакащата услуга #%1$s от клиент #%2$s вече е активна.';
$lang['Cron.addpaidpendingservices.service_error'] = 'Чакащата услуга #%1$s от клиент #%2$s не може да бъде активирана.';
$lang['Cron.addpaidpendingservices.completed'] = 'Задачата за платени чакащи услуги е завършена.';
$lang['Cron.addpaidpendingservices.attempt'] = 'Опит за предоставяне на платени чакащи услуги.';
$lang['Cron.cancelscheduledservices.cancel_success'] = 'Услугата #%1$s от клиент #%2$s е отменена.';
$lang['Cron.cancelscheduledservices.cancel_error'] = 'Услугата #%1$s от клиент #%2$s не може да бъде отменена.';
$lang['Cron.cancelscheduledservices.completed'] = 'Задачата за отмяна на планирани услуги е завършена.';
$lang['Cron.cancelscheduledservices.attempt'] = 'Опит за отмяна на планирани услуги.';
$lang['Cron.unsuspendservices.unsuspend_success'] = 'Услугата #%1$s от клиент %2$s е прекратена.';
$lang['Cron.unsuspendservices.unsuspend_error'] = 'Услугата #%1$s от клиент %2$s не може да бъде прекратена.';
$lang['Cron.unsuspendservices.completed'] = 'Задачата за прекратяване на услугите е завършена.';
$lang['Cron.unsuspendservices.attempt'] = 'Опит за отписване на спрени платени услуги.';
$lang['Cron.suspendservices.suspend_success'] = 'Услугата #%1$s от клиент %2$s е спряна.';
$lang['Cron.suspendservices.suspend_error'] = 'Услугата #%1$s от клиента %2$s не може да бъде спряна.';
$lang['Cron.suspendservices.suspension_reason'] = 'Неплащане';
$lang['Cron.suspendservices.completed'] = 'Задачата за преустановяване на услугите е завършена.';
$lang['Cron.suspendservices.attempt'] = 'Опит за спиране на просрочени услуги.';
$lang['Cron.cardexpirationreminders.success'] = 'Успешно е доставено напомнянето за изтичане на срока на валидност за контакт %1$s %2$s от клиент #%3$s.';
$lang['Cron.cardexpirationreminders.failed'] = 'Напомнянето за изтичане на срока на валидност за контакт %1$s %2$s от клиент #%3$s не може да бъде изпратено.';
$lang['Cron.cardexpirationreminders.completed'] = 'Задачата за напомняне за изтичане на срока на валидност на картата е завършена.';
$lang['Cron.cardexpirationreminders.attempt'] = 'Опит за изпращане на напомняния за изтичане на валидността на картата.';
$lang['Cron.autodebitinvoices.charge_success'] = 'Успешно обработихте плащането.';
$lang['Cron.autodebitinvoices.charge_failed'] = 'Не може да обработи плащането.';
$lang['Cron.autodebitinvoices.charge_attempt'] = 'Опит за автоматично дебитиране на клиент №%1$s за всички отворени фактури на стойност %2$s.';
$lang['Cron.autodebitinvoices.completed'] = 'Задачата за автоматично дебитиране на фактури е завършена.';
$lang['Cron.autodebitinvoices.attempt'] = 'Опит за автоматично дебитиране на отворени фактури.';
$lang['Cron.applycredits.apply_none'] = 'Няма фактури, за които да се прилагат кредити.';
$lang['Cron.applycredits.apply_success'] = 'Успешно са приложени висящи кредити от транзакция %1$s за клиент №%2$s към фактура №%3$s в размер на %4$s.';
$lang['Cron.applycredits.apply_failed'] = 'Невъзможно е да се приложат висящи кредити за клиент #%1$s.';
$lang['Cron.applycredits.completed'] = 'Задачата за прилагане на кредити е завършена.';
$lang['Cron.applycredits.attempt'] = 'Опит за прилагане на кредити към отворени фактури.';
$lang['Cron.index.completed_all_system'] = 'Всички системни задачи са изпълнени.';
$lang['Cron.index.attempt_all_system'] = 'Опитвам се да изпълня всички системни задачи.';
$lang['Cron.index.completed_all'] = 'Всички задачи са изпълнени.';
$lang['Cron.index.attempt_all'] = 'Опит за изпълнение на всички задачи за %1$s.';
$lang['Cron.!error.task_execution.failed'] = 'Грешка: %1$s %2$s';
$lang['Cron.!error.cron.failed'] = 'Cron не успя да се регистрира.';
$lang['Cron.!error.task_filter.exclude_not_array'] = 'Филтърът на задачата "exclude" трябва да бъде масив.';
$lang['Cron.!error.task_filter.include_not_array'] = 'Филтърът на задачата "include" трябва да бъде масив.';
$lang['Cron.!error.task_filter.both_include_exclude'] = 'Филтърът на задачите не може да има едновременно ключове "включва" и "изключва".';
$lang['Cron.!error.task_filter.invalid_format'] = 'Филтърът на задачата трябва да бъде обект JSON.';
$lang['Cron.!error.task_filter.invalid_json'] = 'Невалиден JSON в параметъра на филтъра на задачата: %1$s';

