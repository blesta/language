<?php
/**
 * Cron Tasks
 *
 * @package blesta
 * @subpackage blesta.language.sv_se
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['CronTasks.crontask.name.license_validation'] = 'Validering av licens';
$lang['CronTasks.crontask.description.transition_quotations'] = 'Markera citat som passerat giltighetsdatumet som utgångna';
$lang['CronTasks.crontask.name.transition_quotations'] = 'Citat om övergång';
$lang['CronTasks.crontask.description.unsuspend_services'] = 'Avstängda tjänster som har betalats kommer att återställas vid det valda intervallet.';
$lang['CronTasks.crontask.name.unsuspend_services'] = 'Tjänster utan uppskjutning';
$lang['CronTasks.crontask.description.cleanup_logs'] = 'Gamla gateway-, modul- och andra loggar kommer att roteras dagligen beroende på deras lagringsinställningar vid den angivna tidpunkten.';
$lang['CronTasks.crontask.name.cleanup_logs'] = 'Städa upp loggar';
$lang['CronTasks.crontask.description.deliver_reports'] = 'A/R, Invoice Generation, Tax Liability och andra rapporter levereras dagligen vid angiven tidpunkt.';
$lang['CronTasks.crontask.name.deliver_reports'] = 'Leverera rapporter';
$lang['CronTasks.crontask.description.exchange_rates'] = 'Valutakurserna kommer att uppdateras med det angivna intervallet. Det rekommenderas inte att köra detta mer än två gånger dagligen eftersom det då finns risk för blockering.';
$lang['CronTasks.crontask.name.exchange_rates'] = 'Uppdateringar av växelkursen';
$lang['CronTasks.crontask.description.suspend_services'] = 'Förfallna tjänster kommer att avbrytas dagligen vid angiven tidpunkt.';
$lang['CronTasks.crontask.name.suspend_services'] = 'Avbryta tjänster';
$lang['CronTasks.crontask.description.backups_sftp'] = 'SFTP-säkerhetskopior schemaläggs under Systeminställningar > Säkerhetskopiering > Säker FTP.';
$lang['CronTasks.crontask.name.backups_sftp'] = 'SFTP-säkerhetskopior';
$lang['CronTasks.crontask.description.backups_amazons3'] = 'Amazon S3-säkerhetskopior schemaläggs under Systeminställningar > Säkerhetskopiering > Amazon S3.';
$lang['CronTasks.crontask.name.backups_amazons3'] = 'Säkerhetskopior av Amazon S3';
$lang['CronTasks.crontask.description.deliver_invoices'] = 'Fakturor som är schemalagda för leverans kommer att skickas med det valda intervallet.';
$lang['CronTasks.crontask.name.deliver_invoices'] = 'Leverera fakturor';
$lang['CronTasks.crontask.description.card_expiration_reminders'] = 'En påminnelse skickas den 15:e i månaden för kreditkort som löper ut den månaden vid angiven tidpunkt.';
$lang['CronTasks.crontask.name.card_expiration_reminders'] = 'Påminnelser om att kort löper ut 15:e i månaden';
$lang['CronTasks.crontask.description.cancel_scheduled_services'] = 'Tjänster med framtida uppsägningsdatum tas bort vid det valda intervallet.';
$lang['CronTasks.crontask.name.cancel_scheduled_services'] = 'Avboka schemalagda tjänster';
$lang['CronTasks.crontask.description.provision_pending_services'] = 'Betalda väntande tjänster aktiveras vid det valda intervallet.';
$lang['CronTasks.crontask.name.provision_pending_services'] = 'Avsättning Betald i avvaktan på tjänster';
$lang['CronTasks.crontask.description.process_renewing_services'] = 'Förnyelsetjänster som är kopplade till moduler förnyas med det valda intervallet.';
$lang['CronTasks.crontask.name.process_renewing_services'] = 'Förnyelse av stämningsmannadelgivning';
$lang['CronTasks.crontask.description.process_service_changes'] = 'Betalda köade serviceändringar (t.ex. uppgraderingar) behandlas vid det valda intervallet.';
$lang['CronTasks.crontask.name.process_service_changes'] = 'Förändringar i processtjänsten';
$lang['CronTasks.crontask.description.apply_payments'] = 'Lösa krediter tillämpas automatiskt på öppna fakturor med det valda intervallet.';
$lang['CronTasks.crontask.name.apply_payments'] = 'Tillämpa betalningar på öppna fakturor';
$lang['CronTasks.crontask.description.payment_reminders'] = 'Betalningspåminnelser och förseningsavgifter skickas dagligen vid angiven tidpunkt.';
$lang['CronTasks.crontask.name.payment_reminders'] = 'Påminnelser om betalningar';
$lang['CronTasks.crontask.description.autodebit'] = 'Betalningskonton som valts för automatisk debitering kommer att köras för att betala öppna fakturor dagligen vid den angivna tidpunkten.';
$lang['CronTasks.crontask.name.autodebit'] = 'Automatisk debitering';
$lang['CronTasks.crontask.description.apply_invoice_late_fees'] = 'Tillämpar förseningsavgifter på öppna fakturor ett konfigurerat antal dagar efter förfallodagen.';
$lang['CronTasks.crontask.name.apply_invoice_late_fees'] = 'Tillämpa förseningsavgifter för fakturor';
$lang['CronTasks.crontask.description.create_invoice'] = 'Återkommande fakturor och förnyelsetjänster faktureras via denna uppgift, som körs en gång dagligen vid angiven tidpunkt.';
$lang['CronTasks.crontask.name.create_invoice'] = 'Skapa faktura';
$lang['CronTasks.task_type.module'] = 'Modul';
$lang['CronTasks.task_type.plugin'] = 'Plugin';
$lang['CronTasks.task_type.system'] = 'System';
$lang['CronTasks.!error.type.format'] = 'Ogiltig typ av cron-uppgift. Måste vara antingen tid eller intervall.';
$lang['CronTasks.!error.time.format'] = 'Tiden är i ett ogiltigt format.';
$lang['CronTasks.!error.interval.format'] = 'Intervall måste vara ett tal som representerar minuter.';
$lang['CronTasks.!error.enabled.length'] = 'aktiverad längd får inte överstiga 1 tecken.';
$lang['CronTasks.!error.enabled.format'] = 'aktiverad måste vara ett nummer.';
$lang['CronTasks.!error.is_lang.length'] = 'is_lang längd får inte överstiga 1 tecken.';
$lang['CronTasks.!error.is_lang.format'] = 'is_lang måste vara ett tal.';
$lang['CronTasks.!error.name.empty'] = 'Vänligen ange ett namn.';
$lang['CronTasks.!error.id.exists'] = 'Ogiltigt ID för cron-uppgift.';
$lang['CronTasks.!error.run_id.exists'] = 'Ogiltigt ID för körning av cron-uppgift.';
$lang['CronTasks.!error.dir.length'] = 'Katalogens längd får inte överstiga 64 tecken.';
$lang['CronTasks.!error.task_type.format'] = 'Ogiltig uppgiftstyp. Måste vara modul, plugin eller system.';
$lang['CronTasks.!error.key.length'] = 'Längden på nyckeln för cron-uppgiften får inte överstiga 64 tecken.';
$lang['CronTasks.!error.key.unique'] = 'Den angivna cron task key är redan upptagen.';
$lang['CronTasks.crontask.description.delete_expired_password_reset_tokens'] = 'Tar bort alla tokens för återställning av lösenord som passerat utgångsdatumet från systemet.';
$lang['CronTasks.crontask.name.delete_expired_password_reset_tokens'] = 'Ta bort utgångna tokens för återställning av lösenord';
$lang['CronTasks.crontask.description.low_balance_notifications'] = 'Skickar ett meddelande till alla användare vars kreditnivåer har sjunkit under det konfigurerade tröskelvärdet.';
$lang['CronTasks.crontask.name.low_balance_notifications'] = 'Meddelanden om lågt saldo';

