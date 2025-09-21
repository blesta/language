<?php
/**
 * Support Manager Tickets
 *
 * @package blesta
 * @subpackage blesta.language.pt_pt
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SupportManagerTickets.reassign_note'] = 'Este ticket foi reatribuído a %1$s. As respostas anteriores do cliente foram reatribuídas a este cliente e podem ter sido feitas por outra pessoa.';
$lang['SupportManagerTickets.log.unassigned'] = 'Não atribuído';
$lang['SupportManagerTickets.log.ticket_staff_id'] = 'Atribuído a %1$s.';
$lang['SupportManagerTickets.log.status'] = 'O estado foi alterado para %1$s.';
$lang['SupportManagerTickets.log.priority'] = 'A prioridade foi alterada para %1$s.';
$lang['SupportManagerTickets.log.summary'] = 'O resumo foi atualizado.';
$lang['SupportManagerTickets.log.department_id'] = 'O departamento foi alterado para %1$s.';
$lang['SupportManagerTickets.type.log'] = 'Registo';
$lang['SupportManagerTickets.type.note'] = 'Observação';
$lang['SupportManagerTickets.type.reply'] = 'Responder';
$lang['SupportManagerTickets.status.trash'] = 'Lixo';
$lang['SupportManagerTickets.status.closed'] = 'Fechado';
$lang['SupportManagerTickets.status.on_hold'] = 'Em espera';
$lang['SupportManagerTickets.status.in_progress'] = 'Em curso';
$lang['SupportManagerTickets.status.awaiting_reply'] = 'À espera de resposta do cliente';
$lang['SupportManagerTickets.status.open'] = 'À espera de resposta da equipa';
$lang['SupportManagerTickets.priority.low'] = 'Baixa';
$lang['SupportManagerTickets.priority.medium'] = 'Médio';
$lang['SupportManagerTickets.priority.high'] = 'Alta';
$lang['SupportManagerTickets.priority.critical'] = 'Crítico';
$lang['SupportManagerTickets.priority.emergency'] = 'Emergência';
$lang['SupportManagerTickets.merge.reply'] = 'Este ticket foi fundido com o ticket #%1$s.';
$lang['SupportManagerTickets.!error.client_id.company'] = 'Pelo menos um ticket não pertence à mesma empresa que o cliente em questão.';
$lang['SupportManagerTickets.!error.ticket_ids[].exists'] = 'Pelo menos uma ID de ticket é inválida.';
$lang['SupportManagerTickets.!error.tickets.department_matches'] = 'Pelo menos um dos tickets não pôde ser atribuído a um determinado departamento porque não pertence à mesma empresa.';
$lang['SupportManagerTickets.!error.tickets.service_matches'] = 'Pelo menos um dos tickets não pôde ser atribuído ao serviço em questão porque não pertence ao cliente associado.';
$lang['SupportManagerTickets.!error.merge_into.itself'] = 'O ticket não pode ser fundido com ele mesmo.';
$lang['SupportManagerTickets.!error.tickets.valid'] = 'Pelo menos um ticket selecionado é inválido, fechado ou não pertence ao mesmo cliente que o ticket escolhido.';
$lang['SupportManagerTickets.!error.replies.notes'] = 'As notas de resposta de ticket não podem ser divididas num ticket separado sem incluir também uma resposta de ticket.';
$lang['SupportManagerTickets.!error.replies.valid'] = 'Pelo menos uma ID de resposta de ticket é inválida ou todas as respostas foram selecionadas. Tem de deixar pelo menos uma resposta restante.';
$lang['SupportManagerTickets.!error.client_id.attached_to'] = 'A resposta do ticket pode não ser de um cliente diferente.';
$lang['SupportManagerTickets.!error.details.empty'] = 'Indique alguns detalhes sobre este ticket.';
$lang['SupportManagerTickets.!error.type.new_valid'] = 'Os novos tickets devem ter um tipo de resposta "resposta".';
$lang['SupportManagerTickets.!error.type.format'] = 'Selecione um tipo de resposta válido.';
$lang['SupportManagerTickets.!error.ticket_id.exists'] = 'ID de ticket inválido.';
$lang['SupportManagerTickets.!error.date_closed.format'] = 'A data de fecho do ticket está num formato de data inválido.';
$lang['SupportManagerTickets.!error.date_updated.format'] = 'A data de atualização do ticket está num formato de data inválido.';
$lang['SupportManagerTickets.!error.date_added.format'] = 'A data de adição do ticket está num formato de data inválido.';
$lang['SupportManagerTickets.!error.status.trash'] = 'Um ticket descartado não pode ser editado.';
$lang['SupportManagerTickets.!error.status.format'] = 'Selecione um estado válido.';
$lang['SupportManagerTickets.!error.priority.format'] = 'Selecione uma prioridade válida.';
$lang['SupportManagerTickets.!error.summary.length'] = 'O resumo não pode ter mais de 255 caracteres.';
$lang['SupportManagerTickets.!error.summary.empty'] = 'Introduza um resumo.';
$lang['SupportManagerTickets.!error.email.format'] = 'Introduza um endereço de email válido.';
$lang['SupportManagerTickets.!error.client_id.set'] = 'O ticket pertence a outro cliente e o cliente atribuído não pode ser alterado.';
$lang['SupportManagerTickets.!error.client_id.exists'] = 'ID de cliente inválido.';
$lang['SupportManagerTickets.!error.service_id.belongs'] = 'O serviço selecionado é inválido.';
$lang['SupportManagerTickets.!error.service_id.exists'] = 'O serviço selecionado para este ticket não existe.';
$lang['SupportManagerTickets.!error.by_staff_id.exists'] = 'O membro da equipa definido para executar a edição não existe.';
$lang['SupportManagerTickets.!error.contact_id.valid'] = 'O contacto não pode responder ao ticket sem um cliente válido.';
$lang['SupportManagerTickets.!error.contact_id.exists'] = 'O contacto selecionado para esta resposta de ticket não existe.';
$lang['SupportManagerTickets.!error.staff_id.exists'] = 'ID de equipa inválido.';
$lang['SupportManagerTickets.!error.department_id.exists'] = 'Selecione um departamento válido.';
$lang['SupportManagerTickets.!error.code.format'] = 'O código do ticket deve conter apenas dígitos.';
$lang['SupportManagerTickets.!error.priority.valid'] = 'Selecione uma prioridade válida para este departamento.';
$lang['SupportManagerTickets.!error.contacts.valid'] = 'Pelo menos um dos contactos do ticket é inválido.';
$lang['SupportManagerTickets.!error.recipients.valid'] = 'Pelo menos um dos destinatários do ticket é inválido.';
$lang['SupportManagerTickets.!error.recipients.duplicated'] = 'Pelo menos um dos destinatários do ticket está duplicado.';
$lang['SupportManagerTickets.log.service_id'] = 'O serviço relacionado foi alterado para a ID interna: #%1$s.';
$lang['SupportManagerTickets.!error.custom_fields.empty'] = '"%1$s" é obrigatório e não pode estar vazio.';
