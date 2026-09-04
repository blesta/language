<?php
/**
 * Admin Company Taxes
 *
 * @package blesta
 * @subpackage blesta.language.fi_fi
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyTaxes.!success.basic_updated'] = 'Verotuksen perusasetukset on päivitetty onnistuneesti!';
$lang['AdminCompanyTaxes.!success.rule_deleted'] = 'Verosääntö on poistettu onnistuneesti.';
$lang['AdminCompanyTaxes.!success.taxrule_created'] = 'Verosääntö on luotu onnistuneesti!';
$lang['AdminCompanyTaxes.!success.taxrule_updated'] = 'Verosääntö on päivitetty onnistuneesti!';
$lang['AdminCompanyTaxes.!tooltip.amount'] = 'Veron määrä prosentteina.';
$lang['AdminCompanyTaxes.!tooltip.country'] = 'Valitse maa, johon tämä verosääntö koskee.';
$lang['AdminCompanyTaxes.!tooltip.level'] = 'Verotason avulla voit määrittää verojen soveltamisjärjestyksen, jos sovelletaan useita verosääntöjä.';
$lang['AdminCompanyTaxes.!tooltip.name'] = 'Veron näytettävä nimi (esim. myyntivero).';
$lang['AdminCompanyTaxes.!tooltip.state'] = 'Valitse osavaltio tai maakunta, johon tämä verosääntö koskee.';
$lang['AdminCompanyTaxes.!tooltip.type'] = '”Inclusive”-asetuksella vero lasketaan osana määrittämiäsi tuotehintoja, ja se vähennetään tuotehinnasta verovapaille käyttäjille.<br/>
”Inclusive (Additive)”-asetuksella vero lasketaan määrittämiesi tuotehintojen lisäksi.<br/>
Exclusive-tila laskee veron määrittämiesi tuotet hintojen lisäksi, mutta ei sisällytä sitä tilauksen kokonaissummaan.';
$lang['AdminCompanyTaxes.add.boxtitle_add'] = 'Lisää verosääntö';
$lang['AdminCompanyTaxes.add.field.addsubmit'] = 'Luo sääntö';
$lang['AdminCompanyTaxes.add.field.amount'] = 'Määrä';
$lang['AdminCompanyTaxes.add.field.country'] = 'Maa';
$lang['AdminCompanyTaxes.add.field.level'] = 'Verotaso';
$lang['AdminCompanyTaxes.add.field.level1'] = 'Taso 1';
$lang['AdminCompanyTaxes.add.field.level2'] = 'Taso 2';
$lang['AdminCompanyTaxes.add.field.name'] = 'Veron nimi';
$lang['AdminCompanyTaxes.add.field.state'] = 'Osavaltio/maakunta';
$lang['AdminCompanyTaxes.add.field.type'] = 'Verotyyppi';
$lang['AdminCompanyTaxes.add.page_title'] = 'Asetukset &gt; Yritys &gt; Verot &gt; Lisää verosääntö';
$lang['AdminCompanyTaxes.basic.boxtitle_basic'] = 'Verotuksen perusasetukset';
$lang['AdminCompanyTaxes.basic.field_addsubmit'] = 'Päivitä asetukset';
$lang['AdminCompanyTaxes.basic.field_cancelation_fee_tax'] = 'Veron peruutuskulut';
$lang['AdminCompanyTaxes.basic.field_cascade_tax'] = 'Kaskadivero';
$lang['AdminCompanyTaxes.basic.field_enable_tax'] = 'Ota verotus käyttöön';
$lang['AdminCompanyTaxes.basic.field_setup_fee_tax'] = 'Verotuksen perustamiskulut';
$lang['AdminCompanyTaxes.basic.field_taxid'] = 'Verotunnus/ALV-tunnus';
$lang['AdminCompanyTaxes.basic.heading_general'] = 'Yleiset asetukset';
$lang['AdminCompanyTaxes.basic.heading_tax_provider'] = '%1$s Asetukset';
$lang['AdminCompanyTaxes.basic.note_cancelation_fee_tax'] = 'Jos tämä asetus on käytössä, peruutuskulut verotetaan.';
$lang['AdminCompanyTaxes.basic.note_cascade_tax'] = 'Jos tämä asetus on käytössä, verotaso 1 lasketaan ensin laskun kokonaissummalle, ja verotaso 2 lasketaan tälle uudelle summalle, joka sisältää jo verotason 1. Tämä johtaa veron verottamiseen. Muussa tapauksessa verotaso 1 ja verotaso 2 lasketaan ainoastaan verottomalle laskun kokonaissummalle.';
$lang['AdminCompanyTaxes.basic.note_enable_tax'] = 'Valitse tämä vaihtoehto, jos haluat ottaa verotuksen käyttöön tässä yrityksessä.';
$lang['AdminCompanyTaxes.basic.note_setup_fee_tax'] = 'Jos tämä asetus on käytössä, mahdollisista asennusmaksuista peritään vero.';
$lang['AdminCompanyTaxes.basic.page_title'] = 'Asetukset &gt; Yritys &gt; Verot &gt; Verotuksen perusasetukset';
$lang['AdminCompanyTaxes.countries.all'] = '-- Kaikki --';
$lang['AdminCompanyTaxes.edit.boxtitle_edit'] = 'Muokkaa verosääntöä';
$lang['AdminCompanyTaxes.edit.field.amount'] = 'Määrä';
$lang['AdminCompanyTaxes.edit.field.country'] = 'Maa';
$lang['AdminCompanyTaxes.edit.field.editsubmit'] = 'Päivitä sääntö';
$lang['AdminCompanyTaxes.edit.field.level'] = 'Verotaso';
$lang['AdminCompanyTaxes.edit.field.level1'] = 'Taso 1';
$lang['AdminCompanyTaxes.edit.field.level2'] = 'Taso 2';
$lang['AdminCompanyTaxes.edit.field.name'] = 'Veron nimi';
$lang['AdminCompanyTaxes.edit.field.state'] = 'Osavaltio/maakunta';
$lang['AdminCompanyTaxes.edit.field.type'] = 'Verotyyppi';
$lang['AdminCompanyTaxes.edit.page_title'] = 'Asetukset &gt; Yritys &gt; Verot &gt; Muokkaa verosääntöä';
$lang['AdminCompanyTaxes.rules.boxtitle_rules'] = 'Verosäännöt';
$lang['AdminCompanyTaxes.rules.categorylink_addrule'] = 'Lisää verosääntö';
$lang['AdminCompanyTaxes.rules.confirm_delete'] = 'Haluatko varmasti poistaa tämän verosäännön?';
$lang['AdminCompanyTaxes.rules.heading_level1'] = 'Tason 1 säännöt';
$lang['AdminCompanyTaxes.rules.heading_level2'] = 'Tason 2 säännöt';
$lang['AdminCompanyTaxes.rules.no_results'] = '%1$s -verosäännöksiä ei ole.';
$lang['AdminCompanyTaxes.rules.option_delete'] = 'Poista';
$lang['AdminCompanyTaxes.rules.option_edit'] = 'Muokkaa';
$lang['AdminCompanyTaxes.rules.page_title'] = 'Asetukset &gt; Yritys &gt; Verot &gt; Verosäännöt';
$lang['AdminCompanyTaxes.rules.text_all'] = 'Kaikki';
$lang['AdminCompanyTaxes.rules.text_amount'] = 'Määrä';
$lang['AdminCompanyTaxes.rules.text_country'] = 'Maa';
$lang['AdminCompanyTaxes.rules.text_name'] = 'Nimi';
$lang['AdminCompanyTaxes.rules.text_options'] = 'Vaihtoehdot';
$lang['AdminCompanyTaxes.rules.text_state'] = 'Osavaltio/maakunta';
$lang['AdminCompanyTaxes.rules.text_type'] = 'Tyyppi';
$lang['AdminCompanyTaxes.states.all'] = '-- Kaikki --';

