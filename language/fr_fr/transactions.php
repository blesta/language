<?php
/**
 * Transactions
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Transactions.!error.client_id.exists'] = 'ID de client non valide.';
$lang['Transactions.!error.amount.format'] = 'Le montant doit être un nombre.';
$lang['Transactions.!error.currency.length'] = 'La devise doit comporter 3 caractères.';
$lang['Transactions.!error.type.format'] = 'Type de transaction non valide.';
$lang['Transactions.!error.transaction_type_id.exists'] = 'L\'identifiant du type de transaction n\'est pas valide.';
$lang['Transactions.!error.gateway_id.exists'] = 'ID de passerelle non valide.';
$lang['Transactions.!error.transaction_id.length'] = 'La longueur de l\'identifiant de transaction ne doit pas dépasser 128 caractères.';
$lang['Transactions.!error.parent_transaction_id.length'] = 'La longueur de l\'identifiant de la transaction parentale ne doit pas dépasser 128 caractères.';
$lang['Transactions.!error.reference_id.length'] = 'La longueur de l\'ID de référence ne doit pas dépasser 128 caractères.';
$lang['Transactions.!error.status.format'] = 'Statut de la transaction non valide.';
$lang['Transactions.!error.transaction_id.exists'] = 'ID de transaction non valide.';
$lang['Transactions.!error.date_added.format'] = 'La date de la transaction ne peut pas être une date future.';
$lang['Transactions.!error.message.length'] = 'La longueur du message ne doit pas dépasser 255 caractères.';
$lang['Transactions.!error.transaction_id.currency_matches'] = 'Les montants des factures n\'ont pas pu être appliqués car ils ne correspondent pas à la devise de la transaction.';
$lang['Transactions.!error.invoice_id.exists'] = 'ID de la facture non valide.';
$lang['Transactions.!error.amounts.overage'] = 'Une ou plusieurs valeurs de montant à payer n\'ont pas pu être appliquées à la facture spécifiée. Assurez-vous que le montant à payer ne dépasse pas le montant dû sur la facture, que la facture est ouverte et que la somme des valeurs du montant à payer ne dépasse pas le montant du paiement ou du crédit.';
$lang['Transactions.!error.amounts.positive'] = 'Une ou plusieurs valeurs du montant à payer sont négatives. Assurez-vous que chaque valeur de montant à payer est égale ou supérieure à zéro.';
$lang['Transactions.!error.date.format'] = 'La date appliquée n\'est pas valide.';
$lang['Transactions.!error.currency.missing'] = 'Veuillez définir une devise.';
$lang['Transactions.!error.currency.mismatch'] = 'La devise donnée ne correspond pas à au moins une des factures associées.';
$lang['Transactions.!error.name.empty'] = 'Veuillez saisir un nom.';
$lang['Transactions.!error.name.length'] = 'La longueur du nom ne doit pas dépasser 32 caractères.';
$lang['Transactions.!error.type.valid'] = 'Veuillez sélectionner un type valide.';
$lang['Transactions.!error.is_lang.format'] = 'is_lang doit être un nombre.';
$lang['Transactions.!error.is_lang.length'] = 'La longueur de is_lang ne doit pas dépasser 1 caractère.';
$lang['Transactions.!error.type_id.exists'] = 'L\'identifiant du type de transaction n\'est pas valide.';
$lang['Transactions.types.cc'] = 'Carte de crédit';
$lang['Transactions.types.ach'] = 'ACH';
$lang['Transactions.types.other'] = 'Autres';
$lang['Transactions.status.approved'] = 'Approuvé';
$lang['Transactions.status.declined'] = 'Refusé';
$lang['Transactions.status.void'] = 'Vide';
$lang['Transactions.status.error'] = 'Erreur';
$lang['Transactions.status.pending'] = 'En attente';
$lang['Transactions.status.refunded'] = 'Remboursé';
$lang['Transactions.status.returned'] = 'Renvoyé';
$lang['Transactions.debit_types.debit'] = 'Débit';
$lang['Transactions.debit_types.credit'] = 'Crédit';

