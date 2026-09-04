<?php
/**
 * Support Manager Tickets
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SupportManagerTickets.!error.by_staff_id.exists'] = 'Der Mitarbeiter, der die Bearbeitung durchführen soll, existiert nicht.';
$lang['SupportManagerTickets.!error.client_id.attached_to'] = 'Die Ticketantwort darf nicht von einem anderen Kunden stammen.';
$lang['SupportManagerTickets.!error.client_id.company'] = 'Mindestens ein Ticket gehört nicht zu demselben Unternehmen wie der angegebene Kunde.';
$lang['SupportManagerTickets.!error.client_id.exists'] = 'Ungültige Client-ID.';
$lang['SupportManagerTickets.!error.client_id.set'] = 'Das Ticket gehört einem anderen Kunden und der zugewiesene Kunde kann nicht geändert werden.';
$lang['SupportManagerTickets.!error.code.format'] = 'Der Ticketcode darf nur Ziffern enthalten.';
$lang['SupportManagerTickets.!error.contact_id.exists'] = 'Der für diese Ticketantwort ausgewählte Kontakt existiert nicht.';
$lang['SupportManagerTickets.!error.contact_id.valid'] = 'Der Kontakt darf das Ticket nicht ohne einen gültigen Kunden beantworten.';
$lang['SupportManagerTickets.!error.contacts.valid'] = 'Mindestens einer der Ticketkontakte ist ungültig.';
$lang['SupportManagerTickets.!error.custom_fields.empty'] = '"%1$s" ist erforderlich und darf nicht leer sein.';
$lang['SupportManagerTickets.!error.date_added.format'] = 'Das Datum, an dem das Ticket hinzugefügt wurde, hat ein ungültiges Datumsformat.';
$lang['SupportManagerTickets.!error.date_closed.format'] = 'Das Datum des Ticketschlusses hat ein ungültiges Datumsformat.';
$lang['SupportManagerTickets.!error.date_updated.format'] = 'Das Aktualisierungsdatum des Tickets hat ein ungültiges Datumsformat.';
$lang['SupportManagerTickets.!error.department_id.exists'] = 'Bitte wählen Sie eine gültige Abteilung.';
$lang['SupportManagerTickets.!error.details.empty'] = 'Bitte geben Sie einige Details zu diesem Ticket ein.';
$lang['SupportManagerTickets.!error.email.format'] = 'Bitte geben Sie eine gültige E-Mail Adresse ein.';
$lang['SupportManagerTickets.!error.inline_image.base64'] = 'Inline base64 Bilder sind nicht erlaubt. Bitte fügen Sie Bilder ein oder ziehen Sie sie in den Editor, um sie hochzuladen.';
$lang['SupportManagerTickets.!error.inline_image.path'] = 'Das Upload-Verzeichnis konnte nicht erstellt werden.';
$lang['SupportManagerTickets.!error.inline_image.size'] = 'Das Bild überschreitet die maximal zulässige Größe von %1$sMB.';
$lang['SupportManagerTickets.!error.inline_image.type'] = 'Ungültiger Bildtyp. Nur JPEG-, PNG-, GIF- und WebP-Bilder sind zulässig.';
$lang['SupportManagerTickets.!error.inline_image.upload'] = 'Das Bild konnte nicht hochgeladen werden. Bitte versuchen Sie es erneut.';
$lang['SupportManagerTickets.!error.inline_image.write'] = 'Das Bild konnte nicht gespeichert werden. Bitte versuchen Sie es erneut.';
$lang['SupportManagerTickets.!error.merge_into.itself'] = 'Das Ticket kann nicht mit sich selbst zusammengeführt werden.';
$lang['SupportManagerTickets.!error.priority.format'] = 'Bitte wählen Sie eine gültige Priorität.';
$lang['SupportManagerTickets.!error.priority.valid'] = 'Bitte wählen Sie eine gültige Priorität für diese Abteilung.';
$lang['SupportManagerTickets.!error.recipients.duplicated'] = 'Mindestens einer der Ticketempfänger ist doppelt vorhanden.';
$lang['SupportManagerTickets.!error.recipients.valid'] = 'Mindestens einer der Ticketempfänger ist ungültig.';
$lang['SupportManagerTickets.!error.replies.notes'] = 'Notizen zu Ticketantworten dürfen nicht in ein separates Ticket aufgeteilt werden, ohne auch eine Ticketantwort zu enthalten.';
$lang['SupportManagerTickets.!error.replies.valid'] = 'Mindestens eine Antwort-ID ist ungültig, oder alle Antworten wurden ausgewählt. Sie müssen mindestens eine Antwort übrig lassen.';
$lang['SupportManagerTickets.!error.service_id.belongs'] = 'Der ausgewählte Dienst ist ungültig.';
$lang['SupportManagerTickets.!error.service_id.exists'] = 'Der für dieses Ticket ausgewählte Dienst existiert nicht.';
$lang['SupportManagerTickets.!error.staff_id.exists'] = 'Ungültige Personal-ID.';
$lang['SupportManagerTickets.!error.status.format'] = 'Bitte wählen Sie einen gültigen Status.';
$lang['SupportManagerTickets.!error.status.trash'] = 'Ein gelöschtes Ticket kann nicht bearbeitet werden.';
$lang['SupportManagerTickets.!error.summary.empty'] = 'Bitte geben Sie eine Zusammenfassung ein.';
$lang['SupportManagerTickets.!error.summary.length'] = 'Die Zusammenfassung darf maximal 255 Zeichen lang sein.';
$lang['SupportManagerTickets.!error.ticket_id.exists'] = 'Ungültige Ticket-ID.';
$lang['SupportManagerTickets.!error.ticket_ids[].exists'] = 'Mindestens eine Ticket-ID ist ungültig.';
$lang['SupportManagerTickets.!error.tickets.department_matches'] = 'Mindestens eines der Tickets konnte der angegebenen Abteilung nicht zugeordnet werden, weil es nicht zum selben Unternehmen gehört.';
$lang['SupportManagerTickets.!error.tickets.service_matches'] = 'Mindestens eines der Tickets konnte dem angegebenen Dienst nicht zugewiesen werden, da es nicht dem zugehörigen Kunden gehört.';
$lang['SupportManagerTickets.!error.tickets.valid'] = 'Mindestens ein ausgewähltes Ticket ist ungültig, geschlossen oder gehört nicht zu demselben Kunden wie das ausgewählte Ticket.';
$lang['SupportManagerTickets.!error.type.format'] = 'Bitte wählen Sie einen gültigen Antworttyp aus.';
$lang['SupportManagerTickets.!error.type.new_valid'] = 'Neue Tickets müssen den Antworttyp "Antwort" haben.';
$lang['SupportManagerTickets.bell.new_ticket.message'] = '%1$s geöffnetes Ticket #%2$s: %3$s';
$lang['SupportManagerTickets.bell.new_ticket.title'] = 'Neues Ticket #%1$s';
$lang['SupportManagerTickets.bell.ticket_assigned.message'] = 'Das Ihnen zugewiesene Ticket #%1$s: %2$s';
$lang['SupportManagerTickets.bell.ticket_assigned.title'] = 'Ticket #%1$s Zugewiesen';
$lang['SupportManagerTickets.bell.ticket_updated.message'] = '%1$s auf das Ticket #%2$s geantwortet: %3$s';
$lang['SupportManagerTickets.bell.ticket_updated.title'] = 'Ticket #%1$s Aktualisiert';
$lang['SupportManagerTickets.log.department_id'] = 'Die Abteilung wurde in %1$s geändert.';
$lang['SupportManagerTickets.log.priority'] = 'Die Priorität wurde auf %1$s geändert.';
$lang['SupportManagerTickets.log.service_id'] = 'Der zugehörige Dienst wurde auf die interne ID geändert: #%1$s.';
$lang['SupportManagerTickets.log.status'] = 'Der Status wurde auf %1$s geändert.';
$lang['SupportManagerTickets.log.summary'] = 'Die Zusammenfassung wurde aktualisiert.';
$lang['SupportManagerTickets.log.ticket_staff_id'] = 'Zugewiesen an %1$s.';
$lang['SupportManagerTickets.log.unassigned'] = 'Nicht zugewiesen';
$lang['SupportManagerTickets.merge.reply'] = 'Dieses Ticket wurde mit Ticket #%1$s zusammengelegt.';
$lang['SupportManagerTickets.priority.critical'] = 'Kritisch';
$lang['SupportManagerTickets.priority.emergency'] = 'Notfall';
$lang['SupportManagerTickets.priority.high'] = 'Hoch';
$lang['SupportManagerTickets.priority.low'] = 'Niedrig';
$lang['SupportManagerTickets.priority.medium'] = 'Mittel';
$lang['SupportManagerTickets.reassign_note'] = 'Dieses Ticket wurde %1$s neu zugewiesen. Frühere Antworten des Kunden wurden diesem Kunden neu zugewiesen und können von einer anderen Person stammen.';
$lang['SupportManagerTickets.status.awaiting_reply'] = 'Wartender Kunde';
$lang['SupportManagerTickets.status.closed'] = 'Geschlossen';
$lang['SupportManagerTickets.status.in_progress'] = 'In Arbeit';
$lang['SupportManagerTickets.status.on_hold'] = 'In der Warteschleife';
$lang['SupportManagerTickets.status.open'] = 'Personal in Erwartung';
$lang['SupportManagerTickets.status.trash'] = 'Papierkorb';
$lang['SupportManagerTickets.type.log'] = 'Protokoll';
$lang['SupportManagerTickets.type.note'] = 'Hinweis';
$lang['SupportManagerTickets.type.reply'] = 'Antwort';

