<?php
/**
 * Cron
 *
 * @package blesta
 * @subpackage blesta.language.tr_tr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Cron.addpaidpendingservices.service_success'] = 'İstemci #%2$s\'den bekleyen #%1$s hizmeti artık etkin.';
$lang['Cron.addpaidpendingservices.service_error'] = 'İstemci #%2$s\'den bekleyen #%1$s hizmeti etkin hale getirilemedi.';
$lang['Cron.addpaidpendingservices.completed'] = 'Ödenmiş bekleyen hizmetler görevi tamamlandı.';
$lang['Cron.addpaidpendingservices.attempt'] = 'Ödenmiş bekleyen hizmetlerin sağlanmaya çalışılması.';
$lang['Cron.cancelscheduledservices.cancel_success'] = 'Müşteri #%2$s\'den alınan #%1$s hizmeti iptal edildi.';
$lang['Cron.cancelscheduledservices.cancel_error'] = 'Müşteri #%2$s\'den alınan #%1$s hizmeti iptal edilemedi.';
$lang['Cron.cancelscheduledservices.completed'] = 'Zamanlanmış hizmetleri iptal etme görevi tamamlandı.';
$lang['Cron.cancelscheduledservices.attempt'] = 'Planlanmış hizmetleri iptal etmeye çalışmak.';
$lang['Cron.unsuspendservices.unsuspend_success'] = 'İstemci %2$s\'den #%1$s hizmeti askıya alınmadı.';
$lang['Cron.unsuspendservices.unsuspend_error'] = 'İstemci %2$s\'den #%1$s hizmeti askıdan alınamadı.';
$lang['Cron.unsuspendservices.completed'] = 'Hizmetleri askıdan kaldırma görevi tamamlandı.';
$lang['Cron.unsuspendservices.attempt'] = 'Ücretli askıya alınmış hizmetlerin askıdan indirilmeye çalışılması.';
$lang['Cron.suspendservices.suspend_success'] = '2$s istemcisinden #%1$s hizmeti askıya alındı.';
$lang['Cron.suspendservices.suspend_error'] = 'İstemci %2$s\'den #%1$s hizmeti askıya alınamadı.';
$lang['Cron.suspendservices.suspension_reason'] = 'Ödeme Yapılmaması';
$lang['Cron.suspendservices.completed'] = 'Hizmetleri askıya alma görevi tamamlandı.';
$lang['Cron.suspendservices.attempt'] = 'Vadesi geçmiş hizmetlerin askıya alınmaya çalışılması.';
$lang['Cron.cardexpirationreminders.success'] = 'Müşteri #%3$s\'den %1$s %2$s kişisi için süre sonu hatırlatıcısı başarıyla teslim edildi.';
$lang['Cron.cardexpirationreminders.failed'] = 'Müşteri #%3$s\'den %1$s %2$s kişisi için süre sonu hatırlatıcısı gönderilemedi.';
$lang['Cron.cardexpirationreminders.completed'] = 'Kart son kullanma tarihi hatırlatıcıları görevi tamamlandı.';
$lang['Cron.cardexpirationreminders.attempt'] = 'Kart son kullanma tarihi hatırlatıcıları gönderilmeye çalışılıyor.';
$lang['Cron.autodebitinvoices.charge_success'] = 'Ödeme başarıyla işlendi.';
$lang['Cron.autodebitinvoices.charge_failed'] = 'Ödeme işleme alınamıyor.';
$lang['Cron.autodebitinvoices.charge_attempt'] = '2$s tutarındaki tüm açık faturalar için müşteri #%1$s otomatik olarak borçlandırılmaya çalışılıyor.';
$lang['Cron.autodebitinvoices.completed'] = 'Otomatik borç faturaları görevi tamamlandı.';
$lang['Cron.autodebitinvoices.attempt'] = 'Açık faturaları otomatik borçlandırma girişimi.';
$lang['Cron.applycredits.apply_none'] = 'Kredilerin uygulanabileceği herhangi bir fatura bulunmamaktadır.';
$lang['Cron.applycredits.apply_success'] = 'Müşteri #%2$s için %1$s işleminden %4$s tutarındaki #%3$s faturasına bekleyen krediler başarıyla uygulandı.';
$lang['Cron.applycredits.apply_failed'] = 'Müşteri #%1$s için bekleyen krediler uygulanamıyor.';
$lang['Cron.applycredits.completed'] = 'Kredi uygulama görevi tamamlandı.';
$lang['Cron.applycredits.attempt'] = 'Açık faturalara kredi uygulanmaya çalışılıyor.';
$lang['Cron.index.completed_all_system'] = 'Tüm sistem görevleri tamamlanmıştır.';
$lang['Cron.index.attempt_all_system'] = 'Tüm sistem görevleri çalıştırılmaya çalışılıyor.';
$lang['Cron.index.completed_all'] = 'Tüm görevler tamamlanmıştır.';
$lang['Cron.!error.task_execution.failed'] = 'Hata: %1$s %2$s';
$lang['Cron.!error.cron.failed'] = 'Cron günlüğe kaydedilemedi.';
$lang['Cron.index.attempt_all'] = 'Tüm görevler %1$s için çalıştırılmaya çalışılıyor.';
$lang['Cron.!error.task_filter.exclude_not_array'] = 'Görev filtresi "exclude" bir dizi olmalıdır.';
$lang['Cron.!error.task_filter.include_not_array'] = 'Görev filtresi "include" bir dizi olmalıdır.';
$lang['Cron.!error.task_filter.both_include_exclude'] = 'Görev filtresi hem "dahil et" hem de "hariç tut" anahtarlarına sahip olamaz.';
$lang['Cron.!error.task_filter.invalid_format'] = 'Görev filtresi bir JSON nesnesi olmalıdır.';
$lang['Cron.!error.task_filter.invalid_json'] = 'Görev filtresi parametresinde geçersiz JSON: %1$s';

