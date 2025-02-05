<?php
/**
 * Invoices
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Invoices.getPricingPeriods.day'] = 'Jour';
$lang['Invoices.getPricingPeriods.week'] = 'Semaine';
$lang['Invoices.getPricingPeriods.month'] = 'Mois';
$lang['Invoices.getPricingPeriods.year'] = 'Année';
$lang['Invoices.getDeliveryMethods.email'] = 'Courriel';
$lang['Invoices.getDeliveryMethods.paper'] = 'Papier';
$lang['Invoices.getDeliveryMethods.interfax'] = 'InterFax';
$lang['Invoices.getDeliveryMethods.postalmethods'] = 'Méthodes postales';
$lang['Invoices.!note_private.service_cancel_date'] = 'Service #%1$s annulé %2$s.';
$lang['Invoices.!note_private.removed_lines'] = 'Suppression de postes :';
$lang['Invoices.!note_private.line_item'] = '- %1$s @ %2$s : %3$s';
$lang['Invoices.!line_item.service_renew_description'] = '%5$s%1$s - %2$s (%3$s - %4$s)';
$lang['Invoices.!line_item.service_cancel_fee_description'] = '%1$s - %2$s Frais d\'annulation';
$lang['Invoices.!line_item.service_setup_fee_description'] = '%1$s - %2$s Frais de mise en place';
$lang['Invoices.!line_item.service_option_renew_description'] = '↳ %1$s - %2$s';
$lang['Invoices.!line_item.service_option_setup_fee_description'] = '↳ %1$s - %2$s Frais de mise en place';
$lang['Invoices.!line_item.service_prorated_upgrade_description'] = 'Mise à niveau au prorata de %1$s à %2$s - %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_prorated_upgrade_description_onetime'] = 'Mise à niveau au prorata de %1$s à %2$s - %3$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade'] = '↳ Mise à niveau proportionnelle de %1$s de %2$s à %3$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_date'] = '↳ Mise à niveau proportionnelle de %1$s de %2$s à %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_onetime'] = '↳ Mise à niveau proportionnelle de %1$s de %2$s à %3$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text'] = '↳ Mise à niveau au prorata de %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_date'] = '↳ Mise à niveau au prorata de %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_onetime'] = '↳ Mise à niveau au prorata de %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty'] = '↳ Mise à niveau proportionnelle de %1$s de %2$sx %3$s à %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_date'] = '↳ Mise à niveau proportionnelle de %1$s de %2$sx %3$s à %4$sx %5$s (%6$s - %7$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_onetime'] = '↳ Mise à niveau proportionnelle de %1$s de %2$sx %3$s à %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_addition'] = '↳ Addition au prorata de %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_addition_date'] = '↳ Addition au prorata de %1$s %2$s (%3$s - %4$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_onetime'] = '↳ Addition au prorata de %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text'] = '↳ Addition au prorata de %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_date'] = '↳ Addition au prorata de %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_text_onetime'] = '↳ Addition au prorata de %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_qty'] = '↳ Addition au prorata de %1$s %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_date'] = '↳ Addition au prorata de %1$s %2$sx %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_onetime'] = '↳ Addition au prorata de %1$s %2$sx %3$s';
$lang['Invoices.!line_item.prorated_credit'] = 'Crédit proratisé';
$lang['Invoices.!line_item.coupon_line_item_description_amount'] = 'Coupon %1$s';
$lang['Invoices.!line_item.coupon_line_item_description_percent'] = 'Coupon %1$s - %2$s%%.';
$lang['Invoices.!line_item.recurring_renew_description'] = '%1$s (%2$s - %3$s)';
$lang['Invoices.status.active'] = 'Actif';
$lang['Invoices.status.proforma'] = 'Pro forma';
$lang['Invoices.status.draft'] = 'Projet';
$lang['Invoices.status.void'] = 'Vide';
$lang['Invoices.types.standard'] = 'Standard';
$lang['Invoices.types.proforma'] = 'Pro forma';
$lang['Invoices.cache_methods.none'] = 'Aucun';
$lang['Invoices.cache_methods.json'] = 'JSON';
$lang['Invoices.cache_methods.json_pdf'] = 'JSON + PDF';
$lang['Invoices.!error.invoice_id.exists'] = 'ID de la facture non valide.';
$lang['Invoices.!error.invoice_recur_id.exists'] = 'ID de la facture périodique non valide.';
$lang['Invoices.!error.method.exists'] = 'Vous devez définir au moins une méthode de livraison.';
$lang['Invoices.!error.delivery.empty'] = 'Veuillez saisir un mode de livraison de la facture.';
$lang['Invoices.!error.delivery.length'] = 'La longueur de la méthode de livraison de la facture ne doit pas dépasser 32 caractères.';
$lang['Invoices.!error.invoice_add.failed'] = 'Cette facture n\'a pas pu être créée. Veuillez réessayer.';
$lang['Invoices.!error.id_format.empty'] = 'Aucun format d\'identification n\'est défini pour les factures.';
$lang['Invoices.!error.id_format.length'] = 'Le format d\'identification des factures ne doit pas dépasser 64 caractères.';
$lang['Invoices.!error.id_value.valid'] = 'Impossible de déterminer la valeur de l\'ID de la facture.';
$lang['Invoices.!error.id.amount_applied'] = 'Les lignes, la devise et le statut de la facture peuvent ne pas être mis à jour parce qu\'un montant a déjà été appliqué à cette facture.';
$lang['Invoices.!error.client_id.exists'] = 'ID de client non valide.';
$lang['Invoices.!error.date_billed.format'] = 'La date de facturation est dans un format de date non valide.';
$lang['Invoices.!error.date_due.format'] = 'La date d\'échéance est dans un format de date non valide.';
$lang['Invoices.!error.date_due.after_billed'] = 'La date d\'échéance doit être égale ou postérieure à la date de facturation.';
$lang['Invoices.!error.date_closed.format'] = 'La date de clôture est dans un format de date non valide.';
$lang['Invoices.!error.date_autodebit.format'] = 'La date d\'échéance est dans un format de date non valide.';
$lang['Invoices.!error.autodebit.valid'] = 'Veuillez choisir d\'autoriser ou non l\'autodébit pour cette facture.';
$lang['Invoices.!error.status.format'] = 'Statut non valide.';
$lang['Invoices.!error.currency.length'] = 'Le code devise doit comporter 3 caractères.';
$lang['Invoices.!error.delivery.exists'] = 'Le mode de livraison indiqué n\'existe pas.';
$lang['Invoices.!error.term.format'] = 'Le terme doit être un nombre.';
$lang['Invoices.!error.term.bounds'] = 'Le terme doit être compris entre 1 et 65535.';
$lang['Invoices.!error.period.format'] = 'La période n\'est pas valide.';
$lang['Invoices.!error.duration.format'] = 'La durée n\'est pas valide.';
$lang['Invoices.!error.date_renews.format'] = 'La date de renouvellement de la facture périodique doit être un format de date valide.';
$lang['Invoices.!error.date_last_renewed.format'] = 'La date de renouvellement de la dernière facture périodique doit être un format de date valide.';
$lang['Invoices.!error.invoice_id.draft'] = 'La facture donnée n\'est pas un projet de facture et ne peut donc pas être supprimée.';
$lang['Invoices.!error.domain_renew.failed'] = 'Les domaines ne peuvent être renouvelés que pour une durée maximale de 10 ans.';
$lang['Invoices.!error.lines[][id].exists'] = 'ID de poste invalide.';
$lang['Invoices.!error.lines[][service_id].exists'] = 'ID de service non valide.';
$lang['Invoices.!error.lines[][description].empty'] = 'Veuillez saisir une description du poste.';
$lang['Invoices.!error.lines[][qty].format'] = 'La quantité doit être un nombre.';
$lang['Invoices.!error.lines[][qty].minimum'] = 'Veuillez indiquer une quantité de 1 ou plus.';
$lang['Invoices.!error.lines[][amount].format'] = 'Le coût unitaire doit être un nombre.';
$lang['Invoices.!error.lines[][tax].format'] = 'La taxe sur les postes doit être "vraie" ou "fausse".';
$lang['Invoices.!error.line_items.empty_split'] = 'Aucune ligne de facture n\'a été sélectionnée pour être fractionnée.';
$lang['Invoices.!error.line_items.minimum_split'] = 'La facture doit comporter au moins 2 lignes pour être fractionnée.';
$lang['Invoices.!error.invoice_id.unique'] = 'La facture de destination ne peut pas faire partie des factures à fusionner.';
$lang['Invoices.!error.invoice_id.status'] = 'La facture de destination doit être ouverte et ne comporter aucune transaction.';
$lang['Invoices.!error.invoice_ids.client'] = 'Toutes les factures doivent appartenir au même client.';
$lang['Invoices.!error.invoice_ids.status'] = 'Toutes les factures doivent être ouvertes et sans aucune transaction.';
$lang['Invoices.!error.invoice_ids.currency'] = 'Toutes les factures doivent avoir la même devise.';
$lang['Invoices.!error.invoice_ids.count'] = 'Au moins deux factures doivent être sélectionnées.';
$lang['Invoices.!line_item.parent_description'] = 'Child Service of %1$s - %2$s:';

