<?php
/**
 * Admin Company Taxes
 *
 * @package blesta
 * @subpackage blesta.language.pt_br
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyTaxes.edit.field.editsubmit'] = 'Editar regra';
$lang['AdminCompanyTaxes.edit.field.state'] = 'Estado/Província';
$lang['AdminCompanyTaxes.edit.field.country'] = 'País';
$lang['AdminCompanyTaxes.edit.field.amount'] = 'Valor';
$lang['AdminCompanyTaxes.edit.field.name'] = 'Nome do imposto';
$lang['AdminCompanyTaxes.edit.field.level2'] = 'Nível 2';
$lang['AdminCompanyTaxes.edit.field.level1'] = 'Nível 1';
$lang['AdminCompanyTaxes.edit.field.level'] = 'Nível de imposto';
$lang['AdminCompanyTaxes.edit.field.type'] = 'Tipo de imposto';
$lang['AdminCompanyTaxes.edit.boxtitle_edit'] = 'Editar regra de imposto';
$lang['AdminCompanyTaxes.edit.page_title'] = 'Configurações > Empresa > Impostos > Editar regra de imposto';
$lang['AdminCompanyTaxes.add.field.addsubmit'] = 'Criar regra';
$lang['AdminCompanyTaxes.add.field.state'] = 'Estado/Província';
$lang['AdminCompanyTaxes.add.field.country'] = 'País';
$lang['AdminCompanyTaxes.add.field.amount'] = 'Valor';
$lang['AdminCompanyTaxes.add.field.name'] = 'Nome do imposto';
$lang['AdminCompanyTaxes.add.field.level2'] = 'Nível 2';
$lang['AdminCompanyTaxes.add.field.level1'] = 'Nível 1';
$lang['AdminCompanyTaxes.add.field.level'] = 'Nível de imposto';
$lang['AdminCompanyTaxes.add.field.type'] = 'Tipo de imposto';
$lang['AdminCompanyTaxes.add.boxtitle_add'] = 'Adicionar regra de imposto';
$lang['AdminCompanyTaxes.add.page_title'] = 'Configurações > Empresa > Impostos > Adicionar regra de imposto';
$lang['AdminCompanyTaxes.rules.confirm_delete'] = 'Tem certeza de que deseja excluir essa regra fiscal?';
$lang['AdminCompanyTaxes.rules.option_delete'] = 'Excluir';
$lang['AdminCompanyTaxes.rules.option_edit'] = 'Editar';
$lang['AdminCompanyTaxes.rules.text_all'] = 'Todos';
$lang['AdminCompanyTaxes.rules.text_options'] = 'Opções';
$lang['AdminCompanyTaxes.rules.text_state'] = 'Estado/Província';
$lang['AdminCompanyTaxes.rules.text_country'] = 'País';
$lang['AdminCompanyTaxes.rules.text_amount'] = 'Valor';
$lang['AdminCompanyTaxes.rules.text_type'] = 'Tipo';
$lang['AdminCompanyTaxes.rules.text_name'] = 'Nome';
$lang['AdminCompanyTaxes.rules.heading_level2'] = 'Regras do Nível 2';
$lang['AdminCompanyTaxes.rules.heading_level1'] = 'Regras do Nível 1';
$lang['AdminCompanyTaxes.rules.boxtitle_rules'] = 'Regras tributárias';
$lang['AdminCompanyTaxes.rules.categorylink_addrule'] = 'Adicionar regra de imposto';
$lang['AdminCompanyTaxes.rules.no_results'] = 'Não há regras fiscais de nível %1$s.';
$lang['AdminCompanyTaxes.rules.page_title'] = 'Configurações > Empresa > Impostos > Regras de impostos';
$lang['AdminCompanyTaxes.basic.field_addsubmit'] = 'Atualizar configurações';
$lang['AdminCompanyTaxes.basic.heading_tax_provider'] = 'Configurações %1$s';
$lang['AdminCompanyTaxes.basic.field_taxid'] = 'ID fiscal/VATIN';
$lang['AdminCompanyTaxes.basic.note_cancelation_fee_tax'] = 'Se ativado, todas as taxas de cancelamento serão tributadas.';
$lang['AdminCompanyTaxes.basic.field_cancelation_fee_tax'] = 'Taxas de cancelamento de impostos';
$lang['AdminCompanyTaxes.basic.note_setup_fee_tax'] = 'Se ativado, todas as taxas de instalação serão tributadas.';
$lang['AdminCompanyTaxes.basic.field_setup_fee_tax'] = 'Taxas de configuração de impostos';
$lang['AdminCompanyTaxes.basic.note_cascade_tax'] = 'Se ativado, o nível de imposto 1 será avaliado primeiro no total da fatura, e o nível de imposto 2 será avaliado nesse novo total, incluindo o nível de imposto 1. Isso resulta em um imposto sobre imposto. De outra forma, o nível de imposto 1 e o nível de imposto 2 são avaliados apenas no total da fatura antes dos impostos.';
$lang['AdminCompanyTaxes.basic.field_cascade_tax'] = 'Imposto de Cascata';
$lang['AdminCompanyTaxes.basic.note_enable_tax'] = 'Marque essa opção para ativar o imposto para essa empresa.';
$lang['AdminCompanyTaxes.basic.field_enable_tax'] = 'Ativar imposto';
$lang['AdminCompanyTaxes.basic.heading_general'] = 'Configurações gerais';
$lang['AdminCompanyTaxes.basic.boxtitle_basic'] = 'Configurações básicas de impostos';
$lang['AdminCompanyTaxes.basic.page_title'] = 'Configurações > Empresa > Impostos > Configurações básicas de impostos';
$lang['AdminCompanyTaxes.!tooltip.state'] = 'Selecione o estado/província ao qual essa regra tributária se aplica.';
$lang['AdminCompanyTaxes.!tooltip.country'] = 'Selecione o país ao qual essa regra tributária se aplica.';
$lang['AdminCompanyTaxes.!tooltip.amount'] = 'O valor do imposto como uma porcentagem.';
$lang['AdminCompanyTaxes.!tooltip.name'] = 'O nome exibido do imposto (por exemplo, imposto sobre vendas).';
$lang['AdminCompanyTaxes.!tooltip.level'] = 'O nível de imposto permite que você defina a ordem do imposto se várias regras de imposto forem aplicáveis.';
$lang['AdminCompanyTaxes.!tooltip.type'] = 'Inclusive (Inclusivo) calculará o imposto como parte dos preços dos itens que você definir e será subtraído do preço do item para usuários isentos de impostos.<br/>
Inclusive (Additive) calculará o imposto além dos preços dos itens que você definir.<br/>
Exclusive calculará o imposto além dos preços dos itens que você definir, mas não o incluirá na exibição do total do pedido.';
$lang['AdminCompanyTaxes.states.all'] = '-- Todos';
$lang['AdminCompanyTaxes.countries.all'] = '-- Todos';
$lang['AdminCompanyTaxes.!success.rule_deleted'] = 'A regra de imposto foi excluída com sucesso.';
$lang['AdminCompanyTaxes.!success.taxrule_updated'] = 'A regra tributária foi atualizada com sucesso!';
$lang['AdminCompanyTaxes.!success.taxrule_created'] = 'A regra tributária foi criada com sucesso!';
$lang['AdminCompanyTaxes.!success.basic_updated'] = 'As configurações do Basic Tax foram atualizadas com sucesso!';

