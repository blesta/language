<?php
/**
 * Admin Reports
 *
 * @package blesta
 * @subpackage blesta.language.tr_tr
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminReports.!error.refresh.already_running'] = 'Bir anlık görüntü alma işlemi halihazırda devam ediyor. Lütfen bir süre sonra tekrar deneyin.';
$lang['AdminReports.!error.refresh.failed'] = 'Anlık görüntü yenileme işlemi tamamlanamadı. Lütfen daha sonra tekrar deneyin.';
$lang['AdminReports.!error.refresh.invalid_csrf'] = 'Oturumunuzun süresi doldu. Lütfen sayfayı yeniden yükleyin ve tekrar deneyin.';
$lang['AdminReports.!error.refresh.rate_limited'] = 'Anlık görüntü son 5 dakika içinde güncellendi. Lütfen tekrar yenilemeden önce bir süre bekleyin.';
$lang['AdminReports.charts.churn_gross'] = 'Brüt müşteri kaybı';
$lang['AdminReports.charts.churn_net'] = 'Net müşteri kaybı';
$lang['AdminReports.charts.churn_title'] = 'MRR Kaybetme Oranı';
$lang['AdminReports.charts.ltv_note'] = 'Aylık. LTV = ARPU ÷ o ayın müşteri kayıp oranı; kayıp oranı sıfır olduğunda veya geçmiş veriler yetersiz olduğunda boşluklar ortaya çıkar.';
$lang['AdminReports.charts.ltv_series'] = 'LTV';
$lang['AdminReports.charts.ltv_title'] = 'LTV Eğilimi';
$lang['AdminReports.charts.movement_churn'] = 'Müşteri Kaybı';
$lang['AdminReports.charts.movement_contraction'] = 'Kısa çekilme';
$lang['AdminReports.charts.movement_expansion'] = 'Genişleme';
$lang['AdminReports.charts.movement_new'] = 'Yeni';
$lang['AdminReports.charts.movement_reactivation'] = 'Yeniden etkinleştirme';
$lang['AdminReports.charts.movements_title'] = 'MRR Hareketleri';
$lang['AdminReports.charts.mrr_series'] = 'MRR';
$lang['AdminReports.charts.mrr_suspended_series'] = 'Askıya Alınan MRR';
$lang['AdminReports.charts.mrr_title'] = 'Aylık Tekrarlayan Gelir';
$lang['AdminReports.charts.revenue_collected'] = 'Derlenmiş';
$lang['AdminReports.charts.revenue_invoiced'] = 'Faturalandırıldı';
$lang['AdminReports.charts.revenue_refunded'] = 'Geri Ödenen';
$lang['AdminReports.charts.revenue_title'] = 'Gelir';
$lang['AdminReports.dashboard.data_as_of'] = 'Veriler şu tarihteki durumuna göre %1$s';
$lang['AdminReports.dashboard.never'] = 'Asla';
$lang['AdminReports.dashboard.refresh'] = 'Yenile';
$lang['AdminReports.dashboard.refreshing'] = 'Canlandırıcı…';
$lang['AdminReports.empty.collecting_since'] = 'Şu tarihten beri veri toplanmaktadır %1$s';
$lang['AdminReports.empty.no_data_text'] = 'Veri toplama işlemi bir sonraki cron çalıştırmasıyla başlayacaktır. Anlık görüntüleme işlemi tamamlandığında tekrar kontrol edin.';
$lang['AdminReports.empty.no_data_title'] = 'Henüz analiz verisi yok';
$lang['AdminReports.empty.no_series'] = 'Seçilen dönem için veri bulunmamaktadır.';
$lang['AdminReports.error.load_failed'] = 'Veriler yüklenemedi. Lütfen tekrar deneyin.';
$lang['AdminReports.filter.consolidated_tooltip'] = 'Anlık tarih döviz kurunu kullanarak tüm para birimlerini varsayılan para biriminize yeniden hesaplayın.';
$lang['AdminReports.filter.field_consolidated'] = 'Şuraya birleştir %1$s';
$lang['AdminReports.filter.field_currency'] = 'Para birimi';
$lang['AdminReports.filter.field_daterange'] = 'Tarih aralığı';
$lang['AdminReports.filter.field_end'] = 'Şuna';
$lang['AdminReports.filter.field_granularity'] = 'Ayrıntı düzeyi';
$lang['AdminReports.filter.field_start'] = 'Kaynak:';
$lang['AdminReports.filter.granularity_day'] = 'Günlük';
$lang['AdminReports.filter.granularity_month'] = 'Aylık';
$lang['AdminReports.filter.granularity_week'] = 'Haftalık';
$lang['AdminReports.filter.preset_12m'] = '12 ay';
$lang['AdminReports.filter.preset_30d'] = '30 gün';
$lang['AdminReports.filter.preset_90d'] = '90 gün';
$lang['AdminReports.filter.preset_custom'] = 'Özel';
$lang['AdminReports.index.box_title'] = 'Raporlar';
$lang['AdminReports.index.customize'] = 'Özelleştirme';
$lang['AdminReports.index.field_format'] = 'Biçim';
$lang['AdminReports.index.field_report_type'] = 'Rapor Türü';
$lang['AdminReports.index.field_submit'] = 'İhracat';
$lang['AdminReports.index.page_title'] = 'Faturalama Raporları';
$lang['AdminReports.index.reports'] = 'Oluşturmak';
$lang['AdminReports.index.tab_exports'] = 'İhracat';
$lang['AdminReports.index.tab_overview'] = 'Genel Bakış';
$lang['AdminReports.index.tab_renewals'] = 'Yenilemeler';
$lang['AdminReports.index.tab_retention'] = 'Müşteri tutma';
$lang['AdminReports.index.tab_revenue'] = 'Gelir';
$lang['AdminReports.loading'] = 'Yükleniyor…';
$lang['AdminReports.renewals.chart_title'] = 'Yaklaşan Yenilemeler';
$lang['AdminReports.renewals.col_amount'] = 'Beklenen tutar';
$lang['AdminReports.renewals.col_count'] = 'Hizmetlerin yenilenmesi';
$lang['AdminReports.renewals.col_month'] = 'Ay';
$lang['AdminReports.renewals.computed'] = 'Tahmin hesaplandı %1$s';
$lang['AdminReports.renewals.note'] = 'Önümüzdeki 12 ay için öngörülen yenileme geliri: Her hizmetin planlanan tüm yenilemeleri, bir sonraki yenileme tarihinden fatura dönemi kadar ileriye doğru hesaplanarak, tekrarlayan indirimler düşüldükten sonra dönem fiyatı üzerinden belirlenir. Hizmetler, planlanan iptal tarihinde öngörüden çıkarılır. En son anlık veriler kullanılarak hesaplanmıştır.';
$lang['AdminReports.renewals.series_amount'] = 'Yenileme tutarı';
$lang['AdminReports.retention.cohorts_shown'] = '%1$s \'in en son kohortlarını gösteriyor.';
$lang['AdminReports.retention.col_clients'] = 'Müşteriler';
$lang['AdminReports.retention.col_cohort'] = 'Kohort';
$lang['AdminReports.retention.grid_title'] = 'Kohort Tutma Oranı';
$lang['AdminReports.retention.note'] = 'Kohortlar, müşterileri ilk hizmet aldıkları aya göre gruplandırır. Her bir hücre, o ayın son anlık durumundan alınan verilere göre, o ay içinde aktif hizmetlere sahip olan kohortun payını gösterir. Sayılar para biriminden bağımsızdır.';
$lang['AdminReports.revenue.allocation_note'] = 'Paket gelirleri, fatura satırları arasında orantılı olarak dağıtılır ve bu rakam yaklaşık bir değerdir.';
$lang['AdminReports.revenue.breakdown_collected'] = 'Derlenmiş';
$lang['AdminReports.revenue.breakdown_empty'] = 'Bu döneme ait gelir verisi bulunmamaktadır.';
$lang['AdminReports.revenue.breakdown_name'] = 'Ad';
$lang['AdminReports.revenue.breakdown_refunded'] = 'Geri Ödenen';
$lang['AdminReports.revenue.breakdown_unassigned'] = 'Atanmamış';
$lang['AdminReports.revenue.breakdown_unknown'] = 'Bilinmiyor';
$lang['AdminReports.revenue.dimension_gateway'] = 'Ağ Geçidi';
$lang['AdminReports.revenue.dimension_package'] = 'Paket';
$lang['AdminReports.revenue.dimension_total'] = 'Toplam';
$lang['AdminReports.revenue.field_dimension'] = 'Şu kriterlere göre dağılım:';
$lang['AdminReports.tiles.active_clients'] = 'Aktif müşteriler';
$lang['AdminReports.tiles.active_services'] = 'Aktif hizmetler';
$lang['AdminReports.tiles.arpu'] = 'ARPU';
$lang['AdminReports.tiles.arr'] = 'ARR';
$lang['AdminReports.tiles.ltv'] = 'LTV';
$lang['AdminReports.tiles.ltv_insufficient'] = 'Yetersiz geçmiş bilgisi';
$lang['AdminReports.tiles.mrr'] = 'Sözleşmeye Bağlı MRR';
$lang['AdminReports.tiles.net_mrr_growth'] = 'Net MRR artışı';
$lang['AdminReports.tiles.suspended_mrr'] = '%1$s \'in askıya alınması dahil';

