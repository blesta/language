<?php
/**
 * Stripe Payments
 *
 * @package blesta
 * @subpackage blesta.language.pt_br
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['StripePayments.charge_description'] = 'Cobrança de %1$s';
$lang['StripePayments.charge_description_default'] = 'Cobrança de um montante específico';
$lang['StripePayments.migrate_accounts'] = 'Migrar contas';
$lang['StripePayments.warning_migrate_accounts'] = 'Não desinstale o gateway Stripe antigo até que tenha terminado de usar esta ferramenta de migração. Se o fizer, a ferramenta ficará inacessível.';
$lang['StripePayments.text_migrate_accounts'] = 'Pode migrar automaticamente contas de pagamento armazenadas externamente do gateway Stripe antigo para este gateway Stripe Payments. As contas que não estão armazenadas externamente devem ser migradas através da criação manual de novas contas de pagamento. Para evitar timeouts, as migrações serão feitas em lotes de %1$s. Execute isto tantas vezes quantas forem necessárias para migrar todas as contas de pagamento.';
$lang['StripePayments.text_accounts_remaining'] = 'Contas restantes: %1$s';
$lang['StripePayments.heading_migrate_accounts'] = 'Migrar Contas de Pagamento Antigas';
$lang['StripePayments.webhook_note'] = 'É recomendado configurar o seguinte URL como um Webhook para eventos "payment_intent" na sua conta Stripe.';
$lang['StripePayments.webhook'] = 'Webhook Stripe';
$lang['StripePayments.tooltip_secret_key'] = 'A sua chave secreta de API é específica para o modo ativo ou de teste. Certifique-se de que está a usar a chave correta.';
$lang['StripePayments.tooltip_publishable_key'] = 'A sua chave publicável de API é específica para o modo ativo ou de teste. Certifique-se de que está a usar a chave correta.';
$lang['StripePayments.secret_key'] = 'Chave Secreta da API';
$lang['StripePayments.publishable_key'] = 'Chave Publicável da API';
$lang['StripePayments.ach_form.mandate_future_usage'] = 'Se usar os serviços da %1$s ou adquirir produtos adicionais periodicamente de acordo com os termos da %1$s, autoriza a %1$s a debitar a sua conta bancária periodicamente. Os pagamentos que não se enquadrem nos débitos regulares autorizados acima só serão debitados após a obtenção da sua autorização.';
$lang['StripePayments.ach_form.mandate_authorization'] = 'Ao submeter este formulário, o utilizador autoriza a %1$s a debitar da conta bancária especificada acima qualquer valor devido por cobranças decorrentes do uso dos serviços da %1$s e/ou da compra de produtos da %1$s, de acordo com o site e os termos da %1$s, até que esta autorização seja revogada. O utilizador poderá alterar ou cancelar esta autorização a qualquer momento, mediante notificação à %1$s com 30 (trinta) dias de antecedência.';
$lang['StripePayments.ach_form.field_second_deposit'] = 'Segundo Depósito';
$lang['StripePayments.ach_form.field_first_deposit'] = 'Primeiro Depósito';
$lang['StripePayments.ach_form.verification_notice'] = 'Enviámos dois pequenos depósitos para esta conta bancária. Para verificar esta conta, confirme os valores desses depósitos.';
$lang['StripePayments.ach_form.field_routing_number'] = 'Número de Identificação Bancária';
$lang['StripePayments.ach_form.field_account_number'] = 'Número da Conta';
$lang['StripePayments.ach_form.field_holder_type_company'] = 'Empresa';
$lang['StripePayments.ach_form.field_holder_type_individual'] = 'Individual';
$lang['StripePayments.ach_form.field_holder_type'] = 'Tipo de Titular';
$lang['StripePayments.ach_form.field_type'] = 'Tipo de Conta';
$lang['StripePayments.description'] = 'Utiliza o Stripe Elements e a API de solicitação de pagamento para lidar automaticamente com o 3D Secure e o SCA para submeter cartões de crédito diretamente através do Stripe';
$lang['StripePayments.!error.invalid_request_error'] = 'O gateway de pagamento devolveu um erro ao processar o pedido.';
$lang['StripePayments.name'] = 'Stripe Payments';
$lang['StripePayments.!error.bank_account_unverified'] = 'Precisa de verificar a sua conta bancária antes de a poder usar para efetuar um pagamento.';
$lang['StripePayments.!error.secret_key.valid'] = 'Não foi possível conectar-se à API do Stripe usando a chave secreta fornecida.';
$lang['StripePayments.!error.secret_key.empty'] = 'Por favor, introduza uma chave secreta.';
$lang['StripePayments.!error.publishable_key.empty'] = 'Por favor, introduza uma chave publicável.';
$lang['StripePayments.!error.auth'] = 'O gateway não conseguiu autenticar.';
$lang['StripePayments.request_three_d_secure_note'] = 'Se for um utilizador do Stripe baseado na Índia, antes de guardar um novo cartão com o Stripe, deverá sempre executar a autenticação 3D Secure (3DS).';
$lang['StripePayments.request_three_d_secure_challenge'] = 'Apresentar o desafio 3D Secure sempre que um cliente guardar um método de pagamento ou processar um método de pagamento (armazenado ou não armazenado)';
$lang['StripePayments.request_three_d_secure_frictionless'] = 'Apresentar o desafio 3D Secure sempre que um cliente guardar um método de pagamento ou processar um método de pagamento não armazenado';
$lang['StripePayments.request_three_d_secure_automatic'] = 'Permitir que o Stripe determine quando apresentar um desafio 3D Secure';
$lang['StripePayments.request_three_d_secure'] = 'Fluxo de Autenticação 3D Secure';
