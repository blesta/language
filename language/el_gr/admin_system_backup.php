<?php
/**
 * Admin System Backup
 *
 * @package blesta
 * @subpackage blesta.language.el_gr
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemBackup.index.text_note'] = 'Εδώ μπορείτε να κατεβάσετε ένα αντίγραφο ασφαλείας της βάσης δεδομένων Blesta στον υπολογιστή σας ή να μεταφορτώσετε αυτόματα ένα αντίγραφο ασφαλείας στον ρυθμισμένο διακομιστή SFTP ή/και Amazon S3.';
$lang['AdminSystemBackup.index.field_downloadbackup'] = 'Λήψη αντιγράφων ασφαλείας';
$lang['AdminSystemBackup.index.field_uploadbackup'] = 'Αναγκαστική δημιουργία αντιγράφων ασφαλείας εκτός τοποθεσίας';
$lang['AdminSystemBackup.index.boxtitle_index'] = 'Κατά παραγγελία';
$lang['AdminSystemBackup.index.page_title'] = 'Ρυθμίσεις > Σύστημα > Δημιουργία αντιγράφων ασφαλείας > Κατά παραγγελία';
$lang['AdminSystemBackup.amazon.field.backupsubmit'] = 'Ενημέρωση ρυθμίσεων';
$lang['AdminSystemBackup.amazon.field.amazons3_rate'] = 'Δημιουργία αντιγράφων ασφαλείας κάθε';
$lang['AdminSystemBackup.amazon.field.amazons3_bucket'] = 'Κουβάς';
$lang['AdminSystemBackup.amazon.field.amazons3_secretkey'] = 'Μυστικό κλειδί';
$lang['AdminSystemBackup.amazon.field.amazons3_accesskey'] = 'Κλειδί πρόσβασης';
$lang['AdminSystemBackup.amazon.field.amazons3_region'] = 'Περιοχή';
$lang['AdminSystemBackup.amazon.field.test'] = 'Δοκιμάστε αυτές τις ρυθμίσεις';
$lang['AdminSystemBackup.amazon.boxtitle_backup'] = 'Amazon S3';
$lang['AdminSystemBackup.amazon.page_title'] = 'Ρυθμίσεις > Σύστημα > Δημιουργία αντιγράφων ασφαλείας > Amazon S3';
$lang['AdminSystemBackup.ftp.field.backupsubmit'] = 'Ενημέρωση ρυθμίσεων';
$lang['AdminSystemBackup.ftp.field.ftp_rate'] = 'Δημιουργία αντιγράφων ασφαλείας κάθε';
$lang['AdminSystemBackup.ftp.field.ftp_path'] = 'Διαδρομή';
$lang['AdminSystemBackup.ftp.field.ftp_password'] = 'Κωδικός πρόσβασης';
$lang['AdminSystemBackup.ftp.field.ftp_username'] = 'Όνομα χρήστη';
$lang['AdminSystemBackup.ftp.field.ftp_port'] = 'Λιμάνι';
$lang['AdminSystemBackup.ftp.field.ftp_host'] = 'Όνομα κεντρικού υπολογιστή';
$lang['AdminSystemBackup.ftp.field.test'] = 'Δοκιμάστε αυτές τις ρυθμίσεις';
$lang['AdminSystemBackup.ftp.boxtitle_backup'] = 'Ασφαλές FTP';
$lang['AdminSystemBackup.ftp.page_title'] = 'Ρυθμίσεις > Σύστημα > Δημιουργία αντιγράφων ασφαλείας > Ασφαλές FTP';
$lang['AdminSystemBackup.!tooltip.amazons3_rate'] = 'Το διάστημα συχνότητας για την εκτέλεση αυτού του αντιγράφου ασφαλείας.';
$lang['AdminSystemBackup.!tooltip.amazons3_bucket'] = 'Το όνομα του κάδου του Amazon S3, στο οποίο θα αποθηκεύονται τα αντίγραφα ασφαλείας.';
$lang['AdminSystemBackup.!tooltip.amazons3_secret_key'] = 'Το μυστικό κλειδί του λογαριασμού Amazon S3.';
$lang['AdminSystemBackup.!tooltip.amazons3_access_key'] = 'Το κλειδί πρόσβασης του λογαριασμού Amazon S3.';
$lang['AdminSystemBackup.!tooltip.amazons3_region'] = 'Η περιοχή Amazon S3 στην οποία θα αποθηκεύονται τα αντίγραφα ασφαλείας.';
$lang['AdminSystemBackup.!tooltip.ftp_rate'] = 'Το διάστημα συχνότητας για την εκτέλεση αυτού του αντιγράφου ασφαλείας.';
$lang['AdminSystemBackup.!tooltip.ftp_path'] = 'Η διαδρομή προορισμού όπου θα πρέπει να αποθηκεύονται τα αντίγραφα ασφαλείας στον απομακρυσμένο διακομιστή (π.χ. "/backup/").';
$lang['AdminSystemBackup.!tooltip.ftp_password'] = 'Ο κωδικός πρόσβασης για το λογαριασμό FTP.';
$lang['AdminSystemBackup.!tooltip.ftp_username'] = 'Το όνομα χρήστη για το λογαριασμό FTP.';
$lang['AdminSystemBackup.!tooltip.ftp_port'] = 'Ο αριθμός θύρας, συνήθως 22. Αυτός είναι ο ίδιος αριθμός θύρας που χρησιμοποιείται για το SSH.';
$lang['AdminSystemBackup.!tooltip.ftp_host'] = 'Το πλήρως προσδιορισμένο όνομα τομέα του διακομιστή αντιγράφων ασφαλείας (π.χ. "backup.domain.com").';
$lang['AdminSystemBackup.!error.backup_frequency'] = 'Μη έγκυρη συχνότητα δημιουργίας αντιγράφων ασφαλείας.';
$lang['AdminSystemBackup.!error.amazons3_test'] = 'Η σύνδεση AmazonS3 απέτυχε! Ελέγξτε τις ρυθμίσεις σας και προσπαθήστε ξανά. Σημειώστε ότι τα στοιχεία σύνδεσης είναι ευαίσθητα στην πεζότητα.';
$lang['AdminSystemBackup.!error.sftp_test'] = 'Η σύνδεση SFTP απέτυχε! Ελέγξτε τις ρυθμίσεις σας και προσπαθήστε ξανά.';
$lang['AdminSystemBackup.!success.backup_uploaded'] = 'Το αντίγραφο ασφαλείας στάλθηκε με επιτυχία στις διαμορφωμένες απομακρυσμένες υπηρεσίες!';
$lang['AdminSystemBackup.!success.amazons3_test'] = 'Η σύνδεση AmazonS3 ήταν επιτυχής!';
$lang['AdminSystemBackup.!success.sftp_test'] = 'Η σύνδεση SFTP ήταν επιτυχής!';
$lang['AdminSystemBackup.!success.backup_updated'] = 'Οι ρυθμίσεις δημιουργίας αντιγράφων ασφαλείας ενημερώθηκαν με επιτυχία!';

