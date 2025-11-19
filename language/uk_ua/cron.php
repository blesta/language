<?php
/**
 * Cron
 *
 * @package blesta
 * @subpackage blesta.language.uk_ua
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Cron.addpaidpendingservices.service_success'] = 'Очікувана послуга #%1$s від клієнта #%2$s зараз активна.';
$lang['Cron.addpaidpendingservices.service_error'] = 'Відкладену послугу #%1$s від клієнта #%2$s не вдалося зробити активною.';
$lang['Cron.addpaidpendingservices.completed'] = 'Завдання з оплатою відкладених послуг виконано.';
$lang['Cron.addpaidpendingservices.attempt'] = 'Спроба надання платних послуг, що очікують на розгляд.';
$lang['Cron.cancelscheduledservices.cancel_success'] = 'Послугу #%1$s від клієнта #%2$s скасовано.';
$lang['Cron.cancelscheduledservices.cancel_error'] = 'Послуга #%1$s від клієнта #%2$s не може бути скасована.';
$lang['Cron.cancelscheduledservices.completed'] = 'Завдання скасування запланованих служб виконано.';
$lang['Cron.cancelscheduledservices.attempt'] = 'Спроба скасувати заплановані послуги.';
$lang['Cron.unsuspendservices.unsuspend_success'] = 'Послугу #%1$s від клієнта %2$s було призупинено.';
$lang['Cron.unsuspendservices.unsuspend_error'] = 'Послуга #%1$s від клієнта %2$s не може бути призупинена.';
$lang['Cron.unsuspendservices.completed'] = 'Завдання з відновлення роботи служб виконано.';
$lang['Cron.unsuspendservices.attempt'] = 'Спроба відновити платні призупинені послуги.';
$lang['Cron.suspendservices.suspend_success'] = 'Послугу #%1$s від клієнта %2$s призупинено.';
$lang['Cron.suspendservices.suspend_error'] = 'Послуга #%1$s від клієнта %2$s не може бути призупинена.';
$lang['Cron.suspendservices.suspension_reason'] = 'Несплата';
$lang['Cron.suspendservices.completed'] = 'Завдання призупинення роботи служб виконано.';
$lang['Cron.suspendservices.attempt'] = 'Спроба призупинити прострочені послуги.';
$lang['Cron.cardexpirationreminders.success'] = 'Успішно доставлено нагадування про закінчення терміну дії контакту %1$s %2$s від клієнта #%3$s.';
$lang['Cron.cardexpirationreminders.failed'] = 'Нагадування про закінчення терміну дії для контакту %1$s %2$s від клієнта #%3$s не вдалося надіслати.';
$lang['Cron.cardexpirationreminders.completed'] = 'Завдання нагадування про закінчення терміну дії картки виконано.';
$lang['Cron.cardexpirationreminders.attempt'] = 'Спроба надіслати нагадування про закінчення терміну дії картки.';
$lang['Cron.autodebitinvoices.charge_success'] = 'Успішно оброблено платіж.';
$lang['Cron.autodebitinvoices.charge_failed'] = 'Не вдалося обробити платіж.';
$lang['Cron.autodebitinvoices.charge_attempt'] = 'Спроба автоматичного списання коштів з рахунку клієнта #%1$s за всіма відкритими інвойсами на суму %2$s.';
$lang['Cron.autodebitinvoices.completed'] = 'Завдання автоматичного списання інвойсів виконано.';
$lang['Cron.autodebitinvoices.attempt'] = 'Спроба автоматичного списання відкритих інвойсів.';
$lang['Cron.applycredits.apply_none'] = 'Немає рахунків, до яких можна застосувати кредити.';
$lang['Cron.applycredits.apply_success'] = 'Успішно застосовано відкладені кредити з транзакції %1$s для клієнта #%2$s до інвойсу #%3$s на суму %4$s.';
$lang['Cron.applycredits.apply_failed'] = 'Неможливо застосувати відкладені кредити для клієнта #%1$s.';
$lang['Cron.applycredits.completed'] = 'Завдання нарахування кредитів завершено.';
$lang['Cron.applycredits.attempt'] = 'Спроба застосувати кредити до відкритих інвойсів.';
$lang['Cron.index.completed_all_system'] = 'Всі системні завдання виконані.';
$lang['Cron.index.attempt_all_system'] = 'Спроба запустити всі системні завдання.';
$lang['Cron.index.completed_all'] = 'Всі завдання були виконані.';
$lang['Cron.index.attempt_all'] = 'Спроба запустити всі завдання за %1$s.';
$lang['Cron.!error.task_execution.failed'] = 'Помилка: %1$s %2$s';
$lang['Cron.!error.cron.failed'] = 'Cron не зміг зареєструватися.';
$lang['Cron.!error.task_filter.exclude_not_array'] = 'Фільтр завдання "виключити" повинен бути масивом.';
$lang['Cron.!error.task_filter.include_not_array'] = 'Фільтр завдання "include" повинен бути масивом.';
$lang['Cron.!error.task_filter.both_include_exclude'] = 'Фільтр завдань не може мати одночасно ключі "включити" і "виключити".';
$lang['Cron.!error.task_filter.invalid_format'] = 'Фільтр завдань повинен бути JSON-об\'єктом.';
$lang['Cron.!error.task_filter.invalid_json'] = 'Неправильний JSON у параметрі фільтрації завдань: %1$s';

