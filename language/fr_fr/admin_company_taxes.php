<?php
/**
 * Admin Company Taxes
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyTaxes.!success.basic_updated'] = 'Les paramètres de base de l\'impôt ont été mis à jour avec succès !';
$lang['AdminCompanyTaxes.!success.taxrule_created'] = 'La règle fiscale a été créée avec succès !';
$lang['AdminCompanyTaxes.!success.taxrule_updated'] = 'La règle fiscale a été mise à jour avec succès !';
$lang['AdminCompanyTaxes.!success.rule_deleted'] = 'La règle fiscale a été supprimée avec succès.';
$lang['AdminCompanyTaxes.countries.all'] = '-- Tous --';
$lang['AdminCompanyTaxes.states.all'] = '-- Tous --';
$lang['AdminCompanyTaxes.!tooltip.type'] = 'Inclusive calculera la taxe en tant qu\'élément du prix des articles que vous définissez et sera soustraite du prix de l\'article pour les utilisateurs exonérés de taxe.
Inclusive (Additive) calculera la taxe en plus des prix des articles que vous avez définis.
Exclusif calcule la taxe en plus des prix des articles que vous avez définis, mais ne l\'inclut pas dans l\'affichage du total de la commande.';
$lang['AdminCompanyTaxes.!tooltip.level'] = 'Le niveau de taxe vous permet de définir l\'ordre des taxes si plusieurs règles fiscales s\'appliquent.';
$lang['AdminCompanyTaxes.!tooltip.name'] = 'Le nom affiché de la taxe (par exemple, taxe sur les ventes).';
$lang['AdminCompanyTaxes.!tooltip.amount'] = 'Le montant de la taxe en pourcentage.';
$lang['AdminCompanyTaxes.!tooltip.country'] = 'Sélectionnez le pays auquel s\'applique cette règle fiscale.';
$lang['AdminCompanyTaxes.!tooltip.state'] = 'Sélectionnez l\'État ou la province auquel cette règle fiscale s\'applique.';
$lang['AdminCompanyTaxes.basic.page_title'] = 'Réglages > Entreprise > Impôts > Réglages de base des impôts';
$lang['AdminCompanyTaxes.basic.boxtitle_basic'] = 'Paramètres de base de la taxe';
$lang['AdminCompanyTaxes.basic.heading_general'] = 'Paramètres généraux';
$lang['AdminCompanyTaxes.basic.field_enable_tax'] = 'Autoriser la taxe';
$lang['AdminCompanyTaxes.basic.note_enable_tax'] = 'Cochez cette option pour activer la taxe pour cette entreprise.';
$lang['AdminCompanyTaxes.basic.field_cascade_tax'] = 'Taxe sur les cascades';
$lang['AdminCompanyTaxes.basic.note_cascade_tax'] = 'Si cette option est activée, le niveau de taxe 1 sera d\'abord évalué sur le total de la facture, et le niveau de taxe 2 sera évalué sur ce nouveau total, y compris le niveau de taxe 1. Il s\'agit donc d\'une taxe sur la taxe. Sinon, les niveaux de taxe 1 et 2 ne sont évalués que sur le total de la facture avant taxe.';
$lang['AdminCompanyTaxes.basic.field_setup_fee_tax'] = 'Frais d\'établissement de la taxe';
$lang['AdminCompanyTaxes.basic.note_setup_fee_tax'] = 'Si cette option est activée, les frais d\'installation seront taxés.';
$lang['AdminCompanyTaxes.basic.field_cancelation_fee_tax'] = 'Frais d\'annulation de la taxe';
$lang['AdminCompanyTaxes.basic.note_cancelation_fee_tax'] = 'Si cette option est activée, les frais d\'annulation seront taxés.';
$lang['AdminCompanyTaxes.basic.field_taxid'] = 'Numéro d\'identification fiscale/VATIN';
$lang['AdminCompanyTaxes.basic.heading_tax_provider'] = '%1$s Paramètres';
$lang['AdminCompanyTaxes.basic.field_addsubmit'] = 'Mise à jour des paramètres';
$lang['AdminCompanyTaxes.rules.page_title'] = 'Réglages > Entreprise > Impôts > Règles fiscales';
$lang['AdminCompanyTaxes.rules.no_results'] = 'Il n\'existe pas de règles fiscales de niveau %1$s.';
$lang['AdminCompanyTaxes.rules.categorylink_addrule'] = 'Ajouter une règle fiscale';
$lang['AdminCompanyTaxes.rules.boxtitle_rules'] = 'Règles fiscales';
$lang['AdminCompanyTaxes.rules.heading_level1'] = 'Règles de niveau 1';
$lang['AdminCompanyTaxes.rules.heading_level2'] = 'Règles du niveau 2';
$lang['AdminCompanyTaxes.rules.text_name'] = 'Nom';
$lang['AdminCompanyTaxes.rules.text_type'] = 'Type';
$lang['AdminCompanyTaxes.rules.text_amount'] = 'Montant';
$lang['AdminCompanyTaxes.rules.text_country'] = 'Pays';
$lang['AdminCompanyTaxes.rules.text_state'] = 'État/Province';
$lang['AdminCompanyTaxes.rules.text_options'] = 'Options';
$lang['AdminCompanyTaxes.rules.text_all'] = 'Tous';
$lang['AdminCompanyTaxes.rules.option_edit'] = 'Editer';
$lang['AdminCompanyTaxes.rules.option_delete'] = 'Supprimer';
$lang['AdminCompanyTaxes.rules.confirm_delete'] = 'Êtes-vous sûr de vouloir supprimer cette règle fiscale ?';
$lang['AdminCompanyTaxes.add.page_title'] = 'Réglages > Entreprise > Taxes > Ajouter une règle fiscale';
$lang['AdminCompanyTaxes.add.boxtitle_add'] = 'Ajouter une règle fiscale';
$lang['AdminCompanyTaxes.add.field.type'] = 'Type d\'impôt';
$lang['AdminCompanyTaxes.add.field.level'] = 'Niveau d\'imposition';
$lang['AdminCompanyTaxes.add.field.level1'] = 'Niveau 1';
$lang['AdminCompanyTaxes.add.field.level2'] = 'Niveau 2';
$lang['AdminCompanyTaxes.add.field.name'] = 'Nom de la taxe';
$lang['AdminCompanyTaxes.add.field.amount'] = 'Montant';
$lang['AdminCompanyTaxes.add.field.country'] = 'Pays';
$lang['AdminCompanyTaxes.add.field.state'] = 'État/Province';
$lang['AdminCompanyTaxes.add.field.addsubmit'] = 'Créer une règle';
$lang['AdminCompanyTaxes.edit.page_title'] = 'Réglages > Entreprise > Impôts > Modifier la règle fiscale';
$lang['AdminCompanyTaxes.edit.boxtitle_edit'] = 'Modifier la règle fiscale';
$lang['AdminCompanyTaxes.edit.field.type'] = 'Type d\'impôt';
$lang['AdminCompanyTaxes.edit.field.level'] = 'Niveau d\'imposition';
$lang['AdminCompanyTaxes.edit.field.level1'] = 'Niveau 1';
$lang['AdminCompanyTaxes.edit.field.level2'] = 'Niveau 2';
$lang['AdminCompanyTaxes.edit.field.name'] = 'Nom de la taxe';
$lang['AdminCompanyTaxes.edit.field.amount'] = 'Montant';
$lang['AdminCompanyTaxes.edit.field.country'] = 'Pays';
$lang['AdminCompanyTaxes.edit.field.state'] = 'État/Province';
$lang['AdminCompanyTaxes.edit.field.editsubmit'] = 'Modifier la règle';

