<?php
/**
 * Admin Reports
 *
 * @package blesta
 * @subpackage blesta.language.zh_cn
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminReports.!error.refresh.already_running'] = '快照正在运行。请稍后再试。';
$lang['AdminReports.!error.refresh.failed'] = '无法完成快照刷新。请稍后再试。';
$lang['AdminReports.!error.refresh.invalid_csrf'] = '您的会话已过期。请刷新页面后重试。';
$lang['AdminReports.!error.refresh.rate_limited'] = '该快照在过去5分钟内已更新。请稍候，切勿再次刷新。';
$lang['AdminReports.charts.churn_gross'] = '总流失率';
$lang['AdminReports.charts.churn_net'] = '净流失率';
$lang['AdminReports.charts.churn_title'] = 'MRR 流失率';
$lang['AdminReports.charts.ltv_note'] = '按月计算。LTV = ARPU ÷ 当月客户流失率；当流失率为零或历史数据不足时，数据会出现缺口。';
$lang['AdminReports.charts.ltv_series'] = 'LTV';
$lang['AdminReports.charts.ltv_title'] = 'LTV 趋势';
$lang['AdminReports.charts.movement_churn'] = '客户流失率';
$lang['AdminReports.charts.movement_contraction'] = '收缩';
$lang['AdminReports.charts.movement_expansion'] = '扩展';
$lang['AdminReports.charts.movement_new'] = '新';
$lang['AdminReports.charts.movement_reactivation'] = '重新激活';
$lang['AdminReports.charts.movements_title'] = 'MRR 运动';
$lang['AdminReports.charts.mrr_series'] = 'MRR';
$lang['AdminReports.charts.mrr_suspended_series'] = '暂停的MRR';
$lang['AdminReports.charts.mrr_title'] = '月度经常性收入';
$lang['AdminReports.charts.revenue_collected'] = '收录';
$lang['AdminReports.charts.revenue_invoiced'] = '已开具发票';
$lang['AdminReports.charts.revenue_refunded'] = '已退款';
$lang['AdminReports.charts.revenue_title'] = '收入';
$lang['AdminReports.dashboard.data_as_of'] = '数据截至%1$s';
$lang['AdminReports.dashboard.never'] = '绝不';
$lang['AdminReports.dashboard.refresh'] = '刷新';
$lang['AdminReports.dashboard.refreshing'] = '令人神清气爽……';
$lang['AdminReports.empty.collecting_since'] = '自……以来一直在收集数据%1$s';
$lang['AdminReports.empty.no_data_text'] = '数据收集将在下一次 cron 任务运行时开始。请在快照完成后再次查看。';
$lang['AdminReports.empty.no_data_title'] = '尚无分析数据';
$lang['AdminReports.empty.no_series'] = '所选时间段内无可用数据。';
$lang['AdminReports.error.load_failed'] = '无法加载数据。请重试。';
$lang['AdminReports.filter.consolidated_tooltip'] = '使用快照日期的汇率，将所有货币重新换算为您的默认货币。';
$lang['AdminReports.filter.field_consolidated'] = '合并到%1$s';
$lang['AdminReports.filter.field_currency'] = '货币';
$lang['AdminReports.filter.field_daterange'] = '日期范围';
$lang['AdminReports.filter.field_end'] = '致';
$lang['AdminReports.filter.field_granularity'] = '粒度';
$lang['AdminReports.filter.field_start'] = '来自';
$lang['AdminReports.filter.granularity_day'] = '每日';
$lang['AdminReports.filter.granularity_month'] = '每月';
$lang['AdminReports.filter.granularity_week'] = '每周';
$lang['AdminReports.filter.preset_12m'] = '12个月';
$lang['AdminReports.filter.preset_30d'] = '30天';
$lang['AdminReports.filter.preset_90d'] = '90天';
$lang['AdminReports.filter.preset_custom'] = '自定义';
$lang['AdminReports.index.box_title'] = '报告';
$lang['AdminReports.index.customize'] = '定制';
$lang['AdminReports.index.field_format'] = '格式';
$lang['AdminReports.index.field_report_type'] = '报告类型';
$lang['AdminReports.index.field_submit'] = '出口';
$lang['AdminReports.index.page_title'] = '账单报告';
$lang['AdminReports.index.reports'] = '生成';
$lang['AdminReports.index.tab_exports'] = '出口';
$lang['AdminReports.index.tab_overview'] = '概述';
$lang['AdminReports.index.tab_renewals'] = '续订';
$lang['AdminReports.index.tab_retention'] = '留存率';
$lang['AdminReports.index.tab_revenue'] = '收入';
$lang['AdminReports.loading'] = '正在加载……';
$lang['AdminReports.renewals.chart_title'] = '即将到期的续订';
$lang['AdminReports.renewals.col_amount'] = '预计金额';
$lang['AdminReports.renewals.col_count'] = '服务续订';
$lang['AdminReports.renewals.col_month'] = '月份';
$lang['AdminReports.renewals.computed'] = '已计算出预报结果%1$s';
$lang['AdminReports.renewals.note'] = '未来 12 个月的预计续订收入：按每项服务计划进行的每次续订计算，从其下一次续订日期开始，按计费周期递延计算，采用周期价格并扣除经常性优惠券金额。服务在计划取消时停止预测。基于最新快照计算得出。';
$lang['AdminReports.renewals.series_amount'] = '续费金额';
$lang['AdminReports.retention.cohorts_shown'] = '显示%1$s 的最新几批学员。';
$lang['AdminReports.retention.col_clients'] = '客户';
$lang['AdminReports.retention.col_cohort'] = '队列';
$lang['AdminReports.retention.grid_title'] = '队列保留率';
$lang['AdminReports.retention.note'] = '同组客户是根据其首次使用服务的月份进行分组的。每个单元格表示该同组客户中当月仍在使用服务的比例，该数据取自该月的最新快照。计数结果不考虑货币类型。';
$lang['AdminReports.revenue.allocation_note'] = '套餐收入按比例分配至各发票明细行，该数值仅为近似值。';
$lang['AdminReports.revenue.breakdown_collected'] = '收录';
$lang['AdminReports.revenue.breakdown_empty'] = '该期间无收入数据。';
$lang['AdminReports.revenue.breakdown_name'] = '姓名';
$lang['AdminReports.revenue.breakdown_refunded'] = '已退款';
$lang['AdminReports.revenue.breakdown_unassigned'] = '未分配';
$lang['AdminReports.revenue.breakdown_unknown'] = '未知';
$lang['AdminReports.revenue.dimension_gateway'] = '网关';
$lang['AdminReports.revenue.dimension_package'] = '包装';
$lang['AdminReports.revenue.dimension_total'] = '总计';
$lang['AdminReports.revenue.field_dimension'] = '按……分类';
$lang['AdminReports.tiles.active_clients'] = '活跃客户';
$lang['AdminReports.tiles.active_services'] = '现役部队';
$lang['AdminReports.tiles.arpu'] = 'ARPU';
$lang['AdminReports.tiles.arr'] = 'ARR';
$lang['AdminReports.tiles.ltv'] = 'LTV';
$lang['AdminReports.tiles.ltv_insufficient'] = '历史数据不足';
$lang['AdminReports.tiles.mrr'] = '合同约定月经常性收入（MRR）';
$lang['AdminReports.tiles.net_mrr_growth'] = '净月经常性收入（MRR）增长';
$lang['AdminReports.tiles.suspended_mrr'] = '包括已暂停的%1$s ';

