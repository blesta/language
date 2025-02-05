<?php
/**
 * Authorize Net
 *
 * @package blesta
 * @subpackage blesta.language.el_gr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Authorize_net.!error.card_number.missing'] = 'Η ημερομηνία λήξης δεν μπορεί να ενημερωθεί χωρίς τον πλήρη αριθμό της κάρτας.';
$lang['Authorize_net.!error.dev_mode.valid'] = 'Η λειτουργία προγραμματιστή πρέπει να οριστεί σε "true", αν δίνεται.';
$lang['Authorize_net.!error.test_mode.valid'] = 'Η λειτουργία δοκιμής πρέπει να οριστεί σε "true", εάν δίνεται.';
$lang['Authorize_net.!error.transaction_key.format'] = 'Το κλειδί συναλλαγής πρέπει να έχει μήκος 16 χαρακτήρων.';
$lang['Authorize_net.!error.login_id.format'] = 'Το αναγνωριστικό σύνδεσης δεν πρέπει να υπερβαίνει τους 20 χαρακτήρες και δεν μπορεί να είναι κενό.';
$lang['Authorize_net.validation_modes_live'] = 'Ζωντανό';
$lang['Authorize_net.validation_modes_test'] = 'Δοκιμή';
$lang['Authorize_net.validation_modes_none'] = 'Κανένα';
$lang['Authorize_net.validation_note'] = 'Αυτό ελέγχει τον τύπο επικύρωσης που εκτελείται όταν ένας λογαριασμός πληρωμής αποθηκεύεται με τη χρήση CIM. Η επιλογή \'None\' δεν εκτελεί καμία πρόσθετη επικύρωση. Το \'Test\' εκδίδει μια δοκιμαστική συναλλαγή που δεν εμφανίζεται στον λογαριασμό του πελάτη, αλλά δημιουργεί ένα μήνυμα ηλεκτρονικού ταχυδρομείου στον έμπορο. \'Live\' επεξεργάζεται μια συναλλαγή $0,00 ή $0,01 που ακυρώνεται αμέσως. Συμβουλευτείτε τον πάροχο του εμπορικού σας λογαριασμού προτού ορίσετε αυτή την τιμή σε \'Live\', καθώς ενδέχεται να υποβληθείτε σε χρεώσεις.';
$lang['Authorize_net.validation_mode'] = 'Λειτουργία επικύρωσης λογαριασμού πληρωμής';
$lang['Authorize_net.apis_cim'] = 'CIM (πρέπει να ενεργοποιηθεί από την Authorize.Net)';
$lang['Authorize_net.apis_aim'] = 'AIM (προεπιλογή)';
$lang['Authorize_net.dev_mode_note'] = 'Η ενεργοποίηση αυτής της επιλογής θα δημοσιεύσει τις συναλλαγές στο περιβάλλον προγραμματιστών του Authorize.net. Για να χρησιμοποιήσετε αυτό το περιβάλλον πρέπει να έχετε έναν δοκιμαστικό λογαριασμό προγραμματιστή.';
$lang['Authorize_net.dev_mode'] = 'Λειτουργία προγραμματιστή';
$lang['Authorize_net.test_mode_note'] = 'Η λειτουργία δοκιμαστικής λειτουργίας υποστηρίζεται μόνο από την AIM. Για να δοκιμάσετε τις συναλλαγές CIM πρέπει να ενεργοποιήσετε τη λειτουργία δοκιμής μέσα από το λογαριασμό σας στο Authorize.net.';
$lang['Authorize_net.test_mode'] = 'Λειτουργία δοκιμής';
$lang['Authorize_net.api'] = 'API πληρωμών';
$lang['Authorize_net.transaction_key'] = 'Κλειδί συναλλαγής';
$lang['Authorize_net.login_id'] = 'Αναγνωριστικό σύνδεσης';
$lang['Authorize_net.description'] = 'Αξιόπιστη και γρήγορη επεξεργασία πιστωτικών καρτών και ACH';
$lang['Authorize_net.name'] = 'Authorize.Net';

