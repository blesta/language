<?php
/**
 * Support Manager Departments
 *
 * @package blesta
 * @subpackage blesta.language.ru_ru
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SupportManagerDepartments.reminder_intervals.minutes'] = '%1$s Минуты';
$lang['SupportManagerDepartments.reminder_intervals.hours'] = '%1$s Часы';
$lang['SupportManagerDepartments.reminder_intervals.hour'] = '1 час';
$lang['SupportManagerDepartments.ticket_intervals.days'] = '%1$s Дни';
$lang['SupportManagerDepartments.ticket_intervals.day'] = '1 день';
$lang['SupportManagerDepartments.visibility_options.staff'] = 'Только для персонала';
$lang['SupportManagerDepartments.visibility_options.client'] = 'Клиент и персонал';
$lang['SupportManagerDepartments.field_types.password'] = 'Пароль';
$lang['SupportManagerDepartments.field_types.textarea'] = 'Textarea';
$lang['SupportManagerDepartments.field_types.text'] = 'Текст';
$lang['SupportManagerDepartments.field_types.quantity'] = 'Количество';
$lang['SupportManagerDepartments.field_types.select'] = 'Выпадающий';
$lang['SupportManagerDepartments.field_types.radio'] = 'Радио';
$lang['SupportManagerDepartments.field_types.checkbox'] = 'Флажок';
$lang['SupportManagerDepartments.message_types.deleted'] = 'Удалено';
$lang['SupportManagerDepartments.message_types.read'] = 'Читать';
$lang['SupportManagerDepartments.security_types.tls'] = 'TLS';
$lang['SupportManagerDepartments.security_types.ssl'] = 'SSL';
$lang['SupportManagerDepartments.security_types.none'] = 'Нет';
$lang['SupportManagerDepartments.priorities.low'] = 'Низкий';
$lang['SupportManagerDepartments.priorities.medium'] = 'Средний';
$lang['SupportManagerDepartments.priorities.high'] = 'Высокий';
$lang['SupportManagerDepartments.priorities.critical'] = 'Критический';
$lang['SupportManagerDepartments.priorities.emergency'] = 'Аварийная ситуация';
$lang['SupportManagerDepartments.statuses.visible'] = 'Видимый';
$lang['SupportManagerDepartments.statuses.hidden'] = 'Скрытый';
$lang['SupportManagerDepartments.methods.imap'] = 'IMAP';
$lang['SupportManagerDepartments.methods.pop3'] = 'POP3';
$lang['SupportManagerDepartments.methods.pipe'] = 'Трубопроводы';
$lang['SupportManagerDepartments.methods.none'] = 'Нет';
$lang['SupportManagerDepartments.!error.department_id.has_tickets'] = 'Отдел не может быть удален, поскольку в настоящее время ему назначены билеты.';
$lang['SupportManagerDepartments.!error.auto_delete.format'] = 'Для параметра автоматического удаления данных поля после закрытия билета необходимо установить значение 0 или 1.';
$lang['SupportManagerDepartments.!error.encrypted.format'] = 'Для параметра шифрования данных поля необходимо установить значение 0 или 1.';
$lang['SupportManagerDepartments.!error.client_add.format'] = 'Разрешить ли клиенту добавлять, должно быть установлено значение 0 или 1.';
$lang['SupportManagerDepartments.!error.type.format'] = 'Пожалуйста, выберите правильный тип поля.';
$lang['SupportManagerDepartments.!error.visibility.format'] = 'Пожалуйста, выберите действительный статус видимости.';
$lang['SupportManagerDepartments.!error.label.empty'] = 'Пожалуйста, введите этикетку.';
$lang['SupportManagerDepartments.!error.department_id.exists'] = 'Неверный идентификатор отдела.';
$lang['SupportManagerDepartments.!error.status.format'] = 'Недопустимый тип состояния.';
$lang['SupportManagerDepartments.!error.response_id.format'] = 'Пожалуйста, выберите правильный ответ на автозакрытие.';
$lang['SupportManagerDepartments.!error.max_attachment_size.format'] = 'Максимальный размер вложения должен быть числовым значением.';
$lang['SupportManagerDepartments.!error.attachment_types.length'] = 'Длина списка типов вложений не должна превышать 255 символов.';
$lang['SupportManagerDepartments.!error.include_attachments.format'] = 'Значение параметра "Включать вложения к билетам" должно быть равно 0 или 1.';
$lang['SupportManagerDepartments.!error.reminder_ticket_priority.format'] = 'Пожалуйста, выберите приоритет напоминания о действительном билете.';
$lang['SupportManagerDepartments.!error.reminder_ticket_status.format'] = 'Пожалуйста, выберите действительный статус напоминания о билете.';
$lang['SupportManagerDepartments.!error.reminder_ticket_interval.format'] = 'Пожалуйста, выберите интервал действия билета-напоминания.';
$lang['SupportManagerDepartments.!error.delete_ticket_interval.format'] = 'Пожалуйста, выберите действительный интервал удаления билетов.';
$lang['SupportManagerDepartments.!error.close_ticket_interval.format'] = 'Пожалуйста, выберите действительный интервал закрытия билетов.';
$lang['SupportManagerDepartments.!error.send_ticket_received.format'] = 'Необходимо установить значение 0 или 1 для отправки электронных писем с подтверждением билетов для этого отдела.';
$lang['SupportManagerDepartments.!error.override_from_email.format'] = 'Разрешить ли использовать адрес электронной почты этого отдела в качестве адреса from в шаблонах электронной почты, должно быть установлено значение 0 или 1.';
$lang['SupportManagerDepartments.!error.require_captcha.format'] = 'Требуется ли проверка человеком, должно быть установлено значение 0 или 1.';
$lang['SupportManagerDepartments.!error.clients_only.format'] = 'Разрешать ли клиентам открывать билеты или отвечать на них, должно быть установлено значение 0 или 1.';
$lang['SupportManagerDepartments.!error.mark_messages.valid'] = 'Сообщения, использующие POP3, могут быть помечены только как удаленные.';
$lang['SupportManagerDepartments.!error.mark_messages.format'] = 'Чтобы отметить сообщения, выберите правильный тип сообщения.';
$lang['SupportManagerDepartments.!error.security.format'] = 'Пожалуйста, выберите действительный тип безопасности.';
$lang['SupportManagerDepartments.!error.service.format'] = 'Пожалуйста, выберите правильный тип услуги.';
$lang['SupportManagerDepartments.!error.port.length'] = 'Длина порта не должна превышать 6 цифр.';
$lang['SupportManagerDepartments.!error.port.format'] = 'Введите номер порта.';
$lang['SupportManagerDepartments.!error.password.format'] = 'Пожалуйста, введите пароль.';
$lang['SupportManagerDepartments.!error.user.length'] = 'Длина имени пользователя не должна превышать 64 символов.';
$lang['SupportManagerDepartments.!error.user.format'] = 'Введите имя пользователя.';
$lang['SupportManagerDepartments.!error.host.length'] = 'Длина имени хоста не должна превышать 128 символов.';
$lang['SupportManagerDepartments.!error.host.format'] = 'Пожалуйста, введите действительное имя хоста.';
$lang['SupportManagerDepartments.!error.default_priority.format'] = 'Неверный тип приоритета по умолчанию.';
$lang['SupportManagerDepartments.!error.method.mailparse'] = 'Расширение PHP Mailparse PECL необходимо для разбора билетов электронной почты.';
$lang['SupportManagerDepartments.!error.method.imap'] = 'Расширение PHP IMAP необходимо для загрузки сообщений через POP3 или IMAP.';
$lang['SupportManagerDepartments.!error.method.format'] = 'Недопустимый тип метода.';
$lang['SupportManagerDepartments.!error.email.format'] = 'Пожалуйста, введите действительный адрес электронной почты.';
$lang['SupportManagerDepartments.!error.description.empty'] = 'Пожалуйста, введите описание.';
$lang['SupportManagerDepartments.!error.name.empty'] = 'Пожалуйста, введите название этого отдела.';
$lang['SupportManagerDepartments.!error.company_id.exists'] = 'Неверный идентификатор компании.';
$lang['SupportManagerDepartments.!error.priorities[].format'] = 'Один или несколько приоритетов недействительны.';
$lang['SupportManagerDepartments.!error.priorities[].empty'] = 'Выберите хотя бы один приоритет.';
$lang['SupportManagerDepartments.visibility_options.client_only'] = 'Только для клиентов';
$lang['SupportManagerDepartments.field_types.emergency'] = 'Эскалация в экстренную ситуацию';
$lang['SupportManagerDepartments.!error.required.format'] = 'Требуется ли установить значение 0 или 1.';
$lang['SupportManagerDepartments.providers.microsoft'] = 'Microsoft';
$lang['SupportManagerDepartments.providers.google'] = 'Google';
$lang['SupportManagerDepartments.methods.oauth2'] = 'OAuth 2.0';

