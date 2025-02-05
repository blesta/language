<?php
/**
 * Paypal Payments Standard
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PaypalPaymentsStandard.name'] = 'Paiements PayPal Standard';
$lang['PaypalPaymentsStandard.description'] = 'PayPal Payments Standard est l\'un des moyens les plus simples d\'accepter en toute sécurité les paiements par carte de crédit et PayPal en ligne.';
$lang['PaypalPaymentsStandard.account_id'] = 'Email du compte PayPal';
$lang['PaypalPaymentsStandard.page_style'] = 'Nom du style de page';
$lang['PaypalPaymentsStandard.page_style_note'] = 'Nom du style de page du thème de page de paiement personnalisé que vous avez créé dans PayPal. Laissez vide pour le style de page par défaut.';
$lang['PaypalPaymentsStandard.dev_mode'] = 'Mode développeur';
$lang['PaypalPaymentsStandard.dev_mode_note'] = 'L\'activation de cette option permet d\'enregistrer les transactions dans l\'environnement de l\'Environnement de test PayPal. N\'activez cette option que si vous effectuez des tests avec un compte PayPal Sandbox.';
$lang['PaypalPaymentsStandard.api_username'] = 'Nom d\'utilisateur API';
$lang['PaypalPaymentsStandard.api_username_note'] = 'Ces informations, ainsi que le mot de passe et la signature de l\'API, sont nécessaires pour traiter les remboursements par l\'intermédiaire de PayPal.';
$lang['PaypalPaymentsStandard.api_password'] = 'Mot de passe API';
$lang['PaypalPaymentsStandard.api_signature'] = 'Signature de l\'API';
$lang['PaypalPaymentsStandard.pay_type'] = 'Options de paiement';
$lang['PaypalPaymentsStandard.pay_type_onetime'] = 'Paiements uniques uniquement';
$lang['PaypalPaymentsStandard.pay_type_subscribe'] = 'Paiements d\'abonnements uniquement';
$lang['PaypalPaymentsStandard.pay_type_both'] = 'Paiements uniques et par abonnement lorsque c\'est possible';
$lang['PaypalPaymentsStandard.buildprocess.submit'] = 'Payer avec PayPal';
$lang['PaypalPaymentsStandard.!error.account_id.valid'] = 'Vous devez saisir une adresse électronique valide.';
$lang['PaypalPaymentsStandard.!error.dev_mode.valid'] = 'Le mode développeur doit être défini sur "true" s\'il est indiqué.';
$lang['PaypalPaymentsStandard.!error.payment_mapping.duplicated'] = 'Des doublons ont été trouvés dans vos données de cartographie, supprimez les doublons et réessayez.';
$lang['PaypalPaymentsStandard.!error.payment_mapping.valid'] = 'Une ligne non valide a été trouvée dans vos données de cartographie, vérifiez si l\'adresse électronique et l\'ID du client sont valides et réessayez.';
$lang['PaypalPaymentsStandard.payment_mapping_note'] = 'Destiné à être utilisé avec les abonnements PayPal qui ont été créés en dehors de Blesta. Faire correspondre payer_email à l\'ID interne du client, 1 par ligne. Par exemple : email,client-id';
$lang['PaypalPaymentsStandard.payment_mapping'] = 'Cartographie des paiements';

