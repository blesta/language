<?php
/**
 * Client Pay
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientPay.!success.payment_processed'] = 'Le paiement a été traité avec succès pour %1$s. Numéro de transaction : %2$s';
$lang['ClientPay.!success.credit_full_processed'] = 'Les crédits disponibles ont été appliqués.';
$lang['ClientPay.!success.credit_partial_processed'] = 'Les crédits disponibles ont été appliqués, mais il reste un solde. Veuillez compléter cette transaction en payant le solde ci-dessous.';
$lang['ClientPay.!success.invoice_paid'] = 'Cette facture a déjà été payée.';
$lang['ClientPay.!info.unverified_email'] = 'Un lien a été envoyé à l\'adresse électronique que vous avez fournie. Veuillez cliquer sur le lien contenu dans l\'e-mail pour vérifier votre adresse e-mail avant de procéder au paiement.';
$lang['ClientPay.!info.unverified_email_button'] = 'Renvoyer l\'e-mail de vérification';
$lang['ClientPay.!info.ach_verification'] = 'Vous devez vérifier ce compte avant de pouvoir l\'utiliser pour effectuer un paiement.';
$lang['ClientPay.!info.ach_verification_redirect'] = 'Vous devez vérifier ce compte avant de pouvoir l\'utiliser pour effectuer un paiement. Ce processus vous redirigera hors de la page actuelle.';
$lang['ClientPay.!error.invalid_details'] = 'Veuillez sélectionner une option de paiement.';
$lang['ClientPay.!error.invalid_amount'] = 'Les autres montants de paiement peuvent ne pas être négatifs.';
$lang['ClientPay.!error.payment_amounts'] = 'Veuillez sélectionner les factures à payer ou saisir un autre montant de paiement.';
$lang['ClientPay.!error.invoice_voided'] = 'Cette facture a été annulée et ne peut être payée.';
$lang['ClientPay.!error.payment_authorize'] = 'Le paiement n\'a pas pu être autorisé pour le compte de paiement sélectionné.  Veuillez sélectionner un autre compte ou réessayer.';
$lang['ClientPay.index.page_title'] = 'Client %1$s Payez';
$lang['ClientPay.index.boxtitle_pay'] = 'Effectuer le paiement';
$lang['ClientPay.index.field_credit'] = 'Autre montant du paiement';
$lang['ClientPay.index.field_submit'] = 'Continuer';
$lang['ClientPay.method.page_title'] = 'Mode de paiement du client %1$s';
$lang['ClientPay.method.boxtitle_method'] = 'Effectuer le paiement';
$lang['ClientPay.method.field_useaccount'] = 'Utiliser le compte de paiement';
$lang['ClientPay.method.field_newdetails'] = 'Nouveaux détails de paiement';
$lang['ClientPay.method.heading_other_payment_options'] = 'Autres options de paiement';
$lang['ClientPay.method.heading_payment_options'] = 'Options de paiement';
$lang['ClientPay.method.field_paymentaccount'] = '%1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.field_paymentaccount_cc'] = 'Comptes de cartes de crédit';
$lang['ClientPay.method.field_paymentaccount_autodebit'] = '(débit automatique) %1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.field_paymentaccount_ach'] = 'Comptes ACH';
$lang['ClientPay.method.field_apply_credit'] = 'Demande de crédit (%1$s disponibles)';
$lang['ClientPay.method.field_submit'] = 'Examen et confirmation';
$lang['ClientPay.method.field_credit_submit'] = 'Demander un crédit et continuer';
$lang['ClientPay.method.no_options'] = 'Il n\'y a pas d\'options de paiement disponibles.';
$lang['ClientPay.method.heading_invoice'] = 'Facture #%1$s';
$lang['ClientPay.method.invoice_description'] = 'Description';
$lang['ClientPay.method.invoice_quantity'] = 'Quantité';
$lang['ClientPay.method.invoice_amount'] = 'Montant';
$lang['ClientPay.multipleinvoices.text_edit_amounts'] = 'Remplacer le paiement par un paiement partiel';
$lang['ClientPay.multipleinvoices.text_amount'] = 'Montant à payer';
$lang['ClientPay.multipleinvoices.text_due'] = 'Montant dû';
$lang['ClientPay.multipleinvoices.text_invoice'] = 'Facture #';
$lang['ClientPay.multipleinvoices.text_datedue'] = 'Date d\'échéance';
$lang['ClientPay.multipleinvoices.no_results'] = 'Il n\'y a pas de factures dans cette devise.';
$lang['ClientPay.confirm.page_title'] = 'Client %1$s Confirmer le paiement';
$lang['ClientPay.confirm.boxtitle_confirm'] = 'Confirmer le paiement';
$lang['ClientPay.confirm.payment_details'] = 'Modalités de paiement';
$lang['ClientPay.confirm.account_info'] = '%1$s (%2$s) se terminant par %3$s';
$lang['ClientPay.confirm.account_info_type'] = '%1$s';
$lang['ClientPay.confirm.account_exp'] = 'expire %1$s';
$lang['ClientPay.confirm.total'] = 'Total :';
$lang['ClientPay.confirm.field_submit'] = 'Soumettre le paiement';
$lang['ClientPay.confirm.field_edit'] = 'Modifier le paiement';
$lang['ClientPay.confirm.description_invoice'] = 'Facture #%1$s';
$lang['ClientPay.confirm.description_invoice_separator'] = ',';
$lang['ClientPay.confirm.description_invoice_number'] = '#%1$s';
$lang['ClientPay.confirm.description_credit'] = 'Crédit de paiement';
$lang['ClientPay.received.page_title'] = 'Client %1$s Paiement reçu';
$lang['ClientPay.received.boxtitle_received'] = 'Merci de votre attention !';
$lang['ClientPay.received.statement'] = 'Votre paiement est en cours de traitement.';
$lang['ClientPay.received.transaction_id'] = 'ID de la transaction';
$lang['ClientPay.received.amount'] = 'Montant';
$lang['ClientPay.received.invoices'] = 'Facture #';
$lang['ClientPay.received.text_try_again'] = 'Réessayer';
$lang['ClientPay.setcontactview.text_none'] = 'Aucun';
$lang['ClientPay.method.invoice_balance_due'] = 'Solde dû';
$lang['ClientPay.method.invoice_paid_amount'] = 'Montant payé';
$lang['ClientPay.method.invoice_total'] = 'Total de la facture';
$lang['ClientPay.index.text_credit_max_only'] = 'Montant maximum : %1$s';
$lang['ClientPay.index.text_credit_min_only'] = 'Montant minimum : %1$s';
$lang['ClientPay.index.text_credit_limits'] = 'Montant minimum : %1$s - Montant maximum : %2$s';
$lang['ClientPay.!error.credit_maximum'] = 'Le montant du crédit ne peut excéder %1$s.';
$lang['ClientPay.!error.credit_minimum'] = 'Le montant du crédit doit être d\'au moins %1$s.';

