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

$lang['SupportManagerTickets.!error.priority.valid'] = 'Selecione uma prioridade válida para este departamento.';
$lang['SupportManagerTickets.!error.contacts.valid'] = 'Pelo menos um dos contactos do bilhete é inválido.';
$lang['SupportManagerTickets.!error.recipients.valid'] = 'Pelo menos um dos destinatários dos bilhetes é inválido.';
$lang['SupportManagerTickets.!error.recipients.duplicated'] = 'Pelo menos um dos destinatários dos bilhetes está duplicado.';
$lang['SupportManagerTickets.reassign_note'] = 'Este bilhete foi reatribuído a %1$s. As respostas anteriores do cliente foram reatribuídas a este cliente e podem ter sido efectuadas por outra pessoa.';
$lang['SupportManagerTickets.log.unassigned'] = 'Não atribuído';
$lang['SupportManagerTickets.log.ticket_staff_id'] = 'Atribuído a %1$s.';
$lang['SupportManagerTickets.log.status'] = 'O estado foi alterado para %1$s.';
$lang['SupportManagerTickets.log.priority'] = 'A prioridade foi alterada para %1$s.';
$lang['SupportManagerTickets.log.summary'] = 'O resumo foi atualizado.';
$lang['SupportManagerTickets.log.department_id'] = 'O departamento foi alterado para %1$s.';
$lang['SupportManagerTickets.type.log'] = 'Registo';
$lang['SupportManagerTickets.type.note'] = 'Nota';
$lang['SupportManagerTickets.type.reply'] = 'Responder';
$lang['SupportManagerTickets.status.trash'] = 'Lixo';
$lang['SupportManagerTickets.status.closed'] = 'Fechado';
$lang['SupportManagerTickets.status.on_hold'] = 'Em espera';
$lang['SupportManagerTickets.status.in_progress'] = 'Em curso';
$lang['SupportManagerTickets.status.awaiting_reply'] = 'A aguardar resposta do cliente';
$lang['SupportManagerTickets.status.open'] = 'Aguarda resposta do pessoal';
$lang['SupportManagerTickets.priority.low'] = 'Baixa';
$lang['SupportManagerTickets.priority.medium'] = 'Médio';
$lang['SupportManagerTickets.priority.high'] = 'Elevado';
$lang['SupportManagerTickets.priority.critical'] = 'Crítico';
$lang['SupportManagerTickets.priority.emergency'] = 'Emergência';
$lang['SupportManagerTickets.merge.reply'] = 'Este bilhete foi fundido com o bilhete #%1$s.';
$lang['SupportManagerTickets.!error.client_id.company'] = 'Pelo menos um bilhete não pertence à mesma empresa que o cliente em causa.';
$lang['SupportManagerTickets.!error.ticket_ids[].exists'] = 'Pelo menos uma identificação de bilhete é inválida.';
$lang['SupportManagerTickets.!error.tickets.department_matches'] = 'Pelo menos um dos bilhetes não pôde ser atribuído ao departamento em causa por não pertencer à mesma empresa.';
$lang['SupportManagerTickets.!error.tickets.service_matches'] = 'Pelo menos um dos bilhetes não pôde ser atribuído ao serviço em causa por não pertencer ao cliente associado.';
$lang['SupportManagerTickets.!error.merge_into.itself'] = 'O bilhete não pode ser fundido com ele próprio.';
$lang['SupportManagerTickets.!error.tickets.valid'] = 'Pelo menos um bilhete selecionado é inválido, está fechado ou não pertence ao mesmo cliente que o bilhete escolhido.';
$lang['SupportManagerTickets.!error.replies.notes'] = 'As notas de resposta ao pedido não podem ser divididas num pedido separado sem incluir também uma resposta ao pedido.';
$lang['SupportManagerTickets.!error.replies.valid'] = 'Pelo menos um ID de resposta de bilhete é inválido ou todas as respostas foram selecionadas. É necessário deixar pelo menos uma resposta restante.';
$lang['SupportManagerTickets.!error.client_id.attached_to'] = 'A resposta do bilhete pode não ser de um cliente diferente.';
$lang['SupportManagerTickets.!error.details.empty'] = 'Introduza alguns detalhes sobre este bilhete.';
$lang['SupportManagerTickets.!error.type.new_valid'] = 'Os novos bilhetes têm de ter um tipo de resposta de "resposta".';
$lang['SupportManagerTickets.!error.type.format'] = 'Selecione um tipo de resposta válido.';
$lang['SupportManagerTickets.!error.ticket_id.exists'] = 'ID de bilhete inválido.';
$lang['SupportManagerTickets.!error.date_closed.format'] = 'A data de encerramento do bilhete está num formato de data inválido.';
$lang['SupportManagerTickets.!error.date_updated.format'] = 'A data de atualização do bilhete está num formato de data inválido.';
$lang['SupportManagerTickets.!error.date_added.format'] = 'A data de adição do bilhete está num formato de data inválido.';
$lang['SupportManagerTickets.!error.status.trash'] = 'Um bilhete rejeitado não pode ser editado.';
$lang['SupportManagerTickets.!error.status.format'] = 'Selecione um estado válido.';
$lang['SupportManagerTickets.!error.priority.format'] = 'Selecione uma prioridade válida.';
$lang['SupportManagerTickets.!error.summary.length'] = 'O resumo não pode exceder 255 caracteres.';
$lang['SupportManagerTickets.!error.summary.empty'] = 'Introduzir um resumo.';
$lang['SupportManagerTickets.!error.email.format'] = 'Introduza um endereço de correio eletrónico válido.';
$lang['SupportManagerTickets.!error.client_id.set'] = 'O bilhete pertence a outro cliente e o cliente atribuído não pode ser alterado.';
$lang['SupportManagerTickets.!error.client_id.exists'] = 'ID de cliente inválido.';
$lang['SupportManagerTickets.!error.service_id.belongs'] = 'O serviço selecionado não é válido.';
$lang['SupportManagerTickets.!error.service_id.exists'] = 'O serviço selecionado para este bilhete não existe.';
$lang['SupportManagerTickets.!error.by_staff_id.exists'] = 'O membro do pessoal definido para efetuar a edição não existe.';
$lang['SupportManagerTickets.!error.contact_id.valid'] = 'O contacto não pode responder ao bilhete sem um cliente válido.';
$lang['SupportManagerTickets.!error.contact_id.exists'] = 'O contacto selecionado para esta resposta de bilhete não existe.';
$lang['SupportManagerTickets.!error.staff_id.exists'] = 'ID de pessoal inválido.';
$lang['SupportManagerTickets.!error.department_id.exists'] = 'Selecione um departamento válido.';
$lang['SupportManagerTickets.!error.code.format'] = 'O código do bilhete deve conter apenas dígitos.';
$lang['SupportManagerTickets.!error.custom_fields.empty'] = 'O endereço "%1$s" é obrigatório e não pode estar vazio.';
$lang['SupportManagerTickets.log.service_id'] = 'O serviço relacionado foi alterado para o ID interno: #%1$s.';

