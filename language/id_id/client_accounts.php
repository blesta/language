<?php
/**
 * Client Accounts
 *
 * @package blesta
 * @subpackage blesta.language.id_id
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientAccounts.!error.account_invalid'] = 'Jenis akun pembayaran yang disediakan dinonaktifkan atau tidak valid.';
$lang['ClientAccounts.!error.payment_account_type_invalid'] = 'Jenis akun pembayaran tidak valid.';
$lang['ClientAccounts.!info.account_info'] = 'Rekening pembayaran memungkinkan Anda untuk menyimpan informasi pembayaran dan dapat digunakan untuk membayar faktur. Rekening pembayaran yang dipilih sebagai rekening default akan digunakan untuk pembayaran berulang secara otomatis.';
$lang['ClientAccounts.!info.ach_verification'] = 'Anda perlu memverifikasi akun ini sebelum dapat menggunakannya untuk melakukan pembayaran.';
$lang['ClientAccounts.!info.ach_verification_edit'] = 'Setelah mengedit akun ini, Anda perlu memverifikasinya sebelum dapat menggunakannya untuk melakukan pembayaran.';
$lang['ClientAccounts.!info.no_accounts'] = 'Saat ini Anda belum memiliki akun pembayaran. Tambahkan akun pembayaran pertama Anda di bawah ini.';
$lang['ClientAccounts.!notice.ach_disabled'] = 'Akun pembayaran ACH saat ini dinonaktifkan dan mungkin tidak diperbarui.';
$lang['ClientAccounts.!notice.cc_disabled'] = 'Akun pembayaran kartu kredit saat ini dinonaktifkan dan mungkin tidak diperbarui.';
$lang['ClientAccounts.!notice.disabled'] = 'Kemampuan untuk menambahkan akun pembayaran saat ini dinonaktifkan.';
$lang['ClientAccounts.!notice.reenable_autodebit'] = 'Pembayaran otomatis telah dinonaktifkan secara khusus untuk akun ini, silakan hubungi staf untuk mengaktifkannya kembali. Anda dapat memilih akun pembayaran sebagai default, namun tidak akan ditagih secara otomatis hingga akun tersebut diaktifkan kembali oleh staf.';
$lang['ClientAccounts.!success.account_created'] = 'Akun pembayaran telah berhasil dibuat.';
$lang['ClientAccounts.!success.achaccount_deleted'] = 'Akun pembayaran telah berhasil dihapus.';
$lang['ClientAccounts.!success.achaccount_updated'] = 'Akun pembayaran telah berhasil diperbarui.';
$lang['ClientAccounts.!success.achaccount_verified'] = 'Akun pembayaran telah berhasil diverifikasi.';
$lang['ClientAccounts.!success.ccaccount_deleted'] = 'Akun pembayaran telah berhasil dihapus.';
$lang['ClientAccounts.!success.ccaccount_updated'] = 'Akun pembayaran telah berhasil diperbarui.';
$lang['ClientAccounts.!success.credit_handling_updated'] = 'Pengaturan penanganan kredit telah berhasil diperbarui.';
$lang['ClientAccounts.!success.defaultaccount_deleted'] = 'Akun pembayaran default telah dihapus.';
$lang['ClientAccounts.!success.defaultaccount_updated'] = 'Rekening pembayaran default telah diperbarui.';
$lang['ClientAccounts.ach_info.field_accountnum'] = 'Nomor Rekening';
$lang['ClientAccounts.ach_info.field_routingnum'] = 'Nomor Rute';
$lang['ClientAccounts.ach_info.field_savedetails'] = 'Simpan Akun';
$lang['ClientAccounts.ach_info.field_type'] = 'Jenis';
$lang['ClientAccounts.ach_info.heading_ach'] = 'Informasi Rekening Bank';
$lang['ClientAccounts.add.boxtitle_create'] = 'Tambahkan Akun Pembayaran';
$lang['ClientAccounts.add.field_accountsubmit'] = 'Buat Akun';
$lang['ClientAccounts.add.field_ach_type'] = 'ACH';
$lang['ClientAccounts.add.field_cc_type'] = 'Kartu Kredit';
$lang['ClientAccounts.add.field_nextsubmit'] = 'Lanjutkan';
$lang['ClientAccounts.add.heading_account_type'] = 'Jenis Akun';
$lang['ClientAccounts.add.page_title'] = 'Klien #%1$s Tambahkan Rekening Pembayaran';
$lang['ClientAccounts.cc_info.field_expiration'] = 'Tanggal Kedaluwarsa';
$lang['ClientAccounts.cc_info.field_number'] = 'Nomor';
$lang['ClientAccounts.cc_info.field_savedetails'] = 'Simpan Akun';
$lang['ClientAccounts.cc_info.field_security'] = 'Kode Keamanan';
$lang['ClientAccounts.cc_info.heading_cc'] = 'Informasi Kartu Kredit';
$lang['ClientAccounts.cc_info.tooltip_code'] = 'Kode keamanan 3 atau 4 digit, biasanya ditemukan di bagian belakang kartu.';
$lang['ClientAccounts.contact_info.field_address1'] = 'Alamat 1';
$lang['ClientAccounts.contact_info.field_address2'] = 'Alamat 2';
$lang['ClientAccounts.contact_info.field_city'] = 'Kota';
$lang['ClientAccounts.contact_info.field_company'] = 'Perusahaan';
$lang['ClientAccounts.contact_info.field_contact_id'] = 'Menyalin Informasi Kontak Dari';
$lang['ClientAccounts.contact_info.field_country'] = 'Negara';
$lang['ClientAccounts.contact_info.field_email'] = 'Email';
$lang['ClientAccounts.contact_info.field_first_name'] = 'Nama depan';
$lang['ClientAccounts.contact_info.field_last_name'] = 'Nama belakang';
$lang['ClientAccounts.contact_info.field_state'] = 'Negara';
$lang['ClientAccounts.contact_info.field_title'] = 'Judul';
$lang['ClientAccounts.contact_info.field_zip'] = 'Kode Pos/Kode Pos';
$lang['ClientAccounts.contact_info.heading_contact'] = 'Informasi Kontak';
$lang['ClientAccounts.contact_info.text_select_contact'] = 'Anda dapat memilih kontak yang sudah ada untuk mengisi formulir ini.';
$lang['ClientAccounts.credithandling.boxtitle_credithandling'] = 'Penanganan Kredit';
$lang['ClientAccounts.credithandling.field_submit'] = 'Memperbarui Pengaturan';
$lang['ClientAccounts.credithandling.heading_currency'] = 'Mata uang';
$lang['ClientAccounts.credithandling.heading_threshold'] = 'Ambang Batas Pemberitahuan';
$lang['ClientAccounts.credithandling.text_description'] = 'Konfigurasikan pemberitahuan saldo rendah. Anda akan menerima email harian ketika saldo kredit Anda turun di bawah jumlah ambang batas untuk mata uang apa pun.';
$lang['ClientAccounts.editach.boxtitle_editach'] = 'Edit Akun ACH';
$lang['ClientAccounts.editach.field_accountsubmit'] = 'Edit Akun';
$lang['ClientAccounts.editach.page_title'] = 'Klien No.%1$s: Mengedit Rekening ACH';
$lang['ClientAccounts.editcc.boxtitle_editcc'] = 'Edit Akun Kartu Kredit';
$lang['ClientAccounts.editcc.field_accountsubmit'] = 'Edit Akun';
$lang['ClientAccounts.editcc.page_title'] = 'Klien No.%1$s: Mengedit Akun Kartu Kredit';
$lang['ClientAccounts.index.boxtitle_accounts'] = 'Akun Pembayaran';
$lang['ClientAccounts.index.confirm_delete'] = 'Apakah Anda yakin ingin menghapus akun pembayaran ini?';
$lang['ClientAccounts.index.create_account'] = 'Tambahkan Akun Pembayaran';
$lang['ClientAccounts.index.field_accountsubmit'] = 'Tetapkan sebagai Rekening Pembayaran Default';
$lang['ClientAccounts.index.field_removeautodebit'] = 'Hapus Debit Otomatis';
$lang['ClientAccounts.index.heading_last4'] = '4 terakhir';
$lang['ClientAccounts.index.heading_name'] = 'Nama';
$lang['ClientAccounts.index.heading_options'] = 'Tindakan';
$lang['ClientAccounts.index.heading_type'] = 'Jenis';
$lang['ClientAccounts.index.no_results'] = 'Anda tidak memiliki akun pembayaran.';
$lang['ClientAccounts.index.option_delete'] = 'Menghapus';
$lang['ClientAccounts.index.option_edit'] = 'Sunting';
$lang['ClientAccounts.index.option_verify'] = 'Verifikasi';
$lang['ClientAccounts.index.page_title'] = 'Rekening Klien #%1$s';
$lang['ClientAccounts.index.type_ach'] = '%1$s - %2$s';
$lang['ClientAccounts.index.type_cc'] = '%1$s - %2$s';
$lang['ClientAccounts.navigation.nav_credithandling'] = 'Penanganan Kredit';
$lang['ClientAccounts.navigation.nav_dashboard'] = 'Dasbor';
$lang['ClientAccounts.navigation.nav_paymentaccounts'] = 'Akun Pembayaran';
$lang['ClientAccounts.navigation.nav_paymentaccounts_add'] = 'Tambahkan Akun Pembayaran';
$lang['ClientAccounts.navigation.nav_return'] = 'Kembali ke Dasbor';
$lang['ClientAccounts.setcontactview.text_none'] = 'Tidak ada';
$lang['ClientAccounts.verifyach.boxtitle_verifyach'] = 'Verifikasi Akun ACH';
$lang['ClientAccounts.verifyach.field_accountsubmit'] = 'Verifikasi Akun';
$lang['ClientAccounts.verifyach.field_firstdeposit'] = 'Setoran Pertama';
$lang['ClientAccounts.verifyach.field_seconddeposit'] = 'Setoran Kedua';
$lang['ClientAccounts.verifyach.page_title'] = 'Klien No.%1$s: Verifikasi Rekening ACH';

