<?php
/**
 * Admin Reports
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminReports.!error.refresh.already_running'] = 'Ya se está ejecutando una instantánea. Inténtalo de nuevo dentro de un momento.';
$lang['AdminReports.!error.refresh.failed'] = 'No se ha podido completar la actualización de la instantánea. Inténtalo de nuevo más tarde.';
$lang['AdminReports.!error.refresh.invalid_csrf'] = 'Tu sesión ha caducado. Actualiza la página e inténtalo de nuevo.';
$lang['AdminReports.!error.refresh.rate_limited'] = 'Se ha actualizado una instantánea en los últimos 5 minutos. Por favor, espera antes de volver a actualizar.';
$lang['AdminReports.charts.churn_gross'] = 'Tasa bruta de cancelación';
$lang['AdminReports.charts.churn_net'] = 'Tasa de pérdida neta de clientes';
$lang['AdminReports.charts.churn_title'] = 'Tasa de pérdida de MRR';
$lang['AdminReports.charts.ltv_note'] = 'Mensual. LTV = ARPU ÷ tasa de pérdida de clientes del mes; se producen lagunas cuando la tasa de pérdida es cero o el historial es insuficiente.';
$lang['AdminReports.charts.ltv_series'] = 'LTV';
$lang['AdminReports.charts.ltv_title'] = 'Evolución del LTV';
$lang['AdminReports.charts.movement_churn'] = 'Tasa de cancelación';
$lang['AdminReports.charts.movement_contraction'] = 'Contracción';
$lang['AdminReports.charts.movement_expansion'] = 'Expansión';
$lang['AdminReports.charts.movement_new'] = 'Nuevo';
$lang['AdminReports.charts.movement_reactivation'] = 'Reactivación';
$lang['AdminReports.charts.movements_title'] = 'Movimientos del MRR';
$lang['AdminReports.charts.mrr_series'] = 'MRR';
$lang['AdminReports.charts.mrr_suspended_series'] = 'MRR suspendido';
$lang['AdminReports.charts.mrr_title'] = 'Ingresos recurrentes mensuales';
$lang['AdminReports.charts.revenue_collected'] = 'Recopilado';
$lang['AdminReports.charts.revenue_invoiced'] = 'Facturado';
$lang['AdminReports.charts.revenue_refunded'] = 'Reembolsado';
$lang['AdminReports.charts.revenue_title'] = 'Ingresos';
$lang['AdminReports.dashboard.data_as_of'] = 'Datos a fecha de %1$s';
$lang['AdminReports.dashboard.never'] = 'Nunca';
$lang['AdminReports.dashboard.refresh'] = 'Actualizar';
$lang['AdminReports.dashboard.refreshing'] = 'Qué refrescante…';
$lang['AdminReports.empty.collecting_since'] = 'Recopilación de datos desde %1$s';
$lang['AdminReports.empty.no_data_text'] = 'La recopilación de datos comenzará con la próxima ejecución de cron. Vuelve a comprobarlo una vez que se haya completado la instantánea.';
$lang['AdminReports.empty.no_data_title'] = 'Aún no hay datos analíticos';
$lang['AdminReports.empty.no_series'] = 'No hay datos disponibles para el periodo seleccionado.';
$lang['AdminReports.error.load_failed'] = 'No se han podido cargar los datos. Inténtalo de nuevo.';
$lang['AdminReports.filter.consolidated_tooltip'] = 'Reexpresa todas las divisas en tu moneda predeterminada utilizando el tipo de cambio vigente en la fecha de la instantánea.';
$lang['AdminReports.filter.field_consolidated'] = 'Consolidar en %1$s';
$lang['AdminReports.filter.field_currency'] = 'Moneda';
$lang['AdminReports.filter.field_daterange'] = 'Intervalo de fechas';
$lang['AdminReports.filter.field_end'] = 'A';
$lang['AdminReports.filter.field_granularity'] = 'Granularidad';
$lang['AdminReports.filter.field_start'] = 'De';
$lang['AdminReports.filter.granularity_day'] = 'Diario';
$lang['AdminReports.filter.granularity_month'] = 'Mensual';
$lang['AdminReports.filter.granularity_week'] = 'Semanal';
$lang['AdminReports.filter.preset_12m'] = '12 meses';
$lang['AdminReports.filter.preset_30d'] = '30 días';
$lang['AdminReports.filter.preset_90d'] = '90 días';
$lang['AdminReports.filter.preset_custom'] = 'Personalizado';
$lang['AdminReports.index.box_title'] = 'Informes';
$lang['AdminReports.index.customize'] = 'Personalice';
$lang['AdminReports.index.field_format'] = 'Formato';
$lang['AdminReports.index.field_report_type'] = 'Tipo de informe';
$lang['AdminReports.index.field_submit'] = 'Exportar';
$lang['AdminReports.index.page_title'] = 'Informes de facturación';
$lang['AdminReports.index.reports'] = 'Genere';
$lang['AdminReports.index.tab_exports'] = 'Exportaciones';
$lang['AdminReports.index.tab_overview'] = 'Resumen';
$lang['AdminReports.index.tab_renewals'] = 'Renovaciones';
$lang['AdminReports.index.tab_retention'] = 'Retención';
$lang['AdminReports.index.tab_revenue'] = 'Ingresos';
$lang['AdminReports.loading'] = 'Cargando…';
$lang['AdminReports.renewals.chart_title'] = 'Próximas renovaciones';
$lang['AdminReports.renewals.col_amount'] = 'Importe previsto';
$lang['AdminReports.renewals.col_count'] = 'Renovación de servicios';
$lang['AdminReports.renewals.col_month'] = 'Mes';
$lang['AdminReports.renewals.computed'] = 'Previsión calculada %1$s';
$lang['AdminReports.renewals.note'] = 'Ingresos por renovaciones previstos para los próximos 12 meses: cada renovación prevista para cada servicio, adelantada desde su próxima fecha de renovación en un plazo equivalente a su periodo de facturación, al precio del periodo y una vez deducidos los descuentos recurrentes. Los servicios dejan de incluirse en la previsión en el momento de su cancelación prevista. Calculado a partir de la instantánea más reciente.';
$lang['AdminReports.renewals.series_amount'] = 'Importe de la renovación';
$lang['AdminReports.retention.cohorts_shown'] = 'Se muestran las cohortes más recientes de %1$s.';
$lang['AdminReports.retention.col_clients'] = 'Clientes';
$lang['AdminReports.retention.col_cohort'] = 'Cohorte';
$lang['AdminReports.retention.grid_title'] = 'Retención de la cohorte';
$lang['AdminReports.retention.note'] = 'Las cohortes agrupan a los clientes según el mes en el que recibieron su primer servicio. Cada celda representa el porcentaje de la cohorte que cuenta con servicios activos en ese mes, según los datos de la última instantánea del mes. Las cifras no dependen de la moneda.';
$lang['AdminReports.revenue.allocation_note'] = 'Los ingresos por paquetes se reparten a prorrata entre las partidas de la factura y constituyen una cifra aproximada.';
$lang['AdminReports.revenue.breakdown_collected'] = 'Recopilado';
$lang['AdminReports.revenue.breakdown_empty'] = 'No hay datos sobre ingresos para este periodo.';
$lang['AdminReports.revenue.breakdown_name'] = 'Nombre';
$lang['AdminReports.revenue.breakdown_refunded'] = 'Reembolsado';
$lang['AdminReports.revenue.breakdown_unassigned'] = 'Sin asignar';
$lang['AdminReports.revenue.breakdown_unknown'] = 'Desconocido';
$lang['AdminReports.revenue.dimension_gateway'] = 'Puerta de enlace';
$lang['AdminReports.revenue.dimension_package'] = 'Paquete';
$lang['AdminReports.revenue.dimension_total'] = 'Total';
$lang['AdminReports.revenue.field_dimension'] = 'Desglose por';
$lang['AdminReports.tiles.active_clients'] = 'Clientes activos';
$lang['AdminReports.tiles.active_services'] = 'Servicios activos';
$lang['AdminReports.tiles.arpu'] = 'ARPU';
$lang['AdminReports.tiles.arr'] = 'ARR';
$lang['AdminReports.tiles.ltv'] = 'LTV';
$lang['AdminReports.tiles.ltv_insufficient'] = 'Antecedentes insuficientes';
$lang['AdminReports.tiles.mrr'] = 'MRR contratado';
$lang['AdminReports.tiles.net_mrr_growth'] = 'Crecimiento neto de los ingresos recurrentes mensuales (MRR)';
$lang['AdminReports.tiles.suspended_mrr'] = 'incluido « %1$s », suspendido';

