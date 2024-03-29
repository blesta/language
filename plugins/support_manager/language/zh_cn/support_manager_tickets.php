<?php
/**
 * Support Manager Tickets
 *
 * @package blesta
 * @subpackage blesta.language.zh_cn
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SupportManagerTickets.reassign_note'] = '此票单已重新分配给 %1$s。以前的客户回复已重新分配给该客户，可能是由其他人作出的。';
$lang['SupportManagerTickets.log.unassigned'] = '未分配';
$lang['SupportManagerTickets.log.ticket_staff_id'] = '分配到 %1$s。';
$lang['SupportManagerTickets.log.status'] = '状态已更改为 %1$s。';
$lang['SupportManagerTickets.log.priority'] = '优先级已更改为 %1$s。';
$lang['SupportManagerTickets.log.summary'] = '摘要已更新。';
$lang['SupportManagerTickets.log.department_id'] = '部门已更改为 %1$s。';
$lang['SupportManagerTickets.type.log'] = '日志';
$lang['SupportManagerTickets.type.note'] = '备注';
$lang['SupportManagerTickets.type.reply'] = '答复';
$lang['SupportManagerTickets.status.trash'] = '垃圾';
$lang['SupportManagerTickets.status.closed'] = '关闭';
$lang['SupportManagerTickets.status.on_hold'] = '搁置';
$lang['SupportManagerTickets.status.in_progress'] = '进行中';
$lang['SupportManagerTickets.status.awaiting_reply'] = '等待客户回复';
$lang['SupportManagerTickets.status.open'] = '等待工作人员答复';
$lang['SupportManagerTickets.priority.low'] = '低';
$lang['SupportManagerTickets.priority.medium'] = '中型';
$lang['SupportManagerTickets.priority.high'] = '高';
$lang['SupportManagerTickets.priority.critical'] = '关键';
$lang['SupportManagerTickets.priority.emergency'] = '紧急情况';
$lang['SupportManagerTickets.merge.reply'] = '此票已并入 #%1$s 票。';
$lang['SupportManagerTickets.!error.client_id.company'] = '至少有一张机票与指定客户不属于同一家公司。';
$lang['SupportManagerTickets.!error.ticket_ids[].exists'] = '至少有一张票的 ID 无效。';
$lang['SupportManagerTickets.!error.tickets.department_matches'] = '至少有一张机票无法分配给指定部门，因为它不属于同一家公司。';
$lang['SupportManagerTickets.!error.tickets.service_matches'] = '至少有一张票不能分配给指定服务，因为它不属于相关客户。';
$lang['SupportManagerTickets.!error.merge_into.itself'] = '票据不得与票据本身合并。';
$lang['SupportManagerTickets.!error.tickets.valid'] = '所选票单中至少有一张无效、已关闭或与所选票单不属于同一客户。';
$lang['SupportManagerTickets.!error.replies.notes'] = '如果不包含票单回复，则不得将票单回复注释拆分为单独的票单。';
$lang['SupportManagerTickets.!error.replies.valid'] = '至少有一个票单回复 ID 无效，或者所有回复都已被选中。您必须至少保留一个回复。';
$lang['SupportManagerTickets.!error.client_id.attached_to'] = '票据回复可能不是来自不同的客户端。';
$lang['SupportManagerTickets.!error.details.empty'] = '请输入有关该机票的一些详细信息。';
$lang['SupportManagerTickets.!error.type.new_valid'] = '新票单的回复类型必须为 "回复"。';
$lang['SupportManagerTickets.!error.type.format'] = '请选择有效的回复类型。';
$lang['SupportManagerTickets.!error.ticket_id.exists'] = '票据 ID 无效。';
$lang['SupportManagerTickets.!error.date_closed.format'] = '票据关闭日期的日期格式无效。';
$lang['SupportManagerTickets.!error.date_updated.format'] = '票据更新日期的日期格式无效。';
$lang['SupportManagerTickets.!error.date_added.format'] = '机票添加日期的日期格式无效。';
$lang['SupportManagerTickets.!error.status.trash'] = '已销毁的票据不可编辑。';
$lang['SupportManagerTickets.!error.status.format'] = '请选择有效状态。';
$lang['SupportManagerTickets.!error.priority.format'] = '请选择有效的优先级。';
$lang['SupportManagerTickets.!error.summary.length'] = '摘要长度不得超过 255 个字符。';
$lang['SupportManagerTickets.!error.summary.empty'] = '请输入摘要。';
$lang['SupportManagerTickets.!error.email.format'] = '请输入有效的电子邮件地址。';
$lang['SupportManagerTickets.!error.client_id.set'] = '票据属于另一个客户，指定的客户不可更改。';
$lang['SupportManagerTickets.!error.client_id.exists'] = '客户 ID 无效。';
$lang['SupportManagerTickets.!error.service_id.belongs'] = '所选服务无效。';
$lang['SupportManagerTickets.!error.service_id.exists'] = '此票所选服务不存在。';
$lang['SupportManagerTickets.!error.by_staff_id.exists'] = '执行编辑的工作人员不存在。';
$lang['SupportManagerTickets.!error.contact_id.valid'] = '如果没有有效的客户端，联系人可能无法回复票单。';
$lang['SupportManagerTickets.!error.contact_id.exists'] = '为该票单回复选择的联系人不存在。';
$lang['SupportManagerTickets.!error.staff_id.exists'] = '工作人员编号无效。';
$lang['SupportManagerTickets.!error.department_id.exists'] = '请选择一个有效的部门。';
$lang['SupportManagerTickets.!error.code.format'] = '机票代码必须只包含数字。';

