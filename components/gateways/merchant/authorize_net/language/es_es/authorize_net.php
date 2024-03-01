<?php
/**
 * Authorize Net
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Authorize_net.name'] = 'Autorizar.Net';
$lang['Authorize_net.description'] = 'Procesamiento rápido y fiable de tarjetas de crédito y ACH';
$lang['Authorize_net.login_id'] = 'Identificador';
$lang['Authorize_net.transaction_key'] = 'Clave de transacción';
$lang['Authorize_net.api'] = 'API de pago';
$lang['Authorize_net.test_mode'] = 'Modo de prueba';
$lang['Authorize_net.test_mode_note'] = 'La función de modo de prueba sólo es compatible con AIM. Para probar las transacciones de CIM, debe activar el modo de prueba desde su cuenta de Authorize.net.';
$lang['Authorize_net.dev_mode'] = 'Modo Desarrollador';
$lang['Authorize_net.dev_mode_note'] = 'Al activar esta opción, las transacciones se publicarán en el entorno para desarrolladores de Authorize.net. Debe tener una cuenta de prueba de desarrollador para poder utilizar este entorno.';
$lang['Authorize_net.apis_aim'] = 'AIM (por defecto)';
$lang['Authorize_net.apis_cim'] = 'CIM (debe estar habilitado por Authorize.Net)';
$lang['Authorize_net.validation_mode'] = 'Modo de validación de la cuenta de pago';
$lang['Authorize_net.validation_note'] = 'Controla el tipo de validación que se realiza cuando se almacena una cuenta de pago utilizando CIM. Ninguno" no realiza ninguna validación adicional. Prueba\' emite una transacción de prueba que no aparece en el extracto del cliente pero que generará un correo electrónico para el comerciante. Real" procesa una transacción de 0,00 USD o 0,01 USD que se anula inmediatamente. Consulte a su proveedor de cuentas comerciales antes de establecer este valor en "Real", ya que puede estar sujeto a comisiones.';
$lang['Authorize_net.validation_modes_none'] = 'Ninguno';
$lang['Authorize_net.validation_modes_test'] = 'Prueba';
$lang['Authorize_net.validation_modes_live'] = 'En directo';
$lang['Authorize_net.!error.login_id.format'] = 'El ID de inicio de sesión no debe tener más de 20 caracteres y no puede estar vacío.';
$lang['Authorize_net.!error.transaction_key.format'] = 'La clave de la transacción debe tener 16 caracteres de longitud.';
$lang['Authorize_net.!error.test_mode.valid'] = 'El modo de prueba debe establecerse en "true" si se da.';
$lang['Authorize_net.!error.dev_mode.valid'] = 'El modo desarrollador debe ser "true" si se indica.';
$lang['Authorize_net.!error.card_number.missing'] = 'La fecha de caducidad no puede actualizarse sin el número completo de la tarjeta.';

