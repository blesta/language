<?php
/**
 * Admin System General
 *
 * @package blesta
 * @subpackage blesta.language.bg_bg
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemGeneral.!error.upload_dir'] = 'Директорията за качване трябва да съществува и да е извън основната уеб директория.';
$lang['AdminSystemGeneral.edittype.field_name'] = 'Име';
$lang['AdminSystemGeneral.edittype.field_typesubmit'] = 'Редактиране на типа плащане';
$lang['AdminSystemGeneral.edittype.field_is_lang'] = 'Използване на езика Определение';
$lang['AdminSystemGeneral.edittype.field_type'] = 'Тип';
$lang['AdminSystemGeneral.edittype.boxtitle_edittype'] = 'Редактиране на типа плащане';
$lang['AdminSystemGeneral.edittype.page_title'] = 'Настройки &gt; Система &gt; Общи &gt; Редактиране на типа плащане';
$lang['AdminSystemGeneral.addtype.field_typesubmit'] = 'Създаване на тип плащане';
$lang['AdminSystemGeneral.addtype.field_is_lang'] = 'Използване на езика Определение';
$lang['AdminSystemGeneral.addtype.field_type'] = 'Тип';
$lang['AdminSystemGeneral.addtype.field_name'] = 'Име';
$lang['AdminSystemGeneral.addtype.boxtitle_addtype'] = 'Създаване на тип плащане';
$lang['AdminSystemGeneral.addtype.page_title'] = 'Настройки &gt; Система &gt; Общи &gt; Създаване на тип плащане';
$lang['AdminSystemGeneral.!paymenttypes.type'] = 'Когато е зададено дебитно, транзакциите, използващи този тип плащане, се считат за базирани на доходи, докато кредитните не са базирани на доходи.';
$lang['AdminSystemGeneral.!paymenttypes.is_lang'] = 'Поставете отметка в това поле, само ако сте добавили дефиниция на език за този тип плащане в потребителския езиков файл.';
$lang['AdminSystemGeneral.paymenttypes.no_results'] = 'Няма видове плащания.';
$lang['AdminSystemGeneral.paymenttypes.text_no'] = 'Не';
$lang['AdminSystemGeneral.paymenttypes.text_yes'] = 'Да';
$lang['AdminSystemGeneral.paymenttypes.modal_delete'] = 'Изтриването на този тип плащане ще доведе до това, че всички транзакции, които използват този тип плащане, ще бъдат зададени като "други". Сигурни ли сте, че искате да изтриете този тип плащане?';
$lang['AdminSystemGeneral.paymenttypes.option_delete'] = 'Изтриване на';
$lang['AdminSystemGeneral.paymenttypes.option_edit'] = 'Редактиране на';
$lang['AdminSystemGeneral.paymenttypes.heading_options'] = 'Опции';
$lang['AdminSystemGeneral.paymenttypes.heading_is_lang'] = 'Употреби Определение на езика';
$lang['AdminSystemGeneral.paymenttypes.heading_type'] = 'Тип';
$lang['AdminSystemGeneral.paymenttypes.heading_name'] = 'Име';
$lang['AdminSystemGeneral.paymenttypes.boxtitle_types'] = 'Видове плащания';
$lang['AdminSystemGeneral.paymenttypes.categorylink_addtype'] = 'Създаване на тип плащане';
$lang['AdminSystemGeneral.paymenttypes.page_title'] = 'Настройки &gt; Система &gt; Общи &gt; Типове плащания';
$lang['AdminSystemGeneral.license.field.licensesubmit'] = 'Актуализиране на настройките';
$lang['AdminSystemGeneral.license.field.license_key'] = 'Ключ за лиценз';
$lang['AdminSystemGeneral.license.boxtitle_license'] = 'Ключ за лиценз';
$lang['AdminSystemGeneral.license.page_title'] = 'Настройки &gt; Система &gt; Общи &gt; Лицензионен ключ';
$lang['AdminSystemGeneral.maintenance.field.maintenancesubmit'] = 'Актуализиране на настройките';
$lang['AdminSystemGeneral.maintenance.field.maintenance_reason'] = 'Причина за поддръжка';
$lang['AdminSystemGeneral.maintenance.field.maintenance_mode'] = 'Активиране на режим на поддръжка';
$lang['AdminSystemGeneral.maintenance.boxtitle_maintenance'] = 'Поддръжка';
$lang['AdminSystemGeneral.maintenance.page_title'] = 'Настройки &gt; Система &gt; Общи &gt; Поддръжка';
$lang['AdminSystemGeneral.geoip.field_geoipsubmit'] = 'Актуализиране на настройките';
$lang['AdminSystemGeneral.geoip.field_geoip_enabled'] = 'Активиране на GeoIP';
$lang['AdminSystemGeneral.geoip.text_database_not_exists'] = '%1$s не съществува.';
$lang['AdminSystemGeneral.geoip.text_database_exists'] = '%1$s съществува.';
$lang['AdminSystemGeneral.geoip.text_geolite_step_5'] = 'Качете този файл във вашата инсталация на Blesta по пътя, посочен по-долу';
$lang['AdminSystemGeneral.geoip.text_geolite_step_4'] = 'В "GeoIP2 / GeoLite2 &gt; Изтегляне на файлове" изтеглете двоичния файл GeoLite2-City';
$lang['AdminSystemGeneral.geoip.text_geolite_step_3'] = 'Влезте в профила си';
$lang['AdminSystemGeneral.geoip.text_geolite_step_2'] = 'Използвайте имейл за добре дошли, за да зададете паролата си';
$lang['AdminSystemGeneral.geoip.text_geolite_step_1'] = 'Регистрирайте се за акаунт в MaxMind';
$lang['AdminSystemGeneral.geoip.text_geolite'] = 'GeoIP изисква двоичната база данни GeoLite City, която може да бъде изтеглена от вашия акаунт на адрес <a target="_blank" href="%1$s">%1$s</a>. Файлът трябва да се разархивира и да се качи на адрес:';
$lang['AdminSystemGeneral.geoip.text_setup'] = 'Тук може да бъде активирана функцията GeoIP, която предоставя на Blesta функционалност за услуги за местоположение GeoIP. Активирането ѝ ще позволи на определени функции да се възползват от услугите за местоположение.';
$lang['AdminSystemGeneral.geoip.boxtitle_geoip'] = 'GeoIP';
$lang['AdminSystemGeneral.geoip.page_title'] = 'Настройки &gt; Система &gt; Общи &gt; Настройки на GeoIP';
$lang['AdminSystemGeneral.basic.text_days'] = 'Дни';
$lang['AdminSystemGeneral.basic.text_day'] = 'Ден';
$lang['AdminSystemGeneral.basic.text_no_log'] = 'Никога не въртете Log';
$lang['AdminSystemGeneral.basic.text_unwritable'] = 'Не може да се записва';
$lang['AdminSystemGeneral.basic.text_writable'] = 'Записваем';
$lang['AdminSystemGeneral.basic.text_docroot'] = 'Очакваме "%1$s"';
$lang['AdminSystemGeneral.basic.field.basicsubmit'] = 'Актуализиране на настройките';
$lang['AdminSystemGeneral.basic.field.behind_proxy'] = 'Инсталацията ми е зад прокси сървър или балансьор на натоварването';
$lang['AdminSystemGeneral.basic.field.log_days'] = 'Политика на ротация';
$lang['AdminSystemGeneral.basic.field.log_dir'] = 'Директория на дневника';
$lang['AdminSystemGeneral.basic.field.uploads_dir'] = 'Директория за качване';
$lang['AdminSystemGeneral.basic.field.temp_dir'] = 'Директория за временна заетост';
$lang['AdminSystemGeneral.basic.field.root_web_dir'] = 'Уеб директория Root';
$lang['AdminSystemGeneral.basic.boxtitle_basic'] = 'Основна настройка';
$lang['AdminSystemGeneral.basic.page_title'] = 'Настройки &gt; Система &gt; Общи &gt; Основна настройка';
$lang['AdminSystemGeneral.!tooltip.maintenance_reason'] = 'Тази причина за поддръжката ще бъде показана на потребителите, които нямат достъп до системата, когато режимът на поддръжка е активиран.';
$lang['AdminSystemGeneral.!tooltip.maintenance_mode'] = 'Когато е в режим на поддръжка, само потребители от персонала могат да използват системата. Всички останали потребители ще бъдат пренасочени към страницата за вход и ще им бъде показана причината за поддръжката.';
$lang['AdminSystemGeneral.!tooltip.behind_proxy'] = 'Когато е поставена тази отметка, Blesta ще приеме, че се намира зад прокси сървър и ще определи IP адресите от заглавието x-forwarded-for, предоставено от прокси сървъра. Трябва да отбележите тази настройка само ако може да се вярва на заглавието x-forwarded-for.';
$lang['AdminSystemGeneral.!tooltip.log_days'] = 'Политиката на ротация определя продължителността на съхранение на повечето данни от дневника на компанията. Файлът за системна конфигурация може да зададе допълнителни настройки за запазване на дневника.';
$lang['AdminSystemGeneral.!tooltip.log_dir'] = 'Тази стойност представлява пълния път до сървъра, където Blesta трябва да записва лог файлове. Тази директория трябва да може да се записва от уеб потребителя и потребителя на cron на сървъра.';
$lang['AdminSystemGeneral.!tooltip.uploads_dir'] = 'Тази стойност представлява пълния път до сървъра, където Blesta трябва да запише качените файлове. Тази директория трябва да може да се записва от уеб потребителя и потребителя на cron на сървъра.';
$lang['AdminSystemGeneral.!tooltip.temp_dir'] = 'Тази стойност представлява пълния път до сървъра, където Blesta трябва да записва временни файлове. Тази директория трябва да може да се записва от уеб потребителя и потребителя на cron на сървъра.';
$lang['AdminSystemGeneral.!tooltip.root_web_dir'] = 'Тази стойност представлява пълния път на сървъра до главната директория за документи на уеб сървъра (например /home/user/public_html/). Не е задължително това да е пътят до директорията, в която е инсталирана Blesta.';
$lang['AdminSystemGeneral.!tooltip.license_key'] = 'Това е вашият лицензен ключ за Blesta. Ако получите нов лицензионен ключ, въведете го тук.';
$lang['AdminSystemGeneral.!error.geoip_mbstring_required'] = 'За тази функция се изисква разширението mbstring.';
$lang['AdminSystemGeneral.!success.deletetype_deleted'] = 'Типът плащане "%1$s" е успешно изтрит!';
$lang['AdminSystemGeneral.!success.edittype_updated'] = 'Типът на плащане "%1$s" е актуализиран успешно!';
$lang['AdminSystemGeneral.!success.addtype_created'] = 'Типът плащане "%1$s" е създаден успешно!';
$lang['AdminSystemGeneral.!success.license_updated'] = 'Вашият лицензен ключ е актуализиран успешно!';
$lang['AdminSystemGeneral.!success.maintenance_updated'] = 'Настройките за поддръжка бяха успешно актуализирани!';
$lang['AdminSystemGeneral.!success.geoip_updated'] = 'Настройките на GeoIP бяха успешно актуализирани!';
$lang['AdminSystemGeneral.!success.basic_updated'] = 'Настройките на основната настройка бяха успешно актуализирани!';
$lang['AdminSystemGeneral.!notice.text_open_basedir_description'] = 'PHP open_basedir е разрешен. Достъпът до файловете е ограничен до: %1$s. Достъпът до директории извън тези пътища не е възможен.';

