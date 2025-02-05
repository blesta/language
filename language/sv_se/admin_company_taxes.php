<?php
/**
 * Admin Company Taxes
 *
 * @package blesta
 * @subpackage blesta.language.sv_se
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyTaxes.edit.field.editsubmit'] = 'Redigera regel';
$lang['AdminCompanyTaxes.edit.field.state'] = 'Stat/Provins';
$lang['AdminCompanyTaxes.edit.field.country'] = 'Land';
$lang['AdminCompanyTaxes.edit.field.amount'] = 'Belopp';
$lang['AdminCompanyTaxes.edit.field.name'] = 'Skattens namn';
$lang['AdminCompanyTaxes.edit.field.level2'] = 'Nivå 2';
$lang['AdminCompanyTaxes.edit.field.level1'] = 'Nivå 1';
$lang['AdminCompanyTaxes.edit.field.level'] = 'Skattenivå';
$lang['AdminCompanyTaxes.edit.field.type'] = 'Typ av skatt';
$lang['AdminCompanyTaxes.edit.boxtitle_edit'] = 'Redigera skatteregel';
$lang['AdminCompanyTaxes.edit.page_title'] = 'Inställningar > Företag > Skatter > Redigera skatteregel';
$lang['AdminCompanyTaxes.add.field.addsubmit'] = 'Skapa regel';
$lang['AdminCompanyTaxes.add.field.state'] = 'Stat/Provins';
$lang['AdminCompanyTaxes.add.field.country'] = 'Land';
$lang['AdminCompanyTaxes.add.field.amount'] = 'Belopp';
$lang['AdminCompanyTaxes.add.field.name'] = 'Skattens namn';
$lang['AdminCompanyTaxes.add.field.level2'] = 'Nivå 2';
$lang['AdminCompanyTaxes.add.field.level1'] = 'Nivå 1';
$lang['AdminCompanyTaxes.add.field.level'] = 'Skattenivå';
$lang['AdminCompanyTaxes.add.field.type'] = 'Typ av skatt';
$lang['AdminCompanyTaxes.add.boxtitle_add'] = 'Lägg till skatteregel';
$lang['AdminCompanyTaxes.add.page_title'] = 'Inställningar > Företag > Skatter > Lägg till skatteregel';
$lang['AdminCompanyTaxes.rules.confirm_delete'] = 'Är du säker på att du vill ta bort denna skatteregel?';
$lang['AdminCompanyTaxes.rules.option_delete'] = 'Radera';
$lang['AdminCompanyTaxes.rules.option_edit'] = 'Redigera';
$lang['AdminCompanyTaxes.rules.text_all'] = 'Alla';
$lang['AdminCompanyTaxes.rules.text_options'] = 'Alternativ';
$lang['AdminCompanyTaxes.rules.text_state'] = 'Stat/Provins';
$lang['AdminCompanyTaxes.rules.text_country'] = 'Land';
$lang['AdminCompanyTaxes.rules.text_amount'] = 'Belopp';
$lang['AdminCompanyTaxes.rules.text_type'] = 'Typ';
$lang['AdminCompanyTaxes.rules.text_name'] = 'Namn';
$lang['AdminCompanyTaxes.rules.heading_level2'] = 'Regler för nivå 2';
$lang['AdminCompanyTaxes.rules.heading_level1'] = 'Regler för nivå 1';
$lang['AdminCompanyTaxes.rules.boxtitle_rules'] = 'Skatteregler';
$lang['AdminCompanyTaxes.rules.categorylink_addrule'] = 'Lägg till skatteregel';
$lang['AdminCompanyTaxes.rules.no_results'] = 'Det finns inga skatteregler för nivå %1$s.';
$lang['AdminCompanyTaxes.rules.page_title'] = 'Inställningar > Företag > Skatter > Skatteregler';
$lang['AdminCompanyTaxes.basic.field_addsubmit'] = 'Uppdatera inställningar';
$lang['AdminCompanyTaxes.basic.heading_tax_provider'] = '%1$s Inställningar';
$lang['AdminCompanyTaxes.basic.field_taxid'] = 'Skatte-ID/VATIN';
$lang['AdminCompanyTaxes.basic.note_cancelation_fee_tax'] = 'Om aktiverat kommer eventuella avbokningsavgifter att beskattas.';
$lang['AdminCompanyTaxes.basic.field_cancelation_fee_tax'] = 'Avgifter för annullering av skatt';
$lang['AdminCompanyTaxes.basic.note_setup_fee_tax'] = 'Om aktiverat kommer eventuella installationsavgifter att beskattas.';
$lang['AdminCompanyTaxes.basic.field_setup_fee_tax'] = 'Avgifter för skatteupplägg';
$lang['AdminCompanyTaxes.basic.note_cascade_tax'] = 'Om aktiverat kommer skattenivå 1 först att beräknas på fakturabeloppet, och skattenivå 2 kommer att beräknas på detta nya totalbelopp inklusive skattenivå 1. Detta resulterar i en skatt på skatt. Annars bedöms skattenivå 1 och skattenivå 2 endast på fakturasumman före skatt.';
$lang['AdminCompanyTaxes.basic.field_cascade_tax'] = 'Skatt på kaskad';
$lang['AdminCompanyTaxes.basic.note_enable_tax'] = 'Markera detta alternativ för att aktivera skatt för detta företag.';
$lang['AdminCompanyTaxes.basic.field_enable_tax'] = 'Aktivera skatt';
$lang['AdminCompanyTaxes.basic.heading_general'] = 'Allmänna inställningar';
$lang['AdminCompanyTaxes.basic.boxtitle_basic'] = 'Grundläggande skatteinställningar';
$lang['AdminCompanyTaxes.basic.page_title'] = 'Inställningar > Företag > Skatter > Grundläggande skatteinställningar';
$lang['AdminCompanyTaxes.!tooltip.state'] = 'Välj den stat/provins som denna skatteregel gäller för.';
$lang['AdminCompanyTaxes.!tooltip.country'] = 'Välj det land som denna skatteregel gäller för.';
$lang['AdminCompanyTaxes.!tooltip.amount'] = 'Skattebeloppet i procent.';
$lang['AdminCompanyTaxes.!tooltip.name'] = 'Det visade namnet på skatten (t.ex. Försäljningsskatt).';
$lang['AdminCompanyTaxes.!tooltip.level'] = 'Med skattenivån kan du ställa in skatteordningen om flera skatteregler gäller.';
$lang['AdminCompanyTaxes.!tooltip.type'] = 'Inklusive kommer att beräkna skatt som en del av de artikelpriser du anger och kommer att dras av från artikelpriset för skattebefriade användare.<br/>
Inklusive (Additiv) beräknar skatt utöver de artikelpriser du anger.<br/>
Exklusiv beräknar skatt utöver de artikelpriser du anger, men kommer inte att inkludera den i visningen av orderns totalsumma.';
$lang['AdminCompanyTaxes.states.all'] = '-- Alla --';
$lang['AdminCompanyTaxes.countries.all'] = '-- Alla --';
$lang['AdminCompanyTaxes.!success.rule_deleted'] = 'Skatteregeln har raderats framgångsrikt.';
$lang['AdminCompanyTaxes.!success.taxrule_updated'] = 'Skatteregeln har uppdaterats framgångsrikt!';
$lang['AdminCompanyTaxes.!success.taxrule_created'] = 'Skatteregeln har skapats framgångsrikt!';
$lang['AdminCompanyTaxes.!success.basic_updated'] = 'Inställningarna för Basic Tax uppdaterades framgångsrikt!';

