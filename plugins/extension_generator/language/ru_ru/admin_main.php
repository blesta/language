<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.ru_ru
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.confirm.generate'] = 'Создать расширение';
$lang['AdminMain.confirm.custom_path'] = 'Пользовательский путь';
$lang['AdminMain.confirm.tooltip_location'] = 'Каталог, в который загружаются сгенерированные файлы расширений.';
$lang['AdminMain.confirm.location'] = 'Расположение расширения';
$lang['AdminMain.confirm.text_generation'] = 'Настройка расширений завершена.  Вы можете просмотреть любой раздел, щелкнув по узлам на индикаторе выполнения.  Нажмите кнопку "Generate Extension", чтобы завершить работу и автоматически сгенерировать файлы для расширения.';
$lang['AdminMain.confirm.heading_confirm'] = 'Подтверждение';
$lang['AdminMain.general.placeholder_name'] = 'Имя расширения';
$lang['AdminMain.general.tooltip_code_examples'] = 'Проверьте наличие прокомментированных строк примера кода для таких функций, как Cron Tasks, списки событий и привязки к ним и т. д.';
$lang['AdminMain.general.tooltip_form_type'] = 'Basic для использования сильно урезанной версии формы расширения, включающей только то, что необходимо для создания расширения.';
$lang['AdminMain.general.tooltip_type'] = 'Модули управляют многими сервисными функциями, включая предоставление услуг на удаленных серверах. Плагины - это мощные интеграции, способные сделать в Blesta практически все. Торговые шлюзы обрабатывают платежи, оставляя клиентов в интерфейсе Blesta.  Неторговые шлюзы отправляют клиентов на сайт платежного процессора для завершения платежа.';
$lang['AdminMain.general.tooltip_name'] = 'Отображаемое имя расширения. Оно также используется для создания различного кода. Например, если имя модуля - My Module, то каталог модуля будет my_module, а имя класса - MyModule.  Для плагинов не включайте в название слово "plugin", так как это вызывает некоторые проблемы с генерацией кода.';
$lang['AdminMain.general.basic_info'] = 'Далее - Основная информация';
$lang['AdminMain.general.code_examples'] = 'Включите код примера';
$lang['AdminMain.general.form_type'] = 'Тип формы';
$lang['AdminMain.general.type'] = 'Тип удлинителя';
$lang['AdminMain.general.name'] = 'Имя';
$lang['AdminMain.general.heading_general_settings'] = 'Общие настройки';
$lang['AdminMain.index.extensions_no_results'] = 'На данный момент продлений нет.';
$lang['AdminMain.index.text_confirm_delete'] = 'Вы уверены, что хотите удалить это расширение?';
$lang['AdminMain.index.option_delete'] = 'Удалить';
$lang['AdminMain.index.option_edit'] = 'Редактировать';
$lang['AdminMain.index.heading_options'] = 'Опции';
$lang['AdminMain.index.heading_date_updated'] = 'Дата обновления';
$lang['AdminMain.index.heading_code_examples'] = 'Примеры кода';
$lang['AdminMain.index.heading_form_type'] = 'Тип формы';
$lang['AdminMain.index.heading_type'] = 'Тип';
$lang['AdminMain.index.heading_name'] = 'Имя';
$lang['AdminMain.index.heading_id'] = 'ID';
$lang['AdminMain.index.extension_add'] = 'Добавить расширение';
$lang['AdminMain.index.boxtitle_extensions'] = 'Генератор расширений - Расширения';
$lang['AdminMain.index.boxtitle_extension_generator'] = 'Генератор удлинителей';
$lang['AdminMain.index.page_title'] = 'Генератор удлинителей';
$lang['AdminMain.getfilelocations.custom'] = 'Пользовательское';
$lang['AdminMain.getfilelocations.upload'] = 'Каталог загрузок Blesta';
$lang['AdminMain.getfilelocations.nonmerchant'] = 'Каталог неторговых шлюзов Blesta';
$lang['AdminMain.getfilelocations.merchant'] = 'Каталог торговых шлюзов Blesta';
$lang['AdminMain.getfilelocations.plugin'] = 'Каталог плагинов Blesta';
$lang['AdminMain.getfilelocations.module'] = 'Каталог модулей Blesta';
$lang['AdminMain.!success.nonmerchant_created'] = 'Новый шлюз был успешно сгенерирован и находится по адресу %1$s';
$lang['AdminMain.!success.merchant_created'] = 'Новый шлюз был успешно сгенерирован и находится по адресу %1$s';
$lang['AdminMain.!success.plugin_created'] = 'Новый плагин был успешно сгенерирован и находится по адресу %1$s';
$lang['AdminMain.!success.module_created'] = 'Новый модуль был успешно сгенерирован и находится по адресу %1$s';
$lang['AdminMain.!success.package_deleted'] = 'Расширение было успешно удалено';
$lang['AdminMain.!notice.updating_installed_extension'] = 'В настоящее время это расширение установлено. Настоятельно рекомендуется удалить его перед регенерацией файлов, иначе это может привести к нарушению целостности вашей базы данных.';
$lang['AdminMain.!notice.file_overwrite'] = 'Файлы для этого расширения уже существуют в файлах Blesta и будут перезаписаны, если вы используете каталог Blesta.';
$lang['AdminMain.!notice.type_warning'] = 'Изменение типа расширения приведет к необратимому стиранию всех настроек, сохраненных для этого расширения.';
$lang['AdminMain.!error.generation_failed'] = 'Невозможно сгенерировать ваше расширение.  Сгенерировано исключение: %1$s';
$lang['AdminMain.!error.name_taken'] = 'Это имя конфликтует с существующим каталогом расширений.';

