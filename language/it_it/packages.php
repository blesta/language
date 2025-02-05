<?php
/**
 * Packages
 *
 * @package blesta
 * @subpackage blesta.language.it_it
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Packages.!error.manual_activation.valid'] = 'L\'attivazione manuale deve essere 1 o 0.';
$lang['Packages.getStatusTypes.restricted'] = 'Limitato';
$lang['Packages.getStatusTypes.inactive'] = 'Inattivo';
$lang['Packages.getStatusTypes.active'] = 'Attivo';
$lang['Packages.getPricingPeriods.onetime_plural'] = 'Una sola volta';
$lang['Packages.getPricingPeriods.year_plural'] = 'Anni';
$lang['Packages.getPricingPeriods.month_plural'] = 'Mesi';
$lang['Packages.getPricingPeriods.week_plural'] = 'Settimane';
$lang['Packages.getPricingPeriods.day_plural'] = 'Giorni';
$lang['Packages.getPricingPeriods.onetime'] = 'Una sola volta';
$lang['Packages.getPricingPeriods.year'] = 'Anno';
$lang['Packages.getPricingPeriods.month'] = 'Mese';
$lang['Packages.getPricingPeriods.week'] = 'Settimana';
$lang['Packages.getPricingPeriods.day'] = 'Giorno';
$lang['Packages.!error.groups[].valid'] = 'Il gruppo di pacchetti selezionato non appartiene all\'azienda indicata.';
$lang['Packages.!error.groups[].exists'] = 'ID gruppo di pacchetti non valido.';
$lang['Packages.!error.pricing[][id].deletable'] = 'Non è stato possibile eliminare il termine perché è utilizzato da uno o più servizi.';
$lang['Packages.!error.pricing[][id].format'] = 'ID prezzo pacchetto non valido.';
$lang['Packages.!error.pricing[][currency].in_use'] = 'Non è possibile aggiornare la valuta in una tariffazione in uso.';
$lang['Packages.!error.pricing[][currency].format'] = 'Il codice della valuta deve essere di 3 caratteri.';
$lang['Packages.!error.pricing[][cancel_fee].format'] = 'La tassa di annullamento deve essere un numero.';
$lang['Packages.!error.pricing[][setup_fee].format'] = 'Il costo di installazione deve essere un numero.';
$lang['Packages.!error.pricing[][price_transfer].format'] = 'Il prezzo di trasferimento deve essere un numero.';
$lang['Packages.!error.pricing[][price_renews].valid'] = 'Il prezzo di rinnovo non può essere impostato per un unico periodo.';
$lang['Packages.!error.pricing[][price_renews].format'] = 'Il prezzo di rinnovo deve essere un numero.';
$lang['Packages.!error.pricing[][price].format'] = 'Il prezzo deve essere un numero.';
$lang['Packages.!error.pricing[][period].in_use'] = 'Il periodo non può essere aggiornato in una tariffazione in uso.';
$lang['Packages.!error.pricing[][period].format'] = 'Tipo di periodo non valido.';
$lang['Packages.!error.pricing[][term].in_use'] = 'Il termine non può essere aggiornato in una tariffazione in uso.';
$lang['Packages.!error.pricing[][term].valid'] = 'Il termine deve essere maggiore di 0.';
$lang['Packages.!error.pricing[][term].length'] = 'La lunghezza del termine non può superare i 5 caratteri.';
$lang['Packages.!error.pricing[][term].format'] = 'Il termine deve essere un numero.';
$lang['Packages.!error.email_content.parse'] = 'Errore di analisi del modello: %1$s';
$lang['Packages.!error.email_content[][lang].length'] = 'La lunghezza della lingua non può superare i 5 caratteri.';
$lang['Packages.!error.email_content[][lang].empty'] = 'Inserire una lingua.';
$lang['Packages.!error.prorata_cutoff.format'] = 'Il giorno di chiusura pro rata deve essere compreso tra 1 e 28.';
$lang['Packages.!error.prorata_day.format'] = 'Il giorno pro-rata deve essere compreso tra 1 e 28.';
$lang['Packages.!error.hidden.format'] = 'Se questo gruppo deve essere nascosto nell\'interfaccia, deve essere impostato a 1 o a 0.';
$lang['Packages.!error.status.format'] = 'Stato non valido.';
$lang['Packages.!error.upgrades_use_renewal.valid'] = 'I prezzi di rinnovo dell\'uso per gli aggiornamenti devono essere 1 o 0.';
$lang['Packages.!error.override_price.valid'] = 'L\'impostazione del prezzo del pacchetto come prezzo di sostituzione deve essere 1 o 0.';
$lang['Packages.!error.single_term.valid'] = 'Il singolo termine deve essere 1 o 0.';
$lang['Packages.!error.taxable.length'] = 'La lunghezza imponibile non può superare 1 carattere.';
$lang['Packages.!error.taxable.format'] = 'L\'imponibile deve essere un numero.';
$lang['Packages.!error.module_group_client.valid'] = 'Consenti al client di selezionare il gruppo deve essere 1 o 0.';
$lang['Packages.!error.module_group.format'] = 'Gruppo di moduli non valido.';
$lang['Packages.!error.module_row.format'] = 'Riga del modulo non valida.';
$lang['Packages.!error.plugins[].valid'] = 'Plugin non valido.';
$lang['Packages.!error.option_groups[].valid'] = 'Gruppo di opzioni configurabili del pacchetto non valido.';
$lang['Packages.!error.client_qty.format'] = 'Il limite del cliente deve essere un numero.';
$lang['Packages.!error.qty.format'] = 'La quantità deve essere un numero.';
$lang['Packages.!error.descriptions.empty_lang'] = 'Si prega di specificare un codice di lingua del pacchetto per ogni descrizione.';
$lang['Packages.!error.descriptions.format'] = 'Le descrizioni dei pacchetti sono in un formato non valido.';
$lang['Packages.!error.names.empty_lang'] = 'Per ogni nome, specificare il codice della lingua del pacchetto.';
$lang['Packages.!error.names.empty_name'] = 'Specificare il nome del pacchetto per ogni lingua.';
$lang['Packages.!error.names.format'] = 'I nomi dei pacchetti sono in un formato non valido.';
$lang['Packages.!error.module_id.changed'] = 'Il modulo non può essere modificato perché ci sono già uno o più servizi che utilizzano questo pacchetto.';
$lang['Packages.!error.module_id.exists'] = 'Modulo non valido.';
$lang['Packages.!error.package_id.has_children'] = 'Non è stato possibile eliminare il pacchetto perché un servizio ha servizi figli.';
$lang['Packages.!error.package_id.exists'] = 'Non è stato possibile eliminare il pacchetto perché un servizio lo sta utilizzando.';
$lang['Packages.!error.company_id.exists'] = 'Azienda non valida.';

