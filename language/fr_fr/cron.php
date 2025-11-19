<?php
/**
 * Cron
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Cron.!error.cron.failed'] = 'L\'enregistrement de Cron a échoué.';
$lang['Cron.!error.task_execution.failed'] = 'Erreur : %1$s %2$s';
$lang['Cron.index.attempt_all'] = 'Tentative d\'exécution de toutes les tâches pour %1$s.';
$lang['Cron.index.completed_all'] = 'Toutes les tâches ont été accomplies.';
$lang['Cron.index.attempt_all_system'] = 'Tentative d\'exécution de toutes les tâches du système.';
$lang['Cron.index.completed_all_system'] = 'Toutes les tâches du système ont été effectuées.';
$lang['Cron.applycredits.attempt'] = 'Tentative d\'application de crédits à des factures ouvertes.';
$lang['Cron.applycredits.completed'] = 'La tâche d\'application des crédits est terminée.';
$lang['Cron.applycredits.apply_failed'] = 'Impossible d\'appliquer les crédits en attente pour le client #%1$s.';
$lang['Cron.applycredits.apply_success'] = 'Application réussie des crédits en attente de la transaction %1$s pour le client #%2$s à la facture #%3$s pour un montant de %4$s.';
$lang['Cron.applycredits.apply_none'] = 'Il n\'y a pas de factures sur lesquelles des crédits peuvent être appliqués.';
$lang['Cron.autodebitinvoices.attempt'] = 'Tentative de débit automatique des factures en cours.';
$lang['Cron.autodebitinvoices.completed'] = 'La tâche de débit automatique des factures est terminée.';
$lang['Cron.autodebitinvoices.charge_attempt'] = 'Tentative de débit automatique du client #%1$s pour toutes les factures ouvertes d\'un montant de %2$s.';
$lang['Cron.autodebitinvoices.charge_failed'] = 'Impossible de traiter le paiement.';
$lang['Cron.autodebitinvoices.charge_success'] = 'Le paiement a été traité avec succès.';
$lang['Cron.cardexpirationreminders.attempt'] = 'Tentative d\'envoi de rappels d\'expiration de cartes.';
$lang['Cron.cardexpirationreminders.completed'] = 'La tâche de rappel de l\'expiration de la carte est terminée.';
$lang['Cron.cardexpirationreminders.failed'] = 'Le rappel d\'expiration pour le contact %1$s %2$s du client #%3$s n\'a pas pu être envoyé.';
$lang['Cron.cardexpirationreminders.success'] = 'Le rappel d\'expiration pour le contact %1$s %2$s du client #%3$s a été envoyé avec succès.';
$lang['Cron.suspendservices.attempt'] = 'Tenter de suspendre les services en souffrance.';
$lang['Cron.suspendservices.completed'] = 'La tâche de suspension des services est terminée.';
$lang['Cron.suspendservices.suspension_reason'] = 'Non-paiement';
$lang['Cron.suspendservices.suspend_error'] = 'Le service #%1$s du client %2$s n\'a pas pu être suspendu.';
$lang['Cron.suspendservices.suspend_success'] = 'Le service #%1$s du client %2$s a été suspendu.';
$lang['Cron.unsuspendservices.attempt'] = 'Tentative d\'annulation des services suspendus payants.';
$lang['Cron.unsuspendservices.completed'] = 'La tâche "unsuspend services" est terminée.';
$lang['Cron.unsuspendservices.unsuspend_error'] = 'Le service #%1$s du client %2$s n\'a pas pu être suspendu.';
$lang['Cron.unsuspendservices.unsuspend_success'] = 'Le service #%1$s du client %2$s a été suspendu.';
$lang['Cron.cancelscheduledservices.attempt'] = 'Tentative d\'annulation des services programmés.';
$lang['Cron.cancelscheduledservices.completed'] = 'La tâche d\'annulation des services programmés est terminée.';
$lang['Cron.cancelscheduledservices.cancel_error'] = 'Le service #%1$s du client #%2$s n\'a pas pu être annulé.';
$lang['Cron.cancelscheduledservices.cancel_success'] = 'Le service #%1$s du client #%2$s a été annulé.';
$lang['Cron.addpaidpendingservices.attempt'] = 'Tentative de mise à disposition de services en attente payés.';
$lang['Cron.addpaidpendingservices.completed'] = 'La tâche de paiement des services en attente est terminée.';
$lang['Cron.addpaidpendingservices.service_error'] = 'Le service en attente #%1$s du client #%2$s n\'a pas pu être activé.';
$lang['Cron.addpaidpendingservices.service_success'] = 'Le service en attente #%1$s du client #%2$s est maintenant actif.';
$lang['Cron.!error.task_filter.exclude_not_array'] = 'Le filtre de tâche "exclude" doit être un tableau.';
$lang['Cron.!error.task_filter.include_not_array'] = 'Le filtre de tâche "include" doit être un tableau.';
$lang['Cron.!error.task_filter.both_include_exclude'] = 'Le filtre de tâche ne peut pas avoir les deux clés "include" et "exclude".';
$lang['Cron.!error.task_filter.invalid_format'] = 'Le filtre de tâche doit être un objet JSON.';
$lang['Cron.!error.task_filter.invalid_json'] = 'JSON non valide dans le paramètre de filtre de tâche : %1$s';

