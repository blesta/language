<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.fi_fi
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.!error.generation_failed'] = 'Laajennusta ei voitu luoda.  Syntyi poikkeus: %1$s';
$lang['AdminMain.!error.name_taken'] = 'Tämä nimi on ristiriidassa jo olemassa olevan laajennushakemiston kanssa.';
$lang['AdminMain.!notice.file_overwrite'] = 'Tämän laajennuksen tiedostot ovat jo olemassa Blesta-tiedostoissa, ja ne korvataan, jos käytät Blesta-hakemistoa.';
$lang['AdminMain.!notice.type_warning'] = 'Laajennustyypin muuttaminen poistaa peruuttamattomasti kaikki kyseiselle laajennukselle tallennetut asetukset.';
$lang['AdminMain.!notice.updating_installed_extension'] = 'Tämä laajennus on tällä hetkellä asennettuna. On erittäin suositeltavaa poistaa se ennen tiedostojen uudelleengenerointia, sillä muuten tietokannan eheys saattaa vaurioitua.';
$lang['AdminMain.!success.merchant_created'] = 'Uusi yhdyskäytävä on luotu onnistuneesti, ja se löytyy osoitteesta %1$s';
$lang['AdminMain.!success.module_created'] = 'Uusi moduuli on luotu onnistuneesti, ja se löytyy osoitteesta %1$s';
$lang['AdminMain.!success.nonmerchant_created'] = 'Uusi yhdyskäytävä on luotu onnistuneesti, ja se löytyy osoitteesta %1$s';
$lang['AdminMain.!success.package_deleted'] = 'Laajennus on poistettu onnistuneesti';
$lang['AdminMain.!success.plugin_created'] = 'Uusi laajennus on luotu onnistuneesti, ja se löytyy osoitteesta %1$s';
$lang['AdminMain.confirm.custom_path'] = 'Mukautettu polku';
$lang['AdminMain.confirm.generate'] = 'Luo laajennus';
$lang['AdminMain.confirm.heading_confirm'] = 'Vahvistus';
$lang['AdminMain.confirm.location'] = 'Laajennuksen sijainti';
$lang['AdminMain.confirm.text_generation'] = 'Laajennuksen asetukset on määritetty.  Voit tarkastella mitä tahansa osiota napsauttamalla edistymispalkin solmuja.  Napsauta ”Luo laajennus”, jolloin prosessi päättyy ja laajennuksesi tiedostot luodaan automaattisesti.';
$lang['AdminMain.confirm.tooltip_location'] = 'Kansio, johon luodut laajennustiedostot ladataan.';
$lang['AdminMain.general.basic_info'] = 'Seuraava – Perustiedot';
$lang['AdminMain.general.code_examples'] = 'Lisää esimerkkikoodi';
$lang['AdminMain.general.form_type'] = 'Lomaketyyppi';
$lang['AdminMain.general.heading_general_settings'] = 'Yleiset asetukset';
$lang['AdminMain.general.name'] = 'Nimi';
$lang['AdminMain.general.placeholder_name'] = 'Laajennuksen nimi';
$lang['AdminMain.general.tooltip_code_examples'] = 'Tarkista, että esimerkkikoodiin on sisällytetty kommentoituna rivit, jotka koskevat esimerkiksi Cron-tehtäviä, tapahtumaluetteloita ja integrointeja jne.';
$lang['AdminMain.general.tooltip_form_type'] = 'Perusvaihtoehto on käyttää laajennuslomakkeen huomattavasti lyhennettyä versiota, joka sisältää vain laajennuksen luomiseen tarvittavan vähimmäismäärän tietoja.';
$lang['AdminMain.general.tooltip_name'] = 'Laajennuksen näyttönimi. Tätä käytetään myös erilaisten koodien luomiseen. Esimerkiksi, jos nimi on My Module, moduulikansio on my_module ja luokkanimi on MyModule.  Plugineissa nimeen ei tule sisällyttää sanaa ”plugin”, sillä se aiheuttaa ongelmia koodin luomisessa.';
$lang['AdminMain.general.tooltip_type'] = 'Moduulit hoitavat monia palvelutoimintoja, mukaan lukien palvelujen käyttöönoton etäpalvelimilla. Laajennukset ovat tehokkaita integrointityökaluja, joilla voidaan toteuttaa lähes mitä tahansa Blestassa. Kauppiasportaalit käsittelevät maksut pitäen asiakkaat Blesta-käyttöliittymässä. Muut kuin kauppiasportaalit ohjaavat asiakkaat maksupalveluntarjoajan sivustolle maksun suorittamista varten.';
$lang['AdminMain.general.type'] = 'Laajennustyyppi';
$lang['AdminMain.getfilelocations.custom'] = 'Mukautettu';
$lang['AdminMain.getfilelocations.merchant'] = 'Blesta-kauppiasportaalien hakemisto';
$lang['AdminMain.getfilelocations.module'] = 'Blesta-moduulien hakemisto';
$lang['AdminMain.getfilelocations.nonmerchant'] = 'Blesta: Muiden kuin verkkokauppojen maksuportaaliluettelo';
$lang['AdminMain.getfilelocations.plugin'] = 'Blesta-laajennusten hakemisto';
$lang['AdminMain.getfilelocations.upload'] = 'Blesta-tiedostojen latauskansi';
$lang['AdminMain.index.boxtitle_extension_generator'] = 'Laajennusgeneraattori';
$lang['AdminMain.index.boxtitle_extensions'] = 'Laajennusgeneraattori – Laajennukset';
$lang['AdminMain.index.extension_add'] = 'Lisää laajennus';
$lang['AdminMain.index.extensions_no_results'] = 'Tällä hetkellä ei ole voimassa olevia jatkoja.';
$lang['AdminMain.index.heading_code_examples'] = 'Koodiesimerkit';
$lang['AdminMain.index.heading_date_updated'] = 'Päivitetty';
$lang['AdminMain.index.heading_form_type'] = 'Lomaketyyppi';
$lang['AdminMain.index.heading_id'] = 'ID';
$lang['AdminMain.index.heading_name'] = 'Nimi';
$lang['AdminMain.index.heading_options'] = 'Toimenpiteet';
$lang['AdminMain.index.heading_type'] = 'Tyyppi';
$lang['AdminMain.index.option_delete'] = 'Poista';
$lang['AdminMain.index.option_edit'] = 'Muokkaa';
$lang['AdminMain.index.page_title'] = 'Laajennusgeneraattori';
$lang['AdminMain.index.text_confirm_delete'] = 'Haluatko varmasti poistaa tämän laajennuksen?';

