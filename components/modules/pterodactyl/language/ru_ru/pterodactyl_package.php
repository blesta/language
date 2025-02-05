<?php
/**
 * Pterodactyl Package
 *
 * @package blesta
 * @subpackage blesta.language.ru_ru
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PterodactylPackage.package_fields.tooltip.display'] = 'Установите флажок, чтобы разрешить клиентам изменять это значение во время добавления/редактирования услуги. Снимите флажок, если вы планируете использовать настраиваемую опцию для этого поля.';
$lang['PterodactylPackage.package_fields.optional'] = '%1$s (Необязательно)';
$lang['PterodactylPackage.package_fields.tooltip.backups'] = 'Общее количество резервных копий, разрешенных пользователю для созданных серверов. Оставьте пустым, чтобы разрешить неограниченное количество.';
$lang['PterodactylPackage.package_fields.backups'] = 'Резервный лимит (опционально)';
$lang['PterodactylPackage.package_fields.tooltip.allocations'] = 'Общее количество распределений, разрешенных пользователю для созданных серверов. Оставьте пустым, чтобы разрешить неограниченное количество.';
$lang['PterodactylPackage.package_fields.allocations'] = 'Лимит распределения (необязательно)';
$lang['PterodactylPackage.package_fields.tooltip.databases'] = 'Общее количество баз данных, разрешенных пользователю для создания серверов. Оставьте пустым, чтобы разрешить неограниченное количество.';
$lang['PterodactylPackage.package_fields.databases'] = 'Ограничение базы данных (необязательно)';
$lang['PterodactylPackage.package_fields.tooltip.image'] = 'Пользовательский образ Docker для назначения созданным серверам (например, quay.io/pterodactyl/core:java-glibc).';
$lang['PterodactylPackage.package_fields.image'] = 'Изображение (необязательно)';
$lang['PterodactylPackage.package_fields.tooltip.startup'] = 'Пользовательская команда запуска, которую нужно назначить созданным серверам (например, java -Xms128M -Xmx 1024M -jar server.jar).';
$lang['PterodactylPackage.package_fields.startup'] = 'Запуск (необязательно)';
$lang['PterodactylPackage.package_fields.tooltip.io'] = 'Блок IO Номер настройки (10-1000).';
$lang['PterodactylPackage.package_fields.io'] = 'Вес блока IO';
$lang['PterodactylPackage.package_fields.tooltip.disk'] = 'Объем дискового пространства, который необходимо выделить для созданных серверов.';
$lang['PterodactylPackage.package_fields.disk'] = 'Дисковое пространство (МБ)';
$lang['PterodactylPackage.package_fields.tooltip.cpu'] = 'Количество ЦП, которое необходимо назначить созданным серверам.';
$lang['PterodactylPackage.package_fields.cpu'] = 'Предел процессора (%)';
$lang['PterodactylPackage.package_fields.tooltip.swap'] = 'Объем свопа, который необходимо назначить создаваемым серверам.';
$lang['PterodactylPackage.package_fields.swap'] = 'Своп (МБ)';
$lang['PterodactylPackage.package_fields.tooltip.memory'] = 'Объем памяти, который необходимо назначить созданным серверам.';
$lang['PterodactylPackage.package_fields.memory'] = 'Память (МБ)';
$lang['PterodactylPackage.package_fields.tooltip.pack_id'] = 'Идентификатор пакета, с которым будет установлен сервер.';
$lang['PterodactylPackage.package_fields.pack_id'] = 'Идентификатор упаковки (необязательно)';
$lang['PterodactylPackage.package_fields.tooltip.egg_id'] = 'Идентификатор яйца, которое будет использоваться сервером.';
$lang['PterodactylPackage.package_fields.egg_id'] = 'Идентификатор яйца';
$lang['PterodactylPackage.package_fields.tooltip.nest_id'] = 'Гнездо для сервера, которое будет использоваться.';
$lang['PterodactylPackage.package_fields.nest_id'] = 'Гнездо';
$lang['PterodactylPackage.package_fields.tooltip.port_range'] = 'Диапазоны портов, разделенные запятыми, которые необходимо назначить серверу (Пример: 25565-25570,25580-25590).';
$lang['PterodactylPackage.package_fields.port_range'] = 'Диапазон портов';
$lang['PterodactylPackage.package_fields.tooltip.dedicated_ip'] = 'Назначьте выделенные ip для созданных серверов.';
$lang['PterodactylPackage.package_fields.dedicated_ip'] = 'Выделенный IP-адрес (опционально)';
$lang['PterodactylPackage.package_fields.tooltip.location_id'] = 'Местоположение для автоматического развертывания серверов.';
$lang['PterodactylPackage.package_fields.location_id'] = 'Расположение';
$lang['PterodactylPackage.!error.meta[backups].format'] = 'Количество резервных копий должно быть числовым.';
$lang['PterodactylPackage.!error.meta[allocations].format'] = 'Количество распределений должно быть числовым.';
$lang['PterodactylPackage.!error.meta[databases].format'] = 'Количество баз данных должно быть числовым.';
$lang['PterodactylPackage.!error.meta[image].length'] = 'Путь к изображению должен содержать не более 255 символов.';
$lang['PterodactylPackage.!error.meta[io].format'] = 'Вес IO должен быть числовым.';
$lang['PterodactylPackage.!error.meta[disk].format'] = 'Объем дискового пространства должен быть числовым.';
$lang['PterodactylPackage.!error.meta[cpu].format'] = 'Процент cpu должен быть числовым.';
$lang['PterodactylPackage.!error.meta[swap].format'] = 'Сумма свопа должна быть числовой.';
$lang['PterodactylPackage.!error.meta[memory].format'] = 'Объем памяти должен быть числовым.';
$lang['PterodactylPackage.!error.meta[pack_id].format'] = 'Идентификатор упаковки должен быть цифровым.';
$lang['PterodactylPackage.!error.meta[egg_id].valid'] = 'Яйцо не совпадает ни с одним в "Птеродактиле".';
$lang['PterodactylPackage.!error.meta[egg_id].format'] = 'Идентификатор яйца должен быть цифровым.';
$lang['PterodactylPackage.!error.meta[nest_id].valid'] = 'Гнездо не совпадает ни с одним из гнезд Птеродактиля.';
$lang['PterodactylPackage.!error.meta[nest_id].format'] = 'Идентификатор гнезда должен быть цифровым.';
$lang['PterodactylPackage.!error.meta[port_range].format'] = 'Диапазон портов должен быть в формате 25565-25570, 25580-25590.';
$lang['PterodactylPackage.!error.meta[dedicated_ip].format'] = 'Для параметра "Использовать выделенный IP" необходимо установить значение 1 или 0.';
$lang['PterodactylPackage.!error.meta[location_id].valid'] = 'Идентификатор местоположения не совпадает ни с одним в Pterodactyl.';
$lang['PterodactylPackage.!error.meta[location_id].format'] = 'Идентификатор местоположения должен быть цифровым.';

