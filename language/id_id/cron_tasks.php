<?php
/**
 * Cron Tasks
 *
 * @package blesta
 * @subpackage blesta.language.id_id
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['CronTasks.crontask.description.delete_expired_password_reset_tokens'] = 'Menghapus semua token pengaturan ulang kata sandi yang telah melewati tanggal kedaluwarsa dari sistem.';
$lang['CronTasks.crontask.name.delete_expired_password_reset_tokens'] = 'Menghapus Token Pengaturan Ulang Kata Sandi yang Kedaluwarsa';
$lang['CronTasks.crontask.name.license_validation'] = 'Validasi Lisensi';
$lang['CronTasks.crontask.description.transition_quotations'] = 'Tandai kutipan yang melewati tanggal valid, sebagai kedaluwarsa';
$lang['CronTasks.crontask.name.transition_quotations'] = 'Kutipan Transisi';
$lang['CronTasks.crontask.description.unsuspend_services'] = 'Layanan yang ditangguhkan yang telah dibayarkan akan dibatalkan penangguhannya pada interval yang dipilih.';
$lang['CronTasks.crontask.name.unsuspend_services'] = 'Layanan Penghentian Penangguhan';
$lang['CronTasks.crontask.description.cleanup_logs'] = 'Gateway, modul, dan log lama akan dirotasi setiap hari tergantung pada pengaturan retensi pada waktu yang ditentukan.';
$lang['CronTasks.crontask.name.cleanup_logs'] = 'Bersihkan Log';
$lang['CronTasks.crontask.description.deliver_reports'] = 'A/R, Pembuatan Faktur, Kewajiban Pajak, dan laporan lainnya akan dikirimkan setiap hari pada waktu yang ditentukan.';
$lang['CronTasks.crontask.name.deliver_reports'] = 'Menyampaikan Laporan';
$lang['CronTasks.crontask.description.exchange_rates'] = 'Nilai tukar akan diperbarui pada interval yang ditentukan. Tidak disarankan untuk menjalankannya lebih dari dua kali sehari karena berisiko diblokir.';
$lang['CronTasks.crontask.name.exchange_rates'] = 'Pembaruan Nilai Tukar';
$lang['CronTasks.crontask.description.suspend_services'] = 'Layanan yang telah lewat jatuh tempo akan ditangguhkan setiap hari pada waktu yang ditentukan.';
$lang['CronTasks.crontask.name.suspend_services'] = 'Menangguhkan Layanan';
$lang['CronTasks.crontask.description.backups_sftp'] = 'Pencadangan SFTP dijadwalkan di bawah Pengaturan Sistem > Cadangan > FTP Aman.';
$lang['CronTasks.crontask.name.backups_sftp'] = 'Pencadangan SFTP';
$lang['CronTasks.crontask.description.backups_amazons3'] = 'Pencadangan Amazon S3 dijadwalkan di bawah Pengaturan Sistem > Cadangan > Amazon S3.';
$lang['CronTasks.crontask.name.backups_amazons3'] = 'Pencadangan Amazon S3';
$lang['CronTasks.crontask.description.deliver_invoices'] = 'Faktur yang dijadwalkan untuk dikirim akan dikirim pada interval yang dipilih.';
$lang['CronTasks.crontask.name.deliver_invoices'] = 'Mengirimkan Faktur';
$lang['CronTasks.crontask.description.card_expiration_reminders'] = 'Pengingat akan dikirimkan pada tanggal 15 setiap bulannya untuk kartu kredit yang akan berakhir pada bulan tersebut pada waktu yang ditentukan.';
$lang['CronTasks.crontask.name.card_expiration_reminders'] = 'Pengingat Masa Berlaku Kartu Tanggal 15 Setiap Bulan';
$lang['CronTasks.crontask.description.cancel_scheduled_services'] = 'Layanan dengan tanggal pembatalan yang ditetapkan di masa mendatang akan dihapus pada interval yang dipilih.';
$lang['CronTasks.crontask.name.cancel_scheduled_services'] = 'Membatalkan Layanan Terjadwal';
$lang['CronTasks.crontask.description.provision_pending_services'] = 'Layanan tertunda berbayar diaktifkan pada interval yang dipilih.';
$lang['CronTasks.crontask.name.provision_pending_services'] = 'Layanan Tertunda yang Dibayar Penyediaan';
$lang['CronTasks.crontask.description.process_renewing_services'] = 'Layanan perpanjangan yang dilekatkan pada modul diperbarui pada interval yang dipilih.';
$lang['CronTasks.crontask.name.process_renewing_services'] = 'Proses Pembaruan Layanan';
$lang['CronTasks.crontask.description.process_service_changes'] = 'Perubahan antrean layanan berbayar (misalnya peningkatan) diproses pada interval yang dipilih.';
$lang['CronTasks.crontask.name.process_service_changes'] = 'Proses Perubahan Layanan';
$lang['CronTasks.crontask.description.apply_payments'] = 'Kredit lepas diterapkan untuk membuka faktur secara otomatis pada interval yang dipilih.';
$lang['CronTasks.crontask.name.apply_payments'] = 'Menerapkan Pembayaran ke Faktur Terbuka';
$lang['CronTasks.crontask.description.payment_reminders'] = 'Pengingat pembayaran dan pemberitahuan keterlambatan dikirim setiap hari pada waktu yang ditentukan.';
$lang['CronTasks.crontask.name.payment_reminders'] = 'Pengingat Pembayaran';
$lang['CronTasks.crontask.description.autodebit'] = 'Rekening pembayaran yang dipilih untuk autodebet akan dijalankan untuk melunasi faktur terbuka setiap hari pada waktu yang ditentukan.';
$lang['CronTasks.crontask.name.autodebit'] = 'Debit Otomatis';
$lang['CronTasks.crontask.description.apply_invoice_late_fees'] = 'Menerapkan biaya keterlambatan untuk membuka faktur dalam jumlah tertentu setelah jatuh tempo.';
$lang['CronTasks.crontask.name.apply_invoice_late_fees'] = 'Terapkan Biaya Keterlambatan Faktur';
$lang['CronTasks.crontask.description.create_invoice'] = 'Faktur berulang dan layanan pembaruan ditagih melalui tugas ini, yang berjalan sekali setiap hari pada waktu yang ditentukan.';
$lang['CronTasks.crontask.name.create_invoice'] = 'Buat Faktur';
$lang['CronTasks.task_type.module'] = 'Modul';
$lang['CronTasks.task_type.plugin'] = 'Plugin';
$lang['CronTasks.task_type.system'] = 'Sistem';
$lang['CronTasks.!error.type.format'] = 'Jenis tugas cron tidak valid. Harus berupa waktu atau interval.';
$lang['CronTasks.!error.time.format'] = 'Waktu dalam format yang tidak valid.';
$lang['CronTasks.!error.interval.format'] = 'Interval harus berupa angka, yang mewakili menit.';
$lang['CronTasks.!error.enabled.length'] = 'Panjang yang diaktifkan tidak boleh melebihi 1 karakter.';
$lang['CronTasks.!error.enabled.format'] = 'diaktifkan harus berupa angka.';
$lang['CronTasks.!error.is_lang.length'] = 'Panjang is_lang tidak boleh lebih dari 1 karakter.';
$lang['CronTasks.!error.is_lang.format'] = 'is_lang harus berupa angka.';
$lang['CronTasks.!error.name.empty'] = 'Silakan masukkan nama.';
$lang['CronTasks.!error.id.exists'] = 'ID tugas cron tidak valid.';
$lang['CronTasks.!error.run_id.exists'] = 'ID menjalankan tugas cron tidak valid.';
$lang['CronTasks.!error.dir.length'] = 'Panjang direktori tidak boleh lebih dari 64 karakter.';
$lang['CronTasks.!error.task_type.format'] = 'Jenis tugas tidak valid. Harus berupa modul, plugin, atau sistem.';
$lang['CronTasks.!error.key.length'] = 'Panjang kunci tugas cron tidak boleh melebihi 64 karakter.';
$lang['CronTasks.!error.key.unique'] = 'Kunci tugas cron yang disediakan sudah diambil.';
$lang['CronTasks.crontask.description.low_balance_notifications'] = 'Mengirimkan pemberitahuan kepada semua pengguna yang tingkat kreditnya telah berada di bawah ambang batas yang telah dikonfigurasikan.';
$lang['CronTasks.crontask.name.low_balance_notifications'] = 'Pemberitahuan Saldo Rendah';

