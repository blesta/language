<?php
/**
 * Cron Tasks
 *
 * @package blesta
 * @subpackage blesta.language.ko_kr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['CronTasks.crontask.description.delete_expired_password_reset_tokens'] = '만료일이 지난 모든 비밀번호 재설정 토큰을 시스템에서 제거합니다.';
$lang['CronTasks.crontask.name.delete_expired_password_reset_tokens'] = '만료된 비밀번호 재설정 토큰 삭제';
$lang['CronTasks.crontask.name.license_validation'] = '라이선스 유효성 검사';
$lang['CronTasks.crontask.description.transition_quotations'] = '유효 기간이 지난 견적서를 만료된 것으로 표시합니다.';
$lang['CronTasks.crontask.name.transition_quotations'] = '전환 견적';
$lang['CronTasks.crontask.description.unsuspend_services'] = '결제된 일시 중단된 서비스는 선택한 간격에 따라 일시 중단이 해제됩니다.';
$lang['CronTasks.crontask.name.unsuspend_services'] = '서비스 일시 중단 해제';
$lang['CronTasks.crontask.description.cleanup_logs'] = '이전 게이트웨이, 모듈 및 기타 로그는 지정된 시점의 보존 설정에 따라 매일 로테이션됩니다.';
$lang['CronTasks.crontask.name.cleanup_logs'] = '로그 정리';
$lang['CronTasks.crontask.description.deliver_reports'] = 'A/R, 송장 생성, 세금 책임 및 기타 보고서는 지정된 시간에 매일 전달됩니다.';
$lang['CronTasks.crontask.name.deliver_reports'] = '보고서 전달';
$lang['CronTasks.crontask.description.exchange_rates'] = '환율은 지정된 간격으로 업데이트됩니다. 차단될 위험이 있으므로 하루에 두 번 이상 실행하지 않는 것이 좋습니다.';
$lang['CronTasks.crontask.name.exchange_rates'] = '환율 업데이트';
$lang['CronTasks.crontask.description.suspend_services'] = '기한이 지난 서비스는 매일 지정된 시간에 일시 중단됩니다.';
$lang['CronTasks.crontask.name.suspend_services'] = '서비스 일시 중단';
$lang['CronTasks.crontask.description.backups_sftp'] = 'SFTP 백업은 시스템 설정 > 백업 > 보안 FTP에서 예약할 수 있습니다.';
$lang['CronTasks.crontask.name.backups_sftp'] = 'SFTP 백업';
$lang['CronTasks.crontask.description.backups_amazons3'] = 'Amazon S3 백업은 시스템 설정 > 백업 > Amazon S3에서 예약할 수 있습니다.';
$lang['CronTasks.crontask.name.backups_amazons3'] = 'Amazon S3 백업';
$lang['CronTasks.crontask.description.deliver_invoices'] = '배송이 예약된 청구서는 선택한 간격으로 전송됩니다.';
$lang['CronTasks.crontask.name.deliver_invoices'] = '송장 전달';
$lang['CronTasks.crontask.description.card_expiration_reminders'] = '지정된 날짜에 해당 월에 만료되는 신용카드의 경우 매월 15일에 알림이 전송됩니다.';
$lang['CronTasks.crontask.name.card_expiration_reminders'] = '매월 15일 카드 만료 알림';
$lang['CronTasks.crontask.description.cancel_scheduled_services'] = '향후 취소 날짜가 설정된 서비스는 선택한 간격에 따라 제거됩니다.';
$lang['CronTasks.crontask.name.cancel_scheduled_services'] = '예약된 서비스 취소';
$lang['CronTasks.crontask.description.provision_pending_services'] = '유료 보류 중인 서비스는 선택한 간격에 따라 활성화됩니다.';
$lang['CronTasks.crontask.name.provision_pending_services'] = '유료 대기 중인 서비스 프로비저닝';
$lang['CronTasks.crontask.description.process_renewing_services'] = '모듈에 연결된 서비스 갱신은 선택한 간격으로 갱신됩니다.';
$lang['CronTasks.crontask.name.process_renewing_services'] = '프로세스 서비스 갱신';
$lang['CronTasks.crontask.description.process_service_changes'] = '유료 대기 중인 서비스 변경(예: 업그레이드)은 선택한 간격에 따라 처리됩니다.';
$lang['CronTasks.crontask.name.process_service_changes'] = '프로세스 서비스 변경 사항';
$lang['CronTasks.crontask.description.apply_payments'] = '미결제 크레딧은 선택한 간격에 따라 미결 인보이스에 자동으로 적용됩니다.';
$lang['CronTasks.crontask.name.apply_payments'] = '미결 송장에 결제 적용';
$lang['CronTasks.crontask.description.payment_reminders'] = '결제 알림 및 연체 알림은 매일 지정된 시간에 전송됩니다.';
$lang['CronTasks.crontask.name.payment_reminders'] = '결제 알림';
$lang['CronTasks.crontask.description.autodebit'] = '자동 이체를 위해 선택한 결제 계좌는 매일 지정된 시간에 미결제 인보이스를 결제하기 위해 실행됩니다.';
$lang['CronTasks.crontask.name.autodebit'] = '자동 이체';
$lang['CronTasks.crontask.description.apply_invoice_late_fees'] = '기한이 지난 후 설정된 일수만큼 미결 인보이스에 연체료를 적용합니다.';
$lang['CronTasks.crontask.name.apply_invoice_late_fees'] = '인보이스 연체료 적용';
$lang['CronTasks.crontask.description.create_invoice'] = '정기 청구서 및 갱신 서비스는 이 작업을 통해 청구되며, 이 작업은 지정된 시간에 매일 한 번씩 실행됩니다.';
$lang['CronTasks.crontask.name.create_invoice'] = '송장 생성';
$lang['CronTasks.task_type.module'] = '모듈';
$lang['CronTasks.task_type.plugin'] = '플러그인';
$lang['CronTasks.task_type.system'] = '시스템';
$lang['CronTasks.!error.type.format'] = '잘못된 크론 작업 유형입니다. 시간 또는 간격 중 하나여야 합니다.';
$lang['CronTasks.!error.time.format'] = '시간이 잘못된 형식입니다.';
$lang['CronTasks.!error.interval.format'] = '간격은 분을 나타내는 숫자여야 합니다.';
$lang['CronTasks.!error.enabled.length'] = '활성화된 길이는 1자를 초과할 수 없습니다.';
$lang['CronTasks.!error.enabled.format'] = '활성화는 숫자여야 합니다.';
$lang['CronTasks.!error.is_lang.length'] = 'is_lang 길이는 1자를 초과할 수 없습니다.';
$lang['CronTasks.!error.is_lang.format'] = 'is_lang은 숫자여야 합니다.';
$lang['CronTasks.!error.name.empty'] = '이름을 입력하세요.';
$lang['CronTasks.!error.id.exists'] = '잘못된 크론 작업 ID입니다.';
$lang['CronTasks.!error.run_id.exists'] = '잘못된 크론 작업 실행 ID입니다.';
$lang['CronTasks.!error.dir.length'] = '디렉토리 길이는 64자를 초과할 수 없습니다.';
$lang['CronTasks.!error.task_type.format'] = '잘못된 작업 유형입니다. 모듈, 플러그인 또는 시스템이어야 합니다.';
$lang['CronTasks.!error.key.length'] = '크론 작업 키 길이는 64자를 초과할 수 없습니다.';
$lang['CronTasks.!error.key.unique'] = '제공된 크론 작업 키는 이미 사용 중입니다.';
$lang['CronTasks.crontask.description.low_balance_notifications'] = '신용 수준이 설정한 임계값 아래로 떨어진 모든 사용자에게 알림을 보냅니다.';
$lang['CronTasks.crontask.name.low_balance_notifications'] = '잔액 부족 알림';

