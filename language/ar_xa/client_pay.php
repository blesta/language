<?php
/**
 * Client Pay
 *
 * @package blesta
 * @subpackage blesta.language.ar_xa
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientPay.confirm.boxtitle_confirm'] = 'تأكيد الدفع';
$lang['ClientPay.setcontactview.text_none'] = 'لا يوجد';
$lang['ClientPay.received.text_try_again'] = 'حاول مرة أخرى';
$lang['ClientPay.received.invoices'] = 'رقم الفاتورة';
$lang['ClientPay.received.amount'] = 'المبلغ';
$lang['ClientPay.received.transaction_id'] = 'معرّف المعاملة';
$lang['ClientPay.received.statement'] = 'تتم الآن معالجة عملية الدفع الخاصة بك.';
$lang['ClientPay.received.boxtitle_received'] = 'شكراً لك!';
$lang['ClientPay.received.page_title'] = 'العميل %1$s المدفوعات المستلمة';
$lang['ClientPay.confirm.description_credit'] = 'ائتمان الدفع';
$lang['ClientPay.confirm.description_invoice_number'] = '#%1$s';
$lang['ClientPay.confirm.description_invoice_separator'] = ',';
$lang['ClientPay.confirm.description_invoice'] = 'رقم الفاتورة%1$s';
$lang['ClientPay.confirm.field_edit'] = 'تحرير الدفع';
$lang['ClientPay.confirm.field_submit'] = 'تقديم الدفع';
$lang['ClientPay.confirm.total'] = 'المجموع:';
$lang['ClientPay.confirm.account_exp'] = 'تنتهي صلاحيته %1$s';
$lang['ClientPay.confirm.account_info_type'] = '%1$s';
$lang['ClientPay.confirm.account_info'] = '%1$s (%2$s) تنتهي بـ %3$s';
$lang['ClientPay.confirm.payment_details'] = 'تفاصيل الدفع';
$lang['ClientPay.confirm.page_title'] = 'العميل %1$s تأكيد الدفع ';
$lang['ClientPay.multipleinvoices.no_results'] = 'لا توجد فواتير بهذه العملة.';
$lang['ClientPay.multipleinvoices.text_datedue'] = 'تاريخ الاستحقاق';
$lang['ClientPay.multipleinvoices.text_invoice'] = 'رقم الفاتورة';
$lang['ClientPay.multipleinvoices.text_due'] = 'المبلغ المستحق';
$lang['ClientPay.multipleinvoices.text_amount'] = 'المبلغ الواجب دفعه';
$lang['ClientPay.multipleinvoices.text_edit_amounts'] = 'قم بالدفع الجزئي بدلاً من ذلك';
$lang['ClientPay.method.invoice_amount'] = 'المبلغ';
$lang['ClientPay.method.invoice_quantity'] = 'الكمية';
$lang['ClientPay.method.invoice_description'] = 'الوصف';
$lang['ClientPay.method.heading_invoice'] = 'رقم الفاتورة%1$s';
$lang['ClientPay.method.no_options'] = 'لا توجد خيارات دفع متاحة.';
$lang['ClientPay.method.field_credit_submit'] = 'تطبيق الائتمان والمتابعة';
$lang['ClientPay.method.field_submit'] = 'المراجعة والتأكيد';
$lang['ClientPay.method.field_apply_credit'] = 'تقديم طلب ائتمان (%1$s متاح )';
$lang['ClientPay.method.field_paymentaccount_ach'] = 'حسابات ACH';
$lang['ClientPay.method.field_paymentaccount_autodebit'] = '(الخصم التلقائي) %1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.field_paymentaccount_cc'] = 'حسابات البطاقات الائتمانية';
$lang['ClientPay.method.field_paymentaccount'] = '%1$s %2$s - %3$s%4$s';
$lang['ClientPay.method.heading_payment_options'] = 'خيارات الدفع';
$lang['ClientPay.method.heading_other_payment_options'] = 'خيارات الدفع الأخرى';
$lang['ClientPay.method.field_newdetails'] = 'تفاصيل الدفع الجديدة';
$lang['ClientPay.method.field_useaccount'] = 'استخدام حساب الدفع';
$lang['ClientPay.method.boxtitle_method'] = 'قم بالدفع';
$lang['ClientPay.method.page_title'] = 'العميل %1$s طريقة الدفع ';
$lang['ClientPay.index.field_submit'] = 'تابع';
$lang['ClientPay.index.field_credit'] = 'مبلغ الدفع الأخرى';
$lang['ClientPay.index.boxtitle_pay'] = 'قم بالدفع';
$lang['ClientPay.index.page_title'] = 'العميل %1$s الدفع';
$lang['ClientPay.!error.payment_authorize'] = 'تعذر التصريح بالدفع لحساب الدفع المحدد.  يرجى تحديد حساب آخر أو المحاولة مرة أخرى.';
$lang['ClientPay.!error.invoice_voided'] = 'تم إلغاء هذه الفاتورة ولا يمكن دفعها.';
$lang['ClientPay.!error.payment_amounts'] = 'يرجى تحديد الفواتير المطلوب دفعها أو إدخال مبلغ دفع آخر.';
$lang['ClientPay.!error.invalid_amount'] = 'قد لا تكون مبالغ المدفوعات الأخرى سالبة.';
$lang['ClientPay.!error.invalid_details'] = 'يُرجى تحديد خيار الدفع.';
$lang['ClientPay.!info.ach_verification_redirect'] = 'تحتاج إلى التحقق من هذا الحساب قبل أن تتمكن من استخدامه لإجراء عملية دفع. ستعيد هذه العملية توجيهك بعيداً عن الصفحة الحالية.';
$lang['ClientPay.!info.ach_verification'] = 'تحتاج إلى التحقق من هذا الحساب قبل أن تتمكن من استخدامه لإجراء عملية دفع.';
$lang['ClientPay.!info.unverified_email_button'] = 'إعادة إرسال البريد الإلكتروني للتحقق';
$lang['ClientPay.!info.unverified_email'] = 'تم إرسال رابط إلى عنوان البريد الإلكتروني الذي قدمته. يُرجى النقر على الرابط الموجود في البريد الإلكتروني للتحقق من عنوان بريدك الإلكتروني قبل الشروع في الدفع.';
$lang['ClientPay.!success.invoice_paid'] = 'تم دفع هذه الفاتورة من قبل.';
$lang['ClientPay.!success.credit_partial_processed'] = 'تم تطبيق الأرصدة المتاحة، ولكن لا يزال هناك رصيد متبقي. يرجى إكمال هذه المعاملة بدفع الرصيد المتبقي أدناه.';
$lang['ClientPay.!success.credit_full_processed'] = 'تم تطبيق الاعتمادات المتاحة.';
$lang['ClientPay.!success.payment_processed'] = 'تمت معالجة عملية الدفع بنجاح %1$s. رقم المعاملة: %2$s';
$lang['ClientPay.method.invoice_paid_amount'] = 'المبلغ المدفوع';
$lang['ClientPay.method.invoice_balance_due'] = 'الرصيد المستحق';
$lang['ClientPay.method.invoice_total'] = 'إجمالي الفاتورة';
$lang['ClientPay.index.text_credit_max_only'] = 'الحد الأقصى للمبلغ: %1$s';
$lang['ClientPay.index.text_credit_min_only'] = 'الحد الأدنى للمبلغ: %1$s';
$lang['ClientPay.index.text_credit_limits'] = 'الحد الأدنى للمبلغ: %1$s - الحد الأقصى للمبلغ: %2$s';
$lang['ClientPay.!error.credit_maximum'] = 'لا يمكن أن يتجاوز مبلغ الائتمان %1$s.';
$lang['ClientPay.!error.credit_minimum'] = 'يجب ألا يقل مبلغ الائتمان عن %1$s.';

