<?php
/**
 * System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.tr_tr
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SystemUpgrade.!error.backup_db_failed'] = 'Veritabanı yedeklemesi başarısız oldu. Yükseltme, güvenilir bir yedekleme olmadan devam edemez.';
$lang['SystemUpgrade.!error.backup_files_failed'] = 'Dosya yedeklemesi başarısız oldu. Yükseltme, güvenilir bir yedekleme olmadan devam edemez.';
$lang['SystemUpgrade.!error.download_failed'] = 'Sürüm dosyası indirilemedi.';
$lang['SystemUpgrade.!error.environment_fail'] = 'Bir veya daha fazla ortam denetimi başarısız oldu. Lütfen yükseltmeden önce sorunları çözün.';
$lang['SystemUpgrade.!error.extraction_failed'] = 'Sürüm arşivi çıkarılamadı.';
$lang['SystemUpgrade.!error.hash_mismatch'] = 'İndirilen dosya bütünlük kontrolü başarısız oldu. Dosya bozulmuş olabilir.';
$lang['SystemUpgrade.!error.launch_not_detected'] = 'Arka plan yükseltme işlemi başlamadı. Bu durum, web sunucusunun uzun süredir çalışan alt süreçleri ayırmasına izin verilmeyen jailed hosting ortamlarında (CloudLinux/CageFS, bazı PHP-FPM yapılandırmaları) meydana gelebilir. Yükseltme işlemi aşağıdaki komut SSH üzerinden çalıştırılarak tamamlanabilir.';
$lang['SystemUpgrade.!error.license_invalid'] = 'Büyük veya küçük sürüm yükseltmeleri için destek ve güncelleme aboneliğinizin aktif olması gerekir.';
$lang['SystemUpgrade.!error.lock_stale'] = 'Önceki bir yükseltme işlemi beklenmedik bir şekilde durmuş gibi görünüyor. Tekrar denemek için kilidi temizleyebilirsiniz.';
$lang['SystemUpgrade.!error.php_version'] = 'Hedef sürüm PHP %1$s veya daha yenisini gerektirir. PHP %2$s çalıştırıyorsunuz.';
$lang['SystemUpgrade.!error.signature_invalid'] = 'Yayın imzası doğrulaması başarısız oldu. Dosya ile oynanmış olabilir.';
$lang['SystemUpgrade.!error.signature_missing'] = 'Sürüm bir kriptografik imza içermiyor. Orijinallik doğrulanamıyor.';
$lang['SystemUpgrade.!error.upgrade_locked'] = 'Bir yükseltme zaten devam etmektedir ( %1$s personel kimliği tarafından %2$s adresinde başlatılmıştır).';
$lang['SystemUpgrade.!error.upgrader_crashed'] = 'Yükseltme işlemi beklenmedik bir şekilde durmuş gibi görünüyor. Kurtarma için aşağıdaki yedekleme yollarını kontrol edin.';
$lang['SystemUpgrade.!error.upgrader_failed'] = 'Yükseltme işlemi hazırlanamadı veya başlatılamadı.';
$lang['SystemUpgrade.environment.config_fail'] = 'Yapılandırma: blesta.php yazılabilir değil.';
$lang['SystemUpgrade.environment.config_pass'] = 'Yapılandırma: blesta.php yazılabilir.';
$lang['SystemUpgrade.environment.disk_pass'] = 'Disk alanı: %1$s kullanılabilir.';
$lang['SystemUpgrade.environment.disk_warn'] = 'Disk alanı: Yalnızca %1$s mevcut, tahmini olarak %2$s gerekli.';
$lang['SystemUpgrade.environment.exec_fail'] = 'Kabuk erişimi: exec() işlevi devre dışı veya kullanılamıyor.';
$lang['SystemUpgrade.environment.exec_pass'] = 'Kabuk erişimi: exec() işlevi kullanılabilir.';
$lang['SystemUpgrade.environment.mysqldump_fail'] = 'Veritabanı yedekleme: mysqldump komutu mevcut değil. Lütfen mysql-client araçlarını yükleyin.';
$lang['SystemUpgrade.environment.mysqldump_pass'] = 'Veritabanı yedekleme: mysqldump komutu kullanılabilir.';
$lang['SystemUpgrade.environment.os_fail'] = 'Kendi kendine yükseltme yalnızca Linux ortamlarında desteklenir.';
$lang['SystemUpgrade.environment.os_pass'] = 'İşletim sistemi: Linux tespit edildi.';
$lang['SystemUpgrade.environment.ownership_fail'] = 'Dosya sahipliği: %1$s anahtar dizinleri web sunucusu kullanıcısına ait değildir.';
$lang['SystemUpgrade.environment.ownership_pass'] = 'Dosya sahipliği: Tüm anahtar dizinlerin sahibi web sunucusu kullanıcısıdır.';
$lang['SystemUpgrade.environment.rsync_fail'] = 'Dosya senkronizasyonu: rsync komutu mevcut değil. Lütfen rsync yükleyin.';
$lang['SystemUpgrade.environment.rsync_pass'] = 'Dosya senkronizasyonu: rsync komutu kullanılabilir.';
$lang['SystemUpgrade.environment.setsid_pass'] = 'Süreç ayrılması: setsid komutu kullanılabilir.';
$lang['SystemUpgrade.environment.setsid_warn'] = 'İşlem ayrılması: setsid komutu kullanılamıyor. Yükseltmenin jailed hosting ortamlarında tamamlanması için SSH üzerinden manuel bir komut gerekebilir.';
$lang['SystemUpgrade.environment.tar_fail'] = 'Dosya yedekleme: tar komutu mevcut değil. Lütfen tar yükleyin.';
$lang['SystemUpgrade.environment.tar_pass'] = 'Dosya yedekleme: tar komutu kullanılabilir.';
$lang['SystemUpgrade.environment.unzip_fail'] = 'Arşiv çıkarma: unzip komutu mevcut değil. Lütfen unzip yükleyin.';
$lang['SystemUpgrade.environment.unzip_pass'] = 'Arşiv çıkarma: unzip komutu kullanılabilir.';
$lang['SystemUpgrade.environment.writable_fail'] = 'Dosya sistemi: Kurulum dizini web sunucusu tarafından yazılabilir değil.';
$lang['SystemUpgrade.environment.writable_pass'] = 'Dosya sistemi: Kurulum dizini yazılabilir.';
$lang['SystemUpgrade.maintenance_reason'] = 'Sistem şu anda güncellenmektedir. Lütfen kısa süre içinde tekrar kontrol edin.';

