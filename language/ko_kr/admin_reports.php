<?php
/**
 * Admin Reports
 *
 * @package blesta
 * @subpackage blesta.language.ko_kr
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminReports.!error.refresh.already_running'] = '현재 스냅샷이 실행 중입니다. 잠시 후 다시 시도해 주세요.';
$lang['AdminReports.!error.refresh.failed'] = '스냅샷 갱신이 완료되지 않았습니다. 잠시 후 다시 시도해 주십시오.';
$lang['AdminReports.!error.refresh.invalid_csrf'] = '세션이 만료되었습니다. 페이지를 새로고침한 후 다시 시도해 주세요.';
$lang['AdminReports.!error.refresh.rate_limited'] = '지난 5분 이내에 스냅샷이 새로 고쳐졌습니다. 다시 새로 고치기 전에 잠시 기다려 주십시오.';
$lang['AdminReports.charts.churn_gross'] = '총 이탈률';
$lang['AdminReports.charts.churn_net'] = '순 이탈률';
$lang['AdminReports.charts.churn_title'] = 'MRR 이탈률';
$lang['AdminReports.charts.ltv_note'] = '월별. LTV = ARPU ÷ 해당 월의 고객 이탈률; 이탈률이 0이거나 과거 데이터가 충분하지 않은 경우 데이터 간격이 발생합니다.';
$lang['AdminReports.charts.ltv_series'] = 'LTV';
$lang['AdminReports.charts.ltv_title'] = 'LTV 추이';
$lang['AdminReports.charts.movement_churn'] = '이탈률';
$lang['AdminReports.charts.movement_contraction'] = '수축';
$lang['AdminReports.charts.movement_expansion'] = '확장';
$lang['AdminReports.charts.movement_new'] = '새로움';
$lang['AdminReports.charts.movement_reactivation'] = '재활성화';
$lang['AdminReports.charts.movements_title'] = 'MRR 움직임';
$lang['AdminReports.charts.mrr_series'] = 'MRR';
$lang['AdminReports.charts.mrr_suspended_series'] = 'MRR 일시 정지';
$lang['AdminReports.charts.mrr_title'] = '월간 반복 매출';
$lang['AdminReports.charts.revenue_collected'] = '수집됨';
$lang['AdminReports.charts.revenue_invoiced'] = '청구됨';
$lang['AdminReports.charts.revenue_refunded'] = '환불됨';
$lang['AdminReports.charts.revenue_title'] = '매출';
$lang['AdminReports.dashboard.data_as_of'] = '기준일: %1$s';
$lang['AdminReports.dashboard.never'] = '절대';
$lang['AdminReports.dashboard.refresh'] = '새로 고침';
$lang['AdminReports.dashboard.refreshing'] = '상쾌하네요…';
$lang['AdminReports.empty.collecting_since'] = '~부터 데이터를 수집해 왔습니다 %1$s';
$lang['AdminReports.empty.no_data_text'] = '데이터 수집은 다음 cron 작업이 실행될 때부터 시작됩니다. 스냅샷이 완료되면 다시 확인해 주세요.';
$lang['AdminReports.empty.no_data_title'] = '아직 분석 데이터가 없습니다.';
$lang['AdminReports.empty.no_series'] = '선택한 기간에 대한 데이터가 없습니다.';
$lang['AdminReports.error.load_failed'] = '데이터를 불러올 수 없습니다. 다시 시도해 주세요.';
$lang['AdminReports.filter.consolidated_tooltip'] = '스냅샷 날짜의 환율을 사용하여 모든 통화를 기본 통화로 환산하십시오.';
$lang['AdminReports.filter.field_consolidated'] = '다음으로 통합 %1$s';
$lang['AdminReports.filter.field_currency'] = '통화';
$lang['AdminReports.filter.field_daterange'] = '날짜 범위';
$lang['AdminReports.filter.field_end'] = '~에게';
$lang['AdminReports.filter.field_granularity'] = '세분화 수준';
$lang['AdminReports.filter.field_start'] = '출처:';
$lang['AdminReports.filter.granularity_day'] = '매일';
$lang['AdminReports.filter.granularity_month'] = '월간';
$lang['AdminReports.filter.granularity_week'] = '주간';
$lang['AdminReports.filter.preset_12m'] = '12개월';
$lang['AdminReports.filter.preset_30d'] = '30일';
$lang['AdminReports.filter.preset_90d'] = '90일';
$lang['AdminReports.filter.preset_custom'] = '사용자 지정';
$lang['AdminReports.index.box_title'] = '보고서';
$lang['AdminReports.index.customize'] = '사용자 지정';
$lang['AdminReports.index.field_format'] = '형식';
$lang['AdminReports.index.field_report_type'] = '보고서 유형';
$lang['AdminReports.index.field_submit'] = '내보내기';
$lang['AdminReports.index.page_title'] = '청구 보고서';
$lang['AdminReports.index.reports'] = '생성';
$lang['AdminReports.index.tab_exports'] = '수출';
$lang['AdminReports.index.tab_overview'] = '개요';
$lang['AdminReports.index.tab_renewals'] = '갱신';
$lang['AdminReports.index.tab_retention'] = '유지율';
$lang['AdminReports.index.tab_revenue'] = '매출';
$lang['AdminReports.loading'] = '로딩 중…';
$lang['AdminReports.renewals.chart_title'] = '예정된 갱신';
$lang['AdminReports.renewals.col_amount'] = '예상 금액';
$lang['AdminReports.renewals.col_count'] = '서비스 갱신';
$lang['AdminReports.renewals.col_month'] = '월';
$lang['AdminReports.renewals.computed'] = '예측 계산 완료 %1$s';
$lang['AdminReports.renewals.note'] = '향후 12개월간 예상 갱신 수익: 각 서비스에 예정된 모든 갱신 건을, 다음 갱신일로부터 청구 주기를 단위로 앞당겨 계산한 것으로, 정기 쿠폰을 차감한 기간별 가격을 적용합니다. 서비스는 예정된 해지 시점에 도달하면 예측에서 제외됩니다. 최신 스냅샷을 기준으로 계산되었습니다.';
$lang['AdminReports.renewals.series_amount'] = '갱신 금액';
$lang['AdminReports.retention.cohorts_shown'] = '%1$s 의 가장 최근 코호트를 표시합니다.';
$lang['AdminReports.retention.col_clients'] = '고객';
$lang['AdminReports.retention.col_cohort'] = '코호트';
$lang['AdminReports.retention.grid_title'] = '코호트 유지율';
$lang['AdminReports.retention.note'] = '코호트는 고객의 첫 서비스 이용 월을 기준으로 고객을 그룹화합니다. 각 셀은 해당 월의 최신 스냅샷 데이터를 바탕으로, 그 달에 활성 서비스를 이용 중인 코호트 구성원의 비율을 나타냅니다. 수치는 통화 단위와 무관합니다.';
$lang['AdminReports.revenue.allocation_note'] = '패키지 매출액은 청구서 항목별로 비례 배분되며, 이는 대략적인 수치입니다.';
$lang['AdminReports.revenue.breakdown_collected'] = '수집됨';
$lang['AdminReports.revenue.breakdown_empty'] = '해당 기간의 매출 데이터가 없습니다.';
$lang['AdminReports.revenue.breakdown_name'] = '이름';
$lang['AdminReports.revenue.breakdown_refunded'] = '환불됨';
$lang['AdminReports.revenue.breakdown_unassigned'] = '미지정';
$lang['AdminReports.revenue.breakdown_unknown'] = '알 수 없음';
$lang['AdminReports.revenue.dimension_gateway'] = '게이트웨이';
$lang['AdminReports.revenue.dimension_package'] = '패키지';
$lang['AdminReports.revenue.dimension_total'] = '합계';
$lang['AdminReports.revenue.field_dimension'] = '분류별';
$lang['AdminReports.tiles.active_clients'] = '활성 고객';
$lang['AdminReports.tiles.active_services'] = '현역 복무';
$lang['AdminReports.tiles.arpu'] = 'ARPU';
$lang['AdminReports.tiles.arr'] = 'ARR';
$lang['AdminReports.tiles.ltv'] = 'LTV';
$lang['AdminReports.tiles.ltv_insufficient'] = '이력이 불충분함';
$lang['AdminReports.tiles.mrr'] = '계약 기준 MRR';
$lang['AdminReports.tiles.net_mrr_growth'] = '순 MRR 증가율';
$lang['AdminReports.tiles.suspended_mrr'] = '%1$s 포함, 중단됨';

