<?php
/**
 * Centoswebpanel
 *
 * @package blesta
 * @subpackage blesta.language.ru_ru
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Centoswebpanel.!error.api'] = 'Произошла внутренняя ошибка, или сервер не ответил на запрос.';
$lang['Centoswebpanel.!error.centoswebpanel_password.matches'] = 'Пароль и подтверждение пароля не совпадают.';
$lang['Centoswebpanel.!error.centoswebpanel_password.valid'] = 'Пароль должен состоять не менее чем из 8 символов.';
$lang['Centoswebpanel.!error.centoswebpanel_username.length'] = 'Имя пользователя должно содержать от 1 до 16 символов.';
$lang['Centoswebpanel.!error.centoswebpanel_username.test'] = 'Имя пользователя не может начинаться с \'test\'.';
$lang['Centoswebpanel.!error.centoswebpanel_username.format'] = 'Имя пользователя может содержать только буквы и цифры и не может начинаться с цифры.';
$lang['Centoswebpanel.!error.centoswebpanel_domain.test'] = 'Доменное имя не может начинаться с \'test\'.';
$lang['Centoswebpanel.!error.centoswebpanel_domain.format'] = 'Введите действительное доменное имя, например domain.com.';
$lang['Centoswebpanel.!error.module_row.missing'] = 'Произошла внутренняя ошибка. Строка модуля недоступна.';
$lang['Centoswebpanel.!error.api.internal'] = 'Произошла внутренняя ошибка, или сервер не ответил на запрос.';
$lang['Centoswebpanel.!error.meta[nproc].valid'] = 'Максимальный процесс должен быть числовым значением.';
$lang['Centoswebpanel.!error.meta[nofile].valid'] = 'Максимальное количество файлов должно быть числовым значением.';
$lang['Centoswebpanel.!error.meta[inode].valid'] = 'Значение Maximum Inodes должно быть числовым.';
$lang['Centoswebpanel.!error.meta[package].empty'] = 'Требуется пакет CentOS WebPanel.';
$lang['Centoswebpanel.!error.name_servers_count'] = 'Вы должны определить как минимум 2 сервера имен.';
$lang['Centoswebpanel.!error.name_servers_valid'] = 'Один или несколько введенных серверов имен недействительны.';
$lang['Centoswebpanel.!error.account_limit_valid'] = 'Account Limit можно оставить пустым (для неограниченных счетов) или установить целочисленное значение.';
$lang['Centoswebpanel.!error.remote_api_key_valid_connection'] = 'Не удалось установить соединение с сервером. Убедитесь, что имя хоста и ключ API указаны правильно.';
$lang['Centoswebpanel.!error.remote_api_key_valid'] = 'Похоже, что ключ API недействителен.';
$lang['Centoswebpanel.!error.port_valid'] = 'Вы должны ввести порт API.';
$lang['Centoswebpanel.!error.login_port_valid'] = 'Необходимо ввести порт для входа в систему.';
$lang['Centoswebpanel.!error.user_name_valid'] = 'Похоже, что имя пользователя недействительно.';
$lang['Centoswebpanel.!error.host_name_valid'] = 'Похоже, что имя хоста недействительно.';
$lang['Centoswebpanel.!error.server_name_valid'] = 'Необходимо ввести метку сервера.';
$lang['Centoswebpanel.service_field.tooltip.password'] = 'Вы можете оставить пароль пустым, чтобы он был сгенерирован автоматически.';
$lang['Centoswebpanel.service_field.tooltip.username'] = 'Вы можете оставить имя пользователя пустым, чтобы оно было сгенерировано автоматически.';
$lang['Centoswebpanel.service_field.tooltip.username_edit'] = 'Это изменение не повлияет на веб-панель CentOS, а только изменит локальную запись в Blesta.';
$lang['Centoswebpanel.service_field.tooltip.domain_edit'] = 'Это изменение не повлияет на веб-панель CentOS, а только изменит локальную запись в Blesta.';
$lang['Centoswebpanel.service_info.option_login'] = 'Войти';
$lang['Centoswebpanel.service_info.options'] = 'Опции';
$lang['Centoswebpanel.service_info.server'] = 'Сервер';
$lang['Centoswebpanel.service_info.password'] = 'Пароль';
$lang['Centoswebpanel.service_info.username'] = 'Имя пользователя';
$lang['Centoswebpanel.service_field.password'] = 'Пароль';
$lang['Centoswebpanel.service_field.username'] = 'Имя пользователя';
$lang['Centoswebpanel.service_field.domain'] = 'Домен';
$lang['Centoswebpanel.package_fields.nproc'] = 'Максимальный процесс';
$lang['Centoswebpanel.package_fields.nofile'] = 'Максимальные файлы';
$lang['Centoswebpanel.package_fields.inode'] = 'Максимальное количество инодов';
$lang['Centoswebpanel.package_fields.package'] = 'Идентификатор упаковки';
$lang['Centoswebpanel.row_meta.account_limit'] = 'Лимит счета';
$lang['Centoswebpanel.row_meta.use_ssl'] = 'Используйте SSL при подключении к API (рекомендуется)';
$lang['Centoswebpanel.row_meta.api_key'] = 'Ключ API';
$lang['Centoswebpanel.row_meta.default_port'] = '2304';
$lang['Centoswebpanel.row_meta.port'] = 'Порт API';
$lang['Centoswebpanel.row_meta.default_login_port'] = '2031';
$lang['Centoswebpanel.row_meta.login_port'] = 'Порт для входа в систему';
$lang['Centoswebpanel.row_meta.host_name'] = 'Имя хоста';
$lang['Centoswebpanel.row_meta.server_name'] = 'Ярлык сервера';
$lang['Centoswebpanel.edit_row.add_btn'] = 'Редактировать сервер';
$lang['Centoswebpanel.edit_row.remove_name_server'] = 'Удалить';
$lang['Centoswebpanel.edit_row.name_server'] = 'Сервер имен %1$s';
$lang['Centoswebpanel.edit_row.name_server_host_col'] = 'Имя хоста';
$lang['Centoswebpanel.edit_row.name_server_col'] = 'Сервер имен';
$lang['Centoswebpanel.edit_row.name_server_btn'] = 'Добавить дополнительный сервер имен';
$lang['Centoswebpanel.edit_row.notes_title'] = 'Примечания';
$lang['Centoswebpanel.edit_row.name_servers_title'] = 'Серверы имен';
$lang['Centoswebpanel.edit_row.basic_title'] = 'Основные настройки';
$lang['Centoswebpanel.edit_row.box_title'] = 'Редактирование сервера CentOS WebPanel';
$lang['Centoswebpanel.add_row.add_btn'] = 'Добавить сервер';
$lang['Centoswebpanel.add_row.remove_name_server'] = 'Удалить';
$lang['Centoswebpanel.add_row.name_server'] = 'Сервер имен %1$s';
$lang['Centoswebpanel.add_row.name_server_host_col'] = 'Имя хоста';
$lang['Centoswebpanel.add_row.name_server_col'] = 'Сервер имен';
$lang['Centoswebpanel.add_row.name_server_btn'] = 'Добавить дополнительный сервер имен';
$lang['Centoswebpanel.add_row.notes_title'] = 'Примечания';
$lang['Centoswebpanel.add_row.name_servers_title'] = 'Серверы имен';
$lang['Centoswebpanel.add_row.basic_title'] = 'Основные настройки';
$lang['Centoswebpanel.add_row.box_title'] = 'Добавьте сервер CentOS WebPanel';
$lang['Centoswebpanel.order_options.roundrobin'] = 'Равномерное распределение между серверами';
$lang['Centoswebpanel.order_options.first'] = 'Первый неполный сервер';
$lang['Centoswebpanel.manage.module_groups_no_results'] = 'Групп серверов не существует.';
$lang['Centoswebpanel.manage.module_rows_no_results'] = 'Здесь нет серверов.';
$lang['Centoswebpanel.manage.module_groups.confirm_delete'] = 'Вы уверены, что хотите удалить эту группу серверов?';
$lang['Centoswebpanel.manage.module_rows.confirm_delete'] = 'Вы уверены, что хотите удалить этот сервер?';
$lang['Centoswebpanel.manage.module_groups.delete'] = 'Удалить';
$lang['Centoswebpanel.manage.module_rows.delete'] = 'Удалить';
$lang['Centoswebpanel.manage.module_groups.edit'] = 'Редактировать';
$lang['Centoswebpanel.manage.module_rows.edit'] = 'Редактировать';
$lang['Centoswebpanel.manage.module_rows.count'] = '%1$s / %2$s';
$lang['Centoswebpanel.manage.module_groups_heading.options'] = 'Опции';
$lang['Centoswebpanel.manage.module_groups_heading.servers'] = 'Количество серверов';
$lang['Centoswebpanel.manage.module_groups_heading.name'] = 'Название группы';
$lang['Centoswebpanel.manage.module_rows_heading.options'] = 'Опции';
$lang['Centoswebpanel.manage.module_rows_heading.accounts'] = 'Счета';
$lang['Centoswebpanel.manage.module_rows_heading.hostname'] = 'Имя хоста';
$lang['Centoswebpanel.manage.module_rows_heading.name'] = 'Ярлык сервера';
$lang['Centoswebpanel.manage.module_groups_title'] = 'Группы серверов';
$lang['Centoswebpanel.manage.module_rows_title'] = 'Серверы';
$lang['Centoswebpanel.add_module_group'] = 'Добавить группу серверов';
$lang['Centoswebpanel.add_module_row'] = 'Добавить сервер';
$lang['Centoswebpanel.module_group'] = 'Группа серверов';
$lang['Centoswebpanel.module_row_plural'] = 'Серверы';
$lang['Centoswebpanel.module_row'] = 'Сервер';
$lang['Centoswebpanel.description'] = 'Бесплатная панель управления хостингом, предназначенная для быстрого и простого управления серверами (Dedicated & VPS)';
$lang['Centoswebpanel.name'] = 'CentOS WebPanel';

