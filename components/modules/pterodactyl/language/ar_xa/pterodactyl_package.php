<?php
/**
 * Pterodactyl Package
 *
 * @package blesta
 * @subpackage blesta.language.ar_xa
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PterodactylPackage.package_fields.tooltip.display'] = 'حدد للسماح للعملاء بتعديل هذه القيمة أثناء إضافة/تعديل الخدمة. اتركه غير محدد إذا كنت تخطط لاستخدام خيار قابل للتكوين لهذا الحقل.';
$lang['PterodactylPackage.package_fields.optional'] = '%1$s (اختياري)';
$lang['PterodactylPackage.package_fields.tooltip.backups'] = 'العدد الإجمالي للنسخ الاحتياطية المسموح به للمستخدم للخوادم التي تم إنشاؤها. اتركه فارغاً للسماح بعدد غير محدود.';
$lang['PterodactylPackage.package_fields.backups'] = 'حد النسخ الاحتياطي (اختياري)';
$lang['PterodactylPackage.package_fields.tooltip.allocations'] = 'إجمالي عدد التخصيصات المسموح للمستخدم بإنشائها للخوادم التي تم إنشاؤها. اتركه فارغاً للسماح بعدد غير محدود.';
$lang['PterodactylPackage.package_fields.allocations'] = 'حد التخصيص (اختياري)';
$lang['PterodactylPackage.package_fields.tooltip.databases'] = 'العدد الإجمالي لقواعد البيانات المسموح للمستخدم بإنشاء خوادمها. اتركه فارغاً للسماح بعدد غير محدود.';
$lang['PterodactylPackage.package_fields.databases'] = 'حد قاعدة البيانات (اختياري)';
$lang['PterodactylPackage.package_fields.tooltip.image'] = 'صورة Docker مخصصة لتعيينها إلى الخوادم التي تم إنشاؤها (على سبيل المثال quay.io/pterodactyl/core:java-glibc).';
$lang['PterodactylPackage.package_fields.image'] = 'الصورة (اختياري)';
$lang['PterodactylPackage.package_fields.tooltip.startup'] = 'أمر بدء تشغيل مخصص لتعيينه للخوادم التي تم إنشاؤها (على سبيل المثال java -Xms128M -Xmx 1024M -jar server.jar).';
$lang['PterodactylPackage.package_fields.startup'] = 'بدء التشغيل (اختياري)';
$lang['PterodactylPackage.package_fields.tooltip.io'] = 'رقم تعديل كتلة الإدخال والإخراج (10-1000).';
$lang['PterodactylPackage.package_fields.io'] = 'وزن كتلة الإدخال والإخراج';
$lang['PterodactylPackage.package_fields.tooltip.disk'] = 'مقدار مساحة القرص المراد تخصيصها للخوادم التي تم إنشاؤها.';
$lang['PterodactylPackage.package_fields.disk'] = 'مساحة القرص (ميغابايت)';
$lang['PterodactylPackage.package_fields.tooltip.cpu'] = 'مقدار وحدة المعالجة المركزية المراد تعيينها للخوادم التي تم إنشاؤها.';
$lang['PterodactylPackage.package_fields.cpu'] = 'حد وحدة المعالجة المركزية (%)';
$lang['PterodactylPackage.package_fields.tooltip.swap'] = 'مبلغ المبادلة لتعيينه للخوادم التي تم إنشاؤها.';
$lang['PterodactylPackage.package_fields.swap'] = 'المبادلة (MB)';
$lang['PterodactylPackage.package_fields.tooltip.memory'] = 'مقدار الذاكرة المراد تعيينها للخوادم التي تم إنشاؤها.';
$lang['PterodactylPackage.package_fields.memory'] = 'الذاكرة (ميغابايت)';
$lang['PterodactylPackage.package_fields.tooltip.pack_id'] = 'معرف الحزمة المراد تثبيت الخادم بها.';
$lang['PterodactylPackage.package_fields.pack_id'] = 'معرّف الحزمة (اختياري)';
$lang['PterodactylPackage.package_fields.tooltip.egg_id'] = 'معرف البيضة للخادم لاستخدامه.';
$lang['PterodactylPackage.package_fields.egg_id'] = 'هوية البيض';
$lang['PterodactylPackage.package_fields.tooltip.nest_id'] = 'العش للخادم لاستخدامه.';
$lang['PterodactylPackage.package_fields.nest_id'] = 'العش';
$lang['PterodactylPackage.package_fields.tooltip.port_range'] = 'نطاقات المنافذ مفصولة بفاصلة لتعيينها للخادم (مثال: 25565-25570،25580-25590).';
$lang['PterodactylPackage.package_fields.port_range'] = 'نطاق الميناء';
$lang['PterodactylPackage.package_fields.tooltip.dedicated_ip'] = 'تعيين عنوان IP مخصص للخوادم التي تم إنشاؤها.';
$lang['PterodactylPackage.package_fields.dedicated_ip'] = 'عنوان IP مخصص (اختياري)';
$lang['PterodactylPackage.package_fields.tooltip.location_id'] = 'موقع نشر الخوادم تلقائياً إلى.';
$lang['PterodactylPackage.package_fields.location_id'] = 'الموقع';
$lang['PterodactylPackage.!error.meta[backups].format'] = 'يجب أن يكون عدد النسخ الاحتياطية رقمياً.';
$lang['PterodactylPackage.!error.meta[allocations].format'] = 'يجب أن يكون عدد المخصصات رقمياً.';
$lang['PterodactylPackage.!error.meta[databases].format'] = 'يجب أن يكون عدد قواعد البيانات رقميًا.';
$lang['PterodactylPackage.!error.meta[image].length'] = 'يجب أن يكون مسار الصورة 255 حرفاً على الأكثر.';
$lang['PterodactylPackage.!error.meta[io].format'] = 'يجب أن يكون وزن الإدخال والإخراج رقميًا.';
$lang['PterodactylPackage.!error.meta[disk].format'] = 'يجب أن تكون مساحة القرص رقمية.';
$lang['PterodactylPackage.!error.meta[cpu].format'] = 'يجب أن تكون النسبة المئوية لوحدة المعالجة المركزية رقمية.';
$lang['PterodactylPackage.!error.meta[swap].format'] = 'يجب أن يكون مبلغ المبادلة رقمياً.';
$lang['PterodactylPackage.!error.meta[memory].format'] = 'يجب أن تكون كمية الذاكرة رقمية.';
$lang['PterodactylPackage.!error.meta[pack_id].format'] = 'يجب أن يكون معرّف الحزمة رقمياً.';
$lang['PterodactylPackage.!error.meta[egg_id].valid'] = 'لا تتطابق البيضة مع أي بيضة في الزاحف المجنح.';
$lang['PterodactylPackage.!error.meta[egg_id].format'] = 'يجب أن يكون معرّف البيضة رقمياً.';
$lang['PterodactylPackage.!error.meta[nest_id].valid'] = 'لا يتطابق العش مع أي عش في الزاحف المجنح.';
$lang['PterodactylPackage.!error.meta[nest_id].format'] = 'يجب أن يكون معرّف العش رقمياً.';
$lang['PterodactylPackage.!error.meta[port_range].format'] = 'يكون نطاق المنفذ في الغالب بالصيغة 25565-25570,25580-25590.';
$lang['PterodactylPackage.!error.meta[dedicated_ip].format'] = 'يجب ضبط ما إذا كان يجب استخدام عنوان IP مخصص على 1 أو 0.';
$lang['PterodactylPackage.!error.meta[location_id].valid'] = 'لا يتطابق معرّف الموقع مع أي معرّف موقع في الزاحف المجنح.';
$lang['PterodactylPackage.!error.meta[location_id].format'] = 'يجب أن يكون معرّف الموقع رقمياً.';

