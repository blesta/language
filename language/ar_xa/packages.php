<?php
/**
 * Packages
 *
 * @package blesta
 * @subpackage blesta.language.ar_xa
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Packages.!error.manual_activation.valid'] = 'يجب أن يكون التفعيل اليدوي إما 1 أو 0.';
$lang['Packages.getStatusTypes.restricted'] = 'مقيّد';
$lang['Packages.getStatusTypes.inactive'] = 'غير نشط';
$lang['Packages.getStatusTypes.active'] = 'نشط';
$lang['Packages.getPricingPeriods.onetime_plural'] = 'مرة واحدة';
$lang['Packages.getPricingPeriods.year_plural'] = 'السنوات';
$lang['Packages.getPricingPeriods.month_plural'] = 'الشهور';
$lang['Packages.getPricingPeriods.week_plural'] = 'أسابيع';
$lang['Packages.getPricingPeriods.day_plural'] = 'الأيام';
$lang['Packages.getPricingPeriods.onetime'] = 'مرة واحدة';
$lang['Packages.getPricingPeriods.year'] = 'السنة';
$lang['Packages.getPricingPeriods.month'] = 'الشهر';
$lang['Packages.getPricingPeriods.week'] = 'الأسبوع';
$lang['Packages.getPricingPeriods.day'] = 'اليوم';
$lang['Packages.!error.groups[].valid'] = 'مجموعة الحزمة المحددة لا تنتمي إلى الشركة المعطاة.';
$lang['Packages.!error.groups[].exists'] = 'معرف مجموعة الحزمة غير صالح.';
$lang['Packages.!error.pricing[][id].deletable'] = 'لا يمكن حذف المصطلح لأنه يستخدم من قبل خدمة واحدة أو أكثر.';
$lang['Packages.!error.pricing[][id].format'] = 'معرف تسعير الحزمة غير صالح.';
$lang['Packages.!error.pricing[][currency].in_use'] = 'لا يمكن تحديث العملة في تسعير قيد الاستخدام.';
$lang['Packages.!error.pricing[][currency].format'] = 'يجب أن يكون رمز العملة 3 أحرف.';
$lang['Packages.!error.pricing[][cancel_fee].format'] = 'يجب أن تكون رسوم الإلغاء رقماً.';
$lang['Packages.!error.pricing[][setup_fee].format'] = 'يجب أن تكون رسوم الإعداد رقماً.';
$lang['Packages.!error.pricing[][price_transfer].format'] = 'يجب أن يكون سعر التحويل رقماً.';
$lang['Packages.!error.pricing[][price_renews].valid'] = 'لا يمكن تحديد سعر التجديد لفترة زمنية واحدة.';
$lang['Packages.!error.pricing[][price_renews].format'] = 'يجب أن يكون سعر التجديد رقماً.';
$lang['Packages.!error.pricing[][price].format'] = 'يجب أن يكون السعر رقماً.';
$lang['Packages.!error.pricing[][period].in_use'] = 'لا يمكن تحديث الفترة في التسعير قيد الاستخدام.';
$lang['Packages.!error.pricing[][period].format'] = 'نوع الفترة غير صالح.';
$lang['Packages.!error.pricing[][term].in_use'] = 'لا يمكن تحديث المصطلح في التسعير قيد الاستخدام.';
$lang['Packages.!error.pricing[][term].valid'] = 'يجب أن يكون الحد أكبر من 0.';
$lang['Packages.!error.pricing[][term].length'] = 'لا يجوز أن يتجاوز طول المصطلح 5 أحرف.';
$lang['Packages.!error.pricing[][term].format'] = 'يجب أن يكون المصطلح رقماً.';
$lang['Packages.!error.email_content.parse'] = 'خطأ في تحليل القالب: %1$s';
$lang['Packages.!error.email_content[][lang].length'] = 'لا يجوز أن يتجاوز طول اللغة 5 أحرف.';
$lang['Packages.!error.email_content[][lang].empty'] = 'الرجاء إدخال لغة.';
$lang['Packages.!error.prorata_cutoff.format'] = 'يجب أن يكون يوم القطع التناسبي بين 1 و28.';
$lang['Packages.!error.prorata_day.format'] = 'يجب أن يكون اليوم التناسبي بين 1 و28.';
$lang['Packages.!error.hidden.format'] = 'يجب تعيين ما إذا كان يجب إخفاء هذه المجموعة في الواجهة إلى 1 أو 0.';
$lang['Packages.!error.status.format'] = 'حالة غير صالحة.';
$lang['Packages.!error.upgrades_use_renewal.valid'] = 'يجب أن تكون أسعار تجديد الاستخدام للترقيات إما 1 أو 0.';
$lang['Packages.!error.override_price.valid'] = 'تعيين تسعير الحزمة حيث يجب أن يكون سعر التجاوز إما 1 أو 0.';
$lang['Packages.!error.single_term.valid'] = 'يجب أن يكون الحد الواحد إما 1 أو 0.';
$lang['Packages.!error.taxable.length'] = 'لا يجوز أن يتجاوز الطول الخاضع للضريبة حرفاً واحداً.';
$lang['Packages.!error.taxable.format'] = 'يجب أن يكون الخاضع للضريبة رقماً.';
$lang['Packages.!error.module_group_client.valid'] = 'يجب أن يكون السماح للعميل بتحديد المجموعة إما 1 أو 0.';
$lang['Packages.!error.module_group.format'] = 'مجموعة الوحدة النمطية المعطاة غير صالحة.';
$lang['Packages.!error.module_row.format'] = 'تم إعطاء صف وحدة نمطية غير صالحة.';
$lang['Packages.!error.plugins[].valid'] = 'تم تقديم مكون إضافي غير صالح.';
$lang['Packages.!error.option_groups[].valid'] = 'تم إعطاء مجموعة خيارات الحزمة القابلة للتكوين غير صالحة.';
$lang['Packages.!error.client_qty.format'] = 'يجب أن يكون حد العميل رقماً.';
$lang['Packages.!error.qty.format'] = 'يجب أن تكون الكمية عدداً.';
$lang['Packages.!error.descriptions.empty_lang'] = 'يرجى تحديد رمز لغة الحزمة لكل وصف.';
$lang['Packages.!error.descriptions.format'] = 'أوصاف الحزمة بتنسيق غير صالح.';
$lang['Packages.!error.names.empty_lang'] = 'يرجى تحديد رمز لغة الحزمة لكل اسم.';
$lang['Packages.!error.names.empty_name'] = 'يُرجى تحديد اسم الحزمة لكل لغة.';
$lang['Packages.!error.names.format'] = 'أسماء الحزم بتنسيق غير صالح.';
$lang['Packages.!error.module_id.changed'] = 'لا يمكن تغيير الوحدة النمطية لأن هناك خدمة واحدة أو أكثر تستخدم هذه الحزمة بالفعل.';
$lang['Packages.!error.module_id.exists'] = 'تم إعطاء وحدة نمطية غير صالحة.';
$lang['Packages.!error.package_id.has_children'] = 'تعذر حذف الحزمة بسبب وجود خدمة بها خدمات فرعية.';
$lang['Packages.!error.package_id.exists'] = 'تعذر حذف الحزمة بسبب وجود خدمة تستخدمها حالياً.';
$lang['Packages.!error.company_id.exists'] = 'تم تقديم شركة غير صالحة.';

