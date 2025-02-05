<?php
/**
 * Packages
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Packages.!error.manual_activation.valid'] = 'Die manuelle Aktivierung muss entweder 1 oder 0 sein.';
$lang['Packages.getStatusTypes.restricted'] = 'Eingeschränkt';
$lang['Packages.getStatusTypes.inactive'] = 'Inaktiv';
$lang['Packages.getStatusTypes.active'] = 'Aktiv';
$lang['Packages.getPricingPeriods.onetime_plural'] = 'Einmalig';
$lang['Packages.getPricingPeriods.year_plural'] = 'Jahre';
$lang['Packages.getPricingPeriods.month_plural'] = 'Monate';
$lang['Packages.getPricingPeriods.week_plural'] = 'Wochen';
$lang['Packages.getPricingPeriods.day_plural'] = 'Tage';
$lang['Packages.getPricingPeriods.onetime'] = 'Einmalig';
$lang['Packages.getPricingPeriods.year'] = 'Jahr';
$lang['Packages.getPricingPeriods.month'] = 'Monat';
$lang['Packages.getPricingPeriods.week'] = 'Woche';
$lang['Packages.getPricingPeriods.day'] = 'Tag';
$lang['Packages.!error.groups[].valid'] = 'Die gewählte Paketgruppe gehört nicht zu dem angegebenen Unternehmen.';
$lang['Packages.!error.groups[].exists'] = 'Ungültige Paketgruppen-ID.';
$lang['Packages.!error.pricing[][id].deletable'] = 'Der Begriff konnte nicht gestrichen werden, weil er von einer oder mehreren Dienststellen verwendet wird.';
$lang['Packages.!error.pricing[][id].format'] = 'Ungültige Paketpreis-ID.';
$lang['Packages.!error.pricing[][currency].in_use'] = 'Die Währung kann nicht in einer Preisfindung aktualisiert werden, die in Gebrauch ist.';
$lang['Packages.!error.pricing[][currency].format'] = 'Der Währungscode muss aus 3 Zeichen bestehen.';
$lang['Packages.!error.pricing[][cancel_fee].format'] = 'Die Stornogebühr muss eine Zahl sein.';
$lang['Packages.!error.pricing[][setup_fee].format'] = 'Die Einrichtungsgebühr muss eine Zahl sein.';
$lang['Packages.!error.pricing[][price_transfer].format'] = 'Der Verrechnungspreis muss eine Zahl sein.';
$lang['Packages.!error.pricing[][price_renews].valid'] = 'Der Verlängerungspreis kann nicht für einen bestimmten Zeitraum festgelegt werden.';
$lang['Packages.!error.pricing[][price_renews].format'] = 'Der Verlängerungspreis muss eine Zahl sein.';
$lang['Packages.!error.pricing[][price].format'] = 'Der Preis muss eine Zahl sein.';
$lang['Packages.!error.pricing[][period].in_use'] = 'Der Zeitraum kann nicht in einer Preisfindung aktualisiert werden, die in Gebrauch ist.';
$lang['Packages.!error.pricing[][period].format'] = 'Ungültiger Periodentyp.';
$lang['Packages.!error.pricing[][term].in_use'] = 'Der Begriff kann nicht in einer Preisfindung aktualisiert werden, die in Gebrauch ist.';
$lang['Packages.!error.pricing[][term].valid'] = 'Der Term muss größer als 0 sein.';
$lang['Packages.!error.pricing[][term].length'] = 'Die Länge des Begriffs darf 5 Zeichen nicht überschreiten.';
$lang['Packages.!error.pricing[][term].format'] = 'Der Begriff muss eine Zahl sein.';
$lang['Packages.!error.email_content.parse'] = 'Fehler beim Parsen der Vorlage: %1$s';
$lang['Packages.!error.email_content[][lang].length'] = 'Die Länge der Sprache darf 5 Zeichen nicht überschreiten.';
$lang['Packages.!error.email_content[][lang].empty'] = 'Bitte geben Sie eine Sprache ein.';
$lang['Packages.!error.prorata_cutoff.format'] = 'Der anteilige Stichtag muss zwischen 1 und 28 liegen.';
$lang['Packages.!error.prorata_day.format'] = 'Der anteilige Tag muss zwischen 1 und 28 liegen.';
$lang['Packages.!error.hidden.format'] = 'Ob diese Gruppe in der Schnittstelle ausgeblendet werden soll, muss auf 1 oder 0 gesetzt werden.';
$lang['Packages.!error.status.format'] = 'Ungültiger Status.';
$lang['Packages.!error.upgrades_use_renewal.valid'] = 'Die Erneuerungspreise für Upgrades müssen entweder 1 oder 0 sein.';
$lang['Packages.!error.override_price.valid'] = 'Paketpreise als Override-Preis festlegen muss entweder 1 oder 0 sein.';
$lang['Packages.!error.single_term.valid'] = 'Ein einzelner Begriff muss entweder 1 oder 0 sein.';
$lang['Packages.!error.taxable.length'] = 'Die steuerpflichtige Länge darf 1 Zeichen nicht überschreiten.';
$lang['Packages.!error.taxable.format'] = 'Der Steuerwert muss eine Zahl sein.';
$lang['Packages.!error.module_group_client.valid'] = 'Client darf Gruppe wählen muss entweder 1 oder 0 sein.';
$lang['Packages.!error.module_group.format'] = 'Ungültige Modulgruppe angegeben.';
$lang['Packages.!error.module_row.format'] = 'Ungültige Modulzeile angegeben.';
$lang['Packages.!error.plugins[].valid'] = 'Ungültiges Plugin angegeben.';
$lang['Packages.!error.option_groups[].valid'] = 'Ungültige konfigurierbare Paketoptionsgruppe angegeben.';
$lang['Packages.!error.client_qty.format'] = 'Das Kundenlimit muss eine Zahl sein.';
$lang['Packages.!error.qty.format'] = 'Die Menge muss eine Zahl sein.';
$lang['Packages.!error.descriptions.empty_lang'] = 'Bitte geben Sie für jede Beschreibung einen Sprachencode für das Paket an.';
$lang['Packages.!error.descriptions.format'] = 'Die Paketbeschreibungen haben ein ungültiges Format.';
$lang['Packages.!error.names.empty_lang'] = 'Bitte geben Sie für jeden Namen einen Sprachencode für das Paket an.';
$lang['Packages.!error.names.empty_name'] = 'Bitte geben Sie für jede Sprache einen Paketnamen an.';
$lang['Packages.!error.names.format'] = 'Die Paketnamen haben ein ungültiges Format.';
$lang['Packages.!error.module_id.changed'] = 'Das Modul kann nicht geändert werden, da dieses Paket bereits von einem oder mehreren Diensten verwendet wird.';
$lang['Packages.!error.module_id.exists'] = 'Ungültiges Modul angegeben.';
$lang['Packages.!error.package_id.has_children'] = 'Das Paket konnte nicht gelöscht werden, weil ein Dienst untergeordnete Dienste hat.';
$lang['Packages.!error.package_id.exists'] = 'Das Paket konnte nicht gelöscht werden, da es derzeit von einem Dienst verwendet wird.';
$lang['Packages.!error.company_id.exists'] = 'Ungültige Firma angegeben.';

