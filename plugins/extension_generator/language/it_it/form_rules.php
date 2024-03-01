<?php
/**
 * Form Rules
 *
 * @package blesta
 * @subpackage blesta.language.it_it
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['FormRules.nonmerchantfields.fields[][type].valid'] = 'Uno o più campi hanno un tipo non valido.';
$lang['FormRules.nonmerchantfields.fields[][label].empty'] = 'Inserire un\'etichetta per ogni campo.';
$lang['FormRules.nonmerchantfields.fields[][name].format'] = 'Inserire un nome per ogni campo nel formato snake_case_name.';
$lang['FormRules.nonmerchantbasic.currencies.format'] = 'Inserire le valute nel formato a tre caratteri separati da virgole (ad esempio, USD, EUR, JPY).';
$lang['FormRules.nonmerchantbasic.authors[][name].empty'] = 'Inserire un nome per ogni autore.';
$lang['FormRules.merchantfields.fields[][type].valid'] = 'Uno o più campi hanno un tipo non valido.';
$lang['FormRules.merchantfields.fields[][label].empty'] = 'Inserire un\'etichetta per ogni campo.';
$lang['FormRules.merchantfields.fields[][name].format'] = 'Inserire un nome per ogni campo nel formato snake_case_name.';
$lang['FormRules.merchantbasic.currencies.format'] = 'Inserire le valute nel formato a tre caratteri separati da virgole (ad esempio, USD, EUR, JPY).';
$lang['FormRules.merchantbasic.authors[][name].empty'] = 'Inserire un nome per ogni autore.';
$lang['FormRules.pluginintegrations.cards[][label].empty'] = 'Inserire un\'etichetta per ogni carta.';
$lang['FormRules.pluginintegrations.cards[][callback].format'] = 'Inserire un metodo di richiamo per ogni carta nel formato camelCaseName.';
$lang['FormRules.pluginintegrations.cards[][level].valid'] = 'Una o più carte hanno un livello non valido.';
$lang['FormRules.pluginintegrations.events[][callback].format'] = 'Inserire un metodo di richiamo per ogni evento nel formato camelCaseName.';
$lang['FormRules.pluginintegrations.events[][event].empty'] = 'Inserire un nome per ogni evento.';
$lang['FormRules.pluginintegrations.actions[][name].empty'] = 'Inserire un nome per ogni azione.';
$lang['FormRules.pluginintegrations.actions[][action].format'] = 'Inserire un\'azione per ogni azione in tutte le lettere minuscole.';
$lang['FormRules.pluginintegrations.actions[][controller].format'] = 'Inserire un controllore per ogni azione nel formato snake_case_name.';
$lang['FormRules.pluginintegrations.actions[][location].valid'] = 'Inserire una posizione di azione valida.';
$lang['FormRules.plugindatabase.tables[][columns][][primary].valid'] = 'Il parametro Primary deve essere impostato su true o false per ogni colonna.';
$lang['FormRules.plugindatabase.tables[][columns][][nullable].valid'] = 'Nullable deve essere impostato su true o false per ogni colonna.';
$lang['FormRules.plugindatabase.tables[][columns][][length].empty'] = 'La lunghezza deve essere nel formato \'a\',\'b\',\'c\' per le colonne enum, vuota per le colonne text e datetime e numerica per tutte le altre.';
$lang['FormRules.plugindatabase.tables[][columns][][type].valid'] = 'Una o più colonne hanno un tipo non valido.';
$lang['FormRules.plugindatabase.tables[][columns][][name].format'] = 'Inserire un nome di metodo per ogni colonna nel formato snake_case_name.';
$lang['FormRules.plugindatabase.tables[][name].format'] = 'Inserire un nome di metodo per ogni tabella nel formato snake_case_name.';
$lang['FormRules.pluginbasic.authors[][name].empty'] = 'Inserire un nome per ogni autore.';
$lang['FormRules.modulefeatures.cron_tasks[][time].format'] = 'Inserire un\'ora nel formato 00:00 o un intervallo numerico.';
$lang['FormRules.modulefeatures.cron_tasks[][type].valid'] = 'Uno o più task cron ha un tipo non valido.';
$lang['FormRules.modulefeatures.cron_tasks[][label].empty'] = 'Inserire un\'etichetta per ogni task di cron.';
$lang['FormRules.modulefeatures.cron_tasks[][name].format'] = 'Inserire un nome di metodo per ogni task di cron nel formato snake_case_name.';
$lang['FormRules.modulefeatures.service_tabs[][level].valid'] = 'Una o più schede di servizio hanno un livello non valido.';
$lang['FormRules.modulefeatures.service_tabs[][label].empty'] = 'Inserire un\'etichetta per ogni scheda di servizio.';
$lang['FormRules.modulefeatures.service_tabs[][method_name].format'] = 'Inserire un nome di metodo per ogni scheda di servizio nel formato camelCaseName.';
$lang['FormRules.modulefields.package_fields[][name_key].valid'] = 'Se impostare un campo del pacchetto come chiave del nome deve essere impostato su true o false.';
$lang['FormRules.modulefields.package_fields[][type].valid'] = 'Uno o più campi del pacchetto hanno un tipo non valido.';
$lang['FormRules.modulefields.package_fields[][label].empty'] = 'Inserire un\'etichetta per ogni campo della confezione.';
$lang['FormRules.modulefields.package_fields[][name].format'] = 'Inserire un nome per ogni campo del pacchetto nel formato snake_case_name.';
$lang['FormRules.modulefields.service_fields[][name_key].valid'] = 'Se impostare un campo di servizio come chiave del nome deve essere impostato su true o false.';
$lang['FormRules.modulefields.service_fields[][type].valid'] = 'Uno o più campi del servizio hanno un tipo non valido.';
$lang['FormRules.modulefields.service_fields[][label].empty'] = 'Inserire un\'etichetta per ogni campo di servizio.';
$lang['FormRules.modulefields.service_fields[][name].format'] = 'Inserire un nome per ogni campo di servizio nel formato nome_caso_serpente.';
$lang['FormRules.modulefields.module_rows[][name_key].valid'] = 'Se impostare un campo di riga del modulo come chiave del nome deve essere impostato su true o false.';
$lang['FormRules.modulefields.module_rows[][type].valid'] = 'Una o più righe del modulo hanno un tipo non valido.';
$lang['FormRules.modulefields.module_rows[][label].empty'] = 'Inserire un\'etichetta per ogni campo della riga del modulo.';
$lang['FormRules.modulefields.module_rows[][name].format'] = 'Inserire un nome per ogni campo della riga del modulo nel formato nome_caso_serpente.';
$lang['FormRules.modulebasic.authors[][name].empty'] = 'Inserire un nome per ogni autore.';
$lang['FormRules.modulebasic.module_group.empty'] = 'Inserire l\'etichetta di un gruppo di moduli.';
$lang['FormRules.modulebasic.module_row_plural.empty'] = 'Aggiungere un nome di riga di modulo plurale.';
$lang['FormRules.modulebasic.module_row.empty'] = 'Inserire il nome della riga del modulo.';
$lang['FormRules.general.name.format'] = 'I nomi delle estensioni possono contenere solo caratteri alfanumerici, trattini bassi e spazi.';

