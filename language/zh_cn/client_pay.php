<?php
/**
 * Client Pay
 *
 * @package blesta
 * @subpackage blesta.language.zh_cn
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientPay.setcontactview.text_none'] = '无';
$lang['ClientPay.received.text_try_again'] = '再试一次';
$lang['ClientPay.received.invoices'] = '发票 #';
$lang['ClientPay.received.amount'] = '金额';
$lang['ClientPay.received.transaction_id'] = '交易 ID';
$lang['ClientPay.received.statement'] = '您的付款正在处理中。';
$lang['ClientPay.received.boxtitle_received'] = '谢谢你';
$lang['ClientPay.received.page_title'] = '客户 %1$s 收到付款';
$lang['ClientPay.confirm.description_credit'] = '付款信用';
$lang['ClientPay.confirm.description_invoice_number'] = '#%1$s';
$lang['ClientPay.confirm.description_invoice_separator'] = ',';
$lang['ClientPay.confirm.description_invoice'] = '发票 #%1$s';
$lang['ClientPay.confirm.field_edit'] = '编辑付款';
$lang['ClientPay.confirm.field_submit'] = '提交付款';
$lang['ClientPay.confirm.total'] = '共计';
$lang['ClientPay.confirm.account_exp'] = '过期 %1$s';
$lang['ClientPay.confirm.account_info_type'] = '%1$s';
$lang['ClientPay.confirm.account_info'] = '以 %3$s 结尾的 %1$s (%2$s)';
$lang['ClientPay.confirm.payment_details'] = '付款详情';
$lang['ClientPay.confirm.boxtitle_confirm'] = '确认付款';
$lang['ClientPay.confirm.page_title'] = '客户 %1$s 确认付款';
$lang['ClientPay.multipleinvoices.no_results'] = '没有该货币的发票。';
$lang['ClientPay.multipleinvoices.text_datedue'] = '到期日期';
$lang['ClientPay.multipleinvoices.text_invoice'] = '发票 #';
$lang['ClientPay.multipleinvoices.text_due'] = '应付金额';
$lang['ClientPay.multipleinvoices.text_amount'] = '支付金额';
$lang['ClientPay.multipleinvoices.text_edit_amounts'] = '改为部分付款';
$lang['ClientPay.method.invoice_amount'] = '金额';
$lang['ClientPay.method.invoice_quantity'] = '数量';
$lang['ClientPay.method.invoice_description'] = '说明';
$lang['ClientPay.method.heading_invoice'] = '发票 #%1$s';
$lang['ClientPay.method.no_options'] = '没有付款方式。';
$lang['ClientPay.method.field_credit_submit'] = '申请信贷并继续';
$lang['ClientPay.method.field_submit'] = '审查和确认';
$lang['ClientPay.method.field_apply_credit'] = '申请信贷 (%1$s 可用)';
$lang['ClientPay.method.field_paymentaccount_ach'] = '自动转账账户';
$lang['ClientPay.method.field_paymentaccount_autodebit'] = '(自动借记） %1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.field_paymentaccount_cc'] = '信用卡账户';
$lang['ClientPay.method.field_paymentaccount'] = '%1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.heading_payment_options'] = '付款方式';
$lang['ClientPay.method.heading_other_payment_options'] = '其他付款方式';
$lang['ClientPay.method.field_newdetails'] = '新付款详情';
$lang['ClientPay.method.field_useaccount'] = '使用付款账户';
$lang['ClientPay.method.boxtitle_method'] = '付款';
$lang['ClientPay.method.page_title'] = '客户 %1$s 付款方式';
$lang['ClientPay.index.field_submit'] = '继续';
$lang['ClientPay.index.field_credit'] = '其他付款金额';
$lang['ClientPay.index.boxtitle_pay'] = '付款';
$lang['ClientPay.index.page_title'] = '客户 %1$s 付款';
$lang['ClientPay.!error.payment_authorize'] = '所选付款账户无法授权付款。  请选择其他账户或重试。';
$lang['ClientPay.!error.invoice_voided'] = '该发票已作废，无法支付。';
$lang['ClientPay.!error.payment_amounts'] = '请选择要支付的发票或输入其他付款金额。';
$lang['ClientPay.!error.invalid_amount'] = '其他付款金额可能不是负数。';
$lang['ClientPay.!error.invalid_details'] = '请选择付款方式。';
$lang['ClientPay.!info.ach_verification_redirect'] = '在使用该账户付款之前，您需要验证该账户。此过程将使您离开当前页面。';
$lang['ClientPay.!info.ach_verification'] = '在使用该账户付款之前，您需要验证该账户。';
$lang['ClientPay.!info.unverified_email_button'] = '重新发送验证电子邮件';
$lang['ClientPay.!info.unverified_email'] = '您提供的电子邮件地址已收到一个链接。请点击电子邮件中的链接，在付款前验证您的电子邮件地址。';
$lang['ClientPay.!success.invoice_paid'] = '该发票之前已经支付。';
$lang['ClientPay.!success.credit_partial_processed'] = '可用积分已使用，但仍有余额。请支付以下余款，完成本次交易。';
$lang['ClientPay.!success.credit_full_processed'] = '可用积分已经使用。';
$lang['ClientPay.!success.payment_processed'] = '%1$s 的付款已成功处理。交易编号： %2$s';
$lang['ClientPay.method.invoice_balance_due'] = '应付余额';
$lang['ClientPay.method.invoice_paid_amount'] = '已付金额';
$lang['ClientPay.method.invoice_total'] = '发票总额';
$lang['ClientPay.index.text_credit_max_only'] = '最高金额：%1$s';
$lang['ClientPay.index.text_credit_min_only'] = '最低金额：%1$s';
$lang['ClientPay.index.text_credit_limits'] = '最低金额 %1$s - 最大金额%2$s';
$lang['ClientPay.!error.credit_maximum'] = '抵免金额不得超过%1$s 。';
$lang['ClientPay.!error.credit_minimum'] = '信贷金额必须至少为%1$s 。';

