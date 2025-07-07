<?php
/**
 * Services
 *
 * @package blesta
 * @subpackage blesta.language.ro_ro
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Services.getActions.update_coupon'] = 'Cupon de actualizare';
$lang['Services.getActions.change_renew'] = 'Modificarea datei de reînnoire';
$lang['Services.getActions.schedule_cancel'] = 'Anulare program';
$lang['Services.getActions.cancel'] = 'Anulează';
$lang['Services.getActions.unsuspend'] = 'Desuspendare';
$lang['Services.getActions.suspend'] = 'Suspendați';
$lang['Services.getStatusTypes.in_review'] = 'În revistă';
$lang['Services.getStatusTypes.suspended'] = 'Suspendat';
$lang['Services.getStatusTypes.pending'] = 'În așteptare';
$lang['Services.getStatusTypes.canceled'] = 'Anulat';
$lang['Services.getStatusTypes.active'] = 'Activ';
$lang['Services.!error.prorate.format'] = 'Dacă trebuie să se facă prorate trebuie să fie setat la "true" sau "false".';
$lang['Services.!error.service_id.has_children'] = 'Acest serviciu nu poate fi eliminat deoarece are servicii copii. Vă rugăm să anulați sau să ștergeți aceste servicii și să încercați din nou.';
$lang['Services.!error.status.valid'] = 'Numai serviciile în așteptare, anulate sau în curs de revizuire pot fi șterse.';
$lang['Services.!error.configoptions.valid'] = 'Una dintre opțiunile configurabile selectate nu este valabilă pentru serviciul respectiv.';
$lang['Services.!error.date_canceled.valid'] = 'Trebuie să stabiliți o dată validă pentru a anula acest serviciu.';
$lang['Services.!error.pricing_id.valid'] = 'Trebuie să selectați un termen valabil.';
$lang['Services.!error.invoice_method.valid'] = 'Trebuie să selectați o metodă de facturare valabilă.';
$lang['Services.!error.fields[][encrypted].format'] = 'Un câmp de serviciu pentru criptare are un format invalid.';
$lang['Services.!error.fields[][value].empty'] = 'O valoare este goală din câmpurile de servicii.';
$lang['Services.!error.fields[][key].empty'] = 'O cheie este goală din câmpurile de servicii.';
$lang['Services.!error.use_module.format'] = 'Formatul modulului de utilizare nu este valid.';
$lang['Services.!error.date_canceled.format'] = 'Format de dată anulată nevalabil.';
$lang['Services.!error.date_suspended.format'] = 'Format de dată suspendată nevalabil.';
$lang['Services.!error.date_last_renewed.format'] = 'Formatul ultimei reînnoiri nu este valid.';
$lang['Services.!error.date_renews.valid'] = 'Data reînnoirii trebuie să fie mai mare decât ultima dată de reînnoire a %1$s.';
$lang['Services.!error.date_renews.format'] = 'Format de dată de reînnoire invalid.';
$lang['Services.!error.date_added.format'] = 'Formatul datei adăugate nu este valid.';
$lang['Services.!error.status.format'] = 'Stare invalidă.';
$lang['Services.!error.override_currency.format'] = 'Vă rugăm să selectați o monedă valabilă.';
$lang['Services.!error.override_price.override'] = 'Trebuie să setați atât un preț, cât și o monedă pentru a înlocui prețul curent.';
$lang['Services.!error.override_price.format'] = 'Prețul de înlocuire trebuie să fie un număr.';
$lang['Services.!error.module_group.valid'] = 'Grupul de module nu există.';
$lang['Services.!error.module_row.valid'] = 'Rândul modulului nu există.';
$lang['Services.!error.qty.available'] = 'S-a atins limita de cantitate. Dacă este posibil, vă rugăm să selectați o cantitate mai mică.';
$lang['Services.!error.qty.length'] = 'Lungimea cantității nu poate depăși 10 caractere.';
$lang['Services.!error.qty.format'] = 'Cantitatea trebuie să fie un număr.';
$lang['Services.!error.coupon_id.valid'] = 'Acest cupon nu pare a fi valabil.';
$lang['Services.!error.module_row_id.exists'] = 'ID de rând de modul invalid.';
$lang['Services.!error.client_id.allowed'] = 'Clientul nu poate accesa pachetul respectiv.';
$lang['Services.!error.client_id.exists'] = 'Clientul nu există.';
$lang['Services.!error.pricing_id.overrides'] = 'Termenul pachetului nu poate fi modificat atunci când sunt stabilite suprapuneri de preț.';
$lang['Services.!error.pricing_id.exists'] = 'Vă rugăm să selectați un termen valabil.';
$lang['Services.!error.id_value.valid'] = 'Nu se poate determina valoarea ID-ului facturii.';
$lang['Services.!error.id_format.length'] = 'Formatul ID pentru facturi nu poate depăși 64 de caractere.';
$lang['Services.!error.id_format.empty'] = 'Nu este setat un format ID pentru facturi.';
$lang['Services.!error.package_group_id.exists'] = 'ID-ul grupului de pachete nu este valid.';
$lang['Services.!error.parent_service_id.parent'] = 'ID-ul serviciului părinte există deja în calitate de copil al unui alt serviciu.';
$lang['Services.!error.parent_service_id.exists'] = 'ID-ul serviciului părinte invalid.';
$lang['Services.!error.service_id.exists'] = 'ID de serviciu invalid.';
$lang['Services.!error.move.unpaid_invoices'] = 'Serviciul nu poate fi mutat la un alt client, deoarece are facturi neplătite.';
$lang['Services.!error.encrypted.format'] = 'Format nevalabil pentru criptat.';
$lang['Services.!error.value.empty'] = 'Valoarea câmpului "Service" nu trebuie să fie goală.';
$lang['Services.!error.key.length'] = 'Cheia câmpului de servicii nu trebuie să depășească 32 de caractere.';
$lang['Services.!error.key.empty'] = 'Cheia câmpului de serviciu nu trebuie să fie goală.';
$lang['Services.getActions.uncancel'] = 'Reactivați';
$lang['Services.!error.uncancel.unsupported'] = 'Acest serviciu nu poate fi anulat, deoarece modulul nu îl acceptă.';

