<?php
/**
 * Transactions
 *
 * @package blesta
 * @subpackage blesta.language.ko_kr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Transactions.debit_types.credit'] = '신용';
$lang['Transactions.debit_types.debit'] = '직불';
$lang['Transactions.status.returned'] = '반환됨';
$lang['Transactions.status.refunded'] = '환불';
$lang['Transactions.status.pending'] = '보류 중';
$lang['Transactions.status.error'] = '오류';
$lang['Transactions.status.void'] = 'Void';
$lang['Transactions.status.declined'] = '거부됨';
$lang['Transactions.status.approved'] = '승인됨';
$lang['Transactions.types.other'] = '기타';
$lang['Transactions.types.ach'] = 'ACH';
$lang['Transactions.types.cc'] = '신용 카드';
$lang['Transactions.!error.type_id.exists'] = '잘못된 거래 유형 ID입니다.';
$lang['Transactions.!error.is_lang.length'] = 'is_lang 길이는 1자를 초과할 수 없습니다.';
$lang['Transactions.!error.is_lang.format'] = 'is_lang은 숫자여야 합니다.';
$lang['Transactions.!error.type.valid'] = '유효한 유형을 선택해 주세요.';
$lang['Transactions.!error.name.length'] = '이름 길이는 32자를 초과할 수 없습니다.';
$lang['Transactions.!error.name.empty'] = '이름을 입력하세요.';
$lang['Transactions.!error.currency.mismatch'] = '지정된 통화가 연결된 송장 중 하나 이상과 일치하지 않습니다.';
$lang['Transactions.!error.currency.missing'] = '통화를 설정하세요.';
$lang['Transactions.!error.date.format'] = '적용된 날짜가 유효하지 않습니다.';
$lang['Transactions.!error.amounts.positive'] = '하나 이상의 결제할 금액 값이 음수입니다. 각 결제할 금액 값이 0 이상인지 확인합니다.';
$lang['Transactions.!error.amounts.overage'] = '하나 이상의 결제할 금액 값을 지정된 청구서에 적용할 수 없습니다. 결제할 금액이 인보이스의 미결제 금액을 초과하지 않는지, 인보이스가 열려 있는지, 결제할 금액 값의 합계가 결제 금액 또는 크레딧 금액을 초과하지 않는지 확인하세요.';
$lang['Transactions.!error.invoice_id.exists'] = '잘못된 인보이스 ID입니다.';
$lang['Transactions.!error.transaction_id.currency_matches'] = '인보이스 금액이 거래 통화와 일치하지 않아서 적용할 수 없습니다.';
$lang['Transactions.!error.message.length'] = '메시지 길이는 255자를 초과할 수 없습니다.';
$lang['Transactions.!error.date_added.format'] = '거래 날짜는 미래 날짜가 될 수 없습니다.';
$lang['Transactions.!error.transaction_id.exists'] = '잘못된 거래 ID입니다.';
$lang['Transactions.!error.status.format'] = '잘못된 거래 상태입니다.';
$lang['Transactions.!error.reference_id.length'] = '참조 ID 길이는 128자를 초과할 수 없습니다.';
$lang['Transactions.!error.parent_transaction_id.length'] = '상위 트랜잭션 ID의 길이는 128자를 초과할 수 없습니다.';
$lang['Transactions.!error.transaction_id.length'] = '트랜잭션 ID 길이는 128자를 초과할 수 없습니다.';
$lang['Transactions.!error.gateway_id.exists'] = '잘못된 게이트웨이 ID입니다.';
$lang['Transactions.!error.transaction_type_id.exists'] = '잘못된 거래 유형 ID입니다.';
$lang['Transactions.!error.type.format'] = '잘못된 거래 유형입니다.';
$lang['Transactions.!error.currency.length'] = '통화는 3자 길이여야 합니다.';
$lang['Transactions.!error.amount.format'] = '금액은 숫자여야 합니다.';
$lang['Transactions.!error.client_id.exists'] = '클라이언트 ID가 잘못되었습니다.';

