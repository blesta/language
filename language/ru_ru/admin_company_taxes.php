<?php
/**
 * Admin Company Taxes
 *
 * @package blesta
 * @subpackage blesta.language.ru_ru
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyTaxes.edit.field.editsubmit'] = 'Правило редактирования';
$lang['AdminCompanyTaxes.edit.field.state'] = 'Штат/провинция';
$lang['AdminCompanyTaxes.edit.field.country'] = 'Страна';
$lang['AdminCompanyTaxes.edit.field.amount'] = 'Сумма';
$lang['AdminCompanyTaxes.edit.field.name'] = 'Название налога';
$lang['AdminCompanyTaxes.edit.field.level2'] = 'Уровень 2';
$lang['AdminCompanyTaxes.edit.field.level1'] = 'Уровень 1';
$lang['AdminCompanyTaxes.edit.field.level'] = 'Уровень налогообложения';
$lang['AdminCompanyTaxes.edit.field.type'] = 'Тип налога';
$lang['AdminCompanyTaxes.edit.boxtitle_edit'] = 'Редактирование налогового правила';
$lang['AdminCompanyTaxes.edit.page_title'] = 'Настройки > Компания > Налоги > Редактировать налоговое правило';
$lang['AdminCompanyTaxes.add.field.addsubmit'] = 'Создать правило';
$lang['AdminCompanyTaxes.add.field.state'] = 'Штат/провинция';
$lang['AdminCompanyTaxes.add.field.country'] = 'Страна';
$lang['AdminCompanyTaxes.add.field.amount'] = 'Сумма';
$lang['AdminCompanyTaxes.add.field.name'] = 'Название налога';
$lang['AdminCompanyTaxes.add.field.level2'] = 'Уровень 2';
$lang['AdminCompanyTaxes.add.field.level1'] = 'Уровень 1';
$lang['AdminCompanyTaxes.add.field.level'] = 'Уровень налогообложения';
$lang['AdminCompanyTaxes.add.field.type'] = 'Тип налога';
$lang['AdminCompanyTaxes.add.boxtitle_add'] = 'Добавить правило налогообложения';
$lang['AdminCompanyTaxes.add.page_title'] = 'Настройки > Компания > Налоги > Добавить правило налогообложения';
$lang['AdminCompanyTaxes.rules.confirm_delete'] = 'Вы уверены, что хотите удалить это налоговое правило?';
$lang['AdminCompanyTaxes.rules.option_delete'] = 'Удалить';
$lang['AdminCompanyTaxes.rules.option_edit'] = 'Редактировать';
$lang['AdminCompanyTaxes.rules.text_all'] = 'Все';
$lang['AdminCompanyTaxes.rules.text_options'] = 'Опции';
$lang['AdminCompanyTaxes.rules.text_state'] = 'Штат/провинция';
$lang['AdminCompanyTaxes.rules.text_country'] = 'Страна';
$lang['AdminCompanyTaxes.rules.text_amount'] = 'Сумма';
$lang['AdminCompanyTaxes.rules.text_type'] = 'Тип';
$lang['AdminCompanyTaxes.rules.text_name'] = 'Имя';
$lang['AdminCompanyTaxes.rules.heading_level2'] = 'Правила уровня 2';
$lang['AdminCompanyTaxes.rules.heading_level1'] = 'Правила уровня 1';
$lang['AdminCompanyTaxes.rules.boxtitle_rules'] = 'Налоговые правила';
$lang['AdminCompanyTaxes.rules.categorylink_addrule'] = 'Добавить налоговое правило';
$lang['AdminCompanyTaxes.rules.no_results'] = 'Не существует налоговых правил уровня %1$s.';
$lang['AdminCompanyTaxes.rules.page_title'] = 'Настройки > Компания > Налоги > Налоговые правила';
$lang['AdminCompanyTaxes.basic.field_addsubmit'] = 'Обновление настроек';
$lang['AdminCompanyTaxes.basic.heading_tax_provider'] = '%1$s Настройки';
$lang['AdminCompanyTaxes.basic.field_taxid'] = 'Налоговый идентификатор/ВАТИН';
$lang['AdminCompanyTaxes.basic.note_cancelation_fee_tax'] = 'Если эта функция включена, все сборы за отмену будут облагаться налогом.';
$lang['AdminCompanyTaxes.basic.field_cancelation_fee_tax'] = 'Плата за отмену налога';
$lang['AdminCompanyTaxes.basic.note_setup_fee_tax'] = 'Если эта опция включена, все расходы на установку будут облагаться налогом.';
$lang['AdminCompanyTaxes.basic.field_setup_fee_tax'] = 'Плата за установку налога';
$lang['AdminCompanyTaxes.basic.note_cascade_tax'] = 'Если эта функция включена, то сначала будет начислен налог уровня 1 на общую сумму счета-фактуры, а налог уровня 2 будет начислен на эту новую общую сумму, включая налог уровня 1. В результате получается налог на налог. В противном случае уровень налога 1 и уровень налога 2 начисляются только на общую сумму счета-фактуры до уплаты налога.';
$lang['AdminCompanyTaxes.basic.field_cascade_tax'] = 'Каскадный налог';
$lang['AdminCompanyTaxes.basic.note_enable_tax'] = 'Установите этот флажок, чтобы включить налог для этой компании.';
$lang['AdminCompanyTaxes.basic.field_enable_tax'] = 'Включить налог';
$lang['AdminCompanyTaxes.basic.heading_general'] = 'Общие настройки';
$lang['AdminCompanyTaxes.basic.boxtitle_basic'] = 'Основные настройки налогов';
$lang['AdminCompanyTaxes.basic.page_title'] = 'Настройки > Компания > Налоги > Основные настройки налогов';
$lang['AdminCompanyTaxes.!tooltip.state'] = 'Выберите штат/провинцию, к которым применяется данное налоговое правило.';
$lang['AdminCompanyTaxes.!tooltip.country'] = 'Выберите страну, к которой применяется данное налоговое правило.';
$lang['AdminCompanyTaxes.!tooltip.amount'] = 'Сумма налога в процентах.';
$lang['AdminCompanyTaxes.!tooltip.name'] = 'Отображаемое название налога (например, Sales Tax).';
$lang['AdminCompanyTaxes.!tooltip.level'] = 'Уровень налога позволяет установить порядок налогообложения, если применяется несколько налоговых правил.';
$lang['AdminCompanyTaxes.!tooltip.type'] = 'Инклюзивный (Inclusive) будет рассчитывать налог как часть цены товара, которую вы установите, и будет вычитаться из цены товара для пользователей, освобожденных от уплаты налога.<br/>
Inclusive (Additive) будет рассчитывать налог в дополнение к установленным вами ценам на товары.<br/>
Exclusive (Эксклюзивный) будет рассчитывать налог в дополнение к установленным вами ценам на товары, но не будет включать его в общую сумму заказа.';
$lang['AdminCompanyTaxes.states.all'] = '-- Все...';
$lang['AdminCompanyTaxes.countries.all'] = '-- Все...';
$lang['AdminCompanyTaxes.!success.rule_deleted'] = 'Налоговое правило успешно удалено.';
$lang['AdminCompanyTaxes.!success.taxrule_updated'] = 'Налоговое правило было успешно обновлено!';
$lang['AdminCompanyTaxes.!success.taxrule_created'] = 'Налоговое правило успешно создано!';
$lang['AdminCompanyTaxes.!success.basic_updated'] = 'Настройки базового налога были успешно обновлены!';

