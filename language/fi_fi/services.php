<?php
/**
 * Services
 *
 * @package blesta
 * @subpackage blesta.language.fi_fi
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Services.!error.client_id.allowed'] = 'Asiakas ei voi käyttää kyseistä pakettia.';
$lang['Services.!error.client_id.exists'] = 'Asiakasta ei ole olemassa.';
$lang['Services.!error.configoptions.valid'] = 'Yksi valituista määritettävistä asetuksista ei ole palvelun kannalta kelvollinen.';
$lang['Services.!error.coupon_id.valid'] = 'Tuo alennuskuponki ei näytä olevan voimassa.';
$lang['Services.!error.date_added.format'] = 'Päivämäärän muoto on virheellinen.';
$lang['Services.!error.date_canceled.format'] = 'Peruutuspäivämäärän muoto on virheellinen.';
$lang['Services.!error.date_canceled.valid'] = 'Sinun on määritettävä voimassa oleva päivämäärä, jotta voit peruuttaa tämän palvelun.';
$lang['Services.!error.date_last_renewed.format'] = 'Viimeisen uusimispäivän muoto on virheellinen.';
$lang['Services.!error.date_renews.format'] = 'Uusimispäivämäärän muoto on virheellinen.';
$lang['Services.!error.date_renews.valid'] = 'Uusimispäivämäärän on oltava myöhäisempi kuin %1$s-sivuston viimeinen uusimispäivämäärä.';
$lang['Services.!error.date_suspended.format'] = 'Virheellinen keskeytyspäivämäärän muoto.';
$lang['Services.!error.encrypted.format'] = 'Salatun tiedoston muoto on virheellinen.';
$lang['Services.!error.fields[][encrypted].format'] = 'Salauksen palvelukentän muoto ei ole kelvollinen.';
$lang['Services.!error.fields[][key].empty'] = 'Avain on tyhjä palvelukentistä.';
$lang['Services.!error.fields[][value].empty'] = 'Palvelukenttien arvo on tyhjä.';
$lang['Services.!error.id_format.empty'] = 'Laskuille ei ole määritetty tunnistetietomuotoa.';
$lang['Services.!error.id_format.length'] = 'Laskujen tunnisteen pituus saa olla enintään 64 merkkiä.';
$lang['Services.!error.id_value.valid'] = 'Laskun tunnistenumeroa ei voitu määrittää.';
$lang['Services.!error.invoice_method.valid'] = 'Sinun on valittava kelvollinen laskutustapa.';
$lang['Services.!error.key.empty'] = 'Palvelualueen avain ei saa olla tyhjä.';
$lang['Services.!error.key.length'] = 'Palvelualakentän avaimen pituus ei saa ylittää 32 merkkiä.';
$lang['Services.!error.module_group.valid'] = 'Moduuliryhmää ei ole olemassa.';
$lang['Services.!error.module_row_id.exists'] = 'Moduulin rivitunnus on virheellinen.';
$lang['Services.!error.module_row.valid'] = 'Moduuliriviä ei ole olemassa.';
$lang['Services.!error.move.unpaid_invoices'] = 'Palvelua ei voida siirtää toiselle asiakkaalle, koska siitä on maksamattomia laskuja.';
$lang['Services.!error.override_currency.format'] = 'Valitse kelvollinen valuutta.';
$lang['Services.!error.override_price.format'] = 'Hinnan ohitusarvon on oltava luku.';
$lang['Services.!error.override_price.override'] = 'Nykyisen hinnan ohittamiseksi on määritettävä sekä hinta että valuutta.';
$lang['Services.!error.package_group_id.exists'] = 'Pakettiryhmän tunniste on virheellinen.';
$lang['Services.!error.parent_service_id.exists'] = 'Vanhemman palvelun tunnus on virheellinen.';
$lang['Services.!error.parent_service_id.parent'] = 'Vanhemman palvelun tunniste on jo olemassa toisen palvelun alaisena.';
$lang['Services.!error.pricing_id.exists'] = 'Valitse kelvollinen termi.';
$lang['Services.!error.pricing_id.overrides'] = 'Paketin voimassaoloaikaa ei voi muuttaa, kun hintojen ohitukset on määritetty.';
$lang['Services.!error.pricing_id.valid'] = 'Sinun on valittava kelvollinen termi.';
$lang['Services.!error.prorate.format'] = 'Suhteellisen jakamisen käyttö on määritettävä arvoksi ”true” tai ”false”.';
$lang['Services.!error.qty.available'] = 'Määräraja on saavutettu. Valitse mahdollisuuksien mukaan pienempi määrä.';
$lang['Services.!error.qty.format'] = 'Määrän on oltava luku.';
$lang['Services.!error.qty.length'] = 'Määrän pituus ei saa ylittää 10 merkkiä.';
$lang['Services.!error.service_id.exists'] = 'Virheellinen palvelutunnus.';
$lang['Services.!error.service_id.has_children'] = 'Tätä palvelua ei voi poistaa, koska sillä on alipalveluita. Peruuta tai poista nämä palvelut ja yritä uudelleen.';
$lang['Services.!error.status.format'] = 'Virheellinen tila.';
$lang['Services.!error.status.valid'] = 'Vain vireillä olevat, peruutetut tai tarkasteltavana olevat palvelut voidaan poistaa.';
$lang['Services.!error.uncancel.unsupported'] = 'Tätä palvelua ei voi peruuttaa, koska moduuli ei tue sitä.';
$lang['Services.!error.use_module.format'] = 'Moduulin muoto on virheellinen.';
$lang['Services.!error.value.empty'] = 'Palvelukentän arvo ei saa olla tyhjä.';
$lang['Services.getActions.cancel'] = 'Peruuta';
$lang['Services.getActions.change_renew'] = 'Muuta uusimispäivämäärää';
$lang['Services.getActions.schedule_cancel'] = 'Aikataulun peruutus';
$lang['Services.getActions.suspend'] = 'Keskeytä';
$lang['Services.getActions.uncancel'] = 'Aktivoi uudelleen';
$lang['Services.getActions.unsuspend'] = 'Poista keskeytys';
$lang['Services.getActions.update_coupon'] = 'Päivitä kuponki';
$lang['Services.getStatusTypes.active'] = 'Aktiivinen';
$lang['Services.getStatusTypes.canceled'] = 'Peruutettu';
$lang['Services.getStatusTypes.in_review'] = 'Katsaus';
$lang['Services.getStatusTypes.pending'] = 'Käsiteltävänä';
$lang['Services.getStatusTypes.suspended'] = 'Keskeytetty';

