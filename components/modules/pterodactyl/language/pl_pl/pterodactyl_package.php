<?php
/**
 * Pterodactyl Package
 *
 * @package blesta
 * @subpackage blesta.language.pl_pl
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PterodactylPackage.package_fields.tooltip.display'] = 'Zaznacz, aby umożliwić klientom modyfikowanie tej wartości podczas dodawania/edycji usługi. Pozostaw niezaznaczone, jeśli planujesz użyć konfigurowalnej opcji dla tego pola.';
$lang['PterodactylPackage.package_fields.optional'] = '%1$s (opcjonalnie)';
$lang['PterodactylPackage.package_fields.tooltip.backups'] = 'Całkowita liczba kopii zapasowych dozwolonych dla użytkownika dla utworzonych serwerów. Pozostaw puste, aby zezwolić na nieograniczoną liczbę.';
$lang['PterodactylPackage.package_fields.backups'] = 'Limit kopii zapasowej (opcjonalnie)';
$lang['PterodactylPackage.package_fields.tooltip.allocations'] = 'Całkowita liczba przydziałów, które użytkownik może przydzielić utworzonym serwerom. Pozostaw puste, aby zezwolić na nieograniczoną liczbę.';
$lang['PterodactylPackage.package_fields.allocations'] = 'Limit przydziału (opcjonalnie)';
$lang['PterodactylPackage.package_fields.tooltip.databases'] = 'Całkowita liczba baz danych, które użytkownik może utworzyć na serwerach. Pozostaw puste, aby zezwolić na nieograniczoną liczbę.';
$lang['PterodactylPackage.package_fields.databases'] = 'Limit bazy danych (opcjonalnie)';
$lang['PterodactylPackage.package_fields.tooltip.image'] = 'Niestandardowy obraz Docker do przypisania do utworzonych serwerów (np. quay.io/pterodactyl/core:java-glibc).';
$lang['PterodactylPackage.package_fields.image'] = 'Obraz (opcjonalnie)';
$lang['PterodactylPackage.package_fields.tooltip.startup'] = 'Niestandardowe polecenie startowe do przypisania do utworzonych serwerów (np. java -Xms128M -Xmx 1024M -jar server.jar).';
$lang['PterodactylPackage.package_fields.startup'] = 'Uruchomienie (opcjonalnie)';
$lang['PterodactylPackage.package_fields.tooltip.io'] = 'Blok IO Numer regulacji (10-1000).';
$lang['PterodactylPackage.package_fields.io'] = 'Blok IO Waga';
$lang['PterodactylPackage.package_fields.tooltip.disk'] = 'Ilość miejsca na dysku do przypisania do utworzonych serwerów.';
$lang['PterodactylPackage.package_fields.disk'] = 'Miejsce na dysku (MB)';
$lang['PterodactylPackage.package_fields.tooltip.cpu'] = 'Ilość procesora do przypisania do utworzonych serwerów.';
$lang['PterodactylPackage.package_fields.cpu'] = 'Limit CPU (%)';
$lang['PterodactylPackage.package_fields.tooltip.swap'] = 'Ilość Swap do przypisania do utworzonych serwerów.';
$lang['PterodactylPackage.package_fields.swap'] = 'Swap (MB)';
$lang['PterodactylPackage.package_fields.tooltip.memory'] = 'Ilość pamięci do przypisania do utworzonych serwerów.';
$lang['PterodactylPackage.package_fields.memory'] = 'Pamięć (MB)';
$lang['PterodactylPackage.package_fields.tooltip.pack_id'] = 'Identyfikator pakietu do zainstalowania na serwerze.';
$lang['PterodactylPackage.package_fields.pack_id'] = 'Identyfikator pakietu (opcjonalnie)';
$lang['PterodactylPackage.package_fields.tooltip.egg_id'] = 'Identyfikator jaja, z którego ma korzystać serwer.';
$lang['PterodactylPackage.package_fields.egg_id'] = 'Egg ID';
$lang['PterodactylPackage.package_fields.tooltip.nest_id'] = 'Gniazdo, z którego ma korzystać serwer.';
$lang['PterodactylPackage.package_fields.nest_id'] = 'Gniazdo';
$lang['PterodactylPackage.package_fields.tooltip.port_range'] = 'Zakresy portów oddzielone przecinkami do przypisania do serwera (przykład: 25565-25570,25580-25590).';
$lang['PterodactylPackage.package_fields.port_range'] = 'Zakres portów';
$lang['PterodactylPackage.package_fields.tooltip.dedicated_ip'] = 'Przypisz dedykowany adres IP do utworzonych serwerów.';
$lang['PterodactylPackage.package_fields.dedicated_ip'] = 'Dedykowany adres IP (opcjonalnie)';
$lang['PterodactylPackage.package_fields.tooltip.location_id'] = 'Lokalizacja, w której mają być automatycznie wdrażane serwery.';
$lang['PterodactylPackage.package_fields.location_id'] = 'Lokalizacja';
$lang['PterodactylPackage.!error.meta[backups].format'] = 'Liczba kopii zapasowych musi być liczbą.';
$lang['PterodactylPackage.!error.meta[allocations].format'] = 'Liczba przydziałów musi być liczbą.';
$lang['PterodactylPackage.!error.meta[databases].format'] = 'Liczba baz danych musi być liczbą.';
$lang['PterodactylPackage.!error.meta[image].length'] = 'Ścieżka obrazu musi zawierać maksymalnie 255 znaków.';
$lang['PterodactylPackage.!error.meta[io].format'] = 'Waga IO musi być numeryczna.';
$lang['PterodactylPackage.!error.meta[disk].format'] = 'Ilość miejsca na dysku musi być liczbą.';
$lang['PterodactylPackage.!error.meta[cpu].format'] = 'Wartość procentowa procesora musi być liczbą.';
$lang['PterodactylPackage.!error.meta[swap].format'] = 'Kwota swapu musi być liczbą.';
$lang['PterodactylPackage.!error.meta[memory].format'] = 'Ilość pamięci musi być numeryczna.';
$lang['PterodactylPackage.!error.meta[pack_id].format'] = 'Identyfikator pakietu musi być numeryczny.';
$lang['PterodactylPackage.!error.meta[egg_id].valid'] = 'Jajo nie pasuje do żadnego w Pterodactylu.';
$lang['PterodactylPackage.!error.meta[egg_id].format'] = 'Identyfikator jaja musi być numeryczny.';
$lang['PterodactylPackage.!error.meta[nest_id].valid'] = 'Gniazdo nie pasuje do żadnego w Pterodactylu.';
$lang['PterodactylPackage.!error.meta[nest_id].format'] = 'Identyfikator gniazda musi być numeryczny.';
$lang['PterodactylPackage.!error.meta[port_range].format'] = 'Zakres portów powinien być w formacie 25565-25570,25580-25590.';
$lang['PterodactylPackage.!error.meta[dedicated_ip].format'] = 'Czy ma być używany dedykowany adres IP, należy ustawić na 1 lub 0.';
$lang['PterodactylPackage.!error.meta[location_id].valid'] = 'Identyfikator lokalizacji nie pasuje do żadnego w Pterodactyl.';
$lang['PterodactylPackage.!error.meta[location_id].format'] = 'Identyfikator lokalizacji musi być numeryczny.';

