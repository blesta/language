<?php
/**
 * Package Options
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PackageOptions.!error.company_id.exists'] = 'ID de empresa no válida.';
$lang['PackageOptions.!error.label.empty'] = 'Por favor, introduzca una etiqueta.';
$lang['PackageOptions.!error.label.length'] = 'La etiqueta no puede tener más de 128 caracteres.';
$lang['PackageOptions.!error.name.empty'] = 'Introduzca un nombre para esta opción.';
$lang['PackageOptions.!error.name.length'] = 'El nombre no puede tener más de 128 caracteres.';
$lang['PackageOptions.!error.type.valid'] = 'Seleccione un tipo de opción.';
$lang['PackageOptions.!error.values.count'] = 'Sólo puede haber una entrada de valor de opción para los tipos de casilla de verificación, cantidad, texto, área de texto o contraseña.';
$lang['PackageOptions.!error.values.unique'] = 'Los valores de las opciones deben ser únicos.';
$lang['PackageOptions.!error.values.select_value'] = 'Al menos un valor de opción contiene caracteres especiales no válidos.';
$lang['PackageOptions.!error.values.active_status'] = 'Al menos un valor de opción debe estar activo.';
$lang['PackageOptions.!error.values.single_default_value'] = 'Sólo puede seleccionarse un valor como valor por defecto.';
$lang['PackageOptions.!error.values[][step].valid'] = 'Un valor de paso sólo puede establecerse para el tipo de cantidad, y debe ser un valor de 1 o superior.';
$lang['PackageOptions.!error.values[][min].valid'] = 'Sólo puede establecerse un valor límite mínimo para el tipo de cantidad, y debe ser un valor igual o superior a 0.';
$lang['PackageOptions.!error.values[][max].valid'] = 'El valor límite máximo sólo puede fijarse para el tipo de cantidad, y debe ser un valor igual o superior a 1.';
$lang['PackageOptions.!error.values[][name].empty'] = 'Introduzca un nombre para el valor de la opción.';
$lang['PackageOptions.!error.values[][name].length'] = 'El nombre del valor de la opción no puede superar los 128 caracteres de longitud.';
$lang['PackageOptions.!error.values[][value].length'] = 'El valor de la opción no puede superar los 255 caracteres de longitud.';
$lang['PackageOptions.!error.values[][value].edit_in_use'] = 'El valor de la opción no puede modificarse porque está siendo utilizado por un servicio.';
$lang['PackageOptions.!error.values[][value].delete_in_use'] = 'El valor de la opción no puede borrarse porque está siendo utilizado por un servicio.';
$lang['PackageOptions.!error.values[][status].valid'] = 'Seleccione un estado de valor de opción válido.';
$lang['PackageOptions.!error.values[][default].inactive'] = 'Un valor de opción inactivo no puede establecerse como valor por defecto.';
$lang['PackageOptions.!error.values[][default].qty_valid'] = 'La cantidad de valor por defecto seleccionada no es válida para los mínimos, máximos y pasos configurados.';
$lang['PackageOptions.!error.values[][default].format'] = 'El valor por defecto debe ser un número.';
$lang['PackageOptions.!error.values[][id].exists'] = 'ID de valor de opción de paquete no válido.';
$lang['PackageOptions.!error.groups.exists'] = 'Al menos uno de los ID de grupo de opciones de paquete indicados no existe o no pertenece a la misma empresa.';
$lang['PackageOptions.!error.option_id.exists'] = 'ID de opción de paquete no válido.';
$lang['PackageOptions.!error.hidden.valid'] = 'Para ocultar esta opción debe fijarse en 0 o 1.';
$lang['PackageOptions.!error.values[][pricing][][id].exists'] = 'ID de precio de opción de paquete no válido.';
$lang['PackageOptions.!error.values[][pricing][][id].delete_in_use'] = 'La opción de valoración no podrá suprimirse porque esté siendo utilizada por un servicio.';
$lang['PackageOptions.!error.values[][pricing][][term].format'] = 'El término debe ser un número.';
$lang['PackageOptions.!error.values[][pricing][][term].length'] = 'La longitud del término no puede superar los 5 caracteres.';
$lang['PackageOptions.!error.values[][pricing][][term].valid'] = 'El término debe ser mayor que 0.';
$lang['PackageOptions.!error.values[][pricing][][period].format'] = 'Tipo de período no válido.';
$lang['PackageOptions.!error.values[][pricing][][price].format'] = 'El precio debe ser un número.';
$lang['PackageOptions.!error.values[][pricing][][price_renews].format'] = 'El precio de renovación debe ser un número.';
$lang['PackageOptions.!error.values[][pricing][][price_renews].valid'] = 'El precio de renovación no puede fijarse para un periodo de tiempo único.';
$lang['PackageOptions.!error.values[][pricing][][setup_fee].format'] = 'La cuota de instalación debe ser un número.';
$lang['PackageOptions.!error.values[][pricing][][currency].format'] = 'El código de moneda debe tener 3 caracteres.';
$lang['PackageOptions.gettypes.checkbox'] = 'Casilla de verificación';
$lang['PackageOptions.gettypes.select'] = 'Desplegable';
$lang['PackageOptions.gettypes.quantity'] = 'Cantidad';
$lang['PackageOptions.gettypes.radio'] = 'Radio';
$lang['PackageOptions.gettypes.text'] = 'Texto';
$lang['PackageOptions.gettypes.textarea'] = 'Área de texto';
$lang['PackageOptions.gettypes.password'] = 'Contraseña';
$lang['PackageOptions.getvaluestatuses.active'] = 'Activo';
$lang['PackageOptions.getvaluestatuses.inactive'] = 'Inactivo';
$lang['PackageOptions.getfields.label_quantity'] = 'x %1$s %2$s';
$lang['PackageOptions.getfields.label_quantity_recurring'] = 'x %1$s %2$s (renueva @ %3$s)';
$lang['PackageOptions.getfields.label_quantity_setup'] = 'x %1$s %2$s + %3$s configuración';
$lang['PackageOptions.getfields.label_quantity_setup_recurring'] = 'x %1$s %2$s + %3$s setup (renueva @ %4$s)';
$lang['PackageOptions.getfields.label_radio'] = '%1$s (%2$s)';
$lang['PackageOptions.getfields.label_radio_recurring'] = '%1$s (%2$s, renueva @ %3$s)';
$lang['PackageOptions.getfields.label_radio_setup'] = '%1$s (%2$s + %3$s configuración)';
$lang['PackageOptions.getfields.label_radio_setup_recurring'] = '%1$s (%2$s + %3$s instalación, renueva @ %4$s)';
$lang['PackageOptions.getfields.label_select'] = '%1$s (%2$s)';
$lang['PackageOptions.getfields.label_select_recurring'] = '%1$s (%2$s, renueva @ %3$s)';
$lang['PackageOptions.getfields.label_select_setup'] = '%1$s (%2$s + %3$s configuración)';
$lang['PackageOptions.getfields.label_select_setup_recurring'] = '%1$s (%2$s + %3$s instalación, renueva @ %4$s)';
$lang['PackageOptions.getfields.label_checkbox'] = '%1$s (%2$s)';
$lang['PackageOptions.getfields.label_checkbox_recurring'] = '%1$s (%2$s, renueva @ %3$s)';
$lang['PackageOptions.getfields.label_checkbox_setup'] = '%1$s (%2$s + %3$s configuración)';
$lang['PackageOptions.getfields.label_checkbox_setup_recurring'] = '%1$s (%2$s + %3$s instalación, renueva @ %4$s)';
$lang['PackageOptions.getfields.label_text'] = '%1$s';
$lang['PackageOptions.getfields.label_text_recurring'] = '%1$s (renueva @ %2$s)';
$lang['PackageOptions.getfields.label_text_setup'] = '%1$s + %2$s configuración';
$lang['PackageOptions.getfields.label_text_setup_recurring'] = '%1$s + %2$s instalación (renueva @ %3$s)';
$lang['PackageOptions.getfields.label_password'] = '%1$s';
$lang['PackageOptions.getfields.label_password_recurring'] = '%1$s (renueva @ %2$s)';
$lang['PackageOptions.getfields.label_password_setup'] = '%1$s + %2$s configuración';
$lang['PackageOptions.getfields.label_password_setup_recurring'] = '%1$s + %2$s instalación (renueva @ %3$s)';
$lang['PackageOptions.getfields.label_textarea'] = '%1$s';
$lang['PackageOptions.getfields.label_textarea_recurring'] = '%1$s (renueva @ %2$s)';
$lang['PackageOptions.getfields.label_textarea_setup'] = '%1$s + %2$s configuración';
$lang['PackageOptions.getfields.label_textarea_setup_recurring'] = '%1$s + %2$s instalación (renueva @ %3$s)';
$lang['PackageOptions.!error.hide_on_invoice.valid'] = 'La opción de ocultar en la factura debe ser 0 o 1.';
$lang['PackageOptions.!error.disable_pricing.valid'] = 'La opción de desactivar la tarificación debe ser 0 ó 1.';

