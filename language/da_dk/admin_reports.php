<?php
/**
 * Admin Reports
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminReports.index.page_title'] = 'Faktureringsrapporter';
$lang['AdminReports.index.box_title'] = 'Rapporter';
$lang['AdminReports.index.field_format'] = 'Format';
$lang['AdminReports.index.field_report_type'] = 'Rapporttype';
$lang['AdminReports.index.field_submit'] = 'Eksport';
$lang['AdminReports.index.reports'] = 'Generer';
$lang['AdminReports.index.customize'] = 'Tilpas';
$lang['AdminReports.filter.field_start'] = 'Fra';
$lang['AdminReports.filter.preset_custom'] = 'Brugerdefineret';
$lang['AdminReports.!error.refresh.failed'] = 'Opdateringen af øjebliksbilledet kunne ikke gennemføres. Prøv venligst igen senere.';
$lang['AdminReports.filter.preset_12m'] = '12 måneder';
$lang['AdminReports.!error.refresh.already_running'] = 'Der kører allerede et snapshot. Prøv venligst igen om et øjeblik.';
$lang['AdminReports.filter.preset_90d'] = '90 dage';
$lang['AdminReports.!error.refresh.rate_limited'] = 'Et øjebliksbillede er blevet opdateret inden for de sidste 5 minutter. Vent venligst, før du opdaterer igen.';
$lang['AdminReports.filter.preset_30d'] = '30 dage';
$lang['AdminReports.!error.refresh.invalid_csrf'] = 'Din session er udløbet. Genindlæs venligst siden, og prøv igen.';
$lang['AdminReports.filter.field_daterange'] = 'Datointerval';
$lang['AdminReports.error.load_failed'] = 'Det var ikke muligt at indlæse data. Prøv venligst igen.';
$lang['AdminReports.index.tab_exports'] = 'Eksport';
$lang['AdminReports.loading'] = 'Indlæser…';
$lang['AdminReports.index.tab_renewals'] = 'Fornyelser';
$lang['AdminReports.charts.ltv_note'] = 'Månedligt. LTV = ARPU ÷ kundeafgang for måneden; der vises tomme felter, når kundeafgangen er nul, eller der ikke foreligger tilstrækkelige historiske data.';
$lang['AdminReports.index.tab_retention'] = 'Fastholdelse';
$lang['AdminReports.charts.ltv_series'] = 'LTV';
$lang['AdminReports.index.tab_revenue'] = 'Omsætning';
$lang['AdminReports.charts.ltv_title'] = 'LTV-tendens';
$lang['AdminReports.index.tab_overview'] = 'Oversigt';
$lang['AdminReports.renewals.computed'] = 'Prognose beregnet %1$s';
$lang['AdminReports.renewals.note'] = 'Forventede fornyelsesindtægter for de kommende 12 måneder: hver fornyelse, som hver tjeneste er planlagt til, fremskudt fra den næste fornyelsesdato med den pågældende faktureringsperiode, til periodens pris fratrukket tilbagevendende rabatter. Tjenesterne medtages ikke længere i prognosen ved en planlagt opsigelse. Beregnet på baggrund af det seneste øjebliksbillede.';
$lang['AdminReports.renewals.col_count'] = 'Fornyelse af tjenester';
$lang['AdminReports.renewals.col_amount'] = 'Forventet beløb';
$lang['AdminReports.renewals.col_month'] = 'Måned';
$lang['AdminReports.renewals.series_amount'] = 'Fornyelsesbeløb';
$lang['AdminReports.renewals.chart_title'] = 'Kommende fornyelser';
$lang['AdminReports.retention.cohorts_shown'] = 'Her vises de seneste årgange fra » %1$s «.';
$lang['AdminReports.retention.note'] = 'Kohorter inddeler kunder efter den måned, hvor de modtog deres første ydelse. Hver celle angiver den andel af kohorten, der har aktive ydelser i den pågældende måned, baseret på det seneste øjebliksbillede for måneden. Tallene er uafhængige af valuta.';
$lang['AdminReports.retention.col_clients'] = 'Kunder';
$lang['AdminReports.retention.col_cohort'] = 'Kohorte';
$lang['AdminReports.retention.grid_title'] = 'Kohortefastholdelse';
$lang['AdminReports.revenue.allocation_note'] = 'Pakkeomsætningen fordeles forholdsmæssigt på fakturalinjerne og er et omtrentligt tal.';
$lang['AdminReports.revenue.breakdown_empty'] = 'Der foreligger ingen omsætningstal for denne periode.';
$lang['AdminReports.revenue.breakdown_unknown'] = 'Ukendt';
$lang['AdminReports.revenue.breakdown_unassigned'] = 'Ikke tildelt';
$lang['AdminReports.revenue.breakdown_refunded'] = 'Refunderet';
$lang['AdminReports.revenue.breakdown_collected'] = 'Samlet';
$lang['AdminReports.revenue.breakdown_name'] = 'Navn';
$lang['AdminReports.revenue.dimension_package'] = 'Pakke';
$lang['AdminReports.revenue.dimension_gateway'] = 'Gateway';
$lang['AdminReports.revenue.dimension_total'] = 'I alt';
$lang['AdminReports.revenue.field_dimension'] = 'Fordeling efter';
$lang['AdminReports.charts.revenue_refunded'] = 'Refunderet';
$lang['AdminReports.charts.revenue_invoiced'] = 'Faktureret';
$lang['AdminReports.charts.revenue_collected'] = 'Samlet';
$lang['AdminReports.charts.revenue_title'] = 'Omsætning';
$lang['AdminReports.charts.churn_net'] = 'Nettoafgang';
$lang['AdminReports.charts.churn_gross'] = 'Bruttoafgang';
$lang['AdminReports.charts.churn_title'] = 'MRR-afgangsprocent';
$lang['AdminReports.charts.movement_churn'] = 'Kundeafgang';
$lang['AdminReports.charts.movement_contraction'] = 'Sammentrækning';
$lang['AdminReports.charts.movement_reactivation'] = 'Genaktivering';
$lang['AdminReports.charts.movement_expansion'] = 'Udvidelse';
$lang['AdminReports.charts.movement_new'] = 'Nyt';
$lang['AdminReports.charts.movements_title'] = 'MRR-bevægelser';
$lang['AdminReports.charts.mrr_suspended_series'] = 'Suspenderet MRR';
$lang['AdminReports.charts.mrr_series'] = 'MRR';
$lang['AdminReports.charts.mrr_title'] = 'Månedlige tilbagevendende indtægter';
$lang['AdminReports.tiles.active_services'] = 'Aktive tjenester';
$lang['AdminReports.tiles.active_clients'] = 'Aktive kunder';
$lang['AdminReports.tiles.ltv_insufficient'] = 'Utilstrækkelig historik';
$lang['AdminReports.tiles.ltv'] = 'LTV';
$lang['AdminReports.tiles.arpu'] = 'ARPU';
$lang['AdminReports.tiles.net_mrr_growth'] = 'Vækst i netto-MRR';
$lang['AdminReports.tiles.arr'] = 'ARR';
$lang['AdminReports.tiles.suspended_mrr'] = 'inkl. %1$s er midlertidigt lukket';
$lang['AdminReports.tiles.mrr'] = 'Kontraktmæssig MRR';
$lang['AdminReports.empty.no_series'] = 'Der foreligger ingen data for den valgte periode.';
$lang['AdminReports.empty.collecting_since'] = 'Indsamling af data siden %1$s';
$lang['AdminReports.empty.no_data_text'] = 'Dataindsamlingen starter ved den næste cron-kørsel. Kom tilbage, når et øjebliksbillede er færdiggjort.';
$lang['AdminReports.empty.no_data_title'] = 'Der er endnu ingen analysedata';
$lang['AdminReports.dashboard.refreshing'] = 'Forfriskende…';
$lang['AdminReports.dashboard.refresh'] = 'Opdater';
$lang['AdminReports.dashboard.never'] = 'Aldrig';
$lang['AdminReports.dashboard.data_as_of'] = 'Data pr. %1$s';
$lang['AdminReports.filter.consolidated_tooltip'] = 'Omregn alle valutaer til din standardvaluta ved hjælp af valutakursen på datoen for øjebliksbilledet.';
$lang['AdminReports.filter.field_consolidated'] = 'Saml under %1$s';
$lang['AdminReports.filter.field_currency'] = 'Valuta';
$lang['AdminReports.filter.granularity_month'] = 'Månedligt';
$lang['AdminReports.filter.granularity_week'] = 'Ugentligt';
$lang['AdminReports.filter.granularity_day'] = 'Dagligt';
$lang['AdminReports.filter.field_granularity'] = 'Granularitet';
$lang['AdminReports.filter.field_end'] = 'Til';

