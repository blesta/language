<?php
/**
 * Admin Company Taxes
 *
 * @package blesta
 * @subpackage blesta.language.pt_br
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
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
$lang['AdminCompanyTaxes.edit.page_title'] = 'Definições > Empresa > Impostos > Editar regra de imposto'; // 'Configurações' to 'Definições' for UI menus
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
$lang['AdminCompanyTaxes.add.page_title'] = 'Definições > Empresa > Impostos > Adicionar regra de imposto'; // 'Configurações' to 'Definições'
$lang['AdminCompanyTaxes.rules.confirm_delete'] = 'Tem certeza de que pretende eliminar esta regra fiscal?'; // 'deseja' to 'pretende', 'essa' to 'esta'
$lang['AdminCompanyTaxes.rules.option_delete'] = 'Eliminar'; // 'Excluir' to 'Eliminar'
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
$lang['AdminCompanyTaxes.rules.boxtitle_rules'] = 'Regras fiscais'; // 'tributárias' to 'fiscais' (more common for tax rules)
$lang['AdminCompanyTaxes.rules.categorylink_addrule'] = 'Adicionar regra de imposto';
$lang['AdminCompanyTaxes.rules.no_results'] = 'Não há regras fiscais de nível %1$s.';
$lang['AdminCompanyTaxes.rules.page_title'] = 'Definições > Empresa > Impostos > Regras fiscais'; // 'Configurações' to 'Definições', 'tributárias' to 'fiscais'
$lang['AdminCompanyTaxes.basic.field_addsubmit'] = 'Atualizar definições'; // 'Atualizar' and 'configurações' to 'definições'
$lang['AdminCompanyTaxes.basic.heading_tax_provider'] = 'Definições %1$s'; // 'Configurações' to 'Definições'
$lang['AdminCompanyTaxes.basic.field_taxid'] = 'ID fiscal/VATIN';
$lang['AdminCompanyTaxes.basic.note_cancelation_fee_tax'] = 'Se ativado, todas as taxas de cancelamento serão tributadas.';
$lang['AdminCompanyTaxes.basic.field_cancelation_fee_tax'] = 'Tributar taxas de cancelamento'; // Phrasing slightly different for better PT-PT flow
$lang['AdminCompanyTaxes.basic.note_setup_fee_tax'] = 'Se ativado, todas as taxas de instalação serão tributadas.';
$lang['AdminCompanyTaxes.basic.field_setup_fee_tax'] = 'Tributar taxas de configuração'; // Phrasing slightly different for better PT-PT flow
$lang['AdminCompanyTaxes.basic.note_cascade_tax'] = 'Se ativado, o nível de imposto 1 será avaliado primeiro no total da factura, e o nível de imposto 2 será avaliado nesse novo total, incluindo o nível de imposto 1. Isto resulta num imposto sobre imposto. De outro modo, o nível de imposto 1 e o nível de imposto 2 são avaliados apenas no total da factura antes dos impostos.'; // 'fatura' to 'factura', 'Isso resulta em um' to 'Isto resulta num', 'De outra forma' to 'De outro modo'
$lang['AdminCompanyTaxes.basic.field_cascade_tax'] = 'Imposto em Cascata'; // 'de' to 'em' for more natural phrasing
$lang['AdminCompanyTaxes.basic.note_enable_tax'] = 'Marque esta opção para ativar o imposto para esta empresa.'; // 'essa' to 'esta' (2 occurrences)
$lang['AdminCompanyTaxes.basic.field_enable_tax'] = 'Ativar imposto';
$lang['AdminCompanyTaxes.basic.heading_general'] = 'Definições gerais'; // 'Configurações' to 'Definições'
$lang['AdminCompanyTaxes.basic.boxtitle_basic'] = 'Definições básicas de imposto'; // 'Configurações' to 'Definições', 'impostos' to 'imposto' (singular or collective)
$lang['AdminCompanyTaxes.basic.page_title'] = 'Definições > Empresa > Impostos > Definições básicas de imposto'; // 'Configurações' to 'Definições' (2 occurrences)
$lang['AdminCompanyTaxes.!tooltip.state'] = 'Selecione o estado/província ao qual esta regra tributária se aplica.'; // 'essa' to 'esta'
$lang['AdminCompanyTaxes.!tooltip.country'] = 'Selecione o país ao qual esta regra tributária se aplica.'; // 'essa' to 'esta'
$lang['AdminCompanyTaxes.!tooltip.amount'] = 'O valor do imposto como uma percentagem.'; // 'porcentagem' to 'percentagem'
$lang['AdminCompanyTaxes.!tooltip.name'] = 'O nome exibido do imposto (por exemplo, imposto sobre vendas).';
$lang['AdminCompanyTaxes.!tooltip.level'] = 'O nível de imposto permite que defina a ordem do imposto se várias regras de imposto forem aplicáveis.'; // 'você' removed for more formal/impersonal tone
$lang['AdminCompanyTaxes.!tooltip.type'] = 'Inclusivo (Inclusivo) calculará o imposto como parte dos preços dos itens que definir e será subtraído do preço do item para utilizadores isentos de impostos.<br/>
Inclusivo (Aditivo) calculará o imposto além dos preços dos itens que definir.<br/>
Exclusivo calculará o imposto além dos preços dos itens que definir, mas não o incluirá na exibição do total da encomenda.'; // 'você' removed, 'usuários' to 'utilizadores', 'Additive' to 'Aditivo', 'pedido' to 'encomenda'
$lang['AdminCompanyTaxes.states.all'] = '-- Todos';
$lang['AdminCompanyTaxes.countries.all'] = '-- Todos';
$lang['AdminCompanyTaxes.!success.rule_deleted'] = 'A regra de imposto foi eliminada com sucesso.'; // 'excluída' to 'eliminada'
$lang['AdminCompanyTaxes.!success.taxrule_updated'] = 'A regra fiscal foi atualizada com sucesso!'; // 'tributária' to 'fiscal'
$lang['AdminCompanyTaxes.!success.taxrule_created'] = 'A regra fiscal foi criada com sucesso!'; // 'tributária' to 'fiscal'
$lang['AdminCompanyTaxes.!success.basic_updated'] = 'As definições básicas de imposto foram atualizadas com sucesso!'; // 'As configurações do Basic Tax' to 'As definições básicas de imposto'
