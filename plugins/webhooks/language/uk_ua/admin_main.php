<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.uk_ua
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.index.category_incoming'] = 'Вхідні';
$lang['AdminMain.edit.text_fields_map'] = 'У цьому розділі ви можете перейменувати назву полів події, що спрацьовує, на власну назву перед тим, як вони будуть надіслані до коллбеку. Підполя слід розділяти крапкою (наприклад, vars.status). Щоб переглянути список усіх полів, які підтримуються кожною з подій, ви можете перейти за наступним <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">посиланням</a>.';
$lang['AdminMain.edit.field_editsubmit'] = 'Редагування веб-хука';
$lang['AdminMain.edit.field_add_field'] = 'Додати поле';
$lang['AdminMain.edit.field_method'] = 'Метод';
$lang['AdminMain.edit.field_type'] = 'Зворотній дзвінок';
$lang['AdminMain.edit.field_event'] = 'Подія';
$lang['AdminMain.edit.field_callback'] = 'Зворотній дзвінок';
$lang['AdminMain.edit.option_delete'] = 'Видалити';
$lang['AdminMain.edit.heading_options'] = 'Параметри';
$lang['AdminMain.edit.heading_parameter'] = 'Нове поле';
$lang['AdminMain.edit.heading_field'] = 'Оригінальне поле';
$lang['AdminMain.edit.heading_fields_map'] = 'Карта полів';
$lang['AdminMain.edit.heading_event'] = 'Подія';
$lang['AdminMain.edit.boxtitle_editwebhook'] = 'Редагування веб-хука';
$lang['AdminMain.add.text_fields_map'] = 'У цьому розділі ви можете перейменувати назву полів події, що спрацьовує, на власну назву перед тим, як вони будуть надіслані до коллбеку. Підполя слід розділяти крапкою (наприклад, vars.status). Щоб переглянути список усіх полів, які підтримуються кожною з подій, ви можете перейти за наступним <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">посиланням</a>.';
$lang['AdminMain.add.field_addsubmit'] = 'Додати Webhook';
$lang['AdminMain.add.field_add_field'] = 'Додати поле';
$lang['AdminMain.add.field_method'] = 'Метод';
$lang['AdminMain.add.field_type'] = 'Зворотній дзвінок';
$lang['AdminMain.add.field_event'] = 'Подія';
$lang['AdminMain.add.field_callback'] = 'Зворотній дзвінок';
$lang['AdminMain.add.option_delete'] = 'Видалити';
$lang['AdminMain.add.heading_options'] = 'Параметри';
$lang['AdminMain.add.heading_parameter'] = 'Нове поле';
$lang['AdminMain.add.heading_field'] = 'Оригінальне поле';
$lang['AdminMain.add.heading_fields_map'] = 'Карта полів';
$lang['AdminMain.add.heading_event'] = 'Подія';
$lang['AdminMain.add.boxtitle_addwebhook'] = 'Додати Webhook';
$lang['AdminMain.index.no_results'] = 'Веб-хуки недоступні.';
$lang['AdminMain.index.text_description_incoming'] = 'Отримує HTTP-запит і запускає подію в системі, використовуючи параметри, отримані в запиті. Запит може бути отриманий за допомогою GET, POST або JSON.';
$lang['AdminMain.index.text_description_outgoing'] = 'Надсилає HTTP-запит на URL-адресу, коли спрацьовує подія. Запит може бути відправлений за допомогою GET, POST, PUT або JSON.';
$lang['AdminMain.index.option_delete'] = 'Видалити';
$lang['AdminMain.index.option_edit'] = 'Редагувати';
$lang['AdminMain.index.heading_options'] = 'Параметри';
$lang['AdminMain.index.heading_method'] = 'Метод';
$lang['AdminMain.index.heading_event'] = 'Подія';
$lang['AdminMain.index.heading_callback'] = 'Зворотній дзвінок';
$lang['AdminMain.index.boxtitle_webhooks'] = 'Веб-хуки';
$lang['AdminMain.index.categorylink_addwebhook'] = 'Додати Webhook';
$lang['AdminMain.index.category_outgoing'] = 'Вихідний';
$lang['AdminMain.index.page_title_edit'] = 'Редагування веб-хука';
$lang['AdminMain.index.page_title_add'] = 'Додати Webhook';
$lang['AdminMain.index.page_title_index'] = 'Веб-хуки';
$lang['AdminMain.modal.delete_text'] = 'Ви впевнені, що хочете видалити цей веб-хук?';
$lang['AdminMain.!success.webhook_deleted'] = 'Вебхук успішно видалено!';
$lang['AdminMain.!success.webhook_updated'] = 'Вебхук успішно оновлено!';
$lang['AdminMain.!success.webhook_added'] = 'Вебхук успішно додано!';
$lang['AdminMain.!tooltip.callback'] = 'Зворотний виклик вказує, куди буде надіслано або отримано запит, для вихідних веб-хуків це має бути URL-адреса, а для вхідних - ім\'я URL-адреси, на яку буде надіслано запит, наприклад, http://blesta.com/plugin/webhooks/trigger/index/[Ім\'я зворотного виклику].';
$lang['AdminMain.edit.field_cancel'] = 'Скасувати';
$lang['AdminMain.add.field_cancel'] = 'Скасувати';
$lang['AdminMain.logs.no_results'] = 'Журналів немає.';
$lang['AdminMain.logs.option_resend'] = 'Повторно відправити';
$lang['AdminMain.logs.confirm_resend'] = 'Ви впевнені, що хочете повторно відправити цю подію?';
$lang['AdminMain.logs.field_filterdateend'] = 'Дата закінчення';
$lang['AdminMain.logs.field_filterdatestart'] = 'Дата початку';
$lang['AdminMain.logs.field_filterhttpstatus'] = 'Статус HTTP';
$lang['AdminMain.logs.field_filterevent'] = 'Подія';
$lang['AdminMain.logs.field_filterwebhook_all'] = 'Усі веб-хуки';
$lang['AdminMain.logs.field_filterwebhook'] = 'Веб-гачок';
$lang['AdminMain.logs.heading_options'] = 'Параметри';
$lang['AdminMain.logs.heading_date_last_retry'] = 'Остання спроба';
$lang['AdminMain.logs.heading_date_triggered'] = 'Дата спрацювання';
$lang['AdminMain.logs.heading_http_response'] = 'Відповідь HTTP';
$lang['AdminMain.logs.heading_method'] = 'Метод';
$lang['AdminMain.logs.heading_response'] = 'Відповідь';
$lang['AdminMain.logs.heading_event'] = 'Подія';
$lang['AdminMain.logs.heading_webhook'] = 'Веб-гачок';
$lang['AdminMain.logs.categorylink_viewwebhooks'] = 'Перегляд веб-хуків';
$lang['AdminMain.logs.boxtitle_logs'] = 'Журнали Webhook';
$lang['AdminMain.index.option_logs'] = 'Журнали';
$lang['AdminMain.index.categorylink_viewlogs'] = 'Переглянути всі журнали';
$lang['AdminMain.index.page_title_logs'] = 'Журнали Webhook';
$lang['AdminMain.!success.webhook_retried'] = 'Повторна спроба виконання веб-хука була успішною!';

