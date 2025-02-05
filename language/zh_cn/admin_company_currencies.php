<?php
/**
 * Admin Company Currencies
 *
 * @package blesta
 * @subpackage blesta.language.zh_cn
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyCurrencies.!tooltip.exchange_rates_processor_key'] = '从所选处理器检索货币汇率需要 API 密钥。';
$lang['AdminCompanyCurrencies.!tooltip.exchange_rates_processor'] = '设置用于更新货币汇率的处理器。可用货币因处理器而异。';
$lang['AdminCompanyCurrencies.edit.confirm_edit'] = '您确定要更新此货币吗？当系统自动更新汇率时，该货币的汇率将被覆盖。您可以在 [Settings] > [Company] > [Currencies] > [Currency Setup] 下禁用自动更新。';
$lang['AdminCompanyCurrencies.edit.field_editsubmit'] = '编辑货币';
$lang['AdminCompanyCurrencies.edit.field_exchange_rate'] = '汇率';
$lang['AdminCompanyCurrencies.edit.field_suffix'] = '后缀符号';
$lang['AdminCompanyCurrencies.edit.field_prefix'] = '前缀符号';
$lang['AdminCompanyCurrencies.edit.field_precision'] = '精度';
$lang['AdminCompanyCurrencies.edit.field_format'] = '格式';
$lang['AdminCompanyCurrencies.edit.field_code'] = '货币代码（ISO 4217）';
$lang['AdminCompanyCurrencies.edit.boxtitle_edit'] = '编辑货币';
$lang['AdminCompanyCurrencies.edit.page_title'] = '设置 > 公司 > 货币 > 编辑货币';
$lang['AdminCompanyCurrencies.add.confirm_add'] = '您确定要创建这种货币吗？当系统自动更新汇率时，该货币的汇率将被覆盖。您可以在 [Settings] > [Company] > [Currencies] > [Currency Setup] 下禁用自动更新。';
$lang['AdminCompanyCurrencies.add.field_addsubmit'] = '创建货币';
$lang['AdminCompanyCurrencies.add.field_exchange_rate'] = '汇率';
$lang['AdminCompanyCurrencies.add.field_suffix'] = '后缀符号';
$lang['AdminCompanyCurrencies.add.field_prefix'] = '前缀符号';
$lang['AdminCompanyCurrencies.add.field_precision'] = '精度';
$lang['AdminCompanyCurrencies.add.field_format'] = '格式';
$lang['AdminCompanyCurrencies.add.field_code'] = '货币代码（ISO 4217）';
$lang['AdminCompanyCurrencies.add.boxtitle_add'] = '添加货币';
$lang['AdminCompanyCurrencies.add.page_title'] = '设置 > 公司 > 货币 > 添加货币';
$lang['AdminCompanyCurrencies.active.no_exchange_updated'] = '从不';
$lang['AdminCompanyCurrencies.active.confirm_delete'] = '您确定要删除该货币吗？';
$lang['AdminCompanyCurrencies.active.option_delete'] = '删除';
$lang['AdminCompanyCurrencies.active.option_edit'] = '编辑';
$lang['AdminCompanyCurrencies.active.text_options'] = '选项';
$lang['AdminCompanyCurrencies.active.text_exchange_updated'] = '最后更新';
$lang['AdminCompanyCurrencies.active.text_exchange_rate'] = '汇率';
$lang['AdminCompanyCurrencies.active.text_precision'] = '精度';
$lang['AdminCompanyCurrencies.active.text_format'] = '格式';
$lang['AdminCompanyCurrencies.active.text_currency_code'] = '货币代码（ISO 4217）';
$lang['AdminCompanyCurrencies.active.no_results'] = '没有活动货币。';
$lang['AdminCompanyCurrencies.active.categorylink_addcurrency'] = '添加货币';
$lang['AdminCompanyCurrencies.active.boxtitle_active'] = '活跃货币';
$lang['AdminCompanyCurrencies.active.page_title'] = '设置 > 公司 > 货币 > 有效货币';
$lang['AdminCompanyCurrencies.setup.closed_parenthesis'] = ')';
$lang['AdminCompanyCurrencies.setup.open_parenthesis'] = '(';
$lang['AdminCompanyCurrencies.setup.no_exchange_updated'] = '从不';
$lang['AdminCompanyCurrencies.setup.field.setupsubmit'] = '更新设置';
$lang['AdminCompanyCurrencies.setup.field.exchange_rates_padding'] = '垫子汇率';
$lang['AdminCompanyCurrencies.setup.field.exchange_rates_processor_key'] = '汇率处理器 API 密钥';
$lang['AdminCompanyCurrencies.setup.field.exchange_rates_processor'] = '汇率处理器';
$lang['AdminCompanyCurrencies.setup.field.last_updated'] = '费率最近更新';
$lang['AdminCompanyCurrencies.setup.field.exchange_rates_auto_update'] = '自动更新汇率';
$lang['AdminCompanyCurrencies.setup.field.multi_currency_pricing'] = '仅对新服务使用套餐定价';
$lang['AdminCompanyCurrencies.setup.heading_multicurrency'] = '多种货币';
$lang['AdminCompanyCurrencies.setup.field.client_set_currency'] = '允许客户设置货币';
$lang['AdminCompanyCurrencies.setup.field.show_currency_code'] = '显示货币代码';
$lang['AdminCompanyCurrencies.setup.field.default_currency'] = '默认货币';
$lang['AdminCompanyCurrencies.setup.heading_general'] = '一般情况';
$lang['AdminCompanyCurrencies.setup.boxtitle_setup'] = '货币设置';
$lang['AdminCompanyCurrencies.setup.tooltip_currency_pricing'] = '此选项要求以指定货币设置套餐定价，以便用于创建新服务。如果未选中该选项，且该货币不存在套餐定价，则将根据默认货币的汇率计算价格。

续订服务总是倾向于使用所选货币进行套餐定价，但如果没有为套餐指定货币，则将使用默认货币的汇率。';
$lang['AdminCompanyCurrencies.setup.page_title'] = '设置 > 公司 > 货币 > 货币设置';
$lang['AdminCompanyCurrencies.!cancel.field_cancel'] = '取消';
$lang['AdminCompanyCurrencies.!tooltip.exchange_rates_padding'] = '处理器确定的汇率值将按给定的百分比增加。';
$lang['AdminCompanyCurrencies.!tooltip.exchange_rates_auto_update'] = '选中允许使用可用的汇率处理器之一自动更新汇率。';
$lang['AdminCompanyCurrencies.!tooltip.multi_currency_pricing'] = '勾选允许仅使用为该套餐定义的定价订购套餐。选中此项要求为您希望接受的每种货币定义定价。换句话说，这可以防止进行货币转换。';
$lang['AdminCompanyCurrencies.!tooltip.client_set_currency'] = '选中允许客户从系统中可用的货币中选择默认货币。';
$lang['AdminCompanyCurrencies.!tooltip.show_currency_code'] = '选中以启用在显示的价格旁边显示货币代码';
$lang['AdminCompanyCurrencies.!tooltip.default_currency'] = '系统使用的默认货币。将其设置为您最喜欢的货币。';
$lang['AdminCompanyCurrencies.!tooltip.precision'] = '精度是货币支持的小数点后的有效位数。';
$lang['AdminCompanyCurrencies.!success.rates_updated'] = '汇率已成功更新。';
$lang['AdminCompanyCurrencies.!success.delete_deleted'] = '%1$s 货币已成功删除！';
$lang['AdminCompanyCurrencies.!success.edit_updated'] = '%1$s 货币已成功更新！';
$lang['AdminCompanyCurrencies.!success.add_created'] = '%1$s 货币已成功创建！';
$lang['AdminCompanyCurrencies.!success.setup_updated'] = '货币设置设置已成功更新！';

