<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.pt_pt
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.settings.field_submit'] = 'Atualizar definições';
$lang['AdminMain.settings.text_remove_avatar'] = 'Remover imagem';
$lang['AdminMain.settings.field_default_avatar'] = 'Imagem de avatar predefinida';
$lang['AdminMain.settings.option_default'] = 'Utilizar apenas o avatar personalizado';
$lang['AdminMain.settings.option_fallback'] = 'Utilizar o Gravatar, mas substitui-lo se for definido um avatar personalizado';
$lang['AdminMain.settings.option_gravatar'] = 'Utilizar o Gravatar';
$lang['AdminMain.settings.field_avatar'] = 'Avatar';
$lang['AdminMain.settings.heading_avatar_settings'] = 'Definições do avatar';
$lang['AdminMain.settings.boxtitle_settings'] = 'Definições';
$lang['AdminMain.settings.page_title'] = 'Gestor de suporte &gt; Definições';
$lang['AdminMain.!success.settings_updated'] = 'As definições foram actualizadas com êxito.';
$lang['AdminMain.!success.ai_settings_updated'] = 'As definições de IA foram actualizadas com êxito.';
$lang['AdminMain.ai.page_title'] = 'Gestor de suporte &gt; Definições de IA';
$lang['AdminMain.settings.text_avatar_recommendation'] = 'Recomendado: 150x150px, JPG ou PNG, máx. 2MB';
$lang['AdminMain.ai.boxtitle_settings'] = 'Definições de IA';
$lang['AdminMain.ai.warning_not_configured_title'] = 'Chave API da Blesta AI necessária';
$lang['AdminMain.ai.warning_not_configured_text'] = 'Os recursos de IA para o Support Manager exigem uma chave de API de IA da Blesta. Configure sua chave de API em Configurações do sistema &gt; Inteligência artificial antes de ativar os recursos de IA.';
$lang['AdminMain.ai.button_configure_ai'] = 'Aceder às definições de IA do sistema';
$lang['AdminMain.ai.heading_features'] = 'Caraterísticas da IA';
$lang['AdminMain.ai.heading_model'] = 'Configuração do modelo';
$lang['AdminMain.ai.heading_parameters'] = 'Parâmetros do modelo';
$lang['AdminMain.ai.heading_system_prompt'] = 'Prompt do sistema';
$lang['AdminMain.ai.heading_experimental'] = 'Caraterísticas experimentais';
$lang['AdminMain.ai.heading_replies'] = 'Respostas automáticas';
$lang['AdminMain.ai.heading_tools'] = 'Ferramentas de IA';
$lang['AdminMain.ai.field_enabled'] = 'Ativar funcionalidades de IA para o Support Manager';
$lang['AdminMain.ai.field_enabled_desc'] = 'Permitir funcionalidades baseadas em IA no sistema de bilhetes, incluindo respostas automáticas, resumos e ferramentas.';
$lang['AdminMain.ai.field_override_model'] = 'Substituir o modelo de IA predefinido';
$lang['AdminMain.ai.field_override_model_desc'] = 'Predefinição do sistema: %1$s';
$lang['AdminMain.ai.field_model'] = 'Modelo de IA';
$lang['AdminMain.ai.field_model_tooltip'] = 'Selecione o modelo de IA a ser usado especificamente para os recursos do Support Manager. Modelos diferentes têm capacidades e preços diferentes.';
$lang['AdminMain.ai.field_model_desc'] = 'Este modelo será utilizado para todas as funcionalidades de IA no Support Manager.';
$lang['AdminMain.ai.field_override_max_tokens'] = 'Anular o número máximo de fichas';
$lang['AdminMain.ai.field_override_max_tokens_desc'] = 'Predefinição do sistema: %1$s';
$lang['AdminMain.ai.field_max_tokens'] = 'Máximo de fichas';
$lang['AdminMain.ai.field_max_tokens_tooltip'] = 'Número máximo de tokens (palavras/peças de palavras) que a IA pode gerar numa única resposta. Valores mais elevados permitem respostas mais longas, mas consomem mais recursos. Intervalo típico: 100-4000 para a maioria das tarefas.';
$lang['AdminMain.ai.field_max_tokens_desc'] = 'Controla o comprimento máximo das respostas geradas pela IA. Predefinição: 4000';
$lang['AdminMain.ai.field_override_temperature'] = 'Temperatura de substituição';
$lang['AdminMain.ai.field_override_temperature_desc'] = 'Predefinição do sistema: %1$s';
$lang['AdminMain.ai.field_temperature'] = 'Temperatura';
$lang['AdminMain.ai.field_temperature_tooltip'] = 'Controla a aleatoriedade das respostas. Valores mais baixos (0,0-0,7) produzem resultados mais focados e determinísticos. Valores mais elevados (1,3-2,0) produzem resultados mais criativos e variados. Intervalo: 0,0 a 2,0';
$lang['AdminMain.ai.field_temperature_desc'] = 'Temperatura mais baixa = mais concentrado, temperatura mais alta = mais criativo. Predefinição: 1.0';
$lang['AdminMain.ai.field_system_prompt'] = 'Prompt de sistema do Support Manager';
$lang['AdminMain.ai.field_system_prompt_tooltip'] = 'Define instruções específicas para a IA ao lidar com os tickets de suporte. Esta mensagem substitui a mensagem global do sistema e define o comportamento da IA especificamente no sistema de tickets.';
$lang['AdminMain.ai.field_system_prompt_desc'] = 'Esta linha de comandos é utilizada especificamente para as funcionalidades de IA do Support Manager e substitui a linha de comandos global do sistema.';
$lang['AdminMain.ai.badge_experimental'] = 'EXPERIMENTAL';
$lang['AdminMain.ai.field_auto_reply_enabled'] = 'Ativar as respostas automáticas de bilhetes da IA';
$lang['AdminMain.ai.field_auto_reply_enabled_desc'] = 'Permitir que a IA responda automaticamente aos bilhetes quando tiver um elevado grau de certeza sobre a resposta.';
$lang['AdminMain.ai.field_confidence_threshold'] = 'Limiar de confiança';
$lang['AdminMain.ai.field_confidence_threshold_tooltip'] = 'A IA só responderá automaticamente aos tickets quando o seu nível de confiança atingir ou exceder este limite. Os valores mais elevados (90-100%) são mais conservadores e mais seguros. Valores mais baixos (60-89%) resultarão em mais respostas automáticas, mas com maior risco de erros.';
$lang['AdminMain.ai.field_confidence_threshold_desc'] = 'Limiar mais elevado = mais conservador (menos respostas automáticas, maior exatidão). Recomendado: 70% ou mais.';
$lang['AdminMain.ai.field_require_human_review'] = 'Exigir revisão humana antes de enviar';
$lang['AdminMain.ai.field_require_human_review_desc'] = 'As respostas geradas automaticamente são apresentadas no bilhete para utilização do pessoal (Recomendado)';
$lang['AdminMain.ai.field_add_ai_disclaimer'] = 'Adicionar uma declaração de exoneração de responsabilidade gerada por IA';
$lang['AdminMain.ai.field_add_ai_disclaimer_desc'] = 'Anexar um aviso às respostas geradas automaticamente indicando que foram criadas por IA (recomendado para transparência)';
$lang['AdminMain.ai.field_custom_disclaimer'] = 'Texto de isenção de responsabilidade personalizado';
$lang['AdminMain.ai.field_custom_disclaimer_tooltip'] = 'Personalize a mensagem de isenção de responsabilidade anexada às respostas geradas por IA. Deixe em branco para utilizar a mensagem predefinida.';
$lang['AdminMain.ai.field_custom_disclaimer_desc'] = 'Este texto será anexado a todas as respostas a bilhetes geradas por IA.';
$lang['AdminMain.ai.field_custom_disclaimer_placeholder'] = 'Esta resposta foi gerada com a ajuda da IA.';
$lang['AdminMain.ai.field_restricted_departments'] = 'Restringir a resposta automática aos departamentos';
$lang['AdminMain.ai.field_restricted_departments_tooltip'] = 'Permitir respostas automáticas apenas para departamentos de bilhetes específicos. Deixe tudo desmarcado para permitir todos os departamentos.';
$lang['AdminMain.ai.field_restricted_departments_desc'] = 'Selecione os departamentos de bilhetes que podem receber respostas automáticas de IA. Desmarque todos para permitir todos os departamentos.';
$lang['AdminMain.ai.field_assistant_name'] = 'Nome de apresentação do Assistente de IA';
$lang['AdminMain.ai.field_assistant_name_tooltip'] = 'O nome mostrado nas respostas geradas pela IA em tópicos de tickets. Isto personaliza o assistente de IA para a sua equipa de suporte.';
$lang['AdminMain.ai.field_assistant_name_desc'] = 'Deixar em branco para utilizar o nome predefinido: "Support"';
$lang['AdminMain.ai.field_assistant_name_placeholder'] = 'Apoio';
$lang['AdminMain.ai.field_analyze_trigger'] = 'Acionador de análise de IA';
$lang['AdminMain.ai.field_analyze_trigger_tooltip'] = 'Escolha quando a IA deve analisar os tickets para possíveis respostas e usos da ferramenta. "Cada resposta" analisa cada nova mensagem. "Ticket Opened" analisa apenas a abertura inicial do ticket.';
$lang['AdminMain.ai.field_analyze_trigger_desc'] = 'Controla quando a análise de IA é acionada para gerar respostas e executar ferramentas.';
$lang['AdminMain.ai.option_every_reply'] = 'Todas as respostas';
$lang['AdminMain.ai.option_ticket_opened'] = 'Apenas bilhetes abertos';
$lang['AdminMain.ai.field_max_queue_age_hours'] = 'Idade máxima da fila de espera (horas)';
$lang['AdminMain.ai.field_max_queue_age_hours_tooltip'] = 'As respostas do cliente em fila de espera mais antigas do que este valor serão descartadas pelo cron em vez de serem processadas. Impede que a IA responda a tickets obsoletos se o cron tiver sido desativado e houver um acúmulo de pendências.';
$lang['AdminMain.ai.field_max_queue_age_hours_desc'] = 'Descarta as respostas de IA em fila de espera mais antigas do que este número de horas. Deve estar entre 1 e 8760 (1 ano). A predefinição é 24.';
$lang['AdminMain.ai.field_tools_enabled'] = 'Ativar ferramentas';
$lang['AdminMain.ai.field_tools_enabled_desc'] = 'Permitir que a IA utilize ferramentas para a gestão de bilhetes, como a alteração da prioridade, o encerramento de bilhetes ou a atribuição a membros do pessoal.';
$lang['AdminMain.ai.field_tools_available'] = 'Ferramentas disponíveis';
$lang['AdminMain.ai.field_tools_available_tooltip'] = 'Selecione as ferramentas que a IA tem permissão para usar. Cada ferramenta permite ações específicas que a IA pode executar ao processar tickets.';
$lang['AdminMain.ai.field_tool_change_priority'] = 'Alterar a prioridade dos bilhetes';
$lang['AdminMain.ai.field_tool_change_priority_desc'] = 'Permitir que a IA ajuste a prioridade dos bilhetes (para cima ou para baixo) quando uma prioridade inadequada foi selecionada pelo cliente ou detectada pela análise.';
$lang['AdminMain.ai.field_tool_close_ticket'] = 'Fechar bilhete';
$lang['AdminMain.ai.field_tool_close_ticket_desc'] = 'Permitir que a IA feche bilhetes em casos de spam, mensagens devolvidas ou problemas claramente resolvidos.';
$lang['AdminMain.ai.field_tool_assign_staff'] = 'Atribuir a um membro do pessoal';
$lang['AdminMain.ai.field_tool_assign_staff_desc'] = 'Permitir que a IA atribua bilhetes a membros específicos do pessoal com base nas instruções do sistema.';
$lang['AdminMain.ai.field_tool_instructions'] = 'Instruções de utilização da ferramenta';
$lang['AdminMain.ai.field_tool_instructions_tooltip'] = 'Forneça orientações específicas à IA sobre quando e como utilizar as ferramentas activadas. Por exemplo, especificar os nomes dos membros do pessoal e as suas áreas de especialização para a atribuição de bilhetes.';
$lang['AdminMain.ai.field_tool_instructions_desc'] = 'Fornece instruções e cenários específicos onde as ferramentas devem ser utilizadas. Este texto será incluído no aviso do sistema quando as ferramentas estiverem activadas.';
$lang['AdminMain.ai.field_tool_instructions_placeholder'] = 'Exemplo: - Atribuir questões técnicas relacionadas com os servidores Linux ao John e com os servidores Windows ao Dave - Encerrar apenas os bilhetes que sejam claramente spam, respostas automáticas ou que o cliente indique que o bilhete está resolvido na resposta mais recente - Aumentar a prioridade dos problemas urgentes que mencionem "em baixo" ou "offline" para o estado de Emergência - Diminuir a prioridade dos bilhetes de Emergência se não forem realmente emergências';
$lang['AdminMain.ai.field_submit'] = 'Guardar definições de IA';

