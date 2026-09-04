<?php
/**
 * Transactions
 *
 * @package blesta
 * @subpackage blesta.language.fi_fi
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Transactions.!error.amount.applied'] = 'Tapahtuman summa ei saa olla pienempi kuin laskuihin jo kohdistettu summa. Poista ensin tapahtuma yhdestä tai useammasta laskusta.';
$lang['Transactions.!error.amount.format'] = 'Summan on oltava luku.';
$lang['Transactions.!error.amounts.applied'] = 'Maksettava summa -arvoja ei voitu soveltaa määritettyihin laskuihin. Yritä uudelleen.';
$lang['Transactions.!error.amounts.overage'] = 'Yhtä tai useampaa ”Maksettava summa” -arvoa ei voitu soveltaa määritettyyn laskuun. Varmista, että ”Maksettava summa” ei ylitä laskun erääntynyttä summaa, että lasku on avoin ja että ”Maksettava summa” -arvojen summa ei ylitä maksu- tai hyvityssummaa.';
$lang['Transactions.!error.amounts.positive'] = 'Yksi tai useampi ”Maksettava summa” -arvo on negatiivinen. Varmista, että jokainen ”Maksettava summa” -arvo on nolla tai suurempi.';
$lang['Transactions.!error.client_id.exists'] = 'Asiakastunnus on virheellinen.';
$lang['Transactions.!error.currency.length'] = 'Valuutan nimen on oltava 3 merkkiä pitkä.';
$lang['Transactions.!error.currency.mismatch'] = 'Ilmoitettu valuutta ei täsmää vähintään yhden siihen liittyvän laskun kanssa.';
$lang['Transactions.!error.currency.missing'] = 'Valitse valuutta.';
$lang['Transactions.!error.date_added.format'] = 'Tapahtumapäivä ei voi olla tulevaisuudessa.';
$lang['Transactions.!error.date.format'] = 'Syötetty päivämäärä ei ole kelvollinen.';
$lang['Transactions.!error.gateway_id.exists'] = 'Yhdyskäytävän tunnus on virheellinen.';
$lang['Transactions.!error.invoice_id.exists'] = 'Laskun tunnus on virheellinen.';
$lang['Transactions.!error.is_lang.format'] = 'is_lang:n on oltava luku.';
$lang['Transactions.!error.is_lang.length'] = 'is_lang-muuttujan pituus saa olla enintään 1 merkki.';
$lang['Transactions.!error.message.length'] = 'Viestin pituus ei saa ylittää 255 merkkiä.';
$lang['Transactions.!error.name.empty'] = 'Kirjoita nimi.';
$lang['Transactions.!error.name.length'] = 'Nimen pituus ei saa ylittää 32 merkkiä.';
$lang['Transactions.!error.parent_transaction_id.length'] = 'Ylätason tapahtuman tunnisteen pituus ei saa ylittää 128 merkkiä.';
$lang['Transactions.!error.reference_id.length'] = 'Viitetunnuksen pituus ei saa ylittää 128 merkkiä.';
$lang['Transactions.!error.status.format'] = 'Virheellinen tapahtuman tila.';
$lang['Transactions.!error.transaction_id.currency_matches'] = 'Laskun summia ei voitu kirjata, koska ne eivät vastaa tapahtuman valuuttaa.';
$lang['Transactions.!error.transaction_id.exists'] = 'Virheellinen tapahtumatunnus.';
$lang['Transactions.!error.transaction_id.length'] = 'Transaktiotunnuksen pituus ei saa ylittää 128 merkkiä.';
$lang['Transactions.!error.transaction_type_id.exists'] = 'Virheellinen tapahtumatyypin tunniste.';
$lang['Transactions.!error.type_id.exists'] = 'Virheellinen tapahtumatyypin tunniste.';
$lang['Transactions.!error.type.format'] = 'Virheellinen tapahtumatyyppi.';
$lang['Transactions.!error.type.valid'] = 'Valitse kelvollinen tyyppi.';
$lang['Transactions.debit_types.credit'] = 'Lähde';
$lang['Transactions.debit_types.debit'] = 'Veloitus';
$lang['Transactions.status.approved'] = 'Hyväksytty';
$lang['Transactions.status.declined'] = 'Hylätty';
$lang['Transactions.status.error'] = 'Virhe';
$lang['Transactions.status.pending'] = 'Käsiteltävänä';
$lang['Transactions.status.refunded'] = 'Hyvitetty';
$lang['Transactions.status.returned'] = 'Palautettu';
$lang['Transactions.status.void'] = 'Tyhjä';
$lang['Transactions.types.ach'] = 'ACH';
$lang['Transactions.types.cc'] = 'Luottokortti';
$lang['Transactions.types.other'] = 'Muu';

