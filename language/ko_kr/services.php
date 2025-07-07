<?php
/**
 * Services
 *
 * @package blesta
 * @subpackage blesta.language.ko_kr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Services.getActions.update_coupon'] = '업데이트 쿠폰';
$lang['Services.getActions.change_renew'] = '갱신 날짜 변경';
$lang['Services.getActions.schedule_cancel'] = '일정 취소';
$lang['Services.getActions.cancel'] = '취소';
$lang['Services.getActions.unsuspend'] = '일시 중단 해제';
$lang['Services.getActions.suspend'] = '일시 중단';
$lang['Services.getStatusTypes.in_review'] = '리뷰에서';
$lang['Services.getStatusTypes.suspended'] = '일시 중단됨';
$lang['Services.getStatusTypes.pending'] = '보류 중';
$lang['Services.getStatusTypes.canceled'] = '취소됨';
$lang['Services.getStatusTypes.active'] = '활성';
$lang['Services.!error.prorate.format'] = '비례 배분 여부는 \'true\' 또는 \'false\'로 설정해야 합니다.';
$lang['Services.!error.service_id.has_children'] = '이 서비스는 하위 서비스가 있기 때문에 삭제할 수 없습니다. 이러한 서비스를 취소하거나 삭제한 후 다시 시도하세요.';
$lang['Services.!error.status.valid'] = '보류 중이거나 취소되었거나 검토 중인 서비스만 삭제할 수 있습니다.';
$lang['Services.!error.configoptions.valid'] = '선택한 구성 가능한 옵션 중 하나가 서비스에 유효하지 않습니다.';
$lang['Services.!error.date_canceled.valid'] = '이 서비스를 취소하려면 유효한 날짜를 설정해야 합니다.';
$lang['Services.!error.pricing_id.valid'] = '유효한 학기를 선택해야 합니다.';
$lang['Services.!error.invoice_method.valid'] = '유효한 인보이스 방법을 선택해야 합니다.';
$lang['Services.!error.fields[][encrypted].format'] = '암호화를 위한 서비스 필드가 잘못된 형식입니다.';
$lang['Services.!error.fields[][value].empty'] = '서비스 필드에서 값이 비어 있습니다.';
$lang['Services.!error.fields[][key].empty'] = '서비스 필드에서 키가 비어 있습니다.';
$lang['Services.!error.use_module.format'] = '사용 모듈 형식이 잘못되었습니다.';
$lang['Services.!error.date_canceled.format'] = '취소 날짜 형식이 잘못되었습니다.';
$lang['Services.!error.date_suspended.format'] = '일시 중단된 날짜 형식이 잘못되었습니다.';
$lang['Services.!error.date_last_renewed.format'] = '마지막으로 갱신된 날짜 형식이 잘못되었습니다.';
$lang['Services.!error.date_renews.valid'] = '갱신 날짜는 마지막 갱신 날짜 %1$s보다 커야 합니다.';
$lang['Services.!error.date_renews.format'] = '갱신 날짜 형식이 잘못되었습니다.';
$lang['Services.!error.date_added.format'] = '날짜 추가 형식이 잘못되었습니다.';
$lang['Services.!error.status.format'] = '유효하지 않은 상태입니다.';
$lang['Services.!error.override_currency.format'] = '유효한 통화를 선택해 주세요.';
$lang['Services.!error.override_price.override'] = '현재 가격을 재정의하려면 가격과 통화를 모두 설정해야 합니다.';
$lang['Services.!error.override_price.format'] = '가격 재정의는 숫자여야 합니다.';
$lang['Services.!error.module_group.valid'] = '모듈 그룹이 존재하지 않습니다.';
$lang['Services.!error.module_row.valid'] = '모듈 행이 존재하지 않습니다.';
$lang['Services.!error.qty.available'] = '수량 제한에 도달했습니다. 가능하면 더 적은 수량을 선택해 주세요.';
$lang['Services.!error.qty.length'] = '수량 길이는 10자를 초과할 수 없습니다.';
$lang['Services.!error.qty.format'] = '수량은 숫자여야 합니다.';
$lang['Services.!error.coupon_id.valid'] = '해당 쿠폰이 유효하지 않은 것 같습니다.';
$lang['Services.!error.module_row_id.exists'] = '잘못된 모듈 행 ID입니다.';
$lang['Services.!error.client_id.allowed'] = '클라이언트는 해당 패키지에 액세스할 수 없습니다.';
$lang['Services.!error.client_id.exists'] = '클라이언트가 존재하지 않습니다.';
$lang['Services.!error.pricing_id.overrides'] = '가격 재정의가 설정된 경우에는 패키지 기간을 변경할 수 없습니다.';
$lang['Services.!error.pricing_id.exists'] = '유효한 기간을 선택해 주세요.';
$lang['Services.!error.id_value.valid'] = '인보이스 ID 값을 확인할 수 없습니다.';
$lang['Services.!error.id_format.length'] = '인보이스의 ID 형식은 64자를 초과할 수 없습니다.';
$lang['Services.!error.id_format.empty'] = '인보이스에 설정된 ID 형식이 없습니다.';
$lang['Services.!error.package_group_id.exists'] = '잘못된 패키지 그룹 ID입니다.';
$lang['Services.!error.parent_service_id.parent'] = '부모 서비스 ID가 이미 다른 서비스의 자식으로 존재합니다.';
$lang['Services.!error.parent_service_id.exists'] = '부모 서비스 ID가 잘못되었습니다.';
$lang['Services.!error.service_id.exists'] = '잘못된 서비스 ID입니다.';
$lang['Services.!error.move.unpaid_invoices'] = '미결제 청구서가 있기 때문에 서비스를 다른 클라이언트로 이동할 수 없습니다.';
$lang['Services.!error.encrypted.format'] = '암호화된 형식이 잘못되었습니다.';
$lang['Services.!error.value.empty'] = '서비스 필드 값은 비어 있지 않아야 합니다.';
$lang['Services.!error.key.length'] = '서비스 필드 키는 32자를 초과할 수 없습니다.';
$lang['Services.!error.key.empty'] = '서비스 필드 키는 비어 있지 않아야 합니다.';
$lang['Services.getActions.uncancel'] = '재활성화';
$lang['Services.!error.uncancel.unsupported'] = '이 서비스는 모듈에서 지원하지 않으므로 취소할 수 없습니다.';

