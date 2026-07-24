<?php
/**
 * Admin System Ai
 *
 * @package blesta
 * @subpackage blesta.language.he_il
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemAi.!success.settings_updated'] = 'הגדרות ה-AI עודכנו בהצלחה!';
$lang['AdminSystemAi.!success.api_key_fetched'] = 'מפתח ה-API הוצא בהצלחה מחשבון Blesta שלך.';
$lang['AdminSystemAi.!error.connection_failed'] = 'לא ניתן להתחבר ל-API של ה-AI: %1$s';
$lang['AdminSystemAi.!error.invalid_request'] = 'בקשה לא חוקית.';
$lang['AdminSystemAi.!error.username_required'] = 'אנא הזן את שם המשתמש שלך ב-account.blesta.com.';
$lang['AdminSystemAi.!error.no_license_key'] = 'לא נמצא מפתח רישיון של Blesta. אנא הגדר את הרישיון שלך תחילה.';
$lang['AdminSystemAi.!error.auth_failed'] = 'האימות נכשל. אנא בדוק את שם המשתמש ומפתח הרישיון שלך.';
$lang['AdminSystemAi.!error.request_failed'] = 'הבקשה נכשלה. אנא נסה שוב.';
$lang['AdminSystemAi.!error.api_key_required'] = 'אנא הזן מפתח API.';
$lang['AdminSystemAi.!error.invalid_api_key'] = 'מפתח API לא חוקי.';
$lang['AdminSystemAi.index.page_title'] = 'הגדרות &gt; מערכת &gt; בינה מלאכותית';
$lang['AdminSystemAi.index.boxtitle_ai'] = 'הגדרות AI';
$lang['AdminSystemAi.index.field.ai_enabled'] = 'הפעל תכונות בינה מלאכותית';
$lang['AdminSystemAi.index.field.ai_api_key'] = 'מפתח API';
$lang['AdminSystemAi.index.field.ai_default_model'] = 'המודל המוגדר כברירת מחדל';
$lang['AdminSystemAi.index.field.ai_temperature'] = 'טמפרטורה';
$lang['AdminSystemAi.index.field.ai_max_tokens'] = 'מקס טוקנים';
$lang['AdminSystemAi.index.field.submit'] = 'עדכון הגדרות';
$lang['AdminSystemAi.index.tooltip.ai_enabled'] = 'הפעל או השבת תכונות בינה מלאכותית בכל המערכת.';
$lang['AdminSystemAi.index.tooltip.ai_api_key'] = 'מפתח ה-API של Blesta AI שלך. ניתן להשיג אותו בכתובת account.blesta.com.';
$lang['AdminSystemAi.index.tooltip.ai_default_model'] = 'מודל ה-AI המוגדר כברירת מחדל לשימוש בהשלמת טקסט בצ\'אט.';
$lang['AdminSystemAi.index.tooltip.ai_temperature'] = 'שולט ברמת האקראיות. ערכים נמוכים יותר הם דטרמיניסטיים יותר, וערכים גבוהים יותר הם יצירתיים יותר. טווח: 0.0 עד 2.0';
$lang['AdminSystemAi.index.tooltip.ai_max_tokens'] = 'המספר המרבי של אסימונים שניתן ליצור בתגובות.';
$lang['AdminSystemAi.index.text_connected'] = 'החיבור ל-Blesta AI הושלם בהצלחה.';
$lang['AdminSystemAi.index.text_connection_error'] = 'לא הצליח להתחבר ל-Blesta AI. בדוק את מפתח ה-API שלך.';
$lang['AdminSystemAi.index.text_balance'] = 'איזון: %1$s %2$s';
$lang['AdminSystemAi.index.text_temperature_range'] = '(0.0 - 2.0)';
$lang['AdminSystemAi.index.text_fetch_key'] = 'הורד מחשבון Blesta שלי';
$lang['AdminSystemAi.index.text_manual_entry'] = 'הזן את מפתח ה-API שלך באופן ידני או קבל אותו באופן אוטומטי מהחשבון שלך.';
$lang['AdminSystemAi.index.text_validating'] = 'בודק...';
$lang['AdminSystemAi.index.text_key_valid'] = 'מפתח ה-API אומת ונשמר';
$lang['AdminSystemAi.index.text_select_model'] = 'בחר דגם';
$lang['AdminSystemAi.index.text_api_status'] = 'סטטוס ה-API';
$lang['AdminSystemAi.index.text_status_active'] = 'פעיל';
$lang['AdminSystemAi.index.text_remaining_credits'] = 'יתרת נקודות זכות';
$lang['AdminSystemAi.index.text_credits_used'] = 'נקודות שנצרכו (החודש)';
$lang['AdminSystemAi.index.text_last_api_call'] = 'הקריאה האחרונה ל-API';
$lang['AdminSystemAi.index.text_no_calls_yet'] = 'עדיין לא התקבלו שיחות';
$lang['AdminSystemAi.modal.heading_fetch'] = 'הורד מחשבון Blesta שלי';
$lang['AdminSystemAi.modal.text_subtitle'] = 'יש להזין את שם המשתמש שלך כדי לאחזר את מפתח ה-API שלך';
$lang['AdminSystemAi.modal.text_info'] = 'שם המשתמש שלך ב-account.blesta.com ומפתח הרישיון שלך ל-Blesta ישמשו לאימות הרישיון שלך ולהפקת מפתח API חדש ל-Blesta AI באופן אוטומטי. אם כבר נוצר מפתח, הוא יבוטל ויופק מפתח חדש.';
$lang['AdminSystemAi.modal.field.username'] = 'שם משתמש';
$lang['AdminSystemAi.modal.field.username_placeholder'] = 'הזן את שם המשתמש של חשבונך';
$lang['AdminSystemAi.modal.button.authenticate'] = 'אימות';
$lang['AdminSystemAi.modal.button.cancel'] = 'בטל';
$lang['AdminSystemAi.modal.text_authenticating'] = 'מאמת...';
$lang['AdminSystemAi.index.heading_api'] = 'הגדרת ממשק ה-API';
$lang['AdminSystemAi.index.heading_model'] = 'המודל המוגדר כברירת מחדל';
$lang['AdminSystemAi.index.heading_parameters'] = 'פרמטרים של המודל';
$lang['AdminSystemAi.index.heading_prompts'] = 'הודעות המערכת';
$lang['AdminSystemAi.index.heading_features'] = 'תכונות מופעלות';
$lang['AdminSystemAi.index.field.ai_global_prompt'] = 'הודעת מערכת גלובלית (ברירת מחדל)';
$lang['AdminSystemAi.index.tooltip.ai_global_prompt'] = 'ההוראות המוגדרות כברירת מחדל הנשלחות למודל ה-AI עם כל בקשה. אלה מגדירות את התנהגות ה-AI ואת ההקשר בכל התכונות.';
$lang['AdminSystemAi.index.text_global_prompt_help'] = 'הנחיה זו חלה על כל תכונות ה-AI, אלא אם כן נקבע אחרת בתוך התכונה עצמה.';
$lang['AdminSystemAi.index.field.ai_feature_package_descriptions'] = 'תיאור החבילות';
$lang['AdminSystemAi.index.text_feature_package_descriptions'] = 'ליצור תיאורי מוצרים ושירותים משכנעים';
$lang['AdminSystemAi.index.field.ai_feature_email_templates'] = 'תבניות דוא"ל';
$lang['AdminSystemAi.index.text_feature_email_templates'] = 'עריכה ושיפור של תבניות דוא"ל בעזרת בינה מלאכותית';
$lang['AdminSystemAi.index.field.ai_feature_chatbot'] = 'צ\'אט-בוט';
$lang['AdminSystemAi.index.text_feature_chatbot'] = 'צ\'אט-בוט מבוסס בינה מלאכותית לסיוע לצוות';
$lang['AdminSystemAi.index.field.ai_chatbot_staff_groups'] = 'גישה לקבוצת עובדים';
$lang['AdminSystemAi.index.tooltip.ai_chatbot_staff_groups'] = 'בחר אילו קבוצות עובדים יוכלו לגשת לצ\'אט-בוט המונע על ידי בינה מלאכותית. ניתן לבחור מספר קבוצות.';
$lang['AdminSystemAi.index.text_staff_groups_help'] = 'החזק את מקש Ctrl (Cmd ב-Mac) כדי לבחור מספר קבוצות.';
$lang['AdminSystemAi.index.text_features_intro'] = 'בחר באילו מתכונות הליבה של Blesta יש להפעיל את הסיוע של הבינה המלאכותית. תוספים יכולים לגשת לתכונות הבינה המלאכותית והם מוגדרים באופן עצמאי.';
$lang['AdminSystemAi.index.heading_beta'] = 'הודעה על תכונה בגרסת בטא';
$lang['AdminSystemAi.index.text_beta_notice'] = 'תכונה זו נמצאת כרגע בשלב בטא ועשויה להניב תוצאות בלתי צפויות או לא מדויקות. יש להשתמש בה בזהירות.';
$lang['AdminSystemAi.index.heading_privacy'] = 'הודעה בנושא פרטיות';
$lang['AdminSystemAi.index.text_privacy_notice'] = 'הבקשות נשלחות לספקי בינה מלאכותית חיצוניים (כגון OpenAI, Anthropic) לצורך עיבוד. שירות ה-AI של Blesta אינו שומר נתוני שיחות בינה מלאכותית; עם זאת, אין לנו שליטה על האופן שבו ספקים אלה מטפלים בנתונים או שומרים אותם. הימנעו משליחת מידע רגיש או סודי.';
$lang['AdminSystemAi.index.heading_privacy_acknowledgment'] = 'הצהרת פרטיות';
$lang['AdminSystemAi.index.field.ai_privacy_acknowledged'] = 'קראתי והבנתי את הודעת הפרטיות שלעיל.';
$lang['AdminSystemAi.index.text_privacy_last_acknowledged'] = 'עודכן לאחרונה ב- %1$s.';
$lang['AdminSystemAi.!error.privacy_not_acknowledged'] = 'עליך להסכים להודעת הפרטיות לפני השמירה.';
$lang['AdminSystemAi.index.heading_email_context'] = 'הגדרות הקשר של תבנית דוא"ל';
$lang['AdminSystemAi.index.field.ai_email_context_depth'] = 'עומק הקשר';
$lang['AdminSystemAi.index.tooltip.ai_email_context_depth'] = 'עומק מרבי לניתוח קשרי מודל. ערכים גבוהים יותר כוללים נתונים קשורים נוספים, אך מגדילים את השימוש באסימונים. טווח: 1–5.';
$lang['AdminSystemAi.index.text_email_context_depth'] = 'קובע עד לאיזו רמה לעקוב אחר קשרי הגומלין (לדוגמה, חשבונית → לקוח → אנשי קשר). ברירת מחדל: 2';
$lang['AdminSystemAi.index.field.ai_email_context_schemas'] = 'כלול הגדרות סכימה';
$lang['AdminSystemAi.index.text_email_context_schemas'] = 'יש לכלול בהקשר מידע על סוגי השדות ועל מבני מסדי הנתונים.';
$lang['AdminSystemAi.index.field.ai_email_context_examples'] = 'כלול נתוני דוגמה';
$lang['AdminSystemAi.index.text_email_context_examples'] = 'כלול ערכי נתונים לדוגמה כדי לסייע לבינה המלאכותית להבין את פורמטי הנתונים ואת המבנה שלהם.';
$lang['AdminSystemAi.index.degraded_model'] = 'המודל הנבחר כרגע, "%1$s", אינו זמין עוד. תכונות ה-AI משתמשות באופן זמני ב-"%2$s". אנא בחר מודל ברירת מחדל חדש מהרשימה שלמטה ושמור.';
$lang['AdminSystemAi.index.model_recommended'] = '(מומלץ)';

