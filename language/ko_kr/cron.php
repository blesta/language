<?php
/**
 * Cron
 *
 * @package blesta
 * @subpackage blesta.language.ko_kr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Cron.index.attempt_all'] = '%1$s 에 대한 모든 작업을 실행하려고 합니다.';
$lang['Cron.addpaidpendingservices.service_success'] = '클라이언트 #%2$s의 보류 중인 서비스 #%1$s가 이제 활성화되었습니다.';
$lang['Cron.addpaidpendingservices.service_error'] = '클라이언트 #%2$의 보류 중인 서비스 #%1$을(를) 활성화하지 못했습니다.';
$lang['Cron.addpaidpendingservices.completed'] = '유료 보류 중인 서비스 작업이 완료되었습니다.';
$lang['Cron.addpaidpendingservices.attempt'] = '유료 보류 중인 서비스를 제공하려고 시도합니다.';
$lang['Cron.cancelscheduledservices.cancel_success'] = '클라이언트 #%2$의 서비스 #%1$이(가) 취소되었습니다.';
$lang['Cron.cancelscheduledservices.cancel_error'] = '클라이언트 #%2$의 서비스 #%1$을(를) 취소하지 못했습니다.';
$lang['Cron.cancelscheduledservices.completed'] = '예약된 서비스 취소 작업이 완료되었습니다.';
$lang['Cron.cancelscheduledservices.attempt'] = '예약된 서비스를 취소하려고 합니다.';
$lang['Cron.unsuspendservices.unsuspend_success'] = '클라이언트 %2$s의 #%1$s 서비스가 일시 중단되었습니다.';
$lang['Cron.unsuspendservices.unsuspend_error'] = '클라이언트 %2$s의 #%1$s 서비스를 일시 중단 해제하지 못했습니다.';
$lang['Cron.unsuspendservices.completed'] = '서비스 일시 중단 해제 작업이 완료되었습니다.';
$lang['Cron.unsuspendservices.attempt'] = '일시 정지된 유료 서비스를 해제하려고 시도하는 경우.';
$lang['Cron.suspendservices.suspend_success'] = '클라이언트 %2$s의 #%1$s 서비스가 일시 중단되었습니다.';
$lang['Cron.suspendservices.suspend_error'] = '클라이언트 %2$s의 #%1$s 서비스를 일시 중단할 수 없습니다.';
$lang['Cron.suspendservices.suspension_reason'] = '비결제';
$lang['Cron.suspendservices.completed'] = '서비스 일시 중단 작업이 완료되었습니다.';
$lang['Cron.suspendservices.attempt'] = '연체된 서비스를 일시 중지하려고 시도합니다.';
$lang['Cron.cardexpirationreminders.success'] = '클라이언트 #%3$s의 %1$s %2$s 연락처에 대한 만료 알림을 성공적으로 전달했습니다.';
$lang['Cron.cardexpirationreminders.failed'] = '클라이언트 #%3$s의 %1$s %2$s 연락처에 대한 만료 알림을 보내지 못했습니다.';
$lang['Cron.cardexpirationreminders.completed'] = '카드 만료 알림 작업이 완료되었습니다.';
$lang['Cron.cardexpirationreminders.attempt'] = '카드 만료 알림을 보내려고 합니다.';
$lang['Cron.autodebitinvoices.charge_success'] = '결제가 성공적으로 처리되었습니다.';
$lang['Cron.autodebitinvoices.charge_failed'] = '결제를 처리할 수 없습니다.';
$lang['Cron.autodebitinvoices.charge_attempt'] = '2$s 금액의 모든 미결 인보이스에 대해 클라이언트 #%1$s에서 자동 인출을 시도 중입니다.';
$lang['Cron.autodebitinvoices.completed'] = '자동 직불 인보이스 작업이 완료되었습니다.';
$lang['Cron.autodebitinvoices.attempt'] = '미결 인보이스 자동 인출을 시도합니다.';
$lang['Cron.applycredits.apply_none'] = '크레딧이 적용될 수 있는 인보이스는 없습니다.';
$lang['Cron.applycredits.apply_success'] = '고객 #%2$의 거래 %1$에서 보류 중인 크레딧을 %4$ 금액의 송장 #%3$에 성공적으로 적용했습니다.';
$lang['Cron.applycredits.apply_failed'] = '클라이언트 #%1$에 보류 중인 크레딧을 적용할 수 없습니다.';
$lang['Cron.applycredits.completed'] = '크레딧 적용 작업이 완료되었습니다.';
$lang['Cron.applycredits.attempt'] = '미결 인보이스에 크레딧을 적용하려고 합니다.';
$lang['Cron.index.completed_all_system'] = '모든 시스템 작업이 완료되었습니다.';
$lang['Cron.index.attempt_all_system'] = '모든 시스템 작업을 실행하려고 시도합니다.';
$lang['Cron.index.completed_all'] = '모든 작업이 완료되었습니다.';
$lang['Cron.!error.task_execution.failed'] = '오류: %1$s %2$s';
$lang['Cron.!error.cron.failed'] = 'Cron이 로깅에 실패했습니다.';
$lang['Cron.!error.task_filter.exclude_not_array'] = '작업 필터 "제외"는 배열이어야 합니다.';
$lang['Cron.!error.task_filter.include_not_array'] = '작업 필터 \'포함\'은 배열이어야 합니다.';
$lang['Cron.!error.task_filter.both_include_exclude'] = '작업 필터는 \'포함\' 키와 \'제외\' 키를 모두 가질 수 없습니다.';
$lang['Cron.!error.task_filter.invalid_format'] = '작업 필터는 JSON 객체여야 합니다.';
$lang['Cron.!error.task_filter.invalid_json'] = '작업 필터 매개변수에 잘못된 JSON이 있습니다: %1$s';

