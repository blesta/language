<?php
/**
 * Admin System General
 *
 * @package blesta
 * @subpackage blesta.language.he_il
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemGeneral.!error.cache_dir'] = 'ספריית המטמון חייבת להיות ספרייה קיימת שניתן לכתוב אליה.';
$lang['AdminSystemGeneral.!error.cache_dir_marker'] = 'לא ניתן לבצע את שינוי ספריית המטמון מכיוון שלא ניתן לכתוב או למחוק את קובץ הסימון ב-config/cache.dir.php. הענק הרשאת כתיבה לספריית config (ולקובץ הסימון, אם קיים) ונסה שוב.';
$lang['AdminSystemGeneral.!error.geoip_mbstring_required'] = 'הרחבת mbstring נדרשת לצורך תכונה זו.';
$lang['AdminSystemGeneral.!error.upload_dir'] = 'ספריית ההעלאה חייבת להתקיים ולהיות מחוץ לספריית השורש של האתר.';
$lang['AdminSystemGeneral.!notice.text_open_basedir_description'] = 'המאפיין open_basedir ב-PHP מופעל. הגישה לקבצים מוגבלת ל: %1$s. לא ניתן לגשת לתיקיות שמחוץ לנתיבים אלה.';
$lang['AdminSystemGeneral.!paymenttypes.is_lang'] = 'סמן תיבה זו רק אם הוספת הגדרת שפה עבור סוג תשלום זה בקובץ השפה המותאם אישית.';
$lang['AdminSystemGeneral.!paymenttypes.type'] = 'כאשר מוגדר כחיוב, עסקאות המשתמשות בסוג תשלום זה נחשבות כעסקאות מבוססות הכנסה, בעוד שעסקאות המוגדרות כזיכוי אינן מבוססות הכנסה.';
$lang['AdminSystemGeneral.!success.addtype_created'] = 'סוג התשלום "%1$s" נוצר בהצלחה!';
$lang['AdminSystemGeneral.!success.basic_updated'] = 'הגדרות ההתקנה הבסיסית עודכנו בהצלחה!';
$lang['AdminSystemGeneral.!success.deletetype_deleted'] = 'סוג התשלום "%1$s" נמחק בהצלחה!';
$lang['AdminSystemGeneral.!success.edittype_updated'] = 'סוג התשלום "%1$s" עודכן בהצלחה!';
$lang['AdminSystemGeneral.!success.geoip_updated'] = 'הגדרות ה-GeoIP עודכנו בהצלחה!';
$lang['AdminSystemGeneral.!success.license_updated'] = 'מפתח הרישיון שלך עודכן בהצלחה!';
$lang['AdminSystemGeneral.!success.maintenance_updated'] = 'הגדרות התחזוקה עודכנו בהצלחה!';
$lang['AdminSystemGeneral.!tooltip.behind_proxy'] = 'כאשר אפשרות זו מסומנת, Blesta תניח שהיא פועלת מאחורי שרת פרוקסי ותקבע כתובות IP על סמך כותרת x-forwarded-for שמספק שרת הפרוקסי. יש לסמן הגדרה זו רק אם ניתן לסמוך על כותרת x-forwarded-for.';
$lang['AdminSystemGeneral.!tooltip.cache_dir'] = 'ערך זה מייצג את הנתיב המלא בשרת אל המקום שבו Blesta צריכה לשמור קבצים במטמון. על ספרייה זו להיות ניתנת לכתיבה על ידי משתמש ה-web של השרת ומשתמש ה-cron. מטעמי אבטחה, נתיב זה צריך להיות ממוקם מחוץ לשורש ה-web; אם הוא חייב להיות בתוך שורש ה-web, Blesta תיצור קובץ .htaccess כפתרון חלקי, אך תצורות שרת המתעלמות מ-htaccess (כגון Nginx) אינן מספקות הגנה כזו.';
$lang['AdminSystemGeneral.!tooltip.license_key'] = 'זהו מפתח הרישיון שלך ל-Blesta. אם תקבל מפתח רישיון חדש, הזן אותו כאן.';
$lang['AdminSystemGeneral.!tooltip.log_days'] = 'מדיניות השמירה קובעת את משך הזמן שבו יש לשמור את מרבית נתוני היומנים של החברה. קובץ תצורת המערכת עשוי לכלול הגדרות נוספות בנוגע לשמירת יומנים.';
$lang['AdminSystemGeneral.!tooltip.log_dir'] = 'ערך זה מייצג את הנתיב המלא בשרת אל המקום שבו Blesta צריכה לשמור את קבצי היומן. על ספרייה זו להיות ניתנת לכתיבה על ידי משתמש האינטרנט של השרת ומשתמש cron.';
$lang['AdminSystemGeneral.!tooltip.maintenance_mode'] = 'במצב תחזוקה, רק משתמשי צוות רשאים להשתמש במערכת. כל המשתמשים האחרים יופנו לדף הכניסה ויוצג בפניהם הסיבה לתחזוקה.';
$lang['AdminSystemGeneral.!tooltip.maintenance_reason'] = 'הודעת תחזוקה זו תוצג למשתמשים שאינם אנשי צוות הנכנסים למערכת כאשר מצב התחזוקה מופעל.';
$lang['AdminSystemGeneral.!tooltip.root_web_dir'] = 'ערך זה מייצג את הנתיב המלא לתיקיית השורש של שרת האינטרנט (לדוגמה: /home/user/public_html/). זהו לא בהכרח הנתיב לתיקייה שבה מותקן Blesta.';
$lang['AdminSystemGeneral.!tooltip.temp_dir'] = 'ערך זה מייצג את הנתיב המלא בשרת אל המקום שבו Blesta צריכה לשמור קבצים זמניים. על ספרייה זו להיות ניתנת לכתיבה על ידי משתמש ה-web של השרת ומשתמש ה-cron.';
$lang['AdminSystemGeneral.!tooltip.uploads_dir'] = 'ערך זה מייצג את הנתיב המלא בשרת אל המקום שבו Blesta צריכה לשמור קבצים שהועלו. על ספרייה זו להיות ניתנת לכתיבה על ידי משתמש האינטרנט של השרת ומשתמש cron.';
$lang['AdminSystemGeneral.addtype.boxtitle_addtype'] = 'הוסף סוג תשלום';
$lang['AdminSystemGeneral.addtype.field_is_lang'] = 'הגדרת השימוש בשפה';
$lang['AdminSystemGeneral.addtype.field_name'] = 'שם';
$lang['AdminSystemGeneral.addtype.field_type'] = 'סוג';
$lang['AdminSystemGeneral.addtype.field_typesubmit'] = 'הוסף סוג תשלום';
$lang['AdminSystemGeneral.addtype.page_title'] = 'הגדרות &gt; מערכת &gt; כללי &gt; צור סוג תשלום';
$lang['AdminSystemGeneral.basic.boxtitle_basic'] = 'הגדרות בסיסיות';
$lang['AdminSystemGeneral.basic.field.basicsubmit'] = 'עדכון הגדרות';
$lang['AdminSystemGeneral.basic.field.behind_proxy'] = 'השרת שלי נמצא מאחורי פרוקסי או מאזן עומסים';
$lang['AdminSystemGeneral.basic.field.cache_dir'] = 'ספריית המטמון';
$lang['AdminSystemGeneral.basic.field.log_days'] = 'מדיניות תחלופה';
$lang['AdminSystemGeneral.basic.field.log_dir'] = 'ספריית יומנים';
$lang['AdminSystemGeneral.basic.field.root_web_dir'] = 'ספריית השורש';
$lang['AdminSystemGeneral.basic.field.temp_dir'] = 'תיקיית זמנית';
$lang['AdminSystemGeneral.basic.field.uploads_dir'] = 'תיקיית ההעלאות';
$lang['AdminSystemGeneral.basic.page_title'] = 'הגדרות &gt; מערכת &gt; כללי &gt; הגדרות בסיסיות';
$lang['AdminSystemGeneral.basic.text_day'] = 'יום';
$lang['AdminSystemGeneral.basic.text_days'] = 'ימים';
$lang['AdminSystemGeneral.basic.text_docroot'] = 'מצפים ל"%1$s"';
$lang['AdminSystemGeneral.basic.text_no_log'] = 'לעולם אל תסובב את היומן';
$lang['AdminSystemGeneral.basic.text_unwritable'] = 'לא ניתן לכתיבה';
$lang['AdminSystemGeneral.basic.text_writable'] = 'ניתן לכתיבה';
$lang['AdminSystemGeneral.edittype.boxtitle_edittype'] = 'ערוך סוג תשלום';
$lang['AdminSystemGeneral.edittype.field_is_lang'] = 'הגדרת השימוש בשפה';
$lang['AdminSystemGeneral.edittype.field_name'] = 'שם';
$lang['AdminSystemGeneral.edittype.field_type'] = 'סוג';
$lang['AdminSystemGeneral.edittype.field_typesubmit'] = 'עדכון סוג התשלום';
$lang['AdminSystemGeneral.edittype.page_title'] = 'הגדרות &gt; מערכת &gt; כללי &gt; ערוך אמצעי תשלום';
$lang['AdminSystemGeneral.geoip.boxtitle_geoip'] = 'GeoIP';
$lang['AdminSystemGeneral.geoip.field_geoip_enabled'] = 'הפעל את GeoIP';
$lang['AdminSystemGeneral.geoip.field_geoipsubmit'] = 'עדכון הגדרות';
$lang['AdminSystemGeneral.geoip.page_title'] = 'הגדרות &gt; מערכת &gt; כללי &gt; הגדרות GeoIP';
$lang['AdminSystemGeneral.geoip.text_database_exists'] = '%1$s קיים.';
$lang['AdminSystemGeneral.geoip.text_database_not_exists'] = '%1$s לא קיים.';
$lang['AdminSystemGeneral.geoip.text_geolite'] = 'GeoIP דורש את מסד הנתונים הבינארי של GeoLite City, אותו ניתן להוריד מהחשבון שלך בכתובת <a target="_blank" href="%1$s">%1$s</a>. יש לחלץ את הקובץ ולהעלות אותו ל:';
$lang['AdminSystemGeneral.geoip.text_geolite_step_1'] = 'הירשם לחשבון MaxMind';
$lang['AdminSystemGeneral.geoip.text_geolite_step_2'] = 'השתמש בדוא"ל קבלת הפנים כדי להגדיר את הסיסמה שלך';
$lang['AdminSystemGeneral.geoip.text_geolite_step_3'] = 'התחבר לחשבונך';
$lang['AdminSystemGeneral.geoip.text_geolite_step_4'] = 'תחת "GeoIP2 / GeoLite2 &gt; הורדת קבצים" הורידו את הקובץ הבינארי GeoLite2-City';
$lang['AdminSystemGeneral.geoip.text_geolite_step_5'] = 'העלה את הקובץ הזה להתקנת Blesta שלך בנתיב המצוין להלן';
$lang['AdminSystemGeneral.geoip.text_setup'] = 'ניתן להפעיל את GeoIP כאן, ובכך להוסיף ל-Blesta את הפונקציונליות של שירותי מיקום GeoIP. הפעלתו תאפשר לתכונות מסוימות לנצל את שירותי המיקום.';
$lang['AdminSystemGeneral.license.boxtitle_license'] = 'מפתח רישיון';
$lang['AdminSystemGeneral.license.field.license_key'] = 'מפתח רישיון';
$lang['AdminSystemGeneral.license.field.licensesubmit'] = 'עדכון הגדרות';
$lang['AdminSystemGeneral.license.page_title'] = 'הגדרות &gt; מערכת &gt; כללי &gt; מפתח רישיון';
$lang['AdminSystemGeneral.maintenance.boxtitle_maintenance'] = 'תחזוקה';
$lang['AdminSystemGeneral.maintenance.field.maintenance_mode'] = 'הפעל את מצב התחזוקה';
$lang['AdminSystemGeneral.maintenance.field.maintenance_reason'] = 'סיבת התיקון';
$lang['AdminSystemGeneral.maintenance.field.maintenancesubmit'] = 'עדכון הגדרות';
$lang['AdminSystemGeneral.maintenance.page_title'] = 'הגדרות &gt; מערכת &gt; כללי &gt; תחזוקה';
$lang['AdminSystemGeneral.paymenttypes.boxtitle_types'] = 'אמצעי תשלום';
$lang['AdminSystemGeneral.paymenttypes.categorylink_addtype'] = 'הוסף סוג תשלום';
$lang['AdminSystemGeneral.paymenttypes.heading_is_lang'] = 'הגדרות השימוש בשפה';
$lang['AdminSystemGeneral.paymenttypes.heading_name'] = 'שם';
$lang['AdminSystemGeneral.paymenttypes.heading_options'] = 'פעולות';
$lang['AdminSystemGeneral.paymenttypes.heading_type'] = 'סוג';
$lang['AdminSystemGeneral.paymenttypes.modal_delete'] = 'מחיקת אמצעי תשלום זה תגרום לכך שכל העסקאות המשתמשות בו יוגדרו כ"אחר". האם אתה בטוח שברצונך למחוק אמצעי תשלום זה?';
$lang['AdminSystemGeneral.paymenttypes.no_results'] = 'אין אמצעי תשלום.';
$lang['AdminSystemGeneral.paymenttypes.option_delete'] = 'מחק';
$lang['AdminSystemGeneral.paymenttypes.option_edit'] = 'ערוך';
$lang['AdminSystemGeneral.paymenttypes.page_title'] = 'הגדרות &gt; מערכת &gt; כללי &gt; אמצעי תשלום';
$lang['AdminSystemGeneral.paymenttypes.text_no'] = 'לא';
$lang['AdminSystemGeneral.paymenttypes.text_yes'] = 'כן';

