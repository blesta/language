<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.sv_se
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.edit.text_fields_map'] = 'I det här avsnittet kan du byta namn på fälten i den händelse som utlöses till ett eget namn innan de skickas till callbacken. Delfält ska separeras med en punkt (t.ex. vars.status). Om du vill se en lista över alla fält som stöds av var och en av händelserna kan du kontrollera följande <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">länk</a>.';
$lang['AdminMain.edit.field_editsubmit'] = 'Redigera Webhook';
$lang['AdminMain.edit.field_add_field'] = 'Lägg till fält';
$lang['AdminMain.edit.field_method'] = 'Metod';
$lang['AdminMain.edit.field_type'] = 'Återkoppling';
$lang['AdminMain.edit.field_event'] = 'Händelse';
$lang['AdminMain.edit.field_callback'] = 'Återkoppling';
$lang['AdminMain.edit.option_delete'] = 'Radera';
$lang['AdminMain.edit.heading_options'] = 'Alternativ';
$lang['AdminMain.edit.heading_parameter'] = 'Nytt fält';
$lang['AdminMain.edit.heading_field'] = 'Ursprungligt fält';
$lang['AdminMain.edit.heading_fields_map'] = 'Karta över fält';
$lang['AdminMain.edit.heading_event'] = 'Händelse';
$lang['AdminMain.edit.boxtitle_editwebhook'] = 'Redigera Webhook';
$lang['AdminMain.add.text_fields_map'] = 'I det här avsnittet kan du byta namn på fälten i den händelse som utlöses till ett eget namn innan de skickas till callbacken. Delfält ska separeras med en punkt (t.ex. vars.status). Om du vill se en lista över alla fält som stöds av var och en av händelserna kan du kontrollera följande <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">länk</a>.';
$lang['AdminMain.add.field_addsubmit'] = 'Lägg till webhook';
$lang['AdminMain.add.field_add_field'] = 'Lägg till fält';
$lang['AdminMain.add.field_method'] = 'Metod';
$lang['AdminMain.add.field_type'] = 'Återkoppling';
$lang['AdminMain.add.field_event'] = 'Händelse';
$lang['AdminMain.add.field_callback'] = 'Återkoppling';
$lang['AdminMain.add.option_delete'] = 'Radera';
$lang['AdminMain.add.heading_options'] = 'Alternativ';
$lang['AdminMain.add.heading_parameter'] = 'Nytt fält';
$lang['AdminMain.add.heading_field'] = 'Ursprungligt fält';
$lang['AdminMain.add.heading_fields_map'] = 'Karta över fält';
$lang['AdminMain.add.heading_event'] = 'Händelse';
$lang['AdminMain.add.boxtitle_addwebhook'] = 'Lägg till webhook';
$lang['AdminMain.index.no_results'] = 'Det finns inga tillgängliga webbkrokar.';
$lang['AdminMain.index.text_description_incoming'] = 'Tar emot en HTTP-begäran och utlöser en händelse i systemet med hjälp av de parametrar som tas emot i begäran. Begäran kan tas emot med GET, POST eller JSON.';
$lang['AdminMain.index.text_description_outgoing'] = 'Skickar en HTTP-begäran till en URL när en händelse utlöses. Begäran kan skickas med GET, POST, PUT eller JSON.';
$lang['AdminMain.index.option_delete'] = 'Radera';
$lang['AdminMain.index.option_edit'] = 'Redigera';
$lang['AdminMain.index.heading_options'] = 'Alternativ';
$lang['AdminMain.index.heading_method'] = 'Metod';
$lang['AdminMain.index.heading_event'] = 'Händelse';
$lang['AdminMain.index.heading_callback'] = 'Återkoppling';
$lang['AdminMain.index.boxtitle_webhooks'] = 'Webbkrokar';
$lang['AdminMain.index.categorylink_addwebhook'] = 'Lägg till webhook';
$lang['AdminMain.index.category_outgoing'] = 'Utgående';
$lang['AdminMain.index.category_incoming'] = 'Inkommande';
$lang['AdminMain.index.page_title_edit'] = 'Redigera Webhook';
$lang['AdminMain.index.page_title_add'] = 'Lägg till webhook';
$lang['AdminMain.index.page_title_index'] = 'Webbkrokar';
$lang['AdminMain.modal.delete_text'] = 'Är du säker på att du vill ta bort denna webhook?';
$lang['AdminMain.!success.webhook_deleted'] = 'Webhooken har tagits bort framgångsrikt!';
$lang['AdminMain.!success.webhook_updated'] = 'Webhooken uppdaterades framgångsrikt!';
$lang['AdminMain.!success.webhook_added'] = 'Webhooken har lagts till framgångsrikt!';
$lang['AdminMain.!tooltip.callback'] = 'Callbacken representerar var begäran ska skickas eller tas emot, för utgående webhooks måste det vara en URL och för inkommande webhooks måste det vara namnet på den URL där begäran skulle tas emot. t.ex. http://blesta.com/plugin/webhooks/trigger/index/[Callback Name].';
$lang['AdminMain.edit.field_cancel'] = 'Avbryt';
$lang['AdminMain.add.field_cancel'] = 'Avbryt';
$lang['AdminMain.logs.no_results'] = 'Det finns inga loggar tillgängliga.';
$lang['AdminMain.logs.option_resend'] = 'Skicka tillbaka';
$lang['AdminMain.logs.confirm_resend'] = 'Är du säker på att du vill skicka det här evenemanget igen?';
$lang['AdminMain.logs.field_filterdateend'] = 'Slutdatum';
$lang['AdminMain.logs.field_filterdatestart'] = 'Startdatum';
$lang['AdminMain.logs.field_filterhttpstatus'] = 'HTTP-status';
$lang['AdminMain.logs.field_filterevent'] = 'Händelse';
$lang['AdminMain.logs.field_filterwebhook_all'] = 'Alla webbhooks';
$lang['AdminMain.logs.field_filterwebhook'] = 'Webhook';
$lang['AdminMain.logs.heading_options'] = 'Alternativ';
$lang['AdminMain.logs.heading_date_last_retry'] = 'Senaste försök';
$lang['AdminMain.logs.heading_date_triggered'] = 'Datum Utlöst';
$lang['AdminMain.logs.heading_http_response'] = 'HTTP-svar';
$lang['AdminMain.logs.heading_method'] = 'Metod';
$lang['AdminMain.logs.heading_response'] = 'Svar';
$lang['AdminMain.logs.heading_event'] = 'Händelse';
$lang['AdminMain.logs.heading_webhook'] = 'Webhook';
$lang['AdminMain.logs.categorylink_viewwebhooks'] = 'Visa webbhooks';
$lang['AdminMain.logs.boxtitle_logs'] = 'Webhook-loggar';
$lang['AdminMain.index.option_logs'] = 'Loggar';
$lang['AdminMain.index.categorylink_viewlogs'] = 'Visa alla loggar';
$lang['AdminMain.index.page_title_logs'] = 'Webhook-loggar';
$lang['AdminMain.!success.webhook_retried'] = 'Webhooken provades på nytt framgångsrikt!';

