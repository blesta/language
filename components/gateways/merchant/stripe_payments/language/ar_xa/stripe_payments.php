<?php
/**
 * Stripe Payments
 *
 * @package blesta
 * @subpackage blesta.language.ar_xa
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['StripePayments.!error.ach.invalid_account'] = 'لم يتم العثور على الحساب المصرفي لهذا العميل.';
$lang['StripePayments.!error.ach.unverified'] = 'تعذر التحقق من الحساب المصرفي. يرجى التأكد من مبالغ الإيداع ومحاولة الإجراء مرة أخرى.';
$lang['StripePayments.!error.auth'] = 'تعذر على البوابة المصادقة.';
$lang['StripePayments.!error.bank_account_unverified'] = 'تحتاج إلى التحقق من حسابك المصرفي قبل أن تتمكن من استخدامه لإجراء عملية دفع.';
$lang['StripePayments.!error.india_mandate_max_amount.format'] = 'يرجى إدخال مبلغ صحيح كحد أقصى للرسوم المتكررة.';
$lang['StripePayments.!error.invalid_request_error'] = 'قامت بوابة الدفع بإرجاع خطأ عند معالجة الطلب.';
$lang['StripePayments.!error.publishable_key.empty'] = 'الرجاء إدخال مفتاح قابل للنشر.';
$lang['StripePayments.!error.secret_key.empty'] = 'الرجاء إدخال المفتاح السري.';
$lang['StripePayments.!error.secret_key.valid'] = 'غير قادر على الاتصال بواجهة برمجة تطبيقات Stripe باستخدام المفتاح السري المحدد.';
$lang['StripePayments.ach_form.field_account_number'] = 'رقم الحساب';
$lang['StripePayments.ach_form.field_first_deposit'] = 'الإيداع الأول';
$lang['StripePayments.ach_form.field_holder_type'] = 'نوع الحامل';
$lang['StripePayments.ach_form.field_holder_type_company'] = 'الشركة';
$lang['StripePayments.ach_form.field_holder_type_individual'] = 'فردي';
$lang['StripePayments.ach_form.field_routing_number'] = 'رقم التوجيه';
$lang['StripePayments.ach_form.field_second_deposit'] = 'الإيداع الثاني';
$lang['StripePayments.ach_form.field_type'] = 'نوع الحساب';
$lang['StripePayments.ach_form.mandate_authorization'] = 'من خلال تقديم هذا النموذج، فإنك تفوض %1$s بالخصم من الحساب المصرفي المحدد أعلاه لأي مبلغ مستحق عن الرسوم الناشئة عن استخدامك لخدمات %1$s و/أو شراء المنتجات من %1$s ، وفقًا لموقع %1$s وشروطه، إلى أن يتم إلغاء هذا التفويض. يجوز لك تعديل هذا التفويض أو إلغاؤه في أي وقت من خلال تقديم إشعار إلى %1$s بإشعار مدته 30 (ثلاثين) يومًا.';
$lang['StripePayments.ach_form.mandate_future_usage'] = 'إذا كنت تستخدم خدمات %1$s أو تشتري منتجات إضافية بشكل دوري وفقًا لشروط %1$s ، فإنك تفوض %1$s بالخصم من حسابك المصرفي بشكل دوري. لن يتم الخصم من المدفوعات التي تقع خارج نطاق عمليات الخصم المنتظمة المصرح بها أعلاه إلا بعد الحصول على تفويض منك.';
$lang['StripePayments.ach_form.verification_notice'] = 'لم يتم التحقق من صحة الحساب المصرفي المسجل حاليًا. سيؤدي إدخال تفاصيل الحساب المصرفي الجديد أدناه إلى استبداله.';
$lang['StripePayments.charge_description'] = 'الشحن مقابل %1$s';
$lang['StripePayments.charge_description_default'] = 'فرض رسوم على المبلغ المحدد';
$lang['StripePayments.description'] = 'يستخدم عناصر Stripe Elements وواجهة برمجة تطبيقات طلبات الدفع للتعامل تلقائيًا مع 3D Secure وSCA لإرسال بطاقات الائتمان مباشرةً من خلال Stripe';
$lang['StripePayments.heading_migrate_accounts'] = 'ترحيل حسابات الدفع القديمة';
$lang['StripePayments.india_mandate_max_amount'] = 'الحد الأقصى لمبلغ الرسوم المتكررة (الهند)';
$lang['StripePayments.india_mandate_max_amount_note'] = 'مطلوب لتمكين عمليات السحب المتكررة التلقائية للبطاقات الصادرة في الهند. هذا هو الحد الأقصى للمبلغ الذي يمكن خصمه من هذه البطاقة في أي معاملة دفع مستقبلية تتم خارج الجلسة، بالعملة التي تتم معالجتها. اترك الحقل فارغًا للسماح بحفظ البطاقات الهندية دون التسجيل في خدمة السحب المتكرر التلقائي.';
$lang['StripePayments.migrate_accounts'] = 'ترحيل الحسابات';
$lang['StripePayments.name'] = 'Stripe Payments';
$lang['StripePayments.publishable_key'] = 'مفتاح API القابل للنشر';
$lang['StripePayments.request_three_d_secure'] = 'تدفق المصادقة الآمنة ثلاثية الأبعاد';
$lang['StripePayments.request_three_d_secure_automatic'] = 'السماح ل Stripe بتحديد موعد تقديم تحدي 3D Secure';
$lang['StripePayments.request_three_d_secure_challenge'] = 'تقديم تحدي 3D Secure كلما قام العميل بحفظ طريقة دفع أو معالجة طريقة دفع (مخزنة أو غير مخزنة)';
$lang['StripePayments.request_three_d_secure_frictionless'] = 'تقديم تحدي 3D Secure كلما قام العميل بحفظ طريقة دفع أو معالجة طريقة دفع غير مخزنة';
$lang['StripePayments.request_three_d_secure_note'] = 'إذا كنت من مستخدمي Stripe في الهند، فقبل حفظ بطاقة جديدة باستخدام Stripe، يجب عليك دائمًا إجراء مصادقة ثلاثية الأبعاد (3DS).';
$lang['StripePayments.secret_key'] = 'المفتاح السري لواجهة برمجة التطبيقات';
$lang['StripePayments.text_accounts_remaining'] = 'الحسابات المتبقية: %1$s';
$lang['StripePayments.text_migrate_accounts'] = 'يمكنك ترحيل حسابات الدفع المخزنة خارج الموقع بواسطة بوابة Stripe القديمة تلقائيًا إلى بوابة Stripe Payments هذه. يجب ترحيل الحسابات غير المخزنة خارج الموقع عن طريق إنشاء حسابات دفع جديدة يدويًا. من أجل منع المهلات، ستتم عمليات الترحيل على دفعات %1$s. قم بتشغيل هذا عدة مرات حسب الحاجة لترحيل جميع حسابات الدفع.';
$lang['StripePayments.tooltip_india_mandate_max_amount'] = 'وفقًا للوائح البنك المركزي الهندي (RBI)، فإن الرسوم المتكررة (خارج أوقات العمل) المفروضة على البطاقات الهندية والتي تتجاوز هذا المبلغ ستتطلب من العميل المصادقة على الدفع بشكل منفصل.';
$lang['StripePayments.tooltip_publishable_key'] = 'مفتاح API القابل للنشر خاص بالوضع المباشر أو الاختباري. تأكد من أنك تستخدم المفتاح الصحيح.';
$lang['StripePayments.tooltip_secret_key'] = 'المفتاح السري لواجهة برمجة التطبيقات خاص بالوضع المباشر أو الاختباري. تأكد من أنك تستخدم المفتاح الصحيح.';
$lang['StripePayments.warning_migrate_accounts'] = 'لا تقم بإلغاء تثبيت بوابة Stripe القديمة حتى تنتهي من استخدام أداة الترحيل هذه. سيؤدي القيام بذلك إلى عدم إمكانية الوصول إلى الأداة.';
$lang['StripePayments.webhook'] = 'خطاف الويب الشريطي';
$lang['StripePayments.webhook_note'] = 'يوصى بتهيئة عنوان url التالي كخطاف ويب لأحداث "payment_intent" و"الشحن" في حساب Stripe الخاص بك.';

