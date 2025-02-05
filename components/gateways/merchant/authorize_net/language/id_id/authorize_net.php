<?php
/**
 * Authorize Net
 *
 * @package blesta
 * @subpackage blesta.language.id_id
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Authorize_net.!error.card_number.missing'] = 'Tanggal kedaluwarsa tidak dapat diperbarui tanpa nomor kartu yang lengkap.';
$lang['Authorize_net.!error.dev_mode.valid'] = 'Mode pengembang harus diatur ke "true" jika diberikan.';
$lang['Authorize_net.!error.test_mode.valid'] = 'Mode uji harus ditetapkan ke "true" jika diberikan.';
$lang['Authorize_net.!error.transaction_key.format'] = 'Kunci transaksi harus terdiri dari 16 karakter.';
$lang['Authorize_net.!error.login_id.format'] = 'ID Login tidak boleh lebih dari 20 karakter dan tidak boleh kosong.';
$lang['Authorize_net.validation_modes_live'] = 'Langsung';
$lang['Authorize_net.validation_modes_test'] = 'Tes';
$lang['Authorize_net.validation_modes_none'] = 'Tidak ada';
$lang['Authorize_net.validation_note'] = 'Ini mengontrol jenis validasi yang dilakukan ketika akun pembayaran disimpan menggunakan CIM. \'Tidak ada\' tidak melakukan validasi tambahan. \'Test\' mengeluarkan transaksi uji coba yang tidak muncul di laporan pelanggan tetapi akan menghasilkan email ke pedagang. \'Live\' memproses transaksi sebesar $0,00 atau $0,01 yang akan langsung dibatalkan. Konsultasikan dengan Penyedia Rekening Merchant Anda sebelum mengatur nilai ini ke \'Live\' karena Anda mungkin akan dikenakan biaya.';
$lang['Authorize_net.validation_mode'] = 'Mode Validasi Akun Pembayaran';
$lang['Authorize_net.apis_cim'] = 'CIM (harus diaktifkan oleh Authorize.Net)';
$lang['Authorize_net.apis_aim'] = 'AIM (default)';
$lang['Authorize_net.dev_mode_note'] = 'Mengaktifkan opsi ini akan mengirim transaksi ke lingkungan pengembang Authorize.net. Anda harus memiliki akun uji pengembang untuk menggunakan lingkungan ini.';
$lang['Authorize_net.dev_mode'] = 'Mode Pengembang';
$lang['Authorize_net.test_mode_note'] = 'Fitur mode uji coba hanya didukung oleh AIM. Untuk menguji transaksi CIM, Anda harus mengaktifkan mode uji coba dari dalam akun Authorize.net Anda.';
$lang['Authorize_net.test_mode'] = 'Mode Uji';
$lang['Authorize_net.api'] = 'API Pembayaran';
$lang['Authorize_net.transaction_key'] = 'Kunci Transaksi';
$lang['Authorize_net.login_id'] = 'ID Login';
$lang['Authorize_net.description'] = 'Pemrosesan kartu kredit dan ACH yang andal dan cepat';
$lang['Authorize_net.name'] = 'Authorize.Net';

