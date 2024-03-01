<?php
/**
 * Packages
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Packages.!error.company_id.exists'] = 'Empresa no válida.';
$lang['Packages.!error.package_id.exists'] = 'No se ha podido eliminar el paquete porque un servicio lo está utilizando actualmente.';
$lang['Packages.!error.package_id.has_children'] = 'No se ha podido eliminar el paquete porque un servicio tiene servicios hijos.';
$lang['Packages.!error.module_id.exists'] = 'Módulo no válido.';
$lang['Packages.!error.module_id.changed'] = 'El módulo no puede modificarse porque hay uno o más servicios que ya utilizan este paquete.';
$lang['Packages.!error.names.format'] = 'Los nombres de los paquetes tienen un formato no válido.';
$lang['Packages.!error.names.empty_name'] = 'Especifique un nombre de paquete para cada idioma.';
$lang['Packages.!error.names.empty_lang'] = 'Especifique un código de idioma del paquete para cada nombre.';
$lang['Packages.!error.descriptions.format'] = 'Las descripciones de los paquetes tienen un formato no válido.';
$lang['Packages.!error.descriptions.empty_lang'] = 'Especifique un código de idioma del paquete para cada descripción.';
$lang['Packages.!error.qty.format'] = 'La cantidad debe ser un número.';
$lang['Packages.!error.client_qty.format'] = 'El límite del cliente debe ser un número.';
$lang['Packages.!error.option_groups[].valid'] = 'Grupo de opciones de paquetes configurables no válido.';
$lang['Packages.!error.plugins[].valid'] = 'Plugin no válido.';
$lang['Packages.!error.module_row.format'] = 'Se ha introducido una fila de módulo no válida.';
$lang['Packages.!error.module_group.format'] = 'Grupo de módulos no válido.';
$lang['Packages.!error.module_group_client.valid'] = 'Permitir al cliente seleccionar grupo debe ser 1 o 0.';
$lang['Packages.!error.taxable.format'] = 'La base imponible debe ser un número.';
$lang['Packages.!error.taxable.length'] = 'La longitud imponible no puede superar 1 carácter.';
$lang['Packages.!error.single_term.valid'] = 'Un solo término debe ser 1 o 0.';
$lang['Packages.!error.override_price.valid'] = 'Establecer el precio del paquete como precio de anulación debe ser 1 o 0.';
$lang['Packages.!error.upgrades_use_renewal.valid'] = 'Los precios de renovación de las actualizaciones deben ser 1 ó 0.';
$lang['Packages.!error.status.format'] = 'Estado no válido.';
$lang['Packages.!error.hidden.format'] = 'Si este grupo debe estar oculto en la interfaz debe establecerse en 1 o 0.';
$lang['Packages.!error.prorata_day.format'] = 'El día prorrateado debe estar comprendido entre el 1 y el 28.';
$lang['Packages.!error.prorata_cutoff.format'] = 'El día de corte prorrateado debe estar comprendido entre el 1 y el 28.';
$lang['Packages.!error.email_content[][lang].empty'] = 'Por favor, introduzca un idioma.';
$lang['Packages.!error.email_content[][lang].length'] = 'La longitud de la lengua no puede superar los 5 caracteres.';
$lang['Packages.!error.email_content.parse'] = 'Error de análisis de plantilla: %1$s';
$lang['Packages.!error.pricing[][term].format'] = 'El término debe ser un número.';
$lang['Packages.!error.pricing[][term].length'] = 'La longitud del término no puede superar los 5 caracteres.';
$lang['Packages.!error.pricing[][term].valid'] = 'El término debe ser mayor que 0.';
$lang['Packages.!error.pricing[][term].in_use'] = 'El término no puede actualizarse en una tarificación que esté en uso.';
$lang['Packages.!error.pricing[][period].format'] = 'Tipo de período no válido.';
$lang['Packages.!error.pricing[][period].in_use'] = 'El periodo no puede actualizarse en una tarificación que esté en uso.';
$lang['Packages.!error.pricing[][price].format'] = 'El precio debe ser un número.';
$lang['Packages.!error.pricing[][price_renews].format'] = 'El precio de renovación debe ser un número.';
$lang['Packages.!error.pricing[][price_renews].valid'] = 'El precio de renovación no puede fijarse para un periodo de tiempo único.';
$lang['Packages.!error.pricing[][price_transfer].format'] = 'El precio de transferencia debe ser un número.';
$lang['Packages.!error.pricing[][setup_fee].format'] = 'La cuota de instalación debe ser un número.';
$lang['Packages.!error.pricing[][cancel_fee].format'] = 'La tasa de cancelación debe ser un número.';
$lang['Packages.!error.pricing[][currency].format'] = 'El código de moneda debe tener 3 caracteres.';
$lang['Packages.!error.pricing[][currency].in_use'] = 'La moneda no puede actualizarse en una tarificación que esté en uso.';
$lang['Packages.!error.pricing[][id].format'] = 'ID de precio de paquete no válido.';
$lang['Packages.!error.pricing[][id].deletable'] = 'No se ha podido suprimir el término porque lo utilizan uno o varios servicios.';
$lang['Packages.!error.groups[].exists'] = 'ID de grupo de paquetes no válido.';
$lang['Packages.!error.groups[].valid'] = 'El grupo de paquetes seleccionado no pertenece a la empresa indicada.';
$lang['Packages.getPricingPeriods.day'] = 'Día';
$lang['Packages.getPricingPeriods.week'] = 'Semana';
$lang['Packages.getPricingPeriods.month'] = 'Mes';
$lang['Packages.getPricingPeriods.year'] = 'Año';
$lang['Packages.getPricingPeriods.onetime'] = 'Una vez';
$lang['Packages.getPricingPeriods.day_plural'] = 'Días';
$lang['Packages.getPricingPeriods.week_plural'] = 'Semanas';
$lang['Packages.getPricingPeriods.month_plural'] = 'Meses';
$lang['Packages.getPricingPeriods.year_plural'] = 'Años';
$lang['Packages.getPricingPeriods.onetime_plural'] = 'Una vez';
$lang['Packages.getStatusTypes.active'] = 'Activo';
$lang['Packages.getStatusTypes.inactive'] = 'Inactivo';
$lang['Packages.getStatusTypes.restricted'] = 'Restringido';
$lang['Packages.!error.manual_activation.valid'] = 'La activación manual debe ser 1 ó 0.';

