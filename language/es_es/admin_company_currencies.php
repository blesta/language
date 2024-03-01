<?php
/**
 * Admin Company Currencies
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyCurrencies.!success.setup_updated'] = 'La configuración de divisas se ha actualizado correctamente.';
$lang['AdminCompanyCurrencies.!success.add_created'] = '¡La moneda %1$s ha sido creada con éxito!';
$lang['AdminCompanyCurrencies.!success.edit_updated'] = 'La moneda %1$s se ha actualizado correctamente.';
$lang['AdminCompanyCurrencies.!success.delete_deleted'] = '¡La moneda %1$s ha sido eliminada con éxito!';
$lang['AdminCompanyCurrencies.!success.rates_updated'] = 'Los tipos de cambio se han actualizado correctamente.';
$lang['AdminCompanyCurrencies.!tooltip.precision'] = 'La precisión es el número de dígitos significativos después del decimal que admite la moneda.';
$lang['AdminCompanyCurrencies.!tooltip.default_currency'] = 'La moneda por defecto utilizada en el sistema. Ajústela a la moneda que prefiera.';
$lang['AdminCompanyCurrencies.!tooltip.show_currency_code'] = 'Marque esta casilla para activar la visualización del código de moneda junto a los precios mostrados';
$lang['AdminCompanyCurrencies.!tooltip.client_set_currency'] = 'Marque esta opción para permitir a los clientes elegir su moneda por defecto entre las disponibles en el sistema.';
$lang['AdminCompanyCurrencies.!tooltip.multi_currency_pricing'] = 'Marque esta opción para permitir que los paquetes se pidan sólo utilizando los precios definidos para ese paquete. Marcar esta opción requiere que se defina el precio para cada divisa que desee aceptar para ese paquete. En otras palabras, esto evita que se realice la conversión de divisas.';
$lang['AdminCompanyCurrencies.!tooltip.exchange_rates_auto_update'] = 'Marque esta casilla para permitir que los tipos de cambio se actualicen automáticamente utilizando uno de los procesadores de tipos de cambio disponibles.';
$lang['AdminCompanyCurrencies.!tooltip.exchange_rates_processor'] = 'Establece el procesador que se utilizará para actualizar los tipos de cambio. Las divisas disponibles varían según el procesador.';
$lang['AdminCompanyCurrencies.!tooltip.exchange_rates_processor_key'] = 'Se necesita una clave API para recuperar los tipos de cambio del procesador seleccionado.';
$lang['AdminCompanyCurrencies.!tooltip.exchange_rates_padding'] = 'Los valores de cambio determinados por un procesador se incrementarán en el porcentaje dado.';
$lang['AdminCompanyCurrencies.!cancel.field_cancel'] = 'Cancelar';
$lang['AdminCompanyCurrencies.setup.page_title'] = 'Configuración > Empresa > Divisas > Configuración de divisas';
$lang['AdminCompanyCurrencies.setup.tooltip_currency_pricing'] = 'Esta opción requiere que el precio del paquete esté establecido en la moneda especificada para que esté disponible para crear nuevos servicios. Si no está marcada y no existen precios de paquetes para la divisa, el precio se calculará en función del tipo de cambio de la divisa predeterminada.

Los servicios de renovación siempre prefieren el precio del paquete en la divisa elegida, pero utilizarán el tipo de cambio de la divisa por defecto si no se especifica para el paquete.';
$lang['AdminCompanyCurrencies.setup.boxtitle_setup'] = 'Configuración de divisas';
$lang['AdminCompanyCurrencies.setup.heading_general'] = 'General';
$lang['AdminCompanyCurrencies.setup.field.default_currency'] = 'Moneda por defecto';
$lang['AdminCompanyCurrencies.setup.field.show_currency_code'] = 'Mostrar código de moneda';
$lang['AdminCompanyCurrencies.setup.field.client_set_currency'] = 'Permitir al cliente fijar la divisa';
$lang['AdminCompanyCurrencies.setup.heading_multicurrency'] = 'Multidivisa';
$lang['AdminCompanyCurrencies.setup.field.multi_currency_pricing'] = 'Utilice los precios por paquete sólo para servicios nuevos';
$lang['AdminCompanyCurrencies.setup.field.exchange_rates_auto_update'] = 'Actualizar automáticamente los tipos de cambio';
$lang['AdminCompanyCurrencies.setup.field.last_updated'] = 'Última actualización de las tarifas';
$lang['AdminCompanyCurrencies.setup.field.exchange_rates_processor'] = 'Procesador de tipos de cambio';
$lang['AdminCompanyCurrencies.setup.field.exchange_rates_processor_key'] = 'Clave API del procesador de tipos de cambio';
$lang['AdminCompanyCurrencies.setup.field.exchange_rates_padding'] = 'Tipos de cambio de las pastillas';
$lang['AdminCompanyCurrencies.setup.field.setupsubmit'] = 'Actualizar ajustes';
$lang['AdminCompanyCurrencies.setup.no_exchange_updated'] = 'Nunca';
$lang['AdminCompanyCurrencies.setup.open_parenthesis'] = '(';
$lang['AdminCompanyCurrencies.setup.closed_parenthesis'] = ')';
$lang['AdminCompanyCurrencies.active.page_title'] = 'Configuración > Empresa > Divisas > Divisas activas';
$lang['AdminCompanyCurrencies.active.boxtitle_active'] = 'Divisas activas';
$lang['AdminCompanyCurrencies.active.categorylink_addcurrency'] = 'Añadir moneda';
$lang['AdminCompanyCurrencies.active.no_results'] = 'No hay monedas activas.';
$lang['AdminCompanyCurrencies.active.text_currency_code'] = 'Código de moneda (ISO 4217)';
$lang['AdminCompanyCurrencies.active.text_format'] = 'Formato';
$lang['AdminCompanyCurrencies.active.text_precision'] = 'Precisión';
$lang['AdminCompanyCurrencies.active.text_exchange_rate'] = 'Tipo de cambio';
$lang['AdminCompanyCurrencies.active.text_exchange_updated'] = 'Última actualización';
$lang['AdminCompanyCurrencies.active.text_options'] = 'Opciones';
$lang['AdminCompanyCurrencies.active.option_edit'] = 'Editar';
$lang['AdminCompanyCurrencies.active.option_delete'] = 'Borrar';
$lang['AdminCompanyCurrencies.active.confirm_delete'] = '¿Está seguro de que desea eliminar esta moneda?';
$lang['AdminCompanyCurrencies.active.no_exchange_updated'] = 'Nunca';
$lang['AdminCompanyCurrencies.add.page_title'] = 'Configuración > Empresa > Divisas > Añadir divisa';
$lang['AdminCompanyCurrencies.add.boxtitle_add'] = 'Añadir moneda';
$lang['AdminCompanyCurrencies.add.field_code'] = 'Código de moneda (ISO 4217)';
$lang['AdminCompanyCurrencies.add.field_format'] = 'Formato';
$lang['AdminCompanyCurrencies.add.field_precision'] = 'Precisión';
$lang['AdminCompanyCurrencies.add.field_prefix'] = 'Prefijo Símbolo';
$lang['AdminCompanyCurrencies.add.field_suffix'] = 'Símbolo del sufijo';
$lang['AdminCompanyCurrencies.add.field_exchange_rate'] = 'Tipo de cambio';
$lang['AdminCompanyCurrencies.add.field_addsubmit'] = 'Crear moneda';
$lang['AdminCompanyCurrencies.add.confirm_add'] = '¿Está seguro de que desea crear esta moneda? El tipo de cambio de esta moneda se sobrescribirá cuando los tipos de cambio se actualicen automáticamente en el sistema. Puede desactivar las actualizaciones automáticas en [Configuración] > [Empresa] > [Divisas] > [Configuración de divisas].';
$lang['AdminCompanyCurrencies.edit.page_title'] = 'Configuración > Empresa > Divisas > Editar divisa';
$lang['AdminCompanyCurrencies.edit.boxtitle_edit'] = 'Editar moneda';
$lang['AdminCompanyCurrencies.edit.field_code'] = 'Código de moneda (ISO 4217)';
$lang['AdminCompanyCurrencies.edit.field_format'] = 'Formato';
$lang['AdminCompanyCurrencies.edit.field_precision'] = 'Precisión';
$lang['AdminCompanyCurrencies.edit.field_prefix'] = 'Prefijo Símbolo';
$lang['AdminCompanyCurrencies.edit.field_suffix'] = 'Símbolo del sufijo';
$lang['AdminCompanyCurrencies.edit.field_exchange_rate'] = 'Tipo de cambio';
$lang['AdminCompanyCurrencies.edit.field_editsubmit'] = 'Editar moneda';
$lang['AdminCompanyCurrencies.edit.confirm_edit'] = '¿Está seguro de que desea actualizar esta moneda? El tipo de cambio de esta moneda se sobrescribirá cuando los tipos de cambio se actualicen automáticamente en el sistema. Puede desactivar las actualizaciones automáticas en [Configuración] > [Empresa] > [Divisas] > [Configuración de divisas].';

