<?php
/**
 * Invoices
 *
 * @package blesta
 * @subpackage blesta.language.cs_cz
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Invoices.!error.lines[][tax].format'] = 'Daň z řádku musí být "true" nebo "false".';
$lang['Invoices.!error.lines[][amount].format'] = 'Jednotkové náklady musí být číslo.';
$lang['Invoices.!error.lines[][qty].minimum'] = 'Zadejte prosím množství 1 nebo více.';
$lang['Invoices.!error.lines[][qty].format'] = 'Množství musí být číslo.';
$lang['Invoices.!error.lines[][description].empty'] = 'Zadejte prosím popis položky.';
$lang['Invoices.!error.lines[][service_id].exists'] = 'Neplatné ID služby.';
$lang['Invoices.!error.lines[][id].exists'] = 'Neplatné ID položky.';
$lang['Invoices.!error.domain_renew.failed'] = 'Domény lze prodloužit pouze na dobu maximálně 10 let.';
$lang['Invoices.!error.invoice_id.draft'] = 'Daná faktura není návrhem faktury, a proto ji nebylo možné smazat.';
$lang['Invoices.!error.date_last_renewed.format'] = 'Datum obnovení poslední opakované faktury musí být platný formát data.';
$lang['Invoices.!error.date_renews.format'] = 'Datum obnovení opakované faktury musí být platný formát data.';
$lang['Invoices.!error.duration.format'] = 'Doba trvání je neplatná.';
$lang['Invoices.!error.period.format'] = 'Tečka je neplatná.';
$lang['Invoices.!error.term.bounds'] = 'Termín by měl být v rozmezí 1 až 65535.';
$lang['Invoices.!error.term.format'] = 'Termín by měl být číselný.';
$lang['Invoices.!error.delivery.exists'] = 'Uvedený způsob doručení neexistuje.';
$lang['Invoices.!error.currency.length'] = 'Kód měny musí mít délku 3 znaky.';
$lang['Invoices.!error.status.format'] = 'Neplatný stav.';
$lang['Invoices.!error.autodebit.valid'] = 'Vyberte, zda chcete pro tuto fakturu povolit automatické inkaso.';
$lang['Invoices.!error.date_autodebit.format'] = 'Datum splatnosti je v nesprávném formátu.';
$lang['Invoices.!error.date_closed.format'] = 'Datum uzávěrky je v nesprávném formátu.';
$lang['Invoices.!error.date_due.after_billed'] = 'Datum splatnosti musí být v den vyúčtování nebo po něm.';
$lang['Invoices.!error.date_due.format'] = 'Datum splatnosti je v nesprávném formátu.';
$lang['Invoices.!error.date_billed.format'] = 'Účtované datum je v nesprávném formátu.';
$lang['Invoices.!error.client_id.exists'] = 'Neplatné ID klienta.';
$lang['Invoices.!error.id.amount_applied'] = 'Řádky faktury, měna a stav nemusí být aktualizovány, protože na tuto fakturu již byla uplatněna částka.';
$lang['Invoices.!error.id_value.valid'] = 'Nelze určit hodnotu ID faktury.';
$lang['Invoices.!error.id_format.length'] = 'Formát ID pro faktury nesmí překročit 64 znaků.';
$lang['Invoices.!error.id_format.empty'] = 'Pro faktury není nastaven žádný formát ID.';
$lang['Invoices.!error.invoice_add.failed'] = 'Tuto fakturu se nepodařilo vytvořit. Zkuste to prosím znovu.';
$lang['Invoices.!error.delivery.length'] = 'Délka způsobu doručení faktury nesmí překročit 32 znaků.';
$lang['Invoices.!error.delivery.empty'] = 'Zadejte prosím způsob doručení faktury.';
$lang['Invoices.!error.method.exists'] = 'Musíte nastavit alespoň jeden způsob doručení.';
$lang['Invoices.!error.invoice_recur_id.exists'] = 'Neplatné ID opakující se faktury.';
$lang['Invoices.!error.invoice_id.exists'] = 'Neplatné ID faktury.';
$lang['Invoices.cache_methods.json_pdf'] = 'JSON + PDF';
$lang['Invoices.cache_methods.json'] = 'JSON';
$lang['Invoices.cache_methods.none'] = 'Žádné';
$lang['Invoices.types.proforma'] = 'Pro forma';
$lang['Invoices.types.standard'] = 'Standardní';
$lang['Invoices.status.void'] = 'Void';
$lang['Invoices.status.draft'] = 'Návrh';
$lang['Invoices.status.proforma'] = 'Pro forma';
$lang['Invoices.status.active'] = 'Aktivní';
$lang['Invoices.!line_item.recurring_renew_description'] = '%1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.coupon_line_item_description_percent'] = 'Kupón %1$s - %2$s%%';
$lang['Invoices.!line_item.coupon_line_item_description_amount'] = 'Kupón %1$s';
$lang['Invoices.!line_item.prorated_credit'] = 'Poměrný úvěr';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_onetime'] = '↳ Poměrné sčítání %1$s %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_date'] = '↳ Poměrné sčítání %1$s %2$sx %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_qty'] = '↳ Poměrné sčítání %1$s %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_onetime'] = '↳ Poměrné sčítání %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_date'] = '↳ Poměrné sčítání %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_text'] = '↳ Poměrné sčítání %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_onetime'] = '↳ Poměrné sčítání %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_addition_date'] = '↳ Poměrné sčítání %1$s %2$s (%3$s - %4$s)';
$lang['Invoices.!line_item.service_option_prorated_addition'] = '↳ Poměrné sčítání %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_onetime'] = '↳ Poměrná aktualizace %1$s z %2$sx %3$s na %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_date'] = '↳ Poměrná aktualizace %1$s z %2$sx %3$s na %4$sx %5$s (%6$s - %7$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty'] = '↳ Poměrná aktualizace %1$s z %2$sx %3$s na %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_onetime'] = '↳ Poměrná aktualizace %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_date'] = '↳ Poměrná aktualizace %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text'] = '↳ Poměrná aktualizace %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_onetime'] = '↳ Poměrná aktualizace %1$s z %2$s na %3$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_date'] = '↳ Poměrná aktualizace %1$s z %2$s na %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade'] = '↳ Poměrná aktualizace %1$s z %2$s na %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description_onetime'] = 'Proporcionální upgrade z %1$s na %2$s - %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description'] = 'Proporcionální upgrade z %1$s na %2$s - %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_setup_fee_description'] = '↳ %1$s - %2$s Zřizovací poplatek';
$lang['Invoices.!line_item.service_option_renew_description'] = '↳ %1$s - %2$s';
$lang['Invoices.!line_item.service_setup_fee_description'] = '%1$s - %2$s Zřizovací poplatek';
$lang['Invoices.!line_item.service_cancel_fee_description'] = '%1$s - %2$s Storno poplatek';
$lang['Invoices.!line_item.service_renew_description'] = '%5$s%1$s - %2$s (%3$s - %4$s)';
$lang['Invoices.!note_private.line_item'] = '- %1$s @ %2$s: %3$s';
$lang['Invoices.!note_private.removed_lines'] = 'Odstraněné položky:';
$lang['Invoices.!note_private.service_cancel_date'] = 'Služba #%1$s zrušena %2$s.';
$lang['Invoices.getDeliveryMethods.postalmethods'] = 'PostalMethods';
$lang['Invoices.getDeliveryMethods.interfax'] = 'InterFax';
$lang['Invoices.getDeliveryMethods.paper'] = 'Papír';
$lang['Invoices.getDeliveryMethods.email'] = 'E-mail';
$lang['Invoices.getPricingPeriods.year'] = 'Rok';
$lang['Invoices.getPricingPeriods.month'] = 'Měsíc';
$lang['Invoices.getPricingPeriods.week'] = 'Týden';
$lang['Invoices.getPricingPeriods.day'] = 'Den';
$lang['Invoices.!error.line_items.minimum_split'] = 'Faktura musí mít alespoň 2 řádky, aby mohla být rozdělena.';
$lang['Invoices.!error.line_items.empty_split'] = 'Nebyly vybrány žádné řádky faktury k rozdělení.';
$lang['Invoices.!error.invoice_id.unique'] = 'Cílová faktura nesmí být součástí slučovaných faktur.';
$lang['Invoices.!error.invoice_id.status'] = 'Cílová faktura musí být otevřená a bez transakcí.';
$lang['Invoices.!error.invoice_ids.client'] = 'Všechny faktury musí patřit stejnému klientovi.';
$lang['Invoices.!error.invoice_ids.status'] = 'Všechny faktury musí být otevřené a bez transakcí.';
$lang['Invoices.!error.invoice_ids.currency'] = 'Všechny faktury musí mít stejnou měnu.';
$lang['Invoices.!error.invoice_ids.count'] = 'Je třeba vybrat alespoň dvě faktury.';
$lang['Invoices.!line_item.parent_description'] = 'Služba pro děti %1$s - %2$s:';

