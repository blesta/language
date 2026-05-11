<?php
/**
 * System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.ro_ro
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SystemUpgrade.environment.os_pass'] = 'Sistem de operare: Linux detectat.';
$lang['SystemUpgrade.environment.os_fail'] = 'Actualizarea automată este acceptată numai în mediile Linux.';
$lang['SystemUpgrade.environment.exec_pass'] = 'Acces la shell: funcția exec() este disponibilă.';
$lang['SystemUpgrade.environment.exec_fail'] = 'Acces la shell: funcția exec() este dezactivată sau nu este disponibilă.';
$lang['SystemUpgrade.environment.unzip_pass'] = 'Extragere arhivă: comanda unzip este disponibilă.';
$lang['SystemUpgrade.environment.unzip_fail'] = 'Extragere arhivă: Comanda unzip nu este disponibilă. Vă rugăm să instalați unzip.';
$lang['SystemUpgrade.environment.mysqldump_pass'] = 'Copie de rezervă a bazei de date: comanda mysqldump este disponibilă.';
$lang['SystemUpgrade.environment.mysqldump_fail'] = 'Copie de rezervă a bazei de date: comanda mysqldump nu este disponibilă. Vă rugăm să instalați instrumentele mysql-client.';
$lang['SystemUpgrade.environment.tar_pass'] = 'Copie de rezervă fișier: comanda tar este disponibilă.';
$lang['SystemUpgrade.environment.tar_fail'] = 'Backup fișier: Comanda tar nu este disponibilă. Vă rugăm să instalați tar.';
$lang['SystemUpgrade.environment.rsync_pass'] = 'Sincronizarea fișierelor: comanda rsync este disponibilă.';
$lang['SystemUpgrade.environment.rsync_fail'] = 'Sincronizarea fișierelor: Comanda rsync nu este disponibilă. Vă rugăm să instalați rsync.';
$lang['SystemUpgrade.environment.setsid_pass'] = 'Procesul de detașare: comanda setsid este disponibilă.';
$lang['SystemUpgrade.environment.setsid_warn'] = 'Detașarea procesului: comanda setsid nu este disponibilă. Actualizarea poate necesita o comandă manuală prin SSH pentru a fi finalizată în mediile de găzduire blocate.';
$lang['SystemUpgrade.environment.writable_pass'] = 'Sistem de fișiere: Directorul de instalare este scriptibil.';
$lang['SystemUpgrade.environment.writable_fail'] = 'Sistem de fișiere: Directorul de instalare nu este scriptibil de către serverul web.';
$lang['SystemUpgrade.environment.ownership_pass'] = 'Proprietatea fișierelor: Toate directoarele cheie sunt deținute de utilizatorul serverului web.';
$lang['SystemUpgrade.environment.ownership_fail'] = 'Proprietatea fișierelor: Directoarele cheie %1$s nu sunt deținute de utilizatorul serverului web.';
$lang['SystemUpgrade.environment.disk_pass'] = 'Spațiu pe disc: %1$s disponibil.';
$lang['SystemUpgrade.environment.disk_warn'] = 'Spațiu pe disc: Doar %1$s disponibil, necesar estimat %2$s.';
$lang['SystemUpgrade.environment.config_pass'] = 'Configurație: blesta.php este scriptibil.';
$lang['SystemUpgrade.environment.config_fail'] = 'Configurație: blesta.php nu este inscriptibil.';
$lang['SystemUpgrade.maintenance_reason'] = 'Sistemul este în prezent în curs de actualizare. Vă rugăm să reveniți în scurt timp.';
$lang['SystemUpgrade.!error.upgrade_locked'] = 'O actualizare este deja în curs de desfășurare (inițiată de personalul ID %1$s la %2$s).';
$lang['SystemUpgrade.!error.lock_stale'] = 'Un proces anterior de actualizare pare să se fi oprit în mod neașteptat. Puteți șterge blocajul pentru a încerca din nou.';
$lang['SystemUpgrade.!error.backup_db_failed'] = 'Backup-ul bazei de date a eșuat. Actualizarea nu poate continua fără o copie de rezervă fiabilă.';
$lang['SystemUpgrade.!error.backup_files_failed'] = 'Backup-ul fișierelor a eșuat. Actualizarea nu poate continua fără o copie de siguranță fiabilă.';
$lang['SystemUpgrade.!error.download_failed'] = 'Nu s-a reușit descărcarea fișierului de lansare.';
$lang['SystemUpgrade.!error.hash_mismatch'] = 'Verificarea integrității fișierului descărcat a eșuat. Fișierul poate fi corupt.';
$lang['SystemUpgrade.!error.signature_missing'] = 'Versiunea nu include o semnătură criptografică. Nu se poate verifica autenticitatea.';
$lang['SystemUpgrade.!error.signature_invalid'] = 'Verificarea semnăturii de eliberare a eșuat. Este posibil ca fișierul să fi fost falsificat.';
$lang['SystemUpgrade.!error.extraction_failed'] = 'Nu s-a reușit extragerea arhivei de lansare.';
$lang['SystemUpgrade.!error.upgrader_failed'] = 'A eșuat pregătirea sau lansarea procesului de actualizare.';
$lang['SystemUpgrade.!error.launch_not_detected'] = 'Procesul de actualizare în fundal nu a început. Acest lucru se poate întâmpla în mediile de găzduire închisă (CloudLinux/CageFS, unele configurații PHP-FPM) în care serverului web nu i se permite să detașeze procesele copil care rulează mult timp. Actualizarea poate fi finalizată prin rularea comenzii de mai jos prin SSH.';
$lang['SystemUpgrade.!error.upgrader_crashed'] = 'Procesul de actualizare pare să se fi oprit în mod neașteptat. Verificați căile de rezervă de mai jos pentru recuperare.';
$lang['SystemUpgrade.!error.license_invalid'] = 'Abonamentul dvs. de asistență și actualizări trebuie să fie activ pentru actualizări majore sau minore ale versiunii.';
$lang['SystemUpgrade.!error.php_version'] = 'Versiunea țintă necesită PHP %1$s sau mai nou. Rulați PHP %2$s.';
$lang['SystemUpgrade.!error.environment_fail'] = 'Una sau mai multe verificări de mediu au eșuat. Vă rugăm să rezolvați problemele înainte de actualizare.';

