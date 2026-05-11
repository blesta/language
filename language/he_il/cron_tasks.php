<?php
/**
 * Cron Tasks
 *
 * @package blesta
 * @subpackage blesta.language.he_il
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['CronTasks.crontask.description.delete_expired_password_reset_tokens'] = 'מסיר מהמערכת את כל אסימוני איפוס הסיסמה שתוקפם פג.';
$lang['CronTasks.crontask.name.delete_expired_password_reset_tokens'] = 'מחיקת אסימוני איפוס סיסמה שפג תוקפם';
$lang['CronTasks.crontask.name.license_validation'] = 'אימות רישיון';
$lang['CronTasks.crontask.description.transition_quotations'] = 'סמן ציטוטים שתוקפם פג כ"פג תוקף"';
$lang['CronTasks.crontask.name.transition_quotations'] = 'ציטוטים בנושא מעבר';
$lang['CronTasks.crontask.description.unsuspend_services'] = 'שירותים שהושעו ושולמו עבורם יוחזרו לפעילות במועד שנבחר.';
$lang['CronTasks.crontask.name.unsuspend_services'] = 'ביטול השעיית שירותים';
$lang['CronTasks.crontask.description.cleanup_logs'] = 'יומני השער הישן, המודול ויומנים אחרים יוחלפו מדי יום בהתאם להגדרות השמירתם, בשעה שצוינה.';
$lang['CronTasks.crontask.name.cleanup_logs'] = 'ניקוי יומנים';
$lang['CronTasks.crontask.description.deliver_reports'] = 'דוחות חשבונות חייבים, הפקת חשבוניות, חבות מס ודוחות נוספים יועברו מדי יום בשעה שנקבעה.';
$lang['CronTasks.crontask.name.deliver_reports'] = 'לשלוח דוחות';
$lang['CronTasks.crontask.description.exchange_rates'] = 'שערי החליפין יעודכנו במרווח הזמן שצוין. לא מומלץ להפעיל את התהליך יותר מפעמיים ביום, בשל הסיכון לחסימה.';
$lang['CronTasks.crontask.name.exchange_rates'] = 'עדכוני שערי חליפין';
$lang['CronTasks.crontask.description.suspend_services'] = 'שירותים שלא שולמו יופסקו מדי יום בשעה שצוינה.';
$lang['CronTasks.crontask.name.suspend_services'] = 'השעיית שירותים';
$lang['CronTasks.crontask.description.backups_sftp'] = 'גיבויי SFTP מתוזמנים תחת \'הגדרות מערכת\' &gt; \'גיבוי\' &gt; \'FTP מאובטח\'.';
$lang['CronTasks.crontask.name.backups_sftp'] = 'גיבויים באמצעות SFTP';
$lang['CronTasks.crontask.description.backups_amazons3'] = 'גיבויי Amazon S3 מתוזמנים תחת \'הגדרות מערכת\' &gt; \'גיבוי\' &gt; \'Amazon S3\'.';
$lang['CronTasks.crontask.name.backups_amazons3'] = 'גיבויים של Amazon S3';
$lang['CronTasks.crontask.description.deliver_invoices'] = 'חשבוניות שתוזמנו למשלוח יישלחו במרווח הזמן שנבחר.';
$lang['CronTasks.crontask.name.deliver_invoices'] = 'לשלוח חשבוניות';
$lang['CronTasks.crontask.description.card_expiration_reminders'] = 'ב-15 לחודש תישלח תזכורת לגבי כרטיסי אשראי שתוקפם פג באותו חודש, בשעה שצוינה.';
$lang['CronTasks.crontask.name.card_expiration_reminders'] = 'תזכורות לתוקף כרטיס ב-15 לחודש';
$lang['CronTasks.crontask.description.cancel_scheduled_services'] = 'שירותים שנקבעו עבורם תאריכי ביטול עתידיים מוסרים במרווח הזמן שנבחר.';
$lang['CronTasks.crontask.name.cancel_scheduled_services'] = 'ביטול שירותים מתוזמנים';
$lang['CronTasks.crontask.description.provision_pending_services'] = 'שירותים בתשלום בהמתנה מופעלים במרווח הזמן שנבחר.';
$lang['CronTasks.crontask.name.provision_pending_services'] = 'שירותים ששולמו מראש';
$lang['CronTasks.crontask.description.process_renewing_services'] = 'שירותים המקושרים למודולים מתחדשים במרווח הזמן שנבחר.';
$lang['CronTasks.crontask.name.process_renewing_services'] = 'חידוש שירותי תהליכים';
$lang['CronTasks.crontask.description.process_service_changes'] = 'שינויים בשירות בתשלום בתור (כגון שדרוגים) מעובדים במרווח הזמן שנבחר.';
$lang['CronTasks.crontask.name.process_service_changes'] = 'שינויים בשירותי תהליכים';
$lang['CronTasks.crontask.description.apply_payments'] = 'זיכויים לא מנוצלים מוחלים על חשבוניות פתוחות באופן אוטומטי במרווח הזמן שנבחר.';
$lang['CronTasks.crontask.name.apply_payments'] = 'לשקלל תשלומים לחשבוניות פתוחות';
$lang['CronTasks.crontask.description.payment_reminders'] = 'תזכורות לתשלום והודעות על איחור בתשלום נשלחות מדי יום בשעה שנקבעה.';
$lang['CronTasks.crontask.name.payment_reminders'] = 'תזכורות לתשלום';
$lang['CronTasks.crontask.description.autodebit'] = 'חשבונות תשלום שנבחרו לחיוב אוטומטי ינוצלו לתשלום חשבוניות פתוחות מדי יום בשעה שצוינה.';
$lang['CronTasks.crontask.name.autodebit'] = 'חיוב אוטומטי';
$lang['CronTasks.crontask.description.apply_invoice_late_fees'] = 'מחיל קנסות איחור על חשבוניות פתוחות לאחר מספר ימים שנקבע ממועד התשלום.';
$lang['CronTasks.crontask.name.apply_invoice_late_fees'] = 'להחיל קנסות על איחור בתשלום חשבוניות';
$lang['CronTasks.crontask.description.create_invoice'] = 'חשבוניות חוזרות ושירותים מתחדשים מחויבים באמצעות משימה זו, המתבצעת פעם ביום בשעה שנקבעה.';
$lang['CronTasks.crontask.name.create_invoice'] = 'צור חשבונית';
$lang['CronTasks.task_type.module'] = 'מודול';
$lang['CronTasks.task_type.plugin'] = 'תוסף';
$lang['CronTasks.task_type.system'] = 'מערכת';
$lang['CronTasks.!error.type.format'] = 'סוג משימת cron אינו חוקי. יש לציין \'זמן\' או \'מרווח\'.';
$lang['CronTasks.!error.time.format'] = 'הפורמט של השעה אינו תקין.';
$lang['CronTasks.!error.interval.format'] = 'האינטרוול חייב להיות מספר המייצג דקות.';
$lang['CronTasks.!error.enabled.length'] = 'אורך השם המותר לא יעלה על תו אחד.';
$lang['CronTasks.!error.enabled.format'] = 'הערך \'enabled\' חייב להיות מספר.';
$lang['CronTasks.!error.is_lang.length'] = 'אורך is_lang לא יכול לעלות על תו אחד.';
$lang['CronTasks.!error.is_lang.format'] = 'is_lang חייב להיות מספר.';
$lang['CronTasks.!error.name.empty'] = 'אנא הזן שם.';
$lang['CronTasks.!error.id.exists'] = 'מזהה משימה של cron אינו חוקי.';
$lang['CronTasks.!error.run_id.exists'] = 'מזהה הפעלה לא חוקי של משימת cron.';
$lang['CronTasks.!error.dir.length'] = 'אורך הספרייה לא יעלה על 64 תווים.';
$lang['CronTasks.!error.task_type.format'] = 'סוג משימה לא חוקי. חייב להיות מודול, תוסף או מערכת.';
$lang['CronTasks.!error.key.length'] = 'אורך מפתח משימת cron לא יכול לעלות על 64 תווים.';
$lang['CronTasks.!error.key.unique'] = 'מפתח משימת cron שסופק כבר בשימוש.';
$lang['CronTasks.crontask.name.low_balance_notifications'] = 'התראות על יתרה נמוכה';
$lang['CronTasks.crontask.description.low_balance_notifications'] = 'שולח התראה לכל המשתמשים שרמת האשראי שלהם ירדה מתחת לסף שהוגדר עבורם.';

