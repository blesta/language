<?php
/**
 * Admin System Backup
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemBackup.!success.backup_updated'] = 'Les paramètres de sauvegarde ont été mis à jour avec succès !';
$lang['AdminSystemBackup.!success.sftp_test'] = 'La connexion SFTP a été établie avec succès !';
$lang['AdminSystemBackup.!success.amazons3_test'] = 'La connexion AmazonS3 a été établie avec succès !';
$lang['AdminSystemBackup.!success.backup_uploaded'] = 'La sauvegarde a été envoyée avec succès aux services distants configurés !';
$lang['AdminSystemBackup.!error.sftp_test'] = 'La connexion SFTP a échoué ! Veuillez vérifier vos paramètres et réessayer.';
$lang['AdminSystemBackup.!error.amazons3_test'] = 'La connexion AmazonS3 a échoué ! Veuillez vérifier vos paramètres et réessayer. Notez que les détails de la connexion sont sensibles à la casse.';
$lang['AdminSystemBackup.!error.backup_frequency'] = 'Fréquence de sauvegarde non valide.';
$lang['AdminSystemBackup.!tooltip.ftp_host'] = 'Le nom de domaine complet du serveur de sauvegarde (par exemple "backup.domain.com").';
$lang['AdminSystemBackup.!tooltip.ftp_port'] = 'Le numéro de port, généralement 22. Il s\'agit du même numéro de port que celui utilisé pour SSH.';
$lang['AdminSystemBackup.!tooltip.ftp_username'] = 'Le nom d\'utilisateur du compte FTP.';
$lang['AdminSystemBackup.!tooltip.ftp_password'] = 'Le mot de passe du compte FTP.';
$lang['AdminSystemBackup.!tooltip.ftp_path'] = 'Le chemin de destination où les sauvegardes doivent être stockées sur le serveur distant (par exemple "/backup/").';
$lang['AdminSystemBackup.!tooltip.ftp_rate'] = 'Intervalle de fréquence pour effectuer cette sauvegarde.';
$lang['AdminSystemBackup.!tooltip.amazons3_region'] = 'La région Amazon S3 dans laquelle les sauvegardes doivent être stockées.';
$lang['AdminSystemBackup.!tooltip.amazons3_access_key'] = 'La clé d\'accès au compte Amazon S3.';
$lang['AdminSystemBackup.!tooltip.amazons3_secret_key'] = 'La clé secrète du compte Amazon S3.';
$lang['AdminSystemBackup.!tooltip.amazons3_bucket'] = 'Le nom, sensible à la casse, du panier Amazon S3 sous lequel les sauvegardes doivent être stockées.';
$lang['AdminSystemBackup.!tooltip.amazons3_rate'] = 'Intervalle de fréquence pour effectuer cette sauvegarde.';
$lang['AdminSystemBackup.ftp.page_title'] = 'Réglages > Système > Sauvegarde > Secure FTP';
$lang['AdminSystemBackup.ftp.boxtitle_backup'] = 'FTP sécurisé';
$lang['AdminSystemBackup.ftp.field.test'] = 'Tester ces paramètres';
$lang['AdminSystemBackup.ftp.field.ftp_host'] = 'Nom d\'hôte';
$lang['AdminSystemBackup.ftp.field.ftp_port'] = 'Port';
$lang['AdminSystemBackup.ftp.field.ftp_username'] = 'Nom d\'utilisateur';
$lang['AdminSystemBackup.ftp.field.ftp_password'] = 'Mot de passe';
$lang['AdminSystemBackup.ftp.field.ftp_path'] = 'Trajectoire';
$lang['AdminSystemBackup.ftp.field.ftp_rate'] = 'Sauvegarde de chaque';
$lang['AdminSystemBackup.ftp.field.backupsubmit'] = 'Mise à jour des paramètres';
$lang['AdminSystemBackup.amazon.page_title'] = 'Réglages > Système > Sauvegarde > Amazon S3';
$lang['AdminSystemBackup.amazon.boxtitle_backup'] = 'Amazon S3';
$lang['AdminSystemBackup.amazon.field.test'] = 'Tester ces paramètres';
$lang['AdminSystemBackup.amazon.field.amazons3_region'] = 'Région';
$lang['AdminSystemBackup.amazon.field.amazons3_accesskey'] = 'Clé d\'accès';
$lang['AdminSystemBackup.amazon.field.amazons3_secretkey'] = 'Clé secrète';
$lang['AdminSystemBackup.amazon.field.amazons3_bucket'] = 'Seau';
$lang['AdminSystemBackup.amazon.field.amazons3_rate'] = 'Sauvegarde de chaque';
$lang['AdminSystemBackup.amazon.field.backupsubmit'] = 'Mise à jour des paramètres';
$lang['AdminSystemBackup.index.page_title'] = 'Réglages > Système > Sauvegarde > Sur demande';
$lang['AdminSystemBackup.index.boxtitle_index'] = 'Sur demande';
$lang['AdminSystemBackup.index.field_uploadbackup'] = 'Forcer la sauvegarde hors site';
$lang['AdminSystemBackup.index.field_downloadbackup'] = 'Télécharger Backup';
$lang['AdminSystemBackup.index.text_note'] = 'Ici, vous pouvez télécharger une sauvegarde de votre base de données Blesta sur votre ordinateur ou télécharger automatiquement une sauvegarde sur votre serveur SFTP et/ou Amazon S3 configuré.';

