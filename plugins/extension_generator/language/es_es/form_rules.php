<?php
/**
 * Form Rules
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['FormRules.general.name.format'] = 'Los nombres de las extensiones sólo pueden contener caracteres alfanuméricos, guiones bajos y espacios.';
$lang['FormRules.modulebasic.module_row.empty'] = 'Introduzca el nombre de la fila del módulo.';
$lang['FormRules.modulebasic.module_row_plural.empty'] = 'Por favor, añada un nombre de fila de módulo plural.';
$lang['FormRules.modulebasic.module_group.empty'] = 'Introduzca una etiqueta de grupo de módulos.';
$lang['FormRules.modulebasic.authors[][name].empty'] = 'Introduzca un nombre para cada autor.';
$lang['FormRules.modulefields.module_rows[][name].format'] = 'Introduzca un nombre para cada campo de fila del módulo con el formato snake_case_name.';
$lang['FormRules.modulefields.module_rows[][label].empty'] = 'Introduzca una etiqueta para cada campo de fila del módulo.';
$lang['FormRules.modulefields.module_rows[][type].valid'] = 'Una o más filas del módulo tiene un tipo no válido.';
$lang['FormRules.modulefields.module_rows[][name_key].valid'] = 'Si se establece un campo de fila de módulo como la clave de nombre debe establecerse en true o false.';
$lang['FormRules.modulefields.service_fields[][name].format'] = 'Introduzca un nombre para cada campo de servicio con el formato snake_case_name.';
$lang['FormRules.modulefields.service_fields[][label].empty'] = 'Introduzca una etiqueta para cada campo de servicio.';
$lang['FormRules.modulefields.service_fields[][type].valid'] = 'Uno o más campos de servicio tienen un tipo no válido.';
$lang['FormRules.modulefields.service_fields[][name_key].valid'] = 'Si se establece un campo de servicio como la clave de nombre debe establecerse en true o false.';
$lang['FormRules.modulefields.package_fields[][name].format'] = 'Por favor, introduzca un nombre para cada campo de paquete en el formato snake_case_name.';
$lang['FormRules.modulefields.package_fields[][label].empty'] = 'Introduzca una etiqueta para cada campo de envase.';
$lang['FormRules.modulefields.package_fields[][type].valid'] = 'Uno o más campos del paquete tienen un tipo no válido.';
$lang['FormRules.modulefields.package_fields[][name_key].valid'] = 'Si se establece un campo de paquete como la clave de nombre debe establecerse en true o false.';
$lang['FormRules.modulefeatures.service_tabs[][method_name].format'] = 'Introduzca un nombre de método para cada ficha de servicio con el formato camelCaseName.';
$lang['FormRules.modulefeatures.service_tabs[][label].empty'] = 'Introduzca una etiqueta para cada ficha de servicio.';
$lang['FormRules.modulefeatures.service_tabs[][level].valid'] = 'Una o varias fichas de servicio tienen un nivel no válido.';
$lang['FormRules.modulefeatures.cron_tasks[][name].format'] = 'Por favor, introduzca un nombre de método para cada tarea cron en el formato snake_case_name.';
$lang['FormRules.modulefeatures.cron_tasks[][label].empty'] = 'Introduzca una etiqueta para cada tarea cron.';
$lang['FormRules.modulefeatures.cron_tasks[][type].valid'] = 'Una o varias tareas cron tienen un tipo no válido.';
$lang['FormRules.modulefeatures.cron_tasks[][time].format'] = 'Introduzca una hora en formato 00:00 o un intervalo numérico.';
$lang['FormRules.pluginbasic.authors[][name].empty'] = 'Introduzca un nombre para cada autor.';
$lang['FormRules.plugindatabase.tables[][name].format'] = 'Por favor, introduzca un nombre de método para cada tabla en el formato snake_case_name.';
$lang['FormRules.plugindatabase.tables[][columns][][name].format'] = 'Introduzca un nombre de método para cada columna con el formato snake_case_name.';
$lang['FormRules.plugindatabase.tables[][columns][][type].valid'] = 'Una o más columnas tienen un tipo no válido.';
$lang['FormRules.plugindatabase.tables[][columns][][length].empty'] = 'La longitud debe tener el formato \'a\',\'b\',\'c\' para las columnas enum, vacío para las columnas de texto y fecha-hora, y numérico para todas las demás.';
$lang['FormRules.plugindatabase.tables[][columns][][nullable].valid'] = 'Nullable debe establecerse como true o false para cada columna.';
$lang['FormRules.plugindatabase.tables[][columns][][primary].valid'] = 'Primary debe establecerse en true o false para cada columna.';
$lang['FormRules.pluginintegrations.actions[][location].valid'] = 'Por favor, introduzca una ubicación de acción válida.';
$lang['FormRules.pluginintegrations.actions[][controller].format'] = 'Por favor, introduzca un controlador para cada acción en el formato snake_case_name.';
$lang['FormRules.pluginintegrations.actions[][action].format'] = 'Introduzca una acción para cada acción en minúsculas.';
$lang['FormRules.pluginintegrations.actions[][name].empty'] = 'Introduzca un nombre para cada acción.';
$lang['FormRules.pluginintegrations.events[][event].empty'] = 'Introduzca un nombre para cada evento.';
$lang['FormRules.pluginintegrations.events[][callback].format'] = 'Introduzca un método de devolución de llamada para cada evento en el formato camelCaseName.';
$lang['FormRules.pluginintegrations.cards[][level].valid'] = 'Una o más tarjetas tienen un nivel no válido.';
$lang['FormRules.pluginintegrations.cards[][callback].format'] = 'Introduzca un método de devolución de llamada para cada tarjeta en el formato camelCaseName.';
$lang['FormRules.pluginintegrations.cards[][label].empty'] = 'Introduzca una etiqueta para cada tarjeta.';
$lang['FormRules.merchantbasic.authors[][name].empty'] = 'Introduzca un nombre para cada autor.';
$lang['FormRules.merchantbasic.currencies.format'] = 'Introduzca las divisas en formato de tres caracteres separados por comas (por ejemplo, USD,EUR,JPY).';
$lang['FormRules.merchantfields.fields[][name].format'] = 'Introduzca un nombre para cada campo con el formato snake_case_name.';
$lang['FormRules.merchantfields.fields[][label].empty'] = 'Introduzca una etiqueta para cada campo.';
$lang['FormRules.merchantfields.fields[][type].valid'] = 'Uno o más campos tienen un tipo no válido.';
$lang['FormRules.nonmerchantbasic.authors[][name].empty'] = 'Introduzca un nombre para cada autor.';
$lang['FormRules.nonmerchantbasic.currencies.format'] = 'Introduzca las divisas en formato de tres caracteres separados por comas (por ejemplo, USD,EUR,JPY).';
$lang['FormRules.nonmerchantfields.fields[][name].format'] = 'Introduzca un nombre para cada campo con el formato snake_case_name.';
$lang['FormRules.nonmerchantfields.fields[][label].empty'] = 'Introduzca una etiqueta para cada campo.';
$lang['FormRules.nonmerchantfields.fields[][type].valid'] = 'Uno o más campos tienen un tipo no válido.';

