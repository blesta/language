<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.nl_nl
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.edit.text_fields_map'] = 'Met deze sectie kun je de naam van de velden van de gebeurtenis die getriggerd wordt hernoemen naar een aangepaste naam voordat ze naar de callback worden gestuurd. Subvelden moeten gescheiden worden door een punt (bv. vars.status). Om een lijst te zien van alle velden die door elk van de gebeurtenissen worden ondersteund, kun je de volgende <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">link</a> raadplegen.';
$lang['AdminMain.edit.field_editsubmit'] = 'Webhook bewerken';
$lang['AdminMain.edit.field_add_field'] = 'Veld toevoegen';
$lang['AdminMain.edit.field_method'] = 'Methode';
$lang['AdminMain.edit.field_type'] = 'Terugbellen';
$lang['AdminMain.edit.field_event'] = 'Evenement';
$lang['AdminMain.edit.field_callback'] = 'Terugbellen';
$lang['AdminMain.edit.option_delete'] = 'Verwijder';
$lang['AdminMain.edit.heading_options'] = 'Opties';
$lang['AdminMain.edit.heading_parameter'] = 'Nieuw veld';
$lang['AdminMain.edit.heading_field'] = 'Oorspronkelijk veld';
$lang['AdminMain.edit.heading_fields_map'] = 'Velden Kaart';
$lang['AdminMain.edit.heading_event'] = 'Evenement';
$lang['AdminMain.edit.boxtitle_editwebhook'] = 'Webhook bewerken';
$lang['AdminMain.add.text_fields_map'] = 'Met deze sectie kun je de naam van de velden van de gebeurtenis die getriggerd wordt hernoemen naar een aangepaste naam voordat ze naar de callback worden gestuurd. Subvelden moeten gescheiden worden door een punt (bv. vars.status). Om een lijst te zien van alle velden die door elk van de gebeurtenissen worden ondersteund, kun je de volgende <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">link</a> raadplegen.';
$lang['AdminMain.add.field_addsubmit'] = 'Webhook toevoegen';
$lang['AdminMain.add.field_add_field'] = 'Veld toevoegen';
$lang['AdminMain.add.field_method'] = 'Methode';
$lang['AdminMain.add.field_type'] = 'Terugbellen';
$lang['AdminMain.add.field_event'] = 'Evenement';
$lang['AdminMain.add.field_callback'] = 'Terugbellen';
$lang['AdminMain.add.option_delete'] = 'Verwijder';
$lang['AdminMain.add.heading_options'] = 'Opties';
$lang['AdminMain.add.heading_parameter'] = 'Nieuw veld';
$lang['AdminMain.add.heading_field'] = 'Oorspronkelijk veld';
$lang['AdminMain.add.heading_fields_map'] = 'Velden Kaart';
$lang['AdminMain.add.heading_event'] = 'Evenement';
$lang['AdminMain.add.boxtitle_addwebhook'] = 'Webhook toevoegen';
$lang['AdminMain.index.no_results'] = 'Er zijn geen webhooks beschikbaar.';
$lang['AdminMain.index.text_description_incoming'] = 'Ontvangt een HTTP-verzoek en activeert een gebeurtenis op het systeem met behulp van de parameters in het verzoek. Het verzoek kan worden ontvangen via GET, POST of JSON.';
$lang['AdminMain.index.text_description_outgoing'] = 'Stuurt een HTTP-verzoek naar een URL wanneer een gebeurtenis wordt geactiveerd. Het verzoek kan worden verzonden met GET, POST, PUT of JSON.';
$lang['AdminMain.index.option_delete'] = 'Verwijder';
$lang['AdminMain.index.option_edit'] = 'Bewerk';
$lang['AdminMain.index.heading_options'] = 'Opties';
$lang['AdminMain.index.heading_method'] = 'Methode';
$lang['AdminMain.index.heading_event'] = 'Evenement';
$lang['AdminMain.index.heading_callback'] = 'Terugbellen';
$lang['AdminMain.index.boxtitle_webhooks'] = 'Webhooks';
$lang['AdminMain.index.categorylink_addwebhook'] = 'Webhook toevoegen';
$lang['AdminMain.index.category_outgoing'] = 'Uitgaand';
$lang['AdminMain.index.category_incoming'] = 'Inkomend';
$lang['AdminMain.index.page_title_edit'] = 'Webhook bewerken';
$lang['AdminMain.index.page_title_add'] = 'Webhook toevoegen';
$lang['AdminMain.index.page_title_index'] = 'Webhooks';
$lang['AdminMain.modal.delete_text'] = 'Weet je zeker dat je deze webhook wilt verwijderen?';
$lang['AdminMain.!success.webhook_deleted'] = 'De webhook is succesvol verwijderd!';
$lang['AdminMain.!success.webhook_updated'] = 'De webhook is succesvol bijgewerkt!';
$lang['AdminMain.!success.webhook_added'] = 'De webhook is succesvol toegevoegd!';
$lang['AdminMain.!tooltip.callback'] = 'De callback staat voor de plaats waar het verzoek wordt verzonden of ontvangen, voor uitgaande webhooks moet dit een URL zijn en voor inkomende webhooks de naam van de URL waar het verzoek wordt ontvangen. bijv. http://blesta.com/plugin/webhooks/trigger/index/[Callbacknaam].';
$lang['AdminMain.edit.field_cancel'] = 'Annuleren';
$lang['AdminMain.add.field_cancel'] = 'Annuleren';
$lang['AdminMain.logs.no_results'] = 'Er zijn geen logboeken beschikbaar.';
$lang['AdminMain.logs.option_resend'] = 'Opnieuw versturen';
$lang['AdminMain.logs.confirm_resend'] = 'Weet je zeker dat je deze gebeurtenis opnieuw wilt verzenden?';
$lang['AdminMain.logs.field_filterdateend'] = 'Einddatum';
$lang['AdminMain.logs.field_filterdatestart'] = 'Startdatum';
$lang['AdminMain.logs.field_filterhttpstatus'] = 'HTTP-status';
$lang['AdminMain.logs.field_filterevent'] = 'Evenement';
$lang['AdminMain.logs.field_filterwebhook_all'] = 'Alle webhooks';
$lang['AdminMain.logs.field_filterwebhook'] = 'Webhook';
$lang['AdminMain.logs.heading_options'] = 'Opties';
$lang['AdminMain.logs.heading_date_last_retry'] = 'Laatste poging';
$lang['AdminMain.logs.heading_date_triggered'] = 'Datum geactiveerd';
$lang['AdminMain.logs.heading_http_response'] = 'HTTP antwoord';
$lang['AdminMain.logs.heading_method'] = 'Methode';
$lang['AdminMain.logs.heading_response'] = 'Reactie';
$lang['AdminMain.logs.heading_event'] = 'Evenement';
$lang['AdminMain.logs.heading_webhook'] = 'Webhook';
$lang['AdminMain.logs.categorylink_viewwebhooks'] = 'Webhooks bekijken';
$lang['AdminMain.logs.boxtitle_logs'] = 'Webhook logboeken';
$lang['AdminMain.index.option_logs'] = 'Logboeken';
$lang['AdminMain.index.categorylink_viewlogs'] = 'Alle logboeken bekijken';
$lang['AdminMain.index.page_title_logs'] = 'Webhook logboeken';
$lang['AdminMain.!success.webhook_retried'] = 'De webhook is met succes opnieuw geprobeerd!';

