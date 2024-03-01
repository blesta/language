<?php
/**
 * Coupons
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Coupons.getAmountTypes.amount'] = 'Montant';
$lang['Coupons.getAmountTypes.percent'] = 'Pourcentage';
$lang['Coupons.!error.code.empty'] = 'Veuillez saisir un code de réduction.';
$lang['Coupons.!error.code.length'] = 'La longueur du code de coupon ne doit pas dépasser 64 caractères.';
$lang['Coupons.!error.code.unique'] = 'Le code du coupon est actuellement défini sur un autre coupon et ne peut pas être réutilisé.';
$lang['Coupons.!error.company_id.exists'] = 'L\'identifiant de l\'entreprise donné n\'est pas valide.';
$lang['Coupons.!error.package_group_id.length'] = 'L\'identifiant du groupe de colis ne doit pas dépasser 10 caractères.';
$lang['Coupons.!error.used_qty.format'] = 'La quantité utilisée doit être un nombre.';
$lang['Coupons.!error.used_qty.length'] = 'La longueur de la quantité utilisée ne doit pas dépasser 10 caractères.';
$lang['Coupons.!error.max_qty.format'] = 'La quantité maximale doit être un nombre.';
$lang['Coupons.!error.max_qty.length'] = 'La longueur maximale de la quantité ne doit pas dépasser 10 caractères.';
$lang['Coupons.!error.max_qty.exceeded'] = 'La quantité utilisée ne peut pas dépasser la quantité maximale.';
$lang['Coupons.!error.start_date.format'] = 'Format de la date de début non valide.';
$lang['Coupons.!error.end_date.format'] = 'Format de date de fin non valide.';
$lang['Coupons.!error.status.format'] = 'Statut non valide.';
$lang['Coupons.!error.recurring.format'] = 'La récurrence doit être un nombre.';
$lang['Coupons.!error.recurring.length'] = 'La longueur récurrente ne doit pas dépasser 1 caractère.';
$lang['Coupons.!error.limit_recurring.format'] = 'Limite récurrente doit être un nombre.';
$lang['Coupons.!error.limit_recurring.length'] = 'Limite La longueur récurrente ne doit pas dépasser 1 caractère.';
$lang['Coupons.!error.apply_package_options.format'] = 'Le fait que le coupon s\'applique aux options configurables doit être défini sur 1 ou 0.';
$lang['Coupons.!error.internal_use_only.format'] = 'La valeur 1 ou 0 doit être attribuée pour indiquer si le coupon est réservé à un usage interne.';
$lang['Coupons.!error.coupon_id.exists'] = 'ID de coupon non valide.';
$lang['Coupons.!error.packages[].exists'] = 'Au moins un des paquets auxquels vous attribuez ce coupon est invalide.';
$lang['Coupons.!error.amounts.exists'] = 'Une seule devise de chaque type peut être appliquée comme réduction à ce coupon.';
$lang['Coupons.!error.amounts[][currency].length'] = 'Le code de la devise doit comporter 3 caractères.';
$lang['Coupons.!error.amounts[][amount].format'] = 'Chaque valeur de réduction doit être un nombre.';
$lang['Coupons.!error.amounts[][amount].positive'] = 'Chaque valeur d\'escompte doit être positive.';
$lang['Coupons.!error.amounts[][type].format'] = 'Type de montant non valide.';

