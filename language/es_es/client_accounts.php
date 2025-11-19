<?php
/**
 * Client Accounts
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientAccounts.!success.defaultaccount_updated'] = 'Se ha actualizado la cuenta de pago por defecto.';
$lang['ClientAccounts.!success.defaultaccount_deleted'] = 'Se ha eliminado la cuenta de pago por defecto.';
$lang['ClientAccounts.!success.account_created'] = 'La cuenta de pago se ha creado correctamente.';
$lang['ClientAccounts.!success.ccaccount_deleted'] = 'La cuenta de pago se ha eliminado correctamente.';
$lang['ClientAccounts.!success.ccaccount_updated'] = 'La cuenta de pago se ha actualizado correctamente.';
$lang['ClientAccounts.!success.achaccount_deleted'] = 'La cuenta de pago se ha eliminado correctamente.';
$lang['ClientAccounts.!success.achaccount_updated'] = 'La cuenta de pago se ha actualizado correctamente.';
$lang['ClientAccounts.!success.achaccount_verified'] = 'La cuenta de pago se ha verificado correctamente.';
$lang['ClientAccounts.!error.account_invalid'] = 'El tipo de cuenta de pago facilitado está desactivado o no es válido.';
$lang['ClientAccounts.!error.payment_account_type_invalid'] = 'Tipo de cuenta de pago no válida.';
$lang['ClientAccounts.!notice.disabled'] = 'La posibilidad de añadir cuentas de pago está actualmente desactivada.';
$lang['ClientAccounts.!notice.ach_disabled'] = 'Las cuentas de pago ACH están actualmente desactivadas y no pueden actualizarse.';
$lang['ClientAccounts.!notice.cc_disabled'] = 'Las cuentas de pago con tarjeta de crédito están actualmente desactivadas y no pueden actualizarse.';
$lang['ClientAccounts.!notice.reenable_autodebit'] = 'Los pagos automáticos se han desactivado específicamente para esta cuenta, póngase en contacto con un miembro del personal para reactivarlos. Puede seleccionar una cuenta de pago como predeterminada, pero no se cargará automáticamente hasta que el personal la haya reactivado.';
$lang['ClientAccounts.!info.account_info'] = 'Las cuentas de pago permiten mantener archivada la información de pago y pueden utilizarse para pagar facturas. Una cuenta de pago que se seleccione como cuenta predeterminada se utilizará para los pagos periódicos automáticos.';
$lang['ClientAccounts.!info.no_accounts'] = 'Actualmente no tiene ninguna cuenta de pago. Añada su primera cuenta de pago a continuación.';
$lang['ClientAccounts.!info.ach_verification'] = 'Debe verificar esta cuenta antes de poder utilizarla para efectuar un pago.';
$lang['ClientAccounts.!info.ach_verification_edit'] = 'Después de editar esta cuenta, deberá verificarla antes de poder utilizarla para realizar un pago.';
$lang['ClientAccounts.index.page_title'] = 'Cliente #%1$s Cuentas';
$lang['ClientAccounts.index.create_account'] = 'Añadir cuenta de pago';
$lang['ClientAccounts.index.boxtitle_accounts'] = 'Cuentas de pago';
$lang['ClientAccounts.index.heading_name'] = 'Nombre';
$lang['ClientAccounts.index.heading_type'] = 'Tipo';
$lang['ClientAccounts.index.heading_last4'] = '4 últimos';
$lang['ClientAccounts.index.heading_options'] = 'Opciones';
$lang['ClientAccounts.index.option_edit'] = 'Editar';
$lang['ClientAccounts.index.option_verify'] = 'Verifique';
$lang['ClientAccounts.index.option_delete'] = 'Borrar';
$lang['ClientAccounts.index.type_cc'] = '%1$s - %2$s';
$lang['ClientAccounts.index.type_ach'] = '%1$s - %2$s';
$lang['ClientAccounts.index.confirm_delete'] = '¿Está seguro de que desea eliminar esta cuenta de pago?';
$lang['ClientAccounts.index.field_accountsubmit'] = 'Establecer como cuenta de pago predeterminada';
$lang['ClientAccounts.index.field_removeautodebit'] = 'Eliminar débito automático';
$lang['ClientAccounts.index.no_results'] = 'No tiene cuentas de pago.';
$lang['ClientAccounts.add.page_title'] = 'Cliente #%1$s Añadir cuenta de pago';
$lang['ClientAccounts.add.heading_account_type'] = 'Tipo de cuenta';
$lang['ClientAccounts.add.field_cc_type'] = 'Tarjeta de crédito';
$lang['ClientAccounts.add.field_ach_type'] = 'ACH';
$lang['ClientAccounts.add.boxtitle_create'] = 'Añadir cuenta de pago';
$lang['ClientAccounts.add.field_nextsubmit'] = 'Continuar';
$lang['ClientAccounts.add.field_accountsubmit'] = 'Crear cuenta';
$lang['ClientAccounts.editach.page_title'] = 'Cliente #%1$s Editar cuenta ACH';
$lang['ClientAccounts.editach.boxtitle_editach'] = 'Editar cuenta ACH';
$lang['ClientAccounts.editach.field_accountsubmit'] = 'Editar cuenta';
$lang['ClientAccounts.verifyach.page_title'] = 'Cliente #%1$s Verificar cuenta ACH';
$lang['ClientAccounts.verifyach.boxtitle_verifyach'] = 'Verificar cuenta ACH';
$lang['ClientAccounts.verifyach.field_firstdeposit'] = 'Primer depósito';
$lang['ClientAccounts.verifyach.field_seconddeposit'] = 'Segundo depósito';
$lang['ClientAccounts.verifyach.field_accountsubmit'] = 'Verificar cuenta';
$lang['ClientAccounts.editcc.page_title'] = 'Cliente #%1$s Editar cuenta de tarjeta de crédito';
$lang['ClientAccounts.editcc.boxtitle_editcc'] = 'Editar cuenta de tarjeta de crédito';
$lang['ClientAccounts.editcc.field_accountsubmit'] = 'Editar cuenta';
$lang['ClientAccounts.setcontactview.text_none'] = 'Ninguno';
$lang['ClientAccounts.contact_info.heading_contact'] = 'Información de contacto';
$lang['ClientAccounts.contact_info.text_select_contact'] = 'Puede seleccionar un contacto existente para rellenar previamente este formulario.';
$lang['ClientAccounts.contact_info.field_contact_id'] = 'Copiar información de contacto de';
$lang['ClientAccounts.contact_info.field_first_name'] = 'Nombre';
$lang['ClientAccounts.contact_info.field_last_name'] = 'Apellido';
$lang['ClientAccounts.contact_info.field_company'] = 'Empresa';
$lang['ClientAccounts.contact_info.field_title'] = 'Título';
$lang['ClientAccounts.contact_info.field_address1'] = 'Dirección 1';
$lang['ClientAccounts.contact_info.field_address2'] = 'Dirección 2';
$lang['ClientAccounts.contact_info.field_city'] = 'Ciudad';
$lang['ClientAccounts.contact_info.field_country'] = 'País';
$lang['ClientAccounts.contact_info.field_state'] = 'Estado';
$lang['ClientAccounts.contact_info.field_zip'] = 'Código postal';
$lang['ClientAccounts.contact_info.field_email'] = 'Correo electrónico';
$lang['ClientAccounts.cc_info.heading_cc'] = 'Información sobre la tarjeta de crédito';
$lang['ClientAccounts.cc_info.field_number'] = 'Número';
$lang['ClientAccounts.cc_info.field_security'] = 'Código de seguridad';
$lang['ClientAccounts.cc_info.field_expiration'] = 'Fecha de expiración';
$lang['ClientAccounts.cc_info.field_savedetails'] = 'Guardar cuenta';
$lang['ClientAccounts.cc_info.tooltip_code'] = 'El código de seguridad de 3 ó 4 dígitos, que suele figurar en el reverso de la tarjeta.';
$lang['ClientAccounts.ach_info.heading_ach'] = 'Información sobre la cuenta bancaria';
$lang['ClientAccounts.ach_info.field_type'] = 'Tipo';
$lang['ClientAccounts.ach_info.field_accountnum'] = 'Número de cuenta';
$lang['ClientAccounts.ach_info.field_routingnum'] = 'Número de ruta';
$lang['ClientAccounts.ach_info.field_savedetails'] = 'Guardar cuenta';
$lang['ClientAccounts.navigation.nav_dashboard'] = 'Cuadro de mandos';
$lang['ClientAccounts.navigation.nav_paymentaccounts'] = 'Cuentas de pago';
$lang['ClientAccounts.navigation.nav_paymentaccounts_add'] = 'Añadir cuenta de pago';
$lang['ClientAccounts.navigation.nav_return'] = 'Volver al panel de control';
$lang['ClientAccounts.credithandling.field_submit'] = 'Actualizar ajustes';
$lang['ClientAccounts.credithandling.heading_threshold'] = 'Umbral de notificación';
$lang['ClientAccounts.credithandling.heading_currency'] = 'Moneda';
$lang['ClientAccounts.credithandling.text_description'] = 'Configurar notificaciones de saldo bajo. Recibirás un correo electrónico diario cuando tu saldo sea inferior al umbral de cualquier divisa.';
$lang['ClientAccounts.credithandling.boxtitle_credithandling'] = 'Gestión de créditos';
$lang['ClientAccounts.navigation.nav_credithandling'] = 'Gestión de créditos';
$lang['ClientAccounts.!success.credit_handling_updated'] = 'La configuración de la gestión de créditos se ha actualizado correctamente.';

