<?php
/**
 * System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.ru_ru
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SystemUpgrade.!error.backup_db_failed'] = 'Резервное копирование базы данных не удалось. Обновление не может быть продолжено без надежного резервного копирования.';
$lang['SystemUpgrade.!error.backup_files_failed'] = 'Резервное копирование файлов не удалось. Обновление не может быть продолжено без надежного резервного копирования.';
$lang['SystemUpgrade.!error.download_failed'] = 'Не удалось загрузить файл выпуска.';
$lang['SystemUpgrade.!error.environment_fail'] = 'Одна или несколько проверок среды завершились неудачно. Пожалуйста, решите проблемы перед обновлением.';
$lang['SystemUpgrade.!error.extraction_failed'] = 'Не удалось извлечь архив релиза.';
$lang['SystemUpgrade.!error.hash_mismatch'] = 'Проверка целостности загруженного файла не удалась. Файл может быть поврежден.';
$lang['SystemUpgrade.!error.launch_not_detected'] = 'Фоновый процесс обновления не запустился. Это может произойти в средах хостинга с jailed (CloudLinux/CageFS, некоторые конфигурации PHP-FPM), где веб-серверу не разрешено отсоединять долго работающие дочерние процессы. Обновление можно завершить, выполнив приведенную ниже команду по SSH.';
$lang['SystemUpgrade.!error.license_invalid'] = 'Ваша подписка на поддержку и обновления должна быть активна для обновления крупных или мелких версий.';
$lang['SystemUpgrade.!error.lock_stale'] = 'Похоже, что предыдущий процесс обновления неожиданно завершился. Вы можете снять блокировку, чтобы повторить попытку.';
$lang['SystemUpgrade.!error.php_version'] = 'Для целевого выпуска требуется PHP %1$s или более новая версия. Вы используете PHP %2$s.';
$lang['SystemUpgrade.!error.signature_invalid'] = 'Проверка подписи релиза не удалась. Возможно, файл был подделан.';
$lang['SystemUpgrade.!error.signature_missing'] = 'Релиз не содержит криптографической подписи. Невозможно проверить подлинность.';
$lang['SystemUpgrade.!error.upgrade_locked'] = 'Обновление уже идет (его начал сотрудник с идентификатором %1$s по адресу %2$s).';
$lang['SystemUpgrade.!error.upgrader_crashed'] = 'Похоже, что процесс обновления неожиданно завершился. Проверьте приведенные ниже пути резервного копирования для восстановления.';
$lang['SystemUpgrade.!error.upgrader_failed'] = 'Не удалось подготовить или запустить процесс обновления.';
$lang['SystemUpgrade.environment.config_fail'] = 'Конфигурация: файл blesta.php не доступен для записи.';
$lang['SystemUpgrade.environment.config_pass'] = 'Конфигурация: файл blesta.php доступен для записи.';
$lang['SystemUpgrade.environment.disk_pass'] = 'Дисковое пространство: %1$s доступно.';
$lang['SystemUpgrade.environment.disk_warn'] = 'Дисковое пространство: Доступно только %1$s, требуется примерно %2$s.';
$lang['SystemUpgrade.environment.exec_fail'] = 'Доступ к оболочке: функция exec() отключена или недоступна.';
$lang['SystemUpgrade.environment.exec_pass'] = 'Доступ к оболочке: доступна функция exec().';
$lang['SystemUpgrade.environment.mysqldump_fail'] = 'Резервное копирование базы данных: команда mysqldump недоступна. Пожалуйста, установите инструменты mysql-client.';
$lang['SystemUpgrade.environment.mysqldump_pass'] = 'Резервное копирование базы данных: доступна команда mysqldump.';
$lang['SystemUpgrade.environment.os_fail'] = 'Самообновление поддерживается только в средах Linux.';
$lang['SystemUpgrade.environment.os_pass'] = 'Операционная система: Обнаружен Linux.';
$lang['SystemUpgrade.environment.ownership_fail'] = 'Право собственности на файлы: каталоги ключей %1$s не принадлежат пользователю веб-сервера.';
$lang['SystemUpgrade.environment.ownership_pass'] = 'Право собственности на файлы: Все ключевые каталоги принадлежат пользователю веб-сервера.';
$lang['SystemUpgrade.environment.rsync_fail'] = 'Синхронизация файлов: команда rsync недоступна. Пожалуйста, установите rsync.';
$lang['SystemUpgrade.environment.rsync_pass'] = 'Синхронизация файлов: доступна команда rsync.';
$lang['SystemUpgrade.environment.setsid_pass'] = 'Отсоединение процесса: доступна команда setid.';
$lang['SystemUpgrade.environment.setsid_warn'] = 'Отсоединение процесса: команда setid недоступна. Для обновления может потребоваться ручная команда через SSH, чтобы завершить обновление в средах хостинга, находящихся в тюрьме.';
$lang['SystemUpgrade.environment.tar_fail'] = 'Резервное копирование файлов: команда tar недоступна. Пожалуйста, установите tar.';
$lang['SystemUpgrade.environment.tar_pass'] = 'Резервное копирование файлов: доступна команда tar.';
$lang['SystemUpgrade.environment.unzip_fail'] = 'Извлечение архива: команда unzip недоступна. Пожалуйста, установите unzip.';
$lang['SystemUpgrade.environment.unzip_pass'] = 'Извлечение архивов: доступна команда unzip.';
$lang['SystemUpgrade.environment.writable_fail'] = 'Файловая система: Каталог установки не доступен для записи веб-сервером.';
$lang['SystemUpgrade.environment.writable_pass'] = 'Файловая система: Каталог установки доступен для записи.';
$lang['SystemUpgrade.maintenance_reason'] = 'В настоящее время система обновляется. Пожалуйста, зайдите на сайт в ближайшее время.';

