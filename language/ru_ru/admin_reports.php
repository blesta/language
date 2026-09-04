<?php
/**
 * Admin Reports
 *
 * @package blesta
 * @subpackage blesta.language.ru_ru
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminReports.!error.refresh.already_running'] = 'В данный момент выполняется создание моментального снимка. Пожалуйста, повторите попытку через некоторое время.';
$lang['AdminReports.!error.refresh.failed'] = 'Обновлять снимок не удалось. Попробуйте позже.';
$lang['AdminReports.!error.refresh.invalid_csrf'] = 'Срок действия вашей сессии истек. Обновите страницу и попробуйте ещё раз.';
$lang['AdminReports.!error.refresh.rate_limited'] = 'Снимок был обновлен в течение последних 5 минут. Пожалуйста, подождите, прежде чем обновлять страницу снова.';
$lang['AdminReports.charts.churn_gross'] = 'Общий показатель оттока клиентов';
$lang['AdminReports.charts.churn_net'] = 'Чистый отток клиентов';
$lang['AdminReports.charts.churn_title'] = 'Коэффициент оттока MRR';
$lang['AdminReports.charts.ltv_note'] = 'Ежемесячно. LTV = ARPU ÷ коэффициент оттока клиентов за месяц; пробелы возникают, когда коэффициент оттока равен нулю или данных за предыдущие периоды недостаточно.';
$lang['AdminReports.charts.ltv_series'] = 'LTV';
$lang['AdminReports.charts.ltv_title'] = 'Динамика LTV';
$lang['AdminReports.charts.movement_churn'] = 'Отток клиентов';
$lang['AdminReports.charts.movement_contraction'] = 'Сокращение';
$lang['AdminReports.charts.movement_expansion'] = 'Расширение';
$lang['AdminReports.charts.movement_new'] = 'Новое';
$lang['AdminReports.charts.movement_reactivation'] = 'Восстановление';
$lang['AdminReports.charts.movements_title'] = 'Движения MRR';
$lang['AdminReports.charts.mrr_series'] = 'MRR';
$lang['AdminReports.charts.mrr_suspended_series'] = 'Приостановленная MRR';
$lang['AdminReports.charts.mrr_title'] = 'Ежемесячный регулярный доход';
$lang['AdminReports.charts.revenue_collected'] = 'Собрано';
$lang['AdminReports.charts.revenue_invoiced'] = 'Выставлен счет';
$lang['AdminReports.charts.revenue_refunded'] = 'Возвращено';
$lang['AdminReports.charts.revenue_title'] = 'Выручка';
$lang['AdminReports.dashboard.data_as_of'] = 'Данные по состоянию на %1$s';
$lang['AdminReports.dashboard.never'] = 'Никогда';
$lang['AdminReports.dashboard.refresh'] = 'Обновить';
$lang['AdminReports.dashboard.refreshing'] = 'Освежающе…';
$lang['AdminReports.empty.collecting_since'] = 'Сбор данных ведется с %1$s';
$lang['AdminReports.empty.no_data_text'] = 'Сбор данных начнется при следующем запуске cron. Пожалуйста, проверьте снова после завершения создания моментального снимка.';
$lang['AdminReports.empty.no_data_title'] = 'Данных аналитики пока нет';
$lang['AdminReports.empty.no_series'] = 'Данных за выбранный период нет.';
$lang['AdminReports.error.load_failed'] = 'Не удалось загрузить данные. Пожалуйста, попробуйте ещё раз.';
$lang['AdminReports.filter.consolidated_tooltip'] = 'Пересчитайте все валюты в вашу валюту по умолчанию с использованием обменного курса на дату создания моментального снимка.';
$lang['AdminReports.filter.field_consolidated'] = 'Объединить в %1$s';
$lang['AdminReports.filter.field_currency'] = 'Валюта';
$lang['AdminReports.filter.field_daterange'] = 'Диапазон дат';
$lang['AdminReports.filter.field_end'] = 'К';
$lang['AdminReports.filter.field_granularity'] = 'Степень детализации';
$lang['AdminReports.filter.field_start'] = 'Из';
$lang['AdminReports.filter.granularity_day'] = 'Ежедневно';
$lang['AdminReports.filter.granularity_month'] = 'Ежемесячно';
$lang['AdminReports.filter.granularity_week'] = 'Еженедельно';
$lang['AdminReports.filter.preset_12m'] = '12 месяцев';
$lang['AdminReports.filter.preset_30d'] = '30 дней';
$lang['AdminReports.filter.preset_90d'] = '90 дней';
$lang['AdminReports.filter.preset_custom'] = 'Пользовательский';
$lang['AdminReports.index.box_title'] = 'Отчеты';
$lang['AdminReports.index.customize'] = 'Настроить';
$lang['AdminReports.index.field_format'] = 'Формат';
$lang['AdminReports.index.field_report_type'] = 'Тип отчета';
$lang['AdminReports.index.field_submit'] = 'Экспорт';
$lang['AdminReports.index.page_title'] = 'Отчеты по выставлению счетов';
$lang['AdminReports.index.reports'] = 'Создать';
$lang['AdminReports.index.tab_exports'] = 'Экспорт';
$lang['AdminReports.index.tab_overview'] = 'Обзор';
$lang['AdminReports.index.tab_renewals'] = 'Продление';
$lang['AdminReports.index.tab_retention'] = 'Удержание';
$lang['AdminReports.index.tab_revenue'] = 'Выручка';
$lang['AdminReports.loading'] = 'Загрузка…';
$lang['AdminReports.renewals.chart_title'] = 'Предстоящие продления';
$lang['AdminReports.renewals.col_amount'] = 'Ожидаемая сумма';
$lang['AdminReports.renewals.col_count'] = 'Продление услуг';
$lang['AdminReports.renewals.col_month'] = 'Месяц';
$lang['AdminReports.renewals.computed'] = 'Прогноз рассчитан %1$s';
$lang['AdminReports.renewals.note'] = 'Прогнозируемая выручка от продления подписок на следующие 12 месяцев: каждое продление, запланированное для каждой услуги, сдвинуто вперед от даты следующего продления на один биллинговый период по цене, действующей в течение этого периода, за вычетом купонов на регулярные скидки. Прогнозирование по услугам прекращается при запланированном прекращении подписки. Расчет выполнен на основе последней моментальной выписки.';
$lang['AdminReports.renewals.series_amount'] = 'Сумма продления';
$lang['AdminReports.retention.cohorts_shown'] = 'Отображение последних когорт проекта « %1$s ».';
$lang['AdminReports.retention.col_clients'] = 'Клиенты';
$lang['AdminReports.retention.col_cohort'] = 'Когорты';
$lang['AdminReports.retention.grid_title'] = 'Удержание участников когорты';
$lang['AdminReports.retention.note'] = 'Когорты группируют клиентов по месяцу оказания первой услуги. Каждая ячейка отражает долю клиентов когорты, у которых в данном месяце были активные услуги, согласно данным последнего моментального снимка за этот месяц. Показатели не зависят от валюты.';
$lang['AdminReports.revenue.allocation_note'] = 'Выручка по пакету распределяется пропорционально по строкам счета-фактуры и является приблизительной величиной.';
$lang['AdminReports.revenue.breakdown_collected'] = 'Сборник';
$lang['AdminReports.revenue.breakdown_empty'] = 'Данных о выручке за этот период нет.';
$lang['AdminReports.revenue.breakdown_name'] = 'Имя';
$lang['AdminReports.revenue.breakdown_refunded'] = 'Возвращено';
$lang['AdminReports.revenue.breakdown_unassigned'] = 'Неназначенный';
$lang['AdminReports.revenue.breakdown_unknown'] = 'Неизвестно';
$lang['AdminReports.revenue.dimension_gateway'] = 'Шлюз';
$lang['AdminReports.revenue.dimension_package'] = 'Упаковка';
$lang['AdminReports.revenue.dimension_total'] = 'Итого';
$lang['AdminReports.revenue.field_dimension'] = 'Разбивка по';
$lang['AdminReports.tiles.active_clients'] = 'Активные клиенты';
$lang['AdminReports.tiles.active_services'] = 'Активные услуги';
$lang['AdminReports.tiles.arpu'] = 'ARPU';
$lang['AdminReports.tiles.arr'] = 'ARR';
$lang['AdminReports.tiles.ltv'] = 'LTV';
$lang['AdminReports.tiles.ltv_insufficient'] = 'Недостаточные данные в анамнезе';
$lang['AdminReports.tiles.mrr'] = 'Договорная ежемесячная выручка (MRR)';
$lang['AdminReports.tiles.net_mrr_growth'] = 'Чистый рост MRR';
$lang['AdminReports.tiles.suspended_mrr'] = 'включая приостановку работы « %1$s »';

