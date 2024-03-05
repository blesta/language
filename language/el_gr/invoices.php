<?php
/**
 * Invoices
 *
 * @package blesta
 * @subpackage blesta.language.el_gr
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Invoices.!error.lines[][tax].format'] = 'Ο φόρος του στοιχείου γραμμής πρέπει να είναι "true" ή "false".';
$lang['Invoices.!error.lines[][amount].format'] = 'Το μοναδιαίο κόστος πρέπει να είναι ένας αριθμός.';
$lang['Invoices.!error.lines[][qty].minimum'] = 'Παρακαλούμε εισάγετε ποσότητα 1 ή μεγαλύτερη.';
$lang['Invoices.!error.lines[][qty].format'] = 'Η ποσότητα πρέπει να είναι αριθμός.';
$lang['Invoices.!error.lines[][description].empty'] = 'Παρακαλείστε να εισαγάγετε μια περιγραφή του στοιχείου.';
$lang['Invoices.!error.lines[][service_id].exists'] = 'Μη έγκυρο αναγνωριστικό υπηρεσίας.';
$lang['Invoices.!error.lines[][id].exists'] = 'Μη έγκυρο αναγνωριστικό στοιχείου γραμμής.';
$lang['Invoices.!error.domain_renew.failed'] = 'Οι τομείς μπορούν να ανανεωθούν μόνο για 10 έτη.';
$lang['Invoices.!error.invoice_id.draft'] = 'Το συγκεκριμένο τιμολόγιο δεν είναι προσχέδιο τιμολογίου και συνεπώς δεν μπορεί να διαγραφεί.';
$lang['Invoices.!error.date_last_renewed.format'] = 'Η τελευταία ημερομηνία ανανέωσης επαναλαμβανόμενου τιμολογίου πρέπει να έχει έγκυρη μορφή ημερομηνίας.';
$lang['Invoices.!error.date_renews.format'] = 'Η ημερομηνία ανανέωσης του επαναλαμβανόμενου τιμολογίου πρέπει να είναι έγκυρη μορφή ημερομηνίας.';
$lang['Invoices.!error.duration.format'] = 'Η διάρκεια είναι άκυρη.';
$lang['Invoices.!error.period.format'] = 'Η περίοδος είναι άκυρη.';
$lang['Invoices.!error.term.bounds'] = 'Ο όρος πρέπει να είναι μεταξύ 1 και 65535.';
$lang['Invoices.!error.term.format'] = 'Ο όρος πρέπει να είναι ένας αριθμός.';
$lang['Invoices.!error.delivery.exists'] = 'Η μέθοδος παράδοσης που αναφέρεται δεν υπάρχει.';
$lang['Invoices.!error.currency.length'] = 'Ο κωδικός νομίσματος πρέπει να έχει μήκος 3 χαρακτήρες.';
$lang['Invoices.!error.status.format'] = 'Μη έγκυρη κατάσταση.';
$lang['Invoices.!error.autodebit.valid'] = 'Παρακαλούμε επιλέξτε αν θα επιτρέψετε ή όχι την αυτόματη χρέωση για αυτό το τιμολόγιο.';
$lang['Invoices.!error.date_autodebit.format'] = 'Η ημερομηνία λήξης έχει μη έγκυρη μορφή ημερομηνίας.';
$lang['Invoices.!error.date_closed.format'] = 'Η ημερομηνία κλεισίματος έχει μη έγκυρη μορφή ημερομηνίας.';
$lang['Invoices.!error.date_due.after_billed'] = 'Η ημερομηνία λήξης πρέπει να είναι κατά ή μετά την ημερομηνία χρέωσης.';
$lang['Invoices.!error.date_due.format'] = 'Η ημερομηνία λήξης έχει μη έγκυρη μορφή ημερομηνίας.';
$lang['Invoices.!error.date_billed.format'] = 'Η ημερομηνία χρέωσης έχει μη έγκυρη μορφή ημερομηνίας.';
$lang['Invoices.!error.client_id.exists'] = 'Μη έγκυρο αναγνωριστικό πελάτη.';
$lang['Invoices.!error.id.amount_applied'] = 'Οι γραμμές του τιμολογίου, το νόμισμα και η κατάσταση ενδέχεται να μην ενημερωθούν, επειδή ένα ποσό έχει ήδη εφαρμοστεί σε αυτό το τιμολόγιο.';
$lang['Invoices.!error.id_value.valid'] = 'Αδυναμία προσδιορισμού της τιμής του αναγνωριστικού τιμολογίου.';
$lang['Invoices.!error.id_format.length'] = 'Η μορφή ID για τα τιμολόγια δεν μπορεί να υπερβαίνει τους 64 χαρακτήρες.';
$lang['Invoices.!error.id_format.empty'] = 'Δεν έχει οριστεί μορφή ID για τα τιμολόγια.';
$lang['Invoices.!error.invoice_add.failed'] = 'Αυτό το τιμολόγιο δεν μπόρεσε να δημιουργηθεί. Προσπαθήστε ξανά.';
$lang['Invoices.!error.delivery.length'] = 'Το μήκος της μεθόδου παράδοσης τιμολογίου δεν μπορεί να υπερβαίνει τους 32 χαρακτήρες.';
$lang['Invoices.!error.delivery.empty'] = 'Παρακαλούμε εισάγετε μια μέθοδο παράδοσης τιμολογίου.';
$lang['Invoices.!error.method.exists'] = 'Πρέπει να ορίσετε τουλάχιστον μία μέθοδο παράδοσης.';
$lang['Invoices.!error.invoice_recur_id.exists'] = 'Μη έγκυρο αναγνωριστικό επαναλαμβανόμενου τιμολογίου.';
$lang['Invoices.!error.invoice_id.exists'] = 'Μη έγκυρο αναγνωριστικό τιμολογίου.';
$lang['Invoices.cache_methods.json_pdf'] = 'JSON + PDF';
$lang['Invoices.cache_methods.json'] = 'JSON';
$lang['Invoices.cache_methods.none'] = 'Κανένα';
$lang['Invoices.types.proforma'] = 'Pro forma';
$lang['Invoices.types.standard'] = 'Πρότυπο';
$lang['Invoices.status.void'] = 'Void';
$lang['Invoices.status.draft'] = 'Σχέδιο';
$lang['Invoices.status.proforma'] = 'Pro forma';
$lang['Invoices.status.active'] = 'Ενεργό';
$lang['Invoices.!line_item.recurring_renew_description'] = '%1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.coupon_line_item_description_percent'] = 'Κουπόνι %1$s - %2$s%%';
$lang['Invoices.!line_item.coupon_line_item_description_amount'] = 'Κουπόνι %1$s';
$lang['Invoices.!line_item.prorated_credit'] = 'Αναλογική πίστωση';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_onetime'] = '↳ Αναλογική προσθήκη %1$s %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_date'] = '↳ Αναλογική προσθήκη %1$s %2$sx %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_qty'] = '↳ Αναλογική προσθήκη %1$s %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_onetime'] = '↳ Αναλογική προσθήκη %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_date'] = '↳ Αναλογική προσθήκη %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_text'] = '↳ Αναλογική προσθήκη %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_onetime'] = '↳ Αναλογική προσθήκη %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_addition_date'] = '↳ Αναλογική προσθήκη %1$s %2$s (%3$s - %4$s)';
$lang['Invoices.!line_item.service_option_prorated_addition'] = '↳ Αναλογική προσθήκη %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_onetime'] = '↳ Αναλογική αναβάθμιση του %1$s από %2$sx %3$s σε %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_date'] = '↳ Αναλογική αναβάθμιση του %1$s από %2$sx %3$s σε %4$sx %5$s (%6$s - %7$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty'] = '↳ Αναλογική αναβάθμιση του %1$s από %2$sx %3$s σε %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_onetime'] = '↳ Αναλογική αναβάθμιση του %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_date'] = '↳ Αναλογική αναβάθμιση %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text'] = '↳ Αναλογική αναβάθμιση του %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_onetime'] = '↳ Αναλογική αναβάθμιση του %1$s από %2$s σε %3$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_date'] = '↳ Αναλογική αναβάθμιση του %1$s από %2$s σε %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade'] = '↳ Αναλογική αναβάθμιση του %1$s από %2$s σε %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description_onetime'] = 'Αναλογική αναβάθμιση από %1$s σε %2$s - %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description'] = 'Αναλογική αναβάθμιση από %1$s σε %2$s - %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_setup_fee_description'] = '↳ %1$s - %2$s Χρέωση εγκατάστασης';
$lang['Invoices.!line_item.service_option_renew_description'] = '↳ %1$s - %2$s';
$lang['Invoices.!line_item.service_setup_fee_description'] = '%1$s - %2$s Χρέωση εγκατάστασης';
$lang['Invoices.!line_item.service_cancel_fee_description'] = '%1$s - %2$s Τέλος Ακύρωσης';
$lang['Invoices.!line_item.service_renew_description'] = '%5$s%1$s - %2$s (%3$s - %4$s)';
$lang['Invoices.!note_private.line_item'] = '- %1$s @ %2$s: %3$s';
$lang['Invoices.!note_private.removed_lines'] = 'Αφαίρεση στοιχείων γραμμής:';
$lang['Invoices.!note_private.service_cancel_date'] = 'Η υπηρεσία #%1$s ακυρώθηκε %2$s.';
$lang['Invoices.getDeliveryMethods.postalmethods'] = 'PostalMethods';
$lang['Invoices.getDeliveryMethods.interfax'] = 'InterFax';
$lang['Invoices.getDeliveryMethods.paper'] = 'Χαρτί';
$lang['Invoices.getDeliveryMethods.email'] = 'Ηλεκτρονικό ταχυδρομείο';
$lang['Invoices.getPricingPeriods.year'] = 'Έτος';
$lang['Invoices.getPricingPeriods.month'] = 'Μήνας';
$lang['Invoices.getPricingPeriods.week'] = 'Εβδομάδα';
$lang['Invoices.getPricingPeriods.day'] = 'Ημέρα';
$lang['Invoices.!error.line_items.empty_split'] = 'Δεν έχει επιλεγεί καμία γραμμή τιμολογίου για διαχωρισμό.';
$lang['Invoices.!error.line_items.minimum_split'] = 'Το τιμολόγιο πρέπει να έχει τουλάχιστον 2 γραμμές για να διαχωριστεί.';

