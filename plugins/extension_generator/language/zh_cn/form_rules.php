<?php
/**
 * Form Rules
 *
 * @package blesta
 * @subpackage blesta.language.zh_cn
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['FormRules.modulebasic.module_group.empty'] = '请输入模块组标签。';
$lang['FormRules.nonmerchantfields.fields[][type].valid'] = '一个或多个字段的类型无效。';
$lang['FormRules.nonmerchantfields.fields[][label].empty'] = '请为每个字段输入一个标签。';
$lang['FormRules.nonmerchantfields.fields[][name].format'] = '请为每个字段输入一个名称，格式为 snake_case_name。';
$lang['FormRules.nonmerchantbasic.currencies.format'] = '请以逗号分隔的三个字符格式输入货币（如美元、欧元、日元）。';
$lang['FormRules.nonmerchantbasic.authors[][name].empty'] = '请为每位作者输入姓名。';
$lang['FormRules.merchantfields.fields[][type].valid'] = '一个或多个字段的类型无效。';
$lang['FormRules.merchantfields.fields[][label].empty'] = '请为每个字段输入一个标签。';
$lang['FormRules.merchantfields.fields[][name].format'] = '请为每个字段输入一个名称，格式为 snake_case_name。';
$lang['FormRules.merchantbasic.currencies.format'] = '请以逗号分隔的三个字符格式输入货币（如美元、欧元、日元）。';
$lang['FormRules.merchantbasic.authors[][name].empty'] = '请为每位作者输入姓名。';
$lang['FormRules.pluginintegrations.cards[][label].empty'] = '请为每张卡片输入一个标签。';
$lang['FormRules.pluginintegrations.cards[][callback].format'] = '请输入每张卡的回调方法，格式为 camelCaseName。';
$lang['FormRules.pluginintegrations.cards[][level].valid'] = '一张或多张卡片的级别无效。';
$lang['FormRules.pluginintegrations.events[][callback].format'] = '请输入每个事件的回调方法，格式为 camelCaseName。';
$lang['FormRules.pluginintegrations.events[][event].empty'] = '请为每个活动输入一个活动名称。';
$lang['FormRules.pluginintegrations.actions[][name].empty'] = '请为每个操作输入名称。';
$lang['FormRules.pluginintegrations.actions[][action].format'] = '请用小写字母为每个操作输入一个操作。';
$lang['FormRules.pluginintegrations.actions[][controller].format'] = '请为每个操作输入一个控制器，格式为 snake_case_name。';
$lang['FormRules.pluginintegrations.actions[][location].valid'] = '请输入有效的操作位置。';
$lang['FormRules.plugindatabase.tables[][columns][][primary].valid'] = '每个列的 Primary 必须设置为 true 或 false。';
$lang['FormRules.plugindatabase.tables[][columns][][nullable].valid'] = '必须将每一列的 Nullable 设置为 true 或 false。';
$lang['FormRules.plugindatabase.tables[][columns][][length].empty'] = '对于枚举列，长度格式必须为 "a"、"b"、"c"；对于文本和日期时间列，长度格式必须为空；对于所有其他列，长度格式必须为数字。';
$lang['FormRules.plugindatabase.tables[][columns][][type].valid'] = '一个或多个列的类型无效。';
$lang['FormRules.plugindatabase.tables[][columns][][name].format'] = '请为每一列输入一个方法名称，格式为 snake_case_name。';
$lang['FormRules.plugindatabase.tables[][name].format'] = '请为每个表格输入一个方法名称，格式为 snake_case_name。';
$lang['FormRules.pluginbasic.authors[][name].empty'] = '请为每位作者输入姓名。';
$lang['FormRules.modulefeatures.cron_tasks[][time].format'] = '请输入格式为 00:00 的时间或数字间隔。';
$lang['FormRules.modulefeatures.cron_tasks[][type].valid'] = '一个或多个 cron 任务的类型无效。';
$lang['FormRules.modulefeatures.cron_tasks[][label].empty'] = '请为每个 cron 任务输入一个标签。';
$lang['FormRules.modulefeatures.cron_tasks[][name].format'] = '请为每个 cron 任务输入一个方法名称，格式为 snake_case_name。';
$lang['FormRules.modulefeatures.service_tabs[][level].valid'] = '一个或多个服务选项卡的级别无效。';
$lang['FormRules.modulefeatures.service_tabs[][label].empty'] = '请为每个服务选项卡输入一个标签。';
$lang['FormRules.modulefeatures.service_tabs[][method_name].format'] = '请为每个服务选项卡输入一个方法名称，格式为 camelCaseName。';
$lang['FormRules.modulefields.package_fields[][name_key].valid'] = '是否将软件包字段设置为名称键，必须设置为 true 或 false。';
$lang['FormRules.modulefields.package_fields[][type].valid'] = '一个或多个软件包字段的类型无效。';
$lang['FormRules.modulefields.package_fields[][label].empty'] = '请为每个包件字段输入一个标签。';
$lang['FormRules.modulefields.package_fields[][name].format'] = '请为每个软件包字段输入一个名称，格式为 snake_case_name。';
$lang['FormRules.modulefields.service_fields[][name_key].valid'] = '是否将服务字段设置为名称键，必须设置为 true 或 false。';
$lang['FormRules.modulefields.service_fields[][type].valid'] = '一个或多个服务字段的类型无效。';
$lang['FormRules.modulefields.service_fields[][label].empty'] = '请为每个服务字段输入一个标签。';
$lang['FormRules.modulefields.service_fields[][name].format'] = '请为每个服务字段输入一个名称，格式为 snake_case_name。';
$lang['FormRules.modulefields.module_rows[][name_key].valid'] = '是否将模块行字段设置为名称键，必须设置为 true 或 false。';
$lang['FormRules.modulefields.module_rows[][type].valid'] = '一个或多个模块行的类型无效。';
$lang['FormRules.modulefields.module_rows[][label].empty'] = '请为每个模块行输入一个标签。';
$lang['FormRules.modulefields.module_rows[][name].format'] = '请为每个模块行输入一个名称，格式为 snake_case_name。';
$lang['FormRules.modulebasic.authors[][name].empty'] = '请为每位作者输入姓名。';
$lang['FormRules.modulebasic.module_row_plural.empty'] = '请添加复数模块行名。';
$lang['FormRules.modulebasic.module_row.empty'] = '请输入模块行名称。';
$lang['FormRules.general.name.format'] = '扩展名只能包含字母数字字符、下划线和空格。';

