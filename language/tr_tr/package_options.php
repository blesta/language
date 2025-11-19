<?php
/**
 * Package Options
 *
 * @package blesta
 * @subpackage blesta.language.tr_tr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PackageOptions.getfields.label_textarea'] = '%1$s';
$lang['PackageOptions.getfields.label_password'] = '%1$s';
$lang['PackageOptions.getfields.label_text'] = '%1$s';
$lang['PackageOptions.getfields.label_quantity_setup_recurring'] = 'x %1$s %2$s + %3$s kurulum (%4$s\'de yenilenir)';
$lang['PackageOptions.getfields.label_quantity_setup'] = 'x %1$s %2$s + %3$s kurulumu';
$lang['PackageOptions.getfields.label_quantity_recurring'] = 'x %1$s %2$s (%3$s\'de yenilenir)';
$lang['PackageOptions.getfields.label_quantity'] = 'x %1$s %2$s';
$lang['PackageOptions.getvaluestatuses.inactive'] = 'Aktif değil';
$lang['PackageOptions.getvaluestatuses.active'] = 'Aktif';
$lang['PackageOptions.gettypes.password'] = 'Şifre';
$lang['PackageOptions.gettypes.textarea'] = 'Metin Alanı';
$lang['PackageOptions.gettypes.text'] = 'Metin';
$lang['PackageOptions.gettypes.radio'] = 'Radyo';
$lang['PackageOptions.gettypes.quantity'] = 'Miktar';
$lang['PackageOptions.gettypes.select'] = 'Aşağı açılır';
$lang['PackageOptions.gettypes.checkbox'] = 'Onay kutusu';
$lang['PackageOptions.!error.values[][pricing][][currency].format'] = 'Para birimi kodu 3 karakter olmalıdır.';
$lang['PackageOptions.!error.values[][pricing][][setup_fee].format'] = 'Kurulum ücreti bir sayı olmalıdır.';
$lang['PackageOptions.!error.values[][pricing][][price_renews].valid'] = 'Yenileme fiyatı tek bir dönem için belirlenemez.';
$lang['PackageOptions.!error.values[][pricing][][price_renews].format'] = 'Yenileme fiyatı bir sayı olmalıdır.';
$lang['PackageOptions.!error.values[][pricing][][price].format'] = 'Fiyat bir sayı olmalıdır.';
$lang['PackageOptions.!error.values[][pricing][][period].format'] = 'Geçersiz dönem türü.';
$lang['PackageOptions.!error.values[][pricing][][term].valid'] = 'Terim 0\'dan büyük olmalıdır.';
$lang['PackageOptions.!error.values[][pricing][][term].length'] = 'Terim uzunluğu 5 karakteri geçemez.';
$lang['PackageOptions.!error.values[][pricing][][term].format'] = 'Terim bir sayı olmalıdır.';
$lang['PackageOptions.!error.values[][pricing][][id].delete_in_use'] = 'Opsiyon değeri fiyatlandırması, halihazırda bir hizmet tarafından kullanılmakta olduğu için silinemeyebilir.';
$lang['PackageOptions.!error.values[][pricing][][id].exists'] = 'Geçersiz paket seçeneği fiyatlandırma kimliği.';
$lang['PackageOptions.!error.hidden.valid'] = 'Bu seçeneğin gizlenip gizlenmeyeceği 0 veya 1 olarak ayarlanmalıdır.';
$lang['PackageOptions.!error.option_id.exists'] = 'Geçersiz paket seçeneği kimliği.';
$lang['PackageOptions.!error.groups.exists'] = 'Verilen paket seçeneği grup kimliklerinden en az biri mevcut değil veya aynı şirkete ait değil.';
$lang['PackageOptions.!error.values[][id].exists'] = 'Geçersiz paket seçeneği değer kimliği.';
$lang['PackageOptions.!error.values[][default].format'] = 'Varsayılan değer bir sayı olmalıdır.';
$lang['PackageOptions.!error.values[][default].qty_valid'] = 'Seçilen varsayılan değer miktarı yapılandırılan min, maks ve adım için geçersizdir.';
$lang['PackageOptions.!error.values[][default].inactive'] = 'Etkin olmayan bir seçenek değeri varsayılan değer olarak ayarlanamaz.';
$lang['PackageOptions.!error.values[][status].valid'] = 'Lütfen geçerli bir seçenek değeri durumu seçin.';
$lang['PackageOptions.!error.values[][value].delete_in_use'] = 'Opsiyon değeri şu anda bir hizmet tarafından kullanılmakta olduğu için silinemez.';
$lang['PackageOptions.!error.values[][value].edit_in_use'] = 'Seçenek değeri değiştirilemez çünkü o anda bir hizmet tarafından kullanılmaktadır.';
$lang['PackageOptions.!error.values[][value].length'] = 'Seçenek değerinin uzunluğu 255 karakteri geçemez.';
$lang['PackageOptions.!error.values[][name].length'] = 'Seçenek değeri adının uzunluğu 128 karakteri geçemez.';
$lang['PackageOptions.!error.values[][name].empty'] = 'Lütfen seçenek değeri için bir ad girin.';
$lang['PackageOptions.!error.values[][max].valid'] = 'Maksimum limit değeri yalnızca miktar türü için ayarlanabilir ve 1 veya daha büyük bir değer olmalıdır.';
$lang['PackageOptions.!error.values[][min].valid'] = 'Minimum sınır değeri yalnızca miktar türü için belirlenebilir ve 0 veya daha büyük bir değer olmalıdır.';
$lang['PackageOptions.!error.values[][step].valid'] = 'Bir adım değeri yalnızca miktar türü için ayarlanabilir ve 1 veya daha büyük bir değer olmalıdır.';
$lang['PackageOptions.!error.values.single_default_value'] = 'Varsayılan değer olarak yalnızca bir değer seçilebilir.';
$lang['PackageOptions.!error.values.active_status'] = 'En az bir seçenek değeri etkin olmalıdır.';
$lang['PackageOptions.!error.values.select_value'] = 'En az bir seçenek değeri geçersiz özel karakterler içeriyor.';
$lang['PackageOptions.!error.values.unique'] = 'Seçenek değerleri benzersiz olmalıdır.';
$lang['PackageOptions.!error.values.count'] = 'Onay kutusu, miktar, metin, metin alanı veya şifre türleri için yalnızca bir seçenek değeri girişi olabilir.';
$lang['PackageOptions.!error.type.valid'] = 'Lütfen bir seçenek türü seçin.';
$lang['PackageOptions.!error.name.length'] = 'Adın uzunluğu 128 karakteri geçemez.';
$lang['PackageOptions.!error.name.empty'] = 'Lütfen bu seçenek için bir ad girin.';
$lang['PackageOptions.!error.label.length'] = 'Etiketin uzunluğu 128 karakteri geçemez.';
$lang['PackageOptions.!error.label.empty'] = 'Lütfen bir etiket girin.';
$lang['PackageOptions.!error.company_id.exists'] = 'Geçersiz şirket kimliği.';
$lang['PackageOptions.getfields.label_textarea_setup_recurring'] = '%1$s + %2$s kurulum (%3$s tarihinde yenilenir)';
$lang['PackageOptions.getfields.label_textarea_setup'] = '%1$s + %2$s kurulumu';
$lang['PackageOptions.getfields.label_textarea_recurring'] = '%1$s (%2$s tarihinde yenilenir)';
$lang['PackageOptions.getfields.label_password_setup_recurring'] = '%1$s + %2$s kurulum (%3$s tarihinde yenilenir)';
$lang['PackageOptions.getfields.label_password_setup'] = '%1$s + %2$s kurulumu';
$lang['PackageOptions.getfields.label_password_recurring'] = '%1$s (%2$s tarihinde yenilenir)';
$lang['PackageOptions.getfields.label_text_setup_recurring'] = '%1$s + %2$s kurulum (%3$s tarihinde yenilenir)';
$lang['PackageOptions.getfields.label_text_setup'] = '%1$s + %2$s kurulumu';
$lang['PackageOptions.getfields.label_text_recurring'] = '%1$s (%2$s tarihinde yenilenir)';
$lang['PackageOptions.getfields.label_checkbox_setup_recurring'] = '{1$s} (%2$s + %3$s kurulum, %4$s tarihinde yenilenir)';
$lang['PackageOptions.getfields.label_checkbox_setup'] = '%1$s (%2$s + %3$s kurulum)';
$lang['PackageOptions.getfields.label_checkbox_recurring'] = '%1$s (%2$s, yeniler @ %3$s)';
$lang['PackageOptions.getfields.label_checkbox'] = '%1$s (%2$s)';
$lang['PackageOptions.getfields.label_select_setup_recurring'] = '{1$s} (%2$s + %3$s kurulum, %4$s tarihinde yenilenir)';
$lang['PackageOptions.getfields.label_select_recurring'] = '%1$s (%2$s, yeniler @ %3$s)';
$lang['PackageOptions.getfields.label_select_setup'] = '%1$s (%2$s + %3$s kurulum)';
$lang['PackageOptions.getfields.label_select'] = '%1$s (%2$s)';
$lang['PackageOptions.getfields.label_radio_setup_recurring'] = '{1$s} (%2$s + %3$s kurulum, %4$s tarihinde yenilenir)';
$lang['PackageOptions.getfields.label_radio_setup'] = '%1$s (%2$s + %3$s kurulum)';
$lang['PackageOptions.getfields.label_radio'] = '%1$s (%2$s)';
$lang['PackageOptions.getfields.label_radio_recurring'] = '%1$s (%2$s, yeniler @ %3$s)';
$lang['PackageOptions.!error.hide_on_invoice.valid'] = 'Faturada gizlenip gizlenmeyeceği 0 veya 1 olarak ayarlanmalıdır.';
$lang['PackageOptions.!error.disable_pricing.valid'] = 'Fiyatlandırmanın devre dışı bırakılıp bırakılmayacağı 0 veya 1 olarak ayarlanmalıdır.';

