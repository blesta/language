<?php
/**
 * Cron Tasks
 *
 * @package blesta
 * @subpackage blesta.language.pt_br
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['CronTasks.crontask.name.license_validation'] = 'Validação de licença';
$lang['CronTasks.crontask.description.transition_quotations'] = 'Marcar as cotações após a data de validade como expiradas';
$lang['CronTasks.crontask.name.transition_quotations'] = 'Citações de transição';
$lang['CronTasks.crontask.description.unsuspend_services'] = 'Os serviços suspensos que foram pagos serão cancelados no intervalo selecionado.';
$lang['CronTasks.crontask.name.unsuspend_services'] = 'Serviços de insuspensão';
$lang['CronTasks.crontask.description.cleanup_logs'] = 'O gateway antigo, o módulo e outros registros serão rotacionados diariamente, dependendo de suas configurações de retenção no horário especificado.';
$lang['CronTasks.crontask.name.cleanup_logs'] = 'Limpeza de registros';
$lang['CronTasks.crontask.description.deliver_reports'] = 'Os relatórios de contas a receber, de geração de faturas, de obrigações fiscais e outros serão entregues diariamente no horário especificado.';
$lang['CronTasks.crontask.name.deliver_reports'] = 'Entregar relatórios';
$lang['CronTasks.crontask.description.exchange_rates'] = 'As taxas de câmbio serão atualizadas no intervalo especificado. Não é recomendável executá-lo mais de duas vezes por dia, pois há risco de bloqueio.';
$lang['CronTasks.crontask.name.exchange_rates'] = 'Atualizações da taxa de câmbio';
$lang['CronTasks.crontask.description.suspend_services'] = 'Os serviços vencidos serão suspensos diariamente no horário especificado.';
$lang['CronTasks.crontask.name.suspend_services'] = 'Suspender serviços';
$lang['CronTasks.crontask.description.backups_sftp'] = 'Os backups SFTP são programados em Configurações do sistema > Backup > FTP seguro.';
$lang['CronTasks.crontask.name.backups_sftp'] = 'Backups SFTP';
$lang['CronTasks.crontask.description.backups_amazons3'] = 'Os backups do Amazon S3 são agendados em Configurações do sistema > Backup > Amazon S3.';
$lang['CronTasks.crontask.name.backups_amazons3'] = 'Backups do Amazon S3';
$lang['CronTasks.crontask.description.deliver_invoices'] = 'As faturas programadas para entrega serão enviadas no intervalo selecionado.';
$lang['CronTasks.crontask.name.deliver_invoices'] = 'Entregar faturas';
$lang['CronTasks.crontask.description.card_expiration_reminders'] = 'Um lembrete será enviado no dia 15 do mês para os cartões de crédito que expiram naquele mês no horário especificado.';
$lang['CronTasks.crontask.name.card_expiration_reminders'] = 'Lembretes de vencimento do cartão no dia 15 do mês';
$lang['CronTasks.crontask.description.cancel_scheduled_services'] = 'Os serviços com datas de cancelamento futuras definidas são removidos no intervalo selecionado.';
$lang['CronTasks.crontask.name.cancel_scheduled_services'] = 'Cancelar serviços programados';
$lang['CronTasks.crontask.description.provision_pending_services'] = 'Os serviços pendentes pagos são ativados no intervalo selecionado.';
$lang['CronTasks.crontask.name.provision_pending_services'] = 'Provisão paga de serviços pendentes';
$lang['CronTasks.crontask.description.process_renewing_services'] = 'Os serviços de renovação anexados aos módulos são renovados no intervalo selecionado.';
$lang['CronTasks.crontask.name.process_renewing_services'] = 'Renovações de serviços de processo';
$lang['CronTasks.crontask.description.process_service_changes'] = 'As alterações de serviço pagas na fila (por exemplo, upgrades) são processadas no intervalo selecionado.';
$lang['CronTasks.crontask.name.process_service_changes'] = 'Alterações no serviço de processo';
$lang['CronTasks.crontask.description.apply_payments'] = 'Os créditos soltos são aplicados automaticamente às faturas em aberto no intervalo selecionado.';
$lang['CronTasks.crontask.name.apply_payments'] = 'Aplicar pagamentos a faturas em aberto';
$lang['CronTasks.crontask.description.payment_reminders'] = 'Lembretes de pagamento e avisos de atraso são enviados diariamente no horário especificado.';
$lang['CronTasks.crontask.name.payment_reminders'] = 'Lembretes de pagamento';
$lang['CronTasks.crontask.description.autodebit'] = 'As contas de pagamento selecionadas para débito automático serão executadas para pagar as faturas em aberto diariamente no horário especificado.';
$lang['CronTasks.crontask.name.autodebit'] = 'Débito automático';
$lang['CronTasks.crontask.description.apply_invoice_late_fees'] = 'Aplica taxas de atraso a faturas abertas em um número configurado de dias após o vencimento.';
$lang['CronTasks.crontask.name.apply_invoice_late_fees'] = 'Aplicar taxas de atraso na fatura';
$lang['CronTasks.crontask.description.create_invoice'] = 'As faturas recorrentes e os serviços de renovação são faturados por meio dessa tarefa, que é executada uma vez por dia no horário especificado.';
$lang['CronTasks.crontask.name.create_invoice'] = 'Criar fatura';
$lang['CronTasks.task_type.module'] = 'Módulo';
$lang['CronTasks.task_type.plugin'] = 'Plug-in';
$lang['CronTasks.task_type.system'] = 'Sistema';
$lang['CronTasks.!error.type.format'] = 'Tipo de tarefa cron inválido. Deve ser de tempo ou de intervalo.';
$lang['CronTasks.!error.time.format'] = 'A hora está em um formato inválido.';
$lang['CronTasks.!error.interval.format'] = 'O intervalo deve ser um número, representando minutos.';
$lang['CronTasks.!error.enabled.length'] = 'O comprimento habilitado não pode exceder 1 caractere.';
$lang['CronTasks.!error.enabled.format'] = 'habilitado deve ser um número.';
$lang['CronTasks.!error.is_lang.length'] = 'O comprimento de is_lang não pode exceder 1 caractere.';
$lang['CronTasks.!error.is_lang.format'] = 'is_lang deve ser um número.';
$lang['CronTasks.!error.name.empty'] = 'Digite um nome.';
$lang['CronTasks.!error.id.exists'] = 'ID de tarefa cron inválida.';
$lang['CronTasks.!error.run_id.exists'] = 'ID de execução de tarefa cron inválida.';
$lang['CronTasks.!error.dir.length'] = 'O comprimento do diretório não pode exceder 64 caracteres.';
$lang['CronTasks.!error.task_type.format'] = 'Tipo de tarefa inválido. Deve ser módulo, plug-in ou sistema.';
$lang['CronTasks.!error.key.length'] = 'O comprimento da chave da tarefa cron não pode exceder 64 caracteres.';
$lang['CronTasks.!error.key.unique'] = 'A chave da tarefa cron fornecida já está ocupada.';
$lang['CronTasks.crontask.description.delete_expired_password_reset_tokens'] = 'Remove do sistema todos os tokens de redefinição de senha após a data de expiração.';
$lang['CronTasks.crontask.name.delete_expired_password_reset_tokens'] = 'Excluir tokens de redefinição de senha expirados';
$lang['CronTasks.crontask.description.low_balance_notifications'] = 'Envia um aviso a todos os usuários cujos níveis de crédito caíram abaixo do limite configurado.';
$lang['CronTasks.crontask.name.low_balance_notifications'] = 'Notificações de saldo baixo';

