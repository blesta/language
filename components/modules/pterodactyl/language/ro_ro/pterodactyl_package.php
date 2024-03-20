<?php
/**
 * Pterodactyl Package
 *
 * @package blesta
 * @subpackage blesta.language.ro_ro
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PterodactylPackage.package_fields.tooltip.display'] = 'Bifați pentru a permite clienților să modifice această valoare în timpul adăugării/editării serviciului. Lăsați debifat dacă intenționați să utilizați o opțiune configurabilă pentru acest câmp.';
$lang['PterodactylPackage.package_fields.optional'] = '%1$s (Opțional)';
$lang['PterodactylPackage.package_fields.tooltip.backups'] = 'Numărul total de copii de rezervă permise unui utilizator pentru serverele create. Lăsați în alb pentru a permite un număr nelimitat.';
$lang['PterodactylPackage.package_fields.backups'] = 'Limita de rezervă (opțional)';
$lang['PterodactylPackage.package_fields.tooltip.allocations'] = 'Numărul total de alocări pe care un utilizator are voie să le facă pentru serverele create. Lăsați gol pentru a permite un număr nelimitat.';
$lang['PterodactylPackage.package_fields.allocations'] = 'Limita de alocare (opțional)';
$lang['PterodactylPackage.package_fields.tooltip.databases'] = 'Numărul total de baze de date pe care un utilizator are voie să creeze servere. Lăsați gol pentru a permite un număr nelimitat.';
$lang['PterodactylPackage.package_fields.databases'] = 'Limita bazei de date (opțional)';
$lang['PterodactylPackage.package_fields.tooltip.image'] = 'Imaginea Docker personalizată pentru a fi atribuită serverelor create (de exemplu, quay.io/pterodactyl/core:java-glibc).';
$lang['PterodactylPackage.package_fields.image'] = 'Imagine (opțional)';
$lang['PterodactylPackage.package_fields.tooltip.startup'] = 'Comandă de pornire personalizată pentru a fi atribuită serverelor create (de exemplu, java -Xms128M -Xmx 1024M -jar server.jar).';
$lang['PterodactylPackage.package_fields.startup'] = 'Pornirea (opțional)';
$lang['PterodactylPackage.package_fields.tooltip.io'] = 'Numărul de ajustare a blocului IO (10-1000).';
$lang['PterodactylPackage.package_fields.io'] = 'Bloc IO Greutate';
$lang['PterodactylPackage.package_fields.tooltip.disk'] = 'Cantitatea de spațiu pe disc care se atribuie serverelor create.';
$lang['PterodactylPackage.package_fields.disk'] = 'Spațiu pe disc (MB)';
$lang['PterodactylPackage.package_fields.tooltip.cpu'] = 'Cantitatea de CPU care trebuie atribuită serverelor create.';
$lang['PterodactylPackage.package_fields.cpu'] = 'Limita CPU (%)';
$lang['PterodactylPackage.package_fields.tooltip.swap'] = 'Cantitatea de Swap care trebuie atribuită serverelor create.';
$lang['PterodactylPackage.package_fields.swap'] = 'Swap (MB)';
$lang['PterodactylPackage.package_fields.tooltip.memory'] = 'Cantitatea de memorie care trebuie atribuită serverelor create.';
$lang['PterodactylPackage.package_fields.memory'] = 'Memorie (MB)';
$lang['PterodactylPackage.package_fields.tooltip.pack_id'] = 'ID-ul pachetului cu care se instalează serverul.';
$lang['PterodactylPackage.package_fields.pack_id'] = 'ID-ul pachetului (opțional)';
$lang['PterodactylPackage.package_fields.tooltip.egg_id'] = 'ID-ul Egg pentru serverul care urmează să fie utilizat.';
$lang['PterodactylPackage.package_fields.egg_id'] = 'ID-ul ouălor';
$lang['PterodactylPackage.package_fields.tooltip.nest_id'] = 'Cuibul pe care îl va utiliza serverul.';
$lang['PterodactylPackage.package_fields.nest_id'] = 'Nest';
$lang['PterodactylPackage.package_fields.tooltip.port_range'] = 'Intervale de porturi separate prin virgulă pentru a le atribui serverului (Exemplu: 25565-25570,25580-25590).';
$lang['PterodactylPackage.package_fields.port_range'] = 'Gama de porturi';
$lang['PterodactylPackage.package_fields.tooltip.dedicated_ip'] = 'Atribuiți un ip dedicat serverelor create.';
$lang['PterodactylPackage.package_fields.dedicated_ip'] = 'IP dedicat (opțional)';
$lang['PterodactylPackage.package_fields.tooltip.location_id'] = 'Locația în care se implementează automat serverele.';
$lang['PterodactylPackage.package_fields.location_id'] = 'Locație';
$lang['PterodactylPackage.!error.meta[backups].format'] = 'Numărul de copii de rezervă trebuie să fie numeric.';
$lang['PterodactylPackage.!error.meta[allocations].format'] = 'Numărul de alocări trebuie să fie numeric.';
$lang['PterodactylPackage.!error.meta[databases].format'] = 'Numărul de baze de date trebuie să fie numeric.';
$lang['PterodactylPackage.!error.meta[image].length'] = 'Calea imaginii trebuie să aibă cel mult 255 de caractere.';
$lang['PterodactylPackage.!error.meta[io].format'] = 'Greutatea IO trebuie să fie numerică.';
$lang['PterodactylPackage.!error.meta[disk].format'] = 'Cantitatea de spațiu pe disc trebuie să fie numerică.';
$lang['PterodactylPackage.!error.meta[cpu].format'] = 'Procentul cpu trebuie să fie numeric.';
$lang['PterodactylPackage.!error.meta[swap].format'] = 'Valoarea swap-ului trebuie să fie numerică.';
$lang['PterodactylPackage.!error.meta[memory].format'] = 'Valoarea memoriei trebuie să fie numerică.';
$lang['PterodactylPackage.!error.meta[pack_id].format'] = 'ID-ul pachetului trebuie să fie numeric.';
$lang['PterodactylPackage.!error.meta[egg_id].valid'] = 'Oul nu se potrivește cu niciunul din Pterodactyl.';
$lang['PterodactylPackage.!error.meta[egg_id].format'] = 'ID-ul oului trebuie să fie numeric.';
$lang['PterodactylPackage.!error.meta[nest_id].valid'] = 'Cuibul nu se potrivește cu niciunul din Pterodactyl.';
$lang['PterodactylPackage.!error.meta[nest_id].format'] = 'ID-ul cuibului trebuie să fie numeric.';
$lang['PterodactylPackage.!error.meta[port_range].format'] = 'Intervalul de porturi trebuie să fie în formatul 25565-25570,25580-25590.';
$lang['PterodactylPackage.!error.meta[dedicated_ip].format'] = 'Dacă se utilizează un IP dedicat trebuie să fie setat la 1 sau 0.';
$lang['PterodactylPackage.!error.meta[location_id].valid'] = 'ID-ul locației nu se potrivește cu niciunul din Pterodactyl.';
$lang['PterodactylPackage.!error.meta[location_id].format'] = 'ID-ul locației trebuie să fie numeric.';

