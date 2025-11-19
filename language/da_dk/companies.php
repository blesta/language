<?php
/**
 * Companies
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Companies.!error.company_id.in_use'] = 'Den virksomhed er i brug i øjeblikket og kan ikke slettes.';
$lang['Companies.!error.company_id.exists'] = 'Ugyldigt virksomheds-ID.';
$lang['Companies.!error.name.empty'] = 'Indtast venligst et navn.';
$lang['Companies.!error.name.length'] = 'Navnets længde må ikke overstige 64 tegn.';
$lang['Companies.!error.hostname.valid'] = 'Indtast venligst et gyldigt værtsnavn.';
$lang['Companies.!error.hostname.length'] = 'Værtsnavnet må ikke være længere end 255 tegn.';
$lang['Companies.!error.hostname.unique'] = 'Det værtsnavn er allerede blevet overtaget af en anden virksomhed.';
$lang['Companies.!error.phone.length'] = 'Telefonens længde må ikke overstige 64 tegn.';
$lang['Companies.!error.fax.length'] = 'Faxens længde må ikke overstige 64 tegn.';
$lang['Companies.!error.private_key_passphrase.valid'] = 'Den indtastede passphrase er ugyldig.';
$lang['Companies.!error.quota.allowed'] = 'Der er ingen addon-virksomhedslicenser tilgængelige. Log ind på din konto på account.blesta.com eller kontakt salgsafdelingen for at købe yderligere firmalicenser.';
$lang['Companies.!error.inv_format.format'] = 'Fakturaformatet må ikke være i konflikt med fakturakladdeformatet.';
$lang['Companies.!error.inv_format.contains'] = 'Fakturaformat skal indeholde {num}.';
$lang['Companies.!error.inv_draft_format.format'] = 'Fakturakladdeformatet kan ikke være i konflikt med fakturaformatet.';
$lang['Companies.!error.inv_draft_format.contains'] = 'Fakturakladdeformatet skal indeholde {num}.';
$lang['Companies.!error.inv_start.number'] = 'Fakturaens startværdi skal være et tal.';
$lang['Companies.!error.inv_increment.number'] = 'Invoice Increment Value skal være et tal.';
$lang['Companies.!error.inv_pad_size.number'] = 'Fakturaens polstringsstørrelse skal være et tal.';
$lang['Companies.!error.inv_pad_str.length'] = 'Invoice Padding Character skal være et enkelt tegn.';
$lang['Companies.!error.inv_proforma_format.format'] = 'Proformafakturaformatet må ikke være i konflikt med udkastfakturaformatet.';
$lang['Companies.!error.inv_proforma_format.contains'] = 'Pro Forma Invoice Format skal indeholde {num}.';
$lang['Companies.!error.inv_proforma_start.number'] = 'Pro Forma Invoice Start Value skal være et tal.';
$lang['Companies.!error.payment_credit_limits.max_less_than_min'] = 'Det maksimale kreditbeløb for %1$s skal være større end minimumsbeløbet.';
$lang['Companies.!error.payment_credit_limits.max_amount'] = 'Det maksimale kreditbeløb for %1$s skal være større end 0.';
$lang['Companies.!error.payment_credit_limits.min_amount'] = 'Det mindste kreditbeløb for %1$s skal være større end 0.';

