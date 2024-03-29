<?php
/**
 * Stripe Payments
 *
 * @package blesta
 * @subpackage blesta.language.tr_tr
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['StripePayments.charge_description'] = '1$s için ücretlendirme';
$lang['StripePayments.charge_description_default'] = 'Belirtilen miktar için ücretlendirme';
$lang['StripePayments.migrate_accounts'] = 'Hesapları Taşıma';
$lang['StripePayments.warning_migrate_accounts'] = 'Bu geçiş aracını kullanmayı bitirene kadar eski Stripe ağ geçidini kaldırmayın. Bunu yapmanız aracı erişilemez hale getirecektir.';
$lang['StripePayments.text_migrate_accounts'] = 'Eski Stripe ağ geçidi tarafından site dışında depolanan ödeme hesaplarını otomatik olarak bu Stripe Payments ağ geçidine taşıyabilirsiniz. Site dışında saklanmayan hesaplar, manuel olarak yeni ödeme hesapları oluşturularak taşınmalıdır. Zaman aşımlarını önlemek için geçişler %1$s\'lik gruplar halinde yapılacaktır. Tüm ödeme hesaplarını geçirmek için bunu gerektiği kadar çalıştırın.';
$lang['StripePayments.text_accounts_remaining'] = 'Kalan Hesaplar: %1$s';
$lang['StripePayments.heading_migrate_accounts'] = 'Eski Ödeme Hesaplarını Taşıma';
$lang['StripePayments.webhook_note'] = 'Stripe hesabınızdaki "payment_intent" olayları için aşağıdaki url\'yi Webhook olarak yapılandırmanız önerilir.';
$lang['StripePayments.webhook'] = 'Stripe Webhook';
$lang['StripePayments.tooltip_secret_key'] = 'API Gizli Anahtarınız canlı veya test moduna özeldir. Doğru anahtarı kullandığınızdan emin olun.';
$lang['StripePayments.tooltip_publishable_key'] = 'API Yayınlanabilir Anahtarınız canlı veya test moduna özeldir. Doğru anahtarı kullandığınızdan emin olun.';
$lang['StripePayments.secret_key'] = 'API Gizli Anahtarı';
$lang['StripePayments.publishable_key'] = 'API Yayınlanabilir Anahtar';
$lang['StripePayments.ach_form.mandate_future_usage'] = '1$s hizmetlerini kullanırsanız veya %1$s koşulları uyarınca periyodik olarak ek ürünler satın alırsanız, %1$s\'in banka hesabınızı periyodik olarak borçlandırmasına izin verirsiniz. Yukarıda izin verilen düzenli borçlandırmaların dışında kalan ödemeler, ancak sizin onayınız alındıktan sonra borçlandırılacaktır.';
$lang['StripePayments.ach_form.mandate_authorization'] = 'Bu formu göndererek, %1$s\'in hizmetlerini kullanmanızdan ve/veya %1$s\'ten ürün satın almanızdan kaynaklanan ücretler için, %1$s\'in web sitesi ve koşulları uyarınca, bu yetki iptal edilene kadar, yukarıda belirtilen banka hesabını borçlandırması için %1$s\'e yetki vermiş olursunuz. Bu yetkiyi istediğiniz zaman %1$s\'e 30 (otuz) gün önceden bildirimde bulunarak değiştirebilir veya iptal edebilirsiniz.';
$lang['StripePayments.ach_form.field_second_deposit'] = 'İkinci Para Yatırma';
$lang['StripePayments.ach_form.field_first_deposit'] = 'İlk Para Yatırma';
$lang['StripePayments.ach_form.verification_notice'] = 'Bu banka hesabına iki küçük para yatırma işlemi gönderdik. Bu hesabı doğrulamak için lütfen bu para yatırma işlemlerinin tutarlarını teyit edin.';
$lang['StripePayments.ach_form.field_routing_number'] = 'Yönlendirme Numarası';
$lang['StripePayments.ach_form.field_account_number'] = 'Hesap Numarası';
$lang['StripePayments.ach_form.field_holder_type_company'] = 'Şirket';
$lang['StripePayments.ach_form.field_holder_type_individual'] = 'Bireysel';
$lang['StripePayments.ach_form.field_holder_type'] = 'Tutucu Tipi';
$lang['StripePayments.ach_form.field_type'] = 'Hesap Türü';
$lang['StripePayments.description'] = 'Kredi kartlarını doğrudan Stripe üzerinden göndermek üzere 3D Secure ve SCA\'yı otomatik olarak işlemek için Stripe Elements ve Payment Request API kullanır';
$lang['StripePayments.!error.invalid_request_error'] = 'Ödeme ağ geçidi, isteği işlerken bir hata döndürdü.';
$lang['StripePayments.!error.bank_account_unverified'] = 'Bir ödeme yapmak için kullanmadan önce banka hesabınızı doğrulamanız gerekir.';
$lang['StripePayments.!error.secret_key.valid'] = 'Verilen Gizli Anahtar kullanılarak Stripe API\'sine bağlanılamıyor.';
$lang['StripePayments.!error.secret_key.empty'] = 'Lütfen bir Gizli Anahtar girin.';
$lang['StripePayments.!error.publishable_key.empty'] = 'Lütfen bir Yayınlanabilir Anahtar girin.';
$lang['StripePayments.!error.auth'] = 'Ağ geçidi kimlik doğrulaması yapamadı.';
$lang['StripePayments.name'] = 'Stripe Payments';

