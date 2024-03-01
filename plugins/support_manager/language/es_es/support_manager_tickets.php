<?php
/**
 * Support Manager Tickets
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SupportManagerTickets.!error.code.format'] = 'El código del billete debe contener sólo dígitos.';
$lang['SupportManagerTickets.!error.department_id.exists'] = 'Seleccione un departamento válido.';
$lang['SupportManagerTickets.!error.staff_id.exists'] = 'ID de personal no válida.';
$lang['SupportManagerTickets.!error.contact_id.exists'] = 'El contacto seleccionado para esta respuesta de ticket no existe.';
$lang['SupportManagerTickets.!error.contact_id.valid'] = 'El contacto no puede responder al ticket sin un cliente válido.';
$lang['SupportManagerTickets.!error.by_staff_id.exists'] = 'El miembro del personal designado para realizar la edición no existe.';
$lang['SupportManagerTickets.!error.service_id.exists'] = 'El servicio seleccionado para este ticket no existe.';
$lang['SupportManagerTickets.!error.service_id.belongs'] = 'El servicio seleccionado no es válido.';
$lang['SupportManagerTickets.!error.client_id.exists'] = 'ID de cliente no válido.';
$lang['SupportManagerTickets.!error.client_id.set'] = 'El billete pertenece a otro cliente y no se puede cambiar el cliente asignado.';
$lang['SupportManagerTickets.!error.email.format'] = 'Introduzca una dirección de correo electrónico válida.';
$lang['SupportManagerTickets.!error.summary.empty'] = 'Por favor, introduzca un resumen.';
$lang['SupportManagerTickets.!error.summary.length'] = 'El resumen no puede superar los 255 caracteres de longitud.';
$lang['SupportManagerTickets.!error.priority.format'] = 'Seleccione una prioridad válida.';
$lang['SupportManagerTickets.!error.status.format'] = 'Seleccione un estado válido.';
$lang['SupportManagerTickets.!error.status.trash'] = 'Un ticket rechazado no puede ser editado.';
$lang['SupportManagerTickets.!error.date_added.format'] = 'La fecha de alta del ticket tiene un formato no válido.';
$lang['SupportManagerTickets.!error.date_updated.format'] = 'La fecha de actualización del ticket tiene un formato de fecha no válido.';
$lang['SupportManagerTickets.!error.date_closed.format'] = 'La fecha de cierre del ticket tiene un formato de fecha no válido.';
$lang['SupportManagerTickets.!error.ticket_id.exists'] = 'ID de billete no válido.';
$lang['SupportManagerTickets.!error.type.format'] = 'Seleccione un tipo de respuesta válido.';
$lang['SupportManagerTickets.!error.type.new_valid'] = 'Los tickets nuevos deben tener un tipo de respuesta "respuesta".';
$lang['SupportManagerTickets.!error.details.empty'] = 'Por favor, introduzca algunos detalles sobre este billete.';
$lang['SupportManagerTickets.!error.client_id.attached_to'] = 'La respuesta al ticket puede no ser de un cliente diferente.';
$lang['SupportManagerTickets.!error.replies.valid'] = 'Al menos un ID de respuesta del ticket no es válido, o se han seleccionado todas las respuestas. Debe dejar al menos una respuesta restante.';
$lang['SupportManagerTickets.!error.replies.notes'] = 'Las notas de respuesta a un ticket no pueden dividirse en un ticket separado sin incluir también una respuesta al ticket.';
$lang['SupportManagerTickets.!error.tickets.valid'] = 'Al menos un ticket seleccionado no es válido, está cerrado o no pertenece al mismo cliente que el ticket elegido.';
$lang['SupportManagerTickets.!error.merge_into.itself'] = 'El ticket no puede fusionarse consigo mismo.';
$lang['SupportManagerTickets.!error.tickets.service_matches'] = 'Al menos uno de los tickets no se ha podido asignar al servicio dado porque no pertenece al cliente asociado.';
$lang['SupportManagerTickets.!error.tickets.department_matches'] = 'Al menos uno de los tickets no ha podido ser asignado al departamento indicado porque no pertenece a la misma empresa.';
$lang['SupportManagerTickets.!error.ticket_ids[].exists'] = 'Al menos un identificador de billete no es válido.';
$lang['SupportManagerTickets.!error.client_id.company'] = 'Al menos un billete no pertenece a la misma empresa que el cliente en cuestión.';
$lang['SupportManagerTickets.merge.reply'] = 'Este ticket ha sido fusionado con el ticket #%1$s.';
$lang['SupportManagerTickets.priority.emergency'] = 'Emergencia';
$lang['SupportManagerTickets.priority.critical'] = 'Crítica';
$lang['SupportManagerTickets.priority.high'] = 'Alta';
$lang['SupportManagerTickets.priority.medium'] = 'Medio';
$lang['SupportManagerTickets.priority.low'] = 'Bajo';
$lang['SupportManagerTickets.status.open'] = 'A la espera de la respuesta del personal';
$lang['SupportManagerTickets.status.awaiting_reply'] = 'A la espera de la respuesta del cliente';
$lang['SupportManagerTickets.status.in_progress'] = 'En curso';
$lang['SupportManagerTickets.status.on_hold'] = 'En espera';
$lang['SupportManagerTickets.status.closed'] = 'Cerrado';
$lang['SupportManagerTickets.status.trash'] = 'Basura';
$lang['SupportManagerTickets.type.reply'] = 'Respuesta';
$lang['SupportManagerTickets.type.note'] = 'Nota';
$lang['SupportManagerTickets.type.log'] = 'Registro';
$lang['SupportManagerTickets.log.department_id'] = 'El departamento ha sido cambiado a %1$s.';
$lang['SupportManagerTickets.log.summary'] = 'Se ha actualizado el resumen.';
$lang['SupportManagerTickets.log.priority'] = 'La prioridad se ha cambiado a %1$s.';
$lang['SupportManagerTickets.log.status'] = 'El estado ha cambiado a %1$s.';
$lang['SupportManagerTickets.log.ticket_staff_id'] = 'Asignado a %1$s.';
$lang['SupportManagerTickets.log.unassigned'] = 'No asignado';
$lang['SupportManagerTickets.reassign_note'] = 'Este ticket fue reasignado a %1$s. Las respuestas anteriores del cliente fueron reasignadas a este cliente y pueden haber sido realizadas por otra persona.';

