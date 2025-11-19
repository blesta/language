<?php
/**
 * Clients
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Clients.!error.client_group_id.exists'] = 'Ugyldigt klientgruppe-ID.';
$lang['Clients.!error.client_id.exists'] = 'Ugyldigt klient-ID.';
$lang['Clients.!error.account_id.exists'] = 'Ugyldigt konto ID.';
$lang['Clients.!error.type.exists'] = 'Ugyldig type.';
$lang['Clients.!error.id_format.empty'] = 'Intet ID-format indstillet til klienter.';
$lang['Clients.!error.id_format.length'] = 'ID-formatet for klienter må ikke overstige 64 tegn.';
$lang['Clients.!error.id_value.valid'] = 'Kan ikke bestemme klient-ID-værdi.';
$lang['Clients.!error.user_id.exists'] = 'Ugyldigt bruger-ID.';
$lang['Clients.!error.user_id.unique'] = 'Klientbruger-ID %1$s er allerede optaget.';
$lang['Clients.!error.status.format'] = 'Ugyldig status.';
$lang['Clients.!error.settings[tax_id].valid'] = 'Angiv venligst et gyldigt skatte-ID/VATIN.';
$lang['Clients.!error.client_id.deleteable'] = 'Klienten kan ikke slettes, så længe der er åbne fakturaer, tilbagevendende fakturaer eller aktive/suspenderede tjenester. Annullér venligst alle åbne fakturaer, slet alle tilbagevendende fakturaer, og annullér alle aktive/suspenderede tjenester, før du fortsætter.';
$lang['Clients.!error.autodebit.format'] = 'Ugyldig autodebit-værdi.';
$lang['Clients.!error.inv_address_to.exists'] = 'Angiv venligst en gyldig kontakt, som fakturaer skal adresseres til.';
$lang['Clients.!error.default_currency.valid'] = 'Ugyldig valuta.';
$lang['Clients.!error.default_currency.editable'] = 'Valutaen er muligvis ikke opdateret.';
$lang['Clients.!error.inv_method.valid'] = 'Ugyldig leveringsmetode for faktura.';
$lang['Clients.!error.inv_method.editable'] = 'Fakturaens leveringsmetode er muligvis ikke opdateret.';
$lang['Clients.!error.language.valid'] = 'Ugyldigt sprog.';
$lang['Clients.!error.language.editable'] = 'Sproget er muligvis ikke opdateret.';
$lang['Clients.!error.receive_email_marketing.valid'] = 'Ugyldig værdi for e-mailmarkedsføring.';
$lang['Clients.!error.name.empty'] = 'Indtast venligst et navn.';
$lang['Clients.!error.link.valid'] = 'Indtast venligst et gyldigt link.';
$lang['Clients.!error.is_lang.format'] = 'is_lang skal være et tal.';
$lang['Clients.!error.is_lang.length'] = 'is_lang må ikke overstige 1 tegn i længden.';
$lang['Clients.!error.type.format'] = 'Ugyldig type.';
$lang['Clients.!error.values.format'] = 'Værdierne er i et ugyldigt format.';
$lang['Clients.!error.default.valid'] = 'Standardværdien er ugyldig.';
$lang['Clients.!error.regex.valid'] = 'Det regulære udtryk er ugyldigt.';
$lang['Clients.!error.show_client.format'] = 'Vis klient skal være et nummer.';
$lang['Clients.!error.show_client.length'] = 'Showklienten må ikke overstige 1 tegn i længden.';
$lang['Clients.!error.client_field_id.exists'] = 'Ugyldigt brugerdefineret felt-ID.';
$lang['Clients.!error.client_field_id.matches'] = 'Det brugerdefinerede felt er ugyldigt.';
$lang['Clients.!error.encrypted.format'] = 'Encrypted skal være et tal.';
$lang['Clients.!error.encrypted.length'] = 'Krypteret må ikke overstige 1 tegn i længden.';
$lang['Clients.!error.read_only.format'] = 'Skrivebeskyttet skal være et tal.';
$lang['Clients.!error.read_only.length'] = 'Kun læsning må ikke overstige 1 tegn i længden.';
$lang['Clients.!error.value.required'] = '%1$s er i et ugyldigt format.';
$lang['Clients.!error.value.valid'] = '%1$s er sat til en ugyldig værdi.';
$lang['Clients.!error.staff_id.exists'] = 'Ugyldigt personale-ID.';
$lang['Clients.!error.title.empty'] = 'Indtast venligst en titel.';
$lang['Clients.!error.title.length'] = 'Titlens længde må ikke overstige 255 tegn.';
$lang['Clients.!error.note_id.exists'] = 'Ugyldigt note-ID.';
$lang['Clients.!error.stickied.format'] = 'Sticky skal være et tal.';
$lang['Clients.!error.stickied.length'] = 'Sticky-længden må ikke overstige 1 tegn.';
$lang['Clients.!error.package_ids.exists'] = 'Mindst én af de angivne pakker findes ikke.';
$lang['Clients.getCustomFieldTypes.textbox'] = 'Tekstboks';
$lang['Clients.getCustomFieldTypes.checkbox'] = 'Afkrydsningsfelt';
$lang['Clients.getCustomFieldTypes.dropdown'] = 'Drop ned';
$lang['Clients.getCustomFieldTypes.textarea'] = 'Tekstområde';
$lang['Clients.getStatusTypes.active'] = 'Aktiv';
$lang['Clients.getStatusTypes.inactive'] = 'Inaktiv';
$lang['Clients.getStatusTypes.fraud'] = 'Svindel';
$lang['Clients.setDebitAccountFailure.note_title'] = 'Automatisk debitering deaktiveret for betalingskonto.';
$lang['Clients.setDebitAccountFailure.note_body'] = 'Betalingskontoen %1$s, der ender på x%2$s, blev deaktiveret, fordi den overskred det maksimale antal afvisningsforsøg.';
$lang['Clients.customfield.cf2'] = 'Brugerdefineret felt';
$lang['Clients.!error.payment_credit_limits.max_less_than_min'] = 'Det maksimale kreditbeløb for %1$s skal være større end minimumsbeløbet.';
$lang['Clients.!error.payment_credit_limits.max_amount'] = 'Det maksimale kreditbeløb for %1$s skal være større end 0.';
$lang['Clients.!error.payment_credit_limits.min_amount'] = 'Det mindste kreditbeløb for %1$s skal være større end 0.';

