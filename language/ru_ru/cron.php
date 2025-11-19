<?php
/**
 * Cron
 *
 * @package blesta
 * @subpackage blesta.language.ru_ru
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Cron.addpaidpendingservices.service_success'] = 'Ожидающая услуга #%1$s от клиента #%2$s теперь активна.';
$lang['Cron.addpaidpendingservices.service_error'] = 'Ожидающая услуга #%1$s от клиента #%2$s не может быть активирована.';
$lang['Cron.addpaidpendingservices.completed'] = 'Задание "Оплаченные ожидающие услуги" завершено.';
$lang['Cron.addpaidpendingservices.attempt'] = 'Попытка предоставления оплаченных услуг.';
$lang['Cron.cancelscheduledservices.cancel_success'] = 'Услуга #%1$s от клиента #%2$s была отменена.';
$lang['Cron.cancelscheduledservices.cancel_error'] = 'Услуга #%1$s от клиента #%2$s не может быть отменена.';
$lang['Cron.cancelscheduledservices.completed'] = 'Задача отмены запланированных служб завершена.';
$lang['Cron.cancelscheduledservices.attempt'] = 'Попытка отменить запланированные услуги.';
$lang['Cron.unsuspendservices.unsuspend_success'] = 'Услуга #%1$s от клиента %2$s была приостановлена.';
$lang['Cron.unsuspendservices.unsuspend_error'] = 'Услуга #%1$s от клиента %2$s не может быть приостановлена.';
$lang['Cron.unsuspendservices.completed'] = 'Задание по отмене приостановки служб выполнено.';
$lang['Cron.unsuspendservices.attempt'] = 'Попытка отменить приостановленные платные услуги.';
$lang['Cron.suspendservices.suspend_success'] = 'Услуга #%1$s от клиента %2$s была приостановлена.';
$lang['Cron.suspendservices.suspend_error'] = 'Услуга #%1$s от клиента %2$s не может быть приостановлена.';
$lang['Cron.suspendservices.suspension_reason'] = 'Неплатежи';
$lang['Cron.suspendservices.completed'] = 'Задача приостановки служб выполнена.';
$lang['Cron.suspendservices.attempt'] = 'Попытка приостановить оказание просроченных услуг.';
$lang['Cron.cardexpirationreminders.success'] = 'Успешно доставлено напоминание об истечении срока действия для контакта %1$s %2$s от клиента #%3$s.';
$lang['Cron.cardexpirationreminders.failed'] = 'Не удалось отправить напоминание об истечении срока действия для контакта %1$s %2$s от клиента #%3$s.';
$lang['Cron.cardexpirationreminders.completed'] = 'Задача напоминания об истечении срока действия карты выполнена.';
$lang['Cron.cardexpirationreminders.attempt'] = 'Попытка отправить напоминания об истечении срока действия карты.';
$lang['Cron.autodebitinvoices.charge_success'] = 'Успешно обработали платеж.';
$lang['Cron.autodebitinvoices.charge_failed'] = 'Невозможно обработать платеж.';
$lang['Cron.autodebitinvoices.charge_attempt'] = 'Попытка автоматического списания средств с клиента #%1$s по всем открытым счетам на сумму %2$s.';
$lang['Cron.autodebitinvoices.completed'] = 'Задача автоматического списания счетов выполнена.';
$lang['Cron.autodebitinvoices.attempt'] = 'Попытка автоматического списания открытых счетов.';
$lang['Cron.applycredits.apply_none'] = 'Не существует счетов, к которым можно применить кредиты.';
$lang['Cron.applycredits.apply_success'] = 'Успешно применены отложенные кредиты из транзакции %1$s для клиента #%2$s к счету #%3$s на сумму %4$s.';
$lang['Cron.applycredits.apply_failed'] = 'Невозможно применить отложенные кредиты для клиента #%1$s.';
$lang['Cron.applycredits.completed'] = 'Задание "Применить кредиты" выполнено.';
$lang['Cron.applycredits.attempt'] = 'Попытка применить кредиты к открытым счетам.';
$lang['Cron.index.completed_all_system'] = 'Все системные задачи выполнены.';
$lang['Cron.index.attempt_all_system'] = 'Попытка запустить все системные задачи.';
$lang['Cron.index.completed_all'] = 'Все задания были выполнены.';
$lang['Cron.index.attempt_all'] = 'Попытка выполнить все задания для %1$s.';
$lang['Cron.!error.task_execution.failed'] = 'Ошибка: %1$s %2$s';
$lang['Cron.!error.cron.failed'] = 'Cron не удалось войти в журнал.';
$lang['Cron.!error.task_filter.exclude_not_array'] = 'Фильтр задачи "exclude" должен быть массивом.';
$lang['Cron.!error.task_filter.include_not_array'] = 'Фильтр задачи "include" должен быть массивом.';
$lang['Cron.!error.task_filter.both_include_exclude'] = 'Фильтр задач не может иметь ключи "включить" и "исключить".';
$lang['Cron.!error.task_filter.invalid_json'] = 'Неверный JSON в параметре фильтра задачи: %1$s';
$lang['Cron.!error.task_filter.invalid_format'] = 'Фильтр задачи должен представлять собой объект JSON.';

