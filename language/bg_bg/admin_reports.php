<?php
/**
 * Admin Reports
 *
 * @package blesta
 * @subpackage blesta.language.bg_bg
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminReports.index.customize'] = 'Персонализиране на';
$lang['AdminReports.index.reports'] = 'Генериране на';
$lang['AdminReports.index.field_submit'] = 'Експорт';
$lang['AdminReports.index.field_report_type'] = 'Вид на доклада';
$lang['AdminReports.index.field_format'] = 'Формат';
$lang['AdminReports.index.box_title'] = 'Доклади';
$lang['AdminReports.index.page_title'] = 'Доклади за фактуриране';
$lang['AdminReports.filter.preset_custom'] = 'По избор';
$lang['AdminReports.!error.refresh.failed'] = 'Опресняването на моменталната снимка не можа да бъде завършено. Моля, опитайте отново по-късно.';
$lang['AdminReports.filter.preset_12m'] = '12 месеца';
$lang['AdminReports.!error.refresh.already_running'] = 'В момента се изпълнява моментална снимка. Моля, опитайте отново след малко.';
$lang['AdminReports.filter.preset_90d'] = '90 дни';
$lang['AdminReports.!error.refresh.rate_limited'] = 'Снимката е актуализирана през последните 5 минути. Моля, изчакайте, преди да я обновите отново.';
$lang['AdminReports.filter.preset_30d'] = '30 дни';
$lang['AdminReports.!error.refresh.invalid_csrf'] = 'Сесията Ви изтече. Моля, презаредете страницата и опитайте отново.';
$lang['AdminReports.filter.field_daterange'] = 'Период';
$lang['AdminReports.error.load_failed'] = 'Не може да се заредят данните. Моля, опитайте отново.';
$lang['AdminReports.index.tab_exports'] = 'Износ';
$lang['AdminReports.loading'] = 'Зареждане…';
$lang['AdminReports.index.tab_renewals'] = 'Подновяване';
$lang['AdminReports.charts.ltv_note'] = 'Месечно. LTV = ARPU ÷ процент на отпадане на клиенти за месеца; пропуски се появяват, когато процентът на отпадане е нула или данните за минали периоди са недостатъчни.';
$lang['AdminReports.index.tab_retention'] = 'Задържане';
$lang['AdminReports.charts.ltv_series'] = 'LTV';
$lang['AdminReports.index.tab_revenue'] = 'Приходи';
$lang['AdminReports.charts.ltv_title'] = 'Тенденция на LTV';
$lang['AdminReports.index.tab_overview'] = 'Общ преглед';
$lang['AdminReports.renewals.computed'] = 'Прогнозата е изчислена %1$s';
$lang['AdminReports.renewals.note'] = 'Прогнозни приходи от подновяване за следващите 12 месеца: всяко подновяване, планирано за всяка услуга, изместено напред от следващата дата на подновяване с продължителността на фактуриращия период, по цената за периода, без отстъпките за абонамент. Прогнозирането за услугите спира при планирано прекратяване. Изчислено въз основа на най-актуалната моментална снимка.';
$lang['AdminReports.renewals.col_count'] = 'Подновяване на услугите';
$lang['AdminReports.renewals.col_amount'] = 'Очаквана сума';
$lang['AdminReports.renewals.col_month'] = 'Месец';
$lang['AdminReports.renewals.series_amount'] = 'Сума за подновяване';
$lang['AdminReports.renewals.chart_title'] = 'Предстоящи подновявания';
$lang['AdminReports.retention.cohorts_shown'] = 'Показване на най-новите кохорти от проучването „ %1$s “.';
$lang['AdminReports.retention.note'] = 'Кохортите групират клиентите според месеца, в който са ползвали услугата за първи път. Всяка клетка представлява дела на кохортата, която ползва активни услуги през съответния месец, според данните от последната моментална снимка за месеца. Броят на клиентите не зависи от валутата.';
$lang['AdminReports.retention.col_clients'] = 'Клиенти';
$lang['AdminReports.retention.col_cohort'] = 'Кохорта';
$lang['AdminReports.retention.grid_title'] = 'Задържане на кохортата';
$lang['AdminReports.revenue.allocation_note'] = 'Приходите от пакета се разпределят пропорционално между отделните позиции във фактурата и представляват приблизителна стойност.';
$lang['AdminReports.revenue.breakdown_empty'] = 'Няма данни за приходите за този период.';
$lang['AdminReports.revenue.breakdown_unknown'] = 'Неизвестно';
$lang['AdminReports.revenue.breakdown_unassigned'] = 'Неразпределено';
$lang['AdminReports.revenue.breakdown_refunded'] = 'Възстановена';
$lang['AdminReports.revenue.breakdown_collected'] = 'Събрани';
$lang['AdminReports.revenue.breakdown_name'] = 'Име';
$lang['AdminReports.revenue.dimension_package'] = 'Опаковка';
$lang['AdminReports.revenue.dimension_gateway'] = 'Портал';
$lang['AdminReports.revenue.dimension_total'] = 'Общо';
$lang['AdminReports.revenue.field_dimension'] = 'Разбивка по';
$lang['AdminReports.charts.revenue_refunded'] = 'Възстановена';
$lang['AdminReports.charts.revenue_invoiced'] = 'Фактурирано';
$lang['AdminReports.charts.revenue_collected'] = 'Събрани';
$lang['AdminReports.charts.revenue_title'] = 'Приходи';
$lang['AdminReports.charts.churn_net'] = 'Нетна загуба на клиенти';
$lang['AdminReports.charts.churn_gross'] = 'Брутен отлив на клиенти';
$lang['AdminReports.charts.churn_title'] = 'Коефициент на отпадане на MRR';
$lang['AdminReports.charts.movement_churn'] = 'Отпадане';
$lang['AdminReports.charts.movement_contraction'] = 'Свиване';
$lang['AdminReports.charts.movement_reactivation'] = 'Реактивиране';
$lang['AdminReports.charts.movement_expansion'] = 'Разширяване';
$lang['AdminReports.charts.movement_new'] = 'Ново';
$lang['AdminReports.charts.movements_title'] = 'Движения на MRR';
$lang['AdminReports.charts.mrr_suspended_series'] = 'Отложено MRR';
$lang['AdminReports.charts.mrr_series'] = 'MRR';
$lang['AdminReports.charts.mrr_title'] = 'Месечни повтарящи се приходи';
$lang['AdminReports.tiles.active_services'] = 'Активни услуги';
$lang['AdminReports.tiles.active_clients'] = 'Активни клиенти';
$lang['AdminReports.tiles.ltv_insufficient'] = 'Недостатъчна история';
$lang['AdminReports.tiles.ltv'] = 'LTV';
$lang['AdminReports.tiles.arpu'] = 'ARPU';
$lang['AdminReports.tiles.net_mrr_growth'] = 'Нетният ръст на MRR';
$lang['AdminReports.tiles.arr'] = 'ARR';
$lang['AdminReports.tiles.suspended_mrr'] = 'вкл. „ %1$s “ – временно преустановено';
$lang['AdminReports.tiles.mrr'] = 'Договорна месечна повтаряща се приходи (MRR)';
$lang['AdminReports.empty.no_series'] = 'Няма налични данни за избрания период.';
$lang['AdminReports.empty.collecting_since'] = 'Събиране на данни от %1$s';
$lang['AdminReports.empty.no_data_text'] = 'Събирането на данни започва при следващото изпълнение на cron. Проверете отново, след като се завърши създаването на моменталната снимка.';
$lang['AdminReports.empty.no_data_title'] = 'Все още няма аналитични данни';
$lang['AdminReports.dashboard.refreshing'] = 'Освежаващо…';
$lang['AdminReports.dashboard.refresh'] = 'Опресни';
$lang['AdminReports.dashboard.never'] = 'Никога';
$lang['AdminReports.dashboard.data_as_of'] = 'Данни към %1$s';
$lang['AdminReports.filter.consolidated_tooltip'] = 'Преизчислете всички валути във вашата валута по подразбиране, като използвате обменния курс към датата на моменталната снимка.';
$lang['AdminReports.filter.field_consolidated'] = 'Обединяване в %1$s';
$lang['AdminReports.filter.field_currency'] = 'Валута';
$lang['AdminReports.filter.granularity_month'] = 'Месечно';
$lang['AdminReports.filter.granularity_week'] = 'Седмично';
$lang['AdminReports.filter.granularity_day'] = 'Ежедневно';
$lang['AdminReports.filter.field_granularity'] = 'Грануларност';
$lang['AdminReports.filter.field_end'] = 'Към';
$lang['AdminReports.filter.field_start'] = 'От';

