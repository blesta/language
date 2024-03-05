<?php
/**
 * Services
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Services.!error.key.empty'] = 'Nøglen til servicefeltet må ikke være tom.';
$lang['Services.!error.key.length'] = 'Servicefeltets nøgle må ikke overstige 32 tegn.';
$lang['Services.!error.value.empty'] = 'Servicefeltets værdi må ikke være tom.';
$lang['Services.!error.encrypted.format'] = 'Ugyldigt format for encrypted.';
$lang['Services.!error.move.unpaid_invoices'] = 'Tjenesten kan ikke flyttes til en anden kunde, fordi den har ubetalte fakturaer.';
$lang['Services.!error.service_id.exists'] = 'Ugyldigt service-ID.';
$lang['Services.!error.parent_service_id.exists'] = 'Ugyldigt overordnet service-ID.';
$lang['Services.!error.parent_service_id.parent'] = 'Det overordnede service-ID findes allerede som et barn til en anden service.';
$lang['Services.!error.package_group_id.exists'] = 'Ugyldigt pakkegruppe-ID.';
$lang['Services.!error.id_format.empty'] = 'Intet ID-format indstillet til fakturaer.';
$lang['Services.!error.id_format.length'] = 'ID-formatet for fakturaer må ikke overstige 64 tegn.';
$lang['Services.!error.id_value.valid'] = 'Kan ikke bestemme faktura-ID-værdi.';
$lang['Services.!error.pricing_id.exists'] = 'Vælg venligst en gyldig term.';
$lang['Services.!error.pricing_id.overrides'] = 'Pakkebetingelsen kan ikke ændres, når prisoverskridelser er indstillet.';
$lang['Services.!error.client_id.exists'] = 'Klienten findes ikke.';
$lang['Services.!error.client_id.allowed'] = 'Klienten kan ikke få adgang til den pakke.';
$lang['Services.!error.module_row_id.exists'] = 'Ugyldigt modulrække-ID.';
$lang['Services.!error.coupon_id.valid'] = 'Den kupon ser ikke ud til at være gyldig.';
$lang['Services.!error.qty.format'] = 'Mængde skal være et tal.';
$lang['Services.!error.qty.length'] = 'Mængden må ikke overstige 10 tegn.';
$lang['Services.!error.qty.available'] = 'Mængdegrænsen er nået. Hvis det er muligt, bedes du vælge en mindre mængde.';
$lang['Services.!error.module_row.valid'] = 'Modulrækken findes ikke.';
$lang['Services.!error.module_group.valid'] = 'Modulgruppen findes ikke.';
$lang['Services.!error.override_price.format'] = 'Prisoverskridelsen skal være et tal.';
$lang['Services.!error.override_price.override'] = 'Både en pris og en valuta skal angives for at tilsidesætte den aktuelle pris.';
$lang['Services.!error.override_currency.format'] = 'Vælg venligst en gyldig valuta.';
$lang['Services.!error.status.format'] = 'Ugyldig status.';
$lang['Services.!error.date_added.format'] = 'Ugyldig dato tilføjet format.';
$lang['Services.!error.date_renews.format'] = 'Ugyldigt format for fornyelsesdato.';
$lang['Services.!error.date_renews.valid'] = 'Fornyelsesdatoen skal være større end sidste fornyelsesdato på %1$s.';
$lang['Services.!error.date_last_renewed.format'] = 'Ugyldigt datoformat for sidste fornyelse.';
$lang['Services.!error.date_suspended.format'] = 'Ugyldigt suspenderet datoformat.';
$lang['Services.!error.date_canceled.format'] = 'Ugyldigt annulleret datoformat.';
$lang['Services.!error.use_module.format'] = 'Ugyldigt format for brugsmodul.';
$lang['Services.!error.fields[][key].empty'] = 'En nøgle er tom fra servicefelterne.';
$lang['Services.!error.fields[][value].empty'] = 'En værdi er tom fra servicefelterne.';
$lang['Services.!error.fields[][encrypted].format'] = 'Et servicefelt til kryptering er i et ugyldigt format.';
$lang['Services.!error.invoice_method.valid'] = 'Du skal vælge en gyldig faktureringsmetode.';
$lang['Services.!error.pricing_id.valid'] = 'Du skal vælge en gyldig term.';
$lang['Services.!error.date_canceled.valid'] = 'Du skal angive en gyldig dato for at annullere denne service.';
$lang['Services.!error.configoptions.valid'] = 'En af de valgte konfigurerbare indstillinger er ikke gyldig for tjenesten.';
$lang['Services.!error.status.valid'] = 'Kun ventende, annullerede eller gennemgåede tjenester kan slettes.';
$lang['Services.!error.service_id.has_children'] = 'Denne tjeneste kan ikke slettes, fordi den har børnetjenester. Annullér eller slet disse tjenester, og prøv igen.';
$lang['Services.!error.prorate.format'] = 'Hvorvidt der skal ske en proportionering, skal sættes til \'true\' eller \'false\'.';
$lang['Services.getStatusTypes.active'] = 'Aktiv';
$lang['Services.getStatusTypes.canceled'] = 'Aflyst';
$lang['Services.getStatusTypes.pending'] = 'Afventer';
$lang['Services.getStatusTypes.suspended'] = 'Suspenderet';
$lang['Services.getStatusTypes.in_review'] = 'En gennemgang';
$lang['Services.getActions.suspend'] = 'Suspender';
$lang['Services.getActions.unsuspend'] = 'Ophængning';
$lang['Services.getActions.cancel'] = 'Annuller';
$lang['Services.getActions.schedule_cancel'] = 'Aflysning af tidsplan';
$lang['Services.getActions.change_renew'] = 'Ændring af fornyelsesdato';
$lang['Services.getActions.update_coupon'] = 'Opdater kupon';

