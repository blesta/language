<?php
/**
 * Cron
 *
 * @package blesta
 * @subpackage blesta.language.el_gr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Cron.addpaidpendingservices.service_success'] = 'Η εκκρεμής υπηρεσία #%1$s από τον πελάτη #%2$s είναι τώρα ενεργή.';
$lang['Cron.addpaidpendingservices.service_error'] = 'Η εκκρεμής υπηρεσία #%1$s από τον πελάτη #%2$s δεν μπόρεσε να ενεργοποιηθεί.';
$lang['Cron.addpaidpendingservices.completed'] = 'Η πληρωμένη εργασία εκκρεμών υπηρεσιών έχει ολοκληρωθεί.';
$lang['Cron.addpaidpendingservices.attempt'] = 'Προσπάθεια παροχής πληρωμένων εκκρεμών υπηρεσιών.';
$lang['Cron.cancelscheduledservices.cancel_success'] = 'Η υπηρεσία #%1$s από τον πελάτη #%2$s ακυρώθηκε.';
$lang['Cron.cancelscheduledservices.cancel_error'] = 'Η υπηρεσία #%1$s από τον πελάτη #%2$s δεν μπόρεσε να ακυρωθεί.';
$lang['Cron.cancelscheduledservices.completed'] = 'Η εργασία ακύρωσης προγραμματισμένων υπηρεσιών έχει ολοκληρωθεί.';
$lang['Cron.cancelscheduledservices.attempt'] = 'Προσπάθεια ακύρωσης προγραμματισμένων υπηρεσιών.';
$lang['Cron.unsuspendservices.unsuspend_success'] = 'Η υπηρεσία #%1$s από τον πελάτη %2$s δεν έχει ανασταλεί.';
$lang['Cron.unsuspendservices.unsuspend_error'] = 'Η υπηρεσία #%1$s από τον πελάτη %2$s δεν μπόρεσε να ανασταλεί.';
$lang['Cron.unsuspendservices.completed'] = 'Η εργασία unsuspend services έχει ολοκληρωθεί.';
$lang['Cron.unsuspendservices.attempt'] = 'Προσπάθεια άρσης της αναστολής πληρωμένων υπηρεσιών που έχουν ανασταλεί.';
$lang['Cron.suspendservices.suspend_success'] = 'Η υπηρεσία #%1$s από τον πελάτη %2$s έχει ανασταλεί.';
$lang['Cron.suspendservices.suspend_error'] = 'Η υπηρεσία #%1$s από τον πελάτη %2$s δεν μπόρεσε να ανασταλεί.';
$lang['Cron.suspendservices.suspension_reason'] = 'Μη πληρωμή';
$lang['Cron.suspendservices.completed'] = 'Η εργασία αναστολής υπηρεσιών έχει ολοκληρωθεί.';
$lang['Cron.suspendservices.attempt'] = 'Προσπάθεια αναστολής ληξιπρόθεσμων υπηρεσιών.';
$lang['Cron.cardexpirationreminders.success'] = 'Παραδόθηκε επιτυχώς η υπενθύμιση λήξης για την επαφή %1$s %2$s από τον πελάτη #%3$s.';
$lang['Cron.cardexpirationreminders.failed'] = 'Η υπενθύμιση λήξης για την επαφή %1$s %2$s από τον πελάτη #%3$s δεν μπόρεσε να σταλεί.';
$lang['Cron.cardexpirationreminders.completed'] = 'Η εργασία υπενθυμίσεων λήξης της κάρτας έχει ολοκληρωθεί.';
$lang['Cron.cardexpirationreminders.attempt'] = 'Προσπάθεια αποστολής υπενθυμίσεων για τη λήξη της κάρτας.';
$lang['Cron.autodebitinvoices.charge_success'] = 'Επιτυχής επεξεργασία της πληρωμής.';
$lang['Cron.autodebitinvoices.charge_failed'] = 'Δεν είναι δυνατή η επεξεργασία της πληρωμής.';
$lang['Cron.autodebitinvoices.charge_attempt'] = 'Προσπάθεια αυτόματης χρέωσης του πελάτη #%1$s για όλα τα ανοιχτά τιμολόγια ύψους %2$s.';
$lang['Cron.autodebitinvoices.completed'] = 'Η εργασία αυτόματης χρέωσης τιμολογίων έχει ολοκληρωθεί.';
$lang['Cron.autodebitinvoices.attempt'] = 'Προσπάθεια αυτόματης χρέωσης ανοικτών τιμολογίων.';
$lang['Cron.applycredits.apply_none'] = 'Δεν υπάρχουν τιμολόγια στα οποία μπορούν να εφαρμοστούν πιστώσεις.';
$lang['Cron.applycredits.apply_success'] = 'Εφαρμόστηκαν επιτυχώς εκκρεμείς πιστώσεις από τη συναλλαγή %1$s για τον πελάτη #%2$s στο τιμολόγιο #%3$s ύψους %4$s.';
$lang['Cron.applycredits.apply_failed'] = 'Δεν είναι δυνατή η εφαρμογή εκκρεμών πιστώσεων για τον πελάτη #%1$s.';
$lang['Cron.applycredits.completed'] = 'Η εργασία "Εφαρμογή πιστώσεων" έχει ολοκληρωθεί.';
$lang['Cron.applycredits.attempt'] = 'Προσπάθεια εφαρμογής πιστώσεων σε ανοικτά τιμολόγια.';
$lang['Cron.index.completed_all_system'] = 'Όλες οι εργασίες του συστήματος έχουν ολοκληρωθεί.';
$lang['Cron.index.attempt_all_system'] = 'Προσπάθεια εκτέλεσης όλων των εργασιών συστήματος.';
$lang['Cron.index.completed_all'] = 'Όλες οι εργασίες έχουν ολοκληρωθεί.';
$lang['Cron.index.attempt_all'] = 'Προσπάθεια εκτέλεσης όλων των εργασιών για %1$s.';
$lang['Cron.!error.task_execution.failed'] = 'Σφάλμα: %1$s %2$s';
$lang['Cron.!error.cron.failed'] = 'Το Cron απέτυχε να καταγράψει.';
$lang['Cron.!error.task_filter.exclude_not_array'] = 'Το φίλτρο εργασιών "exclude" πρέπει να είναι ένας πίνακας.';
$lang['Cron.!error.task_filter.include_not_array'] = 'Το φίλτρο εργασιών "include" πρέπει να είναι ένας πίνακας.';
$lang['Cron.!error.task_filter.both_include_exclude'] = 'Το φίλτρο εργασιών δεν μπορεί να έχει κλειδιά "include" και "exclude".';
$lang['Cron.!error.task_filter.invalid_format'] = 'Το φίλτρο εργασιών πρέπει να είναι ένα αντικείμενο JSON.';
$lang['Cron.!error.task_filter.invalid_json'] = 'Μη έγκυρο JSON στην παράμετρο του φίλτρου εργασιών: %1$s';

