<?php
/**
 * Services
 *
 * @package blesta
 * @subpackage blesta.language.ru_ru
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Services.getActions.update_coupon'] = 'Обновить купон';
$lang['Services.getActions.change_renew'] = 'Изменить дату продления';
$lang['Services.getActions.schedule_cancel'] = 'Отмена расписания';
$lang['Services.getActions.cancel'] = 'Отмена';
$lang['Services.getActions.unsuspend'] = 'Развернуть';
$lang['Services.getActions.suspend'] = 'Приостановить';
$lang['Services.getStatusTypes.in_review'] = 'В обзоре';
$lang['Services.getStatusTypes.suspended'] = 'Приостановлено';
$lang['Services.getStatusTypes.pending'] = 'В ожидании';
$lang['Services.getStatusTypes.canceled'] = 'Отменено';
$lang['Services.getStatusTypes.active'] = 'Активный';
$lang['Services.!error.prorate.format'] = 'Для параметра "Пропорция" должно быть установлено значение "true" или "false".';
$lang['Services.!error.service_id.has_children'] = 'Эта услуга не может быть удалена, поскольку в ней есть детские услуги. Пожалуйста, отмените или удалите эти услуги и повторите попытку.';
$lang['Services.!error.status.valid'] = 'Удалять можно только отложенные, отмененные или находящиеся на рассмотрении услуги.';
$lang['Services.!error.configoptions.valid'] = 'Один из выбранных настраиваемых параметров не действителен для данной услуги.';
$lang['Services.!error.date_canceled.valid'] = 'Вы должны установить действительную дату для отмены этой услуги.';
$lang['Services.!error.pricing_id.valid'] = 'Вы должны выбрать действительный термин.';
$lang['Services.!error.invoice_method.valid'] = 'Вы должны выбрать действительный метод выставления счета.';
$lang['Services.!error.fields[][encrypted].format'] = 'Служебное поле для шифрования имеет неправильный формат.';
$lang['Services.!error.fields[][value].empty'] = 'Значение пусто из служебных полей.';
$lang['Services.!error.fields[][key].empty'] = 'Ключ не содержит служебных полей.';
$lang['Services.!error.use_module.format'] = 'Неверный формат модуля использования.';
$lang['Services.!error.date_canceled.format'] = 'Неверный формат отмененной даты.';
$lang['Services.!error.date_suspended.format'] = 'Неверный формат приостановленной даты.';
$lang['Services.!error.date_last_renewed.format'] = 'Неверный формат даты последнего обновления.';
$lang['Services.!error.date_renews.valid'] = 'Дата продления должна быть больше, чем дата последнего продления %1$s.';
$lang['Services.!error.date_renews.format'] = 'Неверный формат даты обновления.';
$lang['Services.!error.date_added.format'] = 'Неверный формат добавления даты.';
$lang['Services.!error.status.format'] = 'Неверный статус.';
$lang['Services.!error.override_currency.format'] = 'Пожалуйста, выберите действительную валюту.';
$lang['Services.!error.override_price.override'] = 'Чтобы отменить текущую цену, необходимо задать и цену, и валюту.';
$lang['Services.!error.override_price.format'] = 'Переопределение цены должно быть числом.';
$lang['Services.!error.module_group.valid'] = 'Группа модулей не существует.';
$lang['Services.!error.module_row.valid'] = 'Строка модуля не существует.';
$lang['Services.!error.qty.available'] = 'Достигнут лимит количества. Если возможно, пожалуйста, выберите меньшее количество.';
$lang['Services.!error.qty.length'] = 'Длина количества не должна превышать 10 символов.';
$lang['Services.!error.qty.format'] = 'Количество должно быть числом.';
$lang['Services.!error.coupon_id.valid'] = 'Этот купон, похоже, не действует.';
$lang['Services.!error.module_row_id.exists'] = 'Неверный идентификатор строки модуля.';
$lang['Services.!error.client_id.allowed'] = 'Клиент не может получить доступ к этому пакету.';
$lang['Services.!error.client_id.exists'] = 'Клиент не существует.';
$lang['Services.!error.pricing_id.overrides'] = 'Срок действия пакета не может быть изменен, если установлены переопределения цены.';
$lang['Services.!error.pricing_id.exists'] = 'Пожалуйста, выберите правильный термин.';
$lang['Services.!error.id_value.valid'] = 'Невозможно определить значение идентификатора счета-фактуры.';
$lang['Services.!error.id_format.length'] = 'Формат идентификатора для счетов-фактур не должен превышать 64 символов.';
$lang['Services.!error.id_format.empty'] = 'Для счетов-фактур не установлен формат идентификатора.';
$lang['Services.!error.package_group_id.exists'] = 'Неверный идентификатор группы пакетов.';
$lang['Services.!error.parent_service_id.parent'] = 'Идентификатор родительской службы уже существует в качестве дочерней службы для другой службы.';
$lang['Services.!error.parent_service_id.exists'] = 'Неверный идентификатор родительской службы.';
$lang['Services.!error.service_id.exists'] = 'Неверный идентификатор службы.';
$lang['Services.!error.move.unpaid_invoices'] = 'Услуга не может быть передана другому клиенту, потому что у него есть неоплаченные счета.';
$lang['Services.!error.encrypted.format'] = 'Неверный формат для зашифрованного.';
$lang['Services.!error.value.empty'] = 'Значение служебного поля не должно быть пустым.';
$lang['Services.!error.key.length'] = 'Ключ служебного поля не должен превышать 32 символов.';
$lang['Services.!error.key.empty'] = 'Ключ служебного поля не должен быть пустым.';

