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

$lang['AdminMain.edit.field_cancel'] = 'Cancelar';
$lang['AdminMain.add.field_cancel'] = 'Cancelar';
$lang['AdminMain.add.field_method'] = 'Método';
$lang['AdminMain.edit.text_fields_map'] = 'Esta secção permite-lhe mudar o nome dos campos do evento que está a ser acionado para um nome personalizado antes de serem enviados para a chamada de retorno. Os subcampos devem ser separados por um ponto (por exemplo, vars.status). Para ver uma lista de todos os campos suportados por cada um dos eventos, pode consultar a seguinte <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">ligação</a>.';
$lang['AdminMain.edit.field_editsubmit'] = 'Editar Webhook';
$lang['AdminMain.edit.field_add_field'] = 'Adicionar campo';
$lang['AdminMain.edit.field_method'] = 'Método';
$lang['AdminMain.edit.field_type'] = 'Chamada de retorno';
$lang['AdminMain.edit.field_event'] = 'Evento';
$lang['AdminMain.edit.field_callback'] = 'Chamada de retorno';
$lang['AdminMain.edit.option_delete'] = 'Eliminar';
$lang['AdminMain.edit.heading_options'] = 'Opções';
$lang['AdminMain.edit.heading_parameter'] = 'Novo campo';
$lang['AdminMain.edit.heading_field'] = 'Campo original';
$lang['AdminMain.edit.heading_fields_map'] = 'Mapa dos campos';
$lang['AdminMain.edit.heading_event'] = 'Evento';
$lang['AdminMain.edit.boxtitle_editwebhook'] = 'Editar Webhook';
$lang['AdminMain.add.text_fields_map'] = 'Esta secção permite-lhe mudar o nome dos campos do evento que está a ser acionado para um nome personalizado antes de serem enviados para a chamada de retorno. Os subcampos devem ser separados por um ponto (por exemplo, vars.status). Para ver uma lista de todos os campos suportados por cada um dos eventos, pode consultar a seguinte <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">ligação</a>.';
$lang['AdminMain.add.field_addsubmit'] = 'Adicionar Webhook';
$lang['AdminMain.add.field_add_field'] = 'Adicionar campo';
$lang['AdminMain.add.field_type'] = 'Chamada de retorno';
$lang['AdminMain.add.field_event'] = 'Evento';
$lang['AdminMain.add.field_callback'] = 'Chamada de retorno';
$lang['AdminMain.add.option_delete'] = 'Eliminar';
$lang['AdminMain.add.heading_options'] = 'Opções';
$lang['AdminMain.add.heading_parameter'] = 'Novo campo';
$lang['AdminMain.add.heading_field'] = 'Campo original';
$lang['AdminMain.add.heading_fields_map'] = 'Mapa dos campos';
$lang['AdminMain.add.heading_event'] = 'Evento';
$lang['AdminMain.add.boxtitle_addwebhook'] = 'Adicionar Webhook';
$lang['AdminMain.index.no_results'] = 'Não existem webhooks disponíveis.';
$lang['AdminMain.index.text_description_incoming'] = 'Recebe um pedido HTTP e desencadeia um evento no sistema utilizando os parâmetros recebidos no pedido. O pedido pode ser recebido através de GET, POST ou JSON.';
$lang['AdminMain.index.text_description_outgoing'] = 'Envia um pedido HTTP para um URL quando um evento é acionado. O pedido pode ser enviado através de GET, POST, PUT ou JSON.';
$lang['AdminMain.index.option_delete'] = 'Eliminar';
$lang['AdminMain.index.option_edit'] = 'Editar';
$lang['AdminMain.index.heading_options'] = 'Opções';
$lang['AdminMain.index.heading_method'] = 'Método';
$lang['AdminMain.index.heading_event'] = 'Evento';
$lang['AdminMain.index.heading_callback'] = 'Chamada de retorno';
$lang['AdminMain.index.boxtitle_webhooks'] = 'Webhooks';
$lang['AdminMain.index.categorylink_addwebhook'] = 'Adicionar Webhook';
$lang['AdminMain.index.category_outgoing'] = 'De saída';
$lang['AdminMain.index.category_incoming'] = 'A chegar';
$lang['AdminMain.index.page_title_edit'] = 'Editar Webhook';
$lang['AdminMain.index.page_title_add'] = 'Adicionar Webhook';
$lang['AdminMain.index.page_title_index'] = 'Webhooks';
$lang['AdminMain.modal.delete_text'] = 'Tem a certeza de que pretende eliminar este webhook?';
$lang['AdminMain.!success.webhook_deleted'] = 'O webhook foi eliminado com êxito!';
$lang['AdminMain.!success.webhook_updated'] = 'O webhook foi atualizado com sucesso!';
$lang['AdminMain.!success.webhook_added'] = 'O webhook foi adicionado com sucesso!';
$lang['AdminMain.!tooltip.callback'] = 'O retorno de chamada representa o local para onde o pedido será enviado ou recebido. Para os webhooks de saída, deve ser um URL e, para os webhooks de entrada, deve ser o nome do URL onde o pedido será recebido. Por exemplo, http://blesta.com/plugin/webhooks/trigger/index/[Nome do retorno de chamada].';
$lang['AdminMain.logs.no_results'] = 'Não existem registos disponíveis.';
$lang['AdminMain.logs.option_resend'] = 'Reenviar';
$lang['AdminMain.logs.confirm_resend'] = 'Tem a certeza de que pretende reenviar este evento?';
$lang['AdminMain.logs.field_filterdateend'] = 'Data final';
$lang['AdminMain.logs.field_filterdatestart'] = 'Data de início';
$lang['AdminMain.logs.field_filterhttpstatus'] = 'Estado HTTP';
$lang['AdminMain.logs.field_filterevent'] = 'Evento';
$lang['AdminMain.logs.field_filterwebhook_all'] = 'Todos os Webhooks';
$lang['AdminMain.logs.field_filterwebhook'] = 'Webhook';
$lang['AdminMain.logs.heading_options'] = 'Opções';
$lang['AdminMain.logs.heading_date_last_retry'] = 'Última tentativa';
$lang['AdminMain.logs.heading_date_triggered'] = 'Data de acionamento';
$lang['AdminMain.logs.heading_http_response'] = 'Resposta HTTP';
$lang['AdminMain.logs.heading_method'] = 'Método';
$lang['AdminMain.logs.heading_response'] = 'Resposta';
$lang['AdminMain.logs.heading_event'] = 'Evento';
$lang['AdminMain.logs.heading_webhook'] = 'Webhook';
$lang['AdminMain.logs.categorylink_viewwebhooks'] = 'Ver Webhooks';
$lang['AdminMain.logs.boxtitle_logs'] = 'Registos de webhooks';
$lang['AdminMain.index.option_logs'] = 'Registos';
$lang['AdminMain.index.categorylink_viewlogs'] = 'Ver todos os registos';
$lang['AdminMain.index.page_title_logs'] = 'Registos de webhooks';
$lang['AdminMain.!success.webhook_retried'] = 'O webhook foi repetido com êxito!';

