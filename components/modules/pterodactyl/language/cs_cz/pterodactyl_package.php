<?php
/**
 * Pterodactyl Package
 *
 * @package blesta
 * @subpackage blesta.language.cs_cz
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PterodactylPackage.package_fields.tooltip.display'] = 'Zaškrtněte, chcete-li klientům povolit změnu této hodnoty během přidávání/editace služby. Nezaškrtněte, pokud plánujete pro toto pole použít konfigurovatelnou možnost.';
$lang['PterodactylPackage.package_fields.optional'] = '%1$s (nepovinné)';
$lang['PterodactylPackage.package_fields.tooltip.backups'] = 'Celkový počet záloh, které má uživatel povoleny pro vytvořené servery. Nechte prázdné, pokud chcete povolit neomezený počet.';
$lang['PterodactylPackage.package_fields.backups'] = 'Záložní limit (volitelný)';
$lang['PterodactylPackage.package_fields.tooltip.allocations'] = 'Celkový počet alokací, které má uživatel povoleny pro vytvořené servery. Nechte prázdné, pokud chcete povolit neomezený počet.';
$lang['PterodactylPackage.package_fields.allocations'] = 'Limit přidělení (nepovinné)';
$lang['PterodactylPackage.package_fields.tooltip.databases'] = 'Celkový počet databází, které má uživatel povoleno vytvářet na serverech. Nechte prázdné, pokud chcete povolit neomezený počet.';
$lang['PterodactylPackage.package_fields.databases'] = 'Omezení databáze (volitelné)';
$lang['PterodactylPackage.package_fields.tooltip.image'] = 'Vlastní obraz Docker, který se přiřadí vytvořeným serverům (např. quay.io/pterodactyl/core:java-glibc).';
$lang['PterodactylPackage.package_fields.image'] = 'Obrázek (nepovinné)';
$lang['PterodactylPackage.package_fields.tooltip.startup'] = 'Vlastní příkaz pro spuštění, který se přiřadí vytvořeným serverům (např. java -Xms128M -Xmx 1024M -jar server.jar).';
$lang['PterodactylPackage.package_fields.startup'] = 'Spuštění (volitelné)';
$lang['PterodactylPackage.package_fields.tooltip.io'] = 'Číslo úpravy bloku IO (10-1000).';
$lang['PterodactylPackage.package_fields.io'] = 'Hmotnost bloku IO';
$lang['PterodactylPackage.package_fields.tooltip.disk'] = 'Velikost diskového prostoru, který se má přidělit vytvořeným serverům.';
$lang['PterodactylPackage.package_fields.disk'] = 'Místo na disku (MB)';
$lang['PterodactylPackage.package_fields.tooltip.cpu'] = 'Množství procesoru, které se přiřadí vytvořeným serverům.';
$lang['PterodactylPackage.package_fields.cpu'] = 'Limit CPU (%)';
$lang['PterodactylPackage.package_fields.tooltip.swap'] = 'Množství swapu, které se přiřadí vytvořeným serverům.';
$lang['PterodactylPackage.package_fields.swap'] = 'Výměna (MB)';
$lang['PterodactylPackage.package_fields.tooltip.memory'] = 'Množství paměti, které se přiřadí vytvořeným serverům.';
$lang['PterodactylPackage.package_fields.memory'] = 'Paměť (MB)';
$lang['PterodactylPackage.package_fields.tooltip.pack_id'] = 'ID balíčku, se kterým se má server nainstalovat.';
$lang['PterodactylPackage.package_fields.pack_id'] = 'ID balení (nepovinné)';
$lang['PterodactylPackage.package_fields.tooltip.egg_id'] = 'ID vajíčka, které má server použít.';
$lang['PterodactylPackage.package_fields.egg_id'] = 'Identifikace vajec';
$lang['PterodactylPackage.package_fields.tooltip.nest_id'] = 'Hnízdo, které má server používat.';
$lang['PterodactylPackage.package_fields.nest_id'] = 'Hnízdo';
$lang['PterodactylPackage.package_fields.tooltip.port_range'] = 'Rozsahy portů oddělené čárkou pro přiřazení serveru (Příklad: 25565-25570,25580-25590).';
$lang['PterodactylPackage.package_fields.port_range'] = 'Rozsah přístavu';
$lang['PterodactylPackage.package_fields.tooltip.dedicated_ip'] = 'Přiřazení vyhrazené IP adresy vytvořeným serverům.';
$lang['PterodactylPackage.package_fields.dedicated_ip'] = 'Vyhrazená IP (volitelné)';
$lang['PterodactylPackage.package_fields.tooltip.location_id'] = 'Umístění pro automatické nasazení serverů.';
$lang['PterodactylPackage.package_fields.location_id'] = 'Umístění';
$lang['PterodactylPackage.!error.meta[backups].format'] = 'Počet záloh musí být číselný.';
$lang['PterodactylPackage.!error.meta[allocations].format'] = 'Počet přídělů musí být číselný.';
$lang['PterodactylPackage.!error.meta[databases].format'] = 'Počet databází musí být číselný.';
$lang['PterodactylPackage.!error.meta[image].length'] = 'Cesta k obrázku musí mít maximálně 255 znaků.';
$lang['PterodactylPackage.!error.meta[io].format'] = 'Váha IO musí být číselná.';
$lang['PterodactylPackage.!error.meta[disk].format'] = 'Velikost místa na disku musí být číselná.';
$lang['PterodactylPackage.!error.meta[cpu].format'] = 'Procento cpu musí být číselné.';
$lang['PterodactylPackage.!error.meta[swap].format'] = 'Částka swapu musí být číselná.';
$lang['PterodactylPackage.!error.meta[memory].format'] = 'Množství paměti musí být číselné.';
$lang['PterodactylPackage.!error.meta[pack_id].format'] = 'ID balení musí být číselné.';
$lang['PterodactylPackage.!error.meta[egg_id].valid'] = 'Vejce neodpovídá žádnému z Pterodaktylů.';
$lang['PterodactylPackage.!error.meta[egg_id].format'] = 'ID vejce musí být číselné.';
$lang['PterodactylPackage.!error.meta[nest_id].valid'] = 'Hnízdo neodpovídá žádnému hnízdu v Pterodaktylovi.';
$lang['PterodactylPackage.!error.meta[nest_id].format'] = 'ID hnízda musí být číselné.';
$lang['PterodactylPackage.!error.meta[port_range].format'] = 'Rozsah portů je nejčastěji ve formátu 25565-25570,25580-25590.';
$lang['PterodactylPackage.!error.meta[dedicated_ip].format'] = 'Zda se má použít vyhrazená IP adresa, musí být nastaveno na 1 nebo 0.';
$lang['PterodactylPackage.!error.meta[location_id].valid'] = 'ID lokality se neshoduje s žádnou v databázi Pterodactyl.';
$lang['PterodactylPackage.!error.meta[location_id].format'] = 'ID místa musí být číselné.';

