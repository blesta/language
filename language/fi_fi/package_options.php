<?php
/**
 * Package Options
 *
 * @package blesta
 * @subpackage blesta.language.fi_fi
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PackageOptions.!error.company_id.exists'] = 'Yritystunnus on virheellinen.';
$lang['PackageOptions.!error.disable_pricing.valid'] = 'Hintojen poistaminen käytöstä on asetettava arvoon 0 tai 1.';
$lang['PackageOptions.!error.groups.exists'] = 'Ainakin yksi annetuista pakettivaihtoehtoryhmien tunnisteista ei ole olemassa tai ei kuulu samaan yritykseen.';
$lang['PackageOptions.!error.hidden.valid'] = 'Tämän vaihtoehdon piilottamista koskevaksi arvoksi on asetettava joko 0 tai 1.';
$lang['PackageOptions.!error.hide_on_invoice.valid'] = 'Laskussa näkyvän piilotuksen asetukseksi on valittava joko 0 tai 1.';
$lang['PackageOptions.!error.label.empty'] = 'Kirjoita nimike.';
$lang['PackageOptions.!error.label.length'] = 'Etiketin pituus ei saa ylittää 128 merkkiä.';
$lang['PackageOptions.!error.name.empty'] = 'Anna nimi tälle vaihtoehdolle.';
$lang['PackageOptions.!error.name.length'] = 'Nimen pituus ei saa ylittää 128 merkkiä.';
$lang['PackageOptions.!error.option_id.exists'] = 'Pakettivaihtoehdon tunnus on virheellinen.';
$lang['PackageOptions.!error.type.in_use'] = 'Tyyppiä ei voi muuttaa, koska palvelu käyttää yhtä tai useampaa valinta-arvoa, joita ei ole sisällytetty lähetettyyn pyyntöön.';
$lang['PackageOptions.!error.type.valid'] = 'Valitse vaihtoehtotyyppi.';
$lang['PackageOptions.!error.values.active_status'] = 'Ainakin yhden vaihtoehdon on oltava käytössä.';
$lang['PackageOptions.!error.values.count'] = 'Valintaruutu-, määrä-, teksti-, tekstialue- tai salasana-tyyppisille kentille saa olla vain yksi vaihtoehtoarvo.';
$lang['PackageOptions.!error.values.select_value'] = 'Ainakin yhdessä optioarvossa on virheellisiä erikoismerkkejä.';
$lang['PackageOptions.!error.values.single_default_value'] = 'Vain yksi arvo voidaan valita oletusarvoksi.';
$lang['PackageOptions.!error.values.unique'] = 'Vaihtoehtojen arvojen on oltava yksilöllisiä.';
$lang['PackageOptions.!error.values[][default].format'] = 'Oletusarvon on oltava luku.';
$lang['PackageOptions.!error.values[][default].inactive'] = 'Käyttämätöntä asetusarvoa ei saa asettaa oletusarvoksi.';
$lang['PackageOptions.!error.values[][default].qty_valid'] = 'Valittu oletusmäärä ei ole sallittu määritettyjen minimi-, maksimi- ja askelarvojen perusteella.';
$lang['PackageOptions.!error.values[][id].exists'] = 'Pakettivaihtoehdon tunnus on virheellinen.';
$lang['PackageOptions.!error.values[][max].valid'] = 'Enimmäisraja-arvo voidaan asettaa vain määrän tyypille, ja sen on oltava vähintään 1.';
$lang['PackageOptions.!error.values[][min].valid'] = 'Vähimmäisraja-arvo voidaan asettaa vain määrän tyypille, ja sen on oltava vähintään 0.';
$lang['PackageOptions.!error.values[][name].empty'] = 'Anna vaihtoehdon arvolle nimi.';
$lang['PackageOptions.!error.values[][name].length'] = 'Optioarvon nimi ei saa olla pidempi kuin 128 merkkiä.';
$lang['PackageOptions.!error.values[][pricing][][currency].format'] = 'Valuuttakoodin on oltava 3 merkkiä pitkä.';
$lang['PackageOptions.!error.values[][pricing][][id].delete_in_use'] = 'Optioarvon hinnoittelua ei voi poistaa, koska se on tällä hetkellä jonkin palvelun käytössä.';
$lang['PackageOptions.!error.values[][pricing][][id].exists'] = 'Pakettivaihtoehdon hinnoittelutunnus on virheellinen.';
$lang['PackageOptions.!error.values[][pricing][][period].format'] = 'Virheellinen jaksotyyppi.';
$lang['PackageOptions.!error.values[][pricing][][price_renews].format'] = 'Uusimishinnan on oltava luku.';
$lang['PackageOptions.!error.values[][pricing][][price_renews].valid'] = 'Uusimishintaa ei voida määrittää yhdelle jaksolle.';
$lang['PackageOptions.!error.values[][pricing][][price].format'] = 'Hinta on oltava luku.';
$lang['PackageOptions.!error.values[][pricing][][setup_fee].format'] = 'Asennusmaksun on oltava luku.';
$lang['PackageOptions.!error.values[][pricing][][term].format'] = 'Term on oltava luku.';
$lang['PackageOptions.!error.values[][pricing][][term].length'] = 'Termin pituus saa olla enintään 5 merkkiä.';
$lang['PackageOptions.!error.values[][pricing][][term].valid'] = 'Termin arvon on oltava suurempi kuin 0.';
$lang['PackageOptions.!error.values[][status].valid'] = 'Valitse kelvollinen tilavaihtoehto.';
$lang['PackageOptions.!error.values[][step].valid'] = 'Askelarvo voidaan asettaa vain määrätyypille, ja sen on oltava vähintään 1.';
$lang['PackageOptions.!error.values[][value].delete_in_use'] = 'Optioarvoa ei voida poistaa, koska se on tällä hetkellä palvelun käytössä.';
$lang['PackageOptions.!error.values[][value].edit_in_use'] = 'Asetuksen arvoa ei voi muuttaa, koska se on tällä hetkellä palvelun käytössä.';
$lang['PackageOptions.!error.values[][value].length'] = 'Vaihtoehdon pituus ei saa ylittää 255 merkkiä.';
$lang['PackageOptions.getfields.label_checkbox'] = '%1$s (%2$s)';
$lang['PackageOptions.getfields.label_checkbox_recurring'] = '%1$s (%2$s, uusitaan osoitteessa %3$s)';
$lang['PackageOptions.getfields.label_checkbox_setup'] = '%1$s (%2$s + %3$s -asetukset)';
$lang['PackageOptions.getfields.label_checkbox_setup_recurring'] = '%1$s (%2$s + %3$s -asetukset, uusitaan osoitteessa %4$s)';
$lang['PackageOptions.getfields.label_password'] = '%1$s';
$lang['PackageOptions.getfields.label_password_recurring'] = '%1$s (päivitetään osoitteessa %2$s)';
$lang['PackageOptions.getfields.label_password_setup'] = '%1$s + %2$s -asennus';
$lang['PackageOptions.getfields.label_password_setup_recurring'] = '%1$s + %2$s -asetukset (uudistetaan osoitteessa %3$s)';
$lang['PackageOptions.getfields.label_quantity'] = 'x %1$s %2$s';
$lang['PackageOptions.getfields.label_quantity_recurring'] = 'x %1$s %2$s (uudistetaan osoitteessa %3$s)';
$lang['PackageOptions.getfields.label_quantity_setup'] = 'x %1$s %2$s + %3$s asennus';
$lang['PackageOptions.getfields.label_quantity_setup_recurring'] = 'x %1$s %2$s + %3$s -asetukset (uudistetaan osoitteessa %4$s)';
$lang['PackageOptions.getfields.label_radio'] = '%1$s (%2$s)';
$lang['PackageOptions.getfields.label_radio_recurring'] = '%1$s (%2$s, päivitetään osoitteessa %3$s)';
$lang['PackageOptions.getfields.label_radio_setup'] = '%1$s (%2$s + %3$s -asetukset)';
$lang['PackageOptions.getfields.label_radio_setup_recurring'] = '%1$s (%2$s + %3$s -asetukset, uusitaan osoitteessa %4$s)';
$lang['PackageOptions.getfields.label_select'] = '%1$s (%2$s)';
$lang['PackageOptions.getfields.label_select_recurring'] = '%1$s (%2$s, uusitaan osoitteessa %3$s)';
$lang['PackageOptions.getfields.label_select_setup'] = '%1$s (%2$s + %3$s -asetukset)';
$lang['PackageOptions.getfields.label_select_setup_recurring'] = '%1$s (%2$s + %3$s -asetukset, uusitaan osoitteessa %4$s)';
$lang['PackageOptions.getfields.label_text'] = '%1$s';
$lang['PackageOptions.getfields.label_text_recurring'] = '%1$s (päivitetään osoitteessa %2$s)';
$lang['PackageOptions.getfields.label_text_setup'] = '%1$s + %2$s -asennus';
$lang['PackageOptions.getfields.label_text_setup_recurring'] = '%1$s + %2$s -asetukset (uudistetaan osoitteessa %3$s)';
$lang['PackageOptions.getfields.label_textarea'] = '%1$s';
$lang['PackageOptions.getfields.label_textarea_recurring'] = '%1$s (päivitetään osoitteessa %2$s)';
$lang['PackageOptions.getfields.label_textarea_setup'] = '%1$s + %2$s -asennus';
$lang['PackageOptions.getfields.label_textarea_setup_recurring'] = '%1$s + %2$s -asetukset (uudistetaan osoitteessa %3$s)';
$lang['PackageOptions.gettypes.checkbox'] = 'Valintaruutu';
$lang['PackageOptions.gettypes.password'] = 'Salasana';
$lang['PackageOptions.gettypes.quantity'] = 'Määrä';
$lang['PackageOptions.gettypes.radio'] = 'Radio';
$lang['PackageOptions.gettypes.select'] = 'Pudotusvalikko';
$lang['PackageOptions.gettypes.text'] = 'Teksti';
$lang['PackageOptions.gettypes.textarea'] = 'Tekstikenttä';
$lang['PackageOptions.getvaluestatuses.active'] = 'Aktiivinen';
$lang['PackageOptions.getvaluestatuses.inactive'] = 'Ei aktiivinen';

