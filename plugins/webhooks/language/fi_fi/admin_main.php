<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.fi_fi
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.!success.webhook_added'] = 'Webhook lisättiin onnistuneesti!';
$lang['AdminMain.!success.webhook_deleted'] = 'Webhook poistettiin onnistuneesti!';
$lang['AdminMain.!success.webhook_retried'] = 'Webhookin lähetys yritettiin uudelleen, ja se onnistui!';
$lang['AdminMain.!success.webhook_updated'] = 'Webhook päivitettiin onnistuneesti!';
$lang['AdminMain.!tooltip.callback'] = 'Callback-parametri ilmaisee, minne pyyntö lähetetään tai mistä se vastaanotetaan. Lähtevien webhookien kohdalla sen on oltava URL-osoite, ja saapuvien webhookien kohdalla sen on oltava sen URL-osoitteen nimi, johon pyyntö vastaanotetaan. Esimerkiksi: http://blesta.com/plugin/webhooks/trigger/index/[Callback-nimi].';
$lang['AdminMain.add.boxtitle_addwebhook'] = 'Lisää webhook';
$lang['AdminMain.add.field_add_field'] = 'Lisää kenttä';
$lang['AdminMain.add.field_addsubmit'] = 'Lisää webhook';
$lang['AdminMain.add.field_callback'] = 'Takaisinsoitto';
$lang['AdminMain.add.field_cancel'] = 'Peruuta';
$lang['AdminMain.add.field_event'] = 'Tapahtuma';
$lang['AdminMain.add.field_method'] = 'Menetelmä';
$lang['AdminMain.add.field_type'] = 'Takaisinsoitto';
$lang['AdminMain.add.heading_event'] = 'Tapahtuma';
$lang['AdminMain.add.heading_field'] = 'Alkuperäinen kenttä';
$lang['AdminMain.add.heading_fields_map'] = 'Kenttäkartta';
$lang['AdminMain.add.heading_options'] = 'Toimenpiteet';
$lang['AdminMain.add.heading_parameter'] = 'Uusi kenttä';
$lang['AdminMain.add.option_delete'] = 'Poista';
$lang['AdminMain.add.text_fields_map'] = 'Tässä osiossa voit nimetä laukaistavan tapahtuman kenttien nimet uudelleen mukautetuksi nimeksi ennen kuin ne lähetetään takaisinsoittofunktioon. Alakentät tulee erottaa toisistaan pisteellä (esim. vars.status). Jos haluat nähdä luettelon kaikista kentistä, joita kukin tapahtuma tukee, voit tarkistaa seuraavan <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">linkin</a>.';
$lang['AdminMain.edit.boxtitle_editwebhook'] = 'Muokkaa webhookia';
$lang['AdminMain.edit.field_add_field'] = 'Lisää kenttä';
$lang['AdminMain.edit.field_callback'] = 'Takaisinsoitto';
$lang['AdminMain.edit.field_cancel'] = 'Peruuta';
$lang['AdminMain.edit.field_editsubmit'] = 'Muokkaa webhookia';
$lang['AdminMain.edit.field_event'] = 'Tapahtuma';
$lang['AdminMain.edit.field_method'] = 'Menetelmä';
$lang['AdminMain.edit.field_type'] = 'Takaisinsoitto';
$lang['AdminMain.edit.heading_event'] = 'Tapahtuma';
$lang['AdminMain.edit.heading_field'] = 'Alkuperäinen kenttä';
$lang['AdminMain.edit.heading_fields_map'] = 'Kenttäkartta';
$lang['AdminMain.edit.heading_options'] = 'Toimenpiteet';
$lang['AdminMain.edit.heading_parameter'] = 'Uusi kenttä';
$lang['AdminMain.edit.option_delete'] = 'Poista';
$lang['AdminMain.edit.text_fields_map'] = 'Tässä osiossa voit nimetä laukaistavan tapahtuman kenttien nimet uudelleen mukautetuiksi nimiksi ennen kuin ne lähetetään takaisinsoittoon. Alakentät tulee erottaa toisistaan pisteellä (esim. vars.status). Voit tarkistaa seuraavasta <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">linkistä</a> luettelon kaikista kentistä, joita kukin tapahtuma tukee.';
$lang['AdminMain.index.boxtitle_webhooks'] = 'Webhookit';
$lang['AdminMain.index.category_incoming'] = 'Saapuvat';
$lang['AdminMain.index.category_outgoing'] = 'Lähtevä';
$lang['AdminMain.index.categorylink_addwebhook'] = 'Lisää webhook';
$lang['AdminMain.index.categorylink_viewlogs'] = 'Näytä kaikki lokit';
$lang['AdminMain.index.heading_callback'] = 'Takaisinsoitto';
$lang['AdminMain.index.heading_event'] = 'Tapahtuma';
$lang['AdminMain.index.heading_method'] = 'Menetelmä';
$lang['AdminMain.index.heading_options'] = 'Toimenpiteet';
$lang['AdminMain.index.no_results'] = 'Webhookeja ei ole käytettävissä.';
$lang['AdminMain.index.option_delete'] = 'Poista';
$lang['AdminMain.index.option_edit'] = 'Muokkaa';
$lang['AdminMain.index.option_logs'] = 'Lokit';
$lang['AdminMain.index.page_title_add'] = 'Lisää webhook';
$lang['AdminMain.index.page_title_edit'] = 'Muokkaa webhookia';
$lang['AdminMain.index.page_title_index'] = 'Webhookit';
$lang['AdminMain.index.page_title_logs'] = 'Webhook-lokit';
$lang['AdminMain.index.text_description_incoming'] = 'Vastaanottaa HTTP-pyynnön ja laukaisee järjestelmässä tapahtuman pyynnössä vastaanotettujen parametrien avulla. Pyyntö voidaan vastaanottaa GET-, POST- tai JSON-muodossa.';
$lang['AdminMain.index.text_description_outgoing'] = 'Lähettää HTTP-pyynnön tiettyyn URL-osoitteeseen, kun tapahtuma laukeaa. Pyyntö voidaan lähettää GET-, POST-, PUT- tai JSON-menetelmällä.';
$lang['AdminMain.logs.boxtitle_logs'] = 'Webhook-lokit';
$lang['AdminMain.logs.categorylink_viewwebhooks'] = 'Näytä webhookit';
$lang['AdminMain.logs.confirm_resend'] = 'Haluatko varmasti lähettää tämän tapahtuman uudelleen?';
$lang['AdminMain.logs.field_filterdateend'] = 'Päättymispäivä';
$lang['AdminMain.logs.field_filterdatestart'] = 'Aloituspäivä';
$lang['AdminMain.logs.field_filterevent'] = 'Tapahtuma';
$lang['AdminMain.logs.field_filterhttpstatus'] = 'HTTP-tilakoodi';
$lang['AdminMain.logs.field_filterwebhook'] = 'Webhook';
$lang['AdminMain.logs.field_filterwebhook_all'] = 'Kaikki webhookit';
$lang['AdminMain.logs.heading_date_last_retry'] = 'Viimeinen yritys';
$lang['AdminMain.logs.heading_date_triggered'] = 'Käynnistymispäivä';
$lang['AdminMain.logs.heading_event'] = 'Tapahtuma';
$lang['AdminMain.logs.heading_http_response'] = 'HTTP-vastaus';
$lang['AdminMain.logs.heading_method'] = 'Menetelmä';
$lang['AdminMain.logs.heading_options'] = 'Toimenpiteet';
$lang['AdminMain.logs.heading_response'] = 'Vastaus';
$lang['AdminMain.logs.heading_webhook'] = 'Webhook';
$lang['AdminMain.logs.no_results'] = 'Lokitietoja ei ole saatavilla.';
$lang['AdminMain.logs.option_resend'] = 'Lähetä uudelleen';
$lang['AdminMain.modal.delete_text'] = 'Haluatko varmasti poistaa tämän webhookin?';

