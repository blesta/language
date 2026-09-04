<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.!success.ai_settings_updated'] = 'La configuración de la IA se ha actualizado correctamente.';
$lang['AdminMain.!success.settings_updated'] = 'Los ajustes se han actualizado correctamente.';
$lang['AdminMain.ai.badge_experimental'] = 'EXPERIMENTAL';
$lang['AdminMain.ai.boxtitle_settings'] = 'Ajustes AI';
$lang['AdminMain.ai.button_configure_ai'] = 'Ir a Configuración de la IA del sistema';
$lang['AdminMain.ai.field_add_ai_disclaimer'] = 'Añadir descargo de responsabilidad generado por IA';
$lang['AdminMain.ai.field_add_ai_disclaimer_desc'] = 'Añadir un aviso a las respuestas autogeneradas indicando que han sido creadas por la IA (Recomendado por transparencia)';
$lang['AdminMain.ai.field_analyze_trigger'] = 'Disparador de análisis de IA';
$lang['AdminMain.ai.field_analyze_trigger_desc'] = 'Controla cuándo se activa el análisis de IA para generar respuestas y ejecutar herramientas.';
$lang['AdminMain.ai.field_analyze_trigger_tooltip'] = 'Elija cuándo la IA debe analizar los tickets para posibles respuestas y usos de la herramienta. "Cada respuesta" analiza cada nuevo mensaje. "Ticket abierto" solo analiza la apertura inicial del ticket.';
$lang['AdminMain.ai.field_assistant_name'] = 'Asistente AI Nombre para mostrar';
$lang['AdminMain.ai.field_assistant_name_desc'] = 'Dejar en blanco para utilizar el nombre por defecto: "Soporte".';
$lang['AdminMain.ai.field_assistant_name_placeholder'] = 'Ayuda';
$lang['AdminMain.ai.field_assistant_name_tooltip'] = 'El nombre que se muestra para las respuestas generadas por la IA en los hilos de tickets. Esto personaliza el asistente de IA para su equipo de soporte.';
$lang['AdminMain.ai.field_auto_reply_enabled'] = 'Activar respuestas automáticas de AI a los tickets';
$lang['AdminMain.ai.field_auto_reply_enabled_desc'] = 'Permita que la IA responda automáticamente a los tickets cuando tenga un alto grado de certeza sobre la respuesta.';
$lang['AdminMain.ai.field_confidence_threshold'] = 'Umbral de confianza';
$lang['AdminMain.ai.field_confidence_threshold_desc'] = 'Umbral más alto = más conservador (menos respuestas automáticas, mayor precisión). Recomendado: 70% o superior.';
$lang['AdminMain.ai.field_confidence_threshold_tooltip'] = 'La IA sólo responderá automáticamente a los tickets cuando su nivel de confianza alcance o supere este umbral. Los valores más altos (90-100%) son más conservadores y seguros. Los valores más bajos (60-89%) darán lugar a más respuestas automáticas, pero con mayor riesgo de errores.';
$lang['AdminMain.ai.field_custom_disclaimer'] = 'Texto de descargo de responsabilidad personalizado';
$lang['AdminMain.ai.field_custom_disclaimer_desc'] = 'Este texto se añadirá a todas las respuestas de tickets generadas por la IA.';
$lang['AdminMain.ai.field_custom_disclaimer_placeholder'] = 'Esta respuesta se generó con ayuda de IA.';
$lang['AdminMain.ai.field_custom_disclaimer_tooltip'] = 'Personaliza el mensaje de descargo de responsabilidad que se adjunta a las respuestas generadas por la IA. Déjelo en blanco para utilizar el mensaje predeterminado.';
$lang['AdminMain.ai.field_enabled'] = 'Habilitar funciones de IA para Support Manager';
$lang['AdminMain.ai.field_enabled_desc'] = 'Permitir funciones basadas en IA dentro del sistema de tickets, incluidas respuestas, resúmenes y herramientas automatizadas.';
$lang['AdminMain.ai.field_max_queue_age_hours'] = 'Edad máxima de la cola (horas)';
$lang['AdminMain.ai.field_max_queue_age_hours_desc'] = 'Descarta las respuestas AI en cola que tengan más de esta cantidad de horas. Debe estar entre 1 y 8760 (1 año). Por defecto es 24.';
$lang['AdminMain.ai.field_max_queue_age_hours_tooltip'] = 'Las respuestas de clientes en cola anteriores a este valor serán descartadas por el cron en lugar de ser procesadas. Evita que la IA responda a tickets obsoletos si se ha desactivado el cron y se ha acumulado un retraso.';
$lang['AdminMain.ai.field_max_tokens'] = 'Fichas máximas';
$lang['AdminMain.ai.field_max_tokens_desc'] = 'Controla la longitud máxima de las respuestas generadas por la IA. Predeterminado: 4000';
$lang['AdminMain.ai.field_max_tokens_tooltip'] = 'Número máximo de tokens (palabras/piezas de palabra) que la IA puede generar en una sola respuesta. Los valores más altos permiten respuestas más largas pero consumen más recursos. Rango típico: 100-4000 para la mayoría de las tareas.';
$lang['AdminMain.ai.field_model'] = 'Modelo de IA';
$lang['AdminMain.ai.field_model_desc'] = 'Este modelo se utilizará para todas las funciones de IA del Gestor de asistencia.';
$lang['AdminMain.ai.field_model_tooltip'] = 'Seleccione el modelo de IA que desea utilizar específicamente para las funciones de Support Manager. Los distintos modelos tienen capacidades y precios diferentes.';
$lang['AdminMain.ai.field_override_max_tokens'] = 'Anular fichas máximas';
$lang['AdminMain.ai.field_override_max_tokens_desc'] = 'Sistema por defecto: %1$s';
$lang['AdminMain.ai.field_override_model'] = 'Anular el modelo AI por defecto';
$lang['AdminMain.ai.field_override_model_desc'] = 'Sistema por defecto: %1$s';
$lang['AdminMain.ai.field_override_temperature'] = 'Anular temperatura';
$lang['AdminMain.ai.field_override_temperature_desc'] = 'Sistema por defecto: %1$s';
$lang['AdminMain.ai.field_require_human_review'] = 'Exigir la revisión humana antes del envío';
$lang['AdminMain.ai.field_require_human_review_desc'] = 'Las respuestas autogeneradas se muestran dentro del ticket para uso del personal (Recomendado)';
$lang['AdminMain.ai.field_restricted_departments'] = 'Restringir la respuesta automática a los departamentos';
$lang['AdminMain.ai.field_restricted_departments_desc'] = 'Seleccione qué departamentos de tickets pueden recibir respuestas automáticas de AI. Desmarque todo para permitir todos los departamentos.';
$lang['AdminMain.ai.field_restricted_departments_tooltip'] = 'Permitir respuestas automáticas sólo para departamentos de tickets específicos. Deje todas sin marcar para permitir todos los departamentos.';
$lang['AdminMain.ai.field_submit'] = 'Guardar ajustes de IA';
$lang['AdminMain.ai.field_system_prompt'] = 'Mensaje del sistema de gestión de asistencia';
$lang['AdminMain.ai.field_system_prompt_desc'] = 'Este indicador se utiliza específicamente para las funciones de Support Manager AI y anula el indicador global del sistema.';
$lang['AdminMain.ai.field_system_prompt_tooltip'] = 'Define instrucciones específicas para la IA cuando gestiona tickets de soporte. Esta instrucción anula la instrucción global del sistema y define el comportamiento específico de la IA dentro del sistema de tickets.';
$lang['AdminMain.ai.field_temperature'] = 'Temperatura';
$lang['AdminMain.ai.field_temperature_desc'] = 'Temperatura más baja = más centrado, temperatura más alta = más creativo. Predeterminado: 1,0';
$lang['AdminMain.ai.field_temperature_tooltip'] = 'Controla la aleatoriedad de las respuestas. Los valores más bajos (0,0-0,7) producen resultados más centrados y deterministas. Los valores más altos (1,3-2,0) producen resultados más creativos y variados. Intervalo: 0,0 a 2,0';
$lang['AdminMain.ai.field_tool_assign_staff'] = 'Asignar a un miembro del personal';
$lang['AdminMain.ai.field_tool_assign_staff_desc'] = 'Permitir que la IA asigne tickets a miembros específicos del personal en función de las instrucciones del sistema.';
$lang['AdminMain.ai.field_tool_change_priority'] = 'Cambiar la prioridad de las entradas';
$lang['AdminMain.ai.field_tool_change_priority_desc'] = 'Permitir que la IA ajuste la prioridad del ticket (hacia arriba o hacia abajo) cuando el cliente haya seleccionado una prioridad inadecuada o ésta haya sido detectada por el análisis.';
$lang['AdminMain.ai.field_tool_close_ticket'] = 'Cerrar billete';
$lang['AdminMain.ai.field_tool_close_ticket_desc'] = 'Permita que la IA cierre tickets en casos de spam, mensajes rebotados o problemas claramente resueltos.';
$lang['AdminMain.ai.field_tool_instructions'] = 'Instrucciones de uso de la herramienta';
$lang['AdminMain.ai.field_tool_instructions_desc'] = 'Proporciona instrucciones y escenarios específicos en los que deben utilizarse las herramientas. Este texto se incluirá en el mensaje del sistema cuando se activen las herramientas.';
$lang['AdminMain.ai.field_tool_instructions_placeholder'] = 'Ejemplo: - Asignar las cuestiones técnicas relacionadas con los servidores Linux a John, los servidores Windows a Dave - Cerrar sólo los tickets que sean claramente spam, auto-respuestas, o que el cliente indique que el ticket está resuelto en la última respuesta - Aumentar la prioridad de los tickets urgentes que mencionen "caído" o "desconectado" al estado de Emergencia - Disminuir la prioridad de los tickets de Emergencia si no son emergencias reales.';
$lang['AdminMain.ai.field_tool_instructions_tooltip'] = 'Proporcione orientación específica a la IA sobre cuándo y cómo utilizar las herramientas habilitadas. Por ejemplo, especifique los nombres de los miembros del personal y sus áreas de especialización para la asignación de tickets.';
$lang['AdminMain.ai.field_tools_available'] = 'Herramientas disponibles';
$lang['AdminMain.ai.field_tools_available_tooltip'] = 'Seleccione qué herramientas puede utilizar la IA. Cada herramienta permite acciones específicas que la IA puede realizar al procesar tickets.';
$lang['AdminMain.ai.field_tools_enabled'] = 'Habilitar herramientas';
$lang['AdminMain.ai.field_tools_enabled_desc'] = 'Permita que la IA utilice herramientas para la gestión de tickets, como el cambio de prioridad, el cierre de tickets o la asignación a miembros del personal.';
$lang['AdminMain.ai.heading_experimental'] = 'Características experimentales';
$lang['AdminMain.ai.heading_features'] = 'Características de la IA';
$lang['AdminMain.ai.heading_model'] = 'Configuración del modelo';
$lang['AdminMain.ai.heading_parameters'] = 'Parámetros del modelo';
$lang['AdminMain.ai.heading_replies'] = 'Respuestas automáticas';
$lang['AdminMain.ai.heading_system_prompt'] = 'Indicación del sistema';
$lang['AdminMain.ai.heading_tools'] = 'Herramientas de IA';
$lang['AdminMain.ai.option_every_reply'] = 'Cada respuesta';
$lang['AdminMain.ai.option_ticket_opened'] = 'Sólo billete abierto';
$lang['AdminMain.ai.page_title'] = 'Gestor de asistencia &gt; Ajustes AI';
$lang['AdminMain.ai.warning_not_configured_text'] = 'Las funcionalidades de IA para el Gestor de Soporte requieren una clave API de IA de Blesta. Por favor, configura tu clave API en Ajustes del Sistema &gt; Inteligencia Artificial antes de habilitar las funcionalidades AI.';
$lang['AdminMain.ai.warning_not_configured_title'] = 'Se requiere la clave API de Blesta AI';
$lang['AdminMain.settings.boxtitle_settings'] = 'Ajustes';
$lang['AdminMain.settings.field_avatar'] = 'Avatar';
$lang['AdminMain.settings.field_default_avatar'] = 'Imagen de avatar por defecto';
$lang['AdminMain.settings.field_submit'] = 'Actualizar ajustes';
$lang['AdminMain.settings.heading_avatar_settings'] = 'Configuración del avatar';
$lang['AdminMain.settings.option_default'] = 'Utilizar sólo avatar personalizado';
$lang['AdminMain.settings.option_fallback'] = 'Utilizar Gravatar pero anular si se establece un avatar personalizado';
$lang['AdminMain.settings.option_gravatar'] = 'Utilizar Gravatar';
$lang['AdminMain.settings.page_title'] = 'Gestor de asistencia &gt; Configuración';
$lang['AdminMain.settings.text_avatar_recommendation'] = 'Recomendado: 150x150px, JPG o PNG, máx. 2MB';
$lang['AdminMain.settings.text_remove_avatar'] = 'Quitar imagen';

