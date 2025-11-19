<?php
/**
 * Cron Tasks
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['CronTasks.!error.key.unique'] = 'La clé de la tâche cron fournie est déjà prise.';
$lang['CronTasks.!error.key.length'] = 'La longueur de la clé de la tâche cron ne doit pas dépasser 64 caractères.';
$lang['CronTasks.!error.task_type.format'] = 'Type de tâche non valide. Il doit s\'agir d\'un module, d\'un plugin ou d\'un système.';
$lang['CronTasks.!error.dir.length'] = 'La longueur du répertoire ne doit pas dépasser 64 caractères.';
$lang['CronTasks.!error.run_id.exists'] = 'ID d\'exécution de la tâche cron non valide.';
$lang['CronTasks.!error.id.exists'] = 'ID de tâche cron non valide.';
$lang['CronTasks.!error.name.empty'] = 'Veuillez saisir un nom.';
$lang['CronTasks.!error.is_lang.format'] = 'is_lang doit être un nombre.';
$lang['CronTasks.!error.is_lang.length'] = 'La longueur de is_lang ne doit pas dépasser 1 caractère.';
$lang['CronTasks.!error.enabled.format'] = 'activé doit être un nombre.';
$lang['CronTasks.!error.enabled.length'] = 'La longueur activée ne doit pas dépasser 1 caractère.';
$lang['CronTasks.!error.interval.format'] = 'L\'intervalle doit être un nombre représentant des minutes.';
$lang['CronTasks.!error.time.format'] = 'Le format de l\'heure n\'est pas valide.';
$lang['CronTasks.!error.type.format'] = 'Type de tâche cron non valide. Il doit s\'agir d\'une heure ou d\'un intervalle.';
$lang['CronTasks.task_type.system'] = 'Système';
$lang['CronTasks.task_type.plugin'] = 'Plugin';
$lang['CronTasks.task_type.module'] = 'Module';
$lang['CronTasks.crontask.name.create_invoice'] = 'Créer une facture';
$lang['CronTasks.crontask.description.create_invoice'] = 'Les factures récurrentes et les renouvellements de services sont facturés par le biais de cette tâche, qui s\'exécute une fois par jour à l\'heure spécifiée.';
$lang['CronTasks.crontask.name.apply_invoice_late_fees'] = 'Appliquer les frais de retard sur les factures';
$lang['CronTasks.crontask.description.apply_invoice_late_fees'] = 'Applique des pénalités de retard aux factures ouvertes un nombre configuré de jours après l\'échéance.';
$lang['CronTasks.crontask.name.autodebit'] = 'Débit automatique';
$lang['CronTasks.crontask.description.autodebit'] = 'Les comptes de paiement sélectionnés pour le débit automatique seront exécutés pour payer les factures ouvertes quotidiennement à l\'heure spécifiée.';
$lang['CronTasks.crontask.name.payment_reminders'] = 'Rappels de paiement';
$lang['CronTasks.crontask.description.payment_reminders'] = 'Les rappels de paiement et les avis de retard sont envoyés quotidiennement à l\'heure indiquée.';
$lang['CronTasks.crontask.name.apply_payments'] = 'Appliquer les paiements aux factures en cours';
$lang['CronTasks.crontask.description.apply_payments'] = 'Les crédits en attente sont appliqués automatiquement aux factures en cours à l\'intervalle sélectionné.';
$lang['CronTasks.crontask.name.process_service_changes'] = 'Modifications du service de traitement';
$lang['CronTasks.crontask.description.process_service_changes'] = 'Les modifications de service payées en file d\'attente (par exemple, les mises à niveau) sont traitées à l\'intervalle sélectionné.';
$lang['CronTasks.crontask.name.process_renewing_services'] = 'Renouvellement des services de signification et de notification';
$lang['CronTasks.crontask.description.process_renewing_services'] = 'Les services de renouvellement attachés aux modules sont renouvelés à l\'intervalle sélectionné.';
$lang['CronTasks.crontask.name.provision_pending_services'] = 'Provision payée Services en attente';
$lang['CronTasks.crontask.description.provision_pending_services'] = 'Les services en attente de paiement sont activés à l\'intervalle sélectionné.';
$lang['CronTasks.crontask.name.cancel_scheduled_services'] = 'Annuler les services programmés';
$lang['CronTasks.crontask.description.cancel_scheduled_services'] = 'Les services pour lesquels des dates d\'annulation futures ont été fixées sont supprimés à l\'intervalle choisi.';
$lang['CronTasks.crontask.name.card_expiration_reminders'] = 'Rappels d\'expiration de la carte 15 du mois';
$lang['CronTasks.crontask.description.card_expiration_reminders'] = 'Un rappel sera envoyé le 15 du mois pour les cartes de crédit expirant ce mois-là à la date indiquée.';
$lang['CronTasks.crontask.name.deliver_invoices'] = 'Délivrer des factures';
$lang['CronTasks.crontask.description.deliver_invoices'] = 'Les factures dont la livraison est programmée seront envoyées à l\'intervalle sélectionné.';
$lang['CronTasks.crontask.name.backups_amazons3'] = 'Sauvegardes Amazon S3';
$lang['CronTasks.crontask.description.backups_amazons3'] = 'Les sauvegardes Amazon S3 sont programmées sous Paramètres du système > Sauvegarde > Amazon S3.';
$lang['CronTasks.crontask.name.backups_sftp'] = 'Sauvegardes SFTP';
$lang['CronTasks.crontask.description.backups_sftp'] = 'Les sauvegardes SFTP sont programmées sous Paramètres système > Sauvegarde > FTP sécurisé.';
$lang['CronTasks.crontask.name.suspend_services'] = 'Suspendre les services';
$lang['CronTasks.crontask.description.suspend_services'] = 'Les services en retard seront suspendus quotidiennement à l\'heure indiquée.';
$lang['CronTasks.crontask.name.exchange_rates'] = 'Mise à jour des taux de change';
$lang['CronTasks.crontask.description.exchange_rates'] = 'Les taux de change seront mis à jour à l\'intervalle spécifié. Il n\'est pas recommandé d\'exécuter cette opération plus de deux fois par jour, au risque d\'être bloqué.';
$lang['CronTasks.crontask.name.deliver_reports'] = 'Fournir des rapports';
$lang['CronTasks.crontask.description.deliver_reports'] = 'Les rapports sur les comptes clients, la génération de factures, l\'assujettissement à l\'impôt et d\'autres rapports seront fournis quotidiennement à l\'heure spécifiée.';
$lang['CronTasks.crontask.name.cleanup_logs'] = 'Nettoyer les journaux';
$lang['CronTasks.crontask.description.cleanup_logs'] = 'Les anciens journaux de passerelle, de module et autres seront mis en rotation quotidiennement en fonction de leurs paramètres de conservation à l\'heure spécifiée.';
$lang['CronTasks.crontask.name.unsuspend_services'] = 'Services de mise en suspens';
$lang['CronTasks.crontask.description.unsuspend_services'] = 'Les services suspendus qui ont été payés seront rétablis à l\'intervalle choisi.';
$lang['CronTasks.crontask.name.transition_quotations'] = 'Citations sur la transition';
$lang['CronTasks.crontask.description.transition_quotations'] = 'Marquer les offres dont la date de validité est dépassée comme expirées';
$lang['CronTasks.crontask.name.license_validation'] = 'Validation de la licence';
$lang['CronTasks.crontask.description.delete_expired_password_reset_tokens'] = 'Supprime du système tous les jetons de réinitialisation de mot de passe dont la date d\'expiration est dépassée.';
$lang['CronTasks.crontask.name.delete_expired_password_reset_tokens'] = 'Supprimer les jetons de réinitialisation de mot de passe expirés';
$lang['CronTasks.crontask.description.low_balance_notifications'] = 'Envoie une notification à tous les utilisateurs dont le niveau de crédit est passé en dessous du seuil configuré.';
$lang['CronTasks.crontask.name.low_balance_notifications'] = 'Notifications de solde faible';

