<?php
/**
 * Support Manager Tickets
 *
 * @package blesta
 * @subpackage blesta.language.ko_kr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SupportManagerTickets.log.ticket_staff_id'] = '%1$s 에 할당되었습니다.';
$lang['SupportManagerTickets.reassign_note'] = '이 티켓이 %1$s에게 다시 배정되었습니다. 이전 클라이언트의 답장이 이 클라이언트에 다시 배정되었으며 다른 사람이 작성했을 수 있습니다.';
$lang['SupportManagerTickets.log.unassigned'] = '할당되지 않음';
$lang['SupportManagerTickets.log.status'] = '상태가 %1$s로 변경되었습니다.';
$lang['SupportManagerTickets.log.priority'] = '우선 순위가 %1$s로 변경되었습니다.';
$lang['SupportManagerTickets.log.summary'] = '요약이 업데이트되었습니다.';
$lang['SupportManagerTickets.log.department_id'] = '부서가 %1$s로 변경되었습니다.';
$lang['SupportManagerTickets.type.log'] = '로그';
$lang['SupportManagerTickets.type.note'] = '참고';
$lang['SupportManagerTickets.type.reply'] = '답글';
$lang['SupportManagerTickets.status.trash'] = '휴지통';
$lang['SupportManagerTickets.status.closed'] = '닫힘';
$lang['SupportManagerTickets.status.on_hold'] = '보류 중';
$lang['SupportManagerTickets.status.in_progress'] = '진행 중';
$lang['SupportManagerTickets.status.awaiting_reply'] = '고객 응답 대기 중';
$lang['SupportManagerTickets.status.open'] = '직원 답변 대기 중';
$lang['SupportManagerTickets.priority.low'] = '낮음';
$lang['SupportManagerTickets.priority.medium'] = 'Medium';
$lang['SupportManagerTickets.priority.high'] = '높음';
$lang['SupportManagerTickets.priority.critical'] = '중요';
$lang['SupportManagerTickets.priority.emergency'] = '긴급 상황';
$lang['SupportManagerTickets.merge.reply'] = '이 티켓이 티켓 #%1$s에 병합되었습니다.';
$lang['SupportManagerTickets.!error.client_id.company'] = '하나 이상의 티켓이 해당 고객과 동일한 회사의 티켓이 아닙니다.';
$lang['SupportManagerTickets.!error.ticket_ids[].exists'] = '하나 이상의 티켓 ID가 유효하지 않습니다.';
$lang['SupportManagerTickets.!error.tickets.department_matches'] = '티켓 중 하나 이상이 같은 회사에 속해 있지 않아 해당 부서에 배정될 수 없습니다.';
$lang['SupportManagerTickets.!error.tickets.service_matches'] = '티켓 중 하나 이상이 관련 클라이언트에 속하지 않기 때문에 지정된 서비스에 배정할 수 없습니다.';
$lang['SupportManagerTickets.!error.merge_into.itself'] = '티켓 자체는 병합되지 않을 수 있습니다.';
$lang['SupportManagerTickets.!error.tickets.valid'] = '선택한 티켓 중 하나 이상이 유효하지 않거나, 종료되었거나, 선택한 티켓과 동일한 고객의 티켓이 아닌 경우.';
$lang['SupportManagerTickets.!error.replies.notes'] = '티켓 답장 메모는 티켓 답장도 포함하지 않고 별도의 티켓으로 분리할 수 없습니다.';
$lang['SupportManagerTickets.!error.replies.valid'] = '하나 이상의 티켓 답장 ID가 유효하지 않거나 모든 답장이 선택되어 있습니다. 답장이 하나 이상 남아 있어야 합니다.';
$lang['SupportManagerTickets.!error.client_id.attached_to'] = '티켓 답장이 다른 고객으로부터 온 것이 아닐 수도 있습니다.';
$lang['SupportManagerTickets.!error.details.empty'] = '이 티켓에 대한 몇 가지 세부 정보를 입력하세요.';
$lang['SupportManagerTickets.!error.type.new_valid'] = '새 티켓의 답장 유형은 \'답장\'이어야 합니다.';
$lang['SupportManagerTickets.!error.type.format'] = '유효한 답장 유형을 선택해 주세요.';
$lang['SupportManagerTickets.!error.ticket_id.exists'] = '잘못된 티켓 ID입니다.';
$lang['SupportManagerTickets.!error.date_closed.format'] = '티켓 마감 날짜가 잘못된 날짜 형식입니다.';
$lang['SupportManagerTickets.!error.date_updated.format'] = '티켓 업데이트 날짜가 잘못된 날짜 형식입니다.';
$lang['SupportManagerTickets.!error.date_added.format'] = '티켓 추가 날짜가 잘못된 날짜 형식입니다.';
$lang['SupportManagerTickets.!error.status.trash'] = '휴지통에 버려진 티켓은 편집할 수 없습니다.';
$lang['SupportManagerTickets.!error.status.format'] = '유효한 상태를 선택해 주세요.';
$lang['SupportManagerTickets.!error.priority.format'] = '유효한 우선순위를 선택해 주세요.';
$lang['SupportManagerTickets.!error.summary.length'] = '요약의 길이는 255자를 초과할 수 없습니다.';
$lang['SupportManagerTickets.!error.summary.empty'] = '요약을 입력하세요.';
$lang['SupportManagerTickets.!error.email.format'] = '유효한 이메일 주소를 입력하세요.';
$lang['SupportManagerTickets.!error.client_id.set'] = '티켓이 다른 고객에게 속해 있으며 배정된 고객은 변경할 수 없습니다.';
$lang['SupportManagerTickets.!error.client_id.exists'] = '클라이언트 ID가 잘못되었습니다.';
$lang['SupportManagerTickets.!error.service_id.belongs'] = '선택한 서비스가 유효하지 않습니다.';
$lang['SupportManagerTickets.!error.service_id.exists'] = '이 티켓에 대해 선택한 서비스가 존재하지 않습니다.';
$lang['SupportManagerTickets.!error.by_staff_id.exists'] = '편집을 수행하는 것으로 설정된 스태프가 존재하지 않습니다.';
$lang['SupportManagerTickets.!error.contact_id.valid'] = '연락처는 유효한 고객이 없으면 티켓에 답장하지 못할 수 있습니다.';
$lang['SupportManagerTickets.!error.contact_id.exists'] = '이 티켓 답장에 대해 선택한 연락처가 존재하지 않습니다.';
$lang['SupportManagerTickets.!error.staff_id.exists'] = '직원 ID가 잘못되었습니다.';
$lang['SupportManagerTickets.!error.department_id.exists'] = '유효한 부서를 선택해 주세요.';
$lang['SupportManagerTickets.!error.code.format'] = '티켓 코드는 숫자로만 구성되어야 합니다.';
$lang['SupportManagerTickets.!error.priority.valid'] = '이 부서의 유효한 우선순위를 선택해 주세요.';
$lang['SupportManagerTickets.!error.contacts.valid'] = '티켓 연락처 중 하나 이상이 유효하지 않습니다.';
$lang['SupportManagerTickets.!error.recipients.valid'] = '티켓 수신자 중 하나 이상의 티켓이 유효하지 않습니다.';
$lang['SupportManagerTickets.!error.recipients.duplicated'] = '티켓 수신자 중 한 명 이상이 중복되어 있습니다.';

