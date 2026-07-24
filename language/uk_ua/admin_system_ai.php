<?php
/**
 * Admin System Ai
 *
 * @package blesta
 * @subpackage blesta.language.uk_ua
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemAi.!success.settings_updated'] = 'Налаштування ШІ успішно оновлено!';
$lang['AdminSystemAi.!success.api_key_fetched'] = 'Ключ API успішно отримано з вашого облікового запису Blesta.';
$lang['AdminSystemAi.!error.connection_failed'] = 'Не вдалося підключитися до AI API: %1$s';
$lang['AdminSystemAi.!error.invalid_request'] = 'Неправильний запит.';
$lang['AdminSystemAi.!error.username_required'] = 'Будь ласка, введіть своє ім\'я користувача account.blesta.com.';
$lang['AdminSystemAi.!error.no_license_key'] = 'Ліцензійний ключ Blesta не знайдено. Будь ласка, спочатку налаштуйте ліцензію.';
$lang['AdminSystemAi.!error.auth_failed'] = 'Не вдалося пройти автентифікацію. Будь ласка, перевірте своє ім\'я користувача та ліцензійний ключ.';
$lang['AdminSystemAi.!error.request_failed'] = 'Запит не виконано. Спробуйте ще раз.';
$lang['AdminSystemAi.!error.api_key_required'] = 'Будь ласка, введіть ключ API.';
$lang['AdminSystemAi.!error.invalid_api_key'] = 'Невірний ключ API.';
$lang['AdminSystemAi.index.page_title'] = 'Налаштування &gt; Система &gt; ШІ';
$lang['AdminSystemAi.index.boxtitle_ai'] = 'Налаштування ШІ';
$lang['AdminSystemAi.index.field.ai_enabled'] = 'Увімкнути функції штучного інтелекту';
$lang['AdminSystemAi.index.field.ai_api_key'] = 'Ключ API';
$lang['AdminSystemAi.index.field.ai_default_model'] = 'Модель за замовчуванням';
$lang['AdminSystemAi.index.field.ai_temperature'] = 'Температура';
$lang['AdminSystemAi.index.field.ai_max_tokens'] = 'Макс Токенс';
$lang['AdminSystemAi.index.field.submit'] = 'Оновлення налаштувань';
$lang['AdminSystemAi.index.tooltip.ai_enabled'] = 'Увімкніть або вимкніть функції штучного інтелекту в системі.';
$lang['AdminSystemAi.index.tooltip.ai_api_key'] = 'Ваш ключ API Blesta AI. Отримайте його на сторінці account.blesta.com.';
$lang['AdminSystemAi.index.tooltip.ai_default_model'] = 'Модель ШІ за замовчуванням для завершення чату.';
$lang['AdminSystemAi.index.tooltip.ai_temperature'] = 'Контролює випадковість. Нижчі значення - більш детерміновані, вищі - більш творчі. Діапазон: від 0.0 до 2.0';
$lang['AdminSystemAi.index.tooltip.ai_max_tokens'] = 'Максимальна кількість токенів, які можна згенерувати у відповідях.';
$lang['AdminSystemAi.index.text_connected'] = 'Успішно підключено до Blesta AI.';
$lang['AdminSystemAi.index.text_connection_error'] = 'Не вдалося підключитися до Blesta AI. Перевірте свій API-ключ.';
$lang['AdminSystemAi.index.text_balance'] = 'Баланс: %1$s %2$s';
$lang['AdminSystemAi.index.text_temperature_range'] = '(0.0 - 2.0)';
$lang['AdminSystemAi.index.text_fetch_key'] = 'Отримати з мого облікового запису Blesta';
$lang['AdminSystemAi.index.text_manual_entry'] = 'Введіть ключ API вручну або отримайте його автоматично з вашого облікового запису.';
$lang['AdminSystemAi.index.text_validating'] = 'Підтверджую...';
$lang['AdminSystemAi.index.text_key_valid'] = 'Ключ API перевірено та збережено';
$lang['AdminSystemAi.index.text_select_model'] = 'Виберіть модель';
$lang['AdminSystemAi.index.text_api_status'] = 'Статус API';
$lang['AdminSystemAi.index.text_status_active'] = 'Активний';
$lang['AdminSystemAi.index.text_remaining_credits'] = 'Решта кредитів';
$lang['AdminSystemAi.index.text_credits_used'] = 'Використані кредити (цього місяця)';
$lang['AdminSystemAi.index.text_last_api_call'] = 'Останній виклик API';
$lang['AdminSystemAi.index.text_no_calls_yet'] = 'Дзвінків ще не було.';
$lang['AdminSystemAi.modal.heading_fetch'] = 'Отримати з мого облікового запису Blesta';
$lang['AdminSystemAi.modal.text_subtitle'] = 'Ваше ім\'я користувача необхідне для отримання ключа API';
$lang['AdminSystemAi.modal.text_info'] = 'Ваше ім\'я користувача account.blesta.com і ваш ліцензійний ключ Blesta будуть використані для перевірки вашої ліцензії та автоматичного отримання нового ключа Blesta AI API. Якщо ключ вже був згенерований, він буде анульований і буде виданий новий ключ.';
$lang['AdminSystemAi.modal.field.username'] = 'Ім\'я користувача';
$lang['AdminSystemAi.modal.field.username_placeholder'] = 'Введіть ім\'я користувача вашого облікового запису';
$lang['AdminSystemAi.modal.button.authenticate'] = 'Автентифікація';
$lang['AdminSystemAi.modal.button.cancel'] = 'Скасувати';
$lang['AdminSystemAi.modal.text_authenticating'] = 'Аутентифікація...';
$lang['AdminSystemAi.index.heading_api'] = 'Конфігурація API';
$lang['AdminSystemAi.index.heading_model'] = 'Модель за замовчуванням';
$lang['AdminSystemAi.index.heading_parameters'] = 'Параметри моделі';
$lang['AdminSystemAi.index.heading_prompts'] = 'Підказки системи';
$lang['AdminSystemAi.index.heading_features'] = 'Увімкнені функції';
$lang['AdminSystemAi.index.field.ai_global_prompt'] = 'Глобальний системний запит (за замовчуванням)';
$lang['AdminSystemAi.index.tooltip.ai_global_prompt'] = 'Інструкції за замовчуванням, які надсилаються моделі ШІ з кожним запитом. Вони визначають поведінку ШІ та контекст для всіх функцій.';
$lang['AdminSystemAi.index.text_global_prompt_help'] = 'Ця підказка застосовується до всіх функцій ШІ, якщо її не перевизначено в самій функції.';
$lang['AdminSystemAi.index.field.ai_feature_package_descriptions'] = 'Опис пакунків';
$lang['AdminSystemAi.index.text_feature_package_descriptions'] = 'Створюйте переконливі описи продуктів і послуг';
$lang['AdminSystemAi.index.field.ai_feature_email_templates'] = 'Шаблони електронної пошти';
$lang['AdminSystemAi.index.text_feature_email_templates'] = 'Редагування та вдосконалення шаблонів за допомогою ШІ';
$lang['AdminSystemAi.index.field.ai_feature_chatbot'] = 'Чат-бот';
$lang['AdminSystemAi.index.text_feature_chatbot'] = 'Чат-бот на базі штучного інтелекту для допомоги персоналу';
$lang['AdminSystemAi.index.field.ai_chatbot_staff_groups'] = 'Доступ до груп персоналу';
$lang['AdminSystemAi.index.tooltip.ai_chatbot_staff_groups'] = 'Виберіть, які групи співробітників матимуть доступ до чат-бота зі штучним інтелектом. Можна вибрати кілька груп.';
$lang['AdminSystemAi.index.text_staff_groups_help'] = 'Утримуйте Ctrl (Cmd на Mac), щоб вибрати кілька груп.';
$lang['AdminSystemAi.index.text_features_intro'] = 'Виберіть, для яких основних функцій Blesta слід увімкнути підтримку ШІ. Плагіни мають доступ до функцій ШІ і налаштовуються незалежно.';
$lang['AdminSystemAi.index.heading_beta'] = 'Повідомлення про бета-версію';
$lang['AdminSystemAi.index.text_beta_notice'] = 'Ця функція наразі знаходиться в бета-версії і може давати неочікувані або неточні результати. Використовуйте з обережністю.';
$lang['AdminSystemAi.index.heading_privacy'] = 'Повідомлення про конфіденційність';
$lang['AdminSystemAi.index.text_privacy_notice'] = 'Запити надсилаються стороннім постачальникам ШІ (наприклад, OpenAI, Anthropic) для обробки. Сервіс Blesta AI не зберігає дані розмов зі штучним інтелектом, однак ми не контролюємо, як ці провайдери обробляють і зберігають дані. Уникайте надання чутливої або конфіденційної інформації.';
$lang['AdminSystemAi.index.heading_privacy_acknowledgment'] = 'Підтвердження конфіденційності';
$lang['AdminSystemAi.index.field.ai_privacy_acknowledged'] = 'Я прочитав і зрозумів вищенаведене повідомлення про конфіденційність.';
$lang['AdminSystemAi.index.text_privacy_last_acknowledged'] = 'Останній раз підтверджено на %1$s.';
$lang['AdminSystemAi.!error.privacy_not_acknowledged'] = 'Перед збереженням ви повинні погодитися з повідомленням про конфіденційність.';
$lang['AdminSystemAi.index.heading_email_context'] = 'Налаштування контексту шаблону';
$lang['AdminSystemAi.index.field.ai_email_context_depth'] = 'Глибина стосунків';
$lang['AdminSystemAi.index.tooltip.ai_email_context_depth'] = 'Максимальна глибина для обходу зв\'язків моделі. Вищі значення включають більше пов\'язаних даних, але збільшують використання токенів. Діапазон: 1-5.';
$lang['AdminSystemAi.index.text_email_context_depth'] = 'Дозволяє контролювати глибину відстеження зв\'язків (наприклад, інвойс → клієнт → контакти). За замовчуванням: 2';
$lang['AdminSystemAi.index.field.ai_email_context_schemas'] = 'Включити визначення схем';
$lang['AdminSystemAi.index.text_email_context_schemas'] = 'Включіть інформацію про тип поля та схеми бази даних у контекст.';
$lang['AdminSystemAi.index.field.ai_email_context_examples'] = 'Включити приклади даних';
$lang['AdminSystemAi.index.text_email_context_examples'] = 'Включіть зразки значень даних, щоб допомогти ШІ зрозуміти формати та структуру даних.';
$lang['AdminSystemAi.index.degraded_model'] = 'Вибрана наразі модель «%1$s » більше не доступна. Функції штучного інтелекту тимчасово використовують модель «%2$s ». Будь ласка, виберіть нижче нову модель за замовчуванням і збережіть вибір.';
$lang['AdminSystemAi.index.model_recommended'] = '(Рекомендовано)';

