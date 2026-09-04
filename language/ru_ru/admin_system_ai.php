<?php
/**
 * Admin System Ai
 *
 * @package blesta
 * @subpackage blesta.language.ru_ru
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemAi.!error.api_key_required'] = 'Пожалуйста, введите ключ API.';
$lang['AdminSystemAi.!error.auth_failed'] = 'Не удалось пройти аутентификацию. Пожалуйста, проверьте имя пользователя и лицензионный ключ.';
$lang['AdminSystemAi.!error.connection_failed'] = 'Не удалось подключиться к API AI: %1$s';
$lang['AdminSystemAi.!error.invalid_api_key'] = 'Неверный ключ API.';
$lang['AdminSystemAi.!error.invalid_request'] = 'Неверный запрос.';
$lang['AdminSystemAi.!error.key_already_exists'] = 'Для вашей подписки на Blesta AI уже сгенерирован ключ API, и его невозможно получить повторно. Пожалуйста, отмените действующий ключ на странице «Управление ИИ» для вашего сервиса на сайте account.blesta.com, а затем попробуйте ещё раз.';
$lang['AdminSystemAi.!error.no_license_key'] = 'Лицензионный ключ Blesta не найден. Пожалуйста, сначала настройте лицензию.';
$lang['AdminSystemAi.!error.privacy_not_acknowledged'] = 'Перед сохранением вы должны согласиться с уведомлением о конфиденциальности.';
$lang['AdminSystemAi.!error.request_failed'] = 'Запрос не прошел. Пожалуйста, попробуйте еще раз.';
$lang['AdminSystemAi.!error.username_required'] = 'Введите имя пользователя account.blesta.com.';
$lang['AdminSystemAi.!success.api_key_fetched'] = 'Ключ API успешно получен из вашей учетной записи Blesta.';
$lang['AdminSystemAi.!success.settings_updated'] = 'Настройки ИИ были успешно обновлены!';
$lang['AdminSystemAi.index.boxtitle_ai'] = 'Настройки ИИ';
$lang['AdminSystemAi.index.degraded_model'] = 'Выбранная в данный момент модель «%1$s » больше не доступна. Функции искусственного интеллекта временно используют модель «%2$s ». Пожалуйста, выберите ниже новую модель по умолчанию и сохраните выбор.';
$lang['AdminSystemAi.index.field.ai_api_key'] = 'Ключ API';
$lang['AdminSystemAi.index.field.ai_chatbot_staff_groups'] = 'Доступ для групп сотрудников';
$lang['AdminSystemAi.index.field.ai_default_model'] = 'Модель по умолчанию';
$lang['AdminSystemAi.index.field.ai_email_context_depth'] = 'Глубина отношений';
$lang['AdminSystemAi.index.field.ai_email_context_examples'] = 'Включите примерные данные';
$lang['AdminSystemAi.index.field.ai_email_context_schemas'] = 'Включите определения схемы';
$lang['AdminSystemAi.index.field.ai_enabled'] = 'Включите функции искусственного интеллекта';
$lang['AdminSystemAi.index.field.ai_feature_chatbot'] = 'Чатбот';
$lang['AdminSystemAi.index.field.ai_feature_email_templates'] = 'Шаблоны электронной почты';
$lang['AdminSystemAi.index.field.ai_feature_package_descriptions'] = 'Описания пакетов';
$lang['AdminSystemAi.index.field.ai_global_prompt'] = 'Глобальная системная подсказка (по умолчанию)';
$lang['AdminSystemAi.index.field.ai_max_tokens'] = 'Максимальное количество жетонов';
$lang['AdminSystemAi.index.field.ai_privacy_acknowledged'] = 'Я прочитал и понял вышеуказанное уведомление о конфиденциальности.';
$lang['AdminSystemAi.index.field.ai_temperature'] = 'Температура';
$lang['AdminSystemAi.index.field.submit'] = 'Обновление настроек';
$lang['AdminSystemAi.index.heading_api'] = 'Конфигурация API';
$lang['AdminSystemAi.index.heading_beta'] = 'Уведомление о бета-версии';
$lang['AdminSystemAi.index.heading_email_context'] = 'Настройки контекста шаблона электронной почты';
$lang['AdminSystemAi.index.heading_features'] = 'Включенные функции';
$lang['AdminSystemAi.index.heading_model'] = 'Модель по умолчанию';
$lang['AdminSystemAi.index.heading_parameters'] = 'Параметры модели';
$lang['AdminSystemAi.index.heading_privacy'] = 'Уведомление о конфиденциальности';
$lang['AdminSystemAi.index.heading_privacy_acknowledgment'] = 'Признание конфиденциальности';
$lang['AdminSystemAi.index.heading_prompts'] = 'Системные подсказки';
$lang['AdminSystemAi.index.model_pricing'] = '(%1$s / %2$s кредитов за 1K токенов)';
$lang['AdminSystemAi.index.model_recommended'] = '(Рекомендуется)';
$lang['AdminSystemAi.index.page_title'] = 'Настройки &gt; Система &gt; AI';
$lang['AdminSystemAi.index.text_api_status'] = 'Статус API';
$lang['AdminSystemAi.index.text_balance'] = 'Баланс: %1$s %2$s';
$lang['AdminSystemAi.index.text_beta_notice'] = 'Эта функция находится в стадии бета-тестирования и может давать неожиданные или неточные результаты. Используйте ее с осторожностью.';
$lang['AdminSystemAi.index.text_connected'] = 'Успешное подключение к Blesta AI.';
$lang['AdminSystemAi.index.text_connection_error'] = 'Не удалось подключиться к Blesta AI. Проверьте свой ключ API.';
$lang['AdminSystemAi.index.text_credits_used'] = 'Использованные кредиты (в этом месяце)';
$lang['AdminSystemAi.index.text_email_context_depth'] = 'Устанавливает глубину отслеживания отношений (например, счет → клиент → контакты). По умолчанию: 2';
$lang['AdminSystemAi.index.text_email_context_examples'] = 'Включите примеры значений данных, чтобы помочь ИИ понять форматы и структуру данных.';
$lang['AdminSystemAi.index.text_email_context_schemas'] = 'Включите в контекст информацию о типах полей и схемах баз данных.';
$lang['AdminSystemAi.index.text_feature_chatbot'] = 'Чатбот с искусственным интеллектом для помощи персоналу';
$lang['AdminSystemAi.index.text_feature_email_templates'] = 'Редактирование и улучшение шаблонов электронной почты с помощью искусственного интеллекта';
$lang['AdminSystemAi.index.text_feature_package_descriptions'] = 'Создавайте убедительные описания продуктов и услуг';
$lang['AdminSystemAi.index.text_features_intro'] = 'Выберите, в каких основных функциях Blesta должна быть включена помощь искусственного интеллекта. Плагины могут получать доступ к функциям ИИ и настраиваются независимо.';
$lang['AdminSystemAi.index.text_fetch_key'] = 'Получить из моего аккаунта Blesta';
$lang['AdminSystemAi.index.text_global_prompt_help'] = 'Эта подсказка применяется ко всем функциям AI, если она не переопределена в самой функции.';
$lang['AdminSystemAi.index.text_key_valid'] = 'Ключ API подтвержден и сохранен';
$lang['AdminSystemAi.index.text_last_api_call'] = 'Последний вызов API';
$lang['AdminSystemAi.index.text_manual_entry'] = 'Введите свой API-ключ вручную или получите его автоматически из вашей учетной записи.';
$lang['AdminSystemAi.index.text_no_calls_yet'] = 'Звонков пока нет';
$lang['AdminSystemAi.index.text_privacy_last_acknowledged'] = 'Последнее подтверждение на сайте %1$s.';
$lang['AdminSystemAi.index.text_privacy_notice'] = 'Запросы отправляются на обработку сторонним поставщикам услуг ИИ (например, OpenAI, Anthropic). Сервис искусственного интеллекта Blesta не хранит данные разговоров с ИИ, однако мы не контролируем, как эти поставщики обрабатывают или хранят данные. Избегайте предоставления конфиденциальной или секретной информации.';
$lang['AdminSystemAi.index.text_remaining_credits'] = 'Оставшиеся кредиты';
$lang['AdminSystemAi.index.text_select_model'] = 'Выберите модель';
$lang['AdminSystemAi.index.text_staff_groups_help'] = 'Удерживайте Ctrl (Cmd на Mac), чтобы выбрать несколько групп.';
$lang['AdminSystemAi.index.text_status_active'] = 'Активный';
$lang['AdminSystemAi.index.text_temperature_range'] = '(0.0 - 2.0)';
$lang['AdminSystemAi.index.text_validating'] = 'Проверка...';
$lang['AdminSystemAi.index.tooltip.ai_api_key'] = 'Ваш ключ API Blesta AI. Получите его на сайте account.blesta.com.';
$lang['AdminSystemAi.index.tooltip.ai_chatbot_staff_groups'] = 'Выберите, какие группы сотрудников могут получить доступ к чатботу ИИ. Можно выбрать несколько групп.';
$lang['AdminSystemAi.index.tooltip.ai_default_model'] = 'Модель ИИ по умолчанию, используемая для завершения чата.';
$lang['AdminSystemAi.index.tooltip.ai_email_context_depth'] = 'Максимальная глубина обхода связей модели. Более высокие значения включают больше связанных данных, но увеличивают использование токенов. Диапазон: 1-5.';
$lang['AdminSystemAi.index.tooltip.ai_enabled'] = 'Включите или отключите функции искусственного интеллекта во всей системе.';
$lang['AdminSystemAi.index.tooltip.ai_global_prompt'] = 'Инструкции по умолчанию, отправляемые модели ИИ при каждом запросе. Они определяют поведение и контекст ИИ во всех функциях.';
$lang['AdminSystemAi.index.tooltip.ai_max_tokens'] = 'Максимальное количество токенов, генерируемых в ответах.';
$lang['AdminSystemAi.index.tooltip.ai_temperature'] = 'Управляет случайностью. Меньшие значения более детерминированы, большие - более креативны. Диапазон: 0.0 - 2.0';
$lang['AdminSystemAi.modal.button.authenticate'] = 'Аутентификация';
$lang['AdminSystemAi.modal.button.cancel'] = 'Отмена';
$lang['AdminSystemAi.modal.field.username'] = 'Имя пользователя';
$lang['AdminSystemAi.modal.field.username_placeholder'] = 'Введите имя пользователя вашей учетной записи';
$lang['AdminSystemAi.modal.heading_fetch'] = 'Получить из моего аккаунта Blesta';
$lang['AdminSystemAi.modal.text_authenticating'] = 'Аутентификация...';
$lang['AdminSystemAi.modal.text_info'] = 'Ваше имя пользователя на сайте account.blesta.com и ключ лицензии Blesta будут использованы для проверки подлинности лицензии и автоматического получения нового ключа API Blesta AI. Если ключ уже сгенерирован, его необходимо сначала отозвать на странице «Управление AI» для вашего сервиса на сайте account.blesta.com, прежде чем будет выдан новый ключ.';
$lang['AdminSystemAi.modal.text_subtitle'] = 'Ваше имя пользователя необходимо для получения ключа API';

