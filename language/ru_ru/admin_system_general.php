<?php
/**
 * Admin System General
 *
 * @package blesta
 * @subpackage blesta.language.ru_ru
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemGeneral.edittype.field_typesubmit'] = 'Редактировать тип платежа';
$lang['AdminSystemGeneral.edittype.field_is_lang'] = 'Используйте определение языка';
$lang['AdminSystemGeneral.edittype.field_type'] = 'Тип';
$lang['AdminSystemGeneral.edittype.field_name'] = 'Имя';
$lang['AdminSystemGeneral.edittype.boxtitle_edittype'] = 'Редактировать тип платежа';
$lang['AdminSystemGeneral.edittype.page_title'] = 'Настройки > Система > Общие > Редактировать тип платежа';
$lang['AdminSystemGeneral.addtype.field_typesubmit'] = 'Создать тип платежа';
$lang['AdminSystemGeneral.addtype.field_is_lang'] = 'Используйте определение языка';
$lang['AdminSystemGeneral.addtype.field_type'] = 'Тип';
$lang['AdminSystemGeneral.addtype.field_name'] = 'Имя';
$lang['AdminSystemGeneral.addtype.boxtitle_addtype'] = 'Создать тип платежа';
$lang['AdminSystemGeneral.addtype.page_title'] = 'Настройки > Система > Общие > Создать тип платежа';
$lang['AdminSystemGeneral.!paymenttypes.type'] = 'Если установлено дебетовое значение, операции с использованием этого типа платежа считаются основанными на доходах, а кредитные - не основанными на доходах.';
$lang['AdminSystemGeneral.!paymenttypes.is_lang'] = 'Установите этот флажок, только если вы добавили определение языка для этого типа платежа в пользовательский языковой файл.';
$lang['AdminSystemGeneral.paymenttypes.no_results'] = 'Типов оплаты не существует.';
$lang['AdminSystemGeneral.paymenttypes.text_no'] = 'Нет';
$lang['AdminSystemGeneral.paymenttypes.text_yes'] = 'Да';
$lang['AdminSystemGeneral.paymenttypes.modal_delete'] = 'Удаление этого типа платежа приведет к тому, что все транзакции, использующие этот тип платежа, будут установлены на "другие". Вы уверены, что хотите удалить этот тип платежа?';
$lang['AdminSystemGeneral.paymenttypes.option_delete'] = 'Удалить';
$lang['AdminSystemGeneral.paymenttypes.option_edit'] = 'Редактировать';
$lang['AdminSystemGeneral.paymenttypes.heading_options'] = 'Опции';
$lang['AdminSystemGeneral.paymenttypes.heading_is_lang'] = 'Использует язык Определение';
$lang['AdminSystemGeneral.paymenttypes.heading_type'] = 'Тип';
$lang['AdminSystemGeneral.paymenttypes.heading_name'] = 'Имя';
$lang['AdminSystemGeneral.paymenttypes.boxtitle_types'] = 'Типы платежей';
$lang['AdminSystemGeneral.paymenttypes.categorylink_addtype'] = 'Создать тип платежа';
$lang['AdminSystemGeneral.paymenttypes.page_title'] = 'Настройки > Система > Общие > Типы платежей';
$lang['AdminSystemGeneral.license.field.licensesubmit'] = 'Обновление настроек';
$lang['AdminSystemGeneral.license.field.license_key'] = 'Лицензионный ключ';
$lang['AdminSystemGeneral.license.boxtitle_license'] = 'Лицензионный ключ';
$lang['AdminSystemGeneral.license.page_title'] = 'Настройки > Система > Общие > Лицензионный ключ';
$lang['AdminSystemGeneral.maintenance.field.maintenancesubmit'] = 'Обновление настроек';
$lang['AdminSystemGeneral.maintenance.field.maintenance_reason'] = 'Причина обслуживания';
$lang['AdminSystemGeneral.maintenance.field.maintenance_mode'] = 'Включить режим технического обслуживания';
$lang['AdminSystemGeneral.maintenance.boxtitle_maintenance'] = 'Техническое обслуживание';
$lang['AdminSystemGeneral.maintenance.page_title'] = 'Настройки > Система > Общие > Обслуживание';
$lang['AdminSystemGeneral.geoip.field_geoipsubmit'] = 'Обновление настроек';
$lang['AdminSystemGeneral.geoip.field_geoip_enabled'] = 'Включить GeoIP';
$lang['AdminSystemGeneral.geoip.text_database_not_exists'] = '%1$s не существует.';
$lang['AdminSystemGeneral.geoip.text_database_exists'] = '%1$s существует.';
$lang['AdminSystemGeneral.geoip.text_geolite_step_5'] = 'Загрузите этот файл в установку Blesta по указанному ниже пути.';
$lang['AdminSystemGeneral.geoip.text_geolite_step_4'] = 'В разделе "GeoIP2 / GeoLite2 > Download Files" загрузите двоичный файл GeoLite2-City.';
$lang['AdminSystemGeneral.geoip.text_geolite_step_3'] = 'Войдите в свой аккаунт';
$lang['AdminSystemGeneral.geoip.text_geolite_step_2'] = 'Используйте приветственное письмо для установки пароля';
$lang['AdminSystemGeneral.geoip.text_geolite_step_1'] = 'Зарегистрируйте учетную запись MaxMind';
$lang['AdminSystemGeneral.geoip.text_geolite'] = 'Для работы GeoIP требуется бинарная база данных GeoLite City, которую можно загрузить с вашего аккаунта по адресу <a target="_blank" href="%1$s">%1$s</a>. Файл следует разархивировать и загрузить по адресу:';
$lang['AdminSystemGeneral.geoip.text_setup'] = 'Здесь можно включить GeoIP, чтобы предоставить Blesta функциональность служб определения местоположения GeoIP. Включение этой функции позволит некоторым функциям использовать преимущества служб определения местоположения.';
$lang['AdminSystemGeneral.geoip.boxtitle_geoip'] = 'GeoIP';
$lang['AdminSystemGeneral.geoip.page_title'] = 'Настройки > Система > Общие > Настройки GeoIP';
$lang['AdminSystemGeneral.basic.text_days'] = 'Дни';
$lang['AdminSystemGeneral.basic.text_day'] = 'День';
$lang['AdminSystemGeneral.basic.text_no_log'] = 'Никогда не поворачивайте журнал';
$lang['AdminSystemGeneral.basic.text_unwritable'] = 'Не подлежит записи';
$lang['AdminSystemGeneral.basic.text_writable'] = 'Записываемый';
$lang['AdminSystemGeneral.basic.text_docroot'] = 'Ожидание "%1$s"';
$lang['AdminSystemGeneral.basic.field.basicsubmit'] = 'Обновление настроек';
$lang['AdminSystemGeneral.basic.field.behind_proxy'] = 'Моя установка находится за прокси-сервером или балансировщиком нагрузки';
$lang['AdminSystemGeneral.basic.field.log_days'] = 'Политика ротации';
$lang['AdminSystemGeneral.basic.field.log_dir'] = 'Каталог журналов';
$lang['AdminSystemGeneral.basic.field.uploads_dir'] = 'Каталог загрузок';
$lang['AdminSystemGeneral.basic.field.temp_dir'] = 'Временная директория';
$lang['AdminSystemGeneral.basic.field.root_web_dir'] = 'Корневой веб-каталог';
$lang['AdminSystemGeneral.basic.boxtitle_basic'] = 'Базовая настройка';
$lang['AdminSystemGeneral.basic.page_title'] = 'Настройки > Система > Общие > Базовая настройка';
$lang['AdminSystemGeneral.!tooltip.maintenance_reason'] = 'Эта причина обслуживания будет отображаться для пользователей, не являющихся сотрудниками, которые получают доступ к системе, когда включен режим обслуживания.';
$lang['AdminSystemGeneral.!tooltip.maintenance_mode'] = 'В режиме обслуживания системой могут пользоваться только сотрудники. Все остальные пользователи будут перенаправлены на страницу входа в систему и получат сообщение о причине обслуживания.';
$lang['AdminSystemGeneral.!tooltip.behind_proxy'] = 'Если флажок установлен, Blesta будет считать, что она находится за прокси-сервером, и будет определять IP-адреса по заголовку x-forwarded-for, предоставленному прокси-сервером. Отмечать этот параметр следует только в том случае, если заголовку x-forwarded-for можно доверять.';
$lang['AdminSystemGeneral.!tooltip.log_days'] = 'Политика ротации устанавливает продолжительность хранения большинства данных журнала компании. В файле конфигурации системы могут быть заданы дополнительные параметры хранения журналов.';
$lang['AdminSystemGeneral.!tooltip.log_dir'] = 'Это значение представляет собой полный путь сервера к месту, куда Blesta должна записывать файлы журнала. Этот каталог должен быть доступен для записи веб-пользователю сервера и пользователю cron.';
$lang['AdminSystemGeneral.!tooltip.uploads_dir'] = 'Это значение представляет собой полный путь сервера к месту, куда Blesta должна записывать загруженные файлы. Этот каталог должен быть доступен для записи веб-пользователю и пользователю cron сервера.';
$lang['AdminSystemGeneral.!tooltip.temp_dir'] = 'Это значение представляет собой полный путь сервера к месту, куда Blesta должна записывать временные файлы. Этот каталог должен быть доступен для записи веб-пользователю и пользователю cron.';
$lang['AdminSystemGeneral.!tooltip.root_web_dir'] = 'Это значение представляет собой полный путь сервера к корневому каталогу документов веб-сервера (например, /home/user/public_html/). Это не обязательно путь к директории, в которой установлена Blesta.';
$lang['AdminSystemGeneral.!tooltip.license_key'] = 'Это ваш лицензионный ключ Blesta. Если вы получите новый лицензионный ключ, введите его здесь.';
$lang['AdminSystemGeneral.!error.geoip_mbstring_required'] = 'Для этой функции требуется расширение mbstring.';
$lang['AdminSystemGeneral.!success.deletetype_deleted'] = 'Тип платежа "%1$s" был успешно удален!';
$lang['AdminSystemGeneral.!success.edittype_updated'] = 'Тип платежа "%1$s" был успешно обновлен!';
$lang['AdminSystemGeneral.!success.addtype_created'] = 'Тип платежа "%1$s" был успешно создан!';
$lang['AdminSystemGeneral.!success.license_updated'] = 'Ваш лицензионный ключ был успешно обновлен!';
$lang['AdminSystemGeneral.!success.maintenance_updated'] = 'Настройки обслуживания были успешно обновлены!';
$lang['AdminSystemGeneral.!success.geoip_updated'] = 'Настройки GeoIP были успешно обновлены!';
$lang['AdminSystemGeneral.!success.basic_updated'] = 'Настройки базовой установки были успешно обновлены!';
$lang['AdminSystemGeneral.!error.upload_dir'] = 'Каталог загрузки должен существовать и находиться вне корневого веб-каталога.';
$lang['AdminSystemGeneral.!notice.text_open_basedir_description'] = 'PHP open_basedir включен. Доступ к файлам ограничен: %1$s. Доступ к каталогам за пределами этих путей невозможен.';

