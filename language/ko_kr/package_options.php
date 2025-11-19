<?php
/**
 * Package Options
 *
 * @package blesta
 * @subpackage blesta.language.ko_kr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PackageOptions.getfields.label_checkbox_recurring'] = '%1$s (%2$s, 갱신 @ %3$s)';
$lang['PackageOptions.getfields.label_checkbox'] = '%1$s (%2$s)';
$lang['PackageOptions.getfields.label_select_setup_recurring'] = '%1$s (%2$s + %3$s 설정, @ %4$s에서 갱신)';
$lang['PackageOptions.getfields.label_select_setup'] = '%1$s (%2$s + %3$s 설정)';
$lang['PackageOptions.getfields.label_select_recurring'] = '%1$s (%2$s, 갱신 @ %3$s)';
$lang['PackageOptions.getfields.label_select'] = '%1$s (%2$s)';
$lang['PackageOptions.getfields.label_radio_setup_recurring'] = '%1$s (%2$s + %3$s 설정, @ %4$s에서 갱신)';
$lang['PackageOptions.getfields.label_radio_setup'] = '%1$s (%2$s + %3$s 설정)';
$lang['PackageOptions.getfields.label_radio_recurring'] = '%1$s (%2$s, 갱신 @ %3$s)';
$lang['PackageOptions.getfields.label_radio'] = '%1$s (%2$s)';
$lang['PackageOptions.getfields.label_textarea'] = '%1$s';
$lang['PackageOptions.getfields.label_password'] = '%1$s';
$lang['PackageOptions.getfields.label_text'] = '%1$s';
$lang['PackageOptions.getfields.label_quantity_setup_recurring'] = 'x %1$s %2$s + %3$s 설정(%4$s에서 갱신)';
$lang['PackageOptions.getfields.label_quantity_setup'] = 'x %1$s %2$s + %3$s 설정';
$lang['PackageOptions.getfields.label_quantity_recurring'] = 'x %1$s %2$s(%3$s에서 갱신)';
$lang['PackageOptions.getfields.label_quantity'] = 'x %1$s %2$s';
$lang['PackageOptions.getvaluestatuses.inactive'] = '비활성';
$lang['PackageOptions.getvaluestatuses.active'] = '활성';
$lang['PackageOptions.gettypes.password'] = '비밀번호';
$lang['PackageOptions.gettypes.textarea'] = '텍스트 영역';
$lang['PackageOptions.gettypes.text'] = '텍스트';
$lang['PackageOptions.gettypes.radio'] = '라디오';
$lang['PackageOptions.gettypes.quantity'] = '수량';
$lang['PackageOptions.gettypes.select'] = '드롭다운';
$lang['PackageOptions.gettypes.checkbox'] = '체크박스';
$lang['PackageOptions.!error.values[][pricing][][currency].format'] = '통화 코드는 3자여야 합니다.';
$lang['PackageOptions.!error.values[][pricing][][setup_fee].format'] = '설정 수수료는 숫자여야 합니다.';
$lang['PackageOptions.!error.values[][pricing][][price_renews].valid'] = '갱신 가격은 한시적으로 설정할 수 없습니다.';
$lang['PackageOptions.!error.values[][pricing][][price_renews].format'] = '갱신 가격은 숫자여야 합니다.';
$lang['PackageOptions.!error.values[][pricing][][price].format'] = '가격은 숫자여야 합니다.';
$lang['PackageOptions.!error.values[][pricing][][period].format'] = '잘못된 기간 유형입니다.';
$lang['PackageOptions.!error.values[][pricing][][term].valid'] = '이 기간은 0보다 커야 합니다.';
$lang['PackageOptions.!error.values[][pricing][][term].length'] = '용어 길이는 5자를 초과할 수 없습니다.';
$lang['PackageOptions.!error.values[][pricing][][term].format'] = '기간은 숫자여야 합니다.';
$lang['PackageOptions.!error.values[][pricing][][id].delete_in_use'] = '옵션 값 가격은 현재 서비스에서 사용 중이므로 삭제할 수 없습니다.';
$lang['PackageOptions.!error.values[][pricing][][id].exists'] = '잘못된 패키지 옵션 가격 ID입니다.';
$lang['PackageOptions.!error.hidden.valid'] = '이 옵션의 숨김 여부는 0 또는 1로 설정해야 합니다.';
$lang['PackageOptions.!error.option_id.exists'] = '잘못된 패키지 옵션 ID입니다.';
$lang['PackageOptions.!error.groups.exists'] = '주어진 패키지 옵션 그룹 ID 중 하나 이상이 존재하지 않거나 동일한 회사에 속하지 않습니다.';
$lang['PackageOptions.!error.values[][id].exists'] = '잘못된 패키지 옵션 값 ID입니다.';
$lang['PackageOptions.!error.values[][default].format'] = '기본값은 숫자여야 합니다.';
$lang['PackageOptions.!error.values[][default].qty_valid'] = '선택한 기본값 수량이 구성된 최소, 최대 및 단계에 대해 유효하지 않습니다.';
$lang['PackageOptions.!error.values[][default].inactive'] = '비활성 옵션 값은 기본값으로 설정할 수 없습니다.';
$lang['PackageOptions.!error.values[][status].valid'] = '유효한 옵션 값 상태를 선택하세요.';
$lang['PackageOptions.!error.values[][value].delete_in_use'] = '옵션 값은 현재 서비스에서 사용 중이므로 삭제할 수 없습니다.';
$lang['PackageOptions.!error.values[][value].edit_in_use'] = '옵션 값은 현재 서비스에서 사용 중이므로 변경할 수 없습니다.';
$lang['PackageOptions.!error.values[][value].length'] = '옵션 값의 길이는 255자를 초과할 수 없습니다.';
$lang['PackageOptions.!error.values[][name].length'] = '옵션 값 이름은 128자를 초과할 수 없습니다.';
$lang['PackageOptions.!error.values[][name].empty'] = '옵션 값의 이름을 입력하세요.';
$lang['PackageOptions.!error.values[][max].valid'] = '최대 제한값은 수량 유형에 대해서만 설정할 수 있으며 1 이상의 값이어야 합니다.';
$lang['PackageOptions.!error.values[][min].valid'] = '최소 제한값은 수량 유형에 대해서만 설정할 수 있으며 0 이상의 값이어야 합니다.';
$lang['PackageOptions.!error.values[][step].valid'] = '단계 값은 수량 유형에 대해서만 설정할 수 있으며 1 이상의 값이어야 합니다.';
$lang['PackageOptions.!error.values.single_default_value'] = '하나의 값만 기본값으로 선택할 수 있습니다.';
$lang['PackageOptions.!error.values.active_status'] = '하나 이상의 옵션 값이 활성화되어 있어야 합니다.';
$lang['PackageOptions.!error.values.select_value'] = '하나 이상의 옵션 값에 잘못된 특수 문자가 포함되어 있습니다.';
$lang['PackageOptions.!error.values.unique'] = '옵션 값은 고유해야 합니다.';
$lang['PackageOptions.!error.values.count'] = '확인란, 수량, 텍스트, 텍스트 영역 또는 비밀번호 유형에는 하나의 옵션 값만 입력할 수 있습니다.';
$lang['PackageOptions.!error.type.valid'] = '옵션 유형을 선택하세요.';
$lang['PackageOptions.!error.name.length'] = '이름은 128자를 초과할 수 없습니다.';
$lang['PackageOptions.!error.name.empty'] = '이 옵션의 이름을 입력하세요.';
$lang['PackageOptions.!error.label.length'] = '레이블의 길이는 128자를 초과할 수 없습니다.';
$lang['PackageOptions.!error.label.empty'] = '레이블을 입력하세요.';
$lang['PackageOptions.!error.company_id.exists'] = '회사 ID가 잘못되었습니다.';
$lang['PackageOptions.getfields.label_checkbox_setup'] = '%1$s (%2$s + %3$s 설정)';
$lang['PackageOptions.getfields.label_checkbox_setup_recurring'] = '%1$s (%2$s + %3$s 설정, @ %4$s에서 갱신)';
$lang['PackageOptions.getfields.label_text_recurring'] = '{1$s} (갱신 @ %2$s)';
$lang['PackageOptions.getfields.label_text_setup'] = '%1$s + %2$s 설정';
$lang['PackageOptions.getfields.label_text_setup_recurring'] = '%1$s + %2$s 설정 (%3$s에서 갱신됨)';
$lang['PackageOptions.getfields.label_password_recurring'] = '{1$s} (갱신 @ %2$s)';
$lang['PackageOptions.getfields.label_password_setup'] = '%1$s + %2$s 설정';
$lang['PackageOptions.getfields.label_password_setup_recurring'] = '%1$s + %2$s 설정 (%3$s에서 갱신됨)';
$lang['PackageOptions.getfields.label_textarea_recurring'] = '{1$s} (갱신 @ %2$s)';
$lang['PackageOptions.getfields.label_textarea_setup'] = '%1$s + %2$s 설정';
$lang['PackageOptions.getfields.label_textarea_setup_recurring'] = '%1$s + %2$s 설정 (%3$s에서 갱신됨)';
$lang['PackageOptions.!error.hide_on_invoice.valid'] = '인보이스에서 숨길지 여부는 0 또는 1로 설정해야 합니다.';
$lang['PackageOptions.!error.disable_pricing.valid'] = '가격 책정 비활성화 여부는 0 또는 1로 설정해야 합니다.';

