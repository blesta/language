<?php
/**
 * Support Manager Tickets
 *
 * @package blesta
 * @subpackage blesta.language.uk_ua
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SupportManagerTickets.reassign_note'] = 'Цей тикет був перепризначений %1$s. Попередні відповіді клієнта були перепризначені цьому клієнту і могли бути зроблені іншою особою.';
$lang['SupportManagerTickets.log.unassigned'] = 'Не призначено';
$lang['SupportManagerTickets.log.ticket_staff_id'] = 'Призначено на %1$s.';
$lang['SupportManagerTickets.log.status'] = 'Статус змінено на %1$s.';
$lang['SupportManagerTickets.log.priority'] = 'Пріоритет змінено на %1$s.';
$lang['SupportManagerTickets.log.summary'] = 'Резюме було оновлено.';
$lang['SupportManagerTickets.log.department_id'] = 'Відділ було змінено на %1$s.';
$lang['SupportManagerTickets.type.log'] = 'Журнал';
$lang['SupportManagerTickets.type.note'] = 'Примітка';
$lang['SupportManagerTickets.type.reply'] = 'Відповісти';
$lang['SupportManagerTickets.status.trash'] = 'Сміття.';
$lang['SupportManagerTickets.status.closed'] = 'Закрито.';
$lang['SupportManagerTickets.status.on_hold'] = 'На утриманні.';
$lang['SupportManagerTickets.status.in_progress'] = 'У процесі виконання';
$lang['SupportManagerTickets.status.awaiting_reply'] = 'Очікуємо на відповідь клієнта';
$lang['SupportManagerTickets.status.open'] = 'Очікуємо на відповідь персоналу';
$lang['SupportManagerTickets.priority.low'] = 'Низький';
$lang['SupportManagerTickets.priority.medium'] = 'Середній';
$lang['SupportManagerTickets.priority.high'] = 'Високий';
$lang['SupportManagerTickets.priority.critical'] = 'Критично';
$lang['SupportManagerTickets.priority.emergency'] = 'Надзвичайна ситуація';
$lang['SupportManagerTickets.merge.reply'] = 'Цей квиток було об\'єднано з квитком #%1$s.';
$lang['SupportManagerTickets.!error.client_id.company'] = 'Принаймні один квиток не належить тій самій компанії, що і даний клієнт.';
$lang['SupportManagerTickets.!error.ticket_ids[].exists'] = 'Принаймні один ідентифікатор квитка недійсний.';
$lang['SupportManagerTickets.!error.tickets.department_matches'] = 'Принаймні один з квитків не може бути приписаний до даного відділу, оскільки він не належить до тієї ж компанії.';
$lang['SupportManagerTickets.!error.tickets.service_matches'] = 'Принаймні один з квитків не може бути призначений на дану послугу, оскільки він не належить асоційованому клієнту.';
$lang['SupportManagerTickets.!error.merge_into.itself'] = 'Квиток не можна об\'єднувати з самим собою.';
$lang['SupportManagerTickets.!error.tickets.valid'] = 'Принаймні один з обраних квитків є недійсним, закритим або не належить тому ж клієнту, що і обраний квиток.';
$lang['SupportManagerTickets.!error.replies.notes'] = 'Примітки до відповіді на тікет не можуть бути виділені в окремий тікет без включення до нього відповіді на тікет.';
$lang['SupportManagerTickets.!error.replies.valid'] = 'Принаймні один ідентифікатор відповіді на тикет є недійсним, або всі відповіді були вибрані. Ви повинні залишити принаймні одну відповідь.';
$lang['SupportManagerTickets.!error.client_id.attached_to'] = 'Відповідь на тікет не може бути від іншого клієнта.';
$lang['SupportManagerTickets.!error.details.empty'] = 'Будь ласка, введіть деякі дані про цей квиток.';
$lang['SupportManagerTickets.!error.type.new_valid'] = 'Нові квитки повинні мати тип відповіді "відповідь".';
$lang['SupportManagerTickets.!error.type.format'] = 'Будь ласка, оберіть правильний тип відповіді.';
$lang['SupportManagerTickets.!error.ticket_id.exists'] = 'Невірний ідентифікатор квитка.';
$lang['SupportManagerTickets.!error.date_closed.format'] = 'Дата закриття квитка вказана у невірному форматі дати.';
$lang['SupportManagerTickets.!error.date_updated.format'] = 'Дата оновлення квитка має невірний формат дати.';
$lang['SupportManagerTickets.!error.date_added.format'] = 'Дата додавання квитка має невірний формат дати.';
$lang['SupportManagerTickets.!error.status.trash'] = 'Видалений квиток не може бути відредагований.';
$lang['SupportManagerTickets.!error.status.format'] = 'Будь ласка, оберіть дійсний статус.';
$lang['SupportManagerTickets.!error.priority.format'] = 'Будь ласка, оберіть правильний пріоритет.';
$lang['SupportManagerTickets.!error.summary.length'] = 'Довжина резюме не може перевищувати 255 символів.';
$lang['SupportManagerTickets.!error.summary.empty'] = 'Будь ласка, введіть резюме.';
$lang['SupportManagerTickets.!error.email.format'] = 'Будь ласка, введіть дійсну адресу електронної пошти.';
$lang['SupportManagerTickets.!error.client_id.set'] = 'Квиток належить іншому клієнту, і призначений клієнт не може бути змінений.';
$lang['SupportManagerTickets.!error.client_id.exists'] = 'Невірний ідентифікатор клієнта.';
$lang['SupportManagerTickets.!error.service_id.belongs'] = 'Обрана послуга є недійсною.';
$lang['SupportManagerTickets.!error.service_id.exists'] = 'Послуга, обрана для цього квитка, не існує.';
$lang['SupportManagerTickets.!error.by_staff_id.exists'] = 'Співробітник, який виконує редагування, не існує.';
$lang['SupportManagerTickets.!error.contact_id.valid'] = 'Контакт не може відповісти на запит без дійсного клієнта.';
$lang['SupportManagerTickets.!error.contact_id.exists'] = 'Контакт, обраний для відповіді на цей тикет, не існує.';
$lang['SupportManagerTickets.!error.staff_id.exists'] = 'Недійсне посвідчення працівника.';
$lang['SupportManagerTickets.!error.department_id.exists'] = 'Будь ласка, оберіть правильний відділ.';
$lang['SupportManagerTickets.!error.code.format'] = 'Код квитка повинен містити тільки цифри.';

