<?php
/**
 * Packages
 *
 * @package blesta
 * @subpackage blesta.language.el_gr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Packages.getStatusTypes.restricted'] = 'Περιορισμένο';
$lang['Packages.getStatusTypes.inactive'] = 'Ανενεργό';
$lang['Packages.getStatusTypes.active'] = 'Ενεργό';
$lang['Packages.getPricingPeriods.onetime_plural'] = 'Μία φορά';
$lang['Packages.getPricingPeriods.year_plural'] = 'Έτη';
$lang['Packages.getPricingPeriods.month_plural'] = 'Μήνες';
$lang['Packages.getPricingPeriods.week_plural'] = 'Εβδομάδες';
$lang['Packages.getPricingPeriods.day_plural'] = 'Ημέρες';
$lang['Packages.getPricingPeriods.onetime'] = 'Μία φορά';
$lang['Packages.getPricingPeriods.year'] = 'Έτος';
$lang['Packages.getPricingPeriods.month'] = 'Μήνας';
$lang['Packages.getPricingPeriods.week'] = 'Εβδομάδα';
$lang['Packages.getPricingPeriods.day'] = 'Ημέρα';
$lang['Packages.!error.groups[].valid'] = 'Η ομάδα πακέτων που επιλέχθηκε δεν ανήκει στην εταιρεία που δόθηκε.';
$lang['Packages.!error.groups[].exists'] = 'Μη έγκυρο αναγνωριστικό ομάδας πακέτων.';
$lang['Packages.!error.pricing[][id].deletable'] = 'Ο όρος δεν μπορούσε να αφαιρεθεί επειδή χρησιμοποιείται από μία ή περισσότερες υπηρεσίες.';
$lang['Packages.!error.pricing[][id].format'] = 'Μη έγκυρο αναγνωριστικό τιμολόγησης πακέτου.';
$lang['Packages.!error.pricing[][currency].in_use'] = 'Το νόμισμα δεν μπορεί να ενημερωθεί σε μια τιμολόγηση που είναι σε χρήση.';
$lang['Packages.!error.pricing[][currency].format'] = 'Ο κωδικός νομίσματος πρέπει να είναι 3 χαρακτήρες.';
$lang['Packages.!error.pricing[][cancel_fee].format'] = 'Το τέλος ακύρωσης πρέπει να είναι ένας αριθμός.';
$lang['Packages.!error.pricing[][setup_fee].format'] = 'Το τέλος εγκατάστασης πρέπει να είναι ένας αριθμός.';
$lang['Packages.!error.pricing[][price_transfer].format'] = 'Η τιμή μεταφοράς πρέπει να είναι ένας αριθμός.';
$lang['Packages.!error.pricing[][price_renews].valid'] = 'Η τιμή ανανέωσης δεν μπορεί να οριστεί για μία χρονική περίοδο.';
$lang['Packages.!error.pricing[][price_renews].format'] = 'Η τιμή ανανέωσης πρέπει να είναι ένας αριθμός.';
$lang['Packages.!error.pricing[][price].format'] = 'Η τιμή πρέπει να είναι ένας αριθμός.';
$lang['Packages.!error.pricing[][period].in_use'] = 'Η περίοδος δεν μπορεί να ενημερωθεί σε μια τιμολόγηση που είναι σε χρήση.';
$lang['Packages.!error.pricing[][period].format'] = 'Μη έγκυρος τύπος περιόδου.';
$lang['Packages.!error.pricing[][term].in_use'] = 'Ο όρος δεν μπορεί να ενημερωθεί σε μια τιμολόγηση που είναι σε χρήση.';
$lang['Packages.!error.pricing[][term].valid'] = 'Ο όρος πρέπει να είναι μεγαλύτερος από 0.';
$lang['Packages.!error.pricing[][term].length'] = 'Το μήκος του όρου δεν μπορεί να υπερβαίνει τους 5 χαρακτήρες.';
$lang['Packages.!error.pricing[][term].format'] = 'Ο όρος πρέπει να είναι αριθμός.';
$lang['Packages.!error.email_content.parse'] = 'Σφάλμα ανάλυσης προτύπου: %1$s';
$lang['Packages.!error.email_content[][lang].length'] = 'Το μήκος της γλώσσας δεν μπορεί να υπερβαίνει τους 5 χαρακτήρες.';
$lang['Packages.!error.email_content[][lang].empty'] = 'Παρακαλώ εισάγετε μια γλώσσα.';
$lang['Packages.!error.prorata_cutoff.format'] = 'Η αναλογική καταληκτική ημέρα πρέπει να είναι μεταξύ 1 και 28.';
$lang['Packages.!error.prorata_day.format'] = 'Η αναλογική ημέρα πρέπει να είναι μεταξύ 1 και 28.';
$lang['Packages.!error.hidden.format'] = 'Το αν αυτή η ομάδα θα πρέπει να είναι κρυμμένη στη διασύνδεση πρέπει να οριστεί σε 1 ή 0.';
$lang['Packages.!error.status.format'] = 'Μη έγκυρη κατάσταση.';
$lang['Packages.!error.upgrades_use_renewal.valid'] = 'Οι τιμές ανανέωσης χρήσης για αναβαθμίσεις πρέπει να είναι είτε 1 είτε 0.';
$lang['Packages.!error.override_price.valid'] = 'Ορίστε την τιμολόγηση του πακέτου ως τιμή παράκαμψης πρέπει να είναι είτε 1 είτε 0.';
$lang['Packages.!error.single_term.valid'] = 'Ο μεμονωμένος όρος πρέπει να είναι είτε 1 είτε 0.';
$lang['Packages.!error.taxable.length'] = 'Το φορολογητέο μήκος δεν μπορεί να υπερβαίνει τον 1 χαρακτήρα.';
$lang['Packages.!error.taxable.format'] = 'Ο φορολογητέος πρέπει να είναι αριθμός.';
$lang['Packages.!error.module_group_client.valid'] = 'Το Allow Client to Select Group πρέπει να είναι 1 ή 0.';
$lang['Packages.!error.module_group.format'] = 'Δόθηκε άκυρη ομάδα μονάδων.';
$lang['Packages.!error.module_row.format'] = 'Δόθηκε μη έγκυρη σειρά ενότητας.';
$lang['Packages.!error.plugins[].valid'] = 'Μη έγκυρο πρόσθετο δόθηκε.';
$lang['Packages.!error.option_groups[].valid'] = 'Δόθηκε μη έγκυρη ομάδα παραμετροποιήσιμων επιλογών πακέτου.';
$lang['Packages.!error.client_qty.format'] = 'Το όριο πελάτη πρέπει να είναι ένας αριθμός.';
$lang['Packages.!error.qty.format'] = 'Η ποσότητα πρέπει να είναι αριθμός.';
$lang['Packages.!error.descriptions.empty_lang'] = 'Παρακαλείστε να προσδιορίσετε έναν κωδικό γλώσσας πακέτου για κάθε περιγραφή.';
$lang['Packages.!error.descriptions.format'] = 'Οι περιγραφές των πακέτων έχουν μη έγκυρη μορφή.';
$lang['Packages.!error.names.empty_lang'] = 'Προσδιορίστε έναν κωδικό γλώσσας πακέτου για κάθε όνομα.';
$lang['Packages.!error.names.empty_name'] = 'Παρακαλούμε καθορίστε ένα όνομα πακέτου για κάθε γλώσσα.';
$lang['Packages.!error.names.format'] = 'Τα ονόματα των πακέτων έχουν μη έγκυρη μορφή.';
$lang['Packages.!error.module_id.changed'] = 'Η ενότητα δεν μπορεί να αλλάξει επειδή υπάρχουν ήδη μία ή περισσότερες υπηρεσίες που χρησιμοποιούν αυτό το πακέτο.';
$lang['Packages.!error.module_id.exists'] = 'Δόθηκε άκυρη ενότητα.';
$lang['Packages.!error.package_id.has_children'] = 'Το πακέτο δεν μπορούσε να διαγραφεί επειδή μια υπηρεσία έχει θυγατρικές υπηρεσίες.';
$lang['Packages.!error.package_id.exists'] = 'Το πακέτο δεν μπορούσε να διαγραφεί επειδή μια υπηρεσία το χρησιμοποιεί επί του παρόντος.';
$lang['Packages.!error.company_id.exists'] = 'Μη έγκυρη εταιρεία.';
$lang['Packages.!error.manual_activation.valid'] = 'Η χειροκίνητη ενεργοποίηση πρέπει να είναι 1 ή 0.';

