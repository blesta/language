<?php
/**
 * Cron Tasks
 *
 * @package blesta
 * @subpackage blesta.language.el_gr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['CronTasks.crontask.name.license_validation'] = 'Επικύρωση άδειας';
$lang['CronTasks.crontask.description.transition_quotations'] = 'Χαρακτηρίστε τα εισαγωγικά που έχουν παρέλθει μετά την ημερομηνία ισχύος, ως ληγμένα';
$lang['CronTasks.crontask.name.transition_quotations'] = 'Αποσπάσματα μετάβασης';
$lang['CronTasks.crontask.description.unsuspend_services'] = 'Οι υπηρεσίες που έχουν ανασταλεί και έχουν πληρωθεί θα διαγραφούν στο επιλεγμένο χρονικό διάστημα.';
$lang['CronTasks.crontask.name.unsuspend_services'] = 'Υπηρεσίες μη αναστολής';
$lang['CronTasks.crontask.description.cleanup_logs'] = 'Τα παλαιά αρχεία καταγραφής της πύλης, της μονάδας και άλλα αρχεία καταγραφής θα εναλλάσσονται καθημερινά ανάλογα με τις ρυθμίσεις διατήρησης που έχουν καθοριστεί κατά τον καθορισμένο χρόνο.';
$lang['CronTasks.crontask.name.cleanup_logs'] = 'Καθαρισμός αρχείων καταγραφής';
$lang['CronTasks.crontask.description.deliver_reports'] = 'Οι αναφορές A/R, Παραγωγή τιμολογίων, Φορολογικές υποχρεώσεις και άλλες αναφορές θα παραδίδονται καθημερινά στον καθορισμένο χρόνο.';
$lang['CronTasks.crontask.name.deliver_reports'] = 'Παράδοση αναφορών';
$lang['CronTasks.crontask.description.exchange_rates'] = 'Οι συναλλαγματικές ισοτιμίες θα ενημερώνονται στο χρονικό διάστημα που καθορίζεται. Δεν συνιστάται να εκτελείτε αυτό το πρόγραμμα πάνω από δύο φορές την ημέρα, για τον κίνδυνο να μπλοκαριστεί.';
$lang['CronTasks.crontask.name.exchange_rates'] = 'Ενημερώσεις συναλλαγματικών ισοτιμιών';
$lang['CronTasks.crontask.description.suspend_services'] = 'Οι καθυστερούμενες υπηρεσίες θα αναστέλλονται καθημερινά την καθορισμένη ώρα.';
$lang['CronTasks.crontask.name.suspend_services'] = 'Αναστολή υπηρεσιών';
$lang['CronTasks.crontask.description.backups_sftp'] = 'Τα αντίγραφα ασφαλείας SFTP προγραμματίζονται στο μενού Ρυθμίσεις συστήματος > Δημιουργία αντιγράφων ασφαλείας > Ασφαλές FTP.';
$lang['CronTasks.crontask.name.backups_sftp'] = 'Δημιουργία αντιγράφων ασφαλείας SFTP';
$lang['CronTasks.crontask.description.backups_amazons3'] = 'Τα αντίγραφα ασφαλείας του Amazon S3 προγραμματίζονται στην ενότητα Ρυθμίσεις συστήματος > Δημιουργία αντιγράφων ασφαλείας > Amazon S3.';
$lang['CronTasks.crontask.name.backups_amazons3'] = 'Δημιουργία αντιγράφων ασφαλείας Amazon S3';
$lang['CronTasks.crontask.description.deliver_invoices'] = 'Τα τιμολόγια που έχουν προγραμματιστεί για παράδοση θα αποστέλλονται στο επιλεγμένο διάστημα.';
$lang['CronTasks.crontask.name.deliver_invoices'] = 'Παράδοση τιμολογίων';
$lang['CronTasks.crontask.description.card_expiration_reminders'] = 'Στις 15 του μήνα θα αποστέλλεται υπενθύμιση για τις πιστωτικές κάρτες που λήγουν τον ίδιο μήνα την καθορισμένη ώρα.';
$lang['CronTasks.crontask.name.card_expiration_reminders'] = 'Υπενθυμίσεις λήξης κάρτας 15η του μήνα';
$lang['CronTasks.crontask.description.cancel_scheduled_services'] = 'Οι υπηρεσίες με καθορισμένες μελλοντικές ημερομηνίες ακύρωσης καταργούνται στο επιλεγμένο χρονικό διάστημα.';
$lang['CronTasks.crontask.name.cancel_scheduled_services'] = 'Ακύρωση προγραμματισμένων υπηρεσιών';
$lang['CronTasks.crontask.description.provision_pending_services'] = 'Οι πληρωμένες εκκρεμείς υπηρεσίες ενεργοποιούνται στο επιλεγμένο διάστημα.';
$lang['CronTasks.crontask.name.provision_pending_services'] = 'Παροχή πληρωτέων εκκρεμών υπηρεσιών';
$lang['CronTasks.crontask.description.process_renewing_services'] = 'Οι υπηρεσίες ανανέωσης που είναι συνδεδεμένες με ενότητες ανανεώνονται στο επιλεγμένο διάστημα.';
$lang['CronTasks.crontask.name.process_renewing_services'] = 'Ανανεώσεις υπηρεσιών διαδικασίας';
$lang['CronTasks.crontask.description.process_service_changes'] = 'Οι πληρωμένες αλλαγές υπηρεσιών που βρίσκονται στην ουρά (π.χ. αναβαθμίσεις) υποβάλλονται σε επεξεργασία στο επιλεγμένο διάστημα.';
$lang['CronTasks.crontask.name.process_service_changes'] = 'Αλλαγές στην Υπηρεσία Διαδικασίας';
$lang['CronTasks.crontask.description.apply_payments'] = 'Οι χαλαρές πιστώσεις εφαρμόζονται αυτόματα στα ανοικτά τιμολόγια στο επιλεγμένο διάστημα.';
$lang['CronTasks.crontask.name.apply_payments'] = 'Εφαρμογή πληρωμών σε ανοικτά τιμολόγια';
$lang['CronTasks.crontask.description.payment_reminders'] = 'Οι υπενθυμίσεις πληρωμής και οι ειδοποιήσεις καθυστέρησης αποστέλλονται καθημερινά την καθορισμένη ώρα.';
$lang['CronTasks.crontask.name.payment_reminders'] = 'Υπενθυμίσεις πληρωμής';
$lang['CronTasks.crontask.description.autodebit'] = 'Οι λογαριασμοί πληρωμών που έχουν επιλεγεί για αυτόματη χρέωση θα εκτελούνται για την εξόφληση των ανοικτών τιμολογίων καθημερινά την καθορισμένη ώρα.';
$lang['CronTasks.crontask.name.autodebit'] = 'Αυτόματη χρέωση';
$lang['CronTasks.crontask.description.apply_invoice_late_fees'] = 'Εφαρμόζει τέλη καθυστέρησης σε ανοικτά τιμολόγια έναν καθορισμένο αριθμό ημερών μετά την ημερομηνία λήξης.';
$lang['CronTasks.crontask.name.apply_invoice_late_fees'] = 'Εφαρμογή τελών καθυστέρησης τιμολογίου';
$lang['CronTasks.crontask.description.create_invoice'] = 'Τα επαναλαμβανόμενα τιμολόγια και οι υπηρεσίες ανανέωσης τιμολογούνται μέσω αυτής της εργασίας, η οποία εκτελείται μία φορά την ημέρα την καθορισμένη ώρα.';
$lang['CronTasks.crontask.name.create_invoice'] = 'Δημιουργία τιμολογίου';
$lang['CronTasks.task_type.module'] = 'Ενότητα';
$lang['CronTasks.task_type.plugin'] = 'Plugin';
$lang['CronTasks.task_type.system'] = 'Σύστημα';
$lang['CronTasks.!error.type.format'] = 'Μη έγκυρος τύπος εργασίας cron. Πρέπει να είναι είτε χρόνος είτε διάστημα.';
$lang['CronTasks.!error.time.format'] = 'Η ώρα είναι σε άκυρη μορφή.';
$lang['CronTasks.!error.interval.format'] = 'Το διάστημα πρέπει να είναι ένας αριθμός που αντιπροσωπεύει λεπτά.';
$lang['CronTasks.!error.enabled.length'] = 'το μήκος δεν μπορεί να υπερβαίνει τον 1 χαρακτήρα.';
$lang['CronTasks.!error.enabled.format'] = 'enabled πρέπει να είναι ένας αριθμός.';
$lang['CronTasks.!error.is_lang.length'] = 'Το μήκος του is_lang δεν μπορεί να υπερβαίνει τον 1 χαρακτήρα.';
$lang['CronTasks.!error.is_lang.format'] = 'is_lang πρέπει να είναι αριθμός.';
$lang['CronTasks.!error.name.empty'] = 'Παρακαλώ εισάγετε ένα όνομα.';
$lang['CronTasks.!error.id.exists'] = 'Μη έγκυρο αναγνωριστικό εργασίας cron.';
$lang['CronTasks.!error.run_id.exists'] = 'Μη έγκυρο αναγνωριστικό εκτέλεσης της εργασίας cron.';
$lang['CronTasks.!error.dir.length'] = 'Το μήκος του καταλόγου δεν μπορεί να υπερβαίνει τους 64 χαρακτήρες.';
$lang['CronTasks.!error.task_type.format'] = 'Μη έγκυρος τύπος εργασίας. Πρέπει να είναι module, plugin ή system.';
$lang['CronTasks.!error.key.length'] = 'Το μήκος του κλειδιού της εργασίας cron δεν μπορεί να υπερβαίνει τους 64 χαρακτήρες.';
$lang['CronTasks.!error.key.unique'] = 'Το κλειδί cron task που δόθηκε είναι ήδη κατειλημμένο.';
$lang['CronTasks.crontask.description.delete_expired_password_reset_tokens'] = 'Αφαιρεί όλα τα κουπόνια επαναφοράς κωδικού πρόσβασης που έχουν λήξει την ημερομηνία λήξης από το σύστημα.';
$lang['CronTasks.crontask.name.delete_expired_password_reset_tokens'] = 'Διαγραφή ληγμένων κουπονιών επαναφοράς κωδικού πρόσβασης';
$lang['CronTasks.crontask.description.low_balance_notifications'] = 'Στέλνει ειδοποίηση σε όλους τους χρήστες των οποίων τα επίπεδα πίστωσης έχουν πέσει κάτω από το ρυθμισμένο όριο.';
$lang['CronTasks.crontask.name.low_balance_notifications'] = 'Ειδοποιήσεις χαμηλού υπολοίπου';

