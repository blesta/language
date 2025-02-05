<?php
/**
 * Form Rules
 *
 * @package blesta
 * @subpackage blesta.language.id_id
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['FormRules.nonmerchantfields.fields[][label].empty'] = 'Masukkan label untuk setiap bidang.';
$lang['FormRules.nonmerchantfields.fields[][name].format'] = 'Masukkan nama untuk setiap bidang dalam format snake_case_name.';
$lang['FormRules.nonmerchantfields.fields[][type].valid'] = 'Satu atau beberapa field memiliki tipe yang tidak valid.';
$lang['FormRules.nonmerchantbasic.currencies.format'] = 'Masukkan mata uang dalam format tiga karakter yang dipisahkan dengan koma (misal: USD, EUR, JPY).';
$lang['FormRules.nonmerchantbasic.authors[][name].empty'] = 'Silakan masukkan nama untuk setiap penulis.';
$lang['FormRules.merchantfields.fields[][type].valid'] = 'Satu atau beberapa field memiliki tipe yang tidak valid.';
$lang['FormRules.merchantfields.fields[][label].empty'] = 'Masukkan label untuk setiap bidang.';
$lang['FormRules.merchantfields.fields[][name].format'] = 'Masukkan nama untuk setiap bidang dalam format snake_case_name.';
$lang['FormRules.merchantbasic.currencies.format'] = 'Masukkan mata uang dalam format tiga karakter yang dipisahkan dengan koma (misal: USD, EUR, JPY).';
$lang['FormRules.merchantbasic.authors[][name].empty'] = 'Silakan masukkan nama untuk setiap penulis.';
$lang['FormRules.pluginintegrations.cards[][label].empty'] = 'Masukkan label untuk setiap kartu.';
$lang['FormRules.pluginintegrations.cards[][callback].format'] = 'Masukkan metode pemanggilan balik untuk setiap kartu dalam format camelCaseName.';
$lang['FormRules.pluginintegrations.cards[][level].valid'] = 'Satu atau beberapa kartu memiliki level yang tidak valid.';
$lang['FormRules.pluginintegrations.events[][callback].format'] = 'Masukkan metode callback untuk setiap peristiwa dalam format camelCaseName.';
$lang['FormRules.pluginintegrations.events[][event].empty'] = 'Masukkan nama acara untuk setiap acara.';
$lang['FormRules.pluginintegrations.actions[][name].empty'] = 'Masukkan nama untuk setiap tindakan.';
$lang['FormRules.pluginintegrations.actions[][action].format'] = 'Masukkan tindakan untuk setiap tindakan dengan huruf kecil semua.';
$lang['FormRules.pluginintegrations.actions[][controller].format'] = 'Masukkan pengendali untuk setiap tindakan dalam format snake_case_name.';
$lang['FormRules.pluginintegrations.actions[][location].valid'] = 'Masukkan lokasi tindakan yang valid.';
$lang['FormRules.plugindatabase.tables[][columns][][primary].valid'] = 'Primary harus diatur ke true atau false untuk setiap kolom.';
$lang['FormRules.plugindatabase.tables[][columns][][nullable].valid'] = 'Nullable harus disetel ke true atau false untuk setiap kolom.';
$lang['FormRules.plugindatabase.tables[][columns][][length].empty'] = 'Panjangnya harus dalam format \'a\',\'b\',\'c\' untuk kolom enum, kosong untuk kolom teks dan datetime, dan numerik untuk yang lainnya.';
$lang['FormRules.plugindatabase.tables[][columns][][type].valid'] = 'Satu atau beberapa kolom memiliki tipe yang tidak valid.';
$lang['FormRules.plugindatabase.tables[][columns][][name].format'] = 'Masukkan nama metode untuk setiap kolom dalam format snake_case_name.';
$lang['FormRules.plugindatabase.tables[][name].format'] = 'Masukkan nama metode untuk setiap tabel dalam format snake_case_name.';
$lang['FormRules.pluginbasic.authors[][name].empty'] = 'Silakan masukkan nama untuk setiap penulis.';
$lang['FormRules.modulefeatures.cron_tasks[][time].format'] = 'Masukkan waktu dalam format 00:00 atau interval numerik.';
$lang['FormRules.modulefeatures.cron_tasks[][type].valid'] = 'Satu atau lebih tugas cron memiliki tipe yang tidak valid.';
$lang['FormRules.modulefeatures.cron_tasks[][label].empty'] = 'Masukkan label untuk setiap tugas cron.';
$lang['FormRules.modulefeatures.cron_tasks[][name].format'] = 'Masukkan nama metode untuk setiap tugas cron dalam format snake_case_name.';
$lang['FormRules.modulefeatures.service_tabs[][level].valid'] = 'Satu atau beberapa tab layanan memiliki level yang tidak valid.';
$lang['FormRules.modulefeatures.service_tabs[][label].empty'] = 'Masukkan label untuk setiap tab layanan.';
$lang['FormRules.modulefeatures.service_tabs[][method_name].format'] = 'Masukkan nama metode untuk setiap tab layanan dalam format camelCaseName.';
$lang['FormRules.modulefields.package_fields[][name_key].valid'] = 'Apakah akan mengatur bidang paket sebagai kunci nama harus diatur ke true atau false.';
$lang['FormRules.modulefields.package_fields[][type].valid'] = 'Satu atau lebih bidang paket memiliki tipe yang tidak valid.';
$lang['FormRules.modulefields.package_fields[][label].empty'] = 'Masukkan label untuk setiap bidang paket.';
$lang['FormRules.modulefields.package_fields[][name].format'] = 'Masukkan nama untuk setiap bidang paket dalam format snake_case_name.';
$lang['FormRules.modulefields.service_fields[][name_key].valid'] = 'Apakah akan menetapkan bidang layanan sebagai kunci nama harus ditetapkan ke true atau false.';
$lang['FormRules.modulefields.service_fields[][type].valid'] = 'Satu atau beberapa bidang layanan memiliki tipe yang tidak valid.';
$lang['FormRules.modulefields.service_fields[][label].empty'] = 'Masukkan label untuk setiap bidang layanan.';
$lang['FormRules.modulefields.service_fields[][name].format'] = 'Masukkan nama untuk setiap bidang layanan dalam format snake_case_name.';
$lang['FormRules.modulefields.module_rows[][name_key].valid'] = 'Apakah akan mengatur bidang baris modul sebagai kunci nama harus diatur ke true atau false.';
$lang['FormRules.modulefields.module_rows[][type].valid'] = 'Satu atau beberapa baris modul memiliki tipe yang tidak valid.';
$lang['FormRules.modulefields.module_rows[][label].empty'] = 'Masukkan label untuk setiap bidang baris modul.';
$lang['FormRules.modulefields.module_rows[][name].format'] = 'Masukkan nama untuk setiap bidang baris modul dalam format snake_case_name.';
$lang['FormRules.modulebasic.authors[][name].empty'] = 'Silakan masukkan nama untuk setiap penulis.';
$lang['FormRules.modulebasic.module_group.empty'] = 'Masukkan label grup modul.';
$lang['FormRules.modulebasic.module_row_plural.empty'] = 'Harap tambahkan nama baris modul jamak.';
$lang['FormRules.modulebasic.module_row.empty'] = 'Masukkan nama baris modul.';
$lang['FormRules.general.name.format'] = 'Nama ekstensi hanya boleh berisi karakter alfa_numerik, garis bawah, dan spasi.';

