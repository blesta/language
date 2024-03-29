<?php
/**
 * Admin Company Taxes
 *
 * @package blesta
 * @subpackage blesta.language.zh_cn
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyTaxes.edit.field.editsubmit'] = '编辑规则';
$lang['AdminCompanyTaxes.edit.field.state'] = '州/省';
$lang['AdminCompanyTaxes.edit.field.country'] = '国家';
$lang['AdminCompanyTaxes.edit.field.amount'] = '金额';
$lang['AdminCompanyTaxes.edit.field.name'] = '税种名称';
$lang['AdminCompanyTaxes.edit.field.level2'] = '二级';
$lang['AdminCompanyTaxes.edit.field.level1'] = '第 1 级';
$lang['AdminCompanyTaxes.edit.field.level'] = '税收水平';
$lang['AdminCompanyTaxes.edit.field.type'] = '税种';
$lang['AdminCompanyTaxes.edit.boxtitle_edit'] = '编辑税则';
$lang['AdminCompanyTaxes.edit.page_title'] = '设置 > 公司 > 税项 > 编辑税收规则';
$lang['AdminCompanyTaxes.add.field.addsubmit'] = '创建规则';
$lang['AdminCompanyTaxes.add.field.state'] = '州/省';
$lang['AdminCompanyTaxes.add.field.country'] = '国家';
$lang['AdminCompanyTaxes.add.field.amount'] = '金额';
$lang['AdminCompanyTaxes.add.field.name'] = '税种名称';
$lang['AdminCompanyTaxes.add.field.level2'] = '二级';
$lang['AdminCompanyTaxes.add.field.level1'] = '第 1 级';
$lang['AdminCompanyTaxes.add.field.level'] = '税收水平';
$lang['AdminCompanyTaxes.add.field.type'] = '税种';
$lang['AdminCompanyTaxes.add.boxtitle_add'] = '添加税则';
$lang['AdminCompanyTaxes.add.page_title'] = '设置 > 公司 > 税收 > 添加税收规则';
$lang['AdminCompanyTaxes.rules.confirm_delete'] = '您确定要删除这条税则吗？';
$lang['AdminCompanyTaxes.rules.option_delete'] = '删除';
$lang['AdminCompanyTaxes.rules.option_edit'] = '编辑';
$lang['AdminCompanyTaxes.rules.text_all'] = '全部';
$lang['AdminCompanyTaxes.rules.text_options'] = '选项';
$lang['AdminCompanyTaxes.rules.text_state'] = '州/省';
$lang['AdminCompanyTaxes.rules.text_country'] = '国家';
$lang['AdminCompanyTaxes.rules.text_amount'] = '金额';
$lang['AdminCompanyTaxes.rules.text_type'] = '类型';
$lang['AdminCompanyTaxes.rules.text_name'] = '名称';
$lang['AdminCompanyTaxes.rules.heading_level2'] = '第 2 级规则';
$lang['AdminCompanyTaxes.rules.heading_level1'] = '第 1 级规则';
$lang['AdminCompanyTaxes.rules.boxtitle_rules'] = '税务规则';
$lang['AdminCompanyTaxes.rules.categorylink_addrule'] = '添加税则';
$lang['AdminCompanyTaxes.rules.no_results'] = '没有等级 %1$s 税收规则。';
$lang['AdminCompanyTaxes.rules.page_title'] = '设置 > 公司 > 税收 > 税则';
$lang['AdminCompanyTaxes.basic.field_addsubmit'] = '更新设置';
$lang['AdminCompanyTaxes.basic.heading_tax_provider'] = '%1$s 设置';
$lang['AdminCompanyTaxes.basic.field_taxid'] = '税号/增值税号';
$lang['AdminCompanyTaxes.basic.note_cancelation_fee_tax'] = '如果启用，任何取消费用都将被征税。';
$lang['AdminCompanyTaxes.basic.field_cancelation_fee_tax'] = '取消税费';
$lang['AdminCompanyTaxes.basic.note_setup_fee_tax'] = '如果启用，任何设置费用都将被征税。';
$lang['AdminCompanyTaxes.basic.field_setup_fee_tax'] = '税务设置费';
$lang['AdminCompanyTaxes.basic.note_cascade_tax'] = '如果启用，将首先对发票总额进行第 1 级纳税评估，然后对包括第 1 级纳税在内的新总额进行第 2 级纳税评估。这将导致税中税。否则，税率 1 和税率 2 只在税前发票总额上分摊。';
$lang['AdminCompanyTaxes.basic.field_cascade_tax'] = '瀑布税';
$lang['AdminCompanyTaxes.basic.note_enable_tax'] = '选中此选项可启用该公司的税务功能。';
$lang['AdminCompanyTaxes.basic.field_enable_tax'] = '启用税收';
$lang['AdminCompanyTaxes.basic.heading_general'] = '常规设置';
$lang['AdminCompanyTaxes.basic.boxtitle_basic'] = '基本税务设置';
$lang['AdminCompanyTaxes.basic.page_title'] = '设置 > 公司 > 税项 > 基本税项设置';
$lang['AdminCompanyTaxes.!tooltip.state'] = '选择该税则适用的州/省。';
$lang['AdminCompanyTaxes.!tooltip.country'] = '选择该税则适用的国家。';
$lang['AdminCompanyTaxes.!tooltip.amount'] = '税额百分比。';
$lang['AdminCompanyTaxes.!tooltip.name'] = '显示的税名（如销售税）。';
$lang['AdminCompanyTaxes.!tooltip.level'] = '如果适用多种税收规则，税收级别允许您设置税收顺序。';
$lang['AdminCompanyTaxes.!tooltip.type'] = '含税将作为您设置的商品价格的一部分计算税款，对于免税用户，将从商品价格中减去税款。
Inclusive (Additive) 将在您设置的商品价格之外计算税金。
Exclusive 将在您设置的商品价格之外计算税款，但不包括在订单总价显示中。';
$lang['AdminCompanyTaxes.states.all'] = '-- 所有 --';
$lang['AdminCompanyTaxes.countries.all'] = '-- 所有 --';
$lang['AdminCompanyTaxes.!success.rule_deleted'] = '税则已成功删除。';
$lang['AdminCompanyTaxes.!success.taxrule_updated'] = '税则已成功更新！';
$lang['AdminCompanyTaxes.!success.taxrule_created'] = '税则已成功创建！';
$lang['AdminCompanyTaxes.!success.basic_updated'] = '基本税设置已成功更新！';

