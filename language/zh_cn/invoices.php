<?php
/**
 * Invoices
 *
 * @package blesta
 * @subpackage blesta.language.zh_cn
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Invoices.!error.line_items.minimum_split'] = '发票必须至少有两行才能分割。';
$lang['Invoices.!error.line_items.empty_split'] = '未选择要分割的发票行。';
$lang['Invoices.!error.lines[][tax].format'] = '项目税项必须为 "真 "或 "假';
$lang['Invoices.!error.lines[][amount].format'] = '单位成本必须是一个数字。';
$lang['Invoices.!error.lines[][qty].minimum'] = '请输入 1 个或更多数量。';
$lang['Invoices.!error.lines[][qty].format'] = '数量必须是一个数字。';
$lang['Invoices.!error.lines[][description].empty'] = '请输入细列项目说明。';
$lang['Invoices.!error.lines[][service_id].exists'] = '服务 ID 无效。';
$lang['Invoices.!error.lines[][id].exists'] = '项目编号无效。';
$lang['Invoices.!error.domain_renew.failed'] = '域名最多只能续费 10 年。';
$lang['Invoices.!error.invoice_id.draft'] = '给定发票不是草稿发票，因此无法删除。';
$lang['Invoices.!error.date_last_renewed.format'] = '最后一次周期性发票更新日期必须是有效的日期格式。';
$lang['Invoices.!error.date_renews.format'] = '经常性发票更新日期必须是有效的日期格式。';
$lang['Invoices.!error.duration.format'] = '持续时间无效。';
$lang['Invoices.!error.period.format'] = '句号无效。';
$lang['Invoices.!error.term.bounds'] = '术语应介于 1 和 65535 之间。';
$lang['Invoices.!error.term.format'] = '该术语应是一个数字。';
$lang['Invoices.!error.delivery.exists'] = '所提供的交付方式不存在。';
$lang['Invoices.!error.currency.length'] = '货币代码长度必须为 3 个字符。';
$lang['Invoices.!error.status.format'] = '状态无效。';
$lang['Invoices.!error.autodebit.valid'] = '请选择是否允许此发票自动转账。';
$lang['Invoices.!error.date_autodebit.format'] = '到期日期的日期格式无效。';
$lang['Invoices.!error.date_closed.format'] = '关闭日期的日期格式无效。';
$lang['Invoices.!error.date_due.after_billed'] = '到期日必须在账单日期当日或之后。';
$lang['Invoices.!error.date_due.format'] = '到期日期的日期格式无效。';
$lang['Invoices.!error.date_billed.format'] = '账单日期格式无效。';
$lang['Invoices.!error.client_id.exists'] = '客户 ID 无效。';
$lang['Invoices.!error.id.amount_applied'] = '发票行、币种和状态可能不会更新，因为该发票已应用了一个金额。';
$lang['Invoices.!error.id_value.valid'] = '无法确定发票 ID 值。';
$lang['Invoices.!error.id_format.length'] = '发票 ID 格式不得超过 64 个字符。';
$lang['Invoices.!error.id_format.empty'] = '未为发票设置 ID 格式。';
$lang['Invoices.!error.invoice_add.failed'] = '无法创建该发票。请重试。';
$lang['Invoices.!error.delivery.length'] = '发票交付方式长度不得超过 32 个字符。';
$lang['Invoices.!error.delivery.empty'] = '请输入发票交付方式。';
$lang['Invoices.!error.method.exists'] = '您必须设置至少一种交付方式。';
$lang['Invoices.!error.invoice_recur_id.exists'] = '经常性发票 ID 无效。';
$lang['Invoices.!error.invoice_id.exists'] = '发票 ID 无效。';
$lang['Invoices.cache_methods.json_pdf'] = 'JSON + PDF';
$lang['Invoices.cache_methods.json'] = 'JSON';
$lang['Invoices.cache_methods.none'] = '无';
$lang['Invoices.types.proforma'] = '预估';
$lang['Invoices.types.standard'] = '标准';
$lang['Invoices.status.void'] = '无效';
$lang['Invoices.status.draft'] = '草案';
$lang['Invoices.status.proforma'] = '预估';
$lang['Invoices.status.active'] = '活跃';
$lang['Invoices.!line_item.recurring_renew_description'] = '%1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.coupon_line_item_description_percent'] = '优惠券 %1$s - %2$s%%';
$lang['Invoices.!line_item.coupon_line_item_description_amount'] = '优惠券 %1$s';
$lang['Invoices.!line_item.prorated_credit'] = '按比例贷记';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_onetime'] = '↳ 按比例增加 %1$s %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_date'] = '按比例增加 %1$s %2$sx %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_qty'] = '↳ 按比例增加 %1$s %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_onetime'] = '↳ 按比例增加 %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_date'] = '↳ 按比例增加 %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_text'] = '↳ 按比例增加 %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_onetime'] = '↳ 按比例增加 %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_addition_date'] = '↳ 按比例增加 %1$s %2$s (%3$s - %4$s)';
$lang['Invoices.!line_item.service_option_prorated_addition'] = '↳ 按比例增加 %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_onetime'] = '↳ 按比例将 %1$s 从 %2$sx %3$s 升级到 %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_date'] = '↳ 按比例将 %1$s 从 %2$sx %3$s 升级到 %4$sx %5$s (%6$s - %7$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty'] = '↳ 按比例将 %1$s 从 %2$sx %3$s 升级到 %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_onetime'] = '按比例升级 %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_date'] = '↳ 按比例升级 %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text'] = '按比例升级 %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_onetime'] = '↳ 按比例将 %1$s 从 %2$s 升级到 %3$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_date'] = '↳ %1$s 的按比例升级从 %2$s 到 %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade'] = '↳ 按比例将 %1$s 从 %2$s 升级到 %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description_onetime'] = '按比例从 %1$s 升级到 %2$s - %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description'] = '按比例从 %1$s 升级到 %2$s - %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_setup_fee_description'] = '↳ %1$s - %2$s 安装费';
$lang['Invoices.!line_item.service_option_renew_description'] = '↳ %1$s - %2$s';
$lang['Invoices.!line_item.service_setup_fee_description'] = '%1$s - %2$s 设置费';
$lang['Invoices.!line_item.service_cancel_fee_description'] = '%1$s - %2$s 取消费';
$lang['Invoices.!line_item.service_renew_description'] = '%5$s%1$s - %2$s (%3$s - %4$s)';
$lang['Invoices.!note_private.line_item'] = '- %1$s @ %2$s: %3$s';
$lang['Invoices.!note_private.removed_lines'] = '删除细列项目：';
$lang['Invoices.!note_private.service_cancel_date'] = '服务 #%1$s 已取消 %2$s。';
$lang['Invoices.getDeliveryMethods.postalmethods'] = '邮寄方式';
$lang['Invoices.getDeliveryMethods.interfax'] = 'InterFax';
$lang['Invoices.getDeliveryMethods.paper'] = '纸张';
$lang['Invoices.getDeliveryMethods.email'] = '电子邮件';
$lang['Invoices.getPricingPeriods.year'] = '年份';
$lang['Invoices.getPricingPeriods.month'] = '月份';
$lang['Invoices.getPricingPeriods.week'] = '周数';
$lang['Invoices.getPricingPeriods.day'] = '日';
$lang['Invoices.!error.invoice_id.unique'] = '目的地发票不能是要合并的发票的一部分。';
$lang['Invoices.!error.invoice_id.status'] = '目的地发票必须是开放的，没有任何交易。';
$lang['Invoices.!error.invoice_ids.client'] = '所有发票必须属于同一个客户。';
$lang['Invoices.!error.invoice_ids.status'] = '所有发票都必须是开放的，没有任何交易。';
$lang['Invoices.!error.invoice_ids.currency'] = '所有发票必须使用相同的货币。';
$lang['Invoices.!error.invoice_ids.count'] = '必须至少选择两张发票。';
$lang['Invoices.!line_item.parent_description'] = '儿童服务%1$s -%2$s ：';

