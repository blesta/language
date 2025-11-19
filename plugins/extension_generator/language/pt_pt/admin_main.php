<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.pt_pt
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.confirm.generate'] = 'Gerar extensão';
$lang['AdminMain.confirm.custom_path'] = 'Caminho personalizado';
$lang['AdminMain.confirm.tooltip_location'] = 'O diretório no qual carregar os ficheiros de extensão gerados.';
$lang['AdminMain.confirm.location'] = 'Localização da extensão';
$lang['AdminMain.confirm.text_generation'] = 'As definições da extensão estão concluídas.  Pode rever qualquer secção clicando nos nós da barra de progresso.  Clique em "Generate Extension" (Gerar extensão) para concluir e gerar automaticamente os ficheiros para a sua extensão.';
$lang['AdminMain.confirm.heading_confirm'] = 'Confirmação';
$lang['AdminMain.general.placeholder_name'] = 'Nome da extensão';
$lang['AdminMain.general.tooltip_code_examples'] = 'Verifique se inclui linhas comentadas de código de exemplo para funcionalidades como tarefas Cron, listas de eventos e ligações, etc.';
$lang['AdminMain.general.tooltip_form_type'] = 'Basic para utilizar uma versão altamente truncada do formulário de extensão, incluindo apenas o mínimo necessário para gerar a extensão.';
$lang['AdminMain.general.tooltip_type'] = 'Os módulos tratam de muitas caraterísticas dos serviços, incluindo o fornecimento de serviços em servidores remotos. Os plugins são integrações poderosas capazes de fazer quase tudo na Blesta. Os gateways de comerciante processam pagamentos enquanto mantêm os clientes na interface Blesta.  Os gateways não-comerciantes enviam os clientes para o site de um processador de pagamentos para concluir o pagamento.';
$lang['AdminMain.general.tooltip_name'] = 'O nome de apresentação da extensão. Este também é utilizado para criar vários códigos. Por exemplo, se o nome for My Module, o diretório do módulo será my_module e o nome da classe será MyModule.  Para plugins, não inclua a palavra "plugin" no nome, pois isso causa alguns problemas com a geração de código.';
$lang['AdminMain.general.basic_info'] = 'Seguinte - Informações básicas';
$lang['AdminMain.general.code_examples'] = 'Incluir código de exemplo';
$lang['AdminMain.general.form_type'] = 'Tipo de formulário';
$lang['AdminMain.general.type'] = 'Tipo de extensão';
$lang['AdminMain.general.name'] = 'Nome';
$lang['AdminMain.general.heading_general_settings'] = 'Definições gerais';
$lang['AdminMain.index.extensions_no_results'] = 'De momento, não há prorrogações.';
$lang['AdminMain.index.text_confirm_delete'] = 'Tem a certeza de que pretende apagar esta extensão?';
$lang['AdminMain.index.option_delete'] = 'Eliminar';
$lang['AdminMain.index.option_edit'] = 'Editar';
$lang['AdminMain.index.heading_options'] = 'Opções';
$lang['AdminMain.index.heading_date_updated'] = 'Data de atualização';
$lang['AdminMain.index.heading_code_examples'] = 'Exemplos de códigos';
$lang['AdminMain.index.heading_form_type'] = 'Tipo de formulário';
$lang['AdminMain.index.heading_type'] = 'Tipo';
$lang['AdminMain.index.heading_name'] = 'Nome';
$lang['AdminMain.index.heading_id'] = 'ID';
$lang['AdminMain.index.extension_add'] = 'Adicionar extensão';
$lang['AdminMain.index.boxtitle_extensions'] = 'Gerador de extensões - Extensões';
$lang['AdminMain.index.boxtitle_extension_generator'] = 'Gerador de extensão';
$lang['AdminMain.index.page_title'] = 'Gerador de extensão';
$lang['AdminMain.getfilelocations.custom'] = 'Personalizado';
$lang['AdminMain.getfilelocations.upload'] = 'Blesta Uploads Diretório';
$lang['AdminMain.getfilelocations.nonmerchant'] = 'Diretório de gateways não comerciais Blesta';
$lang['AdminMain.getfilelocations.merchant'] = 'Diretório da Blesta Merchant Gateway';
$lang['AdminMain.getfilelocations.plugin'] = 'Diretório de Plugins Blesta';
$lang['AdminMain.getfilelocations.module'] = 'Diretório de Módulos Blesta';
$lang['AdminMain.!success.nonmerchant_created'] = 'O novo gateway foi gerado com sucesso e pode ser encontrado em %1$s';
$lang['AdminMain.!success.merchant_created'] = 'O novo gateway foi gerado com sucesso e pode ser encontrado em %1$s';
$lang['AdminMain.!success.plugin_created'] = 'O novo plugin foi gerado com sucesso e pode ser encontrado em %1$s';
$lang['AdminMain.!success.module_created'] = 'O novo módulo foi gerado com sucesso e pode ser encontrado em %1$s';
$lang['AdminMain.!success.package_deleted'] = 'A extensão foi eliminada com êxito';
$lang['AdminMain.!notice.updating_installed_extension'] = 'Esta extensão está atualmente instalada. Recomenda-se vivamente que a desinstale antes de regenerar os ficheiros, caso contrário poderá danificar a consistência da sua base de dados.';
$lang['AdminMain.!notice.file_overwrite'] = 'Os ficheiros para esta extensão já existem nos ficheiros Blesta e serão substituídos se utilizar o Diretório Blesta.';
$lang['AdminMain.!notice.type_warning'] = 'A alteração do tipo de extensão apagará de forma irreversível todas as definições guardadas para esta extensão.';
$lang['AdminMain.!error.generation_failed'] = 'Não foi possível gerar a sua extensão.  Exceção gerada: %1$s';
$lang['AdminMain.!error.name_taken'] = 'Este nome entra em conflito com um diretório de extensões existente.';

