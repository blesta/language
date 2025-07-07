<?php
/**
 * Invoices
 *
 * @package blesta
 * @subpackage blesta.language.ar_xa
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Invoices.!error.line_items.minimum_split'] = 'يجب أن تحتوي الفاتورة على سطرين على الأقل ليتم تقسيمها.';
$lang['Invoices.!error.line_items.empty_split'] = 'لم يتم تحديد أي خطوط فواتير للتقسيم.';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_date'] = '↳ الإضافة التناسبية %1$s %2$s x %3$s (%4$s - %5$s)';
$lang['Invoices.!error.lines[][tax].format'] = 'يجب أن تكون ضريبة البند "صواب" أو "خطأ';
$lang['Invoices.!error.lines[][amount].format'] = 'يجب أن تكون تكلفة الوحدة رقماً.';
$lang['Invoices.!error.lines[][qty].minimum'] = 'يرجى إدخال كمية 1 أو أكثر.';
$lang['Invoices.!error.lines[][qty].format'] = 'يجب أن تكون الكمية رقماً.';
$lang['Invoices.!error.lines[][description].empty'] = 'يرجى إدخال وصف البند.';
$lang['Invoices.!error.lines[][service_id].exists'] = 'معرف الخدمة غير صالح.';
$lang['Invoices.!error.lines[][id].exists'] = 'معرّف البند غير صالح.';
$lang['Invoices.!error.domain_renew.failed'] = 'يمكن تجديد النطاقات لمدة تصل إلى 10 سنوات فقط.';
$lang['Invoices.!error.invoice_id.draft'] = 'الفاتورة المعطاة ليست مسودة فاتورة، وبالتالي لا يمكن حذفها.';
$lang['Invoices.!error.date_last_renewed.format'] = 'يجب أن يكون تاريخ آخر تجديد متكرر للفاتورة المتكرر بتنسيق تاريخ صالح.';
$lang['Invoices.!error.date_renews.format'] = 'يجب أن يكون تاريخ تجديد الفاتورة المتكررة بتنسيق تاريخ صالح.';
$lang['Invoices.!error.duration.format'] = 'المدة غير صالحة.';
$lang['Invoices.!error.period.format'] = 'الفترة غير صالحة.';
$lang['Invoices.!error.term.bounds'] = 'يجب أن يكون الحد بين 1 و65535.';
$lang['Invoices.!error.term.format'] = 'يجب أن يكون المصطلح رقماً.';
$lang['Invoices.!error.delivery.exists'] = 'طريقة التسليم المعطاة غير موجودة.';
$lang['Invoices.!error.currency.length'] = 'يجب أن يكون طول رمز العملة 3 أحرف.';
$lang['Invoices.!error.status.format'] = 'حالة غير صالحة.';
$lang['Invoices.!error.autodebit.valid'] = 'يرجى تحديد ما إذا كنت تريد السماح بالخصم التلقائي لهذه الفاتورة أم لا.';
$lang['Invoices.!line_item.service_option_prorated_addition_qty'] = '↳ الإضافة التناسبية %1$s %2$s x %3$s';
$lang['Invoices.!error.date_autodebit.format'] = 'تاريخ الاستحقاق بتنسيق تاريخ غير صالح.';
$lang['Invoices.!error.date_closed.format'] = 'تاريخ الإغلاق بتنسيق تاريخ غير صالح.';
$lang['Invoices.!error.date_due.after_billed'] = 'يجب أن يكون تاريخ الاستحقاق في تاريخ إصدار الفاتورة أو بعده.';
$lang['Invoices.!error.date_due.format'] = 'تاريخ الاستحقاق بتنسيق تاريخ غير صالح.';
$lang['Invoices.!error.date_billed.format'] = 'تاريخ الفاتورة بتنسيق تاريخ غير صالح.';
$lang['Invoices.!error.client_id.exists'] = 'معرف العميل غير صالح.';
$lang['Invoices.!error.id.amount_applied'] = 'قد لا يتم تحديث بنود الفاتورة والعملة والحالة لأنه قد تم تطبيق مبلغ بالفعل على هذه الفاتورة.';
$lang['Invoices.!error.id_value.valid'] = 'تعذر تحديد قيمة معرف الفاتورة.';
$lang['Invoices.!error.id_format.length'] = 'لا يجوز أن يتجاوز تنسيق المعرف للفواتير 64 حرفاً.';
$lang['Invoices.!error.id_format.empty'] = 'لم يتم تعيين تنسيق معرف للفواتير.';
$lang['Invoices.!error.invoice_add.failed'] = 'تعذر إنشاء هذه الفاتورة. يرجى المحاولة مرة أخرى.';
$lang['Invoices.!error.delivery.length'] = 'لا يجوز أن يتجاوز طول طريقة تسليم الفاتورة 32 حرفاً.';
$lang['Invoices.!error.delivery.empty'] = 'يُرجى إدخال طريقة تسليم الفاتورة.';
$lang['Invoices.!error.method.exists'] = 'يجب تعيين طريقة تسليم واحدة على الأقل.';
$lang['Invoices.!error.invoice_recur_id.exists'] = 'معرف الفاتورة المتكررة غير صالح.';
$lang['Invoices.!error.invoice_id.exists'] = 'معرّف الفاتورة غير صالح.';
$lang['Invoices.cache_methods.json_pdf'] = 'JSON + PDF';
$lang['Invoices.cache_methods.json'] = 'JSON';
$lang['Invoices.cache_methods.none'] = 'لا يوجد';
$lang['Invoices.types.proforma'] = 'شكل مبدئي';
$lang['Invoices.types.standard'] = 'قياسي';
$lang['Invoices.status.void'] = 'باطل';
$lang['Invoices.status.draft'] = 'المسودة';
$lang['Invoices.status.proforma'] = 'شكل مبدئي';
$lang['Invoices.status.active'] = 'نشط';
$lang['Invoices.!line_item.recurring_renew_description'] = '%1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.coupon_line_item_description_percent'] = 'الكوبون %1$s - %2$s% %';
$lang['Invoices.!line_item.coupon_line_item_description_amount'] = 'الكوبون %1$s';
$lang['Invoices.!line_item.prorated_credit'] = 'الرصيد التناسبي';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_onetime'] = '↳ الإضافة التناسبية %1$s %2$s x %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_onetime'] = '↳ الإضافة التناسبية لـ %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_date'] = '↳ الإضافة التناسبية %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_text'] = '↳ الإضافة التناسبية لـ %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_onetime'] = '↳ الإضافة التناسبية %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_addition_date'] = '↳ الإضافة التناسبية %1$s %2$s (%3$s - %4$s)';
$lang['Invoices.!line_item.service_option_prorated_addition'] = '↳ الإضافة التناسبية %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_onetime'] = '↳ الترقية التناسبية %1$s من %2$sx %3$s إلى %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_date'] = '↳ الترقية التناسبية لـ %1$s من %2$sx %3$s إلى %4$sx %5$s (%6$s - %7$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty'] = '↳ الترقية التناسبية %1$s من %2$sx %3$s إلى %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_onetime'] = '↳ الترقية التناسبية ل %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_date'] = '↳ الترقية التناسبية %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text'] = '↳ الترقية التناسبية ل %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_onetime'] = '↳ الترقية التناسبية %1$s من %2$s إلى %3$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_date'] = '↳ الترقية التناسبية %1$s من %2$s إلى %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade'] = '↳ الترقية التناسبية %1$s من %2$s إلى %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description_onetime'] = 'الترقية التناسبية من %1$s إلى %2$s - - %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description'] = 'الترقية التناسبية من %1$s إلى %2$s - - %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_setup_fee_description'] = '↳ %1$s - %2$s رسوم الإعداد ';
$lang['Invoices.!line_item.service_option_renew_description'] = '↳ %1$s - %2$s';
$lang['Invoices.!line_item.service_setup_fee_description'] = '%1$s - %2$s رسوم الإعداد ';
$lang['Invoices.!line_item.service_cancel_fee_description'] = '%1$s - %2$s رسوم الإلغاء ';
$lang['Invoices.!line_item.service_renew_description'] = '%5$s%1$s - ( - ) %2$s%3$s %4$s';
$lang['Invoices.!note_private.line_item'] = '- %1$s @ %2$s: %3$s';
$lang['Invoices.!note_private.removed_lines'] = 'البنود التي تمت إزالتها:';
$lang['Invoices.!note_private.service_cancel_date'] = 'تم إلغاء الخدمة رقم%1$s %2$s .';
$lang['Invoices.getDeliveryMethods.postalmethods'] = 'الأساليب البريدية';
$lang['Invoices.getDeliveryMethods.interfax'] = 'إنترفاكس';
$lang['Invoices.getDeliveryMethods.paper'] = 'الورق';
$lang['Invoices.getDeliveryMethods.email'] = 'البريد الإلكتروني';
$lang['Invoices.getPricingPeriods.year'] = 'السنة';
$lang['Invoices.getPricingPeriods.month'] = 'الشهر';
$lang['Invoices.getPricingPeriods.week'] = 'الأسبوع';
$lang['Invoices.getPricingPeriods.day'] = 'اليوم';
$lang['Invoices.!line_item.parent_description'] = 'خدمة الطفل %1$s - %2$s:';
$lang['Invoices.!error.invoice_ids.count'] = 'يجب تحديد فاتورتين على الأقل.';
$lang['Invoices.!error.invoice_ids.currency'] = 'يجب أن تكون جميع الفواتير بنفس العملة.';
$lang['Invoices.!error.invoice_ids.status'] = 'يجب أن تكون جميع الفواتير مفتوحة وبدون أي معاملات.';
$lang['Invoices.!error.invoice_ids.client'] = 'يجب أن تنتمي جميع الفواتير إلى نفس العميل.';
$lang['Invoices.!error.invoice_id.status'] = 'يجب أن تكون فاتورة الوجهة مفتوحة وبدون أي معاملات.';
$lang['Invoices.!error.invoice_id.unique'] = 'لا يمكن أن تكون الفاتورة الوجهة جزءاً من الفواتير المراد دمجها.';
$lang['Invoices.!error.service.renew_onetime'] = 'لا يمكن تجديد الخدمات لمرة واحدة.';

