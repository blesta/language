<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.tr_tr
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.settings.field_submit'] = 'Ayarları Güncelle';
$lang['AdminMain.settings.text_remove_avatar'] = 'Resmi Kaldır';
$lang['AdminMain.settings.field_default_avatar'] = 'Varsayılan Avatar Resmi';
$lang['AdminMain.settings.option_default'] = 'Yalnızca özel avatar kullanın';
$lang['AdminMain.settings.option_fallback'] = 'Gravatar kullanın ancak özel bir avatar ayarlanmışsa geçersiz kılın';
$lang['AdminMain.settings.option_gravatar'] = 'Gravatar kullanın';
$lang['AdminMain.settings.field_avatar'] = 'Avatar';
$lang['AdminMain.settings.heading_avatar_settings'] = 'Avatar Ayarları';
$lang['AdminMain.settings.boxtitle_settings'] = 'Ayarlar';
$lang['AdminMain.settings.page_title'] = 'Destek Yöneticisi &gt; Ayarlar';
$lang['AdminMain.!success.settings_updated'] = 'Ayarlar başarıyla güncellendi.';
$lang['AdminMain.!success.ai_settings_updated'] = 'AI ayarları başarıyla güncellendi.';
$lang['AdminMain.ai.page_title'] = 'Destek Yöneticisi &gt; AI Ayarları';
$lang['AdminMain.settings.text_avatar_recommendation'] = 'Tavsiye edilir: 150x150px, JPG veya PNG, maksimum 2MB';
$lang['AdminMain.ai.boxtitle_settings'] = 'AI Ayarları';
$lang['AdminMain.ai.warning_not_configured_title'] = 'Blesta AI API Anahtarı Gerekli';
$lang['AdminMain.ai.warning_not_configured_text'] = 'Destek Yöneticisi için AI özellikleri bir Blesta AI API anahtarı gerektirir. AI özelliklerini etkinleştirmeden önce lütfen API anahtarınızı Sistem Ayarları &gt; Yapay Zeka bölümünde yapılandırın.';
$lang['AdminMain.ai.button_configure_ai'] = 'Sistem Yapay Zeka Ayarları\'na gidin';
$lang['AdminMain.ai.heading_features'] = 'Yapay Zeka Özellikleri';
$lang['AdminMain.ai.heading_model'] = 'Model Yapılandırması';
$lang['AdminMain.ai.heading_parameters'] = 'Model Parametreleri';
$lang['AdminMain.ai.heading_system_prompt'] = 'Sistem İstemi';
$lang['AdminMain.ai.heading_experimental'] = 'Deneysel Özellikler';
$lang['AdminMain.ai.heading_replies'] = 'Otomatik Yanıtlar';
$lang['AdminMain.ai.heading_tools'] = 'Yapay Zeka Araçları';
$lang['AdminMain.ai.field_enabled'] = 'Destek Yöneticisi için Yapay Zeka Özelliklerini Etkinleştirin';
$lang['AdminMain.ai.field_enabled_desc'] = 'Otomatik yanıtlar, özetler ve araçlar dahil olmak üzere destek talebi sisteminde yapay zeka destekli özelliklere izin verin.';
$lang['AdminMain.ai.field_override_model'] = 'Varsayılan Yapay Zeka Modelini Geçersiz Kıl';
$lang['AdminMain.ai.field_override_model_desc'] = 'Sistem varsayılanı: %1$s';
$lang['AdminMain.ai.field_model'] = 'Yapay Zeka Modeli';
$lang['AdminMain.ai.field_model_tooltip'] = 'Özellikle Support Manager özellikleri için kullanılacak AI modelini seçin. Farklı modellerin farklı yetenekleri ve fiyatları vardır.';
$lang['AdminMain.ai.field_model_desc'] = 'Bu model, Destek Yöneticisindeki tüm AI özellikleri için kullanılacaktır.';
$lang['AdminMain.ai.field_override_max_tokens'] = 'Maksimum Jetonları Geçersiz Kıl';
$lang['AdminMain.ai.field_override_max_tokens_desc'] = 'Sistem varsayılanı: %1$s';
$lang['AdminMain.ai.field_max_tokens'] = 'Maksimum Jeton';
$lang['AdminMain.ai.field_max_tokens_tooltip'] = 'Yapay zekanın tek bir yanıtta üretebileceği maksimum belirteç sayısı (sözcükler/ sözcük parçaları). Daha yüksek değerler daha uzun yanıtlara izin verir ancak daha fazla kaynak tüketir. Tipik aralık: Çoğu görev için 100-4000.';
$lang['AdminMain.ai.field_max_tokens_desc'] = 'AI tarafından oluşturulan yanıtların maksimum uzunluğunu kontrol eder. Varsayılan: 4000';
$lang['AdminMain.ai.field_override_temperature'] = 'Sıcaklık Geçersiz Kılma';
$lang['AdminMain.ai.field_override_temperature_desc'] = 'Sistem varsayılanı: %1$s';
$lang['AdminMain.ai.field_temperature'] = 'Sıcaklık';
$lang['AdminMain.ai.field_temperature_tooltip'] = 'Yanıtlardaki rastgeleliği kontrol eder. Düşük değerler (0.0-0.7) daha odaklı ve deterministik çıktılar üretir. Daha yüksek değerler (1.3-2.0) daha yaratıcı ve çeşitli çıktılar üretir. Aralık: 0.0 ila 2.0';
$lang['AdminMain.ai.field_temperature_desc'] = 'Düşük sıcaklık = daha odaklanmış, yüksek sıcaklık = daha yaratıcı. Varsayılan: 1.0';
$lang['AdminMain.ai.field_system_prompt'] = 'Destek Yöneticisi Sistem İstemi';
$lang['AdminMain.ai.field_system_prompt_tooltip'] = 'Destek biletlerini işlerken YZ için özel talimatlar tanımlayın. Bu istem, genel sistem istemini geçersiz kılar ve YZ\'nin özellikle destek talebi sistemi içindeki davranışını tanımlar.';
$lang['AdminMain.ai.field_system_prompt_desc'] = 'Bu istem özellikle Support Manager AI özellikleri için kullanılır ve genel sistem istemini geçersiz kılar.';
$lang['AdminMain.ai.badge_experimental'] = 'DENEYSEL';
$lang['AdminMain.ai.field_auto_reply_enabled'] = 'Otomatik AI Bilet Yanıtlarını Etkinleştirin';
$lang['AdminMain.ai.field_auto_reply_enabled_desc'] = 'Yapay zekanın, cevap hakkında yüksek derecede kesinliğe sahip olduğunda destek taleplerini otomatik olarak yanıtlamasına izin verin.';
$lang['AdminMain.ai.field_confidence_threshold'] = 'Güven Eşiği';
$lang['AdminMain.ai.field_confidence_threshold_tooltip'] = 'AI, yalnızca güven seviyesi bu eşiği karşıladığında veya aştığında destek taleplerini otomatik olarak yanıtlayacaktır. Daha yüksek değerler (%90-100) daha muhafazakar ve daha güvenlidir. Daha düşük değerler (%60-89) daha fazla otomatik yanıtla sonuçlanır ancak hata riski daha yüksektir.';
$lang['AdminMain.ai.field_confidence_threshold_desc'] = 'Daha yüksek eşik = daha muhafazakar (daha az otomatik yanıt, daha yüksek doğruluk). Tavsiye edilir: 70 veya daha yüksek.';
$lang['AdminMain.ai.field_require_human_review'] = 'Göndermeden Önce İnsan İncelemesi Gerektirin';
$lang['AdminMain.ai.field_require_human_review_desc'] = 'Otomatik oluşturulan yanıtlar, personelin kullanımı için bilet içinde görüntülenir (Önerilen)';
$lang['AdminMain.ai.field_add_ai_disclaimer'] = 'Yapay Zeka Tarafından Oluşturulan Sorumluluk Reddi Ekleme';
$lang['AdminMain.ai.field_add_ai_disclaimer_desc'] = 'Otomatik oluşturulan yanıtlara yapay zeka tarafından oluşturulduklarını belirten bir bildirim ekleyin (Şeffaflık için önerilir)';
$lang['AdminMain.ai.field_custom_disclaimer'] = 'Özel Yasal Uyarı Metni';
$lang['AdminMain.ai.field_custom_disclaimer_tooltip'] = 'Yapay zeka tarafından oluşturulan yanıtlara eklenen sorumluluk reddi mesajını özelleştirin. Varsayılan mesajı kullanmak için boş bırakın.';
$lang['AdminMain.ai.field_custom_disclaimer_desc'] = 'Bu metin, yapay zeka tarafından oluşturulan tüm bilet yanıtlarına eklenecektir.';
$lang['AdminMain.ai.field_custom_disclaimer_placeholder'] = 'Bu yanıt yapay zeka yardımıyla oluşturulmuştur.';
$lang['AdminMain.ai.field_restricted_departments'] = 'Departmanlara Otomatik Yanıt Göndermeyi Kısıtla';
$lang['AdminMain.ai.field_restricted_departments_tooltip'] = 'Yalnızca belirli bilet departmanları için otomatik yanıtlara izin verin. Tüm departmanlara izin vermek için tümünü işaretli bırakmayın.';
$lang['AdminMain.ai.field_restricted_departments_desc'] = 'Hangi bilet departmanlarının otomatik AI yanıtları alabileceğini seçin. Tüm departmanlara izin vermek için tümünün işaretini kaldırın.';
$lang['AdminMain.ai.field_assistant_name'] = 'Yapay Zeka Asistanı Ekran Adı';
$lang['AdminMain.ai.field_assistant_name_tooltip'] = 'Destek talebi dizilerinde yapay zeka tarafından oluşturulan yanıtlar için gösterilen ad. Bu, destek ekibiniz için yapay zeka asistanını kişiselleştirir.';
$lang['AdminMain.ai.field_assistant_name_desc'] = 'Varsayılan adı kullanmak için boş bırakın: "Destek"';
$lang['AdminMain.ai.field_assistant_name_placeholder'] = 'Destek';
$lang['AdminMain.ai.field_analyze_trigger'] = 'Yapay Zeka Analiz Tetikleyicisi';
$lang['AdminMain.ai.field_analyze_trigger_tooltip'] = 'Yapay zekanın olası yanıtlar ve araç kullanımları için destek taleplerini ne zaman analiz etmesi gerektiğini seçin. "Her Yanıt" her yeni mesajı analiz eder. "Bilet Açıldı" yalnızca ilk bilet açılışını analiz eder.';
$lang['AdminMain.ai.field_analyze_trigger_desc'] = 'Yanıt oluşturmak ve araçları yürütmek için yapay zeka analizinin ne zaman tetikleneceğini kontrol eder.';
$lang['AdminMain.ai.option_every_reply'] = 'Her Cevap';
$lang['AdminMain.ai.option_ticket_opened'] = 'Sadece Bilet Açıldı';
$lang['AdminMain.ai.field_max_queue_age_hours'] = 'Maksimum Kuyruk Yaşı (Saat)';
$lang['AdminMain.ai.field_max_queue_age_hours_tooltip'] = 'Bu değerden daha eski olan kuyruktaki istemci yanıtları cron tarafından işlenmek yerine atılacaktır. Cron devre dışı bırakılmışsa ve bir birikim oluşmuşsa, AI\'nın eski biletlere yanıt vermesini önler.';
$lang['AdminMain.ai.field_max_queue_age_hours_desc'] = 'Şu kadar saatten daha eski olan kuyruktaki AI yanıtlarını atın. 1 ile 8760 (1 yıl) arasında olmalıdır. Varsayılan değer 24\'tür.';
$lang['AdminMain.ai.field_tools_enabled'] = 'Araçları Etkinleştir';
$lang['AdminMain.ai.field_tools_enabled_desc'] = 'Yapay zekanın önceliği değiştirme, destek taleplerini kapatma veya personele atama gibi destek talebi yönetimi araçlarını kullanmasına izin verin.';
$lang['AdminMain.ai.field_tools_available'] = 'Mevcut Araçlar';
$lang['AdminMain.ai.field_tools_available_tooltip'] = 'YZ\'nin hangi araçları kullanmasına izin verildiğini seçin. Her araç, YZ\'nin destek taleplerini işlerken gerçekleştirebileceği belirli eylemleri etkinleştirir.';
$lang['AdminMain.ai.field_tool_change_priority'] = 'Bilet Önceliğini Değiştir';
$lang['AdminMain.ai.field_tool_change_priority_desc'] = 'Müşteri tarafından uygun olmayan bir öncelik seçildiğinde veya analiz tarafından tespit edildiğinde AI\'nın bilet önceliğini (yukarı veya aşağı) ayarlamasına izin verin.';
$lang['AdminMain.ai.field_tool_close_ticket'] = 'Bilet Kapat';
$lang['AdminMain.ai.field_tool_close_ticket_desc'] = 'Yapay zekanın spam, geri dönen mesajlar veya açıkça çözülmüş sorunlar durumunda destek taleplerini kapatmasına izin verin.';
$lang['AdminMain.ai.field_tool_assign_staff'] = 'Personel Üyesine Atama';
$lang['AdminMain.ai.field_tool_assign_staff_desc'] = 'Yapay zekanın, sistem istem talimatlarına göre belirli personel üyelerine destek talebi atamasına izin verin.';
$lang['AdminMain.ai.field_tool_instructions'] = 'Alet Kullanım Talimatları';
$lang['AdminMain.ai.field_tool_instructions_tooltip'] = 'Etkinleştirilmiş araçların ne zaman ve nasıl kullanılacağı konusunda YZ\'ye özel rehberlik sağlayın. Örneğin, bilet ataması için personel adlarını ve uzmanlık alanlarını belirtin.';
$lang['AdminMain.ai.field_tool_instructions_desc'] = 'Araçların kullanılması gereken yerlerde talimatlar ve belirli senaryolar sağlayın. Bu metin, araçlar etkinleştirildiğinde sistem istemine dahil edilecektir.';
$lang['AdminMain.ai.field_tool_instructions_placeholder'] = 'Örnek: - Linux sunucularla ilgili teknik sorunları John\'a, Windows sunucuları Dave\'e atayın - Yalnızca açıkça spam olan, otomatik yanıtlanan veya müşterinin en son yanıtında biletin çözüldüğünü belirttiği destek taleplerini kapatın - \'Kapalı\' veya \'çevrimdışı\' ibaresi bulunan acil sorunların önceliğini Acil duruma yükseltin - Gerçek acil durum değilse Acil durum destek taleplerinin önceliğini azaltın';
$lang['AdminMain.ai.field_submit'] = 'AI Ayarlarını Kaydet';

