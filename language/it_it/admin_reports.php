<?php
/**
 * Admin Reports
 *
 * @package blesta
 * @subpackage blesta.language.it_it
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminReports.index.customize'] = 'Personalizzare';
$lang['AdminReports.index.reports'] = 'Generare';
$lang['AdminReports.index.field_submit'] = 'Esportazione';
$lang['AdminReports.index.field_report_type'] = 'Tipo di rapporto';
$lang['AdminReports.index.field_format'] = 'Formato';
$lang['AdminReports.index.box_title'] = 'Rapporti';
$lang['AdminReports.index.page_title'] = 'Rapporti di fatturazione';
$lang['AdminReports.filter.field_start'] = 'Da';
$lang['AdminReports.filter.preset_custom'] = 'Personalizzato';
$lang['AdminReports.!error.refresh.failed'] = 'Non è stato possibile completare l\'aggiornamento dello snapshot. Riprovare più tardi.';
$lang['AdminReports.filter.preset_12m'] = '12 mesi';
$lang['AdminReports.!error.refresh.already_running'] = 'È già in corso un\'istantanea. Si prega di riprovare tra qualche istante.';
$lang['AdminReports.filter.preset_90d'] = '90 giorni';
$lang['AdminReports.!error.refresh.rate_limited'] = 'L\'istantanea è stata aggiornata negli ultimi 5 minuti. Attendere prima di aggiornarla nuovamente.';
$lang['AdminReports.filter.preset_30d'] = '30 giorni';
$lang['AdminReports.!error.refresh.invalid_csrf'] = 'La tua sessione è scaduta. Aggiorna la pagina e riprova.';
$lang['AdminReports.filter.field_daterange'] = 'Intervallo di date';
$lang['AdminReports.error.load_failed'] = 'Impossibile caricare i dati. Riprovare.';
$lang['AdminReports.index.tab_exports'] = 'Esportazioni';
$lang['AdminReports.loading'] = 'Caricamento in corso…';
$lang['AdminReports.index.tab_renewals'] = 'Rinnovi';
$lang['AdminReports.charts.ltv_note'] = 'Mensile. LTV = ARPU ÷ tasso di abbandono dei clienti del mese; si verificano discrepanze quando il tasso di abbandono è pari a zero o i dati storici sono insufficienti.';
$lang['AdminReports.index.tab_retention'] = 'Fidelizzazione';
$lang['AdminReports.charts.ltv_series'] = 'LTV';
$lang['AdminReports.index.tab_revenue'] = 'Ricavi';
$lang['AdminReports.charts.ltv_title'] = 'Andamento dell\'LTV';
$lang['AdminReports.index.tab_overview'] = 'Panoramica';
$lang['AdminReports.renewals.computed'] = 'Previsione calcolata %1$s';
$lang['AdminReports.renewals.note'] = 'Ricavi da rinnovo previsti per i prossimi 12 mesi: ogni rinnovo previsto per ciascun servizio, anticipato rispetto alla data di rinnovo successiva di un periodo pari alla durata di fatturazione, al prezzo di periodo al netto degli sconti ricorrenti. La proiezione dei servizi termina in caso di cancellazione programmata. Calcolato sulla base dell\'istantanea più recente.';
$lang['AdminReports.renewals.col_count'] = 'Rinnovo dei servizi';
$lang['AdminReports.renewals.col_amount'] = 'Importo previsto';
$lang['AdminReports.renewals.col_month'] = 'Mese';
$lang['AdminReports.renewals.series_amount'] = 'Importo del rinnovo';
$lang['AdminReports.renewals.chart_title'] = 'Prossimi rinnovi';
$lang['AdminReports.retention.cohorts_shown'] = 'Vengono mostrate le coorti più recenti dell\'%1$s.';
$lang['AdminReports.retention.note'] = 'Le coorti raggruppano i clienti in base al mese in cui hanno usufruito del primo servizio. Ogni cella rappresenta la percentuale della coorte che, in quel mese, risulta in possesso di servizi attivi, secondo i dati dell\'ultimo snapshot del mese. I conteggi non tengono conto della valuta.';
$lang['AdminReports.retention.col_clients'] = 'Clienti';
$lang['AdminReports.retention.col_cohort'] = 'Coorte';
$lang['AdminReports.retention.grid_title'] = 'Fidelizzazione della coorte';
$lang['AdminReports.revenue.allocation_note'] = 'Il fatturato relativo al pacchetto viene ripartito proporzionalmente tra le voci della fattura e rappresenta un valore approssimativo.';
$lang['AdminReports.revenue.breakdown_empty'] = 'Non sono disponibili dati relativi al fatturato per questo periodo.';
$lang['AdminReports.revenue.breakdown_unknown'] = 'Sconosciuto';
$lang['AdminReports.revenue.breakdown_unassigned'] = 'Non assegnato';
$lang['AdminReports.revenue.breakdown_refunded'] = 'Rimborsato';
$lang['AdminReports.revenue.breakdown_collected'] = 'Raccolta';
$lang['AdminReports.revenue.breakdown_name'] = 'Nome';
$lang['AdminReports.revenue.dimension_package'] = 'Confezione';
$lang['AdminReports.revenue.dimension_gateway'] = 'Gateway';
$lang['AdminReports.revenue.dimension_total'] = 'Totale';
$lang['AdminReports.revenue.field_dimension'] = 'Ripartizione per';
$lang['AdminReports.charts.revenue_refunded'] = 'Rimborsato';
$lang['AdminReports.charts.revenue_invoiced'] = 'Fatturato';
$lang['AdminReports.charts.revenue_collected'] = 'Raccolta';
$lang['AdminReports.charts.revenue_title'] = 'Ricavi';
$lang['AdminReports.charts.churn_net'] = 'Tasso di abbandono netto';
$lang['AdminReports.charts.churn_gross'] = 'Tasso di abbandono lordo';
$lang['AdminReports.charts.churn_title'] = 'Tasso di abbandono MRR';
$lang['AdminReports.charts.movement_churn'] = 'Tasso di abbandono';
$lang['AdminReports.charts.movement_contraction'] = 'Contrazione';
$lang['AdminReports.charts.movement_reactivation'] = 'Riattivazione';
$lang['AdminReports.charts.movement_expansion'] = 'Espansione';
$lang['AdminReports.charts.movement_new'] = 'Novità';
$lang['AdminReports.charts.movements_title'] = 'Movimenti MRR';
$lang['AdminReports.charts.mrr_suspended_series'] = 'MRR sospeso';
$lang['AdminReports.charts.mrr_series'] = 'MRR';
$lang['AdminReports.charts.mrr_title'] = 'Ricavi mensili ricorrenti';
$lang['AdminReports.tiles.active_services'] = 'Servizi attivi';
$lang['AdminReports.tiles.active_clients'] = 'Clienti attivi';
$lang['AdminReports.tiles.ltv_insufficient'] = 'Cronologia insufficiente';
$lang['AdminReports.tiles.ltv'] = 'LTV';
$lang['AdminReports.tiles.arpu'] = 'ARPU';
$lang['AdminReports.tiles.net_mrr_growth'] = 'Crescita netta del MRR';
$lang['AdminReports.tiles.arr'] = 'ARR';
$lang['AdminReports.tiles.suspended_mrr'] = 'inclusa la sospensione di " %1$s "';
$lang['AdminReports.tiles.mrr'] = 'MRR contrattuale';
$lang['AdminReports.empty.no_series'] = 'Non sono disponibili dati per il periodo selezionato.';
$lang['AdminReports.empty.collecting_since'] = 'Raccogliamo dati dal %1$s';
$lang['AdminReports.empty.no_data_text'] = 'La raccolta dei dati avrà inizio con la prossima esecuzione del cron. Torna a controllare una volta completata la creazione dello snapshot.';
$lang['AdminReports.empty.no_data_title'] = 'Non sono ancora disponibili dati analitici';
$lang['AdminReports.dashboard.refreshing'] = 'Rinfrescante…';
$lang['AdminReports.dashboard.refresh'] = 'Aggiorna';
$lang['AdminReports.dashboard.never'] = 'Mai';
$lang['AdminReports.dashboard.data_as_of'] = 'Dati aggiornati al %1$s';
$lang['AdminReports.filter.consolidated_tooltip'] = 'Ricalcola tutte le valute nella tua valuta predefinita utilizzando il tasso di cambio in vigore alla data dell\'istantanea.';
$lang['AdminReports.filter.field_consolidated'] = 'Consolidare in %1$s';
$lang['AdminReports.filter.field_currency'] = 'Valuta';
$lang['AdminReports.filter.granularity_month'] = 'Mensile';
$lang['AdminReports.filter.granularity_week'] = 'Settimanale';
$lang['AdminReports.filter.granularity_day'] = 'Quotidiano';
$lang['AdminReports.filter.field_granularity'] = 'Granularità';
$lang['AdminReports.filter.field_end'] = 'A';

