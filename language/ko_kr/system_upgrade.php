<?php
/**
 * System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.ko_kr
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SystemUpgrade.environment.os_pass'] = '운영 체제: Linux가 감지되었습니다.';
$lang['SystemUpgrade.environment.os_fail'] = '자체 업그레이드는 Linux 환경에서만 지원됩니다.';
$lang['SystemUpgrade.environment.exec_pass'] = '셸 액세스: exec() 함수를 사용할 수 있습니다.';
$lang['SystemUpgrade.environment.exec_fail'] = '셸 액세스: exec() 함수가 비활성화되었거나 사용할 수 없습니다.';
$lang['SystemUpgrade.environment.unzip_pass'] = '아카이브 추출: 압축 해제 명령을 사용할 수 있습니다.';
$lang['SystemUpgrade.environment.unzip_fail'] = '아카이브 추출: 압축 해제 명령을 사용할 수 없습니다. 압축 해제 프로그램을 설치하세요.';
$lang['SystemUpgrade.environment.mysqldump_pass'] = '데이터베이스 백업: mysqldump 명령을 사용할 수 있습니다.';
$lang['SystemUpgrade.environment.mysqldump_fail'] = '데이터베이스 백업: mysqldump 명령을 사용할 수 없습니다. mysql-client 도구를 설치하세요.';
$lang['SystemUpgrade.environment.tar_pass'] = '파일 백업: tar 명령을 사용할 수 있습니다.';
$lang['SystemUpgrade.environment.tar_fail'] = '파일 백업: tar 명령을 사용할 수 없습니다. tar를 설치하세요.';
$lang['SystemUpgrade.environment.rsync_pass'] = '파일 동기화: rsync 명령을 사용할 수 있습니다.';
$lang['SystemUpgrade.environment.rsync_fail'] = '파일 동기화: rsync 명령을 사용할 수 없습니다. rsync를 설치하세요.';
$lang['SystemUpgrade.environment.setsid_pass'] = '프로세스 분리: setsid 명령을 사용할 수 있습니다.';
$lang['SystemUpgrade.environment.setsid_warn'] = '프로세스 분리: setsid 명령을 사용할 수 없습니다. 탈옥된 호스팅 환경에서 업그레이드를 완료하려면 SSH를 통한 수동 명령이 필요할 수 있습니다.';
$lang['SystemUpgrade.environment.writable_pass'] = '파일 시스템: 설치 디렉터리는 쓰기 가능합니다.';
$lang['SystemUpgrade.environment.writable_fail'] = '파일 시스템: 웹 서버에서 설치 디렉터리를 쓸 수 없습니다.';
$lang['SystemUpgrade.environment.ownership_pass'] = '파일 소유권: 모든 주요 디렉토리는 웹 서버 사용자가 소유합니다.';
$lang['SystemUpgrade.environment.ownership_fail'] = '파일 소유권: %1$s 키 디렉토리는 웹 서버 사용자가 소유하지 않습니다.';
$lang['SystemUpgrade.environment.disk_pass'] = '디스크 공간: %1$s 사용 가능.';
$lang['SystemUpgrade.environment.disk_warn'] = '디스크 공간: %1$s 만 사용 가능, 예상 %2$s 필요.';
$lang['SystemUpgrade.environment.config_pass'] = '구성: blesta.php는 쓰기 가능합니다.';
$lang['SystemUpgrade.environment.config_fail'] = '구성: blesta.php는 쓰기 불가능합니다.';
$lang['SystemUpgrade.maintenance_reason'] = '현재 시스템이 업그레이드 중입니다. 곧 다시 확인해 주세요.';
$lang['SystemUpgrade.!error.upgrade_locked'] = '이미 업그레이드가 진행 중입니다( %2$s 에서 직원 ID %1$s 로 시작).';
$lang['SystemUpgrade.!error.lock_stale'] = '이전 업그레이드 프로세스가 예기치 않게 중지된 것 같습니다. 잠금을 해제하고 다시 시도할 수 있습니다.';
$lang['SystemUpgrade.!error.backup_db_failed'] = '데이터베이스 백업에 실패했습니다. 안정적인 백업이 없으면 업그레이드를 진행할 수 없습니다.';
$lang['SystemUpgrade.!error.backup_files_failed'] = '파일 백업에 실패했습니다. 안정적인 백업이 없으면 업그레이드를 진행할 수 없습니다.';
$lang['SystemUpgrade.!error.download_failed'] = '릴리스 파일을 다운로드하지 못했습니다.';
$lang['SystemUpgrade.!error.hash_mismatch'] = '다운로드한 파일 무결성 검사에 실패했습니다. 파일이 손상되었을 수 있습니다.';
$lang['SystemUpgrade.!error.signature_missing'] = '릴리스에는 암호화 서명이 포함되어 있지 않습니다. 진위 여부를 확인할 수 없습니다.';
$lang['SystemUpgrade.!error.signature_invalid'] = '릴리스 서명 확인에 실패했습니다. 파일이 변조되었을 수 있습니다.';
$lang['SystemUpgrade.!error.extraction_failed'] = '릴리스 아카이브를 추출하지 못했습니다.';
$lang['SystemUpgrade.!error.upgrader_failed'] = '업그레이드 프로세스를 준비하거나 시작하지 못했습니다.';
$lang['SystemUpgrade.!error.launch_not_detected'] = '백그라운드 업그레이드 프로세스가 시작되지 않았습니다. 이 문제는 웹 서버가 장기 실행 중인 하위 프로세스를 분리할 수 없는 자일링된 호스팅 환경(CloudLinux/CageFS, 일부 PHP-FPM 구성)에서 발생할 수 있습니다. SSH를 통해 아래 명령을 실행하여 업그레이드를 완료할 수 있습니다.';
$lang['SystemUpgrade.!error.upgrader_crashed'] = '업그레이드 프로세스가 예기치 않게 중지된 것 같습니다. 아래 백업 경로를 확인하여 복구하세요.';
$lang['SystemUpgrade.!error.license_invalid'] = '메이저 또는 마이너 버전 업그레이드를 하려면 지원 및 업데이트 구독이 활성화되어 있어야 합니다.';
$lang['SystemUpgrade.!error.php_version'] = '대상 릴리스에는 PHP %1$s 이상이 필요합니다. PHP %2$s 를 실행 중입니다.';
$lang['SystemUpgrade.!error.environment_fail'] = '하나 이상의 환경 검사가 실패했습니다. 업그레이드하기 전에 문제를 해결하세요.';

