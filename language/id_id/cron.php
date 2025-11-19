<?php
/**
 * Cron
 *
 * @package blesta
 * @subpackage blesta.language.id_id
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Cron.addpaidpendingservices.service_success'] = 'Layanan tertunda #%1$ dari klien #%2$ sekarang aktif.';
$lang['Cron.addpaidpendingservices.service_error'] = 'Layanan yang tertunda #%1$ dari klien #%2$ tidak dapat diaktifkan.';
$lang['Cron.addpaidpendingservices.completed'] = 'Tugas layanan tertunda berbayar telah selesai.';
$lang['Cron.addpaidpendingservices.attempt'] = 'Mencoba menyediakan layanan yang tertunda berbayar.';
$lang['Cron.cancelscheduledservices.cancel_success'] = 'Layanan #%1$ dari klien #%2$ telah dibatalkan.';
$lang['Cron.cancelscheduledservices.cancel_error'] = 'Layanan #%1$ dari klien #%2$ tidak dapat dibatalkan.';
$lang['Cron.cancelscheduledservices.completed'] = 'Tugas membatalkan layanan terjadwal telah selesai.';
$lang['Cron.cancelscheduledservices.attempt'] = 'Mencoba membatalkan layanan terjadwal.';
$lang['Cron.unsuspendservices.unsuspend_success'] = 'Layanan #%1$ dari klien%2$ telah dihentikan penangguhannya.';
$lang['Cron.unsuspendservices.unsuspend_error'] = 'Layanan #%1$ dari klien%2$ tidak dapat dibatalkan penangguhannya.';
$lang['Cron.unsuspendservices.completed'] = 'Tugas layanan penghentian penangguhan telah selesai.';
$lang['Cron.unsuspendservices.attempt'] = 'Mencoba membuka penangguhan layanan berbayar yang ditangguhkan.';
$lang['Cron.suspendservices.suspend_success'] = 'Layanan #%1$ dari klien %2$ telah ditangguhkan.';
$lang['Cron.suspendservices.suspend_error'] = 'Layanan #%1$ dari klien %2$ tidak dapat ditangguhkan.';
$lang['Cron.suspendservices.suspension_reason'] = 'Non-Pembayaran';
$lang['Cron.suspendservices.completed'] = 'Tugas penangguhan layanan telah selesai.';
$lang['Cron.suspendservices.attempt'] = 'Mencoba menangguhkan layanan yang telah jatuh tempo.';
$lang['Cron.cardexpirationreminders.success'] = 'Berhasil mengirimkan pengingat kedaluwarsa untuk kontak %1$s %2$s dari klien #%3$s.';
$lang['Cron.cardexpirationreminders.failed'] = 'Pengingat kedaluwarsa untuk kontak %1$s %2$s dari klien #%3$s tidak dapat dikirim.';
$lang['Cron.cardexpirationreminders.completed'] = 'Tugas pengingat masa berlaku kartu telah selesai.';
$lang['Cron.cardexpirationreminders.attempt'] = 'Mencoba mengirim pengingat kedaluwarsa kartu.';
$lang['Cron.autodebitinvoices.charge_success'] = 'Pembayaran berhasil diproses.';
$lang['Cron.autodebitinvoices.charge_failed'] = 'Tidak dapat memproses pembayaran.';
$lang['Cron.autodebitinvoices.charge_attempt'] = 'Mencoba mendebit otomatis klien #%1$ untuk semua faktur terbuka sebesar %2$.';
$lang['Cron.autodebitinvoices.completed'] = 'Tugas pendebetan faktur secara otomatis telah selesai.';
$lang['Cron.autodebitinvoices.attempt'] = 'Mencoba mendebit faktur terbuka secara otomatis.';
$lang['Cron.applycredits.apply_none'] = 'Tidak ada faktur yang dapat diberikan kredit.';
$lang['Cron.applycredits.apply_success'] = 'Berhasil menerapkan kredit tertunda dari transaksi %1$ untuk klien #%2$ ke faktur #%3$ sebesar %4$.';
$lang['Cron.applycredits.apply_failed'] = 'Tidak dapat mengajukan kredit yang tertunda untuk klien #%1$.';
$lang['Cron.applycredits.completed'] = 'Tugas pengajuan kredit telah selesai.';
$lang['Cron.applycredits.attempt'] = 'Mencoba menerapkan kredit untuk membuka faktur.';
$lang['Cron.index.completed_all_system'] = 'Semua tugas sistem telah selesai.';
$lang['Cron.index.attempt_all_system'] = 'Mencoba menjalankan semua tugas sistem.';
$lang['Cron.index.completed_all'] = 'Semua tugas telah selesai.';
$lang['Cron.index.attempt_all'] = 'Mencoba menjalankan semua tugas selama %1$s.';
$lang['Cron.!error.task_execution.failed'] = 'Kesalahan: %1$s %2$s';
$lang['Cron.!error.cron.failed'] = 'Cron gagal melakukan log.';
$lang['Cron.!error.task_filter.exclude_not_array'] = 'Filter tugas "kecualikan" harus berupa larik.';
$lang['Cron.!error.task_filter.include_not_array'] = 'Filter tugas "include" harus berupa array.';
$lang['Cron.!error.task_filter.both_include_exclude'] = 'Filter tugas tidak dapat memiliki tombol "sertakan" dan "kecualikan".';
$lang['Cron.!error.task_filter.invalid_format'] = 'Filter tugas harus berupa objek JSON.';
$lang['Cron.!error.task_filter.invalid_json'] = 'JSON tidak valid dalam parameter filter tugas: %1$s';

