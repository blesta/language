<?php
/**
 * Admin System Ai
 *
 * @package blesta
 * @subpackage blesta.language.tr_tr
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemAi.!success.settings_updated'] = 'Yapay zeka ayarları başarıyla güncellendi!';
$lang['AdminSystemAi.!success.api_key_fetched'] = 'API anahtarı Blesta hesabınızdan başarıyla alındı.';
$lang['AdminSystemAi.!error.connection_failed'] = 'AI API\'ye bağlanılamadı: %1$s';
$lang['AdminSystemAi.!error.invalid_request'] = 'Geçersiz istek.';
$lang['AdminSystemAi.!error.username_required'] = 'Lütfen account.blesta.com kullanıcı adınızı girin.';
$lang['AdminSystemAi.!error.no_license_key'] = 'Blesta lisans anahtarı bulunamadı. Lütfen önce lisansınızı yapılandırın.';
$lang['AdminSystemAi.!error.auth_failed'] = 'Kimlik doğrulama başarısız oldu. Lütfen kullanıcı adınızı ve lisans anahtarınızı kontrol edin.';
$lang['AdminSystemAi.!error.request_failed'] = 'İstek başarısız oldu. Lütfen tekrar deneyin.';
$lang['AdminSystemAi.!error.api_key_required'] = 'Lütfen bir API anahtarı girin.';
$lang['AdminSystemAi.!error.invalid_api_key'] = 'Geçersiz API anahtarı.';
$lang['AdminSystemAi.index.page_title'] = 'Ayarlar &gt; Sistem &gt; AI';
$lang['AdminSystemAi.index.boxtitle_ai'] = 'AI Ayarları';
$lang['AdminSystemAi.index.field.ai_enabled'] = 'Yapay Zeka Özelliklerini Etkinleştirin';
$lang['AdminSystemAi.index.field.ai_api_key'] = 'API Anahtarı';
$lang['AdminSystemAi.index.field.ai_default_model'] = 'Varsayılan Model';
$lang['AdminSystemAi.index.field.ai_temperature'] = 'Sıcaklık';
$lang['AdminSystemAi.index.field.ai_max_tokens'] = 'Maksimum Jeton';
$lang['AdminSystemAi.index.field.submit'] = 'Ayarları Güncelle';
$lang['AdminSystemAi.index.tooltip.ai_enabled'] = 'Sistem genelinde yapay zeka özelliklerini etkinleştirin veya devre dışı bırakın.';
$lang['AdminSystemAi.index.tooltip.ai_api_key'] = 'Blesta AI API anahtarınız. Bunu account.blesta.com adresinden edinin.';
$lang['AdminSystemAi.index.tooltip.ai_default_model'] = 'Sohbet tamamlamaları için kullanılacak varsayılan yapay zeka modeli.';
$lang['AdminSystemAi.index.tooltip.ai_temperature'] = 'Rastgeleliği kontrol eder. Düşük değerler daha deterministik, yüksek değerler daha yaratıcıdır. Aralık 0.0 ila 2.0';
$lang['AdminSystemAi.index.tooltip.ai_max_tokens'] = 'Yanıtlarda oluşturulacak maksimum belirteç sayısı.';
$lang['AdminSystemAi.index.text_connected'] = 'Blesta AI\'ya başarıyla bağlandı.';
$lang['AdminSystemAi.index.text_connection_error'] = 'Blesta AI\'ye bağlanılamadı. API anahtarınızı kontrol edin.';
$lang['AdminSystemAi.index.text_balance'] = 'Bakiye: %1$s %2$s';
$lang['AdminSystemAi.index.text_temperature_range'] = '(0.0 - 2.0)';
$lang['AdminSystemAi.index.text_fetch_key'] = 'Blesta Hesabımdan Getir';
$lang['AdminSystemAi.index.text_manual_entry'] = 'API anahtarınızı manuel olarak girin veya hesabınızdan otomatik olarak alın.';
$lang['AdminSystemAi.index.text_validating'] = 'Doğrulama...';
$lang['AdminSystemAi.index.text_key_valid'] = 'API anahtarı doğrulandı ve kaydedildi';
$lang['AdminSystemAi.index.text_select_model'] = 'Bir model seçin';
$lang['AdminSystemAi.index.text_api_status'] = 'API Durumu';
$lang['AdminSystemAi.index.text_status_active'] = 'Aktif';
$lang['AdminSystemAi.index.text_remaining_credits'] = 'Kalan Krediler';
$lang['AdminSystemAi.index.text_credits_used'] = 'Kullanılan Krediler (Bu Ay)';
$lang['AdminSystemAi.index.text_last_api_call'] = 'Son API Çağrısı';
$lang['AdminSystemAi.index.text_no_calls_yet'] = 'Henüz arama yok';
$lang['AdminSystemAi.modal.heading_fetch'] = 'Blesta Hesabımdan Getir';
$lang['AdminSystemAi.modal.text_subtitle'] = 'API anahtarınızı almak için kullanıcı adınız gereklidir';
$lang['AdminSystemAi.modal.text_info'] = 'Account.blesta.com kullanıcı adınız ve Blesta lisans anahtarınız, lisansınızı doğrulamak ve otomatik olarak yeni bir Blesta AI API anahtarı almak için kullanılacaktır. Bir anahtar zaten oluşturulmuşsa, iptal edilecek ve yeni bir anahtar verilecektir.';
$lang['AdminSystemAi.modal.field.username'] = 'Kullanıcı Adı';
$lang['AdminSystemAi.modal.field.username_placeholder'] = 'Hesap kullanıcı adınızı girin';
$lang['AdminSystemAi.modal.button.authenticate'] = 'Kimlik Doğrulama';
$lang['AdminSystemAi.modal.button.cancel'] = 'İptal';
$lang['AdminSystemAi.modal.text_authenticating'] = 'Kimlik doğrulama...';
$lang['AdminSystemAi.index.heading_api'] = 'API Yapılandırması';
$lang['AdminSystemAi.index.heading_model'] = 'Varsayılan Model';
$lang['AdminSystemAi.index.heading_parameters'] = 'Model Parametreleri';
$lang['AdminSystemAi.index.heading_prompts'] = 'Sistem Uyarıları';
$lang['AdminSystemAi.index.heading_features'] = 'Etkinleştirilmiş Özellikler';
$lang['AdminSystemAi.index.field.ai_global_prompt'] = 'Global Sistem İstemi (Varsayılan)';
$lang['AdminSystemAi.index.tooltip.ai_global_prompt'] = 'Her istekle birlikte yapay zeka modeline gönderilen varsayılan talimatlar. Bu, YZ\'nin tüm özelliklerdeki davranışını ve bağlamını tanımlar.';
$lang['AdminSystemAi.index.text_global_prompt_help'] = 'Bu istem, özellik içinde geçersiz kılınmadığı sürece tüm AI özellikleri için geçerlidir.';
$lang['AdminSystemAi.index.field.ai_feature_package_descriptions'] = 'Paket Açıklamaları';
$lang['AdminSystemAi.index.text_feature_package_descriptions'] = 'Etkileyici ürün ve hizmet açıklamaları oluşturun';
$lang['AdminSystemAi.index.field.ai_feature_email_templates'] = 'E-posta Şablonları';
$lang['AdminSystemAi.index.text_feature_email_templates'] = 'Yapay zeka destekli e-posta şablonu düzenlemeleri ve iyileştirmeleri';
$lang['AdminSystemAi.index.field.ai_feature_chatbot'] = 'Chatbot';
$lang['AdminSystemAi.index.text_feature_chatbot'] = 'Personel yardımı için yapay zeka destekli chatbot';
$lang['AdminSystemAi.index.field.ai_chatbot_staff_groups'] = 'Personel Grubu Erişimi';
$lang['AdminSystemAi.index.tooltip.ai_chatbot_staff_groups'] = 'Yapay zeka sohbet robotuna hangi personel gruplarının erişebileceğini seçin. Birden fazla grup seçilebilir.';
$lang['AdminSystemAi.index.text_staff_groups_help'] = 'Birden fazla grup seçmek için Ctrl (Mac\'te Cmd) tuşunu basılı tutun.';
$lang['AdminSystemAi.index.text_features_intro'] = 'Hangi temel Blesta özelliklerinin AI yardımının etkin olması gerektiğini seçin. Eklentiler AI özelliklerine erişebilir ve bağımsız olarak yapılandırılır.';
$lang['AdminSystemAi.index.heading_beta'] = 'Beta Özellik Bildirimi';
$lang['AdminSystemAi.index.text_beta_notice'] = 'Bu özellik şu anda beta aşamasındadır ve beklenmedik veya hatalı sonuçlar üretebilir. Dikkatli kullanın.';
$lang['AdminSystemAi.index.heading_privacy'] = 'Gizlilik Bildirimi';
$lang['AdminSystemAi.index.text_privacy_notice'] = 'İstekler, işlenmek üzere üçüncü taraf AI sağlayıcılarına (ör. OpenAI, Anthropic) gönderilir. Blesta AI hizmeti, AI konuşma verilerini saklamaz; ancak, bu sağlayıcıların verileri nasıl işlediğini veya sakladığını kontrol etmiyoruz. Hassas veya gizli bilgiler göndermekten kaçının.';
$lang['AdminSystemAi.index.heading_privacy_acknowledgment'] = 'Gizlilik Bildirimi';
$lang['AdminSystemAi.index.field.ai_privacy_acknowledged'] = 'Yukarıdaki gizlilik bildirimini okudum ve anladım.';
$lang['AdminSystemAi.index.text_privacy_last_acknowledged'] = 'En son %1$s adresinde onaylanmıştır.';
$lang['AdminSystemAi.!error.privacy_not_acknowledged'] = 'Kaydetmeden önce gizlilik bildirimini kabul etmelisiniz.';
$lang['AdminSystemAi.index.heading_email_context'] = 'E-posta Şablonu Bağlam Ayarları';
$lang['AdminSystemAi.index.field.ai_email_context_depth'] = 'İlişki Derinliği';
$lang['AdminSystemAi.index.tooltip.ai_email_context_depth'] = 'Model ilişkilerinde gezinmek için maksimum derinlik. Daha yüksek değerler daha fazla ilgili veri içerir ancak token kullanımını artırır. Aralık: 1-5.';
$lang['AdminSystemAi.index.text_email_context_depth'] = 'İlişkilerin ne kadar derin takip edileceğini kontrol eder (örneğin, fatura → müşteri → kişiler). Varsayılan: 2';
$lang['AdminSystemAi.index.field.ai_email_context_schemas'] = 'Şema Tanımlarını Dahil Et';
$lang['AdminSystemAi.index.text_email_context_schemas'] = 'Alan türü bilgilerini ve veritabanı şemalarını bağlama dahil edin.';
$lang['AdminSystemAi.index.field.ai_email_context_examples'] = 'Örnek Verileri Dahil Edin';
$lang['AdminSystemAi.index.text_email_context_examples'] = 'Yapay zekanın veri formatlarını ve yapısını anlamasına yardımcı olmak için örnek veri değerleri ekleyin.';

