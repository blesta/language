<?php
/**
 * Cron Tasks
 *
 * @package blesta
 * @subpackage blesta.language.bg_bg
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['CronTasks.crontask.description.delete_expired_password_reset_tokens'] = 'Премахва от системата всички токени за нулиране на парола с изтекъл срок на валидност.';
$lang['CronTasks.crontask.name.delete_expired_password_reset_tokens'] = 'Изтриване на изтеклите токени за възстановяване на паролата';
$lang['CronTasks.crontask.name.license_validation'] = 'Удостоверяване на лиценза';
$lang['CronTasks.crontask.description.transition_quotations'] = 'Маркиране на цитати след валидната дата като изтекли';
$lang['CronTasks.crontask.name.transition_quotations'] = 'Цитати за прехода';
$lang['CronTasks.crontask.description.unsuspend_services'] = 'Суспендираните услуги, които са били платени, ще бъдат отменени на избрания интервал.';
$lang['CronTasks.crontask.name.unsuspend_services'] = 'Услуги за разсрочване';
$lang['CronTasks.crontask.description.cleanup_logs'] = 'Старите дневници на шлюза, модула и други ще бъдат ротирани ежедневно в зависимост от настройките за запазване в посочения момент.';
$lang['CronTasks.crontask.name.cleanup_logs'] = 'Почистване на дневници';
$lang['CronTasks.crontask.description.deliver_reports'] = 'Отчетите за приходите и разходите, генерирането на фактури, данъчните задължения и други отчети ще бъдат предоставяни ежедневно в определеното време.';
$lang['CronTasks.crontask.name.deliver_reports'] = 'Предоставяне на доклади';
$lang['CronTasks.crontask.description.exchange_rates'] = 'Обменните курсове се актуализират на посочения интервал. Не се препоръчва да изпълнявате тази функция повече от два пъти дневно, тъй като има риск да бъдете блокирани.';
$lang['CronTasks.crontask.name.exchange_rates'] = 'Актуализации на валутния курс';
$lang['CronTasks.crontask.description.suspend_services'] = 'Просрочените услуги ще бъдат спирани ежедневно в посочения час.';
$lang['CronTasks.crontask.name.suspend_services'] = 'Преустановяване на услугите';
$lang['CronTasks.crontask.description.backups_sftp'] = 'Резервните копия на SFTP се планират в System Settings (Системни настройки) &gt; Backup (Резервно копие) &gt; Secure FTP (Защитен FTP).';
$lang['CronTasks.crontask.name.backups_sftp'] = 'SFTP резервни копия';
$lang['CronTasks.crontask.description.backups_amazons3'] = 'Резервните копия на Amazon S3 се планират в System Settings (Системни настройки) &gt; Backup (Резервно копие) &gt; Amazon S3.';
$lang['CronTasks.crontask.name.backups_amazons3'] = 'Резервни копия на Amazon S3';
$lang['CronTasks.crontask.description.deliver_invoices'] = 'Фактурите, които са планирани за доставка, ще бъдат изпращани на избрания интервал.';
$lang['CronTasks.crontask.name.deliver_invoices'] = 'Предоставяне на фактури';
$lang['CronTasks.crontask.description.card_expiration_reminders'] = 'На 15-то число от месеца ще бъде изпратено напомняне за кредитни карти, чийто срок на валидност изтича в посочения месец.';
$lang['CronTasks.crontask.name.card_expiration_reminders'] = 'Напомняне за изтичане на срока на валидност на картата 15-то число на месеца';
$lang['CronTasks.crontask.description.cancel_scheduled_services'] = 'Услугите със зададени бъдещи дати за анулиране се премахват през избрания интервал.';
$lang['CronTasks.crontask.name.cancel_scheduled_services'] = 'Отмяна на планирани услуги';
$lang['CronTasks.crontask.description.provision_pending_services'] = 'Платените чакащи услуги се активират на избрания интервал.';
$lang['CronTasks.crontask.name.provision_pending_services'] = 'Платена провизия за чакащи услуги';
$lang['CronTasks.crontask.description.process_renewing_services'] = 'Услугите за подновяване, които са свързани с модули, се подновяват на избрания интервал.';
$lang['CronTasks.crontask.name.process_renewing_services'] = 'Подновяване на процесуални услуги';
$lang['CronTasks.crontask.description.process_service_changes'] = 'Платените промени в услугата, за които се чака на опашка (напр. подобрения), се обработват на избрания интервал.';
$lang['CronTasks.crontask.name.process_service_changes'] = 'Промени в процесуалните услуги';
$lang['CronTasks.crontask.description.apply_payments'] = 'Свободните кредити се прилагат към отворените фактури автоматично на избрания интервал.';
$lang['CronTasks.crontask.name.apply_payments'] = 'Прилагане на плащания към отворени фактури';
$lang['CronTasks.crontask.description.payment_reminders'] = 'Напомняния за плащане и известия за закъснение се изпращат ежедневно в посочения час.';
$lang['CronTasks.crontask.name.payment_reminders'] = 'Напомняния за плащане';
$lang['CronTasks.crontask.description.autodebit'] = 'Платежните сметки, избрани за автоматично дебитиране, ще се стартират, за да изплащат отворените фактури ежедневно в посочения час.';
$lang['CronTasks.crontask.name.autodebit'] = 'Автоматичен дебит';
$lang['CronTasks.crontask.description.apply_invoice_late_fees'] = 'Прилага такси за закъснение за отворени фактури с конфигуриран брой дни след падежа.';
$lang['CronTasks.crontask.name.apply_invoice_late_fees'] = 'Прилагане на такси за забавяне на фактури';
$lang['CronTasks.crontask.description.create_invoice'] = 'Повтарящите се фактури и подновяващите се услуги се фактурират чрез тази задача, която се изпълнява веднъж дневно в посоченото време.';
$lang['CronTasks.crontask.name.create_invoice'] = 'Създаване на фактура';
$lang['CronTasks.task_type.module'] = 'Модул';
$lang['CronTasks.task_type.plugin'] = 'Плъгин';
$lang['CronTasks.task_type.system'] = 'Система';
$lang['CronTasks.!error.type.format'] = 'Невалиден тип задача на cron. Трябва да бъде или време, или интервал.';
$lang['CronTasks.!error.time.format'] = 'Времето е в невалиден формат.';
$lang['CronTasks.!error.interval.format'] = 'Интервалът трябва да е число, представляващо минути.';
$lang['CronTasks.!error.enabled.length'] = 'разрешената дължина не може да надвишава 1 символ.';
$lang['CronTasks.!error.enabled.format'] = 'enabled трябва да е число.';
$lang['CronTasks.!error.is_lang.length'] = 'Дължината на is_lang не може да надвишава 1 символ.';
$lang['CronTasks.!error.is_lang.format'] = 'is_lang трябва да е число.';
$lang['CronTasks.!error.name.empty'] = 'Моля, въведете име.';
$lang['CronTasks.!error.id.exists'] = 'Невалиден идентификатор на задачата cron.';
$lang['CronTasks.!error.run_id.exists'] = 'Невалиден идентификатор на изпълнение на задачата cron.';
$lang['CronTasks.!error.dir.length'] = 'Дължината на директорията не може да надвишава 64 символа.';
$lang['CronTasks.!error.task_type.format'] = 'Невалиден тип задача. Трябва да е модул, приставка или система.';
$lang['CronTasks.!error.key.length'] = 'Дължината на ключа на задачата cron не може да надвишава 64 символа.';
$lang['CronTasks.!error.key.unique'] = 'Предоставеният ключ за задачата cron вече е зает.';
$lang['CronTasks.crontask.description.low_balance_notifications'] = 'Изпраща известие на всички потребители, чиито кредитни нива са паднали под конфигурирания праг.';
$lang['CronTasks.crontask.name.low_balance_notifications'] = 'Известия за нисък баланс';

