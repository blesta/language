<?php
/**
 * Admin Departments
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminDepartments.!success.department_created'] = 'Le département %1$s a été créé avec succès.';
$lang['AdminDepartments.!success.department_updated'] = 'Le département %1$s a été mis à jour avec succès.';
$lang['AdminDepartments.!success.department_deleted'] = 'Le département %1$s a été supprimé avec succès.';
$lang['AdminDepartments.index.page_title'] = 'Gestionnaire d\'appui > Départements';
$lang['AdminDepartments.add.page_title'] = 'Support Manager > Départements > Ajouter un département';
$lang['AdminDepartments.edit.page_title'] = 'Support Manager > Départements > Modifier le département';
$lang['AdminDepartments.index.categorylink_adddepartment'] = 'Ajouter un département';
$lang['AdminDepartments.index.boxtitle_departments'] = 'Départements';
$lang['AdminDepartments.index.heading_name'] = 'Nom';
$lang['AdminDepartments.index.heading_description'] = 'Description';
$lang['AdminDepartments.index.heading_email'] = 'Courriel';
$lang['AdminDepartments.index.heading_assigned_staff'] = 'Personnel affecté';
$lang['AdminDepartments.index.heading_default_priority'] = 'Priorité par défaut';
$lang['AdminDepartments.index.heading_options'] = 'Options';
$lang['AdminDepartments.index.option_edit'] = 'Editer';
$lang['AdminDepartments.index.option_delete'] = 'Supprimer';
$lang['AdminDepartments.index.confirm_delete'] = 'Les départements auxquels des tickets ont été attribués ne peuvent pas être supprimés tant que tous les tickets n\'ont pas été réattribués à un autre département. Êtes-vous sûr de vouloir supprimer ce département ?';
$lang['AdminDepartments.index.no_results'] = 'Il n\'y a pas de départements.';
$lang['AdminDepartments.assigned_staff.heading_assigned_staff'] = 'Personnel affecté';
$lang['AdminDepartments.assigned_staff.heading_staff'] = 'Personnel';
$lang['AdminDepartments.assigned_staff.no_results'] = 'Il n\'y a pas de personnel affecté à ce service.';
$lang['AdminDepartments.!tooltip.piping_config'] = 'Définissez votre chemin d\'accès à la tuyauterie comme indiqué, mais assurez-vous d\'utiliser le chemin d\'accès correct à PHP sur votre serveur. Assurez-vous que pipe.php est exécutable. Vous devrez peut-être aussi éditer pipe.php pour inclure un hashbang sur la ligne 1 qui ressemblerait à quelque chose comme : #!/usr/bin/php';
$lang['AdminDepartments.!tooltip.close_ticket_interval'] = 'Tous les tickets dont le statut est différent de %1$s et dont la dernière réponse provient d\'un membre du personnel seront automatiquement fermés si aucune réponse n\'a été apportée dans le délai sélectionné.';
$lang['AdminDepartments.!tooltip.delete_ticket_interval'] = 'Tous les tickets ayant un statut de %1$s seront automatiquement supprimés après être restés dans ce statut pendant la durée sélectionnée.';
$lang['AdminDepartments.!tooltip.reminder_ticket_interval'] = 'Pour tous les tickets dont le statut est différent de %1$s, un rappel sera envoyé à l\'autre partie si aucune réponse n\'a été apportée dans le délai sélectionné.';
$lang['AdminDepartments.!tooltip.send_ticket_received'] = 'Décocher cette case indique que les nouveaux tickets créés pour ce département (par email ou par le client) n\'enverront pas d\'avis de réponse au client ou au personnel par le biais de l\'email Ticket reçu ou Ticket du personnel mis à jour, respectivement.';
$lang['AdminDepartments.!tooltip.automatic_transition'] = 'Change le statut en %1$s lorsqu\'un membre du personnel répond.';
$lang['AdminDepartments.!tooltip.include_attachments'] = 'Les serveurs de messagerie ont des limites concernant la taille des pièces jointes et les types de fichiers. Pour réduire le risque de rejet du courrier électronique, veuillez indiquer les limites de taille et de type des pièces jointes. Pour vous assurer que le client est informé des pièces jointes qui n\'ont pas été incluses, utilisez la balise {ticket.reply_has_attachments} dans les avis de ticket.';
$lang['AdminDepartments.!tooltip.attachment_types'] = 'Liste des extensions prises en charge, séparées par une virgule (par exemple zip,jpg,png).';
$lang['AdminDepartments.!tooltip.max_attachment_size'] = 'Taille maximale de la pièce jointe à inclure en Mo.';
$lang['AdminDepartments.!tooltip.client_add'] = 'Le client peut ou non soumettre le champ. Si la réponse est fausse, le client ne pourra que lire le champ.';
$lang['AdminDepartments.!tooltip.auto_delete'] = 'Si le ticket est fermé, les données du champ seront automatiquement supprimées. Les données ne seront plus visibles pour le personnel.';
$lang['AdminDepartments.!text.add_response'] = 'Définir une réponse prédéfinie pour la fermeture automatique';
$lang['AdminDepartments.!text.no_selected_response'] = 'Aucune réponse de fermeture automatique n\'a été sélectionnée.';
$lang['AdminDepartments.!text.remove_response'] = 'Retirer';
$lang['AdminDepartments.add.boxtitle_adddepartment'] = 'Ajouter un département';
$lang['AdminDepartments.add.tab_general'] = 'Général';
$lang['AdminDepartments.add.tab_custom_fields'] = 'Champs personnalisés';
$lang['AdminDepartments.add.field_name'] = 'Nom';
$lang['AdminDepartments.add.field_description'] = 'Description';
$lang['AdminDepartments.add.field_clients_only'] = 'Autoriser uniquement les clients à ouvrir des tickets ou à y répondre';
$lang['AdminDepartments.add.field_require_captcha'] = 'Exiger une vérification humaine pour les utilisateurs non authentifiés';
$lang['AdminDepartments.add.field_email'] = 'Courriel';
$lang['AdminDepartments.add.field_override_from_email'] = 'Remplacer l\'adresse de provenance définie dans les modèles de courrier électronique par l\'adresse de courrier électronique définie pour ce département.';
$lang['AdminDepartments.add.field_send_ticket_received'] = 'Envoi d\'e-mails de réponse automatique pour les nouveaux billets';
$lang['AdminDepartments.add.field_automatic_transition'] = 'Changement automatique du statut du ticket en cas de réponse de l\'administrateur';
$lang['AdminDepartments.add.field_method'] = 'Traitement des courriels';
$lang['AdminDepartments.add.field_piping_config'] = 'Configuration de la tuyauterie';
$lang['AdminDepartments.add.field_default_priority'] = 'Priorité par défaut';
$lang['AdminDepartments.add.field_include_attachments'] = 'Inclure des pièces jointes dans les avis de contravention';
$lang['AdminDepartments.add.field_attachment_types'] = 'Types de pièces jointes prises en charge';
$lang['AdminDepartments.add.field_max_attachment_size'] = 'Taille maximale de la pièce jointe';
$lang['AdminDepartments.add.field_security'] = 'Sécurité';
$lang['AdminDepartments.add.field_box_name'] = 'Nom de la boîte';
$lang['AdminDepartments.add.field_mark_messages'] = 'Marquer les messages comme';
$lang['AdminDepartments.add.field_host'] = 'Hôte';
$lang['AdminDepartments.add.field_user'] = 'Utilisateur';
$lang['AdminDepartments.add.field_pass'] = 'Passez';
$lang['AdminDepartments.add.field_port'] = 'Port';
$lang['AdminDepartments.add.field_close_ticket_interval'] = 'Fermer automatiquement les tickets';
$lang['AdminDepartments.add.field_delete_ticket_interval'] = 'Supprimer automatiquement les tickets';
$lang['AdminDepartments.add.field_reminder_ticket_interval'] = 'Envoi automatique de rappels de billets';
$lang['AdminDepartments.add.field_reminder_ticket_status'] = 'Envoyer des rappels aux tickets avec statut';
$lang['AdminDepartments.add.field_reminder_ticket_priority'] = 'Envoyer des rappels aux tickets prioritaires';
$lang['AdminDepartments.add.field_response_id'] = 'Réponse au ticket de fermeture automatique';
$lang['AdminDepartments.add.field_status'] = 'Statut';
$lang['AdminDepartments.add.field_addsubmit'] = 'Ajouter un département';
$lang['AdminDepartments.add.field_add_field'] = 'Ajouter un champ';
$lang['AdminDepartments.add.heading_label'] = 'Étiquette';
$lang['AdminDepartments.add.heading_description'] = 'Description';
$lang['AdminDepartments.add.heading_visibility'] = 'Visibilité';
$lang['AdminDepartments.add.heading_type'] = 'Type';
$lang['AdminDepartments.add.heading_min'] = 'Min';
$lang['AdminDepartments.add.heading_max'] = 'Max';
$lang['AdminDepartments.add.heading_step'] = 'Étape';
$lang['AdminDepartments.add.heading_client_add'] = 'Le client peut ajouter';
$lang['AdminDepartments.add.heading_encrypted'] = 'Chiffré';
$lang['AdminDepartments.add.heading_auto_delete'] = 'Suppression automatique';
$lang['AdminDepartments.add.heading_options'] = 'Options';
$lang['AdminDepartments.add.heading_name'] = 'Nom';
$lang['AdminDepartments.add.heading_value'] = 'Valeur';
$lang['AdminDepartments.add.heading_default'] = 'Défaut';
$lang['AdminDepartments.add.text_delete'] = 'Supprimer';
$lang['AdminDepartments.add.text_add'] = 'Ajouter';
$lang['AdminDepartments.edit.boxtitle_adddepartment'] = 'Département de l\'édition';
$lang['AdminDepartments.edit.tab_general'] = 'Général';
$lang['AdminDepartments.edit.tab_custom_fields'] = 'Champs personnalisés';
$lang['AdminDepartments.edit.field_name'] = 'Nom';
$lang['AdminDepartments.edit.field_description'] = 'Description';
$lang['AdminDepartments.edit.field_clients_only'] = 'Autoriser uniquement les clients à ouvrir des tickets ou à y répondre';
$lang['AdminDepartments.edit.field_require_captcha'] = 'Exiger une vérification humaine pour les utilisateurs non authentifiés';
$lang['AdminDepartments.edit.field_email'] = 'Courriel';
$lang['AdminDepartments.edit.field_override_from_email'] = 'Remplacer l\'adresse de provenance définie dans les modèles de courrier électronique par l\'adresse de courrier électronique définie pour ce département.';
$lang['AdminDepartments.edit.field_send_ticket_received'] = 'Envoi d\'e-mails de réponse automatique pour les nouveaux billets';
$lang['AdminDepartments.edit.field_automatic_transition'] = 'Changement automatique du statut du ticket en cas de réponse de l\'administrateur';
$lang['AdminDepartments.edit.field_method'] = 'Traitement des courriels';
$lang['AdminDepartments.edit.field_piping_config'] = 'Configuration de la tuyauterie';
$lang['AdminDepartments.edit.field_default_priority'] = 'Priorité par défaut';
$lang['AdminDepartments.edit.field_include_attachments'] = 'Inclure des pièces jointes dans les avis de contravention';
$lang['AdminDepartments.edit.field_attachment_types'] = 'Types de pièces jointes prises en charge';
$lang['AdminDepartments.edit.field_max_attachment_size'] = 'Taille maximale de la pièce jointe';
$lang['AdminDepartments.edit.field_security'] = 'Sécurité';
$lang['AdminDepartments.edit.field_box_name'] = 'Nom de la boîte';
$lang['AdminDepartments.edit.field_mark_messages'] = 'Marquer les messages comme';
$lang['AdminDepartments.edit.field_host'] = 'Hôte';
$lang['AdminDepartments.edit.field_user'] = 'Utilisateur';
$lang['AdminDepartments.edit.field_pass'] = 'Passez';
$lang['AdminDepartments.edit.field_port'] = 'Port';
$lang['AdminDepartments.edit.field_close_ticket_interval'] = 'Fermer automatiquement les tickets';
$lang['AdminDepartments.edit.field_delete_ticket_interval'] = 'Supprimer automatiquement les tickets';
$lang['AdminDepartments.edit.field_reminder_ticket_interval'] = 'Envoi automatique de rappels de billets';
$lang['AdminDepartments.edit.field_reminder_ticket_status'] = 'Envoyer des rappels aux tickets avec statut';
$lang['AdminDepartments.edit.field_reminder_ticket_priority'] = 'Envoyer des rappels aux tickets prioritaires';
$lang['AdminDepartments.edit.field_response_id'] = 'Réponse au ticket de fermeture automatique';
$lang['AdminDepartments.edit.field_status'] = 'Statut';
$lang['AdminDepartments.edit.field_addsubmit'] = 'Département de l\'édition';
$lang['AdminDepartments.edit.field_add_field'] = 'Ajouter un champ';
$lang['AdminDepartments.edit.confirm_field_remove'] = 'Êtes-vous sûr de vouloir supprimer ce champ personnalisé ? Toutes les données associées à ce champ seront supprimées. Si vous souhaitez masquer ce champ et conserver les données, modifiez sa visibilité pour qu\'il soit réservé au personnel.';
$lang['AdminDepartments.edit.no_results'] = 'Il n\'y a pas de champs personnalisés dans ce département.';
$lang['AdminDepartments.edit.heading_label'] = 'Étiquette';
$lang['AdminDepartments.edit.heading_description'] = 'Description';
$lang['AdminDepartments.edit.heading_visibility'] = 'Visibilité';
$lang['AdminDepartments.edit.heading_type'] = 'Type';
$lang['AdminDepartments.edit.heading_min'] = 'Min';
$lang['AdminDepartments.edit.heading_max'] = 'Max';
$lang['AdminDepartments.edit.heading_step'] = 'Étape';
$lang['AdminDepartments.edit.heading_client_add'] = 'Le client peut ajouter';
$lang['AdminDepartments.edit.heading_encrypted'] = 'Chiffré';
$lang['AdminDepartments.edit.heading_auto_delete'] = 'Suppression automatique';
$lang['AdminDepartments.edit.heading_options'] = 'Options';
$lang['AdminDepartments.edit.heading_name'] = 'Nom';
$lang['AdminDepartments.edit.heading_value'] = 'Valeur';
$lang['AdminDepartments.edit.heading_default'] = 'Défaut';
$lang['AdminDepartments.edit.text_delete'] = 'Supprimer';
$lang['AdminDepartments.edit.text_add'] = 'Ajouter';

