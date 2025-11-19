<?php
/**
 * Cron
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Cron.!error.cron.failed'] = 'Cron falló en el registro.';
$lang['Cron.!error.task_execution.failed'] = 'Error: %1$s %2$s';
$lang['Cron.index.attempt_all'] = 'Intentando ejecutar todas las tareas para %1$s.';
$lang['Cron.index.completed_all'] = 'Se han completado todas las tareas.';
$lang['Cron.index.attempt_all_system'] = 'Intentando ejecutar todas las tareas del sistema.';
$lang['Cron.index.completed_all_system'] = 'Se han completado todas las tareas del sistema.';
$lang['Cron.applycredits.attempt'] = 'Intento de aplicar créditos a facturas pendientes.';
$lang['Cron.applycredits.completed'] = 'La tarea de aplicar créditos ha finalizado.';
$lang['Cron.applycredits.apply_failed'] = 'No se han podido aplicar los créditos pendientes para el cliente #%1$s.';
$lang['Cron.applycredits.apply_success'] = 'Se han aplicado correctamente los créditos pendientes de la transacción %1$s para el cliente #%2$s a la factura #%3$s por un importe de %4$s.';
$lang['Cron.applycredits.apply_none'] = 'No hay facturas a las que se puedan aplicar créditos.';
$lang['Cron.autodebitinvoices.attempt'] = 'Intento de cargo automático de facturas pendientes.';
$lang['Cron.autodebitinvoices.completed'] = 'La tarea de domiciliación automática de facturas ha finalizado.';
$lang['Cron.autodebitinvoices.charge_attempt'] = 'Intento de cargo automático al cliente #%1$s de todas las facturas pendientes por importe de %2$s.';
$lang['Cron.autodebitinvoices.charge_failed'] = 'No se ha podido procesar el pago.';
$lang['Cron.autodebitinvoices.charge_success'] = 'El pago se ha procesado correctamente.';
$lang['Cron.cardexpirationreminders.attempt'] = 'Intento de envío de recordatorios de caducidad de tarjeta.';
$lang['Cron.cardexpirationreminders.completed'] = 'La tarea de recordatorio de caducidad de tarjeta ha finalizado.';
$lang['Cron.cardexpirationreminders.failed'] = 'No se ha podido enviar el recordatorio de vencimiento para el contacto %1$s %2$s del cliente #%3$s.';
$lang['Cron.cardexpirationreminders.success'] = 'Enviado correctamente el recordatorio de vencimiento para el contacto %1$s %2$s del cliente #%3$s.';
$lang['Cron.suspendservices.attempt'] = 'Intentar suspender los servicios adeudados.';
$lang['Cron.suspendservices.completed'] = 'La tarea de suspender servicios ha finalizado.';
$lang['Cron.suspendservices.suspension_reason'] = 'Impago';
$lang['Cron.suspendservices.suspend_error'] = 'No se ha podido suspender el servicio #%1$s del cliente %2$s.';
$lang['Cron.suspendservices.suspend_success'] = 'El servicio #%1$s del cliente %2$s ha sido suspendido.';
$lang['Cron.unsuspendservices.attempt'] = 'Intentar anular la suspensión de servicios de pago.';
$lang['Cron.unsuspendservices.completed'] = 'La tarea de cancelación de servicios ha finalizado.';
$lang['Cron.unsuspendservices.unsuspend_error'] = 'El servicio #%1$s del cliente %2$s no ha podido ser desbloqueado.';
$lang['Cron.unsuspendservices.unsuspend_success'] = 'El servicio #%1$s del cliente %2$s ha sido cancelado.';
$lang['Cron.cancelscheduledservices.attempt'] = 'Intentar cancelar servicios programados.';
$lang['Cron.cancelscheduledservices.completed'] = 'La tarea de cancelación de servicios programados ha finalizado.';
$lang['Cron.cancelscheduledservices.cancel_error'] = 'No se ha podido cancelar el servicio #%1$s del cliente #%2$s.';
$lang['Cron.cancelscheduledservices.cancel_success'] = 'El servicio #%1$s del cliente #%2$s ha sido cancelado.';
$lang['Cron.addpaidpendingservices.attempt'] = 'Intento de provisión de servicios pendientes de pago.';
$lang['Cron.addpaidpendingservices.completed'] = 'La tarea de servicios pendientes de pago ha finalizado.';
$lang['Cron.addpaidpendingservices.service_error'] = 'No se ha podido activar el servicio pendiente #%1$s del cliente #%2$s.';
$lang['Cron.addpaidpendingservices.service_success'] = 'El servicio pendiente #%1$s del cliente #%2$s está ahora activo.';
$lang['Cron.!error.task_filter.exclude_not_array'] = 'El filtro de tarea "exclude" debe ser un array.';
$lang['Cron.!error.task_filter.include_not_array'] = 'El filtro de tarea "include" debe ser un array.';
$lang['Cron.!error.task_filter.both_include_exclude'] = 'El filtro de tareas no puede tener tanto claves de "inclusión" como de "exclusión".';
$lang['Cron.!error.task_filter.invalid_format'] = 'El filtro de tarea debe ser un objeto JSON.';
$lang['Cron.!error.task_filter.invalid_json'] = 'JSON no válido en el parámetro del filtro de tareas: %1$s';

