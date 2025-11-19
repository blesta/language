<?php
/**
 * Admin System General
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemGeneral.!success.basic_updated'] = 'La configuración básica se ha actualizado correctamente.';
$lang['AdminSystemGeneral.!success.geoip_updated'] = 'La configuración GeoIP se ha actualizado correctamente.';
$lang['AdminSystemGeneral.!success.maintenance_updated'] = 'Los ajustes de mantenimiento se han actualizado correctamente.';
$lang['AdminSystemGeneral.!success.license_updated'] = 'Su clave de licencia se ha actualizado correctamente.';
$lang['AdminSystemGeneral.!success.addtype_created'] = 'El tipo de pago "%1$s" se ha creado correctamente.';
$lang['AdminSystemGeneral.!success.edittype_updated'] = 'El tipo de pago "%1$s" se ha actualizado correctamente.';
$lang['AdminSystemGeneral.!success.deletetype_deleted'] = 'El tipo de pago "%1$s" se ha eliminado correctamente.';
$lang['AdminSystemGeneral.!error.geoip_mbstring_required'] = 'La extensión mbstring es necesaria para esta función.';
$lang['AdminSystemGeneral.!tooltip.license_key'] = 'Esta es su clave de licencia de Blesta. Si recibe una nueva clave de licencia, introdúzcala aquí.';
$lang['AdminSystemGeneral.!tooltip.root_web_dir'] = 'Este valor representa la ruta completa del servidor al directorio raíz de documentos del servidor web (por ejemplo, /home/user/public_html/). No es necesariamente la ruta al directorio en el que está instalado Blesta.';
$lang['AdminSystemGeneral.!tooltip.temp_dir'] = 'Este valor representa la ruta completa del servidor donde Blesta debe escribir los archivos temporales. El usuario web y el usuario cron del servidor deben poder escribir en este directorio.';
$lang['AdminSystemGeneral.!tooltip.uploads_dir'] = 'Este valor representa la ruta completa del servidor donde Blesta debe escribir los archivos subidos. El usuario web y el usuario cron del servidor deben poder escribir en este directorio.';
$lang['AdminSystemGeneral.!tooltip.log_dir'] = 'Este valor representa la ruta completa del servidor donde Blesta debe escribir los archivos de registro. El usuario web y el usuario cron del servidor deben poder escribir en este directorio.';
$lang['AdminSystemGeneral.!tooltip.log_days'] = 'La Política de Rotación establece el tiempo de retención de la mayoría de los datos de registro de la empresa. El archivo de configuración del sistema puede establecer ajustes adicionales de retención de registros.';
$lang['AdminSystemGeneral.!tooltip.behind_proxy'] = 'Cuando está marcada, Blesta asumirá que está detrás de un proxy y determinará las direcciones IP a partir de una cabecera x-forwarded-for proporcionada por el proxy. Sólo debería marcar esta opción si la cabecera x-forwarded-for es de confianza.';
$lang['AdminSystemGeneral.!tooltip.maintenance_mode'] = 'Cuando está en modo de mantenimiento, sólo los usuarios del personal pueden utilizar el sistema. Todos los demás usuarios serán dirigidos a la página de inicio de sesión y se les mostrará el Motivo del mantenimiento.';
$lang['AdminSystemGeneral.!tooltip.maintenance_reason'] = 'Este motivo de mantenimiento se mostrará a los usuarios no pertenecientes al personal que accedan al sistema cuando el modo de mantenimiento esté activado.';
$lang['AdminSystemGeneral.basic.page_title'] = 'Configuración > Sistema > General > Configuración básica';
$lang['AdminSystemGeneral.basic.boxtitle_basic'] = 'Configuración básica';
$lang['AdminSystemGeneral.basic.field.root_web_dir'] = 'Directorio web raíz';
$lang['AdminSystemGeneral.basic.field.temp_dir'] = 'Directorio temporal';
$lang['AdminSystemGeneral.basic.field.uploads_dir'] = 'Directorio de cargas';
$lang['AdminSystemGeneral.basic.field.log_dir'] = 'Directorio de registros';
$lang['AdminSystemGeneral.basic.field.log_days'] = 'Política de rotación';
$lang['AdminSystemGeneral.basic.field.behind_proxy'] = 'Mi instalación está detrás de un proxy o balanceador de carga';
$lang['AdminSystemGeneral.basic.field.basicsubmit'] = 'Actualizar ajustes';
$lang['AdminSystemGeneral.basic.text_docroot'] = 'Esperando "%1$s"';
$lang['AdminSystemGeneral.basic.text_writable'] = 'Escribible';
$lang['AdminSystemGeneral.basic.text_unwritable'] = 'No escribible';
$lang['AdminSystemGeneral.basic.text_no_log'] = 'Nunca gire Log';
$lang['AdminSystemGeneral.basic.text_day'] = 'Día';
$lang['AdminSystemGeneral.basic.text_days'] = 'Días';
$lang['AdminSystemGeneral.geoip.page_title'] = 'Configuración > Sistema > General > Configuración GeoIP';
$lang['AdminSystemGeneral.geoip.boxtitle_geoip'] = 'GeoIP';
$lang['AdminSystemGeneral.geoip.text_setup'] = 'GeoIP puede habilitarse aquí, proporcionando funcionalidad de servicios de localización GeoIP a Blesta. Habilitarlo permitirá que ciertas funcionalidades aprovechen los servicios de localización.';
$lang['AdminSystemGeneral.geoip.text_geolite'] = 'GeoIP requiere la base de datos binaria GeoLite City, que puede descargarse desde su cuenta en <a target="_blank" href="%1$s">%1$s</a>. El archivo debe descomprimirse y subirse a:';
$lang['AdminSystemGeneral.geoip.text_geolite_step_1'] = 'Regístrese para obtener una cuenta MaxMind';
$lang['AdminSystemGeneral.geoip.text_geolite_step_2'] = 'Utiliza el correo electrónico de bienvenida para establecer tu contraseña';
$lang['AdminSystemGeneral.geoip.text_geolite_step_3'] = 'Acceda a su cuenta';
$lang['AdminSystemGeneral.geoip.text_geolite_step_4'] = 'En "GeoIP2 / GeoLite2 > Descargar archivos" descarga el archivo binario GeoLite2-City';
$lang['AdminSystemGeneral.geoip.text_geolite_step_5'] = 'Sube ese archivo a tu instalación de Blesta en la ruta indicada a continuación';
$lang['AdminSystemGeneral.geoip.text_database_exists'] = '%1$s existe.';
$lang['AdminSystemGeneral.geoip.text_database_not_exists'] = '%1$s no existe.';
$lang['AdminSystemGeneral.geoip.field_geoip_enabled'] = 'Activar GeoIP';
$lang['AdminSystemGeneral.geoip.field_geoipsubmit'] = 'Actualizar ajustes';
$lang['AdminSystemGeneral.maintenance.page_title'] = 'Configuración > Sistema > General > Mantenimiento';
$lang['AdminSystemGeneral.maintenance.boxtitle_maintenance'] = 'Mantenimiento';
$lang['AdminSystemGeneral.maintenance.field.maintenance_mode'] = 'Activar el modo de mantenimiento';
$lang['AdminSystemGeneral.maintenance.field.maintenance_reason'] = 'Motivo del mantenimiento';
$lang['AdminSystemGeneral.maintenance.field.maintenancesubmit'] = 'Actualizar ajustes';
$lang['AdminSystemGeneral.license.page_title'] = 'Configuración > Sistema > General > Clave de licencia';
$lang['AdminSystemGeneral.license.boxtitle_license'] = 'Clave de licencia';
$lang['AdminSystemGeneral.license.field.license_key'] = 'Clave de licencia';
$lang['AdminSystemGeneral.license.field.licensesubmit'] = 'Actualizar ajustes';
$lang['AdminSystemGeneral.paymenttypes.page_title'] = 'Configuración > Sistema > General > Tipos de pago';
$lang['AdminSystemGeneral.paymenttypes.categorylink_addtype'] = 'Crear tipo de pago';
$lang['AdminSystemGeneral.paymenttypes.boxtitle_types'] = 'Tipos de pago';
$lang['AdminSystemGeneral.paymenttypes.heading_name'] = 'Nombre';
$lang['AdminSystemGeneral.paymenttypes.heading_type'] = 'Tipo';
$lang['AdminSystemGeneral.paymenttypes.heading_is_lang'] = 'Usos Lenguaje Definición';
$lang['AdminSystemGeneral.paymenttypes.heading_options'] = 'Opciones';
$lang['AdminSystemGeneral.paymenttypes.option_edit'] = 'Editar';
$lang['AdminSystemGeneral.paymenttypes.option_delete'] = 'Borrar';
$lang['AdminSystemGeneral.paymenttypes.modal_delete'] = 'Al eliminar este tipo de pago, todas las transacciones que utilicen este tipo de pago se establecerán como "otro". ¿Está seguro de que desea eliminar este tipo de pago?';
$lang['AdminSystemGeneral.paymenttypes.text_yes'] = 'Sí';
$lang['AdminSystemGeneral.paymenttypes.text_no'] = 'No';
$lang['AdminSystemGeneral.paymenttypes.no_results'] = 'No existen tipos de pago.';
$lang['AdminSystemGeneral.!paymenttypes.is_lang'] = 'Marque esta casilla sólo si ha añadido una definición de idioma para este tipo de pago en el archivo de idioma personalizado.';
$lang['AdminSystemGeneral.!paymenttypes.type'] = 'Cuando se establece en débito, las transacciones que utilizan este tipo de pago se consideran basadas en ingresos, mientras que el crédito es no basado en ingresos.';
$lang['AdminSystemGeneral.addtype.page_title'] = 'Configuración > Sistema > General > Crear tipo de pago';
$lang['AdminSystemGeneral.addtype.boxtitle_addtype'] = 'Crear tipo de pago';
$lang['AdminSystemGeneral.addtype.field_name'] = 'Nombre';
$lang['AdminSystemGeneral.addtype.field_type'] = 'Tipo';
$lang['AdminSystemGeneral.addtype.field_is_lang'] = 'Utilizar la definición lingüística';
$lang['AdminSystemGeneral.addtype.field_typesubmit'] = 'Crear tipo de pago';
$lang['AdminSystemGeneral.edittype.page_title'] = 'Configuración > Sistema > General > Editar tipo de pago';
$lang['AdminSystemGeneral.edittype.boxtitle_edittype'] = 'Editar tipo de pago';
$lang['AdminSystemGeneral.edittype.field_name'] = 'Nombre';
$lang['AdminSystemGeneral.edittype.field_type'] = 'Tipo';
$lang['AdminSystemGeneral.edittype.field_is_lang'] = 'Utilizar la definición lingüística';
$lang['AdminSystemGeneral.edittype.field_typesubmit'] = 'Editar tipo de pago';
$lang['AdminSystemGeneral.!error.upload_dir'] = 'El directorio de carga debe existir y estar fuera del directorio web raíz.';
$lang['AdminSystemGeneral.!notice.text_open_basedir_description'] = 'PHP open_basedir está activado. El acceso a los archivos está restringido a: %1$s. No se puede acceder a directorios fuera de estas rutas.';

