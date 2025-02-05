<?php
/**
 * Authorize Net
 *
 * @package blesta
 * @subpackage blesta.language.ko_kr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Authorize_net.!error.card_number.missing'] = '전체 카드 번호가 없으면 만료일을 업데이트할 수 없습니다.';
$lang['Authorize_net.!error.dev_mode.valid'] = '개발자 모드가 주어진 경우 "true"로 설정해야 합니다.';
$lang['Authorize_net.!error.test_mode.valid'] = '테스트 모드가 주어진 경우 "true"로 설정해야 합니다.';
$lang['Authorize_net.!error.transaction_key.format'] = '트랜잭션 키는 16자 길이여야 합니다.';
$lang['Authorize_net.!error.login_id.format'] = '로그인 ID는 20자를 넘지 않아야 하며 비어 있으면 안 됩니다.';
$lang['Authorize_net.validation_modes_live'] = '라이브';
$lang['Authorize_net.validation_modes_test'] = '테스트';
$lang['Authorize_net.validation_modes_none'] = '없음';
$lang['Authorize_net.validation_note'] = 'CIM을 사용하여 결제 계정을 저장할 때 수행되는 유효성 검사 유형을 제어합니다. \'없음\'은 추가 유효성 검사를 수행하지 않습니다. \'테스트\'는 고객 명세서에는 표시되지 않지만 판매자에게 이메일을 생성하는 테스트 거래를 발행합니다. \'라이브\'는 즉시 무효 처리되는 $0.00 또는 $0.01 거래를 처리합니다. 수수료가 부과될 수 있으므로 이 값을 \'실시간\'으로 설정하기 전에 판매자 계정 공급업체에 문의하시기 바랍니다.';
$lang['Authorize_net.validation_mode'] = '결제 계정 확인 모드';
$lang['Authorize_net.apis_cim'] = 'CIM(Authorize.Net에서 활성화해야 함)';
$lang['Authorize_net.apis_aim'] = 'AIM(기본값)';
$lang['Authorize_net.dev_mode_note'] = '이 옵션을 활성화하면 Authorize.net 개발자 환경에 트랜잭션이 게시됩니다. 이 환경을 사용하려면 개발자 테스트 계정이 있어야 합니다.';
$lang['Authorize_net.dev_mode'] = '개발자 모드';
$lang['Authorize_net.test_mode_note'] = '테스트 모드 기능은 AIM에서만 지원됩니다. CIM 거래를 테스트하려면 Authorize.net 계정 내에서 테스트 모드를 사용하도록 설정해야 합니다.';
$lang['Authorize_net.test_mode'] = '테스트 모드';
$lang['Authorize_net.api'] = '결제 API';
$lang['Authorize_net.transaction_key'] = '트랜잭션 키';
$lang['Authorize_net.login_id'] = '로그인 ID';
$lang['Authorize_net.description'] = '안정적이고 빠른 신용 카드 및 ACH 처리';
$lang['Authorize_net.name'] = 'Authorize.Net';

