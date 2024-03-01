<?php
/**
 * Form Rules
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['FormRules.general.name.format'] = 'Les noms d\'extension ne peuvent contenir que des caractères alphanumériques, des traits de soulignement et des espaces.';
$lang['FormRules.modulebasic.module_row.empty'] = 'Veuillez saisir un nom de ligne de module.';
$lang['FormRules.modulebasic.module_row_plural.empty'] = 'Veuillez ajouter un nom de ligne de module pluriel.';
$lang['FormRules.modulebasic.module_group.empty'] = 'Veuillez saisir une étiquette de groupe de modules.';
$lang['FormRules.modulebasic.authors[][name].empty'] = 'Veuillez indiquer un nom pour chaque auteur.';
$lang['FormRules.modulefields.module_rows[][name].format'] = 'Veuillez saisir un nom pour chaque champ de la ligne de module dans le format snake_case_name.';
$lang['FormRules.modulefields.module_rows[][label].empty'] = 'Veuillez saisir une étiquette pour chaque champ de la ligne de module.';
$lang['FormRules.modulefields.module_rows[][type].valid'] = 'Une ou plusieurs lignes de module ont un type non valide.';
$lang['FormRules.modulefields.module_rows[][name_key].valid'] = 'Indiquer si un champ de ligne du module doit être défini comme clé de nom doit avoir la valeur true (vrai) ou false (faux).';
$lang['FormRules.modulefields.service_fields[][name].format'] = 'Veuillez saisir un nom pour chaque champ de service dans le format snake_case_name.';
$lang['FormRules.modulefields.service_fields[][label].empty'] = 'Veuillez saisir une étiquette pour chaque champ de service.';
$lang['FormRules.modulefields.service_fields[][type].valid'] = 'Un ou plusieurs champs de service ont un type invalide.';
$lang['FormRules.modulefields.service_fields[][name_key].valid'] = 'L\'option "définir un champ de service comme clé de nom" doit être réglée sur true ou false.';
$lang['FormRules.modulefields.package_fields[][name].format'] = 'Veuillez saisir un nom pour chaque champ du paquet dans le format snake_case_name.';
$lang['FormRules.modulefields.package_fields[][label].empty'] = 'Veuillez indiquer une étiquette pour chaque champ de l\'emballage.';
$lang['FormRules.modulefields.package_fields[][type].valid'] = 'Un ou plusieurs champs du paquet ont un type invalide.';
$lang['FormRules.modulefields.package_fields[][name_key].valid'] = 'L\'option "définir un champ du paquet comme clé de nom" doit être réglée sur true ou false.';
$lang['FormRules.modulefeatures.service_tabs[][method_name].format'] = 'Veuillez saisir un nom de méthode pour chaque onglet de service dans le format camelCaseName.';
$lang['FormRules.modulefeatures.service_tabs[][label].empty'] = 'Veuillez saisir une étiquette pour chaque onglet de service.';
$lang['FormRules.modulefeatures.service_tabs[][level].valid'] = 'Un ou plusieurs onglets de service ont un niveau invalide.';
$lang['FormRules.modulefeatures.cron_tasks[][name].format'] = 'Veuillez saisir un nom de méthode pour chaque tâche cron au format snake_case_name.';
$lang['FormRules.modulefeatures.cron_tasks[][label].empty'] = 'Veuillez saisir une étiquette pour chaque tâche cron.';
$lang['FormRules.modulefeatures.cron_tasks[][type].valid'] = 'Une ou plusieurs tâches cron ont un type invalide.';
$lang['FormRules.modulefeatures.cron_tasks[][time].format'] = 'Veuillez saisir une heure au format 00:00 ou un intervalle numérique.';
$lang['FormRules.pluginbasic.authors[][name].empty'] = 'Veuillez indiquer un nom pour chaque auteur.';
$lang['FormRules.plugindatabase.tables[][name].format'] = 'Veuillez saisir un nom de méthode pour chaque tableau dans le format snake_case_name.';
$lang['FormRules.plugindatabase.tables[][columns][][name].format'] = 'Veuillez saisir un nom de méthode pour chaque colonne dans le format snake_case_name.';
$lang['FormRules.plugindatabase.tables[][columns][][type].valid'] = 'Une ou plusieurs colonnes ont un type invalide.';
$lang['FormRules.plugindatabase.tables[][columns][][length].empty'] = 'La longueur doit être au format "a", "b", "c" pour les colonnes de type "enum", vide pour les colonnes de type "text" et "datetime", et numérique pour toutes les autres.';
$lang['FormRules.plugindatabase.tables[][columns][][nullable].valid'] = 'Nullable doit être défini comme true ou false pour chaque colonne.';
$lang['FormRules.plugindatabase.tables[][columns][][primary].valid'] = 'La valeur primaire doit être fixée à true ou false pour chaque colonne.';
$lang['FormRules.pluginintegrations.actions[][location].valid'] = 'Veuillez saisir un lieu d\'action valide.';
$lang['FormRules.pluginintegrations.actions[][controller].format'] = 'Veuillez saisir un contrôleur pour chaque action dans le format "snake_case_name".';
$lang['FormRules.pluginintegrations.actions[][action].format'] = 'Veuillez saisir une action pour chaque action en lettres minuscules.';
$lang['FormRules.pluginintegrations.actions[][name].empty'] = 'Veuillez saisir un nom pour chaque action.';
$lang['FormRules.pluginintegrations.events[][event].empty'] = 'Veuillez saisir un nom d\'événement pour chaque événement.';
$lang['FormRules.pluginintegrations.events[][callback].format'] = 'Veuillez indiquer une méthode de rappel pour chaque événement dans le format camelCaseName.';
$lang['FormRules.pluginintegrations.cards[][level].valid'] = 'Une ou plusieurs cartes ont un niveau invalide.';
$lang['FormRules.pluginintegrations.cards[][callback].format'] = 'Veuillez saisir une méthode de rappel pour chaque carte au format camelCaseName.';
$lang['FormRules.pluginintegrations.cards[][label].empty'] = 'Veuillez indiquer une étiquette pour chaque carte.';
$lang['FormRules.merchantbasic.authors[][name].empty'] = 'Veuillez indiquer un nom pour chaque auteur.';
$lang['FormRules.merchantbasic.currencies.format'] = 'Veuillez saisir les devises dans un format à trois caractères séparés par des virgules (par exemple USD,EUR,JPY).';
$lang['FormRules.merchantfields.fields[][name].format'] = 'Veuillez saisir un nom pour chaque champ dans le format snake_case_name.';
$lang['FormRules.merchantfields.fields[][label].empty'] = 'Veuillez indiquer une étiquette pour chaque champ.';
$lang['FormRules.merchantfields.fields[][type].valid'] = 'Un ou plusieurs champs ont un type invalide.';
$lang['FormRules.nonmerchantbasic.authors[][name].empty'] = 'Veuillez indiquer un nom pour chaque auteur.';
$lang['FormRules.nonmerchantbasic.currencies.format'] = 'Veuillez saisir les devises dans un format à trois caractères séparés par des virgules (par exemple USD,EUR,JPY).';
$lang['FormRules.nonmerchantfields.fields[][name].format'] = 'Veuillez saisir un nom pour chaque champ dans le format snake_case_name.';
$lang['FormRules.nonmerchantfields.fields[][label].empty'] = 'Veuillez indiquer une étiquette pour chaque champ.';
$lang['FormRules.nonmerchantfields.fields[][type].valid'] = 'Un ou plusieurs champs ont un type invalide.';

