<?php
/**
 * Client Main
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientMain.!success.client_updated'] = 'La información de su cuenta se ha actualizado correctamente.';
$lang['ClientMain.!success.invoice_method_updated'] = 'Su método de facturación se ha actualizado correctamente. Todas las facturas futuras se le enviarán a través de %1$s.';
$lang['ClientMain.!info.invoice_due_title'] = '¡Bienvenido, %1$s!';
$lang['ClientMain.!info.invoice_due_button'] = 'Realizar el pago';
$lang['ClientMain.!info.invoice_past_due_button'] = 'Pagos atrasados';
$lang['ClientMain.!info.invoice_due_text'] = 'Su cuenta tiene un saldo pendiente de %1$s. Le rogamos que efectúe el pago lo antes posible.';
$lang['ClientMain.!info.invoice_due_past_due_text'] = 'Su cuenta tiene un saldo pendiente de %1$s, de los cuales %2$s están vencidos. Le rogamos que efectúe el pago lo antes posible.';
$lang['ClientMain.!info.invoice_due_other_currencies'] = 'También tiene un saldo pendiente en otras divisas.';
$lang['ClientMain.!info.service_in_review'] = 'Los siguientes servicios están pendientes de revisión por el personal. Una vez aprobados, se activarán:';
$lang['ClientMain.!info.service_name'] = '%1$s - %2$s';
$lang['ClientMain.!info.additional_service'] = '...y 1 servicio adicional.';
$lang['ClientMain.!info.additional_services'] = '...y %1$s servicios adicionales.';
$lang['ClientMain.!info.email_pending_verification'] = 'Su dirección de correo electrónico no ha sido verificada. Se ha enviado un correo electrónico de verificación a %1$s.';
$lang['ClientMain.!info.email_pending_verification_button'] = 'Reenviar correo de verificación';
$lang['ClientMain.!info.no_contacts'] = 'No hay contactos adicionales.';
$lang['ClientMain.!info.no_managed_accounts'] = 'No hay cuentas que puedas gestionar.';
$lang['ClientMain.!tooltip.invoice_method_email'] = 'Las facturas se enviarán por correo electrónico a la dirección que tenemos registrada.';
$lang['ClientMain.!tooltip.invoice_method_paper'] = 'Imprimiremos y enviaremos las facturas a la dirección que tenemos registrada.';
$lang['ClientMain.!tooltip.invoice_method_interfax'] = 'Le enviaremos automáticamente las facturas por fax al número de fax que tenemos registrado. Si selecciona esta opción, asegúrese de que disponemos de un número de fax válido.';
$lang['ClientMain.!tooltip.invoice_method_postalmethods'] = 'Imprimiremos y enviaremos automáticamente las facturas a la dirección que tenemos registrada.';
$lang['ClientMain.index.page_title'] = 'Cliente #%1$s';
$lang['ClientMain.myinfo.page_title'] = 'Cliente #%1$s';
$lang['ClientMain.myinfo.client_id'] = 'Cliente #%1$s';
$lang['ClientMain.myinfo.setting_invoices'] = 'Actualmente está recibiendo facturas por %1$s.';
$lang['ClientMain.myinfo.setting_autodebit_disabled'] = 'Su cuenta no está configurada para el pago automático.';
$lang['ClientMain.myinfo.setting_autodebit_enabled'] = 'Su cuenta está configurada para el pago automático.';
$lang['ClientMain.myinfo.setting_autodebit_cc_zero_days'] = 'Cargaremos sus %1$s terminados en x%2$s el día de vencimiento del pago.';
$lang['ClientMain.myinfo.setting_autodebit_ach_zero_days'] = 'Cargaremos su %1$s Cuenta terminada en x%2$s el día de vencimiento del pago.';
$lang['ClientMain.myinfo.setting_autodebit_cc_one_day'] = 'Cargaremos sus %1$s terminados en x%2$s el día anterior al vencimiento del pago.';
$lang['ClientMain.myinfo.setting_autodebit_ach_one_day'] = 'Cargaremos su %1$s Cuenta terminada en x%2$s el día anterior al vencimiento del pago.';
$lang['ClientMain.myinfo.setting_autodebit_cc_days'] = 'Cargaremos su %1$s final en x%2$s %3$s días antes del vencimiento del pago.';
$lang['ClientMain.myinfo.setting_autodebit_ach_days'] = 'Cargaremos su %1$s Cuenta que termina en x%2$s %3$s días antes del vencimiento del pago.';
$lang['ClientMain.myinfo.number'] = '(%1$s %2$s)';
$lang['ClientMain.myinfo.contacts'] = 'Contactos';
$lang['ClientMain.myinfo.link_addcontact'] = 'Añadir contacto';
$lang['ClientMain.myinfo.managed_accounts'] = 'Cuentas gestionadas';
$lang['ClientMain.myinfo.field_managed_accounts_search'] = 'Buscar (empresa, correo electrónico o nombre)';
$lang['ClientMain.myinfo.setting_change'] = '¿Cambiar esto?';
$lang['ClientMain.myinfo.link_editclient'] = 'Cambia';
$lang['ClientMain.edit.heading_contact'] = 'Información de contacto';
$lang['ClientMain.edit.page_title'] = 'Cliente #%1$s Editar mi información';
$lang['ClientMain.edit.boxtitle_edit'] = 'Editar mi información';
$lang['ClientMain.edit.heading_billing'] = 'Información de facturación';
$lang['ClientMain.edit.field_taxid'] = 'Número de identificación fiscal/VATIN';
$lang['ClientMain.edit.field_default_currency'] = 'Moneda preferente';
$lang['ClientMain.edit.field_invoiceaddress'] = 'Dirección de facturación';
$lang['ClientMain.edit.heading_settings'] = 'Ajustes adicionales';
$lang['ClientMain.edit.field_language'] = 'Idioma';
$lang['ClientMain.edit.field_receive_email_marketing'] = 'Deseo recibir correos electrónicos sobre nuevos productos, servicios y ofertas.';
$lang['ClientMain.edit.heading_authentication'] = 'Autenticación';
$lang['ClientMain.edit.field_username'] = 'Nombre de usuario';
$lang['ClientMain.edit.field_new_password'] = 'Nueva contraseña';
$lang['ClientMain.edit.field_confirm_password'] = 'Confirmar contraseña';
$lang['ClientMain.edit.field_current_password'] = 'Contraseña actual';
$lang['ClientMain.edit.field_two_factor_mode'] = 'Activar la autenticación de dos factores';
$lang['ClientMain.edit.two_factor_desc'] = 'La autenticación de dos factores es una función de seguridad en la que usted proporciona dos medios de identificación para iniciar sesión en su cuenta. Si está activada, accederá a su cuenta con su nombre de usuario y contraseña y, a continuación, se le pedirá que introduzca una contraseña de un solo uso.';
$lang['ClientMain.edit.two_factor_instructions'] = 'Para utilizar la autenticación de dos factores, necesita un token TOTP. Si tienes un dispositivo móvil Android, iOS o Windows, tu teléfono puede actuar como token y proporcionar la contraseña de un solo uso necesaria.';
$lang['ClientMain.edit.two_factor_step1'] = 'Descarga un Authenticator para tu dispositivo:';
$lang['ClientMain.edit.two_factor_step2'] = 'Abra la aplicación y escanee el código QR que aparece a continuación o, alternativamente, introduzca una de las siguientes claves:<br/>Hex - %1$s<br/>Base32 - %2$s';
$lang['ClientMain.edit.two_factor_step3'] = 'Confirme su contraseña de un solo uso y haga clic en "Actualizar mis datos". Se le pedirá que introduzca su contraseña de un solo uso la próxima vez que se conecte.';
$lang['ClientMain.edit.text_android'] = 'Android';
$lang['ClientMain.edit.text_ios'] = 'iOS';
$lang['ClientMain.edit.text_windows'] = 'Windows';
$lang['ClientMain.edit.field_otp'] = 'Contraseña de un solo uso (Como se muestra en su Authenticator)';
$lang['ClientMain.edit.field_editsubmit'] = 'Actualizar mis datos';
$lang['ClientMain.invoicemethod.page_title'] = 'Cliente #%1$s Método de facturación';
$lang['ClientMain.invoicemethod.boxtitle_inv_method'] = 'Método de facturación';
$lang['ClientMain.invoicemethod.text_invoice_method'] = 'Su método de facturación es el método por el que le entregamos las nuevas facturas.';
$lang['Clientmain.invoicemethod.field_methodsubmit'] = 'Actualización';
$lang['ClientMain.getcurrencyamounts.text_total_credits'] = 'Créditos:';
$lang['ClientMain.edit.field_recovery_email'] = 'Correo electrónico de recuperación (opcional)';
$lang['ClientMain.edit.tooltip_confirm_password'] = 'Necesario para activar la autenticación de dos factores o actualizar la contraseña.';
$lang['ClientMain.edit.heading_two_factor_authentication'] = 'Autenticación de dos factores';
$lang['ClientMain.getcurrencyamounts.link_addcredits'] = 'Añadir créditos';

