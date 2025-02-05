<?php
/**
 * Form Rules
 *
 * @package blesta
 * @subpackage blesta.language.ro_ro
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['FormRules.modulebasic.module_group.empty'] = 'Vă rugăm să introduceți o etichetă a grupului de module.';
$lang['FormRules.nonmerchantfields.fields[][type].valid'] = 'Unul sau mai multe câmpuri au un tip invalid.';
$lang['FormRules.nonmerchantfields.fields[][label].empty'] = 'Vă rugăm să introduceți o etichetă pentru fiecare câmp.';
$lang['FormRules.nonmerchantfields.fields[][name].format'] = 'Vă rugăm să introduceți un nume pentru fiecare câmp în formatul snake_case_name.';
$lang['FormRules.nonmerchantbasic.currencies.format'] = 'Vă rugăm să introduceți valutele în format de trei caractere separate prin virgulă (de exemplu, USD,EUR,JPY).';
$lang['FormRules.nonmerchantbasic.authors[][name].empty'] = 'Vă rugăm să introduceți un nume pentru fiecare autor.';
$lang['FormRules.merchantfields.fields[][type].valid'] = 'Unul sau mai multe câmpuri au un tip invalid.';
$lang['FormRules.merchantfields.fields[][label].empty'] = 'Vă rugăm să introduceți o etichetă pentru fiecare câmp.';
$lang['FormRules.merchantfields.fields[][name].format'] = 'Vă rugăm să introduceți un nume pentru fiecare câmp în formatul snake_case_name.';
$lang['FormRules.merchantbasic.currencies.format'] = 'Vă rugăm să introduceți valutele în format de trei caractere separate prin virgulă (de exemplu, USD,EUR,JPY).';
$lang['FormRules.merchantbasic.authors[][name].empty'] = 'Vă rugăm să introduceți un nume pentru fiecare autor.';
$lang['FormRules.pluginintegrations.cards[][label].empty'] = 'Vă rugăm să introduceți o etichetă pentru fiecare card.';
$lang['FormRules.pluginintegrations.cards[][callback].format'] = 'Vă rugăm să introduceți o metodă de apelare pentru fiecare card în formatul camelCaseName.';
$lang['FormRules.pluginintegrations.cards[][level].valid'] = 'Unul sau mai multe carduri au un nivel invalid.';
$lang['FormRules.pluginintegrations.events[][callback].format'] = 'Vă rugăm să introduceți o metodă de rechemare pentru fiecare eveniment în formatul camelCaseName.';
$lang['FormRules.pluginintegrations.events[][event].empty'] = 'Vă rugăm să introduceți un nume de eveniment pentru fiecare eveniment.';
$lang['FormRules.pluginintegrations.actions[][name].empty'] = 'Vă rugăm să introduceți un nume pentru fiecare acțiune.';
$lang['FormRules.pluginintegrations.actions[][action].format'] = 'Vă rugăm să introduceți o acțiune pentru fiecare acțiune cu litere mici.';
$lang['FormRules.pluginintegrations.actions[][controller].format'] = 'Vă rugăm să introduceți un controler pentru fiecare acțiune în formatul snake_case_name.';
$lang['FormRules.pluginintegrations.actions[][location].valid'] = 'Vă rugăm să introduceți o locație de acțiune validă.';
$lang['FormRules.plugindatabase.tables[][columns][][primary].valid'] = 'Primary trebuie să fie setat la true sau false pentru fiecare coloană.';
$lang['FormRules.plugindatabase.tables[][columns][][nullable].valid'] = 'Nullable trebuie să fie setat la true sau false pentru fiecare coloană.';
$lang['FormRules.plugindatabase.tables[][columns][][length].empty'] = 'Lungimea trebuie să fie în formatul "a", "b", "c" pentru coloanele enum, goală pentru coloanele text și datatime și numerică pentru toate celelalte.';
$lang['FormRules.plugindatabase.tables[][columns][][type].valid'] = 'Una sau mai multe coloane au un tip invalid.';
$lang['FormRules.plugindatabase.tables[][columns][][name].format'] = 'Vă rugăm să introduceți un nume de metodă pentru fiecare coloană în formatul snake_case_name.';
$lang['FormRules.plugindatabase.tables[][name].format'] = 'Vă rugăm să introduceți un nume de metodă pentru fiecare tabel în formatul snake_case_name.';
$lang['FormRules.pluginbasic.authors[][name].empty'] = 'Vă rugăm să introduceți un nume pentru fiecare autor.';
$lang['FormRules.modulefeatures.cron_tasks[][time].format'] = 'Vă rugăm să introduceți fie o oră în formatul 00:00, fie un interval numeric.';
$lang['FormRules.modulefeatures.cron_tasks[][type].valid'] = 'Una sau mai multe sarcini cron are un tip invalid.';
$lang['FormRules.modulefeatures.cron_tasks[][label].empty'] = 'Vă rugăm să introduceți o etichetă pentru fiecare sarcină cron.';
$lang['FormRules.modulefeatures.cron_tasks[][name].format'] = 'Vă rugăm să introduceți un nume de metodă pentru fiecare sarcină cron în formatul nume_caz_șarpe.';
$lang['FormRules.modulefeatures.service_tabs[][level].valid'] = 'Una sau mai multe file de servicii are un nivel invalid.';
$lang['FormRules.modulefeatures.service_tabs[][label].empty'] = 'Vă rugăm să introduceți o etichetă pentru fiecare filă de serviciu.';
$lang['FormRules.modulefeatures.service_tabs[][method_name].format'] = 'Vă rugăm să introduceți un nume de metodă pentru fiecare filă de serviciu în formatul camelCaseName.';
$lang['FormRules.modulefields.package_fields[][name_key].valid'] = 'Dacă se stabilește un câmp de pachet ca fiind cheia de nume trebuie să fie adevărat sau fals.';
$lang['FormRules.modulefields.package_fields[][type].valid'] = 'Unul sau mai multe câmpuri ale pachetului au un tip invalid.';
$lang['FormRules.modulefields.package_fields[][label].empty'] = 'Vă rugăm să introduceți o etichetă pentru fiecare câmp de ambalaj.';
$lang['FormRules.modulefields.package_fields[][name].format'] = 'Vă rugăm să introduceți un nume pentru fiecare câmp de pachet în formatul snake_case_name.';
$lang['FormRules.modulefields.service_fields[][name_key].valid'] = 'Dacă se stabilește un câmp de serviciu ca fiind cheia de nume trebuie să fie setat la true sau false.';
$lang['FormRules.modulefields.service_fields[][type].valid'] = 'Unul sau mai multe câmpuri de servicii are un tip invalid.';
$lang['FormRules.modulefields.service_fields[][label].empty'] = 'Vă rugăm să introduceți o etichetă pentru fiecare câmp de servicii.';
$lang['FormRules.modulefields.service_fields[][name].format'] = 'Vă rugăm să introduceți un nume pentru fiecare câmp de servicii în formatul snake_case_name.';
$lang['FormRules.modulefields.module_rows[][name_key].valid'] = 'Dacă se stabilește un câmp de rând de modul ca fiind cheia de nume trebuie să fie setat la true sau false.';
$lang['FormRules.modulefields.module_rows[][type].valid'] = 'Unul sau mai multe rânduri de module au un tip invalid.';
$lang['FormRules.modulefields.module_rows[][label].empty'] = 'Vă rugăm să introduceți o etichetă pentru fiecare câmp al rândului modulului.';
$lang['FormRules.modulefields.module_rows[][name].format'] = 'Vă rugăm să introduceți un nume pentru fiecare câmp de rând de modul în formatul nume_caz_șarpe.';
$lang['FormRules.modulebasic.authors[][name].empty'] = 'Vă rugăm să introduceți un nume pentru fiecare autor.';
$lang['FormRules.modulebasic.module_row_plural.empty'] = 'Vă rugăm să adăugați un nume de rând de modul plural.';
$lang['FormRules.modulebasic.module_row.empty'] = 'Vă rugăm să introduceți un nume de rând de modul.';
$lang['FormRules.general.name.format'] = 'Denumirile extensiilor pot conține numai caractere alfa_numerice, caractere de subliniere și spații.';

