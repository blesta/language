<?php
/**
 * Pterodactyl Package
 *
 * @package blesta
 * @subpackage blesta.language.bg_bg
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PterodactylPackage.package_fields.tooltip.display'] = 'Поставете отметка, за да позволите на клиентите да променят тази стойност по време на добавянето/редактирането на услугата. Оставете без отметка, ако планирате да използвате конфигурируема опция за това поле.';
$lang['PterodactylPackage.package_fields.optional'] = '%1$s (по избор)';
$lang['PterodactylPackage.package_fields.tooltip.backups'] = 'Общият брой резервни копия, които потребителят може да направи за създадените сървъри. Оставете празно, за да разрешите неограничен брой.';
$lang['PterodactylPackage.package_fields.backups'] = 'Ограничение на резервното копие (по избор)';
$lang['PterodactylPackage.package_fields.tooltip.allocations'] = 'Общият брой разпределения, които потребителят може да създаде за сървърите. Оставете празно, за да разрешите неограничен брой.';
$lang['PterodactylPackage.package_fields.allocations'] = 'Лимит на разпределение (по избор)';
$lang['PterodactylPackage.package_fields.tooltip.databases'] = 'Общият брой на базите данни, които потребителят може да създава на сървърите. Оставете празно, за да разрешите неограничен брой.';
$lang['PterodactylPackage.package_fields.databases'] = 'Лимит на базата данни (по избор)';
$lang['PterodactylPackage.package_fields.tooltip.image'] = 'Потребителски образ на Docker за присвояване на създадените сървъри (напр. quay.io/pterodactyl/core:java-glibc).';
$lang['PterodactylPackage.package_fields.image'] = 'Изображение (по избор)';
$lang['PterodactylPackage.package_fields.tooltip.startup'] = 'Потребителска команда за стартиране, която да се зададе на създадените сървъри (напр. java -Xms128M -Xmx 1024M -jar server.jar).';
$lang['PterodactylPackage.package_fields.startup'] = 'Стартиране (по избор)';
$lang['PterodactylPackage.package_fields.tooltip.io'] = 'Номер за настройка на блок IO (10-1000).';
$lang['PterodactylPackage.package_fields.io'] = 'Тегло на блока IO';
$lang['PterodactylPackage.package_fields.tooltip.disk'] = 'Количество дисково пространство, което да се присвои на създадените сървъри.';
$lang['PterodactylPackage.package_fields.disk'] = 'Дисково пространство (MB)';
$lang['PterodactylPackage.package_fields.tooltip.cpu'] = 'Количество процесор, което да се присвои на създадените сървъри.';
$lang['PterodactylPackage.package_fields.cpu'] = 'Ограничение на процесора (%)';
$lang['PterodactylPackage.package_fields.tooltip.swap'] = 'Размер на суапа, който да се присвои на създадените сървъри.';
$lang['PterodactylPackage.package_fields.swap'] = 'Размяна (MB)';
$lang['PterodactylPackage.package_fields.tooltip.memory'] = 'Количество памет, което да се присвои на създадените сървъри.';
$lang['PterodactylPackage.package_fields.memory'] = 'Памет (MB)';
$lang['PterodactylPackage.package_fields.tooltip.pack_id'] = 'Идентификатор на пакета, с който да се инсталира сървърът.';
$lang['PterodactylPackage.package_fields.pack_id'] = 'Идентификатор на опаковката (по избор)';
$lang['PterodactylPackage.package_fields.tooltip.egg_id'] = 'Идентификатор на яйцето, което сървърът ще използва.';
$lang['PterodactylPackage.package_fields.egg_id'] = 'Идентификатор на яйцето';
$lang['PterodactylPackage.package_fields.tooltip.nest_id'] = 'Гнездото за използване от сървъра.';
$lang['PterodactylPackage.package_fields.nest_id'] = 'Гнездо';
$lang['PterodactylPackage.package_fields.tooltip.port_range'] = 'Обхвати на портове, разделени със запетая, които да се присвоят на сървъра (Пример: 25565-25570,25580-25590).';
$lang['PterodactylPackage.package_fields.port_range'] = 'Обхват на порта';
$lang['PterodactylPackage.package_fields.tooltip.dedicated_ip'] = 'Присвояване на специални IP адреси на създадените сървъри.';
$lang['PterodactylPackage.package_fields.dedicated_ip'] = 'Специален IP адрес (по избор)';
$lang['PterodactylPackage.package_fields.tooltip.location_id'] = 'Местоположението, в което автоматично да се разполагат сървърите.';
$lang['PterodactylPackage.package_fields.location_id'] = 'Местоположение';
$lang['PterodactylPackage.!error.meta[backups].format'] = 'Броят на резервните копия трябва да бъде цифров.';
$lang['PterodactylPackage.!error.meta[allocations].format'] = 'Броят на разпределенията трябва да е цифров.';
$lang['PterodactylPackage.!error.meta[databases].format'] = 'Броят на базите данни трябва да бъде цифров.';
$lang['PterodactylPackage.!error.meta[image].length'] = 'Пътят на изображението трябва да съдържа най-много 255 символа.';
$lang['PterodactylPackage.!error.meta[io].format'] = 'Теглото на IO трябва да е цифрово.';
$lang['PterodactylPackage.!error.meta[disk].format'] = 'Количеството дисково пространство трябва да бъде цифрово.';
$lang['PterodactylPackage.!error.meta[cpu].format'] = 'Процентът на процесора трябва да е цифров.';
$lang['PterodactylPackage.!error.meta[swap].format'] = 'Сумата на суапа трябва да е цифрова.';
$lang['PterodactylPackage.!error.meta[memory].format'] = 'Количеството памет трябва да е цифрово.';
$lang['PterodactylPackage.!error.meta[pack_id].format'] = 'Идентификаторът на опаковката трябва да е цифров.';
$lang['PterodactylPackage.!error.meta[egg_id].valid'] = 'Яйцето не съвпада с никое от яйцата в Pterodactyl.';
$lang['PterodactylPackage.!error.meta[egg_id].format'] = 'Идентификаторът на яйцето трябва да бъде цифров.';
$lang['PterodactylPackage.!error.meta[nest_id].valid'] = 'Гнездото не съвпада с никое в Pterodactyl.';
$lang['PterodactylPackage.!error.meta[nest_id].format'] = 'Идентификаторът на гнездото трябва да бъде цифров.';
$lang['PterodactylPackage.!error.meta[port_range].format'] = 'Диапазонът на портовете трябва да бъде във формат 25565-25570,25580-25590.';
$lang['PterodactylPackage.!error.meta[dedicated_ip].format'] = 'Дали да се използва специален IP адрес, трябва да бъде зададено на 1 или 0.';
$lang['PterodactylPackage.!error.meta[location_id].valid'] = 'Идентификаторът на местоположението не съвпада с никой от Pterodactyl.';
$lang['PterodactylPackage.!error.meta[location_id].format'] = 'Идентификаторът на местоположението трябва да е цифров.';

