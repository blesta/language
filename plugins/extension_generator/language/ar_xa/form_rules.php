<?php
/**
 * Form Rules
 *
 * @package blesta
 * @subpackage blesta.language.ar_xa
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['FormRules.pluginintegrations.cards[][callback].format'] = 'يُرجى إدخال طريقة الاستدعاء لكل بطاقة بصيغة camelCaseName.';
$lang['FormRules.pluginintegrations.cards[][level].valid'] = 'تحتوي بطاقة أو أكثر على مستوى غير صالح.';
$lang['FormRules.nonmerchantfields.fields[][type].valid'] = 'حقل واحد أو أكثر له نوع غير صالح.';
$lang['FormRules.nonmerchantfields.fields[][label].empty'] = 'يرجى إدخال تسمية لكل حقل.';
$lang['FormRules.nonmerchantfields.fields[][name].format'] = 'يُرجى إدخال اسم لكل حقل بالصيغة snake_ case_name.';
$lang['FormRules.nonmerchantbasic.currencies.format'] = 'يُرجى إدخال العملات بصيغة ثلاثة أحرف مفصولة بفاصلات (على سبيل المثال USD,EUR,JPY).';
$lang['FormRules.nonmerchantbasic.authors[][name].empty'] = 'يرجى إدخال اسم لكل مؤلف.';
$lang['FormRules.merchantfields.fields[][type].valid'] = 'حقل واحد أو أكثر له نوع غير صالح.';
$lang['FormRules.merchantfields.fields[][label].empty'] = 'يرجى إدخال تسمية لكل حقل.';
$lang['FormRules.merchantfields.fields[][name].format'] = 'يُرجى إدخال اسم لكل حقل بالصيغة snake_ case_name.';
$lang['FormRules.merchantbasic.currencies.format'] = 'يُرجى إدخال العملات بصيغة ثلاثة أحرف مفصولة بفاصلات (على سبيل المثال USD,EUR,JPY).';
$lang['FormRules.merchantbasic.authors[][name].empty'] = 'يرجى إدخال اسم لكل مؤلف.';
$lang['FormRules.pluginintegrations.cards[][label].empty'] = 'يُرجى إدخال ملصق لكل بطاقة.';
$lang['FormRules.pluginintegrations.events[][callback].format'] = 'يرجى إدخال طريقة الاستدعاء لكل حدث بصيغة camelCaseName.';
$lang['FormRules.pluginintegrations.events[][event].empty'] = 'يُرجى إدخال اسم الحدث لكل حدث.';
$lang['FormRules.pluginintegrations.actions[][name].empty'] = 'يرجى إدخال اسم لكل إجراء.';
$lang['FormRules.pluginintegrations.actions[][action].format'] = 'يُرجى إدخال إجراء لكل إجراء بأحرف صغيرة.';
$lang['FormRules.pluginintegrations.actions[][controller].format'] = 'يُرجى إدخال وحدة تحكم لكل إجراء بصيغة snake_case_name_ case_name.';
$lang['FormRules.pluginintegrations.actions[][location].valid'] = 'الرجاء إدخال موقع إجراء صحيح.';
$lang['FormRules.plugindatabase.tables[][columns][][primary].valid'] = 'يجب تعيين الأساسي على صواب أو خطأ لكل عمود.';
$lang['FormRules.plugindatabase.tables[][columns][][nullable].valid'] = 'يجب تعيين Nullable إلى صواب أو خطأ لكل عمود.';
$lang['FormRules.plugindatabase.tables[][columns][][length].empty'] = 'يجب أن يكون الطول بالصيغة \'a\' و\'b\' و\'c\' لأعمدة التعداد، وفارغًا للأعمدة النصية وأعمدة التاريخ والوقت، ورقميًا لجميع الأعمدة الأخرى.';
$lang['FormRules.plugindatabase.tables[][columns][][type].valid'] = 'يحتوي عمود واحد أو أكثر على نوع غير صالح.';
$lang['FormRules.plugindatabase.tables[][columns][][name].format'] = 'يُرجى إدخال اسم طريقة لكل عمود بصيغة snake_ case_name.';
$lang['FormRules.plugindatabase.tables[][name].format'] = 'يُرجى إدخال اسم طريقة لكل جدول بصيغة snake_ case_name.';
$lang['FormRules.pluginbasic.authors[][name].empty'] = 'يرجى إدخال اسم لكل مؤلف.';
$lang['FormRules.modulefeatures.cron_tasks[][time].format'] = 'يرجى إدخال إما الوقت بالصيغة 00:00 أو بفاصل زمني رقمي.';
$lang['FormRules.modulefeatures.cron_tasks[][type].valid'] = 'مهمة واحدة أو أكثر من مهام cron لها نوع غير صالح.';
$lang['FormRules.modulefeatures.cron_tasks[][label].empty'] = 'يُرجى إدخال تسمية لكل مهمة كرون.';
$lang['FormRules.modulefeatures.cron_tasks[][name].format'] = 'يرجى إدخال اسم أسلوب لكل مهمة من مهام cron بصيغة snake_ case_name.';
$lang['FormRules.modulefeatures.service_tabs[][level].valid'] = 'تحتوي علامة تبويب خدمة واحدة أو أكثر على مستوى غير صالح.';
$lang['FormRules.modulefeatures.service_tabs[][label].empty'] = 'يرجى إدخال تسمية لكل علامة تبويب خدمة.';
$lang['FormRules.modulefeatures.service_tabs[][method_name].format'] = 'يرجى إدخال اسم الأسلوب لكل علامة تبويب خدمة بصيغة camelCaseName.';
$lang['FormRules.modulefields.package_fields[][name_key].valid'] = 'يجب تعيين ما إذا كان تعيين حقل الحزمة كمفتاح الاسم إلى صواب أو خطأ.';
$lang['FormRules.modulefields.package_fields[][type].valid'] = 'حقل حزمة واحد أو أكثر له نوع غير صالح.';
$lang['FormRules.modulefields.package_fields[][label].empty'] = 'يُرجى إدخال تسمية لكل حقل حزمة.';
$lang['FormRules.modulefields.package_fields[][name].format'] = 'يرجى إدخال اسم لكل حقل من حقول الحزمة بصيغة snake_case_name.';
$lang['FormRules.modulefields.service_fields[][name_key].valid'] = 'يجب تعيين ما إذا كان يجب تعيين حقل الخدمة كمفتاح الاسم إلى صواب أو خطأ.';
$lang['FormRules.modulefields.service_fields[][type].valid'] = 'حقل خدمة واحد أو أكثر له نوع غير صالح.';
$lang['FormRules.modulefields.service_fields[][label].empty'] = 'يرجى إدخال تسمية لكل حقل خدمة.';
$lang['FormRules.modulefields.service_fields[][name].format'] = 'يُرجى إدخال اسم لكل حقل خدمة بصيغة snake_ case_name.';
$lang['FormRules.modulefields.module_rows[][name_key].valid'] = 'يجب تعيين ما إذا كان يجب تعيين حقل صف الوحدة النمطية كمفتاح الاسم إلى صواب أو خطأ.';
$lang['FormRules.modulefields.module_rows[][type].valid'] = 'يحتوي صف واحد أو أكثر من صفوف الوحدات النمطية على نوع غير صالح.';
$lang['FormRules.modulefields.module_rows[][label].empty'] = 'يرجى إدخال تسمية لكل حقل صف وحدة نمطية.';
$lang['FormRules.modulefields.module_rows[][name].format'] = 'يُرجى إدخال اسم لكل حقل صف وحدة نمطية بالصيغة snake_ case_name.';
$lang['FormRules.modulebasic.authors[][name].empty'] = 'يرجى إدخال اسم لكل مؤلف.';
$lang['FormRules.modulebasic.module_group.empty'] = 'الرجاء إدخال تسمية مجموعة الوحدات النمطية.';
$lang['FormRules.modulebasic.module_row_plural.empty'] = 'الرجاء إضافة اسم صف وحدة نمطية الجمع.';
$lang['FormRules.modulebasic.module_row.empty'] = 'الرجاء إدخال اسم صف الوحدة النمطية.';
$lang['FormRules.general.name.format'] = 'لا يمكن أن تحتوي أسماء الامتدادات إلا على أحرف أبجدية رقمية وشرطات سفلية ومسافات.';

