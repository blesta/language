<?php
/**
 * Client Pay
 *
 * @package blesta
 * @subpackage blesta.language.pt_pt
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientPay.setcontactview.text_none'] = 'Nenhum';
$lang['ClientPay.received.text_try_again'] = 'Tentar de novo';
$lang['ClientPay.received.invoices'] = 'Fatura nº';
$lang['ClientPay.received.amount'] = 'Montante';
$lang['ClientPay.received.transaction_id'] = 'ID da transação';
$lang['ClientPay.received.statement'] = 'O seu pagamento está a ser processado.';
$lang['ClientPay.received.boxtitle_received'] = 'Obrigado!';
$lang['ClientPay.received.page_title'] = 'Cliente %1$s Pagamento recebido';
$lang['ClientPay.confirm.description_credit'] = 'Crédito de pagamento';
$lang['ClientPay.confirm.description_invoice_number'] = '#%1$s';
$lang['ClientPay.confirm.description_invoice_separator'] = ',';
$lang['ClientPay.confirm.description_invoice'] = 'Fatura nº%1$s';
$lang['ClientPay.confirm.field_edit'] = 'Editar pagamento';
$lang['ClientPay.confirm.field_submit'] = 'Submeter pagamento';
$lang['ClientPay.confirm.total'] = 'Total:';
$lang['ClientPay.confirm.account_exp'] = 'expirações %1$s';
$lang['ClientPay.confirm.account_info_type'] = '%1$s';
$lang['ClientPay.confirm.account_info'] = '%1$s (%2$s) terminado em %3$s';
$lang['ClientPay.confirm.payment_details'] = 'Detalhes do pagamento';
$lang['ClientPay.confirm.boxtitle_confirm'] = 'Confirmar o pagamento';
$lang['ClientPay.confirm.page_title'] = 'Cliente %1$s Confirmar pagamento';
$lang['ClientPay.multipleinvoices.no_results'] = 'Não existem facturas nesta moeda.';
$lang['ClientPay.multipleinvoices.text_datedue'] = 'Data de vencimento';
$lang['ClientPay.multipleinvoices.text_invoice'] = 'Fatura nº';
$lang['ClientPay.multipleinvoices.text_due'] = 'Montante devido';
$lang['ClientPay.multipleinvoices.text_amount'] = 'Montante a pagar';
$lang['ClientPay.multipleinvoices.text_edit_amounts'] = 'Efetuar antes um pagamento parcial';
$lang['ClientPay.method.invoice_amount'] = 'Montante';
$lang['ClientPay.method.invoice_quantity'] = 'Quantidade';
$lang['ClientPay.method.invoice_description'] = 'Descrição';
$lang['ClientPay.method.heading_invoice'] = 'Fatura nº%1$s';
$lang['ClientPay.method.no_options'] = 'Não existem opções de pagamento disponíveis.';
$lang['ClientPay.method.field_credit_submit'] = 'Solicitar crédito e continuar';
$lang['ClientPay.method.field_submit'] = 'Rever e confirmar';
$lang['ClientPay.method.field_apply_credit'] = 'Solicitar crédito (%1$s Disponível)';
$lang['ClientPay.method.field_paymentaccount_ach'] = 'Contas ACH';
$lang['ClientPay.method.field_paymentaccount_autodebit'] = '(Débito automático) %1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.field_paymentaccount_cc'] = 'Contas de cartão de crédito';
$lang['ClientPay.method.field_paymentaccount'] = '%1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.heading_payment_options'] = 'Opções de pagamento';
$lang['ClientPay.method.heading_other_payment_options'] = 'Outras opções de pagamento';
$lang['ClientPay.method.field_newdetails'] = 'Novos dados de pagamento';
$lang['ClientPay.method.field_useaccount'] = 'Utilizar conta de pagamento';
$lang['ClientPay.method.boxtitle_method'] = 'Efetuar o pagamento';
$lang['ClientPay.method.page_title'] = 'Cliente %1$s Método de pagamento';
$lang['ClientPay.index.field_submit'] = 'Continuar';
$lang['ClientPay.index.field_credit'] = 'Outro montante de pagamento';
$lang['ClientPay.index.boxtitle_pay'] = 'Efetuar o pagamento';
$lang['ClientPay.index.page_title'] = 'Cliente %1$s Pagamento';
$lang['ClientPay.!error.payment_authorize'] = 'Não foi possível autorizar o pagamento para a conta de pagamento selecionada.  Selecione uma conta diferente ou tente novamente.';
$lang['ClientPay.!error.invoice_voided'] = 'Esta fatura foi anulada e não pode ser paga.';
$lang['ClientPay.!error.payment_amounts'] = 'Selecione as facturas a pagar ou introduza outro montante de pagamento.';
$lang['ClientPay.!error.invalid_amount'] = 'Os outros montantes de pagamento podem não ser negativos.';
$lang['ClientPay.!error.invalid_details'] = 'Selecione uma opção de pagamento.';
$lang['ClientPay.!info.ach_verification_redirect'] = 'É necessário verificar esta conta antes de a poder utilizar para efetuar um pagamento. Este processo irá redireccioná-lo para fora da página atual.';
$lang['ClientPay.!info.ach_verification'] = 'É necessário verificar esta conta antes de a poder utilizar para efetuar um pagamento.';
$lang['ClientPay.!info.unverified_email_button'] = 'Reenviar e-mail de verificação';
$lang['ClientPay.!info.unverified_email'] = 'Foi enviada uma ligação para o endereço de correio eletrónico que forneceu. Clique na hiperligação da mensagem de correio eletrónico para verificar o seu endereço de correio eletrónico antes de proceder ao pagamento.';
$lang['ClientPay.!success.invoice_paid'] = 'Esta fatura já foi paga anteriormente.';
$lang['ClientPay.!success.credit_partial_processed'] = 'Os créditos disponíveis foram aplicados, mas ainda existe um saldo. Por favor, complete esta transação pagando o remanescente abaixo.';
$lang['ClientPay.!success.credit_full_processed'] = 'Os créditos disponíveis foram aplicados.';
$lang['ClientPay.!success.payment_processed'] = 'O pagamento foi processado com sucesso para %1$s. Número da transação: %2$s';
$lang['ClientPay.method.invoice_balance_due'] = 'Saldo devedor';
$lang['ClientPay.method.invoice_paid_amount'] = 'Montante pago';
$lang['ClientPay.method.invoice_total'] = 'Total da fatura';
$lang['ClientPay.index.text_credit_max_only'] = 'Montante máximo: %1$s';
$lang['ClientPay.index.text_credit_min_only'] = 'Montante mínimo: %1$s';
$lang['ClientPay.index.text_credit_limits'] = 'Montante mínimo: %1$s - Montante máximo: %2$s';
$lang['ClientPay.!error.credit_maximum'] = 'O montante do crédito não pode exceder %1$s.';
$lang['ClientPay.!error.credit_minimum'] = 'O montante do crédito deve ser de, pelo menos, %1$s.';

