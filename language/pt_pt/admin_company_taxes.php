<?php
/**
 * Admin Company Taxes
 *
 * @package blesta
 * @subpackage blesta.language.pt_pt
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyTaxes.edit.field.editsubmit'] = 'Editar regra';
$lang['AdminCompanyTaxes.edit.field.state'] = 'Estado/Província';
$lang['AdminCompanyTaxes.edit.field.country'] = 'País';
$lang['AdminCompanyTaxes.edit.field.amount'] = 'Montante';
$lang['AdminCompanyTaxes.edit.field.name'] = 'Nome do imposto';
$lang['AdminCompanyTaxes.edit.field.level2'] = 'Nível 2';
$lang['AdminCompanyTaxes.edit.field.level1'] = 'Nível 1';
$lang['AdminCompanyTaxes.edit.field.level'] = 'Nível de imposto';
$lang['AdminCompanyTaxes.edit.field.type'] = 'Tipo de imposto';
$lang['AdminCompanyTaxes.edit.boxtitle_edit'] = 'Editar regra de imposto';
$lang['AdminCompanyTaxes.edit.page_title'] = 'Definições &gt; Empresa &gt; Impostos &gt; Editar regra de imposto';
$lang['AdminCompanyTaxes.add.field.addsubmit'] = 'Criar regra';
$lang['AdminCompanyTaxes.add.field.state'] = 'Estado/Província';
$lang['AdminCompanyTaxes.add.field.country'] = 'País';
$lang['AdminCompanyTaxes.add.field.amount'] = 'Montante';
$lang['AdminCompanyTaxes.add.field.name'] = 'Nome do imposto';
$lang['AdminCompanyTaxes.add.field.level2'] = 'Nível 2';
$lang['AdminCompanyTaxes.add.field.level1'] = 'Nível 1';
$lang['AdminCompanyTaxes.add.field.level'] = 'Nível de imposto';
$lang['AdminCompanyTaxes.add.field.type'] = 'Tipo de imposto';
$lang['AdminCompanyTaxes.add.boxtitle_add'] = 'Adicionar regra de imposto';
$lang['AdminCompanyTaxes.add.page_title'] = 'Definições &gt; Empresa &gt; Impostos &gt; Adicionar regra de imposto';
$lang['AdminCompanyTaxes.rules.confirm_delete'] = 'Tem a certeza de que pretende eliminar esta regra fiscal?';
$lang['AdminCompanyTaxes.rules.option_delete'] = 'Eliminar';
$lang['AdminCompanyTaxes.rules.option_edit'] = 'Editar';
$lang['AdminCompanyTaxes.rules.text_all'] = 'Todos';
$lang['AdminCompanyTaxes.rules.text_options'] = 'Opções';
$lang['AdminCompanyTaxes.rules.text_state'] = 'Estado/Província';
$lang['AdminCompanyTaxes.rules.text_country'] = 'País';
$lang['AdminCompanyTaxes.rules.text_amount'] = 'Montante';
$lang['AdminCompanyTaxes.rules.text_type'] = 'Tipo';
$lang['AdminCompanyTaxes.rules.text_name'] = 'Nome';
$lang['AdminCompanyTaxes.rules.heading_level2'] = 'Regras de nível 2';
$lang['AdminCompanyTaxes.rules.heading_level1'] = 'Regras de nível 1';
$lang['AdminCompanyTaxes.rules.boxtitle_rules'] = 'Regras fiscais';
$lang['AdminCompanyTaxes.rules.categorylink_addrule'] = 'Adicionar regra de imposto';
$lang['AdminCompanyTaxes.rules.no_results'] = 'Não existe um nível %1$s de regras fiscais.';
$lang['AdminCompanyTaxes.rules.page_title'] = 'Definições &gt; Empresa &gt; Impostos &gt; Regras fiscais';
$lang['AdminCompanyTaxes.basic.field_addsubmit'] = 'Atualizar definições';
$lang['AdminCompanyTaxes.basic.heading_tax_provider'] = '%1$s Definições';
$lang['AdminCompanyTaxes.basic.field_taxid'] = 'Número de identificação fiscal/VATIN';
$lang['AdminCompanyTaxes.basic.note_cancelation_fee_tax'] = 'Se ativado, quaisquer taxas de cancelamento serão tributadas.';
$lang['AdminCompanyTaxes.basic.field_cancelation_fee_tax'] = 'Taxas de cancelamento de impostos';
$lang['AdminCompanyTaxes.basic.note_setup_fee_tax'] = 'Se ativado, quaisquer taxas de instalação serão tributadas.';
$lang['AdminCompanyTaxes.basic.field_setup_fee_tax'] = 'Taxas de instalação de impostos';
$lang['AdminCompanyTaxes.basic.note_cascade_tax'] = 'Se ativado, o nível de imposto 1 será avaliado primeiro no total da fatura, e o nível de imposto 2 será avaliado neste novo total incluindo o nível de imposto 1. Isso resulta em um imposto sobre imposto. Caso contrário, o nível de imposto 1 e o nível de imposto 2 são avaliados apenas no total da fatura antes dos impostos.';
$lang['AdminCompanyTaxes.basic.field_cascade_tax'] = 'Imposto de Cascata';
$lang['AdminCompanyTaxes.basic.note_enable_tax'] = 'Selecione esta opção para ativar o imposto para esta empresa.';
$lang['AdminCompanyTaxes.basic.field_enable_tax'] = 'Ativar imposto';
$lang['AdminCompanyTaxes.basic.heading_general'] = 'Definições gerais';
$lang['AdminCompanyTaxes.basic.boxtitle_basic'] = 'Definições básicas do imposto';
$lang['AdminCompanyTaxes.basic.page_title'] = 'Definições &gt; Empresa &gt; Impostos &gt; Definições básicas de impostos';
$lang['AdminCompanyTaxes.!tooltip.state'] = 'Selecione o estado/província a que esta regra fiscal se aplica.';
$lang['AdminCompanyTaxes.!tooltip.country'] = 'Selecione o país a que esta regra de imposto se aplica.';
$lang['AdminCompanyTaxes.!tooltip.amount'] = 'O montante do imposto em percentagem.';
$lang['AdminCompanyTaxes.!tooltip.name'] = 'O nome apresentado do imposto (por exemplo, Imposto sobre vendas).';
$lang['AdminCompanyTaxes.!tooltip.level'] = 'O nível de imposto permite-lhe definir a ordem de imposto se se aplicarem várias regras de imposto.';
$lang['AdminCompanyTaxes.!tooltip.type'] = 'Inclusive calculará o imposto como parte dos preços dos itens que definir e será subtraído do preço do item para utilizadores isentos de impostos.<br/>
Inclusive (Aditivo) calculará o imposto para além dos preços dos itens que definir.<br/>
Exclusivo calculará o imposto para além dos preços dos itens que definir, mas não o incluirá na apresentação do total da encomenda.';
$lang['AdminCompanyTaxes.states.all'] = '-- Todos';
$lang['AdminCompanyTaxes.countries.all'] = '-- Todos';
$lang['AdminCompanyTaxes.!success.rule_deleted'] = 'A regra de imposto foi eliminada com sucesso.';
$lang['AdminCompanyTaxes.!success.taxrule_updated'] = 'A regra fiscal foi actualizada com sucesso!';
$lang['AdminCompanyTaxes.!success.taxrule_created'] = 'A regra de imposto foi criada com sucesso!';
$lang['AdminCompanyTaxes.!success.basic_updated'] = 'As definições da Taxa Básica foram actualizadas com sucesso!';

