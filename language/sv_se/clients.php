<?php
/**
 * Clients
 *
 * @package blesta
 * @subpackage blesta.language.sv_se
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Clients.customfield.cf2'] = 'Anpassat fält';
$lang['Clients.setDebitAccountFailure.note_body'] = 'Betalkontot %1$s som slutar på x%2$s inaktiverades eftersom det överskred det maximala antalet nekande försök.';
$lang['Clients.setDebitAccountFailure.note_title'] = 'Automatisk debitering avaktiverad för betalkonto.';
$lang['Clients.getStatusTypes.fraud'] = 'Bedrägeri';
$lang['Clients.getStatusTypes.inactive'] = 'Inaktiv';
$lang['Clients.getStatusTypes.active'] = 'Aktiv';
$lang['Clients.getCustomFieldTypes.textarea'] = 'Textområde';
$lang['Clients.getCustomFieldTypes.dropdown'] = 'Rullgardinsmeny';
$lang['Clients.getCustomFieldTypes.checkbox'] = 'Kontrollruta';
$lang['Clients.getCustomFieldTypes.textbox'] = 'Textruta';
$lang['Clients.!error.package_ids.exists'] = 'Minst ett av de angivna paketen finns inte.';
$lang['Clients.!error.stickied.length'] = 'Klistermärkets längd får inte överstiga 1 tecken.';
$lang['Clients.!error.stickied.format'] = 'Sticky måste vara ett nummer.';
$lang['Clients.!error.note_id.exists'] = 'Ogiltigt ID för anteckning.';
$lang['Clients.!error.title.length'] = 'Titelns längd får inte överstiga 255 tecken.';
$lang['Clients.!error.title.empty'] = 'Vänligen ange en titel.';
$lang['Clients.!error.staff_id.exists'] = 'Ogiltigt personal-ID.';
$lang['Clients.!error.value.valid'] = '%1$s är inställt på ett ogiltigt värde.';
$lang['Clients.!error.value.required'] = '%1$s är i ett ogiltigt format.';
$lang['Clients.!error.read_only.length'] = 'Endast läsning får inte överstiga 1 tecken i längd.';
$lang['Clients.!error.read_only.format'] = 'Endast läsning måste vara ett nummer.';
$lang['Clients.!error.encrypted.length'] = 'Krypterade uppgifter får inte vara längre än 1 tecken.';
$lang['Clients.!error.encrypted.format'] = 'Krypterat måste vara ett nummer.';
$lang['Clients.!error.client_field_id.matches'] = 'Det anpassade fältet är ogiltigt.';
$lang['Clients.!error.client_field_id.exists'] = 'Ogiltigt ID för anpassat fält.';
$lang['Clients.!error.show_client.length'] = 'Showklienten får inte vara längre än 1 tecken.';
$lang['Clients.!error.show_client.format'] = 'Visa kunden måste vara ett nummer.';
$lang['Clients.!error.regex.valid'] = 'Det reguljära uttrycket är ogiltigt.';
$lang['Clients.!error.default.valid'] = 'Standardvärdet är ogiltigt.';
$lang['Clients.!error.values.format'] = 'Värdena är i ett ogiltigt format.';
$lang['Clients.!error.type.format'] = 'Ogiltig typ.';
$lang['Clients.!error.is_lang.length'] = 'is_lang får inte vara längre än 1 tecken.';
$lang['Clients.!error.is_lang.format'] = 'is_lang måste vara ett tal.';
$lang['Clients.!error.link.valid'] = 'Vänligen ange en giltig länk.';
$lang['Clients.!error.name.empty'] = 'Vänligen ange ett namn.';
$lang['Clients.!error.receive_email_marketing.valid'] = 'Ogiltigt värde för e-postmarknadsföring.';
$lang['Clients.!error.language.editable'] = 'Språket kanske inte är uppdaterat.';
$lang['Clients.!error.language.valid'] = 'Ogiltigt språk.';
$lang['Clients.!error.inv_method.editable'] = 'Fakturans leveransmetod kanske inte är uppdaterad.';
$lang['Clients.!error.inv_method.valid'] = 'Ogiltig metod för leverans av faktura.';
$lang['Clients.!error.default_currency.editable'] = 'Valutan kanske inte är uppdaterad.';
$lang['Clients.!error.default_currency.valid'] = 'Ogiltig valuta.';
$lang['Clients.!error.inv_address_to.exists'] = 'Ange en giltig kontakt att adressera fakturor till.';
$lang['Clients.!error.autodebit.format'] = 'Ogiltigt värde för autodebitering.';
$lang['Clients.!error.client_id.deleteable'] = 'Kunden får inte tas bort så länge det finns öppna fakturor, återkommande fakturor eller aktiva/avbrutna tjänster. Annullera alla öppna fakturor, ta bort alla återkommande fakturor och avbryt alla aktiva/avbrutna tjänster innan du fortsätter.';
$lang['Clients.!error.settings[tax_id].valid'] = 'Ange ett giltigt skatte-ID/VATIN.';
$lang['Clients.!error.status.format'] = 'Ogiltig status.';
$lang['Clients.!error.user_id.unique'] = 'Klientens användar-ID %1$s är redan upptaget.';
$lang['Clients.!error.user_id.exists'] = 'Användar-ID ogiltigt.';
$lang['Clients.!error.id_value.valid'] = 'Det gick inte att fastställa värdet för klient-ID.';
$lang['Clients.!error.id_format.length'] = 'ID-formatet för kunder får inte överstiga 64 tecken.';
$lang['Clients.!error.id_format.empty'] = 'Inget ID-format fastställt för kunder.';
$lang['Clients.!error.type.exists'] = 'Ogiltig typ.';
$lang['Clients.!error.account_id.exists'] = 'Ogiltigt konto-ID.';
$lang['Clients.!error.client_id.exists'] = 'Ogiltigt klient-ID.';
$lang['Clients.!error.client_group_id.exists'] = 'Ogiltigt ID för kundgrupp.';
$lang['Clients.!error.payment_credit_limits.max_less_than_min'] = 'Det högsta kreditbeloppet för %1$s måste vara större än det lägsta beloppet.';
$lang['Clients.!error.payment_credit_limits.max_amount'] = 'Det maximala kreditbeloppet för %1$s måste vara större än 0.';
$lang['Clients.!error.payment_credit_limits.min_amount'] = 'Det lägsta kreditbeloppet för %1$s måste vara större än 0.';

