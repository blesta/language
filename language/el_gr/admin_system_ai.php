<?php
/**
 * Admin System Ai
 *
 * @package blesta
 * @subpackage blesta.language.el_gr
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemAi.!success.settings_updated'] = 'Οι ρυθμίσεις AI ενημερώθηκαν επιτυχώς!';
$lang['AdminSystemAi.!success.api_key_fetched'] = 'Το κλειδί API ανακτήθηκε επιτυχώς από το λογαριασμό σας Blesta.';
$lang['AdminSystemAi.!error.connection_failed'] = 'Δεν μπόρεσε να συνδεθεί με το AI API: %1$s';
$lang['AdminSystemAi.!error.invalid_request'] = 'Μη έγκυρο αίτημα.';
$lang['AdminSystemAi.!error.username_required'] = 'Παρακαλώ εισάγετε το όνομα χρήστη account.blesta.com.';
$lang['AdminSystemAi.!error.no_license_key'] = 'Δεν βρέθηκε κλειδί άδειας χρήσης Blesta. Παρακαλούμε ρυθμίστε πρώτα την άδειά σας.';
$lang['AdminSystemAi.!error.auth_failed'] = 'Ο έλεγχος ταυτότητας απέτυχε. Ελέγξτε το όνομα χρήστη και το κλειδί άδειας χρήσης.';
$lang['AdminSystemAi.!error.request_failed'] = 'Το αίτημα απέτυχε. Προσπαθήστε ξανά.';
$lang['AdminSystemAi.!error.api_key_required'] = 'Παρακαλώ εισάγετε ένα κλειδί API.';
$lang['AdminSystemAi.!error.invalid_api_key'] = 'Μη έγκυρο κλειδί API.';
$lang['AdminSystemAi.index.page_title'] = 'Ρυθμίσεις &gt; Σύστημα &gt; AI';
$lang['AdminSystemAi.index.boxtitle_ai'] = 'Ρυθμίσεις AI';
$lang['AdminSystemAi.index.field.ai_enabled'] = 'Ενεργοποίηση χαρακτηριστικών AI';
$lang['AdminSystemAi.index.field.ai_api_key'] = 'Κλειδί API';
$lang['AdminSystemAi.index.field.ai_default_model'] = 'Προεπιλεγμένο μοντέλο';
$lang['AdminSystemAi.index.field.ai_temperature'] = 'Θερμοκρασία';
$lang['AdminSystemAi.index.field.ai_max_tokens'] = 'Μέγιστα κουπόνια';
$lang['AdminSystemAi.index.field.submit'] = 'Ενημέρωση ρυθμίσεων';
$lang['AdminSystemAi.index.tooltip.ai_enabled'] = 'Ενεργοποίηση ή απενεργοποίηση των λειτουργιών AI σε όλο το σύστημα.';
$lang['AdminSystemAi.index.tooltip.ai_api_key'] = 'Το κλειδί API της Blesta AI. Αποκτήστε το από το account.blesta.com.';
$lang['AdminSystemAi.index.tooltip.ai_default_model'] = 'Το προεπιλεγμένο μοντέλο ΤΝ που χρησιμοποιείται για τις συμπληρώσεις συνομιλίας.';
$lang['AdminSystemAi.index.tooltip.ai_temperature'] = 'Ελέγχει την τυχαιότητα. Οι χαμηλότερες τιμές είναι πιο ντετερμινιστικές, οι υψηλότερες τιμές είναι πιο δημιουργικές. Εύρος: 0.0 έως 2.0';
$lang['AdminSystemAi.index.tooltip.ai_max_tokens'] = 'Μέγιστος αριθμός tokens για τη δημιουργία απαντήσεων.';
$lang['AdminSystemAi.index.text_connected'] = 'Επιτυχής σύνδεση με την Blesta AI.';
$lang['AdminSystemAi.index.text_connection_error'] = 'Απέτυχε η σύνδεση με το Blesta AI. Ελέγξτε το κλειδί API.';
$lang['AdminSystemAi.index.text_balance'] = 'Υπόλοιπο: %1$s %2$s';
$lang['AdminSystemAi.index.text_temperature_range'] = '(0.0 - 2.0)';
$lang['AdminSystemAi.index.text_fetch_key'] = 'Φέρτε από το λογαριασμό μου Blesta';
$lang['AdminSystemAi.index.text_manual_entry'] = 'Εισάγετε το κλειδί API χειροκίνητα ή λάβετε το αυτόματα από το λογαριασμό σας.';
$lang['AdminSystemAi.index.text_validating'] = 'Επικύρωση...';
$lang['AdminSystemAi.index.text_key_valid'] = 'Επικύρωση και αποθήκευση του κλειδιού API';
$lang['AdminSystemAi.index.text_select_model'] = 'Επιλέξτε ένα μοντέλο';
$lang['AdminSystemAi.index.text_api_status'] = 'Κατάσταση API';
$lang['AdminSystemAi.index.text_status_active'] = 'Ενεργό';
$lang['AdminSystemAi.index.text_remaining_credits'] = 'Υπολειπόμενες μονάδες';
$lang['AdminSystemAi.index.text_credits_used'] = 'Χρησιμοποιημένες μονάδες (αυτό το μήνα)';
$lang['AdminSystemAi.index.text_last_api_call'] = 'Τελευταία κλήση API';
$lang['AdminSystemAi.index.text_no_calls_yet'] = 'Δεν υπάρχουν κλήσεις ακόμα';
$lang['AdminSystemAi.modal.heading_fetch'] = 'Φέρτε από το λογαριασμό μου Blesta';
$lang['AdminSystemAi.modal.text_subtitle'] = 'Το όνομα χρήστη σας απαιτείται για να ανακτήσετε το κλειδί σας API';
$lang['AdminSystemAi.modal.text_info'] = 'Το όνομα χρήστη account.blesta.com και το κλειδί της άδειας χρήσης Blesta θα χρησιμοποιηθούν για την επικύρωση της άδειάς σας και την αυτόματη λήψη ενός νέου κλειδιού API Blesta AI. Εάν έχει ήδη δημιουργηθεί ένα κλειδί, θα ανακληθεί και θα εκδοθεί ένα νέο κλειδί.';
$lang['AdminSystemAi.modal.field.username'] = 'Όνομα χρήστη';
$lang['AdminSystemAi.modal.field.username_placeholder'] = 'Εισάγετε το όνομα χρήστη του λογαριασμού σας';
$lang['AdminSystemAi.modal.button.authenticate'] = 'Πιστοποίηση γνησιότητας';
$lang['AdminSystemAi.modal.button.cancel'] = 'Ακύρωση';
$lang['AdminSystemAi.modal.text_authenticating'] = 'Αυθεντικοποίηση...';
$lang['AdminSystemAi.index.heading_api'] = 'Διαμόρφωση API';
$lang['AdminSystemAi.index.heading_model'] = 'Προεπιλεγμένο μοντέλο';
$lang['AdminSystemAi.index.heading_parameters'] = 'Παράμετροι μοντέλου';
$lang['AdminSystemAi.index.heading_prompts'] = 'Ενδείξεις συστήματος';
$lang['AdminSystemAi.index.heading_features'] = 'Ενεργοποιημένα χαρακτηριστικά';
$lang['AdminSystemAi.index.field.ai_global_prompt'] = 'Παγκόσμια προτροπή συστήματος (προεπιλογή)';
$lang['AdminSystemAi.index.tooltip.ai_global_prompt'] = 'Οι προεπιλεγμένες οδηγίες που αποστέλλονται στο μοντέλο ΤΝ με κάθε αίτημα. Αυτό καθορίζει τη συμπεριφορά και το πλαίσιο της ΤΝ σε όλες τις λειτουργίες.';
$lang['AdminSystemAi.index.text_global_prompt_help'] = 'Αυτή η προτροπή ισχύει για όλα τα χαρακτηριστικά AI, εκτός αν παρακαμφθεί εντός του χαρακτηριστικού.';
$lang['AdminSystemAi.index.field.ai_feature_package_descriptions'] = 'Περιγραφές πακέτων';
$lang['AdminSystemAi.index.text_feature_package_descriptions'] = 'Δημιουργήστε συναρπαστικές περιγραφές προϊόντων και υπηρεσιών';
$lang['AdminSystemAi.index.field.ai_feature_email_templates'] = 'Πρότυπα email';
$lang['AdminSystemAi.index.text_feature_email_templates'] = 'Επεξεργασία και βελτιώσεις προτύπων email με τη βοήθεια τεχνητής νοημοσύνης';
$lang['AdminSystemAi.index.field.ai_feature_chatbot'] = 'Chatbot';
$lang['AdminSystemAi.index.text_feature_chatbot'] = 'Chatbot με τεχνητή νοημοσύνη για τη βοήθεια του προσωπικού';
$lang['AdminSystemAi.index.field.ai_chatbot_staff_groups'] = 'Πρόσβαση ομάδας προσωπικού';
$lang['AdminSystemAi.index.tooltip.ai_chatbot_staff_groups'] = 'Επιλέξτε ποιες ομάδες προσωπικού μπορούν να έχουν πρόσβαση στο AI chatbot. Μπορούν να επιλεγούν πολλές ομάδες.';
$lang['AdminSystemAi.index.text_staff_groups_help'] = 'Κρατήστε πατημένο το Ctrl (Cmd σε Mac) για να επιλέξετε πολλαπλές ομάδες.';
$lang['AdminSystemAi.index.text_features_intro'] = 'Επιλέξτε ποιες βασικές λειτουργίες του Blesta θα πρέπει να έχουν ενεργοποιημένη τη βοήθεια AI. Τα πρόσθετα μπορούν να έχουν πρόσβαση σε λειτουργίες AI και ρυθμίζονται ανεξάρτητα.';
$lang['AdminSystemAi.index.heading_beta'] = 'Ανακοίνωση για το χαρακτηριστικό Beta';
$lang['AdminSystemAi.index.text_beta_notice'] = 'Αυτή η λειτουργία βρίσκεται επί του παρόντος σε δοκιμαστική φάση και ενδέχεται να παράγει απροσδόκητα ή ανακριβή αποτελέσματα. Χρησιμοποιήστε το με διακριτική ευχέρεια.';
$lang['AdminSystemAi.index.heading_privacy'] = 'Δήλωση απορρήτου';
$lang['AdminSystemAi.index.text_privacy_notice'] = 'Τα αιτήματα αποστέλλονται σε τρίτους παρόχους τεχνητής νοημοσύνης (π.χ. OpenAI, Anthropic) για επεξεργασία. Η υπηρεσία Blesta AI δεν αποθηκεύει δεδομένα συνομιλιών AI- ωστόσο, δεν ελέγχουμε τον τρόπο με τον οποίο αυτοί οι πάροχοι χειρίζονται ή διατηρούν δεδομένα. Αποφύγετε την υποβολή ευαίσθητων ή εμπιστευτικών πληροφοριών.';
$lang['AdminSystemAi.index.heading_privacy_acknowledgment'] = 'Αναγνώριση απορρήτου';
$lang['AdminSystemAi.index.field.ai_privacy_acknowledged'] = 'Έχω διαβάσει και κατανοήσει την παραπάνω δήλωση απορρήτου.';
$lang['AdminSystemAi.index.text_privacy_last_acknowledged'] = 'Τελευταία αναγνώριση στο %1$s.';
$lang['AdminSystemAi.!error.privacy_not_acknowledged'] = 'Πρέπει να συμφωνήσετε με τη δήλωση απορρήτου πριν αποθηκεύσετε.';
$lang['AdminSystemAi.index.heading_email_context'] = 'Ρυθμίσεις πλαισίου προτύπου email';
$lang['AdminSystemAi.index.field.ai_email_context_depth'] = 'Βάθος σχέσης';
$lang['AdminSystemAi.index.tooltip.ai_email_context_depth'] = 'Μέγιστο βάθος για τη διάσχιση των σχέσεων του μοντέλου. Οι υψηλότερες τιμές περιλαμβάνουν περισσότερα συναφή δεδομένα αλλά αυξάνουν τη χρήση συμβόλων. Εύρος: 1-5.';
$lang['AdminSystemAi.index.text_email_context_depth'] = 'Ελέγχει πόσο βαθιά θα παρακολουθούνται οι σχέσεις (π.χ. τιμολόγιο → πελάτης → επαφές). Προεπιλογή: 2';
$lang['AdminSystemAi.index.field.ai_email_context_schemas'] = 'Συμπεριλάβετε ορισμούς σχήματος';
$lang['AdminSystemAi.index.text_email_context_schemas'] = 'Συμπεριλάβετε πληροφορίες για τον τύπο πεδίου και τα σχήματα της βάσης δεδομένων στο πλαίσιο.';
$lang['AdminSystemAi.index.field.ai_email_context_examples'] = 'Συμπεριλάβετε δεδομένα παραδείγματος';
$lang['AdminSystemAi.index.text_email_context_examples'] = 'Συμπεριλάβετε δείγματα τιμών δεδομένων για να βοηθήσετε την ΤΝ να κατανοήσει τους μορφότυπους και τη δομή των δεδομένων.';

