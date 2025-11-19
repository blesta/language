<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.edit.text_fields_map'] = 'Esta sección le permite renombrar el nombre de los campos del evento que se está activando a un nombre personalizado antes de que se envíen a la devolución de llamada. Los subcampos deben ir separados por un punto (por ejemplo, vars.status). Para ver una lista de todos los campos soportados por cada uno de los eventos, puedes consultar el siguiente <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">enlace</a>.';
$lang['AdminMain.edit.field_editsubmit'] = 'Editar Webhook';
$lang['AdminMain.edit.field_add_field'] = 'Añadir campo';
$lang['AdminMain.edit.field_method'] = 'Método';
$lang['AdminMain.edit.field_type'] = 'Devolución de llamada';
$lang['AdminMain.edit.field_event'] = 'Evento';
$lang['AdminMain.edit.field_callback'] = 'Devolución de llamada';
$lang['AdminMain.edit.option_delete'] = 'Borrar';
$lang['AdminMain.edit.heading_options'] = 'Opciones';
$lang['AdminMain.edit.heading_parameter'] = 'Nuevo campo';
$lang['AdminMain.edit.heading_field'] = 'Campo original';
$lang['AdminMain.edit.heading_fields_map'] = 'Mapa de campos';
$lang['AdminMain.edit.heading_event'] = 'Evento';
$lang['AdminMain.edit.boxtitle_editwebhook'] = 'Editar Webhook';
$lang['AdminMain.add.text_fields_map'] = 'Esta sección le permite renombrar el nombre de los campos del evento que se está activando a un nombre personalizado antes de que se envíen a la devolución de llamada. Los subcampos deben ir separados por un punto (por ejemplo, vars.status). Para ver una lista de todos los campos soportados por cada uno de los eventos, puedes consultar el siguiente <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">enlace</a>.';
$lang['AdminMain.add.field_addsubmit'] = 'Añadir Webhook';
$lang['AdminMain.add.field_add_field'] = 'Añadir campo';
$lang['AdminMain.add.field_method'] = 'Método';
$lang['AdminMain.add.field_type'] = 'Devolución de llamada';
$lang['AdminMain.add.field_event'] = 'Evento';
$lang['AdminMain.add.field_callback'] = 'Devolución de llamada';
$lang['AdminMain.add.option_delete'] = 'Borrar';
$lang['AdminMain.add.heading_options'] = 'Opciones';
$lang['AdminMain.add.heading_parameter'] = 'Nuevo campo';
$lang['AdminMain.add.heading_field'] = 'Campo original';
$lang['AdminMain.add.heading_fields_map'] = 'Mapa de campos';
$lang['AdminMain.add.heading_event'] = 'Evento';
$lang['AdminMain.add.boxtitle_addwebhook'] = 'Añadir Webhook';
$lang['AdminMain.index.no_results'] = 'No hay webhooks disponibles.';
$lang['AdminMain.index.text_description_incoming'] = 'Recibe una petición HTTP y activa un evento en el sistema utilizando los parámetros recibidos en la petición. La solicitud puede recibirse mediante GET, POST o JSON.';
$lang['AdminMain.index.text_description_outgoing'] = 'Envía una petición HTTP a una URL cuando se activa un evento. La solicitud puede enviarse mediante GET, POST, PUT o JSON.';
$lang['AdminMain.index.option_delete'] = 'Borrar';
$lang['AdminMain.index.option_edit'] = 'Editar';
$lang['AdminMain.index.heading_options'] = 'Opciones';
$lang['AdminMain.index.heading_method'] = 'Método';
$lang['AdminMain.index.heading_event'] = 'Evento';
$lang['AdminMain.index.heading_callback'] = 'Devolución de llamada';
$lang['AdminMain.index.boxtitle_webhooks'] = 'Webhooks';
$lang['AdminMain.index.categorylink_addwebhook'] = 'Añadir Webhook';
$lang['AdminMain.index.category_outgoing'] = 'Saliente';
$lang['AdminMain.index.category_incoming'] = 'Entrante';
$lang['AdminMain.index.page_title_edit'] = 'Editar Webhook';
$lang['AdminMain.index.page_title_add'] = 'Añadir Webhook';
$lang['AdminMain.index.page_title_index'] = 'Webhooks';
$lang['AdminMain.modal.delete_text'] = '¿Está seguro de que desea eliminar este webhook?';
$lang['AdminMain.!success.webhook_deleted'] = 'El webhook se ha eliminado correctamente.';
$lang['AdminMain.!success.webhook_updated'] = 'El webhook se ha actualizado correctamente.';
$lang['AdminMain.!success.webhook_added'] = 'El webhook se ha añadido correctamente.';
$lang['AdminMain.!tooltip.callback'] = 'El callback representa donde la petición va a ser enviada o recibida, para webhooks salientes debe ser una URL y para webhooks entrantes debe ser el nombre para la URL donde la petición sería recibida. ej. http://blesta.com/plugin/webhooks/trigger/index/[Callback Name].';
$lang['AdminMain.edit.field_cancel'] = 'Cancelar';
$lang['AdminMain.add.field_cancel'] = 'Cancelar';
$lang['AdminMain.logs.no_results'] = 'No hay registros disponibles.';
$lang['AdminMain.logs.option_resend'] = 'Vuelva a enviar';
$lang['AdminMain.logs.confirm_resend'] = '¿Estás seguro de que quieres reenviar este evento?';
$lang['AdminMain.logs.field_filterdateend'] = 'Fecha final';
$lang['AdminMain.logs.field_filterdatestart'] = 'Fecha de inicio';
$lang['AdminMain.logs.field_filterhttpstatus'] = 'Estado HTTP';
$lang['AdminMain.logs.field_filterevent'] = 'Evento';
$lang['AdminMain.logs.field_filterwebhook_all'] = 'Todos los Webhooks';
$lang['AdminMain.logs.field_filterwebhook'] = 'Gancho web';
$lang['AdminMain.logs.heading_options'] = 'Opciones';
$lang['AdminMain.logs.heading_date_last_retry'] = 'Último reintento';
$lang['AdminMain.logs.heading_date_triggered'] = 'Fecha de activación';
$lang['AdminMain.logs.heading_http_response'] = 'Respuesta HTTP';
$lang['AdminMain.logs.heading_method'] = 'Método';
$lang['AdminMain.logs.heading_response'] = 'Respuesta';
$lang['AdminMain.logs.heading_event'] = 'Evento';
$lang['AdminMain.logs.heading_webhook'] = 'Gancho web';
$lang['AdminMain.logs.categorylink_viewwebhooks'] = 'Ver Webhooks';
$lang['AdminMain.logs.boxtitle_logs'] = 'Registros Webhook';
$lang['AdminMain.index.option_logs'] = 'Registros';
$lang['AdminMain.index.categorylink_viewlogs'] = 'Ver todos los registros';
$lang['AdminMain.index.page_title_logs'] = 'Registros Webhook';
$lang['AdminMain.!success.webhook_retried'] = 'El webhook se ha reintentado con éxito.';

