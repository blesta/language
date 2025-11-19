<?php
/**
 * Cron Tasks
 *
 * @package blesta
 * @subpackage blesta.language.ar_xa
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['CronTasks.crontask.description.delete_expired_password_reset_tokens'] = 'يزيل جميع رموز إعادة تعيين كلمة المرور التي تجاوزت تاريخ انتهاء الصلاحية من النظام.';
$lang['CronTasks.crontask.name.delete_expired_password_reset_tokens'] = 'حذف رموز إعادة تعيين كلمة المرور منتهية الصلاحية';
$lang['CronTasks.crontask.name.license_validation'] = 'التحقق من صحة الترخيص';
$lang['CronTasks.crontask.description.transition_quotations'] = 'وضع علامة على عروض الأسعار التي تجاوزت تاريخ الصلاحية، على أنها منتهية الصلاحية';
$lang['CronTasks.crontask.name.transition_quotations'] = 'الاقتباسات الانتقالية';
$lang['CronTasks.crontask.description.unsuspend_services'] = 'سيتم إلغاء تعليق الخدمات المعلقة التي تم دفعها في الفترة الزمنية المحددة.';
$lang['CronTasks.crontask.name.unsuspend_services'] = 'خدمات إلغاء تعليق الخدمات';
$lang['CronTasks.crontask.description.cleanup_logs'] = 'سيتم تدوير السجلات القديمة للبوابة والوحدة النمطية والسجلات الأخرى يوميًا وفقًا لإعدادات الاحتفاظ بها في الوقت المحدد.';
$lang['CronTasks.crontask.name.cleanup_logs'] = 'تنظيف السجلات';
$lang['CronTasks.crontask.description.deliver_reports'] = 'سيتم تسليم تقارير A/R وإنشاء الفواتير والالتزامات الضريبية وغيرها من التقارير يومياً في الوقت المحدد.';
$lang['CronTasks.crontask.name.deliver_reports'] = 'تسليم التقارير';
$lang['CronTasks.crontask.description.exchange_rates'] = 'سيتم تحديث أسعار الصرف في الفترة الزمنية المحددة. لا يوصى بتشغيل ذلك أكثر من مرتين يوميًا خشية التعرض للحظر.';
$lang['CronTasks.crontask.name.exchange_rates'] = 'تحديثات أسعار الصرف';
$lang['CronTasks.crontask.description.suspend_services'] = 'سيتم تعليق الخدمات التي فات موعد استحقاقها يوميًا في الوقت المحدد.';
$lang['CronTasks.crontask.name.suspend_services'] = 'تعليق الخدمات';
$lang['CronTasks.crontask.description.backups_sftp'] = 'تتم جدولة نُسخ SFTP الاحتياطية ضمن إعدادات النظام &gt; النسخ الاحتياطي &gt; بروتوكول نقل الملفات الآمن.';
$lang['CronTasks.crontask.name.backups_sftp'] = 'النسخ الاحتياطية ل SFTP';
$lang['CronTasks.crontask.description.backups_amazons3'] = 'تتم جدولة النسخ الاحتياطية من Amazon S3 ضمن إعدادات النظام &gt; النسخ الاحتياطي &gt; Amazon S3.';
$lang['CronTasks.crontask.name.backups_amazons3'] = 'النسخ الاحتياطية من أمازون S3';
$lang['CronTasks.crontask.description.deliver_invoices'] = 'سيتم إرسال الفواتير المجدولة للتسليم في الفترة الزمنية المحددة.';
$lang['CronTasks.crontask.name.deliver_invoices'] = 'تسليم الفواتير';
$lang['CronTasks.crontask.description.card_expiration_reminders'] = 'سيتم إرسال تذكير في 15 من الشهر لبطاقات الائتمان التي تنتهي صلاحيتها في ذلك الشهر في الوقت المحدد.';
$lang['CronTasks.crontask.name.card_expiration_reminders'] = 'تذكير بانتهاء صلاحية البطاقة في 15 من الشهر';
$lang['CronTasks.crontask.description.cancel_scheduled_services'] = 'تتم إزالة الخدمات ذات تواريخ الإلغاء المستقبلية المحددة في الفترة الزمنية المحددة.';
$lang['CronTasks.crontask.name.cancel_scheduled_services'] = 'إلغاء الخدمات المجدولة';
$lang['CronTasks.crontask.description.provision_pending_services'] = 'يتم تنشيط الخدمات المعلقة المدفوعة في الفترة الزمنية المحددة.';
$lang['CronTasks.crontask.name.provision_pending_services'] = 'توفير الخدمات المعلقة المدفوعة الأجر';
$lang['CronTasks.crontask.description.process_renewing_services'] = 'يتم تجديد الخدمات التي يتم إرفاقها بالوحدات النمطية في الفترة الزمنية المحددة.';
$lang['CronTasks.crontask.name.process_renewing_services'] = 'تجديد خدمات المعاملات';
$lang['CronTasks.crontask.description.process_service_changes'] = 'تتم معالجة تغييرات الخدمة المدفوعة في قائمة الانتظار (مثل الترقيات) في الفاصل الزمني المحدد.';
$lang['CronTasks.crontask.name.process_service_changes'] = 'تغييرات خدمة المعالجة';
$lang['CronTasks.crontask.description.apply_payments'] = 'يتم تطبيق الأرصدة الدائنة السائبة على الفواتير المفتوحة تلقائياً في الفترة الزمنية المحددة.';
$lang['CronTasks.crontask.name.apply_payments'] = 'تطبيق المدفوعات على الفواتير المفتوحة';
$lang['CronTasks.crontask.description.payment_reminders'] = 'يتم إرسال رسائل التذكير بالدفع وإشعارات التأخير يومياً في الوقت المحدد.';
$lang['CronTasks.crontask.name.payment_reminders'] = 'تذكيرات الدفع';
$lang['CronTasks.crontask.description.autodebit'] = 'سيتم تشغيل حسابات الدفع المحددة للخصم التلقائي لسداد الفواتير المفتوحة يومياً في الوقت المحدد.';
$lang['CronTasks.crontask.name.autodebit'] = 'الخصم التلقائي';
$lang['CronTasks.crontask.description.apply_invoice_late_fees'] = 'تطبيق رسوم التأخير على الفواتير المفتوحة بعد عدد محدد من الأيام من تاريخ الاستحقاق.';
$lang['CronTasks.crontask.name.apply_invoice_late_fees'] = 'تطبيق رسوم التأخير في الفاتورة';
$lang['CronTasks.crontask.description.create_invoice'] = 'يتم إصدار فواتير الفواتير المتكررة وتجديد الخدمات من خلال هذه المهمة، والتي تعمل مرة واحدة يوميًا في الوقت المحدد.';
$lang['CronTasks.crontask.name.create_invoice'] = 'إنشاء الفاتورة';
$lang['CronTasks.task_type.module'] = 'الوحدة النمطية';
$lang['CronTasks.task_type.plugin'] = 'المكوّن الإضافي';
$lang['CronTasks.task_type.system'] = 'النظام';
$lang['CronTasks.!error.type.format'] = 'نوع مهمة cron غير صالح. يجب أن يكون إما الوقت أو الفاصل الزمني.';
$lang['CronTasks.!error.time.format'] = 'الوقت بتنسيق غير صالح.';
$lang['CronTasks.!error.interval.format'] = 'يجب أن يكون الفاصل الزمني رقماً يمثل الدقائق.';
$lang['CronTasks.!error.enabled.length'] = 'لا يجوز أن يتجاوز الطول الممكّن حرفاً واحداً.';
$lang['CronTasks.!error.enabled.format'] = 'التمكين يجب أن يكون رقماً.';
$lang['CronTasks.!error.is_lang.length'] = 'لا يجوز أن يتجاوز طول is_lang حرف واحد.';
$lang['CronTasks.!error.is_lang.format'] = 'هو_لغة يجب أن يكون رقماً.';
$lang['CronTasks.!error.name.empty'] = 'الرجاء إدخال اسم.';
$lang['CronTasks.!error.id.exists'] = 'معرف مهمة cron غير صالح.';
$lang['CronTasks.!error.run_id.exists'] = 'معرف تشغيل مهمة cron غير صالح.';
$lang['CronTasks.!error.dir.length'] = 'لا يجوز أن يتجاوز طول الدليل 64 حرفاً.';
$lang['CronTasks.!error.task_type.format'] = 'نوع المهمة غير صالح. يجب أن تكون وحدة نمطية أو مكون إضافي أو نظام.';
$lang['CronTasks.!error.key.length'] = 'لا يجوز أن يتجاوز طول مفتاح مهمة cron 64 حرفاً.';
$lang['CronTasks.!error.key.unique'] = 'مفتاح مهمة cron المقدم مأخوذ بالفعل.';
$lang['CronTasks.crontask.description.low_balance_notifications'] = 'يرسل إشعارًا إلى جميع المستخدمين الذين انخفضت مستويات الائتمان لديهم عن الحد الذي تم تكوينه.';
$lang['CronTasks.crontask.name.low_balance_notifications'] = 'إشعارات انخفاض الرصيد المنخفض';

