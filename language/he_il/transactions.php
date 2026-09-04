<?php
/**
 * Transactions
 *
 * @package blesta
 * @subpackage blesta.language.he_il
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Transactions.!error.amount.applied'] = 'סכום העסקה לא יכול להיות נמוך מהסכום שכבר הוחל על חשבוניות. יש לבטל תחילה את החלת העסקה על חשבונית אחת או יותר.';
$lang['Transactions.!error.amount.format'] = 'הסכום חייב להיות מספר.';
$lang['Transactions.!error.amounts.applied'] = 'לא ניתן היה להחיל את ערכי "הסכום לתשלום" על החשבוניות שצוינו. אנא נסה שוב.';
$lang['Transactions.!error.amounts.overage'] = 'לא ניתן היה להחיל ערך אחד או יותר של "סכום לתשלום" על החשבונית שצוינה. ודא ש"סכום לתשלום" אינו עולה על "הסכום לתשלום" המופיע בחשבונית, שהחשבונית פתוחה, ושסך ערכי "סכום לתשלום" אינו עולה על "סכום התשלום" או "סכום הזיכוי".';
$lang['Transactions.!error.amounts.positive'] = 'ערך אחד או יותר של "סכום לתשלום" הוא שלילי. ודא שכל ערך של "סכום לתשלום" הוא אפס או יותר.';
$lang['Transactions.!error.client_id.exists'] = 'מזהה לקוח לא חוקי.';
$lang['Transactions.!error.currency.length'] = 'אורך המטבע חייב להיות 3 תווים.';
$lang['Transactions.!error.currency.mismatch'] = 'המטבע שצוין אינו תואם לפחות לאחת מהחשבוניות הקשורות.';
$lang['Transactions.!error.currency.missing'] = 'אנא בחר מטבע.';
$lang['Transactions.!error.date_added.format'] = 'תאריך העסקה לא יכול להיות תאריך עתידי.';
$lang['Transactions.!error.date.format'] = 'התאריך שהוזן אינו חוקי.';
$lang['Transactions.!error.gateway_id.exists'] = 'מזהה שער לא חוקי.';
$lang['Transactions.!error.invoice_id.exists'] = 'מספר חשבונית לא חוקי.';
$lang['Transactions.!error.is_lang.format'] = 'is_lang חייב להיות מספר.';
$lang['Transactions.!error.is_lang.length'] = 'אורך is_lang לא יכול לעלות על תו אחד.';
$lang['Transactions.!error.message.length'] = 'אורך ההודעה לא יעלה על 255 תווים.';
$lang['Transactions.!error.name.empty'] = 'אנא הזן שם.';
$lang['Transactions.!error.name.length'] = 'אורך השם לא יעלה על 32 תווים.';
$lang['Transactions.!error.parent_transaction_id.length'] = 'אורך מזהה העסקה הראשית לא יעלה על 128 תווים.';
$lang['Transactions.!error.reference_id.length'] = 'אורך מזהה ההתייחסות לא יעלה על 128 תווים.';
$lang['Transactions.!error.status.format'] = 'סטטוס העסקה אינו תקין.';
$lang['Transactions.!error.transaction_id.currency_matches'] = 'לא ניתן היה ליישם את סכומי החשבוניות מכיוון שהם אינם תואמים למטבע העסקה.';
$lang['Transactions.!error.transaction_id.exists'] = 'מזהה העסקה אינו חוקי.';
$lang['Transactions.!error.transaction_id.length'] = 'אורך מזהה העסקה לא יעלה על 128 תווים.';
$lang['Transactions.!error.transaction_type_id.exists'] = 'מזהה סוג העסקה אינו חוקי.';
$lang['Transactions.!error.type_id.exists'] = 'מזהה סוג העסקה אינו חוקי.';
$lang['Transactions.!error.type.format'] = 'סוג העסקה אינו חוקי.';
$lang['Transactions.!error.type.valid'] = 'אנא בחר סוג תקף.';
$lang['Transactions.debit_types.credit'] = 'קרדיט';
$lang['Transactions.debit_types.debit'] = 'חיוב';
$lang['Transactions.status.approved'] = 'אושר';
$lang['Transactions.status.declined'] = 'נדחה';
$lang['Transactions.status.error'] = 'שגיאה';
$lang['Transactions.status.pending'] = 'בהמתנה';
$lang['Transactions.status.refunded'] = 'הוחזר';
$lang['Transactions.status.returned'] = 'הוחזר';
$lang['Transactions.status.void'] = 'ריק';
$lang['Transactions.types.ach'] = 'ACH';
$lang['Transactions.types.cc'] = 'כרטיס אשראי';
$lang['Transactions.types.other'] = 'אחר';

