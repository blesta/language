<?php
/**
 * System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SystemUpgrade.!error.backup_db_failed'] = 'Ha fallado la copia de seguridad de la base de datos. La actualización no puede continuar sin una copia de seguridad fiable.';
$lang['SystemUpgrade.!error.backup_files_failed'] = 'Ha fallado la copia de seguridad del archivo. La actualización no puede continuar sin una copia de seguridad fiable.';
$lang['SystemUpgrade.!error.download_failed'] = 'No se ha podido descargar el archivo de lanzamiento.';
$lang['SystemUpgrade.!error.environment_fail'] = 'Ha fallado una o más comprobaciones del entorno. Resuelva los problemas antes de actualizar.';
$lang['SystemUpgrade.!error.extraction_failed'] = 'Error al extraer el archivo de lanzamiento.';
$lang['SystemUpgrade.!error.hash_mismatch'] = 'Error en la comprobación de integridad del archivo descargado. El archivo puede estar dañado.';
$lang['SystemUpgrade.!error.launch_not_detected'] = 'El proceso de actualización en segundo plano no se inició. Esto puede ocurrir en entornos de alojamiento enjaulados (CloudLinux/CageFS, algunas configuraciones PHP-FPM) donde no se permite al servidor web separar procesos hijo de larga ejecución. La actualización puede completarse ejecutando el siguiente comando a través de SSH.';
$lang['SystemUpgrade.!error.license_invalid'] = 'Su suscripción de soporte y actualizaciones debe estar activa para las actualizaciones de versiones mayores o menores.';
$lang['SystemUpgrade.!error.lock_stale'] = 'Parece que un proceso de actualización anterior se ha detenido inesperadamente. Puede borrar el bloqueo para volver a intentarlo.';
$lang['SystemUpgrade.!error.php_version'] = 'La versión de destino requiere PHP %1$s o más reciente. Está ejecutando PHP %2$s.';
$lang['SystemUpgrade.!error.signature_invalid'] = 'Ha fallado la verificación de la firma de liberación. El archivo puede haber sido manipulado.';
$lang['SystemUpgrade.!error.signature_missing'] = 'La versión no incluye una firma criptográfica. No se puede verificar la autenticidad.';
$lang['SystemUpgrade.!error.upgrade_locked'] = 'Ya se está llevando a cabo una actualización (iniciada por el empleado %1$s en %2$s).';
$lang['SystemUpgrade.!error.upgrader_crashed'] = 'El proceso de actualización parece haberse detenido inesperadamente. Compruebe las rutas de copia de seguridad a continuación para la recuperación.';
$lang['SystemUpgrade.!error.upgrader_failed'] = 'No se ha podido preparar o iniciar el proceso de actualización.';
$lang['SystemUpgrade.environment.config_fail'] = 'Configuración: blesta.php no es escribible.';
$lang['SystemUpgrade.environment.config_pass'] = 'Configuración: blesta.php es escribible.';
$lang['SystemUpgrade.environment.disk_pass'] = 'Espacio en disco: %1$s disponible.';
$lang['SystemUpgrade.environment.disk_warn'] = 'Espacio en disco: Sólo %1$s disponible, estimado %2$s necesario.';
$lang['SystemUpgrade.environment.exec_fail'] = 'Acceso al shell: la función exec() está desactivada o no está disponible.';
$lang['SystemUpgrade.environment.exec_pass'] = 'Acceso Shell: la función exec() está disponible.';
$lang['SystemUpgrade.environment.mysqldump_fail'] = 'Copia de seguridad de la base de datos: el comando mysqldump no está disponible. Por favor, instale las herramientas mysql-client.';
$lang['SystemUpgrade.environment.mysqldump_pass'] = 'Copia de seguridad de la base de datos: el comando mysqldump está disponible.';
$lang['SystemUpgrade.environment.os_fail'] = 'La autoactualización sólo es posible en entornos Linux.';
$lang['SystemUpgrade.environment.os_pass'] = 'Sistema operativo: Linux detectado.';
$lang['SystemUpgrade.environment.ownership_fail'] = 'Propiedad de archivos: %1$s los directorios de claves no son propiedad del usuario del servidor web.';
$lang['SystemUpgrade.environment.ownership_pass'] = 'Propiedad de los archivos: Todos los directorios clave son propiedad del usuario del servidor web.';
$lang['SystemUpgrade.environment.rsync_fail'] = 'Sincronización de archivos: el comando rsync no está disponible. Por favor, instale rsync.';
$lang['SystemUpgrade.environment.rsync_pass'] = 'Sincronización de archivos: el comando rsync está disponible.';
$lang['SystemUpgrade.environment.setsid_pass'] = 'Desvinculación del proceso: el comando setsid está disponible.';
$lang['SystemUpgrade.environment.setsid_warn'] = 'Separación de procesos: el comando setsid no está disponible. La actualización puede requerir un comando manual a través de SSH para completarse en entornos de alojamiento enjaulados.';
$lang['SystemUpgrade.environment.tar_fail'] = 'Copia de seguridad de archivos: el comando tar no está disponible. Por favor, instale tar.';
$lang['SystemUpgrade.environment.tar_pass'] = 'Copia de seguridad de archivos: el comando tar está disponible.';
$lang['SystemUpgrade.environment.unzip_fail'] = 'Extracción de archivos: el comando unzip no está disponible. Por favor, instale unzip.';
$lang['SystemUpgrade.environment.unzip_pass'] = 'Extracción de archivos: el comando unzip está disponible.';
$lang['SystemUpgrade.environment.writable_fail'] = 'Sistema de archivos: El servidor web no puede escribir en el directorio de instalación.';
$lang['SystemUpgrade.environment.writable_pass'] = 'Sistema de archivos: El directorio de instalación tiene permisos de escritura.';
$lang['SystemUpgrade.maintenance_reason'] = 'El sistema se está actualizando actualmente. Vuelva a comprobarlo en breve.';

