<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.zh_cn
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.!tooltip.callback'] = '回调表示发送或接收请求的位置，对于发出的网络钩子，回调必须是一个 URL，而对于接收的网络钩子，回调必须是接收请求的 URL 的名称。例如，http://blesta.com/plugin/webhooks/trigger/index/[回调名称]。';
$lang['AdminMain.!success.webhook_added'] = '网络钩子已成功添加！';
$lang['AdminMain.!success.webhook_updated'] = '网络钩子已成功更新！';
$lang['AdminMain.!success.webhook_deleted'] = '网络钩子已成功删除！';
$lang['AdminMain.modal.delete_text'] = '您确定要删除此网络钩子吗？';
$lang['AdminMain.index.page_title_index'] = '网络钩子';
$lang['AdminMain.index.page_title_add'] = '添加 Webhook';
$lang['AdminMain.index.page_title_edit'] = '编辑 Webhook';
$lang['AdminMain.index.category_incoming'] = '传入';
$lang['AdminMain.index.category_outgoing'] = '传出';
$lang['AdminMain.index.categorylink_addwebhook'] = '添加 Webhook';
$lang['AdminMain.index.boxtitle_webhooks'] = '网络钩子';
$lang['AdminMain.index.heading_callback'] = '回调';
$lang['AdminMain.index.heading_event'] = '活动';
$lang['AdminMain.index.heading_method'] = '方法';
$lang['AdminMain.index.heading_options'] = '选项';
$lang['AdminMain.index.option_edit'] = '编辑';
$lang['AdminMain.index.option_delete'] = '删除';
$lang['AdminMain.index.text_description_outgoing'] = '触发事件时向 URL 发送 HTTP 请求。请求可以使用 GET、POST、PUT 或 JSON 发送。';
$lang['AdminMain.index.text_description_incoming'] = '接收 HTTP 请求，并使用请求中接收到的参数触发系统事件。接收请求的方式可以是 GET、POST 或 JSON。';
$lang['AdminMain.index.no_results'] = '没有可用的网络钩子。';
$lang['AdminMain.add.boxtitle_addwebhook'] = '添加 Webhook';
$lang['AdminMain.add.heading_event'] = '活动';
$lang['AdminMain.add.heading_fields_map'] = '田野地图';
$lang['AdminMain.add.heading_field'] = '原创领域';
$lang['AdminMain.add.heading_parameter'] = '新领域';
$lang['AdminMain.add.heading_options'] = '选项';
$lang['AdminMain.add.option_delete'] = '删除';
$lang['AdminMain.add.field_callback'] = '回调';
$lang['AdminMain.add.field_event'] = '活动';
$lang['AdminMain.add.field_type'] = '回调';
$lang['AdminMain.add.field_method'] = '方法';
$lang['AdminMain.add.field_add_field'] = '添加字段';
$lang['AdminMain.add.field_addsubmit'] = '添加 Webhook';
$lang['AdminMain.add.text_fields_map'] = '本节允许您在将触发事件的字段发送到回调之前，将其重命名为自定义名称。子字段应使用句号分隔（如 vars.status）。要查看每个事件支持的所有字段的列表，可以查看下面的 <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">link</a>.';
$lang['AdminMain.edit.boxtitle_editwebhook'] = '编辑 Webhook';
$lang['AdminMain.edit.heading_event'] = '活动';
$lang['AdminMain.edit.heading_fields_map'] = '田野地图';
$lang['AdminMain.edit.heading_field'] = '原创领域';
$lang['AdminMain.edit.heading_parameter'] = '新领域';
$lang['AdminMain.edit.heading_options'] = '选项';
$lang['AdminMain.edit.option_delete'] = '删除';
$lang['AdminMain.edit.field_callback'] = '回调';
$lang['AdminMain.edit.field_event'] = '活动';
$lang['AdminMain.edit.field_type'] = '回调';
$lang['AdminMain.edit.field_method'] = '方法';
$lang['AdminMain.edit.field_add_field'] = '添加字段';
$lang['AdminMain.edit.field_editsubmit'] = '编辑 Webhook';
$lang['AdminMain.edit.text_fields_map'] = '本节允许您在将事件触发的字段发送到回调之前，将其重命名为自定义名称。子字段应使用句号分隔（如 vars.status）。要查看每个事件支持的所有字段的列表，可以查看下面的 <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">link</a>.';
$lang['AdminMain.edit.field_cancel'] = '取消';
$lang['AdminMain.add.field_cancel'] = '取消';
$lang['AdminMain.logs.no_results'] = '没有可用的日志。';
$lang['AdminMain.logs.option_resend'] = '重新发送';
$lang['AdminMain.logs.confirm_resend'] = '您确定要重新发送此事件吗？';
$lang['AdminMain.logs.field_filterdateend'] = '结束日期';
$lang['AdminMain.logs.field_filterdatestart'] = '开始日期';
$lang['AdminMain.logs.field_filterhttpstatus'] = 'HTTP 状态';
$lang['AdminMain.logs.field_filterevent'] = '活动';
$lang['AdminMain.logs.field_filterwebhook_all'] = '所有网络钩子';
$lang['AdminMain.logs.field_filterwebhook'] = '网络钩子';
$lang['AdminMain.logs.heading_options'] = '选项';
$lang['AdminMain.logs.heading_date_last_retry'] = '最后一次重试';
$lang['AdminMain.logs.heading_date_triggered'] = '触发日期';
$lang['AdminMain.logs.heading_http_response'] = 'HTTP 响应';
$lang['AdminMain.logs.heading_method'] = '方法';
$lang['AdminMain.logs.heading_response'] = '回应';
$lang['AdminMain.logs.heading_event'] = '活动';
$lang['AdminMain.logs.heading_webhook'] = '网络钩子';
$lang['AdminMain.logs.categorylink_viewwebhooks'] = '查看网络钩子';
$lang['AdminMain.logs.boxtitle_logs'] = '网络钩子日志';
$lang['AdminMain.index.option_logs'] = '日志';
$lang['AdminMain.index.categorylink_viewlogs'] = '查看所有日志';
$lang['AdminMain.index.page_title_logs'] = '网络钩子日志';
$lang['AdminMain.!success.webhook_retried'] = '网络钩子重试成功！';

