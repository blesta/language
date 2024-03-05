<?php
/**
 * Admin System Backup
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemBackup.!success.backup_updated'] = 'La configuración de la copia de seguridad se ha actualizado correctamente.';
$lang['AdminSystemBackup.!success.sftp_test'] = 'La conexión SFTP se ha realizado correctamente.';
$lang['AdminSystemBackup.!success.amazons3_test'] = 'La conexión AmazonS3 se ha realizado correctamente.';
$lang['AdminSystemBackup.!success.backup_uploaded'] = 'La copia de seguridad se ha enviado correctamente a los servicios remotos configurados.';
$lang['AdminSystemBackup.!error.sftp_test'] = 'La conexión SFTP ha fallado. Compruebe la configuración e inténtelo de nuevo.';
$lang['AdminSystemBackup.!error.amazons3_test'] = 'La conexión con AmazonS3 ha fallado. Compruebe la configuración e inténtelo de nuevo. Tenga en cuenta que los detalles de conexión distinguen entre mayúsculas y minúsculas.';
$lang['AdminSystemBackup.!error.backup_frequency'] = 'Frecuencia de copia de seguridad no válida.';
$lang['AdminSystemBackup.!tooltip.ftp_host'] = 'El nombre de dominio completo del servidor de copia de seguridad (por ejemplo, "copia.dominio.com").';
$lang['AdminSystemBackup.!tooltip.ftp_port'] = 'El número de puerto, normalmente 22. Es el mismo número de puerto que se utiliza para SSH.';
$lang['AdminSystemBackup.!tooltip.ftp_username'] = 'El nombre de usuario de la cuenta FTP.';
$lang['AdminSystemBackup.!tooltip.ftp_password'] = 'La contraseña de la cuenta FTP.';
$lang['AdminSystemBackup.!tooltip.ftp_path'] = 'La ruta de destino donde deben almacenarse las copias de seguridad en el servidor remoto (por ejemplo, "/backup/").';
$lang['AdminSystemBackup.!tooltip.ftp_rate'] = 'El intervalo de frecuencia para realizar esta copia de seguridad.';
$lang['AdminSystemBackup.!tooltip.amazons3_region'] = 'La región de Amazon S3 en la que almacenar las copias de seguridad.';
$lang['AdminSystemBackup.!tooltip.amazons3_access_key'] = 'La clave de acceso a la cuenta de Amazon S3.';
$lang['AdminSystemBackup.!tooltip.amazons3_secret_key'] = 'La clave secreta de la cuenta de Amazon S3.';
$lang['AdminSystemBackup.!tooltip.amazons3_bucket'] = 'El nombre en mayúsculas y minúsculas del bucket de Amazon S3 en el que se almacenarán las copias de seguridad.';
$lang['AdminSystemBackup.!tooltip.amazons3_rate'] = 'El intervalo de frecuencia para realizar esta copia de seguridad.';
$lang['AdminSystemBackup.ftp.page_title'] = 'Configuración > Sistema > Copia de seguridad > FTP seguro';
$lang['AdminSystemBackup.ftp.boxtitle_backup'] = 'FTP seguro';
$lang['AdminSystemBackup.ftp.field.test'] = 'Prueba estos ajustes';
$lang['AdminSystemBackup.ftp.field.ftp_host'] = 'Nombre de host';
$lang['AdminSystemBackup.ftp.field.ftp_port'] = 'Puerto';
$lang['AdminSystemBackup.ftp.field.ftp_username'] = 'Nombre de usuario';
$lang['AdminSystemBackup.ftp.field.ftp_password'] = 'Contraseña';
$lang['AdminSystemBackup.ftp.field.ftp_path'] = 'Ruta';
$lang['AdminSystemBackup.ftp.field.ftp_rate'] = 'Copia de seguridad Cada';
$lang['AdminSystemBackup.ftp.field.backupsubmit'] = 'Actualizar ajustes';
$lang['AdminSystemBackup.amazon.page_title'] = 'Configuración > Sistema > Copia de seguridad > Amazon S3';
$lang['AdminSystemBackup.amazon.boxtitle_backup'] = 'Amazon S3';
$lang['AdminSystemBackup.amazon.field.test'] = 'Prueba estos ajustes';
$lang['AdminSystemBackup.amazon.field.amazons3_region'] = 'Región';
$lang['AdminSystemBackup.amazon.field.amazons3_accesskey'] = 'Clave de acceso';
$lang['AdminSystemBackup.amazon.field.amazons3_secretkey'] = 'Clave secreta';
$lang['AdminSystemBackup.amazon.field.amazons3_bucket'] = 'Cubo';
$lang['AdminSystemBackup.amazon.field.amazons3_rate'] = 'Copia de seguridad Cada';
$lang['AdminSystemBackup.amazon.field.backupsubmit'] = 'Actualizar ajustes';
$lang['AdminSystemBackup.index.page_title'] = 'Configuración > Sistema > Copia de seguridad > A petición';
$lang['AdminSystemBackup.index.boxtitle_index'] = 'A la carta';
$lang['AdminSystemBackup.index.field_uploadbackup'] = 'Forzar copia de seguridad externa';
$lang['AdminSystemBackup.index.field_downloadbackup'] = 'Descargar copia de seguridad';
$lang['AdminSystemBackup.index.text_note'] = 'Aquí puedes descargar una copia de seguridad de tu base de datos de Blesta a tu ordenador o subir automáticamente una copia de seguridad a tu servidor SFTP y/o Amazon S3 configurado.';

