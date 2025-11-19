<?php
/**
 * Clients
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Clients.!error.client_group_id.exists'] = 'L\'identifiant du groupe de clients n\'est pas valide.';
$lang['Clients.!error.client_id.exists'] = 'ID de client non valide.';
$lang['Clients.!error.account_id.exists'] = 'ID de compte invalide.';
$lang['Clients.!error.type.exists'] = 'Type non valide.';
$lang['Clients.!error.id_format.empty'] = 'Aucun format d\'identification n\'est défini pour les clients.';
$lang['Clients.!error.id_format.length'] = 'Le format d\'identification des clients ne doit pas dépasser 64 caractères.';
$lang['Clients.!error.id_value.valid'] = 'Impossible de déterminer la valeur de l\'ID du client.';
$lang['Clients.!error.user_id.exists'] = 'ID utilisateur non valide.';
$lang['Clients.!error.user_id.unique'] = 'L\'ID utilisateur du client %1$s est déjà pris.';
$lang['Clients.!error.status.format'] = 'Statut non valide.';
$lang['Clients.!error.settings[tax_id].valid'] = 'Veuillez indiquer un numéro d\'identification fiscale/VATIN valide.';
$lang['Clients.!error.client_id.deleteable'] = 'Le client ne peut pas être supprimé tant qu\'il existe des factures ouvertes, des factures récurrentes ou des services actifs/suspendus. Veuillez annuler toutes les factures en cours, supprimer toutes les factures récurrentes et annuler tous les services actifs/suspendus avant de poursuivre.';
$lang['Clients.!error.autodebit.format'] = 'Valeur d\'autodébit non valide.';
$lang['Clients.!error.inv_address_to.exists'] = 'Veuillez indiquer un contact valide à qui adresser les factures.';
$lang['Clients.!error.default_currency.valid'] = 'Monnaie non valide.';
$lang['Clients.!error.default_currency.editable'] = 'La devise peut ne pas être mise à jour.';
$lang['Clients.!error.inv_method.valid'] = 'Méthode de livraison de la facture non valide.';
$lang['Clients.!error.inv_method.editable'] = 'La méthode de livraison de la facture peut ne pas être mise à jour.';
$lang['Clients.!error.language.valid'] = 'Langue non valide.';
$lang['Clients.!error.language.editable'] = 'La langue peut ne pas être mise à jour.';
$lang['Clients.!error.receive_email_marketing.valid'] = 'Valeur de marketing par courriel invalide.';
$lang['Clients.!error.name.empty'] = 'Veuillez saisir un nom.';
$lang['Clients.!error.link.valid'] = 'Veuillez saisir un lien valide.';
$lang['Clients.!error.is_lang.format'] = 'is_lang doit être un nombre.';
$lang['Clients.!error.is_lang.length'] = 'is_lang ne doit pas dépasser 1 caractère.';
$lang['Clients.!error.type.format'] = 'Type non valide.';
$lang['Clients.!error.values.format'] = 'Les valeurs sont dans un format non valide.';
$lang['Clients.!error.default.valid'] = 'La valeur par défaut n\'est pas valide.';
$lang['Clients.!error.regex.valid'] = 'L\'expression régulière n\'est pas valide.';
$lang['Clients.!error.show_client.format'] = 'Le client doit être un numéro.';
$lang['Clients.!error.show_client.length'] = 'Le client de l\'émission ne doit pas dépasser 1 caractère.';
$lang['Clients.!error.client_field_id.exists'] = 'L\'identifiant du champ personnalisé n\'est pas valide.';
$lang['Clients.!error.client_field_id.matches'] = 'Le champ personnalisé n\'est pas valide.';
$lang['Clients.!error.encrypted.format'] = 'Encrypted doit être un nombre.';
$lang['Clients.!error.encrypted.length'] = 'La longueur du texte crypté ne doit pas dépasser 1 caractère.';
$lang['Clients.!error.read_only.format'] = 'Lecture seule doit être un nombre.';
$lang['Clients.!error.read_only.length'] = 'En lecture seule, la longueur ne doit pas dépasser 1 caractère.';
$lang['Clients.!error.value.required'] = 'Le format de %1$s n\'est pas valide.';
$lang['Clients.!error.value.valid'] = 'La valeur de %1$s n\'est pas valide.';
$lang['Clients.!error.staff_id.exists'] = 'L\'ID du personnel n\'est pas valide.';
$lang['Clients.!error.title.empty'] = 'Veuillez saisir un titre.';
$lang['Clients.!error.title.length'] = 'La longueur du titre ne doit pas dépasser 255 caractères.';
$lang['Clients.!error.note_id.exists'] = 'ID de la note non valide.';
$lang['Clients.!error.stickied.format'] = 'L\'autocollant doit être un numéro.';
$lang['Clients.!error.stickied.length'] = 'La longueur de la vignette ne doit pas dépasser 1 caractère.';
$lang['Clients.!error.package_ids.exists'] = 'Au moins un des paquets fournis n\'existe pas.';
$lang['Clients.getCustomFieldTypes.textbox'] = 'Zone de texte';
$lang['Clients.getCustomFieldTypes.checkbox'] = 'Case à cocher';
$lang['Clients.getCustomFieldTypes.dropdown'] = 'Drop Down';
$lang['Clients.getCustomFieldTypes.textarea'] = 'Zone de texte';
$lang['Clients.getStatusTypes.active'] = 'Actif';
$lang['Clients.getStatusTypes.inactive'] = 'Inactif';
$lang['Clients.getStatusTypes.fraud'] = 'Fraude';
$lang['Clients.setDebitAccountFailure.note_title'] = 'Débit automatique désactivé pour le compte de paiement.';
$lang['Clients.setDebitAccountFailure.note_body'] = 'Le compte de paiement %1$s se terminant par x%2$s a été désactivé car il a dépassé le nombre maximum de tentatives de refus.';
$lang['Clients.customfield.cf2'] = 'Champ personnalisé';
$lang['Clients.!error.payment_credit_limits.max_less_than_min'] = 'Le montant maximum du crédit pour %1$s doit être supérieur au montant minimum.';
$lang['Clients.!error.payment_credit_limits.max_amount'] = 'Le montant maximum du crédit pour %1$s doit être supérieur à 0.';
$lang['Clients.!error.payment_credit_limits.min_amount'] = 'Le montant minimum du crédit pour %1$s doit être supérieur à 0.';

