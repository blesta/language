<?php
/**
 * Admin Module
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminModule.getoptionalfunctions.tooltip_cancelService'] = 'Llamada para realizar acciones del módulo en la cancelación del servicio.';
$lang['AdminModule.getoptionalfunctions.tooltip_suspendService'] = 'Llamada para realizar acciones del módulo en la suspensión del servicio.';
$lang['AdminModule.getoptionalfunctions.tooltip_unsuspendService'] = 'Llamada para realizar acciones del módulo en la suspensión del servicio.';
$lang['AdminModule.getoptionalfunctions.tooltip_renewService'] = 'Llamada para realizar acciones del módulo cuando se renueva un servicio.';
$lang['AdminModule.getoptionalfunctions.tooltip_addPackage'] = 'Realiza cualquier acción necesaria para añadir el paquete en el servidor remoto. Establece Errores de entrada en caso de fallo, impidiendo que se añada el paquete.';
$lang['AdminModule.getoptionalfunctions.tooltip_editPackage'] = 'Realiza cualquier acción necesaria para editar el paquete en el servidor remoto. Establece Errores de entrada en caso de fallo, impidiendo que se edite el paquete.';
$lang['AdminModule.getoptionalfunctions.tooltip_deletePackage'] = 'Elimina el paquete en el servidor remoto. Establece Errores de entrada en caso de fallo, lo que impide que se elimine el paquete.';
$lang['AdminModule.getoptionalfunctions.tooltip_deleteModuleRow'] = 'Borra la fila del módulo en el servidor remoto. Establece Errores de entrada en caso de fallo, lo que impide que se elimine la fila.';
$lang['AdminModule.getoptionalfunctions.tooltip_manageAddRow'] = 'Devuelve la vista renderizada de la página de añadir fila de módulo.';
$lang['AdminModule.getoptionalfunctions.tooltip_manageEditRow'] = 'Devuelve la vista renderizada de la página de la fila del módulo de edición.';
$lang['AdminModule.getoptionalfunctions.tooltip_upgrade'] = 'Realiza la migración de datos de $current_version (la versión instalada actual) a la versión del conjunto de archivos dada. Establece Errores de entrada en caso de fallo, impidiendo que el módulo se actualice.';
$lang['AdminModule.getoptionalfunctions.tooltip_getGroupOrderOptions'] = 'Devuelve un array de métodos de orden de delegación de servicio disponibles. El módulo determinará cómo se define cada método. Por ejemplo, el método "primero" puede implementarse de forma que devuelva la fila del módulo con el menor número de servicios asignados.';
$lang['AdminModule.getoptionalfunctions.tooltip_selectModuleRow'] = 'Determina qué fila de módulos debe intentarse cuando se aprovisiona un servicio para el grupo dado en función del método de orden establecido para ese grupo.';
$lang['AdminModule.getoptionalfunctions.tooltip_getAdminServiceInfo'] = 'Obtiene el contenido HTML que se mostrará al visualizar la información del servicio en la interfaz de administración.';
$lang['AdminModule.getoptionalfunctions.tooltip_getClientServiceInfo'] = 'Obtiene el contenido HTML que se mostrará al visualizar la información del servicio en la interfaz de cliente.';
$lang['AdminModule.getoptionalfunctions.tooltip_checkAvailability'] = 'Comprueba si un nombre de dominio está disponible o no, devuelve boolean.';
$lang['AdminModule.getoptionalfunctions.tooltip_checkTransferAvailability'] = 'Comprueba si un nombre de dominio puede ser transferido, devuelve boolean.';
$lang['AdminModule.getoptionalfunctions.tooltip_getDomainInfo'] = 'Obtiene la información de un nombre de dominio determinado.';
$lang['AdminModule.getoptionalfunctions.tooltip_getExpirationDate'] = 'Devuelve la fecha de caducidad de un nombre de dominio dado.';
$lang['AdminModule.getoptionalfunctions.tooltip_getTldPricing'] = 'Devuelve una matriz que contiene el precio de coste de todos los TLD disponibles';
$lang['AdminModule.getoptionalfunctions.tooltip_registerDomain'] = 'Realiza cualquier acción necesaria para registrar un nuevo nombre de dominio. Establece Errores de entrada en caso de fallo, impidiendo el registro del nombre de dominio.';
$lang['AdminModule.getoptionalfunctions.tooltip_renewDomain'] = 'Realiza cualquier acción necesaria para renovar un nombre de dominio existente. Establece Errores de entrada en caso de fallo, impidiendo la renovación del nombre de dominio.';
$lang['AdminModule.getoptionalfunctions.tooltip_transferDomain'] = 'Realiza cualquier acción necesaria para transferir un nombre de dominio. Establece Errores de entrada en caso de fallo, impidiendo que se transfiera el nombre de dominio.';
$lang['AdminModule.getoptionalfunctions.tooltip_getDomainContacts'] = 'Devuelve una matriz que contiene todos los contactos asociados al nombre de dominio.';
$lang['AdminModule.getoptionalfunctions.tooltip_getDomainIsLocked'] = 'Devuelve si el dominio está bloqueado o no, devuelve boolean.';
$lang['AdminModule.getoptionalfunctions.tooltip_getDomainNameServers'] = 'Devuelve los servidores de nombres del dominio.';
$lang['AdminModule.getoptionalfunctions.tooltip_lockDomain'] = 'Realiza cualquier acción necesaria para bloquear el dominio. Establece Errores de entrada en caso de fallo, impidiendo que se bloquee el dominio.';
$lang['AdminModule.getoptionalfunctions.tooltip_unlockDomain'] = 'Realiza cualquier acción necesaria para desbloquear el dominio. Establece Errores de entrada en caso de fallo, impidiendo que se desbloquee el dominio.';
$lang['AdminModule.getoptionalfunctions.tooltip_updateEppCode'] = 'Realiza cualquier acción necesaria para actualizar el código EPP o de Autorización del dominio. Establece Errores de entrada en caso de fallo, impidiendo que se actualice el código.';
$lang['AdminModule.getoptionalfunctions.tooltip_restoreDomain'] = 'Realiza cualquier acción necesaria para restaurar un dominio. Establece Errores de entrada en caso de fallo, impidiendo que se restaure el dominio.';
$lang['AdminModule.getoptionalfunctions.tooltip_setNameserverIps'] = 'Establece los servidores de nombres para un nombre de dominio determinado.';
$lang['AdminModule.getoptionalfunctions.tooltip_sendEppEmail'] = 'Realiza cualquier acción necesaria para enviar un correo electrónico que contenga el código EPP.';
$lang['AdminModule.getoptionalfunctions.tooltip_resendTransferEmail'] = 'Reenvía el email de verificación de transferencia de dominio.';
$lang['AdminModule.getoptionalfunctions.tooltip_setDomainContacts'] = 'Actualiza la lista de contactos asociados a un dominio.';
$lang['AdminModule.getoptionalfunctions.tooltip_setDomainNameservers'] = 'Asigna nuevos servidores de nombres al dominio.';
$lang['AdminModule.index.page_title'] = 'Generador de extensiones - %1$s';
$lang['AdminModule.index.boxtitle_extension_generator'] = 'Generador de extensiones - Módulo';
$lang['AdminModule.basic.heading_basic'] = 'Información básica';
$lang['AdminModule.basic.heading_authors'] = 'Autores';
$lang['AdminModule.basic.heading_tlds'] = 'TLD admitidos';
$lang['AdminModule.basic.description'] = 'Descripción';
$lang['AdminModule.basic.logo'] = 'Logotipo';
$lang['AdminModule.basic.module_row'] = 'Módulo Fila Nombre';
$lang['AdminModule.basic.module_row_plural'] = 'Nombre de la fila del módulo (plural)';
$lang['AdminModule.basic.module_group'] = 'Etiqueta de grupo de módulos';
$lang['AdminModule.basic.module_type'] = 'Tipo de módulo';
$lang['AdminModule.basic.module_type_generic'] = 'Genérico';
$lang['AdminModule.basic.module_type_registrar'] = 'Registrador';
$lang['AdminModule.basic.author_name'] = 'Nombre del autor';
$lang['AdminModule.basic.author_url'] = 'Autor URL';
$lang['AdminModule.basic.text_options'] = 'Opciones';
$lang['AdminModule.basic.author_row_add'] = 'Añadir autor';
$lang['AdminModule.basic.text_remove'] = 'Eliminar';
$lang['AdminModule.basic.static_tlds'] = 'Definir estáticamente los TLD';
$lang['AdminModule.basic.tlds'] = 'TLDs';
$lang['AdminModule.basic.placeholder_tlds'] = '.com,.net,.org';
$lang['AdminModule.basic.tooltip_description'] = 'La descripción que aparece en el listado de módulos';
$lang['AdminModule.basic.tooltip_logo'] = 'El logotipo que aparece en el listado de módulos';
$lang['AdminModule.basic.tooltip_module_row'] = 'Término con el que se hace referencia a una única fila de módulo para este módulo.';
$lang['AdminModule.basic.tooltip_module_row_plural'] = 'Término con el que se hace referencia a varias filas de módulos para este módulo.';
$lang['AdminModule.basic.tooltip_module_group'] = 'Término con el que se hace referencia a los grupos de filas de este módulo';
$lang['AdminModule.basic.tooltip_module_type'] = 'Si se trata de un módulo genérico o de un módulo de registro de dominios';
$lang['AdminModule.basic.tooltip_static_tlds'] = 'Defina los TLD admitidos por este módulo como una lista separada por comas (por ejemplo, .com,.net,.org)';
$lang['AdminModule.basic.placeholder_module_row'] = 'p. ej. Servidor';
$lang['AdminModule.basic.placeholder_module_row_plural'] = 'Por ejemplo, servidores';
$lang['AdminModule.basic.placeholder_module_group'] = 'p. ej. Grupo de servidores';
$lang['AdminModule.basic.placeholder_author_name'] = 'por ejemplo, Blesta';
$lang['AdminModule.basic.placeholder_author_url'] = 'Por ejemplo: https://blesta.com/';
$lang['AdminModule.basic.fields'] = 'Siguiente - Campos del módulo';
$lang['AdminModule.basic.confirm'] = 'Siguiente - Confirmación';
$lang['AdminModule.fields.heading_module_row_fields'] = 'Campos de fila del módulo';
$lang['AdminModule.fields.heading_package_fields'] = 'Campos del paquete';
$lang['AdminModule.fields.heading_service_fields'] = 'Campos de servicio';
$lang['AdminModule.fields.name'] = 'Nombre';
$lang['AdminModule.fields.label'] = 'Etiqueta';
$lang['AdminModule.fields.type'] = 'Tipo';
$lang['AdminModule.fields.tooltip'] = 'Texto de ayuda';
$lang['AdminModule.fields.name_key'] = 'Nombre Clave';
$lang['AdminModule.fields.tooltip_name'] = 'El nombre del campo en la base de código';
$lang['AdminModule.fields.tooltip_label'] = 'Nombre de visualización del campo';
$lang['AdminModule.fields.tooltip_type'] = 'El tipo de campo a crear (casilla de verificación, texto, etc.)';
$lang['AdminModule.fields.tooltip_tooltip'] = 'El texto del tooltip que se mostrará junto al campo (déjelo vacío para no tener tooltip)';
$lang['AdminModule.fields.tooltip_name_key'] = 'Campo por el que Blesta determina el nombre de una fila de paquete/servicio/módulo.';
$lang['AdminModule.fields.placeholder_module_name'] = 'por ejemplo, module_field';
$lang['AdminModule.fields.placeholder_module_label'] = 'Por ejemplo, Módulo Campo';
$lang['AdminModule.fields.placeholder_package_name'] = 'p. ej. campo_paquete';
$lang['AdminModule.fields.placeholder_package_label'] = 'p. ej. Campo Paquete';
$lang['AdminModule.fields.placeholder_service_name'] = 'por ejemplo, service_field';
$lang['AdminModule.fields.placeholder_service_label'] = 'p. ej. Campo de servicio';
$lang['AdminModule.fields.module_row_add'] = 'Añadir campo de fila de módulo';
$lang['AdminModule.fields.package_row_add'] = 'Añadir campo de paquete';
$lang['AdminModule.fields.service_row_add'] = 'Añadir campo de servicio';
$lang['AdminModule.fields.text_options'] = 'Opciones';
$lang['AdminModule.fields.text_remove'] = 'Eliminar';
$lang['AdminModule.fields.features'] = 'Siguiente - Características adicionales';
$lang['AdminModule.fields.package_fields_epp_code_label'] = 'Código PPE';
$lang['AdminModule.fields.package_fields_epp_code_tooltip'] = 'Si se permite a los usuarios solicitar un Código EPP a través de la interfaz de servicio de Blesta.';
$lang['AdminModule.fields.service_fields_domain_label'] = 'Dominio';
$lang['AdminModule.features.heading_features'] = 'Características adicionales';
$lang['AdminModule.features.heading_service_tabs'] = 'Pestañas de gestión de servicios';
$lang['AdminModule.features.heading_cron_tasks'] = 'Tareas Cron';
$lang['AdminModule.features.heading_optional_functions'] = 'Funciones opcionales';
$lang['AdminModule.features.method_name'] = 'Nombre del método';
$lang['AdminModule.features.label'] = 'Etiqueta';
$lang['AdminModule.features.level'] = 'Nivel';
$lang['AdminModule.features.name'] = 'Nombre';
$lang['AdminModule.features.description'] = 'Descripción';
$lang['AdminModule.features.type'] = 'Tipo';
$lang['AdminModule.features.time'] = 'Hora de inicio/Intervalo';
$lang['AdminModule.features.tooltip_method_name'] = 'El nombre del método que se generará para esta pestaña en la base de código (en la forma camelCaseMethodName)';
$lang['AdminModule.features.tooltip_tab_label'] = 'El nombre de visualización de la ficha de servicio';
$lang['AdminModule.features.tooltip_level'] = 'Nivel de interfaz en el que se mostrará la ficha (personal o cliente)';
$lang['AdminModule.features.tooltip_name'] = 'El nombre de la tarea cron en la base de código';
$lang['AdminModule.features.tooltip_cron_label'] = 'El nombre para mostrar de la tarea cron';
$lang['AdminModule.features.tooltip_description'] = 'La descripción que aparece en la página de la lista de tareas cron';
$lang['AdminModule.features.tooltip_type'] = 'El tipo de temporización que se utilizará para la tarea cron (tiempo o intervalo)';
$lang['AdminModule.features.tooltip_time'] = 'La hora diaria de 24 horas en que debe ejecutarse esta tarea (por ejemplo, "14:25") O El intervalo, en minutos, en que debe ejecutarse esta tarea cron';
$lang['AdminModule.features.placeholder_method_name'] = 'por ejemplo, tabChangePassword';
$lang['AdminModule.features.placeholder_tab_label'] = 'Por ejemplo, Cambiar contraseña';
$lang['AdminModule.features.placeholder_name'] = 'por ejemplo, mi_tarea_cron';
$lang['AdminModule.features.placeholder_cron_label'] = 'Por ejemplo, Mi tarea Cron';
$lang['AdminModule.features.placeholder_time'] = 'por ejemplo, 14:25 o 60';
$lang['AdminModule.features.service_tab_row_add'] = 'Añadir pestaña de gestión de servicios';
$lang['AdminModule.features.cron_task_row_add'] = 'Añadir tarea Cron';
$lang['AdminModule.features.text_options'] = 'Opciones';
$lang['AdminModule.features.text_remove'] = 'Eliminar';
$lang['AdminModule.features.confirm'] = 'Siguiente - Confirmación';

