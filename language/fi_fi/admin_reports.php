<?php
/**
 * Admin Reports
 *
 * @package blesta
 * @subpackage blesta.language.fi_fi
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminReports.!error.refresh.already_running'] = 'Kuvakaappaus on jo käynnissä. Yritä uudelleen hetken kuluttua.';
$lang['AdminReports.!error.refresh.failed'] = 'Snapshotin päivitystä ei voitu suorittaa loppuun. Yritä myöhemmin uudelleen.';
$lang['AdminReports.!error.refresh.invalid_csrf'] = 'Istuntosi on vanhentunut. Päivitä sivu ja yritä uudelleen.';
$lang['AdminReports.!error.refresh.rate_limited'] = 'Tilannekuva on päivitetty viimeisten 5 minuutin aikana. Odota hetki ennen kuin päivität sen uudelleen.';
$lang['AdminReports.charts.churn_gross'] = 'Bruttokato';
$lang['AdminReports.charts.churn_net'] = 'Nettoasiakaspoistuma';
$lang['AdminReports.charts.churn_title'] = 'MRR:n asiakaspysyvyysaste';
$lang['AdminReports.charts.ltv_note'] = 'Kuukausittain. LTV = ARPU ÷ kyseisen kuukauden asiakaspohjan vaihtuvuusaste; aukkoja esiintyy, kun vaihtuvuus on nolla tai historiatiedot ovat puutteelliset.';
$lang['AdminReports.charts.ltv_series'] = 'LTV';
$lang['AdminReports.charts.ltv_title'] = 'LTV-kehitys';
$lang['AdminReports.charts.movement_churn'] = 'Asiakaspysyvyys';
$lang['AdminReports.charts.movement_contraction'] = 'Supistuminen';
$lang['AdminReports.charts.movement_expansion'] = 'Laajennus';
$lang['AdminReports.charts.movement_new'] = 'Uusi';
$lang['AdminReports.charts.movement_reactivation'] = 'Uudelleenaktivointi';
$lang['AdminReports.charts.movements_title'] = 'MRR-liikkeet';
$lang['AdminReports.charts.mrr_series'] = 'MRR';
$lang['AdminReports.charts.mrr_suspended_series'] = 'Keskeytetty MRR';
$lang['AdminReports.charts.mrr_title'] = 'Kuukausittain toistuvat tulot';
$lang['AdminReports.charts.revenue_collected'] = 'Kootut';
$lang['AdminReports.charts.revenue_invoiced'] = 'Laskutettu';
$lang['AdminReports.charts.revenue_refunded'] = 'Hyvitetty';
$lang['AdminReports.charts.revenue_title'] = 'Liikevaihto';
$lang['AdminReports.dashboard.data_as_of'] = 'Tiedot päivätty %1$s';
$lang['AdminReports.dashboard.never'] = 'Ei koskaan';
$lang['AdminReports.dashboard.refresh'] = 'Päivitä';
$lang['AdminReports.dashboard.refreshing'] = 'Virkistävää…';
$lang['AdminReports.empty.collecting_since'] = 'Tietojen kerääminen on alkanut %1$s';
$lang['AdminReports.empty.no_data_text'] = 'Tietojen kerääminen alkaa seuraavan cron-ajon yhteydessä. Tarkista tilanne uudelleen, kun tilannekuva on valmis.';
$lang['AdminReports.empty.no_data_title'] = 'Analytiikkatietoja ei ole vielä saatavilla';
$lang['AdminReports.empty.no_series'] = 'Valitulta ajanjaksolta ei ole tietoja saatavilla.';
$lang['AdminReports.error.load_failed'] = 'Tietoja ei voitu ladata. Yritä uudelleen.';
$lang['AdminReports.filter.consolidated_tooltip'] = 'Muunna kaikki valuutat oletusvaluutaksesi käyttämällä tilannehetken valuuttakurssia.';
$lang['AdminReports.filter.field_consolidated'] = 'Yhdistä seuraaviin %1$s';
$lang['AdminReports.filter.field_currency'] = 'Valuutta';
$lang['AdminReports.filter.field_daterange'] = 'Ajanjakso';
$lang['AdminReports.filter.field_end'] = 'Vastaanottaja';
$lang['AdminReports.filter.field_granularity'] = 'Tarkkuus';
$lang['AdminReports.filter.field_start'] = 'Lähettäjä:';
$lang['AdminReports.filter.granularity_day'] = 'Päivittäin';
$lang['AdminReports.filter.granularity_month'] = 'Kuukausittain';
$lang['AdminReports.filter.granularity_week'] = 'Viikoittain';
$lang['AdminReports.filter.preset_12m'] = '12 kuukautta';
$lang['AdminReports.filter.preset_30d'] = '30 päivää';
$lang['AdminReports.filter.preset_90d'] = '90 päivää';
$lang['AdminReports.filter.preset_custom'] = 'Mukautettu';
$lang['AdminReports.index.box_title'] = 'Raportit';
$lang['AdminReports.index.customize'] = 'Mukauta';
$lang['AdminReports.index.field_format'] = 'Muoto';
$lang['AdminReports.index.field_report_type'] = 'Raportin tyyppi';
$lang['AdminReports.index.field_submit'] = 'Vienti';
$lang['AdminReports.index.page_title'] = 'Laskutusraportit';
$lang['AdminReports.index.reports'] = 'Luo';
$lang['AdminReports.index.tab_exports'] = 'Vienti';
$lang['AdminReports.index.tab_overview'] = 'Yleiskatsaus';
$lang['AdminReports.index.tab_renewals'] = 'Uusimiset';
$lang['AdminReports.index.tab_retention'] = 'Pysyvyys';
$lang['AdminReports.index.tab_revenue'] = 'Liikevaihto';
$lang['AdminReports.loading'] = 'Ladataan…';
$lang['AdminReports.renewals.chart_title'] = 'Tulevat uusimiset';
$lang['AdminReports.renewals.col_amount'] = 'Arvioitu summa';
$lang['AdminReports.renewals.col_count'] = 'Palveluiden uusiminen';
$lang['AdminReports.renewals.col_month'] = 'Kuukausi';
$lang['AdminReports.renewals.computed'] = 'Ennuste laskettu %1$s';
$lang['AdminReports.renewals.note'] = 'Ennustetut uusimistulot seuraaville 12 kuukaudelle: jokainen palvelun aikataulun mukainen uusinta, joka on siirretty eteenpäin seuraavasta uusimispäivästä laskutuskauden verran, kauden hintaan ilman toistuvia alennuskuponkeja. Palveluiden ennusteet päättyvät aikataulun mukaisessa irtisanomisessa. Laskettu viimeisimmän tilannekatsauksen perusteella.';
$lang['AdminReports.renewals.series_amount'] = 'Uusimismäärä';
$lang['AdminReports.retention.cohorts_shown'] = 'Näytetään %1$s -sivuston tuoreimmat kohortit.';
$lang['AdminReports.retention.col_clients'] = 'Asiakkaat';
$lang['AdminReports.retention.col_cohort'] = 'Kohortti';
$lang['AdminReports.retention.grid_title'] = 'Kohortin pysyvyys';
$lang['AdminReports.retention.note'] = 'Kohortit ryhmittelevät asiakkaat sen kuukauden mukaan, jolloin heille tarjottiin ensimmäinen palvelu. Kukin solu kuvaa sen osuuden kohortista, jolla on kyseisenä kuukautena aktiivisia palveluita; luku on peräisin kyseisen kuukauden viimeisimmästä tilannekatsauksesta. Lukumäärät eivät riipu valuutasta.';
$lang['AdminReports.revenue.allocation_note'] = 'Pakettitulot jaetaan suhteutettuna laskun rivikohtaisesti, ja kyseessä on arvioitu summa.';
$lang['AdminReports.revenue.breakdown_collected'] = 'Kootut';
$lang['AdminReports.revenue.breakdown_empty'] = 'Tältä ajanjaksolta ei ole tulotietoja.';
$lang['AdminReports.revenue.breakdown_name'] = 'Nimi';
$lang['AdminReports.revenue.breakdown_refunded'] = 'Hyvitetty';
$lang['AdminReports.revenue.breakdown_unassigned'] = 'Määrittelemätön';
$lang['AdminReports.revenue.breakdown_unknown'] = 'Tuntematon';
$lang['AdminReports.revenue.dimension_gateway'] = 'Yhdyskäytävä';
$lang['AdminReports.revenue.dimension_package'] = 'Paketti';
$lang['AdminReports.revenue.dimension_total'] = 'Yhteensä';
$lang['AdminReports.revenue.field_dimension'] = 'Erittely';
$lang['AdminReports.tiles.active_clients'] = 'Aktiiviset asiakkaat';
$lang['AdminReports.tiles.active_services'] = 'Aktiiviset palvelut';
$lang['AdminReports.tiles.arpu'] = 'ARPU';
$lang['AdminReports.tiles.arr'] = 'ARR';
$lang['AdminReports.tiles.ltv'] = 'LTV';
$lang['AdminReports.tiles.ltv_insufficient'] = 'Tiedot puutteelliset';
$lang['AdminReports.tiles.mrr'] = 'Sopimusperusteinen kuukausitulo (MRR)';
$lang['AdminReports.tiles.net_mrr_growth'] = 'MRR:n nettokasvu';
$lang['AdminReports.tiles.suspended_mrr'] = 'mukaan lukien %1$s keskeytetty';

