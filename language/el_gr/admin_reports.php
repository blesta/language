<?php
/**
 * Admin Reports
 *
 * @package blesta
 * @subpackage blesta.language.el_gr
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminReports.!error.refresh.already_running'] = 'Μια στιγμιαία λήψη βρίσκεται ήδη σε εξέλιξη. Παρακαλώ, δοκιμάστε ξανά σε λίγο.';
$lang['AdminReports.!error.refresh.failed'] = 'Δεν ήταν δυνατή η ολοκλήρωση της ανανέωσης του στιγμιότυπου. Παρακαλώ δοκιμάστε ξανά αργότερα.';
$lang['AdminReports.!error.refresh.invalid_csrf'] = 'Η σύνδεσή σας έχει λήξει. Παρακαλώ ανανεώστε τη σελίδα και δοκιμάστε ξανά.';
$lang['AdminReports.!error.refresh.rate_limited'] = 'Η στιγμιαία εικόνα ανανεώθηκε τα τελευταία 5 λεπτά. Παρακαλώ περιμένετε πριν κάνετε εκ νέου ανανέωση.';
$lang['AdminReports.charts.churn_gross'] = 'Συνολικός ρυθμός απώλειας πελατών';
$lang['AdminReports.charts.churn_net'] = 'Καθαρή απώλεια πελατών';
$lang['AdminReports.charts.churn_title'] = 'Ποσοστό απώλειας πελατών MRR';
$lang['AdminReports.charts.ltv_note'] = 'Μηνιαία. LTV = ARPU ÷ ποσοστό απώλειας πελατών για τον μήνα· εμφανίζονται κενά όταν το ποσοστό απώλειας είναι μηδέν ή τα ιστορικά δεδομένα είναι ανεπαρκή.';
$lang['AdminReports.charts.ltv_series'] = 'LTV';
$lang['AdminReports.charts.ltv_title'] = 'Τάση LTV';
$lang['AdminReports.charts.movement_churn'] = 'Αποχώρηση πελατών';
$lang['AdminReports.charts.movement_contraction'] = 'Σύσπαση';
$lang['AdminReports.charts.movement_expansion'] = 'Επέκταση';
$lang['AdminReports.charts.movement_new'] = 'Νέο';
$lang['AdminReports.charts.movement_reactivation'] = 'Επανενεργοποίηση';
$lang['AdminReports.charts.movements_title'] = 'Κινήσεις MRR';
$lang['AdminReports.charts.mrr_series'] = 'MRR';
$lang['AdminReports.charts.mrr_suspended_series'] = 'Ανασταλεί η εφαρμογή του MRR';
$lang['AdminReports.charts.mrr_title'] = 'Μηνιαία επαναλαμβανόμενα έσοδα';
$lang['AdminReports.charts.revenue_collected'] = 'Συλλογή';
$lang['AdminReports.charts.revenue_invoiced'] = 'Τιμολογημένο';
$lang['AdminReports.charts.revenue_refunded'] = 'Επιστροφή χρημάτων';
$lang['AdminReports.charts.revenue_title'] = 'Έσοδα';
$lang['AdminReports.dashboard.data_as_of'] = 'Στοιχεία κατά την ημερομηνία της %1$s';
$lang['AdminReports.dashboard.never'] = 'Ποτέ';
$lang['AdminReports.dashboard.refresh'] = 'Ανανέωση';
$lang['AdminReports.dashboard.refreshing'] = 'Αναζωογονητικό…';
$lang['AdminReports.empty.collecting_since'] = 'Συλλογή δεδομένων από το %1$s';
$lang['AdminReports.empty.no_data_text'] = 'Η συλλογή δεδομένων ξεκινά με την επόμενη εκτέλεση του cron. Επισκεφθείτε ξανά τη σελίδα μόλις ολοκληρωθεί η δημιουργία του στιγμιότυπου.';
$lang['AdminReports.empty.no_data_title'] = 'Δεν υπάρχουν ακόμη δεδομένα ανάλυσης';
$lang['AdminReports.empty.no_series'] = 'Δεν υπάρχουν διαθέσιμα στοιχεία για την επιλεγμένη περίοδο.';
$lang['AdminReports.error.load_failed'] = 'Δεν είναι δυνατή η φόρτωση των δεδομένων. Παρακαλώ δοκιμάστε ξανά.';
$lang['AdminReports.filter.consolidated_tooltip'] = 'Μετατρέψτε όλα τα νομίσματα στο προεπιλεγμένο νόμισμά σας, χρησιμοποιώντας τη συναλλαγματική ισοτιμία της ημερομηνίας λήψης του στιγμιότυπου.';
$lang['AdminReports.filter.field_consolidated'] = 'Ενοποίηση σε %1$s';
$lang['AdminReports.filter.field_currency'] = 'Νόμισμα';
$lang['AdminReports.filter.field_daterange'] = 'Χρονικό διάστημα';
$lang['AdminReports.filter.field_end'] = 'Προς';
$lang['AdminReports.filter.field_granularity'] = 'Λεπτομέρεια';
$lang['AdminReports.filter.field_start'] = 'Από';
$lang['AdminReports.filter.granularity_day'] = 'Καθημερινά';
$lang['AdminReports.filter.granularity_month'] = 'Μηνιαία';
$lang['AdminReports.filter.granularity_week'] = 'Εβδομαδιαία';
$lang['AdminReports.filter.preset_12m'] = '12 μήνες';
$lang['AdminReports.filter.preset_30d'] = '30 ημέρες';
$lang['AdminReports.filter.preset_90d'] = '90 ημέρες';
$lang['AdminReports.filter.preset_custom'] = 'Προσαρμοσμένο';
$lang['AdminReports.index.box_title'] = 'Αναφορές';
$lang['AdminReports.index.customize'] = 'Προσαρμογή';
$lang['AdminReports.index.field_format'] = 'Μορφή';
$lang['AdminReports.index.field_report_type'] = 'Τύπος έκθεσης';
$lang['AdminReports.index.field_submit'] = 'Εξαγωγή';
$lang['AdminReports.index.page_title'] = 'Αναφορές χρέωσης';
$lang['AdminReports.index.reports'] = 'Δημιουργία';
$lang['AdminReports.index.tab_exports'] = 'Εξαγωγές';
$lang['AdminReports.index.tab_overview'] = 'Επισκόπηση';
$lang['AdminReports.index.tab_renewals'] = 'Ανανεώσεις';
$lang['AdminReports.index.tab_retention'] = 'Διατήρηση';
$lang['AdminReports.index.tab_revenue'] = 'Έσοδα';
$lang['AdminReports.loading'] = 'Φόρτωση…';
$lang['AdminReports.renewals.chart_title'] = 'Προσεχείς ανανεώσεις';
$lang['AdminReports.renewals.col_amount'] = 'Αναμενόμενο ποσό';
$lang['AdminReports.renewals.col_count'] = 'Ανανέωση υπηρεσιών';
$lang['AdminReports.renewals.col_month'] = 'Μήνας';
$lang['AdminReports.renewals.computed'] = 'Υπολογισμός πρόβλεψης %1$s';
$lang['AdminReports.renewals.note'] = 'Προβλεπόμενα έσοδα από ανανεώσεις για τους επόμενους 12 μήνες: κάθε ανανέωση που έχει προγραμματιστεί για κάθε υπηρεσία, μετατοπισμένη προς τα εμπρός από την επόμενη ημερομηνία ανανέωσής της κατά τη διάρκεια της περιόδου χρέωσης, στην τιμή της περιόδου, μετά την αφαίρεση των επαναλαμβανόμενων εκπτώσεων. Οι υπηρεσίες παύουν να περιλαμβάνονται στις προβλέψεις σε περίπτωση προγραμματισμένης ακύρωσης. Υπολογίζεται με βάση το πιο πρόσφατο στιγμιότυπο.';
$lang['AdminReports.renewals.series_amount'] = 'Ποσό ανανέωσης';
$lang['AdminReports.retention.cohorts_shown'] = 'Εμφάνιση των πιο πρόσφατων κοόρτων του προγράμματος « %1$s ».';
$lang['AdminReports.retention.col_clients'] = 'Πελάτες';
$lang['AdminReports.retention.col_cohort'] = 'Κοόρτη';
$lang['AdminReports.retention.grid_title'] = 'Διατήρηση της κοόρτης';
$lang['AdminReports.retention.note'] = 'Οι κοόρτες ομαδοποιούν τους πελάτες ανάλογα με τον μήνα της πρώτης τους υπηρεσίας. Κάθε κελί αντιπροσωπεύει το ποσοστό της κοόρτης που διαθέτει ενεργές υπηρεσίες τον συγκεκριμένο μήνα, σύμφωνα με τα στοιχεία της τελευταίας καταγραφής του μήνα. Οι αριθμοί δεν εξαρτώνται από το νόμισμα.';
$lang['AdminReports.revenue.allocation_note'] = 'Τα έσοδα από πακέτα κατανέμονται αναλογικά στις γραμμές του τιμολογίου και αποτελούν κατά προσέγγιση ποσό.';
$lang['AdminReports.revenue.breakdown_collected'] = 'Συλλογή';
$lang['AdminReports.revenue.breakdown_empty'] = 'Δεν υπάρχουν στοιχεία εσόδων για την περίοδο αυτή.';
$lang['AdminReports.revenue.breakdown_name'] = 'Όνομα';
$lang['AdminReports.revenue.breakdown_refunded'] = 'Επιστροφή χρημάτων';
$lang['AdminReports.revenue.breakdown_unassigned'] = 'Χωρίς ανάθεση';
$lang['AdminReports.revenue.breakdown_unknown'] = 'Άγνωστο';
$lang['AdminReports.revenue.dimension_gateway'] = 'Πύλη';
$lang['AdminReports.revenue.dimension_package'] = 'Συσκευασία';
$lang['AdminReports.revenue.dimension_total'] = 'Σύνολο';
$lang['AdminReports.revenue.field_dimension'] = 'Ανάλυση ανά';
$lang['AdminReports.tiles.active_clients'] = 'Ενεργοί πελάτες';
$lang['AdminReports.tiles.active_services'] = 'Ενεργές υπηρεσίες';
$lang['AdminReports.tiles.arpu'] = 'ARPU';
$lang['AdminReports.tiles.arr'] = 'ARR';
$lang['AdminReports.tiles.ltv'] = 'LTV';
$lang['AdminReports.tiles.ltv_insufficient'] = 'Ανεπαρκές ιστορικό';
$lang['AdminReports.tiles.mrr'] = 'Συμβατικό MRR';
$lang['AdminReports.tiles.net_mrr_growth'] = 'Καθαρή αύξηση του MRR';
$lang['AdminReports.tiles.suspended_mrr'] = 'συμπεριλαμβανομένου του « %1$s », το οποίο έχει ανασταλεί';

