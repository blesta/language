<?php
/**
 * Admin Reports
 *
 * @package blesta
 * @subpackage blesta.language.uk_ua
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminReports.index.customize'] = 'Налаштувати';
$lang['AdminReports.index.reports'] = 'Згенерувати';
$lang['AdminReports.index.field_submit'] = 'Експорт';
$lang['AdminReports.index.field_report_type'] = 'Тип звіту';
$lang['AdminReports.index.field_format'] = 'Формат';
$lang['AdminReports.index.box_title'] = 'Звіти';
$lang['AdminReports.index.page_title'] = 'Білінгові звіти';
$lang['AdminReports.filter.preset_custom'] = 'На замовлення';
$lang['AdminReports.!error.refresh.failed'] = 'Оновлення знімка не вдалося завершити. Спробуйте ще раз пізніше.';
$lang['AdminReports.filter.preset_12m'] = '12 місяців';
$lang['AdminReports.!error.refresh.already_running'] = 'Зараз виконується створення знімка. Будь ласка, спробуйте ще раз через деякий час.';
$lang['AdminReports.filter.preset_90d'] = '90 днів';
$lang['AdminReports.!error.refresh.rate_limited'] = 'Знімок екрана було оновлено протягом останніх 5 хвилин. Будь ласка, зачекайте, перш ніж оновлювати його знову.';
$lang['AdminReports.filter.preset_30d'] = '30 днів';
$lang['AdminReports.!error.refresh.invalid_csrf'] = 'Термін дії вашої сесії закінчився. Будь ласка, перезавантажте сторінку та спробуйте ще раз.';
$lang['AdminReports.filter.field_daterange'] = 'Діапазон дат';
$lang['AdminReports.error.load_failed'] = 'Не вдалося завантажити дані. Спробуйте ще раз.';
$lang['AdminReports.index.tab_exports'] = 'Експорт';
$lang['AdminReports.loading'] = 'Завантаження…';
$lang['AdminReports.index.tab_renewals'] = 'Продовження';
$lang['AdminReports.charts.ltv_note'] = 'Щомісяця. LTV = ARPU ÷ коефіцієнт відтоку клієнтів за місяць; прогалини виникають, коли коефіцієнт відтоку дорівнює нулю або даних за попередні періоди недостатньо.';
$lang['AdminReports.index.tab_retention'] = 'Утримання';
$lang['AdminReports.charts.ltv_series'] = 'LTV';
$lang['AdminReports.index.tab_revenue'] = 'Виручка';
$lang['AdminReports.charts.ltv_title'] = 'Динаміка LTV';
$lang['AdminReports.index.tab_overview'] = 'Огляд';
$lang['AdminReports.renewals.computed'] = 'Прогноз розраховано %1$s';
$lang['AdminReports.renewals.note'] = 'Прогнозований дохід від поновлення на наступні 12 місяців: кожне поновлення, заплановане для кожної послуги, перенесене з наступної дати поновлення на термін, що дорівнює розрахунковому періоду, за ціною, встановленою на цей період, за вирахуванням купонів на регулярні знижки. Прогнозування щодо послуг припиняється у разі запланованого скасування. Розраховано на основі найсвіжішого знімка даних.';
$lang['AdminReports.renewals.col_count'] = 'Поновлення послуг';
$lang['AdminReports.renewals.col_amount'] = 'Очікувана сума';
$lang['AdminReports.renewals.col_month'] = 'Місяць';
$lang['AdminReports.renewals.series_amount'] = 'Сума поновлення';
$lang['AdminReports.renewals.chart_title'] = 'Майбутні поновлення';
$lang['AdminReports.retention.cohorts_shown'] = 'Показано останні когорти програми « %1$s ».';
$lang['AdminReports.retention.note'] = 'Кохорти групують клієнтів за місяцем надання їм першої послуги. Кожна комірка відображає частку кохорти, яка користується активними послугами в цьому місяці, згідно з даними останнього знімка стану на кінець місяця. Показники не залежать від валюти.';
$lang['AdminReports.retention.col_clients'] = 'Клієнти';
$lang['AdminReports.retention.col_cohort'] = 'Когорта';
$lang['AdminReports.retention.grid_title'] = 'Утримання когорті';
$lang['AdminReports.revenue.allocation_note'] = 'Дохід від пакету розподіляється пропорційно між рядками рахунку-фактури і є приблизним значенням.';
$lang['AdminReports.revenue.breakdown_empty'] = 'Даних про доходи за цей період немає.';
$lang['AdminReports.revenue.breakdown_unknown'] = 'Невідомо';
$lang['AdminReports.revenue.breakdown_unassigned'] = 'Непризначено';
$lang['AdminReports.revenue.breakdown_refunded'] = 'Повернено';
$lang['AdminReports.revenue.breakdown_collected'] = 'Зібрано';
$lang['AdminReports.revenue.breakdown_name'] = 'Ім\'я';
$lang['AdminReports.revenue.dimension_package'] = 'Упаковка';
$lang['AdminReports.revenue.dimension_gateway'] = 'Шлюз';
$lang['AdminReports.revenue.dimension_total'] = 'Разом';
$lang['AdminReports.revenue.field_dimension'] = 'Розподіл за';
$lang['AdminReports.charts.revenue_refunded'] = 'Повернено';
$lang['AdminReports.charts.revenue_invoiced'] = 'Виставлено рахунок';
$lang['AdminReports.charts.revenue_collected'] = 'Зібрано';
$lang['AdminReports.charts.revenue_title'] = 'Виручка';
$lang['AdminReports.charts.churn_net'] = 'Чистий відтік клієнтів';
$lang['AdminReports.charts.churn_gross'] = 'Загальний відтік клієнтів';
$lang['AdminReports.charts.churn_title'] = 'Коефіцієнт відтоку MRR';
$lang['AdminReports.charts.movement_churn'] = 'Відтік клієнтів';
$lang['AdminReports.charts.movement_contraction'] = 'Скорочення';
$lang['AdminReports.charts.movement_reactivation'] = 'Повторне введення в дію';
$lang['AdminReports.charts.movement_expansion'] = 'Розширення';
$lang['AdminReports.charts.movement_new'] = 'Нове';
$lang['AdminReports.charts.movements_title'] = 'Рухи MRR';
$lang['AdminReports.charts.mrr_suspended_series'] = 'Призупинена MRR';
$lang['AdminReports.charts.mrr_series'] = 'MRR';
$lang['AdminReports.charts.mrr_title'] = 'Щомісячний регулярний дохід';
$lang['AdminReports.tiles.active_services'] = 'Активні послуги';
$lang['AdminReports.tiles.active_clients'] = 'Активні клієнти';
$lang['AdminReports.tiles.ltv_insufficient'] = 'Недостатньо даних';
$lang['AdminReports.tiles.ltv'] = 'LTV';
$lang['AdminReports.tiles.arpu'] = 'ARPU';
$lang['AdminReports.tiles.net_mrr_growth'] = 'Чисте зростання MRR';
$lang['AdminReports.tiles.arr'] = 'ARR';
$lang['AdminReports.tiles.suspended_mrr'] = 'включно з « %1$s » — призупинено';
$lang['AdminReports.tiles.mrr'] = 'Контрактний MRR';
$lang['AdminReports.empty.no_series'] = 'Дані за вибраний період відсутні.';
$lang['AdminReports.empty.collecting_since'] = 'Збір даних розпочато з %1$s';
$lang['AdminReports.empty.no_data_text'] = 'Збір даних розпочнеться під час наступного запуску cron. Перевірте знову після завершення створення знімка.';
$lang['AdminReports.empty.no_data_title'] = 'Даних аналітики поки що немає';
$lang['AdminReports.dashboard.refreshing'] = 'Освіжаюче…';
$lang['AdminReports.dashboard.refresh'] = 'Оновити';
$lang['AdminReports.dashboard.never'] = 'Ніколи';
$lang['AdminReports.dashboard.data_as_of'] = 'Дані станом на %1$s';
$lang['AdminReports.filter.consolidated_tooltip'] = 'Перерахуйте всі валюти у вашу валюту за замовчуванням, використовуючи обмінний курс на дату знімка.';
$lang['AdminReports.filter.field_consolidated'] = 'Об\'єднати в %1$s';
$lang['AdminReports.filter.field_currency'] = 'Валюта';
$lang['AdminReports.filter.granularity_month'] = 'Щомісяця';
$lang['AdminReports.filter.granularity_week'] = 'Щотижня';
$lang['AdminReports.filter.granularity_day'] = 'Щодня';
$lang['AdminReports.filter.field_granularity'] = 'Рівень деталізації';
$lang['AdminReports.filter.field_end'] = 'До';
$lang['AdminReports.filter.field_start'] = 'Від';

