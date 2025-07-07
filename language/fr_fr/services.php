<?php
/**
 * Services
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Services.!error.key.empty'] = 'La clé du champ de service ne doit pas être vide.';
$lang['Services.!error.key.length'] = 'La clé du champ de service ne doit pas dépasser 32 caractères.';
$lang['Services.!error.value.empty'] = 'La valeur du champ service ne doit pas être vide.';
$lang['Services.!error.encrypted.format'] = 'Format non valide pour encrypted.';
$lang['Services.!error.move.unpaid_invoices'] = 'Le service ne peut pas être transféré à un autre client, car il a des factures impayées.';
$lang['Services.!error.service_id.exists'] = 'ID de service non valide.';
$lang['Services.!error.parent_service_id.exists'] = 'ID de service parent non valide.';
$lang['Services.!error.parent_service_id.parent'] = 'L\'ID du service parent existe déjà en tant qu\'enfant d\'un autre service.';
$lang['Services.!error.package_group_id.exists'] = 'ID de groupe de paquets non valide.';
$lang['Services.!error.id_format.empty'] = 'Aucun format d\'identification n\'est défini pour les factures.';
$lang['Services.!error.id_format.length'] = 'Le format d\'identification des factures ne doit pas dépasser 64 caractères.';
$lang['Services.!error.id_value.valid'] = 'Impossible de déterminer la valeur de l\'ID de la facture.';
$lang['Services.!error.pricing_id.exists'] = 'Veuillez sélectionner un terme valide.';
$lang['Services.!error.pricing_id.overrides'] = 'La durée du forfait ne peut pas être modifiée lorsque des prix dérogatoires sont définis.';
$lang['Services.!error.client_id.exists'] = 'Le client n\'existe pas.';
$lang['Services.!error.client_id.allowed'] = 'Le client ne peut pas accéder à ce paquet.';
$lang['Services.!error.module_row_id.exists'] = 'ID de ligne de module non valide.';
$lang['Services.!error.coupon_id.valid'] = 'Ce coupon ne semble pas être valide.';
$lang['Services.!error.qty.format'] = 'La quantité doit être un nombre.';
$lang['Services.!error.qty.length'] = 'La longueur de la quantité ne doit pas dépasser 10 caractères.';
$lang['Services.!error.qty.available'] = 'Limite de quantité atteinte. Si possible, veuillez sélectionner une quantité inférieure.';
$lang['Services.!error.module_row.valid'] = 'La ligne du module n\'existe pas.';
$lang['Services.!error.module_group.valid'] = 'Le groupe de modules n\'existe pas.';
$lang['Services.!error.override_price.format'] = 'Le prix de remplacement doit être un nombre.';
$lang['Services.!error.override_price.override'] = 'Un prix et une devise doivent être définis pour remplacer le prix actuel.';
$lang['Services.!error.override_currency.format'] = 'Veuillez sélectionner une devise valide.';
$lang['Services.!error.status.format'] = 'Statut non valide.';
$lang['Services.!error.date_added.format'] = 'Le format de la date ajoutée n\'est pas valide.';
$lang['Services.!error.date_renews.format'] = 'Format de date de renouvellement non valide.';
$lang['Services.!error.date_renews.valid'] = 'La date de renouvellement doit être supérieure à la dernière date de renouvellement de %1$s.';
$lang['Services.!error.date_last_renewed.format'] = 'Format de la date du dernier renouvellement invalide.';
$lang['Services.!error.date_suspended.format'] = 'Format de date suspendu non valide.';
$lang['Services.!error.date_canceled.format'] = 'Format de date annulé invalide.';
$lang['Services.!error.use_module.format'] = 'Format de module d\'utilisation non valide.';
$lang['Services.!error.fields[][key].empty'] = 'Une clé est vide des champs de service.';
$lang['Services.!error.fields[][value].empty'] = 'Une valeur est vide dans les champs de service.';
$lang['Services.!error.fields[][encrypted].format'] = 'Le format d\'un champ de service pour le cryptage n\'est pas valide.';
$lang['Services.!error.invoice_method.valid'] = 'Vous devez sélectionner une méthode de facturation valide.';
$lang['Services.!error.pricing_id.valid'] = 'Vous devez sélectionner un terme valide.';
$lang['Services.!error.date_canceled.valid'] = 'Vous devez fixer une date valide pour annuler ce service.';
$lang['Services.!error.configoptions.valid'] = 'L\'une des options configurables sélectionnées n\'est pas valable pour le service.';
$lang['Services.!error.status.valid'] = 'Seuls les services en attente, annulés ou en cours de révision peuvent être supprimés.';
$lang['Services.!error.service_id.has_children'] = 'Ce service ne peut pas être supprimé car il comporte des services enfants. Veuillez annuler ou supprimer ces services et réessayer.';
$lang['Services.!error.prorate.format'] = 'L\'option de proratisation doit être réglée sur "true" ou "false".';
$lang['Services.getStatusTypes.active'] = 'Actif';
$lang['Services.getStatusTypes.canceled'] = 'Annulé';
$lang['Services.getStatusTypes.pending'] = 'En attente';
$lang['Services.getStatusTypes.suspended'] = 'Suspendu';
$lang['Services.getStatusTypes.in_review'] = 'En revue';
$lang['Services.getActions.suspend'] = 'Suspendre';
$lang['Services.getActions.unsuspend'] = 'Mise en suspens';
$lang['Services.getActions.cancel'] = 'Annuler';
$lang['Services.getActions.schedule_cancel'] = 'Annulation du calendrier';
$lang['Services.getActions.change_renew'] = 'Modifier la date de renouvellement';
$lang['Services.getActions.update_coupon'] = 'Mise à jour du coupon';
$lang['Services.getActions.uncancel'] = 'Réactiver';
$lang['Services.!error.uncancel.unsupported'] = 'Ce service ne peut pas être annulé, car le module ne le prend pas en charge.';

