<?php
/**
 * Cron
 *
 * @package blesta
 * @subpackage blesta.language.pt_br
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Cron.addpaidpendingservices.service_success'] = 'O serviço pendente #%1$s do cliente #%2$s agora está ativo.';
$lang['Cron.addpaidpendingservices.service_error'] = 'O serviço pendente #%1$s do cliente #%2$s não pôde ser ativado.';
$lang['Cron.addpaidpendingservices.completed'] = 'A tarefa de serviços pendentes pagos foi concluída.';
$lang['Cron.addpaidpendingservices.attempt'] = 'Tentativa de provisionar serviços pendentes pagos.';
$lang['Cron.cancelscheduledservices.cancel_success'] = 'O serviço #%1$s do cliente #%2$s foi cancelado.';
$lang['Cron.cancelscheduledservices.cancel_error'] = 'O serviço #%1$s do cliente #%2$s não pôde ser cancelado.';
$lang['Cron.cancelscheduledservices.completed'] = 'A tarefa de cancelamento de serviços agendados foi concluída.';
$lang['Cron.cancelscheduledservices.attempt'] = 'Tentativa de cancelar serviços programados.';
$lang['Cron.unsuspendservices.unsuspend_success'] = 'O serviço #%1$s do cliente %2$s não foi suspenso.';
$lang['Cron.unsuspendservices.unsuspend_error'] = 'Não foi possível cancelar a suspensão do serviço #%1$s do cliente %2$s.';
$lang['Cron.unsuspendservices.completed'] = 'A tarefa de cancelar a suspensão dos serviços foi concluída.';
$lang['Cron.unsuspendservices.attempt'] = 'Tentativa de cancelar a suspensão de serviços suspensos pagos.';
$lang['Cron.suspendservices.suspend_success'] = 'O serviço #%1$s do cliente %2$s foi suspenso.';
$lang['Cron.suspendservices.suspend_error'] = 'O serviço #%1$s do cliente %2$s não pôde ser suspenso.';
$lang['Cron.suspendservices.suspension_reason'] = 'Não pagamento';
$lang['Cron.suspendservices.completed'] = 'A tarefa de suspensão de serviços foi concluída.';
$lang['Cron.suspendservices.attempt'] = 'Tentativa de suspender serviços vencidos.';
$lang['Cron.cardexpirationreminders.success'] = 'Entregou com sucesso o lembrete de expiração para o contato %1$s %2$s do cliente #%3$s.';
$lang['Cron.cardexpirationreminders.failed'] = 'Não foi possível enviar o lembrete de vencimento para o contato %1$s %2$s do cliente #%3$s.';
$lang['Cron.cardexpirationreminders.completed'] = 'A tarefa de lembretes de expiração do cartão foi concluída.';
$lang['Cron.cardexpirationreminders.attempt'] = 'Tentativa de enviar lembretes de vencimento do cartão.';
$lang['Cron.autodebitinvoices.charge_success'] = 'O pagamento foi processado com sucesso.';
$lang['Cron.autodebitinvoices.charge_failed'] = 'Não foi possível processar o pagamento.';
$lang['Cron.autodebitinvoices.charge_attempt'] = 'Tentativa de débito automático do cliente #%1$s para todas as faturas em aberto no valor de %2$s.';
$lang['Cron.autodebitinvoices.completed'] = 'A tarefa de débito automático de faturas foi concluída.';
$lang['Cron.autodebitinvoices.attempt'] = 'Tentativa de débito automático de faturas em aberto.';
$lang['Cron.applycredits.apply_none'] = 'Não há faturas às quais os créditos possam ser aplicados.';
$lang['Cron.applycredits.apply_success'] = 'Aplicou com sucesso os créditos pendentes da transação %1$s para o cliente #%2$s à fatura #%3$s no valor de %4$s.';
$lang['Cron.applycredits.apply_failed'] = 'Não foi possível aplicar créditos pendentes para o cliente #%1$s.';
$lang['Cron.applycredits.completed'] = 'A tarefa de aplicar créditos foi concluída.';
$lang['Cron.applycredits.attempt'] = 'Tentativa de aplicar créditos a faturas em aberto.';
$lang['Cron.index.completed_all_system'] = 'Todas as tarefas do sistema foram concluídas.';
$lang['Cron.index.attempt_all_system'] = 'Tentativa de executar todas as tarefas do sistema.';
$lang['Cron.index.completed_all'] = 'Todas as tarefas foram concluídas.';
$lang['Cron.index.attempt_all'] = 'Tentando executar todas as tarefas para %1$s.';
$lang['Cron.!error.task_execution.failed'] = 'Erro: %1$s %2$s';
$lang['Cron.!error.cron.failed'] = 'Falha no registro do Cron.';
$lang['Cron.!error.task_filter.exclude_not_array'] = 'O filtro de tarefa "exclude" deve ser uma matriz.';
$lang['Cron.!error.task_filter.include_not_array'] = 'O filtro de tarefa "include" deve ser uma matriz.';
$lang['Cron.!error.task_filter.both_include_exclude'] = 'O filtro de tarefa não pode ter as chaves "incluir" e "excluir".';
$lang['Cron.!error.task_filter.invalid_format'] = 'O filtro de tarefa deve ser um objeto JSON.';
$lang['Cron.!error.task_filter.invalid_json'] = 'JSON inválido no parâmetro do filtro de tarefa: %1$s';

