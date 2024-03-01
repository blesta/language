<?php
/**
 * Stripe Payments
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['StripePayments.!error.auth'] = 'La puerta de enlace no ha podido autenticarse.';
$lang['StripePayments.!error.publishable_key.empty'] = 'Introduzca una clave publicable.';
$lang['StripePayments.!error.secret_key.empty'] = 'Introduzca una clave secreta.';
$lang['StripePayments.!error.secret_key.valid'] = 'No se puede conectar a la API de Stripe utilizando la clave secreta proporcionada.';
$lang['StripePayments.!error.bank_account_unverified'] = 'Debe verificar su cuenta bancaria antes de poder utilizarla para efectuar un pago.';
$lang['StripePayments.!error.invalid_request_error'] = 'La pasarela de pago ha devuelto un error al procesar la solicitud.';
$lang['StripePayments.name'] = 'Pagos con Stripe';
$lang['StripePayments.description'] = 'Utiliza elementos de Stripe y la API de solicitud de pago para gestionar automáticamente 3D Secure y SCA para enviar tarjetas de crédito directamente a través de Stripe.';
$lang['StripePayments.ach_form.field_type'] = 'Tipo de cuenta';
$lang['StripePayments.ach_form.field_holder_type'] = 'Tipo de soporte';
$lang['StripePayments.ach_form.field_holder_type_individual'] = 'Individual';
$lang['StripePayments.ach_form.field_holder_type_company'] = 'Empresa';
$lang['StripePayments.ach_form.field_account_number'] = 'Número de cuenta';
$lang['StripePayments.ach_form.field_routing_number'] = 'Número de ruta';
$lang['StripePayments.ach_form.verification_notice'] = 'Hemos enviado dos pequeños ingresos a esta cuenta bancaria. Para verificar esta cuenta, confirme los importes de estos ingresos.';
$lang['StripePayments.ach_form.field_first_deposit'] = 'Primer depósito';
$lang['StripePayments.ach_form.field_second_deposit'] = 'Segundo depósito';
$lang['StripePayments.ach_form.mandate_authorization'] = 'Al enviar este formulario, autoriza a %1$s a cargar en la cuenta bancaria especificada anteriormente cualquier cantidad adeudada por cargos derivados de su uso de los servicios de %1$s y/o la compra de productos de %1$s, de conformidad con el sitio web y las condiciones de %1$s, hasta que se revoque esta autorización. Puede modificar o cancelar esta autorización en cualquier momento notificándolo a %1$s con 30 (treinta) días de antelación.';
$lang['StripePayments.ach_form.mandate_future_usage'] = 'Si utiliza los servicios de %1$s o adquiere productos adicionales periódicamente de conformidad con las condiciones de %1$s, autoriza a %1$s a realizar cargos periódicos en su cuenta bancaria. Los pagos que queden fuera de los débitos periódicos autorizados anteriormente sólo se cargarán una vez obtenida su autorización.';
$lang['StripePayments.publishable_key'] = 'Clave publicable API';
$lang['StripePayments.secret_key'] = 'Clave secreta API';
$lang['StripePayments.tooltip_publishable_key'] = 'Su clave publicable de API es específica para el modo activo o de prueba. Asegúrese de que está utilizando la clave correcta.';
$lang['StripePayments.tooltip_secret_key'] = 'La clave secreta de la API es específica para el modo activo o de prueba. Asegúrese de que está utilizando la clave correcta.';
$lang['StripePayments.webhook'] = 'Webhook de Stripe';
$lang['StripePayments.webhook_note'] = 'Se recomienda configurar la siguiente url como Webhook para eventos "payment_intent" en su cuenta de Stripe.';
$lang['StripePayments.heading_migrate_accounts'] = 'Migrar cuentas de pago antiguas';
$lang['StripePayments.text_accounts_remaining'] = 'Cuentas restantes: %1$s';
$lang['StripePayments.text_migrate_accounts'] = 'Puede migrar automáticamente las cuentas de pago almacenadas fuera del sitio por la antigua pasarela de Stripe a esta pasarela de Stripe Payments. Las cuentas que no estén almacenadas fuera del sitio deben migrarse creando manualmente nuevas cuentas de pago. Para evitar tiempos de espera, las migraciones se realizarán en lotes de %1$s. Ejecute esto tantas veces como sea necesario para migrar todas las cuentas de pago.';
$lang['StripePayments.warning_migrate_accounts'] = 'No desinstale la antigua pasarela de Stripe hasta que termine de utilizar esta herramienta de migración. Si lo hace, la herramienta quedará inaccesible.';
$lang['StripePayments.migrate_accounts'] = 'Migrar cuentas';
$lang['StripePayments.charge_description_default'] = 'Cargo por importe especificado';
$lang['StripePayments.charge_description'] = 'Cargo por %1$s';

