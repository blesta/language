<?php
/**
 * Client Pay
 *
 * @package blesta
 * @subpackage blesta.language.fi_fi
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientPay.!error.credit_maximum'] = 'Luottosumma ei saa ylittää %1$s.';
$lang['ClientPay.!error.credit_minimum'] = 'Luottosumman on oltava vähintään %1$s.';
$lang['ClientPay.!error.invalid_amount'] = 'Muut maksusummat eivät saa olla negatiivisia.';
$lang['ClientPay.!error.invalid_details'] = 'Valitse maksutapa.';
$lang['ClientPay.!error.invoice_voided'] = 'Tämä lasku on mitätöity, eikä sitä voida maksaa.';
$lang['ClientPay.!error.payment_amounts'] = 'Valitse maksettavat laskut tai syötä toinen maksusumma.';
$lang['ClientPay.!error.payment_authorize'] = 'Maksua ei voitu hyväksyä valitulta maksutililtä. Valitse toinen tili tai yritä uudelleen.';
$lang['ClientPay.!info.ach_verification'] = 'Sinun on vahvistettava tämä tili, ennen kuin voit käyttää sitä maksujen suorittamiseen.';
$lang['ClientPay.!info.ach_verification_redirect'] = 'Sinun on vahvistettava tämä tili, ennen kuin voit käyttää sitä maksujen suorittamiseen. Tämä prosessi ohjaa sinut pois nykyiseltä sivulta.';
$lang['ClientPay.!info.unverified_email'] = 'Antamaasi sähköpostiosoitteeseen on lähetetty linkki. Napsauta sähköpostiviestissä olevaa linkkiä vahvistaaksesi sähköpostiosoitteesi, ennen kuin jatkat maksun suorittamista.';
$lang['ClientPay.!info.unverified_email_button'] = 'Lähetä vahvistussähköposti uudelleen';
$lang['ClientPay.!success.credit_full_processed'] = 'Käytettävissä olevat hyvitykset on hyvitetty.';
$lang['ClientPay.!success.credit_partial_processed'] = 'Käytettävissä olevat hyvitykset on jo huomioitu, mutta jäljellä on vielä velkaa. Viimeistele tämä maksu maksamalla jäljellä oleva summa alla.';
$lang['ClientPay.!success.invoice_paid'] = 'Tämä lasku on jo maksettu.';
$lang['ClientPay.!success.payment_processed'] = 'Maksu on käsitelty onnistuneesti osoitteelle %1$s. Tapahtumanumero: %2$s';
$lang['ClientPay.confirm.account_exp'] = 'vanhenee %1$s';
$lang['ClientPay.confirm.account_info'] = '%1$s (%2$s) päättyen %3$s';
$lang['ClientPay.confirm.account_info_type'] = '%1$s';
$lang['ClientPay.confirm.boxtitle_confirm'] = 'Vahvista maksu';
$lang['ClientPay.confirm.description_credit'] = 'Maksu-hyvitys';
$lang['ClientPay.confirm.description_invoice'] = 'Laskun numero%1$s';
$lang['ClientPay.confirm.description_invoice_number'] = '#%1$s';
$lang['ClientPay.confirm.description_invoice_separator'] = ',';
$lang['ClientPay.confirm.field_edit'] = 'Muokkaa maksua';
$lang['ClientPay.confirm.field_submit'] = 'Suorita maksu';
$lang['ClientPay.confirm.page_title'] = 'Asiakas %1$s: Vahvista maksu';
$lang['ClientPay.confirm.payment_details'] = 'Maksutiedot';
$lang['ClientPay.confirm.total'] = 'Yhteensä:';
$lang['ClientPay.index.boxtitle_pay'] = 'Suorita maksu';
$lang['ClientPay.index.field_credit'] = 'Muu maksusumma';
$lang['ClientPay.index.field_submit'] = 'Jatka';
$lang['ClientPay.index.page_title'] = 'Asiakas %1$s Pay';
$lang['ClientPay.index.text_credit_limits'] = 'Vähimmäissumma: %1$s - Enimmäissumma: %2$s';
$lang['ClientPay.index.text_credit_max_only'] = 'Enimmäismäärä: %1$s';
$lang['ClientPay.index.text_credit_min_only'] = 'Vähimmäissumma: %1$s';
$lang['ClientPay.method.boxtitle_method'] = 'Suorita maksu';
$lang['ClientPay.method.field_apply_credit'] = 'Käytä luottoa (%1$s -palvelu käytettävissä)';
$lang['ClientPay.method.field_credit_submit'] = 'Käytä luottoa ja jatka';
$lang['ClientPay.method.field_newdetails'] = 'Uudet maksutiedot';
$lang['ClientPay.method.field_paymentaccount'] = '%1$s %2$s - x %3$s%4$s';
$lang['ClientPay.method.field_paymentaccount_ach'] = 'ACH-tilit';
$lang['ClientPay.method.field_paymentaccount_autodebit'] = '(Automaattinen veloitus) %1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.field_paymentaccount_cc'] = 'Luottokorttitilit';
$lang['ClientPay.method.field_submit'] = 'Tarkista ja vahvista';
$lang['ClientPay.method.field_useaccount'] = 'Käytä maksutiliä';
$lang['ClientPay.method.heading_invoice'] = 'Laskun numero%1$s';
$lang['ClientPay.method.heading_other_payment_options'] = 'Muut maksutavat';
$lang['ClientPay.method.heading_payment_options'] = 'Maksutavat';
$lang['ClientPay.method.invoice_amount'] = 'Määrä';
$lang['ClientPay.method.invoice_balance_due'] = 'Maksettava saldo';
$lang['ClientPay.method.invoice_description'] = 'Kuvaus';
$lang['ClientPay.method.invoice_paid_amount'] = 'Maksettu summa';
$lang['ClientPay.method.invoice_quantity'] = 'Määrä';
$lang['ClientPay.method.invoice_total'] = 'Laskun kokonaissumma';
$lang['ClientPay.method.no_options'] = 'Maksutapoja ei ole saatavilla.';
$lang['ClientPay.method.page_title'] = 'Asiakas %1$s in maksutapa';
$lang['ClientPay.multipleinvoices.no_results'] = 'Tässä valuutassa ei ole laskuja.';
$lang['ClientPay.multipleinvoices.text_amount'] = 'Maksettava summa';
$lang['ClientPay.multipleinvoices.text_datedue'] = 'Eräpäivä';
$lang['ClientPay.multipleinvoices.text_due'] = 'Maksettava summa';
$lang['ClientPay.multipleinvoices.text_edit_amounts'] = 'Suorita sen sijaan osamaksu';
$lang['ClientPay.multipleinvoices.text_invoice'] = 'Laskun numero';
$lang['ClientPay.received.amount'] = 'Määrä';
$lang['ClientPay.received.boxtitle_received'] = 'Kiitos!';
$lang['ClientPay.received.invoices'] = 'Laskun numero';
$lang['ClientPay.received.page_title'] = 'Asiakas %1$s:n maksu vastaanotettu';
$lang['ClientPay.received.statement'] = 'Maksuasi käsitellään parhaillaan.';
$lang['ClientPay.received.text_try_again'] = 'Yritä uudelleen';
$lang['ClientPay.received.transaction_id'] = 'Tapahtuman tunnus';
$lang['ClientPay.setcontactview.text_none'] = 'Ei mitään';

