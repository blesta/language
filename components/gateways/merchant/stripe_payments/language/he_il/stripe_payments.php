<?php
/**
 * Stripe Payments
 *
 * @package blesta
 * @subpackage blesta.language.he_il
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['StripePayments.request_three_d_secure_note'] = 'אם אתה משתמש ב-Stripe ומתגורר בהודו, עליך לבצע תמיד אימות 3D Secure (3DS) לפני שמירת כרטיס חדש ב-Stripe.';
$lang['StripePayments.request_three_d_secure_challenge'] = 'הצג את תהליך אימות ה-3D Secure בכל פעם שלקוח שומר אמצעי תשלום או מבצע תשלום באמצעות אמצעי תשלום (שמור או לא שמור)';
$lang['StripePayments.request_three_d_secure_frictionless'] = 'הצג את תהליך אימות ה-3D Secure בכל פעם שלקוח שומר אמצעי תשלום או מבצע תשלום באמצעות אמצעי תשלום שלא נשמר';
$lang['StripePayments.request_three_d_secure_automatic'] = 'אפשר ל-Stripe לקבוע מתי להציג בקשת אימות 3D Secure';
$lang['StripePayments.request_three_d_secure'] = 'תהליך אימות 3D Secure';
$lang['StripePayments.charge_description'] = 'תשלום עבור %1$s';
$lang['StripePayments.charge_description_default'] = 'חיוב בסכום שנקבע';
$lang['StripePayments.migrate_accounts'] = 'העברת חשבונות';
$lang['StripePayments.warning_migrate_accounts'] = 'אין להסיר את שער התשלומים הישן של Stripe עד שתסיים להשתמש בכלי המעבר הזה. פעולה כזו תמנע ממך גישה לכלי.';
$lang['StripePayments.text_migrate_accounts'] = 'ניתן להעביר באופן אוטומטי חשבונות תשלום המאוחסנים מחוץ לאתר על ידי שער התשלומים הישן של Stripe אל שער התשלומים Stripe Payments. חשבונות שאינם מאוחסנים מחוץ לאתר יש להעביר על ידי יצירת חשבונות תשלום חדשים באופן ידני. כדי למנוע פקיעת זמן, ההעברות יבוצעו בקבוצות של %1$s. יש להריץ את הפקודה הזו כמה פעמים שצריך כדי להעביר את כל חשבונות התשלום.';
$lang['StripePayments.text_accounts_remaining'] = 'חשבונות שנותרו: %1$s';
$lang['StripePayments.heading_migrate_accounts'] = 'העברת חשבונות תשלום ישנים';
$lang['StripePayments.webhook_note'] = 'מומלץ להגדיר את כתובת ה-URL הבאה כ-Webhook לאירועי "payment_intent" ו-"charge" בחשבון Stripe שלך.';
$lang['StripePayments.webhook'] = 'Webhook של Stripe';
$lang['StripePayments.tooltip_secret_key'] = 'מפתח ה-API הסודי שלך ייעודי למצב פעיל או למצב בדיקה. ודא שאתה משתמש במפתח הנכון.';
$lang['StripePayments.tooltip_publishable_key'] = 'מפתח ה-API הניתן לפרסום שלך ייחודי למצב פעיל או למצב בדיקה. ודא שאתה משתמש במפתח הנכון.';
$lang['StripePayments.secret_key'] = 'מפתח סודי של ה-API';
$lang['StripePayments.publishable_key'] = 'מפתח API לפרסום';
$lang['StripePayments.ach_form.mandate_future_usage'] = 'אם אתה משתמש בשירותי %1$s או רוכש מוצרים נוספים מעת לעת בהתאם לתנאי %1$s, אתה מאשר ל- %1$s לחייב את חשבון הבנק שלך מעת לעת. תשלומים שאינם נכללים בחיובים השוטפים שאושרו לעיל יחויבו רק לאחר קבלת אישור ממך.';
$lang['StripePayments.ach_form.mandate_authorization'] = 'עם שליחת טופס זה, אתה מאשר ל- %1$s לחייב את חשבון הבנק המצוין לעיל בכל סכום המגיע בגין חיובים הנובעים משימושך בשירותי %1$s ו/או מרכישת מוצרים מ- %1$s, בהתאם לתנאי השימוש באתר %1$s, עד לביטול אישור זה. באפשרותך לשנות או לבטל אישור זה בכל עת על ידי שליחת הודעה לכתובת %1$s, תוך מתן התראה של 30 (שלושים) יום מראש.';
$lang['StripePayments.ach_form.field_second_deposit'] = 'הפקדה שנייה';
$lang['StripePayments.ach_form.field_first_deposit'] = 'הפקדה ראשונה';
$lang['StripePayments.ach_form.verification_notice'] = 'העברנו שתי הפקדות קטנות לחשבון הבנק הזה. כדי לאמת את החשבון, אנא אמת את סכומי ההפקדות הללו.';
$lang['StripePayments.ach_form.field_routing_number'] = 'מספר מסלול';
$lang['StripePayments.ach_form.field_account_number'] = 'מספר חשבון';
$lang['StripePayments.ach_form.field_holder_type_company'] = 'חברה';
$lang['StripePayments.ach_form.field_holder_type_individual'] = 'אישי';
$lang['StripePayments.ach_form.field_holder_type'] = 'סוג התושבת';
$lang['StripePayments.ach_form.field_type'] = 'סוג חשבון';
$lang['StripePayments.description'] = 'משתמשת ב-Stripe Elements וב-API של Payment Request כדי לטפל באופן אוטומטי ב-3D Secure וב-SCA, וכך לאפשר העברת כרטיסי אשראי ישירות דרך Stripe';
$lang['StripePayments.!error.invalid_request_error'] = 'שער התשלומים החזיר שגיאה בעת עיבוד הבקשה.';
$lang['StripePayments.!error.bank_account_unverified'] = 'עליך לאמת את חשבון הבנק שלך לפני שתוכל להשתמש בו לביצוע תשלום.';
$lang['StripePayments.!error.secret_key.valid'] = 'לא ניתן להתחבר ל-API של Stripe באמצעות מפתח הסוד שניתן.';
$lang['StripePayments.!error.secret_key.empty'] = 'אנא הזן מפתח סודי.';
$lang['StripePayments.name'] = 'Stripe Payments';
$lang['StripePayments.!error.publishable_key.empty'] = 'אנא הזן מפתח שניתן לפרסום.';
$lang['StripePayments.!error.auth'] = 'לא ניתן היה לאמת את השער.';

