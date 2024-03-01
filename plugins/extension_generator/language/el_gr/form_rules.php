<?php
/**
 * Form Rules
 *
 * @package blesta
 * @subpackage blesta.language.el_gr
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['FormRules.general.name.format'] = 'Τα ονόματα των επεκτάσεων μπορούν να περιέχουν μόνο αλφαριθμητικούς χαρακτήρες, υπογράμμιση και κενά.';
$lang['FormRules.modulebasic.module_row.empty'] = 'Παρακαλούμε εισάγετε ένα όνομα γραμμής ενότητας.';
$lang['FormRules.modulebasic.module_row_plural.empty'] = 'Προσθέστε ένα όνομα γραμμής ενότητας πληθυντικού αριθμού.';
$lang['FormRules.modulebasic.module_group.empty'] = 'Παρακαλούμε εισάγετε μια ετικέτα ομάδας μονάδων.';
$lang['FormRules.modulebasic.authors[][name].empty'] = 'Παρακαλούμε εισάγετε ένα όνομα για κάθε συγγραφέα.';
$lang['FormRules.modulefields.module_rows[][name].format'] = 'Παρακαλείστε να εισαγάγετε ένα όνομα για κάθε πεδίο γραμμής ενότητας με τη μορφή snake_case_name.';
$lang['FormRules.modulefields.module_rows[][label].empty'] = 'Εισάγετε μια ετικέτα για κάθε πεδίο γραμμής ενότητας.';
$lang['FormRules.modulefields.module_rows[][type].valid'] = 'Μία ή περισσότερες γραμμές ενότητας έχουν μη έγκυρο τύπο.';
$lang['FormRules.modulefields.module_rows[][name_key].valid'] = 'Το αν θα οριστεί ένα πεδίο γραμμής ενότητας ως κλειδί ονόματος πρέπει να οριστεί σε true ή false.';
$lang['FormRules.modulefields.service_fields[][name].format'] = 'Εισάγετε ένα όνομα για κάθε πεδίο υπηρεσίας με τη μορφή snake_case_name.';
$lang['FormRules.modulefields.service_fields[][label].empty'] = 'Εισάγετε μια ετικέτα για κάθε πεδίο υπηρεσίας.';
$lang['FormRules.modulefields.service_fields[][type].valid'] = 'Ένα ή περισσότερα πεδία υπηρεσίας έχουν μη έγκυρο τύπο.';
$lang['FormRules.modulefields.service_fields[][name_key].valid'] = 'Το αν θα οριστεί ένα πεδίο υπηρεσίας ως κλειδί ονόματος πρέπει να οριστεί σε true ή false.';
$lang['FormRules.modulefields.package_fields[][name].format'] = 'Παρακαλείστε να εισαγάγετε ένα όνομα για κάθε πεδίο συσκευασίας με τη μορφή snake_case_name.';
$lang['FormRules.modulefields.package_fields[][label].empty'] = 'Εισάγετε μια ετικέτα για κάθε πεδίο συσκευασίας.';
$lang['FormRules.modulefields.package_fields[][type].valid'] = 'Ένα ή περισσότερα πεδία πακέτων έχουν μη έγκυρο τύπο.';
$lang['FormRules.modulefields.package_fields[][name_key].valid'] = 'Το αν θα οριστεί ένα πεδίο πακέτου ως κλειδί ονόματος πρέπει να οριστεί σε true ή false.';
$lang['FormRules.modulefeatures.service_tabs[][method_name].format'] = 'Εισάγετε ένα όνομα μεθόδου για κάθε καρτέλα υπηρεσίας με τη μορφή camelCaseName.';
$lang['FormRules.modulefeatures.service_tabs[][label].empty'] = 'Εισάγετε μια ετικέτα για κάθε καρτέλα υπηρεσίας.';
$lang['FormRules.modulefeatures.service_tabs[][level].valid'] = 'Μία ή περισσότερες καρτέλες υπηρεσιών έχουν μη έγκυρο επίπεδο.';
$lang['FormRules.modulefeatures.cron_tasks[][name].format'] = 'Παρακαλούμε εισάγετε ένα όνομα μεθόδου για κάθε εργασία cron στη μορφή snake_case_name.';
$lang['FormRules.modulefeatures.cron_tasks[][label].empty'] = 'Εισάγετε μια ετικέτα για κάθε εργασία cron.';
$lang['FormRules.modulefeatures.cron_tasks[][type].valid'] = 'Μία ή περισσότερες εργασίες cron έχουν μη έγκυρο τύπο.';
$lang['FormRules.modulefeatures.cron_tasks[][time].format'] = 'Εισάγετε είτε μια ώρα σε μορφή 00:00 είτε ένα αριθμητικό διάστημα.';
$lang['FormRules.pluginbasic.authors[][name].empty'] = 'Παρακαλούμε εισάγετε ένα όνομα για κάθε συγγραφέα.';
$lang['FormRules.plugindatabase.tables[][name].format'] = 'Παρακαλείστε να εισαγάγετε ένα όνομα μεθόδου για κάθε πίνακα με τη μορφή snake_case_name.';
$lang['FormRules.plugindatabase.tables[][columns][][name].format'] = 'Παρακαλείστε να εισαγάγετε ένα όνομα μεθόδου για κάθε στήλη με τη μορφή snake_case_name.';
$lang['FormRules.plugindatabase.tables[][columns][][type].valid'] = 'Μία ή περισσότερες στήλες έχουν μη έγκυρο τύπο.';
$lang['FormRules.plugindatabase.tables[][columns][][length].empty'] = 'Το μήκος πρέπει να έχει τη μορφή "a", "b", "c" για τις στήλες enum, κενό για τις στήλες text και datetime και αριθμητικό για όλες τις άλλες.';
$lang['FormRules.plugindatabase.tables[][columns][][nullable].valid'] = 'Το Nullable πρέπει να οριστεί σε true ή false για κάθε στήλη.';
$lang['FormRules.plugindatabase.tables[][columns][][primary].valid'] = 'Το Primary πρέπει να οριστεί σε true ή false για κάθε στήλη.';
$lang['FormRules.pluginintegrations.actions[][location].valid'] = 'Παρακαλούμε εισάγετε μια έγκυρη τοποθεσία δράσης.';
$lang['FormRules.pluginintegrations.actions[][controller].format'] = 'Παρακαλούμε εισάγετε έναν ελεγκτή για κάθε ενέργεια με τη μορφή snake_case_name.';
$lang['FormRules.pluginintegrations.actions[][action].format'] = 'Παρακαλείστε να καταχωρίσετε μια ενέργεια για κάθε ενέργεια με πεζά γράμματα.';
$lang['FormRules.pluginintegrations.actions[][name].empty'] = 'Παρακαλούμε εισάγετε ένα όνομα για κάθε ενέργεια.';
$lang['FormRules.pluginintegrations.events[][event].empty'] = 'Παρακαλούμε εισάγετε ένα όνομα εκδήλωσης για κάθε εκδήλωση.';
$lang['FormRules.pluginintegrations.events[][callback].format'] = 'Παρακαλούμε εισάγετε μια μέθοδο επανάκλησης για κάθε συμβάν με τη μορφή camelCaseName.';
$lang['FormRules.pluginintegrations.cards[][level].valid'] = 'Μία ή περισσότερες κάρτες έχουν άκυρο επίπεδο.';
$lang['FormRules.pluginintegrations.cards[][callback].format'] = 'Παρακαλούμε εισάγετε μια μέθοδο επανάκλησης για κάθε κάρτα με τη μορφή camelCaseName.';
$lang['FormRules.pluginintegrations.cards[][label].empty'] = 'Παρακαλούμε εισάγετε μια ετικέτα για κάθε κάρτα.';
$lang['FormRules.merchantbasic.authors[][name].empty'] = 'Παρακαλούμε εισάγετε ένα όνομα για κάθε συγγραφέα.';
$lang['FormRules.merchantbasic.currencies.format'] = 'Παρακαλούμε εισάγετε τα νομίσματα σε μορφή τριών χαρακτήρων που χωρίζονται με κόμμα (π.χ. USD,EUR,JPY).';
$lang['FormRules.merchantfields.fields[][name].format'] = 'Παρακαλείστε να εισαγάγετε ένα όνομα για κάθε πεδίο με τη μορφή snake_case_name.';
$lang['FormRules.merchantfields.fields[][label].empty'] = 'Παρακαλείστε να εισάγετε μια ετικέτα για κάθε πεδίο.';
$lang['FormRules.merchantfields.fields[][type].valid'] = 'Ένα ή περισσότερα πεδία έχουν μη έγκυρο τύπο.';
$lang['FormRules.nonmerchantbasic.authors[][name].empty'] = 'Παρακαλούμε εισάγετε ένα όνομα για κάθε συγγραφέα.';
$lang['FormRules.nonmerchantbasic.currencies.format'] = 'Παρακαλούμε εισάγετε τα νομίσματα σε μορφή τριών χαρακτήρων που χωρίζονται με κόμμα (π.χ. USD,EUR,JPY).';
$lang['FormRules.nonmerchantfields.fields[][name].format'] = 'Παρακαλείστε να εισαγάγετε ένα όνομα για κάθε πεδίο με τη μορφή snake_case_name.';
$lang['FormRules.nonmerchantfields.fields[][label].empty'] = 'Παρακαλείστε να εισάγετε μια ετικέτα για κάθε πεδίο.';
$lang['FormRules.nonmerchantfields.fields[][type].valid'] = 'Ένα ή περισσότερα πεδία έχουν μη έγκυρο τύπο.';

