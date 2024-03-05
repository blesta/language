<?php
/**
 * Pterodactyl Package
 *
 * @package blesta
 * @subpackage blesta.language.nl_nl
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PterodactylPackage.package_fields.tooltip.display'] = 'Vink aan om clients toe te staan deze waarde te wijzigen tijdens het toevoegen/bewerken van services. Laat uitgevinkt als je van plan bent een configureerbare optie voor dit veld te gebruiken.';
$lang['PterodactylPackage.package_fields.optional'] = '%1$s (optioneel)';
$lang['PterodactylPackage.package_fields.tooltip.backups'] = 'Het totale aantal back-ups dat een gebruiker mag maken voor de aangemaakte servers. Laat leeg om onbeperkt toe te staan.';
$lang['PterodactylPackage.package_fields.backups'] = 'Back-uplimiet (optioneel)';
$lang['PterodactylPackage.package_fields.tooltip.allocations'] = 'Het totale aantal toewijzingen dat een gebruiker mag maken aan aangemaakte servers. Laat leeg om onbeperkt toe te staan.';
$lang['PterodactylPackage.package_fields.allocations'] = 'Toewijzingslimiet (optioneel)';
$lang['PterodactylPackage.package_fields.tooltip.databases'] = 'Het totale aantal databases dat een gebruiker mag aanmaken. Laat leeg om onbeperkt toe te staan.';
$lang['PterodactylPackage.package_fields.databases'] = 'Databaselimiet (optioneel)';
$lang['PterodactylPackage.package_fields.tooltip.image'] = 'Aangepast Docker-image om toe te wijzen aan de aangemaakte servers (bijv. quay.io/pterodactyl/core:java-glibc).';
$lang['PterodactylPackage.package_fields.image'] = 'Afbeelding (optioneel)';
$lang['PterodactylPackage.package_fields.tooltip.startup'] = 'Aangepaste opstartopdracht om toe te wijzen aan de aangemaakte servers (bijvoorbeeld java -Xms128M -Xmx 1024M -jar server.jar).';
$lang['PterodactylPackage.package_fields.startup'] = 'Opstarten (optioneel)';
$lang['PterodactylPackage.package_fields.tooltip.io'] = 'Blok IO Aanpassingsnummer (10-1000).';
$lang['PterodactylPackage.package_fields.io'] = 'Blok IO Gewicht';
$lang['PterodactylPackage.package_fields.tooltip.disk'] = 'Hoeveelheid schijfruimte om toe te wijzen aan de aangemaakte servers.';
$lang['PterodactylPackage.package_fields.disk'] = 'Schijfruimte (MB)';
$lang['PterodactylPackage.package_fields.tooltip.cpu'] = 'Hoeveelheid CPU om toe te wijzen aan de aangemaakte servers.';
$lang['PterodactylPackage.package_fields.cpu'] = 'CPU-limiet (%)';
$lang['PterodactylPackage.package_fields.tooltip.swap'] = 'Hoeveelheid Swap om toe te wijzen aan de aangemaakte servers.';
$lang['PterodactylPackage.package_fields.swap'] = 'Wisselen (MB)';
$lang['PterodactylPackage.package_fields.tooltip.memory'] = 'Hoeveelheid geheugen om toe te wijzen aan de aangemaakte servers.';
$lang['PterodactylPackage.package_fields.memory'] = 'Geheugen (MB)';
$lang['PterodactylPackage.package_fields.tooltip.pack_id'] = 'ID van het pakket waarmee de server wordt geïnstalleerd.';
$lang['PterodactylPackage.package_fields.pack_id'] = 'Verpakkings-ID (optioneel)';
$lang['PterodactylPackage.package_fields.tooltip.egg_id'] = 'ID van het Egg dat de server moet gebruiken.';
$lang['PterodactylPackage.package_fields.egg_id'] = 'Ei ID';
$lang['PterodactylPackage.package_fields.tooltip.nest_id'] = 'Het nest dat de server moet gebruiken.';
$lang['PterodactylPackage.package_fields.nest_id'] = 'Nest';
$lang['PterodactylPackage.package_fields.tooltip.port_range'] = 'Poortbereiken gescheiden door een komma om toe te wijzen aan de server (Voorbeeld: 25565-25570,25580-25590).';
$lang['PterodactylPackage.package_fields.port_range'] = 'Havenbereik';
$lang['PterodactylPackage.package_fields.tooltip.dedicated_ip'] = 'Wijs een toegewezen ip toe aan de aangemaakte servers.';
$lang['PterodactylPackage.package_fields.dedicated_ip'] = 'Toegewezen IP (optioneel)';
$lang['PterodactylPackage.package_fields.tooltip.location_id'] = 'De locatie waar servers automatisch worden ingezet.';
$lang['PterodactylPackage.package_fields.location_id'] = 'Locatie';
$lang['PterodactylPackage.!error.meta[backups].format'] = 'Het aantal back-ups moet numeriek zijn.';
$lang['PterodactylPackage.!error.meta[allocations].format'] = 'Het aantal toewijzingen moet numeriek zijn.';
$lang['PterodactylPackage.!error.meta[databases].format'] = 'Het aantal databases moet numeriek zijn.';
$lang['PterodactylPackage.!error.meta[image].length'] = 'Het afbeeldingspad mag maximaal 255 tekens bevatten.';
$lang['PterodactylPackage.!error.meta[io].format'] = 'Het IO-gewicht moet numeriek zijn.';
$lang['PterodactylPackage.!error.meta[disk].format'] = 'De hoeveelheid schijfruimte moet numeriek zijn.';
$lang['PterodactylPackage.!error.meta[cpu].format'] = 'Het cpu-percentage moet numeriek zijn.';
$lang['PterodactylPackage.!error.meta[swap].format'] = 'Het ruilbedrag moet numeriek zijn.';
$lang['PterodactylPackage.!error.meta[memory].format'] = 'De hoeveelheid geheugen moet numeriek zijn.';
$lang['PterodactylPackage.!error.meta[pack_id].format'] = 'De pakket-ID moet numeriek zijn.';
$lang['PterodactylPackage.!error.meta[egg_id].valid'] = 'Het ei komt niet overeen met een ei in Pterodactyl.';
$lang['PterodactylPackage.!error.meta[egg_id].format'] = 'De ei-ID moet numeriek zijn.';
$lang['PterodactylPackage.!error.meta[nest_id].valid'] = 'Het nest komt niet overeen met dat in Pterodactyl.';
$lang['PterodactylPackage.!error.meta[nest_id].format'] = 'De nest-ID moet numeriek zijn.';
$lang['PterodactylPackage.!error.meta[port_range].format'] = 'Het poortbereik moet het formaat 25565-25570,25580-25590 hebben.';
$lang['PterodactylPackage.!error.meta[dedicated_ip].format'] = 'Of een toegewezen IP moet worden gebruikt, moet worden ingesteld op 1 of 0.';
$lang['PterodactylPackage.!error.meta[location_id].valid'] = 'De locatie-ID komt niet overeen met die in Pterodactyl.';
$lang['PterodactylPackage.!error.meta[location_id].format'] = 'De locatie-ID moet numeriek zijn.';

