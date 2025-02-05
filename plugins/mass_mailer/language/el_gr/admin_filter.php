<?php
/**
 * Admin Filter
 *
 * @package blesta
 * @subpackage blesta.language.el_gr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminFilter.index.page_title'] = 'Mass Mailer > Φίλτρο';
$lang['AdminFilter.text.all'] = 'Όλα';
$lang['AdminFilter.!tooltip.client_group_ids'] = 'Οι πελάτες πρέπει να ανήκουν σε μία από τις επιλεγμένες ομάδες.';
$lang['AdminFilter.!tooltip.client_statuses'] = 'Οι πελάτες πρέπει να ανήκουν σε μία από τις επιλεγμένες καταστάσεις.';
$lang['AdminFilter.!tooltip.languages'] = 'Η γλώσσα των πελατών πρέπει να είναι ρυθμισμένη σε μία από τις επιλεγμένες γλώσσες.';
$lang['AdminFilter.!tooltip.contact_types'] = 'Οι επαφές πρέπει να ανήκουν σε έναν από τους επιλεγμένους τύπους.';
$lang['AdminFilter.!tooltip.client_start_date'] = 'Οι πελάτες πρέπει να έχουν δημιουργηθεί κατά ή μετά την ημερομηνία αυτή. Αφήστε αυτό το πεδίο κενό για να το αγνοήσετε.';
$lang['AdminFilter.!tooltip.client_end_date'] = 'Οι πελάτες πρέπει να έχουν δημιουργηθεί κατά ή πριν από την ημερομηνία αυτή. Αφήστε αυτό το πεδίο κενό για να το αγνοήσετε.';
$lang['AdminFilter.!tooltip.filter_services'] = 'Εάν αυτή η επιλογή είναι επιλεγμένη, οι πελάτες πρέπει επίσης να πληρούν τα κριτήρια φιλτραρίσματος υπηρεσιών.';
$lang['AdminFilter.!tooltip.service_renew_date'] = 'Οι υπηρεσίες πρέπει να ανανεωθούν κατά ή πριν από την ημερομηνία αυτή. Αφήστε αυτό το πεδίο κενό για να το αγνοήσετε.';
$lang['AdminFilter.!tooltip.service_statuses'] = 'Οι υπηρεσίες πρέπει να βρίσκονται σε μία από τις επιλεγμένες καταστάσεις.';
$lang['AdminFilter.!tooltip.module_id'] = 'Οι υπηρεσίες πρέπει να ανήκουν στην επιλεγμένη ενότητα.';
$lang['AdminFilter.!tooltip.service_parent_type'] = 'Οι υπηρεσίες θα φιλτράρονται περαιτέρω είτε κατά πακέτο είτε κατά ενότητα.';
$lang['AdminFilter.!tooltip.selected_packages'] = 'Οι υπηρεσίες πρέπει να ανήκουν σε ένα από τα επιλεγμένα πακέτα.';
$lang['AdminFilter.!tooltip.include_all_services'] = 'Εάν αυτή η επιλογή είναι επιλεγμένη, θα συμπεριληφθούν όλες οι υπηρεσίες. Οι επαφές θα λάβουν, ενδεχομένως, πολλαπλά μηνύματα ηλεκτρονικού ταχυδρομείου: ένα για κάθε αντίστοιχη υπηρεσία. Εάν δεν είναι επιλεγμένη, οι επαφές θα λάβουν μόνο ένα μήνυμα ηλεκτρονικού ταχυδρομείου, το οποίο θα περιέχει την πρώτη υπηρεσία που ταιριάζει.';
$lang['AdminFilter.!tooltip.receive_email_marketing'] = 'Εάν αυτή η επιλογή είναι επιλεγμένη, μόνο οι πελάτες που έχουν επιλέξει μάρκετινγκ/προσφορές θα λάβουν αυτό το email.';
$lang['AdminFilter.index.boxtitle'] = 'Μαζική αποστολή αλληλογραφίας';
$lang['AdminFilter.index.heading.client_filters'] = 'Επιλογές φιλτραρίσματος πελατών';
$lang['AdminFilter.index.form.client_group_ids'] = 'Ομάδες πελατών';
$lang['AdminFilter.index.form.client_statuses'] = 'Καταστάσεις πελατών';
$lang['AdminFilter.index.form.languages'] = 'Γλώσσες';
$lang['AdminFilter.index.form.contact_types'] = 'Τύποι επικοινωνίας';
$lang['AdminFilter.index.form.client_start_date'] = 'Ημερομηνία έναρξης δημιουργίας πελάτη';
$lang['AdminFilter.index.form.client_end_date'] = 'Ημερομηνία λήξης δημιουργίας πελάτη';
$lang['AdminFilter.index.form.receive_email_marketing'] = 'Περιορισμός σε εμπορεύσιμους πελάτες';
$lang['AdminFilter.index.form.filter_services'] = 'Φίλτρο ανά υπηρεσίες';
$lang['AdminFilter.index.heading.service_filters'] = 'Επιλογές φιλτραρίσματος υπηρεσιών';
$lang['AdminFilter.index.form.service_renew_date'] = 'Ανανεώνεται από';
$lang['AdminFilter.index.form.service_statuses'] = 'Καταστάσεις υπηρεσιών';
$lang['AdminFilter.index.form.service_parent_type'] = 'Πακέτο/Μονάδα';
$lang['AdminFilter.index.form.service_parent_type_package'] = 'Πακέτο';
$lang['AdminFilter.index.form.service_parent_type_module'] = 'Ενότητα';
$lang['AdminFilter.index.form.package_group'] = 'Φίλτρο ομάδας πακέτων';
$lang['AdminFilter.index.form.selected_packages'] = 'Επιλεγμένα πακέτα';
$lang['AdminFilter.index.form.selectable_packages'] = 'Διαθέσιμα πακέτα';
$lang['AdminFilter.index.form.module_id'] = 'Ενότητα';
$lang['AdminFilter.index.form.include_all_services'] = 'Συμπεριλαμβάνονται για όλες τις υπηρεσίες';
$lang['AdminFilter.index.form.continue'] = 'Συνεχίστε';
$lang['AdminFilter.index.form.export'] = 'Εξαγωγή';

