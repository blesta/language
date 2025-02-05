<?php
/**
 * Paypal Payments Standard
 *
 * @package blesta
 * @subpackage blesta.language.ko_kr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PaypalPaymentsStandard.!error.dev_mode.valid'] = '개발자 모드가 주어진 경우 "true"로 설정해야 합니다.';
$lang['PaypalPaymentsStandard.!error.account_id.valid'] = '유효한 이메일 주소를 입력해야 합니다.';
$lang['PaypalPaymentsStandard.buildprocess.submit'] = 'PayPal로 결제';
$lang['PaypalPaymentsStandard.pay_type_both'] = '가능한 경우 일회성 및 구독 결제';
$lang['PaypalPaymentsStandard.pay_type_subscribe'] = '구독 결제 전용';
$lang['PaypalPaymentsStandard.pay_type_onetime'] = '일회성 결제만 가능';
$lang['PaypalPaymentsStandard.pay_type'] = '결제 옵션';
$lang['PaypalPaymentsStandard.api_signature'] = 'API 서명';
$lang['PaypalPaymentsStandard.api_password'] = 'API 비밀번호';
$lang['PaypalPaymentsStandard.api_username_note'] = 'PayPal을 통해 환불을 처리하려면 API 비밀번호 및 API 서명과 함께 이 정보가 필요합니다.';
$lang['PaypalPaymentsStandard.api_username'] = 'API 사용자 이름';
$lang['PaypalPaymentsStandard.dev_mode_note'] = '이 옵션을 활성화하면 PayPal 샌드박스 환경에 거래가 게시됩니다. PayPal 샌드박스 계정으로 테스트하는 경우에만 이 옵션을 사용하도록 설정하세요.';
$lang['PaypalPaymentsStandard.dev_mode'] = '개발자 모드';
$lang['PaypalPaymentsStandard.page_style_note'] = 'PayPal에서 생성한 사용자 지정 결제 페이지 테마의 페이지 스타일 이름입니다. 기본 페이지 스타일을 사용하려면 비워둡니다.';
$lang['PaypalPaymentsStandard.page_style'] = '페이지 스타일 이름';
$lang['PaypalPaymentsStandard.account_id'] = 'PayPal 계정 이메일';
$lang['PaypalPaymentsStandard.description'] = '페이팔 결제 표준은 온라인에서 신용카드 및 페이팔 결제를 안전하게 수락하는 가장 쉬운 방법 중 하나입니다.';
$lang['PaypalPaymentsStandard.name'] = 'PayPal Payments Standard';
$lang['PaypalPaymentsStandard.!error.payment_mapping.duplicated'] = '매핑 데이터에서 중복 이메일이 발견되었습니다. 중복을 제거하고 다시 시도하세요.';
$lang['PaypalPaymentsStandard.!error.payment_mapping.valid'] = '매핑 데이터에서 잘못된 줄이 발견되었습니다. 이메일 주소와 클라이언트 ID가 유효한지 확인한 후 다시 시도하세요.';
$lang['PaypalPaymentsStandard.payment_mapping_note'] = 'Blesta 외부에서 생성된 PayPal 구독에 사용하기 위한 것입니다. payer_email을 내부 고객 ID에 한 줄당 1개씩 매핑합니다. 예: 이메일, 클라이언트 ID';
$lang['PaypalPaymentsStandard.payment_mapping'] = '결제 매핑';

