<?php
/**
 * Services
 *
 * @package blesta
 * @subpackage blesta.language.pt_br
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Services.!error.service_id.has_children'] = 'Esse serviço não pode ser excluído porque tem serviços infantis. Cancele ou exclua esses serviços e tente novamente.';
$lang['Services.getActions.update_coupon'] = 'Atualizar cupom';
$lang['Services.getActions.change_renew'] = 'Alterar data de renovação';
$lang['Services.getActions.schedule_cancel'] = 'Cancelamento de cronograma';
$lang['Services.getActions.cancel'] = 'Cancelar';
$lang['Services.getActions.unsuspend'] = 'Não suspender';
$lang['Services.getActions.suspend'] = 'Suspender';
$lang['Services.getStatusTypes.in_review'] = 'Em análise';
$lang['Services.getStatusTypes.suspended'] = 'Suspenso';
$lang['Services.getStatusTypes.pending'] = 'Pendente';
$lang['Services.getStatusTypes.canceled'] = 'Cancelado';
$lang['Services.getStatusTypes.active'] = 'Ativo';
$lang['Services.!error.prorate.format'] = 'A opção de ratear deve ser definida como "true" ou "false".';
$lang['Services.!error.status.valid'] = 'Somente serviços pendentes, cancelados ou em revisão podem ser excluídos.';
$lang['Services.!error.configoptions.valid'] = 'Uma das opções configuráveis selecionadas não é válida para o serviço.';
$lang['Services.!error.date_canceled.valid'] = 'Você deve definir uma data válida para cancelar esse serviço.';
$lang['Services.!error.pricing_id.valid'] = 'Você deve selecionar um termo válido.';
$lang['Services.!error.invoice_method.valid'] = 'Você deve selecionar um método de fatura válido.';
$lang['Services.!error.fields[][encrypted].format'] = 'Um campo de serviço para criptografia está em um formato inválido.';
$lang['Services.!error.fields[][value].empty'] = 'Um valor está vazio nos campos de serviço.';
$lang['Services.!error.fields[][key].empty'] = 'Uma chave está vazia nos campos de serviço.';
$lang['Services.!error.use_module.format'] = 'Formato de módulo de uso inválido.';
$lang['Services.!error.date_canceled.format'] = 'Formato de data cancelada inválido.';
$lang['Services.!error.date_suspended.format'] = 'Formato de data suspensa inválido.';
$lang['Services.!error.date_last_renewed.format'] = 'Formato inválido da última data de renovação.';
$lang['Services.!error.date_renews.valid'] = 'A data de renovação deve ser maior que a última data de renovação de %1$s.';
$lang['Services.!error.date_renews.format'] = 'Formato de data de renovação inválido.';
$lang['Services.!error.date_added.format'] = 'Formato de data adicionado inválido.';
$lang['Services.!error.status.format'] = 'Status inválido.';
$lang['Services.!error.override_currency.format'] = 'Selecione uma moeda válida.';
$lang['Services.!error.override_price.override'] = 'Tanto o preço quanto a moeda devem ser definidos para substituir o preço atual.';
$lang['Services.!error.override_price.format'] = 'A substituição de preço deve ser um número.';
$lang['Services.!error.module_group.valid'] = 'O grupo de módulos não existe.';
$lang['Services.!error.module_row.valid'] = 'A linha do módulo não existe.';
$lang['Services.!error.qty.available'] = 'Limite de quantidade atingido. Se possível, selecione uma quantidade menor.';
$lang['Services.!error.qty.length'] = 'O comprimento da quantidade não pode exceder 10 caracteres.';
$lang['Services.!error.qty.format'] = 'A quantidade deve ser um número.';
$lang['Services.!error.coupon_id.valid'] = 'Esse cupom não parece ser válido.';
$lang['Services.!error.module_row_id.exists'] = 'ID de linha de módulo inválido.';
$lang['Services.!error.client_id.allowed'] = 'O cliente não pode acessar esse pacote.';
$lang['Services.!error.client_id.exists'] = 'O cliente não existe.';
$lang['Services.!error.pricing_id.overrides'] = 'O prazo do pacote não pode ser alterado quando as substituições de preço são definidas.';
$lang['Services.!error.pricing_id.exists'] = 'Selecione um termo válido.';
$lang['Services.!error.id_value.valid'] = 'Não foi possível determinar o valor do ID da fatura.';
$lang['Services.!error.id_format.length'] = 'O formato de ID das faturas não pode exceder 64 caracteres.';
$lang['Services.!error.id_format.empty'] = 'Nenhum formato de ID definido para faturas.';
$lang['Services.!error.package_group_id.exists'] = 'ID de grupo de pacotes inválido.';
$lang['Services.!error.parent_service_id.parent'] = 'O ID do serviço pai já existe como filho de outro serviço.';
$lang['Services.!error.parent_service_id.exists'] = 'ID de serviço pai inválida.';
$lang['Services.!error.service_id.exists'] = 'ID de serviço inválida.';
$lang['Services.!error.move.unpaid_invoices'] = 'O serviço não pode ser transferido para outro cliente porque tem faturas não pagas.';
$lang['Services.!error.encrypted.format'] = 'Formato inválido para criptografia.';
$lang['Services.!error.value.empty'] = 'O valor do campo de serviço não pode estar vazio.';
$lang['Services.!error.key.length'] = 'A chave do campo de serviço não deve ter mais de 32 caracteres.';
$lang['Services.!error.key.empty'] = 'A chave do campo de serviço não pode estar vazia.';
$lang['Services.getActions.uncancel'] = 'Reativar';
$lang['Services.!error.uncancel.unsupported'] = 'Esse serviço não pode ser cancelado, pois o módulo não é compatível com ele.';

