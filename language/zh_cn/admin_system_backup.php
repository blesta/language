<?php
/**
 * Admin System Backup
 *
 * @package blesta
 * @subpackage blesta.language.zh_cn
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemBackup.index.text_note'] = '在这里，您可以将 Blesta 数据库的备份下载到您的电脑，或自动将备份上传到您配置的 SFTP 和/或 Amazon S3 服务器。';
$lang['AdminSystemBackup.index.field_downloadbackup'] = '下载备份';
$lang['AdminSystemBackup.index.field_uploadbackup'] = '强制异地备份';
$lang['AdminSystemBackup.index.boxtitle_index'] = '点播';
$lang['AdminSystemBackup.index.page_title'] = '设置 > 系统 > 备份 > 按需';
$lang['AdminSystemBackup.amazon.field.backupsubmit'] = '更新设置';
$lang['AdminSystemBackup.amazon.field.amazons3_rate'] = '每次备份';
$lang['AdminSystemBackup.amazon.field.amazons3_bucket'] = '水桶';
$lang['AdminSystemBackup.amazon.field.amazons3_secretkey'] = '秘钥';
$lang['AdminSystemBackup.amazon.field.amazons3_accesskey'] = '访问键';
$lang['AdminSystemBackup.amazon.field.amazons3_region'] = '地区';
$lang['AdminSystemBackup.amazon.field.test'] = '测试这些设置';
$lang['AdminSystemBackup.amazon.boxtitle_backup'] = '亚马逊 S3';
$lang['AdminSystemBackup.amazon.page_title'] = '设置 > 系统 > 备份 > Amazon S3';
$lang['AdminSystemBackup.ftp.field.backupsubmit'] = '更新设置';
$lang['AdminSystemBackup.ftp.field.ftp_rate'] = '每次备份';
$lang['AdminSystemBackup.ftp.field.ftp_path'] = '路径';
$lang['AdminSystemBackup.ftp.field.ftp_password'] = '密码';
$lang['AdminSystemBackup.ftp.field.ftp_username'] = '用户名';
$lang['AdminSystemBackup.ftp.field.ftp_port'] = '港口';
$lang['AdminSystemBackup.ftp.field.ftp_host'] = '主机名';
$lang['AdminSystemBackup.ftp.field.test'] = '测试这些设置';
$lang['AdminSystemBackup.ftp.boxtitle_backup'] = '安全 FTP';
$lang['AdminSystemBackup.ftp.page_title'] = '设置 > 系统 > 备份 > 安全 FTP';
$lang['AdminSystemBackup.!tooltip.amazons3_rate'] = '执行此备份的频率间隔。';
$lang['AdminSystemBackup.!tooltip.amazons3_bucket'] = '存储备份的 Amazon S3 存储桶的大小写敏感名称。';
$lang['AdminSystemBackup.!tooltip.amazons3_secret_key'] = '亚马逊 S3 账户密钥。';
$lang['AdminSystemBackup.!tooltip.amazons3_access_key'] = '亚马逊 S3 账户访问密钥。';
$lang['AdminSystemBackup.!tooltip.amazons3_region'] = '存储备份的 Amazon S3 区域。';
$lang['AdminSystemBackup.!tooltip.ftp_rate'] = '执行此备份的频率间隔。';
$lang['AdminSystemBackup.!tooltip.ftp_path'] = '应在远程服务器上存储备份的目标路径（如"/backup/"）。';
$lang['AdminSystemBackup.!tooltip.ftp_password'] = 'FTP 账户的密码。';
$lang['AdminSystemBackup.!tooltip.ftp_username'] = 'FTP 账户的用户名。';
$lang['AdminSystemBackup.!tooltip.ftp_port'] = '端口号，通常为 22。这与 SSH 使用的端口号相同。';
$lang['AdminSystemBackup.!tooltip.ftp_host'] = '备份服务器的全称域名（如 "backup.domain.com"）。';
$lang['AdminSystemBackup.!error.backup_frequency'] = '备份频率无效。';
$lang['AdminSystemBackup.!error.amazons3_test'] = 'AmazonS3 连接失败！请检查设置并重试。请注意，连接详细信息区分大小写。';
$lang['AdminSystemBackup.!error.sftp_test'] = 'SFTP 连接失败！请检查设置并重试。';
$lang['AdminSystemBackup.!success.backup_uploaded'] = '备份已成功发送到配置的远程服务！';
$lang['AdminSystemBackup.!success.amazons3_test'] = 'AmazonS3 连接成功！';
$lang['AdminSystemBackup.!success.sftp_test'] = 'SFTP 连接成功！';
$lang['AdminSystemBackup.!success.backup_updated'] = '备份设置已成功更新！';

