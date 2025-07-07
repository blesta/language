<?php
/**
 * Invoices
 *
 * @package blesta
 * @subpackage blesta.language.ko_kr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Invoices.!line_item.recurring_renew_description'] = '%1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_date'] = '일할 계산된 %1$s 추가 {2$s}x %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_date'] = '일할 계산된 %1$s 추가 %2$s (%3$s - %4$s)';
$lang['Invoices.!line_item.service_setup_fee_description'] = '%1$s - %2$s 설정 수수료';
$lang['Invoices.!line_item.service_cancel_fee_description'] = '%1$s - %2$s 취소 수수료';
$lang['Invoices.!line_item.service_prorated_upgrade_description'] = '%1$s 에서 %2$s - %3$s 로 일할 계산된 업그레이드 (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_date'] = '↳ %1$s 을 %2$s 에서 %3$s 로 일할 계산 업그레이드 (%4$s - %5$s)';
$lang['Invoices.!line_item.service_prorated_upgrade_description_onetime'] = '%1$s 에서 %2$s 으로 일할 계산된 업그레이드 - -. %3$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty'] = '↳ %2$sx %3$s 에서 %4$sx %1$s 로 일할 계산된 업그레이드 %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_date'] = '%1$s ↳ %2$sx %3$s 에서 %4$sx %5$s (%6$s - %7$s)로 일할 계산된 업그레이드';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_onetime'] = '↳ %2$sx %3$s 에서 %4$sx %1$s 로 일할 계산된 업그레이드 %5$s';
$lang['Invoices.!error.line_items.minimum_split'] = '인보이스는 분할할 라인이 2개 이상이어야 합니다.';
$lang['Invoices.!error.line_items.empty_split'] = '분할할 인보이스 라인이 선택되지 않았습니다.';
$lang['Invoices.!error.lines[][tax].format'] = '품목 세금은 \'true\' 또는 \'false\'여야 합니다.';
$lang['Invoices.!error.lines[][amount].format'] = '단가는 숫자여야 합니다.';
$lang['Invoices.!error.lines[][qty].minimum'] = '1개 이상의 수량을 입력하세요.';
$lang['Invoices.!error.lines[][qty].format'] = '수량은 숫자여야 합니다.';
$lang['Invoices.!error.lines[][description].empty'] = '항목 설명을 입력하세요.';
$lang['Invoices.!error.lines[][service_id].exists'] = '잘못된 서비스 ID입니다.';
$lang['Invoices.!error.lines[][id].exists'] = '잘못된 품목 ID입니다.';
$lang['Invoices.!error.domain_renew.failed'] = '도메인은 최대 10년까지만 갱신할 수 있습니다.';
$lang['Invoices.!error.invoice_id.draft'] = '지정된 인보이스는 초안 인보이스가 아니므로 삭제할 수 없습니다.';
$lang['Invoices.!error.date_last_renewed.format'] = '마지막 정기결제 인보이스 갱신 날짜는 유효한 날짜 형식이어야 합니다.';
$lang['Invoices.!error.date_renews.format'] = '정기결제 인보이스 갱신 날짜는 유효한 날짜 형식이어야 합니다.';
$lang['Invoices.!error.duration.format'] = '기간이 유효하지 않습니다.';
$lang['Invoices.!error.period.format'] = '마침표가 유효하지 않습니다.';
$lang['Invoices.!error.term.bounds'] = '기간은 1에서 65535 사이여야 합니다.';
$lang['Invoices.!error.term.format'] = '용어는 숫자여야 합니다.';
$lang['Invoices.!error.delivery.exists'] = '제공된 배송 방법이 존재하지 않습니다.';
$lang['Invoices.!error.currency.length'] = '통화 코드는 3자 길이여야 합니다.';
$lang['Invoices.!error.status.format'] = '유효하지 않은 상태입니다.';
$lang['Invoices.!error.autodebit.valid'] = '이 청구서에 대한 자동 이체를 허용할지 여부를 선택하세요.';
$lang['Invoices.!error.date_autodebit.format'] = '마감일이 유효하지 않은 날짜 형식입니다.';
$lang['Invoices.!error.date_closed.format'] = '마감 날짜가 잘못된 날짜 형식입니다.';
$lang['Invoices.!error.date_due.after_billed'] = '만기일은 청구된 날짜 또는 그 이후여야 합니다.';
$lang['Invoices.!error.date_due.format'] = '마감일이 유효하지 않은 날짜 형식입니다.';
$lang['Invoices.!error.date_billed.format'] = '청구 날짜가 잘못된 날짜 형식입니다.';
$lang['Invoices.!error.client_id.exists'] = '클라이언트 ID가 잘못되었습니다.';
$lang['Invoices.!error.id.amount_applied'] = '이 인보이스에 이미 금액이 적용되었기 때문에 인보이스 항목, 통화 및 상태가 업데이트되지 않을 수 있습니다.';
$lang['Invoices.!error.id_value.valid'] = '인보이스 ID 값을 확인할 수 없습니다.';
$lang['Invoices.!error.id_format.length'] = '인보이스의 ID 형식은 64자를 초과할 수 없습니다.';
$lang['Invoices.!error.id_format.empty'] = '인보이스에 설정된 ID 형식이 없습니다.';
$lang['Invoices.!error.invoice_add.failed'] = '이 인보이스를 만들 수 없습니다. 다시 시도해 주세요.';
$lang['Invoices.!error.delivery.length'] = '인보이스 전달 방법의 길이는 32자를 초과할 수 없습니다.';
$lang['Invoices.!error.delivery.empty'] = '인보이스 배송 방법을 입력하세요.';
$lang['Invoices.!error.method.exists'] = '배송 방법을 하나 이상 설정해야 합니다.';
$lang['Invoices.!error.invoice_recur_id.exists'] = '정기결제 인보이스 ID가 잘못되었습니다.';
$lang['Invoices.!error.invoice_id.exists'] = '잘못된 인보이스 ID입니다.';
$lang['Invoices.cache_methods.json_pdf'] = 'JSON + PDF';
$lang['Invoices.cache_methods.json'] = 'JSON';
$lang['Invoices.cache_methods.none'] = '없음';
$lang['Invoices.types.proforma'] = '공식';
$lang['Invoices.types.standard'] = '표준';
$lang['Invoices.status.void'] = 'Void';
$lang['Invoices.status.draft'] = '초안';
$lang['Invoices.status.proforma'] = '공식';
$lang['Invoices.status.active'] = '활성';
$lang['Invoices.!line_item.coupon_line_item_description_percent'] = '쿠폰 %1$s - %2$s%%';
$lang['Invoices.!line_item.coupon_line_item_description_amount'] = '쿠폰 %1$s';
$lang['Invoices.!line_item.prorated_credit'] = '비례 배분 크레딧';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_onetime'] = '일할 계산된 %1$s %2$sx %3$s 추가';
$lang['Invoices.!line_item.service_option_prorated_addition_qty'] = '일할 계산된 %1$s %2$sx %3$s 추가';
$lang['Invoices.!line_item.service_option_prorated_addition_text_onetime'] = '일할 계산된 %1$s 추가';
$lang['Invoices.!line_item.service_option_prorated_addition_text_date'] = '일할 계산된 %1$s(%2$s - %3$s) ↳ 일할 계산된 %1$s 추가';
$lang['Invoices.!line_item.service_option_prorated_addition_text'] = '일할 계산된 %1$s 추가';
$lang['Invoices.!line_item.service_option_prorated_addition_onetime'] = '일할 계산된 %1$s %2$s 추가';
$lang['Invoices.!line_item.service_option_prorated_addition'] = '일할 계산된 %1$s %2$s 추가';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_onetime'] = '일할 계산된 %1$s 업그레이드';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_date'] = '일할 계산된 %1$s(%2$s - %3$s) 업그레이드';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text'] = '일할 계산된 %1$s 업그레이드';
$lang['Invoices.!line_item.service_option_prorated_upgrade_onetime'] = '1$를 %2$에서 %3$로 비례 배분 업그레이드 ↳ %1$를 %2$에서 %3$로 비례 배분 업그레이드';
$lang['Invoices.!line_item.service_option_prorated_upgrade'] = '1$를 %2$에서 %3$로 비례 배분 업그레이드 ↳ %1$를 %2$에서 %3$로 비례 배분 업그레이드';
$lang['Invoices.!line_item.service_option_setup_fee_description'] = '↳ %1$s - %2$s 설치비';
$lang['Invoices.!line_item.service_option_renew_description'] = '↳ %1$s - %2$s';
$lang['Invoices.!line_item.service_renew_description'] = '5$s%1$s - %2$s (%3$s - %4$s)';
$lang['Invoices.!note_private.line_item'] = '- 1$s @ %2$s: %3$s';
$lang['Invoices.!note_private.removed_lines'] = '라인 항목을 제거했습니다:';
$lang['Invoices.!note_private.service_cancel_date'] = '서비스 #%1$s가 %2$s를 취소했습니다.';
$lang['Invoices.getDeliveryMethods.postalmethods'] = '우편 방법';
$lang['Invoices.getDeliveryMethods.interfax'] = 'InterFax';
$lang['Invoices.getDeliveryMethods.paper'] = '종이';
$lang['Invoices.getDeliveryMethods.email'] = '이메일';
$lang['Invoices.getPricingPeriods.year'] = '연도';
$lang['Invoices.getPricingPeriods.month'] = '월';
$lang['Invoices.getPricingPeriods.week'] = '주';
$lang['Invoices.getPricingPeriods.day'] = '일';
$lang['Invoices.!error.invoice_id.unique'] = '대상 인보이스는 병합할 인보이스에 포함될 수 없습니다.';
$lang['Invoices.!error.invoice_id.status'] = '대상 인보이스는 열려 있고 거래가 없는 상태여야 합니다.';
$lang['Invoices.!error.invoice_ids.client'] = '모든 인보이스는 동일한 클라이언트에 속해야 합니다.';
$lang['Invoices.!error.invoice_ids.status'] = '모든 인보이스는 열려 있어야 하며 거래가 없어야 합니다.';
$lang['Invoices.!error.invoice_ids.currency'] = '모든 인보이스의 통화는 동일해야 합니다.';
$lang['Invoices.!error.invoice_ids.count'] = '인보이스를 2개 이상 선택해야 합니다.';
$lang['Invoices.!line_item.parent_description'] = '%1$s - %2$s 의 아동 서비스 :';
$lang['Invoices.!error.service.renew_onetime'] = '일회성 서비스는 갱신할 수 없습니다.';

