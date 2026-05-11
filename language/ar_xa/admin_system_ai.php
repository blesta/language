<?php
/**
 * Admin System Ai
 *
 * @package blesta
 * @subpackage blesta.language.ar_xa
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemAi.!success.settings_updated'] = 'تم تحديث إعدادات الذكاء الاصطناعي بنجاح!';
$lang['AdminSystemAi.!success.api_key_fetched'] = 'تم استرداد مفتاح API بنجاح من حساب Blesta الخاص بك.';
$lang['AdminSystemAi.!error.connection_failed'] = 'تعذر الاتصال بواجهة برمجة تطبيقات الذكاء الاصطناعي: %1$s';
$lang['AdminSystemAi.!error.invalid_request'] = 'طلب غير صالح.';
$lang['AdminSystemAi.!error.username_required'] = 'يُرجى إدخال اسم المستخدم الخاص بحسابك.blesta.com.';
$lang['AdminSystemAi.!error.no_license_key'] = 'لم يتم العثور على مفتاح ترخيص Blesta. يرجى تهيئة الترخيص الخاص بك أولاً.';
$lang['AdminSystemAi.!error.auth_failed'] = 'فشلت المصادقة. يرجى التحقق من اسم المستخدم ومفتاح الترخيص.';
$lang['AdminSystemAi.!error.request_failed'] = 'فشل الطلب. يرجى المحاولة مرة أخرى.';
$lang['AdminSystemAi.!error.api_key_required'] = 'يُرجى إدخال مفتاح API.';
$lang['AdminSystemAi.!error.invalid_api_key'] = 'مفتاح API غير صالح.';
$lang['AdminSystemAi.index.page_title'] = 'الإعدادات &gt; النظام &gt; الذكاء الاصطناعي';
$lang['AdminSystemAi.index.boxtitle_ai'] = 'إعدادات الذكاء الاصطناعي';
$lang['AdminSystemAi.index.field.ai_enabled'] = 'تمكين ميزات الذكاء الاصطناعي';
$lang['AdminSystemAi.index.field.ai_api_key'] = 'مفتاح واجهة برمجة التطبيقات';
$lang['AdminSystemAi.index.field.ai_default_model'] = 'النموذج الافتراضي';
$lang['AdminSystemAi.index.field.ai_temperature'] = 'درجة الحرارة';
$lang['AdminSystemAi.index.field.ai_max_tokens'] = 'ماكس توكينز';
$lang['AdminSystemAi.index.field.submit'] = 'تحديث الإعدادات';
$lang['AdminSystemAi.index.tooltip.ai_enabled'] = 'تمكين ميزات الذكاء الاصطناعي أو تعطيلها في جميع أنحاء النظام.';
$lang['AdminSystemAi.index.tooltip.ai_api_key'] = 'مفتاح واجهة برمجة التطبيقات للذكاء الاصطناعي من Blesta. احصل عليه من account.blesta.com.';
$lang['AdminSystemAi.index.tooltip.ai_default_model'] = 'نموذج الذكاء الاصطناعي الافتراضي المستخدم لإكمال الدردشة.';
$lang['AdminSystemAi.index.tooltip.ai_temperature'] = 'يتحكم في العشوائية. القيم الأقل تكون أكثر حتمية، والقيم الأعلى تكون أكثر إبداعًا. المدى: 0.0 إلى 2.0';
$lang['AdminSystemAi.index.tooltip.ai_max_tokens'] = 'الحد الأقصى لعدد الرموز المراد إنشاؤها في الردود.';
$lang['AdminSystemAi.index.text_connected'] = 'تم الاتصال بـ Blesta AI بنجاح.';
$lang['AdminSystemAi.index.text_connection_error'] = 'فشل الاتصال بـ Blesta AI. تحقق من مفتاح API الخاص بك.';
$lang['AdminSystemAi.index.text_balance'] = 'الرصيد: %1$s %2$s';
$lang['AdminSystemAi.index.text_temperature_range'] = '(0.0 - 2.0)';
$lang['AdminSystemAi.index.text_fetch_key'] = 'إحضار من حسابي في Blesta';
$lang['AdminSystemAi.index.text_manual_entry'] = 'أدخل مفتاح واجهة برمجة التطبيقات يدوياً أو أحضره تلقائياً من حسابك.';
$lang['AdminSystemAi.index.text_validating'] = 'التحقق من صحة...';
$lang['AdminSystemAi.index.text_key_valid'] = 'التحقق من صحة مفتاح API وحفظه';
$lang['AdminSystemAi.index.text_select_model'] = 'اختر الطراز';
$lang['AdminSystemAi.index.text_api_status'] = 'حالة واجهة برمجة التطبيقات';
$lang['AdminSystemAi.index.text_status_active'] = 'نشط';
$lang['AdminSystemAi.index.text_remaining_credits'] = 'الاعتمادات المتبقية';
$lang['AdminSystemAi.index.text_credits_used'] = 'الاعتمادات المستخدمة (هذا الشهر)';
$lang['AdminSystemAi.index.text_last_api_call'] = 'آخر مكالمة من واجهة برمجة التطبيقات';
$lang['AdminSystemAi.index.text_no_calls_yet'] = 'لا توجد مكالمات حتى الآن';
$lang['AdminSystemAi.modal.heading_fetch'] = 'إحضار من حسابي في Blesta';
$lang['AdminSystemAi.modal.text_subtitle'] = 'اسم المستخدم الخاص بك مطلوب لاسترداد مفتاح API الخاص بك';
$lang['AdminSystemAi.modal.text_info'] = 'سيتم استخدام اسم المستخدم الخاص بك account.blesta.com ومفتاح ترخيص Blesta الخاص بك للتحقق من صحة ترخيصك وجلب مفتاح Blesta AI API جديد تلقائيًا. إذا تم إنشاء مفتاح بالفعل، فسيتم إبطاله وإصدار مفتاح جديد.';
$lang['AdminSystemAi.modal.field.username'] = 'اسم المستخدم';
$lang['AdminSystemAi.modal.field.username_placeholder'] = 'أدخل اسم المستخدم الخاص بحسابك';
$lang['AdminSystemAi.modal.button.authenticate'] = 'المصادقة';
$lang['AdminSystemAi.modal.button.cancel'] = 'إلغاء';
$lang['AdminSystemAi.modal.text_authenticating'] = 'توثيق...';
$lang['AdminSystemAi.index.heading_api'] = 'تكوين واجهة برمجة التطبيقات (API)';
$lang['AdminSystemAi.index.heading_model'] = 'النموذج الافتراضي';
$lang['AdminSystemAi.index.heading_parameters'] = 'معلمات النموذج';
$lang['AdminSystemAi.index.heading_prompts'] = 'موجهات النظام';
$lang['AdminSystemAi.index.heading_features'] = 'الميزات الممكّنة';
$lang['AdminSystemAi.index.field.ai_global_prompt'] = 'موجه النظام العالمي (افتراضي)';
$lang['AdminSystemAi.index.tooltip.ai_global_prompt'] = 'التعليمات الافتراضية المرسلة إلى نموذج الذكاء الاصطناعي مع كل طلب. يحدد هذا سلوك الذكاء الاصطناعي وسياقه عبر جميع الميزات.';
$lang['AdminSystemAi.index.text_global_prompt_help'] = 'تنطبق هذه المطالبة على جميع ميزات الذكاء الاصطناعي ما لم يتم تجاوزها داخل الميزة.';
$lang['AdminSystemAi.index.field.ai_feature_package_descriptions'] = 'أوصاف الحزمة';
$lang['AdminSystemAi.index.text_feature_package_descriptions'] = 'إنشاء أوصاف مقنعة للمنتجات والخدمات';
$lang['AdminSystemAi.index.field.ai_feature_email_templates'] = 'قوالب البريد الإلكتروني';
$lang['AdminSystemAi.index.text_feature_email_templates'] = 'تعديلات وتحسينات في قوالب البريد الإلكتروني بمساعدة الذكاء الاصطناعي';
$lang['AdminSystemAi.index.field.ai_feature_chatbot'] = 'روبوت المحادثة';
$lang['AdminSystemAi.index.text_feature_chatbot'] = 'روبوت الدردشة الآلي المدعوم بالذكاء الاصطناعي لمساعدة الموظفين';
$lang['AdminSystemAi.index.field.ai_chatbot_staff_groups'] = 'دخول مجموعة الموظفين';
$lang['AdminSystemAi.index.tooltip.ai_chatbot_staff_groups'] = 'حدد مجموعات الموظفين التي يمكنها الوصول إلى روبوت المحادثة بالذكاء الاصطناعي. يمكن تحديد مجموعات متعددة.';
$lang['AdminSystemAi.index.text_staff_groups_help'] = 'اضغط مع الاستمرار على Ctrl (Cmd على نظام Mac) لتحديد مجموعات متعددة.';
$lang['AdminSystemAi.index.text_features_intro'] = 'حدد ميزات Blesta الأساسية التي يجب تمكين مساعدة الذكاء الاصطناعي بها. يمكن للمكونات الإضافية الوصول إلى ميزات الذكاء الاصطناعي ويتم تكوينها بشكل مستقل.';
$lang['AdminSystemAi.index.heading_beta'] = 'إشعار ميزة بيتا';
$lang['AdminSystemAi.index.text_beta_notice'] = 'هذه الميزة حاليًا في مرحلة تجريبية وقد تؤدي إلى نتائج غير متوقعة أو غير دقيقة. استخدمها بحذر.';
$lang['AdminSystemAi.index.heading_privacy'] = 'إشعار الخصوصية';
$lang['AdminSystemAi.index.text_privacy_notice'] = 'يتم إرسال الطلبات إلى موفري خدمات الذكاء الاصطناعي التابعين لجهات خارجية (مثل OpenAI وAthropic) للمعالجة. لا تقوم خدمة Blesta AI بتخزين بيانات محادثة الذكاء الاصطناعي؛ ومع ذلك، فإننا لا نتحكم في كيفية تعامل هؤلاء المزودين مع البيانات أو الاحتفاظ بها. تجنب إرسال معلومات حساسة أو سرية.';
$lang['AdminSystemAi.index.heading_privacy_acknowledgment'] = 'إقرار الخصوصية';
$lang['AdminSystemAi.index.field.ai_privacy_acknowledged'] = 'لقد قرأت وفهمت إشعار الخصوصية أعلاه.';
$lang['AdminSystemAi.index.text_privacy_last_acknowledged'] = 'آخر إقرار على %1$s.';
$lang['AdminSystemAi.!error.privacy_not_acknowledged'] = 'يجب أن توافق على إشعار الخصوصية قبل الحفظ.';
$lang['AdminSystemAi.index.heading_email_context'] = 'إعدادات سياق قالب البريد الإلكتروني';
$lang['AdminSystemAi.index.field.ai_email_context_depth'] = 'عمق العلاقة';
$lang['AdminSystemAi.index.tooltip.ai_email_context_depth'] = 'أقصى عمق لاجتياز علاقات النموذج. القيم الأعلى تتضمن المزيد من البيانات ذات الصلة ولكنها تزيد من استخدام الرمز المميز. المدى: 1-5.';
$lang['AdminSystemAi.index.text_email_context_depth'] = 'يتحكم في مدى عمق متابعة العلاقات (على سبيل المثال، الفاتورة → العميل → جهات الاتصال). افتراضي: 2';
$lang['AdminSystemAi.index.field.ai_email_context_schemas'] = 'تضمين تعريفات المخطط';
$lang['AdminSystemAi.index.text_email_context_schemas'] = 'تضمين معلومات نوع الحقل ومخططات قاعدة البيانات في السياق.';
$lang['AdminSystemAi.index.field.ai_email_context_examples'] = 'تضمين بيانات الأمثلة';
$lang['AdminSystemAi.index.text_email_context_examples'] = 'تضمين نموذج قيم بيانات لمساعدة الذكاء الاصطناعي على فهم تنسيقات البيانات وهيكلها.';

