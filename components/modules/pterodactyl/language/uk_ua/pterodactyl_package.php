<?php
/**
 * Pterodactyl Package
 *
 * @package blesta
 * @subpackage blesta.language.uk_ua
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PterodactylPackage.package_fields.tooltip.display'] = 'Установіть прапорець, щоб дозволити клієнтам змінювати це значення під час додавання/редагування послуги. Не позначайте це поле, якщо ви плануєте використовувати опцію, що налаштовується для цього поля.';
$lang['PterodactylPackage.package_fields.optional'] = '%1$s (необов\'язково)';
$lang['PterodactylPackage.package_fields.tooltip.backups'] = 'Загальна кількість резервних копій, яку користувач може створити для створених серверів. Залиште порожнім, щоб дозволити необмежену кількість.';
$lang['PterodactylPackage.package_fields.backups'] = 'Ліміт резервного копіювання (необов\'язково)';
$lang['PterodactylPackage.package_fields.tooltip.allocations'] = 'Загальна кількість розподілів, яку користувач може отримати для створених серверів. Залиште пустим, щоб дозволити необмежену кількість.';
$lang['PterodactylPackage.package_fields.allocations'] = 'Ліміт асигнувань (необов\'язково)';
$lang['PterodactylPackage.package_fields.tooltip.databases'] = 'Загальна кількість баз даних, яку користувачеві дозволено створювати на серверах. Залиште пустим, щоб дозволити необмежену кількість.';
$lang['PterodactylPackage.package_fields.databases'] = 'Обмеження бази даних (необов\'язково)';
$lang['PterodactylPackage.package_fields.tooltip.image'] = 'Власний образ Docker для призначення створеним серверам (наприклад, quay.io/pterodactyl/core:java-glibc).';
$lang['PterodactylPackage.package_fields.image'] = 'Зображення (необов\'язково)';
$lang['PterodactylPackage.package_fields.tooltip.startup'] = 'Спеціальна команда запуску для призначення створеним серверам (наприклад, java -Xms128M -Xmx 1024M -jar server.jar).';
$lang['PterodactylPackage.package_fields.startup'] = 'Запуск (необов\'язково)';
$lang['PterodactylPackage.package_fields.tooltip.io'] = 'Номер коригування блоку вводу-виводу (10-1000).';
$lang['PterodactylPackage.package_fields.io'] = 'Вага блоку вводу-виводу';
$lang['PterodactylPackage.package_fields.tooltip.disk'] = 'Обсяг дискового простору, який буде призначено створеним серверам.';
$lang['PterodactylPackage.package_fields.disk'] = 'Місце на диску (МБ)';
$lang['PterodactylPackage.package_fields.tooltip.cpu'] = 'Кількість процесорів, яку потрібно призначити створеним серверам.';
$lang['PterodactylPackage.package_fields.cpu'] = 'Обмеження процесора (%)';
$lang['PterodactylPackage.package_fields.tooltip.swap'] = 'Обсяг підкачки, який потрібно призначити створеним серверам.';
$lang['PterodactylPackage.package_fields.swap'] = 'Своп (МБ)';
$lang['PterodactylPackage.package_fields.tooltip.memory'] = 'Об\'єм пам\'яті, який буде виділено створеним серверам.';
$lang['PterodactylPackage.package_fields.memory'] = 'Пам\'ять (МБ)';
$lang['PterodactylPackage.package_fields.tooltip.pack_id'] = 'Ідентифікатор пакунка, з яким встановлюється сервер.';
$lang['PterodactylPackage.package_fields.pack_id'] = 'Ідентифікатор упаковки (необов\'язково)';
$lang['PterodactylPackage.package_fields.tooltip.egg_id'] = 'Ідентифікатор яйця для використання сервером.';
$lang['PterodactylPackage.package_fields.egg_id'] = 'Ідентифікатор яйця';
$lang['PterodactylPackage.package_fields.tooltip.nest_id'] = 'Гніздо для використання сервером.';
$lang['PterodactylPackage.package_fields.nest_id'] = 'Гніздо';
$lang['PterodactylPackage.package_fields.tooltip.port_range'] = 'Діапазони портів через кому для призначення серверу (Приклад: 25565-25570,25580-25590).';
$lang['PterodactylPackage.package_fields.port_range'] = 'Діапазон лівого борту';
$lang['PterodactylPackage.package_fields.tooltip.dedicated_ip'] = 'Присвойте створеним серверам виділені IP-адреси.';
$lang['PterodactylPackage.package_fields.dedicated_ip'] = 'Виділена IP-адреса (за бажанням)';
$lang['PterodactylPackage.package_fields.tooltip.location_id'] = 'Розташування для автоматичного розгортання серверів.';
$lang['PterodactylPackage.package_fields.location_id'] = 'Місцезнаходження';
$lang['PterodactylPackage.!error.meta[backups].format'] = 'Кількість резервних копій має бути числовою.';
$lang['PterodactylPackage.!error.meta[allocations].format'] = 'Кількість асигнувань має бути числовою.';
$lang['PterodactylPackage.!error.meta[databases].format'] = 'Кількість баз даних має бути числовою.';
$lang['PterodactylPackage.!error.meta[image].length'] = 'Шлях до зображення повинен містити не більше 255 символів.';
$lang['PterodactylPackage.!error.meta[io].format'] = 'Вага IO повинна бути числовою.';
$lang['PterodactylPackage.!error.meta[disk].format'] = 'Обсяг дискового простору повинен бути числовим.';
$lang['PterodactylPackage.!error.meta[cpu].format'] = 'Відсоток процесора має бути числовим.';
$lang['PterodactylPackage.!error.meta[swap].format'] = 'Сума свопу повинна бути числовою.';
$lang['PterodactylPackage.!error.meta[memory].format'] = 'Обсяг пам\'яті повинен бути числовим.';
$lang['PterodactylPackage.!error.meta[pack_id].format'] = 'Ідентифікатор пачки повинен бути числовим.';
$lang['PterodactylPackage.!error.meta[egg_id].valid'] = 'Яйце не відповідає жодному з птеродактилів.';
$lang['PterodactylPackage.!error.meta[egg_id].format'] = 'Ідентифікатор яйця повинен бути цифровим.';
$lang['PterodactylPackage.!error.meta[nest_id].valid'] = 'Гніздо не збігається з гніздами птеродактилів.';
$lang['PterodactylPackage.!error.meta[nest_id].format'] = 'Ідентифікатор гнізда повинен бути числовим.';
$lang['PterodactylPackage.!error.meta[port_range].format'] = 'Діапазон портів здебільшого має бути у форматі 25565-25570, 25580-25590.';
$lang['PterodactylPackage.!error.meta[dedicated_ip].format'] = 'Чи використовувати виділену IP-адресу, має бути встановлено на 1 або 0.';
$lang['PterodactylPackage.!error.meta[location_id].valid'] = 'Ідентифікатор локації не збігається з ідентифікатором локації у Pterodactyl.';
$lang['PterodactylPackage.!error.meta[location_id].format'] = 'Ідентифікатор локації повинен бути числовим.';

