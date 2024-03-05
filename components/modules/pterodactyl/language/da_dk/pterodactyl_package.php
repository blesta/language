<?php
/**
 * Pterodactyl Package
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PterodactylPackage.!error.meta[location_id].format'] = 'Lokations-ID\'et skal være numerisk.';
$lang['PterodactylPackage.!error.meta[location_id].valid'] = 'Lokations-id\'et stemmer ikke overens med noget i Pterodactyl.';
$lang['PterodactylPackage.!error.meta[dedicated_ip].format'] = 'Om der skal bruges en dedikeret IP, skal indstilles til 1 eller 0.';
$lang['PterodactylPackage.!error.meta[port_range].format'] = 'Portområdet skal være i formatet 25565-25570,25580-25590.';
$lang['PterodactylPackage.!error.meta[nest_id].format'] = 'Nest-ID\'et skal være numerisk.';
$lang['PterodactylPackage.!error.meta[nest_id].valid'] = 'Reden svarer ikke til nogen i Pterodactyl.';
$lang['PterodactylPackage.!error.meta[egg_id].format'] = 'Æggets ID skal være numerisk.';
$lang['PterodactylPackage.!error.meta[egg_id].valid'] = 'Ægget matcher ikke noget i Pterodactyl.';
$lang['PterodactylPackage.!error.meta[pack_id].format'] = 'Pakkens ID skal være numerisk.';
$lang['PterodactylPackage.!error.meta[memory].format'] = 'Hukommelsesmængden skal være numerisk.';
$lang['PterodactylPackage.!error.meta[swap].format'] = 'Byttebeløbet skal være numerisk.';
$lang['PterodactylPackage.!error.meta[cpu].format'] = 'CPU-procenten skal være numerisk.';
$lang['PterodactylPackage.!error.meta[disk].format'] = 'Mængden af diskplads skal være numerisk.';
$lang['PterodactylPackage.!error.meta[io].format'] = 'IO-vægten skal være numerisk.';
$lang['PterodactylPackage.!error.meta[image].length'] = 'Billedstien må højst være på 255 tegn.';
$lang['PterodactylPackage.!error.meta[databases].format'] = 'Antallet af databaser skal være numerisk.';
$lang['PterodactylPackage.!error.meta[allocations].format'] = 'Antallet af tildelinger skal være numerisk.';
$lang['PterodactylPackage.!error.meta[backups].format'] = 'Antallet af sikkerhedskopier skal være numerisk.';
$lang['PterodactylPackage.package_fields.location_id'] = 'Placering';
$lang['PterodactylPackage.package_fields.tooltip.location_id'] = 'Den placering, som serverne automatisk skal deployes til.';
$lang['PterodactylPackage.package_fields.dedicated_ip'] = 'Dedikeret IP (valgfrit)';
$lang['PterodactylPackage.package_fields.tooltip.dedicated_ip'] = 'Tildel dedikeret ip til de oprettede servere.';
$lang['PterodactylPackage.package_fields.port_range'] = 'Portområde';
$lang['PterodactylPackage.package_fields.tooltip.port_range'] = 'Portintervaller adskilt af komma, som skal tildeles serveren (Eksempel: 25565-25570,25580-25590).';
$lang['PterodactylPackage.package_fields.nest_id'] = 'Rede';
$lang['PterodactylPackage.package_fields.tooltip.nest_id'] = 'Den Nest, som serveren skal bruge.';
$lang['PterodactylPackage.package_fields.egg_id'] = 'Æg-ID';
$lang['PterodactylPackage.package_fields.tooltip.egg_id'] = 'ID for det æg, som serveren skal bruge.';
$lang['PterodactylPackage.package_fields.pack_id'] = 'Pakke-ID (valgfrit)';
$lang['PterodactylPackage.package_fields.tooltip.pack_id'] = 'ID for den pakke, serveren skal installeres med.';
$lang['PterodactylPackage.package_fields.memory'] = 'Hukommelse (MB)';
$lang['PterodactylPackage.package_fields.tooltip.memory'] = 'Mængden af hukommelse, der skal tildeles de oprettede servere.';
$lang['PterodactylPackage.package_fields.swap'] = 'Swap (MB)';
$lang['PterodactylPackage.package_fields.tooltip.swap'] = 'Mængden af Swap, der skal tildeles de oprettede servere.';
$lang['PterodactylPackage.package_fields.cpu'] = 'CPU-grænse (%)';
$lang['PterodactylPackage.package_fields.tooltip.cpu'] = 'Mængden af CPU, der skal tildeles de oprettede servere.';
$lang['PterodactylPackage.package_fields.disk'] = 'Diskplads (MB)';
$lang['PterodactylPackage.package_fields.tooltip.disk'] = 'Mængde af diskplads, der skal tildeles de oprettede servere.';
$lang['PterodactylPackage.package_fields.io'] = 'Blok IO Vægt';
$lang['PterodactylPackage.package_fields.tooltip.io'] = 'Blok IO Justeringsnummer (10-1000).';
$lang['PterodactylPackage.package_fields.startup'] = 'Opstart (valgfri)';
$lang['PterodactylPackage.package_fields.tooltip.startup'] = 'Brugerdefineret opstartskommando, der skal tildeles de oprettede servere (f.eks. java -Xms128M -Xmx 1024M -jar server.jar).';
$lang['PterodactylPackage.package_fields.image'] = 'Billede (valgfrit)';
$lang['PterodactylPackage.package_fields.tooltip.image'] = 'Brugerdefineret Docker-image til at tildele de oprettede servere (f.eks. quay.io/pterodactyl/core:java-glibc).';
$lang['PterodactylPackage.package_fields.databases'] = 'Databasegrænse (valgfri)';
$lang['PterodactylPackage.package_fields.tooltip.databases'] = 'Det samlede antal databaser, som en bruger har lov til at oprette servere til. Lad den være tom for at tillade ubegrænset.';
$lang['PterodactylPackage.package_fields.allocations'] = 'Tildelingsgrænse (valgfri)';
$lang['PterodactylPackage.package_fields.tooltip.allocations'] = 'Det samlede antal tildelinger, som en bruger har tilladelse til at oprette servere. Lad den være tom for at tillade ubegrænset.';
$lang['PterodactylPackage.package_fields.backups'] = 'Backup-grænse (valgfri)';
$lang['PterodactylPackage.package_fields.tooltip.backups'] = 'Det samlede antal sikkerhedskopier, som en bruger har tilladelse til for de oprettede servere. Lad den være tom for at tillade ubegrænset.';
$lang['PterodactylPackage.package_fields.optional'] = '%1$s (Valgfrit)';
$lang['PterodactylPackage.package_fields.tooltip.display'] = 'Markér for at give klienter mulighed for at ændre denne værdi under tilføjelse/redigering af service. Lad være med at markere, hvis du planlægger at bruge en konfigurerbar indstilling til dette felt.';

