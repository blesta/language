<?php
/**
 * Admin Company Taxes
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyTaxes.!success.basic_updated'] = 'Indstillingerne for Basic Tax blev opdateret med succes!';
$lang['AdminCompanyTaxes.!success.taxrule_created'] = 'Skattereglen er blevet oprettet med succes!';
$lang['AdminCompanyTaxes.!success.taxrule_updated'] = 'Skattereglen er blevet opdateret med succes!';
$lang['AdminCompanyTaxes.!success.rule_deleted'] = 'Skattereglen er blevet slettet.';
$lang['AdminCompanyTaxes.countries.all'] = '-- Alle...';
$lang['AdminCompanyTaxes.states.all'] = '-- Alle...';
$lang['AdminCompanyTaxes.!tooltip.type'] = 'Inklusive beregner skat som en del af de varepriser, du angiver, og trækkes fra vareprisen for brugere, der er fritaget for skat.<br/>
Inclusive (Additiv) beregner skat ud over de varepriser, du angiver.<br/>
Eksklusive beregner moms ud over de varepriser, du angiver, men inkluderer den ikke i den samlede ordrevisning.';
$lang['AdminCompanyTaxes.!tooltip.level'] = 'Skatteniveauet giver dig mulighed for at indstille skatterækkefølgen, hvis der gælder flere skatteregler.';
$lang['AdminCompanyTaxes.!tooltip.name'] = 'Det viste navn på afgiften (f.eks. Sales Tax).';
$lang['AdminCompanyTaxes.!tooltip.amount'] = 'Skattebeløbet som en procentdel.';
$lang['AdminCompanyTaxes.!tooltip.country'] = 'Vælg det land, som denne skatteregel gælder for.';
$lang['AdminCompanyTaxes.!tooltip.state'] = 'Vælg den stat/provins, som denne skatteregel gælder for.';
$lang['AdminCompanyTaxes.basic.page_title'] = 'Indstillinger > Virksomhed > Skatter > Grundlæggende skatteindstillinger';
$lang['AdminCompanyTaxes.basic.boxtitle_basic'] = 'Grundlæggende skatteindstillinger';
$lang['AdminCompanyTaxes.basic.heading_general'] = 'Generelle indstillinger';
$lang['AdminCompanyTaxes.basic.field_enable_tax'] = 'Aktivér skat';
$lang['AdminCompanyTaxes.basic.note_enable_tax'] = 'Markér denne mulighed for at aktivere skat for denne virksomhed.';
$lang['AdminCompanyTaxes.basic.field_cascade_tax'] = 'Cascade Tax';
$lang['AdminCompanyTaxes.basic.note_cascade_tax'] = 'Hvis den er aktiveret, vil afgiftsniveau 1 først blive beregnet på fakturasummen, og afgiftsniveau 2 vil blive beregnet på denne nye sum inklusive afgiftsniveau 1. Dette resulterer i en skat på skat. Ellers beregnes momsniveau 1 og momsniveau 2 kun på fakturasummen før moms.';
$lang['AdminCompanyTaxes.basic.field_setup_fee_tax'] = 'Gebyrer for skatteopsætning';
$lang['AdminCompanyTaxes.basic.note_setup_fee_tax'] = 'Hvis det er aktiveret, vil eventuelle oprettelsesgebyrer blive beskattet.';
$lang['AdminCompanyTaxes.basic.field_cancelation_fee_tax'] = 'Gebyrer for annullering af skat';
$lang['AdminCompanyTaxes.basic.note_cancelation_fee_tax'] = 'Hvis det er aktiveret, vil eventuelle afbestillingsgebyrer blive beskattet.';
$lang['AdminCompanyTaxes.basic.field_taxid'] = 'Skatte-ID/VATIN';
$lang['AdminCompanyTaxes.basic.heading_tax_provider'] = '%1$s Indstillinger';
$lang['AdminCompanyTaxes.basic.field_addsubmit'] = 'Opdater indstillinger';
$lang['AdminCompanyTaxes.rules.page_title'] = 'Indstillinger > Virksomhed > Skatter > Skatteregler';
$lang['AdminCompanyTaxes.rules.no_results'] = 'Der er ingen skatteregler på niveau %1$s.';
$lang['AdminCompanyTaxes.rules.categorylink_addrule'] = 'Tilføj skatteregel';
$lang['AdminCompanyTaxes.rules.boxtitle_rules'] = 'Skatteregler';
$lang['AdminCompanyTaxes.rules.heading_level1'] = 'Regler for niveau 1';
$lang['AdminCompanyTaxes.rules.heading_level2'] = 'Regler for niveau 2';
$lang['AdminCompanyTaxes.rules.text_name'] = 'Navn';
$lang['AdminCompanyTaxes.rules.text_type'] = 'Type';
$lang['AdminCompanyTaxes.rules.text_amount'] = 'Beløb';
$lang['AdminCompanyTaxes.rules.text_country'] = 'Land';
$lang['AdminCompanyTaxes.rules.text_state'] = 'Stat/provins';
$lang['AdminCompanyTaxes.rules.text_options'] = 'Valgmuligheder';
$lang['AdminCompanyTaxes.rules.text_all'] = 'Alle';
$lang['AdminCompanyTaxes.rules.option_edit'] = 'Rediger';
$lang['AdminCompanyTaxes.rules.option_delete'] = 'Slet';
$lang['AdminCompanyTaxes.rules.confirm_delete'] = 'Er du sikker på, at du vil slette denne skatteregel?';
$lang['AdminCompanyTaxes.add.page_title'] = 'Indstillinger > Virksomhed > Skatter > Tilføj skatteregel';
$lang['AdminCompanyTaxes.add.boxtitle_add'] = 'Tilføj skatteregel';
$lang['AdminCompanyTaxes.add.field.type'] = 'Skattetype';
$lang['AdminCompanyTaxes.add.field.level'] = 'Skatte-niveau';
$lang['AdminCompanyTaxes.add.field.level1'] = 'Niveau 1';
$lang['AdminCompanyTaxes.add.field.level2'] = 'Niveau 2';
$lang['AdminCompanyTaxes.add.field.name'] = 'Navn på skat';
$lang['AdminCompanyTaxes.add.field.amount'] = 'Beløb';
$lang['AdminCompanyTaxes.add.field.country'] = 'Land';
$lang['AdminCompanyTaxes.add.field.state'] = 'Stat/provins';
$lang['AdminCompanyTaxes.add.field.addsubmit'] = 'Opret regel';
$lang['AdminCompanyTaxes.edit.page_title'] = 'Indstillinger > Virksomhed > Skatter > Rediger skatteregel';
$lang['AdminCompanyTaxes.edit.boxtitle_edit'] = 'Rediger skatteregel';
$lang['AdminCompanyTaxes.edit.field.type'] = 'Skattetype';
$lang['AdminCompanyTaxes.edit.field.level'] = 'Skatte-niveau';
$lang['AdminCompanyTaxes.edit.field.level1'] = 'Niveau 1';
$lang['AdminCompanyTaxes.edit.field.level2'] = 'Niveau 2';
$lang['AdminCompanyTaxes.edit.field.name'] = 'Navn på skat';
$lang['AdminCompanyTaxes.edit.field.amount'] = 'Beløb';
$lang['AdminCompanyTaxes.edit.field.country'] = 'Land';
$lang['AdminCompanyTaxes.edit.field.state'] = 'Stat/provins';
$lang['AdminCompanyTaxes.edit.field.editsubmit'] = 'Rediger regel';

