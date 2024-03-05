<?php
/**
 * Quotations
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Quotations.!error.quotation_add.failed'] = 'Ce devis n\'a pas pu être créé. Veuillez réessayer.';
$lang['Quotations.!error.id.quotation_invoiced'] = 'Ce devis a été facturé et ne peut être modifié.';
$lang['Quotations.!error.id_format.empty'] = 'Aucun format d\'identification n\'est défini pour les citations.';
$lang['Quotations.!error.id_format.length'] = 'Le format d\'identification des citations ne doit pas dépasser 64 caractères.';
$lang['Quotations.!error.id_value.valid'] = 'Impossible de déterminer la valeur de l\'ID de l\'offre.';
$lang['Quotations.!error.client_id.exists'] = 'ID de client non valide.';
$lang['Quotations.!error.staff_id.exists'] = 'L\'ID du personnel n\'est pas valide.';
$lang['Quotations.!error.title.empty'] = 'Veuillez saisir un titre.';
$lang['Quotations.!error.title.length'] = 'Le titre des citations ne doit pas dépasser 255 caractères.';
$lang['Quotations.!error.date_created.format'] = 'La date de création est dans un format de date non valide.';
$lang['Quotations.!error.date_expires.format'] = 'Le format de la date d\'expiration n\'est pas valide.';
$lang['Quotations.!error.date_expires.after_created'] = 'L\'échéance doit être égale ou postérieure à la création facturée.';
$lang['Quotations.!error.status.format'] = 'Statut non valide.';
$lang['Quotations.!error.currency.length'] = 'Le code devise doit comporter 3 caractères.';
$lang['Quotations.!error.status.valid'] = 'Le devis doit être approuvé ou en attente pour être facturé.';
$lang['Quotations.!error.first_due_date.format'] = 'La première date d\'échéance est dans un format de date non valide.';
$lang['Quotations.!error.second_due_date.format'] = 'La deuxième date d\'échéance est dans un format de date non valide.';
$lang['Quotations.!error.percentage_due.format'] = 'Le pourcentage dû doit être un nombre.';
$lang['Quotations.!error.percentage_due.valid'] = 'Le pourcentage dû doit être un nombre supérieur à zéro et inférieur ou égal à 100.';
$lang['Quotations.!error.lines[][id].exists'] = 'ID de poste invalide.';
$lang['Quotations.!error.lines[][description].empty'] = 'Veuillez saisir une description du poste.';
$lang['Quotations.!error.lines[][qty].minimum'] = 'Veuillez indiquer une quantité de 1 ou plus.';
$lang['Quotations.!error.lines[][amount].format'] = 'Le coût unitaire doit être un nombre.';
$lang['Quotations.!error.lines[][tax].format'] = 'La taxe sur les postes doit être "vraie" ou "fausse".';
$lang['Quotations.getstatuses.draft'] = 'Projet';
$lang['Quotations.getstatuses.approved'] = 'Approuvé';
$lang['Quotations.getstatuses.pending'] = 'En attente';
$lang['Quotations.getstatuses.expired'] = 'Expiré';
$lang['Quotations.getstatuses.invoiced'] = 'Facturé';
$lang['Quotations.getstatuses.dead'] = 'Mort';
$lang['Quotations.getstatuses.lost'] = 'Perdu';

