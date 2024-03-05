<?php
/**
 * Pterodactyl Package
 *
 * @package blesta
 * @subpackage blesta.language.sv_se
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PterodactylPackage.package_fields.tooltip.display'] = 'Markera för att tillåta kunder att ändra detta värde under tillägg/redigering av tjänst. Lämna omarkerat om du planerar att använda ett konfigurerbart alternativ för detta fält.';
$lang['PterodactylPackage.package_fields.optional'] = '%1$s (Valfritt)';
$lang['PterodactylPackage.package_fields.tooltip.backups'] = 'Det totala antalet säkerhetskopior som en användare tillåts göra för de skapade servrarna. Lämna tomt för att tillåta obegränsat.';
$lang['PterodactylPackage.package_fields.backups'] = 'Säkerhetskopieringsgräns (tillval)';
$lang['PterodactylPackage.package_fields.tooltip.allocations'] = 'Det totala antalet tilldelningar som en användare tillåts för skapade servrar. Lämna tomt för att tillåta obegränsat.';
$lang['PterodactylPackage.package_fields.allocations'] = 'Tilldelningsgräns (valfritt)';
$lang['PterodactylPackage.package_fields.tooltip.databases'] = 'Det totala antalet databaser som en användare får skapa servrar för. Lämna tomt för att tillåta obegränsat.';
$lang['PterodactylPackage.package_fields.databases'] = 'Databasgräns (valfritt)';
$lang['PterodactylPackage.package_fields.tooltip.image'] = 'Anpassad Docker-image som ska tilldelas de skapade servrarna (t.ex. quay.io/pterodactyl/core:java-glibc).';
$lang['PterodactylPackage.package_fields.image'] = 'Bild (valfritt)';
$lang['PterodactylPackage.package_fields.tooltip.startup'] = 'Anpassat startkommando som ska tilldelas de skapade servrarna (t.ex. java -Xms128M -Xmx 1024M -jar server.jar).';
$lang['PterodactylPackage.package_fields.startup'] = 'Uppstart (valfritt)';
$lang['PterodactylPackage.package_fields.tooltip.io'] = 'Block IO Justeringsnummer (10-1000).';
$lang['PterodactylPackage.package_fields.io'] = 'Block IO Vikt';
$lang['PterodactylPackage.package_fields.tooltip.disk'] = 'Mängd diskutrymme som ska tilldelas de skapade servrarna.';
$lang['PterodactylPackage.package_fields.disk'] = 'Diskutrymme (MB)';
$lang['PterodactylPackage.package_fields.tooltip.cpu'] = 'Mängd CPU som ska tilldelas de skapade servrarna.';
$lang['PterodactylPackage.package_fields.cpu'] = 'CPU-gräns (%)';
$lang['PterodactylPackage.package_fields.tooltip.swap'] = 'Mängd Swap som ska tilldelas de skapade servrarna.';
$lang['PterodactylPackage.package_fields.swap'] = 'Swap (MB)';
$lang['PterodactylPackage.package_fields.tooltip.memory'] = 'Mängd minne som ska tilldelas de skapade servrarna.';
$lang['PterodactylPackage.package_fields.memory'] = 'Minne (MB)';
$lang['PterodactylPackage.package_fields.tooltip.pack_id'] = 'ID för det paket som servern ska installeras med.';
$lang['PterodactylPackage.package_fields.pack_id'] = 'Förpacknings-ID (valfritt)';
$lang['PterodactylPackage.package_fields.tooltip.egg_id'] = 'ID för det Egg som servern ska använda.';
$lang['PterodactylPackage.package_fields.egg_id'] = 'Ägg-ID';
$lang['PterodactylPackage.package_fields.tooltip.nest_id'] = 'Nest som servern ska använda.';
$lang['PterodactylPackage.package_fields.nest_id'] = 'Nest';
$lang['PterodactylPackage.package_fields.tooltip.port_range'] = 'Portintervall åtskilda med kommatecken som ska tilldelas servern (Exempel: 25565-25570,25580-25590).';
$lang['PterodactylPackage.package_fields.port_range'] = 'Portintervall';
$lang['PterodactylPackage.package_fields.tooltip.dedicated_ip'] = 'Tilldela dedikerad ip till de skapade servrarna.';
$lang['PterodactylPackage.package_fields.dedicated_ip'] = 'Dedikerad IP (tillval)';
$lang['PterodactylPackage.package_fields.tooltip.location_id'] = 'Den plats som servrar automatiskt ska distribueras till.';
$lang['PterodactylPackage.package_fields.location_id'] = 'Plats';
$lang['PterodactylPackage.!error.meta[backups].format'] = 'Antalet säkerhetskopior måste vara numeriskt.';
$lang['PterodactylPackage.!error.meta[allocations].format'] = 'Antalet tilldelningar måste vara numeriskt.';
$lang['PterodactylPackage.!error.meta[databases].format'] = 'Antalet databaser måste vara numeriskt.';
$lang['PterodactylPackage.!error.meta[image].length'] = 'Bildsökvägen får vara högst 255 tecken.';
$lang['PterodactylPackage.!error.meta[io].format'] = 'IO-vikten måste vara numerisk.';
$lang['PterodactylPackage.!error.meta[disk].format'] = 'Mängden diskutrymme måste vara numerisk.';
$lang['PterodactylPackage.!error.meta[cpu].format'] = 'Procentsatsen för cpu måste vara numerisk.';
$lang['PterodactylPackage.!error.meta[swap].format'] = 'Swapbeloppet måste vara numeriskt.';
$lang['PterodactylPackage.!error.meta[memory].format'] = 'Minnesbeloppet måste vara numeriskt.';
$lang['PterodactylPackage.!error.meta[pack_id].format'] = 'Förpackningens ID måste vara numeriskt.';
$lang['PterodactylPackage.!error.meta[egg_id].valid'] = 'Ägget matchar inte något i Pterodactyl.';
$lang['PterodactylPackage.!error.meta[egg_id].format'] = 'Ägg-ID måste vara numeriskt.';
$lang['PterodactylPackage.!error.meta[nest_id].valid'] = 'Boet matchar inte något i Pterodactyl.';
$lang['PterodactylPackage.!error.meta[nest_id].format'] = 'Nest-ID måste vara numeriskt.';
$lang['PterodactylPackage.!error.meta[port_range].format'] = 'Portintervallet ska vara i formatet 25565-25570,25580-25590.';
$lang['PterodactylPackage.!error.meta[dedicated_ip].format'] = 'Om en dedikerad IP ska användas måste ställas in på 1 eller 0.';
$lang['PterodactylPackage.!error.meta[location_id].valid'] = 'Plats-ID stämmer inte överens med något i Pterodactyl.';
$lang['PterodactylPackage.!error.meta[location_id].format'] = 'Plats-ID måste vara numeriskt.';

