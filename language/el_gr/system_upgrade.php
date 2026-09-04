<?php
/**
 * System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.el_gr
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SystemUpgrade.!error.backup_db_failed'] = 'Το backup της βάσης δεδομένων απέτυχε. Η αναβάθμιση δεν μπορεί να προχωρήσει χωρίς αξιόπιστο αντίγραφο ασφαλείας.';
$lang['SystemUpgrade.!error.backup_files_failed'] = 'Το backup αρχείου απέτυχε. Η αναβάθμιση δεν μπορεί να προχωρήσει χωρίς αξιόπιστο αντίγραφο ασφαλείας.';
$lang['SystemUpgrade.!error.download_failed'] = 'Απέτυχε η λήψη του αρχείου έκδοσης.';
$lang['SystemUpgrade.!error.environment_fail'] = 'Ένας ή περισσότεροι έλεγχοι περιβάλλοντος απέτυχαν. Επιλύστε τα προβλήματα πριν από την αναβάθμιση.';
$lang['SystemUpgrade.!error.extraction_failed'] = 'Απέτυχε η εξαγωγή του αρχείου έκδοσης.';
$lang['SystemUpgrade.!error.hash_mismatch'] = 'Ο έλεγχος ακεραιότητας του κατεβασμένου αρχείου απέτυχε. Το αρχείο μπορεί να είναι κατεστραμμένο.';
$lang['SystemUpgrade.!error.launch_not_detected'] = 'Η διαδικασία αναβάθμισης στο παρασκήνιο δεν ξεκίνησε. Αυτό μπορεί να συμβεί σε περιβάλλοντα φιλοξενίας με φυλακές (CloudLinux/CageFS, ορισμένες διαμορφώσεις PHP-FPM), όπου ο διακομιστής ιστού δεν επιτρέπεται να αποσυνδέει μακροχρόνιες διεργασίες-παιδιά. Η αναβάθμιση μπορεί να ολοκληρωθεί εκτελώντας την παρακάτω εντολή μέσω SSH.';
$lang['SystemUpgrade.!error.license_invalid'] = 'Η συνδρομή σας για υποστήριξη και ενημερώσεις πρέπει να είναι ενεργή για μεγάλες ή μικρές αναβαθμίσεις εκδόσεων.';
$lang['SystemUpgrade.!error.lock_stale'] = 'Μια προηγούμενη διαδικασία αναβάθμισης φαίνεται να σταμάτησε απροσδόκητα. Μπορείτε να καταργήσετε το κλείδωμα για να δοκιμάσετε ξανά.';
$lang['SystemUpgrade.!error.php_version'] = 'Η έκδοση-στόχος απαιτεί PHP %1$s ή νεότερη. Εκτελείτε την PHP %2$s.';
$lang['SystemUpgrade.!error.signature_invalid'] = 'Η επαλήθευση της υπογραφής απελευθέρωσης απέτυχε. Το αρχείο ενδέχεται να έχει αλλοιωθεί.';
$lang['SystemUpgrade.!error.signature_missing'] = 'Η έκδοση δεν περιλαμβάνει κρυπτογραφική υπογραφή. Δεν μπορεί να επαληθεύσει τη γνησιότητα.';
$lang['SystemUpgrade.!error.upgrade_locked'] = 'Μια αναβάθμιση βρίσκεται ήδη σε εξέλιξη (ξεκίνησε από το προσωπικό με αναγνωριστικό %1$s στο %2$s).';
$lang['SystemUpgrade.!error.upgrader_crashed'] = 'Η διαδικασία αναβάθμισης φαίνεται να σταμάτησε απροσδόκητα. Ελέγξτε τις παρακάτω διαδρομές δημιουργίας αντιγράφων ασφαλείας για ανάκτηση.';
$lang['SystemUpgrade.!error.upgrader_failed'] = 'Απέτυχε η προετοιμασία ή η εκκίνηση της διαδικασίας αναβάθμισης.';
$lang['SystemUpgrade.environment.config_fail'] = 'Διαμόρφωση: το αρχείο blesta.php δεν είναι εγγράψιμο.';
$lang['SystemUpgrade.environment.config_pass'] = 'Ρύθμιση παραμέτρων: το αρχείο blesta.php είναι εγγράψιμο.';
$lang['SystemUpgrade.environment.disk_pass'] = 'Χώρος στο δίσκο: %1$s διαθέσιμος.';
$lang['SystemUpgrade.environment.disk_warn'] = 'Χώρος στο δίσκο: Μόνο %1$s διαθέσιμος, υπολογίζεται ότι απαιτείται %2$s.';
$lang['SystemUpgrade.environment.exec_fail'] = 'Πρόσβαση στο κέλυφος: η λειτουργία exec() είναι απενεργοποιημένη ή δεν είναι διαθέσιμη.';
$lang['SystemUpgrade.environment.exec_pass'] = 'Πρόσβαση στο κέλυφος: η συνάρτηση exec() είναι διαθέσιμη.';
$lang['SystemUpgrade.environment.mysqldump_fail'] = 'Δημιουργία αντιγράφων ασφαλείας βάσης δεδομένων: η εντολή mysqldump δεν είναι διαθέσιμη. Εγκαταστήστε τα εργαλεία mysql-client.';
$lang['SystemUpgrade.environment.mysqldump_pass'] = 'Δημιουργία αντιγράφων ασφαλείας βάσης δεδομένων: η εντολή mysqldump είναι διαθέσιμη.';
$lang['SystemUpgrade.environment.os_fail'] = 'Η αυτοαναβάθμιση υποστηρίζεται μόνο σε περιβάλλοντα Linux.';
$lang['SystemUpgrade.environment.os_pass'] = 'Λειτουργικό σύστημα: Linux.';
$lang['SystemUpgrade.environment.ownership_fail'] = 'Ιδιοκτησία αρχείου: Οι βασικοί κατάλογοι %1$s δεν ανήκουν στον χρήστη του διακομιστή ιστού.';
$lang['SystemUpgrade.environment.ownership_pass'] = 'Ιδιοκτησία αρχείου: Όλοι οι βασικοί κατάλογοι ανήκουν στον χρήστη του διακομιστή ιστού.';
$lang['SystemUpgrade.environment.rsync_fail'] = 'Συγχρονισμός αρχείων: η εντολή rsync δεν είναι διαθέσιμη. Παρακαλούμε εγκαταστήστε το rsync.';
$lang['SystemUpgrade.environment.rsync_pass'] = 'Συγχρονισμός αρχείων: η εντολή rsync είναι διαθέσιμη.';
$lang['SystemUpgrade.environment.setsid_pass'] = 'Αποσύνδεση διεργασίας: η εντολή setsid είναι διαθέσιμη.';
$lang['SystemUpgrade.environment.setsid_warn'] = 'Αποσύνδεση διεργασίας: η εντολή setsid δεν είναι διαθέσιμη. Η αναβάθμιση ενδέχεται να απαιτήσει χειροκίνητη εντολή μέσω SSH για να ολοκληρωθεί σε περιβάλλοντα φιλοξενίας με φυλακές.';
$lang['SystemUpgrade.environment.tar_fail'] = 'Δημιουργία αντιγράφων ασφαλείας αρχείου: η εντολή tar δεν είναι διαθέσιμη. Παρακαλώ εγκαταστήστε το tar.';
$lang['SystemUpgrade.environment.tar_pass'] = 'Δημιουργία αντιγράφων ασφαλείας αρχείων: η εντολή tar είναι διαθέσιμη.';
$lang['SystemUpgrade.environment.unzip_fail'] = 'Εξαγωγή αρχείων: η εντολή unzip δεν είναι διαθέσιμη. Παρακαλούμε εγκαταστήστε το unzip.';
$lang['SystemUpgrade.environment.unzip_pass'] = 'Εξαγωγή αρχείων: η εντολή unzip είναι διαθέσιμη.';
$lang['SystemUpgrade.environment.writable_fail'] = 'Σύστημα αρχείων: Δεν είναι δυνατή η εγγραφή του καταλόγου εγκατάστασης από τον διακομιστή ιστού.';
$lang['SystemUpgrade.environment.writable_pass'] = 'Σύστημα αρχείων: Κατάλογος εγκατάστασης είναι εγγράψιμος.';
$lang['SystemUpgrade.maintenance_reason'] = 'Το σύστημα αναβαθμίζεται επί του παρόντος. Παρακαλείστε να επιστρέψετε σύντομα.';

