<?php
/**
 * Stripe Payments
 *
 * @package blesta
 * @subpackage blesta.language.ko_kr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['StripePayments.charge_description'] = '청구 대상 %1$s';
$lang['StripePayments.charge_description_default'] = '지정된 금액에 대한 청구';
$lang['StripePayments.migrate_accounts'] = '계정 마이그레이션';
$lang['StripePayments.warning_migrate_accounts'] = '이 마이그레이션 도구 사용을 완료할 때까지 기존 Stripe 게이트웨이를 제거하지 마세요. 그렇게 하면 도구에 액세스할 수 없게 됩니다.';
$lang['StripePayments.text_migrate_accounts'] = '이전 Stripe 게이트웨이에서 오프사이트에 저장된 결제 계정을 이 Stripe Payments 게이트웨이로 자동으로 마이그레이션할 수 있습니다. 오프사이트에 저장되지 않은 계정은 새 결제 계정을 수동으로 생성하여 마이그레이션해야 합니다. 시간 초과를 방지하기 위해 마이그레이션은 %1$의 일괄 처리로 수행됩니다. 모든 결제 계정을 마이그레이션하려면 필요한 횟수만큼 이 작업을 실행하세요.';
$lang['StripePayments.text_accounts_remaining'] = '남은 계정: %1$s';
$lang['StripePayments.heading_migrate_accounts'] = '기존 결제 계정 마이그레이션';
$lang['StripePayments.webhook_note'] = 'Stripe 계정에서 "결제 의도" 이벤트에 대한 웹훅으로 다음 URL을 구성하는 것이 좋습니다.';
$lang['StripePayments.webhook'] = '스트라이프 웹훅';
$lang['StripePayments.tooltip_secret_key'] = 'API 비밀 키는 라이브 또는 테스트 모드에 따라 다릅니다. 올바른 키를 사용하고 있는지 확인하세요.';
$lang['StripePayments.tooltip_publishable_key'] = 'API 게시 가능 키는 라이브 또는 테스트 모드에 따라 다릅니다. 올바른 키를 사용하고 있는지 확인하세요.';
$lang['StripePayments.secret_key'] = 'API 비밀 키';
$lang['StripePayments.publishable_key'] = 'API 게시 가능 키';
$lang['StripePayments.ach_form.mandate_future_usage'] = '귀하가 %1$의 서비스를 사용하거나 %1$의 약관에 따라 정기적으로 추가 제품을 구매하는 경우 귀하는 %1$이 귀하의 은행 계좌에서 정기적으로 인출하도록 승인합니다. 위에서 승인한 정기 인출을 벗어나는 결제는 귀하의 승인을 받은 후에만 인출됩니다.';
$lang['StripePayments.ach_form.mandate_authorization'] = '이 양식을 제출함으로써 귀하는 이 승인이 취소될 때까지 %1$의 웹사이트 및 약관에 따라 %1$의 서비스 사용 및/또는 %1$의 제품 구매로 인해 발생하는 모든 요금에 대해 위에 지정된 은행 계좌에서 인출할 수 있는 권한을 %1$에게 부여하는 것입니다. 귀하는 30일(30일) 전에 %1$에 통지함으로써 언제든지 이 승인을 수정하거나 취소할 수 있습니다.';
$lang['StripePayments.ach_form.field_second_deposit'] = '두 번째 입금';
$lang['StripePayments.ach_form.field_first_deposit'] = '첫 입금';
$lang['StripePayments.ach_form.verification_notice'] = '이 은행 계좌로 두 번의 소액 입금을 보냈습니다. 이 계좌를 확인하려면 이 입금액을 확인하시기 바랍니다.';
$lang['StripePayments.ach_form.field_routing_number'] = '라우팅 번호';
$lang['StripePayments.ach_form.field_account_number'] = '계정 번호';
$lang['StripePayments.ach_form.field_holder_type_company'] = '회사';
$lang['StripePayments.ach_form.field_holder_type_individual'] = '개인';
$lang['StripePayments.ach_form.field_holder_type'] = '홀더 유형';
$lang['StripePayments.ach_form.field_type'] = '계정 유형';
$lang['StripePayments.description'] = 'Stripe 엘리먼트와 결제 요청 API를 사용하여 3D 보안 및 SCA를 자동으로 처리하여 Stripe을 통해 신용카드를 직접 전송합니다.';
$lang['StripePayments.!error.invalid_request_error'] = '요청을 처리할 때 결제 게이트웨이에서 오류를 반환했습니다.';
$lang['StripePayments.!error.bank_account_unverified'] = '결제에 은행 계좌를 사용하려면 먼저 은행 계좌를 인증해야 합니다.';
$lang['StripePayments.!error.secret_key.valid'] = '주어진 비밀 키를 사용하여 Stripe API에 연결할 수 없습니다.';
$lang['StripePayments.!error.secret_key.empty'] = '비밀 키를 입력하세요.';
$lang['StripePayments.!error.publishable_key.empty'] = '게시 가능한 키를 입력하세요.';
$lang['StripePayments.!error.auth'] = '게이트웨이가 인증할 수 없습니다.';
$lang['StripePayments.name'] = 'Stripe Payments';
$lang['StripePayments.request_three_d_secure_challenge'] = '클라이언트가 결제 수단을 저장하거나 결제 수단을 처리할 때마다 3D 보안 문제를 제시합니다(저장 또는 저장되지 않음).';
$lang['StripePayments.request_three_d_secure_note'] = '인도에 거주하는 Stripe 사용자의 경우, Stripe에 새 카드를 저장하기 전에 항상 3D 보안(3DS) 인증을 수행해야 합니다.';
$lang['StripePayments.request_three_d_secure_frictionless'] = '고객이 결제 수단을 저장하거나 저장되지 않은 결제 수단을 처리할 때마다 3D 보안 문제를 제시합니다.';
$lang['StripePayments.request_three_d_secure_automatic'] = 'Stripe에서 3D 보안 챌린지 제시 시기 결정 허용';
$lang['StripePayments.request_three_d_secure'] = '3D 보안 인증 흐름';

