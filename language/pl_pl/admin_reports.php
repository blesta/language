<?php
/**
 * Admin Reports
 *
 * @package blesta
 * @subpackage blesta.language.pl_pl
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminReports.index.customize'] = 'Dostosuj';
$lang['AdminReports.index.reports'] = 'Generowanie';
$lang['AdminReports.index.field_submit'] = 'Eksport';
$lang['AdminReports.index.field_report_type'] = 'Typ raportu';
$lang['AdminReports.index.field_format'] = 'Format';
$lang['AdminReports.index.box_title'] = 'Raporty';
$lang['AdminReports.index.page_title'] = 'Raporty rozliczeniowe';
$lang['AdminReports.filter.field_start'] = 'Od';
$lang['AdminReports.filter.preset_custom'] = 'Niestandardowe';
$lang['AdminReports.!error.refresh.failed'] = 'Nie udało się zaktualizować migawki. Spróbuj ponownie później.';
$lang['AdminReports.filter.preset_12m'] = '12 miesięcy';
$lang['AdminReports.!error.refresh.already_running'] = 'Właśnie trwa tworzenie migawki. Proszę spróbować ponownie za chwilę.';
$lang['AdminReports.filter.preset_90d'] = '90 dni';
$lang['AdminReports.!error.refresh.rate_limited'] = 'Migawka została odświeżona w ciągu ostatnich 5 minut. Proszę poczekać przed ponownym odświeżeniem.';
$lang['AdminReports.filter.preset_30d'] = '30 dni';
$lang['AdminReports.!error.refresh.invalid_csrf'] = 'Twoja sesja wygasła. Odśwież stronę i spróbuj ponownie.';
$lang['AdminReports.filter.field_daterange'] = 'Zakres dat';
$lang['AdminReports.error.load_failed'] = 'Nie udało się załadować danych. Spróbuj ponownie.';
$lang['AdminReports.index.tab_exports'] = 'Eksport';
$lang['AdminReports.loading'] = 'Ładowanie…';
$lang['AdminReports.index.tab_renewals'] = 'Przedłużenia';
$lang['AdminReports.charts.ltv_note'] = 'Miesięcznie. LTV = ARPU ÷ wskaźnik rezygnacji klientów w danym miesiącu; luki pojawiają się, gdy wskaźnik rezygnacji wynosi zero lub dane historyczne są niewystarczające.';
$lang['AdminReports.index.tab_retention'] = 'Utrzymanie klientów';
$lang['AdminReports.charts.ltv_series'] = 'LTV';
$lang['AdminReports.index.tab_revenue'] = 'Przychody';
$lang['AdminReports.charts.ltv_title'] = 'Tendencja wskaźnika LTV';
$lang['AdminReports.index.tab_overview'] = 'Przegląd';
$lang['AdminReports.renewals.computed'] = 'Obliczono prognozę %1$s';
$lang['AdminReports.renewals.note'] = 'Prognozowane przychody z odnowień na najbliższe 12 miesięcy: każde odnowienie zaplanowane dla danej usługi, przesunięte o okres rozliczeniowy w stosunku do najbliższej daty odnowienia, według ceny okresowej pomniejszonej o kwotę cyklicznych kuponów. Prognozowanie dla usług kończy się w momencie zaplanowanego anulowania. Obliczono na podstawie najnowszego stanu danych.';
$lang['AdminReports.renewals.col_count'] = 'Odnawianie usług';
$lang['AdminReports.renewals.col_amount'] = 'Przewidywana kwota';
$lang['AdminReports.renewals.col_month'] = 'Miesiąc';
$lang['AdminReports.renewals.series_amount'] = 'Kwota odnowienia';
$lang['AdminReports.renewals.chart_title'] = 'Nadchodzące przedłużenia';
$lang['AdminReports.retention.cohorts_shown'] = 'Przedstawiono najnowsze kohorty z serwisu %1$s.';
$lang['AdminReports.retention.note'] = 'Kohorty grupują klientów według miesiąca, w którym po raz pierwszy skorzystali z usługi. Każda komórka przedstawia odsetek członków kohorty korzystających z aktywnych usług w danym miesiącu, na podstawie danych z ostatniej migawki z tego miesiąca. Liczby nie uwzględniają waluty.';
$lang['AdminReports.retention.col_clients'] = 'Klienci';
$lang['AdminReports.retention.col_cohort'] = 'Kohorta';
$lang['AdminReports.retention.grid_title'] = 'Utrzymanie kohorty';
$lang['AdminReports.revenue.allocation_note'] = 'Przychody z pakietów są rozdzielane proporcjonalnie między poszczególne pozycje faktury i mają charakter przybliżony.';
$lang['AdminReports.revenue.breakdown_empty'] = 'Brak danych dotyczących przychodów za ten okres.';
$lang['AdminReports.revenue.breakdown_unknown'] = 'Nieznane';
$lang['AdminReports.revenue.breakdown_unassigned'] = 'Nieprzypisane';
$lang['AdminReports.revenue.breakdown_refunded'] = 'Zwrot kosztów';
$lang['AdminReports.revenue.breakdown_collected'] = 'Zebrane';
$lang['AdminReports.revenue.breakdown_name'] = 'Nazwa';
$lang['AdminReports.revenue.dimension_package'] = 'Opakowanie';
$lang['AdminReports.revenue.dimension_gateway'] = 'Brama';
$lang['AdminReports.revenue.dimension_total'] = 'Razem';
$lang['AdminReports.revenue.field_dimension'] = 'Podział według';
$lang['AdminReports.charts.revenue_refunded'] = 'Zwrot kosztów';
$lang['AdminReports.charts.revenue_invoiced'] = 'Zafakturowane';
$lang['AdminReports.charts.revenue_collected'] = 'Zebrane';
$lang['AdminReports.charts.revenue_title'] = 'Przychody';
$lang['AdminReports.charts.churn_net'] = 'Wskaźnik rezygnacji netto';
$lang['AdminReports.charts.churn_gross'] = 'Wskaźnik rezygnacji brutto';
$lang['AdminReports.charts.churn_title'] = 'Wskaźnik rezygnacji z MRR';
$lang['AdminReports.charts.movement_churn'] = 'Wskaźnik rezygnacji';
$lang['AdminReports.charts.movement_contraction'] = 'Skurcz';
$lang['AdminReports.charts.movement_reactivation'] = 'Reaktywacja';
$lang['AdminReports.charts.movement_expansion'] = 'Rozbudowa';
$lang['AdminReports.charts.movement_new'] = 'Nowość';
$lang['AdminReports.charts.movements_title'] = 'Ruchy MRR';
$lang['AdminReports.charts.mrr_suspended_series'] = 'Zawieszone MRR';
$lang['AdminReports.charts.mrr_series'] = 'MRR';
$lang['AdminReports.charts.mrr_title'] = 'Miesięczne przychody cykliczne';
$lang['AdminReports.tiles.active_services'] = 'Usługi aktywne';
$lang['AdminReports.tiles.active_clients'] = 'Aktywni klienci';
$lang['AdminReports.tiles.ltv_insufficient'] = 'Niewystarczające dane historyczne';
$lang['AdminReports.tiles.ltv'] = 'LTV';
$lang['AdminReports.tiles.arpu'] = 'ARPU';
$lang['AdminReports.tiles.net_mrr_growth'] = 'Wzrost MRR netto';
$lang['AdminReports.tiles.arr'] = 'ARR';
$lang['AdminReports.tiles.suspended_mrr'] = 'w tym zawieszenie serwisu %1$s ';
$lang['AdminReports.tiles.mrr'] = 'MRR wynikający z umowy';
$lang['AdminReports.empty.no_series'] = 'Brak danych dla wybranego okresu.';
$lang['AdminReports.empty.collecting_since'] = 'Gromadzenie danych od %1$s';
$lang['AdminReports.empty.no_data_text'] = 'Gromadzenie danych rozpocznie się wraz z następnym uruchomieniem zadania cron. Sprawdź ponownie po zakończeniu tworzenia migawki.';
$lang['AdminReports.empty.no_data_title'] = 'Brak danych analitycznych';
$lang['AdminReports.dashboard.refreshing'] = 'Orzeźwiające…';
$lang['AdminReports.dashboard.refresh'] = 'Odśwież';
$lang['AdminReports.dashboard.never'] = 'Nigdy';
$lang['AdminReports.dashboard.data_as_of'] = 'Dane na dzień %1$s';
$lang['AdminReports.filter.consolidated_tooltip'] = 'Przelicz wszystkie waluty na walutę domyślną, stosując kurs wymiany obowiązujący w dniu sporządzenia zestawienia.';
$lang['AdminReports.filter.field_consolidated'] = 'Skonsolidować do %1$s';
$lang['AdminReports.filter.field_currency'] = 'Waluta';
$lang['AdminReports.filter.granularity_month'] = 'Miesięcznie';
$lang['AdminReports.filter.granularity_week'] = 'Cotygodniowy';
$lang['AdminReports.filter.granularity_day'] = 'Codziennie';
$lang['AdminReports.filter.field_granularity'] = 'Poziom szczegółowości';
$lang['AdminReports.filter.field_end'] = 'Do';

