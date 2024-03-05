<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.it_it
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.confirm.generate'] = 'Generare l\'estensione';
$lang['AdminMain.confirm.custom_path'] = 'Percorso personalizzato';
$lang['AdminMain.confirm.tooltip_location'] = 'La directory in cui caricare i file di estensione generati.';
$lang['AdminMain.confirm.location'] = 'Posizione dell\'estensione';
$lang['AdminMain.confirm.text_generation'] = 'Le impostazioni dell\'estensione sono completate.  È possibile rivedere qualsiasi sezione facendo clic sui nodi della barra di avanzamento.  Fare clic su "Genera estensione" per terminare e generare automaticamente i file dell\'estensione.';
$lang['AdminMain.confirm.heading_confirm'] = 'Conferma';
$lang['AdminMain.general.placeholder_name'] = 'Nome dell\'estensione';
$lang['AdminMain.general.tooltip_code_examples'] = 'Verificare l\'inclusione di righe commentate di codice di esempio per funzioni come Cron Tasks, elenchi di eventi e collegamenti, ecc.';
$lang['AdminMain.general.tooltip_form_type'] = 'Basic per utilizzare una versione molto ridotta del modulo di estensione, includendo solo il minimo necessario per generare l\'estensione.';
$lang['AdminMain.general.tooltip_type'] = 'I moduli gestiscono molte funzioni di servizio, tra cui la fornitura di servizi su server remoti. I plugin sono potenti integrazioni in grado di fare quasi tutto in Blesta. I gateway commerciali elaborano i pagamenti mantenendo i clienti nell\'interfaccia di Blesta.  I gateway non commerciali inviano i clienti a un sito di elaborazione dei pagamenti per completare il pagamento.';
$lang['AdminMain.general.tooltip_name'] = 'Il nome visualizzato dell\'estensione. Questo viene utilizzato anche per la creazione di vari codici. Ad esempio, se il nome è My Module, la cartella del modulo sarà my_module e il nome della classe sarà MyModule.  Per i plugin, non includere la parola "plugin" nel nome, perché causa alcuni problemi con la generazione del codice.';
$lang['AdminMain.general.basic_info'] = 'Avanti - Informazioni di base';
$lang['AdminMain.general.code_examples'] = 'Includere un codice di esempio';
$lang['AdminMain.general.form_type'] = 'Tipo di modulo';
$lang['AdminMain.general.type'] = 'Tipo di estensione';
$lang['AdminMain.general.name'] = 'Nome';
$lang['AdminMain.general.heading_general_settings'] = 'Impostazioni generali';
$lang['AdminMain.index.extensions_no_results'] = 'Al momento non sono previste proroghe.';
$lang['AdminMain.index.text_confirm_delete'] = 'Siete sicuri di voler eliminare questa estensione?';
$lang['AdminMain.index.option_delete'] = 'Cancellare';
$lang['AdminMain.index.option_edit'] = 'Modifica';
$lang['AdminMain.index.heading_options'] = 'Opzioni';
$lang['AdminMain.index.heading_date_updated'] = 'Data di aggiornamento';
$lang['AdminMain.index.heading_code_examples'] = 'Esempi di codice';
$lang['AdminMain.index.heading_form_type'] = 'Tipo di modulo';
$lang['AdminMain.index.heading_type'] = 'Tipo';
$lang['AdminMain.index.heading_name'] = 'Nome';
$lang['AdminMain.index.heading_id'] = 'ID';
$lang['AdminMain.index.extension_add'] = 'Aggiungi estensione';
$lang['AdminMain.index.boxtitle_extensions'] = 'Generatore di estensioni - Estensioni';
$lang['AdminMain.index.boxtitle_extension_generator'] = 'Generatore di estensione';
$lang['AdminMain.index.page_title'] = 'Generatore di estensione';
$lang['AdminMain.getfilelocations.custom'] = 'Personalizzato';
$lang['AdminMain.getfilelocations.upload'] = 'Elenco dei caricamenti di Blesta';
$lang['AdminMain.getfilelocations.nonmerchant'] = 'Elenco dei gateway non commerciali Blesta';
$lang['AdminMain.getfilelocations.merchant'] = 'Elenco dei gateway commerciali Blesta';
$lang['AdminMain.getfilelocations.plugin'] = 'Elenco dei plugin Blesta';
$lang['AdminMain.getfilelocations.module'] = 'Elenco dei moduli Blesta';
$lang['AdminMain.!success.nonmerchant_created'] = 'Il nuovo gateway è stato generato con successo e si trova all\'indirizzo %1$s.';
$lang['AdminMain.!success.merchant_created'] = 'Il nuovo gateway è stato generato con successo e si trova all\'indirizzo %1$s.';
$lang['AdminMain.!success.plugin_created'] = 'Il nuovo plugin è stato generato con successo e si trova all\'indirizzo %1$s.';
$lang['AdminMain.!success.module_created'] = 'Il nuovo modulo è stato generato con successo e si trova all\'indirizzo %1$s.';
$lang['AdminMain.!success.package_deleted'] = 'L\'estensione è stata eliminata con successo';
$lang['AdminMain.!notice.updating_installed_extension'] = 'Questa estensione è attualmente installata. Si consiglia vivamente di disinstallarla prima di rigenerare i file, altrimenti si potrebbe danneggiare la consistenza del database.';
$lang['AdminMain.!notice.file_overwrite'] = 'I file per questa estensione esistono già nei file Blesta e verranno sovrascritti se si utilizza la Directory Blesta.';
$lang['AdminMain.!notice.type_warning'] = 'La modifica del tipo di estensione cancellerà irrevocabilmente tutte le impostazioni salvate per questa estensione.';
$lang['AdminMain.!error.generation_failed'] = 'Impossibile generare l\'estensione.  Eccezione generata: %1$s';
$lang['AdminMain.!error.name_taken'] = 'Questo nome è in conflitto con una directory di estensione esistente.';

