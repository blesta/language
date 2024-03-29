<?php
/**
 * Admin System Backup
 *
 * @package blesta
 * @subpackage blesta.language.id_id
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemBackup.index.text_note'] = 'Di sini Anda bisa mengunduh cadangan basis data Blesta ke komputer Anda atau secara otomatis mengunggah cadangan ke server SFTP dan/atau Amazon S3 yang telah dikonfigurasi.';
$lang['AdminSystemBackup.index.field_downloadbackup'] = 'Unduh Cadangan';
$lang['AdminSystemBackup.index.field_uploadbackup'] = 'Paksa Pencadangan di Luar Lokasi';
$lang['AdminSystemBackup.index.boxtitle_index'] = 'Sesuai Permintaan';
$lang['AdminSystemBackup.index.page_title'] = 'Pengaturan > Sistem > Cadangan > Sesuai Permintaan';
$lang['AdminSystemBackup.amazon.field.backupsubmit'] = 'Memperbarui Pengaturan';
$lang['AdminSystemBackup.amazon.field.amazons3_rate'] = 'Cadangkan Setiap';
$lang['AdminSystemBackup.amazon.field.amazons3_bucket'] = 'Ember';
$lang['AdminSystemBackup.amazon.field.amazons3_secretkey'] = 'Kunci Rahasia';
$lang['AdminSystemBackup.amazon.field.amazons3_accesskey'] = 'Kunci Akses';
$lang['AdminSystemBackup.amazon.field.amazons3_region'] = 'Wilayah';
$lang['AdminSystemBackup.amazon.field.test'] = 'Uji Pengaturan Ini';
$lang['AdminSystemBackup.amazon.boxtitle_backup'] = 'Amazon S3';
$lang['AdminSystemBackup.amazon.page_title'] = 'Pengaturan > Sistem > Cadangan > Amazon S3';
$lang['AdminSystemBackup.ftp.field.backupsubmit'] = 'Memperbarui Pengaturan';
$lang['AdminSystemBackup.ftp.field.ftp_rate'] = 'Cadangkan Setiap';
$lang['AdminSystemBackup.ftp.field.ftp_path'] = 'Path';
$lang['AdminSystemBackup.ftp.field.ftp_password'] = 'Kata sandi';
$lang['AdminSystemBackup.ftp.field.ftp_username'] = 'Nama pengguna';
$lang['AdminSystemBackup.ftp.field.ftp_port'] = 'Pelabuhan';
$lang['AdminSystemBackup.ftp.field.ftp_host'] = 'Nama host';
$lang['AdminSystemBackup.ftp.field.test'] = 'Uji Pengaturan Ini';
$lang['AdminSystemBackup.ftp.boxtitle_backup'] = 'FTP yang aman';
$lang['AdminSystemBackup.ftp.page_title'] = 'Pengaturan > Sistem > Cadangan > FTP Aman';
$lang['AdminSystemBackup.!tooltip.amazons3_rate'] = 'Interval frekuensi untuk melakukan pencadangan ini.';
$lang['AdminSystemBackup.!tooltip.amazons3_bucket'] = 'Nama bucket Amazon S3 yang peka huruf besar-kecil untuk menyimpan cadangan.';
$lang['AdminSystemBackup.!tooltip.amazons3_secret_key'] = 'Kunci Rahasia akun Amazon S3.';
$lang['AdminSystemBackup.!tooltip.amazons3_access_key'] = 'Kunci Akses akun Amazon S3.';
$lang['AdminSystemBackup.!tooltip.amazons3_region'] = 'Wilayah Amazon S3 tempat menyimpan cadangan.';
$lang['AdminSystemBackup.!tooltip.ftp_rate'] = 'Interval frekuensi untuk melakukan pencadangan ini.';
$lang['AdminSystemBackup.!tooltip.ftp_path'] = 'Jalur tujuan di mana cadangan harus disimpan di server jarak jauh (mis. "/backup/").';
$lang['AdminSystemBackup.!tooltip.ftp_password'] = 'Kata sandi untuk akun FTP.';
$lang['AdminSystemBackup.!tooltip.ftp_username'] = 'Nama pengguna untuk akun FTP.';
$lang['AdminSystemBackup.!tooltip.ftp_port'] = 'Nomor port, biasanya 22. Ini adalah nomor port yang sama dengan yang digunakan untuk SSH.';
$lang['AdminSystemBackup.!tooltip.ftp_host'] = 'Nama domain server cadangan yang memenuhi syarat (misalnya "backup.domain.com").';
$lang['AdminSystemBackup.!error.backup_frequency'] = 'Frekuensi pencadangan tidak valid.';
$lang['AdminSystemBackup.!error.amazons3_test'] = 'Koneksi AmazonS3 gagal! Periksa pengaturan Anda dan coba lagi. Perhatikan bahwa detail koneksi peka terhadap huruf besar/kecil.';
$lang['AdminSystemBackup.!error.sftp_test'] = 'Koneksi SFTP gagal! Periksa pengaturan Anda dan coba lagi.';
$lang['AdminSystemBackup.!success.backup_uploaded'] = 'Cadangan berhasil dikirim ke layanan jarak jauh yang dikonfigurasi!';
$lang['AdminSystemBackup.!success.amazons3_test'] = 'Koneksi AmazonS3 berhasil!';
$lang['AdminSystemBackup.!success.sftp_test'] = 'Koneksi SFTP berhasil!';
$lang['AdminSystemBackup.!success.backup_updated'] = 'Pengaturan Cadangan berhasil diperbarui!';

