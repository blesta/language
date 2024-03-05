<?php
/**
 * Authorize Net
 *
 * @package blesta
 * @subpackage blesta.language.cs_cz
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Authorize_net.!error.card_number.missing'] = 'Datum platnosti nelze aktualizovat bez uvedení celého čísla karty.';
$lang['Authorize_net.!error.dev_mode.valid'] = 'Režim pro vývojáře musí být nastaven na hodnotu "true", pokud je zadán.';
$lang['Authorize_net.!error.test_mode.valid'] = 'Testovací režim musí být nastaven na "true", pokud je zadán.';
$lang['Authorize_net.!error.transaction_key.format'] = 'Klíč transakce musí mít délku 16 znaků.';
$lang['Authorize_net.!error.login_id.format'] = 'Přihlašovací ID by nemělo mít více než 20 znaků a nesmí být prázdné.';
$lang['Authorize_net.validation_modes_live'] = 'Živě';
$lang['Authorize_net.validation_modes_test'] = 'Test';
$lang['Authorize_net.validation_modes_none'] = 'Žádné';
$lang['Authorize_net.validation_note'] = 'Tím se řídí, jaký typ ověření se provede při uložení platebního účtu pomocí CIM. "Žádné" neprovádí žádnou dodatečnou validaci. \'Test\' vystaví testovací transakci, která se nezobrazí na výpisu zákazníka, ale vygeneruje e-mail obchodníkovi. \'Live\' zpracuje transakci v hodnotě 0,00 nebo 0,01 USD, která je okamžitě zrušena. Před nastavením této hodnoty na "Live" se poraďte se svým poskytovatelem obchodního účtu, protože vám mohou být účtovány poplatky.';
$lang['Authorize_net.validation_mode'] = 'Režim ověřování platebního účtu';
$lang['Authorize_net.apis_cim'] = 'CIM (musí být povoleno společností Authorize.Net)';
$lang['Authorize_net.apis_aim'] = 'AIM (výchozí)';
$lang['Authorize_net.dev_mode_note'] = 'Povolením této možnosti se transakce odešlou do vývojářského prostředí Authorize.net. Abyste mohli toto prostředí používat, musíte mít testovací účet pro vývojáře.';
$lang['Authorize_net.dev_mode'] = 'Vývojářský režim';
$lang['Authorize_net.test_mode_note'] = 'Funkce testovacího režimu je podporována pouze službou AIM. Chcete-li testovat transakce CIM, musíte testovací režim povolit ve svém účtu Authorize.net.';
$lang['Authorize_net.test_mode'] = 'Testovací režim';
$lang['Authorize_net.api'] = 'Rozhraní API pro platby';
$lang['Authorize_net.transaction_key'] = 'Transakční klíč';
$lang['Authorize_net.login_id'] = 'ID přihlášení';
$lang['Authorize_net.description'] = 'Spolehlivé a rychlé zpracování kreditních karet a ACH';
$lang['Authorize_net.name'] = 'Authorize.Net';

