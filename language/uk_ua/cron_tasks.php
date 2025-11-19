<?php
/**
 * Cron Tasks
 *
 * @package blesta
 * @subpackage blesta.language.uk_ua
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['CronTasks.crontask.description.delete_expired_password_reset_tokens'] = 'Видаляє з системи всі токени скидання пароля, термін дії яких закінчився.';
$lang['CronTasks.crontask.name.delete_expired_password_reset_tokens'] = 'Видалення прострочених токенів скидання пароля';
$lang['CronTasks.crontask.name.license_validation'] = 'Перевірка ліцензії';
$lang['CronTasks.crontask.description.transition_quotations'] = 'Позначте котирування, термін дії яких минув, як прострочені';
$lang['CronTasks.crontask.name.transition_quotations'] = 'Перехідні котирування';
$lang['CronTasks.crontask.description.unsuspend_services'] = 'Призупинені послуги, які були оплачені, будуть відновлені через обраний інтервал часу.';
$lang['CronTasks.crontask.name.unsuspend_services'] = 'Призупинення послуг';
$lang['CronTasks.crontask.description.cleanup_logs'] = 'Старі журнали шлюзів, модулів та інші журнали будуть ротируватися щодня залежно від налаштувань їхнього збереження на вказаний час.';
$lang['CronTasks.crontask.name.cleanup_logs'] = 'Очищення журналів';
$lang['CronTasks.crontask.description.deliver_reports'] = 'Звіти про прибуткові та видаткові операції, формування рахунків, податкові зобов\'язання та інші звіти будуть надсилатися щодня у вказаний час.';
$lang['CronTasks.crontask.name.deliver_reports'] = 'Доставляти звіти';
$lang['CronTasks.crontask.description.exchange_rates'] = 'Курси валют будуть оновлюватися із зазначеним інтервалом. Не рекомендується запускати цю функцію частіше, ніж двічі на день, оскільки існує ризик блокування.';
$lang['CronTasks.crontask.name.exchange_rates'] = 'Оновлення обмінних курсів';
$lang['CronTasks.crontask.description.suspend_services'] = 'Прострочені послуги будуть призупинятися щодня у вказаний час.';
$lang['CronTasks.crontask.name.suspend_services'] = 'Призупинити надання послуг';
$lang['CronTasks.crontask.description.backups_sftp'] = 'Резервне копіювання на SFTP можна запланувати у розділі Налаштування системи > Резервне копіювання > Безпечний FTP.';
$lang['CronTasks.crontask.name.backups_sftp'] = 'Резервні копії на SFTP';
$lang['CronTasks.crontask.description.backups_amazons3'] = 'Резервне копіювання до Amazon S3 можна запланувати в розділі "Системні налаштування" > "Резервне копіювання" > "Amazon S3".';
$lang['CronTasks.crontask.name.backups_amazons3'] = 'Резервні копії Amazon S3';
$lang['CronTasks.crontask.description.deliver_invoices'] = 'Інвойси, які заплановані до доставки, будуть надіслані з обраним інтервалом.';
$lang['CronTasks.crontask.name.deliver_invoices'] = 'Доставляти рахунки-фактури';
$lang['CronTasks.crontask.description.card_expiration_reminders'] = 'Нагадування буде надіслано 15 числа місяця для кредитних карток, термін дії яких закінчується в цьому місяці у вказаний час.';
$lang['CronTasks.crontask.name.card_expiration_reminders'] = 'Нагадування про закінчення терміну дії картки 15 числа місяця';
$lang['CronTasks.crontask.description.cancel_scheduled_services'] = 'Послуги, для яких встановлені майбутні дати скасування, видаляються з вибраним інтервалом.';
$lang['CronTasks.crontask.name.cancel_scheduled_services'] = 'Скасувати заплановані послуги';
$lang['CronTasks.crontask.description.provision_pending_services'] = 'Платні відкладені послуги активуються з обраним інтервалом.';
$lang['CronTasks.crontask.name.provision_pending_services'] = 'Надання платних послуг на стадії очікування';
$lang['CronTasks.crontask.description.process_renewing_services'] = 'Поновлення послуг, які прив\'язані до модулів, поновлюються з обраним інтервалом.';
$lang['CronTasks.crontask.name.process_renewing_services'] = 'Поновлення послуг обробки';
$lang['CronTasks.crontask.description.process_service_changes'] = 'Платні зміни в черзі (наприклад, оновлення) обробляються з обраним інтервалом.';
$lang['CronTasks.crontask.name.process_service_changes'] = 'Обробляти зміни в сервісах';
$lang['CronTasks.crontask.description.apply_payments'] = 'Вільні кредити застосовуються до відкритих інвойсів автоматично з вибраним інтервалом.';
$lang['CronTasks.crontask.name.apply_payments'] = 'Застосувати платежі до відкритих інвойсів';
$lang['CronTasks.crontask.description.payment_reminders'] = 'Нагадування про оплату та повідомлення про прострочення надсилаються щодня в зазначений час.';
$lang['CronTasks.crontask.name.payment_reminders'] = 'Нагадування про оплату';
$lang['CronTasks.crontask.description.autodebit'] = 'Платіжні рахунки, обрані для автоматичного списання, будуть запускатися для погашення відкритих інвойсів щодня у вказаний час.';
$lang['CronTasks.crontask.name.autodebit'] = 'Автоматичне списання';
$lang['CronTasks.crontask.description.apply_invoice_late_fees'] = 'Застосовує штрафи за прострочення до відкритих інвойсів через налаштовану кількість днів після настання терміну оплати.';
$lang['CronTasks.crontask.name.apply_invoice_late_fees'] = 'Застосувати штрафи за прострочення інвойсу';
$lang['CronTasks.crontask.description.create_invoice'] = 'За допомогою цього завдання, яке запускається один раз на день у вказаний час, виставляються періодичні рахунки та рахунки на поновлення послуг.';
$lang['CronTasks.crontask.name.create_invoice'] = 'Створити рахунок-фактуру';
$lang['CronTasks.task_type.module'] = 'Модуль';
$lang['CronTasks.task_type.plugin'] = 'Плагін';
$lang['CronTasks.task_type.system'] = 'Система';
$lang['CronTasks.!error.type.format'] = 'Неправильний тип завдання cron. Має бути або час, або інтервал.';
$lang['CronTasks.!error.time.format'] = 'Час у невірному форматі.';
$lang['CronTasks.!error.interval.format'] = 'Інтервал повинен бути числом, що представляє хвилини.';
$lang['CronTasks.!error.enabled.length'] = 'дозволена довжина не може перевищувати 1 символ.';
$lang['CronTasks.!error.enabled.format'] = 'enabled має бути числом.';
$lang['CronTasks.!error.is_lang.length'] = 'Довжина is_lang не може перевищувати 1 символ.';
$lang['CronTasks.!error.is_lang.format'] = 'is_lang має бути числом.';
$lang['CronTasks.!error.name.empty'] = 'Будь ласка, введіть ім\'я.';
$lang['CronTasks.!error.id.exists'] = 'Неправильний ідентифікатор завдання cron.';
$lang['CronTasks.!error.run_id.exists'] = 'Невірний ідентифікатор запуску завдання cron.';
$lang['CronTasks.!error.dir.length'] = 'Довжина каталогу не може перевищувати 64 символів.';
$lang['CronTasks.!error.task_type.format'] = 'Неправильний тип завдання. Має бути модуль, плагін або система.';
$lang['CronTasks.!error.key.length'] = 'Довжина ключа завдання cron не може перевищувати 64 символи.';
$lang['CronTasks.!error.key.unique'] = 'Наданий ключ завдання cron вже зайнято.';
$lang['CronTasks.crontask.description.low_balance_notifications'] = 'Надсилає сповіщення всім користувачам, чий кредитний рівень впав нижче налаштованого порогу.';
$lang['CronTasks.crontask.name.low_balance_notifications'] = 'Сповіщення про низький баланс';

