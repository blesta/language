<?php
/**
 * Pterodactyl Package
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PterodactylPackage.package_fields.tooltip.display'] = 'Markieren Sie diese Option, damit Kunden diesen Wert beim Hinzufügen/Bearbeiten von Diensten ändern können. Lassen Sie das Feld unmarkiert, wenn Sie eine konfigurierbare Option für dieses Feld verwenden möchten.';
$lang['PterodactylPackage.package_fields.optional'] = '%1$s (fakultativ)';
$lang['PterodactylPackage.package_fields.tooltip.backups'] = 'Die Gesamtzahl der Backups, die ein Benutzer für die erstellten Server erstellen darf. Leer lassen, um unbegrenzt zuzulassen.';
$lang['PterodactylPackage.package_fields.backups'] = 'Sicherungsgrenze (optional)';
$lang['PterodactylPackage.package_fields.tooltip.allocations'] = 'Die Gesamtzahl der Zuweisungen, die ein Benutzer für erstellte Server vornehmen darf. Leer lassen, um unbegrenzt zu erlauben.';
$lang['PterodactylPackage.package_fields.allocations'] = 'Zuteilungsgrenze (fakultativ)';
$lang['PterodactylPackage.package_fields.tooltip.databases'] = 'Die Gesamtzahl der Datenbanken, die ein Benutzer auf Servern erstellen darf. Leer lassen, um unbegrenzt zu erlauben.';
$lang['PterodactylPackage.package_fields.databases'] = 'Datenbankgrenze (optional)';
$lang['PterodactylPackage.package_fields.tooltip.image'] = 'Benutzerdefiniertes Docker-Image, das den erstellten Servern zugewiesen wird (z. B. quay.io/pterodactyl/core:java-glibc).';
$lang['PterodactylPackage.package_fields.image'] = 'Bild (optional)';
$lang['PterodactylPackage.package_fields.tooltip.startup'] = 'Benutzerdefinierter Startbefehl, der den erstellten Servern zugewiesen wird (z. B. java -Xms128M -Xmx 1024M -jar server.jar).';
$lang['PterodactylPackage.package_fields.startup'] = 'Startup (optional)';
$lang['PterodactylPackage.package_fields.tooltip.io'] = 'Block IO Anpassungsnummer (10-1000).';
$lang['PterodactylPackage.package_fields.io'] = 'Block IO Gewicht';
$lang['PterodactylPackage.package_fields.tooltip.disk'] = 'Menge des Festplattenplatzes, der den erstellten Servern zugewiesen werden soll.';
$lang['PterodactylPackage.package_fields.disk'] = 'Festplattenspeicher (MB)';
$lang['PterodactylPackage.package_fields.tooltip.cpu'] = 'Anzahl der CPUs, die den erstellten Servern zugewiesen werden sollen.';
$lang['PterodactylPackage.package_fields.cpu'] = 'CPU-Grenzwert (%)';
$lang['PterodactylPackage.package_fields.tooltip.swap'] = 'Die Menge an Swap, die den erstellten Servern zugewiesen werden soll.';
$lang['PterodactylPackage.package_fields.swap'] = 'Tausch (MB)';
$lang['PterodactylPackage.package_fields.tooltip.memory'] = 'Die Menge des Speichers, die den erstellten Servern zugewiesen werden soll.';
$lang['PterodactylPackage.package_fields.memory'] = 'Speicher (MB)';
$lang['PterodactylPackage.package_fields.tooltip.pack_id'] = 'ID des Packs, mit dem der Server installiert werden soll.';
$lang['PterodactylPackage.package_fields.pack_id'] = 'Pack-ID (optional)';
$lang['PterodactylPackage.package_fields.tooltip.egg_id'] = 'ID des Eies, das der Server verwenden soll.';
$lang['PterodactylPackage.package_fields.egg_id'] = 'Eier-ID';
$lang['PterodactylPackage.package_fields.tooltip.nest_id'] = 'Das Nest, das der Server verwenden soll.';
$lang['PterodactylPackage.package_fields.nest_id'] = 'Nest';
$lang['PterodactylPackage.package_fields.tooltip.port_range'] = 'Durch Komma getrennte Portbereiche, die dem Server zugewiesen werden sollen (Beispiel: 25565-25570,25580-25590).';
$lang['PterodactylPackage.package_fields.port_range'] = 'Hafenbereich';
$lang['PterodactylPackage.package_fields.tooltip.dedicated_ip'] = 'Weisen Sie den erstellten Servern eine dedizierte IP zu.';
$lang['PterodactylPackage.package_fields.dedicated_ip'] = 'Dedizierte IP (optional)';
$lang['PterodactylPackage.package_fields.tooltip.location_id'] = 'Der Standort, an dem Server automatisch bereitgestellt werden sollen.';
$lang['PterodactylPackage.package_fields.location_id'] = 'Standort';
$lang['PterodactylPackage.!error.meta[backups].format'] = 'Die Anzahl der Backups muss numerisch sein.';
$lang['PterodactylPackage.!error.meta[allocations].format'] = 'Die Anzahl der Zuweisungen muss numerisch sein.';
$lang['PterodactylPackage.!error.meta[databases].format'] = 'Die Anzahl der Datenbanken muss numerisch sein.';
$lang['PterodactylPackage.!error.meta[image].length'] = 'Der Bildpfad darf maximal 255 Zeichen lang sein.';
$lang['PterodactylPackage.!error.meta[io].format'] = 'Das IO-Gewicht muss numerisch sein.';
$lang['PterodactylPackage.!error.meta[disk].format'] = 'Die Menge des Speicherplatzes muss numerisch sein.';
$lang['PterodactylPackage.!error.meta[cpu].format'] = 'Der CPU-Prozentsatz muss numerisch sein.';
$lang['PterodactylPackage.!error.meta[swap].format'] = 'Der Swap-Betrag muss numerisch sein.';
$lang['PterodactylPackage.!error.meta[memory].format'] = 'Die Speichergröße muss numerisch sein.';
$lang['PterodactylPackage.!error.meta[pack_id].format'] = 'Die Packungsnummer muss numerisch sein.';
$lang['PterodactylPackage.!error.meta[egg_id].valid'] = 'Das Ei stimmt nicht mit dem in Pterodactyl überein.';
$lang['PterodactylPackage.!error.meta[egg_id].format'] = 'Die Eier-ID muss numerisch sein.';
$lang['PterodactylPackage.!error.meta[nest_id].valid'] = 'Das Nest stimmt nicht mit dem in Pterodactyl überein.';
$lang['PterodactylPackage.!error.meta[nest_id].format'] = 'Die Nest-ID muss numerisch sein.';
$lang['PterodactylPackage.!error.meta[port_range].format'] = 'Der Anschlussbereich muss das Format 25565-25570, 25580-25590 haben.';
$lang['PterodactylPackage.!error.meta[dedicated_ip].format'] = 'Ob eine dedizierte IP verwendet werden soll, muss auf 1 oder 0 gesetzt werden.';
$lang['PterodactylPackage.!error.meta[location_id].valid'] = 'Die Ortskennung stimmt mit keiner in Pterodactyl überein.';
$lang['PterodactylPackage.!error.meta[location_id].format'] = 'Die Ortskennung muss numerisch sein.';

