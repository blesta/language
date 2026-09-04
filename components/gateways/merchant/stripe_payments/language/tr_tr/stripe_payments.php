<?php
/**
 * Stripe Payments
 *
 * @package blesta
 * @subpackage blesta.language.tr_tr
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['StripePayments.!error.ach.invalid_account'] = 'Bu müşteriye ait banka hesabı bulunamadı.';
$lang['StripePayments.!error.ach.unverified'] = 'Banka hesabı doğrulanamadı. Lütfen para yatırma tutarlarını kontrol edip tekrar deneyin.';
$lang['StripePayments.!error.auth'] = 'Ağ geçidi kimlik doğrulaması yapamadı.';
$lang['StripePayments.!error.bank_account_unverified'] = 'Bir ödeme yapmak için kullanmadan önce banka hesabınızı doğrulamanız gerekir.';
$lang['StripePayments.!error.india_mandate_max_amount.format'] = 'Lütfen maksimum tekrarlanan ödeme tutarı için geçerli bir tutar girin.';
$lang['StripePayments.!error.invalid_request_error'] = 'Ödeme ağ geçidi, isteği işlerken bir hata döndürdü.';
$lang['StripePayments.!error.publishable_key.empty'] = 'Lütfen bir Yayınlanabilir Anahtar girin.';
$lang['StripePayments.!error.secret_key.empty'] = 'Lütfen bir Gizli Anahtar girin.';
$lang['StripePayments.!error.secret_key.valid'] = 'Verilen Gizli Anahtar kullanılarak Stripe API\'sine bağlanılamıyor.';
$lang['StripePayments.ach_form.field_account_number'] = 'Hesap Numarası';
$lang['StripePayments.ach_form.field_first_deposit'] = 'İlk Para Yatırma';
$lang['StripePayments.ach_form.field_holder_type'] = 'Tutucu Tipi';
$lang['StripePayments.ach_form.field_holder_type_company'] = 'Şirket';
$lang['StripePayments.ach_form.field_holder_type_individual'] = 'Bireysel';
$lang['StripePayments.ach_form.field_routing_number'] = 'Yönlendirme Numarası';
$lang['StripePayments.ach_form.field_second_deposit'] = 'İkinci Para Yatırma';
$lang['StripePayments.ach_form.field_type'] = 'Hesap Türü';
$lang['StripePayments.ach_form.mandate_authorization'] = 'Bu formu göndererek, %1$s\'in hizmetlerini kullanmanızdan ve/veya %1$s\'ten ürün satın almanızdan kaynaklanan ücretler için, %1$s\'in web sitesi ve koşulları uyarınca, bu yetki iptal edilene kadar, yukarıda belirtilen banka hesabını borçlandırması için %1$s\'e yetki vermiş olursunuz. Bu yetkiyi istediğiniz zaman %1$s\'e 30 (otuz) gün önceden bildirimde bulunarak değiştirebilir veya iptal edebilirsiniz.';
$lang['StripePayments.ach_form.mandate_future_usage'] = 'Eğer %1$s hizmetlerini kullanırsanız veya %1$s şartları uyarınca periyodik olarak ek ürünler satın alırsanız, %1$s\'e banka hesabınızı periyodik olarak borçlandırması için yetki vermiş olursunuz. Yukarıda izin verilen düzenli borçlandırmaların dışında kalan ödemeler, ancak sizin onayınız alındıktan sonra borçlandırılacaktır.';
$lang['StripePayments.ach_form.verification_notice'] = 'Kayıtlı olan banka hesabı henüz doğrulanmamıştır. Aşağıya yeni banka hesabı bilgilerini girdiğinizde mevcut hesap bilgilerinin yerine bu bilgiler geçerli olacaktır.';
$lang['StripePayments.charge_description'] = 'Ücret %1$s için';
$lang['StripePayments.charge_description_default'] = 'Belirtilen miktar için ücretlendirme';
$lang['StripePayments.description'] = 'Kredi kartlarını doğrudan Stripe üzerinden göndermek üzere 3D Secure ve SCA\'yı otomatik olarak işlemek için Stripe Elements ve Payment Request API kullanır';
$lang['StripePayments.heading_migrate_accounts'] = 'Eski Ödeme Hesaplarını Taşıma';
$lang['StripePayments.india_mandate_max_amount'] = 'Maksimum Tekrarlayan Ödeme Tutarı (Hindistan)';
$lang['StripePayments.india_mandate_max_amount_note'] = 'Hindistan’da düzenlenmiş kartlar için otomatik tekrarlanan ödemeleri etkinleştirmek için gereklidir. Bu, işleme alınan para biriminde, gelecekte yapılacak herhangi bir oturum dışı ödeme işleminde bu tür bir karttan tahsil edilebilecek azami tutardır. Hindistan kartlarının otomatik tekrarlanan ödemeler için kayıt yapılmaksızın kaydedilebilmesini sağlamak için bu alanı boş bırakın.';
$lang['StripePayments.migrate_accounts'] = 'Hesapları Taşıma';
$lang['StripePayments.name'] = 'Stripe Payments';
$lang['StripePayments.publishable_key'] = 'API Yayınlanabilir Anahtar';
$lang['StripePayments.request_three_d_secure'] = '3D Secure Kimlik Doğrulama Akışı';
$lang['StripePayments.request_three_d_secure_automatic'] = 'Stripe\'ın bir 3D Secure sorgusunun ne zaman sunulacağını belirlemesine izin verin';
$lang['StripePayments.request_three_d_secure_challenge'] = 'Bir müşteri bir ödeme yöntemini kaydettiğinde veya bir ödeme yöntemini işlediğinde (depolanmış veya depolanmamış) 3D Secure meydan okumasını sunun';
$lang['StripePayments.request_three_d_secure_frictionless'] = 'Bir müşteri bir ödeme yöntemini kaydettiğinde veya kaydedilmemiş bir ödeme yöntemini işlediğinde 3D Secure zorluğu sunma';
$lang['StripePayments.request_three_d_secure_note'] = 'Hindistan\'da bulunan bir Stripe kullanıcısıysanız, Stripe ile yeni bir kart kaydetmeden önce her zaman 3D Secure (3DS) kimlik doğrulaması gerçekleştirmelisiniz.';
$lang['StripePayments.secret_key'] = 'API Gizli Anahtarı';
$lang['StripePayments.text_accounts_remaining'] = 'Kalan Hesaplar: %1$s';
$lang['StripePayments.text_migrate_accounts'] = 'Eski Stripe ağ geçidi tarafından site dışında depolanan ödeme hesaplarını otomatik olarak bu Stripe Payments ağ geçidine taşıyabilirsiniz. Site dışında saklanmayan hesaplar, manuel olarak yeni ödeme hesapları oluşturularak taşınmalıdır. Zaman aşımlarını önlemek için geçişler %1$s\'lik gruplar halinde yapılacaktır. Tüm ödeme hesaplarını geçirmek için bunu gerektiği kadar çalıştırın.';
$lang['StripePayments.tooltip_india_mandate_max_amount'] = 'RBI düzenlemelerine göre, bu tutarın üzerindeki Hint kartlarına yapılan tekrarlayan (seans dışı) işlemlerde, müşterinin ödemeyi ayrı olarak onaylaması gerekecektir.';
$lang['StripePayments.tooltip_publishable_key'] = 'API Yayınlanabilir Anahtarınız canlı veya test moduna özeldir. Doğru anahtarı kullandığınızdan emin olun.';
$lang['StripePayments.tooltip_secret_key'] = 'API Gizli Anahtarınız canlı veya test moduna özeldir. Doğru anahtarı kullandığınızdan emin olun.';
$lang['StripePayments.warning_migrate_accounts'] = 'Bu geçiş aracını kullanmayı bitirene kadar eski Stripe ağ geçidini kaldırmayın. Bunu yapmanız aracı erişilemez hale getirecektir.';
$lang['StripePayments.webhook'] = 'Stripe Webhook';
$lang['StripePayments.webhook_note'] = 'Stripe hesabınızdaki "payment_intent" ve "charge" olayları için aşağıdaki url\'yi Webhook olarak yapılandırmanız önerilir.';

