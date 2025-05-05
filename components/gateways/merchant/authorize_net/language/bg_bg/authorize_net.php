<?php
/**
 * Authorize Net
 *
 * @package blesta
 * @subpackage blesta.language.bg_bg
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Authorize_net.!error.card_number.missing'] = 'Датата на изтичане на валидността не може да бъде актуализирана без пълния номер на картата.';
$lang['Authorize_net.!error.dev_mode.valid'] = 'Режимът за разработчици трябва да бъде зададен на "true", ако е зададен.';
$lang['Authorize_net.!error.test_mode.valid'] = 'Тестовият режим трябва да бъде зададен на "true", ако е зададен.';
$lang['Authorize_net.!error.transaction_key.format'] = 'Ключът на транзакцията трябва да е с дължина 16 символа.';
$lang['Authorize_net.!error.login_id.format'] = 'Идентификаторът за вход не трябва да съдържа повече от 20 символа и не може да бъде празен.';
$lang['Authorize_net.validation_modes_live'] = 'На живо';
$lang['Authorize_net.validation_modes_test'] = 'Тест';
$lang['Authorize_net.validation_modes_none'] = 'Няма';
$lang['Authorize_net.validation_note'] = 'Това контролира какъв тип валидиране се извършва, когато платежната сметка се съхранява с помощта на CIM. "Няма" не извършва допълнително валидиране. \'Тест\' издава тестова транзакция, която не се появява в извлечението на клиента, но ще генерира имейл до търговеца. \'Live\' (На живо) обработва транзакция за 0,00 USD или 0,01 USD, която незабавно се анулира. Консултирайте се с доставчика на търговска сметка, преди да зададете тази стойност на \'Live\', тъй като може да подлежите на такси.';
$lang['Authorize_net.validation_mode'] = 'Режим на потвърждаване на платежната сметка';
$lang['Authorize_net.apis_cim'] = 'CIM (трябва да бъде активиран от Authorize.Net)';
$lang['Authorize_net.apis_aim'] = 'AIM (по подразбиране)';
$lang['Authorize_net.dev_mode_note'] = 'Ако активирате тази опция, транзакциите ще бъдат публикувани в средата за разработчици на Authorize.net. Трябва да имате тестов акаунт за разработчици, за да използвате тази среда.';
$lang['Authorize_net.dev_mode'] = 'Режим за разработчици';
$lang['Authorize_net.test_mode_note'] = 'Функцията за тестови режим се поддържа само от AIM. За да тествате CIM транзакциите, трябва да активирате тестовия режим от вашия профил в Authorize.net.';
$lang['Authorize_net.test_mode'] = 'Тестов режим';
$lang['Authorize_net.api'] = 'API за плащания';
$lang['Authorize_net.transaction_key'] = 'Ключ на транзакцията';
$lang['Authorize_net.login_id'] = 'ID за вход';
$lang['Authorize_net.description'] = 'Надеждна и бърза обработка на кредитни карти и ACH';
$lang['Authorize_net.name'] = 'Authorize.Net';

