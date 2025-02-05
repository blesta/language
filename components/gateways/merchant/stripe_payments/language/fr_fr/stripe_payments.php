<?php
/**
 * Stripe Payments
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['StripePayments.!error.auth'] = 'La passerelle n\'a pas pu s\'authentifier.';
$lang['StripePayments.!error.publishable_key.empty'] = 'Veuillez saisir une clé publiable.';
$lang['StripePayments.!error.secret_key.empty'] = 'Veuillez saisir une clé secrète.';
$lang['StripePayments.!error.secret_key.valid'] = 'Impossible de se connecter à l\'API Stripe en utilisant la clé secrète donnée.';
$lang['StripePayments.!error.bank_account_unverified'] = 'Vous devez vérifier votre compte bancaire avant de pouvoir l\'utiliser pour effectuer un paiement.';
$lang['StripePayments.!error.invalid_request_error'] = 'La passerelle de paiement a renvoyé une erreur lors du traitement de la demande.';
$lang['StripePayments.name'] = 'Paiements Stripe';
$lang['StripePayments.description'] = 'Utilise les éléments Stripe et l\'API de demande de paiement pour gérer automatiquement 3D Secure et SCA afin d\'envoyer des cartes de crédit directement via Stripe.';
$lang['StripePayments.ach_form.field_type'] = 'Type de compte';
$lang['StripePayments.ach_form.field_holder_type'] = 'Type de support';
$lang['StripePayments.ach_form.field_holder_type_individual'] = 'Individuel';
$lang['StripePayments.ach_form.field_holder_type_company'] = 'Entreprise';
$lang['StripePayments.ach_form.field_account_number'] = 'Numéro de compte';
$lang['StripePayments.ach_form.field_routing_number'] = 'Numéro de routage';
$lang['StripePayments.ach_form.verification_notice'] = 'Nous avons effectué deux petits versements sur ce compte bancaire. Pour vérifier ce compte, veuillez confirmer les montants de ces dépôts.';
$lang['StripePayments.ach_form.field_first_deposit'] = 'Premier dépôt';
$lang['StripePayments.ach_form.field_second_deposit'] = 'Deuxième dépôt';
$lang['StripePayments.ach_form.mandate_authorization'] = 'En soumettant ce formulaire, vous autorisez %1$s à débiter le compte bancaire indiqué ci-dessus de tout montant dû pour des frais découlant de votre utilisation des services de %1$s et/ou de l\'achat de produits auprès de %1$s, conformément au site web et aux conditions de %1$s, jusqu\'à ce que cette autorisation soit révoquée. Vous pouvez modifier ou annuler cette autorisation à tout moment en informant %1$s avec un préavis de 30 (trente) jours.';
$lang['StripePayments.ach_form.mandate_future_usage'] = 'Si vous utilisez les services de %1$s ou achetez périodiquement des produits supplémentaires conformément aux conditions de %1$s, vous autorisez %1$s à débiter périodiquement votre compte bancaire. Les paiements qui n\'entrent pas dans le cadre des débits réguliers autorisés ci-dessus ne seront débités qu\'après obtention de votre autorisation.';
$lang['StripePayments.publishable_key'] = 'Clé publiable de l\'API';
$lang['StripePayments.secret_key'] = 'Clé secrète de l\'API';
$lang['StripePayments.tooltip_publishable_key'] = 'Votre clé API publiable est spécifique au mode live ou au mode test. Assurez-vous que vous utilisez la bonne clé.';
$lang['StripePayments.tooltip_secret_key'] = 'Votre clé secrète API est spécifique au mode live ou au mode test. Assurez-vous d\'utiliser la bonne clé.';
$lang['StripePayments.webhook'] = 'Webhook de Stripe';
$lang['StripePayments.webhook_note'] = 'Il est recommandé de configurer l\'url suivante en tant que Webhook pour les événements "payment_intent" dans votre compte Stripe.';
$lang['StripePayments.heading_migrate_accounts'] = 'Migrer les anciens comptes de paiement';
$lang['StripePayments.text_accounts_remaining'] = 'Comptes restants : %1$s';
$lang['StripePayments.text_migrate_accounts'] = 'Vous pouvez migrer automatiquement les comptes de paiement stockés hors site par l\'ancienne passerelle Stripe vers cette passerelle Stripe Payments. Les comptes qui ne sont pas stockés hors site doivent être migrés en créant manuellement de nouveaux comptes de paiement. Afin d\'éviter les dépassements de délais, les migrations seront effectuées par lots de %1$s. Exécutez cette commande autant de fois que nécessaire pour migrer tous les comptes de paiement.';
$lang['StripePayments.warning_migrate_accounts'] = 'Ne désinstallez pas l\'ancienne passerelle Stripe avant d\'avoir fini d\'utiliser cet outil de migration. Cela rendrait l\'outil inaccessible.';
$lang['StripePayments.migrate_accounts'] = 'Migrer les comptes';
$lang['StripePayments.charge_description_default'] = 'Facturation d\'un montant déterminé';
$lang['StripePayments.charge_description'] = 'Frais pour %1$s';
$lang['StripePayments.request_three_d_secure_note'] = 'Si vous êtes un utilisateur Stripe basé en Inde, avant d\'enregistrer une nouvelle carte avec Stripe, vous devez toujours procéder à l\'authentification 3D Secure (3DS).';
$lang['StripePayments.request_three_d_secure_challenge'] = 'Présenter un défi 3D Secure chaque fois qu\'un client enregistre une méthode de paiement ou traite une méthode de paiement (stockée ou non stockée).';
$lang['StripePayments.request_three_d_secure_frictionless'] = 'Présenter un défi 3D Secure chaque fois qu\'un client enregistre une méthode de paiement ou traite une méthode de paiement non stockée.';
$lang['StripePayments.request_three_d_secure_automatic'] = 'Permettre à Stripe de déterminer quand présenter un défi 3D Secure';
$lang['StripePayments.request_three_d_secure'] = 'Flux d\'authentification 3D Secure';

