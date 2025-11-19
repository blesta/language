<?php
/**
 * Cron
 *
 * @package blesta
 * @subpackage blesta.language.ar_xa
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Cron.autodebitinvoices.completed'] = 'اكتملت مهمة فواتير الخصم التلقائي.';
$lang['Cron.addpaidpendingservices.service_success'] = 'الخدمة المعلقة #%1$s من العميل رقم%2$s نشطة الآن.';
$lang['Cron.addpaidpendingservices.service_error'] = 'تعذر تنشيط الخدمة المعلقة رقم%1$s من العميل رقم%2$s.';
$lang['Cron.addpaidpendingservices.completed'] = 'اكتملت مهمة الخدمات المعلقة المدفوعة الأجر.';
$lang['Cron.addpaidpendingservices.attempt'] = 'محاولة توفير خدمات معلقة مدفوعة الأجر.';
$lang['Cron.cancelscheduledservices.cancel_success'] = 'تم إلغاء الخدمة رقم%1$s من العميل #%2$s من العميل رقم .';
$lang['Cron.cancelscheduledservices.cancel_error'] = 'تعذّر إلغاء الخدمة رقم%1$s من العميل رقم%2$s.';
$lang['Cron.cancelscheduledservices.completed'] = 'اكتملت مهمة إلغاء الخدمات المجدولة.';
$lang['Cron.cancelscheduledservices.attempt'] = 'محاولة إلغاء الخدمات المجدولة.';
$lang['Cron.unsuspendservices.unsuspend_success'] = 'تم إلغاء تعليق الخدمة رقم%1$s من العميل %2$s.';
$lang['Cron.unsuspendservices.unsuspend_error'] = 'تعذّر إلغاء تعليق الخدمة #%1$s من العميل %2$s.';
$lang['Cron.unsuspendservices.completed'] = 'اكتملت مهمة إلغاء تعليق الخدمات.';
$lang['Cron.unsuspendservices.attempt'] = 'محاولة إلغاء تعليق الخدمات المعلقة المدفوعة المدفوعة.';
$lang['Cron.suspendservices.suspend_success'] = 'تم تعليق الخدمة #%1$s من العميل %2$s العميل .';
$lang['Cron.suspendservices.suspend_error'] = 'تعذّر تعليق الخدمة #%1$s من العميل %2$s.';
$lang['Cron.suspendservices.suspension_reason'] = 'عدم السداد';
$lang['Cron.suspendservices.completed'] = 'اكتملت مهمة تعليق الخدمات.';
$lang['Cron.suspendservices.attempt'] = 'محاولة تعليق الخدمات التي فات موعد استحقاقها.';
$lang['Cron.cardexpirationreminders.success'] = 'تم تسليم تذكير انتهاء الصلاحية بنجاح لجهة الاتصال %1$s %2$s من العميل رقم%3$s.';
$lang['Cron.cardexpirationreminders.failed'] = 'تعذر إرسال تذكير انتهاء الصلاحية لجهة الاتصال %1$s %2$s من العميل رقم%3$s.';
$lang['Cron.cardexpirationreminders.completed'] = 'اكتملت مهمة التذكير بانتهاء صلاحية البطاقة.';
$lang['Cron.cardexpirationreminders.attempt'] = 'محاولة إرسال تذكيرات بانتهاء صلاحية البطاقة.';
$lang['Cron.autodebitinvoices.charge_success'] = 'تمت معالجة الدفع بنجاح.';
$lang['Cron.autodebitinvoices.charge_failed'] = 'غير قادر على معالجة عملية الدفع.';
$lang['Cron.autodebitinvoices.charge_attempt'] = 'محاولة الخصم التلقائي من العميل رقم%1$s لجميع الفواتير المفتوحة بمبلغ %2$s.';
$lang['Cron.autodebitinvoices.attempt'] = 'محاولة الخصم التلقائي للفواتير المفتوحة.';
$lang['Cron.applycredits.apply_none'] = 'لا توجد فواتير يمكن تطبيق الاعتمادات عليها.';
$lang['Cron.applycredits.apply_success'] = 'تم بنجاح تطبيق الاعتمادات المعلقة من المعاملة %1$s للعميل رقم%2$s على الفاتورة رقم%3$s بمبلغ %4$s.';
$lang['Cron.applycredits.apply_failed'] = 'يتعذر تطبيق الاعتمادات المعلقة للعميل رقم%1$s.';
$lang['Cron.applycredits.completed'] = 'اكتملت مهمة تطبيق الاعتمادات.';
$lang['Cron.applycredits.attempt'] = 'محاولة تطبيق الاعتمادات على الفواتير المفتوحة.';
$lang['Cron.index.completed_all_system'] = 'تم الانتهاء من جميع مهام النظام.';
$lang['Cron.index.attempt_all_system'] = 'محاولة تشغيل جميع مهام النظام.';
$lang['Cron.index.completed_all'] = 'تم الانتهاء من جميع المهام.';
$lang['Cron.index.attempt_all'] = 'محاولة تشغيل جميع المهام الخاصة بـ %1$s.';
$lang['Cron.!error.task_execution.failed'] = 'خطأ: %1$s %2$s';
$lang['Cron.!error.cron.failed'] = 'فشل Cron في التسجيل.';
$lang['Cron.!error.task_filter.exclude_not_array'] = 'يجب أن يكون عامل تصفية المهام "استبعاد" مصفوفة.';
$lang['Cron.!error.task_filter.include_not_array'] = 'يجب أن يكون عامل تصفية المهام "تضمين" مصفوفة.';
$lang['Cron.!error.task_filter.both_include_exclude'] = 'لا يمكن أن يحتوي عامل تصفية المهام على مفتاحي "تضمين" و"استبعاد".';
$lang['Cron.!error.task_filter.invalid_format'] = 'يجب أن يكون عامل تصفية المهام كائن JSON.';
$lang['Cron.!error.task_filter.invalid_json'] = 'JSON غير صالح في معلمة تصفية المهام: %1$s';

