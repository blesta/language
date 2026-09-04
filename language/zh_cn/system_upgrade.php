<?php
/**
 * System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.zh_cn
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SystemUpgrade.!error.backup_db_failed'] = '数据库备份失败。没有可靠的备份，升级无法继续。';
$lang['SystemUpgrade.!error.backup_files_failed'] = '文件备份失败。没有可靠的备份，升级无法继续。';
$lang['SystemUpgrade.!error.download_failed'] = '下载发布文件失败。';
$lang['SystemUpgrade.!error.environment_fail'] = '一个或多个环境检查失败。请在升级前解决这些问题。';
$lang['SystemUpgrade.!error.extraction_failed'] = '解压缩发布存档失败。';
$lang['SystemUpgrade.!error.hash_mismatch'] = '下载的文件完整性检查失败。文件可能已损坏。';
$lang['SystemUpgrade.!error.launch_not_detected'] = '后台升级进程未启动。这种情况可能发生在网络服务器不允许分离长期运行的子进程的 jailed 托管环境（CloudLinux/CageFS、某些 PHP-FPM 配置）中。可通过 SSH 运行以下命令完成升级。';
$lang['SystemUpgrade.!error.license_invalid'] = '要进行主要或次要版本升级，您的支持和更新订购必须处于激活状态。';
$lang['SystemUpgrade.!error.lock_stale'] = '之前的升级过程似乎意外停止。您可以清除锁定重新尝试。';
$lang['SystemUpgrade.!error.php_version'] = '目标版本需要 PHP%1$s 或更新版本。您正在运行 PHP%2$s 。';
$lang['SystemUpgrade.!error.signature_invalid'] = '释放签名验证失败。文件可能被篡改。';
$lang['SystemUpgrade.!error.signature_missing'] = '版本不包含加密签名。无法验证真实性。';
$lang['SystemUpgrade.!error.upgrade_locked'] = '升级工作已在进行中（由工作人员 ID%1$s 在%2$s 启动）。';
$lang['SystemUpgrade.!error.upgrader_crashed'] = '升级过程似乎意外停止。请检查下面的备份路径以进行恢复。';
$lang['SystemUpgrade.!error.upgrader_failed'] = '准备或启动升级程序失败。';
$lang['SystemUpgrade.environment.config_fail'] = '配置：blesta.php 不可写。';
$lang['SystemUpgrade.environment.config_pass'] = '配置：blesta.php 可写。';
$lang['SystemUpgrade.environment.disk_pass'] = '磁盘空间：%1$s 可用。';
$lang['SystemUpgrade.environment.disk_warn'] = '磁盘空间：只有%1$s 可用，估计需要%2$s 。';
$lang['SystemUpgrade.environment.exec_fail'] = 'shell 访问：exec() 函数已禁用或不可用。';
$lang['SystemUpgrade.environment.exec_pass'] = 'shell 访问：可使用 exec() 函数。';
$lang['SystemUpgrade.environment.mysqldump_fail'] = '数据库备份：mysqldump 命令不可用。请安装 mysql-client 工具。';
$lang['SystemUpgrade.environment.mysqldump_pass'] = '数据库备份：可使用 mysqldump 命令。';
$lang['SystemUpgrade.environment.os_fail'] = '自动升级仅支持 Linux 环境。';
$lang['SystemUpgrade.environment.os_pass'] = '操作系统：检测到 Linux。';
$lang['SystemUpgrade.environment.ownership_fail'] = '文件所有权：%1$s key 目录不属于网络服务器用户。';
$lang['SystemUpgrade.environment.ownership_pass'] = '文件所有权：所有关键目录都归网络服务器用户所有。';
$lang['SystemUpgrade.environment.rsync_fail'] = '文件同步：rsync 命令不可用。请安装 rsync。';
$lang['SystemUpgrade.environment.rsync_pass'] = '文件同步：可使用 rsync 命令。';
$lang['SystemUpgrade.environment.setsid_pass'] = '进程分离：可使用 setsid 命令。';
$lang['SystemUpgrade.environment.setsid_warn'] = '进程分离：setid 命令不可用。在监狱托管环境中，升级可能需要通过 SSH 手动执行命令才能完成。';
$lang['SystemUpgrade.environment.tar_fail'] = '文件备份：tar 命令不可用。请安装 tar。';
$lang['SystemUpgrade.environment.tar_pass'] = '文件备份：可使用 tar 命令。';
$lang['SystemUpgrade.environment.unzip_fail'] = '档案提取：unzip 命令不可用。请安装 unzip。';
$lang['SystemUpgrade.environment.unzip_pass'] = '档案提取：可使用 unzip 命令。';
$lang['SystemUpgrade.environment.writable_fail'] = '文件系统：网络服务器无法写入安装目录。';
$lang['SystemUpgrade.environment.writable_pass'] = '文件系统：安装目录可写。';
$lang['SystemUpgrade.maintenance_reason'] = '系统目前正在升级。请稍后再查看。';

