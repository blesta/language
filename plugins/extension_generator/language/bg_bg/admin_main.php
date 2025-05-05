<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.bg_bg
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.confirm.generate'] = 'Генериране на разширение';
$lang['AdminMain.confirm.custom_path'] = 'Персонализиран път';
$lang['AdminMain.confirm.tooltip_location'] = 'Директорията, в която да се качват генерираните файлове с разширения.';
$lang['AdminMain.confirm.location'] = 'Местоположение на разширението';
$lang['AdminMain.confirm.text_generation'] = 'Настройките на разширението са завършени.  Можете да прегледате всеки раздел, като щракнете върху възлите в лентата за напредъка.  Щракнете върху "Генериране на разширение", за да завършите и автоматично да генерирате файловете за вашето разширение.';
$lang['AdminMain.confirm.heading_confirm'] = 'Потвърждение';
$lang['AdminMain.general.placeholder_name'] = 'Име на разширението';
$lang['AdminMain.general.tooltip_code_examples'] = 'Проверете дали са включени коментирани редове с примерен код за функции като задачи на Cron, списъци със събития и връзки и др.';
$lang['AdminMain.general.tooltip_form_type'] = 'Basic, за да използвате силно съкратена версия на формуляра за разширение, включваща само минимално необходимото за генериране на разширението.';
$lang['AdminMain.general.tooltip_type'] = 'Модулите управляват много функции на услугата, включително предоставяне на услугата на отдалечени сървъри. Плъгините са мощна интеграция, която може да прави почти всичко в Blesta. Търговските шлюзове обработват плащанията, като поддържат клиентите в интерфейса на Blesta.  Шлюзовете, които не са предназначени за търговци, изпращат клиентите до сайт на обработващ плащанията, за да завършат плащането.';
$lang['AdminMain.general.tooltip_name'] = 'Показваното име на разширението. То се използва и за създаване на различни кодове. Например, ако името е My Module (Моят модул), тогава директорията на модула ще бъде my_module (мой_модул), а името на класа ще бъде MyModule (МоятМодул).  За плъгини не включвайте думата "плъгин" в името, тъй като тя предизвиква някои проблеми при генерирането на код.';
$lang['AdminMain.general.basic_info'] = 'Следваща - Основна информация';
$lang['AdminMain.general.code_examples'] = 'Включване на примерен код';
$lang['AdminMain.general.form_type'] = 'Вид на формуляра';
$lang['AdminMain.general.type'] = 'Тип разширение';
$lang['AdminMain.general.name'] = 'Име';
$lang['AdminMain.general.heading_general_settings'] = 'Общи настройки';
$lang['AdminMain.index.extensions_no_results'] = 'В момента няма удължения.';
$lang['AdminMain.index.text_confirm_delete'] = 'Сигурни ли сте, че искате да изтриете това разширение?';
$lang['AdminMain.index.option_delete'] = 'Изтриване на';
$lang['AdminMain.index.option_edit'] = 'Редактиране на';
$lang['AdminMain.index.heading_options'] = 'Опции';
$lang['AdminMain.index.heading_date_updated'] = 'Дата на актуализация';
$lang['AdminMain.index.heading_code_examples'] = 'Примери за код';
$lang['AdminMain.index.heading_form_type'] = 'Вид на формуляра';
$lang['AdminMain.index.heading_type'] = 'Тип';
$lang['AdminMain.index.heading_name'] = 'Име';
$lang['AdminMain.index.heading_id'] = 'ID';
$lang['AdminMain.index.extension_add'] = 'Добавяне на разширение';
$lang['AdminMain.index.boxtitle_extensions'] = 'Генератор на разширения - Разширения';
$lang['AdminMain.index.boxtitle_extension_generator'] = 'Генератор на разширения';
$lang['AdminMain.index.page_title'] = 'Генератор на разширения';
$lang['AdminMain.getfilelocations.custom'] = 'Потребителски';
$lang['AdminMain.getfilelocations.upload'] = 'Blesta качва директория';
$lang['AdminMain.getfilelocations.nonmerchant'] = 'Директория за шлюзове, които не са предназначени за търговци на Blesta';
$lang['AdminMain.getfilelocations.merchant'] = 'Директория на Blesta Merchant Gateway';
$lang['AdminMain.getfilelocations.plugin'] = 'Директория за плъгини на Blesta';
$lang['AdminMain.getfilelocations.module'] = 'Директория на модулите на Blesta';
$lang['AdminMain.!success.nonmerchant_created'] = 'Новият шлюз е успешно генериран и може да бъде намерен на адрес %1$s';
$lang['AdminMain.!success.merchant_created'] = 'Новият шлюз е успешно генериран и може да бъде намерен на адрес %1$s';
$lang['AdminMain.!success.plugin_created'] = 'Новият плъгин е успешно генериран и може да бъде намерен на адрес %1$s';
$lang['AdminMain.!success.module_created'] = 'Новият модул е успешно генериран и може да бъде намерен на адрес %1$s';
$lang['AdminMain.!success.package_deleted'] = 'Разширението е успешно изтрито';
$lang['AdminMain.!notice.updating_installed_extension'] = 'Това разширение е инсталирано в момента. Силно препоръчително е да го премахнете, преди да регенерирате файловете, защото в противен случай може да се наруши последователността на базата данни.';
$lang['AdminMain.!notice.file_overwrite'] = 'Файловете за това разширение вече съществуват във файловете на Blesta и ще бъдат презаписани, ако използвате директорията Blesta.';
$lang['AdminMain.!notice.type_warning'] = 'Промяната на типа на разширението ще изтрие безвъзвратно всички настройки, записани за това разширение.';
$lang['AdminMain.!error.generation_failed'] = 'Не е възможно да генерирате разширението си.  Генерирано е изключение: %1$s';
$lang['AdminMain.!error.name_taken'] = 'Това име е в конфликт със съществуваща директория за разширения.';

