<?php
/**
 * Stripe Payments
 *
 * @package blesta
 * @subpackage blesta.language.id_id
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['StripePayments.!error.bank_account_unverified'] = 'Anda perlu memverifikasi rekening bank Anda sebelum menggunakannya untuk melakukan pembayaran.';
$lang['StripePayments.!error.secret_key.valid'] = 'Tidak dapat terhubung ke API Stripe menggunakan Kunci Rahasia yang diberikan.';
$lang['StripePayments.!error.secret_key.empty'] = 'Silakan masukkan Kunci Rahasia.';
$lang['StripePayments.!error.publishable_key.empty'] = 'Masukkan Kunci yang Dapat Dipublikasikan.';
$lang['StripePayments.charge_description'] = 'Biaya untuk% 1$s';
$lang['StripePayments.charge_description_default'] = 'Biaya untuk jumlah tertentu';
$lang['StripePayments.migrate_accounts'] = 'Migrasi Akun';
$lang['StripePayments.warning_migrate_accounts'] = 'Jangan hapus instalasi gateway Stripe lama hingga Anda selesai menggunakan alat migrasi ini. Melakukan hal tersebut akan membuat alat ini tidak dapat diakses.';
$lang['StripePayments.text_migrate_accounts'] = 'Anda dapat secara otomatis memigrasikan akun pembayaran yang disimpan di luar lokasi oleh gateway Stripe yang lama ke gateway Pembayaran Stripe ini. Akun yang tidak disimpan di luar lokasi harus dimigrasi dengan membuat akun pembayaran baru secara manual. Untuk mencegah timeout, migrasi akan dilakukan dalam batch %1$s. Jalankan proses ini sebanyak yang diperlukan untuk memigrasi semua akun pembayaran.';
$lang['StripePayments.text_accounts_remaining'] = 'Sisa Rekening: %1$s';
$lang['StripePayments.heading_migrate_accounts'] = 'Migrasi Akun Pembayaran Lama';
$lang['StripePayments.webhook_note'] = 'Disarankan untuk mengonfigurasi url berikut ini sebagai Webhook untuk peristiwa "payment_intent" di akun Stripe Anda.';
$lang['StripePayments.webhook'] = 'Stripe Webhook';
$lang['StripePayments.tooltip_secret_key'] = 'Kunci Rahasia API Anda khusus untuk mode live atau uji coba. Pastikan Anda menggunakan kunci yang benar.';
$lang['StripePayments.tooltip_publishable_key'] = 'API Publishable Key Anda dikhususkan untuk mode live atau uji coba. Pastikan Anda menggunakan kunci yang benar.';
$lang['StripePayments.secret_key'] = 'Kunci Rahasia API';
$lang['StripePayments.publishable_key'] = 'Kunci yang Dapat Dipublikasikan API';
$lang['StripePayments.ach_form.mandate_future_usage'] = 'Jika Anda menggunakan layanan %1$ atau membeli produk tambahan secara berkala sesuai dengan persyaratan %1$, Anda memberi wewenang kepada %1$ untuk mendebit rekening bank Anda secara berkala. Pembayaran yang berada di luar pendebetan reguler yang diotorisasi di atas hanya akan didebet setelah otorisasi Anda diperoleh.';
$lang['StripePayments.ach_form.mandate_authorization'] = 'Dengan mengirimkan formulir ini, Anda memberi wewenang kepada %1$s untuk mendebit rekening bank yang disebutkan di atas untuk jumlah yang terhutang atas biaya yang timbul dari penggunaan layanan %1$s dan/atau pembelian produk dari %1$s, sesuai dengan situs web dan persyaratan %1$s, sampai otorisasi ini dicabut. Anda dapat mengubah atau membatalkan otorisasi ini kapan saja dengan memberikan pemberitahuan kepada %1$s dengan pemberitahuan 30 (tiga puluh) hari sebelumnya.';
$lang['StripePayments.ach_form.field_second_deposit'] = 'Setoran Kedua';
$lang['StripePayments.ach_form.field_first_deposit'] = 'Setoran Pertama';
$lang['StripePayments.ach_form.verification_notice'] = 'Kami telah mengirimkan dua deposit kecil ke rekening bank ini. Untuk memverifikasi akun ini, mohon konfirmasi jumlah deposit ini.';
$lang['StripePayments.ach_form.field_routing_number'] = 'Nomor Rute';
$lang['StripePayments.ach_form.field_account_number'] = 'Nomor Rekening';
$lang['StripePayments.ach_form.field_holder_type_company'] = 'Perusahaan';
$lang['StripePayments.ach_form.field_holder_type_individual'] = 'Individu';
$lang['StripePayments.ach_form.field_holder_type'] = 'Jenis Pemegang';
$lang['StripePayments.!error.auth'] = 'Gateway tidak dapat melakukan autentikasi.';
$lang['StripePayments.ach_form.field_type'] = 'Jenis Akun';
$lang['StripePayments.description'] = 'Menggunakan Elemen Stripe dan API Permintaan Pembayaran untuk secara otomatis menangani 3D Secure dan SCA untuk mengirim kartu kredit secara langsung melalui Stripe';
$lang['StripePayments.!error.invalid_request_error'] = 'Gerbang pembayaran mengembalikan kesalahan saat memproses permintaan.';
$lang['StripePayments.name'] = 'Stripe Payments';

