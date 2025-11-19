<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.it_it
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.edit.text_fields_map'] = 'Questa sezione consente di rinominare il nome dei campi dell\'evento che si sta attivando con un nome personalizzato prima che vengano inviati al callback. I sottocampi devono essere separati da un punto (ad esempio, vars.status). Per vedere un elenco di tutti i campi supportati da ciascuno degli eventi, si può consultare il seguente <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">link</a>.';
$lang['AdminMain.edit.field_editsubmit'] = 'Modifica Webhook';
$lang['AdminMain.edit.field_add_field'] = 'Aggiungi campo';
$lang['AdminMain.edit.field_method'] = 'Metodo';
$lang['AdminMain.edit.field_type'] = 'Richiamo';
$lang['AdminMain.edit.field_event'] = 'Evento';
$lang['AdminMain.edit.field_callback'] = 'Richiamo';
$lang['AdminMain.edit.option_delete'] = 'Cancellare';
$lang['AdminMain.edit.heading_options'] = 'Opzioni';
$lang['AdminMain.edit.heading_parameter'] = 'Nuovo campo';
$lang['AdminMain.edit.heading_field'] = 'Campo originale';
$lang['AdminMain.edit.heading_fields_map'] = 'Mappa dei campi';
$lang['AdminMain.edit.heading_event'] = 'Evento';
$lang['AdminMain.edit.boxtitle_editwebhook'] = 'Modifica Webhook';
$lang['AdminMain.add.text_fields_map'] = 'Questa sezione consente di rinominare il nome dei campi dell\'evento che si sta attivando con un nome personalizzato prima che vengano inviati al callback. I sottocampi devono essere separati da un punto (ad esempio, vars.status). Per vedere un elenco di tutti i campi supportati da ciascuno degli eventi, si può consultare il seguente <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">link</a>.';
$lang['AdminMain.add.field_addsubmit'] = 'Aggiungi Webhook';
$lang['AdminMain.add.field_add_field'] = 'Aggiungi campo';
$lang['AdminMain.add.field_method'] = 'Metodo';
$lang['AdminMain.add.field_type'] = 'Richiamo';
$lang['AdminMain.add.field_event'] = 'Evento';
$lang['AdminMain.add.field_callback'] = 'Richiamo';
$lang['AdminMain.add.option_delete'] = 'Cancellare';
$lang['AdminMain.add.heading_options'] = 'Opzioni';
$lang['AdminMain.add.heading_parameter'] = 'Nuovo campo';
$lang['AdminMain.add.heading_field'] = 'Campo originale';
$lang['AdminMain.add.heading_fields_map'] = 'Mappa dei campi';
$lang['AdminMain.add.heading_event'] = 'Evento';
$lang['AdminMain.add.boxtitle_addwebhook'] = 'Aggiungi Webhook';
$lang['AdminMain.index.no_results'] = 'Non ci sono webhook disponibili.';
$lang['AdminMain.index.text_description_incoming'] = 'Riceve una richiesta HTTP e attiva un evento sul sistema utilizzando i parametri ricevuti nella richiesta. La richiesta può essere ricevuta tramite GET, POST o JSON.';
$lang['AdminMain.index.text_description_outgoing'] = 'Invia una richiesta HTTP a un URL quando viene attivato un evento. La richiesta può essere inviata tramite GET, POST, PUT o JSON.';
$lang['AdminMain.index.option_delete'] = 'Cancellare';
$lang['AdminMain.index.option_edit'] = 'Modifica';
$lang['AdminMain.index.heading_options'] = 'Opzioni';
$lang['AdminMain.index.heading_method'] = 'Metodo';
$lang['AdminMain.index.heading_event'] = 'Evento';
$lang['AdminMain.index.heading_callback'] = 'Richiamo';
$lang['AdminMain.index.boxtitle_webhooks'] = 'Ganci web';
$lang['AdminMain.index.categorylink_addwebhook'] = 'Aggiungi Webhook';
$lang['AdminMain.index.category_outgoing'] = 'In uscita';
$lang['AdminMain.index.category_incoming'] = 'In arrivo';
$lang['AdminMain.index.page_title_edit'] = 'Modifica Webhook';
$lang['AdminMain.index.page_title_add'] = 'Aggiungi Webhook';
$lang['AdminMain.index.page_title_index'] = 'Ganci web';
$lang['AdminMain.modal.delete_text'] = 'Si è sicuri di voler eliminare questo webhook?';
$lang['AdminMain.!success.webhook_deleted'] = 'Il webhook è stato cancellato con successo!';
$lang['AdminMain.!success.webhook_updated'] = 'Il webhook è stato aggiornato con successo!';
$lang['AdminMain.!success.webhook_added'] = 'Il webhook è stato aggiunto con successo!';
$lang['AdminMain.!tooltip.callback'] = 'Il callback rappresenta il luogo in cui la richiesta verrà inviata o ricevuta; per i webhook in uscita deve essere un URL e per i webhook in entrata deve essere il nome dell\'URL in cui la richiesta verrà ricevuta. ad esempio http://blesta.com/plugin/webhooks/trigger/index/[Nome callback].';
$lang['AdminMain.edit.field_cancel'] = 'Annullamento';
$lang['AdminMain.add.field_cancel'] = 'Annullamento';
$lang['AdminMain.logs.no_results'] = 'Non ci sono registri disponibili.';
$lang['AdminMain.logs.option_resend'] = 'Reinvio';
$lang['AdminMain.logs.confirm_resend'] = 'È sicuro di voler inviare nuovamente questo evento?';
$lang['AdminMain.logs.field_filterdatestart'] = 'Data di inizio';
$lang['AdminMain.logs.field_filterdateend'] = 'Data di fine';
$lang['AdminMain.logs.field_filterhttpstatus'] = 'Stato HTTP';
$lang['AdminMain.logs.field_filterevent'] = 'Evento';
$lang['AdminMain.logs.field_filterwebhook_all'] = 'Tutti i webhook';
$lang['AdminMain.logs.field_filterwebhook'] = 'Webhook';
$lang['AdminMain.logs.heading_options'] = 'Opzioni';
$lang['AdminMain.logs.heading_date_last_retry'] = 'Ultimo tentativo';
$lang['AdminMain.logs.heading_date_triggered'] = 'Data di attivazione';
$lang['AdminMain.logs.heading_http_response'] = 'Risposta HTTP';
$lang['AdminMain.logs.heading_method'] = 'Metodo';
$lang['AdminMain.logs.heading_response'] = 'Risposta';
$lang['AdminMain.logs.heading_event'] = 'Evento';
$lang['AdminMain.logs.heading_webhook'] = 'Webhook';
$lang['AdminMain.logs.categorylink_viewwebhooks'] = 'Visualizza i webhook';
$lang['AdminMain.logs.boxtitle_logs'] = 'Registri webhook';
$lang['AdminMain.index.option_logs'] = 'Registri';
$lang['AdminMain.index.categorylink_viewlogs'] = 'Visualizza tutti i diari di bordo';
$lang['AdminMain.index.page_title_logs'] = 'Registri webhook';
$lang['AdminMain.!success.webhook_retried'] = 'Il webhook è stato riprovato con successo!';

