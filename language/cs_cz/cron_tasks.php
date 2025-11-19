<?php
/**
 * Cron Tasks
 *
 * @package blesta
 * @subpackage blesta.language.cs_cz
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['CronTasks.crontask.name.license_validation'] = 'Ověření platnosti licence';
$lang['CronTasks.crontask.description.transition_quotations'] = 'Označte citace po datu platnosti jako neplatné.';
$lang['CronTasks.crontask.name.transition_quotations'] = 'Přechodové citace';
$lang['CronTasks.crontask.description.unsuspend_services'] = 'Pozastavené služby, které byly zaplaceny, budou ve zvoleném intervalu pozastaveny.';
$lang['CronTasks.crontask.name.unsuspend_services'] = 'Zrušení pozastavení služeb';
$lang['CronTasks.crontask.description.cleanup_logs'] = 'Staré protokoly brány, modulu a další protokoly budou rotovány denně v závislosti na nastavení jejich uchovávání v zadaném čase.';
$lang['CronTasks.crontask.name.cleanup_logs'] = 'Úklid protokolů';
$lang['CronTasks.crontask.description.deliver_reports'] = 'Přehledy A/R, Generování faktur, Daňové povinnosti a další přehledy budou dodávány denně ve stanoveném čase.';
$lang['CronTasks.crontask.name.deliver_reports'] = 'Dodávat zprávy';
$lang['CronTasks.crontask.description.exchange_rates'] = 'Směnné kurzy budou aktualizovány v zadaném intervalu. Nedoporučuje se spouštět tuto funkci častěji než dvakrát denně, protože hrozí riziko zablokování.';
$lang['CronTasks.crontask.name.exchange_rates'] = 'Aktualizace směnných kurzů';
$lang['CronTasks.crontask.description.suspend_services'] = 'Služby po splatnosti budou pozastaveny denně ve stanovenou dobu.';
$lang['CronTasks.crontask.name.suspend_services'] = 'Pozastavení služeb';
$lang['CronTasks.crontask.description.backups_sftp'] = 'Zálohování SFTP se plánuje v části Nastavení systému > Zálohování > Zabezpečené FTP.';
$lang['CronTasks.crontask.name.backups_sftp'] = 'Zálohování SFTP';
$lang['CronTasks.crontask.description.backups_amazons3'] = 'Zálohování na Amazon S3 se plánuje v části Nastavení systému > Zálohování > Amazon S3.';
$lang['CronTasks.crontask.name.backups_amazons3'] = 'Zálohování Amazon S3';
$lang['CronTasks.crontask.description.deliver_invoices'] = 'Faktury, jejichž doručení je naplánováno, budou odesílány ve zvoleném intervalu.';
$lang['CronTasks.crontask.name.deliver_invoices'] = 'Dodání faktur';
$lang['CronTasks.crontask.description.card_expiration_reminders'] = 'K 15. dni v měsíci bude zaslána upomínka pro kreditní karty, jejichž platnost končí v daném měsíci v uvedenou dobu.';
$lang['CronTasks.crontask.name.card_expiration_reminders'] = 'Připomínky k vypršení platnosti karty 15. den v měsíci';
$lang['CronTasks.crontask.description.cancel_scheduled_services'] = 'Služby s nastavenými budoucími daty zrušení se odstraní ve zvoleném intervalu.';
$lang['CronTasks.crontask.name.cancel_scheduled_services'] = 'Zrušení naplánovaných služeb';
$lang['CronTasks.crontask.description.provision_pending_services'] = 'Placené čekající služby se aktivují ve zvoleném intervalu.';
$lang['CronTasks.crontask.name.provision_pending_services'] = 'Poskytování placených služeb v očekávání';
$lang['CronTasks.crontask.description.process_renewing_services'] = 'Obnovovací služby připojené k modulům se obnovují ve zvoleném intervalu.';
$lang['CronTasks.crontask.name.process_renewing_services'] = 'Obnovení procesních služeb';
$lang['CronTasks.crontask.description.process_service_changes'] = 'Placené změny služeb ve frontě (např. aktualizace) se zpracovávají ve zvoleném intervalu.';
$lang['CronTasks.crontask.name.process_service_changes'] = 'Změny procesních služeb';
$lang['CronTasks.crontask.description.apply_payments'] = 'Volné kredity se na otevřené faktury použijí automaticky ve zvoleném intervalu.';
$lang['CronTasks.crontask.name.apply_payments'] = 'Použít platby na otevřené faktury';
$lang['CronTasks.crontask.description.payment_reminders'] = 'Upomínky o platbě a upozornění na zpoždění jsou zasílány denně ve stanovenou dobu.';
$lang['CronTasks.crontask.name.payment_reminders'] = 'Připomenutí plateb';
$lang['CronTasks.crontask.description.autodebit'] = 'Platební účty vybrané pro automatické inkaso se budou spouštět k úhradě otevřených faktur denně v zadaném čase.';
$lang['CronTasks.crontask.name.autodebit'] = 'Automatické inkaso';
$lang['CronTasks.crontask.description.apply_invoice_late_fees'] = 'Uplatňuje poplatky z prodlení na otevřené faktury s nastaveným počtem dní po splatnosti.';
$lang['CronTasks.crontask.name.apply_invoice_late_fees'] = 'Uplatnění poplatků za pozdní úhradu faktury';
$lang['CronTasks.crontask.description.create_invoice'] = 'Opakující se faktury a obnovující se služby jsou fakturovány prostřednictvím této úlohy, která se spouští jednou denně v zadaný čas.';
$lang['CronTasks.crontask.name.create_invoice'] = 'Vytvořit fakturu';
$lang['CronTasks.task_type.module'] = 'Modul';
$lang['CronTasks.task_type.plugin'] = 'Zásuvný modul';
$lang['CronTasks.task_type.system'] = 'Systém';
$lang['CronTasks.!error.type.format'] = 'Nesprávný typ úlohy cron. Musí to být buď čas, nebo interval.';
$lang['CronTasks.!error.time.format'] = 'Čas je v nesprávném formátu.';
$lang['CronTasks.!error.interval.format'] = 'Interval musí být číslo představující minuty.';
$lang['CronTasks.!error.enabled.length'] = 'povolená délka nesmí překročit 1 znak.';
$lang['CronTasks.!error.enabled.format'] = 'povoleno musí být číslo.';
$lang['CronTasks.!error.is_lang.length'] = 'délka is_lang nesmí překročit 1 znak.';
$lang['CronTasks.!error.is_lang.format'] = 'is_lang musí být číslo.';
$lang['CronTasks.!error.name.empty'] = 'Zadejte prosím jméno.';
$lang['CronTasks.!error.id.exists'] = 'Nesprávné ID úlohy cron.';
$lang['CronTasks.!error.run_id.exists'] = 'Nesprávné ID spuštění úlohy cron.';
$lang['CronTasks.!error.dir.length'] = 'Délka adresáře nesmí překročit 64 znaků.';
$lang['CronTasks.!error.task_type.format'] = 'Nesprávný typ úlohy. Musí to být modul, zásuvný modul nebo systém.';
$lang['CronTasks.!error.key.length'] = 'Délka klíče úlohy cron nesmí překročit 64 znaků.';
$lang['CronTasks.!error.key.unique'] = 'Zadaný klíč úlohy cron je již obsazen.';
$lang['CronTasks.crontask.description.delete_expired_password_reset_tokens'] = 'Odstraní ze systému všechny tokeny pro resetování hesla, jejichž platnost vypršela.';
$lang['CronTasks.crontask.name.delete_expired_password_reset_tokens'] = 'Odstranění vypršených tokenů pro resetování hesla';
$lang['CronTasks.crontask.description.low_balance_notifications'] = 'Odešle oznámení všem uživatelům, jejichž úroveň kreditu klesla pod nakonfigurovanou mez.';
$lang['CronTasks.crontask.name.low_balance_notifications'] = 'Oznámení o nízkém zůstatku';

