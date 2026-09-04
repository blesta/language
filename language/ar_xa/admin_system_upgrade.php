<?php
/**
 * Admin System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.ar_xa
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemUpgrade.index.backup_col_date'] = 'التاريخ';
$lang['AdminSystemUpgrade.index.backup_col_file'] = 'ملف';
$lang['AdminSystemUpgrade.index.backup_col_size'] = 'الحجم';
$lang['AdminSystemUpgrade.index.backup_col_type'] = 'النوع';
$lang['AdminSystemUpgrade.index.backup_database'] = 'قاعدة البيانات';
$lang['AdminSystemUpgrade.index.backup_files'] = 'الملفات';
$lang['AdminSystemUpgrade.index.boxtitle_upgrade'] = 'خيارات الترقية';
$lang['AdminSystemUpgrade.index.btn_check'] = 'التحقق من وجود تحديثات';
$lang['AdminSystemUpgrade.index.btn_clear_lock'] = 'قفل واضح';
$lang['AdminSystemUpgrade.index.btn_copy_command'] = 'نسخ';
$lang['AdminSystemUpgrade.index.btn_dashboard'] = 'العودة إلى لوحة التحكم';
$lang['AdminSystemUpgrade.index.btn_delete'] = 'حذف';
$lang['AdminSystemUpgrade.index.btn_download'] = 'تنزيل';
$lang['AdminSystemUpgrade.index.btn_retry'] = 'إعادة المحاولة';
$lang['AdminSystemUpgrade.index.btn_upgrade'] = 'الترقية الآن';
$lang['AdminSystemUpgrade.index.changelog_link'] = 'عرض سجل التغييرات';
$lang['AdminSystemUpgrade.index.clean_stale_files'] = 'إزالة الملفات الأساسية القديمة بعد الترقية';
$lang['AdminSystemUpgrade.index.clean_stale_files_note'] = 'حذف الملفات الموجودة في الدلائل الأساسية غير الموجودة في بيان الإصدار الجديد. اتركه غير محدد إلا إذا كنت متأكداً من عدم وجود ملفات مخصصة في الدلائل الأساسية.';
$lang['AdminSystemUpgrade.index.command_copied'] = 'تم النسخ';
$lang['AdminSystemUpgrade.index.confirm_delete_backup'] = 'هل أنت متأكد من رغبتك في حذف هذه النسخة الاحتياطية؟ لا يمكن التراجع عن ذلك.';
$lang['AdminSystemUpgrade.index.current_version'] = 'أنت تقوم بتشغيل Blesta %1$s';
$lang['AdminSystemUpgrade.index.environment_badge_fail'] = '%1$d فشل';
$lang['AdminSystemUpgrade.index.environment_badge_warn'] = '%1$d تحذير';
$lang['AdminSystemUpgrade.index.environment_fail'] = 'فشلت بعض عمليات التحقق. يرجى حل المشكلات أدناه قبل الترقية.';
$lang['AdminSystemUpgrade.index.environment_pass'] = 'تم اجتياز جميع الفحوصات. نظامك جاهز للترقية الذاتية.';
$lang['AdminSystemUpgrade.index.failure_backup_label'] = 'النسخ الاحتياطية المتوفرة:';
$lang['AdminSystemUpgrade.index.failure_db_version_after'] = 'الحالي: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_before'] = 'قبل الترقية: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_expected'] = 'متوقع بعد الترقية: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_label'] = 'إصدار قاعدة البيانات:';
$lang['AdminSystemUpgrade.index.failure_db_version_mismatch'] = 'لم يتقدم إصدار قاعدة البيانات إلى القيمة المتوقعة. ربما توقفت الترقية في جزء من الإصدار، تاركةً بعض تغييرات المخطط مطبقة.';
$lang['AdminSystemUpgrade.index.failure_explanation'] = 'لم تكتمل الترقية بنجاح. قد يكون نظامك في حالة غير متناسقة وقد تكون بعض التغييرات في قاعدة البيانات من الإصدار الفاشل مطبقة بالفعل. من المحتمل أن تفشل إعادة تشغيل الترقية بشكل مختلف. يوصى بالاستعادة من النسخة الاحتياطية لقاعدة البيانات قبل إعادة المحاولة. تم أخذ النسخ الاحتياطية قبل بدء الترقية وهي مدرجة أدناه. للاستعادة، إما أن تستعيد هذه النسخ الاحتياطية يدويًا أو افتح تذكرة دعم للحصول على المساعدة.';
$lang['AdminSystemUpgrade.index.failure_heading'] = 'ما العمل بعد ذلك';
$lang['AdminSystemUpgrade.index.field_upgradesubmit'] = 'تحديث الإعدادات';
$lang['AdminSystemUpgrade.index.heading_available'] = 'التحديثات المتاحة';
$lang['AdminSystemUpgrade.index.heading_backups'] = 'ترقية النسخ الاحتياطية';
$lang['AdminSystemUpgrade.index.heading_current'] = 'الإصدار الحالي';
$lang['AdminSystemUpgrade.index.heading_environment'] = 'حالة البيئة';
$lang['AdminSystemUpgrade.index.heading_progress'] = 'التقدم المحرز في الترقية';
$lang['AdminSystemUpgrade.index.heading_recovery'] = 'تعليمات الاسترداد';
$lang['AdminSystemUpgrade.index.last_checked'] = 'تم التحقق من آخر مرة %1$s';
$lang['AdminSystemUpgrade.index.launch_failed_instruction'] = 'قم بتشغيل الأمر التالي عبر SSH (بصفتك المستخدم الذي يمتلك تثبيت Blesta) لإكمال الترقية. اترك هذه الصفحة مفتوحة - سيستمر التحديث هنا أثناء تشغيل الأمر.';
$lang['AdminSystemUpgrade.index.launch_failed_title'] = 'لم تبدأ ترقية الخلفية';
$lang['AdminSystemUpgrade.index.lock_active'] = 'تجري حاليًا عملية الترقية التي بدأت في %1$s.';
$lang['AdminSystemUpgrade.index.lock_stale'] = 'يبدو أن عملية ترقية سابقة توقفت بشكل غير متوقع.';
$lang['AdminSystemUpgrade.index.never_checked'] = 'لم يتم التحقق';
$lang['AdminSystemUpgrade.index.no_backups'] = 'لم يتم العثور على نسخ احتياطية للترقية.';
$lang['AdminSystemUpgrade.index.no_results'] = 'خيارات الترقية غير متوفرة في الوقت الحالي.';
$lang['AdminSystemUpgrade.index.no_support'] = 'اشتراكك في الدعم والتحديثات غير نشط. تتوفر تحديثات التصحيح فقط.';
$lang['AdminSystemUpgrade.index.page_title'] = 'الإعدادات &gt; النظام &gt; خيارات الترقية';
$lang['AdminSystemUpgrade.index.recovery_db_path'] = 'النسخ الاحتياطي لقاعدة البيانات: %1$s';
$lang['AdminSystemUpgrade.index.recovery_files_path'] = 'النسخ الاحتياطي للملفات: %1$s';
$lang['AdminSystemUpgrade.index.recovery_instructions'] = 'للاستعادة من النسخة الاحتياطية، قم بتشغيل الأوامر التالية على الخادم الخاص بك:';
$lang['AdminSystemUpgrade.index.release_date'] = 'تم الإصدار: %1$s';
$lang['AdminSystemUpgrade.index.requires_support'] = 'يتطلب اشتراك نشط في الدعم والتحديثات.';
$lang['AdminSystemUpgrade.index.select_version'] = 'حدد إصداراً للترقية إليه:';
$lang['AdminSystemUpgrade.index.skip_integrity_check'] = 'تخطي التحقق من سلامة الملف';
$lang['AdminSystemUpgrade.index.step_backup_db'] = 'النسخ الاحتياطي لقاعدة البيانات';
$lang['AdminSystemUpgrade.index.step_backup_files'] = 'النسخ الاحتياطي للملفات';
$lang['AdminSystemUpgrade.index.step_download'] = 'تنزيل الإصدار';
$lang['AdminSystemUpgrade.index.step_extract'] = 'استخراج الملفات';
$lang['AdminSystemUpgrade.index.step_finalize'] = 'وضع اللمسات الأخيرة';
$lang['AdminSystemUpgrade.index.step_maintenance'] = 'تمكين وضع الصيانة';
$lang['AdminSystemUpgrade.index.step_migrate'] = 'تشغيل عمليات ترحيل قاعدة البيانات';
$lang['AdminSystemUpgrade.index.step_preflight'] = 'فحوصات ما قبل الطيران';
$lang['AdminSystemUpgrade.index.step_replace'] = 'استبدال الملفات';
$lang['AdminSystemUpgrade.index.step_verify'] = 'التحقق من السلامة';
$lang['AdminSystemUpgrade.index.up_to_date'] = 'التثبيت الخاص بك محدث.';
$lang['AdminSystemUpgrade.index.upgrade_complete'] = 'اكتملت الترقية بنجاح!';
$lang['AdminSystemUpgrade.index.upgrade_failed'] = 'فشلت الترقية.';
$lang['AdminSystemUpgrade.index.upgrade_latest'] = 'ترقية كاملة: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.upgrade_patch'] = 'تحديث التصحيح: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.upgrade_warning'] = 'سيؤدي هذا إلى تمكين وضع الصيانة، وإنشاء نسخ احتياطية، وتنزيل الإصدار الجديد وتثبيته، وتشغيل عمليات ترحيل قاعدة البيانات. لا يمكن مقاطعة هذه العملية بمجرد بدئها.';
$lang['AdminSystemUpgrade.upgrade.btn_abort'] = 'إلغاء';
$lang['AdminSystemUpgrade.upgrade.btn_continue'] = 'المتابعة مع الترقية';
$lang['AdminSystemUpgrade.upgrade.label_missing'] = 'الملفات المفقودة';
$lang['AdminSystemUpgrade.upgrade.label_modified'] = 'الملفات المعدلة';
$lang['AdminSystemUpgrade.upgrade.modified_files'] = '%1$s تم تعديل الملف (الملفات) الأساسية من الإصدار الأصلي. ستتم الكتابة فوق هذه التغييرات أثناء الترقية. هل تريد المتابعة؟';
$lang['AdminSystemUpgrade.upgrade.modified_files_title'] = 'الملفات الأساسية المعدلة';
$lang['AdminSystemUpgrade.upgrade.no_checksums'] = 'لا يتضمن بيان الملف الخاص بالتثبيت الحالي مجملاً اختبارياً. سيتم تخطي التحقق من سلامة الملف. هل تريد متابعة الترقية؟';
$lang['AdminSystemUpgrade.upgrade.no_manifest'] = 'لم يتم العثور على بيان ملف للتثبيت الحالي. سيتم تخطي التحقق من سلامة الملف. هل تريد متابعة الترقية؟';
$lang['AdminSystemUpgrade.upgrade.started'] = 'بدأت عملية الترقية. يمكنك إغلاق هذه الصفحة - ستستمر الترقية في الخلفية. ارجع إلى هذه الصفحة للتحقق من التقدم المحرز.';

