<?php
/**
 * Admin Reports
 *
 * @package blesta
 * @subpackage blesta.language.id_id
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminReports.!error.refresh.already_running'] = 'Proses snapshot sedang berjalan. Silakan coba lagi sebentar lagi.';
$lang['AdminReports.!error.refresh.failed'] = 'Pembaruan snapshot tidak dapat diselesaikan. Silakan coba lagi nanti.';
$lang['AdminReports.!error.refresh.invalid_csrf'] = 'Sesi Anda telah kedaluwarsa. Silakan muat ulang halaman ini dan coba lagi.';
$lang['AdminReports.!error.refresh.rate_limited'] = 'Cuplikan data telah diperbarui dalam 5 menit terakhir. Mohon tunggu sebelum memperbarui lagi.';
$lang['AdminReports.charts.churn_gross'] = 'Tingkat churn bruto';
$lang['AdminReports.charts.churn_net'] = 'Tingkat kehilangan pelanggan bersih';
$lang['AdminReports.charts.churn_title'] = 'Tingkat Penghentian Langganan MRR';
$lang['AdminReports.charts.ltv_note'] = 'Bulanan. LTV = ARPU ÷ tingkat churn pelanggan untuk bulan tersebut; selisih muncul ketika tingkat churn nol atau data historis tidak memadai.';
$lang['AdminReports.charts.ltv_series'] = 'LTV';
$lang['AdminReports.charts.ltv_title'] = 'Tren LTV';
$lang['AdminReports.charts.movement_churn'] = 'Tingkat Pengunduran Diri';
$lang['AdminReports.charts.movement_contraction'] = 'Kontraksi';
$lang['AdminReports.charts.movement_expansion'] = 'Perluasan';
$lang['AdminReports.charts.movement_new'] = 'Baru';
$lang['AdminReports.charts.movement_reactivation'] = 'Aktivasi Kembali';
$lang['AdminReports.charts.movements_title'] = 'Pergerakan MRR';
$lang['AdminReports.charts.mrr_series'] = 'MRR';
$lang['AdminReports.charts.mrr_suspended_series'] = 'MRR Ditangguhkan';
$lang['AdminReports.charts.mrr_title'] = 'Pendapatan Berulang Bulanan';
$lang['AdminReports.charts.revenue_collected'] = 'Dikumpulkan';
$lang['AdminReports.charts.revenue_invoiced'] = 'Telah ditagih';
$lang['AdminReports.charts.revenue_refunded'] = 'Dikembalikan';
$lang['AdminReports.charts.revenue_title'] = 'Pendapatan';
$lang['AdminReports.dashboard.data_as_of'] = 'Data per %1$s';
$lang['AdminReports.dashboard.never'] = 'Tidak pernah';
$lang['AdminReports.dashboard.refresh'] = 'Segarkan';
$lang['AdminReports.dashboard.refreshing'] = 'Menyegarkan…';
$lang['AdminReports.empty.collecting_since'] = 'Mengumpulkan data sejak %1$s';
$lang['AdminReports.empty.no_data_text'] = 'Pengumpulan data akan dimulai pada eksekusi cron berikutnya. Silakan periksa kembali setelah proses snapshot selesai.';
$lang['AdminReports.empty.no_data_title'] = 'Belum ada data analitik';
$lang['AdminReports.empty.no_series'] = 'Tidak ada data yang tersedia untuk periode yang dipilih.';
$lang['AdminReports.error.load_failed'] = 'Tidak dapat memuat data. Silakan coba lagi.';
$lang['AdminReports.filter.consolidated_tooltip'] = 'Konversikan kembali semua mata uang ke mata uang default Anda menggunakan nilai tukar pada tanggal snapshot.';
$lang['AdminReports.filter.field_consolidated'] = 'Gabungkan ke %1$s';
$lang['AdminReports.filter.field_currency'] = 'Mata uang';
$lang['AdminReports.filter.field_daterange'] = 'Rentang tanggal';
$lang['AdminReports.filter.field_end'] = 'Kepada';
$lang['AdminReports.filter.field_granularity'] = 'Tingkat kerincian';
$lang['AdminReports.filter.field_start'] = 'Dari';
$lang['AdminReports.filter.granularity_day'] = 'Harian';
$lang['AdminReports.filter.granularity_month'] = 'Bulanan';
$lang['AdminReports.filter.granularity_week'] = 'Mingguan';
$lang['AdminReports.filter.preset_12m'] = '12 bulan';
$lang['AdminReports.filter.preset_30d'] = '30 hari';
$lang['AdminReports.filter.preset_90d'] = '90 hari';
$lang['AdminReports.filter.preset_custom'] = 'Kustom';
$lang['AdminReports.index.box_title'] = 'Laporan';
$lang['AdminReports.index.customize'] = 'Sesuaikan';
$lang['AdminReports.index.field_format'] = 'Format';
$lang['AdminReports.index.field_report_type'] = 'Jenis Laporan';
$lang['AdminReports.index.field_submit'] = 'Ekspor';
$lang['AdminReports.index.page_title'] = 'Laporan Penagihan';
$lang['AdminReports.index.reports'] = 'Menghasilkan';
$lang['AdminReports.index.tab_exports'] = 'Ekspor';
$lang['AdminReports.index.tab_overview'] = 'Gambaran Umum';
$lang['AdminReports.index.tab_renewals'] = 'Perpanjangan';
$lang['AdminReports.index.tab_retention'] = 'Retensi';
$lang['AdminReports.index.tab_revenue'] = 'Pendapatan';
$lang['AdminReports.loading'] = 'Sedang dimuat…';
$lang['AdminReports.renewals.chart_title'] = 'Perpanjangan yang Akan Datang';
$lang['AdminReports.renewals.col_amount'] = 'Jumlah yang diperkirakan';
$lang['AdminReports.renewals.col_count'] = 'Perpanjangan layanan';
$lang['AdminReports.renewals.col_month'] = 'Bulan';
$lang['AdminReports.renewals.computed'] = 'Perkiraan telah dihitung %1$s';
$lang['AdminReports.renewals.note'] = 'Perkiraan pendapatan perpanjangan untuk 12 bulan ke depan: setiap perpanjangan yang dijadwalkan untuk setiap layanan, dimajukan dari tanggal perpanjangan berikutnya sesuai dengan periode penagihan masing-masing, dengan harga periode tersebut setelah dikurangi kupon berulang. Layanan tidak lagi diperkirakan pada saat pembatalan yang dijadwalkan. Dihitung berdasarkan data terbaru.';
$lang['AdminReports.renewals.series_amount'] = 'Jumlah perpanjangan';
$lang['AdminReports.retention.cohorts_shown'] = 'Menampilkan kelompok partisipan terbaru dari Studi Kanker Payudara di Amerika Serikat ( %1$s ).';
$lang['AdminReports.retention.col_clients'] = 'Klien';
$lang['AdminReports.retention.col_cohort'] = 'Kelompok';
$lang['AdminReports.retention.grid_title'] = 'Retensi Kelompok';
$lang['AdminReports.retention.note'] = 'Kohort mengelompokkan klien berdasarkan bulan saat mereka pertama kali menggunakan layanan. Setiap sel menunjukkan persentase anggota kohort yang masih menggunakan layanan aktif pada bulan tersebut, berdasarkan data dari snapshot terakhir bulan tersebut. Jumlah yang tercantum tidak dipengaruhi oleh mata uang.';
$lang['AdminReports.revenue.allocation_note'] = 'Pendapatan paket dialokasikan secara proporsional ke seluruh baris faktur dan merupakan perkiraan.';
$lang['AdminReports.revenue.breakdown_collected'] = 'Dikumpulkan';
$lang['AdminReports.revenue.breakdown_empty'] = 'Tidak ada data pendapatan untuk periode ini.';
$lang['AdminReports.revenue.breakdown_name'] = 'Nama';
$lang['AdminReports.revenue.breakdown_refunded'] = 'Dikembalikan';
$lang['AdminReports.revenue.breakdown_unassigned'] = 'Belum Ditugaskan';
$lang['AdminReports.revenue.breakdown_unknown'] = 'Tidak diketahui';
$lang['AdminReports.revenue.dimension_gateway'] = 'Gerbang';
$lang['AdminReports.revenue.dimension_package'] = 'Paket';
$lang['AdminReports.revenue.dimension_total'] = 'Jumlah';
$lang['AdminReports.revenue.field_dimension'] = 'Rincian berdasarkan';
$lang['AdminReports.tiles.active_clients'] = 'Klien aktif';
$lang['AdminReports.tiles.active_services'] = 'Layanan aktif';
$lang['AdminReports.tiles.arpu'] = 'ARPU';
$lang['AdminReports.tiles.arr'] = 'ARR';
$lang['AdminReports.tiles.ltv'] = 'LTV';
$lang['AdminReports.tiles.ltv_insufficient'] = 'Riwayat yang tidak memadai';
$lang['AdminReports.tiles.mrr'] = 'MRR yang Diikat Kontrak';
$lang['AdminReports.tiles.net_mrr_growth'] = 'Pertumbuhan MRR bersih';
$lang['AdminReports.tiles.suspended_mrr'] = 'termasuk penangguhan %1$s ';

