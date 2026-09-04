<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.bg_bg
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.!success.ai_settings_updated'] = 'Настройките на изкуствения интелект са актуализирани успешно.';
$lang['AdminMain.!success.settings_updated'] = 'Настройките са актуализирани успешно.';
$lang['AdminMain.ai.badge_experimental'] = 'ЕКСПЕРИМЕНТАЛНО';
$lang['AdminMain.ai.boxtitle_settings'] = 'Настройки на AI';
$lang['AdminMain.ai.button_configure_ai'] = 'Отидете на System AI Settings';
$lang['AdminMain.ai.field_add_ai_disclaimer'] = 'Добавяне на отказ от отговорност, генериран от AI';
$lang['AdminMain.ai.field_add_ai_disclaimer_desc'] = 'Добавяне на известие към автоматично генерираните отговори, че са създадени от AI (Препоръчва се за прозрачност)';
$lang['AdminMain.ai.field_analyze_trigger'] = 'Анализ на AI Trigger';
$lang['AdminMain.ai.field_analyze_trigger_desc'] = 'Контролира кога се задейства AI анализът за генериране на отговори и изпълнение на инструменти.';
$lang['AdminMain.ai.field_analyze_trigger_tooltip'] = 'Изберете кога AI да анализира билетите за потенциални отговори и използване на инструменти. "Всеки отговор" анализира всяко ново съобщение. "Отворен билет" анализира само първоначалното отваряне на билета.';
$lang['AdminMain.ai.field_assistant_name'] = 'Име на дисплея на AI Assistant';
$lang['AdminMain.ai.field_assistant_name_desc'] = 'Оставете празно, за да използвате името по подразбиране: "Support"';
$lang['AdminMain.ai.field_assistant_name_placeholder'] = 'Подкрепа';
$lang['AdminMain.ai.field_assistant_name_tooltip'] = 'Името, което се показва за отговорите, генерирани от изкуствен интелект, в нишките на билетите. Това персонализира асистента с изкуствен интелект за вашия екип по поддръжка.';
$lang['AdminMain.ai.field_auto_reply_enabled'] = 'Активиране на автоматични отговори на AI Ticket';
$lang['AdminMain.ai.field_auto_reply_enabled_desc'] = 'Позволете на изкуствения интелект да отговаря автоматично на заявките, когато има висока степен на сигурност за отговора.';
$lang['AdminMain.ai.field_confidence_threshold'] = 'Праг на доверителност';
$lang['AdminMain.ai.field_confidence_threshold_desc'] = 'По-висок праг = по-консервативен (по-малко автоматични отговори, по-висока точност). Препоръчва се: 70% или повече.';
$lang['AdminMain.ai.field_confidence_threshold_tooltip'] = 'ИИ ще отговаря автоматично на заявки само когато нивото на доверие отговаря на този праг или го надхвърля. По-високите стойности (90-100%) са по-консервативни и по-безопасни. По-ниските стойности (60-89%) ще доведат до повече автоматични отговори, но с по-висок риск от грешки.';
$lang['AdminMain.ai.field_custom_disclaimer'] = 'Персонализиран текст за отказ от отговорност';
$lang['AdminMain.ai.field_custom_disclaimer_desc'] = 'Този текст ще бъде добавен към всички отговори на билети, генерирани от AI.';
$lang['AdminMain.ai.field_custom_disclaimer_placeholder'] = 'Този отговор е генериран с помощта на AI.';
$lang['AdminMain.ai.field_custom_disclaimer_tooltip'] = 'Персонализиране на съобщението за отказ от отговорност, което се добавя към отговорите, генерирани от AI. Оставете празно, за да използвате съобщението по подразбиране.';
$lang['AdminMain.ai.field_enabled'] = 'Активиране на функциите за изкуствен интелект за мениджъра на поддръжката';
$lang['AdminMain.ai.field_enabled_desc'] = 'Разрешете функции, задвижвани от изкуствен интелект, в системата за тикети, включително автоматични отговори, резюмета и инструменти.';
$lang['AdminMain.ai.field_max_queue_age_hours'] = 'Максимална продължителност на опашката (часове)';
$lang['AdminMain.ai.field_max_queue_age_hours_desc'] = 'Отхвърляне на чакащите отговори на AI, които са по-стари от този брой часове. Трябва да е между 1 и 8760 (1 година). По подразбиране е 24.';
$lang['AdminMain.ai.field_max_queue_age_hours_tooltip'] = 'Отговорите на клиенти, които са по-стари от тази стойност, ще бъдат изхвърлени от cron, вместо да бъдат обработени. Предотвратява отговорите на ИИ на застарели билети, ако cron е бил деактивиран и се е натрупало изоставане.';
$lang['AdminMain.ai.field_max_tokens'] = 'Максимален брой жетони';
$lang['AdminMain.ai.field_max_tokens_desc'] = 'Контролира максималната дължина на отговорите, генерирани от AI. По подразбиране: 4000';
$lang['AdminMain.ai.field_max_tokens_tooltip'] = 'Максимален брой лексеми (думи/части от думи), които изкуственият интелект може да генерира в един отговор. По-високите стойности позволяват по-дълги отговори, но изразходват повече ресурси. Типичен диапазон: 100-4000 за повечето задачи.';
$lang['AdminMain.ai.field_model'] = 'Модел на AI';
$lang['AdminMain.ai.field_model_desc'] = 'Този модел ще се използва за всички функции на изкуствения интелект в Support Manager.';
$lang['AdminMain.ai.field_model_tooltip'] = 'Изберете модела на AI, който да използвате специално за функциите на Support Manager. Различните модели имат различни възможности и цени.';
$lang['AdminMain.ai.field_override_max_tokens'] = 'Отмяна на максималния брой жетони';
$lang['AdminMain.ai.field_override_max_tokens_desc'] = 'Система по подразбиране: %1$s';
$lang['AdminMain.ai.field_override_model'] = 'Отмяна на модела на AI по подразбиране';
$lang['AdminMain.ai.field_override_model_desc'] = 'Система по подразбиране: %1$s';
$lang['AdminMain.ai.field_override_temperature'] = 'Преустановяване на температурата';
$lang['AdminMain.ai.field_override_temperature_desc'] = 'Система по подразбиране: %1$s';
$lang['AdminMain.ai.field_require_human_review'] = 'Изискване за човешки преглед преди изпращане';
$lang['AdminMain.ai.field_require_human_review_desc'] = 'Автоматично генерираните отговори се показват в билета за ползване от персонала (Препоръчително)';
$lang['AdminMain.ai.field_restricted_departments'] = 'Ограничаване на автоматичните отговори до отделите';
$lang['AdminMain.ai.field_restricted_departments_desc'] = 'Изберете кои отдели за билети могат да получават автоматични отговори от AI. Махнете отметката за всички, за да разрешите на всички отдели.';
$lang['AdminMain.ai.field_restricted_departments_tooltip'] = 'Разрешете автоматични отговори само за определени отдели на билетите. Оставете всички без отметка, за да разрешите всички отдели.';
$lang['AdminMain.ai.field_submit'] = 'Запазване на настройките на AI';
$lang['AdminMain.ai.field_system_prompt'] = 'Мениджър за поддръжка Системна подсказка';
$lang['AdminMain.ai.field_system_prompt_desc'] = 'Тази подкана се използва специално за функциите на Support Manager AI и има предимство пред глобалната системна подкана.';
$lang['AdminMain.ai.field_system_prompt_tooltip'] = 'Дефинирайте конкретни инструкции за AI при обработката на заявки за поддръжка. Тази инструкция отменя глобалната системна инструкция и определя поведението на ИИ в рамките на системата за билети.';
$lang['AdminMain.ai.field_temperature'] = 'Температура';
$lang['AdminMain.ai.field_temperature_desc'] = 'По-ниска температура = по-концентриран, по-висока температура = по-креативен. По подразбиране: 1,0';
$lang['AdminMain.ai.field_temperature_tooltip'] = 'Контролира случайността в отговорите. По-ниските стойности (0,0-0,7) водят до по-целенасочени и детерминирани резултати. По-високите стойности (1,3-2,0) водят до по-креативни и разнообразни резултати. Обхват: 0,0 до 2,0';
$lang['AdminMain.ai.field_tool_assign_staff'] = 'Присвояване на член на персонала';
$lang['AdminMain.ai.field_tool_assign_staff_desc'] = 'Позволете на AI да възлага билети на конкретни служители въз основа на системни инструкции.';
$lang['AdminMain.ai.field_tool_change_priority'] = 'Промяна на приоритета на билета';
$lang['AdminMain.ai.field_tool_change_priority_desc'] = 'Позволете на AI да коригира приоритета на билета (нагоре или надолу), когато клиентът е избрал неподходящ приоритет или е открит от анализа.';
$lang['AdminMain.ai.field_tool_close_ticket'] = 'Затвори билета';
$lang['AdminMain.ai.field_tool_close_ticket_desc'] = 'Позволете на изкуствения интелект да затваря заявки в случаи на спам, върнати съобщения или ясно решени проблеми.';
$lang['AdminMain.ai.field_tool_instructions'] = 'Инструкции за използване на инструмента';
$lang['AdminMain.ai.field_tool_instructions_desc'] = 'Предоставете инструкции и конкретни сценарии, в които трябва да се използват инструментите. Този текст ще бъде включен в системната подкана, когато инструментите са активирани.';
$lang['AdminMain.ai.field_tool_instructions_placeholder'] = 'Пример: - Възлагайте техническите проблеми, свързани със сървъри с Linux, на Джон, а сървърите с Windows - на Дейв - Затваряйте само билети, които очевидно са спам, автоматични отговори или клиентът посочва, че билетът е разрешен в последния отговор - Увеличете приоритета на спешните проблеми, в които се споменава "down" или "offline", до статус "Emergency" - Намалете приоритета на билетите за "Emergency", ако те не са действително спешни.';
$lang['AdminMain.ai.field_tool_instructions_tooltip'] = 'Предоставяне на конкретни насоки на ИИ за това кога и как да използва разрешените инструменти. Например, посочете имената на служителите и техните области на компетентност за възлагане на билети.';
$lang['AdminMain.ai.field_tools_available'] = 'Налични инструменти';
$lang['AdminMain.ai.field_tools_available_tooltip'] = 'Изберете кои инструменти е разрешено да се използват от AI. Всеки инструмент дава възможност за конкретни действия, които ИИ може да извършва при обработката на билети.';
$lang['AdminMain.ai.field_tools_enabled'] = 'Активиране на инструменти';
$lang['AdminMain.ai.field_tools_enabled_desc'] = 'Позволете на AI да използва инструменти за управление на билети, като например промяна на приоритета, затваряне на билети или назначаване на служители.';
$lang['AdminMain.ai.heading_experimental'] = 'Експериментални функции';
$lang['AdminMain.ai.heading_features'] = 'Функции на AI';
$lang['AdminMain.ai.heading_model'] = 'Конфигурация на модела';
$lang['AdminMain.ai.heading_parameters'] = 'Параметри на модела';
$lang['AdminMain.ai.heading_replies'] = 'Автоматични отговори';
$lang['AdminMain.ai.heading_system_prompt'] = 'Системна покана';
$lang['AdminMain.ai.heading_tools'] = 'Инструменти за изкуствен интелект';
$lang['AdminMain.ai.option_every_reply'] = 'Всеки отговор';
$lang['AdminMain.ai.option_ticket_opened'] = 'Само отворен билет';
$lang['AdminMain.ai.page_title'] = 'Мениджър на поддръжката &gt; Настройки на AI';
$lang['AdminMain.ai.warning_not_configured_text'] = 'Функциите с изкуствен интелект за Мениджъра на поддръжката изискват ключ за Blesta AI API. Моля, конфигурирайте API ключа си в System Settings (Системни настройки) &gt; Artificial Intelligence (Изкуствен интелект), преди да активирате AI функциите.';
$lang['AdminMain.ai.warning_not_configured_title'] = 'Изисква се API ключ на Blesta AI';
$lang['AdminMain.settings.boxtitle_settings'] = 'Настройки';
$lang['AdminMain.settings.field_avatar'] = 'Аватар';
$lang['AdminMain.settings.field_default_avatar'] = 'Изображение на аватар по подразбиране';
$lang['AdminMain.settings.field_submit'] = 'Актуализиране на настройките';
$lang['AdminMain.settings.heading_avatar_settings'] = 'Настройки на аватара';
$lang['AdminMain.settings.option_default'] = 'Използвайте само персонализиран аватар';
$lang['AdminMain.settings.option_fallback'] = 'Използване на Gravatar, но отменяне, ако е зададен потребителски аватар';
$lang['AdminMain.settings.option_gravatar'] = 'Използвайте Gravatar';
$lang['AdminMain.settings.page_title'] = 'Мениджър поддръжка &gt; Настройки';
$lang['AdminMain.settings.text_avatar_recommendation'] = 'Препоръчва се: 150x150px, JPG или PNG, максимум 2 MB';
$lang['AdminMain.settings.text_remove_avatar'] = 'Премахване на изображението';

