<?php
/**
 * Direct Admin
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['DirectAdmin.!error.server_name.empty'] = 'Vous devez saisir une étiquette de serveur.';
$lang['DirectAdmin.!error.host_name.format'] = 'Le nom d\'hôte semble être invalide.';
$lang['DirectAdmin.!error.port.format'] = 'Le port doit être un numéro.';
$lang['DirectAdmin.!error.user_name.empty'] = 'Vous devez saisir un nom d\'utilisateur.';
$lang['DirectAdmin.!error.password.format'] = 'Vous devez saisir un mot de passe.';
$lang['DirectAdmin.!error.use_ssl.format'] = 'Use SSL doit être soit vrai, soit faux.';
$lang['DirectAdmin.!error.account_limit.valid'] = 'Le champ Limite de compte doit être laissé vide (pour les comptes illimités) ou défini sur une valeur entière.';
$lang['DirectAdmin.!error.name_servers.valid'] = 'Un ou plusieurs des serveurs de noms saisis ne sont pas valides.';
$lang['DirectAdmin.!error.name_servers.count'] = 'Vous devez définir au moins 2 serveurs de noms.';
$lang['DirectAdmin.!error.api.internal'] = 'Une erreur interne s\'est produite ou le serveur n\'a pas répondu à la demande.';
$lang['DirectAdmin.!error.meta[type].format'] = 'Le type de compte doit être utilisateur ou revendeur.';
$lang['DirectAdmin.!error.meta[package].empty'] = 'Un paquetage DirectAdmin est nécessaire.';
$lang['DirectAdmin.!error.meta[ip].empty'] = 'Une adresse IP est nécessaire.';
$lang['DirectAdmin.!error.direct_admin_domain.format'] = 'Veuillez entrer un nom de domaine valide de la forme : domain.com';
$lang['DirectAdmin.!error.direct_admin_username.format'] = 'Le nom d\'utilisateur ne peut contenir que des caractères alphanumériques.';
$lang['DirectAdmin.!error.direct_admin_username.length'] = 'Le nom d\'utilisateur doit comporter entre 4 et 8 caractères.';
$lang['DirectAdmin.!error.direct_admin_password.format'] = 'Assurez-vous que le mot de passe contient les éléments suivants : Au moins 12 caractères, au moins 1 caractère majuscule de A à Z, au moins 1 caractère minuscule de a à z, au moins 1 chiffre de 0 à 9, et au moins 1 caractère spécial de l\'ensemble : !"#$%&\'()*+,-./:;<=>?@[]^_` {|}';
$lang['DirectAdmin.!error.direct_admin_password.matches'] = 'Le mot de passe et le mot de passe de confirmation ne correspondent pas.';
$lang['DirectAdmin.!error.direct_admin_email.format'] = 'Veuillez saisir une adresse électronique valide.';
$lang['DirectAdmin.!error.change_package.type'] = 'Le module ne permet pas de passer d\'un forfait utilisateur à un forfait revendeur.';
$lang['DirectAdmin.name'] = 'DirectAdmin';
$lang['DirectAdmin.description'] = 'DirectAdmin est un panneau de contrôle graphique pour l\'hébergement de sites web, conçu pour faciliter l\'administration des sites web.';
$lang['DirectAdmin.module_row'] = 'Serveur';
$lang['DirectAdmin.module_row_plural'] = 'Serveurs';
$lang['DirectAdmin.module_group'] = 'Groupe de serveurs';
$lang['DirectAdmin.tab_stats'] = 'Statistiques';
$lang['DirectAdmin.tab_client_actions'] = 'Actions';
$lang['DirectAdmin.order_options.first'] = 'Premier serveur non complet';
$lang['DirectAdmin.order_options.roundrobin'] = 'Répartir uniformément entre les serveurs';
$lang['DirectAdmin.servers.no_results'] = 'Il n\'y a pas de serveurs.';
$lang['DirectAdmin.server_groups.no_results'] = 'Il n\'y a pas de groupes de serveurs.';
$lang['DirectAdmin.service_field.domain'] = 'Domaine';
$lang['DirectAdmin.service_field.username'] = 'Nom d\'utilisateur';
$lang['DirectAdmin.service_field.password'] = 'Mot de passe';
$lang['DirectAdmin.service_field.email'] = 'Courriel';
$lang['DirectAdmin.service_field.text_generate_password'] = 'Générer un mot de passe';
$lang['DirectAdmin.tab_client_actions.change_password'] = 'Modifier le mot de passe';
$lang['DirectAdmin.tab_client_actions.field_direct_admin_password'] = 'Mot de passe';
$lang['DirectAdmin.tab_client_actions.field_direct_admin_confirm_password'] = 'Confirmer le mot de passe';
$lang['DirectAdmin.tab_client_actions.field_password_submit'] = 'Mise à jour du mot de passe';
$lang['DirectAdmin.tab_client_actions.text_generate_password'] = 'Générer un mot de passe';
$lang['DirectAdmin.service_info.username'] = 'Nom d\'utilisateur';
$lang['DirectAdmin.service_info.password'] = 'Mot de passe';
$lang['DirectAdmin.service_info.server'] = 'Serveur';
$lang['DirectAdmin.service_info.options'] = 'Options';
$lang['DirectAdmin.service_info.option_login'] = 'Se connecter';
$lang['DirectAdmin.package_fields.type'] = 'Type de compte';
$lang['DirectAdmin.package_fields.type_user'] = 'Utilisateur';
$lang['DirectAdmin.package_fields.type_reseller'] = 'Revendeur';
$lang['DirectAdmin.package_fields.package'] = 'Paquet DirectAdmin';
$lang['DirectAdmin.package_fields.ip'] = 'Adresse IP';
$lang['DirectAdmin.package_fields.ip_shared'] = 'Partagé';
$lang['DirectAdmin.package_fields.ip_assign'] = 'Attribuer';
$lang['DirectAdmin.add_module_row'] = 'Ajouter un serveur';
$lang['DirectAdmin.add_module_group'] = 'Ajouter un groupe de serveurs';
$lang['DirectAdmin.manage.module_rows_title'] = 'Serveurs';
$lang['DirectAdmin.manage.module_groups_title'] = 'Groupes de serveurs';
$lang['DirectAdmin.manage.module_rows_heading.name'] = 'Label du serveur';
$lang['DirectAdmin.manage.module_rows_heading.host_name'] = 'Nom de l\'hôte';
$lang['DirectAdmin.manage.module_rows_heading.accounts'] = 'Comptes';
$lang['DirectAdmin.manage.module_rows_heading.options'] = 'Options';
$lang['DirectAdmin.manage.module_groups_heading.name'] = 'Nom du groupe';
$lang['DirectAdmin.manage.module_groups_heading.servers'] = 'Nombre de serveurs';
$lang['DirectAdmin.manage.module_groups_heading.options'] = 'Options';
$lang['DirectAdmin.manage.module_rows.count'] = '%1$s / %2$s';
$lang['DirectAdmin.manage.module_rows.edit'] = 'Editer';
$lang['DirectAdmin.manage.module_groups.edit'] = 'Editer';
$lang['DirectAdmin.manage.module_rows.delete'] = 'Supprimer';
$lang['DirectAdmin.manage.module_groups.delete'] = 'Supprimer';
$lang['DirectAdmin.manage.module_rows.confirm_delete'] = 'Êtes-vous sûr de vouloir supprimer ce serveur ?';
$lang['DirectAdmin.manage.module_groups.confirm_delete'] = 'Êtes-vous sûr de vouloir supprimer ce groupe de serveurs ?';
$lang['DirectAdmin.row_meta.server_name'] = 'Label du serveur';
$lang['DirectAdmin.row_meta.host_name'] = 'Nom de l\'hôte';
$lang['DirectAdmin.row_meta.port'] = 'Port';
$lang['DirectAdmin.row_meta.default_port'] = '2222';
$lang['DirectAdmin.row_meta.user_name'] = 'Nom de l\'utilisateur';
$lang['DirectAdmin.row_meta.password'] = 'Mot de passe';
$lang['DirectAdmin.row_meta.use_ssl'] = 'Utiliser SSL lors de la connexion à l\'API (recommandé)';
$lang['DirectAdmin.row_meta.account_limit'] = 'Limite du compte';
$lang['DirectAdmin.row_meta.name_server'] = 'Serveur de noms %1$s';
$lang['DirectAdmin.add_row.box_title'] = 'Ajouter le serveur DirectAdmin';
$lang['DirectAdmin.add_row.basic_title'] = 'Paramètres de base';
$lang['DirectAdmin.add_row.name_servers_title'] = 'Serveurs de noms';
$lang['DirectAdmin.add_row.name_server_btn'] = 'Ajouter un serveur de noms supplémentaire';
$lang['DirectAdmin.add_row.name_server_col'] = 'Serveur de noms';
$lang['DirectAdmin.add_row.name_server_host_col'] = 'Nom d\'hôte';
$lang['DirectAdmin.add_row.remove_name_server'] = 'Retirer';
$lang['DirectAdmin.add_row.notes_title'] = 'Notes';
$lang['DirectAdmin.add_row.add_btn'] = 'Ajouter un serveur';
$lang['DirectAdmin.edit_row.box_title'] = 'Modifier le serveur DirectAdmin';
$lang['DirectAdmin.edit_row.basic_title'] = 'Paramètres de base';
$lang['DirectAdmin.edit_row.name_servers_title'] = 'Serveurs de noms';
$lang['DirectAdmin.edit_row.name_server_btn'] = 'Ajouter un serveur de noms supplémentaire';
$lang['DirectAdmin.edit_row.name_server_col'] = 'Serveur de noms';
$lang['DirectAdmin.edit_row.name_server_host_col'] = 'Nom d\'hôte';
$lang['DirectAdmin.edit_row.remove_name_server'] = 'Retirer';
$lang['DirectAdmin.edit_row.notes_title'] = 'Notes';
$lang['DirectAdmin.edit_row.add_btn'] = 'Editer le serveur';
$lang['DirectAdmin.tab_client_stats'] = 'Statistiques';
$lang['DirectAdmin.tab_client_stats.info_title'] = 'Informations';
$lang['DirectAdmin.tab_client_stats.info_heading.field'] = 'Champ d\'application';
$lang['DirectAdmin.tab_client_stats.info_heading.value'] = 'Valeur';
$lang['DirectAdmin.tab_client_stats.no_results'] = 'Aucune information statistique n\'est actuellement disponible.';
$lang['DirectAdmin.row_meta.ip_address'] = 'Adresse IP';
$lang['DirectAdmin.!error.ip_address.format'] = 'L\'adresse IP semble être invalide.';
$lang['DirectAdmin.row_meta.http_version'] = 'Version HTTP';

