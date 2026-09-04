<?php
/**
 * Cron
 *
 * @package blesta
 * @subpackage blesta.language.he_il
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Cron.!error.cron.failed'] = 'Cron לא הצליח לבצע רישום.';
$lang['Cron.!error.task_execution.failed'] = 'שגיאה: %1$s %2$s';
$lang['Cron.!error.task_filter.both_include_exclude'] = 'מסנן משימות אינו יכול להכיל גם את המפתחות "include" וגם את המפתחות "exclude".';
$lang['Cron.!error.task_filter.exclude_not_array'] = 'מסנן המשימות "exclude" חייב להיות מערך.';
$lang['Cron.!error.task_filter.include_not_array'] = 'מסנן המשימות "include" חייב להיות מערך.';
$lang['Cron.!error.task_filter.invalid_format'] = 'מסנן המשימות חייב להיות אובייקט JSON.';
$lang['Cron.!error.task_filter.invalid_json'] = 'JSON לא חוקי בפרמטר מסנן המשימות: %1$s';
$lang['Cron.addpaidpendingservices.attempt'] = 'מנסים להקצות שירותים בתשלום הממתינים לאישור.';
$lang['Cron.addpaidpendingservices.completed'] = 'המשימה של השירותים הממתינים לתשלום הושלמה.';
$lang['Cron.addpaidpendingservices.service_error'] = 'לא ניתן היה להפעיל את השירות הממתין מס\'%1$s של הלקוח מס\'%2$s.';
$lang['Cron.addpaidpendingservices.service_success'] = 'השירות הממתין מס\'%1$s של הלקוח מס\'%2$s פעיל כעת.';
$lang['Cron.applycredits.apply_failed'] = 'לא ניתן לממש את הזיכויים הממתינים עבור הלקוח מס\'%1$s.';
$lang['Cron.applycredits.apply_none'] = 'אין חשבוניות שניתן לקזז בהן זיכויים.';
$lang['Cron.applycredits.apply_success'] = 'הזיכויים הממתינים מהעסקה %1$s עבור הלקוח מס\'%2$s הועברו בהצלחה לחשבונית מס\'%3$s בסכום של %4$s.';
$lang['Cron.applycredits.attempt'] = 'מנסים לקזז זיכויים מחשבוניות פתוחות.';
$lang['Cron.applycredits.completed'] = 'המשימה \'החל זיכויים\' הושלמה.';
$lang['Cron.autodebitinvoices.attempt'] = 'ניסיון לבצע חיוב אוטומטי של חשבוניות פתוחות.';
$lang['Cron.autodebitinvoices.charge_attempt'] = 'ניסיון לבצע חיוב אוטומטי מחשבון הלקוח מס\'%1$s בגין כל החשבוניות הפתוחות בסך של %2$s.';
$lang['Cron.autodebitinvoices.charge_failed'] = 'לא ניתן לעבד את התשלום.';
$lang['Cron.autodebitinvoices.charge_success'] = 'התשלום עבר בהצלחה.';
$lang['Cron.autodebitinvoices.completed'] = 'משימת חיוב האוטומטי הושלמה.';
$lang['Cron.cancelscheduledservices.attempt'] = 'מנסים לבטל שירותים מתוזמנים.';
$lang['Cron.cancelscheduledservices.cancel_error'] = 'לא ניתן היה לבטל את השירות #%1$s של הלקוח #%2$s.';
$lang['Cron.cancelscheduledservices.cancel_success'] = 'השירות מס\'%1$s של הלקוח מס\'%2$s בוטל.';
$lang['Cron.cancelscheduledservices.completed'] = 'המשימה לביטול השירותים המתוזמנים הושלמה.';
$lang['Cron.cardexpirationreminders.attempt'] = 'מנסים לשלוח תזכורות על תוקף הכרטיס.';
$lang['Cron.cardexpirationreminders.completed'] = 'המשימה של תזכורות לתוקף הכרטיס הושלמה.';
$lang['Cron.cardexpirationreminders.failed'] = 'לא ניתן היה לשלוח את התזכורת על תוקף הקשר %1$s %2$s מלקוח מס\'%3$s.';
$lang['Cron.cardexpirationreminders.success'] = 'נשלחה בהצלחה תזכורת על תוקף הרישום עבור איש הקשר %1$s %2$s מטעם הלקוח מס\'%3$s.';
$lang['Cron.index.attempt_all'] = 'ניסיון להפעיל את כל המשימות עבור %1$s.';
$lang['Cron.index.attempt_all_system'] = 'מנסה להפעיל את כל משימות המערכת.';
$lang['Cron.index.completed_all'] = 'כל המשימות הושלמו.';
$lang['Cron.index.completed_all_system'] = 'כל משימות המערכת הושלמו.';
$lang['Cron.suspendservices.attempt'] = 'מנסים להקפיא שירותים שהגיעו למועד התשלום.';
$lang['Cron.suspendservices.completed'] = 'משימת השעיית השירותים הושלמה.';
$lang['Cron.suspendservices.suspend_error'] = 'לא ניתן היה להשעות את השירות #%1$s מהלקוח %2$s.';
$lang['Cron.suspendservices.suspend_success'] = 'השירות #%1$s, המנוהל על ידי הלקוח %2$s, הושעה.';
$lang['Cron.suspendservices.suspension_reason'] = 'אי-תשלום';
$lang['Cron.unsuspendservices.attempt'] = 'ניסיון לבטל את השעיית השירותים בתשלום שהושעו.';
$lang['Cron.unsuspendservices.completed'] = 'המשימה \'ביטול השעיית שירותים\' הושלמה.';
$lang['Cron.unsuspendservices.unsuspend_error'] = 'לא ניתן היה לבטל את השעיית השירות #%1$s מהלקוח %2$s.';
$lang['Cron.unsuspendservices.unsuspend_success'] = 'השירות #%1$s, השייך ללקוח %2$s, הוחזר לפעילות.';

