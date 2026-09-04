<?php
/**
 * System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.bg_bg
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SystemUpgrade.!error.backup_db_failed'] = 'Резервното копие на базата данни е неуспешно. Надстройката не може да продължи без надеждно резервно копие.';
$lang['SystemUpgrade.!error.backup_files_failed'] = 'Резервното копие на файла се е провалило. Надстройката не може да продължи без надеждно резервно копие.';
$lang['SystemUpgrade.!error.download_failed'] = 'Не успя да изтегли файла за издаване.';
$lang['SystemUpgrade.!error.environment_fail'] = 'Една или повече проверки на средата не са успешни. Моля, разрешете проблемите, преди да надстроите.';
$lang['SystemUpgrade.!error.extraction_failed'] = 'Не успя да извлече архива на изданието.';
$lang['SystemUpgrade.!error.hash_mismatch'] = 'Проверката на целостта на изтегления файл се провали. Възможно е файлът да е повреден.';
$lang['SystemUpgrade.!error.launch_not_detected'] = 'Процесът на фоново обновяване не е започнал. Това може да се случи в средите на затворен хостинг (CloudLinux/CageFS, някои конфигурации на PHP-FPM), където на уеб сървъра не е разрешено да отделя дълго стартиращи подчинени процеси. Обновяването може да бъде завършено чрез изпълнение на командата по-долу през SSH.';
$lang['SystemUpgrade.!error.license_invalid'] = 'Вашият абонамент за поддръжка и актуализации трябва да е активен за обновяване на големи или малки версии.';
$lang['SystemUpgrade.!error.lock_stale'] = 'Изглежда, че предишен процес на обновяване е спрял неочаквано. Можете да изчистите заключването, за да опитате отново.';
$lang['SystemUpgrade.!error.php_version'] = 'Целевата версия изисква PHP %1$s или по-нова версия. Вие използвате PHP %2$s.';
$lang['SystemUpgrade.!error.signature_invalid'] = 'Проверката на подписа за освобождаване е неуспешна. Възможно е файлът да е бил подправен.';
$lang['SystemUpgrade.!error.signature_missing'] = 'Изданието не включва криптографски подпис. Не може да се провери автентичността.';
$lang['SystemUpgrade.!error.upgrade_locked'] = 'Вече е в ход обновяване (започнато от служител с идентификационен номер %1$s на адрес %2$s).';
$lang['SystemUpgrade.!error.upgrader_crashed'] = 'Процесът на обновяване изглежда е спрял неочаквано. Проверете пътищата за архивиране по-долу за възстановяване.';
$lang['SystemUpgrade.!error.upgrader_failed'] = 'Не успя да подготви или стартира процеса на надграждане.';
$lang['SystemUpgrade.environment.config_fail'] = 'Конфигурация: blesta.php не може да се записва.';
$lang['SystemUpgrade.environment.config_pass'] = 'Конфигурация: blesta.php може да се записва.';
$lang['SystemUpgrade.environment.disk_pass'] = 'Дисково пространство: %1$s на разположение.';
$lang['SystemUpgrade.environment.disk_warn'] = 'Дисково пространство: Наличен е само %1$s, необходим е приблизително %2$s.';
$lang['SystemUpgrade.environment.exec_fail'] = 'Достъп до шел: функцията exec() е забранена или не е налична.';
$lang['SystemUpgrade.environment.exec_pass'] = 'Достъп до шел: налична е функцията exec().';
$lang['SystemUpgrade.environment.mysqldump_fail'] = 'Архивиране на базата данни: командата mysqldump не е налична. Моля, инсталирайте инструментите mysql-client.';
$lang['SystemUpgrade.environment.mysqldump_pass'] = 'Архивиране на базата данни: налична е командата mysqldump.';
$lang['SystemUpgrade.environment.os_fail'] = 'Самостоятелното обновяване се поддържа само в средите на Linux.';
$lang['SystemUpgrade.environment.os_pass'] = 'Операционна система: Линукс открити.';
$lang['SystemUpgrade.environment.ownership_fail'] = 'Собственост на файловете: ключовите директории на %1$s не са собственост на потребителя на уеб сървъра.';
$lang['SystemUpgrade.environment.ownership_pass'] = 'Собственост на файла: Всички ключови директории са собственост на потребителя на уеб сървъра.';
$lang['SystemUpgrade.environment.rsync_fail'] = 'Синхронизиране на файлове: командата rsync не е налична. Моля, инсталирайте rsync.';
$lang['SystemUpgrade.environment.rsync_pass'] = 'Синхронизиране на файлове: налична е командата rsync.';
$lang['SystemUpgrade.environment.setsid_pass'] = 'Отделяне на процеса: налична е командата setsid.';
$lang['SystemUpgrade.environment.setsid_warn'] = 'Отделяне на процеса: командата setsid не е налична. За завършване на обновяването може да е необходима ръчна команда чрез SSH в закъсали хостинг среди.';
$lang['SystemUpgrade.environment.tar_fail'] = 'Архивиране на файлове: командата tar не е налична. Моля, инсталирайте tar.';
$lang['SystemUpgrade.environment.tar_pass'] = 'Архивиране на файлове: налична е командата tar.';
$lang['SystemUpgrade.environment.unzip_fail'] = 'Извличане на архив: командата unzip не е налична. Моля, инсталирайте unzip.';
$lang['SystemUpgrade.environment.unzip_pass'] = 'Извличане на архив: налична е командата unzip.';
$lang['SystemUpgrade.environment.writable_fail'] = 'Файлова система: Инсталационната директория не може да се записва от уеб сървъра.';
$lang['SystemUpgrade.environment.writable_pass'] = 'Файлова система: Инсталационната директория може да се записва.';
$lang['SystemUpgrade.maintenance_reason'] = 'В момента системата е в процес на обновяване. Моля, проверете отново скоро.';

