<?php
/**
 * Cron
 *
 * @package blesta
 * @subpackage blesta.language.pt_pt
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Cron.addpaidpendingservices.service_success'] = 'O serviço pendente #%1$s do cliente #%2$s está agora ativo.';
$lang['Cron.addpaidpendingservices.service_error'] = 'O serviço pendente #%1$s do cliente #%2$s não pôde ser ativado.';
$lang['Cron.addpaidpendingservices.completed'] = 'A tarefa de serviços pendentes pagos foi concluída.';
$lang['Cron.addpaidpendingservices.attempt'] = 'Tentativa de aprovisionamento de serviços pendentes pagos.';
$lang['Cron.cancelscheduledservices.cancel_success'] = 'O serviço #%1$s do cliente #%2$s foi cancelado.';
$lang['Cron.cancelscheduledservices.cancel_error'] = 'O serviço #%1$s do cliente #%2$s não pôde ser cancelado.';
$lang['Cron.cancelscheduledservices.completed'] = 'A tarefa cancelar serviços agendados foi concluída.';
$lang['Cron.cancelscheduledservices.attempt'] = 'Tentativa de cancelar serviços programados.';
$lang['Cron.unsuspendservices.unsuspend_success'] = 'O serviço #%1$s do cliente %2$s não foi suspenso.';
$lang['Cron.unsuspendservices.unsuspend_error'] = 'Não foi possível cancelar a suspensão do serviço #%1$s do cliente %2$s.';
$lang['Cron.unsuspendservices.completed'] = 'A tarefa de cancelar a suspensão dos serviços foi concluída.';
$lang['Cron.unsuspendservices.attempt'] = 'Tentativa de anular a suspensão de serviços pagos suspensos.';
$lang['Cron.suspendservices.suspend_success'] = 'O serviço #%1$s do cliente %2$s foi suspenso.';
$lang['Cron.suspendservices.suspend_error'] = 'O serviço #%1$s do cliente %2$s não pôde ser suspenso.';
$lang['Cron.suspendservices.suspension_reason'] = 'Não pagamento';
$lang['Cron.suspendservices.completed'] = 'A tarefa de suspensão dos serviços foi concluída.';
$lang['Cron.suspendservices.attempt'] = 'Tentativa de suspensão de serviços em atraso.';
$lang['Cron.cardexpirationreminders.success'] = 'Entregou com sucesso o lembrete de expiração para o contacto %1$s %2$s do cliente #%3$s.';
$lang['Cron.cardexpirationreminders.failed'] = 'Não foi possível enviar o lembrete de expiração para o contacto %1$s %2$s do cliente #%3$s.';
$lang['Cron.cardexpirationreminders.completed'] = 'A tarefa de lembretes de expiração do cartão foi concluída.';
$lang['Cron.cardexpirationreminders.attempt'] = 'Tentativa de enviar lembretes de expiração do cartão.';
$lang['Cron.autodebitinvoices.charge_success'] = 'O pagamento foi processado com sucesso.';
$lang['Cron.autodebitinvoices.charge_failed'] = 'Não é possível processar o pagamento.';
$lang['Cron.autodebitinvoices.charge_attempt'] = 'Tentativa de débito automático ao cliente #%1$s de todas as facturas em aberto no montante de %2$s.';
$lang['Cron.autodebitinvoices.completed'] = 'A tarefa de débito automático de facturas foi concluída.';
$lang['Cron.autodebitinvoices.attempt'] = 'Tentativa de débito automático de facturas em aberto.';
$lang['Cron.applycredits.apply_none'] = 'Não existem facturas às quais possam ser aplicados créditos.';
$lang['Cron.applycredits.apply_success'] = 'Aplicou com êxito os créditos pendentes da transação %1$s para o cliente #%2$s à fatura #%3$s no montante de %4$s.';
$lang['Cron.applycredits.apply_failed'] = 'Não é possível aplicar créditos pendentes para o cliente #%1$s.';
$lang['Cron.applycredits.completed'] = 'A tarefa aplicar créditos foi concluída.';
$lang['Cron.applycredits.attempt'] = 'Tentativa de aplicar créditos a facturas em aberto.';
$lang['Cron.index.completed_all_system'] = 'Todas as tarefas do sistema foram concluídas.';
$lang['Cron.index.attempt_all_system'] = 'Tentativa de executar todas as tarefas do sistema.';
$lang['Cron.index.completed_all'] = 'Todas as tarefas foram concluídas.';
$lang['Cron.index.attempt_all'] = 'Tentativa de executar todas as tarefas para %1$s.';
$lang['Cron.!error.task_execution.failed'] = 'Erro: %1$s %2$s';
$lang['Cron.!error.cron.failed'] = 'O Cron não conseguiu registar.';
$lang['Cron.!error.task_filter.exclude_not_array'] = 'O filtro de tarefa "exclude" deve ser uma matriz.';
$lang['Cron.!error.task_filter.include_not_array'] = 'O filtro de tarefa "include" deve ser uma matriz.';
$lang['Cron.!error.task_filter.both_include_exclude'] = 'O filtro de tarefas não pode ter as chaves "incluir" e "excluir".';
$lang['Cron.!error.task_filter.invalid_format'] = 'O filtro de tarefas deve ser um objeto JSON.';
$lang['Cron.!error.task_filter.invalid_json'] = 'JSON inválido no parâmetro do filtro de tarefas: %1$s';

