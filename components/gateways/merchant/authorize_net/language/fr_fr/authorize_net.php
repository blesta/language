<?php
/**
 * Authorize Net
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Authorize_net.name'] = 'Authorize.Net';
$lang['Authorize_net.description'] = 'Traitement fiable et rapide des cartes de crédit et des ACH';
$lang['Authorize_net.login_id'] = 'Identifiant de connexion';
$lang['Authorize_net.transaction_key'] = 'Clé de transaction';
$lang['Authorize_net.api'] = 'API de paiement';
$lang['Authorize_net.test_mode'] = 'Mode test';
$lang['Authorize_net.test_mode_note'] = 'La fonction de mode test n\'est prise en charge que par AIM. Pour tester les transactions CIM, vous devez activer le mode test à partir de votre compte Authorize.net.';
$lang['Authorize_net.dev_mode'] = 'Mode développeur';
$lang['Authorize_net.dev_mode_note'] = 'L\'activation de cette option permet d\'enregistrer les transactions dans l\'environnement de développement Authorize.net. Vous devez disposer d\'un compte de test de développeur pour pouvoir utiliser cet environnement.';
$lang['Authorize_net.apis_aim'] = 'AIM (par défaut)';
$lang['Authorize_net.apis_cim'] = 'CIM (doit être activé par Authorize.Net)';
$lang['Authorize_net.validation_mode'] = 'Mode de validation du compte de paiement';
$lang['Authorize_net.validation_note'] = 'Cette option permet de contrôler le type de validation effectué lorsqu\'un compte de paiement est enregistré à l\'aide du CIM. Aucun" n\'effectue aucune validation supplémentaire. Test" émet une transaction test qui n\'apparaît pas sur le relevé du client mais qui génère un e-mail au commerçant. Live" traite une transaction de 0,00 $ ou 0,01 $ qui est immédiatement annulée. Consultez votre fournisseur de compte marchand avant de régler cette valeur sur "Live", car vous risquez de devoir payer des frais.';
$lang['Authorize_net.validation_modes_none'] = 'Aucun';
$lang['Authorize_net.validation_modes_test'] = 'Test';
$lang['Authorize_net.validation_modes_live'] = 'En direct';
$lang['Authorize_net.!error.login_id.format'] = 'L\'identifiant de connexion ne doit pas comporter plus de 20 caractères et ne peut pas être vide.';
$lang['Authorize_net.!error.transaction_key.format'] = 'La clé de transaction doit comporter 16 caractères.';
$lang['Authorize_net.!error.test_mode.valid'] = 'Le mode de test doit être défini sur "true" s\'il est donné.';
$lang['Authorize_net.!error.dev_mode.valid'] = 'Le mode développeur doit être défini sur "true" s\'il est donné.';
$lang['Authorize_net.!error.card_number.missing'] = 'La date d\'expiration ne peut être mise à jour sans le numéro complet de la carte.';

