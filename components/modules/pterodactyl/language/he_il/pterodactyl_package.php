<?php
/**
 * Pterodactyl Package
 *
 * @package blesta
 * @subpackage blesta.language.he_il
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PterodactylPackage.package_fields.tooltip.display'] = 'סמן תיבה זו כדי לאפשר ללקוחות לשנות ערך זה בעת הוספה/עריכה של שירות. השאר את התיבה ללא סימון אם בכוונתך להשתמש באפשרות הניתנת להגדרה עבור שדה זה.';
$lang['PterodactylPackage.package_fields.optional'] = '%1$s (לא חובה)';
$lang['PterodactylPackage.package_fields.tooltip.backups'] = 'המספר הכולל של גיבויים שמותר למשתמש לבצע עבור השרתים שנוצרו. השאר שדה זה ריק כדי לאפשר מספר בלתי מוגבל.';
$lang['PterodactylPackage.package_fields.backups'] = 'מגבלת גיבוי (אופציונלי)';
$lang['PterodactylPackage.package_fields.tooltip.allocations'] = 'המספר הכולל של הקצאות שמותר למשתמש ליצור שרתים. השאר שדה זה ריק כדי לאפשר מספר בלתי מוגבל.';
$lang['PterodactylPackage.package_fields.allocations'] = 'מגבלת הקצאה (לא חובה)';
$lang['PterodactylPackage.package_fields.tooltip.databases'] = 'המספר הכולל של מסדי נתונים שמשתמש רשאי ליצור בכל שרת. השאר שדה זה ריק כדי לאפשר מספר בלתי מוגבל.';
$lang['PterodactylPackage.package_fields.databases'] = 'מגבלת מסד הנתונים (לא חובה)';
$lang['PterodactylPackage.package_fields.tooltip.image'] = 'תמונת Docker מותאמת אישית שיש להקצות לשרתים שנוצרו (לדוגמה: quay.io/pterodactyl/core:java-glibc).';
$lang['PterodactylPackage.package_fields.image'] = 'תמונה (לא חובה)';
$lang['PterodactylPackage.package_fields.tooltip.startup'] = 'פקודת הפעלה מותאמת אישית שיש להקצות לשרתים שנוצרו (לדוגמה: java -Xms128M -Xmx 1024M -jar server.jar).';
$lang['PterodactylPackage.package_fields.startup'] = 'הפעלה (אופציונלי)';
$lang['PterodactylPackage.package_fields.tooltip.io'] = 'מספר ההתאמה של Block IO (10–1000).';
$lang['PterodactylPackage.package_fields.io'] = 'משקל ה-IO של הבלוק';
$lang['PterodactylPackage.package_fields.tooltip.disk'] = 'כמות שטח הדיסק שיש להקצות לשרתים שנוצרו.';
$lang['PterodactylPackage.package_fields.disk'] = 'שטח דיסק (MB)';
$lang['PterodactylPackage.package_fields.tooltip.cpu'] = 'כמות משאבי המעבד שיש להקצות לשרתים שנוצרו.';
$lang['PterodactylPackage.package_fields.cpu'] = 'מגבלת מעבד (%)';
$lang['PterodactylPackage.package_fields.tooltip.swap'] = 'כמות ה-Swap שיש להקצות לשרתים שנוצרו.';
$lang['PterodactylPackage.package_fields.swap'] = 'זיכרון מטמון (MB)';
$lang['PterodactylPackage.package_fields.tooltip.memory'] = 'כמות הזיכרון שיש להקצות לשרתים שנוצרו.';
$lang['PterodactylPackage.package_fields.memory'] = 'זיכרון (MB)';
$lang['PterodactylPackage.package_fields.tooltip.pack_id'] = 'מזהה החבילה שבה יש להתקין את השרת.';
$lang['PterodactylPackage.package_fields.pack_id'] = 'מזהה חבילה (לא חובה)';
$lang['PterodactylPackage.package_fields.tooltip.egg_id'] = 'מזהה הביצה לשימוש השרת.';
$lang['PterodactylPackage.package_fields.egg_id'] = 'מספר זיהוי הביצה';
$lang['PterodactylPackage.package_fields.tooltip.nest_id'] = 'ה-Nest שהשרת ישתמש בו.';
$lang['PterodactylPackage.package_fields.nest_id'] = 'קן';
$lang['PterodactylPackage.package_fields.tooltip.port_range'] = 'טווחי יציאות המופרדים בפסיק, שיש להקצות לשרת (דוגמה: 25565-25570,25580-25590).';
$lang['PterodactylPackage.package_fields.port_range'] = 'טווח יציאות';
$lang['PterodactylPackage.package_fields.tooltip.dedicated_ip'] = 'הקצה כתובת IP ייעודית לשרתים שנוצרו.';
$lang['PterodactylPackage.package_fields.dedicated_ip'] = 'כתובת IP ייעודית (אופציונלי)';
$lang['PterodactylPackage.package_fields.tooltip.location_id'] = 'המיקום שאליו יופצו השרתים באופן אוטומטי.';
$lang['PterodactylPackage.package_fields.location_id'] = 'מיקום';
$lang['PterodactylPackage.!error.meta[backups].format'] = 'מספר הגיבויים חייב להיות מספר.';
$lang['PterodactylPackage.!error.meta[allocations].format'] = 'מספר ההקצאות חייב להיות מספר.';
$lang['PterodactylPackage.!error.meta[databases].format'] = 'מספר מסדי הנתונים חייב להיות מספר.';
$lang['PterodactylPackage.!error.meta[image].length'] = 'נתיב התמונה חייב להכיל לכל היותר 255 תווים.';
$lang['PterodactylPackage.!error.meta[io].format'] = 'משקל ה-IO חייב להיות מספר.';
$lang['PterodactylPackage.!error.meta[disk].format'] = 'כמות שטח הדיסק חייבת להיות מספרית.';
$lang['PterodactylPackage.!error.meta[cpu].format'] = 'אחוז המעבד חייב להיות מספר.';
$lang['PterodactylPackage.!error.meta[swap].format'] = 'סכום ההחלפה חייב להיות מספר.';
$lang['PterodactylPackage.!error.meta[memory].format'] = 'נפח הזיכרון חייב להיות מספר.';
$lang['PterodactylPackage.!error.meta[pack_id].format'] = 'מזהה החבילה חייב להיות מספרי.';
$lang['PterodactylPackage.!error.meta[egg_id].valid'] = 'הביצה אינה תואמת לאף אחת ב-Pterodactyl.';
$lang['PterodactylPackage.!error.meta[egg_id].format'] = 'מספר הזיהוי של הביצה חייב להיות מספרי.';
$lang['PterodactylPackage.!error.meta[nest_id].valid'] = 'הקן אינו תואם לאף אחד מהקנים המופיעים ב-Pterodactyl.';
$lang['PterodactylPackage.!error.meta[nest_id].format'] = 'מספר הזיהוי של הקן חייב להיות מספרי.';
$lang['PterodactylPackage.!error.meta[port_range].format'] = 'טווח היציאות חייב להיות בפורמט 25565-25570,25580-25590.';
$lang['PterodactylPackage.!error.meta[dedicated_ip].format'] = 'יש להגדיר את האפשרות \'האם להשתמש בכתובת IP ייעודית\' כ-1 או כ-0.';
$lang['PterodactylPackage.!error.meta[location_id].valid'] = 'מזהה המיקום אינו תואם לאף אחד ב-Pterodactyl.';
$lang['PterodactylPackage.!error.meta[location_id].format'] = 'מזהה המיקום חייב להיות מספרי.';
$lang['Pterodactyl.back_to_manage'] = 'חזרה';

