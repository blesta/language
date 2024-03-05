<?php
/**
 * Invoices
 *
 * @package blesta
 * @subpackage blesta.language.pt_br
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Invoices.!error.line_items.minimum_split'] = 'A fatura deve ter pelo menos duas linhas para ser dividida.';
$lang['Invoices.!error.line_items.empty_split'] = 'Nenhuma linha de fatura foi selecionada para ser dividida.';
$lang['Invoices.!error.lines[][tax].format'] = 'O imposto sobre o item de linha deve ser "verdadeiro" ou "falso';
$lang['Invoices.!error.lines[][amount].format'] = 'O custo unitário deve ser um número.';
$lang['Invoices.!error.lines[][qty].minimum'] = 'Insira uma quantidade de 1 ou mais.';
$lang['Invoices.!error.lines[][qty].format'] = 'A quantidade deve ser um número.';
$lang['Invoices.!error.lines[][description].empty'] = 'Digite uma descrição do item de linha.';
$lang['Invoices.!error.lines[][service_id].exists'] = 'ID de serviço inválida.';
$lang['Invoices.!error.lines[][id].exists'] = 'ID de item de linha inválido.';
$lang['Invoices.!error.domain_renew.failed'] = 'Os domínios só podem ser renovados por até 10 anos.';
$lang['Invoices.!error.invoice_id.draft'] = 'A fatura fornecida não é um rascunho de fatura e, portanto, não pôde ser excluída.';
$lang['Invoices.!error.date_last_renewed.format'] = 'A data de renovação da última fatura recorrente deve ser um formato de data válido.';
$lang['Invoices.!error.date_renews.format'] = 'A data de renovação da fatura recorrente deve ser um formato de data válido.';
$lang['Invoices.!error.duration.format'] = 'A duração é inválida.';
$lang['Invoices.!error.period.format'] = 'O período é inválido.';
$lang['Invoices.!error.term.bounds'] = 'O termo deve estar entre 1 e 65535.';
$lang['Invoices.!error.term.format'] = 'O termo deve ser um número.';
$lang['Invoices.!error.delivery.exists'] = 'O método de entrega fornecido não existe.';
$lang['Invoices.!error.currency.length'] = 'O código da moeda deve ter 3 caracteres.';
$lang['Invoices.!error.status.format'] = 'Status inválido.';
$lang['Invoices.!error.autodebit.valid'] = 'Selecione se deseja ou não permitir o débito automático para essa fatura.';
$lang['Invoices.!error.date_autodebit.format'] = 'A data de vencimento está em um formato de data inválido.';
$lang['Invoices.!error.date_closed.format'] = 'A data de fechamento está em um formato de data inválido.';
$lang['Invoices.!error.date_due.after_billed'] = 'A data de vencimento deve ser igual ou posterior à data da cobrança.';
$lang['Invoices.!error.date_due.format'] = 'A data de vencimento está em um formato de data inválido.';
$lang['Invoices.!error.date_billed.format'] = 'A data faturada está em um formato de data inválido.';
$lang['Invoices.!error.client_id.exists'] = 'ID de cliente inválido.';
$lang['Invoices.!error.id.amount_applied'] = 'As linhas, a moeda e o status da fatura podem não ser atualizados porque um valor já foi aplicado a essa fatura.';
$lang['Invoices.!error.id_value.valid'] = 'Não foi possível determinar o valor do ID da fatura.';
$lang['Invoices.!error.id_format.length'] = 'O formato de ID das faturas não pode exceder 64 caracteres.';
$lang['Invoices.!error.id_format.empty'] = 'Nenhum formato de ID definido para faturas.';
$lang['Invoices.!error.invoice_add.failed'] = 'Não foi possível criar essa fatura. Por favor, tente novamente.';
$lang['Invoices.!error.delivery.length'] = 'O comprimento do método de entrega da fatura não pode exceder 32 caracteres.';
$lang['Invoices.!error.delivery.empty'] = 'Informe um método de entrega de fatura.';
$lang['Invoices.!error.method.exists'] = 'Você deve definir pelo menos um método de entrega.';
$lang['Invoices.!error.invoice_recur_id.exists'] = 'ID de fatura recorrente inválida.';
$lang['Invoices.!error.invoice_id.exists'] = 'ID de fatura inválida.';
$lang['Invoices.cache_methods.json_pdf'] = 'JSON + PDF';
$lang['Invoices.cache_methods.json'] = 'JSON';
$lang['Invoices.cache_methods.none'] = 'Nenhum';
$lang['Invoices.types.proforma'] = 'Pro forma';
$lang['Invoices.types.standard'] = 'Padrão';
$lang['Invoices.status.void'] = 'Vazio';
$lang['Invoices.status.draft'] = 'Rascunho';
$lang['Invoices.status.proforma'] = 'Pro forma';
$lang['Invoices.status.active'] = 'Ativo';
$lang['Invoices.!line_item.recurring_renew_description'] = '%1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.coupon_line_item_description_percent'] = 'Cupom %1$s - %2$s%%';
$lang['Invoices.!line_item.coupon_line_item_description_amount'] = 'Cupom %1$s';
$lang['Invoices.!line_item.prorated_credit'] = 'Crédito rateado';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_onetime'] = 'Adição rateada de %1$s %2$sx %3$s';
$lang['Invoices.!line_item.service_setup_fee_description'] = '%1$s - %2$s Taxa de instalação';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_date'] = 'Adição rateada de %1$s %2$sx %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_qty'] = 'Adição rateada de %1$s %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_onetime'] = 'Adição rateada de %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_date'] = 'Adição rateada de %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_text'] = 'Adição rateada de %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_onetime'] = 'Adição rateada de %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_addition_date'] = 'Adição rateada de %1$s %2$s (%3$s - %4$s)';
$lang['Invoices.!line_item.service_option_prorated_addition'] = 'Adição rateada de %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_onetime'] = 'Upgrade rateado de %1$s de %2$sx %3$s a %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_date'] = 'Upgrade rateado de %1$s de %2$sx %3$s a %4$sx %5$s (%6$s - %7$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty'] = 'Upgrade rateado de %1$s de %2$sx %3$s a %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_onetime'] = 'Upgrade rateado de %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_date'] = 'Upgrade rateado de %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text'] = 'Upgrade rateado de %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_onetime'] = 'Upgrade rateado de %1$s de %2$s a %3$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_date'] = 'Upgrade rateado de %1$s de %2$s a %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade'] = 'Upgrade rateado de %1$s de %2$s a %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description_onetime'] = 'Upgrade rateado de %1$s para %2$s - %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description'] = 'Upgrade rateado de %1$s para %2$s - %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_setup_fee_description'] = '%1$s - %2$s Taxa de instalação';
$lang['Invoices.!line_item.service_option_renew_description'] = '↳ %1$s - %2$s';
$lang['Invoices.!line_item.service_cancel_fee_description'] = '%1$s - %2$s Taxa de cancelamento';
$lang['Invoices.!line_item.service_renew_description'] = '%5$s%1$s - %2$s (%3$s - %4$s)';
$lang['Invoices.!note_private.line_item'] = '- %1$s @ %2$s: %3$s';
$lang['Invoices.!note_private.removed_lines'] = 'Itens de linha removidos:';
$lang['Invoices.!note_private.service_cancel_date'] = 'O serviço #%1$s foi cancelado %2$s.';
$lang['Invoices.getDeliveryMethods.postalmethods'] = 'PostalMethods';
$lang['Invoices.getDeliveryMethods.interfax'] = 'InterFax';
$lang['Invoices.getDeliveryMethods.paper'] = 'Papel';
$lang['Invoices.getDeliveryMethods.email'] = 'E-mail';
$lang['Invoices.getPricingPeriods.year'] = 'Ano';
$lang['Invoices.getPricingPeriods.month'] = 'Mês';
$lang['Invoices.getPricingPeriods.week'] = 'Semana';
$lang['Invoices.getPricingPeriods.day'] = 'Dia';

