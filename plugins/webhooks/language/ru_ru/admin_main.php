<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.ru_ru
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.edit.text_fields_map'] = 'Этот раздел позволяет переименовать имена полей вызываемого события в пользовательские имена перед отправкой их в обратный вызов. Подполя должны быть разделены точкой (например, vars.status). Список всех полей, поддерживаемых каждым из событий, можно посмотреть по следующей <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">ссылке</a>.';
$lang['AdminMain.edit.field_editsubmit'] = 'Редактировать вебхук';
$lang['AdminMain.edit.field_add_field'] = 'Добавить поле';
$lang['AdminMain.edit.field_method'] = 'Метод';
$lang['AdminMain.edit.field_type'] = 'Обратный звонок';
$lang['AdminMain.edit.field_event'] = 'Событие';
$lang['AdminMain.edit.field_callback'] = 'Обратный звонок';
$lang['AdminMain.edit.option_delete'] = 'Удалить';
$lang['AdminMain.edit.heading_options'] = 'Опции';
$lang['AdminMain.edit.heading_parameter'] = 'Новое поле';
$lang['AdminMain.edit.heading_field'] = 'Оригинальное поле';
$lang['AdminMain.edit.heading_fields_map'] = 'Карта полей';
$lang['AdminMain.edit.heading_event'] = 'Событие';
$lang['AdminMain.edit.boxtitle_editwebhook'] = 'Редактировать вебхук';
$lang['AdminMain.add.text_fields_map'] = 'Этот раздел позволяет переименовать имена полей вызываемого события в пользовательские имена перед отправкой их в обратный вызов. Подполя должны быть разделены точкой (например, vars.status). Список всех полей, поддерживаемых каждым из событий, можно посмотреть по следующей <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">ссылке</a>.';
$lang['AdminMain.add.field_addsubmit'] = 'Добавить веб-крючок';
$lang['AdminMain.add.field_add_field'] = 'Добавить поле';
$lang['AdminMain.add.field_method'] = 'Метод';
$lang['AdminMain.add.field_type'] = 'Обратный звонок';
$lang['AdminMain.add.field_event'] = 'Событие';
$lang['AdminMain.add.field_callback'] = 'Обратный звонок';
$lang['AdminMain.add.option_delete'] = 'Удалить';
$lang['AdminMain.add.heading_options'] = 'Опции';
$lang['AdminMain.add.heading_parameter'] = 'Новое поле';
$lang['AdminMain.add.heading_field'] = 'Оригинальное поле';
$lang['AdminMain.add.heading_fields_map'] = 'Карта полей';
$lang['AdminMain.add.heading_event'] = 'Событие';
$lang['AdminMain.add.boxtitle_addwebhook'] = 'Добавить веб-крючок';
$lang['AdminMain.index.no_results'] = 'Нет доступных веб-крючков.';
$lang['AdminMain.index.text_description_incoming'] = 'Получает HTTP-запрос и запускает событие в системе, используя параметры, полученные в запросе. Запрос может быть получен с помощью GET, POST или JSON.';
$lang['AdminMain.index.text_description_outgoing'] = 'Отправляет HTTP-запрос на URL-адрес при возникновении события. Запрос может быть отправлен с помощью GET, POST, PUT или JSON.';
$lang['AdminMain.index.option_delete'] = 'Удалить';
$lang['AdminMain.index.option_edit'] = 'Редактировать';
$lang['AdminMain.index.heading_options'] = 'Опции';
$lang['AdminMain.index.heading_method'] = 'Метод';
$lang['AdminMain.index.heading_event'] = 'Событие';
$lang['AdminMain.index.heading_callback'] = 'Обратный звонок';
$lang['AdminMain.index.boxtitle_webhooks'] = 'Webhooks';
$lang['AdminMain.index.categorylink_addwebhook'] = 'Добавить веб-крючок';
$lang['AdminMain.index.category_outgoing'] = 'Исходящие';
$lang['AdminMain.index.category_incoming'] = 'Входящие';
$lang['AdminMain.index.page_title_edit'] = 'Редактировать вебхук';
$lang['AdminMain.index.page_title_add'] = 'Добавить веб-крючок';
$lang['AdminMain.index.page_title_index'] = 'Webhooks';
$lang['AdminMain.modal.delete_text'] = 'Вы уверены, что хотите удалить этот веб-крючок?';
$lang['AdminMain.!success.webhook_deleted'] = 'Веб-крючок был успешно удален!';
$lang['AdminMain.!success.webhook_updated'] = 'Веб-крючок был успешно обновлен!';
$lang['AdminMain.!success.webhook_added'] = 'Веб-крючок был успешно добавлен!';
$lang['AdminMain.!tooltip.callback'] = 'Обратный вызов представляет собой место, куда будет отправлен или получен запрос. Для исходящих веб-хуков это должен быть URL, а для входящих - имя URL, по которому будет получен запрос. Например, http://blesta.com/plugin/webhooks/trigger/index/[Имя обратного вызова].';
$lang['AdminMain.edit.field_cancel'] = 'Отмена';
$lang['AdminMain.add.field_cancel'] = 'Отмена';
$lang['AdminMain.logs.no_results'] = 'Журналы отсутствуют.';
$lang['AdminMain.logs.option_resend'] = 'Повторная отправка';
$lang['AdminMain.logs.confirm_resend'] = 'Вы уверены, что хотите повторно отправить это событие?';
$lang['AdminMain.logs.field_filterdateend'] = 'Дата окончания';
$lang['AdminMain.logs.field_filterdatestart'] = 'Дата начала';
$lang['AdminMain.logs.field_filterhttpstatus'] = 'Статус HTTP';
$lang['AdminMain.logs.field_filterevent'] = 'Событие';
$lang['AdminMain.logs.field_filterwebhook_all'] = 'Все веб-крючки';
$lang['AdminMain.logs.field_filterwebhook'] = 'Webhook';
$lang['AdminMain.logs.heading_options'] = 'Опции';
$lang['AdminMain.logs.heading_date_last_retry'] = 'Последняя попытка';
$lang['AdminMain.logs.heading_date_triggered'] = 'Дата срабатывания';
$lang['AdminMain.logs.heading_http_response'] = 'HTTP-ответ';
$lang['AdminMain.logs.heading_method'] = 'Метод';
$lang['AdminMain.logs.heading_response'] = 'Ответ';
$lang['AdminMain.logs.heading_event'] = 'Событие';
$lang['AdminMain.logs.heading_webhook'] = 'Webhook';
$lang['AdminMain.logs.categorylink_viewwebhooks'] = 'Просмотр веб-крючков';
$lang['AdminMain.logs.boxtitle_logs'] = 'Журналы Webhook';
$lang['AdminMain.index.option_logs'] = 'Журналы';
$lang['AdminMain.index.categorylink_viewlogs'] = 'Посмотреть все журналы';
$lang['AdminMain.index.page_title_logs'] = 'Журналы Webhook';
$lang['AdminMain.!success.webhook_retried'] = 'Веб-крючок был успешно повторно запущен!';

