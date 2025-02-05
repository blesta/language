<?php
/**
 * Admin System Backup
 *
 * @package blesta
 * @subpackage blesta.language.ru_ru
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemBackup.index.text_note'] = 'Здесь вы можете скачать резервную копию базы данных Blesta на свой компьютер или автоматически загрузить ее на настроенный сервер SFTP и/или Amazon S3.';
$lang['AdminSystemBackup.index.field_downloadbackup'] = 'Скачать резервное копирование';
$lang['AdminSystemBackup.index.field_uploadbackup'] = 'Принудительное резервное копирование вне офиса';
$lang['AdminSystemBackup.index.boxtitle_index'] = 'По требованию';
$lang['AdminSystemBackup.index.page_title'] = 'Настройки > Система > Резервное копирование > По требованию';
$lang['AdminSystemBackup.amazon.field.backupsubmit'] = 'Обновление настроек';
$lang['AdminSystemBackup.amazon.field.amazons3_rate'] = 'Резервное копирование каждый';
$lang['AdminSystemBackup.amazon.field.amazons3_bucket'] = 'Ведро';
$lang['AdminSystemBackup.amazon.field.amazons3_secretkey'] = 'Секретный ключ';
$lang['AdminSystemBackup.amazon.field.amazons3_accesskey'] = 'Ключ доступа';
$lang['AdminSystemBackup.amazon.field.amazons3_region'] = 'Регион';
$lang['AdminSystemBackup.amazon.field.test'] = 'Проверьте эти настройки';
$lang['AdminSystemBackup.amazon.boxtitle_backup'] = 'Amazon S3';
$lang['AdminSystemBackup.amazon.page_title'] = 'Настройки > Система > Резервное копирование > Amazon S3';
$lang['AdminSystemBackup.ftp.field.backupsubmit'] = 'Обновление настроек';
$lang['AdminSystemBackup.ftp.field.ftp_rate'] = 'Резервное копирование каждый';
$lang['AdminSystemBackup.ftp.field.ftp_path'] = 'Путь';
$lang['AdminSystemBackup.ftp.field.ftp_password'] = 'Пароль';
$lang['AdminSystemBackup.ftp.field.ftp_username'] = 'Имя пользователя';
$lang['AdminSystemBackup.ftp.field.ftp_port'] = 'Порт';
$lang['AdminSystemBackup.ftp.field.ftp_host'] = 'Имя хоста';
$lang['AdminSystemBackup.ftp.field.test'] = 'Проверьте эти настройки';
$lang['AdminSystemBackup.ftp.boxtitle_backup'] = 'Безопасный FTP';
$lang['AdminSystemBackup.ftp.page_title'] = 'Настройки > Система > Резервное копирование > Безопасный FTP';
$lang['AdminSystemBackup.!tooltip.amazons3_rate'] = 'Частотный интервал для выполнения этого резервного копирования.';
$lang['AdminSystemBackup.!tooltip.amazons3_bucket'] = 'Имя ведра Amazon S3, в котором будут храниться резервные копии, с учетом регистра.';
$lang['AdminSystemBackup.!tooltip.amazons3_secret_key'] = 'Секретный ключ учетной записи Amazon S3.';
$lang['AdminSystemBackup.!tooltip.amazons3_access_key'] = 'Ключ доступа к учетной записи Amazon S3.';
$lang['AdminSystemBackup.!tooltip.amazons3_region'] = 'Регион Amazon S3, в котором будут храниться резервные копии.';
$lang['AdminSystemBackup.!tooltip.ftp_rate'] = 'Частотный интервал для выполнения этого резервного копирования.';
$lang['AdminSystemBackup.!tooltip.ftp_path'] = 'Путь назначения, по которому резервные копии должны храниться на удаленном сервере (например, "/backup/").';
$lang['AdminSystemBackup.!tooltip.ftp_password'] = 'Пароль для учетной записи FTP.';
$lang['AdminSystemBackup.!tooltip.ftp_username'] = 'Имя пользователя для учетной записи FTP.';
$lang['AdminSystemBackup.!tooltip.ftp_port'] = 'Номер порта, обычно 22. Это тот же номер порта, который используется для SSH.';
$lang['AdminSystemBackup.!tooltip.ftp_host'] = 'Полное доменное имя сервера резервного копирования (например, "backup.domain.com").';
$lang['AdminSystemBackup.!error.backup_frequency'] = 'Недопустимая частота резервного копирования.';
$lang['AdminSystemBackup.!error.amazons3_test'] = 'Не удалось установить соединение с AmazonS3! Пожалуйста, проверьте настройки и повторите попытку. Обратите внимание, что данные подключения чувствительны к регистру.';
$lang['AdminSystemBackup.!error.sftp_test'] = 'Не удалось установить SFTP-соединение! Пожалуйста, проверьте настройки и повторите попытку.';
$lang['AdminSystemBackup.!success.backup_uploaded'] = 'Резервная копия была успешно отправлена в настроенные удаленные службы!';
$lang['AdminSystemBackup.!success.amazons3_test'] = 'Подключение AmazonS3 прошло успешно!';
$lang['AdminSystemBackup.!success.sftp_test'] = 'SFTP-соединение прошло успешно!';
$lang['AdminSystemBackup.!success.backup_updated'] = 'Настройки резервного копирования были успешно обновлены!';

