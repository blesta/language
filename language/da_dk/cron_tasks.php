<?php
/**
 * Cron Tasks
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['CronTasks.!error.key.unique'] = 'Den angivne nøgle til cron-opgaven er allerede optaget.';
$lang['CronTasks.!error.key.length'] = 'Cron-opgavens nøglelængde må ikke overstige 64 tegn.';
$lang['CronTasks.!error.task_type.format'] = 'Ugyldig opgavetype. Skal være modul, plugin eller system.';
$lang['CronTasks.!error.dir.length'] = 'Katalogets længde må ikke overstige 64 tegn.';
$lang['CronTasks.!error.run_id.exists'] = 'Ugyldigt cron-opgavekørsels-ID.';
$lang['CronTasks.!error.id.exists'] = 'Ugyldigt cron-opgave-ID.';
$lang['CronTasks.!error.name.empty'] = 'Indtast venligst et navn.';
$lang['CronTasks.!error.is_lang.format'] = 'is_lang skal være et tal.';
$lang['CronTasks.!error.is_lang.length'] = 'is_lang-længden må ikke overstige 1 tegn.';
$lang['CronTasks.!error.enabled.format'] = 'enabled skal være et tal.';
$lang['CronTasks.!error.enabled.length'] = 'Den aktiverede længde må ikke overstige 1 tegn.';
$lang['CronTasks.!error.interval.format'] = 'Interval skal være et tal, der repræsenterer minutter.';
$lang['CronTasks.!error.time.format'] = 'Tiden er i et ugyldigt format.';
$lang['CronTasks.!error.type.format'] = 'Ugyldig cron-opgavetype. Skal være enten tid eller interval.';
$lang['CronTasks.task_type.system'] = 'System';
$lang['CronTasks.task_type.plugin'] = 'Plugin';
$lang['CronTasks.task_type.module'] = 'Modul';
$lang['CronTasks.crontask.name.create_invoice'] = 'Opret faktura';
$lang['CronTasks.crontask.description.create_invoice'] = 'Tilbagevendende fakturaer og fornyelse af tjenester faktureres gennem denne opgave, som kører en gang dagligt på det angivne tidspunkt.';
$lang['CronTasks.crontask.name.apply_invoice_late_fees'] = 'Anvend forsinkelsesgebyrer på fakturaer';
$lang['CronTasks.crontask.description.apply_invoice_late_fees'] = 'Påfører forsinkelsesgebyrer på åbne fakturaer et konfigureret antal dage efter forfald.';
$lang['CronTasks.crontask.name.autodebit'] = 'Automatisk debitering';
$lang['CronTasks.crontask.description.autodebit'] = 'Betalingskonti, der er valgt til automatisk debitering, vil blive kørt til at betale åbne fakturaer dagligt på det angivne tidspunkt.';
$lang['CronTasks.crontask.name.payment_reminders'] = 'Betalingspåmindelser';
$lang['CronTasks.crontask.description.payment_reminders'] = 'Betalingspåmindelser og rykkere sendes dagligt på det angivne tidspunkt.';
$lang['CronTasks.crontask.name.apply_payments'] = 'Anvend betalinger på åbne fakturaer';
$lang['CronTasks.crontask.description.apply_payments'] = 'Løse kreditter anvendes automatisk på åbne fakturaer med det valgte interval.';
$lang['CronTasks.crontask.name.process_service_changes'] = 'Ændringer i processervice';
$lang['CronTasks.crontask.description.process_service_changes'] = 'Betalte serviceændringer i køen (f.eks. opgraderinger) behandles med det valgte interval.';
$lang['CronTasks.crontask.name.process_renewing_services'] = 'Fornyelse af processervice';
$lang['CronTasks.crontask.description.process_renewing_services'] = 'Fornyelsestjenester, der er knyttet til moduler, fornyes med det valgte interval.';
$lang['CronTasks.crontask.name.provision_pending_services'] = 'Hensættelse Betalt Afventende tjenester';
$lang['CronTasks.crontask.description.provision_pending_services'] = 'Betalte ventende tjenester aktiveres i det valgte interval.';
$lang['CronTasks.crontask.name.cancel_scheduled_services'] = 'Aflys planlagte tjenester';
$lang['CronTasks.crontask.description.cancel_scheduled_services'] = 'Tjenester med fremtidige afbestillingsdatoer fjernes med det valgte interval.';
$lang['CronTasks.crontask.name.card_expiration_reminders'] = 'Påmindelse om kortudløb 15. i måneden';
$lang['CronTasks.crontask.description.card_expiration_reminders'] = 'Der sendes en påmindelse den 15. i måneden for kreditkort, der udløber den pågældende måned på det angivne tidspunkt.';
$lang['CronTasks.crontask.name.deliver_invoices'] = 'Levering af fakturaer';
$lang['CronTasks.crontask.description.deliver_invoices'] = 'Fakturaer, der er planlagt til levering, vil blive sendt med det valgte interval.';
$lang['CronTasks.crontask.name.backups_amazons3'] = 'Amazon S3-sikkerhedskopier';
$lang['CronTasks.crontask.description.backups_amazons3'] = 'Amazon S3-sikkerhedskopier planlægges under Systemindstillinger > Sikkerhedskopiering > Amazon S3.';
$lang['CronTasks.crontask.name.backups_sftp'] = 'SFTP-sikkerhedskopier';
$lang['CronTasks.crontask.description.backups_sftp'] = 'SFTP-sikkerhedskopier planlægges under Systemindstillinger > Sikkerhedskopiering > Sikker FTP.';
$lang['CronTasks.crontask.name.suspend_services'] = 'Suspender tjenester';
$lang['CronTasks.crontask.description.suspend_services'] = 'Forfaldne tjenester vil blive suspenderet dagligt på det angivne tidspunkt.';
$lang['CronTasks.crontask.name.exchange_rates'] = 'Opdateringer af valutakurser';
$lang['CronTasks.crontask.description.exchange_rates'] = 'Valutakurserne vil blive opdateret med det angivne interval. Det anbefales ikke at køre dette mere end to gange dagligt, da der er risiko for at blive blokeret.';
$lang['CronTasks.crontask.name.deliver_reports'] = 'Lever rapporter';
$lang['CronTasks.crontask.description.deliver_reports'] = 'A/R, Invoice Generation, Tax Liability og andre rapporter vil blive leveret dagligt på det angivne tidspunkt.';
$lang['CronTasks.crontask.name.cleanup_logs'] = 'Ryd op i logfiler';
$lang['CronTasks.crontask.description.cleanup_logs'] = 'Gamle gateway-, modul- og andre logfiler vil blive roteret dagligt afhængigt af deres opbevaringsindstillinger på det angivne tidspunkt.';
$lang['CronTasks.crontask.name.unsuspend_services'] = 'Tjenester uden ophæng';
$lang['CronTasks.crontask.description.unsuspend_services'] = 'Suspenderede tjenester, der er blevet betalt, vil blive ophævet med det valgte interval.';
$lang['CronTasks.crontask.name.transition_quotations'] = 'Overgangs-citater';
$lang['CronTasks.crontask.description.transition_quotations'] = 'Markér tilbud, der har overskredet gyldighedsdatoen, som udløbne.';
$lang['CronTasks.crontask.name.license_validation'] = 'Validering af licens';
$lang['CronTasks.crontask.description.delete_expired_password_reset_tokens'] = 'Fjerner alle tokens til nulstilling af adgangskode fra systemet efter udløbsdatoen.';
$lang['CronTasks.crontask.name.delete_expired_password_reset_tokens'] = 'Slet udløbne tokens til nulstilling af adgangskode';
$lang['CronTasks.crontask.description.low_balance_notifications'] = 'Sender en meddelelse til alle brugere, hvis kreditniveau er faldet til under den indstillede grænse.';
$lang['CronTasks.crontask.name.low_balance_notifications'] = 'Meddelelser om lav saldo';

