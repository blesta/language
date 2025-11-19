<?php
/**
 * Admin System General
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemGeneral.!success.basic_updated'] = 'Les paramètres de la configuration de base ont été mis à jour avec succès !';
$lang['AdminSystemGeneral.!success.geoip_updated'] = 'Les paramètres GeoIP ont été mis à jour avec succès !';
$lang['AdminSystemGeneral.!success.maintenance_updated'] = 'Les paramètres de maintenance ont été mis à jour avec succès !';
$lang['AdminSystemGeneral.!success.license_updated'] = 'Votre clé de licence a été mise à jour avec succès !';
$lang['AdminSystemGeneral.!success.addtype_created'] = 'Le type de paiement "%1$s" a été créé avec succès !';
$lang['AdminSystemGeneral.!success.edittype_updated'] = 'Le type de paiement "%1$s" a été mis à jour avec succès !';
$lang['AdminSystemGeneral.!success.deletetype_deleted'] = 'Le type de paiement "%1$s" a été supprimé avec succès !';
$lang['AdminSystemGeneral.!error.geoip_mbstring_required'] = 'L\'extension mbstring est nécessaire pour cette fonctionnalité.';
$lang['AdminSystemGeneral.!tooltip.license_key'] = 'Il s\'agit de votre clé de licence Blesta. Si vous recevez une nouvelle clé de licence, saisissez-la ici.';
$lang['AdminSystemGeneral.!tooltip.root_web_dir'] = 'Cette valeur représente le chemin complet du serveur vers le répertoire racine du document du serveur web (par exemple, /home/user/public_html/). Il ne s\'agit pas nécessairement du chemin vers le répertoire sous lequel Blesta est installé.';
$lang['AdminSystemGeneral.!tooltip.temp_dir'] = 'Cette valeur représente le chemin complet du serveur vers l\'endroit où Blesta doit écrire les fichiers temporaires. Ce répertoire doit être accessible en écriture à l\'utilisateur web et à l\'utilisateur cron du serveur.';
$lang['AdminSystemGeneral.!tooltip.uploads_dir'] = 'Cette valeur représente le chemin complet du serveur vers l\'endroit où Blesta doit écrire les fichiers téléchargés. Ce répertoire doit être accessible en écriture par l\'utilisateur web et l\'utilisateur cron du serveur.';
$lang['AdminSystemGeneral.!tooltip.log_dir'] = 'Cette valeur représente le chemin complet du serveur vers l\'endroit où Blesta doit écrire les fichiers journaux. Ce répertoire doit être accessible en écriture à l\'utilisateur web et à l\'utilisateur cron du serveur.';
$lang['AdminSystemGeneral.!tooltip.log_days'] = 'La politique de rotation définit la durée de conservation de la plupart des données du journal de l\'entreprise. Le fichier de configuration du système peut définir d\'autres paramètres de conservation des journaux.';
$lang['AdminSystemGeneral.!tooltip.behind_proxy'] = 'Si cette option est cochée, Blesta supposera qu\'il se trouve derrière un proxy et déterminera les adresses IP à partir d\'un en-tête x-forwarded-for fourni par le proxy. Vous ne devez cocher ce paramètre que si l\'en-tête x-forwarded-for est fiable.';
$lang['AdminSystemGeneral.!tooltip.maintenance_mode'] = 'En mode maintenance, seuls les membres du personnel peuvent utiliser le système. Tous les autres utilisateurs seront dirigés vers la page de connexion et verront s\'afficher le motif de la maintenance.';
$lang['AdminSystemGeneral.!tooltip.maintenance_reason'] = 'Ce motif de maintenance sera affiché aux utilisateurs non fonctionnaires qui accèdent au système lorsque le mode de maintenance est activé.';
$lang['AdminSystemGeneral.basic.page_title'] = 'Réglages > Système > Général > Configuration de base';
$lang['AdminSystemGeneral.basic.boxtitle_basic'] = 'Configuration de base';
$lang['AdminSystemGeneral.basic.field.root_web_dir'] = 'Annuaire web racine';
$lang['AdminSystemGeneral.basic.field.temp_dir'] = 'Annuaire temporaire';
$lang['AdminSystemGeneral.basic.field.uploads_dir'] = 'Répertoire des téléchargements';
$lang['AdminSystemGeneral.basic.field.log_dir'] = 'Répertoire des journaux';
$lang['AdminSystemGeneral.basic.field.log_days'] = 'Politique de rotation';
$lang['AdminSystemGeneral.basic.field.behind_proxy'] = 'Mon installation se trouve derrière un proxy ou un équilibreur de charge.';
$lang['AdminSystemGeneral.basic.field.basicsubmit'] = 'Mise à jour des paramètres';
$lang['AdminSystemGeneral.basic.text_docroot'] = 'Attente de "%1$s"';
$lang['AdminSystemGeneral.basic.text_writable'] = 'Ecriture possible';
$lang['AdminSystemGeneral.basic.text_unwritable'] = 'Non inscriptible';
$lang['AdminSystemGeneral.basic.text_no_log'] = 'Ne jamais faire pivoter le journal';
$lang['AdminSystemGeneral.basic.text_day'] = 'Jour';
$lang['AdminSystemGeneral.basic.text_days'] = 'Jours';
$lang['AdminSystemGeneral.geoip.page_title'] = 'Réglages > Système > Général > Réglages GeoIP';
$lang['AdminSystemGeneral.geoip.boxtitle_geoip'] = 'GeoIP';
$lang['AdminSystemGeneral.geoip.text_setup'] = 'GeoIP peut être activé ici, donnant à Blesta la fonctionnalité des services de localisation GeoIP. Son activation permettra à certaines fonctions de tirer parti des services de localisation.';
$lang['AdminSystemGeneral.geoip.text_geolite'] = 'GeoIP nécessite la base de données binaire GeoLite City, qui peut être téléchargée depuis votre compte à l\'adresse <a target="_blank" href="%1$s">%1$s</a>. Le fichier doit être décompressé et téléchargé vers :';
$lang['AdminSystemGeneral.geoip.text_geolite_step_1'] = 'Ouvrir un compte MaxMind';
$lang['AdminSystemGeneral.geoip.text_geolite_step_2'] = 'Utilisez l\'e-mail de bienvenue pour définir votre mot de passe';
$lang['AdminSystemGeneral.geoip.text_geolite_step_3'] = 'Connectez-vous à votre compte';
$lang['AdminSystemGeneral.geoip.text_geolite_step_4'] = 'Sous "GeoIP2 / GeoLite2 > Download Files", téléchargez le fichier binaire GeoLite2-City.';
$lang['AdminSystemGeneral.geoip.text_geolite_step_5'] = 'Téléchargez ce fichier dans votre installation Blesta à l\'adresse indiquée ci-dessous';
$lang['AdminSystemGeneral.geoip.text_database_exists'] = '%1$s existe.';
$lang['AdminSystemGeneral.geoip.text_database_not_exists'] = '%1$s n\'existe pas.';
$lang['AdminSystemGeneral.geoip.field_geoip_enabled'] = 'Activer le GeoIP';
$lang['AdminSystemGeneral.geoip.field_geoipsubmit'] = 'Mise à jour des paramètres';
$lang['AdminSystemGeneral.maintenance.page_title'] = 'Réglages > Système > Général > Maintenance';
$lang['AdminSystemGeneral.maintenance.boxtitle_maintenance'] = 'Maintenance';
$lang['AdminSystemGeneral.maintenance.field.maintenance_mode'] = 'Activer le mode maintenance';
$lang['AdminSystemGeneral.maintenance.field.maintenance_reason'] = 'Raison de l\'entretien';
$lang['AdminSystemGeneral.maintenance.field.maintenancesubmit'] = 'Mise à jour des paramètres';
$lang['AdminSystemGeneral.license.page_title'] = 'Réglages > Système > Général > Clé de licence';
$lang['AdminSystemGeneral.license.boxtitle_license'] = 'Clé de licence';
$lang['AdminSystemGeneral.license.field.license_key'] = 'Clé de licence';
$lang['AdminSystemGeneral.license.field.licensesubmit'] = 'Mise à jour des paramètres';
$lang['AdminSystemGeneral.paymenttypes.page_title'] = 'Réglages > Système > Général > Types de paiement';
$lang['AdminSystemGeneral.paymenttypes.categorylink_addtype'] = 'Créer un type de paiement';
$lang['AdminSystemGeneral.paymenttypes.boxtitle_types'] = 'Types de paiement';
$lang['AdminSystemGeneral.paymenttypes.heading_name'] = 'Nom';
$lang['AdminSystemGeneral.paymenttypes.heading_type'] = 'Type';
$lang['AdminSystemGeneral.paymenttypes.heading_is_lang'] = 'Utilisations Définition de la langue';
$lang['AdminSystemGeneral.paymenttypes.heading_options'] = 'Options';
$lang['AdminSystemGeneral.paymenttypes.option_edit'] = 'Editer';
$lang['AdminSystemGeneral.paymenttypes.option_delete'] = 'Supprimer';
$lang['AdminSystemGeneral.paymenttypes.modal_delete'] = 'Si vous supprimez ce type de paiement, toutes les transactions qui utilisent ce type de paiement seront définies comme "autres". Êtes-vous sûr de vouloir supprimer ce type de paiement ?';
$lang['AdminSystemGeneral.paymenttypes.text_yes'] = 'Oui';
$lang['AdminSystemGeneral.paymenttypes.text_no'] = 'Non';
$lang['AdminSystemGeneral.paymenttypes.no_results'] = 'Il n\'y a pas de type de paiement.';
$lang['AdminSystemGeneral.!paymenttypes.is_lang'] = 'Ne cochez cette case que si vous avez ajouté une définition de langue pour ce type de paiement dans le fichier de langues personnalisé.';
$lang['AdminSystemGeneral.!paymenttypes.type'] = 'Lorsqu\'il est défini comme débit, les transactions utilisant ce type de paiement sont considérées comme basées sur le revenu, tandis que le crédit n\'est pas basé sur le revenu.';
$lang['AdminSystemGeneral.addtype.page_title'] = 'Réglages > Système > Général > Créer un type de paiement';
$lang['AdminSystemGeneral.addtype.boxtitle_addtype'] = 'Créer un type de paiement';
$lang['AdminSystemGeneral.addtype.field_name'] = 'Nom';
$lang['AdminSystemGeneral.addtype.field_type'] = 'Type';
$lang['AdminSystemGeneral.addtype.field_is_lang'] = 'Définition de la langue d\'utilisation';
$lang['AdminSystemGeneral.addtype.field_typesubmit'] = 'Créer un type de paiement';
$lang['AdminSystemGeneral.edittype.page_title'] = 'Réglages > Système > Général > Modifier le type de paiement';
$lang['AdminSystemGeneral.edittype.boxtitle_edittype'] = 'Modifier le type de paiement';
$lang['AdminSystemGeneral.edittype.field_name'] = 'Nom';
$lang['AdminSystemGeneral.edittype.field_type'] = 'Type';
$lang['AdminSystemGeneral.edittype.field_is_lang'] = 'Définition de la langue d\'utilisation';
$lang['AdminSystemGeneral.edittype.field_typesubmit'] = 'Modifier le type de paiement';
$lang['AdminSystemGeneral.!error.upload_dir'] = 'Le répertoire de téléchargement doit exister et se trouver en dehors du répertoire web racine.';
$lang['AdminSystemGeneral.!notice.text_open_basedir_description'] = 'PHP open_basedir est activé. L\'accès aux fichiers est limité à : %1$s. Les répertoires situés en dehors de ces chemins ne sont pas accessibles.';

