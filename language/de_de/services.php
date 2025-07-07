<?php
/**
 * Services
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Services.getActions.update_coupon'] = 'Coupon aktualisieren';
$lang['Services.getActions.change_renew'] = 'Verlängerungsdatum ändern';
$lang['Services.getActions.schedule_cancel'] = 'Stornierung von Zeitplänen';
$lang['Services.getActions.cancel'] = 'Abbrechen';
$lang['Services.getActions.unsuspend'] = 'Aufhängen';
$lang['Services.getActions.suspend'] = 'aussetzen.';
$lang['Services.getStatusTypes.in_review'] = 'Im Rückblick';
$lang['Services.getStatusTypes.suspended'] = 'Aufgehängt';
$lang['Services.getStatusTypes.pending'] = 'Anhängig';
$lang['Services.getStatusTypes.canceled'] = 'Abgesagt';
$lang['Services.getStatusTypes.active'] = 'Aktiv';
$lang['Services.!error.prorate.format'] = 'Ob anteilig, muss auf "true" oder "false" gesetzt werden.';
$lang['Services.!error.service_id.has_children'] = 'Dieser Dienst kann nicht gelöscht werden, da er über untergeordnete Dienste verfügt. Bitte kündigen oder löschen Sie diese Dienste und versuchen Sie es erneut.';
$lang['Services.!error.status.valid'] = 'Nur ausstehende, stornierte oder in Prüfung befindliche Dienste können gelöscht werden.';
$lang['Services.!error.configoptions.valid'] = 'Eine der ausgewählten konfigurierbaren Optionen ist für den Dienst nicht gültig.';
$lang['Services.!error.date_canceled.valid'] = 'Sie müssen ein gültiges Datum festlegen, um diesen Dienst zu kündigen.';
$lang['Services.!error.pricing_id.valid'] = 'Sie müssen einen gültigen Begriff auswählen.';
$lang['Services.!error.invoice_method.valid'] = 'Sie müssen eine gültige Rechnungsmethode auswählen.';
$lang['Services.!error.fields[][encrypted].format'] = 'Ein Dienstfeld für die Verschlüsselung hat ein ungültiges Format.';
$lang['Services.!error.fields[][value].empty'] = 'Ein Wert in den Dienstfeldern ist leer.';
$lang['Services.!error.fields[][key].empty'] = 'Ein Schlüssel ist leer von den Dienstfeldern.';
$lang['Services.!error.use_module.format'] = 'Unzulässiges Format des Verwendungsmoduls.';
$lang['Services.!error.date_canceled.format'] = 'Ungültiges Format des abgebrochenen Datums.';
$lang['Services.!error.date_suspended.format'] = 'Ungültiges Format für das ausgesetzte Datum.';
$lang['Services.!error.date_last_renewed.format'] = 'Ungültiges Format für das zuletzt erneuerte Datum.';
$lang['Services.!error.date_renews.valid'] = 'Das Verlängerungsdatum muss größer sein als das letzte Verlängerungsdatum von %1$s.';
$lang['Services.!error.date_renews.format'] = 'Ungültiges Format für das Erneuerungsdatum.';
$lang['Services.!error.date_added.format'] = 'Ungültiges Datumsformat hinzugefügt.';
$lang['Services.!error.status.format'] = 'Ungültiger Status.';
$lang['Services.!error.override_currency.format'] = 'Bitte wählen Sie eine gültige Währung.';
$lang['Services.!error.override_price.override'] = 'Um den aktuellen Preis zu überschreiben, müssen sowohl ein Preis als auch eine Währung festgelegt werden.';
$lang['Services.!error.override_price.format'] = 'Die Preisüberschreitung muss eine Zahl sein.';
$lang['Services.!error.module_group.valid'] = 'Die Modulgruppe ist nicht vorhanden.';
$lang['Services.!error.module_row.valid'] = 'Die Modulzeile ist nicht vorhanden.';
$lang['Services.!error.qty.available'] = 'Mengenbegrenzung erreicht. Wenn möglich, wählen Sie bitte eine kleinere Menge.';
$lang['Services.!error.qty.length'] = 'Die Länge der Menge darf 10 Zeichen nicht überschreiten.';
$lang['Services.!error.qty.format'] = 'Die Menge muss eine Zahl sein.';
$lang['Services.!error.coupon_id.valid'] = 'Dieser Kupon scheint nicht gültig zu sein.';
$lang['Services.!error.module_row_id.exists'] = 'Ungültige Modulzeilen-ID.';
$lang['Services.!error.client_id.allowed'] = 'Der Client kann nicht auf dieses Paket zugreifen.';
$lang['Services.!error.client_id.exists'] = 'Der Client existiert nicht.';
$lang['Services.!error.pricing_id.overrides'] = 'Die Paketlaufzeit kann nicht geändert werden, wenn Preisaufschläge festgelegt sind.';
$lang['Services.!error.pricing_id.exists'] = 'Bitte wählen Sie einen gültigen Begriff.';
$lang['Services.!error.id_value.valid'] = 'Der Wert der Rechnungs-ID kann nicht ermittelt werden.';
$lang['Services.!error.id_format.length'] = 'Das ID-Format für Rechnungen darf nicht länger als 64 Zeichen sein.';
$lang['Services.!error.id_format.empty'] = 'Kein ID-Format für Rechnungen festgelegt.';
$lang['Services.!error.package_group_id.exists'] = 'Ungültige Paketgruppen-ID.';
$lang['Services.!error.parent_service_id.parent'] = 'Die ID des übergeordneten Dienstes existiert bereits als Kind eines anderen Dienstes.';
$lang['Services.!error.parent_service_id.exists'] = 'Ungültige übergeordnete Dienst-ID.';
$lang['Services.!error.service_id.exists'] = 'Ungültige Dienst-ID.';
$lang['Services.!error.move.unpaid_invoices'] = 'Der Dienst kann nicht auf einen anderen Kunden übertragen werden, weil er unbezahlte Rechnungen hat.';
$lang['Services.!error.encrypted.format'] = 'Ungültiges Format für verschlüsselt.';
$lang['Services.!error.value.empty'] = 'Der Wert des Servicefeldes darf nicht leer sein.';
$lang['Services.!error.key.length'] = 'Der Servicefeldschlüssel darf nicht länger als 32 Zeichen sein.';
$lang['Services.!error.key.empty'] = 'Der Schlüssel des Servicefeldes darf nicht leer sein.';
$lang['Services.getActions.uncancel'] = 'Reaktivieren Sie';
$lang['Services.!error.uncancel.unsupported'] = 'Dieser Dienst kann nicht abbestellt werden, da das Modul ihn nicht unterstützt.';

