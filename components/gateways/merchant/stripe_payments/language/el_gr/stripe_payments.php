<?php
/**
 * Stripe Payments
 *
 * @package blesta
 * @subpackage blesta.language.el_gr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['StripePayments.charge_description'] = 'Χρέωση για %1$s';
$lang['StripePayments.charge_description_default'] = 'Χρέωση για καθορισμένο ποσό';
$lang['StripePayments.migrate_accounts'] = 'Μετεγκατάσταση λογαριασμών';
$lang['StripePayments.warning_migrate_accounts'] = 'Μην απεγκαταστήσετε την παλιά πύλη Stripe μέχρι να ολοκληρώσετε τη χρήση αυτού του εργαλείου μετάβασης. Με αυτόν τον τρόπο, το εργαλείο θα καταστεί μη προσβάσιμο.';
$lang['StripePayments.text_migrate_accounts'] = 'Μπορείτε να μεταφέρετε αυτόματα τους λογαριασμούς πληρωμών που ήταν αποθηκευμένοι offsite από την παλιά πύλη Stripe σε αυτή την πύλη Stripe Payments. Οι λογαριασμοί που δεν είναι αποθηκευμένοι εκτός τοποθεσίας πρέπει να μεταφερθούν δημιουργώντας χειροκίνητα νέους λογαριασμούς πληρωμών. Για να αποφευχθούν οι χρονικές καθυστερήσεις, οι μετακινήσεις θα γίνονται σε παρτίδες των %1$s. Εκτελέστε αυτό το πρόγραμμα όσες φορές χρειάζεται για να μεταφερθούν όλοι οι λογαριασμοί πληρωμών.';
$lang['StripePayments.text_accounts_remaining'] = 'Υπολειπόμενοι λογαριασμοί: %1$s';
$lang['StripePayments.heading_migrate_accounts'] = 'Μετεγκατάσταση παλαιών λογαριασμών πληρωμών';
$lang['StripePayments.webhook_note'] = 'Συνιστάται να ρυθμίσετε το ακόλουθο url ως Webhook για τα συμβάντα "payment_intent" στο λογαριασμό σας στο Stripe.';
$lang['StripePayments.webhook'] = 'Webhook λωρίδας';
$lang['StripePayments.tooltip_secret_key'] = 'Το μυστικό κλειδί API είναι συγκεκριμένο είτε για τη λειτουργία live είτε για τη δοκιμαστική λειτουργία. Βεβαιωθείτε ότι χρησιμοποιείτε το σωστό κλειδί.';
$lang['StripePayments.tooltip_publishable_key'] = 'Το Κλειδί δημοσίευσης API σας είναι συγκεκριμένο είτε για τη ζωντανή είτε για τη δοκιμαστική λειτουργία. Βεβαιωθείτε ότι χρησιμοποιείτε το σωστό κλειδί.';
$lang['StripePayments.secret_key'] = 'Μυστικό κλειδί API';
$lang['StripePayments.publishable_key'] = 'Κλειδί API που μπορεί να δημοσιευτεί';
$lang['StripePayments.ach_form.mandate_future_usage'] = 'Εάν χρησιμοποιείτε τις υπηρεσίες της %1$s ή αγοράζετε πρόσθετα προϊόντα περιοδικά σύμφωνα με τους όρους της %1$s, εξουσιοδοτείτε την %1$s να χρεώνει περιοδικά τον τραπεζικό σας λογαριασμό. Οι πληρωμές που δεν εμπίπτουν στις τακτικές χρεώσεις που εγκρίνονται παραπάνω θα χρεώνονται μόνο μετά την εξουσιοδότησή σας.';
$lang['StripePayments.ach_form.mandate_authorization'] = 'Με την υποβολή αυτής της φόρμας, εξουσιοδοτείτε την %1$s να χρεώσει τον τραπεζικό λογαριασμό που καθορίζεται παραπάνω για οποιοδήποτε οφειλόμενο ποσό για χρεώσεις που προκύπτουν από τη χρήση των υπηρεσιών της %1$s και/ή την αγορά προϊόντων από την %1$s, σύμφωνα με την ιστοσελίδα και τους όρους της %1$s, έως ότου ανακληθεί αυτή η εξουσιοδότηση. Μπορείτε να τροποποιήσετε ή να ακυρώσετε την παρούσα εξουσιοδότηση ανά πάσα στιγμή, ειδοποιώντας την %1$s με προειδοποίηση 30 (τριάντα) ημερών.';
$lang['StripePayments.ach_form.field_second_deposit'] = 'Δεύτερη κατάθεση';
$lang['StripePayments.ach_form.field_first_deposit'] = 'Πρώτη κατάθεση';
$lang['StripePayments.ach_form.verification_notice'] = 'Στείλαμε δύο μικρές καταθέσεις σε αυτόν τον τραπεζικό λογαριασμό. Για την επαλήθευση αυτού του λογαριασμού, παρακαλούμε επιβεβαιώστε τα ποσά αυτών των καταθέσεων.';
$lang['StripePayments.ach_form.field_routing_number'] = 'Αριθμός δρομολόγησης';
$lang['StripePayments.ach_form.field_account_number'] = 'Αριθμός λογαριασμού';
$lang['StripePayments.ach_form.field_holder_type_company'] = 'Εταιρεία';
$lang['StripePayments.ach_form.field_holder_type_individual'] = 'Ατομικό';
$lang['StripePayments.ach_form.field_holder_type'] = 'Τύπος κατόχου';
$lang['StripePayments.ach_form.field_type'] = 'Τύπος λογαριασμού';
$lang['StripePayments.description'] = 'Χρησιμοποιεί τα στοιχεία Stripe και το Payment Request API για τον αυτόματο χειρισμό του 3D Secure και του SCA για την αποστολή πιστωτικών καρτών απευθείας μέσω του Stripe.';
$lang['StripePayments.name'] = 'Πληρωμές Stripe';
$lang['StripePayments.!error.invalid_request_error'] = 'Η πύλη πληρωμών επέστρεψε σφάλμα κατά την επεξεργασία του αιτήματος.';
$lang['StripePayments.!error.bank_account_unverified'] = 'Πρέπει να επαληθεύσετε τον τραπεζικό σας λογαριασμό πριν τον χρησιμοποιήσετε για να πραγματοποιήσετε μια πληρωμή.';
$lang['StripePayments.!error.secret_key.valid'] = 'Δεν είναι δυνατή η σύνδεση με το API της Stripe χρησιμοποιώντας το συγκεκριμένο μυστικό κλειδί.';
$lang['StripePayments.!error.secret_key.empty'] = 'Παρακαλώ εισάγετε ένα μυστικό κλειδί.';
$lang['StripePayments.!error.publishable_key.empty'] = 'Παρακαλούμε εισάγετε ένα κλειδί που μπορεί να δημοσιευτεί.';
$lang['StripePayments.!error.auth'] = 'Η πύλη δεν μπόρεσε να πραγματοποιήσει έλεγχο ταυτότητας.';
$lang['StripePayments.request_three_d_secure_note'] = 'Εάν είστε χρήστης της Stripe με έδρα την Ινδία, πριν αποθηκεύσετε μια νέα κάρτα στην Stripe, πρέπει πάντα να εκτελείτε έλεγχο ταυτότητας 3D Secure (3DS).';
$lang['StripePayments.request_three_d_secure_challenge'] = 'Παρουσίαση της πρόκλησης 3D Secure κάθε φορά που ένας πελάτης αποθηκεύει μια μέθοδο πληρωμής ή επεξεργάζεται μια μέθοδο πληρωμής (αποθηκευμένη ή μη αποθηκευμένη).';
$lang['StripePayments.request_three_d_secure_frictionless'] = 'Παρουσίαση πρόκλησης 3D Secure κάθε φορά που ένας πελάτης αποθηκεύει μια μέθοδο πληρωμής ή επεξεργάζεται μια μη αποθηκευμένη μέθοδο πληρωμής';
$lang['StripePayments.request_three_d_secure_automatic'] = 'Επιτρέψτε στο Stripe να καθορίσει πότε θα παρουσιάσει μια πρόκληση 3D Secure';
$lang['StripePayments.request_three_d_secure'] = 'Ροή ελέγχου ταυτότητας 3D Secure';

