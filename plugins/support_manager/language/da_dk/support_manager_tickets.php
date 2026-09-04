<?php
/**
 * Support Manager Tickets
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SupportManagerTickets.!error.by_staff_id.exists'] = 'Den medarbejder, der er angivet til at udføre redigeringen, findes ikke.';
$lang['SupportManagerTickets.!error.client_id.attached_to'] = 'Billetsvaret må ikke være fra en anden klient.';
$lang['SupportManagerTickets.!error.client_id.company'] = 'Mindst én billet tilhører ikke den samme virksomhed som den givne kunde.';
$lang['SupportManagerTickets.!error.client_id.exists'] = 'Ugyldigt klient-ID.';
$lang['SupportManagerTickets.!error.client_id.set'] = 'Billetten tilhører en anden kunde, og den tildelte kunde kan ikke ændres.';
$lang['SupportManagerTickets.!error.code.format'] = 'Billetkoden må kun indeholde cifre.';
$lang['SupportManagerTickets.!error.contact_id.exists'] = 'Den kontakt, der er valgt til dette billetsvar, findes ikke.';
$lang['SupportManagerTickets.!error.contact_id.valid'] = 'Kontakten må ikke svare på billetten uden en gyldig klient.';
$lang['SupportManagerTickets.!error.contacts.valid'] = 'Mindst én af billetkontakterne er ugyldig.';
$lang['SupportManagerTickets.!error.custom_fields.empty'] = '"%1$s" er påkrævet og må ikke være tomt.';
$lang['SupportManagerTickets.!error.date_added.format'] = 'Den tilføjede dato for billetten er i et ugyldigt datoformat.';
$lang['SupportManagerTickets.!error.date_closed.format'] = 'Billettens slutdato er i et ugyldigt datoformat.';
$lang['SupportManagerTickets.!error.date_updated.format'] = 'Den opdaterede dato for billetten er i et ugyldigt datoformat.';
$lang['SupportManagerTickets.!error.department_id.exists'] = 'Vælg venligst en gyldig afdeling.';
$lang['SupportManagerTickets.!error.details.empty'] = 'Indtast venligst nogle detaljer om denne billet.';
$lang['SupportManagerTickets.!error.email.format'] = 'Indtast venligst en gyldig e-mailadresse.';
$lang['SupportManagerTickets.!error.inline_image.base64'] = 'Inline base64-billeder er ikke tilladt. Indsæt eller træk billeder ind i editoren for at uploade dem.';
$lang['SupportManagerTickets.!error.inline_image.path'] = 'Upload-biblioteket kunne ikke oprettes.';
$lang['SupportManagerTickets.!error.inline_image.size'] = 'Billedet overskrider den maksimalt tilladte størrelse på %1$sMB.';
$lang['SupportManagerTickets.!error.inline_image.type'] = 'Ugyldig billedtype. Kun JPEG-, PNG-, GIF- og WebP-billeder er tilladt.';
$lang['SupportManagerTickets.!error.inline_image.upload'] = 'Billedet kunne ikke uploades. Prøv venligst igen.';
$lang['SupportManagerTickets.!error.inline_image.write'] = 'Billedet kunne ikke gemmes. Prøv venligst igen.';
$lang['SupportManagerTickets.!error.merge_into.itself'] = 'Billetten kan ikke flettes med sig selv.';
$lang['SupportManagerTickets.!error.priority.format'] = 'Vælg venligst en gyldig prioritet.';
$lang['SupportManagerTickets.!error.priority.valid'] = 'Vælg venligst en gyldig prioritet for denne afdeling.';
$lang['SupportManagerTickets.!error.recipients.duplicated'] = 'Mindst én af billetmodtagerne er dubleret.';
$lang['SupportManagerTickets.!error.recipients.valid'] = 'Mindst én af billetmodtagerne er ugyldig.';
$lang['SupportManagerTickets.!error.replies.notes'] = 'Notater om billetsvar må ikke opdeles i en separat billet uden også at indeholde et billetsvar.';
$lang['SupportManagerTickets.!error.replies.valid'] = 'Mindst ét billetsvar-ID er ugyldigt, eller alle svar er blevet valgt. Du skal efterlade mindst ét svar tilbage.';
$lang['SupportManagerTickets.!error.service_id.belongs'] = 'Den valgte tjeneste er ugyldig.';
$lang['SupportManagerTickets.!error.service_id.exists'] = 'Den service, der er valgt til denne billet, findes ikke.';
$lang['SupportManagerTickets.!error.staff_id.exists'] = 'Ugyldigt personale-ID.';
$lang['SupportManagerTickets.!error.status.format'] = 'Vælg venligst en gyldig status.';
$lang['SupportManagerTickets.!error.status.trash'] = 'En slettet billet kan ikke redigeres.';
$lang['SupportManagerTickets.!error.summary.empty'] = 'Indtast venligst et resumé.';
$lang['SupportManagerTickets.!error.summary.length'] = 'Resuméet må ikke være længere end 255 tegn.';
$lang['SupportManagerTickets.!error.ticket_id.exists'] = 'Ugyldigt billet-ID.';
$lang['SupportManagerTickets.!error.ticket_ids[].exists'] = 'Mindst ét billet-ID er ugyldigt.';
$lang['SupportManagerTickets.!error.tickets.department_matches'] = 'Mindst én af billetterne kunne ikke tildeles den givne afdeling, fordi den ikke tilhører den samme virksomhed.';
$lang['SupportManagerTickets.!error.tickets.service_matches'] = 'Mindst én af billetterne kunne ikke tildeles til den givne service, fordi den ikke tilhører den tilknyttede klient.';
$lang['SupportManagerTickets.!error.tickets.valid'] = 'Mindst én af de valgte billetter er ugyldig, lukket eller tilhører ikke den samme kunde som den valgte billet.';
$lang['SupportManagerTickets.!error.type.format'] = 'Vælg venligst en gyldig svartype.';
$lang['SupportManagerTickets.!error.type.new_valid'] = 'Nye billetter skal have en svartype på \'svar\'.';
$lang['SupportManagerTickets.bell.new_ticket.message'] = '%1$s åbnede ticket #%2$s: %3$s';
$lang['SupportManagerTickets.bell.new_ticket.title'] = 'Ny billet #.%1$s';
$lang['SupportManagerTickets.bell.ticket_assigned.message'] = 'Billet nr.%1$s tildelt dig: %2$s';
$lang['SupportManagerTickets.bell.ticket_assigned.title'] = 'Billet nr.%1$s Tildelt';
$lang['SupportManagerTickets.bell.ticket_updated.message'] = '%1$s svarede på billet nr.%2$s: %3$s';
$lang['SupportManagerTickets.bell.ticket_updated.title'] = 'Billet nr.%1$s Opdateret';
$lang['SupportManagerTickets.log.department_id'] = 'Afdelingen er blevet ændret til %1$s.';
$lang['SupportManagerTickets.log.priority'] = 'Prioriteten er blevet ændret til %1$s.';
$lang['SupportManagerTickets.log.service_id'] = 'Den relaterede tjeneste er blevet ændret til internt ID: #%1$s.';
$lang['SupportManagerTickets.log.status'] = 'Status er blevet ændret til %1$s.';
$lang['SupportManagerTickets.log.summary'] = 'Resuméet er blevet opdateret.';
$lang['SupportManagerTickets.log.ticket_staff_id'] = 'Tildelt til %1$s.';
$lang['SupportManagerTickets.log.unassigned'] = 'Ikke tildelt';
$lang['SupportManagerTickets.merge.reply'] = 'Denne sag er blevet slået sammen med sag #%1$s.';
$lang['SupportManagerTickets.priority.critical'] = 'Kritisk';
$lang['SupportManagerTickets.priority.emergency'] = 'Nødstilfælde';
$lang['SupportManagerTickets.priority.high'] = 'Høj';
$lang['SupportManagerTickets.priority.low'] = 'Lav';
$lang['SupportManagerTickets.priority.medium'] = 'Medium';
$lang['SupportManagerTickets.reassign_note'] = 'Denne sag blev overdraget til %1$s. Tidligere klientsvar blev omfordelt til denne klient og kan være lavet af en anden person.';
$lang['SupportManagerTickets.status.awaiting_reply'] = 'Afventer klient';
$lang['SupportManagerTickets.status.closed'] = 'Lukket';
$lang['SupportManagerTickets.status.in_progress'] = 'I gang';
$lang['SupportManagerTickets.status.on_hold'] = 'I venteposition';
$lang['SupportManagerTickets.status.open'] = 'Venter på personale';
$lang['SupportManagerTickets.status.trash'] = 'Affald';
$lang['SupportManagerTickets.type.log'] = 'Log';
$lang['SupportManagerTickets.type.note'] = 'Bemærk';
$lang['SupportManagerTickets.type.reply'] = 'Svar';

