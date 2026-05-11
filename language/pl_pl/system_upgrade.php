<?php
/**
 * System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.pl_pl
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SystemUpgrade.environment.os_pass'] = 'System operacyjny: Linux Wykryto.';
$lang['SystemUpgrade.environment.os_fail'] = 'Samodzielna aktualizacja jest obsługiwana tylko w środowiskach Linux.';
$lang['SystemUpgrade.environment.exec_pass'] = 'Dostęp do powłoki: funkcja exec() jest dostępna.';
$lang['SystemUpgrade.environment.exec_fail'] = 'Dostęp do powłoki: funkcja exec() jest wyłączona lub niedostępna.';
$lang['SystemUpgrade.environment.unzip_pass'] = 'Rozpakowywanie archiwum: dostępne jest polecenie unzip.';
$lang['SystemUpgrade.environment.unzip_fail'] = 'Wyodrębnianie archiwum: polecenie unzip nie jest dostępne. Zainstaluj unzip.';
$lang['SystemUpgrade.environment.mysqldump_pass'] = 'Kopia zapasowa bazy danych: polecenie mysqldump jest dostępne.';
$lang['SystemUpgrade.environment.mysqldump_fail'] = 'Kopia zapasowa bazy danych: polecenie mysqldump nie jest dostępne. Zainstaluj narzędzia mysql-client.';
$lang['SystemUpgrade.environment.tar_pass'] = 'Kopia zapasowa pliku: dostępne jest polecenie tar.';
$lang['SystemUpgrade.environment.tar_fail'] = 'Kopia zapasowa pliku: polecenie tar nie jest dostępne. Zainstaluj tar.';
$lang['SystemUpgrade.environment.rsync_pass'] = 'Synchronizacja plików: dostępne jest polecenie rsync.';
$lang['SystemUpgrade.environment.rsync_fail'] = 'Synchronizacja plików: polecenie rsync nie jest dostępne. Zainstaluj rsync.';
$lang['SystemUpgrade.environment.setsid_pass'] = 'Odłączenie procesu: polecenie setid jest dostępne.';
$lang['SystemUpgrade.environment.setsid_warn'] = 'Odłączenie procesu: polecenie setid jest niedostępne. Aktualizacja może wymagać ręcznego polecenia za pośrednictwem SSH, aby ukończyć ją w zablokowanych środowiskach hostingowych.';
$lang['SystemUpgrade.environment.writable_pass'] = 'System plików: Katalog instalacyjny jest zapisywalny.';
$lang['SystemUpgrade.environment.writable_fail'] = 'System plików: Katalog instalacyjny nie jest zapisywalny przez serwer WWW.';
$lang['SystemUpgrade.environment.ownership_pass'] = 'Własność plików: Wszystkie kluczowe katalogi są własnością użytkownika serwera WWW.';
$lang['SystemUpgrade.environment.ownership_fail'] = 'Własność plików: Katalogi klucza %1$s nie są własnością użytkownika serwera WWW.';
$lang['SystemUpgrade.environment.disk_pass'] = 'Miejsce na dysku: %1$s dostępne.';
$lang['SystemUpgrade.environment.disk_warn'] = 'Miejsce na dysku: Dostępne tylko %1$s, szacowane zapotrzebowanie %2$s.';
$lang['SystemUpgrade.environment.config_pass'] = 'Konfiguracja: blesta.php jest zapisywalny.';
$lang['SystemUpgrade.environment.config_fail'] = 'Konfiguracja: blesta.php nie jest zapisywalny.';
$lang['SystemUpgrade.maintenance_reason'] = 'System jest obecnie aktualizowany. Prosimy o sprawdzenie go wkrótce.';
$lang['SystemUpgrade.!error.upgrade_locked'] = 'Aktualizacja jest już w toku (rozpoczęta przez pracownika o identyfikatorze %1$s na stronie %2$s).';
$lang['SystemUpgrade.!error.lock_stale'] = 'Poprzedni proces aktualizacji został nieoczekiwanie zatrzymany. Możesz wyczyścić blokadę, aby spróbować ponownie.';
$lang['SystemUpgrade.!error.backup_db_failed'] = 'Kopia zapasowa bazy danych nie powiodła się. Aktualizacja nie może być kontynuowana bez niezawodnej kopii zapasowej.';
$lang['SystemUpgrade.!error.backup_files_failed'] = 'Kopia zapasowa pliku nie powiodła się. Aktualizacja nie może być kontynuowana bez niezawodnej kopii zapasowej.';
$lang['SystemUpgrade.!error.download_failed'] = 'Nie udało się pobrać pliku wydania.';
$lang['SystemUpgrade.!error.hash_mismatch'] = 'Sprawdzanie integralności pobranego pliku nie powiodło się. Plik może być uszkodzony.';
$lang['SystemUpgrade.!error.signature_missing'] = 'Wydanie nie zawiera podpisu kryptograficznego. Nie można zweryfikować autentyczności.';
$lang['SystemUpgrade.!error.signature_invalid'] = 'Weryfikacja podpisu wydania nie powiodła się. Plik mógł zostać naruszony.';
$lang['SystemUpgrade.!error.extraction_failed'] = 'Nie udało się rozpakować archiwum wydania.';
$lang['SystemUpgrade.!error.upgrader_failed'] = 'Nie udało się przygotować lub uruchomić procesu aktualizacji.';
$lang['SystemUpgrade.!error.launch_not_detected'] = 'Proces aktualizacji w tle nie został uruchomiony. Może się to zdarzyć w środowiskach hostingowych typu jailed (CloudLinux/CageFS, niektóre konfiguracje PHP-FPM), w których serwer WWW nie może odłączyć długo działających procesów potomnych. Aktualizację można ukończyć, uruchamiając poniższe polecenie przez SSH.';
$lang['SystemUpgrade.!error.upgrader_crashed'] = 'Wygląda na to, że proces aktualizacji został nieoczekiwanie zatrzymany. Sprawdź poniższe ścieżki kopii zapasowych, aby je odzyskać.';
$lang['SystemUpgrade.!error.license_invalid'] = 'Subskrypcja pomocy technicznej i aktualizacji musi być aktywna w przypadku aktualizacji wersji głównej lub podrzędnej.';
$lang['SystemUpgrade.!error.php_version'] = 'Wersja docelowa wymaga PHP %1$s lub nowszego. Korzystasz z PHP %2$s.';
$lang['SystemUpgrade.!error.environment_fail'] = 'Jedno lub więcej sprawdzeń środowiska nie powiodło się. Rozwiąż te problemy przed aktualizacją.';

