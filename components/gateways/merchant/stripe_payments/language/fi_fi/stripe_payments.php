<?php
/**
 * Stripe Payments
 *
 * @package blesta
 * @subpackage blesta.language.fi_fi
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['StripePayments.!error.ach.invalid_account'] = 'Tälle asiakkaalle ei löytynyt pankkitiliä.';
$lang['StripePayments.!error.ach.unverified'] = 'Pankkitiliä ei voitu vahvistaa. Tarkista talletussummat ja yritä uudelleen.';
$lang['StripePayments.!error.auth'] = 'Yhdyskäytävä ei pystynyt todentamaan käyttäjää.';
$lang['StripePayments.!error.bank_account_unverified'] = 'Sinun on vahvistettava pankkitilisi, ennen kuin voit käyttää sitä maksujen suorittamiseen.';
$lang['StripePayments.!error.india_mandate_max_amount.format'] = 'Syötä kelvollinen summa toistuvan veloituksen enimmäismääräksi.';
$lang['StripePayments.!error.invalid_request_error'] = 'Maksuportaali palautti virheen pyynnön käsittelyn yhteydessä.';
$lang['StripePayments.!error.publishable_key.empty'] = 'Syötä julkaistava avain.';
$lang['StripePayments.!error.secret_key.empty'] = 'Syötä salainen avain.';
$lang['StripePayments.!error.secret_key.valid'] = 'Yhteyden muodostaminen Stripe-sovellusliittymään annetulla salaisella avaimella ei onnistu.';
$lang['StripePayments.ach_form.field_account_number'] = 'Tilinumero';
$lang['StripePayments.ach_form.field_first_deposit'] = 'Ensimmäinen talletus';
$lang['StripePayments.ach_form.field_holder_type'] = 'Kiinnitystyyppi';
$lang['StripePayments.ach_form.field_holder_type_company'] = 'Yritys';
$lang['StripePayments.ach_form.field_holder_type_individual'] = 'Yksityishenkilö';
$lang['StripePayments.ach_form.field_routing_number'] = 'Reititysnumero';
$lang['StripePayments.ach_form.field_second_deposit'] = 'Toinen talletus';
$lang['StripePayments.ach_form.field_type'] = 'Tilityyppi';
$lang['StripePayments.ach_form.mandate_authorization'] = 'Lähettämällä tämän lomakkeen valtuutat %1$s:n veloittamaan yllä mainitulta pankkitililtä kaikki maksut, jotka aiheutuvat %1$s -palveluiden käytöstäsi ja/tai tuotteiden ostamisesta osoitteesta %1$s, %1$s -verkkosivuston ehtojen mukaisesti, kunnes tämä valtuutus peruutetaan. Voit muuttaa tai peruuttaa tämän valtuutuksen milloin tahansa ilmoittamalla siitä osoitteeseen %1$s 30 (kolmenkymmenen) päivän varoitusajalla.';
$lang['StripePayments.ach_form.mandate_future_usage'] = 'Jos käytät %1$s -palveluita tai ostat säännöllisesti lisätuotteita %1$s -sivuston ehtojen mukaisesti, valtuutat %1$s:n veloittamaan pankkitiliäsi säännöllisesti. Maksut, jotka eivät kuulu edellä mainittujen säännöllisten veloitusten piiriin, veloitetaan vasta sen jälkeen, kun sinulta on saatu siihen lupa.';
$lang['StripePayments.ach_form.verification_notice'] = 'Tällä hetkellä rekisterissä olevaa pankkitiliä ei ole vahvistettu. Kun syötät uudet pankkitilitiedot alla, ne korvaavat nykyiset tiedot.';
$lang['StripePayments.charge_description'] = 'Veloitus %1$s';
$lang['StripePayments.charge_description_default'] = 'Veloita määritelty summa';
$lang['StripePayments.description'] = 'Käyttää Stripe Elements -palvelua ja Payment Request API:ta 3D Secure- ja SCA-prosessien automaattiseen käsittelyyn, jotta luottokorttimaksut voidaan lähettää suoraan Stripen kautta';
$lang['StripePayments.heading_migrate_accounts'] = 'Siirrä vanhat maksutilit';
$lang['StripePayments.india_mandate_max_amount'] = 'Toistuvien veloitusten enimmäismäärä (Intia)';
$lang['StripePayments.india_mandate_max_amount_note'] = 'Vaaditaan, jotta Intiassa myönnettyjen korttien automaattiset toistuvat veloitukset voidaan ottaa käyttöön. Tämä on suurin summa, joka voidaan veloittaa tällaiselta kortilta missä tahansa tulevassa istunnon ulkopuolisessa maksutapahtumassa käsiteltävänä olevassa valuutassa. Jätä kenttä tyhjäksi, jos haluat sallia intialaisten korttien tallentamisen ilman rekisteröitymistä automaattisiin toistuviin veloituksiin.';
$lang['StripePayments.migrate_accounts'] = 'Siirrä tilit';
$lang['StripePayments.name'] = 'Stripe Payments';
$lang['StripePayments.publishable_key'] = 'Julkaistava API-avain';
$lang['StripePayments.request_three_d_secure'] = '3D Secure -todentamisprosessi';
$lang['StripePayments.request_three_d_secure_automatic'] = 'Anna Stripen päättää, milloin 3D Secure -todentaminen suoritetaan';
$lang['StripePayments.request_three_d_secure_challenge'] = 'Näytä 3D Secure -todentamispyyntö aina, kun asiakas tallentaa maksutavan tai suorittaa maksun (tallennetulla tai tallentamattomalla maksutavalla)';
$lang['StripePayments.request_three_d_secure_frictionless'] = 'Näytä 3D Secure -todentamispyyntö aina, kun asiakas tallentaa maksutavan tai suorittaa maksun tallentamattomalla maksutavalla';
$lang['StripePayments.request_three_d_secure_note'] = 'Jos olet Stripe-käyttäjä ja asut Intiassa, sinun on aina suoritettava 3D Secure (3DS) -todennus ennen uuden kortin tallentamista Stripeen.';
$lang['StripePayments.secret_key'] = 'API-salainen avain';
$lang['StripePayments.text_accounts_remaining'] = 'Jäljellä olevat tilit: %1$s';
$lang['StripePayments.text_migrate_accounts'] = 'Voit siirtää vanhan Stripe-maksuportaalin ulkoisesti tallentamat maksutilit automaattisesti tähän Stripe Payments -maksuportaaliin. Tilit, joita ei ole tallennettu ulkoisesti, on siirrettävä luomalla manuaalisesti uusia maksutilejä. Aikakatkaisujen välttämiseksi siirrot suoritetaan erissä, joiden koko on %1$s. Suorita tämä niin monta kertaa kuin tarvitaan kaikkien maksutilien siirtämiseksi.';
$lang['StripePayments.tooltip_india_mandate_max_amount'] = 'RBI:n määräysten mukaisesti, kun intialaisille korteille veloitetaan toistuvia (pankkiajan ulkopuolisia) maksuja, jotka ylittävät tämän summan, asiakkaan on vahvistettava maksu erikseen.';
$lang['StripePayments.tooltip_publishable_key'] = 'API-julkaisun avain on joko tuotanto- tai testitilakohtainen. Varmista, että käytät oikeaa avainta.';
$lang['StripePayments.tooltip_secret_key'] = 'API-salasana on joko tuotanto- tai testitilakohtainen. Varmista, että käytät oikeaa salasanaa.';
$lang['StripePayments.warning_migrate_accounts'] = 'Älä poista vanhaa Stripe-maksuporttia, ennen kuin olet lopettanut tämän siirtotyökalun käytön. Jos teet niin, et enää pääse käyttämään työkalua.';
$lang['StripePayments.webhook'] = 'Stripe-webhook';
$lang['StripePayments.webhook_note'] = 'On suositeltavaa määrittää seuraava URL-osoite webhookiksi Stripe-tilisi ”payment_intent”- ja ”charge”-tapahtumille.';

