<?php
/**
 * System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SystemUpgrade.!error.backup_db_failed'] = 'La sauvegarde de la base de données a échoué. La mise à niveau ne peut se faire sans une sauvegarde fiable.';
$lang['SystemUpgrade.!error.backup_files_failed'] = 'Échec de la sauvegarde du fichier. La mise à niveau ne peut se faire sans une sauvegarde fiable.';
$lang['SystemUpgrade.!error.download_failed'] = 'Échec du téléchargement du fichier de version.';
$lang['SystemUpgrade.!error.environment_fail'] = 'Un ou plusieurs contrôles d\'environnement ont échoué. Veuillez résoudre les problèmes avant de procéder à la mise à niveau.';
$lang['SystemUpgrade.!error.extraction_failed'] = 'Échec de l\'extraction de l\'archive de la version.';
$lang['SystemUpgrade.!error.hash_mismatch'] = 'La vérification de l\'intégrité du fichier téléchargé a échoué. Le fichier est peut-être corrompu.';
$lang['SystemUpgrade.!error.launch_not_detected'] = 'Le processus de mise à niveau en arrière-plan n\'a pas démarré. Cela peut se produire dans les environnements d\'hébergement en jail (CloudLinux/CageFS, certaines configurations PHP-FPM) où le serveur web n\'est pas autorisé à détacher les processus enfants en cours d\'exécution depuis longtemps. La mise à jour peut être terminée en exécutant la commande ci-dessous via SSH.';
$lang['SystemUpgrade.!error.license_invalid'] = 'Votre abonnement à l\'assistance et aux mises à jour doit être actif pour les mises à niveau de versions majeures ou mineures.';
$lang['SystemUpgrade.!error.lock_stale'] = 'Un processus de mise à niveau précédent semble s\'être arrêté de manière inattendue. Vous pouvez effacer le verrou pour réessayer.';
$lang['SystemUpgrade.!error.php_version'] = 'La version cible nécessite PHP %1$s ou une version plus récente. Vous utilisez PHP %2$s.';
$lang['SystemUpgrade.!error.signature_invalid'] = 'La vérification de la signature de la version a échoué. Le fichier peut avoir été altéré.';
$lang['SystemUpgrade.!error.signature_missing'] = 'La version ne comporte pas de signature cryptographique. Impossible de vérifier l\'authenticité.';
$lang['SystemUpgrade.!error.upgrade_locked'] = 'Une mise à niveau est déjà en cours (lancée par le staff ID %1$s à l\'adresse %2$s).';
$lang['SystemUpgrade.!error.upgrader_crashed'] = 'Le processus de mise à niveau semble s\'être arrêté de manière inattendue. Vérifiez les chemins de sauvegarde ci-dessous pour la récupération.';
$lang['SystemUpgrade.!error.upgrader_failed'] = 'Échec de la préparation ou du lancement du processus de mise à niveau.';
$lang['SystemUpgrade.environment.config_fail'] = 'Configuration : blesta.php n\'est pas accessible en écriture.';
$lang['SystemUpgrade.environment.config_pass'] = 'Configuration : blesta.php est accessible en écriture.';
$lang['SystemUpgrade.environment.disk_pass'] = 'Espace disque : %1$s disponible.';
$lang['SystemUpgrade.environment.disk_warn'] = 'Espace disque : Seulement %1$s disponible, estimation de %2$s nécessaire.';
$lang['SystemUpgrade.environment.exec_fail'] = 'Accès au shell : la fonction exec() est désactivée ou non disponible.';
$lang['SystemUpgrade.environment.exec_pass'] = 'Accès au shell : la fonction exec() est disponible.';
$lang['SystemUpgrade.environment.mysqldump_fail'] = 'Sauvegarde de la base de données : la commande mysqldump n\'est pas disponible. Veuillez installer les outils mysql-client.';
$lang['SystemUpgrade.environment.mysqldump_pass'] = 'Sauvegarde de la base de données : la commande mysqldump est disponible.';
$lang['SystemUpgrade.environment.os_fail'] = 'L\'auto-amélioration n\'est possible que dans les environnements Linux.';
$lang['SystemUpgrade.environment.os_pass'] = 'Système d\'exploitation : Linux détecté.';
$lang['SystemUpgrade.environment.ownership_fail'] = 'Propriété des fichiers : les répertoires de la clé %1$s n\'appartiennent pas à l\'utilisateur du serveur web.';
$lang['SystemUpgrade.environment.ownership_pass'] = 'Propriété des fichiers : Tous les répertoires clés appartiennent à l\'utilisateur du serveur web.';
$lang['SystemUpgrade.environment.rsync_fail'] = 'Synchronisation de fichiers : la commande rsync n\'est pas disponible. Veuillez installer rsync.';
$lang['SystemUpgrade.environment.rsync_pass'] = 'Synchronisation de fichiers : la commande rsync est disponible.';
$lang['SystemUpgrade.environment.setsid_pass'] = 'Détachement du processus : la commande setsid est disponible.';
$lang['SystemUpgrade.environment.setsid_warn'] = 'Détachement de processus : la commande setsid n\'est pas disponible. La mise à jour peut nécessiter une commande manuelle via SSH pour se terminer sur les environnements d\'hébergement en jachère.';
$lang['SystemUpgrade.environment.tar_fail'] = 'Sauvegarde de fichier : la commande tar n\'est pas disponible. Veuillez installer tar.';
$lang['SystemUpgrade.environment.tar_pass'] = 'Sauvegarde de fichiers : la commande tar est disponible.';
$lang['SystemUpgrade.environment.unzip_fail'] = 'Extraction d\'archives : la commande unzip n\'est pas disponible. Veuillez installer unzip.';
$lang['SystemUpgrade.environment.unzip_pass'] = 'Extraction d\'archives : la commande unzip est disponible.';
$lang['SystemUpgrade.environment.writable_fail'] = 'Système de fichiers : Le répertoire d\'installation n\'est pas accessible en écriture par le serveur web.';
$lang['SystemUpgrade.environment.writable_pass'] = 'Système de fichiers : Le répertoire d\'installation est accessible en écriture.';
$lang['SystemUpgrade.maintenance_reason'] = 'Le système est en cours de mise à jour. Veuillez vérifier sous peu.';

