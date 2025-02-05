<?php
/**
 * Admin System Backup
 *
 * @package blesta
 * @subpackage blesta.language.ko_kr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemBackup.index.text_note'] = '여기에서 Blesta 데이터베이스의 백업을 컴퓨터에 다운로드하거나 구성된 SFTP 및/또는 Amazon S3 서버에 백업을 자동으로 업로드할 수 있습니다.';
$lang['AdminSystemBackup.index.field_downloadbackup'] = '백업 다운로드';
$lang['AdminSystemBackup.index.field_uploadbackup'] = '강제 오프사이트 백업';
$lang['AdminSystemBackup.index.boxtitle_index'] = '온디맨드';
$lang['AdminSystemBackup.index.page_title'] = '설정 > 시스템 > 백업 > 주문형';
$lang['AdminSystemBackup.amazon.field.backupsubmit'] = '설정 업데이트';
$lang['AdminSystemBackup.amazon.field.amazons3_rate'] = '모든 백업';
$lang['AdminSystemBackup.amazon.field.amazons3_bucket'] = '버킷';
$lang['AdminSystemBackup.amazon.field.amazons3_secretkey'] = '비밀 키';
$lang['AdminSystemBackup.amazon.field.amazons3_accesskey'] = '액세스 키';
$lang['AdminSystemBackup.amazon.field.amazons3_region'] = '지역';
$lang['AdminSystemBackup.amazon.field.test'] = '이 설정 테스트';
$lang['AdminSystemBackup.amazon.boxtitle_backup'] = 'Amazon S3';
$lang['AdminSystemBackup.amazon.page_title'] = '설정 > 시스템 > 백업 > Amazon S3';
$lang['AdminSystemBackup.ftp.field.backupsubmit'] = '설정 업데이트';
$lang['AdminSystemBackup.ftp.field.ftp_rate'] = '모든 백업';
$lang['AdminSystemBackup.ftp.field.ftp_path'] = '경로';
$lang['AdminSystemBackup.ftp.field.ftp_password'] = '비밀번호';
$lang['AdminSystemBackup.ftp.field.ftp_username'] = '사용자 이름';
$lang['AdminSystemBackup.ftp.field.ftp_port'] = '포트';
$lang['AdminSystemBackup.ftp.field.ftp_host'] = '호스트 이름';
$lang['AdminSystemBackup.ftp.field.test'] = '이 설정 테스트';
$lang['AdminSystemBackup.ftp.boxtitle_backup'] = '보안 FTP';
$lang['AdminSystemBackup.ftp.page_title'] = '설정 > 시스템 > 백업 > 보안 FTP';
$lang['AdminSystemBackup.!tooltip.amazons3_rate'] = '이 백업을 수행할 빈도 간격입니다.';
$lang['AdminSystemBackup.!tooltip.amazons3_bucket'] = '백업을 저장할 Amazon S3 버킷의 대소문자를 구분하는 이름입니다.';
$lang['AdminSystemBackup.!tooltip.amazons3_secret_key'] = 'Amazon S3 계정 비밀 키입니다.';
$lang['AdminSystemBackup.!tooltip.amazons3_access_key'] = 'Amazon S3 계정 액세스 키입니다.';
$lang['AdminSystemBackup.!tooltip.amazons3_region'] = '백업을 저장할 Amazon S3 리전입니다.';
$lang['AdminSystemBackup.!tooltip.ftp_rate'] = '이 백업을 수행할 빈도 간격입니다.';
$lang['AdminSystemBackup.!tooltip.ftp_path'] = '원격 서버에 백업을 저장할 대상 경로(예: "/backup/").';
$lang['AdminSystemBackup.!tooltip.ftp_password'] = 'FTP 계정의 비밀번호입니다.';
$lang['AdminSystemBackup.!tooltip.ftp_username'] = 'FTP 계정의 사용자 이름입니다.';
$lang['AdminSystemBackup.!tooltip.ftp_port'] = '포트 번호(일반적으로 22)입니다. 이 포트 번호는 SSH에 사용되는 포트 번호와 동일합니다.';
$lang['AdminSystemBackup.!tooltip.ftp_host'] = '백업 서버의 정규화된 도메인 이름(예: "backup.domain.com").';
$lang['AdminSystemBackup.!error.backup_frequency'] = '백업 빈도가 잘못되었습니다.';
$lang['AdminSystemBackup.!error.amazons3_test'] = 'AmazonS3 연결에 실패했습니다! 설정을 확인한 후 다시 시도하세요. 연결 세부 정보는 대소문자를 구분합니다.';
$lang['AdminSystemBackup.!error.sftp_test'] = 'SFTP 연결에 실패했습니다! 설정을 확인한 후 다시 시도하세요.';
$lang['AdminSystemBackup.!success.backup_uploaded'] = '백업이 구성된 원격 서비스로 성공적으로 전송되었습니다!';
$lang['AdminSystemBackup.!success.amazons3_test'] = 'AmazonS3 연결에 성공했습니다!';
$lang['AdminSystemBackup.!success.sftp_test'] = 'SFTP 연결에 성공했습니다!';
$lang['AdminSystemBackup.!success.backup_updated'] = '백업 설정이 성공적으로 업데이트되었습니다!';

