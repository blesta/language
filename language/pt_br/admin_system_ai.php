<?php
/**
 * Admin System Ai
 *
 * @package blesta
 * @subpackage blesta.language.pt_br
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemAi.!success.settings_updated'] = 'As configurações de IA foram atualizadas com sucesso!';
$lang['AdminSystemAi.!success.api_key_fetched'] = 'Chave de API recuperada com sucesso de sua conta Blesta.';
$lang['AdminSystemAi.!error.connection_failed'] = 'Não foi possível conectar-se à API de IA: %1$s';
$lang['AdminSystemAi.!error.invalid_request'] = 'Solicitação inválida.';
$lang['AdminSystemAi.!error.username_required'] = 'Digite seu nome de usuário account.blesta.com.';
$lang['AdminSystemAi.!error.no_license_key'] = 'Nenhuma chave de licença Blesta foi encontrada. Configure sua licença primeiro.';
$lang['AdminSystemAi.!error.auth_failed'] = 'Falha na autenticação. Verifique seu nome de usuário e a chave de licença.';
$lang['AdminSystemAi.!error.request_failed'] = 'A solicitação falhou. Tente novamente.';
$lang['AdminSystemAi.!error.api_key_required'] = 'Digite uma chave de API.';
$lang['AdminSystemAi.!error.invalid_api_key'] = 'Chave de API inválida.';
$lang['AdminSystemAi.index.page_title'] = 'Configurações &gt; Sistema &gt; IA';
$lang['AdminSystemAi.index.boxtitle_ai'] = 'Configurações de IA';
$lang['AdminSystemAi.index.field.ai_enabled'] = 'Ativar recursos de IA';
$lang['AdminSystemAi.index.field.ai_api_key'] = 'Chave da API';
$lang['AdminSystemAi.index.field.ai_default_model'] = 'Modelo padrão';
$lang['AdminSystemAi.index.field.ai_temperature'] = 'Temperatura';
$lang['AdminSystemAi.index.field.ai_max_tokens'] = 'Tokens máximos';
$lang['AdminSystemAi.index.field.submit'] = 'Atualizar configurações';
$lang['AdminSystemAi.index.tooltip.ai_enabled'] = 'Ativar ou desativar os recursos de IA em todo o sistema.';
$lang['AdminSystemAi.index.tooltip.ai_api_key'] = 'Sua chave de API da Blesta AI. Obtenha-a em account.blesta.com.';
$lang['AdminSystemAi.index.tooltip.ai_default_model'] = 'O modelo de IA padrão a ser usado para conclusões de bate-papo.';
$lang['AdminSystemAi.index.tooltip.ai_temperature'] = 'Controla a aleatoriedade. Valores mais baixos são mais determinísticos, valores mais altos são mais criativos. Intervalo: 0,0 a 2,0';
$lang['AdminSystemAi.index.tooltip.ai_max_tokens'] = 'Número máximo de tokens a serem gerados nas respostas.';
$lang['AdminSystemAi.index.text_connected'] = 'Conectado com sucesso à Blesta AI.';
$lang['AdminSystemAi.index.text_connection_error'] = 'Falha na conexão com a Blesta AI. Verifique sua chave de API.';
$lang['AdminSystemAi.index.text_balance'] = 'Saldo: %1$s %2$s';
$lang['AdminSystemAi.index.text_temperature_range'] = '(0.0 - 2.0)';
$lang['AdminSystemAi.index.text_fetch_key'] = 'Buscar em minha conta Blesta';
$lang['AdminSystemAi.index.text_manual_entry'] = 'Insira sua chave de API manualmente ou obtenha-a automaticamente de sua conta.';
$lang['AdminSystemAi.index.text_validating'] = 'Validando...';
$lang['AdminSystemAi.index.text_key_valid'] = 'Chave de API validada e salva';
$lang['AdminSystemAi.index.text_select_model'] = 'Selecione um modelo';
$lang['AdminSystemAi.index.text_api_status'] = 'Status da API';
$lang['AdminSystemAi.index.text_status_active'] = 'Ativo';
$lang['AdminSystemAi.index.text_remaining_credits'] = 'Créditos remanescentes';
$lang['AdminSystemAi.index.text_credits_used'] = 'Créditos usados (este mês)';
$lang['AdminSystemAi.index.text_last_api_call'] = 'Última chamada à API';
$lang['AdminSystemAi.index.text_no_calls_yet'] = 'Nenhuma chamada ainda';
$lang['AdminSystemAi.modal.heading_fetch'] = 'Buscar na minha conta Blesta';
$lang['AdminSystemAi.modal.text_subtitle'] = 'Seu nome de usuário é necessário para recuperar sua chave de API';
$lang['AdminSystemAi.modal.text_info'] = 'Seu nome de usuário account.blesta.com e sua chave de licença Blesta serão usados para validar sua licença e obter automaticamente uma nova chave de API Blesta AI. Se uma chave já tiver sido gerada, ela será revogada e uma nova chave será emitida.';
$lang['AdminSystemAi.modal.field.username'] = 'Nome de usuário';
$lang['AdminSystemAi.modal.field.username_placeholder'] = 'Digite o nome de usuário da sua conta';
$lang['AdminSystemAi.modal.button.authenticate'] = 'Autenticar';
$lang['AdminSystemAi.modal.button.cancel'] = 'Cancelar';
$lang['AdminSystemAi.modal.text_authenticating'] = 'Autenticação...';
$lang['AdminSystemAi.index.heading_api'] = 'Configuração da API';
$lang['AdminSystemAi.index.heading_model'] = 'Modelo padrão';
$lang['AdminSystemAi.index.heading_parameters'] = 'Parâmetros do modelo';
$lang['AdminSystemAi.index.heading_prompts'] = 'Prompts do sistema';
$lang['AdminSystemAi.index.heading_features'] = 'Recursos habilitados';
$lang['AdminSystemAi.index.field.ai_global_prompt'] = 'Prompt do sistema global (padrão)';
$lang['AdminSystemAi.index.tooltip.ai_global_prompt'] = 'As instruções padrão enviadas ao modelo de IA com cada solicitação. Isso define o comportamento e o contexto da IA em todos os recursos.';
$lang['AdminSystemAi.index.text_global_prompt_help'] = 'Esse prompt se aplica a todos os recursos de IA, a menos que seja substituído dentro do recurso.';
$lang['AdminSystemAi.index.field.ai_feature_package_descriptions'] = 'Descrições dos pacotes';
$lang['AdminSystemAi.index.text_feature_package_descriptions'] = 'Gerar descrições convincentes de produtos e serviços';
$lang['AdminSystemAi.index.field.ai_feature_email_templates'] = 'Modelos de e-mail';
$lang['AdminSystemAi.index.text_feature_email_templates'] = 'Edições e aprimoramentos de modelos de e-mail assistidos por IA';
$lang['AdminSystemAi.index.field.ai_feature_chatbot'] = 'Chatbot';
$lang['AdminSystemAi.index.text_feature_chatbot'] = 'Chatbot com tecnologia de IA para assistência à equipe';
$lang['AdminSystemAi.index.field.ai_chatbot_staff_groups'] = 'Acesso do grupo de funcionários';
$lang['AdminSystemAi.index.tooltip.ai_chatbot_staff_groups'] = 'Selecione quais grupos de funcionários podem acessar o chatbot de IA. Vários grupos podem ser selecionados.';
$lang['AdminSystemAi.index.text_staff_groups_help'] = 'Mantenha pressionada a tecla Ctrl (Cmd no Mac) para selecionar vários grupos.';
$lang['AdminSystemAi.index.text_features_intro'] = 'Selecione quais recursos principais do Blesta devem ter a assistência de IA ativada. Os plug-ins podem acessar os recursos de IA e são configurados de forma independente.';
$lang['AdminSystemAi.index.heading_beta'] = 'Aviso de recurso beta';
$lang['AdminSystemAi.index.text_beta_notice'] = 'Esse recurso está atualmente na versão beta e pode produzir resultados inesperados ou imprecisos. Use com critério.';
$lang['AdminSystemAi.index.heading_privacy'] = 'Aviso de privacidade';
$lang['AdminSystemAi.index.text_privacy_notice'] = 'As solicitações são enviadas a provedores de IA de terceiros (por exemplo, OpenAI, Anthropic) para processamento. O serviço de IA da Blesta não armazena dados de conversas de IA; no entanto, não controlamos como esses provedores tratam ou retêm os dados. Evite enviar informações sensíveis ou confidenciais.';
$lang['AdminSystemAi.index.heading_privacy_acknowledgment'] = 'Reconhecimento de privacidade';
$lang['AdminSystemAi.index.field.ai_privacy_acknowledged'] = 'Eu li e compreendi o aviso de privacidade acima.';
$lang['AdminSystemAi.index.text_privacy_last_acknowledged'] = 'Reconhecido pela última vez em %1$s.';
$lang['AdminSystemAi.!error.privacy_not_acknowledged'] = 'Você deve concordar com o aviso de privacidade antes de salvar.';
$lang['AdminSystemAi.index.heading_email_context'] = 'Configurações de contexto do modelo de e-mail';
$lang['AdminSystemAi.index.field.ai_email_context_depth'] = 'Profundidade do relacionamento';
$lang['AdminSystemAi.index.tooltip.ai_email_context_depth'] = 'Profundidade máxima para percorrer as relações do modelo. Valores mais altos incluem mais dados relacionados, mas aumentam o uso de tokens. Faixa: 1-5.';
$lang['AdminSystemAi.index.text_email_context_depth'] = 'Controla a profundidade do acompanhamento dos relacionamentos (por exemplo, fatura → cliente → contatos). Padrão: 2';
$lang['AdminSystemAi.index.field.ai_email_context_schemas'] = 'Incluir definições de esquema';
$lang['AdminSystemAi.index.text_email_context_schemas'] = 'Inclua informações de tipo de campo e esquemas de banco de dados no contexto.';
$lang['AdminSystemAi.index.field.ai_email_context_examples'] = 'Incluir dados de exemplo';
$lang['AdminSystemAi.index.text_email_context_examples'] = 'Inclua valores de dados de amostra para ajudar a IA a entender os formatos e a estrutura dos dados.';

