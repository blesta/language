<?php
/**
 * Paypal Payments Standard
 *
 * @package blesta
 * @subpackage blesta.language.fi_fi
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PaypalPaymentsStandard.!error.account_id.valid'] = 'Sinun on annettava kelvollinen sähköpostiosoite.';
$lang['PaypalPaymentsStandard.!error.dev_mode.valid'] = 'Kehittäjätila on asetettava arvoon ”true”, jos se on määritetty.';
$lang['PaypalPaymentsStandard.!error.payment_mapping.duplicated'] = 'Kartoitustiedoistasi löytyi päällekkäisiä sähköpostiosoitteita. Poista päällekkäiset osoitteet ja yritä uudelleen.';
$lang['PaypalPaymentsStandard.!error.payment_mapping.valid'] = 'Kartoitustiedoistasi löytyi virheellinen rivi. Tarkista, ovatko sähköpostiosoite ja asiakastunnus kelvollisia, ja yritä uudelleen.';
$lang['PaypalPaymentsStandard.account_id'] = 'PayPal-tilin sähköpostiosoite';
$lang['PaypalPaymentsStandard.api_password'] = 'API-salasana';
$lang['PaypalPaymentsStandard.api_signature'] = 'API-allekirjoitus';
$lang['PaypalPaymentsStandard.api_username'] = 'API-käyttäjätunnus';
$lang['PaypalPaymentsStandard.api_username_note'] = 'Tämä sekä API-salasana ja API-allekirjoitus ovat välttämättömiä, jotta hyvityksiä voidaan käsitellä PayPalin kautta.';
$lang['PaypalPaymentsStandard.buildprocess.submit'] = 'Maksa PayPalilla';
$lang['PaypalPaymentsStandard.description'] = 'PayPal Payments Standard on yksi helpoimmista tavoista vastaanottaa luottokortti- ja PayPal-maksuja turvallisesti verkossa';
$lang['PaypalPaymentsStandard.dev_mode'] = 'Kehittäjätila';
$lang['PaypalPaymentsStandard.dev_mode_note'] = 'Tämän asetuksen ottaminen käyttöön lähettää maksutapahtumat PayPalin Sandbox-ympäristöön. Ota tämä asetus käyttöön vain, jos testaat PayPalin Sandbox-tilillä.';
$lang['PaypalPaymentsStandard.name'] = 'PayPal Payments Standard';
$lang['PaypalPaymentsStandard.page_style'] = 'Sivutyylin nimi';
$lang['PaypalPaymentsStandard.page_style_note'] = 'PayPalissa luomasi mukautetun maksusivun teeman sivutyylin nimi. Jätä kenttä tyhjäksi, jos haluat käyttää oletussivutyyliä.';
$lang['PaypalPaymentsStandard.pay_type'] = 'Maksutavat';
$lang['PaypalPaymentsStandard.pay_type_both'] = 'Kertamaksut ja tilausmaksut, mikäli mahdollista';
$lang['PaypalPaymentsStandard.pay_type_onetime'] = 'Vain kertamaksut';
$lang['PaypalPaymentsStandard.pay_type_subscribe'] = 'Vain tilausmaksut';
$lang['PaypalPaymentsStandard.payment_mapping'] = 'Maksujen kartoitus';
$lang['PaypalPaymentsStandard.payment_mapping_note'] = 'Tarkoitettu käytettäväksi Blestan ulkopuolella luotujen PayPal-tilauksien kanssa. Liitä payer_email-kenttä sisäiseen asiakastunnukseen, yksi rivi kerrallaan. Esimerkiksi: email,client-id';

