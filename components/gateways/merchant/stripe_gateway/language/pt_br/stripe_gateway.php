<?php
/**
 * Stripe Gateway
 *
 * @package blesta
 * @subpackage blesta.language.pt_br
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Stripe_gateway.charge_description'] = 'Cobrança de %1$s';
$lang['Stripe_gateway.tooltip_stored'] = 'Marque essa caixa para armazenar as informações do cartão da conta de pagamento no Stripe em vez de na Blesta.';
$lang['Stripe_gateway.stored'] = 'Armazenar informações do cartão fora do local';
$lang['Stripe_gateway.tooltip_api'] = 'Sua chave secreta de API é específica para o modo ao vivo ou de teste. Certifique-se de que esteja usando a chave correta.';
$lang['Stripe_gateway.api_key'] = 'Chave secreta da API';
$lang['Stripe_gateway.description'] = 'Esse é o gateway legado do Stripe que usa o Stripe Checkout. Ele exige que sua conta do Stripe seja atualizada para "Processar pagamentos sem segurança". Em vez disso, recomendamos o uso do gateway Stripe Payments na Blesta';
$lang['Stripe_gateway.name'] = 'Listrado';
$lang['Stripe_gateway.!error.json_required'] = 'A extensão JSON é necessária para esse gateway.';
$lang['Stripe_gateway.!error.api_key.empty'] = 'Digite uma chave de API.';
$lang['Stripe_gateway.!error.auth'] = 'O gateway não pôde se autenticar.';

