<?php
/**
 * Client Pay
 *
 * @package blesta
 * @subpackage blesta.language.pt_br
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientPay.index.field_credit'] = 'Outro valor de pagamento';
$lang['ClientPay.setcontactview.text_none'] = 'Nenhum';
$lang['ClientPay.received.text_try_again'] = 'Tente novamente';
$lang['ClientPay.received.invoices'] = 'Número da fatura';
$lang['ClientPay.received.amount'] = 'Valor';
$lang['ClientPay.received.transaction_id'] = 'ID da transação';
$lang['ClientPay.received.statement'] = 'Seu pagamento está sendo processado.';
$lang['ClientPay.received.boxtitle_received'] = 'Obrigado!';
$lang['ClientPay.received.page_title'] = 'Cliente %1$s Pagamento recebido';
$lang['ClientPay.confirm.description_credit'] = 'Crédito de pagamento';
$lang['ClientPay.confirm.description_invoice_number'] = '#%1$s';
$lang['ClientPay.confirm.description_invoice_separator'] = ',';
$lang['ClientPay.confirm.description_invoice'] = 'Fatura #%1$s';
$lang['ClientPay.confirm.field_edit'] = 'Editar pagamento';
$lang['ClientPay.confirm.field_submit'] = 'Enviar pagamento';
$lang['ClientPay.confirm.total'] = 'Total:';
$lang['ClientPay.confirm.account_exp'] = 'expira %1$s';
$lang['ClientPay.confirm.account_info_type'] = '%1$s';
$lang['ClientPay.confirm.account_info'] = '%1$s (%2$s) terminando em %3$s';
$lang['ClientPay.confirm.payment_details'] = 'Detalhes do pagamento';
$lang['ClientPay.confirm.boxtitle_confirm'] = 'Confirmar pagamento';
$lang['ClientPay.confirm.page_title'] = 'Cliente %1$s Confirmar Pagamento';
$lang['ClientPay.multipleinvoices.no_results'] = 'Não há faturas nessa moeda.';
$lang['ClientPay.multipleinvoices.text_datedue'] = 'Data de vencimento';
$lang['ClientPay.multipleinvoices.text_invoice'] = 'Número da fatura';
$lang['ClientPay.multipleinvoices.text_due'] = 'Valor devido';
$lang['ClientPay.multipleinvoices.text_amount'] = 'Valor a pagar';
$lang['ClientPay.multipleinvoices.text_edit_amounts'] = 'Em vez disso, faça um pagamento parcial';
$lang['ClientPay.method.invoice_amount'] = 'Valor';
$lang['ClientPay.index.boxtitle_pay'] = 'Efetuar pagamento';
$lang['ClientPay.method.invoice_quantity'] = 'Quantidade';
$lang['ClientPay.method.invoice_description'] = 'Descrição';
$lang['ClientPay.method.heading_invoice'] = 'Fatura #%1$s';
$lang['ClientPay.method.no_options'] = 'Não há opções de pagamento disponíveis.';
$lang['ClientPay.method.field_credit_submit'] = 'Solicitar crédito e continuar';
$lang['ClientPay.index.page_title'] = 'Cliente %1$s Paga';
$lang['ClientPay.method.field_submit'] = 'Revisar e confirmar';
$lang['ClientPay.method.field_apply_credit'] = 'Solicitar crédito (%1$s disponíveis)';
$lang['ClientPay.method.field_paymentaccount_ach'] = 'Contas ACH';
$lang['ClientPay.method.field_paymentaccount_autodebit'] = '(Débito automático) %1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.field_paymentaccount_cc'] = 'Contas de cartão de crédito';
$lang['ClientPay.method.field_paymentaccount'] = '%1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.heading_payment_options'] = 'Opções de pagamento';
$lang['ClientPay.method.heading_other_payment_options'] = 'Outras opções de pagamento';
$lang['ClientPay.method.field_newdetails'] = 'Novos detalhes de pagamento';
$lang['ClientPay.method.field_useaccount'] = 'Usar conta de pagamento';
$lang['ClientPay.method.boxtitle_method'] = 'Efetuar pagamento';
$lang['ClientPay.method.page_title'] = 'Método de pagamento do cliente %1$s';
$lang['ClientPay.index.field_submit'] = 'Continuar';
$lang['ClientPay.!error.payment_authorize'] = 'O pagamento não pôde ser autorizado para a conta de pagamento selecionada.  Selecione uma conta diferente ou tente novamente.';
$lang['ClientPay.!error.invoice_voided'] = 'Essa fatura foi anulada e não pode ser paga.';
$lang['ClientPay.!error.payment_amounts'] = 'Selecione as faturas a serem pagas ou insira outro valor de pagamento.';
$lang['ClientPay.!error.invalid_amount'] = 'Outros valores de pagamento podem não ser negativos.';
$lang['ClientPay.!error.invalid_details'] = 'Selecione uma opção de pagamento.';
$lang['ClientPay.!info.ach_verification_redirect'] = 'Você precisa verificar essa conta antes de poder usá-la para fazer um pagamento. Esse processo o redirecionará para fora da página atual.';
$lang['ClientPay.!info.ach_verification'] = 'Você precisa verificar essa conta antes de poder usá-la para fazer um pagamento.';
$lang['ClientPay.!info.unverified_email_button'] = 'Reenviar e-mail de verificação';
$lang['ClientPay.!info.unverified_email'] = 'Um link foi enviado para o endereço de e-mail que você forneceu. Clique no link do e-mail para verificar seu endereço de e-mail antes de continuar a efetuar o pagamento.';
$lang['ClientPay.!success.invoice_paid'] = 'Essa fatura já foi paga anteriormente.';
$lang['ClientPay.!success.credit_partial_processed'] = 'Os créditos disponíveis foram aplicados, mas ainda há um saldo. Conclua essa transação pagando o restante abaixo.';
$lang['ClientPay.!success.credit_full_processed'] = 'Os créditos disponíveis foram aplicados.';
$lang['ClientPay.!success.payment_processed'] = 'O pagamento foi processado com sucesso para %1$s. Número da transação: %2$s';
$lang['ClientPay.method.invoice_balance_due'] = 'Saldo devedor';
$lang['ClientPay.method.invoice_paid_amount'] = 'Valor pago';
$lang['ClientPay.method.invoice_total'] = 'Total da fatura';
$lang['ClientPay.index.text_credit_max_only'] = 'Valor máximo: %1$s';
$lang['ClientPay.index.text_credit_min_only'] = 'Valor mínimo: %1$s';
$lang['ClientPay.index.text_credit_limits'] = 'Valor mínimo: %1$s - Valor máximo: %2$s';
$lang['ClientPay.!error.credit_maximum'] = 'O valor do crédito não pode exceder %1$s.';
$lang['ClientPay.!error.credit_minimum'] = 'O valor do crédito deve ser de, no mínimo, %1$s.';

