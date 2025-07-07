<?php
/**
 * Services
 *
 * @package blesta
 * @subpackage blesta.language.sv_se
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Services.getActions.update_coupon'] = 'Uppdatera kupong';
$lang['Services.getActions.change_renew'] = 'Ändring Förnyelse Datum';
$lang['Services.getActions.schedule_cancel'] = 'Annullering av schema';
$lang['Services.getActions.cancel'] = 'Avbryt';
$lang['Services.getActions.unsuspend'] = 'Utan uppskov';
$lang['Services.getActions.suspend'] = 'Avbryta';
$lang['Services.getStatusTypes.in_review'] = 'I översikt';
$lang['Services.getStatusTypes.suspended'] = 'Suspenderad';
$lang['Services.getStatusTypes.pending'] = 'Pågående';
$lang['Services.getStatusTypes.canceled'] = 'Avbokad';
$lang['Services.getStatusTypes.active'] = 'Aktiv';
$lang['Services.!error.prorate.format'] = 'Om prorata ska användas måste anges som "true" eller "false".';
$lang['Services.!error.service_id.has_children'] = 'Denna tjänst får inte raderas eftersom den har barntjänster. Avbryt eller radera dessa tjänster och försök igen.';
$lang['Services.!error.status.valid'] = 'Endast pågående, avbrutna eller granskade tjänster kan raderas.';
$lang['Services.!error.configoptions.valid'] = 'Ett av de valda konfigurerbara alternativen är inte giltigt för tjänsten.';
$lang['Services.!error.date_canceled.valid'] = 'Du måste ange ett giltigt datum för att avbryta denna tjänst.';
$lang['Services.!error.pricing_id.valid'] = 'Du måste välja en giltig term.';
$lang['Services.!error.invoice_method.valid'] = 'Du måste välja en giltig faktureringsmetod.';
$lang['Services.!error.fields[][encrypted].format'] = 'Ett servicefält för kryptering har ett ogiltigt format.';
$lang['Services.!error.fields[][value].empty'] = 'Ett värde är tomt från servicefälten.';
$lang['Services.!error.fields[][key].empty'] = 'En nyckel är tom från servicefälten.';
$lang['Services.!error.use_module.format'] = 'Ogiltigt format för användningsmodul.';
$lang['Services.!error.date_canceled.format'] = 'Ogiltigt datumformat för annullering.';
$lang['Services.!error.date_suspended.format'] = 'Ogiltigt datumformat för avstängning.';
$lang['Services.!error.date_last_renewed.format'] = 'Felaktigt datumformat för senaste förnyelse.';
$lang['Services.!error.date_renews.valid'] = 'Förnyelsedatumet måste vara större än det senaste förnyelsedatumet på %1$s.';
$lang['Services.!error.date_renews.format'] = 'Ogiltigt datumformat för förnyelse.';
$lang['Services.!error.date_added.format'] = 'Ogiltigt format för tillagt datum.';
$lang['Services.!error.status.format'] = 'Ogiltig status.';
$lang['Services.!error.override_currency.format'] = 'Vänligen välj en giltig valuta.';
$lang['Services.!error.override_price.override'] = 'Både ett pris och en valuta måste anges för att åsidosätta det aktuella priset.';
$lang['Services.!error.override_price.format'] = 'Prisöverskridandet måste vara ett nummer.';
$lang['Services.!error.module_group.valid'] = 'Modulgruppen existerar inte.';
$lang['Services.!error.module_row.valid'] = 'Modulraden existerar inte.';
$lang['Services.!error.qty.available'] = 'Kvantitetsgräns uppnådd. Om möjligt, vänligen välj en mindre kvantitet.';
$lang['Services.!error.qty.length'] = 'Kvantiteten får inte överstiga 10 tecken.';
$lang['Services.!error.qty.format'] = 'Antal måste vara ett tal.';
$lang['Services.!error.coupon_id.valid'] = 'Kupongen verkar inte vara giltig.';
$lang['Services.!error.module_row_id.exists'] = 'Ogiltigt ID för modulrad.';
$lang['Services.!error.client_id.allowed'] = 'Kunden kan inte komma åt det paketet.';
$lang['Services.!error.client_id.exists'] = 'Klienten existerar inte.';
$lang['Services.!error.pricing_id.overrides'] = 'Paketvillkoret kan inte ändras när prisöverskridanden är inställda.';
$lang['Services.!error.pricing_id.exists'] = 'Vänligen välj en giltig term.';
$lang['Services.!error.id_value.valid'] = 'Det gick inte att fastställa fakturans ID-värde.';
$lang['Services.!error.id_format.length'] = 'ID-formatet för fakturor får inte överstiga 64 tecken.';
$lang['Services.!error.id_format.empty'] = 'Inget ID-format för fakturor.';
$lang['Services.!error.package_group_id.exists'] = 'Ogiltigt ID för paketgrupp.';
$lang['Services.!error.parent_service_id.parent'] = 'Den överordnade tjänstens ID finns redan som ett barn till en annan tjänst.';
$lang['Services.!error.parent_service_id.exists'] = 'Ogiltigt ID för överordnad tjänst.';
$lang['Services.!error.service_id.exists'] = 'Ogiltigt service-ID.';
$lang['Services.!error.move.unpaid_invoices'] = 'Tjänsten kan inte flyttas till en annan kund eftersom det finns obetalda fakturor.';
$lang['Services.!error.encrypted.format'] = 'Ogiltigt format för krypterad.';
$lang['Services.!error.value.empty'] = 'Servicefältets värde får inte vara tomt.';
$lang['Services.!error.key.length'] = 'Tjänstefältnyckeln får inte innehålla mer än 32 tecken.';
$lang['Services.!error.key.empty'] = 'Nyckeln för servicefältet får inte vara tom.';
$lang['Services.getActions.uncancel'] = 'Återaktivera';
$lang['Services.!error.uncancel.unsupported'] = 'Denna tjänst kan inte avbokas, eftersom modulen inte stöder den.';

