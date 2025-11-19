<?php
/**
 * Invoices
 *
 * @package blesta
 * @subpackage blesta.language.pt_pt
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Invoices.!error.invoice_id.unique'] = 'A fatura de destino não pode fazer parte das facturas a fundir.';
$lang['Invoices.!error.invoice_id.status'] = 'A fatura de destino deve estar aberta e sem quaisquer transacções.';
$lang['Invoices.!error.invoice_ids.client'] = 'Todas as facturas devem pertencer ao mesmo cliente.';
$lang['Invoices.!error.invoice_ids.status'] = 'Todas as facturas devem estar abertas e sem qualquer transação.';
$lang['Invoices.!error.invoice_ids.currency'] = 'Todas as facturas devem ter a mesma moeda.';
$lang['Invoices.!error.invoice_ids.count'] = 'Devem ser selecionadas pelo menos duas facturas.';
$lang['Invoices.!line_item.parent_description'] = 'Serviço de Apoio à Criança de %1$s - %2$s:';
$lang['Invoices.!error.line_items.minimum_split'] = 'A fatura deve ter pelo menos 2 linhas para ser dividida.';
$lang['Invoices.!error.line_items.empty_split'] = 'Não foi selecionada nenhuma linha de faturação para dividir.';
$lang['Invoices.!error.lines[][tax].format'] = 'O imposto sobre a rubrica deve ser "verdadeiro" ou "falso';
$lang['Invoices.!error.lines[][amount].format'] = 'O custo unitário deve ser um número.';
$lang['Invoices.!error.lines[][qty].minimum'] = 'Introduza uma quantidade de 1 ou mais.';
$lang['Invoices.!error.lines[][qty].format'] = 'A quantidade deve ser um número.';
$lang['Invoices.!error.lines[][description].empty'] = 'Introduza uma descrição do item de linha.';
$lang['Invoices.!error.lines[][service_id].exists'] = 'ID de serviço inválido.';
$lang['Invoices.!error.lines[][id].exists'] = 'ID de item inválido.';
$lang['Invoices.!error.domain_renew.failed'] = 'Os domínios só podem ser renovados por um período máximo de 10 anos.';
$lang['Invoices.!error.invoice_id.draft'] = 'A fatura fornecida não é um projeto de fatura e, por isso, não pode ser eliminada.';
$lang['Invoices.!error.date_last_renewed.format'] = 'A última data de renovação da fatura periódica deve ser um formato de data válido.';
$lang['Invoices.!error.date_renews.format'] = 'A data de renovação da fatura periódica deve ser um formato de data válido.';
$lang['Invoices.!error.duration.format'] = 'A duração é inválida.';
$lang['Invoices.!error.period.format'] = 'O período é inválido.';
$lang['Invoices.!error.term.bounds'] = 'O termo deve estar compreendido entre 1 e 65535.';
$lang['Invoices.!error.term.format'] = 'O termo deve ser um número.';
$lang['Invoices.!error.delivery.exists'] = 'O método de entrega indicado não existe.';
$lang['Invoices.!error.currency.length'] = 'O código da moeda deve ter 3 caracteres.';
$lang['Invoices.!error.status.format'] = 'Estado inválido.';
$lang['Invoices.!error.autodebit.valid'] = 'Selecione se pretende ou não autorizar o débito automático para esta fatura.';
$lang['Invoices.!error.date_autodebit.format'] = 'A data de vencimento está num formato de data inválido.';
$lang['Invoices.!error.date_closed.format'] = 'A data de encerramento está num formato de data inválido.';
$lang['Invoices.!error.date_due.after_billed'] = 'A data de vencimento deve ser igual ou posterior à data de faturação.';
$lang['Invoices.!error.date_due.format'] = 'A data de vencimento está num formato de data inválido.';
$lang['Invoices.!error.date_billed.format'] = 'A data de faturação está num formato de data inválido.';
$lang['Invoices.!error.client_id.exists'] = 'ID de cliente inválido.';
$lang['Invoices.!error.id.amount_applied'] = 'As linhas da fatura, a moeda e o estado podem não ser actualizados porque já foi aplicado um montante a esta fatura.';
$lang['Invoices.!error.id_value.valid'] = 'Não é possível determinar o valor do ID da fatura.';
$lang['Invoices.!error.id_format.length'] = 'O formato de identificação das facturas não pode exceder 64 caracteres.';
$lang['Invoices.!error.id_format.empty'] = 'Nenhum formato de ID definido para facturas.';
$lang['Invoices.!error.invoice_add.failed'] = 'Não foi possível criar esta fatura. Por favor, tente novamente.';
$lang['Invoices.!error.delivery.length'] = 'O comprimento do método de entrega da fatura não pode exceder 32 caracteres.';
$lang['Invoices.!error.delivery.empty'] = 'Introduza um método de entrega da fatura.';
$lang['Invoices.!error.method.exists'] = 'É necessário definir pelo menos um método de entrega.';
$lang['Invoices.!error.invoice_recur_id.exists'] = 'ID de fatura recorrente inválido.';
$lang['Invoices.!error.invoice_id.exists'] = 'ID de fatura inválido.';
$lang['Invoices.cache_methods.json_pdf'] = 'JSON + PDF';
$lang['Invoices.cache_methods.json'] = 'JSON';
$lang['Invoices.cache_methods.none'] = 'Nenhum';
$lang['Invoices.types.proforma'] = 'Pro forma';
$lang['Invoices.types.standard'] = 'Padrão';
$lang['Invoices.status.void'] = 'Vazio';
$lang['Invoices.status.draft'] = 'Projeto';
$lang['Invoices.status.proforma'] = 'Pro forma';
$lang['Invoices.status.active'] = 'Ativo';
$lang['Invoices.!line_item.recurring_renew_description'] = '%1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.coupon_line_item_description_percent'] = 'Cupão %1$s - %2$s%%';
$lang['Invoices.!line_item.coupon_line_item_description_amount'] = 'Cupão %1$s';
$lang['Invoices.!line_item.prorated_credit'] = 'Crédito rateado';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_onetime'] = 'Adição rateada de %1$s %2$s x %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_date'] = '↳ Acréscimo proporcional de %1$s %2$s x %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_qty'] = 'Adição rateada de %1$s %2$s x %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_onetime'] = 'Acréscimo proporcional de %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_date'] = '↳ Acréscimo proporcional de %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_text'] = 'Acréscimo proporcional de %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_onetime'] = 'Acréscimo proporcional de %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_addition_date'] = '↳ Acréscimo proporcional de %1$s %2$s (%3$s - %4$s)';
$lang['Invoices.!line_item.service_option_prorated_addition'] = 'Acréscimo proporcional de %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_onetime'] = 'Atualização proporcional de %1$s de %2$sx %3$s para %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_date'] = 'Atualização proporcional de %1$s de %2$sx %3$s para %4$sx %5$s (%6$s - %7$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty'] = 'Atualização proporcional de %1$s de %2$sx %3$s para %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_onetime'] = 'Atualização proporcional de %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_date'] = 'Atualização proporcional de %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text'] = 'Atualização proporcional de %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_onetime'] = 'Atualização proporcional de %1$s de %2$s para %3$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_date'] = 'Atualização proporcional de %1$s de %2$s para %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade'] = 'Atualização proporcional de %1$s de %2$s para %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description_onetime'] = 'Atualização rateada de %1$s para %2$s - %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description'] = 'Atualização proporcional de %1$s para %2$s - %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_setup_fee_description'] = '↳ %1$s - %2$s Taxa de instalação';
$lang['Invoices.!line_item.service_option_renew_description'] = '↳ %1$s - %2$s';
$lang['Invoices.!line_item.service_setup_fee_description'] = '%1$s - %2$s Taxa de instalação';
$lang['Invoices.!line_item.service_cancel_fee_description'] = '%1$s - %2$s Taxa de cancelamento';
$lang['Invoices.!line_item.service_renew_description'] = '%5$s%1$s - ( - ) %2$s%3$s %4$s';
$lang['Invoices.!note_private.line_item'] = '- %1$s @ %2$s: %3$s';
$lang['Invoices.!note_private.removed_lines'] = 'Rubricas eliminadas:';
$lang['Invoices.!note_private.service_cancel_date'] = 'Serviço #%1$s cancelado %2$s.';
$lang['Invoices.getDeliveryMethods.postalmethods'] = 'PostalMethods';
$lang['Invoices.getDeliveryMethods.interfax'] = 'InterFax';
$lang['Invoices.getDeliveryMethods.paper'] = 'Papel';
$lang['Invoices.getDeliveryMethods.email'] = 'Correio eletrónico';
$lang['Invoices.getPricingPeriods.year'] = 'Ano';
$lang['Invoices.getPricingPeriods.month'] = 'Mês';
$lang['Invoices.getPricingPeriods.week'] = 'Semana';
$lang['Invoices.getPricingPeriods.day'] = 'Dia';
$lang['Invoices.!error.service.renew_onetime'] = 'Os serviços únicos não podem ser renovados.';

