<?php
/**
 * Admin System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.bg_bg
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemUpgrade.index.backup_col_date'] = 'Дата';
$lang['AdminSystemUpgrade.index.backup_col_file'] = 'Файл';
$lang['AdminSystemUpgrade.index.backup_col_size'] = 'Размер';
$lang['AdminSystemUpgrade.index.backup_col_type'] = 'Тип';
$lang['AdminSystemUpgrade.index.backup_database'] = 'База данни';
$lang['AdminSystemUpgrade.index.backup_files'] = 'Файлове';
$lang['AdminSystemUpgrade.index.boxtitle_upgrade'] = 'Опции за надграждане';
$lang['AdminSystemUpgrade.index.btn_check'] = 'Проверка за актуализации';
$lang['AdminSystemUpgrade.index.btn_clear_lock'] = 'Ясно заключване';
$lang['AdminSystemUpgrade.index.btn_copy_command'] = 'Копие';
$lang['AdminSystemUpgrade.index.btn_dashboard'] = 'Връщане към таблото за управление';
$lang['AdminSystemUpgrade.index.btn_delete'] = 'Изтриване на';
$lang['AdminSystemUpgrade.index.btn_download'] = 'Изтегляне';
$lang['AdminSystemUpgrade.index.btn_retry'] = 'Повторение';
$lang['AdminSystemUpgrade.index.btn_upgrade'] = 'Актуализирайте сега';
$lang['AdminSystemUpgrade.index.changelog_link'] = 'Преглед на списъка с промени';
$lang['AdminSystemUpgrade.index.clean_stale_files'] = 'Премахване на застояли основни файлове след обновяване';
$lang['AdminSystemUpgrade.index.clean_stale_files_note'] = 'Изтрива файлове в основните директории, които не присъстват в манифеста на новата версия. Оставете без отметка, освен ако не сте сигурни, че в основните директории няма потребителски файлове.';
$lang['AdminSystemUpgrade.index.command_copied'] = 'Копирано';
$lang['AdminSystemUpgrade.index.confirm_delete_backup'] = 'Сигурни ли сте, че искате да изтриете това резервно копие? Това не може да бъде върнато.';
$lang['AdminSystemUpgrade.index.current_version'] = 'Работите с Blesta %1$s';
$lang['AdminSystemUpgrade.index.environment_badge_fail'] = '%1$d не успя';
$lang['AdminSystemUpgrade.index.environment_badge_warn'] = '%1$d предупреждение';
$lang['AdminSystemUpgrade.index.environment_fail'] = 'Някои от проверките са неуспешни. Моля, разрешете проблемите по-долу, преди да надстроите.';
$lang['AdminSystemUpgrade.index.environment_pass'] = 'Всички проверки преминаха успешно. Системата ви е готова за самостоятелно обновяване.';
$lang['AdminSystemUpgrade.index.failure_backup_label'] = 'Налични резервни копия:';
$lang['AdminSystemUpgrade.index.failure_db_version_after'] = 'Текущо: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_before'] = 'Преди надграждане: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_expected'] = 'Очаква се след ъпгрейд: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_label'] = 'Версия на базата данни:';
$lang['AdminSystemUpgrade.index.failure_db_version_mismatch'] = 'Версията на базата данни не е достигнала очакваната стойност. Възможно е обновяването да е спряло по средата на версията, като са останали приложени някои промени в схемата.';
$lang['AdminSystemUpgrade.index.failure_explanation'] = 'Надстройката не е завършила успешно. Възможно е системата ви да е в непоследователно състояние и някои промени в базата данни от неуспешната версия вече да са приложени. Повторното стартиране на надстройката вероятно ще се провали по различен начин. Препоръчва се възстановяване от резервно копие на базата данни, преди да опитате отново. Резервните копия бяха направени преди стартирането на надстройката и са изброени по-долу. За да се възстановите, възстановете тези резервни копия ръчно или отворете билет за поддръжка за съдействие.';
$lang['AdminSystemUpgrade.index.failure_heading'] = 'Какво да правите след това';
$lang['AdminSystemUpgrade.index.field_upgradesubmit'] = 'Актуализиране на настройките';
$lang['AdminSystemUpgrade.index.heading_available'] = 'Налични актуализации';
$lang['AdminSystemUpgrade.index.heading_backups'] = 'Надграждане на резервни копия';
$lang['AdminSystemUpgrade.index.heading_current'] = 'Текуща версия';
$lang['AdminSystemUpgrade.index.heading_environment'] = 'Състояние на околната среда';
$lang['AdminSystemUpgrade.index.heading_progress'] = 'Напредък на обновяването';
$lang['AdminSystemUpgrade.index.heading_recovery'] = 'Инструкции за възстановяване';
$lang['AdminSystemUpgrade.index.last_checked'] = 'Последна проверка: %1$s';
$lang['AdminSystemUpgrade.index.launch_failed_instruction'] = 'Изпълнете следната команда чрез SSH (като потребител, който притежава инсталацията на Blesta), за да завършите обновяването. Оставете тази страница отворена - напредъкът ще продължи да се актуализира тук, докато се изпълнява командата.';
$lang['AdminSystemUpgrade.index.launch_failed_title'] = 'Обновяването на фона не започна';
$lang['AdminSystemUpgrade.index.lock_active'] = 'В момента се извършва обновяване, което започна на адрес %1$s.';
$lang['AdminSystemUpgrade.index.lock_stale'] = 'Изглежда, че предишен процес на обновяване е спрял неочаквано.';
$lang['AdminSystemUpgrade.index.never_checked'] = 'Никога не е проверявано';
$lang['AdminSystemUpgrade.index.no_backups'] = 'Не са открити резервни копия за обновяване.';
$lang['AdminSystemUpgrade.index.no_results'] = 'Към момента не са налични опции за надграждане.';
$lang['AdminSystemUpgrade.index.no_support'] = 'Абонаментът ви за поддръжка и актуализации не е активен. Налични са само актуализации на пачове.';
$lang['AdminSystemUpgrade.index.page_title'] = 'Настройки &gt; Система &gt; Опции за надграждане';
$lang['AdminSystemUpgrade.index.recovery_db_path'] = 'Архивиране на базата данни: %1$s';
$lang['AdminSystemUpgrade.index.recovery_files_path'] = 'Архивиране на файлове: %1$s';
$lang['AdminSystemUpgrade.index.recovery_instructions'] = 'За да възстановите от резервно копие, изпълнете следните команди на вашия сървър:';
$lang['AdminSystemUpgrade.index.release_date'] = 'Освободен: %1$s';
$lang['AdminSystemUpgrade.index.requires_support'] = 'Изисква активен абонамент за поддръжка и актуализации.';
$lang['AdminSystemUpgrade.index.select_version'] = 'Изберете версия, до която да надстроите:';
$lang['AdminSystemUpgrade.index.skip_integrity_check'] = 'Пропускане на проверката за цялост на файла';
$lang['AdminSystemUpgrade.index.step_backup_db'] = 'Архивиране на базата данни';
$lang['AdminSystemUpgrade.index.step_backup_files'] = 'Архивиране на файлове';
$lang['AdminSystemUpgrade.index.step_download'] = 'Изтегляне на версия';
$lang['AdminSystemUpgrade.index.step_extract'] = 'Извличане на файлове';
$lang['AdminSystemUpgrade.index.step_finalize'] = 'Финализиране на';
$lang['AdminSystemUpgrade.index.step_maintenance'] = 'Активиране на режим на поддръжка';
$lang['AdminSystemUpgrade.index.step_migrate'] = 'Стартиране на миграции на бази данни';
$lang['AdminSystemUpgrade.index.step_preflight'] = 'Проверки преди полет';
$lang['AdminSystemUpgrade.index.step_replace'] = 'Замяна на файлове';
$lang['AdminSystemUpgrade.index.step_verify'] = 'Проверка на целостта';
$lang['AdminSystemUpgrade.index.up_to_date'] = 'Инсталацията ви е актуализирана.';
$lang['AdminSystemUpgrade.index.upgrade_complete'] = 'Актуализацията е завършена успешно!';
$lang['AdminSystemUpgrade.index.upgrade_failed'] = 'Надграждането е неуспешно.';
$lang['AdminSystemUpgrade.index.upgrade_latest'] = 'Пълно обновяване: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.upgrade_patch'] = 'Актуализация на кръпката: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.upgrade_warning'] = 'Това ще активира режим на поддръжка, ще създаде резервни копия, ще изтегли и инсталира новата версия и ще стартира миграция на базата данни. Този процес не може да бъде прекъснат, след като е започнал.';
$lang['AdminSystemUpgrade.upgrade.btn_abort'] = 'Отмяна на';
$lang['AdminSystemUpgrade.upgrade.btn_continue'] = 'Продължете с надстройката';
$lang['AdminSystemUpgrade.upgrade.label_missing'] = 'Липсващи файлове';
$lang['AdminSystemUpgrade.upgrade.label_modified'] = 'Променени файлове';
$lang['AdminSystemUpgrade.upgrade.modified_files'] = '%1$s ядрото е променено в сравнение с първоначалното издание. Тези промени ще бъдат презаписани по време на обновяването. Искате ли да продължите?';
$lang['AdminSystemUpgrade.upgrade.modified_files_title'] = 'Променени основни файлове';
$lang['AdminSystemUpgrade.upgrade.no_checksums'] = 'Файловият манифест за текущата ви инсталация не включва контролни суми. Проверката на целостта на файла ще бъде пропусната. Искате ли да продължите с обновяването?';
$lang['AdminSystemUpgrade.upgrade.no_manifest'] = 'Не беше намерен манифест на файловете за текущата ви инсталация. Проверката на целостта на файла ще бъде пропусната. Искате ли да продължите с обновяването?';
$lang['AdminSystemUpgrade.upgrade.started'] = 'Процесът на обновяване започна. Можете да затворите тази страница - обновяването ще продължи във фонов режим. Върнете се на тази страница, за да проверите напредъка.';

