<?php
/**
 * Invoices
 *
 * @package blesta
 * @subpackage blesta.language.ro_ro
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Invoices.!error.line_items.minimum_split'] = 'Factura trebuie să aibă cel puțin 2 linii pentru a fi divizată.';
$lang['Invoices.!error.line_items.empty_split'] = 'Nu a fost selectată nicio linie de factură pentru a fi divizată.';
$lang['Invoices.!error.lines[][tax].format'] = 'Impozitul pe articol trebuie să fie "adevărat" sau "fals".';
$lang['Invoices.!error.lines[][amount].format'] = 'Costul unitar trebuie să fie un număr.';
$lang['Invoices.!error.lines[][qty].minimum'] = 'Vă rugăm să introduceți o cantitate de 1 sau mai mult.';
$lang['Invoices.!error.lines[][qty].format'] = 'Cantitatea trebuie să fie un număr.';
$lang['Invoices.!error.lines[][description].empty'] = 'Vă rugăm să introduceți o descriere a postului.';
$lang['Invoices.!error.lines[][service_id].exists'] = 'ID de serviciu invalid.';
$lang['Invoices.!error.lines[][id].exists'] = 'ID de articol nevalabil.';
$lang['Invoices.!error.domain_renew.failed'] = 'Domeniile pot fi reînnoite doar pentru o perioadă de până la 10 ani.';
$lang['Invoices.!error.invoice_id.draft'] = 'Factura dată nu este o factură în curs de elaborare și, prin urmare, nu a putut fi ștearsă.';
$lang['Invoices.!error.date_last_renewed.format'] = 'Data ultimei reînnoiri a facturii recurente trebuie să fie un format de dată valabil.';
$lang['Invoices.!error.date_renews.format'] = 'Data de reînnoire a facturii recurente trebuie să fie un format de dată valabil.';
$lang['Invoices.!error.duration.format'] = 'Durata nu este valabilă.';
$lang['Invoices.!error.period.format'] = 'Perioada nu este valabilă.';
$lang['Invoices.!error.term.bounds'] = 'Termenul trebuie să fie cuprins între 1 și 65535.';
$lang['Invoices.!error.term.format'] = 'Termenul ar trebui să fie un număr.';
$lang['Invoices.!error.delivery.exists'] = 'Metoda de livrare indicată nu există.';
$lang['Invoices.!error.currency.length'] = 'Codul monedei trebuie să aibă o lungime de 3 caractere.';
$lang['Invoices.!error.status.format'] = 'Stare invalidă.';
$lang['Invoices.!error.autodebit.valid'] = 'Vă rugăm să selectați dacă doriți sau nu să permiteți debitarea automată pentru această factură.';
$lang['Invoices.!error.date_autodebit.format'] = 'Data scadentă are un format de dată invalid.';
$lang['Invoices.!error.date_closed.format'] = 'Data închiderii este într-un format de dată invalid.';
$lang['Invoices.!error.date_due.after_billed'] = 'Data scadentă trebuie să fie la sau după data facturării.';
$lang['Invoices.!error.date_due.format'] = 'Data scadentă are un format de dată invalid.';
$lang['Invoices.!error.date_billed.format'] = 'Data facturată are un format de dată invalid.';
$lang['Invoices.!error.client_id.exists'] = 'ID client invalid.';
$lang['Invoices.!error.id.amount_applied'] = 'Este posibil ca liniile facturii, moneda și starea să nu fie actualizate deoarece o sumă a fost deja aplicată acestei facturi.';
$lang['Invoices.!error.id_value.valid'] = 'Nu se poate determina valoarea ID-ului facturii.';
$lang['Invoices.!error.id_format.length'] = 'Formatul ID pentru facturi nu poate depăși 64 de caractere.';
$lang['Invoices.!error.id_format.empty'] = 'Nu este setat un format ID pentru facturi.';
$lang['Invoices.!error.invoice_add.failed'] = 'Această factură nu a putut fi creată. Vă rugăm să încercați din nou.';
$lang['Invoices.!error.delivery.length'] = 'Lungimea metodei de livrare a facturii nu poate depăși 32 de caractere.';
$lang['Invoices.!error.delivery.empty'] = 'Vă rugăm să introduceți o metodă de livrare a facturii.';
$lang['Invoices.!error.method.exists'] = 'Trebuie să setați cel puțin o metodă de livrare.';
$lang['Invoices.!error.invoice_recur_id.exists'] = 'ID-ul facturii recurente invalid.';
$lang['Invoices.!error.invoice_id.exists'] = 'ID-ul facturii nu este valid.';
$lang['Invoices.cache_methods.json_pdf'] = 'JSON + PDF';
$lang['Invoices.cache_methods.json'] = 'JSON';
$lang['Invoices.cache_methods.none'] = 'Nici unul';
$lang['Invoices.types.proforma'] = 'Pro forma';
$lang['Invoices.types.standard'] = 'Standard';
$lang['Invoices.status.void'] = 'Vid';
$lang['Invoices.status.draft'] = 'Proiect';
$lang['Invoices.status.proforma'] = 'Pro forma';
$lang['Invoices.status.active'] = 'Activ';
$lang['Invoices.!line_item.recurring_renew_description'] = '%1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.coupon_line_item_description_percent'] = 'Cupon %1$s - %2$s%%%';
$lang['Invoices.!line_item.coupon_line_item_description_amount'] = 'Cupon %1$s';
$lang['Invoices.!line_item.prorated_credit'] = 'Credit proporțional';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_onetime'] = '↳ Adăugare proporțională de %1$s %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_date'] = '↳ Adăugare proporțională de %1$s %2$sx %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_qty'] = '↳ Adăugare proporțională de %1$s %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_onetime'] = '↳ Adăugare proporțională de %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_date'] = '↳ Adăugare proporțională de %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_text'] = '↳ Adăugare proporțională de %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_onetime'] = '↳ Adăugare proporțională de %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_addition_date'] = '↳ Adăugare proporțională de %1$s %2$s (%3$s - %4$s)';
$lang['Invoices.!line_item.service_option_prorated_addition'] = '↳ Adăugare proporțională de %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_onetime'] = '↳ Upgrade prorărit de %1$s de la %2$sx %3$s la %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_date'] = '↳ Upgrade prorărit de %1$s de la %2$sx %3$s la %4$sx %5$s (%6$s - %7$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty'] = '↳ Upgrade prorărit de %1$s de la %2$sx %3$s la %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_onetime'] = '↳ Actualizare proporțională de %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_date'] = '↳ Actualizare proporțională de %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text'] = '↳ Actualizare proporțională de %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_onetime'] = '↳ Upgrade prorărit de la %1$s de la %2$s la %3$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_date'] = '↳ Actualizare proporțională de la %1$s de la %2$s la %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade'] = '↳ Upgrade prorărit de la %1$s de la %2$s la %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description_onetime'] = 'Actualizare prororată de la %1$s la %2$s - %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description'] = 'Actualizare prororată de la %1$s la %2$s - %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_setup_fee_description'] = '↳ %1$s - %2$s Taxa de instalare';
$lang['Invoices.!line_item.service_option_renew_description'] = '↳ %1$s - %2$s';
$lang['Invoices.!line_item.service_setup_fee_description'] = '%1$s - %2$s Taxa de instalare';
$lang['Invoices.!line_item.service_cancel_fee_description'] = '%1$s - %2$s Taxa de anulare';
$lang['Invoices.!line_item.service_renew_description'] = '%5$s%1$s - %2$s (%3$s - %4$s)';
$lang['Invoices.!note_private.line_item'] = '- %1$s @ %2$s: %3$s';
$lang['Invoices.!note_private.removed_lines'] = 'Posturi eliminate:';
$lang['Invoices.!note_private.service_cancel_date'] = 'Serviciul #%1$s a fost anulat %2$s.';
$lang['Invoices.getDeliveryMethods.postalmethods'] = 'MetodePostale';
$lang['Invoices.getDeliveryMethods.interfax'] = 'InterFax';
$lang['Invoices.getDeliveryMethods.paper'] = 'Hârtie';
$lang['Invoices.getDeliveryMethods.email'] = 'Email';
$lang['Invoices.getPricingPeriods.year'] = 'Anul';
$lang['Invoices.getPricingPeriods.month'] = 'Luna';
$lang['Invoices.getPricingPeriods.week'] = 'Săptămâna';
$lang['Invoices.getPricingPeriods.day'] = 'Ziua';

