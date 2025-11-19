<?php
/**
 * Support Manager Departments
 *
 * @package blesta
 * @subpackage blesta.language.pl_pl
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SupportManagerDepartments.reminder_intervals.minutes'] = '%1$s minut';
$lang['SupportManagerDepartments.reminder_intervals.hours'] = '%1$s godzin';
$lang['SupportManagerDepartments.reminder_intervals.hour'] = '1 Godzina';
$lang['SupportManagerDepartments.ticket_intervals.days'] = '%1$s dni';
$lang['SupportManagerDepartments.ticket_intervals.day'] = '1 Dzień';
$lang['SupportManagerDepartments.visibility_options.staff'] = 'Tylko dla personelu';
$lang['SupportManagerDepartments.visibility_options.client'] = 'Klient i personel';
$lang['SupportManagerDepartments.field_types.password'] = 'Hasło';
$lang['SupportManagerDepartments.field_types.textarea'] = 'Textarea';
$lang['SupportManagerDepartments.field_types.text'] = 'Tekst';
$lang['SupportManagerDepartments.field_types.quantity'] = 'Ilość';
$lang['SupportManagerDepartments.field_types.select'] = 'Drop-down';
$lang['SupportManagerDepartments.field_types.radio'] = 'Radio';
$lang['SupportManagerDepartments.field_types.checkbox'] = 'Pole wyboru';
$lang['SupportManagerDepartments.message_types.deleted'] = 'Usunięto';
$lang['SupportManagerDepartments.message_types.read'] = 'Czytaj';
$lang['SupportManagerDepartments.security_types.tls'] = 'TLS';
$lang['SupportManagerDepartments.security_types.ssl'] = 'SSL';
$lang['SupportManagerDepartments.security_types.none'] = 'Brak';
$lang['SupportManagerDepartments.priorities.low'] = 'Niski';
$lang['SupportManagerDepartments.priorities.medium'] = 'Średni';
$lang['SupportManagerDepartments.priorities.high'] = 'Wysoki';
$lang['SupportManagerDepartments.priorities.critical'] = 'Krytyczny';
$lang['SupportManagerDepartments.priorities.emergency'] = 'Nagły wypadek';
$lang['SupportManagerDepartments.statuses.visible'] = 'Widoczny';
$lang['SupportManagerDepartments.statuses.hidden'] = 'Ukryty';
$lang['SupportManagerDepartments.methods.imap'] = 'IMAP';
$lang['SupportManagerDepartments.methods.pop3'] = 'POP3';
$lang['SupportManagerDepartments.methods.pipe'] = 'Orurowanie';
$lang['SupportManagerDepartments.methods.none'] = 'Brak';
$lang['SupportManagerDepartments.!error.department_id.has_tickets'] = 'Dział nie mógł zostać usunięty, ponieważ obecnie przypisane są do niego bilety.';
$lang['SupportManagerDepartments.!error.auto_delete.format'] = 'To, czy dane pola mają być automatycznie usuwane po zamknięciu zgłoszenia, musi być ustawione na 0 lub 1.';
$lang['SupportManagerDepartments.!error.encrypted.format'] = 'Szyfrowanie danych pola musi być ustawione na 0 lub 1.';
$lang['SupportManagerDepartments.!error.client_add.format'] = 'Zezwolenie klientowi na dodawanie musi być ustawione na 0 lub 1.';
$lang['SupportManagerDepartments.!error.type.format'] = 'Wybierz prawidłowy typ pola.';
$lang['SupportManagerDepartments.!error.visibility.format'] = 'Wybierz prawidłowy status widoczności.';
$lang['SupportManagerDepartments.!error.label.empty'] = 'Wprowadź etykietę.';
$lang['SupportManagerDepartments.!error.department_id.exists'] = 'Nieprawidłowy identyfikator działu.';
$lang['SupportManagerDepartments.!error.status.format'] = 'Nieprawidłowy typ statusu.';
$lang['SupportManagerDepartments.!error.response_id.format'] = 'Wybierz prawidłową odpowiedź automatycznego zamykania.';
$lang['SupportManagerDepartments.!error.max_attachment_size.format'] = 'Maksymalny rozmiar załącznika musi być wartością liczbową.';
$lang['SupportManagerDepartments.!error.attachment_types.length'] = 'Lista typów załączników nie może przekraczać 255 znaków.';
$lang['SupportManagerDepartments.!error.include_attachments.format'] = 'To, czy załączniki do biletów mają być uwzględniane, musi być ustawione na 0 lub 1.';
$lang['SupportManagerDepartments.!error.reminder_ticket_priority.format'] = 'Wybierz priorytet przypomnienia o ważnym bilecie.';
$lang['SupportManagerDepartments.!error.reminder_ticket_status.format'] = 'Wybierz status przypomnienia o ważnym bilecie.';
$lang['SupportManagerDepartments.!error.reminder_ticket_interval.format'] = 'Wybierz ważny okres ważności biletu przypominającego.';
$lang['SupportManagerDepartments.!error.delete_ticket_interval.format'] = 'Wybierz ważny interwał biletu do usunięcia.';
$lang['SupportManagerDepartments.!error.close_ticket_interval.format'] = 'Wybierz prawidłowy interwał zamknięcia biletu.';
$lang['SupportManagerDepartments.!error.send_ticket_received.format'] = 'To, czy wysyłać wiadomości e-mail z potwierdzeniem zgłoszenia dla tego działu, musi być ustawione na 0 lub 1.';
$lang['SupportManagerDepartments.!error.override_from_email.format'] = 'Zezwolenie na używanie adresu e-mail tego działu jako adresu od w szablonach wiadomości e-mail musi być ustawione na 0 lub 1.';
$lang['SupportManagerDepartments.!error.require_captcha.format'] = 'Wymaganie weryfikacji przez człowieka musi być ustawione na 0 lub 1.';
$lang['SupportManagerDepartments.!error.clients_only.format'] = 'Zezwolenie klientom na otwieranie zgłoszeń lub odpowiadanie na nie musi być ustawione na 0 lub 1.';
$lang['SupportManagerDepartments.!error.mark_messages.valid'] = 'Wiadomości korzystające z protokołu POP3 mogą być oznaczone jako usunięte.';
$lang['SupportManagerDepartments.!error.mark_messages.format'] = 'Wybierz prawidłowy typ wiadomości, aby oznaczyć wiadomości.';
$lang['SupportManagerDepartments.!error.security.format'] = 'Wybierz prawidłowy typ zabezpieczenia.';
$lang['SupportManagerDepartments.!error.service.format'] = 'Wybierz prawidłowy typ usługi.';
$lang['SupportManagerDepartments.!error.port.length'] = 'Długość portu nie może przekraczać 6 cyfr.';
$lang['SupportManagerDepartments.!error.port.format'] = 'Wprowadź numer portu.';
$lang['SupportManagerDepartments.!error.password.format'] = 'Wprowadź hasło.';
$lang['SupportManagerDepartments.!error.user.length'] = 'Długość nazwy użytkownika nie może przekraczać 64 znaków.';
$lang['SupportManagerDepartments.!error.user.format'] = 'Wprowadź nazwę użytkownika.';
$lang['SupportManagerDepartments.!error.host.length'] = 'Długość nazwy hosta nie może przekraczać 128 znaków.';
$lang['SupportManagerDepartments.!error.host.format'] = 'Wprowadź prawidłową nazwę hosta.';
$lang['SupportManagerDepartments.!error.default_priority.format'] = 'Nieprawidłowy domyślny typ priorytetu.';
$lang['SupportManagerDepartments.!error.method.mailparse'] = 'Rozszerzenie PHP Mailparse PECL jest wymagane do analizowania biletów e-mail.';
$lang['SupportManagerDepartments.!error.method.imap'] = 'Rozszerzenie PHP IMAP jest wymagane do pobierania wiadomości przez POP3 lub IMAP.';
$lang['SupportManagerDepartments.!error.method.format'] = 'Nieprawidłowy typ metody.';
$lang['SupportManagerDepartments.!error.email.format'] = 'Wprowadź prawidłowy adres e-mail.';
$lang['SupportManagerDepartments.!error.description.empty'] = 'Wprowadź opis.';
$lang['SupportManagerDepartments.!error.name.empty'] = 'Wprowadź nazwę tego działu.';
$lang['SupportManagerDepartments.!error.company_id.exists'] = 'Nieprawidłowy identyfikator firmy.';
$lang['SupportManagerDepartments.!error.priorities[].format'] = 'Jeden lub więcej priorytetów jest nieprawidłowych.';
$lang['SupportManagerDepartments.!error.priorities[].empty'] = 'Wybierz co najmniej jeden priorytet.';
$lang['SupportManagerDepartments.visibility_options.client_only'] = 'Tylko klient';
$lang['SupportManagerDepartments.field_types.emergency'] = 'Eskalacja do sytuacji awaryjnej';
$lang['SupportManagerDepartments.!error.required.format'] = 'Czy wymagać, aby plik był ustawiony na 0 lub 1.';
$lang['SupportManagerDepartments.providers.microsoft'] = 'Microsoft';
$lang['SupportManagerDepartments.providers.google'] = 'Google';
$lang['SupportManagerDepartments.methods.oauth2'] = 'OAuth 2.0';

