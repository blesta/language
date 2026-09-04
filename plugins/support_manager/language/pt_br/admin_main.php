<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.pt_br
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.!success.ai_settings_updated'] = 'As configurações de IA foram atualizadas com sucesso.';
$lang['AdminMain.!success.settings_updated'] = 'As configurações foram atualizadas com sucesso.';
$lang['AdminMain.ai.badge_experimental'] = 'EXPERIMENTAL';
$lang['AdminMain.ai.boxtitle_settings'] = 'Configurações de IA';
$lang['AdminMain.ai.button_configure_ai'] = 'Vá para Configurações de IA do sistema';
$lang['AdminMain.ai.field_add_ai_disclaimer'] = 'Adicionar isenção de responsabilidade gerada por IA';
$lang['AdminMain.ai.field_add_ai_disclaimer_desc'] = 'Anexar um aviso às respostas geradas automaticamente indicando que elas foram criadas por IA (recomendado para transparência)';
$lang['AdminMain.ai.field_analyze_trigger'] = 'Acionador de análise de IA';
$lang['AdminMain.ai.field_analyze_trigger_desc'] = 'Controla quando a análise de IA é acionada para gerar respostas e executar ferramentas.';
$lang['AdminMain.ai.field_analyze_trigger_tooltip'] = 'Escolha quando a IA deve analisar os tickets para possíveis respostas e usos da ferramenta. "Cada resposta" analisa cada nova mensagem. "Ticket Opened" analisa apenas a abertura inicial do tíquete.';
$lang['AdminMain.ai.field_assistant_name'] = 'Nome de exibição do AI Assistant';
$lang['AdminMain.ai.field_assistant_name_desc'] = 'Deixe em branco para usar o nome padrão: "Support"';
$lang['AdminMain.ai.field_assistant_name_placeholder'] = 'Suporte';
$lang['AdminMain.ai.field_assistant_name_tooltip'] = 'O nome mostrado nas respostas geradas pela IA em tópicos de tíquetes. Isso personaliza o assistente de IA para sua equipe de suporte.';
$lang['AdminMain.ai.field_auto_reply_enabled'] = 'Ativar respostas automáticas de tíquetes de IA';
$lang['AdminMain.ai.field_auto_reply_enabled_desc'] = 'Permita que a IA responda automaticamente aos tíquetes quando tiver um alto grau de certeza sobre a resposta.';
$lang['AdminMain.ai.field_confidence_threshold'] = 'Limite de confiança';
$lang['AdminMain.ai.field_confidence_threshold_desc'] = 'Limite mais alto = mais conservador (menos respostas automáticas, maior precisão). Recomendado: 70% ou mais.';
$lang['AdminMain.ai.field_confidence_threshold_tooltip'] = 'A IA só responderá automaticamente aos tickets quando seu nível de confiança atingir ou exceder esse limite. Valores mais altos (90-100%) são mais conservadores e mais seguros. Valores mais baixos (60-89%) resultarão em mais respostas automáticas, mas com maior risco de erros.';
$lang['AdminMain.ai.field_custom_disclaimer'] = 'Texto de isenção de responsabilidade personalizado';
$lang['AdminMain.ai.field_custom_disclaimer_desc'] = 'Esse texto será anexado a todas as respostas de tíquetes geradas por IA.';
$lang['AdminMain.ai.field_custom_disclaimer_placeholder'] = 'Essa resposta foi gerada com a ajuda da IA.';
$lang['AdminMain.ai.field_custom_disclaimer_tooltip'] = 'Personalize a mensagem de isenção de responsabilidade anexada às respostas geradas por IA. Deixe em branco para usar a mensagem padrão.';
$lang['AdminMain.ai.field_enabled'] = 'Ativação de recursos de IA para o Support Manager';
$lang['AdminMain.ai.field_enabled_desc'] = 'Permitir recursos com tecnologia de IA no sistema de tíquetes, incluindo respostas, resumos e ferramentas automatizados.';
$lang['AdminMain.ai.field_max_queue_age_hours'] = 'Idade máxima da fila (horas)';
$lang['AdminMain.ai.field_max_queue_age_hours_desc'] = 'Descarta respostas de IA enfileiradas mais antigas do que esse número de horas. Deve estar entre 1 e 8760 (1 ano). O padrão é 24.';
$lang['AdminMain.ai.field_max_queue_age_hours_tooltip'] = 'As respostas do cliente na fila mais antigas que esse valor serão descartadas pelo cron em vez de serem processadas. Impede que a IA responda a tíquetes obsoletos se o cron tiver sido desativado e houver um acúmulo de pendências.';
$lang['AdminMain.ai.field_max_tokens'] = 'Tokens máximos';
$lang['AdminMain.ai.field_max_tokens_desc'] = 'Controla o comprimento máximo das respostas geradas pela IA. Padrão: 4000';
$lang['AdminMain.ai.field_max_tokens_tooltip'] = 'Número máximo de tokens (palavras/peças de palavras) que a IA pode gerar em uma única resposta. Valores mais altos permitem respostas mais longas, mas consomem mais recursos. Faixa típica: 100-4000 para a maioria das tarefas.';
$lang['AdminMain.ai.field_model'] = 'Modelo de IA';
$lang['AdminMain.ai.field_model_desc'] = 'Esse modelo será usado para todos os recursos de IA no Support Manager.';
$lang['AdminMain.ai.field_model_tooltip'] = 'Selecione o modelo de IA a ser usado especificamente para os recursos do Support Manager. Modelos diferentes têm recursos e preços diferentes.';
$lang['AdminMain.ai.field_override_max_tokens'] = 'Substituir tokens máximos';
$lang['AdminMain.ai.field_override_max_tokens_desc'] = 'Padrão do sistema: %1$s';
$lang['AdminMain.ai.field_override_model'] = 'Substituir o modelo de IA padrão';
$lang['AdminMain.ai.field_override_model_desc'] = 'Padrão do sistema: %1$s';
$lang['AdminMain.ai.field_override_temperature'] = 'Temperatura de substituição';
$lang['AdminMain.ai.field_override_temperature_desc'] = 'Padrão do sistema: %1$s';
$lang['AdminMain.ai.field_require_human_review'] = 'Exigir revisão humana antes de enviar';
$lang['AdminMain.ai.field_require_human_review_desc'] = 'As respostas geradas automaticamente são exibidas no tíquete para uso da equipe (recomendado)';
$lang['AdminMain.ai.field_restricted_departments'] = 'Restringir a resposta automática aos departamentos';
$lang['AdminMain.ai.field_restricted_departments_desc'] = 'Selecione quais departamentos de tíquetes podem receber respostas automáticas de IA. Desmarque todos para permitir todos os departamentos.';
$lang['AdminMain.ai.field_restricted_departments_tooltip'] = 'Permitir respostas automáticas somente para departamentos de tíquetes específicos. Deixe tudo desmarcado para permitir todos os departamentos.';
$lang['AdminMain.ai.field_submit'] = 'Salvar configurações de IA';
$lang['AdminMain.ai.field_system_prompt'] = 'Prompt de sistema do Support Manager';
$lang['AdminMain.ai.field_system_prompt_desc'] = 'Esse prompt é usado especificamente para os recursos de IA do Support Manager e substitui o prompt global do sistema.';
$lang['AdminMain.ai.field_system_prompt_tooltip'] = 'Defina instruções específicas para a IA ao lidar com tíquetes de suporte. Esse prompt substitui o prompt global do sistema e define o comportamento da IA especificamente no sistema de tíquetes.';
$lang['AdminMain.ai.field_temperature'] = 'Temperatura';
$lang['AdminMain.ai.field_temperature_desc'] = 'Temperatura mais baixa = mais concentrado, temperatura mais alta = mais criativo. Padrão: 1,0';
$lang['AdminMain.ai.field_temperature_tooltip'] = 'Controla a aleatoriedade das respostas. Valores mais baixos (0,0-0,7) produzem resultados mais focados e determinísticos. Valores mais altos (1,3-2,0) produzem resultados mais criativos e variados. Intervalo: 0,0 a 2,0';
$lang['AdminMain.ai.field_tool_assign_staff'] = 'Atribuir a um membro da equipe';
$lang['AdminMain.ai.field_tool_assign_staff_desc'] = 'Permitir que a IA atribua tíquetes a membros específicos da equipe com base nas instruções do sistema.';
$lang['AdminMain.ai.field_tool_change_priority'] = 'Alterar a prioridade dos tíquetes';
$lang['AdminMain.ai.field_tool_change_priority_desc'] = 'Permitir que a IA ajuste a prioridade do tíquete (para cima ou para baixo) quando uma prioridade inadequada for selecionada pelo cliente ou detectada pela análise.';
$lang['AdminMain.ai.field_tool_close_ticket'] = 'Fechar bilhete';
$lang['AdminMain.ai.field_tool_close_ticket_desc'] = 'Permita que a IA feche tíquetes em casos de spam, mensagens devolvidas ou problemas claramente resolvidos.';
$lang['AdminMain.ai.field_tool_instructions'] = 'Instruções de uso da ferramenta';
$lang['AdminMain.ai.field_tool_instructions_desc'] = 'Forneça instruções e cenários específicos nos quais as ferramentas devem ser usadas. Esse texto será incluído no prompt do sistema quando as ferramentas forem ativadas.';
$lang['AdminMain.ai.field_tool_instructions_placeholder'] = 'Exemplo: - Atribua problemas técnicos relacionados a servidores Linux a John e a servidores Windows a Dave - Feche apenas tíquetes que sejam claramente spam, respostas automáticas ou que o cliente indique que o tíquete foi resolvido na resposta mais recente - Aumente a prioridade de problemas urgentes que mencionem "fora do ar" ou "off-line" para o status de Emergência - Diminua a prioridade de tíquetes de Emergência se eles não forem emergências reais';
$lang['AdminMain.ai.field_tool_instructions_tooltip'] = 'Forneça orientações específicas para a IA sobre quando e como usar as ferramentas habilitadas. Por exemplo, especifique os nomes dos membros da equipe e suas áreas de especialização para a atribuição de tíquetes.';
$lang['AdminMain.ai.field_tools_available'] = 'Ferramentas disponíveis';
$lang['AdminMain.ai.field_tools_available_tooltip'] = 'Selecione as ferramentas que a IA tem permissão para usar. Cada ferramenta permite ações específicas que a IA pode executar ao processar tickets.';
$lang['AdminMain.ai.field_tools_enabled'] = 'Habilitar ferramentas';
$lang['AdminMain.ai.field_tools_enabled_desc'] = 'Permita que a IA use ferramentas para gerenciamento de tíquetes, como alteração de prioridade, fechamento de tíquetes ou atribuição a membros da equipe.';
$lang['AdminMain.ai.heading_experimental'] = 'Recursos experimentais';
$lang['AdminMain.ai.heading_features'] = 'Recursos de IA';
$lang['AdminMain.ai.heading_model'] = 'Configuração do modelo';
$lang['AdminMain.ai.heading_parameters'] = 'Parâmetros do modelo';
$lang['AdminMain.ai.heading_replies'] = 'Respostas automáticas';
$lang['AdminMain.ai.heading_system_prompt'] = 'Prompt do sistema';
$lang['AdminMain.ai.heading_tools'] = 'Ferramentas de IA';
$lang['AdminMain.ai.option_every_reply'] = 'Cada resposta';
$lang['AdminMain.ai.option_ticket_opened'] = 'Somente bilhete aberto';
$lang['AdminMain.ai.page_title'] = 'Gerenciador de suporte &gt; Configurações de IA';
$lang['AdminMain.ai.warning_not_configured_text'] = 'Os recursos de IA para o Support Manager exigem uma chave de API de IA da Blesta. Configure sua chave de API em System Settings &gt; Artificial Intelligence antes de ativar os recursos de IA.';
$lang['AdminMain.ai.warning_not_configured_title'] = 'Chave de API da Blesta AI necessária';
$lang['AdminMain.settings.boxtitle_settings'] = 'Configurações';
$lang['AdminMain.settings.field_avatar'] = 'Avatar';
$lang['AdminMain.settings.field_default_avatar'] = 'Imagem padrão do avatar';
$lang['AdminMain.settings.field_submit'] = 'Atualizar configurações';
$lang['AdminMain.settings.heading_avatar_settings'] = 'Configurações do avatar';
$lang['AdminMain.settings.option_default'] = 'Usar somente o avatar personalizado';
$lang['AdminMain.settings.option_fallback'] = 'Use o Gravatar, mas substitua-o se um avatar personalizado for definido';
$lang['AdminMain.settings.option_gravatar'] = 'Use o Gravatar';
$lang['AdminMain.settings.page_title'] = 'Gerenciador de suporte &gt; Configurações';
$lang['AdminMain.settings.text_avatar_recommendation'] = 'Recomendado: 150x150px, JPG ou PNG, máximo de 2MB';
$lang['AdminMain.settings.text_remove_avatar'] = 'Remover imagem';

