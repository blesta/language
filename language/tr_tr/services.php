<?php
/**
 * Services
 *
 * @package blesta
 * @subpackage blesta.language.tr_tr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Services.getActions.update_coupon'] = 'Kupon Güncelleme';
$lang['Services.getActions.change_renew'] = 'Yenileme Tarihini Değiştir';
$lang['Services.getActions.schedule_cancel'] = 'Program İptali';
$lang['Services.getActions.cancel'] = 'İptal';
$lang['Services.getActions.unsuspend'] = 'Askıdan Çıkarma';
$lang['Services.getActions.suspend'] = 'Askıya al';
$lang['Services.getStatusTypes.in_review'] = 'İncelemede';
$lang['Services.getStatusTypes.suspended'] = 'Askıya alındı';
$lang['Services.getStatusTypes.pending'] = 'Beklemede';
$lang['Services.getStatusTypes.canceled'] = 'İptal edildi';
$lang['Services.getStatusTypes.active'] = 'Aktif';
$lang['Services.!error.prorate.format'] = 'Prorasyon yapılıp yapılmayacağı \'true\' veya \'false\' olarak ayarlanmalıdır.';
$lang['Services.!error.service_id.has_children'] = 'Bu hizmet, çocuk hizmetleri olduğu için silinemeyebilir. Lütfen bu hizmetleri iptal edin veya silin ve tekrar deneyin.';
$lang['Services.!error.status.valid'] = 'Yalnızca bekleyen, iptal edilen veya incelenmekte olan hizmetler silinebilir.';
$lang['Services.!error.configoptions.valid'] = 'Seçilen yapılandırılabilir seçeneklerden biri hizmet için geçerli değil.';
$lang['Services.!error.date_canceled.valid'] = 'Bu hizmeti iptal etmek için geçerli bir tarih belirlemelisiniz.';
$lang['Services.!error.pricing_id.valid'] = 'Geçerli bir terim seçmelisiniz.';
$lang['Services.!error.invoice_method.valid'] = 'Geçerli bir fatura yöntemi seçmelisiniz.';
$lang['Services.!error.fields[][encrypted].format'] = 'Şifreleme için bir hizmet alanı geçersiz bir biçimdedir.';
$lang['Services.!error.fields[][value].empty'] = 'Hizmet alanlarından bir değer boştur.';
$lang['Services.!error.fields[][key].empty'] = 'Hizmet alanlarından bir anahtar boştur.';
$lang['Services.!error.use_module.format'] = 'Geçersiz kullanım modülü biçimi.';
$lang['Services.!error.date_canceled.format'] = 'Geçersiz iptal edilen tarih biçimi.';
$lang['Services.!error.date_suspended.format'] = 'Geçersiz askıya alınmış tarih biçimi.';
$lang['Services.!error.date_last_renewed.format'] = 'Geçersiz son yenilenen tarih biçimi.';
$lang['Services.!error.date_renews.valid'] = 'Yenileme tarihi %1$s\'nin son yenileme tarihinden büyük olmalıdır.';
$lang['Services.!error.date_renews.format'] = 'Geçersiz yenileme tarihi biçimi.';
$lang['Services.!error.date_added.format'] = 'Geçersiz tarih ekleme biçimi.';
$lang['Services.!error.status.format'] = 'Geçersiz durum.';
$lang['Services.!error.override_currency.format'] = 'Lütfen geçerli bir para birimi seçin.';
$lang['Services.!error.override_price.override'] = 'Geçerli fiyatı geçersiz kılmak için hem bir fiyat hem de para birimi ayarlanmalıdır.';
$lang['Services.!error.override_price.format'] = 'Fiyat geçersiz kılma bir sayı olmalıdır.';
$lang['Services.!error.module_group.valid'] = 'Modül grubu mevcut değil.';
$lang['Services.!error.module_row.valid'] = 'Modül satırı mevcut değil.';
$lang['Services.!error.qty.available'] = 'Miktar sınırına ulaşıldı. Mümkünse, lütfen daha küçük bir miktar seçin.';
$lang['Services.!error.qty.length'] = 'Miktar uzunluğu 10 karakteri geçemez.';
$lang['Services.!error.qty.format'] = 'Miktar bir sayı olmalıdır.';
$lang['Services.!error.coupon_id.valid'] = 'Bu kupon geçerli görünmüyor.';
$lang['Services.!error.module_row_id.exists'] = 'Geçersiz modül satır kimliği.';
$lang['Services.!error.client_id.allowed'] = 'İstemci bu pakete erişemez.';
$lang['Services.!error.client_id.exists'] = 'İstemci mevcut değil.';
$lang['Services.!error.pricing_id.overrides'] = 'Fiyat geçersiz kılmaları ayarlandığında paket süresi değiştirilemez.';
$lang['Services.!error.pricing_id.exists'] = 'Lütfen geçerli bir terim seçin.';
$lang['Services.!error.id_value.valid'] = 'Fatura kimliği değeri belirlenemiyor.';
$lang['Services.!error.id_format.length'] = 'Faturalar için kimlik formatı 64 karakteri geçemez.';
$lang['Services.!error.id_format.empty'] = 'Faturalar için kimlik formatı ayarlanmadı.';
$lang['Services.!error.package_group_id.exists'] = 'Geçersiz paket grubu kimliği.';
$lang['Services.!error.parent_service_id.parent'] = 'Üst hizmet kimliği zaten başka bir hizmetin alt hizmeti olarak mevcuttur.';
$lang['Services.!error.parent_service_id.exists'] = 'Geçersiz ana hizmet kimliği.';
$lang['Services.!error.service_id.exists'] = 'Geçersiz hizmet kimliği.';
$lang['Services.!error.move.unpaid_invoices'] = 'Ödenmemiş faturaları olduğu için hizmet başka bir müşteriye taşınamıyor.';
$lang['Services.!error.encrypted.format'] = 'Şifrelenmiş için geçersiz biçim.';
$lang['Services.!error.value.empty'] = 'Hizmet alanı değeri boş olmamalıdır.';
$lang['Services.!error.key.length'] = 'Hizmet alanı anahtarı 32 karakteri geçmemelidir.';
$lang['Services.!error.key.empty'] = 'Servis alanı anahtarı boş olmamalıdır.';
$lang['Services.getActions.uncancel'] = 'Yeniden etkinleştir';
$lang['Services.!error.uncancel.unsupported'] = 'Modül desteklemediği için bu hizmet iptal edilemez.';

