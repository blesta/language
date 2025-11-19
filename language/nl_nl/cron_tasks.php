<?php
/**
 * Cron Tasks
 *
 * @package blesta
 * @subpackage blesta.language.nl_nl
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['CronTasks.crontask.name.license_validation'] = 'Licentie validatie';
$lang['CronTasks.crontask.description.transition_quotations'] = 'Markeer offertes waarvan de geldigheidsdatum is verstreken als vervallen';
$lang['CronTasks.crontask.name.transition_quotations'] = 'Overgang Citaten';
$lang['CronTasks.crontask.description.unsuspend_services'] = 'Opgeschorte diensten die zijn betaald, worden op het geselecteerde interval weer opgeheven.';
$lang['CronTasks.crontask.name.unsuspend_services'] = 'Uitgestelde services';
$lang['CronTasks.crontask.description.cleanup_logs'] = 'Oude gateway-, module- en andere logs worden dagelijks geroteerd, afhankelijk van hun retentie-instellingen op het opgegeven tijdstip.';
$lang['CronTasks.crontask.name.cleanup_logs'] = 'Logboeken opruimen';
$lang['CronTasks.crontask.description.deliver_reports'] = 'A/R, Factuurgeneratie, Belastingverplichting en andere rapporten worden dagelijks op het opgegeven tijdstip geleverd.';
$lang['CronTasks.crontask.name.deliver_reports'] = 'Rapporten leveren';
$lang['CronTasks.crontask.description.exchange_rates'] = 'De wisselkoersen worden bijgewerkt met het opgegeven interval. Het wordt niet aangeraden om dit meer dan twee keer per dag uit te voeren vanwege het risico om geblokkeerd te worden.';
$lang['CronTasks.crontask.name.exchange_rates'] = 'Wisselkoers updates';
$lang['CronTasks.crontask.description.suspend_services'] = 'Achterstallige services worden dagelijks opgeschort op het aangegeven tijdstip.';
$lang['CronTasks.crontask.name.suspend_services'] = 'Services opschorten';
$lang['CronTasks.crontask.description.backups_sftp'] = 'SFTP-back-ups worden gepland onder Systeeminstellingen > Back-up > Beveiligde FTP.';
$lang['CronTasks.crontask.name.backups_sftp'] = 'SFTP-back-ups';
$lang['CronTasks.crontask.description.backups_amazons3'] = 'Amazon S3 back-ups worden gepland onder Systeeminstellingen > Back-up > Amazon S3.';
$lang['CronTasks.crontask.name.backups_amazons3'] = 'Amazon S3 Back-ups';
$lang['CronTasks.crontask.description.deliver_invoices'] = 'Facturen die zijn gepland voor levering worden verzonden op het geselecteerde interval.';
$lang['CronTasks.crontask.name.deliver_invoices'] = 'Facturen aanleveren';
$lang['CronTasks.crontask.description.card_expiration_reminders'] = 'Op de 15e van de maand wordt een herinnering verstuurd voor creditcards die die maand op het aangegeven tijdstip verlopen.';
$lang['CronTasks.crontask.name.card_expiration_reminders'] = 'Herinneringen kaartverloop 15e van de maand';
$lang['CronTasks.crontask.description.cancel_scheduled_services'] = 'Services met toekomstige annuleringsdatums worden verwijderd op het geselecteerde interval.';
$lang['CronTasks.crontask.name.cancel_scheduled_services'] = 'Geplande services annuleren';
$lang['CronTasks.crontask.description.provision_pending_services'] = 'Betaalde services in afwachting worden geactiveerd op het geselecteerde interval.';
$lang['CronTasks.crontask.name.provision_pending_services'] = 'Betaalde diensten in afwachting van levering';
$lang['CronTasks.crontask.description.process_renewing_services'] = 'Vernieuwende services die zijn gekoppeld aan modules worden vernieuwd met het geselecteerde interval.';
$lang['CronTasks.crontask.name.process_renewing_services'] = 'Proces Service Verlengingen';
$lang['CronTasks.crontask.description.process_service_changes'] = 'Betaalde servicewijzigingen in de wachtrij (bijv. upgrades) worden verwerkt op het geselecteerde interval.';
$lang['CronTasks.crontask.name.process_service_changes'] = 'Procesdienst Wijzigingen';
$lang['CronTasks.crontask.description.apply_payments'] = 'Losse credits worden automatisch toegepast op openstaande facturen met het geselecteerde interval.';
$lang['CronTasks.crontask.name.apply_payments'] = 'Betalingen toepassen op openstaande facturen';
$lang['CronTasks.crontask.description.payment_reminders'] = 'Betalingsherinneringen en te late kennisgevingen worden dagelijks op het aangegeven tijdstip verstuurd.';
$lang['CronTasks.crontask.name.payment_reminders'] = 'Betalingsherinneringen';
$lang['CronTasks.crontask.description.autodebit'] = 'Betaalrekeningen die zijn geselecteerd voor automatische afschrijving worden dagelijks op het opgegeven tijdstip uitgevoerd om openstaande facturen te betalen.';
$lang['CronTasks.crontask.name.autodebit'] = 'Automatische incasso';
$lang['CronTasks.crontask.description.apply_invoice_late_fees'] = 'Laat kosten in rekening brengen voor openstaande facturen een geconfigureerd aantal dagen na de vervaldatum.';
$lang['CronTasks.crontask.name.apply_invoice_late_fees'] = 'Factuur te laat betalen';
$lang['CronTasks.crontask.description.create_invoice'] = 'Terugkerende facturen en verlengende diensten worden gefactureerd via deze taak, die eenmaal per dag op het opgegeven tijdstip wordt uitgevoerd.';
$lang['CronTasks.crontask.name.create_invoice'] = 'Factuur maken';
$lang['CronTasks.task_type.module'] = 'Module';
$lang['CronTasks.task_type.plugin'] = 'Plugin';
$lang['CronTasks.task_type.system'] = 'Systeem';
$lang['CronTasks.!error.type.format'] = 'Ongeldig cron taak type. Moet tijd of interval zijn.';
$lang['CronTasks.!error.time.format'] = 'Tijd heeft een ongeldig formaat.';
$lang['CronTasks.!error.interval.format'] = 'Interval moet een getal zijn dat minuten voorstelt.';
$lang['CronTasks.!error.enabled.length'] = 'ingeschakelde lengte mag niet langer zijn dan 1 teken.';
$lang['CronTasks.!error.enabled.format'] = 'ingeschakeld moet een getal zijn.';
$lang['CronTasks.!error.is_lang.length'] = 'is_lang mag niet langer zijn dan 1 karakter.';
$lang['CronTasks.!error.is_lang.format'] = 'is_lang moet een getal zijn.';
$lang['CronTasks.!error.name.empty'] = 'Voer een naam in.';
$lang['CronTasks.!error.id.exists'] = 'Ongeldige crontaak-ID.';
$lang['CronTasks.!error.run_id.exists'] = 'Ongeldige crontaak run ID.';
$lang['CronTasks.!error.dir.length'] = 'De directory mag niet langer zijn dan 64 tekens.';
$lang['CronTasks.!error.task_type.format'] = 'Ongeldig taaktype. Moet module, plugin of systeem zijn.';
$lang['CronTasks.!error.key.length'] = 'De sleutellengte van de crontaak mag niet langer zijn dan 64 tekens.';
$lang['CronTasks.!error.key.unique'] = 'De opgegeven crontaaksleutel is al bezet.';
$lang['CronTasks.crontask.description.delete_expired_password_reset_tokens'] = 'Verwijdert alle wachtwoord reset tokens waarvan de vervaldatum is verstreken uit het systeem.';
$lang['CronTasks.crontask.name.delete_expired_password_reset_tokens'] = 'Verlopen wachtwoord-reset tokens verwijderen';
$lang['CronTasks.crontask.description.low_balance_notifications'] = 'Stuurt een bericht naar alle gebruikers waarvan het kredietniveau onder de ingestelde drempel is gezakt.';
$lang['CronTasks.crontask.name.low_balance_notifications'] = 'Meldingen laag saldo';

