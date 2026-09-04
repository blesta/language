<?php
/**
 * Form Rules
 *
 * @package blesta
 * @subpackage blesta.language.he_il
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['FormRules.general.name.format'] = 'שמות סיומות יכולים להכיל רק תווים אלפא-נומריים, קווים תחתונים ורווחים.';
$lang['FormRules.merchantbasic.authors[][name].empty'] = 'אנא הזן שם עבור כל מחבר.';
$lang['FormRules.merchantbasic.currencies.format'] = 'אנא הזן את המטבעות בפורמט של שלוש אותיות, מופרדות בפסיקים (לדוגמה: USD,EUR,JPY).';
$lang['FormRules.merchantfields.fields[][label].empty'] = 'אנא הזן תווית לכל שדה.';
$lang['FormRules.merchantfields.fields[][name].format'] = 'אנא הזן שם לכל שדה בפורמט snake_case_name.';
$lang['FormRules.merchantfields.fields[][type].valid'] = 'בסעיף אחד או יותר סוג הנתונים אינו תקין.';
$lang['FormRules.modulebasic.authors[][name].empty'] = 'אנא הזן שם עבור כל מחבר.';
$lang['FormRules.modulebasic.module_group.empty'] = 'אנא הזן שם לקבוצת מודולים.';
$lang['FormRules.modulebasic.module_row_plural.empty'] = 'אנא הוסף שם שורה למודול ברבים.';
$lang['FormRules.modulebasic.module_row.empty'] = 'אנא הזן שם לשורת מודול.';
$lang['FormRules.modulefeatures.cron_tasks[][label].empty'] = 'אנא הזן תווית לכל משימת cron.';
$lang['FormRules.modulefeatures.cron_tasks[][name].format'] = 'אנא הזן שם שיטה עבור כל משימת cron בפורמט snake_case_name.';
$lang['FormRules.modulefeatures.cron_tasks[][time].format'] = 'אנא הזן שעה בפורמט 00:00 או טווח זמן מספרי.';
$lang['FormRules.modulefeatures.cron_tasks[][type].valid'] = 'למשימת cron אחת או יותר יש סוג לא חוקי.';
$lang['FormRules.modulefeatures.service_tabs[][label].empty'] = 'אנא הזן תווית לכל לשונית שירות.';
$lang['FormRules.modulefeatures.service_tabs[][level].valid'] = 'לכרטיסייה אחת או יותר יש רמה לא חוקית.';
$lang['FormRules.modulefeatures.service_tabs[][method_name].format'] = 'אנא הזן שם שיטה עבור כל לשונית שירות בפורמט camelCaseName.';
$lang['FormRules.modulefields.module_rows[][label].empty'] = 'אנא הזן תווית עבור כל שדה בשורת המודול.';
$lang['FormRules.modulefields.module_rows[][name_key].valid'] = 'יש להגדיר את האפשרות \'האם להגדיר שדה שורת מודול כמפתח שם\' כ-true או כ-false.';
$lang['FormRules.modulefields.module_rows[][name].format'] = 'אנא הזן שם עבור כל שדה בשורת מודול בפורמט snake_case_name.';
$lang['FormRules.modulefields.module_rows[][type].valid'] = 'בשורה אחת או יותר של מודולים מופיע סוג לא חוקי.';
$lang['FormRules.modulefields.package_fields[][label].empty'] = 'אנא הזן תווית עבור כל שדה בחבילה.';
$lang['FormRules.modulefields.package_fields[][name_key].valid'] = 'יש להגדיר את המפתח של שדה החבילה כ-true או false.';
$lang['FormRules.modulefields.package_fields[][name].format'] = 'אנא הזן שם עבור כל שדה בחבילה בפורמט snake_case_name.';
$lang['FormRules.modulefields.package_fields[][type].valid'] = 'לסוג אחד או יותר של שדות בחבילה יש סוג לא חוקי.';
$lang['FormRules.modulefields.service_fields[][label].empty'] = 'אנא הזן תווית עבור כל שדה שירות.';
$lang['FormRules.modulefields.service_fields[][name_key].valid'] = 'יש להגדיר אם שדה השירות ישמש כמפתח השם כ-true או כ-false.';
$lang['FormRules.modulefields.service_fields[][name].format'] = 'אנא הזן שם עבור כל שדה שירות בפורמט snake_case_name.';
$lang['FormRules.modulefields.service_fields[][type].valid'] = 'בסעיף שירות אחד או יותר מופיע סוג לא חוקי.';
$lang['FormRules.nonmerchantbasic.authors[][name].empty'] = 'אנא הזן שם עבור כל מחבר.';
$lang['FormRules.nonmerchantbasic.currencies.format'] = 'אנא הזן את המטבעות בפורמט של שלוש אותיות, מופרדות בפסיקים (לדוגמה: USD,EUR,JPY).';
$lang['FormRules.nonmerchantfields.fields[][label].empty'] = 'אנא הזן תווית לכל שדה.';
$lang['FormRules.nonmerchantfields.fields[][name].format'] = 'אנא הזן שם לכל שדה בפורמט snake_case_name.';
$lang['FormRules.nonmerchantfields.fields[][type].valid'] = 'בסעיף אחד או יותר יש סוג לא חוקי.';
$lang['FormRules.pluginbasic.authors[][name].empty'] = 'אנא הזן שם עבור כל מחבר.';
$lang['FormRules.plugindatabase.tables[][columns][][length].empty'] = 'האורך חייב להיות בפורמט \'a\',\'b\',\'c\' עבור עמודות מסוג enum, ריק עבור עמודות טקסט ותאריך/שעה, ומספר עבור כל השאר.';
$lang['FormRules.plugindatabase.tables[][columns][][name].format'] = 'אנא הזן שם שיטה עבור כל עמודה בפורמט snake_case_name.';
$lang['FormRules.plugindatabase.tables[][columns][][nullable].valid'] = 'יש להגדיר את ה-Nullable כ-true או כ-false עבור כל עמודה.';
$lang['FormRules.plugindatabase.tables[][columns][][primary].valid'] = 'יש להגדיר את הערך \'ראשי\' כ-true או false עבור כל עמודה.';
$lang['FormRules.plugindatabase.tables[][columns][][type].valid'] = 'בסעיף אחד או יותר מופיע סוג לא חוקי.';
$lang['FormRules.plugindatabase.tables[][name].format'] = 'אנא הזן שם שיטה עבור כל טבלה בפורמט snake_case_name.';
$lang['FormRules.pluginintegrations.actions[][action].format'] = 'אנא הזן את הפעולה עבור כל פעולה באותיות קטנות בלבד.';
$lang['FormRules.pluginintegrations.actions[][controller].format'] = 'אנא הזן בקר עבור כל פעולה בפורמט snake_case_name.';
$lang['FormRules.pluginintegrations.actions[][location].valid'] = 'אנא הזן מיקום פעולה תקף.';
$lang['FormRules.pluginintegrations.actions[][name].empty'] = 'אנא הזן שם לכל פעולה.';
$lang['FormRules.pluginintegrations.cards[][callback].format'] = 'אנא הזן שיטת החזרה עבור כל כרטיס בפורמט camelCaseName.';
$lang['FormRules.pluginintegrations.cards[][label].empty'] = 'אנא הזן תווית לכל כרטיס.';
$lang['FormRules.pluginintegrations.cards[][level].valid'] = 'לכרטיס אחד או יותר יש רמה לא חוקית.';
$lang['FormRules.pluginintegrations.events[][callback].format'] = 'אנא הזן שיטת החזרה עבור כל אירוע בפורמט camelCaseName.';
$lang['FormRules.pluginintegrations.events[][event].empty'] = 'אנא הזן שם לכל אירוע.';

