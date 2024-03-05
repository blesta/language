<?php
/**
 * Admin Company Taxes
 *
 * @package blesta
 * @subpackage blesta.language.nl_nl
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyTaxes.edit.field.editsubmit'] = 'Regel bewerken';
$lang['AdminCompanyTaxes.edit.field.state'] = 'Staat/provincie';
$lang['AdminCompanyTaxes.edit.field.country'] = 'Land';
$lang['AdminCompanyTaxes.edit.field.amount'] = 'Bedrag';
$lang['AdminCompanyTaxes.edit.field.name'] = 'Naam belasting';
$lang['AdminCompanyTaxes.edit.field.level2'] = 'Niveau 2';
$lang['AdminCompanyTaxes.edit.field.level1'] = 'Niveau 1';
$lang['AdminCompanyTaxes.edit.field.level'] = 'Belastingniveau';
$lang['AdminCompanyTaxes.edit.field.type'] = 'Type belasting';
$lang['AdminCompanyTaxes.edit.boxtitle_edit'] = 'Belastingregel bewerken';
$lang['AdminCompanyTaxes.edit.page_title'] = 'Instellingen > Bedrijf > Belastingen > Belastingregel bewerken';
$lang['AdminCompanyTaxes.add.field.addsubmit'] = 'Regel maken';
$lang['AdminCompanyTaxes.add.field.state'] = 'Staat/provincie';
$lang['AdminCompanyTaxes.add.field.country'] = 'Land';
$lang['AdminCompanyTaxes.add.field.amount'] = 'Bedrag';
$lang['AdminCompanyTaxes.add.field.name'] = 'Naam belasting';
$lang['AdminCompanyTaxes.add.field.level2'] = 'Niveau 2';
$lang['AdminCompanyTaxes.add.field.level1'] = 'Niveau 1';
$lang['AdminCompanyTaxes.add.field.level'] = 'Belastingniveau';
$lang['AdminCompanyTaxes.add.field.type'] = 'Type belasting';
$lang['AdminCompanyTaxes.add.boxtitle_add'] = 'Belastingregel toevoegen';
$lang['AdminCompanyTaxes.add.page_title'] = 'Instellingen > Bedrijf > Belastingen > Belastingregel toevoegen';
$lang['AdminCompanyTaxes.rules.confirm_delete'] = 'Weet je zeker dat je deze belastingregel wilt verwijderen?';
$lang['AdminCompanyTaxes.rules.option_delete'] = 'Verwijder';
$lang['AdminCompanyTaxes.rules.option_edit'] = 'Bewerk';
$lang['AdminCompanyTaxes.rules.text_all'] = 'Alle';
$lang['AdminCompanyTaxes.rules.text_options'] = 'Opties';
$lang['AdminCompanyTaxes.rules.text_state'] = 'Staat/provincie';
$lang['AdminCompanyTaxes.rules.text_country'] = 'Land';
$lang['AdminCompanyTaxes.rules.text_amount'] = 'Bedrag';
$lang['AdminCompanyTaxes.rules.text_type'] = 'Type';
$lang['AdminCompanyTaxes.rules.text_name'] = 'Naam';
$lang['AdminCompanyTaxes.rules.heading_level2'] = 'Niveau 2 Regels';
$lang['AdminCompanyTaxes.rules.heading_level1'] = 'Niveau 1 Regels';
$lang['AdminCompanyTaxes.rules.boxtitle_rules'] = 'Belastingregels';
$lang['AdminCompanyTaxes.rules.categorylink_addrule'] = 'Belastingregel toevoegen';
$lang['AdminCompanyTaxes.rules.no_results'] = 'Er zijn geen niveau %1$s belastingregels.';
$lang['AdminCompanyTaxes.rules.page_title'] = 'Instellingen > Bedrijf > Belastingen > Belastingregels';
$lang['AdminCompanyTaxes.basic.field_addsubmit'] = 'Instellingen bijwerken';
$lang['AdminCompanyTaxes.basic.heading_tax_provider'] = '%1$s Instellingen';
$lang['AdminCompanyTaxes.basic.field_taxid'] = 'Belasting ID/VATIN';
$lang['AdminCompanyTaxes.basic.note_cancelation_fee_tax'] = 'Als deze optie is ingeschakeld, worden eventuele annuleringskosten belast.';
$lang['AdminCompanyTaxes.basic.field_cancelation_fee_tax'] = 'Belastingannuleringskosten';
$lang['AdminCompanyTaxes.basic.note_setup_fee_tax'] = 'Als deze optie is ingeschakeld, worden alle setupkosten belast.';
$lang['AdminCompanyTaxes.basic.field_setup_fee_tax'] = 'Kosten voor belastinginstelling';
$lang['AdminCompanyTaxes.basic.note_cascade_tax'] = 'Als dit is ingeschakeld, wordt belastingniveau 1 eerst berekend over het factuurtotaal en wordt belastingniveau 2 berekend over dit nieuwe totaal, inclusief belastingniveau 1. Dit resulteert in een belasting op belasting. Dit resulteert in een belasting op belasting. Anders worden belastingniveau 1 en belastingniveau 2 alleen berekend over het factuurbedrag vóór belasting.';
$lang['AdminCompanyTaxes.basic.field_cascade_tax'] = 'Cascade Belasting';
$lang['AdminCompanyTaxes.basic.note_enable_tax'] = 'Vink deze optie aan om belasting in te schakelen voor dit bedrijf.';
$lang['AdminCompanyTaxes.basic.field_enable_tax'] = 'Belasting inschakelen';
$lang['AdminCompanyTaxes.basic.heading_general'] = 'Algemene instellingen';
$lang['AdminCompanyTaxes.basic.boxtitle_basic'] = 'Basisinstellingen voor belastingen';
$lang['AdminCompanyTaxes.basic.page_title'] = 'Instellingen > Bedrijf > Belastingen > Basisinstellingen belastingen';
$lang['AdminCompanyTaxes.!tooltip.state'] = 'Selecteer de staat/provincie waarop deze belastingregel van toepassing is.';
$lang['AdminCompanyTaxes.!tooltip.country'] = 'Selecteer het land waarop deze belastingregel van toepassing is.';
$lang['AdminCompanyTaxes.!tooltip.amount'] = 'Het belastingbedrag als percentage.';
$lang['AdminCompanyTaxes.!tooltip.name'] = 'De weergegeven naam van de belasting (bijv. Sales Tax).';
$lang['AdminCompanyTaxes.!tooltip.level'] = 'Met het belastingniveau kun je de belastingvolgorde instellen als er meerdere belastingregels van toepassing zijn.';
$lang['AdminCompanyTaxes.!tooltip.type'] = 'Inclusief berekent de belasting als onderdeel van de artikelprijzen die u instelt en wordt afgetrokken van de artikelprijs voor belastingvrije gebruikers.<br/>
Inclusief (Additief) berekent belasting bovenop de artikelprijzen die u instelt.<br/>
Exclusief berekent de btw bovenop de prijzen die u hebt ingesteld, maar neemt deze niet op in het totaal van de bestelling.';
$lang['AdminCompanyTaxes.states.all'] = '-- Alle';
$lang['AdminCompanyTaxes.countries.all'] = '-- Alle';
$lang['AdminCompanyTaxes.!success.rule_deleted'] = 'De belastingregel is succesvol verwijderd.';
$lang['AdminCompanyTaxes.!success.taxrule_updated'] = 'De belastingregel is succesvol bijgewerkt!';
$lang['AdminCompanyTaxes.!success.taxrule_created'] = 'De belastingregel is succesvol aangemaakt!';
$lang['AdminCompanyTaxes.!success.basic_updated'] = 'De basisbelastinginstellingen zijn succesvol bijgewerkt!';

