<?php
/**
 * Services
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Services.!error.key.empty'] = 'La clave del campo de servicio no debe estar vacía.';
$lang['Services.!error.key.length'] = 'La clave del campo de servicio no debe superar los 32 caracteres.';
$lang['Services.!error.value.empty'] = 'El valor del campo de servicio no debe estar vacío.';
$lang['Services.!error.encrypted.format'] = 'Formato no válido para encriptado.';
$lang['Services.!error.move.unpaid_invoices'] = 'El servicio no puede trasladarse a otro cliente, porque tiene facturas impagadas.';
$lang['Services.!error.service_id.exists'] = 'ID de servicio no válido.';
$lang['Services.!error.parent_service_id.exists'] = 'ID de servicio principal no válido.';
$lang['Services.!error.parent_service_id.parent'] = 'El ID del servicio padre ya existe como hijo de otro servicio.';
$lang['Services.!error.package_group_id.exists'] = 'ID de grupo de paquetes no válido.';
$lang['Services.!error.id_format.empty'] = 'No se ha establecido ningún formato de identificación para las facturas.';
$lang['Services.!error.id_format.length'] = 'El formato de identificación de las facturas no puede superar los 64 caracteres.';
$lang['Services.!error.id_value.valid'] = 'No se puede determinar el valor del ID de la factura.';
$lang['Services.!error.pricing_id.exists'] = 'Seleccione un término válido.';
$lang['Services.!error.pricing_id.overrides'] = 'El término del paquete no puede modificarse cuando se establecen anulaciones de precio.';
$lang['Services.!error.client_id.exists'] = 'El cliente no existe.';
$lang['Services.!error.client_id.allowed'] = 'El cliente no puede acceder a ese paquete.';
$lang['Services.!error.module_row_id.exists'] = 'ID de fila de módulo no válido.';
$lang['Services.!error.coupon_id.valid'] = 'Ese cupón no parece ser válido.';
$lang['Services.!error.qty.format'] = 'La cantidad debe ser un número.';
$lang['Services.!error.qty.length'] = 'La longitud de la cantidad no puede superar los 10 caracteres.';
$lang['Services.!error.qty.available'] = 'Se ha alcanzado el límite de cantidad. Si es posible, seleccione una cantidad menor.';
$lang['Services.!error.module_row.valid'] = 'La fila del módulo no existe.';
$lang['Services.!error.module_group.valid'] = 'El grupo de módulos no existe.';
$lang['Services.!error.override_price.format'] = 'El precio anulado debe ser un número.';
$lang['Services.!error.override_price.override'] = 'Tanto el precio como la divisa deben establecerse para anular el precio actual.';
$lang['Services.!error.override_currency.format'] = 'Seleccione una moneda válida.';
$lang['Services.!error.status.format'] = 'Estado no válido.';
$lang['Services.!error.date_added.format'] = 'Formato de fecha añadido no válido.';
$lang['Services.!error.date_renews.format'] = 'Formato de fecha de renovación no válido.';
$lang['Services.!error.date_renews.valid'] = 'La fecha de renovación debe ser mayor que la última fecha de renovación de %1$s.';
$lang['Services.!error.date_last_renewed.format'] = 'Formato de fecha de última renovación no válido.';
$lang['Services.!error.date_suspended.format'] = 'Formato de fecha suspendido no válido.';
$lang['Services.!error.date_canceled.format'] = 'Formato de fecha cancelado no válido.';
$lang['Services.!error.use_module.format'] = 'Formato de módulo de uso no válido.';
$lang['Services.!error.fields[][key].empty'] = 'Una clave está vacía de los campos de servicio.';
$lang['Services.!error.fields[][value].empty'] = 'Un valor está vacío de los campos de servicio.';
$lang['Services.!error.fields[][encrypted].format'] = 'Un campo de servicio para la encriptación tiene un formato no válido.';
$lang['Services.!error.invoice_method.valid'] = 'Debe seleccionar un método de facturación válido.';
$lang['Services.!error.pricing_id.valid'] = 'Debe seleccionar un término válido.';
$lang['Services.!error.date_canceled.valid'] = 'Debe fijar una fecha válida para cancelar este servicio.';
$lang['Services.!error.configoptions.valid'] = 'Una de las opciones configurables seleccionadas no es válida para el servicio.';
$lang['Services.!error.status.valid'] = 'Sólo pueden borrarse los servicios pendientes, cancelados o en revisión.';
$lang['Services.!error.service_id.has_children'] = 'Este servicio no puede ser eliminado porque tiene servicios infantiles. Por favor, cancele o elimine estos servicios e inténtelo de nuevo.';
$lang['Services.!error.prorate.format'] = 'El prorrateo debe establecerse como "true" o "false".';
$lang['Services.getStatusTypes.active'] = 'Activo';
$lang['Services.getStatusTypes.canceled'] = 'Cancelado';
$lang['Services.getStatusTypes.pending'] = 'Pendiente';
$lang['Services.getStatusTypes.suspended'] = 'Suspendido';
$lang['Services.getStatusTypes.in_review'] = 'En revisión';
$lang['Services.getActions.suspend'] = 'Suspender';
$lang['Services.getActions.unsuspend'] = 'Unsuspender';
$lang['Services.getActions.cancel'] = 'Cancelar';
$lang['Services.getActions.schedule_cancel'] = 'Anulación de horarios';
$lang['Services.getActions.change_renew'] = 'Cambiar la fecha de renovación';
$lang['Services.getActions.update_coupon'] = 'Actualizar cupón';

