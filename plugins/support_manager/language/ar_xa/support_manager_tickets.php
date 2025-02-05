<?php
/**
 * Support Manager Tickets
 *
 * @package blesta
 * @subpackage blesta.language.ar_xa
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SupportManagerTickets.reassign_note'] = 'تمت إعادة تعيين هذه التذكرة إلى %1$s. تمت إعادة تعيين ردود العميل السابقة إلى هذا العميل وربما تكون قد تمت بواسطة شخص آخر.';
$lang['SupportManagerTickets.log.unassigned'] = 'غير معيّن';
$lang['SupportManagerTickets.log.ticket_staff_id'] = 'تم التعيين على %1$s.';
$lang['SupportManagerTickets.log.status'] = 'تم تغيير الحالة إلى %1$s.';
$lang['SupportManagerTickets.log.priority'] = 'تم تغيير الأولوية إلى %1$s.';
$lang['SupportManagerTickets.log.summary'] = 'تم تحديث الملخص.';
$lang['SupportManagerTickets.log.department_id'] = 'تم تغيير القسم إلى %1$s.';
$lang['SupportManagerTickets.type.log'] = 'السجل';
$lang['SupportManagerTickets.type.note'] = 'ملاحظة';
$lang['SupportManagerTickets.type.reply'] = 'الرد';
$lang['SupportManagerTickets.status.trash'] = 'القمامة';
$lang['SupportManagerTickets.status.closed'] = 'مغلق';
$lang['SupportManagerTickets.status.on_hold'] = 'قيد الانتظار';
$lang['SupportManagerTickets.status.in_progress'] = 'قيد التنفيذ';
$lang['SupportManagerTickets.status.awaiting_reply'] = 'في انتظار رد العميل';
$lang['SupportManagerTickets.status.open'] = 'في انتظار رد الموظفين';
$lang['SupportManagerTickets.priority.low'] = 'منخفضة';
$lang['SupportManagerTickets.priority.medium'] = 'متوسط';
$lang['SupportManagerTickets.priority.high'] = 'عالية';
$lang['SupportManagerTickets.priority.critical'] = 'الحرجة';
$lang['SupportManagerTickets.priority.emergency'] = 'الطوارئ';
$lang['SupportManagerTickets.merge.reply'] = 'تم دمج هذه التذكرة في التذكرة رقم%1$s.';
$lang['SupportManagerTickets.!error.client_id.company'] = 'لا تنتمي تذكرة واحدة على الأقل إلى نفس الشركة التي ينتمي إليها العميل المحدد.';
$lang['SupportManagerTickets.!error.ticket_ids[].exists'] = 'معرف تذكرة واحدة على الأقل غير صالح.';
$lang['SupportManagerTickets.!error.tickets.department_matches'] = 'لا يمكن تعيين واحدة على الأقل من التذاكر إلى القسم المحدد لأنها لا تنتمي إلى نفس الشركة.';
$lang['SupportManagerTickets.!error.tickets.service_matches'] = 'لا يمكن تعيين واحدة على الأقل من التذاكر إلى الخدمة المحددة لأنها لا تنتمي إلى العميل المرتبط.';
$lang['SupportManagerTickets.!error.merge_into.itself'] = 'لا يجوز دمج التذكرة مع نفسها.';
$lang['SupportManagerTickets.!error.tickets.valid'] = 'تذكرة واحدة على الأقل من التذاكر المحددة غير صالحة أو مغلقة أو لا تنتمي إلى نفس العميل الذي تنتمي إليه التذكرة المختارة.';
$lang['SupportManagerTickets.!error.replies.notes'] = 'لا يجوز تقسيم ملاحظات الرد على التذكرة إلى تذكرة منفصلة دون تضمين الرد على التذكرة أيضاً.';
$lang['SupportManagerTickets.!error.replies.valid'] = 'معرف رد تذكرة واحد على الأقل غير صالح، أو تم تحديد جميع الردود. يجب ترك رد واحد على الأقل متبقي.';
$lang['SupportManagerTickets.!error.client_id.attached_to'] = 'قد لا يكون الرد على التذكرة من عميل مختلف.';
$lang['SupportManagerTickets.!error.details.empty'] = 'يرجى إدخال بعض التفاصيل حول هذه التذكرة.';
$lang['SupportManagerTickets.!error.type.new_valid'] = 'يجب أن يكون للتذاكر الجديدة نوع رد "رد".';
$lang['SupportManagerTickets.!error.type.format'] = 'يرجى تحديد نوع الرد الصحيح.';
$lang['SupportManagerTickets.!error.ticket_id.exists'] = 'معرف التذكرة غير صالح.';
$lang['SupportManagerTickets.!error.date_closed.format'] = 'تاريخ إغلاق التذكرة بتنسيق تاريخ غير صالح.';
$lang['SupportManagerTickets.!error.date_updated.format'] = 'تاريخ تحديث التذكرة بتنسيق تاريخ غير صالح.';
$lang['SupportManagerTickets.!error.date_added.format'] = 'تاريخ إضافة التذكرة بتنسيق تاريخ غير صالح.';
$lang['SupportManagerTickets.!error.status.trash'] = 'لا يجوز تعديل التذكرة المحطمة.';
$lang['SupportManagerTickets.!error.status.format'] = 'يرجى تحديد حالة صالحة.';
$lang['SupportManagerTickets.!error.priority.format'] = 'يرجى تحديد أولوية صالحة.';
$lang['SupportManagerTickets.!error.summary.length'] = 'لا يجوز أن يتجاوز طول الملخص 255 حرفاً.';
$lang['SupportManagerTickets.!error.summary.empty'] = 'يرجى إدخال ملخص.';
$lang['SupportManagerTickets.!error.email.format'] = 'الرجاء إدخال عنوان بريد إلكتروني صحيح.';
$lang['SupportManagerTickets.!error.client_id.set'] = 'تنتمي التذكرة إلى عميل آخر ولا يجوز تغيير العميل المعين.';
$lang['SupportManagerTickets.!error.client_id.exists'] = 'معرف العميل غير صالح.';
$lang['SupportManagerTickets.!error.service_id.belongs'] = 'الخدمة المحددة غير صالحة.';
$lang['SupportManagerTickets.!error.service_id.exists'] = 'الخدمة المحددة لهذه التذكرة غير موجودة.';
$lang['SupportManagerTickets.!error.by_staff_id.exists'] = 'الموظف الذي تم تعيينه على أنه يقوم بالتعديل غير موجود.';
$lang['SupportManagerTickets.!error.contact_id.valid'] = 'لا يجوز لجهة الاتصال الرد على التذكرة بدون عميل صالح.';
$lang['SupportManagerTickets.!error.contact_id.exists'] = 'جهة الاتصال المحددة للرد على هذه التذكرة غير موجودة.';
$lang['SupportManagerTickets.!error.staff_id.exists'] = 'معرّف الموظف غير صالح.';
$lang['SupportManagerTickets.!error.department_id.exists'] = 'يرجى تحديد قسم صالح.';
$lang['SupportManagerTickets.!error.code.format'] = 'يجب أن يحتوي رمز التذكرة على أرقام فقط.';
$lang['SupportManagerTickets.!error.recipients.duplicated'] = 'واحد على الأقل من مستلمي التذاكر مكرر.';
$lang['SupportManagerTickets.!error.recipients.valid'] = 'أحد مستلمي التذاكر على الأقل غير صالح.';
$lang['SupportManagerTickets.!error.contacts.valid'] = 'واحدة على الأقل من جهات اتصال التذاكر غير صالحة.';
$lang['SupportManagerTickets.!error.priority.valid'] = 'يرجى تحديد أولوية صالحة لهذا القسم.';

