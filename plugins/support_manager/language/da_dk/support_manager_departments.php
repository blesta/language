<?php
/**
 * Support Manager Departments
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SupportManagerDepartments.!error.company_id.exists'] = 'Ugyldigt virksomheds-ID.';
$lang['SupportManagerDepartments.!error.name.empty'] = 'Indtast venligst et navn til denne afdeling.';
$lang['SupportManagerDepartments.!error.description.empty'] = 'Indtast venligst en beskrivelse.';
$lang['SupportManagerDepartments.!error.email.format'] = 'Indtast venligst en gyldig e-mailadresse.';
$lang['SupportManagerDepartments.!error.method.format'] = 'Ugyldig metodetype.';
$lang['SupportManagerDepartments.!error.method.imap'] = 'PHP IMAP-udvidelsen er nødvendig for at downloade beskeder via POP3 eller IMAP.';
$lang['SupportManagerDepartments.!error.method.mailparse'] = 'PHP Mailparse PECL-udvidelsen er nødvendig for at analysere e-mail-billetter.';
$lang['SupportManagerDepartments.!error.default_priority.format'] = 'Ugyldig standardprioritetstype.';
$lang['SupportManagerDepartments.!error.host.format'] = 'Indtast venligst et gyldigt værtsnavn.';
$lang['SupportManagerDepartments.!error.host.length'] = 'Værtsnavnet må ikke være længere end 128 tegn.';
$lang['SupportManagerDepartments.!error.user.format'] = 'Indtast venligst et brugernavn.';
$lang['SupportManagerDepartments.!error.user.length'] = 'Brugernavnet må ikke være længere end 64 tegn.';
$lang['SupportManagerDepartments.!error.password.format'] = 'Indtast venligst en adgangskode.';
$lang['SupportManagerDepartments.!error.port.format'] = 'Indtast venligst et portnummer.';
$lang['SupportManagerDepartments.!error.port.length'] = 'Porten må ikke være længere end 6 cifre.';
$lang['SupportManagerDepartments.!error.service.format'] = 'Vælg venligst en gyldig servicetype.';
$lang['SupportManagerDepartments.!error.security.format'] = 'Vælg venligst en gyldig sikkerhedstype.';
$lang['SupportManagerDepartments.!error.mark_messages.format'] = 'Vælg en gyldig meddelelsestype for at markere meddelelser.';
$lang['SupportManagerDepartments.!error.mark_messages.valid'] = 'Beskeder, der bruger POP3, kan kun markeres som slettede.';
$lang['SupportManagerDepartments.!error.clients_only.format'] = 'Om klienter skal have lov til at åbne eller svare på tickets, skal sættes til 0 eller 1.';
$lang['SupportManagerDepartments.!error.require_captcha.format'] = 'Om der skal kræves menneskelig bekræftelse, skal sættes til 0 eller 1.';
$lang['SupportManagerDepartments.!error.override_from_email.format'] = 'Om denne afdelings e-mailadresse skal bruges som fra-adresse i e-mailskabeloner, skal indstilles til 0 eller 1.';
$lang['SupportManagerDepartments.!error.send_ticket_received.format'] = 'Om der skal sendes e-mail med billetbekræftelse til denne afdeling, skal indstilles til 0 eller 1.';
$lang['SupportManagerDepartments.!error.close_ticket_interval.format'] = 'Vælg venligst et gyldigt lukket billetinterval.';
$lang['SupportManagerDepartments.!error.delete_ticket_interval.format'] = 'Vælg venligst et gyldigt interval for sletning af billet.';
$lang['SupportManagerDepartments.!error.reminder_ticket_interval.format'] = 'Vælg venligst et gyldigt interval for påmindelsesbilletter.';
$lang['SupportManagerDepartments.!error.reminder_ticket_status.format'] = 'Vælg venligst en gyldig billetpåmindelsesstatus.';
$lang['SupportManagerDepartments.!error.reminder_ticket_priority.format'] = 'Vælg venligst en gyldig billetpåmindelsesprioritet.';
$lang['SupportManagerDepartments.!error.include_attachments.format'] = 'Om billetvedhæftninger skal inkluderes, skal sættes til 0 eller 1.';
$lang['SupportManagerDepartments.!error.attachment_types.length'] = 'Listen over vedhæftningstyper må ikke overstige 255 tegn i længden.';
$lang['SupportManagerDepartments.!error.max_attachment_size.format'] = 'Den maksimale vedhæftningsstørrelse skal være en numerisk værdi.';
$lang['SupportManagerDepartments.!error.response_id.format'] = 'Vælg venligst et gyldigt auto-close-svar.';
$lang['SupportManagerDepartments.!error.status.format'] = 'Ugyldig statustype.';
$lang['SupportManagerDepartments.!error.department_id.exists'] = 'Ugyldigt afdelings-ID.';
$lang['SupportManagerDepartments.!error.label.empty'] = 'Indtast venligst en etiket.';
$lang['SupportManagerDepartments.!error.visibility.format'] = 'Vælg venligst en gyldig synlighedsstatus.';
$lang['SupportManagerDepartments.!error.type.format'] = 'Vælg venligst en gyldig felttype.';
$lang['SupportManagerDepartments.!error.client_add.format'] = 'Om klienten skal have lov til at tilføje, skal sættes til 0 eller 1.';
$lang['SupportManagerDepartments.!error.encrypted.format'] = 'Om feltdataene skal krypteres, skal indstilles til 0 eller 1.';
$lang['SupportManagerDepartments.!error.auto_delete.format'] = 'Om feltdata skal slettes automatisk, når en billet lukkes, skal indstilles til 0 eller 1.';
$lang['SupportManagerDepartments.!error.department_id.has_tickets'] = 'Afdelingen kunne ikke slettes, fordi den i øjeblikket har billetter tilknyttet.';
$lang['SupportManagerDepartments.methods.none'] = 'Ingen';
$lang['SupportManagerDepartments.methods.pipe'] = 'Rørføring';
$lang['SupportManagerDepartments.methods.pop3'] = 'POP3';
$lang['SupportManagerDepartments.methods.imap'] = 'IMAP';
$lang['SupportManagerDepartments.statuses.hidden'] = 'Skjult';
$lang['SupportManagerDepartments.statuses.visible'] = 'Synlig';
$lang['SupportManagerDepartments.priorities.emergency'] = 'Nødstilfælde';
$lang['SupportManagerDepartments.priorities.critical'] = 'Kritisk';
$lang['SupportManagerDepartments.priorities.high'] = 'Høj';
$lang['SupportManagerDepartments.priorities.medium'] = 'Medium';
$lang['SupportManagerDepartments.priorities.low'] = 'Lav';
$lang['SupportManagerDepartments.security_types.none'] = 'Ingen';
$lang['SupportManagerDepartments.security_types.ssl'] = 'SSL';
$lang['SupportManagerDepartments.security_types.tls'] = 'TLS';
$lang['SupportManagerDepartments.message_types.read'] = 'Læs';
$lang['SupportManagerDepartments.message_types.deleted'] = 'Slettet';
$lang['SupportManagerDepartments.field_types.checkbox'] = 'Afkrydsningsfelt';
$lang['SupportManagerDepartments.field_types.radio'] = 'Radio';
$lang['SupportManagerDepartments.field_types.select'] = 'Drop-down';
$lang['SupportManagerDepartments.field_types.quantity'] = 'Antal';
$lang['SupportManagerDepartments.field_types.text'] = 'Tekst';
$lang['SupportManagerDepartments.field_types.textarea'] = 'Tekstområde';
$lang['SupportManagerDepartments.field_types.password'] = 'Adgangskode';
$lang['SupportManagerDepartments.visibility_options.client'] = 'Kunde og personale';
$lang['SupportManagerDepartments.visibility_options.staff'] = 'Kun for personale';
$lang['SupportManagerDepartments.ticket_intervals.day'] = '1 dag';
$lang['SupportManagerDepartments.ticket_intervals.days'] = '%1$s Dage';
$lang['SupportManagerDepartments.reminder_intervals.hour'] = '1 time';
$lang['SupportManagerDepartments.reminder_intervals.hours'] = '%1$s Timer';
$lang['SupportManagerDepartments.reminder_intervals.minutes'] = '%1$s minutter';
$lang['SupportManagerDepartments.!error.priorities[].format'] = 'En eller flere prioriteter er ugyldige.';
$lang['SupportManagerDepartments.!error.priorities[].empty'] = 'Vælg mindst én prioritet.';
$lang['SupportManagerDepartments.visibility_options.client_only'] = 'Kun for klienter';
$lang['SupportManagerDepartments.field_types.emergency'] = 'Eskaler til nødstilfælde';
$lang['SupportManagerDepartments.!error.required.format'] = 'Om det skal kræves, at det arkiverede skal indstilles til 0 eller 1.';
$lang['SupportManagerDepartments.providers.microsoft'] = 'Microsoft';
$lang['SupportManagerDepartments.providers.google'] = 'Google';
$lang['SupportManagerDepartments.methods.oauth2'] = 'OAuth 2.0';

