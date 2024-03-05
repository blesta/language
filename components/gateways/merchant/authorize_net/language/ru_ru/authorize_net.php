<?php
/**
 * Authorize Net
 *
 * @package blesta
 * @subpackage blesta.language.ru_ru
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Authorize_net.!error.card_number.missing'] = 'Дата истечения срока действия не может быть обновлена без полного номера карты.';
$lang['Authorize_net.!error.dev_mode.valid'] = 'Режим разработчика должен быть установлен на "true", если он задан.';
$lang['Authorize_net.!error.test_mode.valid'] = 'Режим тестирования должен быть установлен на "true", если он задан.';
$lang['Authorize_net.!error.transaction_key.format'] = 'Ключ транзакции должен состоять из 16 символов.';
$lang['Authorize_net.!error.login_id.format'] = 'Идентификатор входа должен состоять не более чем из 20 символов и не может быть пустым.';
$lang['Authorize_net.validation_modes_live'] = 'Live';
$lang['Authorize_net.validation_modes_test'] = 'Тест';
$lang['Authorize_net.validation_modes_none'] = 'Нет';
$lang['Authorize_net.validation_note'] = 'Этот параметр определяет, какой тип проверки выполняется при хранении платежного счета с помощью CIM. \'None\' не выполняет никакой дополнительной проверки. \'Test\' выдает тестовую транзакцию, которая не отображается в выписке клиента, но генерирует электронное сообщение для продавца. \'Live\' обрабатывает транзакцию стоимостью $0,00 или $0,01, которая немедленно аннулируется. Проконсультируйтесь с поставщиком торгового счета, прежде чем устанавливать значение "Live", так как это может повлечь за собой комиссионные сборы.';
$lang['Authorize_net.validation_mode'] = 'Режим проверки платежного счета';
$lang['Authorize_net.apis_cim'] = 'CIM (должен быть включен Authorize.Net)';
$lang['Authorize_net.apis_aim'] = 'AIM (по умолчанию)';
$lang['Authorize_net.dev_mode_note'] = 'Включение этой опции приведет к публикации транзакций в среде разработчика Authorize.net. Для использования этой среды у вас должна быть тестовая учетная запись разработчика.';
$lang['Authorize_net.dev_mode'] = 'Режим разработчика';
$lang['Authorize_net.test_mode_note'] = 'Функция тестового режима поддерживается только AIM. Чтобы протестировать транзакции CIM, необходимо включить тестовый режим из учетной записи Authorize.net.';
$lang['Authorize_net.test_mode'] = 'Режим тестирования';
$lang['Authorize_net.api'] = 'Платежный API';
$lang['Authorize_net.transaction_key'] = 'Ключ транзакции';
$lang['Authorize_net.login_id'] = 'Идентификатор входа в систему';
$lang['Authorize_net.description'] = 'Надежная и быстрая обработка кредитных карт и ACH.';
$lang['Authorize_net.name'] = 'Authorize.Net';

