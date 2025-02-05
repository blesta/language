<?php
/**
 * Form Rules
 *
 * @package blesta
 * @subpackage blesta.language.ko_kr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['FormRules.pluginintegrations.cards[][callback].format'] = '각 카드에 대한 콜백 메서드를 camelCaseName 형식으로 입력하세요.';
$lang['FormRules.pluginintegrations.cards[][level].valid'] = '하나 이상의 카드에 유효하지 않은 레벨이 있습니다.';
$lang['FormRules.nonmerchantfields.fields[][type].valid'] = '하나 이상의 필드에 잘못된 유형이 있습니다.';
$lang['FormRules.nonmerchantfields.fields[][label].empty'] = '각 필드에 레이블을 입력하세요.';
$lang['FormRules.nonmerchantfields.fields[][name].format'] = '각 필드의 이름을 snake_case_name 형식으로 입력하세요.';
$lang['FormRules.nonmerchantbasic.currencies.format'] = '통화를 쉼표로 구분한 세 글자 형식(예: USD, EUR, JPY)으로 입력하세요.';
$lang['FormRules.nonmerchantbasic.authors[][name].empty'] = '각 작성자의 이름을 입력하세요.';
$lang['FormRules.merchantfields.fields[][type].valid'] = '하나 이상의 필드에 잘못된 유형이 있습니다.';
$lang['FormRules.merchantfields.fields[][label].empty'] = '각 필드에 레이블을 입력하세요.';
$lang['FormRules.merchantfields.fields[][name].format'] = '각 필드의 이름을 snake_case_name 형식으로 입력하세요.';
$lang['FormRules.merchantbasic.currencies.format'] = '통화를 쉼표로 구분한 세 글자 형식(예: USD, EUR, JPY)으로 입력하세요.';
$lang['FormRules.merchantbasic.authors[][name].empty'] = '각 작성자의 이름을 입력하세요.';
$lang['FormRules.pluginintegrations.cards[][label].empty'] = '각 카드의 레이블을 입력하세요.';
$lang['FormRules.pluginintegrations.events[][callback].format'] = '각 이벤트에 대한 콜백 메서드를 camelCaseName 형식으로 입력하세요.';
$lang['FormRules.pluginintegrations.events[][event].empty'] = '각 이벤트의 이벤트 이름을 입력하세요.';
$lang['FormRules.pluginintegrations.actions[][name].empty'] = '각 작업의 이름을 입력하세요.';
$lang['FormRules.pluginintegrations.actions[][action].format'] = '각 작업에 대한 작업을 모두 소문자로 입력하세요.';
$lang['FormRules.pluginintegrations.actions[][controller].format'] = '각 액션에 대한 컨트롤러를 snake_case_name 형식으로 입력하세요.';
$lang['FormRules.pluginintegrations.actions[][location].valid'] = '유효한 작업 위치를 입력하세요.';
$lang['FormRules.plugindatabase.tables[][columns][][primary].valid'] = '기본값은 각 열에 대해 참 또는 거짓으로 설정해야 합니다.';
$lang['FormRules.plugindatabase.tables[][columns][][nullable].valid'] = '각 열에 대해 Nullable을 참 또는 거짓으로 설정해야 합니다.';
$lang['FormRules.plugindatabase.tables[][columns][][length].empty'] = '길이는 열거형 열의 경우 \'a\', \'b\', \'c\' 형식이어야 하며, 텍스트 및 날짜/시간 열은 비어 있고, 그 외 모든 열은 숫자 형식이어야 합니다.';
$lang['FormRules.plugindatabase.tables[][columns][][type].valid'] = '하나 이상의 열에 잘못된 유형이 있습니다.';
$lang['FormRules.plugindatabase.tables[][columns][][name].format'] = '각 열의 메소드 이름을 snake_case_name 형식으로 입력하세요.';
$lang['FormRules.plugindatabase.tables[][name].format'] = '각 테이블의 메서드 이름을 snake_case_name 형식으로 입력하세요.';
$lang['FormRules.pluginbasic.authors[][name].empty'] = '각 작성자의 이름을 입력하세요.';
$lang['FormRules.modulefeatures.cron_tasks[][time].format'] = '00:00 형식의 시간 또는 숫자 간격으로 시간을 입력하세요.';
$lang['FormRules.modulefeatures.cron_tasks[][type].valid'] = '하나 이상의 크론 작업에 잘못된 유형이 있습니다.';
$lang['FormRules.modulefeatures.cron_tasks[][label].empty'] = '각 크론 작업에 대한 레이블을 입력하세요.';
$lang['FormRules.modulefeatures.cron_tasks[][name].format'] = '각 크론 작업의 메서드 이름을 snake_case_name 형식으로 입력하세요.';
$lang['FormRules.modulefeatures.service_tabs[][level].valid'] = '하나 이상의 서비스 탭에 유효하지 않은 레벨이 있습니다.';
$lang['FormRules.modulefeatures.service_tabs[][label].empty'] = '각 서비스 탭에 레이블을 입력하세요.';
$lang['FormRules.modulefeatures.service_tabs[][method_name].format'] = '각 서비스 탭의 메소드 이름을 camelCaseName 형식으로 입력하세요.';
$lang['FormRules.modulefields.package_fields[][name_key].valid'] = '패키지 필드를 이름 키로 설정할지 여부는 참 또는 거짓으로 설정해야 합니다.';
$lang['FormRules.modulefields.package_fields[][type].valid'] = '하나 이상의 패키지 필드에 잘못된 유형이 있습니다.';
$lang['FormRules.modulefields.package_fields[][label].empty'] = '각 패키지 필드에 라벨을 입력하세요.';
$lang['FormRules.modulefields.package_fields[][name].format'] = '각 패키지 필드의 이름을 snake_case_name 형식으로 입력하세요.';
$lang['FormRules.modulefields.service_fields[][name_key].valid'] = '서비스 필드를 이름 키로 설정할지 여부는 참 또는 거짓으로 설정해야 합니다.';
$lang['FormRules.modulefields.service_fields[][type].valid'] = '하나 이상의 서비스 필드에 잘못된 유형이 있습니다.';
$lang['FormRules.modulefields.service_fields[][label].empty'] = '각 서비스 필드에 라벨을 입력하세요.';
$lang['FormRules.modulefields.service_fields[][name].format'] = '각 서비스 필드의 이름을 snake_case_name 형식으로 입력하세요.';
$lang['FormRules.modulefields.module_rows[][name_key].valid'] = '모듈 행 필드를 이름 키로 설정할지 여부는 참 또는 거짓으로 설정해야 합니다.';
$lang['FormRules.modulefields.module_rows[][type].valid'] = '하나 이상의 모듈 행에 잘못된 유형이 있습니다.';
$lang['FormRules.modulefields.module_rows[][label].empty'] = '각 모듈 행 필드에 레이블을 입력하세요.';
$lang['FormRules.modulefields.module_rows[][name].format'] = '각 모듈 행 필드에 snake_case_name 형식으로 이름을 입력하세요.';
$lang['FormRules.modulebasic.authors[][name].empty'] = '각 작성자의 이름을 입력하세요.';
$lang['FormRules.modulebasic.module_group.empty'] = '모듈 그룹 레이블을 입력하세요.';
$lang['FormRules.modulebasic.module_row_plural.empty'] = '복수 모듈 행 이름을 추가하세요.';
$lang['FormRules.modulebasic.module_row.empty'] = '모듈 행 이름을 입력하세요.';
$lang['FormRules.general.name.format'] = '확장명에는 알파벳_숫자, 밑줄, 공백만 포함할 수 있습니다.';

