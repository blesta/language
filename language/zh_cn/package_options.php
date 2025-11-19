<?php
/**
 * Package Options
 *
 * @package blesta
 * @subpackage blesta.language.zh_cn
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PackageOptions.getfields.label_textarea_setup_recurring'] = '%1$s + %2$s 设置（续订 @ %3$s）';
$lang['PackageOptions.getfields.label_textarea_setup'] = '%1$s + %2$s 设置';
$lang['PackageOptions.getfields.label_textarea_recurring'] = '%1$s （续订 @ %2$s）';
$lang['PackageOptions.getfields.label_textarea'] = '%1$s';
$lang['PackageOptions.getfields.label_password_setup_recurring'] = '%1$s + %2$s 设置（续订 @ %3$s）';
$lang['PackageOptions.getfields.label_password_setup'] = '%1$s + %2$s 设置';
$lang['PackageOptions.getfields.label_password_recurring'] = '%1$s （续订 @ %2$s）';
$lang['PackageOptions.getfields.label_password'] = '%1$s';
$lang['PackageOptions.getfields.label_text_setup_recurring'] = '%1$s + %2$s 设置（续订 @ %3$s）';
$lang['PackageOptions.getfields.label_text_setup'] = '%1$s + %2$s 设置';
$lang['PackageOptions.getfields.label_text_recurring'] = '%1$s （续订 @ %2$s）';
$lang['PackageOptions.getfields.label_text'] = '%1$s';
$lang['PackageOptions.getfields.label_checkbox_setup_recurring'] = '%1$s (%2$s + %3$s 设置，续订 @ %4$s)';
$lang['PackageOptions.getfields.label_checkbox_setup'] = '%1$s (%2$s + %3$s 设置)';
$lang['PackageOptions.getfields.label_checkbox_recurring'] = '%1$s (%2$s, 续订 @ %3$s)';
$lang['PackageOptions.getfields.label_checkbox'] = '%1$s (%2$s)';
$lang['PackageOptions.getfields.label_select_setup_recurring'] = '%1$s (%2$s + %3$s 设置，续订 @ %4$s)';
$lang['PackageOptions.getfields.label_select_setup'] = '%1$s (%2$s + %3$s 设置)';
$lang['PackageOptions.getfields.label_select_recurring'] = '%1$s (%2$s, 续订 @ %3$s)';
$lang['PackageOptions.getfields.label_select'] = '%1$s (%2$s)';
$lang['PackageOptions.getfields.label_radio_setup_recurring'] = '%1$s (%2$s + %3$s 设置，续订 @ %4$s)';
$lang['PackageOptions.getfields.label_radio_setup'] = '%1$s (%2$s + %3$s 设置)';
$lang['PackageOptions.getfields.label_radio_recurring'] = '%1$s (%2$s, 续订 @ %3$s)';
$lang['PackageOptions.getfields.label_radio'] = '%1$s (%2$s)';
$lang['PackageOptions.getfields.label_quantity_setup_recurring'] = 'x %1$s %2$s + %3$s 设置（续订 @ %4$s）';
$lang['PackageOptions.getfields.label_quantity_setup'] = 'x %1$s %2$s + %3$s 设置';
$lang['PackageOptions.getfields.label_quantity_recurring'] = 'x %1$s %2$s（续订 @ %3$s）';
$lang['PackageOptions.getfields.label_quantity'] = 'x %1$s %2$s';
$lang['PackageOptions.getvaluestatuses.inactive'] = '不活动';
$lang['PackageOptions.getvaluestatuses.active'] = '活跃';
$lang['PackageOptions.gettypes.password'] = '密码';
$lang['PackageOptions.gettypes.textarea'] = '文本区域';
$lang['PackageOptions.gettypes.text'] = '文本';
$lang['PackageOptions.gettypes.radio'] = '无线电';
$lang['PackageOptions.gettypes.quantity'] = '数量';
$lang['PackageOptions.gettypes.select'] = '下拉式';
$lang['PackageOptions.gettypes.checkbox'] = '复选框';
$lang['PackageOptions.!error.values[][pricing][][currency].format'] = '货币代码必须为 3 个字符。';
$lang['PackageOptions.!error.values[][pricing][][setup_fee].format'] = '设置费必须是一个数字。';
$lang['PackageOptions.!error.values[][pricing][][price_renews].valid'] = '续订价格不能一次性设定。';
$lang['PackageOptions.!error.values[][pricing][][price_renews].format'] = '续订价格必须是一个数字。';
$lang['PackageOptions.!error.values[][pricing][][price].format'] = '价格必须是一个数字。';
$lang['PackageOptions.!error.values[][pricing][][period].format'] = '时间类型无效。';
$lang['PackageOptions.!error.values[][pricing][][term].valid'] = '项必须大于 0。';
$lang['PackageOptions.!error.values[][pricing][][term].length'] = '术语长度不得超过 5 个字符。';
$lang['PackageOptions.!error.values[][pricing][][term].format'] = '术语必须是数字。';
$lang['PackageOptions.!error.values[][pricing][][id].delete_in_use'] = '不得删除期权价值定价，因为它目前正由某项服务使用。';
$lang['PackageOptions.!error.values[][pricing][][id].exists'] = '套餐选项定价 ID 无效。';
$lang['PackageOptions.!error.hidden.valid'] = '是否隐藏该选项必须设置为 0 或 1。';
$lang['PackageOptions.!error.option_id.exists'] = '软件包选项 ID 无效。';
$lang['PackageOptions.!error.groups.exists'] = '给出的软件包选项组 ID 中至少有一个不存在或不属于同一公司。';
$lang['PackageOptions.!error.values[][id].exists'] = '软件包选项值 ID 无效。';
$lang['PackageOptions.!error.values[][default].format'] = '默认值必须是数字。';
$lang['PackageOptions.!error.values[][default].qty_valid'] = '对于配置的最小值、最大值和步长，选择的默认值数量无效。';
$lang['PackageOptions.!error.values[][default].inactive'] = '不可将非活动选项值设置为默认值。';
$lang['PackageOptions.!error.values[][status].valid'] = '请选择有效的选项值状态。';
$lang['PackageOptions.!error.values[][value].delete_in_use'] = '选项值可能无法删除，因为它目前正被某项服务使用。';
$lang['PackageOptions.!error.values[][value].edit_in_use'] = '选项值可能无法更改，因为它目前正被某个服务使用。';
$lang['PackageOptions.!error.values[][value].length'] = '选项值长度不得超过 255 个字符。';
$lang['PackageOptions.!error.values[][name].length'] = '选项值名称长度不得超过 128 个字符。';
$lang['PackageOptions.!error.values[][name].empty'] = '请输入选项值的名称。';
$lang['PackageOptions.!error.values[][max].valid'] = '最大限值只能为数量类型设置，且数值必须为 1 或更大。';
$lang['PackageOptions.!error.values[][min].valid'] = '最小限值只能为数量类型设置，且必须为 0 或更大值。';
$lang['PackageOptions.!error.values[][step].valid'] = '步进值只能为数量类型设置，且数值必须为 1 或更大。';
$lang['PackageOptions.!error.values.single_default_value'] = '只能选择一个值作为默认值。';
$lang['PackageOptions.!error.values.active_status'] = '必须至少有一个选项值处于活动状态。';
$lang['PackageOptions.!error.values.select_value'] = '至少一个选项值包含无效的特殊字符。';
$lang['PackageOptions.!error.values.unique'] = '选项值必须是唯一的。';
$lang['PackageOptions.!error.values.count'] = '对于复选框、数量、文本、文本框或密码类型，只能输入一个选项值。';
$lang['PackageOptions.!error.type.valid'] = '请选择选项类型。';
$lang['PackageOptions.!error.name.length'] = '名称长度不得超过 128 个字符。';
$lang['PackageOptions.!error.name.empty'] = '请为该选项输入名称。';
$lang['PackageOptions.!error.label.length'] = '标签长度不得超过 128 个字符。';
$lang['PackageOptions.!error.label.empty'] = '请输入标签。';
$lang['PackageOptions.!error.company_id.exists'] = '公司 ID 无效。';
$lang['PackageOptions.!error.hide_on_invoice.valid'] = '是否在发票上隐藏必须设置为 0 或 1。';
$lang['PackageOptions.!error.disable_pricing.valid'] = '是否禁用定价必须设置为 0 或 1。';

