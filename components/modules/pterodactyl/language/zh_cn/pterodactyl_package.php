<?php
/**
 * Pterodactyl Package
 *
 * @package blesta
 * @subpackage blesta.language.zh_cn
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PterodactylPackage.package_fields.tooltip.display'] = '选中可允许客户在添加/编辑服务时修改此值。如果计划对该字段使用可配置选项，请不要选中。';
$lang['PterodactylPackage.package_fields.optional'] = '%1$s（可选）';
$lang['PterodactylPackage.package_fields.tooltip.backups'] = '允许用户为创建的服务器备份的总数。留空表示无限制。';
$lang['PterodactylPackage.package_fields.backups'] = '备份限制（可选）';
$lang['PterodactylPackage.package_fields.tooltip.allocations'] = '允许用户创建服务器的分配总数。留空表示无限制。';
$lang['PterodactylPackage.package_fields.allocations'] = '分配限额（可选）';
$lang['PterodactylPackage.package_fields.tooltip.databases'] = '允许用户创建服务器的数据库总数。留空表示无限制。';
$lang['PterodactylPackage.package_fields.databases'] = '数据库限制（可选）';
$lang['PterodactylPackage.package_fields.tooltip.image'] = '要分配给已创建服务器的自定义 Docker 镜像（例如 quay.io/pterodactyl/core:java-glibc）。';
$lang['PterodactylPackage.package_fields.image'] = '图像（可选）';
$lang['PterodactylPackage.package_fields.tooltip.startup'] = '为创建的服务器指定的自定义启动命令（如 java -Xms128M -Xmx 1024M -jar server.jar）。';
$lang['PterodactylPackage.package_fields.startup'] = '启动（可选）';
$lang['PterodactylPackage.package_fields.tooltip.io'] = '区块 IO 调整数（10-1000）。';
$lang['PterodactylPackage.package_fields.io'] = '块 IO 重量';
$lang['PterodactylPackage.package_fields.tooltip.disk'] = '为创建的服务器分配的磁盘空间大小。';
$lang['PterodactylPackage.package_fields.disk'] = '磁盘空间（MB）';
$lang['PterodactylPackage.package_fields.tooltip.cpu'] = '为创建的服务器分配的 CPU 数量。';
$lang['PterodactylPackage.package_fields.cpu'] = 'CPU 上限 (%)';
$lang['PterodactylPackage.package_fields.tooltip.swap'] = '为创建的服务器分配的交换量。';
$lang['PterodactylPackage.package_fields.swap'] = '交换 (MB)';
$lang['PterodactylPackage.package_fields.tooltip.memory'] = '为创建的服务器分配的内存量。';
$lang['PterodactylPackage.package_fields.memory'] = '内存（兆字节）';
$lang['PterodactylPackage.package_fields.tooltip.pack_id'] = '要安装服务器的软件包 ID。';
$lang['PterodactylPackage.package_fields.pack_id'] = '包装 ID（可选）';
$lang['PterodactylPackage.package_fields.tooltip.egg_id'] = '服务器要使用的 Egg 的 ID。';
$lang['PterodactylPackage.package_fields.egg_id'] = '鸡蛋 ID';
$lang['PterodactylPackage.package_fields.tooltip.nest_id'] = '服务器使用的 Nest。';
$lang['PterodactylPackage.package_fields.nest_id'] = '巢穴';
$lang['PterodactylPackage.package_fields.tooltip.port_range'] = '分配给服务器的端口范围，以逗号分隔（例如：25565-25570,25580-25590）。';
$lang['PterodactylPackage.package_fields.port_range'] = '端口范围';
$lang['PterodactylPackage.package_fields.tooltip.dedicated_ip'] = '为创建的服务器分配专用 IP。';
$lang['PterodactylPackage.package_fields.dedicated_ip'] = '专用 IP（可选）';
$lang['PterodactylPackage.package_fields.tooltip.location_id'] = '自动部署服务器的位置。';
$lang['PterodactylPackage.package_fields.location_id'] = '地点';
$lang['PterodactylPackage.!error.meta[backups].format'] = '备份次数必须为数字。';
$lang['PterodactylPackage.!error.meta[allocations].format'] = '分配数量必须是数字。';
$lang['PterodactylPackage.!error.meta[databases].format'] = '数据库数量必须是数字。';
$lang['PterodactylPackage.!error.meta[image].length'] = '图像路径最多 255 个字符。';
$lang['PterodactylPackage.!error.meta[io].format'] = 'IO 权重必须是数字。';
$lang['PterodactylPackage.!error.meta[disk].format'] = '磁盘空间大小必须为数字。';
$lang['PterodactylPackage.!error.meta[cpu].format'] = 'cpu 百分比必须为数字。';
$lang['PterodactylPackage.!error.meta[swap].format'] = '掉期金额必须是数字。';
$lang['PterodactylPackage.!error.meta[memory].format'] = '内存量必须是数字。';
$lang['PterodactylPackage.!error.meta[pack_id].format'] = '包装 ID 必须是数字。';
$lang['PterodactylPackage.!error.meta[egg_id].valid'] = '这枚蛋与《翼龙》中的任何蛋都不匹配。';
$lang['PterodactylPackage.!error.meta[egg_id].format'] = '鸡蛋 ID 必须是数字。';
$lang['PterodactylPackage.!error.meta[nest_id].valid'] = '这个巢穴与翼手龙中的任何巢穴都不匹配。';
$lang['PterodactylPackage.!error.meta[nest_id].format'] = '鸟巢 ID 必须是数字。';
$lang['PterodactylPackage.!error.meta[port_range].format'] = '端口范围格式为 25565-25570、25580-25590。';
$lang['PterodactylPackage.!error.meta[dedicated_ip].format'] = '是否使用专用 IP 必须设置为 1 或 0。';
$lang['PterodactylPackage.!error.meta[location_id].valid'] = '位置 ID 与翼手龙中的任何位置都不匹配。';
$lang['PterodactylPackage.!error.meta[location_id].format'] = '位置 ID 必须是数字。';

