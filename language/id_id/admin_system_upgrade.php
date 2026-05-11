<?php
/**
 * Admin System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.id_id
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemUpgrade.index.no_results'] = 'Opsi peningkatan tidak tersedia saat ini.';
$lang['AdminSystemUpgrade.index.field_upgradesubmit'] = 'Memperbarui Pengaturan';
$lang['AdminSystemUpgrade.index.boxtitle_upgrade'] = 'Opsi Peningkatan';
$lang['AdminSystemUpgrade.index.page_title'] = 'Pengaturan > Sistem > Opsi Peningkatan';
$lang['AdminSystemUpgrade.upgrade.btn_abort'] = 'Batal';
$lang['AdminSystemUpgrade.upgrade.btn_continue'] = 'Lanjutkan dengan Upgrade';
$lang['AdminSystemUpgrade.upgrade.label_missing'] = 'File yang hilang';
$lang['AdminSystemUpgrade.upgrade.label_modified'] = 'File yang dimodifikasi';
$lang['AdminSystemUpgrade.upgrade.modified_files_title'] = 'File Inti yang Dimodifikasi';
$lang['AdminSystemUpgrade.upgrade.modified_files'] = '%1$s file inti telah dimodifikasi dari rilis aslinya. Perubahan ini akan ditimpa selama peningkatan. Apakah Anda ingin melanjutkan?';
$lang['AdminSystemUpgrade.upgrade.no_checksums'] = 'Manifes file untuk instalasi Anda saat ini tidak menyertakan checksum. Verifikasi integritas file akan dilewati. Apakah Anda ingin melanjutkan peningkatan?';
$lang['AdminSystemUpgrade.upgrade.no_manifest'] = 'Tidak ditemukan manifes file untuk instalasi Anda saat ini. Verifikasi integritas file akan dilewati. Apakah Anda ingin melanjutkan peningkatan?';
$lang['AdminSystemUpgrade.upgrade.started'] = 'Proses peningkatan dimulai. Anda dapat menutup halaman ini - peningkatan akan berlanjut di latar belakang. Kembali ke halaman ini untuk memeriksa kemajuan.';
$lang['AdminSystemUpgrade.index.failure_db_version_mismatch'] = 'Versi database tidak naik ke nilai yang diharapkan. Peningkatan mungkin berhenti di tengah jalan pada suatu versi, sehingga beberapa perubahan skema diterapkan.';
$lang['AdminSystemUpgrade.index.failure_db_version_after'] = 'Saat ini: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_expected'] = 'Diharapkan setelah peningkatan: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_before'] = 'Sebelum peningkatan: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_label'] = 'Versi basis data:';
$lang['AdminSystemUpgrade.index.failure_backup_label'] = 'Cadangan yang tersedia:';
$lang['AdminSystemUpgrade.index.failure_explanation'] = 'Peningkatan tidak berhasil diselesaikan. Sistem Anda mungkin berada dalam kondisi tidak konsisten dan beberapa perubahan basis data dari versi yang gagal mungkin sudah diterapkan. Menjalankan kembali peningkatan kemungkinan akan mengalami kegagalan yang berbeda. Disarankan untuk memulihkan dari cadangan basis data sebelum mencoba kembali. Cadangan diambil sebelum peningkatan dimulai dan tercantum di bawah ini. Untuk memulihkannya, pulihkan cadangan ini secara manual atau buka tiket dukungan untuk mendapatkan bantuan.';
$lang['AdminSystemUpgrade.index.failure_heading'] = 'Apa yang harus dilakukan selanjutnya';
$lang['AdminSystemUpgrade.index.recovery_instructions'] = 'Untuk memulihkan dari cadangan, jalankan perintah berikut pada server Anda:';
$lang['AdminSystemUpgrade.index.recovery_files_path'] = 'Cadangan file: %1$s';
$lang['AdminSystemUpgrade.index.recovery_db_path'] = 'Pencadangan basis data: %1$s';
$lang['AdminSystemUpgrade.index.heading_recovery'] = 'Petunjuk Pemulihan';
$lang['AdminSystemUpgrade.index.confirm_delete_backup'] = 'Apakah Anda yakin ingin menghapus cadangan ini? Ini tidak dapat dibatalkan.';
$lang['AdminSystemUpgrade.index.btn_delete'] = 'Menghapus';
$lang['AdminSystemUpgrade.index.btn_download'] = 'Unduh';
$lang['AdminSystemUpgrade.index.backup_files'] = 'File';
$lang['AdminSystemUpgrade.index.backup_database'] = 'Basis data';
$lang['AdminSystemUpgrade.index.backup_col_date'] = 'Tanggal';
$lang['AdminSystemUpgrade.index.backup_col_size'] = 'Ukuran';
$lang['AdminSystemUpgrade.index.backup_col_type'] = 'Jenis';
$lang['AdminSystemUpgrade.index.backup_col_file'] = 'Mengajukan';
$lang['AdminSystemUpgrade.index.no_backups'] = 'Tidak ditemukan cadangan pemutakhiran.';
$lang['AdminSystemUpgrade.index.heading_backups'] = 'Tingkatkan Cadangan';
$lang['AdminSystemUpgrade.index.btn_clear_lock'] = 'Hapus Kunci';
$lang['AdminSystemUpgrade.index.lock_stale'] = 'Proses peningkatan sebelumnya tampaknya berhenti secara tidak terduga.';
$lang['AdminSystemUpgrade.index.lock_active'] = 'Pembaruan saat ini sedang berlangsung, dimulai di %1$s.';
$lang['AdminSystemUpgrade.index.btn_retry'] = 'Coba lagi.';
$lang['AdminSystemUpgrade.index.btn_dashboard'] = 'Kembali ke Dasbor';
$lang['AdminSystemUpgrade.index.upgrade_failed'] = 'Upgrade gagal.';
$lang['AdminSystemUpgrade.index.upgrade_complete'] = 'Peningkatan berhasil diselesaikan!';
$lang['AdminSystemUpgrade.index.step_finalize'] = 'Menyelesaikan';
$lang['AdminSystemUpgrade.index.step_migrate'] = 'Menjalankan migrasi basis data';
$lang['AdminSystemUpgrade.index.step_replace'] = 'Mengganti file';
$lang['AdminSystemUpgrade.index.step_extract'] = 'Mengekstrak file';
$lang['AdminSystemUpgrade.index.step_verify'] = 'Verifikasi integritas';
$lang['AdminSystemUpgrade.index.step_download'] = 'Unduh rilis';
$lang['AdminSystemUpgrade.index.step_backup_files'] = 'Pencadangan file';
$lang['AdminSystemUpgrade.index.step_backup_db'] = 'Pencadangan basis data';
$lang['AdminSystemUpgrade.index.step_maintenance'] = 'Mengaktifkan mode pemeliharaan';
$lang['AdminSystemUpgrade.index.step_preflight'] = 'Pemeriksaan pra-penerbangan';
$lang['AdminSystemUpgrade.index.heading_progress'] = 'Kemajuan Peningkatan';
$lang['AdminSystemUpgrade.index.select_version'] = 'Pilih versi yang akan ditingkatkan:';
$lang['AdminSystemUpgrade.index.upgrade_warning'] = 'Ini akan mengaktifkan mode pemeliharaan, membuat cadangan, mengunduh dan menginstal versi baru, serta menjalankan migrasi basis data. Proses ini tidak dapat dihentikan setelah dimulai.';
$lang['AdminSystemUpgrade.index.btn_upgrade'] = 'Tingkatkan Sekarang';
$lang['AdminSystemUpgrade.index.clean_stale_files_note'] = 'Menghapus file di direktori inti yang tidak ada di manifes rilis baru. Biarkan tidak dicentang kecuali jika Anda yakin tidak ada file khusus yang ada di direktori inti.';
$lang['AdminSystemUpgrade.index.clean_stale_files'] = 'Menghapus file inti yang sudah basi setelah peningkatan';
$lang['AdminSystemUpgrade.index.skip_integrity_check'] = 'Lewati pemeriksaan integritas file';
$lang['AdminSystemUpgrade.index.no_support'] = 'Langganan dukungan &amp; pembaruan Anda tidak aktif. Hanya pembaruan tambalan yang tersedia.';
$lang['AdminSystemUpgrade.index.requires_support'] = 'Membutuhkan langganan dukungan &amp; pembaruan aktif.';
$lang['AdminSystemUpgrade.index.changelog_link'] = 'Lihat Changelog';
$lang['AdminSystemUpgrade.index.release_date'] = 'Dirilis: %1$s';
$lang['AdminSystemUpgrade.index.upgrade_latest'] = 'Peningkatan Penuh: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.upgrade_patch'] = 'Pembaruan Patch: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.heading_available'] = 'Pembaruan yang Tersedia';
$lang['AdminSystemUpgrade.index.command_copied'] = 'Disalin';
$lang['AdminSystemUpgrade.index.btn_copy_command'] = 'Salin';
$lang['AdminSystemUpgrade.index.launch_failed_instruction'] = 'Jalankan perintah berikut ini melalui SSH (sebagai pengguna yang memiliki instalasi Blesta) untuk menyelesaikan peningkatan. Biarkan halaman ini terbuka - kemajuan akan terus diperbarui di sini sementara perintah berjalan.';
$lang['AdminSystemUpgrade.index.launch_failed_title'] = 'Peningkatan latar belakang tidak dimulai';
$lang['AdminSystemUpgrade.index.environment_badge_warn'] = 'Peringatan% 1 $ d';
$lang['AdminSystemUpgrade.index.environment_badge_fail'] = '%1$d gagal';
$lang['AdminSystemUpgrade.index.environment_fail'] = 'Beberapa pemeriksaan gagal. Selesaikan masalah di bawah ini sebelum melakukan upgrade.';
$lang['AdminSystemUpgrade.index.environment_pass'] = 'Semua pemeriksaan lulus. Sistem Anda siap untuk ditingkatkan sendiri.';
$lang['AdminSystemUpgrade.index.heading_environment'] = 'Status Lingkungan';
$lang['AdminSystemUpgrade.index.up_to_date'] = 'Instalasi Anda sudah diperbarui.';
$lang['AdminSystemUpgrade.index.btn_check'] = 'Periksa Pembaruan';
$lang['AdminSystemUpgrade.index.never_checked'] = 'Tidak pernah diperiksa';
$lang['AdminSystemUpgrade.index.last_checked'] = 'Terakhir diperiksa: %1$s';
$lang['AdminSystemUpgrade.index.current_version'] = 'Anda menjalankan Blesta %1$s';
$lang['AdminSystemUpgrade.index.heading_current'] = 'Versi saat ini';

