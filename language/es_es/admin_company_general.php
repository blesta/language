<?php
/**
 * Admin Company General
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyGeneral.!error.captcha_gd'] = 'La extensión GD es necesaria para generar el captcha interno.';
$lang['AdminCompanyGeneral.!success.localization_updated'] = 'Los ajustes de localización se han actualizado correctamente.';
$lang['AdminCompanyGeneral.!success.encryption_updated'] = 'La configuración de cifrado se ha actualizado correctamente.';
$lang['AdminCompanyGeneral.!success.contact_type_added'] = 'El tipo de contacto "%1$s" se ha añadido correctamente.';
$lang['AdminCompanyGeneral.!success.contact_type_updated'] = 'El tipo de contacto "%1$s" se ha actualizado correctamente.';
$lang['AdminCompanyGeneral.!success.contact_type_deleted'] = 'El tipo de contacto "%1$s" se ha eliminado correctamente.';
$lang['AdminCompanyGeneral.!success.language_installed'] = 'El idioma %1$s se ha instalado correctamente.';
$lang['AdminCompanyGeneral.!success.language_uninstalled'] = 'El idioma %1$s ha sido desinstalado correctamente.';
$lang['AdminCompanyGeneral.!success.marketing_updated'] = 'La configuración de marketing se ha actualizado correctamente.';
$lang['AdminCompanyGeneral.!success.smartsearch_updated'] = 'La configuración de la búsqueda inteligente se ha actualizado correctamente.';
$lang['AdminCompanyGeneral.!success.humanverification_updated'] = 'La configuración de verificación humana se ha actualizado correctamente.';
$lang['AdminCompanyGeneral.!tooltip.language'] = 'El idioma por defecto utilizado por el sistema. Para añadir más idiomas, consulte Configuración de la internacionalización.';
$lang['AdminCompanyGeneral.!tooltip.client_set_lang'] = 'Si la casilla está marcada, los clientes pueden elegir el idioma que desean utilizar entre los disponibles en el sistema.';
$lang['AdminCompanyGeneral.!tooltip.calendar_begins'] = 'Establezca el día de inicio semanal del calendario.';
$lang['AdminCompanyGeneral.!tooltip.timezone'] = 'Es la zona horaria del sistema en la que se formatearán las conversiones de fecha y hora.';
$lang['AdminCompanyGeneral.!tooltip.date_format'] = 'Establece el formato de la fecha. Este formato se utiliza cuando se muestra una fecha. Consulte el manual de php para conocer las opciones disponibles.';
$lang['AdminCompanyGeneral.!tooltip.datetime_format'] = 'Establece el formato de fecha y hora. Este formato se utiliza cuando se muestra una fecha y hora. Consulte las opciones disponibles en el manual de php.';
$lang['AdminCompanyGeneral.!tooltip.country'] = 'Este es el país seleccionado por defecto en los formularios pertinentes.';
$lang['AdminCompanyGeneral.!tooltip.captcha'] = 'Este es el captcha utilizado por defecto, el captcha interno requiere la extensión GD.';
$lang['AdminCompanyGeneral.localization.page_title'] = 'Configuración > Empresa > General > Localización';
$lang['AdminCompanyGeneral.localization.boxtitle_localization'] = 'Localización';
$lang['AdminCompanyGeneral.localization.tz_format'] = '(UTC %1$s) %2$s';
$lang['AdminCompanyGeneral.localization.field.language'] = 'Idioma por defecto';
$lang['AdminCompanyGeneral.localization.field.setlanguage'] = 'El cliente puede configurar el idioma';
$lang['AdminCompanyGeneral.localization.field.calendar'] = 'Día de inicio del calendario';
$lang['AdminCompanyGeneral.localization.field.sunday'] = 'Domingo';
$lang['AdminCompanyGeneral.localization.field.monday'] = 'Lunes';
$lang['AdminCompanyGeneral.localization.field.timezone'] = 'Zona horaria';
$lang['AdminCompanyGeneral.localization.field.dateformat'] = 'Formato de fecha';
$lang['AdminCompanyGeneral.localization.field.datetimeformat'] = 'Formato de fecha y hora';
$lang['AdminCompanyGeneral.localization.field.country'] = 'País por defecto';
$lang['AdminCompanyGeneral.localization.field.localizationsubmit'] = 'Actualizar ajustes';
$lang['AdminCompanyGeneral.!notice.international_languages'] = 'Existe un proyecto de traducción colectiva en translate.blesta.com. Puede contribuir y descargar traducciones de idiomas desde allí. Para instalarlo, descomprima el contenido del archivo en el directorio de instalación de Blesta. A continuación, actualice esta página y haga clic en el enlace Instalar.';
$lang['AdminCompanyGeneral.international.page_title'] = 'Configuración > Empresa > General > Internacionalización';
$lang['AdminCompanyGeneral.international.boxtitle_international'] = 'Internacionalización';
$lang['AdminCompanyGeneral.international.text_language'] = 'Idioma';
$lang['AdminCompanyGeneral.international.text_iso'] = 'ISO 639-1, 3166-1';
$lang['AdminCompanyGeneral.international.text_options'] = 'Opciones';
$lang['AdminCompanyGeneral.international.option_install'] = 'Instale';
$lang['AdminCompanyGeneral.international.option_uninstall'] = 'Desinstalar';
$lang['AdminCompanyGeneral.international.confirm_install'] = '¿Está seguro de que desea instalar el idioma %1$s?';
$lang['AdminCompanyGeneral.international.confirm_uninstall'] = '¿Está seguro de que desea desinstalar el idioma %1$s? Este idioma se desinstalará y todas las plantillas de correo electrónico en este idioma se eliminarán permanentemente.';
$lang['AdminCompanyGeneral.encryption.page_title'] = 'Configuración > Empresa > General > Cifrado';
$lang['AdminCompanyGeneral.!notice.passphrase'] = 'ADVERTENCIA: La configuración de una frase de contraseña impedirá que las cuentas de pago almacenadas localmente se procesen automáticamente. Deberá procesar los pagos manualmente introduciendo su contraseña. Para obtener más información sobre esta función, consulte el manual.';
$lang['AdminCompanyGeneral.!notice.passphrase_set'] = 'ADVERTENCIA: Se ha establecido una frase de contraseña. Deberá realizar pagos por lotes manualmente con su frase de contraseña. Si cambia la frase de contraseña por una en blanco, se eliminará este requisito.';
$lang['AdminCompanyGeneral.encryption.boxtitle_encryption'] = 'Cifrado';
$lang['AdminCompanyGeneral.encryption.field_current_passphrase'] = 'Frase de contraseña de la clave privada actual';
$lang['AdminCompanyGeneral.encryption.field_private_key_passphrase'] = 'Nueva frase de contraseña de clave privada';
$lang['AdminCompanyGeneral.encryption.field_confirm_new_passphrase'] = 'Confirmar frase de contraseña de clave privada';
$lang['AdminCompanyGeneral.encryption.field_agree'] = 'He guardado esta frase de contraseña en un lugar seguro';
$lang['AdminCompanyGeneral.encryption.field_encryptionsubmit'] = 'Actualizar frase de contraseña';
$lang['AdminCompanyGeneral.contacttypes.page_title'] = 'Configuración > Empresa > General > Tipos de contacto';
$lang['AdminCompanyGeneral.contacttypes.categorylink_addtype'] = 'Crear tipo de contacto';
$lang['AdminCompanyGeneral.contacttypes.boxtitle_types'] = 'Tipos de contacto';
$lang['AdminCompanyGeneral.contacttypes.heading_name'] = 'Nombre';
$lang['AdminCompanyGeneral.contacttypes.heading_define'] = 'Usos Lenguaje Definición';
$lang['AdminCompanyGeneral.contacttypes.heading_options'] = 'Opciones';
$lang['AdminCompanyGeneral.contacttypes.text_yes'] = 'Sí';
$lang['AdminCompanyGeneral.contacttypes.text_no'] = 'No';
$lang['AdminCompanyGeneral.contacttypes.option_edit'] = 'Editar';
$lang['AdminCompanyGeneral.contacttypes.option_delete'] = 'Borrar';
$lang['AdminCompanyGeneral.contacttypes.modal_delete'] = 'La eliminación de este tipo de contacto hará que todos los contactos asignados a este tipo se coloquen en el tipo por defecto "Facturación". ¿Está seguro de que desea eliminar este tipo de contacto?';
$lang['AdminCompanyGeneral.contacttypes.no_results'] = 'No hay tipos de contacto.';
$lang['AdminCompanyGeneral.!contacttypes.is_lang'] = 'Marque esta casilla sólo si ha añadido una definición de idioma para este tipo de contacto en el archivo de idioma personalizado.';
$lang['AdminCompanyGeneral.addcontacttype.page_title'] = 'Configuración > Empresa > General > Crear tipo de contacto';
$lang['AdminCompanyGeneral.addcontacttype.boxtitle_addcontacttype'] = 'Crear tipo de contacto';
$lang['AdminCompanyGeneral.addcontacttype.field_name'] = 'Nombre';
$lang['AdminCompanyGeneral.addcontacttype.field_is_lang'] = 'Utilizar la definición lingüística';
$lang['AdminCompanyGeneral.addcontacttype.field_contacttypesubmit'] = 'Crear tipo de contacto';
$lang['AdminCompanyGeneral.editcontacttype.page_title'] = 'Configuración > Empresa > General > Editar tipo de contacto';
$lang['AdminCompanyGeneral.editcontacttype.boxtitle_editcontacttype'] = 'Editar tipo de contacto';
$lang['AdminCompanyGeneral.editcontacttype.field_name'] = 'Nombre';
$lang['AdminCompanyGeneral.editcontacttype.field_is_lang'] = 'Utilizar la definición lingüística';
$lang['AdminCompanyGeneral.editcontacttype.field_contacttypesubmit'] = 'Editar tipo de contacto';
$lang['AdminCompanyGeneral.marketing.boxtitle_marketing'] = 'Marketing';
$lang['AdminCompanyGeneral.marketing.field_show_receive_email_marketing'] = 'Ofrecer a los clientes la posibilidad de darse de alta o de baja en el marketing por correo electrónico.';
$lang['AdminCompanyGeneral.marketing.field_submit'] = 'Actualizar ajustes';
$lang['AdminCompanyGeneral.smartsearch.boxtitle_smartsearch'] = 'Búsqueda inteligente';
$lang['AdminCompanyGeneral.smartsearch.field_client_search'] = 'Búsqueda de clientes';
$lang['AdminCompanyGeneral.smartsearch.field_invoice_search'] = 'Búsqueda de facturas';
$lang['AdminCompanyGeneral.smartsearch.field_quotation_search'] = 'Búsqueda de ofertas';
$lang['AdminCompanyGeneral.smartsearch.field_transaction_search'] = 'Búsqueda de transacciones';
$lang['AdminCompanyGeneral.smartsearch.field_service_search'] = 'Búsqueda de servicios';
$lang['AdminCompanyGeneral.smartsearch.field_package_search'] = 'Búsqueda de paquetes';
$lang['AdminCompanyGeneral.smartsearch.field_submit'] = 'Actualizar ajustes';
$lang['AdminCompanyGeneral.humanverification.boxtitle_humanverification'] = 'Verificación humana';
$lang['AdminCompanyGeneral.humanverification.heading_captcha_provider'] = 'Proveedor de Captcha';
$lang['AdminCompanyGeneral.humanverification.heading_enabled_forms'] = 'Formularios activados';
$lang['AdminCompanyGeneral.humanverification.field_captcha'] = 'Captcha';
$lang['AdminCompanyGeneral.humanverification.field_captcha_none'] = 'Ninguno';
$lang['AdminCompanyGeneral.humanverification.field_captcha_recaptcha'] = 'reCaptcha';
$lang['AdminCompanyGeneral.humanverification.field_captcha_internalcaptcha'] = 'Captcha interno';
$lang['AdminCompanyGeneral.humanverification.field_recaptcha_pub_key'] = 'Clave del sitio reCaptcha';
$lang['AdminCompanyGeneral.humanverification.field_recaptcha_shared_key'] = 'Clave compartida reCaptcha';
$lang['AdminCompanyGeneral.humanverification.field_captcha_enabled_forms_admin_login'] = 'Inicio de sesión de administrador';
$lang['AdminCompanyGeneral.humanverification.field_captcha_enabled_forms_client_login'] = 'Acceso de clientes';
$lang['AdminCompanyGeneral.humanverification.field_captcha_enabled_forms_admin_login_reset'] = 'Admin Restablecer mi contraseña';
$lang['AdminCompanyGeneral.humanverification.field_captcha_enabled_forms_client_login_reset'] = 'Cliente Restablecer mi contraseña';
$lang['AdminCompanyGeneral.humanverification.field_captcha_enabled_forms_client_login_forgot'] = 'Cliente Olvidé mi nombre de usuario';
$lang['AdminCompanyGeneral.humanverification.field_submit'] = 'Actualizar ajustes';

