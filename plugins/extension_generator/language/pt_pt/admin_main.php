<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.pt_br
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.confirm.generate'] = 'Gerar extensão';
$lang['AdminMain.confirm.custom_path'] = 'Caminho personalizado';
$lang['AdminMain.confirm.tooltip_location'] = 'O diretório no qual fazer upload dos ficheiros de extensão gerados.';
$lang['AdminMain.confirm.location'] = 'Localização da extensão';
$lang['AdminMain.confirm.text_generation'] = 'As configurações da extensão estão concluídas. Pode rever qualquer secção clicando nos nós da barra de progresso. Clique em "Gerar Extensão" para concluir e gerar automaticamente os ficheiros para a sua extensão.';
$lang['AdminMain.confirm.heading_confirm'] = 'Confirmação';
$lang['AdminMain.general.placeholder_name'] = 'Nome da extensão';
$lang['AdminMain.general.tooltip_code_examples'] = 'Certifique-se de que incluiu linhas comentadas de código de amostra para funcionalidades como tarefas Cron, listas de eventos e vínculos, etc.';
$lang['AdminMain.general.tooltip_form_type'] = 'Básico para usar uma versão altamente truncada do formulário de extensão, incluindo apenas o mínimo necessário para gerar a extensão.';
$lang['AdminMain.general.tooltip_type'] = 'Os módulos lidam com muitas funcionalidades de serviço, incluindo o aprovisionamento de serviços em servidores remotos. Os plug-ins são integrações poderosas capazes de fazer quase tudo na Blesta. Os gateways de comerciante processam pagamentos enquanto mantêm os clientes na interface da Blesta. Os gateways não comerciais enviam os clientes para um site de processador de pagamento para concluir o pagamento.';
$lang['AdminMain.general.tooltip_name'] = 'O nome de exibição da extensão. Isso também é usado para criar vários códigos. Por exemplo, se o nome for My Module, o diretório do módulo será my_module e o nome da classe será MyModule. Para plug-ins, não inclua a palavra "plugin" no nome, pois isso causa alguns problemas com a geração de código.';
$lang['AdminMain.general.basic_info'] = 'Próximo - Informações básicas';
$lang['AdminMain.general.code_examples'] = 'Incluir código de exemplo';
$lang['AdminMain.general.form_type'] = 'Tipo de formulário';
$lang['AdminMain.general.type'] = 'Tipo de extensão';
$lang['AdminMain.general.name'] = 'Nome';
$lang['AdminMain.general.heading_general_settings'] = 'Configurações gerais';
$lang['AdminMain.index.extensions_no_results'] = 'Não há extensões de momento.';
$lang['AdminMain.index.text_confirm_delete'] = 'Tem a certeza de que deseja eliminar esta extensão?';
$lang['AdminMain.index.option_delete'] = 'Eliminar';
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
$lang['AdminMain.getfilelocations.upload'] = 'Diretório de Uploads da Blesta';
$lang['AdminMain.getfilelocations.nonmerchant'] = 'Diretório de gateways para não-comerciantes da Blesta';
$lang['AdminMain.getfilelocations.merchant'] = 'Diretório de gateway de comerciante da Blesta';
$lang['AdminMain.getfilelocations.plugin'] = 'Diretório de plug-ins da Blesta';
$lang['AdminMain.getfilelocations.module'] = 'Diretório de módulos da Blesta';
$lang['AdminMain.!success.nonmerchant_created'] = 'O novo gateway foi gerado com sucesso e pode ser encontrado em %1$s';
$lang['AdminMain.!success.merchant_created'] = 'O novo gateway foi gerado com sucesso e pode ser encontrado em %1$s';
$lang['AdminMain.!success.plugin_created'] = 'O novo plug-in foi gerado com sucesso e pode ser encontrado em %1$s';
$lang['AdminMain.!success.module_created'] = 'O novo módulo foi gerado com sucesso e pode ser encontrado em %1$s';
$lang['AdminMain.!success.package_deleted'] = 'A extensão foi eliminada com êxito.';
$lang['AdminMain.!notice.updating_installed_extension'] = 'Esta extensão está instalada de momento. É altamente recomendável que a desinstale antes de regenerar os ficheiros, pois isso pode prejudicar a consistência da sua base de dados.';
$lang['AdminMain.!notice.file_overwrite'] = 'Os ficheiros para esta extensão já existem nos ficheiros Blesta e serão substituídos se usar o diretório Blesta.';
$lang['AdminMain.!notice.type_warning'] = 'A alteração do tipo de extensão apagará de forma irreversível todas as configurações guardadas para esta extensão.';
$lang['AdminMain.!error.generation_failed'] = 'Não foi possível gerar a sua extensão. Exceção gerada: %1$s';
$lang['AdminMain.!error.name_taken'] = 'Este nome entra em conflito com um diretório de extensão existente.';
