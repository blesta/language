<?php
/**
 * Pterodactyl Package
 *
 * @package blesta
 * @subpackage blesta.language.el_gr
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PterodactylPackage.package_fields.tooltip.display'] = 'Ελέγξτε για να επιτρέπετε στους πελάτες να τροποποιούν αυτή την τιμή κατά την προσθήκη/επεξεργασία υπηρεσίας. Αφήστε το μη επιλεγμένο εάν σκοπεύετε να χρησιμοποιήσετε μια διαμορφώσιμη επιλογή για αυτό το πεδίο.';
$lang['PterodactylPackage.package_fields.optional'] = '%1$s (Προαιρετικό)';
$lang['PterodactylPackage.package_fields.tooltip.backups'] = 'Ο συνολικός αριθμός αντιγράφων ασφαλείας που επιτρέπεται σε έναν χρήστη για τους δημιουργημένους διακομιστές. Αφήστε κενό για να επιτρέψετε απεριόριστα.';
$lang['PterodactylPackage.package_fields.backups'] = 'Εφεδρικό όριο (προαιρετικό)';
$lang['PterodactylPackage.package_fields.tooltip.allocations'] = 'Ο συνολικός αριθμός κατανομών που επιτρέπεται σε έναν χρήστη να δημιουργήσει διακομιστές. Αφήστε το κενό για να επιτρέψετε απεριόριστες κατανομές.';
$lang['PterodactylPackage.package_fields.allocations'] = 'Όριο κατανομής (προαιρετικό)';
$lang['PterodactylPackage.package_fields.tooltip.databases'] = 'Ο συνολικός αριθμός βάσεων δεδομένων που επιτρέπεται σε έναν χρήστη να δημιουργήσει διακομιστές. Αφήστε κενό για να επιτρέψετε απεριόριστες.';
$lang['PterodactylPackage.package_fields.databases'] = 'Όριο βάσης δεδομένων (προαιρετικό)';
$lang['PterodactylPackage.package_fields.tooltip.image'] = 'Προσαρμοσμένη εικόνα Docker για την ανάθεση στους δημιουργημένους διακομιστές (π.χ. quay.io/pterodactyl/core:java-glibc).';
$lang['PterodactylPackage.package_fields.image'] = 'Εικόνα (προαιρετική)';
$lang['PterodactylPackage.package_fields.tooltip.startup'] = 'Προσαρμοσμένη εντολή εκκίνησης που θα ανατεθεί στους δημιουργημένους διακομιστές (π.χ. java -Xms128M -Xmx 1024M -jar server.jar).';
$lang['PterodactylPackage.package_fields.startup'] = 'Έναρξη λειτουργίας (προαιρετικό)';
$lang['PterodactylPackage.package_fields.tooltip.io'] = 'Αριθμός ρύθμισης μπλοκ IO (10-1000).';
$lang['PterodactylPackage.package_fields.io'] = 'Βάρος μπλοκ IO';
$lang['PterodactylPackage.package_fields.tooltip.disk'] = 'Ποσότητα χώρου δίσκου που θα εκχωρηθεί στους δημιουργημένους διακομιστές.';
$lang['PterodactylPackage.package_fields.disk'] = 'Χώρος στο δίσκο (MB)';
$lang['PterodactylPackage.package_fields.tooltip.cpu'] = 'Ποσότητα CPU που θα εκχωρηθεί στους δημιουργημένους διακομιστές.';
$lang['PterodactylPackage.package_fields.cpu'] = 'Όριο CPU (%)';
$lang['PterodactylPackage.package_fields.tooltip.swap'] = 'Ποσότητα Swap που θα εκχωρηθεί στους δημιουργημένους διακομιστές.';
$lang['PterodactylPackage.package_fields.swap'] = 'Εναλλαγή (MB)';
$lang['PterodactylPackage.package_fields.tooltip.memory'] = 'Ποσότητα μνήμης που θα εκχωρηθεί στους δημιουργημένους διακομιστές.';
$lang['PterodactylPackage.package_fields.memory'] = 'Μνήμη (MB)';
$lang['PterodactylPackage.package_fields.tooltip.pack_id'] = 'Αναγνωριστικό του πακέτου με το οποίο θα εγκατασταθεί ο διακομιστής.';
$lang['PterodactylPackage.package_fields.pack_id'] = 'Αναγνωριστικό συσκευασίας (προαιρετικό)';
$lang['PterodactylPackage.package_fields.tooltip.egg_id'] = 'Αναγνωριστικό του Egg που θα χρησιμοποιήσει ο διακομιστής.';
$lang['PterodactylPackage.package_fields.egg_id'] = 'Ταυτότητα αυγού';
$lang['PterodactylPackage.package_fields.tooltip.nest_id'] = 'Το Nest που θα χρησιμοποιήσει ο διακομιστής.';
$lang['PterodactylPackage.package_fields.nest_id'] = 'Φωλιά';
$lang['PterodactylPackage.package_fields.tooltip.port_range'] = 'Περιοχές θυρών που χωρίζονται με κόμμα για την ανάθεση στον διακομιστή (Παράδειγμα: 25565-25570,25580-25590).';
$lang['PterodactylPackage.package_fields.port_range'] = 'Εύρος θύρας';
$lang['PterodactylPackage.package_fields.tooltip.dedicated_ip'] = 'Εκχωρήστε αποκλειστική ip στους δημιουργημένους διακομιστές.';
$lang['PterodactylPackage.package_fields.dedicated_ip'] = 'Αφιερωμένη IP (προαιρετικά)';
$lang['PterodactylPackage.package_fields.tooltip.location_id'] = 'Η τοποθεσία για την αυτόματη εγκατάσταση διακομιστών.';
$lang['PterodactylPackage.package_fields.location_id'] = 'Τοποθεσία';
$lang['PterodactylPackage.!error.meta[backups].format'] = 'Ο αριθμός των αντιγράφων ασφαλείας πρέπει να είναι αριθμητικός.';
$lang['PterodactylPackage.!error.meta[allocations].format'] = 'Ο αριθμός των κατανομών πρέπει να είναι αριθμητικός.';
$lang['PterodactylPackage.!error.meta[databases].format'] = 'Ο αριθμός των βάσεων δεδομένων πρέπει να είναι αριθμητικός.';
$lang['PterodactylPackage.!error.meta[image].length'] = 'Η διαδρομή της εικόνας πρέπει να είναι το πολύ 255 χαρακτήρες.';
$lang['PterodactylPackage.!error.meta[io].format'] = 'Το βάρος IO πρέπει να είναι αριθμητικό.';
$lang['PterodactylPackage.!error.meta[disk].format'] = 'Το ποσό του χώρου στο δίσκο πρέπει να είναι αριθμητικό.';
$lang['PterodactylPackage.!error.meta[cpu].format'] = 'Το ποσοστό cpu πρέπει να είναι αριθμητικό.';
$lang['PterodactylPackage.!error.meta[swap].format'] = 'Το ποσό ανταλλαγής πρέπει να είναι αριθμητικό.';
$lang['PterodactylPackage.!error.meta[memory].format'] = 'Το ποσό μνήμης πρέπει να είναι αριθμητικό.';
$lang['PterodactylPackage.!error.meta[pack_id].format'] = 'Το αναγνωριστικό συσκευασίας πρέπει να είναι αριθμητικό.';
$lang['PterodactylPackage.!error.meta[egg_id].valid'] = 'Το αυγό δεν ταιριάζει με κανένα στο Pterodactyl.';
$lang['PterodactylPackage.!error.meta[egg_id].format'] = 'Το αναγνωριστικό αυγού πρέπει να είναι αριθμητικό.';
$lang['PterodactylPackage.!error.meta[nest_id].valid'] = 'Η φωλιά δεν ταιριάζει με καμία στο Pterodactyl.';
$lang['PterodactylPackage.!error.meta[nest_id].format'] = 'Το αναγνωριστικό φωλιάς πρέπει να είναι αριθμητικό.';
$lang['PterodactylPackage.!error.meta[port_range].format'] = 'Το εύρος των θυρών πρέπει να έχει τη μορφή 25565-25570,25580-25590.';
$lang['PterodactylPackage.!error.meta[dedicated_ip].format'] = 'Η επιλογή για τη χρήση αποκλειστικής IP πρέπει να οριστεί σε 1 ή 0.';
$lang['PterodactylPackage.!error.meta[location_id].valid'] = 'Το αναγνωριστικό τοποθεσίας δεν ταιριάζει με κανένα στο Pterodactyl.';
$lang['PterodactylPackage.!error.meta[location_id].format'] = 'Το αναγνωριστικό θέσης πρέπει να είναι αριθμητικό.';

