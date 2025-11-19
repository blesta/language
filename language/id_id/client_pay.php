<?php
/**
 * Client Pay
 *
 * @package blesta
 * @subpackage blesta.language.id_id
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientPay.setcontactview.text_none'] = 'Tidak ada';
$lang['ClientPay.received.text_try_again'] = 'Coba Lagi';
$lang['ClientPay.received.invoices'] = 'Faktur #';
$lang['ClientPay.received.amount'] = 'Jumlah';
$lang['ClientPay.received.transaction_id'] = 'ID Transaksi';
$lang['ClientPay.received.statement'] = 'Pembayaran Anda sedang diproses.';
$lang['ClientPay.received.boxtitle_received'] = 'Terima kasih!';
$lang['ClientPay.received.page_title'] = 'Pembayaran Klien %1 $ yang Diterima';
$lang['ClientPay.confirm.description_credit'] = 'Kredit Pembayaran';
$lang['ClientPay.confirm.description_invoice_number'] = '#%1$s';
$lang['ClientPay.confirm.description_invoice_separator'] = ',';
$lang['ClientPay.confirm.description_invoice'] = 'Faktur #% 1 $ s';
$lang['ClientPay.confirm.field_edit'] = 'Edit Pembayaran';
$lang['ClientPay.confirm.field_submit'] = 'Kirim Pembayaran';
$lang['ClientPay.confirm.total'] = 'Total:';
$lang['ClientPay.confirm.account_exp'] = 'habis masa berlakunya %1$s';
$lang['ClientPay.confirm.account_info_type'] = '%1$s';
$lang['ClientPay.confirm.account_info'] = '%1$s (%2$s) yang diakhiri dengan %3$s';
$lang['ClientPay.confirm.payment_details'] = 'Rincian Pembayaran';
$lang['ClientPay.confirm.boxtitle_confirm'] = 'Konfirmasi Pembayaran';
$lang['ClientPay.confirm.page_title'] = 'Klien %1 $ Konfirmasi Pembayaran';
$lang['ClientPay.multipleinvoices.no_results'] = 'Tidak ada faktur dalam mata uang ini.';
$lang['ClientPay.multipleinvoices.text_datedue'] = 'Tanggal Jatuh Tempo';
$lang['ClientPay.multipleinvoices.text_invoice'] = 'Faktur #';
$lang['ClientPay.multipleinvoices.text_due'] = 'Jumlah Jatuh Tempo';
$lang['ClientPay.multipleinvoices.text_amount'] = 'Jumlah yang harus dibayar';
$lang['ClientPay.multipleinvoices.text_edit_amounts'] = 'Lakukan Pembayaran Sebagian Saja';
$lang['ClientPay.method.invoice_amount'] = 'Jumlah';
$lang['ClientPay.method.invoice_quantity'] = 'Kuantitas';
$lang['ClientPay.method.invoice_description'] = 'Deskripsi';
$lang['ClientPay.method.heading_invoice'] = 'Faktur #% 1 $ s';
$lang['ClientPay.method.no_options'] = 'Tidak ada opsi pembayaran yang tersedia.';
$lang['ClientPay.method.field_credit_submit'] = 'Ajukan Kredit dan Lanjutkan';
$lang['ClientPay.method.field_submit'] = 'Tinjau dan Konfirmasi';
$lang['ClientPay.method.field_apply_credit'] = 'Ajukan Kredit (%1$ Tersedia)';
$lang['ClientPay.method.field_paymentaccount_ach'] = 'Akun ACH';
$lang['ClientPay.method.field_paymentaccount_autodebit'] = '(Debit Otomatis) %1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.field_paymentaccount_cc'] = 'Rekening Kartu Kredit';
$lang['ClientPay.method.field_paymentaccount'] = '%1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.heading_payment_options'] = 'Opsi Pembayaran';
$lang['ClientPay.method.heading_other_payment_options'] = 'Opsi Pembayaran Lainnya';
$lang['ClientPay.method.field_newdetails'] = 'Detail Pembayaran Baru';
$lang['ClientPay.method.field_useaccount'] = 'Gunakan Akun Pembayaran';
$lang['ClientPay.method.boxtitle_method'] = 'Lakukan Pembayaran';
$lang['ClientPay.method.page_title'] = 'Metode Pembayaran Klien %1$s';
$lang['ClientPay.index.field_submit'] = 'Lanjutkan';
$lang['ClientPay.index.field_credit'] = 'Jumlah Pembayaran Lainnya';
$lang['ClientPay.index.boxtitle_pay'] = 'Lakukan Pembayaran';
$lang['ClientPay.index.page_title'] = 'Pembayaran Klien %1 $s';
$lang['ClientPay.!error.payment_authorize'] = 'Pembayaran tidak dapat diotorisasi untuk akun pembayaran yang dipilih.  Silakan pilih akun lain atau coba lagi.';
$lang['ClientPay.!error.invoice_voided'] = 'Faktur ini telah dibatalkan dan tidak dapat dibayar.';
$lang['ClientPay.!error.payment_amounts'] = 'Pilih faktur yang akan dibayar atau masukkan jumlah pembayaran lainnya.';
$lang['ClientPay.!error.invalid_amount'] = 'Jumlah pembayaran lainnya tidak boleh negatif.';
$lang['ClientPay.!error.invalid_details'] = 'Silakan pilih opsi pembayaran.';
$lang['ClientPay.!info.ach_verification_redirect'] = 'Anda perlu memverifikasi akun ini sebelum dapat menggunakannya untuk melakukan pembayaran. Proses ini akan mengarahkan Anda keluar dari halaman saat ini.';
$lang['ClientPay.!info.ach_verification'] = 'Anda perlu memverifikasi akun ini sebelum dapat menggunakannya untuk melakukan pembayaran.';
$lang['ClientPay.!info.unverified_email_button'] = 'Kirim Ulang Email Verifikasi';
$lang['ClientPay.!info.unverified_email'] = 'Tautan telah dikirim ke alamat email yang Anda berikan. Silakan klik tautan dalam email untuk memverifikasi alamat email Anda sebelum melanjutkan pembayaran.';
$lang['ClientPay.!success.invoice_paid'] = 'Faktur ini sebelumnya telah dibayar.';
$lang['ClientPay.!success.credit_partial_processed'] = 'Kredit yang tersedia telah digunakan, namun saldo masih ada. Mohon selesaikan transaksi ini dengan membayar sisanya di bawah ini.';
$lang['ClientPay.!success.credit_full_processed'] = 'Kredit yang tersedia telah diterapkan.';
$lang['ClientPay.!success.payment_processed'] = 'Pembayaran berhasil diproses untuk %1$s. Nomor Transaksi: %2$s';
$lang['ClientPay.method.invoice_balance_due'] = 'Saldo Jatuh Tempo';
$lang['ClientPay.method.invoice_paid_amount'] = 'Jumlah yang Dibayarkan';
$lang['ClientPay.method.invoice_total'] = 'Total Faktur';
$lang['ClientPay.index.text_credit_max_only'] = 'Jumlah Maksimum: %1$s';
$lang['ClientPay.index.text_credit_min_only'] = 'Jumlah Minimum: %1$s';
$lang['ClientPay.index.text_credit_limits'] = 'Jumlah Minimum: %1$s - Jumlah Maksimum: %2$s';
$lang['ClientPay.!error.credit_maximum'] = 'Jumlah kredit tidak boleh melebihi %1$s.';
$lang['ClientPay.!error.credit_minimum'] = 'Jumlah kredit harus minimal %1$s.';

