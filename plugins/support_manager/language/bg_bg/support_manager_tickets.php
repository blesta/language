<?php
/**
 * Support Manager Tickets
 *
 * @package blesta
 * @subpackage blesta.language.bg_bg
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SupportManagerTickets.!error.priority.valid'] = 'Моля, изберете валиден приоритет за този отдел.';
$lang['SupportManagerTickets.!error.contacts.valid'] = 'Поне един от контактите на билета е невалиден.';
$lang['SupportManagerTickets.!error.recipients.valid'] = 'Поне един от получателите на билета е невалиден.';
$lang['SupportManagerTickets.!error.recipients.duplicated'] = 'Поне един от получателите на билета е дублиран.';
$lang['SupportManagerTickets.reassign_note'] = 'Този билет е пренасочен към %1$s. Предишните отговори на клиента бяха пренасочени към този клиент и може да са били направени от друго лице.';
$lang['SupportManagerTickets.log.unassigned'] = 'Не е присвоено';
$lang['SupportManagerTickets.log.ticket_staff_id'] = 'Присвоено към %1$s.';
$lang['SupportManagerTickets.log.status'] = 'Статусът е променен на %1$s.';
$lang['SupportManagerTickets.log.priority'] = 'Приоритетът е променен на %1$s.';
$lang['SupportManagerTickets.log.summary'] = 'Резюмето е актуализирано.';
$lang['SupportManagerTickets.log.department_id'] = 'Отделът е променен на %1$s.';
$lang['SupportManagerTickets.type.log'] = 'Log';
$lang['SupportManagerTickets.type.note'] = 'Забележка';
$lang['SupportManagerTickets.type.reply'] = 'Отговор';
$lang['SupportManagerTickets.status.trash'] = 'Отпадъци';
$lang['SupportManagerTickets.status.closed'] = 'Затворен';
$lang['SupportManagerTickets.status.on_hold'] = 'В режим на задържане';
$lang['SupportManagerTickets.status.in_progress'] = 'В процес на изпълнение';
$lang['SupportManagerTickets.status.awaiting_reply'] = 'В очакване на отговор от клиента';
$lang['SupportManagerTickets.status.open'] = 'В очакване на отговор от персонала';
$lang['SupportManagerTickets.priority.low'] = 'Нисък';
$lang['SupportManagerTickets.priority.medium'] = 'Среден';
$lang['SupportManagerTickets.priority.high'] = 'Висока';
$lang['SupportManagerTickets.priority.critical'] = 'Критичен';
$lang['SupportManagerTickets.priority.emergency'] = 'Спешна помощ';
$lang['SupportManagerTickets.merge.reply'] = 'Този билет е обединен с билет #%1$s.';
$lang['SupportManagerTickets.!error.client_id.company'] = 'Поне един билет не принадлежи на същата компания като дадения клиент.';
$lang['SupportManagerTickets.!error.ticket_ids[].exists'] = 'Поне един идентификатор на билет е невалиден.';
$lang['SupportManagerTickets.!error.tickets.department_matches'] = 'Поне един от билетите не може да бъде разпределен към дадения отдел, тъй като не принадлежи на същата компания.';
$lang['SupportManagerTickets.!error.tickets.service_matches'] = 'Поне един от билетите не може да бъде присвоен на дадената услуга, тъй като не принадлежи на свързания клиент.';
$lang['SupportManagerTickets.!error.merge_into.itself'] = 'Билетът не може да бъде обединен със самия себе си.';
$lang['SupportManagerTickets.!error.tickets.valid'] = 'Поне един избран билет е невалиден, затворен или не принадлежи на същия клиент като избрания билет.';
$lang['SupportManagerTickets.!error.replies.notes'] = 'Бележките към отговора на билета не могат да се отделят в отделен билет, без да включват и отговор на билета.';
$lang['SupportManagerTickets.!error.replies.valid'] = 'Поне един идентификатор на отговор на билет е невалиден или всички отговори са избрани. Трябва да оставите поне един останал отговор.';
$lang['SupportManagerTickets.!error.client_id.attached_to'] = 'Отговорът на билета може да не е от друг клиент.';
$lang['SupportManagerTickets.!error.details.empty'] = 'Моля, въведете някои подробности за този билет.';
$lang['SupportManagerTickets.!error.type.new_valid'] = 'Новите билети трябва да имат тип отговор "отговор".';
$lang['SupportManagerTickets.!error.type.format'] = 'Моля, изберете валиден тип отговор.';
$lang['SupportManagerTickets.!error.ticket_id.exists'] = 'Невалиден идентификатор на билета.';
$lang['SupportManagerTickets.!error.date_closed.format'] = 'Датата на затваряне на билета е в невалиден формат.';
$lang['SupportManagerTickets.!error.date_updated.format'] = 'Датата на актуализация на билета е в невалиден формат.';
$lang['SupportManagerTickets.!error.date_added.format'] = 'Датата на добавяне на билета е в невалиден формат.';
$lang['SupportManagerTickets.!error.status.trash'] = 'Изтрит билет не може да се редактира.';
$lang['SupportManagerTickets.!error.status.format'] = 'Моля, изберете валиден статус.';
$lang['SupportManagerTickets.!error.priority.format'] = 'Моля, изберете валиден приоритет.';
$lang['SupportManagerTickets.!error.summary.length'] = 'Дължината на резюмето не може да надвишава 255 символа.';
$lang['SupportManagerTickets.!error.summary.empty'] = 'Моля, въведете резюме.';
$lang['SupportManagerTickets.!error.email.format'] = 'Моля, въведете валиден имейл адрес.';
$lang['SupportManagerTickets.!error.client_id.set'] = 'Билетът принадлежи на друг клиент и назначеният клиент не може да бъде променян.';
$lang['SupportManagerTickets.!error.client_id.exists'] = 'Невалиден идентификатор на клиент.';
$lang['SupportManagerTickets.!error.service_id.belongs'] = 'Избраната услуга е невалидна.';
$lang['SupportManagerTickets.!error.service_id.exists'] = 'Услугата, избрана за този билет, не съществува.';
$lang['SupportManagerTickets.!error.by_staff_id.exists'] = 'Членът на персонала, определен за извършване на редакцията, не съществува.';
$lang['SupportManagerTickets.!error.contact_id.valid'] = 'Контактът не може да отговори на билета, ако няма валиден клиент.';
$lang['SupportManagerTickets.!error.contact_id.exists'] = 'Контактът, избран за този отговор на билета, не съществува.';
$lang['SupportManagerTickets.!error.staff_id.exists'] = 'Невалиден идентификационен номер на служителя.';
$lang['SupportManagerTickets.!error.department_id.exists'] = 'Моля, изберете валиден отдел.';
$lang['SupportManagerTickets.!error.code.format'] = 'Кодът на билета трябва да съдържа само цифри.';
$lang['SupportManagerTickets.log.service_id'] = 'Свързаната услуга е променена на вътрешен идентификатор: #%1$s.';
$lang['SupportManagerTickets.!error.custom_fields.empty'] = '"%1$s" е задължителен и не може да бъде празен.';

