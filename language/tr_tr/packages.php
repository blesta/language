<?php
/**
 * Packages
 *
 * @package blesta
 * @subpackage blesta.language.tr_tr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Packages.!error.manual_activation.valid'] = 'Manuel aktivasyon 1 veya 0 olmalıdır.';
$lang['Packages.getStatusTypes.restricted'] = 'Kısıtlı';
$lang['Packages.getStatusTypes.inactive'] = 'Aktif değil';
$lang['Packages.getStatusTypes.active'] = 'Aktif';
$lang['Packages.getPricingPeriods.onetime_plural'] = 'Bir kez';
$lang['Packages.getPricingPeriods.year_plural'] = 'Yıllar';
$lang['Packages.getPricingPeriods.month_plural'] = 'Aylar';
$lang['Packages.getPricingPeriods.week_plural'] = 'Haftalar';
$lang['Packages.getPricingPeriods.day_plural'] = 'Günler';
$lang['Packages.getPricingPeriods.onetime'] = 'Bir kez';
$lang['Packages.getPricingPeriods.year'] = 'Yıl';
$lang['Packages.getPricingPeriods.month'] = 'Ay';
$lang['Packages.getPricingPeriods.week'] = 'Hafta';
$lang['Packages.getPricingPeriods.day'] = 'Gün';
$lang['Packages.!error.groups[].valid'] = 'Seçilen paket grubu verilen şirkete ait değildir.';
$lang['Packages.!error.groups[].exists'] = 'Geçersiz paket grubu kimliği.';
$lang['Packages.!error.pricing[][id].deletable'] = 'Bu terim bir veya daha fazla hizmet tarafından kullanıldığı için kaldırılamamıştır.';
$lang['Packages.!error.pricing[][id].format'] = 'Geçersiz paket fiyatlandırma kimliği.';
$lang['Packages.!error.pricing[][currency].in_use'] = 'Kullanımda olan bir fiyatlandırmada para birimi güncellenemez.';
$lang['Packages.!error.pricing[][currency].format'] = 'Para birimi kodu 3 karakter olmalıdır.';
$lang['Packages.!error.pricing[][cancel_fee].format'] = 'İptal ücreti bir sayı olmalıdır.';
$lang['Packages.!error.pricing[][setup_fee].format'] = 'Kurulum ücreti bir sayı olmalıdır.';
$lang['Packages.!error.pricing[][price_transfer].format'] = 'Transfer fiyatı bir sayı olmalıdır.';
$lang['Packages.!error.pricing[][price_renews].valid'] = 'Yenileme fiyatı tek bir dönem için belirlenemez.';
$lang['Packages.!error.pricing[][price_renews].format'] = 'Yenileme fiyatı bir sayı olmalıdır.';
$lang['Packages.!error.pricing[][price].format'] = 'Fiyat bir sayı olmalıdır.';
$lang['Packages.!error.pricing[][period].in_use'] = 'Kullanımda olan bir fiyatlandırmada süre güncellenemez.';
$lang['Packages.!error.pricing[][period].format'] = 'Geçersiz dönem türü.';
$lang['Packages.!error.pricing[][term].in_use'] = 'Kullanımda olan bir fiyatlandırmada terim güncellenemez.';
$lang['Packages.!error.pricing[][term].valid'] = 'Terim 0\'dan büyük olmalıdır.';
$lang['Packages.!error.pricing[][term].length'] = 'Terim uzunluğu 5 karakteri geçemez.';
$lang['Packages.!error.pricing[][term].format'] = 'Terim bir sayı olmalıdır.';
$lang['Packages.!error.email_content.parse'] = 'Şablon ayrıştırma hatası: %1$s';
$lang['Packages.!error.email_content[][lang].length'] = 'Dil uzunluğu 5 karakteri geçemez.';
$lang['Packages.!error.email_content[][lang].empty'] = 'Lütfen bir dil girin.';
$lang['Packages.!error.prorata_cutoff.format'] = 'Orantılı kesim günü 1 ile 28 arasında olmalıdır.';
$lang['Packages.!error.prorata_day.format'] = 'Orantılı gün 1 ile 28 arasında olmalıdır.';
$lang['Packages.!error.hidden.format'] = 'Bu grubun arayüzde gizlenip gizlenmeyeceği 1 veya 0 olarak ayarlanmalıdır.';
$lang['Packages.!error.status.format'] = 'Geçersiz durum.';
$lang['Packages.!error.upgrades_use_renewal.valid'] = 'Yükseltmeler için kullanım yenileme fiyatları 1 veya 0 olmalıdır.';
$lang['Packages.!error.override_price.valid'] = 'Paket fiyatını geçersiz kılma fiyatı olarak ayarlayın, 1 veya 0 olmalıdır.';
$lang['Packages.!error.single_term.valid'] = 'Tek terim ya 1 ya da 0 olmalıdır.';
$lang['Packages.!error.taxable.length'] = 'Vergilendirilebilir uzunluk 1 karakteri geçemez.';
$lang['Packages.!error.taxable.format'] = 'Vergilendirilebilir bir sayı olmalıdır.';
$lang['Packages.!error.module_group_client.valid'] = 'İstemcinin Grup Seçmesine İzin Ver 1 ya da 0 olmalıdır.';
$lang['Packages.!error.module_group.format'] = 'Geçersiz modül grubu verildi.';
$lang['Packages.!error.module_row.format'] = 'Geçersiz modül satırı verildi.';
$lang['Packages.!error.plugins[].valid'] = 'Geçersiz eklenti verildi.';
$lang['Packages.!error.option_groups[].valid'] = 'Geçersiz yapılandırılabilir paket seçeneği grubu verildi.';
$lang['Packages.!error.client_qty.format'] = 'Müşteri limiti bir sayı olmalıdır.';
$lang['Packages.!error.qty.format'] = 'Miktar bir sayı olmalıdır.';
$lang['Packages.!error.descriptions.empty_lang'] = 'Lütfen her açıklama için bir paket dil kodu belirtin.';
$lang['Packages.!error.descriptions.format'] = 'Paket açıklamaları geçersiz bir formatta.';
$lang['Packages.!error.names.empty_lang'] = 'Lütfen her bir isim için bir paket dil kodu belirtiniz.';
$lang['Packages.!error.names.empty_name'] = 'Lütfen her dil için bir paket adı belirtin.';
$lang['Packages.!error.names.format'] = 'Paket adları geçersiz bir biçimdedir.';
$lang['Packages.!error.module_id.changed'] = 'Bu paketi zaten kullanan bir veya daha fazla hizmet olduğu için modül değiştirilemez.';
$lang['Packages.!error.module_id.exists'] = 'Geçersiz modül verildi.';
$lang['Packages.!error.package_id.has_children'] = 'Bir hizmetin alt hizmetleri olduğu için paket silinemedi.';
$lang['Packages.!error.package_id.exists'] = 'Paket silinemedi çünkü şu anda bir hizmet onu kullanıyor.';
$lang['Packages.!error.company_id.exists'] = 'Geçersiz şirket verildi.';

