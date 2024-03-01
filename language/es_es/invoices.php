<?php
/**
 * Invoices
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Invoices.getPricingPeriods.day'] = 'Día';
$lang['Invoices.getPricingPeriods.week'] = 'Semana';
$lang['Invoices.getPricingPeriods.month'] = 'Mes';
$lang['Invoices.getPricingPeriods.year'] = 'Año';
$lang['Invoices.getDeliveryMethods.email'] = 'Correo electrónico';
$lang['Invoices.getDeliveryMethods.paper'] = 'Papel';
$lang['Invoices.getDeliveryMethods.interfax'] = 'InterFax';
$lang['Invoices.getDeliveryMethods.postalmethods'] = 'Métodos postales';
$lang['Invoices.!note_private.service_cancel_date'] = 'Servicio #%1$s cancelado %2$s.';
$lang['Invoices.!note_private.removed_lines'] = 'Partidas suprimidas:';
$lang['Invoices.!note_private.line_item'] = '- %1$s @ %2$s: %3$s';
$lang['Invoices.!line_item.service_renew_description'] = '%5$s%1$s - %2$s (%3$s - %4$s)';
$lang['Invoices.!line_item.service_cancel_fee_description'] = '%1$s - %2$s Tasa de cancelación';
$lang['Invoices.!line_item.service_setup_fee_description'] = '%1$s - %2$s Gastos de instalación';
$lang['Invoices.!line_item.service_option_renew_description'] = '↳ %1$s - %2$s';
$lang['Invoices.!line_item.service_option_setup_fee_description'] = '↳ %1$s - %2$s Cuota de instalación';
$lang['Invoices.!line_item.service_prorated_upgrade_description'] = 'Actualización prorrateada de %1$s a %2$s - %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_prorated_upgrade_description_onetime'] = 'Actualización prorrateada de %1$s a %2$s - %3$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade'] = '↳ Actualización prorrateada de %1$s de %2$s a %3$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_date'] = '↳ Actualización prorrateada de %1$s de %2$s a %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_onetime'] = '↳ Actualización prorrateada de %1$s de %2$s a %3$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text'] = '↳ Actualización prorrateada de %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_date'] = '↳ Actualización prorrateada de %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_onetime'] = '↳ Actualización prorrateada de %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty'] = '↳ Actualización prorrateada de %1$s de %2$sx %3$s a %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_date'] = '↳ Actualización prorrateada de %1$s de %2$sx %3$s a %4$sx %5$s (%6$s - %7$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_onetime'] = '↳ Actualización prorrateada de %1$s de %2$sx %3$s a %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_addition'] = '↳ Adición prorrateada de %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_addition_date'] = '↳ Adición prorrateada de %1$s %2$s (%3$s - %4$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_onetime'] = '↳ Adición prorrateada de %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text'] = '↳ Adición prorrateada de %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_date'] = '↳ Adición prorrateada de %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_text_onetime'] = '↳ Adición prorrateada de %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_qty'] = '↳ Adición prorrateada de %1$s %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_date'] = '↳ Adición prorrateada de %1$s %2$sx %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_onetime'] = '↳ Adición prorrateada de %1$s %2$sx %3$s';
$lang['Invoices.!line_item.prorated_credit'] = 'Crédito prorrateado';
$lang['Invoices.!line_item.coupon_line_item_description_amount'] = 'Cupón %1$s';
$lang['Invoices.!line_item.coupon_line_item_description_percent'] = 'Cupón %1$s - %2$s%%.';
$lang['Invoices.!line_item.recurring_renew_description'] = '%1$s (%2$s - %3$s)';
$lang['Invoices.status.active'] = 'Activo';
$lang['Invoices.status.proforma'] = 'Pro forma';
$lang['Invoices.status.draft'] = 'Borrador';
$lang['Invoices.status.void'] = 'Vacío';
$lang['Invoices.types.standard'] = 'Estándar';
$lang['Invoices.types.proforma'] = 'Pro forma';
$lang['Invoices.cache_methods.none'] = 'Ninguno';
$lang['Invoices.cache_methods.json'] = 'JSON';
$lang['Invoices.cache_methods.json_pdf'] = 'JSON + PDF';
$lang['Invoices.!error.invoice_id.exists'] = 'ID de factura no válido.';
$lang['Invoices.!error.invoice_recur_id.exists'] = 'ID de factura periódica no válido.';
$lang['Invoices.!error.method.exists'] = 'Debe establecer al menos un método de entrega.';
$lang['Invoices.!error.delivery.empty'] = 'Introduzca un método de entrega de la factura.';
$lang['Invoices.!error.delivery.length'] = 'La longitud del método de entrega de la factura no puede superar los 32 caracteres.';
$lang['Invoices.!error.invoice_add.failed'] = 'No se ha podido crear esta factura. Por favor, inténtelo de nuevo.';
$lang['Invoices.!error.id_format.empty'] = 'No se ha establecido ningún formato de identificación para las facturas.';
$lang['Invoices.!error.id_format.length'] = 'El formato de identificación de las facturas no puede superar los 64 caracteres.';
$lang['Invoices.!error.id_value.valid'] = 'No se ha podido determinar el valor del ID de la factura.';
$lang['Invoices.!error.id.amount_applied'] = 'Es posible que las líneas de factura, la moneda y el estado no se actualicen porque ya se ha aplicado un importe a esta factura.';
$lang['Invoices.!error.client_id.exists'] = 'ID de cliente no válido.';
$lang['Invoices.!error.date_billed.format'] = 'La fecha facturada tiene un formato de fecha no válido.';
$lang['Invoices.!error.date_due.format'] = 'La fecha de vencimiento tiene un formato no válido.';
$lang['Invoices.!error.date_due.after_billed'] = 'La fecha de vencimiento debe ser igual o posterior a la fecha de facturación.';
$lang['Invoices.!error.date_closed.format'] = 'La fecha de cierre tiene un formato no válido.';
$lang['Invoices.!error.date_autodebit.format'] = 'La fecha de vencimiento tiene un formato no válido.';
$lang['Invoices.!error.autodebit.valid'] = 'Seleccione si desea permitir o no el cargo automático para esta factura.';
$lang['Invoices.!error.status.format'] = 'Estado no válido.';
$lang['Invoices.!error.currency.length'] = 'El código de divisa debe tener 3 caracteres.';
$lang['Invoices.!error.delivery.exists'] = 'El método de entrega indicado no existe.';
$lang['Invoices.!error.term.format'] = 'El término debe ser un número.';
$lang['Invoices.!error.term.bounds'] = 'El término debe estar comprendido entre 1 y 65535.';
$lang['Invoices.!error.period.format'] = 'El punto no es válido.';
$lang['Invoices.!error.duration.format'] = 'La duración no es válida.';
$lang['Invoices.!error.date_renews.format'] = 'La fecha de renovación de la factura periódica debe tener un formato de fecha válido.';
$lang['Invoices.!error.date_last_renewed.format'] = 'La fecha de renovación de la última factura periódica debe tener un formato de fecha válido.';
$lang['Invoices.!error.invoice_id.draft'] = 'La factura en cuestión no es un borrador de factura, por lo que no se ha podido eliminar.';
$lang['Invoices.!error.domain_renew.failed'] = 'Los dominios sólo pueden renovarse por un máximo de 10 años.';
$lang['Invoices.!error.lines[][id].exists'] = 'ID de partida inválido.';
$lang['Invoices.!error.lines[][service_id].exists'] = 'ID de servicio no válido.';
$lang['Invoices.!error.lines[][description].empty'] = 'Introduzca una descripción de la partida.';
$lang['Invoices.!error.lines[][qty].format'] = 'La cantidad debe ser un número.';
$lang['Invoices.!error.lines[][qty].minimum'] = 'Por favor, introduzca una cantidad de 1 o más.';
$lang['Invoices.!error.lines[][amount].format'] = 'El coste unitario debe ser un número.';
$lang['Invoices.!error.lines[][tax].format'] = 'El impuesto sobre las partidas debe ser "verdadero" o "falso".';
$lang['Invoices.!error.line_items.empty_split'] = 'No se ha seleccionado ninguna línea de factura para dividir.';
$lang['Invoices.!error.line_items.minimum_split'] = 'La factura debe tener al menos 2 líneas para ser dividida.';

