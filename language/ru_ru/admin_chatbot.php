<?php
/**
 * Admin Chatbot
 *
 * @package blesta
 * @subpackage blesta.language.ru_ru
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminChatbot.index.time_yesterday'] = 'Вчера';
$lang['AdminChatbot.index.time_today'] = 'Сегодня';
$lang['AdminChatbot.index.time_hours_ago'] = '%1$s час назад';
$lang['AdminChatbot.index.time_minutes_ago'] = '%1$s минуту назад';
$lang['AdminChatbot.index.time_just_now'] = 'Только что';
$lang['AdminChatbot.index.confirm_delete'] = 'Вы уверены, что хотите удалить этот разговор?';
$lang['AdminChatbot.index.btn_delete'] = 'Удалить';
$lang['AdminChatbot.!error.model_empty'] = 'Пожалуйста, выберите модель перед отправкой сообщения.';
$lang['AdminChatbot.!error.conversation_create_failed'] = 'Не удалось создать беседу. Пожалуйста, попробуйте еще раз.';
$lang['AdminChatbot.!error.stream_failed'] = 'Не удалось получить ответ от ИИ. Пожалуйста, попробуйте еще раз.';
$lang['AdminChatbot.!error.message_empty'] = 'Пожалуйста, введите сообщение.';
$lang['AdminChatbot.!error.conversation_not_found'] = 'Разговор не найден.';
$lang['AdminChatbot.!error.unauthorized'] = 'Вы не уполномочены выполнять это действие.';
$lang['AdminChatbot.index.btn_go_back'] = 'Вернуться';
$lang['AdminChatbot.index.no_permission_text'] = 'У вас нет разрешения на использование чатбота AI. Пожалуйста, свяжитесь с вашим администратором, чтобы запросить доступ.';
$lang['AdminChatbot.index.no_permission_title'] = 'Доступ ограничен';
$lang['AdminChatbot.index.btn_configure'] = 'Настройка искусственного интеллекта';
$lang['AdminChatbot.index.not_configured_text'] = 'Чатбот с искусственным интеллектом еще не настроен. Пожалуйста, настройте параметры ИИ, чтобы начать использовать эту функцию.';
$lang['AdminChatbot.index.not_configured_title'] = 'AI не настроен';
$lang['AdminChatbot.index.truncated_notice'] = 'Этот ответ был усечен из-за ограничений на количество токенов. Вы можете увеличить максимальное количество токенов в разделе Настройки &gt; Система &gt; ИИ или попросить ИИ продолжить.';
$lang['AdminChatbot.index.card_badge_prompt_mode'] = 'Режим подсказки';
$lang['AdminChatbot.index.context_pill_dismiss'] = 'Отмена';
$lang['AdminChatbot.index.suggestion_plugin_dev_placeholder'] = 'Что вы строите?';
$lang['AdminChatbot.index.suggestion_plugin_dev_text'] = 'Получите помощь в создании плагина или модуля';
$lang['AdminChatbot.index.suggestion_plugin_dev_title'] = 'Помощь разработчика';
$lang['AdminChatbot.index.suggestion_api_query_placeholder'] = 'Что вы хотите сделать с помощью API?';
$lang['AdminChatbot.index.suggestion_api_query_text'] = 'Получите помощь в написании запросов API Blesta';
$lang['AdminChatbot.index.suggestion_api_query_title'] = 'API-запрос';
$lang['AdminChatbot.index.suggestion_custom_report_placeholder'] = 'Опишите отчет, который вам нужен...';
$lang['AdminChatbot.index.suggestion_custom_report_text'] = 'Создание SQL-запроса для пользовательского отчета';
$lang['AdminChatbot.index.suggestion_custom_report_title'] = 'Пользовательский отчет';
$lang['AdminChatbot.index.suggestion_security_context'] = 'Пользователь спрашивает о передовых методах обеспечения безопасности. Расскажите о правах сотрудников и контроле доступа на основе групп, настройке двухфакторной аутентификации, политике надежных паролей, обновлении Blesta, настройке SSL/TLS, ограничении входа по IP-адресу и доступе к журналам (Tools &gt; Logs). Упомяните об изменении маршрута администратора по умолчанию в файле /config/routes.php с помощью Route.admin';
$lang['AdminChatbot.index.suggestion_security_text'] = 'Каким передовым методам обеспечения безопасности следует следовать?';
$lang['AdminChatbot.index.suggestion_security_title'] = 'Безопасность';
$lang['AdminChatbot.index.suggestion_clients_context'] = 'Пользователь спрашивает об управлении клиентами в Blesta. Мы расскажем о создании новых клиентов, редактировании профилей клиентов, управлении группами клиентов (Настройки &gt; Клиенты &gt; Группы клиентов), настройке параметров по умолчанию на уровне группы для выставления и оплаты счетов, автоматическом списании средств, уведомлениях и напоминаниях о просрочке платежа, управлении счетами платежей и навигации по странице профиля клиента как единому пункту назначения для всех действий клиента.';
$lang['AdminChatbot.index.suggestion_clients_text'] = 'Как управлять учетными записями и группами клиентов?';
$lang['AdminChatbot.index.suggestion_clients_title'] = 'Управление клиентами';
$lang['AdminChatbot.index.suggestion_plugins_context'] = 'Пользователь спрашивает об управлении плагинами в Blesta. Проведите их через установку плагинов (Настройки &gt; Плагины &gt; Доступные), включение/отключение плагинов, настройку параметров плагинов и управление правами на плагины для групп сотрудников (Настройки &gt; Система &gt; Сотрудники &gt; Группы сотрудников: Редактировать). Упомяните о таких популярных плагинах, как Support Manager, CMS, Domain Manager, а также о том, как установить сторонние плагины через загрузку и где их активировать.';
$lang['AdminChatbot.index.suggestion_plugins_text'] = 'Как устанавливать и настраивать плагины?';
$lang['AdminChatbot.index.suggestion_plugins_title'] = 'Плагины';
$lang['AdminChatbot.index.suggestion_automation_context'] = 'Пользователь спрашивает об автоматизации и задачах cron в Blesta. Объясните, как настроить системное задание cron, какие виды автоматизированных задач выполняет Blesta (создание счета, обработка платежей, приостановка/отмена услуги, напоминания по электронной почте) и где найти рекомендуемую команду cron в разделе Настройки &gt; Система &gt; Автоматизация, а также отдельные задачи, время и частоту их выполнения в разделе Настройки &gt; Компания &gt; Автоматизация.';
$lang['AdminChatbot.index.suggestion_automation_text'] = 'Как настроить автоматическое выставление счетов и выполнение задач по обслуживанию?';
$lang['AdminChatbot.index.suggestion_automation_title'] = 'Автоматизация';
$lang['AdminChatbot.index.suggestion_support_context'] = 'Пользователь спрашивает о системе тикетов поддержки в Blesta. Объясните, как создать отдел поддержки и отвечать на тикеты с помощью плагина Support Manager, включая навигацию (Support &gt; Departments и Support &gt; Tickets). Расскажите о статусах тикетов, отделах, предопределенных ответах, импорте электронной почты тикетов через конвейер или POP/IMAP, а также о создании пользователей и назначении отделов.';
$lang['AdminChatbot.index.suggestion_support_text'] = 'Как управлять обращениями в службу поддержки и отвечать на них?';
$lang['AdminChatbot.index.suggestion_support_title'] = 'Билеты поддержки';
$lang['AdminChatbot.index.suggestion_modules_context'] = 'Пользователь спрашивает о настройке установки модулей в Blesta. Проведите их через установку и настройку модулей в Blesta. Расскажите о навигации (Настройки &gt; Модули &gt; Доступные), добавлении учетных данных сервера или API, создании пакетов, использующих модуль (Пакеты &gt; Новый пакет). Используйте cPanel в качестве конкретного примера, но упомяните, что эта схема применима и к другим модулям.';
$lang['AdminChatbot.index.suggestion_modules_text'] = 'Как настроить такой серверный модуль, как cPanel?';
$lang['AdminChatbot.index.suggestion_modules_title'] = 'Настройка модуля';
$lang['AdminChatbot.index.suggestion_services_context'] = 'Пользователь спрашивает о предоставлении услуг в Blesta. Проведите их через добавление услуги для клиента, выбор пакета, настройку параметров модуля и активацию услуги. Опишите путь навигации (Клиенты &gt; Выбрать клиента &gt; Новая услуга), создание пакета (Пакеты &gt; Новый пакет) и выбор термина, выбор модуля (вкладка Модуль в новом пакете), а также ручное и автоматическое предоставление услуг.';
$lang['AdminChatbot.index.suggestion_services_text'] = 'Как предоставить новую услугу клиенту?';
$lang['AdminChatbot.index.suggestion_services_title'] = 'Управление услугами';
$lang['AdminChatbot.index.suggestion_billing_context'] = 'Пользователь спрашивает о выставлении счетов клиентам в Blesta. Предоставьте пошаговое руководство по созданию счетов-фактур. Расскажите о путях навигации в Blesta (например, Клиенты &gt; Выбрать клиента &gt; Создать счет или значок [+] в виджете Счета), способах доставки счетов, настройке повторяющихся счетов и общих настройках выставления счетов.';
$lang['AdminChatbot.index.suggestion_billing_text'] = 'Как создать и отправить счет-фактуру клиенту?';
$lang['AdminChatbot.index.suggestion_billing_title'] = 'Помощь в выставлении счетов';
$lang['AdminChatbot.index.empty_subtitle'] = 'Начните разговор, набрав сообщение или выбрав предложение ниже. Созданный искусственным интеллектом контент может содержать неточности, предубеждения или галлюцинации и не должен рассматриваться как профессиональный совет. Этот инструмент не должен использоваться в незаконных или вредных целях.';
$lang['AdminChatbot.index.empty_title'] = 'Чем я могу помочь вам сегодня?';
$lang['AdminChatbot.index.default_title'] = 'Новая беседа';
$lang['AdminChatbot.index.new_chat_title'] = 'Новый чат';
$lang['AdminChatbot.index.model_label'] = 'Модель';
$lang['AdminChatbot.index.btn_send'] = 'Отправить';
$lang['AdminChatbot.index.input_placeholder'] = 'Введите сообщение...';
$lang['AdminChatbot.index.show_chatbot_only'] = 'Показывайте только разговоры с чатботом';
$lang['AdminChatbot.index.show_all_conversations'] = 'Показать все разговоры';
$lang['AdminChatbot.index.no_conversations'] = 'Пока нет разговоров';
$lang['AdminChatbot.index.search_placeholder'] = 'Поисковые беседы...';
$lang['AdminChatbot.index.btn_new_chat'] = 'Новый чат';
$lang['AdminChatbot.index.page_title'] = 'Чатбот с искусственным интеллектом';

