<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.ar_xa
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.settings.text_remove_avatar'] = 'إزالة الصورة';
$lang['AdminMain.settings.field_submit'] = 'تحديث الإعدادات';
$lang['AdminMain.settings.field_default_avatar'] = 'الصورة الرمزية الافتراضية';
$lang['AdminMain.settings.option_default'] = 'استخدام الصورة الرمزية المخصصة فقط';
$lang['AdminMain.settings.option_fallback'] = 'استخدم Gravatar ولكن تجاوزه إذا تم تعيين صورة رمزية مخصصة';
$lang['AdminMain.settings.option_gravatar'] = 'استخدام Gravatar';
$lang['AdminMain.settings.field_avatar'] = 'الصورة الرمزية';
$lang['AdminMain.settings.heading_avatar_settings'] = 'إعدادات الصورة الرمزية';
$lang['AdminMain.settings.boxtitle_settings'] = 'الإعدادات';
$lang['AdminMain.settings.page_title'] = 'مدير الدعم &gt; الإعدادات';
$lang['AdminMain.!success.settings_updated'] = 'تم تحديث الإعدادات بنجاح.';
$lang['AdminMain.!success.ai_settings_updated'] = 'تم تحديث إعدادات الذكاء الاصطناعي بنجاح.';
$lang['AdminMain.ai.page_title'] = 'مدير الدعم &gt; إعدادات الذكاء الاصطناعي';
$lang['AdminMain.settings.text_avatar_recommendation'] = 'موصى به: 150 × 150 بكسل، JPG أو PNG، 2 ميغابايت كحد أقصى';
$lang['AdminMain.ai.boxtitle_settings'] = 'إعدادات الذكاء الاصطناعي';
$lang['AdminMain.ai.warning_not_configured_title'] = 'مطلوب مفتاح واجهة برمجة تطبيقات Blesta AI API';
$lang['AdminMain.ai.warning_not_configured_text'] = 'تتطلب ميزات الذكاء الاصطناعي لمدير الدعم مفتاح واجهة برمجة تطبيقات الذكاء الاصطناعي من Blesta. يرجى تكوين مفتاح واجهة برمجة التطبيقات في إعدادات النظام &gt; الذكاء الاصطناعي قبل تمكين ميزات الذكاء الاصطناعي.';
$lang['AdminMain.ai.button_configure_ai'] = 'الانتقال إلى إعدادات الذكاء الاصطناعي للنظام';
$lang['AdminMain.ai.heading_features'] = 'ميزات الذكاء الاصطناعي';
$lang['AdminMain.ai.heading_model'] = 'تكوين النموذج';
$lang['AdminMain.ai.heading_parameters'] = 'معلمات النموذج';
$lang['AdminMain.ai.heading_system_prompt'] = 'موجه النظام';
$lang['AdminMain.ai.heading_experimental'] = 'الميزات التجريبية';
$lang['AdminMain.ai.heading_replies'] = 'الردود التلقائية';
$lang['AdminMain.ai.heading_tools'] = 'أدوات الذكاء الاصطناعي';
$lang['AdminMain.ai.field_enabled'] = 'تمكين ميزات الذكاء الاصطناعي لمدير الدعم';
$lang['AdminMain.ai.field_enabled_desc'] = 'إتاحة ميزات مدعومة بالذكاء الاصطناعي داخل نظام التذاكر، بما في ذلك الردود والملخصات والأدوات الآلية.';
$lang['AdminMain.ai.field_override_model'] = 'تجاوز نموذج الذكاء الاصطناعي الافتراضي';
$lang['AdminMain.ai.field_override_model_desc'] = 'النظام الافتراضي: %1$s';
$lang['AdminMain.ai.field_model'] = 'نموذج الذكاء الاصطناعي';
$lang['AdminMain.ai.field_model_tooltip'] = 'حدد نموذج الذكاء الاصطناعي لاستخدامه خصيصاً لميزات مدير الدعم. النماذج المختلفة لها إمكانيات وأسعار مختلفة.';
$lang['AdminMain.ai.field_model_desc'] = 'سيتم استخدام هذا النموذج لجميع ميزات الذكاء الاصطناعي في مدير الدعم.';
$lang['AdminMain.ai.field_override_max_tokens'] = 'تجاوز الحد الأقصى للرموز المميزة';
$lang['AdminMain.ai.field_override_max_tokens_desc'] = 'النظام الافتراضي: %1$s';
$lang['AdminMain.ai.field_max_tokens'] = 'ماكس توكنز';
$lang['AdminMain.ai.field_max_tokens_tooltip'] = 'الحد الأقصى لعدد الرموز (الكلمات/قطع الكلمات) التي يمكن للذكاء الاصطناعي توليدها في استجابة واحدة. تسمح القيم الأعلى بإجابات أطول ولكنها تستهلك المزيد من الموارد. النطاق النموذجي: 100-4000 لمعظم المهام.';
$lang['AdminMain.ai.field_max_tokens_desc'] = 'يتحكم في الحد الأقصى لطول الاستجابات التي يتم إنشاؤها بواسطة الذكاء الاصطناعي. افتراضي: 4000';
$lang['AdminMain.ai.field_override_temperature'] = 'تجاوز درجة الحرارة';
$lang['AdminMain.ai.field_override_temperature_desc'] = 'النظام الافتراضي: %1$s';
$lang['AdminMain.ai.field_temperature'] = 'درجة الحرارة';
$lang['AdminMain.ai.field_temperature_tooltip'] = 'يتحكم في العشوائية في الاستجابات. تنتج القيم المنخفضة (0.0-0.7) مخرجات أكثر تركيزًا وحتمية. تنتج القيم الأعلى (1.3-2.0) مخرجات أكثر إبداعًا وتنوعًا. المدى: 0.0 إلى 2.0';
$lang['AdminMain.ai.field_temperature_desc'] = 'درجة حرارة أقل = أكثر تركيزًا، ودرجة حرارة أعلى = أكثر إبداعًا. افتراضي: 1.0';
$lang['AdminMain.ai.field_system_prompt'] = 'موجه نظام مدير الدعم الإداري';
$lang['AdminMain.ai.field_system_prompt_tooltip'] = 'تحديد تعليمات محددة للذكاء الاصطناعي عند معالجة تذاكر الدعم. تتجاوز هذه المطالبة مطالبة النظام العام وتحدد سلوك الذكاء الاصطناعي على وجه التحديد داخل نظام التذاكر.';
$lang['AdminMain.ai.field_system_prompt_desc'] = 'تُستخدم هذه المطالبة خصيصاً لميزات الذكاء الاصطناعي لمدير الدعم وتتجاوز مطالبة النظام العام.';
$lang['AdminMain.ai.badge_experimental'] = 'تجريبي';
$lang['AdminMain.ai.field_auto_reply_enabled'] = 'تمكين ردود تذاكر الذكاء الاصطناعي التلقائية';
$lang['AdminMain.ai.field_auto_reply_enabled_desc'] = 'السماح للذكاء الاصطناعي بالرد تلقائياً على التذاكر عندما يكون لديه درجة عالية من اليقين بشأن الإجابة.';
$lang['AdminMain.ai.field_confidence_threshold'] = 'عتبة الثقة';
$lang['AdminMain.ai.field_confidence_threshold_tooltip'] = 'لن يقوم الذكاء الاصطناعي بالرد تلقائياً على التذاكر إلا عندما يفي مستوى الثقة بهذا الحد الأدنى أو يتجاوزه. تعتبر القيم الأعلى (90-100%) أكثر تحفظاً وأماناً. ستؤدي القيم المنخفضة (60-89%) إلى المزيد من الردود التلقائية ولكن مع ارتفاع مخاطر الأخطاء.';
$lang['AdminMain.ai.field_confidence_threshold_desc'] = 'عتبة أعلى = أكثر تحفظًا (عدد أقل من الردود التلقائية، دقة أعلى). موصى به: 70% أو أعلى.';
$lang['AdminMain.ai.field_require_human_review'] = 'اشتراط المراجعة البشرية قبل الإرسال';
$lang['AdminMain.ai.field_require_human_review_desc'] = 'يتم عرض الردود التي يتم إنشاؤها تلقائياً داخل التذكرة لاستخدام الموظفين (موصى به)';
$lang['AdminMain.ai.field_add_ai_disclaimer'] = 'إضافة إخلاء مسؤولية من إنشاء الذكاء الاصطناعي';
$lang['AdminMain.ai.field_add_ai_disclaimer_desc'] = 'إلحاق إشعار بالردود التي يتم إنشاؤها تلقائيًا للإشارة إلى أنه تم إنشاؤها بواسطة الذكاء الاصطناعي (يوصى به للشفافية)';
$lang['AdminMain.ai.field_custom_disclaimer'] = 'نص إخلاء المسؤولية مخصص';
$lang['AdminMain.ai.field_custom_disclaimer_tooltip'] = 'تخصيص رسالة إخلاء المسؤولية الملحقة بالردود التي يتم إنشاؤها بواسطة الذكاء الاصطناعي. اتركها فارغة لاستخدام الرسالة الافتراضية.';
$lang['AdminMain.ai.field_custom_disclaimer_desc'] = 'سيتم إلحاق هذا النص بجميع ردود التذاكر التي يتم إنشاؤها بواسطة الذكاء الاصطناعي.';
$lang['AdminMain.ai.field_custom_disclaimer_placeholder'] = 'تم إنشاء هذا الرد بمساعدة الذكاء الاصطناعي.';
$lang['AdminMain.ai.field_restricted_departments'] = 'تقييد الرد التلقائي على الإدارات';
$lang['AdminMain.ai.field_restricted_departments_tooltip'] = 'السماح فقط بالردود التلقائية لأقسام تذاكر محددة. اترك الكل بدون تحديد للسماح لجميع الأقسام.';
$lang['AdminMain.ai.field_restricted_departments_desc'] = 'حدد أقسام التذاكر التي يمكنها تلقي ردود الذكاء الاصطناعي التلقائية. قم بإلغاء تحديد الكل للسماح لجميع الأقسام.';
$lang['AdminMain.ai.field_assistant_name'] = 'اسم عرض مساعد الذكاء الاصطناعي';
$lang['AdminMain.ai.field_assistant_name_tooltip'] = 'الاسم الذي يظهر للردود التي يتم إنشاؤها بواسطة الذكاء الاصطناعي في سلاسل رسائل التذاكر. هذا يخصص مساعد الذكاء الاصطناعي لفريق الدعم الخاص بك.';
$lang['AdminMain.ai.field_assistant_name_desc'] = 'اتركه فارغاً لاستخدام الاسم الافتراضي: "الدعم"';
$lang['AdminMain.ai.field_assistant_name_placeholder'] = 'الدعم';
$lang['AdminMain.ai.field_analyze_trigger'] = 'مشغل تحليل الذكاء الاصطناعي';
$lang['AdminMain.ai.field_analyze_trigger_tooltip'] = 'اختر متى يجب أن يقوم الذكاء الاصطناعي بتحليل التذاكر للردود المحتملة واستخدامات الأداة. "كل رد" يحلل كل رسالة جديدة. "فتح التذكرة" يحلل فقط فتح التذكرة الأولية فقط.';
$lang['AdminMain.ai.field_analyze_trigger_desc'] = 'يتحكم في وقت تشغيل تحليل الذكاء الاصطناعي لتوليد الاستجابات وتنفيذ الأدوات.';
$lang['AdminMain.ai.option_every_reply'] = 'كل رد';
$lang['AdminMain.ai.option_ticket_opened'] = 'فتح التذكرة فقط';
$lang['AdminMain.ai.field_max_queue_age_hours'] = 'الحد الأقصى لعمر قائمة الانتظار (بالساعات)';
$lang['AdminMain.ai.field_max_queue_age_hours_tooltip'] = 'سيتم تجاهل ردود العميل الموجودة في قائمة الانتظار الأقدم من هذه القيمة من قبل cron بدلاً من معالجتها. يمنع الذكاء الاصطناعي من الرد على التذاكر القديمة إذا تم تعطيل نظام التشغيل الآلي وتراكمت التذاكر المتراكمة.';
$lang['AdminMain.ai.field_max_queue_age_hours_desc'] = 'تجاهل ردود الذكاء الاصطناعي الموجودة في قائمة الانتظار التي مضى عليها أكثر من هذا العدد من الساعات. يجب أن يكون بين 1 و8760 (سنة واحدة). الإعدادات الافتراضية 24.';
$lang['AdminMain.ai.field_tools_enabled'] = 'أدوات التمكين';
$lang['AdminMain.ai.field_tools_enabled_desc'] = 'السماح للذكاء الاصطناعي باستخدام أدوات لإدارة التذاكر مثل تغيير الأولوية، أو إغلاق التذاكر، أو التعيين إلى الموظفين.';
$lang['AdminMain.ai.field_tools_available'] = 'الأدوات المتاحة';
$lang['AdminMain.ai.field_tools_available_tooltip'] = 'حدد الأدوات المسموح للذكاء الاصطناعي باستخدامها. تتيح كل أداة إجراءات محددة يمكن للذكاء الاصطناعي تنفيذها عند معالجة التذاكر.';
$lang['AdminMain.ai.field_tool_change_priority'] = 'تغيير أولوية التذكرة';
$lang['AdminMain.ai.field_tool_change_priority_desc'] = 'السماح للذكاء الاصطناعي بتعديل أولوية التذكرة (لأعلى أو لأسفل) عندما يتم تحديد أولوية غير مناسبة من قبل العميل أو يتم اكتشافها من خلال التحليل.';
$lang['AdminMain.ai.field_tool_close_ticket'] = 'إغلاق التذكرة';
$lang['AdminMain.ai.field_tool_close_ticket_desc'] = 'اسمح للذكاء الاصطناعي بإغلاق التذاكر في حالات الرسائل غير المرغوب فيها أو الرسائل المرتدة أو المشكلات التي تم حلها بوضوح.';
$lang['AdminMain.ai.field_tool_assign_staff'] = 'التعيين إلى أحد الموظفين';
$lang['AdminMain.ai.field_tool_assign_staff_desc'] = 'السماح للذكاء الاصطناعي بتعيين تذاكر لموظفين محددين بناءً على تعليمات النظام الفورية.';
$lang['AdminMain.ai.field_tool_instructions'] = 'تعليمات استخدام الأداة';
$lang['AdminMain.ai.field_tool_instructions_tooltip'] = 'توفير إرشادات محددة للذكاء الاصطناعي حول وقت وكيفية استخدام الأدوات الممكّنة. على سبيل المثال، تحديد أسماء الموظفين ومجالات خبراتهم لتخصيص التذاكر.';
$lang['AdminMain.ai.field_tool_instructions_desc'] = 'توفير إرشادات وسيناريوهات محددة حيث يجب استخدام الأدوات. سيتم تضمين هذا النص في مطالبة النظام عند تمكين الأدوات.';
$lang['AdminMain.ai.field_tool_instructions_placeholder'] = 'مثال: - إسناد المشاكل التقنية المتعلقة بخوادم لينكس إلى جون، وخوادم ويندوز إلى ديف - إغلاق التذاكر التي من الواضح أنها رسائل غير مرغوب فيها أو الردود التلقائية أو التي يشير العميل إلى أن التذكرة قد تم حلها في آخر رد - زيادة أولوية المشاكل العاجلة التي تشير إلى "معطلة" أو "غير متصلة" إلى حالة الطوارئ - تقليل أولوية تذاكر الطوارئ إذا لم تكن حالات طوارئ فعلية';
$lang['AdminMain.ai.field_submit'] = 'حفظ إعدادات الذكاء الاصطناعي';

