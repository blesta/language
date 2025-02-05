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

$lang['AdminMain.index.health_excellent'] = 'Le système est en bon état et semble fonctionner normalement.';
$lang['AdminMain.index.health_good'] = 'Dans l\'ensemble, le système est en bonne santé, mais certains éléments peuvent nécessiter votre attention.';
$lang['AdminMain.index.health_fair'] = 'Certains problèmes affectent la capacité du système à fonctionner normalement.';
$lang['AdminMain.index.health_poor'] = 'Il existe des problèmes sérieux qui affectent la capacité du système à fonctionner normalement. Ils doivent être résolus dans les plus brefs délais.';
$lang['AdminMain.index.boxtitle_feed'] = 'État du système';
$lang['AdminMain.index.cron_serious'] = 'Cron n\'a jamais fonctionné.';
$lang['AdminMain.index.cron_minor'] = 'Cron n\'a pas été exécuté au cours des dernières 24 heures.';
$lang['AdminMain.index.cron_configure'] = 'Configurer ?';
$lang['AdminMain.index.cron_task_stalled_minor'] = 'Une ou plusieurs tâches cron s\'exécutent depuis plus de %1$s minutes.';
$lang['AdminMain.index.cron_task_stalled_automation'] = 'Voir les tâches automatisées';
$lang['AdminMain.index.trial_minor'] = 'Votre licence d\'essai expire le %1$s.';
$lang['AdminMain.index.trial_buy'] = 'Acheter maintenant ?';
$lang['AdminMain.index.invoices_minor'] = 'Les factures n\'ont pas été créées automatiquement par cron au cours des dernières 24 heures.';
$lang['AdminMain.index.invoices_configure'] = 'Configurer ?';
$lang['AdminMain.index.backup_minor'] = 'Aucune sauvegarde n\'a été effectuée au cours des 7 derniers jours.';
$lang['AdminMain.index.docroot_minor'] = 'Le chemin d\'accès à la racine du document détecté ne correspond pas au paramètre Root Web Directory.';
$lang['AdminMain.index.docroot_setting'] = 'Mise à jour ?';
$lang['AdminMain.index.system_dir_writable_minor'] = 'Un répertoire système n\'est pas accessible en écriture.';
$lang['AdminMain.index.system_dir_writable_setting'] = 'Mise à jour ?';
$lang['AdminMain.index.log_files_owner_minor'] = 'Certains fichiers journaux n\'appartiennent pas au même utilisateur que le serveur web.  Cela est généralement dû au fait que le cron s\'exécute sous un utilisateur différent de celui du serveur web.';
$lang['AdminMain.index.error_reporting'] = 'errorReporting ou System.debug sont activés dans /config/blesta.php. À moins que vous ne soyez en train de résoudre activement un problème, ils doivent être désactivés. errorReporting doit être égal à 0, System.debug doit être égal à false.';
$lang['AdminMain.index.updates_forever'] = 'Votre soutien et vos mises à jour sont éternels.';
$lang['AdminMain.index.updates_minor'] = 'Votre soutien et vos mises à jour sont valables jusqu\'à %1$s.';
$lang['AdminMain.index.updates_serious'] = 'Votre assistance et vos mises à jour ont expiré le %1$s.';
$lang['AdminMain.index.updates_buy'] = 'Ajouter une assistance et des mises à jour ?';
$lang['AdminMain.index.db_version_serious'] = 'La version de la base de données ne correspond pas à la version du système.';
$lang['AdminMain.index.db_version_upgrade'] = 'Mise à niveau ?';
$lang['AdminMain.index.php_version_serious'] = 'La version de PHP ne correspond pas à la configuration minimale requise.';
$lang['AdminMain.index.php_version_requirements'] = 'Voir les exigences minimales';
$lang['AdminMain.index.sql_mysql_version_serious'] = 'La version de MySQL ne correspond pas à la configuration minimale requise.';
$lang['AdminMain.index.sql_mysql_version_requirements'] = 'Voir les exigences minimales';
$lang['AdminMain.index.sql_mariadb_version_serious'] = 'La version de MariaDB ne correspond pas à la configuration minimale requise.';
$lang['AdminMain.index.sql_mariadb_version_requirements'] = 'Voir les exigences minimales';
$lang['AdminMain.index.upload_dir_configure'] = 'Configurer ?';
$lang['AdminMain.index.upload_dir'] = 'Le chemin du répertoire de téléchargement dans vos paramètres se trouve dans le répertoire web racine.  Il doit être placé au-dessus du répertoire web racine afin de garantir qu\'il ne sera jamais accessible au public.';

