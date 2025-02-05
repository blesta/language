<?php
/**
 * Admin Company Currencies
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyCurrencies.!success.setup_updated'] = 'Valutaindstillingerne blev opdateret med succes!';
$lang['AdminCompanyCurrencies.!success.add_created'] = 'Valutaen %1$s blev oprettet med succes!';
$lang['AdminCompanyCurrencies.!success.edit_updated'] = 'Valutaen %1$s blev opdateret med succes!';
$lang['AdminCompanyCurrencies.!success.delete_deleted'] = 'Valutaen %1$s blev slettet med succes!';
$lang['AdminCompanyCurrencies.!success.rates_updated'] = 'Valutakurserne blev opdateret med succes.';
$lang['AdminCompanyCurrencies.!tooltip.precision'] = 'Præcisionen er antallet af betydende cifre efter decimalpladsen, som valutaen understøtter.';
$lang['AdminCompanyCurrencies.!tooltip.default_currency'] = 'Den standardvaluta, der bruges i systemet. Indstil den til din foretrukne valuta.';
$lang['AdminCompanyCurrencies.!tooltip.show_currency_code'] = 'Marker for at aktivere visning af valutakoden ved siden af de viste priser.';
$lang['AdminCompanyCurrencies.!tooltip.client_set_currency'] = 'Marker for at give kunderne mulighed for at vælge deres standardvaluta blandt dem, der er tilgængelige i systemet.';
$lang['AdminCompanyCurrencies.!tooltip.multi_currency_pricing'] = 'Markér for at tillade, at pakker kun kan bestilles med de priser, der er defineret for den pågældende pakke. Hvis du markerer dette, skal der defineres priser for hver valuta, du ønsker at acceptere for den pågældende pakke. Med andre ord forhindrer dette, at valutaomregning finder sted.';
$lang['AdminCompanyCurrencies.!tooltip.exchange_rates_auto_update'] = 'Markér for at tillade, at valutakurser automatisk opdateres ved hjælp af en af de tilgængelige valutakursprocessorer.';
$lang['AdminCompanyCurrencies.!tooltip.exchange_rates_processor'] = 'Indstiller den processor, der skal bruges til at opdatere valutakurser. Tilgængelige valutaer varierer fra processor til processor.';
$lang['AdminCompanyCurrencies.!tooltip.exchange_rates_processor_key'] = 'Der kræves en API-nøgle for at hente valutakurser fra den valgte processor.';
$lang['AdminCompanyCurrencies.!tooltip.exchange_rates_padding'] = 'Valutakursværdier bestemt af en processor vil blive øget med den givne procentdel.';
$lang['AdminCompanyCurrencies.!cancel.field_cancel'] = 'Annuller';
$lang['AdminCompanyCurrencies.setup.page_title'] = 'Indstillinger > Firma > Valutaer > Opsætning af valuta';
$lang['AdminCompanyCurrencies.setup.tooltip_currency_pricing'] = 'Denne indstilling kræver, at pakkepriserne er indstillet i den angivne valuta for at være tilgængelige ved oprettelse af nye tjenester. Hvis den ikke er markeret, og der ikke findes pakkepriser for valutaen, vil prisen blive beregnet ud fra vekselkursen fra standardvalutaen.

Fornyelse af tjenester foretrækker altid pakkepriser i den valgte valuta, men vil bruge vekselkursen fra standardvalutaen, hvis den ikke er angivet for pakken.';
$lang['AdminCompanyCurrencies.setup.boxtitle_setup'] = 'Opsætning af valuta';
$lang['AdminCompanyCurrencies.setup.heading_general'] = 'Generelt';
$lang['AdminCompanyCurrencies.setup.field.default_currency'] = 'Standardvaluta';
$lang['AdminCompanyCurrencies.setup.field.show_currency_code'] = 'Vis valutakode';
$lang['AdminCompanyCurrencies.setup.field.client_set_currency'] = 'Tillad kunden at indstille valuta';
$lang['AdminCompanyCurrencies.setup.heading_multicurrency'] = 'Flere valutaer';
$lang['AdminCompanyCurrencies.setup.field.multi_currency_pricing'] = 'Brug kun pakkepriser til nye tjenester';
$lang['AdminCompanyCurrencies.setup.field.exchange_rates_auto_update'] = 'Opdater automatisk valutakurser';
$lang['AdminCompanyCurrencies.setup.field.last_updated'] = 'Priser sidst opdateret';
$lang['AdminCompanyCurrencies.setup.field.exchange_rates_processor'] = 'Processor til behandling af valutakurser';
$lang['AdminCompanyCurrencies.setup.field.exchange_rates_processor_key'] = 'API-nøgle til valutakursprocessor';
$lang['AdminCompanyCurrencies.setup.field.exchange_rates_padding'] = 'Pad-valutakurser';
$lang['AdminCompanyCurrencies.setup.field.setupsubmit'] = 'Opdater indstillinger';
$lang['AdminCompanyCurrencies.setup.no_exchange_updated'] = 'Aldrig';
$lang['AdminCompanyCurrencies.setup.open_parenthesis'] = '(';
$lang['AdminCompanyCurrencies.setup.closed_parenthesis'] = ')';
$lang['AdminCompanyCurrencies.active.page_title'] = 'Indstillinger > Virksomhed > Valutaer > Aktive valutaer';
$lang['AdminCompanyCurrencies.active.boxtitle_active'] = 'Aktive valutaer';
$lang['AdminCompanyCurrencies.active.categorylink_addcurrency'] = 'Tilføj valuta';
$lang['AdminCompanyCurrencies.active.no_results'] = 'Der er ingen aktive valutaer.';
$lang['AdminCompanyCurrencies.active.text_currency_code'] = 'Valutakode (ISO 4217)';
$lang['AdminCompanyCurrencies.active.text_format'] = 'Format';
$lang['AdminCompanyCurrencies.active.text_precision'] = 'Præcision';
$lang['AdminCompanyCurrencies.active.text_exchange_rate'] = 'Valutakurs';
$lang['AdminCompanyCurrencies.active.text_exchange_updated'] = 'Sidst opdateret';
$lang['AdminCompanyCurrencies.active.text_options'] = 'Valgmuligheder';
$lang['AdminCompanyCurrencies.active.option_edit'] = 'Rediger';
$lang['AdminCompanyCurrencies.active.option_delete'] = 'Slet';
$lang['AdminCompanyCurrencies.active.confirm_delete'] = 'Er du sikker på, at du vil slette denne valuta?';
$lang['AdminCompanyCurrencies.active.no_exchange_updated'] = 'Aldrig';
$lang['AdminCompanyCurrencies.add.page_title'] = 'Indstillinger > Virksomhed > Valutaer > Tilføj valuta';
$lang['AdminCompanyCurrencies.add.boxtitle_add'] = 'Tilføj valuta';
$lang['AdminCompanyCurrencies.add.field_code'] = 'Valutakode (ISO 4217)';
$lang['AdminCompanyCurrencies.add.field_format'] = 'Format';
$lang['AdminCompanyCurrencies.add.field_precision'] = 'Præcision';
$lang['AdminCompanyCurrencies.add.field_prefix'] = 'Præfiks Symbol';
$lang['AdminCompanyCurrencies.add.field_suffix'] = 'Suffiks Symbol';
$lang['AdminCompanyCurrencies.add.field_exchange_rate'] = 'Valutakurs';
$lang['AdminCompanyCurrencies.add.field_addsubmit'] = 'Opret valuta';
$lang['AdminCompanyCurrencies.add.confirm_add'] = 'Er du sikker på, at du vil oprette denne valuta? Denne valutas kurs vil blive overskrevet, når valutakurserne automatisk opdateres i systemet. Du kan deaktivere automatiske opdateringer under [Settings] > [Company] > [Currencies] > [Currency Setup].';
$lang['AdminCompanyCurrencies.edit.page_title'] = 'Indstillinger > Firma > Valutaer > Rediger valuta';
$lang['AdminCompanyCurrencies.edit.boxtitle_edit'] = 'Rediger valuta';
$lang['AdminCompanyCurrencies.edit.field_code'] = 'Valutakode (ISO 4217)';
$lang['AdminCompanyCurrencies.edit.field_format'] = 'Format';
$lang['AdminCompanyCurrencies.edit.field_precision'] = 'Præcision';
$lang['AdminCompanyCurrencies.edit.field_prefix'] = 'Præfiks Symbol';
$lang['AdminCompanyCurrencies.edit.field_suffix'] = 'Suffiks Symbol';
$lang['AdminCompanyCurrencies.edit.field_exchange_rate'] = 'Valutakurs';
$lang['AdminCompanyCurrencies.edit.field_editsubmit'] = 'Rediger valuta';
$lang['AdminCompanyCurrencies.edit.confirm_edit'] = 'Er du sikker på, at du vil opdatere denne valuta? Denne valutas kurs vil blive overskrevet, når valutakurser automatisk opdateres i systemet. Du kan deaktivere automatiske opdateringer under [Indstillinger] > [Virksomhed] > [Valutaer] > [Valutaopsætning].';

