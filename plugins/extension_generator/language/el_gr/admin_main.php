<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.el_gr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.!error.name_taken'] = 'Αυτό το όνομα συγκρούεται με έναν υπάρχοντα κατάλογο επέκτασης.';
$lang['AdminMain.!error.generation_failed'] = 'Δεν είναι δυνατή η δημιουργία της επέκτασής σας.  Εξαίρεση που δημιουργήθηκε: %1$s';
$lang['AdminMain.!notice.type_warning'] = 'Η αλλαγή του τύπου επέκτασης θα διαγράψει ανεπανόρθωτα όλες τις ρυθμίσεις που έχουν αποθηκευτεί για την επέκταση αυτή.';
$lang['AdminMain.!notice.file_overwrite'] = 'Τα αρχεία αυτής της επέκτασης υπάρχουν ήδη στα αρχεία Blesta και θα αντικατασταθούν αν χρησιμοποιήσετε τον κατάλογο Blesta.';
$lang['AdminMain.!notice.updating_installed_extension'] = 'Αυτή η επέκταση είναι εγκατεστημένη. Συνιστάται ιδιαίτερα να την απεγκαταστήσετε πριν από την αναγέννηση των αρχείων, διαφορετικά μπορεί να προκληθεί ζημιά στη συνοχή της βάσης δεδομένων σας.';
$lang['AdminMain.!success.package_deleted'] = 'Η επέκταση έχει διαγραφεί επιτυχώς';
$lang['AdminMain.!success.module_created'] = 'Η νέα ενότητα δημιουργήθηκε με επιτυχία και μπορεί να βρεθεί στη διεύθυνση %1$s';
$lang['AdminMain.!success.plugin_created'] = 'Το νέο πρόσθετο δημιουργήθηκε με επιτυχία και μπορείτε να το βρείτε στη διεύθυνση %1$s';
$lang['AdminMain.!success.merchant_created'] = 'Η νέα πύλη δημιουργήθηκε με επιτυχία και μπορείτε να τη βρείτε στη διεύθυνση %1$s';
$lang['AdminMain.!success.nonmerchant_created'] = 'Η νέα πύλη δημιουργήθηκε με επιτυχία και μπορείτε να τη βρείτε στη διεύθυνση %1$s';
$lang['AdminMain.getfilelocations.module'] = 'Κατάλογος ενοτήτων Blesta';
$lang['AdminMain.getfilelocations.plugin'] = 'Κατάλογος Blesta Plugins';
$lang['AdminMain.getfilelocations.merchant'] = 'Κατάλογος εμπορικών πυλών Blesta';
$lang['AdminMain.getfilelocations.nonmerchant'] = 'Κατάλογος Blesta Non-Merchant Gateway Directory';
$lang['AdminMain.getfilelocations.upload'] = 'Blesta Uploads Κατάλογος';
$lang['AdminMain.getfilelocations.custom'] = 'Προσαρμοσμένο';
$lang['AdminMain.index.page_title'] = 'Γεννήτρια επέκτασης';
$lang['AdminMain.index.boxtitle_extension_generator'] = 'Γεννήτρια επέκτασης';
$lang['AdminMain.index.boxtitle_extensions'] = 'Γεννήτρια επέκτασης - Επεκτάσεις';
$lang['AdminMain.index.extension_add'] = 'Προσθήκη επέκτασης';
$lang['AdminMain.index.heading_id'] = 'ID';
$lang['AdminMain.index.heading_name'] = 'Όνομα';
$lang['AdminMain.index.heading_type'] = 'Τύπος';
$lang['AdminMain.index.heading_form_type'] = 'Τύπος φόρμας';
$lang['AdminMain.index.heading_code_examples'] = 'Παραδείγματα κώδικα';
$lang['AdminMain.index.heading_date_updated'] = 'Ημερομηνία ενημέρωσης';
$lang['AdminMain.index.heading_options'] = 'Επιλογές';
$lang['AdminMain.index.option_edit'] = 'Επεξεργασία';
$lang['AdminMain.index.option_delete'] = 'Διαγραφή';
$lang['AdminMain.index.text_confirm_delete'] = 'Είστε σίγουροι ότι θέλετε να διαγράψετε αυτή την επέκταση;';
$lang['AdminMain.index.extensions_no_results'] = 'Δεν υπάρχουν παρατάσεις αυτή τη στιγμή.';
$lang['AdminMain.general.heading_general_settings'] = 'Γενικές ρυθμίσεις';
$lang['AdminMain.general.name'] = 'Όνομα';
$lang['AdminMain.general.type'] = 'Τύπος επέκτασης';
$lang['AdminMain.general.form_type'] = 'Τύπος φόρμας';
$lang['AdminMain.general.code_examples'] = 'Συμπεριλάβετε παράδειγμα κώδικα';
$lang['AdminMain.general.basic_info'] = 'Επόμενο - Βασικές πληροφορίες';
$lang['AdminMain.general.tooltip_name'] = 'Το όνομα εμφάνισης της επέκτασης. Χρησιμοποιείται επίσης για τη δημιουργία διαφόρων κωδικών. Για παράδειγμα, αν το όνομα είναι My Module, τότε ο κατάλογος module θα είναι my_module και το όνομα της κλάσης θα είναι MyModule.  Για τα πρόσθετα μην περιλαμβάνετε τη λέξη "plugin" στο όνομα, καθώς προκαλεί κάποια προβλήματα με τη δημιουργία κώδικα.';
$lang['AdminMain.general.tooltip_type'] = 'Οι ενότητες χειρίζονται πολλά χαρακτηριστικά υπηρεσιών, συμπεριλαμβανομένης της παροχής υπηρεσιών σε απομακρυσμένους διακομιστές. Τα plugins είναι ισχυρή ενσωμάτωση ικανή να κάνει σχεδόν τα πάντα στο Blesta. Οι εμπορικές πύλες επεξεργάζονται τις πληρωμές, διατηρώντας τους πελάτες στο περιβάλλον εργασίας του Blesta.  Οι μη εμπορικές πύλες στέλνουν τους πελάτες σε έναν ιστότοπο επεξεργαστή πληρωμών για να ολοκληρώσουν την πληρωμή.';
$lang['AdminMain.general.tooltip_form_type'] = 'Basic για τη χρήση μιας εξαιρετικά περικομμένης έκδοσης της φόρμας επέκτασης, η οποία περιλαμβάνει μόνο τα ελάχιστα απαραίτητα στοιχεία για τη δημιουργία της επέκτασης.';
$lang['AdminMain.general.tooltip_code_examples'] = 'Ελέγξτε για να συμπεριλάβετε σχολιασμένες γραμμές κώδικα δείγματος για λειτουργίες όπως οι εργασίες Cron, οι λίστες συμβάντων και οι συνδέσεις, κ.λπ.';
$lang['AdminMain.general.placeholder_name'] = 'Όνομα επέκτασης';
$lang['AdminMain.confirm.heading_confirm'] = 'Επιβεβαίωση';
$lang['AdminMain.confirm.text_generation'] = 'Οι ρυθμίσεις επέκτασης έχουν ολοκληρωθεί.  Μπορείτε να επανεξετάσετε οποιοδήποτε τμήμα κάνοντας κλικ στους κόμβους στη γραμμή προόδου.  Κάντε κλικ στο "Generate Extension" (Δημιουργία επέκτασης) για να ολοκληρώσετε και να δημιουργήσετε αυτόματα τα αρχεία για την επέκτασή σας.';
$lang['AdminMain.confirm.location'] = 'Επέκταση Τοποθεσία';
$lang['AdminMain.confirm.tooltip_location'] = 'Ο κατάλογος στον οποίο θα μεταφορτώνονται τα παραγόμενα αρχεία επέκτασης.';
$lang['AdminMain.confirm.custom_path'] = 'Προσαρμοσμένη διαδρομή';
$lang['AdminMain.confirm.generate'] = 'Δημιουργία επέκτασης';

