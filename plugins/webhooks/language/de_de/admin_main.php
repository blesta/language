<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.edit.text_fields_map'] = 'In diesem Abschnitt können Sie die Namen der Felder des ausgelösten Ereignisses in einen benutzerdefinierten Namen umbenennen, bevor sie an den Callback gesendet werden. Unterfelder sollten durch einen Punkt getrennt werden (z. B. vars.status). Eine Liste aller Felder, die von den einzelnen Ereignissen unterstützt werden, finden Sie unter dem folgenden <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">Link</a>.';
$lang['AdminMain.edit.field_editsubmit'] = 'Webhook bearbeiten';
$lang['AdminMain.edit.field_add_field'] = 'Feld hinzufügen';
$lang['AdminMain.edit.field_method'] = 'Methode';
$lang['AdminMain.edit.field_type'] = 'Rückruf';
$lang['AdminMain.edit.field_event'] = 'Veranstaltung';
$lang['AdminMain.edit.field_callback'] = 'Rückruf';
$lang['AdminMain.edit.option_delete'] = 'Löschen';
$lang['AdminMain.edit.heading_options'] = 'Optionen';
$lang['AdminMain.edit.heading_parameter'] = 'Neues Feld';
$lang['AdminMain.edit.heading_field'] = 'Original-Feld';
$lang['AdminMain.edit.heading_fields_map'] = 'Felder Karte';
$lang['AdminMain.edit.heading_event'] = 'Veranstaltung';
$lang['AdminMain.edit.boxtitle_editwebhook'] = 'Webhook bearbeiten';
$lang['AdminMain.add.text_fields_map'] = 'In diesem Abschnitt können Sie die Namen der Felder des ausgelösten Ereignisses in einen benutzerdefinierten Namen umbenennen, bevor sie an den Callback gesendet werden. Unterfelder sollten durch einen Punkt getrennt werden (z. B. vars.status). Eine Liste aller Felder, die von den einzelnen Ereignissen unterstützt werden, finden Sie unter dem folgenden <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">Link</a>.';
$lang['AdminMain.add.field_addsubmit'] = 'Webhook hinzufügen';
$lang['AdminMain.add.field_add_field'] = 'Feld hinzufügen';
$lang['AdminMain.add.field_method'] = 'Methode';
$lang['AdminMain.add.field_type'] = 'Rückruf';
$lang['AdminMain.add.field_event'] = 'Veranstaltung';
$lang['AdminMain.add.field_callback'] = 'Rückruf';
$lang['AdminMain.add.option_delete'] = 'Löschen';
$lang['AdminMain.add.heading_options'] = 'Optionen';
$lang['AdminMain.add.heading_parameter'] = 'Neues Feld';
$lang['AdminMain.add.heading_field'] = 'Original-Feld';
$lang['AdminMain.add.heading_fields_map'] = 'Felder Karte';
$lang['AdminMain.add.heading_event'] = 'Veranstaltung';
$lang['AdminMain.add.boxtitle_addwebhook'] = 'Webhook hinzufügen';
$lang['AdminMain.index.no_results'] = 'Es sind keine Webhooks verfügbar.';
$lang['AdminMain.index.text_description_incoming'] = 'Empfängt eine HTTP-Anfrage und löst ein Ereignis im System aus, wobei die in der Anfrage enthaltenen Parameter verwendet werden. Die Anfrage kann über GET, POST oder JSON empfangen werden.';
$lang['AdminMain.index.text_description_outgoing'] = 'Sendet eine HTTP-Anfrage an eine URL, wenn ein Ereignis ausgelöst wird. Die Anfrage kann mit GET, POST, PUT oder JSON gesendet werden.';
$lang['AdminMain.index.option_delete'] = 'Löschen';
$lang['AdminMain.index.option_edit'] = 'bearbeiten';
$lang['AdminMain.index.heading_options'] = 'Optionen';
$lang['AdminMain.index.heading_method'] = 'Methode';
$lang['AdminMain.index.heading_event'] = 'Veranstaltung';
$lang['AdminMain.index.heading_callback'] = 'Rückruf';
$lang['AdminMain.index.boxtitle_webhooks'] = 'Webhaken';
$lang['AdminMain.index.categorylink_addwebhook'] = 'Webhook hinzufügen';
$lang['AdminMain.index.category_outgoing'] = 'Ausgehend von';
$lang['AdminMain.index.category_incoming'] = 'Eingehend';
$lang['AdminMain.index.page_title_edit'] = 'Webhook bearbeiten';
$lang['AdminMain.index.page_title_add'] = 'Webhook hinzufügen';
$lang['AdminMain.index.page_title_index'] = 'Webhaken';
$lang['AdminMain.modal.delete_text'] = 'Sind Sie sicher, dass Sie diesen Webhook löschen wollen?';
$lang['AdminMain.!success.webhook_deleted'] = 'Der Webhook wurde erfolgreich gelöscht!';
$lang['AdminMain.!success.webhook_updated'] = 'Der Webhook wurde erfolgreich aktualisiert!';
$lang['AdminMain.!success.webhook_added'] = 'Der Webhook wurde erfolgreich hinzugefügt!';
$lang['AdminMain.!tooltip.callback'] = 'Der Callback steht für den Ort, an den die Anfrage gesendet oder empfangen wird. Bei ausgehenden Webhooks muss es sich um eine URL handeln, bei eingehenden Webhooks um den Namen der URL, unter der die Anfrage empfangen wird. z. B. http://blesta.com/plugin/webhooks/trigger/index/[Callback Name].';
$lang['AdminMain.edit.field_cancel'] = 'Abbrechen';
$lang['AdminMain.add.field_cancel'] = 'Abbrechen';
$lang['AdminMain.logs.no_results'] = 'Es sind keine Protokolle vorhanden.';
$lang['AdminMain.logs.option_resend'] = 'Erneut senden';
$lang['AdminMain.logs.confirm_resend'] = 'Sind Sie sicher, dass Sie dieses Ereignis erneut senden möchten?';
$lang['AdminMain.logs.field_filterdateend'] = 'Enddatum';
$lang['AdminMain.logs.field_filterdatestart'] = 'Datum des Beginns';
$lang['AdminMain.logs.field_filterhttpstatus'] = 'HTTP-Status';
$lang['AdminMain.logs.field_filterevent'] = 'Veranstaltung';
$lang['AdminMain.logs.field_filterwebhook_all'] = 'Alle Webhooks';
$lang['AdminMain.logs.field_filterwebhook'] = 'Webhook';
$lang['AdminMain.logs.heading_options'] = 'Optionen';
$lang['AdminMain.logs.heading_date_last_retry'] = 'Letzter Wiederholungsversuch';
$lang['AdminMain.logs.heading_date_triggered'] = 'Datum Auslöser';
$lang['AdminMain.logs.heading_http_response'] = 'HTTP-Antwort';
$lang['AdminMain.logs.heading_method'] = 'Methode';
$lang['AdminMain.logs.heading_response'] = 'Antwort';
$lang['AdminMain.logs.heading_event'] = 'Veranstaltung';
$lang['AdminMain.logs.heading_webhook'] = 'Webhook';
$lang['AdminMain.logs.categorylink_viewwebhooks'] = 'Webhooks anzeigen';
$lang['AdminMain.logs.boxtitle_logs'] = 'Webhook-Protokolle';
$lang['AdminMain.index.option_logs'] = 'Protokolle';
$lang['AdminMain.index.categorylink_viewlogs'] = 'Alle Logs anzeigen';
$lang['AdminMain.index.page_title_logs'] = 'Webhook-Protokolle';
$lang['AdminMain.!success.webhook_retried'] = 'Der Webhook wurde erfolgreich erneut versucht!';

