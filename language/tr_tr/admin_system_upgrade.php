<?php
/**
 * Admin System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.tr_tr
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemUpgrade.index.no_results'] = 'Yükseltme seçenekleri şu anda mevcut değildir.';
$lang['AdminSystemUpgrade.index.field_upgradesubmit'] = 'Ayarları Güncelle';
$lang['AdminSystemUpgrade.index.boxtitle_upgrade'] = 'Yükseltme Seçenekleri';
$lang['AdminSystemUpgrade.index.page_title'] = 'Ayarlar > Sistem > Yükseltme Seçenekleri';
$lang['AdminSystemUpgrade.upgrade.btn_abort'] = 'İptal';
$lang['AdminSystemUpgrade.upgrade.btn_continue'] = 'Yükseltme ile devam edin';
$lang['AdminSystemUpgrade.upgrade.label_missing'] = 'Kayıp Dosyalar';
$lang['AdminSystemUpgrade.upgrade.label_modified'] = 'Değiştirilmiş Dosyalar';
$lang['AdminSystemUpgrade.upgrade.modified_files_title'] = 'Değiştirilmiş Çekirdek Dosyalar';
$lang['AdminSystemUpgrade.upgrade.modified_files'] = '%1$s çekirdek dosya(lar)ı orijinal sürümden değiştirilmiştir. Bu değişiklikler yükseltme sırasında üzerine yazılacaktır. Devam etmek istiyor musunuz?';
$lang['AdminSystemUpgrade.upgrade.no_checksums'] = 'Mevcut kurulumunuz için dosya bildirimi sağlama toplamlarını içermez. Dosya bütünlüğü doğrulaması atlanacaktır. Yükseltmeye devam etmek istiyor musunuz?';
$lang['AdminSystemUpgrade.upgrade.no_manifest'] = 'Mevcut kurulumunuz için dosya bildirimi bulunamadı. Dosya bütünlüğü doğrulaması atlanacaktır. Yükseltmeye devam etmek istiyor musunuz?';
$lang['AdminSystemUpgrade.upgrade.started'] = 'Yükseltme işlemi başladı. Bu sayfayı kapatabilirsiniz - yükseltme arka planda devam edecektir. İlerlemeyi kontrol etmek için bu sayfaya dönün.';
$lang['AdminSystemUpgrade.index.failure_db_version_mismatch'] = 'Veritabanı sürümü beklenen değere ilerlemedi. Yükseltme, bazı şema değişikliklerinin uygulanmasına izin vererek bir sürümün yarısında durmuş olabilir.';
$lang['AdminSystemUpgrade.index.failure_db_version_after'] = 'Şu anda: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_expected'] = 'Yükseltmeden sonra bekleniyor: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_before'] = 'Yükseltmeden önce: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_label'] = 'Veritabanı versiyonu:';
$lang['AdminSystemUpgrade.index.failure_backup_label'] = 'Mevcut yedekler:';
$lang['AdminSystemUpgrade.index.failure_explanation'] = 'Yükseltme başarıyla tamamlanmadı. Sisteminiz tutarsız bir durumda olabilir ve başarısız sürümdeki bazı veritabanı değişiklikleri zaten uygulanmış olabilir. Yükseltmeyi yeniden çalıştırmak muhtemelen farklı şekilde başarısız olacaktır. Yeniden denemeden önce veritabanı yedeğinden geri yükleme yapılması önerilir. Yedekler yükseltme başlamadan önce alınmıştır ve aşağıda listelenmiştir. Kurtarmak için bu yedekleri manuel olarak geri yükleyin ya da yardım için bir destek bileti açın.';
$lang['AdminSystemUpgrade.index.failure_heading'] = 'Bundan sonra ne yapmalı';
$lang['AdminSystemUpgrade.index.recovery_instructions'] = 'Yedekten geri yüklemek için sunucunuzda aşağıdaki komutları çalıştırın:';
$lang['AdminSystemUpgrade.index.recovery_files_path'] = 'Dosya yedekleme: %1$s';
$lang['AdminSystemUpgrade.index.recovery_db_path'] = 'Veritabanı yedeklemesi: %1$s';
$lang['AdminSystemUpgrade.index.heading_recovery'] = 'Kurtarma Talimatları';
$lang['AdminSystemUpgrade.index.confirm_delete_backup'] = 'Bu yedeği silmek istediğinizden emin misiniz? Bu geri alınamaz.';
$lang['AdminSystemUpgrade.index.btn_delete'] = 'Silme';
$lang['AdminSystemUpgrade.index.btn_download'] = 'İndir';
$lang['AdminSystemUpgrade.index.backup_files'] = 'Dosyalar';
$lang['AdminSystemUpgrade.index.backup_database'] = 'Veritabanı';
$lang['AdminSystemUpgrade.index.backup_col_date'] = 'Tarih';
$lang['AdminSystemUpgrade.index.backup_col_size'] = 'Boyut';
$lang['AdminSystemUpgrade.index.backup_col_type'] = 'Tip';
$lang['AdminSystemUpgrade.index.backup_col_file'] = 'Dosya';
$lang['AdminSystemUpgrade.index.no_backups'] = 'Yükseltme yedekleri bulunamadı.';
$lang['AdminSystemUpgrade.index.heading_backups'] = 'Yükseltme Yedekleri';
$lang['AdminSystemUpgrade.index.btn_clear_lock'] = 'Temiz Kilit';
$lang['AdminSystemUpgrade.index.lock_stale'] = 'Önceki bir yükseltme işlemi beklenmedik bir şekilde durmuş gibi görünüyor.';
$lang['AdminSystemUpgrade.index.lock_active'] = 'Şu anda %1$s adresinde başlatılan bir yükseltme işlemi devam etmektedir.';
$lang['AdminSystemUpgrade.index.btn_retry'] = 'Yeniden Dene';
$lang['AdminSystemUpgrade.index.btn_dashboard'] = 'Gösterge Tablosuna Dön';
$lang['AdminSystemUpgrade.index.step_migrate'] = 'Veritabanı geçişlerini çalıştırma';
$lang['AdminSystemUpgrade.index.upgrade_failed'] = 'Yükseltme başarısız oldu.';
$lang['AdminSystemUpgrade.index.upgrade_complete'] = 'Yükseltme başarıyla tamamlandı!';
$lang['AdminSystemUpgrade.index.step_finalize'] = 'Sonuçlandırmak';
$lang['AdminSystemUpgrade.index.step_replace'] = 'Dosyaları değiştirin';
$lang['AdminSystemUpgrade.index.step_extract'] = 'Dosyaları ayıklayın';
$lang['AdminSystemUpgrade.index.step_verify'] = 'Bütünlüğü doğrulayın';
$lang['AdminSystemUpgrade.index.step_download'] = 'İndirme sürümü';
$lang['AdminSystemUpgrade.index.step_backup_files'] = 'Dosya yedekleme';
$lang['AdminSystemUpgrade.index.step_backup_db'] = 'Veritabanı yedekleme';
$lang['AdminSystemUpgrade.index.step_maintenance'] = 'Bakım modunu etkinleştir';
$lang['AdminSystemUpgrade.index.step_preflight'] = 'Uçuş öncesi kontroller';
$lang['AdminSystemUpgrade.index.heading_progress'] = 'Yükseltme İlerlemesi';
$lang['AdminSystemUpgrade.index.select_version'] = 'Yükseltmek için bir sürüm seçin:';
$lang['AdminSystemUpgrade.index.upgrade_warning'] = 'Bu, bakım modunu etkinleştirecek, yedeklemeler oluşturacak, yeni sürümü indirip yükleyecek ve veritabanı geçişlerini çalıştıracaktır. Bu işlem başlatıldıktan sonra kesintiye uğratılamaz.';
$lang['AdminSystemUpgrade.index.btn_upgrade'] = 'Şimdi Yükselt';
$lang['AdminSystemUpgrade.index.clean_stale_files_note'] = 'Yeni sürüm bildiriminde bulunmayan çekirdek dizinlerdeki dosyaları siler. Çekirdek dizinlerde hiçbir özel dosya bulunmadığından emin değilseniz işareti kaldırın.';
$lang['AdminSystemUpgrade.index.clean_stale_files'] = 'Yükseltmeden sonra eski çekirdek dosyalarını kaldırma';
$lang['AdminSystemUpgrade.index.skip_integrity_check'] = 'Dosya bütünlüğü denetimini atla';
$lang['AdminSystemUpgrade.index.no_support'] = 'Destek ve güncellemeler aboneliğiniz etkin değil. Yalnızca yama güncellemeleri mevcuttur.';
$lang['AdminSystemUpgrade.index.requires_support'] = 'Aktif destek ve güncelleme aboneliği gerektirir.';
$lang['AdminSystemUpgrade.index.changelog_link'] = 'Değişiklik Günlüğünü Görüntüle';
$lang['AdminSystemUpgrade.index.release_date'] = 'Çıktı: %1$s';
$lang['AdminSystemUpgrade.index.upgrade_latest'] = 'Tam Yükseltme: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.upgrade_patch'] = 'Yama Güncellemesi: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.heading_available'] = 'Mevcut Güncellemeler';
$lang['AdminSystemUpgrade.index.command_copied'] = 'Kopyalandı';
$lang['AdminSystemUpgrade.index.btn_copy_command'] = 'Anlaşıldı';
$lang['AdminSystemUpgrade.index.launch_failed_instruction'] = 'Yükseltmeyi tamamlamak için SSH üzerinden aşağıdaki komutu çalıştırın (Blesta kurulumunun sahibi olan kullanıcı olarak). Bu sayfayı açık bırakın - komut çalışırken ilerleme burada güncellenmeye devam edecektir.';
$lang['AdminSystemUpgrade.index.launch_failed_title'] = 'Arka plan yükseltmesi başlamadı';
$lang['AdminSystemUpgrade.index.environment_badge_warn'] = '1$d uyarı';
$lang['AdminSystemUpgrade.index.environment_badge_fail'] = '1$d başarısız oldu';
$lang['AdminSystemUpgrade.index.environment_fail'] = 'Bazı kontroller başarısız oldu. Lütfen yükseltmeden önce aşağıdaki sorunları çözün.';
$lang['AdminSystemUpgrade.index.environment_pass'] = 'Tüm kontroller geçti. Sisteminiz kendi kendine yükseltme için hazır.';
$lang['AdminSystemUpgrade.index.heading_environment'] = 'Çevre Durumu';
$lang['AdminSystemUpgrade.index.up_to_date'] = 'Kurulumunuz güncel.';
$lang['AdminSystemUpgrade.index.btn_check'] = 'Güncellemeleri Kontrol Edin';
$lang['AdminSystemUpgrade.index.never_checked'] = 'Hiç kontrol etmedim';
$lang['AdminSystemUpgrade.index.last_checked'] = 'Son kontrol: %1$s';
$lang['AdminSystemUpgrade.index.current_version'] = 'Blesta\'yı çalıştırıyorsunuz %1$s';
$lang['AdminSystemUpgrade.index.heading_current'] = 'Güncel Sürüm';

