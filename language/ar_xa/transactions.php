<?php
/**
 * Transactions
 *
 * @package blesta
 * @subpackage blesta.language.ar_xa
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Transactions.debit_types.credit'] = 'الائتمان';
$lang['Transactions.debit_types.debit'] = 'الخصم';
$lang['Transactions.status.returned'] = 'تم الإرجاع';
$lang['Transactions.status.refunded'] = 'مستردة';
$lang['Transactions.status.pending'] = 'قيد الانتظار';
$lang['Transactions.status.error'] = 'خطأ';
$lang['Transactions.status.void'] = 'باطل';
$lang['Transactions.status.declined'] = 'مرفوض';
$lang['Transactions.status.approved'] = 'معتمد';
$lang['Transactions.types.other'] = 'أخرى';
$lang['Transactions.types.ach'] = 'ACH';
$lang['Transactions.types.cc'] = 'البطاقة الائتمانية';
$lang['Transactions.!error.type_id.exists'] = 'معرّف نوع المعاملة غير صالح.';
$lang['Transactions.!error.is_lang.length'] = 'لا يجوز أن يتجاوز طول is_lang حرف واحد.';
$lang['Transactions.!error.is_lang.format'] = 'هو_لغة يجب أن يكون رقماً.';
$lang['Transactions.!error.type.valid'] = 'يرجى تحديد نوع صالح.';
$lang['Transactions.!error.name.length'] = 'لا يجوز أن يتجاوز طول الاسم 32 حرفاً.';
$lang['Transactions.!error.name.empty'] = 'الرجاء إدخال اسم.';
$lang['Transactions.!error.currency.mismatch'] = 'العملة المحددة لا تتطابق مع واحدة على الأقل من الفواتير المرتبطة بها.';
$lang['Transactions.!error.currency.missing'] = 'يُرجى تحديد العملة.';
$lang['Transactions.!error.date.format'] = 'التاريخ المطبق غير صالح.';
$lang['Transactions.!error.amounts.positive'] = 'قيمة واحدة أو أكثر من قيم المبلغ الواجب الدفع سالبة. تأكد أن كل قيمة من قيم المبلغ المطلوب دفعه تساوي صفراً أو أكثر.';
$lang['Transactions.!error.amounts.overage'] = 'تعذر تطبيق قيمة واحدة أو أكثر من قيم المبلغ المطلوب دفعه على الفاتورة المحددة. تأكد من أن المبلغ المطلوب دفعه لا يتجاوز المبلغ المستحق في الفاتورة، وأن الفاتورة مفتوحة، وأن مجموع قيم المبلغ المطلوب دفعه لا يتجاوز مبلغ الدفع أو المبلغ الدائن.';
$lang['Transactions.!error.invoice_id.exists'] = 'معرّف الفاتورة غير صالح.';
$lang['Transactions.!error.transaction_id.currency_matches'] = 'لا يمكن تطبيق مبالغ الفواتير لأنها لا تتطابق مع عملة المعاملة.';
$lang['Transactions.!error.message.length'] = 'لا يجوز أن يتجاوز طول الرسالة 255 حرفاً.';
$lang['Transactions.!error.date_added.format'] = 'لا يمكن أن يكون تاريخ المعاملة تاريخاً مستقبلياً.';
$lang['Transactions.!error.transaction_id.exists'] = 'معرّف المعاملة غير صالح.';
$lang['Transactions.!error.status.format'] = 'حالة المعاملة غير صالحة.';
$lang['Transactions.!error.reference_id.length'] = 'لا يجوز أن يتجاوز طول المعرف المرجعي 128 حرفاً.';
$lang['Transactions.!error.parent_transaction_id.length'] = 'لا يجوز أن يتجاوز طول معرف المعاملة الأصل 128 حرفاً.';
$lang['Transactions.!error.transaction_id.length'] = 'لا يجوز أن يتجاوز طول معرف المعاملة 128 حرفاً.';
$lang['Transactions.!error.gateway_id.exists'] = 'معرف البوابة غير صالح.';
$lang['Transactions.!error.transaction_type_id.exists'] = 'معرّف نوع المعاملة غير صالح.';
$lang['Transactions.!error.type.format'] = 'نوع المعاملة غير صالح.';
$lang['Transactions.!error.currency.length'] = 'يجب أن يكون طول العملة 3 أحرف.';
$lang['Transactions.!error.amount.format'] = 'يجب أن يكون المبلغ رقماً.';
$lang['Transactions.!error.client_id.exists'] = 'معرف العميل غير صالح.';

