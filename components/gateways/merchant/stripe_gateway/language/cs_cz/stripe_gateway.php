<?php
/**
 * Stripe Gateway
 *
 * @package blesta
 * @subpackage blesta.language.cs_cz
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Stripe_gateway.charge_description'] = 'Poplatek za %1$s';
$lang['Stripe_gateway.tooltip_stored'] = 'Zaškrtněte toto políčko, chcete-li informace o platebních kartách ukládat ve službě Stripe, a nikoli v systému Blesta.';
$lang['Stripe_gateway.stored'] = 'Ukládání informací o kartě mimo web';
$lang['Stripe_gateway.tooltip_api'] = 'Tajný klíč API je specifický pro živý nebo testovací režim. Ujistěte se, že používáte správný klíč.';
$lang['Stripe_gateway.api_key'] = 'Tajný klíč API';
$lang['Stripe_gateway.description'] = 'Jedná se o starší bránu Stripe, která používá službu Stripe Checkout. Vyžaduje, aby byl váš účet Stripe aktualizován na "Zpracovávat platby nebezpečně". Doporučujeme místo toho používat platební bránu Stripe v aplikaci Blesta';
$lang['Stripe_gateway.name'] = 'Proužek';
$lang['Stripe_gateway.!error.json_required'] = 'Pro tuto bránu je vyžadováno rozšíření JSON.';
$lang['Stripe_gateway.!error.api_key.empty'] = 'Zadejte prosím klíč API.';
$lang['Stripe_gateway.!error.auth'] = 'Bránu se nepodařilo ověřit.';

