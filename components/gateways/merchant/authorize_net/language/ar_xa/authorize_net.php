<?php
/**
 * Authorize Net
 *
 * @package blesta
 * @subpackage blesta.language.ar_xa
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Authorize_net.!error.card_number.missing'] = 'لا يمكن تحديث تاريخ انتهاء الصلاحية بدون رقم البطاقة بالكامل.';
$lang['Authorize_net.!error.dev_mode.valid'] = 'يجب ضبط وضع المطور على "صواب" إذا تم إعطاؤه.';
$lang['Authorize_net.!error.test_mode.valid'] = 'يجب ضبط وضع الاختبار على "صواب" إذا تم إعطاؤه.';
$lang['Authorize_net.!error.transaction_key.format'] = 'يجب أن يكون طول مفتاح المعاملة 16 حرفاً.';
$lang['Authorize_net.!error.login_id.format'] = 'يجب ألا يزيد معرف تسجيل الدخول عن 20 حرفاً ولا يجوز أن يكون فارغاً.';
$lang['Authorize_net.validation_modes_live'] = 'بث مباشر';
$lang['Authorize_net.validation_modes_test'] = 'الاختبار';
$lang['Authorize_net.validation_modes_none'] = 'لا يوجد';
$lang['Authorize_net.validation_note'] = 'يتحكم هذا في نوع التحقق من الصحة الذي يتم إجراؤه عند تخزين حساب دفع باستخدام CIM. "بلا" لا يقوم بأي تحقق إضافي من الصحة. "اختبار" يصدر معاملة اختبارية لا تظهر في كشف حساب العميل ولكنها ستصدر رسالة بريد إلكتروني إلى التاجر. "مباشر" يقوم بمعالجة معاملة بقيمة 0.00 دولار أو 0.01 دولار يتم إبطالها على الفور. استشر مزود حساب التاجر الخاص بك قبل تعيين هذه القيمة على "مباشر" حيث قد تخضع لرسوم.';
$lang['Authorize_net.validation_mode'] = 'وضع التحقق من صحة حساب الدفع';
$lang['Authorize_net.apis_cim'] = 'CIM (يجب تمكينه بواسطة Authorize.Net)';
$lang['Authorize_net.apis_aim'] = 'AIM (افتراضي)';
$lang['Authorize_net.dev_mode_note'] = 'سيؤدي تمكين هذا الخيار إلى نشر المعاملات إلى بيئة مطوري Authorize.net. يجب أن يكون لديك حساب اختبار مطور من أجل استخدام هذه البيئة.';
$lang['Authorize_net.dev_mode'] = 'وضع المطور';
$lang['Authorize_net.test_mode_note'] = 'ميزة وضع الاختبار مدعومة فقط من قبل AIM. لاختبار معاملات CIM، يجب عليك تمكين وضع الاختبار من داخل حساب Authorize.net الخاص بك.';
$lang['Authorize_net.test_mode'] = 'وضع الاختبار';
$lang['Authorize_net.api'] = 'واجهة برمجة تطبيقات الدفع';
$lang['Authorize_net.transaction_key'] = 'مفتاح المعاملة';
$lang['Authorize_net.login_id'] = 'معرف تسجيل الدخول';
$lang['Authorize_net.description'] = 'معالجة موثوقة وسريعة للبطاقات الائتمانية وغرفة المقاصة الآلية ACH';
$lang['Authorize_net.name'] = 'Authorize.Net';

