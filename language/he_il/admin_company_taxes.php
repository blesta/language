<?php
/**
 * Admin Company Taxes
 *
 * @package blesta
 * @subpackage blesta.language.he_il
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyTaxes.!success.basic_updated'] = 'הגדרות המס הבסיסיות עודכנו בהצלחה!';
$lang['AdminCompanyTaxes.!success.rule_deleted'] = 'כלל המס נמחק בהצלחה.';
$lang['AdminCompanyTaxes.!success.taxrule_created'] = 'כלל המס נוצר בהצלחה!';
$lang['AdminCompanyTaxes.!success.taxrule_updated'] = 'כלל המס עודכן בהצלחה!';
$lang['AdminCompanyTaxes.!tooltip.amount'] = 'סכום המס כאחוז.';
$lang['AdminCompanyTaxes.!tooltip.country'] = 'בחר את המדינה שעליה חל כלל המס הזה.';
$lang['AdminCompanyTaxes.!tooltip.level'] = 'רמת המס מאפשרת לך לקבוע את סדר קביעת המס כאשר חלים מספר כללי מס.';
$lang['AdminCompanyTaxes.!tooltip.name'] = 'השם המוצג של המס (לדוגמה: מס מכירה).';
$lang['AdminCompanyTaxes.!tooltip.state'] = 'בחר את המדינה/המחוז שעליו חל כלל המס הזה.';
$lang['AdminCompanyTaxes.!tooltip.type'] = 'במצב "כולל" (Inclusive), המס יחושב כחלק ממחירי הפריטים שהגדרת, וינוכה ממחיר הפריט עבור משתמשים הפטורים ממס.<br/>
במצב "כולל" (Additive), המס יחושב בנוסף למחירי הפריטים שהגדרת.<br/>
במצב "לא כולל" (Exclusive), המס יחושב בנוסף למחירי הפריטים שהגדרת, אך לא יכלל בסכום הכולל המוצג בהזמנה.';
$lang['AdminCompanyTaxes.add.boxtitle_add'] = 'הוסף כלל מס';
$lang['AdminCompanyTaxes.add.field.addsubmit'] = 'צור כלל';
$lang['AdminCompanyTaxes.add.field.amount'] = 'סכום';
$lang['AdminCompanyTaxes.add.field.country'] = 'מדינה';
$lang['AdminCompanyTaxes.add.field.level'] = 'רמת המס';
$lang['AdminCompanyTaxes.add.field.level1'] = 'רמה 1';
$lang['AdminCompanyTaxes.add.field.level2'] = 'רמה 2';
$lang['AdminCompanyTaxes.add.field.name'] = 'שם המס';
$lang['AdminCompanyTaxes.add.field.state'] = 'מדינה/מחוז';
$lang['AdminCompanyTaxes.add.field.type'] = 'סוג המס';
$lang['AdminCompanyTaxes.add.page_title'] = 'הגדרות &gt; חברה &gt; מיסים &gt; הוסף כלל מיסוי';
$lang['AdminCompanyTaxes.basic.boxtitle_basic'] = 'הגדרות מס בסיסיות';
$lang['AdminCompanyTaxes.basic.field_addsubmit'] = 'עדכון הגדרות';
$lang['AdminCompanyTaxes.basic.field_cancelation_fee_tax'] = 'דמי ביטול מס';
$lang['AdminCompanyTaxes.basic.field_cascade_tax'] = 'מס קסקדה';
$lang['AdminCompanyTaxes.basic.field_enable_tax'] = 'הפעל מס';
$lang['AdminCompanyTaxes.basic.field_setup_fee_tax'] = 'דמי הקמת חשבון מס';
$lang['AdminCompanyTaxes.basic.field_taxid'] = 'מספר זיהוי מס/מס ערך מוסף';
$lang['AdminCompanyTaxes.basic.heading_general'] = 'הגדרות כלליות';
$lang['AdminCompanyTaxes.basic.heading_tax_provider'] = '%1$s הגדרות';
$lang['AdminCompanyTaxes.basic.note_cancelation_fee_tax'] = 'אם האפשרות מופעלת, דמי הביטול יחויבו במס.';
$lang['AdminCompanyTaxes.basic.note_cascade_tax'] = 'אם אפשרות זו מופעלת, רמת המס 1 תחושב תחילה על סך החשבונית, ורמת המס 2 תחושב על סך זה החדש, הכולל את רמת המס 1. הדבר מביא לחיוב מס על מס. אחרת, רמת המס 1 ורמת המס 2 מחושבות רק על סך החשבונית לפני מס.';
$lang['AdminCompanyTaxes.basic.note_enable_tax'] = 'סמן אפשרות זו כדי להפעיל את מס עבור חברה זו.';
$lang['AdminCompanyTaxes.basic.note_setup_fee_tax'] = 'אם האפשרות מופעלת, דמי ההתקנה יחויבו במס.';
$lang['AdminCompanyTaxes.basic.page_title'] = 'הגדרות &gt; חברה &gt; מיסים &gt; הגדרות מס בסיסיות';
$lang['AdminCompanyTaxes.countries.all'] = '-- הכל --';
$lang['AdminCompanyTaxes.edit.boxtitle_edit'] = 'ערוך כלל מס';
$lang['AdminCompanyTaxes.edit.field.amount'] = 'סכום';
$lang['AdminCompanyTaxes.edit.field.country'] = 'מדינה';
$lang['AdminCompanyTaxes.edit.field.editsubmit'] = 'כלל עדכון';
$lang['AdminCompanyTaxes.edit.field.level'] = 'רמת המס';
$lang['AdminCompanyTaxes.edit.field.level1'] = 'רמה 1';
$lang['AdminCompanyTaxes.edit.field.level2'] = 'רמה 2';
$lang['AdminCompanyTaxes.edit.field.name'] = 'שם המס';
$lang['AdminCompanyTaxes.edit.field.state'] = 'מדינה/מחוז';
$lang['AdminCompanyTaxes.edit.field.type'] = 'סוג המס';
$lang['AdminCompanyTaxes.edit.page_title'] = 'הגדרות &gt; חברה &gt; מיסים &gt; ערוך כלל מס';
$lang['AdminCompanyTaxes.rules.boxtitle_rules'] = 'כללי מס';
$lang['AdminCompanyTaxes.rules.categorylink_addrule'] = 'הוסף כלל מס';
$lang['AdminCompanyTaxes.rules.confirm_delete'] = 'האם אתה בטוח שברצונך למחוק את כלל המס הזה?';
$lang['AdminCompanyTaxes.rules.heading_level1'] = 'כללי רמה 1';
$lang['AdminCompanyTaxes.rules.heading_level2'] = 'כללי רמה 2';
$lang['AdminCompanyTaxes.rules.no_results'] = 'אין כללים בנוגע למס על " %1$s ".';
$lang['AdminCompanyTaxes.rules.option_delete'] = 'מחק';
$lang['AdminCompanyTaxes.rules.option_edit'] = 'ערוך';
$lang['AdminCompanyTaxes.rules.page_title'] = 'הגדרות &gt; חברה &gt; מיסים &gt; כללי מיסוי';
$lang['AdminCompanyTaxes.rules.text_all'] = 'הכל';
$lang['AdminCompanyTaxes.rules.text_amount'] = 'סכום';
$lang['AdminCompanyTaxes.rules.text_country'] = 'מדינה';
$lang['AdminCompanyTaxes.rules.text_name'] = 'שם';
$lang['AdminCompanyTaxes.rules.text_options'] = 'אפשרויות';
$lang['AdminCompanyTaxes.rules.text_state'] = 'מדינה/מחוז';
$lang['AdminCompanyTaxes.rules.text_type'] = 'סוג';
$lang['AdminCompanyTaxes.states.all'] = '-- הכל --';

