<?php
/**
 * Packages
 *
 * @package blesta
 * @subpackage blesta.language.id_id
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Packages.!error.manual_activation.valid'] = 'Aktivasi manual harus bernilai 1 atau 0.';
$lang['Packages.getStatusTypes.restricted'] = 'Dibatasi';
$lang['Packages.getStatusTypes.inactive'] = 'Tidak aktif';
$lang['Packages.getStatusTypes.active'] = 'Aktif';
$lang['Packages.getPricingPeriods.onetime_plural'] = 'Satu kali';
$lang['Packages.getPricingPeriods.year_plural'] = 'Tahun';
$lang['Packages.getPricingPeriods.month_plural'] = 'Bulan';
$lang['Packages.getPricingPeriods.week_plural'] = 'Minggu';
$lang['Packages.getPricingPeriods.day_plural'] = 'Hari';
$lang['Packages.getPricingPeriods.onetime'] = 'Satu kali';
$lang['Packages.getPricingPeriods.year'] = 'Tahun';
$lang['Packages.getPricingPeriods.month'] = 'Bulan';
$lang['Packages.getPricingPeriods.week'] = 'Minggu';
$lang['Packages.getPricingPeriods.day'] = 'Hari';
$lang['Packages.!error.groups[].valid'] = 'Grup paket yang dipilih bukan milik perusahaan yang diberikan.';
$lang['Packages.!error.groups[].exists'] = 'ID grup paket tidak valid.';
$lang['Packages.!error.pricing[][id].deletable'] = 'Istilah ini tidak dapat dihapus karena digunakan oleh satu atau beberapa layanan.';
$lang['Packages.!error.pricing[][id].format'] = 'ID harga paket tidak valid.';
$lang['Packages.!error.pricing[][currency].in_use'] = 'Mata uang tidak dapat diperbarui dalam harga yang sedang digunakan.';
$lang['Packages.!error.pricing[][currency].format'] = 'Kode mata uang harus terdiri dari 3 karakter.';
$lang['Packages.!error.pricing[][cancel_fee].format'] = 'Biaya pembatalan harus berupa angka.';
$lang['Packages.!error.pricing[][setup_fee].format'] = 'Biaya penyiapan harus berupa angka.';
$lang['Packages.!error.pricing[][price_transfer].format'] = 'Harga transfer harus berupa angka.';
$lang['Packages.!error.pricing[][price_renews].valid'] = 'Harga perpanjangan tidak dapat ditetapkan untuk satu periode.';
$lang['Packages.!error.pricing[][price_renews].format'] = 'Harga perpanjangan harus berupa angka.';
$lang['Packages.!error.pricing[][price].format'] = 'Harga harus berupa angka.';
$lang['Packages.!error.pricing[][period].in_use'] = 'Periode tidak dapat diperbarui dalam harga yang sedang digunakan.';
$lang['Packages.!error.pricing[][period].format'] = 'Jenis periode tidak valid.';
$lang['Packages.!error.pricing[][term].in_use'] = 'Jangka waktu tidak dapat diperbarui dalam harga yang sedang digunakan.';
$lang['Packages.!error.pricing[][term].valid'] = 'Jangka waktu harus lebih besar dari 0.';
$lang['Packages.!error.pricing[][term].length'] = 'Panjang istilah tidak boleh melebihi 5 karakter.';
$lang['Packages.!error.pricing[][term].format'] = 'Istilah harus berupa angka.';
$lang['Packages.!error.email_content.parse'] = 'Kesalahan penguraian templat: %1$s';
$lang['Packages.!error.email_content[][lang].length'] = 'Panjang bahasa tidak boleh lebih dari 5 karakter.';
$lang['Packages.!error.email_content[][lang].empty'] = 'Silakan masukkan bahasa.';
$lang['Packages.!error.prorata_cutoff.format'] = 'Hari batas waktu rata-rata harus antara 1 dan 28.';
$lang['Packages.!error.prorata_day.format'] = 'Hari rata-rata harus antara 1 dan 28.';
$lang['Packages.!error.hidden.format'] = 'Apakah grup ini harus disembunyikan di antarmuka, harus ditetapkan ke 1 atau 0.';
$lang['Packages.!error.status.format'] = 'Status tidak valid.';
$lang['Packages.!error.upgrades_use_renewal.valid'] = 'Harga perpanjangan penggunaan untuk peningkatan harus 1 atau 0.';
$lang['Packages.!error.override_price.valid'] = 'Menetapkan harga paket sebagai harga penggantian harus 1 atau 0.';
$lang['Packages.!error.single_term.valid'] = 'Istilah tunggal harus berupa 1 atau 0.';
$lang['Packages.!error.taxable.length'] = 'Panjang kena pajak tidak boleh melebihi 1 karakter.';
$lang['Packages.!error.taxable.format'] = 'Yang kena pajak harus berupa angka.';
$lang['Packages.!error.module_group_client.valid'] = 'Izinkan Klien untuk Memilih Grup harus bernilai 1 atau 0.';
$lang['Packages.!error.module_group.format'] = 'Kelompok modul yang diberikan tidak valid.';
$lang['Packages.!error.module_row.format'] = 'Baris modul yang diberikan tidak valid.';
$lang['Packages.!error.plugins[].valid'] = 'Plugin yang diberikan tidak valid.';
$lang['Packages.!error.option_groups[].valid'] = 'Grup opsi paket yang dapat dikonfigurasi yang diberikan tidak valid.';
$lang['Packages.!error.client_qty.format'] = 'Batas klien harus berupa angka.';
$lang['Packages.!error.qty.format'] = 'Kuantitas harus berupa angka.';
$lang['Packages.!error.descriptions.empty_lang'] = 'Harap tentukan kode bahasa paket untuk setiap deskripsi.';
$lang['Packages.!error.descriptions.format'] = 'Deskripsi paket dalam format yang tidak valid.';
$lang['Packages.!error.names.empty_lang'] = 'Tentukan kode bahasa paket untuk setiap nama.';
$lang['Packages.!error.names.empty_name'] = 'Harap tentukan nama paket untuk setiap bahasa.';
$lang['Packages.!error.names.format'] = 'Nama paket dalam format yang tidak valid.';
$lang['Packages.!error.module_id.changed'] = 'Modul tidak dapat diubah karena ada satu atau beberapa layanan yang sudah menggunakan paket ini.';
$lang['Packages.!error.module_id.exists'] = 'Modul yang diberikan tidak valid.';
$lang['Packages.!error.package_id.has_children'] = 'Paket tidak dapat dihapus karena layanan memiliki layanan anak.';
$lang['Packages.!error.package_id.exists'] = 'Paket tidak dapat dihapus karena ada layanan yang sedang menggunakannya.';
$lang['Packages.!error.company_id.exists'] = 'Perusahaan yang diberikan tidak valid.';

