<?php
/**
 * Support Manager Departments
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SupportManagerDepartments.!error.company_id.exists'] = 'ID de empresa no válida.';
$lang['SupportManagerDepartments.!error.name.empty'] = 'Introduzca un nombre para este departamento.';
$lang['SupportManagerDepartments.!error.description.empty'] = 'Por favor, introduzca una descripción.';
$lang['SupportManagerDepartments.!error.email.format'] = 'Introduzca una dirección de correo electrónico válida.';
$lang['SupportManagerDepartments.!error.method.format'] = 'Tipo de método no válido.';
$lang['SupportManagerDepartments.!error.method.imap'] = 'La extensión PHP IMAP es necesaria para descargar mensajes a través de POP3 o IMAP.';
$lang['SupportManagerDepartments.!error.method.mailparse'] = 'La extensión PHP Mailparse PECL es necesaria para parsear tickets de correo electrónico.';
$lang['SupportManagerDepartments.!error.default_priority.format'] = 'Tipo de prioridad por defecto no válido.';
$lang['SupportManagerDepartments.!error.host.format'] = 'Introduzca un nombre de host válido.';
$lang['SupportManagerDepartments.!error.host.length'] = 'El nombre del host no puede tener más de 128 caracteres.';
$lang['SupportManagerDepartments.!error.user.format'] = 'Introduzca un nombre de usuario.';
$lang['SupportManagerDepartments.!error.user.length'] = 'El nombre de usuario no puede tener más de 64 caracteres.';
$lang['SupportManagerDepartments.!error.password.format'] = 'Por favor, introduzca una contraseña.';
$lang['SupportManagerDepartments.!error.port.format'] = 'Introduzca un número de puerto.';
$lang['SupportManagerDepartments.!error.port.length'] = 'El puerto no puede tener más de 6 dígitos.';
$lang['SupportManagerDepartments.!error.service.format'] = 'Seleccione un tipo de servicio válido.';
$lang['SupportManagerDepartments.!error.security.format'] = 'Seleccione un tipo de seguridad válido.';
$lang['SupportManagerDepartments.!error.mark_messages.format'] = 'Seleccione un tipo de mensaje válido para marcar los mensajes.';
$lang['SupportManagerDepartments.!error.mark_messages.valid'] = 'Los mensajes que utilizan POP3 sólo pueden marcarse como borrados.';
$lang['SupportManagerDepartments.!error.clients_only.format'] = 'Se debe establecer en 0 o 1 si se permite a los clientes abrir o responder tickets.';
$lang['SupportManagerDepartments.!error.require_captcha.format'] = 'Se debe establecer en 0 o 1 si se requiere verificación humana.';
$lang['SupportManagerDepartments.!error.override_from_email.format'] = 'Si desea permitir que la dirección de correo electrónico de este departamento se utilice como dirección del remitente en las plantillas de correo electrónico, debe tener el valor 0 ó 1.';
$lang['SupportManagerDepartments.!error.send_ticket_received.format'] = 'Se debe establecer en 0 o 1 si se deben enviar correos electrónicos de confirmación de tickets para este departamento.';
$lang['SupportManagerDepartments.!error.close_ticket_interval.format'] = 'Seleccione un intervalo de cierre válido.';
$lang['SupportManagerDepartments.!error.delete_ticket_interval.format'] = 'Por favor, seleccione un intervalo válido para borrar el billete.';
$lang['SupportManagerDepartments.!error.reminder_ticket_interval.format'] = 'Por favor, seleccione un intervalo de ticket recordatorio válido.';
$lang['SupportManagerDepartments.!error.reminder_ticket_status.format'] = 'Seleccione un estado de recordatorio de billete válido.';
$lang['SupportManagerDepartments.!error.reminder_ticket_priority.format'] = 'Por favor, seleccione una prioridad de recordatorio de entrada válida.';
$lang['SupportManagerDepartments.!error.include_attachments.format'] = 'Se debe establecer en 0 o 1 si se deben incluir los archivos adjuntos del ticket.';
$lang['SupportManagerDepartments.!error.attachment_types.length'] = 'La lista de tipos de archivos adjuntos no puede superar los 255 caracteres de longitud.';
$lang['SupportManagerDepartments.!error.max_attachment_size.format'] = 'El tamaño máximo del archivo adjunto debe ser un valor numérico.';
$lang['SupportManagerDepartments.!error.response_id.format'] = 'Seleccione una respuesta de cierre automático válida.';
$lang['SupportManagerDepartments.!error.status.format'] = 'Tipo de estado no válido.';
$lang['SupportManagerDepartments.!error.department_id.exists'] = 'ID de departamento no válido.';
$lang['SupportManagerDepartments.!error.label.empty'] = 'Por favor, introduzca una etiqueta.';
$lang['SupportManagerDepartments.!error.visibility.format'] = 'Seleccione un estado de visibilidad válido.';
$lang['SupportManagerDepartments.!error.type.format'] = 'Seleccione un tipo de campo válido.';
$lang['SupportManagerDepartments.!error.client_add.format'] = 'Permitir o no que el cliente añada debe ser 0 o 1.';
$lang['SupportManagerDepartments.!error.encrypted.format'] = 'La opción de encriptar los datos del campo debe ser 0 ó 1.';
$lang['SupportManagerDepartments.!error.auto_delete.format'] = 'Se debe establecer en 0 o 1 si se deben borrar automáticamente los datos del campo después de cerrar un ticket.';
$lang['SupportManagerDepartments.!error.department_id.has_tickets'] = 'No se ha podido eliminar el departamento porque actualmente tiene tickets asignados.';
$lang['SupportManagerDepartments.methods.none'] = 'Ninguno';
$lang['SupportManagerDepartments.methods.pipe'] = 'Tuberías';
$lang['SupportManagerDepartments.methods.pop3'] = 'POP3';
$lang['SupportManagerDepartments.methods.imap'] = 'IMAP';
$lang['SupportManagerDepartments.statuses.hidden'] = 'Oculto';
$lang['SupportManagerDepartments.statuses.visible'] = 'Visible';
$lang['SupportManagerDepartments.priorities.emergency'] = 'Emergencia';
$lang['SupportManagerDepartments.priorities.critical'] = 'Crítica';
$lang['SupportManagerDepartments.priorities.high'] = 'Alta';
$lang['SupportManagerDepartments.priorities.medium'] = 'Medio';
$lang['SupportManagerDepartments.priorities.low'] = 'Bajo';
$lang['SupportManagerDepartments.security_types.none'] = 'Ninguno';
$lang['SupportManagerDepartments.security_types.ssl'] = 'SSL';
$lang['SupportManagerDepartments.security_types.tls'] = 'TLS';
$lang['SupportManagerDepartments.message_types.read'] = 'Leer';
$lang['SupportManagerDepartments.message_types.deleted'] = 'Suprimido';
$lang['SupportManagerDepartments.field_types.checkbox'] = 'Casilla de verificación';
$lang['SupportManagerDepartments.field_types.radio'] = 'Radio';
$lang['SupportManagerDepartments.field_types.select'] = 'Desplegable';
$lang['SupportManagerDepartments.field_types.quantity'] = 'Cantidad';
$lang['SupportManagerDepartments.field_types.text'] = 'Texto';
$lang['SupportManagerDepartments.field_types.textarea'] = 'Área de texto';
$lang['SupportManagerDepartments.field_types.password'] = 'Contraseña';
$lang['SupportManagerDepartments.visibility_options.client'] = 'Cliente y personal';
$lang['SupportManagerDepartments.visibility_options.staff'] = 'Sólo para el personal';
$lang['SupportManagerDepartments.ticket_intervals.day'] = '1 día';
$lang['SupportManagerDepartments.ticket_intervals.days'] = '%1$s Días';
$lang['SupportManagerDepartments.reminder_intervals.hour'] = '1 hora';
$lang['SupportManagerDepartments.reminder_intervals.hours'] = '%1$s Horas';
$lang['SupportManagerDepartments.reminder_intervals.minutes'] = '%1$s Minutos';
$lang['SupportManagerDepartments.!error.priorities[].format'] = 'Una o más prioridades no son válidas.';
$lang['SupportManagerDepartments.!error.priorities[].empty'] = 'Seleccione al menos una prioridad.';
$lang['SupportManagerDepartments.visibility_options.client_only'] = 'Sólo para clientes';
$lang['SupportManagerDepartments.field_types.emergency'] = 'Pasar a Emergencia';
$lang['SupportManagerDepartments.!error.required.format'] = 'Si se requiere el archivo debe ser 0 o 1.';
$lang['SupportManagerDepartments.providers.microsoft'] = 'Microsoft';
$lang['SupportManagerDepartments.providers.google'] = 'Google';
$lang['SupportManagerDepartments.methods.oauth2'] = 'OAuth 2.0';

