<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.ko_kr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.confirm.generate'] = '확장자 생성';
$lang['AdminMain.confirm.custom_path'] = '사용자 지정 경로';
$lang['AdminMain.confirm.tooltip_location'] = '생성된 확장 파일을 업로드할 디렉터리입니다.';
$lang['AdminMain.confirm.location'] = '확장 위치';
$lang['AdminMain.confirm.text_generation'] = '확장 프로그램 설정이 완료되었습니다.  진행률 표시줄의 노드를 클릭하여 섹션을 검토할 수 있습니다.  "확장 프로그램 생성"을 클릭하면 완료되고 확장 프로그램에 대한 파일이 자동으로 생성됩니다.';
$lang['AdminMain.confirm.heading_confirm'] = '확인';
$lang['AdminMain.general.placeholder_name'] = '확장자 이름';
$lang['AdminMain.general.tooltip_code_examples'] = 'Cron 작업, 이벤트 목록 및 연동 등의 기능에 대해 주석 처리된 샘플 코드 줄이 포함되어 있는지 확인하세요.';
$lang['AdminMain.general.tooltip_form_type'] = '확장자를 생성하는 데 필요한 최소한의 내용만 포함하여 매우 잘린 버전의 확장자 양식을 사용하는 것이 기본입니다.';
$lang['AdminMain.general.tooltip_type'] = '모듈은 원격 서버에서 서비스 프로비저닝을 비롯한 많은 서비스 기능을 처리합니다. 플러그인은 Blesta에서 대부분의 작업을 수행할 수 있는 강력한 통합 기능입니다. 판매자 게이트웨이는 클라이언트를 Blesta 인터페이스에 유지하면서 결제를 처리합니다.  비-머천트 게이트웨이는 결제 완료를 위해 클라이언트를 결제 프로세서 사이트로 보냅니다.';
$lang['AdminMain.general.tooltip_name'] = '확장 프로그램의 표시 이름입니다. 다양한 코드를 작성할 때도 사용됩니다. 예를 들어 이름이 내 모듈인 경우 모듈 디렉터리는 my_module이 되고 클래스 이름은 MyModule이 됩니다.  플러그인의 경우 코드 생성에 문제를 일으킬 수 있으므로 이름에 \'플러그인\'이라는 단어를 포함하지 마세요.';
$lang['AdminMain.general.basic_info'] = '다음 - 기본 정보';
$lang['AdminMain.general.code_examples'] = '예제 코드 포함';
$lang['AdminMain.general.form_type'] = '양식 유형';
$lang['AdminMain.general.type'] = '확장 유형';
$lang['AdminMain.general.name'] = '이름';
$lang['AdminMain.general.heading_general_settings'] = '일반 설정';
$lang['AdminMain.index.extensions_no_results'] = '현재로서는 확장 기능이 없습니다.';
$lang['AdminMain.index.text_confirm_delete'] = '이 확장 프로그램을 삭제하시겠습니까?';
$lang['AdminMain.index.option_delete'] = '삭제';
$lang['AdminMain.index.option_edit'] = '편집';
$lang['AdminMain.index.heading_options'] = '옵션';
$lang['AdminMain.index.heading_date_updated'] = '업데이트 날짜';
$lang['AdminMain.index.heading_code_examples'] = '코드 예제';
$lang['AdminMain.index.heading_form_type'] = '양식 유형';
$lang['AdminMain.index.heading_type'] = '유형';
$lang['AdminMain.index.heading_name'] = '이름';
$lang['AdminMain.index.heading_id'] = 'ID';
$lang['AdminMain.index.extension_add'] = '확장자 추가';
$lang['AdminMain.index.boxtitle_extensions'] = '확장 프로그램 생성기 - 확장 프로그램';
$lang['AdminMain.index.boxtitle_extension_generator'] = '확장자 생성기';
$lang['AdminMain.index.page_title'] = '확장자 생성기';
$lang['AdminMain.getfilelocations.custom'] = '사용자 지정';
$lang['AdminMain.getfilelocations.upload'] = 'Blesta 업로드 디렉토리';
$lang['AdminMain.getfilelocations.nonmerchant'] = 'Blesta 비판매자 게이트웨이 디렉토리';
$lang['AdminMain.getfilelocations.merchant'] = 'Blesta 판매자 게이트웨이 디렉토리';
$lang['AdminMain.getfilelocations.plugin'] = 'Blesta 플러그인 디렉토리';
$lang['AdminMain.getfilelocations.module'] = 'Blesta 모듈 디렉토리';
$lang['AdminMain.!success.nonmerchant_created'] = '새 게이트웨이가 성공적으로 생성되었으며 %1$s에서 찾을 수 있습니다.';
$lang['AdminMain.!success.merchant_created'] = '새 게이트웨이가 성공적으로 생성되었으며 %1$s에서 찾을 수 있습니다.';
$lang['AdminMain.!success.plugin_created'] = '새 플러그인이 성공적으로 생성되었으며 %1$s에서 찾을 수 있습니다.';
$lang['AdminMain.!success.module_created'] = '새 모듈이 성공적으로 생성되었으며 %1$s에서 찾을 수 있습니다.';
$lang['AdminMain.!success.package_deleted'] = '확장 프로그램이 성공적으로 삭제되었습니다.';
$lang['AdminMain.!notice.updating_installed_extension'] = '이 확장 프로그램이 현재 설치되어 있습니다. 파일을 다시 생성하기 전에 제거하지 않으면 데이터베이스의 일관성이 손상될 수 있으므로 제거할 것을 적극 권장합니다.';
$lang['AdminMain.!notice.file_overwrite'] = '이 확장자에 대한 파일은 Blesta 파일에 이미 존재하며 Blesta 디렉터리를 사용하는 경우 덮어쓰게 됩니다.';
$lang['AdminMain.!notice.type_warning'] = '확장 프로그램 유형을 변경하면 이 확장 프로그램에 저장된 모든 설정이 되돌릴 수 없게 지워집니다.';
$lang['AdminMain.!error.generation_failed'] = '확장 프로그램을 생성할 수 없습니다.  예외 생성됨: %1$s';
$lang['AdminMain.!error.name_taken'] = '이 이름은 기존 확장 디렉터리와 충돌합니다.';

