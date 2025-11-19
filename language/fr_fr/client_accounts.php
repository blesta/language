<?php
/**
 * Client Accounts
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientAccounts.!success.defaultaccount_updated'] = 'Le compte de paiement par défaut a été mis à jour.';
$lang['ClientAccounts.!success.defaultaccount_deleted'] = 'Le compte de paiement par défaut a été supprimé.';
$lang['ClientAccounts.!success.account_created'] = 'Le compte de paiement a été créé avec succès.';
$lang['ClientAccounts.!success.ccaccount_deleted'] = 'Le compte de paiement a été supprimé avec succès.';
$lang['ClientAccounts.!success.ccaccount_updated'] = 'Le compte de paiement a été mis à jour avec succès.';
$lang['ClientAccounts.!success.achaccount_deleted'] = 'Le compte de paiement a été supprimé avec succès.';
$lang['ClientAccounts.!success.achaccount_updated'] = 'Le compte de paiement a été mis à jour avec succès.';
$lang['ClientAccounts.!success.achaccount_verified'] = 'Le compte de paiement a été vérifié avec succès.';
$lang['ClientAccounts.!error.account_invalid'] = 'Le type de compte de paiement fourni est désactivé ou invalide.';
$lang['ClientAccounts.!error.payment_account_type_invalid'] = 'Type de compte de paiement non valide.';
$lang['ClientAccounts.!notice.disabled'] = 'La possibilité d\'ajouter des comptes de paiement est actuellement désactivée.';
$lang['ClientAccounts.!notice.ach_disabled'] = 'Les comptes de paiement ACH sont actuellement désactivés et ne peuvent pas être mis à jour.';
$lang['ClientAccounts.!notice.cc_disabled'] = 'Les comptes de paiement par carte de crédit sont actuellement désactivés et peuvent ne pas être mis à jour.';
$lang['ClientAccounts.!notice.reenable_autodebit'] = 'Les paiements automatiques ont été spécifiquement désactivés pour ce compte. Veuillez contacter un membre du personnel pour les réactiver. Vous pouvez sélectionner un compte de paiement par défaut, mais il ne sera pas débité automatiquement tant qu\'il n\'aura pas été réactivé par le personnel.';
$lang['ClientAccounts.!info.account_info'] = 'Les comptes de paiement vous permettent de conserver les informations relatives aux paiements et peuvent être utilisés pour payer les factures. Un compte de paiement sélectionné comme compte par défaut sera utilisé pour les paiements récurrents automatiques.';
$lang['ClientAccounts.!info.no_accounts'] = 'Vous n\'avez actuellement aucun compte de paiement. Ajoutez votre premier compte de paiement ci-dessous.';
$lang['ClientAccounts.!info.ach_verification'] = 'Vous devez vérifier ce compte avant de pouvoir l\'utiliser pour effectuer un paiement.';
$lang['ClientAccounts.!info.ach_verification_edit'] = 'Après avoir modifié ce compte, vous devrez le vérifier avant de pouvoir l\'utiliser pour effectuer un paiement.';
$lang['ClientAccounts.index.page_title'] = 'Comptes du client #%1$s';
$lang['ClientAccounts.index.create_account'] = 'Ajouter un compte de paiement';
$lang['ClientAccounts.index.boxtitle_accounts'] = 'Comptes de paiement';
$lang['ClientAccounts.index.heading_name'] = 'Nom';
$lang['ClientAccounts.index.heading_type'] = 'Type';
$lang['ClientAccounts.index.heading_last4'] = 'Les 4 derniers';
$lang['ClientAccounts.index.heading_options'] = 'Options';
$lang['ClientAccounts.index.option_edit'] = 'Editer';
$lang['ClientAccounts.index.option_verify'] = 'Vérifier';
$lang['ClientAccounts.index.option_delete'] = 'Supprimer';
$lang['ClientAccounts.index.type_cc'] = '%1$s - %2$s';
$lang['ClientAccounts.index.type_ach'] = '%1$s - %2$s';
$lang['ClientAccounts.index.confirm_delete'] = 'Êtes-vous sûr de vouloir supprimer ce compte de paiement ?';
$lang['ClientAccounts.index.field_accountsubmit'] = 'Définir comme compte de paiement par défaut';
$lang['ClientAccounts.index.field_removeautodebit'] = 'Supprimer le débit automatique';
$lang['ClientAccounts.index.no_results'] = 'Vous n\'avez pas de comptes de paiement.';
$lang['ClientAccounts.add.page_title'] = 'Client #%1$s Ajouter un compte de paiement';
$lang['ClientAccounts.add.heading_account_type'] = 'Type de compte';
$lang['ClientAccounts.add.field_cc_type'] = 'Carte de crédit';
$lang['ClientAccounts.add.field_ach_type'] = 'ACH';
$lang['ClientAccounts.add.boxtitle_create'] = 'Ajouter un compte de paiement';
$lang['ClientAccounts.add.field_nextsubmit'] = 'Continuer';
$lang['ClientAccounts.add.field_accountsubmit'] = 'Créer un compte';
$lang['ClientAccounts.editach.page_title'] = 'Client #%1$s Modifier le compte ACH';
$lang['ClientAccounts.editach.boxtitle_editach'] = 'Modifier le compte ACH';
$lang['ClientAccounts.editach.field_accountsubmit'] = 'Modifier le compte';
$lang['ClientAccounts.verifyach.page_title'] = 'Client #%1$s Vérifier le compte ACH';
$lang['ClientAccounts.verifyach.boxtitle_verifyach'] = 'Vérifier le compte ACH';
$lang['ClientAccounts.verifyach.field_firstdeposit'] = 'Premier dépôt';
$lang['ClientAccounts.verifyach.field_seconddeposit'] = 'Deuxième dépôt';
$lang['ClientAccounts.verifyach.field_accountsubmit'] = 'Vérifier le compte';
$lang['ClientAccounts.editcc.page_title'] = 'Client #%1$s Edit Credit Card Account';
$lang['ClientAccounts.editcc.boxtitle_editcc'] = 'Modifier le compte de la carte de crédit';
$lang['ClientAccounts.editcc.field_accountsubmit'] = 'Modifier le compte';
$lang['ClientAccounts.setcontactview.text_none'] = 'Aucun';
$lang['ClientAccounts.contact_info.heading_contact'] = 'Informations sur le contact';
$lang['ClientAccounts.contact_info.text_select_contact'] = 'Vous pouvez sélectionner un contact existant pour pré-remplir ce formulaire.';
$lang['ClientAccounts.contact_info.field_contact_id'] = 'Copier les informations de contact de';
$lang['ClientAccounts.contact_info.field_first_name'] = 'Prénom';
$lang['ClientAccounts.contact_info.field_last_name'] = 'Nom de famille';
$lang['ClientAccounts.contact_info.field_company'] = 'Entreprise';
$lang['ClientAccounts.contact_info.field_title'] = 'Titre';
$lang['ClientAccounts.contact_info.field_address1'] = 'Adresse 1';
$lang['ClientAccounts.contact_info.field_address2'] = 'Adresse 2';
$lang['ClientAccounts.contact_info.field_city'] = 'Ville';
$lang['ClientAccounts.contact_info.field_country'] = 'Pays';
$lang['ClientAccounts.contact_info.field_state'] = 'État';
$lang['ClientAccounts.contact_info.field_zip'] = 'Code postal';
$lang['ClientAccounts.contact_info.field_email'] = 'Courriel';
$lang['ClientAccounts.cc_info.heading_cc'] = 'Informations sur la carte de crédit';
$lang['ClientAccounts.cc_info.field_number'] = 'Nombre';
$lang['ClientAccounts.cc_info.field_security'] = 'Code de sécurité';
$lang['ClientAccounts.cc_info.field_expiration'] = 'Date d\'expiration';
$lang['ClientAccounts.cc_info.field_savedetails'] = 'Sauvegarder le compte';
$lang['ClientAccounts.cc_info.tooltip_code'] = 'Le code de sécurité à 3 ou 4 chiffres, qui se trouve généralement au dos de la carte.';
$lang['ClientAccounts.ach_info.heading_ach'] = 'Informations sur le compte bancaire';
$lang['ClientAccounts.ach_info.field_type'] = 'Type';
$lang['ClientAccounts.ach_info.field_accountnum'] = 'Numéro de compte';
$lang['ClientAccounts.ach_info.field_routingnum'] = 'Numéro de routage';
$lang['ClientAccounts.ach_info.field_savedetails'] = 'Sauvegarder le compte';
$lang['ClientAccounts.navigation.nav_dashboard'] = 'Tableau de bord';
$lang['ClientAccounts.navigation.nav_paymentaccounts'] = 'Comptes de paiement';
$lang['ClientAccounts.navigation.nav_paymentaccounts_add'] = 'Ajouter un compte de paiement';
$lang['ClientAccounts.navigation.nav_return'] = 'Retour au tableau de bord';
$lang['ClientAccounts.credithandling.field_submit'] = 'Mise à jour des paramètres';
$lang['ClientAccounts.credithandling.heading_threshold'] = 'Seuil de notification';
$lang['ClientAccounts.credithandling.heading_currency'] = 'Monnaie';
$lang['ClientAccounts.credithandling.text_description'] = 'Configurer les notifications de solde bas. Vous recevrez un courriel quotidien lorsque votre solde créditeur passera sous le seuil fixé pour n\'importe quelle devise.';
$lang['ClientAccounts.credithandling.boxtitle_credithandling'] = 'Traitement des crédits';
$lang['ClientAccounts.navigation.nav_credithandling'] = 'Traitement des crédits';
$lang['ClientAccounts.!success.credit_handling_updated'] = 'Les paramètres de gestion des crédits ont été mis à jour avec succès.';

