<?php
/**
 * Support Manager Departments
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SupportManagerDepartments.reminder_intervals.minutes'] = '%1$s Minuten';
$lang['SupportManagerDepartments.reminder_intervals.hours'] = '%1$s Stunden';
$lang['SupportManagerDepartments.reminder_intervals.hour'] = '1 Stunde';
$lang['SupportManagerDepartments.ticket_intervals.days'] = '%1$s Tage';
$lang['SupportManagerDepartments.ticket_intervals.day'] = '1 Tag';
$lang['SupportManagerDepartments.visibility_options.staff'] = 'Nur Personal';
$lang['SupportManagerDepartments.visibility_options.client'] = 'Kunde und Personal';
$lang['SupportManagerDepartments.field_types.password'] = 'Passwort';
$lang['SupportManagerDepartments.field_types.textarea'] = 'Textarea';
$lang['SupportManagerDepartments.field_types.text'] = 'Text';
$lang['SupportManagerDepartments.field_types.quantity'] = 'Menge';
$lang['SupportManagerDepartments.field_types.select'] = 'Drop-down';
$lang['SupportManagerDepartments.field_types.radio'] = 'Radio';
$lang['SupportManagerDepartments.field_types.checkbox'] = 'Kontrollkästchen';
$lang['SupportManagerDepartments.message_types.deleted'] = 'Gelöscht';
$lang['SupportManagerDepartments.message_types.read'] = 'Lesen Sie';
$lang['SupportManagerDepartments.security_types.tls'] = 'TLS';
$lang['SupportManagerDepartments.security_types.ssl'] = 'SSL';
$lang['SupportManagerDepartments.security_types.none'] = 'Keine';
$lang['SupportManagerDepartments.priorities.low'] = 'Niedrig';
$lang['SupportManagerDepartments.priorities.medium'] = 'Mittel';
$lang['SupportManagerDepartments.priorities.high'] = 'Hoch';
$lang['SupportManagerDepartments.priorities.critical'] = 'Kritisch';
$lang['SupportManagerDepartments.priorities.emergency'] = 'Notfall';
$lang['SupportManagerDepartments.statuses.visible'] = 'Sichtbar';
$lang['SupportManagerDepartments.statuses.hidden'] = 'Versteckt';
$lang['SupportManagerDepartments.methods.imap'] = 'IMAP';
$lang['SupportManagerDepartments.methods.pop3'] = 'POP3';
$lang['SupportManagerDepartments.methods.pipe'] = 'Rohrleitungen';
$lang['SupportManagerDepartments.methods.none'] = 'Keine';
$lang['SupportManagerDepartments.!error.department_id.has_tickets'] = 'Die Abteilung konnte nicht gelöscht werden, da ihr derzeit Tickets zugewiesen sind.';
$lang['SupportManagerDepartments.!error.auto_delete.format'] = 'Ob die Felddaten nach dem Schließen eines Tickets automatisch gelöscht werden sollen, muss auf 0 oder 1 gesetzt werden.';
$lang['SupportManagerDepartments.!error.encrypted.format'] = 'Ob die Felddaten verschlüsselt werden sollen, muss auf 0 oder 1 gesetzt werden.';
$lang['SupportManagerDepartments.!error.client_add.format'] = 'Der Wert 0 oder 1 gibt an, ob dem Client das Hinzufügen erlaubt werden soll.';
$lang['SupportManagerDepartments.!error.type.format'] = 'Bitte wählen Sie einen gültigen Feldtyp aus.';
$lang['SupportManagerDepartments.!error.visibility.format'] = 'Bitte wählen Sie einen gültigen Sichtbarkeitsstatus.';
$lang['SupportManagerDepartments.!error.label.empty'] = 'Bitte geben Sie eine Bezeichnung ein.';
$lang['SupportManagerDepartments.!error.department_id.exists'] = 'Ungültige Abteilungs-ID.';
$lang['SupportManagerDepartments.!error.status.format'] = 'Ungültige Statusart.';
$lang['SupportManagerDepartments.!error.response_id.format'] = 'Bitte wählen Sie eine gültige Antwort für die automatische Schließung.';
$lang['SupportManagerDepartments.!error.max_attachment_size.format'] = 'Die maximale Größe des Anhangs muss ein numerischer Wert sein.';
$lang['SupportManagerDepartments.!error.attachment_types.length'] = 'Die Liste der Anhangsarten darf maximal 255 Zeichen lang sein.';
$lang['SupportManagerDepartments.!error.include_attachments.format'] = 'Die Angabe, ob Ticketanhänge einbezogen werden sollen, muss auf 0 oder 1 gesetzt werden.';
$lang['SupportManagerDepartments.!error.reminder_ticket_priority.format'] = 'Bitte wählen Sie eine gültige Ticket-Erinnerungspriorität.';
$lang['SupportManagerDepartments.!error.reminder_ticket_status.format'] = 'Bitte wählen Sie einen gültigen Ticket-Erinnerungsstatus.';
$lang['SupportManagerDepartments.!error.reminder_ticket_interval.format'] = 'Bitte wählen Sie ein gültiges Erinnerungs-Ticket-Intervall.';
$lang['SupportManagerDepartments.!error.delete_ticket_interval.format'] = 'Bitte wählen Sie ein gültiges Löschintervall.';
$lang['SupportManagerDepartments.!error.close_ticket_interval.format'] = 'Bitte wählen Sie ein gültiges Intervall für den Ticketschluss.';
$lang['SupportManagerDepartments.!error.send_ticket_received.format'] = 'Ob für diese Abteilung E-Mail-Bestätigungen für Tickets gesendet werden sollen, muss auf 0 oder 1 gesetzt werden.';
$lang['SupportManagerDepartments.!error.override_from_email.format'] = 'Ob die E-Mail-Adresse dieser Abteilung als Absenderadresse in E-Mail-Vorlagen verwendet werden darf, muss auf 0 oder 1 gesetzt werden.';
$lang['SupportManagerDepartments.!error.require_captcha.format'] = 'Die Angabe, ob eine menschliche Überprüfung erforderlich ist, muss auf 0 oder 1 gesetzt werden.';
$lang['SupportManagerDepartments.!error.clients_only.format'] = 'Die Option, dass Clients Tickets öffnen oder beantworten können, muss auf 0 oder 1 gesetzt werden.';
$lang['SupportManagerDepartments.!error.mark_messages.valid'] = 'Nachrichten über POP3 können nur als gelöscht markiert werden.';
$lang['SupportManagerDepartments.!error.mark_messages.format'] = 'Bitte wählen Sie einen gültigen Nachrichtentyp aus, um Nachrichten zu markieren.';
$lang['SupportManagerDepartments.!error.security.format'] = 'Bitte wählen Sie eine gültige Wertpapierart aus.';
$lang['SupportManagerDepartments.!error.service.format'] = 'Bitte wählen Sie einen gültigen Diensttyp aus.';
$lang['SupportManagerDepartments.!error.port.length'] = 'Der Port darf maximal 6 Ziffern lang sein.';
$lang['SupportManagerDepartments.!error.port.format'] = 'Bitte geben Sie eine Portnummer ein.';
$lang['SupportManagerDepartments.!error.password.format'] = 'Bitte geben Sie ein Passwort ein.';
$lang['SupportManagerDepartments.!error.user.length'] = 'Der Benutzername darf maximal 64 Zeichen lang sein.';
$lang['SupportManagerDepartments.!error.user.format'] = 'Bitte geben Sie einen Benutzernamen ein.';
$lang['SupportManagerDepartments.!error.host.length'] = 'Der Hostname darf maximal 128 Zeichen lang sein.';
$lang['SupportManagerDepartments.!error.host.format'] = 'Bitte geben Sie einen gültigen Hostnamen ein.';
$lang['SupportManagerDepartments.!error.default_priority.format'] = 'Ungültiger Standardprioritätstyp.';
$lang['SupportManagerDepartments.!error.method.mailparse'] = 'Die PHP Mailparse PECL-Erweiterung wird für das Parsen von E-Mail-Tickets benötigt.';
$lang['SupportManagerDepartments.!error.method.imap'] = 'Die PHP-IMAP-Erweiterung ist für das Herunterladen von Nachrichten über POP3 oder IMAP erforderlich.';
$lang['SupportManagerDepartments.!error.method.format'] = 'Ungültiger Methodentyp.';
$lang['SupportManagerDepartments.!error.email.format'] = 'Bitte geben Sie eine gültige E-Mail Adresse ein.';
$lang['SupportManagerDepartments.!error.description.empty'] = 'Bitte geben Sie eine Beschreibung ein.';
$lang['SupportManagerDepartments.!error.name.empty'] = 'Bitte geben Sie einen Namen für diese Abteilung ein.';
$lang['SupportManagerDepartments.!error.company_id.exists'] = 'Ungültige Unternehmens-ID.';
$lang['SupportManagerDepartments.!error.priorities[].format'] = 'Eine oder mehrere Prioritäten sind ungültig.';
$lang['SupportManagerDepartments.!error.priorities[].empty'] = 'Wählen Sie mindestens eine Priorität aus.';
$lang['SupportManagerDepartments.visibility_options.client_only'] = 'Nur für Kunden';
$lang['SupportManagerDepartments.field_types.emergency'] = 'Eskalation zum Notfall';
$lang['SupportManagerDepartments.!error.required.format'] = 'Ob das Feld benötigt wird, muss auf 0 oder 1 gesetzt werden.';
$lang['SupportManagerDepartments.providers.microsoft'] = 'Microsoft';
$lang['SupportManagerDepartments.providers.google'] = 'Google';
$lang['SupportManagerDepartments.methods.oauth2'] = 'OAuth 2.0';

