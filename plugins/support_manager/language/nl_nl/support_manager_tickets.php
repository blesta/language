<?php
/**
 * Support Manager Tickets
 *
 * @package blesta
 * @subpackage blesta.language.nl_nl
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SupportManagerTickets.reassign_note'] = 'Dit ticket is opnieuw toegewezen aan %1$s. Eerdere antwoorden van klanten werden opnieuw toegewezen aan deze klant en kunnen door een andere persoon zijn gemaakt.';
$lang['SupportManagerTickets.log.unassigned'] = 'Niet toegewezen';
$lang['SupportManagerTickets.log.ticket_staff_id'] = 'Toegewezen aan %1$s.';
$lang['SupportManagerTickets.log.status'] = 'De status is gewijzigd in %1$s.';
$lang['SupportManagerTickets.log.priority'] = 'De prioriteit is gewijzigd in %1$s.';
$lang['SupportManagerTickets.log.summary'] = 'De samenvatting is bijgewerkt.';
$lang['SupportManagerTickets.log.department_id'] = 'De afdeling is gewijzigd in %1$s.';
$lang['SupportManagerTickets.type.log'] = 'Log';
$lang['SupportManagerTickets.type.note'] = 'Opmerking';
$lang['SupportManagerTickets.type.reply'] = 'Antwoord';
$lang['SupportManagerTickets.status.trash'] = 'Vuilnis';
$lang['SupportManagerTickets.status.closed'] = 'Gesloten';
$lang['SupportManagerTickets.status.on_hold'] = 'In de wacht';
$lang['SupportManagerTickets.status.in_progress'] = 'In uitvoering';
$lang['SupportManagerTickets.status.awaiting_reply'] = 'In afwachting van antwoord van klant';
$lang['SupportManagerTickets.status.open'] = 'In afwachting van antwoord';
$lang['SupportManagerTickets.priority.low'] = 'Laag';
$lang['SupportManagerTickets.priority.medium'] = 'Medium';
$lang['SupportManagerTickets.priority.high'] = 'Hoog';
$lang['SupportManagerTickets.priority.critical'] = 'Kritisch';
$lang['SupportManagerTickets.priority.emergency'] = 'Noodgevallen';
$lang['SupportManagerTickets.merge.reply'] = 'Dit ticket is samengevoegd in ticket #%1$s.';
$lang['SupportManagerTickets.!error.client_id.company'] = 'Ten minste één ticket is niet van hetzelfde bedrijf als de opgegeven klant.';
$lang['SupportManagerTickets.!error.ticket_ids[].exists'] = 'Ten minste één ticket-ID is ongeldig.';
$lang['SupportManagerTickets.!error.tickets.department_matches'] = 'Ten minste één van de tickets kon niet worden toegewezen aan de opgegeven afdeling omdat deze niet tot hetzelfde bedrijf behoort.';
$lang['SupportManagerTickets.!error.tickets.service_matches'] = 'Ten minste één van de tickets kon niet worden toegewezen aan de opgegeven dienst omdat het niet bij de bijbehorende klant hoort.';
$lang['SupportManagerTickets.!error.merge_into.itself'] = 'Het ticket mag niet met zichzelf worden samengevoegd.';
$lang['SupportManagerTickets.!error.tickets.valid'] = 'Ten minste één geselecteerd ticket is ongeldig, gesloten of behoort niet tot dezelfde klant als het gekozen ticket.';
$lang['SupportManagerTickets.!error.replies.notes'] = 'Ticketbeantwoordingsnotities mogen niet worden opgesplitst in een apart ticket zonder ook een ticketantwoord op te nemen.';
$lang['SupportManagerTickets.!error.replies.valid'] = 'Ten minste één ticketantwoord-ID is ongeldig of alle antwoorden zijn geselecteerd. Er moet nog minstens één antwoord overblijven.';
$lang['SupportManagerTickets.!error.client_id.attached_to'] = 'Het ticketantwoord mag niet van een andere klant zijn.';
$lang['SupportManagerTickets.!error.details.empty'] = 'Voer enkele details over dit ticket in.';
$lang['SupportManagerTickets.!error.type.new_valid'] = 'Nieuwe tickets moeten een antwoordtype \'reply\' hebben.';
$lang['SupportManagerTickets.!error.type.format'] = 'Selecteer een geldig type antwoord.';
$lang['SupportManagerTickets.!error.ticket_id.exists'] = 'Ongeldig ticket ID.';
$lang['SupportManagerTickets.!error.date_closed.format'] = 'De sluitingsdatum van het ticket heeft een ongeldige datumnotatie.';
$lang['SupportManagerTickets.!error.date_updated.format'] = 'De bijgewerkte datum van het ticket heeft een ongeldige datumnotatie.';
$lang['SupportManagerTickets.!error.date_added.format'] = 'De datum waarop het ticket werd toegevoegd heeft een ongeldige datumnotatie.';
$lang['SupportManagerTickets.!error.status.trash'] = 'Een weggegooid ticket kan niet worden bewerkt.';
$lang['SupportManagerTickets.!error.status.format'] = 'Selecteer een geldige status.';
$lang['SupportManagerTickets.!error.priority.format'] = 'Selecteer een geldige prioriteit.';
$lang['SupportManagerTickets.!error.summary.length'] = 'De samenvatting mag niet langer zijn dan 255 tekens.';
$lang['SupportManagerTickets.!error.summary.empty'] = 'Voer een samenvatting in.';
$lang['SupportManagerTickets.!error.email.format'] = 'Voer een geldig e-mailadres in.';
$lang['SupportManagerTickets.!error.client_id.set'] = 'Het ticket behoort toe aan een andere klant en de toegewezen klant kan niet worden gewijzigd.';
$lang['SupportManagerTickets.!error.client_id.exists'] = 'Ongeldig client-ID.';
$lang['SupportManagerTickets.!error.service_id.belongs'] = 'De geselecteerde service is ongeldig.';
$lang['SupportManagerTickets.!error.service_id.exists'] = 'De geselecteerde service voor dit ticket bestaat niet.';
$lang['SupportManagerTickets.!error.by_staff_id.exists'] = 'Het personeelslid dat is ingesteld om de bewerking uit te voeren, bestaat niet.';
$lang['SupportManagerTickets.!error.contact_id.valid'] = 'De contactpersoon mag het ticket niet beantwoorden zonder geldige klant.';
$lang['SupportManagerTickets.!error.contact_id.exists'] = 'De contactpersoon die is geselecteerd voor dit ticket bestaat niet.';
$lang['SupportManagerTickets.!error.staff_id.exists'] = 'Ongeldig personeels-ID.';
$lang['SupportManagerTickets.!error.department_id.exists'] = 'Selecteer een geldige afdeling.';
$lang['SupportManagerTickets.!error.code.format'] = 'De ticketcode mag alleen cijfers bevatten.';
$lang['SupportManagerTickets.!error.priority.valid'] = 'Selecteer een geldige prioriteit voor deze afdeling.';
$lang['SupportManagerTickets.!error.contacts.valid'] = 'Ten minste één van de ticketcontacten is ongeldig.';
$lang['SupportManagerTickets.!error.recipients.valid'] = 'Ten minste één van de ontvangers van het ticket is ongeldig.';
$lang['SupportManagerTickets.!error.recipients.duplicated'] = 'Ten minste één van de ontvangers van het ticket is dubbel.';
$lang['SupportManagerTickets.log.service_id'] = 'De gerelateerde service is gewijzigd in interne ID: #%1$s.';
$lang['SupportManagerTickets.!error.custom_fields.empty'] = '"%1$s" is vereist en kan niet leeg zijn.';

