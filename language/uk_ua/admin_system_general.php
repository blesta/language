<?php
/**
 * Admin System General
 *
 * @package blesta
 * @subpackage blesta.language.uk_ua
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemGeneral.!error.upload_dir'] = 'Каталог для завантаження повинен існувати і знаходитися поза кореневим каталогом веб-сторінки.';
$lang['AdminSystemGeneral.edittype.field_typesubmit'] = 'Редагувати тип платежу';
$lang['AdminSystemGeneral.edittype.field_is_lang'] = 'Використання визначення мови';
$lang['AdminSystemGeneral.edittype.field_type'] = 'Тип';
$lang['AdminSystemGeneral.edittype.field_name'] = 'Ім\'я';
$lang['AdminSystemGeneral.edittype.boxtitle_edittype'] = 'Редагувати тип платежу';
$lang['AdminSystemGeneral.edittype.page_title'] = 'Налаштування > Система > Загальні > Редагувати тип платежу';
$lang['AdminSystemGeneral.addtype.field_typesubmit'] = 'Створити тип платежу';
$lang['AdminSystemGeneral.addtype.field_is_lang'] = 'Використання визначення мови';
$lang['AdminSystemGeneral.addtype.field_type'] = 'Тип';
$lang['AdminSystemGeneral.addtype.field_name'] = 'Ім\'я';
$lang['AdminSystemGeneral.addtype.boxtitle_addtype'] = 'Створити тип платежу';
$lang['AdminSystemGeneral.addtype.page_title'] = 'Налаштування > Система > Загальні > Створити тип платежу';
$lang['AdminSystemGeneral.!paymenttypes.type'] = 'Якщо встановлено на дебет, транзакції з використанням цього типу платежу вважаються дохідними, тоді як кредитні транзакції не є дохідними.';
$lang['AdminSystemGeneral.!paymenttypes.is_lang'] = 'Установіть цей прапорець лише в тому випадку, якщо ви додали визначення мови для цього типу платежу в користувацькому мовному файлі.';
$lang['AdminSystemGeneral.paymenttypes.no_results'] = 'Типи платежів відсутні.';
$lang['AdminSystemGeneral.paymenttypes.text_no'] = 'Ні.';
$lang['AdminSystemGeneral.paymenttypes.text_yes'] = 'Так.';
$lang['AdminSystemGeneral.paymenttypes.modal_delete'] = 'Видалення цього типу платежу призведе до того, що всі транзакції, які використовують цей тип платежу, будуть встановлені на "інші". Ви впевнені, що хочете видалити цей тип платежу?';
$lang['AdminSystemGeneral.paymenttypes.option_delete'] = 'Видалити';
$lang['AdminSystemGeneral.paymenttypes.option_edit'] = 'Редагувати';
$lang['AdminSystemGeneral.paymenttypes.heading_options'] = 'Параметри';
$lang['AdminSystemGeneral.paymenttypes.heading_is_lang'] = 'Використання визначення мови';
$lang['AdminSystemGeneral.paymenttypes.heading_type'] = 'Тип';
$lang['AdminSystemGeneral.paymenttypes.heading_name'] = 'Ім\'я';
$lang['AdminSystemGeneral.paymenttypes.boxtitle_types'] = 'Типи платежів';
$lang['AdminSystemGeneral.paymenttypes.categorylink_addtype'] = 'Створити тип платежу';
$lang['AdminSystemGeneral.paymenttypes.page_title'] = 'Налаштування > Система > Загальні > Типи платежів';
$lang['AdminSystemGeneral.license.field.licensesubmit'] = 'Оновлення налаштувань';
$lang['AdminSystemGeneral.license.field.license_key'] = 'Ліцензійний ключ';
$lang['AdminSystemGeneral.license.boxtitle_license'] = 'Ліцензійний ключ';
$lang['AdminSystemGeneral.license.page_title'] = 'Налаштування > Система > Загальні > Ліцензійний ключ';
$lang['AdminSystemGeneral.maintenance.field.maintenancesubmit'] = 'Оновлення налаштувань';
$lang['AdminSystemGeneral.maintenance.field.maintenance_reason'] = 'Причина технічного обслуговування';
$lang['AdminSystemGeneral.maintenance.field.maintenance_mode'] = 'Увімкнути режим технічного обслуговування';
$lang['AdminSystemGeneral.maintenance.boxtitle_maintenance'] = 'Обслуговування';
$lang['AdminSystemGeneral.maintenance.page_title'] = 'Налаштування > Система > Загальні > Обслуговування';
$lang['AdminSystemGeneral.geoip.field_geoipsubmit'] = 'Оновлення налаштувань';
$lang['AdminSystemGeneral.geoip.field_geoip_enabled'] = 'Увімкнути GeoIP';
$lang['AdminSystemGeneral.geoip.text_database_not_exists'] = '%1$s не існує.';
$lang['AdminSystemGeneral.geoip.text_database_exists'] = '%1$s існує.';
$lang['AdminSystemGeneral.geoip.text_geolite_step_5'] = 'Завантажте цей файл до вашої інсталяції Blesta за вказаним нижче шляхом';
$lang['AdminSystemGeneral.geoip.text_geolite_step_4'] = 'У розділі "GeoIP2 / GeoLite2 > Завантажити файли" завантажте бінарний файл GeoLite2-City';
$lang['AdminSystemGeneral.geoip.text_geolite_step_3'] = 'Увійдіть до свого облікового запису';
$lang['AdminSystemGeneral.geoip.text_geolite_step_2'] = 'Використовуйте вітальний лист, щоб встановити пароль';
$lang['AdminSystemGeneral.geoip.text_geolite_step_1'] = 'Зареєструвати обліковий запис MaxMind';
$lang['AdminSystemGeneral.geoip.text_geolite'] = 'Для роботи GeoIP потрібна бінарна база даних GeoLite City, яку можна завантажити з вашого облікового запису за адресою <a target="_blank" href="%1$s">%1$s</a>. Файл слід розпакувати та завантажити на сайт:';
$lang['AdminSystemGeneral.geoip.text_setup'] = 'Тут можна увімкнути GeoIP, що надає Blesta функціональність сервісів визначення місцезнаходження GeoIP. Увімкнення цієї функції дозволить певним функціям скористатися перевагами сервісів визначення місцезнаходження.';
$lang['AdminSystemGeneral.geoip.boxtitle_geoip'] = 'GeoIP';
$lang['AdminSystemGeneral.geoip.page_title'] = 'Налаштування > Система > Загальні > Налаштування GeoIP';
$lang['AdminSystemGeneral.basic.text_days'] = 'Дні';
$lang['AdminSystemGeneral.basic.text_day'] = 'День';
$lang['AdminSystemGeneral.basic.text_no_log'] = 'Ніколи не обертайте журнал';
$lang['AdminSystemGeneral.basic.text_unwritable'] = 'Не можна писати';
$lang['AdminSystemGeneral.basic.text_writable'] = 'Можна писати';
$lang['AdminSystemGeneral.basic.text_docroot'] = 'В очікуванні "%1$s"';
$lang['AdminSystemGeneral.basic.field.basicsubmit'] = 'Оновлення налаштувань';
$lang['AdminSystemGeneral.basic.field.behind_proxy'] = 'Моя інсталяція знаходиться за проксі-сервером або балансувальником навантаження';
$lang['AdminSystemGeneral.basic.field.log_days'] = 'Політика ротації';
$lang['AdminSystemGeneral.basic.field.log_dir'] = 'Каталог журналів';
$lang['AdminSystemGeneral.basic.field.uploads_dir'] = 'Каталог завантажень';
$lang['AdminSystemGeneral.basic.field.temp_dir'] = 'Тимчасовий каталог';
$lang['AdminSystemGeneral.basic.field.root_web_dir'] = 'Кореневий веб-каталог';
$lang['AdminSystemGeneral.basic.boxtitle_basic'] = 'Базове налаштування';
$lang['AdminSystemGeneral.basic.page_title'] = 'Налаштування > Система > Загальні > Базове налаштування';
$lang['AdminSystemGeneral.!tooltip.maintenance_reason'] = 'Ця причина технічного обслуговування відображатиметься для позаштатних користувачів, які отримують доступ до системи, коли ввімкнено режим технічного обслуговування.';
$lang['AdminSystemGeneral.!tooltip.maintenance_mode'] = 'У режимі технічного обслуговування системою можуть користуватися лише штатні користувачі. Всі інші користувачі будуть перенаправлені на сторінку входу і побачать причину технічного обслуговування.';
$lang['AdminSystemGeneral.!tooltip.behind_proxy'] = 'Якщо позначено, Blesta вважатиме, що вона знаходиться за проксі-сервером, і визначатиме IP-адреси із заголовка x-forwarded-for, наданого проксі-сервером. Вам слід позначити цей параметр, якщо заголовку x-forwarded-for можна довіряти.';
$lang['AdminSystemGeneral.!tooltip.log_days'] = 'Політика ротації встановлює тривалість зберігання більшості даних журналу компанії. У файлі конфігурації системи можуть бути встановлені додаткові параметри зберігання журналів.';
$lang['AdminSystemGeneral.!tooltip.log_dir'] = 'Це значення представляє повний шлях до сервера, куди Blesta має записувати файли журналів. Ця директорія має бути доступною для запису для веб-користувача сервера та користувача cron.';
$lang['AdminSystemGeneral.!tooltip.uploads_dir'] = 'Це значення представляє повний шлях до сервера, куди Blesta має записувати завантажені файли. Ця директорія повинна бути доступною для запису для веб-користувача сервера та користувача cron.';
$lang['AdminSystemGeneral.!tooltip.temp_dir'] = 'Це значення представляє повний шлях до сервера, куди Blesta має записувати тимчасові файли. Ця директорія має бути доступною для запису веб-користувачу сервера та користувачу cron.';
$lang['AdminSystemGeneral.!tooltip.root_web_dir'] = 'Це значення представляє повний шлях до кореневого каталогу документів веб-сервера (наприклад, /home/user/public_html/). Це не обов\'язково шлях до каталогу, в якому встановлено Blesta.';
$lang['AdminSystemGeneral.!tooltip.license_key'] = 'Це ваш ліцензійний ключ Blesta. Якщо ви отримаєте новий ліцензійний ключ, введіть його тут.';
$lang['AdminSystemGeneral.!error.geoip_mbstring_required'] = 'Для цієї функції потрібне розширення mbstring.';
$lang['AdminSystemGeneral.!success.deletetype_deleted'] = 'Тип платежу "%1$s" успішно видалено!';
$lang['AdminSystemGeneral.!success.edittype_updated'] = 'Тип платежу "%1$s" успішно оновлено!';
$lang['AdminSystemGeneral.!success.addtype_created'] = 'Тип платежу "%1$s" успішно створено!';
$lang['AdminSystemGeneral.!success.license_updated'] = 'Ваш ліцензійний ключ успішно оновлено!';
$lang['AdminSystemGeneral.!success.maintenance_updated'] = 'Налаштування обслуговування було успішно оновлено!';
$lang['AdminSystemGeneral.!success.geoip_updated'] = 'Налаштування GeoIP успішно оновлено!';
$lang['AdminSystemGeneral.!success.basic_updated'] = 'Налаштування Базового налаштування успішно оновлено!';
$lang['AdminSystemGeneral.!notice.text_open_basedir_description'] = 'PHP open_basedir увімкнено. Доступ до файлів обмежено до: %1$s. Доступ до каталогів поза цими шляхами неможливий.';

