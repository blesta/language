<?php
/**
 * Admin System Backup
 *
 * @package blesta
 * @subpackage blesta.language.bg_bg
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemBackup.index.text_note'] = 'Тук можете да изтеглите резервно копие на базата данни на Blesta на вашия компютър или автоматично да качите резервно копие на конфигуриран SFTP и/или Amazon S3 сървър.';
$lang['AdminSystemBackup.index.field_downloadbackup'] = 'Изтегляне на Backup';
$lang['AdminSystemBackup.index.field_uploadbackup'] = 'Принудително архивиране извън сайта';
$lang['AdminSystemBackup.index.boxtitle_index'] = 'При поискване';
$lang['AdminSystemBackup.index.page_title'] = 'Настройки &gt; Система &gt; Резервно копие &gt; При поискване';
$lang['AdminSystemBackup.amazon.field.backupsubmit'] = 'Актуализиране на настройките';
$lang['AdminSystemBackup.amazon.field.amazons3_rate'] = 'Архивиране на всеки';
$lang['AdminSystemBackup.amazon.field.amazons3_bucket'] = 'Кофа';
$lang['AdminSystemBackup.amazon.field.amazons3_secretkey'] = 'Секретен ключ';
$lang['AdminSystemBackup.amazon.field.amazons3_accesskey'] = 'Ключ за достъп';
$lang['AdminSystemBackup.amazon.field.amazons3_region'] = 'Регион';
$lang['AdminSystemBackup.amazon.field.test'] = 'Тестване на тези настройки';
$lang['AdminSystemBackup.amazon.boxtitle_backup'] = 'Amazon S3';
$lang['AdminSystemBackup.amazon.page_title'] = 'Настройки &gt; Система &gt; Резервно копие &gt; Amazon S3';
$lang['AdminSystemBackup.ftp.field.backupsubmit'] = 'Актуализиране на настройките';
$lang['AdminSystemBackup.ftp.field.ftp_rate'] = 'Архивиране на всеки';
$lang['AdminSystemBackup.ftp.field.ftp_path'] = 'Път';
$lang['AdminSystemBackup.ftp.field.ftp_password'] = 'Парола';
$lang['AdminSystemBackup.ftp.field.ftp_username'] = 'Потребителско име';
$lang['AdminSystemBackup.ftp.field.ftp_port'] = 'Пристанище';
$lang['AdminSystemBackup.ftp.field.ftp_host'] = 'Име на хоста';
$lang['AdminSystemBackup.ftp.field.test'] = 'Тестване на тези настройки';
$lang['AdminSystemBackup.ftp.boxtitle_backup'] = 'Защитено FTP';
$lang['AdminSystemBackup.ftp.page_title'] = 'Настройки &gt; Система &gt; Архивиране &gt; Secure FTP';
$lang['AdminSystemBackup.!tooltip.amazons3_rate'] = 'Интервалът на честота на извършване на това архивиране.';
$lang['AdminSystemBackup.!tooltip.amazons3_bucket'] = 'Името на кофата на Amazon S3, в която се съхраняват резервни копия, с отчитане на малките и големите букви.';
$lang['AdminSystemBackup.!tooltip.amazons3_secret_key'] = 'Секретният ключ на акаунта в Amazon S3.';
$lang['AdminSystemBackup.!tooltip.amazons3_access_key'] = 'Ключът за достъп до акаунта в Amazon S3.';
$lang['AdminSystemBackup.!tooltip.amazons3_region'] = 'Регионът на Amazon S3, в който да се съхраняват резервни копия.';
$lang['AdminSystemBackup.!tooltip.ftp_rate'] = 'Интервалът на честота на извършване на това архивиране.';
$lang['AdminSystemBackup.!tooltip.ftp_path'] = 'Пътят до местоназначението, където трябва да се съхраняват резервните копия на отдалечения сървър (напр. "/backup/").';
$lang['AdminSystemBackup.!tooltip.ftp_password'] = 'Паролата за FTP акаунта.';
$lang['AdminSystemBackup.!tooltip.ftp_username'] = 'Потребителското име на FTP акаунта.';
$lang['AdminSystemBackup.!tooltip.ftp_port'] = 'Номерът на порта, обикновено 22. Това е същият номер на порта, който се използва за SSH.';
$lang['AdminSystemBackup.!tooltip.ftp_host'] = 'Пълното име на домейна на сървъра за архивиране (напр. "backup.domain.com").';
$lang['AdminSystemBackup.!error.backup_frequency'] = 'Невалидна честота на архивиране.';
$lang['AdminSystemBackup.!error.amazons3_test'] = 'Връзката с AmazonS3 се провали! Моля, проверете настройките си и опитайте отново. Обърнете внимание, че данните за връзката са чувствителни към малки и големи букви.';
$lang['AdminSystemBackup.!error.sftp_test'] = 'SFTP връзката се провали! Моля, проверете настройките си и опитайте отново.';
$lang['AdminSystemBackup.!success.backup_uploaded'] = 'Резервното копие беше успешно изпратено до конфигурираните отдалечени услуги!';
$lang['AdminSystemBackup.!success.amazons3_test'] = 'Връзката с AmazonS3 е успешна!';
$lang['AdminSystemBackup.!success.sftp_test'] = 'SFTP връзката е успешна!';
$lang['AdminSystemBackup.!success.backup_updated'] = 'Настройките за архивиране бяха успешно актуализирани!';

