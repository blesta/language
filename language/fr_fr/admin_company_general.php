<?php
/**
 * Admin Company General
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyGeneral.!error.captcha_gd'] = 'L\'extension GD est nécessaire pour générer le captcha interne.';
$lang['AdminCompanyGeneral.!success.localization_updated'] = 'Les paramètres de localisation ont été mis à jour avec succès.';
$lang['AdminCompanyGeneral.!success.encryption_updated'] = 'Les paramètres de cryptage ont été mis à jour avec succès.';
$lang['AdminCompanyGeneral.!success.contact_type_added'] = 'Le type de contact "%1$s" a été ajouté avec succès.';
$lang['AdminCompanyGeneral.!success.contact_type_updated'] = 'Le type de contact "%1$s" a été mis à jour avec succès.';
$lang['AdminCompanyGeneral.!success.contact_type_deleted'] = 'Le type de contact "%1$s" a été supprimé avec succès.';
$lang['AdminCompanyGeneral.!success.language_installed'] = 'La langue %1$s a été installée avec succès.';
$lang['AdminCompanyGeneral.!success.language_uninstalled'] = 'La langue %1$s a été désinstallée avec succès.';
$lang['AdminCompanyGeneral.!success.marketing_updated'] = 'Les paramètres marketing ont été mis à jour avec succès.';
$lang['AdminCompanyGeneral.!success.smartsearch_updated'] = 'Les paramètres de Smart Search ont été mis à jour avec succès.';
$lang['AdminCompanyGeneral.!success.humanverification_updated'] = 'Les paramètres de vérification humaine ont été mis à jour avec succès.';
$lang['AdminCompanyGeneral.!tooltip.language'] = 'La langue par défaut utilisée par le système. Pour ajouter d\'autres langues, voir Paramètres d\'internationalisation.';
$lang['AdminCompanyGeneral.!tooltip.client_set_lang'] = 'Si cette option est cochée, les clients peuvent choisir leur propre langue parmi celles qui sont disponibles dans le système.';
$lang['AdminCompanyGeneral.!tooltip.calendar_begins'] = 'Définir le jour de début de la semaine du calendrier.';
$lang['AdminCompanyGeneral.!tooltip.timezone'] = 'Il s\'agit du fuseau horaire du système dans lequel les conversions de date et d\'heure seront formatées.';
$lang['AdminCompanyGeneral.!tooltip.date_format'] = 'Définit le format de la date. Ce format est utilisé pour afficher une date. Veuillez vous référer au manuel php pour connaître les options disponibles.';
$lang['AdminCompanyGeneral.!tooltip.datetime_format'] = 'Définit le format de la date et de l\'heure. Ce format est utilisé pour afficher la date et l\'heure. Veuillez vous référer au manuel php pour connaître les options disponibles.';
$lang['AdminCompanyGeneral.!tooltip.country'] = 'Il s\'agit du pays sélectionné par défaut dans les formulaires pertinents.';
$lang['AdminCompanyGeneral.!tooltip.captcha'] = 'Il s\'agit du captcha utilisé par défaut. Le captcha interne nécessite l\'extension GD.';
$lang['AdminCompanyGeneral.localization.page_title'] = 'Réglages > Entreprise > Général > Localisation';
$lang['AdminCompanyGeneral.localization.boxtitle_localization'] = 'Localisation';
$lang['AdminCompanyGeneral.localization.tz_format'] = '(UTC %1$s) %2$s';
$lang['AdminCompanyGeneral.localization.field.language'] = 'Langue par défaut';
$lang['AdminCompanyGeneral.localization.field.setlanguage'] = 'Le client peut définir la langue';
$lang['AdminCompanyGeneral.localization.field.calendar'] = 'Jour de début du calendrier';
$lang['AdminCompanyGeneral.localization.field.sunday'] = 'Dimanche';
$lang['AdminCompanyGeneral.localization.field.monday'] = 'Lundi';
$lang['AdminCompanyGeneral.localization.field.timezone'] = 'Fuseau horaire';
$lang['AdminCompanyGeneral.localization.field.dateformat'] = 'Format de la date';
$lang['AdminCompanyGeneral.localization.field.datetimeformat'] = 'Format de la date et de l\'heure';
$lang['AdminCompanyGeneral.localization.field.country'] = 'Pays par défaut';
$lang['AdminCompanyGeneral.localization.field.localizationsubmit'] = 'Mise à jour des paramètres';
$lang['AdminCompanyGeneral.!notice.international_languages'] = 'Il existe un projet de traduction participative à l\'adresse translate.blesta.com. Vous pouvez y contribuer et télécharger des traductions de langues. Pour l\'installer, décompressez le contenu du fichier dans votre répertoire d\'installation de Blesta. Ensuite, rafraîchissez cette page et cliquez sur le lien Installer.';
$lang['AdminCompanyGeneral.international.page_title'] = 'Réglages > Entreprise > Général > Internationalisation';
$lang['AdminCompanyGeneral.international.boxtitle_international'] = 'Internationalisation';
$lang['AdminCompanyGeneral.international.text_language'] = 'Langue';
$lang['AdminCompanyGeneral.international.text_iso'] = 'ISO 639-1, 3166-1';
$lang['AdminCompanyGeneral.international.text_options'] = 'Options';
$lang['AdminCompanyGeneral.international.option_install'] = 'Installer';
$lang['AdminCompanyGeneral.international.option_uninstall'] = 'Désinstaller';
$lang['AdminCompanyGeneral.international.confirm_install'] = 'Êtes-vous sûr de vouloir installer la langue %1$s ?';
$lang['AdminCompanyGeneral.international.confirm_uninstall'] = 'Êtes-vous sûr de vouloir désinstaller la langue %1$s ? Cette langue sera désinstallée et tous les modèles d\'e-mail dans cette langue seront définitivement supprimés.';
$lang['AdminCompanyGeneral.encryption.page_title'] = 'Réglages > Entreprise > Général > Chiffrement';
$lang['AdminCompanyGeneral.!notice.passphrase'] = 'AVERTISSEMENT : La définition d\'une phrase de passe empêchera le traitement automatique des comptes de paiement stockés localement. Vous devrez alors procéder manuellement au traitement des paiements en saisissant votre phrase d\'authentification. Pour plus d\'informations sur cette fonction, veuillez consulter le manuel.';
$lang['AdminCompanyGeneral.!notice.passphrase_set'] = 'AVERTISSEMENT : Une phrase d\'authentification a été définie. Vous êtes tenu de regrouper manuellement les paiements à l\'aide de votre phrase de passe. Si vous remplacez votre phrase d\'authentification par une phrase d\'authentification vierge, vous ne serez plus obligé de le faire.';
$lang['AdminCompanyGeneral.encryption.boxtitle_encryption'] = 'Cryptage';
$lang['AdminCompanyGeneral.encryption.field_current_passphrase'] = 'Phrase de passe de la clé privée actuelle';
$lang['AdminCompanyGeneral.encryption.field_private_key_passphrase'] = 'Nouvelle phrase d\'authentification de la clé privée';
$lang['AdminCompanyGeneral.encryption.field_confirm_new_passphrase'] = 'Confirmer la phrase d\'authentification de la clé privée';
$lang['AdminCompanyGeneral.encryption.field_agree'] = 'J\'ai sauvegardé cette phrase d\'authentification dans un endroit sûr.';
$lang['AdminCompanyGeneral.encryption.field_encryptionsubmit'] = 'Mise à jour de la phrase d\'authentification';
$lang['AdminCompanyGeneral.contacttypes.page_title'] = 'Réglages > Entreprise > Général > Types de contact';
$lang['AdminCompanyGeneral.contacttypes.categorylink_addtype'] = 'Créer un type de contact';
$lang['AdminCompanyGeneral.contacttypes.boxtitle_types'] = 'Types de contact';
$lang['AdminCompanyGeneral.contacttypes.heading_name'] = 'Nom';
$lang['AdminCompanyGeneral.contacttypes.heading_define'] = 'Utilisations Définition de la langue';
$lang['AdminCompanyGeneral.contacttypes.heading_options'] = 'Options';
$lang['AdminCompanyGeneral.contacttypes.text_yes'] = 'Oui';
$lang['AdminCompanyGeneral.contacttypes.text_no'] = 'Non';
$lang['AdminCompanyGeneral.contacttypes.option_edit'] = 'Editer';
$lang['AdminCompanyGeneral.contacttypes.option_delete'] = 'Supprimer';
$lang['AdminCompanyGeneral.contacttypes.modal_delete'] = 'Si vous supprimez ce type de contact, tous les contacts affectés à ce type seront placés dans le type par défaut "Facturation". Etes-vous sûr de vouloir supprimer ce type de contact ?';
$lang['AdminCompanyGeneral.contacttypes.no_results'] = 'Il n\'y a pas de type de contact.';
$lang['AdminCompanyGeneral.!contacttypes.is_lang'] = 'Ne cochez cette case que si vous avez ajouté une définition de langue pour ce type de contact dans le fichier de langues personnalisé.';
$lang['AdminCompanyGeneral.addcontacttype.page_title'] = 'Réglages > Entreprise > Général > Créer un type de contact';
$lang['AdminCompanyGeneral.addcontacttype.boxtitle_addcontacttype'] = 'Créer un type de contact';
$lang['AdminCompanyGeneral.addcontacttype.field_name'] = 'Nom';
$lang['AdminCompanyGeneral.addcontacttype.field_is_lang'] = 'Définition de la langue d\'utilisation';
$lang['AdminCompanyGeneral.addcontacttype.field_contacttypesubmit'] = 'Créer un type de contact';
$lang['AdminCompanyGeneral.editcontacttype.page_title'] = 'Réglages > Entreprise > Général > Modifier le type de contact';
$lang['AdminCompanyGeneral.editcontacttype.boxtitle_editcontacttype'] = 'Modifier le type de contact';
$lang['AdminCompanyGeneral.editcontacttype.field_name'] = 'Nom';
$lang['AdminCompanyGeneral.editcontacttype.field_is_lang'] = 'Définition de la langue d\'utilisation';
$lang['AdminCompanyGeneral.editcontacttype.field_contacttypesubmit'] = 'Modifier le type de contact';
$lang['AdminCompanyGeneral.marketing.boxtitle_marketing'] = 'Marketing';
$lang['AdminCompanyGeneral.marketing.field_show_receive_email_marketing'] = 'Présenter aux clients la possibilité d\'accepter ou de refuser le marketing par courrier électronique.';
$lang['AdminCompanyGeneral.marketing.field_submit'] = 'Mise à jour des paramètres';
$lang['AdminCompanyGeneral.smartsearch.boxtitle_smartsearch'] = 'Recherche intelligente';
$lang['AdminCompanyGeneral.smartsearch.field_client_search'] = 'Recherche de clients';
$lang['AdminCompanyGeneral.smartsearch.field_invoice_search'] = 'Recherche de factures';
$lang['AdminCompanyGeneral.smartsearch.field_quotation_search'] = 'Recherche de devis';
$lang['AdminCompanyGeneral.smartsearch.field_transaction_search'] = 'Recherche de transactions';
$lang['AdminCompanyGeneral.smartsearch.field_service_search'] = 'Recherche de services';
$lang['AdminCompanyGeneral.smartsearch.field_package_search'] = 'Recherche de paquets';
$lang['AdminCompanyGeneral.smartsearch.field_submit'] = 'Mise à jour des paramètres';
$lang['AdminCompanyGeneral.humanverification.boxtitle_humanverification'] = 'Vérification humaine';
$lang['AdminCompanyGeneral.humanverification.heading_captcha_provider'] = 'Fournisseur de Captcha';
$lang['AdminCompanyGeneral.humanverification.heading_enabled_forms'] = 'Formulaires activés';
$lang['AdminCompanyGeneral.humanverification.field_captcha'] = 'Captcha';
$lang['AdminCompanyGeneral.humanverification.field_captcha_none'] = 'Aucun';
$lang['AdminCompanyGeneral.humanverification.field_captcha_recaptcha'] = 'reCaptcha';
$lang['AdminCompanyGeneral.humanverification.field_captcha_internalcaptcha'] = 'Captcha interne';
$lang['AdminCompanyGeneral.humanverification.field_recaptcha_pub_key'] = 'Clé de site reCaptcha';
$lang['AdminCompanyGeneral.humanverification.field_recaptcha_shared_key'] = 'Clé partagée reCaptcha';
$lang['AdminCompanyGeneral.humanverification.field_captcha_enabled_forms_admin_login'] = 'Connexion administrateur';
$lang['AdminCompanyGeneral.humanverification.field_captcha_enabled_forms_client_login'] = 'Connexion du client';
$lang['AdminCompanyGeneral.humanverification.field_captcha_enabled_forms_admin_login_reset'] = 'Admin Réinitialiser mon mot de passe';
$lang['AdminCompanyGeneral.humanverification.field_captcha_enabled_forms_client_login_reset'] = 'Client Réinitialiser mon mot de passe';
$lang['AdminCompanyGeneral.humanverification.field_captcha_enabled_forms_client_login_forgot'] = 'Le client a oublié son nom d\'utilisateur';
$lang['AdminCompanyGeneral.humanverification.field_submit'] = 'Mise à jour des paramètres';

