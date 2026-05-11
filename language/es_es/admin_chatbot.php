<?php
/**
 * Admin Chatbot
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminChatbot.index.time_yesterday'] = 'Ayer';
$lang['AdminChatbot.index.time_today'] = 'Hoy';
$lang['AdminChatbot.index.time_hours_ago'] = '%1$s hr ago';
$lang['AdminChatbot.index.time_minutes_ago'] = '%1$s hace un minuto';
$lang['AdminChatbot.index.time_just_now'] = 'Ahora mismo';
$lang['AdminChatbot.index.confirm_delete'] = '¿Seguro que quieres borrar esta conversación?';
$lang['AdminChatbot.index.btn_delete'] = 'Borrar';
$lang['AdminChatbot.!error.model_empty'] = 'Seleccione un modelo antes de enviar un mensaje.';
$lang['AdminChatbot.!error.conversation_create_failed'] = 'No se ha podido crear la conversación. Por favor, inténtalo de nuevo.';
$lang['AdminChatbot.!error.stream_failed'] = 'No se ha obtenido respuesta de la IA. Por favor, inténtelo de nuevo.';
$lang['AdminChatbot.!error.message_empty'] = 'Por favor, introduzca un mensaje.';
$lang['AdminChatbot.!error.conversation_not_found'] = 'Conversación no encontrada.';
$lang['AdminChatbot.!error.unauthorized'] = 'No está autorizado a realizar esta acción.';
$lang['AdminChatbot.index.btn_go_back'] = 'Volver atrás';
$lang['AdminChatbot.index.no_permission_text'] = 'No tiene permiso para utilizar el chatbot de IA. Ponte en contacto con tu administrador para solicitar acceso.';
$lang['AdminChatbot.index.no_permission_title'] = 'Acceso restringido';
$lang['AdminChatbot.index.btn_configure'] = 'Configurar la IA';
$lang['AdminChatbot.index.not_configured_text'] = 'Aún no se ha configurado el chatbot de IA. Configure los ajustes de IA para empezar a utilizar esta función.';
$lang['AdminChatbot.index.not_configured_title'] = 'IA no configurada';
$lang['AdminChatbot.index.truncated_notice'] = 'Esta respuesta se ha truncado debido al límite de tokens. Puedes aumentar los tokens máximos en Configuración &gt; Sistema &gt; IA, o pedir a la IA que continúe.';
$lang['AdminChatbot.index.card_badge_prompt_mode'] = 'Modo Preguntar';
$lang['AdminChatbot.index.context_pill_dismiss'] = 'Cancelar';
$lang['AdminChatbot.index.suggestion_plugin_dev_placeholder'] = '¿Qué estás construyendo?';
$lang['AdminChatbot.index.suggestion_plugin_dev_text'] = 'Obtener ayuda para crear un plugin o módulo';
$lang['AdminChatbot.index.suggestion_plugin_dev_title'] = 'Ayuda para desarrolladores';
$lang['AdminChatbot.index.suggestion_api_query_placeholder'] = '¿Qué quiere hacer a través de la API?';
$lang['AdminChatbot.index.suggestion_api_query_text'] = 'Obtenga ayuda para escribir peticiones a la API de Blesta';
$lang['AdminChatbot.index.suggestion_api_query_title'] = 'Consulta API';
$lang['AdminChatbot.index.suggestion_custom_report_placeholder'] = 'Describa el informe que necesita...';
$lang['AdminChatbot.index.suggestion_custom_report_text'] = 'Generar una consulta SQL para un informe personalizado';
$lang['AdminChatbot.index.suggestion_custom_report_title'] = 'Informe personalizado';
$lang['AdminChatbot.index.suggestion_security_context'] = 'El usuario pregunta sobre las mejores prácticas de seguridad. Cubre los permisos del personal y el control de acceso basado en grupos, configuración de autenticación de dos factores, políticas de contraseñas seguras, mantener Blesta actualizado, configuración SSL/TLS, restricciones de acceso basadas en IP y acceso a logs (Herramientas &gt; Logs). Menciona el cambio de la ruta por defecto del administrador en /config/routes.php a través de Route.admin';
$lang['AdminChatbot.index.suggestion_security_text'] = '¿Qué buenas prácticas de seguridad debo seguir?';
$lang['AdminChatbot.index.suggestion_security_title'] = 'Seguridad';
$lang['AdminChatbot.index.suggestion_clients_context'] = 'El usuario pregunta sobre la gestión de clientes en Blesta. Cubre la creación de nuevos clientes, la edición de perfiles de cliente, la gestión de grupos de clientes (Configuración &gt; Clientes &gt; Grupos de clientes), la configuración de valores predeterminados a nivel de grupo para la facturación y el pago, el débito automático, los avisos y recordatorios de retraso en el pago, la gestión de cuentas de pago y la navegación por la página de perfil de cliente como destino único para todas las acciones del cliente.';
$lang['AdminChatbot.index.suggestion_clients_text'] = '¿Cómo se gestionan las cuentas y grupos de clientes?';
$lang['AdminChatbot.index.suggestion_clients_title'] = 'Gestión de clientes';
$lang['AdminChatbot.index.suggestion_plugins_context'] = 'El usuario pregunta sobre la gestión de plugins en Blesta. Guíale en la instalación de plugins (Ajustes &gt; Plugins &gt; Disponibles), activación/desactivación de plugins, configuración de ajustes de plugins y gestión de permisos de plugins para grupos de personal (Ajustes &gt; Sistema &gt; Personal &gt; Grupos de Personal: Editar). Menciona plugins populares como Support Manager, CMS, Domain Manager, y cómo instalar plugins de terceros vía upload y dónde activarlos.';
$lang['AdminChatbot.index.suggestion_plugins_text'] = '¿Cómo se instalan y configuran los plugins?';
$lang['AdminChatbot.index.suggestion_plugins_title'] = 'Plugins';
$lang['AdminChatbot.index.suggestion_automation_context'] = 'El usuario pregunta sobre automatización y tareas cron en Blesta. Explica cómo configurar la tarea cron del sistema, los tipos de tareas automatizadas que ejecuta Blesta (creación de facturas, procesamiento de pagos, suspensión/anulación de servicios, recordatorios por email) y dónde encontrar el comando cron recomendado en Ajustes &gt; Sistema &gt; Automatización y las tareas individuales y sus tiempos de ejecución y frecuencias en Ajustes &gt; Empresa &gt; Automatización.';
$lang['AdminChatbot.index.suggestion_automation_text'] = '¿Cómo configuro la facturación automatizada y las tareas de servicio?';
$lang['AdminChatbot.index.suggestion_automation_title'] = 'Automatización';
$lang['AdminChatbot.index.suggestion_support_context'] = 'El usuario pregunta sobre el sistema de tickets de soporte en Blesta. Explique cómo crear un departamento de soporte y responder a los tickets utilizando el plugin Support Manager, incluyendo la navegación (Soporte &gt; Departamentos y Soporte &gt; Tickets). Cubra los estados de los tickets, los departamentos, las respuestas predefinidas, la importación de correos electrónicos de tickets a través de tuberías o POP/IMAP y la creación de usuarios de personal y la asignación de departamentos.';
$lang['AdminChatbot.index.suggestion_support_text'] = '¿Cómo gestiono y respondo a las solicitudes de asistencia?';
$lang['AdminChatbot.index.suggestion_support_title'] = 'Tickets de asistencia';
$lang['AdminChatbot.index.suggestion_modules_context'] = 'El usuario pregunta sobre la configuración de la instalación de módulos en Blesta. Guíele a través de la instalación y configuración de módulos en Blesta. Cubra la navegación (Ajustes &gt; Módulos &gt; Disponibles), la adición de credenciales de servidor o API, la creación de paquetes que usen el módulo (Paquetes &gt; Nuevo Paquete). Use cPanel como ejemplo concreto pero mencione que el patrón es aplicable a otros módulos.';
$lang['AdminChatbot.index.suggestion_modules_text'] = '¿Cómo se configura un módulo de servidor como cPanel?';
$lang['AdminChatbot.index.suggestion_modules_title'] = 'Configuración del módulo';
$lang['AdminChatbot.index.suggestion_services_context'] = 'El usuario pregunta sobre el aprovisionamiento de servicios en Blesta. Guíele a través de la adición de un servicio para un cliente, la selección de un paquete, la configuración de los ajustes del módulo y la activación del servicio. Cubra la ruta de navegación (Clientes &gt; Seleccionar cliente &gt; Nuevo servicio), la creación de paquetes (Paquetes &gt; Nuevo paquete) y la selección de términos, la selección de módulos (pestaña Módulo en el nuevo Paquete) y el aprovisionamiento manual frente al automático.';
$lang['AdminChatbot.index.suggestion_services_text'] = '¿Cómo proporciono un nuevo servicio a un cliente?';
$lang['AdminChatbot.index.suggestion_services_title'] = 'Gestión de servicios';
$lang['AdminChatbot.index.suggestion_billing_context'] = 'El usuario pregunta sobre la facturación de clientes en Blesta. Proporcionar una guía paso a paso sobre la creación de facturas. Cubre las rutas de navegación en Blesta (por ejemplo, Clientes &gt; Seleccionar cliente &gt; acción Crear factura o el icono [+] en el widget Facturas), métodos de entrega de facturas, configuración de facturas recurrentes y ajustes de facturación comunes.';
$lang['AdminChatbot.index.suggestion_billing_text'] = '¿Cómo puedo crear y enviar una factura a un cliente?';
$lang['AdminChatbot.index.suggestion_billing_title'] = 'Ayuda sobre facturación';
$lang['AdminChatbot.index.empty_subtitle'] = 'Inicie una conversación escribiendo un mensaje o eligiendo una sugerencia a continuación. El contenido generado por la IA puede contener imprecisiones, sesgos o alucinaciones y no debe considerarse asesoramiento profesional. Esta herramienta no debe utilizarse con fines ilegales o perjudiciales.';
$lang['AdminChatbot.index.empty_title'] = '¿En qué puedo ayudarle hoy?';
$lang['AdminChatbot.index.default_title'] = 'Nueva conversación';
$lang['AdminChatbot.index.new_chat_title'] = 'Nuevo chat';
$lang['AdminChatbot.index.model_label'] = 'Modelo';
$lang['AdminChatbot.index.btn_send'] = 'Enviar';
$lang['AdminChatbot.index.input_placeholder'] = 'Escribe un mensaje...';
$lang['AdminChatbot.index.show_chatbot_only'] = 'Mostrar sólo conversaciones de chatbot';
$lang['AdminChatbot.index.show_all_conversations'] = 'Mostrar todas las conversaciones';
$lang['AdminChatbot.index.no_conversations'] = 'Aún no hay conversaciones';
$lang['AdminChatbot.index.search_placeholder'] = 'Buscar conversaciones...';
$lang['AdminChatbot.index.btn_new_chat'] = 'Nuevo chat';
$lang['AdminChatbot.index.page_title'] = 'Chatbot de IA';

