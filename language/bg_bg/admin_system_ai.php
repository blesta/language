<?php
/**
 * Admin System Ai
 *
 * @package blesta
 * @subpackage blesta.language.bg_bg
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemAi.!success.settings_updated'] = 'Настройките на ИИ бяха успешно актуализирани!';
$lang['AdminSystemAi.!success.api_key_fetched'] = 'API ключът е успешно извлечен от вашия акаунт в Blesta.';
$lang['AdminSystemAi.!error.connection_failed'] = 'Не може да се свърже с API на AI: %1$s';
$lang['AdminSystemAi.!error.invalid_request'] = 'Невалидна заявка.';
$lang['AdminSystemAi.!error.username_required'] = 'Моля, въведете потребителското си име в account.blesta.com.';
$lang['AdminSystemAi.!error.no_license_key'] = 'Не е намерен лицензен ключ на Blesta. Моля, първо конфигурирайте лиценза си.';
$lang['AdminSystemAi.!error.auth_failed'] = 'Удостоверяването е неуспешно. Моля, проверете потребителското си име и лицензионния си ключ.';
$lang['AdminSystemAi.!error.request_failed'] = 'Заявката е неуспешна. Моля, опитайте отново.';
$lang['AdminSystemAi.!error.api_key_required'] = 'Моля, въведете API ключ.';
$lang['AdminSystemAi.!error.invalid_api_key'] = 'Невалиден API ключ.';
$lang['AdminSystemAi.index.page_title'] = 'Настройки &gt; Система &gt; AI';
$lang['AdminSystemAi.index.boxtitle_ai'] = 'Настройки на AI';
$lang['AdminSystemAi.index.field.ai_enabled'] = 'Активиране на функциите на AI';
$lang['AdminSystemAi.index.field.ai_api_key'] = 'Ключ за API';
$lang['AdminSystemAi.index.field.ai_default_model'] = 'Модел по подразбиране';
$lang['AdminSystemAi.index.field.ai_temperature'] = 'Температура';
$lang['AdminSystemAi.index.field.ai_max_tokens'] = 'Максимален брой жетони';
$lang['AdminSystemAi.index.field.submit'] = 'Актуализиране на настройките';
$lang['AdminSystemAi.index.tooltip.ai_enabled'] = 'Активиране или деактивиране на функциите за изкуствен интелект в системата.';
$lang['AdminSystemAi.index.tooltip.ai_api_key'] = 'Вашият Blesta AI API ключ. Получавате го от account.blesta.com.';
$lang['AdminSystemAi.index.tooltip.ai_default_model'] = 'Моделът на ИИ по подразбиране, който се използва за завършване на чата.';
$lang['AdminSystemAi.index.tooltip.ai_temperature'] = 'Контролира случайността. По-ниските стойности са по-детерминистични, а по-високите - по-креативни. Обхват: 0,0 до 2,0';
$lang['AdminSystemAi.index.tooltip.ai_max_tokens'] = 'Максимален брой токени, които да се генерират в отговорите.';
$lang['AdminSystemAi.index.text_connected'] = 'Успешно се свържете с Blesta AI.';
$lang['AdminSystemAi.index.text_connection_error'] = 'Не успя да се свърже с Blesta AI. Проверете API ключа си.';
$lang['AdminSystemAi.index.text_balance'] = 'Баланс: %1$s %2$s';
$lang['AdminSystemAi.index.text_temperature_range'] = '(0.0 - 2.0)';
$lang['AdminSystemAi.index.text_fetch_key'] = 'Извличане от профила ми в Blesta';
$lang['AdminSystemAi.index.text_manual_entry'] = 'Въведете API ключа си ръчно или го изтеглете автоматично от профила си.';
$lang['AdminSystemAi.index.text_validating'] = 'Потвърждаване на...';
$lang['AdminSystemAi.index.text_key_valid'] = 'API ключът е валидиран и запазен';
$lang['AdminSystemAi.index.text_select_model'] = 'Изберете модел';
$lang['AdminSystemAi.index.text_api_status'] = 'Статус на API';
$lang['AdminSystemAi.index.text_status_active'] = 'Активен';
$lang['AdminSystemAi.index.text_remaining_credits'] = 'Оставащи кредити';
$lang['AdminSystemAi.index.text_credits_used'] = 'Използвани кредити (този месец)';
$lang['AdminSystemAi.index.text_last_api_call'] = 'Последно API повикване';
$lang['AdminSystemAi.index.text_no_calls_yet'] = 'Все още няма обаждания';
$lang['AdminSystemAi.modal.heading_fetch'] = 'Извличане от профила ми в Blesta';
$lang['AdminSystemAi.modal.text_subtitle'] = 'Вашето потребителско име е необходимо за извличане на API ключа';
$lang['AdminSystemAi.modal.text_info'] = 'Вашето потребителско име в account.blesta.com и лицензионният ви ключ за Blesta ще бъдат използвани за валидиране на лиценза ви и автоматично извличане на нов ключ за API на Blesta AI. Ако ключът вече е генериран, той ще бъде анулиран и ще бъде издаден нов ключ.';
$lang['AdminSystemAi.modal.field.username'] = 'Потребителско име';
$lang['AdminSystemAi.modal.field.username_placeholder'] = 'Въведете потребителското име на профила си';
$lang['AdminSystemAi.modal.button.authenticate'] = 'Удостоверяване на автентичността';
$lang['AdminSystemAi.modal.button.cancel'] = 'Отмяна на';
$lang['AdminSystemAi.modal.text_authenticating'] = 'Удостоверяване на автентичността...';
$lang['AdminSystemAi.index.heading_api'] = 'Конфигурация на API';
$lang['AdminSystemAi.index.heading_model'] = 'Модел по подразбиране';
$lang['AdminSystemAi.index.heading_parameters'] = 'Параметри на модела';
$lang['AdminSystemAi.index.heading_prompts'] = 'Системни подкани';
$lang['AdminSystemAi.index.heading_features'] = 'Разрешени функции';
$lang['AdminSystemAi.index.field.ai_global_prompt'] = 'Глобална системна подсказка (по подразбиране)';
$lang['AdminSystemAi.index.tooltip.ai_global_prompt'] = 'Инструкциите по подразбиране, изпращани на модела на изкуствения интелект при всяка заявка. Това определя поведението и контекста на ИИ във всички функции.';
$lang['AdminSystemAi.index.text_global_prompt_help'] = 'Тази подкана се прилага за всички функции на изкуствен интелект, освен ако не е отменена в рамките на функцията.';
$lang['AdminSystemAi.index.field.ai_feature_package_descriptions'] = 'Описания на пакетите';
$lang['AdminSystemAi.index.text_feature_package_descriptions'] = 'Създаване на убедителни описания на продукти и услуги';
$lang['AdminSystemAi.index.field.ai_feature_email_templates'] = 'Шаблони за имейли';
$lang['AdminSystemAi.index.text_feature_email_templates'] = 'Редактиране и подобряване на шаблони за имейли с помощта на AI';
$lang['AdminSystemAi.index.field.ai_feature_chatbot'] = 'Чатбот';
$lang['AdminSystemAi.index.text_feature_chatbot'] = 'Чатбот с изкуствен интелект за помощ на персонала';
$lang['AdminSystemAi.index.field.ai_chatbot_staff_groups'] = 'Достъп до група служители';
$lang['AdminSystemAi.index.tooltip.ai_chatbot_staff_groups'] = 'Изберете кои групи служители могат да имат достъп до чатбота с изкуствен интелект. Могат да бъдат избрани няколко групи.';
$lang['AdminSystemAi.index.text_staff_groups_help'] = 'Задръжте Ctrl (Cmd за Mac), за да изберете няколко групи.';
$lang['AdminSystemAi.index.text_features_intro'] = 'Изберете кои основни функции на Blesta трябва да имат активирана помощ от AI. Плъгините могат да имат достъп до функциите на AI и се конфигурират самостоятелно.';
$lang['AdminSystemAi.index.heading_beta'] = 'Известие за бета функция';
$lang['AdminSystemAi.index.text_beta_notice'] = 'Тази функция в момента е в бета версия и може да доведе до неочаквани или неточни резултати. Използвайте я по преценка.';
$lang['AdminSystemAi.index.heading_privacy'] = 'Известие за поверителност';
$lang['AdminSystemAi.index.text_privacy_notice'] = 'Заявките се изпращат за обработка на доставчици на изкуствен интелект от трети страни (напр. OpenAI, Anthropic). Услугата Blesta AI не съхранява данни за разговорите с AI; ние обаче не контролираме как тези доставчици обработват или съхраняват данните. Избягвайте да изпращате чувствителна или поверителна информация.';
$lang['AdminSystemAi.index.heading_privacy_acknowledgment'] = 'Потвърждение за поверителност';
$lang['AdminSystemAi.index.field.ai_privacy_acknowledged'] = 'Прочетох и разбрах горното уведомление за поверителност.';
$lang['AdminSystemAi.index.text_privacy_last_acknowledged'] = 'Последно потвърдено на %1$s.';
$lang['AdminSystemAi.!error.privacy_not_acknowledged'] = 'Трябва да се съгласите с известието за поверителност, преди да го запазите.';
$lang['AdminSystemAi.index.heading_email_context'] = 'Контекстни настройки на шаблона на имейла';
$lang['AdminSystemAi.index.field.ai_email_context_depth'] = 'Дълбочина на взаимоотношенията';
$lang['AdminSystemAi.index.tooltip.ai_email_context_depth'] = 'Максимална дълбочина за обхождане на връзките на модела. По-високите стойности включват повече свързани данни, но увеличават използването на токени. Обхват: 1-5.';
$lang['AdminSystemAi.index.text_email_context_depth'] = 'Контролира колко дълбоко да се проследяват взаимоотношенията (напр. фактура → клиент → контакти). По подразбиране: 2';
$lang['AdminSystemAi.index.field.ai_email_context_schemas'] = 'Включване на дефиниции на схеми';
$lang['AdminSystemAi.index.text_email_context_schemas'] = 'Включете информация за типа на полето и схемите на базата данни в контекста.';
$lang['AdminSystemAi.index.field.ai_email_context_examples'] = 'Включване на примерни данни';
$lang['AdminSystemAi.index.text_email_context_examples'] = 'Включете примерни стойности на данните, за да помогнете на AI да разбере форматите и структурата на данните.';
$lang['AdminSystemAi.index.degraded_model'] = 'Понастоящем избраният модел „%1$s “ вече не е наличен. Функциите за изкуствен интелект временно използват „%2$s “. Моля, изберете нов модел по подразбиране от списъка по-долу и запазете.';
$lang['AdminSystemAi.index.model_recommended'] = '(Препоръчително)';

