<?php
/**
 * Packages
 *
 * @package blesta
 * @subpackage blesta.language.ko_kr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Packages.!error.manual_activation.valid'] = '수동 활성화는 1 또는 0이어야 합니다.';
$lang['Packages.getStatusTypes.restricted'] = '제한됨';
$lang['Packages.getStatusTypes.inactive'] = '비활성';
$lang['Packages.getStatusTypes.active'] = '활성';
$lang['Packages.getPricingPeriods.onetime_plural'] = '한 번';
$lang['Packages.getPricingPeriods.year_plural'] = '년';
$lang['Packages.getPricingPeriods.month_plural'] = '개월';
$lang['Packages.getPricingPeriods.week_plural'] = '주';
$lang['Packages.getPricingPeriods.day_plural'] = '일수';
$lang['Packages.getPricingPeriods.onetime'] = '한 번';
$lang['Packages.getPricingPeriods.year'] = '연도';
$lang['Packages.getPricingPeriods.month'] = '월';
$lang['Packages.getPricingPeriods.week'] = '주';
$lang['Packages.getPricingPeriods.day'] = '일';
$lang['Packages.!error.groups[].valid'] = '선택한 패키지 그룹이 지정된 회사에 속하지 않습니다.';
$lang['Packages.!error.groups[].exists'] = '잘못된 패키지 그룹 ID입니다.';
$lang['Packages.!error.pricing[][id].deletable'] = '해당 용어가 하나 이상의 서비스에서 사용되기 때문에 제거할 수 없습니다.';
$lang['Packages.!error.pricing[][id].format'] = '잘못된 패키지 가격 ID입니다.';
$lang['Packages.!error.pricing[][currency].in_use'] = '사용 중인 가격 책정에서는 통화를 업데이트할 수 없습니다.';
$lang['Packages.!error.pricing[][currency].format'] = '통화 코드는 3자여야 합니다.';
$lang['Packages.!error.pricing[][cancel_fee].format'] = '취소 수수료는 숫자여야 합니다.';
$lang['Packages.!error.pricing[][setup_fee].format'] = '설정 수수료는 숫자여야 합니다.';
$lang['Packages.!error.pricing[][price_transfer].format'] = '이전 가격은 숫자여야 합니다.';
$lang['Packages.!error.pricing[][price_renews].valid'] = '갱신 가격은 한시적으로 설정할 수 없습니다.';
$lang['Packages.!error.pricing[][price_renews].format'] = '갱신 가격은 숫자여야 합니다.';
$lang['Packages.!error.pricing[][price].format'] = '가격은 숫자여야 합니다.';
$lang['Packages.!error.pricing[][period].in_use'] = '사용 중인 요금제에서는 기간을 업데이트할 수 없습니다.';
$lang['Packages.!error.pricing[][period].format'] = '잘못된 기간 유형입니다.';
$lang['Packages.!error.pricing[][term].in_use'] = '사용 중인 요금제에서는 기간을 업데이트할 수 없습니다.';
$lang['Packages.!error.pricing[][term].valid'] = '이 기간은 0보다 커야 합니다.';
$lang['Packages.!error.pricing[][term].length'] = '용어 길이는 5자를 초과할 수 없습니다.';
$lang['Packages.!error.pricing[][term].format'] = '기간은 숫자여야 합니다.';
$lang['Packages.!error.email_content.parse'] = '템플릿 구문 분석 오류: %1$s';
$lang['Packages.!error.email_content[][lang].length'] = '언어 길이는 5자를 초과할 수 없습니다.';
$lang['Packages.!error.email_content[][lang].empty'] = '언어를 입력하세요.';
$lang['Packages.!error.prorata_cutoff.format'] = '비례 배분 마감일은 1일에서 28일 사이여야 합니다.';
$lang['Packages.!error.prorata_day.format'] = '비례 배분 일수는 1일에서 28일 사이여야 합니다.';
$lang['Packages.!error.hidden.format'] = '인터페이스에서 이 그룹을 숨길지 여부는 1 또는 0으로 설정해야 합니다.';
$lang['Packages.!error.status.format'] = '유효하지 않은 상태입니다.';
$lang['Packages.!error.upgrades_use_renewal.valid'] = '업그레이드에 대한 사용권 갱신 가격은 1 또는 0이어야 합니다.';
$lang['Packages.!error.override_price.valid'] = '오버라이드 가격으로 설정된 패키지 가격은 1 또는 0이어야 합니다.';
$lang['Packages.!error.single_term.valid'] = '단일 용어는 1 또는 0이어야 합니다.';
$lang['Packages.!error.taxable.length'] = '과세 대상 길이는 1자를 초과할 수 없습니다.';
$lang['Packages.!error.taxable.format'] = '과세 대상은 숫자여야 합니다.';
$lang['Packages.!error.module_group_client.valid'] = '클라이언트가 그룹을 선택할 수 있도록 허용은 1 또는 0이어야 합니다.';
$lang['Packages.!error.module_group.format'] = '잘못된 모듈 그룹이 지정되었습니다.';
$lang['Packages.!error.module_row.format'] = '제공된 모듈 행이 잘못되었습니다.';
$lang['Packages.!error.plugins[].valid'] = '잘못된 플러그인이 제공되었습니다.';
$lang['Packages.!error.option_groups[].valid'] = '제공된 구성 가능한 패키지 옵션 그룹이 잘못되었습니다.';
$lang['Packages.!error.client_qty.format'] = '클라이언트 한도는 숫자여야 합니다.';
$lang['Packages.!error.qty.format'] = '수량은 숫자여야 합니다.';
$lang['Packages.!error.descriptions.empty_lang'] = '각 설명에 패키지 언어 코드를 지정하세요.';
$lang['Packages.!error.descriptions.format'] = '패키지 설명이 잘못된 형식입니다.';
$lang['Packages.!error.names.empty_lang'] = '각 이름에 패키지 언어 코드를 지정하세요.';
$lang['Packages.!error.names.empty_name'] = '각 언어별로 패키지 이름을 지정하세요.';
$lang['Packages.!error.names.format'] = '패키지 이름이 잘못된 형식입니다.';
$lang['Packages.!error.module_id.changed'] = '이 패키지를 이미 사용하고 있는 서비스가 하나 이상 있기 때문에 모듈을 변경할 수 없습니다.';
$lang['Packages.!error.module_id.exists'] = '잘못된 모듈이 지정되었습니다.';
$lang['Packages.!error.package_id.has_children'] = '서비스에 하위 서비스가 있기 때문에 패키지를 삭제할 수 없습니다.';
$lang['Packages.!error.package_id.exists'] = '현재 서비스에서 패키지를 사용 중이므로 패키지를 삭제할 수 없습니다.';
$lang['Packages.!error.company_id.exists'] = '제공된 회사가 잘못되었습니다.';

