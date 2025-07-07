<?php
/**
 * Support Manager Tickets
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SupportManagerTickets.!error.code.format'] = 'Le code du billet ne doit contenir que des chiffres.';
$lang['SupportManagerTickets.!error.department_id.exists'] = 'Veuillez sélectionner un département valide.';
$lang['SupportManagerTickets.!error.staff_id.exists'] = 'L\'ID du personnel n\'est pas valide.';
$lang['SupportManagerTickets.!error.contact_id.exists'] = 'Le contact sélectionné pour cette réponse n\'existe pas.';
$lang['SupportManagerTickets.!error.contact_id.valid'] = 'Le contact ne peut pas répondre au ticket sans un client valide.';
$lang['SupportManagerTickets.!error.by_staff_id.exists'] = 'Le membre du personnel désigné pour effectuer la modification n\'existe pas.';
$lang['SupportManagerTickets.!error.service_id.exists'] = 'Le service sélectionné pour ce billet n\'existe pas.';
$lang['SupportManagerTickets.!error.service_id.belongs'] = 'Le service sélectionné n\'est pas valide.';
$lang['SupportManagerTickets.!error.client_id.exists'] = 'ID de client non valide.';
$lang['SupportManagerTickets.!error.client_id.set'] = 'Le billet appartient à un autre client et le client assigné ne peut pas être modifié.';
$lang['SupportManagerTickets.!error.email.format'] = 'Veuillez saisir une adresse électronique valide.';
$lang['SupportManagerTickets.!error.summary.empty'] = 'Veuillez saisir un résumé.';
$lang['SupportManagerTickets.!error.summary.length'] = 'Le résumé ne doit pas dépasser 255 caractères.';
$lang['SupportManagerTickets.!error.priority.format'] = 'Veuillez sélectionner une priorité valide.';
$lang['SupportManagerTickets.!error.status.format'] = 'Veuillez sélectionner un statut valide.';
$lang['SupportManagerTickets.!error.status.trash'] = 'Un billet mis à la poubelle ne peut pas être modifié.';
$lang['SupportManagerTickets.!error.date_added.format'] = 'La date d\'ajout du ticket est dans un format de date non valide.';
$lang['SupportManagerTickets.!error.date_updated.format'] = 'La date de mise à jour du ticket est dans un format de date non valide.';
$lang['SupportManagerTickets.!error.date_closed.format'] = 'Le format de la date de clôture du ticket n\'est pas valide.';
$lang['SupportManagerTickets.!error.ticket_id.exists'] = 'ID du ticket non valide.';
$lang['SupportManagerTickets.!error.type.format'] = 'Veuillez sélectionner un type de réponse valide.';
$lang['SupportManagerTickets.!error.type.new_valid'] = 'Les nouveaux tickets doivent avoir un type de réponse "réponse".';
$lang['SupportManagerTickets.!error.details.empty'] = 'Veuillez saisir quelques détails concernant ce billet.';
$lang['SupportManagerTickets.!error.client_id.attached_to'] = 'La réponse au ticket peut ne pas provenir d\'un autre client.';
$lang['SupportManagerTickets.!error.replies.valid'] = 'Au moins un ID de réponse au ticket n\'est pas valide, ou toutes les réponses ont été sélectionnées. Vous devez laisser au moins une réponse restante.';
$lang['SupportManagerTickets.!error.replies.notes'] = 'Les notes de réponse au ticket ne peuvent pas être divisées en un ticket séparé sans inclure également une réponse au ticket.';
$lang['SupportManagerTickets.!error.tickets.valid'] = 'Au moins un ticket sélectionné est invalide, fermé ou n\'appartient pas au même client que le ticket choisi.';
$lang['SupportManagerTickets.!error.merge_into.itself'] = 'Le ticket ne peut pas être fusionné avec lui-même.';
$lang['SupportManagerTickets.!error.tickets.service_matches'] = 'Au moins un des tickets n\'a pas pu être attribué au service donné car il n\'appartient pas au client associé.';
$lang['SupportManagerTickets.!error.tickets.department_matches'] = 'Au moins un des tickets n\'a pas pu être attribué au service concerné parce qu\'il n\'appartient pas à la même entreprise.';
$lang['SupportManagerTickets.!error.ticket_ids[].exists'] = 'Au moins un numéro de billet n\'est pas valide.';
$lang['SupportManagerTickets.!error.client_id.company'] = 'Au moins un billet n\'appartient pas à la même entreprise que le client en question.';
$lang['SupportManagerTickets.merge.reply'] = 'Ce ticket a été fusionné avec le ticket #%1$s.';
$lang['SupportManagerTickets.priority.emergency'] = 'Urgence';
$lang['SupportManagerTickets.priority.critical'] = 'Critique';
$lang['SupportManagerTickets.priority.high'] = 'Haut';
$lang['SupportManagerTickets.priority.medium'] = 'Moyen';
$lang['SupportManagerTickets.priority.low'] = 'Faible';
$lang['SupportManagerTickets.status.open'] = 'En attente de la réponse du personnel';
$lang['SupportManagerTickets.status.awaiting_reply'] = 'En attente de la réponse du client';
$lang['SupportManagerTickets.status.in_progress'] = 'En cours';
$lang['SupportManagerTickets.status.on_hold'] = 'En attente';
$lang['SupportManagerTickets.status.closed'] = 'Fermé';
$lang['SupportManagerTickets.status.trash'] = 'Poubelle';
$lang['SupportManagerTickets.type.reply'] = 'Répondre';
$lang['SupportManagerTickets.type.note'] = 'Note';
$lang['SupportManagerTickets.type.log'] = 'Journal';
$lang['SupportManagerTickets.log.department_id'] = 'Le département a été modifié en %1$s.';
$lang['SupportManagerTickets.log.summary'] = 'Le résumé a été mis à jour.';
$lang['SupportManagerTickets.log.priority'] = 'La priorité a été modifiée en %1$s.';
$lang['SupportManagerTickets.log.status'] = 'Le statut a été modifié en %1$s.';
$lang['SupportManagerTickets.log.ticket_staff_id'] = 'Affecté à %1$s.';
$lang['SupportManagerTickets.log.unassigned'] = 'Non attribué';
$lang['SupportManagerTickets.reassign_note'] = 'Ce ticket a été réattribué à %1$s. Les réponses précédentes du client ont été réassignées à ce client et peuvent avoir été faites par une autre personne.';
$lang['SupportManagerTickets.!error.priority.valid'] = 'Veuillez sélectionner une priorité valide pour ce département.';
$lang['SupportManagerTickets.!error.contacts.valid'] = 'Au moins un des contacts du billet n\'est pas valide.';
$lang['SupportManagerTickets.!error.recipients.valid'] = 'Au moins un des destinataires du billet n\'est pas valide.';
$lang['SupportManagerTickets.!error.recipients.duplicated'] = 'Au moins un des destinataires du billet est en double.';
$lang['SupportManagerTickets.log.service_id'] = 'Le service concerné a été modifié en ID interne : #%1$s.';
$lang['SupportManagerTickets.!error.custom_fields.empty'] = '"%1$s" est obligatoire et ne peut être vide.';

