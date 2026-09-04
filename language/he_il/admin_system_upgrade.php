<?php
/**
 * Admin System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.he_il
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemUpgrade.index.backup_col_date'] = 'תאריך';
$lang['AdminSystemUpgrade.index.backup_col_file'] = 'קובץ';
$lang['AdminSystemUpgrade.index.backup_col_size'] = 'גודל';
$lang['AdminSystemUpgrade.index.backup_col_type'] = 'סוג';
$lang['AdminSystemUpgrade.index.backup_database'] = 'מסד נתונים';
$lang['AdminSystemUpgrade.index.backup_files'] = 'קבצים';
$lang['AdminSystemUpgrade.index.boxtitle_upgrade'] = 'אפשרויות שדרוג';
$lang['AdminSystemUpgrade.index.btn_check'] = 'בדוק אם יש עדכונים';
$lang['AdminSystemUpgrade.index.btn_clear_lock'] = 'נעילה שקופה';
$lang['AdminSystemUpgrade.index.btn_copy_command'] = 'העתק';
$lang['AdminSystemUpgrade.index.btn_dashboard'] = 'חזרה למסך הראשי';
$lang['AdminSystemUpgrade.index.btn_delete'] = 'מחק';
$lang['AdminSystemUpgrade.index.btn_download'] = 'הורדה';
$lang['AdminSystemUpgrade.index.btn_retry'] = 'נסה שוב';
$lang['AdminSystemUpgrade.index.btn_upgrade'] = 'שדרג עכשיו';
$lang['AdminSystemUpgrade.index.changelog_link'] = 'הצג את יומן השינויים';
$lang['AdminSystemUpgrade.index.clean_stale_files'] = 'הסר קבצי ליבה מיושנים לאחר השדרוג';
$lang['AdminSystemUpgrade.index.clean_stale_files_note'] = 'מחיקת קבצים בספריות הליבה שאינם מופיעים במניפסט של הגרסה החדשה. אל תסמן את התיבה, אלא אם כן אתה בטוח שאין קבצים מותאמים אישית בספריות הליבה.';
$lang['AdminSystemUpgrade.index.command_copied'] = 'הועתק';
$lang['AdminSystemUpgrade.index.confirm_delete_backup'] = 'האם אתה בטוח שברצונך למחוק גיבוי זה? לא ניתן לבטל פעולה זו.';
$lang['AdminSystemUpgrade.index.current_version'] = 'אתה מריץ את Blesta %1$s';
$lang['AdminSystemUpgrade.index.environment_badge_fail'] = '%1$d נכשל';
$lang['AdminSystemUpgrade.index.environment_badge_warn'] = 'אזהרה %1$d';
$lang['AdminSystemUpgrade.index.environment_fail'] = 'חלק מהבדיקות נכשלו. אנא פתור את הבעיות המפורטות להלן לפני השדרוג.';
$lang['AdminSystemUpgrade.index.environment_pass'] = 'כל הבדיקות עברו בהצלחה. המערכת שלך מוכנה לשדרוג עצמי.';
$lang['AdminSystemUpgrade.index.failure_backup_label'] = 'גיבויים זמינים:';
$lang['AdminSystemUpgrade.index.failure_db_version_after'] = 'נוכחי: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_before'] = 'לפני השדרוג: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_expected'] = 'צפוי לאחר השדרוג: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_label'] = 'גרסת מסד הנתונים:';
$lang['AdminSystemUpgrade.index.failure_db_version_mismatch'] = 'גרסת מסד הנתונים לא התקדמה לערך הצפוי. ייתכן שהשדרוג נעצר באמצע תהליך המעבר לגרסה, וכתוצאה מכך יושמו חלק משינויי הסכימה.';
$lang['AdminSystemUpgrade.index.failure_explanation'] = 'השדרוג לא הושלם בהצלחה. ייתכן שהמערכת שלך נמצאת במצב לא עקבי, וחלק מהשינויים במסד הנתונים מהגרסה שנכשלה כבר יושמו. ניסיון חוזר לבצע את השדרוג צפוי להיכשל באופן שונה. מומלץ לשחזר את המערכת מגיבוי מסד הנתונים לפני שתנסה שוב. הגיבויים נוצרו לפני תחילת השדרוג, והם מפורטים להלן. כדי לשחזר את המערכת, יש לשחזר את הגיבויים הללו באופן ידני או לפתוח כרטיס תמיכה לקבלת סיוע.';
$lang['AdminSystemUpgrade.index.failure_heading'] = 'מה לעשות עכשיו';
$lang['AdminSystemUpgrade.index.field_upgradesubmit'] = 'עדכון הגדרות';
$lang['AdminSystemUpgrade.index.heading_available'] = 'עדכונים זמינים';
$lang['AdminSystemUpgrade.index.heading_backups'] = 'שדרוג הגיבויים';
$lang['AdminSystemUpgrade.index.heading_current'] = 'הגרסה הנוכחית';
$lang['AdminSystemUpgrade.index.heading_environment'] = 'מצב הסביבה';
$lang['AdminSystemUpgrade.index.heading_progress'] = 'התקדמות השדרוג';
$lang['AdminSystemUpgrade.index.heading_recovery'] = 'הוראות לשחזור';
$lang['AdminSystemUpgrade.index.last_checked'] = 'נבדק לאחרונה: %1$s';
$lang['AdminSystemUpgrade.index.launch_failed_instruction'] = 'הפעל את הפקודה הבאה באמצעות SSH (כמשתמש שהוא בעל ההתקנה של Blesta) כדי להשלים את השדרוג. השאר דף זה פתוח — ההתקדמות תמשיך להתעדכן כאן בזמן שהפקודה פועלת.';
$lang['AdminSystemUpgrade.index.launch_failed_title'] = 'שדרוג הרקע לא התחיל';
$lang['AdminSystemUpgrade.index.lock_active'] = 'כרגע מתבצע שדרוג, שהחל בכתובת %1$s.';
$lang['AdminSystemUpgrade.index.lock_stale'] = 'נראה שתהליך השדרוג הקודם הופסק באופן בלתי צפוי.';
$lang['AdminSystemUpgrade.index.never_checked'] = 'מעולם לא נבדק';
$lang['AdminSystemUpgrade.index.no_backups'] = 'לא נמצאו גיבויים לשדרוג.';
$lang['AdminSystemUpgrade.index.no_results'] = 'אפשרויות השדרוג אינן זמינות כרגע.';
$lang['AdminSystemUpgrade.index.no_support'] = 'המנויות התמיכה והעדכונים שלך אינן פעילות. זמינים רק עדכוני תיקון.';
$lang['AdminSystemUpgrade.index.page_title'] = 'הגדרות &gt; מערכת &gt; אפשרויות שדרוג';
$lang['AdminSystemUpgrade.index.recovery_db_path'] = 'גיבוי מסד נתונים: %1$s';
$lang['AdminSystemUpgrade.index.recovery_files_path'] = 'גיבוי קבצים: %1$s';
$lang['AdminSystemUpgrade.index.recovery_instructions'] = 'כדי לשחזר מגיבוי, הפעל את הפקודות הבאות בשרת שלך:';
$lang['AdminSystemUpgrade.index.release_date'] = 'תאריך פרסום: %1$s';
$lang['AdminSystemUpgrade.index.requires_support'] = 'נדרש מנוי פעיל לתמיכה ועדכונים.';
$lang['AdminSystemUpgrade.index.select_version'] = 'בחר גרסה לשדרוג אליה:';
$lang['AdminSystemUpgrade.index.skip_integrity_check'] = 'דלג על בדיקת תקינות הקובץ';
$lang['AdminSystemUpgrade.index.step_backup_db'] = 'גיבוי מסד נתונים';
$lang['AdminSystemUpgrade.index.step_backup_files'] = 'גיבוי קבצים';
$lang['AdminSystemUpgrade.index.step_download'] = 'הורדת הודעה לעיתונות';
$lang['AdminSystemUpgrade.index.step_extract'] = 'לחלץ קבצים';
$lang['AdminSystemUpgrade.index.step_finalize'] = 'לסכם';
$lang['AdminSystemUpgrade.index.step_maintenance'] = 'הפעל את מצב התחזוקה';
$lang['AdminSystemUpgrade.index.step_migrate'] = 'הפעל העברות מסד נתונים';
$lang['AdminSystemUpgrade.index.step_preflight'] = 'בדיקות לפני טיסה';
$lang['AdminSystemUpgrade.index.step_replace'] = 'החלף קבצים';
$lang['AdminSystemUpgrade.index.step_verify'] = 'אמת את תקינות הנתונים';
$lang['AdminSystemUpgrade.index.up_to_date'] = 'ההתקנה שלך מעודכנת.';
$lang['AdminSystemUpgrade.index.upgrade_complete'] = 'השדרוג הושלם בהצלחה!';
$lang['AdminSystemUpgrade.index.upgrade_failed'] = 'השדרוג נכשל.';
$lang['AdminSystemUpgrade.index.upgrade_latest'] = 'שדרוג מלא: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.upgrade_patch'] = 'עדכון תיקון: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.upgrade_warning'] = 'פעולה זו תפעיל את מצב התחזוקה, תיצור גיבויים, תוריד ותתקין את הגרסה החדשה, ותבצע העברת נתונים בין מסדי נתונים. לא ניתן להפסיק תהליך זה לאחר תחילתו.';
$lang['AdminSystemUpgrade.upgrade.btn_abort'] = 'בטל';
$lang['AdminSystemUpgrade.upgrade.btn_continue'] = 'המשך לשדרוג';
$lang['AdminSystemUpgrade.upgrade.label_missing'] = 'קבצים חסרים';
$lang['AdminSystemUpgrade.upgrade.label_modified'] = 'קובצים שעברו שינוי';
$lang['AdminSystemUpgrade.upgrade.modified_files'] = '%1$s קובצי הליבה שונו ביחס לגרסה המקורית. שינויים אלה יוחלפו במהלך השדרוג. האם ברצונך להמשיך?';
$lang['AdminSystemUpgrade.upgrade.modified_files_title'] = 'קובצי ליבה שעברו שינוי';
$lang['AdminSystemUpgrade.upgrade.no_checksums'] = 'קובץ המניפסט של ההתקנה הנוכחית שלך אינו כולל בדיקות סיכום. אימות תקינות הקבצים יוחס. האם ברצונך להמשיך בשדרוג?';
$lang['AdminSystemUpgrade.upgrade.no_manifest'] = 'לא נמצא קובץ מפרט עבור ההתקנה הנוכחית שלך. אימות תקינות הקבצים יוחס. האם ברצונך להמשיך בשדרוג?';
$lang['AdminSystemUpgrade.upgrade.started'] = 'תהליך השדרוג החל. ניתן לסגור דף זה — השדרוג ימשיך להתבצע ברקע. חזור לדף זה כדי לבדוק את התקדמות התהליך.';

