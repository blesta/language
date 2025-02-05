<?php
/**
 * Form Rules
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['FormRules.nonmerchantfields.fields[][type].valid'] = 'Ein oder mehrere Felder haben einen ungültigen Typ.';
$lang['FormRules.nonmerchantfields.fields[][label].empty'] = 'Bitte geben Sie für jedes Feld eine Bezeichnung ein.';
$lang['FormRules.nonmerchantfields.fields[][name].format'] = 'Bitte geben Sie für jedes Feld einen Namen im Format snake_case_name ein.';
$lang['FormRules.nonmerchantbasic.currencies.format'] = 'Bitte geben Sie die Währungen im Drei-Zeichen-Format und durch Komma getrennt ein (z.B. USD,EUR,JPY).';
$lang['FormRules.nonmerchantbasic.authors[][name].empty'] = 'Bitte geben Sie für jeden Autor einen Namen an.';
$lang['FormRules.merchantfields.fields[][type].valid'] = 'Ein oder mehrere Felder haben einen ungültigen Typ.';
$lang['FormRules.merchantfields.fields[][label].empty'] = 'Bitte geben Sie für jedes Feld eine Bezeichnung ein.';
$lang['FormRules.merchantfields.fields[][name].format'] = 'Bitte geben Sie für jedes Feld einen Namen im Format snake_case_name ein.';
$lang['FormRules.merchantbasic.currencies.format'] = 'Bitte geben Sie die Währungen im Drei-Zeichen-Format und durch Komma getrennt ein (z.B. USD,EUR,JPY).';
$lang['FormRules.merchantbasic.authors[][name].empty'] = 'Bitte geben Sie für jeden Autor einen Namen an.';
$lang['FormRules.pluginintegrations.cards[][label].empty'] = 'Bitte geben Sie für jede Karte ein Etikett ein.';
$lang['FormRules.pluginintegrations.cards[][callback].format'] = 'Bitte geben Sie für jede Karte eine Rückrufmethode im Format camelCaseName an.';
$lang['FormRules.pluginintegrations.cards[][level].valid'] = 'Eine oder mehrere Karten haben einen ungültigen Wert.';
$lang['FormRules.pluginintegrations.events[][callback].format'] = 'Bitte geben Sie für jedes Ereignis eine Callback-Methode im Format camelCaseName an.';
$lang['FormRules.pluginintegrations.events[][event].empty'] = 'Bitte geben Sie für jedes Ereignis einen Ereignisnamen ein.';
$lang['FormRules.pluginintegrations.actions[][name].empty'] = 'Bitte geben Sie für jede Aktion einen Namen ein.';
$lang['FormRules.pluginintegrations.actions[][action].format'] = 'Bitte geben Sie für jede Aktion eine Aktion in Kleinbuchstaben an.';
$lang['FormRules.pluginintegrations.actions[][controller].format'] = 'Bitte geben Sie für jede Aktion einen Controller im Format snake_case_name ein.';
$lang['FormRules.pluginintegrations.actions[][location].valid'] = 'Bitte geben Sie einen gültigen Aktionsort ein.';
$lang['FormRules.plugindatabase.tables[][columns][][primary].valid'] = 'Primary muss für jede Spalte auf true oder false gesetzt werden.';
$lang['FormRules.plugindatabase.tables[][columns][][nullable].valid'] = 'Nullable muss für jede Spalte auf true oder false gesetzt werden.';
$lang['FormRules.plugindatabase.tables[][columns][][length].empty'] = 'Die Länge muss im Format \'a\',\'b\',\'c\' für Enum-Spalten, leer für Text- und Datetime-Spalten und numerisch für alle anderen sein.';
$lang['FormRules.plugindatabase.tables[][columns][][type].valid'] = 'Eine oder mehrere Spalten haben einen ungültigen Typ.';
$lang['FormRules.plugindatabase.tables[][columns][][name].format'] = 'Bitte geben Sie für jede Spalte einen Methodennamen im Format snake_case_name ein.';
$lang['FormRules.plugindatabase.tables[][name].format'] = 'Bitte geben Sie für jede Tabelle einen Methodennamen in der Form snake_case_name ein.';
$lang['FormRules.pluginbasic.authors[][name].empty'] = 'Bitte geben Sie für jeden Autor einen Namen an.';
$lang['FormRules.modulefeatures.cron_tasks[][time].format'] = 'Bitte geben Sie entweder eine Zeit im Format 00:00 oder ein numerisches Intervall ein.';
$lang['FormRules.modulefeatures.cron_tasks[][type].valid'] = 'Eine oder mehrere Cron-Aufgaben haben einen ungültigen Typ.';
$lang['FormRules.modulefeatures.cron_tasks[][label].empty'] = 'Bitte geben Sie eine Bezeichnung für jede Cron-Aufgabe ein.';
$lang['FormRules.modulefeatures.cron_tasks[][name].format'] = 'Bitte geben Sie für jede Cron-Aufgabe einen Methodennamen im Format snake_case_name ein.';
$lang['FormRules.modulefeatures.service_tabs[][level].valid'] = 'Eine oder mehrere Dienstregisterkarten haben eine ungültige Ebene.';
$lang['FormRules.modulefeatures.service_tabs[][label].empty'] = 'Bitte geben Sie eine Bezeichnung für jede Dienstleistungskarte ein.';
$lang['FormRules.modulefeatures.service_tabs[][method_name].format'] = 'Bitte geben Sie für jedes Dienstregister einen Methodennamen im Format camelCaseName ein.';
$lang['FormRules.modulefields.package_fields[][name_key].valid'] = 'Ob ein Paketfeld als Namensschlüssel gesetzt werden soll, muss auf true oder false gesetzt werden.';
$lang['FormRules.modulefields.package_fields[][type].valid'] = 'Ein oder mehrere Paketfelder haben einen ungültigen Typ.';
$lang['FormRules.modulefields.package_fields[][label].empty'] = 'Bitte geben Sie für jedes Paketfeld ein Etikett ein.';
$lang['FormRules.modulefields.package_fields[][name].format'] = 'Bitte geben Sie für jedes Paketfeld einen Namen im Format snake_case_name ein.';
$lang['FormRules.modulefields.service_fields[][name_key].valid'] = 'Ob ein Dienstfeld als Namensschlüssel festgelegt werden soll, muss auf true oder false gesetzt werden.';
$lang['FormRules.modulefields.service_fields[][type].valid'] = 'Ein oder mehrere Servicefelder haben einen ungültigen Typ.';
$lang['FormRules.modulefields.service_fields[][label].empty'] = 'Bitte geben Sie für jedes Servicefeld eine Bezeichnung ein.';
$lang['FormRules.modulefields.service_fields[][name].format'] = 'Bitte geben Sie für jedes Servicefeld einen Namen im Format snake_case_name ein.';
$lang['FormRules.modulefields.module_rows[][name_key].valid'] = 'Ob ein Modulzeilenfeld als Namensschlüssel gesetzt werden soll, muss auf true oder false gesetzt werden.';
$lang['FormRules.modulefields.module_rows[][type].valid'] = 'Eine oder mehrere Modulzeilen haben einen ungültigen Typ.';
$lang['FormRules.modulefields.module_rows[][label].empty'] = 'Bitte geben Sie für jedes Feld der Modulreihe eine Bezeichnung ein.';
$lang['FormRules.modulefields.module_rows[][name].format'] = 'Bitte geben Sie für jedes Modulzeilenfeld einen Namen im Format snake_case_name ein.';
$lang['FormRules.modulebasic.authors[][name].empty'] = 'Bitte geben Sie für jeden Autor einen Namen an.';
$lang['FormRules.modulebasic.module_group.empty'] = 'Bitte geben Sie eine Modulgruppenbezeichnung ein.';
$lang['FormRules.modulebasic.module_row_plural.empty'] = 'Bitte fügen Sie den Namen einer Modulreihe im Plural hinzu.';
$lang['FormRules.modulebasic.module_row.empty'] = 'Bitte geben Sie den Namen einer Modulzeile ein.';
$lang['FormRules.general.name.format'] = 'Erweiterungsnamen dürfen nur alphanumerische Zeichen, Unterstriche und Leerzeichen enthalten.';

