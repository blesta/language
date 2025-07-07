<?php
/**
 * Support Manager Tickets
 *
 * @package blesta
 * @subpackage blesta.language.pl_pl
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SupportManagerTickets.reassign_note'] = 'To zgłoszenie zostało ponownie przypisane do %1$s. Poprzednie odpowiedzi klienta zostały ponownie przypisane do tego klienta i mogły zostać wykonane przez inną osobę.';
$lang['SupportManagerTickets.log.unassigned'] = 'Nie przypisano';
$lang['SupportManagerTickets.log.ticket_staff_id'] = 'Przypisany do %1$s.';
$lang['SupportManagerTickets.log.status'] = 'Status został zmieniony na %1$s.';
$lang['SupportManagerTickets.log.priority'] = 'Priorytet został zmieniony na %1$s.';
$lang['SupportManagerTickets.log.summary'] = 'Podsumowanie zostało zaktualizowane.';
$lang['SupportManagerTickets.log.department_id'] = 'Dział został zmieniony na %1$s.';
$lang['SupportManagerTickets.type.log'] = 'Dziennik';
$lang['SupportManagerTickets.type.note'] = 'Uwaga';
$lang['SupportManagerTickets.type.reply'] = 'Odpowiedź';
$lang['SupportManagerTickets.status.trash'] = 'Śmieci';
$lang['SupportManagerTickets.status.closed'] = 'Zamknięte';
$lang['SupportManagerTickets.status.on_hold'] = 'Wstrzymane';
$lang['SupportManagerTickets.status.in_progress'] = 'W toku';
$lang['SupportManagerTickets.status.awaiting_reply'] = 'Oczekiwanie na odpowiedź klienta';
$lang['SupportManagerTickets.status.open'] = 'Oczekiwanie na odpowiedź personelu';
$lang['SupportManagerTickets.priority.low'] = 'Niski';
$lang['SupportManagerTickets.priority.medium'] = 'Średni';
$lang['SupportManagerTickets.priority.high'] = 'Wysoki';
$lang['SupportManagerTickets.priority.critical'] = 'Krytyczny';
$lang['SupportManagerTickets.priority.emergency'] = 'Nagły wypadek';
$lang['SupportManagerTickets.merge.reply'] = 'To zgłoszenie zostało połączone ze zgłoszeniem #%1$s.';
$lang['SupportManagerTickets.!error.client_id.company'] = 'Co najmniej jeden bilet nie należy do tej samej firmy, co dany klient.';
$lang['SupportManagerTickets.!error.ticket_ids[].exists'] = 'Co najmniej jeden identyfikator biletu jest nieprawidłowy.';
$lang['SupportManagerTickets.!error.tickets.department_matches'] = 'Co najmniej jeden z biletów nie mógł zostać przypisany do danego działu, ponieważ nie należy on do tej samej firmy.';
$lang['SupportManagerTickets.!error.tickets.service_matches'] = 'Co najmniej jeden z biletów nie mógł zostać przypisany do danej usługi, ponieważ nie należy do powiązanego klienta.';
$lang['SupportManagerTickets.!error.merge_into.itself'] = 'Zgłoszenie nie może zostać połączone z samym sobą.';
$lang['SupportManagerTickets.!error.tickets.valid'] = 'Co najmniej jedno wybrane zgłoszenie jest nieważne, zamknięte lub nie należy do tego samego klienta, co wybrane zgłoszenie.';
$lang['SupportManagerTickets.!error.replies.notes'] = 'Notatki z odpowiedzią na zgłoszenie nie mogą być dzielone na osobne zgłoszenia bez dołączenia do nich odpowiedzi na zgłoszenie.';
$lang['SupportManagerTickets.!error.replies.valid'] = 'Co najmniej jeden identyfikator odpowiedzi na zgłoszenie jest nieprawidłowy lub wszystkie odpowiedzi zostały wybrane. Musisz pozostawić co najmniej jedną odpowiedź.';
$lang['SupportManagerTickets.!error.client_id.attached_to'] = 'Odpowiedź na zgłoszenie nie może pochodzić od innego klienta.';
$lang['SupportManagerTickets.!error.details.empty'] = 'Wprowadź szczegóły dotyczące tego biletu.';
$lang['SupportManagerTickets.!error.type.new_valid'] = 'Nowe bilety muszą mieć typ odpowiedzi "odpowiedź".';
$lang['SupportManagerTickets.!error.type.format'] = 'Wybierz prawidłowy typ odpowiedzi.';
$lang['SupportManagerTickets.!error.ticket_id.exists'] = 'Nieprawidłowy identyfikator zgłoszenia.';
$lang['SupportManagerTickets.!error.date_closed.format'] = 'Data zamknięcia biletu ma nieprawidłowy format daty.';
$lang['SupportManagerTickets.!error.date_updated.format'] = 'Data aktualizacji biletu ma nieprawidłowy format daty.';
$lang['SupportManagerTickets.!error.date_added.format'] = 'Data dodania biletu ma nieprawidłowy format daty.';
$lang['SupportManagerTickets.!error.status.trash'] = 'Usunięty bilet nie może być edytowany.';
$lang['SupportManagerTickets.!error.status.format'] = 'Wybierz prawidłowy status.';
$lang['SupportManagerTickets.!error.priority.format'] = 'Wybierz prawidłowy priorytet.';
$lang['SupportManagerTickets.!error.summary.length'] = 'Długość podsumowania nie może przekraczać 255 znaków.';
$lang['SupportManagerTickets.!error.summary.empty'] = 'Wprowadź podsumowanie.';
$lang['SupportManagerTickets.!error.email.format'] = 'Wprowadź prawidłowy adres e-mail.';
$lang['SupportManagerTickets.!error.client_id.set'] = 'Bilet należy do innego klienta, a przypisany klient nie może zostać zmieniony.';
$lang['SupportManagerTickets.!error.client_id.exists'] = 'Nieprawidłowy identyfikator klienta.';
$lang['SupportManagerTickets.!error.service_id.belongs'] = 'Wybrana usługa jest nieprawidłowa.';
$lang['SupportManagerTickets.!error.service_id.exists'] = 'Usługa wybrana dla tego zgłoszenia nie istnieje.';
$lang['SupportManagerTickets.!error.by_staff_id.exists'] = 'Pracownik ustawiony jako wykonujący edycję nie istnieje.';
$lang['SupportManagerTickets.!error.contact_id.valid'] = 'Kontakt nie może odpowiedzieć na zgłoszenie bez ważnego klienta.';
$lang['SupportManagerTickets.!error.contact_id.exists'] = 'Kontakt wybrany dla tej odpowiedzi na zgłoszenie nie istnieje.';
$lang['SupportManagerTickets.!error.staff_id.exists'] = 'Nieprawidłowy identyfikator pracownika.';
$lang['SupportManagerTickets.!error.department_id.exists'] = 'Wybierz odpowiedni dział.';
$lang['SupportManagerTickets.!error.code.format'] = 'Kod biletu musi zawierać wyłącznie cyfry.';
$lang['SupportManagerTickets.!error.priority.valid'] = 'Wybierz prawidłowy priorytet dla tego działu.';
$lang['SupportManagerTickets.!error.contacts.valid'] = 'Co najmniej jeden z kontaktów biletu jest nieprawidłowy.';
$lang['SupportManagerTickets.!error.recipients.valid'] = 'Co najmniej jeden z odbiorców biletu jest nieważny.';
$lang['SupportManagerTickets.!error.recipients.duplicated'] = 'Co najmniej jeden z odbiorców biletów jest zduplikowany.';
$lang['SupportManagerTickets.log.service_id'] = 'Powiązana usługa została zmieniona na identyfikator wewnętrzny: #%1$s.';
$lang['SupportManagerTickets.!error.custom_fields.empty'] = '"%1$s" jest wymagane i nie może być puste.';

