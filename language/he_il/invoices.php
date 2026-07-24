<?php
/**
 * Invoices
 *
 * @package blesta
 * @subpackage blesta.language.he_il
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Invoices.!error.service.renew_onetime'] = 'שירותים חד-פעמיים אינם ניתנים לחידוש.';
$lang['Invoices.!error.invoice_ids.client'] = 'כל החשבוניות חייבות להיות של אותו לקוח.';
$lang['Invoices.!error.invoice_id.unique'] = 'חשבונית היעד אינה יכולה להיכלל ברשימת החשבוניות שיש לאחד.';
$lang['Invoices.!error.invoice_id.status'] = 'חשבונית היעד חייבת להיות פתוחה וללא כל עסקאות.';
$lang['Invoices.!error.invoice_ids.status'] = 'כל החשבוניות חייבות להיות פתוחות וללא כל עסקאות.';
$lang['Invoices.!error.invoice_ids.currency'] = 'כל החשבוניות חייבות להיות באותו מטבע.';
$lang['Invoices.!error.invoice_ids.count'] = 'יש לבחור לפחות שתי חשבוניות.';
$lang['Invoices.!line_item.parent_description'] = 'שירותי הילדים של מחוז סנטה מריה ( %1$s ) - %2$s:';
$lang['Invoices.!error.line_items.minimum_split'] = 'על החשבונית להכיל לפחות 2 שורות כדי שניתן יהיה לפצל אותה.';
$lang['Invoices.!error.line_items.empty_split'] = 'לא נבחרו שורות חשבונית לפיצול.';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text'] = '↳ שדרוג יחסי של %1$s';
$lang['Invoices.!error.lines[][tax].format'] = 'המס על פריט שורה חייב להיות \'נכון\' או \'לא נכון\'';
$lang['Invoices.!error.lines[][amount].format'] = 'עלות היחידה חייבת להיות מספר.';
$lang['Invoices.!error.lines[][qty].minimum'] = 'אנא הזן כמות של 1 או יותר.';
$lang['Invoices.!error.lines[][qty].format'] = 'הכמות חייבת להיות מספר.';
$lang['Invoices.!error.lines[][description].empty'] = 'אנא הזן תיאור של פריט.';
$lang['Invoices.!error.lines[][service_id].exists'] = 'מזהה שירות לא חוקי.';
$lang['Invoices.!error.lines[][id].exists'] = 'מזהה פריט לא חוקי.';
$lang['Invoices.!error.domain_renew.failed'] = 'ניתן לחדש דומיינים לתקופה של עד 10 שנים.';
$lang['Invoices.!error.invoice_id.draft'] = 'החשבונית הזו אינה טיוטת חשבונית, ולכן לא ניתן היה למחוק אותה.';
$lang['Invoices.!error.date_last_renewed.format'] = 'תאריך חידוש החשבונית החוזרת האחרונה חייב להיות בפורמט תאריך תקף.';
$lang['Invoices.!error.date_renews.format'] = 'תאריך חידוש החשבונית החוזרת חייב להיות בפורמט תאריך תקף.';
$lang['Invoices.!error.duration.format'] = 'משך הזמן אינו חוקי.';
$lang['Invoices.!error.period.format'] = 'התקופה אינה תקפה.';
$lang['Invoices.!error.term.bounds'] = 'הערך צריך להיות בין 1 ל-65535.';
$lang['Invoices.!error.term.format'] = 'הביטוי צריך להיות מספר.';
$lang['Invoices.!error.delivery.exists'] = 'אופן המשלוח שצוין אינו קיים.';
$lang['Invoices.!error.currency.length'] = 'קוד המטבע חייב להיות בן 3 תווים.';
$lang['Invoices.!error.status.format'] = 'סטטוס לא חוקי.';
$lang['Invoices.!error.autodebit.valid'] = 'אנא בחר אם ברצונך לאפשר חיוב אוטומטי עבור חשבונית זו.';
$lang['Invoices.!error.date_autodebit.format'] = 'תאריך היעד אינו בפורמט תאריך תקין.';
$lang['Invoices.!error.date_closed.format'] = 'תאריך הסגירה אינו בפורמט תאריך תקין.';
$lang['Invoices.!error.date_due.after_billed'] = 'תאריך התשלום חייב להיות תאריך זה או תאריך מאוחר יותר.';
$lang['Invoices.!error.date_due.format'] = 'תאריך היעד אינו בפורמט תאריך תקין.';
$lang['Invoices.!error.date_billed.format'] = 'התאריך המופיע בחשבונית אינו בפורמט תאריך תקין.';
$lang['Invoices.!error.client_id.exists'] = 'מזהה לקוח לא חוקי.';
$lang['Invoices.!error.id.amount_applied'] = 'לא ניתן לעדכן שורות חשבונית, מטבע או סטטוס, מכיוון שכבר יוחס סכום לחשבונית זו.';
$lang['Invoices.!error.id_value.valid'] = 'לא ניתן לקבוע את ערך מזהה החשבונית.';
$lang['Invoices.!error.id_format.length'] = 'אורך המזהה של חשבוניות לא יעלה על 64 תווים.';
$lang['Invoices.!error.id_format.empty'] = 'לא הוגדר פורמט זיהוי עבור חשבוניות.';
$lang['Invoices.!error.invoice_add.failed'] = 'לא ניתן היה ליצור חשבונית זו. אנא נסה שוב.';
$lang['Invoices.!error.delivery.length'] = 'אורך שדה "אופן משלוח החשבונית" לא יעלה על 32 תווים.';
$lang['Invoices.!error.delivery.empty'] = 'אנא ציין את אופן משלוח החשבונית.';
$lang['Invoices.!error.method.exists'] = 'עליך להגדיר לפחות שיטת משלוח אחת.';
$lang['Invoices.!error.invoice_recur_id.exists'] = 'מזהה חשבונית חוזרת לא חוקי.';
$lang['Invoices.!error.invoice_id.exists'] = 'מספר חשבונית לא חוקי.';
$lang['Invoices.cache_methods.json_pdf'] = 'JSON + PDF';
$lang['Invoices.cache_methods.json'] = 'JSON';
$lang['Invoices.cache_methods.none'] = 'אין';
$lang['Invoices.types.proforma'] = 'על הנייר';
$lang['Invoices.types.standard'] = 'סטנדרטי';
$lang['Invoices.status.void'] = 'ריק';
$lang['Invoices.status.draft'] = 'טיוטה';
$lang['Invoices.status.proforma'] = 'על הנייר';
$lang['Invoices.status.active'] = 'פעיל';
$lang['Invoices.!line_item.recurring_renew_description'] = '%1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.coupon_line_item_description_percent'] = 'קופון %1$s - %2$s%%';
$lang['Invoices.!line_item.coupon_line_item_description_amount'] = 'קופון %1$s';
$lang['Invoices.!line_item.prorated_credit'] = 'זיכוי יחסי';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_onetime'] = '↳ תוספת יחסי של %1$s %2$s x %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_date'] = '↳ תוספת יחסי של %1$s %2$s x %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_qty'] = '↳ תוספת יחסי של %1$s %2$s x %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_onetime'] = '↳ תוספת יחסי של %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_date'] = '↳ תוספת יחסי של " %1$s " (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_text'] = '↳ תוספת יחסי של %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_onetime'] = '↳ תוספת יחסי של %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_addition_date'] = '↳ תוספת יחסי של %1$s %2$s (%3$s - %4$s)';
$lang['Invoices.!line_item.service_option_prorated_addition'] = '↳ תוספת יחסי של %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_onetime'] = '↳ שדרוג יחסי של " %1$s " מ- %2$sx %3$s ל- %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_date'] = '↳ שדרוג יחסי של " %1$s " מ- %2$sx %3$s ל- %4$sx %5$s (%6$s - %7$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty'] = '↳ שדרוג יחסי של " %1$s " מ- %2$sx %3$s ל- %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_onetime'] = '↳ שדרוג יחסי של %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_date'] = '↳ שדרוג יחסי של " %1$s " (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_onetime'] = '↳ שדרוג יחסי של " %1$s " מ- %2$s ל- %3$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_date'] = '↳ שדרוג יחסי של " %1$s " מ- %2$s ל- %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade'] = '↳ שדרוג יחסי של " %1$s " מ- %2$s ל- %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description_onetime'] = 'שדרוג יחסי מ- %1$s ל- %2$s - %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description'] = 'שדרוג יחסי מ- %1$s ל- %2$s - %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_setup_fee_description'] = '↳ %1$s - דמי הקמה של %2$s ';
$lang['Invoices.!line_item.service_option_renew_description'] = '↳ %1$s - %2$s';
$lang['Invoices.!line_item.service_setup_fee_description'] = '%1$s - דמי התקנה של %2$s ';
$lang['Invoices.!line_item.service_cancel_fee_description'] = '%1$s - דמי ביטול של " %2$s "';
$lang['Invoices.!line_item.service_renew_description'] = '%5$s%1$s - ( - ) %2$s%3$s %4$s';
$lang['Invoices.!note_private.line_item'] = '- %1$s @ %2$s: %3$s';
$lang['Invoices.!note_private.removed_lines'] = 'פריטים שהוסרו:';
$lang['Invoices.!note_private.service_cancel_date'] = 'שירות מס\'%1$s בוטל %2$s.';
$lang['Invoices.getDeliveryMethods.postalmethods'] = 'שיטות משלוח';
$lang['Invoices.getDeliveryMethods.interfax'] = 'אינטרפקס';
$lang['Invoices.getDeliveryMethods.paper'] = 'נייר';
$lang['Invoices.getDeliveryMethods.email'] = 'דוא"ל';
$lang['Invoices.getPricingPeriods.year'] = 'שנה';
$lang['Invoices.getPricingPeriods.month'] = 'חודש';
$lang['Invoices.getPricingPeriods.week'] = 'שבוע';
$lang['Invoices.getPricingPeriods.day'] = 'יום';
$lang['Invoices.!error.invoice_ids.match'] = 'ניתן למזג חשבוניות פרופורמה רק עם חשבוניות פרופורמה אחרות, וחשבוניות פעילות רק עם חשבוניות פעילות אחרות.';

