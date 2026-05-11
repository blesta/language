<?php
/**
 * Authorize Net
 *
 * @package blesta
 * @subpackage blesta.language.he_il
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Authorize_net.apis_cim'] = 'CIM (חייב להיות מופעל על ידי Authorize.Net)';
$lang['Authorize_net.apis_aim'] = 'AIM (ברירת מחדל)';
$lang['Authorize_net.dev_mode_note'] = 'הפעלת אפשרות זו תשלח עסקאות לסביבת המפתחים של Authorize.net. כדי להשתמש בסביבה זו, עליך להחזיק בחשבון בדיקה למפתחים.';
$lang['Authorize_net.dev_mode'] = 'מצב מפתחים';
$lang['Authorize_net.test_mode_note'] = 'תכונת מצב הבדיקה נתמכת רק על ידי AIM. כדי לבדוק עסקאות CIM, עליך להפעיל את מצב הבדיקה מתוך חשבון Authorize.net שלך.';
$lang['Authorize_net.test_mode'] = 'מצב בדיקה';
$lang['Authorize_net.api'] = 'ממשק API לתשלומים';
$lang['Authorize_net.transaction_key'] = 'מפתח העסקה';
$lang['Authorize_net.login_id'] = 'שם משתמש';
$lang['Authorize_net.description'] = 'עיבוד אמין ומהיר של תשלומים בכרטיסי אשראי ובשיטת ACH';
$lang['Authorize_net.name'] = 'Authorize.Net';
$lang['Authorize_net.!error.card_number.missing'] = 'לא ניתן לעדכן את תאריך התפוגה ללא מספר הכרטיס המלא.';
$lang['Authorize_net.!error.dev_mode.valid'] = 'יש להגדיר את מצב המפתח כ-"true" אם הוא קיים.';
$lang['Authorize_net.!error.test_mode.valid'] = 'יש להגדיר את מצב הבדיקה כ-"true" אם הוא מוגדר.';
$lang['Authorize_net.!error.transaction_key.format'] = 'אורך מפתח העסקה חייב להיות 16 תווים.';
$lang['Authorize_net.!error.login_id.format'] = 'שם המשתמש לא יעלה על 20 תווים ואסור שיהיה ריק.';
$lang['Authorize_net.validation_modes_live'] = 'בשידור חי';
$lang['Authorize_net.validation_modes_test'] = 'מבחן';
$lang['Authorize_net.validation_modes_none'] = 'אין';
$lang['Authorize_net.validation_note'] = 'אפשרות זו קובעת איזה סוג אימות מתבצע בעת שמירת חשבון תשלום באמצעות CIM. האפשרות \'None\' (ללא) אינה מבצעת אימות נוסף. האפשרות \'Test\' (בדיקה) מבצעת עסקה לבדיקה שאינה מופיעה בדף החשבון של הלקוח, אך תיצור הודעת דוא"ל לסוחר. האפשרות \'Live\' (פעיל) מעבדת עסקה בסך 0.00$ או 0.01$ שמבוטלת מיד. יש להתייעץ עם ספק חשבון הסוחר שלך לפני קביעת ערך זה ל-\'Live\', שכן ייתכן שתחויב בעמלות.';
$lang['Authorize_net.validation_mode'] = 'מצב אימות חשבון תשלום';

