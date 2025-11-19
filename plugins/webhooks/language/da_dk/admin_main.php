<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.edit.text_fields_map'] = 'Dette afsnit giver dig mulighed for at omdøbe navnet på felterne i den begivenhed, der udløses, til et brugerdefineret navn, før de sendes til tilbagekaldet. Underfelter skal være adskilt af et punktum (f.eks. vars.status). For at se en liste over alle de felter, der understøttes af hver enkelt af begivenhederne, kan du tjekke følgende <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">link</a>.';
$lang['AdminMain.edit.field_editsubmit'] = 'Rediger webhook';
$lang['AdminMain.edit.field_add_field'] = 'Tilføj felt';
$lang['AdminMain.edit.field_method'] = 'Metode';
$lang['AdminMain.edit.field_type'] = 'Tilbagekald';
$lang['AdminMain.edit.field_event'] = 'Begivenhed';
$lang['AdminMain.edit.field_callback'] = 'Tilbagekald';
$lang['AdminMain.edit.option_delete'] = 'Slet';
$lang['AdminMain.edit.heading_options'] = 'Valgmuligheder';
$lang['AdminMain.edit.heading_parameter'] = 'Nyt felt';
$lang['AdminMain.edit.heading_field'] = 'Oprindeligt felt';
$lang['AdminMain.edit.heading_fields_map'] = 'Kort over marker';
$lang['AdminMain.edit.heading_event'] = 'Begivenhed';
$lang['AdminMain.edit.boxtitle_editwebhook'] = 'Rediger webhook';
$lang['AdminMain.add.text_fields_map'] = 'Dette afsnit giver dig mulighed for at omdøbe navnet på felterne i den begivenhed, der udløses, til et brugerdefineret navn, før de sendes til tilbagekaldet. Underfelter skal være adskilt af et punktum (f.eks. vars.status). For at se en liste over alle de felter, der understøttes af hver enkelt af begivenhederne, kan du tjekke følgende <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">link</a>.';
$lang['AdminMain.add.field_addsubmit'] = 'Tilføj webhook';
$lang['AdminMain.add.field_add_field'] = 'Tilføj felt';
$lang['AdminMain.add.field_method'] = 'Metode';
$lang['AdminMain.add.field_type'] = 'Tilbagekald';
$lang['AdminMain.add.field_event'] = 'Begivenhed';
$lang['AdminMain.add.field_callback'] = 'Tilbagekald';
$lang['AdminMain.add.option_delete'] = 'Slet';
$lang['AdminMain.add.heading_options'] = 'Valgmuligheder';
$lang['AdminMain.add.heading_parameter'] = 'Nyt felt';
$lang['AdminMain.add.heading_field'] = 'Oprindeligt felt';
$lang['AdminMain.add.heading_fields_map'] = 'Kort over marker';
$lang['AdminMain.add.heading_event'] = 'Begivenhed';
$lang['AdminMain.add.boxtitle_addwebhook'] = 'Tilføj webhook';
$lang['AdminMain.index.no_results'] = 'Der er ingen webhooks tilgængelige.';
$lang['AdminMain.index.text_description_incoming'] = 'Modtager en HTTP-anmodning og udløser en hændelse på systemet ved hjælp af de parametre, der er modtaget i anmodningen. Anmodningen kan modtages ved hjælp af GET, POST eller JSON.';
$lang['AdminMain.index.text_description_outgoing'] = 'Sender en HTTP-anmodning til en URL, når en begivenhed udløses. Anmodningen kan sendes ved hjælp af GET, POST, PUT eller JSON.';
$lang['AdminMain.index.option_delete'] = 'Slet';
$lang['AdminMain.index.option_edit'] = 'Rediger';
$lang['AdminMain.index.heading_options'] = 'Valgmuligheder';
$lang['AdminMain.index.heading_method'] = 'Metode';
$lang['AdminMain.index.heading_event'] = 'Begivenhed';
$lang['AdminMain.index.heading_callback'] = 'Tilbagekald';
$lang['AdminMain.index.boxtitle_webhooks'] = 'Webhooks';
$lang['AdminMain.index.categorylink_addwebhook'] = 'Tilføj webhook';
$lang['AdminMain.index.category_outgoing'] = 'Udgående';
$lang['AdminMain.index.category_incoming'] = 'Indkommende';
$lang['AdminMain.index.page_title_edit'] = 'Rediger webhook';
$lang['AdminMain.index.page_title_add'] = 'Tilføj webhook';
$lang['AdminMain.index.page_title_index'] = 'Webhooks';
$lang['AdminMain.modal.delete_text'] = 'Er du sikker på, at du vil slette dette webhook?';
$lang['AdminMain.!success.webhook_deleted'] = 'Webhook\'et blev slettet med succes!';
$lang['AdminMain.!success.webhook_updated'] = 'Webhook\'et blev opdateret med succes!';
$lang['AdminMain.!success.webhook_added'] = 'Webhook\'et blev tilføjet med succes!';
$lang['AdminMain.!tooltip.callback'] = 'Callback repræsenterer, hvor anmodningen vil blive sendt eller modtaget, for udgående webhooks skal det være en URL, og for indgående webhooks skal det være navnet på den URL, hvor anmodningen vil blive modtaget. f.eks. http://blesta.com/plugin/webhooks/trigger/index/[Callback Name].';
$lang['AdminMain.edit.field_cancel'] = 'Annuller';
$lang['AdminMain.add.field_cancel'] = 'Annuller';
$lang['AdminMain.logs.no_results'] = 'Der er ingen tilgængelige logfiler.';
$lang['AdminMain.logs.option_resend'] = 'Send igen';
$lang['AdminMain.logs.confirm_resend'] = 'Er du sikker på, at du vil sende denne begivenhed igen?';
$lang['AdminMain.logs.field_filterdateend'] = 'Slutdato';
$lang['AdminMain.logs.field_filterdatestart'] = 'Startdato';
$lang['AdminMain.logs.field_filterhttpstatus'] = 'HTTP-status';
$lang['AdminMain.logs.field_filterevent'] = 'Begivenhed';
$lang['AdminMain.logs.field_filterwebhook_all'] = 'Alle webhooks';
$lang['AdminMain.logs.field_filterwebhook'] = 'Webhook';
$lang['AdminMain.logs.heading_options'] = 'Valgmuligheder';
$lang['AdminMain.logs.heading_date_last_retry'] = 'Sidste forsøg';
$lang['AdminMain.logs.heading_date_triggered'] = 'Dato udløst';
$lang['AdminMain.logs.heading_http_response'] = 'HTTP-svar';
$lang['AdminMain.logs.heading_method'] = 'Metode';
$lang['AdminMain.logs.heading_response'] = 'Svar';
$lang['AdminMain.logs.heading_event'] = 'Begivenhed';
$lang['AdminMain.logs.heading_webhook'] = 'Webhook';
$lang['AdminMain.logs.categorylink_viewwebhooks'] = 'Se webhooks';
$lang['AdminMain.logs.boxtitle_logs'] = 'Webhook-logfiler';
$lang['AdminMain.index.option_logs'] = 'Logfiler';
$lang['AdminMain.index.categorylink_viewlogs'] = 'Se alle logfiler';
$lang['AdminMain.index.page_title_logs'] = 'Webhook-logfiler';
$lang['AdminMain.!success.webhook_retried'] = 'Webhooken blev forsøgt igen med succes!';

