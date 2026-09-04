<?php
/**
 * Client Accounts
 *
 * @package blesta
 * @subpackage blesta.language.fi_fi
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientAccounts.!error.account_invalid'] = 'Ilmoitettu maksutilin tyyppi on poistettu käytöstä tai virheellinen.';
$lang['ClientAccounts.!error.payment_account_type_invalid'] = 'Maksutilin tyyppi ei ole kelvollinen.';
$lang['ClientAccounts.!info.account_info'] = 'Maksutilien avulla voit tallentaa maksutiedot järjestelmään, ja niitä voidaan käyttää laskujen maksamiseen. Oletustiliksi valittu maksutili käytetään automaattisiin toistuviin maksuihin.';
$lang['ClientAccounts.!info.ach_verification'] = 'Sinun on vahvistettava tämä tili, ennen kuin voit käyttää sitä maksujen suorittamiseen.';
$lang['ClientAccounts.!info.ach_verification_edit'] = 'Kun olet muokannut tätä tiliä, sinun on vahvistettava se, ennen kuin voit käyttää sitä maksujen suorittamiseen.';
$lang['ClientAccounts.!info.no_accounts'] = 'Sinulla ei tällä hetkellä ole maksutilejä. Lisää ensimmäinen maksutilisi alla.';
$lang['ClientAccounts.!notice.ach_disabled'] = 'ACH-maksutilit ovat tällä hetkellä pois käytöstä, eikä niitä voi päivittää.';
$lang['ClientAccounts.!notice.cc_disabled'] = 'Luottokorttimaksutilit ovat tällä hetkellä pois käytöstä, eikä niitä voi päivittää.';
$lang['ClientAccounts.!notice.disabled'] = 'Maksutilien lisäämistoiminto on tällä hetkellä pois käytöstä.';
$lang['ClientAccounts.!notice.reenable_autodebit'] = 'Automaattiset maksut on nimenomaan poistettu käytöstä tällä tilillä. Ota yhteyttä asiakaspalveluun, jotta ne voidaan ottaa uudelleen käyttöön. Voit valita maksutilin oletustiliksi, mutta sieltä ei veloiteta automaattisesti, ennen kuin asiakaspalvelu on ottanut automaattiset maksut uudelleen käyttöön.';
$lang['ClientAccounts.!success.account_created'] = 'Maksutili on luotu onnistuneesti.';
$lang['ClientAccounts.!success.achaccount_deleted'] = 'Maksutili on poistettu onnistuneesti.';
$lang['ClientAccounts.!success.achaccount_updated'] = 'Maksutili on päivitetty onnistuneesti.';
$lang['ClientAccounts.!success.achaccount_verified'] = 'Maksutili on vahvistettu onnistuneesti.';
$lang['ClientAccounts.!success.ccaccount_deleted'] = 'Maksutili on poistettu onnistuneesti.';
$lang['ClientAccounts.!success.ccaccount_updated'] = 'Maksutili on päivitetty onnistuneesti.';
$lang['ClientAccounts.!success.credit_handling_updated'] = 'Luottokäsittelyasetukset on päivitetty onnistuneesti.';
$lang['ClientAccounts.!success.defaultaccount_deleted'] = 'Oletustili on poistettu.';
$lang['ClientAccounts.!success.defaultaccount_updated'] = 'Oletustili on päivitetty.';
$lang['ClientAccounts.ach_info.field_accountnum'] = 'Tilinumero';
$lang['ClientAccounts.ach_info.field_routingnum'] = 'Reititysnumero';
$lang['ClientAccounts.ach_info.field_savedetails'] = 'Tallenna tili';
$lang['ClientAccounts.ach_info.field_type'] = 'Tyyppi';
$lang['ClientAccounts.ach_info.heading_ach'] = 'Pankkitilitiedot';
$lang['ClientAccounts.add.boxtitle_create'] = 'Lisää maksutili';
$lang['ClientAccounts.add.field_accountsubmit'] = 'Luo tili';
$lang['ClientAccounts.add.field_ach_type'] = 'ACH';
$lang['ClientAccounts.add.field_cc_type'] = 'Luottokortti';
$lang['ClientAccounts.add.field_nextsubmit'] = 'Jatka';
$lang['ClientAccounts.add.heading_account_type'] = 'Tilityyppi';
$lang['ClientAccounts.add.page_title'] = 'Asiakasnumero%1$s Lisää maksutili';
$lang['ClientAccounts.cc_info.field_expiration'] = 'Voimassaoloaika';
$lang['ClientAccounts.cc_info.field_number'] = 'Luku';
$lang['ClientAccounts.cc_info.field_savedetails'] = 'Tallenna tili';
$lang['ClientAccounts.cc_info.field_security'] = 'Turvakoodi';
$lang['ClientAccounts.cc_info.heading_cc'] = 'Luottokorttitiedot';
$lang['ClientAccounts.cc_info.tooltip_code'] = '3- tai 4-numeroinen turvakoodi, joka löytyy yleensä kortin takapuolelta.';
$lang['ClientAccounts.contact_info.field_address1'] = 'Osoite 1';
$lang['ClientAccounts.contact_info.field_address2'] = 'Osoite 2';
$lang['ClientAccounts.contact_info.field_city'] = 'Kaupunki';
$lang['ClientAccounts.contact_info.field_company'] = 'Yritys';
$lang['ClientAccounts.contact_info.field_contact_id'] = 'Kopioi yhteystiedot kohteesta';
$lang['ClientAccounts.contact_info.field_country'] = 'Maa';
$lang['ClientAccounts.contact_info.field_email'] = 'Sähköposti';
$lang['ClientAccounts.contact_info.field_first_name'] = 'Etunimi';
$lang['ClientAccounts.contact_info.field_last_name'] = 'Sukunimi';
$lang['ClientAccounts.contact_info.field_state'] = 'Osavaltio';
$lang['ClientAccounts.contact_info.field_title'] = 'Otsikko';
$lang['ClientAccounts.contact_info.field_zip'] = 'Postinumero';
$lang['ClientAccounts.contact_info.heading_contact'] = 'Yhteystiedot';
$lang['ClientAccounts.contact_info.text_select_contact'] = 'Voit valita olemassa olevan yhteystiedon, jolloin lomakkeen kentät täytetään automaattisesti.';
$lang['ClientAccounts.credithandling.boxtitle_credithandling'] = 'Luottojen käsittely';
$lang['ClientAccounts.credithandling.field_submit'] = 'Päivitä asetukset';
$lang['ClientAccounts.credithandling.heading_currency'] = 'Valuutta';
$lang['ClientAccounts.credithandling.heading_threshold'] = 'Ilmoitusraja';
$lang['ClientAccounts.credithandling.text_description'] = 'Määritä ilmoitukset saldon alenemisesta. Saat päivittäin sähköpostiviestin, kun saldosi laskee minkä tahansa valuutan osalta alle raja-arvon.';
$lang['ClientAccounts.editach.boxtitle_editach'] = 'Muokkaa ACH-tiliä';
$lang['ClientAccounts.editach.field_accountsubmit'] = 'Muokkaa tiliä';
$lang['ClientAccounts.editach.page_title'] = 'Asiakasnumero%1$s: Muokkaa ACH-tiliä';
$lang['ClientAccounts.editcc.boxtitle_editcc'] = 'Muokkaa luottokorttitiliä';
$lang['ClientAccounts.editcc.field_accountsubmit'] = 'Muokkaa tiliä';
$lang['ClientAccounts.editcc.page_title'] = 'Asiakasnumero%1$s: Muokkaa luottokorttitiliä';
$lang['ClientAccounts.index.boxtitle_accounts'] = 'Maksutilit';
$lang['ClientAccounts.index.confirm_delete'] = 'Haluatko varmasti poistaa tämän maksutilin?';
$lang['ClientAccounts.index.create_account'] = 'Lisää maksutili';
$lang['ClientAccounts.index.field_accountsubmit'] = 'Aseta oletusmaksutiliksi';
$lang['ClientAccounts.index.field_removeautodebit'] = 'Poista automaattinen veloitus';
$lang['ClientAccounts.index.heading_last4'] = 'Viimeiset 4';
$lang['ClientAccounts.index.heading_name'] = 'Nimi';
$lang['ClientAccounts.index.heading_options'] = 'Toimenpiteet';
$lang['ClientAccounts.index.heading_type'] = 'Tyyppi';
$lang['ClientAccounts.index.no_results'] = 'Sinulla ei ole maksutilejä.';
$lang['ClientAccounts.index.option_delete'] = 'Poista';
$lang['ClientAccounts.index.option_edit'] = 'Muokkaa';
$lang['ClientAccounts.index.option_verify'] = 'Vahvista';
$lang['ClientAccounts.index.page_title'] = 'Asiakas nro%1$s -tilit';
$lang['ClientAccounts.index.type_ach'] = '%1$s - %2$s';
$lang['ClientAccounts.index.type_cc'] = '%1$s - %2$s';
$lang['ClientAccounts.navigation.nav_credithandling'] = 'Luottojen käsittely';
$lang['ClientAccounts.navigation.nav_dashboard'] = 'Kojelauta';
$lang['ClientAccounts.navigation.nav_paymentaccounts'] = 'Maksutilit';
$lang['ClientAccounts.navigation.nav_paymentaccounts_add'] = 'Lisää maksutili';
$lang['ClientAccounts.navigation.nav_return'] = 'Palaa kojelautaan';
$lang['ClientAccounts.setcontactview.text_none'] = 'Ei mitään';
$lang['ClientAccounts.verifyach.boxtitle_verifyach'] = 'Vahvista ACH-tili';
$lang['ClientAccounts.verifyach.field_accountsubmit'] = 'Vahvista tili';
$lang['ClientAccounts.verifyach.field_firstdeposit'] = 'Ensimmäinen talletus';
$lang['ClientAccounts.verifyach.field_seconddeposit'] = 'Toinen talletus';
$lang['ClientAccounts.verifyach.page_title'] = 'Asiakasnumero%1$s: Vahvista ACH-tili';

