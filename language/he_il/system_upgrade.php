<?php
/**
 * System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.he_il
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SystemUpgrade.environment.os_pass'] = 'מערכת הפעלה: זוהתה מערכת ההפעלה לינוקס.';
$lang['SystemUpgrade.environment.os_fail'] = 'שדרוג עצמי נתמך רק בסביבות לינוקס.';
$lang['SystemUpgrade.environment.exec_pass'] = 'גישה לשורת הפקודה: הפונקציה exec() זמינה.';
$lang['SystemUpgrade.environment.exec_fail'] = 'גישה לשורת הפקודה: הפונקציה exec() מושבתת או אינה זמינה.';
$lang['SystemUpgrade.environment.unzip_pass'] = 'חילוץ ארכיונים: הפקודה unzip זמינה.';
$lang['SystemUpgrade.environment.unzip_fail'] = 'חילוץ ארכיון: הפקודה unzip אינה זמינה. אנא התקן את unzip.';
$lang['SystemUpgrade.environment.mysqldump_pass'] = 'גיבוי מסד נתונים: הפקודה mysqldump זמינה.';
$lang['SystemUpgrade.environment.mysqldump_fail'] = 'גיבוי מסד נתונים: הפקודה mysqldump אינה זמינה. אנא התקן את כלי ה-mysql-client.';
$lang['SystemUpgrade.environment.tar_pass'] = 'גיבוי קבצים: הפקודה tar זמינה.';
$lang['SystemUpgrade.environment.tar_fail'] = 'גיבוי קבצים: הפקודה tar אינה זמינה. אנא התקן את tar.';
$lang['SystemUpgrade.environment.rsync_pass'] = 'סנכרון קבצים: הפקודה rsync זמינה.';
$lang['SystemUpgrade.environment.rsync_fail'] = 'סנכרון קבצים: הפקודה rsync אינה זמינה. אנא התקן את rsync.';
$lang['SystemUpgrade.environment.setsid_pass'] = 'ניתוק תהליך: הפקודה setsid זמינה.';
$lang['SystemUpgrade.environment.setsid_warn'] = 'ניתוק תהליך: הפקודה `setsid` אינה זמינה. ייתכן שהשדרוג יצריך ביצוע פקודה ידנית באמצעות SSH כדי להסתיים בסביבות אירוח מסוג jail.';
$lang['SystemUpgrade.environment.writable_pass'] = 'מערכת הקבצים: ספריית ההתקנה ניתנת לכתיבה.';
$lang['SystemUpgrade.environment.writable_fail'] = 'מערכת הקבצים: שרת האינטרנט אינו רשאי לכתוב לספריית ההתקנה.';
$lang['SystemUpgrade.environment.ownership_pass'] = 'בעלות על קבצים: כל הספריות העיקריות נמצאות בבעלות המשתמש של שרת האינטרנט.';
$lang['SystemUpgrade.environment.ownership_fail'] = 'בעלות על קבצים: ספריות מפתח ב- %1$s אינן בבעלות משתמש שרת האינטרנט.';
$lang['SystemUpgrade.environment.disk_pass'] = 'שטח דיסק: %1$s פנוי.';
$lang['SystemUpgrade.environment.disk_warn'] = 'שטח דיסק: פנוי רק %1$s, נדרש כ- %2$s.';
$lang['SystemUpgrade.environment.config_pass'] = 'הגדרות: הקובץ blesta.php ניתן לכתיבה.';
$lang['SystemUpgrade.environment.config_fail'] = 'הגדרות: הקובץ blesta.php אינו ניתן לכתיבה.';
$lang['SystemUpgrade.maintenance_reason'] = 'המערכת נמצאת כרגע בתהליך שדרוג. אנא נסה שוב בעוד זמן קצר.';
$lang['SystemUpgrade.!error.upgrade_locked'] = 'השדרוג כבר נמצא בעיצומו (החל על ידי העובד בעל מספר זיהוי %1$s בכתובת %2$s).';
$lang['SystemUpgrade.!error.lock_stale'] = 'נראה שתהליך שדרוג קודם הופסק באופן בלתי צפוי. ניתן לבטל את הנעילה כדי לנסות שוב.';
$lang['SystemUpgrade.!error.backup_db_failed'] = 'גיבוי מסד הנתונים נכשל. לא ניתן להמשיך בשדרוג ללא גיבוי אמין.';
$lang['SystemUpgrade.!error.backup_files_failed'] = 'גיבוי הקובץ נכשל. לא ניתן להמשיך בשדרוג ללא גיבוי אמין.';
$lang['SystemUpgrade.!error.download_failed'] = 'לא הצליח להוריד את קובץ הגרסה.';
$lang['SystemUpgrade.!error.hash_mismatch'] = 'בדיקת תקינות הקובץ שהורד נכשלה. ייתכן שהקובץ פגום.';
$lang['SystemUpgrade.!error.signature_missing'] = 'הקובץ אינו כולל חתימה קריפטוגרפית. לא ניתן לאמת את האותנטיות.';
$lang['SystemUpgrade.!error.signature_invalid'] = 'לא ניתן לאמת את חתימת הקובץ. ייתכן שהקובץ זויף.';
$lang['SystemUpgrade.!error.extraction_failed'] = 'לא הצלחתי לחלץ את ארכיון המהדורה.';
$lang['SystemUpgrade.!error.upgrader_failed'] = 'לא הצליחו להכין או להפעיל את תהליך השדרוג.';
$lang['SystemUpgrade.!error.launch_not_detected'] = 'תהליך השדרוג ברקע לא התחיל. מצב זה עלול להתרחש בסביבות אחסון מוגבלות (CloudLinux/CageFS, תצורות מסוימות של PHP-FPM) שבהן שרת האינטרנט אינו רשאי לנתק תהליכים-בנים הפועלים לאורך זמן. ניתן להשלים את השדרוג על ידי הפעלת הפקודה הבאה באמצעות SSH.';
$lang['SystemUpgrade.!error.upgrader_crashed'] = 'נראה שתהליך השדרוג נעצר באופן בלתי צפוי. בדוק את נתיבי הגיבוי המפורטים להלן לצורך שחזור.';
$lang['SystemUpgrade.!error.license_invalid'] = 'על מנת לבצע שדרוגי גרסה עיקריים או משניים, עליך להבטיח שתמיכתך ומנויך לעדכונים יהיו פעילים.';
$lang['SystemUpgrade.!error.php_version'] = 'הגרסה הנדרשת היא PHP %1$s או גרסה חדשה יותר. אתה מפעיל את PHP %2$s.';
$lang['SystemUpgrade.!error.environment_fail'] = 'בדיקה אחת או יותר של סביבת ההפעלה נכשלה. אנא תקן את הבעיות לפני השדרוג.';

