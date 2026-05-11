<?php
/**
 * System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.ar_xa
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SystemUpgrade.environment.os_pass'] = 'نظام التشغيل: تم اكتشاف نظام التشغيل: لينكس';
$lang['SystemUpgrade.environment.os_fail'] = 'الترقية الذاتية مدعومة فقط في بيئات Linux.';
$lang['SystemUpgrade.environment.exec_pass'] = 'الوصول إلى قذيفة: تتوفر الدالة exec().';
$lang['SystemUpgrade.environment.exec_fail'] = 'الوصول إلى قذيفة: الدالة exec() معطلة أو غير متوفرة.';
$lang['SystemUpgrade.environment.unzip_pass'] = 'استخراج الأرشيف: أمر unzip متاح.';
$lang['SystemUpgrade.environment.unzip_fail'] = 'استخراج الأرشيف: أمر unzip غير متوفر. الرجاء تثبيت unzip.';
$lang['SystemUpgrade.environment.mysqldump_pass'] = 'النسخ الاحتياطي لقاعدة البيانات: أمر mysqldump متاح.';
$lang['SystemUpgrade.environment.mysqldump_fail'] = 'النسخ الاحتياطي لقاعدة البيانات: أمر mysqldump غير متوفر. يرجى تثبيت أدوات mysql-client.';
$lang['SystemUpgrade.environment.tar_pass'] = 'النسخ الاحتياطي للملفات: يتوفر أمر tar.';
$lang['SystemUpgrade.environment.tar_fail'] = 'النسخ الاحتياطي للملفات: أمر tar غير متوفر. الرجاء تثبيت tar.';
$lang['SystemUpgrade.environment.rsync_pass'] = 'مزامنة الملفات: يتوفر أمر rsync.';
$lang['SystemUpgrade.environment.rsync_fail'] = 'مزامنة الملفات: أمر rsync غير متوفر. يرجى تثبيت rsync.';
$lang['SystemUpgrade.environment.setsid_pass'] = 'انفصال العملية: الأمر setid متوفر.';
$lang['SystemUpgrade.environment.setsid_warn'] = 'انفصال العملية: الأمر setid غير متوفر. قد تتطلب الترقية أمرًا يدويًا عبر SSH لإكمال الترقية في بيئات الاستضافة المسجونة.';
$lang['SystemUpgrade.environment.writable_pass'] = 'نظام الملفات: دليل التثبيت قابل للكتابة.';
$lang['SystemUpgrade.environment.writable_fail'] = 'نظام الملفات: دليل التثبيت غير قابل للكتابة بواسطة خادم الويب.';
$lang['SystemUpgrade.environment.ownership_pass'] = 'ملكية الملف: جميع الدلائل الرئيسية مملوكة لمستخدم خادم الويب.';
$lang['SystemUpgrade.environment.ownership_fail'] = 'ملكية الملف: %1$s دلائل المفاتيح غير مملوكة لمستخدم خادم الويب.';
$lang['SystemUpgrade.environment.disk_pass'] = 'مساحة القرص: %1$s متوفرة ';
$lang['SystemUpgrade.environment.disk_warn'] = 'مساحة القرص: %1$s متوفرة فقط، وتقدر الحاجة إلى %2$s.';
$lang['SystemUpgrade.environment.config_pass'] = 'التكوين: blesta.php قابل للكتابة.';
$lang['SystemUpgrade.environment.config_fail'] = 'التكوين: blesta.php غير قابل للكتابة.';
$lang['SystemUpgrade.maintenance_reason'] = 'تتم حالياً ترقية النظام. يرجى التحقق مرة أخرى قريباً.';
$lang['SystemUpgrade.!error.upgrade_locked'] = 'الترقية جارية بالفعل (بدأها الموظفون المعرف %1$s على %2$s).';
$lang['SystemUpgrade.!error.lock_stale'] = 'يبدو أن عملية ترقية سابقة توقفت بشكل غير متوقع. يمكنك مسح القفل للمحاولة مرة أخرى.';
$lang['SystemUpgrade.!error.backup_db_failed'] = 'فشل النسخ الاحتياطي لقاعدة البيانات. لا يمكن متابعة الترقية بدون نسخة احتياطية موثوقة.';
$lang['SystemUpgrade.!error.backup_files_failed'] = 'فشل النسخ الاحتياطي للملفات. لا يمكن متابعة الترقية بدون نسخة احتياطية موثوقة.';
$lang['SystemUpgrade.!error.download_failed'] = 'فشل تنزيل ملف الإصدار.';
$lang['SystemUpgrade.!error.hash_mismatch'] = 'فشل التحقق من سلامة الملف الذي تم تنزيله. قد يكون الملف تالفاً.';
$lang['SystemUpgrade.!error.signature_missing'] = 'لا يتضمن الإصدار توقيعاً مشفراً. لا يمكن التحقق من الأصالة.';
$lang['SystemUpgrade.!error.signature_invalid'] = 'فشل التحقق من توقيع الإصدار. ربما تم التلاعب بالملف.';
$lang['SystemUpgrade.!error.extraction_failed'] = 'فشل استخراج أرشيف الإصدار.';
$lang['SystemUpgrade.!error.upgrader_failed'] = 'فشل إعداد أو تشغيل عملية الترقية.';
$lang['SystemUpgrade.!error.launch_not_detected'] = 'لم تبدأ عملية الترقية في الخلفية. يمكن أن يحدث هذا في بيئات الاستضافة المسجونة (CloudLinux/CageFS، وبعض تكوينات PHP-FPM) حيث لا يُسمح لخادم الويب بفصل العمليات الفرعية التي تعمل لفترة طويلة. يمكن إكمال الترقية عن طريق تشغيل الأمر أدناه عبر SSH.';
$lang['SystemUpgrade.!error.upgrader_crashed'] = 'يبدو أن عملية الترقية قد توقفت بشكل غير متوقع. تحقق من مسارات النسخ الاحتياطي أدناه للاسترداد.';
$lang['SystemUpgrade.!error.license_invalid'] = 'يجب أن يكون اشتراكك في الدعم والتحديثات نشطاً من أجل ترقيات الإصدار الرئيسي أو الثانوي.';
$lang['SystemUpgrade.!error.php_version'] = 'يتطلب الإصدار الهدف PHP %1$s أو أحدث. أنت تقوم بتشغيل PHP %2$s.';
$lang['SystemUpgrade.!error.environment_fail'] = 'فشل واحد أو أكثر من عمليات فحص البيئة. يرجى حل المشكلات قبل الترقية.';

