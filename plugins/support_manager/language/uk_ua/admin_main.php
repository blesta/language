<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.uk_ua
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.settings.field_submit'] = 'Оновлення налаштувань';
$lang['AdminMain.settings.text_remove_avatar'] = 'Видалити зображення';
$lang['AdminMain.settings.field_default_avatar'] = 'Зображення аватара за замовчуванням';
$lang['AdminMain.settings.option_default'] = 'Використовуйте лише власний аватар';
$lang['AdminMain.settings.option_fallback'] = 'Використовуйте Gravatar, але перевизначайте, якщо встановлено власний аватар';
$lang['AdminMain.settings.option_gravatar'] = 'Використовуйте Gravatar';
$lang['AdminMain.settings.field_avatar'] = 'Аватар';
$lang['AdminMain.settings.heading_avatar_settings'] = 'Налаштування аватара';
$lang['AdminMain.settings.boxtitle_settings'] = 'Налаштування';
$lang['AdminMain.settings.page_title'] = 'Менеджер підтримки &gt; Налаштування';
$lang['AdminMain.!success.settings_updated'] = 'Налаштування успішно оновлено.';
$lang['AdminMain.!success.ai_settings_updated'] = 'Налаштування ШІ успішно оновлено.';
$lang['AdminMain.ai.page_title'] = 'Менеджер підтримки &gt; Налаштування ШІ';
$lang['AdminMain.settings.text_avatar_recommendation'] = 'Рекомендовано: 150x150px, JPG або PNG, максимум 2MB';
$lang['AdminMain.ai.boxtitle_settings'] = 'Налаштування ШІ';
$lang['AdminMain.ai.warning_not_configured_title'] = 'Потрібен ключ API Blesta AI';
$lang['AdminMain.ai.warning_not_configured_text'] = 'Функції штучного інтелекту для Менеджера підтримки вимагають наявності ключа API Blesta AI. Будь ласка, налаштуйте свій ключ API в Налаштуваннях системи &gt; Штучний інтелект, перш ніж увімкнути функції штучного інтелекту.';
$lang['AdminMain.ai.button_configure_ai'] = 'Перейдіть до налаштувань системного ШІ';
$lang['AdminMain.ai.heading_features'] = 'Особливості ШІ';
$lang['AdminMain.ai.heading_model'] = 'Конфігурація моделі';
$lang['AdminMain.ai.heading_parameters'] = 'Параметри моделі';
$lang['AdminMain.ai.heading_system_prompt'] = 'Підказка системи';
$lang['AdminMain.ai.heading_experimental'] = 'Особливості експерименту';
$lang['AdminMain.ai.heading_replies'] = 'Автоматичні відповіді';
$lang['AdminMain.ai.heading_tools'] = 'Інструменти штучного інтелекту';
$lang['AdminMain.ai.field_enabled'] = 'Ввімкніть функції штучного інтелекту для менеджера підтримки';
$lang['AdminMain.ai.field_enabled_desc'] = 'Увімкніть функції зі штучним інтелектом у тікет-системі, включно з автоматичними відповідями, резюме та інструментами.';
$lang['AdminMain.ai.field_override_model'] = 'Перевизначити модель ШІ за замовчуванням';
$lang['AdminMain.ai.field_override_model_desc'] = 'За замовчуванням: %1$s';
$lang['AdminMain.ai.field_model'] = 'Модель штучного інтелекту';
$lang['AdminMain.ai.field_model_tooltip'] = 'Виберіть модель штучного інтелекту для використання функцій Support Manager. Різні моделі мають різні можливості та ціни.';
$lang['AdminMain.ai.field_model_desc'] = 'Ця модель буде використовуватися для всіх функцій штучного інтелекту в Менеджері підтримки.';
$lang['AdminMain.ai.field_override_max_tokens'] = 'Перевизначення максимальної кількості токенів';
$lang['AdminMain.ai.field_override_max_tokens_desc'] = 'За замовчуванням: %1$s';
$lang['AdminMain.ai.field_max_tokens'] = 'Макс Токенс';
$lang['AdminMain.ai.field_max_tokens_tooltip'] = 'Максимальна кількість токенів (слів/частин слів), які ШІ може згенерувати за одну відповідь. Вищі значення дають змогу отримувати довші відповіді, але споживають більше ресурсів. Типовий діапазон: 100-4000 для більшості завдань.';
$lang['AdminMain.ai.field_max_tokens_desc'] = 'Керує максимальною довжиною відповідей, згенерованих ШІ. За замовчуванням: 4000';
$lang['AdminMain.ai.field_override_temperature'] = 'Перевизначення температури';
$lang['AdminMain.ai.field_override_temperature_desc'] = 'За замовчуванням: %1$s';
$lang['AdminMain.ai.field_temperature'] = 'Температура';
$lang['AdminMain.ai.field_temperature_tooltip'] = 'Контролює випадковість у відповідях. Нижчі значення (0,0-0,7) дають більш цілеспрямовані та детерміновані відповіді. Вищі значення (1,3-2,0) дають більш творчі та різноманітні відповіді. Діапазон: від 0.0 до 2.0';
$lang['AdminMain.ai.field_temperature_desc'] = 'Нижча температура - більш сфокусована, вища - більш творча. За замовчуванням: 1.0';
$lang['AdminMain.ai.field_system_prompt'] = 'Підказка системи Support Manager';
$lang['AdminMain.ai.field_system_prompt_tooltip'] = 'Визначте конкретні інструкції для ШІ під час обробки тікетів підтримки. Ця підказка перевизначає глобальну системну підказку і визначає поведінку ШІ саме в системі тікетів.';
$lang['AdminMain.ai.field_system_prompt_desc'] = 'Цей запит використовується спеціально для функцій штучного інтелекту Support Manager і замінює глобальний системний запит.';
$lang['AdminMain.ai.badge_experimental'] = 'ЕКСПЕРИМЕНТАЛЬНИЙ';
$lang['AdminMain.ai.field_auto_reply_enabled'] = 'Увімкнути автоматичні відповіді штучного інтелекту на тікети';
$lang['AdminMain.ai.field_auto_reply_enabled_desc'] = 'Дозвольте ШІ автоматично відповідати на тікети, коли він має високий ступінь впевненості у відповіді.';
$lang['AdminMain.ai.field_confidence_threshold'] = 'Поріг довіри';
$lang['AdminMain.ai.field_confidence_threshold_tooltip'] = 'ШІ автоматично відповідатиме на тікети лише тоді, коли рівень його впевненості дорівнюватиме або перевищуватиме цей поріг. Більш високі значення (90-100%) є більш консервативними і безпечними. Нижчі значення (60-89%) дають більше автоматичних відповідей, але з більшим ризиком помилок.';
$lang['AdminMain.ai.field_confidence_threshold_desc'] = 'Вищий поріг = більш консервативний (менше автоматичних відповідей, вища точність). Рекомендовано: 70% або вище.';
$lang['AdminMain.ai.field_require_human_review'] = 'Вимагайте перевірку людиною перед відправкою';
$lang['AdminMain.ai.field_require_human_review_desc'] = 'Автоматично згенеровані відповіді відображаються в тікеті для використання персоналом (рекомендовано)';
$lang['AdminMain.ai.field_add_ai_disclaimer'] = 'Додати Застереження щодо штучного інтелекту';
$lang['AdminMain.ai.field_add_ai_disclaimer_desc'] = 'Додавати до автоматично згенерованих відповідей повідомлення про те, що вони були створені штучним інтелектом (рекомендовано для прозорості)';
$lang['AdminMain.ai.field_custom_disclaimer'] = 'Спеціальний текст відмови від відповідальності';
$lang['AdminMain.ai.field_custom_disclaimer_tooltip'] = 'Налаштуйте повідомлення про відмову від відповідальності, що додається до відповідей, згенерованих ШІ. Залиште поле порожнім, щоб використовувати повідомлення за замовчуванням.';
$lang['AdminMain.ai.field_custom_disclaimer_desc'] = 'Цей текст буде додано до всіх відповідей, згенерованих штучним інтелектом.';
$lang['AdminMain.ai.field_custom_disclaimer_placeholder'] = 'Ця відповідь була створена за допомогою штучного інтелекту.';
$lang['AdminMain.ai.field_restricted_departments'] = 'Обмежити автовідповідь відділами';
$lang['AdminMain.ai.field_restricted_departments_tooltip'] = 'Дозволити автоматичні відповіді лише для певних відділів продажу квитків. Зніміть усі галочки, щоб дозволити усім відділам.';
$lang['AdminMain.ai.field_restricted_departments_desc'] = 'Виберіть, які відділи квитків можуть отримувати автоматичні відповіді ШІ. Зніміть прапорець "усі", щоб дозволити всім відділам.';
$lang['AdminMain.ai.field_assistant_name'] = 'Асистент штучного інтелекту Ім\'я користувача';
$lang['AdminMain.ai.field_assistant_name_tooltip'] = 'Ім\'я, яке відображається для відповідей, згенерованих штучним інтелектом у темах тікетів. Це персоналізує ШІ-помічника для вашої служби підтримки.';
$lang['AdminMain.ai.field_assistant_name_desc'] = 'Залиште порожнім, щоб використовувати назву за замовчуванням: "Support"';
$lang['AdminMain.ai.field_assistant_name_placeholder'] = 'Підтримка';
$lang['AdminMain.ai.field_analyze_trigger'] = 'Тригер аналізу штучного інтелекту';
$lang['AdminMain.ai.field_analyze_trigger_tooltip'] = 'Виберіть, коли ШІ повинен аналізувати тікети на предмет потенційних відповідей і використання інструментів. "Кожна відповідь" аналізує кожне нове повідомлення. "Відкритий тікет" аналізує лише перше відкриття тікета.';
$lang['AdminMain.ai.field_analyze_trigger_desc'] = 'Контролює, коли запускається аналіз ШІ для створення відповідей і виконання інструментів.';
$lang['AdminMain.ai.option_every_reply'] = 'Кожна відповідь';
$lang['AdminMain.ai.option_ticket_opened'] = 'Тільки відкритий квиток';
$lang['AdminMain.ai.field_max_queue_age_hours'] = 'Максимальний вік черги (години)';
$lang['AdminMain.ai.field_max_queue_age_hours_tooltip'] = 'Відповіді клієнтів у черзі, старші за це значення, будуть відкинуті cron, а не оброблені. Не дозволяє ШІ відповідати на прострочені тікети, якщо cron було вимкнено і накопичився бэклог.';
$lang['AdminMain.ai.field_max_queue_age_hours_desc'] = 'Відкиньте відповіді ШІ, що стоять у черзі понад цю кількість годин. Має бути від 1 до 8760 (1 рік). За замовчуванням 24.';
$lang['AdminMain.ai.field_tools_enabled'] = 'Увімкнути інструменти';
$lang['AdminMain.ai.field_tools_enabled_desc'] = 'Дозвольте ШІ використовувати інструменти для управління тікетами, наприклад, змінювати пріоритет, закривати тікети або призначати їх співробітникам.';
$lang['AdminMain.ai.field_tools_available'] = 'Доступні інструменти';
$lang['AdminMain.ai.field_tools_available_tooltip'] = 'Виберіть, які інструменти дозволено використовувати ШІ. Кожен інструмент уможливлює певні дії, які ШІ може виконувати під час обробки квитків.';
$lang['AdminMain.ai.field_tool_change_priority'] = 'Змінити пріоритет квитка';
$lang['AdminMain.ai.field_tool_change_priority_desc'] = 'Дозвольте ШІ змінювати пріоритет тікета (вгору або вниз), якщо клієнт вибрав невідповідний пріоритет або його було виявлено в результаті аналізу.';
$lang['AdminMain.ai.field_tool_close_ticket'] = 'Закрити квиток';
$lang['AdminMain.ai.field_tool_close_ticket_desc'] = 'Дозвольте ШІ закривати тікети у випадках спаму, відхилених повідомлень або чітко вирішених проблем.';
$lang['AdminMain.ai.field_tool_assign_staff'] = 'Призначити співробітнику';
$lang['AdminMain.ai.field_tool_assign_staff_desc'] = 'Дозвольте ШІ призначати завдання конкретним співробітникам на основі підказок системи.';
$lang['AdminMain.ai.field_tool_instructions'] = 'Інструкція з використання інструменту';
$lang['AdminMain.ai.field_tool_instructions_tooltip'] = 'Надайте ШІ конкретні вказівки щодо того, коли і як користуватися увімкненими інструментами. Наприклад, вкажіть імена співробітників і сфери їхньої компетенції для призначення квитків.';
$lang['AdminMain.ai.field_tool_instructions_desc'] = 'Надайте інструкції та конкретні сценарії, в яких слід використовувати інструменти. Цей текст буде включено до системного запиту, коли інструменти буде увімкнено.';
$lang['AdminMain.ai.field_tool_instructions_placeholder'] = 'Приклад: - Призначити технічні питання, пов\'язані з серверами Linux, Джону, серверами Windows - Дейву - Закривати лише ті тікети, які явно є спамом, авто-відповідями, або клієнт вказує, що тікет вирішено в останній відповіді - Підвищити пріоритет термінових питань зі словами "не працює" або "не в мережі" до статусу "Аварійний" - Зменшити пріоритет аварійних тікетів, якщо вони не є справді аварійними.';
$lang['AdminMain.ai.field_submit'] = 'Зберегти налаштування ШІ';

