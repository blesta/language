<?php
/**
 * Cron
 *
 * @package blesta
 * @subpackage blesta.language.zh_cn
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Cron.addpaidpendingservices.service_success'] = '客户端 #%2$s 的待处理服务 #%1$s 已激活。';
$lang['Cron.addpaidpendingservices.service_error'] = '客户端 #%2$s 的待办服务 #%1$s 无法激活。';
$lang['Cron.addpaidpendingservices.completed'] = '付费待办服务任务已完成。';
$lang['Cron.addpaidpendingservices.attempt'] = '试图提供付费的待办服务。';
$lang['Cron.cancelscheduledservices.cancel_success'] = '客户 #%2$s 的 #%1$s 服务已取消。';
$lang['Cron.cancelscheduledservices.cancel_error'] = '客户 #%2$s 的 #%1$s 服务无法取消。';
$lang['Cron.cancelscheduledservices.completed'] = '取消计划服务任务已完成。';
$lang['Cron.cancelscheduledservices.attempt'] = '试图取消预定服务。';
$lang['Cron.unsuspendservices.unsuspend_success'] = '客户端 %2$s 的服务 #%1$s 已取消暂停。';
$lang['Cron.unsuspendservices.unsuspend_error'] = '客户端 %2$s 的服务 #%1$s 无法取消暂停。';
$lang['Cron.unsuspendservices.completed'] = '取消暂停服务任务已完成。';
$lang['Cron.unsuspendservices.attempt'] = '试图取消暂停的付费服务。';
$lang['Cron.suspendservices.suspend_success'] = '客户端 %2$s 的服务 #%1$s 已暂停。';
$lang['Cron.suspendservices.suspend_error'] = '客户端 %2$s 的服务 #%1$s 无法暂停。';
$lang['Cron.suspendservices.suspension_reason'] = '不付款';
$lang['Cron.suspendservices.completed'] = '暂停服务任务已完成。';
$lang['Cron.suspendservices.attempt'] = '试图中止逾期服务。';
$lang['Cron.cardexpirationreminders.success'] = '成功发送来自客户 #%3$s 的联系人 %1$s %2$s 到期提醒。';
$lang['Cron.cardexpirationreminders.failed'] = '无法发送来自客户 #%3$s 的联系人 %1$s %2$s 到期提醒。';
$lang['Cron.cardexpirationreminders.completed'] = '贺卡到期提醒任务已完成。';
$lang['Cron.cardexpirationreminders.attempt'] = '尝试发送贺卡到期提醒。';
$lang['Cron.autodebitinvoices.charge_success'] = '成功处理付款。';
$lang['Cron.autodebitinvoices.charge_failed'] = '无法处理付款。';
$lang['Cron.autodebitinvoices.charge_attempt'] = '试图自动从客户 #%1$s 的所有未结发票中扣除 %2$s。';
$lang['Cron.autodebitinvoices.completed'] = '自动借记发票任务已完成。';
$lang['Cron.autodebitinvoices.attempt'] = '试图从未结发票上自动扣款。';
$lang['Cron.applycredits.apply_none'] = '没有任何发票可用于贷记。';
$lang['Cron.applycredits.apply_success'] = '成功地将客户 #%2$s 的交易 %1$s 中的待处理贷项应用到发票 #%3$s 中，金额为 %4$s。';
$lang['Cron.applycredits.apply_failed'] = '无法为客户 #%1$s 申请待定积分。';
$lang['Cron.applycredits.completed'] = '积分申请任务已完成。';
$lang['Cron.applycredits.attempt'] = '试图将贷项用于未结发票。';
$lang['Cron.index.completed_all_system'] = '所有系统任务均已完成。';
$lang['Cron.index.attempt_all_system'] = '尝试运行所有系统任务。';
$lang['Cron.index.completed_all'] = '所有任务均已完成。';
$lang['Cron.index.attempt_all'] = '尝试运行 %1$s 的所有任务。';
$lang['Cron.!error.task_execution.failed'] = '错误： %1$s %2$s';
$lang['Cron.!error.cron.failed'] = 'Cron 登录失败。';
$lang['Cron.!error.task_filter.exclude_not_array'] = '任务过滤器 "排除 "必须是一个数组。';
$lang['Cron.!error.task_filter.include_not_array'] = '任务过滤器 "include "必须是一个数组。';
$lang['Cron.!error.task_filter.both_include_exclude'] = '任务过滤器不能同时具有 "包括 "和 "排除 "键。';
$lang['Cron.!error.task_filter.invalid_format'] = '任务过滤器必须是一个 JSON 对象。';
$lang['Cron.!error.task_filter.invalid_json'] = '任务筛选器参数中的 JSON 无效：%1$s';

