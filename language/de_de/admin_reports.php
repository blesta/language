<?php
/**
 * Admin Reports
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminReports.index.customize'] = 'Anpassen';
$lang['AdminReports.index.reports'] = 'Erzeugen Sie';
$lang['AdminReports.index.field_submit'] = 'Exportieren';
$lang['AdminReports.index.field_report_type'] = 'Berichtstyp';
$lang['AdminReports.index.field_format'] = 'Format';
$lang['AdminReports.index.box_title'] = 'Berichte';
$lang['AdminReports.index.page_title'] = 'Berichte zur Rechnungsstellung';
$lang['AdminReports.filter.field_start'] = 'Von';
$lang['AdminReports.filter.preset_custom'] = 'Benutzerdefiniert';
$lang['AdminReports.!error.refresh.failed'] = 'Die Aktualisierung des Snapshots konnte nicht abgeschlossen werden. Bitte versuchen Sie es später erneut.';
$lang['AdminReports.filter.preset_12m'] = '12 Monate';
$lang['AdminReports.!error.refresh.already_running'] = 'Ein Snapshot wird bereits ausgeführt. Bitte versuchen Sie es in einem Moment erneut.';
$lang['AdminReports.filter.preset_90d'] = '90 Tage';
$lang['AdminReports.!error.refresh.rate_limited'] = 'Ein Snapshot wurde innerhalb der letzten 5 Minuten aktualisiert. Bitte warten Sie, bevor Sie erneut aktualisieren.';
$lang['AdminReports.filter.preset_30d'] = '30 Tage';
$lang['AdminReports.!error.refresh.invalid_csrf'] = 'Ihre Sitzung ist abgelaufen. Bitte laden Sie die Seite neu und versuchen Sie es erneut.';
$lang['AdminReports.filter.field_daterange'] = 'Datumsbereich';
$lang['AdminReports.error.load_failed'] = 'Die Daten konnten nicht geladen werden. Bitte versuchen Sie es erneut.';
$lang['AdminReports.index.tab_exports'] = 'Exporte';
$lang['AdminReports.loading'] = 'Wird geladen…';
$lang['AdminReports.index.tab_renewals'] = 'Verlängerungen';
$lang['AdminReports.charts.ltv_note'] = 'Monatlich. LTV = ARPU ÷ Kundenabwanderungsrate des Monats; Lücken treten auf, wenn die Abwanderungsrate null beträgt oder die historischen Daten nicht ausreichen.';
$lang['AdminReports.index.tab_retention'] = 'Kundenbindung';
$lang['AdminReports.charts.ltv_series'] = 'LTV';
$lang['AdminReports.index.tab_revenue'] = 'Umsatz';
$lang['AdminReports.charts.ltv_title'] = 'LTV-Entwicklung';
$lang['AdminReports.index.tab_overview'] = 'Übersicht';
$lang['AdminReports.renewals.computed'] = 'Prognose berechnet %1$s';
$lang['AdminReports.renewals.note'] = 'Prognostizierte Verlängerungsumsätze für die nächsten 12 Monate: Jede geplante Verlängerung der einzelnen Dienste, vorverlegt um die Abrechnungsperiode ab dem nächsten Verlängerungsdatum, zum Laufzeitpreis abzüglich wiederkehrender Rabatte. Bei einer geplanten Kündigung werden keine weiteren Prognosen für die Dienste erstellt. Berechnet auf Basis der aktuellsten Momentaufnahme.';
$lang['AdminReports.renewals.col_count'] = 'Verlängerung von Diensten';
$lang['AdminReports.renewals.col_amount'] = 'Erwarteter Betrag';
$lang['AdminReports.renewals.col_month'] = 'Monat';
$lang['AdminReports.renewals.series_amount'] = 'Verlängerungsbetrag';
$lang['AdminReports.renewals.chart_title'] = 'Anstehende Verlängerungen';
$lang['AdminReports.retention.cohorts_shown'] = 'Anzeige der jüngsten Kohorten des „ %1$s “.';
$lang['AdminReports.retention.note'] = 'Kohorten gruppieren Kunden nach dem Monat, in dem sie ihre erste Dienstleistung in Anspruch genommen haben. Jede Zelle gibt den Anteil der Kohorte an, der in diesem Monat aktive Dienstleistungen nutzt, basierend auf den Daten des letzten Snapshots des Monats. Die Zahlen sind währungsunabhängig.';
$lang['AdminReports.retention.col_clients'] = 'Kunden';
$lang['AdminReports.retention.col_cohort'] = 'Kohorte';
$lang['AdminReports.retention.grid_title'] = 'Kohortenbindung';
$lang['AdminReports.revenue.allocation_note'] = 'Die Paketumsätze werden anteilig auf die einzelnen Rechnungspositionen aufgeteilt und stellen einen Näherungswert dar.';
$lang['AdminReports.revenue.breakdown_empty'] = 'Für diesen Zeitraum liegen keine Umsatzdaten vor.';
$lang['AdminReports.revenue.breakdown_unknown'] = 'Unbekannt';
$lang['AdminReports.revenue.breakdown_unassigned'] = 'Nicht zugewiesen';
$lang['AdminReports.revenue.breakdown_refunded'] = 'Erstattet';
$lang['AdminReports.revenue.breakdown_collected'] = 'Gesammelt';
$lang['AdminReports.revenue.breakdown_name'] = 'Name';
$lang['AdminReports.revenue.dimension_package'] = 'Paket';
$lang['AdminReports.revenue.dimension_gateway'] = 'Gateway';
$lang['AdminReports.revenue.dimension_total'] = 'Gesamt';
$lang['AdminReports.revenue.field_dimension'] = 'Aufschlüsselung nach';
$lang['AdminReports.charts.revenue_refunded'] = 'Erstattet';
$lang['AdminReports.charts.revenue_invoiced'] = 'In Rechnung gestellt';
$lang['AdminReports.charts.revenue_collected'] = 'Gesammelt';
$lang['AdminReports.charts.revenue_title'] = 'Umsatz';
$lang['AdminReports.charts.churn_net'] = 'Netto-Abwanderungsrate';
$lang['AdminReports.charts.churn_gross'] = 'Brutto-Kundenabwanderung';
$lang['AdminReports.charts.churn_title'] = 'MRR-Abwanderungsrate';
$lang['AdminReports.charts.movement_churn'] = 'Abwanderungsrate';
$lang['AdminReports.charts.movement_contraction'] = 'Kontraktion';
$lang['AdminReports.charts.movement_reactivation'] = 'Reaktivierung';
$lang['AdminReports.charts.movement_expansion'] = 'Erweiterung';
$lang['AdminReports.charts.movement_new'] = 'Neu';
$lang['AdminReports.charts.movements_title'] = 'MRR-Bewegungen';
$lang['AdminReports.charts.mrr_suspended_series'] = 'Ausgesetzte MRR';
$lang['AdminReports.charts.mrr_series'] = 'MRR';
$lang['AdminReports.charts.mrr_title'] = 'Monatlich wiederkehrende Umsätze';
$lang['AdminReports.tiles.active_services'] = 'Aktive Dienste';
$lang['AdminReports.tiles.active_clients'] = 'Aktive Kunden';
$lang['AdminReports.tiles.ltv_insufficient'] = 'Unzureichende Anamnese';
$lang['AdminReports.tiles.ltv'] = 'LTV';
$lang['AdminReports.tiles.arpu'] = 'ARPU';
$lang['AdminReports.tiles.net_mrr_growth'] = 'Netto-MRR-Wachstum';
$lang['AdminReports.tiles.arr'] = 'ARR';
$lang['AdminReports.tiles.suspended_mrr'] = 'einschließlich „ %1$s “ ausgesetzt';
$lang['AdminReports.tiles.mrr'] = 'Vertraglich vereinbarte monatliche wiederkehrende Einnahmen (MRR)';
$lang['AdminReports.empty.no_series'] = 'Für den ausgewählten Zeitraum liegen keine Daten vor.';
$lang['AdminReports.empty.collecting_since'] = 'Datenerhebung seit %1$s';
$lang['AdminReports.empty.no_data_text'] = 'Die Datenerfassung beginnt mit dem nächsten Cron-Lauf. Schauen Sie später noch einmal vorbei, sobald die Erfassung abgeschlossen ist.';
$lang['AdminReports.empty.no_data_title'] = 'Es liegen noch keine Analysedaten vor';
$lang['AdminReports.dashboard.refreshing'] = 'Erfrischend…';
$lang['AdminReports.dashboard.refresh'] = 'Aktualisieren';
$lang['AdminReports.dashboard.never'] = 'Niemals';
$lang['AdminReports.dashboard.data_as_of'] = 'Stand: %1$s';
$lang['AdminReports.filter.consolidated_tooltip'] = 'Rechnen Sie alle Währungen anhand des Wechselkurses zum Stichtag in Ihre Standardwährung um.';
$lang['AdminReports.filter.field_consolidated'] = 'Zusammenfassen unter %1$s';
$lang['AdminReports.filter.field_currency'] = 'Währung';
$lang['AdminReports.filter.granularity_month'] = 'Monatlich';
$lang['AdminReports.filter.granularity_week'] = 'Wöchentlich';
$lang['AdminReports.filter.granularity_day'] = 'Täglich';
$lang['AdminReports.filter.field_granularity'] = 'Granularität';
$lang['AdminReports.filter.field_end'] = 'An';

