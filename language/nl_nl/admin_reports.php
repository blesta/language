<?php
/**
 * Admin Reports
 *
 * @package blesta
 * @subpackage blesta.language.nl_nl
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminReports.!error.refresh.already_running'] = 'Er wordt al een momentopname gemaakt. Probeer het over even nog eens.';
$lang['AdminReports.!error.refresh.failed'] = 'Het vernieuwen van de momentopname is niet gelukt. Probeer het later nog eens.';
$lang['AdminReports.!error.refresh.invalid_csrf'] = 'Uw sessie is verlopen. Laad de pagina opnieuw en probeer het nog eens.';
$lang['AdminReports.!error.refresh.rate_limited'] = 'Er is in de afgelopen 5 minuten een momentopname vernieuwd. Wacht even voordat u opnieuw vernieuwt.';
$lang['AdminReports.charts.churn_gross'] = 'Bruto-uitstroom';
$lang['AdminReports.charts.churn_net'] = 'Netto-klantverloop';
$lang['AdminReports.charts.churn_title'] = 'MRR-verlooppercentage';
$lang['AdminReports.charts.ltv_note'] = 'Maandelijks. LTV = ARPU ÷ klantverloop voor die maand; er ontstaan hiaten wanneer het verloop nul is of wanneer er onvoldoende historische gegevens beschikbaar zijn.';
$lang['AdminReports.charts.ltv_series'] = 'LTV';
$lang['AdminReports.charts.ltv_title'] = 'LTV-trend';
$lang['AdminReports.charts.movement_churn'] = 'Klantenverloop';
$lang['AdminReports.charts.movement_contraction'] = 'Samentrekking';
$lang['AdminReports.charts.movement_expansion'] = 'Uitbreiding';
$lang['AdminReports.charts.movement_new'] = 'Nieuw';
$lang['AdminReports.charts.movement_reactivation'] = 'Heractivering';
$lang['AdminReports.charts.movements_title'] = 'MRR-bewegingen';
$lang['AdminReports.charts.mrr_series'] = 'MRR';
$lang['AdminReports.charts.mrr_suspended_series'] = 'Opgeschorte MRR';
$lang['AdminReports.charts.mrr_title'] = 'Maandelijkse terugkerende inkomsten';
$lang['AdminReports.charts.revenue_collected'] = 'Verzameld';
$lang['AdminReports.charts.revenue_invoiced'] = 'Gefactureerd';
$lang['AdminReports.charts.revenue_refunded'] = 'Terugbetaald';
$lang['AdminReports.charts.revenue_title'] = 'Omzet';
$lang['AdminReports.dashboard.data_as_of'] = 'Gegevens per %1$s';
$lang['AdminReports.dashboard.never'] = 'Nooit';
$lang['AdminReports.dashboard.refresh'] = 'Vernieuwen';
$lang['AdminReports.dashboard.refreshing'] = 'Verfrissend…';
$lang['AdminReports.empty.collecting_since'] = 'Gegevens verzamelen sinds %1$s';
$lang['AdminReports.empty.no_data_text'] = 'Het verzamelen van gegevens begint bij de volgende cron-run. Kom later nog eens terug zodra de snapshot is voltooid.';
$lang['AdminReports.empty.no_data_title'] = 'Er zijn nog geen analysegegevens beschikbaar';
$lang['AdminReports.empty.no_series'] = 'Er zijn geen gegevens beschikbaar voor de geselecteerde periode.';
$lang['AdminReports.error.load_failed'] = 'De gegevens kunnen niet worden geladen. Probeer het nog eens.';
$lang['AdminReports.filter.consolidated_tooltip'] = 'Reken alle valuta’s om naar je standaardvaluta aan de hand van de wisselkoers op de datum van de momentopname.';
$lang['AdminReports.filter.field_consolidated'] = 'Samenvoegen tot %1$s';
$lang['AdminReports.filter.field_currency'] = 'Valuta';
$lang['AdminReports.filter.field_daterange'] = 'Datumperiode';
$lang['AdminReports.filter.field_end'] = 'Aan';
$lang['AdminReports.filter.field_granularity'] = 'Granulariteit';
$lang['AdminReports.filter.field_start'] = 'Van';
$lang['AdminReports.filter.granularity_day'] = 'Dagelijks';
$lang['AdminReports.filter.granularity_month'] = 'Maandelijks';
$lang['AdminReports.filter.granularity_week'] = 'Wekelijks';
$lang['AdminReports.filter.preset_12m'] = '12 maanden';
$lang['AdminReports.filter.preset_30d'] = '30 dagen';
$lang['AdminReports.filter.preset_90d'] = '90 dagen';
$lang['AdminReports.filter.preset_custom'] = 'Op maat';
$lang['AdminReports.index.box_title'] = 'Rapporten';
$lang['AdminReports.index.customize'] = 'Pas  aan';
$lang['AdminReports.index.field_format'] = 'Formaat';
$lang['AdminReports.index.field_report_type'] = 'Rapporttype';
$lang['AdminReports.index.field_submit'] = 'Exporteer';
$lang['AdminReports.index.page_title'] = 'Factureringsrapporten';
$lang['AdminReports.index.reports'] = 'genereren';
$lang['AdminReports.index.tab_exports'] = 'Uitvoer';
$lang['AdminReports.index.tab_overview'] = 'Overzicht';
$lang['AdminReports.index.tab_renewals'] = 'Verlengingen';
$lang['AdminReports.index.tab_retention'] = 'Behoud';
$lang['AdminReports.index.tab_revenue'] = 'Omzet';
$lang['AdminReports.loading'] = 'Bezig met laden…';
$lang['AdminReports.renewals.chart_title'] = 'Aankomende verlengingen';
$lang['AdminReports.renewals.col_amount'] = 'Verwacht bedrag';
$lang['AdminReports.renewals.col_count'] = 'Diensten verlengen';
$lang['AdminReports.renewals.col_month'] = 'Maand';
$lang['AdminReports.renewals.computed'] = 'Prognose berekend %1$s';
$lang['AdminReports.renewals.note'] = 'Verwachte inkomsten uit verlengingen voor de komende 12 maanden: elke geplande verlenging per dienst, doorgerekend vanaf de volgende verlengingsdatum met de factureringsperiode, tegen de prijs voor die periode, na aftrek van terugkerende kortingsbonnen. Bij een geplande opzegging worden er geen prognoses meer gemaakt voor de betreffende diensten. Berekend op basis van de meest recente momentopname.';
$lang['AdminReports.renewals.series_amount'] = 'Herverstelbedrag';
$lang['AdminReports.retention.cohorts_shown'] = 'Hieronder worden de meest recente cohorten van het onderzoek ‘ %1$s ’ weergegeven.';
$lang['AdminReports.retention.col_clients'] = 'Klanten';
$lang['AdminReports.retention.col_cohort'] = 'Cohort';
$lang['AdminReports.retention.grid_title'] = 'Behoud van cohorten';
$lang['AdminReports.retention.note'] = 'Cohorten groeperen klanten op basis van de maand waarin ze voor het eerst gebruik hebben gemaakt van een dienst. Elke cel geeft het aandeel weer van het cohort dat in die maand actieve diensten heeft, zoals vastgelegd in de laatste momentopname van die maand. De aantallen zijn valutaneutraal.';
$lang['AdminReports.revenue.allocation_note'] = 'De omzet uit pakketten wordt pro rata over de factuurregels verdeeld en is een schatting.';
$lang['AdminReports.revenue.breakdown_collected'] = 'Verzameld';
$lang['AdminReports.revenue.breakdown_empty'] = 'Er zijn geen omzetgegevens voor deze periode.';
$lang['AdminReports.revenue.breakdown_name'] = 'Naam';
$lang['AdminReports.revenue.breakdown_refunded'] = 'Terugbetaald';
$lang['AdminReports.revenue.breakdown_unassigned'] = 'Niet toegewezen';
$lang['AdminReports.revenue.breakdown_unknown'] = 'Onbekend';
$lang['AdminReports.revenue.dimension_gateway'] = 'Gateway';
$lang['AdminReports.revenue.dimension_package'] = 'Verpakking';
$lang['AdminReports.revenue.dimension_total'] = 'Totaal';
$lang['AdminReports.revenue.field_dimension'] = 'Uitsplitsing naar';
$lang['AdminReports.tiles.active_clients'] = 'Actieve klanten';
$lang['AdminReports.tiles.active_services'] = 'Actieve diensten';
$lang['AdminReports.tiles.arpu'] = 'ARPU';
$lang['AdminReports.tiles.arr'] = 'ARR';
$lang['AdminReports.tiles.ltv'] = 'LTV';
$lang['AdminReports.tiles.ltv_insufficient'] = 'Onvoldoende anamnese';
$lang['AdminReports.tiles.mrr'] = 'Gecontracteerde MRR';
$lang['AdminReports.tiles.net_mrr_growth'] = 'Netto MRR-groei';
$lang['AdminReports.tiles.suspended_mrr'] = 'incl. %1$s opgeschort';

