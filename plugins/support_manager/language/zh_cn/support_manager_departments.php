<?php
/**
 * Support Manager Departments
 *
 * @package blesta
 * @subpackage blesta.language.zh_cn
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SupportManagerDepartments.message_types.deleted'] = '已删除';
$lang['SupportManagerDepartments.reminder_intervals.minutes'] = '%1$s 分钟';
$lang['SupportManagerDepartments.reminder_intervals.hours'] = '%1$s 小时';
$lang['SupportManagerDepartments.reminder_intervals.hour'] = '1 小时';
$lang['SupportManagerDepartments.ticket_intervals.days'] = '%1$s 天';
$lang['SupportManagerDepartments.ticket_intervals.day'] = '1 天';
$lang['SupportManagerDepartments.visibility_options.staff'] = '仅限工作人员';
$lang['SupportManagerDepartments.visibility_options.client'] = '客户和员工';
$lang['SupportManagerDepartments.field_types.password'] = '密码';
$lang['SupportManagerDepartments.field_types.textarea'] = '文本区域';
$lang['SupportManagerDepartments.field_types.text'] = '文本';
$lang['SupportManagerDepartments.field_types.quantity'] = '数量';
$lang['SupportManagerDepartments.field_types.select'] = '下拉式';
$lang['SupportManagerDepartments.field_types.radio'] = '无线电';
$lang['SupportManagerDepartments.field_types.checkbox'] = '复选框';
$lang['SupportManagerDepartments.message_types.read'] = '阅读';
$lang['SupportManagerDepartments.security_types.tls'] = 'TLS';
$lang['SupportManagerDepartments.security_types.ssl'] = 'SSL';
$lang['SupportManagerDepartments.security_types.none'] = '无';
$lang['SupportManagerDepartments.priorities.low'] = '低';
$lang['SupportManagerDepartments.priorities.medium'] = '中型';
$lang['SupportManagerDepartments.priorities.high'] = '高';
$lang['SupportManagerDepartments.priorities.critical'] = '关键';
$lang['SupportManagerDepartments.priorities.emergency'] = '紧急情况';
$lang['SupportManagerDepartments.statuses.visible'] = '可见';
$lang['SupportManagerDepartments.statuses.hidden'] = '隐藏';
$lang['SupportManagerDepartments.methods.imap'] = 'IMAP';
$lang['SupportManagerDepartments.methods.pop3'] = 'POP3';
$lang['SupportManagerDepartments.methods.pipe'] = '管道';
$lang['SupportManagerDepartments.methods.none'] = '无';
$lang['SupportManagerDepartments.!error.department_id.has_tickets'] = '无法删除该部门，因为目前已为其分配了票单。';
$lang['SupportManagerDepartments.!error.auto_delete.format'] = '关闭票单后是否自动删除字段数据必须设置为 0 或 1。';
$lang['SupportManagerDepartments.!error.encrypted.format'] = '是否加密字段数据必须设置为 0 或 1。';
$lang['SupportManagerDepartments.!error.client_add.format'] = '是否允许客户端添加必须设为 0 或 1。';
$lang['SupportManagerDepartments.!error.type.format'] = '请选择有效的字段类型。';
$lang['SupportManagerDepartments.!error.visibility.format'] = '请选择有效的可见性状态。';
$lang['SupportManagerDepartments.!error.label.empty'] = '请输入标签。';
$lang['SupportManagerDepartments.!error.department_id.exists'] = '部门 ID 无效。';
$lang['SupportManagerDepartments.!error.status.format'] = '状态类型无效。';
$lang['SupportManagerDepartments.!error.response_id.format'] = '请选择有效的自动关闭响应。';
$lang['SupportManagerDepartments.!error.max_attachment_size.format'] = '最大附件尺寸必须是数值。';
$lang['SupportManagerDepartments.!error.attachment_types.length'] = '附件类型列表长度不得超过 255 个字符。';
$lang['SupportManagerDepartments.!error.include_attachments.format'] = '是否包含票据附件必须设置为 0 或 1。';
$lang['SupportManagerDepartments.!error.reminder_ticket_priority.format'] = '请优先选择有效的提醒票。';
$lang['SupportManagerDepartments.!error.reminder_ticket_status.format'] = '请选择有效的机票提醒状态。';
$lang['SupportManagerDepartments.!error.reminder_ticket_interval.format'] = '请选择有效的提醒票间隔时间。';
$lang['SupportManagerDepartments.!error.delete_ticket_interval.format'] = '请选择有效的删除票区间。';
$lang['SupportManagerDepartments.!error.close_ticket_interval.format'] = '请选择有效的关闭票区间。';
$lang['SupportManagerDepartments.!error.send_ticket_received.format'] = '是否为该部门发送票单确认电子邮件必须设置为 0 或 1。';
$lang['SupportManagerDepartments.!error.override_from_email.format'] = '是否允许在电子邮件模板中将此部门的电子邮件地址用作发件人地址，必须设置为 0 或 1。';
$lang['SupportManagerDepartments.!error.require_captcha.format'] = '是否要求人工验证必须设置为 0 或 1。';
$lang['SupportManagerDepartments.!error.clients_only.format'] = '是否允许客户打开或回复票单必须设置为 0 或 1。';
$lang['SupportManagerDepartments.!error.mark_messages.valid'] = '使用 POP3 的邮件只能标记为已删除。';
$lang['SupportManagerDepartments.!error.mark_messages.format'] = '请选择有效的信息类型来标记信息。';
$lang['SupportManagerDepartments.!error.security.format'] = '请选择有效的安全类型。';
$lang['SupportManagerDepartments.!error.service.format'] = '请选择有效的服务类型。';
$lang['SupportManagerDepartments.!error.port.length'] = '端口长度不得超过 6 位数。';
$lang['SupportManagerDepartments.!error.port.format'] = '请输入端口号。';
$lang['SupportManagerDepartments.!error.password.format'] = '请输入密码。';
$lang['SupportManagerDepartments.!error.user.length'] = '用户名长度不得超过 64 个字符。';
$lang['SupportManagerDepartments.!error.user.format'] = '请输入用户名。';
$lang['SupportManagerDepartments.!error.host.length'] = '主机名长度不得超过 128 个字符。';
$lang['SupportManagerDepartments.!error.host.format'] = '请输入有效的主机名。';
$lang['SupportManagerDepartments.!error.default_priority.format'] = '默认优先级类型无效。';
$lang['SupportManagerDepartments.!error.method.mailparse'] = '解析电子邮件票据需要使用 PHP Mailparse PECL 扩展。';
$lang['SupportManagerDepartments.!error.method.imap'] = '通过 POP3 或 IMAP 下载邮件需要使用 PHP IMAP 扩展。';
$lang['SupportManagerDepartments.!error.method.format'] = '方法类型无效。';
$lang['SupportManagerDepartments.!error.email.format'] = '请输入有效的电子邮件地址。';
$lang['SupportManagerDepartments.!error.description.empty'] = '请输入描述。';
$lang['SupportManagerDepartments.!error.name.empty'] = '请输入该部门的名称。';
$lang['SupportManagerDepartments.!error.company_id.exists'] = '公司 ID 无效。';
$lang['SupportManagerDepartments.!error.priorities[].format'] = '一个或多个优先级无效。';
$lang['SupportManagerDepartments.!error.priorities[].empty'] = '至少选择一个优先事项。';
$lang['SupportManagerDepartments.visibility_options.client_only'] = '仅限客户';
$lang['SupportManagerDepartments.field_types.emergency'] = '升级为紧急情况';
$lang['SupportManagerDepartments.!error.required.format'] = '是否要求备案必须设置为 0 或 1。';
$lang['SupportManagerDepartments.providers.microsoft'] = '微软';
$lang['SupportManagerDepartments.providers.google'] = '谷歌';
$lang['SupportManagerDepartments.methods.oauth2'] = 'OAuth 2.0';

