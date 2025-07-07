<?php
/**
 * Services
 *
 * @package blesta
 * @subpackage blesta.language.bg_bg
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Services.!error.pricing_id.overrides'] = 'Срокът на пакета не може да бъде променен, когато са зададени надценки на цените.';
$lang['Services.getActions.update_coupon'] = 'Актуализиране на купона';
$lang['Services.getActions.change_renew'] = 'Промяна на датата на подновяване';
$lang['Services.getActions.schedule_cancel'] = 'Анулиране на графика';
$lang['Services.getActions.cancel'] = 'Отмяна на';
$lang['Services.getActions.unsuspend'] = 'Разкачване на';
$lang['Services.getActions.suspend'] = 'Спиране на';
$lang['Services.getStatusTypes.in_review'] = 'В преглед';
$lang['Services.getStatusTypes.suspended'] = 'Суспендиран';
$lang['Services.getStatusTypes.pending'] = 'В очакване';
$lang['Services.getStatusTypes.canceled'] = 'Отменен';
$lang['Services.getStatusTypes.active'] = 'Активен';
$lang['Services.!error.prorate.format'] = 'Дали да се прилага пропорционално разпределение, трябва да бъде зададено като "true" или "false".';
$lang['Services.!error.service_id.has_children'] = 'Тази услуга не може да бъде изтрита, тъй като има подчинени услуги. Моля, отменете или изтрийте тези услуги и опитайте отново.';
$lang['Services.!error.status.valid'] = 'Могат да се изтриват само чакащи, отменени или в процес на разглеждане услуги.';
$lang['Services.!error.configoptions.valid'] = 'Една от избраните опции за конфигуриране не е валидна за услугата.';
$lang['Services.!error.date_canceled.valid'] = 'Трябва да зададете валидна дата, за да отмените тази услуга.';
$lang['Services.!error.pricing_id.valid'] = 'Трябва да изберете валиден термин.';
$lang['Services.!error.invoice_method.valid'] = 'Трябва да изберете валиден метод на фактуриране.';
$lang['Services.!error.fields[][encrypted].format'] = 'Полето за услугата за криптиране е в невалиден формат.';
$lang['Services.!error.fields[][value].empty'] = 'Стойността е празна от полетата за услуги.';
$lang['Services.!error.fields[][key].empty'] = 'Ключът е празен от полетата на услугата.';
$lang['Services.!error.use_module.format'] = 'Невалиден формат на модула за използване.';
$lang['Services.!error.date_canceled.format'] = 'Невалиден формат на отменената дата.';
$lang['Services.!error.date_suspended.format'] = 'Невалиден формат на суспендираната дата.';
$lang['Services.!error.date_last_renewed.format'] = 'Невалиден формат на последната подновена дата.';
$lang['Services.!error.date_renews.valid'] = 'Датата на подновяване трябва да е по-голяма от датата на последното подновяване на %1$s.';
$lang['Services.!error.date_renews.format'] = 'Невалиден формат на датата на подновяване.';
$lang['Services.!error.date_added.format'] = 'Невалиден формат на добавената дата.';
$lang['Services.!error.status.format'] = 'Невалиден статус.';
$lang['Services.!error.override_currency.format'] = 'Моля, изберете валидна валута.';
$lang['Services.!error.override_price.override'] = 'За да бъде заменена текущата цена, трябва да бъдат зададени и цена, и валута.';
$lang['Services.!error.override_price.format'] = 'Превишаването на цената трябва да бъде число.';
$lang['Services.!error.module_group.valid'] = 'Групата модули не съществува.';
$lang['Services.!error.module_row.valid'] = 'Редът на модула не съществува.';
$lang['Services.!error.qty.available'] = 'Достигнат лимит на количеството. Ако е възможно, моля, изберете по-малко количество.';
$lang['Services.!error.qty.length'] = 'Дължината на количеството не може да надвишава 10 символа.';
$lang['Services.!error.qty.format'] = 'Количеството трябва да е число.';
$lang['Services.!error.coupon_id.valid'] = 'Този купон не изглежда валиден.';
$lang['Services.!error.module_row_id.exists'] = 'Невалиден идентификатор на реда на модула.';
$lang['Services.!error.client_id.allowed'] = 'Клиентът няма достъп до този пакет.';
$lang['Services.!error.client_id.exists'] = 'Клиентът не съществува.';
$lang['Services.!error.pricing_id.exists'] = 'Моля, изберете валиден термин.';
$lang['Services.!error.id_value.valid'] = 'Не може да се определи стойността на идентификатора на фактурата.';
$lang['Services.!error.id_format.length'] = 'Идентификационният формат на фактурите не може да надвишава 64 символа.';
$lang['Services.!error.id_format.empty'] = 'Не е зададен формат на идентификатора за фактурите.';
$lang['Services.!error.package_group_id.exists'] = 'Невалиден идентификатор на група пакети.';
$lang['Services.!error.parent_service_id.parent'] = 'Идентификаторът на родителската услуга вече съществува като дете на друга услуга.';
$lang['Services.!error.parent_service_id.exists'] = 'Невалиден идентификатор на родителската услуга.';
$lang['Services.!error.service_id.exists'] = 'Невалиден идентификатор на услугата.';
$lang['Services.!error.move.unpaid_invoices'] = 'Услугата не може да бъде прехвърлена на друг клиент, тъй като има неплатени фактури.';
$lang['Services.!error.encrypted.format'] = 'Неправилен формат за криптирано.';
$lang['Services.!error.value.empty'] = 'Стойността на полето за услуги не трябва да е празна.';
$lang['Services.!error.key.length'] = 'Ключът на полето за услуги не трябва да надвишава 32 символа.';
$lang['Services.!error.key.empty'] = 'Ключът на полето на услугата не трябва да е празен.';
$lang['Services.getActions.uncancel'] = 'Повторно активиране на';
$lang['Services.!error.uncancel.unsupported'] = 'Тази услуга не може да бъде отменена, тъй като модулът не я поддържа.';

