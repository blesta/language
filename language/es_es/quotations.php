<?php
/**
 * Quotations
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Quotations.!error.quotation_add.failed'] = 'No se ha podido crear este presupuesto. Por favor, inténtelo de nuevo.';
$lang['Quotations.!error.id.quotation_invoiced'] = 'Este presupuesto ha sido facturado y no puede ser editado.';
$lang['Quotations.!error.id_format.empty'] = 'No se ha establecido un formato de identificación para las citas.';
$lang['Quotations.!error.id_format.length'] = 'El formato de identificación de las citas no puede superar los 64 caracteres.';
$lang['Quotations.!error.id_value.valid'] = 'No se puede determinar el valor de ID de la cita.';
$lang['Quotations.!error.client_id.exists'] = 'ID de cliente no válido.';
$lang['Quotations.!error.staff_id.exists'] = 'ID de personal no válida.';
$lang['Quotations.!error.title.empty'] = 'Por favor, introduzca un título.';
$lang['Quotations.!error.title.length'] = 'El título de las citas no puede superar los 255 caracteres.';
$lang['Quotations.!error.date_created.format'] = 'La fecha de creación tiene un formato no válido.';
$lang['Quotations.!error.date_expires.format'] = 'La fecha de caducidad tiene un formato no válido.';
$lang['Quotations.!error.date_expires.after_created'] = 'El vencimiento debe ser igual o posterior a la creación facturada.';
$lang['Quotations.!error.status.format'] = 'Estado no válido.';
$lang['Quotations.!error.currency.length'] = 'El código de divisa debe tener 3 caracteres.';
$lang['Quotations.!error.status.valid'] = 'El presupuesto debe estar aprobado o pendiente de aprobación para ser facturado.';
$lang['Quotations.!error.first_due_date.format'] = 'La primera fecha de vencimiento tiene un formato de fecha no válido.';
$lang['Quotations.!error.second_due_date.format'] = 'La segunda fecha de vencimiento tiene un formato de fecha no válido.';
$lang['Quotations.!error.percentage_due.format'] = 'El porcentaje debido debe ser un número.';
$lang['Quotations.!error.percentage_due.valid'] = 'El porcentaje debido debe ser un número mayor que cero y menor o igual que 100.';
$lang['Quotations.!error.lines[][id].exists'] = 'ID de partida inválido.';
$lang['Quotations.!error.lines[][description].empty'] = 'Introduzca una descripción de la partida.';
$lang['Quotations.!error.lines[][qty].minimum'] = 'Por favor, introduzca una cantidad de 1 o más.';
$lang['Quotations.!error.lines[][amount].format'] = 'El coste unitario debe ser un número.';
$lang['Quotations.!error.lines[][tax].format'] = 'El impuesto sobre las partidas debe ser "verdadero" o "falso".';
$lang['Quotations.getstatuses.draft'] = 'Borrador';
$lang['Quotations.getstatuses.approved'] = 'Aprobado';
$lang['Quotations.getstatuses.pending'] = 'Pendiente';
$lang['Quotations.getstatuses.expired'] = 'Caducado';
$lang['Quotations.getstatuses.invoiced'] = 'Facturado';
$lang['Quotations.getstatuses.dead'] = 'Muerto';
$lang['Quotations.getstatuses.lost'] = 'Perdido';

