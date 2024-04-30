<?php
/**
 * Admin System Backup
 *
 * @package blesta
 * @subpackage blesta.language.uk_ua
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemBackup.index.text_note'] = 'Тут ви можете завантажити резервну копію бази даних Blesta на свій комп\'ютер або автоматично завантажити резервну копію на налаштований SFTP та/або Amazon S3 сервер.';
$lang['AdminSystemBackup.index.field_downloadbackup'] = 'Завантажити резервну копію';
$lang['AdminSystemBackup.index.field_uploadbackup'] = 'Примусове резервне копіювання за межами сайту';
$lang['AdminSystemBackup.index.boxtitle_index'] = 'На вимогу';
$lang['AdminSystemBackup.index.page_title'] = 'Налаштування > Система > Резервне копіювання > На вимогу';
$lang['AdminSystemBackup.amazon.field.backupsubmit'] = 'Оновлення налаштувань';
$lang['AdminSystemBackup.amazon.field.amazons3_rate'] = 'Створити резервну копію кожного';
$lang['AdminSystemBackup.amazon.field.amazons3_bucket'] = 'Відро.';
$lang['AdminSystemBackup.amazon.field.amazons3_secretkey'] = 'Секретний ключ';
$lang['AdminSystemBackup.amazon.field.amazons3_accesskey'] = 'Ключ доступу';
$lang['AdminSystemBackup.amazon.field.amazons3_region'] = 'Регіон';
$lang['AdminSystemBackup.amazon.field.test'] = 'Перевірте ці налаштування';
$lang['AdminSystemBackup.amazon.boxtitle_backup'] = 'Amazon S3';
$lang['AdminSystemBackup.amazon.page_title'] = 'Налаштування > Система > Резервне копіювання > Amazon S3';
$lang['AdminSystemBackup.ftp.field.backupsubmit'] = 'Оновлення налаштувань';
$lang['AdminSystemBackup.ftp.field.ftp_rate'] = 'Створити резервну копію кожного';
$lang['AdminSystemBackup.ftp.field.ftp_path'] = 'Шлях';
$lang['AdminSystemBackup.ftp.field.ftp_password'] = 'Пароль';
$lang['AdminSystemBackup.ftp.field.ftp_username'] = 'Ім\'я користувача';
$lang['AdminSystemBackup.ftp.field.ftp_port'] = 'Порт';
$lang['AdminSystemBackup.ftp.field.ftp_host'] = 'Ім\'я хоста';
$lang['AdminSystemBackup.ftp.field.test'] = 'Перевірте ці налаштування';
$lang['AdminSystemBackup.ftp.boxtitle_backup'] = 'Безпечний FTP';
$lang['AdminSystemBackup.ftp.page_title'] = 'Налаштування > Система > Резервне копіювання > Безпечний FTP';
$lang['AdminSystemBackup.!tooltip.amazons3_rate'] = 'Інтервал частоти для виконання цього резервного копіювання.';
$lang['AdminSystemBackup.!tooltip.amazons3_bucket'] = 'Назва чутливого до регістру відра Amazon S3, в якому зберігаються резервні копії.';
$lang['AdminSystemBackup.!tooltip.amazons3_secret_key'] = 'Секретний ключ облікового запису Amazon S3.';
$lang['AdminSystemBackup.!tooltip.amazons3_access_key'] = 'Ключ доступу до облікового запису Amazon S3.';
$lang['AdminSystemBackup.!tooltip.amazons3_region'] = 'Регіон Amazon S3, в якому зберігаються резервні копії.';
$lang['AdminSystemBackup.!tooltip.ftp_rate'] = 'Інтервал частоти для виконання цього резервного копіювання.';
$lang['AdminSystemBackup.!tooltip.ftp_path'] = 'Шлях призначення, куди слід зберігати резервні копії на віддаленому сервері (наприклад, "/backup/").';
$lang['AdminSystemBackup.!tooltip.ftp_password'] = 'Пароль до FTP-акаунта.';
$lang['AdminSystemBackup.!tooltip.ftp_username'] = 'Ім\'я користувача для FTP-акаунта.';
$lang['AdminSystemBackup.!tooltip.ftp_port'] = 'Номер порту, зазвичай 22. Це той самий номер порту, який використовується для SSH.';
$lang['AdminSystemBackup.!tooltip.ftp_host'] = 'Повне доменне ім\'я сервера резервного копіювання (наприклад, "backup.domain.com").';
$lang['AdminSystemBackup.!error.backup_frequency'] = 'Неправильна резервна частота.';
$lang['AdminSystemBackup.!error.amazons3_test'] = 'Не вдалося встановити з\'єднання з AmazonS3! Будь ласка, перевірте ваші налаштування та спробуйте ще раз. Зверніть увагу, що дані підключення чутливі до регістру.';
$lang['AdminSystemBackup.!error.sftp_test'] = 'Не вдалося з\'єднатися з SFTP! Будь ласка, перевірте ваші налаштування та спробуйте ще раз.';
$lang['AdminSystemBackup.!success.backup_uploaded'] = 'Резервну копію успішно надіслано на налаштовані віддалені сервіси!';
$lang['AdminSystemBackup.!success.amazons3_test'] = 'Підключення до AmazonS3 пройшло успішно!';
$lang['AdminSystemBackup.!success.sftp_test'] = 'Підключення до SFTP відбулося успішно!';
$lang['AdminSystemBackup.!success.backup_updated'] = 'Налаштування резервного копіювання успішно оновлено!';

