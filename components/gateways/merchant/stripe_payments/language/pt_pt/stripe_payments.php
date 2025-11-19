<?php
/**
 * Stripe Payments
 *
 * @package blesta
 * @subpackage blesta.language.pt_pt
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['StripePayments.request_three_d_secure_challenge'] = 'Apresentar o desafio 3D Secure sempre que um cliente guarda um método de pagamento ou processa um método de pagamento (armazenado ou não armazenado)';
$lang['StripePayments.request_three_d_secure_frictionless'] = 'Apresentar o desafio 3D Secure sempre que um cliente guarda um método de pagamento ou processa um método de pagamento não armazenado';
$lang['StripePayments.request_three_d_secure_note'] = 'Se for um utilizador do Stripe sediado na Índia, antes de guardar um novo cartão no Stripe, deve sempre efetuar a autenticação 3D Secure (3DS).';
$lang['StripePayments.request_three_d_secure_automatic'] = 'Permitir que o Stripe determine quando apresentar um desafio 3D Secure';
$lang['StripePayments.request_three_d_secure'] = 'Fluxo de autenticação 3D Secure';
$lang['StripePayments.charge_description'] = 'Cobrar por %1$s';
$lang['StripePayments.charge_description_default'] = 'Cobrança de um montante específico';
$lang['StripePayments.migrate_accounts'] = 'Migrar contas';
$lang['StripePayments.warning_migrate_accounts'] = 'Não desinstale o gateway Stripe antigo até terminar de usar esta ferramenta de migração. Se o fizer, a ferramenta ficará inacessível.';
$lang['StripePayments.text_migrate_accounts'] = 'Pode migrar automaticamente as contas de pagamento armazenadas fora do local pela antiga gateway Stripe para esta gateway Stripe Payments. As contas que não estão armazenadas fora do local devem ser migradas através da criação manual de novas contas de pagamento. Para evitar timeouts, as migrações serão feitas em lotes de %1$s. Execute este procedimento tantas vezes quantas as necessárias para migrar todas as contas de pagamento.';
$lang['StripePayments.text_accounts_remaining'] = 'Contas restantes: %1$s';
$lang['StripePayments.heading_migrate_accounts'] = 'Migrar contas de pagamento antigas';
$lang['StripePayments.webhook_note'] = 'Recomenda-se a configuração do seguinte url como Webhook para eventos "payment_intent" na sua conta Stripe.';
$lang['StripePayments.webhook'] = 'Webhook da Stripe';
$lang['StripePayments.tooltip_secret_key'] = 'A chave secreta da API é específica para o modo ativo ou de teste. Certifique-se de que está a utilizar a chave correta.';
$lang['StripePayments.tooltip_publishable_key'] = 'A chave publicável da API é específica para o modo ativo ou de teste. Certifique-se de que está a utilizar a chave correta.';
$lang['StripePayments.secret_key'] = 'Chave secreta da API';
$lang['StripePayments.publishable_key'] = 'Chave publicável da API';
$lang['StripePayments.ach_form.mandate_future_usage'] = 'Se utilizar os serviços de %1$s ou comprar produtos adicionais periodicamente de acordo com os termos de %1$s, autoriza %1$s a debitar a sua conta bancária periodicamente. Os pagamentos que não se enquadram nos débitos regulares autorizados acima só serão debitados após a obtenção da sua autorização.';
$lang['StripePayments.ach_form.mandate_authorization'] = 'Ao submeter este formulário, autoriza %1$s a debitar a conta bancária especificada acima por qualquer quantia devida por cobranças resultantes da sua utilização dos serviços de %1$s e/ou compra de produtos de %1$s, de acordo com o site %1$s e termos, até que esta autorização seja revogada. O utilizador pode alterar ou cancelar esta autorização a qualquer momento, enviando uma notificação para %1$s com 30 (trinta) dias de antecedência.';
$lang['StripePayments.ach_form.field_second_deposit'] = 'Segundo depósito';
$lang['StripePayments.ach_form.field_first_deposit'] = 'Primeiro depósito';
$lang['StripePayments.ach_form.verification_notice'] = 'Enviámos dois pequenos depósitos para esta conta bancária. Para verificar esta conta, é favor confirmar os montantes destes depósitos.';
$lang['StripePayments.ach_form.field_routing_number'] = 'Número de registo';
$lang['StripePayments.ach_form.field_account_number'] = 'Número de conta';
$lang['StripePayments.ach_form.field_holder_type_company'] = 'Empresa';
$lang['StripePayments.ach_form.field_holder_type_individual'] = 'Individual';
$lang['StripePayments.ach_form.field_holder_type'] = 'Tipo de suporte';
$lang['StripePayments.ach_form.field_type'] = 'Tipo de conta';
$lang['StripePayments.description'] = 'Utiliza os elementos do Stripe e a API de pedido de pagamento para tratar automaticamente o 3D Secure e o SCA para enviar cartões de crédito diretamente através do Stripe';
$lang['StripePayments.name'] = 'Stripe Payments';
$lang['StripePayments.!error.invalid_request_error'] = 'O gateway de pagamento devolveu um erro ao processar o pedido.';
$lang['StripePayments.!error.bank_account_unverified'] = 'É necessário verificar a sua conta bancária antes de a poder utilizar para efetuar um pagamento.';
$lang['StripePayments.!error.secret_key.valid'] = 'Não foi possível estabelecer ligação à API Stripe utilizando a chave secreta fornecida.';
$lang['StripePayments.!error.secret_key.empty'] = 'Introduza uma chave secreta.';
$lang['StripePayments.!error.publishable_key.empty'] = 'Introduza uma chave publicável.';
$lang['StripePayments.!error.auth'] = 'A porta de entrada não pôde autenticar-se.';

