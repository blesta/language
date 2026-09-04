<?php
/**
 * Admin System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.uk_ua
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemUpgrade.index.backup_col_date'] = 'Дата';
$lang['AdminSystemUpgrade.index.backup_col_file'] = 'Файл';
$lang['AdminSystemUpgrade.index.backup_col_size'] = 'Розмір';
$lang['AdminSystemUpgrade.index.backup_col_type'] = 'Тип';
$lang['AdminSystemUpgrade.index.backup_database'] = 'База даних';
$lang['AdminSystemUpgrade.index.backup_files'] = 'Файли';
$lang['AdminSystemUpgrade.index.boxtitle_upgrade'] = 'Варіанти оновлення';
$lang['AdminSystemUpgrade.index.btn_check'] = 'Перевірте наявність оновлень';
$lang['AdminSystemUpgrade.index.btn_clear_lock'] = 'Очистити замок.';
$lang['AdminSystemUpgrade.index.btn_copy_command'] = 'Зрозумів.';
$lang['AdminSystemUpgrade.index.btn_dashboard'] = 'Повернутися до Панелі керування';
$lang['AdminSystemUpgrade.index.btn_delete'] = 'Видалити';
$lang['AdminSystemUpgrade.index.btn_download'] = 'Завантажити';
$lang['AdminSystemUpgrade.index.btn_retry'] = 'Спробуйте ще раз.';
$lang['AdminSystemUpgrade.index.btn_upgrade'] = 'Оновити зараз';
$lang['AdminSystemUpgrade.index.changelog_link'] = 'Переглянути журнал змін';
$lang['AdminSystemUpgrade.index.clean_stale_files'] = 'Видалення застарілих файлів ядра після оновлення';
$lang['AdminSystemUpgrade.index.clean_stale_files_note'] = 'Видаляє файли у основних каталогах, яких немає у маніфесті нового випуску. Не позначайте цей пункт, якщо ви не впевнені, що в основних каталогах не існує користувацьких файлів.';
$lang['AdminSystemUpgrade.index.command_copied'] = 'Зрозумів.';
$lang['AdminSystemUpgrade.index.confirm_delete_backup'] = 'Ви впевнені, що хочете видалити цю резервну копію? Це не можна скасувати.';
$lang['AdminSystemUpgrade.index.current_version'] = 'Ти керуєш "Блестою". %1$s';
$lang['AdminSystemUpgrade.index.environment_badge_fail'] = '%1$d не вдалося';
$lang['AdminSystemUpgrade.index.environment_badge_warn'] = 'Попередження %1$d';
$lang['AdminSystemUpgrade.index.environment_fail'] = 'Деякі перевірки не пройшли. Будь ласка, вирішіть наведені нижче проблеми перед оновленням.';
$lang['AdminSystemUpgrade.index.environment_pass'] = 'Всі перевірки пройдено. Ваша система готова до самооновлення.';
$lang['AdminSystemUpgrade.index.failure_backup_label'] = 'Доступні резервні копії:';
$lang['AdminSystemUpgrade.index.failure_db_version_after'] = 'Течія: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_before'] = 'Перед оновленням: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_expected'] = 'Очікується після оновлення: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_label'] = 'Версія бази даних:';
$lang['AdminSystemUpgrade.index.failure_db_version_mismatch'] = 'Версія бази даних не досягла очікуваного значення. Можливо, оновлення зупинилося на півдорозі версії, залишивши деякі зміни схеми застосованими.';
$lang['AdminSystemUpgrade.index.failure_explanation'] = 'Оновлення не завершилося успішно. Можливо, ваша система перебуває в неузгодженому стані, і деякі зміни в базі даних з невдалої версії вже були застосовані. Повторний запуск оновлення, ймовірно, завершиться інакше. Перед повторною спробою рекомендується відновитися з резервної копії бази даних. Резервні копії було створено перед початком оновлення, і вони перелічені нижче. Для відновлення відновіть ці резервні копії вручну або зверніться до служби підтримки за допомогою.';
$lang['AdminSystemUpgrade.index.failure_heading'] = 'Що робити далі';
$lang['AdminSystemUpgrade.index.field_upgradesubmit'] = 'Оновлення налаштувань';
$lang['AdminSystemUpgrade.index.heading_available'] = 'Доступні оновлення';
$lang['AdminSystemUpgrade.index.heading_backups'] = 'Оновлення резервних копій';
$lang['AdminSystemUpgrade.index.heading_current'] = 'Поточна версія';
$lang['AdminSystemUpgrade.index.heading_environment'] = 'Стан навколишнього середовища';
$lang['AdminSystemUpgrade.index.heading_progress'] = 'Прогрес оновлення';
$lang['AdminSystemUpgrade.index.heading_recovery'] = 'Інструкції з відновлення';
$lang['AdminSystemUpgrade.index.last_checked'] = 'Останній раз перевіряв: %1$s';
$lang['AdminSystemUpgrade.index.launch_failed_instruction'] = 'Запустіть наступну команду через SSH (від імені користувача, якому належить інсталяція Blesta), щоб завершити оновлення. Залиште цю сторінку відкритою - під час виконання команди оновлення буде продовжуватися.';
$lang['AdminSystemUpgrade.index.launch_failed_title'] = 'Оновлення у фоновому режимі не розпочалося';
$lang['AdminSystemUpgrade.index.lock_active'] = 'Наразі триває оновлення, яке розпочато за адресою %1$s.';
$lang['AdminSystemUpgrade.index.lock_stale'] = 'Попередній процес оновлення несподівано зупинився.';
$lang['AdminSystemUpgrade.index.never_checked'] = 'Ніколи не перевіряв.';
$lang['AdminSystemUpgrade.index.no_backups'] = 'Резервні копії оновлень не знайдено.';
$lang['AdminSystemUpgrade.index.no_results'] = 'Наразі опції оновлення недоступні.';
$lang['AdminSystemUpgrade.index.no_support'] = 'Ваша підписка на підтримку та оновлення не активна. Доступні лише оновлення патчів.';
$lang['AdminSystemUpgrade.index.page_title'] = 'Налаштування > Система > Параметри оновлення';
$lang['AdminSystemUpgrade.index.recovery_db_path'] = 'Резервна копія бази даних: %1$s';
$lang['AdminSystemUpgrade.index.recovery_files_path'] = 'Резервна копія файлів: %1$s';
$lang['AdminSystemUpgrade.index.recovery_instructions'] = 'Для відновлення з резервної копії виконайте на сервері наступні команди:';
$lang['AdminSystemUpgrade.index.release_date'] = 'Звільнено: %1$s';
$lang['AdminSystemUpgrade.index.requires_support'] = 'Потрібна активна підписка на підтримку та оновлення.';
$lang['AdminSystemUpgrade.index.select_version'] = 'Виберіть версію, до якої хочете оновитися:';
$lang['AdminSystemUpgrade.index.skip_integrity_check'] = 'Пропустити перевірку цілісності файлу';
$lang['AdminSystemUpgrade.index.step_backup_db'] = 'Резервне копіювання бази даних';
$lang['AdminSystemUpgrade.index.step_backup_files'] = 'Резервне копіювання файлів';
$lang['AdminSystemUpgrade.index.step_download'] = 'Завантажити реліз';
$lang['AdminSystemUpgrade.index.step_extract'] = 'Витягнути файли';
$lang['AdminSystemUpgrade.index.step_finalize'] = 'Завершити';
$lang['AdminSystemUpgrade.index.step_maintenance'] = 'Увімкнути режим технічного обслуговування';
$lang['AdminSystemUpgrade.index.step_migrate'] = 'Запустіть міграцію баз даних';
$lang['AdminSystemUpgrade.index.step_preflight'] = 'Передпольотні перевірки';
$lang['AdminSystemUpgrade.index.step_replace'] = 'Замінити файли';
$lang['AdminSystemUpgrade.index.step_verify'] = 'Перевірте цілісність';
$lang['AdminSystemUpgrade.index.up_to_date'] = 'Ваша інсталяція оновлена.';
$lang['AdminSystemUpgrade.index.upgrade_complete'] = 'Оновлення успішно завершено!';
$lang['AdminSystemUpgrade.index.upgrade_failed'] = 'Оновлення не вдалося.';
$lang['AdminSystemUpgrade.index.upgrade_latest'] = 'Повне оновлення: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.upgrade_patch'] = 'Оновлення патчу: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.upgrade_warning'] = 'Це дозволить увімкнути режим обслуговування, створити резервні копії, завантажити та встановити нову версію, а також виконати міграцію бази даних. Цей процес не може бути перерваний після запуску.';
$lang['AdminSystemUpgrade.upgrade.btn_abort'] = 'Скасувати';
$lang['AdminSystemUpgrade.upgrade.btn_continue'] = 'Продовжуйте оновлення';
$lang['AdminSystemUpgrade.upgrade.label_missing'] = 'Відсутні файли';
$lang['AdminSystemUpgrade.upgrade.label_modified'] = 'Змінені файли';
$lang['AdminSystemUpgrade.upgrade.modified_files'] = '%1$s основні файли були змінені порівняно з оригінальним випуском. Ці зміни буде замінено під час оновлення. Бажаєте продовжити?';
$lang['AdminSystemUpgrade.upgrade.modified_files_title'] = 'Модифіковані основні файли';
$lang['AdminSystemUpgrade.upgrade.no_checksums'] = 'Маніфест файлів для поточного встановлення не містить контрольних сум. Перевірка цілісності файлів буде пропущена. Ви хочете продовжити оновлення?';
$lang['AdminSystemUpgrade.upgrade.no_manifest'] = 'Маніфест файлів не знайдено для вашої поточної інсталяції. Перевірку цілісності файлів буде пропущено. Ви хочете продовжити оновлення?';
$lang['AdminSystemUpgrade.upgrade.started'] = 'Процес оновлення розпочато. Ви можете закрити цю сторінку - оновлення продовжиться у фоновому режимі. Поверніться на цю сторінку, щоб перевірити прогрес.';

