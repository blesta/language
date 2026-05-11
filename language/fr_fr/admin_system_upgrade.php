<?php
/**
 * Admin System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemUpgrade.index.page_title'] = 'Réglages > Système > Options de mise à niveau';
$lang['AdminSystemUpgrade.index.boxtitle_upgrade'] = 'Options de mise à niveau';
$lang['AdminSystemUpgrade.index.field_upgradesubmit'] = 'Mise à jour des paramètres';
$lang['AdminSystemUpgrade.index.no_results'] = 'Les options de mise à niveau ne sont pas disponibles pour le moment.';
$lang['AdminSystemUpgrade.upgrade.btn_abort'] = 'Annuler';
$lang['AdminSystemUpgrade.upgrade.btn_continue'] = 'Poursuivre la mise à niveau';
$lang['AdminSystemUpgrade.upgrade.label_modified'] = 'Fichiers modifiés';
$lang['AdminSystemUpgrade.upgrade.label_missing'] = 'Fichiers manquants';
$lang['AdminSystemUpgrade.upgrade.modified_files_title'] = 'Fichiers de base modifiés';
$lang['AdminSystemUpgrade.upgrade.modified_files'] = '%1$s ont été modifiés par rapport à la version originale. Ces modifications seront écrasées lors de la mise à niveau. Voulez-vous continuer ?';
$lang['AdminSystemUpgrade.upgrade.no_checksums'] = 'Le manifeste des fichiers de votre installation actuelle n\'inclut pas de sommes de contrôle. La vérification de l\'intégrité des fichiers sera ignorée. Souhaitez-vous poursuivre la mise à niveau ?';
$lang['AdminSystemUpgrade.upgrade.no_manifest'] = 'Aucun manifeste de fichier n\'a été trouvé pour votre installation actuelle. La vérification de l\'intégrité des fichiers sera ignorée. Souhaitez-vous poursuivre la mise à niveau ?';
$lang['AdminSystemUpgrade.upgrade.started'] = 'Le processus de mise à niveau a commencé. Vous pouvez fermer cette page - la mise à niveau se poursuivra en arrière-plan. Revenez sur cette page pour vérifier la progression.';
$lang['AdminSystemUpgrade.index.failure_db_version_mismatch'] = 'La version de la base de données n\'a pas atteint la valeur attendue. La mise à niveau peut s\'être arrêtée à mi-chemin d\'une version, ce qui a laissé des modifications de schéma appliquées.';
$lang['AdminSystemUpgrade.index.failure_db_version_after'] = 'Actuel : %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_expected'] = 'Prévu après la mise à niveau : %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_before'] = 'Avant la mise à niveau : %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_label'] = 'Version de la base de données :';
$lang['AdminSystemUpgrade.index.failure_backup_label'] = 'Sauvegardes disponibles :';
$lang['AdminSystemUpgrade.index.failure_explanation'] = 'La mise à niveau ne s\'est pas déroulée correctement. Il se peut que votre système soit dans un état incohérent et que certaines modifications apportées à la base de données à partir de la version qui a échoué aient déjà été appliquées. La ré-exécution de la mise à niveau risque d\'échouer différemment. Il est recommandé de restaurer la base de données à partir d\'une sauvegarde avant de réessayer. Les sauvegardes ont été effectuées avant le début de la mise à niveau et sont répertoriées ci-dessous. Pour restaurer la base de données, il faut soit restaurer ces sauvegardes manuellement, soit ouvrir un ticket d\'assistance pour obtenir de l\'aide.';
$lang['AdminSystemUpgrade.index.failure_heading'] = 'Que faire ensuite ?';
$lang['AdminSystemUpgrade.index.recovery_instructions'] = 'Pour restaurer une sauvegarde, exécutez les commandes suivantes sur votre serveur :';
$lang['AdminSystemUpgrade.index.recovery_files_path'] = 'Sauvegarde des fichiers : %1$s';
$lang['AdminSystemUpgrade.index.recovery_db_path'] = 'Sauvegarde de la base de données : %1$s';
$lang['AdminSystemUpgrade.index.heading_recovery'] = 'Instructions de récupération';
$lang['AdminSystemUpgrade.index.confirm_delete_backup'] = 'Êtes-vous sûr de vouloir supprimer cette sauvegarde ? Cette opération ne peut pas être annulée.';
$lang['AdminSystemUpgrade.index.btn_delete'] = 'Supprimer';
$lang['AdminSystemUpgrade.index.btn_download'] = 'Télécharger';
$lang['AdminSystemUpgrade.index.backup_files'] = 'Dossiers';
$lang['AdminSystemUpgrade.index.backup_database'] = 'Base de données';
$lang['AdminSystemUpgrade.index.backup_col_date'] = 'Date';
$lang['AdminSystemUpgrade.index.backup_col_size'] = 'Taille';
$lang['AdminSystemUpgrade.index.backup_col_type'] = 'Type';
$lang['AdminSystemUpgrade.index.backup_col_file'] = 'Fichier';
$lang['AdminSystemUpgrade.index.no_backups'] = 'Aucune sauvegarde de mise à niveau n\'a été trouvée.';
$lang['AdminSystemUpgrade.index.heading_backups'] = 'Mise à jour des sauvegardes';
$lang['AdminSystemUpgrade.index.btn_clear_lock'] = 'Verrouillage transparent';
$lang['AdminSystemUpgrade.index.lock_stale'] = 'Un processus de mise à niveau précédent semble s\'être arrêté de manière inattendue.';
$lang['AdminSystemUpgrade.index.lock_active'] = 'Une mise à niveau est actuellement en cours, elle a débuté à l\'adresse %1$s.';
$lang['AdminSystemUpgrade.index.btn_retry'] = 'Réessayer';
$lang['AdminSystemUpgrade.index.btn_dashboard'] = 'Retour au tableau de bord';
$lang['AdminSystemUpgrade.index.upgrade_failed'] = 'La mise à niveau a échoué.';
$lang['AdminSystemUpgrade.index.upgrade_complete'] = 'La mise à niveau a été effectuée avec succès !';
$lang['AdminSystemUpgrade.index.step_finalize'] = 'Finaliser';
$lang['AdminSystemUpgrade.index.step_migrate'] = 'Exécuter des migrations de bases de données';
$lang['AdminSystemUpgrade.index.step_replace'] = 'Remplacer les fichiers';
$lang['AdminSystemUpgrade.index.step_extract'] = 'Extraire des fichiers';
$lang['AdminSystemUpgrade.index.step_verify'] = 'Vérifier l\'intégrité';
$lang['AdminSystemUpgrade.index.step_download'] = 'Télécharger la version';
$lang['AdminSystemUpgrade.index.step_backup_files'] = 'Sauvegarde des fichiers';
$lang['AdminSystemUpgrade.index.step_backup_db'] = 'Sauvegarde de la base de données';
$lang['AdminSystemUpgrade.index.step_maintenance'] = 'Activer le mode maintenance';
$lang['AdminSystemUpgrade.index.step_preflight'] = 'Vérifications avant le vol';
$lang['AdminSystemUpgrade.index.heading_progress'] = 'Progression de la mise à niveau';
$lang['AdminSystemUpgrade.index.select_version'] = 'Sélectionnez une version à mettre à jour :';
$lang['AdminSystemUpgrade.index.upgrade_warning'] = 'Cette opération permet d\'activer le mode maintenance, de créer des sauvegardes, de télécharger et d\'installer la nouvelle version et d\'effectuer des migrations de bases de données. Ce processus ne peut être interrompu une fois lancé.';
$lang['AdminSystemUpgrade.index.btn_upgrade'] = 'Mettre à niveau maintenant';
$lang['AdminSystemUpgrade.index.clean_stale_files_note'] = 'Supprime les fichiers dans les répertoires principaux qui ne sont pas présents dans le manifeste de la nouvelle version. Ne pas cocher cette case si vous n\'êtes pas certain qu\'aucun fichier personnalisé n\'existe dans les répertoires principaux.';
$lang['AdminSystemUpgrade.index.clean_stale_files'] = 'Supprimer les fichiers centraux périmés après une mise à jour';
$lang['AdminSystemUpgrade.index.skip_integrity_check'] = 'Sauter la vérification de l\'intégrité du fichier';
$lang['AdminSystemUpgrade.index.no_support'] = 'Votre abonnement au support et aux mises à jour n\'est pas actif. Seules les mises à jour de correctifs sont disponibles.';
$lang['AdminSystemUpgrade.index.requires_support'] = 'Nécessite un abonnement actif à l\'assistance et aux mises à jour.';
$lang['AdminSystemUpgrade.index.changelog_link'] = 'Voir le journal des modifications';
$lang['AdminSystemUpgrade.index.release_date'] = 'Publié : %1$s';
$lang['AdminSystemUpgrade.index.upgrade_latest'] = 'Mise à niveau complète : %1$s → %2$s';
$lang['AdminSystemUpgrade.index.upgrade_patch'] = 'Mise à jour des correctifs : %1$s → %2$s';
$lang['AdminSystemUpgrade.index.heading_available'] = 'Mises à jour disponibles';
$lang['AdminSystemUpgrade.index.command_copied'] = 'Copié';
$lang['AdminSystemUpgrade.index.btn_copy_command'] = 'Copie';
$lang['AdminSystemUpgrade.index.launch_failed_instruction'] = 'Exécutez la commande suivante via SSH (en tant qu\'utilisateur de l\'installation Blesta) pour terminer la mise à niveau. Laissez cette page ouverte - la progression continuera à être mise à jour ici pendant l\'exécution de la commande.';
$lang['AdminSystemUpgrade.index.launch_failed_title'] = 'La mise à niveau en arrière-plan n\'a pas démarré';
$lang['AdminSystemUpgrade.index.environment_badge_warn'] = '%1$d avertissement';
$lang['AdminSystemUpgrade.index.environment_badge_fail'] = '%1$d a échoué';
$lang['AdminSystemUpgrade.index.environment_fail'] = 'Certains contrôles ont échoué. Veuillez résoudre les problèmes ci-dessous avant de procéder à la mise à niveau.';
$lang['AdminSystemUpgrade.index.environment_pass'] = 'Toutes les vérifications ont été effectuées avec succès. Votre système est prêt pour l\'auto-amélioration.';
$lang['AdminSystemUpgrade.index.heading_environment'] = 'État de l\'environnement';
$lang['AdminSystemUpgrade.index.up_to_date'] = 'Votre installation est à jour.';
$lang['AdminSystemUpgrade.index.btn_check'] = 'Vérifier les mises à jour';
$lang['AdminSystemUpgrade.index.never_checked'] = 'Jamais vérifié';
$lang['AdminSystemUpgrade.index.last_checked'] = 'Dernière vérification : %1$s';
$lang['AdminSystemUpgrade.index.current_version'] = 'Vous exécutez Blesta %1$s';
$lang['AdminSystemUpgrade.index.heading_current'] = 'Version actuelle';

