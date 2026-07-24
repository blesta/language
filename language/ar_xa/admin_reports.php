<?php
/**
 * Admin Reports
 *
 * @package blesta
 * @subpackage blesta.language.ar_xa
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminReports.index.customize'] = 'التخصيص';
$lang['AdminReports.index.reports'] = 'توليد';
$lang['AdminReports.index.field_submit'] = 'التصدير';
$lang['AdminReports.index.field_report_type'] = 'نوع التقرير';
$lang['AdminReports.index.field_format'] = 'التنسيق';
$lang['AdminReports.index.box_title'] = 'التقارير';
$lang['AdminReports.index.page_title'] = 'تقارير الفواتير';
$lang['AdminReports.filter.preset_custom'] = 'مخصص';
$lang['AdminReports.!error.refresh.failed'] = 'تعذر إتمام تحديث اللقطة. يرجى المحاولة مرة أخرى لاحقًا.';
$lang['AdminReports.filter.preset_12m'] = '12 شهراً';
$lang['AdminReports.!error.refresh.already_running'] = 'يتم حالياً تشغيل لقطة. يرجى المحاولة مرة أخرى بعد قليل.';
$lang['AdminReports.filter.preset_90d'] = '90 يومًا';
$lang['AdminReports.!error.refresh.rate_limited'] = 'تم تحديث اللقطة خلال آخر 5 دقائق. يرجى الانتظار قبل إعادة التحديث.';
$lang['AdminReports.filter.preset_30d'] = '30 يومًا';
$lang['AdminReports.!error.refresh.invalid_csrf'] = 'انتهت صلاحية جلستك. يرجى تحديث الصفحة والمحاولة مرة أخرى.';
$lang['AdminReports.filter.field_daterange'] = 'النطاق الزمني';
$lang['AdminReports.error.load_failed'] = 'تعذر تحميل البيانات. يرجى المحاولة مرة أخرى.';
$lang['AdminReports.index.tab_exports'] = 'الصادرات';
$lang['AdminReports.loading'] = 'جاري التحميل…';
$lang['AdminReports.index.tab_renewals'] = 'التجديدات';
$lang['AdminReports.charts.ltv_note'] = 'شهريًّا. LTV = متوسط العائد لكل مستخدم (ARPU) ÷ معدل فقدان العملاء خلال الشهر؛ تظهر فجوات عندما يكون معدل فقدان العملاء صفرًا أو عندما تكون البيانات التاريخية غير كافية.';
$lang['AdminReports.index.tab_retention'] = 'الاحتفاظ';
$lang['AdminReports.charts.ltv_series'] = 'LTV';
$lang['AdminReports.index.tab_revenue'] = 'الإيرادات';
$lang['AdminReports.charts.ltv_title'] = 'اتجاه LTV';
$lang['AdminReports.index.tab_overview'] = 'نظرة عامة';
$lang['AdminReports.renewals.computed'] = 'تم حساب التوقعات %1$s';
$lang['AdminReports.renewals.note'] = 'إيرادات التجديد المتوقعة للـ 12 شهراً القادمة: يتم احتساب كل عملية تجديد مقررة لكل خدمة، مع تقديم تاريخ التجديد التالي بمقدار فترة الفوترة الخاصة بها، بسعر الفترة الصافي بعد خصم القسائم المتكررة. تتوقف توقعات الإيرادات عند تاريخ الإلغاء المقرر. يتم الحساب باستخدام أحدث لقطة بيانات.';
$lang['AdminReports.renewals.col_count'] = 'تجديد الخدمات';
$lang['AdminReports.renewals.col_amount'] = 'المبلغ المتوقع';
$lang['AdminReports.renewals.col_month'] = 'الشهر';
$lang['AdminReports.renewals.series_amount'] = 'مبلغ التجديد';
$lang['AdminReports.renewals.chart_title'] = 'التجديدات المرتقبة';
$lang['AdminReports.retention.cohorts_shown'] = 'عرض أحدث الدفعات في برنامج « %1$s ».';
$lang['AdminReports.retention.note'] = 'تقوم المجموعات (cohorts) بتصنيف العملاء حسب الشهر الذي تلقوا فيه الخدمة لأول مرة. وتمثل كل خلية النسبة المئوية لأفراد المجموعة الذين لديهم خدمات نشطة في ذلك الشهر، وفقًا لآخر لقطة بيانات لهذا الشهر. ولا ترتبط الأرقام بأي عملة معينة.';
$lang['AdminReports.retention.col_clients'] = 'العملاء';
$lang['AdminReports.retention.col_cohort'] = 'المجموعة';
$lang['AdminReports.retention.grid_title'] = 'استبقاء المجموعات';
$lang['AdminReports.revenue.allocation_note'] = 'يتم توزيع إيرادات الحزمة بالتناسب على بنود الفاتورة، وهي أرقام تقريبية.';
$lang['AdminReports.revenue.breakdown_empty'] = 'لا توجد بيانات عن الإيرادات لهذه الفترة.';
$lang['AdminReports.revenue.breakdown_unknown'] = 'غير معروف';
$lang['AdminReports.revenue.breakdown_unassigned'] = 'غير مخصص';
$lang['AdminReports.revenue.breakdown_refunded'] = 'تم رد المبلغ';
$lang['AdminReports.revenue.breakdown_collected'] = 'مجمعة';
$lang['AdminReports.revenue.breakdown_name'] = 'الاسم';
$lang['AdminReports.revenue.dimension_package'] = 'الحزمة';
$lang['AdminReports.revenue.dimension_gateway'] = 'البوابة';
$lang['AdminReports.revenue.dimension_total'] = 'المجموع';
$lang['AdminReports.revenue.field_dimension'] = 'التوزيع حسب';
$lang['AdminReports.charts.revenue_refunded'] = 'تم رد المبلغ';
$lang['AdminReports.charts.revenue_invoiced'] = 'تم إصدار الفاتورة';
$lang['AdminReports.charts.revenue_collected'] = 'مجمعة';
$lang['AdminReports.charts.revenue_title'] = 'الإيرادات';
$lang['AdminReports.charts.churn_net'] = 'معدل التسرب الصافي';
$lang['AdminReports.charts.churn_gross'] = 'معدل التسرب الإجمالي';
$lang['AdminReports.charts.churn_title'] = 'معدل توقف الاشتراكات الشهرية المتكررة (MRR)';
$lang['AdminReports.charts.movement_churn'] = 'معدل توقف العملاء';
$lang['AdminReports.charts.movement_contraction'] = 'الانكماش';
$lang['AdminReports.charts.movement_reactivation'] = 'إعادة التنشيط';
$lang['AdminReports.charts.movement_expansion'] = 'التوسع';
$lang['AdminReports.charts.movement_new'] = 'جديد';
$lang['AdminReports.charts.movements_title'] = 'تحركات MRR';
$lang['AdminReports.charts.mrr_suspended_series'] = 'MRR المعلق';
$lang['AdminReports.charts.mrr_series'] = 'MRR';
$lang['AdminReports.charts.mrr_title'] = 'الإيرادات الشهرية المتكررة';
$lang['AdminReports.tiles.active_services'] = 'الخدمات النشطة';
$lang['AdminReports.tiles.active_clients'] = 'العملاء النشطون';
$lang['AdminReports.tiles.ltv_insufficient'] = 'سجل غير كافٍ';
$lang['AdminReports.tiles.ltv'] = 'LTV';
$lang['AdminReports.tiles.arpu'] = 'متوسط العائد لكل مستخدم (ARPU)';
$lang['AdminReports.tiles.net_mrr_growth'] = 'نمو صافي الإيرادات المتكررة الشهرية';
$lang['AdminReports.tiles.arr'] = 'ARR';
$lang['AdminReports.tiles.suspended_mrr'] = 'بما في ذلك تعليق موقع %1$s ';
$lang['AdminReports.tiles.mrr'] = 'إيرادات متكررة شهرية متعاقد عليها';
$lang['AdminReports.empty.no_series'] = 'لا توجد بيانات متاحة للفترة المحددة.';
$lang['AdminReports.empty.collecting_since'] = 'يتم جمع البيانات منذ %1$s';
$lang['AdminReports.empty.no_data_text'] = 'سيبدأ جمع البيانات مع التشغيل التالي لـ cron. يرجى التحقق مرة أخرى بعد اكتمال اللقطة.';
$lang['AdminReports.empty.no_data_title'] = 'لا توجد بيانات تحليلية حتى الآن';
$lang['AdminReports.dashboard.refreshing'] = 'منعش…';
$lang['AdminReports.dashboard.refresh'] = 'تحديث';
$lang['AdminReports.dashboard.never'] = 'أبدًا';
$lang['AdminReports.dashboard.data_as_of'] = 'البيانات حتى تاريخ %1$s';
$lang['AdminReports.filter.consolidated_tooltip'] = 'أعد تحويل جميع العملات إلى عملتك الافتراضية باستخدام سعر الصرف الساري في تاريخ اللقطة.';
$lang['AdminReports.filter.field_consolidated'] = 'دمج في %1$s';
$lang['AdminReports.filter.field_currency'] = 'العملة';
$lang['AdminReports.filter.granularity_month'] = 'شهريًّا';
$lang['AdminReports.filter.granularity_week'] = 'أسبوعي';
$lang['AdminReports.filter.granularity_day'] = 'يوميًا';
$lang['AdminReports.filter.field_granularity'] = 'درجة التفصيل';
$lang['AdminReports.filter.field_end'] = 'إلى';
$lang['AdminReports.filter.field_start'] = 'من';

