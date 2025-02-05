<?php
/**
 * Services
 *
 * @package blesta
 * @subpackage blesta.language.zh_cn
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Services.getActions.update_coupon'] = '更新优惠券';
$lang['Services.getActions.change_renew'] = '更改续订日期';
$lang['Services.getActions.schedule_cancel'] = '取消时间表';
$lang['Services.getActions.cancel'] = '取消';
$lang['Services.getActions.unsuspend'] = '取消悬挂';
$lang['Services.getActions.suspend'] = '暂停';
$lang['Services.getStatusTypes.in_review'] = '回顾';
$lang['Services.getStatusTypes.suspended'] = '暂停';
$lang['Services.getStatusTypes.pending'] = '待定';
$lang['Services.getStatusTypes.canceled'] = '已取消';
$lang['Services.getStatusTypes.active'] = '活跃';
$lang['Services.!error.prorate.format'] = '是否按比例分配必须设置为 "true "或 "false"。';
$lang['Services.!error.service_id.has_children'] = '此服务可能无法删除，因为它有子服务。请取消或删除这些服务并重试。';
$lang['Services.!error.status.valid'] = '只有待处理、已取消或审查中的服务才能删除。';
$lang['Services.!error.configoptions.valid'] = '所选可配置选项之一对服务无效。';
$lang['Services.!error.date_canceled.valid'] = '您必须设定一个有效日期才能取消这项服务。';
$lang['Services.!error.pricing_id.valid'] = '您必须选择一个有效的术语。';
$lang['Services.!error.invoice_method.valid'] = '您必须选择有效的发票方式。';
$lang['Services.!error.fields[][encrypted].format'] = '加密服务字段格式无效。';
$lang['Services.!error.fields[][value].empty'] = '服务字段中的值为空。';
$lang['Services.!error.fields[][key].empty'] = '服务字段中的密钥为空。';
$lang['Services.!error.use_module.format'] = '使用模块格式无效。';
$lang['Services.!error.date_canceled.format'] = '取消日期格式无效。';
$lang['Services.!error.date_suspended.format'] = '暂停日期格式无效。';
$lang['Services.!error.date_last_renewed.format'] = '最后更新日期格式无效。';
$lang['Services.!error.date_renews.valid'] = '续订日期必须大于 %1$s 的上次续订日期。';
$lang['Services.!error.date_renews.format'] = '更新日期格式无效。';
$lang['Services.!error.date_added.format'] = '添加的日期格式无效。';
$lang['Services.!error.status.format'] = '状态无效。';
$lang['Services.!error.override_currency.format'] = '请选择有效货币。';
$lang['Services.!error.override_price.override'] = '必须同时设置价格和货币才能覆盖当前价格。';
$lang['Services.!error.override_price.format'] = '价格覆盖值必须是一个数字。';
$lang['Services.!error.module_group.valid'] = '模块组不存在。';
$lang['Services.!error.module_row.valid'] = '模块行不存在。';
$lang['Services.!error.qty.available'] = '已达到数量限制。如果可能，请选择更少的数量。';
$lang['Services.!error.qty.length'] = '数量长度不得超过 10 个字符。';
$lang['Services.!error.qty.format'] = '数量必须是一个数字。';
$lang['Services.!error.coupon_id.valid'] = '该优惠券似乎无效。';
$lang['Services.!error.module_row_id.exists'] = '模块行 ID 无效。';
$lang['Services.!error.client_id.allowed'] = '客户端无法访问该软件包。';
$lang['Services.!error.client_id.exists'] = '客户端不存在。';
$lang['Services.!error.pricing_id.overrides'] = '设置价格覆盖时，不能更改套餐条款。';
$lang['Services.!error.pricing_id.exists'] = '请选择一个有效的术语。';
$lang['Services.!error.id_value.valid'] = '无法确定发票 ID 值。';
$lang['Services.!error.id_format.length'] = '发票 ID 格式不得超过 64 个字符。';
$lang['Services.!error.id_format.empty'] = '未为发票设置 ID 格式。';
$lang['Services.!error.package_group_id.exists'] = '软件包组 ID 无效。';
$lang['Services.!error.parent_service_id.parent'] = '父服务 ID 已作为另一服务的子服务存在。';
$lang['Services.!error.parent_service_id.exists'] = '父服务 ID 无效。';
$lang['Services.!error.service_id.exists'] = '服务 ID 无效。';
$lang['Services.!error.move.unpaid_invoices'] = '该服务无法转移给其他客户，因为它有未支付的发票。';
$lang['Services.!error.encrypted.format'] = '加密格式无效。';
$lang['Services.!error.value.empty'] = '服务字段值不得为空。';
$lang['Services.!error.key.length'] = '服务字段密钥不得超过 32 个字符。';
$lang['Services.!error.key.empty'] = '服务字段关键字不能为空。';

