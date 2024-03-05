<?php
/**
 * Transactions
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Transactions.!error.client_id.exists'] = 'ID de cliente no válido.';
$lang['Transactions.!error.amount.format'] = 'El importe debe ser un número.';
$lang['Transactions.!error.currency.length'] = 'La moneda debe tener 3 caracteres de longitud.';
$lang['Transactions.!error.type.format'] = 'Tipo de transacción no válida.';
$lang['Transactions.!error.transaction_type_id.exists'] = 'ID de tipo de transacción no válido.';
$lang['Transactions.!error.gateway_id.exists'] = 'ID de puerta de enlace no válida.';
$lang['Transactions.!error.transaction_id.length'] = 'La longitud del ID de transacción no puede superar los 128 caracteres.';
$lang['Transactions.!error.parent_transaction_id.length'] = 'La longitud del ID de la transacción principal no puede superar los 128 caracteres.';
$lang['Transactions.!error.reference_id.length'] = 'La longitud del ID de referencia no puede superar los 128 caracteres.';
$lang['Transactions.!error.status.format'] = 'Estado de la transacción no válido.';
$lang['Transactions.!error.transaction_id.exists'] = 'ID de transacción no válido.';
$lang['Transactions.!error.date_added.format'] = 'La fecha de la transacción no puede ser una fecha futura.';
$lang['Transactions.!error.message.length'] = 'La longitud del mensaje no puede superar los 255 caracteres.';
$lang['Transactions.!error.transaction_id.currency_matches'] = 'Los importes de la factura no se han podido aplicar porque no coinciden con la moneda de la transacción.';
$lang['Transactions.!error.invoice_id.exists'] = 'ID de factura no válido.';
$lang['Transactions.!error.amounts.overage'] = 'No se han podido aplicar uno o varios valores de Importe a pagar a la factura especificada. Asegúrate de que el Importe a pagar no supere el Importe a pagar de la factura, que la factura esté abierta y que la suma de los valores de Importe a pagar no supere el Importe de pago o de crédito.';
$lang['Transactions.!error.amounts.positive'] = 'Uno o varios valores de Importe a pagar son negativos. Asegúrate de que cada valor de Importe a pagar es cero o más.';
$lang['Transactions.!error.date.format'] = 'La fecha aplicada no es válida.';
$lang['Transactions.!error.currency.missing'] = 'Por favor, fija una moneda.';
$lang['Transactions.!error.currency.mismatch'] = 'La moneda indicada no coincide con al menos una de las facturas asociadas.';
$lang['Transactions.!error.name.empty'] = 'Por favor, introduzca un nombre.';
$lang['Transactions.!error.name.length'] = 'La longitud del nombre no puede superar los 32 caracteres.';
$lang['Transactions.!error.type.valid'] = 'Seleccione un tipo válido.';
$lang['Transactions.!error.is_lang.format'] = 'is_lang debe ser un número.';
$lang['Transactions.!error.is_lang.length'] = 'La longitud de is_lang no puede superar 1 carácter.';
$lang['Transactions.!error.type_id.exists'] = 'ID de tipo de transacción no válido.';
$lang['Transactions.types.cc'] = 'Tarjeta de crédito';
$lang['Transactions.types.ach'] = 'ACH';
$lang['Transactions.types.other'] = 'Otros';
$lang['Transactions.status.approved'] = 'Aprobado';
$lang['Transactions.status.declined'] = 'Rechazado';
$lang['Transactions.status.void'] = 'Vacío';
$lang['Transactions.status.error'] = 'Error';
$lang['Transactions.status.pending'] = 'Pendiente';
$lang['Transactions.status.refunded'] = 'Reembolsado';
$lang['Transactions.status.returned'] = 'Devuelto';
$lang['Transactions.debit_types.debit'] = 'Débito';
$lang['Transactions.debit_types.credit'] = 'Crédito';

