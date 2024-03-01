<?php
/**
 * Coupons
 *
 * @package blesta
 * @subpackage blesta.language.cs_cz
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Coupons.!error.amounts[][type].format'] = 'Nesprávný typ částky.';
$lang['Coupons.!error.amounts[][amount].positive'] = 'Každá hodnota slevy musí být kladná.';
$lang['Coupons.!error.amounts[][amount].format'] = 'Každá hodnota slevy musí být číslo.';
$lang['Coupons.!error.amounts[][currency].length'] = 'Kód měny musí mít 3 znaky.';
$lang['Coupons.!error.amounts.exists'] = 'Na tento kupón lze uplatnit slevu pouze v jedné měně každého typu.';
$lang['Coupons.!error.packages[].exists'] = 'Alespoň jeden z balíčků, ke kterým tento kupón přiřazujete, je neplatný.';
$lang['Coupons.!error.coupon_id.exists'] = 'Neplatné ID kupónu.';
$lang['Coupons.!error.internal_use_only.format'] = 'Zda je kupón určen pouze pro interní použití, musí být nastaveno na 1 nebo 0.';
$lang['Coupons.!error.apply_package_options.format'] = 'Zda se kupón vztahuje na konfigurovatelné možnosti, musí být nastaveno na 1 nebo 0.';
$lang['Coupons.!error.limit_recurring.length'] = 'Omezení Délka opakování nesmí překročit 1 znak.';
$lang['Coupons.!error.limit_recurring.format'] = 'Limit Opakované musí být číslo.';
$lang['Coupons.!error.recurring.length'] = 'Délka opakování nesmí překročit 1 znak.';
$lang['Coupons.!error.recurring.format'] = 'Opakující se musí být číslo.';
$lang['Coupons.!error.status.format'] = 'Neplatný stav.';
$lang['Coupons.!error.end_date.format'] = 'Nesprávný formát koncového data.';
$lang['Coupons.!error.start_date.format'] = 'Nesprávný formát počátečního data.';
$lang['Coupons.!error.max_qty.exceeded'] = 'Použité množství nesmí překročit maximální množství.';
$lang['Coupons.!error.max_qty.length'] = 'Maximální délka množství nesmí překročit 10 znaků.';
$lang['Coupons.!error.max_qty.format'] = 'Maximální množství musí být číslo.';
$lang['Coupons.!error.used_qty.length'] = 'Délka použitého množství nesmí překročit 10 znaků.';
$lang['Coupons.!error.used_qty.format'] = 'Použité množství musí být číslo.';
$lang['Coupons.!error.package_group_id.length'] = 'ID skupiny balíčků nesmí přesáhnout 10 znaků.';
$lang['Coupons.!error.company_id.exists'] = 'Zadáno neplatné ID společnosti.';
$lang['Coupons.!error.code.unique'] = 'Kód kupónu je v současné době nastaven na jiný kupón a nelze jej znovu použít.';
$lang['Coupons.!error.code.length'] = 'Délka kódu kupónu nesmí překročit 64 znaků.';
$lang['Coupons.!error.code.empty'] = 'Zadejte prosím kód kupónu.';
$lang['Coupons.getAmountTypes.percent'] = 'Procenta';
$lang['Coupons.getAmountTypes.amount'] = 'Částka';

