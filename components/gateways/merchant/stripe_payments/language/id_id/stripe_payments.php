<?php
/**
 * Stripe Payments
 *
 * @package blesta
 * @subpackage blesta.language.id_id
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['StripePayments.!error.ach.invalid_account'] = 'Rekening bank untuk nasabah ini tidak dapat ditemukan.';
$lang['StripePayments.!error.ach.unverified'] = 'Rekening bank tersebut tidak dapat diverifikasi. Mohon periksa kembali jumlah setoran dan coba lagi.';
$lang['StripePayments.!error.auth'] = 'Gateway tidak dapat melakukan autentikasi.';
$lang['StripePayments.!error.bank_account_unverified'] = 'Anda perlu memverifikasi rekening bank Anda sebelum menggunakannya untuk melakukan pembayaran.';
$lang['StripePayments.!error.india_mandate_max_amount.format'] = 'Silakan masukkan jumlah yang sah untuk biaya berulang maksimum.';
$lang['StripePayments.!error.invalid_request_error'] = 'Gerbang pembayaran mengembalikan kesalahan saat memproses permintaan.';
$lang['StripePayments.!error.publishable_key.empty'] = 'Masukkan Kunci yang Dapat Dipublikasikan.';
$lang['StripePayments.!error.secret_key.empty'] = 'Silakan masukkan Kunci Rahasia.';
$lang['StripePayments.!error.secret_key.valid'] = 'Tidak dapat terhubung ke API Stripe menggunakan Kunci Rahasia yang diberikan.';
$lang['StripePayments.ach_form.field_account_number'] = 'Nomor Rekening';
$lang['StripePayments.ach_form.field_first_deposit'] = 'Setoran Pertama';
$lang['StripePayments.ach_form.field_holder_type'] = 'Jenis Pemegang';
$lang['StripePayments.ach_form.field_holder_type_company'] = 'Perusahaan';
$lang['StripePayments.ach_form.field_holder_type_individual'] = 'Individu';
$lang['StripePayments.ach_form.field_routing_number'] = 'Nomor Rute';
$lang['StripePayments.ach_form.field_second_deposit'] = 'Setoran Kedua';
$lang['StripePayments.ach_form.field_type'] = 'Jenis Akun';
$lang['StripePayments.ach_form.mandate_authorization'] = 'Dengan mengirimkan formulir ini, Anda memberi wewenang kepada %1$s untuk mendebit rekening bank yang disebutkan di atas untuk jumlah yang terhutang atas biaya yang timbul dari penggunaan layanan %1$s dan/atau pembelian produk dari %1$s, sesuai dengan situs web dan persyaratan %1$s, sampai otorisasi ini dicabut. Anda dapat mengubah atau membatalkan otorisasi ini kapan saja dengan memberikan pemberitahuan kepada %1$s dengan pemberitahuan 30 (tiga puluh) hari sebelumnya.';
$lang['StripePayments.ach_form.mandate_future_usage'] = 'Jika Anda menggunakan layanan %1$s atau membeli produk tambahan secara berkala sesuai dengan ketentuan yang tercantum di %1$s, Anda memberikan wewenang kepada %1$s untuk mendebit rekening bank Anda secara berkala. Pembayaran yang tidak termasuk dalam penarikan rutin yang telah Anda izinkan di atas hanya akan didebit setelah izin Anda diperoleh.';
$lang['StripePayments.ach_form.verification_notice'] = 'Rekening bank yang saat ini terdaftar belum diverifikasi. Jika Anda memasukkan detail rekening bank baru di bawah ini, detail tersebut akan menggantikan yang lama.';
$lang['StripePayments.charge_description'] = 'Biaya untuk %1$s';
$lang['StripePayments.charge_description_default'] = 'Biaya untuk jumlah tertentu';
$lang['StripePayments.description'] = 'Menggunakan Elemen Stripe dan API Permintaan Pembayaran untuk secara otomatis menangani 3D Secure dan SCA untuk mengirim kartu kredit secara langsung melalui Stripe';
$lang['StripePayments.heading_migrate_accounts'] = 'Migrasi Akun Pembayaran Lama';
$lang['StripePayments.india_mandate_max_amount'] = 'Jumlah Tagihan Berulang Maksimum (India)';
$lang['StripePayments.india_mandate_max_amount_note'] = 'Diperlukan untuk mengaktifkan penagihan berulang otomatis untuk kartu yang diterbitkan di India. Ini adalah jumlah maksimum yang dapat ditagihkan ke kartu tersebut dalam setiap transaksi pembayaran di luar sesi di masa mendatang, dalam mata uang yang sedang diproses. Biarkan kosong untuk mengizinkan kartu India disimpan tanpa mendaftar untuk penagihan berulang otomatis.';
$lang['StripePayments.migrate_accounts'] = 'Migrasi Akun';
$lang['StripePayments.name'] = 'Stripe Payments';
$lang['StripePayments.publishable_key'] = 'Kunci yang Dapat Dipublikasikan API';
$lang['StripePayments.request_three_d_secure'] = 'Alur Otentikasi Aman 3D';
$lang['StripePayments.request_three_d_secure_automatic'] = 'Izinkan Stripe untuk menentukan kapan harus memberikan tantangan 3D Secure';
$lang['StripePayments.request_three_d_secure_challenge'] = 'Menyajikan tantangan 3D Secure setiap kali klien menyimpan metode pembayaran atau memproses metode pembayaran (tersimpan atau tidak tersimpan)';
$lang['StripePayments.request_three_d_secure_frictionless'] = 'Hadirkan tantangan 3D Secure setiap kali klien menyimpan metode pembayaran atau memproses metode pembayaran yang tidak disimpan';
$lang['StripePayments.request_three_d_secure_note'] = 'Jika Anda adalah pengguna Stripe yang berbasis di India, sebelum menyimpan kartu baru dengan Stripe, Anda harus selalu melakukan autentikasi 3D Secure (3DS).';
$lang['StripePayments.secret_key'] = 'Kunci Rahasia API';
$lang['StripePayments.text_accounts_remaining'] = 'Sisa Rekening: %1$s';
$lang['StripePayments.text_migrate_accounts'] = 'Anda dapat secara otomatis memigrasikan akun pembayaran yang disimpan di luar lokasi oleh gateway Stripe yang lama ke gateway Pembayaran Stripe ini. Akun yang tidak disimpan di luar lokasi harus dimigrasi dengan membuat akun pembayaran baru secara manual. Untuk mencegah timeout, migrasi akan dilakukan dalam batch %1$s. Jalankan proses ini sebanyak yang diperlukan untuk memigrasi semua akun pembayaran.';
$lang['StripePayments.tooltip_india_mandate_max_amount'] = 'Sesuai peraturan RBI, untuk transaksi berulang (di luar jam operasional) yang menggunakan kartu India dengan nilai di atas jumlah ini, pelanggan diharuskan melakukan otentikasi pembayaran secara terpisah.';
$lang['StripePayments.tooltip_publishable_key'] = 'API Publishable Key Anda dikhususkan untuk mode live atau uji coba. Pastikan Anda menggunakan kunci yang benar.';
$lang['StripePayments.tooltip_secret_key'] = 'Kunci Rahasia API Anda khusus untuk mode live atau uji coba. Pastikan Anda menggunakan kunci yang benar.';
$lang['StripePayments.warning_migrate_accounts'] = 'Jangan hapus instalasi gateway Stripe lama hingga Anda selesai menggunakan alat migrasi ini. Melakukan hal tersebut akan membuat alat ini tidak dapat diakses.';
$lang['StripePayments.webhook'] = 'Stripe Webhook';
$lang['StripePayments.webhook_note'] = 'Disarankan untuk mengonfigurasi url berikut ini sebagai Webhook untuk peristiwa "payment_intent" dan "charge" di akun Stripe Anda.';

