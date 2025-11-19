<?php
/**
 * Client Pay
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientPay.!success.payment_processed'] = 'El pago de %1$s se ha procesado correctamente. Número de transacción: %2$s';
$lang['ClientPay.!success.credit_full_processed'] = 'Se han aplicado los créditos disponibles.';
$lang['ClientPay.!success.credit_partial_processed'] = 'Se han aplicado los créditos disponibles, pero aún queda saldo. Por favor, complete esta transacción pagando el resto a continuación.';
$lang['ClientPay.!success.invoice_paid'] = 'Esta factura ya ha sido abonada.';
$lang['ClientPay.!info.unverified_email'] = 'Se ha enviado un enlace a la dirección de correo electrónico facilitada. Haga clic en el enlace del correo electrónico para verificar su dirección de correo electrónico antes de proceder al pago.';
$lang['ClientPay.!info.unverified_email_button'] = 'Reenviar correo de verificación';
$lang['ClientPay.!info.ach_verification'] = 'Debe verificar esta cuenta antes de poder utilizarla para efectuar un pago.';
$lang['ClientPay.!info.ach_verification_redirect'] = 'Debe verificar esta cuenta antes de poder utilizarla para realizar un pago. Este proceso le redirigirá fuera de la página actual.';
$lang['ClientPay.!error.invalid_details'] = 'Seleccione una opción de pago.';
$lang['ClientPay.!error.invalid_amount'] = 'Otros importes de pago no pueden ser negativos.';
$lang['ClientPay.!error.payment_amounts'] = 'Seleccione las facturas que desea pagar o introduzca otro importe de pago.';
$lang['ClientPay.!error.invoice_voided'] = 'Esta factura ha sido anulada y no puede ser pagada.';
$lang['ClientPay.!error.payment_authorize'] = 'No se ha podido autorizar el pago para la cuenta de pago seleccionada.  Por favor, seleccione una cuenta diferente o inténtelo de nuevo.';
$lang['ClientPay.index.page_title'] = 'Cliente %1$s Pagar';
$lang['ClientPay.index.boxtitle_pay'] = 'Realizar el pago';
$lang['ClientPay.index.field_credit'] = 'Otro importe de pago';
$lang['ClientPay.index.field_submit'] = 'Continúe en';
$lang['ClientPay.method.page_title'] = 'Cliente %1$s Forma de pago';
$lang['ClientPay.method.boxtitle_method'] = 'Realizar el pago';
$lang['ClientPay.method.field_useaccount'] = 'Utilizar cuenta de pago';
$lang['ClientPay.method.field_newdetails'] = 'Nuevos datos de pago';
$lang['ClientPay.method.heading_other_payment_options'] = 'Otras formas de pago';
$lang['ClientPay.method.heading_payment_options'] = 'Formas de pago';
$lang['ClientPay.method.field_paymentaccount'] = '%1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.field_paymentaccount_cc'] = 'Cuentas de tarjeta de crédito';
$lang['ClientPay.method.field_paymentaccount_autodebit'] = '(Cargo automático) %1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.field_paymentaccount_ach'] = 'Cuentas ACH';
$lang['ClientPay.method.field_apply_credit'] = 'Solicitar crédito (%1$s Disponible)';
$lang['ClientPay.method.field_submit'] = 'Revisar y confirmar';
$lang['ClientPay.method.field_credit_submit'] = 'Solicitar crédito y continuar';
$lang['ClientPay.method.no_options'] = 'No hay opciones de pago disponibles.';
$lang['ClientPay.method.heading_invoice'] = 'Factura #%1$s';
$lang['ClientPay.method.invoice_description'] = 'Descripción';
$lang['ClientPay.method.invoice_quantity'] = 'Cantidad';
$lang['ClientPay.method.invoice_amount'] = 'Importe';
$lang['ClientPay.multipleinvoices.text_edit_amounts'] = 'Realice un pago parcial';
$lang['ClientPay.multipleinvoices.text_amount'] = 'Importe a pagar';
$lang['ClientPay.multipleinvoices.text_due'] = 'Importe debido';
$lang['ClientPay.multipleinvoices.text_invoice'] = 'Factura #';
$lang['ClientPay.multipleinvoices.text_datedue'] = 'Fecha de vencimiento';
$lang['ClientPay.multipleinvoices.no_results'] = 'No hay facturas en esta moneda.';
$lang['ClientPay.confirm.page_title'] = 'Cliente %1$s Confirmar Pago';
$lang['ClientPay.confirm.boxtitle_confirm'] = 'Confirmar pago';
$lang['ClientPay.confirm.payment_details'] = 'Datos de pago';
$lang['ClientPay.confirm.account_info'] = '%1$s (%2$s) terminando en %3$s';
$lang['ClientPay.confirm.account_info_type'] = '%1$s';
$lang['ClientPay.confirm.account_exp'] = 'caduca %1$s';
$lang['ClientPay.confirm.total'] = 'Total:';
$lang['ClientPay.confirm.field_submit'] = 'Enviar pago';
$lang['ClientPay.confirm.field_edit'] = 'Editar pago';
$lang['ClientPay.confirm.description_invoice'] = 'Factura #%1$s';
$lang['ClientPay.confirm.description_invoice_separator'] = ',';
$lang['ClientPay.confirm.description_invoice_number'] = '#%1$s';
$lang['ClientPay.confirm.description_credit'] = 'Crédito de pago';
$lang['ClientPay.received.page_title'] = 'Cliente %1$s Pago recibido';
$lang['ClientPay.received.boxtitle_received'] = 'Gracias.';
$lang['ClientPay.received.statement'] = 'Su pago está siendo procesado.';
$lang['ClientPay.received.transaction_id'] = 'ID de transacción';
$lang['ClientPay.received.amount'] = 'Importe';
$lang['ClientPay.received.invoices'] = 'Factura #';
$lang['ClientPay.received.text_try_again'] = 'Inténtalo de nuevo';
$lang['ClientPay.setcontactview.text_none'] = 'Ninguno';
$lang['ClientPay.method.invoice_balance_due'] = 'Saldo pendiente';
$lang['ClientPay.method.invoice_paid_amount'] = 'Importe pagado';
$lang['ClientPay.method.invoice_total'] = 'Total de la factura';
$lang['ClientPay.index.text_credit_max_only'] = 'Importe máximo: %1$s';
$lang['ClientPay.index.text_credit_min_only'] = 'Importe mínimo: %1$s';
$lang['ClientPay.index.text_credit_limits'] = 'Importe mínimo: %1$s - Importe máximo: %2$s';
$lang['ClientPay.!error.credit_maximum'] = 'El importe del crédito no puede superar %1$s.';
$lang['ClientPay.!error.credit_minimum'] = 'El importe del crédito debe ser como mínimo de %1$s.';

