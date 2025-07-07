<?php
/**
 * Services
 *
 * @package blesta
 * @subpackage blesta.language.cs_cz
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Services.getActions.update_coupon'] = 'Aktualizace kupónu';
$lang['Services.getActions.change_renew'] = 'Změna data obnovení';
$lang['Services.getActions.schedule_cancel'] = 'Zrušení plánu';
$lang['Services.getActions.cancel'] = 'Zrušit';
$lang['Services.getActions.unsuspend'] = 'Odpojení';
$lang['Services.getActions.suspend'] = 'Pozastavit';
$lang['Services.getStatusTypes.in_review'] = 'V přehledu';
$lang['Services.getStatusTypes.suspended'] = 'Pozastaveno';
$lang['Services.getStatusTypes.pending'] = 'Čeká se na';
$lang['Services.getStatusTypes.canceled'] = 'Zrušeno';
$lang['Services.getStatusTypes.active'] = 'Aktivní';
$lang['Services.!error.prorate.format'] = 'Zda se má použít poměrná část, musí být nastaveno na hodnotu "true" nebo "false".';
$lang['Services.!error.service_id.has_children'] = 'Tuto službu nelze odstranit, protože obsahuje podřízené služby. Zrušte nebo odstraňte tyto služby a zkuste to znovu.';
$lang['Services.!error.status.valid'] = 'Vymazat lze pouze nevyřízené, zrušené nebo přezkoumávané služby.';
$lang['Services.!error.configoptions.valid'] = 'Jedna z vybraných konfigurovatelných možností není pro službu platná.';
$lang['Services.!error.date_canceled.valid'] = 'Pro zrušení této služby je třeba nastavit platné datum.';
$lang['Services.!error.pricing_id.valid'] = 'Musíte vybrat platný termín.';
$lang['Services.!error.invoice_method.valid'] = 'Musíte vybrat platný způsob fakturace.';
$lang['Services.!error.fields[][encrypted].format'] = 'Pole služby pro šifrování je v nesprávném formátu.';
$lang['Services.!error.fields[][value].empty'] = 'Hodnota z polí služby je prázdná.';
$lang['Services.!error.fields[][key].empty'] = 'Klíč je z polí služby prázdný.';
$lang['Services.!error.use_module.format'] = 'Neplatný formát modulu použití.';
$lang['Services.!error.date_canceled.format'] = 'Neplatný formát zrušeného data.';
$lang['Services.!error.date_suspended.format'] = 'Neplatný formát pozastaveného data.';
$lang['Services.!error.date_last_renewed.format'] = 'Neplatný formát data poslední obnovy.';
$lang['Services.!error.date_renews.valid'] = 'Datum obnovení musí být větší než datum posledního obnovení %1$s.';
$lang['Services.!error.date_renews.format'] = 'Nesprávný formát data obnovení.';
$lang['Services.!error.date_added.format'] = 'Nesprávný formát přidaného data.';
$lang['Services.!error.status.format'] = 'Neplatný stav.';
$lang['Services.!error.override_currency.format'] = 'Vyberte prosím platnou měnu.';
$lang['Services.!error.override_price.override'] = 'Pro přepsání aktuální ceny musí být nastavena cena i měna.';
$lang['Services.!error.override_price.format'] = 'Přepis ceny musí být číslo.';
$lang['Services.!error.module_group.valid'] = 'Skupina modulů neexistuje.';
$lang['Services.!error.module_row.valid'] = 'Řádek modulu neexistuje.';
$lang['Services.!error.qty.available'] = 'Dosažen množstevní limit. Pokud je to možné, zvolte prosím menší množství.';
$lang['Services.!error.qty.length'] = 'Délka množství nesmí překročit 10 znaků.';
$lang['Services.!error.qty.format'] = 'Množství musí být číslo.';
$lang['Services.!error.coupon_id.valid'] = 'Zdá se, že tento kupón není platný.';
$lang['Services.!error.module_row_id.exists'] = 'Neplatné ID řádku modulu.';
$lang['Services.!error.client_id.allowed'] = 'Klient nemá k tomuto balíčku přístup.';
$lang['Services.!error.client_id.exists'] = 'Klient neexistuje.';
$lang['Services.!error.pricing_id.overrides'] = 'Termín balíčku nelze změnit, pokud je nastaveno přepsání ceny.';
$lang['Services.!error.pricing_id.exists'] = 'Vyberte platný termín.';
$lang['Services.!error.id_value.valid'] = 'Nelze určit hodnotu ID faktury.';
$lang['Services.!error.id_format.length'] = 'Formát ID pro faktury nesmí překročit 64 znaků.';
$lang['Services.!error.id_format.empty'] = 'Pro faktury není nastaven žádný formát ID.';
$lang['Services.!error.package_group_id.exists'] = 'Neplatné ID skupiny balíčků.';
$lang['Services.!error.parent_service_id.parent'] = 'ID nadřazené služby již existuje jako podřízená služba jiné služby.';
$lang['Services.!error.parent_service_id.exists'] = 'Neplatné ID nadřazené služby.';
$lang['Services.!error.service_id.exists'] = 'Neplatné ID služby.';
$lang['Services.!error.move.unpaid_invoices'] = 'Službu nelze přesunout k jinému klientovi, protože má nezaplacené faktury.';
$lang['Services.!error.encrypted.format'] = 'Nesprávný formát pro šifrování.';
$lang['Services.!error.value.empty'] = 'Hodnota pole služby nesmí být prázdná.';
$lang['Services.!error.key.length'] = 'Klíč pole služby nesmí přesáhnout 32 znaků.';
$lang['Services.!error.key.empty'] = 'Klíč pole služby nesmí být prázdný.';
$lang['Services.getActions.uncancel'] = 'Znovu aktivovat';
$lang['Services.!error.uncancel.unsupported'] = 'Tuto službu nelze zrušit, protože ji modul nepodporuje.';

