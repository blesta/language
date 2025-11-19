<?php
/**
 * Authorize Net
 *
 * @package blesta
 * @subpackage blesta.language.pt_pt
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Authorize_net.!error.card_number.missing'] = 'A data de expiração não pode ser actualizada sem o número completo do cartão.';
$lang['Authorize_net.!error.dev_mode.valid'] = 'O modo de programador deve ser definido como "verdadeiro" se for fornecido.';
$lang['Authorize_net.!error.test_mode.valid'] = 'O modo de teste deve ser definido como "verdadeiro" se for dado.';
$lang['Authorize_net.!error.transaction_key.format'] = 'A chave de transação deve ter 16 caracteres.';
$lang['Authorize_net.!error.login_id.format'] = 'A ID de início de sessão não deve ter mais de 20 caracteres e não pode estar vazia.';
$lang['Authorize_net.validation_modes_live'] = 'Em direto';
$lang['Authorize_net.validation_modes_test'] = 'Teste';
$lang['Authorize_net.validation_modes_none'] = 'Nenhum';
$lang['Authorize_net.validation_note'] = 'Esta opção controla o tipo de validação que é efectuada quando uma conta de pagamento é armazenada utilizando a CIM. "Nenhum" não efectua qualquer validação adicional. \'Test\' emite uma transação de teste que não aparece no extrato do cliente mas gera um e-mail para o comerciante. \'Live\' processa uma transação de $0.00 ou $0.01 que é imediatamente anulada. Consulte o seu fornecedor de conta de comerciante antes de definir este valor como "Ativo", uma vez que poderá estar sujeito a taxas.';
$lang['Authorize_net.validation_mode'] = 'Modo de validação da conta de pagamento';
$lang['Authorize_net.apis_cim'] = 'CIM (deve ser ativado pelo Authorize.Net)';
$lang['Authorize_net.apis_aim'] = 'AIM (predefinição)';
$lang['Authorize_net.dev_mode_note'] = 'A ativação dessa opção lançará transações no ambiente de desenvolvedor do Authorize.net. É necessário ter uma conta de teste de desenvolvedor para usar esse ambiente.';
$lang['Authorize_net.dev_mode'] = 'Modo de desenvolvimento';
$lang['Authorize_net.test_mode_note'] = 'O recurso de modo de teste é suportado apenas pelo AIM. Para testar as transacções CIM, tem de ativar o modo de teste a partir da sua conta Authorize.net.';
$lang['Authorize_net.test_mode'] = 'Modo de teste';
$lang['Authorize_net.api'] = 'API de pagamento';
$lang['Authorize_net.transaction_key'] = 'Chave de transação';
$lang['Authorize_net.login_id'] = 'ID de início de sessão';
$lang['Authorize_net.description'] = 'Processamento fiável e rápido de cartões de crédito e ACH';
$lang['Authorize_net.name'] = 'Authorize.Net';

