<?php
/**
 * Admin System General
 *
 * @package blesta
 * @subpackage blesta.language.fi_fi
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemGeneral.!error.cache_dir'] = 'Välimuistikansion on oltava olemassa oleva, kirjoitusoikeuksin varustettu kansio.';
$lang['AdminSystemGeneral.!error.cache_dir_marker'] = 'Välimuistikansion muutosta ei voida toteuttaa, koska tiedostoa config/cache.dir.php ei voi kirjoittaa tai poistaa. Myönnä kirjoitusoikeudet config-kansioon (ja kyseiseen tiedostoon, jos sellainen on olemassa) ja yritä uudelleen.';
$lang['AdminSystemGeneral.!error.geoip_mbstring_required'] = 'Tämän ominaisuuden käyttämiseen tarvitaan mbstring-laajennus.';
$lang['AdminSystemGeneral.!error.upload_dir'] = 'Latauskansio on oltava olemassa ja sen on sijaittava verkkokansion juurikansion ulkopuolella.';
$lang['AdminSystemGeneral.!notice.text_open_basedir_description'] = 'PHP:n open_basedir-asetus on käytössä. Tiedostoihin pääsee vain seuraavista poluista: %1$s. Näiden polkujen ulkopuolella oleviin kansioihin ei pääse.';
$lang['AdminSystemGeneral.!paymenttypes.is_lang'] = 'Valitse tämä valintaruutu vain, jos olet lisännyt tämän maksutyypin kielimääritelmän mukautettuun kielitiedostoon.';
$lang['AdminSystemGeneral.!paymenttypes.type'] = 'Kun asetuksena on ”veloitus”, tämän maksutyypin mukaiset tapahtumat katsotaan tulopohjaisiksi, kun taas ”hyvitys” ei ole tulopohjainen.';
$lang['AdminSystemGeneral.!success.addtype_created'] = 'Maksutapa ”%1$s ” on luotu onnistuneesti!';
$lang['AdminSystemGeneral.!success.basic_updated'] = 'Perusasetukset päivitettiin onnistuneesti!';
$lang['AdminSystemGeneral.!success.deletetype_deleted'] = 'Maksutapa ”%1$s ” on poistettu onnistuneesti!';
$lang['AdminSystemGeneral.!success.edittype_updated'] = 'Maksutapa ”%1$s ” on päivitetty onnistuneesti!';
$lang['AdminSystemGeneral.!success.geoip_updated'] = 'GeoIP-asetukset päivitettiin onnistuneesti!';
$lang['AdminSystemGeneral.!success.license_updated'] = 'Lisenssiavaimesi on päivitetty onnistuneesti!';
$lang['AdminSystemGeneral.!success.maintenance_updated'] = 'Ylläpitoasetukset päivitettiin onnistuneesti!';
$lang['AdminSystemGeneral.!tooltip.behind_proxy'] = 'Kun tämä valinta on valittuna, Blesta olettaa toimivansa välityspalvelimen takana ja määrittää IP-osoitteet välityspalvelimen toimittaman x-forwarded-for-otsikon perusteella. Tämä asetus tulisi valita vain, jos x-forwarded-for-otsikkoon voidaan luottaa.';
$lang['AdminSystemGeneral.!tooltip.cache_dir'] = 'Tämä arvo edustaa täydellistä palvelinpolkua, johon Blestan tulisi tallentaa välimuistissa olevat tiedostot. Palvelimen web-käyttäjällä ja cron-käyttäjällä on oltava kirjoitusoikeudet tähän hakemistoon. Turvallisuussyistä tämän polun tulisi sijaita web-juurihakemiston ulkopuolella; jos sen on pakko sijaita web-juurihakemiston sisällä, Blesta luo .htaccess-tiedoston osittaisena suojauksena, mutta palvelinmääritykset, jotka eivät ota .htaccess-tiedostoa huomioon (kuten Nginx), eivät tarjoa tällaista suojausta.';
$lang['AdminSystemGeneral.!tooltip.license_key'] = 'Tämä on Blesta-lisenssiavaimesi. Jos saat uuden lisenssiavaimen, syötä se tähän.';
$lang['AdminSystemGeneral.!tooltip.log_days'] = 'Kierrätyskäytännössä määritetään, kuinka kauan suurinta osaa yrityksen lokitiedoista säilytetään. Järjestelmän konfiguraatiotiedostossa voidaan määrittää muita lokien säilytysaikaa koskevia asetuksia.';
$lang['AdminSystemGeneral.!tooltip.log_dir'] = 'Tämä arvo edustaa palvelimen täydellistä polkua, johon Blestan tulisi tallentaa lokitiedostot. Palvelimen web-käyttäjän ja cron-käyttäjän on voitava kirjoittaa tähän hakemistoon.';
$lang['AdminSystemGeneral.!tooltip.maintenance_mode'] = 'Ylläpitotilassa vain järjestelmän ylläpitäjät voivat käyttää järjestelmää. Kaikki muut käyttäjät ohjataan kirjautumissivulle, jossa heille ilmoitetaan ylläpidon syy.';
$lang['AdminSystemGeneral.!tooltip.maintenance_reason'] = 'Tämä huoltosyy näkyy järjestelmään kirjautuville muille kuin henkilöstön jäsenille, kun huoltotila on käytössä.';
$lang['AdminSystemGeneral.!tooltip.root_web_dir'] = 'Tämä arvo edustaa verkkopalvelimen dokumenttijuurihakemiston täydellistä polkua (esim. /home/user/public_html/). Tämä ei välttämättä ole se polku, johon Blesta on asennettu.';
$lang['AdminSystemGeneral.!tooltip.temp_dir'] = 'Tämä arvo edustaa palvelimen täydellistä polkua, johon Blestan tulisi tallentaa väliaikaiset tiedostot. Palvelimen web-käyttäjällä ja cron-käyttäjällä on oltava kirjoitusoikeudet tähän hakemistoon.';
$lang['AdminSystemGeneral.!tooltip.uploads_dir'] = 'Tämä arvo edustaa palvelimen täydellistä polkua, johon Blestan tulisi tallentaa ladatut tiedostot. Palvelimen web-käyttäjällä ja cron-käyttäjällä on oltava kirjoitusoikeudet tähän hakemistoon.';
$lang['AdminSystemGeneral.addtype.boxtitle_addtype'] = 'Luo maksutyyppi';
$lang['AdminSystemGeneral.addtype.field_is_lang'] = 'Kielen määritelmän käyttö';
$lang['AdminSystemGeneral.addtype.field_name'] = 'Nimi';
$lang['AdminSystemGeneral.addtype.field_type'] = 'Tyyppi';
$lang['AdminSystemGeneral.addtype.field_typesubmit'] = 'Luo maksutapa';
$lang['AdminSystemGeneral.addtype.page_title'] = 'Asetukset &gt; Järjestelmä &gt; Yleiset &gt; Luo maksutapa';
$lang['AdminSystemGeneral.basic.boxtitle_basic'] = 'Perusasetukset';
$lang['AdminSystemGeneral.basic.field.basicsubmit'] = 'Päivitä asetukset';
$lang['AdminSystemGeneral.basic.field.behind_proxy'] = 'Asennukseni sijaitsee välityspalvelimen tai kuormituksen tasapainottajan takana';
$lang['AdminSystemGeneral.basic.field.cache_dir'] = 'Välimuistikansio';
$lang['AdminSystemGeneral.basic.field.log_days'] = 'Vuorottelukäytäntö';
$lang['AdminSystemGeneral.basic.field.log_dir'] = 'Lokihakemisto';
$lang['AdminSystemGeneral.basic.field.root_web_dir'] = 'Juurikansio';
$lang['AdminSystemGeneral.basic.field.temp_dir'] = 'Väliaikainen kansio';
$lang['AdminSystemGeneral.basic.field.uploads_dir'] = 'Latausten kansio';
$lang['AdminSystemGeneral.basic.page_title'] = 'Asetukset &gt; Järjestelmä &gt; Yleiset &gt; Perusasetukset';
$lang['AdminSystemGeneral.basic.text_day'] = 'Päivä';
$lang['AdminSystemGeneral.basic.text_days'] = 'Päivät';
$lang['AdminSystemGeneral.basic.text_docroot'] = 'Odotetaan ”%1$s ” -elokuvaa';
$lang['AdminSystemGeneral.basic.text_no_log'] = 'Älä koskaan kierrä lokia';
$lang['AdminSystemGeneral.basic.text_unwritable'] = 'Ei kirjoitettavissa';
$lang['AdminSystemGeneral.basic.text_writable'] = 'Kirjoitettava';
$lang['AdminSystemGeneral.edittype.boxtitle_edittype'] = 'Muokkaa maksutapaa';
$lang['AdminSystemGeneral.edittype.field_is_lang'] = 'Kielen määritelmän käyttö';
$lang['AdminSystemGeneral.edittype.field_name'] = 'Nimi';
$lang['AdminSystemGeneral.edittype.field_type'] = 'Tyyppi';
$lang['AdminSystemGeneral.edittype.field_typesubmit'] = 'Päivitä maksutapa';
$lang['AdminSystemGeneral.edittype.page_title'] = 'Asetukset &gt; Järjestelmä &gt; Yleiset &gt; Muokkaa maksutapaa';
$lang['AdminSystemGeneral.geoip.boxtitle_geoip'] = 'GeoIP';
$lang['AdminSystemGeneral.geoip.field_geoip_enabled'] = 'Ota GeoIP käyttöön';
$lang['AdminSystemGeneral.geoip.field_geoipsubmit'] = 'Päivitä asetukset';
$lang['AdminSystemGeneral.geoip.page_title'] = 'Asetukset &gt; Järjestelmä &gt; Yleiset &gt; GeoIP-asetukset';
$lang['AdminSystemGeneral.geoip.text_database_exists'] = '%1$s on olemassa.';
$lang['AdminSystemGeneral.geoip.text_database_not_exists'] = '%1$s ei ole olemassa.';
$lang['AdminSystemGeneral.geoip.text_geolite'] = 'GeoIP vaatii GeoLite City -tietokannan, jonka voi ladata omalta tililtäsi osoitteesta <a target="_blank" href="%1$s">%1$s</a>. Tiedosto tulee purkaa ja ladata osoitteeseen:';
$lang['AdminSystemGeneral.geoip.text_geolite_step_1'] = 'Luo MaxMind-tili';
$lang['AdminSystemGeneral.geoip.text_geolite_step_2'] = 'Määritä salasanasi tervetulotoivotussähköpostin avulla';
$lang['AdminSystemGeneral.geoip.text_geolite_step_3'] = 'Kirjaudu tilillesi';
$lang['AdminSystemGeneral.geoip.text_geolite_step_4'] = 'Lataa kohdasta ”GeoIP2 / GeoLite2 &gt; Lataa tiedostot” GeoLite2-City-binaaritiedosto';
$lang['AdminSystemGeneral.geoip.text_geolite_step_5'] = 'Lataa kyseinen tiedosto Blesta-asennukseesi alla mainittuun polkuun';
$lang['AdminSystemGeneral.geoip.text_setup'] = 'GeoIP voidaan ottaa käyttöön tästä, jolloin Blesta saa käyttöönsä GeoIP-paikannuspalveluiden toiminnot. Kun se otetaan käyttöön, tietyt ominaisuudet voivat hyödyntää paikannuspalveluita.';
$lang['AdminSystemGeneral.license.boxtitle_license'] = 'Lisenssiavain';
$lang['AdminSystemGeneral.license.field.license_key'] = 'Lisenssiavain';
$lang['AdminSystemGeneral.license.field.licensesubmit'] = 'Päivitä asetukset';
$lang['AdminSystemGeneral.license.page_title'] = 'Asetukset &gt; Järjestelmä &gt; Yleiset &gt; Lisenssiavain';
$lang['AdminSystemGeneral.maintenance.boxtitle_maintenance'] = 'Huolto';
$lang['AdminSystemGeneral.maintenance.field.maintenance_mode'] = 'Ota huoltotila käyttöön';
$lang['AdminSystemGeneral.maintenance.field.maintenance_reason'] = 'Huollon syy';
$lang['AdminSystemGeneral.maintenance.field.maintenancesubmit'] = 'Päivitä asetukset';
$lang['AdminSystemGeneral.maintenance.page_title'] = 'Asetukset &gt; Järjestelmä &gt; Yleiset &gt; Huolto';
$lang['AdminSystemGeneral.paymenttypes.boxtitle_types'] = 'Maksutavat';
$lang['AdminSystemGeneral.paymenttypes.categorylink_addtype'] = 'Luo maksutapa';
$lang['AdminSystemGeneral.paymenttypes.heading_is_lang'] = 'Käyttötarkoitukset – Kielen määritelmä';
$lang['AdminSystemGeneral.paymenttypes.heading_name'] = 'Nimi';
$lang['AdminSystemGeneral.paymenttypes.heading_options'] = 'Toimenpiteet';
$lang['AdminSystemGeneral.paymenttypes.heading_type'] = 'Tyyppi';
$lang['AdminSystemGeneral.paymenttypes.modal_delete'] = 'Tämän maksutavan poistaminen johtaa siihen, että kaikki tapahtumat, joissa tätä maksutapaa on käytetty, määritetään luokkaan ”muut”. Haluatko varmasti poistaa tämän maksutavan?';
$lang['AdminSystemGeneral.paymenttypes.no_results'] = 'Maksutapoja ei ole.';
$lang['AdminSystemGeneral.paymenttypes.option_delete'] = 'Poista';
$lang['AdminSystemGeneral.paymenttypes.option_edit'] = 'Muokkaa';
$lang['AdminSystemGeneral.paymenttypes.page_title'] = 'Asetukset &gt; Järjestelmä &gt; Yleiset &gt; Maksutavat';
$lang['AdminSystemGeneral.paymenttypes.text_no'] = 'Ei';
$lang['AdminSystemGeneral.paymenttypes.text_yes'] = 'Kyllä';

