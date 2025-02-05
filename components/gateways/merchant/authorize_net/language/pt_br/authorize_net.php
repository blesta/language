<?php
/**
 * Authorize Net
 *
 * @package blesta
 * @subpackage blesta.language.pt_br
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Authorize_net.!error.card_number.missing'] = 'A data de validade não pode ser atualizada sem o número completo do cartão.';
$lang['Authorize_net.!error.dev_mode.valid'] = 'O modo de desenvolvedor deve ser definido como "true" se fornecido.';
$lang['Authorize_net.!error.test_mode.valid'] = 'O modo de teste deve ser definido como "true" se for fornecido.';
$lang['Authorize_net.!error.transaction_key.format'] = 'A chave de transação deve ter 16 caracteres.';
$lang['Authorize_net.!error.login_id.format'] = 'O ID de login não deve ter mais de 20 caracteres e não pode estar vazio.';
$lang['Authorize_net.validation_modes_live'] = 'Ao vivo';
$lang['Authorize_net.validation_modes_test'] = 'Teste';
$lang['Authorize_net.validation_modes_none'] = 'Nenhum';
$lang['Authorize_net.validation_note'] = 'Controla o tipo de validação que é realizada quando uma conta de pagamento é armazenada usando o CIM. "Nenhum" não executa nenhuma validação adicional. \'Test\' emite uma transação de teste que não aparece no extrato do cliente, mas gera um e-mail para o comerciante. \'Live\' processa uma transação de US$ 0,00 ou US$ 0,01 que é imediatamente anulada. Consulte seu provedor de conta de comerciante antes de definir esse valor como "Live", pois você pode estar sujeito a taxas.';
$lang['Authorize_net.validation_mode'] = 'Modo de validação da conta de pagamento';
$lang['Authorize_net.apis_cim'] = 'CIM (deve ser ativado pelo Authorize.Net)';
$lang['Authorize_net.apis_aim'] = 'AIM (padrão)';
$lang['Authorize_net.dev_mode_note'] = 'A ativação dessa opção lançará as transações no ambiente de desenvolvedor do Authorize.net. Você deve ter uma conta de teste de desenvolvedor para usar esse ambiente.';
$lang['Authorize_net.dev_mode'] = 'Modo de desenvolvedor';
$lang['Authorize_net.test_mode_note'] = 'O recurso de modo de teste é compatível apenas com o AIM. Para testar transações CIM, é necessário ativar o modo de teste em sua conta Authorize.net.';
$lang['Authorize_net.test_mode'] = 'Modo de teste';
$lang['Authorize_net.api'] = 'API de pagamento';
$lang['Authorize_net.transaction_key'] = 'Chave de transação';
$lang['Authorize_net.login_id'] = 'ID de login';
$lang['Authorize_net.description'] = 'Processamento confiável e rápido de cartões de crédito e ACH';
$lang['Authorize_net.name'] = 'Authorize.Net';

