<?php
/**
 * Support Manager Tickets
 *
 * @package blesta
 * @subpackage blesta.language.cs_cz
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SupportManagerTickets.reassign_note'] = 'Tento tip byl přeřazen do %1$s. Předchozí odpovědi klienta byly znovu přiřazeny tomuto klientovi a mohly být provedeny jinou osobou.';
$lang['SupportManagerTickets.log.unassigned'] = 'Nepřiřazeno';
$lang['SupportManagerTickets.log.ticket_staff_id'] = 'Přiřazeno k %1$s.';
$lang['SupportManagerTickets.log.status'] = 'Stav byl změněn na %1$s.';
$lang['SupportManagerTickets.log.priority'] = 'Priorita byla změněna na %1$s.';
$lang['SupportManagerTickets.log.summary'] = 'Shrnutí bylo aktualizováno.';
$lang['SupportManagerTickets.log.department_id'] = 'Oddělení bylo změněno na %1$s.';
$lang['SupportManagerTickets.type.log'] = 'Přihlásit se';
$lang['SupportManagerTickets.type.note'] = 'Poznámka';
$lang['SupportManagerTickets.type.reply'] = 'Odpovědět';
$lang['SupportManagerTickets.status.trash'] = 'Odpadkový koš';
$lang['SupportManagerTickets.status.closed'] = 'Uzavřeno';
$lang['SupportManagerTickets.status.on_hold'] = 'Na počkání';
$lang['SupportManagerTickets.status.in_progress'] = 'Probíhá';
$lang['SupportManagerTickets.status.awaiting_reply'] = 'Čekáme na odpověď klienta';
$lang['SupportManagerTickets.status.open'] = 'Čekáme na odpověď zaměstnanců';
$lang['SupportManagerTickets.priority.low'] = 'Nízká';
$lang['SupportManagerTickets.priority.medium'] = 'Střední';
$lang['SupportManagerTickets.priority.high'] = 'Vysoká';
$lang['SupportManagerTickets.priority.critical'] = 'Kritické';
$lang['SupportManagerTickets.priority.emergency'] = 'Pohotovostní služba';
$lang['SupportManagerTickets.merge.reply'] = 'Tento tip byl sloučen do tipu #%1$s.';
$lang['SupportManagerTickets.!error.client_id.company'] = 'Alespoň jeden tip nepatří stejné společnosti jako daný klient.';
$lang['SupportManagerTickets.!error.ticket_ids[].exists'] = 'Alespoň jeden identifikátor tipu je neplatný.';
$lang['SupportManagerTickets.!error.tickets.department_matches'] = 'Alespoň jeden z tipů nebylo možné přiřadit k danému oddělení, protože nepatří do stejné společnosti.';
$lang['SupportManagerTickets.!error.tickets.service_matches'] = 'Alespoň jeden z tipů nebylo možné přiřadit k dané službě, protože nepatří přiřazenému klientovi.';
$lang['SupportManagerTickets.!error.merge_into.itself'] = 'Tiket nesmí být sloučen sám se sebou.';
$lang['SupportManagerTickets.!error.tickets.valid'] = 'Alespoň jeden vybraný tip je neplatný, uzavřený nebo nepatří stejnému klientovi jako vybraný tip.';
$lang['SupportManagerTickets.!error.replies.notes'] = 'Poznámky k odpovědím na tipy nelze rozdělit do samostatného tipu, aniž by byla zahrnuta i odpověď na tip.';
$lang['SupportManagerTickets.!error.replies.valid'] = 'Alespoň jedno ID odpovědi tipu je neplatné nebo byly vybrány všechny odpovědi. Musíte ponechat alespoň jednu zbývající odpověď.';
$lang['SupportManagerTickets.!error.client_id.attached_to'] = 'Odpověď na tiket nemusí být od jiného klienta.';
$lang['SupportManagerTickets.!error.details.empty'] = 'Zadejte prosím některé podrobnosti o tomto tipu.';
$lang['SupportManagerTickets.!error.type.new_valid'] = 'Nové tipy musí mít typ odpovědi "odpovědět".';
$lang['SupportManagerTickets.!error.type.format'] = 'Vyberte platný typ odpovědi.';
$lang['SupportManagerTickets.!error.ticket_id.exists'] = 'Neplatné ID tipu.';
$lang['SupportManagerTickets.!error.date_closed.format'] = 'Datum uzávěrky tipu je v nesprávném formátu.';
$lang['SupportManagerTickets.!error.date_updated.format'] = 'Datum aktualizace tipu je v nesprávném formátu.';
$lang['SupportManagerTickets.!error.date_added.format'] = 'Datum přidání tipu je v nesprávném formátu.';
$lang['SupportManagerTickets.!error.status.trash'] = 'Vyřazený tip nelze upravovat.';
$lang['SupportManagerTickets.!error.status.format'] = 'Vyberte prosím platný stav.';
$lang['SupportManagerTickets.!error.priority.format'] = 'Vyberte prosím platnou prioritu.';
$lang['SupportManagerTickets.!error.summary.length'] = 'Délka shrnutí nesmí přesáhnout 255 znaků.';
$lang['SupportManagerTickets.!error.summary.empty'] = 'Zadejte prosím shrnutí.';
$lang['SupportManagerTickets.!error.email.format'] = 'Zadejte prosím platnou e-mailovou adresu.';
$lang['SupportManagerTickets.!error.client_id.set'] = 'Tiket patří jinému klientovi a přiřazeného klienta nelze změnit.';
$lang['SupportManagerTickets.!error.client_id.exists'] = 'Neplatné ID klienta.';
$lang['SupportManagerTickets.!error.service_id.belongs'] = 'Vybraná služba je neplatná.';
$lang['SupportManagerTickets.!error.service_id.exists'] = 'Služba vybraná pro tento tip neexistuje.';
$lang['SupportManagerTickets.!error.by_staff_id.exists'] = 'Zaměstnanec nastavený jako provádějící úpravy neexistuje.';
$lang['SupportManagerTickets.!error.contact_id.valid'] = 'Bez platného klienta nesmí kontakt na tip odpovědět.';
$lang['SupportManagerTickets.!error.contact_id.exists'] = 'Kontakt vybraný pro tuto odpověď na tip neexistuje.';
$lang['SupportManagerTickets.!error.staff_id.exists'] = 'Neplatné ID zaměstnance.';
$lang['SupportManagerTickets.!error.department_id.exists'] = 'Vyberte prosím platné oddělení.';
$lang['SupportManagerTickets.!error.code.format'] = 'Kód tipu musí obsahovat pouze číslice.';
$lang['SupportManagerTickets.!error.priority.valid'] = 'Vyberte prosím platnou prioritu pro toto oddělení.';
$lang['SupportManagerTickets.!error.contacts.valid'] = 'Alespoň jeden z kontaktů tipu je neplatný.';
$lang['SupportManagerTickets.!error.recipients.valid'] = 'Alespoň jeden z příjemců tipu je neplatný.';
$lang['SupportManagerTickets.!error.recipients.duplicated'] = 'Alespoň jeden z příjemců tipu je duplicitní.';

