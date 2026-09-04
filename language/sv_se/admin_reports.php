<?php
/**
 * Admin Reports
 *
 * @package blesta
 * @subpackage blesta.language.sv_se
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminReports.!error.refresh.already_running'] = 'En ögonblicksbild körs redan. Försök igen om en stund.';
$lang['AdminReports.!error.refresh.failed'] = 'Uppdateringen av översikten kunde inte slutföras. Försök igen senare.';
$lang['AdminReports.!error.refresh.invalid_csrf'] = 'Din session har löpt ut. Ladda om sidan och försök igen.';
$lang['AdminReports.!error.refresh.rate_limited'] = 'En ögonblicksbild har uppdaterats under de senaste 5 minuterna. Vänta innan du uppdaterar igen.';
$lang['AdminReports.charts.churn_gross'] = 'Bruttoavgång';
$lang['AdminReports.charts.churn_net'] = 'Nettoavgång';
$lang['AdminReports.charts.churn_title'] = 'MRR-avhoppningsgrad';
$lang['AdminReports.charts.ltv_note'] = 'Månadsvis. LTV = ARPU ÷ kundavgången för månaden; luckor uppstår när kundavgången är noll eller när det inte finns tillräckligt med historiska data.';
$lang['AdminReports.charts.ltv_series'] = 'LTV';
$lang['AdminReports.charts.ltv_title'] = 'LTV-trend';
$lang['AdminReports.charts.movement_churn'] = 'Avgångsfrekvens';
$lang['AdminReports.charts.movement_contraction'] = 'Kontraktion';
$lang['AdminReports.charts.movement_expansion'] = 'Expansion';
$lang['AdminReports.charts.movement_new'] = 'Nytt';
$lang['AdminReports.charts.movement_reactivation'] = 'Återaktivering';
$lang['AdminReports.charts.movements_title'] = 'MRR-rörelser';
$lang['AdminReports.charts.mrr_series'] = 'MRR';
$lang['AdminReports.charts.mrr_suspended_series'] = 'Uppskjuten MRR';
$lang['AdminReports.charts.mrr_title'] = 'Månatliga återkommande intäkter';
$lang['AdminReports.charts.revenue_collected'] = 'Samlade';
$lang['AdminReports.charts.revenue_invoiced'] = 'Fakturerat';
$lang['AdminReports.charts.revenue_refunded'] = 'Återbetalat';
$lang['AdminReports.charts.revenue_title'] = 'Intäkter';
$lang['AdminReports.dashboard.data_as_of'] = 'Uppgifter per %1$s';
$lang['AdminReports.dashboard.never'] = 'Aldrig';
$lang['AdminReports.dashboard.refresh'] = 'Uppdatera';
$lang['AdminReports.dashboard.refreshing'] = 'Uppfriskande…';
$lang['AdminReports.empty.collecting_since'] = 'Insamling av data sedan %1$s';
$lang['AdminReports.empty.no_data_text'] = 'Datainsamlingen inleds vid nästa cron-körning. Kom tillbaka när en ögonblicksbild har slutförts.';
$lang['AdminReports.empty.no_data_title'] = 'Inga analysdata ännu';
$lang['AdminReports.empty.no_series'] = 'Det finns inga uppgifter för den valda perioden.';
$lang['AdminReports.error.load_failed'] = 'Det gick inte att ladda data. Försök igen.';
$lang['AdminReports.filter.consolidated_tooltip'] = 'Omräkna alla valutor till din standardvaluta med hjälp av växelkursen på datumet för ögonblicksbilden.';
$lang['AdminReports.filter.field_consolidated'] = 'Sammanfoga till %1$s';
$lang['AdminReports.filter.field_currency'] = 'Valuta';
$lang['AdminReports.filter.field_daterange'] = 'Datumintervall';
$lang['AdminReports.filter.field_end'] = 'Till';
$lang['AdminReports.filter.field_granularity'] = 'Granularitet';
$lang['AdminReports.filter.field_start'] = 'Från';
$lang['AdminReports.filter.granularity_day'] = 'Dagligen';
$lang['AdminReports.filter.granularity_month'] = 'Månadsvis';
$lang['AdminReports.filter.granularity_week'] = 'Varje vecka';
$lang['AdminReports.filter.preset_12m'] = '12 månader';
$lang['AdminReports.filter.preset_30d'] = '30 dagar';
$lang['AdminReports.filter.preset_90d'] = '90 dagar';
$lang['AdminReports.filter.preset_custom'] = 'Anpassad';
$lang['AdminReports.index.box_title'] = 'Rapporter';
$lang['AdminReports.index.customize'] = 'Anpassa';
$lang['AdminReports.index.field_format'] = 'Format';
$lang['AdminReports.index.field_report_type'] = 'Typ av rapport';
$lang['AdminReports.index.field_submit'] = 'Export';
$lang['AdminReports.index.page_title'] = 'Rapporter om fakturering';
$lang['AdminReports.index.reports'] = 'Generera';
$lang['AdminReports.index.tab_exports'] = 'Export';
$lang['AdminReports.index.tab_overview'] = 'Översikt';
$lang['AdminReports.index.tab_renewals'] = 'Förnyelser';
$lang['AdminReports.index.tab_retention'] = 'Kundbehållning';
$lang['AdminReports.index.tab_revenue'] = 'Intäkter';
$lang['AdminReports.loading'] = 'Laddar…';
$lang['AdminReports.renewals.chart_title'] = 'Kommande förnyelser';
$lang['AdminReports.renewals.col_amount'] = 'Förväntat belopp';
$lang['AdminReports.renewals.col_count'] = 'Förnyelse av tjänster';
$lang['AdminReports.renewals.col_month'] = 'Månad';
$lang['AdminReports.renewals.computed'] = 'Prognosen har beräknats %1$s';
$lang['AdminReports.renewals.note'] = 'Prognos för förnyelseintäkter för de kommande 12 månaderna: varje förnyelse som varje tjänst är planerad att genomgå, förskjuten framåt från nästa förnyelsedatum med faktureringsperioden, till periodpriset efter avdrag för återkommande rabatter. Prognosen upphör vid en planerad uppsägning. Beräknat utifrån den senaste översikten.';
$lang['AdminReports.renewals.series_amount'] = 'Förnyelsebelopp';
$lang['AdminReports.retention.cohorts_shown'] = 'Här visas de senaste kohorterna från %1$s.';
$lang['AdminReports.retention.col_clients'] = 'Kunder';
$lang['AdminReports.retention.col_cohort'] = 'Kohort';
$lang['AdminReports.retention.grid_title'] = 'Kohortens kvarhållning';
$lang['AdminReports.retention.note'] = 'Kohorterna grupperar kunderna efter den månad då de först utnyttjade tjänsten. Varje cell visar andelen av kohorten som har aktiva tjänster under den månaden, enligt uppgifter från den sista översikten för månaden. Siffrorna är valutasoberoende.';
$lang['AdminReports.revenue.allocation_note'] = 'Paketintäkterna fördelas proportionellt mellan fakturaraderna och utgör ett ungefärligt värde.';
$lang['AdminReports.revenue.breakdown_collected'] = 'Samlade';
$lang['AdminReports.revenue.breakdown_empty'] = 'Inga uppgifter om intäkter för denna period.';
$lang['AdminReports.revenue.breakdown_name'] = 'Namn';
$lang['AdminReports.revenue.breakdown_refunded'] = 'Återbetalat';
$lang['AdminReports.revenue.breakdown_unassigned'] = 'Ej tilldelad';
$lang['AdminReports.revenue.breakdown_unknown'] = 'Okänt';
$lang['AdminReports.revenue.dimension_gateway'] = 'Gateway';
$lang['AdminReports.revenue.dimension_package'] = 'Förpackning';
$lang['AdminReports.revenue.dimension_total'] = 'Totalt';
$lang['AdminReports.revenue.field_dimension'] = 'Fördelning efter';
$lang['AdminReports.tiles.active_clients'] = 'Aktiva kunder';
$lang['AdminReports.tiles.active_services'] = 'Aktiva tjänster';
$lang['AdminReports.tiles.arpu'] = 'ARPU';
$lang['AdminReports.tiles.arr'] = 'ARR';
$lang['AdminReports.tiles.ltv'] = 'LTV';
$lang['AdminReports.tiles.ltv_insufficient'] = 'Otillräcklig anamnes';
$lang['AdminReports.tiles.mrr'] = 'Avtalad MRR';
$lang['AdminReports.tiles.net_mrr_growth'] = 'Nettotillväxt i MRR';
$lang['AdminReports.tiles.suspended_mrr'] = 'inkl. %1$s stängd';

