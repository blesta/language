<?php
/**
 * Cron Tasks
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['CronTasks.!error.key.unique'] = 'La clave de tarea cron proporcionada ya está ocupada.';
$lang['CronTasks.!error.key.length'] = 'La longitud de la clave de la tarea cron no puede superar los 64 caracteres.';
$lang['CronTasks.!error.task_type.format'] = 'Tipo de tarea no válido. Debe ser módulo, complemento o sistema.';
$lang['CronTasks.!error.dir.length'] = 'La longitud del directorio no puede superar los 64 caracteres.';
$lang['CronTasks.!error.run_id.exists'] = 'ID de ejecución de tarea cron no válido.';
$lang['CronTasks.!error.id.exists'] = 'ID de tarea cron no válido.';
$lang['CronTasks.!error.name.empty'] = 'Por favor, introduzca un nombre.';
$lang['CronTasks.!error.is_lang.format'] = 'is_lang debe ser un número.';
$lang['CronTasks.!error.is_lang.length'] = 'La longitud de is_lang no puede superar 1 carácter.';
$lang['CronTasks.!error.enabled.format'] = 'habilitado debe ser un número.';
$lang['CronTasks.!error.enabled.length'] = 'La longitud permitida no puede superar 1 carácter.';
$lang['CronTasks.!error.interval.format'] = 'El intervalo debe ser un número que represente minutos.';
$lang['CronTasks.!error.time.format'] = 'La hora está en un formato no válido.';
$lang['CronTasks.!error.type.format'] = 'Tipo de tarea cron no válida. Debe ser de tiempo o de intervalo.';
$lang['CronTasks.task_type.system'] = 'Sistema';
$lang['CronTasks.task_type.plugin'] = 'Plugin';
$lang['CronTasks.task_type.module'] = 'Módulo';
$lang['CronTasks.crontask.name.create_invoice'] = 'Crear factura';
$lang['CronTasks.crontask.description.create_invoice'] = 'Las facturas periódicas y la renovación de servicios se facturan a través de esta tarea, que se ejecuta una vez al día a la hora especificada.';
$lang['CronTasks.crontask.name.apply_invoice_late_fees'] = 'Aplicar recargos por demora en la facturación';
$lang['CronTasks.crontask.description.apply_invoice_late_fees'] = 'Aplica recargos por demora a las facturas abiertas un número configurado de días después de su vencimiento.';
$lang['CronTasks.crontask.name.autodebit'] = 'Débito automático';
$lang['CronTasks.crontask.description.autodebit'] = 'Las cuentas de pago seleccionadas para débito automático se ejecutarán para pagar las facturas pendientes diariamente a la hora especificada.';
$lang['CronTasks.crontask.name.payment_reminders'] = 'Recordatorios de pago';
$lang['CronTasks.crontask.description.payment_reminders'] = 'Los recordatorios de pago y las notificaciones de retraso se envían diariamente a la hora especificada.';
$lang['CronTasks.crontask.name.apply_payments'] = 'Aplicar pagos a facturas pendientes';
$lang['CronTasks.crontask.description.apply_payments'] = 'Los abonos sueltos se aplican automáticamente a las facturas pendientes en el intervalo seleccionado.';
$lang['CronTasks.crontask.name.process_service_changes'] = 'Cambios en el servicio de procesos';
$lang['CronTasks.crontask.description.process_service_changes'] = 'Los cambios de servicio de pago en cola (por ejemplo, actualizaciones) se procesan en el intervalo seleccionado.';
$lang['CronTasks.crontask.name.process_renewing_services'] = 'Renovaciones de servicios procesales';
$lang['CronTasks.crontask.description.process_renewing_services'] = 'Los servicios de renovación asociados a los módulos se renuevan en el intervalo seleccionado.';
$lang['CronTasks.crontask.name.provision_pending_services'] = 'Provisión Pagada Servicios Pendientes';
$lang['CronTasks.crontask.description.provision_pending_services'] = 'Los servicios pendientes de pago se activan en el intervalo seleccionado.';
$lang['CronTasks.crontask.name.cancel_scheduled_services'] = 'Cancelar servicios programados';
$lang['CronTasks.crontask.description.cancel_scheduled_services'] = 'Los servicios con fechas de cancelación futuras establecidas se eliminan en el intervalo seleccionado.';
$lang['CronTasks.crontask.name.card_expiration_reminders'] = 'Recordatorio de caducidad de la tarjeta 15 de cada mes';
$lang['CronTasks.crontask.description.card_expiration_reminders'] = 'Se enviará un recordatorio el día 15 de cada mes para las tarjetas de crédito que venzan ese mes a la hora indicada.';
$lang['CronTasks.crontask.name.deliver_invoices'] = 'Entregar facturas';
$lang['CronTasks.crontask.description.deliver_invoices'] = 'Las facturas cuya entrega esté programada se enviarán en el intervalo seleccionado.';
$lang['CronTasks.crontask.name.backups_amazons3'] = 'Copias de seguridad de Amazon S3';
$lang['CronTasks.crontask.description.backups_amazons3'] = 'Las copias de seguridad de Amazon S3 se programan en Configuración del sistema > Copia de seguridad > Amazon S3.';
$lang['CronTasks.crontask.name.backups_sftp'] = 'Copias de seguridad SFTP';
$lang['CronTasks.crontask.description.backups_sftp'] = 'Las copias de seguridad SFTP se programan en Configuración del sistema > Copia de seguridad > FTP seguro.';
$lang['CronTasks.crontask.name.suspend_services'] = 'Suspender servicios';
$lang['CronTasks.crontask.description.suspend_services'] = 'Los servicios vencidos se suspenderán diariamente a la hora especificada.';
$lang['CronTasks.crontask.name.exchange_rates'] = 'Actualizaciones de los tipos de cambio';
$lang['CronTasks.crontask.description.exchange_rates'] = 'Los tipos de cambio se actualizarán en el intervalo especificado. No se recomienda ejecutarlo más de dos veces al día por riesgo a ser bloqueado.';
$lang['CronTasks.crontask.name.deliver_reports'] = 'Entregar informes';
$lang['CronTasks.crontask.description.deliver_reports'] = 'Los informes de deudores, generación de facturas, obligaciones fiscales y otros se entregarán diariamente a la hora especificada.';
$lang['CronTasks.crontask.name.cleanup_logs'] = 'Limpieza de registros';
$lang['CronTasks.crontask.description.cleanup_logs'] = 'Los registros antiguos de puerta de enlace, módulo y otros se rotarán diariamente dependiendo de su configuración de retención en el momento especificado.';
$lang['CronTasks.crontask.name.unsuspend_services'] = 'Servicios no suspendidos';
$lang['CronTasks.crontask.description.unsuspend_services'] = 'Los servicios suspendidos que hayan sido pagados serán desbloqueados en el intervalo seleccionado.';
$lang['CronTasks.crontask.name.transition_quotations'] = 'Citas de transición';
$lang['CronTasks.crontask.description.transition_quotations'] = 'Marcar como caducadas las cotizaciones cuya fecha de validez haya vencido';
$lang['CronTasks.crontask.name.license_validation'] = 'Validación de licencias';
$lang['CronTasks.crontask.description.delete_expired_password_reset_tokens'] = 'Elimina del sistema todos los tokens de restablecimiento de contraseña que hayan superado la fecha de caducidad.';
$lang['CronTasks.crontask.name.delete_expired_password_reset_tokens'] = 'Eliminar tokens de restablecimiento de contraseña caducados';
$lang['CronTasks.crontask.description.low_balance_notifications'] = 'Envía un aviso a todos los usuarios cuyos niveles de crédito hayan caído por debajo del umbral configurado.';
$lang['CronTasks.crontask.name.low_balance_notifications'] = 'Notificaciones de saldo bajo';

