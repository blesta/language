<?php
/**
 * Support Manager Tickets
 *
 * @package blesta
 * @subpackage blesta.language.ru_ru
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SupportManagerTickets.reassign_note'] = 'Этот билет был переназначен на %1$s. Предыдущие ответы клиента были переназначены этому клиенту и могли быть сделаны другим человеком.';
$lang['SupportManagerTickets.log.unassigned'] = 'Не назначено';
$lang['SupportManagerTickets.log.ticket_staff_id'] = 'Назначен на %1$s.';
$lang['SupportManagerTickets.log.status'] = 'Статус был изменен на %1$s.';
$lang['SupportManagerTickets.log.priority'] = 'Приоритет был изменен на %1$s.';
$lang['SupportManagerTickets.log.summary'] = 'Резюме было обновлено.';
$lang['SupportManagerTickets.log.department_id'] = 'Отдел был изменен на %1$s.';
$lang['SupportManagerTickets.type.log'] = 'Журнал';
$lang['SupportManagerTickets.type.note'] = 'Примечание';
$lang['SupportManagerTickets.type.reply'] = 'Ответить';
$lang['SupportManagerTickets.status.trash'] = 'Мусор';
$lang['SupportManagerTickets.status.closed'] = 'Закрытый';
$lang['SupportManagerTickets.status.on_hold'] = 'В режиме ожидания';
$lang['SupportManagerTickets.status.in_progress'] = 'В процессе';
$lang['SupportManagerTickets.status.awaiting_reply'] = 'Ожидание ответа клиента';
$lang['SupportManagerTickets.status.open'] = 'Ожидание ответа персонала';
$lang['SupportManagerTickets.priority.low'] = 'Низкий';
$lang['SupportManagerTickets.priority.medium'] = 'Средний';
$lang['SupportManagerTickets.priority.high'] = 'Высокий';
$lang['SupportManagerTickets.priority.critical'] = 'Критический';
$lang['SupportManagerTickets.priority.emergency'] = 'Аварийная ситуация';
$lang['SupportManagerTickets.merge.reply'] = 'Этот билет был объединен с билетом #%1$s.';
$lang['SupportManagerTickets.!error.client_id.company'] = 'Как минимум один билет не принадлежит той же компании, что и данный клиент.';
$lang['SupportManagerTickets.!error.ticket_ids[].exists'] = 'По крайней мере один идентификатор билета недействителен.';
$lang['SupportManagerTickets.!error.tickets.department_matches'] = 'По крайней мере один из билетов не может быть отнесен к данному отделу, поскольку он не принадлежит той же компании.';
$lang['SupportManagerTickets.!error.tickets.service_matches'] = 'Хотя бы один из билетов не может быть назначен на данную услугу, потому что он не принадлежит связанному с ним клиенту.';
$lang['SupportManagerTickets.!error.merge_into.itself'] = 'Билет не может быть объединен с самим собой.';
$lang['SupportManagerTickets.!error.tickets.valid'] = 'Хотя бы один выбранный билет недействителен, закрыт или не принадлежит тому же клиенту, что и выбранный билет.';
$lang['SupportManagerTickets.!error.replies.notes'] = 'Заметки об ответе на билет не могут быть выделены в отдельный билет без включения в него ответа на билет.';
$lang['SupportManagerTickets.!error.replies.valid'] = 'По крайней мере один идентификатор ответа на билет недействителен, или все ответы были выбраны. Вы должны оставить хотя бы один ответ.';
$lang['SupportManagerTickets.!error.client_id.attached_to'] = 'Ответ на билет может быть получен не от другого клиента.';
$lang['SupportManagerTickets.!error.details.empty'] = 'Пожалуйста, введите некоторые подробности об этом билете.';
$lang['SupportManagerTickets.!error.type.new_valid'] = 'Новые билеты должны иметь тип ответа "Ответ".';
$lang['SupportManagerTickets.!error.type.format'] = 'Пожалуйста, выберите правильный тип ответа.';
$lang['SupportManagerTickets.!error.ticket_id.exists'] = 'Неверный идентификатор билета.';
$lang['SupportManagerTickets.!error.date_closed.format'] = 'Дата закрытия билета имеет неверный формат.';
$lang['SupportManagerTickets.!error.date_updated.format'] = 'Дата обновления билета имеет неверный формат.';
$lang['SupportManagerTickets.!error.date_added.format'] = 'Дата добавления билета имеет неверный формат.';
$lang['SupportManagerTickets.!error.status.trash'] = 'Замусоренный билет не может быть отредактирован.';
$lang['SupportManagerTickets.!error.status.format'] = 'Пожалуйста, выберите действительный статус.';
$lang['SupportManagerTickets.!error.priority.format'] = 'Пожалуйста, выберите правильный приоритет.';
$lang['SupportManagerTickets.!error.summary.length'] = 'Длина резюме не должна превышать 255 символов.';
$lang['SupportManagerTickets.!error.summary.empty'] = 'Пожалуйста, введите краткое содержание.';
$lang['SupportManagerTickets.!error.email.format'] = 'Пожалуйста, введите действительный адрес электронной почты.';
$lang['SupportManagerTickets.!error.client_id.set'] = 'Билет принадлежит другому клиенту, и назначенный клиент не может быть изменен.';
$lang['SupportManagerTickets.!error.client_id.exists'] = 'Неверный идентификатор клиента.';
$lang['SupportManagerTickets.!error.service_id.belongs'] = 'Выбранная услуга недействительна.';
$lang['SupportManagerTickets.!error.service_id.exists'] = 'Услуга, выбранная для этого билета, не существует.';
$lang['SupportManagerTickets.!error.by_staff_id.exists'] = 'Сотрудник, назначенный для выполнения редактирования, не существует.';
$lang['SupportManagerTickets.!error.contact_id.valid'] = 'Контакт не может ответить на билет без действующего клиента.';
$lang['SupportManagerTickets.!error.contact_id.exists'] = 'Контакт, выбранный для ответа на этот билет, не существует.';
$lang['SupportManagerTickets.!error.staff_id.exists'] = 'Неверный идентификатор сотрудника.';
$lang['SupportManagerTickets.!error.department_id.exists'] = 'Пожалуйста, выберите действующий отдел.';
$lang['SupportManagerTickets.!error.code.format'] = 'Код билета должен содержать только цифры.';

