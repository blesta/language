<?php
/**
 * Admin Reports
 *
 * @package blesta
 * @subpackage blesta.language.ro_ro
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminReports.!error.refresh.already_running'] = 'O captură de ecran este deja în curs de execuție. Vă rugăm să încercați din nou peste câteva momente.';
$lang['AdminReports.!error.refresh.failed'] = 'Actualizarea instantaneului nu a putut fi finalizată. Vă rugăm să încercați din nou mai târziu.';
$lang['AdminReports.!error.refresh.invalid_csrf'] = 'Sesiunea dumneavoastră a expirat. Vă rugăm să reîncărcați pagina și să încercați din nou.';
$lang['AdminReports.!error.refresh.rate_limited'] = 'O captură de ecran a fost actualizată în ultimele 5 minute. Vă rugăm să așteptați înainte de a reîmprospăta pagina.';
$lang['AdminReports.charts.churn_gross'] = 'Rata brută de pierdere a clienților';
$lang['AdminReports.charts.churn_net'] = 'Rata netă de pierdere a clienților';
$lang['AdminReports.charts.churn_title'] = 'Rata de pierdere a clienților MRR';
$lang['AdminReports.charts.ltv_note'] = 'Lunar. LTV = ARPU ÷ rata de pierdere a clienților pentru luna respectivă; apar lacune atunci când rata de pierdere este zero sau datele istorice sunt insuficiente.';
$lang['AdminReports.charts.ltv_series'] = 'LTV';
$lang['AdminReports.charts.ltv_title'] = 'Evoluția LTV';
$lang['AdminReports.charts.movement_churn'] = 'Rata de abandon';
$lang['AdminReports.charts.movement_contraction'] = 'Contracție';
$lang['AdminReports.charts.movement_expansion'] = 'Extindere';
$lang['AdminReports.charts.movement_new'] = 'Nou';
$lang['AdminReports.charts.movement_reactivation'] = 'Reactivare';
$lang['AdminReports.charts.movements_title'] = 'Mișcările MRR';
$lang['AdminReports.charts.mrr_series'] = 'MRR';
$lang['AdminReports.charts.mrr_suspended_series'] = 'MRR suspendat';
$lang['AdminReports.charts.mrr_title'] = 'Venituri recurente lunare';
$lang['AdminReports.charts.revenue_collected'] = 'Adunate';
$lang['AdminReports.charts.revenue_invoiced'] = 'Facturat';
$lang['AdminReports.charts.revenue_refunded'] = 'Rambursat';
$lang['AdminReports.charts.revenue_title'] = 'Venituri';
$lang['AdminReports.dashboard.data_as_of'] = 'Date la data de %1$s';
$lang['AdminReports.dashboard.never'] = 'Niciodată';
$lang['AdminReports.dashboard.refresh'] = 'Reîmprospătare';
$lang['AdminReports.dashboard.refreshing'] = 'Revigorant…';
$lang['AdminReports.empty.collecting_since'] = 'Colectăm date încă din %1$s';
$lang['AdminReports.empty.no_data_text'] = 'Colectarea datelor începe odată cu următoarea execuție a cronului. Reveniți după finalizarea unui instantaneu.';
$lang['AdminReports.empty.no_data_title'] = 'Nu există încă date analitice';
$lang['AdminReports.empty.no_series'] = 'Nu sunt disponibile date pentru perioada selectată.';
$lang['AdminReports.error.load_failed'] = 'Nu se pot încărca datele. Vă rugăm să încercați din nou.';
$lang['AdminReports.filter.consolidated_tooltip'] = 'Convertiți toate monedele în moneda implicită, folosind cursul de schimb valabil la data instantaneului.';
$lang['AdminReports.filter.field_consolidated'] = 'Consolidați în %1$s';
$lang['AdminReports.filter.field_currency'] = 'Monedă';
$lang['AdminReports.filter.field_daterange'] = 'Interval de date';
$lang['AdminReports.filter.field_end'] = 'Către';
$lang['AdminReports.filter.field_granularity'] = 'Granularitate';
$lang['AdminReports.filter.field_start'] = 'De la';
$lang['AdminReports.filter.granularity_day'] = 'Zilnic';
$lang['AdminReports.filter.granularity_month'] = 'Lunar';
$lang['AdminReports.filter.granularity_week'] = 'Săptămânal';
$lang['AdminReports.filter.preset_12m'] = '12 luni';
$lang['AdminReports.filter.preset_30d'] = '30 de zile';
$lang['AdminReports.filter.preset_90d'] = '90 de zile';
$lang['AdminReports.filter.preset_custom'] = 'Personalizat';
$lang['AdminReports.index.box_title'] = 'Rapoarte';
$lang['AdminReports.index.customize'] = 'Personalizați';
$lang['AdminReports.index.field_format'] = 'Format';
$lang['AdminReports.index.field_report_type'] = 'Tip de raport';
$lang['AdminReports.index.field_submit'] = 'Export';
$lang['AdminReports.index.page_title'] = 'Rapoarte de facturare';
$lang['AdminReports.index.reports'] = 'Generați';
$lang['AdminReports.index.tab_exports'] = 'Exporturi';
$lang['AdminReports.index.tab_overview'] = 'Prezentare generală';
$lang['AdminReports.index.tab_renewals'] = 'Reînnoiri';
$lang['AdminReports.index.tab_retention'] = 'Retenție';
$lang['AdminReports.index.tab_revenue'] = 'Venituri';
$lang['AdminReports.loading'] = 'Se încarcă…';
$lang['AdminReports.renewals.chart_title'] = 'Reînnoiri viitoare';
$lang['AdminReports.renewals.col_amount'] = 'Suma estimată';
$lang['AdminReports.renewals.col_count'] = 'Reînnoirea serviciilor';
$lang['AdminReports.renewals.col_month'] = 'Luna';
$lang['AdminReports.renewals.computed'] = 'Prognoza calculată %1$s';
$lang['AdminReports.renewals.note'] = 'Veniturile estimate din reînnoiri pentru următoarele 12 luni: fiecare reînnoire programată pentru fiecare serviciu, anticipată cu durata ciclului de facturare față de următoarea dată de reînnoire, la prețul valabil pentru perioada respectivă, din care se deduc cupoanele recurente. Estimările pentru servicii încetează la data programată a anulării. Calculate pe baza celei mai recente instantanee.';
$lang['AdminReports.renewals.series_amount'] = 'Suma reînnoirii';
$lang['AdminReports.retention.cohorts_shown'] = 'Se afișează cele mai recente cohorte de pe site-ul %1$s.';
$lang['AdminReports.retention.col_clients'] = 'Clienți';
$lang['AdminReports.retention.col_cohort'] = 'Cohortă';
$lang['AdminReports.retention.grid_title'] = 'Rata de retenție a cohortei';
$lang['AdminReports.retention.note'] = 'Cohortele grupează clienții în funcție de luna în care au beneficiat de primul serviciu. Fiecare celulă reprezintă ponderea din cohorta respectivă care beneficiază de servicii active în luna respectivă, conform ultimului instantaneu al lunii. Valorile nu țin cont de moneda utilizată.';
$lang['AdminReports.revenue.allocation_note'] = 'Veniturile din pachete sunt repartizate proporțional între liniile facturii și reprezintă o valoare aproximativă.';
$lang['AdminReports.revenue.breakdown_collected'] = 'Adunate';
$lang['AdminReports.revenue.breakdown_empty'] = 'Nu există date privind veniturile pentru această perioadă.';
$lang['AdminReports.revenue.breakdown_name'] = 'Nume';
$lang['AdminReports.revenue.breakdown_refunded'] = 'Rambursat';
$lang['AdminReports.revenue.breakdown_unassigned'] = 'Nealocat';
$lang['AdminReports.revenue.breakdown_unknown'] = 'Necunoscut';
$lang['AdminReports.revenue.dimension_gateway'] = 'Portal';
$lang['AdminReports.revenue.dimension_package'] = 'Pachet';
$lang['AdminReports.revenue.dimension_total'] = 'Total';
$lang['AdminReports.revenue.field_dimension'] = 'Defalcare pe';
$lang['AdminReports.tiles.active_clients'] = 'Clienți activi';
$lang['AdminReports.tiles.active_services'] = 'Servicii active';
$lang['AdminReports.tiles.arpu'] = 'ARPU';
$lang['AdminReports.tiles.arr'] = 'ARR';
$lang['AdminReports.tiles.ltv'] = 'LTV';
$lang['AdminReports.tiles.ltv_insufficient'] = 'Istoric insuficient';
$lang['AdminReports.tiles.mrr'] = 'MRR contractual';
$lang['AdminReports.tiles.net_mrr_growth'] = 'Creșterea netă a MRR';
$lang['AdminReports.tiles.suspended_mrr'] = 'inclusiv „ %1$s ” suspendat';

