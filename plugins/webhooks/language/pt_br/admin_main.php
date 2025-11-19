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

$lang['AdminMain.edit.text_fields_map'] = 'Esta seção permite renomear o nome dos campos do evento que está sendo acionado para um nome personalizado antes que eles sejam enviados para o retorno de chamada. Os subcampos devem ser separados por um ponto (por exemplo, vars.status). Para ver uma lista de todos os campos suportados por cada um dos eventos, você pode verificar o seguinte <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">link</a>.';
$lang['AdminMain.edit.field_editsubmit'] = 'Editar Webhook';
$lang['AdminMain.edit.field_add_field'] = 'Adicionar campo';
$lang['AdminMain.edit.field_method'] = 'Método';
$lang['AdminMain.edit.field_type'] = 'Retorno de chamada';
$lang['AdminMain.edit.field_event'] = 'Evento';
$lang['AdminMain.edit.field_callback'] = 'Retorno de chamada';
$lang['AdminMain.edit.option_delete'] = 'Excluir';
$lang['AdminMain.edit.heading_options'] = 'Opções';
$lang['AdminMain.edit.heading_parameter'] = 'Novo campo';
$lang['AdminMain.edit.heading_field'] = 'Campo original';
$lang['AdminMain.edit.heading_fields_map'] = 'Mapa dos campos';
$lang['AdminMain.edit.heading_event'] = 'Evento';
$lang['AdminMain.edit.boxtitle_editwebhook'] = 'Editar Webhook';
$lang['AdminMain.add.text_fields_map'] = 'Esta seção permite renomear o nome dos campos do evento que está sendo acionado para um nome personalizado antes que eles sejam enviados para o retorno de chamada. Os subcampos devem ser separados por um ponto (por exemplo, vars.status). Para ver uma lista de todos os campos suportados por cada um dos eventos, você pode verificar o seguinte <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">link</a>.';
$lang['AdminMain.add.field_addsubmit'] = 'Adicionar Webhook';
$lang['AdminMain.add.field_add_field'] = 'Adicionar campo';
$lang['AdminMain.add.field_method'] = 'Método';
$lang['AdminMain.add.field_type'] = 'Retorno de chamada';
$lang['AdminMain.add.field_event'] = 'Evento';
$lang['AdminMain.add.field_callback'] = 'Retorno de chamada';
$lang['AdminMain.add.option_delete'] = 'Excluir';
$lang['AdminMain.add.heading_options'] = 'Opções';
$lang['AdminMain.add.heading_parameter'] = 'Novo campo';
$lang['AdminMain.add.heading_field'] = 'Campo original';
$lang['AdminMain.add.heading_fields_map'] = 'Mapa dos campos';
$lang['AdminMain.add.heading_event'] = 'Evento';
$lang['AdminMain.add.boxtitle_addwebhook'] = 'Adicionar Webhook';
$lang['AdminMain.index.no_results'] = 'Não há webhooks disponíveis.';
$lang['AdminMain.index.text_description_incoming'] = 'Recebe uma solicitação HTTP e aciona um evento no sistema usando os parâmetros recebidos na solicitação. A solicitação pode ser recebida usando GET, POST ou JSON.';
$lang['AdminMain.index.text_description_outgoing'] = 'Envia uma solicitação HTTP para um URL quando um evento é acionado. A solicitação pode ser enviada usando GET, POST, PUT ou JSON.';
$lang['AdminMain.index.option_delete'] = 'Excluir';
$lang['AdminMain.index.option_edit'] = 'Editar';
$lang['AdminMain.index.heading_options'] = 'Opções';
$lang['AdminMain.index.heading_method'] = 'Método';
$lang['AdminMain.index.heading_event'] = 'Evento';
$lang['AdminMain.index.heading_callback'] = 'Retorno de chamada';
$lang['AdminMain.index.boxtitle_webhooks'] = 'Webhooks';
$lang['AdminMain.index.categorylink_addwebhook'] = 'Adicionar Webhook';
$lang['AdminMain.index.category_outgoing'] = 'Saída';
$lang['AdminMain.index.category_incoming'] = 'Chegando';
$lang['AdminMain.index.page_title_edit'] = 'Editar Webhook';
$lang['AdminMain.index.page_title_add'] = 'Adicionar Webhook';
$lang['AdminMain.index.page_title_index'] = 'Webhooks';
$lang['AdminMain.modal.delete_text'] = 'Tem certeza de que deseja excluir esse webhook?';
$lang['AdminMain.!success.webhook_deleted'] = 'O webhook foi excluído com sucesso!';
$lang['AdminMain.!success.webhook_updated'] = 'O webhook foi atualizado com sucesso!';
$lang['AdminMain.!success.webhook_added'] = 'O webhook foi adicionado com sucesso!';
$lang['AdminMain.!tooltip.callback'] = 'O callback representa o local para onde a solicitação será enviada ou recebida. Para webhooks de saída, deve ser um URL e, para webhooks de entrada, deve ser o nome do URL em que a solicitação será recebida. Por exemplo, http://blesta.com/plugin/webhooks/trigger/index/[Callback Name].';
$lang['AdminMain.edit.field_cancel'] = 'Cancelar';
$lang['AdminMain.add.field_cancel'] = 'Cancelar';
$lang['AdminMain.logs.no_results'] = 'Não há registros disponíveis.';
$lang['AdminMain.logs.option_resend'] = 'Reenviar';
$lang['AdminMain.logs.confirm_resend'] = 'Tem certeza de que deseja reenviar esse evento?';
$lang['AdminMain.logs.field_filterdateend'] = 'Data final';
$lang['AdminMain.logs.field_filterdatestart'] = 'Data de início';
$lang['AdminMain.logs.field_filterhttpstatus'] = 'Status do HTTP';
$lang['AdminMain.logs.field_filterevent'] = 'Evento';
$lang['AdminMain.logs.field_filterwebhook_all'] = 'Todos os webhooks';
$lang['AdminMain.logs.field_filterwebhook'] = 'Webhook';
$lang['AdminMain.logs.heading_options'] = 'Opções';
$lang['AdminMain.logs.heading_date_last_retry'] = 'Última tentativa';
$lang['AdminMain.logs.heading_date_triggered'] = 'Data de acionamento';
$lang['AdminMain.logs.heading_http_response'] = 'Resposta HTTP';
$lang['AdminMain.logs.heading_method'] = 'Método';
$lang['AdminMain.logs.heading_response'] = 'Resposta';
$lang['AdminMain.logs.heading_event'] = 'Evento';
$lang['AdminMain.logs.heading_webhook'] = 'Webhook';
$lang['AdminMain.logs.categorylink_viewwebhooks'] = 'Exibir webhooks';
$lang['AdminMain.logs.boxtitle_logs'] = 'Registros de webhooks';
$lang['AdminMain.index.option_logs'] = 'Registros';
$lang['AdminMain.index.categorylink_viewlogs'] = 'Ver todos os registros';
$lang['AdminMain.index.page_title_logs'] = 'Registros de webhooks';
$lang['AdminMain.!success.webhook_retried'] = 'O webhook foi testado novamente com sucesso!';

