<?php
/**
 * Pterodactyl Package
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PterodactylPackage.!error.meta[location_id].format'] = 'L\'identifiant de l\'emplacement doit être numérique.';
$lang['PterodactylPackage.!error.meta[location_id].valid'] = 'L\'identifiant de l\'emplacement ne correspond à aucun identifiant de Pterodactyl.';
$lang['PterodactylPackage.!error.meta[dedicated_ip].format'] = 'L\'utilisation d\'une adresse IP dédiée doit être réglée sur 1 ou 0.';
$lang['PterodactylPackage.!error.meta[port_range].format'] = 'La plage de ports doit être au format 25565-25570, 25580-25590.';
$lang['PterodactylPackage.!error.meta[nest_id].format'] = 'L\'ID du nid doit être numérique.';
$lang['PterodactylPackage.!error.meta[nest_id].valid'] = 'Le nid ne correspond à aucun nid du Ptérodactyle.';
$lang['PterodactylPackage.!error.meta[egg_id].format'] = 'L\'ID de l\'œuf doit être numérique.';
$lang['PterodactylPackage.!error.meta[egg_id].valid'] = 'L\'œuf ne correspond à aucun œuf du Ptérodactyle.';
$lang['PterodactylPackage.!error.meta[pack_id].format'] = 'L\'ID du pack doit être numérique.';
$lang['PterodactylPackage.!error.meta[memory].format'] = 'La quantité de mémoire doit être numérique.';
$lang['PterodactylPackage.!error.meta[swap].format'] = 'Le montant du swap doit être numérique.';
$lang['PterodactylPackage.!error.meta[cpu].format'] = 'Le pourcentage de cpu doit être numérique.';
$lang['PterodactylPackage.!error.meta[disk].format'] = 'La quantité d\'espace disque doit être numérique.';
$lang['PterodactylPackage.!error.meta[io].format'] = 'Le poids de l\'OI doit être numérique.';
$lang['PterodactylPackage.!error.meta[image].length'] = 'Le chemin d\'accès à l\'image doit comporter au maximum 255 caractères.';
$lang['PterodactylPackage.!error.meta[databases].format'] = 'Le nombre de bases de données doit être numérique.';
$lang['PterodactylPackage.!error.meta[allocations].format'] = 'Le nombre d\'allocations doit être numérique.';
$lang['PterodactylPackage.!error.meta[backups].format'] = 'Le nombre de sauvegardes doit être numérique.';
$lang['PterodactylPackage.package_fields.location_id'] = 'Localisation';
$lang['PterodactylPackage.package_fields.tooltip.location_id'] = 'L\'emplacement où déployer automatiquement les serveurs.';
$lang['PterodactylPackage.package_fields.dedicated_ip'] = 'IP dédié (en option)';
$lang['PterodactylPackage.package_fields.tooltip.dedicated_ip'] = 'Attribuer des adresses IP dédiées aux serveurs créés.';
$lang['PterodactylPackage.package_fields.port_range'] = 'Gamme de ports';
$lang['PterodactylPackage.package_fields.tooltip.port_range'] = 'Plages de ports séparées par des virgules à attribuer au serveur (Exemple : 25565-25570,25580-25590).';
$lang['PterodactylPackage.package_fields.nest_id'] = 'Nid';
$lang['PterodactylPackage.package_fields.tooltip.nest_id'] = 'Le nid à utiliser par le serveur.';
$lang['PterodactylPackage.package_fields.egg_id'] = 'ID de l\'œuf';
$lang['PterodactylPackage.package_fields.tooltip.egg_id'] = 'ID de l\'œuf à utiliser par le serveur.';
$lang['PterodactylPackage.package_fields.pack_id'] = 'ID de l\'emballage (facultatif)';
$lang['PterodactylPackage.package_fields.tooltip.pack_id'] = 'ID du pack avec lequel le serveur doit être installé.';
$lang['PterodactylPackage.package_fields.memory'] = 'Mémoire (MB)';
$lang['PterodactylPackage.package_fields.tooltip.memory'] = 'Quantité de mémoire à attribuer aux serveurs créés.';
$lang['PterodactylPackage.package_fields.swap'] = 'Échange (MB)';
$lang['PterodactylPackage.package_fields.tooltip.swap'] = 'Quantité de swap à attribuer aux serveurs créés.';
$lang['PterodactylPackage.package_fields.cpu'] = 'Limite de l\'unité centrale (%)';
$lang['PterodactylPackage.package_fields.tooltip.cpu'] = 'Quantité de CPU à attribuer aux serveurs créés.';
$lang['PterodactylPackage.package_fields.disk'] = 'Espace disque (MB)';
$lang['PterodactylPackage.package_fields.tooltip.disk'] = 'Quantité d\'espace disque à attribuer aux serveurs créés.';
$lang['PterodactylPackage.package_fields.io'] = 'Bloc IO Poids';
$lang['PterodactylPackage.package_fields.tooltip.io'] = 'Bloc IO Numéro d\'ajustement (10-1000).';
$lang['PterodactylPackage.package_fields.startup'] = 'Démarrage (facultatif)';
$lang['PterodactylPackage.package_fields.tooltip.startup'] = 'Commande de démarrage personnalisée à attribuer aux serveurs créés (par exemple, java -Xms128M -Xmx 1024M -jar server.jar).';
$lang['PterodactylPackage.package_fields.image'] = 'Image (facultatif)';
$lang['PterodactylPackage.package_fields.tooltip.image'] = 'Image Docker personnalisée à affecter aux serveurs créés (par exemple, quay.io/pterodactyl/core:java-glibc).';
$lang['PterodactylPackage.package_fields.databases'] = 'Limite de la base de données (facultatif)';
$lang['PterodactylPackage.package_fields.tooltip.databases'] = 'Nombre total de bases de données qu\'un utilisateur est autorisé à créer. Laissez un blanc pour autoriser un nombre illimité de bases de données.';
$lang['PterodactylPackage.package_fields.allocations'] = 'Limite d\'allocation (facultatif)';
$lang['PterodactylPackage.package_fields.tooltip.allocations'] = 'Le nombre total d\'allocations qu\'un utilisateur est autorisé à créer des serveurs. Laisser vide pour autoriser un nombre illimité.';
$lang['PterodactylPackage.package_fields.backups'] = 'Limite de sauvegarde (en option)';
$lang['PterodactylPackage.package_fields.tooltip.backups'] = 'Nombre total de sauvegardes qu\'un utilisateur est autorisé à effectuer pour les serveurs créés. Laisser vide pour autoriser un nombre illimité de sauvegardes.';
$lang['PterodactylPackage.package_fields.optional'] = '%1$s (Facultatif)';
$lang['PterodactylPackage.package_fields.tooltip.display'] = 'Cochez cette case pour permettre aux clients de modifier cette valeur lors de l\'ajout ou de la modification d\'un service. Ne cochez pas cette case si vous prévoyez d\'utiliser une option configurable pour ce champ.';

