<?php
/**
 * Admin Reports
 *
 * @package blesta
 * @subpackage blesta.language.pt_br
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminReports.!error.refresh.already_running'] = 'Já está sendo executado um snapshot. Por favor, tente novamente daqui a pouco.';
$lang['AdminReports.!error.refresh.failed'] = 'Não foi possível concluir a atualização do snapshot. Tente novamente mais tarde.';
$lang['AdminReports.!error.refresh.invalid_csrf'] = 'Sua sessão expirou. Atualize a página e tente novamente.';
$lang['AdminReports.!error.refresh.rate_limited'] = 'Um instantâneo foi atualizado nos últimos 5 minutos. Aguarde antes de atualizar novamente.';
$lang['AdminReports.charts.churn_gross'] = 'Taxa bruta de cancelamento';
$lang['AdminReports.charts.churn_net'] = 'Taxa líquida de cancelamento';
$lang['AdminReports.charts.churn_title'] = 'Taxa de cancelamento do MRR';
$lang['AdminReports.charts.ltv_note'] = 'Mensal. LTV = ARPU ÷ taxa de rotatividade de clientes do mês; ocorrem lacunas quando a rotatividade é zero ou o histórico é insuficiente.';
$lang['AdminReports.charts.ltv_series'] = 'LTV';
$lang['AdminReports.charts.ltv_title'] = 'Tendência do LTV';
$lang['AdminReports.charts.movement_churn'] = 'Taxa de cancelamento';
$lang['AdminReports.charts.movement_contraction'] = 'Contração';
$lang['AdminReports.charts.movement_expansion'] = 'Expansão';
$lang['AdminReports.charts.movement_new'] = 'Novo';
$lang['AdminReports.charts.movement_reactivation'] = 'Reativação';
$lang['AdminReports.charts.movements_title'] = 'Movimentos do MRR';
$lang['AdminReports.charts.mrr_series'] = 'MRR';
$lang['AdminReports.charts.mrr_suspended_series'] = 'MRR suspenso';
$lang['AdminReports.charts.mrr_title'] = 'Receita recorrente mensal';
$lang['AdminReports.charts.revenue_collected'] = 'Recolhido';
$lang['AdminReports.charts.revenue_invoiced'] = 'Faturado';
$lang['AdminReports.charts.revenue_refunded'] = 'Reembolsado';
$lang['AdminReports.charts.revenue_title'] = 'Receita';
$lang['AdminReports.dashboard.data_as_of'] = 'Dados em %1$s';
$lang['AdminReports.dashboard.never'] = 'Nunca';
$lang['AdminReports.dashboard.refresh'] = 'Atualizar';
$lang['AdminReports.dashboard.refreshing'] = 'Revigorante…';
$lang['AdminReports.empty.collecting_since'] = 'Coletando dados desde %1$s';
$lang['AdminReports.empty.no_data_text'] = 'A coleta de dados começa na próxima execução do cron. Verifique novamente assim que o snapshot for concluído.';
$lang['AdminReports.empty.no_data_title'] = 'Ainda não há dados analíticos';
$lang['AdminReports.empty.no_series'] = 'Não há dados disponíveis para o período selecionado.';
$lang['AdminReports.error.load_failed'] = 'Não foi possível carregar os dados. Por favor, tente novamente.';
$lang['AdminReports.filter.consolidated_tooltip'] = 'Converta todas as moedas para a sua moeda padrão usando a taxa de câmbio da data do instantâneo.';
$lang['AdminReports.filter.field_consolidated'] = 'Consolidar em %1$s';
$lang['AdminReports.filter.field_currency'] = 'Moeda';
$lang['AdminReports.filter.field_daterange'] = 'Intervalo de datas';
$lang['AdminReports.filter.field_end'] = 'Para';
$lang['AdminReports.filter.field_granularity'] = 'Granularidade';
$lang['AdminReports.filter.field_start'] = 'De';
$lang['AdminReports.filter.granularity_day'] = 'Diário';
$lang['AdminReports.filter.granularity_month'] = 'Mensal';
$lang['AdminReports.filter.granularity_week'] = 'Semanal';
$lang['AdminReports.filter.preset_12m'] = '12 meses';
$lang['AdminReports.filter.preset_30d'] = '30 dias';
$lang['AdminReports.filter.preset_90d'] = '90 dias';
$lang['AdminReports.filter.preset_custom'] = 'Personalizado';
$lang['AdminReports.index.box_title'] = 'Relatórios';
$lang['AdminReports.index.customize'] = 'Personalizar';
$lang['AdminReports.index.field_format'] = 'Formato';
$lang['AdminReports.index.field_report_type'] = 'Tipo de relatório';
$lang['AdminReports.index.field_submit'] = 'Exportação';
$lang['AdminReports.index.page_title'] = 'Relatórios de faturamento';
$lang['AdminReports.index.reports'] = 'Gerar';
$lang['AdminReports.index.tab_exports'] = 'Exportações';
$lang['AdminReports.index.tab_overview'] = 'Visão geral';
$lang['AdminReports.index.tab_renewals'] = 'Renovações';
$lang['AdminReports.index.tab_retention'] = 'Retenção';
$lang['AdminReports.index.tab_revenue'] = 'Receita';
$lang['AdminReports.loading'] = 'Carregando…';
$lang['AdminReports.renewals.chart_title'] = 'Próximas renovações';
$lang['AdminReports.renewals.col_amount'] = 'Valor previsto';
$lang['AdminReports.renewals.col_count'] = 'Renovação de serviços';
$lang['AdminReports.renewals.col_month'] = 'Mês';
$lang['AdminReports.renewals.computed'] = 'Previsão calculada %1$s';
$lang['AdminReports.renewals.note'] = 'Receita projetada de renovação para os próximos 12 meses: cada renovação prevista para cada serviço, antecipada em relação à sua próxima data de renovação pelo período de faturamento, ao preço do período, líquido de descontos recorrentes. A projeção dos serviços é interrompida no momento do cancelamento programado. Calculado com base no instantâneo mais recente.';
$lang['AdminReports.renewals.series_amount'] = 'Valor da renovação';
$lang['AdminReports.retention.cohorts_shown'] = 'Exibindo as coortes mais recentes do %1$s.';
$lang['AdminReports.retention.col_clients'] = 'Clientes';
$lang['AdminReports.retention.col_cohort'] = 'Coorte';
$lang['AdminReports.retention.grid_title'] = 'Retenção da coorte';
$lang['AdminReports.retention.note'] = 'As coortes agrupam os clientes de acordo com o mês em que utilizaram o serviço pela primeira vez. Cada célula representa a proporção da coorte que mantinha serviços ativos naquele mês, conforme os dados do último instantâneo do mês. As contagens não levam em conta a moeda.';
$lang['AdminReports.revenue.allocation_note'] = 'A receita do pacote é distribuída proporcionalmente entre as linhas da fatura e trata-se de uma estimativa.';
$lang['AdminReports.revenue.breakdown_collected'] = 'Recolhido';
$lang['AdminReports.revenue.breakdown_empty'] = 'Não há dados de receita para este período.';
$lang['AdminReports.revenue.breakdown_name'] = 'Nome';
$lang['AdminReports.revenue.breakdown_refunded'] = 'Reembolsado';
$lang['AdminReports.revenue.breakdown_unassigned'] = 'Sem atribuição';
$lang['AdminReports.revenue.breakdown_unknown'] = 'Desconhecido';
$lang['AdminReports.revenue.dimension_gateway'] = 'Gateway';
$lang['AdminReports.revenue.dimension_package'] = 'Embalagem';
$lang['AdminReports.revenue.dimension_total'] = 'Total';
$lang['AdminReports.revenue.field_dimension'] = 'Discriminação por';
$lang['AdminReports.tiles.active_clients'] = 'Clientes ativos';
$lang['AdminReports.tiles.active_services'] = 'Serviços ativos';
$lang['AdminReports.tiles.arpu'] = 'ARPU';
$lang['AdminReports.tiles.arr'] = 'ARR';
$lang['AdminReports.tiles.ltv'] = 'LTV';
$lang['AdminReports.tiles.ltv_insufficient'] = 'Histórico insuficiente';
$lang['AdminReports.tiles.mrr'] = 'MRR contratado';
$lang['AdminReports.tiles.net_mrr_growth'] = 'Crescimento líquido da MRR';
$lang['AdminReports.tiles.suspended_mrr'] = 'incluindo “ %1$s ”, suspenso';

