<?php
/**
 * System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.id_id
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SystemUpgrade.!error.backup_db_failed'] = 'Pencadangan basis data gagal. Peningkatan tidak dapat dilanjutkan tanpa cadangan yang dapat diandalkan.';
$lang['SystemUpgrade.!error.backup_files_failed'] = 'Pencadangan file gagal. Peningkatan tidak dapat dilanjutkan tanpa cadangan yang dapat diandalkan.';
$lang['SystemUpgrade.!error.download_failed'] = 'Gagal mengunduh file rilis.';
$lang['SystemUpgrade.!error.environment_fail'] = 'Satu atau beberapa pemeriksaan lingkungan gagal. Selesaikan masalah sebelum melakukan upgrade.';
$lang['SystemUpgrade.!error.extraction_failed'] = 'Gagal mengekstrak arsip rilis.';
$lang['SystemUpgrade.!error.hash_mismatch'] = 'Pemeriksaan integritas file yang diunduh gagal. File mungkin rusak.';
$lang['SystemUpgrade.!error.launch_not_detected'] = 'Proses peningkatan latar belakang tidak dimulai. Hal ini dapat terjadi pada lingkungan hosting yang dipenjara (CloudLinux/CageFS, beberapa konfigurasi PHP-FPM) di mana server web tidak diizinkan untuk melepaskan proses turunan yang sudah berjalan lama. Upgrade dapat diselesaikan dengan menjalankan perintah di bawah ini melalui SSH.';
$lang['SystemUpgrade.!error.license_invalid'] = 'Langganan dukungan dan pembaruan Anda harus aktif untuk peningkatan versi mayor atau minor.';
$lang['SystemUpgrade.!error.lock_stale'] = 'Proses peningkatan sebelumnya tampaknya berhenti secara tidak terduga. Anda dapat menghapus kunci untuk mencoba lagi.';
$lang['SystemUpgrade.!error.php_version'] = 'Rilis target membutuhkan PHP %1$s atau yang lebih baru. Anda menjalankan PHP %2$s.';
$lang['SystemUpgrade.!error.signature_invalid'] = 'Verifikasi tanda tangan rilis gagal. File mungkin telah dirusak.';
$lang['SystemUpgrade.!error.signature_missing'] = 'Rilis ini tidak menyertakan tanda tangan kriptografi. Tidak dapat memverifikasi keaslian.';
$lang['SystemUpgrade.!error.upgrade_locked'] = 'Peningkatan sedang berlangsung (dimulai oleh ID staf %1$s di %2$s).';
$lang['SystemUpgrade.!error.upgrader_crashed'] = 'Proses peningkatan tampaknya berhenti secara tidak terduga. Periksa jalur pencadangan di bawah ini untuk pemulihan.';
$lang['SystemUpgrade.!error.upgrader_failed'] = 'Gagal mempersiapkan atau meluncurkan proses peningkatan.';
$lang['SystemUpgrade.environment.config_fail'] = 'Konfigurasi: blesta.php tidak dapat ditulis.';
$lang['SystemUpgrade.environment.config_pass'] = 'Konfigurasi: blesta.php dapat ditulis.';
$lang['SystemUpgrade.environment.disk_pass'] = 'Ruang disk: %1$s tersedia.';
$lang['SystemUpgrade.environment.disk_warn'] = 'Ruang disk: Hanya %1$s yang tersedia, diperkirakan %2$s dibutuhkan.';
$lang['SystemUpgrade.environment.exec_fail'] = 'Akses shell: fungsi exec() dinonaktifkan atau tidak tersedia.';
$lang['SystemUpgrade.environment.exec_pass'] = 'Akses shell: fungsi exec() tersedia.';
$lang['SystemUpgrade.environment.mysqldump_fail'] = 'Pencadangan basis data: perintah mysqldump tidak tersedia. Silakan instal alat bantu mysql-client.';
$lang['SystemUpgrade.environment.mysqldump_pass'] = 'Pencadangan basis data: perintah mysqldump tersedia.';
$lang['SystemUpgrade.environment.os_fail'] = 'Peningkatan mandiri hanya didukung pada lingkungan Linux.';
$lang['SystemUpgrade.environment.os_pass'] = 'Sistem operasi: Linux terdeteksi.';
$lang['SystemUpgrade.environment.ownership_fail'] = 'Kepemilikan berkas: %1$s direktori utama tidak dimiliki oleh pengguna server web.';
$lang['SystemUpgrade.environment.ownership_pass'] = 'Kepemilikan file: Semua direktori utama dimiliki oleh pengguna server web.';
$lang['SystemUpgrade.environment.rsync_fail'] = 'Sinkronisasi file: perintah rsync tidak tersedia. Silakan instal rsync.';
$lang['SystemUpgrade.environment.rsync_pass'] = 'Sinkronisasi file: perintah rsync tersedia.';
$lang['SystemUpgrade.environment.setsid_pass'] = 'Pelepasan proses: perintah setsid tersedia.';
$lang['SystemUpgrade.environment.setsid_warn'] = 'Pelepasan proses: perintah setsid tidak tersedia. Upgrade mungkin memerlukan perintah manual melalui SSH untuk menyelesaikannya pada lingkungan hosting yang dipenjara.';
$lang['SystemUpgrade.environment.tar_fail'] = 'Pencadangan file: perintah tar tidak tersedia. Silakan instal tar.';
$lang['SystemUpgrade.environment.tar_pass'] = 'Pencadangan file: perintah tar tersedia.';
$lang['SystemUpgrade.environment.unzip_fail'] = 'Ekstraksi arsip: perintah unzip tidak tersedia. Silakan instal unzip.';
$lang['SystemUpgrade.environment.unzip_pass'] = 'Ekstraksi arsip: tersedia perintah unzip.';
$lang['SystemUpgrade.environment.writable_fail'] = 'Sistem berkas: Direktori instalasi tidak dapat ditulis oleh server web.';
$lang['SystemUpgrade.environment.writable_pass'] = 'Sistem berkas: Direktori instalasi dapat ditulis.';
$lang['SystemUpgrade.maintenance_reason'] = 'Sistem saat ini sedang ditingkatkan. Silakan periksa kembali segera.';

