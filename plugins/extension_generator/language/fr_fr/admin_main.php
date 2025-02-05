<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.!error.name_taken'] = 'Ce nom est en conflit avec un répertoire d\'extensions existant.';
$lang['AdminMain.!error.generation_failed'] = 'Impossible de générer votre extension.  Exception générée : %1$s';
$lang['AdminMain.!notice.type_warning'] = 'La modification du type d\'extension effacera irrémédiablement tous les paramètres enregistrés pour cette extension.';
$lang['AdminMain.!notice.file_overwrite'] = 'Les fichiers de cette extension existent déjà dans les fichiers Blesta et seront écrasés si vous utilisez le répertoire Blesta.';
$lang['AdminMain.!notice.updating_installed_extension'] = 'Cette extension est actuellement installée. Il est fortement recommandé de la désinstaller avant de régénérer les fichiers, sous peine de nuire à la cohérence de votre base de données.';
$lang['AdminMain.!success.package_deleted'] = 'L\'extension a été supprimée avec succès';
$lang['AdminMain.!success.module_created'] = 'Le nouveau module a été généré avec succès et se trouve à l\'adresse %1$s';
$lang['AdminMain.!success.plugin_created'] = 'Le nouveau plugin a été généré avec succès et peut être trouvé à l\'adresse %1$s';
$lang['AdminMain.!success.merchant_created'] = 'La nouvelle passerelle a été générée avec succès et se trouve à l\'adresse %1$s';
$lang['AdminMain.!success.nonmerchant_created'] = 'La nouvelle passerelle a été générée avec succès et se trouve à l\'adresse %1$s';
$lang['AdminMain.getfilelocations.module'] = 'Répertoire des modules Blesta';
$lang['AdminMain.getfilelocations.plugin'] = 'Blesta Plugins Directory';
$lang['AdminMain.getfilelocations.merchant'] = 'Blesta Merchant Gateway Directory (en anglais)';
$lang['AdminMain.getfilelocations.nonmerchant'] = 'Répertoire des passerelles non marchandes de Blesta';
$lang['AdminMain.getfilelocations.upload'] = 'Annuaire Blesta Uploads';
$lang['AdminMain.getfilelocations.custom'] = 'Sur mesure';
$lang['AdminMain.index.page_title'] = 'Générateur d\'extension';
$lang['AdminMain.index.boxtitle_extension_generator'] = 'Générateur d\'extension';
$lang['AdminMain.index.boxtitle_extensions'] = 'Générateur d\'extensions - Extensions';
$lang['AdminMain.index.extension_add'] = 'Ajouter une extension';
$lang['AdminMain.index.heading_id'] = 'ID';
$lang['AdminMain.index.heading_name'] = 'Nom';
$lang['AdminMain.index.heading_type'] = 'Type';
$lang['AdminMain.index.heading_form_type'] = 'Type de formulaire';
$lang['AdminMain.index.heading_code_examples'] = 'Exemples de codes';
$lang['AdminMain.index.heading_date_updated'] = 'Date de mise à jour';
$lang['AdminMain.index.heading_options'] = 'Options';
$lang['AdminMain.index.option_edit'] = 'Editer';
$lang['AdminMain.index.option_delete'] = 'Supprimer';
$lang['AdminMain.index.text_confirm_delete'] = 'Êtes-vous sûr de vouloir supprimer cette extension ?';
$lang['AdminMain.index.extensions_no_results'] = 'Il n\'y a pas d\'extension pour le moment.';
$lang['AdminMain.general.heading_general_settings'] = 'Paramètres généraux';
$lang['AdminMain.general.name'] = 'Nom';
$lang['AdminMain.general.type'] = 'Type d\'extension';
$lang['AdminMain.general.form_type'] = 'Type de formulaire';
$lang['AdminMain.general.code_examples'] = 'Inclure un exemple de code';
$lang['AdminMain.general.basic_info'] = 'Suivant - Informations de base';
$lang['AdminMain.general.tooltip_name'] = 'Le nom d\'affichage de l\'extension. Il est également utilisé pour la création de divers codes. Par exemple, si le nom est Mon module, le répertoire du module sera mon_module et le nom de la classe sera Monmodule.  Pour les plugins, n\'incluez pas le mot "plugin" dans le nom, car cela pose des problèmes lors de la génération du code.';
$lang['AdminMain.general.tooltip_type'] = 'Les modules gèrent de nombreuses fonctions de service, y compris la fourniture de services sur des serveurs distants. Les plugins sont de puissantes intégrations capables de faire presque tout dans Blesta. Les passerelles marchandes traitent les paiements tout en maintenant les clients dans l\'interface Blesta.  Les passerelles non marchandes envoient les clients sur le site d\'un processeur de paiement pour compléter le paiement.';
$lang['AdminMain.general.tooltip_form_type'] = 'Basic pour utiliser une version très tronquée du formulaire d\'extension, ne comprenant que le minimum nécessaire pour générer l\'extension.';
$lang['AdminMain.general.tooltip_code_examples'] = 'Vérifier l\'inclusion de lignes de code d\'exemple commentées pour des fonctionnalités telles que les tâches Cron, les listes d\'événements et les liens, etc.';
$lang['AdminMain.general.placeholder_name'] = 'Nom de l\'extension';
$lang['AdminMain.confirm.heading_confirm'] = 'Confirmation';
$lang['AdminMain.confirm.text_generation'] = 'Les réglages de l\'extension sont terminés.  Vous pouvez revoir n\'importe quelle section en cliquant sur les nœuds de la barre de progression.  Cliquez sur "Générer l\'extension" pour terminer et générer automatiquement les fichiers de votre extension.';
$lang['AdminMain.confirm.location'] = 'Emplacement de l\'extension';
$lang['AdminMain.confirm.tooltip_location'] = 'Répertoire dans lequel les fichiers d\'extension générés doivent être téléchargés.';
$lang['AdminMain.confirm.custom_path'] = 'Chemin d\'accès personnalisé';
$lang['AdminMain.confirm.generate'] = 'Générer une extension';

