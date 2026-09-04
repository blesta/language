<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.ru_ru
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.!success.ai_settings_updated'] = 'Настройки искусственного интеллекта успешно обновлены.';
$lang['AdminMain.!success.settings_updated'] = 'Настройки были успешно обновлены.';
$lang['AdminMain.ai.badge_experimental'] = 'ЭКСПЕРИМЕНТАЛЬНО';
$lang['AdminMain.ai.boxtitle_settings'] = 'Настройки ИИ';
$lang['AdminMain.ai.button_configure_ai'] = 'Перейдите к настройкам системного искусственного интеллекта';
$lang['AdminMain.ai.field_add_ai_disclaimer'] = 'Добавьте сгенерированный искусственным интеллектом отказ от ответственности';
$lang['AdminMain.ai.field_add_ai_disclaimer_desc'] = 'Добавьте к автогенерируемым ответам уведомление о том, что они были созданы искусственным интеллектом (рекомендуется для прозрачности)';
$lang['AdminMain.ai.field_analyze_trigger'] = 'Триггер анализа ИИ';
$lang['AdminMain.ai.field_analyze_trigger_desc'] = 'Контролирует, когда запускается анализ ИИ для генерации ответов и выполнения инструментов.';
$lang['AdminMain.ai.field_analyze_trigger_tooltip'] = 'Выберите, когда ИИ должен анализировать тикеты на предмет потенциальных ответов и использования инструментов. "Каждый ответ" анализирует каждое новое сообщение. "Тикет открыт" анализирует только первоначальное открытие тикета.';
$lang['AdminMain.ai.field_assistant_name'] = 'Отображаемое имя помощника искусственного интеллекта';
$lang['AdminMain.ai.field_assistant_name_desc'] = 'Оставьте пустым, чтобы использовать имя по умолчанию: "Поддержка".';
$lang['AdminMain.ai.field_assistant_name_placeholder'] = 'Поддержка';
$lang['AdminMain.ai.field_assistant_name_tooltip'] = 'Имя, отображаемое для генерируемых ИИ ответов в потоках заявок. Это позволяет персонализировать помощника ИИ для вашей службы поддержки.';
$lang['AdminMain.ai.field_auto_reply_enabled'] = 'Включить автоматические ответы на билеты ИИ';
$lang['AdminMain.ai.field_auto_reply_enabled_desc'] = 'Позвольте искусственному интеллекту автоматически отвечать на тикеты, если у него есть высокая степень уверенности в ответе.';
$lang['AdminMain.ai.field_confidence_threshold'] = 'Порог доверия';
$lang['AdminMain.ai.field_confidence_threshold_desc'] = 'Более высокий порог = более консервативный подход (меньше автоматических ответов, выше точность). Рекомендуется: 70 % или выше.';
$lang['AdminMain.ai.field_confidence_threshold_tooltip'] = 'ИИ будет автоматически отвечать на запросы только в том случае, если его уровень доверия соответствует или превышает этот порог. Более высокие значения (90-100 %) являются более консервативными и безопасными. Более низкие значения (60-89 %) приведут к большему количеству автоматических ответов, но с более высоким риском ошибок.';
$lang['AdminMain.ai.field_custom_disclaimer'] = 'Пользовательский текст отказа от ответственности';
$lang['AdminMain.ai.field_custom_disclaimer_desc'] = 'Этот текст будет добавлен ко всем ответам на тикеты, сгенерированным ИИ.';
$lang['AdminMain.ai.field_custom_disclaimer_placeholder'] = 'Этот ответ был создан с помощью искусственного интеллекта.';
$lang['AdminMain.ai.field_custom_disclaimer_tooltip'] = 'Настройте сообщение об отказе от ответственности, добавляемое к ответам, сгенерированным ИИ. Оставьте пустым, чтобы использовать сообщение по умолчанию.';
$lang['AdminMain.ai.field_enabled'] = 'Включите функции искусственного интеллекта для менеджера поддержки';
$lang['AdminMain.ai.field_enabled_desc'] = 'Разрешите использовать в системе тикетов функции, основанные на искусственном интеллекте, включая автоматические ответы, резюме и инструменты.';
$lang['AdminMain.ai.field_max_queue_age_hours'] = 'Максимальный возраст очереди (часы)';
$lang['AdminMain.ai.field_max_queue_age_hours_desc'] = 'Отбрасывает поставленные в очередь ответы AI старше этого количества часов. Должно быть от 1 до 8760 (1 год). По умолчанию равно 24.';
$lang['AdminMain.ai.field_max_queue_age_hours_tooltip'] = 'Ответы клиентов в очереди, возраст которых превышает это значение, будут отбрасываться cron\'ом, а не обрабатываться. Предотвращает ответ ИИ на просроченные тикеты, если cron был отключен и накопилась задолженность.';
$lang['AdminMain.ai.field_max_tokens'] = 'Максимальное количество жетонов';
$lang['AdminMain.ai.field_max_tokens_desc'] = 'Контролирует максимальную длину ответов, генерируемых ИИ. По умолчанию: 4000';
$lang['AdminMain.ai.field_max_tokens_tooltip'] = 'Максимальное количество лексем (слов/фрагментов слов), которые ИИ может сгенерировать за один ответ. Более высокие значения позволяют получать более длинные ответы, но потребляют больше ресурсов. Типичный диапазон: 100-4000 для большинства задач.';
$lang['AdminMain.ai.field_model'] = 'Модель искусственного интеллекта';
$lang['AdminMain.ai.field_model_desc'] = 'Эта модель будет использоваться для всех функций искусственного интеллекта в Support Manager.';
$lang['AdminMain.ai.field_model_tooltip'] = 'Выберите модель искусственного интеллекта для использования функций Support Manager. Различные модели имеют разные возможности и цены.';
$lang['AdminMain.ai.field_override_max_tokens'] = 'Переопределить максимальное количество токенов';
$lang['AdminMain.ai.field_override_max_tokens_desc'] = 'Система по умолчанию: %1$s';
$lang['AdminMain.ai.field_override_model'] = 'Переопределить модель искусственного интеллекта по умолчанию';
$lang['AdminMain.ai.field_override_model_desc'] = 'Система по умолчанию: %1$s';
$lang['AdminMain.ai.field_override_temperature'] = 'Превышение температуры';
$lang['AdminMain.ai.field_override_temperature_desc'] = 'Система по умолчанию: %1$s';
$lang['AdminMain.ai.field_require_human_review'] = 'Требуйте человеческой оценки перед отправкой';
$lang['AdminMain.ai.field_require_human_review_desc'] = 'Автоматически сгенерированные ответы отображаются в тикете для использования сотрудниками (рекомендуется)';
$lang['AdminMain.ai.field_restricted_departments'] = 'Ограничение автоответа департаментам';
$lang['AdminMain.ai.field_restricted_departments_desc'] = 'Выберите, какие отделы тикетов могут получать автоматические ответы AI. Снимите флажок все, чтобы разрешить всем отделам.';
$lang['AdminMain.ai.field_restricted_departments_tooltip'] = 'Разрешите автоматические ответы только для определенных отделов. Снимите флажок, чтобы разрешить все отделы.';
$lang['AdminMain.ai.field_submit'] = 'Сохранить настройки искусственного интеллекта';
$lang['AdminMain.ai.field_system_prompt'] = 'Системная подсказка менеджера поддержки';
$lang['AdminMain.ai.field_system_prompt_desc'] = 'Эта подсказка используется специально для функций Support Manager AI и отменяет глобальную системную подсказку.';
$lang['AdminMain.ai.field_system_prompt_tooltip'] = 'Определите конкретные инструкции для ИИ при работе с тикетами поддержки. Эта подсказка отменяет глобальную системную подсказку и определяет поведение ИИ конкретно в системе тикетов.';
$lang['AdminMain.ai.field_temperature'] = 'Температура';
$lang['AdminMain.ai.field_temperature_desc'] = 'Более низкая температура = больше сосредоточенности, более высокая температура = больше творчества. По умолчанию: 1.0';
$lang['AdminMain.ai.field_temperature_tooltip'] = 'Регулирует случайность в ответах. При более низких значениях (0,0-0,7) получаются более сфокусированные и детерминированные результаты. Более высокие значения (1,3-2,0) дают более творческие и разнообразные результаты. Диапазон: 0,0 - 2,0';
$lang['AdminMain.ai.field_tool_assign_staff'] = 'Назначить сотруднику';
$lang['AdminMain.ai.field_tool_assign_staff_desc'] = 'Позволяет ИИ назначать билеты определенным сотрудникам на основе инструкций системы.';
$lang['AdminMain.ai.field_tool_change_priority'] = 'Изменить приоритет билетов';
$lang['AdminMain.ai.field_tool_change_priority_desc'] = 'Позволяет ИИ корректировать приоритет тикета (в сторону увеличения или уменьшения), если клиент выбрал несоответствующий приоритет или обнаружил его в ходе анализа.';
$lang['AdminMain.ai.field_tool_close_ticket'] = 'Закрыть билет';
$lang['AdminMain.ai.field_tool_close_ticket_desc'] = 'Позволяйте искусственному интеллекту закрывать тикеты в случаях спама, отскочивших сообщений или явно решенных проблем.';
$lang['AdminMain.ai.field_tool_instructions'] = 'Инструкции по использованию инструментов';
$lang['AdminMain.ai.field_tool_instructions_desc'] = 'Предоставьте инструкции и конкретные сценарии, в которых следует использовать инструменты. Этот текст будет включен в системную подсказку при включении инструментов.';
$lang['AdminMain.ai.field_tool_instructions_placeholder'] = 'Пример: - Присваивайте технические вопросы, связанные с серверами Linux, Джону, а с серверами Windows - Дэйву - Закрывайте только те билеты, которые явно являются спамом, автоответчиками или клиент указывает, что билет решен в последнем ответе - Повышайте приоритет срочных вопросов с упоминанием "не работает" или "не в сети" до статуса Emergency - Понижайте приоритет билетов Emergency, если они не являются действительно срочными.';
$lang['AdminMain.ai.field_tool_instructions_tooltip'] = 'Предоставьте ИИ конкретные указания о том, когда и как использовать включенные инструменты. Например, укажите имена сотрудников и области их компетенции для назначения билетов.';
$lang['AdminMain.ai.field_tools_available'] = 'Доступные инструменты';
$lang['AdminMain.ai.field_tools_available_tooltip'] = 'Выберите, какие инструменты разрешено использовать ИИ. Каждый инструмент позволяет выполнять определенные действия, которые ИИ может выполнять при обработке билетов.';
$lang['AdminMain.ai.field_tools_enabled'] = 'Включить инструменты';
$lang['AdminMain.ai.field_tools_enabled_desc'] = 'Позвольте ИИ использовать инструменты для управления тикетами, такие как изменение приоритета, закрытие тикетов или назначение сотрудников.';
$lang['AdminMain.ai.heading_experimental'] = 'Экспериментальные особенности';
$lang['AdminMain.ai.heading_features'] = 'Особенности искусственного интеллекта';
$lang['AdminMain.ai.heading_model'] = 'Конфигурация модели';
$lang['AdminMain.ai.heading_parameters'] = 'Параметры модели';
$lang['AdminMain.ai.heading_replies'] = 'Автоматические ответы';
$lang['AdminMain.ai.heading_system_prompt'] = 'Системная подсказка';
$lang['AdminMain.ai.heading_tools'] = 'Инструменты искусственного интеллекта';
$lang['AdminMain.ai.option_every_reply'] = 'Каждый ответ';
$lang['AdminMain.ai.option_ticket_opened'] = 'Только открытый билет';
$lang['AdminMain.ai.page_title'] = 'Менеджер поддержки &gt; Настройки искусственного интеллекта';
$lang['AdminMain.ai.warning_not_configured_text'] = 'Функции искусственного интеллекта для менеджера поддержки требуют наличия ключа API Blesta AI. Перед включением функций искусственного интеллекта настройте свой ключ API в разделе "Системные настройки" &gt; "Искусственный интеллект".';
$lang['AdminMain.ai.warning_not_configured_title'] = 'Требуется ключ API Blesta AI';
$lang['AdminMain.settings.boxtitle_settings'] = 'Настройки';
$lang['AdminMain.settings.field_avatar'] = 'Аватар';
$lang['AdminMain.settings.field_default_avatar'] = 'Изображение аватара по умолчанию';
$lang['AdminMain.settings.field_submit'] = 'Обновление настроек';
$lang['AdminMain.settings.heading_avatar_settings'] = 'Настройки аватара';
$lang['AdminMain.settings.option_default'] = 'Используйте только пользовательский аватар';
$lang['AdminMain.settings.option_fallback'] = 'Используйте Gravatar, но переопределите, если установлен пользовательский аватар';
$lang['AdminMain.settings.option_gravatar'] = 'Используйте Gravatar';
$lang['AdminMain.settings.page_title'] = 'Менеджер поддержки &gt; Настройки';
$lang['AdminMain.settings.text_avatar_recommendation'] = 'Рекомендуется: 150x150px, JPG или PNG, не более 2 МБ';
$lang['AdminMain.settings.text_remove_avatar'] = 'Удалить изображение';

