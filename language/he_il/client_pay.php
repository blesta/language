<?php
/**
 * Client Pay
 *
 * @package blesta
 * @subpackage blesta.language.he_il
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientPay.multipleinvoices.text_amount'] = 'סכום לתשלום';
$lang['ClientPay.setcontactview.text_none'] = 'אין';
$lang['ClientPay.received.text_try_again'] = 'נסה שוב';
$lang['ClientPay.received.invoices'] = 'מספר חשבונית';
$lang['ClientPay.received.amount'] = 'סכום';
$lang['ClientPay.received.transaction_id'] = 'מזהה העסקה';
$lang['ClientPay.received.statement'] = 'התשלום שלך נמצא בתהליך עיבוד.';
$lang['ClientPay.received.boxtitle_received'] = 'תודה!';
$lang['ClientPay.received.page_title'] = 'הלקוח: %1$s התשלום התקבל';
$lang['ClientPay.confirm.description_credit'] = 'זיכוי תשלום';
$lang['ClientPay.confirm.description_invoice_number'] = '#%1$s';
$lang['ClientPay.confirm.description_invoice_separator'] = ',';
$lang['ClientPay.confirm.description_invoice'] = 'מספר חשבונית%1$s';
$lang['ClientPay.confirm.field_edit'] = 'ערוך תשלום';
$lang['ClientPay.confirm.field_submit'] = 'שלח תשלום';
$lang['ClientPay.confirm.total'] = 'סה"כ:';
$lang['ClientPay.confirm.account_exp'] = 'תוקף %1$s';
$lang['ClientPay.confirm.account_info_type'] = '%1$s';
$lang['ClientPay.confirm.account_info'] = '%1$s (%2$s) המסתיים ב- %3$s';
$lang['ClientPay.confirm.payment_details'] = 'פרטי תשלום';
$lang['ClientPay.confirm.boxtitle_confirm'] = 'אשר את התשלום';
$lang['ClientPay.confirm.page_title'] = 'הלקוח: %1$s אימות תשלום';
$lang['ClientPay.multipleinvoices.no_results'] = 'אין חשבוניות במטבע זה.';
$lang['ClientPay.multipleinvoices.text_datedue'] = 'תאריך היעד';
$lang['ClientPay.multipleinvoices.text_invoice'] = 'מספר חשבונית';
$lang['ClientPay.multipleinvoices.text_due'] = 'הסכום לתשלום';
$lang['ClientPay.multipleinvoices.text_edit_amounts'] = 'במקום זאת, בצע תשלום חלקי';
$lang['ClientPay.method.invoice_amount'] = 'סכום';
$lang['ClientPay.method.invoice_quantity'] = 'כמות';
$lang['ClientPay.method.invoice_description'] = 'תיאור';
$lang['ClientPay.method.heading_invoice'] = 'מספר חשבונית%1$s';
$lang['ClientPay.method.no_options'] = 'אין אפשרויות תשלום זמינות.';
$lang['ClientPay.method.field_credit_submit'] = 'החל את האשראי והמשך';
$lang['ClientPay.method.field_submit'] = 'בדוק ואשר';
$lang['ClientPay.method.field_apply_credit'] = 'השתמש באשראי (ניתן להשתמש ב-%1$s )';
$lang['ClientPay.method.field_paymentaccount_ach'] = 'חשבונות ACH';
$lang['ClientPay.method.field_paymentaccount_autodebit'] = '(חיוב אוטומטי) %1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.field_paymentaccount_cc'] = 'חשבונות כרטיסי אשראי';
$lang['ClientPay.method.field_paymentaccount'] = '%1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.heading_payment_options'] = 'אפשרויות תשלום';
$lang['ClientPay.method.heading_other_payment_options'] = 'אפשרויות תשלום אחרות';
$lang['ClientPay.method.field_newdetails'] = 'פרטי תשלום חדשים';
$lang['ClientPay.method.field_useaccount'] = 'השתמש בחשבון תשלום';
$lang['ClientPay.method.boxtitle_method'] = 'בצע תשלום';
$lang['ClientPay.method.page_title'] = 'לקוח %1$s אמצעי תשלום';
$lang['ClientPay.index.field_submit'] = 'המשך';
$lang['ClientPay.index.field_credit'] = 'סכום תשלום אחר';
$lang['ClientPay.index.boxtitle_pay'] = 'בצע תשלום';
$lang['ClientPay.index.page_title'] = 'לקוח: %1$s Pay';
$lang['ClientPay.!error.payment_authorize'] = 'לא ניתן לאשר את התשלום עבור חשבון התשלום שנבחר.  אנא בחר חשבון אחר או נסה שוב.';
$lang['ClientPay.!error.invoice_voided'] = 'חשבונית זו בוטלה ואינה ניתנת לתשלום.';
$lang['ClientPay.!error.payment_amounts'] = 'אנא בחר חשבוניות לתשלום או הזן סכום תשלום אחר.';
$lang['ClientPay.!error.invalid_amount'] = 'סכומי תשלום אחרים אינם יכולים להיות שליליים.';
$lang['ClientPay.!error.invalid_details'] = 'אנא בחר אמצעי תשלום.';
$lang['ClientPay.!info.ach_verification_redirect'] = 'עליך לאמת את החשבון הזה לפני שתוכל להשתמש בו לביצוע תשלום. תהליך זה יפנה אותך לדף אחר.';
$lang['ClientPay.!info.ach_verification'] = 'עליך לאמת את החשבון הזה לפני שתוכל להשתמש בו לביצוע תשלום.';
$lang['ClientPay.!info.unverified_email_button'] = 'שלח שוב את דוא"ל האימות';
$lang['ClientPay.!info.unverified_email'] = 'נשלח קישור לכתובת הדוא"ל שמסרת. אנא לחץ על הקישור בהודעת הדוא"ל כדי לאמת את כתובת הדוא"ל שלך לפני שתמשיך לתשלום.';
$lang['ClientPay.!success.invoice_paid'] = 'חשבונית זו כבר שולמה.';
$lang['ClientPay.!success.credit_partial_processed'] = 'הזיכויים הזמינים נוצלו, אך עדיין נותר יתרה. אנא השלם את העסקה על ידי תשלום היתרה המופיעה להלן.';
$lang['ClientPay.!success.credit_full_processed'] = 'הנקודות הזמינות נוצלו.';
$lang['ClientPay.!success.payment_processed'] = 'התשלום עבור %1$s עבר בהצלחה. מספר העסקה: %2$s';
$lang['ClientPay.!error.credit_minimum'] = 'סכום האשראי חייב להיות לפחות %1$s.';
$lang['ClientPay.!error.credit_maximum'] = 'סכום האשראי לא יכול לעלות על %1$s.';
$lang['ClientPay.index.text_credit_limits'] = 'סכום מינימום: %1$s - סכום מקסימום: %2$s';
$lang['ClientPay.index.text_credit_min_only'] = 'סכום מינימום: %1$s';
$lang['ClientPay.index.text_credit_max_only'] = 'הסכום המרבי: %1$s';
$lang['ClientPay.method.invoice_total'] = 'סך החשבונית';
$lang['ClientPay.method.invoice_paid_amount'] = 'סכום ששולם';
$lang['ClientPay.method.invoice_balance_due'] = 'יתרת החוב';

