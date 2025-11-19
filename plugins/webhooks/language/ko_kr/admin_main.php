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

$lang['AdminMain.index.category_incoming'] = '수신';
$lang['AdminMain.edit.text_fields_map'] = '이 섹션에서는 트리거되는 이벤트의 필드 이름을 콜백으로 전송하기 전에 사용자 지정 이름으로 변경할 수 있습니다. 하위 필드는 마침표로 구분해야 합니다(예: vars.status). 각 이벤트에서 지원하는 모든 필드 목록을 보려면 다음 <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">링크</a>에서 확인할 수 있습니다.';
$lang['AdminMain.edit.field_editsubmit'] = '웹훅 편집';
$lang['AdminMain.edit.field_add_field'] = '필드 추가';
$lang['AdminMain.edit.field_method'] = '방법';
$lang['AdminMain.edit.field_type'] = '콜백';
$lang['AdminMain.edit.field_event'] = '이벤트';
$lang['AdminMain.edit.field_callback'] = '콜백';
$lang['AdminMain.edit.option_delete'] = '삭제';
$lang['AdminMain.edit.heading_options'] = '옵션';
$lang['AdminMain.edit.heading_parameter'] = '새 필드';
$lang['AdminMain.edit.heading_field'] = '원본 필드';
$lang['AdminMain.edit.heading_fields_map'] = '필드 맵';
$lang['AdminMain.edit.heading_event'] = '이벤트';
$lang['AdminMain.edit.boxtitle_editwebhook'] = '웹훅 편집';
$lang['AdminMain.add.text_fields_map'] = '이 섹션에서는 트리거되는 이벤트의 필드 이름을 콜백으로 전송하기 전에 사용자 지정 이름으로 변경할 수 있습니다. 하위 필드는 마침표로 구분해야 합니다(예: vars.status). 각 이벤트에서 지원하는 모든 필드 목록을 보려면 다음 <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">링크</a>에서 확인할 수 있습니다.';
$lang['AdminMain.add.field_addsubmit'] = '웹훅 추가';
$lang['AdminMain.add.field_add_field'] = '필드 추가';
$lang['AdminMain.add.field_method'] = '방법';
$lang['AdminMain.add.field_type'] = '콜백';
$lang['AdminMain.add.field_event'] = '이벤트';
$lang['AdminMain.add.field_callback'] = '콜백';
$lang['AdminMain.add.option_delete'] = '삭제';
$lang['AdminMain.add.heading_options'] = '옵션';
$lang['AdminMain.add.heading_parameter'] = '새 필드';
$lang['AdminMain.add.heading_field'] = '원본 필드';
$lang['AdminMain.add.heading_fields_map'] = '필드 맵';
$lang['AdminMain.add.heading_event'] = '이벤트';
$lang['AdminMain.add.boxtitle_addwebhook'] = '웹훅 추가';
$lang['AdminMain.index.no_results'] = '사용 가능한 웹훅이 없습니다.';
$lang['AdminMain.index.text_description_incoming'] = 'HTTP 요청을 수신하고 요청에 포함된 매개변수를 사용하여 시스템에서 이벤트를 트리거합니다. 요청은 GET, POST 또는 JSON을 사용하여 수신할 수 있습니다.';
$lang['AdminMain.index.text_description_outgoing'] = '이벤트가 트리거되면 URL로 HTTP 요청을 보냅니다. 요청은 GET, POST, PUT 또는 JSON을 사용하여 전송할 수 있습니다.';
$lang['AdminMain.index.option_delete'] = '삭제';
$lang['AdminMain.index.option_edit'] = '편집';
$lang['AdminMain.index.heading_options'] = '옵션';
$lang['AdminMain.index.heading_method'] = '방법';
$lang['AdminMain.index.heading_event'] = '이벤트';
$lang['AdminMain.index.heading_callback'] = '콜백';
$lang['AdminMain.index.boxtitle_webhooks'] = '웹훅';
$lang['AdminMain.index.categorylink_addwebhook'] = '웹훅 추가';
$lang['AdminMain.index.category_outgoing'] = '발신';
$lang['AdminMain.index.page_title_edit'] = '웹훅 편집';
$lang['AdminMain.index.page_title_add'] = '웹훅 추가';
$lang['AdminMain.index.page_title_index'] = '웹훅';
$lang['AdminMain.modal.delete_text'] = '이 웹훅을 삭제하시겠습니까?';
$lang['AdminMain.!success.webhook_deleted'] = '웹훅이 성공적으로 삭제되었습니다!';
$lang['AdminMain.!success.webhook_updated'] = '웹훅이 성공적으로 업데이트되었습니다!';
$lang['AdminMain.!success.webhook_added'] = '웹훅이 성공적으로 추가되었습니다!';
$lang['AdminMain.!tooltip.callback'] = '콜백은 요청이 전송되거나 수신될 위치를 나타내며, 발신 웹훅의 경우 URL이어야 하고 수신 웹훅의 경우 요청이 수신될 URL의 이름이어야 합니다(예: http://blesta.com/plugin/webhooks/trigger/index/[콜백 이름]).';
$lang['AdminMain.edit.field_cancel'] = '취소';
$lang['AdminMain.add.field_cancel'] = '취소';
$lang['AdminMain.logs.no_results'] = '사용 가능한 로그가 없습니다.';
$lang['AdminMain.logs.option_resend'] = '다시 보내기';
$lang['AdminMain.logs.confirm_resend'] = '이 이벤트를 다시 보내시겠습니까?';
$lang['AdminMain.logs.field_filterdateend'] = '종료 날짜';
$lang['AdminMain.logs.field_filterdatestart'] = '시작 날짜';
$lang['AdminMain.logs.field_filterhttpstatus'] = 'HTTP 상태';
$lang['AdminMain.logs.field_filterevent'] = '이벤트';
$lang['AdminMain.logs.field_filterwebhook_all'] = '모든 웹훅';
$lang['AdminMain.logs.field_filterwebhook'] = '웹훅';
$lang['AdminMain.logs.heading_options'] = '옵션';
$lang['AdminMain.logs.heading_date_last_retry'] = '마지막 재시도';
$lang['AdminMain.logs.heading_date_triggered'] = '트리거된 날짜';
$lang['AdminMain.logs.heading_http_response'] = 'HTTP 응답';
$lang['AdminMain.logs.heading_method'] = '방법';
$lang['AdminMain.logs.heading_response'] = '응답';
$lang['AdminMain.logs.heading_event'] = '이벤트';
$lang['AdminMain.logs.heading_webhook'] = '웹훅';
$lang['AdminMain.logs.categorylink_viewwebhooks'] = '웹훅 보기';
$lang['AdminMain.logs.boxtitle_logs'] = '웹훅 로그';
$lang['AdminMain.index.option_logs'] = '로그';
$lang['AdminMain.index.categorylink_viewlogs'] = '모든 로그 보기';
$lang['AdminMain.index.page_title_logs'] = '웹훅 로그';
$lang['AdminMain.!success.webhook_retried'] = '웹훅이 성공적으로 재시도되었습니다!';

