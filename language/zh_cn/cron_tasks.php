<?php
/**
 * Cron Tasks
 *
 * @package blesta
 * @subpackage blesta.language.zh_cn
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['CronTasks.crontask.name.license_validation'] = '许可证验证';
$lang['CronTasks.crontask.description.transition_quotations'] = '将超过有效日期的报价标记为过期';
$lang['CronTasks.crontask.name.transition_quotations'] = '过渡语录';
$lang['CronTasks.crontask.description.unsuspend_services'] = '已付费的暂停服务将在选定的时间间隔内取消暂停。';
$lang['CronTasks.crontask.name.unsuspend_services'] = '解散服务';
$lang['CronTasks.crontask.description.cleanup_logs'] = '旧网关、模块和其他日志将根据指定时间的保留设置进行每日轮换。';
$lang['CronTasks.crontask.name.cleanup_logs'] = '清理日志';
$lang['CronTasks.crontask.description.deliver_reports'] = 'A/R、发票生成、纳税义务和其他报告将在每天指定的时间发送。';
$lang['CronTasks.crontask.name.deliver_reports'] = '交付报告';
$lang['CronTasks.crontask.description.exchange_rates'] = '汇率将按指定的时间间隔更新。不建议每天运行两次以上，否则会有被阻止的风险。';
$lang['CronTasks.crontask.name.exchange_rates'] = '汇率更新';
$lang['CronTasks.crontask.description.suspend_services'] = '逾期服务将在每天规定的时间暂停。';
$lang['CronTasks.crontask.name.suspend_services'] = '暂停服务';
$lang['CronTasks.crontask.description.backups_sftp'] = 'SFTP 备份计划在系统设置 > 备份 > 安全 FTP 下进行。';
$lang['CronTasks.crontask.name.backups_sftp'] = 'SFTP 备份';
$lang['CronTasks.crontask.description.backups_amazons3'] = 'Amazon S3 备份计划在系统设置 > 备份 > Amazon S3 下进行。';
$lang['CronTasks.crontask.name.backups_amazons3'] = '亚马逊 S3 备份';
$lang['CronTasks.crontask.description.deliver_invoices'] = '计划交付的发票将按所选时间间隔发送。';
$lang['CronTasks.crontask.name.deliver_invoices'] = '交付发票';
$lang['CronTasks.crontask.description.card_expiration_reminders'] = '当月到期的信用卡将于每月 15 日发出提醒通知。';
$lang['CronTasks.crontask.name.card_expiration_reminders'] = '信用卡到期提醒 每月 15 日';
$lang['CronTasks.crontask.description.cancel_scheduled_services'] = '设置了未来取消日期的服务会在所选时间间隔内取消。';
$lang['CronTasks.crontask.name.cancel_scheduled_services'] = '取消预定服务';
$lang['CronTasks.crontask.description.provision_pending_services'] = '已付费的待办服务将按所选时间间隔激活。';
$lang['CronTasks.crontask.name.provision_pending_services'] = '已付待办事务经费';
$lang['CronTasks.crontask.description.process_renewing_services'] = '与模块相连的续订服务按所选择的时间间隔续订。';
$lang['CronTasks.crontask.name.process_renewing_services'] = '办理服务续期';
$lang['CronTasks.crontask.description.process_service_changes'] = '付费排队的服务变更（如升级）将按所选的时间间隔进行处理。';
$lang['CronTasks.crontask.name.process_service_changes'] = '流程服务变更';
$lang['CronTasks.crontask.description.apply_payments'] = '松动贷记会按所选时间间隔自动应用于未结发票。';
$lang['CronTasks.crontask.name.apply_payments'] = '将付款应用于未结发票';
$lang['CronTasks.crontask.description.payment_reminders'] = '每天都会在规定的时间发送付款提醒和逾期通知。';
$lang['CronTasks.crontask.name.payment_reminders'] = '付款提醒';
$lang['CronTasks.crontask.description.autodebit'] = '选择自动扣款的付款账户将在每天指定的时间运行，以支付未结发票。';
$lang['CronTasks.crontask.name.autodebit'] = '自动借记';
$lang['CronTasks.crontask.description.apply_invoice_late_fees'] = '对到期后配置天数的未结发票收取滞纳金。';
$lang['CronTasks.crontask.name.apply_invoice_late_fees'] = '申请发票滞纳金';
$lang['CronTasks.crontask.description.create_invoice'] = '周期性发票和续订服务通过该任务开具发票，该任务每天在指定时间运行一次。';
$lang['CronTasks.crontask.name.create_invoice'] = '创建发票';
$lang['CronTasks.task_type.module'] = '模块';
$lang['CronTasks.task_type.plugin'] = '插件';
$lang['CronTasks.task_type.system'] = '系统';
$lang['CronTasks.!error.type.format'] = 'cron 任务类型无效。必须是时间或时间间隔。';
$lang['CronTasks.!error.time.format'] = '时间格式无效。';
$lang['CronTasks.!error.interval.format'] = '间隔必须是一个数字，代表分钟。';
$lang['CronTasks.!error.enabled.length'] = '启用长度不得超过 1 个字符。';
$lang['CronTasks.!error.enabled.format'] = '启用的必须是一个数字。';
$lang['CronTasks.!error.is_lang.length'] = 'is_lang 长度不得超过 1 个字符。';
$lang['CronTasks.!error.is_lang.format'] = 'is_lang 必须是一个数字。';
$lang['CronTasks.!error.name.empty'] = '请输入姓名。';
$lang['CronTasks.!error.id.exists'] = '无效的 cron 任务 ID。';
$lang['CronTasks.!error.run_id.exists'] = '无效的 cron 任务运行 ID。';
$lang['CronTasks.!error.dir.length'] = '目录长度不得超过 64 个字符。';
$lang['CronTasks.!error.task_type.format'] = '任务类型无效。必须是模块、插件或系统。';
$lang['CronTasks.!error.key.length'] = 'cron 任务密钥长度不得超过 64 个字符。';
$lang['CronTasks.!error.key.unique'] = '提供的 cron 任务密钥已被占用。';
$lang['CronTasks.crontask.name.delete_expired_password_reset_tokens'] = '删除已过期的密码重置令牌';
$lang['CronTasks.crontask.description.delete_expired_password_reset_tokens'] = '从系统中删除过期的所有密码重置令牌。';
$lang['CronTasks.crontask.description.low_balance_notifications'] = '向所有信用级别低于配置阈值的用户发送通知。';
$lang['CronTasks.crontask.name.low_balance_notifications'] = '余额不足通知';

