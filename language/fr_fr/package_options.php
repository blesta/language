<?php
/**
 * Package Options
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PackageOptions.!error.company_id.exists'] = 'ID de l\'entreprise non valide.';
$lang['PackageOptions.!error.label.empty'] = 'Veuillez saisir une étiquette.';
$lang['PackageOptions.!error.label.length'] = 'La longueur de l\'étiquette ne doit pas dépasser 128 caractères.';
$lang['PackageOptions.!error.name.empty'] = 'Veuillez saisir un nom pour cette option.';
$lang['PackageOptions.!error.name.length'] = 'Le nom ne doit pas comporter plus de 128 caractères.';
$lang['PackageOptions.!error.type.valid'] = 'Veuillez sélectionner un type d\'option.';
$lang['PackageOptions.!error.values.count'] = 'Il ne peut y avoir qu\'une seule valeur d\'option pour les cases à cocher, les quantités, les textes, les zones de texte ou les mots de passe.';
$lang['PackageOptions.!error.values.unique'] = 'Les valeurs des options doivent être uniques.';
$lang['PackageOptions.!error.values.select_value'] = 'Au moins une valeur d\'option contient des caractères spéciaux non valides.';
$lang['PackageOptions.!error.values.active_status'] = 'Au moins une valeur d\'option doit être active.';
$lang['PackageOptions.!error.values.single_default_value'] = 'Une seule valeur peut être sélectionnée comme valeur par défaut.';
$lang['PackageOptions.!error.values[][step].valid'] = 'Une valeur d\'échelon ne peut être définie que pour le type de quantité et doit être supérieure ou égale à 1.';
$lang['PackageOptions.!error.values[][min].valid'] = 'Une valeur limite minimale ne peut être définie que pour le type de quantité et doit être égale ou supérieure à 0.';
$lang['PackageOptions.!error.values[][max].valid'] = 'La valeur limite maximale ne peut être définie que pour le type de quantité et doit être supérieure ou égale à 1.';
$lang['PackageOptions.!error.values[][name].empty'] = 'Veuillez saisir un nom pour la valeur de l\'option.';
$lang['PackageOptions.!error.values[][name].length'] = 'Le nom de la valeur de l\'option ne doit pas dépasser 128 caractères.';
$lang['PackageOptions.!error.values[][value].length'] = 'La valeur de l\'option ne doit pas dépasser 255 caractères.';
$lang['PackageOptions.!error.values[][value].edit_in_use'] = 'La valeur de l\'option ne peut pas être modifiée parce qu\'elle est actuellement utilisée par un service.';
$lang['PackageOptions.!error.values[][value].delete_in_use'] = 'La valeur de l\'option ne peut pas être supprimée parce qu\'elle est actuellement utilisée par un service.';
$lang['PackageOptions.!error.values[][status].valid'] = 'Veuillez sélectionner un statut de valeur d\'option valide.';
$lang['PackageOptions.!error.values[][default].inactive'] = 'Une valeur d\'option inactive ne peut pas être définie comme valeur par défaut.';
$lang['PackageOptions.!error.values[][default].qty_valid'] = 'La quantité de valeur par défaut sélectionnée n\'est pas valide pour les valeurs min, max et pas configurées.';
$lang['PackageOptions.!error.values[][default].format'] = 'La valeur par défaut doit être un nombre.';
$lang['PackageOptions.!error.values[][id].exists'] = 'ID de valeur d\'option de paquet non valide.';
$lang['PackageOptions.!error.groups.exists'] = 'Au moins un des identifiants de groupe d\'options de paquet indiqués n\'existe pas ou n\'appartient pas à la même entreprise.';
$lang['PackageOptions.!error.option_id.exists'] = 'L\'identifiant de l\'option du paquet n\'est pas valide.';
$lang['PackageOptions.!error.hidden.valid'] = 'Le choix de masquer ou non cette option doit être réglé sur 0 ou 1.';
$lang['PackageOptions.!error.values[][pricing][][id].exists'] = 'ID de tarification de l\'option d\'emballage non valide.';
$lang['PackageOptions.!error.values[][pricing][][id].delete_in_use'] = 'L\'évaluation de la valeur de l\'option ne peut pas être supprimée parce qu\'elle est actuellement utilisée par un service.';
$lang['PackageOptions.!error.values[][pricing][][term].format'] = 'Le terme doit être un nombre.';
$lang['PackageOptions.!error.values[][pricing][][term].length'] = 'La longueur du terme ne doit pas dépasser 5 caractères.';
$lang['PackageOptions.!error.values[][pricing][][term].valid'] = 'Le terme doit être supérieur à 0.';
$lang['PackageOptions.!error.values[][pricing][][period].format'] = 'Type de période non valide.';
$lang['PackageOptions.!error.values[][pricing][][price].format'] = 'Le prix doit être un nombre.';
$lang['PackageOptions.!error.values[][pricing][][price_renews].format'] = 'Le prix de renouvellement doit être un nombre.';
$lang['PackageOptions.!error.values[][pricing][][price_renews].valid'] = 'Le prix de renouvellement ne peut pas être fixé pour une période donnée.';
$lang['PackageOptions.!error.values[][pricing][][setup_fee].format'] = 'Les frais de mise en place doivent être un nombre.';
$lang['PackageOptions.!error.values[][pricing][][currency].format'] = 'Le code devise doit comporter 3 caractères.';
$lang['PackageOptions.gettypes.checkbox'] = 'Case à cocher';
$lang['PackageOptions.gettypes.select'] = 'Déroulant';
$lang['PackageOptions.gettypes.quantity'] = 'Quantité';
$lang['PackageOptions.gettypes.radio'] = 'Radio';
$lang['PackageOptions.gettypes.text'] = 'Texte';
$lang['PackageOptions.gettypes.textarea'] = 'Zone de texte';
$lang['PackageOptions.gettypes.password'] = 'Mot de passe';
$lang['PackageOptions.getvaluestatuses.active'] = 'Actif';
$lang['PackageOptions.getvaluestatuses.inactive'] = 'Inactif';
$lang['PackageOptions.getfields.label_quantity'] = 'x %1$s %2$s';
$lang['PackageOptions.getfields.label_quantity_recurring'] = 'x %1$s %2$s (renouvellement @ %3$s)';
$lang['PackageOptions.getfields.label_quantity_setup'] = 'x %1$s %2$s + %3$s setup';
$lang['PackageOptions.getfields.label_quantity_setup_recurring'] = 'x %1$s %2$s + %3$s setup (renouvellements @ %4$s)';
$lang['PackageOptions.getfields.label_radio'] = '%1$s (%2$s)';
$lang['PackageOptions.getfields.label_radio_recurring'] = '%1$s (%2$s, renouvellement @ %3$s)';
$lang['PackageOptions.getfields.label_radio_setup'] = '%1$s (%2$s + %3$s setup)';
$lang['PackageOptions.getfields.label_radio_setup_recurring'] = '%1$s (%2$s + %3$s installation, renouvellement @ %4$s)';
$lang['PackageOptions.getfields.label_select'] = '%1$s (%2$s)';
$lang['PackageOptions.getfields.label_select_recurring'] = '%1$s (%2$s, renouvellement @ %3$s)';
$lang['PackageOptions.getfields.label_select_setup'] = '%1$s (%2$s + %3$s setup)';
$lang['PackageOptions.getfields.label_select_setup_recurring'] = '%1$s (%2$s + %3$s installation, renouvellement @ %4$s)';
$lang['PackageOptions.getfields.label_checkbox'] = '%1$s (%2$s)';
$lang['PackageOptions.getfields.label_checkbox_recurring'] = '%1$s (%2$s, renouvellement @ %3$s)';
$lang['PackageOptions.getfields.label_checkbox_setup'] = '%1$s (%2$s + %3$s setup)';
$lang['PackageOptions.getfields.label_checkbox_setup_recurring'] = '%1$s (%2$s + %3$s installation, renouvellement @ %4$s)';
$lang['PackageOptions.getfields.label_text'] = '%1$s';
$lang['PackageOptions.getfields.label_text_recurring'] = '%1$s (renouvellement @ %2$s)';
$lang['PackageOptions.getfields.label_text_setup'] = '%1$s + %2$s setup';
$lang['PackageOptions.getfields.label_text_setup_recurring'] = '%1$s + %2$s setup (renouvellements @ %3$s)';
$lang['PackageOptions.getfields.label_password'] = '%1$s';
$lang['PackageOptions.getfields.label_password_recurring'] = '%1$s (renouvellement @ %2$s)';
$lang['PackageOptions.getfields.label_password_setup'] = '%1$s + %2$s setup';
$lang['PackageOptions.getfields.label_password_setup_recurring'] = '%1$s + %2$s setup (renouvellements @ %3$s)';
$lang['PackageOptions.getfields.label_textarea'] = '%1$s';
$lang['PackageOptions.getfields.label_textarea_recurring'] = '%1$s (renouvellement @ %2$s)';
$lang['PackageOptions.getfields.label_textarea_setup'] = '%1$s + %2$s setup';
$lang['PackageOptions.getfields.label_textarea_setup_recurring'] = '%1$s + %2$s setup (renouvellements @ %3$s)';
$lang['PackageOptions.!error.hide_on_invoice.valid'] = 'L\'option "masquer sur la facture" doit être réglée sur 0 ou 1.';
$lang['PackageOptions.!error.disable_pricing.valid'] = 'La désactivation de la tarification doit être fixée à 0 ou 1.';

