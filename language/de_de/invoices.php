<?php
/**
 * Invoices
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Invoices.!error.line_items.minimum_split'] = 'Die Rechnung muss mindestens 2 Zeilen haben, um geteilt zu werden.';
$lang['Invoices.!error.line_items.empty_split'] = 'Es wurde keine Rechnungszeile zum Teilen ausgewählt.';
$lang['Invoices.!error.lines[][tax].format'] = 'Die Steuerposition muss "wahr" oder "falsch" sein.';
$lang['Invoices.!error.lines[][amount].format'] = 'Die Stückkosten müssen eine Zahl sein.';
$lang['Invoices.!error.lines[][qty].minimum'] = 'Bitte geben Sie eine Menge von 1 oder mehr ein.';
$lang['Invoices.!error.lines[][qty].format'] = 'Die Menge muss eine Zahl sein.';
$lang['Invoices.!error.lines[][description].empty'] = 'Bitte geben Sie eine Positionsbeschreibung ein.';
$lang['Invoices.!error.lines[][service_id].exists'] = 'Ungültige Dienst-ID.';
$lang['Invoices.!error.lines[][id].exists'] = 'Ungültige Einzelposten-ID.';
$lang['Invoices.!error.domain_renew.failed'] = 'Domains können nur für bis zu 10 Jahre verlängert werden.';
$lang['Invoices.!error.invoice_id.draft'] = 'Bei der angegebenen Rechnung handelt es sich nicht um einen Rechnungsentwurf, so dass sie nicht gelöscht werden konnte.';
$lang['Invoices.!error.date_last_renewed.format'] = 'Das Datum der letzten Erneuerung einer wiederkehrenden Rechnung muss ein gültiges Datumsformat sein.';
$lang['Invoices.!error.date_renews.format'] = 'Das Verlängerungsdatum der wiederkehrenden Rechnung muss ein gültiges Datumsformat sein.';
$lang['Invoices.!error.duration.format'] = 'Die Dauer ist ungültig.';
$lang['Invoices.!error.period.format'] = 'Der Zeitraum ist ungültig.';
$lang['Invoices.!error.term.bounds'] = 'Der Begriff sollte zwischen 1 und 65535 liegen.';
$lang['Invoices.!error.term.format'] = 'Der Begriff sollte eine Zahl sein.';
$lang['Invoices.!error.delivery.exists'] = 'Die angegebene Liefermethode existiert nicht.';
$lang['Invoices.!error.currency.length'] = 'Der Währungscode muss 3 Zeichen lang sein.';
$lang['Invoices.!error.status.format'] = 'Ungültiger Status.';
$lang['Invoices.!error.autodebit.valid'] = 'Bitte wählen Sie aus, ob Sie die automatische Abbuchung für diese Rechnung zulassen möchten oder nicht.';
$lang['Invoices.!error.date_autodebit.format'] = 'Das Fälligkeitsdatum hat ein ungültiges Datumsformat.';
$lang['Invoices.!error.date_closed.format'] = 'Das Abschlussdatum hat ein ungültiges Datumsformat.';
$lang['Invoices.!error.date_due.after_billed'] = 'Das Fälligkeitsdatum muss an oder nach dem Datum der Rechnung liegen.';
$lang['Invoices.!error.date_due.format'] = 'Das Fälligkeitsdatum hat ein ungültiges Datumsformat.';
$lang['Invoices.!error.date_billed.format'] = 'Das Abrechnungsdatum hat ein ungültiges Datumsformat.';
$lang['Invoices.!error.client_id.exists'] = 'Ungültige Client-ID.';
$lang['Invoices.!error.id.amount_applied'] = 'Rechnungszeilen, Währung und Status werden möglicherweise nicht aktualisiert, weil bereits ein Betrag auf diese Rechnung angewendet wurde.';
$lang['Invoices.!error.id_value.valid'] = 'Der Wert der Rechnungs-ID kann nicht ermittelt werden.';
$lang['Invoices.!error.id_format.length'] = 'Das ID-Format für Rechnungen darf nicht länger als 64 Zeichen sein.';
$lang['Invoices.!error.id_format.empty'] = 'Kein ID-Format für Rechnungen festgelegt.';
$lang['Invoices.!error.invoice_add.failed'] = 'Diese Rechnung konnte nicht erstellt werden. Bitte versuchen Sie es erneut.';
$lang['Invoices.!error.delivery.length'] = 'Die Länge der Versandart der Rechnung darf 32 Zeichen nicht überschreiten.';
$lang['Invoices.!error.delivery.empty'] = 'Bitte geben Sie eine Versandart für die Rechnung an.';
$lang['Invoices.!error.method.exists'] = 'Sie müssen mindestens eine Versandart festlegen.';
$lang['Invoices.!error.invoice_recur_id.exists'] = 'Ungültige ID der wiederkehrenden Rechnung.';
$lang['Invoices.!error.invoice_id.exists'] = 'Ungültige Rechnungs-ID.';
$lang['Invoices.cache_methods.json_pdf'] = 'JSON + PDF';
$lang['Invoices.cache_methods.json'] = 'JSON';
$lang['Invoices.cache_methods.none'] = 'Keine';
$lang['Invoices.types.proforma'] = 'Pro forma';
$lang['Invoices.types.standard'] = 'Standard';
$lang['Invoices.status.void'] = 'Leere';
$lang['Invoices.status.draft'] = 'Entwurf';
$lang['Invoices.status.proforma'] = 'Pro forma';
$lang['Invoices.status.active'] = 'Aktiv';
$lang['Invoices.!line_item.recurring_renew_description'] = '%1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.coupon_line_item_description_percent'] = 'Coupon %1$s - %2$s%%';
$lang['Invoices.!line_item.coupon_line_item_description_amount'] = 'Coupon %1$s';
$lang['Invoices.!line_item.prorated_credit'] = 'Anteilige Gutschrift';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_onetime'] = '↳ Anteilige Addition von %1$s %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_date'] = '↳ Anteilige Addition von %1$s %2$sx %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_qty'] = '↳ Anteilige Addition von %1$s %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_onetime'] = '↳ Anteilige Addition von %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_date'] = '↳ Anteilige Addition von %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_text'] = '↳ Anteilige Addition von %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_onetime'] = '↳ Anteilige Addition von %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_addition_date'] = '↳ Anteilige Addition von %1$s %2$s (%3$s - %4$s)';
$lang['Invoices.!line_item.service_option_prorated_addition'] = '↳ Anteilige Addition von %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_onetime'] = '↳ Anteiliges Upgrade von %1$s von %2$sx %3$s auf %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_date'] = '↳ Anteiliges Upgrade von %1$s von %2$sx %3$s auf %4$sx %5$s (%6$s - %7$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty'] = '↳ Anteiliges Upgrade von %1$s von %2$sx %3$s auf %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_onetime'] = '↳ Anteiliges Upgrade von %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_date'] = '↳ Anteiliges Upgrade von %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text'] = '↳ Anteiliges Upgrade von %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_onetime'] = '↳ Anteiliges Upgrade von %1$s von %2$s auf %3$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_date'] = '↳ Anteiliges Upgrade von %1$s von %2$s auf %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade'] = '↳ Anteiliges Upgrade von %1$s von %2$s auf %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description_onetime'] = 'Anteiliges Upgrade von %1$s auf %2$s - %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description'] = 'Anteiliges Upgrade von %1$s auf %2$s - %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_setup_fee_description'] = '↳ %1$s - %2$s Einrichtungsgebühr';
$lang['Invoices.!line_item.service_option_renew_description'] = '↳ %1$s - %2$s';
$lang['Invoices.!line_item.service_setup_fee_description'] = '%1$s - %2$s Einrichtungsgebühr';
$lang['Invoices.!line_item.service_cancel_fee_description'] = '%1$s - %2$s Stornogebühr';
$lang['Invoices.!line_item.service_renew_description'] = '%5$s%1$s - %2$s (%3$s - %4$s)';
$lang['Invoices.!note_private.line_item'] = '- %1$s @ %2$s: %3$s';
$lang['Invoices.!note_private.removed_lines'] = 'Entfernte Einzelposten:';
$lang['Invoices.!note_private.service_cancel_date'] = 'Dienst #%1$s abgebrochen %2$s.';
$lang['Invoices.getDeliveryMethods.postalmethods'] = 'PostalMethods';
$lang['Invoices.getDeliveryMethods.interfax'] = 'InterFax';
$lang['Invoices.getDeliveryMethods.paper'] = 'Papier';
$lang['Invoices.getDeliveryMethods.email'] = 'E-Mail';
$lang['Invoices.getPricingPeriods.year'] = 'Jahr';
$lang['Invoices.getPricingPeriods.month'] = 'Monat';
$lang['Invoices.getPricingPeriods.week'] = 'Woche';
$lang['Invoices.getPricingPeriods.day'] = 'Tag';
$lang['Invoices.!error.invoice_id.unique'] = 'Die Zielrechnung kann nicht Teil der zusammenzuführenden Rechnungen sein.';
$lang['Invoices.!error.invoice_id.status'] = 'Die Zielrechnung muss offen sein und darf keine Transaktionen enthalten.';
$lang['Invoices.!error.invoice_ids.client'] = 'Alle Rechnungen müssen zu demselben Kunden gehören.';
$lang['Invoices.!error.invoice_ids.status'] = 'Alle Rechnungen müssen offen und ohne Transaktionen sein.';
$lang['Invoices.!error.invoice_ids.currency'] = 'Alle Rechnungen müssen die gleiche Währung haben.';
$lang['Invoices.!error.invoice_ids.count'] = 'Es müssen mindestens zwei Rechnungen ausgewählt werden.';
$lang['Invoices.!line_item.parent_description'] = 'Kinderservice von %1$s - %2$s:';

