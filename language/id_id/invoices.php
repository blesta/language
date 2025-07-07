<?php
/**
 * Invoices
 *
 * @package blesta
 * @subpackage blesta.language.id_id
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Invoices.!error.line_items.minimum_split'] = 'Faktur harus memiliki setidaknya 2 baris untuk dibagi.';
$lang['Invoices.!error.line_items.empty_split'] = 'Tidak ada baris faktur yang dipilih untuk dipisahkan.';
$lang['Invoices.!error.lines[][tax].format'] = 'Pajak mata anggaran harus bernilai \'benar\' atau \'salah\'';
$lang['Invoices.!error.lines[][amount].format'] = 'Biaya satuan harus berupa angka.';
$lang['Invoices.!error.lines[][qty].minimum'] = 'Masukkan jumlah 1 atau lebih.';
$lang['Invoices.!error.lines[][qty].format'] = 'Kuantitas harus berupa angka.';
$lang['Invoices.!error.lines[][description].empty'] = 'Masukkan deskripsi mata anggaran.';
$lang['Invoices.!error.lines[][service_id].exists'] = 'ID layanan tidak valid.';
$lang['Invoices.!error.lines[][id].exists'] = 'ID mata anggaran tidak valid.';
$lang['Invoices.!error.domain_renew.failed'] = 'Domain hanya dapat diperpanjang hingga 10 tahun.';
$lang['Invoices.!error.invoice_id.draft'] = 'Faktur yang diberikan bukan merupakan faktur draf, sehingga tidak dapat dihapus.';
$lang['Invoices.!error.date_last_renewed.format'] = 'Tanggal perpanjangan faktur berulang terakhir harus menggunakan format tanggal yang valid.';
$lang['Invoices.!error.date_renews.format'] = 'Tanggal perpanjangan faktur berulang harus menggunakan format tanggal yang valid.';
$lang['Invoices.!error.duration.format'] = 'Durasi tidak valid.';
$lang['Invoices.!error.period.format'] = 'Periode tersebut tidak valid.';
$lang['Invoices.!error.term.bounds'] = 'Jangka waktu harus antara 1 dan 65535.';
$lang['Invoices.!error.term.format'] = 'Istilah ini harus berupa angka.';
$lang['Invoices.!error.delivery.exists'] = 'Metode pengiriman yang diberikan tidak ada.';
$lang['Invoices.!error.currency.length'] = 'Kode mata uang harus terdiri dari 3 karakter.';
$lang['Invoices.!error.status.format'] = 'Status tidak valid.';
$lang['Invoices.!error.autodebit.valid'] = 'Pilih apakah Anda ingin mengizinkan autodebet untuk faktur ini atau tidak.';
$lang['Invoices.!error.date_autodebit.format'] = 'Tanggal jatuh tempo dalam format tanggal yang tidak valid.';
$lang['Invoices.!error.date_closed.format'] = 'Tanggal penutupan dalam format tanggal yang tidak valid.';
$lang['Invoices.!error.date_due.after_billed'] = 'Tanggal jatuh tempo harus pada atau setelah tanggal ditagih.';
$lang['Invoices.!error.date_due.format'] = 'Tanggal jatuh tempo dalam format tanggal yang tidak valid.';
$lang['Invoices.!error.date_billed.format'] = 'Tanggal yang ditagih dalam format tanggal yang tidak valid.';
$lang['Invoices.!error.client_id.exists'] = 'ID klien tidak valid.';
$lang['Invoices.!error.id.amount_applied'] = 'Baris faktur, mata uang, dan status mungkin tidak diperbarui karena suatu jumlah telah diterapkan pada faktur ini.';
$lang['Invoices.!error.id_value.valid'] = 'Tidak dapat menentukan nilai ID faktur.';
$lang['Invoices.!error.id_format.length'] = 'Format ID untuk faktur tidak boleh lebih dari 64 karakter.';
$lang['Invoices.!error.id_format.empty'] = 'Tidak ada format ID yang ditetapkan untuk faktur.';
$lang['Invoices.!error.invoice_add.failed'] = 'Faktur ini tidak dapat dibuat. Silakan coba lagi.';
$lang['Invoices.!error.delivery.length'] = 'Panjang metode pengiriman faktur tidak boleh lebih dari 32 karakter.';
$lang['Invoices.!error.delivery.empty'] = 'Masukkan metode pengiriman faktur.';
$lang['Invoices.!error.method.exists'] = 'Anda harus menetapkan setidaknya satu metode pengiriman.';
$lang['Invoices.!error.invoice_recur_id.exists'] = 'ID faktur berulang tidak valid.';
$lang['Invoices.!error.invoice_id.exists'] = 'ID faktur tidak valid.';
$lang['Invoices.cache_methods.json_pdf'] = 'JSON + PDF';
$lang['Invoices.cache_methods.json'] = 'JSON';
$lang['Invoices.cache_methods.none'] = 'Tidak ada';
$lang['Invoices.types.proforma'] = 'Pro forma';
$lang['Invoices.types.standard'] = 'Standar';
$lang['Invoices.status.void'] = 'Void';
$lang['Invoices.status.draft'] = 'Konsep';
$lang['Invoices.status.proforma'] = 'Pro forma';
$lang['Invoices.status.active'] = 'Aktif';
$lang['Invoices.!line_item.recurring_renew_description'] = '%1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.coupon_line_item_description_percent'] = 'Kupon %1$s - %2$s%%';
$lang['Invoices.!line_item.coupon_line_item_description_amount'] = 'Kupon% 1 $ s';
$lang['Invoices.!line_item.prorated_credit'] = 'Kredit Prorata';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_onetime'] = 'Penambahan Prorata dari %1$s %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_date'] = 'Penambahan Prorata dari %1$s %2$sx %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_qty'] = 'Penambahan Prorata dari %1$s %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_onetime'] = 'Penambahan Prorata dari %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_date'] = 'Penambahan Prorata dari %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_text'] = 'Penambahan Prorata dari %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_onetime'] = 'Penambahan Prorata dari %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_addition_date'] = 'Penambahan Prorata dari %1$s %2$s (%3$s - %4$s)';
$lang['Invoices.!line_item.service_option_prorated_addition'] = 'Penambahan Prorata dari %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_onetime'] = '↳ Peningkatan Prorata dari %1$s dari %2$sx %3$s menjadi %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_date'] = '↳ Peningkatan Prorata dari %1$s dari %2$sx %3$s menjadi %4$sx %5$s (%6$s - %7$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty'] = '↳ Peningkatan Prorata dari %1$s dari %2$sx %3$s menjadi %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_onetime'] = '↳ Peningkatan Prorata sebesar %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_date'] = '↳ Peningkatan Prorata dari %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text'] = '↳ Peningkatan Prorata sebesar %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_onetime'] = '↳ Peningkatan Prorata dari %1% dari %2% ke %3%.';
$lang['Invoices.!line_item.service_option_prorated_upgrade_date'] = '↳ Peningkatan Prorata dari %1% dari %2% ke %3% (%4% - %5%)';
$lang['Invoices.!line_item.service_option_prorated_upgrade'] = '↳ Peningkatan Prorata dari %1% dari %2% ke %3%.';
$lang['Invoices.!line_item.service_prorated_upgrade_description_onetime'] = 'Peningkatan Prorata dari %1% ke %2% - %3%.';
$lang['Invoices.!line_item.service_prorated_upgrade_description'] = 'Peningkatan Prorata dari %1% ke %2% - %3% (%4% - %5%)';
$lang['Invoices.!line_item.service_option_setup_fee_description'] = '↳ %1$s - %2$s Biaya Penyiapan';
$lang['Invoices.!line_item.service_option_renew_description'] = '↳ %1$s - %2$s';
$lang['Invoices.!line_item.service_setup_fee_description'] = '%1$s - %2$s Biaya Penyiapan';
$lang['Invoices.!line_item.service_cancel_fee_description'] = 'Biaya Pembatalan %1$s - %2$s';
$lang['Invoices.!line_item.service_renew_description'] = '%5$s%1$s - %2$s (%3$s - %4$s)';
$lang['Invoices.!note_private.line_item'] = '- %1$s @ %2$s: %3$s';
$lang['Invoices.!note_private.removed_lines'] = 'Item baris yang dihapus:';
$lang['Invoices.!note_private.service_cancel_date'] = 'Layanan #%1$ dibatalkan %2$.';
$lang['Invoices.getDeliveryMethods.postalmethods'] = 'PostalMethods';
$lang['Invoices.getDeliveryMethods.interfax'] = 'InterFax';
$lang['Invoices.getDeliveryMethods.paper'] = 'Kertas';
$lang['Invoices.getDeliveryMethods.email'] = 'Email';
$lang['Invoices.getPricingPeriods.year'] = 'Tahun';
$lang['Invoices.getPricingPeriods.month'] = 'Bulan';
$lang['Invoices.getPricingPeriods.week'] = 'Minggu';
$lang['Invoices.getPricingPeriods.day'] = 'Hari';
$lang['Invoices.!error.invoice_id.unique'] = 'Faktur tujuan tidak dapat menjadi bagian dari faktur yang akan digabungkan.';
$lang['Invoices.!error.invoice_id.status'] = 'Faktur tujuan harus terbuka dan tanpa transaksi apa pun.';
$lang['Invoices.!error.invoice_ids.client'] = 'Semua faktur harus dimiliki oleh klien yang sama.';
$lang['Invoices.!error.invoice_ids.status'] = 'Semua faktur harus terbuka dan tanpa transaksi apa pun.';
$lang['Invoices.!error.invoice_ids.currency'] = 'Semua faktur harus memiliki mata uang yang sama.';
$lang['Invoices.!error.invoice_ids.count'] = 'Setidaknya dua faktur harus dipilih.';
$lang['Invoices.!line_item.parent_description'] = 'Layanan Anak dari %1$s - %2$s:';
$lang['Invoices.!error.service.renew_onetime'] = 'Layanan satu kali tidak dapat diperpanjang.';

