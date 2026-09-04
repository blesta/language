<?php
/**
 * Admin System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemUpgrade.index.backup_col_date'] = 'Fecha';
$lang['AdminSystemUpgrade.index.backup_col_file'] = 'Archivo';
$lang['AdminSystemUpgrade.index.backup_col_size'] = 'Talla';
$lang['AdminSystemUpgrade.index.backup_col_type'] = 'Tipo';
$lang['AdminSystemUpgrade.index.backup_database'] = 'Base de datos';
$lang['AdminSystemUpgrade.index.backup_files'] = 'Archivos';
$lang['AdminSystemUpgrade.index.boxtitle_upgrade'] = 'Opciones de actualización';
$lang['AdminSystemUpgrade.index.btn_check'] = 'Buscar actualizaciones';
$lang['AdminSystemUpgrade.index.btn_clear_lock'] = 'Cerradura transparente';
$lang['AdminSystemUpgrade.index.btn_copy_command'] = 'Copia';
$lang['AdminSystemUpgrade.index.btn_dashboard'] = 'Volver al panel de control';
$lang['AdminSystemUpgrade.index.btn_delete'] = 'Borrar';
$lang['AdminSystemUpgrade.index.btn_download'] = 'Descargar';
$lang['AdminSystemUpgrade.index.btn_retry'] = 'Reintentar';
$lang['AdminSystemUpgrade.index.btn_upgrade'] = 'Actualizar ahora';
$lang['AdminSystemUpgrade.index.changelog_link'] = 'Ver el registro de cambios';
$lang['AdminSystemUpgrade.index.clean_stale_files'] = 'Eliminar los archivos antiguos del núcleo tras la actualización';
$lang['AdminSystemUpgrade.index.clean_stale_files_note'] = 'Elimina los archivos de los directorios principales que no están presentes en el manifiesto de la nueva versión. No marque esta opción a menos que esté seguro de que no existen archivos personalizados en los directorios principales.';
$lang['AdminSystemUpgrade.index.command_copied'] = 'Copiado';
$lang['AdminSystemUpgrade.index.confirm_delete_backup'] = '¿Está seguro de que desea eliminar esta copia de seguridad? No se puede deshacer.';
$lang['AdminSystemUpgrade.index.current_version'] = 'Está ejecutando Blesta %1$s';
$lang['AdminSystemUpgrade.index.environment_badge_fail'] = '%1$d ha fallado';
$lang['AdminSystemUpgrade.index.environment_badge_warn'] = 'Aviso %1$d';
$lang['AdminSystemUpgrade.index.environment_fail'] = 'Han fallado algunas comprobaciones. Resuelva los siguientes problemas antes de actualizar.';
$lang['AdminSystemUpgrade.index.environment_pass'] = 'Todas las comprobaciones superadas. Su sistema está listo para la auto-actualización.';
$lang['AdminSystemUpgrade.index.failure_backup_label'] = 'Copias de seguridad disponibles:';
$lang['AdminSystemUpgrade.index.failure_db_version_after'] = 'Actual: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_before'] = 'Antes de la actualización: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_expected'] = 'Se espera después de la actualización: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_label'] = 'Versión de la base de datos:';
$lang['AdminSystemUpgrade.index.failure_db_version_mismatch'] = 'La versión de la base de datos no avanzó hasta el valor esperado. La actualización puede haberse detenido a mitad de una versión, dejando algunos cambios de esquema aplicados.';
$lang['AdminSystemUpgrade.index.failure_explanation'] = 'La actualización no se ha completado correctamente. Su sistema puede estar en un estado inconsistente y algunos cambios en la base de datos de la versión fallida pueden estar ya aplicados. Reejecutar la actualización probablemente fallará de forma diferente. Se recomienda restaurar desde la copia de seguridad de la base de datos antes de volver a intentarlo. Las copias de seguridad se realizaron antes de iniciar la actualización y se enumeran a continuación. Para recuperarse, restaure estas copias de seguridad manualmente o abra un ticket de soporte para obtener ayuda.';
$lang['AdminSystemUpgrade.index.failure_heading'] = '¿Qué hacer a continuación?';
$lang['AdminSystemUpgrade.index.field_upgradesubmit'] = 'Actualizar ajustes';
$lang['AdminSystemUpgrade.index.heading_available'] = 'Actualizaciones disponibles';
$lang['AdminSystemUpgrade.index.heading_backups'] = 'Actualizar copias de seguridad';
$lang['AdminSystemUpgrade.index.heading_current'] = 'Versión actual';
$lang['AdminSystemUpgrade.index.heading_environment'] = 'Medio ambiente';
$lang['AdminSystemUpgrade.index.heading_progress'] = 'Progreso de la actualización';
$lang['AdminSystemUpgrade.index.heading_recovery'] = 'Instrucciones de recuperación';
$lang['AdminSystemUpgrade.index.last_checked'] = 'Última comprobación: %1$s';
$lang['AdminSystemUpgrade.index.launch_failed_instruction'] = 'Ejecute el siguiente comando vía SSH (como el usuario propietario de la instalación de Blesta) para completar la actualización. Deje esta página abierta - el progreso continuará actualizándose aquí mientras se ejecuta el comando.';
$lang['AdminSystemUpgrade.index.launch_failed_title'] = 'No se ha iniciado la actualización en segundo plano';
$lang['AdminSystemUpgrade.index.lock_active'] = 'Actualmente se está llevando a cabo una actualización, iniciada en %1$s.';
$lang['AdminSystemUpgrade.index.lock_stale'] = 'Un proceso de actualización anterior parece haberse detenido inesperadamente.';
$lang['AdminSystemUpgrade.index.never_checked'] = 'Nunca comprobado';
$lang['AdminSystemUpgrade.index.no_backups'] = 'No se han encontrado copias de seguridad de la actualización.';
$lang['AdminSystemUpgrade.index.no_results'] = 'Las opciones de actualización no están disponibles en este momento.';
$lang['AdminSystemUpgrade.index.no_support'] = 'Su suscripción a soporte y actualizaciones no está activa. Solo están disponibles las actualizaciones de parches.';
$lang['AdminSystemUpgrade.index.page_title'] = 'Configuración > Sistema > Opciones de actualización';
$lang['AdminSystemUpgrade.index.recovery_db_path'] = 'Copia de seguridad de la base de datos: %1$s';
$lang['AdminSystemUpgrade.index.recovery_files_path'] = 'Copia de seguridad de archivos: %1$s';
$lang['AdminSystemUpgrade.index.recovery_instructions'] = 'Para restaurar a partir de una copia de seguridad, ejecute los siguientes comandos en su servidor:';
$lang['AdminSystemUpgrade.index.release_date'] = 'Publicado: %1$s';
$lang['AdminSystemUpgrade.index.requires_support'] = 'Requiere suscripción activa a soporte y actualizaciones.';
$lang['AdminSystemUpgrade.index.select_version'] = 'Seleccione una versión para actualizar:';
$lang['AdminSystemUpgrade.index.skip_integrity_check'] = 'Omitir la comprobación de integridad del archivo';
$lang['AdminSystemUpgrade.index.step_backup_db'] = 'Copia de seguridad de la base de datos';
$lang['AdminSystemUpgrade.index.step_backup_files'] = 'Copia de seguridad de archivos';
$lang['AdminSystemUpgrade.index.step_download'] = 'Descargar el comunicado';
$lang['AdminSystemUpgrade.index.step_extract'] = 'Extraer archivos';
$lang['AdminSystemUpgrade.index.step_finalize'] = 'Finalizar';
$lang['AdminSystemUpgrade.index.step_maintenance'] = 'Activar el modo de mantenimiento';
$lang['AdminSystemUpgrade.index.step_migrate'] = 'Ejecutar migraciones de bases de datos';
$lang['AdminSystemUpgrade.index.step_preflight'] = 'Controles prevuelo';
$lang['AdminSystemUpgrade.index.step_replace'] = 'Sustituir archivos';
$lang['AdminSystemUpgrade.index.step_verify'] = 'Verificar la integridad';
$lang['AdminSystemUpgrade.index.up_to_date'] = 'Su instalación está actualizada.';
$lang['AdminSystemUpgrade.index.upgrade_complete'] = '¡Actualización completada con éxito!';
$lang['AdminSystemUpgrade.index.upgrade_failed'] = 'Actualización fallida.';
$lang['AdminSystemUpgrade.index.upgrade_latest'] = 'Actualización completa: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.upgrade_patch'] = 'Actualización de parches: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.upgrade_warning'] = 'Esto activará el modo de mantenimiento, creará copias de seguridad, descargará e instalará la nueva versión y ejecutará migraciones de bases de datos. Este proceso no puede interrumpirse una vez iniciado.';
$lang['AdminSystemUpgrade.upgrade.btn_abort'] = 'Cancelar';
$lang['AdminSystemUpgrade.upgrade.btn_continue'] = 'Continuar con la actualización';
$lang['AdminSystemUpgrade.upgrade.label_missing'] = 'Ficheros perdidos';
$lang['AdminSystemUpgrade.upgrade.label_modified'] = 'Archivos modificados';
$lang['AdminSystemUpgrade.upgrade.modified_files'] = '%1$s se han modificado con respecto a la versión original. Estos cambios se sobrescribirán durante la actualización. ¿Desea continuar?';
$lang['AdminSystemUpgrade.upgrade.modified_files_title'] = 'Archivos principales modificados';
$lang['AdminSystemUpgrade.upgrade.no_checksums'] = 'El manifiesto de archivos de su instalación actual no incluye sumas de comprobación. Se omitirá la verificación de la integridad de los archivos. ¿Desea continuar con la actualización?';
$lang['AdminSystemUpgrade.upgrade.no_manifest'] = 'No se ha encontrado ningún manifiesto de archivos para su instalación actual. Se omitirá la verificación de la integridad de los archivos. ¿Desea continuar con la actualización?';
$lang['AdminSystemUpgrade.upgrade.started'] = 'Se ha iniciado el proceso de actualización. Puede cerrar esta página: la actualización continuará en segundo plano. Vuelva a esta página para comprobar el progreso.';

