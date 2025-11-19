<?php
/**
 * Services
 *
 * @package blesta
 * @subpackage blesta.language.pt_pt
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Services.getActions.update_coupon'] = 'Atualizar cupão';
$lang['Services.getActions.change_renew'] = 'Alterar data de renovação';
$lang['Services.getActions.schedule_cancel'] = 'Cancelamento do calendário';
$lang['Services.getActions.cancel'] = 'Cancelar';
$lang['Services.getActions.unsuspend'] = 'Não suspender';
$lang['Services.getActions.suspend'] = 'Suspender';
$lang['Services.getStatusTypes.in_review'] = 'Em análise';
$lang['Services.getStatusTypes.suspended'] = 'Suspenso';
$lang['Services.getStatusTypes.pending'] = 'Pendente';
$lang['Services.getStatusTypes.canceled'] = 'Cancelado';
$lang['Services.getStatusTypes.active'] = 'Ativo';
$lang['Services.!error.prorate.format'] = 'O valor a ratear deve ser definido como "verdadeiro" ou "falso".';
$lang['Services.!error.service_id.has_children'] = 'Este serviço não pode ser eliminado porque tem serviços infantis. Cancele ou elimine estes serviços e tente novamente.';
$lang['Services.!error.status.valid'] = 'Apenas os serviços pendentes, cancelados ou em revisão podem ser eliminados.';
$lang['Services.!error.configoptions.valid'] = 'Uma das opções configuráveis selecionadas não é válida para o serviço.';
$lang['Services.!error.date_canceled.valid'] = 'É necessário definir uma data válida para cancelar este serviço.';
$lang['Services.!error.pricing_id.valid'] = 'É necessário selecionar um termo válido.';
$lang['Services.!error.invoice_method.valid'] = 'É necessário selecionar um método de faturação válido.';
$lang['Services.!error.fields[][encrypted].format'] = 'Um campo de serviço para encriptação está num formato inválido.';
$lang['Services.!error.fields[][value].empty'] = 'Um valor está vazio nos campos de serviço.';
$lang['Services.!error.fields[][key].empty'] = 'Uma chave está vazia dos campos de serviço.';
$lang['Services.!error.use_module.format'] = 'Formato de módulo de utilização inválido.';
$lang['Services.!error.date_canceled.format'] = 'Formato de data cancelada inválido.';
$lang['Services.!error.date_suspended.format'] = 'Formato de data suspensa inválido.';
$lang['Services.!error.date_last_renewed.format'] = 'Formato inválido da última data de renovação.';
$lang['Services.!error.date_renews.valid'] = 'A data de renovação deve ser superior à última data de renovação de %1$s.';
$lang['Services.!error.date_renews.format'] = 'Formato de data de renovação inválido.';
$lang['Services.!error.date_added.format'] = 'Formato inválido da data adicionada.';
$lang['Services.!error.status.format'] = 'Estado inválido.';
$lang['Services.!error.override_currency.format'] = 'Selecione uma moeda válida.';
$lang['Services.!error.override_price.override'] = 'Tanto o preço como a moeda têm de ser definidos para substituir o preço atual.';
$lang['Services.!error.override_price.format'] = 'O preço de substituição deve ser um número.';
$lang['Services.!error.module_group.valid'] = 'O grupo de módulos não existe.';
$lang['Services.!error.module_row.valid'] = 'A linha do módulo não existe.';
$lang['Services.!error.qty.available'] = 'Limite de quantidade atingido. Se possível, selecionar uma quantidade inferior.';
$lang['Services.!error.qty.length'] = 'O comprimento da quantidade não pode exceder 10 caracteres.';
$lang['Services.!error.qty.format'] = 'A quantidade deve ser um número.';
$lang['Services.!error.coupon_id.valid'] = 'Este cupão não parece ser válido.';
$lang['Services.!error.module_row_id.exists'] = 'ID de linha de módulo inválido.';
$lang['Services.!error.client_id.allowed'] = 'O cliente não pode aceder a esse pacote.';
$lang['Services.!error.client_id.exists'] = 'O cliente não existe.';
$lang['Services.!error.pricing_id.overrides'] = 'O termo do pacote não pode ser alterado quando as substituições de preço são definidas.';
$lang['Services.!error.pricing_id.exists'] = 'Selecione um termo válido.';
$lang['Services.!error.id_value.valid'] = 'Não é possível determinar o valor do ID da fatura.';
$lang['Services.!error.id_format.length'] = 'O formato de identificação das facturas não pode exceder 64 caracteres.';
$lang['Services.!error.id_format.empty'] = 'Nenhum formato de ID definido para facturas.';
$lang['Services.!error.package_group_id.exists'] = 'ID de grupo de pacotes inválido.';
$lang['Services.!error.parent_service_id.parent'] = 'O ID do serviço pai já existe como filho de outro serviço.';
$lang['Services.!error.parent_service_id.exists'] = 'ID do serviço pai inválido.';
$lang['Services.!error.service_id.exists'] = 'ID de serviço inválido.';
$lang['Services.!error.move.unpaid_invoices'] = 'O serviço não pode ser transferido para outro cliente, porque tem facturas por pagar.';
$lang['Services.!error.encrypted.format'] = 'Formato inválido para encriptado.';
$lang['Services.!error.value.empty'] = 'O valor do campo de serviço não pode estar vazio.';
$lang['Services.!error.key.length'] = 'A chave do campo de serviço não deve exceder 32 caracteres.';
$lang['Services.!error.key.empty'] = 'A chave do campo de serviço não pode estar vazia.';
$lang['Services.!error.uncancel.unsupported'] = 'Este serviço não pode ser cancelado, uma vez que o módulo não o suporta.';
$lang['Services.getActions.uncancel'] = 'Reativar';

