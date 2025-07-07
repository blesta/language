<?php
/**
 * Support Manager Tickets
 *
 * @package blesta
 * @subpackage blesta.language.ro_ro
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SupportManagerTickets.reassign_note'] = 'Acest bilet a fost reatribuit la %1$s. Răspunsurile anterioare ale clientului au fost realocate acestui client și este posibil să fi fost date de o altă persoană.';
$lang['SupportManagerTickets.log.unassigned'] = 'Neatribuit';
$lang['SupportManagerTickets.log.ticket_staff_id'] = 'Atribuit la %1$s.';
$lang['SupportManagerTickets.log.status'] = 'Statutul a fost schimbat în %1$s.';
$lang['SupportManagerTickets.log.priority'] = 'Prioritatea a fost modificată la %1$s.';
$lang['SupportManagerTickets.log.summary'] = 'Rezumatul a fost actualizat.';
$lang['SupportManagerTickets.log.department_id'] = 'Departamentul a fost schimbat în %1$s.';
$lang['SupportManagerTickets.type.log'] = 'Jurnal';
$lang['SupportManagerTickets.type.note'] = 'Notă';
$lang['SupportManagerTickets.type.reply'] = 'Răspuns';
$lang['SupportManagerTickets.status.trash'] = 'Gunoi';
$lang['SupportManagerTickets.status.closed'] = 'Închis';
$lang['SupportManagerTickets.status.on_hold'] = 'În așteptare';
$lang['SupportManagerTickets.status.in_progress'] = 'În curs de desfășurare';
$lang['SupportManagerTickets.status.awaiting_reply'] = 'În așteptarea răspunsului clientului';
$lang['SupportManagerTickets.status.open'] = 'În așteptarea răspunsului personalului';
$lang['SupportManagerTickets.priority.low'] = 'Scăzut';
$lang['SupportManagerTickets.priority.medium'] = 'Mediu';
$lang['SupportManagerTickets.priority.high'] = 'Mare';
$lang['SupportManagerTickets.priority.critical'] = 'Critică';
$lang['SupportManagerTickets.priority.emergency'] = 'Urgență';
$lang['SupportManagerTickets.merge.reply'] = 'Acest bilet a fost fuzionat în biletul #%1$s.';
$lang['SupportManagerTickets.!error.client_id.company'] = 'Cel puțin un bilet nu aparține aceleiași companii ca și clientul respectiv.';
$lang['SupportManagerTickets.!error.ticket_ids[].exists'] = 'Cel puțin un ID de bilet este invalid.';
$lang['SupportManagerTickets.!error.tickets.department_matches'] = 'Cel puțin unul dintre tichete nu a putut fi atribuit departamentului respectiv, deoarece nu aparține aceleiași companii.';
$lang['SupportManagerTickets.!error.tickets.service_matches'] = 'Cel puțin unul dintre tichete nu a putut fi atribuit serviciului dat deoarece nu aparține clientului asociat.';
$lang['SupportManagerTickets.!error.merge_into.itself'] = 'Biletul nu poate fi fuzionat cu el însuși.';
$lang['SupportManagerTickets.!error.tickets.valid'] = 'Cel puțin un bilet selectat este invalid, închis sau nu aparține aceluiași client ca și biletul ales.';
$lang['SupportManagerTickets.!error.replies.notes'] = 'Notele de răspuns la bilet nu pot fi împărțite într-un bilet separat fără a include și un răspuns la bilet.';
$lang['SupportManagerTickets.!error.replies.valid'] = 'Cel puțin un ID de răspuns la bilet nu este valabil sau toate răspunsurile au fost selectate. Trebuie să lăsați cel puțin un răspuns rămas.';
$lang['SupportManagerTickets.!error.client_id.attached_to'] = 'Este posibil ca răspunsul la bilet să nu provină de la un alt client.';
$lang['SupportManagerTickets.!error.details.empty'] = 'Vă rugăm să introduceți câteva detalii despre acest bilet.';
$lang['SupportManagerTickets.!error.type.new_valid'] = 'Biletele noi trebuie să aibă tipul de răspuns "reply".';
$lang['SupportManagerTickets.!error.type.format'] = 'Vă rugăm să selectați un tip de răspuns valid.';
$lang['SupportManagerTickets.!error.ticket_id.exists'] = 'ID-ul biletului nu este valid.';
$lang['SupportManagerTickets.!error.date_closed.format'] = 'Data de închidere a biletului este într-un format de dată invalid.';
$lang['SupportManagerTickets.!error.date_updated.format'] = 'Data de actualizare a biletului este într-un format de dată invalid.';
$lang['SupportManagerTickets.!error.date_added.format'] = 'Data adăugării biletului are un format de dată invalid.';
$lang['SupportManagerTickets.!error.status.trash'] = 'Un bilet distrus nu poate fi editat.';
$lang['SupportManagerTickets.!error.status.format'] = 'Vă rugăm să selectați un statut valabil.';
$lang['SupportManagerTickets.!error.priority.format'] = 'Vă rugăm să selectați o prioritate valabilă.';
$lang['SupportManagerTickets.!error.summary.length'] = 'Rezumatul nu trebuie să depășească 255 de caractere.';
$lang['SupportManagerTickets.!error.summary.empty'] = 'Vă rugăm să introduceți un rezumat.';
$lang['SupportManagerTickets.!error.email.format'] = 'Vă rugăm să introduceți o adresă de e-mail validă.';
$lang['SupportManagerTickets.!error.client_id.set'] = 'Biletul aparține unui alt client, iar clientul atribuit nu poate fi schimbat.';
$lang['SupportManagerTickets.!error.client_id.exists'] = 'ID client invalid.';
$lang['SupportManagerTickets.!error.service_id.belongs'] = 'Serviciul selectat nu este valid.';
$lang['SupportManagerTickets.!error.service_id.exists'] = 'Serviciul selectat pentru acest bilet nu există.';
$lang['SupportManagerTickets.!error.by_staff_id.exists'] = 'Membrul personalului stabilit pentru a efectua modificarea nu există.';
$lang['SupportManagerTickets.!error.contact_id.valid'] = 'Persoana de contact nu poate răspunde la bilet fără un client valid.';
$lang['SupportManagerTickets.!error.contact_id.exists'] = 'Persoana de contact selectată pentru acest răspuns la bilet nu există.';
$lang['SupportManagerTickets.!error.staff_id.exists'] = 'ID-ul personalului nu este valid.';
$lang['SupportManagerTickets.!error.department_id.exists'] = 'Vă rugăm să selectați un departament valid.';
$lang['SupportManagerTickets.!error.code.format'] = 'Codul biletului trebuie să conțină numai cifre.';
$lang['SupportManagerTickets.!error.priority.valid'] = 'Vă rugăm să selectați o prioritate valabilă pentru acest departament.';
$lang['SupportManagerTickets.!error.contacts.valid'] = 'Cel puțin unul dintre contactele biletului este invalid.';
$lang['SupportManagerTickets.!error.recipients.valid'] = 'Cel puțin unul dintre destinatarii biletului este invalid.';
$lang['SupportManagerTickets.!error.recipients.duplicated'] = 'Cel puțin unul dintre destinatarii biletelor este duplicat.';
$lang['SupportManagerTickets.log.service_id'] = 'Serviciul aferent a fost schimbat în ID intern: #%1$s.';
$lang['SupportManagerTickets.!error.custom_fields.empty'] = '"%1$s" este obligatoriu și nu poate fi gol.';

