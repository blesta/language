<?php
/**
 * Packages
 *
 * @package blesta
 * @subpackage blesta.language.zh_cn
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Packages.!error.manual_activation.valid'] = '手动激活必须为 1 或 0。';
$lang['Packages.getStatusTypes.restricted'] = '受限制';
$lang['Packages.getStatusTypes.inactive'] = '不活动';
$lang['Packages.getStatusTypes.active'] = '活跃';
$lang['Packages.getPricingPeriods.onetime_plural'] = '一次';
$lang['Packages.getPricingPeriods.year_plural'] = '年数';
$lang['Packages.getPricingPeriods.month_plural'] = '月数';
$lang['Packages.getPricingPeriods.week_plural'] = '周数';
$lang['Packages.getPricingPeriods.day_plural'] = '天数';
$lang['Packages.getPricingPeriods.onetime'] = '一次';
$lang['Packages.getPricingPeriods.year'] = '年份';
$lang['Packages.getPricingPeriods.month'] = '月份';
$lang['Packages.getPricingPeriods.week'] = '周数';
$lang['Packages.getPricingPeriods.day'] = '日';
$lang['Packages.!error.groups[].valid'] = '所选软件包组不属于给定的公司。';
$lang['Packages.!error.groups[].exists'] = '软件包组 ID 无效。';
$lang['Packages.!error.pricing[][id].deletable'] = '不能删除该术语，因为它被一个或多个部门使用。';
$lang['Packages.!error.pricing[][id].format'] = '套餐定价 ID 无效。';
$lang['Packages.!error.pricing[][currency].in_use'] = '无法更新正在使用的定价中的货币。';
$lang['Packages.!error.pricing[][currency].format'] = '货币代码必须为 3 个字符。';
$lang['Packages.!error.pricing[][cancel_fee].format'] = '取消费用必须是一个数字。';
$lang['Packages.!error.pricing[][setup_fee].format'] = '设置费必须是一个数字。';
$lang['Packages.!error.pricing[][price_transfer].format'] = '转让价格必须是一个数字。';
$lang['Packages.!error.pricing[][price_renews].valid'] = '续订价格不能一次性设定。';
$lang['Packages.!error.pricing[][price_renews].format'] = '续订价格必须是一个数字。';
$lang['Packages.!error.pricing[][price].format'] = '价格必须是一个数字。';
$lang['Packages.!error.pricing[][period].in_use'] = '正在使用的定价中无法更新周期。';
$lang['Packages.!error.pricing[][period].format'] = '时间类型无效。';
$lang['Packages.!error.pricing[][term].in_use'] = '无法更新正在使用的定价中的术语。';
$lang['Packages.!error.pricing[][term].valid'] = '项必须大于 0。';
$lang['Packages.!error.pricing[][term].length'] = '术语长度不得超过 5 个字符。';
$lang['Packages.!error.pricing[][term].format'] = '术语必须是数字。';
$lang['Packages.!error.email_content.parse'] = '模板解析错误：%1$s';
$lang['Packages.!error.email_content[][lang].length'] = '语言长度不得超过 5 个字符。';
$lang['Packages.!error.email_content[][lang].empty'] = '请输入语言。';
$lang['Packages.!error.prorata_cutoff.format'] = '按比例计算的截止日期必须在 1 至 28 日之间。';
$lang['Packages.!error.prorata_day.format'] = '按比例计算的天数必须在 1 至 28 天之间。';
$lang['Packages.!error.hidden.format'] = '该组是否应在接口中隐藏，必须设为 1 或 0。';
$lang['Packages.!error.status.format'] = '状态无效。';
$lang['Packages.!error.upgrades_use_renewal.valid'] = '升级的续订价格必须为 1 或 0。';
$lang['Packages.!error.override_price.valid'] = '将套餐定价设置为覆盖价格，价格必须为 1 或 0。';
$lang['Packages.!error.single_term.valid'] = '单项必须为 1 或 0。';
$lang['Packages.!error.taxable.length'] = '应税长度不得超过 1 个字符。';
$lang['Packages.!error.taxable.format'] = '应纳税额必须是一个数字。';
$lang['Packages.!error.module_group_client.valid'] = '允许客户选择组必须为 1 或 0。';
$lang['Packages.!error.module_group.format'] = '给出的模块组无效。';
$lang['Packages.!error.module_row.format'] = '给出的模块行无效。';
$lang['Packages.!error.plugins[].valid'] = '给出的插件无效。';
$lang['Packages.!error.option_groups[].valid'] = '给出的可配置软件包选项组无效。';
$lang['Packages.!error.client_qty.format'] = '客户限制必须是一个数字。';
$lang['Packages.!error.qty.format'] = '数量必须是一个数字。';
$lang['Packages.!error.descriptions.empty_lang'] = '请为每个说明指定一个软件包语言代码。';
$lang['Packages.!error.descriptions.format'] = '软件包描述格式无效。';
$lang['Packages.!error.names.empty_lang'] = '请为每个名称指定一个软件包语言代码。';
$lang['Packages.!error.names.empty_name'] = '请为每种语言指定一个软件包名称。';
$lang['Packages.!error.names.format'] = '软件包名称格式无效。';
$lang['Packages.!error.module_id.changed'] = '不能更改模块，因为已有一个或多个服务在使用此软件包。';
$lang['Packages.!error.module_id.exists'] = '给出的模块无效。';
$lang['Packages.!error.package_id.has_children'] = '由于服务有子服务，因此无法删除软件包。';
$lang['Packages.!error.package_id.exists'] = '无法删除软件包，因为有服务正在使用该软件包。';
$lang['Packages.!error.company_id.exists'] = '提供的公司无效。';

