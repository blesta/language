<?php
/**
 * Admin System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.zh_cn
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemUpgrade.index.backup_col_date'] = '日期';
$lang['AdminSystemUpgrade.index.backup_col_file'] = '文件';
$lang['AdminSystemUpgrade.index.backup_col_size'] = '尺寸';
$lang['AdminSystemUpgrade.index.backup_col_type'] = '类型';
$lang['AdminSystemUpgrade.index.backup_database'] = '数据库';
$lang['AdminSystemUpgrade.index.backup_files'] = '文件';
$lang['AdminSystemUpgrade.index.boxtitle_upgrade'] = '升级选项';
$lang['AdminSystemUpgrade.index.btn_check'] = '检查更新';
$lang['AdminSystemUpgrade.index.btn_clear_lock'] = '透明锁';
$lang['AdminSystemUpgrade.index.btn_copy_command'] = '复制';
$lang['AdminSystemUpgrade.index.btn_dashboard'] = '返回仪表板';
$lang['AdminSystemUpgrade.index.btn_delete'] = '删除';
$lang['AdminSystemUpgrade.index.btn_download'] = '下载';
$lang['AdminSystemUpgrade.index.btn_retry'] = '重试';
$lang['AdminSystemUpgrade.index.btn_upgrade'] = '立即升级';
$lang['AdminSystemUpgrade.index.changelog_link'] = '查看更新日志';
$lang['AdminSystemUpgrade.index.clean_stale_files'] = '升级后删除陈旧的核心文件';
$lang['AdminSystemUpgrade.index.clean_stale_files_note'] = '删除核心目录中不存在于新版本清单中的文件。除非确定核心目录中不存在自定义文件，否则请不要选中。';
$lang['AdminSystemUpgrade.index.command_copied'] = '复制的';
$lang['AdminSystemUpgrade.index.confirm_delete_backup'] = '您确定要删除此备份吗？无法撤销。';
$lang['AdminSystemUpgrade.index.current_version'] = '您正在运行 Blesta%1$s';
$lang['AdminSystemUpgrade.index.environment_badge_fail'] = '%1$d 失败';
$lang['AdminSystemUpgrade.index.environment_badge_warn'] = '%1$d 警告';
$lang['AdminSystemUpgrade.index.environment_fail'] = '某些检查失败。请在升级前解决以下问题。';
$lang['AdminSystemUpgrade.index.environment_pass'] = '所有检查均已通过。您的系统已准备好进行自我升级。';
$lang['AdminSystemUpgrade.index.failure_backup_label'] = '可用备份：';
$lang['AdminSystemUpgrade.index.failure_db_version_after'] = '当前：%1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_before'] = '升级前%1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_expected'] = '升级后的预期：%1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_label'] = '数据库版本：';
$lang['AdminSystemUpgrade.index.failure_db_version_mismatch'] = '数据库版本没有升级到预期值。升级可能在版本升级到一半时停止，导致某些模式更改被应用。';
$lang['AdminSystemUpgrade.index.failure_explanation'] = '升级未成功完成。您的系统可能处于不一致状态，失败版本中的某些数据库更改可能已经应用。重新运行升级可能会以不同的方式失败。建议在重试前从数据库备份中恢复。升级开始前已进行了备份，如下所示。要恢复数据库，请手动恢复这些备份，或打开支持单请求帮助。';
$lang['AdminSystemUpgrade.index.failure_heading'] = '下一步该怎么做';
$lang['AdminSystemUpgrade.index.field_upgradesubmit'] = '更新设置';
$lang['AdminSystemUpgrade.index.heading_available'] = '可用更新';
$lang['AdminSystemUpgrade.index.heading_backups'] = '升级备份';
$lang['AdminSystemUpgrade.index.heading_current'] = '当前版本';
$lang['AdminSystemUpgrade.index.heading_environment'] = '环境状况';
$lang['AdminSystemUpgrade.index.heading_progress'] = '升级进度';
$lang['AdminSystemUpgrade.index.heading_recovery'] = '恢复说明';
$lang['AdminSystemUpgrade.index.last_checked'] = '最后一次检查：%1$s';
$lang['AdminSystemUpgrade.index.launch_failed_instruction'] = '通过 SSH（以拥有 Blesta 安装的用户身份）运行以下命令完成升级。请不要关闭此页面--命令运行时，这里将继续更新进度。';
$lang['AdminSystemUpgrade.index.launch_failed_title'] = '后台升级未启动';
$lang['AdminSystemUpgrade.index.lock_active'] = '目前正在进行升级，从%1$s 开始。';
$lang['AdminSystemUpgrade.index.lock_stale'] = '之前的升级过程似乎意外停止。';
$lang['AdminSystemUpgrade.index.never_checked'] = '从未检查过';
$lang['AdminSystemUpgrade.index.no_backups'] = '未找到升级备份。';
$lang['AdminSystemUpgrade.index.no_results'] = '目前不提供升级选项。';
$lang['AdminSystemUpgrade.index.no_support'] = '您的支持和更新订阅未激活。仅提供补丁更新。';
$lang['AdminSystemUpgrade.index.page_title'] = '设置 > 系统 > 升级选项';
$lang['AdminSystemUpgrade.index.recovery_db_path'] = '数据库备份：%1$s';
$lang['AdminSystemUpgrade.index.recovery_files_path'] = '文件备份：%1$s';
$lang['AdminSystemUpgrade.index.recovery_instructions'] = '要从备份中恢复，请在服务器上运行以下命令：';
$lang['AdminSystemUpgrade.index.release_date'] = '已发布：%1$s';
$lang['AdminSystemUpgrade.index.requires_support'] = '需要订购有效的支持和更新。';
$lang['AdminSystemUpgrade.index.select_version'] = '选择要升级到的版本：';
$lang['AdminSystemUpgrade.index.skip_integrity_check'] = '跳过文件完整性检查';
$lang['AdminSystemUpgrade.index.step_backup_db'] = '数据库备份';
$lang['AdminSystemUpgrade.index.step_backup_files'] = '文件备份';
$lang['AdminSystemUpgrade.index.step_download'] = '下载发布';
$lang['AdminSystemUpgrade.index.step_extract'] = '提取文件';
$lang['AdminSystemUpgrade.index.step_finalize'] = '定稿';
$lang['AdminSystemUpgrade.index.step_maintenance'] = '启用维护模式';
$lang['AdminSystemUpgrade.index.step_migrate'] = '运行数据库迁移';
$lang['AdminSystemUpgrade.index.step_preflight'] = '飞行前检查';
$lang['AdminSystemUpgrade.index.step_replace'] = '替换文件';
$lang['AdminSystemUpgrade.index.step_verify'] = '验证完整性';
$lang['AdminSystemUpgrade.index.up_to_date'] = '您的安装已更新。';
$lang['AdminSystemUpgrade.index.upgrade_complete'] = '升级成功完成！';
$lang['AdminSystemUpgrade.index.upgrade_failed'] = '升级失败。';
$lang['AdminSystemUpgrade.index.upgrade_latest'] = '全面升级：%1$s →%2$s';
$lang['AdminSystemUpgrade.index.upgrade_patch'] = '补丁更新：%1$s →%2$s';
$lang['AdminSystemUpgrade.index.upgrade_warning'] = '这将启用维护模式、创建备份、下载并安装新版本以及运行数据库迁移。此过程一旦启动就不能中断。';
$lang['AdminSystemUpgrade.upgrade.btn_abort'] = '取消';
$lang['AdminSystemUpgrade.upgrade.btn_continue'] = '继续升级';
$lang['AdminSystemUpgrade.upgrade.label_missing'] = '丢失的文件';
$lang['AdminSystemUpgrade.upgrade.label_modified'] = '修改文件';
$lang['AdminSystemUpgrade.upgrade.modified_files'] = '%1$s 核心文件与原始版本相比有所修改。这些修改将在升级过程中被覆盖。您想继续吗？';
$lang['AdminSystemUpgrade.upgrade.modified_files_title'] = '修改后的核心文件';
$lang['AdminSystemUpgrade.upgrade.no_checksums'] = '当前安装的文件清单不包括校验和。将跳过文件完整性验证。您想继续升级吗？';
$lang['AdminSystemUpgrade.upgrade.no_manifest'] = '未找到当前安装的文件清单。将跳过文件完整性验证。您想继续升级吗？';
$lang['AdminSystemUpgrade.upgrade.started'] = '升级过程开始。您可以关闭此页面，升级将在后台继续进行。返回此页面查看进度。';

