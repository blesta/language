<?php
/**
 * Authorize Net
 *
 * @package blesta
 * @subpackage blesta.language.uk_ua
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Authorize_net.!error.card_number.missing'] = 'Дата закінчення терміну дії не може бути змінена без повного номера картки.';
$lang['Authorize_net.!error.dev_mode.valid'] = 'Режим розробника повинен мати значення "true", якщо він заданий.';
$lang['Authorize_net.!error.test_mode.valid'] = 'Режим тестування повинен мати значення "true", якщо він заданий.';
$lang['Authorize_net.!error.transaction_key.format'] = 'Ключ транзакції повинен мати довжину 16 символів.';
$lang['Authorize_net.!error.login_id.format'] = 'Логін повинен містити не більше 20 символів і не може бути порожнім.';
$lang['Authorize_net.validation_modes_live'] = 'Наживо';
$lang['Authorize_net.validation_modes_test'] = 'Тест';
$lang['Authorize_net.validation_modes_none'] = 'Ні.';
$lang['Authorize_net.validation_note'] = 'Цей параметр визначає, який тип перевірки виконується, коли платіжний рахунок зберігається за допомогою CIM. "Ні" не виконує ніякої додаткової перевірки. "Тестова" - створює тестову транзакцію, яка не відображається у виписці клієнта, але генерує електронний лист для продавця. "Жива" обробляє транзакцію на суму $0.00 або $0.01, яка негайно анулюється. Проконсультуйтеся зі своїм постачальником Мерчант-акаунта, перш ніж встановлювати це значення на "Живий", оскільки може стягуватися комісія.';
$lang['Authorize_net.validation_mode'] = 'Режим валідації платіжного рахунку';
$lang['Authorize_net.apis_cim'] = 'CIM (має бути увімкнено через Authorize.Net)';
$lang['Authorize_net.apis_aim'] = 'AIM (за замовчуванням)';
$lang['Authorize_net.dev_mode_note'] = 'Якщо увімкнути цю опцію, транзакції будуть публікуватися в середовищі розробника Authorize.net. Щоб використовувати це середовище, ви повинні мати тестовий обліковий запис розробника.';
$lang['Authorize_net.dev_mode'] = 'Режим розробника';
$lang['Authorize_net.test_mode_note'] = 'Функція тестового режиму підтримується тільки в AIM. Щоб протестувати CIM-транзакції, ви повинні увімкнути тестовий режим у своєму обліковому записі Authorize.net.';
$lang['Authorize_net.test_mode'] = 'Тестовий режим';
$lang['Authorize_net.api'] = 'Платіжний API';
$lang['Authorize_net.transaction_key'] = 'Ключ транзакції';
$lang['Authorize_net.login_id'] = 'Ідентифікатор для входу';
$lang['Authorize_net.description'] = 'Надійна та швидка обробка кредитних карток та ACH';
$lang['Authorize_net.name'] = 'Authorize.Net';

