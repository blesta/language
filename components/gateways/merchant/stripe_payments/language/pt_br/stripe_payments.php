<?php
/**
 * Stripe Payments
 *
 * @package blesta
 * @subpackage blesta.language.pt_br
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['StripePayments.!error.ach.invalid_account'] = 'Não foi possível localizar a conta bancária desse cliente.';
$lang['StripePayments.!error.ach.unverified'] = 'Não foi possível verificar a conta bancária. Confirme os valores dos depósitos e tente novamente.';
$lang['StripePayments.!error.auth'] = 'O gateway não pôde se autenticar.';
$lang['StripePayments.!error.bank_account_unverified'] = 'Você precisa verificar sua conta bancária antes de poder usá-la para fazer um pagamento.';
$lang['StripePayments.!error.india_mandate_max_amount.format'] = 'Insira um valor válido para o valor máximo da cobrança recorrente.';
$lang['StripePayments.!error.invalid_request_error'] = 'O gateway de pagamento retornou um erro ao processar a solicitação.';
$lang['StripePayments.!error.publishable_key.empty'] = 'Digite uma chave publicável.';
$lang['StripePayments.!error.secret_key.empty'] = 'Digite uma chave secreta.';
$lang['StripePayments.!error.secret_key.valid'] = 'Não foi possível conectar-se à API do Stripe usando a chave secreta fornecida.';
$lang['StripePayments.ach_form.field_account_number'] = 'Número da conta';
$lang['StripePayments.ach_form.field_first_deposit'] = 'Primeiro depósito';
$lang['StripePayments.ach_form.field_holder_type'] = 'Tipo de suporte';
$lang['StripePayments.ach_form.field_holder_type_company'] = 'Empresa';
$lang['StripePayments.ach_form.field_holder_type_individual'] = 'Individual';
$lang['StripePayments.ach_form.field_routing_number'] = 'Número da conta corrente';
$lang['StripePayments.ach_form.field_second_deposit'] = 'Segundo depósito';
$lang['StripePayments.ach_form.field_type'] = 'Tipo de conta';
$lang['StripePayments.ach_form.mandate_authorization'] = 'Ao enviar este formulário, o usuário autoriza a %1$s a debitar da conta bancária especificada acima qualquer valor devido por cobranças decorrentes do uso dos serviços da %1$s e/ou da compra de produtos da %1$s, de acordo com o site e os termos da %1$s, até que esta autorização seja revogada. O usuário poderá alterar ou cancelar esta autorização a qualquer momento, mediante notificação à %1$s com 30 (trinta) dias de antecedência.';
$lang['StripePayments.ach_form.mandate_future_usage'] = 'Se você usar os serviços da %1$s ou comprar produtos adicionais periodicamente de acordo com os termos da %1$s, você autoriza a %1$s a debitar sua conta bancária periodicamente. Os pagamentos que não se enquadrarem nos débitos regulares autorizados acima somente serão debitados após a obtenção de sua autorização.';
$lang['StripePayments.ach_form.verification_notice'] = 'A conta bancária atualmente cadastrada não foi verificada. Ao inserir os novos dados da conta bancária abaixo, os dados atuais serão substituídos.';
$lang['StripePayments.charge_description'] = 'Cobrança de %1$s';
$lang['StripePayments.charge_description_default'] = 'Cobrança de um valor específico';
$lang['StripePayments.description'] = 'Usa o Stripe Elements e a API de solicitação de pagamento para lidar automaticamente com o 3D Secure e o SCA para enviar cartões de crédito diretamente pelo Stripe';
$lang['StripePayments.heading_migrate_accounts'] = 'Migrar contas de pagamento antigas';
$lang['StripePayments.india_mandate_max_amount'] = 'Valor máximo da cobrança recorrente (Índia)';
$lang['StripePayments.india_mandate_max_amount_note'] = 'Obrigatório para habilitar cobranças recorrentes automáticas para cartões emitidos na Índia. Este é o valor máximo que pode ser cobrado de um cartão desse tipo em qualquer pagamento futuro fora da sessão, na moeda em que a transação estiver sendo processada. Deixe em branco para permitir que os cartões indianos sejam salvos sem a necessidade de registro para cobranças recorrentes automáticas.';
$lang['StripePayments.migrate_accounts'] = 'Migrar contas';
$lang['StripePayments.name'] = 'Stripe Payments';
$lang['StripePayments.publishable_key'] = 'Chave publicável de API';
$lang['StripePayments.request_three_d_secure'] = 'Fluxo de autenticação 3D Secure';
$lang['StripePayments.request_three_d_secure_automatic'] = 'Permitir que o Stripe determine quando apresentar um desafio do 3D Secure';
$lang['StripePayments.request_three_d_secure_challenge'] = 'Apresentar o desafio do 3D Secure sempre que um cliente salvar um método de pagamento ou processar um método de pagamento (armazenado ou não armazenado)';
$lang['StripePayments.request_three_d_secure_frictionless'] = 'Apresentar o desafio do 3D Secure sempre que um cliente salvar um método de pagamento ou processar um método de pagamento não armazenado';
$lang['StripePayments.request_three_d_secure_note'] = 'Se você for um usuário do Stripe baseado na Índia, antes de salvar um novo cartão com o Stripe, deverá sempre executar a autenticação 3D Secure (3DS).';
$lang['StripePayments.secret_key'] = 'Chave secreta da API';
$lang['StripePayments.text_accounts_remaining'] = 'Contas restantes: %1$s';
$lang['StripePayments.text_migrate_accounts'] = 'Você pode migrar automaticamente as contas de pagamento armazenadas fora do local pelo gateway antigo do Stripe para esse gateway do Stripe Payments. As contas que não estão armazenadas fora do local devem ser migradas por meio da criação manual de novas contas de pagamento. Para evitar timeouts, as migrações serão feitas em lotes de %1$s. Execute isso quantas vezes forem necessárias para migrar todas as contas de pagamento.';
$lang['StripePayments.tooltip_india_mandate_max_amount'] = 'De acordo com as normas do RBI, cobranças recorrentes (fora do horário de atendimento) em cartões indianos que ultrapassem esse valor exigirão que o cliente autentique o pagamento separadamente.';
$lang['StripePayments.tooltip_publishable_key'] = 'Sua chave publicável de API é específica para o modo ao vivo ou de teste. Certifique-se de que esteja usando a chave correta.';
$lang['StripePayments.tooltip_secret_key'] = 'Sua chave secreta de API é específica para o modo ao vivo ou de teste. Certifique-se de que esteja usando a chave correta.';
$lang['StripePayments.warning_migrate_accounts'] = 'Não desinstale o gateway antigo do Stripe até que você termine de usar essa ferramenta de migração. Se fizer isso, a ferramenta ficará inacessível.';
$lang['StripePayments.webhook'] = 'Webhook do Stripe';
$lang['StripePayments.webhook_note'] = 'Recomenda-se configurar o seguinte URL como um Webhook para eventos "payment_intent" e "charge" em sua conta do Stripe.';

