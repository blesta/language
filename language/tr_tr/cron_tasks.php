<?php
/**
 * Cron Tasks
 *
 * @package blesta
 * @subpackage blesta.language.tr_tr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['CronTasks.crontask.description.delete_expired_password_reset_tokens'] = 'Son kullanma tarihi geçmiş tüm parola sıfırlama belirteçlerini sistemden kaldırır.';
$lang['CronTasks.crontask.name.delete_expired_password_reset_tokens'] = 'Süresi Dolan Parola Sıfırlama Belirteçlerini Silme';
$lang['CronTasks.crontask.name.license_validation'] = 'Lisans Doğrulama';
$lang['CronTasks.crontask.description.transition_quotations'] = 'Geçerlilik tarihi geçmiş alıntıları süresi dolmuş olarak işaretleyin';
$lang['CronTasks.crontask.name.transition_quotations'] = 'Geçiş Alıntıları';
$lang['CronTasks.crontask.description.unsuspend_services'] = 'Ödemesi yapılmış olan askıya alınmış hizmetler seçilen aralıkta askıdan kaldırılacaktır.';
$lang['CronTasks.crontask.name.unsuspend_services'] = 'Unsuspend Hizmetleri';
$lang['CronTasks.crontask.description.cleanup_logs'] = 'Eski ağ geçidi, modül ve diğer günlükler, belirtilen zamanda saklama ayarlarına bağlı olarak günlük olarak döndürülecektir.';
$lang['CronTasks.crontask.name.cleanup_logs'] = 'Günlükleri Temizleyin';
$lang['CronTasks.crontask.description.deliver_reports'] = 'A/R, Fatura Oluşturma, Vergi Yükümlülüğü ve diğer raporlar günlük olarak belirtilen saatte teslim edilecektir.';
$lang['CronTasks.crontask.name.deliver_reports'] = 'Raporları Teslim Edin';
$lang['CronTasks.crontask.description.exchange_rates'] = 'Döviz kurları belirtilen aralıkta güncellenecektir. Engellenme riski nedeniyle bu işlemin günde iki defadan fazla çalıştırılması önerilmez.';
$lang['CronTasks.crontask.name.exchange_rates'] = 'Döviz Kuru Güncellemeleri';
$lang['CronTasks.crontask.description.suspend_services'] = 'Vadesi geçmiş hizmetler günlük olarak belirtilen saatte askıya alınacaktır.';
$lang['CronTasks.crontask.name.suspend_services'] = 'Hizmetleri Askıya Al';
$lang['CronTasks.crontask.description.backups_sftp'] = 'SFTP Yedeklemeleri Sistem Ayarları > Yedekleme > Güvenli FTP altında zamanlanır.';
$lang['CronTasks.crontask.name.backups_sftp'] = 'SFTP Yedeklemeleri';
$lang['CronTasks.crontask.description.backups_amazons3'] = 'Amazon S3 Yedeklemeleri Sistem Ayarları > Yedekleme > Amazon S3 altında zamanlanır.';
$lang['CronTasks.crontask.name.backups_amazons3'] = 'Amazon S3 Yedeklemeleri';
$lang['CronTasks.crontask.description.deliver_invoices'] = 'Teslim edilmesi planlanan faturalar seçilen aralıkta gönderilecektir.';
$lang['CronTasks.crontask.name.deliver_invoices'] = 'Faturaları Teslim Edin';
$lang['CronTasks.crontask.description.card_expiration_reminders'] = 'O ay belirtilen saatte sona erecek kredi kartları için ayın 15\'inde bir hatırlatma gönderilecektir.';
$lang['CronTasks.crontask.name.card_expiration_reminders'] = 'Kart Son Kullanma Hatırlatmaları Ayın 15\'i';
$lang['CronTasks.crontask.description.cancel_scheduled_services'] = 'Gelecek iptal tarihleri belirlenmiş hizmetler seçilen aralıkta kaldırılır.';
$lang['CronTasks.crontask.name.cancel_scheduled_services'] = 'Planlanmış Hizmetleri İptal Etme';
$lang['CronTasks.crontask.description.provision_pending_services'] = 'Ücretli bekleyen hizmetler seçilen aralıkta etkinleştirilir.';
$lang['CronTasks.crontask.name.provision_pending_services'] = 'Karşılığı Ödenmiş Bekleyen Hizmetler';
$lang['CronTasks.crontask.description.process_renewing_services'] = 'Modüllere bağlı olan yenileme hizmetleri seçilen aralıkta yenilenir.';
$lang['CronTasks.crontask.name.process_renewing_services'] = 'Süreç Hizmeti Yenilemeleri';
$lang['CronTasks.crontask.description.process_service_changes'] = 'Ücretli kuyruğa alınmış hizmet değişiklikleri (örn. yükseltmeler) seçilen aralıkta işlenir.';
$lang['CronTasks.crontask.name.process_service_changes'] = 'Süreç Hizmeti Değişiklikleri';
$lang['CronTasks.crontask.description.apply_payments'] = 'Gevşek krediler, seçilen aralıkta otomatik olarak açık faturalara uygulanır.';
$lang['CronTasks.crontask.name.apply_payments'] = 'Ödemeleri Açık Faturalara Uygula';
$lang['CronTasks.crontask.description.payment_reminders'] = 'Ödeme hatırlatmaları ve gecikme bildirimleri günlük olarak belirtilen saatte gönderilir.';
$lang['CronTasks.crontask.name.payment_reminders'] = 'Ödeme Hatırlatıcıları';
$lang['CronTasks.crontask.description.autodebit'] = 'Otomatik ödeme için seçilen ödeme hesapları, açık faturaların günlük olarak belirtilen zamanda ödenmesi için çalıştırılacaktır.';
$lang['CronTasks.crontask.name.autodebit'] = 'Otomatik Ödeme';
$lang['CronTasks.crontask.description.apply_invoice_late_fees'] = 'Gecikme ücretlerini, vadesi geçtikten yapılandırılmış sayıda gün sonra açık faturalara uygular.';
$lang['CronTasks.crontask.name.apply_invoice_late_fees'] = 'Fatura Gecikme Ücretlerini Uygula';
$lang['CronTasks.crontask.description.create_invoice'] = 'Yinelenen faturalar ve yenilenen hizmetler, günde bir kez belirtilen saatte çalışan bu görev aracılığıyla faturalandırılır.';
$lang['CronTasks.crontask.name.create_invoice'] = 'Fatura Oluştur';
$lang['CronTasks.task_type.module'] = 'Modül';
$lang['CronTasks.task_type.plugin'] = 'Eklenti';
$lang['CronTasks.task_type.system'] = 'Sistem';
$lang['CronTasks.!error.type.format'] = 'Geçersiz cron görev türü. Zaman veya aralık olmalıdır.';
$lang['CronTasks.!error.time.format'] = 'Saat geçersiz bir formatta.';
$lang['CronTasks.!error.interval.format'] = 'Aralık, dakikaları temsil eden bir sayı olmalıdır.';
$lang['CronTasks.!error.enabled.length'] = 'etkinleştirilmiş uzunluk 1 karakteri geçemez.';
$lang['CronTasks.!error.enabled.format'] = 'etkin bir sayı olmalıdır.';
$lang['CronTasks.!error.is_lang.length'] = 'is_lang uzunluğu 1 karakteri geçemez.';
$lang['CronTasks.!error.is_lang.format'] = 'is_lang bir sayı olmalıdır.';
$lang['CronTasks.!error.name.empty'] = 'Lütfen bir isim girin.';
$lang['CronTasks.!error.id.exists'] = 'Geçersiz cron görev kimliği.';
$lang['CronTasks.!error.run_id.exists'] = 'Geçersiz cron görevi çalıştırma kimliği.';
$lang['CronTasks.!error.dir.length'] = 'Dizin uzunluğu 64 karakteri geçemez.';
$lang['CronTasks.!error.task_type.format'] = 'Geçersiz görev türü. Modül, eklenti veya sistem olmalıdır.';
$lang['CronTasks.!error.key.length'] = 'Cron görev anahtarı uzunluğu 64 karakteri geçemez.';
$lang['CronTasks.!error.key.unique'] = 'Sağlanan cron görev anahtarı zaten alınmış.';
$lang['CronTasks.crontask.description.low_balance_notifications'] = 'Kredi seviyeleri yapılandırılmış eşiğin altına düşen tüm kullanıcılara bir bildirim gönderir.';
$lang['CronTasks.crontask.name.low_balance_notifications'] = 'Düşük Bakiye Bildirimleri';

