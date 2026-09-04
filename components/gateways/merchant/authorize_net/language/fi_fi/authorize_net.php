<?php
/**
 * Authorize Net
 *
 * @package blesta
 * @subpackage blesta.language.fi_fi
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Authorize_net.!error.card_number.missing'] = 'Voimassaoloaikaa ei voi päivittää ilman kortin koko numeroa.';
$lang['Authorize_net.!error.dev_mode.valid'] = 'Kehittäjätila on asetettava arvoon ”true”, jos se on määritetty.';
$lang['Authorize_net.!error.login_id.format'] = 'Käyttäjätunnuksen pituus saa olla enintään 20 merkkiä, eikä se saa olla tyhjä.';
$lang['Authorize_net.!error.test_mode.valid'] = 'Testitila on asetettava arvoon ”true”, jos se on määritetty.';
$lang['Authorize_net.!error.transaction_key.format'] = 'Tapahtuman avaimen on oltava 16 merkkiä pitkä.';
$lang['Authorize_net.api'] = 'Maksu-API';
$lang['Authorize_net.apis_aim'] = 'AIM (oletus)';
$lang['Authorize_net.apis_cim'] = 'CIM (Authorize.Netin on otettava tämä käyttöön)';
$lang['Authorize_net.description'] = 'Luotettava ja nopea luottokortti- ja ACH-maksujen käsittely';
$lang['Authorize_net.dev_mode'] = 'Kehittäjätila';
$lang['Authorize_net.dev_mode_note'] = 'Tämän asetuksen ottaminen käyttöön lähettää maksutapahtumat Authorize.netin kehittäjäympäristöön. Tämän ympäristön käyttäminen edellyttää kehittäjän testitiliä.';
$lang['Authorize_net.login_id'] = 'Käyttäjätunnus';
$lang['Authorize_net.name'] = 'Authorize.Net';
$lang['Authorize_net.test_mode'] = 'Testitila';
$lang['Authorize_net.test_mode_note'] = 'Testitila-ominaisuutta tukee ainoastaan AIM. Jos haluat testata CIM-tapahtumia, sinun on otettava testitila käyttöön Authorize.net-tilisi kautta.';
$lang['Authorize_net.transaction_key'] = 'Tapahtuman avain';
$lang['Authorize_net.validation_mode'] = 'Maksutilin vahvistustila';
$lang['Authorize_net.validation_modes_live'] = 'Suora lähetys';
$lang['Authorize_net.validation_modes_none'] = 'Ei mitään';
$lang['Authorize_net.validation_modes_test'] = 'Testi';
$lang['Authorize_net.validation_note'] = 'Tämä asetus määrittää, millaista vahvistusta suoritetaan, kun maksutili tallennetaan CIM-järjestelmän avulla. Asetuksella ”None” ei suoriteta ylimääräistä vahvistusta. Asetuksella ”Test” suoritetaan testitapahtuma, joka ei näy asiakkaan tiliotteessa, mutta josta lähetetään sähköpostiviesti kauppiaalle. Asetuksella ”Live” käsitellään 0,00 tai 0,01 dollarin suuruinen tapahtuma, joka peruutetaan välittömästi. Ota yhteyttä kauppiaspalveluntarjoajaasi ennen kuin asetat tämän arvoksi ”Live”, sillä siitä saattaa aiheutua sinulle kuluja.';

