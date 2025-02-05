<?php
/**
 * Admin System Backup
 *
 * @package blesta
 * @subpackage blesta.language.ar_xa
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemBackup.index.text_note'] = 'هنا يمكنك تنزيل نسخة احتياطية من قاعدة بيانات Blesta على جهاز الكمبيوتر الخاص بك أو تحميل نسخة احتياطية تلقائيًا إلى خادم SFTP و/أو خادم Amazon S3 الذي تم تكوينه.';
$lang['AdminSystemBackup.index.field_downloadbackup'] = 'تنزيل النسخ الاحتياطي';
$lang['AdminSystemBackup.index.field_uploadbackup'] = 'فرض النسخ الاحتياطي خارج الموقع';
$lang['AdminSystemBackup.index.boxtitle_index'] = 'عند الطلب';
$lang['AdminSystemBackup.index.page_title'] = 'الإعدادات &gt; النظام &gt; النسخ الاحتياطي &gt; عند الطلب';
$lang['AdminSystemBackup.amazon.field.backupsubmit'] = 'تحديث الإعدادات';
$lang['AdminSystemBackup.amazon.field.amazons3_rate'] = 'النسخ الاحتياطي لكل';
$lang['AdminSystemBackup.amazon.field.amazons3_bucket'] = 'دلو';
$lang['AdminSystemBackup.amazon.field.amazons3_secretkey'] = 'المفتاح السري';
$lang['AdminSystemBackup.amazon.field.amazons3_accesskey'] = 'مفتاح الوصول';
$lang['AdminSystemBackup.amazon.field.amazons3_region'] = 'المنطقة';
$lang['AdminSystemBackup.amazon.field.test'] = 'اختبر هذه الإعدادات';
$lang['AdminSystemBackup.amazon.boxtitle_backup'] = 'أمازون S3';
$lang['AdminSystemBackup.amazon.page_title'] = 'الإعدادات &gt; النظام &gt; النسخ الاحتياطي &gt; Amazon S3';
$lang['AdminSystemBackup.ftp.field.backupsubmit'] = 'تحديث الإعدادات';
$lang['AdminSystemBackup.ftp.field.ftp_rate'] = 'النسخ الاحتياطي لكل';
$lang['AdminSystemBackup.ftp.field.ftp_path'] = 'المسار';
$lang['AdminSystemBackup.ftp.field.ftp_password'] = 'كلمة المرور';
$lang['AdminSystemBackup.ftp.field.ftp_username'] = 'اسم المستخدم';
$lang['AdminSystemBackup.ftp.field.ftp_port'] = 'الميناء';
$lang['AdminSystemBackup.ftp.field.ftp_host'] = 'اسم المضيف';
$lang['AdminSystemBackup.ftp.field.test'] = 'اختبر هذه الإعدادات';
$lang['AdminSystemBackup.ftp.boxtitle_backup'] = 'بروتوكول نقل الملفات الآمن';
$lang['AdminSystemBackup.ftp.page_title'] = 'الإعدادات &gt; النظام &gt; النسخ الاحتياطي &gt; تأمين بروتوكول نقل الملفات الآمن';
$lang['AdminSystemBackup.!tooltip.amazons3_rate'] = 'الفاصل الزمني لتكرار إجراء هذا النسخ الاحتياطي.';
$lang['AdminSystemBackup.!tooltip.amazons3_bucket'] = 'الاسم الحساس لحالة الأحرف لحافظة Amazon S3 التي سيتم تخزين النسخ الاحتياطية تحتها.';
$lang['AdminSystemBackup.!tooltip.amazons3_secret_key'] = 'المفتاح السري لحساب Amazon S3.';
$lang['AdminSystemBackup.!tooltip.amazons3_access_key'] = 'مفتاح الوصول إلى حساب Amazon S3 الخاص بـ Amazon S3.';
$lang['AdminSystemBackup.!tooltip.amazons3_region'] = 'منطقة Amazon S3 التي يتم تخزين النسخ الاحتياطية فيها.';
$lang['AdminSystemBackup.!tooltip.ftp_rate'] = 'الفاصل الزمني لتكرار إجراء هذا النسخ الاحتياطي.';
$lang['AdminSystemBackup.!tooltip.ftp_path'] = 'المسار الوجهة حيث يجب تخزين النسخ الاحتياطية على الخادم البعيد (على سبيل المثال "/backup/").';
$lang['AdminSystemBackup.!tooltip.ftp_password'] = 'كلمة المرور لحساب FTP.';
$lang['AdminSystemBackup.!tooltip.ftp_username'] = 'اسم المستخدم لحساب FTP.';
$lang['AdminSystemBackup.!tooltip.ftp_port'] = 'رقم المنفذ، عادة ما يكون 22. هذا هو نفس رقم المنفذ المستخدم في SSH.';
$lang['AdminSystemBackup.!tooltip.ftp_host'] = 'اسم المجال المحدد بالكامل لخادم النسخ الاحتياطي (على سبيل المثال "backup.domain.com").';
$lang['AdminSystemBackup.!error.backup_frequency'] = 'تردد النسخ الاحتياطي غير صالح.';
$lang['AdminSystemBackup.!error.amazons3_test'] = 'فشل الاتصال بـ AmazonS3! يرجى التحقق من الإعدادات الخاصة بك والمحاولة مرة أخرى. لاحظ أن تفاصيل الاتصال حساسة لحالة الأحرف.';
$lang['AdminSystemBackup.!error.sftp_test'] = 'فشل اتصال SFTP! يرجى التحقق من الإعدادات الخاصة بك والمحاولة مرة أخرى.';
$lang['AdminSystemBackup.!success.backup_uploaded'] = 'تم إرسال النسخة الاحتياطية بنجاح إلى الخدمات البعيدة التي تم تكوينها!';
$lang['AdminSystemBackup.!success.amazons3_test'] = 'كان اتصال AmazonS3 ناجحاً!';
$lang['AdminSystemBackup.!success.sftp_test'] = 'كان اتصال SFTP ناجحاً!';
$lang['AdminSystemBackup.!success.backup_updated'] = 'تم تحديث إعدادات النسخ الاحتياطي بنجاح!';

