<?php
/**
 * Transactions
 *
 * @package blesta
 * @subpackage blesta.language.pt_br
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Transactions.debit_types.credit'] = 'Crédito';
$lang['Transactions.debit_types.debit'] = 'Débito';
$lang['Transactions.status.returned'] = 'Devolvido';
$lang['Transactions.status.refunded'] = 'Reembolsado';
$lang['Transactions.status.pending'] = 'Pendente';
$lang['Transactions.status.error'] = 'Erro';
$lang['Transactions.status.void'] = 'Vazio';
$lang['Transactions.status.declined'] = 'Recusado';
$lang['Transactions.status.approved'] = 'Aprovado';
$lang['Transactions.types.other'] = 'Outros';
$lang['Transactions.types.ach'] = 'ACH';
$lang['Transactions.types.cc'] = 'Cartão de crédito';
$lang['Transactions.!error.type_id.exists'] = 'ID do tipo de transação inválido.';
$lang['Transactions.!error.is_lang.length'] = 'O comprimento de is_lang não pode exceder 1 caractere.';
$lang['Transactions.!error.is_lang.format'] = 'is_lang deve ser um número.';
$lang['Transactions.!error.type.valid'] = 'Selecione um tipo válido.';
$lang['Transactions.!error.name.length'] = 'O comprimento do nome não pode exceder 32 caracteres.';
$lang['Transactions.!error.name.empty'] = 'Digite um nome.';
$lang['Transactions.!error.currency.mismatch'] = 'A moeda fornecida não corresponde a pelo menos uma das faturas associadas.';
$lang['Transactions.!error.currency.missing'] = 'Defina uma moeda.';
$lang['Transactions.!error.date.format'] = 'A data aplicada é inválida.';
$lang['Transactions.!error.amounts.positive'] = 'Um ou mais valores de Amount to Pay são negativos. Certifique-se de que cada valor de Amount to Pay seja zero ou mais.';
$lang['Transactions.!error.amounts.overage'] = 'Um ou mais valores de Valor a Pagar não puderam ser aplicados à fatura especificada. Verifique se o valor a pagar não excede o valor devido na fatura, se a fatura está aberta e se a soma dos valores do valor a pagar não excede o valor do pagamento ou do crédito.';
$lang['Transactions.!error.invoice_id.exists'] = 'ID de fatura inválida.';
$lang['Transactions.!error.transaction_id.currency_matches'] = 'Os valores da fatura não puderam ser aplicados porque não correspondem à moeda da transação.';
$lang['Transactions.!error.message.length'] = 'O comprimento da mensagem não pode exceder 255 caracteres.';
$lang['Transactions.!error.date_added.format'] = 'A data da transação não pode ser uma data futura.';
$lang['Transactions.!error.transaction_id.exists'] = 'ID de transação inválido.';
$lang['Transactions.!error.status.format'] = 'Status de transação inválido.';
$lang['Transactions.!error.reference_id.length'] = 'O comprimento da ID de referência não pode exceder 128 caracteres.';
$lang['Transactions.!error.parent_transaction_id.length'] = 'O comprimento do ID da transação pai não pode exceder 128 caracteres.';
$lang['Transactions.!error.transaction_id.length'] = 'O comprimento do ID da transação não pode exceder 128 caracteres.';
$lang['Transactions.!error.gateway_id.exists'] = 'ID de gateway inválida.';
$lang['Transactions.!error.transaction_type_id.exists'] = 'ID de tipo de transação inválida.';
$lang['Transactions.!error.type.format'] = 'Tipo de transação inválido.';
$lang['Transactions.!error.currency.length'] = 'A moeda deve ter 3 caracteres.';
$lang['Transactions.!error.amount.format'] = 'O valor deve ser um número.';
$lang['Transactions.!error.client_id.exists'] = 'ID de cliente inválido.';

