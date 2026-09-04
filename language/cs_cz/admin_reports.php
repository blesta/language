<?php
/**
 * Admin Reports
 *
 * @package blesta
 * @subpackage blesta.language.cs_cz
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminReports.!error.refresh.already_running'] = 'Právě probíhá snímání. Zkuste to prosím za chvíli znovu.';
$lang['AdminReports.!error.refresh.failed'] = 'Obnovení snímku se nepodařilo dokončit. Zkuste to prosím později.';
$lang['AdminReports.!error.refresh.invalid_csrf'] = 'Vaše relace vypršela. Obnovte prosím stránku a zkuste to znovu.';
$lang['AdminReports.!error.refresh.rate_limited'] = 'Snímek byl aktualizován během posledních 5 minut. Před dalším aktualizováním prosím počkejte.';
$lang['AdminReports.charts.churn_gross'] = 'Hrubá míra odchodu zákazníků';
$lang['AdminReports.charts.churn_net'] = 'Čistá fluktuace';
$lang['AdminReports.charts.churn_title'] = 'Míra odchodu zákazníků (MRR)';
$lang['AdminReports.charts.ltv_note'] = 'Měsíčně. LTV = ARPU ÷ míra odchodu zákazníků za daný měsíc; mezery se objevují, pokud je míra odchodu nulová nebo není k dispozici dostatek historických údajů.';
$lang['AdminReports.charts.ltv_series'] = 'LTV';
$lang['AdminReports.charts.ltv_title'] = 'Vývoj LTV';
$lang['AdminReports.charts.movement_churn'] = 'Odchod zákazníků';
$lang['AdminReports.charts.movement_contraction'] = 'Kontrakce';
$lang['AdminReports.charts.movement_expansion'] = 'Rozšíření';
$lang['AdminReports.charts.movement_new'] = 'Novinka';
$lang['AdminReports.charts.movement_reactivation'] = 'Reaktivace';
$lang['AdminReports.charts.movements_title'] = 'Pohyby MRR';
$lang['AdminReports.charts.mrr_series'] = 'MRR';
$lang['AdminReports.charts.mrr_suspended_series'] = 'Pozastavený MRR';
$lang['AdminReports.charts.mrr_title'] = 'Měsíční opakující se tržby';
$lang['AdminReports.charts.revenue_collected'] = 'Shromážděno';
$lang['AdminReports.charts.revenue_invoiced'] = 'Fakturováno';
$lang['AdminReports.charts.revenue_refunded'] = 'Vráceno';
$lang['AdminReports.charts.revenue_title'] = 'Tržby';
$lang['AdminReports.dashboard.data_as_of'] = 'Údaje k datu %1$s';
$lang['AdminReports.dashboard.never'] = 'Nikdy';
$lang['AdminReports.dashboard.refresh'] = 'Obnovit';
$lang['AdminReports.dashboard.refreshing'] = 'Osvěžující…';
$lang['AdminReports.empty.collecting_since'] = 'Shromažďování údajů od roku %1$s';
$lang['AdminReports.empty.no_data_text'] = 'Sběr dat začne při příštím spuštění cronu. Zkuste to znovu, až bude snímání dokončeno.';
$lang['AdminReports.empty.no_data_title'] = 'Zatím nejsou k dispozici žádné analytické údaje';
$lang['AdminReports.empty.no_series'] = 'Pro vybrané období nejsou k dispozici žádné údaje.';
$lang['AdminReports.error.load_failed'] = 'Nelze načíst data. Zkuste to prosím znovu.';
$lang['AdminReports.filter.consolidated_tooltip'] = 'Přepočítejte všechny měny na vaši výchozí měnu pomocí směnného kurzu platného k datu snímku.';
$lang['AdminReports.filter.field_consolidated'] = 'Sloučit do %1$s';
$lang['AdminReports.filter.field_currency'] = 'Měna';
$lang['AdminReports.filter.field_daterange'] = 'Časové období';
$lang['AdminReports.filter.field_end'] = 'K';
$lang['AdminReports.filter.field_granularity'] = 'Granularita';
$lang['AdminReports.filter.field_start'] = 'Od';
$lang['AdminReports.filter.granularity_day'] = 'Denně';
$lang['AdminReports.filter.granularity_month'] = 'Měsíční';
$lang['AdminReports.filter.granularity_week'] = 'Týdenní';
$lang['AdminReports.filter.preset_12m'] = '12 měsíců';
$lang['AdminReports.filter.preset_30d'] = '30 dní';
$lang['AdminReports.filter.preset_90d'] = '90 dní';
$lang['AdminReports.filter.preset_custom'] = 'Na míru';
$lang['AdminReports.index.box_title'] = 'Zprávy';
$lang['AdminReports.index.customize'] = 'Přizpůsobení';
$lang['AdminReports.index.field_format'] = 'Formát';
$lang['AdminReports.index.field_report_type'] = 'Typ zprávy';
$lang['AdminReports.index.field_submit'] = 'Export';
$lang['AdminReports.index.page_title'] = 'Zprávy o vyúčtování';
$lang['AdminReports.index.reports'] = 'Generovat';
$lang['AdminReports.index.tab_exports'] = 'Vývoz';
$lang['AdminReports.index.tab_overview'] = 'Přehled';
$lang['AdminReports.index.tab_renewals'] = 'Obnovení';
$lang['AdminReports.index.tab_retention'] = 'Udržení';
$lang['AdminReports.index.tab_revenue'] = 'Tržby';
$lang['AdminReports.loading'] = 'Načítání…';
$lang['AdminReports.renewals.chart_title'] = 'Nadcházející prodloužení';
$lang['AdminReports.renewals.col_amount'] = 'Očekávaná částka';
$lang['AdminReports.renewals.col_count'] = 'Obnovení služeb';
$lang['AdminReports.renewals.col_month'] = 'Měsíc';
$lang['AdminReports.renewals.computed'] = 'Prognóza vypočítána %1$s';
$lang['AdminReports.renewals.note'] = 'Předpokládané tržby z prodloužení smluv za následujících 12 měsíců: každé plánované prodloužení jednotlivých služeb, posunuté od příslušného data prodloužení o délku fakturačního období, a to za cenu platnou pro dané období po odečtení opakujících se slev. U služeb se prognóza přestává počítat v okamžiku plánovaného zrušení. Vypočítáno na základě nejnovějšího snímku dat.';
$lang['AdminReports.renewals.series_amount'] = 'Výše obnovy';
$lang['AdminReports.retention.cohorts_shown'] = 'Zobrazují se nejnovější kohorty studie „ %1$s “.';
$lang['AdminReports.retention.col_clients'] = 'Klienti';
$lang['AdminReports.retention.col_cohort'] = 'Kohorta';
$lang['AdminReports.retention.grid_title'] = 'Udržení kohorty';
$lang['AdminReports.retention.note'] = 'Kohorty seskupují klienty podle měsíce, ve kterém jim byla poskytnuta první služba. Každá buňka představuje podíl kohorty, u které jsou v daném měsíci aktivní služby, a to podle údajů z posledního měsíčního přehledu. Počty jsou nezávislé na měně.';
$lang['AdminReports.revenue.allocation_note'] = 'Tržby z balíčků jsou rozděleny poměrným dílem mezi jednotlivé položky faktury a jedná se o přibližnou hodnotu.';
$lang['AdminReports.revenue.breakdown_collected'] = 'Shromážděno';
$lang['AdminReports.revenue.breakdown_empty'] = 'Za toto období nejsou k dispozici žádné údaje o tržbách.';
$lang['AdminReports.revenue.breakdown_name'] = 'Jméno';
$lang['AdminReports.revenue.breakdown_refunded'] = 'Vráceno';
$lang['AdminReports.revenue.breakdown_unassigned'] = 'Nepřiřazeno';
$lang['AdminReports.revenue.breakdown_unknown'] = 'Neznámé';
$lang['AdminReports.revenue.dimension_gateway'] = 'Brána';
$lang['AdminReports.revenue.dimension_package'] = 'Balení';
$lang['AdminReports.revenue.dimension_total'] = 'Celkem';
$lang['AdminReports.revenue.field_dimension'] = 'Rozčlenění podle';
$lang['AdminReports.tiles.active_clients'] = 'Aktivní klienti';
$lang['AdminReports.tiles.active_services'] = 'Aktivní služby';
$lang['AdminReports.tiles.arpu'] = 'ARPU';
$lang['AdminReports.tiles.arr'] = 'ARR';
$lang['AdminReports.tiles.ltv'] = 'LTV';
$lang['AdminReports.tiles.ltv_insufficient'] = 'Nedostatečná anamnéza';
$lang['AdminReports.tiles.mrr'] = 'Smluvní MRR';
$lang['AdminReports.tiles.net_mrr_growth'] = 'Čistý růst MRR';
$lang['AdminReports.tiles.suspended_mrr'] = 'včetně pozastavení služby „ %1$s “';

