<?php
/**
 * Paypal Payments Standard
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PaypalPaymentsStandard.name'] = 'Pagos estándar de PayPal';
$lang['PaypalPaymentsStandard.description'] = 'PayPal Payments Standard es una de las formas más sencillas de aceptar pagos con tarjeta de crédito y PayPal en Internet de forma segura.';
$lang['PaypalPaymentsStandard.account_id'] = 'Correo electrónico de la cuenta PayPal';
$lang['PaypalPaymentsStandard.page_style'] = 'Nombre del estilo de página';
$lang['PaypalPaymentsStandard.page_style_note'] = 'Nombre de estilo de página del tema de página de pago personalizado que creó en PayPal. Déjelo en blanco para el estilo de página predeterminado.';
$lang['PaypalPaymentsStandard.dev_mode'] = 'Modo Desarrollador';
$lang['PaypalPaymentsStandard.dev_mode_note'] = 'Si activa esta opción, las transacciones se publicarán en el entorno de pruebas de PayPal. Active esta opción únicamente si está realizando pruebas con una cuenta del entorno de pruebas de PayPal.';
$lang['PaypalPaymentsStandard.api_username'] = 'Nombre de usuario API';
$lang['PaypalPaymentsStandard.api_username_note'] = 'Esto, así como la contraseña de API y la firma de API, son necesarios para procesar los reintegros a través de PayPal.';
$lang['PaypalPaymentsStandard.api_password'] = 'Contraseña API';
$lang['PaypalPaymentsStandard.api_signature'] = 'Firma API';
$lang['PaypalPaymentsStandard.pay_type'] = 'Formas de pago';
$lang['PaypalPaymentsStandard.pay_type_onetime'] = 'Pagos únicos';
$lang['PaypalPaymentsStandard.pay_type_subscribe'] = 'Sólo pagos de suscripción';
$lang['PaypalPaymentsStandard.pay_type_both'] = 'Pagos únicos y de suscripción cuando sea posible';
$lang['PaypalPaymentsStandard.buildprocess.submit'] = 'Pagar con PayPal';
$lang['PaypalPaymentsStandard.!error.account_id.valid'] = 'Debe introducir una dirección de correo electrónico válida.';
$lang['PaypalPaymentsStandard.!error.dev_mode.valid'] = 'El modo desarrollador debe ser "true" si se indica.';
$lang['PaypalPaymentsStandard.!error.payment_mapping.duplicated'] = 'Se han encontrado correos electrónicos duplicados en sus datos cartográficos, elimine los duplicados e inténtelo de nuevo.';
$lang['PaypalPaymentsStandard.!error.payment_mapping.valid'] = 'Se ha encontrado una línea no válida en sus datos de mapeo, compruebe si la dirección de correo electrónico y el ID de cliente son válidos e inténtelo de nuevo.';
$lang['PaypalPaymentsStandard.payment_mapping_note'] = 'Diseñado para su uso con suscripciones de PayPal creadas fuera de Blesta. Asigne payer_email al ID de cliente interno, 1 por línea. Por ejemplo: email,client-id';
$lang['PaypalPaymentsStandard.payment_mapping'] = 'Asignación de pagos';

