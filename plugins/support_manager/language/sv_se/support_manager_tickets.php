<?php
/**
 * Support Manager Tickets
 *
 * @package blesta
 * @subpackage blesta.language.sv_se
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SupportManagerTickets.reassign_note'] = 'Detta ärende har omfördelats till %1$s. Tidigare svar från kunden omfördelades till den här kunden och kan ha gjorts av en annan person.';
$lang['SupportManagerTickets.log.unassigned'] = 'Ej tilldelad';
$lang['SupportManagerTickets.log.ticket_staff_id'] = 'Tilldelad till %1$s.';
$lang['SupportManagerTickets.log.status'] = 'Status har ändrats till %1$s.';
$lang['SupportManagerTickets.log.priority'] = 'Prioriteten har ändrats till %1$s.';
$lang['SupportManagerTickets.log.summary'] = 'Sammanfattningen har uppdaterats.';
$lang['SupportManagerTickets.log.department_id'] = 'Avdelningen har ändrats till %1$s.';
$lang['SupportManagerTickets.type.log'] = 'Logg';
$lang['SupportManagerTickets.type.note'] = 'Anmärkning';
$lang['SupportManagerTickets.type.reply'] = 'Svar';
$lang['SupportManagerTickets.status.trash'] = 'Skräp';
$lang['SupportManagerTickets.status.closed'] = 'Stängt';
$lang['SupportManagerTickets.status.on_hold'] = 'På vänt';
$lang['SupportManagerTickets.status.in_progress'] = 'Pågående';
$lang['SupportManagerTickets.status.awaiting_reply'] = 'Inväntar svar från kunden';
$lang['SupportManagerTickets.status.open'] = 'Inväntar svar från personalen';
$lang['SupportManagerTickets.priority.low'] = 'Låg';
$lang['SupportManagerTickets.priority.medium'] = 'Medium';
$lang['SupportManagerTickets.priority.high'] = 'Hög';
$lang['SupportManagerTickets.priority.critical'] = 'Kritisk';
$lang['SupportManagerTickets.priority.emergency'] = 'Nödläge';
$lang['SupportManagerTickets.merge.reply'] = 'Detta ärende har slagits samman med ärende #%1$s.';
$lang['SupportManagerTickets.!error.client_id.company'] = 'Minst en biljett tillhör inte samma företag som den angivna kunden.';
$lang['SupportManagerTickets.!error.ticket_ids[].exists'] = 'Minst ett biljett-ID är ogiltigt.';
$lang['SupportManagerTickets.!error.tickets.department_matches'] = 'Minst en av biljetterna kunde inte tilldelas den angivna avdelningen eftersom den inte tillhör samma företag.';
$lang['SupportManagerTickets.!error.tickets.service_matches'] = 'Minst en av biljetterna kunde inte tilldelas den givna tjänsten eftersom den inte tillhör den associerade kunden.';
$lang['SupportManagerTickets.!error.merge_into.itself'] = 'Ärendet får inte slås samman med sig självt.';
$lang['SupportManagerTickets.!error.tickets.valid'] = 'Minst en vald biljett är ogiltig, stängd eller tillhör inte samma kund som den valda biljetten.';
$lang['SupportManagerTickets.!error.replies.notes'] = 'Svarsanteckningar får inte delas upp i ett separat ärende utan att även innehålla ett svar på ärendet.';
$lang['SupportManagerTickets.!error.replies.valid'] = 'Minst ett ID för biljettsvar är ogiltigt, eller så har alla svar valts. Du måste lämna minst ett svar kvar.';
$lang['SupportManagerTickets.!error.client_id.attached_to'] = 'Det är inte säkert att biljettsvaret kommer från en annan kund.';
$lang['SupportManagerTickets.!error.details.empty'] = 'Vänligen ange några detaljer om denna biljett.';
$lang['SupportManagerTickets.!error.type.new_valid'] = 'Nya ärenden måste ha en svarstyp av typen "svar".';
$lang['SupportManagerTickets.!error.type.format'] = 'Välj en giltig svarstyp.';
$lang['SupportManagerTickets.!error.ticket_id.exists'] = 'Ogiltigt biljett-ID.';
$lang['SupportManagerTickets.!error.date_closed.format'] = 'Biljettens stängningsdatum är i ett ogiltigt datumformat.';
$lang['SupportManagerTickets.!error.date_updated.format'] = 'Biljettens uppdateringsdatum är i ett ogiltigt datumformat.';
$lang['SupportManagerTickets.!error.date_added.format'] = 'Datumet då biljetten lades till är i ett ogiltigt datumformat.';
$lang['SupportManagerTickets.!error.status.trash'] = 'En trasig biljett kan inte redigeras.';
$lang['SupportManagerTickets.!error.status.format'] = 'Vänligen välj en giltig status.';
$lang['SupportManagerTickets.!error.priority.format'] = 'Vänligen välj en giltig prioritet.';
$lang['SupportManagerTickets.!error.summary.length'] = 'Sammanfattningen får inte vara längre än 255 tecken.';
$lang['SupportManagerTickets.!error.summary.empty'] = 'Vänligen ange en sammanfattning.';
$lang['SupportManagerTickets.!error.email.format'] = 'Ange en giltig e-postadress.';
$lang['SupportManagerTickets.!error.client_id.set'] = 'Biljetten tillhör en annan kund och den tilldelade kunden kan inte ändras.';
$lang['SupportManagerTickets.!error.client_id.exists'] = 'Ogiltigt klient-ID.';
$lang['SupportManagerTickets.!error.service_id.belongs'] = 'Den valda tjänsten är ogiltig.';
$lang['SupportManagerTickets.!error.service_id.exists'] = 'Den tjänst som valts för denna biljett finns inte.';
$lang['SupportManagerTickets.!error.by_staff_id.exists'] = 'Den medarbetare som ska utföra redigeringen finns inte.';
$lang['SupportManagerTickets.!error.contact_id.valid'] = 'Kontaktpersonen får inte svara på biljetten utan en giltig klient.';
$lang['SupportManagerTickets.!error.contact_id.exists'] = 'Den kontakt som valts för detta ärende finns inte.';
$lang['SupportManagerTickets.!error.staff_id.exists'] = 'Ogiltigt personal-ID.';
$lang['SupportManagerTickets.!error.department_id.exists'] = 'Vänligen välj en giltig avdelning.';
$lang['SupportManagerTickets.!error.code.format'] = 'Biljettkoden får endast innehålla siffror.';

