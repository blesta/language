<?php
/**
 * Cron
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Cron.addpaidpendingservices.service_success'] = 'Der ausstehende Dienst #%1$s vom Client #%2$s ist jetzt aktiv.';
$lang['Cron.addpaidpendingservices.service_error'] = 'Der ausstehende Dienst #%1$s vom Client #%2$s konnte nicht aktiviert werden.';
$lang['Cron.addpaidpendingservices.completed'] = 'Die Aufgabe "Bezahlte ausstehende Dienstleistungen" ist abgeschlossen.';
$lang['Cron.addpaidpendingservices.attempt'] = 'Versuch der Bereitstellung bezahlter ausstehender Dienstleistungen.';
$lang['Cron.cancelscheduledservices.cancel_success'] = 'Der Dienst #%1$s von Kunde #%2$s wurde storniert.';
$lang['Cron.cancelscheduledservices.cancel_error'] = 'Der Dienst #%1$s von Kunde #%2$s konnte nicht storniert werden.';
$lang['Cron.cancelscheduledservices.completed'] = 'Die Aufgabe "Geplante Dienste abbrechen" ist abgeschlossen.';
$lang['Cron.cancelscheduledservices.attempt'] = 'Der Versuch, geplante Dienste zu stornieren.';
$lang['Cron.unsuspendservices.unsuspend_success'] = 'Der Dienst #%1$s von Client %2$s wurde nicht mehr suspendiert.';
$lang['Cron.unsuspendservices.unsuspend_error'] = 'Der Dienst #%1$s von Client %2$s konnte nicht freigegeben werden.';
$lang['Cron.unsuspendservices.completed'] = 'Die Aufgabe "Dienste aussetzen" ist abgeschlossen.';
$lang['Cron.unsuspendservices.attempt'] = 'Versuch, die Aussetzung bezahlter Dienste rückgängig zu machen.';
$lang['Cron.suspendservices.suspend_success'] = 'Der Dienst #%1$s von Client %2$s wurde ausgesetzt.';
$lang['Cron.suspendservices.suspend_error'] = 'Der Dienst #%1$s von Client %2$s konnte nicht ausgesetzt werden.';
$lang['Cron.suspendservices.suspension_reason'] = 'Nicht-Zahlung';
$lang['Cron.suspendservices.completed'] = 'Die Aufgabe "Dienste aussetzen" ist abgeschlossen.';
$lang['Cron.suspendservices.attempt'] = 'Versuch, überfällige Leistungen auszusetzen.';
$lang['Cron.cardexpirationreminders.success'] = 'Die Ablauferinnerung für den Kontakt %1$s %2$s vom Kunden #%3$s wurde erfolgreich zugestellt.';
$lang['Cron.cardexpirationreminders.failed'] = 'Die Ablauferinnerung für den Kontakt %1$s %2$s vom Kunden #%3$s konnte nicht gesendet werden.';
$lang['Cron.cardexpirationreminders.completed'] = 'Die Aufgabe der Kartenablauferinnerung ist abgeschlossen.';
$lang['Cron.cardexpirationreminders.attempt'] = 'Es wird versucht, Erinnerungen an den Ablauf der Gültigkeit der Karte zu senden.';
$lang['Cron.autodebitinvoices.charge_success'] = 'Die Zahlung wurde erfolgreich bearbeitet.';
$lang['Cron.autodebitinvoices.charge_failed'] = 'Die Zahlung kann nicht bearbeitet werden.';
$lang['Cron.autodebitinvoices.charge_attempt'] = 'Es wird versucht, den Kunden #%1$s für alle offenen Rechnungen in Höhe von %2$s automatisch zu belasten.';
$lang['Cron.autodebitinvoices.completed'] = 'Die Aufgabe der automatischen Abbuchung von Rechnungen ist abgeschlossen.';
$lang['Cron.autodebitinvoices.attempt'] = 'Versuch der automatischen Abbuchung offener Rechnungen.';
$lang['Cron.applycredits.apply_none'] = 'Es gibt keine Rechnungen, auf die Gutschriften angewandt werden können.';
$lang['Cron.applycredits.apply_success'] = 'Ausstehende Gutschriften aus Transaktion %1$s für Kunde #%2$s wurden erfolgreich auf Rechnung #%3$s in Höhe von %4$s angewendet.';
$lang['Cron.applycredits.apply_failed'] = 'Ausstehende Gutschriften für Kunde #%1$s können nicht angewendet werden.';
$lang['Cron.applycredits.completed'] = 'Die Aufgabe Kredite anwenden ist abgeschlossen.';
$lang['Cron.applycredits.attempt'] = 'Der Versuch, Gutschriften auf offene Rechnungen anzuwenden.';
$lang['Cron.index.completed_all_system'] = 'Alle Systemaufgaben sind abgeschlossen.';
$lang['Cron.index.attempt_all_system'] = 'Es wird versucht, alle Systemaufgaben auszuführen.';
$lang['Cron.index.completed_all'] = 'Alle Aufgaben sind abgeschlossen.';
$lang['Cron.index.attempt_all'] = 'Es wird versucht, alle Aufgaben für %1$s auszuführen.';
$lang['Cron.!error.task_execution.failed'] = 'Fehler: %1$s %2$s';
$lang['Cron.!error.cron.failed'] = 'Cron konnte nicht protokollieren.';
$lang['Cron.!error.task_filter.exclude_not_array'] = 'Der Aufgabenfilter "exclude" muss ein Array sein.';
$lang['Cron.!error.task_filter.include_not_array'] = 'Der Aufgabenfilter "include" muss ein Array sein.';
$lang['Cron.!error.task_filter.both_include_exclude'] = 'Der Aufgabenfilter kann nicht gleichzeitig die Schlüssel "einschließen" und "ausschließen" haben.';
$lang['Cron.!error.task_filter.invalid_format'] = 'Der Aufgabenfilter muss ein JSON-Objekt sein.';
$lang['Cron.!error.task_filter.invalid_json'] = 'Ungültiges JSON im Aufgabenfilterparameter: %1$s';

