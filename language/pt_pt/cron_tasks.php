<?php
/**
 * Cron Tasks
 *
 * @package blesta
 * @subpackage blesta.language.pt_pt
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['CronTasks.crontask.description.delete_expired_password_reset_tokens'] = 'Remove todos os tokens de redefinição de senha após a data de expiração do sistema.';
$lang['CronTasks.crontask.name.delete_expired_password_reset_tokens'] = 'Eliminar tokens de reposição de palavra-passe expirados';
$lang['CronTasks.crontask.name.license_validation'] = 'Validação da licença';
$lang['CronTasks.crontask.description.transition_quotations'] = 'Marcar as cotações após a data de validade como expiradas';
$lang['CronTasks.crontask.name.transition_quotations'] = 'Citações de transição';
$lang['CronTasks.crontask.description.unsuspend_services'] = 'Os serviços suspensos que tenham sido pagos serão cancelados no intervalo selecionado.';
$lang['CronTasks.crontask.name.unsuspend_services'] = 'Serviços de insuspensão';
$lang['CronTasks.crontask.description.cleanup_logs'] = 'Os registos antigos de gateway, módulo e outros serão rodados diariamente, dependendo das suas definições de retenção na hora especificada.';
$lang['CronTasks.crontask.name.cleanup_logs'] = 'Limpar registos';
$lang['CronTasks.crontask.description.deliver_reports'] = 'Os relatórios de contas a receber, de geração de facturas, de responsabilidade fiscal e outros serão entregues diariamente à hora especificada.';
$lang['CronTasks.crontask.name.deliver_reports'] = 'Entregar relatórios';
$lang['CronTasks.crontask.description.exchange_rates'] = 'As taxas de câmbio serão actualizadas no intervalo especificado. Não é recomendável executar este processo mais do que duas vezes por dia, para não correr o risco de ser bloqueado.';
$lang['CronTasks.crontask.name.exchange_rates'] = 'Actualizações das taxas de câmbio';
$lang['CronTasks.crontask.description.suspend_services'] = 'Os serviços em atraso serão suspensos diariamente à hora especificada.';
$lang['CronTasks.crontask.name.suspend_services'] = 'Suspender serviços';
$lang['CronTasks.crontask.description.backups_sftp'] = 'As cópias de segurança SFTP são agendadas em Definições do sistema &gt; Cópia de segurança &gt; FTP seguro.';
$lang['CronTasks.crontask.name.backups_sftp'] = 'Cópias de segurança SFTP';
$lang['CronTasks.crontask.description.backups_amazons3'] = 'As cópias de segurança do Amazon S3 são agendadas em Definições do sistema &gt; Cópia de segurança &gt; Amazon S3.';
$lang['CronTasks.crontask.name.backups_amazons3'] = 'Cópias de segurança do Amazon S3';
$lang['CronTasks.crontask.description.deliver_invoices'] = 'As facturas que estão programadas para entrega serão enviadas no intervalo selecionado.';
$lang['CronTasks.crontask.name.deliver_invoices'] = 'Entregar facturas';
$lang['CronTasks.crontask.description.card_expiration_reminders'] = 'Será enviado um lembrete no dia 15 do mês para os cartões de crédito que expiram nesse mês na data especificada.';
$lang['CronTasks.crontask.name.card_expiration_reminders'] = 'Lembretes de expiração do cartão 15º dia do mês';
$lang['CronTasks.crontask.description.cancel_scheduled_services'] = 'Os serviços com datas de cancelamento futuras definidas são removidos no intervalo selecionado.';
$lang['CronTasks.crontask.name.cancel_scheduled_services'] = 'Cancelar serviços programados';
$lang['CronTasks.crontask.description.provision_pending_services'] = 'Os serviços pendentes pagos são activados no intervalo selecionado.';
$lang['CronTasks.crontask.name.provision_pending_services'] = 'Provisão Paga Serviços Pendentes';
$lang['CronTasks.crontask.description.process_renewing_services'] = 'Os serviços de renovação que estão ligados aos módulos são renovados no intervalo selecionado.';
$lang['CronTasks.crontask.name.process_renewing_services'] = 'Renovações de serviços de processo';
$lang['CronTasks.crontask.description.process_service_changes'] = 'As alterações de serviço em fila de espera pagas (por exemplo, actualizações) são processadas no intervalo selecionado.';
$lang['CronTasks.crontask.name.process_service_changes'] = 'Alterações no serviço de processos';
$lang['CronTasks.crontask.description.apply_payments'] = 'Os créditos soltos são aplicados automaticamente às facturas em aberto no intervalo selecionado.';
$lang['CronTasks.crontask.name.apply_payments'] = 'Aplicar pagamentos a facturas em aberto';
$lang['CronTasks.crontask.description.payment_reminders'] = 'Os avisos de pagamento e os avisos de atraso são enviados diariamente à hora especificada.';
$lang['CronTasks.crontask.name.payment_reminders'] = 'Lembretes de pagamento';
$lang['CronTasks.crontask.description.autodebit'] = 'As contas de pagamento selecionadas para débito automático serão executadas para pagar as facturas em aberto diariamente à hora especificada.';
$lang['CronTasks.crontask.name.autodebit'] = 'Débito automático';
$lang['CronTasks.crontask.description.apply_invoice_late_fees'] = 'Aplica taxas de atraso a facturas em aberto num número configurado de dias após o vencimento.';
$lang['CronTasks.crontask.name.apply_invoice_late_fees'] = 'Aplicar taxas de atraso de faturação';
$lang['CronTasks.crontask.description.create_invoice'] = 'As facturas recorrentes e os serviços de renovação são facturados através desta tarefa, que é executada uma vez por dia à hora especificada.';
$lang['CronTasks.crontask.name.create_invoice'] = 'Criar fatura';
$lang['CronTasks.task_type.module'] = 'Módulo';
$lang['CronTasks.task_type.plugin'] = 'Plugin';
$lang['CronTasks.task_type.system'] = 'Sistema';
$lang['CronTasks.!error.type.format'] = 'Tipo de tarefa cron inválido. Tem de ser tempo ou intervalo.';
$lang['CronTasks.!error.time.format'] = 'A hora está num formato inválido.';
$lang['CronTasks.!error.interval.format'] = 'O intervalo deve ser um número, representando minutos.';
$lang['CronTasks.!error.enabled.length'] = 'O comprimento ativado não pode exceder 1 carácter.';
$lang['CronTasks.!error.enabled.format'] = 'habilitado deve ser um número.';
$lang['CronTasks.!error.is_lang.length'] = 'O comprimento de is_lang não pode exceder 1 carácter.';
$lang['CronTasks.!error.is_lang.format'] = 'is_lang deve ser um número.';
$lang['CronTasks.!error.name.empty'] = 'Por favor, introduza um nome.';
$lang['CronTasks.!error.id.exists'] = 'ID de tarefa cron inválido.';
$lang['CronTasks.!error.run_id.exists'] = 'ID de execução de tarefa cron inválida.';
$lang['CronTasks.!error.dir.length'] = 'O comprimento do diretório não pode exceder 64 caracteres.';
$lang['CronTasks.!error.task_type.format'] = 'Tipo de tarefa inválido. Deve ser módulo, plugin ou sistema.';
$lang['CronTasks.!error.key.length'] = 'O comprimento da chave da tarefa cron não pode exceder 64 caracteres.';
$lang['CronTasks.!error.key.unique'] = 'A chave da tarefa cron fornecida já está ocupada.';
$lang['CronTasks.crontask.description.low_balance_notifications'] = 'Envia um aviso a todos os utilizadores cujos níveis de crédito tenham descido abaixo do limiar configurado.';
$lang['CronTasks.crontask.name.low_balance_notifications'] = 'Notificações de saldo baixo';

