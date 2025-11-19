<?php
/**
 * Transactions
 *
 * @package blesta
 * @subpackage blesta.language.pt_pt
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
$lang['Transactions.!error.type_id.exists'] = 'ID de tipo de transação inválido.';
$lang['Transactions.!error.is_lang.length'] = 'O comprimento de is_lang não pode exceder 1 carácter.';
$lang['Transactions.!error.is_lang.format'] = 'is_lang deve ser um número.';
$lang['Transactions.!error.type.valid'] = 'Selecione um tipo válido.';
$lang['Transactions.!error.name.length'] = 'O comprimento do nome não pode exceder 32 caracteres.';
$lang['Transactions.!error.name.empty'] = 'Por favor, introduza um nome.';
$lang['Transactions.!error.currency.mismatch'] = 'A moeda indicada não corresponde a pelo menos uma das facturas associadas.';
$lang['Transactions.!error.currency.missing'] = 'Por favor, defina uma moeda.';
$lang['Transactions.!error.date.format'] = 'A data aplicada é inválida.';
$lang['Transactions.!error.amounts.positive'] = 'Um ou mais valores de Valor a pagar são negativos. Certifique-se de que cada valor do Montante a Pagar é zero ou superior.';
$lang['Transactions.!error.amounts.overage'] = 'Um ou mais valores de Valor a pagar não puderam ser aplicados à fatura especificada. Certifique-se de que o Valor a pagar não excede o Valor devido na fatura, que a fatura está aberta e que a soma dos valores do Valor a pagar não excede o Valor de pagamento ou crédito.';
$lang['Transactions.!error.invoice_id.exists'] = 'ID de fatura inválido.';
$lang['Transactions.!error.transaction_id.currency_matches'] = 'Os montantes da fatura não puderam ser aplicados porque não correspondem à moeda da transação.';
$lang['Transactions.!error.message.length'] = 'O comprimento da mensagem não pode exceder 255 caracteres.';
$lang['Transactions.!error.date_added.format'] = 'A data da transação não pode ser uma data futura.';
$lang['Transactions.!error.transaction_id.exists'] = 'ID de transação inválido.';
$lang['Transactions.!error.status.format'] = 'Estado da transação inválido.';
$lang['Transactions.!error.reference_id.length'] = 'O comprimento do ID de referência não pode exceder 128 caracteres.';
$lang['Transactions.!error.parent_transaction_id.length'] = 'O comprimento do ID da transação dos pais não pode exceder 128 caracteres.';
$lang['Transactions.!error.transaction_id.length'] = 'O comprimento do ID da transação não pode exceder 128 caracteres.';
$lang['Transactions.!error.gateway_id.exists'] = 'ID de gateway inválida.';
$lang['Transactions.!error.transaction_type_id.exists'] = 'ID de tipo de transação inválido.';
$lang['Transactions.!error.type.format'] = 'Tipo de transação inválido.';
$lang['Transactions.!error.currency.length'] = 'A moeda deve ter 3 caracteres.';
$lang['Transactions.!error.amount.format'] = 'O montante deve ser um número.';
$lang['Transactions.!error.client_id.exists'] = 'ID de cliente inválido.';

