<?php
/**
 * Admin Company Taxes
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyTaxes.!success.basic_updated'] = 'La configuración del impuesto básico se ha actualizado correctamente.';
$lang['AdminCompanyTaxes.!success.taxrule_created'] = 'La regla fiscal se ha creado correctamente.';
$lang['AdminCompanyTaxes.!success.taxrule_updated'] = 'La norma fiscal se ha actualizado correctamente.';
$lang['AdminCompanyTaxes.!success.rule_deleted'] = 'La regla fiscal se ha eliminado correctamente.';
$lang['AdminCompanyTaxes.countries.all'] = '-- Todos --';
$lang['AdminCompanyTaxes.states.all'] = '-- Todos --';
$lang['AdminCompanyTaxes.!tooltip.type'] = 'Incluido calculará el impuesto como parte de los precios de los artículos que establezca y se restará del precio del artículo para los usuarios exentos de impuestos.<br/>
Inclusivo (Aditivo) calculará los impuestos además de los precios de los artículos que establezca.<br/>
Exclusive (Exclusivo) calculará los impuestos además de los precios de los artículos que establezca, pero no los incluirá en la visualización del total del pedido.';
$lang['AdminCompanyTaxes.!tooltip.level'] = 'El nivel de impuestos le permite establecer el orden de los impuestos si se aplican varias normas fiscales.';
$lang['AdminCompanyTaxes.!tooltip.name'] = 'El nombre mostrado del impuesto (por ejemplo, Impuesto sobre las ventas).';
$lang['AdminCompanyTaxes.!tooltip.amount'] = 'El importe del impuesto en porcentaje.';
$lang['AdminCompanyTaxes.!tooltip.country'] = 'Seleccione el país al que se aplica esta regla fiscal.';
$lang['AdminCompanyTaxes.!tooltip.state'] = 'Seleccione el estado/provincia al que se aplica esta regla fiscal.';
$lang['AdminCompanyTaxes.basic.page_title'] = 'Configuración > Empresa > Impuestos > Configuración básica de impuestos';
$lang['AdminCompanyTaxes.basic.boxtitle_basic'] = 'Configuración fiscal básica';
$lang['AdminCompanyTaxes.basic.heading_general'] = 'Ajustes generales';
$lang['AdminCompanyTaxes.basic.field_enable_tax'] = 'Activar impuesto';
$lang['AdminCompanyTaxes.basic.note_enable_tax'] = 'Marque esta opción para activar los impuestos para esta empresa.';
$lang['AdminCompanyTaxes.basic.field_cascade_tax'] = 'Impuesto Cascada';
$lang['AdminCompanyTaxes.basic.note_cascade_tax'] = 'Si se activa, el nivel impositivo 1 se calculará primero sobre el total de la factura, y el nivel impositivo 2 se calculará sobre este nuevo total incluyendo el nivel impositivo 1. El resultado es un impuesto sobre impuesto. De lo contrario, el nivel impositivo 1 y el nivel impositivo 2 se calculan sólo sobre el total de la factura antes de impuestos.';
$lang['AdminCompanyTaxes.basic.field_setup_fee_tax'] = 'Tasas de establecimiento de impuestos';
$lang['AdminCompanyTaxes.basic.note_setup_fee_tax'] = 'Si está activada, se gravarán los gastos de instalación.';
$lang['AdminCompanyTaxes.basic.field_cancelation_fee_tax'] = 'Tasas de anulación de impuestos';
$lang['AdminCompanyTaxes.basic.note_cancelation_fee_tax'] = 'Si está activada, se gravarán los gastos de cancelación.';
$lang['AdminCompanyTaxes.basic.field_taxid'] = 'Número de identificación fiscal/VATIN';
$lang['AdminCompanyTaxes.basic.heading_tax_provider'] = '%1$s Ajustes';
$lang['AdminCompanyTaxes.basic.field_addsubmit'] = 'Actualizar ajustes';
$lang['AdminCompanyTaxes.rules.page_title'] = 'Configuración > Empresa > Impuestos > Normas fiscales';
$lang['AdminCompanyTaxes.rules.no_results'] = 'No existen normas fiscales de nivel %1$s.';
$lang['AdminCompanyTaxes.rules.categorylink_addrule'] = 'Añadir regla fiscal';
$lang['AdminCompanyTaxes.rules.boxtitle_rules'] = 'Normas fiscales';
$lang['AdminCompanyTaxes.rules.heading_level1'] = 'Reglas de nivel 1';
$lang['AdminCompanyTaxes.rules.heading_level2'] = 'Normas de nivel 2';
$lang['AdminCompanyTaxes.rules.text_name'] = 'Nombre';
$lang['AdminCompanyTaxes.rules.text_type'] = 'Tipo';
$lang['AdminCompanyTaxes.rules.text_amount'] = 'Importe';
$lang['AdminCompanyTaxes.rules.text_country'] = 'País';
$lang['AdminCompanyTaxes.rules.text_state'] = 'Estado/Provincia';
$lang['AdminCompanyTaxes.rules.text_options'] = 'Opciones';
$lang['AdminCompanyTaxes.rules.text_all'] = 'Todos';
$lang['AdminCompanyTaxes.rules.option_edit'] = 'Editar';
$lang['AdminCompanyTaxes.rules.option_delete'] = 'Borrar';
$lang['AdminCompanyTaxes.rules.confirm_delete'] = '¿Está seguro de que desea eliminar esta regla fiscal?';
$lang['AdminCompanyTaxes.add.page_title'] = 'Configuración > Empresa > Impuestos > Añadir regla fiscal';
$lang['AdminCompanyTaxes.add.boxtitle_add'] = 'Añadir regla fiscal';
$lang['AdminCompanyTaxes.add.field.type'] = 'Tipo de impuesto';
$lang['AdminCompanyTaxes.add.field.level'] = 'Nivel impositivo';
$lang['AdminCompanyTaxes.add.field.level1'] = 'Nivel 1';
$lang['AdminCompanyTaxes.add.field.level2'] = 'Nivel 2';
$lang['AdminCompanyTaxes.add.field.name'] = 'Nombre del impuesto';
$lang['AdminCompanyTaxes.add.field.amount'] = 'Importe';
$lang['AdminCompanyTaxes.add.field.country'] = 'País';
$lang['AdminCompanyTaxes.add.field.state'] = 'Estado/Provincia';
$lang['AdminCompanyTaxes.add.field.addsubmit'] = 'Crear regla';
$lang['AdminCompanyTaxes.edit.page_title'] = 'Configuración > Empresa > Impuestos > Editar regla fiscal';
$lang['AdminCompanyTaxes.edit.boxtitle_edit'] = 'Editar regla fiscal';
$lang['AdminCompanyTaxes.edit.field.type'] = 'Tipo de impuesto';
$lang['AdminCompanyTaxes.edit.field.level'] = 'Nivel impositivo';
$lang['AdminCompanyTaxes.edit.field.level1'] = 'Nivel 1';
$lang['AdminCompanyTaxes.edit.field.level2'] = 'Nivel 2';
$lang['AdminCompanyTaxes.edit.field.name'] = 'Nombre del impuesto';
$lang['AdminCompanyTaxes.edit.field.amount'] = 'Importe';
$lang['AdminCompanyTaxes.edit.field.country'] = 'País';
$lang['AdminCompanyTaxes.edit.field.state'] = 'Estado/Provincia';
$lang['AdminCompanyTaxes.edit.field.editsubmit'] = 'Editar regla';

