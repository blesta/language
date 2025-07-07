<?php
/**
 * Services
 *
 * @package blesta
 * @subpackage blesta.language.ar_xa
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Services.getActions.update_coupon'] = 'تحديث الكوبون';
$lang['Services.getActions.change_renew'] = 'تغيير تاريخ التجديد';
$lang['Services.getActions.schedule_cancel'] = 'إلغاء الجدول الزمني';
$lang['Services.getActions.cancel'] = 'إلغاء';
$lang['Services.getActions.unsuspend'] = 'إلغاء التعليق';
$lang['Services.getActions.suspend'] = 'تعليق';
$lang['Services.getStatusTypes.in_review'] = 'في المراجعة';
$lang['Services.getStatusTypes.suspended'] = 'موقوفة عن العمل';
$lang['Services.getStatusTypes.pending'] = 'قيد الانتظار';
$lang['Services.getStatusTypes.canceled'] = 'تم الإلغاء';
$lang['Services.getStatusTypes.active'] = 'نشط';
$lang['Services.!error.prorate.format'] = 'يجب تعيين ما إذا كان التناسب إلى "صواب" أو "خطأ".';
$lang['Services.!error.service_id.has_children'] = 'قد لا يمكن حذف هذه الخدمة لأنها تحتوي على خدمات فرعية. يرجى إلغاء هذه الخدمات أو حذفها والمحاولة مرة أخرى.';
$lang['Services.!error.status.valid'] = 'يمكن حذف الخدمات المعلقة أو الملغاة أو قيد المراجعة فقط.';
$lang['Services.!error.configoptions.valid'] = 'أحد الخيارات القابلة للتكوين المحددة غير صالح للخدمة.';
$lang['Services.!error.date_canceled.valid'] = 'يجب عليك تحديد تاريخ صالح لإلغاء هذه الخدمة.';
$lang['Services.!error.pricing_id.valid'] = 'يجب أن تختار مصطلحاً صالحاً.';
$lang['Services.!error.invoice_method.valid'] = 'يجب عليك تحديد طريقة فاتورة صالحة.';
$lang['Services.!error.fields[][encrypted].format'] = 'حقل خدمة التشفير بتنسيق غير صالح.';
$lang['Services.!error.fields[][value].empty'] = 'قيمة فارغة من حقول الخدمة.';
$lang['Services.!error.fields[][key].empty'] = 'مفتاح فارغ من حقول الخدمة.';
$lang['Services.!error.use_module.format'] = 'تنسيق وحدة الاستخدام غير صالح.';
$lang['Services.!error.date_canceled.format'] = 'تنسيق التاريخ الملغي غير صالح.';
$lang['Services.!error.date_suspended.format'] = 'تنسيق التاريخ المعلق غير صالح.';
$lang['Services.!error.date_last_renewed.format'] = 'تنسيق تاريخ آخر تجديد غير صالح.';
$lang['Services.!error.date_renews.valid'] = 'يجب أن يكون تاريخ التجديد أكبر من تاريخ آخر تجديد %1$s.';
$lang['Services.!error.date_renews.format'] = 'تنسيق تاريخ التجديد غير صالح.';
$lang['Services.!error.date_added.format'] = 'تنسيق التاريخ المضاف غير صالح.';
$lang['Services.!error.status.format'] = 'حالة غير صالحة.';
$lang['Services.!error.override_currency.format'] = 'يُرجى تحديد عملة صالحة.';
$lang['Services.!error.override_price.override'] = 'يجب تعيين كل من السعر والعملة لتجاوز السعر الحالي.';
$lang['Services.!error.override_price.format'] = 'يجب أن يكون تجاوز السعر رقماً.';
$lang['Services.!error.module_group.valid'] = 'مجموعة الوحدة النمطية غير موجودة.';
$lang['Services.!error.module_row.valid'] = 'صف الوحدة النمطية غير موجود.';
$lang['Services.!error.qty.available'] = 'تم الوصول إلى حد الكمية. إذا أمكن، يُرجى اختيار كمية أقل.';
$lang['Services.!error.qty.length'] = 'لا يجوز أن يتجاوز طول الكمية 10 أحرف.';
$lang['Services.!error.qty.format'] = 'يجب أن تكون الكمية عدداً.';
$lang['Services.!error.coupon_id.valid'] = 'يبدو أن هذه القسيمة غير صالحة.';
$lang['Services.!error.module_row_id.exists'] = 'معرف صف الوحدة النمطية غير صالح.';
$lang['Services.!error.client_id.allowed'] = 'لا يمكن للعميل الوصول إلى تلك الحزمة.';
$lang['Services.!error.client_id.exists'] = 'العميل غير موجود.';
$lang['Services.!error.pricing_id.overrides'] = 'لا يمكن تغيير مدة الحزمة عند تعيين تجاوزات الأسعار.';
$lang['Services.!error.pricing_id.exists'] = 'يرجى تحديد مصطلح صالح.';
$lang['Services.!error.id_value.valid'] = 'تعذر تحديد قيمة معرف الفاتورة.';
$lang['Services.!error.id_format.length'] = 'لا يجوز أن يتجاوز تنسيق المعرف للفواتير 64 حرفاً.';
$lang['Services.!error.id_format.empty'] = 'لم يتم تعيين تنسيق معرف للفواتير.';
$lang['Services.!error.package_group_id.exists'] = 'معرف مجموعة الحزمة غير صالح.';
$lang['Services.!error.parent_service_id.parent'] = 'معرف الخدمة الأصل موجود بالفعل كخدمة تابعة لخدمة أخرى.';
$lang['Services.!error.parent_service_id.exists'] = 'معرف الخدمة الأصل غير صالح.';
$lang['Services.!error.service_id.exists'] = 'معرف الخدمة غير صالح.';
$lang['Services.!error.move.unpaid_invoices'] = 'لا يمكن نقل الخدمة إلى عميل آخر، لأن لديه فواتير غير مدفوعة.';
$lang['Services.!error.encrypted.format'] = 'تنسيق غير صالح للتشفير.';
$lang['Services.!error.value.empty'] = 'يجب ألا تكون قيمة حقل الخدمة فارغة.';
$lang['Services.!error.key.length'] = 'يجب ألا يتجاوز مفتاح حقل الخدمة 32 حرفاً.';
$lang['Services.!error.key.empty'] = 'يجب ألا يكون مفتاح حقل الخدمة فارغاً.';
$lang['Services.getActions.uncancel'] = 'إعادة التنشيط';
$lang['Services.!error.uncancel.unsupported'] = 'لا يمكن إلغاء هذه الخدمة، لأن الوحدة النمطية لا تدعمها.';

