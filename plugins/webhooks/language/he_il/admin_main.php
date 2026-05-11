<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.he_il
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.edit.field_cancel'] = 'בטל';
$lang['AdminMain.add.field_cancel'] = 'בטל';
$lang['AdminMain.edit.option_delete'] = 'מחק';
$lang['AdminMain.edit.heading_options'] = 'פעולות';
$lang['AdminMain.edit.heading_parameter'] = 'שדה חדש';
$lang['AdminMain.edit.heading_field'] = 'שדה מקורי';
$lang['AdminMain.edit.heading_fields_map'] = 'מפת השדות';
$lang['AdminMain.edit.text_fields_map'] = 'חלק זה מאפשר לך לשנות את שמות השדות של האירוע המופעל לשמות מותאמים אישית לפני שהם נשלחים לפונקציית הקריאה החוזרת. יש להפריד בין תתי-שדות באמצעות נקודה (לדוגמה: vars.status). כדי לראות רשימה של כל השדות הנתמכים על ידי כל אחד מהאירועים, ניתן לעיין <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">בקישור</a> הבא.';
$lang['AdminMain.edit.field_editsubmit'] = 'ערוך Webhook';
$lang['AdminMain.edit.field_add_field'] = 'הוסף שדה';
$lang['AdminMain.edit.field_method'] = 'שיטה';
$lang['AdminMain.edit.field_type'] = 'שיחת החזרה';
$lang['AdminMain.edit.field_event'] = 'אירוע';
$lang['AdminMain.edit.field_callback'] = 'שיחת החזרה';
$lang['AdminMain.edit.heading_event'] = 'אירוע';
$lang['AdminMain.edit.boxtitle_editwebhook'] = 'ערוך Webhook';
$lang['AdminMain.add.text_fields_map'] = 'חלק זה מאפשר לך לשנות את שמות השדות של האירוע המופעל לשמות מותאמים אישית לפני שהם נשלחים לפונקציית הקריאה החוזרת. יש להפריד בין תתי-שדות באמצעות נקודה (לדוגמה: vars.status). כדי לראות רשימה של כל השדות הנתמכים על ידי כל אחד מהאירועים, ניתן לעיין <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">בקישור</a> הבא.';
$lang['AdminMain.add.field_addsubmit'] = 'הוסף Webhook';
$lang['AdminMain.add.field_add_field'] = 'הוסף שדה';
$lang['AdminMain.add.field_method'] = 'שיטה';
$lang['AdminMain.add.field_type'] = 'שיחת החזרה';
$lang['AdminMain.add.field_event'] = 'אירוע';
$lang['AdminMain.add.field_callback'] = 'שיחת החזרה';
$lang['AdminMain.add.option_delete'] = 'מחק';
$lang['AdminMain.add.heading_options'] = 'פעולות';
$lang['AdminMain.add.heading_parameter'] = 'שדה חדש';
$lang['AdminMain.add.heading_field'] = 'שדה מקורי';
$lang['AdminMain.add.heading_fields_map'] = 'מפת השדות';
$lang['AdminMain.add.heading_event'] = 'אירוע';
$lang['AdminMain.add.boxtitle_addwebhook'] = 'הוסף Webhook';
$lang['AdminMain.index.no_results'] = 'אין וובהוקים זמינים.';
$lang['AdminMain.index.text_description_incoming'] = 'מקבל בקשת HTTP ומפעיל אירוע במערכת באמצעות הפרמטרים שהתקבלו בבקשה. ניתן לקבל את הבקשה באמצעות GET, POST או JSON.';
$lang['AdminMain.index.text_description_outgoing'] = 'שולח בקשת HTTP לכתובת URL כאשר מתרחש אירוע. ניתן לשלוח את הבקשה באמצעות GET, POST, PUT או JSON.';
$lang['AdminMain.index.option_delete'] = 'מחק';
$lang['AdminMain.index.option_edit'] = 'ערוך';
$lang['AdminMain.index.heading_options'] = 'פעולות';
$lang['AdminMain.index.heading_method'] = 'שיטה';
$lang['AdminMain.index.heading_event'] = 'אירוע';
$lang['AdminMain.index.heading_callback'] = 'שיחת החזרה';
$lang['AdminMain.index.boxtitle_webhooks'] = 'Webhooks';
$lang['AdminMain.index.categorylink_addwebhook'] = 'הוסף Webhook';
$lang['AdminMain.index.category_outgoing'] = 'יוצא';
$lang['AdminMain.index.category_incoming'] = 'נכנס';
$lang['AdminMain.index.page_title_edit'] = 'ערוך Webhook';
$lang['AdminMain.index.page_title_add'] = 'הוסף Webhook';
$lang['AdminMain.index.page_title_index'] = 'Webhooks';
$lang['AdminMain.modal.delete_text'] = 'האם אתה בטוח שברצונך למחוק את ה-webhook הזה?';
$lang['AdminMain.!success.webhook_deleted'] = 'ה-webhook נמחק בהצלחה!';
$lang['AdminMain.!success.webhook_updated'] = 'ה-webhook עודכן בהצלחה!';
$lang['AdminMain.!success.webhook_added'] = 'ה-webhook נוסף בהצלחה!';
$lang['AdminMain.!tooltip.callback'] = 'הקריאה החוזרת מציינת לאן תישלח או תתקבל הבקשה; עבור וובהוקים יוצאים, עליה להיות כתובת URL, ואילו עבור וובהוקים נכנסים, עליה להיות שם כתובת ה-URL שבה תתקבל הבקשה. לדוגמה: http://blesta.com/plugin/webhooks/trigger/index/[שם הקריאה החוזרת].';
$lang['AdminMain.!success.webhook_retried'] = 'הניסיון החוזר של ה-webhook הצליח!';
$lang['AdminMain.index.page_title_logs'] = 'יומני Webhook';
$lang['AdminMain.index.categorylink_viewlogs'] = 'הצג את כל היומנים';
$lang['AdminMain.index.option_logs'] = 'יומנים';
$lang['AdminMain.logs.boxtitle_logs'] = 'יומני Webhook';
$lang['AdminMain.logs.categorylink_viewwebhooks'] = 'הצג Webhooks';
$lang['AdminMain.logs.heading_webhook'] = 'Webhook';
$lang['AdminMain.logs.heading_event'] = 'אירוע';
$lang['AdminMain.logs.heading_response'] = 'תגובה';
$lang['AdminMain.logs.heading_method'] = 'שיטה';
$lang['AdminMain.logs.heading_http_response'] = 'תגובת HTTP';
$lang['AdminMain.logs.heading_date_triggered'] = 'תאריך ההפעלה';
$lang['AdminMain.logs.heading_date_last_retry'] = 'ניסיון אחרון';
$lang['AdminMain.logs.heading_options'] = 'פעולות';
$lang['AdminMain.logs.field_filterwebhook'] = 'Webhook';
$lang['AdminMain.logs.field_filterwebhook_all'] = 'כל ה-Webhooks';
$lang['AdminMain.logs.field_filterevent'] = 'אירוע';
$lang['AdminMain.logs.field_filterhttpstatus'] = 'סטטוס HTTP';
$lang['AdminMain.logs.field_filterdatestart'] = 'תאריך התחלה';
$lang['AdminMain.logs.field_filterdateend'] = 'תאריך סיום';
$lang['AdminMain.logs.confirm_resend'] = 'האם אתה בטוח שברצונך לשלוח את האירוע הזה שוב?';
$lang['AdminMain.logs.option_resend'] = 'שלח שוב';
$lang['AdminMain.logs.no_results'] = 'אין יומנים זמינים.';

