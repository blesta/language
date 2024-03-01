<?php
/**
 * Services
 *
 * @package blesta
 * @subpackage blesta.language.el_gr
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Services.getActions.update_coupon'] = 'Ενημέρωση κουπονιού';
$lang['Services.getActions.change_renew'] = 'Αλλαγή ημερομηνίας ανανέωσης';
$lang['Services.getActions.schedule_cancel'] = 'Ακύρωση χρονοδιαγράμματος';
$lang['Services.getActions.cancel'] = 'Ακύρωση';
$lang['Services.getActions.unsuspend'] = 'Μη αναστολή';
$lang['Services.getActions.suspend'] = 'Αναστολή';
$lang['Services.getStatusTypes.in_review'] = 'Ανασκόπηση';
$lang['Services.getStatusTypes.suspended'] = 'Αναστολή';
$lang['Services.getStatusTypes.pending'] = 'Εκκρεμεί';
$lang['Services.getStatusTypes.canceled'] = 'Ακυρώθηκε';
$lang['Services.getStatusTypes.active'] = 'Ενεργό';
$lang['Services.!error.prorate.format'] = 'Το αν θα γίνει επιμερισμός πρέπει να οριστεί σε "true" ή "false".';
$lang['Services.!error.service_id.has_children'] = 'Αυτή η υπηρεσία δεν μπορεί να διαγραφεί, επειδή έχει θυγατρικές υπηρεσίες. Παρακαλούμε ακυρώστε ή διαγράψτε αυτές τις υπηρεσίες και δοκιμάστε ξανά.';
$lang['Services.!error.status.valid'] = 'Μόνο εκκρεμείς, ακυρωμένες ή υπό εξέταση υπηρεσίες μπορούν να διαγραφούν.';
$lang['Services.!error.configoptions.valid'] = 'Μία από τις επιλεγμένες διαμορφώσιμες επιλογές δεν ισχύει για την υπηρεσία.';
$lang['Services.!error.date_canceled.valid'] = 'Πρέπει να ορίσετε μια έγκυρη ημερομηνία για να ακυρώσετε αυτή την υπηρεσία.';
$lang['Services.!error.pricing_id.valid'] = 'Πρέπει να επιλέξετε έναν έγκυρο όρο.';
$lang['Services.!error.invoice_method.valid'] = 'Πρέπει να επιλέξετε μια έγκυρη μέθοδο τιμολόγησης.';
$lang['Services.!error.fields[][encrypted].format'] = 'Ένα πεδίο υπηρεσίας για κρυπτογράφηση έχει μη έγκυρη μορφή.';
$lang['Services.!error.fields[][value].empty'] = 'Μια τιμή είναι κενή από τα πεδία υπηρεσιών.';
$lang['Services.!error.fields[][key].empty'] = 'Ένα κλειδί είναι κενό από τα πεδία υπηρεσίας.';
$lang['Services.!error.use_module.format'] = 'Μη έγκυρη μορφή μονάδας χρήσης.';
$lang['Services.!error.date_canceled.format'] = 'Μη έγκυρη μορφή ακυρωμένης ημερομηνίας.';
$lang['Services.!error.date_suspended.format'] = 'Μη έγκυρη μορφή ημερομηνίας αναστολής.';
$lang['Services.!error.date_last_renewed.format'] = 'Μη έγκυρη μορφή ημερομηνίας τελευταίας ανανέωσης.';
$lang['Services.!error.date_renews.valid'] = 'Η ημερομηνία ανανέωσης πρέπει να είναι μεγαλύτερη από την τελευταία ημερομηνία ανανέωσης του %1$s.';
$lang['Services.!error.date_renews.format'] = 'Μη έγκυρη μορφή ημερομηνίας ανανέωσης.';
$lang['Services.!error.date_added.format'] = 'Μη έγκυρη μορφή προστιθέμενης ημερομηνίας.';
$lang['Services.!error.status.format'] = 'Μη έγκυρη κατάσταση.';
$lang['Services.!error.override_currency.format'] = 'Παρακαλούμε επιλέξτε ένα έγκυρο νόμισμα.';
$lang['Services.!error.override_price.override'] = 'Πρέπει να οριστούν τόσο η τιμή όσο και το νόμισμα για να παρακαμφθεί η τρέχουσα τιμή.';
$lang['Services.!error.override_price.format'] = 'Η παράκαμψη της τιμής πρέπει να είναι ένας αριθμός.';
$lang['Services.!error.module_group.valid'] = 'Η ομάδα μονάδων δεν υπάρχει.';
$lang['Services.!error.module_row.valid'] = 'Η σειρά ενότητας δεν υπάρχει.';
$lang['Services.!error.qty.available'] = 'Επίτευξη ορίου ποσότητας. Εάν είναι δυνατόν, παρακαλούμε επιλέξτε μικρότερη ποσότητα.';
$lang['Services.!error.qty.length'] = 'Το μήκος της ποσότητας δεν μπορεί να υπερβαίνει τους 10 χαρακτήρες.';
$lang['Services.!error.qty.format'] = 'Η ποσότητα πρέπει να είναι αριθμός.';
$lang['Services.!error.coupon_id.valid'] = 'Αυτό το κουπόνι δεν φαίνεται να ισχύει.';
$lang['Services.!error.module_row_id.exists'] = 'Μη έγκυρο αναγνωριστικό γραμμής ενότητας.';
$lang['Services.!error.client_id.allowed'] = 'Ο πελάτης δεν μπορεί να έχει πρόσβαση σε αυτό το πακέτο.';
$lang['Services.!error.client_id.exists'] = 'Ο πελάτης δεν υπάρχει.';
$lang['Services.!error.pricing_id.overrides'] = 'Ο όρος του πακέτου δεν μπορεί να αλλάξει όταν έχουν οριστεί παρακάμψεις τιμών.';
$lang['Services.!error.pricing_id.exists'] = 'Παρακαλούμε επιλέξτε έναν έγκυρο όρο.';
$lang['Services.!error.id_value.valid'] = 'Αδυναμία προσδιορισμού της τιμής του αναγνωριστικού τιμολογίου.';
$lang['Services.!error.id_format.length'] = 'Η μορφή ID για τα τιμολόγια δεν μπορεί να υπερβαίνει τους 64 χαρακτήρες.';
$lang['Services.!error.id_format.empty'] = 'Δεν έχει οριστεί μορφή ID για τα τιμολόγια.';
$lang['Services.!error.package_group_id.exists'] = 'Μη έγκυρο αναγνωριστικό ομάδας πακέτων.';
$lang['Services.!error.parent_service_id.parent'] = 'Το αναγνωριστικό της γονικής υπηρεσίας υπάρχει ήδη ως παιδί άλλης υπηρεσίας.';
$lang['Services.!error.parent_service_id.exists'] = 'Μη έγκυρο αναγνωριστικό γονικής υπηρεσίας.';
$lang['Services.!error.service_id.exists'] = 'Μη έγκυρο αναγνωριστικό υπηρεσίας.';
$lang['Services.!error.move.unpaid_invoices'] = 'Η υπηρεσία δεν μπορεί να μεταφερθεί σε άλλον πελάτη, επειδή έχει απλήρωτα τιμολόγια.';
$lang['Services.!error.encrypted.format'] = 'Μη έγκυρη μορφή για κρυπτογραφημένο.';
$lang['Services.!error.value.empty'] = 'Η τιμή του πεδίου service δεν πρέπει να είναι κενή.';
$lang['Services.!error.key.length'] = 'Το κλειδί του πεδίου υπηρεσίας δεν πρέπει να υπερβαίνει τους 32 χαρακτήρες.';
$lang['Services.!error.key.empty'] = 'Το κλειδί του πεδίου υπηρεσίας δεν πρέπει να είναι κενό.';

