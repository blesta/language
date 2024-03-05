<?php
/**
 * Pterodactyl Package
 *
 * @package blesta
 * @subpackage blesta.language.it_it
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PterodactylPackage.package_fields.tooltip.display'] = 'Selezionare per consentire ai clienti di modificare questo valore durante l\'aggiunta/modifica del servizio. Lasciare deselezionato se si intende utilizzare un\'opzione configurabile per questo campo.';
$lang['PterodactylPackage.package_fields.optional'] = '%1$s (facoltativo)';
$lang['PterodactylPackage.package_fields.tooltip.backups'] = 'Il numero totale di backup consentiti a un utente per i server creati. Lasciare vuoto per consentire un numero illimitato di backup.';
$lang['PterodactylPackage.package_fields.backups'] = 'Limite di backup (opzionale)';
$lang['PterodactylPackage.package_fields.tooltip.allocations'] = 'Il numero totale di allocazioni che un utente è autorizzato a creare per i server. Lasciare vuoto per consentire un numero illimitato di allocazioni.';
$lang['PterodactylPackage.package_fields.allocations'] = 'Limite di allocazione (opzionale)';
$lang['PterodactylPackage.package_fields.tooltip.databases'] = 'Il numero totale di database che un utente può creare sui server. Lasciare vuoto per consentire un numero illimitato di database.';
$lang['PterodactylPackage.package_fields.databases'] = 'Limite del database (opzionale)';
$lang['PterodactylPackage.package_fields.tooltip.image'] = 'Immagine Docker personalizzata da assegnare ai server creati (ad esempio quay.io/pterodactyl/core:java-glibc).';
$lang['PterodactylPackage.package_fields.image'] = 'Immagine (opzionale)';
$lang['PterodactylPackage.package_fields.tooltip.startup'] = 'Comando di avvio personalizzato da assegnare ai server creati (ad esempio, java -Xms128M -Xmx 1024M -jar server.jar).';
$lang['PterodactylPackage.package_fields.startup'] = 'Avvio (opzionale)';
$lang['PterodactylPackage.package_fields.tooltip.io'] = 'Blocco IO Numero di regolazione (10-1000).';
$lang['PterodactylPackage.package_fields.io'] = 'Blocco IO Peso';
$lang['PterodactylPackage.package_fields.tooltip.disk'] = 'Quantità di spazio su disco da assegnare ai server creati.';
$lang['PterodactylPackage.package_fields.disk'] = 'Spazio su disco (MB)';
$lang['PterodactylPackage.package_fields.tooltip.cpu'] = 'Quantità di CPU da assegnare ai server creati.';
$lang['PterodactylPackage.package_fields.cpu'] = 'Limite CPU (%)';
$lang['PterodactylPackage.package_fields.tooltip.swap'] = 'Quantità di swap da assegnare ai server creati.';
$lang['PterodactylPackage.package_fields.swap'] = 'Scambio (MB)';
$lang['PterodactylPackage.package_fields.tooltip.memory'] = 'Quantità di memoria da assegnare ai server creati.';
$lang['PterodactylPackage.package_fields.memory'] = 'Memoria (MB)';
$lang['PterodactylPackage.package_fields.tooltip.pack_id'] = 'ID del pacchetto con cui installare il server.';
$lang['PterodactylPackage.package_fields.pack_id'] = 'ID confezione (opzionale)';
$lang['PterodactylPackage.package_fields.tooltip.egg_id'] = 'ID dell\'uovo da utilizzare per il server.';
$lang['PterodactylPackage.package_fields.egg_id'] = 'ID uovo';
$lang['PterodactylPackage.package_fields.tooltip.nest_id'] = 'Il Nest da utilizzare per il server.';
$lang['PterodactylPackage.package_fields.nest_id'] = 'Nido';
$lang['PterodactylPackage.package_fields.tooltip.port_range'] = 'Intervalli di porte separati da virgola da assegnare al server (esempio: 25565-25570,25580-25590).';
$lang['PterodactylPackage.package_fields.port_range'] = 'Gamma porte';
$lang['PterodactylPackage.package_fields.tooltip.dedicated_ip'] = 'Assegnare un ip dedicato ai server creati.';
$lang['PterodactylPackage.package_fields.dedicated_ip'] = 'IP dedicato (opzionale)';
$lang['PterodactylPackage.package_fields.tooltip.location_id'] = 'La posizione in cui distribuire automaticamente i server.';
$lang['PterodactylPackage.package_fields.location_id'] = 'Posizione';
$lang['PterodactylPackage.!error.meta[backups].format'] = 'Il numero di backup deve essere numerico.';
$lang['PterodactylPackage.!error.meta[allocations].format'] = 'Il numero di allocazioni deve essere numerico.';
$lang['PterodactylPackage.!error.meta[databases].format'] = 'Il numero di database deve essere numerico.';
$lang['PterodactylPackage.!error.meta[image].length'] = 'Il percorso dell\'immagine deve avere un massimo di 255 caratteri.';
$lang['PterodactylPackage.!error.meta[io].format'] = 'Il peso dell\'IO deve essere numerico.';
$lang['PterodactylPackage.!error.meta[disk].format'] = 'La quantità di spazio su disco deve essere numerica.';
$lang['PterodactylPackage.!error.meta[cpu].format'] = 'La percentuale di cpu deve essere numerica.';
$lang['PterodactylPackage.!error.meta[swap].format'] = 'L\'importo dello swap deve essere numerico.';
$lang['PterodactylPackage.!error.meta[memory].format'] = 'La quantità di memoria deve essere numerica.';
$lang['PterodactylPackage.!error.meta[pack_id].format'] = 'L\'ID del pacchetto deve essere numerico.';
$lang['PterodactylPackage.!error.meta[egg_id].valid'] = 'L\'uovo non corrisponde a nessuno di Pterodactyl.';
$lang['PterodactylPackage.!error.meta[egg_id].format'] = 'L\'ID uovo deve essere numerico.';
$lang['PterodactylPackage.!error.meta[nest_id].valid'] = 'Il nido non corrisponde a quello di Pterodactyl.';
$lang['PterodactylPackage.!error.meta[nest_id].format'] = 'L\'ID del nido deve essere numerico.';
$lang['PterodactylPackage.!error.meta[port_range].format'] = 'L\'intervallo di porte deve essere nel formato 25565-25570,25580-25590.';
$lang['PterodactylPackage.!error.meta[dedicated_ip].format'] = 'La scelta di utilizzare un IP dedicato deve essere impostata su 1 o 0.';
$lang['PterodactylPackage.!error.meta[location_id].valid'] = 'L\'ID del luogo non corrisponde a nessuno in Pterodactyl.';
$lang['PterodactylPackage.!error.meta[location_id].format'] = 'L\'ID della località deve essere numerico.';

