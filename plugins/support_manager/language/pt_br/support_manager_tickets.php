<?php
/**
 * Support Manager Tickets
 *
 * @package blesta
 * @subpackage blesta.language.pt_br
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SupportManagerTickets.reassign_note'] = 'Este tíquete foi reatribuído a %1$s. As respostas anteriores do cliente foram reatribuídas a esse cliente e podem ter sido feitas por outra pessoa.';
$lang['SupportManagerTickets.log.unassigned'] = 'Não atribuído';
$lang['SupportManagerTickets.log.ticket_staff_id'] = 'Atribuído a %1$s.';
$lang['SupportManagerTickets.log.status'] = 'O status foi alterado para %1$s.';
$lang['SupportManagerTickets.log.priority'] = 'A prioridade foi alterada para %1$s.';
$lang['SupportManagerTickets.log.summary'] = 'O resumo foi atualizado.';
$lang['SupportManagerTickets.log.department_id'] = 'O departamento foi alterado para %1$s.';
$lang['SupportManagerTickets.type.log'] = 'Registro';
$lang['SupportManagerTickets.type.note'] = 'Observação';
$lang['SupportManagerTickets.type.reply'] = 'Responder';
$lang['SupportManagerTickets.status.trash'] = 'Lixo';
$lang['SupportManagerTickets.status.closed'] = 'Fechado';
$lang['SupportManagerTickets.status.on_hold'] = 'Em espera';
$lang['SupportManagerTickets.status.in_progress'] = 'Em andamento';
$lang['SupportManagerTickets.status.awaiting_reply'] = 'Aguardando resposta do cliente';
$lang['SupportManagerTickets.status.open'] = 'Aguardando resposta da equipe';
$lang['SupportManagerTickets.priority.low'] = 'Baixa';
$lang['SupportManagerTickets.priority.medium'] = 'Médio';
$lang['SupportManagerTickets.priority.high'] = 'Alta';
$lang['SupportManagerTickets.priority.critical'] = 'Crítico';
$lang['SupportManagerTickets.priority.emergency'] = 'Emergência';
$lang['SupportManagerTickets.merge.reply'] = 'Este tíquete foi mesclado com o tíquete #%1$s.';
$lang['SupportManagerTickets.!error.client_id.company'] = 'Pelo menos um tíquete não pertence à mesma empresa que o cliente em questão.';
$lang['SupportManagerTickets.!error.ticket_ids[].exists'] = 'Pelo menos uma ID de tíquete é inválida.';
$lang['SupportManagerTickets.!error.tickets.department_matches'] = 'Pelo menos um dos tíquetes não pôde ser atribuído a um determinado departamento porque ele não pertence à mesma empresa.';
$lang['SupportManagerTickets.!error.tickets.service_matches'] = 'Pelo menos um dos tíquetes não pôde ser atribuído ao serviço em questão porque não pertence ao cliente associado.';
$lang['SupportManagerTickets.!error.merge_into.itself'] = 'O tíquete não pode ser mesclado com ele mesmo.';
$lang['SupportManagerTickets.!error.tickets.valid'] = 'Pelo menos um tíquete selecionado é inválido, fechado ou não pertence ao mesmo cliente que o tíquete escolhido.';
$lang['SupportManagerTickets.!error.replies.notes'] = 'As notas de resposta de tíquete não podem ser divididas em um tíquete separado sem incluir também uma resposta de tíquete.';
$lang['SupportManagerTickets.!error.replies.valid'] = 'Pelo menos uma ID de resposta de tíquete é inválida ou todas as respostas foram selecionadas. Você deve deixar pelo menos uma resposta restante.';
$lang['SupportManagerTickets.!error.client_id.attached_to'] = 'A resposta do tíquete pode não ser de um cliente diferente.';
$lang['SupportManagerTickets.!error.details.empty'] = 'Informe alguns detalhes sobre esse tíquete.';
$lang['SupportManagerTickets.!error.type.new_valid'] = 'Os novos tíquetes devem ter um tipo de resposta "resposta".';
$lang['SupportManagerTickets.!error.type.format'] = 'Selecione um tipo de resposta válido.';
$lang['SupportManagerTickets.!error.ticket_id.exists'] = 'ID de tíquete inválido.';
$lang['SupportManagerTickets.!error.date_closed.format'] = 'A data de fechamento do tíquete está em um formato de data inválido.';
$lang['SupportManagerTickets.!error.date_updated.format'] = 'A data de atualização do tíquete está em um formato de data inválido.';
$lang['SupportManagerTickets.!error.date_added.format'] = 'A data de adição do tíquete está em um formato de data inválido.';
$lang['SupportManagerTickets.!error.status.trash'] = 'Um tíquete descartado não pode ser editado.';
$lang['SupportManagerTickets.!error.status.format'] = 'Selecione um status válido.';
$lang['SupportManagerTickets.!error.priority.format'] = 'Selecione uma prioridade válida.';
$lang['SupportManagerTickets.!error.summary.length'] = 'O resumo não pode ter mais de 255 caracteres.';
$lang['SupportManagerTickets.!error.summary.empty'] = 'Digite um resumo.';
$lang['SupportManagerTickets.!error.email.format'] = 'Digite um endereço de e-mail válido.';
$lang['SupportManagerTickets.!error.client_id.set'] = 'O tíquete pertence a outro cliente e o cliente atribuído não pode ser alterado.';
$lang['SupportManagerTickets.!error.client_id.exists'] = 'ID de cliente inválido.';
$lang['SupportManagerTickets.!error.service_id.belongs'] = 'O serviço selecionado é inválido.';
$lang['SupportManagerTickets.!error.service_id.exists'] = 'O serviço selecionado para esse tíquete não existe.';
$lang['SupportManagerTickets.!error.by_staff_id.exists'] = 'O membro da equipe definido para executar a edição não existe.';
$lang['SupportManagerTickets.!error.contact_id.valid'] = 'O contato não pode responder ao tíquete sem um cliente válido.';
$lang['SupportManagerTickets.!error.contact_id.exists'] = 'O contato selecionado para essa resposta de tíquete não existe.';
$lang['SupportManagerTickets.!error.staff_id.exists'] = 'ID de equipe inválido.';
$lang['SupportManagerTickets.!error.department_id.exists'] = 'Selecione um departamento válido.';
$lang['SupportManagerTickets.!error.code.format'] = 'O código do tíquete deve conter apenas dígitos.';

