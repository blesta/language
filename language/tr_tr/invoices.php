<?php
/**
 * Invoices
 *
 * @package blesta
 * @subpackage blesta.language.tr_tr
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Invoices.!error.line_items.minimum_split'] = 'Faturanın bölünebilmesi için en az 2 satıra sahip olması gerekir.';
$lang['Invoices.!error.line_items.empty_split'] = 'Bölünecek hiçbir fatura satırı seçilmemiştir.';
$lang['Invoices.!error.lines[][tax].format'] = 'Satır kalemi vergisi \'doğru\' veya \'yanlış\' olmalıdır';
$lang['Invoices.!error.lines[][amount].format'] = 'Birim maliyet bir sayı olmalıdır.';
$lang['Invoices.!error.lines[][qty].minimum'] = 'Lütfen 1 veya daha fazla miktar girin.';
$lang['Invoices.!error.lines[][qty].format'] = 'Miktar bir sayı olmalıdır.';
$lang['Invoices.!error.lines[][description].empty'] = 'Lütfen bir satır kalemi açıklaması girin.';
$lang['Invoices.!error.lines[][service_id].exists'] = 'Geçersiz hizmet kimliği.';
$lang['Invoices.!error.lines[][id].exists'] = 'Geçersiz hat kalemi kimliği.';
$lang['Invoices.!error.domain_renew.failed'] = 'Alan adları yalnızca 10 yıla kadar yenilenebilir.';
$lang['Invoices.!error.invoice_id.draft'] = 'Verilen fatura bir taslak fatura değildir ve bu nedenle silinememiştir.';
$lang['Invoices.!error.date_last_renewed.format'] = 'Son yinelenen fatura yenileme tarihi geçerli bir tarih biçimi olmalıdır.';
$lang['Invoices.!error.date_renews.format'] = 'Yinelenen fatura yenileme tarihi geçerli bir tarih biçimi olmalıdır.';
$lang['Invoices.!error.duration.format'] = 'Süre geçersizdir.';
$lang['Invoices.!error.period.format'] = 'Süre geçersizdir.';
$lang['Invoices.!error.term.bounds'] = 'Terim 1 ile 65535 arasında olmalıdır.';
$lang['Invoices.!error.term.format'] = 'Terim bir sayı olmalıdır.';
$lang['Invoices.!error.delivery.exists'] = 'Verilen teslimat yöntemi mevcut değildir.';
$lang['Invoices.!error.currency.length'] = 'Para birimi kodu 3 karakter uzunluğunda olmalıdır.';
$lang['Invoices.!error.status.format'] = 'Geçersiz durum.';
$lang['Invoices.!error.autodebit.valid'] = 'Lütfen bu fatura için otomatik ödemeye izin verip vermeyeceğinizi seçin.';
$lang['Invoices.!error.date_autodebit.format'] = 'Son tarih geçersiz bir tarih biçimindedir.';
$lang['Invoices.!error.date_closed.format'] = 'Kapanış tarihi geçersiz bir tarih biçimindedir.';
$lang['Invoices.!error.date_due.after_billed'] = 'Son ödeme tarihi, faturalandırma tarihi veya sonrasında olmalıdır.';
$lang['Invoices.!error.date_due.format'] = 'Son tarih geçersiz bir tarih biçimindedir.';
$lang['Invoices.!error.date_billed.format'] = 'Faturalandırılan tarih geçersiz bir tarih biçimindedir.';
$lang['Invoices.!error.client_id.exists'] = 'Geçersiz istemci kimliği.';
$lang['Invoices.!error.id.amount_applied'] = 'Fatura satırları, para birimi ve durumu güncellenmeyebilir çünkü bu faturaya zaten bir tutar uygulanmıştır.';
$lang['Invoices.!error.id_value.valid'] = 'Fatura kimliği değeri belirlenemiyor.';
$lang['Invoices.!error.id_format.length'] = 'Faturalar için kimlik formatı 64 karakteri geçemez.';
$lang['Invoices.!error.id_format.empty'] = 'Faturalar için kimlik formatı ayarlanmadı.';
$lang['Invoices.!error.invoice_add.failed'] = 'Bu fatura oluşturulamadı. Lütfen tekrar deneyiniz.';
$lang['Invoices.!error.delivery.length'] = 'Fatura teslim yöntemi uzunluğu 32 karakteri geçemez.';
$lang['Invoices.!error.delivery.empty'] = 'Lütfen bir fatura teslim yöntemi girin.';
$lang['Invoices.!error.method.exists'] = 'En az bir teslimat yöntemi belirlemelisiniz.';
$lang['Invoices.!error.invoice_recur_id.exists'] = 'Geçersiz yinelenen fatura kimliği.';
$lang['Invoices.!error.invoice_id.exists'] = 'Geçersiz fatura kimliği.';
$lang['Invoices.cache_methods.json_pdf'] = 'JSON + PDF';
$lang['Invoices.cache_methods.json'] = 'JSON';
$lang['Invoices.cache_methods.none'] = 'Hiçbiri';
$lang['Invoices.types.proforma'] = 'Proforma';
$lang['Invoices.types.standard'] = 'Standart';
$lang['Invoices.status.void'] = 'Geçersiz';
$lang['Invoices.status.draft'] = 'Taslak';
$lang['Invoices.status.proforma'] = 'Proforma';
$lang['Invoices.status.active'] = 'Aktif';
$lang['Invoices.!line_item.recurring_renew_description'] = '1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.coupon_line_item_description_percent'] = 'Kupon %1$s - %2$s%%';
$lang['Invoices.!line_item.coupon_line_item_description_amount'] = 'Kupon %1$s';
$lang['Invoices.!line_item.prorated_credit'] = 'Orantılı Kredi';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_onetime'] = '↳ %1$s %2$sx %3$s\'nin Orantılı İlavesi';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_date'] = '↳ %1$s %2$sx %3$s (%4$s - %5$s)\'nin Orantılı İlavesi';
$lang['Invoices.!line_item.service_option_prorated_addition_qty'] = '↳ %1$s %2$sx %3$s\'nin Orantılı İlavesi';
$lang['Invoices.!line_item.service_option_prorated_addition_text_onetime'] = '↳ %1$s\'nin Orantılı İlavesi';
$lang['Invoices.!line_item.service_option_prorated_addition_text_date'] = '↳ %1$s\'nin Oransal İlavesi (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_text'] = '↳ %1$s\'nin Orantılı İlavesi';
$lang['Invoices.!line_item.service_option_prorated_addition_onetime'] = '↳ %1$s %2$s\'nin Orantılı İlavesi';
$lang['Invoices.!line_item.service_option_prorated_addition_date'] = '↳ %1$s %2$s (%3$s - %4$s)\'nin Orantılı İlavesi';
$lang['Invoices.!line_item.service_option_prorated_addition'] = '↳ %1$s %2$s\'nin Orantılı İlavesi';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_onetime'] = '↳ %1$s\'nin %2$sx %3$s\'den %4$sx %5$s\'ye Oransal Yükseltmesi';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_date'] = '2$sx %3$s\'den %4$sx %5$s\'ye (%6$s - %7$s) %1$s\'nin Oransal Yükseltmesi';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty'] = '↳ %1$s\'nin %2$sx %3$s\'den %4$sx %5$s\'ye Oransal Yükseltmesi';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_onetime'] = '↳ %1$s\'in Oransal Yükseltmesi';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_date'] = '↳ %1$s\'nin Oransal Yükseltmesi (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text'] = '↳ %1$s\'in Oransal Yükseltmesi';
$lang['Invoices.!line_item.service_option_prorated_upgrade_onetime'] = '↳ %1$s\'nin %2$s\'den %3$s\'ye Oransal Yükseltmesi';
$lang['Invoices.!line_item.service_option_prorated_upgrade_date'] = '↳ %1$s\'nin %2$s\'den %3$s\'ye Oransal Yükseltmesi (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade'] = '↳ %1$s\'nin %2$s\'den %3$s\'ye Oransal Yükseltmesi';
$lang['Invoices.!line_item.service_prorated_upgrade_description_onetime'] = '1$s\'den %2$s\'ye Orantılı Yükseltme - %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description'] = '1$s\'den %2$s - %3$s\'ye (%4$s - %5$s) Oransal Yükseltme';
$lang['Invoices.!line_item.service_option_setup_fee_description'] = '↳ %1$s - %2$s Kurulum Ücreti';
$lang['Invoices.!line_item.service_option_renew_description'] = '↳ %1$s - %2$s';
$lang['Invoices.!line_item.service_setup_fee_description'] = '1$s - %2$s Kurulum Ücreti';
$lang['Invoices.!line_item.service_cancel_fee_description'] = '1$s - %2$s İptal Ücreti';
$lang['Invoices.!line_item.service_renew_description'] = '5$s%1$s - %2$s (%3$s - %4$s)';
$lang['Invoices.!note_private.line_item'] = '- 1$s @ %2$s: %3$s';
$lang['Invoices.!note_private.removed_lines'] = 'Satır öğeleri kaldırıldı:';
$lang['Invoices.!note_private.service_cancel_date'] = 'Hizmet #%1$s %2$s iptal edildi.';
$lang['Invoices.getDeliveryMethods.postalmethods'] = 'PostaYöntemleri';
$lang['Invoices.getDeliveryMethods.interfax'] = 'InterFax';
$lang['Invoices.getDeliveryMethods.paper'] = 'Kağıt';
$lang['Invoices.getDeliveryMethods.email'] = 'E-posta';
$lang['Invoices.getPricingPeriods.year'] = 'Yıl';
$lang['Invoices.getPricingPeriods.month'] = 'Ay';
$lang['Invoices.getPricingPeriods.week'] = 'Hafta';
$lang['Invoices.getPricingPeriods.day'] = 'Gün';

