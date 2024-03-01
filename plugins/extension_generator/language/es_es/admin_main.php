<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.!error.name_taken'] = 'Este nombre entra en conflicto con un directorio de extensión existente.';
$lang['AdminMain.!error.generation_failed'] = 'No se ha podido generar su extensión.  Excepción generada: %1$s';
$lang['AdminMain.!notice.type_warning'] = 'Cambiar el tipo de extensión borrará irreversiblemente todos los ajustes guardados para esta extensión.';
$lang['AdminMain.!notice.file_overwrite'] = 'Los archivos para esta extensión ya existen en los archivos de Blesta y se sobrescribirán si utilizas el directorio de Blesta.';
$lang['AdminMain.!notice.updating_installed_extension'] = 'Esta extensión está actualmente instalada. Se recomienda encarecidamente que la desinstale antes de regenerar los archivos o podría dañar la consistencia de su base de datos.';
$lang['AdminMain.!success.package_deleted'] = 'La extensión se ha eliminado correctamente';
$lang['AdminMain.!success.module_created'] = 'El nuevo módulo se ha generado correctamente y se puede encontrar en %1$s';
$lang['AdminMain.!success.plugin_created'] = 'El nuevo plugin se ha generado correctamente y se puede encontrar en %1$s';
$lang['AdminMain.!success.merchant_created'] = 'La nueva pasarela se ha generado correctamente y puede encontrarse en %1$s';
$lang['AdminMain.!success.nonmerchant_created'] = 'La nueva pasarela se ha generado correctamente y puede encontrarse en %1$s';
$lang['AdminMain.getfilelocations.module'] = 'Directorio de módulos Blesta';
$lang['AdminMain.getfilelocations.plugin'] = 'Directorio de plugins de Blesta';
$lang['AdminMain.getfilelocations.merchant'] = 'Directorio de Blesta Merchant Gateway';
$lang['AdminMain.getfilelocations.nonmerchant'] = 'Directorio de pasarelas no comerciales de Blesta';
$lang['AdminMain.getfilelocations.upload'] = 'Directorio de cargas de Blesta';
$lang['AdminMain.getfilelocations.custom'] = 'A medida';
$lang['AdminMain.index.page_title'] = 'Generador de extensiones';
$lang['AdminMain.index.boxtitle_extension_generator'] = 'Generador de extensiones';
$lang['AdminMain.index.boxtitle_extensions'] = 'Generador de extensiones - Extensiones';
$lang['AdminMain.index.extension_add'] = 'Añadir extensión';
$lang['AdminMain.index.heading_id'] = 'ID';
$lang['AdminMain.index.heading_name'] = 'Nombre';
$lang['AdminMain.index.heading_type'] = 'Tipo';
$lang['AdminMain.index.heading_form_type'] = 'Tipo de formulario';
$lang['AdminMain.index.heading_code_examples'] = 'Ejemplos de códigos';
$lang['AdminMain.index.heading_date_updated'] = 'Fecha de actualización';
$lang['AdminMain.index.heading_options'] = 'Opciones';
$lang['AdminMain.index.option_edit'] = 'Editar';
$lang['AdminMain.index.option_delete'] = 'Borrar';
$lang['AdminMain.index.text_confirm_delete'] = '¿Está seguro de que desea eliminar esta extensión?';
$lang['AdminMain.index.extensions_no_results'] = 'En este momento no hay prórrogas.';
$lang['AdminMain.general.heading_general_settings'] = 'Ajustes generales';
$lang['AdminMain.general.name'] = 'Nombre';
$lang['AdminMain.general.type'] = 'Tipo de extensión';
$lang['AdminMain.general.form_type'] = 'Tipo de formulario';
$lang['AdminMain.general.code_examples'] = 'Incluir código de ejemplo';
$lang['AdminMain.general.basic_info'] = 'Siguiente - Información básica';
$lang['AdminMain.general.tooltip_name'] = 'El nombre para mostrar de la extensión. También se utiliza para crear diversos códigos. Por ejemplo, si el nombre es My Module, entonces el directorio del módulo será my_module, y el nombre de la clase será MyModule.  Para los plugins no incluya la palabra "plugin" en el nombre ya que causa algunos problemas con la generación de código.';
$lang['AdminMain.general.tooltip_type'] = 'Los módulos gestionan muchas funcionalidades de servicio, incluyendo el aprovisionamiento de servicios en servidores remotos. Los plugins son potentes integraciones capaces de hacer casi cualquier cosa en Blesta. Las pasarelas de comercio procesan los pagos manteniendo a los clientes en el interfaz de Blesta.  Las pasarelas no comerciales envían a los clientes al sitio de un procesador de pagos para completar el pago.';
$lang['AdminMain.general.tooltip_form_type'] = 'Basic para utilizar una versión muy truncada del formulario de extensión, incluyendo sólo lo mínimo necesario para generar la extensión.';
$lang['AdminMain.general.tooltip_code_examples'] = 'Compruebe que incluye líneas de código de ejemplo comentadas para funciones como Cron Tasks, listas de eventos y vínculos, etc.';
$lang['AdminMain.general.placeholder_name'] = 'Nombre de la extensión';
$lang['AdminMain.confirm.heading_confirm'] = 'Confirmación';
$lang['AdminMain.confirm.text_generation'] = 'La configuración de la extensión está completa.  Puede revisar cualquier sección haciendo clic en los nodos de la barra de progreso.  Haga clic en "Generar extensión" para finalizar y generar automáticamente los archivos para su extensión.';
$lang['AdminMain.confirm.location'] = 'Extensión Ubicación';
$lang['AdminMain.confirm.tooltip_location'] = 'El directorio en el que cargar los archivos de extensión generados.';
$lang['AdminMain.confirm.custom_path'] = 'Ruta personalizada';
$lang['AdminMain.confirm.generate'] = 'Generar extensión';

