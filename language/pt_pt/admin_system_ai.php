<?php
/**
 * Admin System Ai
 *
 * @package blesta
 * @subpackage blesta.language.pt_pt
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemAi.!success.settings_updated'] = 'As definições de IA foram actualizadas com sucesso!';
$lang['AdminSystemAi.!success.api_key_fetched'] = 'Chave de API recuperada com sucesso da sua conta Blesta.';
$lang['AdminSystemAi.!error.connection_failed'] = 'Não foi possível estabelecer ligação à API da IA: %1$s';
$lang['AdminSystemAi.!error.invalid_request'] = 'Pedido inválido.';
$lang['AdminSystemAi.!error.username_required'] = 'Introduza o seu nome de utilizador account.blesta.com.';
$lang['AdminSystemAi.!error.no_license_key'] = 'Não foi encontrada nenhuma chave de licença Blesta. Por favor, configure a sua licença primeiro.';
$lang['AdminSystemAi.!error.auth_failed'] = 'A autenticação falhou. Verifique o seu nome de utilizador e a chave de licença.';
$lang['AdminSystemAi.!error.request_failed'] = 'O pedido falhou. Por favor, tente novamente.';
$lang['AdminSystemAi.!error.api_key_required'] = 'Introduza uma chave API.';
$lang['AdminSystemAi.!error.invalid_api_key'] = 'Chave de API inválida.';
$lang['AdminSystemAi.index.page_title'] = 'Definições &gt; Sistema &gt; IA';
$lang['AdminSystemAi.index.boxtitle_ai'] = 'Definições de IA';
$lang['AdminSystemAi.index.field.ai_enabled'] = 'Ativar funcionalidades de IA';
$lang['AdminSystemAi.index.field.ai_api_key'] = 'Chave API';
$lang['AdminSystemAi.index.field.ai_default_model'] = 'Modelo por defeito';
$lang['AdminSystemAi.index.field.ai_temperature'] = 'Temperatura';
$lang['AdminSystemAi.index.field.ai_max_tokens'] = 'Máximo de fichas';
$lang['AdminSystemAi.index.field.submit'] = 'Atualizar definições';
$lang['AdminSystemAi.index.tooltip.ai_enabled'] = 'Ativar ou desativar funcionalidades de IA em todo o sistema.';
$lang['AdminSystemAi.index.tooltip.ai_api_key'] = 'A sua chave da API da Blesta AI. Obtenha-a em account.blesta.com.';
$lang['AdminSystemAi.index.tooltip.ai_default_model'] = 'O modelo de IA predefinido a utilizar para conclusões de conversação.';
$lang['AdminSystemAi.index.tooltip.ai_temperature'] = 'Controla a aleatoriedade. Valores mais baixos são mais deterministas, valores mais altos são mais criativos. Intervalo: 0,0 a 2,0';
$lang['AdminSystemAi.index.tooltip.ai_max_tokens'] = 'Número máximo de tokens a gerar nas respostas.';
$lang['AdminSystemAi.index.text_connected'] = 'Ligado com sucesso à Blesta AI.';
$lang['AdminSystemAi.index.text_connection_error'] = 'Falha na ligação à Blesta AI. Verifique a sua chave API.';
$lang['AdminSystemAi.index.text_balance'] = 'Saldo: %1$s %2$s';
$lang['AdminSystemAi.index.text_temperature_range'] = '(0.0 - 2.0)';
$lang['AdminSystemAi.index.text_fetch_key'] = 'Obter da minha conta Blesta';
$lang['AdminSystemAi.index.text_manual_entry'] = 'Introduza a sua chave API manualmente ou obtenha-a automaticamente da sua conta.';
$lang['AdminSystemAi.index.text_validating'] = 'Validação...';
$lang['AdminSystemAi.index.text_key_valid'] = 'Chave da API validada e guardada';
$lang['AdminSystemAi.index.text_select_model'] = 'Selecionar um modelo';
$lang['AdminSystemAi.index.text_api_status'] = 'Estado da API';
$lang['AdminSystemAi.index.text_status_active'] = 'Ativo';
$lang['AdminSystemAi.index.text_remaining_credits'] = 'Créditos remanescentes';
$lang['AdminSystemAi.index.text_credits_used'] = 'Créditos utilizados (este mês)';
$lang['AdminSystemAi.index.text_last_api_call'] = 'Última chamada à API';
$lang['AdminSystemAi.index.text_no_calls_yet'] = 'Ainda não há chamadas';
$lang['AdminSystemAi.modal.heading_fetch'] = 'Obter da minha conta Blesta';
$lang['AdminSystemAi.modal.text_subtitle'] = 'O seu nome de utilizador é necessário para obter a sua chave API';
$lang['AdminSystemAi.modal.text_info'] = 'O seu nome de utilizador account.blesta.com e a sua chave de licença Blesta serão utilizados para validar a sua licença e obter automaticamente uma nova chave Blesta AI API. Se uma chave já tiver sido gerada, ela será revogada e uma nova chave será emitida.';
$lang['AdminSystemAi.modal.field.username'] = 'Nome de utilizador';
$lang['AdminSystemAi.modal.field.username_placeholder'] = 'Introduza o nome de utilizador da sua conta';
$lang['AdminSystemAi.modal.button.authenticate'] = 'Autenticar';
$lang['AdminSystemAi.modal.button.cancel'] = 'Cancelar';
$lang['AdminSystemAi.modal.text_authenticating'] = 'Autenticação...';
$lang['AdminSystemAi.index.heading_api'] = 'Configuração da API';
$lang['AdminSystemAi.index.heading_model'] = 'Modelo por defeito';
$lang['AdminSystemAi.index.heading_parameters'] = 'Parâmetros do modelo';
$lang['AdminSystemAi.index.heading_prompts'] = 'Avisos do sistema';
$lang['AdminSystemAi.index.heading_features'] = 'Caraterísticas activadas';
$lang['AdminSystemAi.index.field.ai_global_prompt'] = 'Prompt de sistema global (predefinição)';
$lang['AdminSystemAi.index.tooltip.ai_global_prompt'] = 'As instruções predefinidas enviadas para o modelo de IA com cada pedido. Isto define o comportamento e o contexto da IA em todas as funcionalidades.';
$lang['AdminSystemAi.index.text_global_prompt_help'] = 'Esta mensagem aplica-se a todas as caraterísticas de IA, exceto se for substituída dentro da caraterística.';
$lang['AdminSystemAi.index.field.ai_feature_package_descriptions'] = 'Descrições dos pacotes';
$lang['AdminSystemAi.index.text_feature_package_descriptions'] = 'Gerar descrições convincentes de produtos e serviços';
$lang['AdminSystemAi.index.field.ai_feature_email_templates'] = 'Modelos de correio eletrónico';
$lang['AdminSystemAi.index.text_feature_email_templates'] = 'Melhorias e edições de modelos de correio eletrónico assistidas por IA';
$lang['AdminSystemAi.index.field.ai_feature_chatbot'] = 'Chatbot';
$lang['AdminSystemAi.index.text_feature_chatbot'] = 'Chatbot alimentado por IA para assistência ao pessoal';
$lang['AdminSystemAi.index.field.ai_chatbot_staff_groups'] = 'Acesso do grupo de pessoal';
$lang['AdminSystemAi.index.tooltip.ai_chatbot_staff_groups'] = 'Selecione os grupos de pessoal que podem aceder ao chatbot de IA. Podem ser selecionados vários grupos.';
$lang['AdminSystemAi.index.text_staff_groups_help'] = 'Mantenha premida a tecla Ctrl (Cmd no Mac) para selecionar vários grupos.';
$lang['AdminSystemAi.index.text_features_intro'] = 'Selecione quais as funcionalidades principais do Blesta que devem ter a assistência de IA activada. Os plug-ins podem aceder às funcionalidades de IA e são configurados de forma independente.';
$lang['AdminSystemAi.index.heading_beta'] = 'Aviso de funcionalidade beta';
$lang['AdminSystemAi.index.text_beta_notice'] = 'Esta funcionalidade está atualmente em fase beta e pode produzir resultados inesperados ou imprecisos. Utilizar com critério.';
$lang['AdminSystemAi.index.heading_privacy'] = 'Aviso de privacidade';
$lang['AdminSystemAi.index.text_privacy_notice'] = 'Os pedidos são enviados a fornecedores de IA de terceiros (por exemplo, OpenAI, Anthropic) para processamento. O serviço de IA da Blesta não armazena dados de conversas de IA; no entanto, não controlamos a forma como estes fornecedores tratam ou retêm os dados. Evite enviar informações sensíveis ou confidenciais.';
$lang['AdminSystemAi.index.heading_privacy_acknowledgment'] = 'Reconhecimento de privacidade';
$lang['AdminSystemAi.index.field.ai_privacy_acknowledged'] = 'Li e compreendi o aviso de privacidade acima.';
$lang['AdminSystemAi.index.text_privacy_last_acknowledged'] = 'Última confirmação em %1$s.';
$lang['AdminSystemAi.!error.privacy_not_acknowledged'] = 'O utilizador deve aceitar a declaração de privacidade antes de guardar.';
$lang['AdminSystemAi.index.heading_email_context'] = 'Definições de contexto do modelo de correio eletrónico';
$lang['AdminSystemAi.index.field.ai_email_context_depth'] = 'Profundidade da relação';
$lang['AdminSystemAi.index.tooltip.ai_email_context_depth'] = 'Profundidade máxima para percorrer as relações do modelo. Valores mais altos incluem mais dados relacionados, mas aumentam o uso de tokens. Intervalo: 1-5.';
$lang['AdminSystemAi.index.text_email_context_depth'] = 'Controla a profundidade com que se seguem as relações (por exemplo, fatura → cliente → contactos). Predefinição: 2';
$lang['AdminSystemAi.index.field.ai_email_context_schemas'] = 'Incluir definições de esquema';
$lang['AdminSystemAi.index.text_email_context_schemas'] = 'Incluir informações sobre o tipo de campo e esquemas de bases de dados no contexto.';
$lang['AdminSystemAi.index.field.ai_email_context_examples'] = 'Incluir dados de exemplo';
$lang['AdminSystemAi.index.text_email_context_examples'] = 'Incluir valores de dados de amostra para ajudar a IA a compreender os formatos e a estrutura dos dados.';

