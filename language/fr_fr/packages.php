<?php
/**
 * Packages
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Packages.!error.company_id.exists'] = 'L\'entreprise indiquée n\'est pas valide.';
$lang['Packages.!error.package_id.exists'] = 'Le paquet n\'a pas pu être supprimé car un service l\'utilise actuellement.';
$lang['Packages.!error.package_id.has_children'] = 'Le paquet n\'a pas pu être supprimé parce qu\'un service a des services enfants.';
$lang['Packages.!error.module_id.exists'] = 'Module invalide donné.';
$lang['Packages.!error.module_id.changed'] = 'Le module ne peut pas être modifié car un ou plusieurs services utilisent déjà ce paquet.';
$lang['Packages.!error.names.format'] = 'Le format des noms de paquets n\'est pas valide.';
$lang['Packages.!error.names.empty_name'] = 'Veuillez spécifier un nom de paquet pour chaque langue.';
$lang['Packages.!error.names.empty_lang'] = 'Veuillez indiquer un code de langue du paquet pour chaque nom.';
$lang['Packages.!error.descriptions.format'] = 'Les descriptions des paquets sont dans un format non valide.';
$lang['Packages.!error.descriptions.empty_lang'] = 'Veuillez indiquer un code de langue du paquet pour chaque description.';
$lang['Packages.!error.qty.format'] = 'La quantité doit être un nombre.';
$lang['Packages.!error.client_qty.format'] = 'La limite du client doit être un nombre.';
$lang['Packages.!error.option_groups[].valid'] = 'Le groupe d\'options configurables du paquet n\'est pas valide.';
$lang['Packages.!error.plugins[].valid'] = 'Le plugin donné n\'est pas valide.';
$lang['Packages.!error.module_row.format'] = 'La ligne de module donnée n\'est pas valide.';
$lang['Packages.!error.module_group.format'] = 'Le groupe de modules indiqué n\'est pas valide.';
$lang['Packages.!error.module_group_client.valid'] = 'Autoriser le client à sélectionner le groupe doit être égal à 1 ou 0.';
$lang['Packages.!error.taxable.format'] = 'L\'impôt doit être un nombre.';
$lang['Packages.!error.taxable.length'] = 'La longueur imposable ne doit pas dépasser 1 caractère.';
$lang['Packages.!error.single_term.valid'] = 'Chaque terme doit être égal à 1 ou 0.';
$lang['Packages.!error.override_price.valid'] = 'Définir le prix du paquet comme prix prioritaire doit être 1 ou 0.';
$lang['Packages.!error.upgrades_use_renewal.valid'] = 'Le prix de renouvellement des mises à niveau doit être égal à 1 ou 0.';
$lang['Packages.!error.status.format'] = 'Statut non valide.';
$lang['Packages.!error.hidden.format'] = 'La valeur 1 ou 0 doit être attribuée à ce groupe pour qu\'il soit masqué dans l\'interface.';
$lang['Packages.!error.prorata_day.format'] = 'Le jour proratisé doit être compris entre 1 et 28.';
$lang['Packages.!error.prorata_cutoff.format'] = 'Le jour limite au prorata doit être compris entre 1 et 28.';
$lang['Packages.!error.email_content[][lang].empty'] = 'Veuillez saisir une langue.';
$lang['Packages.!error.email_content[][lang].length'] = 'La longueur de la langue ne doit pas dépasser 5 caractères.';
$lang['Packages.!error.email_content.parse'] = 'Erreur d\'analyse du modèle : %1$s';
$lang['Packages.!error.pricing[][term].format'] = 'Le terme doit être un nombre.';
$lang['Packages.!error.pricing[][term].length'] = 'La longueur du terme ne doit pas dépasser 5 caractères.';
$lang['Packages.!error.pricing[][term].valid'] = 'Le terme doit être supérieur à 0.';
$lang['Packages.!error.pricing[][term].in_use'] = 'Le terme ne peut pas être mis à jour dans une tarification en cours d\'utilisation.';
$lang['Packages.!error.pricing[][period].format'] = 'Type de période non valide.';
$lang['Packages.!error.pricing[][period].in_use'] = 'La période ne peut pas être mise à jour dans une tarification en cours d\'utilisation.';
$lang['Packages.!error.pricing[][price].format'] = 'Le prix doit être un nombre.';
$lang['Packages.!error.pricing[][price_renews].format'] = 'Le prix de renouvellement doit être un nombre.';
$lang['Packages.!error.pricing[][price_renews].valid'] = 'Le prix de renouvellement ne peut pas être fixé pour une période donnée.';
$lang['Packages.!error.pricing[][price_transfer].format'] = 'Le prix de transfert doit être un nombre.';
$lang['Packages.!error.pricing[][setup_fee].format'] = 'Les frais de mise en place doivent être un nombre.';
$lang['Packages.!error.pricing[][cancel_fee].format'] = 'Les frais d\'annulation doivent être un nombre.';
$lang['Packages.!error.pricing[][currency].format'] = 'Le code devise doit comporter 3 caractères.';
$lang['Packages.!error.pricing[][currency].in_use'] = 'La devise ne peut pas être mise à jour dans une tarification en cours d\'utilisation.';
$lang['Packages.!error.pricing[][id].format'] = 'L\'identifiant de tarification du paquet n\'est pas valide.';
$lang['Packages.!error.pricing[][id].deletable'] = 'Le terme n\'a pas pu être supprimé car il est utilisé par un ou plusieurs services.';
$lang['Packages.!error.groups[].exists'] = 'ID de groupe de paquets non valide.';
$lang['Packages.!error.groups[].valid'] = 'Le groupe de colis sélectionné n\'appartient pas à l\'entreprise indiquée.';
$lang['Packages.getPricingPeriods.day'] = 'Jour';
$lang['Packages.getPricingPeriods.week'] = 'Semaine';
$lang['Packages.getPricingPeriods.month'] = 'Mois';
$lang['Packages.getPricingPeriods.year'] = 'Année';
$lang['Packages.getPricingPeriods.onetime'] = 'Une seule fois';
$lang['Packages.getPricingPeriods.day_plural'] = 'Jours';
$lang['Packages.getPricingPeriods.week_plural'] = 'Semaines';
$lang['Packages.getPricingPeriods.month_plural'] = 'Mois';
$lang['Packages.getPricingPeriods.year_plural'] = 'Années';
$lang['Packages.getPricingPeriods.onetime_plural'] = 'Une seule fois';
$lang['Packages.getStatusTypes.active'] = 'Actif';
$lang['Packages.getStatusTypes.inactive'] = 'Inactif';
$lang['Packages.getStatusTypes.restricted'] = 'Restreint';
$lang['Packages.!error.manual_activation.valid'] = 'L\'activation manuelle doit être égale à 1 ou 0.';

