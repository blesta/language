<?php
/**
 * Cron Tasks
 *
 * @package blesta
 * @subpackage blesta.language.pl_pl
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['CronTasks.crontask.name.license_validation'] = 'Weryfikacja licencji';
$lang['CronTasks.crontask.description.transition_quotations'] = 'Oznaczanie cytatów po upływie ważnej daty jako wygasłych';
$lang['CronTasks.crontask.name.transition_quotations'] = 'Cytaty przejściowe';
$lang['CronTasks.crontask.description.unsuspend_services'] = 'Zawieszone usługi, które zostały opłacone, zostaną cofnięte w wybranym odstępie czasu.';
$lang['CronTasks.crontask.name.unsuspend_services'] = 'Usługi bez zawieszenia';
$lang['CronTasks.crontask.description.cleanup_logs'] = 'Stare dzienniki bramy, modułów i inne dzienniki będą rotowane codziennie w zależności od ustawień przechowywania w określonym czasie.';
$lang['CronTasks.crontask.name.cleanup_logs'] = 'Czyszczenie dzienników';
$lang['CronTasks.crontask.description.deliver_reports'] = 'Raporty A/R, generowania faktur, zobowiązań podatkowych i inne raporty będą dostarczane codziennie o określonej godzinie.';
$lang['CronTasks.crontask.name.deliver_reports'] = 'Dostarczanie raportów';
$lang['CronTasks.crontask.description.exchange_rates'] = 'Kursy wymiany będą aktualizowane w określonych odstępach czasu. Nie zaleca się uruchamiania tej funkcji częściej niż dwa razy dziennie ze względu na ryzyko zablokowania.';
$lang['CronTasks.crontask.name.exchange_rates'] = 'Aktualizacje kursów wymiany';
$lang['CronTasks.crontask.description.suspend_services'] = 'Zaległe usługi będą zawieszane codziennie o określonej godzinie.';
$lang['CronTasks.crontask.name.suspend_services'] = 'Zawieszenie usług';
$lang['CronTasks.crontask.description.backups_sftp'] = 'Kopie zapasowe SFTP są zaplanowane w Ustawieniach systemu > Kopia zapasowa > Bezpieczny FTP.';
$lang['CronTasks.crontask.name.backups_sftp'] = 'Kopie zapasowe SFTP';
$lang['CronTasks.crontask.description.backups_amazons3'] = 'Kopie zapasowe Amazon S3 są zaplanowane w Ustawieniach systemu > Kopia zapasowa > Amazon S3.';
$lang['CronTasks.crontask.name.backups_amazons3'] = 'Kopie zapasowe Amazon S3';
$lang['CronTasks.crontask.description.deliver_invoices'] = 'Faktury zaplanowane do dostarczenia będą wysyłane z wybraną częstotliwością.';
$lang['CronTasks.crontask.name.deliver_invoices'] = 'Dostarczanie faktur';
$lang['CronTasks.crontask.description.card_expiration_reminders'] = 'Przypomnienie zostanie wysłane 15 dnia miesiąca dla kart kredytowych, których ważność wygasa w tym miesiącu o określonej godzinie.';
$lang['CronTasks.crontask.name.card_expiration_reminders'] = 'Przypomnienia o wygaśnięciu karty 15. dnia miesiąca';
$lang['CronTasks.crontask.description.cancel_scheduled_services'] = 'Usługi z ustawionymi przyszłymi datami anulowania są usuwane w wybranych odstępach czasu.';
$lang['CronTasks.crontask.name.cancel_scheduled_services'] = 'Anulowanie zaplanowanych usług';
$lang['CronTasks.crontask.description.provision_pending_services'] = 'Płatne usługi oczekujące są aktywowane w wybranych odstępach czasu.';
$lang['CronTasks.crontask.name.provision_pending_services'] = 'Opłacone usługi oczekujące';
$lang['CronTasks.crontask.description.process_renewing_services'] = 'Usługi odnawiania dołączone do modułów są odnawiane z wybraną częstotliwością.';
$lang['CronTasks.crontask.name.process_renewing_services'] = 'Odnowienia usług procesowych';
$lang['CronTasks.crontask.description.process_service_changes'] = 'Płatne zmiany usług w kolejce (np. aktualizacje) są przetwarzane w wybranym interwale.';
$lang['CronTasks.crontask.name.process_service_changes'] = 'Zmiany w usługach procesowych';
$lang['CronTasks.crontask.description.apply_payments'] = 'Luźne kredyty są automatycznie stosowane do otwartych faktur w wybranych odstępach czasu.';
$lang['CronTasks.crontask.name.apply_payments'] = 'Stosowanie płatności do otwartych faktur';
$lang['CronTasks.crontask.description.payment_reminders'] = 'Przypomnienia o płatnościach i powiadomienia o opóźnieniach są wysyłane codziennie o określonej godzinie.';
$lang['CronTasks.crontask.name.payment_reminders'] = 'Przypomnienia o płatnościach';
$lang['CronTasks.crontask.description.autodebit'] = 'Konta płatnicze wybrane do automatycznego obciążania będą uruchamiane w celu spłaty otwartych faktur codziennie o określonej godzinie.';
$lang['CronTasks.crontask.name.autodebit'] = 'Automatyczne obciążenie rachunku';
$lang['CronTasks.crontask.description.apply_invoice_late_fees'] = 'Stosuje opłaty za zwłokę do otwartych faktur skonfigurowaną liczbę dni po terminie płatności.';
$lang['CronTasks.crontask.name.apply_invoice_late_fees'] = 'Opłaty za opóźnienie w wystawieniu faktury';
$lang['CronTasks.crontask.description.create_invoice'] = 'Faktury cykliczne i usługi odnawiające są fakturowane za pośrednictwem tego zadania, które jest uruchamiane raz dziennie o określonej godzinie.';
$lang['CronTasks.crontask.name.create_invoice'] = 'Utwórz fakturę';
$lang['CronTasks.task_type.module'] = 'Moduł';
$lang['CronTasks.task_type.plugin'] = 'Wtyczka';
$lang['CronTasks.task_type.system'] = 'System';
$lang['CronTasks.!error.type.format'] = 'Nieprawidłowy typ zadania cron. Musi to być czas lub interwał.';
$lang['CronTasks.!error.time.format'] = 'Czas jest w nieprawidłowym formacie.';
$lang['CronTasks.!error.interval.format'] = 'Interwał musi być liczbą reprezentującą minuty.';
$lang['CronTasks.!error.enabled.length'] = 'Włączona długość nie może przekraczać 1 znaku.';
$lang['CronTasks.!error.enabled.format'] = 'enabled musi być liczbą.';
$lang['CronTasks.!error.is_lang.length'] = 'Długość is_lang nie może przekraczać 1 znaku.';
$lang['CronTasks.!error.is_lang.format'] = 'is_lang musi być liczbą.';
$lang['CronTasks.!error.name.empty'] = 'Wprowadź nazwę.';
$lang['CronTasks.!error.id.exists'] = 'Nieprawidłowy identyfikator zadania cron.';
$lang['CronTasks.!error.run_id.exists'] = 'Nieprawidłowy identyfikator uruchomienia zadania cron.';
$lang['CronTasks.!error.dir.length'] = 'Długość katalogu nie może przekraczać 64 znaków.';
$lang['CronTasks.!error.task_type.format'] = 'Nieprawidłowy typ zadania. Musi to być moduł, wtyczka lub system.';
$lang['CronTasks.!error.key.length'] = 'Długość klucza zadania cron nie może przekraczać 64 znaków.';
$lang['CronTasks.!error.key.unique'] = 'Podany klucz zadania cron jest już zajęty.';
$lang['CronTasks.crontask.description.delete_expired_password_reset_tokens'] = 'Usuwa z systemu wszystkie tokeny resetowania hasła, których data ważności minęła.';
$lang['CronTasks.crontask.name.delete_expired_password_reset_tokens'] = 'Usuwanie wygasłych tokenów resetowania hasła';
$lang['CronTasks.crontask.description.low_balance_notifications'] = 'Wysyła powiadomienie do wszystkich użytkowników, których poziom kredytów spadł poniżej skonfigurowanego progu.';
$lang['CronTasks.crontask.name.low_balance_notifications'] = 'Powiadomienia o niskim saldzie';

