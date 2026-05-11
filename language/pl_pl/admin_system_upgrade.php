<?php
/**
 * Admin System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.pl_pl
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemUpgrade.index.no_results'] = 'Opcje aktualizacji nie są obecnie dostępne.';
$lang['AdminSystemUpgrade.index.field_upgradesubmit'] = 'Ustawienia aktualizacji';
$lang['AdminSystemUpgrade.index.boxtitle_upgrade'] = 'Opcje aktualizacji';
$lang['AdminSystemUpgrade.index.page_title'] = 'Ustawienia > System > Opcje aktualizacji';
$lang['AdminSystemUpgrade.upgrade.btn_abort'] = 'Anuluj';
$lang['AdminSystemUpgrade.upgrade.btn_continue'] = 'Kontynuuj aktualizację';
$lang['AdminSystemUpgrade.upgrade.label_missing'] = 'Brakujące pliki';
$lang['AdminSystemUpgrade.upgrade.label_modified'] = 'Zmodyfikowane pliki';
$lang['AdminSystemUpgrade.upgrade.modified_files_title'] = 'Zmodyfikowane pliki podstawowe';
$lang['AdminSystemUpgrade.upgrade.modified_files'] = '%1$s zostały zmodyfikowane w stosunku do oryginalnej wersji. Zmiany te zostaną nadpisane podczas aktualizacji. Czy chcesz kontynuować?';
$lang['AdminSystemUpgrade.upgrade.no_checksums'] = 'Manifest plików dla bieżącej instalacji nie zawiera sum kontrolnych. Weryfikacja integralności plików zostanie pominięta. Czy chcesz kontynuować aktualizację?';
$lang['AdminSystemUpgrade.upgrade.no_manifest'] = 'Nie znaleziono manifestu plików dla bieżącej instalacji. Weryfikacja integralności plików zostanie pominięta. Czy chcesz kontynuować aktualizację?';
$lang['AdminSystemUpgrade.upgrade.started'] = 'Rozpoczął się proces aktualizacji. Możesz zamknąć tę stronę - aktualizacja będzie kontynuowana w tle. Wróć na tę stronę, aby sprawdzić postęp.';
$lang['AdminSystemUpgrade.index.failure_db_version_mismatch'] = 'Wersja bazy danych nie osiągnęła oczekiwanej wartości. Aktualizacja mogła zostać zatrzymana w połowie wersji, pozostawiając zastosowane zmiany schematu.';
$lang['AdminSystemUpgrade.index.failure_db_version_after'] = 'Aktualny: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_expected'] = 'Oczekiwane po aktualizacji: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_before'] = 'Przed aktualizacją: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_label'] = 'Wersja bazy danych:';
$lang['AdminSystemUpgrade.index.failure_backup_label'] = 'Dostępne kopie zapasowe:';
$lang['AdminSystemUpgrade.index.failure_explanation'] = 'Aktualizacja nie zakończyła się pomyślnie. System może być w niespójnym stanie, a niektóre zmiany w bazie danych z nieudanej wersji mogą być już zastosowane. Ponowne uruchomienie aktualizacji prawdopodobnie nie powiedzie się. Przed ponowną próbą zaleca się przywrócenie bazy danych z kopii zapasowej. Kopie zapasowe zostały wykonane przed rozpoczęciem aktualizacji i są wymienione poniżej. Aby odzyskać dane, przywróć te kopie zapasowe ręcznie lub otwórz zgłoszenie do pomocy technicznej w celu uzyskania pomocy.';
$lang['AdminSystemUpgrade.index.failure_heading'] = 'Co robić dalej?';
$lang['AdminSystemUpgrade.index.recovery_instructions'] = 'Aby przywrócić dane z kopii zapasowej, uruchom następujące polecenia na serwerze:';
$lang['AdminSystemUpgrade.index.recovery_files_path'] = 'Kopia zapasowa pliku: %1$s';
$lang['AdminSystemUpgrade.index.recovery_db_path'] = 'Kopia zapasowa bazy danych: %1$s';
$lang['AdminSystemUpgrade.index.heading_recovery'] = 'Instrukcje odzyskiwania';
$lang['AdminSystemUpgrade.index.confirm_delete_backup'] = 'Czy na pewno chcesz usunąć tę kopię zapasową? Nie można tego cofnąć.';
$lang['AdminSystemUpgrade.index.btn_delete'] = 'Usuń';
$lang['AdminSystemUpgrade.index.btn_download'] = 'Pobierz';
$lang['AdminSystemUpgrade.index.backup_col_date'] = 'Data';
$lang['AdminSystemUpgrade.index.backup_files'] = 'Pliki';
$lang['AdminSystemUpgrade.index.backup_database'] = 'Baza danych';
$lang['AdminSystemUpgrade.index.backup_col_size'] = 'Rozmiar';
$lang['AdminSystemUpgrade.index.backup_col_type'] = 'Typ';
$lang['AdminSystemUpgrade.index.backup_col_file'] = 'Plik';
$lang['AdminSystemUpgrade.index.no_backups'] = 'Nie znaleziono kopii zapasowych aktualizacji.';
$lang['AdminSystemUpgrade.index.heading_backups'] = 'Aktualizacja kopii zapasowych';
$lang['AdminSystemUpgrade.index.btn_clear_lock'] = 'Clear Lock';
$lang['AdminSystemUpgrade.index.lock_stale'] = 'Poprzedni proces aktualizacji został nieoczekiwanie zatrzymany.';
$lang['AdminSystemUpgrade.index.lock_active'] = 'Obecnie trwa aktualizacja, która rozpoczęła się pod adresem %1$s.';
$lang['AdminSystemUpgrade.index.btn_retry'] = 'Ponów próbę';
$lang['AdminSystemUpgrade.index.btn_dashboard'] = 'Powrót do pulpitu nawigacyjnego';
$lang['AdminSystemUpgrade.index.upgrade_failed'] = 'Aktualizacja nie powiodła się.';
$lang['AdminSystemUpgrade.index.upgrade_complete'] = 'Aktualizacja zakończona pomyślnie!';
$lang['AdminSystemUpgrade.index.step_finalize'] = 'Finalizacja';
$lang['AdminSystemUpgrade.index.step_migrate'] = 'Uruchamianie migracji baz danych';
$lang['AdminSystemUpgrade.index.step_replace'] = 'Zastępowanie plików';
$lang['AdminSystemUpgrade.index.step_extract'] = 'Wyodrębnianie plików';
$lang['AdminSystemUpgrade.index.step_verify'] = 'Weryfikacja integralności';
$lang['AdminSystemUpgrade.index.step_download'] = 'Download release';
$lang['AdminSystemUpgrade.index.step_backup_files'] = 'Kopia zapasowa pliku';
$lang['AdminSystemUpgrade.index.step_backup_db'] = 'Kopia zapasowa bazy danych';
$lang['AdminSystemUpgrade.index.step_maintenance'] = 'Włącz tryb konserwacji';
$lang['AdminSystemUpgrade.index.step_preflight'] = 'Kontrole przed lotem';
$lang['AdminSystemUpgrade.index.heading_progress'] = 'Postęp aktualizacji';
$lang['AdminSystemUpgrade.index.select_version'] = 'Wybierz wersję, do której chcesz dokonać aktualizacji:';
$lang['AdminSystemUpgrade.index.upgrade_warning'] = 'Spowoduje to włączenie trybu konserwacji, utworzenie kopii zapasowych, pobranie i zainstalowanie nowej wersji oraz przeprowadzenie migracji bazy danych. Rozpoczętego procesu nie można przerwać.';
$lang['AdminSystemUpgrade.index.btn_upgrade'] = 'Uaktualnij teraz';
$lang['AdminSystemUpgrade.index.clean_stale_files_note'] = 'Usuwa pliki w katalogach podstawowych, które nie są obecne w manifeście nowego wydania. Pozostaw niezaznaczone, chyba że masz pewność, że żadne niestandardowe pliki nie istnieją w katalogach podstawowych.';
$lang['AdminSystemUpgrade.index.clean_stale_files'] = 'Usuwanie nieaktualnych plików rdzenia po aktualizacji';
$lang['AdminSystemUpgrade.index.skip_integrity_check'] = 'Pomiń sprawdzanie integralności pliku';
$lang['AdminSystemUpgrade.index.no_support'] = 'Subskrypcja wsparcia i aktualizacji nie jest aktywna. Dostępne są tylko aktualizacje poprawek.';
$lang['AdminSystemUpgrade.index.requires_support'] = 'Wymaga aktywnej subskrypcji wsparcia i aktualizacji.';
$lang['AdminSystemUpgrade.index.changelog_link'] = 'Wyświetl dziennik zmian';
$lang['AdminSystemUpgrade.index.release_date'] = 'Wydano: %1$s';
$lang['AdminSystemUpgrade.index.upgrade_latest'] = 'Pełna aktualizacja: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.upgrade_patch'] = 'Aktualizacja: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.heading_available'] = 'Dostępne aktualizacje';
$lang['AdminSystemUpgrade.index.command_copied'] = 'Skopiowany';
$lang['AdminSystemUpgrade.index.btn_copy_command'] = 'Kopia';
$lang['AdminSystemUpgrade.index.launch_failed_instruction'] = 'Uruchom poniższe polecenie przez SSH (jako użytkownik, który jest właścicielem instalacji Blesta), aby zakończyć aktualizację. Pozostaw tę stronę otwartą - postęp będzie aktualizowany tutaj podczas wykonywania polecenia.';
$lang['AdminSystemUpgrade.index.launch_failed_title'] = 'Aktualizacja w tle nie została uruchomiona';
$lang['AdminSystemUpgrade.index.environment_badge_warn'] = '%1$d ostrzeżenie';
$lang['AdminSystemUpgrade.index.environment_badge_fail'] = '%1$d nie powiodło się';
$lang['AdminSystemUpgrade.index.environment_fail'] = 'Niektóre kontrole nie powiodły się. Rozwiąż poniższe problemy przed aktualizacją.';
$lang['AdminSystemUpgrade.index.environment_pass'] = 'Wszystkie kontrole przeszły pomyślnie. System jest gotowy do samodzielnej aktualizacji.';
$lang['AdminSystemUpgrade.index.heading_environment'] = 'Status środowiska';
$lang['AdminSystemUpgrade.index.up_to_date'] = 'Instalacja jest aktualna.';
$lang['AdminSystemUpgrade.index.btn_check'] = 'Sprawdź aktualizacje';
$lang['AdminSystemUpgrade.index.never_checked'] = 'Nigdy nie sprawdzane';
$lang['AdminSystemUpgrade.index.last_checked'] = 'Ostatnio sprawdzane: %1$s';
$lang['AdminSystemUpgrade.index.current_version'] = 'Uruchamiasz Blesta %1$s';
$lang['AdminSystemUpgrade.index.heading_current'] = 'Aktualna wersja';

