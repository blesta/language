<?php
/**
 * System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.uk_ua
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SystemUpgrade.environment.os_pass'] = 'Операційна система: Виявлено Linux.';
$lang['SystemUpgrade.environment.os_fail'] = 'Самостійне оновлення підтримується лише у середовищі Linux.';
$lang['SystemUpgrade.environment.exec_pass'] = 'Доступ до оболонки: доступна функція exec().';
$lang['SystemUpgrade.environment.exec_fail'] = 'Доступ до оболонки: функція exec() вимкнена або недоступна.';
$lang['SystemUpgrade.environment.unzip_pass'] = 'Розархівування архіву: доступна команда розархівування.';
$lang['SystemUpgrade.environment.unzip_fail'] = 'Розархівування архіву: команда unzip недоступна. Будь ласка, встановіть unzip.';
$lang['SystemUpgrade.environment.mysqldump_pass'] = 'Резервне копіювання бази даних: доступна команда mysqldump.';
$lang['SystemUpgrade.environment.mysqldump_fail'] = 'Резервне копіювання бази даних: команда mysqldump недоступна. Будь ласка, встановіть інструменти mysql-клієнта.';
$lang['SystemUpgrade.environment.tar_pass'] = 'Доступна команда резервного копіювання файлів: tar.';
$lang['SystemUpgrade.environment.tar_fail'] = 'Резервне копіювання файлів: команда tar недоступна. Будь ласка, встановіть tar.';
$lang['SystemUpgrade.environment.rsync_pass'] = 'Синхронізація файлів: доступна команда rsync.';
$lang['SystemUpgrade.environment.rsync_fail'] = 'Синхронізація файлів: команда rsync недоступна. Будь ласка, встановіть rsync.';
$lang['SystemUpgrade.environment.setsid_pass'] = 'Відокремлення процесу: доступна команда setsid.';
$lang['SystemUpgrade.environment.setsid_warn'] = 'Від\'єднання процесу: команда setsid недоступна. Для завершення оновлення може знадобитися ручна команда через SSH на хостингових середовищах з обмеженим доступом.';
$lang['SystemUpgrade.environment.writable_pass'] = 'Файлова система: Каталог встановлення доступний для запису.';
$lang['SystemUpgrade.environment.writable_fail'] = 'Файлова система: Каталог інсталяції не доступний для запису веб-сервером.';
$lang['SystemUpgrade.environment.ownership_pass'] = 'Право власності на файли: Всі ключові каталоги належать користувачеві веб-сервера.';
$lang['SystemUpgrade.environment.ownership_fail'] = 'Право власності на файли: ключові каталоги %1$s не належать користувачеві веб-сервера.';
$lang['SystemUpgrade.environment.disk_pass'] = 'Місце на диску: %1$s доступне.';
$lang['SystemUpgrade.environment.disk_warn'] = 'Дисковий простір: Доступно лише %1$s, потрібно приблизно %2$s.';
$lang['SystemUpgrade.environment.config_pass'] = 'Конфігурація: blesta.php доступний для запису.';
$lang['SystemUpgrade.environment.config_fail'] = 'Конфігурація: blesta.php не доступний для запису.';
$lang['SystemUpgrade.maintenance_reason'] = 'Наразі система модернізується. Будь ласка, перевірте найближчим часом.';
$lang['SystemUpgrade.!error.upgrade_locked'] = 'Оновлення вже триває (розпочато за ідентифікатором співробітника %1$s на %2$s).';
$lang['SystemUpgrade.!error.lock_stale'] = 'Здається, попередній процес оновлення було несподівано зупинено. Ви можете зняти блокування, щоб спробувати ще раз.';
$lang['SystemUpgrade.!error.backup_db_failed'] = 'Не вдалося створити резервну копію бази даних. Оновлення не може бути виконано без надійної резервної копії.';
$lang['SystemUpgrade.!error.backup_files_failed'] = 'Не вдалося створити резервну копію файлів. Оновлення не може бути виконано без надійної резервної копії.';
$lang['SystemUpgrade.!error.download_failed'] = 'Не вдалося завантажити файл релізу.';
$lang['SystemUpgrade.!error.hash_mismatch'] = 'Не вдалося перевірити цілісність завантаженого файлу. Файл може бути пошкоджений.';
$lang['SystemUpgrade.!error.signature_missing'] = 'Реліз не містить криптографічного підпису. Неможливо перевірити справжність.';
$lang['SystemUpgrade.!error.signature_invalid'] = 'Не вдалося виконати перевірку підпису релізу. Можливо, файл було підроблено.';
$lang['SystemUpgrade.!error.extraction_failed'] = 'Не вдалося розпакувати архів випуску.';
$lang['SystemUpgrade.!error.upgrader_failed'] = 'Не вдалося підготувати або запустити процес оновлення.';
$lang['SystemUpgrade.!error.launch_not_detected'] = 'Фоновий процес оновлення не розпочався. Це може статися на хостингу з обмеженим доступом (CloudLinux/CageFS, деякі конфігурації PHP-FPM), де веб-серверу не дозволено від\'єднувати довготривалі дочірні процеси. Оновлення можна завершити, виконавши команду нижче через SSH.';
$lang['SystemUpgrade.!error.upgrader_crashed'] = 'Здається, процес оновлення несподівано зупинився. Перевірте шляхи до резервних копій нижче для відновлення.';
$lang['SystemUpgrade.!error.license_invalid'] = 'Ваша підписка на підтримку та оновлення має бути активною для отримання великих або малих оновлень версії.';
$lang['SystemUpgrade.!error.php_version'] = 'Для роботи цільового випуску потрібно PHP %1$s або новішої версії. У вас запущено PHP %2$s.';
$lang['SystemUpgrade.!error.environment_fail'] = 'Не вдалося виконати одну або декілька перевірок середовища. Будь ласка, вирішіть проблеми перед оновленням.';

