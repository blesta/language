<?php
/**
 * Support Manager Tickets
 *
 * @package blesta
 * @subpackage blesta.language.it_it
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SupportManagerTickets.reassign_note'] = 'Questo ticket è stato riassegnato a %1$s. Le risposte precedenti del cliente sono state riassegnate a questo cliente e potrebbero essere state fatte da un\'altra persona.';
$lang['SupportManagerTickets.log.unassigned'] = 'Non assegnato';
$lang['SupportManagerTickets.log.ticket_staff_id'] = 'Assegnato a %1$s.';
$lang['SupportManagerTickets.log.status'] = 'Lo stato è stato modificato in %1$s.';
$lang['SupportManagerTickets.log.priority'] = 'La priorità è stata modificata in %1$s.';
$lang['SupportManagerTickets.log.summary'] = 'La sintesi è stata aggiornata.';
$lang['SupportManagerTickets.log.department_id'] = 'Il reparto è stato cambiato in %1$s.';
$lang['SupportManagerTickets.type.log'] = 'Log';
$lang['SupportManagerTickets.type.note'] = 'Nota';
$lang['SupportManagerTickets.type.reply'] = 'Risposta';
$lang['SupportManagerTickets.status.trash'] = 'Rifiuti';
$lang['SupportManagerTickets.status.closed'] = 'Chiuso';
$lang['SupportManagerTickets.status.on_hold'] = 'In attesa';
$lang['SupportManagerTickets.status.in_progress'] = 'In corso';
$lang['SupportManagerTickets.status.awaiting_reply'] = 'In attesa della risposta del cliente';
$lang['SupportManagerTickets.status.open'] = 'In attesa della risposta del personale';
$lang['SupportManagerTickets.priority.low'] = 'Basso';
$lang['SupportManagerTickets.priority.medium'] = 'Medio';
$lang['SupportManagerTickets.priority.high'] = 'Alto';
$lang['SupportManagerTickets.priority.critical'] = 'Critico';
$lang['SupportManagerTickets.priority.emergency'] = 'Emergenza';
$lang['SupportManagerTickets.merge.reply'] = 'Questo ticket è stato unito al ticket #%1$s.';
$lang['SupportManagerTickets.!error.client_id.company'] = 'Almeno un biglietto non appartiene alla stessa azienda del cliente in questione.';
$lang['SupportManagerTickets.!error.ticket_ids[].exists'] = 'Almeno un ID biglietto non è valido.';
$lang['SupportManagerTickets.!error.tickets.department_matches'] = 'Almeno uno dei biglietti non ha potuto essere assegnato al reparto indicato perché non appartiene alla stessa azienda.';
$lang['SupportManagerTickets.!error.tickets.service_matches'] = 'Almeno uno dei biglietti non ha potuto essere assegnato al servizio in questione perché non appartiene al cliente associato.';
$lang['SupportManagerTickets.!error.merge_into.itself'] = 'Il ticket non può essere unito a se stesso.';
$lang['SupportManagerTickets.!error.tickets.valid'] = 'Almeno un ticket selezionato non è valido, è chiuso o non appartiene allo stesso cliente del ticket scelto.';
$lang['SupportManagerTickets.!error.replies.notes'] = 'Le note di risposta al ticket non possono essere suddivise in un ticket separato senza includere anche una risposta al ticket.';
$lang['SupportManagerTickets.!error.replies.valid'] = 'Almeno un ID di risposta del ticket non è valido, oppure tutte le risposte sono state selezionate. È necessario lasciare almeno una risposta rimanente.';
$lang['SupportManagerTickets.!error.client_id.attached_to'] = 'La risposta al ticket potrebbe non provenire da un altro cliente.';
$lang['SupportManagerTickets.!error.details.empty'] = 'Inserire alcuni dettagli su questo biglietto.';
$lang['SupportManagerTickets.!error.type.new_valid'] = 'I nuovi ticket devono avere un tipo di risposta "reply".';
$lang['SupportManagerTickets.!error.type.format'] = 'Selezionare un tipo di risposta valido.';
$lang['SupportManagerTickets.!error.ticket_id.exists'] = 'ID biglietto non valido.';
$lang['SupportManagerTickets.!error.date_closed.format'] = 'La data di chiusura del biglietto è in un formato non valido.';
$lang['SupportManagerTickets.!error.date_updated.format'] = 'La data di aggiornamento del biglietto è in un formato non valido.';
$lang['SupportManagerTickets.!error.date_added.format'] = 'La data di aggiunta del biglietto è in un formato non valido.';
$lang['SupportManagerTickets.!error.status.trash'] = 'Un biglietto cestinato non può essere modificato.';
$lang['SupportManagerTickets.!error.status.format'] = 'Selezionare uno stato valido.';
$lang['SupportManagerTickets.!error.priority.format'] = 'Selezionare una priorità valida.';
$lang['SupportManagerTickets.!error.summary.length'] = 'Il riassunto non può superare i 255 caratteri.';
$lang['SupportManagerTickets.!error.summary.empty'] = 'Inserire una sintesi.';
$lang['SupportManagerTickets.!error.email.format'] = 'Inserire un indirizzo e-mail valido.';
$lang['SupportManagerTickets.!error.client_id.set'] = 'Il biglietto appartiene a un altro cliente e il cliente assegnato non può essere modificato.';
$lang['SupportManagerTickets.!error.client_id.exists'] = 'ID cliente non valido.';
$lang['SupportManagerTickets.!error.service_id.belongs'] = 'Il servizio selezionato non è valido.';
$lang['SupportManagerTickets.!error.service_id.exists'] = 'Il servizio selezionato per questo ticket non esiste.';
$lang['SupportManagerTickets.!error.by_staff_id.exists'] = 'Il membro del personale impostato per eseguire la modifica non esiste.';
$lang['SupportManagerTickets.!error.contact_id.valid'] = 'Il contatto non può rispondere al ticket senza un cliente valido.';
$lang['SupportManagerTickets.!error.contact_id.exists'] = 'Il contatto selezionato per questa risposta al ticket non esiste.';
$lang['SupportManagerTickets.!error.staff_id.exists'] = 'ID personale non valido.';
$lang['SupportManagerTickets.!error.department_id.exists'] = 'Selezionare un reparto valido.';
$lang['SupportManagerTickets.!error.code.format'] = 'Il codice del biglietto deve contenere solo cifre.';

