<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.pt_br
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.confirm.generate'] = 'Gerar extensão';
$lang['AdminMain.confirm.custom_path'] = 'Caminho personalizado';
$lang['AdminMain.confirm.tooltip_location'] = 'O diretório no qual fazer upload dos arquivos de extensão gerados.';
$lang['AdminMain.confirm.location'] = 'Localização da extensão';
$lang['AdminMain.confirm.text_generation'] = 'As configurações da extensão estão concluídas.  Você pode revisar qualquer seção clicando nos nós da barra de progresso.  Clique em "Generate Extension" (Gerar extensão) para concluir e gerar automaticamente os arquivos para sua extensão.';
$lang['AdminMain.confirm.heading_confirm'] = 'Confirmação';
$lang['AdminMain.general.placeholder_name'] = 'Nome da extensão';
$lang['AdminMain.general.tooltip_code_examples'] = 'Verifique se incluiu linhas comentadas de código de amostra para recursos como tarefas Cron, listas de eventos e vínculos, etc.';
$lang['AdminMain.general.tooltip_form_type'] = 'Basic para usar uma versão altamente truncada do formulário de extensão, incluindo apenas o mínimo necessário para gerar a extensão.';
$lang['AdminMain.general.tooltip_type'] = 'Os módulos lidam com muitos recursos de serviço, inclusive o provisionamento de serviços em servidores remotos. Os plug-ins são integrações poderosas capazes de fazer quase tudo na Blesta. Os gateways de comerciante processam pagamentos enquanto mantêm os clientes na interface da Blesta.  Os gateways não comerciais enviam os clientes a um site de processador de pagamento para concluir o pagamento.';
$lang['AdminMain.general.tooltip_name'] = 'O nome de exibição da extensão. Isso também é usado para criar vários códigos. Por exemplo, se o nome for My Module, o diretório do módulo será my_module e o nome da classe será MyModule.  Para plug-ins, não inclua a palavra "plugin" no nome, pois isso causa alguns problemas com a geração de código.';
$lang['AdminMain.general.basic_info'] = 'Próximo - Informações básicas';
$lang['AdminMain.general.code_examples'] = 'Incluir código de exemplo';
$lang['AdminMain.general.form_type'] = 'Tipo de formulário';
$lang['AdminMain.general.type'] = 'Tipo de extensão';
$lang['AdminMain.general.name'] = 'Nome';
$lang['AdminMain.general.heading_general_settings'] = 'Configurações gerais';
$lang['AdminMain.index.extensions_no_results'] = 'Não há extensões no momento.';
$lang['AdminMain.index.text_confirm_delete'] = 'Tem certeza de que deseja excluir essa extensão?';
$lang['AdminMain.index.option_delete'] = 'Excluir';
$lang['AdminMain.index.option_edit'] = 'Editar';
$lang['AdminMain.index.heading_options'] = 'Opções';
$lang['AdminMain.index.heading_date_updated'] = 'Data de atualização';
$lang['AdminMain.index.heading_code_examples'] = 'Exemplos de código';
$lang['AdminMain.index.heading_form_type'] = 'Tipo de formulário';
$lang['AdminMain.index.heading_type'] = 'Tipo';
$lang['AdminMain.index.heading_name'] = 'Nome';
$lang['AdminMain.index.heading_id'] = 'ID';
$lang['AdminMain.index.extension_add'] = 'Adicionar extensão';
$lang['AdminMain.index.boxtitle_extensions'] = 'Gerador de extensões - Extensões';
$lang['AdminMain.index.boxtitle_extension_generator'] = 'Gerador de extensão';
$lang['AdminMain.index.page_title'] = 'Gerador de extensão';
$lang['AdminMain.getfilelocations.custom'] = 'Personalizado';
$lang['AdminMain.getfilelocations.upload'] = 'Diretório de Uploads do Blesta';
$lang['AdminMain.getfilelocations.nonmerchant'] = 'Diretório de gateways para não comerciantes da Blesta';
$lang['AdminMain.getfilelocations.merchant'] = 'Diretório de gateway de comerciante Blesta';
$lang['AdminMain.getfilelocations.plugin'] = 'Diretório de plug-ins Blesta';
$lang['AdminMain.getfilelocations.module'] = 'Diretório de módulos Blesta';
$lang['AdminMain.!success.nonmerchant_created'] = 'O novo gateway foi gerado com sucesso e pode ser encontrado em %1$s';
$lang['AdminMain.!success.merchant_created'] = 'O novo gateway foi gerado com sucesso e pode ser encontrado em %1$s';
$lang['AdminMain.!success.plugin_created'] = 'O novo plug-in foi gerado com sucesso e pode ser encontrado em %1$s';
$lang['AdminMain.!success.module_created'] = 'O novo módulo foi gerado com sucesso e pode ser encontrado em %1$s';
$lang['AdminMain.!success.package_deleted'] = 'A extensão foi excluída com êxito';
$lang['AdminMain.!notice.updating_installed_extension'] = 'Essa extensão está instalada no momento. É altamente recomendável que você a desinstale antes de regenerar os arquivos, pois isso pode prejudicar a consistência do seu banco de dados.';
$lang['AdminMain.!notice.file_overwrite'] = 'Os arquivos para essa extensão já existem nos arquivos Blesta e serão substituídos se você usar o diretório Blesta.';
$lang['AdminMain.!notice.type_warning'] = 'A alteração do tipo de extensão apagará de forma irreversível todas as configurações salvas para essa extensão.';
$lang['AdminMain.!error.generation_failed'] = 'Não foi possível gerar sua extensão.  Exceção gerada: %1$s';
$lang['AdminMain.!error.name_taken'] = 'Esse nome entra em conflito com um diretório de extensão existente.';

