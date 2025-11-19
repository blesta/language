<?php
/**
 * Support Manager Departments
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SupportManagerDepartments.!error.company_id.exists'] = 'ID d\'entreprise non valide.';
$lang['SupportManagerDepartments.!error.name.empty'] = 'Veuillez saisir un nom pour ce service.';
$lang['SupportManagerDepartments.!error.description.empty'] = 'Veuillez saisir une description.';
$lang['SupportManagerDepartments.!error.email.format'] = 'Veuillez saisir une adresse électronique valide.';
$lang['SupportManagerDepartments.!error.method.format'] = 'Type de méthode non valide.';
$lang['SupportManagerDepartments.!error.method.imap'] = 'L\'extension PHP IMAP est nécessaire pour télécharger des messages via POP3 ou IMAP.';
$lang['SupportManagerDepartments.!error.method.mailparse'] = 'L\'extension PHP Mailparse PECL est nécessaire pour l\'analyse des tickets de courrier électronique.';
$lang['SupportManagerDepartments.!error.default_priority.format'] = 'Type de priorité par défaut non valide.';
$lang['SupportManagerDepartments.!error.host.format'] = 'Veuillez saisir un nom d\'hôte valide.';
$lang['SupportManagerDepartments.!error.host.length'] = 'Le nom d\'hôte ne doit pas comporter plus de 128 caractères.';
$lang['SupportManagerDepartments.!error.user.format'] = 'Veuillez saisir un nom d\'utilisateur.';
$lang['SupportManagerDepartments.!error.user.length'] = 'Le nom de l\'utilisateur ne doit pas dépasser 64 caractères.';
$lang['SupportManagerDepartments.!error.password.format'] = 'Veuillez saisir un mot de passe.';
$lang['SupportManagerDepartments.!error.port.format'] = 'Veuillez saisir un numéro de port.';
$lang['SupportManagerDepartments.!error.port.length'] = 'La longueur du port ne doit pas dépasser 6 chiffres.';
$lang['SupportManagerDepartments.!error.service.format'] = 'Veuillez sélectionner un type de service valide.';
$lang['SupportManagerDepartments.!error.security.format'] = 'Veuillez sélectionner un type de sécurité valide.';
$lang['SupportManagerDepartments.!error.mark_messages.format'] = 'Veuillez sélectionner un type de message valide pour marquer les messages.';
$lang['SupportManagerDepartments.!error.mark_messages.valid'] = 'Les messages utilisant POP3 peuvent uniquement être marqués comme supprimés.';
$lang['SupportManagerDepartments.!error.clients_only.format'] = 'L\'autorisation donnée aux clients d\'ouvrir des tickets ou d\'y répondre doit être fixée à 0 ou 1.';
$lang['SupportManagerDepartments.!error.require_captcha.format'] = 'L\'exigence d\'une vérification humaine doit être fixée à 0 ou 1.';
$lang['SupportManagerDepartments.!error.override_from_email.format'] = 'La valeur 0 ou 1 doit être attribuée à l\'autorisation d\'utiliser l\'adresse électronique de ce département comme adresse de provenance dans les modèles de courrier électronique.';
$lang['SupportManagerDepartments.!error.send_ticket_received.format'] = 'La valeur 0 ou 1 doit être attribuée à l\'envoi d\'e-mails de confirmation de ticket pour ce département.';
$lang['SupportManagerDepartments.!error.close_ticket_interval.format'] = 'Veuillez sélectionner un intervalle de billets de fermeture valide.';
$lang['SupportManagerDepartments.!error.delete_ticket_interval.format'] = 'Veuillez sélectionner un intervalle de suppression valide.';
$lang['SupportManagerDepartments.!error.reminder_ticket_interval.format'] = 'Veuillez sélectionner un intervalle de rappel valide.';
$lang['SupportManagerDepartments.!error.reminder_ticket_status.format'] = 'Veuillez sélectionner un statut de rappel de billet valide.';
$lang['SupportManagerDepartments.!error.reminder_ticket_priority.format'] = 'Veuillez sélectionner une priorité de rappel de billet valide.';
$lang['SupportManagerDepartments.!error.include_attachments.format'] = 'La valeur 0 ou 1 doit être attribuée à l\'option d\'inclusion des pièces jointes au ticket.';
$lang['SupportManagerDepartments.!error.attachment_types.length'] = 'La liste des types de pièces jointes ne doit pas dépasser 255 caractères.';
$lang['SupportManagerDepartments.!error.max_attachment_size.format'] = 'La taille maximale de la pièce jointe doit être une valeur numérique.';
$lang['SupportManagerDepartments.!error.response_id.format'] = 'Veuillez sélectionner une réponse valide pour la fermeture automatique.';
$lang['SupportManagerDepartments.!error.status.format'] = 'Type d\'état non valide.';
$lang['SupportManagerDepartments.!error.department_id.exists'] = 'ID de département non valide.';
$lang['SupportManagerDepartments.!error.label.empty'] = 'Veuillez saisir une étiquette.';
$lang['SupportManagerDepartments.!error.visibility.format'] = 'Veuillez sélectionner un statut de visibilité valide.';
$lang['SupportManagerDepartments.!error.type.format'] = 'Veuillez sélectionner un type de champ valide.';
$lang['SupportManagerDepartments.!error.client_add.format'] = 'L\'autorisation pour le client d\'ajouter doit être fixée à 0 ou 1.';
$lang['SupportManagerDepartments.!error.encrypted.format'] = 'La valeur 0 ou 1 doit être attribuée à la question de savoir s\'il faut crypter les données du champ.';
$lang['SupportManagerDepartments.!error.auto_delete.format'] = 'La valeur 0 ou 1 doit être attribuée à l\'option de suppression automatique des données du champ après la fermeture d\'un ticket.';
$lang['SupportManagerDepartments.!error.department_id.has_tickets'] = 'Le département n\'a pas pu être supprimé car des tickets lui sont actuellement attribués.';
$lang['SupportManagerDepartments.methods.none'] = 'Aucun';
$lang['SupportManagerDepartments.methods.pipe'] = 'Tuyauterie';
$lang['SupportManagerDepartments.methods.pop3'] = 'POP3';
$lang['SupportManagerDepartments.methods.imap'] = 'IMAP';
$lang['SupportManagerDepartments.statuses.hidden'] = 'Caché';
$lang['SupportManagerDepartments.statuses.visible'] = 'Visible';
$lang['SupportManagerDepartments.priorities.emergency'] = 'Urgence';
$lang['SupportManagerDepartments.priorities.critical'] = 'Critique';
$lang['SupportManagerDepartments.priorities.high'] = 'Haut';
$lang['SupportManagerDepartments.priorities.medium'] = 'Moyen';
$lang['SupportManagerDepartments.priorities.low'] = 'Faible';
$lang['SupportManagerDepartments.security_types.none'] = 'Aucun';
$lang['SupportManagerDepartments.security_types.ssl'] = 'SSL';
$lang['SupportManagerDepartments.security_types.tls'] = 'TLS';
$lang['SupportManagerDepartments.message_types.read'] = 'Lire';
$lang['SupportManagerDepartments.message_types.deleted'] = 'Supprimé';
$lang['SupportManagerDepartments.field_types.checkbox'] = 'Case à cocher';
$lang['SupportManagerDepartments.field_types.radio'] = 'Radio';
$lang['SupportManagerDepartments.field_types.select'] = 'Déroulant';
$lang['SupportManagerDepartments.field_types.quantity'] = 'Quantité';
$lang['SupportManagerDepartments.field_types.text'] = 'Texte';
$lang['SupportManagerDepartments.field_types.textarea'] = 'Zone de texte';
$lang['SupportManagerDepartments.field_types.password'] = 'Mot de passe';
$lang['SupportManagerDepartments.visibility_options.client'] = 'Client et personnel';
$lang['SupportManagerDepartments.visibility_options.staff'] = 'Réservé au personnel';
$lang['SupportManagerDepartments.ticket_intervals.day'] = '1 jour';
$lang['SupportManagerDepartments.ticket_intervals.days'] = '%1$s Days';
$lang['SupportManagerDepartments.reminder_intervals.hour'] = '1 heure';
$lang['SupportManagerDepartments.reminder_intervals.hours'] = 'Heures %1$s';
$lang['SupportManagerDepartments.reminder_intervals.minutes'] = '%1$s Minutes';
$lang['SupportManagerDepartments.!error.priorities[].empty'] = 'Sélectionnez au moins une priorité.';
$lang['SupportManagerDepartments.!error.priorities[].format'] = 'Une ou plusieurs priorités ne sont pas valides.';
$lang['SupportManagerDepartments.visibility_options.client_only'] = 'Client uniquement';
$lang['SupportManagerDepartments.field_types.emergency'] = 'Passage à l\'état d\'urgence';
$lang['SupportManagerDepartments.!error.required.format'] = 'Si l\'on veut que le fichier soit réglé sur 0 ou 1.';
$lang['SupportManagerDepartments.providers.microsoft'] = 'Microsoft';
$lang['SupportManagerDepartments.providers.google'] = 'Google';
$lang['SupportManagerDepartments.methods.oauth2'] = 'OAuth 2.0';

