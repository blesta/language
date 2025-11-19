<?php
/**
 * Client Pay
 *
 * @package blesta
 * @subpackage blesta.language.ko_kr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientPay.!success.payment_processed'] = '%1$s 에 대한 결제가 성공적으로 처리되었습니다. 거래 번호입니다: %2$s';
$lang['ClientPay.method.field_paymentaccount'] = '%1$s %2$s - %3$s x%4$s';
$lang['ClientPay.setcontactview.text_none'] = '없음';
$lang['ClientPay.received.text_try_again'] = '다시 시도';
$lang['ClientPay.received.invoices'] = '송장 #';
$lang['ClientPay.received.amount'] = '금액';
$lang['ClientPay.received.transaction_id'] = '거래 ID';
$lang['ClientPay.received.statement'] = '결제가 처리 중입니다.';
$lang['ClientPay.received.boxtitle_received'] = '감사합니다!';
$lang['ClientPay.received.page_title'] = '고객 %1$의 결제 수락';
$lang['ClientPay.confirm.description_credit'] = '결제 크레딧';
$lang['ClientPay.confirm.description_invoice_number'] = '#%1$s';
$lang['ClientPay.confirm.description_invoice_separator'] = ',';
$lang['ClientPay.confirm.description_invoice'] = '송장 #%1$s';
$lang['ClientPay.confirm.field_edit'] = '결제 편집';
$lang['ClientPay.confirm.field_submit'] = '결제 제출';
$lang['ClientPay.confirm.total'] = '합계:';
$lang['ClientPay.confirm.account_exp'] = '만료 %1$s';
$lang['ClientPay.confirm.account_info_type'] = '%1$s';
$lang['ClientPay.confirm.account_info'] = '3$s로 끝나는 %1$s(%2$s)';
$lang['ClientPay.confirm.payment_details'] = '결제 세부 정보';
$lang['ClientPay.confirm.boxtitle_confirm'] = '결제 확인';
$lang['ClientPay.confirm.page_title'] = '클라이언트 %1$ 결제 확인';
$lang['ClientPay.multipleinvoices.no_results'] = '이 통화로는 인보이스가 없습니다.';
$lang['ClientPay.multipleinvoices.text_datedue'] = '마감일';
$lang['ClientPay.multipleinvoices.text_invoice'] = '송장 #';
$lang['ClientPay.multipleinvoices.text_due'] = '납부 금액';
$lang['ClientPay.multipleinvoices.text_amount'] = '결제 금액';
$lang['ClientPay.multipleinvoices.text_edit_amounts'] = '대신 부분 결제하기';
$lang['ClientPay.method.invoice_amount'] = '금액';
$lang['ClientPay.method.invoice_quantity'] = '수량';
$lang['ClientPay.method.invoice_description'] = '설명';
$lang['ClientPay.method.heading_invoice'] = '송장 #%1$s';
$lang['ClientPay.method.no_options'] = '사용 가능한 결제 옵션이 없습니다.';
$lang['ClientPay.method.field_credit_submit'] = '크레딧 적용 및 계속하기';
$lang['ClientPay.method.field_submit'] = '검토 및 확인';
$lang['ClientPay.method.field_apply_credit'] = '크레딧 적용(%1$ 사용 가능)';
$lang['ClientPay.method.field_paymentaccount_ach'] = 'ACH 계정';
$lang['ClientPay.method.field_paymentaccount_autodebit'] = '(자동 이체) %1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.field_paymentaccount_cc'] = '신용 카드 계정';
$lang['ClientPay.method.heading_payment_options'] = '결제 옵션';
$lang['ClientPay.method.heading_other_payment_options'] = '기타 결제 옵션';
$lang['ClientPay.method.field_newdetails'] = '새로운 결제 세부 정보';
$lang['ClientPay.method.field_useaccount'] = '결제 계정 사용';
$lang['ClientPay.method.boxtitle_method'] = '결제하기';
$lang['ClientPay.method.page_title'] = '고객 %1$의 결제 방법';
$lang['ClientPay.index.field_submit'] = '계속하기';
$lang['ClientPay.index.field_credit'] = '기타 결제 금액';
$lang['ClientPay.index.boxtitle_pay'] = '결제하기';
$lang['ClientPay.index.page_title'] = '클라이언트 %1$s 결제';
$lang['ClientPay.!error.payment_authorize'] = '선택한 결제 계정에 대해 결제를 승인할 수 없습니다.  다른 계정을 선택하거나 다시 시도해 주세요.';
$lang['ClientPay.!error.invoice_voided'] = '이 청구서는 무효 처리되었으므로 결제할 수 없습니다.';
$lang['ClientPay.!error.payment_amounts'] = '결제할 청구서를 선택하거나 다른 결제 금액을 입력하세요.';
$lang['ClientPay.!error.invalid_amount'] = '기타 결제 금액은 마이너스가 아닐 수 있습니다.';
$lang['ClientPay.!error.invalid_details'] = '결제 옵션을 선택하세요.';
$lang['ClientPay.!info.ach_verification_redirect'] = '이 계정을 인증해야 결제에 사용할 수 있습니다. 이 과정을 거치면 현재 페이지에서 다른 페이지로 리디렉션됩니다.';
$lang['ClientPay.!info.ach_verification'] = '이 계정을 인증해야 결제에 사용할 수 있습니다.';
$lang['ClientPay.!info.unverified_email_button'] = '확인 이메일 다시 보내기';
$lang['ClientPay.!info.unverified_email'] = '입력하신 이메일 주소로 링크가 전송되었습니다. 결제를 진행하기 전에 이메일에 포함된 링크를 클릭하여 이메일 주소를 확인하시기 바랍니다.';
$lang['ClientPay.!success.invoice_paid'] = '이 인보이스는 이전에 결제되었습니다.';
$lang['ClientPay.!success.credit_partial_processed'] = '사용 가능한 크레딧이 적용되었지만 아직 잔액이 남아 있습니다. 아래에서 나머지 금액을 결제하여 거래를 완료하세요.';
$lang['ClientPay.!success.credit_full_processed'] = '사용 가능한 크레딧이 적용되었습니다.';
$lang['ClientPay.method.invoice_balance_due'] = '잔액 마감';
$lang['ClientPay.method.invoice_paid_amount'] = '결제 금액';
$lang['ClientPay.method.invoice_total'] = '송장 합계';
$lang['ClientPay.index.text_credit_max_only'] = '최대 금액: %1$s';
$lang['ClientPay.index.text_credit_min_only'] = '최소 금액: %1$s';
$lang['ClientPay.index.text_credit_limits'] = '최소 금액: %1$s - 최대 금액: %2$s';
$lang['ClientPay.!error.credit_maximum'] = '크레딧 금액은 %1$s 을 초과할 수 없습니다.';
$lang['ClientPay.!error.credit_minimum'] = '크레딧 금액은 %1$s 이상이어야 합니다.';

