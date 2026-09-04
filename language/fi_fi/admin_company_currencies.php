<?php
/**
 * Admin Company Currencies
 *
 * @package blesta
 * @subpackage blesta.language.fi_fi
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyCurrencies.!cancel.field_cancel'] = 'Peruuta';
$lang['AdminCompanyCurrencies.!success.add_created'] = '%1$s -valuutta luotiin onnistuneesti!';
$lang['AdminCompanyCurrencies.!success.delete_deleted'] = '%1$s -valuutta on poistettu onnistuneesti!';
$lang['AdminCompanyCurrencies.!success.edit_updated'] = '%1$s -valuutta päivitettiin onnistuneesti!';
$lang['AdminCompanyCurrencies.!success.rates_updated'] = 'Valuuttakurssit päivitettiin onnistuneesti.';
$lang['AdminCompanyCurrencies.!success.setup_updated'] = 'Valuutta-asetukset päivitettiin onnistuneesti!';
$lang['AdminCompanyCurrencies.!tooltip.client_set_currency'] = 'Valitse tämä valintaruutu, jos haluat sallia asiakkaiden valita oletusvaluuttansa järjestelmässä käytettävissä olevista valuutoista.';
$lang['AdminCompanyCurrencies.!tooltip.default_currency'] = 'Järjestelmässä käytettävä oletusvaluutta. Aseta tämän arvoksi haluamasi valuutta.';
$lang['AdminCompanyCurrencies.!tooltip.exchange_rates_auto_update'] = 'Valitse tämä valintaruutu, jos haluat, että valuuttakurssit päivitetään automaattisesti jonkin käytettävissä olevan valuuttakurssipalvelun avulla.';
$lang['AdminCompanyCurrencies.!tooltip.exchange_rates_padding'] = 'Käsittelijän määrittämiä valuuttakursseja korotetaan annetulla prosenttiosuudella.';
$lang['AdminCompanyCurrencies.!tooltip.exchange_rates_processor'] = 'Määrittää, mitä palveluntarjoajaa käytetään valuuttakurssien päivittämiseen. Saatavilla olevat valuutat vaihtelevat palveluntarjoajittain.';
$lang['AdminCompanyCurrencies.!tooltip.exchange_rates_processor_key'] = 'API-avain tarvitaan valuuttakurssien hakemiseen valitulta maksupalveluntarjoajalta.';
$lang['AdminCompanyCurrencies.!tooltip.multi_currency_pricing'] = 'Valitse tämä valintaruutu, jos haluat sallia pakettien tilaamisen vain kyseiselle paketille määritettyjen hintojen mukaisesti. Tämän valinnan valitseminen edellyttää, että hinnat on määritetty jokaiselle valuutalle, jonka haluat hyväksyä kyseiselle paketille. Toisin sanoen tämä estää valuutan muuntamisen.';
$lang['AdminCompanyCurrencies.!tooltip.precision'] = 'Tarkkuus tarkoittaa sitä, kuinka monta merkitsevää numeroa valuutta tukee desimaalipilkun jälkeen.';
$lang['AdminCompanyCurrencies.!tooltip.show_currency_code'] = 'Valitse tämä vaihtoehto, jos haluat, että valuuttakoodi näkyy hintojen vieressä';
$lang['AdminCompanyCurrencies.active.boxtitle_active'] = 'Käytössä olevat valuutat';
$lang['AdminCompanyCurrencies.active.categorylink_addcurrency'] = 'Lisää valuutta';
$lang['AdminCompanyCurrencies.active.confirm_delete'] = 'Haluatko varmasti poistaa tämän valuutan?';
$lang['AdminCompanyCurrencies.active.no_exchange_updated'] = 'Ei koskaan';
$lang['AdminCompanyCurrencies.active.no_results'] = 'Aktiivisia valuuttoja ei ole.';
$lang['AdminCompanyCurrencies.active.option_delete'] = 'Poista';
$lang['AdminCompanyCurrencies.active.option_edit'] = 'Muokkaa';
$lang['AdminCompanyCurrencies.active.page_title'] = 'Asetukset &gt; Yritys &gt; Valuutat &gt; Käytössä olevat valuutat';
$lang['AdminCompanyCurrencies.active.text_currency_code'] = 'Valuuttakoodi (ISO 4217)';
$lang['AdminCompanyCurrencies.active.text_exchange_rate'] = 'Valuuttakurssi';
$lang['AdminCompanyCurrencies.active.text_exchange_updated'] = 'Viimeksi päivitetty';
$lang['AdminCompanyCurrencies.active.text_format'] = 'Muoto';
$lang['AdminCompanyCurrencies.active.text_options'] = 'Vaihtoehdot';
$lang['AdminCompanyCurrencies.active.text_precision'] = 'Tarkkuus';
$lang['AdminCompanyCurrencies.add.boxtitle_add'] = 'Lisää valuutta';
$lang['AdminCompanyCurrencies.add.confirm_add'] = 'Haluatko varmasti luoda tämän valuutan? Tämän valuutan vaihtokurssi korvataan, kun järjestelmän valuuttakurssit päivitetään automaattisesti. Voit poistaa automaattiset päivitykset käytöstä kohdassa [Asetukset] &gt; [Yritys] &gt; [Valuutat] &gt; [Valuuttojen asetukset].';
$lang['AdminCompanyCurrencies.add.field_addsubmit'] = 'Luo valuutta';
$lang['AdminCompanyCurrencies.add.field_code'] = 'Valuuttakoodi (ISO 4217)';
$lang['AdminCompanyCurrencies.add.field_exchange_rate'] = 'Valuuttakurssi';
$lang['AdminCompanyCurrencies.add.field_format'] = 'Muoto';
$lang['AdminCompanyCurrencies.add.field_precision'] = 'Tarkkuus';
$lang['AdminCompanyCurrencies.add.field_prefix'] = 'Etuliite Symboli';
$lang['AdminCompanyCurrencies.add.field_suffix'] = 'Jälkiliite Symboli';
$lang['AdminCompanyCurrencies.add.page_title'] = 'Asetukset &gt; Yritys &gt; Valuutat &gt; Lisää valuutta';
$lang['AdminCompanyCurrencies.edit.boxtitle_edit'] = 'Muokkaa valuuttaa';
$lang['AdminCompanyCurrencies.edit.confirm_edit'] = 'Haluatko varmasti päivittää tämän valuutan? Tämän valuutan kurssi korvataan, kun kurssit päivitetään järjestelmässä automaattisesti. Voit poistaa automaattiset päivitykset käytöstä kohdassa [Asetukset] &gt; [Yritys] &gt; [Valuutat] &gt; [Valuuttojen asetukset].';
$lang['AdminCompanyCurrencies.edit.field_code'] = 'Valuuttakoodi (ISO 4217)';
$lang['AdminCompanyCurrencies.edit.field_editsubmit'] = 'Päivitä valuutta';
$lang['AdminCompanyCurrencies.edit.field_exchange_rate'] = 'Valuuttakurssi';
$lang['AdminCompanyCurrencies.edit.field_format'] = 'Muoto';
$lang['AdminCompanyCurrencies.edit.field_precision'] = 'Tarkkuus';
$lang['AdminCompanyCurrencies.edit.field_prefix'] = 'Etuliite Symboli';
$lang['AdminCompanyCurrencies.edit.field_suffix'] = 'Jälkiliite Symboli';
$lang['AdminCompanyCurrencies.edit.page_title'] = 'Asetukset &gt; Yritys &gt; Valuutat &gt; Muokkaa valuuttaa';
$lang['AdminCompanyCurrencies.setup.boxtitle_setup'] = 'Valuutan asetukset';
$lang['AdminCompanyCurrencies.setup.closed_parenthesis'] = ')';
$lang['AdminCompanyCurrencies.setup.field.client_set_currency'] = 'Anna asiakkaan määrittää valuutta';
$lang['AdminCompanyCurrencies.setup.field.default_currency'] = 'Oletusvaluutta';
$lang['AdminCompanyCurrencies.setup.field.exchange_rates_auto_update'] = 'Valuuttakurssien automaattinen päivitys';
$lang['AdminCompanyCurrencies.setup.field.exchange_rates_padding'] = 'Pad-valuuttakurssit';
$lang['AdminCompanyCurrencies.setup.field.exchange_rates_processor'] = 'Valuuttakurssien käsittelyohjelma';
$lang['AdminCompanyCurrencies.setup.field.exchange_rates_processor_key'] = 'Valuuttakurssien käsittely-API-avain';
$lang['AdminCompanyCurrencies.setup.field.last_updated'] = 'Viimeisimmät hinnat';
$lang['AdminCompanyCurrencies.setup.field.multi_currency_pricing'] = 'Käytä pakettihinnoittelua vain uusien palveluiden osalta';
$lang['AdminCompanyCurrencies.setup.field.setupsubmit'] = 'Päivitä asetukset';
$lang['AdminCompanyCurrencies.setup.field.show_currency_code'] = 'Näytä valuuttakoodi';
$lang['AdminCompanyCurrencies.setup.heading_general'] = 'Yleistä';
$lang['AdminCompanyCurrencies.setup.heading_multicurrency'] = 'Useita valuuttoja';
$lang['AdminCompanyCurrencies.setup.no_exchange_updated'] = 'Ei koskaan';
$lang['AdminCompanyCurrencies.setup.open_parenthesis'] = '(';
$lang['AdminCompanyCurrencies.setup.page_title'] = 'Asetukset &gt; Yritys &gt; Valuutat &gt; Valuuttojen määrittäminen';
$lang['AdminCompanyCurrencies.setup.text_update_now'] = 'Päivitä nyt';
$lang['AdminCompanyCurrencies.setup.tooltip_currency_pricing'] = 'Tämä vaihtoehto edellyttää, että pakettihinnat on määritetty kyseisessä valuutassa, jotta niitä voidaan käyttää uusien palveluiden luomiseen. Jos valinta on poistettu ja kyseiselle valuutalle ei ole määritetty pakettihintoja, hinta lasketaan oletusvaluutan vaihtokurssin perusteella.

Palveluiden uusimisessa käytetään aina ensisijaisesti valitussa valuutassa määritettyjä pakettihintoja, mutta jos pakettia varten ei ole määritetty valuuttaa, käytetään oletusvaluutan vaihtokurssia.';

