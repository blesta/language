<?php
/**
 * Invoices
 *
 * @package blesta
 * @subpackage blesta.language.fi_fi
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Invoices.!error.autodebit.valid'] = 'Valitse, sallitko tämän laskun automaattisen veloituksen vai et.';
$lang['Invoices.!error.client_id.exists'] = 'Asiakastunnus on virheellinen.';
$lang['Invoices.!error.currency.length'] = 'Valuuttakoodin on oltava 3 merkkiä pitkä.';
$lang['Invoices.!error.date_autodebit.format'] = 'Maksupäivä on kirjoitettu virheellisessä päivämäärämuodossa.';
$lang['Invoices.!error.date_billed.format'] = 'Laskutuspäivämäärä on virheellisessä päivämäärämuodossa.';
$lang['Invoices.!error.date_closed.format'] = 'Päättymispäivä on virheellisessä päivämäärämuodossa.';
$lang['Invoices.!error.date_due.after_billed'] = 'Maksupäivän on oltava laskutuspäivää myöhempi tai sama.';
$lang['Invoices.!error.date_due.format'] = 'Maksupäivä on kirjoitettu virheellisessä päivämäärämuodossa.';
$lang['Invoices.!error.date_last_renewed.format'] = 'Viimeisen toistuvan laskun uusimispäivän on oltava kelvollisessa päivämäärämuodossa.';
$lang['Invoices.!error.date_renews.format'] = 'Toistuvan laskun uusimispäivämäärän on oltava kelvollisessa päivämäärämuodossa.';
$lang['Invoices.!error.delivery.empty'] = 'Valitse laskun toimitustapa.';
$lang['Invoices.!error.delivery.exists'] = 'Ilmoitettua toimitustapaa ei ole olemassa.';
$lang['Invoices.!error.delivery.length'] = 'Laskun toimitustavan pituus ei saa ylittää 32 merkkiä.';
$lang['Invoices.!error.domain_renew.failed'] = 'Verkkotunnuksia voi uusia enintään 10 vuodeksi.';
$lang['Invoices.!error.duration.format'] = 'Kesto on virheellinen.';
$lang['Invoices.!error.id_format.empty'] = 'Laskuille ei ole määritetty tunnusmuotoa.';
$lang['Invoices.!error.id_format.length'] = 'Laskujen tunnisteen pituus saa olla enintään 64 merkkiä.';
$lang['Invoices.!error.id_value.valid'] = 'Laskun tunnisteen arvoa ei voitu määrittää.';
$lang['Invoices.!error.id.amount_applied'] = 'Laskun rivejä, valuuttaa ja tilaa ei voida päivittää, koska summa on jo kirjattu tähän laskuun.';
$lang['Invoices.!error.invoice_add.failed'] = 'Tätä laskua ei voitu luoda. Yritä uudelleen.';
$lang['Invoices.!error.invoice_id.draft'] = 'Kyseessä oleva lasku ei ole laskulomake, joten sitä ei voitu poistaa.';
$lang['Invoices.!error.invoice_id.exists'] = 'Laskun tunnus on virheellinen.';
$lang['Invoices.!error.invoice_id.status'] = 'Kohdelaskun on oltava avoin, eikä siinä saa olla yhtään tapahtumaa.';
$lang['Invoices.!error.invoice_id.unique'] = 'Kohdelaskua ei voi sisällyttää yhdistettäviin laskuihin.';
$lang['Invoices.!error.invoice_ids.client'] = 'Kaikkien laskujen on koskettava samaa asiakasta.';
$lang['Invoices.!error.invoice_ids.count'] = 'Valittavana on oltava vähintään kaksi laskua.';
$lang['Invoices.!error.invoice_ids.currency'] = 'Kaikissa laskuissa on käytettävä samaa valuuttaa.';
$lang['Invoices.!error.invoice_ids.match'] = 'Proforma-laskuja voidaan yhdistää vain muiden proforma-laskujen kanssa, ja aktiivisia laskuja vain muiden aktiivisten laskujen kanssa.';
$lang['Invoices.!error.invoice_ids.status'] = 'Kaikkien laskujen on oltava avoimia, eikä niissä saa olla mitään tapahtumia.';
$lang['Invoices.!error.invoice_recur_id.exists'] = 'Toistuvan laskun tunnus on virheellinen.';
$lang['Invoices.!error.line_items.empty_split'] = 'Laskurivejä ei ole valittu jaettavaksi.';
$lang['Invoices.!error.line_items.minimum_split'] = 'Laskussa on oltava vähintään kaksi riviä, jotta se voidaan jakaa.';
$lang['Invoices.!error.lines[][amount].format'] = 'Yksikkökustannuksen on oltava luku.';
$lang['Invoices.!error.lines[][description].empty'] = 'Kirjoita rivikohteen kuvaus.';
$lang['Invoices.!error.lines[][id].exists'] = 'Virheellinen rivitunnus.';
$lang['Invoices.!error.lines[][qty].format'] = 'Määrän on oltava luku.';
$lang['Invoices.!error.lines[][qty].minimum'] = 'Syötä määrä, joka on vähintään 1.';
$lang['Invoices.!error.lines[][service_id].exists'] = 'Virheellinen palvelutunnus.';
$lang['Invoices.!error.lines[][tax].format'] = 'Kohdeveron arvona on oltava joko ”true” tai ”false”';
$lang['Invoices.!error.method.exists'] = 'Sinun on määritettävä vähintään yksi toimitustapa.';
$lang['Invoices.!error.period.format'] = 'Piste ei ole kelvollinen.';
$lang['Invoices.!error.service.renew_onetime'] = 'Kertaluonteisia palveluita ei voi uusia.';
$lang['Invoices.!error.status.format'] = 'Virheellinen tila.';
$lang['Invoices.!error.term.bounds'] = 'Arvon tulisi olla välillä 1–65535.';
$lang['Invoices.!error.term.format'] = 'Termin tulisi olla luku.';
$lang['Invoices.!line_item.coupon_line_item_description_amount'] = 'Alennuskuponki %1$s';
$lang['Invoices.!line_item.coupon_line_item_description_percent'] = 'Kuponkikoodi %1$s - %2$s%%';
$lang['Invoices.!line_item.parent_description'] = '%1$s in lastensuojeluvirasto – %2$s:';
$lang['Invoices.!line_item.prorated_credit'] = 'Suhteutettu hyvitys';
$lang['Invoices.!line_item.recurring_renew_description'] = '%1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_cancel_fee_description'] = '%1$s - %2$s Peruutusmaksu';
$lang['Invoices.!line_item.service_option_prorated_addition'] = '↳ ” %1$s ” -ohjelman suhteutettu lisäys %2$s';
$lang['Invoices.!line_item.service_option_prorated_addition_date'] = '↳ ” %1$s ” -ohjelman lisäys suhteutettuna %2$s (%3$s - %4$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_onetime'] = '↳ ” %1$s ” -ohjelman suhteutettu lisäys %2$s';
$lang['Invoices.!line_item.service_option_prorated_addition_qty'] = '↳ ” %1$s ” -lisäys suhteutettuna %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_date'] = '↳ %1$s:n suhteutettu lisäys %2$sx %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_onetime'] = '↳ %1$s -sivuston lisäys suhteutettuna %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text'] = '↳ Lisäys suhteutettuna %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_date'] = '↳ ” %1$s ” -ohjelman (%2$s - %3$s) suhteutettu lisäys';
$lang['Invoices.!line_item.service_option_prorated_addition_text_onetime'] = '↳ Lisäys suhteutettuna %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade'] = '↳ ” %1$s ” -palvelun päivittäminen suhteutettuna ajalta %2$s alkaen %3$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_date'] = '↳ ” %1$s ” -palvelun päivittäminen suhteutettuna ajalta %2$s osoitteeseen %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_onetime'] = '↳ ” %1$s ” -palvelun päivittäminen suhteutettuna ajalta %2$s alkaen %3$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty'] = '↳ ” %1$s ” -palvelun päivittäminen suhteutettuna: %2$sx %3$s → %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_date'] = '↳ ” %1$s ” -palvelun päivittäminen suhteutettuna ajalta %2$sx %3$s osoitteeseen %4$sx %5$s (%6$s - %7$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_onetime'] = '↳ ” %1$s ” -palvelun päivittäminen suhteutettuna %2$sx %3$s -palvelusta %4$sx -palveluun %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text'] = '↳ Päivitys suhteutettuna %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_date'] = '↳ %1$s:n päivittäminen suhteutettuna käyttöaikaan (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_onetime'] = '↳ Päivitys suhteutettuna %1$s';
$lang['Invoices.!line_item.service_option_renew_description'] = '↳ %1$s - %2$s';
$lang['Invoices.!line_item.service_option_setup_fee_description'] = '↳ %1$s - %2$s Asennusmaksu';
$lang['Invoices.!line_item.service_prorated_upgrade_description'] = '%1$s:sta %2$s:iin siirtyminen suhteutettuna jäljellä olevaan tilausjaksoon – %3$s (%4$s – %5$s)';
$lang['Invoices.!line_item.service_prorated_upgrade_description_onetime'] = '%1$s:sta %2$s:iin siirtyminen suhteutettuna jäljellä olevaan tilausjaksoon - %3$s';
$lang['Invoices.!line_item.service_renew_description'] = '%5$s%1$s - ( - ) %2$s%3$s %4$s';
$lang['Invoices.!line_item.service_setup_fee_description'] = '%1$s - %2$s:n asennusmaksu';
$lang['Invoices.!note_private.line_item'] = '- %1$s @ %2$s: %3$s';
$lang['Invoices.!note_private.removed_lines'] = 'Poistetut rivit:';
$lang['Invoices.!note_private.service_cancel_date'] = 'Reitti nro%1$s on peruutettu %2$s.';
$lang['Invoices.cache_methods.json'] = 'JSON';
$lang['Invoices.cache_methods.json_pdf'] = 'JSON + PDF';
$lang['Invoices.cache_methods.none'] = 'Ei mitään';
$lang['Invoices.getDeliveryMethods.email'] = 'Sähköposti';
$lang['Invoices.getDeliveryMethods.interfax'] = 'InterFax';
$lang['Invoices.getDeliveryMethods.paper'] = 'Paperi';
$lang['Invoices.getDeliveryMethods.postalmethods'] = 'Postitusmenetelmät';
$lang['Invoices.getPricingPeriods.day'] = 'Päivä';
$lang['Invoices.getPricingPeriods.month'] = 'Kuukausi';
$lang['Invoices.getPricingPeriods.week'] = 'Viikko';
$lang['Invoices.getPricingPeriods.year'] = 'Vuosi';
$lang['Invoices.status.active'] = 'Aktiivinen';
$lang['Invoices.status.draft'] = 'Luonnos';
$lang['Invoices.status.proforma'] = 'Pro forma';
$lang['Invoices.status.void'] = 'Tyhjä';
$lang['Invoices.types.proforma'] = 'Pro forma';
$lang['Invoices.types.standard'] = 'Vakio';

