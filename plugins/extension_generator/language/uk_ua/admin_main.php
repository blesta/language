<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.uk_ua
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.confirm.generate'] = 'Створити розширення';
$lang['AdminMain.confirm.custom_path'] = 'Користувацький шлях';
$lang['AdminMain.confirm.tooltip_location'] = 'Каталог, до якого потрібно завантажити згенеровані файли розширень.';
$lang['AdminMain.confirm.location'] = 'Місце розташування розширення';
$lang['AdminMain.confirm.text_generation'] = 'Налаштування розширення завершено.  Ви можете переглянути будь-який розділ, натиснувши на вузли на індикаторі виконання.  Натисніть "Згенерувати розширення", щоб завершити і автоматично згенерувати файли для вашого розширення.';
$lang['AdminMain.confirm.heading_confirm'] = 'Підтвердження';
$lang['AdminMain.general.placeholder_name'] = 'Ім\'я розширення Назва розширення';
$lang['AdminMain.general.tooltip_code_examples'] = 'Перевірте наявність закоментованих рядків прикладу коду для таких функцій, як завдання Cron, списки подій, зв\'язки тощо.';
$lang['AdminMain.general.tooltip_form_type'] = 'Базовим є використання сильно урізаної версії форми розширення, що включає лише мінімум, необхідний для створення розширення.';
$lang['AdminMain.general.tooltip_type'] = 'Модулі керують багатьма сервісними функціями, включаючи надання послуг на віддалених серверах. Плагіни - це потужна інтеграція, здатна зробити майже все, що завгодно в Blesta. Мерчант-шлюзи обробляють платежі, залишаючи клієнтів в інтерфейсі Blesta.  Неторгові шлюзи перенаправляють клієнтів на сайт платіжного процесора для завершення оплати.';
$lang['AdminMain.general.tooltip_name'] = 'Ім\'я розширення, що відображається на екрані. Це також використовується для створення різного коду. Наприклад, якщо ім\'я My Module, то директорія модуля буде my_module, а ім\'я класу буде MyModule.  Для плагінів не включайте в назву слово "plugin", оскільки воно викликає деякі проблеми з генерацією коду.';
$lang['AdminMain.general.basic_info'] = 'Далі - Основна інформація';
$lang['AdminMain.general.code_examples'] = 'Включити приклад коду';
$lang['AdminMain.general.form_type'] = 'Тип форми';
$lang['AdminMain.general.type'] = 'Тип розширення';
$lang['AdminMain.general.name'] = 'Ім\'я';
$lang['AdminMain.general.heading_general_settings'] = 'Загальні налаштування';
$lang['AdminMain.index.extensions_no_results'] = 'Наразі продовження не передбачено.';
$lang['AdminMain.index.text_confirm_delete'] = 'Ви впевнені, що хочете видалити це розширення?';
$lang['AdminMain.index.option_delete'] = 'Видалити';
$lang['AdminMain.index.option_edit'] = 'Редагувати';
$lang['AdminMain.index.heading_options'] = 'Параметри';
$lang['AdminMain.index.heading_date_updated'] = 'Дата оновлення';
$lang['AdminMain.index.heading_code_examples'] = 'Приклади коду';
$lang['AdminMain.index.heading_form_type'] = 'Тип форми';
$lang['AdminMain.index.heading_type'] = 'Тип';
$lang['AdminMain.index.heading_name'] = 'Ім\'я';
$lang['AdminMain.index.heading_id'] = 'ІДЕНТИФІКАТОР';
$lang['AdminMain.index.extension_add'] = 'Додати розширення';
$lang['AdminMain.index.boxtitle_extensions'] = 'Генератор розширень - Розширення';
$lang['AdminMain.index.boxtitle_extension_generator'] = 'Генератор розширень';
$lang['AdminMain.index.page_title'] = 'Генератор розширень';
$lang['AdminMain.getfilelocations.custom'] = 'Нестандартний';
$lang['AdminMain.getfilelocations.upload'] = 'Каталог завантажень Blesta';
$lang['AdminMain.getfilelocations.nonmerchant'] = 'Каталог некомерційних шлюзів Blesta';
$lang['AdminMain.getfilelocations.merchant'] = 'Каталог торгових шлюзів Blesta';
$lang['AdminMain.getfilelocations.plugin'] = 'Каталог плагінів Blesta';
$lang['AdminMain.getfilelocations.module'] = 'Каталог модулів Blesta';
$lang['AdminMain.!success.nonmerchant_created'] = 'Новий шлюз успішно згенеровано і його можна знайти за адресою %1$s';
$lang['AdminMain.!success.merchant_created'] = 'Новий шлюз успішно згенеровано і його можна знайти за адресою %1$s';
$lang['AdminMain.!success.plugin_created'] = 'Новий плагін успішно згенеровано і його можна знайти за адресою %1$s';
$lang['AdminMain.!success.module_created'] = 'Новий модуль успішно згенеровано і його можна знайти за адресою %1$s';
$lang['AdminMain.!success.package_deleted'] = 'Розширення успішно видалено';
$lang['AdminMain.!notice.updating_installed_extension'] = 'Наразі це розширення встановлено. Наполегливо рекомендуємо видалити його перед регенерацією файлів, інакше це може призвести до порушення цілісності вашої бази даних.';
$lang['AdminMain.!notice.file_overwrite'] = 'Файли з цим розширенням вже існують у файлах Blesta і будуть перезаписані, якщо ви скористаєтеся каталогом Blesta.';
$lang['AdminMain.!notice.type_warning'] = 'Зміна типу розширення безповоротно видалить всі налаштування, збережені для цього розширення.';
$lang['AdminMain.!error.generation_failed'] = 'Не вдалося згенерувати ваше розширення.  Згенеровано виняток: %1$s';
$lang['AdminMain.!error.name_taken'] = 'Це ім\'я конфліктує з існуючим каталогом розширень.';

