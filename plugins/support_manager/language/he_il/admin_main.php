<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.he_il
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.!success.ai_settings_updated'] = 'הגדרות ה-AI עודכנו בהצלחה.';
$lang['AdminMain.!success.settings_updated'] = 'ההגדרות עודכנו בהצלחה.';
$lang['AdminMain.ai.badge_experimental'] = 'ניסיוני';
$lang['AdminMain.ai.boxtitle_settings'] = 'הגדרות AI';
$lang['AdminMain.ai.button_configure_ai'] = 'עבור אל הגדרות ה-AI של המערכת';
$lang['AdminMain.ai.field_add_ai_disclaimer'] = 'הוסף כתב ויתור שנוצר על ידי בינה מלאכותית';
$lang['AdminMain.ai.field_add_ai_disclaimer_desc'] = 'הוסף הערה לתשובות שנוצרו אוטומטית המציינת שהן נוצרו על ידי בינה מלאכותית (מומלץ לשם שקיפות)';
$lang['AdminMain.ai.field_analyze_trigger'] = 'מפעיל ניתוח בינה מלאכותית';
$lang['AdminMain.ai.field_analyze_trigger_desc'] = 'קובע מתי יופעל ניתוח ה-AI לצורך יצירת תגובות והפעלת כלים.';
$lang['AdminMain.ai.field_analyze_trigger_tooltip'] = 'בחר מתי ה-AI ינתח כרטיסים לצורך תשובות אפשריות ושימושים בכלים. האפשרות "כל תשובה" מנתחת כל הודעה חדשה. האפשרות "פתיחת כרטיס" מנתחת רק את פתיחת הכרטיס הראשונית.';
$lang['AdminMain.ai.field_assistant_name'] = 'שם התצוגה של העוזר הווירטואלי';
$lang['AdminMain.ai.field_assistant_name_desc'] = 'השאר ריק כדי להשתמש בשם ברירת המחדל: "תמיכה"';
$lang['AdminMain.ai.field_assistant_name_placeholder'] = 'תמיכה';
$lang['AdminMain.ai.field_assistant_name_tooltip'] = 'השם המוצג בתגובות שנוצרו על ידי בינה מלאכותית בשרשורי כרטיסים. הדבר מאפשר להתאים אישית את העוזר הווירטואלי לצוות התמיכה שלכם.';
$lang['AdminMain.ai.field_auto_reply_enabled'] = 'הפעל תשובות אוטומטיות לכרטיסים באמצעות בינה מלאכותית';
$lang['AdminMain.ai.field_auto_reply_enabled_desc'] = 'אפשר ל-AI להשיב באופן אוטומטי לפניות כאשר יש לה רמת ודאות גבוהה לגבי התשובה.';
$lang['AdminMain.ai.field_confidence_threshold'] = 'סף הביטחון';
$lang['AdminMain.ai.field_confidence_threshold_desc'] = 'סף גבוה יותר = שמרני יותר (פחות תשובות אוטומטיות, דיוק גבוה יותר). מומלץ: 70% ומעלה.';
$lang['AdminMain.ai.field_confidence_threshold_tooltip'] = 'ה-AI ישיב באופן אוטומטי על כרטיסים רק כאשר רמת הביטחון שלו תגיע לסף זה או תעלה עליו. ערכים גבוהים יותר (90–100%) הם שמרניים ובטוחים יותר. ערכים נמוכים יותר (60–89%) יובילו ליותר תשובות אוטומטיות, אך עם סיכון גבוה יותר לטעויות.';
$lang['AdminMain.ai.field_custom_disclaimer'] = 'טקסט התנערות מאחריות מותאם אישית';
$lang['AdminMain.ai.field_custom_disclaimer_desc'] = 'טקסט זה יצורף לכל התשובות לכרטיסים שנוצרו על ידי בינה מלאכותית.';
$lang['AdminMain.ai.field_custom_disclaimer_placeholder'] = 'תשובה זו נוצרה בעזרת בינה מלאכותית.';
$lang['AdminMain.ai.field_custom_disclaimer_tooltip'] = 'התאם אישית את הודעת ההצהרה המצורפת לתשובות שנוצרו על ידי בינה מלאכותית. השאר שדה זה ריק כדי להשתמש בהודעה המוגדרת כברירת מחדל.';
$lang['AdminMain.ai.field_enabled'] = 'הפעל תכונות בינה מלאכותית עבור Support Manager';
$lang['AdminMain.ai.field_enabled_desc'] = 'אפשר שימוש בתכונות מבוססות בינה מלאכותית במערכת הטיפול בכרטיסים, כולל תגובות אוטומטיות, סיכומים וכלים.';
$lang['AdminMain.ai.field_max_queue_age_hours'] = 'משך הזמן המרבי של תור (בשעות)';
$lang['AdminMain.ai.field_max_queue_age_hours_desc'] = 'יש למחוק תגובות AI בתור שגילן עולה על מספר השעות הזה. הערך חייב להיות בין 1 ל-8760 (שנה אחת). ברירת המחדל היא 24.';
$lang['AdminMain.ai.field_max_queue_age_hours_tooltip'] = 'תשובות של לקוחות הממתינות בתור, שגילן עולה על ערך זה, יוסרו על ידי ה-cron במקום שיעובדו. הדבר מונע מה-AI להשיב לכרטיסים ישנים אם ה-cron הושבת ונוצר עומס עבודה מצטבר.';
$lang['AdminMain.ai.field_max_tokens'] = 'מקס טוקנים';
$lang['AdminMain.ai.field_max_tokens_desc'] = 'קובע את האורך המרבי של התגובות שנוצרו על ידי הבינה המלאכותית. ברירת מחדל: 4000';
$lang['AdminMain.ai.field_max_tokens_tooltip'] = 'המספר המרבי של טוקנים (מילים/חלקי מילים) שה-AI יכול לייצר בתגובה אחת. ערכים גבוהים יותר מאפשרים תגובות ארוכות יותר, אך צורכים יותר משאבים. טווח אופייני: 100–4000 עבור מרבית המשימות.';
$lang['AdminMain.ai.field_model'] = 'מודל בינה מלאכותית';
$lang['AdminMain.ai.field_model_desc'] = 'מודל זה ישמש את כל הפונקציות המבוססות על בינה מלאכותית ב-Support Manager.';
$lang['AdminMain.ai.field_model_tooltip'] = 'בחר את מודל ה-AI שברצונך להשתמש בו במיוחד עבור תכונות Support Manager. לכל מודל יכולות ותמחור שונים.';
$lang['AdminMain.ai.field_override_max_tokens'] = 'עקיפת מספר האסימונים המרבי';
$lang['AdminMain.ai.field_override_max_tokens_desc'] = 'הגדרת ברירת המחדל של המערכת: %1$s';
$lang['AdminMain.ai.field_override_model'] = 'עקיפת מודל ה-AI המוגדר כברירת מחדל';
$lang['AdminMain.ai.field_override_model_desc'] = 'הגדרת ברירת המחדל של המערכת: %1$s';
$lang['AdminMain.ai.field_override_temperature'] = 'טמפרטורת עקיפה';
$lang['AdminMain.ai.field_override_temperature_desc'] = 'הגדרת ברירת המחדל של המערכת: %1$s';
$lang['AdminMain.ai.field_require_human_review'] = 'יש לדרוש בדיקה אנושית לפני השליחה';
$lang['AdminMain.ai.field_require_human_review_desc'] = 'תשובות שנוצרו אוטומטית מוצגות בתוך הכרטיס לשימוש הצוות (מומלץ)';
$lang['AdminMain.ai.field_restricted_departments'] = 'הגבל את התשובה האוטומטית למחלקות';
$lang['AdminMain.ai.field_restricted_departments_desc'] = 'בחר אילו מחלקות תמיכה יוכלו לקבל תשובות אוטומטיות מבוססות בינה מלאכותית. בטל את הסימון מכל האפשרויות כדי לאפשר זאת לכל המחלקות.';
$lang['AdminMain.ai.field_restricted_departments_tooltip'] = 'אפשר תשובות אוטומטיות רק למחלקות כרטיסים ספציפיות. השאר את כל התיבות ללא סימון כדי לאפשר זאת לכל המחלקות.';
$lang['AdminMain.ai.field_submit'] = 'שמור את הגדרות ה-AI';
$lang['AdminMain.ai.field_system_prompt'] = 'הודעת מערכת של מנהל התמיכה';
$lang['AdminMain.ai.field_system_prompt_desc'] = 'הודעה זו משמשת באופן ספציפי לתכונות ה-AI של Support Manager, והיא גוברת על ההודעה הכללית של המערכת.';
$lang['AdminMain.ai.field_system_prompt_tooltip'] = 'הגדר הוראות ספציפיות עבור ה-AI בעת טיפול בכרטיסי תמיכה. הנחיה זו גוברת על ההנחיה הכללית של המערכת ומגדירה את התנהגות ה-AI באופן ספציפי בתוך מערכת הכרטיסים.';
$lang['AdminMain.ai.field_temperature'] = 'טמפרטורה';
$lang['AdminMain.ai.field_temperature_desc'] = 'טמפרטורה נמוכה יותר = ריכוז רב יותר, טמפרטורה גבוהה יותר = יצירתיות רבה יותר. ברירת מחדל: 1.0';
$lang['AdminMain.ai.field_temperature_tooltip'] = 'שולט ברמת האקראיות בתגובות. ערכים נמוכים יותר (0.0–0.7) מניבים תוצאות ממוקדות ודטרמיניסטיות יותר. ערכים גבוהים יותר (1.3–2.0) מניבים תוצאות יצירתיות ומגוונות יותר. טווח: 0.0 עד 2.0';
$lang['AdminMain.ai.field_tool_assign_staff'] = 'להקצות לעובד';
$lang['AdminMain.ai.field_tool_assign_staff_desc'] = 'אפשר ל-AI להקצות כרטיסים לעובדים ספציפיים בהתאם להוראות המופיעות במערכת.';
$lang['AdminMain.ai.field_tool_change_priority'] = 'שינוי עדיפות הכרטיס';
$lang['AdminMain.ai.field_tool_change_priority_desc'] = 'לאפשר ל-AI לשנות את רמת העדיפות של הפנייה (לעלות או לרדת) כאשר הלקוח בחר ברמת עדיפות לא מתאימה או כאשר זותתה על ידי הניתוח.';
$lang['AdminMain.ai.field_tool_close_ticket'] = 'סגור כרטיס';
$lang['AdminMain.ai.field_tool_close_ticket_desc'] = 'אפשר ל-AI לסגור כרטיסים במקרים של דואר זבל, הודעות שחזרו או בעיות שנפתרו באופן ברור.';
$lang['AdminMain.ai.field_tool_instructions'] = 'הוראות שימוש בכלי';
$lang['AdminMain.ai.field_tool_instructions_desc'] = 'יש לספק הוראות ותרחישים ספציפיים שבהם יש להשתמש בכלים. טקסט זה יופיע בהודעת המערכת כאשר הכלים יהיו מופעלים.';
$lang['AdminMain.ai.field_tool_instructions_placeholder'] = 'דוגמה:&amp;#10;- להקצות בעיות טכניות הקשורות לשרתי לינוקס לג\'ון, ושרתי Windows לדייב&amp;#10;- לסגור רק כרטיסים שברור כי הם דואר זבל, תשובות אוטומטיות, או שהלקוח ציין בתגובה האחרונה כי הבעיה נפתרה&amp;#10;- להעלות את העדיפות של בעיות דחופות הכוללות את המילים \'down\' או \'offline\' לסטטוס \'חירום\'&amp;#10;- להוריד את העדיפות של כרטיסי \'חירום\' אם אין מדובר במקרי חירום של ממש';
$lang['AdminMain.ai.field_tool_instructions_tooltip'] = 'ספקו הנחיות מפורטות ל-AI לגבי מתי וכיצד להשתמש בכלים שהופעלו. לדוגמה, ציינו את שמות העובדים ותחומי ההתמחות שלהם לצורך הקצאת כרטיסים.';
$lang['AdminMain.ai.field_tools_available'] = 'כלים זמינים';
$lang['AdminMain.ai.field_tools_available_tooltip'] = 'בחר אילו כלים מותר ל-AI להשתמש בהם. כל כלי מאפשר פעולות ספציפיות שה-AI יכול לבצע בעת הטיפול בכרטיסים.';
$lang['AdminMain.ai.field_tools_enabled'] = 'הפעל כלים';
$lang['AdminMain.ai.field_tools_enabled_desc'] = 'אפשר ל-AI להשתמש בכלים לניהול כרטיסים, כגון שינוי סדר העדיפויות, סגירת כרטיסים או הקצאת כרטיסים לעובדים.';
$lang['AdminMain.ai.heading_experimental'] = 'תכונות ניסיוניות';
$lang['AdminMain.ai.heading_features'] = 'תכונות בינה מלאכותית';
$lang['AdminMain.ai.heading_model'] = 'תצורת הדגם';
$lang['AdminMain.ai.heading_parameters'] = 'פרמטרים של המודל';
$lang['AdminMain.ai.heading_replies'] = 'תשובות אוטומטיות';
$lang['AdminMain.ai.heading_system_prompt'] = 'הודעת מערכת';
$lang['AdminMain.ai.heading_tools'] = 'כלי בינה מלאכותית';
$lang['AdminMain.ai.option_every_reply'] = 'כל תגובה';
$lang['AdminMain.ai.option_ticket_opened'] = 'הכרטיס נפתח בלבד';
$lang['AdminMain.ai.page_title'] = 'מנהל התמיכה &gt; הגדרות AI';
$lang['AdminMain.ai.warning_not_configured_text'] = 'השימוש בתכונות ה-AI של מנהל התמיכה מחייב מפתח API של Blesta AI. אנא הגדר את מפתח ה-API שלך תחת \'הגדרות מערכת\' &gt; \'בינה מלאכותית\' לפני שתפעיל את תכונות ה-AI.';
$lang['AdminMain.ai.warning_not_configured_title'] = 'נדרש מפתח API של Blesta AI';
$lang['AdminMain.settings.boxtitle_settings'] = 'הגדרות';
$lang['AdminMain.settings.field_avatar'] = 'אוואטר';
$lang['AdminMain.settings.field_default_avatar'] = 'תמונת פרופיל ברירת מחדל';
$lang['AdminMain.settings.field_submit'] = 'עדכון הגדרות';
$lang['AdminMain.settings.heading_avatar_settings'] = 'הגדרות אוואטר';
$lang['AdminMain.settings.option_default'] = 'השתמש באווטאר מותאם אישית בלבד';
$lang['AdminMain.settings.option_fallback'] = 'השתמש ב-Gravatar, אך החלף אותו אם הוגדר אווטאר מותאם אישית';
$lang['AdminMain.settings.option_gravatar'] = 'השתמש ב-Gravatar';
$lang['AdminMain.settings.page_title'] = 'מנהל התמיכה &gt; הגדרות';
$lang['AdminMain.settings.text_avatar_recommendation'] = 'מומלץ: 150x150 פיקסלים, JPG או PNG, עד 2MB';
$lang['AdminMain.settings.text_remove_avatar'] = 'הסר תמונה';

