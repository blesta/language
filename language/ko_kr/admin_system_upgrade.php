<?php
/**
 * Admin System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.ko_kr
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemUpgrade.index.no_results'] = '현재 업그레이드 옵션은 사용할 수 없습니다.';
$lang['AdminSystemUpgrade.index.field_upgradesubmit'] = '설정 업데이트';
$lang['AdminSystemUpgrade.index.boxtitle_upgrade'] = '업그레이드 옵션';
$lang['AdminSystemUpgrade.index.page_title'] = '설정 > 시스템 > 업그레이드 옵션';
$lang['AdminSystemUpgrade.upgrade.btn_abort'] = '취소';
$lang['AdminSystemUpgrade.upgrade.btn_continue'] = '업그레이드 계속하기';
$lang['AdminSystemUpgrade.upgrade.label_missing'] = '누락된 파일';
$lang['AdminSystemUpgrade.upgrade.label_modified'] = '수정된 파일';
$lang['AdminSystemUpgrade.upgrade.modified_files_title'] = '수정된 핵심 파일';
$lang['AdminSystemUpgrade.upgrade.modified_files'] = '%1$s 핵심 파일이 원래 릴리스에서 수정되었습니다. 이러한 변경 사항은 업그레이드 중에 덮어쓰게 됩니다. 계속 진행하시겠습니까?';
$lang['AdminSystemUpgrade.upgrade.no_checksums'] = '현재 설치의 파일 매니페스트에 체크섬이 포함되어 있지 않습니다. 파일 무결성 확인은 건너뜁니다. 업그레이드를 계속 진행하시겠습니까?';
$lang['AdminSystemUpgrade.upgrade.no_manifest'] = '현재 설치에 대한 파일 매니페스트를 찾을 수 없습니다. 파일 무결성 확인을 건너뜁니다. 업그레이드를 계속 진행하시겠습니까?';
$lang['AdminSystemUpgrade.upgrade.started'] = '업그레이드 프로세스가 시작되었습니다. 이 페이지를 닫아도 업그레이드가 백그라운드에서 계속 진행됩니다. 이 페이지로 돌아와 진행 상황을 확인하세요.';
$lang['AdminSystemUpgrade.index.failure_db_version_mismatch'] = '데이터베이스 버전이 예상한 값으로 진행되지 않았습니다. 업그레이드가 버전 도중에 중지되어 일부 스키마 변경 사항이 적용되지 않았을 수 있습니다.';
$lang['AdminSystemUpgrade.index.failure_db_version_after'] = '현재: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_expected'] = '업그레이드 후 예상됩니다: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_before'] = '업그레이드하기 전: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_label'] = '데이터베이스 버전:';
$lang['AdminSystemUpgrade.index.failure_backup_label'] = '사용 가능한 백업:';
$lang['AdminSystemUpgrade.index.failure_explanation'] = '업그레이드가 성공적으로 완료되지 않았습니다. 시스템이 일관되지 않은 상태일 수 있으며 실패한 버전의 일부 데이터베이스 변경 사항이 이미 적용되었을 수 있습니다. 업그레이드를 다시 실행하면 다른 방식으로 실패할 수 있습니다. 다시 시도하기 전에 데이터베이스 백업에서 복원하는 것이 좋습니다. 업그레이드가 시작되기 전에 백업이 수행되었으며 아래에 나열되어 있습니다. 복구하려면 이러한 백업을 수동으로 복원하거나 지원 티켓을 열어 도움을 요청하세요.';
$lang['AdminSystemUpgrade.index.failure_heading'] = '다음에 수행할 작업';
$lang['AdminSystemUpgrade.index.recovery_instructions'] = '백업에서 복원하려면 서버에서 다음 명령을 실행합니다:';
$lang['AdminSystemUpgrade.index.recovery_files_path'] = '파일 백업: %1$s';
$lang['AdminSystemUpgrade.index.recovery_db_path'] = '데이터베이스 백업: %1$s';
$lang['AdminSystemUpgrade.index.heading_recovery'] = '복구 지침';
$lang['AdminSystemUpgrade.index.confirm_delete_backup'] = '이 백업을 삭제하시겠습니까? 이 작업은 되돌릴 수 없습니다.';
$lang['AdminSystemUpgrade.index.btn_delete'] = '삭제';
$lang['AdminSystemUpgrade.index.btn_download'] = '다운로드';
$lang['AdminSystemUpgrade.index.backup_files'] = '파일';
$lang['AdminSystemUpgrade.index.backup_database'] = '데이터베이스';
$lang['AdminSystemUpgrade.index.backup_col_date'] = '날짜';
$lang['AdminSystemUpgrade.index.backup_col_size'] = '크기';
$lang['AdminSystemUpgrade.index.backup_col_type'] = '유형';
$lang['AdminSystemUpgrade.index.heading_backups'] = '백업 업그레이드';
$lang['AdminSystemUpgrade.index.backup_col_file'] = '파일';
$lang['AdminSystemUpgrade.index.no_backups'] = '업그레이드 백업을 찾을 수 없습니다.';
$lang['AdminSystemUpgrade.index.btn_clear_lock'] = '잠금 해제';
$lang['AdminSystemUpgrade.index.lock_stale'] = '이전 업그레이드 프로세스가 예기치 않게 중지된 것 같습니다.';
$lang['AdminSystemUpgrade.index.lock_active'] = '현재 업그레이드가 진행 중이며 %1$s 에서 시작됩니다.';
$lang['AdminSystemUpgrade.index.btn_retry'] = '다시 시도';
$lang['AdminSystemUpgrade.index.btn_dashboard'] = '대시보드로 돌아가기';
$lang['AdminSystemUpgrade.index.step_migrate'] = '데이터베이스 마이그레이션 실행';
$lang['AdminSystemUpgrade.index.upgrade_failed'] = '업그레이드에 실패했습니다.';
$lang['AdminSystemUpgrade.index.upgrade_complete'] = '업그레이드가 성공적으로 완료되었습니다!';
$lang['AdminSystemUpgrade.index.step_finalize'] = '마무리';
$lang['AdminSystemUpgrade.index.step_replace'] = '파일 바꾸기';
$lang['AdminSystemUpgrade.index.step_extract'] = '파일 추출';
$lang['AdminSystemUpgrade.index.step_verify'] = '무결성 확인';
$lang['AdminSystemUpgrade.index.step_download'] = '릴리스 다운로드';
$lang['AdminSystemUpgrade.index.step_backup_files'] = '파일 백업';
$lang['AdminSystemUpgrade.index.step_backup_db'] = '데이터베이스 백업';
$lang['AdminSystemUpgrade.index.step_maintenance'] = '유지 관리 모드 사용';
$lang['AdminSystemUpgrade.index.step_preflight'] = '비행 전 점검';
$lang['AdminSystemUpgrade.index.heading_progress'] = '업그레이드 진행 상황';
$lang['AdminSystemUpgrade.index.select_version'] = '업그레이드할 버전을 선택합니다:';
$lang['AdminSystemUpgrade.index.upgrade_warning'] = '그러면 유지 관리 모드가 활성화되고, 백업을 생성하고, 새 버전을 다운로드하여 설치하고, 데이터베이스 마이그레이션을 실행합니다. 이 프로세스는 한 번 시작하면 중단할 수 없습니다.';
$lang['AdminSystemUpgrade.index.btn_upgrade'] = '지금 업그레이드';
$lang['AdminSystemUpgrade.index.clean_stale_files_note'] = '새 릴리스 매니페스트에 없는 핵심 디렉터리의 파일을 삭제합니다. 핵심 디렉터리에 사용자 지정 파일이 없는 것이 확실하지 않으면 이 옵션을 선택하지 않은 상태로 둡니다.';
$lang['AdminSystemUpgrade.index.clean_stale_files'] = '업그레이드 후 오래된 코어 파일 제거';
$lang['AdminSystemUpgrade.index.skip_integrity_check'] = '파일 무결성 검사 건너뛰기';
$lang['AdminSystemUpgrade.index.release_date'] = '출시되었습니다: %1$s';
$lang['AdminSystemUpgrade.index.no_support'] = '지원 및 업데이트 구독이 활성화되어 있지 않습니다. 패치 업데이트만 사용할 수 있습니다.';
$lang['AdminSystemUpgrade.index.requires_support'] = '활성 지원 및 업데이트 구독이 필요합니다.';
$lang['AdminSystemUpgrade.index.changelog_link'] = '변경 로그 보기';
$lang['AdminSystemUpgrade.index.upgrade_latest'] = '전체 업그레이드: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.upgrade_patch'] = '패치 업데이트: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.heading_available'] = '사용 가능한 업데이트';
$lang['AdminSystemUpgrade.index.command_copied'] = '복사됨';
$lang['AdminSystemUpgrade.index.btn_copy_command'] = '복사';
$lang['AdminSystemUpgrade.index.launch_failed_instruction'] = 'SSH를 통해 다음 명령을 실행하여(Blesta 설치를 소유한 사용자로) 업그레이드를 완료합니다. 이 페이지를 열어 두세요. 명령이 실행되는 동안 진행 상황은 여기에서 계속 업데이트됩니다.';
$lang['AdminSystemUpgrade.index.launch_failed_title'] = '백그라운드 업그레이드가 시작되지 않았습니다.';
$lang['AdminSystemUpgrade.index.environment_badge_warn'] = '1$d 경고';
$lang['AdminSystemUpgrade.index.environment_badge_fail'] = '1$d 실패';
$lang['AdminSystemUpgrade.index.environment_fail'] = '일부 검사에 실패했습니다. 업그레이드하기 전에 아래 문제를 해결하세요.';
$lang['AdminSystemUpgrade.index.environment_pass'] = '모든 검사가 통과되었습니다. 시스템을 자체 업그레이드할 준비가 되었습니다.';
$lang['AdminSystemUpgrade.index.heading_environment'] = '환경 상태';
$lang['AdminSystemUpgrade.index.up_to_date'] = '설치가 최신 상태입니다.';
$lang['AdminSystemUpgrade.index.btn_check'] = '업데이트 확인';
$lang['AdminSystemUpgrade.index.never_checked'] = '확인하지 않음';
$lang['AdminSystemUpgrade.index.last_checked'] = '마지막으로 확인했습니다: %1$s';
$lang['AdminSystemUpgrade.index.current_version'] = 'Blesta를 실행 중입니다. %1$s';
$lang['AdminSystemUpgrade.index.heading_current'] = '현재 버전';

