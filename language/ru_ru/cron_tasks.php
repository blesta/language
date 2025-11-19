<?php
/**
 * Cron Tasks
 *
 * @package blesta
 * @subpackage blesta.language.ru_ru
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['CronTasks.crontask.name.license_validation'] = 'Проверка лицензии';
$lang['CronTasks.crontask.description.transition_quotations'] = 'Пометить котировки, срок действия которых истек, как просроченные';
$lang['CronTasks.crontask.name.transition_quotations'] = 'Цитаты о переходе';
$lang['CronTasks.crontask.description.unsuspend_services'] = 'Приостановленные услуги, которые были оплачены, будут отменены через выбранный интервал времени.';
$lang['CronTasks.crontask.name.unsuspend_services'] = 'Услуги по отстранению от работы';
$lang['CronTasks.crontask.description.cleanup_logs'] = 'Старые журналы шлюза, модуля и другие журналы будут ежедневно обновляться в зависимости от настроек их хранения в указанное время.';
$lang['CronTasks.crontask.name.cleanup_logs'] = 'Очистка журналов';
$lang['CronTasks.crontask.description.deliver_reports'] = 'Ежедневно в указанное время будут предоставляться отчеты по расчетам с покупателями и заказчиками, формированию счетов-фактур, налоговым обязательствам и другие отчеты.';
$lang['CronTasks.crontask.name.deliver_reports'] = 'Предоставление отчетов';
$lang['CronTasks.crontask.description.exchange_rates'] = 'Курсы валют будут обновляться с указанным интервалом. Не рекомендуется запускать эту функцию чаще двух раз в день из-за риска быть заблокированным.';
$lang['CronTasks.crontask.name.exchange_rates'] = 'Обновление валютных курсов';
$lang['CronTasks.crontask.description.suspend_services'] = 'Просроченные услуги будут приостанавливаться ежедневно в указанное время.';
$lang['CronTasks.crontask.name.suspend_services'] = 'Приостановить обслуживание';
$lang['CronTasks.crontask.description.backups_sftp'] = 'Резервное копирование по протоколу SFTP планируется в разделе Системные настройки > Резервное копирование > Безопасный FTP.';
$lang['CronTasks.crontask.name.backups_sftp'] = 'Резервное копирование по протоколу SFTP';
$lang['CronTasks.crontask.description.backups_amazons3'] = 'Резервное копирование Amazon S3 планируется в разделе Системные настройки > Резервное копирование > Amazon S3.';
$lang['CronTasks.crontask.name.backups_amazons3'] = 'Резервное копирование Amazon S3';
$lang['CronTasks.crontask.description.deliver_invoices'] = 'Счета, запланированные к доставке, будут отправляться с выбранным интервалом.';
$lang['CronTasks.crontask.name.deliver_invoices'] = 'Доставка счетов-фактур';
$lang['CronTasks.crontask.description.card_expiration_reminders'] = 'Напоминание будет отправлено 15 числа месяца для кредитных карт, срок действия которых истекает в этом месяце в указанное время.';
$lang['CronTasks.crontask.name.card_expiration_reminders'] = 'Напоминания об истечении срока действия карты 15 числа месяца';
$lang['CronTasks.crontask.description.cancel_scheduled_services'] = 'Услуги, для которых установлены даты отмены в будущем, удаляются через выбранный интервал времени.';
$lang['CronTasks.crontask.name.cancel_scheduled_services'] = 'Отмена запланированных услуг';
$lang['CronTasks.crontask.description.provision_pending_services'] = 'Оплаченные услуги активируются через выбранный интервал времени.';
$lang['CronTasks.crontask.name.provision_pending_services'] = 'Резерв Оплаченный Ожидаемые услуги';
$lang['CronTasks.crontask.description.process_renewing_services'] = 'Обновляемые службы, прикрепленные к модулям, обновляются с выбранным интервалом.';
$lang['CronTasks.crontask.name.process_renewing_services'] = 'Продление процессуальных услуг';
$lang['CronTasks.crontask.description.process_service_changes'] = 'Оплаченные изменения в очереди на обслуживание (например, обновления) обрабатываются с выбранным интервалом.';
$lang['CronTasks.crontask.name.process_service_changes'] = 'Изменения в технологическом обслуживании';
$lang['CronTasks.crontask.description.apply_payments'] = 'Кредиты на сумму недостачи применяются к открытым счетам автоматически с выбранным интервалом.';
$lang['CronTasks.crontask.name.apply_payments'] = 'Применять платежи к открытым счетам';
$lang['CronTasks.crontask.description.payment_reminders'] = 'Напоминания о платежах и уведомления о просрочке отправляются ежедневно в указанное время.';
$lang['CronTasks.crontask.name.payment_reminders'] = 'Напоминания о платежах';
$lang['CronTasks.crontask.description.autodebit'] = 'Платежные счета, выбранные для автоматического дебетования, будут запускаться для погашения открытых счетов ежедневно в указанное время.';
$lang['CronTasks.crontask.name.autodebit'] = 'Автоматическое списание';
$lang['CronTasks.crontask.description.apply_invoice_late_fees'] = 'Применяет штрафы за просрочку к открытым счетам через заданное количество дней после наступления срока оплаты.';
$lang['CronTasks.crontask.name.apply_invoice_late_fees'] = 'Применять штрафы за просрочку оплаты счетов-фактур';
$lang['CronTasks.crontask.description.create_invoice'] = 'Повторяющиеся счета и продление услуг выставляются с помощью этого задания, которое выполняется один раз в день в указанное время.';
$lang['CronTasks.crontask.name.create_invoice'] = 'Создать счет-фактуру';
$lang['CronTasks.task_type.module'] = 'Модуль';
$lang['CronTasks.task_type.plugin'] = 'Плагин';
$lang['CronTasks.task_type.system'] = 'Система';
$lang['CronTasks.!error.type.format'] = 'Неверный тип задачи cron. Должно быть либо время, либо интервал.';
$lang['CronTasks.!error.time.format'] = 'Время имеет неправильный формат.';
$lang['CronTasks.!error.interval.format'] = 'Интервал должен быть числом, обозначающим минуты.';
$lang['CronTasks.!error.enabled.length'] = 'Длина разрешенного символа не должна превышать 1 символ.';
$lang['CronTasks.!error.enabled.format'] = 'enabled должно быть числом.';
$lang['CronTasks.!error.is_lang.length'] = 'Длина is_lang не может превышать 1 символа.';
$lang['CronTasks.!error.is_lang.format'] = 'is_lang должно быть числом.';
$lang['CronTasks.!error.name.empty'] = 'Пожалуйста, введите имя.';
$lang['CronTasks.!error.id.exists'] = 'Неверный идентификатор задачи cron.';
$lang['CronTasks.!error.run_id.exists'] = 'Неверный идентификатор запуска задачи cron.';
$lang['CronTasks.!error.dir.length'] = 'Длина каталога не должна превышать 64 символов.';
$lang['CronTasks.!error.task_type.format'] = 'Неверный тип задачи. Должен быть модуль, плагин или система.';
$lang['CronTasks.!error.key.length'] = 'Длина ключа задачи cron не должна превышать 64 символов.';
$lang['CronTasks.!error.key.unique'] = 'Указанный ключ задания cron уже занят.';
$lang['CronTasks.crontask.description.delete_expired_password_reset_tokens'] = 'Удаляет из системы все токены сброса пароля, срок действия которых истек.';
$lang['CronTasks.crontask.name.delete_expired_password_reset_tokens'] = 'Удаление просроченных токенов сброса пароля';
$lang['CronTasks.crontask.description.low_balance_notifications'] = 'Отправляет уведомление всем пользователям, чей кредитный уровень упал ниже настроенного порога.';
$lang['CronTasks.crontask.name.low_balance_notifications'] = 'Уведомления о низком балансе';

