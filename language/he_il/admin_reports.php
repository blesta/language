<?php
/**
 * Admin Reports
 *
 * @package blesta
 * @subpackage blesta.language.he_il
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminReports.index.customize'] = 'התאמה אישית';
$lang['AdminReports.index.reports'] = 'ליצור';
$lang['AdminReports.index.field_submit'] = 'ייצא';
$lang['AdminReports.index.field_report_type'] = 'סוג הדוח';
$lang['AdminReports.index.field_format'] = 'פורמט';
$lang['AdminReports.index.box_title'] = 'דוחות';
$lang['AdminReports.index.page_title'] = 'דוחות חיוב';
$lang['AdminReports.filter.preset_custom'] = 'מותאם אישית';
$lang['AdminReports.!error.refresh.failed'] = 'לא ניתן היה להשלים את רענון התמונת המצב. אנא נסה שוב מאוחר יותר.';
$lang['AdminReports.filter.preset_12m'] = '12 חודשים';
$lang['AdminReports.!error.refresh.already_running'] = 'תמונת מצב כבר פועלת. אנא נסה שוב בעוד רגע.';
$lang['AdminReports.filter.preset_90d'] = '90 ימים';
$lang['AdminReports.!error.refresh.rate_limited'] = 'תמונת מצב עודכנה במהלך חמש הדקות האחרונות. אנא המתן לפני שתרענן שוב.';
$lang['AdminReports.filter.preset_30d'] = '30 ימים';
$lang['AdminReports.!error.refresh.invalid_csrf'] = 'תוקף ההפעלה שלך פג. אנא רענן את הדף ונסה שוב.';
$lang['AdminReports.filter.field_daterange'] = 'טווח תאריכים';
$lang['AdminReports.error.load_failed'] = 'לא ניתן לטעון את הנתונים. אנא נסה שוב.';
$lang['AdminReports.index.tab_exports'] = 'יצוא';
$lang['AdminReports.loading'] = 'טוען…';
$lang['AdminReports.index.tab_renewals'] = 'חידושים';
$lang['AdminReports.charts.ltv_note'] = 'חודשי. LTV = ARPU ÷ שיעור הנטישה של הלקוחות באותו חודש; פערים מופיעים כאשר שיעור הנטישה הוא אפס או כאשר אין מספיק נתונים היסטוריים.';
$lang['AdminReports.index.tab_retention'] = 'שימור';
$lang['AdminReports.charts.ltv_series'] = 'LTV';
$lang['AdminReports.index.tab_revenue'] = 'הכנסות';
$lang['AdminReports.charts.ltv_title'] = 'מגמת LTV';
$lang['AdminReports.index.tab_overview'] = 'סקירה כללית';
$lang['AdminReports.renewals.computed'] = 'התחזית חושבה %1$s';
$lang['AdminReports.renewals.note'] = 'הכנסות חידוש צפויות ל-12 החודשים הבאים: כל חידוש המתוכנן עבור כל שירות, המוקדם מתאריך החידוש הבא שלו בתקופת החיוב, לפי מחיר התקופה בניכוי קופונים חוזרים. התחזית עבור השירותים נפסקת במועד הביטול המתוכנן. מחושב על סמך תמונת המצב העדכנית ביותר.';
$lang['AdminReports.renewals.col_count'] = 'חידוש שירותים';
$lang['AdminReports.renewals.col_amount'] = 'הסכום הצפוי';
$lang['AdminReports.renewals.col_month'] = 'חודש';
$lang['AdminReports.renewals.series_amount'] = 'סכום החידוש';
$lang['AdminReports.renewals.chart_title'] = 'חידושים צפויים';
$lang['AdminReports.retention.cohorts_shown'] = 'הצגת המחזורים האחרונים של תוכנית " %1$s ".';
$lang['AdminReports.retention.note'] = 'קוהורטות מקבצות לקוחות לפי החודש שבו קיבלו את השירות הראשון. כל תא מייצג את שיעור הקוהורטה המחזיקה בשירותים פעילים באותו חודש, על פי הנתונים מהתמונת המצב האחרונה של אותו חודש. הנתונים אינם תלויי מטבע.';
$lang['AdminReports.retention.col_clients'] = 'לקוחות';
$lang['AdminReports.retention.col_cohort'] = 'קוהורטה';
$lang['AdminReports.retention.grid_title'] = 'שימור הקבוצה';
$lang['AdminReports.revenue.allocation_note'] = 'הכנסות החבילה מחולקות באופן יחסי בין שורות החשבונית, והן מהוות אומדן בלבד.';
$lang['AdminReports.revenue.breakdown_empty'] = 'אין נתוני הכנסות לתקופה זו.';
$lang['AdminReports.revenue.breakdown_unknown'] = 'לא ידוע';
$lang['AdminReports.revenue.breakdown_unassigned'] = 'לא הוקצה';
$lang['AdminReports.revenue.breakdown_refunded'] = 'הוחזר';
$lang['AdminReports.revenue.breakdown_collected'] = 'נאסף';
$lang['AdminReports.revenue.breakdown_name'] = 'שם';
$lang['AdminReports.revenue.dimension_package'] = 'חבילה';
$lang['AdminReports.revenue.dimension_gateway'] = 'שער';
$lang['AdminReports.revenue.dimension_total'] = 'סה"כ';
$lang['AdminReports.revenue.field_dimension'] = 'פירוט לפי';
$lang['AdminReports.charts.revenue_refunded'] = 'הוחזר';
$lang['AdminReports.charts.revenue_invoiced'] = 'חויב';
$lang['AdminReports.charts.revenue_collected'] = 'נאסף';
$lang['AdminReports.charts.revenue_title'] = 'הכנסות';
$lang['AdminReports.charts.churn_net'] = 'שיעור הנטישה נטו';
$lang['AdminReports.charts.churn_gross'] = 'שיעור הנטישה הכולל';
$lang['AdminReports.charts.churn_title'] = 'שיעור הנטישה של MRR';
$lang['AdminReports.charts.movement_churn'] = 'תחלופה';
$lang['AdminReports.charts.movement_contraction'] = 'התכווצות';
$lang['AdminReports.charts.movement_reactivation'] = 'הפעלה מחדש';
$lang['AdminReports.charts.movement_expansion'] = 'הרחבה';
$lang['AdminReports.charts.movement_new'] = 'חדש';
$lang['AdminReports.charts.movements_title'] = 'תנועות MRR';
$lang['AdminReports.charts.mrr_suspended_series'] = 'MRR מושעה';
$lang['AdminReports.charts.mrr_series'] = 'MRR';
$lang['AdminReports.charts.mrr_title'] = 'הכנסות חוזרות חודשיות';
$lang['AdminReports.tiles.active_services'] = 'שירותים פעילים';
$lang['AdminReports.tiles.active_clients'] = 'לקוחות פעילים';
$lang['AdminReports.tiles.ltv_insufficient'] = 'היסטוריה לא מספקת';
$lang['AdminReports.tiles.ltv'] = 'LTV';
$lang['AdminReports.tiles.arpu'] = 'ARPU';
$lang['AdminReports.tiles.net_mrr_growth'] = 'צמיחה נטו ב-MRR';
$lang['AdminReports.tiles.arr'] = 'ARR';
$lang['AdminReports.tiles.suspended_mrr'] = 'כולל השעיית " %1$s "';
$lang['AdminReports.tiles.mrr'] = 'MRR חוזי';
$lang['AdminReports.empty.no_series'] = 'אין נתונים זמינים עבור התקופה שנבחרה.';
$lang['AdminReports.empty.collecting_since'] = 'איסוף נתונים מאז %1$s';
$lang['AdminReports.empty.no_data_text'] = 'איסוף הנתונים יתחיל עם ההפעלה הבאה של cron. אנא בדוק שוב לאחר השלמת הצילום.';
$lang['AdminReports.empty.no_data_title'] = 'עדיין אין נתוני ניתוח';
$lang['AdminReports.dashboard.refreshing'] = 'מרענן…';
$lang['AdminReports.dashboard.refresh'] = 'רענן';
$lang['AdminReports.dashboard.never'] = 'לעולם לא';
$lang['AdminReports.dashboard.data_as_of'] = 'נתונים נכון ל- %1$s';
$lang['AdminReports.filter.consolidated_tooltip'] = 'המר את כל המטבעות למטבע ברירת המחדל שלך באמצעות שער החליפין בתאריך הצילום.';
$lang['AdminReports.filter.field_consolidated'] = 'לאחד ל- %1$s';
$lang['AdminReports.filter.field_currency'] = 'מטבע';
$lang['AdminReports.filter.granularity_month'] = 'חודשי';
$lang['AdminReports.filter.granularity_week'] = 'שבועי';
$lang['AdminReports.filter.granularity_day'] = 'יומי';
$lang['AdminReports.filter.field_granularity'] = 'רמת פירוט';
$lang['AdminReports.filter.field_end'] = 'אל';
$lang['AdminReports.filter.field_start'] = 'מאת';

