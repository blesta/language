<?php
/**
 * Admin System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.ru_ru
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemUpgrade.index.no_results'] = 'Варианты обновления на данный момент недоступны.';
$lang['AdminSystemUpgrade.index.field_upgradesubmit'] = 'Обновление настроек';
$lang['AdminSystemUpgrade.index.boxtitle_upgrade'] = 'Варианты модернизации';
$lang['AdminSystemUpgrade.index.page_title'] = 'Настройки > Система > Параметры обновления';
$lang['AdminSystemUpgrade.upgrade.btn_abort'] = 'Отмена';
$lang['AdminSystemUpgrade.upgrade.btn_continue'] = 'Продолжить обновление';
$lang['AdminSystemUpgrade.upgrade.label_missing'] = 'Пропавшие файлы';
$lang['AdminSystemUpgrade.upgrade.label_modified'] = 'Измененные файлы';
$lang['AdminSystemUpgrade.upgrade.modified_files_title'] = 'Измененные файлы ядра';
$lang['AdminSystemUpgrade.upgrade.modified_files'] = '%1$s файл(ы) ядра были изменены по сравнению с исходным выпуском. Эти изменения будут перезаписаны во время обновления. Вы хотите продолжить?';
$lang['AdminSystemUpgrade.upgrade.no_checksums'] = 'Файловый манифест текущей установки не содержит контрольных сумм. Проверка целостности файлов будет пропущена. Хотите ли вы продолжить обновление?';
$lang['AdminSystemUpgrade.upgrade.no_manifest'] = 'Для текущей установки не найдено файла манифеста. Проверка целостности файлов будет пропущена. Хотите ли вы продолжить обновление?';
$lang['AdminSystemUpgrade.upgrade.started'] = 'Процесс обновления начался. Вы можете закрыть эту страницу - обновление будет продолжаться в фоновом режиме. Вернитесь на эту страницу, чтобы проверить прогресс.';
$lang['AdminSystemUpgrade.index.failure_db_version_mismatch'] = 'Версия базы данных не достигла ожидаемого значения. Обновление могло остановиться на середине версии, оставив некоторые изменения схемы примененными.';
$lang['AdminSystemUpgrade.index.failure_db_version_after'] = 'Текущий: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_expected'] = 'Ожидается после обновления: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_before'] = 'Перед обновлением: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_label'] = 'Версия базы данных:';
$lang['AdminSystemUpgrade.index.failure_backup_label'] = 'Доступные резервные копии:';
$lang['AdminSystemUpgrade.index.failure_explanation'] = 'Обновление не было успешно завершено. Ваша система может находиться в непоследовательном состоянии, и некоторые изменения в базе данных из неудачной версии могут быть уже применены. Повторный запуск обновления, скорее всего, завершится иначе. Перед повторным запуском рекомендуется восстановить базу данных из резервной копии. Резервные копии были сделаны до начала обновления и перечислены ниже. Чтобы восстановиться, либо восстановите эти резервные копии вручную, либо откройте тикет в службу поддержки для получения помощи.';
$lang['AdminSystemUpgrade.index.recovery_instructions'] = 'Для восстановления из резервной копии выполните на сервере следующие команды:';
$lang['AdminSystemUpgrade.index.failure_heading'] = 'Что делать дальше';
$lang['AdminSystemUpgrade.index.recovery_files_path'] = 'Резервное копирование файлов: %1$s';
$lang['AdminSystemUpgrade.index.recovery_db_path'] = 'Резервное копирование базы данных: %1$s';
$lang['AdminSystemUpgrade.index.heading_recovery'] = 'Инструкции по восстановлению';
$lang['AdminSystemUpgrade.index.confirm_delete_backup'] = 'Вы уверены, что хотите удалить эту резервную копию? Это нельзя отменить.';
$lang['AdminSystemUpgrade.index.btn_delete'] = 'Удалить';
$lang['AdminSystemUpgrade.index.btn_download'] = 'Скачать';
$lang['AdminSystemUpgrade.index.backup_files'] = 'Файлы';
$lang['AdminSystemUpgrade.index.backup_database'] = 'База данных';
$lang['AdminSystemUpgrade.index.backup_col_date'] = 'Дата';
$lang['AdminSystemUpgrade.index.backup_col_size'] = 'Размер';
$lang['AdminSystemUpgrade.index.backup_col_type'] = 'Тип';
$lang['AdminSystemUpgrade.index.backup_col_file'] = 'Файл';
$lang['AdminSystemUpgrade.index.no_backups'] = 'Резервные копии обновлений не найдены.';
$lang['AdminSystemUpgrade.index.heading_backups'] = 'Обновление резервных копий';
$lang['AdminSystemUpgrade.index.btn_clear_lock'] = 'Разрядный замок';
$lang['AdminSystemUpgrade.index.lock_stale'] = 'Похоже, что предыдущий процесс обновления неожиданно завершился.';
$lang['AdminSystemUpgrade.index.lock_active'] = 'В настоящее время идет обновление, начатое на сайте %1$s.';
$lang['AdminSystemUpgrade.index.btn_retry'] = 'Повторная попытка';
$lang['AdminSystemUpgrade.index.btn_dashboard'] = 'Вернуться к приборной панели';
$lang['AdminSystemUpgrade.index.upgrade_failed'] = 'Обновление не удалось.';
$lang['AdminSystemUpgrade.index.upgrade_complete'] = 'Обновление успешно завершено!';
$lang['AdminSystemUpgrade.index.step_finalize'] = 'Завершите работу над сайтом';
$lang['AdminSystemUpgrade.index.step_migrate'] = 'Выполните миграцию базы данных';
$lang['AdminSystemUpgrade.index.step_replace'] = 'Заменить файлы';
$lang['AdminSystemUpgrade.index.step_extract'] = 'Извлечение файлов';
$lang['AdminSystemUpgrade.index.step_verify'] = 'Проверка целостности';
$lang['AdminSystemUpgrade.index.step_download'] = 'Скачать релиз';
$lang['AdminSystemUpgrade.index.step_backup_files'] = 'Резервное копирование файлов';
$lang['AdminSystemUpgrade.index.step_backup_db'] = 'Резервное копирование базы данных';
$lang['AdminSystemUpgrade.index.step_maintenance'] = 'Включить режим обслуживания';
$lang['AdminSystemUpgrade.index.step_preflight'] = 'Предполетные проверки';
$lang['AdminSystemUpgrade.index.heading_progress'] = 'Ход модернизации';
$lang['AdminSystemUpgrade.index.select_version'] = 'Выберите версию для обновления:';
$lang['AdminSystemUpgrade.index.upgrade_warning'] = 'Это позволит включить режим обслуживания, создать резервные копии, загрузить и установить новую версию, а также запустить миграцию базы данных. Этот процесс нельзя прервать после его запуска.';
$lang['AdminSystemUpgrade.index.btn_upgrade'] = 'Обновить сейчас';
$lang['AdminSystemUpgrade.index.clean_stale_files_note'] = 'Удаляет файлы в каталогах ядра, которые не присутствуют в манифесте нового выпуска. Оставьте этот флажок не отмеченным, если вы не уверены, что в каталогах ядра нет пользовательских файлов.';
$lang['AdminSystemUpgrade.index.clean_stale_files'] = 'Удаление устаревших файлов ядра после обновления';
$lang['AdminSystemUpgrade.index.skip_integrity_check'] = 'Пропустить проверку целостности файла';
$lang['AdminSystemUpgrade.index.no_support'] = 'Ваша подписка на поддержку и обновления не активна. Доступны только обновления патчей.';
$lang['AdminSystemUpgrade.index.requires_support'] = 'Требуется активная подписка на поддержку и обновления.';
$lang['AdminSystemUpgrade.index.changelog_link'] = 'Посмотреть журнал изменений';
$lang['AdminSystemUpgrade.index.release_date'] = 'Выпущено: %1$s';
$lang['AdminSystemUpgrade.index.upgrade_latest'] = 'Полное обновление: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.upgrade_patch'] = 'Обновление патча: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.heading_available'] = 'Доступные обновления';
$lang['AdminSystemUpgrade.index.command_copied'] = 'Скопировано';
$lang['AdminSystemUpgrade.index.btn_copy_command'] = 'Копировать';
$lang['AdminSystemUpgrade.index.launch_failed_instruction'] = 'Выполните следующую команду через SSH (от имени пользователя, который является владельцем установки Blesta), чтобы завершить обновление. Оставьте эту страницу открытой - прогресс будет продолжать обновляться здесь во время выполнения команды.';
$lang['AdminSystemUpgrade.index.launch_failed_title'] = 'Фоновое обновление не началось';
$lang['AdminSystemUpgrade.index.environment_badge_warn'] = 'Предупреждение %1$d';
$lang['AdminSystemUpgrade.index.environment_badge_fail'] = '%1$d не удалось';
$lang['AdminSystemUpgrade.index.environment_fail'] = 'Некоторые проверки не удались. Пожалуйста, решите указанные ниже проблемы перед обновлением.';
$lang['AdminSystemUpgrade.index.environment_pass'] = 'Все проверки пройдены. Ваша система готова к самостоятельному обновлению.';
$lang['AdminSystemUpgrade.index.heading_environment'] = 'Состояние окружающей среды';
$lang['AdminSystemUpgrade.index.up_to_date'] = 'Ваша установка обновлена.';
$lang['AdminSystemUpgrade.index.btn_check'] = 'Проверка обновлений';
$lang['AdminSystemUpgrade.index.never_checked'] = 'Никогда не проверял';
$lang['AdminSystemUpgrade.index.last_checked'] = 'Последняя проверка: %1$s';
$lang['AdminSystemUpgrade.index.current_version'] = 'Вы запускаете Blesta %1$s';
$lang['AdminSystemUpgrade.index.heading_current'] = 'Текущая версия';

